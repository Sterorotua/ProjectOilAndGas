<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_37f58e7b49a96e5d2b2b62212562ebdeceed534b0c26db1c6610a1935980c764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_0b6b9bf480ee5e78df49ea3f8d93653d73fb13269d869ba9b6f62434512b649d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6b9bf480ee5e78df49ea3f8d93653d73fb13269d869ba9b6f62434512b649d->enter($__internal_0b6b9bf480ee5e78df49ea3f8d93653d73fb13269d869ba9b6f62434512b649d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b6b9bf480ee5e78df49ea3f8d93653d73fb13269d869ba9b6f62434512b649d->leave($__internal_0b6b9bf480ee5e78df49ea3f8d93653d73fb13269d869ba9b6f62434512b649d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fc83fdb4756cf40b938e7796b8df468bc47b795b6fe4e6daf147e0c0219d2c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc83fdb4756cf40b938e7796b8df468bc47b795b6fe4e6daf147e0c0219d2c3->enter($__internal_4fc83fdb4756cf40b938e7796b8df468bc47b795b6fe4e6daf147e0c0219d2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4fc83fdb4756cf40b938e7796b8df468bc47b795b6fe4e6daf147e0c0219d2c3->leave($__internal_4fc83fdb4756cf40b938e7796b8df468bc47b795b6fe4e6daf147e0c0219d2c3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:checkEmail.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/checkEmail.html.twig");
    }
}
