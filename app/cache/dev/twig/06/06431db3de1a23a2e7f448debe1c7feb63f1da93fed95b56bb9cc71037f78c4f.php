<?php

/* CCDNForumForumBundle:User/Topic/Partial:topic_actions.html.twig */
class __TwigTemplate_b0b15bdf8929965f04b694192eff4811714ebad75cc08bab5a2e1947a610916e extends Twig_Template
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
        if (array_key_exists("topic", $context)) {
            // line 5
            if ( !array_key_exists("board", $context)) {
                // line 6
                $context["board"] = $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard", array());
            }
            // line 10
            if ($this->env->getExtension('authorizer')->canReplyToTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                // line 11
                echo "<a class=\"btn btn-danger\" rel=\"nofollow\"
\t\t\t href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_reply", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                echo "\">
\t\t\t\t<i class=\"glyphicon glyphicon-comment\"></i>";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.reply", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 15
                echo "</a>";
            } else {
                // line 17
                echo "<a class=\"btn btn-danger disabled\" rel=\"nofollow\"
\t\t\t href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_reply", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                echo "\">
\t\t\t\t<i class=\"glyphicon glyphicon-lock\"></i>";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.reply", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 21
                echo "</a>";
            }
            // line 25
            if ($this->env->getExtension('authorizer')->canSubscribeToTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), ((array_key_exists("subscription", $context)) ? ((isset($context["subscription"]) ? $context["subscription"] : $this->getContext($context, "subscription"))) : (null)))) {
                // line 26
                echo "<a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_subscribe", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                echo "\">
\t\t\t\t<i class=\"glyphicon glyphicon-eye-open\"></i>";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.subscribe", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 29
                echo "</a>";
            }
            // line 32
            if ($this->env->getExtension('authorizer')->canUnsubscribeFromTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")), ((array_key_exists("subscription", $context)) ? ((isset($context["subscription"]) ? $context["subscription"] : $this->getContext($context, "subscription"))) : (null)))) {
                // line 33
                echo "<a class=\"btn btn-info\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_unsubscribe", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                echo "\">
\t\t\t\t<i class=\"glyphicon glyphicon-eye-close\"></i>";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.unsubscribe", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 36
                echo "</a>";
            }
            // line 40
            if ($this->env->getExtension('security')->isGranted("ROLE_MODERATOR")) {
                // line 41
                echo "<div class=\"btn-group\">
\t\t\t\t<a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-wrench\"></i>";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.admin.index", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 45
                echo "<span class=\"caret\"></span>
\t\t\t\t</a>
\t\t\t\t<ul class=\"dropdown-menu\">";
                // line 49
                if ($this->env->getExtension('authorizer')->canStickyTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                    // line 50
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_sticky", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-bullhorn\"></i>";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.sticky", array(), "CCDNForumForumBundle"), "html", null, true);
                    // line 54
                    echo "</a>
\t\t\t\t\t\t</li>";
                }
                // line 58
                if ($this->env->getExtension('authorizer')->canUnstickyTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                    // line 59
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_unsticky", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-bullhorn\"></i>";
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.unsticky", array(), "CCDNForumForumBundle"), "html", null, true);
                    // line 63
                    echo "</a>
\t\t\t\t\t\t</li>";
                }
                // line 67
                if ($this->env->getExtension('authorizer')->canCloseTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                    // line 68
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_close", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-lock\"></i>";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.close", array(), "CCDNForumForumBundle"), "html", null, true);
                    // line 72
                    echo "</a>
\t\t\t\t\t\t</li>";
                }
                // line 76
                if ($this->env->getExtension('authorizer')->canReopenTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                    // line 77
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_reopen", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-lock\"></i>";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.reopen", array(), "CCDNForumForumBundle"), "html", null, true);
                    // line 81
                    echo "</a>
\t\t\t\t\t\t</li>";
                }
                // line 85
                if ($this->env->getExtension('authorizer')->canRestoreTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                    // line 86
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_restore", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>";
                    // line 89
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.restore", array(), "CCDNForumForumBundle"), "html", null, true);
                    // line 90
                    echo "</a>
\t\t\t\t\t\t</li>";
                }
                // line 94
                if ($this->env->getExtension('authorizer')->canDeleteTopic((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                    // line 95
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_delete", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-trash\"></i>";
                    // line 98
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.delete", array(), "CCDNForumForumBundle"), "html", null, true);
                    // line 99
                    echo "</a>
\t\t\t\t\t\t</li>";
                }
                // line 103
                if ($this->env->getExtension('authorizer')->canTopicChangeBoard((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
                    // line 104
                    echo "<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 105
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_moderator_topic_change_board", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "topicId" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getId", array()))), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-move\"></i>";
                    // line 107
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.change_board", array(), "CCDNForumForumBundle"), "html", null, true);
                    // line 108
                    echo "</a>
\t\t\t\t\t\t</li>";
                }
                // line 112
                echo "</ul>
\t\t\t</div>";
            }
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Topic/Partial:topic_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 112,  191 => 108,  189 => 107,  185 => 105,  182 => 104,  180 => 103,  176 => 99,  174 => 98,  170 => 96,  167 => 95,  165 => 94,  161 => 90,  159 => 89,  155 => 87,  152 => 86,  150 => 85,  146 => 81,  144 => 80,  140 => 78,  137 => 77,  135 => 76,  131 => 72,  129 => 71,  125 => 69,  122 => 68,  120 => 67,  116 => 63,  114 => 62,  110 => 60,  107 => 59,  105 => 58,  101 => 54,  99 => 53,  95 => 51,  92 => 50,  90 => 49,  86 => 45,  84 => 44,  80 => 41,  78 => 40,  75 => 36,  73 => 35,  68 => 33,  66 => 32,  63 => 29,  61 => 28,  56 => 26,  54 => 25,  51 => 21,  49 => 20,  45 => 18,  42 => 17,  39 => 15,  37 => 14,  33 => 12,  30 => 11,  28 => 10,  25 => 6,  23 => 5,  21 => 3,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* */
/* 	{%- if topic is defined -%}*/
/* */
/* 		{%- if board is not defined -%}*/
/* 			{%- set board = topic.getBoard -%}*/
/* 		{%- endif -%}*/
/* */
/* */
/* 		{%- if canReplyToTopic(topic, forum) -%}*/
/* 		    <a class="btn btn-danger" rel="nofollow"*/
/* 			 href="{{- path('ccdn_forum_user_topic_reply', {'forumName': forumName, 'topicId': topic.getId }) -}}">*/
/* 				<i class="glyphicon glyphicon-comment"></i>*/
/* 				{{- 'link.topic.reply' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 			</a>*/
/* 		{%- else -%}*/
/* 		    <a class="btn btn-danger disabled" rel="nofollow"*/
/* 			 href="{{- path('ccdn_forum_user_topic_reply', {'forumName': forumName, 'topicId': topic.getId }) -}}">*/
/* 				<i class="glyphicon glyphicon-lock"></i>*/
/* 				{{- 'link.topic.reply' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 			</a>*/
/* 		{%- endif -%}*/
/* */
/* */
/* 		{%- if canSubscribeToTopic(topic, forum, (subscription is defined ? subscription : null)) -%}*/
/* 			<a class="btn btn-info" href="{{- path('ccdn_forum_user_subscription_subscribe', {'forumName': forumName, 'topicId': topic.getId }) -}}">*/
/* 				<i class="glyphicon glyphicon-eye-open"></i>*/
/* 				{{- 'link.topic.subscribe' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 			</a>*/
/* 		{%- endif -%}*/
/* */
/* 		{%- if canUnsubscribeFromTopic(topic, forum, (subscription is defined ? subscription : null)) -%}*/
/* 			<a class="btn btn-info" href="{{- path('ccdn_forum_user_subscription_unsubscribe', {'forumName': forumName, 'topicId': topic.getId }) -}}">*/
/* 				<i class="glyphicon glyphicon-eye-close"></i>*/
/* 				{{- 'link.topic.unsubscribe' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 			</a>*/
/* 		{%- endif -%}*/
/* */
/* */
/* 		{%- if is_granted('ROLE_MODERATOR') -%}*/
/* 			<div class="btn-group">*/
/* 				<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">*/
/* 					<i class="glyphicon glyphicon-wrench"></i>*/
/* 					{{- 'link.admin.index' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 					<span class="caret"></span>*/
/* 				</a>*/
/* 				<ul class="dropdown-menu">*/
/* */
/* 					{%- if canStickyTopic(topic, forum) -%}*/
/* 						<li>*/
/* 							<a href="{{- path('ccdn_forum_moderator_topic_sticky', {'forumName': forumName, 'topicId': topic.getId }) -}}">*/
/* 								<i class="glyphicon glyphicon-bullhorn"></i>*/
/* 								{{- 'link.topic.sticky' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 							</a>*/
/* 						</li>*/
/* 					{%- endif -%}*/
/* */
/* 					{%- if canUnstickyTopic(topic, forum) -%}*/
/* 						<li>*/
/* 							<a href="{{- path('ccdn_forum_moderator_topic_unsticky', {'forumName': forumName, 'topicId': topic.getId }) -}}">*/
/* 								<i class="glyphicon glyphicon-bullhorn"></i>*/
/* 								{{- 'link.topic.unsticky' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 							</a>*/
/* 						</li>*/
/* 					{%- endif -%}*/
/* */
/* 					{%- if canCloseTopic(topic, forum) -%}*/
/* 						<li>*/
/* 							<a href="{{- path('ccdn_forum_moderator_topic_close', {'forumName': forumName, 'topicId': topic.getId }) -}}">*/
/* 								<i class="glyphicon glyphicon-lock"></i>*/
/* 								{{- 'link.topic.close' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 							</a>*/
/* 						</li>*/
/* 					{%- endif -%}*/
/* */
/* 					{%- if canReopenTopic(topic, forum) -%}*/
/* 						<li>*/
/* 							<a href="{{- path('ccdn_forum_moderator_topic_reopen', {'forumName': forumName, 'topicId': topic.getId }) -}}">*/
/* 								<i class="glyphicon glyphicon-lock"></i>*/
/* 								{{- 'link.topic.reopen' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 							</a>*/
/* 						</li>*/
/* 					{%- endif -%}*/
/* */
/* 					{%- if canRestoreTopic(topic, forum) -%}*/
/* 						<li>*/
/* 							<a href="{{- path('ccdn_forum_moderator_topic_restore', {'forumName': forumName, 'topicId': topic.getId }) -}}">*/
/* 								<i class="glyphicon glyphicon-trash"></i>*/
/* 								{{- 'link.topic.restore' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 							</a>*/
/* 						</li>*/
/* 					{%- endif -%}*/
/* */
/* 					{%- if canDeleteTopic(topic, forum) -%}*/
/* 						<li>*/
/* 							<a href="{{- path('ccdn_forum_moderator_topic_delete', {'forumName': forumName, 'topicId': topic.getId }) -}}">*/
/* 								<i class="glyphicon glyphicon-trash"></i>*/
/* 								{{- 'link.topic.delete' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 							</a>*/
/* 						</li>*/
/* 					{%- endif -%}*/
/* */
/* 					{%- if canTopicChangeBoard(topic, forum) -%}*/
/* 						<li>*/
/* 							<a href="{{- path('ccdn_forum_moderator_topic_change_board', {'forumName': forumName, 'topicId': topic.getId }) -}}">*/
/* 								<i class="glyphicon glyphicon-move"></i>*/
/* 								{{- 'link.topic.change_board' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 							</a>*/
/* 						</li>*/
/* 					{%- endif -%}*/
/* */
/* 				</ul>*/
/* 			</div>*/
/* */
/* 		{%- endif -%}*/
/* */
/* 	{%- endif -%}*/
/* */
/* {%- endspaceless -%}*/
/* */
