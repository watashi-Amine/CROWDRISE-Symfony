<?php

/* crowdBundle:Evenement:choixCategorie.html.twig */
class __TwigTemplate_e6065e6da47c896ffd6e4b863c8e68730f3bbfb10a92209874554552ee9cc0e8 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 2
            echo "    
    
    

    <li>
        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catEv", array("cat" => $this->getAttribute($context["cat"], "idCategorieEvenement", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-tags\"></i>  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "categorie", array()), "html", null, true);
            echo "</a>
    
    </li>
    
    
    
    
    
    
    
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "crowdBundle:Evenement:choixCategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  23 => 2,  19 => 1,);
    }
}
/* {% for cat in categorie  %}*/
/*     */
/*     */
/*     */
/* */
/*     <li>*/
/*         <a href="{{path('catEv',{'cat' : cat.idCategorieEvenement})}}"><i class="fa fa-tags"></i>  {{cat.categorie}}</a>*/
/*     */
/*     </li>*/
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/* {% endfor   %}*/
/* */
