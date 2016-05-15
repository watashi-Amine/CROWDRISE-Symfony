<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_22fb1760494836ee492c01a8977673ca3a3544cac9fc76aef217d490db1368ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::enligneFOS.html.twig", "FOSUserBundle:Profile:edit_content.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::enligneFOS.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_navbar($context, array $blocks = array())
    {
        // line 3
        echo "        
                        ";
        // line 4
        $this->loadTemplate("::sidebar.html.twig", "FOSUserBundle:Profile:edit_content.html.twig", 4)->display($context);
        // line 5
        echo "
        ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "

    <div class=\"profile-body margin-bottom-20\">
        <div class=\"tab-v1\">
            <ul class=\"nav nav-justified nav-tabs\">
                <li class=\"active\"><a data-toggle=\"tab\" href=\"#profile\">modifier info </a></li>



            </ul>
            <div class=\"tab-content\">
                <div id=\"profile\" class=\"profile-edit tab-pane fade in active\">
                    <h2 class=\"heading-md\">changer vos information</h2>
                    <p></p>
                    <br>
                    <dl class=\"dl-horizontal\">
                        <dt><strong>Nom d'utilisateur</strong></dt>
                        <dd>
                         
                            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                            <span>
                                <a class=\"pull-right\" href=\"#\">
                                    <i class=\"fa fa-pencil\"></i>
                                </a>
                            </span>
                        </dd>
                        <hr>
                        <dt><strong>email </strong></dt>
                        <dd>
                            ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
        echo "
                            <span>
                                <a class=\"pull-right\" href=\"#\">
                                    <i class=\"fa fa-pencil\"></i>
                                </a>
                            </span>
                        </dd>


                        ";
        // line 47
        echo "


                        ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
                        ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <div>
                            <input type=\"submit\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                                                <button type=\"button\" class=\"btn-u\">Save Changes</button>

                        </div>
                                                

                        ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                    </dl>
                    <button type=\"button\" class=\"btn-u btn-u-default\">Cancel</button>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 59,  105 => 53,  100 => 51,  96 => 50,  91 => 47,  79 => 37,  66 => 27,  45 => 8,  42 => 7,  37 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "::enligneFOS.html.twig" %}*/
/*     {% block navbar %}*/
/*         */
/*                         {% include '::sidebar.html.twig' %}*/
/* */
/*         {% endblock %}*/
/* {%block body %}*/
/* */
/* */
/*     <div class="profile-body margin-bottom-20">*/
/*         <div class="tab-v1">*/
/*             <ul class="nav nav-justified nav-tabs">*/
/*                 <li class="active"><a data-toggle="tab" href="#profile">modifier info </a></li>*/
/* */
/* */
/* */
/*             </ul>*/
/*             <div class="tab-content">*/
/*                 <div id="profile" class="profile-edit tab-pane fade in active">*/
/*                     <h2 class="heading-md">changer vos information</h2>*/
/*                     <p></p>*/
/*                     <br>*/
/*                     <dl class="dl-horizontal">*/
/*                         <dt><strong>Nom d'utilisateur</strong></dt>*/
/*                         <dd>*/
/*                          */
/*                             {{app.user.username}}*/
/*                             <span>*/
/*                                 <a class="pull-right" href="#">*/
/*                                     <i class="fa fa-pencil"></i>*/
/*                                 </a>*/
/*                             </span>*/
/*                         </dd>*/
/*                         <hr>*/
/*                         <dt><strong>email </strong></dt>*/
/*                         <dd>*/
/*                             {{app.user.email}}*/
/*                             <span>*/
/*                                 <a class="pull-right" href="#">*/
/*                                     <i class="fa fa-pencil"></i>*/
/*                                 </a>*/
/*                             </span>*/
/*                         </dd>*/
/* */
/* */
/*                         {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* */
/*                         {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*                         {{ form_widget(form) }}*/
/*                         <div>*/
/*                             <input type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*                                                 <button type="button" class="btn-u">Save Changes</button>*/
/* */
/*                         </div>*/
/*                                                 */
/* */
/*                         {{ form_end(form) }}*/
/* */
/*                     </dl>*/
/*                     <button type="button" class="btn-u btn-u-default">Cancel</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
