<?php

// src/Controller/BaseController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\File\File;

abstract class BaseController extends AbstractController {

    protected $translator;
    protected $session;
    protected $locales = ['pt', 'en', 'fr'];
            
    function __construct(
            
            
            TranslatorInterface $translator,
            SessionInterface $session
            
                        
            )
    {
        $this->translator = $translator;
        
        $this->session = $session;
        $this->setSomeSessionData(["foo" => "bar"]);
    } // end of __construct
    
    protected function setSomeSessionData($data) {
        
        foreach ($data as $key => $value) {
            $this->session->set($key, $value);
        }
    }
    
}

