<?php

/* ::navbarProfile.html.twig */
class __TwigTemplate_1b3fa4b1fac16ec2db79016f9dff5901889f314f59677ea5935b5d5c9a0d8dc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::enligne.html.twig", "::navbarProfile.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
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
        echo "<!--=== Profile ===-->

            <!--Left Sidebar-->
            <div class=\"col-md-3 md-margin-bottom-40\">
                <img class=\"img-responsive profile-img margin-bottom-20\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/team/img32-md.jpg"), "html", null, true);
        echo "\" alt=\"\">

                <ul class=\"list-group sidebar-nav-v1 margin-bottom-40\" id=\"sidebar-nav-1\">
                    <li class=\"list-group-item\">
                        <a href=\"page_profile.html\"><i class=\"fa fa-bar-chart-o\"></i> Overall</a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"page_profile_me.html\"><i class=\"fa fa-user\"></i> Profile</a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"page_profile_users.html\"><i class=\"fa fa-group\"></i> Users</a>
                    </li>
                    <li class=\"list-group-item active\">
                        <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("projet");
        echo "\"><i class=\"fa fa-cubes\"></i> mes projets</a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"page_profile_comments.html\"><i class=\"fa fa-comments\"></i> Comments</a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"page_profile_history.html\"><i class=\"fa fa-history\"></i> History</a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("modifierProfile");
        echo "\"><i class=\"fa fa-cog\"></i> mes parametre</a>
                    </li>
                </ul>

                <div class=\"panel-heading-v2 overflow-h\">
                    <h2 class=\"heading-xs pull-left\"><i class=\"fa fa-bar-chart-o\"></i> Task Progress</h2>
                    <a href=\"#\"><i class=\"fa fa-cog pull-right\"></i></a>
                </div>
                <h3 class=\"heading-xs\">Web Design <span class=\"pull-right\">92%</span></h3>
                <div class=\"progress progress-u progress-xxs\">
                    <div style=\"width: 92%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"92\" role=\"progressbar\" class=\"progress-bar progress-bar-u\">
                    </div>
                </div>
                <h3 class=\"heading-xs\">Unify Project <span class=\"pull-right\">85%</span></h3>
                <div class=\"progress progress-u progress-xxs\">
                    <div style=\"width: 85%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"85\" role=\"progressbar\" class=\"progress-bar progress-bar-blue\">
                    </div>
                </div>
                <h3 class=\"heading-xs\">Sony Corporation <span class=\"pull-right\">64%</span></h3>
                <div class=\"progress progress-u progress-xxs margin-bottom-40\">
                    <div style=\"width: 64%\" aria-valuemax=\"100\" aria-valuemin=\"0\" aria-valuenow=\"64\" role=\"progressbar\" class=\"progress-bar progress-bar-dark\">
                    </div>
                </div>

                <hr>

                <!--Notification-->
                <div class=\"panel-heading-v2 overflow-h\">
                    <h2 class=\"heading-xs pull-left\"><i class=\"fa fa-bell-o\"></i> Notification</h2>
                    <a href=\"#\"><i class=\"fa fa-cog pull-right\"></i></a>
                </div>
                <ul class=\"list-unstyled mCustomScrollbar margin-bottom-20\" data-mcs-theme=\"minimal-dark\">
                    <li class=\"notification\">
                        <i class=\"icon-custom icon-sm rounded-x icon-bg-red icon-line icon-envelope\"></i>
                        <div class=\"overflow-h\">
                            <span><strong>Albert Heller</strong> has sent you email.</span>
                            <small>Two minutes ago</small>
                        </div>
                    </li>
                    <li class=\"notification\">
                        <img class=\"rounded-x\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/testimonials/img6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"overflow-h\">
                            <span><strong>Taylor Lee</strong> started following you.</span>
                            <small>Today 18:25 pm</small>
                        </div>
                    </li>
                    <li class=\"notification\">
                        <i class=\"icon-custom icon-sm rounded-x icon-bg-yellow icon-line fa fa-bolt\"></i>
                        <div class=\"overflow-h\">
                            <span><strong>Natasha Kolnikova</strong> accepted your invitation.</span>
                            <small>Yesterday 1:07 pm</small>
                        </div>
                    </li>
                    <li class=\"notification\">
                        <img class=\"rounded-x\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/testimonials/img1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"overflow-h\">
                            <span><strong>Mikel Andrews</strong> commented on your Timeline.</span>
                            <small>23/12 11:01 am</small>
                        </div>
                    </li>
                    <li class=\"notification\">
                        <i class=\"icon-custom icon-sm rounded-x icon-bg-blue icon-line fa fa-comments\"></i>
                        <div class=\"overflow-h\">
                            <span><strong>Bruno Js.</strong> added you to group chating.</span>
                            <small>Yesterday 1:07 pm</small>
                        </div>
                    </li>
                    <li class=\"notification\">
                        <img class=\"rounded-x\" src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/testimonials/img6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"overflow-h\">
                            <span><strong>Taylor Lee</strong> changed profile picture.</span>
                            <small>23/12 15:15 pm</small>
                        </div>
                    </li>
                </ul>
                <button type=\"button\" class=\"btn-u btn-u-default btn-u-sm btn-block\">Load More</button>
                <!--End Notification-->

                <div class=\"margin-bottom-50\"></div>

                <!--Datepicker-->
                <form action=\"#\" id=\"sky-form2\" class=\"sky-form\">
                    <div id=\"inline-start\"></div>
                </form>
                <!--End Datepicker-->
            </div>
            <!--End Left Sidebar-->

            ";
    }

    public function getTemplateName()
    {
        return "::navbarProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 97,  125 => 83,  108 => 69,  65 => 29,  53 => 20,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::enligne.html.twig" %}*/
