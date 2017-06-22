<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d57260d45f8b78f2ffb36d6efe8c24a1380d7be3d51c822d7084d3c9bc608267 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ccec8890b1b62086444aee1ad41d4fb76f65059d22b5e596d2a9979258506a2 = $this->env->getExtension("native_profiler");
        $__internal_9ccec8890b1b62086444aee1ad41d4fb76f65059d22b5e596d2a9979258506a2->enter($__internal_9ccec8890b1b62086444aee1ad41d4fb76f65059d22b5e596d2a9979258506a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ccec8890b1b62086444aee1ad41d4fb76f65059d22b5e596d2a9979258506a2->leave($__internal_9ccec8890b1b62086444aee1ad41d4fb76f65059d22b5e596d2a9979258506a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3222bb9d3e40b79c2bfb55c01c2350cb2a55c266fda169600aa312660eaf0729 = $this->env->getExtension("native_profiler");
        $__internal_3222bb9d3e40b79c2bfb55c01c2350cb2a55c266fda169600aa312660eaf0729->enter($__internal_3222bb9d3e40b79c2bfb55c01c2350cb2a55c266fda169600aa312660eaf0729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3222bb9d3e40b79c2bfb55c01c2350cb2a55c266fda169600aa312660eaf0729->leave($__internal_3222bb9d3e40b79c2bfb55c01c2350cb2a55c266fda169600aa312660eaf0729_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_de3131c3344415b4c24c5730a701a784c813c48ae96b316cebe704082212f552 = $this->env->getExtension("native_profiler");
        $__internal_de3131c3344415b4c24c5730a701a784c813c48ae96b316cebe704082212f552->enter($__internal_de3131c3344415b4c24c5730a701a784c813c48ae96b316cebe704082212f552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_de3131c3344415b4c24c5730a701a784c813c48ae96b316cebe704082212f552->leave($__internal_de3131c3344415b4c24c5730a701a784c813c48ae96b316cebe704082212f552_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ce00b690d9f50be2b0b78cb42302b76b8346b2deaf1633409a0e3c91bcae550 = $this->env->getExtension("native_profiler");
        $__internal_2ce00b690d9f50be2b0b78cb42302b76b8346b2deaf1633409a0e3c91bcae550->enter($__internal_2ce00b690d9f50be2b0b78cb42302b76b8346b2deaf1633409a0e3c91bcae550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2ce00b690d9f50be2b0b78cb42302b76b8346b2deaf1633409a0e3c91bcae550->leave($__internal_2ce00b690d9f50be2b0b78cb42302b76b8346b2deaf1633409a0e3c91bcae550_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
