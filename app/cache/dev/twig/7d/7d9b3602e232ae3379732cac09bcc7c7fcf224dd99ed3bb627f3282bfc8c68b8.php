<?php

/* CCDNForumForumBundle:User/Subscription/Partial:item_topic_list.html.twig */
class __TwigTemplate_753aa6af9e021ac45b36e1b9086a1d170de5be4583dc1357c15ea886cd52033b extends Twig_Template
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
        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard", array())) {
            // line 3
            if ($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard", array()), "getCategory", array())) {
                // line 4
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard", array()), "getCategory", array()), "getForum", array())) {
                    // line 5
                    echo "<tr>
\t\t\t\t\t<td class=\"center\">";
                    // line 7
                    if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isDeleted", array())) {
                        // line 8
                        echo "<i class=\"glyphicon glyphicon-trash\"></i>";
                    } else {
                        // line 10
                        if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isClosed", array())) {
                            // line 11
                            echo "<i class=\"glyphicon glyphicon-lock\"></i>";
                        } else {
                            // line 14
                            if (($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "cachedReplyCount", array()) > 100)) {
                                // line 15
                                echo "<i class=\"glyphicon glyphicon-fire\"></i>";
                            }
                        }
                    }
                    // line 19
                    echo "</td>
\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t";
                    // line 22
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "board", array()), "category", array()), "forumName", array()), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                    echo "\">";
                    // line 23
                    if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "isSticky", array())) {
                        // line 24
                        echo "<i class=\"glyphicon glyphicon-bullhorn\"></i>";
                    } else {
                        // line 26
                        echo "<i class=\"glyphicon glyphicon-comment\"></i>";
                    }
                    // line 28
                    echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"left\">";
                    // line 31
                    if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getClosedDate", array())) {
                        // line 32
                        echo "<span class=\"label label-danger\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.badge.closed", array(), "CCDNForumForumBundle"), "html", null, true);
                        echo "</span>&nbsp;";
                    }
                    // line 35
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "board", array()), "category", array()), "forumName", array()), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle", array()), "html", null, true);
                    echo "\">";
                    // line 36
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getTitle", array())), "html", null, true);
                    // line 37
                    echo "</a>

\t\t\t\t\t\t<br>";
                    // line 41
                    if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost", array())) {
                        // line 43
                        echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
                        // line 44
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost", array()), "getCreatedBy", array()), "html", null, true);
                        // line 46
                        echo "&nbsp;&#183;
\t\t\t                <a href=\"";
                        // line 47
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "board", array()), "category", array()), "forumName", array()), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                        echo "\">
\t\t\t                    <abbr class=\"timestamper\" title=\"";
                        // line 48
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost", array()), "getCreatedDate", array()), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                        echo "\">";
                        // line 49
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getFirstPost", array()), "getCreatedDate", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board", array()), "user", array()), "show", array()), "first_post_datetime_format", array())), "html", null, true);
                        // line 50
                        echo "</abbr>
\t\t\t                </a>";
                    }
                    // line 53
                    echo "</td>
\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t<span class=\"label label-info lead\" title=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedReplyCount", array()), "html", null, true);
                    echo "\">";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedReplyCount", array()), "html", null, true);
                    // line 57
                    echo "</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t<span class=\"label label-info lead\" title=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedViewCount", array()), "html", null, true);
                    echo "\">";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getCachedViewCount", array()), "html", null, true);
                    // line 62
                    echo "</span>
\t\t\t\t\t</td>
\t\t\t\t\t<td class=\"center\">";
                    // line 65
                    if ($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array())) {
                        // line 67
                        echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
                        // line 68
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array()), "getCreatedBy", array()), "html", null, true);
                        // line 70
                        echo "<br>

