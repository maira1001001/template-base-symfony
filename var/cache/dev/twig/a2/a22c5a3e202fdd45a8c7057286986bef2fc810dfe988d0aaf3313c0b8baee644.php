<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_40d0626e9fb3502c9ece7c96da07c69fe7f4524dffb23d529d01fe02316a1549 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("frontend/base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "frontend/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aaed0377e541ad39bc49c62b524d90885bba478f7e03213ffb100f39307560a9 = $this->env->getExtension("native_profiler");
        $__internal_aaed0377e541ad39bc49c62b524d90885bba478f7e03213ffb100f39307560a9->enter($__internal_aaed0377e541ad39bc49c62b524d90885bba478f7e03213ffb100f39307560a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaed0377e541ad39bc49c62b524d90885bba478f7e03213ffb100f39307560a9->leave($__internal_aaed0377e541ad39bc49c62b524d90885bba478f7e03213ffb100f39307560a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff840ca34def1fb3011662382881ad3f0ae056e7f6c0170f4167cf5e911634bc = $this->env->getExtension("native_profiler");
        $__internal_ff840ca34def1fb3011662382881ad3f0ae056e7f6c0170f4167cf5e911634bc->enter($__internal_ff840ca34def1fb3011662382881ad3f0ae056e7f6c0170f4167cf5e911634bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ff840ca34def1fb3011662382881ad3f0ae056e7f6c0170f4167cf5e911634bc->leave($__internal_ff840ca34def1fb3011662382881ad3f0ae056e7f6c0170f4167cf5e911634bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  11 => 1,);
    }
}
/* {% extends 'frontend/base.html.twig' %}*/
/* */
/* {% block body %}*/
/* {% endblock %}*/
