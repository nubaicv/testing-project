<?php

// src/Controller/BaseController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
//use Symfony\Component\HttpFoundation\File\File;

abstract class BaseController extends AbstractController {

    protected $translator;
    protected $session;
            
    function __construct(
            
            
            TranslatorInterface $translator,
            SessionInterface $session
            
            
            )
    {
        $this->translator = $translator;
        $this->session = $session;
    } // end of __construct
    
}

