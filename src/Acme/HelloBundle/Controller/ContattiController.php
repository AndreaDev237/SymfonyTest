<?php
namespace Acme\HelloBundle\Controller;

use Acme\HelloBundle\Entity\Task;
use Acme\HelloBundle\Form\ContactType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContattiController extends Controller{
           
    /**
    * @Route("/contatti", name="contatti")
    * @Template()
    */
     public function contattiAction()
    {
         $request= $this->getRequest();
        // crea un task fornendo alcuni dati fittizi per questo esempio
        $task = new Task();
        $task->setNome('Nome');
        $task->setSelect('Opzioni');
        $task->setTesto('Inserisci Testo Qui!');
        
        $form = $this->createForm(new ContactType(), $task);
       
                
       if ($request->isMethod('POST')) 
       {
            $form->bind($request);

            if ($form->isValid()) 
           {
            $em = $this->getDoctrine()->getManager();
            $em->persist($task);
            $em->flush();
            echo "Dati inseriti con successo";
            
            /*$messaggio = \Swift_Message::newInstance()
             ->setSubject('Contatti Email')
             ->setFrom('ps2invader@gmail.com')
             ->setTo('abonsignore@gayalab.it')
             ->setBody('Prova');
             $this->get('mailer')->send($messaggio);
            return $this->redirect($this->generateUrl('task_success'));*/
             
          }

     } 
     return array(
            'form' => $form->createView());
         
  }
}

?>
