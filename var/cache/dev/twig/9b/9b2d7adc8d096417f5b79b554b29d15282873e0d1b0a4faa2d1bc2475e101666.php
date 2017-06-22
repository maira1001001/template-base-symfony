<?php

/* backend/sidebar.html.twig */
class __TwigTemplate_6112a17b0169efeeb3f5dd20f814a0bcea378f49cf2cd824473760244df2df29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d432fc5a6478670571e55b3a9cb3504f14f9de196ed7f79a7c15455e27d1dfb = $this->env->getExtension("native_profiler");
        $__internal_3d432fc5a6478670571e55b3a9cb3504f14f9de196ed7f79a7c15455e27d1dfb->enter($__internal_3d432fc5a6478670571e55b3a9cb3504f14f9de196ed7f79a7c15455e27d1dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/sidebar.html.twig"));

        // line 1
        echo "<!-- Left side column. contains the logo and sidebar -->
  <aside class=\"main-sidebar\">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">
      <!-- Sidebar user panel -->
      <div class=\"user-panel\">
        <div class=\"pull-left image\">
          <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->avatarAsset($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avatar", array())), "html", null, true);
        echo "\" class=\"img-rounded\" alt=\"User Image\">
        </div>
        <div class=\"pull-left info\">
          <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
        echo "</p>
          <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class=\"sidebar-menu\">
        <li class=\"header\">MENU PRINCIPAL</li>
        <li class=\"treeview ";
        // line 18
        if ($this->env->getExtension('app_extension')->isRouteRoot("admin")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\">
            <i class=\"glyphicon glyphicon-dashboard\"></i> <span>Inicio</span>
          </a>
        </li>
        <li class=\"treeview ";
        // line 23
        if ($this->env->getExtension('app_extension')->isRouteRoot("cash")) {
            echo "active";
        }
        echo "\">
          <a href=\"#\">
            <i class=\"glyphicon glyphicon-piggy-bank\"></i>
            <span>Caja</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("cash_index");
        echo "\"><i class=\"glyphicon glyphicon-list-alt\"></i>Resumen</a></li>
            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("cash_new", array("type" => "ingress"));
        echo "\"><i class=\"glyphicon glyphicon-plus\"></i>Ingreso</a></li>
            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("cash_new", array("type" => "egress"));
        echo "\"><i class=\"glyphicon glyphicon-minus\"></i>Egreso</a></li>
          </ul>
        </li>        
        <li class=\"treeview ";
        // line 37
        if ($this->env->getExtension('app_extension')->isRouteRoot("user")) {
            echo "active";
        }
        echo "\">
          <a href=\"#\">
            <i class=\"glyphicon glyphicon-user\"></i>
            <span>Usuarios</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\"><i class=\"glyphicon glyphicon-star\"></i>Nuevo</a></li>
            <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\"><i class=\"glyphicon glyphicon-list\"></i>Listar</a></li>
          </ul>
        </li>
        <li class=\"treeview ";
        // line 50
        if ($this->env->getExtension('app_extension')->isRouteRoot("product")) {
            echo "active";
        }
        echo "\">
          <a href=\"#\">
            <i class=\"glyphicon glyphicon-gift\"></i>
            <span>Productos</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("product_new");
        echo "\"><i class=\"glyphicon glyphicon-star\"></i>Nuevo</a></li>
            <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("product_index");
        echo "\"><i class=\"glyphicon glyphicon-list\"></i>Listar</a></li>
          </ul>
        </li>
        <li class=\"treeview ";
        // line 63
        if ($this->env->getExtension('app_extension')->isRouteRoot("provider")) {
            echo "active";
        }
        echo "\">
          <a href=\"#\">
            <i class=\"glyphicon glyphicon-plane\"></i>
            <span>Proveedores</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("provider_new");
        echo "\"><i class=\"glyphicon glyphicon-star\"></i>Nuevo</a></li>
            <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("provider_index");
        echo "\"><i class=\"glyphicon glyphicon-list\"></i>Listar</a></li>
          </ul>
        </li>
        <li class=\"treeview ";
        // line 76
        if ($this->env->getExtension('app_extension')->isRouteRoot("family")) {
            echo "active";
        }
        echo "\">
          <a href=\"#\">
            <i class=\"glyphicon glyphicon-th-large\"></i>
            <span>Familias</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("family_new");
        echo "\"><i class=\"glyphicon glyphicon-star\"></i>Nuevo</a></li>
            <li><a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("family_index");
        echo "\"><i class=\"glyphicon glyphicon-list\"></i>Listar</a></li>
          </ul>
        </li>        
        <li class=\"treeview ";
        // line 89
        if ($this->env->getExtension('app_extension')->isRouteRoot("ingress")) {
            echo "active";
        }
        if ($this->env->getExtension('app_extension')->isRouteRoot("egress")) {
            echo "active";
        }
        echo "\">
          <a href=\"#\">
            <i class=\"fa fa-edit\"></i> <span>Administracion</span>
            <span class=\"pull-right-container\">
              <i class=\"fa fa-angle-left pull-right\"></i>
            </span>
          </a>
          <ul class=\"treeview-menu\">
            <li><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("ingress_index");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i>Tipos de Ingresos</a></li>
            <li><a href=\"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("egress_index");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i>Tipos de Egresos</a></li>
            <li><a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("general_index");
        echo "\"><i class=\"glyphicon glyphicon-cog\"></i>General</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>";
        
        $__internal_3d432fc5a6478670571e55b3a9cb3504f14f9de196ed7f79a7c15455e27d1dfb->leave($__internal_3d432fc5a6478670571e55b3a9cb3504f14f9de196ed7f79a7c15455e27d1dfb_prof);

    }

    public function getTemplateName()
    {
        return "backend/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 99,  204 => 98,  200 => 97,  184 => 89,  178 => 86,  174 => 85,  160 => 76,  154 => 73,  150 => 72,  136 => 63,  130 => 60,  126 => 59,  112 => 50,  106 => 47,  102 => 46,  88 => 37,  82 => 34,  78 => 33,  74 => 32,  60 => 23,  53 => 19,  47 => 18,  37 => 11,  31 => 8,  22 => 1,);
    }
}
/* <!-- Left side column. contains the logo and sidebar -->*/
/*   <aside class="main-sidebar">*/
/*     <!-- sidebar: style can be found in sidebar.less -->*/
/*     <section class="sidebar">*/
/*       <!-- Sidebar user panel -->*/
/*       <div class="user-panel">*/
/*         <div class="pull-left image">*/
/*           <img src="{{ avatar_asset(app.user.avatar) }}" class="img-rounded" alt="User Image">*/
/*         </div>*/
/*         <div class="pull-left info">*/
/*           <p>{{app.user.name}}</p>*/
/*           <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*         </div>*/
/*       </div>*/
/*       <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*       <ul class="sidebar-menu">*/
/*         <li class="header">MENU PRINCIPAL</li>*/
/*         <li class="treeview {% if is_route_root("admin") %}active{% endif %}">*/
/*           <a href="{{ path('admin') }}">*/
/*             <i class="glyphicon glyphicon-dashboard"></i> <span>Inicio</span>*/
/*           </a>*/
/*         </li>*/
/*         <li class="treeview {% if is_route_root("cash") %}active{% endif %}">*/
/*           <a href="#">*/
/*             <i class="glyphicon glyphicon-piggy-bank"></i>*/
/*             <span>Caja</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li><a href="{{ path('cash_index') }}"><i class="glyphicon glyphicon-list-alt"></i>Resumen</a></li>*/
/*             <li><a href="{{ path('cash_new', {"type": "ingress"}) }}"><i class="glyphicon glyphicon-plus"></i>Ingreso</a></li>*/
/*             <li><a href="{{ path('cash_new', {"type": "egress"}) }}"><i class="glyphicon glyphicon-minus"></i>Egreso</a></li>*/
/*           </ul>*/
/*         </li>        */
/*         <li class="treeview {% if is_route_root("user") %}active{% endif %}">*/
/*           <a href="#">*/
/*             <i class="glyphicon glyphicon-user"></i>*/
/*             <span>Usuarios</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li><a href="{{ path('user_new') }}"><i class="glyphicon glyphicon-star"></i>Nuevo</a></li>*/
/*             <li><a href="{{ path('user_index') }}"><i class="glyphicon glyphicon-list"></i>Listar</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li class="treeview {% if is_route_root("product") %}active{% endif %}">*/
/*           <a href="#">*/
/*             <i class="glyphicon glyphicon-gift"></i>*/
/*             <span>Productos</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li><a href="{{ path('product_new') }}"><i class="glyphicon glyphicon-star"></i>Nuevo</a></li>*/
/*             <li><a href="{{ path('product_index') }}"><i class="glyphicon glyphicon-list"></i>Listar</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li class="treeview {% if is_route_root("provider") %}active{% endif %}">*/
/*           <a href="#">*/
/*             <i class="glyphicon glyphicon-plane"></i>*/
/*             <span>Proveedores</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li><a href="{{ path('provider_new') }}"><i class="glyphicon glyphicon-star"></i>Nuevo</a></li>*/
/*             <li><a href="{{ path('provider_index') }}"><i class="glyphicon glyphicon-list"></i>Listar</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li class="treeview {% if is_route_root("family") %}active{% endif %}">*/
/*           <a href="#">*/
/*             <i class="glyphicon glyphicon-th-large"></i>*/
/*             <span>Familias</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li><a href="{{ path('family_new') }}"><i class="glyphicon glyphicon-star"></i>Nuevo</a></li>*/
/*             <li><a href="{{ path('family_index') }}"><i class="glyphicon glyphicon-list"></i>Listar</a></li>*/
/*           </ul>*/
/*         </li>        */
/*         <li class="treeview {% if is_route_root("ingress") %}active{% endif %}{% if is_route_root("egress") %}active{% endif %}">*/
/*           <a href="#">*/
/*             <i class="fa fa-edit"></i> <span>Administracion</span>*/
/*             <span class="pull-right-container">*/
/*               <i class="fa fa-angle-left pull-right"></i>*/
/*             </span>*/
/*           </a>*/
/*           <ul class="treeview-menu">*/
/*             <li><a href="{{ path('ingress_index') }}"><i class="glyphicon glyphicon-tags"></i>Tipos de Ingresos</a></li>*/
/*             <li><a href="{{ path('egress_index') }}"><i class="glyphicon glyphicon-tags"></i>Tipos de Egresos</a></li>*/
/*             <li><a href="{{ path('general_index') }}"><i class="glyphicon glyphicon-cog"></i>General</a></li>*/
/*           </ul>*/
/*         </li>*/
/*       </ul>*/
/*     </section>*/
/*     <!-- /.sidebar -->*/
/*   </aside>*/
