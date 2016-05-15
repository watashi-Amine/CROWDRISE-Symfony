<?php

/* CCDNForumForumBundle:Common/Layout:flashes.html.twig */
class __TwigTemplate_a9fbe0e6f4d89c8003011f3d49a38a68cb8b062d760767858bb2fbf0cd07aa27 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 4
                echo "<div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>";
                // line 6
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                // line 7
                echo "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common/Layout:flashes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  34 => 6,  29 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* 	{%- for type, messages in app.session.flashbag.all() -%}*/
/* 	    {%- for message in messages -%}*/
/* 			<div class="alert alert-{{ type -}}">*/
/* 				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/* 			    {{- message -}}*/
/* 			</div>*/
/* 	    {%- endfor -%}*/
/* 	{%- endfor -%}*/
/* {%- endspaceless -%}*/
/* */
