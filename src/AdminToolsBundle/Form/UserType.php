<?php

/**
 * @author Sébastien FRANÇOIS <francois.sebastien.emile@gmail.com>
 */

namespace AdminToolsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UserType extends AbstractType
{
    /**
     * Function to custom user form from FosUserBundle
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName',  TextType::class)
                ->add('lastName',   TextType::class);
    }
    
    /**
     * Involving FosUserBundle RegistrationFormType
     * @return string
     */
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    public function getName()
    {
        return $this->getBlockPrefix();
    }
}

