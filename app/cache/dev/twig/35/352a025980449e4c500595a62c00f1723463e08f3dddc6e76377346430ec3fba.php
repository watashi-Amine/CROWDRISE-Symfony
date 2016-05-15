<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8f900d874c9c22954dff4943961e9de67f5c73968a12f6320679c00d4bb012c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "     <div>
            ";
        // line 2
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 3
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 8
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 10
        echo "        </div>

        ";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 13
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 14
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 15
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 16
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        ";
        }
        // line 21
        echo "



<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->  
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->  
<!--[if !IE]><!--> <html dir=\"rtl\" lang=\"en\"> <!--<![endif]-->  
<head>
    <title>Login 1 | Unify - Responsive Website Template</title>

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
    <link rel=\"stylesheet\" href=\"../assets/plugins/bootstrap/css/bootstrap-rtl.min.css\">
    <link rel=\"stylesheet\" href=\"../assets/css/css-rtl/style-rtl.css\">

    <!-- CSS Implementing Plugins -->
    <link rel=\"stylesheet\" href=\"../assets/plugins/animate.css\">
    <link rel=\"stylesheet\" href=\"../assets/plugins/line-icons/line-icons.css\">
    <link rel=\"stylesheet\" href=\"../assets/plugins/font-awesome/css/font-awesome.min.css\">

    <!-- CSS Page Style -->    
    <link rel=\"stylesheet\" href=\"../assets/css/pages/page_log_reg_v2.css\">    

    <!-- Style Switcher -->
    <link rel=\"stylesheet\" href=\"../assets/css/plugins/style-switcher.css\">

    <!-- CSS Theme -->    
    <link rel=\"stylesheet\" href=\"../assets/css/css-rtl/theme-colors/default.css\" id=\"style_color\">
    <link rel=\"stylesheet\" href=\"../assets/css/css-rtl/theme-skins/dark.css\">

    <!-- RTL Customization -->
    <link rel=\"stylesheet\" href=\"../assets/css/css-rtl/rtl.css\">

    <!-- CSS Customization -->
    <link rel=\"stylesheet\" href=\"../assets/css/css-rtl/custom-rtl.css\">
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
            <li class=\"theme-default last theme-active\" data-style=\"default\" data-header=\"light\"></li>
            <li class=\"theme-blue\" data-style=\"blue\" data-header=\"light\"></li>
            <li class=\"theme-orange\" data-style=\"orange\" data-header=\"light\"></li>
            <li class=\"theme-red\" data-style=\"red\" data-header=\"light\"></li>
            <li class=\"theme-light\" data-style=\"light\" data-header=\"light\"></li>
            <li class=\"theme-purple\" data-style=\"purple\" data-header=\"light\"></li>
            <li class=\"theme-aqua last\" data-style=\"aqua\" data-header=\"light\"></li>
            <li class=\"theme-brown\" data-style=\"brown\" data-header=\"light\"></li>
            <li class=\"theme-dark-blue\" data-style=\"dark-blue\" data-header=\"light\"></li>
            <li class=\"theme-light-green\" data-style=\"light-green\" data-header=\"light\"></li>
            <li class=\"theme-dark-red\" data-style=\"dark-red\" data-header=\"light\"></li>
            <li class=\"theme-teal\" data-style=\"teal\" data-header=\"light\"></li>
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

        <!-- Theme Type -->
        <div class=\"style-switcher-heading\">Theme Types and Versions</div>
        <div class=\"row no-col-space margin-bottom-10\">
            <div class=\"col-xs-6\">
                <a href=\"../Shop-UI/index.html\" class=\"btn-u btn-u-xs btn-u-dark btn-block\">Shop UI <small class=\"dp-block\">Template</small></a>
            </div>
            <div class=\"col-xs-6\">
                <a href=\"../One-Page/index.html\" class=\"btn-u btn-u-xs btn-u-dark btn-block\">One Page <small class=\"dp-block\">Template</small></a>
            </div>
        </div>           

        <div class=\"row no-col-space\">
            <div class=\"col-xs-6\">
                <a href=\"..//index.html\" class=\"btn-u btn-u-xs btn-u-dark btn-block\">LTR <small class=\"dp-block\">Version</small></a>
            </div>
            <div class=\"col-xs-6\">
                <a href=\"../Blog/index.html\" class=\"btn-u btn-u-xs btn-u-dark btn-block\">Blog <small class=\"dp-block\">Template</small></a>
            </div>
        </div>           
    </div>
