<?php

/* crowdBundle:Projet:menuCat.html.twig */
class __TwigTemplate_997a8d4e18500cee4bdeee2c6303d85e5f4a8e05bd8094f3bd236ac11d64ea67 extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 2
            echo "    
    
    

    <li>
        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("catproj", array("cat" => $this->getAttribute($context["cat"], "idCategorieProjet", array()))), "html", null, true);
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
        return "crowdBundle:Projet:menuCat.html.twig";
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
/* {% for cat in categories  %}*/
/*     */
/*     */
/*     */
/* */
/*     <li>*/
/*         <a href="{{path('catproj',{'cat' : cat.idCategorieProjet})}}"><i class="fa fa-tags"></i>  {{cat.categorie}}</a>*/
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
