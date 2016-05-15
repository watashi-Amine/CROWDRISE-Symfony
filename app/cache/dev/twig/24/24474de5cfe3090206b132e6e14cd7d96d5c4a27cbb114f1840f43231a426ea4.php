<?php

/* crowdBundle:Probleme:show.html.twig */
class __TwigTemplate_2a30af2afa1a13ccb29c4b529dfd414e71c240d135678cac6e70f653484a51b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::enligne.html.twig", "crowdBundle:Probleme:show.html.twig", 2);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
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

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "
    <style>
        .modal-header, h4, .close {
            background-color: #5cb85c;
            color:white !important;
            text-align: center;
            font-size: 30px;
        }
        .modal-footer {
            background-color: #f9f9f9;
        }
    </style>  
";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "<!--=== Breadcrumbs ===-->
    <div class=\"breadcrumbs\">
        <div class=\"container\">
            <h1 class=\"pull-left\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomProbleme", array()), "html", null, true);
        echo "</h1>
            <ul class=\"pull-right breadcrumb\">
                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("probleme");
        echo "\">Retour à la liste</a></li>
                
            </ul>
        </div>
    </div><!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    <!--=== Content Part ===-->
    <div class=\"container content\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <h2 class=\"title-v2\">Description</h2>
                <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</p>
                <h3> Competence requises: ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "competence", array()), "html", null, true);
        echo "</h3>
                <p> Date de publication ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "datePublication", array()), "Y-m-d"), "html", null, true);
        echo " </p>
                <p> Documentation à telecharger <p>
                
                     <div class=\"container\">
                                            <!-- Trigger the modal with a button -->
                                            <button type=\"button\" class=\"btn-u\" id=\"myBtn\">Postuler pour ce travail</button>

                                            <!-- Modal -->
                                            <div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
                                                <div class=\"modal-dialog\">

                                                    <!-- Modal content-->
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\" style=\"padding:35px 50px;\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                                            <h4><span class=\"glyphicon glyphicon-lock\"></span>On attend ta Solution </h4>
                                                        </div>
                                                        <div class=\"modal-body\" style=\"padding:40px 50px;\">
                                                            <form  action=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("solution_ajouter", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idProbleme", array()))), "html", null, true);
        echo "\" method=\"post\" >
                                                                <div class=\"form-group\">
                                                                    <label for=\"usrname\"><span class=\"glyphicon glyphicon-user\"></span> Prix </label>
                                                                    <input type=\"text\" class=\"form-control\" name=\"budjetS\" placeholder=\"upload your cv\">
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label for=\"psw\"><span class=\"glyphicon glyphicon-eye-open\"></span> Date de Depot  </label>
                                                                    <input type=\"text\" class=\"form-control\" name=\"\" id=\"psw\" placeholder=\"choisir tes competences\">
                                                                </div>
                                                                <div class=\"checkbox\">
                                                                    <label><input type=\"checkbox\" value=\"\" checked>Remember me</label>
                                                                </div>
                                                                        <button class=\"btn btn-success btn-block\" type=\"submit\"><span class=\"glyphicon glyphicon-off\"></span> Ajouter une sol</button>
                                                            </form>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <div>
                                                     <button type=\"submit\" class=\"btn btn-danger btn-default pull-left\" data-dismiss=\"modal\">   <span class=\"glyphicon glyphicon-remove\"></span> Cancel</button>
                                                        <p>Not a member? <a href=\"#\">Sign Up</a></p>
                                                        <p>Forgot <a href=\"#\">Password?</a></p>
                                                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                     </div>
            </div>
            <div class=\"col-md-6\">
                <img class=\"img-responsive\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/mockup/img4.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
        </div>
    </div><!--/container-->
    <!--=== End Content Part ===-->

    <!--=== News Block ===-->
    <div class=\"bg-grey\">
        <div class=\"container content-sm\">
            <div class=\"text-center margin-bottom-50\">
                <h2 class=\"title-v2 title-center\">Listes des Postulations </h2>
                <p class=\"space-lg-hor\">If you are going to use a <span class=\"color-green\">passage of Lorem Ipsum</span>, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making <span class=\"color-green\">this the first</span> true generator on the Internet.</p>
            </div>

           
            
           ";
        // line 104
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("crowdBundle:Solution:solByidP", array("idP" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idprobleme", array()))), array());
        // line 105
        echo "            
            
        </div>
    </div>
    <!--=== End News Block ===-->




       


 ";
    }

    // line 120
    public function block_javascript($context, array $blocks = array())
    {
        // line 121
        echo "        
<script>
\$(document).ready(function(){
    \$(\"#myBtn\").click(function(){
        \$(\"#myModal\").modal();
    });
});
</script>

";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Probleme:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 121,  174 => 120,  158 => 105,  156 => 104,  137 => 88,  106 => 60,  85 => 42,  81 => 41,  77 => 40,  62 => 28,  57 => 26,  52 => 23,  49 => 21,  33 => 7,  30 => 6,  11 => 2,);
    }
}
/* */
/* {% extends '::enligne.html.twig' %}*/
/* */
/* */
/* */
/* {% block javascripts %}*/
/* */
/*     <style>*/
/*         .modal-header, h4, .close {*/
/*             background-color: #5cb85c;*/
/*             color:white !important;*/
/*             text-align: center;*/
/*             font-size: 30px;*/
/*         }*/
/*         .modal-footer {*/
/*             background-color: #f9f9f9;*/
/*         }*/
/*     </style>  */
/* {% endblock %}*/
/* */
/* {% block body -%}*/
/* */
/*     <!--=== Breadcrumbs ===-->*/
/*     <div class="breadcrumbs">*/
/*         <div class="container">*/
/*             <h1 class="pull-left">{{ entity.nomProbleme }}</h1>*/
/*             <ul class="pull-right breadcrumb">*/
/*                 <li><a href="{{ path('probleme') }}">Retour à la liste</a></li>*/
/*                 */
/*             </ul>*/
/*         </div>*/
/*     </div><!--/breadcrumbs-->*/
/*     <!--=== End Breadcrumbs ===-->*/
/* */
/*     <!--=== Content Part ===-->*/
/*     <div class="container content">*/
/*         <div class="row">*/
/*             <div class="col-md-6">*/
/*                 <h2 class="title-v2">Description</h2>*/
/*                 <p>{{ entity.description }}</p>*/
/*                 <h3> Competence requises: {{ entity.competence }}</h3>*/
/*                 <p> Date de publication {{ entity.datePublication | date('Y-m-d')  }} </p>*/
/*                 <p> Documentation à telecharger <p>*/
/*                 */
/*                      <div class="container">*/
/*                                             <!-- Trigger the modal with a button -->*/
/*                                             <button type="button" class="btn-u" id="myBtn">Postuler pour ce travail</button>*/
/* */
/*                                             <!-- Modal -->*/
/*                                             <div class="modal fade" id="myModal" role="dialog">*/
/*                                                 <div class="modal-dialog">*/
/* */
/*                                                     <!-- Modal content-->*/
/*                                                     <div class="modal-content">*/
/*                                                         <div class="modal-header" style="padding:35px 50px;">*/
/*                                                             <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                                                             <h4><span class="glyphicon glyphicon-lock"></span>On attend ta Solution </h4>*/
/*                                                         </div>*/
/*                                                         <div class="modal-body" style="padding:40px 50px;">*/
/*                                                             <form  action="{{ path('solution_ajouter',{ 'id': entity.idProbleme }) }}" method="post" >*/
/*                                                                 <div class="form-group">*/
/*                                                                     <label for="usrname"><span class="glyphicon glyphicon-user"></span> Prix </label>*/
/*                                                                     <input type="text" class="form-control" name="budjetS" placeholder="upload your cv">*/
/*                                                                 </div>*/
/*                                                                 <div class="form-group">*/
/*                                                                     <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Date de Depot  </label>*/
/*                                                                     <input type="text" class="form-control" name="" id="psw" placeholder="choisir tes competences">*/
/*                                                                 </div>*/
/*                                                                 <div class="checkbox">*/
/*                                                                     <label><input type="checkbox" value="" checked>Remember me</label>*/
/*                                                                 </div>*/
/*                                                                         <button class="btn btn-success btn-block" type="submit"><span class="glyphicon glyphicon-off"></span> Ajouter une sol</button>*/
/*                                                             </form>*/
/*                                                         </div>*/
/*                                                         <div class="modal-footer">*/
/*                                                             <div>*/
/*                                                      <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">   <span class="glyphicon glyphicon-remove"></span> Cancel</button>*/
/*                                                         <p>Not a member? <a href="#">Sign Up</a></p>*/
/*                                                         <p>Forgot <a href="#">Password?</a></p>*/
/*                                                     </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                      </div>*/
/*             </div>*/
/*             <div class="col-md-6">*/
/*                 <img class="img-responsive" src="{{asset('assets/img/mockup/img4.jpg')}}" alt="">*/
/*             </div>*/
/*         </div>*/
/*     </div><!--/container-->*/
/*     <!--=== End Content Part ===-->*/
/* */
/*     <!--=== News Block ===-->*/
/*     <div class="bg-grey">*/
/*         <div class="container content-sm">*/
/*             <div class="text-center margin-bottom-50">*/
/*                 <h2 class="title-v2 title-center">Listes des Postulations </h2>*/
/*                 <p class="space-lg-hor">If you are going to use a <span class="color-green">passage of Lorem Ipsum</span>, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making <span class="color-green">this the first</span> true generator on the Internet.</p>*/
/*             </div>*/
/* */
/*            */
/*             */
/*            {%  render(controller('crowdBundle:Solution:solByidP', {'idP':  entity.idprobleme  }))  %}*/
/*             */
/*             */
/*         </div>*/
/*     </div>*/
/*     <!--=== End News Block ===-->*/
/* */
/* */
/* */
/* */
/*        */
/* */
/* */
/*  {% endblock %}*/
/*  */
/*  */
/*  {% block javascript %}*/
/*         */
/* <script>*/
/* $(document).ready(function(){*/
/*     $("#myBtn").click(function(){*/
/*         $("#myModal").modal();*/
/*     });*/
/* });*/
/* </script>*/
/* */
/* {% endblock %}*/
