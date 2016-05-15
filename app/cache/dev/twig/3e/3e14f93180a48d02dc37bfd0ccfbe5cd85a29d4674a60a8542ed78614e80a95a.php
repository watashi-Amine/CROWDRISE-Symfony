<?php

/* crowdBundle:Probleme:index.html.twig */
class __TwigTemplate_0f1770241af030bea707296a7629645973a93733956869fb086277ded9b95c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::enlignefreelancer.html.twig", "crowdBundle:Probleme:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::enlignefreelancer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Probleme list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Nomprobleme</th>
                <th>Typeprobleme</th>
                <th>Competence</th>
                <th>Description</th>
                <th>Budjetp</th>
                <th>Fichier</th>
                <th>Duree</th>
                <th>Datepublication</th>
                <th>Idprobleme</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("probleme_show", array("id" => $this->getAttribute($context["entity"], "idprobleme", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomprobleme", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typeprobleme", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "competence", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "budjetP", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fichier", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "duree", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["entity"], "datepublication", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datepublication", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idprobleme", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("probleme_show", array("id" => $this->getAttribute($context["entity"], "idprobleme", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("probleme_edit", array("id" => $this->getAttribute($context["entity"], "idprobleme", array()))), "html", null, true);
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
        // line 45
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("probleme_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Probleme:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 50,  119 => 45,  107 => 39,  101 => 36,  94 => 32,  88 => 31,  84 => 30,  80 => 29,  76 => 28,  72 => 27,  68 => 26,  64 => 25,  58 => 24,  55 => 23,  51 => 22,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::enlignefreelancer.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Probleme list</h1>*/
/* */
/*     <table class="records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Nomprobleme</th>*/
/*                 <th>Typeprobleme</th>*/
/*                 <th>Competence</th>*/
/*                 <th>Description</th>*/
/*                 <th>Budjetp</th>*/
/*                 <th>Fichier</th>*/
/*                 <th>Duree</th>*/
/*                 <th>Datepublication</th>*/
/*                 <th>Idprobleme</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for entity in entities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('probleme_show', { 'id': entity.idprobleme }) }}">{{ entity.nomprobleme }}</a></td>*/
/*                 <td>{{ entity.typeprobleme }}</td>*/
/*                 <td>{{ entity.competence }}</td>*/
/*                 <td>{{ entity.description }}</td>*/
/*                 <td>{{ entity.budjetP }}</td>*/
/*                 <td>{{ entity.fichier }}</td>*/
/*                 <td>{{ entity.duree }}</td>*/
/*                 <td>{% if entity.datepublication %}{{ entity.datepublication|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ entity.idprobleme }}</td>*/
/*                 <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('probleme_show', { 'id': entity.idprobleme }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('probleme_edit', { 'id': entity.idprobleme }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('probleme_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*     {% endblock %}*/
/* */
