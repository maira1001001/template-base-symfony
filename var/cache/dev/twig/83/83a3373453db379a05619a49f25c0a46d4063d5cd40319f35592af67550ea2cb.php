<?php

/* backend/cash/index.html.twig */
class __TwigTemplate_51b803760d1f65c235452bf4cf7e0fafc130a1bc87888548760d4a4a0f4e6f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/table.html.twig", "backend/cash/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
        $__internal_34cbd6369ec18e3dab98dc3bed97a9e73e0197fa28ba600bbbb3bae1e77d4093 = $this->env->getExtension("native_profiler");
        $__internal_34cbd6369ec18e3dab98dc3bed97a9e73e0197fa28ba600bbbb3bae1e77d4093->enter($__internal_34cbd6369ec18e3dab98dc3bed97a9e73e0197fa28ba600bbbb3bae1e77d4093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/cash/index.html.twig"));

        // line 3
        $context["new"] = array("route" => "cash_new", "route_options" => array("type" => "ingress"), "title" => "Nuevo");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34cbd6369ec18e3dab98dc3bed97a9e73e0197fa28ba600bbbb3bae1e77d4093->leave($__internal_34cbd6369ec18e3dab98dc3bed97a9e73e0197fa28ba600bbbb3bae1e77d4093_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5aafe5c357006a55a9847f78e523ae66335872116a2296384b10c64a72d47daa = $this->env->getExtension("native_profiler");
        $__internal_5aafe5c357006a55a9847f78e523ae66335872116a2296384b10c64a72d47daa->enter($__internal_5aafe5c357006a55a9847f78e523ae66335872116a2296384b10c64a72d47daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/backend/cash.css\">
";
        
        $__internal_5aafe5c357006a55a9847f78e523ae66335872116a2296384b10c64a72d47daa->leave($__internal_5aafe5c357006a55a9847f78e523ae66335872116a2296384b10c64a72d47daa_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_546c338cfec785e6dda6d980ea1dc3d3bb13c2b71e87ee6fb9e88b8c293c029b = $this->env->getExtension("native_profiler");
        $__internal_546c338cfec785e6dda6d980ea1dc3d3bb13c2b71e87ee6fb9e88b8c293c029b->enter($__internal_546c338cfec785e6dda6d980ea1dc3d3bb13c2b71e87ee6fb9e88b8c293c029b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/moment.js/moment-with-locales.js\"></script>
  <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js\"></script>
  <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/backend/cash.js\"></script>
";
        
        $__internal_546c338cfec785e6dda6d980ea1dc3d3bb13c2b71e87ee6fb9e88b8c293c029b->leave($__internal_546c338cfec785e6dda6d980ea1dc3d3bb13c2b71e87ee6fb9e88b8c293c029b_prof);

    }

    // line 24
    public function block_thead($context, array $blocks = array())
    {
        $__internal_d5609a1ec38e059db656feb8efae8cde5e7ab12f94fd288d65bac6f5f191fd0e = $this->env->getExtension("native_profiler");
        $__internal_d5609a1ec38e059db656feb8efae8cde5e7ab12f94fd288d65bac6f5f191fd0e->enter($__internal_d5609a1ec38e059db656feb8efae8cde5e7ab12f94fd288d65bac6f5f191fd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "thead"));

        // line 25
        echo "    <tr>
        <th>Fecha</th>
        <th>Monto</th>
        <th>Tipo de pago</th>
        <th>Ingreso / Egreso</th>
        <th>Acciones</th>
    </tr>
";
        
        $__internal_d5609a1ec38e059db656feb8efae8cde5e7ab12f94fd288d65bac6f5f191fd0e->leave($__internal_d5609a1ec38e059db656feb8efae8cde5e7ab12f94fd288d65bac6f5f191fd0e_prof);

    }

    // line 33
    public function block_tfoot($context, array $blocks = array())
    {
        $__internal_a0ab5ee0b551002f4845d8634621dcd32afae550c5c142e3a4bd0cc19192a335 = $this->env->getExtension("native_profiler");
        $__internal_a0ab5ee0b551002f4845d8634621dcd32afae550c5c142e3a4bd0cc19192a335->enter($__internal_a0ab5ee0b551002f4845d8634621dcd32afae550c5c142e3a4bd0cc19192a335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tfoot"));

        // line 34
        echo "    <tr>
        <th>Fecha</th>
        <th>Monto</th>
        <th>Tipo de pago</th>
        <th>Ingreso / Egreso</th>
        <th>Acciones</th>
    </tr>
";
        
        $__internal_a0ab5ee0b551002f4845d8634621dcd32afae550c5c142e3a4bd0cc19192a335->leave($__internal_a0ab5ee0b551002f4845d8634621dcd32afae550c5c142e3a4bd0cc19192a335_prof);

    }

    // line 43
    public function block_tbody($context, array $blocks = array())
    {
        $__internal_a9dc81543eb6a224405a8cd17fc7c365d93c39bdcf08b3e4d5f88417900b8329 = $this->env->getExtension("native_profiler");
        $__internal_a9dc81543eb6a224405a8cd17fc7c365d93c39bdcf08b3e4d5f88417900b8329->enter($__internal_a9dc81543eb6a224405a8cd17fc7c365d93c39bdcf08b3e4d5f88417900b8329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbody"));

        // line 44
        echo "    ";
        $context["cashTotal"] = 0;
        // line 45
        echo "    ";
        $context["cardTotal"] = 0;
        // line 46
        echo "    ";
        $context["checkTotal"] = 0;
        // line 47
        echo "
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cashes"]) ? $context["cashes"] : $this->getContext($context, "cashes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cash"]) {
            // line 49
            echo "        <tr>
            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cash"], "datetime", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
            ";
            // line 51
            $context["total"] = 0;
            echo "   
            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["cash"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 53
                echo "                ";
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + ($this->getAttribute($context["i"], "quantity", array()) * $this->getAttribute($this->getAttribute($context["i"], "product", array()), "price", array())));
                // line 54
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            ";
            if (($this->getAttribute($context["cash"], "paymentType", array()) == "Efectivo")) {
                // line 56
                echo "                ";
                $context["cashTotal"] = ((isset($context["cashTotal"]) ? $context["cashTotal"] : $this->getContext($context, "cashTotal")) + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                // line 57
                echo "            ";
            }
            // line 58
            echo "            ";
            if (($this->getAttribute($context["cash"], "paymentType", array()) == "Tarjeta")) {
                // line 59
                echo "                ";
                $context["cardTotal"] = ((isset($context["cardTotal"]) ? $context["cardTotal"] : $this->getContext($context, "cardTotal")) + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                // line 60
                echo "            ";
            }
            // line 61
            echo "            ";
            if (($this->getAttribute($context["cash"], "paymentType", array()) == "Cheque")) {
                // line 62
                echo "                ";
                $context["checkTotal"] = ((isset($context["checkTotal"]) ? $context["checkTotal"] : $this->getContext($context, "checkTotal")) + (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")));
                // line 63
                echo "            ";
            }
            echo "                        
            <td>\$ ";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "</td>
            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "paymentType", array()), "html", null, true);
            echo "</td>
            <td>
            ";
            // line 67
            if ($this->getAttribute($context["cash"], "ingress", array())) {
                // line 68
                echo "                <span class=\"ingress-text glyphicon glyphicon-plus\"> Ingreso: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cash"], "ingress", array()), "name", array()), "html", null, true);
                echo "</span>
            ";
            }
            // line 70
            echo "            ";
            if ($this->getAttribute($context["cash"], "egress", array())) {
                // line 71
                echo "                <span class=\"egress-text glyphicon glyphicon-minus\"> Egreso: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cash"], "egress", array()), "name", array()), "html", null, true);
                echo "</span>
                ";
                // line 72
                if ($this->getAttribute($context["cash"], "provider", array())) {
                    // line 73
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("provider_show", array("id" => $this->getAttribute($this->getAttribute($context["cash"], "provider", array()), "id", array()))), "html", null, true);
                    echo "\">Proveedor: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["cash"], "provider", array()), "name", array()), "html", null, true);
                    echo "</a>
                ";
                }
                // line 75
                echo "            ";
            }
            // line 76
            echo "            </td>
            <td>
                <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cash_show", array("id" => $this->getAttribute($context["cash"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-zoom-in\" aria-hidden=\"true\"></span></a>
                <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cash_edit", array("id" => $this->getAttribute($context["cash"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
        <tr>
            <td><b>Total Efectivo</b></td>
            <td><b>Total Tarjeta<b></td>
            <td><b>Total Cheque</b></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>\$ ";
        // line 92
        echo twig_escape_filter($this->env, (isset($context["cashTotal"]) ? $context["cashTotal"] : $this->getContext($context, "cashTotal")), "html", null, true);
        echo "</td>
            <td>\$ ";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["cardTotal"]) ? $context["cardTotal"] : $this->getContext($context, "cardTotal")), "html", null, true);
        echo "</td>
            <td>\$ ";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["checkTotal"]) ? $context["checkTotal"] : $this->getContext($context, "checkTotal")), "html", null, true);
        echo "</td>
            <td></td>
            <td></td>
        </tr>        
