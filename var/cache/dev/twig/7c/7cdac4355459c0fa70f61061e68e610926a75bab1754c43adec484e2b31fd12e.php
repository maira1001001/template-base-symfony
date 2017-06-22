<?php

/* backend/general/edit.html.twig */
class __TwigTemplate_342d66dacf5581351d77bf24270588370fa6f2937e8ce8b53a06ffdfce40a3e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/general/edit.html.twig", 1);
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
        $__internal_9b28f1d7a7e90cbea923120e390b26de8b64b6302897ec196c0f314e7204e171 = $this->env->getExtension("native_profiler");
        $__internal_9b28f1d7a7e90cbea923120e390b26de8b64b6302897ec196c0f314e7204e171->enter($__internal_9b28f1d7a7e90cbea923120e390b26de8b64b6302897ec196c0f314e7204e171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/general/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b28f1d7a7e90cbea923120e390b26de8b64b6302897ec196c0f314e7204e171->leave($__internal_9b28f1d7a7e90cbea923120e390b26de8b64b6302897ec196c0f314e7204e171_prof);

    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        $__internal_6ac0acdbde05e343e3428eced9d7b869b2c91be879afacd8370b54fcb59c4bb5 = $this->env->getExtension("native_profiler");
        $__internal_6ac0acdbde05e343e3428eced9d7b869b2c91be879afacd8370b54fcb59c4bb5->enter($__internal_6ac0acdbde05e343e3428eced9d7b869b2c91be879afacd8370b54fcb59c4bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 4
        echo "<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
  <!-- Content Header (Page header) -->
  <section class=\"content-header\">
    <h1>
      General
      <small>Editar</small>
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Inicio</a></li>
      <li class=\"active\">General</li>
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
        echo $this->env->getExtension('routing')->getPath("general_index");
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
        
        $__internal_6ac0acdbde05e343e3428eced9d7b869b2c91be879afacd8370b54fcb59c4bb5->leave($__internal_6ac0acdbde05e343e3428eced9d7b869b2c91be879afacd8370b54fcb59c4bb5_prof);

    }

    public function getTemplateName()
    {
        return "backend/general/edit.html.twig";
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
/*       General*/
/*       <small>Editar</small>*/
/*     </h1>*/
/*     <ol class="breadcrumb">*/
/*       <li><a href="{{ path('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>*/
/*       <li class="active">General</li>*/
/*     </ol>*/
/*   </section>*/
/*   <div class="content">  */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <div class="box-footer">*/
/*             <a class="btn btn-default" href="{{ path('general_index') }}"><span class="glyphicon glyphicon-chevron-left"></span> Volver</a>*/
/*             <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>*/
/*         </div>*/
/*     {{ form_end(edit_form) }}*/
/*   </div>*/
/* </div>     */
/* {% endblock %}*/
/* */
