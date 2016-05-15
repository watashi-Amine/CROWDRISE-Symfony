<?php

/* crowdBundle:Projet:indexowner.html.twig */
class __TwigTemplate_69b5ddd7ef780ba7a233437a28991dc97a830831c35daaddfeaae4234cdd4191 extends Twig_Template
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
        echo "    ";
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
        return "crowdBundle:Projet:indexowner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  74 => 28,  67 => 24,  63 => 23,  59 => 22,  55 => 21,  51 => 20,  45 => 19,  42 => 18,  38 => 17,  21 => 2,  19 => 1,);
    }
}
/*     {# empty Twig template #}*/
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
