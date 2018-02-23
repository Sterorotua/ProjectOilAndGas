<?php

/* ContractBundle::contractDetail.html.twig */
class __TwigTemplate_a2a498fa465a50655f3cc62b55274d8ae23d07979d4cb6656405fc082d009a98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "ContractBundle::contractDetail.html.twig", 1);
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
        $__internal_d2819ba09a8b9513e4d68a85559fe058111eb8a23a7c2add271c7259f048c48f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2819ba09a8b9513e4d68a85559fe058111eb8a23a7c2add271c7259f048c48f->enter($__internal_d2819ba09a8b9513e4d68a85559fe058111eb8a23a7c2add271c7259f048c48f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContractBundle::contractDetail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2819ba09a8b9513e4d68a85559fe058111eb8a23a7c2add271c7259f048c48f->leave($__internal_d2819ba09a8b9513e4d68a85559fe058111eb8a23a7c2add271c7259f048c48f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_116b57ca5c57882bc4479320d168444f864c99d9abab3c326181a0ca9387371d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116b57ca5c57882bc4479320d168444f864c99d9abab3c326181a0ca9387371d->enter($__internal_116b57ca5c57882bc4479320d168444f864c99d9abab3c326181a0ca9387371d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name", array(), "array"), "html", null, true);
        
        $__internal_116b57ca5c57882bc4479320d168444f864c99d9abab3c326181a0ca9387371d->leave($__internal_116b57ca5c57882bc4479320d168444f864c99d9abab3c326181a0ca9387371d_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_8df194ba8973bab7ce9443d8e392cb7d362525e3534524ec24478612a6fd513f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8df194ba8973bab7ce9443d8e392cb7d362525e3534524ec24478612a6fd513f->enter($__internal_8df194ba8973bab7ce9443d8e392cb7d362525e3534524ec24478612a6fd513f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/css/helicoptr.css"), "html", null, true);
        echo "\">
";
        
        $__internal_8df194ba8973bab7ce9443d8e392cb7d362525e3534524ec24478612a6fd513f->leave($__internal_8df194ba8973bab7ce9443d8e392cb7d362525e3534524ec24478612a6fd513f_prof);

    }

    // line 10
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_0a0db127b5ea5d594273a369140d61a52ea2792a3c3ccba8dae500a8cce844a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0db127b5ea5d594273a369140d61a52ea2792a3c3ccba8dae500a8cce844a4->enter($__internal_0a0db127b5ea5d594273a369140d61a52ea2792a3c3ccba8dae500a8cce844a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 11
        echo "    <h1>#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array(), "array"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name", array(), "array"), "html", null, true);
        echo "</h1>
    <div class=\"breadcrumb btn-group\">
        <button id=\"edit_contract_btn\" type=\"button\" class=\"btn btn-primary btn-flat btn-xs\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#contract_edit_modal\">
            <i class=\"fa fa-edit\"></i>
            Edit
        </button>
        <button id=\"archive_contract_btn\" type=\"button\" class=\"btn btn-warning btn-flat btn-xs\">
            <i class=\"fa fa-archive\"></i>
            Archive
        </button>
        ";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "            <button type=\"button\" id=\"delete_project_btn\" class=\"btn btn-danger btn-flat btn-xs\">
                <i class=\"fa fa-trash\"></i>
                Delete
            </button>
        ";
        }
        // line 27
        echo "    </div>
";
        
        $__internal_0a0db127b5ea5d594273a369140d61a52ea2792a3c3ccba8dae500a8cce844a4->leave($__internal_0a0db127b5ea5d594273a369140d61a52ea2792a3c3ccba8dae500a8cce844a4_prof);

    }

    // line 30
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_009bbac2f6f6d68161c3c71bb28f3a21d454abfcc65e35e59cdb152f0f748bb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009bbac2f6f6d68161c3c71bb28f3a21d454abfcc65e35e59cdb152f0f748bb5->enter($__internal_009bbac2f6f6d68161c3c71bb28f3a21d454abfcc65e35e59cdb152f0f748bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 31
        echo "
    <div class=\"row\">
        <div class=\"col-md-3 col-sm-6 col-xs-12\">
            
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-navy\">
                    <i class=\"icon-helico1\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Operator</span>
                    <span class=\"info-box-number\">
                        ";
        // line 42
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "operator", array(), "array", true, true)) {
            // line 43
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "operator", array(), "array"), "html", null, true);
            echo "
                        ";
        }
        // line 45
        echo "                    </span>
                </div>
            </div>
                    
        </div>
                    
        <div class=\"col-md-3 col-sm-6 col-xs-12\">           
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-light-blue\">
                    <i class=\"icon-platform\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Oil Company</span>
                    <span class=\"info-box-number\">
                        ";
        // line 59
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "oilCompany", array(), "array", true, true)) {
            // line 60
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "oilCompany", array(), "array"), "html", null, true);
            echo "
                        ";
        }
        // line 62
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
        // line 75
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "base", array(), "array", true, true)) {
            // line 76
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "base", array(), "array"), "name", array()), "html", null, true);
            echo "
                        ";
        }
        // line 78
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
        // line 91
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array", true, true)) {
            // line 92
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "country", array(), "array"), "html", null, true);
            echo "
                        ";
        }
        // line 94
        echo "                    </span>
                </div>
            </div>
        </div>
    </div>
                    
    <div class=\"row\">
        <!-- Contract Timing -->
        <div class=\"col-md-3\" id=\"importantData\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-light-blue\"><i class=\"fa fa-tag\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Contract Status</span>
                    <span class=\"info-box-number\">";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "status", array(), "array"), "html", null, true);
        echo "</span>
                </div>
            </div>
            ";
        // line 110
        if ((((($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "startYear", array(), "array", true, true) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "contractTiming", array(), "array", true, true)) && (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array")) > 0)) &&  !($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array") === "Unknown")) &&  !($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") === "Uknown"))) {
            // line 111
            echo "                ";
            if ((($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - twig_date_format_filter($this->env, "now", "Y")) < 2)) {
                // line 112
                echo "                    <div class=\"box box-solid box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-bell\"></i> Contract Timing</h3>
                        </div>
                        <div class=\"box-body\">
                            <p><span style=\"font-weight: bold\">Start Year : </span><span class=\"pull-right\">";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array"), "html", null, true);
                echo "</span></p>
                            <p><span style=\"font-weight: bold\">Current Year : </span><span class=\"pull-right\">";
                // line 118
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo "</span></p>
                            <p><span style=\"font-weight: bold\">End Year : </span><span class=\"pull-right\">";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array"), "html", null, true);
                echo "</span></p>
                            <div class=\"progress active\">
                                <div class=\"progress-bar progress-bar-danger progress-bar-striped\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"";
                // line 121
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array")), "html", null, true);
                echo "\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array")), "html", null, true);
                echo "\" style=\"width: ";
                echo twig_escape_filter($this->env, twig_round((((twig_date_format_filter($this->env, "now", "Y") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array")) / ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array"))) * 100)), "html", null, true);
                echo "%\">
                                </div>
                            </div>
                        </div>
                ";
            } elseif ((($this->getAttribute(            // line 125
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - twig_date_format_filter($this->env, "now", "Y")) == 2)) {
                // line 126
                echo "                    <div class=\"box box-solid box-warning\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-warning\"></i> Contract Timing</h3>
                        </div>
                        <div class=\"box-body\">
                            <p><span style=\"font-weight: bold\">Start Year : </span><span class=\"pull-right\">";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array"), "html", null, true);
                echo "</span></p>
                            <p><span style=\"font-weight: bold\">Current Year : </span><span class=\"pull-right\">";
                // line 132
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo "</span></p>
                            <p><span style=\"font-weight: bold\">End Year : </span><span class=\"pull-right\">";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array"), "html", null, true);
                echo "</span></p>
                            <div class=\"progress active\">
                                <div class=\"progress-bar progress-bar-warning progress-bar-striped\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"";
                // line 135
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array")), "html", null, true);
                echo "\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array")), "html", null, true);
                echo "\" style=\"width: ";
                echo twig_escape_filter($this->env, twig_round((((twig_date_format_filter($this->env, "now", "Y") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array")) / ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array"))) * 100)), "html", null, true);
                echo "%\">
                                </div>
                            </div>
                        </div>
                ";
            } elseif ((($this->getAttribute(            // line 139
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - twig_date_format_filter($this->env, "now", "Y")) > 2)) {
                // line 140
                echo "                    <div class=\"box box-solid box-success\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-check\"></i> Contract Timing</h3>
                        </div>
                        <div class=\"box-body\">
                            <p><span style=\"font-weight: bold\">Start Year : </span><span class=\"pull-right\">";
                // line 145
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array"), "html", null, true);
                echo "</span></p>
                            <p><span style=\"font-weight: bold\">Current Year : </span><span class=\"pull-right\">";
                // line 146
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
                echo "</span></p>
                            <p><span style=\"font-weight: bold\">End Year : </span><span class=\"pull-right\">";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array"), "html", null, true);
                echo "</span></p>
                            <div class=\"progress active\">
                                <div class=\"progress-bar progress-bar-success progress-bar-striped\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"";
                // line 149
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array")), "html", null, true);
                echo "\" aria-valuenow=\"";
                echo twig_escape_filter($this->env, (twig_date_format_filter($this->env, "now", "Y") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array")), "html", null, true);
                echo "\" style=\"width: ";
                echo twig_escape_filter($this->env, twig_round((((twig_date_format_filter($this->env, "now", "Y") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array")) / ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array"))) * 100)), "html", null, true);
                echo "%\">
                                </div>
                            </div>
                        </div>
                ";
            }
            // line 154
            echo "                    </div>
            ";
        } else {
            // line 156
            echo "                ";
            if (((($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - twig_date_format_filter($this->env, "now", "Y")) < 2) && (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - twig_date_format_filter($this->env, "now", "Y")) > 0))) {
                // line 157
                echo "                    <div class=\"box box-solid box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-bell\"></i> Contract Timing</h3>
                        </div>
                ";
            } elseif (((($this->getAttribute(            // line 161
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - twig_date_format_filter($this->env, "now", "Y")) == 2) && (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - twig_date_format_filter($this->env, "now", "Y")) > 0))) {
                // line 162
                echo "                    <div class=\"box box-solid box-warning\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-warning\"></i> Contract Timing</h3>
                        </div>
                ";
            } elseif (((($this->getAttribute(            // line 166
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - twig_date_format_filter($this->env, "now", "Y")) > 2) && (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array") - twig_date_format_filter($this->env, "now", "Y")) > 0))) {
                // line 167
                echo "                    <div class=\"box box-solid box-success\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-check\"></i> Contract Timing</h3>
                        </div>
                ";
            } else {
                // line 172
                echo "                    <div class=\"box box-solid box-primary\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-info\"></i> Contract Timing</h3>
                        </div>
                ";
            }
            // line 177
            echo "                        <div class=\"box-body\">
                            <p><span style=\"font-weight: bold\">Start Year : </span><span class=\"pull-right\">";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "startYear", array(), "array"), "html", null, true);
            echo "</span></p>
                            <p><span style=\"font-weight: bold\">Current Year : </span><span class=\"pull-right\">";
            // line 179
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo "</span></p>
                            <p><span style=\"font-weight: bold\">End Year : </span><span class=\"pull-right\">";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "contractTiming", array(), "array"), "html", null, true);
            echo "</span></p>
                        </div>
                    </div>
            ";
        }
        // line 184
        echo "            <div class=\"box box-solid box-primary\">
                <div class=\"box-header with-border\">
                    <i class=\"icon fa fa-folder-open\"></i>
                    <h3 class=\"box-title\">Contracted Helicopter Fleet</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 190
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "helicopters", array(), "array", true, true)) {
            // line 191
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "helicopters", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["helicopter"]) {
                // line 192
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
            // line 194
            echo "                    ";
        }
        // line 195
        echo "                </div>
            </div>
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-navy\">
                    <i class=\"fa fa-flag-checkered\"></i>
                </span>
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
        <!-- /Contract Timing -->
        
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
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "summary", array(), "array"), "html", null, true);
        echo "
                            </small>
                        </blockquote>
                        <blockquote>
                            <label>Initial Comment :</label><br>
                            <small>
                                ";
        // line 250
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "comment", array(), "array", true, true)) {
            // line 251
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "comment", array(), "array"), "html", null, true);
            echo "
                                ";
        }
        // line 253
        echo "                            </small>
                        </blockquote>
                        <blockquote>
                            <label>Renewal Options :</label><br>
                            <small>
                                ";
        // line 258
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "options", array(), "array"), "html", null, true);
        echo "
                            </small>
                        </blockquote>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"links\">
                        <blockquote>
                            <label>Confidential Link :</label><br>
                            <small>
                                <a href=\"#\" onClick=\"window.open('";
        // line 266
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
        // line 272
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
        // line 292
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "mission", array(), "array", true, true)) {
            // line 293
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "mission", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
                // line 294
                echo "                                        <tr>
                                            <td>
                                                ";
                // line 296
                if ($this->getAttribute($context["platform"], "name", array(), "any", true, true)) {
                    // line 297
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "name", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 299
                echo "                                            </td>
                                            <td>
                                                ";
                // line 301
                if ($this->getAttribute($context["platform"], "dValue", array(), "any", true, true)) {
                    // line 302
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "dValue", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 304
                echo "                                            </td>
                                            <td>
                                                ";
                // line 306
                if ($this->getAttribute($context["platform"], "tValue", array(), "any", true, true)) {
                    // line 307
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "tValue", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 309
                echo "                                            </td>
                                            <td>
                                                ";
                // line 311
                if ($this->getAttribute($context["platform"], "bunkedBedNumber", array(), "any", true, true)) {
                    // line 312
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "bunkedBedNumber", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 314
                echo "                                            </td>
                                            <td>
                                                ";
                // line 316
                if ($this->getAttribute($context["platform"], "fieldName", array(), "any", true, true)) {
                    // line 317
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "fieldName", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 319
                echo "                                            </td>
                                            <td>
                                                ";
                // line 321
                if ($this->getAttribute($context["platform"], "block", array(), "any", true, true)) {
                    // line 322
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "block", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 324
                echo "                                            </td>
                                            <td>
                                                ";
                // line 326
                if ($this->getAttribute($context["platform"], "startYear", array(), "any", true, true)) {
                    // line 327
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "startYear", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 329
                echo "                                            </td>
                                            <td>
                                                ";
                // line 331
                if ($this->getAttribute($context["platform"], "platformStatus", array(), "any", true, true)) {
                    // line 332
                    echo "                                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "platformStatus", array()), "html", null, true);
                    echo "
                                                ";
                }
                // line 334
                echo "                                            </td>
                                            <td><button class=\"btn btn-default btn-sm\" onClick=\"openDetailWindow(Routing.generate('_platform_detail', {id: ";
                // line 335
                echo twig_escape_filter($this->env, $this->getAttribute($context["platform"], "id", array()), "html", null, true);
                echo " } ))\" role=\"button\"><i class=\"fa fa-folder\"></i></button></td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "                                ";
        }
        // line 339
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
        // line 352
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userComments", array(), "array", true, true)) {
            // line 353
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userComments", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 354
                echo "                                        <tr>
                                            <td>";
                // line 355
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 356
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 357
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "                                ";
        }
        // line 361
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
        // line 379
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array(), "array"), "html", null, true);
        echo "\">
        </div>
    </div>
";
        
        $__internal_009bbac2f6f6d68161c3c71bb28f3a21d454abfcc65e35e59cdb152f0f748bb5->leave($__internal_009bbac2f6f6d68161c3c71bb28f3a21d454abfcc65e35e59cdb152f0f748bb5_prof);

    }

    // line 384
    public function block_modal($context, array $blocks = array())
    {
        $__internal_4bfe3f2101040425cd5beb3aeba9d5ca4c2458ad6af2c0c924ba864ff2fb4c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bfe3f2101040425cd5beb3aeba9d5ca4c2458ad6af2c0c924ba864ff2fb4c21->enter($__internal_4bfe3f2101040425cd5beb3aeba9d5ca4c2458ad6af2c0c924ba864ff2fb4c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 385
        echo "    <!-- Modal -->
    <div class=\"modal fade\" id=\"contract_edit_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit_contract_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Edit contract</h3>
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
                    <form role=\"form\" id=\"edit_contract_form\" method=\"post\">
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
                            <input id=\"hiddenId\" type=\"text\" value=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array(), "array"), "html", null, true);
        echo "\" style=\"display: none\"/>
                            
                            <div class=\"tab-content\">
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab1\">
                                    <div class=\"form-group\">
                                        <label>Operator</label><br>
                                        <select name=\"edit_contract_operator\" id=\"edit_contract_operator\" class=\"select2 form-control\" title=\"Edit operator...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Oil Company</label><br>
                                        <select name=\"edit_contract_oil_company\" id=\"edit_contract_oil_company\" class=\"select2 form-control\" title=\"Edit oil company...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Country</label><br>
                                        <select name=\"edit_contract_country[]\" id=\"edit_contract_country\" class=\"select2 form-control\" title=\"Edit country...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Base</label><br>
                                        <select name=\"edit_contract_base\" id=\"edit_contract_base\" class=\"select2 form-control\" title=\"Edit operational base...\" required>
                                        </select>
                                    </div>
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab2\">
                                    <div class=\"form-group\">
                                        <label>Helicopter's Manufacturer</label><br>
                                        <select name=\"edit_contract_helicopter_constructor[]\" id=\"edit_contract_helicopter_constructor\" class=\"select2 form-control\" title=\"Edit helicopter's manufacturer(s)...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Category of Helicopter</label><br>
                                        <select name=\"edit_contract_helicopter_category[]\" id=\"edit_contract_helicopter_category\" class=\"select2 form-control\" title=\"Edit category of helicopter...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Type of Helicopter</label><br>
                                        <select name=\"edit_contract_helicopter_type[]\" id=\"edit_contract_helicopter_type\" class=\"select2 form-control\" title=\"Edit type of helicopter...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Quantity of Helicopters</label><br>
                                        <div id=\"edit_contract_helicopter_quantity\">

                                        </div>
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab3\">
                                    <div class=\"form-group\">
                                    <label>Contract Status</label><br>
                                    <select name=\"edit_contract_contract_status\" id=\"edit_contract_contract_status\" class=\"select2 form-control\" title=\"Edit current contract status...\">
                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <label>Contract Start Date</label><br>
                                    <input type=\"text\" name=\"edit_contract_start_date\" id=\"edit_contract_start_date\" class=\"form-control datepicker\" placeholder=\"Edit contract start date...\">
                                </div>
                                <div class=\"form-group\">
                                    <label>Contract End Date</label><br>
                                        <input type=\"text\" name=\"edit_contract_end_date\" id=\"edit_contract_end_date\" class=\"form-control datepicker\" placeholder=\"Edit contract end date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Renewal Options</label><br>
                                        <input type=\"text\" name=\"edit_contract_options\" id=\"edit_contract_options\" class=\"form-control\" placeholder=\"Edit options description (example : '3+1')\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Platforms</label><br>
                                        <select name=\"edit_contract_platforms[]\" id=\"edit_contract_platforms\" class=\"select2 form-control\" multiple title=\"Edit platforms...\">
                                        </select>
                                    </div>
                                    <div class=\"form-group\" id=\"edit_contract_mission\">
                                        <label>Mission</label>
                                        <input type=\"hidden\" id=\"edit_contract_mission_order\" name=\"edit_contract_mission_order\">
                                        <ol id=\"platforms_sortable\">

                                        </ol>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>
                                            <input type=\"checkbox\" class=\"icheck\" name=\"edit_contract_remove_mission\" autocomplete=\"off\"> Remove current mission ?
                                        </label>
                                    </div>
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab4\">
                                    <div class=\"form-group\">
                                        <label for=\"edit_contract_summary\">Two-lines summary</label>
                                        <textarea id=\"edit_contract_summary\" name=\"edit_contract_summary\" type=\"text\" row=\"3\" class=\"form-control\" placeholder=\"Edit the two-lines summary of the contract...\" style=\"resize: none\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_contract_comment\">Comment</label>
                                        <textarea id=\"edit_contract_comment\" name=\"edit_contract_comment\" type=\"text\" row=\"1\" class=\"form-control\" placeholder=\"Edit comment of the contract...\" style=\"resize: none; height: 200px\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_contract_confidential_link\">Confidential Link</label>
                                        <input type=\"text\" name=\"edit_contract_confidential_link\" id=\"edit_contract_confidential_link\" class=\"form-control\" placeholder=\"Paste link pointing to the hub...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_contract_external_link\">External Link</label>
                                        <input type=\"text\" name=\"edit_contract_external_link\" id=\"edit_contract_external_link\" class=\"form-control\" placeholder=\"Paste link pointing to an external source...\">
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
        
        $__internal_4bfe3f2101040425cd5beb3aeba9d5ca4c2458ad6af2c0c924ba864ff2fb4c21->leave($__internal_4bfe3f2101040425cd5beb3aeba9d5ca4c2458ad6af2c0c924ba864ff2fb4c21_prof);

    }

    // line 538
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aaf3390411c6958650c691694e5b38c1a9d6877629db06550458ef8ac2ecf8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaf3390411c6958650c691694e5b38c1a9d6877629db06550458ef8ac2ecf8f3->enter($__internal_aaf3390411c6958650c691694e5b38c1a9d6877629db06550458ef8ac2ecf8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 539
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/contract/js/contractDetailModule.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_aaf3390411c6958650c691694e5b38c1a9d6877629db06550458ef8ac2ecf8f3->leave($__internal_aaf3390411c6958650c691694e5b38c1a9d6877629db06550458ef8ac2ecf8f3_prof);

    }

    public function getTemplateName()
    {
        return "ContractBundle::contractDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  910 => 540,  905 => 539,  899 => 538,  774 => 419,  738 => 385,  732 => 384,  721 => 379,  701 => 361,  698 => 360,  689 => 357,  685 => 356,  681 => 355,  678 => 354,  673 => 353,  671 => 352,  656 => 339,  653 => 338,  644 => 335,  641 => 334,  635 => 332,  633 => 331,  629 => 329,  623 => 327,  621 => 326,  617 => 324,  611 => 322,  609 => 321,  605 => 319,  599 => 317,  597 => 316,  593 => 314,  587 => 312,  585 => 311,  581 => 309,  575 => 307,  573 => 306,  569 => 304,  563 => 302,  561 => 301,  557 => 299,  551 => 297,  549 => 296,  545 => 294,  540 => 293,  538 => 292,  513 => 272,  502 => 266,  491 => 258,  484 => 253,  478 => 251,  476 => 250,  467 => 244,  416 => 195,  413 => 194,  402 => 192,  397 => 191,  395 => 190,  387 => 184,  380 => 180,  376 => 179,  372 => 178,  369 => 177,  362 => 172,  355 => 167,  353 => 166,  347 => 162,  345 => 161,  339 => 157,  336 => 156,  332 => 154,  320 => 149,  315 => 147,  311 => 146,  307 => 145,  300 => 140,  298 => 139,  287 => 135,  282 => 133,  278 => 132,  274 => 131,  267 => 126,  265 => 125,  254 => 121,  249 => 119,  245 => 118,  241 => 117,  234 => 112,  231 => 111,  229 => 110,  223 => 107,  208 => 94,  202 => 92,  200 => 91,  185 => 78,  179 => 76,  177 => 75,  162 => 62,  156 => 60,  154 => 59,  138 => 45,  132 => 43,  130 => 42,  117 => 31,  111 => 30,  103 => 27,  96 => 22,  94 => 21,  78 => 11,  72 => 10,  63 => 7,  58 => 6,  52 => 5,  39 => 3,  11 => 1,);
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
        <button id=\"edit_contract_btn\" type=\"button\" class=\"btn btn-primary btn-flat btn-xs\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#contract_edit_modal\">
            <i class=\"fa fa-edit\"></i>
            Edit
        </button>
        <button id=\"archive_contract_btn\" type=\"button\" class=\"btn btn-warning btn-flat btn-xs\">
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
                <span class=\"info-box-icon bg-navy\">
                    <i class=\"icon-helico1\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Operator</span>
                    <span class=\"info-box-number\">
                        {% if data['operator'] is defined %}
                            {{ data['operator'] }}
                        {% endif %}
                    </span>
                </div>
            </div>
                    
        </div>
                    
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
    </div>
                    
    <div class=\"row\">
        <!-- Contract Timing -->
        <div class=\"col-md-3\" id=\"importantData\">
            <div class=\"info-box\">
                <span class=\"info-box-icon bg-light-blue\"><i class=\"fa fa-tag\"></i></span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Contract Status</span>
                    <span class=\"info-box-number\">{{ data['status'] }}</span>
                </div>
            </div>
            {% if data['startYear'] is defined and data['contractTiming'] is defined and (data['contractTiming']-data['startYear']) > 0 and data['startYear'] is not sameas(\"Unknown\") and data['contractTiming'] is not sameas(\"Uknown\") %}
                {% if (data['contractTiming']-\"now\"|date(\"Y\")) < 2 %}
                    <div class=\"box box-solid box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-bell\"></i> Contract Timing</h3>
                        </div>
                        <div class=\"box-body\">
                            <p><span style=\"font-weight: bold\">Start Year : </span><span class=\"pull-right\">{{ data['startYear'] }}</span></p>
                            <p><span style=\"font-weight: bold\">Current Year : </span><span class=\"pull-right\">{{ \"now\"|date(\"Y\") }}</span></p>
                            <p><span style=\"font-weight: bold\">End Year : </span><span class=\"pull-right\">{{ data['contractTiming'] }}</span></p>
                            <div class=\"progress active\">
                                <div class=\"progress-bar progress-bar-danger progress-bar-striped\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"{{ data['contractTiming']-data['startYear'] }}\" aria-valuenow=\"{{ (\"now\"|date(\"Y\"))-data['startYear'] }}\" style=\"width: {{ (((\"now\"|date(\"Y\"))-data['startYear']) / (data['contractTiming']-data['startYear']) * 100)|round }}%\">
                                </div>
                            </div>
                        </div>
                {% elseif (data['contractTiming']-\"now\"|date(\"Y\")) == 2 %}
                    <div class=\"box box-solid box-warning\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-warning\"></i> Contract Timing</h3>
                        </div>
                        <div class=\"box-body\">
                            <p><span style=\"font-weight: bold\">Start Year : </span><span class=\"pull-right\">{{ data['startYear'] }}</span></p>
                            <p><span style=\"font-weight: bold\">Current Year : </span><span class=\"pull-right\">{{ \"now\"|date(\"Y\") }}</span></p>
                            <p><span style=\"font-weight: bold\">End Year : </span><span class=\"pull-right\">{{ data['contractTiming'] }}</span></p>
                            <div class=\"progress active\">
                                <div class=\"progress-bar progress-bar-warning progress-bar-striped\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"{{ data['contractTiming']-data['startYear'] }}\" aria-valuenow=\"{{ (\"now\"|date(\"Y\"))-data['startYear'] }}\" style=\"width: {{ (((\"now\"|date(\"Y\"))-data['startYear']) / (data['contractTiming']-data['startYear']) * 100)|round }}%\">
                                </div>
                            </div>
                        </div>
                {% elseif (data['contractTiming']-\"now\"|date(\"Y\")) > 2 %}
                    <div class=\"box box-solid box-success\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-check\"></i> Contract Timing</h3>
                        </div>
                        <div class=\"box-body\">
                            <p><span style=\"font-weight: bold\">Start Year : </span><span class=\"pull-right\">{{ data['startYear'] }}</span></p>
                            <p><span style=\"font-weight: bold\">Current Year : </span><span class=\"pull-right\">{{ \"now\"|date(\"Y\") }}</span></p>
                            <p><span style=\"font-weight: bold\">End Year : </span><span class=\"pull-right\">{{ data['contractTiming'] }}</span></p>
                            <div class=\"progress active\">
                                <div class=\"progress-bar progress-bar-success progress-bar-striped\" role=\"progressbar\" aria-valuemin=\"0\" aria-valuemax=\"{{ data['contractTiming']-data['startYear'] }}\" aria-valuenow=\"{{ (\"now\"|date(\"Y\"))-data['startYear'] }}\" style=\"width: {{ (((\"now\"|date(\"Y\"))-data['startYear']) / (data['contractTiming']-data['startYear']) * 100)|round }}%\">
                                </div>
                            </div>
                        </div>
                {% endif %}
                    </div>
            {% else %}
                {% if (data['contractTiming']-\"now\"|date(\"Y\")) < 2 and (data['contractTiming']-\"now\"|date(\"Y\")) > 0 %}
                    <div class=\"box box-solid box-danger\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-bell\"></i> Contract Timing</h3>
                        </div>
                {% elseif (data['contractTiming']-\"now\"|date(\"Y\")) == 2 and (data['contractTiming']-\"now\"|date(\"Y\")) > 0 %}
                    <div class=\"box box-solid box-warning\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-warning\"></i> Contract Timing</h3>
                        </div>
                {% elseif (data['contractTiming']-\"now\"|date(\"Y\")) > 2 and (data['contractTiming']-\"now\"|date(\"Y\")) > 0 %}
                    <div class=\"box box-solid box-success\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-check\"></i> Contract Timing</h3>
                        </div>
                {% else %}
                    <div class=\"box box-solid box-primary\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\"><i class=\"icon fa fa-info\"></i> Contract Timing</h3>
                        </div>
                {% endif %}
                        <div class=\"box-body\">
                            <p><span style=\"font-weight: bold\">Start Year : </span><span class=\"pull-right\">{{ data['startYear'] }}</span></p>
                            <p><span style=\"font-weight: bold\">Current Year : </span><span class=\"pull-right\">{{ \"now\"|date(\"Y\") }}</span></p>
                            <p><span style=\"font-weight: bold\">End Year : </span><span class=\"pull-right\">{{ data['contractTiming'] }}</span></p>
                        </div>
                    </div>
            {% endif %}
            <div class=\"box box-solid box-primary\">
                <div class=\"box-header with-border\">
                    <i class=\"icon fa fa-folder-open\"></i>
                    <h3 class=\"box-title\">Contracted Helicopter Fleet</h3>
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
                <span class=\"info-box-icon bg-navy\">
                    <i class=\"fa fa-flag-checkered\"></i>
                </span>
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
        <!-- /Contract Timing -->
        
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
                        <blockquote>
                            <label>Renewal Options :</label><br>
                            <small>
                                {{ data['options'] }}
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
                                            <td><button class=\"btn btn-default btn-sm\" onClick=\"openDetailWindow(Routing.generate('_platform_detail', {id: {{ platform.id}} } ))\" role=\"button\"><i class=\"fa fa-folder\"></i></button></td>
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
    <div class=\"modal fade\" id=\"contract_edit_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit_contract_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Edit contract</h3>
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
                    <form role=\"form\" id=\"edit_contract_form\" method=\"post\">
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
                            <input id=\"hiddenId\" type=\"text\" value=\"{{ data['id'] }}\" style=\"display: none\"/>
                            
                            <div class=\"tab-content\">
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab1\">
                                    <div class=\"form-group\">
                                        <label>Operator</label><br>
                                        <select name=\"edit_contract_operator\" id=\"edit_contract_operator\" class=\"select2 form-control\" title=\"Edit operator...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Oil Company</label><br>
                                        <select name=\"edit_contract_oil_company\" id=\"edit_contract_oil_company\" class=\"select2 form-control\" title=\"Edit oil company...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Country</label><br>
                                        <select name=\"edit_contract_country[]\" id=\"edit_contract_country\" class=\"select2 form-control\" title=\"Edit country...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Base</label><br>
                                        <select name=\"edit_contract_base\" id=\"edit_contract_base\" class=\"select2 form-control\" title=\"Edit operational base...\" required>
                                        </select>
                                    </div>
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab2\">
                                    <div class=\"form-group\">
                                        <label>Helicopter's Manufacturer</label><br>
                                        <select name=\"edit_contract_helicopter_constructor[]\" id=\"edit_contract_helicopter_constructor\" class=\"select2 form-control\" title=\"Edit helicopter's manufacturer(s)...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Category of Helicopter</label><br>
                                        <select name=\"edit_contract_helicopter_category[]\" id=\"edit_contract_helicopter_category\" class=\"select2 form-control\" title=\"Edit category of helicopter...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Type of Helicopter</label><br>
                                        <select name=\"edit_contract_helicopter_type[]\" id=\"edit_contract_helicopter_type\" class=\"select2 form-control\" title=\"Edit type of helicopter...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Quantity of Helicopters</label><br>
                                        <div id=\"edit_contract_helicopter_quantity\">

                                        </div>
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab3\">
                                    <div class=\"form-group\">
                                    <label>Contract Status</label><br>
                                    <select name=\"edit_contract_contract_status\" id=\"edit_contract_contract_status\" class=\"select2 form-control\" title=\"Edit current contract status...\">
                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <label>Contract Start Date</label><br>
                                    <input type=\"text\" name=\"edit_contract_start_date\" id=\"edit_contract_start_date\" class=\"form-control datepicker\" placeholder=\"Edit contract start date...\">
                                </div>
                                <div class=\"form-group\">
                                    <label>Contract End Date</label><br>
                                        <input type=\"text\" name=\"edit_contract_end_date\" id=\"edit_contract_end_date\" class=\"form-control datepicker\" placeholder=\"Edit contract end date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Renewal Options</label><br>
                                        <input type=\"text\" name=\"edit_contract_options\" id=\"edit_contract_options\" class=\"form-control\" placeholder=\"Edit options description (example : '3+1')\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Platforms</label><br>
                                        <select name=\"edit_contract_platforms[]\" id=\"edit_contract_platforms\" class=\"select2 form-control\" multiple title=\"Edit platforms...\">
                                        </select>
                                    </div>
                                    <div class=\"form-group\" id=\"edit_contract_mission\">
                                        <label>Mission</label>
                                        <input type=\"hidden\" id=\"edit_contract_mission_order\" name=\"edit_contract_mission_order\">
                                        <ol id=\"platforms_sortable\">

                                        </ol>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>
                                            <input type=\"checkbox\" class=\"icheck\" name=\"edit_contract_remove_mission\" autocomplete=\"off\"> Remove current mission ?
                                        </label>
                                    </div>
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab4\">
                                    <div class=\"form-group\">
                                        <label for=\"edit_contract_summary\">Two-lines summary</label>
                                        <textarea id=\"edit_contract_summary\" name=\"edit_contract_summary\" type=\"text\" row=\"3\" class=\"form-control\" placeholder=\"Edit the two-lines summary of the contract...\" style=\"resize: none\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_contract_comment\">Comment</label>
                                        <textarea id=\"edit_contract_comment\" name=\"edit_contract_comment\" type=\"text\" row=\"1\" class=\"form-control\" placeholder=\"Edit comment of the contract...\" style=\"resize: none; height: 200px\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_contract_confidential_link\">Confidential Link</label>
                                        <input type=\"text\" name=\"edit_contract_confidential_link\" id=\"edit_contract_confidential_link\" class=\"form-control\" placeholder=\"Paste link pointing to the hub...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_contract_external_link\">External Link</label>
                                        <input type=\"text\" name=\"edit_contract_external_link\" id=\"edit_contract_external_link\" class=\"form-control\" placeholder=\"Paste link pointing to an external source...\">
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
    <script src=\"{{ asset('bundles/contract/js/contractDetailModule.js') }}\"></script>
{% endblock %}
", "ContractBundle::contractDetail.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/ContractBundle/Resources/views/contractDetail.html.twig");
    }
}
