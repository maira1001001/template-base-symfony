<?php

/* backend/sidebar.html.twig */
class __TwigTemplate_86fec44415bf0dc31b7a9c63716e71beff0d9ee5b1ddeb8d38a001e5d72099e0 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->avatarAsset($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "avatar", array())), "html", null, true);
        echo "\" class=\"img-rounded\" alt=\"User Image\">
        </div>
        <div class=\"pull-left info\">
          <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name", array()), "html", null, true);
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
        return array (  205 => 99,  201 => 98,  197 => 97,  181 => 89,  175 => 86,  171 => 85,  157 => 76,  151 => 73,  147 => 72,  133 => 63,  127 => 60,  123 => 59,  109 => 50,  103 => 47,  99 => 46,  85 => 37,  79 => 34,  75 => 33,  71 => 32,  57 => 23,  50 => 19,  44 => 18,  34 => 11,  28 => 8,  19 => 1,);
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
