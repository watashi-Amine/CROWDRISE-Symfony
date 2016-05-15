<?php

namespace crowd\crowdBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProjetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomProjet')
            ->add('resume')
            ->add('image', 'file', ['data_class' => null
                    ])
            ->add('budjet')
            ->add('fichier', 'file', ['data_class' => null
                    ])
            ->add('idCategorieProjet')
            ->add('idType')     
            ->add('submit','submit') 
                
                	
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'crowd\crowdBundle\Entity\Projet'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'utilisateur_utilisateurbundle_projet';
    }
}
