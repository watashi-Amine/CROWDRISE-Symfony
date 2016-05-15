<?php

/* crowdBundle:Evenement:new.html.twig */
class __TwigTemplate_5337f9f3e4df6416b7db015cf873c3691c618c63b6fb161dfd8f5953a70136e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::enligne.html.twig", "crowdBundle:Evenement:new.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::enligne.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        // line 6
        echo "                        ";
        $this->loadTemplate("::sidebar.html.twig", "crowdBundle:Evenement:new.html.twig", 6)->display($context);
        // line 7
        echo "
        ";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<h1>Evenement creation</h1>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Evenement:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  47 => 13,  43 => 11,  40 => 10,  35 => 7,  32 => 6,  29 => 5,  11 => 1,);
    }
}
/* {% extends '::enligne.html.twig' %}*/
/* */
/* */
/* */
/*     {% block navbar %}*/
/*                         {% include '::sidebar.html.twig' %}*/
/* */
/*         {% endblock %}*/
/* */
/* {% block body -%}*/
/*     <h1>Evenement creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('evenement') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
