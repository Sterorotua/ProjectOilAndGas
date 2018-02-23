<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f336ac5572509ecdd25e43b920d026871a5346bfb460c198e68592d465ca9d1d extends Twig_Template
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
        $__internal_91b287f29b618b3ee44c31d1dbe2693671c61bfe04207be1cf83ebd59a8cc20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b287f29b618b3ee44c31d1dbe2693671c61bfe04207be1cf83ebd59a8cc20d->enter($__internal_91b287f29b618b3ee44c31d1dbe2693671c61bfe04207be1cf83ebd59a8cc20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_91b287f29b618b3ee44c31d1dbe2693671c61bfe04207be1cf83ebd59a8cc20d->leave($__internal_91b287f29b618b3ee44c31d1dbe2693671c61bfe04207be1cf83ebd59a8cc20d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
