<?php

/* OilIndustryBundle:Platforms:platformDetail.html.twig */
class __TwigTemplate_5bdc35ae852d99f4646e99e3ce1d604b1c51a6b8ad9e1935502e0a4bb2ac0a2b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name", array(), "array"), "html", null, true);
    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/css/helicoptr.css"), "html", null, true);
        echo "\">
";
    }

    // line 10
    public function block_header_content($context, array $blocks = array())
    {
        // line 11
        echo "    <h1>
        ";
        // line 12
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name", array(), "array", true, true) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "oilCompany", array(), "array", true, true))) {
            // line 13
            echo "            #";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array(), "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "oilCompany", array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name", array(), "array"), "html", null, true);
            echo "
        ";
        } elseif ($this->getAttribute(        // line 14
(isset($context["data"]) ? $context["data"] : null), "name", array(), "array", true, true)) {
            // line 15
            echo "            Missing Oil Company - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "name", array(), "array"), "html", null, true);
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
    }

    // line 28
    public function block_page_content($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "oilCompany", array(), "array"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "base", array(), "array"), "name", array()), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "platformStatus", array(), "array"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "startYear", array(), "array"), "html", null, true);
        echo "</span></p>
                    <p><span style=\"font-weight: bold\">Current Year : </span><span class=\"pull-right\">";
        // line 101
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</span></p>
                    <p><span style=\"font-weight: bold\">Removal Year : </span><span class=\"pull-right\">";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "removalYear", array(), "array"), "html", null, true);
        echo "</span></p>
                    ";
        // line 103
        if ((((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "removalYear", array(), "array") != "Unknown") && ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "startYear", array(), "array") != "Unknown")) && ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "removalYear", array(), "array") != null)) && ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "startYear", array(), "array") != null))) {
            // line 104
            echo "                        <div class=\"progress active\">
                            <div class=\"progress-bar progress-bar-primary progress-bar-striped\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"";
            // line 105
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "removalYear", array(), "array") - $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "startYear", array(), "array")), "html", null, true);
            echo "\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "startYear", array(), "array")), "html", null, true);
            echo "\" style=\"width: ";
            echo twig_escape_filter($this->env, twig_round((((twig_date_format_filter($this->env, "now", "Y") - $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "startYear", array(), "array")) / ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "removalYear", array(), "array") - $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "startYear", array(), "array"))) * 100)), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "dValue", array(), "array"), "html", null, true);
        echo "m</span></p>
                    <p><span style=\"font-weight: bold\">Helideck T-Value : </span><span class=\"pull-right\">";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tValue", array(), "array"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "distance", array(), "array"), 2, "common"), "html", null, true);
        echo " nm</span></p>
                    <p><span style=\"font-weight: bold\">Coast Distance : </span><span class=\"pull-right\">";
        // line 128
        echo twig_escape_filter($this->env, twig_round($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "coastDistance", array(), "array"), 2, "common"), "html", null, true);
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
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "refuellingOption", array(), "array") == "Available")) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "bunkedBedNumber", array(), "array"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "gps", array(), "array"), "lat", array()), "html", null, true);
        echo "</span></p>
                    <p><span style=\"font-weight: bold\">Longitude : </span><span class=\"pull-right\">";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "gps", array(), "array"), "lng", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array(), "array"), "html", null, true);
        echo "\">
";
    }

    // line 175
    public function block_modal($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array(), "array"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array(), "array"), "html", null, true);
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
    }

    // line 293
    public function block_javascripts($context, array $blocks = array())
    {
        // line 294
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/oilindustry/js/platformDetailModule.js"), "html", null, true);
        echo "\"></script>
";
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
        return array (  461 => 295,  456 => 294,  453 => 293,  432 => 275,  364 => 210,  328 => 176,  325 => 175,  319 => 172,  298 => 154,  294 => 153,  283 => 145,  279 => 143,  275 => 141,  271 => 139,  269 => 138,  256 => 128,  252 => 127,  239 => 117,  235 => 116,  226 => 109,  215 => 105,  212 => 104,  210 => 103,  206 => 102,  202 => 101,  198 => 100,  183 => 87,  177 => 85,  175 => 84,  161 => 72,  155 => 70,  153 => 69,  139 => 57,  133 => 55,  131 => 54,  117 => 42,  111 => 40,  109 => 39,  97 => 29,  94 => 28,  83 => 19,  79 => 17,  73 => 15,  71 => 14,  62 => 13,  60 => 12,  57 => 11,  54 => 10,  48 => 7,  43 => 6,  40 => 5,  33 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OilIndustryBundle:Platforms:platformDetail.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/OilIndustryBundle/Resources/views/Platforms/platformDetail.html.twig");
    }
}
