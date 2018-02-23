<?php

/* OilIndustryBundle:Platforms:platform.html.twig */
class __TwigTemplate_17e84b8afa0d6d14f55be0b2c1605a11adf23d12c575ff8ffa1d60ed46bd7a3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "OilIndustryBundle:Platforms:platform.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_content' => array($this, 'block_header_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::mainLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_542bc47cff09746c02c7f2e36a779841707625b43f39f75dd9325541faecd358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542bc47cff09746c02c7f2e36a779841707625b43f39f75dd9325541faecd358->enter($__internal_542bc47cff09746c02c7f2e36a779841707625b43f39f75dd9325541faecd358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OilIndustryBundle:Platforms:platform.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_542bc47cff09746c02c7f2e36a779841707625b43f39f75dd9325541faecd358->leave($__internal_542bc47cff09746c02c7f2e36a779841707625b43f39f75dd9325541faecd358_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a2e3e9342b276b4ecd3e2fa0a8ade4b65986b98782c0f9dd8b550947366d581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2e3e9342b276b4ecd3e2fa0a8ade4b65986b98782c0f9dd8b550947366d581->enter($__internal_4a2e3e9342b276b4ecd3e2fa0a8ade4b65986b98782c0f9dd8b550947366d581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Platforms";
        
        $__internal_4a2e3e9342b276b4ecd3e2fa0a8ade4b65986b98782c0f9dd8b550947366d581->leave($__internal_4a2e3e9342b276b4ecd3e2fa0a8ade4b65986b98782c0f9dd8b550947366d581_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_fd4aab5467a9e28159731451dd4cec289776812cd70065c5144402eaff1dc536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4aab5467a9e28159731451dd4cec289776812cd70065c5144402eaff1dc536->enter($__internal_fd4aab5467a9e28159731451dd4cec289776812cd70065c5144402eaff1dc536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 6
        echo "    <h1>Platforms</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_platforms");
        echo "\"> Platforms</a></li>
    </ol>
";
        
        $__internal_fd4aab5467a9e28159731451dd4cec289776812cd70065c5144402eaff1dc536->leave($__internal_fd4aab5467a9e28159731451dd4cec289776812cd70065c5144402eaff1dc536_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c9265ab2b4a5dfabd33acf6ecb4d1eadcb557bb98fd3d52d7b41f7d3837725f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9265ab2b4a5dfabd33acf6ecb4d1eadcb557bb98fd3d52d7b41f7d3837725f4->enter($__internal_c9265ab2b4a5dfabd33acf6ecb4d1eadcb557bb98fd3d52d7b41f7d3837725f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_c9265ab2b4a5dfabd33acf6ecb4d1eadcb557bb98fd3d52d7b41f7d3837725f4->leave($__internal_c9265ab2b4a5dfabd33acf6ecb4d1eadcb557bb98fd3d52d7b41f7d3837725f4_prof);

    }

    public function getTemplateName()
    {
        return "OilIndustryBundle:Platforms:platform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 14,  73 => 13,  63 => 9,  59 => 8,  55 => 6,  49 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CoreBundle::mainLayout.html.twig\" %}

{% block title %}{{ parent() }}Platforms{% endblock %}

{% block header_content %}
    <h1>Platforms</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('_home') }}\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"{{ path('_platforms') }}\"> Platforms</a></li>
    </ol>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "OilIndustryBundle:Platforms:platform.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/OilIndustryBundle/Resources/views/Platforms/platform.html.twig");
    }
}
