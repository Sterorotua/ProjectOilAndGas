<?php

/* ContractBundle::contracts.html.twig */
class __TwigTemplate_4f5ba276a983320e47dbff4c4ec490c3318c257e02dbf3fda98b9ca6a277d397 extends Twig_Template
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
        $__internal_9fc350366bb3b33ac7f605f0a38f8fe6a5ed49c438990eeb5df12f6e0df2c665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc350366bb3b33ac7f605f0a38f8fe6a5ed49c438990eeb5df12f6e0df2c665->enter($__internal_9fc350366bb3b33ac7f605f0a38f8fe6a5ed49c438990eeb5df12f6e0df2c665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContractBundle::contracts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fc350366bb3b33ac7f605f0a38f8fe6a5ed49c438990eeb5df12f6e0df2c665->leave($__internal_9fc350366bb3b33ac7f605f0a38f8fe6a5ed49c438990eeb5df12f6e0df2c665_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f8843e5805e0f1b986846209ef567b595ac973bf53224c76ecea5cf8d7e8c1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f8843e5805e0f1b986846209ef567b595ac973bf53224c76ecea5cf8d7e8c1f->enter($__internal_2f8843e5805e0f1b986846209ef567b595ac973bf53224c76ecea5cf8d7e8c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Contracts";
        
        $__internal_2f8843e5805e0f1b986846209ef567b595ac973bf53224c76ecea5cf8d7e8c1f->leave($__internal_2f8843e5805e0f1b986846209ef567b595ac973bf53224c76ecea5cf8d7e8c1f_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_90d30d4242491000c2c89ea649ef8767a22e1750391077d400b72b7ea3143e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d30d4242491000c2c89ea649ef8767a22e1750391077d400b72b7ea3143e04->enter($__internal_90d30d4242491000c2c89ea649ef8767a22e1750391077d400b72b7ea3143e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

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
        
        $__internal_90d30d4242491000c2c89ea649ef8767a22e1750391077d400b72b7ea3143e04->leave($__internal_90d30d4242491000c2c89ea649ef8767a22e1750391077d400b72b7ea3143e04_prof);

    }

    // line 13
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_75bf0abd323b7bce5d3b50d0272e583babf676ccb877875f74365b5119e709ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75bf0abd323b7bce5d3b50d0272e583babf676ccb877875f74365b5119e709ef->enter($__internal_75bf0abd323b7bce5d3b50d0272e583babf676ccb877875f74365b5119e709ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "operators", array(), "array"));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "oilCompanies", array(), "array"));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "helicopterClasses", array(), "array"));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "countries", array(), "array"));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "bases", array(), "array"));
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "projectStatus", array(), "array"));
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
        
        $__internal_75bf0abd323b7bce5d3b50d0272e583babf676ccb877875f74365b5119e709ef->leave($__internal_75bf0abd323b7bce5d3b50d0272e583babf676ccb877875f74365b5119e709ef_prof);

    }

    // line 146
    public function block_modal($context, array $blocks = array())
    {
        $__internal_ff966371ea5580a0f4f72281c016f7a01948689d83ad7792176bbee35890cbfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff966371ea5580a0f4f72281c016f7a01948689d83ad7792176bbee35890cbfc->enter($__internal_ff966371ea5580a0f4f72281c016f7a01948689d83ad7792176bbee35890cbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

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
        
        $__internal_ff966371ea5580a0f4f72281c016f7a01948689d83ad7792176bbee35890cbfc->leave($__internal_ff966371ea5580a0f4f72281c016f7a01948689d83ad7792176bbee35890cbfc_prof);

    }

    // line 286
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17f8e3cbb99b0dca60456e027ed018b9b71013c5d00a4fc3fa2735a0a22c6478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f8e3cbb99b0dca60456e027ed018b9b71013c5d00a4fc3fa2735a0a22c6478->enter($__internal_17f8e3cbb99b0dca60456e027ed018b9b71013c5d00a4fc3fa2735a0a22c6478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 287
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/contract/js/contractModule.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_17f8e3cbb99b0dca60456e027ed018b9b71013c5d00a4fc3fa2735a0a22c6478->leave($__internal_17f8e3cbb99b0dca60456e027ed018b9b71013c5d00a4fc3fa2735a0a22c6478_prof);

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
        return array (  487 => 288,  482 => 287,  476 => 286,  332 => 147,  326 => 146,  267 => 92,  264 => 91,  253 => 89,  248 => 88,  246 => 87,  238 => 81,  235 => 80,  224 => 78,  219 => 77,  217 => 76,  209 => 70,  206 => 69,  195 => 67,  190 => 66,  188 => 65,  180 => 59,  177 => 58,  166 => 56,  161 => 55,  159 => 54,  151 => 48,  148 => 47,  137 => 45,  132 => 44,  130 => 43,  122 => 37,  119 => 36,  108 => 34,  103 => 33,  101 => 32,  81 => 14,  75 => 13,  65 => 9,  61 => 8,  57 => 6,  51 => 5,  38 => 3,  11 => 1,);
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

{% block title %}{{ parent() }}Contracts{% endblock %}

{% block header_content %}
    <h1>Contracts</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('_home') }}\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"{{ path('_contracts') }}\"> Contracts</a></li>
    </ol>
{% endblock %}

{% block page_content %}
    
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
                                {% if data['operators'] is defined %}
                                    {% for operator in data['operators'] %}
                                        <option value=\"{{ operator.id }}\">{{ operator.operatorGroupName }}</option>
                                    {% endfor %}
                                {% endif %}
                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label for=\"contract_oilCompany\">Oil Company</label><br>
                            <select id=\"contract_oilCompany\" name=\"contract_oil_company[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                {% if data['oilCompanies'] is defined %}
                                    {% for oilCompany in data['oilCompanies'] %}
                                        <option value=\"{{ oilCompany.id }}\">{{ oilCompany.oilCompanyName }}</option>
                                    {% endfor %}
                                {% endif %}
                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label for=\"contract_helicopter\">Helicopter Type</label><br>
                            <select id=\"contract_helicopter\" name=\"contract_helicopter[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                {% if data['helicopterClasses'] is defined %}
                                    {% for helicopterClass in data['helicopterClasses'] %}
                                        <option value=\"{{ helicopterClass.id }}\">{{ helicopterClass.helicopterClassName }}</option>
                                    {% endfor %}
                                {% endif %}
                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label>Country</label><br>
                            <select id=\"contract_country\" name=\"contract_country[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                {% if data['countries'] is defined %}
                                    {% for country in data['countries'] %}
                                        <option value=\"{{ country.id }}\">{{ country.countryName }}</option>
                                    {% endfor %}
                                {% endif %}
                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label>Base</label><br>
                            <select id=\"contract_base\" name=\"contract_base[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                {% if data['bases'] is defined %}
                                    {% for base in data['bases'] %}
                                        <option value=\"{{ base.id }}\">{{ base.baseName }}</option>
                                    {% endfor %}
                                {% endif %}
                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label>Status</label><br>
                            <select id=\"contract_status\" name=\"contract_status[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                {% if data['projectStatus'] is defined %}
                                    {% for status in data['projectStatus'] %}
                                        <option value=\"{{ status.id }}\">{{ status.projectStatusName }}</option>
                                    {% endfor %}
                                {% endif %}
                            </select>
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
                
{% endblock %}

{% block modal %}
    <!-- Modal -->
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
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/contract/js/contractModule.js') }}\"></script>
{% endblock %}", "ContractBundle::contracts.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/ContractBundle/Resources/views/contracts.html.twig");
    }
}
