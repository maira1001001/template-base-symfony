<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_9e793faeb625bc92924ab65f6f2c902b22e1a401629a63bb5b7b67c3012277ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac3478e462b3964b78e239f24d731c2230a7cd0a5aacabccee5634f35cc225dc = $this->env->getExtension("native_profiler");
        $__internal_ac3478e462b3964b78e239f24d731c2230a7cd0a5aacabccee5634f35cc225dc->enter($__internal_ac3478e462b3964b78e239f24d731c2230a7cd0a5aacabccee5634f35cc225dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac3478e462b3964b78e239f24d731c2230a7cd0a5aacabccee5634f35cc225dc->leave($__internal_ac3478e462b3964b78e239f24d731c2230a7cd0a5aacabccee5634f35cc225dc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65ee07c0973f1797df43087e0dca5aae6d76037e010bc4d37e4294dfc94987b3 = $this->env->getExtension("native_profiler");
        $__internal_65ee07c0973f1797df43087e0dca5aae6d76037e010bc4d37e4294dfc94987b3->enter($__internal_65ee07c0973f1797df43087e0dca5aae6d76037e010bc4d37e4294dfc94987b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "






\t<!-- BEGIN # MODAL LOGIN -->
\t<div class=\"modal show\" id=\"login-modal2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
    \t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\" align=\"center\">
\t\t\t\t\tFormulario de Registro
\t\t\t\t</div>
                
                <!-- Begin # DIV Form -->
                <div id=\"div-forms\">
\t\t\t\t                
\t\t\t\t    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "POST", "attr" => array("class" => "register")));
        echo "

\t\t\t\t\t\t<div class=\"form-group\"";
        // line 24
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo ">
\t\t\t\t\t\t\t<label for=\"name\" class=\"cols-sm-2 control-label\">";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "</label>
\t\t\t\t\t\t\t<div class=\"cols-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t        <div class=\"help-block with-errors\">
\t\t\t\t\t\t\t            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\"";
        // line 37
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo ">
\t\t\t\t\t\t\t<label for=\"name\" class=\"cols-sm-2 control-label\">";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "</label>
\t\t\t\t\t\t\t<div class=\"cols-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-users fa\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t\t";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t        <div class=\"help-block with-errors\">
\t\t\t\t\t\t\t            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\"";
        // line 50
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo ">
\t\t\t\t\t\t\t<label for=\"name\" class=\"cols-sm-2 control-label\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "</label>
\t\t\t\t\t\t\t<div class=\"cols-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-envelope fa\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t\t";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t        <div class=\"help-block with-errors\">
\t\t\t\t\t\t\t            ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\"";
        // line 63
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo ">
\t\t\t\t\t\t\t<label for=\"name\" class=\"cols-sm-2 control-label\">";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'label');
        echo "</label>
\t\t\t\t\t\t\t<div class=\"cols-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t\t";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t        <div class=\"help-block with-errors\">
\t\t\t\t\t\t\t            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gender", array()), 'errors');
        echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\"";
        // line 76
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avatar", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo ">
\t\t\t\t\t\t\t<label for=\"name\" class=\"cols-sm-2 control-label\">";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avatar", array()), 'label');
        echo "</label>
\t\t\t\t\t\t\t<div class=\"cols-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t\t";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avatar", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t        <div class=\"help-block with-errors\">
\t\t\t\t\t\t\t            ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "avatar", array()), 'errors');
        echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\"";
        // line 89
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo ">
\t\t\t\t\t\t\t<label for=\"name\" class=\"cols-sm-2 control-label\">";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "</label>
\t\t\t\t\t\t\t<div class=\"cols-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t\t";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t        <div class=\"help-block with-errors\">
\t\t\t\t\t\t\t            ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                               
\t\t\t\t\t\t<div class=\"form-group\"";
        // line 102
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo ">
\t\t\t\t\t\t\t<label for=\"name\" class=\"cols-sm-2 control-label\">";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "</label>
\t\t\t\t\t\t\t<div class=\"cols-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t\t";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t        <div class=\"help-block with-errors\">
\t\t\t\t\t\t\t            ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\"";
        // line 115
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo ">
\t\t\t\t\t\t\t<label for=\"name\" class=\"cols-sm-2 control-label\">";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "</label>
\t\t\t\t\t\t\t<div class=\"cols-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-lock fa-lg\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t\t";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t        <div class=\"help-block with-errors\">
\t\t\t\t\t\t\t            ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\"";
        // line 128
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo ">
\t\t\t\t\t\t\t<label for=\"name\" class=\"cols-sm-2 control-label\">";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), 'label');
        echo "</label>
\t\t\t\t\t\t\t<div class=\"cols-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-user fa\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t\t";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t        <div class=\"help-block with-errors\">
\t\t\t\t\t\t\t            ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dni", array()), 'errors');
        echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\"";
        // line 141
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone1", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo ">
\t\t\t\t\t\t\t<label for=\"name\" class=\"cols-sm-2 control-label\">";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone1", array()), 'label');
        echo "</label>
