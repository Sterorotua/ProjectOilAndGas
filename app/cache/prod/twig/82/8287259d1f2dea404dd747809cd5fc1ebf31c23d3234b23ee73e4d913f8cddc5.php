<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_12b9337647e9769a516ac1c1d76cf4fdb0800241458209a044150efd834a6a41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_8e5c2f11b1134020acb71813e17d696ce66cb2236bf6e672e39ed06c2c57ac90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5c2f11b1134020acb71813e17d696ce66cb2236bf6e672e39ed06c2c57ac90->enter($__internal_8e5c2f11b1134020acb71813e17d696ce66cb2236bf6e672e39ed06c2c57ac90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e5c2f11b1134020acb71813e17d696ce66cb2236bf6e672e39ed06c2c57ac90->leave($__internal_8e5c2f11b1134020acb71813e17d696ce66cb2236bf6e672e39ed06c2c57ac90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_74fb8c0d81f714bcdf7a7afff4d272be03ec368b2d6673af33c35bc72b766ce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74fb8c0d81f714bcdf7a7afff4d272be03ec368b2d6673af33c35bc72b766ce0->enter($__internal_74fb8c0d81f714bcdf7a7afff4d272be03ec368b2d6673af33c35bc72b766ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_74fb8c0d81f714bcdf7a7afff4d272be03ec368b2d6673af33c35bc72b766ce0->leave($__internal_74fb8c0d81f714bcdf7a7afff4d272be03ec368b2d6673af33c35bc72b766ce0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
