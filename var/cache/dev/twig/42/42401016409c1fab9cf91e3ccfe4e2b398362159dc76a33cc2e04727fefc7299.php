<?php

/* backend/user/index.html.twig */
class __TwigTemplate_1ed8720613e49d02d8605ca861a6894b483affe7689ed874cec53d9528c7643f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/table.html.twig", "backend/user/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_29e7fda1fb6f78a79fa2b91f2594504a9e133a71b637cbfcc74bf52186bb260e = $this->env->getExtension("native_profiler");
        $__internal_29e7fda1fb6f78a79fa2b91f2594504a9e133a71b637cbfcc74bf52186bb260e->enter($__internal_29e7fda1fb6f78a79fa2b91f2594504a9e133a71b637cbfcc74bf52186bb260e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/user/index.html.twig"));

        // line 8
        $context["new"] = array("route" => "user_new", "title" => "Nuevo usuario");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29e7fda1fb6f78a79fa2b91f2594504a9e133a71b637cbfcc74bf52186bb260e->leave($__internal_29e7fda1fb6f78a79fa2b91f2594504a9e133a71b637cbfcc74bf52186bb260e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cad7a4ee11a756ac609f683e1456343833a10752dc22a4d6ab941ea9c4f59fc7 = $this->env->getExtension("native_profiler");
        $__internal_cad7a4ee11a756ac609f683e1456343833a10752dc22a4d6ab941ea9c4f59fc7->enter($__internal_cad7a4ee11a756ac609f683e1456343833a10752dc22a4d6ab941ea9c4f59fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/backend/user.css\">
";
        
        $__internal_cad7a4ee11a756ac609f683e1456343833a10752dc22a4d6ab941ea9c4f59fc7->leave($__internal_cad7a4ee11a756ac609f683e1456343833a10752dc22a4d6ab941ea9c4f59fc7_prof);

    }

    // line 16
    public function block_thead($context, array $blocks = array())
    {
        $__internal_3f8988d66181c598a2f1851b97e93d698cb2f5c77712f496872f8227e4629221 = $this->env->getExtension("native_profiler");
        $__internal_3f8988d66181c598a2f1851b97e93d698cb2f5c77712f496872f8227e4629221->enter($__internal_3f8988d66181c598a2f1851b97e93d698cb2f5c77712f496872f8227e4629221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "thead"));

        // line 17
        echo "    <tr>
        <th>Avatar</th>
        <th>Name</th>
        <th>Lastname</th>
        <th>Actions</th>
    </tr>
";
        
        $__internal_3f8988d66181c598a2f1851b97e93d698cb2f5c77712f496872f8227e4629221->leave($__internal_3f8988d66181c598a2f1851b97e93d698cb2f5c77712f496872f8227e4629221_prof);

    }

    // line 24
    public function block_tfoot($context, array $blocks = array())
    {
        $__internal_256b730818f000f49bc3901049e3a7e23acd4504f916ce0f1812ceec6eb3cd58 = $this->env->getExtension("native_profiler");
        $__internal_256b730818f000f49bc3901049e3a7e23acd4504f916ce0f1812ceec6eb3cd58->enter($__internal_256b730818f000f49bc3901049e3a7e23acd4504f916ce0f1812ceec6eb3cd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tfoot"));

        // line 25
        echo "    <tr>
        <th>Avatar</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Actions</th>
    </tr>
";
        
        $__internal_256b730818f000f49bc3901049e3a7e23acd4504f916ce0f1812ceec6eb3cd58->leave($__internal_256b730818f000f49bc3901049e3a7e23acd4504f916ce0f1812ceec6eb3cd58_prof);

    }

    // line 32
    public function block_tbody($context, array $blocks = array())
    {
        $__internal_8d6c5e59fbe907396c2a854b52081bb562ca9545a7896d419d53aa5236a6389d = $this->env->getExtension("native_profiler");
        $__internal_8d6c5e59fbe907396c2a854b52081bb562ca9545a7896d419d53aa5236a6389d->enter($__internal_8d6c5e59fbe907396c2a854b52081bb562ca9545a7896d419d53aa5236a6389d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbody"));

        // line 33
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 34
            echo "        <tr>
            <td><div class=\"avatar\" style=\"background-image: url('";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("media/avatars/" . $this->getAttribute($context["user"], "avatar", array()))), "html", null, true);
            echo "');\"></td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-zoom-in\" aria-hidden=\"true\"></span></a>
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8d6c5e59fbe907396c2a854b52081bb562ca9545a7896d419d53aa5236a6389d->leave($__internal_8d6c5e59fbe907396c2a854b52081bb562ca9545a7896d419d53aa5236a6389d_prof);

    }

    // line 46
    public function block_section($context, array $blocks = array())
    {
        $__internal_a488cbd02e435388cea12b35fe33dd0277390ecbe1746eb594f817e3b398ef69 = $this->env->getExtension("native_profiler");
        $__internal_a488cbd02e435388cea12b35fe33dd0277390ecbe1746eb594f817e3b398ef69->enter($__internal_a488cbd02e435388cea12b35fe33dd0277390ecbe1746eb594f817e3b398ef69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 47
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
      <!-- Content Header (Page header) -->
      <section class=\"content-header\">
        <h1>
          Usuario
          <small>Listado</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Inicio</a></li>
          <li class=\"active\">Usuario</li>
        </ol>
      </section>
    ";
        // line 60
        $this->displayParentBlock("section", $context, $blocks);
        echo "
    </div>   
";
        
        $__internal_a488cbd02e435388cea12b35fe33dd0277390ecbe1746eb594f817e3b398ef69->leave($__internal_a488cbd02e435388cea12b35fe33dd0277390ecbe1746eb594f817e3b398ef69_prof);

    }

    public function getTemplateName()
    {
        return "backend/user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 60,  162 => 56,  151 => 47,  145 => 46,  130 => 40,  126 => 39,  121 => 37,  117 => 36,  113 => 35,  110 => 34,  105 => 33,  99 => 32,  86 => 25,  80 => 24,  67 => 17,  61 => 16,  52 => 5,  47 => 4,  41 => 3,  34 => 1,  32 => 8,  11 => 1,);
    }
}
/* {% extends 'backend/table.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*   {{parent()}}*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/css/backend/user.css">*/
/* {% endblock %}*/
/* */
/* {% set new = */
/*     {*/
/*         "route": "user_new",*/
/*         "title": "Nuevo usuario"*/
/*     }*/
/* %}*/
/* */
/* */
/* {% block thead %}*/
/*     <tr>*/
/*         <th>Avatar</th>*/
/*         <th>Name</th>*/
/*         <th>Lastname</th>*/
/*         <th>Actions</th>*/
/*     </tr>*/
/* {% endblock %}*/
/* {% block tfoot %}*/
/*     <tr>*/
/*         <th>Avatar</th>*/
/*         <th>Nombre</th>*/
/*         <th>Apellido</th>*/
/*         <th>Actions</th>*/
/*     </tr>*/
/* {% endblock %}*/
/* {% block tbody %}*/
/*     {% for user in users %}*/
/*         <tr>*/
/*             <td><div class="avatar" style="background-image: url('{{asset('media/avatars/' ~ user.avatar)}}');"></td>*/
/*             <td>{{ user.name }}</td>*/
/*             <td>{{ user.lastname }}</td>*/
/*             <td>*/
/*                 <a href="{{ path('user_show', { 'id': user.id }) }}"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span></a>*/
/*                 <a href="{{ path('user_edit', { 'id': user.id }) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/*       <!-- Content Header (Page header) -->*/
/*       <section class="content-header">*/
/*         <h1>*/
/*           Usuario*/
/*           <small>Listado</small>*/
/*         </h1>*/
/*         <ol class="breadcrumb">*/
/*           <li><a href="{{ path('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>*/
/*           <li class="active">Usuario</li>*/
/*         </ol>*/
/*       </section>*/
/*     {{parent()}}*/
/*     </div>   */
/* {% endblock %}*/
/* */
