<?php

/* crowdBundle:Projet:edit.html.twig */
class __TwigTemplate_10c428d6d8076d75403cc48e4e6713481712010383fe575cf97eedc5d61dd827 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::enligne.html.twig", "crowdBundle:Projet:edit.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        // line 4
        echo "                        ";
        $this->loadTemplate("::sidebar.html.twig", "crowdBundle:Projet:edit.html.twig", 4)->display($context);
        // line 5
        echo "
        ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "<div class=\"section section-breadcrumbs\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1>Editer Votre Projet</h1>
                </div>
            </div>
        </div>
    </div>
  \t\t
\t
    
    
    \t\t\t
                <!-- Basic Form -->
                
                <div  class=\"container-fluid\">
                    
                 
                       
\t\t\t\t ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("id" => "sky-form1", "class" => "sky-form")));
        echo "\t   
                    <header>Votre Projet</header>

                    <fieldset>
                         <!-- nom projet -->
                         <div class=\"row\">
                              <section class=\"col col-1\">
                               
                            </section>
                             <section class=\"col col-10\">
                                <label class=\"input\">
                                    
                                    <i class=\"icon-append fa fa-briefcase\"></i>
                                     
    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nomProjet", array()), 'widget', array("attr" => array("class" => "span12", "placeholder" => "Veuillez saisir le nom de votre projet")));
        echo "
     <b class=\"tooltip tooltip-bottom-right\">Le nom du projet doit etre court et  significatif</b>
     <div class=\"note note-success\">Ce Champ est Obligatoir.</div>
     
                                </label>
                            </section>
\t\t\t\t\t\t\t
                           
                        </div>
<!-- fin nom projet -->
<!-- resume projet -->
\t\t\t\t\t\t<div class=\"row\">
                                                    <section class=\"col col-1\">
                               
                            </section>
\t\t\t\t\t\t<section class=\"col col-10\">
                            <label class=\"textarea\">
                                <i class=\"icon-append fa fa-comment\"></i>
                                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "resume", array()), 'widget', array("attr" => array("class" => "span12", "placeholder" => "Veuillez saisir une description de votre projet", "rows" => "10")));
        echo "
   <b class=\"tooltip tooltip-bottom-right\">Un ou deux paragraphe ou vous specifier les pricipaux objectifs de votre projet</b>
        <div class=\"note note-success\">Ce Champ est Obligatoir.</div>

                            </label>
                        </section>
\t\t\t\t\t\t </div>
\t\t\t\t\t\t
                        <!-- fin resume projet -->
                         <!-- image projet -->
                        
                            <div class=\"row\">
                              <section class=\"col col-1\">
                                </section>
                        
                         <section class=\"col col-5\">
                        
                        <section>
                            <label for=\"file\" class=\"input input-file\">
                                <div class=\"button\">
                                        ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'widget');
        echo "
                                    Image
                                </div>
                                <input type=\"text\" placeholder= \" Image de votre projet \" readonly>
                            </label>
                        </section>
                            </section>
  
                     
                        
                          <!-- end image projet -->
                         <!--  fichier projet -->
                         <section class=\"col col-5\">
                        
                        <section>
                            <label for=\"file\" class=\"input input-file\">
                                <div class=\"button\">
                                        ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fichier", array()), 'widget');
        echo "
                                        
                                    Fichier 
                                </div>
                                             

                                <input type=\"text\" placeholder=\" business plan ou autre fichier explicatif \" readonly>
                            </label>
                                        <div class=\"note note-success\">Le fichier ne doit pas depasser les 10 Mo.</div>
                        </section>
                            </section>
  
                      </div>
                         <!-- end fichier projet -->
                        <!-- Budget projet -->
                        <div class=\"row\">
                            <section class=\"col col-1\">
                                  </section>
                            <section class=\"col col-10\">
                         <div class=\"input-group\">
                                  <b class=\"tooltip tooltip-bottom-right\"> en Dinard Tunisien</b>
                                    <span class=\"input-group-addon\">DTN</span> ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "budjet", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "veuillez saisir le budget souhaité")));
        echo "
                                    
                               
                                    <span class=\"input-group-addon\">.000</span>
                                </div>
                                         <div class=\"note note-success\">Ce Champ est Obligatoir.</div>

                                </section>
                             </div>
                         <!--end Budget projet -->
                          <!--cat&type projet -->
                          <div class=\"row\">
                            <section class=\"col col-1\">
                           </section>
                          
                         
                                     
                             <section class=\"col col-5\">
                            
                                <label class=\"select\">
                                      ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idCategorieProjet", array()), 'widget', array("placeholder" => "Categorie", "attr" => array("class" => "select")));
        echo " 
                                      <div class=\"note note-success\">Categorie n'est pas une option valide.</div>
                                    <i></i>
                                </label>
                            </section>
                                    <section class=\"col col-5\">
                            
                                <label class=\"select\">
                                      ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "idType", array()), 'widget', array("placeholder" => "Type", "attr" => array("class" => "select")));
        echo " 
                                       <div class=\"note note-success\">Type n'est pas une option valide.</div>
                                       
                                    
                                    <i></i>
                                </label>
                            </section>     
                                   
                                      <!--end cat&type projet -->    
                             </div>
                                   
                                          <!--submit  projet -->   
                                          <footer>
                                           <section class=\"col col-1\">
                                                </section> 
                                            <section class=\"col col-4\">
                 <button type=\"submit\" class=\"btn-u\"><a href=\"";
        // line 174
        echo $this->env->getExtension('routing')->getPath("projet");
        echo "\">Tout les projets</a></button>

                                                </section> 
                                           
                                            <section class=\"col col-4\">
                                ";
        // line 179
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget', array("label" => "Modifier", "attr" => array("class" => "btn-u")));
        echo "  \t              
         ";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'rest');
        echo "\t\t\t   
