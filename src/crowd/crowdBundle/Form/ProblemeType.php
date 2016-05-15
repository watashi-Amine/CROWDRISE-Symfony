<?php

namespace crowd\crowdBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProblemeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomprobleme')
            ->add('typeprobleme')
            ->add('competence')
            ->add('description')
            ->add('budjetP')
            ->add('fichier')
            ->add('duree')
            ->add('datepublication')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'crowd\crowdBundle\Entity\Probleme'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crowd_crowdbundle_probleme';
    }
}
