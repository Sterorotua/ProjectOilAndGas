<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_795630abc778210f9e4fa3406e9ec66c80651704a80c7b6e1d41321f81f0da7c extends Twig_Template
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
        $__internal_b5b91b16b7f4e3b707ef1c0a76b523e16548356964618ef940c7304081f3fecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b91b16b7f4e3b707ef1c0a76b523e16548356964618ef940c7304081f3fecf->enter($__internal_b5b91b16b7f4e3b707ef1c0a76b523e16548356964618ef940c7304081f3fecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b5b91b16b7f4e3b707ef1c0a76b523e16548356964618ef940c7304081f3fecf->leave($__internal_b5b91b16b7f4e3b707ef1c0a76b523e16548356964618ef940c7304081f3fecf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
