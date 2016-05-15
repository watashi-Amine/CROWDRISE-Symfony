<?php

/* crowdBundle:admin:afficher_all_projet.html.twig */
class __TwigTemplate_37d6747189b4413420a85f3496a0a74b5ad33a991f6a94626a41cb8520090904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::adminbase.html.twig", "crowdBundle:admin:afficher_all_projet.html.twig", 3);
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"page-content\">
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
                Tables
                <small>
                    <i class=\"ace-icon fa fa-angle-double-right\"></i>
                    Static &amp; Dynamic Tables
                </small>
            </h1>
        </div><!-- /.page-header -->

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <!-- PAGE CONTENT BEGINS -->
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <table id=\"simple-table\" class=\"table table-striped table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <th class=\"center\">
                                        <label class=\"pos-rel\">
                                            <input type=\"checkbox\" class=\"ace\">
                                            <span class=\"lbl\"></span>
                                        </label>
                                    </th>
                                                                        <th>id</th>

                                    <th>photo</th>
                                    <th>nom projet</th>
                                    <th class=\"hidden-480\">resumée</th>

                                    <th>
                                        <i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>
budjet                                    </th>
                                    <th class=\"hidden-480\">action</th>

                                </tr>
                            </thead>

                            <tbody>
        ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 137
            echo "                                <tr>
                                      <td class=\"center\">
                                        <label class=\"pos-rel\">
                                            <input type=\"checkbox\" class=\"ace\">
                                            <span class=\"lbl\"></span>
                                        </label>
                                    </td>
                                     <td>
                                        <a href=\"#\">";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "idProjet", array()), "html", null, true);
            echo " </a>
                                    </td>

                                    <td class=\"center\">
                                        <label class=\"pos-rel\">
<a href=\"#\" class=\"thumbnail\">
      <img src=\"\" alt=\"...\">
    </a>
                                        </label>
                                    </td>

                                   
                                    <td>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nomProjet", array()), "html", null, true);
            echo "</td>
                                    <td class=\"hidden-480\">";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "resume", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "budjet", array()), "html", null, true);
            echo "</td>

                                
                                    <td>
                                        
                                        <div class=\"hidden-sm hidden-xs btn-group\">
                                            <button class=\"btn btn-xs btn-success\">
                                                <i  class=\"ace-icon fa fa-check bigger-120\"></i>
                                            </button>

                                            <button  class=\"btn btn-xs btn-info\">
                                                <a href=\"\"><i  class=\"ace-icon fa fa-pencil bigger-120\"></i></a>
                                            </button>

                                            <button class=\"btn btn-xs btn-danger\">
                                                <i class=\"ace-icon fa fa-trash-o bigger-120\"></i>
                                            </button>

                                            <button class=\"btn btn-xs btn-warning\">
                                                <i class=\"ace-icon fa fa-flag bigger-120\"></i>
                                            </button>
                                        </div>

                                        <div class=\"hidden-md hidden-lg\">
                                            <div class=\"inline pos-rel\">
                                                <button class=\"btn btn-minier btn-primary dropdown-toggle\" data-toggle=\"dropdown\" data-position=\"auto\">
                                                    <i class=\"ace-icon fa fa-cog icon-only bigger-110\"></i>
                                                </button>

                                                <ul class=\"dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close\">
                                                    <li>
                                                        <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"\" data-original-title=\"View\">
                                                            <span class=\"blue\">
                                                                <i class=\"ace-icon fa fa-search-plus bigger-120\"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"\" data-original-title=\"Edit\">
                                                            <span class=\"green\">
                                                                <i class=\"ace-icon fa fa-pencil-square-o bigger-120\"></i>
                                                            </span>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href=\"\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"\" data-original-title=\"Delete\">
                                                            <span class=\"red\">
                                                                <i class=\"ace-icon fa fa-trash-o bigger-120\"></i>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "                             </tbody>
                        </table>
                    </div><!-- /.span -->
                </div><!-- /.row -->

                <div class=\"hr hr-18 dotted hr-double\"></div>

                </div><!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