/* {% block navbar %}*/
/* <!--=== Profile ===-->*/
/* */
/*             <!--Left Sidebar-->*/
/*             <div class="col-md-3 md-margin-bottom-40">*/
/*                 <img class="img-responsive profile-img margin-bottom-20" src="{{asset('assets/img/team/img32-md.jpg')}}" alt="">*/
/* */
/*                 <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">*/
/*                     <li class="list-group-item">*/
/*                         <a href="page_profile.html"><i class="fa fa-bar-chart-o"></i> Overall</a>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <a href="page_profile_me.html"><i class="fa fa-user"></i> Profile</a>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <a href="page_profile_users.html"><i class="fa fa-group"></i> Users</a>*/
/*                     </li>*/
/*                     <li class="list-group-item active">*/
/*                         <a href="{{path('projet')}}"><i class="fa fa-cubes"></i> mes projets</a>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <a href="page_profile_comments.html"><i class="fa fa-comments"></i> Comments</a>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <a href="page_profile_history.html"><i class="fa fa-history"></i> History</a>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <a href="{{path('modifierProfile')}}"><i class="fa fa-cog"></i> mes parametre</a>*/
/*                     </li>*/
/*                 </ul>*/
/* */
/*                 <div class="panel-heading-v2 overflow-h">*/
/*                     <h2 class="heading-xs pull-left"><i class="fa fa-bar-chart-o"></i> Task Progress</h2>*/
/*                     <a href="#"><i class="fa fa-cog pull-right"></i></a>*/
/*                 </div>*/
/*                 <h3 class="heading-xs">Web Design <span class="pull-right">92%</span></h3>*/
/*                 <div class="progress progress-u progress-xxs">*/
/*                     <div style="width: 92%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="92" role="progressbar" class="progress-bar progress-bar-u">*/
/*                     </div>*/
/*                 </div>*/
/*                 <h3 class="heading-xs">Unify Project <span class="pull-right">85%</span></h3>*/
/*                 <div class="progress progress-u progress-xxs">*/
/*                     <div style="width: 85%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar" class="progress-bar progress-bar-blue">*/
/*                     </div>*/
/*                 </div>*/
/*                 <h3 class="heading-xs">Sony Corporation <span class="pull-right">64%</span></h3>*/
/*                 <div class="progress progress-u progress-xxs margin-bottom-40">*/
/*                     <div style="width: 64%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="64" role="progressbar" class="progress-bar progress-bar-dark">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <hr>*/
/* */
/*                 <!--Notification-->*/
/*                 <div class="panel-heading-v2 overflow-h">*/
/*                     <h2 class="heading-xs pull-left"><i class="fa fa-bell-o"></i> Notification</h2>*/
/*                     <a href="#"><i class="fa fa-cog pull-right"></i></a>*/
/*                 </div>*/
/*                 <ul class="list-unstyled mCustomScrollbar margin-bottom-20" data-mcs-theme="minimal-dark">*/
/*                     <li class="notification">*/
/*                         <i class="icon-custom icon-sm rounded-x icon-bg-red icon-line icon-envelope"></i>*/
/*                         <div class="overflow-h">*/
/*                             <span><strong>Albert Heller</strong> has sent you email.</span>*/
/*                             <small>Two minutes ago</small>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="notification">*/
/*                         <img class="rounded-x" src="{{asset('assets/img/testimonials/img6.jpg')}}" alt="">*/
/*                         <div class="overflow-h">*/
/*                             <span><strong>Taylor Lee</strong> started following you.</span>*/
/*                             <small>Today 18:25 pm</small>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="notification">*/
/*                         <i class="icon-custom icon-sm rounded-x icon-bg-yellow icon-line fa fa-bolt"></i>*/
/*                         <div class="overflow-h">*/
/*                             <span><strong>Natasha Kolnikova</strong> accepted your invitation.</span>*/
/*                             <small>Yesterday 1:07 pm</small>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="notification">*/
/*                         <img class="rounded-x" src="{{asset('assets/img/testimonials/img1.jpg')}}" alt="">*/
/*                         <div class="overflow-h">*/
/*                             <span><strong>Mikel Andrews</strong> commented on your Timeline.</span>*/
/*                             <small>23/12 11:01 am</small>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="notification">*/
/*                         <i class="icon-custom icon-sm rounded-x icon-bg-blue icon-line fa fa-comments"></i>*/
/*                         <div class="overflow-h">*/
/*                             <span><strong>Bruno Js.</strong> added you to group chating.</span>*/
/*                             <small>Yesterday 1:07 pm</small>*/
/*                         </div>*/
/*                     </li>*/
/*                     <li class="notification">*/
/*                         <img class="rounded-x" src="{{asset('assets/img/testimonials/img6.jpg')}}" alt="">*/
/*                         <div class="overflow-h">*/
/*                             <span><strong>Taylor Lee</strong> changed profile picture.</span>*/
/*                             <small>23/12 15:15 pm</small>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <button type="button" class="btn-u btn-u-default btn-u-sm btn-block">Load More</button>*/
/*                 <!--End Notification-->*/
/* */
/*                 <div class="margin-bottom-50"></div>*/
/* */
/*                 <!--Datepicker-->*/
/*                 <form action="#" id="sky-form2" class="sky-form">*/
/*                     <div id="inline-start"></div>*/
/*                 </form>*/
/*                 <!--End Datepicker-->*/
/*             </div>*/
/*             <!--End Left Sidebar-->*/
/* */
/*             {% endblock %}*/