";
        
        $__internal_a9dc81543eb6a224405a8cd17fc7c365d93c39bdcf08b3e4d5f88417900b8329->leave($__internal_a9dc81543eb6a224405a8cd17fc7c365d93c39bdcf08b3e4d5f88417900b8329_prof);

    }

    // line 100
    public function block_section($context, array $blocks = array())
    {
        $__internal_0b58c2c9d11f494d312162274ceda3a970ebf5c1ebc2fbee7d8dd67ba4501de9 = $this->env->getExtension("native_profiler");
        $__internal_0b58c2c9d11f494d312162274ceda3a970ebf5c1ebc2fbee7d8dd67ba4501de9->enter($__internal_0b58c2c9d11f494d312162274ceda3a970ebf5c1ebc2fbee7d8dd67ba4501de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 101
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
      <!-- Content Header (Page header) -->
      <section class=\"content-header\">
        <h1>
          Caja
          <small>Listado</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li><a href=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Inicio</a></li>
          <li class=\"active\">Caja</li>
        </ol>
        </section>

        <div class=\"content\">
            <form method=\"post\" action=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("cash_index");
        echo "\">     
                <div class=\"form-group\">
                    Fecha de inicio
                    <div class=\"input-group date\">
                        <span class=\"input-group-addon\">
                            <span class=\"glyphicon glyphicon-calendar\"></span>
                        </span>
                        <input id=\"startTime\" type=\"text\" class=\"form-control\" name=\"startTime\" value=\"";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["startTime"]) ? $context["startTime"] : $this->getContext($context, "startTime")), "html", null, true);
        echo "\">
                    </div>
                </div>

                <div class=\"form-group\">
                    Fecha de cierre
                    <div class=\"input-group date\">
                        <span class=\"input-group-addon\">
                            <span class=\"glyphicon glyphicon-calendar\"></span>
                        </span>
                        <input id=\"endTime\" type=\"text\" class=\"form-control\" name=\"endTime\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["endTime"]) ? $context["endTime"] : $this->getContext($context, "endTime")), "html", null, true);
        echo "\">
                    </div>   
                </div>

                <div class=\"form-group\">
                    Tipo de Ingreso
                    <select id=\"ingressType\" name=\"ingressType\" class=\"form-control\">
                        <option value=\"\">-</option>
                        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ingressType"]) ? $context["ingressType"] : $this->getContext($context, "ingressType")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 142
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "name", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                    </select>
                </div>

                <div class=\"form-group\">
                    Tipo de Egreso
                    <select id=\"egressType\" name=\"egressType\" class=\"form-control\">
                        <option value=\"\">-</option>
                        ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["egressType"]) ? $context["egressType"] : $this->getContext($context, "egressType")));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 152
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["e"], "name", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "                    </select>
                </div>

                <div class=\"form-group\">
                    Tipo de Pago
                    <select id=\"paymentType\" name=\"paymentType\" class=\"form-control\">
                        <option value=\"\">-</option>
                        ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paymentType"]) ? $context["paymentType"] : $this->getContext($context, "paymentType")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 162
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                    </select>
                </div>

                <button type=\"submit\" class=\"btn btn-success pull-right\"><span class=\"glyphicon glyphicon-refresh\"></span> Consultar</button>      
            </form>  
            
            ";
        // line 170
        $this->displayParentBlock("section", $context, $blocks);
        echo "
        </div>
    </div>
