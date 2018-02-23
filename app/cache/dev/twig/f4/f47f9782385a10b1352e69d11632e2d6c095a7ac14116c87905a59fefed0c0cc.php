<?php

/* OilIndustryBundle:Platforms:platform.html.twig */
class __TwigTemplate_d106baa96f6de725447d552668ff17d5da0de9d0bb0b08f58571b61167a3af0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "OilIndustryBundle:Platforms:platform.html.twig", 1);
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
        $__internal_a3d531a092bdc7bed3aee152f4814d186d35060c84faf7e1b52ffe9bb8c24205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d531a092bdc7bed3aee152f4814d186d35060c84faf7e1b52ffe9bb8c24205->enter($__internal_a3d531a092bdc7bed3aee152f4814d186d35060c84faf7e1b52ffe9bb8c24205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OilIndustryBundle:Platforms:platform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3d531a092bdc7bed3aee152f4814d186d35060c84faf7e1b52ffe9bb8c24205->leave($__internal_a3d531a092bdc7bed3aee152f4814d186d35060c84faf7e1b52ffe9bb8c24205_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ee143406494a4575a3907a210140ee8de8fa2d82264145242d544f18b46069b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee143406494a4575a3907a210140ee8de8fa2d82264145242d544f18b46069b->enter($__internal_9ee143406494a4575a3907a210140ee8de8fa2d82264145242d544f18b46069b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Platforms";
        
        $__internal_9ee143406494a4575a3907a210140ee8de8fa2d82264145242d544f18b46069b->leave($__internal_9ee143406494a4575a3907a210140ee8de8fa2d82264145242d544f18b46069b_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_1895dba581a8409dd4016b03de1908adf6d0516139a6e7ccf75f80fe6622b699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1895dba581a8409dd4016b03de1908adf6d0516139a6e7ccf75f80fe6622b699->enter($__internal_1895dba581a8409dd4016b03de1908adf6d0516139a6e7ccf75f80fe6622b699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 6
        echo "    <h1>Platforms</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_platforms");
        echo "\"> Platforms</a></li>
    </ol>
";
        
        $__internal_1895dba581a8409dd4016b03de1908adf6d0516139a6e7ccf75f80fe6622b699->leave($__internal_1895dba581a8409dd4016b03de1908adf6d0516139a6e7ccf75f80fe6622b699_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_609e6c76bc7aed0c0eaba7ee4ca8c6ce13a92374399a5352db3f854776003fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609e6c76bc7aed0c0eaba7ee4ca8c6ce13a92374399a5352db3f854776003fff->enter($__internal_609e6c76bc7aed0c0eaba7ee4ca8c6ce13a92374399a5352db3f854776003fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_609e6c76bc7aed0c0eaba7ee4ca8c6ce13a92374399a5352db3f854776003fff->leave($__internal_609e6c76bc7aed0c0eaba7ee4ca8c6ce13a92374399a5352db3f854776003fff_prof);

    }

    public function getTemplateName()
    {
        return "OilIndustryBundle:Platforms:platform.html.twig";
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

{% block title %}{{ parent() }}Platforms{% endblock %}

{% block header_content %}
    <h1>Platforms</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('_home') }}\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"{{ path('_platforms') }}\"> Platforms</a></li>
    </ol>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "OilIndustryBundle:Platforms:platform.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/OilIndustryBundle/Resources/views/Platforms/platform.html.twig");
    }
}
