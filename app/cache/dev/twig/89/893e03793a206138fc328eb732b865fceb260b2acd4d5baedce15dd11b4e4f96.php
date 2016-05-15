<?php

/* ::adminbase.html.twig */
class __TwigTemplate_c7b85be6309aa993dd26e4a27d2b8a064d93fa27492feaad5a7e79458f0b8c59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'test' => array($this, 'block_test'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    ";
        // line 3
        $this->displayBlock('test', $context, $blocks);
        // line 5
        echo "\t<head>
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
\t\t<meta charset=\"utf-8\" />
\t\t<title>Dashboard - Ace Admin</title>

\t\t<meta name=\"description\" content=\"overview &amp; stats\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

\t\t<!-- bootstrap & fontawesome -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/css/bootstrap.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/css/font-awesome.css"), "html", null, true);
        echo "\" />

\t\t<!-- page specific plugin styles -->

\t\t<!-- text fonts -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/css/ace-fonts.css"), "html", null, true);
        echo "\" />

\t\t<!-- ace styles -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/css/ace.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" id=\"main-ace-style\" />

\t\t<!--[if lte IE 9]>
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/css/ace-part2.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" />
\t\t<![endif]-->

\t\t<!--[if lte IE 9]>
\t\t  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/css/ace-ie.css"), "html", null, true);
        echo "\" />
\t\t<![endif]-->

\t\t<!-- inline styles related to this page -->

\t\t<!-- ace settings handler -->
\t\t<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace-extra.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- HTML5shiv and Respond.js')}} for IE8 to support HTML5 elements and media queries -->

\t\t<!--[if lte IE 8]>
\t\t<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/html5shiv.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/respond.js"), "html", null, true);
        echo "\"></script>
\t\t<![endif]-->
\t</head>

\t<body class=\"no-skin\">
\t\t<!-- #section:basics/navbar.layout -->
\t\t<div id=\"navbar\" class=\"navbar navbar-default\">
\t\t\t<script type=\"text/javascript\">
\t\t\t\ttry{ace.settings.check('navbar' , 'fixed')}catch(e){}
\t\t\t</script>

\t\t\t<div class=\"navbar-container\" id=\"navbar-container\">
\t\t\t\t<!-- #section:basics/sidebar.mobile.toggle -->
\t\t\t\t<button type=\"button\" class=\"navbar-toggle menu-toggler pull-left\" id=\"menu-toggler\" data-target=\"#sidebar\">
\t\t\t\t\t<span class=\"sr-only\">Toggle sidebar</span>

\t\t\t\t\t<span class=\"icon-bar\"></span>

\t\t\t\t\t<span class=\"icon-bar\"></span>

\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>

\t\t\t\t<!-- /section:basics/sidebar.mobile.toggle -->
\t\t\t\t<div class=\"navbar-header pull-left\">
\t\t\t\t\t<!-- #section:basics/navbar.layout.brand -->
\t\t\t\t\t<a href=\"#\" class=\"navbar-brand\">
\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t<i class=\"fa fa-leaf\"></i>
\t\t\t\t\t\t\tAce Admin
\t\t\t\t\t\t</small>
\t\t\t\t\t</a>

\t\t\t\t\t<!-- /section:basics/navbar.layout.brand -->

\t\t\t\t\t<!-- #section:basics/navbar.toggle -->

\t\t\t\t\t<!-- /section:basics/navbar.toggle -->
\t\t\t\t</div>

\t\t\t\t<!-- #section:basics/navbar.dropdown -->
\t\t\t\t<div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\">
\t\t\t\t\t<ul class=\"nav ace-nav\">
\t\t\t\t\t\t<li class=\"grey\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-tasks\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge badge-grey\">4</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-check\"></i>
\t\t\t\t\t\t\t\t\t4 Tasks to complete
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-navbar\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Software Update</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">65%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:65%\" class=\"progress-bar\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Hardware Upgrade</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">35%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:35%\" class=\"progress-bar progress-bar-danger\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Unit Testing</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">15%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:15%\" class=\"progress-bar progress-bar-warning\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Bug Fixes</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">90%</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini progress-striped active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:90%\" class=\"progress-bar progress-bar-success\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tSee tasks with details
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"purple\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-bell icon-animated-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge badge-important\">8</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-exclamation-triangle\"></i>
\t\t\t\t\t\t\t\t\t8 Notifications
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-navbar navbar-pink\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-pink fa fa-comment\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Comments
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-info\">+12</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs btn-primary fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tBob just signed up as an editor ...
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-success fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Orders
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-success\">+8</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-info fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFollowers
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-info\">+11</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tSee all notifications
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"green\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope icon-animated-vertical\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">5</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t<li class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope-o\"></i>
\t\t\t\t\t\t\t\t\t5 Messages
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-content\">
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-navbar\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/avatars/avatar.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Alex's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Alex:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque penatibus et auctor ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>a moment ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/avatars/avatar3.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Susan's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Susan:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id ligula porta felis euismod ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>20 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/avatars/avatar4.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Bob's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Bob:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNullam quis risus eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3:15 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/avatars/avatar2.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Kate's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Kate:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1:33 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/avatars/avatar5.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Fred's Avatar\" />
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Fred:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id penatibus et auctor  ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>10:09 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t<a href=\"inbox.html\">
\t\t\t\t\t\t\t\t\t\tSee all messages
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- #section:basics/navbar.user_menu -->
\t\t\t\t\t\t<li class=\"light-blue\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t<img class=\"nav-user-photo\" src=\"";
        // line 343
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) . ".") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "path", array())), "html", null, true);
        echo "\" alt=\"Jason's Photo\" />
\t\t\t\t\t\t\t\t<span class=\"user-info\">
\t\t\t\t\t\t\t\t\t<small>Welcome,</small>
\t\t\t\t\t\t\t\t\t";
        // line 346
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-caret-down\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-cog\"></i>
\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"profile.html\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"divider\"></li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 370
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-power-off\"></i>
\t\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- /section:basics/navbar.user_menu -->
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<!-- /section:basics/navbar.dropdown -->
\t\t\t</div><!-- /.navbar-container -->
\t\t</div>

\t\t<!-- /section:basics/navbar.layout -->
\t\t<div class=\"main-container\" id=\"main-container\">
\t\t\t<script type=\"text/javascript\">
\t\t\t\ttry{ace.settings.check('main-container' , 'fixed')}catch(e){}
\t\t\t</script>

\t\t\t<!-- #section:basics/sidebar -->
                        ";
        // line 393
        $this->loadTemplate("::sidebaradmin.html.twig", "::adminbase.html.twig", 393)->display($context);
        // line 394
        echo "\t\t\t<!-- /section:basics/sidebar -->
