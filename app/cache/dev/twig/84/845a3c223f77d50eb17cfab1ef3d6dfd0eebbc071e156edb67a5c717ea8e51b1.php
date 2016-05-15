<?php

/* CCDNForumForumBundle:Admin/Category:list.html.twig */
class __TwigTemplate_e2fcf6f62e8d68ee1be112c54617fd9ee37513429c355d6b189d07cf8f1fe8f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig", "CCDNForumForumBundle:Admin/Category:list.html.twig", 1);
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "category", array()), "admin", array()), "list", array()), "layout_template", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.admin.manage-categories.index", array(), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/admin_forum.html.twig", "CCDNForumForumBundle:Admin/Category:list.html.twig", 12)->display($context);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_create", array("forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")))), "html", null, true);
        echo "\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.category.create", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 22
        echo "</a>
\t\t</section>

\t\t<section class=\"col-md-12 row clearfix\">
\t\t\t<div class=\"col-md-3 row\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading clearfix\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("filter.forums", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 30
        echo "</div>
\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t<a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_list");
        echo "\"
\t\t\t\t\t\t class=\"list-group-item ellipsis";
        // line 33
        if (((null === (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter"))) || ((isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")) == ""))) {
            echo " active";
        }
        echo "\">
\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-exclamation-sign\"></i>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.unassigned", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 36
        echo "</a>";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) ? $context["forums"] : $this->getContext($context, "forums")));
        foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
            // line 38
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_list", array("forum_filter" => $this->getAttribute($context["forum"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "name", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t class=\"list-group-item ellipsis";
            // line 39
            if (((isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")) == $this->getAttribute($context["forum"], "id", array()))) {
                echo " active";
            }
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"label pull-right\">";
            // line 41
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["forum"], "getCategories", array())), "html", null, true);
            // line 42
            echo "</span>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "name", array()), "html", null, true);
            // line 44
            echo "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-md-9\">
\t\t\t\t<table class=\"table table-bordered\" id=\"admin-categories-list\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.id-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.name-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.board-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
        foreach ($context['_seq'] as $context["category_index"] => $context["category"]) {
            // line 62
            echo "<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 65
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["category"], "boards", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_edit", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")))), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t id=\"update_category[";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "]\">";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.edit", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 70
            echo "</a>";
            // line 72
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 73
                echo "<a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_delete", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")))), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t id=\"delete_category[";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "]\">";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.delete", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 76
                echo "</a>";
            }
            // line 79
            if (( !(null === (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter"))) && ((isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")) != ""))) {
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["loop"], "length", array()) > 1)) {
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_reorder_up", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")))), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t id=\"reorder_up_category[";
                    // line 83
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "]\">";
                    // line 84
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        // line 85
                        echo "<i class=\"glyphicon glyphicon-retweet\"></i>";
                    } else {
                        // line 87
                        echo "<i class=\"glyphicon glyphicon-chevron-up\"></i>";
                    }
                    // line 89
                    echo "</a>

