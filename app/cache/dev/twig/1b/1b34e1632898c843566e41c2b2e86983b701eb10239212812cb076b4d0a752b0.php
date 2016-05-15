<?php

/* ::enligne.html.twig */
class __TwigTemplate_34c5ec23674098c8b828508e3d43edf3b1805e7634fd539833b58a147eb9701d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
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
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/headers/header-v6.css"), "html", null, true);
        echo "\">

    <!-- CSS Implementing Plugins -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/line-icons/line-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css"), "html", null, true);
        echo "\">

    <!-- CSS Page Style -->
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/pages/profile.css"), "html", null, true);
        echo "\">

    <!-- CSS Theme -->
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/theme-colors/default.css"), "html", null, true);
        echo "\" id=\"style_color\">
    <link rel=\"stylesheet\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/theme-skins/dark.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/calendier/calendier.css"), "html", null, true);
        echo "\">

    <!-- CSS Customization -->
    <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/custom.css"), "html", null, true);
        echo "\">
    
    
    ";
        // line 49
        $this->displayBlock('css', $context, $blocks);
        // line 52
        echo "</head>

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
    <div class=\"header header-classic-dark header-sticky\">
        <div class=\"container\">
            <!-- Logo -->
            <a class=\"logo\" href=\"index.html\">
                <img src=\"";
        // line 136
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

                     <li class=\"dropdown\">
                        <a href=\"";
        // line 177
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\" >
                            evenement
                        </a>
                        
                    </li> 
                       <li class=\"dropdown\">
                        <a href=\"";
        // line 183
        echo $this->env->getExtension('routing')->getPath("probleme");
        echo "\" >
                            freelance
                        </a>
                        
                    </li> 
\t\t\t   <li class=\"dropdown\">
                        <a href=\"";
        // line 189
        echo $this->env->getExtension('routing')->getPath("projet");
        echo "\" >
                            parcourir les projets
                        </a>
                        
                    </li>   
                     <li class=\"dropdown\">
                        <a href=\"";
        // line 195
        echo $this->env->getExtension('routing')->getPath("modifierProfile");
        echo "\" >
                        profile
                        </a>

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
        // line 245
        $this->displayBlock('navbar', $context, $blocks);
        // line 248
        echo "<!--End Left Sidebar-->

            <!-- Profile Content -->
            <div class=\"col-md-9\">
                    
                    ";
        // line 253
        $this->displayBlock('body', $context, $blocks);
        // line 257
        echo "                
            </div>
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
        // line 271
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

<!-- JS Global Compulsory -->
<script type=\"text/javascript\" src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/smoothScroll.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/counter/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/counter/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/plugins/datepicker.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 402
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

";
        // line 413
        $this->displayBlock('javascript', $context, $blocks);
        // line 416
        echo "

<!--[if lt IE 9]>
    <script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/respond.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/placeholder-IE-fixes.js"), "html", null, true);
        echo "\"></script>
<![endif]-->

</body>
</html>
";
    }

    // line 49
    public function block_css($context, array $blocks = array())
    {
        // line 50
        echo "        
        ";
    }

    // line 245
    public function block_navbar($context, array $blocks = array())
    {
        // line 246
        echo "                
                ";
    }

    // line 253
    public function block_body($context, array $blocks = array())
    {
        // line 254
        echo "                        
                        
                        ";
    }

    // line 413
    public function block_javascript($context, array $blocks = array())
    {
        // line 414
        echo "    
    ";
    }

    public function getTemplateName()
    {
        return "::enligne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  597 => 414,  594 => 413,  588 => 254,  585 => 253,  580 => 246,  577 => 245,  572 => 50,  569 => 49,  559 => 421,  555 => 420,  551 => 419,  546 => 416,  544 => 413,  530 => 402,  526 => 401,  522 => 400,  517 => 398,  512 => 396,  508 => 395,  504 => 394,  500 => 393,  496 => 392,  492 => 391,  487 => 389,  483 => 388,  479 => 387,  360 => 271,  344 => 257,  342 => 253,  335 => 248,  333 => 245,  280 => 195,  271 => 189,  262 => 183,  253 => 177,  209 => 136,  123 => 52,  121 => 49,  115 => 46,  109 => 43,  105 => 42,  101 => 41,  95 => 38,  89 => 35,  85 => 34,  81 => 33,  77 => 32,  73 => 31,  69 => 30,  63 => 27,  59 => 26,  55 => 25,  49 => 22,  45 => 21,  23 => 1,);
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
/*     <link rel="stylesheet" href="{{asset('assets/css/headers/header-v6.css')}}">*/
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
/*       <link rel="stylesheet" href="{{asset('assets/css/calendier/calendier.css')}}">*/
/* */
/*     <!-- CSS Customization -->*/
/*     <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">*/
/*     */
/*     */
/*     {% block css %}*/
/*         */
/*         {% endblock %}*/
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
/*     <div class="header header-classic-dark header-sticky">*/
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
/*                      <li class="dropdown">*/
/*                         <a href="{{path('evenement')}}" >*/
/*                             evenement*/
/*                         </a>*/
/*                         */
/*                     </li> */
/*                        <li class="dropdown">*/
/*                         <a href="{{path('probleme')}}" >*/
/*                             freelance*/
/*                         </a>*/
/*                         */
/*                     </li> */
/* 			   <li class="dropdown">*/
/*                         <a href="{{path('projet')}}" >*/
/*                             parcourir les projets*/
/*                         </a>*/
/*                         */
/*                     </li>   */
/*                      <li class="dropdown">*/
/*                         <a href="{{path('modifierProfile')}}" >*/
/*                         profile*/
/*                         </a>*/
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
/*                     */
/*                     {% block body %}*/
/*                         */
/*                         */
/*                         {% endblock %}*/
/*                 */
/*             </div>*/
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
/* */
/* <!-- JS Global Compulsory -->*/
/* <script type="text/javascript" src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>*/
/* <!-- JS Implementing Plugins -->*/
/* <script type="text/javascript" src="{{asset('assets/plugins/back-to-top.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/plugins/smoothScroll.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/plugins/counter/waypoints.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/plugins/counter/jquery.counterup.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>*/
/* <!-- JS Customization -->*/
/* <script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>*/
/* <!-- JS Page Level -->*/
/* <script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/js/plugins/datepicker.js')}}"></script>*/
/* <script type="text/javascript" src="{{asset('assets/js/plugins/style-switcher.js')}}"></script>*/
/* <script type="text/javascript">*/
/*     jQuery(document).ready(function() {*/
/*         App.init();*/
/*         App.initCounter();*/
/*         App.initScrollBar();*/
/*         Datepicker.initDatepicker();*/
/*         StyleSwitcher.initStyleSwitcher();*/
/*     });*/
/* </script>*/
/* */
/* {% block javascript %}*/
/*     */
/*     {% endblock %}*/
/* */
/* */
/* <!--[if lt IE 9]>*/
/*     <script src="{{asset('assets/plugins/respond.js')}}"></script>*/
/*     <script src="{{asset('assets/plugins/html5shiv.js')}}"></script>*/
/*     <script src="{{asset('assets/plugins/placeholder-IE-fixes.js')}}"></script>*/
/* <![endif]-->*/
/* */
/* </body>*/
/* </html>*/
/* */