</div><!--/style-switcher-->
<!--=== End Style Switcher ===-->    

<!--=== Content Part ===-->    
<div class=\"container\">
    <!--Reg Block-->
    <div class=\"reg-block\">
        <div class=\"reg-block-header\">
            <h2>Sign In</h2>
            <ul class=\"social-icons text-center\">
                <li><a class=\"rounded-x social_facebook\" data-original-title=\"Facebook\" href=\"#\"></a></li>
                <li><a class=\"rounded-x social_twitter\" data-original-title=\"Twitter\" href=\"#\"></a></li>
                <li><a class=\"rounded-x social_googleplus\" data-original-title=\"Google Plus\" href=\"#\"></a></li>
                <li><a class=\"rounded-x social_linkedin\" data-original-title=\"Linkedin\" href=\"#\"></a></li>
            </ul>
            <p>Don't Have Account? Click <a class=\"color-green\" href=\"page_registration1.html\">Sign Up</a> to registration.</p>            
        </div>
        
        ";
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 183
        echo "

    </div>
    <!--End Reg Block-->
</div><!--/container-->
<!--=== End Content Part ===-->

<!-- JS Global Compulsory -->           
<script src=\"../assets/plugins/jquery/jquery.min.js\"></script>
<script src=\"../assets/plugins/jquery/jquery-migrate.min.js\"></script>
<script src=\"../assets/plugins/bootstrap/js/bootstrap.min.js\"></script> 
<!-- JS Implementing Plugins -->           
<script src=\"../assets/plugins/back-to-top.js\"></script>
<script src=\"../assets/plugins/backstretch/jquery.backstretch.min.js\"></script>
<!-- JS Customization -->
<script src=\"../assets/js/custom.js\"></script>
<!-- JS Page Level -->           
<script src=\"../assets/js/app.js\"></script>
<script src=\"../assets/js/plugins/style-switcher-rtl.js\"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
        StyleSwitcher.initStyleSwitcher();      
    });
</script>
<script>
    \$.backstretch([
      \"../assets/img/bg/19.jpg\",
      \"../assets/img/bg/18.jpg\",
      ], {
        fade: 1000,
        duration: 7000
    });
</script>
<!--[if lt IE 9]>
    <script src=\"../assets/plugins/respond.js\"></script>
    <script src=\"../assets/plugins/html5shiv.js\"></script>
    <script src=\"../assets/plugins/placeholder-IE-fixes.js\"></script>
<![endif]-->

</body>
</html> 
";
    }

    // line 150
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 151
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 152
            echo "    <div>coordonnéé invalide</div>
