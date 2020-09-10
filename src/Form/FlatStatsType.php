<?php

namespace App\Form;

use App\Entity\FlatStats;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;

class FlatStatsType extends AbstractType
{
    /**
     * @var translator
     */
    private $translator;

    public function __construct(TranslatorInterface $translator) 
    {
        $this->translator = $translator;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', EntityType::class, [
            'required' => false,
            'class' => FlatStats::class,
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('f')
                    ->orderBy('f.id', 'ASC');
            },
            'choice_label' => function ($flatStats) {
                return $this->translator->trans($flatStats->getName());
            },
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FlatStats::class,
        ]);
    }
}
