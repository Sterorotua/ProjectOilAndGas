<?php

/**
 * @author Sébastien FRANÇOIS <francois.sebastien.emile@gmail.com>
 */

namespace AdminToolsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class FilesType extends AbstractType
{
    /**
     * 
     * @param Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('file', FileType::class, array('label' => 'Select a CSV File'))
                ->add('save', 'submit');
    }
    
    /**
     * 
     * @param \Symfony\Component\OptionsResolver\OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DatabaseBundle\Entity\Files',
        ));
    }
}

