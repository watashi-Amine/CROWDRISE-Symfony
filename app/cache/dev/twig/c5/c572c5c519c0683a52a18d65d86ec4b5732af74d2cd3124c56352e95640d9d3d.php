<?php

/* CCDNForumForumBundle:User/Category/Partial:item_category.html.twig */
class __TwigTemplate_184b6ce383d7252bb070bf4c1cf7c7ec3305d73708159e5fa570bd232ef65151 extends Twig_Template
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
        echo "<span title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "\" class=\"lead\">
\t\t<a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_show", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")), "categoryId" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        // line 6
        echo "</a>
\t</span>

\t<section class=\"clearfix\">
\t\t<table class=\"table table-striped table-hover\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"center\" style=\"width:32px;\">&nbsp;</th>
\t\t\t\t\t<th class=\"left\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"center\" style=\"width:60px;\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.topic-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"center\" style=\"width:60px;\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.post-count-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t\t<th class=\"center\" style=\"width:170px;\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("board.last-post-th", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "boards", array()));
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
        foreach ($context['_seq'] as $context["row"] => $context["board"]) {
            // line 22
            $this->loadTemplate("CCDNForumForumBundle:User:Category/Partial/item_board.html.twig", "CCDNForumForumBundle:User/Category/Partial:item_category.html.twig", 22)->display($context);
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
            // line 24
            echo "<tr>
\t\t\t\t\t\t<td class=\"text-center\" colspan=\"5\" style=\"width:100%;\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.no-boards", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 27
            echo "</td>
\t\t\t\t\t</tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['row'], $context['board'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</tbody>
\t\t</table>
\t</section>

\t<br>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Category/Partial:item_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  97 => 27,  95 => 26,  92 => 24,  79 => 22,  61 => 21,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  33 => 6,  31 => 5,  26 => 4,  21 => 3,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* */
/* 	<span title="{{- category.name -}}" class="lead">*/
/* 		<a href="{{- path('ccdn_forum_user_category_show', {'forumName': forumName, 'categoryId': category.id }) -}}" title="{{- category.name -}}">*/
/* 			{{- category.name -}}*/
/* 		</a>*/
/* 	</span>*/
/* */
/* 	<section class="clearfix">*/
/* 		<table class="table table-striped table-hover">*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<th class="center" style="width:32px;">&nbsp;</th>*/
/* 					<th class="left">{{- 'board.th' | trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 					<th class="center" style="width:60px;">{{- 'board.topic-count-th' | trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 					<th class="center" style="width:60px;">{{- 'board.post-count-th' | trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 					<th class="center" style="width:170px;">{{- 'board.last-post-th' | trans({}, 'CCDNForumForumBundle') -}}</th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 				{%- for row, board in category.boards -%}*/
/* 					{%- include "CCDNForumForumBundle:User:Category/Partial/item_board.html.twig" -%}*/
/* 				{%- else -%}*/
/* 					<tr>*/
/* 						<td class="text-center" colspan="5" style="width:100%;">*/
/* 							{{- 'category.no-boards' | trans({}, 'CCDNForumForumBundle') -}}*/
/* 						</td>*/
/* 					</tr>*/
/* 				{%- endfor -%}*/
/* 			</tbody>*/
/* 		</table>*/
/* 	</section>*/
/* */
/* 	<br>*/
/* {%- endspaceless -%}*/
/* */
