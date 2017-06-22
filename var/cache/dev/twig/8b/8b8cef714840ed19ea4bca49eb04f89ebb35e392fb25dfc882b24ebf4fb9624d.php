<?php

/* backend/general/show.html.twig */
class __TwigTemplate_01a5980949c5baf5cd9602d141b427af7cc0de08ed1b1cff7211370a7fdb3f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/general/show.html.twig", 1);
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
        $__internal_6a3fc56228da1abfc192545db8ff48f92a95d379d7fb8f945e0ada3fda93afba = $this->env->getExtension("native_profiler");
        $__internal_6a3fc56228da1abfc192545db8ff48f92a95d379d7fb8f945e0ada3fda93afba->enter($__internal_6a3fc56228da1abfc192545db8ff48f92a95d379d7fb8f945e0ada3fda93afba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/general/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a3fc56228da1abfc192545db8ff48f92a95d379d7fb8f945e0ada3fda93afba->leave($__internal_6a3fc56228da1abfc192545db8ff48f92a95d379d7fb8f945e0ada3fda93afba_prof);

    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        $__internal_ec7d8527bf2bab319a3791d1b676934e795b859e38dc772ed36557c291a129c5 = $this->env->getExtension("native_profiler");
        $__internal_ec7d8527bf2bab319a3791d1b676934e795b859e38dc772ed36557c291a129c5->enter($__internal_ec7d8527bf2bab319a3791d1b676934e795b859e38dc772ed36557c291a129c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 4
        echo "<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
  <!-- Content Header (Page header) -->
  <section class=\"content-header\">
    <h1>
      General
      <small>Detallado</small>
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
    <table>
        <tbody>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Valor</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "value", array()), "html", null, true);
        echo "</td>
            </tr>            
        </tbody>
    </table>
    </div>
    <div class=\"box-footer\">
        <a class=\"btn btn-default\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("general_index");
        echo "\"><span class=\"glyphicon glyphicon-chevron-left\"></span> Volver</a>
        <a class=\"btn btn-primary\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("general_edit", array("id" => $this->getAttribute((isset($context["general"]) ? $context["general"] : $this->getContext($context, "general")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> Editar</a>
    </div>
</div>     
";
        
        $__internal_ec7d8527bf2bab319a3791d1b676934e795b859e38dc772ed36557c291a129c5->leave($__internal_ec7d8527bf2bab319a3791d1b676934e795b859e38dc772ed36557c291a129c5_prof);

    }

    public function getTemplateName()
    {
        return "backend/general/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  79 => 32,  70 => 26,  63 => 22,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
/*       <small>Detallado</small>*/
/*     </h1>*/
/*     <ol class="breadcrumb">*/
/*       <li><a href="{{ path('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>*/
/*       <li class="active">General</li>*/
/*     </ol>*/
/*   </section>*/
/*     <div class="content">*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ general.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Valor</th>*/
/*                 <td>{{ general.value }}</td>*/
/*             </tr>            */
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/*     <div class="box-footer">*/
/*         <a class="btn btn-default" href="{{ path('general_index') }}"><span class="glyphicon glyphicon-chevron-left"></span> Volver</a>*/
/*         <a class="btn btn-primary" href="{{ path('general_edit', { 'id': general.id }) }}"><span class="glyphicon glyphicon-edit"></span> Editar</a>*/
/*     </div>*/
/* </div>     */
/* {% endblock %}*/
/* */
