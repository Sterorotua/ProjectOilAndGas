<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_bfffec9b7ac04512eefd8900c48f20781444e09b731630fae2871ef24f723972 extends Twig_Template
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
        $__internal_ad5841b88babb6eb6e22826c81477437e4a1aae238405171322d686f6de330ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5841b88babb6eb6e22826c81477437e4a1aae238405171322d686f6de330ad->enter($__internal_ad5841b88babb6eb6e22826c81477437e4a1aae238405171322d686f6de330ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad5841b88babb6eb6e22826c81477437e4a1aae238405171322d686f6de330ad->leave($__internal_ad5841b88babb6eb6e22826c81477437e4a1aae238405171322d686f6de330ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f4daff686ef52fa3a9e0e355a51a9eff1079be39e5d2ce8f75fc6c2bca11004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4daff686ef52fa3a9e0e355a51a9eff1079be39e5d2ce8f75fc6c2bca11004->enter($__internal_2f4daff686ef52fa3a9e0e355a51a9eff1079be39e5d2ce8f75fc6c2bca11004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_2f4daff686ef52fa3a9e0e355a51a9eff1079be39e5d2ce8f75fc6c2bca11004->leave($__internal_2f4daff686ef52fa3a9e0e355a51a9eff1079be39e5d2ce8f75fc6c2bca11004_prof);

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
