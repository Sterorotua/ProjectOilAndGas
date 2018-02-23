<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f6be01d7eeb481d41ff9736dee68f5ed98e2707b6129deab9d39a9804e860a81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_080ba5f37c73f2e26fa7c8cb91a0ab172e221233e7fa27e1925aa006e6faaf3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080ba5f37c73f2e26fa7c8cb91a0ab172e221233e7fa27e1925aa006e6faaf3d->enter($__internal_080ba5f37c73f2e26fa7c8cb91a0ab172e221233e7fa27e1925aa006e6faaf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_080ba5f37c73f2e26fa7c8cb91a0ab172e221233e7fa27e1925aa006e6faaf3d->leave($__internal_080ba5f37c73f2e26fa7c8cb91a0ab172e221233e7fa27e1925aa006e6faaf3d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4c9219ad6e86ecc73b41311bd84dfcdeda1bc16315bd0a3ee2f5d69f36058e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c9219ad6e86ecc73b41311bd84dfcdeda1bc16315bd0a3ee2f5d69f36058e8->enter($__internal_a4c9219ad6e86ecc73b41311bd84dfcdeda1bc16315bd0a3ee2f5d69f36058e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a4c9219ad6e86ecc73b41311bd84dfcdeda1bc16315bd0a3ee2f5d69f36058e8->leave($__internal_a4c9219ad6e86ecc73b41311bd84dfcdeda1bc16315bd0a3ee2f5d69f36058e8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b85e9dab579df49c189593c9276d9003c3e26ad30470ebb50202bc6facf9355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b85e9dab579df49c189593c9276d9003c3e26ad30470ebb50202bc6facf9355->enter($__internal_3b85e9dab579df49c189593c9276d9003c3e26ad30470ebb50202bc6facf9355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3b85e9dab579df49c189593c9276d9003c3e26ad30470ebb50202bc6facf9355->leave($__internal_3b85e9dab579df49c189593c9276d9003c3e26ad30470ebb50202bc6facf9355_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
