<?php

/* crowdBundle:user:test.html.twig */
class __TwigTemplate_724a39bf759ac989ae26cafbfbee6b9ed1e2be062f2dcdb706b2e81ae3e9c5de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("crowdBundle:user:modifierProfile.html.twig", "crowdBundle:user:test.html.twig", 1);
        $this->blocks = array(
            'pay' => array($this, 'block_pay'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "crowdBundle:user:modifierProfile.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pay($context, array $blocks = array())
    {
        // line 4
        echo "


";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "crowdBundle:user:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  45 => 10,  40 => 8,  36 => 7,  31 => 4,  28 => 2,  11 => 1,);
    }
}
/* {% extends  'crowdBundle:user:modifierProfile.html.twig' %}*/
/* {% block pay %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* */
/* {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'profile.edit.submit'|trans }}" />*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* {% endblock %}{# empty Twig template #}*/
/* */