";
    }

    public function getTemplateName()
    {
        return "crowdBundle:admin:afficher_all_projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 218,  200 => 159,  196 => 158,  192 => 157,  177 => 145,  167 => 137,  163 => 136,  31 => 6,  28 => 5,  11 => 3,);
    }
}
/* */
/*         */
/*         {% extends "::adminbase.html.twig"%}*/
/* */
/* {% block body %}*/
/*     <div class="page-content">*/
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
/* */
/*         <!-- /section:settings.box -->*/
/*         <div class="page-header">*/
/*             <h1>*/
/*                 Tables*/
/*                 <small>*/
/*                     <i class="ace-icon fa fa-angle-double-right"></i>*/
/*                     Static &amp; Dynamic Tables*/
/*                 </small>*/
/*             </h1>*/
/*         </div><!-- /.page-header -->*/
/* */
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <!-- PAGE CONTENT BEGINS -->*/
/*                 <div class="row">*/
/*                     <div class="col-xs-12">*/
/*                         <table id="simple-table" class="table table-striped table-bordered table-hover">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     <th class="center">*/
/*                                         <label class="pos-rel">*/
/*                                             <input type="checkbox" class="ace">*/
/*                                             <span class="lbl"></span>*/
/*                                         </label>*/
/*                                     </th>*/
/*                                                                         <th>id</th>*/
/* */
/*                                     <th>photo</th>*/
/*                                     <th>nom projet</th>*/
/*                                     <th class="hidden-480">resumée</th>*/
/* */
/*                                     <th>*/
/*                                         <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>*/
/* budjet                                    </th>*/
/*                                     <th class="hidden-480">action</th>*/
/* */
/*                                 </tr>*/
/*                             </thead>*/
/* */
/*                             <tbody>*/
/*         {% for projet in projets %}*/
/*                                 <tr>*/
/*                                       <td class="center">*/
/*                                         <label class="pos-rel">*/
/*                                             <input type="checkbox" class="ace">*/
/*                                             <span class="lbl"></span>*/
/*                                         </label>*/
/*                                     </td>*/
/*                                      <td>*/
/*                                         <a href="#">{{projet.idProjet}} </a>*/
/*                                     </td>*/
/* */
/*                                     <td class="center">*/
/*                                         <label class="pos-rel">*/
/* <a href="#" class="thumbnail">*/
/*       <img src="" alt="...">*/
/*     </a>*/
/*                                         </label>*/
/*                                     </td>*/
/* */
/*                                    */
/*                                     <td>{{projet.nomProjet}}</td>*/
/*                                     <td class="hidden-480">{{projet.resume}}</td>*/
/*                                     <td>{{projet.budjet}}</td>*/
/* */
/*                                 */
/*                                     <td>*/
/*                                         */
/*                                         <div class="hidden-sm hidden-xs btn-group">*/
/*                                             <button class="btn btn-xs btn-success">*/
/*                                                 <i  class="ace-icon fa fa-check bigger-120"></i>*/
/*                                             </button>*/
/* */
/*                                             <button  class="btn btn-xs btn-info">*/
/*                                                 <a href=""><i  class="ace-icon fa fa-pencil bigger-120"></i></a>*/
/*                                             </button>*/
/* */
/*                                             <button class="btn btn-xs btn-danger">*/
/*                                                 <i class="ace-icon fa fa-trash-o bigger-120"></i>*/
/*                                             </button>*/
/* */
/*                                             <button class="btn btn-xs btn-warning">*/
/*                                                 <i class="ace-icon fa fa-flag bigger-120"></i>*/
/*                                             </button>*/
/*                                         </div>*/
/* */
/*                                         <div class="hidden-md hidden-lg">*/
/*                                             <div class="inline pos-rel">*/
/*                                                 <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">*/
/*                                                     <i class="ace-icon fa fa-cog icon-only bigger-110"></i>*/
/*                                                 </button>*/
/* */
/*                                                 <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">*/
/*                                                     <li>*/
/*                                                         <a href="#" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">*/
/*                                                             <span class="blue">*/
/*                                                                 <i class="ace-icon fa fa-search-plus bigger-120"></i>*/
/*                                                             </span>*/
/*                                                         </a>*/
/*                                                     </li>*/
/* */
/*                                                     <li>*/
/*                                                         <a href="#" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">*/
/*                                                             <span class="green">*/
/*                                                                 <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>*/
/*                                                             </span>*/
/*                                                         </a>*/
/*                                                     </li>*/
/* */
/*                                                     <li>*/
/*                                                         <a href="" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">*/
/*                                                             <span class="red">*/
/*                                                                 <i class="ace-icon fa fa-trash-o bigger-120"></i>*/
/*                                                             </span>*/
/*                                                         </a>*/
/*                                                     </li>*/
/*                                                 </ul>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 {% endfor %}*/
/*                              </tbody>*/
/*                         </table>*/
/*                     </div><!-- /.span -->*/
/*                 </div><!-- /.row -->*/
/* */
/*                 <div class="hr hr-18 dotted hr-double"></div>*/
/* */
/*                 </div><!-- PAGE CONTENT ENDS -->*/
/*             </div><!-- /.col -->*/
/*         </div><!-- /.row -->*/
/*     </div>*/
/* {% endblock %}*/
/*         */
/* */
/* */
