<?php

/* CCDNForumForumBundle:User/Board:show.html.twig */
class __TwigTemplate_c300ecd5bcd3deae2204d390fde04725db64a2c7d7143a1642637116a264cfec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig", "CCDNForumForumBundle:User/Board:show.html.twig", 1);
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board", array()), "user", array()), "show", array()), "layout_template", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.board.show", array("%board_name%" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name", array())), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/user_forum.html.twig", "CCDNForumForumBundle:User/Board:show.html.twig", 12)->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_body_content($context, array $blocks = array())
    {
        // line 17
        ob_start();
        // line 19
        echo "<section class=\"row btn-toolbar clearfix\">
            ";
        // line 20
        $context["is_topic_create_disabled"] = (($this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "isAuthorisedToCreateTopic", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array())), "method")) ? ("") : (" disabled"));
        // line 21
        echo "
            <a class=\"btn btn-danger";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["is_topic_create_disabled"]) ? $context["is_topic_create_disabled"] : $this->getContext($context, "is_topic_create_disabled")), "html", null, true);
        echo "\" rel=\"nofollow\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_topic_create", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getId", array()))), "html", null, true);
        echo "\">
\t\t\t\t<i class=\"glyphicon glyphicon-asterisk\"></i>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.topic.create", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 25
        echo "</a>

\t</section>

\t<header class=\"row clearfix\">
\t\t<div class=\"col-md-6\">
\t\t    <span class=\"lead\" title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name", array()), "html", null, true);
        echo "</span>
\t\t</div>
\t\t<div class=\"col-md-6 text-right\">
\t\t    <span class=\"label label-default\" title=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedTopicCount", array()), "html", null, true);
        echo "\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-count-label", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedTopicCount", array()), "html", null, true);
        // line 37
        echo "</span>
\t\t\t&nbsp;
\t\t    <span class=\"label label-default\" title=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedPostCount", array()), "html", null, true);
        echo "\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.post-count-label", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "cachedPostCount", array()), "html", null, true);
        // line 42
        echo "</span>
