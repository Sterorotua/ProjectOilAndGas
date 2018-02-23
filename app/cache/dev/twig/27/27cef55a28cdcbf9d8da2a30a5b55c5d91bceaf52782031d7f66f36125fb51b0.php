<?php

/* AircraftBundle:Base:base.html.twig */
class __TwigTemplate_651fa8ad16f6977183539f8977cb5377794bb0e9ce7889baf3f57d535abac1f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "AircraftBundle:Base:base.html.twig", 1);
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
        $__internal_969f350f4e82aa5461c1dd35aa5bb7d106381a61b7b642263eba272ba35b8d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_969f350f4e82aa5461c1dd35aa5bb7d106381a61b7b642263eba272ba35b8d3d->enter($__internal_969f350f4e82aa5461c1dd35aa5bb7d106381a61b7b642263eba272ba35b8d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AircraftBundle:Base:base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_969f350f4e82aa5461c1dd35aa5bb7d106381a61b7b642263eba272ba35b8d3d->leave($__internal_969f350f4e82aa5461c1dd35aa5bb7d106381a61b7b642263eba272ba35b8d3d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_32e0cc7465e3e9a1c4034b73b376f882a671987aacf0cbfd5482c20b001f81e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e0cc7465e3e9a1c4034b73b376f882a671987aacf0cbfd5482c20b001f81e2->enter($__internal_32e0cc7465e3e9a1c4034b73b376f882a671987aacf0cbfd5482c20b001f81e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Base";
        
        $__internal_32e0cc7465e3e9a1c4034b73b376f882a671987aacf0cbfd5482c20b001f81e2->leave($__internal_32e0cc7465e3e9a1c4034b73b376f882a671987aacf0cbfd5482c20b001f81e2_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_0a66f0feedbc454ba3d793a7f9299a5da5c3674c820c0fe62267b711c9c8fb77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a66f0feedbc454ba3d793a7f9299a5da5c3674c820c0fe62267b711c9c8fb77->enter($__internal_0a66f0feedbc454ba3d793a7f9299a5da5c3674c820c0fe62267b711c9c8fb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 6
        echo "    <h1>Base</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_base");
        echo "\"> Base</a></li>
    </ol>
";
        
        $__internal_0a66f0feedbc454ba3d793a7f9299a5da5c3674c820c0fe62267b711c9c8fb77->leave($__internal_0a66f0feedbc454ba3d793a7f9299a5da5c3674c820c0fe62267b711c9c8fb77_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e278d3b718229556d16eebad599fc7248d7d44b939b4f1018b88d9d34190ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e278d3b718229556d16eebad599fc7248d7d44b939b4f1018b88d9d34190ee8->enter($__internal_9e278d3b718229556d16eebad599fc7248d7d44b939b4f1018b88d9d34190ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_9e278d3b718229556d16eebad599fc7248d7d44b939b4f1018b88d9d34190ee8->leave($__internal_9e278d3b718229556d16eebad599fc7248d7d44b939b4f1018b88d9d34190ee8_prof);

    }

    public function getTemplateName()
    {
        return "AircraftBundle:Base:base.html.twig";
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

{% block title %}{{ parent() }}Base{% endblock %}

{% block header_content %}
    <h1>Base</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('_home') }}\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"{{ path('_base') }}\"> Base</a></li>
    </ol>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "AircraftBundle:Base:base.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/AircraftBundle/Resources/views/Base/base.html.twig");
    }
}
