<?php

/* CCDNForumForumBundle:Admin/Board:edit.html.twig */
class __TwigTemplate_8b834001505436323b4f9ec719a7a3a1c401d010f209e97f6bd41ed923766fdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CCDNForumForumBundle:Common:Layout/base.html.twig", "CCDNForumForumBundle:Admin/Board:edit.html.twig", 1);
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
        $context["LayoutTemplate"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board", array()), "admin", array()), "edit", array()), "layout_template", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.admin.manage-boards.edit", array("%board_name%" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name", array())), "CCDNForumForumBundle"), "html", null, true);
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayParentBlock("sidebar", $context, $blocks);
        // line 12
        $this->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/admin_forum.html.twig", "CCDNForumForumBundle:Admin/Board:edit.html.twig", 12)->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_body_content($context, array $blocks = array())
    {
        // line 17
        ob_start();
        // line 19
        echo "<section class=\"clearfix\">";
        // line 20
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "board", array()), "admin", array()), "edit", array()), "form_theme", array())));
        // line 21
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_edit_process", array("boardId" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id", array()), "forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
        echo "\"
\t\t method=\"post\" ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" novalidate>
\t        <fieldset>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t\t\t\t\t<h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.admin.manage-boards.edit", array("%board_name%" => $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "name", array())), "CCDNForumForumBundle"), "html", null, true);
        // line 29
        echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 37
        echo "<div class=\"form-group\">
\t\t\t\t\t<div class=\"col-lg-offset-2 col-lg-10\">
\t\t                <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.save-changes", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 41
        echo "\" name=\"submit[post]\" id=\"submit[post]\">

\t\t                <a class=\"btn btn-default\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_admin_board_list", array("forum_filter" => (isset($context["forum_filter"]) ? $context["forum_filter"] : $this->getContext($context, "forum_filter")), "category_filter" => (isset($context["category_filter"]) ? $context["category_filter"] : $this->getContext($context, "category_filter")))), "html", null, true);
        echo "\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.button.cancel", array(), "CCDNForumForumBundle"), "html", null, true);
        // line 45
        echo "</a>
\t\t\t\t\t</div>
\t            </div>

\t        </fieldset>
\t    </form>
\t</section>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Admin/Board:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 45,  97 => 44,  94 => 43,  90 => 41,  88 => 40,  84 => 37,  82 => 35,  80 => 33,  76 => 29,  74 => 28,  66 => 22,  61 => 21,  59 => 20,  57 => 19,  55 => 17,  52 => 16,  47 => 12,  45 => 11,  43 => 10,  40 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'CCDNForumForumBundle:Common:Layout/base.html.twig' %}*/
/* */
/* {% set LayoutTemplate = ccdn_forum_forum.board.admin.edit.layout_template %}*/
/* */
/* {%- block title -%}*/
/* 	{{- 'title.admin.manage-boards.edit' |trans({'%board_name%': board.name}, 'CCDNForumForumBundle') -}}*/
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
/*     {%- spaceless -%}*/
/* */
/* 	<section class="clearfix">*/
/* 	    {%- form_theme form ccdn_forum_forum.board.admin.edit.form_theme -%}*/
/* 	    <form action="{{- path('ccdn_forum_admin_board_edit_process', {'boardId': board.id, 'forum_filter': forum_filter, 'category_filter': category_filter}) -}}"*/
/* 		 method="post" {{ form_enctype(form) }} class="form-horizontal" novalidate>*/
/* 	        <fieldset>*/
/* */
/* 				<div class="form-group">*/
/* 					<div class="col-lg-offset-2 col-lg-10">*/
/* 						<h4>*/
/* 							{{- 'title.admin.manage-boards.edit' |trans({'%board_name%': board.name}, 'CCDNForumForumBundle') -}}*/
/* 						</h4>*/
/* 					</div>*/
/* 				</div>*/
/* */
/* 				{{- form_errors(form) -}}*/
/* */
/* 				{{- form_rest(form) -}}*/
/* */
/* 				<div class="form-group">*/
/* 					<div class="col-lg-offset-2 col-lg-10">*/
/* 		                <input type="submit" class="btn btn-primary" value="*/
/* 							{{- 'form.button.save-changes' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 						" name="submit[post]" id="submit[post]">*/
/* */
/* 		                <a class="btn btn-default" href="{{- path('ccdn_forum_admin_board_list', {'forum_filter': forum_filter, 'category_filter': category_filter}) -}}">*/
/* 							{{- 'form.button.cancel' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 						</a>*/
/* 					</div>*/
/* 	            </div>*/
/* */
/* 	        </fieldset>*/
/* 	    </form>*/
/* 	</section>*/
/* */
/*     {%- endspaceless -%}*/
/* {%- endblock body_content -%}*/
/* */
