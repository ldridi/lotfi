<?php

namespace Administration\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $nbrUser = $em->getRepository('ClientBundle:Client')->findNbrUser();
        $nbrArticle = $em->getRepository('AdministrationBundle:Article')->getNb();
        $nbrRecette = $em->getRepository('AdministrationBundle:Recette')->getNb();
        return $this->render('AdministrationBundle:Default:index.html.twig', array('nbrUser'=>$nbrUser,'nbrArticle'=>$nbrArticle,'nbrRecette'=>$nbrRecette));
    }
}
