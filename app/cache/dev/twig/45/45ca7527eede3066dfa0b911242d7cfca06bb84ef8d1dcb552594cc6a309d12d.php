<?php

/* CCDNForumForumBundle:Common/Layout/Sidebar:admin_forum.html.twig */
class __TwigTemplate_a4b6a1cef4c4dd90ab652b59c4507a59dd556ba9212742a0667652013c119439 extends Twig_Template
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
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 8
            if ((((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_forum_list") || (            // line 9
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_forum_create")) || (            // line 10
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_forum_edit")) || (            // line 11
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_forum_delete"))) {
                // line 13
                echo "<li class=\"active\">
\t\t\t\t\t<a href=\"";
                // line 14
                echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_forum_list");
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
            } else {
                // line 17
                echo "<li>
\t\t\t\t\t<a href=\"";
                // line 18
                echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_forum_list");
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
            }
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("crumbs.admin.manage-forums.index", array(), "CCDNForumForumBundle"), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</li>";
        }
        // line 26
        if ((((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_category_list") || (        // line 27
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_category_create")) || (        // line 28
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_category_edit")) || (        // line 29
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_category_delete"))) {
            // line 31
            echo "<li class=\"active\">
\t\t\t\t<a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_list");
            echo "\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
        } else {
            // line 35
            echo "<li>
\t\t\t\t<a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_list");
            echo "\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
        }
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("crumbs.admin.manage-categories.index", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "
\t\t\t\t</a>
\t\t\t</li>";
        // line 43
        if ((((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_board_list") || (        // line 44
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_board_create")) || (        // line 45
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_board_edit")) || (        // line 46
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_admin_board_delete"))) {
            // line 48
            echo "<li class=\"active\">
\t\t\t\t<a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list");
            echo "\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
        } else {
            // line 52
            echo "<li>
\t\t\t\t<a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list");
            echo "\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-list\"></i>";
        }
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("crumbs.admin.manage-boards.index", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "
\t\t\t\t</a>
\t\t\t</li>

\t<ul>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common/Layout/Sidebar:admin_forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 56,  96 => 53,  93 => 52,  88 => 49,  85 => 48,  83 => 46,  82 => 45,  81 => 44,  80 => 43,  75 => 39,  70 => 36,  67 => 35,  62 => 32,  59 => 31,  57 => 29,  56 => 28,  55 => 27,  54 => 26,  48 => 21,  43 => 18,  40 => 17,  35 => 14,  32 => 13,  30 => 11,  29 => 10,  28 => 9,  27 => 8,  25 => 7,  23 => 5,  21 => 3,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* */
/* 	<ul class="nav nav-pills nav-stacked">*/
/* */
/* 		{%- set route = app.request.attributes.get('_route') -%}*/
/* */
/* 		{%- if is_granted('ROLE_SUPER_ADMIN') -%}*/
/* 			{%- if route == 'ccdn_forum_admin_forum_list'*/
/* 				or route == 'ccdn_forum_admin_forum_create'*/
/* 				or route == 'ccdn_forum_admin_forum_edit'*/
/* 				or route == 'ccdn_forum_admin_forum_delete'*/
/* 			 -%}*/
/* 				<li class="active">*/
/* 					<a href="{{- path('ccdn_forum_admin_forum_list') -}}">*/
/* 						<i class="glyphicon glyphicon-list"></i>*/
/* 			{%- else -%}*/
/* 				<li>*/
/* 					<a href="{{- path('ccdn_forum_admin_forum_list') -}}">*/
/* 						<i class="glyphicon glyphicon-list"></i>*/
/* 			{%- endif -%}*/
/* 						{{'crumbs.admin.manage-forums.index' |trans({}, 'CCDNForumForumBundle')}}*/
/* 					</a>*/
/* 				</li>*/
/* 		{%- endif -%}*/
/* */
/* 		{%- if route == 'ccdn_forum_admin_category_list'*/
/* 			or route == 'ccdn_forum_admin_category_create'*/
/* 			or route == 'ccdn_forum_admin_category_edit'*/
/* 			or route == 'ccdn_forum_admin_category_delete'*/
/* 		 -%}*/
/* 			<li class="active">*/
/* 				<a href="{{- path('ccdn_forum_admin_category_list') -}}">*/
/* 					<i class="glyphicon glyphicon-list"></i>*/
/* 		{%- else -%}*/
/* 			<li>*/
/* 				<a href="{{- path('ccdn_forum_admin_category_list') -}}">*/
/* 					<i class="glyphicon glyphicon-list"></i>*/
/* 		{%- endif -%}*/
/* 					{{'crumbs.admin.manage-categories.index' |trans({}, 'CCDNForumForumBundle')}}*/
/* 				</a>*/
/* 			</li>*/
/* */
/* 		{%- if route == 'ccdn_forum_admin_board_list'*/
/* 			or route == 'ccdn_forum_admin_board_create'*/
/* 			or route == 'ccdn_forum_admin_board_edit'*/
/* 			or route == 'ccdn_forum_admin_board_delete'*/
/* 		 -%}*/
/* 			<li class="active">*/
/* 				<a href="{{- path('ccdn_forum_admin_board_list') -}}">*/
/* 					<i class="glyphicon glyphicon-list"></i>*/
/* 		{%- else -%}*/
/* 			<li>*/
/* 				<a href="{{- path('ccdn_forum_admin_board_list') -}}">*/
/* 					<i class="glyphicon glyphicon-list"></i>*/
/* 		{%- endif -%}*/
/* 					{{'crumbs.admin.manage-boards.index' |trans({}, 'CCDNForumForumBundle')}}*/
/* 				</a>*/
/* 			</li>*/
/* */
/* 	<ul>*/
/* */
/* {%- endspaceless -%}*/
/* */
