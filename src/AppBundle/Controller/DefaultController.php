<?php

namespace AppBundle\Controller;

use PortfolioBundle\Entity\Articles;
use PortfolioBundle\Form\ArticlesType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\AnonymousToken;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

//    *********************************$ Administration ********************************

    public function adminAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

//        get Repository and put in $repArticles
        $repArticles = $em->getRepository('PortfolioBundle:Articles');

//        From repository, accès to findAll method
        $articles = $repArticles->myFindAll();

        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $articles,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 5)
        );

        return $this->render('@Portfolio/Default/articles_list.html.twig', ['articles'=>$result]);

    }

    /**
     * @return RedirectResponse
     */
    public function logoutAction() {

        $token = new AnonymousToken('null', 'null', array('null', 'null'));
        $this->get('security.token_storage')->setToken($token);

        // Redirect User to Root/Hello/Wherever
        return new RedirectResponse($this->generateUrl('portfolio_homepage'));
    }

}
