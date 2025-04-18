<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* store/shop.html.twig */
class __TwigTemplate_b94871710bda51b188e419aa300ae6aa extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/shop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/shop.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "store/shop.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste des Produits";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container py-4\">
    <h1 class=\"mb-4 text-primary\">🗂️ Liste des Produits</h1>

    <div class=\"row mb-4\">
        <div class=\"col-md-8\">
            <form method=\"get\" class=\"row g-2\" id=\"search-form\">
                <div class=\"col-md-3\">
                    <input type=\"number\" name=\"min\" id=\"min-input\" class=\"form-control\" placeholder=\"Prix min\" step=\"0.01\">
                </div>
                <div class=\"col-md-3\">
                    <input type=\"number\" name=\"max\" id=\"max-input\" class=\"form-control\" placeholder=\"Prix max\" step=\"0.01\">
                </div>
                <div class=\"col-md-1\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\">OK</button>
                </div>
            </form>
        </div>
        <div class=\"col-md-4 text-end\">
            <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
        yield "\" class=\"btn btn-success\">➕ Ajouter un produit</a>
        </div>
    </div>

    <div id=\"produit-list\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 30
            yield "            <div class=\"row mb-3\">
                <div class=\"col-md-6\">
                    <h4>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 32), "html", null, true);
            yield "</h4>
                    <p>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 33), "html", null, true);
            yield "</p>
                    <p>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 34), "html", null, true);
            yield " €</p>
                    <button class=\"btn btn-outline-primary\" onclick=\"addToCart(";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 35), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 35), "js"), "html", null, true);
            yield "')\">Ajouter au panier</button>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "    </div>

    <div class=\"mt-3\">
        <button class=\"btn btn-info\" onclick=\"viewCart()\">🛒 Voir le panier</button>
    </div>
</div>

<!-- Cart Display (Hidden Initially) -->
<div id=\"cart-display\" style=\"display:none; position:fixed; top:0; right:0; background-color: white; width: 300px; height: 100%; box-shadow: -2px 0px 5px rgba(0,0,0,0.5); padding: 10px;\">
    <h3>Votre Panier</h3>
    <ul id=\"cart-items-list\">
        <!-- Cart items will be dynamically added here -->
    </ul>
    <div class=\"d-flex justify-content-between\">
        <span id=\"cart-total\">Total: DT 0.00</span>
        <button class=\"btn btn-success\" onclick=\"confirmPurchase()\">Passer une commande</button>
    </div>
    <button class=\"btn btn-secondary mt-2\" onclick=\"closeCart()\">Fermer</button>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        yield "<script>
// Function to add products to the cart
function addToCart(productId, price, name) {
    let cart = JSON.parse(localStorage.getItem('cart')) || []; // Retrieve cart from localStorage
    let product = cart.find(item => item.productId === productId);

    if (product) {
        product.quantity += 1; // Increase quantity if product is already in cart
    } else {
        cart.push({
            productId: productId,
            name: name,
            price: price,
            quantity: 1
        });
    }

    localStorage.setItem('cart', JSON.stringify(cart)); // Save updated cart to localStorage

    // Send the update to the server-side session
    fetch(`";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_store_add_to_cart");
        yield "`, {
        method: \"POST\",
        headers: {
            \"Content-Type\": \"application/json\",
        },
        body: JSON.stringify({
            productId: productId,
            price: price,
            quantity: 1
        })
    }).then(response => response.json())
      .then(data => {
          updateCartInfo(data.cart); // Update the cart count on the front end
      });
}

// Function to view cart items
function viewCart() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let cartHtml = '<ul>';
    let total = 0;
    cart.forEach(item => {
        let subtotal = item.price * item.quantity;
        total += subtotal;
        cartHtml += `<li>\${item.name} x \${item.quantity} - DT \${subtotal.toFixed(2)}</li>`;
    });
    cartHtml += '</ul>';
    document.getElementById('cart-items-list').innerHTML = cartHtml;
    document.getElementById('cart-total').innerText = 'Total: DT ' + total.toFixed(2);
    document.getElementById('cart-display').style.display = 'block'; // Show the cart
}

// Function to confirm the purchase (redirect to order confirmation page)
function confirmPurchase() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    if (cart.length === 0) {
        alert('Votre panier est vide!');
        return;
    }

    // You can send the cart data to the backend here, for example via an API request
    fetch('";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_store_checkout");
        yield "', {
        method: \"POST\",
        headers: {
            \"Content-Type\": \"application/json\",
        },
        body: JSON.stringify(cart)  // Send cart data to backend for order processing
    }).then(response => response.json())
      .then(data => {
          alert('Commande confirmée!');
          localStorage.removeItem('cart');  // Clear the cart after confirmation
          window.location.href = '/order-confirmation';  // Redirect to order confirmation page
      });
}

// Function to close the cart
function closeCart() {
    document.getElementById('cart-display').style.display = 'none';
}
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "store/shop.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  273 => 123,  229 => 82,  207 => 62,  194 => 61,  163 => 39,  149 => 35,  145 => 34,  141 => 33,  137 => 32,  133 => 30,  129 => 29,  121 => 24,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Produits{% endblock %}

