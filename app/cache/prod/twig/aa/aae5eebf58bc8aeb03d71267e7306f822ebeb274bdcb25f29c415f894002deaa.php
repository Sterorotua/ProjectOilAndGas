<?php

/* OilIndustryBundle:OilCountry:oilCountry.html.twig */
class __TwigTemplate_e55938eb8ee6017f2f5ee3ed474f462d1b493831113f51f946452e2e07f3b7c6 extends Twig_Template
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
        $__internal_4d08ab610be5573db01c210124f1853de0a4f208cd87805d0db2914553778669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d08ab610be5573db01c210124f1853de0a4f208cd87805d0db2914553778669->enter($__internal_4d08ab610be5573db01c210124f1853de0a4f208cd87805d0db2914553778669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OilIndustryBundle:OilCountry:oilCountry.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d08ab610be5573db01c210124f1853de0a4f208cd87805d0db2914553778669->leave($__internal_4d08ab610be5573db01c210124f1853de0a4f208cd87805d0db2914553778669_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8966936f7027e2df402b11e5b007838962bd4c2eac2dcfe7277cd067fc7d829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8966936f7027e2df402b11e5b007838962bd4c2eac2dcfe7277cd067fc7d829->enter($__internal_b8966936f7027e2df402b11e5b007838962bd4c2eac2dcfe7277cd067fc7d829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Country";
        
        $__internal_b8966936f7027e2df402b11e5b007838962bd4c2eac2dcfe7277cd067fc7d829->leave($__internal_b8966936f7027e2df402b11e5b007838962bd4c2eac2dcfe7277cd067fc7d829_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_c9883cd7ce2b78646598c8aabbc3324dcc5065d8e315fa31a5675983e7f12a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9883cd7ce2b78646598c8aabbc3324dcc5065d8e315fa31a5675983e7f12a18->enter($__internal_c9883cd7ce2b78646598c8aabbc3324dcc5065d8e315fa31a5675983e7f12a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

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
        
        $__internal_c9883cd7ce2b78646598c8aabbc3324dcc5065d8e315fa31a5675983e7f12a18->leave($__internal_c9883cd7ce2b78646598c8aabbc3324dcc5065d8e315fa31a5675983e7f12a18_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ec5976a7649ff7fd870d249c63a6757a59f7f8ccfdc4ceff6e90c672a0add20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec5976a7649ff7fd870d249c63a6757a59f7f8ccfdc4ceff6e90c672a0add20->enter($__internal_5ec5976a7649ff7fd870d249c63a6757a59f7f8ccfdc4ceff6e90c672a0add20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_5ec5976a7649ff7fd870d249c63a6757a59f7f8ccfdc4ceff6e90c672a0add20->leave($__internal_5ec5976a7649ff7fd870d249c63a6757a59f7f8ccfdc4ceff6e90c672a0add20_prof);

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
        return new Twig_Source(" {% extends \"CoreBundle::mainLayout.html.twig\" %}

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