\t\t\t\t\t\t\t";
                        // line 76
                        $context["page"] = 1;
                        // line 77
                        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < 2)) {
                            // line 78
                            echo "<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "board", array()), "category", array()), "forumName", array()), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                            echo "#";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array()), "getId", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                            // line 80
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array()), "getCreatedDate", array()), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                            echo "\">";
                            // line 81
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array()), "getCreatedDate", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board", array()), "user", array()), "show", array()), "last_post_datetime_format", array())), "html", null, true);
                            // line 82
                            echo "</abbr>
\t\t\t\t\t\t\t\t</a>";
                        } else {
                            // line 85
                            echo "<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "board", array()), "category", array()), "forumName", array()), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                            echo "#";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array()), "getId", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                            // line 87
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array()), "getCreatedDate", array()), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                            echo "\">";
                            // line 88
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getLastPost", array()), "getCreatedDate", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board", array()), "user", array()), "show", array()), "last_post_datetime_format", array())), "html", null, true);
                            // line 89
                            echo "</abbr>
\t\t\t\t\t\t\t\t</a>";
                        }
                    }
                    // line 93
                    echo "</td>
\t\t\t\t</tr>";
                }
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Subscription/Partial:item_topic_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 93,  175 => 89,  173 => 88,  170 => 87,  162 => 85,  158 => 82,  156 => 81,  153 => 80,  145 => 78,  143 => 77,  141 => 76,  137 => 70,  135 => 68,  133 => 67,  131 => 65,  127 => 62,  125 => 61,  122 => 60,  117 => 57,  115 => 56,  112 => 55,  108 => 53,  104 => 50,  102 => 49,  99 => 48,  95 => 47,  92 => 46,  90 => 44,  88 => 43,  86 => 41,  82 => 37,  80 => 36,  74 => 35,  69 => 32,  67 => 31,  63 => 28,  60 => 26,  57 => 24,  55 => 23,  51 => 22,  47 => 19,  42 => 15,  40 => 14,  37 => 11,  35 => 10,  32 => 8,  30 => 7,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* 	{%- if topic.getBoard -%}*/
/* 		{%- if topic.getBoard.getCategory -%}*/
/* 			{%- if topic.getBoard.getCategory.getForum -%}*/
/* 				<tr>*/
/* 					<td class="center">*/
/* 						{%- if topic.isDeleted -%}*/
/* 							<i class="glyphicon glyphicon-trash"></i>*/
/* 						{%- else -%}*/
/* 							{%- if topic.isClosed -%}*/
/* 								<i class="glyphicon glyphicon-lock"></i>*/
/* 							{%- else -%}*/
/* 								{# else if not closed, then if new posts add special icon here #}*/
/* 								{%- if topic.cachedReplyCount > 100 -%}*/
/* 									<i class="glyphicon glyphicon-fire"></i>*/
/* 								{%- endif -%}*/
/* 							{%- endif -%}*/
/* 						{%- endif -%}*/
/* 					</td>*/
/* 					<td class="center">*/
/* 						{# use custom icons below, will be later specified in the create topic form #}*/
/* 						<a href="{{- path('ccdn_forum_user_topic_show', {'forumName': topic.board.category.forumName, 'topicId': topic.getId }) -}}">*/
/* 							{%- if topic.isSticky -%}*/
/* 								<i class="glyphicon glyphicon-bullhorn"></i>*/
/* 							{%- else -%}*/
/* 								<i class="glyphicon glyphicon-comment"></i>*/
/* 							{%- endif -%}*/
/* 						</a>*/
/* 					</td>*/
/* 					<td class="left">*/
/* 						{%- if topic.getClosedDate -%}*/
/* 							<span class="label label-danger">{{- 'topic.badge.closed' |trans({}, 'CCDNForumForumBundle') -}}</span>&nbsp;*/
/* 						{%- endif -%}*/
/* */
/* 						<a href="{{- path('ccdn_forum_user_topic_show', {'forumName': topic.board.category.forumName, 'topicId': topic.getId }) -}}" title="{{- topic.getTitle -}}">*/
/* 							{{- topic.getTitle |title -}}*/
/* 						</a>*/
/* */
/* 						<br>*/
/* */
/* 						{%- if topic.getFirstPost -%}*/
/* */
/* 							{{- 'post.posted-by' | trans({}, 'CCDNForumForumBundle') |raw -}}*/
/* 							{{- topic.getFirstPost.getCreatedBy -}}*/
/* */
/* 							&nbsp;&#183;*/
/* 			                <a href="{{- path('ccdn_forum_user_topic_show', {'forumName': topic.board.category.forumName, 'topicId': topic.getId }) -}}">*/
/* 			                    <abbr class="timestamper" title="{{- topic.getFirstPost.getCreatedDate |date('Y-m-d H:i:s T Z', 'Europe/London') -}}">*/
/* 			                        {{- topic.getFirstPost.getCreatedDate |date(ccdn_forum_forum.board.user.show.first_post_datetime_format) -}}*/
/* 			                    </abbr>*/
/* 			                </a>*/
/* 						{%- endif -%}*/
/* 					</td>*/
/* 					<td class="center">*/
/* 						<span class="label label-info lead" title="{{- topic.getCachedReplyCount -}}">*/
/* 							{{- topic.getCachedReplyCount -}}*/
/* 						</span>*/
/* 					</td>*/
/* 					<td class="center">*/
/* 						<span class="label label-info lead" title="{{- topic.getCachedViewCount -}}">*/
/* 							{{- topic.getCachedViewCount -}}*/
/* 						</span>*/
/* 					</td>*/
/* 					<td class="center">*/
/* 						{%- if topic.getLastPost -%}*/
/* */
/* 			                {{- 'post.posted-by' | trans({}, 'CCDNForumForumBundle') |raw -}}*/
/* 							{{- topic.getLastPost.getCreatedBy -}}*/
/* */
/* 							<br>*/
/* */
/* 							{#*/
/* 								@TODO figure a way to determine page in a more appropriate way*/
/* 				                {%- set page = divCeil((topic.getCachedReplyCount + 1), posts_per_page) -%}*/
/* 							#}*/
/* 							{%- set page = 1 -%}*/
/* 							{%- if page < 2 -%}*/
/* 								<a href="{{- path('ccdn_forum_user_topic_show', {'forumName': topic.board.category.forumName, 'topicId': topic.getId } ) -}}#{{- topic.getLastPost.getId -}}">*/
/* 									<i class="glyphicon glyphicon-arrow-right"></i>*/
/* 									<abbr class="timestamper" title="{{- topic.getLastPost.getCreatedDate |date('Y-m-d H:i:s T Z', 'Europe/London') -}}">*/
/* 										{{- topic.getLastPost.getCreatedDate |date(ccdn_forum_forum.board.user.show.last_post_datetime_format) -}}*/
/* 									</abbr>*/
/* 								</a>*/
/* 							{%- else -%}*/
/* 								<a href="{{- path('ccdn_forum_user_topic_show', {'forumName': topic.board.category.forumName, 'topicId': topic.getId, 'page': page }) -}}#{{- topic.getLastPost.getId -}}">*/
/* 									<i class="glyphicon glyphicon-arrow-right"></i>*/
/* 									<abbr class="timestamper" title="{{- topic.getLastPost.getCreatedDate |date('Y-m-d H:i:s T Z', 'Europe/London') -}}">*/
/* 										{{- topic.getLastPost.getCreatedDate |date(ccdn_forum_forum.board.user.show.last_post_datetime_format) -}}*/
/* 									</abbr>*/
/* 								</a>*/
/* 							{%- endif -%}*/
/* 						{%- endif -%}*/
/* 					</td>*/
/* 				</tr>*/
/* 			{%- endif -%}*/
/* 		{%- endif -%}*/
/* 	{%- endif -%}*/
/* {%- endspaceless -%}*/
/* */
