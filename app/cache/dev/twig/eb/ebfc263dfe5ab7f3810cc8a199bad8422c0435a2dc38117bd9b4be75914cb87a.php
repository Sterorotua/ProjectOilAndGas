<?php

/* OilIndustryBundle:Platforms:platformDetail.html.twig */
class __TwigTemplate_7f6d135a0e80eb266e88d399f68d09831db3321a896368b51e289d38cd7ae718 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "OilIndustryBundle:Platforms:platformDetail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
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
        $__internal_ebd297e49c2aa8469e67221fccc49cb69f62c4aaaa90947bf896909dc0996549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd297e49c2aa8469e67221fccc49cb69f62c4aaaa90947bf896909dc0996549->enter($__internal_ebd297e49c2aa8469e67221fccc49cb69f62c4aaaa90947bf896909dc0996549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OilIndustryBundle:Platforms:platformDetail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd297e49c2aa8469e67221fccc49cb69f62c4aaaa90947bf896909dc0996549->leave($__internal_ebd297e49c2aa8469e67221fccc49cb69f62c4aaaa90947bf896909dc0996549_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6a75c7341d54f2e83a43c46ca402476a65813542073ddea9c5d004d638a88a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a75c7341d54f2e83a43c46ca402476a65813542073ddea9c5d004d638a88a7->enter($__internal_d6a75c7341d54f2e83a43c46ca402476a65813542073ddea9c5d004d638a88a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name", array(), "array"), "html", null, true);
        
        $__internal_d6a75c7341d54f2e83a43c46ca402476a65813542073ddea9c5d004d638a88a7->leave($__internal_d6a75c7341d54f2e83a43c46ca402476a65813542073ddea9c5d004d638a88a7_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_5c8471230004c8adf38bddcf2530bf1d3a99274d656bb9ecc63bc067e64493f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8471230004c8adf38bddcf2530bf1d3a99274d656bb9ecc63bc067e64493f2->enter($__internal_5c8471230004c8adf38bddcf2530bf1d3a99274d656bb9ecc63bc067e64493f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/css/helicoptr.css"), "html", null, true);
        echo "\">
";
        
        $__internal_5c8471230004c8adf38bddcf2530bf1d3a99274d656bb9ecc63bc067e64493f2->leave($__internal_5c8471230004c8adf38bddcf2530bf1d3a99274d656bb9ecc63bc067e64493f2_prof);

    }

    // line 10
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_dba97a4663066ace3d705d666fb873c97db14cf71aa34a05c32821b72d7c844f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba97a4663066ace3d705d666fb873c97db14cf71aa34a05c32821b72d7c844f->enter($__internal_dba97a4663066ace3d705d666fb873c97db14cf71aa34a05c32821b72d7c844f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 11
        echo "    <h1>
        ";
        // line 12
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name", array(), "array", true, true) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "oilCompany", array(), "array", true, true))) {
            // line 13
            echo "            #";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array(), "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "oilCompany", array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name", array(), "array"), "html", null, true);
            echo "
        ";
        } elseif ($this->getAttribute(        // line 14
(isset($context["data"]) ? $context["data"] : null), "name", array(), "array", true, true)) {
            // line 15
            echo "            Missing Oil Company - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name", array(), "array"), "html", null, true);
            echo "
        ";
        } else {
            // line 17
            echo "            Missing Oil Company - Missing Platform Name
        ";
        }
        // line 19
        echo "    </h1>
    <div class=\"breadcrumb btn-group\">
        <button id=\"edit_platform_btn\" type=\"button\" class=\"btn btn-primary btn-flat btn-xs\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#platform_edit_modal\">
            <i class=\"fa fa-edit\"></i>
            Edit
        </button>
    </div>
