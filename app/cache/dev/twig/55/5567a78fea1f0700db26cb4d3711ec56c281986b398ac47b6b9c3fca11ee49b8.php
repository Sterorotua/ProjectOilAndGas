<?php

/* CoreBundle::mainLayout.html.twig */
class __TwigTemplate_9d8faca876490c027de749da6bc68078a45d2c20fde1ba02db72ea64a219d176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'header_content' => array($this, 'block_header_content'),
            'page_content' => array($this, 'block_page_content'),
            'modal' => array($this, 'block_modal'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ea5a179103182a6d314a1bae41a009653b0e18e61c18cda5d46d93a906e0f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea5a179103182a6d314a1bae41a009653b0e18e61c18cda5d46d93a906e0f10->enter($__internal_9ea5a179103182a6d314a1bae41a009653b0e18e61c18cda5d46d93a906e0f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::mainLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>
            ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "        </title>
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        
        ";
        // line 11
        $this->displayBlock('css', $context, $blocks);
        // line 39
        echo "        
        
        <!-- Favicon OilAndGas Market -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
        
        <!-- Google Maps Marker -->
        <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/oilMarker.png"), "html", null, true);
        echo "\" id=\"oilMarker\"></a>
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/helipad.png"), "html", null, true);
        echo "\" id=\"helipad\"></a>
        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/oilAndGasArea.png"), "html", null, true);
        echo "\" id=\"oilNGasArea\"></a>
        
    </head>
    
    <body class=\"hold-transition skin-blue sidebar-mini sidebar-collapse\">
        <div class=\"wrapper\">
            
            <!-- Main Header -->
            <header class=\"main-header\">
                
                <!-- Logo -->
                <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\" class=\"logo\">
                    <span class=\"logo-lg\">
                        <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Logo.png"), "html", null, true);
        echo "\" class=\"icon\">
                    </span>
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class=\"logo-mini\">
                        <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo-mini.png"), "html", null, true);
        echo "\" class=\"icon\">
                    </span>
                </a>
                
                <!-- Header Navbar -->
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class=\"navbar-custom-menu\">
                        <form class=\"navbar-form navbar-left hidden-xs hidden-md hidden-sm\" role=\"search\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search\">
                            </div>
                        </form>
                        <ul class=\"nav navbar-nav\">      
                            <li>
                                <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\">
                                    <i class=\"fa fa-home\"></i>
                                    <span class=\"hidden-xs\">Home</span>
                                </a>
                            </li>
                            <li class=\"dropdown notifications-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-briefcase\"></i>
                                    <span class=\"hidden-xs\">My Business</span>
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <ul class=\"menu\">
                                            <li>
                                                <a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_contracts");
        echo "\">
                                                    <span>Contract</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_tenders");
        echo "\">
                                                    <span>Tender</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 108
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_projects");
        echo "\">
                                                    <span>Project</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown notifications-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-plane\"></i>
                                    <span class=\"hidden-xs\">Aircraft</span>
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <ul class=\"menu\">
                                            <li>
                                                <a href=\"";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_base");
        echo "\">
                                                    <span>Bases</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_fleet");
        echo "\">
                                                    <span>Helicopters</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 136
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_operator");
        echo "\">
                                                    <span>Operators</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown notifications-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-industry\"></i>
                                    <span class=\"hidden-xs\">Oil Activity</span>
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class=\"menu\">
                                            <li>
                                                <a href=\"";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_oilCompany");
        echo "\">
                                                    <span>Oil Companies</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_oilCountry");
        echo "\">
                                                    <span>Oil Countries</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_platforms");
        echo "\">
                                                    <span>Plaforms</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            ";
        // line 173
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 174
            echo "                                <li class=\"dropdown notifications-menu\">
                                    <a href=\"#\" class=\"dropdown-toggle hidden-xs\" data-toggle=\"dropdown\">
                                        <i class=\"fa fa-wrench\"></i>
                                        <span class=\"hidden-xs\">Admin Tools</span>
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li>
                                            <!-- inner menu: contains the actual data -->
                                            <ul class=\"menu\">
                                                <li  class=\"hidden-xs\">
                                                    <a href=\"";
            // line 185
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_admin");
            echo "\">
                                                        <span class=\"hidden-xs\">Admin Interface</span>
                                                    </a>
                                                </li>
                                                <li  class=\"hidden-xs\">
                                                    <a href=\"";
            // line 190
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_account");
            echo "\">
                                                        <span class=\"hidden-xs\">New User</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                            ";
        }
        // line 200
        echo "                            <li>
                                <a href=\"";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_logout");
        echo "\">
                                    <i class=\"fa fa-power-off\"></i>
                                    <span class=\"hidden-xs\">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header> 
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar\">
                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    
                    <!-- search form (Optional) -->
                    <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                            <span class=\"input-group-btn\">
                                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                        </div>
                        
                    </form>
                    <!-- /.search form -->
                    
                    <!-- Sidebar Menu -->
                    <ul class=\"sidebar-menu\">
                        <li class=\"treeview\">
                            <a href=\"";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\">
                                <i class=\"fa fa-home\"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class=\"treeview\">
                             <a href=\"";
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_contracts");
        echo "\">
                                <i class=\"fa fa-briefcase\"></i>
                                <span>My Business</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"treeview\">
                                    <a href=\"";
        // line 245
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_contracts");
        echo "\">
                                        <i class=\"fa fa-circle-o\"></i>
                                        <span>Contracts</span>
                                    </a>
                                </li>
                                <li cl ass=\"treeview\">
                                    <a href=\"";
        // line 251
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_tenders");
        echo "\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Tenders</span>
                                    </a>
                                </li>
                                <li cl ass=\"treeview\">
                                    <a href=\"";
        // line 257
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_projects");
        echo "\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Projects</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-plane\"></i>
                                <span>Aircraft</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li cl ass=\"treeview\">
                                    <a href=\"";
        // line 272
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_base");
        echo "\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Bases</span>
                                    </a>
                                </li>
                                <li class=\"treeview\">
                                    <a href=\"";
        // line 278
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_fleet");
        echo "\">
                                        <i class=\"fa fa-circle-o\"></i>
                                        <span>Helicopters</span>
                                    </a>
                                </li>   
                                <li cl ass=\"treeview\">
                                    <a href=\"";
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_operator");
        echo "\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Operators</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-industry\"></i>
                                <span>Oil Activity</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"treeview\">
                                    <a href=\"";
        // line 299
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_oilCompany");
        echo "\">
                                        <i class=\"fa fa-circle-o\"></i>
                                        <span>Oil Companies</span>
                                    </a>
                                </li>
                                <li cl ass=\"treeview\">
                                    <a href=\"";
        // line 305
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_oilCountry");
        echo "\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Oil Countries</span>
                                    </a>
                                </li>
                                <li cl ass=\"treeview\">
                                    <a href=\"";
        // line 311
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_platforms");
        echo "\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Platforms</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        ";
        // line 318
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 319
            echo "                            <li class=\"treeview hidden-xs\">
                                <a href=\"#\">
                                    <i class=\"fa fa-wrench\"></i>
                                    <span>Admin Tools</span>
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"treeview\">
                                        <a href=\"";
            // line 327
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_admin");
            echo "\">
                                            <i class=\"fa fa-circle-o\"></i>
                                            <span>Admin Interface</span>
                                        </a>
                                    </li>
                                    <li cl ass=\"treeview\">
                                        <a href=\"";
            // line 333
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_account");
            echo "\">
                                            <i class=\"fa fa-circle-o\"> </i>
                                            <span>New User</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        ";
        }
        // line 341
        echo "                        <li class=\"treeview\" >
                            <a href=\"";
        // line 342
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_logout");
        echo "\">
                                <i class=\"fa fa-power-off\"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                
                <section class=\"content-header\">
                    ";
        // line 358
        $this->displayBlock('header_content', $context, $blocks);
        // line 361
        echo "                </section>
                
                
                <!-- Main content -->
                <section class=\"content\">
                    
                    ";
        // line 367
        $this->displayBlock('page_content', $context, $blocks);
        // line 370
        echo "                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            
            <!-- Main Footer -->
            <footer class=\"main-footer\">
                <!-- To the right -->
                <div class=\"pull-right hidden-xs\">
                    <b>Author :</b> Sébastien FRANÇOIS
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2016 <a href=\"http://www.airbushelicopters.com/website/en/ref/home.html\">Airbus Helicopters</a>.</strong> All rights reserved.
            </footer>
            
        </div>
        <!-- ./wrapper -->
        
        ";
        // line 389
        $this->displayBlock('modal', $context, $blocks);
        // line 392
        echo "        
        ";
        // line 393
        $this->displayBlock('javascripts', $context, $blocks);
        // line 438
        echo "        
    </body>
