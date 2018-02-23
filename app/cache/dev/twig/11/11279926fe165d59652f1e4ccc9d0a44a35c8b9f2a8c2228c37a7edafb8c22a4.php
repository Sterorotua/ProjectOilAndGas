<?php

/* AircraftBundle:Helicopter:helicopter.html.twig */
class __TwigTemplate_d5c2181742ae186ad227ebb0c5f13eb6a61e664963ee5d5febad74bb13df0bf6 extends Twig_Template
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
        $__internal_d27b2555c93077af04eab5d0e90bb7277e4745ef80c385d0763532e1af99d848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27b2555c93077af04eab5d0e90bb7277e4745ef80c385d0763532e1af99d848->enter($__internal_d27b2555c93077af04eab5d0e90bb7277e4745ef80c385d0763532e1af99d848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AircraftBundle:Helicopter:helicopter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d27b2555c93077af04eab5d0e90bb7277e4745ef80c385d0763532e1af99d848->leave($__internal_d27b2555c93077af04eab5d0e90bb7277e4745ef80c385d0763532e1af99d848_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c091da830fdcba78144a103fbddda630a4761a4c7cc4fc1b2a7bc26c222ce2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c091da830fdcba78144a103fbddda630a4761a4c7cc4fc1b2a7bc26c222ce2a9->enter($__internal_c091da830fdcba78144a103fbddda630a4761a4c7cc4fc1b2a7bc26c222ce2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Fleet";
        
        $__internal_c091da830fdcba78144a103fbddda630a4761a4c7cc4fc1b2a7bc26c222ce2a9->leave($__internal_c091da830fdcba78144a103fbddda630a4761a4c7cc4fc1b2a7bc26c222ce2a9_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_b18a40665782e6d48466a2b309db9f6b516da98953b53cfb7af8a482833c5add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18a40665782e6d48466a2b309db9f6b516da98953b53cfb7af8a482833c5add->enter($__internal_b18a40665782e6d48466a2b309db9f6b516da98953b53cfb7af8a482833c5add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

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
        
        $__internal_b18a40665782e6d48466a2b309db9f6b516da98953b53cfb7af8a482833c5add->leave($__internal_b18a40665782e6d48466a2b309db9f6b516da98953b53cfb7af8a482833c5add_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17513c5dd3cc2c12be2553e5767fb7983e4703a12a5c20a20b9983bedfb2e7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17513c5dd3cc2c12be2553e5767fb7983e4703a12a5c20a20b9983bedfb2e7ef->enter($__internal_17513c5dd3cc2c12be2553e5767fb7983e4703a12a5c20a20b9983bedfb2e7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_17513c5dd3cc2c12be2553e5767fb7983e4703a12a5c20a20b9983bedfb2e7ef->leave($__internal_17513c5dd3cc2c12be2553e5767fb7983e4703a12a5c20a20b9983bedfb2e7ef_prof);

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
