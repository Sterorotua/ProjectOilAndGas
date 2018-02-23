<?php

/* HomeBundle::home.html.twig */
class __TwigTemplate_eba10d9132056778d9c6340ddc237d8513cafb7f046eed0d931071cd9288564b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "HomeBundle::home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_content' => array($this, 'block_header_content'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::mainLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47306c21ec553e89e0fe25b23935a5e02e44f1a09e7b61bd0fea635c6792f33a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47306c21ec553e89e0fe25b23935a5e02e44f1a09e7b61bd0fea635c6792f33a->enter($__internal_47306c21ec553e89e0fe25b23935a5e02e44f1a09e7b61bd0fea635c6792f33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HomeBundle::home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47306c21ec553e89e0fe25b23935a5e02e44f1a09e7b61bd0fea635c6792f33a->leave($__internal_47306c21ec553e89e0fe25b23935a5e02e44f1a09e7b61bd0fea635c6792f33a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4309c641f9aa461a51823b7b0e75f8ca242dee53b5bdfb1260ddffa8ca20e1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4309c641f9aa461a51823b7b0e75f8ca242dee53b5bdfb1260ddffa8ca20e1a8->enter($__internal_4309c641f9aa461a51823b7b0e75f8ca242dee53b5bdfb1260ddffa8ca20e1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Home";
        
        $__internal_4309c641f9aa461a51823b7b0e75f8ca242dee53b5bdfb1260ddffa8ca20e1a8->leave($__internal_4309c641f9aa461a51823b7b0e75f8ca242dee53b5bdfb1260ddffa8ca20e1a8_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_7eef3ad88cfae2ff70e45108e03819aa67a2741b07ceef208b8d6beb319dc027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eef3ad88cfae2ff70e45108e03819aa67a2741b07ceef208b8d6beb319dc027->enter($__internal_7eef3ad88cfae2ff70e45108e03819aa67a2741b07ceef208b8d6beb319dc027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 6
        echo "    <h1>Dashboard</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
    </ol>
";
        
        $__internal_7eef3ad88cfae2ff70e45108e03819aa67a2741b07ceef208b8d6beb319dc027->leave($__internal_7eef3ad88cfae2ff70e45108e03819aa67a2741b07ceef208b8d6beb319dc027_prof);

    }

    // line 12
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_549138db31fcb8796ffdc5db341188857db5d9757932b79a8c41fc4e8bee32a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549138db31fcb8796ffdc5db341188857db5d9757932b79a8c41fc4e8bee32a5->enter($__internal_549138db31fcb8796ffdc5db341188857db5d9757932b79a8c41fc4e8bee32a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 13
        echo "        <div class=\"row\">
            <div class=\"col-md-6 col-sm-8 col-xs-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">My Projects</h3>
                        <div class=\"box-tools pull-right\">
                            <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                        </div>
                    </div>
                    <form role=\"form\" class=\"form-horizontal\">
                        <div class=\"box-body\">
                            <table class=\"table table-striped table-bordered dt-responsive hover datatable_table\" width=\"100%\" cellspacing=\"0\">
                                <thead>
                                    <tr>
                                        <th>Area</th>
                                        <th>Country</th>
                                        <th>Project Name</th>
                                        <th>Oil Company</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 35
        if (array_key_exists("projects", $context)) {
            // line 36
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 37
                echo "                                            <tr>
                                                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "area", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "country", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "oilCompany", array()), "html", null, true);
                echo "</td>
                                                <td><button class=\"btn btn-default btn-sm\" onClick=\"openDetailWindow(Routing.generate('_project_detail', {id: ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", array()), "html", null, true);
                echo " } ))\" role=\"button\"><i class=\"fa fa-folder\"></i></button></td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                    ";
        }
        // line 46
        echo "                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class=\"col-md-6 col-sm-8 col-xs-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">My Tenders</h3>
                        <div class=\"box-tools pull-right\">
                            <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                        </div>
                    </div>
                    <form role=\"form\" class=\"form-horizontal\">
                        <div class=\"box-body\">
                            <table class=\"table table-striped table-bordered dt-responsive hover datatable_table\" width=\"100%\" cellspacing=\"0\">
                                <thead>
                                    <tr>
                                        <th>Area</th>
                                        <th>Country</th>
                                        <th>Tender Name</th>
                                        <th>Oil Company</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 74
        if (array_key_exists("tenders", $context)) {
            // line 75
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tenders"]) ? $context["tenders"] : $this->getContext($context, "tenders")));
            foreach ($context['_seq'] as $context["_key"] => $context["tender"]) {
                // line 76
                echo "                                            <tr>
                                                <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["tender"], "area", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["tender"], "country", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["tender"], "name", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["tender"], "oilCompany", array()), "html", null, true);
                echo "</td>
                                                <td><button class=\"btn btn-default btn-sm\" onClick=\"openDetailWindow(Routing.generate('_tender_detail', {id: ";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["tender"], "id", array()), "html", null, true);
                echo " } ))\" role=\"button\"><i class=\"fa fa-folder\"></i></button></td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tender'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                                    ";
        }
        // line 85
        echo "                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class=\"row\">
            ";
        // line 123
        echo "            
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Global View</h3>
                        <div class=\"box-tools pull-right\">
                            <button class=\"btn btn-box-tool\" data-widget=\"collapse\" id=\"globalView\"><i class=\"fa fa-minus\"></i></button>
                        </div>
                    </div>
                    <div class=\"box-body\">
                        <div id=\"world-map\" style=\"width: 100%; height: 600px\"></div>
                    </div>
                </div>
            </div>
        </div>

    
