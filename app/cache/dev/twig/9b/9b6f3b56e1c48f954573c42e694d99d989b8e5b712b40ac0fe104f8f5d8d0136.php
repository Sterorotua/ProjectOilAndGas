<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_d9b9f7b30a4ab48ace664ef13c8fa7a8110bd6a18278926555fe392ce240781f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_5cf1b042877f20585d9e2422a17bedfb3bec1d265d5bf7eebf5d8fbc484d3433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf1b042877f20585d9e2422a17bedfb3bec1d265d5bf7eebf5d8fbc484d3433->enter($__internal_5cf1b042877f20585d9e2422a17bedfb3bec1d265d5bf7eebf5d8fbc484d3433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cf1b042877f20585d9e2422a17bedfb3bec1d265d5bf7eebf5d8fbc484d3433->leave($__internal_5cf1b042877f20585d9e2422a17bedfb3bec1d265d5bf7eebf5d8fbc484d3433_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_32f9b704efc1afa60745e47705acb01f3f0d47bf9fab50c9c44531a8f0735f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f9b704efc1afa60745e47705acb01f3f0d47bf9fab50c9c44531a8f0735f03->enter($__internal_32f9b704efc1afa60745e47705acb01f3f0d47bf9fab50c9c44531a8f0735f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_32f9b704efc1afa60745e47705acb01f3f0d47bf9fab50c9c44531a8f0735f03->leave($__internal_32f9b704efc1afa60745e47705acb01f3f0d47bf9fab50c9c44531a8f0735f03_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
