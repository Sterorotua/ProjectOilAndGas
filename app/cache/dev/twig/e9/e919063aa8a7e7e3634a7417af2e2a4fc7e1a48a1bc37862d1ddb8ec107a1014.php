<?php

/* DatabaseBundle:Default:index.html.twig */
class __TwigTemplate_4b92a2c66ff0361ed89ab79a087180b26dd0a376a823da075205b41352595a27 extends Twig_Template
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
        $__internal_a5653b6ee4fe1ccc0e7f31aed1e52d05417a7270ea1da3a81e139b6f423a30ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5653b6ee4fe1ccc0e7f31aed1e52d05417a7270ea1da3a81e139b6f423a30ce->enter($__internal_a5653b6ee4fe1ccc0e7f31aed1e52d05417a7270ea1da3a81e139b6f423a30ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DatabaseBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_a5653b6ee4fe1ccc0e7f31aed1e52d05417a7270ea1da3a81e139b6f423a30ce->leave($__internal_a5653b6ee4fe1ccc0e7f31aed1e52d05417a7270ea1da3a81e139b6f423a30ce_prof);

    }

    public function getTemplateName()
    {
        return "DatabaseBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "DatabaseBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/DatabaseBundle/Resources/views/Default/index.html.twig");
    }
}
