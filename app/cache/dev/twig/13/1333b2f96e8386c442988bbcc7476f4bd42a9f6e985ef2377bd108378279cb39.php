<?php

/* crowdBundle:Probleme:newfree.html.twig */
class __TwigTemplate_2181c6e992d8fcba193092073a310944a21576bc38474e43bdd73804b4ac3547 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::enligne.html.twig", "crowdBundle:Probleme:newfree.html.twig", 1);
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

    // line 4
    public function block_navbar($context, array $blocks = array())
    {
        // line 5
        echo "                        ";
        $this->loadTemplate("::sidebar.html.twig", "crowdBundle:Probleme:newfree.html.twig", 5)->display($context);
        // line 6
        echo "
        ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"section-inner well auth-box\">
        
        <form id=\"project-form\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("probleme_ajout");
        echo "\" method=\"post\"  enctype=\"multipart/form-data\" class=\"fl-form has-numbers large-form PostProject-form is-ppp\">
    <input type=\"hidden\" name=\"id\" value=\"\">
    <input type=\"hidden\" name=\"submitAction\" value=\"publish project\">
    <input type=\"hidden\" name=\"action\" value=\"updatePublish\">
    <input type=\"hidden\" id=\"newPriceRangeTest\" name=\"newPriceRangeTest\" value=\"\">
   
        
       
            
                <legend>De quel type de travail avez-vous besoin ?</legend>
                
                   
                        <select id=\"project-category\" name=\"typeprobleme\">
                            
                                <option value=\"Web\">
                                    Sites Web IT &amp; logiciel
                                </option>
                            
                                <option value=\"Mobile\">
                                    Mobile
                                </option>
                            
                                <option value=\"Rédaction\">
                                    Rédaction
                                </option>
                            
                                <option value=\"4\">
                                    Conception
                                </option>
                            
                                <option value=\"5\">
                                    Saisie de données
                                </option>
                            
                                <option value=\"6\">
                                    Approvisionnement et fabrication de produits 
                                </option>
                            
                                <option value=\"7\">
                                    Ventes &amp; Marketing
                                </option>
                            
                                <option value=\"8\">
                                    Commerce, Comptabilité &amp; Juridique
                                </option>
                            
                                <option value=\"9\">
                                    Services et travaux locaux
                                </option>
                                
                                <option value=\"9\">
                                    other
                                </option>
                          </select>
                 
                   

                        
                    
                
           
      
        
        
        
            <fieldset class=\"\">
                <legend>Sur quoi porte votre projet ?</legend>
                
                   
                        
                        <label for=\"project-name\" class=\"PostProject-stepLabel\" >Nom du projet : 
                            
                        </label>
                        

                        

                        <input type=\"text\" placeholder=\"ex. Construire un site Internet\" id=\"project-name\" name=\"nomprobleme\" class=\"form-control\">

                        
                        <div class=\"form-error\">
                            <span class=\"fl-icon-warning-sign\"></span>
                            <span class=\"fl-icon-close\"></span>
                            <span class=\"error-text\"></span>
                        </div>
                        
                  
                    
                   
                
            </fieldset>
        
            <fieldset class=\"\">
                <legend>Dites-nous en plus concernant votre projet.</legend>
                
                    
                        <label for=\"competence\" class=\"PostProject-stepLabel\">Quelles compétences sont nécessaires ? 
                           
                        </label>
                        <label class=\"checkbox-inline\"><input type=\"checkbox\" name=\"competence[]\" value=\"WEB\">WEB</label>
<label class=\"checkbox-inline\"><input type=\"checkbox\" name=\"competence[]\" value=\"Androide\">Androide</label>
<label class=\"checkbox-inline\"><input type=\"checkbox\" name=\"competence[]\" value=\"Design\">Design</label>
                        <div class=\"form-error\">
                            <span class=\"fl-icon-warning-sign\"></span>
                            <span class=\"fl-icon-close\"></span>
                            <span class=\"error-text\"></span>
                        </div>

                     <div class=\"form-group\">
  <label for=\"description\">Decriver votre projet:</label>
  <textarea class=\"form-control\" rows=\"5\" id=\"description\" name=\"description\"></textarea>
</div>
                        
                         <div class=\"form-error\">
                            <span class=\"fl-icon-warning-sign\"></span>
                            <span class=\"fl-icon-close\"></span>
                            <span class=\"error-text\"></span>
                        </div>
               

                   <div id=\"fileupload-container\" class=\"file-uploader-area\">
    <span class=\"btn btn-plain btn-file-uploader\">
        <span class=\"fl-icon-plus\"></span>
        <span>Mettre en ligne des fichiers</span>
        <input type=\"file\" name=\"upload[]\" multiple=\"\" class=\"fileupload-input\">
        <input type=\"hidden\" name=\"fileset\" class=\"upload-fileset\">
    </span>
                
            <fieldset class=\"RadioTabs-wrapper\">
                <legend>Quel budget avez-vous en tête ? </legend>
               

                <!-- Fixed Budget -->
                   
                        
                        <div class=\"form-step-fieldContainer\">
                          Budjet  <select id=\"project-budget\" name=\"budgetP\"><option value=\"10-30 DTN\">Micro-projet (10-30 DTN)</option><option value=\"30-250  DTN\">Projet simple (30-250  DTN)</option><option value=\"250-750 DTN\" selected=\"selected\">Très petit projet (250-750 DTN)</option><option value=\"750-1500 DTN\">Petit projet (750-1500 DTN)</option><option value=\"1500-3000 DTN\">Projet moyen (1500-3000 DTN)</option><option value=\"3000-5000 DTN\">Grand projet (3000-5000 DTN)</option><option value=\"5000-10000 DTN\">Projet plus grand (5000-10000 DTN)</option><option value=\"10000-20000 DTN\">Projet très important (10000-20000 DTN)</option><option value=\"20000-50000 DTN\">Projet énorme (20000-50000 DTN)</option><option value=\"plus que 50000 DTN\">Projet majeur ( &gt;50000 DTN)</option><option value=\"custom\">Budget personnalisé</option></select>
                        </div>
                 
                   
                        <label for=\"duree\" class=\"PostProject-stepLabel\">Durée du projet :</label>
                        <select id=\"project-duration\" name=\"duree\">
                            
                            <option value=\"Moins d'une semaine\">
                            Moins d'une semaine
                            </option>
                            
                            <option value=\"1 semaine - 4 semaines\" selected=\"\">
                            1 semaine - 4 semaines
                            </option>
                            
                            <option value=\"1 mois - 3 mois\">
                            1 mois - 3 mois
                            </option>
                            
                            <option value=\"3 mois - 6 mois\">
                            3 mois - 6 mois
                            </option>
                            
                            <option value=\"Plus de 6 mois / en cours\">
                            Plus de 6 mois / en cours
                            </option>
                            
                            <option value=\"Sans certitude\">
                            Sans certitude
                            </option>
                            
                        </select>
                  
                    

                   
                
            </fieldset>
       
        
        
            <button id=\"post-project-submit\" type=\"submit\" class=\"btn btn-info btn-xlarge PostProject-btn\">Publiez un project maintenant</button>
            <p class=\"PostProject-terms terms-text\">
                
            </p>
       
    
</form>

        
           
        

    </div>
            ";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Probleme:newfree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  43 => 10,  40 => 8,  35 => 6,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends '::enligne.html.twig' %}*/
/* */
/* */
/*     {% block navbar %}*/
/*                         {% include '::sidebar.html.twig' %}*/
/* */
/*         {% endblock %}*/
/* {% block body -%}*/
/* */
/*      <div class="section-inner well auth-box">*/
/*         */
/*         <form id="project-form" action="{{ path('probleme_ajout') }}" method="post"  enctype="multipart/form-data" class="fl-form has-numbers large-form PostProject-form is-ppp">*/
/*     <input type="hidden" name="id" value="">*/
/*     <input type="hidden" name="submitAction" value="publish project">*/
/*     <input type="hidden" name="action" value="updatePublish">*/
/*     <input type="hidden" id="newPriceRangeTest" name="newPriceRangeTest" value="">*/
/*    */
/*         */
/*        */
/*             */
/*                 <legend>De quel type de travail avez-vous besoin ?</legend>*/
/*                 */
/*                    */
/*                         <select id="project-category" name="typeprobleme">*/
/*                             */
/*                                 <option value="Web">*/
/*                                     Sites Web IT &amp; logiciel*/
/*                                 </option>*/
/*                             */
/*                                 <option value="Mobile">*/
/*                                     Mobile*/
/*                                 </option>*/
/*                             */
/*                                 <option value="Rédaction">*/
/*                                     Rédaction*/
/*                                 </option>*/
/*                             */
/*                                 <option value="4">*/
/*                                     Conception*/
/*                                 </option>*/
/*                             */
/*                                 <option value="5">*/
/*                                     Saisie de données*/
/*                                 </option>*/
/*                             */
/*                                 <option value="6">*/
/*                                     Approvisionnement et fabrication de produits */
/*                                 </option>*/
/*                             */
/*                                 <option value="7">*/
/*                                     Ventes &amp; Marketing*/
/*                                 </option>*/
/*                             */
/*                                 <option value="8">*/
/*                                     Commerce, Comptabilité &amp; Juridique*/
/*                                 </option>*/
/*                             */
/*                                 <option value="9">*/
/*                                     Services et travaux locaux*/
/*                                 </option>*/
/*                                 */
/*                                 <option value="9">*/
/*                                     other*/
/*                                 </option>*/
/*                           </select>*/
/*                  */
/*                    */
/* */
/*                         */
/*                     */
/*                 */
/*            */
/*       */
/*         */
/*         */
/*         */
/*             <fieldset class="">*/
/*                 <legend>Sur quoi porte votre projet ?</legend>*/
/*                 */
/*                    */
/*                         */
/*                         <label for="project-name" class="PostProject-stepLabel" >Nom du projet : */
/*                             */
/*                         </label>*/
/*                         */
/* */
/*                         */
/* */
/*                         <input type="text" placeholder="ex. Construire un site Internet" id="project-name" name="nomprobleme" class="form-control">*/
/* */
/*                         */
/*                         <div class="form-error">*/
/*                             <span class="fl-icon-warning-sign"></span>*/
/*                             <span class="fl-icon-close"></span>*/
/*                             <span class="error-text"></span>*/
/*                         </div>*/
/*                         */
/*                   */
/*                     */
/*                    */
/*                 */
/*             </fieldset>*/
/*         */
/*             <fieldset class="">*/
/*                 <legend>Dites-nous en plus concernant votre projet.</legend>*/
/*                 */
/*                     */
/*                         <label for="competence" class="PostProject-stepLabel">Quelles compétences sont nécessaires ? */
/*                            */
/*                         </label>*/
/*                         <label class="checkbox-inline"><input type="checkbox" name="competence[]" value="WEB">WEB</label>*/
/* <label class="checkbox-inline"><input type="checkbox" name="competence[]" value="Androide">Androide</label>*/
/* <label class="checkbox-inline"><input type="checkbox" name="competence[]" value="Design">Design</label>*/
/*                         <div class="form-error">*/
/*                             <span class="fl-icon-warning-sign"></span>*/
/*                             <span class="fl-icon-close"></span>*/
/*                             <span class="error-text"></span>*/
/*                         </div>*/
/* */
/*                      <div class="form-group">*/
/*   <label for="description">Decriver votre projet:</label>*/
/*   <textarea class="form-control" rows="5" id="description" name="description"></textarea>*/
/* </div>*/
/*                         */
/*                          <div class="form-error">*/
/*                             <span class="fl-icon-warning-sign"></span>*/
/*                             <span class="fl-icon-close"></span>*/
/*                             <span class="error-text"></span>*/
/*                         </div>*/
/*                */
/* */
/*                    <div id="fileupload-container" class="file-uploader-area">*/
/*     <span class="btn btn-plain btn-file-uploader">*/
/*         <span class="fl-icon-plus"></span>*/
/*         <span>Mettre en ligne des fichiers</span>*/
/*         <input type="file" name="upload[]" multiple="" class="fileupload-input">*/
/*         <input type="hidden" name="fileset" class="upload-fileset">*/
/*     </span>*/
/*                 */
/*             <fieldset class="RadioTabs-wrapper">*/
/*                 <legend>Quel budget avez-vous en tête ? </legend>*/
/*                */
/* */
/*                 <!-- Fixed Budget -->*/
/*                    */
/*                         */
/*                         <div class="form-step-fieldContainer">*/
/*                           Budjet  <select id="project-budget" name="budgetP"><option value="10-30 DTN">Micro-projet (10-30 DTN)</option><option value="30-250  DTN">Projet simple (30-250  DTN)</option><option value="250-750 DTN" selected="selected">Très petit projet (250-750 DTN)</option><option value="750-1500 DTN">Petit projet (750-1500 DTN)</option><option value="1500-3000 DTN">Projet moyen (1500-3000 DTN)</option><option value="3000-5000 DTN">Grand projet (3000-5000 DTN)</option><option value="5000-10000 DTN">Projet plus grand (5000-10000 DTN)</option><option value="10000-20000 DTN">Projet très important (10000-20000 DTN)</option><option value="20000-50000 DTN">Projet énorme (20000-50000 DTN)</option><option value="plus que 50000 DTN">Projet majeur ( &gt;50000 DTN)</option><option value="custom">Budget personnalisé</option></select>*/
/*                         </div>*/
/*                  */
/*                    */
/*                         <label for="duree" class="PostProject-stepLabel">Durée du projet :</label>*/
/*                         <select id="project-duration" name="duree">*/
/*                             */
/*                             <option value="Moins d'une semaine">*/
/*                             Moins d'une semaine*/
/*                             </option>*/
/*                             */
/*                             <option value="1 semaine - 4 semaines" selected="">*/
/*                             1 semaine - 4 semaines*/
/*                             </option>*/
/*                             */
/*                             <option value="1 mois - 3 mois">*/
/*                             1 mois - 3 mois*/
/*                             </option>*/
/*                             */
/*                             <option value="3 mois - 6 mois">*/
/*                             3 mois - 6 mois*/
/*                             </option>*/
/*                             */
/*                             <option value="Plus de 6 mois / en cours">*/
/*                             Plus de 6 mois / en cours*/
/*                             </option>*/
/*                             */
/*                             <option value="Sans certitude">*/
/*                             Sans certitude*/
/*                             </option>*/
/*                             */
/*                         </select>*/
/*                   */
/*                     */
/* */
/*                    */
/*                 */
/*             </fieldset>*/
/*        */
/*         */
/*         */
/*             <button id="post-project-submit" type="submit" class="btn btn-info btn-xlarge PostProject-btn">Publiez un project maintenant</button>*/
/*             <p class="PostProject-terms terms-text">*/
/*                 */
/*             </p>*/
/*        */
/*     */
/* </form>*/
/* */
/*         */
/*            */
/*         */
/* */
/*     </div>*/
/*             {% endblock %}*/
/* */
