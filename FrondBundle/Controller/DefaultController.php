<?php

namespace AppBundle\FrondBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrondOfficeBundle:Default:index.html.twig');
    }
}