\t\t\t<div class=\"main-content\">
\t\t\t\t<div class=\"main-content-inner\">
\t\t\t\t\t<!-- #section:basics/content.breadcrumbs -->
\t\t\t\t\t<div class=\"breadcrumbs\" id=\"breadcrumbs\">
\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\ttry{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
\t\t\t\t\t\t</script>

\t\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-home home-icon\"></i>
\t\t\t\t\t\t\t\t<a href=\"#\">Home</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"active\">Dashboard</li>
\t\t\t\t\t\t</ul><!-- /.breadcrumb -->

\t\t\t\t\t\t<!-- #section:basics/content.searchbox -->
\t\t\t\t\t\t<div class=\"nav-search\" id=\"nav-search\">
                                                    ";
        // line 413
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("crowdBundle:admin:recherche"), array());
        // line 414
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div><!-- /.nav-search -->

\t\t\t\t\t\t<!-- /section:basics/content.searchbox -->
\t\t\t\t\t</div>

\t\t\t\t\t<!-- /section:basics/content.breadcrumbs -->
\t\t\t\t\t<div class=\"page-content\">
\t\t\t\t
                                            ";
        // line 423
        $this->displayBlock('body', $context, $blocks);
        // line 428
        echo "\t\t\t\t\t</div><!-- /.page-content -->
\t\t\t\t</div>
\t\t\t</div><!-- /.main-content -->

\t\t\t<div class=\"footer\">
\t\t\t\t<div class=\"footer-inner\">
\t\t\t\t\t<!-- #section:basics/footer -->
\t\t\t\t\t<div class=\"footer-content\">
\t\t\t\t\t\t<span class=\"bigger-120\">
\t\t\t\t\t\t\t<span class=\"blue bolder\">Ace</span>
\t\t\t\t\t\t\tApplication &copy; 2013-2014
\t\t\t\t\t\t</span>

\t\t\t\t\t\t&nbsp; &nbsp;
\t\t\t\t\t\t<span class=\"action-buttons\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-facebook-square text-primary bigger-150\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-rss-square orange bigger-150\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- /section:basics/footer -->
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
\t\t\t\t<i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
\t\t\t</a>
\t\t</div><!-- /.main-container -->

\t\t<!-- basic scripts -->

\t\t<!--[if !IE]> -->
\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/jquery.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>

\t\t<!-- <![endif]-->

