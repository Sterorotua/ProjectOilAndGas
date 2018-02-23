<?php

/* ContractBundle::contracts.html.twig */
class __TwigTemplate_8af237e73ebeb3d13db94f85d1d14221689d6eeb75fc072b71b620d20459ef1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "ContractBundle::contracts.html.twig", 1);
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
        echo "Contracts";
    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Contracts</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_contracts");
        echo "\"> Contracts</a></li>
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
                    <h3 class=\"box-title\">Find my contract</h3>
                    <button id=\"contract_add_btn\" class=\"btn btn-success pull-right\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#contract_add_modal\" onClick=\"add_contract(Routing.generate('_contract_initializeForm'))\">
                        <i class=\"fa fa-plus-circle\"></i>
                        <span>New contract</span>
                    </button>
                </div>
                
                <div class=\"box-body\">
                    <form role=\"form\" id=\"contractForm\" method=\"post\">
                        <div class=\"form-group col-md-2\">
                            <label for=\"contract_operator\">Operator</label><br>
                            <select id=\"contract_operator\" name=\"contract_operator[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                ";
        // line 32
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "operators", array(), "array", true, true)) {
            // line 33
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "operators", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["operator"]) {
                // line 34
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["operator"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["operator"], "operatorGroupName", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['operator'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                                ";
        }
        // line 37
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label for=\"contract_oilCompany\">Oil Company</label><br>
                            <select id=\"contract_oilCompany\" name=\"contract_oil_company[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                ";
        // line 43
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "oilCompanies", array(), "array", true, true)) {
            // line 44
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "oilCompanies", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["oilCompany"]) {
                // line 45
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
            // line 47
            echo "                                ";
        }
        // line 48
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label for=\"contract_helicopter\">Helicopter Type</label><br>
                            <select id=\"contract_helicopter\" name=\"contract_helicopter[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                ";
        // line 54
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "helicopterClasses", array(), "array", true, true)) {
            // line 55
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "helicopterClasses", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["helicopterClass"]) {
                // line 56
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["helicopterClass"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["helicopterClass"], "helicopterClassName", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['helicopterClass'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                                ";
        }
        // line 59
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label>Country</label><br>
                            <select id=\"contract_country\" name=\"contract_country[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                ";
        // line 65
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "countries", array(), "array", true, true)) {
            // line 66
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "countries", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 67
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
            // line 69
            echo "                                ";
        }
        // line 70
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label>Base</label><br>
                            <select id=\"contract_base\" name=\"contract_base[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                ";
        // line 76
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "bases", array(), "array", true, true)) {
            // line 77
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "bases", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["base"]) {
                // line 78
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
            // line 80
            echo "                                ";
        }
        // line 81
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label>Status</label><br>
                            <select id=\"contract_status\" name=\"contract_status[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                ";
        // line 87
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "projectStatus", array(), "array", true, true)) {
            // line 88
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "projectStatus", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 89
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
            // line 91
            echo "                                ";
        }
        // line 92
        echo "                            </select>
                        </div>
                    </form>
                </div>
                <div class=\"box-footer with-border\">
                    <button type=\"submit\" class=\"btn btn-primary pull-right\" data-loading-text=\"<i class='fa fa-spinner fa-spin '></i> Loading...\" id=\"contract_filter_btn\">Filter</button>
                </div>
            </div>
        </div>
        <!-- /Div form -->              

        <!-- Div map result -->               
        <div class=\"col-md-12\" id=\"contract_map\">
            <div class=\"nav-tabs-custom\" id=\"mappedBox\">
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
                        <table id=\"contract_result_table\" class=\"table table-striped table-bordered dt-responsive hover\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                                <tr>
                                    <th>Area</th>
                                    <th>Country</th>
                                    <th>Contract Name</th>
                                    <th>Oil Company</th>
                                    <th>Operator</th>
                                    <th>Base</th>
                                    <th>Type of contract</th>
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

    // line 146
    public function block_modal($context, array $blocks = array())
    {
        // line 147
        echo "    <!-- Modal -->
    <div class=\"modal fade\" id=\"contract_add_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"add_contract_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Add new contract</h3>
                </div>
                <div class=\"modal-body\">
                    <form role=\"form\" id=\"add_contract_form\" method=\"post\">
                        <div id=\"myModalFormContent\">
                            
                            <div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li><a href=\"#tab1\" data-toggle=\"tab\">1. Main Data</a></li>
                                    <li><a href=\"#tab2\" data-toggle=\"tab\">2. Helicopters</a></li>
                                    <li><a href=\"#tab3\" data-toggle=\"tab\">3. Activity</a></li>
                                    <li><a href=\"#tab4\" data-toggle=\"tab\">4. Description</a></li>
                                </ul>
                            </div>
                            <div class=\"progress active\">
                                <div class=\"progress-bar progress-bar-striped\" id=\"bar\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
                                </div>
                            </div>
                            
                            <div class=\"tab-content\">
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab1\">
                                    <div class=\"form-group has-error\">
                                        <label>Operator</label><br>
                                        <select name=\"add_contract_operator\" id=\"add_contract_operator\" class=\"select2 form-control\" title=\"Choose an operator...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group has-error\">
                                        <label>Oil Company</label><br>
                                        <select name=\"add_contract_oil_company\" id=\"add_contract_oil_company\" class=\"select2 form-control\" title=\"Choose an oil company...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group has-error\">
                                        <label>Country</label><br>
                                        <select name=\"add_contract_country[]\" id=\"add_contract_country\" class=\"select2 form-control\" title=\"Choose a country...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group has-error\">
                                        <label>Base</label><br>
                                        <select name=\"add_contract_base\" id=\"add_contract_base\" class=\"select2 form-control\" title=\"Choose an operational base...\" required>
                                        </select>
                                    </div>
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab2\">
                                    <div class=\"form-group\">
                                        <label>Helicopter's Manufacturer</label><br>
                                        <select name=\"add_contract_helicopter_constructor[]\" id=\"add_contract_helicopter_constructor\" class=\"select2 form-control\" title=\"Choose one or more helicopter's manufacturer...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Category of Helicopter</label><br>
                                        <select name=\"add_contract_helicopter_category[]\" id=\"add_contract_helicopter_category\" class=\"select2 form-control\" title=\"Choose one or more category of helicopter...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Type of Helicopter</label><br>
                                        <select name=\"add_contract_helicopter_type[]\" id=\"add_contract_helicopter_type\" class=\"select2 form-control\" title=\"Choose one or more type of helicopter...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Quantity of Helicopters</label><br>
                                        <div id=\"add_contract_helicopter_quantity\">

                                        </div>
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab3\">
                                    <div class=\"form-group has-error\">
                                        <label>Contract Status</label><br>
                                        <select name=\"add_contract_contract_status\" id=\"add_contract_contract_status\" class=\"select2 form-control\" title=\"Choose the current contract status...\">
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Contract Start Date</label><br>
                                        <input type=\"text\" name=\"add_contract_start_date\" id=\"add_contract_start_date\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                    <label>Contract End Date</label><br>
                                        <input type=\"text\" name=\"add_contract_end_date\" id=\"add_contract_end_date\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Renewal Options</label><br>
                                        <input type=\"text\" name=\"add_contract_options\" id=\"add_contract_options\" class=\"form-control\" placeholder=\"Enter options description (example : '3+1')\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Platforms</label><br>
                                        <select name=\"add_contract_platforms[]\" id=\"add_contract_platforms\" class=\"select2 form-control\" multiple title=\"Choose one or more platforms...\">
                                        </select>
                                    </div>
                                    <div class=\"form-group\" id=\"add_contract_mission\">
                                        <label>Mission</label>
                                        <input type=\"hidden\" id=\"add_contract_mission_order\" name=\"add_contract_mission_order\">
                                        <ol id=\"platforms_sortable\">

                                        </ol>
                                    </div>
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab4\">
                                    <div class=\"form-group has-error\">
                                        <label for=\"add_contract_summary\">Two-lines summary</label>
                                        <textarea id=\"add_contract_summary\" name=\"add_contract_summary\" type=\"text\" row=\"3\" class=\"form-control\" placeholder=\"Enter a short summary for the contract...\" style=\"resize: none\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"add_contract_comment\">Comment</label>
                                        <textarea id=\"add_contract_comment\" name=\"add_contract_comment\" type=\"text\" row=\"1\" class=\"form-control\" placeholder=\"Enter a comment for the contract...\" style=\"resize: none; height: 200px\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"add_contract_confidential_link\">Confidential Link</label>
                                        <input type=\"text\" name=\"add_contract_confidential_link\" id=\"add_contract_confidential_link\" class=\"form-control\" placeholder=\"Paste link pointing to the hub...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"add_contract_external_link\">External Link</label>
                                        <input type=\"text\" name=\"add_contract_external_link\" id=\"add_contract_external_link\" class=\"form-control\" placeholder=\"Paste link pointing to an external source...\">
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

    // line 286
    public function block_javascripts($context, array $blocks = array())
    {
        // line 287
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/contract/js/contractModule.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ContractBundle::contracts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 288,  449 => 287,  446 => 286,  305 => 147,  302 => 146,  246 => 92,  243 => 91,  232 => 89,  227 => 88,  225 => 87,  217 => 81,  214 => 80,  203 => 78,  198 => 77,  196 => 76,  188 => 70,  185 => 69,  174 => 67,  169 => 66,  167 => 65,  159 => 59,  156 => 58,  145 => 56,  140 => 55,  138 => 54,  130 => 48,  127 => 47,  116 => 45,  111 => 44,  109 => 43,  101 => 37,  98 => 36,  87 => 34,  82 => 33,  80 => 32,  60 => 14,  57 => 13,  50 => 9,  46 => 8,  42 => 6,  39 => 5,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ContractBundle::contracts.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/ContractBundle/Resources/views/contracts.html.twig");
    }
}
