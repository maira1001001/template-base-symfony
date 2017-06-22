<?php

/* backend/cash/edit.html.twig */
class __TwigTemplate_941fd3d61b3f95744cfb418091155fb2f41715bac29d6c010337fa309c254628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/cash/edit.html.twig", 1);
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
        $__internal_521d6b4cd73bdcf75022abc5369d4e710ece8353909175e76f344f37121790ff = $this->env->getExtension("native_profiler");
        $__internal_521d6b4cd73bdcf75022abc5369d4e710ece8353909175e76f344f37121790ff->enter($__internal_521d6b4cd73bdcf75022abc5369d4e710ece8353909175e76f344f37121790ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/cash/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_521d6b4cd73bdcf75022abc5369d4e710ece8353909175e76f344f37121790ff->leave($__internal_521d6b4cd73bdcf75022abc5369d4e710ece8353909175e76f344f37121790ff_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c3fa31c497e0593eab47af3dadb6c6402c1b50eb873539004f30006d0dd2604 = $this->env->getExtension("native_profiler");
        $__internal_4c3fa31c497e0593eab47af3dadb6c6402c1b50eb873539004f30006d0dd2604->enter($__internal_4c3fa31c497e0593eab47af3dadb6c6402c1b50eb873539004f30006d0dd2604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css\">
";
        
        $__internal_4c3fa31c497e0593eab47af3dadb6c6402c1b50eb873539004f30006d0dd2604->leave($__internal_4c3fa31c497e0593eab47af3dadb6c6402c1b50eb873539004f30006d0dd2604_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2cf7f163e327c271dde4b2c33a347ac2c28a0865e5b06ee6fe17af87006fdd30 = $this->env->getExtension("native_profiler");
        $__internal_2cf7f163e327c271dde4b2c33a347ac2c28a0865e5b06ee6fe17af87006fdd30->enter($__internal_2cf7f163e327c271dde4b2c33a347ac2c28a0865e5b06ee6fe17af87006fdd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_2cf7f163e327c271dde4b2c33a347ac2c28a0865e5b06ee6fe17af87006fdd30->leave($__internal_2cf7f163e327c271dde4b2c33a347ac2c28a0865e5b06ee6fe17af87006fdd30_prof);

    }

    // line 15
    public function block_section($context, array $blocks = array())
    {
        $__internal_b634e3f2330f256959e824a8398c9044906b98cc78c3db142fbb46848bcb843d = $this->env->getExtension("native_profiler");
        $__internal_b634e3f2330f256959e824a8398c9044906b98cc78c3db142fbb46848bcb843d->enter($__internal_b634e3f2330f256959e824a8398c9044906b98cc78c3db142fbb46848bcb843d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 16
        echo "<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
  <!-- Content Header (Page header) -->
  <section class=\"content-header\">
    <h1>
      Caja
      <small>Editar</small>
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

        <div class=\"form-group";
        // line 32
        if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datetime", array()), "vars", array()), "errors", array())) > 0) || (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datetime", array()), "vars", array()), "errors", array())) > 0))) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datetime", array()), 'label');
        echo "
            <div class='input-group date'>
                <span class=\"input-group-addon\">
                    <span class=\"glyphicon glyphicon-calendar\"></span>
                </span>
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datetime", array()), 'widget', array("attr" => array("placeholder" => "Fecha actual")));
        echo "
            </div>
            <div class=\"help-block with-errors\">
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "datetime", array()), 'errors');
        echo "
            </div>
        </div>

        <div class=\"form-group";
        // line 45
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "comments", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
          ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "comments", array()), 'label');
        echo "
          ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "comments", array()), 'widget');
        echo "
          <div class=\"help-block with-errors\">
              ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "comments", array()), 'errors');
        echo "
          </div>
        </div>

        <div class=\"form-group";
        // line 53
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "paymentType", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
          ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "paymentType", array()), 'label');
        echo "
          ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "paymentType", array()), 'widget');
        echo "
          <div class=\"help-block with-errors\">
              ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "paymentType", array()), 'errors');
        echo "
          </div>
        </div>

