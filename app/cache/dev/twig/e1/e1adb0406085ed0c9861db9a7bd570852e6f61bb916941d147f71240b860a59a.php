<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_a761a7b80893f5b432be9693d1b2b44d7006c00c4e4d30dbd4e770f1442fcb24 extends Twig_Template
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
        $__internal_82a6c75ccdf2a50701ddcb3d329fcfdd7aae899971db628c2fbdefe4cb35bdd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82a6c75ccdf2a50701ddcb3d329fcfdd7aae899971db628c2fbdefe4cb35bdd8->enter($__internal_82a6c75ccdf2a50701ddcb3d329fcfdd7aae899971db628c2fbdefe4cb35bdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_82a6c75ccdf2a50701ddcb3d329fcfdd7aae899971db628c2fbdefe4cb35bdd8->leave($__internal_82a6c75ccdf2a50701ddcb3d329fcfdd7aae899971db628c2fbdefe4cb35bdd8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
