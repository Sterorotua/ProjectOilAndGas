<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_889225891371c539e5d461dddb033b8ed662c20a3936b5c75f39ff61b2807625 extends Twig_Template
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
        $__internal_fd9fa0eeb0b1a0fa4c58c29b921ad2115dfac891da452a0bb1b05692bb3a8e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9fa0eeb0b1a0fa4c58c29b921ad2115dfac891da452a0bb1b05692bb3a8e96->enter($__internal_fd9fa0eeb0b1a0fa4c58c29b921ad2115dfac891da452a0bb1b05692bb3a8e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_fd9fa0eeb0b1a0fa4c58c29b921ad2115dfac891da452a0bb1b05692bb3a8e96->leave($__internal_fd9fa0eeb0b1a0fa4c58c29b921ad2115dfac891da452a0bb1b05692bb3a8e96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
