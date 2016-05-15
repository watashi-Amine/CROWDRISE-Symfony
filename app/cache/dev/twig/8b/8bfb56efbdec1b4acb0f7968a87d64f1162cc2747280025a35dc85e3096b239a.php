<?php

/* ::enlignefreelancer.html.twig */
class __TwigTemplate_e5b1a92ef0be8a8e453bdda9a06b52adb7ae0b2e26b413d60dabe654a2bd4d62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!--> <html lang=\"en\"> <!--<![endif]-->
<head>
    <title>Profile Page | Unify - Responsive Website Template</title>

    <!-- Meta -->
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
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

    <!-- CSS Header and Footer -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/headers/header-default.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/footers/footer-v1.css"), "html", null, true);
        echo "\">

    <!-- CSS Implementing Plugins -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/line-icons/line-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css"), "html", null, true);
        echo "\">

    <!-- CSS Page Style -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/pages/profile.css"), "html", null, true);
        echo "\">

    <!-- CSS Theme -->
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/theme-colors/default.css"), "html", null, true);
        echo "\" id=\"style_color\">
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/theme-skins/dark.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/pages/page_job.css"), "html", null, true);
        echo "\">
    <!-- CSS Customization -->
    <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/custom.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/app.css"), "html", null, true);
        echo "\">
</head>

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
        // line 130
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

\t\t\t

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
           
          
                
<!--End Left Sidebar-->

            <!-- Profile Content -->
            
                    
                    ";
        // line 226
        $this->displayBlock('body', $context, $blocks);
        // line 230
        echo "                
           
            <!-- End Profile Content -->
        </div>
    </div><!--/container-->
    <!--=== End Profile ===-->

    <!--=== Footer Version 1 ===-->
    <div class=\"footer-v1\">
        <div class=\"footer\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- About -->
                    <div class=\"col-md-3 md-margin-bottom-40\">
                        <a href=\"index.html\"><img id=\"logo-footer\" class=\"footer-logo\" src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/logo2-default.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                        <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
                        <p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>
                    </div><!--/col-md-3-->
                    <!-- End About -->

                    <!-- Latest -->
                    <div class=\"col-md-3 md-margin-bottom-40\">
                        <div class=\"posts\">
                            <div class=\"headline\"><h2>Latest Posts</h2></div>
                            <ul class=\"list-unstyled latest-list\">
                                <li>
                                    <a href=\"#\">Incredible content</a>
                                    <small>May 8, 2014</small>
                                </li>
                                <li>
                                    <a href=\"#\">Best shoots</a>
                                    <small>June 23, 2014</small>
                                </li>
                                <li>
                                    <a href=\"#\">New Terms and Conditions</a>
                                    <small>September 15, 2014</small>
                                </li>
                            </ul>
                        </div>
                    </div><!--/col-md-3-->
                    <!-- End Latest -->

                    <!-- Link List -->
                    <div class=\"col-md-3 md-margin-bottom-40\">
                        <div class=\"headline\"><h2>Useful Links</h2></div>
                        <ul class=\"list-unstyled link-list\">
                            <li><a href=\"#\">About us</a><i class=\"fa fa-angle-right\"></i></li>
                            <li><a href=\"#\">Portfolio</a><i class=\"fa fa-angle-right\"></i></li>
                            <li><a href=\"#\">Latest jobs</a><i class=\"fa fa-angle-right\"></i></li>
                            <li><a href=\"#\">Community</a><i class=\"fa fa-angle-right\"></i></li>
                            <li><a href=\"#\">Contact us</a><i class=\"fa fa-angle-right\"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->

                    <!-- Address -->
                    <div class=\"col-md-3 map-img md-margin-bottom-40\">
                        <div class=\"headline\"><h2>Contact Us</h2></div>
                        <address class=\"md-margin-bottom-40\">
                            25, Lorem Lis Street, Orange <br />
                            California, US <br />
                            Phone: 800 123 3456 <br />
                            Fax: 800 123 3456 <br />
                            Email: <a href=\"mailto:info@anybiz.com\" class=\"\">info@anybiz.com</a>
                        </address>
                    </div><!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div>
        </div><!--/footer-->

        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <p>
                            2015 &copy; All Rights Reserved.
                           <a href=\"#\">Privacy Policy</a> | <a href=\"#\">Terms of Service</a>
                        </p>
                    </div>

                    <!-- Social Links -->
                    <div class=\"col-md-6\">
                        <ul class=\"footer-socials list-inline\">
                            <li>
                                <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Facebook\">
                                    <i class=\"fa fa-facebook\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Skype\">
                                    <i class=\"fa fa-skype\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Google Plus\">
                                    <i class=\"fa fa-google-plus\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Linkedin\">
                                    <i class=\"fa fa-linkedin\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Pinterest\">
                                    <i class=\"fa fa-pinterest\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Twitter\">
                                    <i class=\"fa fa-twitter\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Dribbble\">
                                    <i class=\"fa fa-dribbble\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social Links -->
                </div>
            </div>
        </div><!--/copyright-->
    </div>
    <!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->
 ";
        // line 358
        $this->displayBlock('javascripts', $context, $blocks);
        // line 362
        echo "<!-- JS Global Compulsory -->