{% block body %}
<div class=\"container py-4\">
    <h1 class=\"mb-4 text-primary\">🗂️ Liste des Produits</h1>

    <div class=\"row mb-4\">
        <div class=\"col-md-8\">
            <form method=\"get\" class=\"row g-2\" id=\"search-form\">
                <div class=\"col-md-3\">
                    <input type=\"number\" name=\"min\" id=\"min-input\" class=\"form-control\" placeholder=\"Prix min\" step=\"0.01\">
                </div>
                <div class=\"col-md-3\">
                    <input type=\"number\" name=\"max\" id=\"max-input\" class=\"form-control\" placeholder=\"Prix max\" step=\"0.01\">
                </div>
                <div class=\"col-md-1\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\">OK</button>
                </div>
            </form>
        </div>
        <div class=\"col-md-4 text-end\">
            <a href=\"{{ path('app_produit_new') }}\" class=\"btn btn-success\">➕ Ajouter un produit</a>
        </div>
    </div>

    <div id=\"produit-list\">
        {% for produit in produits %}
            <div class=\"row mb-3\">
                <div class=\"col-md-6\">
                    <h4>{{ produit.nom }}</h4>
                    <p>{{ produit.description }}</p>
                    <p>{{ produit.prix }} €</p>
                    <button class=\"btn btn-outline-primary\" onclick=\"addToCart({{ produit.id }}, {{ produit.prix }}, '{{ produit.nom|e('js') }}')\">Ajouter au panier</button>
                </div>
            </div>
        {% endfor %}
    </div>

    <div class=\"mt-3\">
        <button class=\"btn btn-info\" onclick=\"viewCart()\">🛒 Voir le panier</button>
    </div>
</div>

<!-- Cart Display (Hidden Initially) -->
<div id=\"cart-display\" style=\"display:none; position:fixed; top:0; right:0; background-color: white; width: 300px; height: 100%; box-shadow: -2px 0px 5px rgba(0,0,0,0.5); padding: 10px;\">
    <h3>Votre Panier</h3>
    <ul id=\"cart-items-list\">
        <!-- Cart items will be dynamically added here -->
    </ul>
    <div class=\"d-flex justify-content-between\">
        <span id=\"cart-total\">Total: DT 0.00</span>
        <button class=\"btn btn-success\" onclick=\"confirmPurchase()\">Passer une commande</button>
    </div>
    <button class=\"btn btn-secondary mt-2\" onclick=\"closeCart()\">Fermer</button>
</div>

{% endblock %}

{% block javascripts %}
<script>
// Function to add products to the cart
function addToCart(productId, price, name) {
    let cart = JSON.parse(localStorage.getItem('cart')) || []; // Retrieve cart from localStorage
    let product = cart.find(item => item.productId === productId);

    if (product) {
        product.quantity += 1; // Increase quantity if product is already in cart
    } else {
        cart.push({
            productId: productId,
            name: name,
            price: price,
            quantity: 1
        });
    }

    localStorage.setItem('cart', JSON.stringify(cart)); // Save updated cart to localStorage

    // Send the update to the server-side session
    fetch(`{{ path('app_store_add_to_cart') }}`, {
        method: \"POST\",
        headers: {
            \"Content-Type\": \"application/json\",
        },
        body: JSON.stringify({
            productId: productId,
            price: price,
            quantity: 1
        })
    }).then(response => response.json())
      .then(data => {
          updateCartInfo(data.cart); // Update the cart count on the front end
      });
}

// Function to view cart items
function viewCart() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    let cartHtml = '<ul>';
    let total = 0;
    cart.forEach(item => {
        let subtotal = item.price * item.quantity;
        total += subtotal;
        cartHtml += `<li>\${item.name} x \${item.quantity} - DT \${subtotal.toFixed(2)}</li>`;
    });
    cartHtml += '</ul>';
    document.getElementById('cart-items-list').innerHTML = cartHtml;
    document.getElementById('cart-total').innerText = 'Total: DT ' + total.toFixed(2);
    document.getElementById('cart-display').style.display = 'block'; // Show the cart
}

// Function to confirm the purchase (redirect to order confirmation page)
function confirmPurchase() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    if (cart.length === 0) {
        alert('Votre panier est vide!');
        return;
    }

    // You can send the cart data to the backend here, for example via an API request
    fetch('{{ path('app_store_checkout') }}', {
        method: \"POST\",
        headers: {
            \"Content-Type\": \"application/json\",
        },
        body: JSON.stringify(cart)  // Send cart data to backend for order processing
    }).then(response => response.json())
      .then(data => {
          alert('Commande confirmée!');
          localStorage.removeItem('cart');  // Clear the cart after confirmation
          window.location.href = '/order-confirmation';  // Redirect to order confirmation page
      });
}

// Function to close the cart
function closeCart() {
    document.getElementById('cart-display').style.display = 'none';
}
</script>
{% endblock %}
", "store/shop.html.twig", "C:\\Users\\eyane\\Desktop\\symfoni crud 2\\gestioncommande\\templates\\store\\shop.html.twig");
    }
}
