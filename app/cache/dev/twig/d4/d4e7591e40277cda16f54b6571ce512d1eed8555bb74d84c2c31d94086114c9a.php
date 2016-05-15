<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_f3aa21da149affbd1d13008533c836ac8b4cbd7f47a41e10e2d5f019da77d052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("::enligneFOS.html.twig", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", 5);
        $this->blocks = array(
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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "

    <div class=\"profile-body margin-bottom-20\">
        <div class=\"tab-v1\">
            <ul class=\"nav nav-justified nav-tabs\">
                <li class=\"active\"><a data-toggle=\"tab\" href=\"#profile\">parametre de securite </a></li>



            </ul>
            <div class=\"tab-content\">
                <div id=\"profile\" class=\"profile-edit tab-pane fade in active\">
                    <h2 class=\"heading-md\">changer votre mot de passe</h2>
                    <p></p>
                    <br>
                    <dl class=\"dl-horizontal\">
                       


              ";
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                    </dl>
                                                                        <button type=\"button\" class=\"btn-u\">Save Changes</button>

                    <button type=\"button\" class=\"btn-u btn-u-default\">Cancel</button>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 33,  64 => 31,  59 => 29,  55 => 28,  52 => 27,  31 => 7,  28 => 6,  11 => 5,);
    }
}
/* */
/* */
/* */
/* */
/* {% extends "::enligneFOS.html.twig" %}*/
/* {%block body %}*/
/* */
/* */
/*     <div class="profile-body margin-bottom-20">*/
/*         <div class="tab-v1">*/
/*             <ul class="nav nav-justified nav-tabs">*/
/*                 <li class="active"><a data-toggle="tab" href="#profile">parametre de securite </a></li>*/
/* */
/* */
/* */
/*             </ul>*/
/*             <div class="tab-content">*/
/*                 <div id="profile" class="profile-edit tab-pane fade in active">*/
/*                     <h2 class="heading-md">changer votre mot de passe</h2>*/
/*                     <p></p>*/
/*                     <br>*/
/*                     <dl class="dl-horizontal">*/
/*                        */
/* */
/* */
/*               {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'change_password.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
/*                     </dl>*/
/*                                                                         <button type="button" class="btn-u">Save Changes</button>*/
/* */
/*                     <button type="button" class="btn-u btn-u-default">Cancel</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
