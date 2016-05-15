<?php

/* CCDNForumForumBundle:User/Topic:show.html.twig */
class __TwigTemplate_ff51ba7af9b597f82d0b199f9f159d28299e55f22791f5c89182caaa06229966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig", "CCDNForumForumBundle:User/Topic:show.html.twig", 1);
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic", array()), "user", array()), "show", array()), "layout_template", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.topic.show", array("%topic_title%" => twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle", array()))), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig", "CCDNForumForumBundle:User/Topic:show.html.twig", 12)->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_body_content($context, array $blocks = array())
    {
        // line 17
        ob_start();
        // line 19
        echo "<section class=\"row clearfix btn-toolbar\">";
        // line 20
        $this->loadTemplate("CCDNForumForumBundle:User:Topic/Partial/topic_actions.html.twig", "CCDNForumForumBundle:User/Topic:show.html.twig", 20)->display($context);
        // line 21
        echo "</section>";
        // line 23
        $this->loadTemplate("CCDNForumForumBundle:User:Topic/Partial/stat_vitals.html.twig", "CCDNForumForumBundle:User/Topic:show.html.twig", 23)->display($context);
        // line 25
        if ((($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted", array()) || $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isClosed", array())) || $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isSticky", array()))) {
            // line 26
            $this->loadTemplate("CCDNForumForumBundle:User:Topic/Partial/stat_mods.html.twig", "CCDNForumForumBundle:User/Topic:show.html.twig", 26)->display($context);
        }
        // line 29
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        // line 31
        echo "<section class=\"row clearfix\">";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getItems", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["post"]) {
            // line 33
            $this->loadTemplate("CCDNForumForumBundle:User:Post/Partial/item_post.html.twig", "CCDNForumForumBundle:User/Topic:show.html.twig", 33)->display($context);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "</section>";
        // line 37
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Topic:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 37,  105 => 35,  91 => 33,  74 => 32,  72 => 31,  70 => 29,  67 => 26,  65 => 25,  63 => 23,  61 => 21,  59 => 20,  57 => 19,  55 => 17,  52 => 16,  47 => 12,  45 => 11,  43 => 10,  40 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'CCDNForumForumBundle:Common:Layout/base.html.twig' %}*/
/* */
/* {% set LayoutTemplate = ccdn_forum_forum.topic.user.show.layout_template %}*/
/* */
/* {%- block title -%}*/
/* 	{{- 'title.topic.show' | trans({'%topic_title%': topic.getTitle |capitalize}, 'CCDNForumForumBundle') -}}*/
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
/* 	<section class="row clearfix btn-toolbar">*/
/*         {%- include 'CCDNForumForumBundle:User:Topic/Partial/topic_actions.html.twig' -%}*/
/* 	</section>*/
/* */
/* 	{%- include "CCDNForumForumBundle:User:Topic/Partial/stat_vitals.html.twig" -%}*/
/* */
/* 	{%- if topic.isDeleted or topic.isClosed or topic.isSticky -%}*/
/* 		{%- include "CCDNForumForumBundle:User:Topic/Partial/stat_mods.html.twig" -%}*/
/* 	{%- endif -%}*/
/* */
/* 	{{- knp_pagination_render(pager) -}}*/
/* */
/* 	<section class="row clearfix">*/
/* 	    {%- for key, post in pager.getItems() -%}*/
/* 	        {%- include "CCDNForumForumBundle:User:Post/Partial/item_post.html.twig" -%}*/
/* 	    {%- endfor -%}*/
/* 	</section>*/
/* */
/* 	{{- knp_pagination_render(pager) -}}*/
/* */
/*     {%- endspaceless -%}*/
/* {%- endblock body_content -%}*/
/* */