";
        
        $__internal_549138db31fcb8796ffdc5db341188857db5d9757932b79a8c41fc4e8bee32a5->leave($__internal_549138db31fcb8796ffdc5db341188857db5d9757932b79a8c41fc4e8bee32a5_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_21e8061f06ca6147851126b80fa628902721f294c05109595a43d1c62da8dfb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e8061f06ca6147851126b80fa628902721f294c05109595a43d1c62da8dfb3->enter($__internal_21e8061f06ca6147851126b80fa628902721f294c05109595a43d1c62da8dfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 143
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/home/js/homeModule.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_21e8061f06ca6147851126b80fa628902721f294c05109595a43d1c62da8dfb3->leave($__internal_21e8061f06ca6147851126b80fa628902721f294c05109595a43d1c62da8dfb3_prof);

    }

    public function getTemplateName()
    {
        return "HomeBundle::home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 144,  247 => 143,  241 => 142,  217 => 123,  206 => 85,  203 => 84,  194 => 81,  190 => 80,  186 => 79,  182 => 78,  178 => 77,  175 => 76,  170 => 75,  168 => 74,  138 => 46,  135 => 45,  126 => 42,  122 => 41,  118 => 40,  114 => 39,  110 => 38,  107 => 37,  102 => 36,  100 => 35,  76 => 13,  70 => 12,  60 => 8,  56 => 6,  50 => 5,  37 => 3,  11 => 1,);
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

{% block title %}{{ parent() }}Home{% endblock %}

{% block header_content %}
    <h1>Dashboard</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('_home') }}\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
    </ol>
{% endblock %}
    
{% block page_content %}
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-8 col-xs-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">My Projects</h3>
                        <div class=\"box-tools pull-right\">
                            <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                        </div>
                    </div>
                    <form role=\"form\" class=\"form-horizontal\">
                        <div class=\"box-body\">
                            <table class=\"table table-striped table-bordered dt-responsive hover datatable_table\" width=\"100%\" cellspacing=\"0\">
                                <thead>
                                    <tr>
                                        <th>Area</th>
                                        <th>Country</th>
                                        <th>Project Name</th>
                                        <th>Oil Company</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% if projects is defined %}
                                        {% for project in projects %}
                                            <tr>
                                                <td>{{ project.area }}</td>
                                                <td>{{ project.country }}</td>
                                                <td>{{ project.name }}</td>
                                                <td>{{ project.oilCompany }}</td>
                                                <td><button class=\"btn btn-default btn-sm\" onClick=\"openDetailWindow(Routing.generate('_project_detail', {id: {{ project.id}} } ))\" role=\"button\"><i class=\"fa fa-folder\"></i></button></td>
                                            </tr>
                                        {% endfor %}
                                    {% endif %}
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class=\"col-md-6 col-sm-8 col-xs-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">My Tenders</h3>
                        <div class=\"box-tools pull-right\">
                            <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                        </div>
                    </div>
                    <form role=\"form\" class=\"form-horizontal\">
                        <div class=\"box-body\">
                            <table class=\"table table-striped table-bordered dt-responsive hover datatable_table\" width=\"100%\" cellspacing=\"0\">
                                <thead>
                                    <tr>
                                        <th>Area</th>
                                        <th>Country</th>
                                        <th>Tender Name</th>
                                        <th>Oil Company</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% if tenders is defined %}
                                        {% for tender in tenders %}
                                            <tr>
                                                <td>{{ tender.area }}</td>
                                                <td>{{ tender.country }}</td>
                                                <td>{{ tender.name }}</td>
                                                <td>{{ tender.oilCompany }}</td>
                                                <td><button class=\"btn btn-default btn-sm\" onClick=\"openDetailWindow(Routing.generate('_tender_detail', {id: {{ tender.id}} } ))\" role=\"button\"><i class=\"fa fa-folder\"></i></button></td>
                                            </tr>
                                        {% endfor %}
                                    {% endif %}
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class=\"row\">
            {#<div class=\"col-md-6 col-sm-8 col-xs-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Operators and Fleet</h3>
                        <div class=\"box-tools pull-right\">
                            <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                        </div>
                    </div>
                    <form role=\"form\" class=\"form-horizontal\">
                        <div class=\"box-body\">
                            content
                        </div>
                    </form>
                </div>
            </div>
            
            <div class=\"col-md-6 col-sm-8 col-xs-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Potential Platforms</h3>
                        <div class=\"box-tools pull-right\">
                            <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                        </div>
                    </div>
                    <div class=\"box-body\">
                        content
                    </div>
                </div>
            </div>#}
            
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Global View</h3>
                        <div class=\"box-tools pull-right\">
                            <button class=\"btn btn-box-tool\" data-widget=\"collapse\" id=\"globalView\"><i class=\"fa fa-minus\"></i></button>
                        </div>
                    </div>
                    <div class=\"box-body\">
                        <div id=\"world-map\" style=\"width: 100%; height: 600px\"></div>
                    </div>
                </div>
            </div>
        </div>

    
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/home/js/homeModule.js') }}\"></script>
{% endblock %}
", "HomeBundle::home.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/HomeBundle/Resources/views/home.html.twig");
    }
}
