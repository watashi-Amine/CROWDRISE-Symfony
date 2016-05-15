<?php

/* adminBundle:admin:admin.html.twig */
class __TwigTemplate_427fc579aa45200e258431efd2f081b6812fe0dc48af83db78cd0b318929caff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::adminbase.html.twig", "adminBundle:admin:admin.html.twig", 1);
        $this->blocks = array(
            'test' => array($this, 'block_test'),
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
    public function block_test($context, array $blocks = array())
    {
        // line 4
        echo "        ";
    }

    public function getTemplateName()
    {
        return "adminBundle:admin:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "::adminbase.html.twig" %}*/
/* */
/* {% block test %}*/
/*         {% endblock %}*/
