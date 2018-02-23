<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_c24cf130b2768c7108e3cac753d636e77181bcfe413dbd6232ae4dfea29569b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_9e87aadf05d67e7f9e31aa7179e6521ef1b7613f459d26775f1f88ba7d0a7a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e87aadf05d67e7f9e31aa7179e6521ef1b7613f459d26775f1f88ba7d0a7a6c->enter($__internal_9e87aadf05d67e7f9e31aa7179e6521ef1b7613f459d26775f1f88ba7d0a7a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e87aadf05d67e7f9e31aa7179e6521ef1b7613f459d26775f1f88ba7d0a7a6c->leave($__internal_9e87aadf05d67e7f9e31aa7179e6521ef1b7613f459d26775f1f88ba7d0a7a6c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b253df544f95ee03e605c2a2b464f31369a1f7484f83ef2f18bf1d06cc1276e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b253df544f95ee03e605c2a2b464f31369a1f7484f83ef2f18bf1d06cc1276e7->enter($__internal_b253df544f95ee03e605c2a2b464f31369a1f7484f83ef2f18bf1d06cc1276e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_b253df544f95ee03e605c2a2b464f31369a1f7484f83ef2f18bf1d06cc1276e7->leave($__internal_b253df544f95ee03e605c2a2b464f31369a1f7484f83ef2f18bf1d06cc1276e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:changePassword_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:changePassword.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/ChangePassword/changePassword.html.twig");
    }
}
