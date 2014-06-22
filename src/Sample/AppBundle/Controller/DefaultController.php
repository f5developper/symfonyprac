<?php

namespace Sample\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SampleAppBundle:Default:index.html.twig', array('name' => $name));
    }
}
