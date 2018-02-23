<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_3cdc5a2e4bda86baa93063ff5d59c9eae2efa8c20661bf1424c01360e11befdf extends Twig_Template
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
        $__internal_2eb391750e71dbf30c3caf11857e814323d3b4aa7cb0502e158e63426d81b7cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb391750e71dbf30c3caf11857e814323d3b4aa7cb0502e158e63426d81b7cb->enter($__internal_2eb391750e71dbf30c3caf11857e814323d3b4aa7cb0502e158e63426d81b7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_2eb391750e71dbf30c3caf11857e814323d3b4aa7cb0502e158e63426d81b7cb->leave($__internal_2eb391750e71dbf30c3caf11857e814323d3b4aa7cb0502e158e63426d81b7cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
