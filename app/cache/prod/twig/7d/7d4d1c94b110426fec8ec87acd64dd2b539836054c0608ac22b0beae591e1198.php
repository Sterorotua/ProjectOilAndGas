<?php

/* OilIndustryBundle:OilCountry:oilCountry.html.twig */
class __TwigTemplate_93249a554cfe59bc47816c460476a7c9cf5decd287823a8e9bdc2dd4c6736646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "OilIndustryBundle:OilCountry:oilCountry.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "Country";
    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Countries</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_oilCountry");
        echo "\"> Countries</a></li>
    </ol>
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OilIndustryBundle:OilCountry:oilCountry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  55 => 13,  48 => 9,  44 => 8,  40 => 6,  37 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OilIndustryBundle:OilCountry:oilCountry.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/OilIndustryBundle/Resources/views/OilCountry/oilCountry.html.twig");
    }
}
