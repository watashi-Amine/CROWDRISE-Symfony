<?php

/* CCDNForumForumBundle:User/Board/Partial:item_topic_list.html.twig */
class __TwigTemplate_5eea11513552bbfb9d68f498d3cc8ae76e03d0b297ad526b07d455cc5e84fe2b extends Twig_Template
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
        // line 2
        echo "<tr>
\t\t<td class=\"center\">";
        // line 4
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted", array())) {
            // line 5
            echo "<i class=\"glyphicon glyphicon-trash\"></i>";
        } else {
            // line 7
            if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isClosed", array())) {
                // line 8
                echo "<i class=\"glyphicon glyph-icon-lock\"></i>";
            } else {
                // line 11
                if (($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedReplyCount", array()) > 100)) {
                    // line 12
                    echo "<i class=\"glyphicon glyphicon-fire\"></i>";
                }
            }
        }
        // line 16
        echo "</td>
\t\t<td class=\"center\">
\t\t\t";
        // line 19
        echo "\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
        echo "\">";
        // line 20
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isSticky", array())) {
            // line 21
            echo "<i class=\"glyphicon glyphicon-bullhorn\"></i>";
        } else {
            // line 23
            echo "<i class=\"glyphicon glyphicon-comment\"></i>";
        }
        // line 25
        echo "</a>
\t\t</td>
\t\t<td class=\"left\">";
        // line 28
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getClosedDate", array())) {
            // line 29
            echo "<span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.badge.closed", array(), "CCDNForumForumBundle"), "html", null, true);
            echo "</span>&nbsp;";
        }
        // line 32
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle", array()), "html", null, true);
        echo "\">";
        // line 33
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle", array())), "html", null, true);
        // line 34
        echo "</a>

\t\t\t<br>";
        // line 38
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost", array())) {
            // line 39
            echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost", array()), "getCreatedBy", array()), "html", null, true);
            // line 42
            echo "&nbsp;&#183;
                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
            echo "\">
                    <abbr class=\"timestamper\" title=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost", array()), "getCreatedDate", array()), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
            echo "\">";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost", array()), "getCreatedDate", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board", array()), "user", array()), "show", array()), "first_post_datetime_format", array())), "html", null, true);
            // line 46
            echo "</abbr>
                </a>";
        }
        // line 49
        echo "</td>
\t\t<td class=\"center\">
\t\t\t<span class=\"label label-info lead\" title=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedReplyCount", array()), "html", null, true);
        echo "\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedReplyCount", array()), "html", null, true);
        // line 53
        echo "</span>
\t\t</td>
\t\t<td class=\"center\">
\t\t\t<span class=\"label label-info lead\" title=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedViewCount", array()), "html", null, true);
        echo "\">";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedViewCount", array()), "html", null, true);
        // line 58
        echo "</span>
\t\t</td>
\t\t<td class=\"center\">";
        // line 61
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array())) {
            // line 62
            echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array()), "getCreatedBy", array()), "html", null, true);
            // line 65
            echo "<br>


\t\t\t\t";
            // line 72
            $context["page"] = 1;
            // line 73
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < 2)) {
                // line 74
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array()), "getId", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                // line 76
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array()), "getCreatedDate", array()), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                echo "\">";
                // line 77
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array()), "getCreatedDate", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board", array()), "user", array()), "show", array()), "last_post_datetime_format", array())), "html", null, true);
                // line 78
                echo "</abbr>
\t\t\t\t\t</a>";
            } else {
                // line 81
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                echo "#";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array()), "getId", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array()), "getCreatedDate", array()), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                echo "\">";
                // line 84
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array()), "getCreatedDate", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board", array()), "user", array()), "show", array()), "last_post_datetime_format", array())), "html", null, true);
                // line 85
                echo "</abbr>
\t\t\t\t\t</a>";
            }
        }
        // line 89
        echo "</td>
