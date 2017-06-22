<?php

/* backend/index.html.twig */
class __TwigTemplate_9013697dabb3779bede37f78f40820f81b3522e556b9bc12acec27c4e6e056d1 extends Twig_Template
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
        $__internal_d998e466361ea3f8532136ff22a46019759a19684410a5cd5f93d4945ee76c74 = $this->env->getExtension("native_profiler");
        $__internal_d998e466361ea3f8532136ff22a46019759a19684410a5cd5f93d4945ee76c74->enter($__internal_d998e466361ea3f8532136ff22a46019759a19684410a5cd5f93d4945ee76c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d998e466361ea3f8532136ff22a46019759a19684410a5cd5f93d4945ee76c74->leave($__internal_d998e466361ea3f8532136ff22a46019759a19684410a5cd5f93d4945ee76c74_prof);

    }

    // line 4
    public function block_section($context, array $blocks = array())
    {
        $__internal_4b993073473a7159fe40b15f7ad8bf0974f6a6f496803a4144db21a7e4d25783 = $this->env->getExtension("native_profiler");
        $__internal_4b993073473a7159fe40b15f7ad8bf0974f6a6f496803a4144db21a7e4d25783->enter($__internal_4b993073473a7159fe40b15f7ad8bf0974f6a6f496803a4144db21a7e4d25783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

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
        
        $__internal_4b993073473a7159fe40b15f7ad8bf0974f6a6f496803a4144db21a7e4d25783->leave($__internal_4b993073473a7159fe40b15f7ad8bf0974f6a6f496803a4144db21a7e4d25783_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bcab8530b072ce056f59c49af620200ff06fec2c0d428885138a91210b9d819d = $this->env->getExtension("native_profiler");
        $__internal_bcab8530b072ce056f59c49af620200ff06fec2c0d428885138a91210b9d819d->enter($__internal_bcab8530b072ce056f59c49af620200ff06fec2c0d428885138a91210b9d819d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/backend/admin.js\"></script>
  <script>
    \$(function () {
      drawSales(";
        // line 68
        echo twig_jsonencode_filter((isset($context["dailySales"]) ? $context["dailySales"] : $this->getContext($context, "dailySales")));
        echo ", ";
        echo twig_jsonencode_filter((isset($context["totalSales"]) ? $context["totalSales"] : $this->getContext($context, "totalSales")));
        echo ");
    });
  </script>
";
        
        $__internal_bcab8530b072ce056f59c49af620200ff06fec2c0d428885138a91210b9d819d->leave($__internal_bcab8530b072ce056f59c49af620200ff06fec2c0d428885138a91210b9d819d_prof);

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
        return array (  121 => 68,  115 => 65,  110 => 64,  104 => 63,  41 => 5,  35 => 4,  11 => 1,);
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
