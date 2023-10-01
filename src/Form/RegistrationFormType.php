<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Email', 'aria-label' => 'Email', 'aria-describedby' => 'email-addon'],
            ])
            ->add('username', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Name', 'aria-label' => 'Name', 'aria-describedby' => 'name-addon'],
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password', 'class' => 'form-control', 'placeholder' => 'Password', 'aria-label' => 'Password', 'aria-describedby' => 'password-addon'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('phone', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Phone', 'aria-label' => 'Phone', 'aria-describedby' => 'phone-addon'],
            ])
            ->add('introduction', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Introduction', 'aria-label' => 'Introduction', 'aria-describedby' => 'introduction-addon'],
            ])
            ->add('location', null, [
                'attr' => ['class' => 'form-control', 'placeholder' => 'Location', 'aria-label' => 'Location', 'aria-describedby' => 'location-addon'],
            ])
            // ->add('category', EntityType::class, [
            //     'class' => Category::class,
            //     'choice_label' => 'name', // Assuming "name" is the property in the Category entity to display in the select box
            //     'placeholder' => 'Select a category',
            //     'attr' => ['class' => 'form-control', 'aria-label' => 'Category', 'aria-describedby' => 'category-addon'],
            // ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
