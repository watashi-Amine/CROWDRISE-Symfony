<?php

/* crowdBundle:Projet:show.html.twig */
class __TwigTemplate_868547f7c26ff5bfd4237247824b060819f38301b1ef947b24e304308e779dc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":navigation:enligne.html.twig", "crowdBundle:Projet:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":navigation:enligne.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"col-md-3\">
 </div>
<div class=\"col-md-9\">
              

                <!--Blog Post-->
                <div class=\"blog margin-bottom-40\">
                    <h2><a href=\"blog_item_option1.html\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomProjet", array()), "html", null, true);
        echo " </a></h2>
                    <div class=\"blog-post-tags\">
                        <ul class=\"list-unstyled list-inline blog-info\">
                            <li><i class=\"fa fa-money\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "budjet", array()), "html", null, true);
        echo " TND</li>
                          
                        </ul>
                        <ul class=\"list-unstyled list-inline blog-tags\">
                            <li>
                                <i class=\"fa fa-tags\"></i>
                                <a href=\"#\">Technology</a>
                                <a href=\"#\">Education</a>
                                <a href=\"#\">Internet</a>
                                <a href=\"#\">Media</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"blog-img\">
                        <img width=\"700\" height=\"400 \" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imageFile", array()), "avatars"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                  
                    <p>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "resume", array()), "html", null, true);
        echo "</p>
              
                
                </div>
                <div>
                    <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fichierFile", array()), "html", null, true);
        echo "\" class=\"fa-file-pdf-o\" download> consulter info </a>
                </div>
                <div>
                    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("financerProjet", array("idp" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idprojet", array()))), "html", null, true);
        echo "\" class=\"btn-bitcoin\" > financer projet </a>
                </div>
                
                                                                          ";
        // line 42
        $this->loadTemplate("FOSCommentBundle:Thread:async.html.twig", "crowdBundle:Projet:show.html.twig", 42)->display(array_merge($context, array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomProjet", array()))));
        // line 43
        echo "
                <!--End Blog Post-->

                <!--Pagination-->
                <div class=\"text-center\">
                    <ul class=\"pagination\">
                        <li><a href=\"#\">«</a></li>
                        <li><a href=\"#\">1</a></li>
                        <li><a href=\"#\">2</a></li>
                        <li class=\"active\"><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">6</a></li>
                        <li><a href=\"#\">7</a></li>
                        <li><a href=\"#\">8</a></li>
                        <li><a href=\"#\">»</a></li>
                    </ul>
                </div>
                <!--End Pagination-->
            </div>
";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Projet:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 43,  89 => 42,  83 => 39,  77 => 36,  69 => 31,  63 => 28,  46 => 14,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends ":navigation:enligne.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div class="col-md-3">*/
/*  </div>*/
/* <div class="col-md-9">*/
/*               */
/* */
/*                 <!--Blog Post-->*/
/*                 <div class="blog margin-bottom-40">*/
/*                     <h2><a href="blog_item_option1.html">{{ entity.nomProjet }} </a></h2>*/
/*                     <div class="blog-post-tags">*/
/*                         <ul class="list-unstyled list-inline blog-info">*/
/*                             <li><i class="fa fa-money"></i> {{ entity.budjet }} TND</li>*/
/*                           */
/*                         </ul>*/
/*                         <ul class="list-unstyled list-inline blog-tags">*/
/*                             <li>*/
/*                                 <i class="fa fa-tags"></i>*/
/*                                 <a href="#">Technology</a>*/
/*                                 <a href="#">Education</a>*/
/*                                 <a href="#">Internet</a>*/
/*                                 <a href="#">Media</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="blog-img">*/
/*                         <img width="700" height="400 " src="{{asset(entity.imageFile,'avatars')}}" alt="">*/
/*                     </div>*/
/*                   */
/*                     <p>{{ entity.resume }}</p>*/
/*               */
/*                 */
/*                 </div>*/
/*                 <div>*/
/*                     <a href="{{ entity.fichierFile }}" class="fa-file-pdf-o" download> consulter info </a>*/
/*                 </div>*/
/*                 <div>*/
/*                     <a href="{{ path('financerProjet',{ 'idp' : entity.idprojet})}}" class="btn-bitcoin" > financer projet </a>*/
/*                 </div>*/
/*                 */
/*                                                                           {% include 'FOSCommentBundle:Thread:async.html.twig' with {'id': entity.nomProjet} %}*/
/* */
/*                 <!--End Blog Post-->*/
/* */
/*                 <!--Pagination-->*/
/*                 <div class="text-center">*/
/*                     <ul class="pagination">*/
/*                         <li><a href="#">«</a></li>*/
/*                         <li><a href="#">1</a></li>*/
/*                         <li><a href="#">2</a></li>*/
/*                         <li class="active"><a href="#">3</a></li>*/
/*                         <li><a href="#">4</a></li>*/
/*                         <li><a href="#">5</a></li>*/
/*                         <li><a href="#">6</a></li>*/
/*                         <li><a href="#">7</a></li>*/
/*                         <li><a href="#">8</a></li>*/
/*                         <li><a href="#">»</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <!--End Pagination-->*/
/*             </div>*/
/* {% endblock %}*/
/* */
