<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_666b39ec184e43acc7d70d0d32dd01d896df2da706624e318bfc0f6da1bc0352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_b359c6438ff346a4355004f2d0c33d71500d5b99a4c503f31d1d864b413025d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b359c6438ff346a4355004f2d0c33d71500d5b99a4c503f31d1d864b413025d5->enter($__internal_b359c6438ff346a4355004f2d0c33d71500d5b99a4c503f31d1d864b413025d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b359c6438ff346a4355004f2d0c33d71500d5b99a4c503f31d1d864b413025d5->leave($__internal_b359c6438ff346a4355004f2d0c33d71500d5b99a4c503f31d1d864b413025d5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7e83e3f3a3d278aa1323cf46cc0010ea62c7dda2ca953c89aa1009ffe1d6685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e83e3f3a3d278aa1323cf46cc0010ea62c7dda2ca953c89aa1009ffe1d6685->enter($__internal_e7e83e3f3a3d278aa1323cf46cc0010ea62c7dda2ca953c89aa1009ffe1d6685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_e7e83e3f3a3d278aa1323cf46cc0010ea62c7dda2ca953c89aa1009ffe1d6685->leave($__internal_e7e83e3f3a3d278aa1323cf46cc0010ea62c7dda2ca953c89aa1009ffe1d6685_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:checkEmail.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
