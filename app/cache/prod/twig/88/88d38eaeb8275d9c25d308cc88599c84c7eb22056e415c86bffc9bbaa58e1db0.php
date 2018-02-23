<?php

/* AircraftBundle:Base:base.html.twig */
class __TwigTemplate_0222dc8a9204afa887c8db0fd3710aa4a7c7418020ab67396eb8ad64e52a792f extends Twig_Template
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
        $__internal_33a0f47d03c8bb349e189791738627fc2cc268b5a22cca074f7ee07e2205da4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a0f47d03c8bb349e189791738627fc2cc268b5a22cca074f7ee07e2205da4f->enter($__internal_33a0f47d03c8bb349e189791738627fc2cc268b5a22cca074f7ee07e2205da4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AircraftBundle:Base:base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33a0f47d03c8bb349e189791738627fc2cc268b5a22cca074f7ee07e2205da4f->leave($__internal_33a0f47d03c8bb349e189791738627fc2cc268b5a22cca074f7ee07e2205da4f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9aafebe1da1eecf6e588eaf28f67fb094e0b57f55c2dd8f82af7da6e608ea9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aafebe1da1eecf6e588eaf28f67fb094e0b57f55c2dd8f82af7da6e608ea9d1->enter($__internal_9aafebe1da1eecf6e588eaf28f67fb094e0b57f55c2dd8f82af7da6e608ea9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Base";
        
        $__internal_9aafebe1da1eecf6e588eaf28f67fb094e0b57f55c2dd8f82af7da6e608ea9d1->leave($__internal_9aafebe1da1eecf6e588eaf28f67fb094e0b57f55c2dd8f82af7da6e608ea9d1_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_470848b37eed3d69cc7a28732e4a5429e1e7267c39dd6248abda4e1ad46fd4e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470848b37eed3d69cc7a28732e4a5429e1e7267c39dd6248abda4e1ad46fd4e1->enter($__internal_470848b37eed3d69cc7a28732e4a5429e1e7267c39dd6248abda4e1ad46fd4e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

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
        
        $__internal_470848b37eed3d69cc7a28732e4a5429e1e7267c39dd6248abda4e1ad46fd4e1->leave($__internal_470848b37eed3d69cc7a28732e4a5429e1e7267c39dd6248abda4e1ad46fd4e1_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cdd029c8fc3bc5231253fe7f254fbc007ab90febb44c039e99f92cfa0da7a4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd029c8fc3bc5231253fe7f254fbc007ab90febb44c039e99f92cfa0da7a4fa->enter($__internal_cdd029c8fc3bc5231253fe7f254fbc007ab90febb44c039e99f92cfa0da7a4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_cdd029c8fc3bc5231253fe7f254fbc007ab90febb44c039e99f92cfa0da7a4fa->leave($__internal_cdd029c8fc3bc5231253fe7f254fbc007ab90febb44c039e99f92cfa0da7a4fa_prof);

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
