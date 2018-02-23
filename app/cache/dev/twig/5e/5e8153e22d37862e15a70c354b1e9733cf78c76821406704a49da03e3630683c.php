<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_e4f8f4dfdbe4c64e9491d331535db46ca16b002887fc2fcbf8c7b7a8166073c9 extends Twig_Template
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
        $__internal_19908bd1ff56b153e90dd745aee629634342cdfa639cc0ab00271a8b5ae2b7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19908bd1ff56b153e90dd745aee629634342cdfa639cc0ab00271a8b5ae2b7d1->enter($__internal_19908bd1ff56b153e90dd745aee629634342cdfa639cc0ab00271a8b5ae2b7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_19908bd1ff56b153e90dd745aee629634342cdfa639cc0ab00271a8b5ae2b7d1->leave($__internal_19908bd1ff56b153e90dd745aee629634342cdfa639cc0ab00271a8b5ae2b7d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
