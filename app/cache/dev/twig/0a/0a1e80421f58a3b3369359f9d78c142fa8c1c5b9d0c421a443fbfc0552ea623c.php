<?php

/* ContractBundle::projectDetail.html.twig */
class __TwigTemplate_7e6ffb211f8eb91f282a132e94fcde538933e8a134e0ab11e4d5025ea7fd42de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "ContractBundle::projectDetail.html.twig", 1);
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
        $__internal_6632eb5720dedeafe56c2a313fa0a325a86738446b89c6da2ff37d777aab1d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6632eb5720dedeafe56c2a313fa0a325a86738446b89c6da2ff37d777aab1d70->enter($__internal_6632eb5720dedeafe56c2a313fa0a325a86738446b89c6da2ff37d777aab1d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContractBundle::projectDetail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6632eb5720dedeafe56c2a313fa0a325a86738446b89c6da2ff37d777aab1d70->leave($__internal_6632eb5720dedeafe56c2a313fa0a325a86738446b89c6da2ff37d777aab1d70_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4ec7d50302de97ed308fcc654cb748e551514bb75c7c3492b15997ffe65d718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ec7d50302de97ed308fcc654cb748e551514bb75c7c3492b15997ffe65d718->enter($__internal_f4ec7d50302de97ed308fcc654cb748e551514bb75c7c3492b15997ffe65d718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name", array(), "array"), "html", null, true);
        
        $__internal_f4ec7d50302de97ed308fcc654cb748e551514bb75c7c3492b15997ffe65d718->leave($__internal_f4ec7d50302de97ed308fcc654cb748e551514bb75c7c3492b15997ffe65d718_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_9887b773d96511e6ed307fc018b4e175d8eb1aad1277b9ffa877f7c190c633de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9887b773d96511e6ed307fc018b4e175d8eb1aad1277b9ffa877f7c190c633de->enter($__internal_9887b773d96511e6ed307fc018b4e175d8eb1aad1277b9ffa877f7c190c633de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/css/helicoptr.css"), "html", null, true);
        echo "\">
";
        
        $__internal_9887b773d96511e6ed307fc018b4e175d8eb1aad1277b9ffa877f7c190c633de->leave($__internal_9887b773d96511e6ed307fc018b4e175d8eb1aad1277b9ffa877f7c190c633de_prof);

    }

    // line 10
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_8eb7c9bb4d270db51325568d32c789d11ea0e4b0fb2f04839eb7f8d7baee63d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb7c9bb4d270db51325568d32c789d11ea0e4b0fb2f04839eb7f8d7baee63d5->enter($__internal_8eb7c9bb4d270db51325568d32c789d11ea0e4b0fb2f04839eb7f8d7baee63d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 11
        echo "    <h1>#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array(), "array"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name", array(), "array"), "html", null, true);
        echo "</h1>
    <div class=\"breadcrumb btn-group\">
        <button id=\"upgrade_project_btn\" type=\"button\" class=\"btn btn-success btn-flat btn-xs\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#project_upgrade_modal\">
            <i class=\"fa fa-arrow-circle-o-up\"></i>
            Upgrade
        </button>
        <button id=\"edit_project_btn\" type=\"button\" class=\"btn btn-primary btn-flat btn-xs\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#project_edit_modal\">
            <i class=\"fa fa-edit\"></i>
            Edit
        </button>
        <button id=\"archive_project_btn\" type=\"button\" class=\"btn btn-warning btn-flat btn-xs\">
            <i class=\"fa fa-archive\"></i>
            Archive
        </button>
        ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "            <button id=\"delete_project_btn\" type=\"button\" class=\"btn btn-danger btn-flat btn-xs\">
                <i class=\"fa fa-trash\"></i>
                Delete
            </button>
        ";
        }
        // line 31
        echo "    </div>
";
        
        $__internal_8eb7c9bb4d270db51325568d32c789d11ea0e4b0fb2f04839eb7f8d7baee63d5->leave($__internal_8eb7c9bb4d270db51325568d32c789d11ea0e4b0fb2f04839eb7f8d7baee63d5_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_025f1817419cff1d7ebf78a0a21eccf17eaf063b0bf52abdfac183ff1a64c5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025f1817419cff1d7ebf78a0a21eccf17eaf063b0bf52abdfac183ff1a64c5bc->enter($__internal_025f1817419cff1d7ebf78a0a21eccf17eaf063b0bf52abdfac183ff1a64c5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
                <span class=\"info-box-icon bg-gray\">
                    <i class=\"fa fa-globe\"></i>
                </span>
                <div class=\"info-box-content\">
                    <span class=\"info-box-text\">Country</span>
                    <span class=\"info-box-number\">
                        ";
        // line 78
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "country", array(), "array", true, true)) {
            // line 79
            echo "                            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "country", array(), "array"), "html", null, true);
            echo "
                        ";
        }
        // line 81
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
                    <span class=\"info-box-text\">Project Stage</span>
                    <span class=\"info-box-number\">";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "status", array(), "array"), "html", null, true);
        echo "</span>
                </div>
            </div>
        </div>
    </div>
                    
    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 101
        if (( !(twig_date_format_filter($this->env, "now", "Y") === "Unknown") &&  !($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "projectTiming", array(), "array") === "Unknown"))) {
            // line 102
            echo "                ";
            if ((($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "projectTiming", array(), "array") - twig_date_format_filter($this->env, "now", "Y")) > 0)) {
                // line 103
                echo "                    ";
                if ((($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "projectTiming", array(), "array") - twig_date_format_filter($this->env, "now", "Y")) < 2)) {
                    // line 104
                    echo "                        <div class=\"box box-solid box-danger\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">
                                    <i class=\"icon fa fa-bell\"></i> Project Evolution Review
                                </h3>
                            </div>
                    ";
                } elseif ((($this->getAttribute(                // line 110
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "projectTiming", array(), "array") - twig_date_format_filter($this->env, "now", "Y")) == 2)) {
                    // line 111
                    echo "                        <div class=\"box box-solid box-warning\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">
                                    <i class=\"icon fa fa-warning\"></i> Project Evolution Review
                                </h3>
                            </div>
                    ";
                } else {
                    // line 118
                    echo "                        <div class=\"box box-solid box-success\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">
                                    <i class=\"icon fa fa-check\"></i> Project Evolution Review
                                </h3>
                            </div>
                    ";
                }
                // line 124
                echo "                     
                ";
            } else {
                // line 126
                echo "                    <div class=\"box box-solid box-primary\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                <i class=\"icon fa fa-info\"></i> Project Evolution Review
                            </h3>
                        </div>

                ";
            }
            // line 134
            echo "            ";
        } else {
            // line 135
            echo "                <div class=\"box box-solid box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            <i class=\"icon fa fa-info\"></i> Project Evolution Review
                        </h3>
                    </div>
            ";
        }
        // line 142
        echo "                    <div class=\"box-body\">
                        <p>
                            <span style=\"font-weight: bold\">Geophysics Date :</span> 
                            <span class=\"pull-right\">";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "geophysics", array(), "array"), "html", null, true);
        echo "</span>
                        </p>
                        <p>
                            <span style=\"font-weight: bold\">Licensing Date :</span>
                            <span class=\"pull-right\"> ";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "licensing", array(), "array"), "html", null, true);
        echo "</span>
                        </p>
                        <p>
                            <span style=\"font-weight: bold\">Drilling Date :</span> 
                            <span class=\"pull-right\">";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "drilling", array(), "array"), "html", null, true);
        echo "</span>
                        </p>
                        <p>
                            <span style=\"font-weight: bold\">Discovery Date :</span> 
                            <span class=\"pull-right\">";
        // line 157
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "discovery", array(), "array"), "html", null, true);
        echo "</span>
                        </p>
                        <p>
                            <span style=\"font-weight: bold\">FID Date :</span> 
                            <span class=\"pull-right\">";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "fid", array(), "array"), "html", null, true);
        echo "</span>
                        </p>
                        <p>
                            <span style=\"font-weight: bold\">Development Date :</span> 
                            <span class=\"pull-right\">";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "development", array(), "array"), "html", null, true);
        echo "</span>
                        </p>
                        <p>
                            <span style=\"font-weight: bold\">Operational Date :</span> 
                            <span class=\"pull-right\">";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "operational", array(), "array"), "html", null, true);
        echo "</span>
                        </p>
                    </div>      
                </div>
                <div class=\"box box-solid box-primary\">
                    <div class=\"box-header with-border\">
                        <i class=\"icon fa fa-folder-open\"></i>
                        <h3 class=\"box-title\">Helicopter Requirement</h3>
                    </div>
                    <div class=\"box-body\">
                        ";
        // line 179
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "helicopters", array(), "array", true, true)) {
            // line 180
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "helicopters", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["helicopter"]) {
                // line 181
                echo "                                <p><span style=\"font-weight: bold\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["helicopter"], "name", array()), "html", null, true);
                echo "</span><span class=\"pull-right\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["helicopter"], "quantity", array()), "html", null, true);
                echo "</span></p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['helicopter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                        ";
        }
        // line 184
        echo "                    </div>
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
        <div class=\"col-md-9\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Project Area</h3>
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
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "summary", array(), "array"), "html", null, true);
        echo "
                            </small>
                        </blockquote>
                        <blockquote>
                            <label>Initial Comment :</label><br>
                            <small>
                                ";
        // line 236
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "comment", array(), "array", true, true)) {
            // line 237
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "comment", array(), "array"), "html", null, true);
            echo "
                                ";
        }
        // line 239
        echo "                            </small>
                        </blockquote>
                    </div>
                    <div role=\"tabpanel\" class=\"tab-pane\" id=\"links\">
                        <blockquote>
                            <label>Confidential Link :</label><br>
                            <small>
                                <a href=\"#\" onClick=\"window.open('";
        // line 246
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
        // line 252
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "externalLink", array(), "array"), "html", null, true);
        echo "');\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "externalLink", array(), "array"), "html", null, true);
        echo "</a>
                            </small>
                        </blockquote>
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
        // line 266
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "userComments", array(), "array", true, true)) {
            // line 267
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userComments", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 268
                echo "                                        <tr>
                                            <td>";
                // line 269
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "user", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 270
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 271
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "html", null, true);
                echo "</td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            echo "                                ";
        }
        // line 275
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
        // line 293
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array(), "array"), "html", null, true);
        echo "\">
        </div>
    </div>
