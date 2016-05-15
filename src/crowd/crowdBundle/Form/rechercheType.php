<?php

namespace crowd\crowdBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class rechercheType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recherche','text') ;

       
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
  

    /**
     * @return string
     */
    public function getName()
    {
        return 'utilisateur_utilisateurbundle_projet_recherche';
    }
}
