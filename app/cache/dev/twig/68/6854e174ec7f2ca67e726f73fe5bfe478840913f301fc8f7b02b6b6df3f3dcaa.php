<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_018074858f1eb92fa86c84aeccf6afa6244247f4cbe7679f6b820a9f092b809e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8131d0faca2546ddc644005f6d3513f8a4e5a0c68ef9b8522d41c9cec4fdb21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8131d0faca2546ddc644005f6d3513f8a4e5a0c68ef9b8522d41c9cec4fdb21a->enter($__internal_8131d0faca2546ddc644005f6d3513f8a4e5a0c68ef9b8522d41c9cec4fdb21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8131d0faca2546ddc644005f6d3513f8a4e5a0c68ef9b8522d41c9cec4fdb21a->leave($__internal_8131d0faca2546ddc644005f6d3513f8a4e5a0c68ef9b8522d41c9cec4fdb21a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2726242752425ff863992241fe248447800bc2a2881abf249d021739635f9c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2726242752425ff863992241fe248447800bc2a2881abf249d021739635f9c16->enter($__internal_2726242752425ff863992241fe248447800bc2a2881abf249d021739635f9c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2726242752425ff863992241fe248447800bc2a2881abf249d021739635f9c16->leave($__internal_2726242752425ff863992241fe248447800bc2a2881abf249d021739635f9c16_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/show.html.twig");
    }
}
