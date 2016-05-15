<?php

/* crowdBundle:InvestissementPE:financer.html.twig */
class __TwigTemplate_3a187b07f87f2ec8d845baa82402091336c26a2502d5d821c8027e7b59844073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::enligne.html.twig", "crowdBundle:InvestissementPE:financer.html.twig", 1);
        $this->blocks = array(
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>InvestissementPE creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("investissementpe");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>

";
    }

    public function getTemplateName()
    {
        return "crowdBundle:InvestissementPE:financer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::enligne.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>InvestissementPE creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('investissementpe') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* */
/* {% endblock %}*/
/* */
/* */
