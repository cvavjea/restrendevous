<?php

namespace App\Form;


use App\Entity\Commisariat;
use App\Entity\Prendre;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PrendreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('Commisariat', EntityType::class, [
                    "attr"=>array('placeholder'=>'','class'=>"form-control"),
                    'label'=>'Commisariat',
                    // looks for choices from this entity
                    'class' => Commisariat::class,
                    'query_builder' => function (EntityRepository $er) {
                        $role =User::ROLE_DEMANDEUR;
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
            ) /*->add('Demandeurs', EntityType::class, [
                    "attr"=>array('placeholder'=>'','class'=>"form-control"),
                    'label'=>'Demandeurs',
                    // looks for choices from this entity
                    'class' => User::class,
                    'query_builder' => function (EntityRepository $er) {
                        $role =User::ROLE_DEMANDEUR;
                        return $er->createQueryBuilder('u')
                            ->where('u.roles Like :val')
                            ->setParameter('val', "%$role%")
                            ->orderBy('u.firstName', 'ASC');
                    },

                    // uses the User.username property as the visible option string
                    'choice_label' => 'firstName',
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
                    'class' => User::class,
                    'query_builder' => function (EntityRepository $er) {
                        $role =User::ROLE_AGENT;
                        return $er->createQueryBuilder('u')
                            ->where('u.roles like :val')
                            ->setParameter('val', "%$role%")
                            ->orderBy('u.firstName', 'ASC');
                    },

                    // uses the User.username property as the visible option string
                    'choice_label' => 'firstName',
                    // used to render a select box, check boxes or radios
                    // 'multiple' => true,
                    // 'expanded' => true,
                    'empty_data' => null,
                    'required' => false,
                ]
            )
            ->add('Dateredevous', Type\DateType::class, [
                "attr"=>array('placeholder'=>'','class'=>"form-control")])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Prendre::class,
        ]);
    }
}
