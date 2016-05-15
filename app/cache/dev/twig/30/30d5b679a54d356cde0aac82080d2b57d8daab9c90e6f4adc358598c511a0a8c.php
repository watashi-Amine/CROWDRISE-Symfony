<?php

/* CCDNForumForumBundle:User/Category/Partial:item_board.html.twig */
class __TwigTemplate_18fc4b16ee0cd7b2c7198e3db4d6e3aaeb740cc2b7faf98e3dfbc6c636aadf4d extends Twig_Template
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
\t    <td class=\"center\">";
        // line 4
        if ($this->env->getExtension('authorizer')->canCreateTopicOnBoard((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
            // line 5
            if ($this->env->getExtension('authorizer')->canReplyToTopicOnBoard((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                // line 6
                echo "<i class=\"glyphicon glyphicon-folder-close\" style=\"margin-top:10px;\"></i>";
            } else {
                // line 8
                echo "<i class=\"glyphicon glyphicon-lock\" style=\"margin-top:10px;\"></i>";
            }
        } else {
            // line 11
            if ($this->env->getExtension('authorizer')->canReplyToTopicOnBoard((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                // line 12
                echo "<i class=\"glyphicon glyphicon-eye-open\" style=\"margin-top:10px;\"></i>";
            } else {
                // line 14
                echo "<i class=\"glyphicon glyphicon-lock\" style=\"margin-top:10px;\"></i>";
            }
        }
        // line 17
        echo "</td>

\t    <td class=\"left\">
\t        <h4>
\t            <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getId", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getName", array()), "html", null, true);
        echo "\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getName", array()), "html", null, true);
        // line 23
        echo "</a>
\t        </h4>

\t\t\t<blockquote class=\"slim\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getDescription", array()), "html", null, true);
        // line 28
        echo "</blockquote>
\t    </td>

\t    <td class=\"center\" style=\"width: 100px;\">
\t\t\t<span class=\"label label-info lead\" title=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCachedTopicCount", array()), "html", null, true);
        echo "\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCachedTopicCount", array()), "html", null, true);
        // line 34
        echo "</span>
\t    </td>

\t    <td class=\"center\" style=\"width: 100px;\">
\t\t\t<span class=\"label label-info lead\" title=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCachedPostCount", array()), "html", null, true);
        echo "\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCachedPostCount", array()), "html", null, true);
        // line 40
        echo "</span>
\t    </td>

\t    <td class=\"center\" style=\"width:170px;\">";
        // line 44
        if ($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost", array())) {
            // line 45
            if ($this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost", array()), "getTopic", array())) {
                // line 46
                echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost", array()), "getCreatedBy", array()), "html", null, true);
                // line 49
                echo "<br>

\t\t\t\t\t";
                // line 55
                $context["page"] = 1;
                // line 56
                if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < 2)) {
                    // line 57
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost", array()), "getTopic", array()), "getId", array()))), "html", null, true);
                    echo "#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost", array()), "getId", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t                        <abbr class=\"timestamper\" title=\"";
                    // line 59
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost", array()), "getCreatedDate", array()), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                    echo "\">";
                    // line 60
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost", array()), "getCreatedDate", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "category", array()), "user", array()), "last_post_datetime_format", array())), "html", null, true);
                    // line 61
                    echo "</abbr>
\t                    </a>";
                } else {
                    // line 64
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_show_paginated", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost", array()), "getTopic", array()), "getId", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
                    echo "#";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost", array()), "getId", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-arrow-right\"></i>
\t                        <abbr class=\"timestamper\" title=\"";
                    // line 66
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost", array()), "getCreatedDate", array()), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                    echo "\">";
                    // line 67
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getLastPost", array()), "getCreatedDate", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "category", array()), "user", array()), "last_post_datetime_format", array())), "html", null, true);
                    // line 68
                    echo "</abbr>
\t                    </a>";
                }
            }
        }
        // line 73
        echo "</td>
