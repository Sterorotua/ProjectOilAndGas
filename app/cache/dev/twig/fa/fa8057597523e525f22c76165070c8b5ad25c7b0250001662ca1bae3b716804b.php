<?php

/* ::base.html.twig */
class __TwigTemplate_033ba2a85928e9524a6229fcb4f6cae66b9fe2c9dfb140bbe20d4944c756251d extends Twig_Template
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
        $__internal_4b20a1b2b5847ef700194548d9a1b46b1128a8b7062e51bf9e37423cc69cdd97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b20a1b2b5847ef700194548d9a1b46b1128a8b7062e51bf9e37423cc69cdd97->enter($__internal_4b20a1b2b5847ef700194548d9a1b46b1128a8b7062e51bf9e37423cc69cdd97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4b20a1b2b5847ef700194548d9a1b46b1128a8b7062e51bf9e37423cc69cdd97->leave($__internal_4b20a1b2b5847ef700194548d9a1b46b1128a8b7062e51bf9e37423cc69cdd97_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_30280a8ea6b355043208255adf13904c9a1e7a2b410acfb9fb7b2595d47ebb61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30280a8ea6b355043208255adf13904c9a1e7a2b410acfb9fb7b2595d47ebb61->enter($__internal_30280a8ea6b355043208255adf13904c9a1e7a2b410acfb9fb7b2595d47ebb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_30280a8ea6b355043208255adf13904c9a1e7a2b410acfb9fb7b2595d47ebb61->leave($__internal_30280a8ea6b355043208255adf13904c9a1e7a2b410acfb9fb7b2595d47ebb61_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54f04e82fbfcbb2e168022fb62d2a3f3802c9555a9c4a2aec3d844a20f857276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f04e82fbfcbb2e168022fb62d2a3f3802c9555a9c4a2aec3d844a20f857276->enter($__internal_54f04e82fbfcbb2e168022fb62d2a3f3802c9555a9c4a2aec3d844a20f857276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_54f04e82fbfcbb2e168022fb62d2a3f3802c9555a9c4a2aec3d844a20f857276->leave($__internal_54f04e82fbfcbb2e168022fb62d2a3f3802c9555a9c4a2aec3d844a20f857276_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8cb49256fec63a1ae367fa7234c8180127fd69defc1ec47b210df075bff0549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8cb49256fec63a1ae367fa7234c8180127fd69defc1ec47b210df075bff0549->enter($__internal_b8cb49256fec63a1ae367fa7234c8180127fd69defc1ec47b210df075bff0549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b8cb49256fec63a1ae367fa7234c8180127fd69defc1ec47b210df075bff0549->leave($__internal_b8cb49256fec63a1ae367fa7234c8180127fd69defc1ec47b210df075bff0549_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a1dd24039c7f7175659a8440e1ea8babc1ec87f5e69f966f2316f42d51a293e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1dd24039c7f7175659a8440e1ea8babc1ec87f5e69f966f2316f42d51a293e0->enter($__internal_a1dd24039c7f7175659a8440e1ea8babc1ec87f5e69f966f2316f42d51a293e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a1dd24039c7f7175659a8440e1ea8babc1ec87f5e69f966f2316f42d51a293e0->leave($__internal_a1dd24039c7f7175659a8440e1ea8babc1ec87f5e69f966f2316f42d51a293e0_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/app/Resources/views/base.html.twig");
    }
}