";
        
        $__internal_dba97a4663066ace3d705d666fb873c97db14cf71aa34a05c32821b72d7c844f->leave($__internal_dba97a4663066ace3d705d666fb873c97db14cf71aa34a05c32821b72d7c844f_prof);

    }

    // line 28
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_c9535ed5eab89f3e8ab646456a2f40ca461add53bb499916fb815d44b589f9bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9535ed5eab89f3e8ab646456a2f40ca461add53bb499916fb815d44b589f9bd->enter($__internal_c9535ed5eab89f3e8ab646456a2f40ca461add53bb499916fb815d44b589f9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 29
        echo "    <div class=\"row\">
        
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-light-blue\">
                    <i class=\"icon-platform\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Oil Company</span>
                    <span class=\"info-box-number\">
                        ";
        // line 39
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "oilCompany", array(), "array", true, true)) {
            // line 40
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "oilCompany", array(), "array"), "html", null, true);
            echo "
                        ";
        }
        // line 42
        echo "                    </span>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-blue\">
                    <i class=\"icon-helipad\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Base</span>
                    <span class=\"info-box-number\">
                        ";
        // line 54
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "base", array(), "array", true, true)) {
            // line 55
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "base", array(), "array"), "name", array()), "html", null, true);
            echo "
                        ";
        }
        // line 57
        echo "                    </span>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-gray\">
                    <i class=\"fa fa-globe\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Country</span>
                    <span class=\"info-box-number\">
                        ";
        // line 69
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array", true, true)) {
            // line 70
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "country", array(), "array"), "html", null, true);
            echo "
                        ";
        }
        // line 72
        echo "                    </span>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-light-blue\">
                    <i class=\"fa fa-tag\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Platform Status</span>
                    <span class=\"info-box-number\">
                        ";
        // line 84
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "platformStatus", array(), "array", true, true)) {
            // line 85
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "platformStatus", array(), "array"), "html", null, true);
            echo "
                        ";
        }
        // line 87
        echo "                    </span>
                </div>
            </div>
        </div>  
                    
    </div>
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"box box-solid box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\"><i class=\"icon fa fa-calendar\"></i> Platform Timing</h3>
                </div>
                <div class=\"box-body\">
                    <p><span style=\"font-weight: bold\">Operational Year : </span><span class=\"pull-right\">";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array"), "html", null, true);
        echo "</span></p>
                    <p><span style=\"font-weight: bold\">Current Year : </span><span class=\"pull-right\">";
        // line 101
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</span></p>
                    <p><span style=\"font-weight: bold\">Removal Year : </span><span class=\"pull-right\">";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "removalYear", array(), "array"), "html", null, true);
        echo "</span></p>
                    ";
        // line 103
        if ((((($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "removalYear", array(), "array") != "Unknown") && ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array") != "Unknown")) && ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "removalYear", array(), "array") != null)) && ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array") != null))) {
            // line 104
            echo "                        <div class=\"progress active\">
                            <div class=\"progress-bar progress-bar-primary progress-bar-striped\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"";
            // line 105
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "removalYear", array(), "array") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array")), "html", null, true);
            echo "\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array")), "html", null, true);
            echo "\" style=\"width: ";
            echo twig_escape_filter($this->env, twig_round((((twig_date_format_filter($this->env, "now", "Y") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array")) / ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "removalYear", array(), "array") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array"))) * 100)), "html", null, true);
            echo "%\">
                            </div>
                        </div>
                    ";
        }
        // line 109
        echo "                </div>
            </div>
            <div class=\"box box-solid box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\"><i class=\"icon icon-helipad\"></i> Helideck Data</h3>
                </div>
                <div class=\"box-body\">
                    <p><span style=\"font-weight: bold\">Helideck D-Value : </span><span class=\"pull-right\">";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "dValue", array(), "array"), "html", null, true);
        echo "m</span></p>
                    <p><span style=\"font-weight: bold\">Helideck T-Value : </span><span class=\"pull-right\">";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "tValue", array(), "array"), "html", null, true);
        echo "m</span></p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"box box-solid box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\"><i class=\"icon fa fa-flag\"></i> Distance</h3>
                </div>
                <div class=\"box-body\">
                    <p><span style=\"font-weight: bold\">Nearest Base Distance : </span><span class=\"pull-right\">";
        // line 127
        echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "distance", array(), "array"), 2, "common"), "html", null, true);
        echo " nm</span></p>
                    <p><span style=\"font-weight: bold\">Coast Distance : </span><span class=\"pull-right\">";
        // line 128
        echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "coastDistance", array(), "array"), 2, "common"), "html", null, true);
        echo " nm</span></p>
                </div>
            </div>
            <div class=\"box box-solid box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\"><i class=\"icon fa fa-info\"></i> Refuelling and Employees</h3>
                </div>
                <div class=\"box-body\">
                    <p>
                        <span style=\"font-weight: bold\">Available Refuelling : 
                            ";
        // line 138
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "refuellingOption", array(), "array") == "Available")) {
            // line 139
            echo "                                <i class=\"icon fa fa-check pull-right\"></i>
                            ";
        } else {
            // line 141
            echo "                                <i class=\"icon fa fa-times pull-right\"></i>
                            ";
        }
        // line 143
        echo "                        </span>
                    </p>
                    <p><span style=\"font-weight: bold\">Bunked Bed Number : </span><span class=\"pull-right\">";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "bunkedBedNumber", array(), "array"), "html", null, true);
        echo "</span></p>
                </div>
            </div>
                <div class=\"box box-solid box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\"><i class=\"icon fa fa-map\"></i> Global Positioning Data</h3>
                </div>
                <div class=\"box-body\">
                    <p><span style=\"font-weight: bold\">Latitude : </span><span class=\"pull-right\">";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "gps", array(), "array"), "lat", array()), "html", null, true);
        echo "</span></p>
                    <p><span style=\"font-weight: bold\">Longitude : </span><span class=\"pull-right\">";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "gps", array(), "array"), "lng", array()), "html", null, true);
        echo "</span></p>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Localisation</h3>
                </div>
                <div class=\"box-body\">
                    <div id=\"world-map\" style=\"height: 220px\">
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <input id=\"id\" type=\"text\" style=\"display: none\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array(), "array"), "html", null, true);
        echo "\">