\t</tr>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Category/Partial:item_board.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 73,  137 => 68,  135 => 67,  132 => 66,  124 => 64,  120 => 61,  118 => 60,  115 => 59,  107 => 57,  105 => 56,  103 => 55,  99 => 49,  97 => 47,  95 => 46,  93 => 45,  91 => 44,  86 => 40,  84 => 39,  81 => 38,  75 => 34,  73 => 33,  70 => 32,  64 => 28,  62 => 27,  57 => 23,  55 => 22,  50 => 21,  44 => 17,  40 => 14,  37 => 12,  35 => 11,  31 => 8,  28 => 6,  26 => 5,  24 => 4,  21 => 2,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* 	<tr>*/
/* 	    <td class="center">*/
/* 	        {%- if canCreateTopicOnBoard(board, forum) -%}*/
/* 	            {%- if canReplyToTopicOnBoard(board, forum) -%}*/
/* 	                <i class="glyphicon glyphicon-folder-close" style="margin-top:10px;"></i>*/
/* 	            {%- else -%}*/
/* 	                <i class="glyphicon glyphicon-lock" style="margin-top:10px;"></i>*/
/* 	            {%- endif -%}*/
/* 	        {%- else -%}*/
/* 	            {%- if canReplyToTopicOnBoard(board, forum) -%}*/
/* 	                <i class="glyphicon glyphicon-eye-open" style="margin-top:10px;"></i>*/
/* 	            {%- else -%}*/
/* 	                <i class="glyphicon glyphicon-lock" style="margin-top:10px;"></i>*/
/* 	            {%- endif -%}*/
/* 	        {%- endif -%}*/
/* 	    </td>*/
/* */
/* 	    <td class="left">*/
/* 	        <h4>*/
/* 	            <a href="{{- path('ccdn_forum_user_board_show', {'forumName': forumName, 'boardId': board.getId }) -}}" title="{{- board.getName -}}">*/
/* 	                {{- board.getName -}}*/
/* 	            </a>*/
/* 	        </h4>*/
/* */
/* 			<blockquote class="slim">*/
/* 	            {{- board.getDescription -}}*/
/* 			</blockquote>*/
/* 	    </td>*/
/* */
/* 	    <td class="center" style="width: 100px;">*/
/* 			<span class="label label-info lead" title="{{- board.getCachedTopicCount -}}">*/
/* 				{{- board.getCachedTopicCount -}}*/
/* 			</span>*/
/* 	    </td>*/
/* */
/* 	    <td class="center" style="width: 100px;">*/
/* 			<span class="label label-info lead" title="{{- board.getCachedPostCount -}}">*/
/* 		        {{- board.getCachedPostCount -}}*/
/* 			</span>*/
/* 	    </td>*/
/* */
/* 	    <td class="center" style="width:170px;">*/
/* 	        {%- if board.getLastPost -%}*/
/* 	            {%- if board.getLastPost.getTopic -%}*/
/* 	                {{- 'post.posted-by' | trans({}, 'CCDNForumForumBundle') |raw -}}*/
/* 					{{- board.getLastPost.getCreatedBy -}}*/
/* */
/* 	                <br>*/
/* */
/* 					{#*/
/* 						@TODO figure a way to determine page in a more appropriate way*/
/* 		                {%- set page = divCeil(( board.getLastPost.getTopic.getCachedReplyCount + 1), topics_per_page) -%}*/
/* 					#}*/
/* 					{%- set page = 1 -%}*/
/* 	                {%- if page < 2 -%}*/
/* 	                    <a href="{{- path('ccdn_forum_user_topic_show', {'forumName': forumName, 'topicId': board.getLastPost.getTopic.getId } ) -}}#{{- board.getLastPost.getId -}}">*/
/* 							<i class="glyphicon glyphicon-arrow-right"></i>*/
/* 	                        <abbr class="timestamper" title="{{- board.getLastPost.getCreatedDate |date('Y-m-d H:i:s T Z', 'Europe/London') -}}">*/
/* 	                            {{- board.getLastPost.getCreatedDate |date(ccdn_forum_forum.category.user.last_post_datetime_format) -}}*/
/* 	                        </abbr>*/
/* 	                    </a>*/
/* 	                {%- else -%}*/
/* 	                    <a href="{{- path('ccdn_forum_user_topic_show_paginated', {'forumName': forumName, 'topicId': board.getLastPost.getTopic.getId, 'page':page }) -}}#{{- board.getLastPost.getId -}}">*/
/* 							<i class="glyphicon glyphicon-arrow-right"></i>*/
/* 	                        <abbr class="timestamper" title="{{- board.getLastPost.getCreatedDate |date('Y-m-d H:i:s T Z', 'Europe/London') -}}">*/
/* 	                            {{- board.getLastPost.getCreatedDate |date(ccdn_forum_forum.category.user.last_post_datetime_format) -}}*/
/* 	                        </abbr>*/
/* 	                    </a>*/
/* 	                {%- endif -%}*/
/* 	            {%- endif -%}*/
/* 	        {%- endif -%}*/
/* 	    </td>*/
/* 	</tr>*/
/* {%- endspaceless -%}*/
/* */
