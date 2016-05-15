<?php

/* crowdBundle:admin:edit_profile.html.twig */
class __TwigTemplate_8bbc4c28b98aedfb79349dd420d79ec04a3a31e5a3aec29c56e16b1ce67d3584 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::adminbase.html.twig", "crowdBundle:admin:edit_profile.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"page-content\">
        <!-- #section:settings.box -->
        <div class=\"ace-settings-container\" id=\"ace-settings-container\">
            <div class=\"btn btn-app btn-xs btn-warning ace-settings-btn\" id=\"ace-settings-btn\">
                <i class=\"ace-icon fa fa-cog bigger-130\"></i>
            </div>

            <div class=\"ace-settings-box clearfix\" id=\"ace-settings-box\">
                <div class=\"pull-left width-50\">
                    <!-- #section:settings.skins -->
                    <div class=\"ace-settings-item\">
                        <div class=\"pull-left\">
                            <select id=\"skin-colorpicker\" class=\"hide\">
                                <option data-skin=\"no-skin\" value=\"#438EB9\">#438EB9</option>
                                <option data-skin=\"skin-1\" value=\"#222A2D\">#222A2D</option>
                                <option data-skin=\"skin-2\" value=\"#C6487E\">#C6487E</option>
                                <option data-skin=\"skin-3\" value=\"#D0D0D0\">#D0D0D0</option>
                            </select><div class=\"dropdown dropdown-colorpicker\">\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"><span class=\"btn-colorpicker\" style=\"background-color:#438EB9\"></span></a><ul class=\"dropdown-menu dropdown-caret\"><li><a class=\"colorpick-btn selected\" href=\"#\" style=\"background-color:#438EB9;\" data-color=\"#438EB9\"></a></li><li><a class=\"colorpick-btn\" href=\"#\" style=\"background-color:#222A2D;\" data-color=\"#222A2D\"></a></li><li><a class=\"colorpick-btn\" href=\"#\" style=\"background-color:#C6487E;\" data-color=\"#C6487E\"></a></li><li><a class=\"colorpick-btn\" href=\"#\" style=\"background-color:#D0D0D0;\" data-color=\"#D0D0D0\"></a></li></ul></div>
                        </div>
                        <span>&nbsp; Choose Skin</span>
                    </div>

                    <!-- /section:settings.skins -->

                    <!-- #section:settings.navbar -->
                    <div class=\"ace-settings-item\">
                        <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-navbar\">
                        <label class=\"lbl\" for=\"ace-settings-navbar\"> Fixed Navbar</label>
                    </div>

                    <!-- /section:settings.navbar -->

                    <!-- #section:settings.sidebar -->
                    <div class=\"ace-settings-item\">
                        <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-sidebar\">
                        <label class=\"lbl\" for=\"ace-settings-sidebar\"> Fixed Sidebar</label>
                    </div>

                    <!-- /section:settings.sidebar -->

                    <!-- #section:settings.breadcrumbs -->
                    <div class=\"ace-settings-item\">
                        <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-breadcrumbs\">
                        <label class=\"lbl\" for=\"ace-settings-breadcrumbs\"> Fixed Breadcrumbs</label>
                    </div>

                    <!-- /section:settings.breadcrumbs -->

                    <!-- #section:settings.rtl -->
                    <div class=\"ace-settings-item\">
                        <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-rtl\">
                        <label class=\"lbl\" for=\"ace-settings-rtl\"> Right To Left (rtl)</label>
                    </div>

                    <!-- /section:settings.rtl -->

                    <!-- #section:settings.container -->
                    <div class=\"ace-settings-item\">
                        <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-add-container\">
                        <label class=\"lbl\" for=\"ace-settings-add-container\">
                            Inside
                            <b>.container</b>
                        </label>
                    </div>

                    <!-- /section:settings.container -->
                </div><!-- /.pull-left -->

                <div class=\"pull-left width-50\">
                    <!-- #section:basics/sidebar.options -->
                    <div class=\"ace-settings-item\">
                        <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-hover\">
                        <label class=\"lbl\" for=\"ace-settings-hover\"> Submenu on Hover</label>
                    </div>

                    <div class=\"ace-settings-item\">
                        <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-compact\">
                        <label class=\"lbl\" for=\"ace-settings-compact\"> Compact Sidebar</label>
                    </div>

                    <div class=\"ace-settings-item\">
                        <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-highlight\">
                        <label class=\"lbl\" for=\"ace-settings-highlight\"> Alt. Active Item</label>
                    </div>

                    <!-- /section:basics/sidebar.options -->
                </div><!-- /.pull-left -->
            </div><!-- /.ace-settings-box -->
        </div><!-- /.ace-settings-container -->
   
        <!-- /section:settings.box -->
        <div class=\"page-header\">
            <h1>
                Form Elements
                <small>
                    <i class=\"ace-icon fa fa-angle-double-right\"></i>
                    Common form elements and layouts
                </small>
            </h1>        </div><!-- /.page-header -->


        <div class=\"row\">
            <div class=\"col-xs-12\">
                <!-- PAGE CONTENT BEGINS -->
                
                     <div>
        
                   
            ";
        // line 112
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
            ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'errors');
        echo "
            ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username", array()), 'row');
        echo "



            ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'row');
        echo "

            ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'row', array("label" => "Submit me"));
        echo "
            ";
        // line 121
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
            
                <li>";
        // line 123
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>

        </div>
                <form class=\"form-horizontal\" role=\"form\">
                    <!-- #section:elements.form -->
                    
             <div class=\"form-group\">
                   
                        <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"> username </label>

                        <div class=\"col-sm-9\">
                            <input type=\"text\" id=\"form-field-1\" placeholder=\"Username\" class=\"col-xs-10 col-sm-5\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1-1\"> email   </label>

                        <div class=\"col-sm-9\">
                            <input type=\"text\" id=\"form-field-1-1\" placeholder=\"Text Field\" class=\"form-control\">
                        </div>
                    </div>

                    <!-- /section:elements.form -->






















                    <div class=\"form-group\">


                        <div class=\"col-sm-9\">
                            <!-- #section:plugins/input.tag-input -->
                            <div class=\"inline\">

                            </div>

                            <!-- /section:plugins/input.tag-input -->
                        </div>
                    </div>

                    <div class=\"clearfix form-actions\">
                        <div class=\"col-md-offset-3 col-md-9\">
                            <button class=\"btn btn-info\" type=\"button\">
                                <i class=\"ace-icon fa fa-check bigger-110\"></i>
                                Submit
                            </button>

                            &nbsp; &nbsp; &nbsp;
                            <button class=\"btn\" type=\"reset\">
                                <i class=\"ace-icon fa fa-undo bigger-110\"></i>
                                Reset
                            </button>
                        </div>
                    </div>

                    <div class=\"hr hr-24\"></div>
 </div>
        </div>
    </div><!-- PAGE CONTENT ENDS -->



            
 

