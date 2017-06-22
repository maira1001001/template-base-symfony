<?php

/* backend/header.html.twig */
class __TwigTemplate_6fca1d1248ad6f6bf8833d8bc97a8ec575ed5f104b6c325661ea3c4198871594 extends Twig_Template
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
        $__internal_a610ff788f03ceaf880e5c5d5b8d5c4f035b92ee0863b6a134e2be19d1ed962f = $this->env->getExtension("native_profiler");
        $__internal_a610ff788f03ceaf880e5c5d5b8d5c4f035b92ee0863b6a134e2be19d1ed962f->enter($__internal_a610ff788f03ceaf880e5c5d5b8d5c4f035b92ee0863b6a134e2be19d1ed962f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/header.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["generals_helper"]) ? $context["generals_helper"] : $this->getContext($context, "generals_helper")), "name", array()), "html", null, true);
        echo "</div>
      <div class=\"navbar-custom-menu\">
        <ul class=\"nav navbar-nav\">
          <!-- User Account: style can be found in dropdown.less -->
          <li class=\"dropdown user user-menu\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
              <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->avatarAsset($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avatar", array())), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\">
              <span class=\"hidden-xs\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
        echo "</span>
            </a>
            <ul class=\"dropdown-menu\">
              <!-- User image -->
              <li class=\"user-header\">
                <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->avatarAsset($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "avatar", array())), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">

                <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</p><p>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
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
        
        $__internal_a610ff788f03ceaf880e5c5d5b8d5c4f035b92ee0863b6a134e2be19d1ed962f->leave($__internal_a610ff788f03ceaf880e5c5d5b8d5c4f035b92ee0863b6a134e2be19d1ed962f_prof);

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
        return array (  84 => 38,  78 => 35,  67 => 29,  62 => 27,  54 => 22,  50 => 21,  41 => 15,  26 => 3,  22 => 1,);
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
