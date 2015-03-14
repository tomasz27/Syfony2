<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\ProfileBundle\Entity\Profile;
use Acme\UserBundle\Entity\User;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $uzytkownik = $em->getRepository('AcmeUserBundle:User')->find(2);

        $profil = $em->getRepository('AcmeProfileBundle:Profile')->find(1);

        $uzytkownik->setProfileId($profil->getId());

        $em->persist($uzytkownik);
        $em->flush();


        return $this->render('AcmeUserBundle:Default:index.html.twig', array(
            'name' => $uzytkownik,
            'profil' => $profil

        ));
    }
}
