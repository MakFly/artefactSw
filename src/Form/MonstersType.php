<?php

namespace App\Form;

use App\Entity\Monsters;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;

class MonstersType extends AbstractType
{
     public function buildForm(FormBuilderInterface $builder, array $options)
    {        
        $builder->add('awake', EntityType::class, [
            // looks for choices from this entity
            'class' => Monsters::class,
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('m')
                    ->orderBy('m.awake', 'ASC');
            },
            'choice_label' => function ($monster) {
                return $monster->getAwake();
            }
        ]);
       
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Monsters::class,
        ]);
    }
}
