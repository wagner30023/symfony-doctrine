<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(): Response
    {
        $lista = [
            'nome' => 'Carlos Wagner',
            'idade' => 39,
            'profissao' => 'desenvolvedor', 
            'ciddade' => 'Recanto das Emas'
        ];

        return $this->render('index.html.twig',['lista' => $lista]);
    }

     /**
     * @Route("/product/{slug}", name="product_single")
     */
    public function product($slug): Response
    {
        return $this->render('single.html.twig',compact($slug));
    }
}
