<?php
namespace App\Form;

use App\Entity\Cadeau;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CadeauType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomCadeaux', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom du cadeau est obligatoire.']),
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
            ->add('typeCadeaux', null, [
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le type du cadeau est obligatoire.']),
                    new Assert\Length([
                        'max' => 100,
                        'maxMessage' => 'Le type ne doit pas dépasser {{ limit }} caractères.'
                    ])
                ],
                'empty_data' => '',
                'attr' => ['class' => 'form-control']
            ])
            ->add('quantiteDisponible', null, [
                'constraints' => [
                    new Assert\NotNull(['message' => 'La quantité est obligatoire.']),
                    new Assert\PositiveOrZero(['message' => 'La quantité doit être positive ou nulle.'])
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
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cadeau::class,
        ]);
    }
}

