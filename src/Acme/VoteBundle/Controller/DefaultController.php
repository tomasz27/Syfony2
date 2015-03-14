<?php

namespace Acme\VoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {

        return $this->render('AcmeVoteBundle:Default:index.html.twig', array('name' => $name));
    }
}
