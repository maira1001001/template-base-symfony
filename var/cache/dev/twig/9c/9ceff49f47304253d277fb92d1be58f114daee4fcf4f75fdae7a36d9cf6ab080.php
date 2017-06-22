<?php

/* backend/cash/show.html.twig */
class __TwigTemplate_4d61eed245ed9777c76f51d209388458df764ab236e5becca231a5676fcba8fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/cash/show.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2814de0ab51dede861f3335024dc9c69ab011021f3832c1606d438d2e57dbb4 = $this->env->getExtension("native_profiler");
        $__internal_d2814de0ab51dede861f3335024dc9c69ab011021f3832c1606d438d2e57dbb4->enter($__internal_d2814de0ab51dede861f3335024dc9c69ab011021f3832c1606d438d2e57dbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/cash/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2814de0ab51dede861f3335024dc9c69ab011021f3832c1606d438d2e57dbb4->leave($__internal_d2814de0ab51dede861f3335024dc9c69ab011021f3832c1606d438d2e57dbb4_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_949e35e783f17b8b498cb84498cca1fffcf4d10640a17eb1c648c765b5094fe0 = $this->env->getExtension("native_profiler");
        $__internal_949e35e783f17b8b498cb84498cca1fffcf4d10640a17eb1c648c765b5094fe0->enter($__internal_949e35e783f17b8b498cb84498cca1fffcf4d10640a17eb1c648c765b5094fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/backend/cash.css\">
";
        
        $__internal_949e35e783f17b8b498cb84498cca1fffcf4d10640a17eb1c648c765b5094fe0->leave($__internal_949e35e783f17b8b498cb84498cca1fffcf4d10640a17eb1c648c765b5094fe0_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_69975e1cafc3848f5cfb548f83291c56148934aa56c9926aeb5f27a00bf2443d = $this->env->getExtension("native_profiler");
        $__internal_69975e1cafc3848f5cfb548f83291c56148934aa56c9926aeb5f27a00bf2443d->enter($__internal_69975e1cafc3848f5cfb548f83291c56148934aa56c9926aeb5f27a00bf2443d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script>var ajax = {\"products\": \"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("ajax_products");
        echo "\"};</script>
  <script>var products = {
    \"add\": \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_add", array("id" => $this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "id", array()))), "html", null, true);
        echo "\",
    \"show\": \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cash_show", array("id" => $this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "id", array()))), "html", null, true);
        echo "\",
    \"quantity\": \"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_quantity", array("id" => $this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "id", array()))), "html", null, true);
        echo "\"
  };</script>  
  <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/moment.js/moment-with-locales.js\"></script>
  <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js\"></script>  
  <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/js/backend/cash.js\"></script>