\t\t\t\t\t\t\t<div class=\"cols-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-phone\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t\t";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone1", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t        <div class=\"help-block with-errors\">
\t\t\t\t\t\t\t            ";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone1", array()), 'errors');
        echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\"";
        // line 154
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone2", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo ">
\t\t\t\t\t\t\t<label for=\"name\" class=\"cols-sm-2 control-label\">";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone2", array()), 'label');
        echo "</label>
\t\t\t\t\t\t\t<div class=\"cols-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t\t";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t        <div class=\"help-block with-errors\">
\t\t\t\t\t\t\t            ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone2", array()), 'errors');
        echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"form-group\"";
        // line 167
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adress", array()), "vars", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo ">
\t\t\t\t\t\t\t<label for=\"name\" class=\"cols-sm-2 control-label\">";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adress", array()), 'label');
        echo "</label>
\t\t\t\t\t\t\t<div class=\"cols-sm-10\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-globe\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t\t";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adress", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t        <div class=\"help-block with-errors\">
\t\t\t\t\t\t\t            ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adress", array()), 'errors');
        echo "
\t\t\t\t\t\t\t        </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t

\t\t\t\t    <div class=\"row\">
\t\t\t\t        <div class=\"col-xs-8\">
\t\t\t\t            <a href=\"";
        // line 182
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Ya tengo cuenta</a><br>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"col-xs-4\">
\t\t\t\t            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Registrarse</button>
\t\t\t\t        </div>
\t\t\t\t    </div>
\t\t\t\t    ";
        // line 188
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    
                </div>
                <!-- End # DIV Form -->
                
\t\t\t</div>
\t\t</div>
\t</div>
    <!-- END # MODAL LOGIN -->



