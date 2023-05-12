<?php

namespace App\Form;

use App\Entity\Loan;
use App\Enum\TermEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoanFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('amount',NumberType::class, [
                'required' => true,
                'error_bubbling' => true,
                'attr' => [
                    'min' => 1000,
                    'max' => 20000
                ],
                'html5' => true,
            ])
            ->add('term', ChoiceType::class, [
                'required' => true,
                'multiple' => false,
                'expanded' => false,
                'choices'  => TermEnum::toArray(),
                'row_attr' => [
                    'class' => 'input-group mb-3',
                ],
            ])
            ->add('fee', NumberType::class, [
                'required' => true,
                'error_bubbling' => true,
                'attr' => [
                    'min' => 1,
                    'max' => 20000
                ],
                'html5' => true,
            ])
            ->add('Submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Loan::class,
        ]);
    }
}
