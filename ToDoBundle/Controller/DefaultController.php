<?php

namespace AppBundle\ToDoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundleToDoBundle:Default:index.html.twig');
    }
}
