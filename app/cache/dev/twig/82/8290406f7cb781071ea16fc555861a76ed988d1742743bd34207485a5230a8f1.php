<?php

/* CCDNForumForumBundle:User/Post:show.html.twig */
class __TwigTemplate_80fe0b0e209d438a63f00b207713851a8aaf170687c95f8e07b35bb109d69db6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig", "CCDNForumForumBundle:User/Post:show.html.twig", 1);
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "post", array()), "user", array()), "show", array()), "layout_template", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.post.show", array("%post_id%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array())), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig", "CCDNForumForumBundle:User/Post:show.html.twig", 12)->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_body_content($context, array $blocks = array())
    {
        // line 17
        ob_start();
        // line 19
        echo "<section class=\"row btn-toolbar clearfix\">
        <div class=\"col-md-6\">";
        // line 21
        $this->loadTemplate("CCDNForumForumBundle:User:Topic/Partial/topic_actions.html.twig", "CCDNForumForumBundle:User/Post:show.html.twig", 21)->display($context);
        // line 22
        echo "</div>
\t</section>";
        // line 25
        $this->loadTemplate("CCDNForumForumBundle:User:Topic/Partial/stat_vitals.html.twig", "CCDNForumForumBundle:User/Post:show.html.twig", 25)->display($context);
        // line 27
        if ((($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted", array()) || $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isClosed", array())) || $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isSticky", array()))) {
            // line 28
            $this->loadTemplate("CCDNForumForumBundle:User:Topic/Partial/stat_mods.html.twig", "CCDNForumForumBundle:User/Post:show.html.twig", 28)->display($context);
        }
        // line 31
        echo "<br>

\t<section class=\"row clearfix\">";
        // line 34
        $this->loadTemplate("CCDNForumForumBundle:User:Post/Partial/item_post.html.twig", "CCDNForumForumBundle:User/Post:show.html.twig", 34)->display($context);
        // line 35
        echo "</section>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 35,  76 => 34,  72 => 31,  69 => 28,  67 => 27,  65 => 25,  62 => 22,  60 => 21,  57 => 19,  55 => 17,  52 => 16,  47 => 12,  45 => 11,  43 => 10,  40 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'CCDNForumForumBundle:Common:Layout/base.html.twig' %}*/
/* */
/* {% set LayoutTemplate = ccdn_forum_forum.post.user.show.layout_template %}*/
/* */
/* {%- block title -%}*/
/* 	{{- 'title.post.show' | trans({'%post_id%': post.getId}, 'CCDNForumForumBundle') -}}*/
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
/* 	<section class="row btn-toolbar clearfix">*/
/*         <div class="col-md-6">*/
/*             {%- include 'CCDNForumForumBundle:User:Topic/Partial/topic_actions.html.twig' -%}*/
/*         </div>*/
/* 	</section>*/
/* */
/* 	{%- include "CCDNForumForumBundle:User:Topic/Partial/stat_vitals.html.twig" -%}*/
/* */
/* 	{%- if topic.isDeleted or topic.isClosed or topic.isSticky -%}*/
/* 		{%- include "CCDNForumForumBundle:User:Topic/Partial/stat_mods.html.twig" -%}*/
/* 	{%- endif -%}*/
/* */
/* 	<br>*/
/* */
/* 	<section class="row clearfix">*/
/* 		{%- include "CCDNForumForumBundle:User:Post/Partial/item_post.html.twig" -%}*/
/* 	</section>*/
/* */
/* 	{%- endspaceless -%}*/
/* {%- endblock body_content -%}*/
/* */
