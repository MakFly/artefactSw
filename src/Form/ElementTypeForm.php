<?php

namespace App\Form;

use App\Entity\ElementType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Contracts\Translation\TranslatorInterface;

class ElementTypeForm extends AbstractType
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
            'class' => ElementType::class,
            'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('e_t')
                    ->orderBy('e_t.id', 'ASC');
            },
            'choice_label' => function ($elementType) {
                return $this->translator->trans($elementType->getName());
            },
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ElementType::class,
        ]);
    }
}
