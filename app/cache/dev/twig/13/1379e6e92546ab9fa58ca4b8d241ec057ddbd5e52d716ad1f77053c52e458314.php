<?php

/* CCDNForumForumBundle:User/Post/Partial:item_post.html.twig */
class __TwigTemplate_bdec532019e178d5ce85d1f0bff47233d0a3909bcce22db3534825f71776642b extends Twig_Template
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
        // line 25
        $context["post_panel"] = $this;
        // line 26
        $context["panel"] = $context["post_panel"]->getclass((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "topic", array()));
        // line 28
        echo "<div class=\"col-md-12\">
\t\t<article class=\"row panel ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["panel"]) ? $context["panel"] : $this->getContext($context, "panel")), "html", null, true);
        echo " clearfix\"";
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array())) {
            echo " id=\"";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getBody", array()), 0, 24), "html", null, true);
            echo "\"";
        }
        echo ">

\t\t    <header class=\"panel-heading\">";
        // line 32
        $this->loadTemplate("CCDNForumForumBundle:User:Post/Partial/item_post_head.html.twig", "CCDNForumForumBundle:User/Post/Partial:item_post.html.twig", 32)->display(array_merge($context, array("post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))));
        // line 33
        echo "</header>

\t\t\t<div class=\"panel-body\">";
        // line 36
        $this->loadTemplate("CCDNForumForumBundle:User:Post/Partial/item_post_body.html.twig", "CCDNForumForumBundle:User/Post/Partial:item_post.html.twig", 36)->display(array_merge($context, array("post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))));
        // line 37
        echo "</div>

\t\t</article>
\t</div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 3
    public function getclass($__post__ = null, $__topic__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "post" => $__post__,
            "topic" => $__topic__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted", array()) == true)) {
                // line 6
                echo "panel-danger";
            } else {
                // line 8
                if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()) && $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "topic", array()))) {
                    // line 9
                    if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "topic", array()), "firstPost", array())) {
                        // line 10
                        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "topic", array()), "firstPost", array()), "id", array()) == $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))) {
                            // line 11
                            echo "panel-primary";
                        } else {
                            // line 13
                            echo "panel-default";
                        }
                    } else {
                        // line 16
                        echo "panel-default";
                    }
                } else {
                    // line 19
                    echo "panel-default";
                }
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Post/Partial:item_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  86 => 16,  82 => 13,  79 => 11,  77 => 10,  75 => 9,  73 => 8,  70 => 6,  68 => 5,  55 => 3,  47 => 37,  45 => 36,  41 => 33,  39 => 32,  28 => 29,  25 => 28,  23 => 26,  21 => 25,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* */
/* 	{%- macro class(post, topic) -%}*/
/* */
/* 		{%- if post.isDeleted == true -%}*/
/* 			panel-danger*/
/* 		{%- else -%}*/
/* 			{%- if post.id and post.topic -%}*/
/* 				{%- if post.topic.firstPost -%}*/
/* 					{%- if post.topic.firstPost.id == post.id -%}*/
/* 						panel-primary*/
/* 					{%- else -%}*/
/* 						panel-default*/
/* 					{%- endif -%}*/
/* 				{%- else -%}*/
/* 					panel-default*/
/* 				{%- endif -%}*/
/* 			{%- else -%}*/
/* 				panel-default*/
/* 			{%- endif -%}*/
/* 		{% endif %}*/
/* */
/* 	{%- endmacro -%}*/
/* */
/* 	{%- import _self as post_panel -%}*/
/* 	{%- set panel = post_panel.class(post, post.topic) -%}*/
/* */
/* 	<div class="col-md-12">*/
/* 		<article class="row panel {{ panel }} clearfix" {%- if post.id %} id="{{- post.getBody |slice(0,24) -}}"{#id="post_{{- post.getId -}}"#}{%- endif -%}>*/
/* */
/* 		    <header class="panel-heading">*/
/* 		        {%- include 'CCDNForumForumBundle:User:Post/Partial/item_post_head.html.twig' with {'post': post } -%}*/
/* 			</header>*/
/* */
/* 			<div class="panel-body">*/
/* 				{%- include 'CCDNForumForumBundle:User:Post/Partial/item_post_body.html.twig' with {'post': post } -%}*/
/* 			</div>*/
/* */
/* 		</article>*/
/* 	</div>*/
/* */
/* {%- endspaceless -%}*/
/* */
