<?php

/* CCDNForumForumBundle:User/Post/Partial:post_preview.html.twig */
class __TwigTemplate_14566606afeec3409b84dfb91ed1ed21da73f9829ab7ae23a3b37336c9151661 extends Twig_Template
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
        if ($this->getAttribute((isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview")), "getBody", array())) {
            // line 3
            echo "<h4>";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.preview", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 5
            echo "</h4>

\t\t<div class=\"col-md-12\">
\t\t\t<article class=\"row panel panel-default clearfix\"";
            // line 8
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array())) {
                echo " id=\"";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getBody", array()), 0, 24), "html", null, true);
                echo "\"";
            }
            echo ">

\t\t\t    <header class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 12
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy", array())) {
                // line 13
                echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy", array()), "username", array()), "html", null, true);
                // line 16
                echo "&nbsp;&#183;&nbsp;";
            }
            // line 20
            echo "<span class=\"timestamper\" title=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate", array()), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
            echo "\">";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate", array()), $this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "item_post", array()), "created_datetime_format", array())), "html", null, true);
            // line 22
            echo "</span>
\t\t\t\t\t</h3>
\t\t\t\t</header>

\t\t\t\t<div class=\"panel-body\">";
            // line 27
            $this->loadTemplate("CCDNForumForumBundle:User:Post/Partial/item_post_body.html.twig", "CCDNForumForumBundle:User/Post/Partial:post_preview.html.twig", 27)->display(array_merge($context, array("post" => (isset($context["preview"]) ? $context["preview"] : $this->getContext($context, "preview")))));
            // line 28
            echo "</div>

\t\t\t</article>
\t\t</div>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Post/Partial:post_preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 28,  63 => 27,  57 => 22,  55 => 21,  51 => 20,  48 => 16,  46 => 14,  44 => 13,  42 => 12,  32 => 8,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/*     {%- if preview.getBody -%}*/
/* 	<h4>*/
/* 		{{- 'post.preview' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 	</h4>*/
/* */
/* 		<div class="col-md-12">*/
/* 			<article class="row panel panel-default clearfix" {%- if post.id %} id="{{- post.getBody |slice(0,24) -}}"{%- endif -%}>*/
/* */
/* 			    <header class="panel-heading">*/
/* 					<h3 class="panel-title">*/
/* 						{%- if post.getCreatedBy -%}*/
/* 					        {{- 'post.posted-by' |trans({}, 'CCDNForumForumBundle') |raw -}}*/
/* 							{{- post.getCreatedBy.username -}}*/
/* */
/* 					        &nbsp;&#183;&nbsp;*/
/* */
/* 						{%- endif -%}*/
/* */
/* 				        <span class="timestamper" title="{{- post.getCreatedDate |date('Y-m-d H:i:s T Z', 'Europe/London') -}}">*/
/* 				            {{- post.getCreatedDate |date(ccdn_forum_forum.item_post.created_datetime_format) -}}*/
/* 				        </span>*/
/* 					</h3>*/
/* 				</header>*/
/* */
/* 				<div class="panel-body">*/
/* 					{%- include 'CCDNForumForumBundle:User:Post/Partial/item_post_body.html.twig' with {'post': preview } -%}*/
/* 				</div>*/
/* */
/* 			</article>*/
/* 		</div>*/
/*     {%- endif -%}*/
/* {%- endspaceless -%}*/
/* */
