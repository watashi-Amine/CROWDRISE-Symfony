<?php

/* crowdBundle:admin:admin.html.twig */
class __TwigTemplate_d354dab4315340cd5968fe3669f74204b49d15fef4434a89c1bc31ca820e139d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::adminbase.html.twig", "crowdBundle:admin:admin.html.twig", 1);
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
        return "crowdBundle:admin:admin.html.twig";
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
