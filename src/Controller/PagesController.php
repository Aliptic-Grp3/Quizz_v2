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
        //afin de le passer dans 'pages'

        
        $user = $this->getUser();
        $pages = new Pages;
        if($user && !$pages){
        $pages = $this->getDoctrine()->getRepository(Pages::class)->findOneBy(array('titre' => $user->getTitre()));
        } else {
            $pages->setTitre('CGU');
            $pages->setContenu("Conditions Générales d'Utilisation");
            $pages->setPublished(true);
        }
        
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
            'pages' => $pages,
        ]);
    }
}
