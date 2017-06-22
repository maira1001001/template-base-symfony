<?php

/* backend/table.html.twig */
class __TwigTemplate_2449c83d66abcb9993698094b4ad951934c3db316b620bac979dd4e4f5b506e9 extends Twig_Template
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
        $__internal_5a2d882e7b11672170cba029035731e98455b5c529e2ea80fd930cb1faabc127 = $this->env->getExtension("native_profiler");
        $__internal_5a2d882e7b11672170cba029035731e98455b5c529e2ea80fd930cb1faabc127->enter($__internal_5a2d882e7b11672170cba029035731e98455b5c529e2ea80fd930cb1faabc127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/table.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a2d882e7b11672170cba029035731e98455b5c529e2ea80fd930cb1faabc127->leave($__internal_5a2d882e7b11672170cba029035731e98455b5c529e2ea80fd930cb1faabc127_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_01ef90f3e99bf29cb49fa0dcd59a119c601e5d64202cd33c03ef1e6cdf46a6f3 = $this->env->getExtension("native_profiler");
        $__internal_01ef90f3e99bf29cb49fa0dcd59a119c601e5d64202cd33c03ef1e6cdf46a6f3->enter($__internal_01ef90f3e99bf29cb49fa0dcd59a119c601e5d64202cd33c03ef1e6cdf46a6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/lib/bootstrap-datatables/dataTables.bootstrap.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/backend/DataTable.css\">
";
        
        $__internal_01ef90f3e99bf29cb49fa0dcd59a119c601e5d64202cd33c03ef1e6cdf46a6f3->leave($__internal_01ef90f3e99bf29cb49fa0dcd59a119c601e5d64202cd33c03ef1e6cdf46a6f3_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63d18c15d6a23484663b7a003bed0b503878f87fec0bcf042dfe665cde91b93e = $this->env->getExtension("native_profiler");
        $__internal_63d18c15d6a23484663b7a003bed0b503878f87fec0bcf042dfe665cde91b93e->enter($__internal_63d18c15d6a23484663b7a003bed0b503878f87fec0bcf042dfe665cde91b93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        
        $__internal_63d18c15d6a23484663b7a003bed0b503878f87fec0bcf042dfe665cde91b93e->leave($__internal_63d18c15d6a23484663b7a003bed0b503878f87fec0bcf042dfe665cde91b93e_prof);

    }

    // line 16
    public function block_section($context, array $blocks = array())
    {
        $__internal_efe4cd648406bf4d066c1f9c6829f8e91fa81857eec1288bbec46ffa792efed8 = $this->env->getExtension("native_profiler");
        $__internal_efe4cd648406bf4d066c1f9c6829f8e91fa81857eec1288bbec46ffa792efed8->enter($__internal_efe4cd648406bf4d066c1f9c6829f8e91fa81857eec1288bbec46ffa792efed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

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
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "route", array()), $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "route_options", array())), "html", null, true);
            } else {
                echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "route", array()));
            }
            echo "\"><span class=\"glyphicon glyphicon-plus\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "title", array()), "html", null, true);
            echo "</a>
                    </div>
                ";
        }
        // line 42
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_efe4cd648406bf4d066c1f9c6829f8e91fa81857eec1288bbec46ffa792efed8->leave($__internal_efe4cd648406bf4d066c1f9c6829f8e91fa81857eec1288bbec46ffa792efed8_prof);

    }

    // line 22
    public function block_classTable($context, array $blocks = array())
    {
        $__internal_75127b8a1e0e8433f98eb76fd1bdc642a24e0b5bba705f4e58c4bee3a38f031f = $this->env->getExtension("native_profiler");
        $__internal_75127b8a1e0e8433f98eb76fd1bdc642a24e0b5bba705f4e58c4bee3a38f031f->enter($__internal_75127b8a1e0e8433f98eb76fd1bdc642a24e0b5bba705f4e58c4bee3a38f031f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classTable"));

        echo " dataTable ";
        
        $__internal_75127b8a1e0e8433f98eb76fd1bdc642a24e0b5bba705f4e58c4bee3a38f031f->leave($__internal_75127b8a1e0e8433f98eb76fd1bdc642a24e0b5bba705f4e58c4bee3a38f031f_prof);

    }

    // line 24
    public function block_thead($context, array $blocks = array())
    {
        $__internal_eb9cdc79ec385b20b0751398323b0d666dbfcd301f72ec6ad1bcaeb09f19e57f = $this->env->getExtension("native_profiler");
        $__internal_eb9cdc79ec385b20b0751398323b0d666dbfcd301f72ec6ad1bcaeb09f19e57f->enter($__internal_eb9cdc79ec385b20b0751398323b0d666dbfcd301f72ec6ad1bcaeb09f19e57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "thead"));

        
        $__internal_eb9cdc79ec385b20b0751398323b0d666dbfcd301f72ec6ad1bcaeb09f19e57f->leave($__internal_eb9cdc79ec385b20b0751398323b0d666dbfcd301f72ec6ad1bcaeb09f19e57f_prof);

    }

    // line 27
    public function block_tbody($context, array $blocks = array())
    {
        $__internal_c28f485660161a369aee8d85341ff154e5378059044b6897cd1f3f4c1cc2cd74 = $this->env->getExtension("native_profiler");
        $__internal_c28f485660161a369aee8d85341ff154e5378059044b6897cd1f3f4c1cc2cd74->enter($__internal_c28f485660161a369aee8d85341ff154e5378059044b6897cd1f3f4c1cc2cd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbody"));

        
        $__internal_c28f485660161a369aee8d85341ff154e5378059044b6897cd1f3f4c1cc2cd74->leave($__internal_c28f485660161a369aee8d85341ff154e5378059044b6897cd1f3f4c1cc2cd74_prof);

    }

    // line 30
    public function block_tfoot($context, array $blocks = array())
    {
        $__internal_10d3f88163dc4d8f45da9b1e67a2c4510bc340bb829e954e9abbaaf1801d75d9 = $this->env->getExtension("native_profiler");
        $__internal_10d3f88163dc4d8f45da9b1e67a2c4510bc340bb829e954e9abbaaf1801d75d9->enter($__internal_10d3f88163dc4d8f45da9b1e67a2c4510bc340bb829e954e9abbaaf1801d75d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tfoot"));

        
        $__internal_10d3f88163dc4d8f45da9b1e67a2c4510bc340bb829e954e9abbaaf1801d75d9->leave($__internal_10d3f88163dc4d8f45da9b1e67a2c4510bc340bb829e954e9abbaaf1801d75d9_prof);

    }

    // line 36
    public function block_new_block($context, array $blocks = array())
    {
        $__internal_0eea2f7b0b7310ff135601d79cc19c5479eb2eae21d119d6571a014c8ef7a468 = $this->env->getExtension("native_profiler");
        $__internal_0eea2f7b0b7310ff135601d79cc19c5479eb2eae21d119d6571a014c8ef7a468->enter($__internal_0eea2f7b0b7310ff135601d79cc19c5479eb2eae21d119d6571a014c8ef7a468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_block"));

        
        $__internal_0eea2f7b0b7310ff135601d79cc19c5479eb2eae21d119d6571a014c8ef7a468->leave($__internal_0eea2f7b0b7310ff135601d79cc19c5479eb2eae21d119d6571a014c8ef7a468_prof);

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
        return array (  197 => 36,  186 => 30,  175 => 27,  164 => 24,  152 => 22,  142 => 42,  130 => 39,  127 => 38,  124 => 37,  121 => 36,  119 => 35,  113 => 31,  111 => 30,  107 => 28,  105 => 27,  101 => 25,  99 => 24,  94 => 22,  87 => 17,  81 => 16,  71 => 10,  65 => 9,  56 => 6,  52 => 5,  47 => 4,  41 => 3,  11 => 1,);
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
