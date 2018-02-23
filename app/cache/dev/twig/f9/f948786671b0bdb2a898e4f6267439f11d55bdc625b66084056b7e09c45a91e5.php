<?php

/* AircraftBundle:Operator:operator.html.twig */
class __TwigTemplate_faca0cf6dc9c455369c5c2f3a74d194b568c71da1e06c8f8a5cc2692a4fec020 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "AircraftBundle:Operator:operator.html.twig", 1);
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
        $__internal_6e325425d835ccc92d6b610b33b6b4df54c8517297dc5183b6c2a22ee8bb50e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e325425d835ccc92d6b610b33b6b4df54c8517297dc5183b6c2a22ee8bb50e3->enter($__internal_6e325425d835ccc92d6b610b33b6b4df54c8517297dc5183b6c2a22ee8bb50e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AircraftBundle:Operator:operator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e325425d835ccc92d6b610b33b6b4df54c8517297dc5183b6c2a22ee8bb50e3->leave($__internal_6e325425d835ccc92d6b610b33b6b4df54c8517297dc5183b6c2a22ee8bb50e3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_683fcef57ff8db1e4bde9cb71e5e0d63c11e4f141679844070193f63f7444eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_683fcef57ff8db1e4bde9cb71e5e0d63c11e4f141679844070193f63f7444eef->enter($__internal_683fcef57ff8db1e4bde9cb71e5e0d63c11e4f141679844070193f63f7444eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Operator";
        
        $__internal_683fcef57ff8db1e4bde9cb71e5e0d63c11e4f141679844070193f63f7444eef->leave($__internal_683fcef57ff8db1e4bde9cb71e5e0d63c11e4f141679844070193f63f7444eef_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_8288d973ebed6d63321d24657f2ce5c4de14a51de90146944ed03cec9116ab62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8288d973ebed6d63321d24657f2ce5c4de14a51de90146944ed03cec9116ab62->enter($__internal_8288d973ebed6d63321d24657f2ce5c4de14a51de90146944ed03cec9116ab62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 6
        echo "    <h1>Operator</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_operator");
        echo "\"> Operator</a></li>
    </ol>
";
        
        $__internal_8288d973ebed6d63321d24657f2ce5c4de14a51de90146944ed03cec9116ab62->leave($__internal_8288d973ebed6d63321d24657f2ce5c4de14a51de90146944ed03cec9116ab62_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_691b16678000711fd22adc4954d28aa21f7e60e8bf715e1e3d139c7d7dd446ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691b16678000711fd22adc4954d28aa21f7e60e8bf715e1e3d139c7d7dd446ac->enter($__internal_691b16678000711fd22adc4954d28aa21f7e60e8bf715e1e3d139c7d7dd446ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_691b16678000711fd22adc4954d28aa21f7e60e8bf715e1e3d139c7d7dd446ac->leave($__internal_691b16678000711fd22adc4954d28aa21f7e60e8bf715e1e3d139c7d7dd446ac_prof);

    }

    public function getTemplateName()
    {
        return "AircraftBundle:Operator:operator.html.twig";
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

{% block title %}{{ parent() }}Operator{% endblock %}

{% block header_content %}
    <h1>Operator</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('_home') }}\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"{{ path('_operator') }}\"> Operator</a></li>
    </ol>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "AircraftBundle:Operator:operator.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/AircraftBundle/Resources/views/Operator/operator.html.twig");
    }
}
