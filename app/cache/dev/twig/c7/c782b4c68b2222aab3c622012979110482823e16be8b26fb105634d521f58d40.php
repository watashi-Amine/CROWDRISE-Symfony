<?php

/* ::sideBar.html.twig */
class __TwigTemplate_5a6df08a7a117fb494c0f679038d3e58586b0f0e8c44026fe00cb8978ac19a9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'test' => array($this, 'block_test'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
            <div class=\"col-md-3 md-margin-bottom-40\">
                <img class=\"img-responsive profile-img margin-bottom-20\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("uploads/photo_profile/" . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) . ".") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "path", array()))), "html", null, true);
        echo "\" alt=\"\">

                <ul class=\"list-group sidebar-nav-v1 margin-bottom-40\" id=\"sidebar-nav-1\">
                    <li class=\"list-group-item active\">
                        <a href=\"page_profile.html\"><i class=\"fa fa-bar-chart-o\"></i> Overall</a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("profile_info");
        echo "\"><i class=\"fa fa-user\"></i> Profile</a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"page_profile_users.html\"><i class=\"fa fa-group\"></i> Users</a>
                    </li>
                  
                    <li class=\"list-group-item\">
                        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("indexowner");
        echo "\"><i class=\"fa fa-cubes\"></i> My Projects</a>
                    </li>
                    
                    
                    
                     <li class=\"list-group-item\">
                        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("projet_new");
        echo "\"><i class=\"fa fa-cubes\"></i> publier mon projet</a>
                    </li>
                     <li class=\"list-group-item\">
                        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("probleme_new2");
        echo "\"><i class=\"fa fa-question\"></i> publie mon probleme</a>
                    </li>
                    
                    
                     <li class=\"list-group-item\">
                        <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("evenement_new");
        echo "\"><i class=\"fa fa-bomb\"></i> publier mon evenement</a>
                    </li>
                    
                    <li class=\"list-group-item\">
                        <a href=\"page_profile_comments.html\"><i class=\"fa fa-comments\"></i> Comments</a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"page_profile_history.html\"><i class=\"fa fa-history\"></i> History</a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("modifierProfile");
        echo "\"><i class=\"fa fa-cog\"></i> parametre</a>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\"><i class=\"fa fa-cog\"></i>edit_content.html.twig </a>
                    </li>
                         <li class=\"list-group-item\">
                        <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\"><i class=\"fa fa-cog\"></i>change_password.html.twig </a>
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
        // line 87
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
        // line 101
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
        // line 115
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

                        ";
        // line 134
        $this->displayBlock('test', $context, $blocks);
    }

    public function block_test($context, array $blocks = array())
    {
        // line 135
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "::sideBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 135,  191 => 134,  169 => 115,  152 => 101,  135 => 87,  92 => 47,  86 => 44,  80 => 41,  67 => 31,  59 => 26,  53 => 23,  44 => 17,  34 => 10,  24 => 3,  20 => 1,);
    }
}
/* */
/*             <div class="col-md-3 md-margin-bottom-40">*/
/*                 <img class="img-responsive profile-img margin-bottom-20" src="{{asset('uploads/photo_profile/'~app.user.id~'.'~app.user.path)}}" alt="">*/
/* */
/*                 <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">*/
/*                     <li class="list-group-item active">*/
/*                         <a href="page_profile.html"><i class="fa fa-bar-chart-o"></i> Overall</a>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <a href="{{path('profile_info')}}"><i class="fa fa-user"></i> Profile</a>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <a href="page_profile_users.html"><i class="fa fa-group"></i> Users</a>*/
/*                     </li>*/
/*                   */
/*                     <li class="list-group-item">*/
/*                         <a href="{{path('indexowner')}}"><i class="fa fa-cubes"></i> My Projects</a>*/
/*                     </li>*/
/*                     */
/*                     */
/*                     */
/*                      <li class="list-group-item">*/
/*                         <a href="{{path('projet_new')}}"><i class="fa fa-cubes"></i> publier mon projet</a>*/
/*                     </li>*/
/*                      <li class="list-group-item">*/
/*                         <a href="{{path('probleme_new2')}}"><i class="fa fa-question"></i> publie mon probleme</a>*/
/*                     </li>*/
/*                     */
/*                     */
/*                      <li class="list-group-item">*/
/*                         <a href="{{path('evenement_new')}}"><i class="fa fa-bomb"></i> publier mon evenement</a>*/
/*                     </li>*/
/*                     */
/*                     <li class="list-group-item">*/
/*                         <a href="page_profile_comments.html"><i class="fa fa-comments"></i> Comments</a>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <a href="page_profile_history.html"><i class="fa fa-history"></i> History</a>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <a href="{{path('modifierProfile')}}"><i class="fa fa-cog"></i> parametre</a>*/
/*                     </li>*/
/*                     <li class="list-group-item">*/
/*                         <a href="{{path('fos_user_profile_edit')}}"><i class="fa fa-cog"></i>edit_content.html.twig </a>*/
/*                     </li>*/
/*                          <li class="list-group-item">*/
/*                         <a href="{{path('fos_user_change_password')}}"><i class="fa fa-cog"></i>change_password.html.twig </a>*/
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
/* */
/*                         {% block test %}*/
/*                             {% endblock %}*/