\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_category_reorder_down", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")))), "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t id=\"reorder_down_category[";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "]\">";
                    // line 93
                    if ($this->getAttribute($context["loop"], "last", array())) {
                        // line 94
                        echo "<i class=\"glyphicon glyphicon-retweet\"></i>";
                    } else {
                        // line 96
                        echo "<i class=\"glyphicon glyphicon-chevron-down\"></i>";
                    }
                    // line 98
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>";
                }
            }
            // line 102
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
        unset($context['_seq'], $context['_iterated'], $context['category_index'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</section>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Admin/Category:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 105,  253 => 102,  248 => 98,  245 => 96,  242 => 94,  240 => 93,  237 => 92,  233 => 91,  229 => 89,  226 => 87,  223 => 85,  221 => 84,  218 => 83,  214 => 82,  211 => 81,  208 => 80,  206 => 79,  203 => 76,  201 => 75,  198 => 74,  193 => 73,  191 => 72,  189 => 70,  187 => 69,  184 => 68,  180 => 67,  175 => 65,  171 => 64,  167 => 63,  164 => 62,  147 => 61,  140 => 56,  136 => 55,  132 => 54,  122 => 46,  116 => 44,  114 => 43,  112 => 42,  110 => 41,  104 => 39,  97 => 38,  93 => 37,  91 => 36,  89 => 35,  83 => 33,  79 => 32,  75 => 30,  73 => 29,  65 => 22,  63 => 21,  60 => 20,  57 => 19,  55 => 17,  52 => 16,  47 => 12,  45 => 11,  43 => 10,  40 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'CCDNForumForumBundle:Common:Layout/base.html.twig' %}*/
/* */
/* {% set LayoutTemplate = ccdn_forum_forum.category.admin.list.layout_template %}*/
/* */
/* {%- block title -%}*/
/* 	{{- 'title.admin.manage-categories.index' |trans({}, 'CCDNForumForumBundle') -}}*/
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
/* 			<a class="btn btn-primary" href="{{- path('ccdn_forum_admin_category_create', {'forum_filter': forum_filter}) -}}">*/
/* 				{{- 'link.category.create' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 			</a>*/
/* 		</section>*/
/* */
/* 		<section class="col-md-12 row clearfix">*/
/* 			<div class="col-md-3 row">*/
/* 				<div class="panel panel-default">*/
/* 					<div class="panel-heading clearfix">*/
/* 						{{- 'filter.forums' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 					</div>*/
/* 					<div class="list-group">*/
/* 						<a href="{{- path('ccdn_forum_admin_category_list') -}}"*/
/* 						 class="list-group-item ellipsis {%- if forum_filter is null or forum_filter == '' %} active {%- endif -%}">*/
/* 							<i class="glyphicon glyphicon-exclamation-sign"></i>*/
/* 							{{- 'link.unassigned' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 						</a>*/
/* 						{%- for forum in forums -%}*/
/* 							<a href="{{- path('ccdn_forum_admin_category_list', {'forum_filter': forum.id}) -}}" title="{{- forum.name -}}"*/
/* 							 class="list-group-item ellipsis {%- if forum_filter == forum.id %} active {%- endif -%}">*/
/* 								<span class="label pull-right">*/
/* 									{{- forum.getCategories | length -}}*/
/* 								</span>*/
/* 								{{- forum.name -}}*/
/* 							</a>*/
/* 						{%- endfor -%}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="col-md-9">*/
/* 				<table class="table table-bordered" id="admin-categories-list">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th>{{- 'category.id-th' |trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 							<th>{{- 'category.name-th' |trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 							<th>{{- 'category.board-count-th' |trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 							<th></th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 						{%- for category_index, category in categories -%}*/
/* 							<tr>*/
/* 								<td>{{- category.id -}}</td>*/
/* 								<td>{{- category.name -}}</td>*/
/* 								<td>{{- category.boards |length -}}</td>*/
/* 								<td>*/
/* 									<a class="btn btn-default" href="{{- path('ccdn_forum_admin_category_edit', {'categoryId': category.id, 'forum_filter': forum_filter}) -}}"*/
/* 									 id="update_category[{{- category.name -}}]">*/
/* 										{{- 'link.edit' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 									</a>*/
/* */
/* 									{%- if is_granted('ROLE_SUPER_ADMIN') -%}*/
/* 										<a class="btn btn-danger" href="{{- path('ccdn_forum_admin_category_delete', {'categoryId': category.id, 'forum_filter': forum_filter}) -}}"*/
/* 										 id="delete_category[{{- category.name -}}]">*/
/* 											{{- 'link.delete' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 										</a>*/
/* 									{%- endif -%}*/
/* */
/* 									{%- if forum_filter is not null and forum_filter != '' %}*/
/* 										{% if loop.length > 1 %}*/
/* 											<div class="btn-group">*/
/* 												<a class="btn btn-default" href="{{- path('ccdn_forum_admin_category_reorder_up', {'categoryId': category.id, 'forum_filter': forum_filter}) -}}"*/
/* 												 id="reorder_up_category[{{- category.name -}}]">*/
/* 													{%- if loop.first -%}*/
/* 														<i class="glyphicon glyphicon-retweet"></i>*/
/* 													{%- else -%}*/
/* 														<i class="glyphicon glyphicon-chevron-up"></i>*/
/* 													{%- endif -%}*/
/* 												</a>*/
/* */
/* 												<a class="btn btn-default" href="{{- path('ccdn_forum_admin_category_reorder_down', {'categoryId': category.id, 'forum_filter': forum_filter}) -}}"*/
/* 												 id="reorder_down_category[{{- category.name -}}]">*/
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
