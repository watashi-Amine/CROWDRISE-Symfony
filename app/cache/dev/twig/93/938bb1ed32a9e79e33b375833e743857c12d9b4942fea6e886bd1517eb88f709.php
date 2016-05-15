<?php

/* base.html.twig */
class __TwigTemplate_2f68679d986ab867cee56a14f50bda75d69c9a79077868ba38b7ecf40536bf84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <div id=\"sidebar\">
            ";
        // line 10
        $this->displayBlock('sidebar', $context, $blocks);
        // line 16
        echo "        </div>

        <div id=\"content\">
            ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "        </div>
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        // line 11
        echo "                <ul>
                    <li><a href=\"/\">Home</a></li>
                    <li><a href=\"/blog\">Blog</a></li>
                </ul>
            ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 19,  59 => 11,  56 => 10,  50 => 6,  44 => 20,  42 => 19,  37 => 16,  35 => 10,  28 => 6,  22 => 2,);
    }
}
/* {# app/Resources/views/base.html.twig #}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8">*/
/*         <title>{% block title %}Test Application{% endblock %}</title>*/
/*     </head>*/
/*     <body>*/
/*         <div id="sidebar">*/
/*             {% block sidebar %}*/
/*                 <ul>*/
/*                     <li><a href="/">Home</a></li>*/
/*                     <li><a href="/blog">Blog</a></li>*/
/*                 </ul>*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         <div id="content">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
