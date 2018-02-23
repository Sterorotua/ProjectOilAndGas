<?php

/* AircraftBundle:Helicopter:helicopter.html.twig */
class __TwigTemplate_812c52c2c79c31edca75c2c097aee9d2f3072bec3245ec9c63e211783d53c179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "AircraftBundle:Helicopter:helicopter.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_content' => array($this, 'block_header_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::mainLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_536e766a90480194c418403c44d54833986f0e7f33a09d79ffa4177fc527656d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536e766a90480194c418403c44d54833986f0e7f33a09d79ffa4177fc527656d->enter($__internal_536e766a90480194c418403c44d54833986f0e7f33a09d79ffa4177fc527656d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AircraftBundle:Helicopter:helicopter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_536e766a90480194c418403c44d54833986f0e7f33a09d79ffa4177fc527656d->leave($__internal_536e766a90480194c418403c44d54833986f0e7f33a09d79ffa4177fc527656d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee810a586e9aae4c584a5baf9ae87ccb38b5f09f5b8825a7950076e4e43bacff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee810a586e9aae4c584a5baf9ae87ccb38b5f09f5b8825a7950076e4e43bacff->enter($__internal_ee810a586e9aae4c584a5baf9ae87ccb38b5f09f5b8825a7950076e4e43bacff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Fleet";
        
        $__internal_ee810a586e9aae4c584a5baf9ae87ccb38b5f09f5b8825a7950076e4e43bacff->leave($__internal_ee810a586e9aae4c584a5baf9ae87ccb38b5f09f5b8825a7950076e4e43bacff_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_b339fd178007ad6bae4e7cb3d6868979c7ea098ca72edd09937a42416975a0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b339fd178007ad6bae4e7cb3d6868979c7ea098ca72edd09937a42416975a0ff->enter($__internal_b339fd178007ad6bae4e7cb3d6868979c7ea098ca72edd09937a42416975a0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 6
        echo "    <h1>Fleet</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_fleet");
        echo "\"> Fleet</a></li>
    </ol>
";
        
        $__internal_b339fd178007ad6bae4e7cb3d6868979c7ea098ca72edd09937a42416975a0ff->leave($__internal_b339fd178007ad6bae4e7cb3d6868979c7ea098ca72edd09937a42416975a0ff_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d0679e1383c5d9e8000a4fe467968f2308c9adaa02fc5a33440fb3e49593cc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0679e1383c5d9e8000a4fe467968f2308c9adaa02fc5a33440fb3e49593cc3c->enter($__internal_d0679e1383c5d9e8000a4fe467968f2308c9adaa02fc5a33440fb3e49593cc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_d0679e1383c5d9e8000a4fe467968f2308c9adaa02fc5a33440fb3e49593cc3c->leave($__internal_d0679e1383c5d9e8000a4fe467968f2308c9adaa02fc5a33440fb3e49593cc3c_prof);

    }

    public function getTemplateName()
    {
        return "AircraftBundle:Helicopter:helicopter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  73 => 13,  63 => 9,  59 => 8,  55 => 6,  49 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CoreBundle::mainLayout.html.twig\" %}

{% block title %}{{ parent() }}Fleet{% endblock %}

{% block header_content %}
    <h1>Fleet</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('_home') }}\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"{{ path('_fleet') }}\"> Fleet</a></li>
    </ol>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "AircraftBundle:Helicopter:helicopter.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/AircraftBundle/Resources/views/Helicopter/helicopter.html.twig");
    }
}
