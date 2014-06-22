<?php

namespace Sample\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller {

    public function IndexAction() {
        $request = $this->getRequest();
        if ($request->getMethod() === 'POST') {
            $hoge = $request->get("hoge");
            return $this->render('SampleAppBundle:Hello:Index.html.twig', array('hoge' => $hoge));
        }

        return $this->render('SampleAppBundle:Hello:Index.html.twig', array('hoge' => ''));
    }

    public function ConfirmAction() {
        return $this->render('SampleAppBundle:Hello:Confirm.html.twig');
    }

    public function ResultAction() {
        return $this->render('SampleAppBundle:Hello:Result.html.twig');
    }

}
