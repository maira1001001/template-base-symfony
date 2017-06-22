<?php

/* backend/general/index.html.twig */
class __TwigTemplate_efd51dda765a02721adbdd1380521cb98c337726b7fe4afaf8e2a54ed33d9c15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/table.html.twig", "backend/general/index.html.twig", 1);
        $this->blocks = array(
            'thead' => array($this, 'block_thead'),
            'tfoot' => array($this, 'block_tfoot'),
            'tbody' => array($this, 'block_tbody'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend/table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["no_new_button"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_thead($context, array $blocks = array())
    {
        // line 6
        echo "    <tr>
        <th>Nombre</th>
        <th>Valor</th>
        <th>Accion</th>
    </tr>
";
    }

    // line 12
    public function block_tfoot($context, array $blocks = array())
    {
        // line 13
        echo "    <tr>
        <th>Nombre</th>
        <th>Valor</th>
        <th>Accion</th>
    </tr>
";
    }

    // line 19
    public function block_tbody($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["generals"]) ? $context["generals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["general"]) {
            // line 21
            echo "        <tr>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["general"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["general"], "value", array()), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("general_show", array("id" => $this->getAttribute($context["general"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-zoom-in\" aria-hidden=\"true\"></span></a>
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("general_edit", array("id" => $this->getAttribute($context["general"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['general'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 32
    public function block_section($context, array $blocks = array())
    {
        // line 33
        echo "<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
  <!-- Content Header (Page header) -->
  <section class=\"content-header\">
    <h1>
      General
      <small>Listado</small>
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Inicio</a></li>
      <li class=\"active\">General</li>
    </ol>
  </section>
  ";
        // line 46
        $this->displayParentBlock("section", $context, $blocks);
        echo "
</div>     
";
    }

    public function getTemplateName()
    {
        return "backend/general/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 46,  108 => 42,  97 => 33,  94 => 32,  82 => 26,  78 => 25,  73 => 23,  69 => 22,  66 => 21,  61 => 20,  58 => 19,  49 => 13,  46 => 12,  37 => 6,  34 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'backend/table.html.twig' %}*/
/* */
/* {% set no_new_button = true %}*/
/* */
/* {% block thead %}*/
/*     <tr>*/
/*         <th>Nombre</th>*/
/*         <th>Valor</th>*/
/*         <th>Accion</th>*/
/*     </tr>*/
/* {% endblock %}*/
/* {% block tfoot %}*/
/*     <tr>*/
/*         <th>Nombre</th>*/
/*         <th>Valor</th>*/
/*         <th>Accion</th>*/
/*     </tr>*/
/* {% endblock %}*/
/* {% block tbody %}*/
/*     {% for general in generals %}*/
/*         <tr>*/
/*             <td>{{ general.name }}</td>*/
/*             <td>{{ general.value }}</td>*/
/*             <td>*/
/*                 <a href="{{ path('general_show', { 'id': general.id }) }}"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span></a>*/
/*                 <a href="{{ path('general_edit', { 'id': general.id }) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/* <!-- Content Wrapper. Contains page content -->*/
/* <div class="content-wrapper">*/
/*   <!-- Content Header (Page header) -->*/
/*   <section class="content-header">*/
/*     <h1>*/
/*       General*/
/*       <small>Listado</small>*/
/*     </h1>*/
/*     <ol class="breadcrumb">*/
/*       <li><a href="{{ path('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>*/
/*       <li class="active">General</li>*/
/*     </ol>*/
/*   </section>*/
/*   {{parent()}}*/
/* </div>     */
/* {% endblock %}*/
/* */
