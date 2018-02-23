<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_3449b99b066b6d3a6d779a0c1eaf66f00352f95973d298bfdb99b6d22cf2ddaf extends Twig_Template
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
        $__internal_2f44b1aad149e04ed90a383cf39bdf1f49929b60ee096f7bd253de39a8df7ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f44b1aad149e04ed90a383cf39bdf1f49929b60ee096f7bd253de39a8df7ff4->enter($__internal_2f44b1aad149e04ed90a383cf39bdf1f49929b60ee096f7bd253de39a8df7ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2f44b1aad149e04ed90a383cf39bdf1f49929b60ee096f7bd253de39a8df7ff4->leave($__internal_2f44b1aad149e04ed90a383cf39bdf1f49929b60ee096f7bd253de39a8df7ff4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