";
        }
        // line 154
        echo "        
        <form action=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

        <div class=\"input-group margin-bottom-20\">
            <span class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></span>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" placeholder=\"username\">
        </div>
        <div class=\"input-group margin-bottom-20\">
            <span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
            <input type=\"text\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"  class=\"form-control\" placeholder=\"Password\">
        </div>
        <hr>

        <div class=\"checkbox\">
            <label>
                <input  type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> 
                <p>Always stay signed in</p>
            </label>            
        </div>
                                
        <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1\">
                <button type=\"submit\" class=\"btn-u btn-block\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Log In</button>
            </div>
        </div>
        
        </form>
            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 177,  290 => 160,  283 => 156,  279 => 155,  276 => 154,  272 => 152,  270 => 151,  267 => 150,  221 => 183,  219 => 150,  216 => 149,  87 => 21,  84 => 20,  78 => 19,  69 => 16,  64 => 15,  59 => 14,  54 => 13,  52 => 12,  48 => 10,  40 => 8,  34 => 5,  30 => 4,  25 => 3,  23 => 2,  20 => 1,);
    }
}
/*      <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/* */
/* */
/* */
/* <!DOCTYPE html>*/
/* <!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  */
/* <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  */
/* <!--[if !IE]><!--> <html dir="rtl" lang="en"> <!--<![endif]-->  */
/* <head>*/
/*     <title>Login 1 | Unify - Responsive Website Template</title>*/
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
/*     <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap-rtl.min.css">*/
/*     <link rel="stylesheet" href="../assets/css/css-rtl/style-rtl.css">*/
/* */
/*     <!-- CSS Implementing Plugins -->*/
/*     <link rel="stylesheet" href="../assets/plugins/animate.css">*/
/*     <link rel="stylesheet" href="../assets/plugins/line-icons/line-icons.css">*/
/*     <link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.min.css">*/
/* */
/*     <!-- CSS Page Style -->    */
/*     <link rel="stylesheet" href="../assets/css/pages/page_log_reg_v2.css">    */
/* */
/*     <!-- Style Switcher -->*/
/*     <link rel="stylesheet" href="../assets/css/plugins/style-switcher.css">*/
/* */
/*     <!-- CSS Theme -->    */
/*     <link rel="stylesheet" href="../assets/css/css-rtl/theme-colors/default.css" id="style_color">*/
/*     <link rel="stylesheet" href="../assets/css/css-rtl/theme-skins/dark.css">*/
/* */
/*     <!-- RTL Customization -->*/
/*     <link rel="stylesheet" href="../assets/css/css-rtl/rtl.css">*/
/* */
/*     <!-- CSS Customization -->*/
/*     <link rel="stylesheet" href="../assets/css/css-rtl/custom-rtl.css">*/
/* </head> */
/* */
/* <body>*/
/* <!--=== Style Switcher ===-->    */
/* <i class="style-switcher-btn fa fa-cogs hidden-xs"></i>*/
/* <div class="style-switcher animated fadeInRight">*/
/*     <div class="style-swticher-header">*/
/*         <div class="style-switcher-heading">Style Switcher</div>            */
/*         <div class="theme-close"><i class="icon-close"></i></div>*/
/*     </div>*/
/* */
/*     <div class="style-swticher-body">*/
/*         <!-- Theme Colors -->*/
/*         <div class="style-switcher-heading">Theme Colors</div>*/
/*         <ul class="list-unstyled">*/
/*             <li class="theme-default last theme-active" data-style="default" data-header="light"></li>*/
/*             <li class="theme-blue" data-style="blue" data-header="light"></li>*/
/*             <li class="theme-orange" data-style="orange" data-header="light"></li>*/
/*             <li class="theme-red" data-style="red" data-header="light"></li>*/
/*             <li class="theme-light" data-style="light" data-header="light"></li>*/
/*             <li class="theme-purple" data-style="purple" data-header="light"></li>*/
/*             <li class="theme-aqua last" data-style="aqua" data-header="light"></li>*/
/*             <li class="theme-brown" data-style="brown" data-header="light"></li>*/
/*             <li class="theme-dark-blue" data-style="dark-blue" data-header="light"></li>*/
/*             <li class="theme-light-green" data-style="light-green" data-header="light"></li>*/
/*             <li class="theme-dark-red" data-style="dark-red" data-header="light"></li>*/
/*             <li class="theme-teal" data-style="teal" data-header="light"></li>*/
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
/*         </div>            */
/* */
/*         <hr>*/
/* */
/*         <!-- Theme Type -->*/
/*         <div class="style-switcher-heading">Theme Types and Versions</div>*/
/*         <div class="row no-col-space margin-bottom-10">*/
/*             <div class="col-xs-6">*/
/*                 <a href="../Shop-UI/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">Shop UI <small class="dp-block">Template</small></a>*/
/*             </div>*/
/*             <div class="col-xs-6">*/
/*                 <a href="../One-Page/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">One Page <small class="dp-block">Template</small></a>*/
/*             </div>*/
/*         </div>           */
/* */
/*         <div class="row no-col-space">*/
/*             <div class="col-xs-6">*/
/*                 <a href="..//index.html" class="btn-u btn-u-xs btn-u-dark btn-block">LTR <small class="dp-block">Version</small></a>*/
/*             </div>*/
/*             <div class="col-xs-6">*/
/*                 <a href="../Blog/index.html" class="btn-u btn-u-xs btn-u-dark btn-block">Blog <small class="dp-block">Template</small></a>*/
/*             </div>*/
/*         </div>           */
/*     </div>*/
/* </div><!--/style-switcher-->*/
/* <!--=== End Style Switcher ===-->    */
/* */
/* <!--=== Content Part ===-->    */
/* <div class="container">*/
/*     <!--Reg Block-->*/
/*     <div class="reg-block">*/
/*         <div class="reg-block-header">*/
/*             <h2>Sign In</h2>*/
/*             <ul class="social-icons text-center">*/
/*                 <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>*/
/*                 <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>*/
/*                 <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>*/
/*                 <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>*/
/*             </ul>*/
/*             <p>Don't Have Account? Click <a class="color-green" href="page_registration1.html">Sign Up</a> to registration.</p>            */
/*         </div>*/
/*         */
/*         {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>coordonnéé invalide</div>*/
/* {% endif %}*/
/*         */
/*         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*         <div class="input-group margin-bottom-20">*/
/*             <span class="input-group-addon"><i class="fa fa-envelope"></i></span>*/
/*             <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" class="form-control" placeholder="username">*/
/*         </div>*/
/*         <div class="input-group margin-bottom-20">*/
/*             <span class="input-group-addon"><i class="fa fa-lock"></i></span>*/
/*             <input type="text" type="password" id="password" name="_password" required="required"  class="form-control" placeholder="Password">*/
/*         </div>*/
/*         <hr>*/
/* */
/*         <div class="checkbox">*/
/*             <label>*/
/*                 <input  type="checkbox" id="remember_me" name="_remember_me" value="on"> */
/*                 <p>Always stay signed in</p>*/
/*             </label>            */
/*         </div>*/
/*                                 */
/*         <div class="row">*/
/*             <div class="col-md-10 col-md-offset-1">*/
/*                 <button type="submit" class="btn-u btn-block" value="{{ 'security.login.submit'|trans }}">Log In</button>*/
/*             </div>*/
/*         </div>*/
/*         */
/*         </form>*/
/*             {% endblock fos_user_content %}*/
/* */
/* */
/*     </div>*/
/*     <!--End Reg Block-->*/
/* </div><!--/container-->*/
/* <!--=== End Content Part ===-->*/
/* */
/* <!-- JS Global Compulsory -->           */
/* <script src="../assets/plugins/jquery/jquery.min.js"></script>*/
/* <script src="../assets/plugins/jquery/jquery-migrate.min.js"></script>*/
/* <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script> */
/* <!-- JS Implementing Plugins -->           */
/* <script src="../assets/plugins/back-to-top.js"></script>*/
/* <script src="../assets/plugins/backstretch/jquery.backstretch.min.js"></script>*/
/* <!-- JS Customization -->*/
/* <script src="../assets/js/custom.js"></script>*/
/* <!-- JS Page Level -->           */
/* <script src="../assets/js/app.js"></script>*/
/* <script src="../assets/js/plugins/style-switcher-rtl.js"></script>*/
/* <script>*/
/*     jQuery(document).ready(function() {*/
/*         App.init();*/
/*         StyleSwitcher.initStyleSwitcher();      */
/*     });*/
/* </script>*/
/* <script>*/
/*     $.backstretch([*/
/*       "../assets/img/bg/19.jpg",*/
/*       "../assets/img/bg/18.jpg",*/
/*       ], {*/
/*         fade: 1000,*/
/*         duration: 7000*/
/*     });*/
/* </script>*/
/* <!--[if lt IE 9]>*/
/*     <script src="../assets/plugins/respond.js"></script>*/
/*     <script src="../assets/plugins/html5shiv.js"></script>*/
/*     <script src="../assets/plugins/placeholder-IE-fixes.js"></script>*/
/* <![endif]-->*/
/* */
/* </body>*/
/* </html> */
/* */
