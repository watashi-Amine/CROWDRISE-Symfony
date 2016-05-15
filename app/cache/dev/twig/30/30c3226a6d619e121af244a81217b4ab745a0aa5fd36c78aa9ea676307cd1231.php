<?php

/* CCDNForumForumBundle:Common/Layout/Sidebar/Partial:user_subscriptions.html.twig */
class __TwigTemplate_4f4486525b37f58d23ed5c14d0a5b02c8201f8a17e412219dfadbb7aa09e3522 extends Twig_Template
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
        echo "<li>
\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subscribed_forums"]) ? $context["subscribed_forums"] : $this->getContext($context, "subscribed_forums")));
        foreach ($context['_seq'] as $context["_key"] => $context["subscribed_forum"]) {
            // line 6
            if ( !(null === (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                // line 7
                if (((isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")) == $this->getAttribute($this->getAttribute($context["subscribed_forum"], "forum", array(), "array"), "name", array()))) {
                    // line 8
                    echo "<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"";
                    // line 9
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_index", array("forumName" => $this->getAttribute($this->getAttribute($context["subscribed_forum"], "forum", array(), "array"), "name", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                } else {
                    // line 12
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_index", array("forumName" => $this->getAttribute($this->getAttribute($context["subscribed_forum"], "forum", array(), "array"), "name", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-close\"></i>";
                }
            } else {
                // line 17
                echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_index", array("forumName" => $this->getAttribute($this->getAttribute($context["subscribed_forum"], "forum", array(), "array"), "name", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-close\"></i>";
            }
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subscribed_forum"], "forum", array(), "array"), "name", array()), "html", null, true);
            // line 23
            echo "<span class=\"badge\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscribed_forum"], "count_unread", array(), "array"), "html", null, true);
            // line 25
            echo "&nbsp;/&nbsp;";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscribed_forum"], "count_total", array(), "array"), "html", null, true);
            // line 27
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscribed_forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t</ul>
\t</li>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common/Layout/Sidebar/Partial:user_subscriptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 31,  68 => 27,  66 => 26,  64 => 25,  62 => 24,  60 => 23,  58 => 21,  53 => 18,  50 => 17,  44 => 13,  41 => 12,  36 => 9,  33 => 8,  31 => 7,  29 => 6,  25 => 5,  21 => 3,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* */
/* 	<li>*/
/* 		<ul class="nav nav-pills nav-stacked">*/
/* 			{% for subscribed_forum in subscribed_forums %}*/
/* 				{%- if forum is not null -%}*/
/* 					{%- if forumName == subscribed_forum['forum'].name -%}*/
/* 						<li class="active">*/
/* 							<a href="{{- path('ccdn_forum_user_subscription_index', {'forumName': subscribed_forum['forum'].name}) -}}">*/
/* 								<i class="glyphicon glyphicon-folder-open"></i>*/
/* 					{%- else -%}*/
/* 						<li>*/
/* 							<a href="{{- path('ccdn_forum_user_subscription_index', {'forumName': subscribed_forum['forum'].name}) -}}">*/
/* 								<i class="glyphicon glyphicon-folder-close"></i>*/
/* 					{%- endif -%}*/
/* 				{%- else -%}*/
/* 						<li>*/
/* 							<a href="{{- path('ccdn_forum_user_subscription_index', {'forumName': subscribed_forum['forum'].name}) -}}">*/
/* 								<i class="glyphicon glyphicon-folder-close"></i>*/
/* 				{%- endif -%}*/
/* 								{{- subscribed_forum['forum'].name -}}*/
/* */
/* 								<span class="badge">*/
/* 									{{- subscribed_forum['count_unread'] -}}*/
/* 									&nbsp;/&nbsp;*/
/* 									{{- subscribed_forum['count_total'] -}}*/
/* 								</span>*/
/* 							</a>*/
/* 						</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	</li>*/
/* */
/* {%- endspaceless -%}*/
/* */
