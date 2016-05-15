<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_a9f616d92b325afbf6f64d8106fdd0b794b591fe9ad8ab2a61e0d021fd04c004 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->  
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->  
<!--[if !IE]><!--> <html dir=\"rtl\" lang=\"en\"> <!--<![endif]-->  
<head>
    <title>Registration 1 | Unify - Responsive Website Template</title>

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
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/bootstrap/css/bootstrap-rtl.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/css-rtl/style-rtl.css"), "html", null, true);
        echo "\">

    <!-- CSS Implementing Plugins -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/line-icons/line-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">

    <!-- CSS Page Style -->    
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/pages/page_log_reg_v2.css"), "html", null, true);
        echo "\">    

    <!-- Style Switcher -->
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/plugins/style-switcher.css"), "html", null, true);
        echo "\">

    <!-- CSS Theme -->    
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/css-rtl/theme-colors/default.css"), "html", null, true);
        echo "\" id=\"style_color\">
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/css-rtl/theme-skins/dark.css"), "html", null, true);
        echo "\">

    <!-- RTL Customization -->
    <link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/css-rtl/rtl.css"), "html", null, true);
        echo "\">

    <!-- CSS Customization -->
    <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/css-rtl/custom-rtl.css"), "html", null, true);
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
                <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Shop-UI/index.html"), "html", null, true);
        echo "\" class=\"btn-u btn-u-xs btn-u-dark btn-block\">Shop UI <small class=\"dp-block\">Template</small></a>
            </div>
            <div class=\"col-xs-6\">
                <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("One-Page/index.html"), "html", null, true);
        echo "\" class=\"btn-u btn-u-xs btn-u-dark btn-block\">One Page <small class=\"dp-block\">Template</small></a>
            </div>
        </div>           

        <div class=\"row no-col-space\">
            <div class=\"col-xs-6\">
                <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/index.html"), "html", null, true);
        echo "\" class=\"btn-u btn-u-xs btn-u-dark btn-block\">LTR <small class=\"dp-block\">Version</small></a>
            </div>
            <div class=\"col-xs-6\">
                <a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("Blog/index.html"), "html", null, true);
        echo "\" class=\"btn-u btn-u-xs btn-u-dark btn-block\">Blog <small class=\"dp-block\">Template</small></a>
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
            <h2>Sign Up</h2>
            <ul class=\"social-icons text-center\">
                <li><a class=\"rounded-x social_facebook\" data-original-title=\"Facebook\" href=\"#\"></a></li>
                <li><a class=\"rounded-x social_twitter\" data-original-title=\"Twitter\" href=\"#\"></a></li>
                <li><a class=\"rounded-x social_googleplus\" data-original-title=\"Google Plus\" href=\"#\"></a></li>
                <li><a class=\"rounded-x social_linkedin\" data-original-title=\"Linkedin\" href=\"#\"></a></li>
            </ul>
            <p>Already Signed Up? Click <a class=\"color-green\" href=\"page_login1.html')}}\">Sign In</a> to login your account.</p>
        </div>

        
        
";
        // line 129
        echo " 
        ";
        // line 130
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

        
        <div class=\"input-group margin-bottom-20\">
            <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "nom utilisateur")));
        echo "
        </div>
        <div class=\"input-group margin-bottom-20\">
            <span class=\"input-group-addon\"><i class=\"fa fa-envelope\"></i></span>
                            ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "email")));
        echo "

        </div>
        <div class=\"input-group margin-bottom-20\">
            <span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "mot de passe")));
        echo "

        </div>
        <div class=\"input-group margin-bottom-30\">
            <span class=\"input-group-addon\"><i class=\"fa fa-key\"></i></span>
            ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Confirm Password")));
        echo "

        </div>
        <hr>

        <div class=\"checkbox\">            
            <label>
                <input type=\"checkbox\"> 
                I read <a target=\"_blank\" href=\"page_terms.html')}}\">Terms and Conditions</a>
            </label>
        </div>
                                
        <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1\">
                <button type=\"submit\" value=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit"), "html", null, true);
        echo "\" class=\"btn-u btn-block\">inscription</button>                
            </div>
        </div>
";
        // line 166
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>
    <!--End Reg Block-->
</div><!--/container-->
<!--=== End Content Part ===-->

<!-- JS Global Compulsory -->           
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
<!-- JS Implementing Plugins -->           
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/backstretch/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->           
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/plugins/style-switcher-rtl.js"), "html", null, true);
        echo "\"></script>
