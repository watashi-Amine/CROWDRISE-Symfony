<?php

namespace crowd\crowdBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InvestissementPEType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idProjet','hidden')
            ->add('idevenement','hidden')
            ->add('monatant')
            ->add('iduser')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'crowd\crowdBundle\Entity\InvestissementPE'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crowd_crowdbundle_investissementpe';
    }
}
