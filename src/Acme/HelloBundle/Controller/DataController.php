<?php
namespace Acme\HelloBundle\Controller;

use Acme\HelloBundle\Entity\Task;
use Acme\HelloBundle\Form\ContactType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DataController extends Controller{
           
    /**
    * @Route("/data", name="lista")
    * @Template()
    */
     public function dataAction()
    {
           
    $repository = $this->getDoctrine()
        ->getRepository('AcmeHelloBundle:Task');
    
    $contatti = $repository->findAll();
    

    if (!$contatti) {
        throw $this->createNotFoundException('Nessun contatto trovato');
    }

    
    return array(
            'contatti' => $contatti);
  }
    /**
    * @Route("/modifica/{id}", name="modifica")
    * @Template()
    */
  public function modificaAction($id)
  {
      $em = $this->getDoctrine()->getManager();
      $contatto = $em->getRepository('AcmeHelloBundle:Task')->find($id);
      $request= $this->getRequest();
      $form = $this->createForm(new ContactType(), $contatto);
       
       if ($request->isMethod('POST')) 
       {
            $form->bind($request);

            if ($form->isValid()) 
           {
            $em->flush();
             $this->get('session')->getFlashBag()->add('notifica', 'La query '.$id. ' è stata Aggiornata');
            return $this->redirect($this->generateUrl('lista'));
          }

     } 
     return array(
            'form' => $form->createView(),
            'id' => $id);
  }
      /**
    * @Route("/data/{id}", name="elimina")
    * @Template()
    */
  public function deleteAction($id)
  {
    $em = $this->getDoctrine()->getManager();
    $delete = $em->getRepository('AcmeHelloBundle:Task')->find($id);
    if (!$delete) {
        throw $this->createNotFoundException('nessun record cancellato');
    }
    $em->remove($delete);
    $em->flush();
    $this->get('session')->getFlashBag()->add('notifica', 'La query '.$id. ' è stata cancellata');
    return $this->redirect($this->generateUrl('lista'));
  }
}

?>
