<?php

/* CCDNForumForumBundle:User/Post:edit.html.twig */
class __TwigTemplate_d9027e0d3a232290707c274390a537f02b0ac0400e420d42492dfc11ba3a00c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig", "CCDNForumForumBundle:User/Post:edit.html.twig", 1);
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "post", array()), "user", array()), "edit", array()), "layout_template", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.post.edit", array("%post_id%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array()), "%topic_title%" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic", array()), "getTitle", array())), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig", "CCDNForumForumBundle:User/Post:edit.html.twig", 12)->display($context);
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "post", array()), "user", array()), "edit", array()), "form_theme", array())));
        // line 21
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_post_edit_process", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\"
\t\t method=\"post\" ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" novalidate>
\t        <fieldset>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.post.edit", array("%post_id%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array()), "%topic_title%" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic", array()), "getTitle", array())), "CCDNForumForumBundle"), "html", null, true);
        // line 29
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 35
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Topic", array(), "any", true, true)) {
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Topic", array()), "title", array()), 'row');
        }
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 41
        echo "<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t                <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.save-changes", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 45
        echo "\" name=\"submit[post]\" id=\"submit[post]\">

\t\t\t\t\t";
        // line 52
        echo "
\t\t                <a class=\"btn btn-default\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic", array()), "getId", array()))), "html", null, true);
        echo "\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.cancel", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 55
        echo "</a>
\t\t\t\t\t</div>
\t            </div>

\t        </fieldset>
\t    </form>
\t</section>";
        // line 63
        if (array_key_exists("preview", $context)) {
            // line 64
            if ( !twig_test_empty((isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview")))) {
                // line 65
                $this->loadTemplate("CCDNForumForumBundle:User:Post/Partial/post_preview.html.twig", "CCDNForumForumBundle:User/Post:edit.html.twig", 65)->display(array_merge($context, array("post" => (isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview")))));
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 65,  117 => 64,  115 => 63,  107 => 55,  105 => 54,  102 => 53,  99 => 52,  95 => 45,  93 => 44,  89 => 41,  87 => 39,  84 => 36,  82 => 35,  80 => 33,  76 => 29,  74 => 28,  66 => 22,  61 => 21,  59 => 20,  57 => 19,  55 => 17,  52 => 16,  47 => 12,  45 => 11,  43 => 10,  40 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'CCDNForumForumBundle:Common:Layout/base.html.twig' %}*/
/* */
/* {% set LayoutTemplate = ccdn_forum_forum.post.user.edit.layout_template %}*/
/* */
/* {%- block title -%}*/
/* 	{{- 'title.post.edit' | trans({'%post_id%': post.getId, '%topic_title%': post.getTopic.getTitle }, 'CCDNForumForumBundle') -}}*/
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
/*     {%- spaceless -%}*/
/* */
/* 	<section class="clearfix">*/
/* 	    {%- form_theme form ccdn_forum_forum.post.user.edit.form_theme -%}*/
/* 	    <form action="{{- path('ccdn_forum_user_post_edit_process', {'forumName': forumName, 'postId': post.id } ) -}}"*/
/* 		 method="post" {{ form_enctype(form) }} class="form-horizontal" novalidate>*/
/* 	        <fieldset>*/
/* */
/* 				<div class="form-group">*/
/* 					<div class="col-lg-offset-2 col-lg-10">*/
/* 						<h4>*/
/* 							{{- 'title.post.edit' | trans({'%post_id%': post.getId, '%topic_title%': post.getTopic.getTitle }, 'CCDNForumForumBundle') -}}*/
/* 						</h4>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				{{- form_errors(form) -}}*/
/* */
/* 				{%- if form.Topic is defined -%}*/
/* 					{{- form_row(form.Topic.title) -}}*/
/* 				{%- endif -%}*/
/* */
/* 				{{- form_rest(form) -}}*/
/* */
/* 				<div class="form-group">*/
/* 					<div class="col-lg-offset-2 col-lg-10">*/
/* 		                <input type="submit" class="btn btn-primary" value="*/
/* 							{{- 'form.button.save-changes' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 						" name="submit[post]" id="submit[post]">*/
/* */
/* 					{#*/
/* 						<input type="submit" class="btn" value="*/
/* 							{{- 'form.button.preview' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 						" name="submit[preview]">*/
/* 					#}*/
/* */
/* 		                <a class="btn btn-default" href="{{- path('ccdn_forum_user_topic_show', {'forumName': forumName, 'topicId': post.getTopic.getId}) -}}">*/
/* 							{{- 'form.button.cancel' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 						</a>*/
/* 					</div>*/
/* 	            </div>*/
/* */
/* 	        </fieldset>*/
/* 	    </form>*/
/* 	</section>*/
/* */
/*     {%- if preview is defined -%}*/
/*         {%- if preview is not empty -%}*/
/*             {%- include "CCDNForumForumBundle:User:Post/Partial/post_preview.html.twig" with {'post': preview} -%}*/
/*         {%- endif -%}*/
/*     {%- endif -%}*/
/* */
/*     {%- endspaceless -%}*/
/* {%- endblock body_content -%}*/
/* */
