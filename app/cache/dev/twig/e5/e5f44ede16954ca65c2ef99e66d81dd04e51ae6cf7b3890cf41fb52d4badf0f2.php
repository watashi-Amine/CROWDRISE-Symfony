<?php

/* CCDNForumForumBundle:Common/Layout:footer.html.twig */
class __TwigTemplate_204ee889b7322c9f46905892e8d49650a8fe39969a24772d9fa4cd558b166f62 extends Twig_Template
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
        echo "<footer class=\"row text-center page-footer\">
\t\t<div class=\"col-md-12\">
\t\t\t<p>
\t\t\t\tPowered by <a rel=\"friend\" target=\"_blank\" href=\"http://www.github.com/codeconsortium/CCDNForumForumBundle\">CCDNForum Forum Bundle</a>.
\t\t\t\tCopyright <a target=\"_blank\" href=\"http://www.codeconsortium.com/\">CodeConsortium</a> 2011 - ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ".
\t\t\t</p>
\t\t\t<p>
\t\t\t\tGraphics courtesy of <a rel=\"friend\" target=\"_blank\" href=\"http://glyphicons.com/glyphicons-licenses/\">Glyphicons</a>.
\t\t\t\tSmileys courtesy of <a rel=\"friend\" target=\"_blank\" href=\"http://www.freesmileys.org/copyright.php\">freesmileys.org</a>
\t\t\t</p>
\t\t</div>
\t</footer>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "CCDNForumForumBundle:Common/Layout:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  21 => 3,  19 => 1,);
    }
}
/* {%- spaceless -%}*/
/* */
/* 	<footer class="row text-center page-footer">*/
/* 		<div class="col-md-12">*/
/* 			<p>*/
/* 				Powered by <a rel="friend" target="_blank" href="http://www.github.com/codeconsortium/CCDNForumForumBundle">CCDNForum Forum Bundle</a>.*/
/* 				Copyright <a target="_blank" href="http://www.codeconsortium.com/">CodeConsortium</a> 2011 - {{ 'now'|date("Y") }}.*/
/* 			</p>*/
/* 			<p>*/
/* 				Graphics courtesy of <a rel="friend" target="_blank" href="http://glyphicons.com/glyphicons-licenses/">Glyphicons</a>.*/
/* 				Smileys courtesy of <a rel="friend" target="_blank" href="http://www.freesmileys.org/copyright.php">freesmileys.org</a>*/
/* 			</p>*/
/* 		</div>*/
/* 	</footer>*/
/* */
/* {%- endspaceless -%}*/
/* */
