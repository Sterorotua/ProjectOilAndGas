<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_1110f7b5a92f11fa098c43dcc19dc8f9a6fcf550863b7edcb7974756dad68842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b20d1055d9244e9ab5b7e131113a7632e747d20b6a0f22bffb1751530692cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b20d1055d9244e9ab5b7e131113a7632e747d20b6a0f22bffb1751530692cb7->enter($__internal_5b20d1055d9244e9ab5b7e131113a7632e747d20b6a0f22bffb1751530692cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5b20d1055d9244e9ab5b7e131113a7632e747d20b6a0f22bffb1751530692cb7->leave($__internal_5b20d1055d9244e9ab5b7e131113a7632e747d20b6a0f22bffb1751530692cb7_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a70efaf81187b279f6c13181f8ae08b7f56f7062834c68223d1d584d1be3ca23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70efaf81187b279f6c13181f8ae08b7f56f7062834c68223d1d584d1be3ca23->enter($__internal_a70efaf81187b279f6c13181f8ae08b7f56f7062834c68223d1d584d1be3ca23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a70efaf81187b279f6c13181f8ae08b7f56f7062834c68223d1d584d1be3ca23->leave($__internal_a70efaf81187b279f6c13181f8ae08b7f56f7062834c68223d1d584d1be3ca23_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c9506a394c287b5546d5f32ac881ee2d373517252324e9b17161eacde69e2a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9506a394c287b5546d5f32ac881ee2d373517252324e9b17161eacde69e2a07->enter($__internal_c9506a394c287b5546d5f32ac881ee2d373517252324e9b17161eacde69e2a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c9506a394c287b5546d5f32ac881ee2d373517252324e9b17161eacde69e2a07->leave($__internal_c9506a394c287b5546d5f32ac881ee2d373517252324e9b17161eacde69e2a07_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4dffc82a0432e58f5339e79b88c95dc9a8d3ba2565651f93b95387dd3d1e24ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dffc82a0432e58f5339e79b88c95dc9a8d3ba2565651f93b95387dd3d1e24ca->enter($__internal_4dffc82a0432e58f5339e79b88c95dc9a8d3ba2565651f93b95387dd3d1e24ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4dffc82a0432e58f5339e79b88c95dc9a8d3ba2565651f93b95387dd3d1e24ca->leave($__internal_4dffc82a0432e58f5339e79b88c95dc9a8d3ba2565651f93b95387dd3d1e24ca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block subject %}
{% autoescape false %}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
