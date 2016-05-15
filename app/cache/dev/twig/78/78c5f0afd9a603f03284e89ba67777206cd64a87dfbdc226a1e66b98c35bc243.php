<?php

/* crowdBundle:Projet:index.html.twig */
class __TwigTemplate_3dec8ac1c8ecc0b3befac75e6c2de6c6a253bf6a400b32b838a5ea68fc4e859d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "crowdBundle:Projet:index.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 2
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <!-- Text input
    <h1>Projet list</h1>

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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "            <tr>
                <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_show", array("id" => $this->getAttribute($context["entity"], "idProjet", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idProjet", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "resume", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "image", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "budjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fichier", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_show", array("id" => $this->getAttribute($context["entity"], "idProjet", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 39
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
        // line 45
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("projet_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
      
    
    
    
    -->
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    



    <!-- Page Title -->
    <div class=\"section section-breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>Visiter Nos Projets</h1>
                </div>
            </div>
        </div>
    </div>

    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Sidebar -->
                <div class=\"col-sm-3 blog-sidebar\">
                    <h4>chercher des projet</h4>
                                        ";
        // line 96
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("crowdBundle:Projet:recherche"), array());
        // line 97
        echo "
                   
                    
                  
                    <h4>Categories</h4>
                    <ul class=\"blog-categories\">
                        
                        ";
        // line 104
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("crowdBundle:Ctegorieprojet:menu"), array());
        // line 105
        echo "                        
                        
                        
                    
                </div>
                <!-- End Sidebar -->
                <div class=\"col-sm-8\">
                    
                    <ul class=\"thumbnails list-unstyled\">
                        
                        
                        
                        
                    ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 119
            echo "  
                    
                       
                        
                        
        <li class=\"col-md-6\">
          <div class=\"thumbnail\" style=\"padding: 0\">
            <div style=\"padding:4px\">
                <img  height=\"350\" width=\"335\" src=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["entity"], "imageFile", array())), "html", null, true);
            echo "\" >
             
            </div>
            <div class=\"caption\">
                
                
             <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_show", array("id" => $this->getAttribute($context["entity"], "idProjet", array()))), "html", null, true);
            echo "\">  <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomProjet", array()), "html", null, true);
            echo "</h2> </a>
            <p>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "resume", array()), "html", null, true);
            echo "</p>
              
              
              
              <p><i class=\"icon icon-map-marker\"></i> Place, Country</p>
            </div>
            <div class=\"modal-footer\" style=\"text-align: left\">
              <div class=\"progress\">
                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:  ";
            // line 142
            if (($this->getAttribute($context["entity"], "budjet", array()) == 0)) {
                echo " 0 ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_round((($this->getAttribute($context["entity"], "argent", array()) / $this->getAttribute($context["entity"], "budjet", array())) * 100), 1, "floor"), "html", null, true);
            }
            echo "%;\">
                    <span class=\"sr-only\">60% Complete</span>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-4\"><b>";
            // line 147
            if (($this->getAttribute($context["entity"], "budjet", array()) == 0)) {
                echo " 0 ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_round((($this->getAttribute($context["entity"], "argent", array()) / $this->getAttribute($context["entity"], "budjet", array())) * 100), 1, "floor"), "html", null, true);
            }
            echo "%</b><br/><small>aquis</small></div>
                <div class=\"col-md-4\"><b>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "budjet", array()), "html", null, true);
            echo " DTN</b><br/><small>But</small></div>
                <div class=\"col-md-4\"><b>";
            // line 149
            if (($this->getAttribute($context["entity"], "budjet", array()) == $this->getAttribute($context["entity"], "argent", array()))) {
                echo " financé ";
            } else {
                echo " en cours ... ";
            }
            echo "</b><br/><small></small></div>
              </div>
            </div>
          </div>
        </li>
       
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "
          
      </ul>

                </div>
            </div>
        </div>
    </div>

    
    
    
    
";
    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        // line 172
        echo "


";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Projet:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 172,  297 => 171,  280 => 156,  263 => 149,  259 => 148,  250 => 147,  237 => 142,  226 => 134,  220 => 133,  211 => 127,  201 => 119,  197 => 118,  182 => 105,  180 => 104,  171 => 97,  169 => 96,  120 => 50,  113 => 45,  101 => 39,  95 => 36,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  66 => 27,  63 => 26,  59 => 25,  41 => 9,  38 => 8,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block css %}*/
/* */
/* {% endblock%}*/
/* */
/* */
/* */
/* {% block body %}*/
/*     <!-- Text input*/
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
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('projet_new') }}">*/
/*                 Create a new entry*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/*       */
/*     */
/*     */
/*     */
/*     -->*/
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/* */
/*     */
/*     */
/*     */
/*     */
/*     */
/* */
/* */
/* */
/*     <!-- Page Title -->*/
/*     <div class="section section-breadcrumbs">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <h1>Visiter Nos Projets</h1>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="section">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <!-- Sidebar -->*/
/*                 <div class="col-sm-3 blog-sidebar">*/
/*                     <h4>chercher des projet</h4>*/
/*                                         {% render(controller('crowdBundle:Projet:recherche'))%}*/
/* */
/*                    */
/*                     */
/*                   */
/*                     <h4>Categories</h4>*/
/*                     <ul class="blog-categories">*/
/*                         */
/*                         {%  render(controller('crowdBundle:Ctegorieprojet:menu'))  %}*/
/*                         */
/*                         */
/*                         */
/*                     */
/*                 </div>*/
/*                 <!-- End Sidebar -->*/
/*                 <div class="col-sm-8">*/
/*                     */
/*                     <ul class="thumbnails list-unstyled">*/
/*                         */
/*                         */
/*                         */
/*                         */
/*                     {% for entity in entities %}*/
/*   */
/*                     */
/*                        */
/*                         */
/*                         */
/*         <li class="col-md-6">*/
/*           <div class="thumbnail" style="padding: 0">*/
/*             <div style="padding:4px">*/
/*                 <img  height="350" width="335" src="{{asset ( entity.imageFile )}}" >*/
/*              */
/*             </div>*/
/*             <div class="caption">*/
/*                 */
/*                 */
/*              <a href="{{ path('projet_show', { 'id': entity.idProjet }) }}">  <h2>{{ entity.nomProjet }}</h2> </a>*/
/*             <p>{{ entity.resume }}</p>*/
/*               */
/*               */
/*               */
/*               <p><i class="icon icon-map-marker"></i> Place, Country</p>*/
/*             </div>*/
/*             <div class="modal-footer" style="text-align: left">*/
/*               <div class="progress">*/
/*                 <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:  {% if entity.budjet == 0  %} 0 {% else %} {{ (entity.argent /  entity.budjet *100)|round(1, 'floor') }}{% endif %}%;">*/
/*                     <span class="sr-only">60% Complete</span>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="row">*/
/*                 <div class="col-md-4"><b>{% if entity.budjet == 0  %} 0 {% else %} {{ (entity.argent /  entity.budjet *100)|round(1, 'floor') }}{% endif %}%</b><br/><small>aquis</small></div>*/
/*                 <div class="col-md-4"><b>{{ entity.budjet }} DTN</b><br/><small>But</small></div>*/
/*                 <div class="col-md-4"><b>{% if entity.budjet == entity.argent  %} financé {% else %} en cours ... {% endif %}</b><br/><small></small></div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </li>*/
/*        */
/*                     {% endfor %}*/
/* */
/*           */
/*       </ul>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     */
/*     */
/*     */
/*     */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* */
/* */
/* {% endblock %}*/
