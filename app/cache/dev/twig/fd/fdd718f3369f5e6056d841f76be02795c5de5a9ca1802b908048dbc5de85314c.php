<?php

/* CCDNForumForumBundle:Moderator/Topic:change_board.html.twig */
class __TwigTemplate_7f76ad5decd543f43fdbe841df945b7b9503204d7129fe754f7b0cd147e06fb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig", "CCDNForumForumBundle:Moderator/Topic:change_board.html.twig", 1);
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic", array()), "moderator", array()), "change_board", array()), "layout_template", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.topic.change_board", array("%topic_title%" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle", array())), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig", "CCDNForumForumBundle:Moderator/Topic:change_board.html.twig", 12)->display($context);
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic", array()), "moderator", array()), "change_board", array()), "form_theme", array())));
        // line 21
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_change_board_process", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
        echo "\"
\t\t method=\"post\" ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" novalidate>
\t\t\t<fieldset>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.topic.change_board", array("%topic_title%" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle", array())), "CCDNForumForumBundle"), "html", null, true);
        // line 29
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 35
        echo "<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-lg-2 control-label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.label", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 38
        echo "</label>
\t\t\t\t\t<div class=\"col-lg-10\">
\t\t\t\t\t\t<pre>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle", array()), "html", null, true);
        // line 42
        echo "</pre>
\t\t\t\t\t</div>
\t\t\t\t</div>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 48
        echo "<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-danger\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.topic.move", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 52
        echo "\" name=\"submit[post]\" id=\"submit[post]\">

\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "id", array()))), "html", null, true);
        echo "\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.cancel", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 56
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</fieldset>
\t\t</form>
\t</section>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Moderator/Topic:change_board.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 56,  112 => 55,  109 => 54,  105 => 52,  103 => 51,  99 => 48,  97 => 46,  93 => 42,  91 => 41,  87 => 38,  85 => 37,  82 => 35,  80 => 33,  76 => 29,  74 => 28,  66 => 22,  61 => 21,  59 => 20,  57 => 19,  55 => 17,  52 => 16,  47 => 12,  45 => 11,  43 => 10,  40 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'CCDNForumForumBundle:Common:Layout/base.html.twig' %}*/
/* */
/* {% set LayoutTemplate = ccdn_forum_forum.topic.moderator.change_board.layout_template %}*/
/* */
/* {%- block title -%}*/
/* 	{{- 'title.topic.change_board' | trans({'%topic_title%': topic.getTitle }, 'CCDNForumForumBundle') -}}*/
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
/* 		{%- form_theme form ccdn_forum_forum.topic.moderator.change_board.form_theme -%}*/
/* 		<form action="{{- path('ccdn_forum_moderator_topic_change_board_process', {'forumName': forumName, 'topicId': topic.getId} ) -}}"*/
/* 		 method="post" {{ form_enctype(form) }} class="form-horizontal" novalidate>*/
/* 			<fieldset>*/
/* */
/* 				<div class="form-group">*/
/* 					<div class="col-lg-offset-2 col-lg-10">*/
/* 						<h4>*/
/* 							{{- 'title.topic.change_board' | trans({'%topic_title%': topic.getTitle }, 'CCDNForumForumBundle') -}}*/
/* 						</h4>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				{{- form_errors(form) -}}*/
/* */
/* 				<div class="form-group">*/
/* 					<label class="col-lg-2 control-label">*/
/* 						{{- 'topic.label' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 					</label>*/
/* 					<div class="col-lg-10">*/
/* 						<pre>*/
/* 							{{- topic.getTitle -}}*/
/* 						</pre>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				{{- form_widget(form) -}}*/
/* */
/* 				<div class="form-group">*/
/* 					<div class="col-lg-offset-2 col-lg-10">*/
/* 						<input type="submit" class="btn btn-danger" value="*/
/* 							{{- 'form.button.topic.move' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 						" name="submit[post]" id="submit[post]">*/
/* */
/* 						<a class="btn btn-default" href="{{- path('ccdn_forum_user_topic_show', {'topicId': topic.id}) -}}">*/
/* 							{{- 'form.button.cancel' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 						</a>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 			</fieldset>*/
/* 		</form>*/
/* 	</section>*/
/* */
/* 	{%- endspaceless -%}*/
/* {%- endblock body_content -%}*/
/* */