<ul class=\"nav nav-tabs\">
  <li id=\"ingress-switch\" class=\"type";
        // line 62
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "ingress")) {
            echo " active";
        }
        echo "\"><a href=\"#\">Ingreso</a></li>
  <li id=\"egress-switch\" class=\"type";
        // line 63
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "egress")) {
            echo " active";
        }
        echo "\"><a href=\"#\">Egreso</a></li>
</ul>

<div id=\"ammount\" class=\"form-group";
        // line 66
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ammount", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "ingress")) {
            echo " hide";
        }
        echo "\">
  ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ammount", array()), 'label');
        echo "
  ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ammount", array()), 'widget');
        echo "
  <div class=\"help-block with-errors\">
      ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ammount", array()), 'errors');
        echo "
  </div>
</div>

<div id=\"ingress\" class=\"";
        // line 74
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "egress")) {
            echo " hide";
        }
        echo "\">
        <div class=\"form-group";
        // line 75
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ingress", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
          ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ingress", array()), 'label');
        echo "
          ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ingress", array()), 'widget');
        echo "
          <div class=\"help-block with-errors\">
              ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ingress", array()), 'errors');
        echo "
          </div>
        </div>        
</div>
<div id=\"egress\" class=\"";
        // line 83
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "ingress")) {
            echo " hide";
        }
        echo "\">
        <div class=\"form-group";
        // line 84
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "provider", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
          ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "provider", array()), 'label');
        echo "
          ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "provider", array()), 'widget');
        echo "
          <div class=\"help-block with-errors\">
              ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "provider", array()), 'errors');
        echo "
          </div>
        </div>
        <div class=\"form-group";
        // line 91
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "egress", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
          ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "egress", array()), 'label');
        echo "
          ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "egress", array()), 'widget');
        echo "
          <div class=\"help-block with-errors\">
              ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "egress", array()), 'errors');
        echo "
          </div>
        </div>
</div>




        ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box\">
                    <div class=\"box-body\">
                        <a class=\"btn btn-default\" href=\"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("cash_index");
        echo "\"><span class=\"glyphicon glyphicon-chevron-left\"></span> Volver</a>
                        <button type=\"submit\" class=\"btn btn-success pull-right\"><span class=\"glyphicon glyphicon-floppy-disk\"></span> Guardar</button>
                    </div>
                </div>
            </div>
        </div>

    ";
        // line 116
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
  </div>
