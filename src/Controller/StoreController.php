<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/store')]
class StoreController extends AbstractController
{
    // Display products and handle filtering by price
    #[Route('/products', name: 'app_store_products', methods: ['GET'])]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $min = $request->query->get('min');
        $max = $request->query->get('max');

        $qb = $entityManager->getRepository(Produit::class)->createQueryBuilder('p');

        if ($min !== null && is_numeric($min)) {
            $qb->andWhere('p.prix >= :min')
               ->setParameter('min', $min);
        }

        if ($max !== null && is_numeric($max)) {
            $qb->andWhere('p.prix <= :max')
               ->setParameter('max', $max);
        }

        $produits = $qb->getQuery()->getResult();

        return $this->render('store/products.html.twig', [
            'produits' => $produits,
        ]);
    }

    // Add product to the cart and update localStorage (client-side only)
    #[Route('/add-to-cart', name: 'app_store_add_to_cart', methods: ['POST'])]
    public function addToCart(Request $request, EntityManagerInterface $entityManager): Response
    {
        $data = json_decode($request->getContent(), true);
        $productId = $data['productId'];
        $price = $data['price'];
        $name = $data['name'];

        // Get the product from the database
        $product = $entityManager->getRepository(Produit::class)->find($productId);

        if (!$product) {
            return $this->json(['error' => 'Product not found'], 404);
        }

        // Get the cart from localStorage (via session)
        $cart = json_decode($request->getSession()->get('cart', '[]'), true);

        // Add or update the cart item
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += 1;
        } else {
            $cart[$productId] = [
                'product_id' => $productId,
                'price' => $price,
                'quantity' => 1,
                'name' => $name,
            ];
        }

        // Save the updated cart to session
        $request->getSession()->set('cart', json_encode($cart));

        return $this->json(['cart' => $cart]);
    }

    #[Route('/new-commande', name: 'app_store_new_commande', methods: ['GET', 'POST'])]
    public function newCommande(Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            $cartData = json_decode($request->getContent(), true);  // Get the cart data
    
            // Ensure the cart data is valid
            if (!$cartData) {
                return $this->json(['error' => 'Invalid cart data'], 400);  // Respond with an error message if data is invalid
            }
    
            $cartItems = [];
            $totalAmount = 0;
    
            // Process the cart items
            foreach ($cartData as $item) {
                $product = $entityManager->getRepository(Produit::class)->find($item['productId']);
                if ($product) {
                    $cartItems[] = [
                        'product' => $product,
                        'quantity' => $item['quantity'],
                        'price' => $item['price'],
                        'total' => $item['price'] * $item['quantity'],
                    ];
                    $totalAmount += $item['price'] * $item['quantity'];
                }
            }
    
            return $this->json([
                'cartItems' => $cartItems,
                'totalAmount' => $totalAmount
            ]);
        }
    
        // If not a POST request, redirect to the products page
        return $this->redirectToRoute('app_store_products');
    }
    
    // Confirm the order
    #[Route('/confirm-order', name: 'app_store_confirm_order', methods: ['POST'])]
    public function confirmOrder(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cartData = $request->getSession()->get('cart');
        if (!$cartData) {
            return $this->redirectToRoute('app_store_products'); // Redirect back if no cart data
        }

        // Process the order (save to DB, etc.)
        $cart = json_decode($cartData, true);

        // Here you would save the order details to the database and associate it with the user, for example:
        // - Create an Order entity
        // - Save it to the database
        // - Associate the order with the cart items (products)

        // Remove cart after confirmation
        $request->getSession()->remove('cart');

        // Redirect to order success page
        return $this->render('store/order_success.html.twig'); // Display order success page
    }
}
