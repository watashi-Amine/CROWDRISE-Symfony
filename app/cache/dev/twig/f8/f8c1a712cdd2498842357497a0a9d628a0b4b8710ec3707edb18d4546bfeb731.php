<?php

/* CCDNForumForumBundle:Common/Layout/Sidebar:user_subscriptions.html.twig */
class __TwigTemplate_55cda3080b7196866d90a97eb801c404c1ca7898f3efa9161b237d070cede08b extends Twig_Template
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
                    $context["board"] = $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard", array());
                }
            }
        }
        // line 23
        if ( !array_key_exists("category", $context)) {
            // line 24
            if (array_key_exists("board", $context)) {
                // line 25
                $context["category"] = $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCategory", array());
            } else {
                // line 27
                if (array_key_exists("topic", $context)) {
                    // line 28
                    $context["category"] = $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard", array());
                }
            }
        }
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 36
            if ((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 28) == "ccdn_forum_user_subscription")) {
                // line 37
                $this->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/Partial/user_subscriptions.html.twig", "CCDNForumForumBundle:Common/Layout/Sidebar:user_subscriptions.html.twig", 37)->display($context);
            }
        }
        // line 41
        echo "</ul>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common/Layout/Sidebar:user_subscriptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 41,  65 => 37,  63 => 36,  61 => 35,  56 => 28,  54 => 27,  51 => 25,  49 => 24,  47 => 23,  42 => 18,  40 => 17,  37 => 15,  35 => 14,  33 => 13,  29 => 9,  27 => 8,  25 => 7,  23 => 5,  21 => 3,  19 => 1,);
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
/* 					{%- set board = topic.getBoard -%}*/
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
/* 		{%- if is_granted('ROLE_USER') -%}*/
/* 			{%- if route|slice(0,28) == 'ccdn_forum_user_subscription' -%}*/
/* 				{%- include 'CCDNForumForumBundle:Common:Layout/Sidebar/Partial/user_subscriptions.html.twig' -%}*/
/* 			{%- endif -%}*/
/* 		{%- endif -%}*/
/* */
/* 	</ul>*/
/* */
/* {%- endspaceless -%}*/
/* */
