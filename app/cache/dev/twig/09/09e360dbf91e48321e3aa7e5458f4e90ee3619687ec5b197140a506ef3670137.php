<?php

/* CoreSphereConsoleBundle::base.html.twig */
class __TwigTemplate_73dbfd1cdd82de95a295bc501fbce1bc9494f78f186e614292b0cbb6fb8db3b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0aa6d5ae011b2bf1d276c760571a82baa02d1fea002167d51e9a3c8a2ffb5322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa6d5ae011b2bf1d276c760571a82baa02d1fea002167d51e9a3c8a2ffb5322->enter($__internal_0aa6d5ae011b2bf1d276c760571a82baa02d1fea002167d51e9a3c8a2ffb5322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreSphereConsoleBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_0aa6d5ae011b2bf1d276c760571a82baa02d1fea002167d51e9a3c8a2ffb5322->leave($__internal_0aa6d5ae011b2bf1d276c760571a82baa02d1fea002167d51e9a3c8a2ffb5322_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b17b45551058273cdb1be89ae61a37f69c85f4597737d06cfac45bff992c47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b17b45551058273cdb1be89ae61a37f69c85f4597737d06cfac45bff992c47f->enter($__internal_0b17b45551058273cdb1be89ae61a37f69c85f4597737d06cfac45bff992c47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CoreSphere Console";
        
        $__internal_0b17b45551058273cdb1be89ae61a37f69c85f4597737d06cfac45bff992c47f->leave($__internal_0b17b45551058273cdb1be89ae61a37f69c85f4597737d06cfac45bff992c47f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_72f7d321a8026be83338acfaa726d731e030d54b7815bce09984c63925da264b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f7d321a8026be83338acfaa726d731e030d54b7815bce09984c63925da264b->enter($__internal_72f7d321a8026be83338acfaa726d731e030d54b7815bce09984c63925da264b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/css/base.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
        
        $__internal_72f7d321a8026be83338acfaa726d731e030d54b7815bce09984c63925da264b->leave($__internal_72f7d321a8026be83338acfaa726d731e030d54b7815bce09984c63925da264b_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_07ee136aa6adefb38b512b82cca69e2d8fd89cdf567f03404dab318a443433d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ee136aa6adefb38b512b82cca69e2d8fd89cdf567f03404dab318a443433d3->enter($__internal_07ee136aa6adefb38b512b82cca69e2d8fd89cdf567f03404dab318a443433d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "";
        
        $__internal_07ee136aa6adefb38b512b82cca69e2d8fd89cdf567f03404dab318a443433d3->leave($__internal_07ee136aa6adefb38b512b82cca69e2d8fd89cdf567f03404dab318a443433d3_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_139205291e855ae2a3599abf83968c725fafee99e337f44b0f74466eb83eed38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139205291e855ae2a3599abf83968c725fafee99e337f44b0f74466eb83eed38->enter($__internal_139205291e855ae2a3599abf83968c725fafee99e337f44b0f74466eb83eed38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            ";
        // line 15
        echo "            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\\\"><\\/script>\");
            </script>
        ";
        
        $__internal_139205291e855ae2a3599abf83968c725fafee99e337f44b0f74466eb83eed38->leave($__internal_139205291e855ae2a3599abf83968c725fafee99e337f44b0f74466eb83eed38_prof);

    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  107 => 15,  105 => 14,  99 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 22,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title 'CoreSphere Console' %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/coresphereconsole/css/base.css') }}\" type=\"text/css\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body '' %}
        {% block javascripts %}
            {# Load jQuery from Google CDN with a local fallback when not laded yet #}
            <script>
            window.jQuery || document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js\"><\\/script>')
            </script>
            <script>
            window.jQuery || document.write(\"<script src=\\\"{{ asset('bundles/coresphereconsole/js/jquery-1.8.3.min.js') }}\\\"><\\/script>\");
            </script>
        {% endblock %}
    </body>
</html>
", "CoreSphereConsoleBundle::base.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/coresphere/console-bundle/Resources/views/base.html.twig");
    }
}
