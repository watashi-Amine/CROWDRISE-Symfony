<?php

/* CCDNForumForumBundle:Common/Layout:crumbs.html.twig */
class __TwigTemplate_071cb6fc60f7ff623de40e73ac7a9cf214b0510b0911e5c15866a0dc483527f6 extends Twig_Template
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
        // line 2
        echo "<ol class=\"breadcrumb\">";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["crumbs"]) ? $context["crumbs"] : $this->getContext($context, "crumbs")), "getTrail", array()));
        foreach ($context['_seq'] as $context["key"] => $context["crumb"]) {
            // line 4
            echo "<li>
\t\t\t\t<a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "url", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "label", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["crumb"], "label", array()), "html", null, true);
            echo "</a>
\t\t\t</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['crumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ol>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common/Layout:crumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  30 => 5,  27 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* 	<ol class="breadcrumb">*/
/* 		{%- for key, crumb in crumbs.getTrail -%}*/
/* 			<li>*/
/* 				<a href="{{- crumb.url -}}" title="{{- crumb.label -}}">{{- crumb.label -}}</a>*/
/* 			</li>*/
/* 		{%- endfor -%}*/
/* 	</ol>*/
/* {%- endspaceless -%}*/
/* */
