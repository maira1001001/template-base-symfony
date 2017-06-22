<?php

/* backend/index.html.twig */
class __TwigTemplate_6d98eac4f3c08573e40ff9b3681296bdfbc5a941a6c948792bd36af30e26bb95 extends Twig_Template
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
        $__internal_5d123090655342b0ac6da0479d6cb221a564a0d3fbc733e667df04fde68220b3 = $this->env->getExtension("native_profiler");
        $__internal_5d123090655342b0ac6da0479d6cb221a564a0d3fbc733e667df04fde68220b3->enter($__internal_5d123090655342b0ac6da0479d6cb221a564a0d3fbc733e667df04fde68220b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d123090655342b0ac6da0479d6cb221a564a0d3fbc733e667df04fde68220b3->leave($__internal_5d123090655342b0ac6da0479d6cb221a564a0d3fbc733e667df04fde68220b3_prof);

    }

    // line 4
    public function block_section($context, array $blocks = array())
    {
        $__internal_cdac834656e5d335a5b4012d537ce6532bc29bc5226d8381bed345d47f9f30e2 = $this->env->getExtension("native_profiler");
        $__internal_cdac834656e5d335a5b4012d537ce6532bc29bc5226d8381bed345d47f9f30e2->enter($__internal_cdac834656e5d335a5b4012d537ce6532bc29bc5226d8381bed345d47f9f30e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

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
        
        $__internal_cdac834656e5d335a5b4012d537ce6532bc29bc5226d8381bed345d47f9f30e2->leave($__internal_cdac834656e5d335a5b4012d537ce6532bc29bc5226d8381bed345d47f9f30e2_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0710cc32fd52ceb536ec7bcff4a9f4307f7329f2606a188eacf7f9d9282650b0 = $this->env->getExtension("native_profiler");
        $__internal_0710cc32fd52ceb536ec7bcff4a9f4307f7329f2606a188eacf7f9d9282650b0->enter($__internal_0710cc32fd52ceb536ec7bcff4a9f4307f7329f2606a188eacf7f9d9282650b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_0710cc32fd52ceb536ec7bcff4a9f4307f7329f2606a188eacf7f9d9282650b0->leave($__internal_0710cc32fd52ceb536ec7bcff4a9f4307f7329f2606a188eacf7f9d9282650b0_prof);

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
