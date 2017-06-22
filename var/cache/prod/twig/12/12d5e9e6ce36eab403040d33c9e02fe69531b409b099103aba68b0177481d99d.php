<?php

/* backend/table.html.twig */
class __TwigTemplate_cfb43ca4f5a691b8b4542b90fa3aabf01fc0b7df0aa068c44639793eac50d6d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("backend/base.html.twig", "backend/table.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'section' => array($this, 'block_section'),
            'classTable' => array($this, 'block_classTable'),
            'thead' => array($this, 'block_thead'),
            'tbody' => array($this, 'block_tbody'),
            'tfoot' => array($this, 'block_tfoot'),
            'new_block' => array($this, 'block_new_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "backend/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/bootstrap-datatables/dataTables.bootstrap.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/backend/DataTable.css\">
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    // line 16
    public function block_section($context, array $blocks = array())
    {
        // line 17
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"box\">
                <div class=\"box-body\">
                    <div class=\"dataTables_wrapper form-inline dt-bootstrap\">
                        <table id=\"table\" class=\"table ";
        // line 22
        $this->displayBlock('classTable', $context, $blocks);
        echo " table-bordered table-hover\">
                            <thead>
                                ";
        // line 24
        $this->displayBlock('thead', $context, $blocks);
        // line 25
        echo "                            </thead>
                            <tbody>
                                ";
        // line 27
        $this->displayBlock('tbody', $context, $blocks);
        // line 28
        echo "                            </tbody>
                            <tfoot>
                                ";
        // line 30
        $this->displayBlock('tfoot', $context, $blocks);
        // line 31
        echo "                            </tfoot>
                        </table>
                    </div>
                </div>
                ";
        // line 35
        if (array_key_exists("no_new_button", $context)) {
            // line 36
            echo "                    ";
            $this->displayBlock('new_block', $context, $blocks);
            // line 37
            echo "                ";
        } else {
            // line 38
            echo "                    <div class=\"box-body\">
                        <a class=\"btn btn-success btn-flat\" href=\"";
            // line 39
            if ($this->getAttribute((isset($context["new"]) ? $context["new"] : null), "route_options", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["new"]) ? $context["new"] : null), "route", array()), $this->getAttribute((isset($context["new"]) ? $context["new"] : null), "route_options", array())), "html", null, true);
            } else {
                echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["new"]) ? $context["new"] : null), "route", array()));
            }
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : null), "title", array()), "html", null, true);
            echo "</a>
                    </div>
                ";
        }
        // line 42
        echo "            </div>
        </div>
    </div>
";
    }

    // line 22
    public function block_classTable($context, array $blocks = array())
    {
        echo " dataTable ";
    }

    // line 24
    public function block_thead($context, array $blocks = array())
    {
    }

    // line 27
    public function block_tbody($context, array $blocks = array())
    {
    }

    // line 30
    public function block_tfoot($context, array $blocks = array())
    {
    }

    // line 36
    public function block_new_block($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "backend/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 36,  144 => 30,  139 => 27,  134 => 24,  128 => 22,  121 => 42,  109 => 39,  106 => 38,  103 => 37,  100 => 36,  98 => 35,  92 => 31,  90 => 30,  86 => 28,  84 => 27,  80 => 25,  78 => 24,  73 => 22,  66 => 17,  63 => 16,  56 => 10,  53 => 9,  47 => 6,  43 => 5,  38 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'backend/base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{parent()}}*/
/*     <link rel="stylesheet" href="{{ app.request.basepath }}/lib/bootstrap-datatables/dataTables.bootstrap.css">*/
/*     <link rel="stylesheet" href="{{ app.request.basepath }}/css/backend/DataTable.css">*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{parent()}}*/
/*     {#<script src="{{ app.request.basepath }}/js/backend/DataTable.ready.js"></script>*/
/*     <script src="{{ app.request.basepath }}/lib/bootstrap-datatables/dataTables.bootstrap.js"></script>*/
/*     <script src="{{ app.request.basepath }}/lib/bootstrap-datatables/jquery.dataTables.js"></script>#}*/
/* {% endblock %}*/
/* */
/* {% block section %}*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <div class="box">*/
/*                 <div class="box-body">*/
/*                     <div class="dataTables_wrapper form-inline dt-bootstrap">*/
/*                         <table id="table" class="table {% block classTable %} dataTable {% endblock %} table-bordered table-hover">*/
/*                             <thead>*/
/*                                 {% block thead %}{% endblock %}*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% block tbody %}{% endblock %}*/
/*                             </tbody>*/
/*                             <tfoot>*/
/*                                 {% block tfoot %}{% endblock %}*/
/*                             </tfoot>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% if no_new_button is defined %}*/
/*                     {% block new_block %}{% endblock %}*/
/*                 {% else %}*/
/*                     <div class="box-body">*/
/*                         <a class="btn btn-success btn-flat" href="{% if new.route_options is defined %}{{ path(new.route, new.route_options) }}{% else %}{{ path(new.route) }}{% endif %}"><span class="glyphicon glyphicon-plus"></span> {{ new.title }}</a>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
