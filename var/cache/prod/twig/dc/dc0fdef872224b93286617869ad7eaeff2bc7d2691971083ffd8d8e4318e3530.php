<?php

/* backend/header.html.twig */
class __TwigTemplate_36e7411cb02c1b8f3f2e31a61aa81551b8e88a7c8cffeb2ba56f24751afc6341 extends Twig_Template
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
        echo " <header class=\"main-header\">
    <!-- Logo -->
    <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\" class=\"logo\">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class=\"logo-mini\"><b>N</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class=\"logo-lg\"><b>NEXTOCK</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class=\"navbar navbar-static-top\">
      <!-- Sidebar toggle button-->
      <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
        <span class=\"sr-only\">Toggle navigation</span>
      </a>
      <div id=\"general-name\" align=\"center\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["generals_helper"]) ? $context["generals_helper"] : null), "name", array()), "html", null, true);
        echo "</div>
      <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
          <!-- User Account: style can be found in dropdown.less -->
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->avatarAsset($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "avatar", array())), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "lastname", array()), "html", null, true);
        echo "</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->avatarAsset($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "avatar", array())), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "</p><p>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "email", array()), "html", null, true);
        echo "</p>

              </li>
              <!-- Menu Footer-->
              <li class=\"user-footer\">
                <div class=\"pull-left\">
                  <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" class=\"btn btn-default btn-flat\">Perfil</a>
                </div>
                <div class=\"pull-right\">
                  <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">Salir</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>";
    }

    public function getTemplateName()
    {
        return "backend/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 38,  75 => 35,  64 => 29,  59 => 27,  51 => 22,  47 => 21,  38 => 15,  23 => 3,  19 => 1,);
    }
}
/*  <header class="main-header">*/
/*     <!-- Logo -->*/
/*     <a href="{{ path('admin') }}" class="logo">*/
/*       <!-- mini logo for sidebar mini 50x50 pixels -->*/
/*       <span class="logo-mini"><b>N</b></span>*/
/*       <!-- logo for regular state and mobile devices -->*/
/*       <span class="logo-lg"><b>NEXTOCK</b></span>*/
/*     </a>*/
/*     <!-- Header Navbar: style can be found in header.less -->*/
/*     <nav class="navbar navbar-static-top">*/
/*       <!-- Sidebar toggle button-->*/
/*       <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*       </a>*/
/*       <div id="general-name" align="center">{{generals_helper.name}}</div>*/
/*       <div class="navbar-custom-menu">*/
/*         <ul class="nav navbar-nav">*/
/*           <!-- User Account: style can be found in dropdown.less -->*/
/*           <li class="dropdown user user-menu">*/
/*             <a href="#" class="dropdown-toggle" data-toggle="dropdown">*/
/*               <img src="{{ avatar_asset(app.user.avatar) }}" class="user-image" alt="User Image">*/
/*               <span class="hidden-xs">{{app.user.lastname}}</span>*/
/*             </a>*/
/*             <ul class="dropdown-menu">*/
/*               <!-- User image -->*/
/*               <li class="user-header">*/
/*                 <img src="{{ avatar_asset(app.user.avatar) }}" class="img-circle" alt="User Image">*/
/* */
/*                 <p>{{app.user.username}}</p><p>{{app.user.email}}</p>*/
/* */
/*               </li>*/
/*               <!-- Menu Footer-->*/
/*               <li class="user-footer">*/
/*                 <div class="pull-left">*/
/*                   <a href="{{ path('fos_user_profile_show') }}" class="btn btn-default btn-flat">Perfil</a>*/
/*                 </div>*/
/*                 <div class="pull-right">*/
/*                   <a href="{{ path('fos_user_security_logout') }}" class="btn btn-default btn-flat">Salir</a>*/
/*                 </div>*/
/*               </li>*/
/*             </ul>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*     </nav>*/
/*   </header>*/
