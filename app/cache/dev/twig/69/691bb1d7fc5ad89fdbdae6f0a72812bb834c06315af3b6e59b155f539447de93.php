<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_8aa245e60fadada6e0f41fcae33cbeb04b04bd87d47fe3a188c91a0a2ed49005 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee00726731c281e5e99e84cba172ebca9898b444e471ccaf978d68fd3315e930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee00726731c281e5e99e84cba172ebca9898b444e471ccaf978d68fd3315e930->enter($__internal_ee00726731c281e5e99e84cba172ebca9898b444e471ccaf978d68fd3315e930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee00726731c281e5e99e84cba172ebca9898b444e471ccaf978d68fd3315e930->leave($__internal_ee00726731c281e5e99e84cba172ebca9898b444e471ccaf978d68fd3315e930_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c93f2d82784d77fc7a37783c5ba5783880a662f42bc02be99c218c25dc9b7e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93f2d82784d77fc7a37783c5ba5783880a662f42bc02be99c218c25dc9b7e68->enter($__internal_c93f2d82784d77fc7a37783c5ba5783880a662f42bc02be99c218c25dc9b7e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c93f2d82784d77fc7a37783c5ba5783880a662f42bc02be99c218c25dc9b7e68->leave($__internal_c93f2d82784d77fc7a37783c5ba5783880a662f42bc02be99c218c25dc9b7e68_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Group/list.html.twig");
    }
}
