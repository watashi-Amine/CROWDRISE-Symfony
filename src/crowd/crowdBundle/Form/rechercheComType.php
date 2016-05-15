<?php

namespace crowd\crowdBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class rechercheComType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recherche','text',array('label'=>false  ,
                                            'attr'=> array('class'=>'form-control input-md',''))) ;

       
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
  

    /**
     * @return string
     */
    public function getName()
    {
        return 'utilisateur_utilisateurbundle_probleme_rechercheCom';
    }
}
