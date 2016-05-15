<?php

/* CCDNForumForumBundle:User/Post/Partial:item_post_body.html.twig */
class __TwigTemplate_30b46dca02774989bae02e711249aca39d60e57d36619373142b730136ca3b7e extends Twig_Template
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
        if ((($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted", array()) == false) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
            // line 4
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getEditedDate", array())) {
                // line 5
                echo "<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<i class=\"glyphicon glyphicon-pencil\"></i>";
                // line 9
                echo $this->env->getExtension('translator')->trans("post.edited-by", array(), "CCDNForumForumBundle");
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getEditedBy", array()), "html", null, true);
                // line 12
                echo "&nbsp;&#183;

\t\t\t\t\t<abbr class=\"timestamper\" title=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getEditedDate", array()), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                echo "\">";
                // line 15
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getEditedDate", array()), $this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "item_post", array()), "edited_datetime_format", array())), "html", null, true);
                // line 16
                echo "</abbr>
\t\t\t\t</div>
\t\t    </div>";
            }
        }
        // line 22
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted", array()) == true)) {
            // line 23
            echo "<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t        <i class=\"glyphicon glyphicon-trash\"></i>";
            // line 27
            echo $this->env->getExtension('translator')->trans("post.deleted-by", array(), "CCDNForumForumBundle");
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getDeletedBy", array()), "html", null, true);
            // line 30
            echo "&nbsp;&#183;

\t\t        <abbr class=\"timestamper\" title=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getDeletedDate", array()), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
            echo "\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getDeletedDate", array()), $this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "item_post", array()), "deleted_datetime_format", array())), "html", null, true);
            // line 34
            echo "</abbr>
\t\t\t</div>";
            // line 37
            if ($this->env->getExtension('security')->isGranted("ROLE_MODERATOR")) {
                // line 38
                echo "<div class=\"pull-right\">
\t                <a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#post_";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
                echo "\" href=\"#post_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
                echo "_body\">";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.show", array(), "CCDNForumForumBundle"), "html", null, true);
                // line 41
                echo "</a>
\t\t\t\t</div>";
            }
            // line 44
            echo "</div>";
            // line 46
            if ($this->env->getExtension('security')->isGranted("ROLE_MODERATOR")) {
                // line 47
                echo "<section class=\"accordion-body collapse\" id=\"post_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
                echo "_body\">";
                // line 48
                $this->loadTemplate("CCDNForumForumBundle:User:Post/Partial/body_content.html.twig", "CCDNForumForumBundle:User/Post/Partial:item_post_body.html.twig", 48)->display(array_merge($context, array("post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))));
                // line 49
                echo "</section>";
            }
        } else {
            // line 52
            echo "<section id=\"post_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId", array(), "method"), "html", null, true);
            echo "_body\">";
            // line 53
            $this->loadTemplate("CCDNForumForumBundle:User:Post/Partial/body_content.html.twig", "CCDNForumForumBundle:User/Post/Partial:item_post_body.html.twig", 53)->display(array_merge($context, array("post" => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")))));
            // line 54
            echo "</section>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Post/Partial:item_post_body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 54,  104 => 53,  100 => 52,  96 => 49,  94 => 48,  90 => 47,  88 => 46,  86 => 44,  82 => 41,  80 => 40,  75 => 39,  72 => 38,  70 => 37,  67 => 34,  65 => 33,  62 => 32,  58 => 30,  56 => 28,  54 => 27,  50 => 23,  48 => 22,  42 => 16,  40 => 15,  37 => 14,  33 => 12,  31 => 10,  29 => 9,  25 => 5,  23 => 4,  21 => 3,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* */
/* 	{%- if post.isDeleted == false or is_granted('ROLE_MODERATOR') -%}*/
/* 		{%- if post.getEditedDate -%}*/
/* 		    <div class="panel panel-default">*/
/* 				<div class="panel-heading">*/
/* 					<i class="glyphicon glyphicon-pencil"></i>*/
/* */
/* 			        {{- 'post.edited-by' |trans({}, 'CCDNForumForumBundle') |raw -}}*/
/* 					{{- post.getEditedBy -}}*/
/* */
/* 					&nbsp;&#183;*/
/* */
/* 					<abbr class="timestamper" title="{{- post.getEditedDate |date('Y-m-d H:i:s T Z', 'Europe/London') -}}">*/
/* 			            {{- post.getEditedDate |date(ccdn_forum_forum.item_post.edited_datetime_format) -}}*/
/* 			        </abbr>*/
/* 				</div>*/
/* 		    </div>*/
/* 		{%- endif -%}*/
/* 	{%- endif -%}*/
/* */
/* 	{%- if post.isDeleted == true -%}*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 		        <i class="glyphicon glyphicon-trash"></i>*/
/* */
/* 		        {{- 'post.deleted-by' |trans({}, 'CCDNForumForumBundle') |raw -}}*/
/* 				{{- post.getDeletedBy -}}*/
/* */
/* 				&nbsp;&#183;*/
/* */
/* 		        <abbr class="timestamper" title="{{- post.getDeletedDate |date('Y-m-d H:i:s T Z', 'Europe/London') -}}">*/
/* 		            {{- post.getDeletedDate |date(ccdn_forum_forum.item_post.deleted_datetime_format) -}}*/
/* 		        </abbr>*/
/* 			</div>*/
/* */
/* 	        {%- if is_granted('ROLE_MODERATOR') -%}*/
/* 				<div class="pull-right">*/
/* 	                <a class="accordion-toggle" data-toggle="collapse" data-parent="#post_{{- post.getId() -}}" href="#post_{{- post.getId() -}}_body">*/
/* 	                    {{- 'post.show' |trans({}, 'CCDNForumForumBundle') -}}*/
/* 	                </a>*/
/* 				</div>*/
/* 			{%- endif -%}*/
/* 		</div>*/
/* */
/* 		{%- if is_granted('ROLE_MODERATOR') -%}*/
/* 			<section class="accordion-body collapse" id="post_{{- post.getId() -}}_body">*/
/* 				{%- include 'CCDNForumForumBundle:User:Post/Partial/body_content.html.twig' with {'post': post } -%}*/
/* 			</section>*/
/* 		{%- endif -%}*/
/* 	{%- else -%}*/
/* 		<section id="post_{{- post.getId() -}}_body">*/
/* 			{%- include 'CCDNForumForumBundle:User:Post/Partial/body_content.html.twig' with {'post': post } -%}*/
/* 		</section>*/
/* 	{%- endif -%}*/
/* */
/* {%- endspaceless -%}*/
/* */
