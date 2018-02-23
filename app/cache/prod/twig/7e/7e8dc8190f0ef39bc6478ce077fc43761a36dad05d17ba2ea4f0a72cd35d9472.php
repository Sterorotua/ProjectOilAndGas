<?php

/* CoreBundle::mainLayout.html.twig */
class __TwigTemplate_a85f581ba8fdf0ccfe01d84adbbf8d0d5686f07e5bf6420bc695f83499c1da65 extends Twig_Template
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
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "O&G - ";
    }

    // line 11
    public function block_css($context, array $blocks = array())
    {
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
    }

    // line 358
    public function block_header_content($context, array $blocks = array())
    {
        // line 359
        echo "                        
                    ";
    }

    // line 367
    public function block_page_content($context, array $blocks = array())
    {
        // line 368
        echo "                        
                    ";
    }

    // line 389
    public function block_modal($context, array $blocks = array())
    {
        // line 390
        echo "            
        ";
    }

    // line 393
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  687 => 435,  678 => 429,  672 => 426,  660 => 417,  656 => 416,  652 => 415,  646 => 412,  640 => 409,  634 => 406,  625 => 400,  619 => 397,  615 => 396,  611 => 394,  608 => 393,  603 => 390,  600 => 389,  595 => 368,  592 => 367,  587 => 359,  584 => 358,  577 => 37,  572 => 35,  568 => 34,  553 => 22,  547 => 19,  543 => 18,  535 => 13,  532 => 12,  529 => 11,  523 => 7,  515 => 438,  513 => 393,  510 => 392,  508 => 389,  487 => 370,  485 => 367,  477 => 361,  475 => 358,  456 => 342,  453 => 341,  442 => 333,  433 => 327,  423 => 319,  421 => 318,  411 => 311,  402 => 305,  393 => 299,  375 => 284,  366 => 278,  357 => 272,  339 => 257,  330 => 251,  321 => 245,  311 => 238,  302 => 232,  268 => 201,  265 => 200,  252 => 190,  244 => 185,  231 => 174,  229 => 173,  218 => 165,  210 => 160,  202 => 155,  180 => 136,  172 => 131,  164 => 126,  143 => 108,  135 => 103,  127 => 98,  109 => 83,  87 => 64,  80 => 60,  75 => 58,  61 => 47,  57 => 46,  53 => 45,  47 => 42,  42 => 39,  40 => 11,  35 => 8,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CoreBundle::mainLayout.html.twig", "/Applications/MAMP/htdocs/OilAndGasApplication/src/CoreBundle/Resources/views/mainLayout.html.twig");
    }
}
