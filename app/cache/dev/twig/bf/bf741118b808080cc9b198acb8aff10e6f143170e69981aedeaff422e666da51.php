<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0c7d7844c7b862482fdf1157d9a5b57871ee09be785e0d912c8b051538c27fda extends Twig_Template
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
        $__internal_e6c06124ec89779d29f30b195feb4aa9c8022f634e09ada6d0edd99d417d7e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c06124ec89779d29f30b195feb4aa9c8022f634e09ada6d0edd99d417d7e9e->enter($__internal_e6c06124ec89779d29f30b195feb4aa9c8022f634e09ada6d0edd99d417d7e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_e6c06124ec89779d29f30b195feb4aa9c8022f634e09ada6d0edd99d417d7e9e->leave($__internal_e6c06124ec89779d29f30b195feb4aa9c8022f634e09ada6d0edd99d417d7e9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
