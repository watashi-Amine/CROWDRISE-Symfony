<?php

/* CCDNForumForumBundle:User/Topic/Partial:stat_mods.html.twig */
class __TwigTemplate_8c6c6e4b86765b4446b46b3970d94d7a6373408349d167fd51f68d4a8194a1dc extends Twig_Template
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
        echo "<section class=\"row clearfix\">";
        // line 4
        if (($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted", array()) || $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isClosed", array()))) {
            // line 5
            echo "\t        <div class=\"alert alert-danger\">";
            // line 6
            if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted", array())) {
                // line 7
                echo "<i class=\"glyphicon glyphicon-trash\"></i>";
                // line 9
                echo $this->env->getExtension('translator')->trans("topic.deleted-by", array(), "CCDNForumForumBundle");
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getDeletedBy", array()), "html", null, true);
                // line 12
                echo "&nbsp;&#183;";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getDeletedDate", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic", array()), "user", array()), "show", array()), "deleted_datetime_format", array())), "html", null, true);
            }
            // line 17
            if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isClosed", array())) {
                // line 18
                if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted", array())) {
                    echo "<br>";
                }
                // line 19
                echo "<i class=\"glyphicon glyphicon-lock\"></i>";
                // line 21
                echo $this->env->getExtension('translator')->trans("topic.closed-by", array(), "CCDNForumForumBundle");
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getClosedBy", array()), "html", null, true);
                // line 24
                echo "&nbsp;&#183;";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getClosedDate", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic", array()), "user", array()), "show", array()), "closed_datetime_format", array())), "html", null, true);
            }
            // line 28
            echo "</div>";
        }
        // line 31
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isSticky", array())) {
            // line 32
            echo "<div class=\"alert alert-info\">
\t\t        <i class=\"glyphicon glyphicon-bullhorn\"></i>";
            // line 35
            echo $this->env->getExtension('translator')->trans("topic.stickied-by", array(), "CCDNForumForumBundle");
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "stickiedBy", array()), "html", null, true);
            // line 38
            echo "&nbsp;&#183;";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getStickiedDate", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "topic", array()), "user", array()), "show", array()), "deleted_datetime_format", array())), "html", null, true);
            // line 41
            echo "</div>";
        }
        // line 43
        echo "</section>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Topic/Partial:stat_mods.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 43,  73 => 41,  71 => 40,  69 => 38,  67 => 36,  65 => 35,  62 => 32,  60 => 31,  57 => 28,  54 => 26,  52 => 24,  50 => 22,  48 => 21,  46 => 19,  42 => 18,  40 => 17,  37 => 14,  35 => 12,  33 => 10,  31 => 9,  29 => 7,  27 => 6,  25 => 5,  23 => 4,  21 => 3,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* */
/* 	<section class="row clearfix">*/
/* 		{%- if topic.isDeleted or topic.isClosed %}*/
/* 	        <div class="alert alert-danger">*/
/* 			    {%- if topic.isDeleted -%}*/
/* 		            <i class="glyphicon glyphicon-trash"></i>*/
/* */
/* 		            {{- 'topic.deleted-by' | trans({}, 'CCDNForumForumBundle') |raw -}}*/
/* 					{{- topic.getDeletedBy -}}*/
/* */
/* 					&nbsp;&#183;*/
/* */
/* 		            {{- topic.getDeletedDate |date(ccdn_forum_forum.topic.user.show.deleted_datetime_format) -}}*/
/* 			    {%- endif -%}*/
/* */
/* 			    {%- if topic.isClosed -%}*/
/* 					{%- if topic.isDeleted -%}<br>{%- endif -%}*/
/* 		            <i class="glyphicon glyphicon-lock"></i>*/
/* */
/* 		            {{- 'topic.closed-by' | trans({}, 'CCDNForumForumBundle') |raw -}}*/
/* 					{{- topic.getClosedBy -}}*/
/* */
/* 					&nbsp;&#183;*/
/* */
/* 		            {{- topic.getClosedDate |date(ccdn_forum_forum.topic.user.show.closed_datetime_format) -}}*/
/* 			    {%- endif -%}*/
/* 	        </div>*/
/* 		{%- endif -%}*/
/* */
/* 	    {%- if topic.isSticky -%}*/
/* 	        <div class="alert alert-info">*/
/* 		        <i class="glyphicon glyphicon-bullhorn"></i>*/
/* */
/* 	            {{- 'topic.stickied-by' | trans({}, 'CCDNForumForumBundle') |raw -}}*/
/* 				{{- topic.stickiedBy -}}*/
/* */
/* 				&nbsp;&#183;*/
/* */
/* 	            {{- topic.getStickiedDate |date(ccdn_forum_forum.topic.user.show.deleted_datetime_format) -}}*/
/* 	        </div>*/
/* 	    {%- endif -%}*/
/* 	</section>*/
/* */
/* {%- endspaceless -%}*/
/* */
