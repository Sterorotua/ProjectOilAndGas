<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_89738185b19a8be1bc0834cfd6a1a156a04ce7c05ff1168f1a553a2d88c8f11d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a854d22b60e3c9c03ccd58d0df85dce79c7261f3423f8dc110c4b7f9f3a21d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a854d22b60e3c9c03ccd58d0df85dce79c7261f3423f8dc110c4b7f9f3a21d4->enter($__internal_4a854d22b60e3c9c03ccd58d0df85dce79c7261f3423f8dc110c4b7f9f3a21d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_4a854d22b60e3c9c03ccd58d0df85dce79c7261f3423f8dc110c4b7f9f3a21d4->leave($__internal_4a854d22b60e3c9c03ccd58d0df85dce79c7261f3423f8dc110c4b7f9f3a21d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
