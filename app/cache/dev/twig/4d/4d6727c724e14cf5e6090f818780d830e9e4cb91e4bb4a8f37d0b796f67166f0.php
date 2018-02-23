<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9a36f10740e5cf4456ccbeceaba17951b362ff0a2578c39ac683d314232b0d34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7bdad4d940823d5a2ee416d80c8097a5b0eb654ecad25cf86bc9039d080c82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7bdad4d940823d5a2ee416d80c8097a5b0eb654ecad25cf86bc9039d080c82f->enter($__internal_b7bdad4d940823d5a2ee416d80c8097a5b0eb654ecad25cf86bc9039d080c82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_b7bdad4d940823d5a2ee416d80c8097a5b0eb654ecad25cf86bc9039d080c82f->leave($__internal_b7bdad4d940823d5a2ee416d80c8097a5b0eb654ecad25cf86bc9039d080c82f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
