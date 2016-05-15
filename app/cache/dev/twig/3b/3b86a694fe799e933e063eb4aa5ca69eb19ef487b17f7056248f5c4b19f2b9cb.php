<?php

/* CCDNForumForumBundle:User/Topic:reply.html.twig */
class __TwigTemplate_757ef5a6070451bc18e6e3a4c961aecfa01fd9ed74560c97c71e0863f7ebd419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig", "CCDNForumForumBundle:User/Topic:reply.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CCDNForumForumBundle:Common:Layout/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic", array()), "user", array()), "reply", array()), "layout_template", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.topic.reply", array("%topic_title%" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle", array())), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig", "CCDNForumForumBundle:User/Topic:reply.html.twig", 12)->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_body_content($context, array $blocks = array())
    {
        // line 17
        ob_start();
        // line 19
        echo "<section class=\"clearfix\">";
        // line 20
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic", array()), "user", array()), "reply", array()), "form_theme", array())));
        // line 21
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_reply_process", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "id", array()))), "html", null, true);
        echo "\"
\t\t method=\"post\" ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" role=\"form\" novalidate>
\t\t\t<fieldset>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.topic.reply", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 29
        echo "</h4>
\t\t\t\t\t\t<h5>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle", array()), "html", null, true);
        // line 32
        echo "</h5>
\t\t\t\t\t</div>
\t\t\t\t</div>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 40
        echo "<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.topic.reply", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 44
        echo "\" name=\"submit[post]\" id=\"submit[post]\">

\t\t\t\t\t";
        // line 51
        echo "
\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "id", array()))), "html", null, true);
        echo "\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.cancel", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 54
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</fieldset>
\t\t</form>
\t</section>";
        // line 62
        if (array_key_exists("preview", $context)) {
            // line 63
            if ( !twig_test_empty((isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview")))) {
                // line 64
                $this->loadTemplate("CCDNForumForumBundle:User:Post/Partial/post_preview.html.twig", "CCDNForumForumBundle:User/Topic:reply.html.twig", 64)->display(array_merge($context, array("post" => (isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview")))));
            }
        }
        // line 68
        $this->loadTemplate("CCDNForumForumBundle:User:Topic/Partial/transcript.html.twig", "CCDNForumForumBundle:User/Topic:reply.html.twig", 68)->display(array_merge($context, array("topic" => (isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")))));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Topic:reply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 68,  119 => 64,  117 => 63,  115 => 62,  107 => 54,  105 => 53,  102 => 52,  99 => 51,  95 => 44,  93 => 43,  89 => 40,  87 => 38,  85 => 36,  81 => 32,  79 => 31,  76 => 29,  74 => 28,  66 => 22,  61 => 21,  59 => 20,  57 => 19,  55 => 17,  52 => 16,  47 => 12,  45 => 11,  43 => 10,  40 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'CCDNForumForumBundle:Common:Layout/base.html.twig' %}*/
/* */
/* {% set LayoutTemplate = ccdn_forum_forum.topic.user.reply.layout_template %}*/
/* */
/* {%- block title -%}*/
/* 	{{- 'title.topic.reply' | trans({'%topic_title%': topic.getTitle }, 'CCDNForumForumBundle') -}}*/
/* {%- endblock title -%}*/
/* */
/* {%- block sidebar -%}*/
/* 	{%- spaceless -%}*/
/* 	{{- parent() -}}*/
/*     {%- include 'CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig' -%}*/
/* 	{%- endspaceless -%}*/
/* {%- endblock sidebar -%}*/
/* */
/* {%- block body_content -%}*/
/* 	{%- spaceless -%}*/
/* */
/* 	<section class="clearfix">*/
/* 		{%- form_theme form ccdn_forum_forum.topic.user.reply.form_theme -%}*/
/* 		<form action="{{- path('ccdn_forum_user_topic_reply_process', {'forumName': forumName, 'topicId': topic.id } ) -}}"*/
/* 		 method="post" {{ form_enctype(form) }} class="form-horizontal" role="form" novalidate>*/
/* 			<fieldset>*/
/* */
/* 				<div class="form-group">*/
/* 					<div class="col-lg-offset-2 col-lg-10">*/
/* 						<h4>*/
/* 							{{- 'title.topic.reply' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 						</h4>*/
/* 						<h5>*/
/* 							{{- topic.getTitle -}}*/
/* 						</h5>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				{{- form_errors(form) -}}*/
/* */
/* 				{{- form_widget(form) -}}*/
/* */
/* 				<div class="form-group">*/
/* 					<div class="col-lg-offset-2 col-lg-10">*/
/* 						<input type="submit" class="btn btn-primary" value="*/
/* 							{{- 'form.button.topic.reply' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 						" name="submit[post]" id="submit[post]">*/
/* */
/* 					{#*/
/* 						<input type="submit" class="btn" value="*/
/* 							{{- 'form.button.preview' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 						" name="submit[preview]">*/
/* 					#}*/
/* */
/* 						<a class="btn btn-default" href="{{- path('ccdn_forum_user_topic_show', {'forumName': forumName, 'topicId': topic.id}) -}}">*/
/* 							{{- 'form.button.cancel' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 						</a>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</fieldset>*/
/* 		</form>*/
/* 	</section>*/
/* */
/*     {%- if preview is defined -%}*/
/*         {%- if preview is not empty -%}*/
/*             {%- include "CCDNForumForumBundle:User:Post/Partial/post_preview.html.twig" with {'post': preview} -%}*/
/*         {%- endif -%}*/
/*     {%- endif -%}*/
/* */
/* 	{%- include 'CCDNForumForumBundle:User:Topic/Partial/transcript.html.twig' with {'topic': topic } -%}*/
/* */
/* 	{%- endspaceless -%}*/
/* {%- endblock body_content -%}*/
/* */
