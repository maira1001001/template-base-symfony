<?php

/* backend/user/index.html.twig */
class __TwigTemplate_1f521eb75da69ed0a134be1d8678bc746f572f78b833e1917202aa68e4d652be extends Twig_Template
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
        $__internal_616e4e61c01da55c384b9f409ef364f16ae6411ac93e21e95272a72bfe9a2720 = $this->env->getExtension("native_profiler");
        $__internal_616e4e61c01da55c384b9f409ef364f16ae6411ac93e21e95272a72bfe9a2720->enter($__internal_616e4e61c01da55c384b9f409ef364f16ae6411ac93e21e95272a72bfe9a2720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/user/index.html.twig"));

        // line 8
        $context["new"] = array("route" => "user_new", "title" => "Nuevo usuario");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_616e4e61c01da55c384b9f409ef364f16ae6411ac93e21e95272a72bfe9a2720->leave($__internal_616e4e61c01da55c384b9f409ef364f16ae6411ac93e21e95272a72bfe9a2720_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ffb1a52760cb0b0599ff63dab056dc51464a1a0f9aeb51dd57d15de895246fe = $this->env->getExtension("native_profiler");
        $__internal_3ffb1a52760cb0b0599ff63dab056dc51464a1a0f9aeb51dd57d15de895246fe->enter($__internal_3ffb1a52760cb0b0599ff63dab056dc51464a1a0f9aeb51dd57d15de895246fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/backend/user.css\">
";
        
        $__internal_3ffb1a52760cb0b0599ff63dab056dc51464a1a0f9aeb51dd57d15de895246fe->leave($__internal_3ffb1a52760cb0b0599ff63dab056dc51464a1a0f9aeb51dd57d15de895246fe_prof);

    }

    // line 16
    public function block_thead($context, array $blocks = array())
    {
        $__internal_1e71963cf2e28085a87ceb4931c1da1ff95d43e57ad6a4cd596a686b8afba6ab = $this->env->getExtension("native_profiler");
        $__internal_1e71963cf2e28085a87ceb4931c1da1ff95d43e57ad6a4cd596a686b8afba6ab->enter($__internal_1e71963cf2e28085a87ceb4931c1da1ff95d43e57ad6a4cd596a686b8afba6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "thead"));

        // line 17
        echo "    <tr>
        <th>Avatar</th>
        <th>Name</th>
        <th>Lastname</th>
        <th>Actions</th>
    </tr>
";
        
        $__internal_1e71963cf2e28085a87ceb4931c1da1ff95d43e57ad6a4cd596a686b8afba6ab->leave($__internal_1e71963cf2e28085a87ceb4931c1da1ff95d43e57ad6a4cd596a686b8afba6ab_prof);

    }

    // line 24
    public function block_tfoot($context, array $blocks = array())
    {
        $__internal_6d706c8a3b748357f8193bb3cc57a16061b898ce4671dfc1732dc88029df9e68 = $this->env->getExtension("native_profiler");
        $__internal_6d706c8a3b748357f8193bb3cc57a16061b898ce4671dfc1732dc88029df9e68->enter($__internal_6d706c8a3b748357f8193bb3cc57a16061b898ce4671dfc1732dc88029df9e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tfoot"));

        // line 25
        echo "    <tr>
        <th>Avatar</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Actions</th>
    </tr>
";
        
        $__internal_6d706c8a3b748357f8193bb3cc57a16061b898ce4671dfc1732dc88029df9e68->leave($__internal_6d706c8a3b748357f8193bb3cc57a16061b898ce4671dfc1732dc88029df9e68_prof);

    }

    // line 32
    public function block_tbody($context, array $blocks = array())
    {
        $__internal_f1efded7e02c1b160801effd054e3b5c16b7c2a4941936dbf71ee45aa30e66f0 = $this->env->getExtension("native_profiler");
        $__internal_f1efded7e02c1b160801effd054e3b5c16b7c2a4941936dbf71ee45aa30e66f0->enter($__internal_f1efded7e02c1b160801effd054e3b5c16b7c2a4941936dbf71ee45aa30e66f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbody"));

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
        
        $__internal_f1efded7e02c1b160801effd054e3b5c16b7c2a4941936dbf71ee45aa30e66f0->leave($__internal_f1efded7e02c1b160801effd054e3b5c16b7c2a4941936dbf71ee45aa30e66f0_prof);

    }

    // line 46
    public function block_section($context, array $blocks = array())
    {
        $__internal_08fb439b28e8c3400247c185e84463f2c47963313e5ae6409d3845f4ca64fb88 = $this->env->getExtension("native_profiler");
        $__internal_08fb439b28e8c3400247c185e84463f2c47963313e5ae6409d3845f4ca64fb88->enter($__internal_08fb439b28e8c3400247c185e84463f2c47963313e5ae6409d3845f4ca64fb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

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
        
        $__internal_08fb439b28e8c3400247c185e84463f2c47963313e5ae6409d3845f4ca64fb88->leave($__internal_08fb439b28e8c3400247c185e84463f2c47963313e5ae6409d3845f4ca64fb88_prof);

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