";
        
        $__internal_0b58c2c9d11f494d312162274ceda3a970ebf5c1ebc2fbee7d8dd67ba4501de9->leave($__internal_0b58c2c9d11f494d312162274ceda3a970ebf5c1ebc2fbee7d8dd67ba4501de9_prof);

    }

    public function getTemplateName()
    {
        return "backend/cash/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 170,  419 => 164,  408 => 162,  404 => 161,  395 => 154,  384 => 152,  380 => 151,  371 => 144,  360 => 142,  356 => 141,  345 => 133,  332 => 123,  322 => 116,  313 => 110,  302 => 101,  296 => 100,  284 => 94,  280 => 93,  276 => 92,  265 => 83,  255 => 79,  251 => 78,  247 => 76,  244 => 75,  236 => 73,  234 => 72,  229 => 71,  226 => 70,  220 => 68,  218 => 67,  213 => 65,  209 => 64,  204 => 63,  201 => 62,  198 => 61,  195 => 60,  192 => 59,  189 => 58,  186 => 57,  183 => 56,  180 => 55,  174 => 54,  171 => 53,  167 => 52,  163 => 51,  159 => 50,  156 => 49,  152 => 48,  149 => 47,  146 => 46,  143 => 45,  140 => 44,  134 => 43,  120 => 34,  114 => 33,  100 => 25,  94 => 24,  85 => 21,  81 => 20,  77 => 19,  72 => 18,  66 => 17,  57 => 14,  53 => 13,  48 => 12,  42 => 11,  35 => 1,  33 => 3,  11 => 1,);
    }
}
/* {% extends 'backend/table.html.twig' %}*/
/* */
/* {% set new = */
/*     {*/
/*         "route": "cash_new",*/
/*         "route_options": {"type": "ingress"},*/
/*         "title": "Nuevo"*/
/*     }*/
/* %}*/
/* */
/* {% block stylesheets %}*/
/*   {{parent()}}*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/lib/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/css/backend/cash.css">*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   {{parent()}}*/
/*   <script src="{{ app.request.basepath }}/lib/moment.js/moment-with-locales.js"></script>*/
/*   <script src="{{ app.request.basepath }}/lib/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>*/
/*   <script src="{{ app.request.basepath }}/js/backend/cash.js"></script>*/
/* {% endblock %}*/
/* */
/* {% block thead %}*/
/*     <tr>*/
/*         <th>Fecha</th>*/
/*         <th>Monto</th>*/
/*         <th>Tipo de pago</th>*/
/*         <th>Ingreso / Egreso</th>*/
/*         <th>Acciones</th>*/
/*     </tr>*/
/* {% endblock %}*/
/* {% block tfoot %}*/
/*     <tr>*/
/*         <th>Fecha</th>*/
/*         <th>Monto</th>*/
/*         <th>Tipo de pago</th>*/
/*         <th>Ingreso / Egreso</th>*/
/*         <th>Acciones</th>*/
/*     </tr>*/
/* {% endblock %}*/
/* */
/* {% block tbody %}*/
/*     {% set cashTotal = 0 %}*/
/*     {% set cardTotal = 0 %}*/
/*     {% set checkTotal = 0 %}*/
/* */
/*     {% for cash in cashes %}*/
/*         <tr>*/
/*             <td>{{ cash.datetime | date("d/m/Y H:i:s") }}</td>*/
/*             {% set total = 0 %}   */
/*             {% for i in cash.items %}*/
/*                 {% set total = total + (i.quantity * i.product.price) %}*/
/*             {% endfor %}*/
/*             {% if cash.paymentType == "Efectivo" %}*/
/*                 {% set cashTotal = cashTotal + total %}*/
/*             {% endif %}*/
/*             {% if cash.paymentType == "Tarjeta" %}*/
/*                 {% set cardTotal = cardTotal + total %}*/
/*             {% endif %}*/
/*             {% if cash.paymentType == "Cheque" %}*/
/*                 {% set checkTotal = checkTotal + total %}*/
/*             {% endif %}                        */
/*             <td>$ {{ total }}</td>*/
/*             <td>{{ cash.paymentType }}</td>*/
/*             <td>*/
/*             {% if cash.ingress %}*/
/*                 <span class="ingress-text glyphicon glyphicon-plus"> Ingreso: {{ cash.ingress.name }}</span>*/
/*             {% endif %}*/
/*             {% if cash.egress %}*/
/*                 <span class="egress-text glyphicon glyphicon-minus"> Egreso: {{cash.egress.name}}</span>*/
/*                 {% if cash.provider %}*/
/*                     <a href="{{ path('provider_show', { 'id': cash.provider.id }) }}">Proveedor: {{ cash.provider.name }}</a>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             </td>*/
/*             <td>*/
/*                 <a href="{{ path('cash_show', { 'id': cash.id }) }}"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span></a>*/
/*                 <a href="{{ path('cash_edit', { 'id': cash.id }) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* */
/*         <tr>*/
/*             <td><b>Total Efectivo</b></td>*/
/*             <td><b>Total Tarjeta<b></td>*/
/*             <td><b>Total Cheque</b></td>*/
/*             <td></td>*/
/*             <td></td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>$ {{cashTotal}}</td>*/
/*             <td>$ {{cardTotal}}</td>*/
/*             <td>$ {{checkTotal}}</td>*/
/*             <td></td>*/
/*             <td></td>*/
/*         </tr>        */
/* {% endblock %}*/
/* */
/* {% block section %}*/
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/*       <!-- Content Header (Page header) -->*/
/*       <section class="content-header">*/
/*         <h1>*/
/*           Caja*/
/*           <small>Listado</small>*/
/*         </h1>*/
/*         <ol class="breadcrumb">*/
/*           <li><a href="{{ path('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>*/
/*           <li class="active">Caja</li>*/
/*         </ol>*/
/*         </section>*/
/* */
/*         <div class="content">*/
/*             <form method="post" action="{{ path('cash_index') }}">     */
/*                 <div class="form-group">*/
/*                     Fecha de inicio*/
/*                     <div class="input-group date">*/
/*                         <span class="input-group-addon">*/
/*                             <span class="glyphicon glyphicon-calendar"></span>*/
/*                         </span>*/
/*                         <input id="startTime" type="text" class="form-control" name="startTime" value="{{startTime}}">*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     Fecha de cierre*/
/*                     <div class="input-group date">*/
/*                         <span class="input-group-addon">*/
/*                             <span class="glyphicon glyphicon-calendar"></span>*/
/*                         </span>*/
/*                         <input id="endTime" type="text" class="form-control" name="endTime" value="{{endTime}}">*/
/*                     </div>   */
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     Tipo de Ingreso*/
/*                     <select id="ingressType" name="ingressType" class="form-control">*/
/*                         <option value="">-</option>*/
/*                         {% for i in ingressType %}*/
/*                             <option value="{{i.id}}">{{i.name}}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     Tipo de Egreso*/
/*                     <select id="egressType" name="egressType" class="form-control">*/
/*                         <option value="">-</option>*/
/*                         {% for e in egressType %}*/
/*                             <option value="{{e.id}}">{{e.name}}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     Tipo de Pago*/
/*                     <select id="paymentType" name="paymentType" class="form-control">*/
/*                         <option value="">-</option>*/
/*                         {% for p in paymentType %}*/
/*                             <option value="{{p.id}}">{{p.name}}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </div>*/
/* */
/*                 <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-refresh"></span> Consultar</button>      */
/*             </form>  */
/*             */
/*             {{parent()}}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
