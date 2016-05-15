<?php

/* CCDNForumForumBundle::base.html.twig */
class __TwigTemplate_f8cef79ca92593de773a7395f6f8c8f447b3a47b820fa672f6626d1330665d5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'tool_bar' => array($this, 'block_tool_bar'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t\t<link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\">";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
    <body>";
        // line 15
        ob_start();
        // line 17
        echo "<div id=\"page-wrap\">
\t\t\t<div id=\"page-main\">";
        // line 20
        $this->displayBlock('navbar', $context, $blocks);
        // line 37
        echo "<div class=\"container clearfix\">
\t\t\t\t\t<br>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t        <aside class=\"col-md-2 page-sidebar-left\">";
        // line 41
        $this->displayBlock('sidebar', $context, $blocks);
        // line 43
        echo "</aside>

\t\t\t\t        <div class=\"col-md-10 page-body-right\">
\t\t\t\t\t\t\t<div id=\"top clearfix\"></div>";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "</div>
\t\t\t        </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<br>

\t\t<footer class=\"footer site-footer\">

\t\t\t<div class=\"navbar navbar-default clearfix\">
\t\t\t\t<p class=\"navbar-text pull-right content-right\">
\t\t\t\t\tCopyright <a target=\"_blank\" class=\"navbar-link\" href=\"http://www.codeconsortium.com/\">Code Consortium</a> 2011 - ";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".
\t\t\t\t</p>
\t\t\t</div>

\t\t\t<nav class=\"navbar navbar-inverse clearfix\" style=\"bottom:0px;margin-bottom:0px;\">
\t\t\t\t<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
\t\t\t\t    <ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"http://www.codeconsortium.com\">
\t\t\t\t\t\t\t\tCode Consortium
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a rel=\"friend\" target=\"_blank\" href=\"http://github.com/codeconsortium\">Contribute</a>
\t\t\t\t\t\t</li>
\t\t\t\t    </ul>
\t\t\t\t</div>
\t\t\t</nav>

\t\t</footer>

\t\t<script src=\"//code.jquery.com/jquery.js\"></script>
\t\t<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "<script type='text/javascript'>
\t\t<!--
\t\t\t\$(document).ready(function() {
\t\t\t\t// make visible js compat toolbars site wide
\t\t\t\t\$(\"[data-js-non-compat]\").each(function(i, el) {
\t\t\t\t\t\$(el).addClass('collapse').addClass('hidden');
\t\t\t\t});

\t\t\t\t\$(\"[data-js-compat]\").each(function(i, el) {
\t\t\t\t\t\$(el).removeClass('collapse').removeClass('hidden');
\t\t\t\t});

\t\t\t\t\$('[data-tip]').each(function() {
\t\t\t\t\t\$(this).tooltip({
\t\t\t\t\t\thtml: true,
\t\t\t\t\t\tplacement: \$(this).data('tip')
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\t\$('[data-toggle=\"dropdown\"]').dropdown();
\t\t\t});
\t\t//-->
\t\t</script>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 113
        echo "</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 20
    public function block_navbar($context, array $blocks = array())
    {
        // line 21
        echo "<header class=\"navbar navbar-default navbar-fixed-top clearfix\" role=\"navigation\">
\t\t\t\t\t\t<a target=\"_blank\" class=\"navbar-brand\" href=\"http://www.codeconsortium.com/\">Code Consortium</a>

\t\t\t\t\t\t<p class=\"navbar-text pull-right\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-user\"></i>
\t\t\t\t\t\t\t&nbsp;";
        // line 27
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        }
        // line 30
        echo "</p>
\t\t\t\t\t</header>";
        // line 33
        $this->displayBlock('tool_bar', $context, $blocks);
    }

    public function block_tool_bar($context, array $blocks = array())
    {
    }

    // line 41
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 85,  182 => 47,  177 => 41,  169 => 33,  166 => 30,  163 => 28,  161 => 27,  154 => 21,  151 => 20,  146 => 10,  141 => 7,  135 => 113,  110 => 88,  108 => 85,  82 => 61,  68 => 49,  66 => 47,  61 => 43,  59 => 41,  54 => 37,  52 => 20,  49 => 17,  47 => 15,  44 => 12,  42 => 10,  37 => 7,  29 => 2,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{- app.request.locale -}}">*/
/*     <head>*/
/*         <meta http-equiv="content-type" content="text/html;charset=utf-8">*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*         <title>{%- block title -%}{%- endblock -%}</title>*/
/* */
/* 		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">*/
/* 		{%- block stylesheets -%}*/
/* 		{%- endblock -%}*/
/*     </head>*/
/*     <body>*/
/* */
/* 		{%- spaceless -%}*/
/* */
/* 		<div id="page-wrap">*/
/* 			<div id="page-main">*/
/* */
/* 				{%- block navbar -%}*/
/* 					<header class="navbar navbar-default navbar-fixed-top clearfix" role="navigation">*/
/* 						<a target="_blank" class="navbar-brand" href="http://www.codeconsortium.com/">Code Consortium</a>*/
/* */
/* 						<p class="navbar-text pull-right">*/
/* 							<i class="glyphicon glyphicon-user"></i>*/
/* 							&nbsp;*/
/* 							{%- if app.user -%}*/
/* 								{{- app.user.email -}}*/
/* 							{%- endif -%}*/
/* 						</p>*/
/* 					</header>*/
/* */
/* 					{%- block tool_bar -%}*/
/* 					{%- endblock tool_bar -%}*/
/* 				{%- endblock navbar -%}*/
/* */
/* 				<div class="container clearfix">*/
/* 					<br>*/
/* 					<div class="row">*/
/* 				        <aside class="col-md-2 page-sidebar-left">*/
/* 							{%- block sidebar -%}*/
/* 				            {%- endblock sidebar -%}*/
/* 						</aside>*/
/* */
/* 				        <div class="col-md-10 page-body-right">*/
/* 							<div id="top clearfix"></div>*/
/* 				            {%- block body -%}*/
/* 							{%- endblock body -%}*/
/* 				        </div>*/
/* 			        </div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<br>*/
/* */
/* 		<footer class="footer site-footer">*/
/* */
/* 			<div class="navbar navbar-default clearfix">*/
/* 				<p class="navbar-text pull-right content-right">*/
/* 					Copyright <a target="_blank" class="navbar-link" href="http://www.codeconsortium.com/">Code Consortium</a> 2011 - {{ 'now'|date("Y") }}.*/
/* 				</p>*/
/* 			</div>*/
/* */
/* 			<nav class="navbar navbar-inverse clearfix" style="bottom:0px;margin-bottom:0px;">*/
/* 				<div class="collapse navbar-collapse navbar-ex1-collapse">*/
/* 				    <ul class="nav navbar-nav">*/
/* 						<li>*/
/* 							<a href="http://www.codeconsortium.com">*/
/* 								Code Consortium*/
/* 							</a>*/
/* 						</li>*/
/* */
/* 						<li>*/
/* 							<a rel="friend" target="_blank" href="http://github.com/codeconsortium">Contribute</a>*/
/* 						</li>*/
/* 				    </ul>*/
/* 				</div>*/
/* 			</nav>*/
/* */
/* 		</footer>*/
/* */
/* 		<script src="//code.jquery.com/jquery.js"></script>*/
/* 		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>*/
/* 		{%- block javascripts -%}*/
/* 		{%- endblock -%}*/
/* */
/* 		<script type='text/javascript'>*/
/* 		<!--*/
/* 			$(document).ready(function() {*/
/* 				// make visible js compat toolbars site wide*/
/* 				$("[data-js-non-compat]").each(function(i, el) {*/
/* 					$(el).addClass('collapse').addClass('hidden');*/
/* 				});*/
/* */
/* 				$("[data-js-compat]").each(function(i, el) {*/
/* 					$(el).removeClass('collapse').removeClass('hidden');*/
/* 				});*/
/* */
/* 				$('[data-tip]').each(function() {*/
/* 					$(this).tooltip({*/
/* 						html: true,*/
/* 						placement: $(this).data('tip')*/
/* 					});*/
/* 				});*/
/* */
/* 				$('[data-toggle="dropdown"]').dropdown();*/
/* 			});*/
/* 		//-->*/
/* 		</script>*/
/* */
/* 		{%- endspaceless -%}*/
/*     </body>*/
/* </html>*/
/* */
