<?php

/* AdminToolsBundle::account.html.twig */
class __TwigTemplate_1e4cafbf28bed33645804e6239ff286c2dabee11da583abecf724ddc05857ad9 extends Twig_Template
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
        $__internal_dcb025e058c3cf870c31f87e1e62a00a11a8bcf55345ec022d99db60e834112f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb025e058c3cf870c31f87e1e62a00a11a8bcf55345ec022d99db60e834112f->enter($__internal_dcb025e058c3cf870c31f87e1e62a00a11a8bcf55345ec022d99db60e834112f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminToolsBundle::account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcb025e058c3cf870c31f87e1e62a00a11a8bcf55345ec022d99db60e834112f->leave($__internal_dcb025e058c3cf870c31f87e1e62a00a11a8bcf55345ec022d99db60e834112f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e11e33e4afb397e5d59ff78474ab22f556c0c96cf6d95e42a79d473bcfec8c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11e33e4afb397e5d59ff78474ab22f556c0c96cf6d95e42a79d473bcfec8c23->enter($__internal_e11e33e4afb397e5d59ff78474ab22f556c0c96cf6d95e42a79d473bcfec8c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Add Account";
        
        $__internal_e11e33e4afb397e5d59ff78474ab22f556c0c96cf6d95e42a79d473bcfec8c23->leave($__internal_e11e33e4afb397e5d59ff78474ab22f556c0c96cf6d95e42a79d473bcfec8c23_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_e889a24aa69ab4f2f7b50966b9f07e380b5f9196557e8824298edab74c90aec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e889a24aa69ab4f2f7b50966b9f07e380b5f9196557e8824298edab74c90aec9->enter($__internal_e889a24aa69ab4f2f7b50966b9f07e380b5f9196557e8824298edab74c90aec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

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
        
        $__internal_e889a24aa69ab4f2f7b50966b9f07e380b5f9196557e8824298edab74c90aec9->leave($__internal_e889a24aa69ab4f2f7b50966b9f07e380b5f9196557e8824298edab74c90aec9_prof);

    }

    // line 13
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ffc22e8733e32a4639f9b533e1bbf338aaced72b60d2c7b39dbd568f30ad791f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc22e8733e32a4639f9b533e1bbf338aaced72b60d2c7b39dbd568f30ad791f->enter($__internal_ffc22e8733e32a4639f9b533e1bbf338aaced72b60d2c7b39dbd568f30ad791f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_registration_register"), array());
        
        $__internal_ffc22e8733e32a4639f9b533e1bbf338aaced72b60d2c7b39dbd568f30ad791f->leave($__internal_ffc22e8733e32a4639f9b533e1bbf338aaced72b60d2c7b39dbd568f30ad791f_prof);

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
