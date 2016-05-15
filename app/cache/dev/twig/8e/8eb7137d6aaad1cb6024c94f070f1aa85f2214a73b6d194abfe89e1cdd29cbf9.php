<?php

/* CCDNForumForumBundle:User/Topic/Partial:stat_vitals.html.twig */
class __TwigTemplate_465b713d1cabb9bd8d82edebf91bbab002a5f80a45f9720596e447a6fe35bdad extends Twig_Template
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
        echo "<header class=\"row clearfix\">
\t\t<div class=\"col-md-6\">
\t\t    <span class=\"lead\" title=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle", array())), "html", null, true);
        echo "</span>
\t\t</div>
\t\t<div class=\"col-md-6 text-right\">
\t\t    <span class=\"label label-default\" title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedReplyCount", array()), "html", null, true);
        echo "\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.reply-count-label", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedReplyCount", array()), "html", null, true);
        // line 11
        echo "</span>

\t\t\t&nbsp;

\t\t\t<span class=\"label label-default\" title=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedViewCount", array()), "html", null, true);
        echo "\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.view-count-label", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedViewCount", array()), "html", null, true);
        // line 18
        echo "</span>";
        // line 20
        if (array_key_exists("subscription_count", $context)) {
            // line 21
            echo "&nbsp;
\t\t        <span class=\"label label-default\" title=\"";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["subscription_count"]) ? $context["subscription_count"] : $this->getContext($context, "subscription_count")), "html", null, true);
            echo "\">";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.subscription-count-label", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 24
            echo twig_escape_filter($this->env, (isset($context["subscription_count"]) ? $context["subscription_count"] : $this->getContext($context, "subscription_count")), "html", null, true);
            // line 25
            echo "</span>";
        }
        // line 27
        echo "</div>
\t</header>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Topic/Partial:stat_vitals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  67 => 25,  65 => 24,  63 => 23,  60 => 22,  57 => 21,  55 => 20,  53 => 18,  51 => 17,  49 => 16,  46 => 15,  40 => 11,  38 => 10,  36 => 9,  33 => 8,  25 => 5,  21 => 3,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* */
/* 	<header class="row clearfix">*/
/* 		<div class="col-md-6">*/
/* 		    <span class="lead" title="{{- topic.getTitle -}}">{{- topic.getTitle |capitalize -}}</span>*/
/* 		</div>*/
/* 		<div class="col-md-6 text-right">*/
/* 		    <span class="label label-default" title="{{- topic.cachedReplyCount -}}">*/
/* 				{{- 'topic.reply-count-label' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 				{{- topic.cachedReplyCount -}}*/
/* 			</span>*/
/* */
/* 			&nbsp;*/
/* */
/* 			<span class="label label-default" title="{{- topic.cachedViewCount -}}">*/
/* 				{{- 'topic.view-count-label' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 				{{- topic.cachedViewCount -}}*/
/* 			</span>*/
/* */
/* 		    {%- if subscription_count is defined -%}*/
/* 				&nbsp;*/
/* 		        <span class="label label-default" title="{{- subscription_count -}}">*/
/* 					{{- 'topic.subscription-count-label' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 					{{- subscription_count -}}*/
/* 				</span>*/
/* 		    {%- endif -%}*/
/* 		</div>*/
/* 	</header>*/
/* */
/* {%- endspaceless -%}*/
/* */
