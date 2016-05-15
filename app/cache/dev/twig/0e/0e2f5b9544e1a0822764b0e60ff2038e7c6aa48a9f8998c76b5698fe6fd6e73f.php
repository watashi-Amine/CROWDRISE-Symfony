<?php

/* CCDNForumForumBundle:User/Topic:create.html.twig */
class __TwigTemplate_40f164a99d1154f18dcd4cf14b31afebae07de66b412b2b5ef26a56a4d080e33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig", "CCDNForumForumBundle:User/Topic:create.html.twig", 1);
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic", array()), "user", array()), "create", array()), "layout_template", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.topic.create", array("%board_name%" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getName", array())), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig", "CCDNForumForumBundle:User/Topic:create.html.twig", 12)->display($context);
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic", array()), "user", array()), "create", array()), "form_theme", array())));
        // line 21
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_create_process", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id", array()))), "html", null, true);
        echo "\"
\t\t method=\"post\" ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" role=\"form\" novalidate>
\t\t\t<fieldset>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<h4>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.topic.create", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Topic", array()), "board", array()), 'row');
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Topic", array()), "title", array()), 'row');
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 39
        echo "<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.topic.create", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 43
        echo "\" name=\"submit[post]\" id=\"submit[post]\">

\t\t\t\t\t";
        // line 50
        echo "
\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id", array()))), "html", null, true);
        echo "\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.cancel", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 53
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</fieldset>
\t\t</form>
\t</section>";
        // line 61
        if (array_key_exists("preview", $context)) {
            // line 62
            if ( !twig_test_empty((isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview")))) {
                // line 63
                $this->loadTemplate("CCDNForumForumBundle:User:Post/Partial/post_preview.html.twig", "CCDNForumForumBundle:User/Topic:create.html.twig", 63)->display(array_merge($context, array("post" => (isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview")))));
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Topic:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 63,  115 => 62,  113 => 61,  105 => 53,  103 => 52,  100 => 51,  97 => 50,  93 => 43,  91 => 42,  87 => 39,  85 => 37,  83 => 35,  81 => 33,  79 => 31,  74 => 27,  66 => 22,  61 => 21,  59 => 20,  57 => 19,  55 => 17,  52 => 16,  47 => 12,  45 => 11,  43 => 10,  40 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'CCDNForumForumBundle:Common:Layout/base.html.twig' %}*/
/* */
/* {% set LayoutTemplate = ccdn_forum_forum.topic.user.create.layout_template %}*/
/* */
/* {%- block title -%}*/
/* 	{{- 'title.topic.create' | trans({'%board_name%': board.getName }, 'CCDNForumForumBundle') -}}*/
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
/* 		{%- form_theme form ccdn_forum_forum.topic.user.create.form_theme -%}*/
/* 		<form action="{{- path('ccdn_forum_user_topic_create_process', {'forumName': forumName, 'boardId': board.id } ) -}}"*/
/* 		 method="post" {{ form_enctype(form) }} class="form-horizontal" role="form" novalidate>*/
/* 			<fieldset>*/
/* */
/* 				<div class="form-group">*/
/* 					<div class="col-lg-offset-2 col-lg-10">*/
/* 						<h4>{{- 'title.topic.create' | trans({}, 'CCDNForumForumBundle') -}}</h4>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				{{- form_errors(form) -}}*/
/* */
/* 				{{- form_row(form.Topic.board) -}}*/
/* */
/* 				{{- form_row(form.Topic.title) -}}*/
/* */
/* 				{{- form_rest(form) -}}*/
/* */
/* 				<div class="form-group">*/
/* 					<div class="col-lg-offset-2 col-lg-10">*/
/* 						<input type="submit" class="btn btn-primary" value="*/
/* 							{{- 'form.button.topic.create' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 						" name="submit[post]" id="submit[post]">*/
/* */
/* 					{#*/
/* 						<input type="submit" class="btn" value="*/
/* 							{{- 'form.button.preview' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 						" name="submit[preview]">*/
/* 					#}*/
/* */
/* 						<a class="btn btn-default" href="{{- path('ccdn_forum_user_board_show', {'forumName': forumName, 'boardId': board.id}) -}}">*/
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
/* 	{%- endspaceless -%}*/
/* {%- endblock body_content -%}*/
/* */
