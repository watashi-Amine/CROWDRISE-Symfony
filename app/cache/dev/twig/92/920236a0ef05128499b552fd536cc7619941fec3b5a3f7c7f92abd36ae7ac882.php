<?php

/* crowdBundle:user:profile_info.html.twig */
class __TwigTemplate_ecccf2084ae45c2edccc5bb18f9a90f8da68b89fbd5d88bd3a8767363db4a7e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::enligne.html.twig", "crowdBundle:user:profile_info.html.twig", 1);
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
        $this->loadTemplate("::sidebar.html.twig", "crowdBundle:user:profile_info.html.twig", 3)->display($context);
        // line 4
        echo "
        ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo " 
                <div class=\"profile-body\">
                    <div class=\"profile-bio\">
                        <div class=\"row\">
                            <div class=\"col-md-5\">
                                <img class=\"img-responsive md-margin-bottom-10\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/photo_profile/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "path", array()))), "html", null, true);
        echo "\" alt=\"\">
                                <a class=\"btn-u btn-u-sm\" href=\"#\">Changer photo</a>
                            </div>
                            <div class=\"col-md-7\">
                                <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h2>
                                <span><strong>Job:</strong> Web Developer</span>
                                <span><strong>Position:</strong> Web Designer</span>
                                <hr>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget massa nec turpis congue bibendum. Integer nulla felis, porta suscipit nulla et, dignissim commodo nunc. Morbi a semper nulla.</p>
                                <p>Proin mauris odio, pharetra quis ligula non, vulputate vehicula quam. Nunc in libero vitae nunc ultricies tincidunt ut sed leo. Sed luctus dui ut congue consequat. Cras consequat nisl ante, nec malesuada velit pellentesque ac. Pellentesque nec arcu in ipsum iaculis convallis.</p>
                            </div>
                        </div>
                    </div><!--/end row-->

                    <hr>

                    <div class=\"row\">
                        <!--Social Icons v3-->
                        <div class=\"col-sm-6 sm-margin-bottom-30\">
                            <div class=\"panel panel-profile\">
                                <div class=\"panel-heading overflow-h\">
                                    <h2 class=\"panel-title heading-sm pull-left\"><i class=\"fa fa-pencil\"></i> Social Contacts <small>(option 1)</small></h2>
                                    <a href=\"#\"><i class=\"fa fa-cog pull-right\"></i></a>
                                </div>
                                <div class=\"panel-body\">
                                     <ul class=\"list-unstyled social-contacts-v2\">
                                        <li><i class=\"rounded-x tw fa fa-twitter\"></i> <a href=\"#\">edward.rooster</a></li>
                                        <li><i class=\"rounded-x fb fa fa-facebook\"></i> <a href=\"#\">Edward Rooster</a></li>
                                        <li><i class=\"rounded-x sk fa fa-skype\"></i> <a href=\"#\">edwardRooster77</a></li>
                                        <li><i class=\"rounded-x gp fa fa-google-plus\"></i> <a href=\"#\">rooster77edward</a></li>
                                        <li><i class=\"rounded-x gm fa fa-envelope\"></i> <a href=\"#\">edward77@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End Social Icons v3-->

                        <!--Skills-->
                        <div class=\"col-sm-6 sm-margin-bottom-30\">
                            <div class=\"panel panel-profile\">
                                <div class=\"panel-heading overflow-h\">
                                    <h2 class=\"panel-title heading-sm pull-left\"><i class=\"fa fa-lightbulb-o\"></i> Skills</h2>
                                    <a href=\"#\"><i class=\"fa fa-cog pull-right\"></i></a>
                                </div>
                                <div class=\"panel-body\">
                                    <small>HTML/CSS</small>
                                    <small>92%</small>
                                    <div class=\"progress progress-u progress-xxs\">
                                        <div style=\"width: 92%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"92\" role=\"progressbar\" class=\"progress-bar progress-bar-u\">
                                        </div>
                                    </div>

                                    <small>Photoshop</small>
                                    <small>77%</small>
                                    <div class=\"progress progress-u progress-xxs\">
                                        <div style=\"width: 77%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"77\" role=\"progressbar\" class=\"progress-bar progress-bar-u\">
                                        </div>
                                    </div>

                                    <small>PHP</small>
                                    <small>85%</small>
                                    <div class=\"progress progress-u progress-xxs\">
                                        <div style=\"width: 85%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"85\" role=\"progressbar\" class=\"progress-bar progress-bar-u\">
                                        </div>
                                    </div>

                                    <small>Javascript</small>
                                    <small>81%</small>
                                    <div class=\"progress progress-u progress-xxs\">
                                        <div style=\"width: 81%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"81\" role=\"progressbar\" class=\"progress-bar progress-bar-u\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Skills-->
                    </div><!--/end row-->

                    <hr>

                    <!--Timeline-->
                    <div class=\"panel panel-profile\">
                        <div class=\"panel-heading overflow-h\">
                            <h2 class=\"panel-title heading-sm pull-left\"><i class=\"fa fa-briefcase\"></i> Experience</h2>
                            <a href=\"#\"><i class=\"fa fa-cog pull-right\"></i></a>
                        </div>
                        <div class=\"panel-body margin-bottom-40\">
                            <ul class=\"timeline-v2 timeline-me\">
                                <li>
                                    <time datetime=\"\" class=\"cbp_tmtime\"><span>Mobile Design</span> <span>2012 - Current</span></time>
                                    <i class=\"cbp_tmicon rounded-x hidden-xs\"></i>
                                    <div class=\"cbp_tmlabel\">
                                        <h2>BFC NYC Partners</h2>
                                        <p>Winter purslane courgette pumpkin quandong komatsuna fennel green bean cucumber watercress. Peasprouts wattle seed rutabaga okra yarrow cress avocado grape.</p>
                                    </div>
                                </li>
                                <li>
                                    <time datetime=\"\" class=\"cbp_tmtime\"><span>Web Designer</span> <span>2007 - 2012</span></time>
                                    <i class=\"cbp_tmicon rounded-x hidden-xs\"></i>
                                    <div class=\"cbp_tmlabel\">
                                    <h2>Freelance</h2>
                                        <p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce.</p>
                                    </div>
                                </li>
                                <li>
                                    <time datetime=\"\" class=\"cbp_tmtime\"><span>Photodesigner</span> <span>2003 - 2007</span></time>
                                    <i class=\"cbp_tmicon rounded-x hidden-xs\"></i>
                                    <div class=\"cbp_tmlabel\">
                                    <h2>Toren Condo</h2>
                                        <p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Timeline-->

                    <!--Timeline-->
                    <div class=\"panel panel-profile\">
                        <div class=\"panel-heading overflow-h\">
                            <h2 class=\"panel-title heading-sm pull-left\"><i class=\"fa fa-mortar-board\"></i> Education</h2>
                            <a href=\"#\"><i class=\"fa fa-cog pull-right\"></i></a>
                        </div>
                        <div class=\"panel-body\">
                            <ul class=\"timeline-v2 timeline-me\">
                                <li>
                                    <time datetime=\"\" class=\"cbp_tmtime\"><span>Bachelor of IT</span> <span>2003 - 2000</span></time>
                                    <i class=\"cbp_tmicon rounded-x hidden-xs\"></i>
                                    <div class=\"cbp_tmlabel\">
                                        <h2>Harvard University</h2>
                                        <p>Winter purslane courgette pumpkin quandong komatsuna fennel green bean cucumber watercress. Peasprouts wattle seed rutabaga okra yarrow cress avocado grape.</p>
                                    </div>
                                </li>
                                <li>
                                    <time datetime=\"\" class=\"cbp_tmtime\"><span>Web Design</span> <span>1997 - 2000</span></time>
                                    <i class=\"cbp_tmicon rounded-x hidden-xs\"></i>
                                    <div class=\"cbp_tmlabel\">
                                    <h2>Imperial College London</h2>
                                        <p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce.</p>
                                    </div>
                                </li>
                                <li>
                                    <time datetime=\"\" class=\"cbp_tmtime\"><span>High School</span> <span>1988 - 1997</span></time>
                                    <i class=\"cbp_tmicon rounded-x hidden-xs\"></i>
                                    <div class=\"cbp_tmlabel\">
                                    <h2>Chicago High School</h2>
                                        <p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Timeline-->

                    <hr>

                    <div class=\"row\">
                        <!--Social Contacts v2-->
                        <div class=\"col-sm-6\">
                            <div class=\"panel panel-profile\">
                                <div class=\"panel-heading overflow-h\">
                                    <h2 class=\"panel-title heading-sm pull-left\"><i class=\"fa fa-lightbulb-o\"></i> Social Contacts <small>(option 2)</small></h2>
                                    <a href=\"#\"><i class=\"fa fa-cog pull-right\"></i></a>
                                </div>
                                <div class=\"panel-body\">
                                    <ul class=\"list-unstyled social-contacts-v3\">
                                        <li><i class=\"rounded-x tw fa fa-twitter\"></i> <a href=\"#\">edward.rooster</a></li>
                                        <li><i class=\"rounded-x fb fa fa-facebook\"></i> <a href=\"#\">Edward Rooster</a></li>
                                        <li><i class=\"rounded-x sk fa fa-skype\"></i> <a href=\"#\">edwardRooster77</a></li>
                                        <li><i class=\"rounded-x gp fa fa-google-plus\"></i> <a href=\"#\">rooster77edward</a></li>
                                        <li><i class=\"rounded-x gm icon-envelope\"></i> <a href=\"#\">edward77@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End Social Contacts v2-->

                        <!--Design Skills-->
                        <div class=\"col-sm-6\">
                            <div class=\"panel panel-profile\">
                                <div class=\"panel-heading overflow-h\">
                                    <h2 class=\"panel-title heading-sm pull-left\"><i class=\"fa fa-pencil\"></i> Language Skills</h2>
                                    <a href=\"#\"><i class=\"fa fa-cog pull-right\"></i></a>
                                </div>
                                <div class=\"panel-body\">
                                    <div class=\"row\">
                                         <div class=\"p-chart col-sm-6 col-xs-6 sm-margin-bottom-10\">
                                            <div class=\"circle margin-bottom-20\" id=\"circle-4\"></div>
                                            <h3 class=\"heading-xs\">Engagement Score</h3>
                                            <p>Celery coriander bitterleaf epazote radicchio shallot.</p>
                                        </div>
                                        <div class=\"p-chart col-sm-6 col-xs-6\">
                                            <div class=\"circle margin-bottom-20\" id=\"circle-5\"></div>
                                            <h3 class=\"heading-xs\">Progfile Completness</h3>
                                            <p>Celery coriander bitterleaf epazote radicchio shallot.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Design Skills-->
                    </div><!--/end row-->
                </div>
                ";
    }

    public function getTemplateName()
    {
        return "crowdBundle:user:profile_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  50 => 12,  43 => 7,  40 => 6,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "::enligne.html.twig" %}*/
/*     {% block navbar %}*/
/*                         {% include '::sidebar.html.twig' %}*/
/* */
/*         {% endblock %}*/
/* {% block body %}*/
/*  */
/*                 <div class="profile-body">*/
/*                     <div class="profile-bio">*/
/*                         <div class="row">*/
/*                             <div class="col-md-5">*/
/*                                 <img class="img-responsive md-margin-bottom-10" src="{{asset('uploads/photo_profile/'~app.user.path)}}" alt="">*/
/*                                 <a class="btn-u btn-u-sm" href="#">Changer photo</a>*/
/*                             </div>*/
/*                             <div class="col-md-7">*/
/*                                 <h2>{{app.user.username}}</h2>*/
/*                                 <span><strong>Job:</strong> Web Developer</span>*/
/*                                 <span><strong>Position:</strong> Web Designer</span>*/
/*                                 <hr>*/
/*                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget massa nec turpis congue bibendum. Integer nulla felis, porta suscipit nulla et, dignissim commodo nunc. Morbi a semper nulla.</p>*/
/*                                 <p>Proin mauris odio, pharetra quis ligula non, vulputate vehicula quam. Nunc in libero vitae nunc ultricies tincidunt ut sed leo. Sed luctus dui ut congue consequat. Cras consequat nisl ante, nec malesuada velit pellentesque ac. Pellentesque nec arcu in ipsum iaculis convallis.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!--/end row-->*/
/* */
/*                     <hr>*/
/* */
/*                     <div class="row">*/
/*                         <!--Social Icons v3-->*/
/*                         <div class="col-sm-6 sm-margin-bottom-30">*/
/*                             <div class="panel panel-profile">*/
/*                                 <div class="panel-heading overflow-h">*/
/*                                     <h2 class="panel-title heading-sm pull-left"><i class="fa fa-pencil"></i> Social Contacts <small>(option 1)</small></h2>*/
/*                                     <a href="#"><i class="fa fa-cog pull-right"></i></a>*/
/*                                 </div>*/
/*                                 <div class="panel-body">*/
/*                                      <ul class="list-unstyled social-contacts-v2">*/
/*                                         <li><i class="rounded-x tw fa fa-twitter"></i> <a href="#">edward.rooster</a></li>*/
/*                                         <li><i class="rounded-x fb fa fa-facebook"></i> <a href="#">Edward Rooster</a></li>*/
/*                                         <li><i class="rounded-x sk fa fa-skype"></i> <a href="#">edwardRooster77</a></li>*/
/*                                         <li><i class="rounded-x gp fa fa-google-plus"></i> <a href="#">rooster77edward</a></li>*/
/*                                         <li><i class="rounded-x gm fa fa-envelope"></i> <a href="#">edward77@gmail.com</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!--End Social Icons v3-->*/
/* */
/*                         <!--Skills-->*/
/*                         <div class="col-sm-6 sm-margin-bottom-30">*/
/*                             <div class="panel panel-profile">*/
/*                                 <div class="panel-heading overflow-h">*/
/*                                     <h2 class="panel-title heading-sm pull-left"><i class="fa fa-lightbulb-o"></i> Skills</h2>*/
/*                                     <a href="#"><i class="fa fa-cog pull-right"></i></a>*/
/*                                 </div>*/
/*                                 <div class="panel-body">*/
/*                                     <small>HTML/CSS</small>*/
/*                                     <small>92%</small>*/
/*                                     <div class="progress progress-u progress-xxs">*/
/*                                         <div style="width: 92%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="92" role="progressbar" class="progress-bar progress-bar-u">*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <small>Photoshop</small>*/
/*                                     <small>77%</small>*/
/*                                     <div class="progress progress-u progress-xxs">*/
/*                                         <div style="width: 77%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="77" role="progressbar" class="progress-bar progress-bar-u">*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <small>PHP</small>*/
/*                                     <small>85%</small>*/
/*                                     <div class="progress progress-u progress-xxs">*/
/*                                         <div style="width: 85%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar" class="progress-bar progress-bar-u">*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     <small>Javascript</small>*/
/*                                     <small>81%</small>*/
/*                                     <div class="progress progress-u progress-xxs">*/
/*                                         <div style="width: 81%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="81" role="progressbar" class="progress-bar progress-bar-u">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!--End Skills-->*/
/*                     </div><!--/end row-->*/
/* */
/*                     <hr>*/
/* */
/*                     <!--Timeline-->*/
/*                     <div class="panel panel-profile">*/
/*                         <div class="panel-heading overflow-h">*/
/*                             <h2 class="panel-title heading-sm pull-left"><i class="fa fa-briefcase"></i> Experience</h2>*/
/*                             <a href="#"><i class="fa fa-cog pull-right"></i></a>*/
/*                         </div>*/
/*                         <div class="panel-body margin-bottom-40">*/
/*                             <ul class="timeline-v2 timeline-me">*/
/*                                 <li>*/
/*                                     <time datetime="" class="cbp_tmtime"><span>Mobile Design</span> <span>2012 - Current</span></time>*/
/*                                     <i class="cbp_tmicon rounded-x hidden-xs"></i>*/
/*                                     <div class="cbp_tmlabel">*/
/*                                         <h2>BFC NYC Partners</h2>*/
/*                                         <p>Winter purslane courgette pumpkin quandong komatsuna fennel green bean cucumber watercress. Peasprouts wattle seed rutabaga okra yarrow cress avocado grape.</p>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <time datetime="" class="cbp_tmtime"><span>Web Designer</span> <span>2007 - 2012</span></time>*/
/*                                     <i class="cbp_tmicon rounded-x hidden-xs"></i>*/
/*                                     <div class="cbp_tmlabel">*/
/*                                     <h2>Freelance</h2>*/
/*                                         <p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce.</p>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <time datetime="" class="cbp_tmtime"><span>Photodesigner</span> <span>2003 - 2007</span></time>*/
/*                                     <i class="cbp_tmicon rounded-x hidden-xs"></i>*/
/*                                     <div class="cbp_tmlabel">*/
/*                                     <h2>Toren Condo</h2>*/
/*                                         <p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot.</p>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!--End Timeline-->*/
/* */
/*                     <!--Timeline-->*/
/*                     <div class="panel panel-profile">*/
/*                         <div class="panel-heading overflow-h">*/
/*                             <h2 class="panel-title heading-sm pull-left"><i class="fa fa-mortar-board"></i> Education</h2>*/
/*                             <a href="#"><i class="fa fa-cog pull-right"></i></a>*/
/*                         </div>*/
/*                         <div class="panel-body">*/
/*                             <ul class="timeline-v2 timeline-me">*/
/*                                 <li>*/
/*                                     <time datetime="" class="cbp_tmtime"><span>Bachelor of IT</span> <span>2003 - 2000</span></time>*/
/*                                     <i class="cbp_tmicon rounded-x hidden-xs"></i>*/
/*                                     <div class="cbp_tmlabel">*/
/*                                         <h2>Harvard University</h2>*/
/*                                         <p>Winter purslane courgette pumpkin quandong komatsuna fennel green bean cucumber watercress. Peasprouts wattle seed rutabaga okra yarrow cress avocado grape.</p>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <time datetime="" class="cbp_tmtime"><span>Web Design</span> <span>1997 - 2000</span></time>*/
/*                                     <i class="cbp_tmicon rounded-x hidden-xs"></i>*/
/*                                     <div class="cbp_tmlabel">*/
/*                                     <h2>Imperial College London</h2>*/
/*                                         <p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce.</p>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <time datetime="" class="cbp_tmtime"><span>High School</span> <span>1988 - 1997</span></time>*/
/*                                     <i class="cbp_tmicon rounded-x hidden-xs"></i>*/
/*                                     <div class="cbp_tmlabel">*/
/*                                     <h2>Chicago High School</h2>*/
/*                                         <p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot.</p>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!--End Timeline-->*/
/* */
/*                     <hr>*/
/* */
/*                     <div class="row">*/
/*                         <!--Social Contacts v2-->*/
/*                         <div class="col-sm-6">*/
/*                             <div class="panel panel-profile">*/
/*                                 <div class="panel-heading overflow-h">*/
/*                                     <h2 class="panel-title heading-sm pull-left"><i class="fa fa-lightbulb-o"></i> Social Contacts <small>(option 2)</small></h2>*/
/*                                     <a href="#"><i class="fa fa-cog pull-right"></i></a>*/
/*                                 </div>*/
/*                                 <div class="panel-body">*/
/*                                     <ul class="list-unstyled social-contacts-v3">*/
/*                                         <li><i class="rounded-x tw fa fa-twitter"></i> <a href="#">edward.rooster</a></li>*/
/*                                         <li><i class="rounded-x fb fa fa-facebook"></i> <a href="#">Edward Rooster</a></li>*/
/*                                         <li><i class="rounded-x sk fa fa-skype"></i> <a href="#">edwardRooster77</a></li>*/
/*                                         <li><i class="rounded-x gp fa fa-google-plus"></i> <a href="#">rooster77edward</a></li>*/
/*                                         <li><i class="rounded-x gm icon-envelope"></i> <a href="#">edward77@gmail.com</a></li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!--End Social Contacts v2-->*/
/* */
/*                         <!--Design Skills-->*/
/*                         <div class="col-sm-6">*/
/*                             <div class="panel panel-profile">*/
/*                                 <div class="panel-heading overflow-h">*/
/*                                     <h2 class="panel-title heading-sm pull-left"><i class="fa fa-pencil"></i> Language Skills</h2>*/
/*                                     <a href="#"><i class="fa fa-cog pull-right"></i></a>*/
/*                                 </div>*/
/*                                 <div class="panel-body">*/
/*                                     <div class="row">*/
/*                                          <div class="p-chart col-sm-6 col-xs-6 sm-margin-bottom-10">*/
/*                                             <div class="circle margin-bottom-20" id="circle-4"></div>*/
/*                                             <h3 class="heading-xs">Engagement Score</h3>*/
/*                                             <p>Celery coriander bitterleaf epazote radicchio shallot.</p>*/
/*                                         </div>*/
/*                                         <div class="p-chart col-sm-6 col-xs-6">*/
/*                                             <div class="circle margin-bottom-20" id="circle-5"></div>*/
/*                                             <h3 class="heading-xs">Progfile Completness</h3>*/
/*                                             <p>Celery coriander bitterleaf epazote radicchio shallot.</p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!--End Design Skills-->*/
/*                     </div><!--/end row-->*/
/*                 </div>*/
/*                 {% endblock %}*/
