<?php

/* ::layout.html.twig */
class __TwigTemplate_ec8fd55163d65ab26c02d3782ef97416687cd2baf73e8473212a070409dc64ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'scriptcss' => array($this, 'block_scriptcss'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"> 
<html xmlns=\"http://www.w3.org/1999/xhtml\"> 
    <head> 
        <title>Charity Theme Home Page </title>         


        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.datatables.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"//cdn.datatables.net/responsive/1.0.1/css/dataTables.responsive.css\" rel=\"stylesheet\"/>

        <!--[if lt IE 9]>
        <script src=\"js/html5shiv.js\"></script>
<![endif]-->         
        <!--[if lt IE 9]>
        <script src=\"js/mq.js\"></script>
<![endif]-->         
        <meta http-equiv=\"cache-control\" content=\"no-cache\"> 
            <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"> 
                <meta charset=\"UTF-8\"> 
                    <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\"> 
                        <meta name=\"viewport\" content=\"width=device-width\"> 
                            <!-- Css Files Start -->         
                           <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

    <!-- CSS Header and Footer -->
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/headers/header-default.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/footers/footer-v1.css"), "html", null, true);
        echo "\">

    <!-- CSS Implementing Plugins -->
    <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/line-icons/line-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css"), "html", null, true);
        echo "\">

    <!-- CSS Page Style -->
    <link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/pages/profile.css"), "html", null, true);
        echo "\">

    <!-- CSS Theme -->
    <link rel=\"stylesheet\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/theme-colors/default.css"), "html", null, true);
        echo "\" id=\"style_color\">
    <link rel=\"stylesheet\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/theme-skins/dark.css"), "html", null, true);
        echo "\">

    <!-- CSS Customization -->
    <link rel=\"stylesheet\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/custom.css"), "html", null, true);
        echo "\">
                            <link href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                            <!-- All css -->         
                            <link href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                            <!-- Bootstrap Css -->         
                            <!--[if lte IE 9]><link rel=\"stylesheet\" type=\"text/css\" href=\"css/customIE.css\" /><![endif]-->         
                            <link href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                            <!-- Font Awesome Css -->         
                            <link href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome-ie7.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />




                            <!-- Font Awesome iE7 Css -->         
                            <!-- Css Files End -->         
                            <!-- Social Icons no JS -->         
                            <noscript> 
                                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/nj.css"), "html", null, true);
        echo "\" /> 
                            </noscript>         
                            <!-- Social Icons no JS -->     
                            <!-- yooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo loginnnn -->

                            <link href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

                            <link href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

                            <link href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/inscription.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

                            <!-------------------------->


                            ";
        // line 90
        $this->displayBlock('scriptcss', $context, $blocks);
        // line 92
        echo "                            </head>    

                            <!----------------------------login yo http://andwecode.com/create-popup-login-and-signup-form/#live---------------------------------------------------->

<body>
<!--=== Style Switcher ===-->
<i class=\"style-switcher-btn fa fa-cogs hidden-xs\"></i>
<div class=\"style-switcher animated fadeInRight\">
    <div class=\"style-swticher-header\">
        <div class=\"style-switcher-heading\">Style Switcher</div>
        <div class=\"theme-close\"><i class=\"icon-close\"></i></div>
    </div>

    <div class=\"style-swticher-body\">
        <!-- Theme Colors -->
        <div class=\"style-switcher-heading\">Theme Colors</div>
        <ul class=\"list-unstyled\">
            <li class=\"theme-default theme-active\" data-style=\"default\" data-header=\"light\"></li>
            <li class=\"theme-blue\" data-style=\"blue\" data-header=\"light\"></li>
            <li class=\"theme-orange\" data-style=\"orange\" data-header=\"light\"></li>
            <li class=\"theme-red\" data-style=\"red\" data-header=\"light\"></li>
            <li class=\"theme-light\" data-style=\"light\" data-header=\"light\"></li>
            <li class=\"theme-purple last\" data-style=\"purple\" data-header=\"light\"></li>
            <li class=\"theme-aqua\" data-style=\"aqua\" data-header=\"light\"></li>
            <li class=\"theme-brown\" data-style=\"brown\" data-header=\"light\"></li>
            <li class=\"theme-dark-blue\" data-style=\"dark-blue\" data-header=\"light\"></li>
            <li class=\"theme-light-green\" data-style=\"light-green\" data-header=\"light\"></li>
            <li class=\"theme-dark-red\" data-style=\"dark-red\" data-header=\"light\"></li>
            <li class=\"theme-teal last\" data-style=\"teal\" data-header=\"light\"></li>
        </ul>

        <!-- Theme Skins -->
        <div class=\"style-switcher-heading\">Theme Skins</div>
        <div class=\"row no-col-space margin-bottom-20 skins-section\">
            <div class=\"col-xs-6\">
                <button data-skins=\"default\" class=\"btn-u btn-u-xs btn-u-dark btn-block active-switcher-btn handle-skins-btn\">Light</button>
            </div>
            <div class=\"col-xs-6\">
                <button data-skins=\"dark\" class=\"btn-u btn-u-xs btn-u-dark btn-block skins-btn\">Dark</button>
            </div>
        </div>

        <hr>

        <!-- Layout Styles -->
        <div class=\"style-switcher-heading\">Layout Styles</div>
        <div class=\"row no-col-space margin-bottom-20\">
            <div class=\"col-xs-6\">
                <a href=\"javascript:void(0);\" class=\"btn-u btn-u-xs btn-u-dark btn-block active-switcher-btn wide-layout-btn\">Wide</a>
            </div>
            <div class=\"col-xs-6\">
                <a href=\"javascript:void(0);\" class=\"btn-u btn-u-xs btn-u-dark btn-block boxed-layout-btn\">Boxed</a>
            </div>
        </div>

        <hr>

        <!-- Theme Type -->
        <div class=\"style-switcher-heading\">Theme Types and Versions</div>
        <div class=\"row no-col-space margin-bottom-10\">
            <div class=\"col-xs-6\">
                <a href=\"Shop-UI/index.html\" class=\"btn-u btn-u-xs btn-u-dark btn-block\">Shop UI <small class=\"dp-block\">Template</small></a>
            </div>
            <div class=\"col-xs-6\">
                <a href=\"One-Page/index.html\" class=\"btn-u btn-u-xs btn-u-dark btn-block\">One Page <small class=\"dp-block\">Template</small></a>
            </div>
        </div>

        <div class=\"row no-col-space\">
            <div class=\"col-xs-6\">
                <a href=\"Blog/index.html\" class=\"btn-u btn-u-xs btn-u-dark btn-block\">Blog <small class=\"dp-block\">Template</small></a>
            </div>
            <div class=\"col-xs-6\">
                <a href=\"RTL/index.html\" class=\"btn-u btn-u-xs btn-u-dark btn-block\">RTL <small class=\"dp-block\">Version</small></a>
            </div>
        </div>
    </div>
