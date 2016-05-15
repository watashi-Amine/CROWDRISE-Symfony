<?php

namespace crowd\crowdBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvenementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDebut')
            ->add('dateFin')
            ->add('description')
            ->add('nomEvenement')
            ->add('idCategorieEvenement')
            
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'crowd\crowdBundle\Entity\Evenement'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'crowd_crowdbundle_evenement';
    }
}
