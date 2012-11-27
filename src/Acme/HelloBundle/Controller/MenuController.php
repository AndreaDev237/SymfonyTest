<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MenuController extends Controller
{
    public function indexAction($active)
    {
        return $this->render('AcmeHelloBundle:Menu:index.html.twig', array('active' => $active));
    }
}

?>