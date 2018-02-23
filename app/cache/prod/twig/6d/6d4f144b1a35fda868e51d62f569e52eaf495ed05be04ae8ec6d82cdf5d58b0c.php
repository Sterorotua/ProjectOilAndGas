<?php

/* CoreBundle::mainLayout.html.twig */
class __TwigTemplate_445f0d4bea66ee80480f447e9eb72b7f8181ea7c2d8715b6666a30cda9d66413 extends Twig_Template
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
        $__internal_f5ce88d683552d05785a945ade3ebda406a14bac65121ce688434f915102ad56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ce88d683552d05785a945ade3ebda406a14bac65121ce688434f915102ad56->enter($__internal_f5ce88d683552d05785a945ade3ebda406a14bac65121ce688434f915102ad56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::mainLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex\">
        <title>
            ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        
        ";
        // line 12
        $this->displayBlock('css', $context, $blocks);
        // line 40
        echo "        
        
        <!-- Favicon OilAndGas Market -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
        
        <!-- Google Maps Marker -->
        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/oilMarker.png"), "html", null, true);
        echo "\" id=\"oilMarker\"></a>
        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/helipad.png"), "html", null, true);
        echo "\" id=\"helipad\"></a>
        <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/oilAndGasArea.png"), "html", null, true);
        echo "\" id=\"oilNGasArea\"></a>
        
    </head>
    
    <body class=\"hold-transition skin-blue sidebar-mini sidebar-collapse\">
        <div class=\"wrapper\">
            
            <!-- Main Header -->
            <header class=\"main-header\">
                
                <!-- Logo -->
                <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\" class=\"logo\">
                    <span class=\"logo-lg\">
                        <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/Logo.png"), "html", null, true);
        echo "\" class=\"icon\">
                    </span>
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class=\"logo-mini\">
                        <img src=\"";
        // line 65
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
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\">
                                    <i class=\"fa fa-home\"></i>
                                    <span class=\"hidden-xs\">Home</span>
                                </a>
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
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_platforms");
        echo "\">
                                                    <span>Platforms & Projects</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_oilCompany");
        echo "\">
                                                    <span>Oil Companies</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 111
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_oilCountry");
        echo "\">
                                                    <span>Oil Countries</span>
                                                </a>
                                            </li>
                                           
                                        </ul>
                                    </li>
                                </ul>
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
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_contracts");
        echo "\">
                                                    <span>Contract</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_tenders");
        echo "\">
                                                    <span>Tender</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 142
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
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_base");
        echo "\">
                                                    <span>Bases</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_fleet");
        echo "\">
                                                    <span>Helicopters</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_operator");
        echo "\">
                                                    <span>Operators</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            ";
        // line 179
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 180
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
            // line 191
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_admin");
            echo "\">
                                                        <span class=\"hidden-xs\">Admin Interface</span>
                                                    </a>
                                                </li>
                                                <li  class=\"hidden-xs\">
                                                    <a href=\"";
            // line 196
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
        // line 206
        echo "                            <li>
                                <a href=\"";
        // line 207
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
        // line 238
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_home");
        echo "\">
                                <i class=\"fa fa-home\"></i>
                                <span>Home</span>
                            </a>
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
        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_oilCompany");
        echo "\">
                                        <i class=\"fa fa-circle-o\"></i>
                                        <span>Oil Companies</span>
                                    </a>
                                </li>
                                <li cl ass=\"treeview\">
                                    <a href=\"";
        // line 259
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_oilCountry");
        echo "\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Oil Countries</span>
                                    </a>
                                </li>
                                <li cl ass=\"treeview\">
                                    <a href=\"";
        // line 265
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_platforms");
        echo "\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Platforms</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        
                        <li class=\"treeview\">
                             <a href=\"";
        // line 275
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_contracts");
        echo "\">
                                <i class=\"fa fa-briefcase\"></i>
                                <span>My Business</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\">
                                <li class=\"treeview\">
                                    <a href=\"";
        // line 282
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_contracts");
        echo "\">
                                        <i class=\"fa fa-circle-o\"></i>
                                        <span>Contracts</span>
                                    </a>
                                </li>
                                <li cl ass=\"treeview\">
                                    <a href=\"";
        // line 288
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_tenders");
        echo "\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Tenders</span>
                                    </a>
                                </li>
                                <li cl ass=\"treeview\">
                                    <a href=\"";
        // line 294
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
        // line 309
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_base");
        echo "\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Bases</span>
                                    </a>
                                </li>
                                <li class=\"treeview\">
                                    <a href=\"";
        // line 315
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_fleet");
        echo "\">
                                        <i class=\"fa fa-circle-o\"></i>
                                        <span>Helicopters</span>
                                    </a>
                                </li>   
                                <li cl ass=\"treeview\">
                                    <a href=\"";
        // line 321
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_operator");
        echo "\">
                                        <i class=\"fa fa-circle-o\"> </i>
                                        <span>Operators</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        
                        ";
        // line 330
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 331
            echo "                            <li class=\"treeview hidden-xs\">
                                <a href=\"#\">
                                    <i class=\"fa fa-wrench\"></i>
                                    <span>Admin Tools</span>
                                    <i class=\"fa fa-angle-left pull-right\"></i>
                                </a>
                                <ul class=\"treeview-menu\">
                                    <li class=\"treeview\">
                                        <a href=\"";
            // line 339
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_admin");
            echo "\">
                                            <i class=\"fa fa-circle-o\"></i>
                                            <span>Admin Interface</span>
                                        </a>
                                    </li>
                                    <li cl ass=\"treeview\">
                                        <a href=\"";
            // line 345
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
        // line 353
        echo "                        <li class=\"treeview\" >
                            <a href=\"";
        // line 354
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
        // line 370
        $this->displayBlock('header_content', $context, $blocks);
        // line 373
        echo "                </section>
                
                
                <!-- Main content -->
                <section class=\"content\">
                    
                    ";
        // line 379
        $this->displayBlock('page_content', $context, $blocks);
        // line 382
        echo "                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            
            <!-- Main Footer -->
            <footer class=\"main-footer\">
                <!-- To the right -->
                <div class=\"pull-right hidden-xs\">
                    
                </div>
                <!-- Default to the left -->
                
            </footer>
            
        </div>
        <!-- ./wrapper -->
        
        ";
        // line 401
        $this->displayBlock('modal', $context, $blocks);
        // line 404
        echo "        
        ";
        // line 405
        $this->displayBlock('javascripts', $context, $blocks);
        // line 450
        echo "        
    </body>
</html>

";
        
        $__internal_f5ce88d683552d05785a945ade3ebda406a14bac65121ce688434f915102ad56->leave($__internal_f5ce88d683552d05785a945ade3ebda406a14bac65121ce688434f915102ad56_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_498f2e380768d7bf7f5d23597a65d906c6ba38260fcb3344f206155b7080038b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498f2e380768d7bf7f5d23597a65d906c6ba38260fcb3344f206155b7080038b->enter($__internal_498f2e380768d7bf7f5d23597a65d906c6ba38260fcb3344f206155b7080038b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "O&G - ";
        
        $__internal_498f2e380768d7bf7f5d23597a65d906c6ba38260fcb3344f206155b7080038b->leave($__internal_498f2e380768d7bf7f5d23597a65d906c6ba38260fcb3344f206155b7080038b_prof);

    }

    // line 12
    public function block_css($context, array $blocks = array())
    {
        $__internal_3b9b690044490adf7666a0436db5dcefa87cfb9e2aa7355a3ee1eedf6c336df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9b690044490adf7666a0436db5dcefa87cfb9e2aa7355a3ee1eedf6c336df9->enter($__internal_3b9b690044490adf7666a0436db5dcefa87cfb9e2aa7355a3ee1eedf6c336df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 13
        echo "            <!-- Bootstrap -->
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">

            <!-- AdminLTE -->
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/AdminLTE.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/skin-blue.css"), "html", null, true);
        echo "\">
            
            <!-- Bootstrap Select SilvioMoretto -->
            <link rel=\"stylesheet\" href=\"";
        // line 23
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
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/responsive.bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/customCss.css"), "html", null, true);
        echo "\">
            
        ";
        
        $__internal_3b9b690044490adf7666a0436db5dcefa87cfb9e2aa7355a3ee1eedf6c336df9->leave($__internal_3b9b690044490adf7666a0436db5dcefa87cfb9e2aa7355a3ee1eedf6c336df9_prof);

    }

    // line 370
    public function block_header_content($context, array $blocks = array())
    {
        $__internal_8eb2a84c7568232944419d96dd346016df6159410bb534b8af7787dc5fabf9e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb2a84c7568232944419d96dd346016df6159410bb534b8af7787dc5fabf9e9->enter($__internal_8eb2a84c7568232944419d96dd346016df6159410bb534b8af7787dc5fabf9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_content"));

        // line 371
        echo "                        
                    ";
        
        $__internal_8eb2a84c7568232944419d96dd346016df6159410bb534b8af7787dc5fabf9e9->leave($__internal_8eb2a84c7568232944419d96dd346016df6159410bb534b8af7787dc5fabf9e9_prof);

    }

    // line 379
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f75879ae21fb444b18e48c7d65294adf043cdec99c0ceb3ef2b511dc8f74ec6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75879ae21fb444b18e48c7d65294adf043cdec99c0ceb3ef2b511dc8f74ec6d->enter($__internal_f75879ae21fb444b18e48c7d65294adf043cdec99c0ceb3ef2b511dc8f74ec6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 380
        echo "                        
                    ";
        
        $__internal_f75879ae21fb444b18e48c7d65294adf043cdec99c0ceb3ef2b511dc8f74ec6d->leave($__internal_f75879ae21fb444b18e48c7d65294adf043cdec99c0ceb3ef2b511dc8f74ec6d_prof);

    }

    // line 401
    public function block_modal($context, array $blocks = array())
    {
        $__internal_d4a1519a62cbd6d9779129c47684bf98fd34b2a5b15268777600d516a3aa602e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a1519a62cbd6d9779129c47684bf98fd34b2a5b15268777600d516a3aa602e->enter($__internal_d4a1519a62cbd6d9779129c47684bf98fd34b2a5b15268777600d516a3aa602e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        // line 402
        echo "            
        ";
        
        $__internal_d4a1519a62cbd6d9779129c47684bf98fd34b2a5b15268777600d516a3aa602e->leave($__internal_d4a1519a62cbd6d9779129c47684bf98fd34b2a5b15268777600d516a3aa602e_prof);

    }

    // line 405
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b3767185e976664d56ab72d6c7a5f95dadf639bde7a34d31a45df13c291e575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3767185e976664d56ab72d6c7a5f95dadf639bde7a34d31a45df13c291e575->enter($__internal_7b3767185e976664d56ab72d6c7a5f95dadf639bde7a34d31a45df13c291e575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 406
        echo "            
            <!-- FOSJsRouting -->
            <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 409
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
            
            <!-- jQuery 2.2.0 -->
            <script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/jQuery-2.2.0.min.js"), "html", null, true);
        echo "\"></script>
            
            <!-- jQuery UI -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js\"></script>
            
                        <!-- Bootstrap 3.3.6 -->
            <script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            
            <!-- AdminLTE App -->
            <script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/app.min.js"), "html", null, true);
        echo "\"></script>
            
            <!-- Select Silvio Moretto -->
            <script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
            
            <!-- jQuery DataTable -->
            <script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/datatables.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/responsive.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            
            <!-- jQuery Datepicker -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js\"></script>
            
            <!-- Google Map -->
            <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAcMTNu9gsFeWES8OfxqaQkWmE04WPJITM&language=en&libraries=geometry,drawing\"></script>
            
            <!-- Twitter Wizard -->
            <script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/jquery.bootstrap.wizard.js"), "html", null, true);
        echo "\"></script>
            
            <!-- Fileinput JS -->
            <script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/fileinput.min.js"), "html", null, true);
        echo "\"></script>
            
            <!-- iCheck -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.js\"></script>
            
            <!-- Map general functions -->
            <script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/customGeneralFunctions.js"), "html", null, true);
        echo "\"></script>
         
        ";
        
        $__internal_7b3767185e976664d56ab72d6c7a5f95dadf639bde7a34d31a45df13c291e575->leave($__internal_7b3767185e976664d56ab72d6c7a5f95dadf639bde7a34d31a45df13c291e575_prof);

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
        return array (  738 => 447,  729 => 441,  723 => 438,  711 => 429,  707 => 428,  703 => 427,  697 => 424,  691 => 421,  685 => 418,  676 => 412,  670 => 409,  666 => 408,  662 => 406,  656 => 405,  648 => 402,  642 => 401,  634 => 380,  628 => 379,  620 => 371,  614 => 370,  604 => 38,  599 => 36,  595 => 35,  580 => 23,  574 => 20,  570 => 19,  562 => 14,  559 => 13,  553 => 12,  541 => 8,  530 => 450,  528 => 405,  525 => 404,  523 => 401,  502 => 382,  500 => 379,  492 => 373,  490 => 370,  471 => 354,  468 => 353,  457 => 345,  448 => 339,  438 => 331,  436 => 330,  424 => 321,  415 => 315,  406 => 309,  388 => 294,  379 => 288,  370 => 282,  360 => 275,  347 => 265,  338 => 259,  329 => 253,  311 => 238,  277 => 207,  274 => 206,  261 => 196,  253 => 191,  240 => 180,  238 => 179,  226 => 170,  218 => 165,  210 => 160,  189 => 142,  181 => 137,  173 => 132,  149 => 111,  141 => 106,  133 => 101,  113 => 84,  91 => 65,  84 => 61,  79 => 59,  65 => 48,  61 => 47,  57 => 46,  51 => 43,  46 => 40,  44 => 12,  39 => 9,  37 => 8,  28 => 1,);
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
        <meta name=\"robots\" content=\"noindex\">
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
                                    <i class=\"fa fa-industry\"></i>
                                    <span class=\"hidden-xs\">Oil Activity</span>
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class=\"menu\">
                                             <li>
                                                <a href=\"{{ path('_platforms') }}\">
                                                    <span>Platforms & Projects</span>
                                                </a>
                                            </li>
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
                                           
                                        </ul>
                                    </li>
                                </ul>
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
                    
                </div>
                <!-- Default to the left -->
                
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