</div><!--/style-switcher-->
<!--=== End Style Switcher ===-->

<div class=\"wrapper\">
    <!--=== Header ===-->
    <div class=\"header\">
        <div class=\"container\">
            <!-- Logo -->
            <a class=\"logo\" href=\"index.html\">
                <img src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/logo1-default.png"), "html", null, true);
        echo "\" alt=\"Logo\">
            </a>
            <!-- End Logo -->

            <!-- Topbar -->
            <div class=\"topbar\">
                <ul class=\"loginbar pull-right\">
                    <li class=\"hoverSelector\">
                        <i class=\"fa fa-globe\"></i>
                        <a>Languages</a>
                        <ul class=\"languages hoverSelectorBlock\">
                            <li class=\"active\">
                                <a href=\"#\">English <i class=\"fa fa-check\"></i></a>
                            </li>
                            <li><a href=\"#\">Spanish</a></li>
                            <li><a href=\"#\">Russian</a></li>
                            <li><a href=\"#\">German</a></li>
                        </ul>
                    </li>
                    <li class=\"topbar-devider\"></li>
                    <li><a href=\"page_faq.html\">Help</a></li>
                    <li class=\"topbar-devider\"></li>
                    <li><a href=\"page_login.html\">Login</a></li>
                </ul>
            </div>
            <!-- End Topbar -->

            <!-- Toggle get grouped for better mobile display -->
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"fa fa-bars\"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse mega-menu navbar-responsive-collapse\">
            <div class=\"container\">
                <ul class=\"nav navbar-nav\">

