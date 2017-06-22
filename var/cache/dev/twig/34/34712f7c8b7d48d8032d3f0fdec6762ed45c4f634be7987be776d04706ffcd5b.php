<?php

/* base.html.twig */
class __TwigTemplate_5ec11c7798a4b534a71fa67cdbe563fa28364ccead65208e3fb5b7a8deab4d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0521efcb98be861801f8514ef77d8301350ae2aeb4d3e0f01e7477495907bb2e = $this->env->getExtension("native_profiler");
        $__internal_0521efcb98be861801f8514ef77d8301350ae2aeb4d3e0f01e7477495907bb2e->enter($__internal_0521efcb98be861801f8514ef77d8301350ae2aeb4d3e0f01e7477495907bb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0521efcb98be861801f8514ef77d8301350ae2aeb4d3e0f01e7477495907bb2e->leave($__internal_0521efcb98be861801f8514ef77d8301350ae2aeb4d3e0f01e7477495907bb2e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c4e4e6fce2ba65a17ce1702692438aae9f3ad10bbbd9e7c8284c37f29be8d7e = $this->env->getExtension("native_profiler");
        $__internal_3c4e4e6fce2ba65a17ce1702692438aae9f3ad10bbbd9e7c8284c37f29be8d7e->enter($__internal_3c4e4e6fce2ba65a17ce1702692438aae9f3ad10bbbd9e7c8284c37f29be8d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["generals_helper"]) ? $context["generals_helper"] : $this->getContext($context, "generals_helper")), "name", array()), "html", null, true);
        
        $__internal_3c4e4e6fce2ba65a17ce1702692438aae9f3ad10bbbd9e7c8284c37f29be8d7e->leave($__internal_3c4e4e6fce2ba65a17ce1702692438aae9f3ad10bbbd9e7c8284c37f29be8d7e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a676d615ff2183dbb3db376b7b69c00c2a0d05e1e24baac605c56eb9a44573b = $this->env->getExtension("native_profiler");
        $__internal_1a676d615ff2183dbb3db376b7b69c00c2a0d05e1e24baac605c56eb9a44573b->enter($__internal_1a676d615ff2183dbb3db376b7b69c00c2a0d05e1e24baac605c56eb9a44573b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1a676d615ff2183dbb3db376b7b69c00c2a0d05e1e24baac605c56eb9a44573b->leave($__internal_1a676d615ff2183dbb3db376b7b69c00c2a0d05e1e24baac605c56eb9a44573b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_48a3a1a853b0b60fe0003080551017060474878a602fbc25226e11e22d9a9029 = $this->env->getExtension("native_profiler");
        $__internal_48a3a1a853b0b60fe0003080551017060474878a602fbc25226e11e22d9a9029->enter($__internal_48a3a1a853b0b60fe0003080551017060474878a602fbc25226e11e22d9a9029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_48a3a1a853b0b60fe0003080551017060474878a602fbc25226e11e22d9a9029->leave($__internal_48a3a1a853b0b60fe0003080551017060474878a602fbc25226e11e22d9a9029_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6be3f4ca0a80c0675f35f831b993d0d9e09cea199d5027f814e064e0534a6449 = $this->env->getExtension("native_profiler");
        $__internal_6be3f4ca0a80c0675f35f831b993d0d9e09cea199d5027f814e064e0534a6449->enter($__internal_6be3f4ca0a80c0675f35f831b993d0d9e09cea199d5027f814e064e0534a6449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6be3f4ca0a80c0675f35f831b993d0d9e09cea199d5027f814e064e0534a6449->leave($__internal_6be3f4ca0a80c0675f35f831b993d0d9e09cea199d5027f814e064e0534a6449_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{{generals_helper.name}}{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
