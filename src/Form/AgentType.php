<?php

namespace App\Form;

use App\Entity\Commisariat;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Noms',Type\TextType::class,
                array("attr"=>
                    array('placeholder'=>'Nom',
                        'class'=>"form-control"),'label' => ' '))
            ->add('Tel',Type\TextType::class,
                array("attr"=>
                    array('placeholder'=>'TEL',
                        'class'=>"form-control"),'label' => ' '))
            ->add('commisariat', EntityType::class, [
                "attr"=>array('placeholder'=>'','class'=>"form-control"),
                'label'=>' ',
                // looks for choices from this entity
                'class' => Commisariat::class,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.Nom', 'ASC');
                },

                // uses the User.username property as the visible option string
                'choice_label' => 'Nom',
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
            'data_class' => Agent::class,
        ]);
    }
}
