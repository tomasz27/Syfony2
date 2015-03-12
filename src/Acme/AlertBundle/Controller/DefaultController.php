<?php

namespace Acme\AlertBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\AlertBundle\Entity\Alert;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;


class DefaultController extends Controller
{
    public function indexAction()
    {
    $nowy = new Alert();
        $nowy->setPosition("dsfsad");
        $nowy->setStatus("open");
        $nowy->setCountry("pl");
        $nowy->setAddress("Sarzyna");
        $nowy->setCity("Rzeszów");
        $nowy->setZipCode("NS");
        $nowy->setResponsibility("df");
        $nowy->setConfirmed(0);
        $nowy->setPublished(1);
        $nowy->setPublishedFacebook(1);

        $nowy->setCategoryID(1);

        $nowy->setAddress("Sarzyna");
        $em = $this->getDoctrine()->getManager();

        $em->persist($nowy);
        $em->flush();


        return $this->render('AcmeAlertBundle:Default:index.html.twig');
    }
}