</html>

";
        
        $__internal_9ea5a179103182a6d314a1bae41a009653b0e18e61c18cda5d46d93a906e0f10->leave($__internal_9ea5a179103182a6d314a1bae41a009653b0e18e61c18cda5d46d93a906e0f10_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc475417043a51d649a1b5b88b7729759d75aa326f548e4173ac53c29dc41b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc475417043a51d649a1b5b88b7729759d75aa326f548e4173ac53c29dc41b04->enter($__internal_fc475417043a51d649a1b5b88b7729759d75aa326f548e4173ac53c29dc41b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "O&G - ";
        
        $__internal_fc475417043a51d649a1b5b88b7729759d75aa326f548e4173ac53c29dc41b04->leave($__internal_fc475417043a51d649a1b5b88b7729759d75aa326f548e4173ac53c29dc41b04_prof);

    }

    // line 11
    public function block_css($context, array $blocks = array())
    {
        $__internal_157df3ff792fc6e60c03845b7ece2037bc75f2eac8b9d72195385870337bdb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157df3ff792fc6e60c03845b7ece2037bc75f2eac8b9d72195385870337bdb94->enter($__internal_157df3ff792fc6e60c03845b7ece2037bc75f2eac8b9d72195385870337bdb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 12
        echo "            <!-- Bootstrap -->
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">

            <!-- AdminLTE -->
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/AdminLTE.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/skin-blue.css"), "html", null, true);
        echo "\">
            
            <!-- Bootstrap Select SilvioMoretto -->
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/bootstrap-select.min.css"), "html", null, true);
        echo "\">

            <!-- jQuery UI -->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css\">

            <!-- jQuery UI Datepicker -->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css\">

            <!-- iCheck -->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/flat/_all.css\">
            
            <!-- jQuery DataTable -->
            <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/customCss.css"), "html", null, true);
        echo "\">
            
        ";
        
        $__internal_157df3ff792fc6e60c03845b7ece2037bc75f2eac8b9d72195385870337bdb94->leave($__internal_157df3ff792fc6e60c03845b7ece2037bc75f2eac8b9d72195385870337bdb94_prof);

    }

    // line 358
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_e235356b8cd13294dca83101687c3261290cb372a069cbf856f4841e0de1baed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e235356b8cd13294dca83101687c3261290cb372a069cbf856f4841e0de1baed->enter($__internal_e235356b8cd13294dca83101687c3261290cb372a069cbf856f4841e0de1baed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 359
        echo "                        
                    ";
        
        $__internal_e235356b8cd13294dca83101687c3261290cb372a069cbf856f4841e0de1baed->leave($__internal_e235356b8cd13294dca83101687c3261290cb372a069cbf856f4841e0de1baed_prof);

    }

    // line 367
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_26868eb4b0232d6b815f323fa88adf6d73b31c8b9577539008de255e94aee317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26868eb4b0232d6b815f323fa88adf6d73b31c8b9577539008de255e94aee317->enter($__internal_26868eb4b0232d6b815f323fa88adf6d73b31c8b9577539008de255e94aee317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 368
        echo "                        
                    ";
        
        $__internal_26868eb4b0232d6b815f323fa88adf6d73b31c8b9577539008de255e94aee317->leave($__internal_26868eb4b0232d6b815f323fa88adf6d73b31c8b9577539008de255e94aee317_prof);

    }

    // line 389
    public function block_modal($context, array $blocks = array())
    {
        $__internal_f8fbd5ff83a880f2082a4cf1481bd5ded29d65666003907633c1523985e2e311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fbd5ff83a880f2082a4cf1481bd5ded29d65666003907633c1523985e2e311->enter($__internal_f8fbd5ff83a880f2082a4cf1481bd5ded29d65666003907633c1523985e2e311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 390
        echo "            
        ";
        
        $__internal_f8fbd5ff83a880f2082a4cf1481bd5ded29d65666003907633c1523985e2e311->leave($__internal_f8fbd5ff83a880f2082a4cf1481bd5ded29d65666003907633c1523985e2e311_prof);

    }

    // line 393
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9aa12947fc613df512d1639a2c4b6d83a5914b29f260d0d7b1ac40915c561bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa12947fc613df512d1639a2c4b6d83a5914b29f260d0d7b1ac40915c561bf0->enter($__internal_9aa12947fc613df512d1639a2c4b6d83a5914b29f260d0d7b1ac40915c561bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 394
        echo "            
            <!-- FOSJsRouting -->
            <script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 397
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
            
            <!-- jQuery 2.2.0 -->
            <script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
            
            <!-- jQuery UI -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js\"></script>
            
                        <!-- Bootstrap 3.3.6 -->
            <script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            
            <!-- AdminLTE App -->
            <script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/app.min.js"), "html", null, true);
        echo "\"></script>
            
            <!-- Select Silvio Moretto -->
            <script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
            
            <!-- jQuery DataTable -->
            <script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/datatables.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/responsive.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            
            <!-- jQuery Datepicker -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js\"></script>
            
            <!-- Google Map -->
            <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAcMTNu9gsFeWES8OfxqaQkWmE04WPJITM&language=en&libraries=geometry,drawing\"></script>
            
            <!-- Twitter Wizard -->
            <script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/jquery.bootstrap.wizard.js"), "html", null, true);
        echo "\"></script>
            
            <!-- Fileinput JS -->
            <script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/fileinput.min.js"), "html", null, true);
        echo "\"></script>
            
            <!-- iCheck -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.js\"></script>
            
            <!-- Map general functions -->
            <script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/customGeneralFunctions.js"), "html", null, true);
        echo "\"></script>
         
        ";
        
        $__internal_9aa12947fc613df512d1639a2c4b6d83a5914b29f260d0d7b1ac40915c561bf0->leave($__internal_9aa12947fc613df512d1639a2c4b6d83a5914b29f260d0d7b1ac40915c561bf0_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle::mainLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  726 => 435,  717 => 429,  711 => 426,  699 => 417,  695 => 416,  691 => 415,  685 => 412,  679 => 409,  673 => 406,  664 => 400,  658 => 397,  654 => 396,  650 => 394,  644 => 393,  636 => 390,  630 => 389,  622 => 368,  616 => 367,  608 => 359,  602 => 358,  592 => 37,  587 => 35,  583 => 34,  568 => 22,  562 => 19,  558 => 18,  550 => 13,  547 => 12,  541 => 11,  529 => 7,  518 => 438,  516 => 393,  513 => 392,  511 => 389,  490 => 370,  488 => 367,  480 => 361,  478 => 358,  459 => 342,  456 => 341,  445 => 333,  436 => 327,  426 => 319,  424 => 318,  414 => 311,  405 => 305,  396 => 299,  378 => 284,  369 => 278,  360 => 272,  342 => 257,  333 => 251,  324 => 245,  314 => 238,  305 => 232,  271 => 201,  268 => 200,  255 => 190,  247 => 185,  234 => 174,  232 => 173,  221 => 165,  213 => 160,  205 => 155,  183 => 136,  175 => 131,  167 => 126,  146 => 108,  138 => 103,  130 => 98,  112 => 83,  90 => 64,  83 => 60,  78 => 58,  64 => 47,  60 => 46,  56 => 45,  50 => 42,  45 => 39,  43 => 11,  38 => 8,  36 => 7,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>
            {% block title %}O&G - {% endblock %}
        </title>
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        
        {% block css %}
            <!-- Bootstrap -->
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/core/css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">

            <!-- AdminLTE -->
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/core/css/AdminLTE.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/core/css/skin-blue.css') }}\">
            
            <!-- Bootstrap Select SilvioMoretto -->
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/core/css/bootstrap-select.min.css') }}\">

            <!-- jQuery UI -->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css\">

            <!-- jQuery UI Datepicker -->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css\">

            <!-- iCheck -->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/flat/_all.css\">
            
            <!-- jQuery DataTable -->
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/core/css/dataTables.bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/core/css/responsive.bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/core/css/customCss.css') }}\">
            
        {% endblock %}        
        
        <!-- Favicon OilAndGas Market -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('images/favicon.ico') }}\" />
        
        <!-- Google Maps Marker -->
        <a href=\"{{ asset('images/oilMarker.png') }}\" id=\"oilMarker\"></a>
        <a href=\"{{ asset('images/helipad.png') }}\" id=\"helipad\"></a>
        <a href=\"{{ asset('images/oilAndGasArea.png') }}\" id=\"oilNGasArea\"></a>
        
    </head>
    
    <body class=\"hold-transition skin-blue sidebar-mini sidebar-collapse\">
        <div class=\"wrapper\">
            
            <!-- Main Header -->
            <header class=\"main-header\">
                
                <!-- Logo -->
                <a href=\"{{ path('_home') }}\" class=\"logo\">
                    <span class=\"logo-lg\">
                        <img src=\"{{asset('images/Logo.png')}}\" class=\"icon\">
                    </span>
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class=\"logo-mini\">
                        <img src=\"{{asset('images/logo-mini.png')}}\" class=\"icon\">
                    </span>
                </a>
                
                <!-- Header Navbar -->
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class=\"navbar-custom-menu\">
                        <form class=\"navbar-form navbar-left hidden-xs hidden-md hidden-sm\" role=\"search\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" id=\"navbar-search-input\" placeholder=\"Search\">
                            </div>
                        </form>
                        <ul class=\"nav navbar-nav\">      
                            <li>
                                <a href=\"{{ path('_home') }}\">
                                    <i class=\"fa fa-home\"></i>
                                    <span class=\"hidden-xs\">Home</span>
                                </a>
                            </li>
                            <li class=\"dropdown notifications-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-briefcase\"></i>
                                    <span class=\"hidden-xs\">My Business</span>
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <ul class=\"menu\">
                                            <li>
                                                <a href=\"{{ path('_contracts') }}\">
                                                    <span>Contract</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"{{ path('_tenders') }}\">
                                                    <span>Tender</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"{{ path('_projects') }}\">
                                                    <span>Project</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown notifications-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-plane\"></i>
                                    <span class=\"hidden-xs\">Aircraft</span>
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <ul class=\"menu\">
                                            <li>
                                                <a href=\"{{ path('_base') }}\">
                                                    <span>Bases</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"{{ path('_fleet') }}\">
                                                    <span>Helicopters</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"{{ path('_operator') }}\">
                                                    <span>Operators</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown notifications-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-industry\"></i>
                                    <span class=\"hidden-xs\">Oil Activity</span>
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class=\"menu\">
                                            <li>
                                                <a href=\"{{ path('_oilCompany') }}\">
                                                    <span>Oil Companies</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"{{ path('_oilCountry') }}\">
                                                    <span>Oil Countries</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"{{ path('_platforms') }}\">
                                                    <span>Plaforms</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            {% if is_granted('ROLE_ADMIN') %}
                                <li class=\"dropdown notifications-menu\">
                                    <a href=\"#\" class=\"dropdown-toggle hidden-xs\" data-toggle=\"dropdown\">
                                        <i class=\"fa fa-wrench\"></i>
                                        <span class=\"hidden-xs\">Admin Tools</span>
                                        <span class=\"caret\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li>
                                            <!-- inner menu: contains the actual data -->
                                            <ul class=\"menu\">
                                                <li  class=\"hidden-xs\">
                                                    <a href=\"{{ path('_admin') }}\">
                                                        <span class=\"hidden-xs\">Admin Interface</span>
                                                    </a>
                                                </li>
                                                <li  class=\"hidden-xs\">
                                                    <a href=\"{{ path('_account') }}\">
                                                        <span class=\"hidden-xs\">New User</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                            {% endif %}
                            <li>
                                <a href=\"{{ path('_logout') }}\">
                                    <i class=\"fa fa-power-off\"></i>
                                    <span class=\"hidden-xs\">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header> 
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"main-sidebar\">
                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    
                    <!-- search form (Optional) -->
                    <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                        <div class=\"input-group\">
                            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
                            <span class=\"input-group-btn\">
                                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i>
                                </button>
                            </span>
                        </div>
                        
                    </form>
                    <!-- /.search form -->
                    
                    <!-- Sidebar Menu -->
                    <ul class=\"sidebar-menu\">
                        <li class=\"treeview\">
                            <a href=\"{{ path('_home') }}\">
                                <i class=\"fa fa-home\"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class=\"treeview\">
                             <a href=\"{{ path('_contracts') }}\">
                                <i class=\"fa fa-briefcase\"></i>
                                <span>My Business</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"treeview\">
                                    <a href=\"{{ path('_contracts') }}\">
                                        <i class=\"fa fa-circle-o\"></i>
                                        <span>Contracts</span>
                                    </a>
                                </li>
                                <li cl ass=\"treeview\">
                                    <a href=\"{{ path('_tenders') }}\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Tenders</span>
                                    </a>
                                </li>
                                <li cl ass=\"treeview\">
                                    <a href=\"{{ path('_projects') }}\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Projects</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-plane\"></i>
                                <span>Aircraft</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li cl ass=\"treeview\">
                                    <a href=\"{{ path('_base') }}\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Bases</span>
                                    </a>
                                </li>
                                <li class=\"treeview\">
                                    <a href=\"{{ path('_fleet') }}\">
                                        <i class=\"fa fa-circle-o\"></i>
                                        <span>Helicopters</span>
                                    </a>
                                </li>   
                                <li cl ass=\"treeview\">
                                    <a href=\"{{ path('_operator') }}\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Operators</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"treeview\">
                            <a href=\"#\">
                                <i class=\"fa fa-industry\"></i>
                                <span>Oil Activity</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"treeview\">
                                    <a href=\"{{ path('_oilCompany') }}\">
                                        <i class=\"fa fa-circle-o\"></i>
                                        <span>Oil Companies</span>
                                    </a>
                                </li>
                                <li cl ass=\"treeview\">
                                    <a href=\"{{ path('_oilCountry') }}\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Oil Countries</span>
                                    </a>
                                </li>
                                <li cl ass=\"treeview\">
                                    <a href=\"{{ path('_platforms') }}\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Platforms</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {% if is_granted('ROLE_ADMIN') %}
                            <li class=\"treeview hidden-xs\">
                                <a href=\"#\">
                                    <i class=\"fa fa-wrench\"></i>
                                    <span>Admin Tools</span>
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"treeview\">
                                        <a href=\"{{ path('_admin') }}\">
                                            <i class=\"fa fa-circle-o\"></i>
                                            <span>Admin Interface</span>
                                        </a>
                                    </li>
                                    <li cl ass=\"treeview\">
                                        <a href=\"{{ path('_account') }}\">
                                            <i class=\"fa fa-circle-o\"> </i>
                                            <span>New User</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        {% endif %}
                        <li class=\"treeview\" >
                            <a href=\"{{ path('_logout') }}\">
                                <i class=\"fa fa-power-off\"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                    <!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
            
            <!-- Content Wrapper. Contains page content -->
            <div class=\"content-wrapper\">
                <!-- Content Header (Page header) -->
                
                <section class=\"content-header\">
                    {% block header_content %}
                        
                    {% endblock %}
                </section>
                
                
                <!-- Main content -->
                <section class=\"content\">
                    
                    {% block page_content %}
                        
                    {% endblock %}
                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            
            <!-- Main Footer -->
            <footer class=\"main-footer\">
                <!-- To the right -->
                <div class=\"pull-right hidden-xs\">
                    <b>Author :</b> Sébastien FRANÇOIS
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2016 <a href=\"http://www.airbushelicopters.com/website/en/ref/home.html\">Airbus Helicopters</a>.</strong> All rights reserved.
            </footer>
            
        </div>
        <!-- ./wrapper -->
        
        {% block modal %}
            
        {% endblock %}
        
        {% block javascripts %}
            
            <!-- FOSJsRouting -->
            <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
            <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
            
            <!-- jQuery 2.2.0 -->
            <script src=\"{{ asset('bundles/core/js/jQuery-2.2.0.min.js') }}\"></script>
            
            <!-- jQuery UI -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js\"></script>
            
                        <!-- Bootstrap 3.3.6 -->
            <script src=\"{{ asset('bundles/core/js/bootstrap.min.js') }}\"></script>
            
            <!-- AdminLTE App -->
            <script src=\"{{ asset('bundles/core/js/app.min.js') }}\"></script>
            
            <!-- Select Silvio Moretto -->
            <script src=\"{{ asset('bundles/core/js/bootstrap-select.js') }}\"></script>
            
            <!-- jQuery DataTable -->
            <script src=\"{{ asset('bundles/core/js/datatables.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/core/js/dataTables.bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('bundles/core/js/responsive.bootstrap.min.js') }}\"></script>
            
            <!-- jQuery Datepicker -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js\"></script>
            
            <!-- Google Map -->
            <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAcMTNu9gsFeWES8OfxqaQkWmE04WPJITM&language=en&libraries=geometry,drawing\"></script>
            
            <!-- Twitter Wizard -->
            <script src=\"{{ asset('bundles/core/js/jquery.bootstrap.wizard.js') }}\"></script>
            
            <!-- Fileinput JS -->
            <script src=\"{{ asset('bundles/core/js/fileinput.min.js') }}\"></script>
            
            <!-- iCheck -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.js\"></script>
            
            <!-- Map general functions -->
            <script src=\"{{ asset('bundles/core/js/customGeneralFunctions.js') }}\"></script>
         
        {% endblock %}
        
    </body>
</html>

", "CoreBundle::mainLayout.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/CoreBundle/Resources/views/mainLayout.html.twig");
    }
}
