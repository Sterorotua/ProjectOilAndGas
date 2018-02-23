<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_36e772cfde6599239c3606ba170ae53617ff1b3f7c5cf74459aac9cb4f807023 extends Twig_Template
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
        $__internal_bdebe02aefff1dc6dd9a60385a6f56bd01d58a5922162f4276c25fc29854fd13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdebe02aefff1dc6dd9a60385a6f56bd01d58a5922162f4276c25fc29854fd13->enter($__internal_bdebe02aefff1dc6dd9a60385a6f56bd01d58a5922162f4276c25fc29854fd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_bdebe02aefff1dc6dd9a60385a6f56bd01d58a5922162f4276c25fc29854fd13->leave($__internal_bdebe02aefff1dc6dd9a60385a6f56bd01d58a5922162f4276c25fc29854fd13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
