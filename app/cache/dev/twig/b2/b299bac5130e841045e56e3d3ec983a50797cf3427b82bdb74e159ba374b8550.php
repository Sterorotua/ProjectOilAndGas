<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_27f98828785b45cf18c765e52e7bbd494e82260bebd178fb958ed33dc7b64388 extends Twig_Template
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
        $__internal_00270c9b0f5f2ddbd2c3821c54ead4acb08a2dd08235123517d3b13e5da62a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00270c9b0f5f2ddbd2c3821c54ead4acb08a2dd08235123517d3b13e5da62a21->enter($__internal_00270c9b0f5f2ddbd2c3821c54ead4acb08a2dd08235123517d3b13e5da62a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_00270c9b0f5f2ddbd2c3821c54ead4acb08a2dd08235123517d3b13e5da62a21->leave($__internal_00270c9b0f5f2ddbd2c3821c54ead4acb08a2dd08235123517d3b13e5da62a21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
