<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ac2c6dc4a4af405c3e8f1b45674edf0ae443531783888fc1bc7cc168989a6b97 extends Twig_Template
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
        $__internal_9bde42184cfcd51bc0cd66865f5c3fe8e3ef74c14d4736ee0471e3f02eb2d8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bde42184cfcd51bc0cd66865f5c3fe8e3ef74c14d4736ee0471e3f02eb2d8d5->enter($__internal_9bde42184cfcd51bc0cd66865f5c3fe8e3ef74c14d4736ee0471e3f02eb2d8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bde42184cfcd51bc0cd66865f5c3fe8e3ef74c14d4736ee0471e3f02eb2d8d5->leave($__internal_9bde42184cfcd51bc0cd66865f5c3fe8e3ef74c14d4736ee0471e3f02eb2d8d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df73969f9b4cd362bd2425642d8af2159534701d9d762345a25da41f1e922120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df73969f9b4cd362bd2425642d8af2159534701d9d762345a25da41f1e922120->enter($__internal_df73969f9b4cd362bd2425642d8af2159534701d9d762345a25da41f1e922120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_df73969f9b4cd362bd2425642d8af2159534701d9d762345a25da41f1e922120->leave($__internal_df73969f9b4cd362bd2425642d8af2159534701d9d762345a25da41f1e922120_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6d0b3c7853877e4cc10ce243ac6ff232f9e3a0d1a18b45c0cdbdd99551e5e52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d0b3c7853877e4cc10ce243ac6ff232f9e3a0d1a18b45c0cdbdd99551e5e52->enter($__internal_e6d0b3c7853877e4cc10ce243ac6ff232f9e3a0d1a18b45c0cdbdd99551e5e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e6d0b3c7853877e4cc10ce243ac6ff232f9e3a0d1a18b45c0cdbdd99551e5e52->leave($__internal_e6d0b3c7853877e4cc10ce243ac6ff232f9e3a0d1a18b45c0cdbdd99551e5e52_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8085c3209a6edffcb44ada708ae41e83c9d5eda79ee30435b490a38879befac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8085c3209a6edffcb44ada708ae41e83c9d5eda79ee30435b490a38879befac9->enter($__internal_8085c3209a6edffcb44ada708ae41e83c9d5eda79ee30435b490a38879befac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8085c3209a6edffcb44ada708ae41e83c9d5eda79ee30435b490a38879befac9->leave($__internal_8085c3209a6edffcb44ada708ae41e83c9d5eda79ee30435b490a38879befac9_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP_2017-05-18_11-12-18/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
