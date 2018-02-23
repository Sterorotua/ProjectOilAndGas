<?php

/* AircraftBundle:Operator:operator.html.twig */
class __TwigTemplate_895636567db83a312017dc28f35684641809db98cde8f977428a1dd36fb8d316 extends Twig_Template
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
        $__internal_0be32c1b7641da08d5591258b5e8b844f749119d923548f1bdcee1107c90ac3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be32c1b7641da08d5591258b5e8b844f749119d923548f1bdcee1107c90ac3c->enter($__internal_0be32c1b7641da08d5591258b5e8b844f749119d923548f1bdcee1107c90ac3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AircraftBundle:Operator:operator.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0be32c1b7641da08d5591258b5e8b844f749119d923548f1bdcee1107c90ac3c->leave($__internal_0be32c1b7641da08d5591258b5e8b844f749119d923548f1bdcee1107c90ac3c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d304690d7359fff560503b43d59d55ed21d52cb39e4393ec4f89b23b21650d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d304690d7359fff560503b43d59d55ed21d52cb39e4393ec4f89b23b21650d43->enter($__internal_d304690d7359fff560503b43d59d55ed21d52cb39e4393ec4f89b23b21650d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Operator";
        
        $__internal_d304690d7359fff560503b43d59d55ed21d52cb39e4393ec4f89b23b21650d43->leave($__internal_d304690d7359fff560503b43d59d55ed21d52cb39e4393ec4f89b23b21650d43_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_1febc969efe90cca651644c968fc5c17aa1c599b070b01c537abcf3933416395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1febc969efe90cca651644c968fc5c17aa1c599b070b01c537abcf3933416395->enter($__internal_1febc969efe90cca651644c968fc5c17aa1c599b070b01c537abcf3933416395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

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
        
        $__internal_1febc969efe90cca651644c968fc5c17aa1c599b070b01c537abcf3933416395->leave($__internal_1febc969efe90cca651644c968fc5c17aa1c599b070b01c537abcf3933416395_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f5e1adeaac54c1948b0dd5e7423e7811201e3cd96e8605cbed10d47b5f2c01a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5e1adeaac54c1948b0dd5e7423e7811201e3cd96e8605cbed10d47b5f2c01a->enter($__internal_3f5e1adeaac54c1948b0dd5e7423e7811201e3cd96e8605cbed10d47b5f2c01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_3f5e1adeaac54c1948b0dd5e7423e7811201e3cd96e8605cbed10d47b5f2c01a->leave($__internal_3f5e1adeaac54c1948b0dd5e7423e7811201e3cd96e8605cbed10d47b5f2c01a_prof);

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
