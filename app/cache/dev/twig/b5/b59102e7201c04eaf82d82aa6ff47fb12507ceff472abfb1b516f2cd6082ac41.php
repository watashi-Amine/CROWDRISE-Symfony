<?php

/* CCDNForumForumBundle:Common/Layout/SubTitle:sub_title_default.html.twig */
class __TwigTemplate_ff242eec35de8e1f6cce09383d09568ed9c14f919c767aa042d9d4d2f419d616 extends Twig_Template
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
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 5
        echo "<div class=\"btn-group btn-block\" id=\"settings-accessor\">";
        // line 6
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 8
        echo "<button class=\"btn btn-default btn-block dropdown-toggle\" data-toggle=\"dropdown\" type=\"button\">";
        // line 9
        if ((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 16) == "ccdn_forum_admin")) {
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.admin.index", array(), "CCDNForumForumBundle"), "html", null, true);
        }
        // line 13
        if (((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 15) == "ccdn_forum_user") || (twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 20) == "ccdn_forum_moderator"))) {
            // line 14
            if ((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 28) == "ccdn_forum_user_subscription")) {
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.subscription.index", array(), "CCDNForumForumBundle"), "html", null, true);
            } else {
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.forum.index", array(), "CCDNForumForumBundle"), "html", null, true);
            }
        }
        // line 21
        echo "<span class=\"caret\"></span>
\t\t</button>

\t\t<ul class=\"dropdown-menu section-indicator\" role=\"menu\">";
        // line 26
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 27
            echo "<li";
            // line 28
            if ((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 16) == "ccdn_forum_admin")) {
                echo " class=\"selected\"";
            }
            echo ">
\t\t\t\t\t\t<a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_index");
            echo "\" rel=\"nofollow\">";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.admin.index", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 31
            echo "</a>
\t\t\t\t</li>";
        }
        // line 35
        echo "<li";
        // line 36
        if ((((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 15) == "ccdn_forum_user") && (twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 28) != "ccdn_forum_user_subscription")) || (twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 20) == "ccdn_forum_moderator"))) {
            echo " class=\"selected\"";
        }
        echo ">
\t\t\t\t<a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_index");
        echo "\" rel=\"nofollow\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.forum.index", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 39
        echo "</a>
\t\t\t</li>";
        // line 42
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 43
            echo "<li";
            // line 44
            if ((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 28) == "ccdn_forum_user_subscription")) {
                echo " class=\"selected\"";
            }
            echo ">";
            // line 45
            if ((array_key_exists("forum", $context) &&  !(null === (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum"))))) {
                // line 46
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_index", array("forumName" => $this->getAttribute((isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), "name", array()))), "html", null, true);
                echo "\" rel=\"nofollow\">";
            } else {
                // line 48
                echo "<a href=\"";
                echo $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_index", array("forumName" => "default"));
                echo "\" rel=\"nofollow\">";
            }
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.subscription.index", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 52
            echo "</a>
\t\t\t\t</li>";
        }
        // line 56
        echo "</ul>

\t</div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common/Layout/SubTitle:sub_title_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 56,  108 => 52,  106 => 51,  101 => 48,  96 => 46,  94 => 45,  89 => 44,  87 => 43,  85 => 42,  82 => 39,  80 => 38,  77 => 37,  71 => 36,  69 => 35,  65 => 31,  63 => 30,  60 => 29,  54 => 28,  52 => 27,  50 => 26,  45 => 21,  41 => 17,  38 => 15,  36 => 14,  34 => 13,  31 => 10,  29 => 9,  27 => 8,  25 => 6,  23 => 5,  21 => 3,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* */
/* 	{%- set route = app.request.attributes.get('_route') -%}*/
/* */
/* 	<div class="btn-group btn-block" id="settings-accessor">*/
/* 		{%- set route = app.request.attributes.get('_route') -%}*/
/* */
/* 		<button class="btn btn-default btn-block dropdown-toggle" data-toggle="dropdown" type="button">*/
/* 			{%- if route|slice(0,16) == 'ccdn_forum_admin' -%}*/
/* 				{{- 'link.admin.index' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 			{%- endif -%}*/
/* */
/* 			{%- if route|slice(0,15) == 'ccdn_forum_user' or route|slice(0,20) == 'ccdn_forum_moderator' -%}*/
/* 				{%- if route|slice(0,28) == 'ccdn_forum_user_subscription' -%}*/
/* 					{{- 'link.subscription.index' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 				{%- else -%}*/
/* 					{{- 'link.forum.index' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 				{%- endif -%}*/
/* 			{%- endif -%}*/
/* */
/* 			<span class="caret"></span>*/
/* 		</button>*/
/* */
/* 		<ul class="dropdown-menu section-indicator" role="menu">*/
/* */
/* 			{%- if is_granted('ROLE_ADMIN') -%}*/
/* 				<li*/
/* 					{%- if route|slice(0,16) == 'ccdn_forum_admin' %} class="selected"{%- endif -%}>*/
/* 						<a href="{{- path('ccdn_forum_admin_index') -}}" rel="nofollow">*/
/* 						{{- 'link.admin.index' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 					</a>*/
/* 				</li>*/
/* 			{%- endif -%}*/
/* */
/* 			<li*/
/* 				{%- if route|slice(0,15) == 'ccdn_forum_user' and route|slice(0,28) != 'ccdn_forum_user_subscription' or route|slice(0,20) == 'ccdn_forum_moderator' %} class="selected"{%- endif -%}>*/
/* 				<a href="{{- path('ccdn_forum_user_category_index') -}}" rel="nofollow">*/
/* 					{{- 'link.forum.index' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 				</a>*/
/* 			</li>*/
/* */
/* 			{%- if is_granted('ROLE_USER') -%}*/
/* 				<li*/
/* 					{%- if route|slice(0,28) == 'ccdn_forum_user_subscription' %} class="selected"{%- endif -%}>*/
/* 						{%- if forum is defined and forum is not null -%}*/
/* 							<a href="{{- path('ccdn_forum_user_subscription_index', {'forumName': forum.name}) -}}" rel="nofollow">*/
/* 						{%- else -%}*/
/* 							<a href="{{- path('ccdn_forum_user_subscription_index', {'forumName': 'default'}) -}}" rel="nofollow">*/
/* 						{%- endif -%}*/
/* */
/* 						{{- 'link.subscription.index' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 					</a>*/
/* 				</li>*/
/* 			{%- endif -%}*/
/* */
/* 		</ul>*/
/* */
/* 	</div>*/
/* */
/* {%- endspaceless -%}*/
/* */
