<?php

namespace Administration\AdministrationBundle\Controller;

use Administration\AdministrationBundle\Entity\VisiteArticle;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Administration\AdministrationBundle\Entity\Article;
use Administration\AdministrationBundle\Form\ArticleType;

/**
 * Article controller.
 *
 */
class ArticleController extends Controller
{
    /**
     * Lists all Article entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('AdministrationBundle:Article')->findAll();

        return $this->render('article/index.html.twig', array(
            'articles' => $articles
        ));
    }

    /**
     * Creates a new Article entity.
     *
     */
    public function newAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm('Administration\AdministrationBundle\Form\ArticleType', $article);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $articles = $em->getRepository('AdministrationBundle:Article')->findAll();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $article->setStatutArticle("desactive");
            $article->setDateArticle(new \DateTime());
            $article->setAuteur($user);
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('article_index');
        }

        return $this->render('article/new.html.twig', array(
            'article' => $article,
            'articles'=>$articles,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Article entity.
     *
     */
    public function showAction(Article $article)
    {
        $em = $this->getDoctrine()->getManager();
        $deleteForm = $this->createDeleteForm($article);
        $nombreVisite = $em->getRepository('AdministrationBundle:VisiteArticle')->findNbrVisite($article);
        $visite = new VisiteArticle();
        $visite->setArticle($article);
        $visite->setDateVisiteArticle(new \DateTime());
        $em->persist($visite);
        $em->flush();
        return $this->render('article/show.html.twig', array(
            'article' => $article,
            'delete_form' => $deleteForm->createView(),
            'nombreVisite'=>$nombreVisite
        ));
    }

    /**
     * Displays a form to edit an existing Article entity.
     *
     */
    public function editAction(Request $request, Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);
        $editForm = $this->createForm('Administration\AdministrationBundle\Form\ArticleType', $article);
        $editForm->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('AdministrationBundle:Article')->findAll();
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('article_index');
        }

        return $this->render('article/edit.html.twig', array(
            'article' => $article,
            'articles'=>$articles,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Article entity.
     *
     */
    public function deleteAction(Request $request, Article $article)
    {
        $form = $this->createDeleteForm($article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();
        }

        return $this->redirectToRoute('article_index');
    }

    /**
     * Creates a form to delete a Article entity.
     *
     * @param Article $article The Article entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Article $article)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('article_delete', array('id' => $article->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function gridAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('AdministrationBundle:Article')->findAll();
        /*$data = array();
        foreach ($articles as $value){
            $nombreVisite = $em->getRepository('AdministrationBundle:VisiteArticle')->findNbrVisite($value);
            //$a = array($article['jour'], intval($value['nbrArticle']));
            //array_push($value);
        }

        dump($value);
        die;*/


        $nbr = $em->getRepository('AdministrationBundle:Article')->getNb();
        return $this->render('article/grid.html.twig', array(
            'articles' => $articles,
            'nbr'=>$nbr
        ));
    }
}
