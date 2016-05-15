<?php

/* CCDNForumForumBundle:User/Post/Partial:body_content.html.twig */
class __TwigTemplate_bbd5a1fc9e9239dc8429665e1f24c7034a370cc2e1e9a990687ed4ddd61ccc47 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getBody", array()), "html", null, true);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Post/Partial:body_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 3,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* */
/* 	{{- post.getBody -}}*/
/* */
/* {%- endspaceless -%}*/
/* */
