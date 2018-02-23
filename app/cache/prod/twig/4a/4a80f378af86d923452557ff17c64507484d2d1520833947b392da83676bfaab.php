<?php

/* ContractBundle::tenders.html.twig */
class __TwigTemplate_879db4a11b4c1c1ad2e8b935354bb0ee3a857d65334525c4b973aaa469addb01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "ContractBundle::tenders.html.twig", 1);
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
        $__internal_f227ca902808762a25afef9db9e60d28a997b8f80abfae3478bdd2c74ad96e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f227ca902808762a25afef9db9e60d28a997b8f80abfae3478bdd2c74ad96e20->enter($__internal_f227ca902808762a25afef9db9e60d28a997b8f80abfae3478bdd2c74ad96e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContractBundle::tenders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f227ca902808762a25afef9db9e60d28a997b8f80abfae3478bdd2c74ad96e20->leave($__internal_f227ca902808762a25afef9db9e60d28a997b8f80abfae3478bdd2c74ad96e20_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7b94eda6d0a7641972c3f90b8e9593d891e2bd3b2401026ef08e50b40c93c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b94eda6d0a7641972c3f90b8e9593d891e2bd3b2401026ef08e50b40c93c17->enter($__internal_a7b94eda6d0a7641972c3f90b8e9593d891e2bd3b2401026ef08e50b40c93c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo "Tenders";
        
        $__internal_a7b94eda6d0a7641972c3f90b8e9593d891e2bd3b2401026ef08e50b40c93c17->leave($__internal_a7b94eda6d0a7641972c3f90b8e9593d891e2bd3b2401026ef08e50b40c93c17_prof);

    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_c186b116b72b37602b03d752a2f3680f6de0f68589c7b685d6920862a66b2700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c186b116b72b37602b03d752a2f3680f6de0f68589c7b685d6920862a66b2700->enter($__internal_c186b116b72b37602b03d752a2f3680f6de0f68589c7b685d6920862a66b2700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 6
        echo "    <h1>Tenders</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_tenders");
        echo "\"> Tenders</a></li>
    </ol>
";
        
        $__internal_c186b116b72b37602b03d752a2f3680f6de0f68589c7b685d6920862a66b2700->leave($__internal_c186b116b72b37602b03d752a2f3680f6de0f68589c7b685d6920862a66b2700_prof);

    }

    // line 13
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_fbe5ac122ae88e0b43656b3d341cbc9b9ef310dc40f6e76d84ca8b92c5ff27d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe5ac122ae88e0b43656b3d341cbc9b9ef310dc40f6e76d84ca8b92c5ff27d1->enter($__internal_fbe5ac122ae88e0b43656b3d341cbc9b9ef310dc40f6e76d84ca8b92c5ff27d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 14
        echo "    
    <div class=\"row\">  
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Find specific tender</h3>
                    <button id=\"tender_add_btn\" class=\"btn btn-success pull-right\" data-backdrop=\"static\" data-toggle=\"modal\" data-target=\"#tender_add_modal\" onClick=\"add_tender(Routing.generate('_tender_initializeForm'))\">
                        <i class=\"fa fa-plus-circle\"></i>
                        <span>New tender</span>
                    </button>
                </div>
                
                <div class=\"box-body\">
                    <form role=\"form\" id=\"tenderForm\" method=\"post\">

                        <div class=\"form-group col-md-2\">
                            <label for=\"tender_oilCompany\">Oil Company</label><br>
                            <select id=\"tender_oilCompany\" name=\"tender_oil_company[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                ";
        // line 33
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "oilCompanies", array(), "array", true, true)) {
            // line 34
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "oilCompanies", array(), "array"));
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
                            <label for=\"tender_helicopter\">Helicopter Category</label><br>
                            <select id=\"tender_category\" name=\"tender_category[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                ";
        // line 44
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "helicopterCategories", array(), "array", true, true)) {
            // line 45
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "helicopterCategories", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["helicopterCategory"]) {
                // line 46
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["helicopterCategory"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["helicopterCategory"], "helicopterCategoryName", array()), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['helicopterCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                                ";
        }
        // line 49
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label>Country</label><br>
                            <select id=\"tender_country\" name=\"tender_country[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                ";
        // line 55
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "countries", array(), "array", true, true)) {
            // line 56
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "countries", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 57
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
            // line 59
            echo "                                ";
        }
        // line 60
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label>Base</label><br>
                            <select id=\"tender_base\" name=\"tender_base[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                ";
        // line 66
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "bases", array(), "array", true, true)) {
            // line 67
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "bases", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["base"]) {
                // line 68
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
            // line 70
            echo "                                ";
        }
        // line 71
        echo "                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label>Status</label><br>
                            <select id=\"tender_status\" name=\"tender_status[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                ";
        // line 77
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "projectStatus", array(), "array", true, true)) {
            // line 78
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "projectStatus", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 79
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
            // line 81
            echo "                                ";
        }
        // line 82
        echo "                            </select>
                        </div>
                        <div class=\"form-group col-md-2\">
                            <label>Tender Level</label><br>
                            <select id=\"tender_level\" name=\"tender_level[]\" class=\"select2 form-control\" multiple=\"multiple\">
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
                    <button id=\"tender_filter_btn\" type=\"submit\" class=\"btn btn-primary pull-right\" data-loading-text=\"<i class='fa fa-spinner fa-spin '></i> Loading...\">Filter</button>
                </div>

            </div>
        </div>
        <!-- /Div form -->              

        <!-- Div map result -->               
        <div class=\"col-md-12\" id=\"tender_map\">           
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
                        <table id=\"tender_result_table\" class=\"table table-striped table-bordered dt-responsive hover\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                                <tr>
                                    <th>Area</th>
                                    <th>Country</th>
                                    <th>Tender Name</th>
                                    <th>Oil Company</th>
                                    <th>Base</th>
                                    <th>Type of tender</th>
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
        
        $__internal_fbe5ac122ae88e0b43656b3d341cbc9b9ef310dc40f6e76d84ca8b92c5ff27d1->leave($__internal_fbe5ac122ae88e0b43656b3d341cbc9b9ef310dc40f6e76d84ca8b92c5ff27d1_prof);

    }

    // line 146
    public function block_modal($context, array $blocks = array())
    {
        $__internal_3de400cdb0bcc514f74d0b3982f2c5f25397cd2a71b1417cbd91f52996191d3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de400cdb0bcc514f74d0b3982f2c5f25397cd2a71b1417cbd91f52996191d3c->enter($__internal_3de400cdb0bcc514f74d0b3982f2c5f25397cd2a71b1417cbd91f52996191d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 147
        echo "    <!-- Modal -->
    <div class=\"modal fade\" id=\"tender_add_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"add_tender_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Add new tender</h3>
                </div>
                <div class=\"modal-body\">
                    <form role=\"form\" id=\"add_tender_form\" method=\"post\">
                        <div id=\"myModalFormContent\">
                            <div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li><a href=\"#tab1\" data-toggle=\"tab\">1. Main Data</a></li>
                                    <li><a href=\"#tab2\" data-toggle=\"tab\">2. Helicopters</a></li>
                                    <li><a href=\"#tab3\" data-toggle=\"tab\">3. Timing</a></li>
                                    <li><a href=\"#tab4\" data-toggle=\"tab\">4. Description</a></li>
                                </ul>
                            </div>
                            <div class=\"progress active\">
                                <div class=\"progress-bar progress-striped\" id=\"bar\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
                                </div>
                            </div>
                            <ul class=\"pager wizard\">
                                    <li class=\"previous\"><a href=\"javascript:;\">Previous</a></li>
                                    <li class=\"next\"><a href=\"javascript:;\">Next</a></li>
                                    <li class=\"next finish\" style=\"display:none;\"><a href=\"javascript:;\">Save</a></li>
                            </ul>
                            <div class=\"tab-content\">
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab1\">
                                    <div class=\"form-group has-error\">
                                        <label>Tender Name</label><br>
                                        <input type=\"text\" name=\"add_tender_name\" id=\"add_tender_name\" class=\"select2 form-control\" placeholder=\"Enter tender name...\" required>
                                    </div>
                                    <div class=\"form-group has-error\">
                                        <label>Oil Company</label><br>
                                        <select name=\"add_tender_oil_company\" id=\"add_tender_oil_company\" class=\"select2 form-control\" title=\"Choose an oil company...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group has-error\">
                                        <label>Country</label><br>
                                        <select name=\"add_tender_country[]\" id=\"add_tender_country\" class=\"select2 form-control\" title=\"Choose a country...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group has-error\">
                                        <label>Base</label><br>
                                        <select name=\"add_tender_base\" id=\"add_tender_base\" class=\"select2 form-control\" title=\"Choose an operational base...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Importance</label><br>
                                        <input type=\"range\" class=\"slider\" name=\"add_tender_level\" value=\"0\" step=\"0\" min=\"0\" max=\"4\">
                                        <h4 id=\"rangeText\" class=\"text-center\"></h4>
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab2\">
                                    <div class=\"form-group\">
                                        <label>Category of Helicopter</label><br>
                                        <select name=\"add_tender_helicopter_category[]\" id=\"add_tender_helicopter_category\" class=\"select2 form-control\" title=\"Choose one or more category of helicopter...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Quantity of Helicopters</label><br>
                                        <div id=\"add_tender_helicopter_quantity\">

                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Platforms</label><br>
                                        <select name=\"add_tender_platforms[]\" id=\"add_tender_platforms\" class=\"select2 form-control\" multiple title=\"Choose one or more platforms...\">
                                        </select>
                                    </div>
                                    <div class=\"form-group\" id=\"add_tender_mission\">
                                        <label>Mission</label>
                                        <input type=\"hidden\" id=\"add_tender_mission_order\" name=\"add_tender_mission_order\">
                                        <ol id=\"platforms_sortable\">

                                        </ol>
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab3\">
                                    <div class=\"form-group has-error\">
                                        <label>Tender Status</label><br>
                                        <select name=\"add_tender_status\" id=\"add_tender_status\" class=\"select2 form-control\" title=\"Choose the current tender status...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Out</label><br>
                                        <input type=\"text\" name=\"add_tender_tender_out\" id=\"add_tender_tender_out\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Closure</label><br>
                                        <input type=\"text\" name=\"add_tender_tender_closure\" id=\"add_tender_tender_closure\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Awarded</label><br>
                                        <input type=\"text\" name=\"add_tender_awarded\" id=\"add_tender_awarded\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Operations Start</label><br>
                                        <input type=\"text\" name=\"add_tender_operations_start\" id=\"add_tender_operations_start\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab4\">
                                    <div class=\"form-group has-error\">
                                        <label for=\"add_tender_summary\">Two-lines summary</label>
                                        <textarea id=\"add_tender_summary\" name=\"add_tender_summary\" type=\"text\" row=\"3\" class=\"form-control\" placeholder=\"Enter a short summary for the tender...\" style=\"resize: none\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"add_tender_comment\">Comment</label>
                                        <textarea id=\"add_tender_comment\" name=\"add_tender_comment\" type=\"text\" row=\"1\" class=\"form-control\" placeholder=\"Enter a comment for the tender...\" style=\"resize: none; height: 200px\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"add_tender_confidential_link\">Confidential Link</label>
                                        <input type=\"text\" name=\"add_tender_confidential_link\" id=\"add_tender_confidential_link\" class=\"form-control\" placeholder=\"Paste link pointing to the hub...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"add_tender_external_link\">External Link</label>
                                        <input type=\"text\" name=\"add_tender_external_link\" id=\"add_tender_external_link\" class=\"form-control\" placeholder=\"Paste link pointing to an external source...\">
                                    </div>
                                </div>
                                
                            </div>\t
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
    <!-- /Modal -->        
";
        
        $__internal_3de400cdb0bcc514f74d0b3982f2c5f25397cd2a71b1417cbd91f52996191d3c->leave($__internal_3de400cdb0bcc514f74d0b3982f2c5f25397cd2a71b1417cbd91f52996191d3c_prof);

    }

    // line 281
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf68c4e029424f21d5b114c6b421c8648beb0c0c21a41e71910b28c8a5f3c805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf68c4e029424f21d5b114c6b421c8648beb0c0c21a41e71910b28c8a5f3c805->enter($__internal_cf68c4e029424f21d5b114c6b421c8648beb0c0c21a41e71910b28c8a5f3c805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 282
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/contract/js/tenderModule.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_cf68c4e029424f21d5b114c6b421c8648beb0c0c21a41e71910b28c8a5f3c805->leave($__internal_cf68c4e029424f21d5b114c6b421c8648beb0c0c21a41e71910b28c8a5f3c805_prof);

    }

    public function getTemplateName()
    {
        return "ContractBundle::tenders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 283,  459 => 282,  453 => 281,  314 => 147,  308 => 146,  239 => 82,  236 => 81,  225 => 79,  220 => 78,  218 => 77,  210 => 71,  207 => 70,  196 => 68,  191 => 67,  189 => 66,  181 => 60,  178 => 59,  167 => 57,  162 => 56,  160 => 55,  152 => 49,  149 => 48,  138 => 46,  133 => 45,  131 => 44,  123 => 38,  120 => 37,  109 => 35,  104 => 34,  102 => 33,  81 => 14,  75 => 13,  65 => 9,  61 => 8,  57 => 6,  51 => 5,  38 => 3,  11 => 1,);
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

{% block title %}{{ parent() }}Tenders{% endblock %}

{% block header_content %}
    <h1>Tenders</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('_home') }}\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
        <li><a href=\"{{ path('_tenders') }}\"> Tenders</a></li>
    </ol>
{% endblock %}

