<?php

/* CCDNForumForumBundle:User/Topic/Partial:transcript.html.twig */
class __TwigTemplate_bf1f3bf37c145d5d82467e1b3f041cc7b6d90e6a2a879723f6307772c6271bd4 extends Twig_Template
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
        echo "<div class=\"forum-topic-transcript\">
\t\t<h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.transcript", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</h3>

\t\t<div class=\"well pre-scrollable\">";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getPosts", array()));
        foreach ($context['_seq'] as $context["key"] => $context["post"]) {
            // line 9
            if ((($this->getAttribute($context["post"], "isDeleted", array()) == false) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
                // line 11
                echo "<div class=\"col-md-12\">
\t\t\t\t\t\t<article class=\"row panel panel-";
                // line 12
                if ((($this->getAttribute($context["post"], "isDeleted", array()) == false) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
                    echo "default ";
                } else {
                    echo "danger ";
                }
                // line 13
                echo "clearfix\" data-snip=\"";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["post"], "getBody", array()), 0, 24), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["post"], "id", array())) {
                    echo " id=\"post_";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getId", array()), "html", null, true);
                    echo "\"";
                }
                echo ">

\t\t\t\t\t\t    <header class=\"panel-heading\">";
                // line 16
                if ($this->getAttribute($context["post"], "getCreatedBy", array())) {
                    // line 17
                    echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "getCreatedBy", array()), "username", array()), "html", null, true);
                    // line 20
                    echo "&nbsp;&#183;";
                }
                // line 24
                echo "<span class=\"timestamper\" title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "getCreatedDate", array()), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                echo "\">";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "getCreatedDate", array()), $this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "item_post", array()), "created_datetime_format", array())), "html", null, true);
                // line 26
                echo "</span>
\t\t\t\t\t\t\t</header>

\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "getBody", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</article>
\t\t\t\t\t</div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>
\t</div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:User/Topic/Partial:transcript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 40,  78 => 31,  71 => 26,  69 => 25,  65 => 24,  62 => 20,  60 => 18,  58 => 17,  56 => 16,  44 => 13,  38 => 12,  35 => 11,  33 => 9,  29 => 7,  24 => 4,  21 => 3,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* */
/* 	<div class="forum-topic-transcript">*/
/* 		<h3>{{- 'topic.transcript' |trans({}, 'CCDNForumForumBundle') -}}</h3>*/
/* */
/* 		<div class="well pre-scrollable">*/
/* 			{%- for key, post in topic.getPosts -%}*/
/* */
/* 				{%- if post.isDeleted == false or is_granted('ROLE_MODERATOR') -%}*/
/* */
/* 					<div class="col-md-12">*/
/* 						<article class="row panel panel-{%- if post.isDeleted == false or is_granted('ROLE_MODERATOR') -%} default {% else -%} danger {% endif -%}*/
/* 						clearfix" data-snip="{{- post.getBody |slice(0,24) -}}" {%- if post.id %} id="post_{{- post.getId -}}"{% endif %}>*/
/* */
/* 						    <header class="panel-heading">*/
/* 								{%- if post.getCreatedBy -%}*/
/* 							        {{- 'post.posted-by' |trans({}, 'CCDNForumForumBundle') |raw -}}*/
/* 									{{- post.getCreatedBy.username -}}*/
/* */
/* 							        &nbsp;&#183;*/
/* */
/* 								{%- endif -%}*/
/* */
/* 						        <span class="timestamper" title="{{- post.getCreatedDate |date('Y-m-d H:i:s T Z', 'Europe/London') -}}">*/
/* 						            {{- post.getCreatedDate |date(ccdn_forum_forum.item_post.created_datetime_format) -}}*/
/* 						        </span>*/
/* 							</header>*/
/* */
/* 							<div class="panel-body">*/
/* 								<p>*/
/* 									{{ post.getBody }}*/
/* 								</p>*/
/* 							</div>*/
/* */
/* 						</article>*/
/* 					</div>*/
/* */
/* 				{%- endif -%}*/
/* 			{%- endfor -%}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {%- endspaceless -%}*/
/* */
