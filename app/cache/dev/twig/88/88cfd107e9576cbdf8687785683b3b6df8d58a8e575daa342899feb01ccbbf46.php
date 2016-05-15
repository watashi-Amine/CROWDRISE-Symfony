<?php

/* crowdBundle:Reclamation:show.html.twig */
class __TwigTemplate_9ebc98445b84e1cd0b1913c710809ca501f687c001e7720ed109c814a38bef9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::enligne.html.twig", "crowdBundle:Reclamation:show.html.twig", 1);
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
        // line 5
        echo "<h1 class=\"panel-title\">Reclamation</h1>
    <table id=\"shTable\" class=\"table table-striped table-bordered\">
        <thead class=\"\">
            <tr>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Notification</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "notification", array()), "html", null, true);
        echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("reclamation");
        echo "\">
                                Back to the list
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reclamation_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idReclamation", array()))), "html", null, true);
        echo "\">
                                Edit
                            </a>
                        </li>
                        <li>";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
                    </ul>
                </td>
            </tr>

        </tbody>
    </table>




";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Reclamation:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 33,  69 => 29,  61 => 24,  54 => 20,  50 => 19,  46 => 18,  31 => 5,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::enligne.html.twig' %}*/
/* */
/* {% block body -%}*/
/* */
/*     <h1 class="panel-title">Reclamation</h1>*/
/*     <table id="shTable" class="table table-striped table-bordered">*/
/*         <thead class="">*/
/*             <tr>*/
/*                 <th>Titre</th>*/
/*                 <th>Contenu</th>*/
/*                 <th>Notification</th>*/
/*                 <th>Action</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/* */
/*             <tr>*/
/*                 <td>{{ entity.titre }}</td>*/
/*                 <td>{{ entity.contenu }}</td>*/
/*                 <td>{{ entity.notification }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('reclamation') }}">*/
/*                                 Back to the list*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('reclamation_edit', { 'id': entity.idReclamation }) }}">*/
/*                                 Edit*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>{{ form(delete_form) }}</li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/* */
/*         </tbody>*/
/*     </table>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
