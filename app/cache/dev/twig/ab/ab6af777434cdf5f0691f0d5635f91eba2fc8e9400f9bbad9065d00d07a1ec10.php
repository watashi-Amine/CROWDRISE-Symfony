<?php

/* CCDNForumForumBundle:Common/Layout/Sidebar:user_forum.html.twig */
class __TwigTemplate_5ca7e31817eb2f1973a58d3ba40efa5ed1e0b24f41849e2e10936403a0a646cc extends Twig_Template
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
        ob_start();
        // line 3
        echo "<ul class=\"nav nav-pills nav-stacked\">";
        // line 5
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 7
        if ( !array_key_exists("topic", $context)) {
            // line 8
            if (array_key_exists("post", $context)) {
                // line 9
                $context["topic"] = $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic", array());
            }
        }
        // line 13
        if ( !array_key_exists("board", $context)) {
            // line 14
            if (array_key_exists("topic", $context)) {
                // line 15
                $context["board"] = $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard", array());
            } else {
                // line 17
                if (array_key_exists("post", $context)) {
                    // line 18
                    if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "getTopic", array(), "any", true, true)) {
                        // line 19
                        $context["board"] = $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic", array()), "getBoard", array());
                    }
                }
            }
        }
        // line 25
        if ( !array_key_exists("category", $context)) {
            // line 26
            if (array_key_exists("board", $context)) {
                // line 27
                $context["category"] = $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCategory", array());
            } else {
                // line 29
                if (array_key_exists("topic", $context)) {
                    // line 30
                    $context["category"] = $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard", array());
                }
            }
        }
        // line 37
        if ((array_key_exists("forum", $context) &&  !null)) {
            // line 38
            if ((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_homepage") || (            // line 39
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_user_category_index"))) {
                // line 40
                echo "<li class=\"active\">
\t\t\t\t\t<a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_index", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-home\"></i>";
            } else {
                // line 44
                echo "<li>
\t\t\t\t\t<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_index", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-home\"></i>";
            }
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.category.index", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 49
            echo "</a>
\t\t\t\t</li>";
            // line 52
            if ((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 28) != "ccdn_forum_user_subscription")) {
                // line 53
                $this->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/Partial/user_boards.html.twig", "CCDNForumForumBundle:Common/Layout/Sidebar:user_forum.html.twig", 53)->display($context);
            }
        }
        // line 57
        echo "</ul>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common/Layout/Sidebar:user_forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 57,  92 => 53,  90 => 52,  87 => 49,  85 => 48,  80 => 45,  77 => 44,  72 => 41,  69 => 40,  67 => 39,  66 => 38,  64 => 37,  59 => 30,  57 => 29,  54 => 27,  52 => 26,  50 => 25,  44 => 19,  42 => 18,  40 => 17,  37 => 15,  35 => 14,  33 => 13,  29 => 9,  27 => 8,  25 => 7,  23 => 5,  21 => 3,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* */
/* 	<ul class="nav nav-pills nav-stacked">*/
/* */
/* 		{%- set route = app.request.attributes.get('_route') -%}*/
/* */
/* 		{%- if topic is not defined -%}*/
/* 			{%- if post is defined -%}*/
/* 				{%- set topic = post.getTopic -%}*/
/* 			{%- endif -%}*/
/* 		{%- endif -%}*/
/* */
/* 		{%- if board is not defined -%}*/
/* 			{%- if topic is defined -%}*/
/* 				{%- set board = topic.getBoard -%}*/
/* 			{%- else -%}*/
/* 				{%- if post is defined -%}*/
/* 					{%- if post.getTopic is defined -%}*/
/* 						{%- set board = post.getTopic.getBoard -%}*/
/* 					{%- endif -%}*/
/* 				{%- endif -%}*/
/* 			{%- endif -%}*/
/* 		{%- endif -%}*/
/* */
/* 		{%- if category is not defined -%}*/
/* 			{%- if board is defined -%}*/
/* 				{%- set category = board.getCategory -%}*/
/* 			{%- else -%}*/
/* 				{%- if topic is defined -%}*/
/* 					{%- set category = topic.getBoard -%}*/
/* 				{%- endif -%}*/
/* 			{%- endif -%}*/
/* 		{%- endif -%}*/
/* */
/* */
/* */
/* 		{%- if forum is defined and not null -%}*/
/* 			{%- if route == 'ccdn_homepage'*/
/* 				or route == 'ccdn_forum_user_category_index' -%}*/
/* 				<li class="active">*/
/* 					<a href="{{- path('ccdn_forum_user_category_index', {'forumName': forumName}) -}}">*/
/* 						<i class="glyphicon glyphicon-home"></i>*/
/* 			{%- else -%}*/
/* 				<li>*/
/* 					<a href="{{- path('ccdn_forum_user_category_index', {'forumName': forumName}) -}}">*/
/* 						<i class="glyphicon glyphicon-home"></i>*/
/* 			{%- endif -%}*/
/* 						{{- 'link.category.index' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 					</a>*/
/* 				</li>*/
/* */
/* 			{%- if route|slice(0,28) != 'ccdn_forum_user_subscription' -%}*/
/* 				{%- include 'CCDNForumForumBundle:Common:Layout/Sidebar/Partial/user_boards.html.twig' -%}*/
/* 			{%- endif -%}*/
/* 		{%- endif -%}*/
/* */
/* 	</ul>*/
/* */
/* {%- endspaceless -%}*/
/* */
