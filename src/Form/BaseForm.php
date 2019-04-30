<?php

// src/Form/BaseForm.php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Contracts\Translation\TranslatorInterface;

class BaseForm extends AbstractType {
    
    protected $builder;
    protected $translator;
    
    function __construct(
            
            
            TranslatorInterface $translator
    
            
            )
    {
        $this->translator = $translator;
    }
    
}