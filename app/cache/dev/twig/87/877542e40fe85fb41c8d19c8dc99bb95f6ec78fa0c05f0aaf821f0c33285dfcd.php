<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_fa0b07619aa1f9a8b43f7ffe0856fb776e3fee850a1e3f15293b4f3f0002fd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_c96d9ee540aac537a0e40019a3624a1279a984ed76fd8d5110ea107695bb4416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96d9ee540aac537a0e40019a3624a1279a984ed76fd8d5110ea107695bb4416->enter($__internal_c96d9ee540aac537a0e40019a3624a1279a984ed76fd8d5110ea107695bb4416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c96d9ee540aac537a0e40019a3624a1279a984ed76fd8d5110ea107695bb4416->leave($__internal_c96d9ee540aac537a0e40019a3624a1279a984ed76fd8d5110ea107695bb4416_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_045830aad897396d7f017f42aaac789a388965d0efa2b5ac18565ed3df2b2a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045830aad897396d7f017f42aaac789a388965d0efa2b5ac18565ed3df2b2a50->enter($__internal_045830aad897396d7f017f42aaac789a388965d0efa2b5ac18565ed3df2b2a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_045830aad897396d7f017f42aaac789a388965d0efa2b5ac18565ed3df2b2a50->leave($__internal_045830aad897396d7f017f42aaac789a388965d0efa2b5ac18565ed3df2b2a50_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/show.html.twig");
    }
}
