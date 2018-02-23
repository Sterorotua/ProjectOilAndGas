<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_2751726d0f49db865879dd83f75c30ee7b29dce38375c5f0fc5d6a32a09d0994 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_26e8a1a04132a2365b31f5ad97a59b0926396b4e93525965b21c64a839ac2dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e8a1a04132a2365b31f5ad97a59b0926396b4e93525965b21c64a839ac2dd5->enter($__internal_26e8a1a04132a2365b31f5ad97a59b0926396b4e93525965b21c64a839ac2dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26e8a1a04132a2365b31f5ad97a59b0926396b4e93525965b21c64a839ac2dd5->leave($__internal_26e8a1a04132a2365b31f5ad97a59b0926396b4e93525965b21c64a839ac2dd5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_312ff8811e33142ff778113e612cb0db6e879ec7da59800cc87594b985151560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_312ff8811e33142ff778113e612cb0db6e879ec7da59800cc87594b985151560->enter($__internal_312ff8811e33142ff778113e612cb0db6e879ec7da59800cc87594b985151560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_312ff8811e33142ff778113e612cb0db6e879ec7da59800cc87594b985151560->leave($__internal_312ff8811e33142ff778113e612cb0db6e879ec7da59800cc87594b985151560_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
