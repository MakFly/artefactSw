<?php

namespace App\Form;

use App\Entity\PreferedStats;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PreferedStatsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', EntityType::class, [
            'required' => false,
            'class' => PreferedStats::class,
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('ps')
                    ->where('ps.id = :idAtk')
                    ->orWhere('ps.id = :idHp')
                    ->orWhere('ps.id = :idDef')
                    ->setParameter(':idAtk', 2)
                    ->setParameter(':idHp', 5)
                    ->setParameter(':idDef', 7)
                    ->orderBy('ps.id', 'ASC');
            },
            'choice_label' => function ($preferedStats) {
                // return $this->translator->trans($preferedStats->getName());
                return $preferedStats->getName();
            },
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PreferedStats::class,
        ]);
    }
}
