<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_773f4380253f05a6372ce85b3d3087553aee2fee3f828b034a7fbf18257945bb extends Twig_Template
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
        $__internal_79e64e00b124d7382f5799e0743cdd3e9099aa0b485985b83ad788787a501429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e64e00b124d7382f5799e0743cdd3e9099aa0b485985b83ad788787a501429->enter($__internal_79e64e00b124d7382f5799e0743cdd3e9099aa0b485985b83ad788787a501429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79e64e00b124d7382f5799e0743cdd3e9099aa0b485985b83ad788787a501429->leave($__internal_79e64e00b124d7382f5799e0743cdd3e9099aa0b485985b83ad788787a501429_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_602ba6da8be6eb5268af33f80ccfadb854036b3f1c5cae17f91350e15e9bbd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602ba6da8be6eb5268af33f80ccfadb854036b3f1c5cae17f91350e15e9bbd0b->enter($__internal_602ba6da8be6eb5268af33f80ccfadb854036b3f1c5cae17f91350e15e9bbd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_602ba6da8be6eb5268af33f80ccfadb854036b3f1c5cae17f91350e15e9bbd0b->leave($__internal_602ba6da8be6eb5268af33f80ccfadb854036b3f1c5cae17f91350e15e9bbd0b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1c3ffd09c2a8a52a845ec97615ee8663c00e572937f7f740bc8e5d406dbeb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c3ffd09c2a8a52a845ec97615ee8663c00e572937f7f740bc8e5d406dbeb64->enter($__internal_b1c3ffd09c2a8a52a845ec97615ee8663c00e572937f7f740bc8e5d406dbeb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1c3ffd09c2a8a52a845ec97615ee8663c00e572937f7f740bc8e5d406dbeb64->leave($__internal_b1c3ffd09c2a8a52a845ec97615ee8663c00e572937f7f740bc8e5d406dbeb64_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8942450fc4fcf3fe581d933a15fe49423053bc99f364c5653d76d8568ede721c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8942450fc4fcf3fe581d933a15fe49423053bc99f364c5653d76d8568ede721c->enter($__internal_8942450fc4fcf3fe581d933a15fe49423053bc99f364c5653d76d8568ede721c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8942450fc4fcf3fe581d933a15fe49423053bc99f364c5653d76d8568ede721c->leave($__internal_8942450fc4fcf3fe581d933a15fe49423053bc99f364c5653d76d8568ede721c_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
