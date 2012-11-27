<?php
// src/Acme/HelloBundle/Controller/HelloController.php
namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HelloController extends Controller
{
   /**
    * @Route("/home", name="hello")
    * @Template()
    */
   public function indexAction()
   {		
     return array();
   }
   /**
    * @Route("/redirect", name="home_redirect")
    */   
   public function redirectAction()
   {
       return $this->redirect($this->generateUrl('page', array('richiesta' => 0)));
   }
   /**
    * @Route("/forward", name="home_forward")
    */   
   public function forwardAction()
   {
       return $this->forward("AcmeHelloBundle:Page:page", array('richiesta' => 2));
   }
   
   /**
    * @Route("/home", name="pippo")
    * @Template()
    */
   public function pippoAction()
   {		
     return array();
   }       
   
}

?>
