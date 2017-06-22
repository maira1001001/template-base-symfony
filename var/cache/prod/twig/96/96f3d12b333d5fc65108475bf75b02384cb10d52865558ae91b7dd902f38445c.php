<?php

/* backend/index.html.twig */
class __TwigTemplate_011aba2cce85aca1a48e5d13a13eaaa66372c2332a62d56f67b49d92a6912e88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/index.html.twig", 1);
        $this->blocks = array(
            'section' => array($this, 'block_section'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_section($context, array $blocks = array())
    {
        // line 5
        echo "<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
  <!-- Content Header (Page header) -->
  <section class=\"content-header\">
    <h1>
      Inicio
      <small>Panel de Control</small>
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Inicio</a></li>
      <li class=\"active\">Panel de Control</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class=\"content\">
    
    <!-- Main row -->
    <div class=\"row\">









<!-- Left col -->
      <section class=\"col-lg-12 connectedSortable\">
              <!-- Custom tabs (Charts with tabs)-->
              <div class=\"nav-tabs-custom\">
                <!-- Tabs within a box -->
                <ul class=\"nav nav-tabs pull-right\">
                  <li><a href=\"#donut-chart\" data-toggle=\"tab\">Total</a></li>
                  <li class=\"active\"><a href=\"#bar-chart\" data-toggle=\"tab\">Diario</a></li>
                  <li class=\"pull-left header\"><i class=\"fa fa-inbox\"></i> Caja de los ultimos 30 dias</li>
                </ul>
                <div class=\"tab-content no-padding\">
                  <!-- Morris chart - Sales -->
                  <div class=\"chart tab-pane active\" id=\"bar-chart\" style=\"position: relative; height: 300px;\"></div>
                  <div class=\"chart tab-pane\" id=\"donut-chart\" style=\"position: relative; height: 300px;\"></div>
                  <div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\"></div>
                </div>
              </div>
              <!-- /.nav-tabs-custom -->
        </section>


      <!-- right col -->
    </div>
    <!-- /.row (main row) -->

  </section>
  <!-- /.content -->
</div>
";
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        // line 64
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/backend/admin.js\"></script>
  <script>
    \$(function () {
      drawSales(";
        // line 68
        echo twig_jsonencode_filter((isset($context["dailySales"]) ? $context["dailySales"] : null));
        echo ", ";
        echo twig_jsonencode_filter((isset($context["totalSales"]) ? $context["totalSales"] : null));
        echo ");
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "backend/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 68,  100 => 65,  95 => 64,  92 => 63,  32 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'backend/base.html.twig' %}*/
/* */
/* */
/* {% block section %}*/
/* <!-- Content Wrapper. Contains page content -->*/
/* <div class="content-wrapper">*/
/*   <!-- Content Header (Page header) -->*/
/*   <section class="content-header">*/
/*     <h1>*/
/*       Inicio*/
/*       <small>Panel de Control</small>*/
/*     </h1>*/
/*     <ol class="breadcrumb">*/
/*       <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>*/
/*       <li class="active">Panel de Control</li>*/
/*     </ol>*/
/*   </section>*/
/* */
/*   <!-- Main content -->*/
/*   <section class="content">*/
/*     */
/*     <!-- Main row -->*/
/*     <div class="row">*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* <!-- Left col -->*/
/*       <section class="col-lg-12 connectedSortable">*/
/*               <!-- Custom tabs (Charts with tabs)-->*/
/*               <div class="nav-tabs-custom">*/
/*                 <!-- Tabs within a box -->*/
/*                 <ul class="nav nav-tabs pull-right">*/
/*                   <li><a href="#donut-chart" data-toggle="tab">Total</a></li>*/
/*                   <li class="active"><a href="#bar-chart" data-toggle="tab">Diario</a></li>*/
/*                   <li class="pull-left header"><i class="fa fa-inbox"></i> Caja de los ultimos 30 dias</li>*/
/*                 </ul>*/
/*                 <div class="tab-content no-padding">*/
/*                   <!-- Morris chart - Sales -->*/
/*                   <div class="chart tab-pane active" id="bar-chart" style="position: relative; height: 300px;"></div>*/
/*                   <div class="chart tab-pane" id="donut-chart" style="position: relative; height: 300px;"></div>*/
/*                   <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>*/
/*                 </div>*/
/*               </div>*/
/*               <!-- /.nav-tabs-custom -->*/
/*         </section>*/
/* */
/* */
/*       <!-- right col -->*/
/*     </div>*/
/*     <!-- /.row (main row) -->*/
/* */
/*   </section>*/
/*   <!-- /.content -->*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   {{parent()}}*/
/*   <script src="{{ app.request.basepath }}/js/backend/admin.js"></script>*/
/*   <script>*/
/*     $(function () {*/
/*       drawSales({{dailySales|json_encode|raw}}, {{totalSales|json_encode|raw}});*/
/*     });*/
/*   </script>*/
/* {% endblock %}*/
