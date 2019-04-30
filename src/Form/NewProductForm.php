<?php

// src/Form/NewProductForm.php

namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class NewProductForm extends BaseForm {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
                ->add('name', TextType::class, ['label' => $this->translator->trans('Nome') . ':', 'required' => false])
                ->add('description', TextareaType::class, ['label' => $this->translator->trans('Descrição') . ':', 'required' => false])
                ->add('price', IntegerType::class, ['label' => $this->translator->trans('Preço') . ':', 'required' => false])
                ->add('expiration_date', DateType::class, [
                            'label' => $this->translator->trans('Data de validade') . ':',
                            'widget' => 'single_text',
                            'required' => false])
                ->add('save', SubmitType::class, ['label' => $this->translator->trans('Salvar produto') . ':']);
    }
}