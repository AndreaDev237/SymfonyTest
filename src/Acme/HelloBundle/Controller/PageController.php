<?php

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PageController extends Controller
{
       /**
    * @Route("/page/{richiesta}", name="page")
    * @Template()
    */
    public function pageAction($richiesta)
    {
        
        return array('richiesta'=> $richiesta);
    }

}
    /*$messaggio = \Swift_Message::newInstance()
             ->setSubject('Contatti Email')
             ->setFrom('ps2invader@gmail.com')
             ->setTo('abonsignore@gayalab.it')
             ->setBody('Prova');
             $this->get('mailer')->send($messaggio);
            return $this->redirect($this->generateUrl('task_success'));*/
?>
