<?php

/* crowdBundle:admin:statistique_projet.html.twig */
class __TwigTemplate_0f17d4318b7df6b3f64a18968c69a5bc2725b7bbef542e18875471a4cc6ddb94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::adminbase.html.twig", "crowdBundle:admin:statistique_projet.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"page-content\">
       <!-- Load jQuery from Google's CDN if needed -->
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    ";
        // line 11
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "
</script>

<div id=\"barchart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "crowdBundle:admin:statistique_projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "::adminbase.html.twig"%}*/
/* */
/* {% block body %}*/
/*     <div class="page-content">*/
/*        <!-- Load jQuery from Google's CDN if needed -->*/
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/* */
/* <script src="//code.highcharts.com/4.1.8/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/* <script type="text/javascript">*/
/*     {{ chart(chart) }}*/
/* </script>*/
/* */
/* <div id="barchart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/*     </div>*/
/* {% endblock %}*/
