<?php

/* AdminToolsBundle::account.html.twig */
class __TwigTemplate_f0eaf41aeaf9b59000ba2d71d00681da1e2cfb9667e44399de54421e2a09b9eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "AdminToolsBundle::account.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_content' => array($this, 'block_header_content'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::mainLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2db34ba3be659e47da362ec232a80712a9653c19c910530b141c0331f9f73560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db34ba3be659e47da362ec232a80712a9653c19c910530b141c0331f9f73560->enter($__internal_2db34ba3be659e47da362ec232a80712a9653c19c910530b141c0331f9f73560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminToolsBundle::account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2db34ba3be659e47da362ec232a80712a9653c19c910530b141c0331f9f73560->leave($__internal_2db34ba3be659e47da362ec232a80712a9653c19c910530b141c0331f9f73560_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_913b4ba8dec74ea2ce4871340a8e35b27c3a7e4c639f9fa163b658b375ed4735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913b4ba8dec74ea2ce4871340a8e35b27c3a7e4c639f9fa163b658b375ed4735->enter($__internal_913b4ba8dec74ea2ce4871340a8e35b27c3a7e4c639f9fa163b658b375ed4735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Add Account";
        
        $__internal_913b4ba8dec74ea2ce4871340a8e35b27c3a7e4c639f9fa163b658b375ed4735->leave($__internal_913b4ba8dec74ea2ce4871340a8e35b27c3a7e4c639f9fa163b658b375ed4735_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_e7d88ea960871f8faf743532971dbf7494afa63e7bc212e7f7d1fa8fb26c1767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7d88ea960871f8faf743532971dbf7494afa63e7bc212e7f7d1fa8fb26c1767->enter($__internal_e7d88ea960871f8faf743532971dbf7494afa63e7bc212e7f7d1fa8fb26c1767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 6
        echo "    <h1>Account</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_account");
        echo "\"> My Account</a></li>
    </ol>
";
        
        $__internal_e7d88ea960871f8faf743532971dbf7494afa63e7bc212e7f7d1fa8fb26c1767->leave($__internal_e7d88ea960871f8faf743532971dbf7494afa63e7bc212e7f7d1fa8fb26c1767_prof);

    }

    // line 13
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a3c5baf4520c65b44971a42025e8fedefe24f2fa66ae966255caa78e05e64da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c5baf4520c65b44971a42025e8fedefe24f2fa66ae966255caa78e05e64da4->enter($__internal_a3c5baf4520c65b44971a42025e8fedefe24f2fa66ae966255caa78e05e64da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_registration_register"), array());
        
        $__internal_a3c5baf4520c65b44971a42025e8fedefe24f2fa66ae966255caa78e05e64da4->leave($__internal_a3c5baf4520c65b44971a42025e8fedefe24f2fa66ae966255caa78e05e64da4_prof);

    }

    public function getTemplateName()
    {
        return "AdminToolsBundle::account.html.twig";
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

{% block title %}{{ parent() }}Add Account{% endblock %}

{% block header_content %}
    <h1>Account</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('_home') }}\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"{{ path('_account') }}\"> My Account</a></li>
    </ol>
{% endblock %}

{% block page_content %}
    {% render url('fos_user_registration_register') %}
{% endblock %}
", "AdminToolsBundle::account.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/AdminToolsBundle/Resources/views/account.html.twig");
    }
}
