<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_86bde6bcf9e50ed8ea10316cf308497810f54e23a001b6081706aff77103b21a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_2036c0b3c0608a2e1efe90fc77cf55906b436521b896eb3cbd4329069f83704f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2036c0b3c0608a2e1efe90fc77cf55906b436521b896eb3cbd4329069f83704f->enter($__internal_2036c0b3c0608a2e1efe90fc77cf55906b436521b896eb3cbd4329069f83704f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2036c0b3c0608a2e1efe90fc77cf55906b436521b896eb3cbd4329069f83704f->leave($__internal_2036c0b3c0608a2e1efe90fc77cf55906b436521b896eb3cbd4329069f83704f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da40ba670f30ef25e61f5a395f4f2f5829cb361571fd8f02e4d637d39738ed52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da40ba670f30ef25e61f5a395f4f2f5829cb361571fd8f02e4d637d39738ed52->enter($__internal_da40ba670f30ef25e61f5a395f4f2f5829cb361571fd8f02e4d637d39738ed52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_da40ba670f30ef25e61f5a395f4f2f5829cb361571fd8f02e4d637d39738ed52->leave($__internal_da40ba670f30ef25e61f5a395f4f2f5829cb361571fd8f02e4d637d39738ed52_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/edit.html.twig");
    }
}
