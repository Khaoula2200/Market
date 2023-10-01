<?php

namespace App\Form;

use App\Entity\Project;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('description', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('image', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('duration', TextType::class, [
                'attr' => ['class' => 'form-control']
            ])
            ->add('visibility', CheckboxType::class)
//            ->add('user')
//            ->add('skills')
            ->add('save', SubmitType::class, [
                'attr' => [ 'class' => 'btn btn-primary']
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
