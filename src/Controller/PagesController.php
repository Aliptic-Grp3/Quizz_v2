<?php

namespace App\Controller;

use App\Entity\Pages;
use App\Repository\PagesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/pages", name="pages")
     */
    public function index(PagesRepository $pagesRepository)
    {
        //Je voudrais récupérer le titre de la page récupérer par le biais d'un bouton
        //afin de le passer dans 'controller_name'
        

        /*$pages = $this->getDoctrine()->getRepository(Pages::class)->findOneBy(array('titre' => ->getTitre));
        */
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }
}
