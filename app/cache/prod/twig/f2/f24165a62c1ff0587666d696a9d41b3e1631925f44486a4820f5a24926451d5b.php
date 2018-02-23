<?php

/* ContractBundle::projects.html.twig */
class __TwigTemplate_834850072ef7cfb57f064ae6a504e782e39517180eef5fac6e605527950fd975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "ContractBundle::projects.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "Projects";
    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Projects</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_projects");
        echo "\"> Projects</a></li>
    </ol>
";
    }

    // line 13
    public function block_page_content($context, array $blocks = array())
    {
        // line 14
        echo "    
    <div class=\"row\">  
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Find specific project</h3>
                    <button id=\"project_add_btn\" class=\"btn btn-success pull-right\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#project_add_modal\" onClick=\"add_project(Routing.generate('_project_initializeForm'));\">
                        <i class=\"fa fa-plus-circle\"></i>
                        <span>New project</span>
                    </button>
                </div>
                
                <div class=\"box-body\">
                    <form role=\"form\" id=\"projectForm\" method=\"post\">

                        <div class=\"form-group col-md-2\">
                            <label for=\"project_oilCompany\">Oil Company</label><br>
                            <select id=\"project_oilCompany\" name=\"project_oil_company[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                ";
        // line 33
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "oilCompanies", array(), "array", true, true)) {
            // line 34
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "oilCompanies", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["oilCompany"]) {
                // line 35
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oilCompany"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["oilCompany"], "oilCompanyName", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oilCompany'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                                ";
        }
        // line 38
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label>Country</label><br>
                            <select id=\"project_country\" name=\"project_country[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                ";
        // line 44
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "countries", array(), "array", true, true)) {
            // line 45
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "countries", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 46
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "countryName", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                                ";
        }
        // line 49
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label>Base</label><br>
                            <select id=\"project_base\" name=\"project_base[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                ";
        // line 55
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "bases", array(), "array", true, true)) {
            // line 56
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "bases", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["base"]) {
                // line 57
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["base"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["base"], "baseName", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['base'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                                ";
        }
        // line 60
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label>Status</label><br>
                            <select id=\"project_status\" name=\"project_status[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                ";
        // line 66
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "projectStatus", array(), "array", true, true)) {
            // line 67
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "projectStatus", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 68
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "projectStatusName", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                                ";
        }
        // line 71
        echo "                            </select>
                        </div>
                        <div class=\"form-group col-md-2\">
                            <label>Project Importance</label><br>
                            <select id=\"project_level\" name=\"project_level[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                <option value=\"0\">Very Low</option>
                                <option value=\"1\">Low</option>
                                <option value=\"2\">Medium</option>
                                <option value=\"3\">High</option>
                                <option value=\"4\">Very High</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class=\"box-footer with-border\">
                    <button id=\"project_filter_btn\" type=\"submit\" class=\"btn btn-primary pull-right\" data-loading-text=\"<i class='fa fa-spinner fa-spin '></i> Loading...\">Filter</button>
                </div>

            </div>
        </div>
        <!-- /Div form -->              

        <!-- Div map result -->               
        <div class=\"col-md-12\" id=\"project_map\">           
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#map\" aria-controls=\"mape\" role=\"tab\" data-toggle=\"tab\">Map</a></li>
                    <li role=\"presentation\"><a href=\"#table\" aria-controls=\"table\" role=\"tab\" data-toggle=\"tab\">Table</a></li>
                </ul>
                <!-- Tab panes -->
                <div class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"map\">
                        <div id=\"world-map\" style=\"height: 600px; width: 100%\">
                            
                        </div>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"table\">
                        <table id=\"project_result_table\" class=\"table table-striped table-bordered dt-responsive hover\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                                <tr>
                                    <th>Area</th>
                                    <th>Country</th>
                                    <th>Project Name</th>
                                    <th>Oil Company</th>
                                    <th>Base</th>
                                    <th>Type of project</th>
                                    <th>Timing</th>
                                    <th>Summary</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Div map result -->
    </div>   
                
