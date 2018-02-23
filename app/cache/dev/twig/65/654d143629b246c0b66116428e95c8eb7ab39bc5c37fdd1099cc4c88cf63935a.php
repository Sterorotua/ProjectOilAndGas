<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f3ab08019ad966832e1809156bfea52065ac1294d739e67c8742312f5b0e8061 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_b5bc6931c9c282d5b267cc52a273c95eb5156c7245c0925947fa9ca53fbca90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5bc6931c9c282d5b267cc52a273c95eb5156c7245c0925947fa9ca53fbca90d->enter($__internal_b5bc6931c9c282d5b267cc52a273c95eb5156c7245c0925947fa9ca53fbca90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5bc6931c9c282d5b267cc52a273c95eb5156c7245c0925947fa9ca53fbca90d->leave($__internal_b5bc6931c9c282d5b267cc52a273c95eb5156c7245c0925947fa9ca53fbca90d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3953a9dc94a17046a518278daac0085a279737d850c16084394eb0a5ca278364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3953a9dc94a17046a518278daac0085a279737d850c16084394eb0a5ca278364->enter($__internal_3953a9dc94a17046a518278daac0085a279737d850c16084394eb0a5ca278364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3953a9dc94a17046a518278daac0085a279737d850c16084394eb0a5ca278364->leave($__internal_3953a9dc94a17046a518278daac0085a279737d850c16084394eb0a5ca278364_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4943b4e765ac966ad5544493c1c8a37e15974904aabfba7f40b9aaa2dbab77b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4943b4e765ac966ad5544493c1c8a37e15974904aabfba7f40b9aaa2dbab77b2->enter($__internal_4943b4e765ac966ad5544493c1c8a37e15974904aabfba7f40b9aaa2dbab77b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4943b4e765ac966ad5544493c1c8a37e15974904aabfba7f40b9aaa2dbab77b2->leave($__internal_4943b4e765ac966ad5544493c1c8a37e15974904aabfba7f40b9aaa2dbab77b2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7cc3d1aab04ca9919b7d7d3be5a45a9706e46c4aad4815ca4a2063c772a364b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7cc3d1aab04ca9919b7d7d3be5a45a9706e46c4aad4815ca4a2063c772a364b->enter($__internal_d7cc3d1aab04ca9919b7d7d3be5a45a9706e46c4aad4815ca4a2063c772a364b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d7cc3d1aab04ca9919b7d7d3be5a45a9706e46c4aad4815ca4a2063c772a364b->leave($__internal_d7cc3d1aab04ca9919b7d7d3be5a45a9706e46c4aad4815ca4a2063c772a364b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