\t\t\t";
        // line 181
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
        
                         
                                            
                                            </section>
                         <section class=\"col col-3\">
                                   ";
        // line 187
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "                                 

         
  </section>  
             
                        <div class=\"progress\"></div>
                    </footer>
                         
                           <!--end submit  projet -->   
                         
                         
                         
                         
                         
                         
                         
             
                <!-- End Order Form -->
\t\t\t\t\t   
\t\t\t
                        \t\t   
\t
";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Projet:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 187,  239 => 181,  235 => 180,  231 => 179,  223 => 174,  204 => 158,  193 => 150,  170 => 130,  146 => 109,  126 => 92,  103 => 72,  82 => 54,  65 => 40,  43 => 20,  40 => 8,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends '::enligne.html.twig' %}*/
/* */
/*   {% block navbar %}*/
/*                         {% include '::sidebar.html.twig' %}*/
/* */
/*         {% endblock %}*/
/* */
/* {% block body -%}*/
/*     */
/*    */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*         <div class="section section-breadcrumbs">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <h1>Editer Votre Projet</h1>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*   		*/
/* 	*/
/*     */
/*     */
/*     			*/
/*                 <!-- Basic Form -->*/
/*                 */
/*                 <div  class="container-fluid">*/
/*                     */
/*                  */
/*                        */
/* 				 {{ form_start(edit_form, {'attr': {'id': 'sky-form1','class': 'sky-form'}}) }}	   */
/*                     <header>Votre Projet</header>*/
/* */
/*                     <fieldset>*/
/*                          <!-- nom projet -->*/
/*                          <div class="row">*/
/*                               <section class="col col-1">*/
/*                                */
/*                             </section>*/
/*                              <section class="col col-10">*/
/*                                 <label class="input">*/
/*                                     */
/*                                     <i class="icon-append fa fa-briefcase"></i>*/
/*                                      */
/*     {{ form_widget(edit_form.nomProjet, { 'attr': {'class': "span12",'placeholder': "Veuillez saisir le nom de votre projet"} }) }}*/
/*      <b class="tooltip tooltip-bottom-right">Le nom du projet doit etre court et  significatif</b>*/
/*      <div class="note note-success">Ce Champ est Obligatoir.</div>*/
/*      */
/*                                 </label>*/
/*                             </section>*/
/* 							*/
/*                            */
/*                         </div>*/
/* <!-- fin nom projet -->*/
/* <!-- resume projet -->*/
/* 						<div class="row">*/
/*                                                     <section class="col col-1">*/
/*                                */
/*                             </section>*/
/* 						<section class="col col-10">*/
/*                             <label class="textarea">*/
/*                                 <i class="icon-append fa fa-comment"></i>*/
/*                                     {{ form_widget(edit_form.resume, { 'attr': {'class': "span12",'placeholder': "Veuillez saisir une description de votre projet",'rows':'10'} }) }}*/
/*    <b class="tooltip tooltip-bottom-right">Un ou deux paragraphe ou vous specifier les pricipaux objectifs de votre projet</b>*/
/*         <div class="note note-success">Ce Champ est Obligatoir.</div>*/
/* */
/*                             </label>*/
/*                         </section>*/
/* 						 </div>*/
/* 						*/
/*                         <!-- fin resume projet -->*/
/*                          <!-- image projet -->*/
/*                         */
/*                             <div class="row">*/
/*                               <section class="col col-1">*/
/*                                 </section>*/
/*                         */
/*                          <section class="col col-5">*/
/*                         */
/*                         <section>*/
/*                             <label for="file" class="input input-file">*/
/*                                 <div class="button">*/
/*                                         {{ form_widget(edit_form.image) }}*/
/*                                     Image*/
/*                                 </div>*/
/*                                 <input type="text" placeholder= " Image de votre projet " readonly>*/
/*                             </label>*/
/*                         </section>*/
/*                             </section>*/
/*   */
/*                      */
/*                         */
/*                           <!-- end image projet -->*/
/*                          <!--  fichier projet -->*/
/*                          <section class="col col-5">*/
/*                         */
/*                         <section>*/
/*                             <label for="file" class="input input-file">*/
/*                                 <div class="button">*/
/*                                         {{ form_widget(edit_form.fichier) }}*/
/*                                         */
/*                                     Fichier */
/*                                 </div>*/
/*                                              */
/* */
/*                                 <input type="text" placeholder=" business plan ou autre fichier explicatif " readonly>*/
/*                             </label>*/
/*                                         <div class="note note-success">Le fichier ne doit pas depasser les 10 Mo.</div>*/
/*                         </section>*/
/*                             </section>*/
/*   */
/*                       </div>*/
/*                          <!-- end fichier projet -->*/
/*                         <!-- Budget projet -->*/
/*                         <div class="row">*/
/*                             <section class="col col-1">*/
/*                                   </section>*/
/*                             <section class="col col-10">*/
/*                          <div class="input-group">*/
/*                                   <b class="tooltip tooltip-bottom-right"> en Dinard Tunisien</b>*/
/*                                     <span class="input-group-addon">DTN</span> {{ form_widget(edit_form.budjet, { 'attr': {'class': "form-control",'placeholder': "veuillez saisir le budget souhaité"} }) }}*/
/*                                     */
/*                                */
/*                                     <span class="input-group-addon">.000</span>*/
/*                                 </div>*/
/*                                          <div class="note note-success">Ce Champ est Obligatoir.</div>*/
/* */
/*                                 </section>*/
/*                              </div>*/
/*                          <!--end Budget projet -->*/
/*                           <!--cat&type projet -->*/
/*                           <div class="row">*/
/*                             <section class="col col-1">*/
/*                            </section>*/
/*                           */
/*                          */
/*                                      */
/*                              <section class="col col-5">*/
/*                             */
/*                                 <label class="select">*/
/*                                       {{form_widget(edit_form.idCategorieProjet, {'placeholder': "Categorie", 'attr': {'class': "select"}})}} */
/*                                       <div class="note note-success">Categorie n'est pas une option valide.</div>*/
/*                                     <i></i>*/
/*                                 </label>*/
/*                             </section>*/
/*                                     <section class="col col-5">*/
/*                             */
/*                                 <label class="select">*/
/*                                       {{form_widget(edit_form.idType, {'placeholder': "Type", 'attr': {'class': "select"}})}} */
/*                                        <div class="note note-success">Type n'est pas une option valide.</div>*/
/*                                        */
/*                                     */
/*                                     <i></i>*/
/*                                 </label>*/
/*                             </section>     */
/*                                    */
/*                                       <!--end cat&type projet -->    */
/*                              </div>*/
/*                                    */
/*                                           <!--submit  projet -->   */
/*                                           <footer>*/
/*                                            <section class="col col-1">*/
/*                                                 </section> */
/*                                             <section class="col col-4">*/
/*                  <button type="submit" class="btn-u"><a href="{{path('projet')}}">Tout les projets</a></button>*/
/* */
/*                                                 </section> */
/*                                            */
/*                                             <section class="col col-4">*/
/*                                 {{form_widget(edit_form.submit, { 'label':'Modifier','attr': {'class': "btn-u"}})}}  	              */
/*          {{ form_rest(edit_form) }}			   */
/* 			{{ form_end(edit_form) }}*/
/*         */
/*                          */
/*                                             */
/*                                             </section>*/
/*                          <section class="col col-3">*/
/*                                    {{ form(delete_form) }}                                 */
/* */
/*          */
/*   </section>  */
/*              */
/*                         <div class="progress"></div>*/
/*                     </footer>*/
/*                          */
/*                            <!--end submit  projet -->   */
/*                          */
/*                          */
/*                          */
/*                          */
/*                          */
/*                          */
/*                          */
/*              */
/*                 <!-- End Order Form -->*/
/* 					   */
/* 			*/
/*                         		   */
/* 	*/
/* {% endblock %}*/
/* */
