<?php

/* crowdBundle:Projet:recherche.html.twig */
class __TwigTemplate_40e48858a65724cd0a31ec9a54a911172d3b453e8e3a150b2b612addbbd3846f extends Twig_Template
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
        echo "            <form    action=\"";
        echo $this->env->getExtension('routing')->getPath("projet_recherche");
        echo "\" method=\"POST\"  >
       

<div class=\"input-group\">
          ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                       <span class=\"input-group-btn\">
                                 
                                <button class=\"btn-u\" type=\"submit\" >recherche</button>
                            </span>
                                       ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        </div>
                    </form>



                ";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Projet:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 10,  27 => 5,  19 => 1,);
    }
}
/*             <form    action="{{ path('projet_recherche') }}" method="POST"  >*/
/*        */
/* */
/* <div class="input-group">*/
/*           {{ form_widget(form.recherche ,{'attr': {'class': 'form-control'}}   )    }}*/
/*                                        <span class="input-group-btn">*/
/*                                  */
/*                                 <button class="btn-u" type="submit" >recherche</button>*/
/*                             </span>*/
/*                                        {{ form_widget(form) }}*/
/*                         </div>*/
/*                     </form>*/
/* */
/* */
/* */
/*                 */
