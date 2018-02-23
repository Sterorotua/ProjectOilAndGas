<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f50c08a685f1ad029f6508c751398cc557b7153d63618103e85d4ccd0cba565e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_8b3b4a6123198000aa04abcf52f34131e84e80b8a851f8b72f359b4c20505104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3b4a6123198000aa04abcf52f34131e84e80b8a851f8b72f359b4c20505104->enter($__internal_8b3b4a6123198000aa04abcf52f34131e84e80b8a851f8b72f359b4c20505104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b3b4a6123198000aa04abcf52f34131e84e80b8a851f8b72f359b4c20505104->leave($__internal_8b3b4a6123198000aa04abcf52f34131e84e80b8a851f8b72f359b4c20505104_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd7ab01b8ab33391b12e3520023d00317fe75196cef2ee6c36ea36e5d58b163d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd7ab01b8ab33391b12e3520023d00317fe75196cef2ee6c36ea36e5d58b163d->enter($__internal_dd7ab01b8ab33391b12e3520023d00317fe75196cef2ee6c36ea36e5d58b163d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_dd7ab01b8ab33391b12e3520023d00317fe75196cef2ee6c36ea36e5d58b163d->leave($__internal_dd7ab01b8ab33391b12e3520023d00317fe75196cef2ee6c36ea36e5d58b163d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
