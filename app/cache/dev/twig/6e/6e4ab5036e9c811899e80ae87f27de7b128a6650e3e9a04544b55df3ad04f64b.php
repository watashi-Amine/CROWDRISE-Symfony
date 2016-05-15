<?php

/* CCDNForumForumBundle:User/Post/Partial:item_post_head.html.twig */
class __TwigTemplate_cf10ae26d16d4efdf6f409227dea4098d0a733307219d063c5ca807f673842d5 extends Twig_Template
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
        echo "<div class=\"row clearfix\">
\t    <div class=\"col-md-7\">
\t\t\t<h3 class=\"panel-title\">";
        // line 6
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy", array())) {
            // line 7
            echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy", array()), "username", array()), "html", null, true);
            // line 10
            echo "&nbsp;&#183;&nbsp;";
        }
        // line 14
        echo "<span class=\"timestamper\" title=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate", array()), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
        echo "\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate", array()), $this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "item_post", array()), "created_datetime_format", array())), "html", null, true);
        // line 16
        echo "</span>
\t\t\t</h3>
\t    </div>

\t    <div class=\"col-md-5 pull-right text-right\">
\t        ";
        // line 21
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()) &&  !$this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted", array()))) {
            // line 22
            echo "\t            <div class=\"btn-group\">
\t                <a class=\"btn btn-xs btn-icon-only\" title=\"show post\"
\t\t\t\t\t href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_post_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-fullscreen\"></i>
\t\t\t\t\t</a>
\t                <a class=\"btn btn-xs btn-icon-only\" href=\"#post_";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-link\"></i>
\t\t\t\t\t</a>
\t            </div>
\t        ";
        }
        // line 33
        if ((($this->env->getExtension('security')->isGranted("ROLE_USER") && $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array())) && ($this->env->getExtension('security')->isGranted("ROLE_MODERATOR") ||  !$this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted", array())))) {
            // line 34
            echo "&nbsp;
                <div class=\"dropdown btn-group text-left\">
                    <a class=\"dropdown-toggle btn btn-xs btn-icon-only\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-cog\"></i>
\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t</a>
                    <ul class=\"dropdown-menu pull-right content-left\" style=\"z-index:15;\">";
            // line 42
            if ($this->env->getExtension('authorizer')->canReplyToTopic($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic", array()))) {
                // line 43
                echo "<li>
\t\t\t\t\t\t\t\t<a rel=\"nofollow\"
\t\t\t\t\t\t\t\t href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_reply", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic", array()), "getId", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-pencil\"></i>";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.reply", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 48
                echo "</a>
\t\t\t\t\t\t\t</li>";
            }
            // line 52
            if ($this->env->getExtension('authorizer')->canEditPost((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
                // line 53
                echo "<li>
\t\t\t\t\t\t\t\t<a rel=\"nofollow\" id=\"post_edit[";
                // line 54
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getBody", array()), 0, 24), "html", null, true);
                echo "]\"
\t\t\t\t\t\t\t\t href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_post_edit", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-pencil\"></i>";
                // line 57
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.edit", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 58
                echo "</a>
\t\t\t\t\t\t\t</li>";
            }
            // line 62
            if ($this->env->getExtension('authorizer')->canDeletePost((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
                // line 63
                echo "<li>
\t\t\t\t\t\t\t\t<a rel=\"nofollow\"
\t\t\t\t\t\t\t\t href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_post_delete", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.post.delete", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 68
                echo "</a>
\t\t\t\t\t\t\t</li>";
            }
            // line 72
            if ($this->env->getExtension('authorizer')->canRestorePost((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
                // line 73
                echo "<li>
                                <a rel=\"nofollow\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_post_restore", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array()))), "html", null, true);
                echo "\">
                                    <i class=\"glyphicon glyphicon-trash\"></i>";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.post.restore", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 77
                echo "</a>
                            </li>";
            }
            // line 81
            if ($this->env->getExtension('authorizer')->canLockPost((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
                // line 82
                echo "<li>
                                <a rel=\"nofollow\" href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_post_lock", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array()))), "html", null, true);
                echo "\">
                                    <i class=\"glyphicon glyphicon-lock\"></i>";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.post.lock", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 86
                echo "</a>
                            </li>";
            }
            // line 90
            if ($this->env->getExtension('authorizer')->canUnlockPost((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))) {
                // line 91
                echo "<li>
                                <a rel=\"nofollow\" href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_post_unlock", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array()))), "html", null, true);
                echo "\">
                                    <i class=\"glyphicon glyphicon-lock\"></i>";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.post.unlock", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 95
                echo "</a>
                            </li>";
            }
            // line 99
            echo "</ul>
                </div>";
        }
        // line 102
        echo "</div>
