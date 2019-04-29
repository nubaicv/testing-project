<?php

// src/Controller/ProductsController.php

namespace App\Controller;

use App\Entity\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProductController extends BaseController {

    public function new_product(Request $request) {

        $product = new Product();

        $form = $this->createFormBuilder($product)
                ->add('name', TextType::class, ['label' => $this->translator->trans('Nome')])
                ->add('description', TextareaType::class, ['label' => $this->translator->trans('Descrição')])
                ->add('price', IntegerType::class, ['label' => $this->translator->trans('Preço')])
                ->add('save', SubmitType::class, ['label' => $this->translator->trans('Salvar produto')])
                ->getForm();

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