{% block page_content %}
    
    <div class=\"row\">  
        <div class=\"col-md-12\">
            <div class=\"box box-primary\">
                
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Find specific tender</h3>
                    <button id=\"tender_add_btn\" class=\"btn btn-success pull-right\" data-backdrop=\"static\" data-toggle=\"modal\" data-target=\"#tender_add_modal\" onClick=\"add_tender(Routing.generate('_tender_initializeForm'))\">
                        <i class=\"fa fa-plus-circle\"></i>
                        <span>New tender</span>
                    </button>
                </div>
                
                <div class=\"box-body\">
                    <form role=\"form\" id=\"tenderForm\" method=\"post\">

                        <div class=\"form-group col-md-2\">
                            <label for=\"tender_oilCompany\">Oil Company</label><br>
                            <select id=\"tender_oilCompany\" name=\"tender_oil_company[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                {% if data['oilCompanies'] is defined %}
                                    {% for oilCompany in data['oilCompanies'] %}
                                        <option value=\"{{ oilCompany.id }}\">{{ oilCompany.oilCompanyName }}</option>
                                    {% endfor %}
                                {% endif %}
                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label for=\"tender_helicopter\">Helicopter Category</label><br>
                            <select id=\"tender_category\" name=\"tender_category[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                {% if data['helicopterCategories'] is defined %}
                                    {% for helicopterCategory in data['helicopterCategories'] %}
                                        <option value=\"{{ helicopterCategory.id }}\">{{ helicopterCategory.helicopterCategoryName }}</option>
                                    {% endfor %}
                                {% endif %}
                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label>Country</label><br>
                            <select id=\"tender_country\" name=\"tender_country[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                {% if data['countries'] is defined %}
                                    {% for country in data['countries'] %}
                                        <option value=\"{{ country.id }}\">{{ country.countryName }}</option>
                                    {% endfor %}
                                {% endif %}
                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label>Base</label><br>
                            <select id=\"tender_base\" name=\"tender_base[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                {% if data['bases'] is defined %}
                                    {% for base in data['bases'] %}
                                        <option value=\"{{ base.id }}\">{{ base.baseName }}</option>
                                    {% endfor %}
                                {% endif %}
                            </select>
                        </div>

                        <div class=\"form-group col-md-2\">
                            <label>Status</label><br>
                            <select id=\"tender_status\" name=\"tender_status[]\" class=\"select2 form-control\" multiple=\"multiple\">
                                {% if data['projectStatus'] is defined %}
                                    {% for status in data['projectStatus'] %}
                                        <option value=\"{{ status.id }}\">{{ status.projectStatusName }}</option>
                                    {% endfor %}
                                {% endif %}
                            </select>
                        </div>
                        <div class=\"form-group col-md-2\">
                            <label>Tender Level</label><br>
                            <select id=\"tender_level\" name=\"tender_level[]\" class=\"select2 form-control\" multiple=\"multiple\">
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
                    <button id=\"tender_filter_btn\" type=\"submit\" class=\"btn btn-primary pull-right\" data-loading-text=\"<i class='fa fa-spinner fa-spin '></i> Loading...\">Filter</button>
                </div>

            </div>
        </div>
        <!-- /Div form -->              

        <!-- Div map result -->               
        <div class=\"col-md-12\" id=\"tender_map\">           
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
                        <table id=\"tender_result_table\" class=\"table table-striped table-bordered dt-responsive hover\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                                <tr>
                                    <th>Area</th>
                                    <th>Country</th>
                                    <th>Tender Name</th>
                                    <th>Oil Company</th>
                                    <th>Base</th>
                                    <th>Type of tender</th>
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
    <div class=\"modal fade\" id=\"tender_add_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"add_tender_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Add new tender</h3>
                </div>
                <div class=\"modal-body\">
                    <form role=\"form\" id=\"add_tender_form\" method=\"post\">
                        <div id=\"myModalFormContent\">
                            <div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li><a href=\"#tab1\" data-toggle=\"tab\">1. Main Data</a></li>
                                    <li><a href=\"#tab2\" data-toggle=\"tab\">2. Helicopters</a></li>
                                    <li><a href=\"#tab3\" data-toggle=\"tab\">3. Timing</a></li>
                                    <li><a href=\"#tab4\" data-toggle=\"tab\">4. Description</a></li>
                                </ul>
                            </div>
                            <div class=\"progress active\">
                                <div class=\"progress-bar progress-striped\" id=\"bar\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
                                </div>
                            </div>
                            <ul class=\"pager wizard\">
                                    <li class=\"previous\"><a href=\"javascript:;\">Previous</a></li>
                                    <li class=\"next\"><a href=\"javascript:;\">Next</a></li>
                                    <li class=\"next finish\" style=\"display:none;\"><a href=\"javascript:;\">Save</a></li>
                            </ul>
                            <div class=\"tab-content\">
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab1\">
                                    <div class=\"form-group has-error\">
                                        <label>Tender Name</label><br>
                                        <input type=\"text\" name=\"add_tender_name\" id=\"add_tender_name\" class=\"select2 form-control\" placeholder=\"Enter tender name...\" required>
                                    </div>
                                    <div class=\"form-group has-error\">
                                        <label>Oil Company</label><br>
                                        <select name=\"add_tender_oil_company\" id=\"add_tender_oil_company\" class=\"select2 form-control\" title=\"Choose an oil company...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group has-error\">
                                        <label>Country</label><br>
                                        <select name=\"add_tender_country[]\" id=\"add_tender_country\" class=\"select2 form-control\" title=\"Choose a country...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group has-error\">
                                        <label>Base</label><br>
                                        <select name=\"add_tender_base\" id=\"add_tender_base\" class=\"select2 form-control\" title=\"Choose an operational base...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Importance</label><br>
                                        <input type=\"range\" class=\"slider\" name=\"add_tender_level\" value=\"0\" step=\"0\" min=\"0\" max=\"4\">
                                        <h4 id=\"rangeText\" class=\"text-center\"></h4>
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab2\">
                                    <div class=\"form-group\">
                                        <label>Category of Helicopter</label><br>
                                        <select name=\"add_tender_helicopter_category[]\" id=\"add_tender_helicopter_category\" class=\"select2 form-control\" title=\"Choose one or more category of helicopter...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Quantity of Helicopters</label><br>
                                        <div id=\"add_tender_helicopter_quantity\">

                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Platforms</label><br>
                                        <select name=\"add_tender_platforms[]\" id=\"add_tender_platforms\" class=\"select2 form-control\" multiple title=\"Choose one or more platforms...\">
                                        </select>
                                    </div>
                                    <div class=\"form-group\" id=\"add_tender_mission\">
                                        <label>Mission</label>
                                        <input type=\"hidden\" id=\"add_tender_mission_order\" name=\"add_tender_mission_order\">
                                        <ol id=\"platforms_sortable\">

                                        </ol>
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab3\">
                                    <div class=\"form-group has-error\">
                                        <label>Tender Status</label><br>
                                        <select name=\"add_tender_status\" id=\"add_tender_status\" class=\"select2 form-control\" title=\"Choose the current tender status...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Out</label><br>
                                        <input type=\"text\" name=\"add_tender_tender_out\" id=\"add_tender_tender_out\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Closure</label><br>
                                        <input type=\"text\" name=\"add_tender_tender_closure\" id=\"add_tender_tender_closure\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Awarded</label><br>
                                        <input type=\"text\" name=\"add_tender_awarded\" id=\"add_tender_awarded\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Operations Start</label><br>
                                        <input type=\"text\" name=\"add_tender_operations_start\" id=\"add_tender_operations_start\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab4\">
                                    <div class=\"form-group has-error\">
                                        <label for=\"add_tender_summary\">Two-lines summary</label>
                                        <textarea id=\"add_tender_summary\" name=\"add_tender_summary\" type=\"text\" row=\"3\" class=\"form-control\" placeholder=\"Enter a short summary for the tender...\" style=\"resize: none\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"add_tender_comment\">Comment</label>
                                        <textarea id=\"add_tender_comment\" name=\"add_tender_comment\" type=\"text\" row=\"1\" class=\"form-control\" placeholder=\"Enter a comment for the tender...\" style=\"resize: none; height: 200px\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"add_tender_confidential_link\">Confidential Link</label>
                                        <input type=\"text\" name=\"add_tender_confidential_link\" id=\"add_tender_confidential_link\" class=\"form-control\" placeholder=\"Paste link pointing to the hub...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"add_tender_external_link\">External Link</label>
                                        <input type=\"text\" name=\"add_tender_external_link\" id=\"add_tender_external_link\" class=\"form-control\" placeholder=\"Paste link pointing to an external source...\">
                                    </div>
                                </div>
                                
                            </div>\t
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
    <script type=\"text/javascript\" src=\"{{ asset('bundles/contract/js/tenderModule.js') }}\"></script>
{% endblock %}", "ContractBundle::tenders.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/ContractBundle/Resources/views/tenders.html.twig");
    }
}