";
        
        $__internal_c9535ed5eab89f3e8ab646456a2f40ca461add53bb499916fb815d44b589f9bd->leave($__internal_c9535ed5eab89f3e8ab646456a2f40ca461add53bb499916fb815d44b589f9bd_prof);

    }

    // line 175
    public function block_modal($context, array $blocks = array())
    {
        $__internal_967003b2eca842b8bc352ae2d32a912e5c7d0fc41ca72016b97bb5979b38208e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967003b2eca842b8bc352ae2d32a912e5c7d0fc41ca72016b97bb5979b38208e->enter($__internal_967003b2eca842b8bc352ae2d32a912e5c7d0fc41ca72016b97bb5979b38208e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 176
        echo "    <!-- Modal -->
    <div class=\"modal fade\" id=\"platform_edit_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit_platform_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Edit platform data</h3>
                </div>
                <div class=\"modal-body\">
                    <div class=\"alert alert-warning alert-dismissible\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                        <h4>
                            <i class=\"icon fa fa-warning\"></i>
                            Important note !
                        </h4>
                        You don't need to fill the fields you don't wish to edit, just jump to the fields you are looking for.
                    </div>
                    <form role=\"form\" id=\"edit_platform_form\" method=\"post\">
                        <div id=\"myModalFormContent\">
                            
                            <div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li><a href=\"#tab1\" data-toggle=\"tab\">1. Main Data</a></li>
                                    <li><a href=\"#tab2\" data-toggle=\"tab\">2. Helideck Data</a></li>
                                    <li><a href=\"#tab3\" data-toggle=\"tab\">3. Timing</a></li>
                                    <li><a href=\"#tab4\" data-toggle=\"tab\">4. Performance</a></li>
                                </ul>
                            </div>
                            <div class=\"progress active\">
                                <div class=\"progress-bar progress-bar-striped\" id=\"bar\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
                                </div>
                            </div>
                            <input id=\"hiddenId\" type=\"text\" value=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array(), "array"), "html", null, true);
        echo "\" style=\"display: none\"/>
                            
                            <div class=\"tab-content\">
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab1\">
                                    <div class=\"form-group\">
                                        <label>Oil Company</label><br>
                                        <select name=\"edit_platform_oil_company\" id=\"edit_platform_oil_company\" autocomplete=\"off\" class=\"select2 form-control\" title=\"Edit oil company...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Base</label><br>
                                        <select name=\"edit_platform_base\" id=\"edit_platform_base\" autocomplete=\"off\" class=\"select2 form-control\" title=\"Edit operational base...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Platform Status</label><br>
                                        <select name=\"edit_platform_status\" id=\"edit_platform_status\" autocomplete=\"off\" class=\"select2 form-control\" title=\"Edit current platform status...\">
                                        </select>
                                    </div>
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab2\">
                                    <label>Helideck D-Value</label><br>
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"edit_platform_dValue\" id=\"edit_platform_dValue\" autocomplete=\"off\" class=\"form-control\" placeholder=\"Edit platform helidick D-value...\">
                                        <span class=\"input-group-addon\">m</span>
                                    </div>
                                    <label>Helideck T-Value</label><br>
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"edit_platform_tValue\" id=\"edit_platform_tValue\" autocomplete=\"off\" class=\"form-control\" placeholder=\"Edit platform helidick T-value...\">
                                        <span class=\"input-group-addon\">m</span>
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab3\">
                                    <div class=\"form-group\">
                                        <label>Platform Operations Start Date</label><br>
                                        <input type=\"text\" name=\"edit_platform_start_date\" id=\"edit_platform_start_date\" autocomplete=\"off\" class=\"form-control datepicker\" placeholder=\"Edit contract start date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Platform Removal Date</label><br>
                                        <input type=\"text\" name=\"edit_platform_end_date\" id=\"edit_platform_end_date\" autocomplete=\"off\" class=\"form-control datepicker\" placeholder=\"Edit contract end date...\">
                                    </div>
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab4\">
                                    <label>Nearest Base Distance</label>
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"edit_platform_nearest_base_distance\" id=\"edit_platform_nearest_base_distance\" autocomplete=\"off\" class=\"form-control\" placeholder=\"Edit platform nearest base distance...\">
                                        <span class=\"input-group-addon\">nm</span>
                                    </div>
                                    <label>Distance to Coast</label>
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"edit_platform_coast_distance\" id=\"edit_platform_coast_distance\" autocomplete=\"off\" class=\"form-control\" placeholder=\"Edit platform distance to coast...\">
                                        <span class=\"input-group-addon\">nm</span>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_platform_bunked_bed_number\">Bunked Bed Number</label>
                                        <input type=\"text\" name=\"edit_platform_bunked_bed_number\" id=\"edit_platform_bunked_bed_number\" autocomplete=\"off\" class=\"form-control\" placeholder=\"Edit platform bunked bed number...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Is refuelling option enabled for this platform ? 
                                            <input type=\"checkbox\" class=\"icheck\" name=\"edit_platform_refuelling_option\" id=\"edit_platform_refuelling_option\" autocomplete=\"off\">
                                        </label>
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"text\" name=\"hiddenId\" id=\"hiddenId\" value=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array(), "array"), "html", null, true);
        echo "\" class=\"hidden\">
                                    </div>
                                </div>
                                <ul class=\"pager wizard\">
                                    <li class=\"previous\"><a href=\"javascript:;\">Previous</a></li>
                                    <li class=\"next\"><a href=\"javascript:;\">Next</a></li>
                                    <li class=\"next finish\" style=\"display:none;\"><a href=\"javascript:;\">Save</a></li>
                                </ul>
                            </div>                            
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
    <!-- /Modal -->        
";
        
        $__internal_967003b2eca842b8bc352ae2d32a912e5c7d0fc41ca72016b97bb5979b38208e->leave($__internal_967003b2eca842b8bc352ae2d32a912e5c7d0fc41ca72016b97bb5979b38208e_prof);

    }

    // line 293
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_143d70168c3a46b93b54746c258f51b0aa21165eaff5d546808941cb1ebe262a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143d70168c3a46b93b54746c258f51b0aa21165eaff5d546808941cb1ebe262a->enter($__internal_143d70168c3a46b93b54746c258f51b0aa21165eaff5d546808941cb1ebe262a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 294
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oilindustry/js/platformDetailModule.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_143d70168c3a46b93b54746c258f51b0aa21165eaff5d546808941cb1ebe262a->leave($__internal_143d70168c3a46b93b54746c258f51b0aa21165eaff5d546808941cb1ebe262a_prof);

    }

    public function getTemplateName()
    {
        return "OilIndustryBundle:Platforms:platformDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  500 => 295,  495 => 294,  489 => 293,  465 => 275,  397 => 210,  361 => 176,  355 => 175,  346 => 172,  325 => 154,  321 => 153,  310 => 145,  306 => 143,  302 => 141,  298 => 139,  296 => 138,  283 => 128,  279 => 127,  266 => 117,  262 => 116,  253 => 109,  242 => 105,  239 => 104,  237 => 103,  233 => 102,  229 => 101,  225 => 100,  210 => 87,  204 => 85,  202 => 84,  188 => 72,  182 => 70,  180 => 69,  166 => 57,  160 => 55,  158 => 54,  144 => 42,  138 => 40,  136 => 39,  124 => 29,  118 => 28,  104 => 19,  100 => 17,  94 => 15,  92 => 14,  83 => 13,  81 => 12,  78 => 11,  72 => 10,  63 => 7,  58 => 6,  52 => 5,  39 => 3,  11 => 1,);
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

{% block title %}{{ parent() }}{{ data['name'] }}{% endblock %}

{% block css %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/core/css/css/helicoptr.css') }}\">
{% endblock %}

{% block header_content %}
    <h1>
        {% if data['name'] is defined and data['oilCompany'] is defined %}
            #{{ data['id'] }} {{ data['oilCompany'] }} - {{ data['name'] }}
        {% elseif data['name'] is defined %}
            Missing Oil Company - {{ data['name'] }}
        {% else %}
            Missing Oil Company - Missing Platform Name
        {% endif %}
    </h1>
    <div class=\"breadcrumb btn-group\">
        <button id=\"edit_platform_btn\" type=\"button\" class=\"btn btn-primary btn-flat btn-xs\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#platform_edit_modal\">
            <i class=\"fa fa-edit\"></i>
            Edit
        </button>
    </div>
{% endblock %}

{% block page_content %}
    <div class=\"row\">
        
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-light-blue\">
                    <i class=\"icon-platform\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Oil Company</span>
                    <span class=\"info-box-number\">
                        {% if data['oilCompany'] is defined %}
                            {{ data['oilCompany'] }}
                        {% endif %}
                    </span>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-blue\">
                    <i class=\"icon-helipad\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Base</span>
                    <span class=\"info-box-number\">
                        {% if data['base'] is defined %}
                            {{ data['base'].name }}
                        {% endif %}
                    </span>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-gray\">
                    <i class=\"fa fa-globe\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Country</span>
                    <span class=\"info-box-number\">
                        {% if data['country'] is defined %}
                            {{ data['country'] }}
                        {% endif %}
                    </span>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-light-blue\">
                    <i class=\"fa fa-tag\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Platform Status</span>
                    <span class=\"info-box-number\">
                        {% if data['platformStatus'] is defined %}
                            {{ data['platformStatus'] }}
                        {% endif %}
                    </span>
                </div>
            </div>
        </div>  
                    
    </div>
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"box box-solid box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\"><i class=\"icon fa fa-calendar\"></i> Platform Timing</h3>
                </div>
                <div class=\"box-body\">
                    <p><span style=\"font-weight: bold\">Operational Year : </span><span class=\"pull-right\">{{ data['startYear'] }}</span></p>
                    <p><span style=\"font-weight: bold\">Current Year : </span><span class=\"pull-right\">{{ \"now\"|date(\"Y\") }}</span></p>
                    <p><span style=\"font-weight: bold\">Removal Year : </span><span class=\"pull-right\">{{ data['removalYear'] }}</span></p>
                    {% if data['removalYear'] != \"Unknown\" and data['startYear'] != \"Unknown\" and data['removalYear'] != null and data['startYear'] != null %}
                        <div class=\"progress active\">
                            <div class=\"progress-bar progress-bar-primary progress-bar-striped\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"{{ data['removalYear']-data['startYear'] }}\" aria-valuenow=\"{{ (\"now\"|date(\"Y\"))-data['startYear'] }}\" style=\"width: {{ (((\"now\"|date(\"Y\"))-data['startYear']) / (data['removalYear']-data['startYear']) * 100)|round }}%\">
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
            <div class=\"box box-solid box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\"><i class=\"icon icon-helipad\"></i> Helideck Data</h3>
                </div>
                <div class=\"box-body\">
                    <p><span style=\"font-weight: bold\">Helideck D-Value : </span><span class=\"pull-right\">{{ data['dValue'] }}m</span></p>
                    <p><span style=\"font-weight: bold\">Helideck T-Value : </span><span class=\"pull-right\">{{ data['tValue'] }}m</span></p>
                </div>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"box box-solid box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\"><i class=\"icon fa fa-flag\"></i> Distance</h3>
                </div>
                <div class=\"box-body\">
                    <p><span style=\"font-weight: bold\">Nearest Base Distance : </span><span class=\"pull-right\">{{ data['distance']|round(2, 'common') }} nm</span></p>
                    <p><span style=\"font-weight: bold\">Coast Distance : </span><span class=\"pull-right\">{{ data['coastDistance']|round(2, 'common') }} nm</span></p>
                </div>
            </div>
            <div class=\"box box-solid box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\"><i class=\"icon fa fa-info\"></i> Refuelling and Employees</h3>
                </div>
                <div class=\"box-body\">
                    <p>
                        <span style=\"font-weight: bold\">Available Refuelling : 
                            {% if data['refuellingOption'] == \"Available\" %}
                                <i class=\"icon fa fa-check pull-right\"></i>
                            {% else %}
                                <i class=\"icon fa fa-times pull-right\"></i>
                            {% endif %}
                        </span>
                    </p>
                    <p><span style=\"font-weight: bold\">Bunked Bed Number : </span><span class=\"pull-right\">{{ data['bunkedBedNumber'] }}</span></p>
                </div>
            </div>
                <div class=\"box box-solid box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\"><i class=\"icon fa fa-map\"></i> Global Positioning Data</h3>
                </div>
                <div class=\"box-body\">
                    <p><span style=\"font-weight: bold\">Latitude : </span><span class=\"pull-right\">{{ data['gps'].lat }}</span></p>
                    <p><span style=\"font-weight: bold\">Longitude : </span><span class=\"pull-right\">{{ data['gps'].lng }}</span></p>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Localisation</h3>
                </div>
                <div class=\"box-body\">
                    <div id=\"world-map\" style=\"height: 220px\">
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <input id=\"id\" type=\"text\" style=\"display: none\" value=\"{{ data['id'] }}\">
{% endblock %}

{% block modal %}
    <!-- Modal -->
    <div class=\"modal fade\" id=\"platform_edit_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit_platform_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Edit platform data</h3>
                </div>
                <div class=\"modal-body\">
                    <div class=\"alert alert-warning alert-dismissible\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                        <h4>
                            <i class=\"icon fa fa-warning\"></i>
                            Important note !
                        </h4>
                        You don't need to fill the fields you don't wish to edit, just jump to the fields you are looking for.
                    </div>
                    <form role=\"form\" id=\"edit_platform_form\" method=\"post\">
                        <div id=\"myModalFormContent\">
                            
                            <div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li><a href=\"#tab1\" data-toggle=\"tab\">1. Main Data</a></li>
                                    <li><a href=\"#tab2\" data-toggle=\"tab\">2. Helideck Data</a></li>
                                    <li><a href=\"#tab3\" data-toggle=\"tab\">3. Timing</a></li>
                                    <li><a href=\"#tab4\" data-toggle=\"tab\">4. Performance</a></li>
                                </ul>
                            </div>
                            <div class=\"progress active\">
                                <div class=\"progress-bar progress-bar-striped\" id=\"bar\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
                                </div>
                            </div>
                            <input id=\"hiddenId\" type=\"text\" value=\"{{ data['id'] }}\" style=\"display: none\"/>
                            
                            <div class=\"tab-content\">
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab1\">
                                    <div class=\"form-group\">
                                        <label>Oil Company</label><br>
                                        <select name=\"edit_platform_oil_company\" id=\"edit_platform_oil_company\" autocomplete=\"off\" class=\"select2 form-control\" title=\"Edit oil company...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Base</label><br>
                                        <select name=\"edit_platform_base\" id=\"edit_platform_base\" autocomplete=\"off\" class=\"select2 form-control\" title=\"Edit operational base...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Platform Status</label><br>
                                        <select name=\"edit_platform_status\" id=\"edit_platform_status\" autocomplete=\"off\" class=\"select2 form-control\" title=\"Edit current platform status...\">
                                        </select>
                                    </div>
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab2\">
                                    <label>Helideck D-Value</label><br>
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"edit_platform_dValue\" id=\"edit_platform_dValue\" autocomplete=\"off\" class=\"form-control\" placeholder=\"Edit platform helidick D-value...\">
                                        <span class=\"input-group-addon\">m</span>
                                    </div>
                                    <label>Helideck T-Value</label><br>
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"edit_platform_tValue\" id=\"edit_platform_tValue\" autocomplete=\"off\" class=\"form-control\" placeholder=\"Edit platform helidick T-value...\">
                                        <span class=\"input-group-addon\">m</span>
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab3\">
                                    <div class=\"form-group\">
                                        <label>Platform Operations Start Date</label><br>
                                        <input type=\"text\" name=\"edit_platform_start_date\" id=\"edit_platform_start_date\" autocomplete=\"off\" class=\"form-control datepicker\" placeholder=\"Edit contract start date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Platform Removal Date</label><br>
                                        <input type=\"text\" name=\"edit_platform_end_date\" id=\"edit_platform_end_date\" autocomplete=\"off\" class=\"form-control datepicker\" placeholder=\"Edit contract end date...\">
                                    </div>
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab4\">
                                    <label>Nearest Base Distance</label>
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"edit_platform_nearest_base_distance\" id=\"edit_platform_nearest_base_distance\" autocomplete=\"off\" class=\"form-control\" placeholder=\"Edit platform nearest base distance...\">
                                        <span class=\"input-group-addon\">nm</span>
                                    </div>
                                    <label>Distance to Coast</label>
                                    <div class=\"input-group\">
                                        <input type=\"text\" name=\"edit_platform_coast_distance\" id=\"edit_platform_coast_distance\" autocomplete=\"off\" class=\"form-control\" placeholder=\"Edit platform distance to coast...\">
                                        <span class=\"input-group-addon\">nm</span>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_platform_bunked_bed_number\">Bunked Bed Number</label>
                                        <input type=\"text\" name=\"edit_platform_bunked_bed_number\" id=\"edit_platform_bunked_bed_number\" autocomplete=\"off\" class=\"form-control\" placeholder=\"Edit platform bunked bed number...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Is refuelling option enabled for this platform ? 
                                            <input type=\"checkbox\" class=\"icheck\" name=\"edit_platform_refuelling_option\" id=\"edit_platform_refuelling_option\" autocomplete=\"off\">
                                        </label>
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"text\" name=\"hiddenId\" id=\"hiddenId\" value=\"{{ data['id'] }}\" class=\"hidden\">
                                    </div>
                                </div>
                                <ul class=\"pager wizard\">
                                    <li class=\"previous\"><a href=\"javascript:;\">Previous</a></li>
                                    <li class=\"next\"><a href=\"javascript:;\">Next</a></li>
                                    <li class=\"next finish\" style=\"display:none;\"><a href=\"javascript:;\">Save</a></li>
                                </ul>
                            </div>                            
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
    <!-- /Modal -->        
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/oilindustry/js/platformDetailModule.js') }}\"></script>
{% endblock %}", "OilIndustryBundle:Platforms:platformDetail.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/OilIndustryBundle/Resources/views/Platforms/platformDetail.html.twig");
    }
}
