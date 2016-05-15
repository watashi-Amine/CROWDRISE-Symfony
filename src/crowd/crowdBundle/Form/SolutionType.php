<?php

namespace crowd\crowdBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SolutionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('idprobleme')
            ->add('description')
            ->add('fichier')
            ->add('duree')
            ->add('budjetS')
            ->add('datePub')
            ->add('dateDepot')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'crowd\crowdBundle\Entity\Solution'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crowd_crowdbundle_solution';
    }
}