\t\t\t<li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            parcourir les projets
                        </a>
                        <ul class=\"dropdown-menu pull-right\">
                            <li><a href=\"Hero-Themes/web-product-light.html\">Hero Web App Light</a></li>
                        </ul>
                    </li>

                    <!-- Demo Pages -->
                    <li class=\"dropdown\">
                        <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            Demos
                        </a>
                        <ul class=\"dropdown-menu pull-right\">
                            <li><a href=\"Themantic-Designs/Architecture/index.html\">Architecture</a></li>
                            <li><a href=\"Themantic-Designs/Travel/index.html\">Travel</a></li>
                            <li><a href=\"Themantic-Designs/App/index.html\">Mobile App</a></li>
                            <li><a href=\"Themantic-Designs/Shipping/index.html\">Shipping</a></li>
                            <li><a href=\"Themantic-Designs/Agency/index.html\">Agency</a></li>
                            <li><a href=\"Themantic-Designs/Spa/index.html\">Spa</a></li>
                            <li><a href=\"Themantic-Designs/Lawyer/index.html\">Lawyer</a></li>
                            <li><a href=\"Hero-Themes/fashion.html\">Hero Fashion</a></li>
                            <li><a href=\"Hero-Themes/gym.html\">Hero Gym</a></li>
                            <li><a href=\"Hero-Themes/photography.html\">Hero Photography</a></li>
                            <li><a href=\"Hero-Themes/restaurant-bar.html\">Hero Restaurant</a></li>
                            <li><a href=\"Hero-Themes/web-product-dark.html\">Hero Web App Dark</a></li>
                            <li><a href=\"Hero-Themes/web-product-light.html\">Hero Web App Light</a></li>
                        </ul>
                    </li>
                    <!-- End Demo Pages -->

                    <!-- Search Block -->
                    <li>
                        <i class=\"search fa fa-search search-btn\"></i>
                        <div class=\"search-open\">
                            <div class=\"input-group animated fadeInDown\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn-u\" type=\"button\">Go</button>
                                </span>
                            </div>
                        </div>
                    </li>
                    <!-- End Search Block -->
                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->

    <!--=== Profile ===-->
    <div class=\"container content profile\">
    \t<div class=\"row\">
            <!--Left Sidebar-->
           ";
        // line 273
        $this->displayBlock('navbar', $context, $blocks);
        // line 276
        echo "<!--End Left Sidebar-->

            <!-- Profile Content -->
            <div class=\"col-md-9\">

                           
                                                                    ";
        // line 282
        $this->displayBlock('body', $context, $blocks);
        // line 286
        echo "                                                                   
                                                                <!-- JS Files Start -->         
                                                                <script type=\"text/javascript\" src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib-1-9-1.js"), "html", null, true);
        echo "\"></script>
                                                                <!-- lib Js -->         
                                                                <script type=\"text/javascript\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib-1-7-1.js"), "html", null, true);
        echo "\"></script>
                                                                <!-- lib Js -->         
                                                                <script type=\"text/javascript\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
                                                                <!-- Modernizr -->         
                                                                <script type=\"text/javascript\" src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
                                                                <!-- Easing js -->         
                                                                <script type=\"text/javascript\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
                                                                <!-- Bootstrap -->         
                                                                <script type=\"text/javascript\" src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bxslider.js"), "html", null, true);
        echo "\"></script>
                                                                <!-- BX Slider -->         
                                                                <script type=\"text/javascript\" src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fitvids.js"), "html", null, true);
        echo "\"></script>
                                                                <!-- fIt Video -->         
                                                                <script type=\"text/javascript\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/clearInput.js"), "html", null, true);
        echo "\"></script>
                                                                <!-- Input Clear -->         
                                                                <script type=\"text/javascript\" src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/smooth-scroll.js"), "html", null, true);
        echo "\"></script>
                                                                <!-- smooth Scroll -->         
                                                                <script type=\"text/javascript\" src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prettyPhoto.js"), "html", null, true);
        echo "\"></script>
                                                                <!-- Pretty Photo -->         
                                                                <script type=\"text/javascript\" src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/social.js"), "html", null, true);
        echo "\"></script>
                                                                <!-- Social Media Hover Effect -->         
                                                                <script type=\"text/javascript\" src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/countdown.js"), "html", null, true);
        echo "\"></script>
                                                                <!-- Event Counter -->         
                                                                <script type=\"text/javascript\" src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>


                                                                <!--------------------------------------login ------------------>

                                                                <script type=\"text/javascript\" src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/test/jquery.leanModal.min.js"), "html", null, true);
        echo "\"></script>
                                                                <script type=\"text/javascript\" src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/test/login.js"), "html", null, true);
        echo "\"></script>


                                                                <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
                                                                <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
                                                                <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" ></script>
                                                                <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
                                                                <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/pace.min.js"), "html", null, true);
        echo "\"></script>
                                                                <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/retina.min.js"), "html", null, true);
        echo "\"></script>
                                                                <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.cookies.js"), "html", null, true);
        echo "\"></script>

                                                                <script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
                                                                <script src=\"//cdn.datatables.net/plug-ins/725b2a2115b/integration/bootstrap/3/dataTables.bootstrap.js\"></script>
                                                                <script src=\"//cdn.datatables.net/responsive/1.0.1/js/dataTables.responsive.js\"></script>
                                                                <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/select2.min.js"), "html", null, true);
        echo "\"></script>

                                                                <script src=";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"\"></script>
                                                            
                                                                <script>
                                                                    jQuery(document).ready(function () {

                                                                        jQuery('#basicTable').DataTable({
                                                                            responsive: true
                                                                        });

                                                                        var shTable = jQuery('#shTable').DataTable({
                                                                            \"fnDrawCallback\": function (oSettings) {
                                                                                jQuery('#shTable_paginate ul').addClass('pagination-active-dark');
                                                                            },
                                                                            responsive: true
                                                                        });

                                                                        // Show/Hide Columns Dropdown
                                                                        jQuery('#shCol').click(function (event) {
                                                                            event.stopPropagation();
                                                                        });

                                                                        jQuery('#shCol input').on('click', function () {

                                                                            // Get the column API object
                                                                            var column = shTable.column(\$(this).val());

                                                                            // Toggle the visibility
                                                                            if (\$(this).is(':checked'))
                                                                                column.visible(true);
                                                                            else
                                                                                column.visible(false);
                                                                        });

                                                                        var exRowTable = jQuery('#exRowTable').DataTable({
                                                                            responsive: true,
                                                                            \"fnDrawCallback\": function (oSettings) {
                                                                                jQuery('#exRowTable_paginate ul').addClass('pagination-active-success');
                                                                            },
                                                                            \"ajax\": \"ajax/objects.txt\",
                                                                            \"columns\": [
                                                                                {
                                                                                    \"class\": 'details-control',
                                                                                    \"orderable\": false,
                                                                                    \"data\": null,
                                                                                    \"defaultContent\": ''
                                                                                },
                                                                                {\"data\": \"titre\"},
                                                                                {\"data\": \"continue\"},
                                                                                {\"data\": \"notification\"},
                                                                              
                                                                            ],
                                                                            \"order\": [[1, 'asc']]
                                                                        });

                                                                        // Add event listener for opening and closing details
                                                                        jQuery('#exRowTable tbody').on('click', 'td.details-control', function () {
                                                                            var tr = \$(this).closest('tr');
                                                                            var row = exRowTable.row(tr);

                                                                            if (row.child.isShown()) {
                                                                                // This row is already open - close it
                                                                                row.child.hide();
                                                                                tr.removeClass('shown');
                                                                            }
                                                                            else {
                                                                                // Open this row
                                                                                row.child(format(row.data())).show();
                                                                                tr.addClass('shown');
                                                                            }
                                                                        });


                                                                        // DataTables Length to Select2
                                                                        jQuery('div.dataTables_length select').removeClass('form-control input-sm');
                                                                        jQuery('div.dataTables_length select').css({width: '60px'});
                                                                        jQuery('div.dataTables_length select').select2({
                                                                            minimumResultsForSearch: -1
                                                                        });

                                                                    });

                                                                    function format(d) {
                                                                        // `d` is the original data object for the row
                                                                        return '<table class=\"table table-bordered nomargin\">' +
                                                                                '<tr>' +
                                                                                '<td>Full name:</td>' +
                                                                                '<td>' + d.name + '</td>' +
                                                                                '</tr>' +
                                                                                '<tr>' +
                                                                                '<td>Extension number:</td>' +
                                                                                '<td>' + d.extn + '</td>' +
                                                                                '</tr>' +
                                                                                '<tr>' +
                                                                                '<td>Extra info:</td>' +
                                                                                '<td>And any further details here (images etc)...</td>' +
                                                                                '</tr>' +
                                                                                '</table>';
                                                                    }
                                                                </script>

                                                               




                                                                <!------------------------------------/login------------------------>

                                                                ";
        // line 441
        $this->displayBlock('javascript', $context, $blocks);
        // line 443
        echo "                                                                
                                                                <!-- Custom / Functions -->         
                                                                <!--[if IE 8]>
                                                             <script src=\"js/ie8_fix_maxwidth.js\" type=\"text/javascript\"></script>
                                                        <![endif]-->         
                                                            </body>     
                                                            </html>";
    }

    // line 90
    public function block_scriptcss($context, array $blocks = array())
    {
        // line 91
        echo "                            ";
    }

    // line 273
    public function block_navbar($context, array $blocks = array())
    {
        // line 274
        echo "                
                ";
    }

    // line 282
    public function block_body($context, array $blocks = array())
    {
        // line 283
        echo "

                                                                    ";
    }

    // line 441
    public function block_javascript($context, array $blocks = array())
    {
        // line 442
        echo "                                                                ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  660 => 442,  657 => 441,  651 => 283,  648 => 282,  643 => 274,  640 => 273,  636 => 91,  633 => 90,  623 => 443,  621 => 441,  511 => 334,  506 => 332,  500 => 329,  495 => 327,  491 => 326,  487 => 325,  483 => 324,  479 => 323,  475 => 322,  471 => 321,  465 => 318,  461 => 317,  453 => 312,  448 => 310,  443 => 308,  438 => 306,  433 => 304,  428 => 302,  423 => 300,  418 => 298,  413 => 296,  408 => 294,  403 => 292,  398 => 290,  393 => 288,  389 => 286,  387 => 282,  379 => 276,  377 => 273,  279 => 178,  191 => 92,  189 => 90,  181 => 85,  176 => 83,  171 => 81,  163 => 76,  151 => 67,  146 => 65,  140 => 62,  135 => 60,  131 => 59,  125 => 56,  121 => 55,  115 => 52,  109 => 49,  105 => 48,  101 => 47,  97 => 46,  93 => 45,  89 => 44,  83 => 41,  79 => 40,  73 => 37,  69 => 36,  39 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> */
/* <html xmlns="http://www.w3.org/1999/xhtml"> */
/*     <head> */
/*         <title>Charity Theme Home Page </title>         */
/* */
/* */
/*         <link href="{{asset('css/style.default.css')}}" rel="stylesheet"/>*/
/*         <link href="{{asset('css/select2.css')}}" rel="stylesheet" />*/
/*         <link href="{{asset('css/style.datatables.css')}}" rel="stylesheet"/>*/
/*         <link href="//cdn.datatables.net/responsive/1.0.1/css/dataTables.responsive.css" rel="stylesheet"/>*/
/* */
/*         <!--[if lt IE 9]>*/
/*         <script src="js/html5shiv.js"></script>*/
/* <![endif]-->         */
/*         <!--[if lt IE 9]>*/
/*         <script src="js/mq.js"></script>*/
/* <![endif]-->         */
/*         <meta http-equiv="cache-control" content="no-cache"> */
/*             <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> */
/*                 <meta charset="UTF-8"> */
/*                     <meta name="viewport" content="initial-scale=1, maximum-scale=1"> */
/*                         <meta name="viewport" content="width=device-width"> */
/*                             <!-- Css Files Start -->         */
/*                            <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <!-- Favicon -->*/
/*     <link rel="shortcut icon" href="favicon.ico">*/
/* */
/*     <!-- Web Fonts -->*/
/*     <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>*/
/* */
/*     <!-- CSS Global Compulsory -->*/
/*     <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">*/
/* */
/*     <!-- CSS Header and Footer -->*/
/*     <link rel="stylesheet" href="{{asset('assets/css/headers/header-default.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('assets/css/footers/footer-v1.css')}}">*/
/* */
/*     <!-- CSS Implementing Plugins -->*/
/*     <link rel="stylesheet" href="{{asset('assets/plugins/animate.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('assets/plugins/line-icons/line-icons.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css')}}">*/
/* */
/*     <!-- CSS Page Style -->*/
/*     <link rel="stylesheet" href="{{asset('assets/css/pages/profile.css')}}">*/
/* */
/*     <!-- CSS Theme -->*/
/*     <link rel="stylesheet" href="{{asset('assets/css/theme-colors/default.css')}}" id="style_color">*/
/*     <link rel="stylesheet" href="{{asset('assets/css/theme-skins/dark.css')}}">*/
/* */
/*     <!-- CSS Customization -->*/
/*     <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">*/
/*                             <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />*/
/*                             <!-- All css -->         */
/*                             <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" />*/
/*                             <!-- Bootstrap Css -->         */
/*                             <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/customIE.css" /><![endif]-->         */
/*                             <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css" />*/
/*                             <!-- Font Awesome Css -->         */
/*                             <link href="{{asset('css/font-awesome-ie7.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/* */
/* */
/* */
/*                             <!-- Font Awesome iE7 Css -->         */
/*                             <!-- Css Files End -->         */
/*                             <!-- Social Icons no JS -->         */
/*                             <noscript> */
/*                                 <link rel="stylesheet" type="text/css" href="{{asset('css/nj.css')}}" /> */
/*                             </noscript>         */
/*                             <!-- Social Icons no JS -->     */
/*                             <!-- yooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo loginnnn -->*/
/* */
/*                             <link href="{{asset('css/test/style.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/*                             <link href="{{asset('css/test/login.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/*                             <link href="{{asset('css/test/inscription.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/*                             <!-------------------------->*/
/* */
/* */
/*                             {% block scriptcss %}*/
/*                             {% endblock %}*/
/*                             </head>    */
/* */
/*                             <!----------------------------login yo http://andwecode.com/create-popup-login-and-signup-form/#live---------------------------------------------------->*/
/* */
/* <body>*/
/* <!--=== Style Switcher ===-->*/
/* <i class="style-switcher-btn fa fa-cogs hidden-xs"></i>*/
/* <div class="style-switcher animated fadeInRight">*/
/*     <div class="style-swticher-header">*/
/*         <div class="style-switcher-heading">Style Switcher</div>*/
/*         <div class="theme-close"><i class="icon-close"></i></div>*/
/*     </div>*/
/* */
/*     <div class="style-swticher-body">*/
/*         <!-- Theme Colors -->*/
/*         <div class="style-switcher-heading">Theme Colors</div>*/
/*         <ul class="list-unstyled">*/
/*             <li class="theme-default theme-active" data-style="default" data-header="light"></li>*/
/*             <li class="theme-blue" data-style="blue" data-header="light"></li>*/
/*             <li class="theme-orange" data-style="orange" data-header="light"></li>*/
/*             <li class="theme-red" data-style="red" data-header="light"></li>*/
/*             <li class="theme-light" data-style="light" data-header="light"></li>*/
/*             <li class="theme-purple last" data-style="purple" data-header="light"></li>*/
/*             <li class="theme-aqua" data-style="aqua" data-header="light"></li>*/
/*             <li class="theme-brown" data-style="brown" data-header="light"></li>*/
/*             <li class="theme-dark-blue" data-style="dark-blue" data-header="light"></li>*/
/*             <li class="theme-light-green" data-style="light-green" data-header="light"></li>*/
/*             <li class="theme-dark-red" data-style="dark-red" data-header="light"></li>*/
/*             <li class="theme-teal last" data-style="teal" data-header="light"></li>*/
/*         </ul>*/
/* */
/*         <!-- Theme Skins -->*/
/*         <div class="style-switcher-heading">Theme Skins</div>*/
/*         <div class="row no-col-space margin-bottom-20 skins-section">*/
/*             <div class="col-xs-6">*/
/*                 <button data-skins="default" class="btn-u btn-u-xs btn-u-dark btn-block active-switcher-btn handle-skins-btn">Light</button>*/
/*             </div>*/
/*             <div class="col-xs-6">*/
/*                 <button data-skins="dark" class="btn-u btn-u-xs btn-u-dark btn-block skins-btn">Dark</button>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <hr>*/
/* */
/*         <!-- Layout Styles -->*/
/*         <div class="style-switcher-heading">Layout Styles</div>*/
/*         <div class="row no-col-space margin-bottom-20">*/
/*             <div class="col-xs-6">*/
/*                 <a href="javascript:void(0);" class="btn-u btn-u-xs btn-u-dark btn-block active-switcher-btn wide-layout-btn">Wide</a>*/
/*             </div>*/
/*             <div class="col-xs-6">*/
/*                 <a href="javascript:void(0);" class="btn-u btn-u-xs btn-u-dark btn-block boxed-layout-btn">Boxed</a>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <hr>*/
/* */
/*         <!-- Theme Type -->*/
/*         <div class="style-switcher-heading">Theme Types and Versions</div>*/
/*         <div class="row no-col-space margin-bottom-10">*/
/*             <div class="col-xs-6">*/
/*                 <a href="Shop-UI/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">Shop UI <small class="dp-block">Template</small></a>*/
/*             </div>*/
/*             <div class="col-xs-6">*/
/*                 <a href="One-Page/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">One Page <small class="dp-block">Template</small></a>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row no-col-space">*/
/*             <div class="col-xs-6">*/
/*                 <a href="Blog/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">Blog <small class="dp-block">Template</small></a>*/
/*             </div>*/
/*             <div class="col-xs-6">*/
/*                 <a href="RTL/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">RTL <small class="dp-block">Version</small></a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div><!--/style-switcher-->*/
/* <!--=== End Style Switcher ===-->*/
/* */
/* <div class="wrapper">*/
/*     <!--=== Header ===-->*/
/*     <div class="header">*/
/*         <div class="container">*/
/*             <!-- Logo -->*/
/*             <a class="logo" href="index.html">*/
/*                 <img src="{{asset('assets/img/logo1-default.png')}}" alt="Logo">*/
/*             </a>*/
/*             <!-- End Logo -->*/
/* */
/*             <!-- Topbar -->*/
/*             <div class="topbar">*/
/*                 <ul class="loginbar pull-right">*/
/*                     <li class="hoverSelector">*/
/*                         <i class="fa fa-globe"></i>*/
/*                         <a>Languages</a>*/
/*                         <ul class="languages hoverSelectorBlock">*/
/*                             <li class="active">*/
/*                                 <a href="#">English <i class="fa fa-check"></i></a>*/
/*                             </li>*/
/*                             <li><a href="#">Spanish</a></li>*/
/*                             <li><a href="#">Russian</a></li>*/
/*                             <li><a href="#">German</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <li class="topbar-devider"></li>*/
/*                     <li><a href="page_faq.html">Help</a></li>*/
/*                     <li class="topbar-devider"></li>*/
/*                     <li><a href="page_login.html">Login</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <!-- End Topbar -->*/
/* */
/*             <!-- Toggle get grouped for better mobile display -->*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="fa fa-bars"></span>*/
/*             </button>*/
/*             <!-- End Toggle -->*/
/*         </div><!--/end container-->*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">*/
/*             <div class="container">*/
/*                 <ul class="nav navbar-nav">*/
/* */
/* 			<li class="dropdown">*/
/*                         <a href="" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             parcourir les projets*/
/*                         </a>*/
/*                         <ul class="dropdown-menu pull-right">*/
/*                             <li><a href="Hero-Themes/web-product-light.html">Hero Web App Light</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/* */
/*                     <!-- Demo Pages -->*/
/*                     <li class="dropdown">*/
/*                         <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">*/
/*                             Demos*/
/*                         </a>*/
/*                         <ul class="dropdown-menu pull-right">*/
/*                             <li><a href="Themantic-Designs/Architecture/index.html">Architecture</a></li>*/
/*                             <li><a href="Themantic-Designs/Travel/index.html">Travel</a></li>*/
/*                             <li><a href="Themantic-Designs/App/index.html">Mobile App</a></li>*/
/*                             <li><a href="Themantic-Designs/Shipping/index.html">Shipping</a></li>*/
/*                             <li><a href="Themantic-Designs/Agency/index.html">Agency</a></li>*/
/*                             <li><a href="Themantic-Designs/Spa/index.html">Spa</a></li>*/
/*                             <li><a href="Themantic-Designs/Lawyer/index.html">Lawyer</a></li>*/
/*                             <li><a href="Hero-Themes/fashion.html">Hero Fashion</a></li>*/
/*                             <li><a href="Hero-Themes/gym.html">Hero Gym</a></li>*/
/*                             <li><a href="Hero-Themes/photography.html">Hero Photography</a></li>*/
/*                             <li><a href="Hero-Themes/restaurant-bar.html">Hero Restaurant</a></li>*/
/*                             <li><a href="Hero-Themes/web-product-dark.html">Hero Web App Dark</a></li>*/
/*                             <li><a href="Hero-Themes/web-product-light.html">Hero Web App Light</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     <!-- End Demo Pages -->*/
/* */
/*                     <!-- Search Block -->*/
/*                     <li>*/
/*                         <i class="search fa fa-search search-btn"></i>*/
/*                         <div class="search-open">*/
/*                             <div class="input-group animated fadeInDown">*/
/*                                 <input type="text" class="form-control" placeholder="Search">*/
/*                                 <span class="input-group-btn">*/
/*                                     <button class="btn-u" type="button">Go</button>*/
/*                                 </span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                     <!-- End Search Block -->*/
/*                 </ul>*/
/*             </div><!--/end container-->*/
/*         </div><!--/navbar-collapse-->*/
/*     </div>*/
/*     <!--=== End Header ===-->*/
/* */
/*     <!--=== Profile ===-->*/
/*     <div class="container content profile">*/
/*     	<div class="row">*/
/*             <!--Left Sidebar-->*/
/*            {% block navbar %}*/
/*                 */
/*                 {% endblock %}*/
/* <!--End Left Sidebar-->*/
/* */
/*             <!-- Profile Content -->*/
/*             <div class="col-md-9">*/
/* */
/*                            */
/*                                                                     {% block body %}*/
/* */
/* */
/*                                                                     {% endblock %}*/
/*                                                                    */
/*                                                                 <!-- JS Files Start -->         */
/*                                                                 <script type="text/javascript" src="{{asset('js/lib-1-9-1.js')}}"></script>*/
/*                                                                 <!-- lib Js -->         */
/*                                                                 <script type="text/javascript" src="{{asset('js/lib-1-7-1.js')}}"></script>*/
/*                                                                 <!-- lib Js -->         */
/*                                                                 <script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>*/
/*                                                                 <!-- Modernizr -->         */
/*                                                                 <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>*/
/*                                                                 <!-- Easing js -->         */
/*                                                                 <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>*/
/*                                                                 <!-- Bootstrap -->         */
/*                                                                 <script type="text/javascript" src="{{asset('js/bxslider.js')}}"></script>*/
/*                                                                 <!-- BX Slider -->         */
/*                                                                 <script type="text/javascript" src="{{asset('js/fitvids.js')}}"></script>*/
/*                                                                 <!-- fIt Video -->         */
/*                                                                 <script type="text/javascript" src="{{asset('js/clearInput.js')}}"></script>*/
/*                                                                 <!-- Input Clear -->         */
/*                                                                 <script type="text/javascript" src="{{asset('js/smooth-scroll.js')}}"></script>*/
/*                                                                 <!-- smooth Scroll -->         */
/*                                                                 <script type="text/javascript" src="{{asset('js/prettyPhoto.js')}}"></script>*/
/*                                                                 <!-- Pretty Photo -->         */
/*                                                                 <script type="text/javascript" src="{{asset('js/social.js')}}"></script>*/
/*                                                                 <!-- Social Media Hover Effect -->         */
/*                                                                 <script type="text/javascript" src="{{asset('js/countdown.js')}}"></script>*/
/*                                                                 <!-- Event Counter -->         */
/*                                                                 <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>*/
/* */
/* */
/*                                                                 <!--------------------------------------login ------------------>*/
/* */
/*                                                                 <script type="text/javascript" src="{{asset('js/test/jquery.leanModal.min.js')}}"></script>*/
/*                                                                 <script type="text/javascript" src="{{asset('js/test/login.js')}}"></script>*/
/* */
/* */
/*                                                                 <script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>*/
/*                                                                 <script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>*/
/*                                                                 <script src="{{asset('js/bootstrap.min.js')}}" ></script>*/
/*                                                                 <script src="{{asset('js/modernizr.min.js')}}"></script>*/
/*                                                                 <script src="{{asset('js/pace.min.js')}}"></script>*/
/*                                                                 <script src="{{asset('js/retina.min.js')}}"></script>*/
/*                                                                 <script src="{{asset('js/jquery.cookies.js')}}"></script>*/
/* */
/*                                                                 <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>*/
/*                                                                 <script src="//cdn.datatables.net/plug-ins/725b2a2115b/integration/bootstrap/3/dataTables.bootstrap.js"></script>*/
/*                                                                 <script src="//cdn.datatables.net/responsive/1.0.1/js/dataTables.responsive.js"></script>*/
/*                                                                 <script src="{{asset('js/select2.min.js')}}"></script>*/
/* */
/*                                                                 <script src={{asset('js/custom.js')}}""></script>*/
/*                                                             */
/*                                                                 <script>*/
/*                                                                     jQuery(document).ready(function () {*/
/* */
/*                                                                         jQuery('#basicTable').DataTable({*/
/*                                                                             responsive: true*/
/*                                                                         });*/
/* */
/*                                                                         var shTable = jQuery('#shTable').DataTable({*/
/*                                                                             "fnDrawCallback": function (oSettings) {*/
/*                                                                                 jQuery('#shTable_paginate ul').addClass('pagination-active-dark');*/
/*                                                                             },*/
/*                                                                             responsive: true*/
/*                                                                         });*/
/* */
/*                                                                         // Show/Hide Columns Dropdown*/
/*                                                                         jQuery('#shCol').click(function (event) {*/
/*                                                                             event.stopPropagation();*/
/*                                                                         });*/
/* */
/*                                                                         jQuery('#shCol input').on('click', function () {*/
/* */
/*                                                                             // Get the column API object*/
/*                                                                             var column = shTable.column($(this).val());*/
/* */
/*                                                                             // Toggle the visibility*/
/*                                                                             if ($(this).is(':checked'))*/
/*                                                                                 column.visible(true);*/
/*                                                                             else*/
/*                                                                                 column.visible(false);*/
/*                                                                         });*/
/* */
/*                                                                         var exRowTable = jQuery('#exRowTable').DataTable({*/
/*                                                                             responsive: true,*/
/*                                                                             "fnDrawCallback": function (oSettings) {*/
/*                                                                                 jQuery('#exRowTable_paginate ul').addClass('pagination-active-success');*/
/*                                                                             },*/
/*                                                                             "ajax": "ajax/objects.txt",*/
/*                                                                             "columns": [*/
/*                                                                                 {*/
/*                                                                                     "class": 'details-control',*/
/*                                                                                     "orderable": false,*/
/*                                                                                     "data": null,*/
/*                                                                                     "defaultContent": ''*/
/*                                                                                 },*/
/*                                                                                 {"data": "titre"},*/
/*                                                                                 {"data": "continue"},*/
/*                                                                                 {"data": "notification"},*/
/*                                                                               */
/*                                                                             ],*/
/*                                                                             "order": [[1, 'asc']]*/
/*                                                                         });*/
/* */
/*                                                                         // Add event listener for opening and closing details*/
/*                                                                         jQuery('#exRowTable tbody').on('click', 'td.details-control', function () {*/
/*                                                                             var tr = $(this).closest('tr');*/
/*                                                                             var row = exRowTable.row(tr);*/
/* */
/*                                                                             if (row.child.isShown()) {*/
/*                                                                                 // This row is already open - close it*/
/*                                                                                 row.child.hide();*/
/*                                                                                 tr.removeClass('shown');*/
/*                                                                             }*/
/*                                                                             else {*/
/*                                                                                 // Open this row*/
/*                                                                                 row.child(format(row.data())).show();*/
/*                                                                                 tr.addClass('shown');*/
/*                                                                             }*/
/*                                                                         });*/
/* */
/* */
/*                                                                         // DataTables Length to Select2*/
/*                                                                         jQuery('div.dataTables_length select').removeClass('form-control input-sm');*/
/*                                                                         jQuery('div.dataTables_length select').css({width: '60px'});*/
/*                                                                         jQuery('div.dataTables_length select').select2({*/
/*                                                                             minimumResultsForSearch: -1*/
/*                                                                         });*/
/* */
/*                                                                     });*/
/* */
/*                                                                     function format(d) {*/
/*                                                                         // `d` is the original data object for the row*/
/*                                                                         return '<table class="table table-bordered nomargin">' +*/
/*                                                                                 '<tr>' +*/
/*                                                                                 '<td>Full name:</td>' +*/
/*                                                                                 '<td>' + d.name + '</td>' +*/
/*                                                                                 '</tr>' +*/
/*                                                                                 '<tr>' +*/
/*                                                                                 '<td>Extension number:</td>' +*/
/*                                                                                 '<td>' + d.extn + '</td>' +*/
/*                                                                                 '</tr>' +*/
/*                                                                                 '<tr>' +*/
/*                                                                                 '<td>Extra info:</td>' +*/
/*                                                                                 '<td>And any further details here (images etc)...</td>' +*/
/*                                                                                 '</tr>' +*/
/*                                                                                 '</table>';*/
/*                                                                     }*/
/*                                                                 </script>*/
/* */
/*                                                                */
/* */
/* */
/* */
/* */
/*                                                                 <!------------------------------------/login------------------------>*/
/* */
/*                                                                 {% block javascript %}*/
/*                                                                 {% endblock %}*/
/*                                                                 */
/*                                                                 <!-- Custom / Functions -->         */
/*                                                                 <!--[if IE 8]>*/
/*                                                              <script src="js/ie8_fix_maxwidth.js" type="text/javascript"></script>*/
/*                                                         <![endif]-->         */
/*                                                             </body>     */
/*                                                             </html>*/
