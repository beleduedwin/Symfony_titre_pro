<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Blog/Default/index.html.twig');
    }
}


// après modification du fichier composer json, j'execute cette commande :composer dump-autoload
