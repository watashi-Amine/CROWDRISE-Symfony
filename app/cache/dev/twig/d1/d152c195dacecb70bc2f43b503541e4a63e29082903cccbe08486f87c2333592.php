<?php

/* CCDNForumForumBundle:Common/Layout/Sidebar/Partial:user_boards.html.twig */
class __TwigTemplate_082adc8d65b505c2cf1a33689a1a7426aa49b44f4a0ea23a503707add333cf56 extends Twig_Template
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
        $context["sidebar_categories"] = $this->env->getExtension('boardList')->boardList((isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")));
        // line 5
        if (twig_length_filter($this->env, (isset($context["sidebar_categories"]) ? $context["sidebar_categories"] : $this->getContext($context, "sidebar_categories")))) {
            // line 6
            echo "<li>
\t\t\t<ul class=\"nav nav-pills nav-stacked\">";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sidebar_categories"]) ? $context["sidebar_categories"] : $this->getContext($context, "sidebar_categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["sidebar_category"]) {
                // line 9
                if (twig_length_filter($this->env, $this->getAttribute($context["sidebar_category"], "boards", array()))) {
                    // line 10
                    if ((array_key_exists("category", $context) && ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_user_category_show"))) {
                        // line 11
                        if (($this->getAttribute($context["sidebar_category"], "id", array()) == $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))) {
                            // line 12
                            echo "<li class=\"active\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 13
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_show", array("categoryId" => $this->getAttribute($context["sidebar_category"], "id", array()), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t title=\"";
                            // line 14
                            echo twig_escape_filter($this->env, $this->getAttribute($context["sidebar_category"], "name", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                        } else {
                            // line 17
                            echo "<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 18
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_show", array("categoryId" => $this->getAttribute($context["sidebar_category"], "id", array()), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t title=\"";
                            // line 19
                            echo twig_escape_filter($this->env, $this->getAttribute($context["sidebar_category"], "name", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                        }
                    } else {
                        // line 23
                        echo "<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 24
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_show", array("categoryId" => $this->getAttribute($context["sidebar_category"], "id", array()), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                        echo "\"
\t\t\t\t\t\t\t\t\t title=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sidebar_category"], "name", array()), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                    }
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sidebar_category"], "name", array()), "html", null, true);
                    // line 29
                    echo "</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">";
                    // line 34
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sidebar_category"], "boards", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["sidebar_board"]) {
                        // line 35
                        if (array_key_exists("board", $context)) {
                            // line 36
                            if (($this->getAttribute($context["sidebar_board"], "id", array()) == $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "id", array()))) {
                                // line 37
                                echo "<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 38
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("boardId" => $this->getAttribute($context["sidebar_board"], "id", array()), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t title=\"";
                                // line 39
                                echo twig_escape_filter($this->env, $this->getAttribute($context["sidebar_board"], "name", array()), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-open\"></i>";
                            } else {
                                // line 42
                                echo "<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                // line 43
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("boardId" => $this->getAttribute($context["sidebar_board"], "id", array()), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t title=\"";
                                // line 44
                                echo twig_escape_filter($this->env, $this->getAttribute($context["sidebar_board"], "name", array()), "html", null, true);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-close\"></i>";
                            }
                        } else {
                            // line 48
                            echo "<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            // line 49
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_board_show", array("boardId" => $this->getAttribute($context["sidebar_board"], "id", array()), "forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t title=\"";
                            // line 50
                            echo twig_escape_filter($this->env, $this->getAttribute($context["sidebar_board"], "name", array()), "html", null, true);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"glyphicon glyphicon-folder-close\"></i>";
                        }
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sidebar_board"], "name", array()), "html", null, true);
                        // line 54
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</li>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sidebar_board'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "</ul>
\t\t\t\t\t\t</li>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sidebar_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "</ul>
\t\t</li>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common/Layout/Sidebar/Partial:user_boards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 61,  137 => 57,  130 => 54,  128 => 53,  123 => 50,  119 => 49,  116 => 48,  110 => 44,  106 => 43,  103 => 42,  98 => 39,  94 => 38,  91 => 37,  89 => 36,  87 => 35,  83 => 34,  77 => 29,  75 => 28,  70 => 25,  66 => 24,  63 => 23,  57 => 19,  53 => 18,  50 => 17,  45 => 14,  41 => 13,  38 => 12,  36 => 11,  34 => 10,  32 => 9,  28 => 8,  25 => 6,  23 => 5,  21 => 3,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* */
/* 	{%- set sidebar_categories = board_list(forumName) -%}*/
/* */
/* 	{%- if sidebar_categories |length -%}*/
/* 		<li>*/
/* 			<ul class="nav nav-pills nav-stacked">*/
/* 				{%- for sidebar_category in sidebar_categories -%}*/
/* 					{%- if sidebar_category.boards |length -%}*/
/* 						{%- if category is defined and route == 'ccdn_forum_user_category_show' -%}*/
/* 							{%- if sidebar_category.id == category.id -%}*/
/* 								<li class="active">*/
/* 									<a href="{{- path('ccdn_forum_user_category_show', {'categoryId': sidebar_category.id, 'forumName': forumName}) -}}"*/
/* 									 title="{{- sidebar_category.name -}}">*/
/* 										<i class="glyphicon glyphicon-folder-open"></i>*/
/* 							{%- else -%}*/
/* 								<li>*/
/* 									<a href="{{- path('ccdn_forum_user_category_show', {'categoryId': sidebar_category.id, 'forumName': forumName}) -}}"*/
/* 									 title="{{- sidebar_category.name -}}">*/
/* 										<i class="glyphicon glyphicon-folder-open"></i>*/
/* 							{%- endif -%}*/
/* 						{%- else -%}*/
/* 								<li>*/
/* 									<a href="{{- path('ccdn_forum_user_category_show', {'categoryId': sidebar_category.id, 'forumName': forumName}) -}}"*/
/* 									 title="{{- sidebar_category.name -}}">*/
/* 										<i class="glyphicon glyphicon-folder-open"></i>*/
/* 						{%- endif -%}*/
/* 										{{- sidebar_category.name -}}*/
/* 									</a>*/
/* 								</li>*/
/* */
/* 						<li>*/
/* 							<ul class="nav nav-pills nav-stacked">*/
/* 								{%- for sidebar_board in sidebar_category.boards -%}*/
/* 									{%- if board is defined -%}*/
/* 										{%- if sidebar_board.id == board.id -%}*/
/* 											<li class="active">*/
/* 												<a href="{{- path('ccdn_forum_user_board_show', {'boardId': sidebar_board.id, 'forumName': forumName}) -}}"*/
/* 												 title="{{- sidebar_board.name -}}">*/
/* 													<i class="glyphicon glyphicon-folder-open"></i>*/
/* 										{%- else -%}*/
/* 											<li>*/
/* 												<a href="{{- path('ccdn_forum_user_board_show', {'boardId': sidebar_board.id, 'forumName': forumName}) -}}"*/
/* 												 title="{{- sidebar_board.name -}}">*/
/* 													<i class="glyphicon glyphicon-folder-close"></i>*/
/* 										{%- endif -%}*/
/* 									{%- else -%}*/
/* 											<li>*/
/* 												<a href="{{- path('ccdn_forum_user_board_show', {'boardId': sidebar_board.id, 'forumName': forumName}) -}}"*/
/* 												 title="{{- sidebar_board.name -}}">*/
/* 													<i class="glyphicon glyphicon-folder-close"></i>*/
/* 									{%- endif -%}*/
/* 													{{- sidebar_board.name -}}*/
/* 												</a>*/
/* 											</li>*/
/* 								{%- endfor -%}*/
/* 							</ul>*/
/* 						</li>*/
/* 					{%- endif -%}*/
/* 				{%- endfor -%}*/
/* 			</ul>*/
/* 		</li>*/
/* 	{%- endif -%}*/
/* */
/* {%- endspaceless -%}*/
/* */
