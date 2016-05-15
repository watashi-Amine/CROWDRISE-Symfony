<?php

/* crowdBundle:Reclamation:index.html.twig */
class __TwigTemplate_f89690a30f13434a35e2635e4091748263d947e1b92443b836de10ca8860eb35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "crowdBundle:Reclamation:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"nav_search pull-right\">
                                                                                     
                                                                                    </div>   
    <h1 class=\"panel-title\">Liste des Reclamations</h1>
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
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "                <tr>
                    <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reclamation_show", array("id" => $this->getAttribute($context["entity"], "idReclamation", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "titre", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "contenu", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "notification", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reclamation_show", array("id" => $this->getAttribute($context["entity"], "idReclamation", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reclamation_edit", array("id" => $this->getAttribute($context["entity"], "idReclamation", array()))), "html", null, true);
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
        // line 35
        echo "        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("reclamation_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
            

";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Reclamation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 39,  89 => 35,  77 => 29,  71 => 26,  64 => 22,  60 => 21,  54 => 20,  51 => 19,  47 => 18,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block body -%}*/
/*       <div class="nav_search pull-right">*/
/*                                                                                      */
/*                                                                                     </div>   */
/*     <h1 class="panel-title">Liste des Reclamations</h1>*/
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
/*             {% for entity in entities %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('reclamation_show', { 'id': entity.idReclamation }) }}">{{ entity.titre }}</a></td>*/
/*                     <td>{{ entity.contenu }}</td>*/
/*                     <td>{{ entity.notification }}</td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('reclamation_show', { 'id': entity.idReclamation }) }}">show</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('reclamation_edit', { 'id': entity.idReclamation }) }}">edit</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('reclamation_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*             */
/* */
/* {% endblock %}*/
/* */
