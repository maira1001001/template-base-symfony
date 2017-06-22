<?php

/* backend/user/new.html.twig */
class __TwigTemplate_6c745cc9dee2b37e87830ad159bada36a50dfa2ad58b07fe04c0c7bbd71adbb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/user/new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_88b79ba8e253f23e9f9502f575a59733d9a56a730840b1619d217d533d147740 = $this->env->getExtension("native_profiler");
        $__internal_88b79ba8e253f23e9f9502f575a59733d9a56a730840b1619d217d533d147740->enter($__internal_88b79ba8e253f23e9f9502f575a59733d9a56a730840b1619d217d533d147740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88b79ba8e253f23e9f9502f575a59733d9a56a730840b1619d217d533d147740->leave($__internal_88b79ba8e253f23e9f9502f575a59733d9a56a730840b1619d217d533d147740_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_44ce84bed2a664203b9810b4560e139338384d94bd099b2c73f094a5a5111e3b = $this->env->getExtension("native_profiler");
        $__internal_44ce84bed2a664203b9810b4560e139338384d94bd099b2c73f094a5a5111e3b->enter($__internal_44ce84bed2a664203b9810b4560e139338384d94bd099b2c73f094a5a5111e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/backend/user.css\">
";
        
        $__internal_44ce84bed2a664203b9810b4560e139338384d94bd099b2c73f094a5a5111e3b->leave($__internal_44ce84bed2a664203b9810b4560e139338384d94bd099b2c73f094a5a5111e3b_prof);

    }

    // line 8
    public function block_section($context, array $blocks = array())
    {
        $__internal_f95acc4bbcd49cd30cf26769b863b914db776f49fcd60b9948c2bf8f6c8ceba1 = $this->env->getExtension("native_profiler");
        $__internal_f95acc4bbcd49cd30cf26769b863b914db776f49fcd60b9948c2bf8f6c8ceba1->enter($__internal_f95acc4bbcd49cd30cf26769b863b914db776f49fcd60b9948c2bf8f6c8ceba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 9
        echo "<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
  <!-- Content Header (Page header) -->
  <section class=\"content-header\">
    <h1>
      Usuario
      <small>Nuevo</small>
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Inicio</a></li>
      <li class=\"active\">Usuario</li>
    </ol>
  </section>
  <div class=\"content\">
    ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"form-group";
        // line 24
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
          ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
          ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
          <div class=\"help-block with-errors\">
              ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
          </div>
        </div>
        <div class=\"form-group";
        // line 31
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
          ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "
          ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget');
        echo "
          <div class=\"help-block with-errors\">
              ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "
          </div>
        </div>       
        <div class=\"form-group";
        // line 38
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
          ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
          ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
          <div class=\"help-block with-errors\">
              ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
          </div>
        </div>
        ";
        // line 45
        if (array_key_exists("error", $context)) {
            // line 46
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "
        ";
        }
        // line 48
        echo "        <div id=\"openMoreDetails\"><b>Mas detalles</b></div>
        <div id=\"moreDetails\" class=\"moreDetails hidden\">     
          <div class=\"form-group";
        // line 50
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\">
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'label');
        echo "
            ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'widget');
        echo "
            <div class=\"help-block with-errors\">
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'errors');
        echo "
            </div>
          </div>           
          ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box\">
                    <div class=\"box-body\">
                        <a class=\"btn btn-default\" href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\"><span class=\"glyphicon glyphicon-chevron-left\"></span> Volver</a>
                        <button type=\"submit\" class=\"btn btn-success pull-right\"><span class=\"glyphicon glyphicon-floppy-disk\"></span> Guardar</button>
                    </div>
                </div>
            </div>
        </div>

      ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>     
";
        
        $__internal_f95acc4bbcd49cd30cf26769b863b914db776f49fcd60b9948c2bf8f6c8ceba1->leave($__internal_f95acc4bbcd49cd30cf26769b863b914db776f49fcd60b9948c2bf8f6c8ceba1_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee3b86669382318adeb7f64fb611e0c8df99e4927d47d5dc1da3658605656163 = $this->env->getExtension("native_profiler");
        $__internal_ee3b86669382318adeb7f64fb611e0c8df99e4927d47d5dc1da3658605656163->enter($__internal_ee3b86669382318adeb7f64fb611e0c8df99e4927d47d5dc1da3658605656163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/backend/user.js\"></script>
";
        
        $__internal_ee3b86669382318adeb7f64fb611e0c8df99e4927d47d5dc1da3658605656163->leave($__internal_ee3b86669382318adeb7f64fb611e0c8df99e4927d47d5dc1da3658605656163_prof);

    }

    public function getTemplateName()
    {
        return "backend/user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 79,  218 => 78,  212 => 77,  201 => 71,  191 => 64,  181 => 57,  175 => 54,  170 => 52,  166 => 51,  160 => 50,  156 => 48,  150 => 46,  148 => 45,  142 => 42,  137 => 40,  133 => 39,  127 => 38,  121 => 35,  116 => 33,  112 => 32,  106 => 31,  100 => 28,  95 => 26,  91 => 25,  85 => 24,  81 => 23,  73 => 18,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'backend/base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*   {{parent()}}*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/css/backend/user.css">*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/* <!-- Content Wrapper. Contains page content -->*/
/* <div class="content-wrapper">*/
/*   <!-- Content Header (Page header) -->*/
/*   <section class="content-header">*/
/*     <h1>*/
/*       Usuario*/
/*       <small>Nuevo</small>*/
/*     </h1>*/
/*     <ol class="breadcrumb">*/
/*       <li><a href="{{ path('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>*/
/*       <li class="active">Usuario</li>*/
/*     </ol>*/
/*   </section>*/
/*   <div class="content">*/
/*     {{ form_start(form) }}*/
/*         <div class="form-group{% if form.name.vars.errors|length > 0 %} has-error{% endif %}">*/
/*           {{ form_label(form.name) }}*/
/*           {{ form_widget(form.name) }}*/
/*           <div class="help-block with-errors">*/
/*               {{ form_errors(form.name) }}*/
/*           </div>*/
/*         </div>*/
/*         <div class="form-group{% if form.lastname.vars.errors|length > 0 %} has-error{% endif %}">*/
/*           {{ form_label(form.lastname) }}*/
/*           {{ form_widget(form.lastname)}}*/
/*           <div class="help-block with-errors">*/
/*               {{ form_errors(form.lastname) }}*/
/*           </div>*/
/*         </div>       */
/*         <div class="form-group{% if form.email.vars.errors|length > 0 %} has-error{% endif %}">*/
/*           {{ form_label(form.email) }}*/
/*           {{ form_widget(form.email)}}*/
/*           <div class="help-block with-errors">*/
/*               {{ form_errors(form.email) }}*/
/*           </div>*/
/*         </div>*/
/*         {% if error is defined %}*/
/*             {{ error }}*/
/*         {% endif %}*/
/*         <div id="openMoreDetails"><b>Mas detalles</b></div>*/
/*         <div id="moreDetails" class="moreDetails hidden">     */
/*           <div class="form-group{% if form.plainPassword.vars.errors|length > 0 %} has-error{% endif %}">*/
/*             {{ form_label(form.plainPassword) }}*/
/*             {{ form_widget(form.plainPassword)}}*/
/*             <div class="help-block with-errors">*/
/*                 {{ form_errors(form.plainPassword) }}*/
/*             </div>*/
/*           </div>           */
/*           {{ form_widget(form) }}*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="box">*/
/*                     <div class="box-body">*/
/*                         <a class="btn btn-default" href="{{ path('user_index') }}"><span class="glyphicon glyphicon-chevron-left"></span> Volver</a>*/
/*                         <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*       {{ form_end(form) }}*/
/*     </div>*/
/* </div>     */
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*   {{parent()}}*/
/*   <script src="{{ app.request.basepath }}/js/backend/user.js"></script>*/
/* {% endblock %}*/
