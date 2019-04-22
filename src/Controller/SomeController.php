<?php

namespace App\Controller;

class SomeController extends BaseController
{

    public function index()
    {
        if (true) {
            throw $this->createNotFoundException("Not foundy!");
        }
//        return $this->render('some/index.html.twig', [
//            'controller_name' => 'SomeController'
//        ]);
    }
}
