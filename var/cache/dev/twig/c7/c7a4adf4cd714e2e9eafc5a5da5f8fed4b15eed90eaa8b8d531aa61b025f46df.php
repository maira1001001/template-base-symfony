<?php

/* backend/user/edit.html.twig */
class __TwigTemplate_04077bdd45a1613441abb1a6f32db99646539564b9b72e82ff9c841cc3098dbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/user/edit.html.twig", 1);
        $this->blocks = array(
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00990e71a0432228dcfc7e8a957f33c4e51e2380b38ccb39398df8382409a55c = $this->env->getExtension("native_profiler");
        $__internal_00990e71a0432228dcfc7e8a957f33c4e51e2380b38ccb39398df8382409a55c->enter($__internal_00990e71a0432228dcfc7e8a957f33c4e51e2380b38ccb39398df8382409a55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/user/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00990e71a0432228dcfc7e8a957f33c4e51e2380b38ccb39398df8382409a55c->leave($__internal_00990e71a0432228dcfc7e8a957f33c4e51e2380b38ccb39398df8382409a55c_prof);

    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        $__internal_44c49c4728ea09b5079107dbb2b1e75ebb06cf7d5236c430c0ee9cc6ec614e35 = $this->env->getExtension("native_profiler");
        $__internal_44c49c4728ea09b5079107dbb2b1e75ebb06cf7d5236c430c0ee9cc6ec614e35->enter($__internal_44c49c4728ea09b5079107dbb2b1e75ebb06cf7d5236c430c0ee9cc6ec614e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 4
        echo "<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
  <!-- Content Header (Page header) -->
  <section class=\"content-header\">
    <h1>
      Usuario
      <small>Editar</small>
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Inicio</a></li>
      <li class=\"active\">Usuario</li>
    </ol>
  </section>
  <div class=\"content\">
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
      ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
      <div class=\"box-footer\">
          <a class=\"btn btn-default\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\"><span class=\"glyphicon glyphicon-chevron-left\"></span> Volver</a>
          <button type=\"submit\" class=\"btn btn-success pull-right\"><span class=\"glyphicon glyphicon-floppy-disk\"></span> Guardar</button>
      </div>
    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
  </div>
</div>     
";
        
        $__internal_44c49c4728ea09b5079107dbb2b1e75ebb06cf7d5236c430c0ee9cc6ec614e35->leave($__internal_44c49c4728ea09b5079107dbb2b1e75ebb06cf7d5236c430c0ee9cc6ec614e35_prof);

    }

    public function getTemplateName()
    {
        return "backend/user/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  68 => 21,  63 => 19,  59 => 18,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'backend/base.html.twig' %}*/
/* */
/* {% block section %}*/
/* <!-- Content Wrapper. Contains page content -->*/
/* <div class="content-wrapper">*/
/*   <!-- Content Header (Page header) -->*/
/*   <section class="content-header">*/
/*     <h1>*/
/*       Usuario*/
/*       <small>Editar</small>*/
/*     </h1>*/
/*     <ol class="breadcrumb">*/
/*       <li><a href="{{ path('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>*/
/*       <li class="active">Usuario</li>*/
/*     </ol>*/
/*   </section>*/
/*   <div class="content">*/
/*     {{ form_start(edit_form) }}*/
/*       {{ form_widget(edit_form) }}*/
/*       <div class="box-footer">*/
/*           <a class="btn btn-default" href="{{ path('user_index') }}"><span class="glyphicon glyphicon-chevron-left"></span> Volver</a>*/
/*           <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>*/
/*       </div>*/
/*     {{ form_end(edit_form) }}*/
/*   </div>*/
/* </div>     */
/* {% endblock %}*/
/* */