\t\t</div>
\t</header>";
        // line 46
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        // line 48
        echo "<section class=\"clearfix\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th class=\"center\" style=\"width: 18px;\"></th>
                    <th class=\"center\" style=\"width: 18px;\"></th>
                    <th class=\"left\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
                    <th class=\"center\" style=\"width: 80px;\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.reply-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
                    <th class=\"center\" style=\"width: 80px;\">";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.view-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
                    <th class=\"center\" style=\"width: 170px;\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.last-post-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
                </tr>
            </thead>
            <tbody>";
        // line 61
        if ( !twig_test_empty((isset($context["sticky_topics"]) ? $context["sticky_topics"] : $this->getContext($context, "sticky_topics")))) {
            // line 62
            echo "<tr>
\t\t\t\t\t\t<td colspan=\"6\" class=\"row-group-heading\">";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.announcements-th", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 65
            echo "</td>
\t\t\t\t\t</tr>";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sticky_topics"]) ? $context["sticky_topics"] : $this->getContext($context, "sticky_topics")));
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
            foreach ($context['_seq'] as $context["row"] => $context["topic"]) {
                // line 69
                if (( !$this->getAttribute($context["topic"], "isDeleted", array()) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
                    // line 70
                    $this->loadTemplate("CCDNForumForumBundle:User:Board/Partial/item_topic_list.html.twig", "CCDNForumForumBundle:User/Board:show.html.twig", 70)->display($context);
                }
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
            unset($context['_seq'], $context['_iterated'], $context['row'], $context['topic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "<tr>
\t\t\t\t\t\t<td colspan=\"6\" class=\"row-group-heading\">";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topics-th", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 77
            echo "</td>
\t\t\t\t\t</tr>";
        }
        // line 81
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
        foreach ($context['_seq'] as $context["row"] => $context["topic"]) {
            // line 82
            if (( !$this->getAttribute($context["topic"], "isDeleted", array()) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
                // line 83
                $this->loadTemplate("CCDNForumForumBundle:User:Board/Partial/item_topic_list.html.twig", "CCDNForumForumBundle:User/Board:show.html.twig", 83)->display($context);
            }
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
            // line 86
            echo "<tr>
\t\t                <td class=\"center\" colspan=\"6\">";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.no-topics", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 89
            echo "</td>
\t\t            </tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['row'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "</tbody>
        </table>
\t</section>";
        // line 96
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Board:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 96,  238 => 92,  231 => 89,  229 => 88,  226 => 86,  212 => 83,  210 => 82,  192 => 81,  188 => 77,  186 => 76,  183 => 74,  168 => 70,  166 => 69,  149 => 68,  146 => 65,  144 => 64,  141 => 62,  139 => 61,  133 => 57,  129 => 56,  125 => 55,  121 => 54,  113 => 48,  111 => 46,  107 => 42,  105 => 41,  103 => 40,  100 => 39,  96 => 37,  94 => 36,  92 => 35,  89 => 34,  81 => 31,  73 => 25,  71 => 24,  65 => 22,  62 => 21,  60 => 20,  57 => 19,  55 => 17,  52 => 16,  47 => 12,  45 => 11,  43 => 10,  40 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'CCDNForumForumBundle:Common:Layout/base.html.twig' %}*/
/* */
/* {% set LayoutTemplate = ccdn_forum_forum.board.user.show.layout_template %}*/
/* */
/* {%- block title -%}*/
/* 	{{- 'title.board.show' | trans({'%board_name%': board.name}, 'CCDNForumForumBundle') -}}*/
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
/* 	<section class="row btn-toolbar clearfix">*/
/*             {% set is_topic_create_disabled = board.isAuthorisedToCreateTopic(app.security) ? '': ' disabled' %}*/
/* */
/*             <a class="btn btn-danger{{ is_topic_create_disabled }}" rel="nofollow" href="{{- path('ccdn_forum_user_topic_create', {'forumName': forumName, 'boardId': board.getId }) -}}">*/
/* 				<i class="glyphicon glyphicon-asterisk"></i>*/
/* 				{{- 'link.topic.create' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 			</a>*/
/* */
/* 	</section>*/
/* */
/* 	<header class="row clearfix">*/
/* 		<div class="col-md-6">*/
/* 		    <span class="lead" title="{{- board.name -}}">{{- board.name -}}</span>*/
/* 		</div>*/
/* 		<div class="col-md-6 text-right">*/
/* 		    <span class="label label-default" title="{{- board.cachedTopicCount -}}">*/
/* 				{{- 'board.topic-count-label' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 				{{- board.cachedTopicCount -}}*/
/* 			</span>*/
/* 			&nbsp;*/
/* 		    <span class="label label-default" title="{{- board.cachedPostCount -}}">*/
/* 				{{- 'board.post-count-label' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 				{{- board.cachedPostCount -}}*/
/* 			</span>*/
/* 		</div>*/
/* 	</header>*/
/* */
/* 	{{- knp_pagination_render(pager) -}}*/
/* */
/* 	<section class="clearfix">*/
/*         <table class="table table-striped table-hover">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th class="center" style="width: 18px;"></th>*/
/*                     <th class="center" style="width: 18px;"></th>*/
/*                     <th class="left">{{- 'board.topic-th' | trans({}, 'CCDNForumForumBundle') -}}</th>*/
/*                     <th class="center" style="width: 80px;">{{- 'board.reply-count-th' | trans({}, 'CCDNForumForumBundle') -}}</th>*/
/*                     <th class="center" style="width: 80px;">{{- 'board.view-count-th' | trans({}, 'CCDNForumForumBundle') -}}</th>*/
/*                     <th class="center" style="width: 170px;">{{- 'board.last-post-th' | trans({}, 'CCDNForumForumBundle') -}}</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* 			    {%- if sticky_topics is not empty -%}*/
/* 					<tr>*/
/* 						<td colspan="6" class="row-group-heading">*/
/* 							{{- 'board.announcements-th' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 						</td>*/
/* 					</tr>*/
/* */
/* 		            {%- for row, topic in sticky_topics -%}*/
/* 		                {%- if not topic.isDeleted or is_granted('ROLE_MODERATOR') -%}*/
/* 		                    {%- include 'CCDNForumForumBundle:User:Board/Partial/item_topic_list.html.twig' -%}*/
/* 		                {%- endif -%}*/
/* 		            {%- endfor -%}*/
/* */
/* 					<tr>*/
/* 						<td colspan="6" class="row-group-heading">*/
/* 							{{- 'board.topics-th' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 						</td>*/
/* 					</tr>*/
/* 			    {%- endif -%}*/
/* */
/* 		        {%- for row, topic in pager.getItems() -%}*/
/* 		            {%- if not topic.isDeleted or is_granted('ROLE_MODERATOR') -%}*/
/* 		                {%- include 'CCDNForumForumBundle:User:Board/Partial/item_topic_list.html.twig' -%}*/
/* 		            {%- endif -%}*/
/* 		        {%- else -%}*/
/* 		            <tr>*/
/* 		                <td class="center" colspan="6">*/
/* 		                    {{- 'board.no-topics' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 		                </td>*/
/* 		            </tr>*/
/* 		        {%- endfor -%}*/
/*             </tbody>*/
/*         </table>*/
/* 	</section>*/
/* */
/* 	{{- knp_pagination_render(pager) -}}*/
/* */
/*     {%- endspaceless -%}*/
/* {%- endblock body_content -%}*/
/* */
