<?php

/* OilIndustryBundle:OilCountry:oilCountry.html.twig */
class __TwigTemplate_cababf0d4dad5a0db2596b77e9fd78ef00a5a0f3847a54d3eec2e0f09314652b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "OilIndustryBundle:OilCountry:oilCountry.html.twig", 1);
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
        $__internal_971d88e1b8ba801f95b6610131794a16aa88289353e56291bd83acad92b12c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971d88e1b8ba801f95b6610131794a16aa88289353e56291bd83acad92b12c58->enter($__internal_971d88e1b8ba801f95b6610131794a16aa88289353e56291bd83acad92b12c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OilIndustryBundle:OilCountry:oilCountry.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_971d88e1b8ba801f95b6610131794a16aa88289353e56291bd83acad92b12c58->leave($__internal_971d88e1b8ba801f95b6610131794a16aa88289353e56291bd83acad92b12c58_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1cfe6822886af5bb7dea719117c8673e912b7d5f4b726ebfd75e1a90362acce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cfe6822886af5bb7dea719117c8673e912b7d5f4b726ebfd75e1a90362acce->enter($__internal_d1cfe6822886af5bb7dea719117c8673e912b7d5f4b726ebfd75e1a90362acce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Country";
        
        $__internal_d1cfe6822886af5bb7dea719117c8673e912b7d5f4b726ebfd75e1a90362acce->leave($__internal_d1cfe6822886af5bb7dea719117c8673e912b7d5f4b726ebfd75e1a90362acce_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_fa7655f532fd5d89985d369143e1083418d6ef3af0e4bb272a0710b6863526fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7655f532fd5d89985d369143e1083418d6ef3af0e4bb272a0710b6863526fd->enter($__internal_fa7655f532fd5d89985d369143e1083418d6ef3af0e4bb272a0710b6863526fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 6
        echo "    <h1>Countries</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_oilCountry");
        echo "\"> Countries</a></li>
    </ol>
";
        
        $__internal_fa7655f532fd5d89985d369143e1083418d6ef3af0e4bb272a0710b6863526fd->leave($__internal_fa7655f532fd5d89985d369143e1083418d6ef3af0e4bb272a0710b6863526fd_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6355abf2a6aafabe5bd954759b49e20ea275f77d59d645aad80bf9c5e5bd5d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6355abf2a6aafabe5bd954759b49e20ea275f77d59d645aad80bf9c5e5bd5d4e->enter($__internal_6355abf2a6aafabe5bd954759b49e20ea275f77d59d645aad80bf9c5e5bd5d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_6355abf2a6aafabe5bd954759b49e20ea275f77d59d645aad80bf9c5e5bd5d4e->leave($__internal_6355abf2a6aafabe5bd954759b49e20ea275f77d59d645aad80bf9c5e5bd5d4e_prof);

    }

    public function getTemplateName()
    {
        return "OilIndustryBundle:OilCountry:oilCountry.html.twig";
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

{% block title %}{{ parent() }}Country{% endblock %}

{% block header_content %}
    <h1>Countries</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('_home') }}\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"{{ path('_oilCountry') }}\"> Countries</a></li>
    </ol>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "OilIndustryBundle:OilCountry:oilCountry.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/OilIndustryBundle/Resources/views/OilCountry/oilCountry.html.twig");
    }
}
