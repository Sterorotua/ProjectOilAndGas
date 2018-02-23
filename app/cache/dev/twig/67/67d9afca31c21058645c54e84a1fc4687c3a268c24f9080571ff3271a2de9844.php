<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_686edea3ddfb03cfc243e52b14711f579113fbf3b3435ab044035281aa6cfe16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2333f09cb0b98cbc9f52b88fe6d684aa1c41bfc6caea154866441edb39da0550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2333f09cb0b98cbc9f52b88fe6d684aa1c41bfc6caea154866441edb39da0550->enter($__internal_2333f09cb0b98cbc9f52b88fe6d684aa1c41bfc6caea154866441edb39da0550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2333f09cb0b98cbc9f52b88fe6d684aa1c41bfc6caea154866441edb39da0550->leave($__internal_2333f09cb0b98cbc9f52b88fe6d684aa1c41bfc6caea154866441edb39da0550_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f484712d688283e883d54b7b78cfa5a0a6bed74ced690ac92dc233b2c881cbf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f484712d688283e883d54b7b78cfa5a0a6bed74ced690ac92dc233b2c881cbf5->enter($__internal_f484712d688283e883d54b7b78cfa5a0a6bed74ced690ac92dc233b2c881cbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f484712d688283e883d54b7b78cfa5a0a6bed74ced690ac92dc233b2c881cbf5->leave($__internal_f484712d688283e883d54b7b78cfa5a0a6bed74ced690ac92dc233b2c881cbf5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9af6d9ca6e868ae501b4c2ce85c664ab45d36e52ffffcbad11e93dad49c24781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af6d9ca6e868ae501b4c2ce85c664ab45d36e52ffffcbad11e93dad49c24781->enter($__internal_9af6d9ca6e868ae501b4c2ce85c664ab45d36e52ffffcbad11e93dad49c24781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9af6d9ca6e868ae501b4c2ce85c664ab45d36e52ffffcbad11e93dad49c24781->leave($__internal_9af6d9ca6e868ae501b4c2ce85c664ab45d36e52ffffcbad11e93dad49c24781_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e63b72b06e53d29b60a1611bee079adb202de26b2d38f502b242ff67dcd8e329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63b72b06e53d29b60a1611bee079adb202de26b2d38f502b242ff67dcd8e329->enter($__internal_e63b72b06e53d29b60a1611bee079adb202de26b2d38f502b242ff67dcd8e329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e63b72b06e53d29b60a1611bee079adb202de26b2d38f502b242ff67dcd8e329->leave($__internal_e63b72b06e53d29b60a1611bee079adb202de26b2d38f502b242ff67dcd8e329_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
