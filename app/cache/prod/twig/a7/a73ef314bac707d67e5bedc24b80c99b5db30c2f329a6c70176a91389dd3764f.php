<?php

/* AdminToolsBundle::account.html.twig */
class __TwigTemplate_eca0298b22dfd9a2572fd1ff08006e9c8101a495839b30ef1dd6e19717c7870e extends Twig_Template
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
        $__internal_2646b64f25a8dbc4bb293218861754c79a8e9ce58d0cbd15719d0278762545aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2646b64f25a8dbc4bb293218861754c79a8e9ce58d0cbd15719d0278762545aa->enter($__internal_2646b64f25a8dbc4bb293218861754c79a8e9ce58d0cbd15719d0278762545aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminToolsBundle::account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2646b64f25a8dbc4bb293218861754c79a8e9ce58d0cbd15719d0278762545aa->leave($__internal_2646b64f25a8dbc4bb293218861754c79a8e9ce58d0cbd15719d0278762545aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8711210c246f19fa69db3b5425d328f0d1ec858247b115ed36f54fcda685aa10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8711210c246f19fa69db3b5425d328f0d1ec858247b115ed36f54fcda685aa10->enter($__internal_8711210c246f19fa69db3b5425d328f0d1ec858247b115ed36f54fcda685aa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Add Account";
        
        $__internal_8711210c246f19fa69db3b5425d328f0d1ec858247b115ed36f54fcda685aa10->leave($__internal_8711210c246f19fa69db3b5425d328f0d1ec858247b115ed36f54fcda685aa10_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_93d0142e487d75bf5b08f825d64215a03f7160c3f3fcc1c8f94ee3b9c980444d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d0142e487d75bf5b08f825d64215a03f7160c3f3fcc1c8f94ee3b9c980444d->enter($__internal_93d0142e487d75bf5b08f825d64215a03f7160c3f3fcc1c8f94ee3b9c980444d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

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
        
        $__internal_93d0142e487d75bf5b08f825d64215a03f7160c3f3fcc1c8f94ee3b9c980444d->leave($__internal_93d0142e487d75bf5b08f825d64215a03f7160c3f3fcc1c8f94ee3b9c980444d_prof);

    }

    // line 13
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_28b972f401ac11eb629e4eb341496dcfe9754206286e0a601fdcd04c1067aeed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b972f401ac11eb629e4eb341496dcfe9754206286e0a601fdcd04c1067aeed->enter($__internal_28b972f401ac11eb629e4eb341496dcfe9754206286e0a601fdcd04c1067aeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\ActionsExtension')->renderUri($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_user_registration_register"), array());
        
        $__internal_28b972f401ac11eb629e4eb341496dcfe9754206286e0a601fdcd04c1067aeed->leave($__internal_28b972f401ac11eb629e4eb341496dcfe9754206286e0a601fdcd04c1067aeed_prof);

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