</div>    
";
        
        $__internal_b634e3f2330f256959e824a8398c9044906b98cc78c3db142fbb46848bcb843d->leave($__internal_b634e3f2330f256959e824a8398c9044906b98cc78c3db142fbb46848bcb843d_prof);

    }

    public function getTemplateName()
    {
        return "backend/cash/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 116,  315 => 109,  306 => 103,  295 => 95,  290 => 93,  286 => 92,  280 => 91,  274 => 88,  269 => 86,  265 => 85,  259 => 84,  253 => 83,  246 => 79,  241 => 77,  237 => 76,  231 => 75,  225 => 74,  218 => 70,  213 => 68,  209 => 67,  200 => 66,  192 => 63,  186 => 62,  178 => 57,  173 => 55,  169 => 54,  163 => 53,  156 => 49,  151 => 47,  147 => 46,  141 => 45,  134 => 41,  128 => 38,  120 => 33,  114 => 32,  109 => 30,  101 => 25,  90 => 16,  84 => 15,  75 => 12,  71 => 11,  67 => 10,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
/*       <small>Editar</small>*/
/*     </h1>*/
/*     <ol class="breadcrumb">*/
/*       <li><a href="{{ path('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>*/
/*       <li class="active">Caja</li>*/
/*     </ol>*/
/*   </section>*/
/*   <div class="content">*/
/*     {{ form_start(edit_form) }}*/
/* */
/*         <div class="form-group{% if (edit_form.datetime.vars.errors|length > 0 or edit_form.datetime.vars.errors|length > 0) %} has-error{% endif %}">*/
/*             {{ form_label(edit_form.datetime) }}*/
/*             <div class='input-group date'>*/
/*                 <span class="input-group-addon">*/
/*                     <span class="glyphicon glyphicon-calendar"></span>*/
/*                 </span>*/
/*                 {{ form_widget(edit_form.datetime, {"attr": {"placeholder": "Fecha actual"}}) }}*/
/*             </div>*/
/*             <div class="help-block with-errors">*/
/*                 {{ form_errors(edit_form.datetime) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group{% if edit_form.comments.vars.errors|length > 0 %} has-error{% endif %}">*/
/*           {{ form_label(edit_form.comments) }}*/
/*           {{ form_widget(edit_form.comments) }}*/
/*           <div class="help-block with-errors">*/
/*               {{ form_errors(edit_form.comments) }}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group{% if edit_form.paymentType.vars.errors|length > 0 %} has-error{% endif %}">*/
/*           {{ form_label(edit_form.paymentType) }}*/
/*           {{ form_widget(edit_form.paymentType) }}*/
/*           <div class="help-block with-errors">*/
/*               {{ form_errors(edit_form.paymentType) }}*/
/*           </div>*/
/*         </div>*/
/* */
/* <ul class="nav nav-tabs">*/
/*   <li id="ingress-switch" class="type{% if type == "ingress" %} active{% endif %}"><a href="#">Ingreso</a></li>*/
/*   <li id="egress-switch" class="type{% if type == "egress" %} active{% endif %}"><a href="#">Egreso</a></li>*/
/* </ul>*/
/* */
/* <div id="ammount" class="form-group{% if edit_form.ammount.vars.errors|length > 0 %} has-error{% endif %}{% if type == "ingress" %} hide{% endif %}">*/
/*   {{ form_label(edit_form.ammount) }}*/
/*   {{ form_widget(edit_form.ammount) }}*/
/*   <div class="help-block with-errors">*/
/*       {{ form_errors(edit_form.ammount) }}*/
/*   </div>*/
/* </div>*/
/* */
/* <div id="ingress" class="{% if type == "egress" %} hide{% endif %}">*/
/*         <div class="form-group{% if edit_form.ingress.vars.errors|length > 0 %} has-error{% endif %}">*/
/*           {{ form_label(edit_form.ingress) }}*/
/*           {{ form_widget(edit_form.ingress) }}*/
/*           <div class="help-block with-errors">*/
/*               {{ form_errors(edit_form.ingress) }}*/
/*           </div>*/
/*         </div>        */
/* </div>*/
/* <div id="egress" class="{% if type == "ingress" %} hide{% endif %}">*/
/*         <div class="form-group{% if edit_form.provider.vars.errors|length > 0 %} has-error{% endif %}">*/
/*           {{ form_label(edit_form.provider) }}*/
/*           {{ form_widget(edit_form.provider) }}*/
/*           <div class="help-block with-errors">*/
/*               {{ form_errors(edit_form.provider) }}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group{% if edit_form.egress.vars.errors|length > 0 %} has-error{% endif %}">*/
/*           {{ form_label(edit_form.egress) }}*/
/*           {{ form_widget(edit_form.egress) }}*/
/*           <div class="help-block with-errors">*/
/*               {{ form_errors(edit_form.egress) }}*/
/*           </div>*/
/*         </div>*/
/* </div>*/
/* */
/* */
/* */
/* */
/*         {{ form_widget(edit_form) }}*/
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
/*     {{ form_end(edit_form) }}*/
/*   </div>*/
/* </div>    */
/* {% endblock %}*/
/* */
