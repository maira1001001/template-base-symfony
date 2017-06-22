<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_645c304e569b3ec3ba65d91743532754de6e214a507b020c4e9c91cd6b68bdf3 extends Twig_Template
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
        $__internal_fc9d152f4fc03ce6bd980b799b01028e7076ae55c1d5c1a8a585b33e3af14174 = $this->env->getExtension("native_profiler");
        $__internal_fc9d152f4fc03ce6bd980b799b01028e7076ae55c1d5c1a8a585b33e3af14174->enter($__internal_fc9d152f4fc03ce6bd980b799b01028e7076ae55c1d5c1a8a585b33e3af14174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc9d152f4fc03ce6bd980b799b01028e7076ae55c1d5c1a8a585b33e3af14174->leave($__internal_fc9d152f4fc03ce6bd980b799b01028e7076ae55c1d5c1a8a585b33e3af14174_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b759a2a61240f382f69270378a74ec49730463782063754228969451e32ec607 = $this->env->getExtension("native_profiler");
        $__internal_b759a2a61240f382f69270378a74ec49730463782063754228969451e32ec607->enter($__internal_b759a2a61240f382f69270378a74ec49730463782063754228969451e32ec607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b759a2a61240f382f69270378a74ec49730463782063754228969451e32ec607->leave($__internal_b759a2a61240f382f69270378a74ec49730463782063754228969451e32ec607_prof);

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
