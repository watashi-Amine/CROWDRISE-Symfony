<?php

/* CCDNForumForumBundle:Admin/Board:list.html.twig */
class __TwigTemplate_fec630529a1d62b1db6f0641136bd076cd0aab85f79144d10ab2ddc607e03f99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig", "CCDNForumForumBundle:Admin/Board:list.html.twig", 1);
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board", array()), "admin", array()), "list", array()), "layout_template", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.admin.manage-boards.index", array(), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/admin_forum.html.twig", "CCDNForumForumBundle:Admin/Board:list.html.twig", 12)->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_body_content($context, array $blocks = array())
    {
        // line 17
        ob_start();
        // line 19
        echo "<section class=\"row btn-toolbar clearfix\">
\t\t\t<a class=\"btn btn-primary\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_create", array("forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
        echo "\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.board.create", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 22
        echo "</a>
\t\t</section>

\t\t<section class=\"col-md-12 row clearfix\">
\t\t\t<div class=\"col-md-4 row\">
\t\t\t\t<div class=\"col-md-6 row\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("filter.forums", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 31
        echo "</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t<a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list");
        echo "\"
\t\t\t\t\t\t\t class=\"list-group-item ellipsis";
        // line 34
        if (((null === (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter"))) || ((isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")) == ""))) {
            echo " active";
        }
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-exclamation-sign\"></i>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.unassigned", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 37
        echo "</a>";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) ? $context["forums"] : $this->getContext($context, "forums")));
        foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
            // line 39
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("forum_filter" => $this->getAttribute($context["forum"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "name", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t class=\"list-group-item ellipsis";
            // line 40
            if (((isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")) == $this->getAttribute($context["forum"], "id", array()))) {
                echo " active";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label pull-right\">";
            // line 42
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["forum"], "getCategories", array())), "html", null, true);
            // line 43
            echo "</span>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "name", array()), "html", null, true);
            // line 45
            echo "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 row\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("filter.categories", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 54
        echo "</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t<a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")))), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t class=\"list-group-item ellipsis";
        // line 57
        if (((null === (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter"))) || ((isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")) == ""))) {
            echo " active";
        }
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-exclamation-sign\"></i>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.unassigned", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 60
        echo "</a>";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 62
            echo "<a href=\"";
            // line 63
            if ($this->getAttribute($context["category"], "forum", array())) {
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("forum_filter" => $this->getAttribute($this->getAttribute($context["category"], "forum", array()), "id", array()), "category_filter" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            } else {
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("category_filter" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            }
            // line 68
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "\" class=\"list-group-item ellipsis";
            if (((isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")) == $this->getAttribute($context["category"], "id", array()))) {
                echo " active";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t<span class=\"label pull-right\">";
            // line 70
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["category"], "getBoards", array())), "html", null, true);
            // line 71
            echo "</span>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            // line 73
            echo "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-8 row\">
\t\t\t\t<table class=\"table table-bordered\" id=\"admin-boards-list\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.id-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.name-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boards"]) ? $context["boards"] : $this->getContext($context, "boards")));
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
        foreach ($context['_seq'] as $context["board_index"] => $context["board"]) {
            // line 92
            echo "<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 95
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["board"], "topics", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_edit", array("boardId" => $this->getAttribute($context["board"], "id", array()), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t id=\"update_board[";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "name", array()), "html", null, true);
            echo "]\">";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.edit", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 100
            echo "</a>";
            // line 102
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 103
                echo "<a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_delete", array("boardId" => $this->getAttribute($context["board"], "id", array()), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t id=\"delete_board[";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "name", array()), "html", null, true);
                echo "]\">";
                // line 105
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.delete", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 106
                echo "</a>";
            }
            // line 109
            if (( !(null === (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter"))) && ((isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")) != ""))) {
                // line 110
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["loop"], "length", array()) > 1)) {
                    // line 111
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
                    // line 112
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_reorder_up", array("boardId" => $this->getAttribute($context["board"], "id", array()), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t id=\"reorder_up_board[";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "name", array()), "html", null, true);
                    echo "]\">";
                    // line 114
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        // line 115
                        echo "<i class=\"glyphicon glyphicon-retweet\"></i>";
                    } else {
                        // line 117
                        echo "<i class=\"glyphicon glyphicon-chevron-up\"></i>";
                    }
                    // line 119
                    echo "</a>

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
                    // line 121
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_reorder_down", array("boardId" => $this->getAttribute($context["board"], "id", array()), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t id=\"reorder_down_board[";
                    // line 122
                    echo twig_escape_filter($this->env, $this->getAttribute($context["board"], "name", array()), "html", null, true);
                    echo "]\">";
                    // line 123
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 124
                        echo "<i class=\"glyphicon glyphicon-retweet\"></i>";
                    } else {
                        // line 126
                        echo "<i class=\"glyphicon glyphicon-chevron-down\"></i>";
                    }
                    // line 128
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>";
                }
            }
            // line 132
            echo "</td>
