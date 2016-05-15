<?php

/* crowdBundle:Projet:projetadmin.html.twig */
class __TwigTemplate_1d8f929692ddf010111e9a5a4f8420735a005447a0ad09177ff4fb86521ce702 extends Twig_Template
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
        // line 2
        echo "    <h1>Projet list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Idprojet</th>
                <th>Nomprojet</th>
                <th>Resume</th>
                <th>Image</th>
                <th>Budjet</th>
                <th>Fichier</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_show", array("id" => $this->getAttribute($context["entity"], "idProjet", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idProjet", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "resume", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "image", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "budjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fichier", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_show", array("id" => $this->getAttribute($context["entity"], "idProjet", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_edit", array("id" => $this->getAttribute($context["entity"], "idProjet", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "crowdBundle:Projet:projetadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 31,  72 => 28,  65 => 24,  61 => 23,  57 => 22,  53 => 21,  49 => 20,  43 => 19,  40 => 18,  36 => 17,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/*     <h1>Projet list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Idprojet</th>*/
/*                 <th>Nomprojet</th>*/
/*                 <th>Resume</th>*/
/*                 <th>Image</th>*/
/*                 <th>Budjet</th>*/
/*                 <th>Fichier</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('projet_show', { 'id': entity.idProjet }) }}">{{ entity.idProjet }}</a></td>*/
/*                 <td>{{ entity.nomProjet }}</td>*/
/*                 <td>{{ entity.resume }}</td>*/
/*                 <td>{{ entity.image }}</td>*/
/*                 <td>{{ entity.budjet }}</td>*/
/*                 <td>{{ entity.fichier }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('projet_show', { 'id': entity.idProjet }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('projet_edit', { 'id': entity.idProjet }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
