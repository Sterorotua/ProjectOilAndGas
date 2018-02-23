<?php

/* AircraftBundle:Base:base.html.twig */
class __TwigTemplate_4c8ce09e5c4ff2ca2a36cdcca4082398cc447bdd3d605a5b9766f110a7e1cf5b extends Twig_Template
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
        $__internal_c67869d6ad592181e74d067677a225869786a423af65149f8e879a00be3ac90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67869d6ad592181e74d067677a225869786a423af65149f8e879a00be3ac90c->enter($__internal_c67869d6ad592181e74d067677a225869786a423af65149f8e879a00be3ac90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AircraftBundle:Base:base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c67869d6ad592181e74d067677a225869786a423af65149f8e879a00be3ac90c->leave($__internal_c67869d6ad592181e74d067677a225869786a423af65149f8e879a00be3ac90c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cae06c156ebfda94810139fade7177b5f3330acc19d6967416a28fb071882339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cae06c156ebfda94810139fade7177b5f3330acc19d6967416a28fb071882339->enter($__internal_cae06c156ebfda94810139fade7177b5f3330acc19d6967416a28fb071882339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Base";
        
        $__internal_cae06c156ebfda94810139fade7177b5f3330acc19d6967416a28fb071882339->leave($__internal_cae06c156ebfda94810139fade7177b5f3330acc19d6967416a28fb071882339_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_8ee90b8abff656b5e5b9f5a686210e3a1facd16d2e074e2b3e5fd0762c1deabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee90b8abff656b5e5b9f5a686210e3a1facd16d2e074e2b3e5fd0762c1deabb->enter($__internal_8ee90b8abff656b5e5b9f5a686210e3a1facd16d2e074e2b3e5fd0762c1deabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

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
        
        $__internal_8ee90b8abff656b5e5b9f5a686210e3a1facd16d2e074e2b3e5fd0762c1deabb->leave($__internal_8ee90b8abff656b5e5b9f5a686210e3a1facd16d2e074e2b3e5fd0762c1deabb_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6df9780399981d7543852866ad4404d17090c18c9b6ed11ff2ff038186b19c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df9780399981d7543852866ad4404d17090c18c9b6ed11ff2ff038186b19c32->enter($__internal_6df9780399981d7543852866ad4404d17090c18c9b6ed11ff2ff038186b19c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_6df9780399981d7543852866ad4404d17090c18c9b6ed11ff2ff038186b19c32->leave($__internal_6df9780399981d7543852866ad4404d17090c18c9b6ed11ff2ff038186b19c32_prof);

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
