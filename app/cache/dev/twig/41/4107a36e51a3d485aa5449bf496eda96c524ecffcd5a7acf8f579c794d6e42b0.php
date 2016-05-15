<?php

/* crowdBundle:Projet:index1.html.twig */
class __TwigTemplate_60d4067a31093e7ebcd4b7326977c7dd60b7e74f02156b8b77ab0f1d1e0cc19a extends Twig_Template
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
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script> 


    <h1>list</h1>

    <table border=\"1\">
        
            <tr>
                <th>Id</th>
                <th>nom</th>
            </tr>
        
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
            echo "</td>
            </tr>
  
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        
    </table>


 ";
        // line 25
        $this->loadTemplate("FOSCommentBundle:Thread:async.html.twig", "crowdBundle:Projet:index1.html.twig", 25)->display(array_merge($context, array("id" => "foo")));
    }

    public function getTemplateName()
    {
        return "crowdBundle:Projet:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 25,  55 => 21,  45 => 17,  41 => 16,  38 => 15,  34 => 14,  19 => 1,);
    }
}
/* */
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script> */
/* */
/* */
/*     <h1>list</h1>*/
/* */
/*     <table border="1">*/
/*         */
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>nom</th>*/
/*             </tr>*/
/*         */
/*         {% for projet in projets %}*/
/*             <tr>*/
/*                 <td>{{ projet.id }}</a></td>*/
/*                 <td>{{ projet.nomProjet }}</td>*/
/*             </tr>*/
/*   */
/*         {% endfor %}*/
/*         */
/*     </table>*/
/* */
/* */
/*  {% include 'FOSCommentBundle:Thread:async.html.twig' with {'id': 'foo'} %}*/
