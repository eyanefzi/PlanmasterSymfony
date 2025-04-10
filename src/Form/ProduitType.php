<?php

namespace App\Form;

use App\Entity\Fournisseur;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du produit',
                'required' => false, // HTML5 désactivé
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
                'required' => false,
            ])
            ->add('prix', NumberType::class, [
                'scale' => 2,
                'html5' => true,
                'attr' => ['step' => '0.01'],
                'label' => 'Prix',
                'required' => false,
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Image du produit (JPG ou PNG)',
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control', 'onchange' => 'previewImage(event)'],
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png'],
                        'mimeTypesMessage' => 'Veuillez téléverser une image JPG ou PNG valide.',
                    ])
                ]
            ])
            ->add('fournisseur', EntityType::class, [
                'class' => Fournisseur::class,
                'choice_label' => 'nomEntreprise',
                'placeholder' => 'Sélectionner un fournisseur',
                'label' => 'Fournisseur',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
