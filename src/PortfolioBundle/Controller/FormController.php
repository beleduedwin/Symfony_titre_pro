<?php
/**
 * Created by PhpStorm.
 * User: lapiscine
 * Date: 07/04/2018
 * Time: 05:48
 */

namespace PortfolioBundle\Controller;


use PortfolioBundle\Entity\Articles;
use PortfolioBundle\Entity\Comment;
use PortfolioBundle\Entity\Comments;
use PortfolioBundle\Form\ArticlesType;
use PortfolioBundle\Form\CommentsType;
use PortfolioBundle\Form\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FormController extends Controller
{

//****************************** Create a form and Update articles ****************************************************

    public function formAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $articles = new Articles();
        $articles->setPublishedAt(new \DateTime());
//        $articles->setPublishedAt(new \DateTime('now'));

//        from current element, create a form with the articles, and pass the variable that contain the instance of entitie
        $form = $this->createForm(ArticlesType::class, $articles);

//        If the post was send,
        if ($request->isMethod('Post')){

//            This method add data to the form
            $form->handleRequest($request);

            if ($form->isValid()){

//                Store data in to the workspace
                $em->persist($articles);
//                $em->persist($articles);

//                End push it in to the database
                $em->flush();

                $this->addFlash('send', 'le post a été enregistré');

//                if the post was send to dataBase, redirect to route of Articles.html.twig
                return $this->redirectToRoute('portfolio_admin_articles');
//                return $this->redirectToRoute('portfolio_articles');
            }

//            If data wasn't send, redirect to form route of form_articles.html.twig
            return $this->redirectToRoute('portfolio_form');
        }

//        create a form view
        $vars['form'] = $form->createView();
        return $this->render('@Portfolio/Default/formulaires/form_articles.html.twig', $vars);
//        return $this->render('@Portfolio/Default/form', $vars);

    }

}