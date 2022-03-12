<?php

namespace App\Form;

use App\Classe\Filter;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class FilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder    
            ->add('string', TextType::class,[
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' =>'Votre recherche ...',
                    'class' => 'form-control-sm'
                ]
            ])
            ->add('categories', EntityType::class,[
                'label' => false,
                'required' => false, 
                'class' => Category::class,
                'multiple' => true,
                'expanded' => true,
                'attr' => [
                'class' => 'form-control-sm'
              ]
            ])
            ->add('submit',SubmitType::class,[
                'label' => 'Rechercher',
                'attr' => [
                    'class' => 'btn-block btn-info'
                ]
            ]);   
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data-class => Search::class',
            'method'=> 'GET',
            'crsf_protection' => false,
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}