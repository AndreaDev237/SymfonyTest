<?php

namespace Acme\HelloBundle\Form;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email')
                ->add('nome', 'text')
                ->add('select', 'choice', array('choices' => array('pippo' => 'Pippo', 'paperino' => 'Paperino', 'pluto' => 'Pluto')))
                ->add('telefono', 'text')
                ->add('testo', 'textarea')
        ;
    }

    public function getName()
    {
        return 'contact';
    }
    

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\HelloBundle\Entity\Task',
        ));
    }    
    
}