\t\t\t\t\t\t\t</tr>";
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
        unset($context['_seq'], $context['_iterated'], $context['board_index'], $context['board'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</section>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Admin/Board:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 135,  317 => 132,  312 => 128,  309 => 126,  306 => 124,  304 => 123,  301 => 122,  297 => 121,  293 => 119,  290 => 117,  287 => 115,  285 => 114,  282 => 113,  278 => 112,  275 => 111,  272 => 110,  270 => 109,  267 => 106,  265 => 105,  262 => 104,  257 => 103,  255 => 102,  253 => 100,  251 => 99,  248 => 98,  244 => 97,  239 => 95,  235 => 94,  231 => 93,  228 => 92,  211 => 91,  204 => 86,  200 => 85,  196 => 84,  185 => 75,  179 => 73,  177 => 72,  175 => 71,  173 => 70,  164 => 68,  161 => 66,  158 => 64,  156 => 63,  154 => 62,  150 => 61,  148 => 60,  146 => 59,  140 => 57,  136 => 56,  132 => 54,  130 => 53,  123 => 47,  117 => 45,  115 => 44,  113 => 43,  111 => 42,  105 => 40,  98 => 39,  94 => 38,  92 => 37,  90 => 36,  84 => 34,  80 => 33,  76 => 31,  74 => 30,  65 => 22,  63 => 21,  60 => 20,  57 => 19,  55 => 17,  52 => 16,  47 => 12,  45 => 11,  43 => 10,  40 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'CCDNForumForumBundle:Common:Layout/base.html.twig' %}*/
/* */
/* {% set LayoutTemplate = ccdn_forum_forum.board.admin.list.layout_template %}*/
/* */
/* {%- block title -%}*/
/* 	{{- 'title.admin.manage-boards.index' |trans({}, 'CCDNForumForumBundle') -}}*/
/* {%- endblock title -%}*/
/* */
/* {%- block sidebar -%}*/
/* 	{%- spaceless -%}*/
/* 	{{- parent() -}}*/
/*     {%- include 'CCDNForumForumBundle:Common:Layout/Sidebar/admin_forum.html.twig' -%}*/
/* 	{%- endspaceless -%}*/
/* {%- endblock sidebar -%}*/
/* */
/* {%- block body_content -%}*/
/* 	{%- spaceless -%}*/
/* */
/* 		<section class="row btn-toolbar clearfix">*/
/* 			<a class="btn btn-primary" href="{{- path('ccdn_forum_admin_board_create', {'forum_filter': forum_filter, 'category_filter': category_filter}) -}}">*/
/* 				{{- 'link.board.create' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 			</a>*/
/* 		</section>*/
/* */
/* 		<section class="col-md-12 row clearfix">*/
/* 			<div class="col-md-4 row">*/
/* 				<div class="col-md-6 row">*/
/* 					<div class="panel panel-default">*/
/* 						<div class="panel-heading">*/
/* 							{{- 'filter.forums' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 						</div>*/
/* 						<div class="list-group">*/
/* 							<a href="{{- path('ccdn_forum_admin_board_list') -}}"*/
/* 							 class="list-group-item ellipsis {%- if forum_filter is null or forum_filter == '' %} active {%- endif -%}">*/
/* 								<i class="glyphicon glyphicon-exclamation-sign"></i>*/
/* 								{{- 'link.unassigned' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 							</a>*/
/* 							{%- for forum in forums -%}*/
/* 								<a href="{{- path('ccdn_forum_admin_board_list', {'forum_filter': forum.id}) -}}" title="{{- forum.name -}}"*/
/* 								 class="list-group-item ellipsis {%- if forum_filter == forum.id %} active {%- endif -%}">*/
/* 									<span class="label pull-right">*/
/* 										{{- forum.getCategories | length -}}*/
/* 									</span>*/
/* 									{{- forum.name -}}*/
/* 								</a>*/
/* 							{%- endfor -%}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="col-md-6 row">*/
/* 					<div class="panel panel-default">*/
/* 						<div class="panel-heading">*/
/* 							{{- 'filter.categories' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 						</div>*/
/* 						<div class="list-group">*/
/* 							<a href="{{- path('ccdn_forum_admin_board_list', {'forum_filter': forum_filter}) -}}"*/
/* 							 class="list-group-item ellipsis {%- if category_filter is null or category_filter == '' %} active {%- endif -%}">*/
/* 								<i class="glyphicon glyphicon-exclamation-sign"></i>*/
/* 								{{- 'link.unassigned' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 							</a>*/
/* 							{%- for category in categories -%}*/
/* 								<a href="*/
/* 									{%- if category.forum -%}*/
/* 										{{- path('ccdn_forum_admin_board_list', {'forum_filter': category.forum.id, 'category_filter': category.id}) -}}*/
/* 									{%- else -%}*/
/* 										{{- path('ccdn_forum_admin_board_list', {'category_filter': category.id}) -}}*/
/* 									{%- endif -%}*/
/* 								 " title="{{- category.name -}}" class="list-group-item ellipsis {%- if category_filter == category.id %} active {%- endif -%}">*/
/* 									<span class="label pull-right">*/
/* 										{{- category.getBoards | length -}}*/
/* 									</span>*/
/* 									{{- category.name -}}*/
/* 								</a>*/
/* 							{%- endfor -%}*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="col-md-8 row">*/
/* 				<table class="table table-bordered" id="admin-boards-list">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th>{{- 'board.id-th' |trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 							<th>{{- 'board.name-th' |trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 							<th>{{- 'board.topic-count-th' |trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 							<th></th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 						{%- for board_index, board in boards -%}*/
/* 							<tr>*/
/* 								<td>{{- board.id -}}</td>*/
/* 								<td>{{- board.name -}}</td>*/
/* 								<td>{{- board.topics |length -}}</td>*/
/* 								<td>*/
/* 									<a class="btn btn-default" href="{{- path('ccdn_forum_admin_board_edit', {'boardId': board.id, 'forum_filter': forum_filter, 'category_filter': category_filter}) -}}"*/
/* 									 id="update_board[{{- board.name -}}]">*/
/* 										{{- 'link.edit' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 									</a>*/
/* */
/* 									{%- if is_granted('ROLE_SUPER_ADMIN') -%}*/
/* 										<a class="btn btn-danger" href="{{- path('ccdn_forum_admin_board_delete', {'boardId': board.id, 'forum_filter': forum_filter, 'category_filter': category_filter}) -}}"*/
/* 										 id="delete_board[{{- board.name -}}]">*/
/* 											{{- 'link.delete' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 										</a>*/
/* 									{%- endif -%}*/
/* */
/* 									{%- if category_filter is not null and category_filter != '' %}*/
/* 										{% if loop.length > 1 %}*/
/* 											<div class="btn-group">*/
/* 												<a class="btn btn-default" href="{{- path('ccdn_forum_admin_board_reorder_up', {'boardId': board.id, 'forum_filter': forum_filter, 'category_filter': category_filter}) -}}"*/
/* 												 id="reorder_up_board[{{- board.name -}}]">*/
/* 													{%- if loop.first -%}*/
/* 														<i class="glyphicon glyphicon-retweet"></i>*/
/* 													{%- else -%}*/
/* 														<i class="glyphicon glyphicon-chevron-up"></i>*/
/* 													{%- endif -%}*/
/* 												</a>*/
/* */
/* 												<a class="btn btn-default" href="{{- path('ccdn_forum_admin_board_reorder_down', {'boardId': board.id, 'forum_filter': forum_filter, 'category_filter': category_filter}) -}}"*/
/* 												 id="reorder_down_board[{{- board.name -}}]">*/
/* 													{%- if loop.last -%}*/
/* 														<i class="glyphicon glyphicon-retweet"></i>*/
/* 													{%- else -%}*/
/* 														<i class="glyphicon glyphicon-chevron-down"></i>*/
/* 													{%- endif -%}*/
/* 												</a>*/
/* 											</div>*/
/* 										{%- endif -%}*/
/* 									{%- endif -%}*/
/* 								</td>*/
/* 							</tr>*/
/* 						{%- endfor -%}*/
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* 		</section>*/
/* */
/* 	{%- endspaceless -%}*/
/* {%- endblock body_content -%}*/
/* */
