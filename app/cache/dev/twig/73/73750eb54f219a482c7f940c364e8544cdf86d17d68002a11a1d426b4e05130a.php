<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_7c3443b42eb146ab21162d85604371e743d1432b937b208f19004bc0a070294b extends Twig_Template
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
        $__internal_c09ba68e98fc421aa4db8e9cb70d90073473d30c2f3b57c6a4f61ee340368dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09ba68e98fc421aa4db8e9cb70d90073473d30c2f3b57c6a4f61ee340368dce->enter($__internal_c09ba68e98fc421aa4db8e9cb70d90073473d30c2f3b57c6a4f61ee340368dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c09ba68e98fc421aa4db8e9cb70d90073473d30c2f3b57c6a4f61ee340368dce->leave($__internal_c09ba68e98fc421aa4db8e9cb70d90073473d30c2f3b57c6a4f61ee340368dce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