";
    }

    public function getTemplateName()
    {
        return "crowdBundle:admin:edit_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 123,  165 => 121,  161 => 120,  156 => 118,  149 => 114,  145 => 113,  141 => 112,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "::adminbase.html.twig"%}*/
/* */
/* {% block body %}*/
/*         <div class="page-content">*/
/*         <!-- #section:settings.box -->*/
/*         <div class="ace-settings-container" id="ace-settings-container">*/
/*             <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">*/
/*                 <i class="ace-icon fa fa-cog bigger-130"></i>*/
/*             </div>*/
/* */
/*             <div class="ace-settings-box clearfix" id="ace-settings-box">*/
/*                 <div class="pull-left width-50">*/
/*                     <!-- #section:settings.skins -->*/
/*                     <div class="ace-settings-item">*/
/*                         <div class="pull-left">*/
/*                             <select id="skin-colorpicker" class="hide">*/
/*                                 <option data-skin="no-skin" value="#438EB9">#438EB9</option>*/
/*                                 <option data-skin="skin-1" value="#222A2D">#222A2D</option>*/
/*                                 <option data-skin="skin-2" value="#C6487E">#C6487E</option>*/
/*                                 <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>*/
/*                             </select><div class="dropdown dropdown-colorpicker">		<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="btn-colorpicker" style="background-color:#438EB9"></span></a><ul class="dropdown-menu dropdown-caret"><li><a class="colorpick-btn selected" href="#" style="background-color:#438EB9;" data-color="#438EB9"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#222A2D;" data-color="#222A2D"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#C6487E;" data-color="#C6487E"></a></li><li><a class="colorpick-btn" href="#" style="background-color:#D0D0D0;" data-color="#D0D0D0"></a></li></ul></div>*/
/*                         </div>*/
/*                         <span>&nbsp; Choose Skin</span>*/
/*                     </div>*/
/* */
/*                     <!-- /section:settings.skins -->*/
/* */
/*                     <!-- #section:settings.navbar -->*/
/*                     <div class="ace-settings-item">*/
/*                         <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar">*/
/*                         <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>*/
/*                     </div>*/
/* */
/*                     <!-- /section:settings.navbar -->*/
/* */
/*                     <!-- #section:settings.sidebar -->*/
/*                     <div class="ace-settings-item">*/
/*                         <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar">*/
/*                         <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>*/
/*                     </div>*/
/* */
/*                     <!-- /section:settings.sidebar -->*/
/* */
/*                     <!-- #section:settings.breadcrumbs -->*/
/*                     <div class="ace-settings-item">*/
/*                         <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs">*/
/*                         <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>*/
/*                     </div>*/
/* */
/*                     <!-- /section:settings.breadcrumbs -->*/
/* */
/*                     <!-- #section:settings.rtl -->*/
/*                     <div class="ace-settings-item">*/
/*                         <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl">*/
/*                         <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>*/
/*                     </div>*/
/* */
/*                     <!-- /section:settings.rtl -->*/
/* */
/*                     <!-- #section:settings.container -->*/
/*                     <div class="ace-settings-item">*/
/*                         <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container">*/
/*                         <label class="lbl" for="ace-settings-add-container">*/
/*                             Inside*/
/*                             <b>.container</b>*/
/*                         </label>*/
/*                     </div>*/
/* */
/*                     <!-- /section:settings.container -->*/
/*                 </div><!-- /.pull-left -->*/
/* */
/*                 <div class="pull-left width-50">*/
/*                     <!-- #section:basics/sidebar.options -->*/
/*                     <div class="ace-settings-item">*/
/*                         <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover">*/
/*                         <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>*/
/*                     </div>*/
/* */
/*                     <div class="ace-settings-item">*/
/*                         <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact">*/
/*                         <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>*/
/*                     </div>*/
/* */
/*                     <div class="ace-settings-item">*/
/*                         <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight">*/
/*                         <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>*/
/*                     </div>*/
/* */
/*                     <!-- /section:basics/sidebar.options -->*/
/*                 </div><!-- /.pull-left -->*/
/*             </div><!-- /.ace-settings-box -->*/
/*         </div><!-- /.ace-settings-container -->*/
/*    */
/*         <!-- /section:settings.box -->*/
/*         <div class="page-header">*/
/*             <h1>*/
/*                 Form Elements*/
/*                 <small>*/
/*                     <i class="ace-icon fa fa-angle-double-right"></i>*/
/*                     Common form elements and layouts*/
/*                 </small>*/
/*             </h1>        </div><!-- /.page-header -->*/
/* */
/* */
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <!-- PAGE CONTENT BEGINS -->*/
/*                 */
/*                      <div>*/
/*         */
/*                    */
/*             {{ form_start(edit_form) }}*/
/*             {{ form_errors(edit_form) }}*/
/*             {{ form_row(edit_form.username) }}*/
/* */
/* */
/* */
/*             {{ form_row(edit_form.email) }}*/
/* */
/*             {{ form_row(edit_form.submit, { 'label': 'Submit me' }) }}*/
/*             {{ form_end(edit_form) }}*/
/*             */
/*                 <li>{{ form(delete_form) }}</li>*/
/* */
/*         </div>*/
/*                 <form class="form-horizontal" role="form">*/
/*                     <!-- #section:elements.form -->*/
/*                     */
/*              <div class="form-group">*/
/*                    */
/*                         <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> username </label>*/
/* */
/*                         <div class="col-sm-9">*/
/*                             <input type="text" id="form-field-1" placeholder="Username" class="col-xs-10 col-sm-5">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> email   </label>*/
/* */
/*                         <div class="col-sm-9">*/
/*                             <input type="text" id="form-field-1-1" placeholder="Text Field" class="form-control">*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <!-- /section:elements.form -->*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*                     <div class="form-group">*/
/* */
/* */
/*                         <div class="col-sm-9">*/
/*                             <!-- #section:plugins/input.tag-input -->*/
/*                             <div class="inline">*/
/* */
/*                             </div>*/
/* */
/*                             <!-- /section:plugins/input.tag-input -->*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="clearfix form-actions">*/
/*                         <div class="col-md-offset-3 col-md-9">*/
/*                             <button class="btn btn-info" type="button">*/
/*                                 <i class="ace-icon fa fa-check bigger-110"></i>*/
/*                                 Submit*/
/*                             </button>*/
/* */
/*                             &nbsp; &nbsp; &nbsp;*/
/*                             <button class="btn" type="reset">*/
/*                                 <i class="ace-icon fa fa-undo bigger-110"></i>*/
/*                                 Reset*/
/*                             </button>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="hr hr-24"></div>*/
/*  </div>*/
/*         </div>*/
/*     </div><!-- PAGE CONTENT ENDS -->*/
/* */
/* */
/* */
/*             */
/*  */
/* */
/* {% endblock %}*/
