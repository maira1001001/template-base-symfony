<?php

/* backend/cash/new.html.twig */
class __TwigTemplate_9f69cf5d1e15e6b4186ea2ca7f3994450db15352e9fbc39271ba9a5b0f550826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/cash/new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0eeaa3c29a58f711bd142008b283eb25ef795b7413f33af7f162d14f9a0052d1 = $this->env->getExtension("native_profiler");
        $__internal_0eeaa3c29a58f711bd142008b283eb25ef795b7413f33af7f162d14f9a0052d1->enter($__internal_0eeaa3c29a58f711bd142008b283eb25ef795b7413f33af7f162d14f9a0052d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/cash/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eeaa3c29a58f711bd142008b283eb25ef795b7413f33af7f162d14f9a0052d1->leave($__internal_0eeaa3c29a58f711bd142008b283eb25ef795b7413f33af7f162d14f9a0052d1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7b4f0b28b46edf5991a1b83805ea2a1c96c15d5b816a6bf188068b1f44daa2c6 = $this->env->getExtension("native_profiler");
        $__internal_7b4f0b28b46edf5991a1b83805ea2a1c96c15d5b816a6bf188068b1f44daa2c6->enter($__internal_7b4f0b28b46edf5991a1b83805ea2a1c96c15d5b816a6bf188068b1f44daa2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css\">
";
        
        $__internal_7b4f0b28b46edf5991a1b83805ea2a1c96c15d5b816a6bf188068b1f44daa2c6->leave($__internal_7b4f0b28b46edf5991a1b83805ea2a1c96c15d5b816a6bf188068b1f44daa2c6_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a63f9a082fef789649692ebce43431ca07ca49485e759f14cd8c9fa416bc588 = $this->env->getExtension("native_profiler");
        $__internal_6a63f9a082fef789649692ebce43431ca07ca49485e759f14cd8c9fa416bc588->enter($__internal_6a63f9a082fef789649692ebce43431ca07ca49485e759f14cd8c9fa416bc588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/moment.js/moment-with-locales.js\"></script>
  <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js\"></script>
  <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/backend/cash.js\"></script>
";
        
        $__internal_6a63f9a082fef789649692ebce43431ca07ca49485e759f14cd8c9fa416bc588->leave($__internal_6a63f9a082fef789649692ebce43431ca07ca49485e759f14cd8c9fa416bc588_prof);

    }

    // line 15
    public function block_section($context, array $blocks = array())
    {
        $__internal_d0e4add886e313078ccf4bf04d187f6ed26829e481aabd30e2e6342c2479ebf6 = $this->env->getExtension("native_profiler");
        $__internal_d0e4add886e313078ccf4bf04d187f6ed26829e481aabd30e2e6342c2479ebf6->enter($__internal_d0e4add886e313078ccf4bf04d187f6ed26829e481aabd30e2e6342c2479ebf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 16
        echo "<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
  <!-- Content Header (Page header) -->
  <section class=\"content-header\">
    <h1>
      Caja
      <small>Nuevo</small>
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Inicio</a></li>
      <li class=\"active\">Caja</li>
    </ol>
  </section>
  <div class=\"content\">
    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <div class=\"form-group";
        // line 32
        if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datetime", array()), "vars", array()), "errors", array())) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datetime", array()), "vars", array()), "errors", array())) > 0))) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datetime", array()), 'label');
        echo "
            <div class='input-group date'>
                <span class=\"input-group-addon\">
                    <span class=\"glyphicon glyphicon-calendar\"></span>
                </span>
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datetime", array()), 'widget', array("attr" => array("placeholder" => "Fecha actual")));
        echo "
            </div>
            <div class=\"help-block with-errors\">
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datetime", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"form-group";
        // line 45
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paymentType", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
          ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paymentType", array()), 'label');
        echo "
          ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paymentType", array()), 'widget');
        echo "
          <div class=\"help-block with-errors\">
              ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "paymentType", array()), 'errors');
        echo "
          </div>
        </div>

        <ul class=\"nav nav-tabs\">
          <li id=\"ingress-switch\" class=\"type";
        // line 54
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "ingress")) {
            echo " active";
        }
        echo "\"><a href=\"#\">Ingreso</a></li>
          <li id=\"egress-switch\" class=\"type";
        // line 55
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "egress")) {
            echo " active";
        }
        echo "\"><a href=\"#\">Egreso</a></li>
        </ul>

        <div id=\"ammount\" class=\"form-group";
        // line 58
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ammount", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "ingress")) {
            echo " hide";
        }
        echo "\">
          ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ammount", array()), 'label');
        echo "
          ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ammount", array()), 'widget');
        echo "
          <div class=\"help-block with-errors\">
              ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ammount", array()), 'errors');
        echo "
          </div>
        </div>

        <div id=\"ingress\" class=\"";
        // line 66
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "egress")) {
            echo " hide";
        }
        echo "\">
                <div class=\"form-group";
        // line 67
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingress", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
                  ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingress", array()), 'label');
        echo "
                  ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingress", array()), 'widget');
        echo "
                  <div class=\"help-block with-errors\">
                      ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ingress", array()), 'errors');
        echo "
                  </div>
                </div>        
        </div>
        <div id=\"egress\" class=\"";
        // line 75
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "ingress")) {
            echo " hide";
        }
        echo "\">
                <div class=\"form-group";
        // line 76
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provider", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
                  ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provider", array()), 'label');
        echo "
                  ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provider", array()), 'widget');
        echo "
                  <div class=\"help-block with-errors\">
                      ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "provider", array()), 'errors');
        echo "
                  </div>
                </div>
                <div class=\"form-group";
        // line 83
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "egress", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
                  ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "egress", array()), 'label');
        echo "
                  ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "egress", array()), 'widget');
        echo "
                  <div class=\"help-block with-errors\">
                      ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "egress", array()), 'errors');
        echo "
                  </div>
                </div>
        </div>

        <div class=\"form-group";
        // line 92
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comments", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
          ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comments", array()), 'label');
        echo "
          ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comments", array()), 'widget');
        echo "
          <div class=\"help-block with-errors\">
              ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comments", array()), 'errors');
        echo "
          </div>
        </div>

        ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box\">
                    <div class=\"box-body\">
                        <a class=\"btn btn-default\" href=\"";
        // line 106
        echo $this->env->getExtension('routing')->getPath("cash_index");
        echo "\"><span class=\"glyphicon glyphicon-chevron-left\"></span> Volver</a>
                        <button type=\"submit\" class=\"btn btn-success pull-right\"><span class=\"glyphicon glyphicon-floppy-disk\"></span> Guardar</button>
                    </div>
                </div>
            </div>
        </div>

    ";
        // line 113
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
</div>    
";
        
        $__internal_d0e4add886e313078ccf4bf04d187f6ed26829e481aabd30e2e6342c2479ebf6->leave($__internal_d0e4add886e313078ccf4bf04d187f6ed26829e481aabd30e2e6342c2479ebf6_prof);

    }

    public function getTemplateName()
    {
        return "backend/cash/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 113,  312 => 106,  303 => 100,  296 => 96,  291 => 94,  287 => 93,  281 => 92,  273 => 87,  268 => 85,  264 => 84,  258 => 83,  252 => 80,  247 => 78,  243 => 77,  237 => 76,  231 => 75,  224 => 71,  219 => 69,  215 => 68,  209 => 67,  203 => 66,  196 => 62,  191 => 60,  187 => 59,  178 => 58,  170 => 55,  164 => 54,  156 => 49,  151 => 47,  147 => 46,  141 => 45,  134 => 41,  128 => 38,  120 => 33,  114 => 32,  109 => 30,  101 => 25,  90 => 16,  84 => 15,  75 => 12,  71 => 11,  67 => 10,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'backend/base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*   {{parent()}}*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/lib/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   {{parent()}}*/
/*   <script src="{{ app.request.basepath }}/lib/moment.js/moment-with-locales.js"></script>*/
/*   <script src="{{ app.request.basepath }}/lib/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>*/
/*   <script src="{{ app.request.basepath }}/js/backend/cash.js"></script>*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/* <!-- Content Wrapper. Contains page content -->*/
/* <div class="content-wrapper">*/
/*   <!-- Content Header (Page header) -->*/
/*   <section class="content-header">*/
/*     <h1>*/
/*       Caja*/
/*       <small>Nuevo</small>*/
/*     </h1>*/
/*     <ol class="breadcrumb">*/
/*       <li><a href="{{ path('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>*/
/*       <li class="active">Caja</li>*/
/*     </ol>*/
/*   </section>*/
/*   <div class="content">*/
/*     {{ form_start(form) }}*/
/* */
/*         <div class="form-group{% if (form.datetime.vars.errors|length > 0 or form.datetime.vars.errors|length > 0) %} has-error{% endif %}">*/
/*             {{ form_label(form.datetime) }}*/
/*             <div class='input-group date'>*/
/*                 <span class="input-group-addon">*/
/*                     <span class="glyphicon glyphicon-calendar"></span>*/
/*                 </span>*/
/*                 {{ form_widget(form.datetime, {"attr": {"placeholder": "Fecha actual"}}) }}*/
/*             </div>*/
/*             <div class="help-block with-errors">*/
/*                 {{ form_errors(form.datetime) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group{% if form.paymentType.vars.errors|length > 0 %} has-error{% endif %}">*/
/*           {{ form_label(form.paymentType) }}*/
/*           {{ form_widget(form.paymentType) }}*/
/*           <div class="help-block with-errors">*/
/*               {{ form_errors(form.paymentType) }}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <ul class="nav nav-tabs">*/
/*           <li id="ingress-switch" class="type{% if type == "ingress" %} active{% endif %}"><a href="#">Ingreso</a></li>*/
/*           <li id="egress-switch" class="type{% if type == "egress" %} active{% endif %}"><a href="#">Egreso</a></li>*/
/*         </ul>*/
/* */
/*         <div id="ammount" class="form-group{% if form.ammount.vars.errors|length > 0 %} has-error{% endif %}{% if type == "ingress" %} hide{% endif %}">*/
/*           {{ form_label(form.ammount) }}*/
/*           {{ form_widget(form.ammount) }}*/
/*           <div class="help-block with-errors">*/
/*               {{ form_errors(form.ammount) }}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div id="ingress" class="{% if type == "egress" %} hide{% endif %}">*/
/*                 <div class="form-group{% if form.ingress.vars.errors|length > 0 %} has-error{% endif %}">*/
/*                   {{ form_label(form.ingress) }}*/
/*                   {{ form_widget(form.ingress) }}*/
/*                   <div class="help-block with-errors">*/
/*                       {{ form_errors(form.ingress) }}*/
/*                   </div>*/
/*                 </div>        */
/*         </div>*/
/*         <div id="egress" class="{% if type == "ingress" %} hide{% endif %}">*/
/*                 <div class="form-group{% if form.provider.vars.errors|length > 0 %} has-error{% endif %}">*/
/*                   {{ form_label(form.provider) }}*/
/*                   {{ form_widget(form.provider) }}*/
/*                   <div class="help-block with-errors">*/
/*                       {{ form_errors(form.provider) }}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group{% if form.egress.vars.errors|length > 0 %} has-error{% endif %}">*/
/*                   {{ form_label(form.egress) }}*/
/*                   {{ form_widget(form.egress) }}*/
/*                   <div class="help-block with-errors">*/
/*                       {{ form_errors(form.egress) }}*/
/*                   </div>*/
/*                 </div>*/
/*         </div>*/
/* */
/*         <div class="form-group{% if form.comments.vars.errors|length > 0 %} has-error{% endif %}">*/
/*           {{ form_label(form.comments) }}*/
/*           {{ form_widget(form.comments) }}*/
/*           <div class="help-block with-errors">*/
/*               {{ form_errors(form.comments) }}*/
/*           </div>*/
/*         </div>*/
/* */
/*         {{ form_widget(form) }}*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="box">*/
/*                     <div class="box-body">*/
/*                         <a class="btn btn-default" href="{{ path('cash_index') }}"><span class="glyphicon glyphicon-chevron-left"></span> Volver</a>*/
/*                         <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     {{ form_end(form) }}*/
/*   </div>*/
/* </div>    */
/* {% endblock %}*/
/* */