";
        
        $__internal_025f1817419cff1d7ebf78a0a21eccf17eaf063b0bf52abdfac183ff1a64c5bc->leave($__internal_025f1817419cff1d7ebf78a0a21eccf17eaf063b0bf52abdfac183ff1a64c5bc_prof);

    }

    // line 298
    public function block_modal($context, array $blocks = array())
    {
        $__internal_26af51ad9c16c99def8994ec94efce6755704309271dab0ee3fc4b65831ce6a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26af51ad9c16c99def8994ec94efce6755704309271dab0ee3fc4b65831ce6a6->enter($__internal_26af51ad9c16c99def8994ec94efce6755704309271dab0ee3fc4b65831ce6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 299
        echo "    <!-- Edit Project Modal -->
    <div class=\"modal fade\" id=\"project_edit_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit_project_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Edit project</h3>
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
                    <form role=\"form\" id=\"edit_project_form\" method=\"post\">
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
                            <input id=\"hiddenId\" type=\"text\" value=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array(), "array"), "html", null, true);
        echo "\" style=\"display: none\"/>
                            
                            <div class=\"tab-content\">
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab1\">
                                
                                    <div class=\"form-group\" id=\"div-area\">
                                        <label>First where is your project ?</label><br>
                                        <p>Enter latitude and longitude</p>
                                        <input id=\"edit_project_latitude\" name=\"edit_project_latitude\" type=\"text\" class=\"form-control\" placeholder=\"Enter area latitude...\">
                                        <input id=\"edit_project_longitude\" name=\"edit_project_longitude\" type=\"text\" class=\"form-control\" placeholder=\"Enter area longitude...\"><br>
                                        <p>Or put a point on the map</p>

                                    </div>
                                    <div id=\"edit_project_area_map\" style=\"height: 300px;\">

                                    </div>
                                    
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab2\">
                                    <div class=\"form-group\">
                                        <label>Project Name</label><br>
                                        <input type=\"text\" name=\"edit_project_name\" id=\"edit_project_name\" class=\"form-control\" placeholder=\"Edit project name...\" required>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Oil Company</label><br>
                                        <select name=\"edit_project_oil_company\" id=\"edit_project_oil_company\" class=\"form-control select2\" title=\"Edit oil company...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Country</label><br>
                                        <select name=\"edit_project_country[]\" id=\"edit_project_country\" class=\"form-control select2\" title=\"Edit country...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Base</label><br>
                                        <select name=\"edit_project_base\" id=\"edit_project_base\" class=\"form-control select2\" title=\"Edit operational base...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Project Importance</label><br>
                                        <input type=\"range\" class=\"slider\" id=\"edit_project_level\" name=\"edit_project_level\" step=\"1\" min=\"0\" max=\"4\">
                                        <h4 id=\"rangeText\" class=\"text-center\"></h4>
                                    </div>
                                </div>

                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab3\">
                                    <div class=\"form-group\">
                                        <label>Category of Helicopter</label><br>
                                        <select name=\"edit_project_helicopter_category[]\" id=\"edit_project_helicopter_category\" class=\"form-control select2\" title=\"Edit category of helicopter...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Quantity of Helicopters</label><br>
                                        <div id=\"edit_project_helicopter_quantity\">

                                        </div>
                                    </div>
                                </div>

                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab4\">
                                    <div class=\"form-group\">
                                        <label>Project Stage</label><br>
                                        <select name=\"edit_project_status\" id=\"edit_project_status\" class=\"form-control select2\" title=\"Edit current project status...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Geophysics Date</label><br>
                                        <input type=\"text\" name=\"edit_project_geophysics_date\" id=\"edit_project_geophysics_date\" class=\"form-control datepicker\" placeholder=\"Edit project geophysics start date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Licensing Date</label><br>
                                        <input type=\"text\" name=\"edit_project_licensing_date\" id=\"edit_project_licensing_date\" class=\"form-control datepicker\" placeholder=\"Edit project licensing date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Drilling Date</label><br>
                                        <input type=\"text\" name=\"edit_project_drilling_date\" id=\"edit_project_drilling_date\" class=\"form-control datepicker\" placeholder=\"Edit project drilling start date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Discovery Date</label><br>
                                        <input type=\"text\" name=\"edit_project_discovery_date\" id=\"edit_project_discovery_date\" class=\"form-control datepicker\" placeholder=\"Edit project discovery date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>FID Date</label><br>
                                        <input type=\"text\" name=\"edit_project_fid_date\" id=\"edit_project_fid_date\" class=\"form-control datepicker\" placeholder=\"Edit project final investment decision date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Development Date</label><br>
                                        <input type=\"text\" name=\"edit_project_development_date\" id=\"edit_project_development_date\" class=\"form-control datepicker\" placeholder=\"Edit project development start date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Operational Date</label><br>
                                        <input type=\"text\" name=\"edit_project_operational_date\" id=\"edit_project_operational_date\" class=\"form-control datepicker\" placeholder=\"Edit project operational date...\">
                                    </div>
                                </div>

                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab5\">
                                    <div class=\"form-group\">
                                        <label for=\"edit_project_summary\">Two-lines summary</label>
                                        <textarea id=\"edit_project_summary\" name=\"edit_project_summary\" type=\"text\" row=\"3\" class=\"form-control\" placeholder=\"Edit 2-lines summary for the project...\" style=\"resize: none\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_project_comment\">Comment</label>
                                        <textarea id=\"edit_project_comment\" name=\"edit_project_comment\" type=\"text\" row=\"1\" class=\"form-control\" placeholder=\"Edit comment for the project...\" style=\"resize: none; height: 200px\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_project_confidential_link\">Confidential Link</label>
                                        <input type=\"text\" name=\"edit_project_confidential_link\" id=\"edit_project_confidential_link\" class=\"form-control\" placeholder=\"Edit link pointing to the hub...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_project_external_link\">External Link</label>
                                        <input type=\"text\" name=\"edit_project_external_link\" id=\"edit_project_external_link\" class=\"form-control\" placeholder=\"Edit link pointing to an external source...\">
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
    <!-- /Edit Project Modal --> 
    
    <div class=\"modal fade\" id=\"project_upgrade_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"upgrade_project_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Upgrade project to tender</h3>
                </div>
                <div class=\"modal-body\">
                    <form role=\"form\" id=\"upgrade_project_form\" method=\"post\">
                        <div id=\"upgradeProjectFormContent\">
                            
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
                                    <div class=\"form-group\">
                                        <label>Update Tender Name</label><br>
                                        <input type=\"text\" id=\"upgrade_project_name\" name=\"upgrade_project_name\" class=\"form-control\" placeholder=\"Update project name...\"/>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Platforms</label><br>
                                        <select name=\"upgrade_project_platforms[]\" id=\"upgrade_project_platforms\" class=\"form-control select2\" multiple title=\"Choose one or more platforms...\">
                                        </select>
                                    </div>
                                    <div class=\"form-group\" id=\"upgrade_project_mission\">
                                        <label>Mission</label>
                                        <input type=\"hidden\" id=\"upgrade_project_mission_order\" name=\"upgrade_project_mission_order\">
                                        <ol id=\"platforms_sortable\">

                                        </ol>
                                    </div>
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"upgrade2\">
                                    <div class=\"form-group has-error\">
                                        <label>Tender Status</label><br>
                                        <select name=\"upgrade_project_status\" id=\"upgrade_project_status\" class=\"form-control select2\" title=\"Choose the current tender status...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Out</label><br>
                                        <input type=\"text\" name=\"upgrade_project_tender_out\" id=\"upgrade_project_tender_out\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Closure</label><br>
                                        <input type=\"text\" name=\"upgrade_project_tender_closure\" id=\"upgrade_project_tender_closure\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Awarded</label><br>
                                        <input type=\"text\" name=\"upgrade_project_awarded\" id=\"upgrade_project_awarded\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Operations Start</label><br>
                                        <input type=\"text\" name=\"upgrade_project_operations_start\" id=\"upgrade_project_operations_start\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"upgrade3\">
                                    <div class=\"form-group\">
                                        <label for=\"upgrade_project_summary\">Two-lines summary</label>
                                        <textarea id=\"upgrade_project_summary\" name=\"upgrade_project_summary\" type=\"text\" row=\"3\" class=\"form-control\" placeholder=\"Update the 2-lines summary for the project...\" style=\"resize: none\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"upgrade_project_comment\">Comment</label>
                                        <textarea id=\"upgrade_project_comment\" name=\"upgrade_project_comment\" type=\"text\" row=\"1\" class=\"form-control\" placeholder=\"Update comment for the project...\" style=\"resize: none; height: 300px\"></textarea>
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
        
        $__internal_26af51ad9c16c99def8994ec94efce6755704309271dab0ee3fc4b65831ce6a6->leave($__internal_26af51ad9c16c99def8994ec94efce6755704309271dab0ee3fc4b65831ce6a6_prof);

    }

    // line 554
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ae987bf903048f9b615b176d89f21a7f3b7ae3882a9b1d54b858c8460333da9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae987bf903048f9b615b176d89f21a7f3b7ae3882a9b1d54b858c8460333da9e->enter($__internal_ae987bf903048f9b615b176d89f21a7f3b7ae3882a9b1d54b858c8460333da9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 555
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/contract/js/projectDetailModule.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ae987bf903048f9b615b176d89f21a7f3b7ae3882a9b1d54b858c8460333da9e->leave($__internal_ae987bf903048f9b615b176d89f21a7f3b7ae3882a9b1d54b858c8460333da9e_prof);

    }

    public function getTemplateName()
    {
        return "ContractBundle::projectDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  801 => 556,  796 => 555,  790 => 554,  564 => 334,  527 => 299,  521 => 298,  510 => 293,  490 => 275,  487 => 274,  478 => 271,  474 => 270,  470 => 269,  467 => 268,  462 => 267,  460 => 266,  441 => 252,  430 => 246,  421 => 239,  415 => 237,  413 => 236,  404 => 230,  356 => 184,  353 => 183,  342 => 181,  337 => 180,  335 => 179,  322 => 169,  315 => 165,  308 => 161,  301 => 157,  294 => 153,  287 => 149,  280 => 145,  275 => 142,  266 => 135,  263 => 134,  253 => 126,  249 => 124,  240 => 118,  231 => 111,  229 => 110,  221 => 104,  218 => 103,  215 => 102,  213 => 101,  202 => 93,  188 => 81,  182 => 79,  180 => 78,  165 => 65,  159 => 63,  157 => 62,  142 => 49,  136 => 47,  134 => 46,  121 => 35,  115 => 34,  107 => 31,  100 => 26,  98 => 25,  78 => 11,  72 => 10,  63 => 7,  58 => 6,  52 => 5,  39 => 3,  11 => 1,);
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
        <button id=\"upgrade_project_btn\" type=\"button\" class=\"btn btn-success btn-flat btn-xs\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#project_upgrade_modal\">
            <i class=\"fa fa-arrow-circle-o-up\"></i>
            Upgrade
        </button>
        <button id=\"edit_project_btn\" type=\"button\" class=\"btn btn-primary btn-flat btn-xs\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#project_edit_modal\">
            <i class=\"fa fa-edit\"></i>
            Edit
        </button>
        <button id=\"archive_project_btn\" type=\"button\" class=\"btn btn-warning btn-flat btn-xs\">
            <i class=\"fa fa-archive\"></i>
            Archive
        </button>
        {% if is_granted('ROLE_ADMIN') %}
            <button id=\"delete_project_btn\" type=\"button\" class=\"btn btn-danger btn-flat btn-xs\">
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
                    <span class=\"info-box-text\">Project Stage</span>
                    <span class=\"info-box-number\">{{ data['status'] }}</span>
                </div>
            </div>
        </div>
    </div>
                    
    <div class=\"row\">
        <div class=\"col-md-3\">
            {% if \"now\"|date(\"Y\") is not sameas(\"Unknown\") and data['projectTiming'] is not sameas(\"Unknown\") %}
                {% if data['projectTiming'] - \"now\"|date('Y') > 0 %}
                    {% if data['projectTiming'] - \"now\"|date('Y') < 2 %}
                        <div class=\"box box-solid box-danger\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">
                                    <i class=\"icon fa fa-bell\"></i> Project Evolution Review
                                </h3>
                            </div>
                    {% elseif data['projectTiming'] - \"now\"|date('Y') == 2 %}
                        <div class=\"box box-solid box-warning\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">
                                    <i class=\"icon fa fa-warning\"></i> Project Evolution Review
                                </h3>
                            </div>
                    {% else %}
                        <div class=\"box box-solid box-success\">
                            <div class=\"box-header with-border\">
                                <h3 class=\"box-title\">
                                    <i class=\"icon fa fa-check\"></i> Project Evolution Review
                                </h3>
                            </div>
                    {% endif %}                     
                {% else %}
                    <div class=\"box box-solid box-primary\">
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                <i class=\"icon fa fa-info\"></i> Project Evolution Review
                            </h3>
                        </div>

                {% endif %}
            {% else %}
                <div class=\"box box-solid box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            <i class=\"icon fa fa-info\"></i> Project Evolution Review
                        </h3>
                    </div>
            {% endif %}
                    <div class=\"box-body\">
                        <p>
                            <span style=\"font-weight: bold\">Geophysics Date :</span> 
                            <span class=\"pull-right\">{{ data['geophysics'] }}</span>
                        </p>
                        <p>
                            <span style=\"font-weight: bold\">Licensing Date :</span>
                            <span class=\"pull-right\"> {{ data['licensing'] }}</span>
                        </p>
                        <p>
                            <span style=\"font-weight: bold\">Drilling Date :</span> 
                            <span class=\"pull-right\">{{ data['drilling'] }}</span>
                        </p>
                        <p>
                            <span style=\"font-weight: bold\">Discovery Date :</span> 
                            <span class=\"pull-right\">{{ data['discovery'] }}</span>
                        </p>
                        <p>
                            <span style=\"font-weight: bold\">FID Date :</span> 
                            <span class=\"pull-right\">{{ data['fid'] }}</span>
                        </p>
                        <p>
                            <span style=\"font-weight: bold\">Development Date :</span> 
                            <span class=\"pull-right\">{{ data['development'] }}</span>
                        </p>
                        <p>
                            <span style=\"font-weight: bold\">Operational Date :</span> 
                            <span class=\"pull-right\">{{ data['operational'] }}</span>
                        </p>
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
        <div class=\"col-md-9\">
            <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Project Area</h3>
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
    <!-- Edit Project Modal -->
    <div class=\"modal fade\" id=\"project_edit_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit_project_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Edit project</h3>
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
                    <form role=\"form\" id=\"edit_project_form\" method=\"post\">
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
                            <input id=\"hiddenId\" type=\"text\" value=\"{{ data['id'] }}\" style=\"display: none\"/>
                            
                            <div class=\"tab-content\">
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab1\">
                                
                                    <div class=\"form-group\" id=\"div-area\">
                                        <label>First where is your project ?</label><br>
                                        <p>Enter latitude and longitude</p>
                                        <input id=\"edit_project_latitude\" name=\"edit_project_latitude\" type=\"text\" class=\"form-control\" placeholder=\"Enter area latitude...\">
                                        <input id=\"edit_project_longitude\" name=\"edit_project_longitude\" type=\"text\" class=\"form-control\" placeholder=\"Enter area longitude...\"><br>
                                        <p>Or put a point on the map</p>

                                    </div>
                                    <div id=\"edit_project_area_map\" style=\"height: 300px;\">

                                    </div>
                                    
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab2\">
                                    <div class=\"form-group\">
                                        <label>Project Name</label><br>
                                        <input type=\"text\" name=\"edit_project_name\" id=\"edit_project_name\" class=\"form-control\" placeholder=\"Edit project name...\" required>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Oil Company</label><br>
                                        <select name=\"edit_project_oil_company\" id=\"edit_project_oil_company\" class=\"form-control select2\" title=\"Edit oil company...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Country</label><br>
                                        <select name=\"edit_project_country[]\" id=\"edit_project_country\" class=\"form-control select2\" title=\"Edit country...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Base</label><br>
                                        <select name=\"edit_project_base\" id=\"edit_project_base\" class=\"form-control select2\" title=\"Edit operational base...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Project Importance</label><br>
                                        <input type=\"range\" class=\"slider\" id=\"edit_project_level\" name=\"edit_project_level\" step=\"1\" min=\"0\" max=\"4\">
                                        <h4 id=\"rangeText\" class=\"text-center\"></h4>
                                    </div>
                                </div>

                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab3\">
                                    <div class=\"form-group\">
                                        <label>Category of Helicopter</label><br>
                                        <select name=\"edit_project_helicopter_category[]\" id=\"edit_project_helicopter_category\" class=\"form-control select2\" title=\"Edit category of helicopter...\" multiple>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Quantity of Helicopters</label><br>
                                        <div id=\"edit_project_helicopter_quantity\">

                                        </div>
                                    </div>
                                </div>

                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab4\">
                                    <div class=\"form-group\">
                                        <label>Project Stage</label><br>
                                        <select name=\"edit_project_status\" id=\"edit_project_status\" class=\"form-control select2\" title=\"Edit current project status...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Geophysics Date</label><br>
                                        <input type=\"text\" name=\"edit_project_geophysics_date\" id=\"edit_project_geophysics_date\" class=\"form-control datepicker\" placeholder=\"Edit project geophysics start date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Licensing Date</label><br>
                                        <input type=\"text\" name=\"edit_project_licensing_date\" id=\"edit_project_licensing_date\" class=\"form-control datepicker\" placeholder=\"Edit project licensing date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Drilling Date</label><br>
                                        <input type=\"text\" name=\"edit_project_drilling_date\" id=\"edit_project_drilling_date\" class=\"form-control datepicker\" placeholder=\"Edit project drilling start date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Discovery Date</label><br>
                                        <input type=\"text\" name=\"edit_project_discovery_date\" id=\"edit_project_discovery_date\" class=\"form-control datepicker\" placeholder=\"Edit project discovery date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>FID Date</label><br>
                                        <input type=\"text\" name=\"edit_project_fid_date\" id=\"edit_project_fid_date\" class=\"form-control datepicker\" placeholder=\"Edit project final investment decision date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Development Date</label><br>
                                        <input type=\"text\" name=\"edit_project_development_date\" id=\"edit_project_development_date\" class=\"form-control datepicker\" placeholder=\"Edit project development start date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Operational Date</label><br>
                                        <input type=\"text\" name=\"edit_project_operational_date\" id=\"edit_project_operational_date\" class=\"form-control datepicker\" placeholder=\"Edit project operational date...\">
                                    </div>
                                </div>

                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"tab5\">
                                    <div class=\"form-group\">
                                        <label for=\"edit_project_summary\">Two-lines summary</label>
                                        <textarea id=\"edit_project_summary\" name=\"edit_project_summary\" type=\"text\" row=\"3\" class=\"form-control\" placeholder=\"Edit 2-lines summary for the project...\" style=\"resize: none\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_project_comment\">Comment</label>
                                        <textarea id=\"edit_project_comment\" name=\"edit_project_comment\" type=\"text\" row=\"1\" class=\"form-control\" placeholder=\"Edit comment for the project...\" style=\"resize: none; height: 200px\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_project_confidential_link\">Confidential Link</label>
                                        <input type=\"text\" name=\"edit_project_confidential_link\" id=\"edit_project_confidential_link\" class=\"form-control\" placeholder=\"Edit link pointing to the hub...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"edit_project_external_link\">External Link</label>
                                        <input type=\"text\" name=\"edit_project_external_link\" id=\"edit_project_external_link\" class=\"form-control\" placeholder=\"Edit link pointing to an external source...\">
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
    <!-- /Edit Project Modal --> 
    
    <div class=\"modal fade\" id=\"project_upgrade_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"upgrade_project_modal_label\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h3>Upgrade project to tender</h3>
                </div>
                <div class=\"modal-body\">
                    <form role=\"form\" id=\"upgrade_project_form\" method=\"post\">
                        <div id=\"upgradeProjectFormContent\">
                            
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
                                    <div class=\"form-group\">
                                        <label>Update Tender Name</label><br>
                                        <input type=\"text\" id=\"upgrade_project_name\" name=\"upgrade_project_name\" class=\"form-control\" placeholder=\"Update project name...\"/>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Platforms</label><br>
                                        <select name=\"upgrade_project_platforms[]\" id=\"upgrade_project_platforms\" class=\"form-control select2\" multiple title=\"Choose one or more platforms...\">
                                        </select>
                                    </div>
                                    <div class=\"form-group\" id=\"upgrade_project_mission\">
                                        <label>Mission</label>
                                        <input type=\"hidden\" id=\"upgrade_project_mission_order\" name=\"upgrade_project_mission_order\">
                                        <ol id=\"platforms_sortable\">

                                        </ol>
                                    </div>
                                </div>
                                
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"upgrade2\">
                                    <div class=\"form-group has-error\">
                                        <label>Tender Status</label><br>
                                        <select name=\"upgrade_project_status\" id=\"upgrade_project_status\" class=\"form-control select2\" title=\"Choose the current tender status...\" required>
                                        </select>
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Out</label><br>
                                        <input type=\"text\" name=\"upgrade_project_tender_out\" id=\"upgrade_project_tender_out\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Tender Closure</label><br>
                                        <input type=\"text\" name=\"upgrade_project_tender_closure\" id=\"upgrade_project_tender_closure\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Awarded</label><br>
                                        <input type=\"text\" name=\"upgrade_project_awarded\" id=\"upgrade_project_awarded\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                    <div class=\"form-group\">
                                        <label>Operations Start</label><br>
                                        <input type=\"text\" name=\"upgrade_project_operations_start\" id=\"upgrade_project_operations_start\" class=\"form-control datepicker\" placeholder=\"Pick a date...\">
                                    </div>
                                </div>
                                <div role=\"tab-panel\" class=\"tab-pane\" id=\"upgrade3\">
                                    <div class=\"form-group\">
                                        <label for=\"upgrade_project_summary\">Two-lines summary</label>
                                        <textarea id=\"upgrade_project_summary\" name=\"upgrade_project_summary\" type=\"text\" row=\"3\" class=\"form-control\" placeholder=\"Update the 2-lines summary for the project...\" style=\"resize: none\"></textarea>
                                    </div>
                                    <div class=\"form-group\">
                                        <label for=\"upgrade_project_comment\">Comment</label>
                                        <textarea id=\"upgrade_project_comment\" name=\"upgrade_project_comment\" type=\"text\" row=\"1\" class=\"form-control\" placeholder=\"Update comment for the project...\" style=\"resize: none; height: 300px\"></textarea>
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
    <script src=\"{{ asset('bundles/contract/js/projectDetailModule.js') }}\"></script>
{% endblock %}
", "ContractBundle::projectDetail.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/ContractBundle/Resources/views/projectDetail.html.twig");
    }
}
