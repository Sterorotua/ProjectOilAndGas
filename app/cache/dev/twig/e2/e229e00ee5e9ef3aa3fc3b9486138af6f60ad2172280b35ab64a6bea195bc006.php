<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_c2f10ab5e9f56535acf30362b70c1e29ffeed4d5f5dc348f8ad2c792ffdd3885 extends Twig_Template
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
        $__internal_10cc6bb21adca4fbb47de06a55213c4e3da8cad949ae306a8b56c15f4bb0e6d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10cc6bb21adca4fbb47de06a55213c4e3da8cad949ae306a8b56c15f4bb0e6d7->enter($__internal_10cc6bb21adca4fbb47de06a55213c4e3da8cad949ae306a8b56c15f4bb0e6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_10cc6bb21adca4fbb47de06a55213c4e3da8cad949ae306a8b56c15f4bb0e6d7->leave($__internal_10cc6bb21adca4fbb47de06a55213c4e3da8cad949ae306a8b56c15f4bb0e6d7_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3defcf35c2eb915f587dfffdb810bfcb31bc83fa645d07140602fff8189ba764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3defcf35c2eb915f587dfffdb810bfcb31bc83fa645d07140602fff8189ba764->enter($__internal_3defcf35c2eb915f587dfffdb810bfcb31bc83fa645d07140602fff8189ba764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3defcf35c2eb915f587dfffdb810bfcb31bc83fa645d07140602fff8189ba764->leave($__internal_3defcf35c2eb915f587dfffdb810bfcb31bc83fa645d07140602fff8189ba764_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e68df3ab9e78236865e7abae950b7f5de3eabeae0303d33a9f198af482de2e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e68df3ab9e78236865e7abae950b7f5de3eabeae0303d33a9f198af482de2e39->enter($__internal_e68df3ab9e78236865e7abae950b7f5de3eabeae0303d33a9f198af482de2e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e68df3ab9e78236865e7abae950b7f5de3eabeae0303d33a9f198af482de2e39->leave($__internal_e68df3ab9e78236865e7abae950b7f5de3eabeae0303d33a9f198af482de2e39_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_16e11815a91ccbc1e1a9df577054f494e9a9f4d951db1ce8a4ed74ef695e732c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e11815a91ccbc1e1a9df577054f494e9a9f4d951db1ce8a4ed74ef695e732c->enter($__internal_16e11815a91ccbc1e1a9df577054f494e9a9f4d951db1ce8a4ed74ef695e732c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_16e11815a91ccbc1e1a9df577054f494e9a9f4d951db1ce8a4ed74ef695e732c->leave($__internal_16e11815a91ccbc1e1a9df577054f494e9a9f4d951db1ce8a4ed74ef695e732c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