\t</div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Post/Partial:item_post_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 102,  173 => 99,  169 => 95,  167 => 94,  163 => 92,  160 => 91,  158 => 90,  154 => 86,  152 => 85,  148 => 83,  145 => 82,  143 => 81,  139 => 77,  137 => 76,  133 => 74,  130 => 73,  128 => 72,  124 => 68,  122 => 67,  118 => 65,  114 => 63,  112 => 62,  108 => 58,  106 => 57,  102 => 55,  98 => 54,  95 => 53,  93 => 52,  89 => 48,  87 => 47,  83 => 45,  79 => 43,  77 => 42,  69 => 34,  67 => 33,  59 => 27,  53 => 24,  49 => 22,  47 => 21,  40 => 16,  38 => 15,  34 => 14,  31 => 10,  29 => 8,  27 => 7,  25 => 6,  21 => 3,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* */
/* 	<div class="row clearfix">*/
/* 	    <div class="col-md-7">*/
/* 			<h3 class="panel-title">*/
/* 				{%- if post.getCreatedBy -%}*/
/* 			        {{- 'post.posted-by' |trans({}, 'CCDNForumForumBundle') |raw -}}*/
/* 					{{- post.getCreatedBy.username -}}*/
/* */
/* 			        &nbsp;&#183;&nbsp;*/
/* */
/* 				{%- endif -%}*/
/* */
/* 		        <span class="timestamper" title="{{- post.getCreatedDate |date('Y-m-d H:i:s T Z', 'Europe/London') -}}">*/
/* 		            {{- post.getCreatedDate |date(ccdn_forum_forum.item_post.created_datetime_format) -}}*/
/* 		        </span>*/
/* 			</h3>*/
/* 	    </div>*/
/* */
/* 	    <div class="col-md-5 pull-right text-right">*/
/* 	        {% if post.id and not post.isDeleted %}*/
/* 	            <div class="btn-group">*/
/* 	                <a class="btn btn-xs btn-icon-only" title="show post"*/
/* 					 href="{{- path('ccdn_forum_user_post_show', {'forumName': forumName, 'postId': post.getId }) -}}">*/
/* 						<i class="glyphicon glyphicon-fullscreen"></i>*/
/* 					</a>*/
/* 	                <a class="btn btn-xs btn-icon-only" href="#post_{{- post.getId -}}">*/
/* 						<i class="glyphicon glyphicon-link"></i>*/
/* 					</a>*/
/* 	            </div>*/
/* 	        {% endif %}*/
/* */
/*             {%- if is_granted('ROLE_USER') and post.id and (is_granted('ROLE_MODERATOR') or not post.isDeleted) -%}*/
/* 				&nbsp;*/
/*                 <div class="dropdown btn-group text-left">*/
/*                     <a class="dropdown-toggle btn btn-xs btn-icon-only" data-toggle="dropdown" href="#">*/
/* 						<i class="glyphicon glyphicon-cog"></i>*/
/* 						<span class="caret"></span>*/
/* 					</a>*/
/*                     <ul class="dropdown-menu pull-right content-left" style="z-index:15;">*/
/* */
/* 						{%- if canReplyToTopic(post.getTopic) -%}*/
/* 	                        <li>*/
/* 								<a rel="nofollow"*/
/* 								 href="{{- path('ccdn_forum_user_topic_reply', {'forumName': forumName, 'topicId': post.getTopic.getId }) -}}">*/
/* 									<i class="glyphicon glyphicon-pencil"></i>*/
/* 									{{- 'link.topic.reply' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 								</a>*/
/* 							</li>*/
/* 						{%- endif -%}*/
/* */
/* 						{%- if canEditPost(post) -%}*/
/*                             <li>*/
/* 								<a rel="nofollow" id="post_edit[{{- post.getBody |slice(0,24) -}}]"*/
/* 								 href="{{- path('ccdn_forum_user_post_edit', {'forumName': forumName, 'postId': post.getId }) -}}">*/
/* 									<i class="glyphicon glyphicon-pencil"></i>*/
/* 									{{- 'link.edit' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 								</a>*/
/* 							</li>*/
/* 						{%- endif -%}*/
/* */
/*                         {%- if canDeletePost(post) -%}*/
/*                             <li>*/
/* 								<a rel="nofollow"*/
/* 								 href="{{- path('ccdn_forum_user_post_delete', {'forumName': forumName, 'postId': post.getId }) -}}">*/
/* 									<i class="glyphicon glyphicon-trash"></i>*/
/* 									{{- 'link.post.delete' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 								</a>*/
/* 							</li>*/
/*                         {%- endif -%}*/
/* */
/* 						{%- if canRestorePost(post) -%}*/
/*                             <li>*/
/*                                 <a rel="nofollow" href="{{- path('ccdn_forum_moderator_post_restore', {'forumName': forumName, 'postId': post.getId }) -}}">*/
/*                                     <i class="glyphicon glyphicon-trash"></i>*/
/* 									{{- 'link.post.restore' | trans({}, 'CCDNForumForumBundle') -}}*/
/*                                 </a>*/
/*                             </li>*/
/*                         {%- endif -%}*/
/* */
/* 						{%- if canLockPost(post) -%}*/
/*                             <li>*/
/*                                 <a rel="nofollow" href="{{- path('ccdn_forum_moderator_post_lock', {'forumName': forumName, 'postId': post.getId }) -}}">*/
/*                                     <i class="glyphicon glyphicon-lock"></i>*/
/* 									{{- 'link.post.lock' | trans({}, 'CCDNForumForumBundle') -}}*/
/*                                 </a>*/
/*                             </li>*/
/* 						{%- endif -%}*/
/* */
/* 						{%- if canUnlockPost(post) -%}*/
/*                             <li>*/
/*                                 <a rel="nofollow" href="{{- path('ccdn_forum_moderator_post_unlock', {'forumName': forumName, 'postId': post.getId }) -}}">*/
/*                                     <i class="glyphicon glyphicon-lock"></i>*/
/* 									{{- 'link.post.unlock' | trans({}, 'CCDNForumForumBundle') -}}*/
/*                                 </a>*/
/*                             </li>*/
/*                         {%- endif -%}*/
/* */
/*                     </ul>*/
/*                 </div>*/
/*             {%- endif -%}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {%- endspaceless -%}*/
/* */
