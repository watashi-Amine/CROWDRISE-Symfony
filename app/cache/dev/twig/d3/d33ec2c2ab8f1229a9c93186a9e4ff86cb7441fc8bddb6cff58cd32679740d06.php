<?php

/* crowdBundle:navigation:afficherProjet.html.twig */
class __TwigTemplate_c8c92d3d5b3b8b1049faba265f5fa47ccbd76b84ea3c57cd567d18c14cd53b42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":navigation:enligne.html.twig", "crowdBundle:navigation:afficherProjet.html.twig", 1);
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
        echo "    <div class=\"container content\">
        <div class=\"row blog-page\">
            <!-- Left Sidebar -->


            <div class=\"col-md-3 magazine-page\">

                <!-- Search Bar -->
                <div class=\"headline headline-md\"><h2>Search</h2></div>
                <div class=\"input-group margin-bottom-40\">


                    ";
        // line 16
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("crowdBundle:Projet:recherche"), array());
        // line 17
        echo "

                </div>
         
                <!-- Blog Tags -->
                <div class=\"headline headline-md\"><h2>Catégorie projet</h2></div>
                <ul class=\"list-unstyled blog-tags margin-bottom-30\">
                    ";
        // line 24
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("crowdBundle:Ctegorieprojet:menu"), array());
        // line 25
        echo "        
                </ul>
                <!-- End Blog Tags -->

                <!-- Blog Latest Tweets -->
                <div class=\"blog-twitter margin-bottom-30\">
                    <div class=\"headline headline-md\"><h2>Latest Tweets</h2></div>
                    <div class=\"blog-twitter-inner\">
                        <i class=\"fa fa-twitter\"></i>
                        <a href=\"#\">@htmlstream</a>
                        At vero eos et accusamus et iusto odio dignissimos.
                        <a href=\"#\">http://t.co/sBav7dm</a>
                        <span>5 hours ago</span>
                    </div>
                    <div class=\"blog-twitter-inner\">
                        <i class=\"fa fa-twitter\"></i>
                        <a href=\"#\">@htmlstream</a>
                        At vero eos et accusamus et iusto odio dignissimos.
                        <a href=\"#\">http://t.co/sBav7dm</a>
                        <span>5 hours ago</span>
                    </div>
                    <div class=\"blog-twitter-inner\">
                        <i class=\"fa fa-twitter\"></i>
                        <a href=\"#\">@htmlstream</a>
                        At vero eos et accusamus et iusto odio dignissimos.
                        <a href=\"#\">http://t.co/sBav7dm</a>
                        <span>5 hours ago</span>
                    </div>
                    <div class=\"blog-twitter-inner\">
                        <i class=\"fa fa-twitter\"></i>
                        <a href=\"#\">@htmlstream</a>
                        At vero eos et accusamus et iusto odio dignissimos.
                        <a href=\"#\">http://t.co/sBav7dm</a>
                        <span>5 hours ago</span>
                    </div>
                </div>
                <!-- End Blog Latest Tweets -->
            </div>



            <div class=\"col-md-9\">
                <div class=\"profile-body\">

                    <!--Projects-->
                    <div class=\"row\">
                          ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 72
            echo "  
                        <div class=\"col-sm-6\">
                            <div class=\"easy-block-v1\">
                                <img class=\"img-responsive\" src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["entity"], "imageFile", array()), "avatars"), "html", null, true);
            echo "\" alt=\"\">
                             
                                <div class=\"easy-block-v1-badge rgba-red\">";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idCategorieProjet", array()), "html", null, true);
            echo "</div>
                            </div>
                            <div class=\"projects\">
                                <h2><a class=\"color-dark\" href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("projet_show", array("id" => $this->getAttribute($context["entity"], "idProjet", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomProjet", array()), "html", null, true);
            echo "</a></h2>
                                <ul class=\"list-unstyled list-inline blog-info-v2\">
                                    <li>By: <a class=\"color-green\" href=\"#\">Edward Rooster</a></li>
                                </ul>
                                <p> ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "resume", array()), "html", null, true);
            echo "</p>
                                <br>
                                <h3 class=\"heading-xs\">Project Completeness <span class=\"pull-right\">";
            // line 86
            if (($this->getAttribute($context["entity"], "budjet", array()) == 0)) {
                echo " 0 ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_round((($this->getAttribute($context["entity"], "argent", array()) / $this->getAttribute($context["entity"], "budjet", array())) * 100), 1, "floor"), "html", null, true);
            }
            echo "%</span></h3>
                                <div class=\"progress progress-u progress-xxs\">
                                    <div class=\"progress-bar progress-bar-u\" role=\"progressbar\" aria-valuenow=\"77\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:  ";
            // line 88
            if (($this->getAttribute($context["entity"], "budjet", array()) == 0)) {
                echo " 0 ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_round((($this->getAttribute($context["entity"], "argent", array()) / $this->getAttribute($context["entity"], "budjet", array())) * 100), 1, "floor"), "html", null, true);
            }
            echo "%\">
                                    </div>
                                </div>
                                <ul class=\"list-inline blog-info-v2\">
                                    <li>
                                        <strong>";
            // line 93
            if (($this->getAttribute($context["entity"], "budjet", array()) == 0)) {
                echo " 0 ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_round((($this->getAttribute($context["entity"], "argent", array()) / $this->getAttribute($context["entity"], "budjet", array())) * 100), 1, "floor"), "html", null, true);
            }
            echo "%</strong>
                                        <span>Funded</span>
                                    </li>
                                    <li>
                                        <strong>";
            // line 97
            if (($this->getAttribute($context["entity"], "budjet", array()) == $this->getAttribute($context["entity"], "argent", array()))) {
                echo " financé ";
            } else {
                echo " en cours ... ";
            }
            echo "</strong>
                                        <span></span>
                                    </li>
                                    <li>
                                        <strong>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "budjet", array()), "html", null, true);
            echo " </strong>
                                        <span>TND</span>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"project-share\">
                                <ul class=\"list-inline comment-list-v2 pull-left\">
                                    <li><i class=\"fa fa-eye\"></i> <a href=\"#\">25</a></li>
                                    <li><i class=\"fa fa-comments\"></i> <a href=\"#\">32</a></li>
                                    <li><i class=\"fa fa-retweet\"></i> <a href=\"#\">77</a></li>
                                </ul>
                                <ul class=\"list-inline star-vote pull-right\">
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star-half-o\"></i></li>
                                    <li><i class=\"color-green fa fa-star-o\"></i></li>
                                </ul>
                            </div>
                        </div>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                    </div><!--/end row-->
                    <!--End Projects-->

                    <hr>

                    <!--Projects-->
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"easy-block-v1\">
                                <img class=\"img-responsive\" src=\"assets/img/main/img17.jpg\" alt=\"\">
                                <div class=\"easy-block-v1-badge rgba-purple\">Graphic Design</div>
                            </div>
                            <div class=\"projects\">
                                <h2><a class=\"color-dark\" href=\"#\">Rigging in Autodesk 3Ds Max</a></h2>
                                <ul class=\"list-unstyled list-inline blog-info-v2\">
                                    <li>By: <a class=\"color-green\" href=\"#\">Edward Rooster</a></li>
                                    <li><i class=\"fa fa-clock-o\"></i> Jan 02, 2013</li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing. Donec non dignissim eros. Mauris faucibus turpis volutpat sagittis rhoncus. Pellentesque et rhoncus sapien, sed ullamcorper justo.</p>
                                <br>
                                <h3 class=\"heading-xs\">Project Completeness <span class=\"pull-right\">77%</span></h3>
                                <div class=\"progress progress-u progress-xxs\">
                                    <div class=\"progress-bar progress-bar-u\" role=\"progressbar\" aria-valuenow=\"77\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 77%\">
                                    </div>
                                </div>
                                <ul class=\"list-inline blog-info-v2\">
                                    <li>
                                        <strong>12%</strong>
                                        <span>Funded</span>
                                    </li>
                                    <li>
                                        <strong>17%</strong>
                                        <span>Pludged</span>
                                    </li>
                                    <li>
                                        <strong>25</strong>
                                        <span>days to go</span>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"project-share\">
                                <ul class=\"list-inline comment-list-v2 pull-left\">
                                    <li><i class=\"fa fa-eye\"></i> <a href=\"#\">25</a></li>
                                    <li><i class=\"fa fa-comments\"></i> <a href=\"#\">32</a></li>
                                    <li><i class=\"fa fa-retweet\"></i> <a href=\"#\">77</a></li>
                                </ul>
                                <ul class=\"list-inline star-vote pull-right\">
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star-half-o\"></i></li>
                                    <li><i class=\"color-green fa fa-star-o\"></i></li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"col-sm-6\">
                            <div class=\"service-or easy-block-v2 no-margin-bottom\">
                                <img class=\"img-responsive\" src=\"assets/img/main/img18.jpg\" alt=\"\">
                                <div class=\"easy-bg-v2 rgba-blue\">Nokia</div>
                            </div>
                            <div class=\"projects\">
                                <h2><a class=\"color-dark\" href=\"#\">Getting Started Photography</a></h2>
                                <ul class=\"list-unstyled list-inline blog-info-v2\">
                                    <li>By: <a class=\"color-green\" href=\"#\">Edward Rooster</a></li>
                                    <li><i class=\"fa fa-clock-o\"></i> Jan 07, 2013</li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing. Donec non dignissim eros. Mauris faucibus turpis volutpat sagittis rhoncus. Pellentesque et rhoncus sapien, sed ullamcorper justo.</p>
                                <br>
                                <h3 class=\"heading-xs\">Project Completeness <span class=\"pull-right\">92%</span></h3>
                                <div class=\"progress progress-u progress-xxs\">
                                    <div class=\"progress-bar progress-bar-u\" role=\"progressbar\" aria-valuenow=\"92\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 92%\">
                                    </div>
                                </div>
                                <ul class=\"list-inline blog-info-v2\">
                                    <li>
                                        <strong>45%</strong>
                                        <span>Funded</span>
                                    </li>
                                    <li>
                                        <strong>58%</strong>
                                        <span>Pludged</span>
                                    </li>
                                    <li>
                                        <strong>5</strong>
                                        <span>days to go</span>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"project-share\">
                                <ul class=\"list-inline comment-list-v2 pull-left\">
                                    <li><i class=\"fa fa-eye\"></i> <a href=\"#\">45</a></li>
                                    <li><i class=\"fa fa-comments\"></i> <a href=\"#\">90</a></li>
                                    <li><i class=\"fa fa-retweet\"></i> <a href=\"#\">84</a></li>
                                </ul>
                                <ul class=\"list-inline star-vote pull-right\">
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star-half-o\"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/end row-->
                    <!--End Projects-->

                    <hr>

                    <!--Projects-->
                    <div class=\"row margin-bottom-30\">
                        <div class=\"col-sm-6\">
                            <div class=\"easy-block-v1\">
                                <img class=\"img-responsive\" src=\"assets/img/main/img19.jpg\" alt=\"\">
                                <div class=\"easy-block-v1-badge rgba-aqua\">Unify Project</div>
                            </div>
                            <div class=\"projects\">
                                <h2><a class=\"color-dark\" href=\"#\">Rigging in Autodesk 3Ds Max</a></h2>
                                <ul class=\"list-unstyled list-inline blog-info-v2\">
                                    <li>By: <a class=\"color-green\" href=\"#\">Edward Rooster</a></li>
                                    <li><i class=\"fa fa-clock-o\"></i> Jan 02, 2013</li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing. Donec non dignissim eros. Mauris faucibus turpis volutpat sagittis rhoncus. Pellentesque et rhoncus sapien, sed ullamcorper justo.</p>
                                <br>
                                <h3 class=\"heading-xs\">Project Completeness <span class=\"pull-right\">77%</span></h3>
                                <div class=\"progress progress-u progress-xxs\">
                                    <div class=\"progress-bar progress-bar-u\" role=\"progressbar\" aria-valuenow=\"77\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 77%\">
                                    </div>
                                </div>
                                <ul class=\"list-inline blog-info-v2\">
                                    <li>
                                        <strong>12%</strong>
                                        <span>Funded</span>
                                    </li>
                                    <li>
                                        <strong>17%</strong>
                                        <span>Pludged</span>
                                    </li>
                                    <li>
                                        <strong>25</strong>
                                        <span>days to go</span>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"project-share\">
                                <ul class=\"list-inline comment-list-v2 pull-left\">
                                    <li><i class=\"fa fa-eye\"></i> <a href=\"#\">25</a></li>
                                    <li><i class=\"fa fa-comments\"></i> <a href=\"#\">32</a></li>
                                    <li><i class=\"fa fa-retweet\"></i> <a href=\"#\">77</a></li>
                                </ul>
                                <ul class=\"list-inline star-vote pull-right\">
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star-half-o\"></i></li>
                                    <li><i class=\"color-green fa fa-star-o\"></i></li>
                                </ul>
                            </div>
                        </div>

                        <div class=\"col-sm-6\">
                            <div class=\"service-or easy-block-v2 no-margin-bottom\">
                                <img class=\"img-responsive\" src=\"assets/img/main/img20.jpg\" alt=\"\">
                                <div class=\"easy-bg-v2 rgba-yellow\">Sony</div>
                            </div>
                            <div class=\"projects\">
                                <h2><a class=\"color-dark\" href=\"#\">Getting Started Photography</a></h2>
                                <ul class=\"list-unstyled list-inline blog-info-v2\">
                                    <li>By: <a class=\"color-green\" href=\"#\">Edward Rooster</a></li>
                                    <li><i class=\"fa fa-clock-o\"></i> Jan 07, 2013</li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing. Donec non dignissim eros. Mauris faucibus turpis volutpat sagittis rhoncus. Pellentesque et rhoncus sapien, sed ullamcorper justo.</p>
                                <br>
                                <h3 class=\"heading-xs\">Project Completeness <span class=\"pull-right\">92%</span></h3>
                                <div class=\"progress progress-u progress-xxs\">
                                    <div class=\"progress-bar progress-bar-u\" role=\"progressbar\" aria-valuenow=\"92\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 92%\">
                                    </div>
                                </div>
                                <ul class=\"list-inline blog-info-v2\">
                                    <li>
                                        <strong>45%</strong>
                                        <span>Funded</span>
                                    </li>
                                    <li>
                                        <strong>58%</strong>
                                        <span>Pludged</span>
                                    </li>
                                    <li>
                                        <strong>5</strong>
                                        <span>days to go</span>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"project-share\">
                                <ul class=\"list-inline comment-list-v2 pull-left\">
                                    <li><i class=\"fa fa-eye\"></i> <a href=\"#\">45</a></li>
                                    <li><i class=\"fa fa-comments\"></i> <a href=\"#\">90</a></li>
                                    <li><i class=\"fa fa-retweet\"></i> <a href=\"#\">84</a></li>
                                </ul>
                                <ul class=\"list-inline star-vote pull-right\">
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star\"></i></li>
                                    <li><i class=\"color-green fa fa-star-half-o\"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div><!--/end row-->
                    <!--End Projects-->
                    <button type=\"button\" class=\"btn-u btn-u-default btn-u-sm btn-block\">Load More</button>
                </div>
            </div>
            <!-- End Left Sidebar -->



        </div><!--/row-->
    </div>
                          
