<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_22782b8629ffd45c37a37ad95e2b178cecc53b99b75c58692312854700b8e5f2 extends Twig_Template
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
        $__internal_84f0e3e2c297c10238c23ff2902d4df3b2e951b93c22facd3f99fd0fa91e03d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f0e3e2c297c10238c23ff2902d4df3b2e951b93c22facd3f99fd0fa91e03d5->enter($__internal_84f0e3e2c297c10238c23ff2902d4df3b2e951b93c22facd3f99fd0fa91e03d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_84f0e3e2c297c10238c23ff2902d4df3b2e951b93c22facd3f99fd0fa91e03d5->leave($__internal_84f0e3e2c297c10238c23ff2902d4df3b2e951b93c22facd3f99fd0fa91e03d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