";
        
        $__internal_69975e1cafc3848f5cfb548f83291c56148934aa56c9926aeb5f27a00bf2443d->leave($__internal_69975e1cafc3848f5cfb548f83291c56148934aa56c9926aeb5f27a00bf2443d_prof);

    }

    // line 22
    public function block_section($context, array $blocks = array())
    {
        $__internal_3327d5819945d3790c841b685f848092647dfae08b087dfa75e39d3263fe1e22 = $this->env->getExtension("native_profiler");
        $__internal_3327d5819945d3790c841b685f848092647dfae08b087dfa75e39d3263fe1e22->enter($__internal_3327d5819945d3790c841b685f848092647dfae08b087dfa75e39d3263fe1e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 23
        echo "<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
  <!-- Content Header (Page header) -->
  <section class=\"content-header\">
    <h1>
      Caja
      <small>Detalle</small>
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin");
        echo "\"><i class=\"fa fa-dashboard\"></i> Inicio</a></li>
      <li class=\"active\">Caja</li>
    </ol>
  </section>
    <div class=\"content";
        // line 36
        if ((isset($context["fullscreen"]) ? $context["fullscreen"] : $this->getContext($context, "fullscreen"))) {
            echo " fullscreen";
        }
        echo "\">
    <table>
        <tbody>
            <tr>
                <th width=\"10%\">Ticket</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th width=\"10%\">Fecha</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "datetime", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipo de pago</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "paymentType", array()), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 51
        if ($this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "ingress", array())) {
            // line 52
            echo "            <tr>
                <th>Ingreso</th>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "ingress", array()), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        // line 57
        echo "            ";
        if ($this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "egress", array())) {
            // line 58
            echo "            <tr>
                <th>Egreso</th>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "egress", array()), "html", null, true);
            echo "</td>
            </tr>          
            <tr>
                <th>Monto</th>
                <td>\$ ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "ammount", array()), "html", null, true);
            echo "</td>
            </tr>                   
            ";
        }
        // line 67
        echo "            ";
        if ($this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "provider", array())) {
            // line 68
            echo "            <tr>
                <th>Proveedor</th>
                <td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("provider_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "provider", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "provider", array()), "name", array()), "html", null, true);
            echo "</a></td>
            </tr>               
            ";
        }
        // line 73
        echo "            <tr>
                <th>Operador</th>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "vendor", array()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Comentarios</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "comments", array()), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 81
        if ($this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "ingress", array())) {
            // line 82
            echo "            <tr>
                <td colspan=\"2\"><b>Productos</b>
                    <table id=\"product-list\" border=\"0\">
                    <tr>
                        <td colspan=\"5\" align=\"right\"><span id=\"fullscreen\" class=\"glyphicon glyphicon-fullscreen\"></span></td>
                    </tr>
                    <tr>
                        <th>                
                            Nombre
                        </th>
                        <th>
                            Precio
                        </th>
                        <th>
                            Cantidad
                        </th>
                        <th>
                            Total
                        </th>     
                        <th>
                            Quitar
                        </th>       
                    </tr>                 
                    ";
            // line 105
            $context["total"] = 0;
            echo "   
                    ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 107
                echo "                        ";
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + ($this->getAttribute($context["i"], "quantity", array()) * $this->getAttribute($this->getAttribute($context["i"], "product", array()), "price", array())));
                // line 108
                echo "                        <tr>
                            <td>                
                                ";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "product", array()), "name", array()), "html", null, true);
                echo "
                            </td>
                            <td>
                                \$ ";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], "product", array()), "price", array()), "html", null, true);
                echo "
                            </td>
                            <td>
                                <input class=\"product-quantity\" type=\"number\" value=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "quantity", array()), "html", null, true);
                echo "\" onchange=\"changeItemQuantity(this, ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["i"], "id", array()), "html", null, true);
                echo ");\">
                            </td>
                            <td>
                                \$ ";
                // line 119
                echo twig_escape_filter($this->env, ($this->getAttribute($context["i"], "quantity", array()) * $this->getAttribute($this->getAttribute($context["i"], "product", array()), "price", array())), "html", null, true);
                echo "
                            </td> 
                            <td>
                                <a href=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_remove", array("id" => $this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "id", array()), "product" => $this->getAttribute($context["i"], "id", array()))), "html", null, true);
                if ((isset($context["fullscreen"]) ? $context["fullscreen"] : $this->getContext($context, "fullscreen"))) {
                    echo "?fullscreen=true";
                }
                echo "\"><span class=\"glyphicon glyphicon-trash\"></span></a>
                            </td>           
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                    <tr>
                        <th>                
                            &nbsp;
                        </th>
                        <th>
                            &nbsp;
                        </th>
                        <th>
                            &nbsp;
                        </th>
                        <th>
                            &nbsp;
                        </th>                        
                        <th>
                            Total: \$ ";
            // line 140
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "
                        </th>            
                    </tr>                      
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan=\"2\"><b>Agregar un producto</b>
                    <input class=\"form-control\" id=\"products\" type=\"text\" placeholder=\"Nombre del producto\" autofocus>
                </td>
            </tr>
            <tr>
                <td colspan=\"2\">
                    <div id=\"products_list\" class=\"hidden\"></div>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Su Pago:</b>
                </td>
                <td>                    
                    <b>Vuelto:</b>
                </td>
            </tr>
            <tr>
                <td>                    
                    <input id=\"payment\" class=\"form-control\" type=\"text\" placeholder=\"Abona con ...\"> 
                </td>
                <td>
                    <input id=\"turned\" class=\"form-control\" type=\"text\" placeholder=\"Vuelto\" data=\"";
            // line 169
            echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
            echo "\">                                       
                </td>
            </tr>
            ";
        }
        // line 173
        echo "        </tbody>
    </table>
    </div>
    <div class=\"box-footer\">
        <a class=\"btn btn-default\" href=\"";
        // line 177
        echo $this->env->getExtension('routing')->getPath("cash_index");
        echo "\"><span class=\"glyphicon glyphicon-chevron-left\"></span> Volver</a>
        <a class=\"btn btn-primary\" href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cash_edit", array("id" => $this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> Editar</a>
        <a class=\"btn btn-primary\" href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cash_print", array("id" => $this->getAttribute((isset($context["cash"]) ? $context["cash"] : $this->getContext($context, "cash")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-print\"></span> Imprimir</a>
        
        ";
        // line 181
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 182
            echo "            ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
            echo "
            <button type=\"submit\" class=\"btn btn-danger pull-right\"><span class=\"glyphicon glyphicon-trash\"></span> Eliminar</button>
            ";
            // line 184
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
            echo "
        ";
        }
        // line 186
        echo "    </div>
</div>    
";
        
        $__internal_3327d5819945d3790c841b685f848092647dfae08b087dfa75e39d3263fe1e22->leave($__internal_3327d5819945d3790c841b685f848092647dfae08b087dfa75e39d3263fe1e22_prof);

    }

    public function getTemplateName()
    {
        return "backend/cash/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 186,  380 => 184,  374 => 182,  372 => 181,  367 => 179,  363 => 178,  359 => 177,  353 => 173,  346 => 169,  314 => 140,  298 => 126,  285 => 122,  279 => 119,  271 => 116,  265 => 113,  259 => 110,  255 => 108,  252 => 107,  248 => 106,  244 => 105,  219 => 82,  217 => 81,  212 => 79,  205 => 75,  201 => 73,  193 => 70,  189 => 68,  186 => 67,  180 => 64,  173 => 60,  169 => 58,  166 => 57,  160 => 54,  156 => 52,  154 => 51,  149 => 49,  142 => 45,  135 => 41,  125 => 36,  118 => 32,  107 => 23,  101 => 22,  92 => 19,  88 => 18,  84 => 17,  79 => 15,  75 => 14,  71 => 13,  66 => 11,  61 => 10,  55 => 9,  46 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'backend/base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* {{parent()}}*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/css/backend/cash.css">*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascripts %}*/
/*   {{parent()}}*/
/*   <script>var ajax = {"products": "{{ path('ajax_products') }}"};</script>*/
/*   <script>var products = {*/
/*     "add": "{{ path('product_add', { 'id': cash.id }) }}",*/
/*     "show": "{{ path('cash_show', { 'id': cash.id }) }}",*/
/*     "quantity": "{{ path('product_quantity', { 'id': cash.id }) }}"*/
/*   };</script>  */
/*   <script src="{{ app.request.basepath }}/lib/moment.js/moment-with-locales.js"></script>*/
/*   <script src="{{ app.request.basepath }}/lib/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>  */
/*   <script src="{{ app.request.basepath }}/js/backend/cash.js"></script>*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/* <!-- Content Wrapper. Contains page content -->*/
/* <div class="content-wrapper">*/
/*   <!-- Content Header (Page header) -->*/
/*   <section class="content-header">*/
/*     <h1>*/
/*       Caja*/
/*       <small>Detalle</small>*/
/*     </h1>*/
/*     <ol class="breadcrumb">*/
/*       <li><a href="{{ path('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>*/
/*       <li class="active">Caja</li>*/
/*     </ol>*/
/*   </section>*/
/*     <div class="content{% if fullscreen %} fullscreen{% endif %}">*/
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th width="10%">Ticket</th>*/
/*                 <td>{{ cash.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th width="10%">Fecha</th>*/
/*                 <td>{{ cash.datetime | date("d/m/Y H:i:s") }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tipo de pago</th>*/
/*                 <td>{{ cash.paymentType }}</td>*/
/*             </tr>*/
/*             {% if cash.ingress %}*/
/*             <tr>*/
/*                 <th>Ingreso</th>*/
/*                 <td>{{ cash.ingress }}</td>*/
/*             </tr>*/
/*             {% endif %}*/
/*             {% if cash.egress %}*/
/*             <tr>*/
/*                 <th>Egreso</th>*/
/*                 <td>{{ cash.egress }}</td>*/
/*             </tr>          */
/*             <tr>*/
/*                 <th>Monto</th>*/
/*                 <td>$ {{ cash.ammount }}</td>*/
/*             </tr>                   */
/*             {% endif %}*/
/*             {% if cash.provider %}*/
/*             <tr>*/
/*                 <th>Proveedor</th>*/
/*                 <td><a href="{{ path('provider_show', { 'id': cash.provider.id }) }}">{{ cash.provider.name }}</a></td>*/
/*             </tr>               */
/*             {% endif %}*/
/*             <tr>*/
/*                 <th>Operador</th>*/
/*                 <td>{{ cash.vendor.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Comentarios</th>*/
/*                 <td>{{ cash.comments }}</td>*/
/*             </tr>*/
/*             {% if cash.ingress %}*/
/*             <tr>*/
/*                 <td colspan="2"><b>Productos</b>*/
/*                     <table id="product-list" border="0">*/
/*                     <tr>*/
/*                         <td colspan="5" align="right"><span id="fullscreen" class="glyphicon glyphicon-fullscreen"></span></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>                */
/*                             Nombre*/
/*                         </th>*/
/*                         <th>*/
/*                             Precio*/
/*                         </th>*/
/*                         <th>*/
/*                             Cantidad*/
/*                         </th>*/
/*                         <th>*/
/*                             Total*/
/*                         </th>     */
/*                         <th>*/
/*                             Quitar*/
/*                         </th>       */
/*                     </tr>                 */
/*                     {% set total = 0 %}   */
/*                     {% for i in cash.items %}*/
/*                         {% set total = total + (i.quantity * i.product.price) %}*/
/*                         <tr>*/
/*                             <td>                */
/*                                 {{i.product.name}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 $ {{i.product.price}}*/
/*                             </td>*/
/*                             <td>*/
/*                                 <input class="product-quantity" type="number" value="{{i.quantity}}" onchange="changeItemQuantity(this, {{i.id}});">*/
/*                             </td>*/
/*                             <td>*/
/*                                 $ {{ i.quantity * i.product.price }}*/
/*                             </td> */
/*                             <td>*/
/*                                 <a href="{{ path('product_remove', { 'id': cash.id, 'product': i.id }) }}{% if fullscreen %}?fullscreen=true{% endif %}"><span class="glyphicon glyphicon-trash"></span></a>*/
/*                             </td>           */
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     <tr>*/
/*                         <th>                */
/*                             &nbsp;*/
/*                         </th>*/
/*                         <th>*/
/*                             &nbsp;*/
/*                         </th>*/
/*                         <th>*/
/*                             &nbsp;*/
/*                         </th>*/
/*                         <th>*/
/*                             &nbsp;*/
/*                         </th>                        */
/*                         <th>*/
/*                             Total: $ {{total}}*/
/*                         </th>            */
/*                     </tr>                      */
/*                     </table>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="2"><b>Agregar un producto</b>*/
/*                     <input class="form-control" id="products" type="text" placeholder="Nombre del producto" autofocus>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td colspan="2">*/
/*                     <div id="products_list" class="hidden"></div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <b>Su Pago:</b>*/
/*                 </td>*/
/*                 <td>                    */
/*                     <b>Vuelto:</b>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>                    */
/*                     <input id="payment" class="form-control" type="text" placeholder="Abona con ..."> */
/*                 </td>*/
/*                 <td>*/
/*                     <input id="turned" class="form-control" type="text" placeholder="Vuelto" data="{{total}}">                                       */
/*                 </td>*/
/*             </tr>*/
/*             {% endif %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/*     <div class="box-footer">*/
/*         <a class="btn btn-default" href="{{ path('cash_index') }}"><span class="glyphicon glyphicon-chevron-left"></span> Volver</a>*/
/*         <a class="btn btn-primary" href="{{ path('cash_edit', { 'id': cash.id }) }}"><span class="glyphicon glyphicon-edit"></span> Editar</a>*/
/*         <a class="btn btn-primary" href="{{ path('cash_print', { 'id': cash.id }) }}" target="_blank"><span class="glyphicon glyphicon-print"></span> Imprimir</a>*/
/*         */
/*         {% if is_granted('ROLE_ADMIN') %}*/
/*             {{ form_start(delete_form) }}*/
/*             <button type="submit" class="btn btn-danger pull-right"><span class="glyphicon glyphicon-trash"></span> Eliminar</button>*/
/*             {{ form_end(delete_form) }}*/
/*         {% endif %}*/
/*     </div>*/
/* </div>    */
/* {% endblock %}*/
/* */
