<?php

/* crowdBundle:user:mon_projet.html.twig */
class __TwigTemplate_28270df5e3f8c747a9db852f08ba3ec83a50b2838816376467ee66ec84e67ea4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::enligne.html.twig", "crowdBundle:user:mon_projet.html.twig", 1);
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

    // line 2
    public function block_navbar($context, array $blocks = array())
    {
        // line 3
        echo "                        ";
        $this->loadTemplate("::sidebar.html.twig", "crowdBundle:user:mon_projet.html.twig", 3)->display($context);
        // line 4
        echo "
        ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    
    
<div class=\"col-md-9\">
              
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 12
            echo "
                <!--Blog Post-->
                <div class=\"blog margin-bottom-40\">
                    <h2><a href=\"blog_item_option1.html\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomProjet", array()), "html", null, true);
            echo " </a></h2>
                    <div class=\"blog-post-tags\">
                        <ul class=\"list-unstyled list-inline blog-info\">
                            <li><i class=\"fa fa-money\"></i> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "budjet", array()), "html", null, true);
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
                        <img class=\"img-responsive\" width=\"400\" height=\"600 \" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["entity"], "imageFile", array()), "avatars"), "html", null, true);
            echo "\" alt=\"\">
                    </div>
                  
                    <p>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "resume", array()), "html", null, true);
            echo "</p>
                </div>
                <div>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fichierFile", array()), "html", null, true);
            echo "\" class=\"fa-file-pdf-o\" download> consulter info </a>
                </div>
                <!--End Blog Post-->

                <!--Pagination-->
                   <ul>
                    <li>
                        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_show", array("id" => $this->getAttribute($context["entity"], "idProjet", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_edit", array("id" => $this->getAttribute($context["entity"], "idProjet", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                <!--End Pagination-->
            </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    ";
    }

    public function getTemplateName()
    {
        return "crowdBundle:user:mon_projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 55,  109 => 48,  103 => 45,  93 => 38,  87 => 35,  81 => 32,  64 => 18,  58 => 15,  53 => 12,  49 => 11,  43 => 7,  40 => 6,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends '::enligne.html.twig' %}*/
/*   {% block navbar %}*/
/*                         {% include '::sidebar.html.twig' %}*/
/* */
/*         {% endblock %}*/
/* {%  block body %}*/
/*     */
/*     */
/* <div class="col-md-9">*/
/*               */
/*         {% for entity in entities %}*/
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
/*                         <img class="img-responsive" width="400" height="600 " src="{{asset(entity.imageFile,'avatars')}}" alt="">*/
/*                     </div>*/
/*                   */
/*                     <p>{{ entity.resume }}</p>*/
/*                 </div>*/
/*                 <div>*/
/*                     <a href="{{ entity.fichierFile }}" class="fa-file-pdf-o" download> consulter info </a>*/
/*                 </div>*/
/*                 <!--End Blog Post-->*/
/* */
/*                 <!--Pagination-->*/
/*                    <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('projet_show', { 'id': entity.idProjet }) }}">show</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('projet_edit', { 'id': entity.idProjet }) }}">edit</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <!--End Pagination-->*/
/*             </div>*/
/* */
/*                     {% endfor%}*/
/*     {% endblock %}*/
