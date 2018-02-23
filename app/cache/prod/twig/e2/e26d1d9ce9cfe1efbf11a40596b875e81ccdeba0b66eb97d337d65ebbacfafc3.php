<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8399024f93ff7e836440fc4b38189cdd8e087c662db43959a778a7cb05bfed32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_686db32ef4250e5c9365b2ffc7af6ae2ddc1601429f2572a4ae984e9ffe6dccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_686db32ef4250e5c9365b2ffc7af6ae2ddc1601429f2572a4ae984e9ffe6dccb->enter($__internal_686db32ef4250e5c9365b2ffc7af6ae2ddc1601429f2572a4ae984e9ffe6dccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_686db32ef4250e5c9365b2ffc7af6ae2ddc1601429f2572a4ae984e9ffe6dccb->leave($__internal_686db32ef4250e5c9365b2ffc7af6ae2ddc1601429f2572a4ae984e9ffe6dccb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad67c7371c344943b0758f1ae7f70ec25a4656e38533cc3e3f90cafae2631004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad67c7371c344943b0758f1ae7f70ec25a4656e38533cc3e3f90cafae2631004->enter($__internal_ad67c7371c344943b0758f1ae7f70ec25a4656e38533cc3e3f90cafae2631004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ad67c7371c344943b0758f1ae7f70ec25a4656e38533cc3e3f90cafae2631004->leave($__internal_ad67c7371c344943b0758f1ae7f70ec25a4656e38533cc3e3f90cafae2631004_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e599e53a475b1741554302dedf2ef358376397fb437803ce94d343866735838e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e599e53a475b1741554302dedf2ef358376397fb437803ce94d343866735838e->enter($__internal_e599e53a475b1741554302dedf2ef358376397fb437803ce94d343866735838e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e599e53a475b1741554302dedf2ef358376397fb437803ce94d343866735838e->leave($__internal_e599e53a475b1741554302dedf2ef358376397fb437803ce94d343866735838e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a3a80fc414492d8ca3d4bd46f50a18b567a51e4e15ad4cc38ffaf491547883c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3a80fc414492d8ca3d4bd46f50a18b567a51e4e15ad4cc38ffaf491547883c->enter($__internal_1a3a80fc414492d8ca3d4bd46f50a18b567a51e4e15ad4cc38ffaf491547883c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1a3a80fc414492d8ca3d4bd46f50a18b567a51e4e15ad4cc38ffaf491547883c->leave($__internal_1a3a80fc414492d8ca3d4bd46f50a18b567a51e4e15ad4cc38ffaf491547883c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/oilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
