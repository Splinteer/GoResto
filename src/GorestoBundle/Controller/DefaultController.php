<?php

namespace GorestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GorestoBundle:Default:index.html.twig');
    }
}
