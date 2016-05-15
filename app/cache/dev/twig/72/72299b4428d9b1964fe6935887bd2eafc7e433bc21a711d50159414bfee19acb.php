<?php

/* crowdBundle:admin:recherche.html.twig */
class __TwigTemplate_a93e7bb0fc490a06a35919782288cdb74361b075efd69f6cbf13d2f69d6dac80 extends Twig_Template
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
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("rechercheUserTraitement");
        echo "\" method=\"POST\" class=\"form-search\">
\t\t\t\t\t\t\t\t<span  class=\"input-icon\">
                                                                        ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget', array("attr" => array("class" => "nav-search-input", "placeholder" => "rechercher user")));
        echo "

\t\t\t\t\t\t\t\t\t
                                                                        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t\t\t\t\t\t\t\t</span>
                                                                
\t\t\t\t\t\t\t</form>";
    }

    public function getTemplateName()
    {
        return "crowdBundle:admin:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  25 => 3,  19 => 1,);
    }
}
/* <form action="{{path('rechercheUserTraitement')}}" method="POST" class="form-search">*/
/* 								<span  class="input-icon">*/
/*                                                                         {{form_widget(form.recherche, {'attr': {'class': 'nav-search-input','placeholder':'rechercher user'}})}}*/
/* */
/* 									*/
/*                                                                         {{form(form)}}*/
/* 								</span>*/
/*                                                                 */
/* 							</form>*/
