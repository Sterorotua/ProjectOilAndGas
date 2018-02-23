<?php

/* AdminToolsBundle::adminTools.html.twig */
class __TwigTemplate_c1103995d505e21a46e65ecc95c40f8855711c7e4aaaedda3e2d7b10a36b1a70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "AdminToolsBundle::adminTools.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_content' => array($this, 'block_header_content'),
            'page_content' => array($this, 'block_page_content'),
            'modal' => array($this, 'block_modal'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::mainLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef3415361b3769b037e5bbb10d449dbdd4cca21d779eec8fe8acd5b18d05085c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3415361b3769b037e5bbb10d449dbdd4cca21d779eec8fe8acd5b18d05085c->enter($__internal_ef3415361b3769b037e5bbb10d449dbdd4cca21d779eec8fe8acd5b18d05085c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminToolsBundle::adminTools.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef3415361b3769b037e5bbb10d449dbdd4cca21d779eec8fe8acd5b18d05085c->leave($__internal_ef3415361b3769b037e5bbb10d449dbdd4cca21d779eec8fe8acd5b18d05085c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_83d7ff9dcd147e133837871ff489375c8fe06015e6c4b8a3bc6852cd7bdfd2a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d7ff9dcd147e133837871ff489375c8fe06015e6c4b8a3bc6852cd7bdfd2a4->enter($__internal_83d7ff9dcd147e133837871ff489375c8fe06015e6c4b8a3bc6852cd7bdfd2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Admin Tools";
        
        $__internal_83d7ff9dcd147e133837871ff489375c8fe06015e6c4b8a3bc6852cd7bdfd2a4->leave($__internal_83d7ff9dcd147e133837871ff489375c8fe06015e6c4b8a3bc6852cd7bdfd2a4_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_8a2a2679fb4bdd8e1e6c0125ef3245711e69a75337a93290b17b8706e7ecafdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2a2679fb4bdd8e1e6c0125ef3245711e69a75337a93290b17b8706e7ecafdc->enter($__internal_8a2a2679fb4bdd8e1e6c0125ef3245711e69a75337a93290b17b8706e7ecafdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 6
        echo "    <h1>Admin Tools</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_admin");
        echo "\"> Admin Tools</a></li>
    </ol>
";
        
        $__internal_8a2a2679fb4bdd8e1e6c0125ef3245711e69a75337a93290b17b8706e7ecafdc->leave($__internal_8a2a2679fb4bdd8e1e6c0125ef3245711e69a75337a93290b17b8706e7ecafdc_prof);

    }

    // line 13
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d98982c20ca0e22eb7fddacad54fa49301bbb3e60ba8027c9300e3679b56426a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98982c20ca0e22eb7fddacad54fa49301bbb3e60ba8027c9300e3679b56426a->enter($__internal_d98982c20ca0e22eb7fddacad54fa49301bbb3e60ba8027c9300e3679b56426a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 14
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary collapsed-box\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Users Manager</h3>
                    <div class=\"box-tools pull-right\">
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <table id=\"user_table\" class=\"table table-striped table-bordered dt-responsive hover\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email Address</th>
                                <th>Business Area</th>
                                <th>Account Status</th>
                                <th>Last Login</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 37
            echo "                                <tr>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "businessArea", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 43
            if (($this->getAttribute($context["user"], "status", array()) == 1)) {
                // line 44
                echo "                                            Active
                                        ";
            } else {
                // line 46
                echo "                                            Inactive
                                        ";
            }
            // line 48
            echo "                                    </td>
                                    <td>
                                       ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastLogin", array()), "html", null, true);
            echo " 
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"box box-primary collapsed-box\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Add Unreferenced Base</h3>
                    <div class=\"box-tools pull-right\">
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <form action=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_add_base");
        echo "\" method=\"POST\" id=\"add_base_form\">
                        <div class=\"form-group has-error\">
                            <label>Base name</label><br>
                            <input id=\"add_airport_name\" name=\"add_airport_name\" type=\"text\" class=\"form-control\" placeholder=\"Enter the name of the airport...\" required/>
                        </div>
                        <div class=\"form-group has-error\">
                            <label>Country</label><br>
                            <select name=\"add_airport_country\" id=\"add_airport_country\" class=\"select2 form-control\" required>
                                ";
        // line 74
        if (array_key_exists("countries", $context)) {
            // line 75
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries")));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                echo "    
                                        <option value=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "name", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                                ";
        }
        // line 79
        echo "                            </select>
                        </div>
                        <div class=\"form-group has-error\">
                            <label>Latitude</label><br>
                            <input id=\"add_airport_latitude\" name=\"add_airport_latitude\" type=\"text\" class=\"form-control\" placeholder=\"Enter base decimal latitude...\" required>
                        </div>
                        <div class=\"form-group has-error\">      
                            <label>Longitude</label><br>
                            <input id=\"add_airport_longitude\" name=\"add_airport_longitude\" type=\"text\" class=\"form-control\" placeholder=\"Enter base decimal longitude...\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Elevation</label><br>
                            <input id=\"add_airport_elevation\" name=\"add_airport_elevation\" type=\"text\" class=\"form-control\" placeholder=\"Enter base elevation in ft...\">     
                        </div>
                        <div class=\"form-group\">
                            <label>Iata Code</label><br>
                            <input id=\"add_airport_iata_code\" name=\"add_airport_link\" type=\"text\" class=\"form-control\" placeholder=\"Enter airport IATA code...\">
                        </div>
                        <div class=\"form-group\">
                            <label>Airport Link</label><br>
                            <input id=\"add_airport_link\" name=\"add_airport_link\" type=\"text\" class=\"form-control\" placeholder=\"Enter airport website link...\">     
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" id=\"add_airport_btn\" class=\"btn btn-success pull-right\">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"box box-primary collapsed-box\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Link Users to Business Area</h3>
                    <div class=\"box-tools pull-right\">
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <form role=\"form\" id=\"user_edit_form\" method=\"post\">
                        <div class=\"form-group\">
                            <label>Select User</label><br>
                            <select name=\"user_hidden_id\" id=\"user_hidden_id\" class=\"select2 form-control\" required>
                                ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 120
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label>Select Business Area</label><br>
                            <select name=\"user_business_area\" id=\"user_business_area\" class=\"select2 form-control\" required>
                                ";
        // line 127
        if (array_key_exists("businessAreas", $context)) {
            // line 128
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["businessAreas"]) ? $context["businessAreas"] : $this->getContext($context, "businessAreas")));
            foreach ($context['_seq'] as $context["_key"] => $context["businessArea"]) {
                echo "  
                                        <option value=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["businessArea"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["businessArea"], "name", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['businessArea'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "                                ";
        }
        // line 132
        echo "                            </select>
                        </div>
                            <div class=\"form-group\">
                            <button type=\"submit\" id=\"user_edit_form_btn\" class=\"btn btn-success pull-right\">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-primary collapsed-box\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Add New Business Area</h3>
                    <div class=\"box-tools pull-right\">
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <form action=\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_add_business_area");
        echo "\" method=\"post\" id=\"add_business_area_form\">
                        <div class=\"form-group has-error\">
                            <label>Business Area Name</label><br>
                            <input type=\"text\" name=\"add_business_area_name\" class=\"form-control\" placeholder=\"Enter your business area name...\" required>
                        </div>
                        <div class=\"form-group has-error\">
                            <label>Select Countries</label><br>
                            <select name=\"add_business_area_countries[]\" class=\"select2 form-control\" placeholder=\"Pick at least one country...\" multiple required>
                                ";
        // line 158
        if (array_key_exists("countries", $context)) {
            // line 159
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries")));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                echo "  
                                        <option value=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "name", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "                                ";
        }
        // line 163
        echo "                            </select>
                        </div>
                        <div class=\"form-group\">
                            <button id=\"add_business_area_btn\" type=\"submit\" class=\"btn btn-success pull-right\">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"box box-primary collapsed-box\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Add New Operator Brand</h3>
                    <div class=\"box-tools pull-right\">
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <form role=\"form\" method=\"post\" id=\"add_operator_group_form\">
                        <div class=\"form-group has-error\">
                            <label>Operator Brand Name</label><br>
                            <input type=\"text\" name=\"add_operator_group_name\" id=\"add_operator_group_name\" class=\"form-control\" placeholder=\"Enter your operator group name...\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Select Operator Group (Facultative)</label><br>
                            <select name=\"add_operator_super_group\" class=\"select2 form-control\" placeholder=\"Pick an operator super group...\">
                                
                            </select>
                        </div>
                        Or
                        <div class=\"form-group\">
                            <label>Create New Operator Group (Facultative)</label><br>
                            <input type=\"text\" name=\"add_operator_super_group_new\" class=\"form-control\" placeholder=\"Enter a new operator super group name...\">
                        </div>
                        <div class=\"form-group\">
                            <button id=\"add_operator_group_btn\" type=\"submit\" class=\"btn btn-success pull-right\">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"box box-primary collapsed-box\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Add New Oil Company</h3>
                    <div class=\"box-tools pull-right\">
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <form role=\"form\" method=\"post\" id=\"add_oil_company_form\">
                        <div class=\"form-group has-error\">
                            <label>Oil Company Name</label><br>
                            <input type=\"text\" name=\"add_oil_company_name\" id=\"add_oil_company_name\" class=\"form-control\" placeholder=\"Enter your oil company name...\" required>
                        </div>
                        <div class=\"form-group\">
                            <button id=\"add_oil_company_btn\" type=\"submit\" class=\"btn btn-success pull-right\">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"box box-primary collapsed-box\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Update Project Name</h3>
                    <div class=\"box-tools pull-right\">
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <form role=\"form\" method=\"post\" action=\"";
        // line 228
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_update_project_name");
        echo "\">
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-success pull-right\">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        
    </div>
";
        
        $__internal_d98982c20ca0e22eb7fddacad54fa49301bbb3e60ba8027c9300e3679b56426a->leave($__internal_d98982c20ca0e22eb7fddacad54fa49301bbb3e60ba8027c9300e3679b56426a_prof);

    }

    // line 242
    public function block_modal($context, array $blocks = array())
    {
        $__internal_195041099a08ee63256fa275cddd10cfe2178804b2065cbb582b0de038292263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195041099a08ee63256fa275cddd10cfe2178804b2065cbb582b0de038292263->enter($__internal_195041099a08ee63256fa275cddd10cfe2178804b2065cbb582b0de038292263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 243
        echo "    
";
        
        $__internal_195041099a08ee63256fa275cddd10cfe2178804b2065cbb582b0de038292263->leave($__internal_195041099a08ee63256fa275cddd10cfe2178804b2065cbb582b0de038292263_prof);

    }

    // line 246
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8181b4cb6afedf05082dd23ce56984462f14a689edbf4be7d420d4b4c0d4b441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8181b4cb6afedf05082dd23ce56984462f14a689edbf4be7d420d4b4c0d4b441->enter($__internal_8181b4cb6afedf05082dd23ce56984462f14a689edbf4be7d420d4b4c0d4b441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 247
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/admintools/js/adminToolsModule.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8181b4cb6afedf05082dd23ce56984462f14a689edbf4be7d420d4b4c0d4b441->leave($__internal_8181b4cb6afedf05082dd23ce56984462f14a689edbf4be7d420d4b4c0d4b441_prof);

    }

    public function getTemplateName()
    {
        return "AdminToolsBundle::adminTools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 248,  448 => 247,  442 => 246,  434 => 243,  428 => 242,  408 => 228,  341 => 163,  338 => 162,  328 => 160,  321 => 159,  319 => 158,  308 => 150,  288 => 132,  285 => 131,  275 => 129,  268 => 128,  266 => 127,  259 => 122,  246 => 120,  242 => 119,  200 => 79,  197 => 78,  187 => 76,  180 => 75,  178 => 74,  167 => 66,  153 => 54,  143 => 50,  139 => 48,  135 => 46,  131 => 44,  129 => 43,  124 => 41,  120 => 40,  116 => 39,  112 => 38,  109 => 37,  105 => 36,  81 => 14,  75 => 13,  65 => 9,  61 => 8,  57 => 6,  51 => 5,  38 => 3,  11 => 1,);
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

{% block title %}{{ parent() }}Admin Tools{% endblock %}

{% block header_content %}
    <h1>Admin Tools</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('_home') }}\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"{{ path('_admin') }}\"> Admin Tools</a></li>
    </ol>
{% endblock %}

{% block page_content %}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"box box-primary collapsed-box\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Users Manager</h3>
                    <div class=\"box-tools pull-right\">
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <table id=\"user_table\" class=\"table table-striped table-bordered dt-responsive hover\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email Address</th>
                                <th>Business Area</th>
                                <th>Account Status</th>
                                <th>Last Login</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for user in data %}
                                <tr>
                                    <td>{{ user.firstName }}</td>
                                    <td>{{ user.lastName }}</td>
                                    <td>{{ user.email }}</td>
                                    <td>{{ user.businessArea }}</td>
                                    <td>
                                        {% if user.status == 1 %}
                                            Active
                                        {% else %}
                                            Inactive
                                        {% endif %}
                                    </td>
                                    <td>
                                       {{ user.lastLogin }} 
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"box box-primary collapsed-box\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Add Unreferenced Base</h3>
                    <div class=\"box-tools pull-right\">
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <form action=\"{{ path('_add_base') }}\" method=\"POST\" id=\"add_base_form\">
                        <div class=\"form-group has-error\">
                            <label>Base name</label><br>
                            <input id=\"add_airport_name\" name=\"add_airport_name\" type=\"text\" class=\"form-control\" placeholder=\"Enter the name of the airport...\" required/>
                        </div>
                        <div class=\"form-group has-error\">
                            <label>Country</label><br>
                            <select name=\"add_airport_country\" id=\"add_airport_country\" class=\"select2 form-control\" required>
                                {% if countries is defined %}
                                    {% for country in countries %}    
                                        <option value=\"{{ country.id }}\">{{ country.name }}</option>
                                    {% endfor %}
                                {% endif %}
                            </select>
                        </div>
                        <div class=\"form-group has-error\">
                            <label>Latitude</label><br>
                            <input id=\"add_airport_latitude\" name=\"add_airport_latitude\" type=\"text\" class=\"form-control\" placeholder=\"Enter base decimal latitude...\" required>
                        </div>
                        <div class=\"form-group has-error\">      
                            <label>Longitude</label><br>
                            <input id=\"add_airport_longitude\" name=\"add_airport_longitude\" type=\"text\" class=\"form-control\" placeholder=\"Enter base decimal longitude...\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Elevation</label><br>
                            <input id=\"add_airport_elevation\" name=\"add_airport_elevation\" type=\"text\" class=\"form-control\" placeholder=\"Enter base elevation in ft...\">     
                        </div>
                        <div class=\"form-group\">
                            <label>Iata Code</label><br>
                            <input id=\"add_airport_iata_code\" name=\"add_airport_link\" type=\"text\" class=\"form-control\" placeholder=\"Enter airport IATA code...\">
                        </div>
                        <div class=\"form-group\">
                            <label>Airport Link</label><br>
                            <input id=\"add_airport_link\" name=\"add_airport_link\" type=\"text\" class=\"form-control\" placeholder=\"Enter airport website link...\">     
                        </div>
                        <div class=\"form-group\">
                            <button type=\"submit\" id=\"add_airport_btn\" class=\"btn btn-success pull-right\">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"box box-primary collapsed-box\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Link Users to Business Area</h3>
                    <div class=\"box-tools pull-right\">
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <form role=\"form\" id=\"user_edit_form\" method=\"post\">
                        <div class=\"form-group\">
                            <label>Select User</label><br>
                            <select name=\"user_hidden_id\" id=\"user_hidden_id\" class=\"select2 form-control\" required>
                                {% for user in data %}
                                    <option value=\"{{ user.id }}\">{{ user.firstName }} {{ user.lastName }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label>Select Business Area</label><br>
                            <select name=\"user_business_area\" id=\"user_business_area\" class=\"select2 form-control\" required>
                                {% if businessAreas is defined %}
                                    {% for businessArea in businessAreas %}  
                                        <option value=\"{{ businessArea.id }}\">{{ businessArea.name }}</option>
                                    {% endfor %}
                                {% endif %}
                            </select>
                        </div>
                            <div class=\"form-group\">
                            <button type=\"submit\" id=\"user_edit_form_btn\" class=\"btn btn-success pull-right\">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-primary collapsed-box\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Add New Business Area</h3>
                    <div class=\"box-tools pull-right\">
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <form action=\"{{ path('_add_business_area') }}\" method=\"post\" id=\"add_business_area_form\">
                        <div class=\"form-group has-error\">
                            <label>Business Area Name</label><br>
                            <input type=\"text\" name=\"add_business_area_name\" class=\"form-control\" placeholder=\"Enter your business area name...\" required>
                        </div>
                        <div class=\"form-group has-error\">
                            <label>Select Countries</label><br>
                            <select name=\"add_business_area_countries[]\" class=\"select2 form-control\" placeholder=\"Pick at least one country...\" multiple required>
                                {% if countries is defined %}
                                    {% for country in countries %}  
                                        <option value=\"{{ country.id }}\">{{ country.name }}</option>
                                    {% endfor %}
                                {% endif %}
                            </select>
                        </div>
                        <div class=\"form-group\">
                            <button id=\"add_business_area_btn\" type=\"submit\" class=\"btn btn-success pull-right\">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"box box-primary collapsed-box\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Add New Operator Brand</h3>
                    <div class=\"box-tools pull-right\">
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <form role=\"form\" method=\"post\" id=\"add_operator_group_form\">
                        <div class=\"form-group has-error\">
                            <label>Operator Brand Name</label><br>
                            <input type=\"text\" name=\"add_operator_group_name\" id=\"add_operator_group_name\" class=\"form-control\" placeholder=\"Enter your operator group name...\" required>
                        </div>
                        <div class=\"form-group\">
                            <label>Select Operator Group (Facultative)</label><br>
                            <select name=\"add_operator_super_group\" class=\"select2 form-control\" placeholder=\"Pick an operator super group...\">
                                
                            </select>
                        </div>
                        Or
                        <div class=\"form-group\">
                            <label>Create New Operator Group (Facultative)</label><br>
                            <input type=\"text\" name=\"add_operator_super_group_new\" class=\"form-control\" placeholder=\"Enter a new operator super group name...\">
                        </div>
                        <div class=\"form-group\">
                            <button id=\"add_operator_group_btn\" type=\"submit\" class=\"btn btn-success pull-right\">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"box box-primary collapsed-box\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Add New Oil Company</h3>
                    <div class=\"box-tools pull-right\">
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <form role=\"form\" method=\"post\" id=\"add_oil_company_form\">
                        <div class=\"form-group has-error\">
                            <label>Oil Company Name</label><br>
                            <input type=\"text\" name=\"add_oil_company_name\" id=\"add_oil_company_name\" class=\"form-control\" placeholder=\"Enter your oil company name...\" required>
                        </div>
                        <div class=\"form-group\">
                            <button id=\"add_oil_company_btn\" type=\"submit\" class=\"btn btn-success pull-right\">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"box box-primary collapsed-box\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Update Project Name</h3>
                    <div class=\"box-tools pull-right\">
                        <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-plus\"></i></button>
                    </div>
                </div>
                <div class=\"box-body\">
                    <form role=\"form\" method=\"post\" action=\"{{ path('_update_project_name') }}\">
                        <div class=\"form-group\">
                            <button type=\"submit\" class=\"btn btn-success pull-right\">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        
    </div>
{% endblock %}

{% block modal %}
    
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/admintools/js/adminToolsModule.js') }}\"></script>
{% endblock %}", "AdminToolsBundle::adminTools.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/AdminToolsBundle/Resources/views/adminTools.html.twig");
    }
}
