<?php

/* crowdBundle:Probleme:solutionlisteparprob.html.twig */
class __TwigTemplate_a4e585882336964ad8dc1ed6413caee0c7329750eebd66a32beb49a2a4e4e09a extends Twig_Template
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
        echo "<div class=\"col-md-2\"></div>
                    <div class=\"panel-body col-md-8\">
                        <table  class=\"table table-striped\">

<thead>
                                            <tr>

                                                <th>Freelancer</th>
                                                <th>Duree </th>
                                                <th>Prix</th>
                                                <th>Temps restant</th>
                                                
                                                
                                            </tr>
                                        </thead>
           ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sols"]) ? $context["sols"] : $this->getContext($context, "sols")));
        foreach ($context['_seq'] as $context["_key"] => $context["sol"]) {
            // line 17
            echo "               
               <div class=\"row\"  >
                                <div class=\"col-lg-6\">
                                    
                                        
                                        <tbody>

                                        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["sol"], "id", array()), "html", null, true);
            echo " </td>
                                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["sol"], "duree", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["sol"], "budjetS", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sol"], "dateDepot", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                                       
                                        
                                        
                                      
                                        </tr>

                                        </tbody>
                                        
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sol'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                <hr>

                                </table>
           </div>
          ";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Probleme:solutionlisteparprob.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 37,  61 => 27,  57 => 26,  53 => 25,  49 => 24,  40 => 17,  36 => 16,  19 => 1,);
    }
}
/* <div class="col-md-2"></div>*/
/*                     <div class="panel-body col-md-8">*/
/*                         <table  class="table table-striped">*/
/* */
/* <thead>*/
/*                                             <tr>*/
/* */
/*                                                 <th>Freelancer</th>*/
/*                                                 <th>Duree </th>*/
/*                                                 <th>Prix</th>*/
/*                                                 <th>Temps restant</th>*/
/*                                                 */
/*                                                 */
/*                                             </tr>*/
/*                                         </thead>*/
/*            {% for sol in sols %}*/
/*                */
/*                <div class="row"  >*/
/*                                 <div class="col-lg-6">*/
/*                                     */
/*                                         */
/*                                         <tbody>*/
/* */
/*                                         <td>{{ sol.id}} </td>*/
/*                                         <td>{{ sol.duree }}</td>*/
/*                                         <td>{{ sol.budjetS }}</td>*/
/*                                         <td>{{ sol.dateDepot | date('Y-m-d') }}</td>*/
/*                                        */
/*                                         */
/*                                         */
/*                                       */
/*                                         </tr>*/
/* */
/*                                         </tbody>*/
/*                                         */
/*                {% endfor %}*/
/*                 <hr>*/
/* */
/*                                 </table>*/
/*            </div>*/
/*           */