";
    }

    public function getTemplateName()
    {
        return "crowdBundle:navigation:afficherProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 122,  186 => 101,  175 => 97,  163 => 93,  150 => 88,  140 => 86,  135 => 84,  126 => 80,  120 => 77,  115 => 75,  110 => 72,  106 => 71,  58 => 25,  56 => 24,  47 => 17,  45 => 16,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends ":navigation:enligne.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <div class="container content">*/
/*         <div class="row blog-page">*/
/*             <!-- Left Sidebar -->*/
/* */
/* */
/*             <div class="col-md-3 magazine-page">*/
/* */
/*                 <!-- Search Bar -->*/
/*                 <div class="headline headline-md"><h2>Search</h2></div>*/
/*                 <div class="input-group margin-bottom-40">*/
/* */
/* */
/*                     {% render(controller('crowdBundle:Projet:recherche'))%}*/
/* */
/* */
/*                 </div>*/
/*          */
/*                 <!-- Blog Tags -->*/
/*                 <div class="headline headline-md"><h2>Catégorie projet</h2></div>*/
/*                 <ul class="list-unstyled blog-tags margin-bottom-30">*/
/*                     {%  render(controller('crowdBundle:Ctegorieprojet:menu'))  %}*/
/*         */
/*                 </ul>*/
/*                 <!-- End Blog Tags -->*/
/* */
/*                 <!-- Blog Latest Tweets -->*/
/*                 <div class="blog-twitter margin-bottom-30">*/
/*                     <div class="headline headline-md"><h2>Latest Tweets</h2></div>*/
/*                     <div class="blog-twitter-inner">*/
/*                         <i class="fa fa-twitter"></i>*/
/*                         <a href="#">@htmlstream</a>*/
/*                         At vero eos et accusamus et iusto odio dignissimos.*/
/*                         <a href="#">http://t.co/sBav7dm</a>*/
/*                         <span>5 hours ago</span>*/
/*                     </div>*/
/*                     <div class="blog-twitter-inner">*/
/*                         <i class="fa fa-twitter"></i>*/
/*                         <a href="#">@htmlstream</a>*/
/*                         At vero eos et accusamus et iusto odio dignissimos.*/
/*                         <a href="#">http://t.co/sBav7dm</a>*/
/*                         <span>5 hours ago</span>*/
/*                     </div>*/
/*                     <div class="blog-twitter-inner">*/
/*                         <i class="fa fa-twitter"></i>*/
/*                         <a href="#">@htmlstream</a>*/
/*                         At vero eos et accusamus et iusto odio dignissimos.*/
/*                         <a href="#">http://t.co/sBav7dm</a>*/
/*                         <span>5 hours ago</span>*/
/*                     </div>*/
/*                     <div class="blog-twitter-inner">*/
/*                         <i class="fa fa-twitter"></i>*/
/*                         <a href="#">@htmlstream</a>*/
/*                         At vero eos et accusamus et iusto odio dignissimos.*/
/*                         <a href="#">http://t.co/sBav7dm</a>*/
/*                         <span>5 hours ago</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- End Blog Latest Tweets -->*/
/*             </div>*/
/* */
/* */
/* */
/*             <div class="col-md-9">*/
/*                 <div class="profile-body">*/
/* */
/*                     <!--Projects-->*/
/*                     <div class="row">*/
/*                           {% for entity in entities %}*/
/*   */
/*                         <div class="col-sm-6">*/
/*                             <div class="easy-block-v1">*/
/*                                 <img class="img-responsive" src="{{asset(entity.imageFile,'avatars')}}" alt="">*/
/*                              */
/*                                 <div class="easy-block-v1-badge rgba-red">{{entity.idCategorieProjet}}</div>*/
/*                             </div>*/
/*                             <div class="projects">*/
/*                                 <h2><a class="color-dark" href="{{ path('projet_show', { 'id': entity.idProjet }) }}">{{ entity.nomProjet }}</a></h2>*/
/*                                 <ul class="list-unstyled list-inline blog-info-v2">*/
/*                                     <li>By: <a class="color-green" href="#">Edward Rooster</a></li>*/
/*                                 </ul>*/
/*                                 <p> {{ entity.resume }}</p>*/
/*                                 <br>*/
/*                                 <h3 class="heading-xs">Project Completeness <span class="pull-right">{% if entity.budjet == 0  %} 0 {% else %} {{ (entity.argent /  entity.budjet *100)|round(1, 'floor') }}{% endif %}%</span></h3>*/
/*                                 <div class="progress progress-u progress-xxs">*/
/*                                     <div class="progress-bar progress-bar-u" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width:  {% if entity.budjet == 0  %} 0 {% else %} {{ (entity.argent /  entity.budjet *100)|round(1, 'floor') }}{% endif %}%">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <ul class="list-inline blog-info-v2">*/
/*                                     <li>*/
/*                                         <strong>{% if entity.budjet == 0  %} 0 {% else %} {{ (entity.argent /  entity.budjet *100)|round(1, 'floor') }}{% endif %}%</strong>*/
/*                                         <span>Funded</span>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <strong>{% if entity.budjet == entity.argent  %} financé {% else %} en cours ... {% endif %}</strong>*/
/*                                         <span></span>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <strong>{{ entity.budjet }} </strong>*/
/*                                         <span>TND</span>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="project-share">*/
/*                                 <ul class="list-inline comment-list-v2 pull-left">*/
/*                                     <li><i class="fa fa-eye"></i> <a href="#">25</a></li>*/
/*                                     <li><i class="fa fa-comments"></i> <a href="#">32</a></li>*/
/*                                     <li><i class="fa fa-retweet"></i> <a href="#">77</a></li>*/
/*                                 </ul>*/
/*                                 <ul class="list-inline star-vote pull-right">*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star-half-o"></i></li>*/
/*                                     <li><i class="color-green fa fa-star-o"></i></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                           {% endfor %}*/
/*                     </div><!--/end row-->*/
/*                     <!--End Projects-->*/
/* */
/*                     <hr>*/
/* */
/*                     <!--Projects-->*/
/*                     <div class="row">*/
/*                         <div class="col-sm-6">*/
/*                             <div class="easy-block-v1">*/
/*                                 <img class="img-responsive" src="assets/img/main/img17.jpg" alt="">*/
/*                                 <div class="easy-block-v1-badge rgba-purple">Graphic Design</div>*/
/*                             </div>*/
/*                             <div class="projects">*/
/*                                 <h2><a class="color-dark" href="#">Rigging in Autodesk 3Ds Max</a></h2>*/
/*                                 <ul class="list-unstyled list-inline blog-info-v2">*/
/*                                     <li>By: <a class="color-green" href="#">Edward Rooster</a></li>*/
/*                                     <li><i class="fa fa-clock-o"></i> Jan 02, 2013</li>*/
/*                                 </ul>*/
/*                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing. Donec non dignissim eros. Mauris faucibus turpis volutpat sagittis rhoncus. Pellentesque et rhoncus sapien, sed ullamcorper justo.</p>*/
/*                                 <br>*/
/*                                 <h3 class="heading-xs">Project Completeness <span class="pull-right">77%</span></h3>*/
/*                                 <div class="progress progress-u progress-xxs">*/
/*                                     <div class="progress-bar progress-bar-u" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <ul class="list-inline blog-info-v2">*/
/*                                     <li>*/
/*                                         <strong>12%</strong>*/
/*                                         <span>Funded</span>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <strong>17%</strong>*/
/*                                         <span>Pludged</span>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <strong>25</strong>*/
/*                                         <span>days to go</span>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="project-share">*/
/*                                 <ul class="list-inline comment-list-v2 pull-left">*/
/*                                     <li><i class="fa fa-eye"></i> <a href="#">25</a></li>*/
/*                                     <li><i class="fa fa-comments"></i> <a href="#">32</a></li>*/
/*                                     <li><i class="fa fa-retweet"></i> <a href="#">77</a></li>*/
/*                                 </ul>*/
/*                                 <ul class="list-inline star-vote pull-right">*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star-half-o"></i></li>*/
/*                                     <li><i class="color-green fa fa-star-o"></i></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="col-sm-6">*/
/*                             <div class="service-or easy-block-v2 no-margin-bottom">*/
/*                                 <img class="img-responsive" src="assets/img/main/img18.jpg" alt="">*/
/*                                 <div class="easy-bg-v2 rgba-blue">Nokia</div>*/
/*                             </div>*/
/*                             <div class="projects">*/
/*                                 <h2><a class="color-dark" href="#">Getting Started Photography</a></h2>*/
/*                                 <ul class="list-unstyled list-inline blog-info-v2">*/
/*                                     <li>By: <a class="color-green" href="#">Edward Rooster</a></li>*/
/*                                     <li><i class="fa fa-clock-o"></i> Jan 07, 2013</li>*/
/*                                 </ul>*/
/*                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing. Donec non dignissim eros. Mauris faucibus turpis volutpat sagittis rhoncus. Pellentesque et rhoncus sapien, sed ullamcorper justo.</p>*/
/*                                 <br>*/
/*                                 <h3 class="heading-xs">Project Completeness <span class="pull-right">92%</span></h3>*/
/*                                 <div class="progress progress-u progress-xxs">*/
/*                                     <div class="progress-bar progress-bar-u" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <ul class="list-inline blog-info-v2">*/
/*                                     <li>*/
/*                                         <strong>45%</strong>*/
/*                                         <span>Funded</span>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <strong>58%</strong>*/
/*                                         <span>Pludged</span>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <strong>5</strong>*/
/*                                         <span>days to go</span>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="project-share">*/
/*                                 <ul class="list-inline comment-list-v2 pull-left">*/
/*                                     <li><i class="fa fa-eye"></i> <a href="#">45</a></li>*/
/*                                     <li><i class="fa fa-comments"></i> <a href="#">90</a></li>*/
/*                                     <li><i class="fa fa-retweet"></i> <a href="#">84</a></li>*/
/*                                 </ul>*/
/*                                 <ul class="list-inline star-vote pull-right">*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star-half-o"></i></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!--/end row-->*/
/*                     <!--End Projects-->*/
/* */
/*                     <hr>*/
/* */
/*                     <!--Projects-->*/
/*                     <div class="row margin-bottom-30">*/
/*                         <div class="col-sm-6">*/
/*                             <div class="easy-block-v1">*/
/*                                 <img class="img-responsive" src="assets/img/main/img19.jpg" alt="">*/
/*                                 <div class="easy-block-v1-badge rgba-aqua">Unify Project</div>*/
/*                             </div>*/
/*                             <div class="projects">*/
/*                                 <h2><a class="color-dark" href="#">Rigging in Autodesk 3Ds Max</a></h2>*/
/*                                 <ul class="list-unstyled list-inline blog-info-v2">*/
/*                                     <li>By: <a class="color-green" href="#">Edward Rooster</a></li>*/
/*                                     <li><i class="fa fa-clock-o"></i> Jan 02, 2013</li>*/
/*                                 </ul>*/
/*                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing. Donec non dignissim eros. Mauris faucibus turpis volutpat sagittis rhoncus. Pellentesque et rhoncus sapien, sed ullamcorper justo.</p>*/
/*                                 <br>*/
/*                                 <h3 class="heading-xs">Project Completeness <span class="pull-right">77%</span></h3>*/
/*                                 <div class="progress progress-u progress-xxs">*/
/*                                     <div class="progress-bar progress-bar-u" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <ul class="list-inline blog-info-v2">*/
/*                                     <li>*/
/*                                         <strong>12%</strong>*/
/*                                         <span>Funded</span>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <strong>17%</strong>*/
/*                                         <span>Pludged</span>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <strong>25</strong>*/
/*                                         <span>days to go</span>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="project-share">*/
/*                                 <ul class="list-inline comment-list-v2 pull-left">*/
/*                                     <li><i class="fa fa-eye"></i> <a href="#">25</a></li>*/
/*                                     <li><i class="fa fa-comments"></i> <a href="#">32</a></li>*/
/*                                     <li><i class="fa fa-retweet"></i> <a href="#">77</a></li>*/
/*                                 </ul>*/
/*                                 <ul class="list-inline star-vote pull-right">*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star-half-o"></i></li>*/
/*                                     <li><i class="color-green fa fa-star-o"></i></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="col-sm-6">*/
/*                             <div class="service-or easy-block-v2 no-margin-bottom">*/
/*                                 <img class="img-responsive" src="assets/img/main/img20.jpg" alt="">*/
/*                                 <div class="easy-bg-v2 rgba-yellow">Sony</div>*/
/*                             </div>*/
/*                             <div class="projects">*/
/*                                 <h2><a class="color-dark" href="#">Getting Started Photography</a></h2>*/
/*                                 <ul class="list-unstyled list-inline blog-info-v2">*/
/*                                     <li>By: <a class="color-green" href="#">Edward Rooster</a></li>*/
/*                                     <li><i class="fa fa-clock-o"></i> Jan 07, 2013</li>*/
/*                                 </ul>*/
/*                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry printing. Donec non dignissim eros. Mauris faucibus turpis volutpat sagittis rhoncus. Pellentesque et rhoncus sapien, sed ullamcorper justo.</p>*/
/*                                 <br>*/
/*                                 <h3 class="heading-xs">Project Completeness <span class="pull-right">92%</span></h3>*/
/*                                 <div class="progress progress-u progress-xxs">*/
/*                                     <div class="progress-bar progress-bar-u" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100" style="width: 92%">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <ul class="list-inline blog-info-v2">*/
/*                                     <li>*/
/*                                         <strong>45%</strong>*/
/*                                         <span>Funded</span>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <strong>58%</strong>*/
/*                                         <span>Pludged</span>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <strong>5</strong>*/
/*                                         <span>days to go</span>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="project-share">*/
/*                                 <ul class="list-inline comment-list-v2 pull-left">*/
/*                                     <li><i class="fa fa-eye"></i> <a href="#">45</a></li>*/
/*                                     <li><i class="fa fa-comments"></i> <a href="#">90</a></li>*/
/*                                     <li><i class="fa fa-retweet"></i> <a href="#">84</a></li>*/
/*                                 </ul>*/
/*                                 <ul class="list-inline star-vote pull-right">*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star"></i></li>*/
/*                                     <li><i class="color-green fa fa-star-half-o"></i></li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!--/end row-->*/
/*                     <!--End Projects-->*/
/*                     <button type="button" class="btn-u btn-u-default btn-u-sm btn-block">Load More</button>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- End Left Sidebar -->*/
/* */
/* */
/* */
/*         </div><!--/row-->*/
/*     </div>*/
/*                           */
/* {% endblock %}*/
