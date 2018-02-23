<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ddeee27c644666715c6cc311645248bca8871d6cc57cb9624092084fbce16140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_c37b1dc35bd6c7fee7494d0356d8fa9455ec61086330086ca5aa0efe17078b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37b1dc35bd6c7fee7494d0356d8fa9455ec61086330086ca5aa0efe17078b6f->enter($__internal_c37b1dc35bd6c7fee7494d0356d8fa9455ec61086330086ca5aa0efe17078b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c37b1dc35bd6c7fee7494d0356d8fa9455ec61086330086ca5aa0efe17078b6f->leave($__internal_c37b1dc35bd6c7fee7494d0356d8fa9455ec61086330086ca5aa0efe17078b6f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f82a989c1afcf3b1dd94862e7465273afdad994e9b12cbfb64de3c5569b467b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82a989c1afcf3b1dd94862e7465273afdad994e9b12cbfb64de3c5569b467b7->enter($__internal_f82a989c1afcf3b1dd94862e7465273afdad994e9b12cbfb64de3c5569b467b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f82a989c1afcf3b1dd94862e7465273afdad994e9b12cbfb64de3c5569b467b7->leave($__internal_f82a989c1afcf3b1dd94862e7465273afdad994e9b12cbfb64de3c5569b467b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