";
        
        $__internal_65ee07c0973f1797df43087e0dca5aae6d76037e010bc4d37e4294dfc94987b3->leave($__internal_65ee07c0973f1797df43087e0dca5aae6d76037e010bc4d37e4294dfc94987b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 188,  391 => 182,  380 => 174,  375 => 172,  368 => 168,  362 => 167,  353 => 161,  348 => 159,  341 => 155,  335 => 154,  326 => 148,  321 => 146,  314 => 142,  308 => 141,  299 => 135,  294 => 133,  287 => 129,  281 => 128,  272 => 122,  267 => 120,  260 => 116,  254 => 115,  245 => 109,  240 => 107,  233 => 103,  227 => 102,  218 => 96,  213 => 94,  206 => 90,  200 => 89,  191 => 83,  186 => 81,  179 => 77,  173 => 76,  164 => 70,  159 => 68,  152 => 64,  146 => 63,  137 => 57,  132 => 55,  125 => 51,  119 => 50,  110 => 44,  105 => 42,  98 => 38,  92 => 37,  83 => 31,  78 => 29,  71 => 25,  65 => 24,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* 	<!-- BEGIN # MODAL LOGIN -->*/
/* 	<div class="modal show" id="login-modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">*/
/*     	<div class="modal-dialog">*/
/* 			<div class="modal-content">*/
/* 				<div class="modal-header" align="center">*/
/* 					Formulario de Registro*/
/* 				</div>*/
/*                 */
/*                 <!-- Begin # DIV Form -->*/
/*                 <div id="div-forms">*/
/* 				                */
/* 				    {{form_start(form, {'method': 'POST', 'attr':{'class': 'register'}})}}*/
/* */
/* 						<div class="form-group"{% if form.name.vars.errors|length > 0 %} has-error{% endif %}>*/
/* 							<label for="name" class="cols-sm-2 control-label">{{ form_label(form.name) }}</label>*/
/* 							<div class="cols-sm-10">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>*/
/* 									{{ form_widget(form.name, { 'attr': {'class': 'form-control'} }) }}*/
/* 							        <div class="help-block with-errors">*/
/* 							            {{ form_errors(form.name) }}*/
/* 							        </div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="form-group"{% if form.lastname.vars.errors|length > 0 %} has-error{% endif %}>*/
/* 							<label for="name" class="cols-sm-2 control-label">{{ form_label(form.lastname) }}</label>*/
/* 							<div class="cols-sm-10">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>*/
/* 									{{ form_widget(form.lastname, { 'attr': {'class': 'form-control'} }) }}*/
/* 							        <div class="help-block with-errors">*/
/* 							            {{ form_errors(form.lastname) }}*/
/* 							        </div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="form-group"{% if form.email.vars.errors|length > 0 %} has-error{% endif %}>*/
/* 							<label for="name" class="cols-sm-2 control-label">{{ form_label(form.email) }}</label>*/
/* 							<div class="cols-sm-10">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>*/
/* 									{{ form_widget(form.email, { 'attr': {'class': 'form-control'} }) }}*/
/* 							        <div class="help-block with-errors">*/
/* 							            {{ form_errors(form.email) }}*/
/* 							        </div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="form-group"{% if form.gender.vars.errors|length > 0 %} has-error{% endif %}>*/
/* 							<label for="name" class="cols-sm-2 control-label">{{ form_label(form.gender) }}</label>*/
/* 							<div class="cols-sm-10">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>*/
/* 									{{ form_widget(form.gender, { 'attr': {'class': 'form-control'} }) }}*/
/* 							        <div class="help-block with-errors">*/
/* 							            {{ form_errors(form.gender) }}*/
/* 							        </div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="form-group"{% if form.avatar.vars.errors|length > 0 %} has-error{% endif %}>*/
/* 							<label for="name" class="cols-sm-2 control-label">{{ form_label(form.avatar) }}</label>*/
/* 							<div class="cols-sm-10">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>*/
/* 									{{ form_widget(form.avatar, { 'attr': {'class': 'form-control'} }) }}*/
/* 							        <div class="help-block with-errors">*/
/* 							            {{ form_errors(form.avatar) }}*/
/* 							        </div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="form-group"{% if form.username.vars.errors|length > 0 %} has-error{% endif %}>*/
/* 							<label for="name" class="cols-sm-2 control-label">{{ form_label(form.username) }}</label>*/
/* 							<div class="cols-sm-10">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>*/
/* 									{{ form_widget(form.username, { 'attr': {'class': 'form-control'} }) }}*/
/* 							        <div class="help-block with-errors">*/
/* 							            {{ form_errors(form.username) }}*/
/* 							        </div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/*                                */
/* 						<div class="form-group"{% if form.plainPassword.first.vars.errors|length > 0 %} has-error{% endif %}>*/
/* 							<label for="name" class="cols-sm-2 control-label">{{ form_label(form.plainPassword.first) }}</label>*/
/* 							<div class="cols-sm-10">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>*/
/* 									{{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control'} }) }}*/
/* 							        <div class="help-block with-errors">*/
/* 							            {{ form_errors(form.plainPassword.first) }}*/
/* 							        </div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="form-group"{% if form.plainPassword.second.vars.errors|length > 0 %} has-error{% endif %}>*/
/* 							<label for="name" class="cols-sm-2 control-label">{{ form_label(form.plainPassword.second) }}</label>*/
/* 							<div class="cols-sm-10">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>*/
/* 									{{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control'} }) }}*/
/* 							        <div class="help-block with-errors">*/
/* 							            {{ form_errors(form.plainPassword.second) }}*/
/* 							        </div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="form-group"{% if form.dni.vars.errors|length > 0 %} has-error{% endif %}>*/
/* 							<label for="name" class="cols-sm-2 control-label">{{ form_label(form.dni) }}</label>*/
/* 							<div class="cols-sm-10">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>*/
/* 									{{ form_widget(form.dni, { 'attr': {'class': 'form-control'} }) }}*/
/* 							        <div class="help-block with-errors">*/
/* 							            {{ form_errors(form.dni) }}*/
/* 							        </div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="form-group"{% if form.phone1.vars.errors|length > 0 %} has-error{% endif %}>*/
/* 							<label for="name" class="cols-sm-2 control-label">{{ form_label(form.phone1) }}</label>*/
/* 							<div class="cols-sm-10">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon"><i class="glyphicon glyphicon-phone" aria-hidden="true"></i></span>*/
/* 									{{ form_widget(form.phone1, { 'attr': {'class': 'form-control'} }) }}*/
/* 							        <div class="help-block with-errors">*/
/* 							            {{ form_errors(form.phone1) }}*/
/* 							        </div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="form-group"{% if form.phone2.vars.errors|length > 0 %} has-error{% endif %}>*/
/* 							<label for="name" class="cols-sm-2 control-label">{{ form_label(form.phone2) }}</label>*/
/* 							<div class="cols-sm-10">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></span>*/
/* 									{{ form_widget(form.phone2, { 'attr': {'class': 'form-control'} }) }}*/
/* 							        <div class="help-block with-errors">*/
/* 							            {{ form_errors(form.phone2) }}*/
/* 							        </div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="form-group"{% if form.adress.vars.errors|length > 0 %} has-error{% endif %}>*/
/* 							<label for="name" class="cols-sm-2 control-label">{{ form_label(form.adress) }}</label>*/
/* 							<div class="cols-sm-10">*/
/* 								<div class="input-group">*/
/* 									<span class="input-group-addon"><i class="glyphicon glyphicon-globe" aria-hidden="true"></i></span>*/
/* 									{{ form_widget(form.adress, { 'attr': {'class': 'form-control'} }) }}*/
/* 							        <div class="help-block with-errors">*/
/* 							            {{ form_errors(form.adress) }}*/
/* 							        </div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>						*/
/* */
/* 				    <div class="row">*/
/* 				        <div class="col-xs-8">*/
/* 				            <a href="{{ path('fos_user_security_login') }}">Ya tengo cuenta</a><br>*/
/* 				        </div>*/
/* 				        <div class="col-xs-4">*/
/* 				            <button type="submit" class="btn btn-primary btn-block btn-flat">Registrarse</button>*/
/* 				        </div>*/
/* 				    </div>*/
/* 				    {{ form_end(form) }}*/
/*                     */
/*                 </div>*/
/*                 <!-- End # DIV Form -->*/
/*                 */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/*     <!-- END # MODAL LOGIN -->*/
/* */
/* */
/* */
/* {% endblock body %}*/
/* */
