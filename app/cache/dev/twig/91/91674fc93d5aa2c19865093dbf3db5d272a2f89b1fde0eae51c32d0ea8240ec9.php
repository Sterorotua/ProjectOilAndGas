<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b74ea135ae0c0d344e719e1b4df97b789b9769ba6177a85f6ea717e0ef89f48f extends Twig_Template
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
        $__internal_4f605eff208f484a4c362c0d791f1f368ab7ed23f754366b87e4146b6eb4a0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f605eff208f484a4c362c0d791f1f368ab7ed23f754366b87e4146b6eb4a0d9->enter($__internal_4f605eff208f484a4c362c0d791f1f368ab7ed23f754366b87e4146b6eb4a0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4f605eff208f484a4c362c0d791f1f368ab7ed23f754366b87e4146b6eb4a0d9->leave($__internal_4f605eff208f484a4c362c0d791f1f368ab7ed23f754366b87e4146b6eb4a0d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
