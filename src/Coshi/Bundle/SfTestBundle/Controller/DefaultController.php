<?php

namespace Coshi\Bundle\SfTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CoshiSfTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
