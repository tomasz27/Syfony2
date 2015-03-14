<?php

namespace Acme\TagBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\AlertBundle\Entity\Alert;
use Acme\VoteBundle\Entity\Vote;

class DefaultController extends Controller
{
    public function indexAction()
    {
    $zmienna = new Alert();

        return $this->render('AcmeTagBundle:Default:index.html.twig', array('name' => $profil));
    }
}
