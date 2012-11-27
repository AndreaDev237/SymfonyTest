<?php

namespace Acme\HelloBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contact")
 */
class Task {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;    
    
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    protected $email;
    
     /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nome;
         /**
     * @ORM\Column(name="seleziona", type="string", length=100)
     */
    protected $select;
         /**
     * @ORM\Column(type="string", length=25)
     */
    protected $telefono = null;
         /**
     * @ORM\Column(type="string")
     */
    protected $testo;
    protected $nonno;
    protected $papa;
    protected $mamma;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getEmail() 
    {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSelect() {
        return $this->select;
    }

    public function setSelect($select) {
        $this->select = $select;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getTesto() {
        return $this->testo;
    }

    public function setTesto($testo) {
        $this->testo = $testo;
    }

    public function getNonno() {
        return $this->nonno;
    }

    public function setNonno($nonno) {
        $this->nonno = $nonno;
    }

    public function getPapa() {
        return $this->papa;
    }

    public function setPapa($papa) {
        $this->papa = $papa;
    }

    public function getMamma() {
        return $this->mamma;
    }

    public function setMamma($mamma) {
        $this->mamma = $mamma;
    }

}

?>
