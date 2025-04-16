<?php
namespace App\Form;

use App\Entity\Cadeau;
use App\Entity\Sponsor;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SponsorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomSponsor', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom du sponsor est obligatoire.']),
                    new Assert\Length([
                        'max' => 100,
                        'maxMessage' => 'Le nom ne doit pas dépasser {{ limit }} caractères.'
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[A-Za-zÀ-ÖØ-öø-ÿ\s\-]+$/u',
                        'message' => 'Le nom ne doit contenir que des lettres, des espaces ou des tirets.'
                    ])
                ],
                'empty_data' => '',
                'attr' => ['class' => 'form-control']
            ])
            ->add('typeSponsor', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le type du sponsor est obligatoire.']),
                    new Assert\Length([
                        'max' => 100,
                        'maxMessage' => 'Le type ne doit pas dépasser {{ limit }} caractères.'
                    ])
                ],
                'empty_data' => '',
                'attr' => ['class' => 'form-control']
            ])
            ->add('description', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La description est obligatoire.']),
                    new Assert\Length([
                        'max' => 100,
                        'maxMessage' => 'La description ne doit pas dépasser {{ limit }} caractères.'
                    ])
                ],
                'empty_data' => '',
                'attr' => ['class' => 'form-control']
            ])
            ->add('idCadeaux', EntityType::class, [
                'class' => Cadeau::class,
                'choice_label' => 'nomCadeaux',
                'label' => 'Cadeau associé',
                'placeholder' => 'Sélectionnez un cadeau',
                'constraints' => [
                    new Assert\NotNull(['message' => 'Veuillez sélectionner un cadeau.'])
                ],
                'empty_data' => '',
                'attr' => ['class' => 'form-select']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sponsor::class,
        ]);
    }
}
