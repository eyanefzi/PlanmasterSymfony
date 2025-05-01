<?php

namespace App\Form;

use App\Entity\Client;
use App\Entity\Commande;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de commande',
                'required' => false, // Désactiver validation HTML5
                'empty_data' => null,
            ])
            ->add('status', TextType::class, [
                'label' => 'Statut',
                'required' => false,
            ])
            ->add('montantTotal', NumberType::class, [
                'scale' => 2,
                'html5' => true,
                'attr' => ['step' => '0.01'],
                'label' => 'Montant Total',
                'required' => false,
            ])
            ->add('quantite', IntegerType::class, [
                'label' => 'Quantité',
                'required' => false,
            ])
            ->add('isPaid', CheckboxType::class, [
                'required' => false,
                'label' => 'Payée ?',
            ])
            ->add('client', EntityType::class, [
                'class' => Client::class,
                'choice_label' => fn(Client $client) => $client->getNom() . ' ' . $client->getPrenom(),
                'label' => 'Client',
                'placeholder' => 'Sélectionner un client',
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}