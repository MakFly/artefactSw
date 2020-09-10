<?php

namespace App\Form;

use App\Entity\SubstatArtefact;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;

class SubStatArtefactType extends AbstractType
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
            'class' => SubstatArtefact::class,
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('ss')
                    ->orderBy('ss.id', 'ASC');
            },
            'choice_label' => function ($subStats) {
                return $this->translator->trans($subStats->getName());
            },
        ]);
    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SubstatArtefact::class,
        ]);
    }
}
