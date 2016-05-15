<?php

/* CCDNForumForumBundle:Common:Layout/base.html.twig */
class __TwigTemplate_63a09da43577b4e28014bf27b09147f00d94a5aff9b1981e01b848dc7f9d6199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'stylesheets_extra' => array($this, 'block_stylesheets_extra'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_extra' => array($this, 'block_javascripts_extra'),
            'tool_bar' => array($this, 'block_tool_bar'),
            'sub_title' => array($this, 'block_sub_title'),
            'crumb_trail' => array($this, 'block_crumb_trail'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'body_content' => array($this, 'block_body_content'),
            'body_footer' => array($this, 'block_body_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((isset($context["LayoutTemplate"]) ? $context["LayoutTemplate"] : $this->getContext($context, "LayoutTemplate")), "CCDNForumForumBundle:Common:Layout/base.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t";
        // line 7
        $this->displayBlock('stylesheets_extra', $context, $blocks);
    }

    public function block_stylesheets_extra($context, array $blocks = array())
    {
        // line 8
        echo "\t";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t";
        // line 15
        $this->displayBlock('javascripts_extra', $context, $blocks);
    }

    public function block_javascripts_extra($context, array $blocks = array())
    {
        // line 16
        echo "\t";
    }

    // line 21
    public function block_tool_bar($context, array $blocks = array())
    {
        // line 22
        ob_start();
        // line 24
        echo "<header class=\"clearfix\">
\t\t\t<nav class=\"navbar navbar-default\" style=\"background-color:#fff;\">

\t\t\t\t<div class=\"container clearfix\">
\t\t\t\t\t<div class=\"row\" style=\"padding:10px 0;\">
\t\t\t\t\t\t<div class=\"col-md-2\">
\t\t\t\t\t\t\t";
        // line 30
        $this->displayBlock('sub_title', $context, $blocks);
        // line 33
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t\t<div class=\"row\">";
        // line 37
        $this->displayBlock('crumb_trail', $context, $blocks);
        // line 42
        echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</nav>
\t\t</header>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 30
    public function block_sub_title($context, array $blocks = array())
    {
        // line 31
        $this->loadTemplate("CCDNForumForumBundle:Common:Layout/SubTitle/sub_title_default.html.twig", "CCDNForumForumBundle:Common:Layout/base.html.twig", 31)->display($context);
    }

    // line 37
    public function block_crumb_trail($context, array $blocks = array())
    {
        // line 38
        if (array_key_exists("crumbs", $context)) {
            // line 39
            $this->loadTemplate("CCDNForumForumBundle:Common:Layout/crumbs.html.twig", "CCDNForumForumBundle:Common:Layout/base.html.twig", 39)->display(array_merge($context, array("crumbs" => (isset($context["crumbs"]) ? $context["crumbs"] : $this->getContext($context, "crumbs")))));
        }
    }

    // line 55
    public function block_sidebar($context, array $blocks = array())
    {
        // line 56
        ob_start();
        // line 58
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        // line 66
        ob_start();
        // line 68
        $this->loadTemplate("CCDNForumForumBundle:Common:Layout/flashes.html.twig", "CCDNForumForumBundle:Common:Layout/base.html.twig", 68)->display($context);
        // line 70
        $this->displayBlock('body_content', $context, $blocks);
        // line 73
        $this->displayBlock('body_footer', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 70
    public function block_body_content($context, array $blocks = array())
    {
    }

    // line 73
    public function block_body_footer($context, array $blocks = array())
    {
        // line 74
        echo "<hr>";
        // line 76
        $this->loadTemplate("CCDNForumForumBundle:Common:Layout/footer.html.twig", "CCDNForumForumBundle:Common:Layout/base.html.twig", 76)->display($context);
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common:Layout/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 76,  155 => 74,  152 => 73,  147 => 70,  142 => 73,  140 => 70,  138 => 68,  136 => 66,  133 => 65,  128 => 58,  126 => 56,  123 => 55,  118 => 39,  116 => 38,  113 => 37,  109 => 31,  106 => 30,  95 => 42,  93 => 37,  88 => 33,  86 => 30,  78 => 24,  76 => 22,  73 => 21,  69 => 16,  63 => 15,  58 => 14,  55 => 13,  51 => 8,  45 => 7,  40 => 6,  37 => 5,  28 => 1,);
    }
}
/* {% extends LayoutTemplate %}*/
/* */
/* */
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* 	{% block stylesheets_extra %}*/
/* 	{% endblock stylesheets_extra %}*/
/* {% endblock stylesheets %}*/
/* */
/* */
/* */
/* {% block javascripts %}*/
/* 	{{ parent() }}*/
/* 	{% block javascripts_extra %}*/
/* 	{% endblock javascripts_extra %}*/
/* {% endblock javascripts %}*/
/* */
/* */
/* */
/* {% block tool_bar %}*/
/* 	{%- spaceless -%}*/
/* */
/* 		<header class="clearfix">*/
/* 			<nav class="navbar navbar-default" style="background-color:#fff;">*/
/* */
/* 				<div class="container clearfix">*/
/* 					<div class="row" style="padding:10px 0;">*/
/* 						<div class="col-md-2">*/
/* 							{% block sub_title %}*/
/* 								{%- include 'CCDNForumForumBundle:Common:Layout/SubTitle/sub_title_default.html.twig' -%}*/
/* 							{% endblock sub_title %}*/
/* 						</div>*/
/* */
/* 						<div class="col-md-10">*/
/* 							<div class="row">*/
/* 								{%- block crumb_trail -%}*/
/* 									{%- if crumbs is defined -%}*/
/* 										{%- include 'CCDNForumForumBundle:Common:Layout/crumbs.html.twig' with {'crumbs': crumbs } -%}*/
/* 									{%- endif -%}*/
/* 								{%- endblock crumb_trail -%}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</nav>*/
/* 		</header>*/
/* */
/* 	{%- endspaceless -%}*/
/* {% endblock tool_bar %}*/
/* */
/* */
/* */
/* {% block sidebar %}*/
/* 	{%- spaceless -%}*/
/* */
/*     {{ parent() }}*/
/* */
/* 	{%- endspaceless -%}*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* 	{%- spaceless -%}*/
/* */
/*     {%- include 'CCDNForumForumBundle:Common:Layout/flashes.html.twig' -%}*/
/* */
/* 	{%- block body_content -%}*/
/* 	{%- endblock body_content -%}*/
/* */
/* 	{%- block body_footer -%}*/
/* 		<hr>*/
/* */
/* 		{%- include 'CCDNForumForumBundle:Common:Layout/footer.html.twig' -%}*/
/* 	{%- endblock body_footer -%}*/
/* */
/* 	{%- endspaceless -%}*/
/* {% endblock body %}*/
/* */
