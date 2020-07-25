<?php

namespace App\Form;

use App\Entity\Agent;
use App\Entity\Calendrier;
use App\Entity\Demandeur;
use App\Entity\Prendre;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PrendreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Demandeurs', EntityType::class, [
                    "attr"=>array('placeholder'=>'','class'=>"form-control"),
                    'label'=>'Demandeurs',
                    // looks for choices from this entity
                    'class' => Demandeur::class,
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                            ->orderBy('c.Noms', 'ASC');
                    },

                    // uses the User.username property as the visible option string
                    'choice_label' => 'Noms',
                    // used to render a select box, check boxes or radios
                    // 'multiple' => true,
                    // 'expanded' => true,
                    'empty_data' => null,
                    'required' => false,
                ]
            )
            ->add('Agents', EntityType::class, [
                    "attr"=>array('placeholder'=>'','class'=>"form-control"),
                    'label'=>'Agents',
                    // looks for choices from this entity
                    'class' => Agent::class,
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                            ->orderBy('c.Noms', 'ASC');
                    },

                    // uses the User.username property as the visible option string
                    'choice_label' => 'Noms',
                    // used to render a select box, check boxes or radios
                    // 'multiple' => true,
                    // 'expanded' => true,
                    'empty_data' => null,
                    'required' => false,
                ]
            )
            ->add('Calendriers', EntityType::class, [
                    "attr"=>array('placeholder'=>'','class'=>"form-control"),
                    'label'=>'Calendriers',
                    // looks for choices from this entity
                    'class' => Calendrier::class,
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('c')
                            ->orderBy('c.DateRdv', 'ASC');
                    },

                    // uses the User.username property as the visible option string
                    'choice_label' => 'DateRdv',
                    // used to render a select box, check boxes or radios
                    // 'multiple' => true,
                    // 'expanded' => true,
                    'empty_data' => null,
                    'required' => false,
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prendre::class,
        ]);
    }
}