\t</tr>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Board/Partial:item_topic_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 89,  170 => 85,  168 => 84,  165 => 83,  157 => 81,  153 => 78,  151 => 77,  148 => 76,  140 => 74,  138 => 73,  136 => 72,  131 => 65,  129 => 63,  127 => 62,  125 => 61,  121 => 58,  119 => 57,  116 => 56,  111 => 53,  109 => 52,  106 => 51,  102 => 49,  98 => 46,  96 => 45,  93 => 44,  89 => 43,  86 => 42,  84 => 40,  82 => 39,  80 => 38,  76 => 34,  74 => 33,  68 => 32,  63 => 29,  61 => 28,  57 => 25,  54 => 23,  51 => 21,  49 => 20,  45 => 19,  41 => 16,  36 => 12,  34 => 11,  31 => 8,  29 => 7,  26 => 5,  24 => 4,  21 => 2,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* 	<tr>*/
/* 		<td class="center">*/
/* 			{%- if topic.isDeleted -%}*/
/* 				<i class="glyphicon glyphicon-trash"></i>*/
/* 			{%- else -%}*/
/* 				{%- if topic.isClosed -%}*/
/* 					<i class="glyphicon glyph-icon-lock"></i>*/
/* 				{%- else -%}*/
/* 					{# else if not closed, then if new posts add special icon here #}*/
/* 					{%- if topic.cachedReplyCount > 100 -%}*/
/* 						<i class="glyphicon glyphicon-fire"></i>*/
/* 					{%- endif -%}*/
/* 				{%- endif -%}*/
/* 			{%- endif -%}*/
/* 		</td>*/
/* 		<td class="center">*/
/* 			{# use custom icons below, will be later specified in the create topic form #}*/
/* 			<a href="{{- path('ccdn_forum_user_topic_show', {'forumName': forumName, 'topicId': topic.getId }) -}}">*/
/* 				{%- if topic.isSticky -%}*/
/* 					<i class="glyphicon glyphicon-bullhorn"></i>*/
/* 				{%- else -%}*/
/* 					<i class="glyphicon glyphicon-comment"></i>*/
/* 				{%- endif -%}*/
/* 			</a>*/
/* 		</td>*/
/* 		<td class="left">*/
/* 			{%- if topic.getClosedDate -%}*/
/* 				<span class="label label-danger">{{- 'topic.badge.closed' |trans({}, 'CCDNForumForumBundle') -}}</span>&nbsp;*/
/* 			{%- endif -%}*/
/* */
/* 			<a href="{{- path('ccdn_forum_user_topic_show', {'forumName': forumName, 'topicId': topic.getId }) -}}" title="{{- topic.getTitle -}}">*/
/* 				{{- topic.getTitle |title -}}*/
/* 			</a>*/
/* */
/* 			<br>*/
/* */
/* 			{%- if topic.getFirstPost -%}*/
/* 				{{- 'post.posted-by' | trans({}, 'CCDNForumForumBundle') |raw -}}*/
/* 				{{- topic.getFirstPost.getCreatedBy -}}*/
/* */
/* 				&nbsp;&#183;*/
/*                 <a href="{{- path('ccdn_forum_user_topic_show', {'forumName': forumName, 'topicId': topic.getId }) -}}">*/
/*                     <abbr class="timestamper" title="{{- topic.getFirstPost.getCreatedDate |date('Y-m-d H:i:s T Z', 'Europe/London') -}}">*/
/*                         {{- topic.getFirstPost.getCreatedDate |date(ccdn_forum_forum.board.user.show.first_post_datetime_format) -}}*/
/*                     </abbr>*/
/*                 </a>*/
/* 			{%- endif -%}*/
/* 		</td>*/
/* 		<td class="center">*/
/* 			<span class="label label-info lead" title="{{- topic.getCachedReplyCount -}}">*/
/* 				{{- topic.getCachedReplyCount -}}*/
/* 			</span>*/
/* 		</td>*/
/* 		<td class="center">*/
/* 			<span class="label label-info lead" title="{{- topic.getCachedViewCount -}}">*/
/* 				{{- topic.getCachedViewCount -}}*/
/* 			</span>*/
/* 		</td>*/
/* 		<td class="center">*/
/* 			{%- if topic.getLastPost -%}*/
/*                 {{- 'post.posted-by' | trans({}, 'CCDNForumForumBundle') |raw -}}*/
/* 				{{- topic.getLastPost.getCreatedBy -}}*/
/* */
/* 				<br>*/
/* */
/* */
/* 				{#*/
/* 					@TODO figure a way to determine page in a more appropriate way*/
/* 	                {%- set page = divCeil((topic.getCachedReplyCount + 1), posts_per_page) -%}*/
/* 				#}*/
/* 				{%- set page = 1 -%}*/
/* 				{%- if page < 2 -%}*/
/* 					<a href="{{- path('ccdn_forum_user_topic_show', {'forumName': forumName, 'topicId': topic.getId } ) -}}#{{- topic.getLastPost.getId -}}">*/
/* 						<i class="glyphicon glyphicon-arrow-right"></i>*/
/* 						<abbr class="timestamper" title="{{- topic.getLastPost.getCreatedDate |date('Y-m-d H:i:s T Z', 'Europe/London') -}}">*/
/* 							{{- topic.getLastPost.getCreatedDate |date(ccdn_forum_forum.board.user.show.last_post_datetime_format) -}}*/
/* 						</abbr>*/
/* 					</a>*/
/* 				{%- else -%}*/
/* 					<a href="{{- path('ccdn_forum_user_topic_show', {'forumName': forumName, 'topicId': topic.getId, 'page':page }) -}}#{{- topic.getLastPost.getId -}}">*/
/* 						<i class="glyphicon glyphicon-arrow-right"></i>*/
/* 						<abbr class="timestamper" title="{{- topic.getLastPost.getCreatedDate |date('Y-m-d H:i:s T Z', 'Europe/London') -}}">*/
/* 							{{- topic.getLastPost.getCreatedDate |date(ccdn_forum_forum.board.user.show.last_post_datetime_format) -}}*/
/* 						</abbr>*/
/* 					</a>*/
/* 				{%- endif -%}*/
/* 			{%- endif -%}*/
/* 		</td>*/
/* 	</tr>*/
/* {%- endspaceless -%}*/
/* */
