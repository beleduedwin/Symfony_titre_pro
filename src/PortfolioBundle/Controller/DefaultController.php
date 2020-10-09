<?php

namespace PortfolioBundle\Controller;

use PortfolioBundle\Entity\Articles;
use PortfolioBundle\Entity\Comment;
use PortfolioBundle\Entity\Comments;
use PortfolioBundle\Entity\Contact;
use PortfolioBundle\Form\ArticlesType;
use PortfolioBundle\Form\CommentsType;
use PortfolioBundle\Form\CommentType;
use PortfolioBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

//***************************************** Index ****************************************************************

    public function indexAction(Request $originalRequest)
    {

        $em = $this->getDoctrine()->getManager();

//        $sideBar = $repArticles->

//        get Repository and put in $repArticles
        $repArticles = $em->getRepository('PortfolioBundle:Articles');

//        From repository, accès to findAll method
        $articles = $repArticles->findFiveLast();
        $vars['articles'] = $articles;


        $em = $this->getDoctrine()->getManager();

        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);


        if ($originalRequest->getMethod() === Request::METHOD_POST){


            $form->handleRequest($originalRequest);

            $data= $form->getData();

            if ($form->isValid()){
                $em->persist($contact);
                $em->flush();

//create a transport
                $transport = \Swift_SmtpTransport::newInstance('tls://smtp.gmail.com', 465)
                    ->setUsername('edwin.beledu@lapiscine.pro')
                    ->setPassword('1Formation');

//                    create de mailer using the create tranport
                $mailer = new \Swift_Mailer($transport);


                $message = new \Swift_Message();


                $message->setSubject('Your subject')
                    ->setFrom(['john@doe.com' => 'John Doe'])
                    // Set the To addresses with an associative array (setTo/setCc/setBcc)
                    ->setTo(['edwin.beledu@lapiscine.pro'])
                    // Give it a body
                    ->setBody($data->getMessage().'<br>email:'.$data->getEmail())
                    ->setContentType("text/html")
                ;

                $mailer->send($message);

                $this->addFlash(
                    'success',
                    'Votre message a été envoyé!');
                $url = $this->generateUrl('portfolio_homepage') . "#contact";
                return  $this->redirect($url);
            }
        }
        $vars['form'] = $form->createView();

        return $this->render('@Portfolio/Default/index.html.twig', $vars);

    }

//***************************************** Render Articles ****************************************************************

//    This method get all the articles
    public function renderArticlesAction()
    {

//        From controller use doctrine to get manager
        $em = $this->getDoctrine()->getManager();
        $repArticles = $em->getRepository('PortfolioBundle:Articles');
        $articles = $repArticles->findAll();
        return $this->render('@Portfolio/Default/Articles.html.twig',['articles'=>$articles] );
    }

//************************************  show one article and comment ***************************************************

//  Show the article by parameter(on click) and link with correspondent comments

    public function showArticleAction(Request $request, $id)
    {

//        From current element and Doctrine, get Manager method
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('PortfolioBundle:Articles');

//      From the Articles repository, get findfiveLast method
        $articles = $rep->findFiveLast();


//       From repository, find id passed by parameter
        $article = $rep->find($id);


//        Get Manager method
        $em = $this->getDoctrine()->getManager();

//.............. Instance of comment entitie

        $comments = new Comments();

//        we set the date
        $comments->setDate(new \DateTime('now'));

//        Set foreign key in comment entitie
        $comments->setArticle($article);

//         Count comment
        $rep = $em->getRepository('PortfolioBundle:Comments');
        $commentNumber = $rep->findCommentByArticle($article);


        $comments2 = $rep->findAllby($article);

//............. create a form with comment type, use comment entitie
        $form = $this->createForm(CommentsType::class, $comments);

//        If the post was send,
        if ($request->isMethod('Post')) {

//            Link the post
            $form->handleRequest($request);

            if ($form->isValid()) {

//                Store data to the workspace
                $em->persist($comments);

//                Push it to data
                $em->flush();
                return $this->redirectToRoute('portfolio_show_article',["id"=>$id]);
            }


        }

//        create a form view
        $vars['form'] = $form->createView();

//        we pass all the following vars in to the show_articles.html.twig file
        $vars['article'] = $article;

//        this vars is from getSideBar method
        $vars['articles'] = $articles;

//       We pass the Comments vars in the show_articles.html.twig file
        $vars['comments'] = $comments2;

//        Count comments variables view
        $vars['commentNumber'] = $commentNumber;

        return $this->render('@Portfolio/Default/show_articles.html.twig', $vars);
    }

    //************************************  show comment by article ***************************************************


    public function showCommentsAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('PortfolioBundle:Comments');
        $comments = $rep->find($id);

        $vars['comments'] = $comments;

        return $this->render('@Portfolio/Default/view_comments.html.twig', $vars);

    }

