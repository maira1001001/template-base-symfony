<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_b039621b652af090952e8d2c6f8a473bc18e0c20f6d2e44c2edc445faddc6857 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_2d1ccfb505d62abd18c4b97954539ba085d1965e6f0783c46549278d5bc74b53 = $this->env->getExtension("native_profiler");
        $__internal_2d1ccfb505d62abd18c4b97954539ba085d1965e6f0783c46549278d5bc74b53->enter($__internal_2d1ccfb505d62abd18c4b97954539ba085d1965e6f0783c46549278d5bc74b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d1ccfb505d62abd18c4b97954539ba085d1965e6f0783c46549278d5bc74b53->leave($__internal_2d1ccfb505d62abd18c4b97954539ba085d1965e6f0783c46549278d5bc74b53_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_08df7c785ed866e13f04750b2611470e13389671d842947631502e8715744e2b = $this->env->getExtension("native_profiler");
        $__internal_08df7c785ed866e13f04750b2611470e13389671d842947631502e8715744e2b->enter($__internal_08df7c785ed866e13f04750b2611470e13389671d842947631502e8715744e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t<!-- BEGIN # MODAL LOGIN -->
\t<div class=\"modal show\" id=\"login-modal1\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\" style=\"display: none;\">
    \t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\" align=\"center\">
\t\t\t\t\tFormulario de autenticacion
\t\t\t\t</div>
                
                <!-- Begin # DIV Form -->
                <div id=\"div-forms\">
\t\t\t\t                
\t\t\t\t    <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" >        
\t\t\t\t        <div class=\"form-group has-feedback\">
\t\t\t\t            <input type=\"text\" class=\"form-control\" placeholder=\"Nombre de usuario\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t            <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
\t\t\t\t        </div>
\t\t\t\t        
\t\t\t\t        <div class=\"form-group has-feedback\">
\t\t\t\t            <input type=\"password\" class=\"form-control\" placeholder=\"Contraseña\" name=\"_password\" required=\"required\" />
\t\t\t\t            <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
\t\t\t\t        </div>
\t\t\t\t        
\t\t\t\t        <div class=\"row\">
\t\t\t\t            <div class=\"col-xs-8\">
\t\t\t\t                <div class=\"checkbox icheck\">
\t\t\t\t                    <label>
\t\t\t\t                        <input id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\"> Recordame
\t\t\t\t                    </label>
\t\t\t\t                </div>
\t\t\t\t            </div>
\t\t\t\t            
\t\t\t\t            <div class=\"col-xs-4\">
\t\t\t\t                <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\" name=\"_submit\">Ingresar</button>
\t\t\t\t            </div>
\t\t\t\t        </div>
\t\t\t\t        
\t\t\t\t        <div class=\"row\">
\t\t\t\t            <div class=\"col-xs-12\">
\t\t\t\t                ";
        // line 45
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 46
            echo "\t\t\t\t                    <div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t                        <span class=\"glyphicon glyphicon-e  xclamation-sign\" aria-hidden=\"true\"></span>
\t\t\t\t                        <span class=\"sr-only\">Error:</span>
\t\t\t\t                        Usuario y/o contraseña incorrectos
\t\t\t\t                    </div>
\t\t\t\t                ";
        }
        // line 52
        echo "\t\t\t\t            </div>
\t\t\t\t        </div>
\t\t\t\t        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t\t\t\t    </form>
\t\t\t\t    
\t\t\t\t    <div class=\"row\">
\t\t\t\t        <div class=\"col-xs-6\">
\t\t\t\t            <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Olvidé mi contraseña</a><br>
\t\t\t\t        </div>
\t\t\t\t        <div class=\"col-xs-6 text-right\">
\t\t\t\t            <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" >No tengo cuenta</a><br>
\t\t\t\t        </div>
\t\t\t\t    </div>
                    
                </div>
                <!-- End # DIV Form -->
                
\t\t\t</div>
\t\t</div>
\t</div>
    <!-- END # MODAL LOGIN -->

";
        
        $__internal_08df7c785ed866e13f04750b2611470e13389671d842947631502e8715744e2b->leave($__internal_08df7c785ed866e13f04750b2611470e13389671d842947631502e8715744e2b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 62,  109 => 59,  101 => 54,  97 => 52,  89 => 46,  87 => 45,  59 => 20,  54 => 18,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/* */
/* 	<!-- BEGIN # MODAL LOGIN -->*/
/* 	<div class="modal show" id="login-modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">*/
/*     	<div class="modal-dialog">*/
/* 			<div class="modal-content">*/
/* 				<div class="modal-header" align="center">*/
/* 					Formulario de autenticacion*/
/* 				</div>*/
/*                 */
/*                 <!-- Begin # DIV Form -->*/
/*                 <div id="div-forms">*/
/* 				                */
/* 				    <form action="{{ path("fos_user_security_check") }}" method="post" >        */
/* 				        <div class="form-group has-feedback">*/
/* 				            <input type="text" class="form-control" placeholder="Nombre de usuario" name="_username" value="{{ last_username }}" required="required" />*/
/* 				            <span class="glyphicon glyphicon-user form-control-feedback"></span>*/
/* 				        </div>*/
/* 				        */
/* 				        <div class="form-group has-feedback">*/
/* 				            <input type="password" class="form-control" placeholder="Contraseña" name="_password" required="required" />*/
/* 				            <span class="glyphicon glyphicon-lock form-control-feedback"></span>*/
/* 				        </div>*/
/* 				        */
/* 				        <div class="row">*/
/* 				            <div class="col-xs-8">*/
/* 				                <div class="checkbox icheck">*/
/* 				                    <label>*/
/* 				                        <input id="remember_me" name="_remember_me" type="checkbox"> Recordame*/
/* 				                    </label>*/
/* 				                </div>*/
/* 				            </div>*/
/* 				            */
/* 				            <div class="col-xs-4">*/
/* 				                <button type="submit" class="btn btn-primary btn-block btn-flat" name="_submit">Ingresar</button>*/
/* 				            </div>*/
/* 				        </div>*/
/* 				        */
/* 				        <div class="row">*/
/* 				            <div class="col-xs-12">*/
/* 				                {% if error %}*/
/* 				                    <div class="alert alert-danger" role="alert">*/
/* 				                        <span class="glyphicon glyphicon-e  xclamation-sign" aria-hidden="true"></span>*/
/* 				                        <span class="sr-only">Error:</span>*/
/* 				                        Usuario y/o contraseña incorrectos*/
/* 				                    </div>*/
/* 				                {% endif %}*/
/* 				            </div>*/
/* 				        </div>*/
/* 				        <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* 				    </form>*/
/* 				    */
/* 				    <div class="row">*/
/* 				        <div class="col-xs-6">*/
/* 				            <a href="{{ path('fos_user_resetting_request') }}">Olvidé mi contraseña</a><br>*/
/* 				        </div>*/
/* 				        <div class="col-xs-6 text-right">*/
/* 				            <a href="{{ path('fos_user_registration_register') }}" >No tengo cuenta</a><br>*/
/* 				        </div>*/
/* 				    </div>*/
/*                     */
/*                 </div>*/
/*                 <!-- End # DIV Form -->*/
/*                 */
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/*     <!-- END # MODAL LOGIN -->*/
/* */
/* {% endblock body %}*/
/* */
