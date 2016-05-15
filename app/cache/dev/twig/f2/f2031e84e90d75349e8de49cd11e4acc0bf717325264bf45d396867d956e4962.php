<?php

/* crowdBundle:Probleme:choixCompetence.html.twig */
class __TwigTemplate_32f2db7893c6aa4d3b818ee845425b28b206b7bbaea536ce19e1185b9568ca86 extends Twig_Template
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
        echo "  <form    action=\"";
        echo $this->env->getExtension('routing')->getPath("probleme_recherche_comp");
        echo "\" method=\"POST\"  >

 <div class=\"row\">
     
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competence"]) ? $context["competence"] : $this->getContext($context, "competence")));
        foreach ($context['_seq'] as $context["_key"] => $context["com"]) {
            // line 6
            echo "                        <div class=\"col-sm-4 md-margin-bottom-10\">
                           <label class=\"checkbox-inline\"><input type=\"checkbox\" name=\"competence[]\" value=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "competence", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["com"], "competence", array()), "html", null, true);
            echo "</label>

   </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['com'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo " 
                   
                    <div class=\"col-sm-4\">
                        <button type=\"submit\" class=\"btn-u btn-block btn-u-dark\"> Search Job</button>
                    </div>

  
            </div>
       </form>";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Probleme:choixCompetence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  34 => 7,  31 => 6,  27 => 5,  19 => 1,);
    }
}
/*   <form    action="{{ path('probleme_recherche_comp') }}" method="POST"  >*/
/* */
/*  <div class="row">*/
/*      */
/* {% for com in competence  %}*/
/*                         <div class="col-sm-4 md-margin-bottom-10">*/
/*                            <label class="checkbox-inline"><input type="checkbox" name="competence[]" value="{{com.competence}}">{{com.competence}}</label>*/
/* */
/*    </div>*/
/* {% endfor   %} */
/*                    */
/*                     <div class="col-sm-4">*/
/*                         <button type="submit" class="btn-u btn-block btn-u-dark"> Search Job</button>*/
/*                     </div>*/
/* */
/*   */
/*             </div>*/
/*        </form>*/
