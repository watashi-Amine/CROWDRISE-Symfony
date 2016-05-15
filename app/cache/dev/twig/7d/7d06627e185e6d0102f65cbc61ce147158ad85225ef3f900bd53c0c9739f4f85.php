<?php

/* crowdBundle:Evenement:index.html.twig */
class __TwigTemplate_b11c2a16fa0902349ad37beb2c6fe7fd5307bab07d94207722b23700cee3e669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::enligne.html.twig", "crowdBundle:Evenement:index.html.twig", 1);
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

    // line 3
    public function block_css($context, array $blocks = array())
    {
        // line 4
        echo "       <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("event/css/calendrier/calendrier.css"), "html", null, true);
        echo "\">

    ";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "   
  
    
    
    
<div class=\"container\">
     <div class=\"row\">
     <!-- Sidebar -->
                <div class=\"col-sm-3 blog-sidebar\">
                  
                     <h4>Chercher des Evenements par Categories</h4>
                    ";
        // line 20
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("crowdBundle:CtegorieEvenement:menu"), array());
        // line 21
        echo "                   
                   
                   
                </div>
                <!-- End Sidebar -->
    <div class=\"col-sm-8\">
             <div class=\"row\">

      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "           <br>  <br> 
\t\t<div class=\"row\">
\t\t\t<div class=\" col-xs-12 col-sm-offset-2 col-sm-12 \">
\t\t\t\t<ul class=\"event-list\">       
\t\t\t\t\t<li>
\t\t\t\t\t\t<time datetime=\"2014-07-20 2000\">
\t\t\t\t\t\t\t<span class=\"day\">";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "d"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"month\">";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "m"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"year\">";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDebut", array()), "Y"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"time\">8:00 PM</span>
\t\t\t\t\t\t</time>
\t\t\t\t\t\t<img alt=\"My 24th Birthday!\" src=\"https://farm5.staticflickr.com/4150/5045502202_1d867c8a41_q.jpg\" />
\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<h2 class=\"title\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomEvenement", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<p class=\"desc\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li style=\"width:33%;\">  <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement_show", array("id" => $this->getAttribute($context["entity"], "idEvenement", array()))), "html", null, true);
            echo "\">show</a> <span class=\"glyphicon glyphicon-ok\"></span></li>
                                                                <li style=\"width:34%;\"><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("financerEvenement", array("idE" => $this->getAttribute($context["entity"], "idEvenement", array()))), "html", null, true);
            echo "\" > financer </a><span class=\"fa fa-question\"></span></li>
\t\t\t\t\t\t\t\t<li style=\"width:33%;\"> <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("evenement_edit", array("id" => $this->getAttribute($context["entity"], "idEvenement", array()))), "html", null, true);
            echo "\">edit</a> <span class=\"fa fa-envelope\"></span></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"social\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"facebook\" style=\"width:33%;\"><a href=\"#facebook\"><span class=\"fa fa-facebook\"></span></a></li>
\t\t\t\t\t\t\t\t<li class=\"twitter\" style=\"width:34%;\"><a href=\"#twitter\"><span class=\"fa fa-twitter\"></span></a></li>
\t\t\t\t\t\t\t\t<li class=\"google-plus\" style=\"width:33%;\"><a href=\"#google-plus\"><span class=\"fa fa-google-plus\"></span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
</ul>

                        </div></div>
            <br>  <br> 
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                 </div>
\t</div>\t</div>\t</div>\t
    
       <br>  <br>   <br>  <br>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
";
    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        // line 101
        echo "


";
    }

    public function getTemplateName()
    {
        return "crowdBundle:Evenement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 101,  174 => 100,  136 => 64,  114 => 48,  110 => 47,  106 => 46,  101 => 44,  97 => 43,  89 => 38,  85 => 37,  81 => 36,  73 => 30,  69 => 29,  59 => 21,  57 => 20,  44 => 9,  41 => 8,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::enligne.html.twig" %}*/
/* */
/* {% block css %}*/
/*        <link rel="stylesheet" href="{{asset('event/css/calendrier/calendrier.css')}}">*/
/* */
/*     {% endblock %}*/
/* */
/* {% block body %}*/
/*    */
/*   */
/*     */
/*     */
/*     */
/* <div class="container">*/
/*      <div class="row">*/
/*      <!-- Sidebar -->*/
/*                 <div class="col-sm-3 blog-sidebar">*/
/*                   */
/*                      <h4>Chercher des Evenements par Categories</h4>*/
/*                     {%  render(controller('crowdBundle:CtegorieEvenement:menu'))  %}*/
/*                    */
/*                    */
/*                    */
/*                 </div>*/
/*                 <!-- End Sidebar -->*/
/*     <div class="col-sm-8">*/
/*              <div class="row">*/
/* */
/*       {% for entity in entities %}*/
/*            <br>  <br> */
/* 		<div class="row">*/
/* 			<div class=" col-xs-12 col-sm-offset-2 col-sm-12 ">*/
/* 				<ul class="event-list">       */
/* 					<li>*/
/* 						<time datetime="2014-07-20 2000">*/
/* 							<span class="day">{{ entity.dateDebut|date('d') }}</span>*/
/* 							<span class="month">{{ entity.dateDebut|date('m') }}</span>*/
/* 							<span class="year">{{ entity.dateDebut|date('Y') }}</span>*/
/* 							<span class="time">8:00 PM</span>*/
/* 						</time>*/
/* 						<img alt="My 24th Birthday!" src="https://farm5.staticflickr.com/4150/5045502202_1d867c8a41_q.jpg" />*/
/* 						<div class="info">*/
/* 							<h2 class="title">{{ entity.nomEvenement }}</h2>*/
/* 							<p class="desc">{{ entity.description}}</p>*/
/* 							<ul>*/
/* 								<li style="width:33%;">  <a href="{{ path('evenement_show', { 'id': entity.idEvenement }) }}">show</a> <span class="glyphicon glyphicon-ok"></span></li>*/
/*                                                                 <li style="width:34%;"><a href="{{ path('financerEvenement',{ 'idE' : entity.idEvenement})}}" > financer </a><span class="fa fa-question"></span></li>*/
/* 								<li style="width:33%;"> <a href="{{ path('evenement_edit', { 'id': entity.idEvenement }) }}">edit</a> <span class="fa fa-envelope"></span></li>*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="social">*/
/* 							<ul>*/
/* 								<li class="facebook" style="width:33%;"><a href="#facebook"><span class="fa fa-facebook"></span></a></li>*/
/* 								<li class="twitter" style="width:34%;"><a href="#twitter"><span class="fa fa-twitter"></span></a></li>*/
/* 								<li class="google-plus" style="width:33%;"><a href="#google-plus"><span class="fa fa-google-plus"></span></a></li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</li>*/
/* </ul>*/
/* */
/*                         </div></div>*/
/*             <br>  <br> */
/*                  {% endfor %}*/
/*                  </div>*/
/* 	</div>	</div>	</div>	*/
/*     */
/*        <br>  <br>   <br>  <br>*/
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* */
/* */
/* {% endblock %}*/
