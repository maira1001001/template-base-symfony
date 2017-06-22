<?php

/* frontend/base.html.twig */
class __TwigTemplate_14247fc2468de5fdba40d96c109161898055079e521451ebd2fb156a6d28fd63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'classTable' => array($this, 'block_classTable'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9e22c5a94d622cc8238865c5f4559bb15e08114cc2e1e6878ffe54c85842e4d = $this->env->getExtension("native_profiler");
        $__internal_d9e22c5a94d622cc8238865c5f4559bb15e08114cc2e1e6878ffe54c85842e4d->enter($__internal_d9e22c5a94d622cc8238865c5f4559bb15e08114cc2e1e6878ffe54c85842e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/frontend/base.css\">
        <!-- Bootstrap 3.3.6 -->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/bootstrap/css/bootstrap.min.css\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">      
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css\">    
    </head>
    <body style=\"background-image: url(";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("media/" . "wallpaper.jpeg")), "html", null, true);
        echo ")\">
        ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 135
        echo "

        ";
        // line 137
        $this->displayBlock('javascripts', $context, $blocks);
        // line 148
        echo "    </body>
</html>";
        
        $__internal_d9e22c5a94d622cc8238865c5f4559bb15e08114cc2e1e6878ffe54c85842e4d->leave($__internal_d9e22c5a94d622cc8238865c5f4559bb15e08114cc2e1e6878ffe54c85842e4d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0efab2c62bc201da197caad334c0fcde136863f0d00b1ba8bf45b831491eb81c = $this->env->getExtension("native_profiler");
        $__internal_0efab2c62bc201da197caad334c0fcde136863f0d00b1ba8bf45b831491eb81c->enter($__internal_0efab2c62bc201da197caad334c0fcde136863f0d00b1ba8bf45b831491eb81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["generals_helper"]) ? $context["generals_helper"] : $this->getContext($context, "generals_helper")), "name", array()), "html", null, true);
        
        $__internal_0efab2c62bc201da197caad334c0fcde136863f0d00b1ba8bf45b831491eb81c->leave($__internal_0efab2c62bc201da197caad334c0fcde136863f0d00b1ba8bf45b831491eb81c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_be694dab6093b639fea6c27ae99730e46908de44d4a3ab7766f2bc69fc3f8972 = $this->env->getExtension("native_profiler");
        $__internal_be694dab6093b639fea6c27ae99730e46908de44d4a3ab7766f2bc69fc3f8972->enter($__internal_be694dab6093b639fea6c27ae99730e46908de44d4a3ab7766f2bc69fc3f8972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/bootstrap-datatables/dataTables.bootstrap.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/backend/DataTable.css\">
        ";
        
        $__internal_be694dab6093b639fea6c27ae99730e46908de44d4a3ab7766f2bc69fc3f8972->leave($__internal_be694dab6093b639fea6c27ae99730e46908de44d4a3ab7766f2bc69fc3f8972_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_a24d4fcd0ab02c67c2f1eeb82aa9cd69a45f1c291b27aad62b8110604d95eefd = $this->env->getExtension("native_profiler");
        $__internal_a24d4fcd0ab02c67c2f1eeb82aa9cd69a45f1c291b27aad62b8110604d95eefd->enter($__internal_a24d4fcd0ab02c67c2f1eeb82aa9cd69a45f1c291b27aad62b8110604d95eefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "
            <!-- BEGIN # BOOTSNIP INFO -->
            <div class=\"container\">
                <div class=\"row\">
                    <h1 class=\"text-center\"><font color=\"white\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["generals_helper"]) ? $context["generals_helper"] : $this->getContext($context, "generals_helper")), "name", array()), "html", null, true);
        echo "</font></h1>

                    ";
        // line 26
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 27
            echo "                        <div id=\"acc_info\">
                            ";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "
                            ";
            // line 29
            if ((twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())) || twig_in_filter("ROLE_OPERATOR", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())))) {
                // line 30
                echo "                                | <a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin");
                echo "\">Panel de Control</a>
                            ";
            }
            // line 32
            echo "                            |
                            <a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                            </a>
                        </div>



                        <!-- BEGIN # MODAL LOGIN -->
                        <div class=\"modal show\" id=\"login-modal2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\" align=\"center\">
                                        Mis Compras
                                    </div>
                                    
                                    <!-- Begin # DIV Form -->
                                    <div id=\"div-forms\">
                                        <div class=\"row\">        
                                            <div class=\"col-xs-12\">
                                                ";
            // line 52
            if ((isset($context["cashes"]) ? $context["cashes"] : $this->getContext($context, "cashes"))) {
                // line 53
                echo "                                                    <div class=\"box\">
                                                        <div class=\"box-body\">
                                                            <div class=\"dataTables_wrapper form-inline dt-bootstrap\">
                                                                <table id=\"table\" class=\"table ";
                // line 56
                $this->displayBlock('classTable', $context, $blocks);
                echo " table-bordered table-hover\">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Ticket</th>
                                                                            <th>Fecha</th>
                                                                            <th>Entrega</th>
                                                                            <th>Estado</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cashes"]) ? $context["cashes"] : $this->getContext($context, "cashes")));
                foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                    // line 67
                    echo "                                                                            <tr>
                                                                                <th>";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
                    echo "</th>
                                                                                <th>";
                    // line 69
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "datetime", array()), "d/m/Y H:i"), "html", null, true);
                    echo "</th>
                                                                                <th>";
                    // line 70
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "promised", array()), "d/m/Y H:i"), "html", null, true);
                    echo "</th>
                                                                                ";
                    // line 71
                    if (($this->getAttribute($this->getAttribute($context["c"], "state", array()), "id", array()) == 1)) {
                        // line 72
                        echo "                                                                                    <th class=\"sinatender\"><span class=\"glyphicon glyphicon-fire\">
                                                                                ";
                    }
                    // line 74
                    echo "                                                                                ";
                    if (($this->getAttribute($this->getAttribute($context["c"], "state", array()), "id", array()) == 2)) {
                        // line 75
                        echo "                                                                                    <th class=\"trabajando\"><span class=\"glyphicon glyphicon-time\">
                                                                                ";
                    }
                    // line 77
                    echo "                                                                                ";
                    if (($this->getAttribute($this->getAttribute($context["c"], "state", array()), "id", array()) == 3)) {
                        // line 78
                        echo "                                                                                    <th class=\"terminado\"><span class=\"glyphicon glyphicon-star-empty\">
                                                                                ";
                    }
                    // line 80
                    echo "                                                                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "state", array()), "html", null, true);
                    echo "</span>
                                                                                </th>
                                                                            </tr>
                                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "                           
                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr>
                                                                            <th>Ticket</th>
                                                                            <th>Fecha</th>
                                                                            <th>Entrega</th>
                                                                            <th>Estado</th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
            } else {
                // line 98
                echo "                                                    Por el momento, no tenes compras
                                                ";
            }
            // line 100
            echo "                                            </div>
                                        </div>      
                                       
                                    </div>
                                    <!-- End # DIV Form -->
                                    
                                </div>
                            </div>
                        </div>
                        <!-- END # MODAL LOGIN -->



                    ";
        } else {
            // line 114
            echo "                        <p class=\"text-center\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-default btn-lg\">IDENTIFICARSE</a></p>
                        <!--<p class=\"text-center\"><a href=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\" class=\"btn btn-default btn-lg\">REGISTRARSE&nbsp;&nbsp;</a></p>-->
                    ";
        }
        // line 117
        echo "
                </div>
            </div>
            <!-- END # BOOTSNIP INFO -->


            ";
        // line 123
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 124
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 125
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 126
                    echo "                        <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            ";
                    // line 127
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "            ";
        }
        // line 132
        echo "

        ";
        
        $__internal_a24d4fcd0ab02c67c2f1eeb82aa9cd69a45f1c291b27aad62b8110604d95eefd->leave($__internal_a24d4fcd0ab02c67c2f1eeb82aa9cd69a45f1c291b27aad62b8110604d95eefd_prof);

    }

    // line 56
    public function block_classTable($context, array $blocks = array())
    {
        $__internal_2763f07f608affe4d541d8ec935921d6706057eef2c818db12e96d2bf4c1c59c = $this->env->getExtension("native_profiler");
        $__internal_2763f07f608affe4d541d8ec935921d6706057eef2c818db12e96d2bf4c1c59c->enter($__internal_2763f07f608affe4d541d8ec935921d6706057eef2c818db12e96d2bf4c1c59c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classTable"));

        echo " dataTable ";
        
        $__internal_2763f07f608affe4d541d8ec935921d6706057eef2c818db12e96d2bf4c1c59c->leave($__internal_2763f07f608affe4d541d8ec935921d6706057eef2c818db12e96d2bf4c1c59c_prof);

    }

    // line 137
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f3fbbb1cc64825f8fae0bd60ce2aa193521c37b14557b4f37a11a838d9339525 = $this->env->getExtension("native_profiler");
        $__internal_f3fbbb1cc64825f8fae0bd60ce2aa193521c37b14557b4f37a11a838d9339525->enter($__internal_f3fbbb1cc64825f8fae0bd60ce2aa193521c37b14557b4f37a11a838d9339525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 138
        echo "            <!-- jQuery 2.2.3 -->
            <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/jQuery/jquery-2.2.3.min.js\"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
            <!-- Bootstrap 3.3.6 -->
            <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/bootstrap/js/bootstrap.min.js\"></script>
            <!-- Bootstrap WYSIHTML5 -->
            <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js\"></script>
            
        ";
        
        $__internal_f3fbbb1cc64825f8fae0bd60ce2aa193521c37b14557b4f37a11a838d9339525->leave($__internal_f3fbbb1cc64825f8fae0bd60ce2aa193521c37b14557b4f37a11a838d9339525_prof);

    }

    public function getTemplateName()
    {
        return "frontend/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 145,  371 => 143,  364 => 139,  361 => 138,  355 => 137,  343 => 56,  334 => 132,  331 => 131,  325 => 130,  316 => 127,  311 => 126,  306 => 125,  301 => 124,  299 => 123,  291 => 117,  286 => 115,  281 => 114,  265 => 100,  261 => 98,  244 => 83,  233 => 80,  229 => 78,  226 => 77,  222 => 75,  219 => 74,  215 => 72,  213 => 71,  209 => 70,  205 => 69,  201 => 68,  198 => 67,  194 => 66,  181 => 56,  176 => 53,  174 => 52,  153 => 34,  149 => 33,  146 => 32,  140 => 30,  138 => 29,  134 => 28,  131 => 27,  129 => 26,  124 => 24,  118 => 20,  112 => 19,  103 => 8,  98 => 7,  92 => 6,  80 => 5,  72 => 148,  70 => 137,  66 => 135,  64 => 19,  60 => 18,  55 => 16,  49 => 13,  44 => 11,  39 => 10,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{{generals_helper.name}}{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ app.request.basepath }}/lib/bootstrap-datatables/dataTables.bootstrap.css">*/
/*             <link rel="stylesheet" href="{{ app.request.basepath }}/css/backend/DataTable.css">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="stylesheet" href="{{ app.request.basepath }}/css/frontend/base.css">*/
/*         <!-- Bootstrap 3.3.6 -->*/
/*         <link rel="stylesheet" href="{{ app.request.basepath }}/bootstrap/css/bootstrap.min.css">*/
/*         <!-- Font Awesome -->*/
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">      */
/*         <link rel="stylesheet" href="{{ app.request.basepath }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">    */
/*     </head>*/
/*     <body style="background-image: url({{asset('media/' ~ 'wallpaper.jpeg')}})">*/
/*         {% block body %}*/
/* */
/*             <!-- BEGIN # BOOTSNIP INFO -->*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <h1 class="text-center"><font color="white">{{generals_helper.name}}</font></h1>*/
/* */
/*                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                         <div id="acc_info">*/
/*                             {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}*/
/*                             {% if 'ROLE_ADMIN' in app.user.roles or 'ROLE_OPERATOR' in app.user.roles %}*/
/*                                 | <a href="{{ path('admin') }}">Panel de Control</a>*/
/*                             {% endif %}*/
/*                             |*/
/*                             <a href="{{ path('fos_user_security_logout') }}">*/
/*                                 {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                             </a>*/
/*                         </div>*/
/* */
/* */
/* */
/*                         <!-- BEGIN # MODAL LOGIN -->*/
/*                         <div class="modal show" id="login-modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">*/
/*                             <div class="modal-dialog">*/
/*                                 <div class="modal-content">*/
/*                                     <div class="modal-header" align="center">*/
/*                                         Mis Compras*/
/*                                     </div>*/
/*                                     */
/*                                     <!-- Begin # DIV Form -->*/
/*                                     <div id="div-forms">*/
/*                                         <div class="row">        */
/*                                             <div class="col-xs-12">*/
/*                                                 {% if cashes %}*/
/*                                                     <div class="box">*/
/*                                                         <div class="box-body">*/
/*                                                             <div class="dataTables_wrapper form-inline dt-bootstrap">*/
/*                                                                 <table id="table" class="table {% block classTable %} dataTable {% endblock %} table-bordered table-hover">*/
/*                                                                     <thead>*/
/*                                                                         <tr>*/
/*                                                                             <th>Ticket</th>*/
/*                                                                             <th>Fecha</th>*/
/*                                                                             <th>Entrega</th>*/
/*                                                                             <th>Estado</th>*/
/*                                                                         </tr>*/
/*                                                                     </thead>*/
/*                                                                     <tbody>*/
/*                                                                         {% for c in cashes %}*/
/*                                                                             <tr>*/
/*                                                                                 <th>{{c.id}}</th>*/
/*                                                                                 <th>{{c.datetime|date("d/m/Y H:i")}}</th>*/
/*                                                                                 <th>{{c.promised|date("d/m/Y H:i")}}</th>*/
/*                                                                                 {% if c.state.id == 1 %}*/
/*                                                                                     <th class="sinatender"><span class="glyphicon glyphicon-fire">*/
/*                                                                                 {% endif %}*/
/*                                                                                 {% if c.state.id == 2 %}*/
/*                                                                                     <th class="trabajando"><span class="glyphicon glyphicon-time">*/
/*                                                                                 {% endif %}*/
/*                                                                                 {% if c.state.id == 3 %}*/
/*                                                                                     <th class="terminado"><span class="glyphicon glyphicon-star-empty">*/
/*                                                                                 {% endif %}*/
/*                                                                                 {{c.state}}</span>*/
/*                                                                                 </th>*/
/*                                                                             </tr>*/
/*                                                                         {% endfor %}                           */
/*                                                                     </tbody>*/
/*                                                                     <tfoot>*/
/*                                                                         <tr>*/
/*                                                                             <th>Ticket</th>*/
/*                                                                             <th>Fecha</th>*/
/*                                                                             <th>Entrega</th>*/
/*                                                                             <th>Estado</th>*/
/*                                                                         </tr>*/
/*                                                                     </tfoot>*/
/*                                                                 </table>*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </div>*/
/*                                                 {% else %}*/
/*                                                     Por el momento, no tenes compras*/
/*                                                 {% endif %}*/
/*                                             </div>*/
/*                                         </div>      */
/*                                        */
/*                                     </div>*/
/*                                     <!-- End # DIV Form -->*/
/*                                     */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- END # MODAL LOGIN -->*/
/* */
/* */
/* */
/*                     {% else %}*/
/*                         <p class="text-center"><a href="{{ path('fos_user_security_login') }}" class="btn btn-default btn-lg">IDENTIFICARSE</a></p>*/
/*                         <!--<p class="text-center"><a href="{{ path('fos_user_registration_register') }}" class="btn btn-default btn-lg">REGISTRARSE&nbsp;&nbsp;</a></p>-->*/
/*                     {% endif %}*/
/* */
/*                 </div>*/
/*             </div>*/
/*             <!-- END # BOOTSNIP INFO -->*/
/* */
/* */
/*             {% if app.request.hasPreviousSession %}*/
/*                 {% for type, messages in app.session.flashbag.all() %}*/
/*                     {% for message in messages %}*/
/*                         <div class="flash-{{ type }}">*/
/*                             {{ message }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/* */
/* */
/*         {% endblock %}*/
/* */
/* */
/*         {% block javascripts %}*/
/*             <!-- jQuery 2.2.3 -->*/
/*             <script src="{{ app.request.basepath }}/plugins/jQuery/jquery-2.2.3.min.js"></script>*/
/*             <!-- jQuery UI 1.11.4 -->*/
/*             <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>*/
/*             <!-- Bootstrap 3.3.6 -->*/
/*             <script src="{{ app.request.basepath }}/bootstrap/js/bootstrap.min.js"></script>*/
/*             <!-- Bootstrap WYSIHTML5 -->*/
/*             <script src="{{ app.request.basepath }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>*/
/*             */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