\t\t<!--[if IE]>
<script type=\"text/javascript\">
 window.jQuery || document.write(\"<script src='";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/jquery1x.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
</script>
<![endif]-->
\t\t<script type=\"text/javascript\">
\t\t\tif('ontouchstart' in document.documentElement) document.write(\"<script src='";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/jquery.mobile.custom.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>
\t\t<script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- page specific plugin scripts -->

\t\t<!--[if lte IE 8]>
\t\t  <script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/excanvas.js"), "html", null, true);
        echo "\"></script>
\t\t<![endif]-->
\t\t<script src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/jquery-ui.custom.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/jquery.ui.touch-punch.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/jquery.easypiechart.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/jquery.sparkline.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- ace scripts -->
\t\t<script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/elements.scroller.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/elements.colorpicker.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/elements.fileinput.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/elements.typeahead.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/elements.wysiwyg.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/elements.spinner.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/elements.treeview.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/elements.wizard.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/elements.aside.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/ace.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/ace.ajax-content.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/ace.touch-drag.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/ace.sidebar.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/ace.sidebar-scroll-1.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/ace.submenu-hover.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/ace.widget-box.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/ace.settings.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/ace.settings-rtl.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/ace.settings-skin.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/ace.widget-on-reload.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/ace.searchbox-autocomplete.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- inline scripts related to this page -->
\t\t<script type=\"text/javascript\">
\t\t\tjQuery(function(\$) {
\t\t\t\t\$('.easy-pie-chart.percentage').each(function(){
\t\t\t\t\tvar \$box = \$(this).closest('.infobox');
\t\t\t\t\tvar barColor = \$(this).data('color') || (!\$box.hasClass('infobox-dark') ? \$box.css')}}('color') : 'rgba(255,255,255,0.95)');
\t\t\t\t\tvar trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
\t\t\t\t\tvar size = parseInt(\$(this).data('size')) || 50;
\t\t\t\t\t\$(this).easyPieChart({
\t\t\t\t\t\tbarColor: barColor,
\t\t\t\t\t\ttrackColor: trackColor,
\t\t\t\t\t\tscaleColor: false,
\t\t\t\t\t\tlineCap: 'butt',
\t\t\t\t\t\tlineWidth: parseInt(size/10),
\t\t\t\t\t\tanimate: /msie\\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
\t\t\t\t\t\tsize: size
\t\t\t\t\t});
\t\t\t\t})
\t\t\t
\t\t\t\t\$('.sparkline').each(function(){
\t\t\t\t\tvar \$box = \$(this).closest('.infobox');
\t\t\t\t\tvar barColor = !\$box.hasClass('infobox-dark') ? \$box.css')}}('color') : '#FFF';
\t\t\t\t\t\$(this).sparkline('html',
\t\t\t\t\t\t\t\t\t {
\t\t\t\t\t\t\t\t\t\ttagValuesAttribute:'data-values',
\t\t\t\t\t\t\t\t\t\ttype: 'bar',
\t\t\t\t\t\t\t\t\t\tbarColor: barColor ,
\t\t\t\t\t\t\t\t\t\tchartRangeMin:\$(this).data('min') || 0
\t\t\t\t\t\t\t\t\t });
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
\t\t\t  //but sometimes it brings up errors with normal resize event handlers
\t\t\t  \$.resize.throttleWindow = false;
\t\t\t
\t\t\t  var placeholder = \$('#piechart-placeholder').css')}}({'width':'90%' , 'min-height':'150px'});
\t\t\t  var data = [
\t\t\t\t{ label: \"social networks\",  data: 38.7, color: \"#68BC31\"},
\t\t\t\t{ label: \"search engines\",  data: 24.5, color: \"#2091CF\"},
\t\t\t\t{ label: \"ad campaigns\",  data: 8.2, color: \"#AF4E96\"},
\t\t\t\t{ label: \"direct traffic\",  data: 18.6, color: \"#DA5430\"},
\t\t\t\t{ label: \"other\",  data: 10, color: \"#FEE074\"}
\t\t\t  ]
\t\t\t  function drawPieChart(placeholder, data, position) {
\t\t\t \t  \$.plot(placeholder, data, {
\t\t\t\t\tseries: {
\t\t\t\t\t\tpie: {
\t\t\t\t\t\t\tshow: true,
\t\t\t\t\t\t\ttilt:0.8,
\t\t\t\t\t\t\thighlight: {
\t\t\t\t\t\t\t\topacity: 0.25
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tstroke: {
\t\t\t\t\t\t\t\tcolor: '#fff',
\t\t\t\t\t\t\t\twidth: 2
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\tstartAngle: 2
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tlegend: {
\t\t\t\t\t\tshow: true,
\t\t\t\t\t\tposition: position || \"ne\", 
\t\t\t\t\t\tlabelBoxBorderColor: null,
\t\t\t\t\t\tmargin:[-30,15]
\t\t\t\t\t}
\t\t\t\t\t,
\t\t\t\t\tgrid: {
\t\t\t\t\t\thoverable: true,
\t\t\t\t\t\tclickable: true
\t\t\t\t\t}
\t\t\t\t })
\t\t\t }
\t\t\t drawPieChart(placeholder, data);
\t\t\t
\t\t\t /**
\t\t\t we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
\t\t\t so that's not needed actually.
\t\t\t */
\t\t\t placeholder.data('chart', data);
\t\t\t placeholder.data('draw', drawPieChart);
\t\t\t
\t\t\t
\t\t\t  //pie chart tooltip example
\t\t\t  var \$tooltip = \$(\"<div class='tooltip top in'><div class='tooltip-inner'></div></div>\").hide().appendTo('body');
\t\t\t  var previousPoint = null;
\t\t\t
\t\t\t  placeholder.on('plothover', function (event, pos, item) {
\t\t\t\tif(item) {
\t\t\t\t\tif (previousPoint != item.seriesIndex) {
\t\t\t\t\t\tpreviousPoint = item.seriesIndex;
\t\t\t\t\t\tvar tip = item.series['label'] + \" : \" + item.series['percent']+'%';
\t\t\t\t\t\t\$tooltip.show().children(0).text(tip);
\t\t\t\t\t}
\t\t\t\t\t\$tooltip.css')}}({top:pos.pageY + 10, left:pos.pageX + 10});
\t\t\t\t} else {
\t\t\t\t\t\$tooltip.hide();
\t\t\t\t\tpreviousPoint = null;
\t\t\t\t}
\t\t\t\t
\t\t\t });
\t\t\t
\t\t\t\t/////////////////////////////////////
\t\t\t\t\$(document).one('ajaxloadstart.page', function(e) {
\t\t\t\t\t\$tooltip.remove();
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t
\t\t\t
\t\t\t\tvar d1 = [];
\t\t\t\tfor (var i = 0; i < Math.PI * 2; i += 0.5) {
\t\t\t\t\td1.push([i, Math.sin(i)]);
\t\t\t\t}
\t\t\t
\t\t\t\tvar d2 = [];
\t\t\t\tfor (var i = 0; i < Math.PI * 2; i += 0.5) {
\t\t\t\t\td2.push([i, Math.cos(i)]);
\t\t\t\t}
\t\t\t
\t\t\t\tvar d3 = [];
\t\t\t\tfor (var i = 0; i < Math.PI * 2; i += 0.2) {
\t\t\t\t\td3.push([i, Math.tan(i)]);
\t\t\t\t}
\t\t\t\t
\t\t\t
\t\t\t\tvar sales_charts = \$('#sales-charts').css')}}({'width':'100%' , 'height':'220px'});
\t\t\t\t\$.plot(\"#sales-charts\", [
\t\t\t\t\t{ label: \"Domains\", data: d1 },
\t\t\t\t\t{ label: \"Hosting\", data: d2 },
\t\t\t\t\t{ label: \"Services\", data: d3 }
\t\t\t\t], {
\t\t\t\t\thoverable: true,
\t\t\t\t\tshadowSize: 0,
\t\t\t\t\tseries: {
\t\t\t\t\t\tlines: { show: true },
\t\t\t\t\t\tpoints: { show: true }
\t\t\t\t\t},
\t\t\t\t\txaxis: {
\t\t\t\t\t\ttickLength: 0
\t\t\t\t\t},
\t\t\t\t\tyaxis: {
\t\t\t\t\t\tticks: 10,
\t\t\t\t\t\tmin: -2,
\t\t\t\t\t\tmax: 2,
\t\t\t\t\t\ttickDecimals: 3
\t\t\t\t\t},
\t\t\t\t\tgrid: {
\t\t\t\t\t\tbackgroundColor: { colors: [ \"#fff\", \"#fff\" ] },
\t\t\t\t\t\tborderWidth: 1,
\t\t\t\t\t\tborderColor:'#555'
\t\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\t\$('#recent-box [data-rel=\"tooltip\"]').tooltip({placement: tooltip_placement});
\t\t\t\tfunction tooltip_placement(context, source) {
\t\t\t\t\tvar \$source = \$(source);
\t\t\t\t\tvar \$parent = \$source.closest('.tab-content')
\t\t\t\t\tvar off1 = \$parent.offset();
\t\t\t\t\tvar w1 = \$parent.width();
\t\t\t
\t\t\t\t\tvar off2 = \$source.offset();
\t\t\t\t\t//var w2 = \$source.width();
\t\t\t
\t\t\t\t\tif( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
\t\t\t\t\treturn 'left';
\t\t\t\t}
\t\t\t
\t\t\t
\t\t\t\t\$('.dialogs,.comments').ace_scroll({
\t\t\t\t\tsize: 300
\t\t\t    });
\t\t\t\t
\t\t\t\t
\t\t\t\t//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
\t\t\t\t//so disable dragging when clicking on label
\t\t\t\tvar agent = navigator.userAgent.toLowerCase();
\t\t\t\tif(\"ontouchstart\" in document && /applewebkit/.test(agent) && /android/.test(agent))
\t\t\t\t  \$('#tasks').on('touchstart', function(e){
\t\t\t\t\tvar li = \$(e.target).closest('#tasks li');
\t\t\t\t\tif(li.length == 0)return;
\t\t\t\t\tvar label = li.find('label.inline').get(0);
\t\t\t\t\tif(label == e.target || \$.contains(label, e.target)) e.stopImmediatePropagation() ;
\t\t\t\t});
\t\t\t
\t\t\t\t\$('#tasks').sortable({
\t\t\t\t\topacity:0.8,
\t\t\t\t\trevert:true,
\t\t\t\t\tforceHelperSize:true,
\t\t\t\t\tplaceholder: 'draggable-placeholder',
\t\t\t\t\tforcePlaceholderSize:true,
\t\t\t\t\ttolerance:'pointer',
\t\t\t\t\tstop: function( event, ui ) {
\t\t\t\t\t\t//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
\t\t\t\t\t\t\$(ui.item).css')}}('z-index', 'auto');
\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t);
\t\t\t\t\$('#tasks').disableSelection();
\t\t\t\t\$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
\t\t\t\t\tif(this.checked) \$(this).closest('li').addClass('selected');
\t\t\t\t\telse \$(this).closest('li').removeClass('selected');
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\t//show the dropdowns on top or bottom depending on window height and menu position
\t\t\t\t\$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
\t\t\t\t\tvar offset = \$(this).offset();
\t\t\t
\t\t\t\t\tvar \$w = \$(window)
\t\t\t\t\tif (offset.top > \$w.scrollTop() + \$w.innerHeight() - 100) 
\t\t\t\t\t\t\$(this).addClass('dropup');
\t\t\t\t\telse \$(this).removeClass('dropup');
\t\t\t\t});
\t\t\t
\t\t\t})
\t\t</script>

\t\t<!-- the following scripts are used in demo only for onpage help and you don't need them -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/css/ace.onpage-help.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 742
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/docs/assets/js/themes/sunburst.css"), "html", null, true);
        echo "\" />

\t\t<script type=\"text/javascript\"> ace.vars['base'] = '..'; </script>
\t\t<script src=\"";
        // line 745
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/elements.onpage-help.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/assets/js/ace/ace.onpage-help.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/docs/assets/js/rainbow.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 748
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/docs/assets/js/language/generic.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/docs/assets/js/language/html.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/docs/assets/js/language/css.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 751
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("admin/docs/assets/js/language/javascript.js"), "html", null, true);
        echo "\"></script>
\t</body>
</html>
";
    }

    // line 3
    public function block_test($context, array $blocks = array())
    {
        // line 4
        echo "        ";
    }

    // line 423
    public function block_body($context, array $blocks = array())
    {
        // line 424
        echo "                                                
                                                
                                                
                                                ";
    }

    public function getTemplateName()
    {
        return "::adminbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  972 => 424,  969 => 423,  965 => 4,  962 => 3,  954 => 751,  950 => 750,  946 => 749,  942 => 748,  938 => 747,  934 => 746,  930 => 745,  924 => 742,  920 => 741,  695 => 519,  691 => 518,  687 => 517,  683 => 516,  679 => 515,  675 => 514,  671 => 513,  667 => 512,  663 => 511,  659 => 510,  655 => 509,  651 => 508,  647 => 507,  643 => 506,  639 => 505,  635 => 504,  631 => 503,  627 => 502,  623 => 501,  619 => 500,  615 => 499,  609 => 496,  605 => 495,  601 => 494,  597 => 493,  593 => 492,  589 => 491,  585 => 490,  580 => 488,  572 => 483,  567 => 481,  560 => 477,  550 => 470,  506 => 428,  504 => 423,  493 => 414,  491 => 413,  470 => 394,  468 => 393,  442 => 370,  415 => 346,  409 => 343,  377 => 314,  357 => 297,  337 => 280,  317 => 263,  297 => 246,  90 => 42,  86 => 41,  78 => 36,  69 => 30,  62 => 26,  56 => 23,  50 => 20,  42 => 15,  38 => 14,  27 => 5,  25 => 3,  21 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     {% block test %}*/
/*         {% endblock %}*/
/* 	<head>*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/* 		<meta charset="utf-8" />*/
/* 		<title>Dashboard - Ace Admin</title>*/
/* */
/* 		<meta name="description" content="overview &amp; stats" />*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />*/
/* */
/* 		<!-- bootstrap & fontawesome -->*/
/* 		<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.css')}}" />*/
/* 		<link rel="stylesheet" href="{{asset('admin/assets/css/font-awesome.css')}}" />*/
/* */
/* 		<!-- page specific plugin styles -->*/
/* */
/* 		<!-- text fonts -->*/
/* 		<link rel="stylesheet" href="{{asset('admin/assets/css/ace-fonts.css')}}" />*/
/* */
/* 		<!-- ace styles -->*/
/* 		<link rel="stylesheet" href="{{asset('admin/assets/css/ace.css')}}" class="ace-main-stylesheet" id="main-ace-style" />*/
/* */
/* 		<!--[if lte IE 9]>*/
/* 			<link rel="stylesheet" href="{{asset('admin/assets/css/ace-part2.css')}}" class="ace-main-stylesheet" />*/
/* 		<![endif]-->*/
/* */
/* 		<!--[if lte IE 9]>*/
/* 		  <link rel="stylesheet" href="{{asset('admin/assets/css/ace-ie.css')}}" />*/
/* 		<![endif]-->*/
/* */
/* 		<!-- inline styles related to this page -->*/
/* */
/* 		<!-- ace settings handler -->*/
/* 		<script src="{{asset('admin/assets/js/ace-extra.js')}}"></script>*/
/* */
/* 		<!-- HTML5shiv and Respond.js')}} for IE8 to support HTML5 elements and media queries -->*/
/* */
/* 		<!--[if lte IE 8]>*/
/* 		<script src="{{asset('admin/assets/js/html5shiv.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/respond.js')}}"></script>*/
/* 		<![endif]-->*/
/* 	</head>*/
/* */
/* 	<body class="no-skin">*/
/* 		<!-- #section:basics/navbar.layout -->*/
/* 		<div id="navbar" class="navbar navbar-default">*/
/* 			<script type="text/javascript">*/
/* 				try{ace.settings.check('navbar' , 'fixed')}catch(e){}*/
/* 			</script>*/
/* */
/* 			<div class="navbar-container" id="navbar-container">*/
/* 				<!-- #section:basics/sidebar.mobile.toggle -->*/
/* 				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">*/
/* 					<span class="sr-only">Toggle sidebar</span>*/
/* */
/* 					<span class="icon-bar"></span>*/
/* */
/* 					<span class="icon-bar"></span>*/
/* */
/* 					<span class="icon-bar"></span>*/
/* 				</button>*/
/* */
/* 				<!-- /section:basics/sidebar.mobile.toggle -->*/
/* 				<div class="navbar-header pull-left">*/
/* 					<!-- #section:basics/navbar.layout.brand -->*/
/* 					<a href="#" class="navbar-brand">*/
/* 						<small>*/
/* 							<i class="fa fa-leaf"></i>*/
/* 							Ace Admin*/
/* 						</small>*/
/* 					</a>*/
/* */
/* 					<!-- /section:basics/navbar.layout.brand -->*/
/* */
/* 					<!-- #section:basics/navbar.toggle -->*/
/* */
/* 					<!-- /section:basics/navbar.toggle -->*/
/* 				</div>*/
/* */
/* 				<!-- #section:basics/navbar.dropdown -->*/
/* 				<div class="navbar-buttons navbar-header pull-right" role="navigation">*/
/* 					<ul class="nav ace-nav">*/
/* 						<li class="grey">*/
/* 							<a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/* 								<i class="ace-icon fa fa-tasks"></i>*/
/* 								<span class="badge badge-grey">4</span>*/
/* 							</a>*/
/* */
/* 							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">*/
/* 								<li class="dropdown-header">*/
/* 									<i class="ace-icon fa fa-check"></i>*/
/* 									4 Tasks to complete*/
/* 								</li>*/
/* */
/* 								<li class="dropdown-content">*/
/* 									<ul class="dropdown-menu dropdown-navbar">*/
/* 										<li>*/
/* 											<a href="#">*/
/* 												<div class="clearfix">*/
/* 													<span class="pull-left">Software Update</span>*/
/* 													<span class="pull-right">65%</span>*/
/* 												</div>*/
/* */
/* 												<div class="progress progress-mini">*/
/* 													<div style="width:65%" class="progress-bar"></div>*/
/* 												</div>*/
/* 											</a>*/
/* 										</li>*/
/* */
/* 										<li>*/
/* 											<a href="#">*/
/* 												<div class="clearfix">*/
/* 													<span class="pull-left">Hardware Upgrade</span>*/
/* 													<span class="pull-right">35%</span>*/
/* 												</div>*/
/* */
/* 												<div class="progress progress-mini">*/
/* 													<div style="width:35%" class="progress-bar progress-bar-danger"></div>*/
/* 												</div>*/
/* 											</a>*/
/* 										</li>*/
/* */
/* 										<li>*/
/* 											<a href="#">*/
/* 												<div class="clearfix">*/
/* 													<span class="pull-left">Unit Testing</span>*/
/* 													<span class="pull-right">15%</span>*/
/* 												</div>*/
/* */
/* 												<div class="progress progress-mini">*/
/* 													<div style="width:15%" class="progress-bar progress-bar-warning"></div>*/
/* 												</div>*/
/* 											</a>*/
/* 										</li>*/
/* */
/* 										<li>*/
/* 											<a href="#">*/
/* 												<div class="clearfix">*/
/* 													<span class="pull-left">Bug Fixes</span>*/
/* 													<span class="pull-right">90%</span>*/
/* 												</div>*/
/* */
/* 												<div class="progress progress-mini progress-striped active">*/
/* 													<div style="width:90%" class="progress-bar progress-bar-success"></div>*/
/* 												</div>*/
/* 											</a>*/
/* 										</li>*/
/* 									</ul>*/
/* 								</li>*/
/* */
/* 								<li class="dropdown-footer">*/
/* 									<a href="#">*/
/* 										See tasks with details*/
/* 										<i class="ace-icon fa fa-arrow-right"></i>*/
/* 									</a>*/
/* 								</li>*/
/* 							</ul>*/
/* 						</li>*/
/* */
/* 						<li class="purple">*/
/* 							<a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/* 								<i class="ace-icon fa fa-bell icon-animated-bell"></i>*/
/* 								<span class="badge badge-important">8</span>*/
/* 							</a>*/
/* */
/* 							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">*/
/* 								<li class="dropdown-header">*/
/* 									<i class="ace-icon fa fa-exclamation-triangle"></i>*/
/* 									8 Notifications*/
/* 								</li>*/
/* */
/* 								<li class="dropdown-content">*/
/* 									<ul class="dropdown-menu dropdown-navbar navbar-pink">*/
/* 										<li>*/
/* 											<a href="#">*/
/* 												<div class="clearfix">*/
/* 													<span class="pull-left">*/
/* 														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>*/
/* 														New Comments*/
/* 													</span>*/
/* 													<span class="pull-right badge badge-info">+12</span>*/
/* 												</div>*/
/* 											</a>*/
/* 										</li>*/
/* */
/* 										<li>*/
/* 											<a href="#">*/
/* 												<i class="btn btn-xs btn-primary fa fa-user"></i>*/
/* 												Bob just signed up as an editor ...*/
/* 											</a>*/
/* 										</li>*/
/* */
/* 										<li>*/
/* 											<a href="#">*/
/* 												<div class="clearfix">*/
/* 													<span class="pull-left">*/
/* 														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>*/
/* 														New Orders*/
/* 													</span>*/
/* 													<span class="pull-right badge badge-success">+8</span>*/
/* 												</div>*/
/* 											</a>*/
/* 										</li>*/
/* */
/* 										<li>*/
/* 											<a href="#">*/
/* 												<div class="clearfix">*/
/* 													<span class="pull-left">*/
/* 														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>*/
/* 														Followers*/
/* 													</span>*/
/* 													<span class="pull-right badge badge-info">+11</span>*/
/* 												</div>*/
/* 											</a>*/
/* 										</li>*/
/* 									</ul>*/
/* 								</li>*/
/* */
/* 								<li class="dropdown-footer">*/
/* 									<a href="#">*/
/* 										See all notifications*/
/* 										<i class="ace-icon fa fa-arrow-right"></i>*/
/* 									</a>*/
/* 								</li>*/
/* 							</ul>*/
/* 						</li>*/
/* */
/* 						<li class="green">*/
/* 							<a data-toggle="dropdown" class="dropdown-toggle" href="#">*/
/* 								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>*/
/* 								<span class="badge badge-success">5</span>*/
/* 							</a>*/
/* */
/* 							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">*/
/* 								<li class="dropdown-header">*/
/* 									<i class="ace-icon fa fa-envelope-o"></i>*/
/* 									5 Messages*/
/* 								</li>*/
/* */
/* 								<li class="dropdown-content">*/
/* 									<ul class="dropdown-menu dropdown-navbar">*/
/* 										<li>*/
/* 											<a href="#" class="clearfix">*/
/* 												<img src="{{asset('admin/assets/avatars/avatar.png')}}" class="msg-photo" alt="Alex's Avatar" />*/
/* 												<span class="msg-body">*/
/* 													<span class="msg-title">*/
/* 														<span class="blue">Alex:</span>*/
/* 														Ciao sociis natoque penatibus et auctor ...*/
/* 													</span>*/
/* */
/* 													<span class="msg-time">*/
/* 														<i class="ace-icon fa fa-clock-o"></i>*/
/* 														<span>a moment ago</span>*/
/* 													</span>*/
/* 												</span>*/
/* 											</a>*/
/* 										</li>*/
/* */
/* 										<li>*/
/* 											<a href="#" class="clearfix">*/
/* 												<img src="{{asset('admin/assets/avatars/avatar3.png')}}" class="msg-photo" alt="Susan's Avatar" />*/
/* 												<span class="msg-body">*/
/* 													<span class="msg-title">*/
/* 														<span class="blue">Susan:</span>*/
/* 														Vestibulum id ligula porta felis euismod ...*/
/* 													</span>*/
/* */
/* 													<span class="msg-time">*/
/* 														<i class="ace-icon fa fa-clock-o"></i>*/
/* 														<span>20 minutes ago</span>*/
/* 													</span>*/
/* 												</span>*/
/* 											</a>*/
/* 										</li>*/
/* */
/* 										<li>*/
/* 											<a href="#" class="clearfix">*/
/* 												<img src="{{asset('admin/assets/avatars/avatar4.png')}}" class="msg-photo" alt="Bob's Avatar" />*/
/* 												<span class="msg-body">*/
/* 													<span class="msg-title">*/
/* 														<span class="blue">Bob:</span>*/
/* 														Nullam quis risus eget urna mollis ornare ...*/
/* 													</span>*/
/* */
/* 													<span class="msg-time">*/
/* 														<i class="ace-icon fa fa-clock-o"></i>*/
/* 														<span>3:15 pm</span>*/
/* 													</span>*/
/* 												</span>*/
/* 											</a>*/
/* 										</li>*/
/* */
/* 										<li>*/
/* 											<a href="#" class="clearfix">*/
/* 												<img src="{{asset('admin/assets/avatars/avatar2.png')}}" class="msg-photo" alt="Kate's Avatar" />*/
/* 												<span class="msg-body">*/
/* 													<span class="msg-title">*/
/* 														<span class="blue">Kate:</span>*/
/* 														Ciao sociis natoque eget urna mollis ornare ...*/
/* 													</span>*/
/* */
/* 													<span class="msg-time">*/
/* 														<i class="ace-icon fa fa-clock-o"></i>*/
/* 														<span>1:33 pm</span>*/
/* 													</span>*/
/* 												</span>*/
/* 											</a>*/
/* 										</li>*/
/* */
/* 										<li>*/
/* 											<a href="#" class="clearfix">*/
/* 												<img src="{{asset('admin/assets/avatars/avatar5.png')}}" class="msg-photo" alt="Fred's Avatar" />*/
/* 												<span class="msg-body">*/
/* 													<span class="msg-title">*/
/* 														<span class="blue">Fred:</span>*/
/* 														Vestibulum id penatibus et auctor  ...*/
/* 													</span>*/
/* */
/* 													<span class="msg-time">*/
/* 														<i class="ace-icon fa fa-clock-o"></i>*/
/* 														<span>10:09 am</span>*/
/* 													</span>*/
/* 												</span>*/
/* 											</a>*/
/* 										</li>*/
/* 									</ul>*/
/* 								</li>*/
/* */
/* 								<li class="dropdown-footer">*/
/* 									<a href="inbox.html">*/
/* 										See all messages*/
/* 										<i class="ace-icon fa fa-arrow-right"></i>*/
/* 									</a>*/
/* 								</li>*/
/* 							</ul>*/
/* 						</li>*/
/* */
/* 						<!-- #section:basics/navbar.user_menu -->*/
/* 						<li class="light-blue">*/
/* 							<a data-toggle="dropdown" href="#" class="dropdown-toggle">*/
/* 								<img class="nav-user-photo" src="{{app.user.id~'.'~app.user.path}}" alt="Jason's Photo" />*/
/* 								<span class="user-info">*/
/* 									<small>Welcome,</small>*/
/* 									{{app.user.username}}*/
/* 								</span>*/
/* */
/* 								<i class="ace-icon fa fa-caret-down"></i>*/
/* 							</a>*/
/* */
/* 							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">*/
/* 								<li>*/
/* 									<a href="#">*/
/* 										<i class="ace-icon fa fa-cog"></i>*/
/* 										Settings*/
/* 									</a>*/
/* 								</li>*/
/* */
/* 								<li>*/
/* 									<a href="profile.html">*/
/* 										<i class="ace-icon fa fa-user"></i>*/
/* 										Profile*/
/* 									</a>*/
/* 								</li>*/
/* */
/* 								<li class="divider"></li>*/
/* */
/* 								<li>*/
/* 									<a href="{{path('fos_user_security_logout')}}">*/
/* 										<i class="ace-icon fa fa-power-off"></i>*/
/* 										Logout*/
/* 									</a>*/
/* 								</li>*/
/* 							</ul>*/
/* 						</li>*/
/* */
/* 						<!-- /section:basics/navbar.user_menu -->*/
/* 					</ul>*/
/* 				</div>*/
/* */
/* 				<!-- /section:basics/navbar.dropdown -->*/
/* 			</div><!-- /.navbar-container -->*/
/* 		</div>*/
/* */
/* 		<!-- /section:basics/navbar.layout -->*/
/* 		<div class="main-container" id="main-container">*/
/* 			<script type="text/javascript">*/
/* 				try{ace.settings.check('main-container' , 'fixed')}catch(e){}*/
/* 			</script>*/
/* */
/* 			<!-- #section:basics/sidebar -->*/
/*                         {% include '::sidebaradmin.html.twig' %}*/
/* 			<!-- /section:basics/sidebar -->*/
/* 			<div class="main-content">*/
/* 				<div class="main-content-inner">*/
/* 					<!-- #section:basics/content.breadcrumbs -->*/
/* 					<div class="breadcrumbs" id="breadcrumbs">*/
/* 						<script type="text/javascript">*/
/* 							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}*/
/* 						</script>*/
/* */
/* 						<ul class="breadcrumb">*/
/* 							<li>*/
/* 								<i class="ace-icon fa fa-home home-icon"></i>*/
/* 								<a href="#">Home</a>*/
/* 							</li>*/
/* 							<li class="active">Dashboard</li>*/
/* 						</ul><!-- /.breadcrumb -->*/
/* */
/* 						<!-- #section:basics/content.searchbox -->*/
/* 						<div class="nav-search" id="nav-search">*/
/*                                                     {% render(controller('crowdBundle:admin:recherche')) %}*/
/* 							*/
/* 						</div><!-- /.nav-search -->*/
/* */
/* 						<!-- /section:basics/content.searchbox -->*/
/* 					</div>*/
/* */
/* 					<!-- /section:basics/content.breadcrumbs -->*/
/* 					<div class="page-content">*/
/* 				*/
/*                                             {% block body %}*/
/*                                                 */
/*                                                 */
/*                                                 */
/*                                                 {% endblock %}*/
/* 					</div><!-- /.page-content -->*/
/* 				</div>*/
/* 			</div><!-- /.main-content -->*/
/* */
/* 			<div class="footer">*/
/* 				<div class="footer-inner">*/
/* 					<!-- #section:basics/footer -->*/
/* 					<div class="footer-content">*/
/* 						<span class="bigger-120">*/
/* 							<span class="blue bolder">Ace</span>*/
/* 							Application &copy; 2013-2014*/
/* 						</span>*/
/* */
/* 						&nbsp; &nbsp;*/
/* 						<span class="action-buttons">*/
/* 							<a href="#">*/
/* 								<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>*/
/* 							</a>*/
/* */
/* 							<a href="#">*/
/* 								<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>*/
/* 							</a>*/
/* */
/* 							<a href="#">*/
/* 								<i class="ace-icon fa fa-rss-square orange bigger-150"></i>*/
/* 							</a>*/
/* 						</span>*/
/* 					</div>*/
/* */
/* 					<!-- /section:basics/footer -->*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">*/
/* 				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>*/
/* 			</a>*/
/* 		</div><!-- /.main-container -->*/
/* */
/* 		<!-- basic scripts -->*/
/* */
/* 		<!--[if !IE]> -->*/
/* 		<script type="text/javascript">*/
/* 			window.jQuery || document.write("<script src='{{asset('admin/assets/js/jquery.js')}}'>"+"<"+"/script>");*/
/* 		</script>*/
/* */
/* 		<!-- <![endif]-->*/
/* */
/* 		<!--[if IE]>*/
/* <script type="text/javascript">*/
/*  window.jQuery || document.write("<script src='{{asset('admin/assets/js/jquery1x.js')}}'>"+"<"+"/script>");*/
/* </script>*/
/* <![endif]-->*/
/* 		<script type="text/javascript">*/
/* 			if('ontouchstart' in document.documentElement) document.write("<script src='{{asset('admin/assets/js/jquery.mobile.custom.js')}}'>"+"<"+"/script>");*/
/* 		</script>*/
/* 		<script src="{{asset('admin/assets/js/bootstrap.js')}}"></script>*/
/* */
/* 		<!-- page specific plugin scripts -->*/
/* */
/* 		<!--[if lte IE 8]>*/
/* 		  <script src="{{asset('admin/assets/js/excanvas.js')}}"></script>*/
/* 		<![endif]-->*/
/* 		<script src="{{asset('admin/assets/js/jquery-ui.custom.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/jquery.ui.touch-punch.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/jquery.easypiechart.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/jquery.sparkline.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/flot/jquery.flot.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/flot/jquery.flot.pie.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/flot/jquery.flot.resize.js')}}"></script>*/
/* */
/* 		<!-- ace scripts -->*/
/* 		<script src="{{asset('admin/assets/js/ace/elements.scroller.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/elements.colorpicker.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/elements.fileinput.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/elements.typeahead.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/elements.wysiwyg.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/elements.spinner.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/elements.treeview.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/elements.wizard.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/elements.aside.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/ace.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/ace.ajax-content.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/ace.touch-drag.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/ace.sidebar.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/ace.sidebar-scroll-1.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/ace.submenu-hover.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/ace.widget-box.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/ace.settings.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/ace.settings-rtl.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/ace.settings-skin.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/ace.widget-on-reload.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/ace.searchbox-autocomplete.js')}}"></script>*/
/* */
/* 		<!-- inline scripts related to this page -->*/
/* 		<script type="text/javascript">*/
/* 			jQuery(function($) {*/
/* 				$('.easy-pie-chart.percentage').each(function(){*/
/* 					var $box = $(this).closest('.infobox');*/
/* 					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css')}}('color') : 'rgba(255,255,255,0.95)');*/
/* 					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';*/
/* 					var size = parseInt($(this).data('size')) || 50;*/
/* 					$(this).easyPieChart({*/
/* 						barColor: barColor,*/
/* 						trackColor: trackColor,*/
/* 						scaleColor: false,*/
/* 						lineCap: 'butt',*/
/* 						lineWidth: parseInt(size/10),*/
/* 						animate: /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,*/
/* 						size: size*/
/* 					});*/
/* 				})*/
/* 			*/
/* 				$('.sparkline').each(function(){*/
/* 					var $box = $(this).closest('.infobox');*/
/* 					var barColor = !$box.hasClass('infobox-dark') ? $box.css')}}('color') : '#FFF';*/
/* 					$(this).sparkline('html',*/
/* 									 {*/
/* 										tagValuesAttribute:'data-values',*/
/* 										type: 'bar',*/
/* 										barColor: barColor ,*/
/* 										chartRangeMin:$(this).data('min') || 0*/
/* 									 });*/
/* 				});*/
/* 			*/
/* 			*/
/* 			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!*/
/* 			  //but sometimes it brings up errors with normal resize event handlers*/
/* 			  $.resize.throttleWindow = false;*/
/* 			*/
/* 			  var placeholder = $('#piechart-placeholder').css')}}({'width':'90%' , 'min-height':'150px'});*/
/* 			  var data = [*/
/* 				{ label: "social networks",  data: 38.7, color: "#68BC31"},*/
/* 				{ label: "search engines",  data: 24.5, color: "#2091CF"},*/
/* 				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},*/
/* 				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},*/
/* 				{ label: "other",  data: 10, color: "#FEE074"}*/
/* 			  ]*/
/* 			  function drawPieChart(placeholder, data, position) {*/
/* 			 	  $.plot(placeholder, data, {*/
/* 					series: {*/
/* 						pie: {*/
/* 							show: true,*/
/* 							tilt:0.8,*/
/* 							highlight: {*/
/* 								opacity: 0.25*/
/* 							},*/
/* 							stroke: {*/
/* 								color: '#fff',*/
/* 								width: 2*/
/* 							},*/
/* 							startAngle: 2*/
/* 						}*/
/* 					},*/
/* 					legend: {*/
/* 						show: true,*/
/* 						position: position || "ne", */
/* 						labelBoxBorderColor: null,*/
/* 						margin:[-30,15]*/
/* 					}*/
/* 					,*/
/* 					grid: {*/
/* 						hoverable: true,*/
/* 						clickable: true*/
/* 					}*/
/* 				 })*/
/* 			 }*/
/* 			 drawPieChart(placeholder, data);*/
/* 			*/
/* 			 /***/
/* 			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically*/
/* 			 so that's not needed actually.*/
/* 			 *//* */
/* 			 placeholder.data('chart', data);*/
/* 			 placeholder.data('draw', drawPieChart);*/
/* 			*/
/* 			*/
/* 			  //pie chart tooltip example*/
/* 			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');*/
/* 			  var previousPoint = null;*/
/* 			*/
/* 			  placeholder.on('plothover', function (event, pos, item) {*/
/* 				if(item) {*/
/* 					if (previousPoint != item.seriesIndex) {*/
/* 						previousPoint = item.seriesIndex;*/
/* 						var tip = item.series['label'] + " : " + item.series['percent']+'%';*/
/* 						$tooltip.show().children(0).text(tip);*/
/* 					}*/
/* 					$tooltip.css')}}({top:pos.pageY + 10, left:pos.pageX + 10});*/
/* 				} else {*/
/* 					$tooltip.hide();*/
/* 					previousPoint = null;*/
/* 				}*/
/* 				*/
/* 			 });*/
/* 			*/
/* 				/////////////////////////////////////*/
/* 				$(document).one('ajaxloadstart.page', function(e) {*/
/* 					$tooltip.remove();*/
/* 				});*/
/* 			*/
/* 			*/
/* 			*/
/* 			*/
/* 				var d1 = [];*/
/* 				for (var i = 0; i < Math.PI * 2; i += 0.5) {*/
/* 					d1.push([i, Math.sin(i)]);*/
/* 				}*/
/* 			*/
/* 				var d2 = [];*/
/* 				for (var i = 0; i < Math.PI * 2; i += 0.5) {*/
/* 					d2.push([i, Math.cos(i)]);*/
/* 				}*/
/* 			*/
/* 				var d3 = [];*/
/* 				for (var i = 0; i < Math.PI * 2; i += 0.2) {*/
/* 					d3.push([i, Math.tan(i)]);*/
/* 				}*/
/* 				*/
/* 			*/
/* 				var sales_charts = $('#sales-charts').css')}}({'width':'100%' , 'height':'220px'});*/
/* 				$.plot("#sales-charts", [*/
/* 					{ label: "Domains", data: d1 },*/
/* 					{ label: "Hosting", data: d2 },*/
/* 					{ label: "Services", data: d3 }*/
/* 				], {*/
/* 					hoverable: true,*/
/* 					shadowSize: 0,*/
/* 					series: {*/
/* 						lines: { show: true },*/
/* 						points: { show: true }*/
/* 					},*/
/* 					xaxis: {*/
/* 						tickLength: 0*/
/* 					},*/
/* 					yaxis: {*/
/* 						ticks: 10,*/
/* 						min: -2,*/
/* 						max: 2,*/
/* 						tickDecimals: 3*/
/* 					},*/
/* 					grid: {*/
/* 						backgroundColor: { colors: [ "#fff", "#fff" ] },*/
/* 						borderWidth: 1,*/
/* 						borderColor:'#555'*/
/* 					}*/
/* 				});*/
/* 			*/
/* 			*/
/* 				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});*/
/* 				function tooltip_placement(context, source) {*/
/* 					var $source = $(source);*/
/* 					var $parent = $source.closest('.tab-content')*/
/* 					var off1 = $parent.offset();*/
/* 					var w1 = $parent.width();*/
/* 			*/
/* 					var off2 = $source.offset();*/
/* 					//var w2 = $source.width();*/
/* 			*/
/* 					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';*/
/* 					return 'left';*/
/* 				}*/
/* 			*/
/* 			*/
/* 				$('.dialogs,.comments').ace_scroll({*/
/* 					size: 300*/
/* 			    });*/
/* 				*/
/* 				*/
/* 				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task*/
/* 				//so disable dragging when clicking on label*/
/* 				var agent = navigator.userAgent.toLowerCase();*/
/* 				if("ontouchstart" in document && /applewebkit/.test(agent) && /android/.test(agent))*/
/* 				  $('#tasks').on('touchstart', function(e){*/
/* 					var li = $(e.target).closest('#tasks li');*/
/* 					if(li.length == 0)return;*/
/* 					var label = li.find('label.inline').get(0);*/
/* 					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;*/
/* 				});*/
/* 			*/
/* 				$('#tasks').sortable({*/
/* 					opacity:0.8,*/
/* 					revert:true,*/
/* 					forceHelperSize:true,*/
/* 					placeholder: 'draggable-placeholder',*/
/* 					forcePlaceholderSize:true,*/
/* 					tolerance:'pointer',*/
/* 					stop: function( event, ui ) {*/
/* 						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved*/
/* 						$(ui.item).css')}}('z-index', 'auto');*/
/* 					}*/
/* 					}*/
/* 				);*/
/* 				$('#tasks').disableSelection();*/
/* 				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){*/
/* 					if(this.checked) $(this).closest('li').addClass('selected');*/
/* 					else $(this).closest('li').removeClass('selected');*/
/* 				});*/
/* 			*/
/* 			*/
/* 				//show the dropdowns on top or bottom depending on window height and menu position*/
/* 				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {*/
/* 					var offset = $(this).offset();*/
/* 			*/
/* 					var $w = $(window)*/
/* 					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100) */
/* 						$(this).addClass('dropup');*/
/* 					else $(this).removeClass('dropup');*/
/* 				});*/
/* 			*/
/* 			})*/
/* 		</script>*/
/* */
/* 		<!-- the following scripts are used in demo only for onpage help and you don't need them -->*/
/* 		<link rel="stylesheet" href="{{asset('admin/assets/css/ace.onpage-help.css')}}" />*/
/* 		<link rel="stylesheet" href="{{asset('admin/docs/assets/js/themes/sunburst.css')}}" />*/
/* */
/* 		<script type="text/javascript"> ace.vars['base'] = '..'; </script>*/
/* 		<script src="{{asset('admin/assets/js/ace/elements.onpage-help.js')}}"></script>*/
/* 		<script src="{{asset('admin/assets/js/ace/ace.onpage-help.js')}}"></script>*/
/* 		<script src="{{asset('admin/docs/assets/js/rainbow.js')}}"></script>*/
/* 		<script src="{{asset('admin/docs/assets/js/language/generic.js')}}"></script>*/
/* 		<script src="{{asset('admin/docs/assets/js/language/html.js')}}"></script>*/
/* 		<script src="{{asset('admin/docs/assets/js/language/css.js')}}"></script>*/
/* 		<script src="{{asset('admin/docs/assets/js/language/javascript.js')}}"></script>*/
/* 	</body>*/
/* </html>*/
/* */
