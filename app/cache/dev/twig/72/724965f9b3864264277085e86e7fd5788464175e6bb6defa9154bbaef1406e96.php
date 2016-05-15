<?php

/* crowdBundle:Default:show.html.twig */
class __TwigTemplate_2be47f04fe7e7564642d3b2f9ca42289d23a0ba16d09e9b812f9ee4f17557083 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "crowdBundle:Default:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Projet</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Idprojet</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomprojet</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomProjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Resume</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resume", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Budjet</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "budjet", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Argent</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "argent", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Imagefile</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imageFile", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Image</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fichierfile</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fichierFile", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fichier</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fichier", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("projet");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idProjet", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 58,  113 => 54,  105 => 49,  95 => 42,  88 => 38,  81 => 34,  74 => 30,  67 => 26,  60 => 22,  53 => 18,  46 => 14,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Projet</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idprojet</th>*/
/*                 <td>{{ entity.idProjet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nomprojet</th>*/
/*                 <td>{{ entity.nomProjet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Resume</th>*/
/*                 <td>{{ entity.resume }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Budjet</th>*/
/*                 <td>{{ entity.budjet }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Argent</th>*/
/*                 <td>{{ entity.argent }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Imagefile</th>*/
/*                 <td>{{ entity.imageFile }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Image</th>*/
/*                 <td>{{ entity.image }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fichierfile</th>*/
/*                 <td>{{ entity.fichierFile }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fichier</th>*/
/*                 <td>{{ entity.fichier }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('projet') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('projet_edit', { 'id': entity.idProjet }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
