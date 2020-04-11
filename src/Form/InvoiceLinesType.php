<?php

namespace App\Form;

use App\Entity\InvoiceLines;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class InvoiceLinesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date', DateType::class, array(
                'mapped' => false,
                'widget' => 'single_text',
                'html5' => false,
                'format' => 'dd-MM-yyyy'
            ))
            ->add('Description')
            ->add('quantity')
            ->add('amount')
            ->add('amountIva')
            ->add('total')
            ->add('save', SubmitType::class, array(
                'label' => 'Invoice save'
            ));
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => InvoiceLines::class,
        ]);
    }
}
