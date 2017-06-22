<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_f3ed296a53d298234ec15e6170de491b053dfcb325a040e873320554f0c49585 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_bc6e32785dec178f94031e93883a5cfdfcc87e92d363368f257d4aad7afca2ad = $this->env->getExtension("native_profiler");
        $__internal_bc6e32785dec178f94031e93883a5cfdfcc87e92d363368f257d4aad7afca2ad->enter($__internal_bc6e32785dec178f94031e93883a5cfdfcc87e92d363368f257d4aad7afca2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc6e32785dec178f94031e93883a5cfdfcc87e92d363368f257d4aad7afca2ad->leave($__internal_bc6e32785dec178f94031e93883a5cfdfcc87e92d363368f257d4aad7afca2ad_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_790053f8cfdfc1666c2023bf246a53a4d0e86cde901fe74466b109ed64672a01 = $this->env->getExtension("native_profiler");
        $__internal_790053f8cfdfc1666c2023bf246a53a4d0e86cde901fe74466b109ed64672a01->enter($__internal_790053f8cfdfc1666c2023bf246a53a4d0e86cde901fe74466b109ed64672a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    <p><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></p>
";
        
        $__internal_790053f8cfdfc1666c2023bf246a53a4d0e86cde901fe74466b109ed64672a01->leave($__internal_790053f8cfdfc1666c2023bf246a53a4d0e86cde901fe74466b109ed64672a01_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block body %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     <p><a href="{{ path("homepage") }}">{{ 'registration.back'|trans }}</a></p>*/
/* {% endblock body %}*/
/* */
