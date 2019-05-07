<?php

// src/Controller/ProductController.php

namespace App\Controller;

use App\Dao\Product_obj;
use App\Dao\Product_dao;
use App\Form\NewProductForm;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends BaseController {

    public function new_product(Request $request) {

        $product = new Product_obj();
        $dao = new Product_dao();

        $form = $this->createForm(NewProductForm::class, $product);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $product = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();
            
            return $this->redirectToRoute('new-product-created');
        }

        return $this->render("products/new_product.html.twig", [
                    "title" => $this->translator->trans("Novo produto"),
                    "form" => $form->createView(),
                    "locales" => $this->locales
        ]);
    }
    
    public function created() {
        
        return $this->render("products/new_product_created.html.twig", [
                    "title" => $this->translator->trans("Produto criado com sucesso"),
                    "locales" => $this->locales
        ]);
    }

}