//************************************ Get All Articles  ********************************************************

    public function getArticlesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repArticles = $em->getRepository('PortfolioBundle:Articles');
        $articles = $repArticles->myFindAll();

        $paginator = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $articles,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 5)
        );

        return $this->render('@Portfolio/Default/all_articles.html.twig', ['articles'=>$result]);
    }

//************************************ Add an article  ********************************************************

    public function addArticleAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $article = new Articles();

//        create a form with type auteur, using $auteur
        $form = $this->createForm(ArticlesType::class, $article);

//        if method is post
        if ($request->isMethod('Post')){

            $form->handleRequest($request);
            if ($form->isValid()){
                $em->persist($article);
                $em->flush();

            }
        }
//      redirect to the route of formAction

        return $this->redirectToRoute('portfolio_form');//je renvoi la route de la methode getArticles

    }

//************************************ Add an article  ********************************************************

    public function removeArticleAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('PortfolioBundle:Articles');

        $article = $rep->find($id);

        $em->remove($article);
        $em->flush();

        return $this->redirectToRoute('portfolio_admin_articles');
    }

//************************************ update Articles  ********************************************************

    public function updateArticleAction(Request $request, $id)
    {

//        From current element and Doctrine, get Manager
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('PortfolioBundle:Articles');
        $article = $rep->find($id);


//        create a form with type article, using $article who content the repository
        $form = $this->createForm(ArticlesType::class, $article);

//        If the post was send,
        if ($request->isMethod('Post')) {

//            link data to the form
            $form->handleRequest($request);

            if ($form->isValid()) {

//                Store data in to the workspace
                $em->persist($article);

//                End push it in to the database
                $em->flush();
                return $this->redirectToRoute('portfolio_admin_articles');

            }
        }
//        create a form view (link with the post)
        $vars['form'] = $form->createView();
        return $this->render('@Portfolio/Default/formulaires/form_articles.html.twig', $vars);

    }

//************************************ Articles list  ********************************************************

    public function articles_listAction(Request $request)
    {
//        From current element and Doctrine(ORM), get Manager
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

//************************************ published Articles  ********************************************************

    public function publishedArticlesAction(Request $request)
    {
//        From current element and Doctrine(ORM), get Manager
        $em = $this->getDoctrine()->getManager();

//        get Repository and put in $repArticles
        $repArticles = $em->getRepository('PortfolioBundle:Articles');

//        From repository, accès to findAll method
        $articles = $repArticles->findFiveLast();

//
        return $this->render('@Portfolio/Default/published_articles.twig', ['articles'=>$articles]);
    }

//************************************ side bar ****************************************************************

    public function getSideBarAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

//        get Repository and put in $repArticles
        $repArticles = $em->getRepository('PortfolioBundle:Articles');

//        From repository, accès to findAll method
        $articles = $repArticles->findFiveLast();

        return $this->render('@Portfolio/Default/side_bar.html.twig', ['articles'=>$articles]);
    }

//***************************************** contact view ****************************************************************

    public function contactAction()
    {
        return $this->render('@Portfolio/Default/contact.html.twig');
    }


    public function formArticlesAction()
    {
        return $this->render('@Portfolio/Default/formulaires/form_articles.html.twig');
    }
    public function shareButtonAction()
    {

        return  $this->render('@Portfolio/Default/share_button.html.twig');

    }
//***************************************** Portfolio ****************************************************************

    public function accueilAction()
    {

        return $this->render('@Portfolio/Default/accueil.html.twig');
//        return $this->redirectToRoute('portfolio_accueil');
    }

    public function blogAction()
    {

        return  $this->render('@Portfolio/Default/blog.html.twig');

    }

}

















