<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c7faac0ca35e30493cff05026c423a8e6c0024f533302d7c133b550a1c409d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cba2c7589bc61dca0b64329897f902c3a0fc696dde705b44526af53186213208 = $this->env->getExtension("native_profiler");
        $__internal_cba2c7589bc61dca0b64329897f902c3a0fc696dde705b44526af53186213208->enter($__internal_cba2c7589bc61dca0b64329897f902c3a0fc696dde705b44526af53186213208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cba2c7589bc61dca0b64329897f902c3a0fc696dde705b44526af53186213208->leave($__internal_cba2c7589bc61dca0b64329897f902c3a0fc696dde705b44526af53186213208_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_98e073432ecc161e4964eeca63db75ab094be5513d41c03675a0ae9a92dd70cc = $this->env->getExtension("native_profiler");
        $__internal_98e073432ecc161e4964eeca63db75ab094be5513d41c03675a0ae9a92dd70cc->enter($__internal_98e073432ecc161e4964eeca63db75ab094be5513d41c03675a0ae9a92dd70cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_98e073432ecc161e4964eeca63db75ab094be5513d41c03675a0ae9a92dd70cc->leave($__internal_98e073432ecc161e4964eeca63db75ab094be5513d41c03675a0ae9a92dd70cc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c3033929fef91e16db80533783976610345cdc4e9c11f16387612e79f20daa3 = $this->env->getExtension("native_profiler");
        $__internal_1c3033929fef91e16db80533783976610345cdc4e9c11f16387612e79f20daa3->enter($__internal_1c3033929fef91e16db80533783976610345cdc4e9c11f16387612e79f20daa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1c3033929fef91e16db80533783976610345cdc4e9c11f16387612e79f20daa3->leave($__internal_1c3033929fef91e16db80533783976610345cdc4e9c11f16387612e79f20daa3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_28916e513ac382aa5a4c102fad4f513f59f4fe8d3a9dafe7055a15eebf9cfbc5 = $this->env->getExtension("native_profiler");
        $__internal_28916e513ac382aa5a4c102fad4f513f59f4fe8d3a9dafe7055a15eebf9cfbc5->enter($__internal_28916e513ac382aa5a4c102fad4f513f59f4fe8d3a9dafe7055a15eebf9cfbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_28916e513ac382aa5a4c102fad4f513f59f4fe8d3a9dafe7055a15eebf9cfbc5->leave($__internal_28916e513ac382aa5a4c102fad4f513f59f4fe8d3a9dafe7055a15eebf9cfbc5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
