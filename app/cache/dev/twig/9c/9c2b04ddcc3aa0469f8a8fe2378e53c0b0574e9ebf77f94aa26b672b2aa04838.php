<?php

/* CCDNForumForumBundle:Admin/Forum:list.html.twig */
class __TwigTemplate_543b2b53d6db5e0f37f3f85243df233a128e1355f0456a16abfc3912ad55377a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig", "CCDNForumForumBundle:Admin/Forum:list.html.twig", 1);
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "forum", array()), "admin", array()), "list", array()), "layout_template", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.admin.manage-forums.index", array(), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/admin_forum.html.twig", "CCDNForumForumBundle:Admin/Forum:list.html.twig", 12)->display($context);
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
        echo $this->env->getExtension('routing')->getPath("ccdn_forum_admin_forum_create");
        echo "\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.forum.create", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 22
        echo "</a>
\t\t</section>

\t\t<section class=\"clearfix\">
\t\t\t<table class=\"table table-bordered\" id=\"admin-forums-list\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forum.id-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forum.name-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forum.category-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t<th></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) ? $context["forums"] : $this->getContext($context, "forums")));
        foreach ($context['_seq'] as $context["forum_index"] => $context["forum"]) {
            // line 37
            echo "<tr>
\t\t\t\t\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "id", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["forum"], "categories", array())), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a class=\"btn btn-default\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_forum_edit", array("forumId" => $this->getAttribute($context["forum"], "id", array()))), "html", null, true);
            echo "\" id=\"update_forum[";
            echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "name", array()), "html", null, true);
            echo "]\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.edit", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 44
            echo "</a>";
            // line 46
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 47
                echo "<a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_forum_delete", array("forumId" => $this->getAttribute($context["forum"], "id", array()))), "html", null, true);
                echo "\" id=\"delete_forum[";
                echo twig_escape_filter($this->env, $this->getAttribute($context["forum"], "name", array()), "html", null, true);
                echo "]\">";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.delete", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 49
                echo "</a>";
            }
            // line 51
            echo "</td>
\t\t\t\t\t\t</tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['forum_index'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "</tbody>
\t\t\t</table>
\t\t</section>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Admin/Forum:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  131 => 51,  128 => 49,  126 => 48,  120 => 47,  118 => 46,  116 => 44,  114 => 43,  109 => 42,  104 => 40,  100 => 39,  96 => 38,  93 => 37,  89 => 36,  82 => 31,  78 => 30,  74 => 29,  65 => 22,  63 => 21,  60 => 20,  57 => 19,  55 => 17,  52 => 16,  47 => 12,  45 => 11,  43 => 10,  40 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'CCDNForumForumBundle:Common:Layout/base.html.twig' %}*/
/* */
/* {% set LayoutTemplate = ccdn_forum_forum.forum.admin.list.layout_template %}*/
/* */
/* {%- block title -%}*/
/* 	{{- 'title.admin.manage-forums.index' |trans({}, 'CCDNForumForumBundle') -}}*/
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
/* 			<a class="btn btn-primary" href="{{- path('ccdn_forum_admin_forum_create') -}}">*/
/* 				{{- 'link.forum.create' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 			</a>*/
/* 		</section>*/
/* */
/* 		<section class="clearfix">*/
/* 			<table class="table table-bordered" id="admin-forums-list">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>{{- 'forum.id-th' |trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 						<th>{{- 'forum.name-th' |trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 						<th>{{- 'forum.category-count-th' |trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 						<th></th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 					{%- for forum_index, forum in forums -%}*/
/* 						<tr>*/
/* 							<td>{{- forum.id -}}</td>*/
/* 							<td>{{- forum.name -}}</td>*/
/* 							<td>{{- forum.categories |length -}}</td>*/
/* 							<td>*/
/* 								<a class="btn btn-default" href="{{- path('ccdn_forum_admin_forum_edit', {'forumId': forum.id}) -}}" id="update_forum[{{- forum.name -}}]">*/
/* 									{{- 'link.edit' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 								</a>*/
/* */
/* 								{%- if is_granted('ROLE_SUPER_ADMIN') -%}*/
/* 									<a class="btn btn-danger" href="{{- path('ccdn_forum_admin_forum_delete', {'forumId': forum.id}) -}}" id="delete_forum[{{- forum.name -}}]">*/
/* 										{{- 'link.delete' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 									</a>*/
/* 								{%- endif -%}*/
/* 							</td>*/
/* 						</tr>*/
/* 					{%- endfor -%}*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</section>*/
/* */
/* 	{%- endspaceless -%}*/
/* {%- endblock body_content -%}*/
/* */
