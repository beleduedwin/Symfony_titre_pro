<?php
/**
 * Created by PhpStorm.
 * User: lapiscine
 * Date: 05/04/2018
 * Time: 22:26
 */

namespace PortfolioBundle\Controller;


use PortfolioBundle\Entity\Contact;
use PortfolioBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class Contact_formController extends Controller
{
    public function simpleFormeAction(Request $request)
    {
//        access to entity manager
        $em = $this->getDoctrine()->getManager();

//        instance of contact Entity
        $contact = new Contact();

//        from createForm method, create de form using contact entity
        $form = $this->createForm(ContactType::class, $contact);

//        if form was send
        if ($request->isMethod('Post')){

//            from my $form update form
            $form->handleRequest($request);
            if($form->isValid()){

//                put $em in workspace
                $em->persist($contact);

//                insert to DB
                $em->flush();
            }

        }
        $vars['form'] = $form->createView();
        return $this->render('@Portfolio/Default/form_contact.html.twig',$vars);
    }


}