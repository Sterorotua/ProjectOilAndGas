<?php

/* HomeBundle::home.html.twig */
class __TwigTemplate_b3dff93a614c9a8d2fd82dab048ba3aa8c768feefb40a54deeefa01911ebc29b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::mainLayout.html.twig", "HomeBundle::home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header_content' => array($this, 'block_header_content'),
            'page_content' => array($this, 'block_page_content'),
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
        echo "Home";
    }

    // line 5
    public function block_header_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Dashboard</h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\"><i class=\"fa fa-dashboard\"></i> O&G Market</a></li>
    </ol>
";
    }

    // line 12
    public function block_page_content($context, array $blocks = array())
    {
        // line 13
        echo "        <div class=\"row\">
            <div class=\"col-md-6 col-sm-8 col-xs-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">My Projects</h3>
                        <div class=\"box-tools pull-right\">
                            <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                        </div>
                    </div>
                    <form role=\"form\" class=\"form-horizontal\">
                        <div class=\"box-body\">
                            <table class=\"table table-striped table-bordered dt-responsive hover datatable_table\" width=\"100%\" cellspacing=\"0\">
                                <thead>
                                    <tr>
                                        <th>Area</th>
                                        <th>Country</th>
                                        <th>Project Name</th>
                                        <th>Oil Company</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 35
        if (array_key_exists("projects", $context)) {
            // line 36
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 37
                echo "                                            <tr>
                                                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "area", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "country", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "name", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "oilCompany", array()), "html", null, true);
                echo "</td>
                                                <td><button class=\"btn btn-default btn-sm\" onClick=\"openDetailWindow(Routing.generate('_project_detail', {id: ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", array()), "html", null, true);
                echo " } ))\" role=\"button\"><i class=\"fa fa-folder\"></i></button></td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                    ";
        }
        // line 46
        echo "                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class=\"col-md-6 col-sm-8 col-xs-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">My Tenders</h3>
                        <div class=\"box-tools pull-right\">
                            <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                        </div>
                    </div>
                    <form role=\"form\" class=\"form-horizontal\">
                        <div class=\"box-body\">
                            <table class=\"table table-striped table-bordered dt-responsive hover datatable_table\" width=\"100%\" cellspacing=\"0\">
                                <thead>
                                    <tr>
                                        <th>Area</th>
                                        <th>Country</th>
                                        <th>Tender Name</th>
                                        <th>Oil Company</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 74
        if (array_key_exists("tenders", $context)) {
            // line 75
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tenders"]) ? $context["tenders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tender"]) {
                // line 76
                echo "                                            <tr>
                                                <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["tender"], "area", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["tender"], "country", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["tender"], "name", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["tender"], "oilCompany", array()), "html", null, true);
                echo "</td>
                                                <td><button class=\"btn btn-default btn-sm\" onClick=\"openDetailWindow(Routing.generate('_tender_detail', {id: ";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["tender"], "id", array()), "html", null, true);
                echo " } ))\" role=\"button\"><i class=\"fa fa-folder\"></i></button></td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tender'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                                    ";
        }
        // line 85
        echo "                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class=\"row\">
            ";
        // line 123
        echo "            
            <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Global View</h3>
                        <div class=\"box-tools pull-right\">
                            <button class=\"btn btn-box-tool\" data-widget=\"collapse\" id=\"globalView\"><i class=\"fa fa-minus\"></i></button>
                        </div>
                    </div>
                    <div class=\"box-body\">
                        <div id=\"world-map\" style=\"width: 100%; height: 600px\"></div>
                    </div>
                </div>
            </div>
        </div>

    
";
    }

    // line 142
    public function block_javascripts($context, array $blocks = array())
    {
        // line 143
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/home/js/homeModule.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "HomeBundle::home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 144,  220 => 143,  217 => 142,  196 => 123,  185 => 85,  182 => 84,  173 => 81,  169 => 80,  165 => 79,  161 => 78,  157 => 77,  154 => 76,  149 => 75,  147 => 74,  117 => 46,  114 => 45,  105 => 42,  101 => 41,  97 => 40,  93 => 39,  89 => 38,  86 => 37,  81 => 36,  79 => 35,  55 => 13,  52 => 12,  45 => 8,  41 => 6,  38 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "HomeBundle::home.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/HomeBundle/Resources/views/home.html.twig");
    }
}
