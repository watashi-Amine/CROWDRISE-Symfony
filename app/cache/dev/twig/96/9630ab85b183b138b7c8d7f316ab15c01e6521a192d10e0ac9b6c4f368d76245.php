<?php

/* crowdBundle:Evenement:show.html.twig */
class __TwigTemplate_5c156ef9728bfe0aafa87942ed178f54edc7c06580799a525f77e179a74efeca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::enligne.html.twig", "crowdBundle:Evenement:show.html.twig", 3);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 4
    public function block_css($context, array $blocks = array())
    {
        // line 5
        echo "

";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "     <!-- End Blog Post
     End Product Image & Available 
    <h1>Evenement</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>dateDebut</th>
                <td></td>
            </tr>
            <tr>
                <th>dateFin</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
           
           
            <tr>
                <th>description</th>
                <td></td>
            </tr>
            <tr>
            </tr>
            
            <tr>
                <th>id</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            
            <tr>
                <th>idInvestissement</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idInvestissement", array()), "html", null, true);
        echo "</td>
            </tr>
            
            
             <tr>
                <th>nomEvenement</th>
                <td></td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
       
    </li>
    <li>";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
    
    Colors -->
   
    
    
    
      <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Blog Post -->
                <div class=\"col-sm-offset-2 col-sm-8\">
                  
                    <div class=\"blog-post blog-single-post\">
                        <div class=\"single-post-title\">
                            <h3>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomEvenement", array()), "html", null, true);
        echo "</h3>
                        </div>
                        <div class=\"single-post-info\">
                            <i class=\"glyphicon glyphicon-time\"></i>";
        // line 81
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut", array()), "Y-m-d H:i:s"), "html", null, true);
        echo " ------  ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "s         <a href=\"#\" title=\"Show Comments\"><i class=\"glyphicon glyphicon-comment\"></i>11</a>
                        </div>
                        
                         <td>  <div class=\"single-post-image\">
                                    <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/capt.jpg"), "html", null, true);
        echo "\" alt=\"Post Title\"></div>
                                    
                           </td>
                        <tr><td><p>
                                ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "
                               </p></td>
                           
                        </tr>
                        <tr><td><div class=\"single-post-content\">
                            <h3>SHOW</h3>
                            <html lang=\"en\">

                      <head>
  <title>Bootstrap Example</title>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
  <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
</head>
<body>
                            <div class=\"container\">
                            <button data-placement=\"top\" rel=\"tooltip\" title=\"Support Us\" class=\" btn btn-info\" type=\"submit\"> <a href=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("evenement");
        echo " \">  Back to the list </a>   </button> 
                                      <button data-placement=\"top\" rel=\"tooltip\" title=\"Support Us\" class=\" btn btn-info\" type=\"submit\"><a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idEvenement", array()))), "html", null, true);
        echo "\">      Edit     </a></button>
                       </div>
</body>
                                </div></td>
                             
                        </tr>
                        
                        
                        <center> <td> ";
        // line 116
        echo $this->env->getExtension('ivory_google_map')->renderMap((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo " </td></center>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Blog Post -->

    
    
      
    
";
    }

    // line 132
    public function block_javascripts($context, array $blocks = array())
    {
        // line 133
        echo "


";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Evenement:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 133,  202 => 132,  183 => 116,  172 => 108,  168 => 107,  147 => 89,  140 => 85,  131 => 81,  125 => 78,  106 => 62,  96 => 55,  80 => 42,  72 => 37,  56 => 24,  42 => 12,  39 => 11,  33 => 5,  30 => 4,  11 => 3,);
    }
}
/* */
/* */
/* {% extends "::enligne.html.twig" %}*/
/* {% block css %}*/
/* */
/* */
/* {% endblock%}*/
/* */
/* */
/* */
/* {% block body %}*/
/*      <!-- End Blog Post*/
/*      End Product Image & Available */
/*     <h1>Evenement</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>dateDebut</th>*/
/*                 <td></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>dateFin</th>*/
/*                 <td>{{ entity.dateFin|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*            */
/*            */
/*             <tr>*/
/*                 <th>description</th>*/
/*                 <td></td>*/
/*             </tr>*/
/*             <tr>*/
/*             </tr>*/
/*             */
/*             <tr>*/
/*                 <th>id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             */
/*             <tr>*/
/*                 <th>idInvestissement</th>*/
/*                 <td>{{ entity.idInvestissement }}</td>*/
/*             </tr>*/
/*             */
/*             */
/*              <tr>*/
/*                 <th>nomEvenement</th>*/
/*                 <td></td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('evenement') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*        */
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/*     */
/*     Colors -->*/
/*    */
/*     */
/*     */
/*     */
/*       <div class="section">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <!-- Blog Post -->*/
/*                 <div class="col-sm-offset-2 col-sm-8">*/
/*                   */
/*                     <div class="blog-post blog-single-post">*/
/*                         <div class="single-post-title">*/
/*                             <h3>{{ entity.nomEvenement }}</h3>*/
/*                         </div>*/
/*                         <div class="single-post-info">*/
/*                             <i class="glyphicon glyphicon-time"></i>{{ entity.dateDebut|date('Y-m-d H:i:s') }} ------  {{ entity.dateFin|date('Y-m-d H:i:s') }}s         <a href="#" title="Show Comments"><i class="glyphicon glyphicon-comment"></i>11</a>*/
/*                         </div>*/
/*                         */
/*                          <td>  <div class="single-post-image">*/
/*                                     <img src="{{asset('assets/img/capt.jpg')}}" alt="Post Title"></div>*/
/*                                     */
/*                            </td>*/
/*                         <tr><td><p>*/
/*                                 {{ entity.description }}*/
/*                                </p></td>*/
/*                            */
/*                         </tr>*/
/*                         <tr><td><div class="single-post-content">*/
/*                             <h3>SHOW</h3>*/
/*                             <html lang="en">*/
/* */
/*                       <head>*/
/*   <title>Bootstrap Example</title>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/*   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* </head>*/
/* <body>*/
/*                             <div class="container">*/
/*                             <button data-placement="top" rel="tooltip" title="Support Us" class=" btn btn-info" type="submit"> <a href="{{ path('evenement') }} ">  Back to the list </a>   </button> */
/*                                       <button data-placement="top" rel="tooltip" title="Support Us" class=" btn btn-info" type="submit"><a href="{{ path('evenement_edit', { 'id': entity.idEvenement }) }}">      Edit     </a></button>*/
/*                        </div>*/
/* </body>*/
/*                                 </div></td>*/
/*                              */
/*                         </tr>*/
/*                         */
/*                         */
/*                         <center> <td> {{ google_map(map) }} </td></center>*/
/*                        */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <!-- End Blog Post -->*/
/* */
/*     */
/*     */
/*       */
/*     */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
