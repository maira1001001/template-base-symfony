<?php

/* backend/user/show.html.twig */
class __TwigTemplate_6a79b1ec5899cda28547587bdeff9ba23ff30a22882b4f21d09c84810bd59ba0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/user/show.html.twig", 1);
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
        $__internal_a4e8e5429fa350023a5ca656676b638efbadb763313c0f5249b34fc5ae9e58f8 = $this->env->getExtension("native_profiler");
        $__internal_a4e8e5429fa350023a5ca656676b638efbadb763313c0f5249b34fc5ae9e58f8->enter($__internal_a4e8e5429fa350023a5ca656676b638efbadb763313c0f5249b34fc5ae9e58f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4e8e5429fa350023a5ca656676b638efbadb763313c0f5249b34fc5ae9e58f8->leave($__internal_a4e8e5429fa350023a5ca656676b638efbadb763313c0f5249b34fc5ae9e58f8_prof);

    }

    // line 3
    public function block_section($context, array $blocks = array())
    {
        $__internal_2b4e432bc79363f5041c44406078b9aa2142fd4fd33bdfe48c5c12a8c9318035 = $this->env->getExtension("native_profiler");
        $__internal_2b4e432bc79363f5041c44406078b9aa2142fd4fd33bdfe48c5c12a8c9318035->enter($__internal_2b4e432bc79363f5041c44406078b9aa2142fd4fd33bdfe48c5c12a8c9318035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 4
        echo "<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
  <!-- Content Header (Page header) -->
  <section class=\"content-header\">
    <h1>
      Usuario
      <small>Detallado</small>
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
    <table>
        <tbody>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Correo electronico</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
            </tr>              
            <tr>
                <th>Telefono 1</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone1", array()), "html", null, true);
        echo "</td>
            </tr>      
            <tr>
                <th>Telefono 2</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone2", array()), "html", null, true);
        echo "</td>
            </tr>                 
            <tr>
                <th>Direccion</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adress", array()), "html", null, true);
        echo "</td>
            </tr>                 
            <tr>
                <th>DNI</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dni", array()), "html", null, true);
        echo "</td>
            </tr>              
            <tr>
                <th>Avatar</th>
                <td><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("media/avatars/" . $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "avatar", array()))), "html", null, true);
        echo "\"></td>
            </tr>
            <tr>
                <th>Registrado</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "registeredAt", array()), "d/m/Y H:i"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexo</th>
                <td>
                ";
        // line 59
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "gender", array()) == "Female")) {
            // line 60
            echo "                    Mujer
                ";
        } else {
            // line 62
            echo "                    Hombre
                ";
        }
        // line 64
        echo "                </td>
            </tr>
            <tr>
                <th>Observaciones</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "observations", array()), "html", null, true);
        echo "</td>
            </tr>            
        </tbody>
    </table>
    </div>
    <div class=\"box-footer\">
        <a class=\"btn btn-default\" href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\"><span class=\"glyphicon glyphicon-chevron-left\"></span> Volver</a>
        <a class=\"btn btn-primary\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> Editar</a>

        ";
        // line 77
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 78
            echo "            ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
            <button type=\"submit\" class=\"btn btn-danger pull-right\"><span class=\"glyphicon glyphicon-trash\"></span> Eliminar</button>
            ";
            // line 80
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
        ";
        }
        // line 82
        echo "    </div>
</div>     
";
        
        $__internal_2b4e432bc79363f5041c44406078b9aa2142fd4fd33bdfe48c5c12a8c9318035->leave($__internal_2b4e432bc79363f5041c44406078b9aa2142fd4fd33bdfe48c5c12a8c9318035_prof);

    }

    public function getTemplateName()
    {
        return "backend/user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 82,  169 => 80,  163 => 78,  161 => 77,  156 => 75,  152 => 74,  143 => 68,  137 => 64,  133 => 62,  129 => 60,  127 => 59,  119 => 54,  112 => 50,  105 => 46,  98 => 42,  91 => 38,  84 => 34,  77 => 30,  70 => 26,  63 => 22,  51 => 13,  40 => 4,  34 => 3,  11 => 1,);
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
/*       <small>Detallado</small>*/
/*     </h1>*/
/*     <ol class="breadcrumb">*/
/*       <li><a href="{{ path('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>*/
/*       <li class="active">Usuario</li>*/
/*     </ol>*/
/*   </section>*/
/*   <div class="content">*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ user.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Apellido</th>*/
/*                 <td>{{ user.lastname }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Correo electronico</th>*/
/*                 <td>{{ user.email }}</td>*/
/*             </tr>              */
/*             <tr>*/
/*                 <th>Telefono 1</th>*/
/*                 <td>{{ user.phone1 }}</td>*/
/*             </tr>      */
/*             <tr>*/
/*                 <th>Telefono 2</th>*/
/*                 <td>{{ user.phone2 }}</td>*/
/*             </tr>                 */
/*             <tr>*/
/*                 <th>Direccion</th>*/
/*                 <td>{{ user.adress }}</td>*/
/*             </tr>                 */
/*             <tr>*/
/*                 <th>DNI</th>*/
/*                 <td>{{ user.dni }}</td>*/
/*             </tr>              */
/*             <tr>*/
/*                 <th>Avatar</th>*/
/*                 <td><img src="{{asset('media/avatars/' ~ user.avatar)}}"></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Registrado</th>*/
/*                 <td>{{ user.registeredAt | date('d/m/Y H:i') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Sexo</th>*/
/*                 <td>*/
/*                 {% if user.gender == 'Female' %}*/
/*                     Mujer*/
/*                 {% else %}*/
/*                     Hombre*/
/*                 {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Observaciones</th>*/
/*                 <td>{{ user.observations }}</td>*/
/*             </tr>            */
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/*     <div class="box-footer">*/
/*         <a class="btn btn-default" href="{{ path('user_index') }}"><span class="glyphicon glyphicon-chevron-left"></span> Volver</a>*/
/*         <a class="btn btn-primary" href="{{ path('user_edit', { 'id': user.id }) }}"><span class="glyphicon glyphicon-edit"></span> Editar</a>*/
/* */
/*         {% if is_granted('ROLE_ADMIN') %}*/
/*             {{ form_start(delete_form) }}*/
/*             <button type="submit" class="btn btn-danger pull-right"><span class="glyphicon glyphicon-trash"></span> Eliminar</button>*/
/*             {{ form_end(delete_form) }}*/
/*         {% endif %}*/
/*     </div>*/
/* </div>     */
/* {% endblock %}*/
/* */
