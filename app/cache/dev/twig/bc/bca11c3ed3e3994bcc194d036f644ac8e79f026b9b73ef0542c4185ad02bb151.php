<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c1a2201d287cdebe28d7aa43b3cacfa763e45c17b3227c99620df7abcb23ffb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_5cd2be2fd23ac45d9d621b581a86d9c7b41b877405f01dc4765bd2eea26bef06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd2be2fd23ac45d9d621b581a86d9c7b41b877405f01dc4765bd2eea26bef06->enter($__internal_5cd2be2fd23ac45d9d621b581a86d9c7b41b877405f01dc4765bd2eea26bef06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cd2be2fd23ac45d9d621b581a86d9c7b41b877405f01dc4765bd2eea26bef06->leave($__internal_5cd2be2fd23ac45d9d621b581a86d9c7b41b877405f01dc4765bd2eea26bef06_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_29c49be89067fab1a1e94285e804182c2b5e0f8439caa97d3639a8c999007fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c49be89067fab1a1e94285e804182c2b5e0f8439caa97d3639a8c999007fb9->enter($__internal_29c49be89067fab1a1e94285e804182c2b5e0f8439caa97d3639a8c999007fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_29c49be89067fab1a1e94285e804182c2b5e0f8439caa97d3639a8c999007fb9->leave($__internal_29c49be89067fab1a1e94285e804182c2b5e0f8439caa97d3639a8c999007fb9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9646978ea843724d0b1e45b810a8596cbe059b4752bcb98f8657946403f11c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9646978ea843724d0b1e45b810a8596cbe059b4752bcb98f8657946403f11c8c->enter($__internal_9646978ea843724d0b1e45b810a8596cbe059b4752bcb98f8657946403f11c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9646978ea843724d0b1e45b810a8596cbe059b4752bcb98f8657946403f11c8c->leave($__internal_9646978ea843724d0b1e45b810a8596cbe059b4752bcb98f8657946403f11c8c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b78ef3a041229ea88b12fa2c928f922c3fc078b6ecfa9fba03f9396663edefb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78ef3a041229ea88b12fa2c928f922c3fc078b6ecfa9fba03f9396663edefb3->enter($__internal_b78ef3a041229ea88b12fa2c928f922c3fc078b6ecfa9fba03f9396663edefb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b78ef3a041229ea88b12fa2c928f922c3fc078b6ecfa9fba03f9396663edefb3->leave($__internal_b78ef3a041229ea88b12fa2c928f922c3fc078b6ecfa9fba03f9396663edefb3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
