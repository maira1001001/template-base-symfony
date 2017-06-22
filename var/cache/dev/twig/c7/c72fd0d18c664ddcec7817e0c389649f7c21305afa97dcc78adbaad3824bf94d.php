<?php

/* backend/table.html.twig */
class __TwigTemplate_034a405986268705ad10528f543e78f2cf19e55b793f6519ef588b9aeddab4fb extends Twig_Template
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
        $__internal_1ddbeb7da3aaf2b9eb2577513427939cc6f8f34d6f3939209449ce6961513f1b = $this->env->getExtension("native_profiler");
        $__internal_1ddbeb7da3aaf2b9eb2577513427939cc6f8f34d6f3939209449ce6961513f1b->enter($__internal_1ddbeb7da3aaf2b9eb2577513427939cc6f8f34d6f3939209449ce6961513f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/table.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ddbeb7da3aaf2b9eb2577513427939cc6f8f34d6f3939209449ce6961513f1b->leave($__internal_1ddbeb7da3aaf2b9eb2577513427939cc6f8f34d6f3939209449ce6961513f1b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4f76df9138918ef30723ca76e3f56d2006cf9a6f36961157f0e6b775a6dfdca = $this->env->getExtension("native_profiler");
        $__internal_c4f76df9138918ef30723ca76e3f56d2006cf9a6f36961157f0e6b775a6dfdca->enter($__internal_c4f76df9138918ef30723ca76e3f56d2006cf9a6f36961157f0e6b775a6dfdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c4f76df9138918ef30723ca76e3f56d2006cf9a6f36961157f0e6b775a6dfdca->leave($__internal_c4f76df9138918ef30723ca76e3f56d2006cf9a6f36961157f0e6b775a6dfdca_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_156559a6849f052f1ff475d18e2d218c4931ad65421d3dd877e0dd0cf769f668 = $this->env->getExtension("native_profiler");
        $__internal_156559a6849f052f1ff475d18e2d218c4931ad65421d3dd877e0dd0cf769f668->enter($__internal_156559a6849f052f1ff475d18e2d218c4931ad65421d3dd877e0dd0cf769f668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        
        $__internal_156559a6849f052f1ff475d18e2d218c4931ad65421d3dd877e0dd0cf769f668->leave($__internal_156559a6849f052f1ff475d18e2d218c4931ad65421d3dd877e0dd0cf769f668_prof);

    }

    // line 16
    public function block_section($context, array $blocks = array())
    {
        $__internal_803a7bb70ad32fdf79fe46ce3c9b12b81bcfa2609db286df0c0987193aaf434d = $this->env->getExtension("native_profiler");
        $__internal_803a7bb70ad32fdf79fe46ce3c9b12b81bcfa2609db286df0c0987193aaf434d->enter($__internal_803a7bb70ad32fdf79fe46ce3c9b12b81bcfa2609db286df0c0987193aaf434d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

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
        
        $__internal_803a7bb70ad32fdf79fe46ce3c9b12b81bcfa2609db286df0c0987193aaf434d->leave($__internal_803a7bb70ad32fdf79fe46ce3c9b12b81bcfa2609db286df0c0987193aaf434d_prof);

    }

    // line 22
    public function block_classTable($context, array $blocks = array())
    {
        $__internal_210c1475fac6d6f53fbc0cf1aa7dc3815b9c6634222aadfc1e574c1eeb9e9de4 = $this->env->getExtension("native_profiler");
        $__internal_210c1475fac6d6f53fbc0cf1aa7dc3815b9c6634222aadfc1e574c1eeb9e9de4->enter($__internal_210c1475fac6d6f53fbc0cf1aa7dc3815b9c6634222aadfc1e574c1eeb9e9de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classTable"));

        echo " dataTable ";
        
        $__internal_210c1475fac6d6f53fbc0cf1aa7dc3815b9c6634222aadfc1e574c1eeb9e9de4->leave($__internal_210c1475fac6d6f53fbc0cf1aa7dc3815b9c6634222aadfc1e574c1eeb9e9de4_prof);

    }

    // line 24
    public function block_thead($context, array $blocks = array())
    {
        $__internal_8eba230e2914da704a87b144cc790d934c15489736f63831006f745d75e3d5e8 = $this->env->getExtension("native_profiler");
        $__internal_8eba230e2914da704a87b144cc790d934c15489736f63831006f745d75e3d5e8->enter($__internal_8eba230e2914da704a87b144cc790d934c15489736f63831006f745d75e3d5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "thead"));

        
        $__internal_8eba230e2914da704a87b144cc790d934c15489736f63831006f745d75e3d5e8->leave($__internal_8eba230e2914da704a87b144cc790d934c15489736f63831006f745d75e3d5e8_prof);

    }

    // line 27
    public function block_tbody($context, array $blocks = array())
    {
        $__internal_7516f3764b971f108f737d949b283892fd3a8b9b625eb1072c8b490f9c2e4522 = $this->env->getExtension("native_profiler");
        $__internal_7516f3764b971f108f737d949b283892fd3a8b9b625eb1072c8b490f9c2e4522->enter($__internal_7516f3764b971f108f737d949b283892fd3a8b9b625eb1072c8b490f9c2e4522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tbody"));

        
        $__internal_7516f3764b971f108f737d949b283892fd3a8b9b625eb1072c8b490f9c2e4522->leave($__internal_7516f3764b971f108f737d949b283892fd3a8b9b625eb1072c8b490f9c2e4522_prof);

    }

    // line 30
    public function block_tfoot($context, array $blocks = array())
    {
        $__internal_b9c93781e6849d9774701fd67d5e9daad3422d3cc61a51a23c92e34506bf701f = $this->env->getExtension("native_profiler");
        $__internal_b9c93781e6849d9774701fd67d5e9daad3422d3cc61a51a23c92e34506bf701f->enter($__internal_b9c93781e6849d9774701fd67d5e9daad3422d3cc61a51a23c92e34506bf701f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tfoot"));

        
        $__internal_b9c93781e6849d9774701fd67d5e9daad3422d3cc61a51a23c92e34506bf701f->leave($__internal_b9c93781e6849d9774701fd67d5e9daad3422d3cc61a51a23c92e34506bf701f_prof);

    }

    // line 36
    public function block_new_block($context, array $blocks = array())
    {
        $__internal_705ff7a3c0ac308696a5d7129a1eb83f2f389431319a1cab519f4152237649df = $this->env->getExtension("native_profiler");
        $__internal_705ff7a3c0ac308696a5d7129a1eb83f2f389431319a1cab519f4152237649df->enter($__internal_705ff7a3c0ac308696a5d7129a1eb83f2f389431319a1cab519f4152237649df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_block"));

        
        $__internal_705ff7a3c0ac308696a5d7129a1eb83f2f389431319a1cab519f4152237649df->leave($__internal_705ff7a3c0ac308696a5d7129a1eb83f2f389431319a1cab519f4152237649df_prof);

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
