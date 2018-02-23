<?php

/* ContractBundle::tenderDetail.html.twig */
class __TwigTemplate_be18e82297ac5bd749b3e27e0a5eb2a246c2913f52e8ac65277240a4b59dd316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "ContractBundle::tenderDetail.html.twig", 1);
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
        $__internal_f04237f4be9dd6f1564888cfad516193a19bc3a673a782ef0772042c2abe188d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04237f4be9dd6f1564888cfad516193a19bc3a673a782ef0772042c2abe188d->enter($__internal_f04237f4be9dd6f1564888cfad516193a19bc3a673a782ef0772042c2abe188d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContractBundle::tenderDetail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f04237f4be9dd6f1564888cfad516193a19bc3a673a782ef0772042c2abe188d->leave($__internal_f04237f4be9dd6f1564888cfad516193a19bc3a673a782ef0772042c2abe188d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f4c264058eb6f4d8f120511f41be6022103d8f4401c5d3f38d21afcdf6277a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f4c264058eb6f4d8f120511f41be6022103d8f4401c5d3f38d21afcdf6277a3->enter($__internal_0f4c264058eb6f4d8f120511f41be6022103d8f4401c5d3f38d21afcdf6277a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name", array(), "array"), "html", null, true);
        
        $__internal_0f4c264058eb6f4d8f120511f41be6022103d8f4401c5d3f38d21afcdf6277a3->leave($__internal_0f4c264058eb6f4d8f120511f41be6022103d8f4401c5d3f38d21afcdf6277a3_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_f76c0aa3559a67423cadc205ba6e7c72a4659cb8a409af129639d77d80b2f96b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76c0aa3559a67423cadc205ba6e7c72a4659cb8a409af129639d77d80b2f96b->enter($__internal_f76c0aa3559a67423cadc205ba6e7c72a4659cb8a409af129639d77d80b2f96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/css/helicoptr.css"), "html", null, true);
        echo "\">
";
        
        $__internal_f76c0aa3559a67423cadc205ba6e7c72a4659cb8a409af129639d77d80b2f96b->leave($__internal_f76c0aa3559a67423cadc205ba6e7c72a4659cb8a409af129639d77d80b2f96b_prof);

    }

    // line 10
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_7cd3ece3daec7c5f3eaddacb689b5a810b6b463ef56261a6178ab2a4db1348a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cd3ece3daec7c5f3eaddacb689b5a810b6b463ef56261a6178ab2a4db1348a2->enter($__internal_7cd3ece3daec7c5f3eaddacb689b5a810b6b463ef56261a6178ab2a4db1348a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 11
        echo "    <h1>#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array(), "array"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name", array(), "array"), "html", null, true);
        echo "</h1>
    <div class=\"breadcrumb btn-group\">
        <button id=\"upgrade_tender_btn\" type=\"button\" class=\"btn btn-success btn-flat btn-xs\" data-backdrop=\"static\" data-toggle=\"modal\" data-target=\"#tender_upgrade_modal\">
            <i class=\"fa fa-arrow-circle-o-up\"></i>
            Upgrade
        </button>
        <button id=\"edit_tender_btn\" type=\"button\" class=\"btn btn-primary btn-flat btn-xs\" data-backdrop=\"static\" data-toggle=\"modal\" data-target=\"#tender_edit_modal\">
            <i class=\"fa fa-edit\"></i>
            Edit
        </button>
        <button id=\"archive_tender_btn\" type=\"button\" class=\"btn btn-warning btn-flat btn-xs\">
            <i class=\"fa fa-archive\"></i>
            Archive
        </button>
        ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "            <button type=\"button\" id=\"delete_project_btn\" class=\"btn btn-danger btn-flat btn-xs\">
                <i class=\"fa fa-trash\"></i>
                Delete
            </button>
        ";
        }
        // line 31
        echo "    </div>
";
        
        $__internal_7cd3ece3daec7c5f3eaddacb689b5a810b6b463ef56261a6178ab2a4db1348a2->leave($__internal_7cd3ece3daec7c5f3eaddacb689b5a810b6b463ef56261a6178ab2a4db1348a2_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f8511fa37586785745687f4b5c482b1cf875b0b0918553922da00ac51eafb172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8511fa37586785745687f4b5c482b1cf875b0b0918553922da00ac51eafb172->enter($__internal_f8511fa37586785745687f4b5c482b1cf875b0b0918553922da00ac51eafb172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 35
        echo "    
    <div class=\"row\">
                    
        <div class=\"col-md-3 col-sm-6 col-xs-12\">           
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-light-blue\">
                    <i class=\"icon-platform\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Oil Company</span>
                    <span class=\"info-box-number\">
                        ";
        // line 46
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "oilCompany", array(), "array", true, true)) {
            // line 47
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "oilCompany", array(), "array"), "html", null, true);
            echo "
                        ";
        }
        // line 49
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
        // line 62
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "base", array(), "array", true, true)) {
            // line 63
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "base", array(), "array"), "name", array()), "html", null, true);
            echo "
                        ";
        }
        // line 65
        echo "                    </span>
                </div>
            </div>
        </div>
                    
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-gray\"><i class=\"fa fa-globe\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Country</span>
                    <span class=\"info-box-number\">
                        ";
        // line 76
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array", true, true)) {
            // line 77
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "country", array(), "array"), "html", null, true);
            echo "
                        ";
        }
        // line 79
        echo "                    </span>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-light-blue\"><i class=\"fa fa-tag\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Tender Status</span>
                    <span class=\"info-box-number\">";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "status", array(), "array"), "html", null, true);
        echo "</span>
                </div>
            </div>
        </div>
    </div>
                    
    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 97
        if (( !(twig_date_format_filter($this->env, "now", "Y") === "Unknown") &&  !($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "tenderTiming", array(), "array") === "Unknown"))) {
            // line 98
            echo "                ";
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "tenderTiming", array(), "array", true, true) && (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "tenderTiming", array(), "array") - twig_date_format_filter($this->env, "now", "Y")) > 2))) {
                // line 99
                echo "                    <div class=\"box box-solid box-success\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-check\"></i> Tender Timing</h3>
                        </div>
                ";
            } elseif (($this->getAttribute(            // line 103
(isset($context["data"]) ? $context["data"] : null), "tenderTiming", array(), "array", true, true) && (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "tenderTiming", array(), "array") - twig_date_format_filter($this->env, "now", "Y")) == 2))) {
                // line 104
                echo "                    <div class=\"box box-solid box-warning\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-warning\"></i> Tender Timing</h3>
                        </div>
                ";
            } elseif (($this->getAttribute(            // line 108
(isset($context["data"]) ? $context["data"] : null), "tenderTiming", array(), "array", true, true) && (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "tenderTiming", array(), "array") - twig_date_format_filter($this->env, "now", "Y")) < 2))) {
                // line 109
                echo "                    <div class=\"box box-solid box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-bell\"></i> Tender Timing</h3>
                        </div>
                ";
            }
            // line 114
            echo "            ";
        } else {
            // line 115
            echo "                <div class=\"box box-solid box-primary\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-info\"></i> Tender Timing</h3>
                        </div>
            ";
        }
        // line 120
        echo "                        <div class=\"box-body\">
                            <p><span style=\"font-weight: bold\">Tender Out Date : </span><span class=\"pull-right\">";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "tenderOutDate", array(), "array"), "html", null, true);
        echo "</span></p>
                            <p><span style=\"font-weight: bold\">Tender Closure Date : </span><span class=\"pull-right\">";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "tenderClosureDate", array(), "array"), "html", null, true);
        echo "</span></p>
                            <p><span style=\"font-weight: bold\">Award Date : </span><span class=\"pull-right\">";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "tenderAwardDate", array(), "array"), "html", null, true);
        echo "</span></p>
                            <p><span style=\"font-weight: bold\">Operations Start : </span><span class=\"pull-right\">";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "tenderTiming", array(), "array"), "html", null, true);
        echo "</span></p>

                        </div>
                    </div>
            <div class=\"box box-solid box-primary\">
                <div class=\"box-header with-border\">
                    <i class=\"icon fa fa-folder-open\"></i>
                    <h3 class=\"box-title\">Helicopter Requirement</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 134
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "helicopters", array(), "array", true, true)) {
            // line 135
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "helicopters", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["helicopter"]) {
                // line 136
                echo "                            <p><span style=\"font-weight: bold\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["helicopter"], "name", array()), "html", null, true);
                echo "</span><span class=\"pull-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["helicopter"], "quantity", array()), "html", null, true);
                echo "</span></p>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['helicopter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                    ";
        }
        // line 139
        echo "                </div>
            </div>
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-navy\"><i class=\"fa fa-flag-checkered\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Round Trip Distance</span>
                    <span class=\"info-box-number\" id=\"mainMissionDistance\"></span>
                </div>
            </div>
            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-warning\"></i>Warning !</h4>
                This is a round trip distance, including return trip!
            </div>
        </div>
        <div class=\"col-md-9\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Mission</h3>
                </div>
                <div class=\"box-body\">
                    <div id=\"world-map\" style=\"height: 420px\">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        
        <div class=\"col-md-12\">
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#more_details\" aria-controls=\"mape\" role=\"tab\" data-toggle=\"tab\">More details</a></li>
                    <li role=\"presentation\"><a href=\"#links\" aria-controls=\"mape\" role=\"tab\" data-toggle=\"tab\">Useful Links</a></li>
                    <li role=\"presentation\"><a href=\"#platforms\" aria-controls=\"table\" role=\"tab\" data-toggle=\"tab\">Platforms</a></li>
                    <li role=\"presentation\"><a href=\"#users_comments\" aria-controls=\"table\" role=\"tab\" data-toggle=\"tab\">Users comments</a></li>
                    <li role=\"presentation\"><a href=\"#add_comment\" aria-controls=\"table\" role=\"tab\" data-toggle=\"tab\">Add my comment</a></li>
                </ul>
                <!-- Tab panes -->
                <div class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"more_details\">
                        <blockquote>
                            <label>Two-Lines Summary :</label><br>
                            <small>
                                ";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "summary", array(), "array"), "html", null, true);
        echo "
                            </small>
                        </blockquote>
                        <blockquote>
                            <label>Initial Comment :</label><br>
                            <small>
                                ";
        // line 190
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "comment", array(), "array", true, true)) {
            // line 191
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "comment", array(), "array"), "html", null, true);
            echo "
                                ";
        }
        // line 193
        echo "                            </small>
                        </blockquote>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"links\">
                        <blockquote>
                            <label>Confidential Link :</label><br>
                            <small>
                                <a href=\"#\" onClick=\"window.open('";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "confidentialLink", array(), "array"), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "confidentialLink", array(), "array"), "html", null, true);
        echo "</a>
                            </small>
                        </blockquote>
                        <blockquote>
                            <label>Other Link :</label><br>
                            <small>
                                <a href=\"#\" onClick=\"window.open('";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "externalLink", array(), "array"), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "externalLink", array(), "array"), "html", null, true);
        echo "</a>
                            </small>
                        </blockquote>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"platforms\">
                        <table id=\"platformsTable\" class=\"table table-striped table-bordered dt-responsive hover\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                                    <tr>
                                        <th>Platform Name</th>
                                        <th>Helideck D-Value</th>
                                        <th>Helideck T-Value</th>
                                        <th>Bunked Bed Number</th>
                                        <th>Field</th>
                                        <th>Block</th>
                                        <th>Start Year</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>                     
                            </thead>
                            <tbody>
                                ";
        // line 226
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "mission", array(), "array", true, true)) {
            // line 227
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "mission", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                // line 228
                echo "                                        <tr>
                                            <td>
                                                ";
                // line 230
                if ($this->getAttribute($context["platform"], "name", array(), "any", true, true)) {
                    // line 231
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 233
                echo "                                            </td>
                                            <td>
                                                ";
                // line 235
                if ($this->getAttribute($context["platform"], "dValue", array(), "any", true, true)) {
                    // line 236
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "dValue", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 238
                echo "                                            </td>
                                            <td>
                                                ";
                // line 240
                if ($this->getAttribute($context["platform"], "tValue", array(), "any", true, true)) {
                    // line 241
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "tValue", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 243
                echo "                                            </td>
                                            <td>
                                                ";
                // line 245
                if ($this->getAttribute($context["platform"], "bunkedBedNumber", array(), "any", true, true)) {
                    // line 246
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "bunkedBedNumber", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 248
                echo "                                            </td>
                                            <td>
                                                ";
                // line 250
                if ($this->getAttribute($context["platform"], "fieldName", array(), "any", true, true)) {
                    // line 251
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "fieldName", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 253
                echo "                                            </td>
                                            <td>
                                                ";
                // line 255
                if ($this->getAttribute($context["platform"], "block", array(), "any", true, true)) {
                    // line 256
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "block", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 258
                echo "                                            </td>
                                            <td>
                                                ";
                // line 260
                if ($this->getAttribute($context["platform"], "startYear", array(), "any", true, true)) {
                    // line 261
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "startYear", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 263
                echo "                                            </td>
                                            <td>
                                                ";
                // line 265
                if ($this->getAttribute($context["platform"], "platformStatus", array(), "any", true, true)) {
                    // line 266
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "platformStatus", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 268
                echo "                                            </td>
                                            <td><button class=\"btn btn-default btn-sm\" onClick=\"openDetailWindow(Routing.generate('_platform_detail', {id: ";
                // line 269
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "id", array()), "html", null, true);
                echo " }))\" role=\"button\"><i class=\"fa fa-folder\"></i></button></td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            echo "                                ";
        }
        // line 273
        echo "                            </tbody>
                        </table>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"users_comments\">
                        <table id=\"commentTable\" class=\"table table-striped table-bordered dt-responsive hover\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                                <tr>
                                    <th>Source</th>
                                    <th>Comment</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 286
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userComments", array(), "array", true, true)) {
            // line 287
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userComments", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 288
                echo "                                        <tr>
                                            <td>";
                // line 289
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 290
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 291
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 294
            echo "                                ";
        }
        // line 295
        echo "                            </tbody>
                        </table>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"add_comment\">
                        <form role=\"form\" id=\"commentForm\" method=\"post\">
                            <div class=\"form-group\">
                                <label>My comment</label><br>
                                <textarea class=\"form-control\" placeholder=\"Enter your comment here...\" row=\"1\" name=\"add_comment_comment\" id=\"add_comment_comment\" style=\"resize: none\">

                                </textarea>
                            </div>
                            <div class=\"box-footer\">
                                <button id=\"add_comment_btn\" type=\"submit\" class=\"btn btn-primary pull-right\">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>                   
            </div>
            <input id=\"id\" type=\"text\" style=\"display: none\" value=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array(), "array"), "html", null, true);
        echo "\">
        </div>
    </div>
";
        
        $__internal_f8511fa37586785745687f4b5c482b1cf875b0b0918553922da00ac51eafb172->leave($__internal_f8511fa37586785745687f4b5c482b1cf875b0b0918553922da00ac51eafb172_prof);

    }

    // line 318
    public function block_modal($context, array $blocks = array())
    {
        $__internal_f2f2aceb3c412435348b6b0b1cb65df3f5dda9e273dfec1ed0c54ebb19b49652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f2aceb3c412435348b6b0b1cb65df3f5dda9e273dfec1ed0c54ebb19b49652->enter($__internal_f2f2aceb3c412435348b6b0b1cb65df3f5dda9e273dfec1ed0c54ebb19b49652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 319
        echo "    <!-- Modal -->
    <div class=\"modal fade\" id=\"tender_edit_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit_tender_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Edit tender</h3>
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
                    <form role=\"form\" id=\"edit_tender_form\" method=\"post\">
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
                            <input id=\"hiddenId\" type=\"text\" value=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array(), "array"), "html", null, true);
        echo "\" style=\"display: none\"/>
                            
                            <div class=\"tab-content\">
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab1\">
                                    <div class=\"form-group\">
                                        <label>Tender Name</label><br>
                                        <input type=\"text\" name=\"edit_tender_name\" id=\"edit_tender_name\" class=\"select2 form-control\" placeholder=\"Edit tender name...\" required>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Oil Company</label><br>
                                        <select name=\"edit_tender_oil_company\" id=\"edit_tender_oil_company\" class=\"select2 form-control\" title=\"Edit oil company...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Country</label><br>
                                        <select name=\"edit_tender_country[]\" id=\"edit_tender_country\" class=\"select2 form-control\" title=\"Edit country...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Base</label><br>
                                        <select name=\"edit_tender_base\" id=\"edit_tender_base\" class=\"select2 form-control\" title=\"Edit operational base...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Importance</label><br>
                                        <input type=\"range\" class=\"slider\" id=\"edit_tender_level\" name=\"edit_tender_level\" step=\"1\" min=\"0\" max=\"4\">
                                        <h4 id=\"rangeText\" class=\"text-center\"></h4>
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab2\">
                                    <div class=\"form-group\">
                                        <label>Category of Helicopter</label><br>
                                        <select name=\"edit_tender_helicopter_category[]\" id=\"edit_tender_helicopter_category\" class=\"select2 form-control\" title=\"Edit category of helicopter...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Quantity of Helicopters</label><br>
                                        <div id=\"edit_tender_helicopter_quantity\">

                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Platforms</label><br>
                                        <select name=\"edit_tender_platforms[]\" id=\"edit_tender_platforms\" class=\"select2 form-control\" multiple title=\"Edit platforms by choosing different ones...\">
                                        </select>
                                    </div>
                                    <div class=\"form-group\" id=\"edit_tender_mission\">
                                        <label>Mission</label>
                                        <input type=\"hidden\" id=\"edit_tender_mission_order\" name=\"edit_tender_mission_order\" autocomplete=\"off\">
                                        <ol id=\"platforms_sortable\">

                                        </ol>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>
                                            <input type=\"checkbox\" class=\"icheck\" name=\"edit_tender_remove_mission\" autocomplete=\"off\"> Remove current mission ?
                                        </label>
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab3\">
                                    <div class=\"form-group\">
                                        <label>Tender Status</label><br>
                                        <select name=\"edit_tender_status\" id=\"edit_tender_status\" class=\"select2 form-control\" title=\"Edit current tender status...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Out</label><br>
                                        <input type=\"text\" name=\"edit_tender_tender_out\" id=\"edit_tender_tender_out\" class=\"form-control datepicker\" placeholder=\"Edit tender out date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Closure</label><br>
                                        <input type=\"text\" name=\"edit_tender_tender_closure\" id=\"edit_tender_tender_closure\" class=\"form-control datepicker\" placeholder=\"Edit tender closure date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Awarded</label><br>
                                        <input type=\"text\" name=\"edit_tender_awarded\" id=\"edit_tender_awarded\" class=\"form-control datepicker\" placeholder=\"Edit tender award date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Operations Start</label><br>
                                        <input type=\"text\" name=\"edit_tender_operations_start\" id=\"edit_tender_operations_start\" class=\"form-control datepicker\" placeholder=\"Edit tender helicopter operations start date...\">
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab4\">
                                    <div class=\"form-group\">
                                        <label for=\"edit_tender_summary\">Two-lines summary</label>
                                        <textarea id=\"edit_tender_summary\" name=\"edit_tender_summary\" type=\"text\" row=\"3\" class=\"form-control\" placeholder=\"Edit 2-lines summary for the tender...\" style=\"resize: none\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_tender_comment\">Comment</label>
                                        <textarea id=\"edit_tender_comment\" name=\"edit_tender_comment\" type=\"text\" row=\"1\" class=\"form-control\" placeholder=\"Edit comment for the tender...\" style=\"resize: none; height: 200px\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_tender_confidential_link\">Confidential Link</label>
                                        <input type=\"text\" name=\"edit_tender_confidential_link\" id=\"edit_tender_confidential_link\" class=\"form-control\" placeholder=\"Edit link pointing to the hub...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_tender_external_link\">External Link</label>
                                        <input type=\"text\" name=\"edit_tender_external_link\" id=\"edit_tender_external_link\" class=\"form-control\" placeholder=\"Edit link pointing to an external source...\">
                                    </div>
                                </div>
                                <ul class=\"pager wizard\">
                                    <li class=\"previous\"><a href=\"javascript:;\">Previous</a></li>
                                    <li class=\"next\"><a href=\"javascript:;\">Next</a></li>
                                    <li class=\"next finish\" style=\"display:none;\"><a href=\"javascript:;\">Save</a></li>
                                </ul>
                            </div>\t
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
    <!-- /Modal -->
    
    <div class=\"modal fade\" id=\"tender_upgrade_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"tender_project_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Upgrade tender to contract</h3>
                </div>
                <div class=\"modal-body\">
                    <form role=\"form\" id=\"upgrade_tender_form\" method=\"post\">
                        <div id=\"upgradeTenderFormContent\">
                            
                            <div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li><a href=\"#upgrade1\" data-toggle=\"tab\">1. Localisation</a></li>
                                    <li><a href=\"#upgrade2\" data-toggle=\"tab\">2. Timing</a></li>
                                    <li><a href=\"#upgrade3\" data-toggle=\"tab\">3. Description</a></li>
                                </ul>
                            </div>
                            <div class=\"progress active\">
                                <div class=\"progress-bar progress-bar-striped\" id=\"upgrade_bar\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
                                </div>
                            </div>
                            
                            <div class=\"tab-content\">
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"upgrade1\">
                                    <div class=\"form-group has-error\">
                                        <label>Operator Group</label><br>
                                        <select name=\"upgrade_tender_operator_group\" id=\"upgrade_tender_operator_group\" class=\"select2 form-control\" title=\"Choose an oil company...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Platforms</label><br>
                                        <select name=\"upgrade_tender_platforms[]\" id=\"upgrade_tender_platforms\" class=\"form-control select2\" multiple title=\"Choose one or more platforms...\">
                                        </select>
                                    </div>
                                    <div class=\"form-group\" id=\"upgrade_tender_mission\">
                                        <label>Mission</label>
                                        <input type=\"hidden\" id=\"upgrade_tender_mission_order\" name=\"upgrade_tender_mission_order\" autocomplete=\"off\">
                                        <ol id=\"platforms_sortable\">

                                        </ol>
                                    </div>
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"upgrade2\">
                                    <div class=\"form-group has-error\">
                                        <label>Contract Status</label><br>
                                        <select name=\"upgrade_tender_status\" id=\"upgrade_tender_status\" class=\"form-control select2\" title=\"Choose the current tender status...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Contract Start Date</label><br>
                                        <input type=\"text\" name=\"upgrade_tender_contract_start_year\" id=\"upgrade_tender_contract_start_year\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Contract End Date</label><br>
                                        <input type=\"text\" name=\"upgrade_tender_contract_end_year\" id=\"upgrade_tender_contract_end_year\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"upgrade3\">
                                    <div class=\"form-group\">
                                        <label for=\"upgrade_tender_summary\">Two-lines summary</label>
                                        <textarea id=\"upgrade_tender_summary\" name=\"upgrade_tender_summary\" type=\"text\" row=\"3\" class=\"form-control\" placeholder=\"Update the 2-lines summary for the project...\" style=\"resize: none\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"upgrade_tender_comment\">Comment</label>
                                        <textarea id=\"upgrade_tender_comment\" name=\"upgrade_tender_comment\" type=\"text\" row=\"1\" class=\"form-control\" placeholder=\"Update comment for the project...\" style=\"resize: none; height: 300px\"></textarea>
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
";
        
        $__internal_f2f2aceb3c412435348b6b0b1cb65df3f5dda9e273dfec1ed0c54ebb19b49652->leave($__internal_f2f2aceb3c412435348b6b0b1cb65df3f5dda9e273dfec1ed0c54ebb19b49652_prof);

    }

    // line 551
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8cf1fa0acd741f9a7dc6ca707661db319dde3f0c4bd228f21ac76984b6b2cbc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf1fa0acd741f9a7dc6ca707661db319dde3f0c4bd228f21ac76984b6b2cbc3->enter($__internal_8cf1fa0acd741f9a7dc6ca707661db319dde3f0c4bd228f21ac76984b6b2cbc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 552
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 553
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/contract/js/tenderDetailModule.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8cf1fa0acd741f9a7dc6ca707661db319dde3f0c4bd228f21ac76984b6b2cbc3->leave($__internal_8cf1fa0acd741f9a7dc6ca707661db319dde3f0c4bd228f21ac76984b6b2cbc3_prof);

    }

    public function getTemplateName()
    {
        return "ContractBundle::tenderDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  856 => 553,  851 => 552,  845 => 551,  640 => 352,  605 => 319,  599 => 318,  588 => 313,  568 => 295,  565 => 294,  556 => 291,  552 => 290,  548 => 289,  545 => 288,  540 => 287,  538 => 286,  523 => 273,  520 => 272,  511 => 269,  508 => 268,  502 => 266,  500 => 265,  496 => 263,  490 => 261,  488 => 260,  484 => 258,  478 => 256,  476 => 255,  472 => 253,  466 => 251,  464 => 250,  460 => 248,  454 => 246,  452 => 245,  448 => 243,  442 => 241,  440 => 240,  436 => 238,  430 => 236,  428 => 235,  424 => 233,  418 => 231,  416 => 230,  412 => 228,  407 => 227,  405 => 226,  380 => 206,  369 => 200,  360 => 193,  354 => 191,  352 => 190,  343 => 184,  296 => 139,  293 => 138,  282 => 136,  277 => 135,  275 => 134,  262 => 124,  258 => 123,  254 => 122,  250 => 121,  247 => 120,  240 => 115,  237 => 114,  230 => 109,  228 => 108,  222 => 104,  220 => 103,  214 => 99,  211 => 98,  209 => 97,  198 => 89,  186 => 79,  180 => 77,  178 => 76,  165 => 65,  159 => 63,  157 => 62,  142 => 49,  136 => 47,  134 => 46,  121 => 35,  115 => 34,  107 => 31,  100 => 26,  98 => 25,  78 => 11,  72 => 10,  63 => 7,  58 => 6,  52 => 5,  39 => 3,  11 => 1,);
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
    <h1>#{{ data['id'] }} - {{ data['name'] }}</h1>
    <div class=\"breadcrumb btn-group\">
        <button id=\"upgrade_tender_btn\" type=\"button\" class=\"btn btn-success btn-flat btn-xs\" data-backdrop=\"static\" data-toggle=\"modal\" data-target=\"#tender_upgrade_modal\">
            <i class=\"fa fa-arrow-circle-o-up\"></i>
            Upgrade
        </button>
        <button id=\"edit_tender_btn\" type=\"button\" class=\"btn btn-primary btn-flat btn-xs\" data-backdrop=\"static\" data-toggle=\"modal\" data-target=\"#tender_edit_modal\">
            <i class=\"fa fa-edit\"></i>
            Edit
        </button>
        <button id=\"archive_tender_btn\" type=\"button\" class=\"btn btn-warning btn-flat btn-xs\">
            <i class=\"fa fa-archive\"></i>
            Archive
        </button>
        {% if is_granted('ROLE_ADMIN') %}
            <button type=\"button\" id=\"delete_project_btn\" class=\"btn btn-danger btn-flat btn-xs\">
                <i class=\"fa fa-trash\"></i>
                Delete
            </button>
        {% endif %}
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
                <span class=\"info-box-icon bg-gray\"><i class=\"fa fa-globe\"></i></span>
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
                <span class=\"info-box-icon bg-light-blue\"><i class=\"fa fa-tag\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Tender Status</span>
                    <span class=\"info-box-number\">{{ data['status'] }}</span>
                </div>
            </div>
        </div>
    </div>
                    
    <div class=\"row\">
        <div class=\"col-md-3\">
            {% if \"now\"|date(\"Y\") is not sameas(\"Unknown\") and data['tenderTiming'] is not sameas(\"Unknown\") %}
                {% if data['tenderTiming'] is defined and (data['tenderTiming']-\"now\"|date(\"Y\")) > 2  %}
                    <div class=\"box box-solid box-success\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-check\"></i> Tender Timing</h3>
                        </div>
                {% elseif data['tenderTiming'] is defined and (data['tenderTiming']-\"now\"|date(\"Y\")) == 2 %}
                    <div class=\"box box-solid box-warning\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-warning\"></i> Tender Timing</h3>
                        </div>
                {% elseif data['tenderTiming'] is defined and (data['tenderTiming']-\"now\"|date(\"Y\")) < 2 %}
                    <div class=\"box box-solid box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-bell\"></i> Tender Timing</h3>
                        </div>
                {% endif %}
            {% else %}
                <div class=\"box box-solid box-primary\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-info\"></i> Tender Timing</h3>
                        </div>
            {% endif %}
                        <div class=\"box-body\">
                            <p><span style=\"font-weight: bold\">Tender Out Date : </span><span class=\"pull-right\">{{ data['tenderOutDate'] }}</span></p>
                            <p><span style=\"font-weight: bold\">Tender Closure Date : </span><span class=\"pull-right\">{{ data['tenderClosureDate'] }}</span></p>
                            <p><span style=\"font-weight: bold\">Award Date : </span><span class=\"pull-right\">{{ data['tenderAwardDate'] }}</span></p>
                            <p><span style=\"font-weight: bold\">Operations Start : </span><span class=\"pull-right\">{{ data['tenderTiming'] }}</span></p>

                        </div>
                    </div>
            <div class=\"box box-solid box-primary\">
                <div class=\"box-header with-border\">
                    <i class=\"icon fa fa-folder-open\"></i>
                    <h3 class=\"box-title\">Helicopter Requirement</h3>
                </div>
                <div class=\"box-body\">
                    {% if data['helicopters'] is defined %}
                        {% for helicopter in data['helicopters'] %}
                            <p><span style=\"font-weight: bold\">{{ helicopter.name }}</span><span class=\"pull-right\">{{ helicopter.quantity }}</span></p>
                        {% endfor %}
                    {% endif %}
                </div>
            </div>
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-navy\"><i class=\"fa fa-flag-checkered\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Round Trip Distance</span>
                    <span class=\"info-box-number\" id=\"mainMissionDistance\"></span>
                </div>
            </div>
            <div class=\"alert alert-warning alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-warning\"></i>Warning !</h4>
                This is a round trip distance, including return trip!
            </div>
        </div>
        <div class=\"col-md-9\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Mission</h3>
                </div>
                <div class=\"box-body\">
                    <div id=\"world-map\" style=\"height: 420px\">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        
        <div class=\"col-md-12\">
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    <li role=\"presentation\" class=\"active\"><a href=\"#more_details\" aria-controls=\"mape\" role=\"tab\" data-toggle=\"tab\">More details</a></li>
                    <li role=\"presentation\"><a href=\"#links\" aria-controls=\"mape\" role=\"tab\" data-toggle=\"tab\">Useful Links</a></li>
                    <li role=\"presentation\"><a href=\"#platforms\" aria-controls=\"table\" role=\"tab\" data-toggle=\"tab\">Platforms</a></li>
                    <li role=\"presentation\"><a href=\"#users_comments\" aria-controls=\"table\" role=\"tab\" data-toggle=\"tab\">Users comments</a></li>
                    <li role=\"presentation\"><a href=\"#add_comment\" aria-controls=\"table\" role=\"tab\" data-toggle=\"tab\">Add my comment</a></li>
                </ul>
                <!-- Tab panes -->
                <div class=\"tab-content\">
                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"more_details\">
                        <blockquote>
                            <label>Two-Lines Summary :</label><br>
                            <small>
                                {{ data['summary'] }}
                            </small>
                        </blockquote>
                        <blockquote>
                            <label>Initial Comment :</label><br>
                            <small>
                                {% if data['comment'] is defined %}
                                    {{ data['comment'] }}
                                {% endif %}
                            </small>
                        </blockquote>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"links\">
                        <blockquote>
                            <label>Confidential Link :</label><br>
                            <small>
                                <a href=\"#\" onClick=\"window.open('{{ data['confidentialLink'] }}');\">{{ data['confidentialLink'] }}</a>
                            </small>
                        </blockquote>
                        <blockquote>
                            <label>Other Link :</label><br>
                            <small>
                                <a href=\"#\" onClick=\"window.open('{{ data['externalLink'] }}');\">{{ data['externalLink'] }}</a>
                            </small>
                        </blockquote>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"platforms\">
                        <table id=\"platformsTable\" class=\"table table-striped table-bordered dt-responsive hover\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                                    <tr>
                                        <th>Platform Name</th>
                                        <th>Helideck D-Value</th>
                                        <th>Helideck T-Value</th>
                                        <th>Bunked Bed Number</th>
                                        <th>Field</th>
                                        <th>Block</th>
                                        <th>Start Year</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>                     
                            </thead>
                            <tbody>
                                {% if data['mission'] is defined %}
                                    {% for platform in data['mission'] %}
                                        <tr>
                                            <td>
                                                {% if platform.name is defined %}
                                                    {{ platform.name }}
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% if platform.dValue is defined %}
                                                    {{ platform.dValue }}
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% if platform.tValue is defined %}
                                                    {{ platform.tValue }}
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% if platform.bunkedBedNumber is defined %}
                                                    {{ platform.bunkedBedNumber }}
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% if platform.fieldName is defined %}
                                                    {{ platform.fieldName }}
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% if platform.block is defined %}
                                                    {{ platform.block }}
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% if platform.startYear is defined %}
                                                    {{ platform.startYear }}
                                                {% endif %}
                                            </td>
                                            <td>
                                                {% if platform.platformStatus is defined %}
                                                    {{ platform.platformStatus }}
                                                {% endif %}
                                            </td>
                                            <td><button class=\"btn btn-default btn-sm\" onClick=\"openDetailWindow(Routing.generate('_platform_detail', {id: {{ platform.id }} }))\" role=\"button\"><i class=\"fa fa-folder\"></i></button></td>
                                        </tr>
                                    {% endfor %}
                                {% endif %}
                            </tbody>
                        </table>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"users_comments\">
                        <table id=\"commentTable\" class=\"table table-striped table-bordered dt-responsive hover\" width=\"100%\" cellspacing=\"0\">
                            <thead>
                                <tr>
                                    <th>Source</th>
                                    <th>Comment</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% if data['userComments'] is defined %}
                                    {% for comment in data['userComments'] %}
                                        <tr>
                                            <td>{{ comment.user }}</td>
                                            <td>{{ comment.content }}</td>
                                            <td>{{ comment.date }}</td>
                                        </tr>
                                    {% endfor %}
                                {% endif %}
                            </tbody>
                        </table>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"add_comment\">
                        <form role=\"form\" id=\"commentForm\" method=\"post\">
                            <div class=\"form-group\">
                                <label>My comment</label><br>
                                <textarea class=\"form-control\" placeholder=\"Enter your comment here...\" row=\"1\" name=\"add_comment_comment\" id=\"add_comment_comment\" style=\"resize: none\">

                                </textarea>
                            </div>
                            <div class=\"box-footer\">
                                <button id=\"add_comment_btn\" type=\"submit\" class=\"btn btn-primary pull-right\">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>                   
            </div>
            <input id=\"id\" type=\"text\" style=\"display: none\" value=\"{{ data['id'] }}\">
        </div>
    </div>
{% endblock %}

{% block modal %}
    <!-- Modal -->
    <div class=\"modal fade\" id=\"tender_edit_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit_tender_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Edit tender</h3>
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
                    <form role=\"form\" id=\"edit_tender_form\" method=\"post\">
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
                            <input id=\"hiddenId\" type=\"text\" value=\"{{ data['id'] }}\" style=\"display: none\"/>
                            
                            <div class=\"tab-content\">
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab1\">
                                    <div class=\"form-group\">
                                        <label>Tender Name</label><br>
                                        <input type=\"text\" name=\"edit_tender_name\" id=\"edit_tender_name\" class=\"select2 form-control\" placeholder=\"Edit tender name...\" required>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Oil Company</label><br>
                                        <select name=\"edit_tender_oil_company\" id=\"edit_tender_oil_company\" class=\"select2 form-control\" title=\"Edit oil company...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Country</label><br>
                                        <select name=\"edit_tender_country[]\" id=\"edit_tender_country\" class=\"select2 form-control\" title=\"Edit country...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Base</label><br>
                                        <select name=\"edit_tender_base\" id=\"edit_tender_base\" class=\"select2 form-control\" title=\"Edit operational base...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Importance</label><br>
                                        <input type=\"range\" class=\"slider\" id=\"edit_tender_level\" name=\"edit_tender_level\" step=\"1\" min=\"0\" max=\"4\">
                                        <h4 id=\"rangeText\" class=\"text-center\"></h4>
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab2\">
                                    <div class=\"form-group\">
                                        <label>Category of Helicopter</label><br>
                                        <select name=\"edit_tender_helicopter_category[]\" id=\"edit_tender_helicopter_category\" class=\"select2 form-control\" title=\"Edit category of helicopter...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Quantity of Helicopters</label><br>
                                        <div id=\"edit_tender_helicopter_quantity\">

                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Platforms</label><br>
                                        <select name=\"edit_tender_platforms[]\" id=\"edit_tender_platforms\" class=\"select2 form-control\" multiple title=\"Edit platforms by choosing different ones...\">
                                        </select>
                                    </div>
                                    <div class=\"form-group\" id=\"edit_tender_mission\">
                                        <label>Mission</label>
                                        <input type=\"hidden\" id=\"edit_tender_mission_order\" name=\"edit_tender_mission_order\" autocomplete=\"off\">
                                        <ol id=\"platforms_sortable\">

                                        </ol>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>
                                            <input type=\"checkbox\" class=\"icheck\" name=\"edit_tender_remove_mission\" autocomplete=\"off\"> Remove current mission ?
                                        </label>
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab3\">
                                    <div class=\"form-group\">
                                        <label>Tender Status</label><br>
                                        <select name=\"edit_tender_status\" id=\"edit_tender_status\" class=\"select2 form-control\" title=\"Edit current tender status...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Out</label><br>
                                        <input type=\"text\" name=\"edit_tender_tender_out\" id=\"edit_tender_tender_out\" class=\"form-control datepicker\" placeholder=\"Edit tender out date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Closure</label><br>
                                        <input type=\"text\" name=\"edit_tender_tender_closure\" id=\"edit_tender_tender_closure\" class=\"form-control datepicker\" placeholder=\"Edit tender closure date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Awarded</label><br>
                                        <input type=\"text\" name=\"edit_tender_awarded\" id=\"edit_tender_awarded\" class=\"form-control datepicker\" placeholder=\"Edit tender award date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Operations Start</label><br>
                                        <input type=\"text\" name=\"edit_tender_operations_start\" id=\"edit_tender_operations_start\" class=\"form-control datepicker\" placeholder=\"Edit tender helicopter operations start date...\">
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"tab4\">
                                    <div class=\"form-group\">
                                        <label for=\"edit_tender_summary\">Two-lines summary</label>
                                        <textarea id=\"edit_tender_summary\" name=\"edit_tender_summary\" type=\"text\" row=\"3\" class=\"form-control\" placeholder=\"Edit 2-lines summary for the tender...\" style=\"resize: none\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_tender_comment\">Comment</label>
                                        <textarea id=\"edit_tender_comment\" name=\"edit_tender_comment\" type=\"text\" row=\"1\" class=\"form-control\" placeholder=\"Edit comment for the tender...\" style=\"resize: none; height: 200px\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_tender_confidential_link\">Confidential Link</label>
                                        <input type=\"text\" name=\"edit_tender_confidential_link\" id=\"edit_tender_confidential_link\" class=\"form-control\" placeholder=\"Edit link pointing to the hub...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_tender_external_link\">External Link</label>
                                        <input type=\"text\" name=\"edit_tender_external_link\" id=\"edit_tender_external_link\" class=\"form-control\" placeholder=\"Edit link pointing to an external source...\">
                                    </div>
                                </div>
                                <ul class=\"pager wizard\">
                                    <li class=\"previous\"><a href=\"javascript:;\">Previous</a></li>
                                    <li class=\"next\"><a href=\"javascript:;\">Next</a></li>
                                    <li class=\"next finish\" style=\"display:none;\"><a href=\"javascript:;\">Save</a></li>
                                </ul>
                            </div>\t
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
    <!-- /Modal -->
    
    <div class=\"modal fade\" id=\"tender_upgrade_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"tender_project_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Upgrade tender to contract</h3>
                </div>
                <div class=\"modal-body\">
                    <form role=\"form\" id=\"upgrade_tender_form\" method=\"post\">
                        <div id=\"upgradeTenderFormContent\">
                            
                            <div class=\"nav-tabs-custom\">
                                <ul class=\"nav nav-tabs\" role=\"tablist\">
                                    <li><a href=\"#upgrade1\" data-toggle=\"tab\">1. Localisation</a></li>
                                    <li><a href=\"#upgrade2\" data-toggle=\"tab\">2. Timing</a></li>
                                    <li><a href=\"#upgrade3\" data-toggle=\"tab\">3. Description</a></li>
                                </ul>
                            </div>
                            <div class=\"progress active\">
                                <div class=\"progress-bar progress-bar-striped\" id=\"upgrade_bar\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
                                </div>
                            </div>
                            
                            <div class=\"tab-content\">
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"upgrade1\">
                                    <div class=\"form-group has-error\">
                                        <label>Operator Group</label><br>
                                        <select name=\"upgrade_tender_operator_group\" id=\"upgrade_tender_operator_group\" class=\"select2 form-control\" title=\"Choose an oil company...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Platforms</label><br>
                                        <select name=\"upgrade_tender_platforms[]\" id=\"upgrade_tender_platforms\" class=\"form-control select2\" multiple title=\"Choose one or more platforms...\">
                                        </select>
                                    </div>
                                    <div class=\"form-group\" id=\"upgrade_tender_mission\">
                                        <label>Mission</label>
                                        <input type=\"hidden\" id=\"upgrade_tender_mission_order\" name=\"upgrade_tender_mission_order\" autocomplete=\"off\">
                                        <ol id=\"platforms_sortable\">

                                        </ol>
                                    </div>
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"upgrade2\">
                                    <div class=\"form-group has-error\">
                                        <label>Contract Status</label><br>
                                        <select name=\"upgrade_tender_status\" id=\"upgrade_tender_status\" class=\"form-control select2\" title=\"Choose the current tender status...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Contract Start Date</label><br>
                                        <input type=\"text\" name=\"upgrade_tender_contract_start_year\" id=\"upgrade_tender_contract_start_year\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Contract End Date</label><br>
                                        <input type=\"text\" name=\"upgrade_tender_contract_end_year\" id=\"upgrade_tender_contract_end_year\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"upgrade3\">
                                    <div class=\"form-group\">
                                        <label for=\"upgrade_tender_summary\">Two-lines summary</label>
                                        <textarea id=\"upgrade_tender_summary\" name=\"upgrade_tender_summary\" type=\"text\" row=\"3\" class=\"form-control\" placeholder=\"Update the 2-lines summary for the project...\" style=\"resize: none\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"upgrade_tender_comment\">Comment</label>
                                        <textarea id=\"upgrade_tender_comment\" name=\"upgrade_tender_comment\" type=\"text\" row=\"1\" class=\"form-control\" placeholder=\"Update comment for the project...\" style=\"resize: none; height: 300px\"></textarea>
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
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/contract/js/tenderDetailModule.js') }}\"></script>
{% endblock %}
", "ContractBundle::tenderDetail.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/ContractBundle/Resources/views/tenderDetail.html.twig");
    }
}