";
    }

    // line 135
    public function block_modal($context, array $blocks = array())
    {
        // line 136
        echo "    <!-- Modal -->
    <div class=\"modal fade\" id=\"project_add_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"add_tender_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Add new project</h3>
                </div>
                <div class=\"modal-body\">
                    
                    <form role=\"form\" id=\"add_project_form\" method=\"post\">
                        <div id=\"myModalFormContent\">
                            
                            <div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li><a href=\"#tab1\" data-toggle=\"tab\">1. Localisation</a></li>
                                    <li><a href=\"#tab2\" data-toggle=\"tab\">2. Main Data</a></li>
                                    <li><a href=\"#tab3\" data-toggle=\"tab\">3. Helicopters</a></li>
                                    <li><a href=\"#tab4\" data-toggle=\"tab\">4. Timing</a></li>
                                    <li><a href=\"#tab5\" data-toggle=\"tab\">5. Description</a></li>
                                </ul>
                            </div>
                            <div class=\"progress active\">
                                <div class=\"progress-bar progress-bar-striped\" id=\"bar\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
                                </div>
                            </div>
                            
                            <div class=\"tab-content\">
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab1\">
                                
                                    <div class=\"form-group has-error\" id=\"div-area\">
                                        <label>First where is your project ?</label><br>
                                        <p>Enter latitude and longitude</p>
                                        <p style=\"font-style: italic\">Please enter the coordinates in DECIMAL format. In order to convert DMS (Degrees, Minutes, Seconds) coordinates, go to the following website : http://www.onlineconversion.com/map_decimaldegrees.htm</p>
                                        <input id=\"add_project_latitude\" name=\"add_project_latitude\" type=\"text\" class=\"form-control\" placeholder=\"Enter area latitude...\">
                                        <input id=\"add_project_longitude\" name=\"add_project_longitude\" type=\"text\" class=\"form-control\" placeholder=\"Enter area longitude...\"><br>
                                        <p>Or put a point on the map</p>

                                    </div>
                                    <div id=\"add_project_area_map\" style=\"height: 300px;\">

                                    </div>
                                    
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab2\">
                                    <div class=\"form-group has-error\">
                                        <label>Project Name</label><br>
                                        <input type=\"text\" name=\"add_project_name\" id=\"add_project_name\" class=\"select2 form-control\" placeholder=\"Enter project name...\" required>
                                    </div>
                                    <div class=\"form-group has-error\">
                                        <label>Oil Company</label><br>
                                        <select name=\"add_project_oil_company\" id=\"add_project_oil_company\" class=\"select2 form-control\" title=\"Choose an oil company...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group has-error\">
                                        <label>Country</label><br>
                                        <select name=\"add_project_country[]\" id=\"add_project_country\" class=\"select2 form-control\" title=\"Choose a country...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group has-error\">
                                        <label>Base</label><br>
                                        <select name=\"add_project_base\" id=\"add_project_base\" class=\"select2 form-control\" title=\"Choose an operational base...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Project Importance</label><br>
                                        <input type=\"range\" class=\"slider\" name=\"add_project_level\" value=\"0\" step=\"0\" min=\"0\" max=\"4\">
                                        <h4 id=\"rangeText\" class=\"text-center\"></h4>
                                    </div>
                                </div>

                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab3\">
                                    <div class=\"form-group\">
                                        <label>Category of Helicopter</label><br>
                                        <select name=\"add_project_helicopter_category[]\" id=\"add_project_helicopter_category\" class=\"select2 form-control\" title=\"Choose one or more category of helicopter...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Quantity of Helicopters</label><br>
                                        <div id=\"add_project_helicopter_quantity\">

                                        </div>
                                    </div>
                                </div>

                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab4\">
                                    <div class=\"form-group has-error\">
                                        <label>Project Status</label><br>
                                        <select name=\"add_project_status\" id=\"add_project_status\" class=\"select2 form-control\" title=\"Choose the current project status...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Geophysics Date</label><br>
                                        <input type=\"text\" name=\"add_project_geophysics_date\" id=\"add_project_geophysics_date\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Licensing Date</label><br>
                                        <input type=\"text\" name=\"add_project_licensing_date\" id=\"add_project_licensing_date\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Drilling Date</label><br>
                                        <input type=\"text\" name=\"add_project_drilling_date\" id=\"add_project_drilling_date\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Discovery Date</label><br>
                                        <input type=\"text\" name=\"add_project_discovery_date\" id=\"add_project_discovery_date\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Final Investment Decision Date</label><br>
                                        <input type=\"text\" name=\"add_project_fid_date\" id=\"add_project_fid_date\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Development Date</label><br>
                                        <input type=\"text\" name=\"add_project_development_date\" id=\"add_project_development_date\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Operational Date</label><br>
                                        <input type=\"text\" name=\"add_project_operational_date\" id=\"add_project_operational_date\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                </div>

                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab5\">
                                    <div class=\"form-group has-error\">
                                        <label for=\"add_project_summary\">Two-lines summary</label>
                                        <textarea id=\"add_project_summary\" name=\"add_project_summary\" type=\"text\" row=\"3\" class=\"form-control\" placeholder=\"Enter a short summary for the project...\" style=\"resize: none\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"add_project_comment\">Comment</label>
                                        <textarea id=\"add_project_comment\" name=\"add_project_comment\" type=\"text\" row=\"1\" class=\"form-control\" placeholder=\"Enter a comment for the project...\" style=\"resize: none; height: 200px\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"add_project_confidential_link\">Confidential Link</label>
                                        <input type=\"text\" name=\"add_project_confidential_link\" id=\"add_project_confidential_link\" class=\"form-control\" placeholder=\"Paste link pointing to the hub...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"add_project_external_link\">External Link</label>
                                        <input type=\"text\" name=\"add_project_external_link\" id=\"add_project_external_link\" class=\"form-control\" placeholder=\"Paste link pointing to an external source...\">
                                    </div>
                                </div>
                            </div>
                            <ul class=\"pager wizard\">
                                <li class=\"previous\"><a href=\"javascript:;\">Previous</a></li>
                                <li class=\"next\"><a href=\"javascript:;\">Next</a></li>
                                <li class=\"next finish\" style=\"display:none;\"><a href=\"javascript:;\">Save</a></li>
                            </ul>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/contract/js/projectModule.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ContractBundle::projects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 295,  420 => 294,  417 => 293,  258 => 136,  255 => 135,  189 => 71,  186 => 70,  175 => 68,  170 => 67,  168 => 66,  160 => 60,  157 => 59,  146 => 57,  141 => 56,  139 => 55,  131 => 49,  128 => 48,  117 => 46,  112 => 45,  110 => 44,  102 => 38,  99 => 37,  88 => 35,  83 => 34,  81 => 33,  60 => 14,  57 => 13,  50 => 9,  46 => 8,  42 => 6,  39 => 5,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ContractBundle::projects.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/ContractBundle/Resources/views/projects.html.twig");
    }
}