<script type=\"text/javascript\" src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
 <script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js')}}\"></script>
        <script>window.jQuery || document.write('<script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"><\\/script>')</script>
        <script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      
<script src=\"http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js')}}\"></script>
        <script src=\"";
        // line 372
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.fitvids.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.sequence-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/main-menu.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/template.js"), "html", null, true);
        echo "\"></script>
       
        <!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/smoothScroll.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/counter/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/counter/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>

<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/plugins/datepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/plugins/style-switcher.js"), "html", null, true);
        echo "\"></script>
 

<script type=\"text/javascript\">
    jQuery(document).ready(function() {
        App.init();
        App.initCounter();
        App.initScrollBar();
        Datepicker.initDatepicker();
        StyleSwitcher.initStyleSwitcher();
    });
</script>
<!--[if lt IE 9]>
    <script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/respond.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/placeholder-IE-fixes.js"), "html", null, true);
        echo "\"></script>
<![endif]-->

</body>
</html>
";
    }

    // line 226
    public function block_body($context, array $blocks = array())
    {
        // line 227
        echo "                        
                        
                        ";
    }

    // line 358
    public function block_javascripts($context, array $blocks = array())
    {
        // line 359
        echo "            
            
        ";
    }

    public function getTemplateName()
    {
        return "::enlignefreelancer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  573 => 359,  570 => 358,  564 => 227,  561 => 226,  551 => 406,  547 => 405,  543 => 404,  527 => 391,  523 => 390,  519 => 389,  514 => 387,  508 => 384,  504 => 383,  500 => 382,  496 => 381,  492 => 380,  488 => 379,  482 => 376,  478 => 375,  474 => 374,  470 => 373,  466 => 372,  460 => 369,  456 => 368,  451 => 366,  447 => 365,  443 => 364,  439 => 363,  436 => 362,  434 => 358,  317 => 244,  301 => 230,  299 => 226,  200 => 130,  112 => 45,  108 => 44,  103 => 42,  99 => 41,  95 => 40,  89 => 37,  83 => 34,  79 => 33,  75 => 32,  71 => 31,  67 => 30,  63 => 29,  57 => 26,  53 => 25,  47 => 22,  43 => 21,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->*/
/* <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->*/
/* <!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->*/
/* <head>*/
/*     <title>Profile Page | Unify - Responsive Website Template</title>*/
/* */
/*     <!-- Meta -->*/
/*     <meta charset="utf-8">*/
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
/* <link rel="stylesheet" href="{{asset('assets/css/pages/page_job.css')}}">*/
/*     <!-- CSS Customization -->*/
/*     <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">*/
/*       <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">*/
/* </head>*/
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
/* 			*/
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
/*            */
/*           */
/*                 */
/* <!--End Left Sidebar-->*/
/* */
/*             <!-- Profile Content -->*/
/*             */
/*                     */
/*                     {% block body %}*/
/*                         */
/*                         */
/*                         {% endblock %}*/
/*                 */
/*            */
/*             <!-- End Profile Content -->*/
/*         </div>*/
/*     </div><!--/container-->*/
/*     <!--=== End Profile ===-->*/
/* */
/*     <!--=== Footer Version 1 ===-->*/
/*     <div class="footer-v1">*/
/*         <div class="footer">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <!-- About -->*/
/*                     <div class="col-md-3 md-margin-bottom-40">*/
/*                         <a href="index.html"><img id="logo-footer" class="footer-logo" src="{{asset('assets/img/logo2-default.png')}}" alt=""></a>*/
/*                         <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>*/
/*                         <p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>*/
/*                     </div><!--/col-md-3-->*/
/*                     <!-- End About -->*/
/* */
/*                     <!-- Latest -->*/
/*                     <div class="col-md-3 md-margin-bottom-40">*/
/*                         <div class="posts">*/
/*                             <div class="headline"><h2>Latest Posts</h2></div>*/
/*                             <ul class="list-unstyled latest-list">*/
/*                                 <li>*/
/*                                     <a href="#">Incredible content</a>*/
/*                                     <small>May 8, 2014</small>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">Best shoots</a>*/
/*                                     <small>June 23, 2014</small>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">New Terms and Conditions</a>*/
/*                                     <small>September 15, 2014</small>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div><!--/col-md-3-->*/
/*                     <!-- End Latest -->*/
/* */
/*                     <!-- Link List -->*/
/*                     <div class="col-md-3 md-margin-bottom-40">*/
/*                         <div class="headline"><h2>Useful Links</h2></div>*/
/*                         <ul class="list-unstyled link-list">*/
/*                             <li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>*/
/*                             <li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>*/
/*                             <li><a href="#">Latest jobs</a><i class="fa fa-angle-right"></i></li>*/
/*                             <li><a href="#">Community</a><i class="fa fa-angle-right"></i></li>*/
/*                             <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>*/
/*                         </ul>*/
/*                     </div><!--/col-md-3-->*/
/*                     <!-- End Link List -->*/
/* */
/*                     <!-- Address -->*/
/*                     <div class="col-md-3 map-img md-margin-bottom-40">*/
/*                         <div class="headline"><h2>Contact Us</h2></div>*/
/*                         <address class="md-margin-bottom-40">*/
/*                             25, Lorem Lis Street, Orange <br />*/
/*                             California, US <br />*/
/*                             Phone: 800 123 3456 <br />*/
/*                             Fax: 800 123 3456 <br />*/
/*                             Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>*/
/*                         </address>*/
/*                     </div><!--/col-md-3-->*/
/*                     <!-- End Address -->*/
/*                 </div>*/
/*             </div>*/
/*         </div><!--/footer-->*/
/* */
/*         <div class="copyright">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-6">*/
/*                         <p>*/
/*                             2015 &copy; All Rights Reserved.*/
/*                            <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>*/
/*                         </p>*/
/*                     </div>*/
/* */
/*                     <!-- Social Links -->*/
/*                     <div class="col-md-6">*/
/*                         <ul class="footer-socials list-inline">*/
/*                             <li>*/
/*                                 <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">*/
/*                                     <i class="fa fa-facebook"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">*/
/*                                     <i class="fa fa-skype"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">*/
/*                                     <i class="fa fa-google-plus"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">*/
/*                                     <i class="fa fa-linkedin"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">*/
/*                                     <i class="fa fa-pinterest"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">*/
/*                                     <i class="fa fa-twitter"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">*/
/*                                     <i class="fa fa-dribbble"></i>*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <!-- End Social Links -->*/
/*                 </div>*/
/*             </div>*/
/*         </div><!--/copyright-->*/
/*     </div>*/
/*     <!--=== End Footer Version 1 ===-->*/
/* </div><!--/wrapper-->*/
/*  {% block javascripts %}*/
/*             */
/*             */
/*         {% endblock %}*/
/* <!-- JS Global Compulsory -->*/
/* <script type="text/javascript" src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>*/
/*  <script src="{{asset('assets/js/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>*/
/*    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js')}}"></script>*/
/*         <script>window.jQuery || document.write('<script src="{{asset('assets/js/jquery-1.9.1.min.js')}}"><\/script>')</script>*/
/*         <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>*/
/*       */
/* <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js')}}"></script>*/
/*         <script src="{{asset('assets/js/jquery.fitvids.js')}}"></script>*/
/*         <script src="{{asset('assets/js/jquery.sequence-min.js')}}"></script>*/
/*         <script src="{{asset('assets/js/jquery.bxslider.js')}}"></script>*/
/*         <script src="{{asset('assets/js/main-menu.js')}}"></script>*/
/*         <script src="{{asset('assets/js/template.js')}}"></script>*/
/*        */
/*         <!-- JS Implementing Plugins -->*/
/* <script type="text/javascript" src="{{asset('assets/plugins/back-to-top.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/plugins/smoothScroll.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/plugins/counter/waypoints.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/plugins/counter/jquery.counterup.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>*/
/* */
/* <!-- JS Customization -->*/
/* <script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>*/
/* <!-- JS Page Level -->*/
/* <script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/js/plugins/datepicker.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/js/plugins/style-switcher.js')}}"></script>*/
/*  */
/* */
/* <script type="text/javascript">*/
/*     jQuery(document).ready(function() {*/
/*         App.init();*/
/*         App.initCounter();*/
/*         App.initScrollBar();*/
/*         Datepicker.initDatepicker();*/
/*         StyleSwitcher.initStyleSwitcher();*/
/*     });*/
/* </script>*/
/* <!--[if lt IE 9]>*/
/*     <script src="{{asset('assets/plugins/respond.js')}}"></script>*/
/*     <script src="{{asset('assets/plugins/html5shiv.js')}}"></script>*/
/*     <script src="{{asset('assets/plugins/placeholder-IE-fixes.js')}}"></script>*/
/* <![endif]-->*/
/* */
/* </body>*/
/* </html>*/
/* */