<script>
    jQuery(document).ready(function() {
        App.init();
        StyleSwitcher.initStyleSwitcher();      
    });
</script>
<script>
    \$.backstretch([
      \"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/bg/19.jpg"), "html", null, true);
        echo ",
      \"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/bg/18.jpg"), "html", null, true);
        echo ",
      ], {
        fade: 1000,
        duration: 7000
    });
</script>
<!--[if lt IE 9]>
    <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/respond.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/plugins/placeholder-IE-fixes.js"), "html", null, true);
        echo "\"></script>
<![endif]-->

</body>
</html> ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 203,  321 => 202,  317 => 201,  307 => 194,  303 => 193,  291 => 184,  287 => 183,  282 => 181,  277 => 179,  273 => 178,  268 => 176,  264 => 175,  260 => 174,  249 => 166,  243 => 163,  226 => 149,  218 => 144,  210 => 139,  203 => 135,  195 => 130,  192 => 129,  165 => 103,  159 => 100,  150 => 94,  144 => 91,  94 => 44,  88 => 41,  82 => 38,  78 => 37,  72 => 34,  66 => 31,  60 => 28,  56 => 27,  52 => 26,  46 => 23,  42 => 22,  19 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  */
/* <!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  */
/* <!--[if !IE]><!--> <html dir="rtl" lang="en"> <!--<![endif]-->  */
/* <head>*/
/*     <title>Registration 1 | Unify - Responsive Website Template</title>*/
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
/*     <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap-rtl.min.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('assets/css/css-rtl/style-rtl.css')}}">*/
/* */
/*     <!-- CSS Implementing Plugins -->*/
/*     <link rel="stylesheet" href="{{asset('assets/plugins/animate.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('assets/plugins/line-icons/line-icons.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">*/
/* */
/*     <!-- CSS Page Style -->    */
/*     <link rel="stylesheet" href="{{asset('assets/css/pages/page_log_reg_v2.css')}}">    */
/* */
/*     <!-- Style Switcher -->*/
/*     <link rel="stylesheet" href="{{asset('assets/css/plugins/style-switcher.css')}}">*/
/* */
/*     <!-- CSS Theme -->    */
/*     <link rel="stylesheet" href="{{asset('assets/css/css-rtl/theme-colors/default.css')}}" id="style_color">*/
/*     <link rel="stylesheet" href="{{asset('assets/css/css-rtl/theme-skins/dark.css')}}">*/
/* */
/*     <!-- RTL Customization -->*/
/*     <link rel="stylesheet" href="{{asset('assets/css/css-rtl/rtl.css')}}">*/
/* */
/*     <!-- CSS Customization -->*/
/*     <link rel="stylesheet" href="{{asset('assets/css/css-rtl/custom-rtl.css')}}">*/
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
/*         */
/*         <!-- Theme Type -->*/
/*         <div class="style-switcher-heading">Theme Types and Versions</div>*/
/*         <div class="row no-col-space margin-bottom-10">*/
/*             <div class="col-xs-6">*/
/*                 <a href="{{asset('Shop-UI/index.html')}}" class="btn-u btn-u-xs btn-u-dark btn-block">Shop UI <small class="dp-block">Template</small></a>*/
/*             </div>*/
/*             <div class="col-xs-6">*/
/*                 <a href="{{asset('One-Page/index.html')}}" class="btn-u btn-u-xs btn-u-dark btn-block">One Page <small class="dp-block">Template</small></a>*/
/*             </div>*/
/*         </div>           */
/* */
/*         <div class="row no-col-space">*/
/*             <div class="col-xs-6">*/
/*                 <a href="{{asset('/index.html')}}" class="btn-u btn-u-xs btn-u-dark btn-block">LTR <small class="dp-block">Version</small></a>*/
/*             </div>*/
/*             <div class="col-xs-6">*/
/*                 <a href="{{asset('Blog/index.html')}}" class="btn-u btn-u-xs btn-u-dark btn-block">Blog <small class="dp-block">Template</small></a>*/
/*             </div>*/
/*         </div>           */
/*     </div>*/
/* </div><!--/style-switcher-->*/
/* <!--=== End Style Switcher ===--> */
/* */
/* <!--=== Content Part ===-->    */
/* <div class="container">*/
/*     <!--Reg Block-->*/
/*     <div class="reg-block">*/
/*         <div class="reg-block-header">*/
/*             <h2>Sign Up</h2>*/
/*             <ul class="social-icons text-center">*/
/*                 <li><a class="rounded-x social_facebook" data-original-title="Facebook" href="#"></a></li>*/
/*                 <li><a class="rounded-x social_twitter" data-original-title="Twitter" href="#"></a></li>*/
/*                 <li><a class="rounded-x social_googleplus" data-original-title="Google Plus" href="#"></a></li>*/
/*                 <li><a class="rounded-x social_linkedin" data-original-title="Linkedin" href="#"></a></li>*/
/*             </ul>*/
/*             <p>Already Signed Up? Click <a class="color-green" href="page_login1.html')}}">Sign In</a> to login your account.</p>*/
/*         </div>*/
/* */
/*         */
/*         */
/* {#{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*     {{ form_widget(form) }}*/
/*   #} */
/*         {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/* */
/*         */
/*         <div class="input-group margin-bottom-20">*/
/*             <span class="input-group-addon"><i class="fa fa-user"></i></span>*/
/*                 {{ form_widget(form.username, {'attr': {'class': 'form-control','placeholder':'nom utilisateur'}}) }}*/
/*         </div>*/
/*         <div class="input-group margin-bottom-20">*/
/*             <span class="input-group-addon"><i class="fa fa-envelope"></i></span>*/
/*                             {{ form_widget(form.email, {'attr': {'class': 'form-control','placeholder':'email'}}) }}*/
/* */
/*         </div>*/
/*         <div class="input-group margin-bottom-20">*/
/*             <span class="input-group-addon"><i class="fa fa-lock"></i></span>*/
/* {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control','placeholder':'mot de passe'}}) }}*/
/* */
/*         </div>*/
/*         <div class="input-group margin-bottom-30">*/
/*             <span class="input-group-addon"><i class="fa fa-key"></i></span>*/
/*             {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control','placeholder':'Confirm Password'}}) }}*/
/* */
/*         </div>*/
/*         <hr>*/
/* */
/*         <div class="checkbox">            */
/*             <label>*/
/*                 <input type="checkbox"> */
/*                 I read <a target="_blank" href="page_terms.html')}}">Terms and Conditions</a>*/
/*             </label>*/
/*         </div>*/
/*                                 */
/*         <div class="row">*/
/*             <div class="col-md-10 col-md-offset-1">*/
/*                 <button type="submit" value="{{ 'registration.submit'|trans }}" class="btn-u btn-block">inscription</button>                */
/*             </div>*/
/*         </div>*/
/* {{ form_end(form) }}*/
/* */
/*     </div>*/
/*     <!--End Reg Block-->*/
/* </div><!--/container-->*/
/* <!--=== End Content Part ===-->*/
/* */
/* <!-- JS Global Compulsory -->           */
/* <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>*/
/* <script src="{{asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>*/
/* <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script> */
/* <!-- JS Implementing Plugins -->           */
/* <script src="{{asset('assets/plugins/back-to-top.js')}}"></script>*/
/* <script src="{{asset('assets/plugins/backstretch/jquery.backstretch.min.js')}}"></script>*/
/* <!-- JS Customization -->*/
/* <script src="{{asset('assets/js/custom.js')}}"></script>*/
/* <!-- JS Page Level -->           */
/* <script src="{{asset('assets/js/app.js')}}"></script>*/
/* <script src="{{asset('assets/js/plugins/style-switcher-rtl.js')}}"></script>*/
/* <script>*/
/*     jQuery(document).ready(function() {*/
/*         App.init();*/
/*         StyleSwitcher.initStyleSwitcher();      */
/*     });*/
/* </script>*/
/* <script>*/
/*     $.backstretch([*/
/*       "{{asset('assets/img/bg/19.jpg')}},*/
/*       "{{asset('assets/img/bg/18.jpg')}},*/
/*       ], {*/
/*         fade: 1000,*/
/*         duration: 7000*/
/*     });*/
/* </script>*/
/* <!--[if lt IE 9]>*/
/*     <script src="{{asset('assets/plugins/respond.js')}}"></script>*/
/*     <script src="{{asset('assets/plugins/html5shiv.js')}}"></script>*/
/*     <script src="{{asset('assets/plugins/placeholder-IE-fixes.js')}}"></script>*/
/* <![endif]-->*/
/* */
/* </body>*/
/* </html> */
