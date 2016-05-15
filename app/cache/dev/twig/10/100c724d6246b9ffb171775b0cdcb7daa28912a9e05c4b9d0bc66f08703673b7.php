<?php

/* CCDNForumForumBundle:User/Subscription:show.html.twig */
class __TwigTemplate_cc90d49d70b73079ef13c40f7118caf686cc5982936c7697027196da8d1cf3c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig", "CCDNForumForumBundle:User/Subscription:show.html.twig", 1);
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "subscription", array()), "list", array()), "layout_template", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.subscription.index", array(), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_subscriptions.html.twig", "CCDNForumForumBundle:User/Subscription:show.html.twig", 12)->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 47
    public function block_body_content($context, array $blocks = array())
    {
        // line 48
        ob_start();
        // line 50
        echo "<section class=\"row clearfix\">
\t\t<div class=\"col-md-12\">
\t\t\t<ul class=\"nav nav-tabs\">";
        // line 53
        $context["tabs"] = $this;
        // line 54
        if ( !(null === (isset($context["forum"]) ? $context["forum"] : $this->getContext($context, "forum")))) {
            // line 55
            echo $context["tabs"]->getsubscription_tab($this->env->getExtension('translator')->trans("subscription.all", array(), "CCDNForumForumBundle"), (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "all", (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_read", array(), "array"), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_unread", array(), "array"), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_total", array(), "array"));
            // line 56
            echo $context["tabs"]->getsubscription_tab($this->env->getExtension('translator')->trans("subscription.unread", array(), "CCDNForumForumBundle"), (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "unread", (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), null, $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_unread", array(), "array"), null);
            // line 57
            echo $context["tabs"]->getsubscription_tab($this->env->getExtension('translator')->trans("subscription.read", array(), "CCDNForumForumBundle"), (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "read", (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_read", array(), "array"), null, null);
        } else {
            // line 59
            echo $context["tabs"]->getsubscription_tab($this->env->getExtension('translator')->trans("subscription.all", array(), "CCDNForumForumBundle"), "~", "all", (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_read", array(), "array"), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_unread", array(), "array"), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_total", array(), "array"));
            // line 60
            echo $context["tabs"]->getsubscription_tab($this->env->getExtension('translator')->trans("subscription.unread", array(), "CCDNForumForumBundle"), "~", "unread", (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), null, $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_unread", array(), "array"), null);
            // line 61
            echo $context["tabs"]->getsubscription_tab($this->env->getExtension('translator')->trans("subscription.read", array(), "CCDNForumForumBundle"), "~", "read", (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), $this->getAttribute((isset($context["total_subscribed_forums"]) ? $context["total_subscribed_forums"] : $this->getContext($context, "total_subscribed_forums")), "count_read", array(), "array"), null, null);
        }
        // line 63
        echo "</ul>
\t\t</div>
\t</section>";
        // line 67
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        // line 69
        echo "<section class=\"clearfix\">
\t\t<table class=\"table table-striped table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"center\" style=\"width:18px;\"></th>
\t\t\t\t\t<th class=\"center\" style=\"width:18px;\"></th>
\t\t\t\t\t<th class=\"left\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"center\" style=\"width: 100px;\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.reply-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"center\" style=\"width: 100px;\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.view-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"center\" style=\"width: 170px;\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.last-post-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getItems", array(), "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["row"] => $context["subscription"]) {
            // line 83
            $context["topic"] = $this->getAttribute($context["subscription"], "getTopic", array());
            // line 85
            $this->loadTemplate("CCDNForumForumBundle:User:Subscription/Partial/item_topic_list.html.twig", "CCDNForumForumBundle:User/Subscription:show.html.twig", 85)->display($context);
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 87
            echo "<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"6\">
\t\t\t\t\t\t\t<span class=\"lead\">";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("subscription.no-topics", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 91
            echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['row'], $context['subscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "</tbody>
\t\t</table>
\t</section>";
        // line 99
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function getsubscription_tab($__label__ = null, $__forum_name__ = null, $__filter_key__ = null, $__filter_value__ = null, $__count_read__ = null, $__count_unread__ = null, $__count_total__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "forum_name" => $__forum_name__,
            "filter_key" => $__filter_key__,
            "filter_value" => $__filter_value__,
            "count_read" => $__count_read__,
            "count_unread" => $__count_unread__,
            "count_total" => $__count_total__,
            "varargs" => func_num_args() > 7 ? array_slice(func_get_args(), 7) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            if (((isset($context["filter_key"]) ? $context["filter_key"] : $this->getContext($context, "filter_key")) == (isset($context["filter_value"]) ? $context["filter_value"] : $this->getContext($context, "filter_value")))) {
                // line 18
                echo "<li class=\"active\">";
            } else {
                // line 20
                echo "<li>";
            }
            // line 22
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_subscription_index", array("forumName" => (isset($context["forum_name"]) ? $context["forum_name"] : $this->getContext($context, "forum_name")), "filter" => (isset($context["filter_key"]) ? $context["filter_key"] : $this->getContext($context, "filter_key")))), "html", null, true);
            echo "\">";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            // line 25
            echo "&nbsp;

\t\t\t<span class=\"badge\">";
            // line 28
            if (( !(null === (isset($context["count_unread"]) ? $context["count_unread"] : $this->getContext($context, "count_unread"))) &&  !(null === (isset($context["count_total"]) ? $context["count_total"] : $this->getContext($context, "count_total"))))) {
                // line 29
                echo twig_escape_filter($this->env, (isset($context["count_unread"]) ? $context["count_unread"] : $this->getContext($context, "count_unread")), "html", null, true);
                // line 30
                echo "&nbsp;/&nbsp;";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["count_total"]) ? $context["count_total"] : $this->getContext($context, "count_total")), "html", null, true);
            } else {
                // line 33
                if ( !(null === (isset($context["count_unread"]) ? $context["count_unread"] : $this->getContext($context, "count_unread")))) {
                    // line 34
                    echo twig_escape_filter($this->env, (isset($context["count_unread"]) ? $context["count_unread"] : $this->getContext($context, "count_unread")), "html", null, true);
                }
                // line 37
                if ( !(null === (isset($context["count_read"]) ? $context["count_read"] : $this->getContext($context, "count_read")))) {
                    // line 38
                    echo twig_escape_filter($this->env, (isset($context["count_read"]) ? $context["count_read"] : $this->getContext($context, "count_read")), "html", null, true);
                }
            }
            // line 41
            echo "</span>
\t\t</a>
\t</li>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Subscription:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 41,  219 => 38,  217 => 37,  214 => 34,  212 => 33,  209 => 31,  207 => 30,  205 => 29,  203 => 28,  199 => 25,  197 => 23,  193 => 22,  190 => 20,  187 => 18,  185 => 17,  167 => 16,  162 => 99,  158 => 95,  150 => 91,  148 => 90,  144 => 87,  131 => 85,  129 => 83,  111 => 82,  105 => 78,  101 => 77,  97 => 76,  93 => 75,  85 => 69,  83 => 67,  79 => 63,  76 => 61,  74 => 60,  72 => 59,  69 => 57,  67 => 56,  65 => 55,  63 => 54,  61 => 53,  57 => 50,  55 => 48,  52 => 47,  47 => 12,  45 => 11,  43 => 10,  40 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'CCDNForumForumBundle:Common:Layout/base.html.twig' %}*/
/* */
/* {% set LayoutTemplate = ccdn_forum_forum.subscription.list.layout_template %}*/
/* */
/* {%- block title -%}*/
/* 	{{- 'title.subscription.index' | trans({}, 'CCDNForumForumBundle') -}}*/
/* {%- endblock title -%}*/
/* */
/* {%- block sidebar -%}*/
/* 	{%- spaceless -%}*/
/* 	{{- parent() -}}*/
/*     {%- include 'CCDNForumForumBundle:Common:Layout/Sidebar/user_subscriptions.html.twig' -%}*/
/* 	{%- endspaceless -%}*/
/* {%- endblock sidebar -%}*/
/* */
/* {%- macro subscription_tab(label, forum_name, filter_key, filter_value, count_read, count_unread, count_total) -%}*/
/* 	{% if filter_key == filter_value -%}*/
/* 		<li class="active">*/
/* 	{%- else -%}*/
/* 		<li>*/
/* 	{%- endif -%}*/
/* 		<a href="{{- path('ccdn_forum_user_subscription_index', {'forumName': forum_name, 'filter': filter_key}) -}}">*/
/* 			{{- label -}}*/
/* */
/* 			&nbsp;*/
/* */
/* 			<span class="badge">*/
/* 				{%- if count_unread is not null and count_total is not null -%}*/
/* 					{{- count_unread -}}*/
/* 					&nbsp;/&nbsp;*/
/* 					{{- count_total -}}*/
/* 				{%- else -%}*/
/* 					{%- if count_unread is not null -%}*/
/* 						{{- count_unread -}}*/
/* 					{%- endif -%}*/
/* */
/* 					{%- if count_read is not null -%}*/
/* 						{{- count_read -}}*/
/* 					{%- endif -%}*/
/* 				{%- endif -%}*/
/* 			</span>*/
/* 		</a>*/
/* 	</li>*/
/* {%- endmacro -%}*/
/* */
/* */
/* {%- block body_content -%}*/
/* 	{%- spaceless -%}*/
/* */
/* 	<section class="row clearfix">*/
/* 		<div class="col-md-12">*/
/* 			<ul class="nav nav-tabs">*/
/* 				{%- import _self as tabs -%}*/
/* 				{%- if forum is not null -%}*/
/* 					{{- tabs.subscription_tab('subscription.all'|trans({}, 'CCDNForumForumBundle'), forumName, 'all', filter, total_subscribed_forums['count_read'], total_subscribed_forums['count_unread'], total_subscribed_forums['count_total']) -}}*/
/* 					{{- tabs.subscription_tab('subscription.unread'|trans({}, 'CCDNForumForumBundle'), forumName, 'unread', filter, null, total_subscribed_forums['count_unread'], null) -}}*/
/* 					{{- tabs.subscription_tab('subscription.read'|trans({}, 'CCDNForumForumBundle'), forumName, 'read', filter, total_subscribed_forums['count_read'], null, null) -}}*/
/* 				{%- else -%}*/
/* 					{{- tabs.subscription_tab('subscription.all'|trans({}, 'CCDNForumForumBundle'), '~', 'all', filter, total_subscribed_forums['count_read'], total_subscribed_forums['count_unread'], total_subscribed_forums['count_total']) -}}*/
/* 					{{- tabs.subscription_tab('subscription.unread'|trans({}, 'CCDNForumForumBundle'), '~', 'unread', filter, null, total_subscribed_forums['count_unread'], null) -}}*/
/* 					{{- tabs.subscription_tab('subscription.read'|trans({}, 'CCDNForumForumBundle'), '~', 'read', filter, total_subscribed_forums['count_read'], null, null) -}}*/
/* 				{%- endif -%}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</section>*/
/* */
/* 	{{- knp_pagination_render(pager) -}}*/
/* */
/* 	<section class="clearfix">*/
/* 		<table class="table table-striped table-hover">*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<th class="center" style="width:18px;"></th>*/
/* 					<th class="center" style="width:18px;"></th>*/
/* 					<th class="left">{{- 'board.topic-th' | trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 					<th class="center" style="width: 100px;">{{- 'board.reply-count-th' | trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 					<th class="center" style="width: 100px;">{{- 'board.view-count-th' | trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 					<th class="center" style="width: 170px;">{{- 'board.last-post-th' | trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 				{%- for row, subscription in pager.getItems() -%}*/
/* 					{%- set topic = subscription.getTopic -%}*/
/* */
/* 					{%- include 'CCDNForumForumBundle:User:Subscription/Partial/item_topic_list.html.twig' -%}*/
/* 				{%- else -%}*/
/* 					<tr>*/
/* 						<td class="text-center" colspan="6">*/
/* 							<span class="lead">*/
/* 								{{- 'subscription.no-topics' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 							</span>*/
/* 						</td>*/
/* 					</tr>*/
/* 				{%- endfor -%}*/
/* 			</tbody>*/
/* 		</table>*/
/* 	</section>*/
/* */
/* 	{{- knp_pagination_render(pager) -}}*/
/* */
/* 	{%- endspaceless -%}*/
/* {%- endblock body_content -%}*/
/* */
