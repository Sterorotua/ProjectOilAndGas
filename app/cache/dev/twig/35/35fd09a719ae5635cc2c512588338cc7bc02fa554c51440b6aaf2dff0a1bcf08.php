<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6b44e7b697cb48f291845f7dfe9e2d944180e8f08645631d7464c8c6d911f97d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b02b8d0af0ea968b69f4c56092435225cf1d3c33d3b2614b624117ce76f26b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b02b8d0af0ea968b69f4c56092435225cf1d3c33d3b2614b624117ce76f26b6->enter($__internal_2b02b8d0af0ea968b69f4c56092435225cf1d3c33d3b2614b624117ce76f26b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2b02b8d0af0ea968b69f4c56092435225cf1d3c33d3b2614b624117ce76f26b6->leave($__internal_2b02b8d0af0ea968b69f4c56092435225cf1d3c33d3b2614b624117ce76f26b6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b9c6b8e18432af02b09e05fa3b5af5adbcac4b54edd4a09ccdd169c539fe64f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9c6b8e18432af02b09e05fa3b5af5adbcac4b54edd4a09ccdd169c539fe64f->enter($__internal_4b9c6b8e18432af02b09e05fa3b5af5adbcac4b54edd4a09ccdd169c539fe64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4b9c6b8e18432af02b09e05fa3b5af5adbcac4b54edd4a09ccdd169c539fe64f->leave($__internal_4b9c6b8e18432af02b09e05fa3b5af5adbcac4b54edd4a09ccdd169c539fe64f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
