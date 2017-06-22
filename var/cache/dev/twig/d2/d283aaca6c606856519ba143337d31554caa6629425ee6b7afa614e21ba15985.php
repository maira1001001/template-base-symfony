<?php

/* base.html.twig */
class __TwigTemplate_f8b90d61d5115770471a74b57aa40ea7d8cd459e40ae2db8e1451611e3332717 extends Twig_Template
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
        $__internal_d87cb7b250f5ca175f711c47fd8f7057e31bc4ea730399f11997a9ba095de25b = $this->env->getExtension("native_profiler");
        $__internal_d87cb7b250f5ca175f711c47fd8f7057e31bc4ea730399f11997a9ba095de25b->enter($__internal_d87cb7b250f5ca175f711c47fd8f7057e31bc4ea730399f11997a9ba095de25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d87cb7b250f5ca175f711c47fd8f7057e31bc4ea730399f11997a9ba095de25b->leave($__internal_d87cb7b250f5ca175f711c47fd8f7057e31bc4ea730399f11997a9ba095de25b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae51c3d1377a6695c2b97884604b213b91c099aff7b657379203f63d00146d3a = $this->env->getExtension("native_profiler");
        $__internal_ae51c3d1377a6695c2b97884604b213b91c099aff7b657379203f63d00146d3a->enter($__internal_ae51c3d1377a6695c2b97884604b213b91c099aff7b657379203f63d00146d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["generals_helper"]) ? $context["generals_helper"] : $this->getContext($context, "generals_helper")), "name", array()), "html", null, true);
        
        $__internal_ae51c3d1377a6695c2b97884604b213b91c099aff7b657379203f63d00146d3a->leave($__internal_ae51c3d1377a6695c2b97884604b213b91c099aff7b657379203f63d00146d3a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3007cedea1947c225d48f65d2f01bb63bddedf6e2eddef2e4797c8c014ca098e = $this->env->getExtension("native_profiler");
        $__internal_3007cedea1947c225d48f65d2f01bb63bddedf6e2eddef2e4797c8c014ca098e->enter($__internal_3007cedea1947c225d48f65d2f01bb63bddedf6e2eddef2e4797c8c014ca098e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3007cedea1947c225d48f65d2f01bb63bddedf6e2eddef2e4797c8c014ca098e->leave($__internal_3007cedea1947c225d48f65d2f01bb63bddedf6e2eddef2e4797c8c014ca098e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_abdd42f8e71089f0ce43140dc21e505e51ded0f477ac841dd01f0c63b6591451 = $this->env->getExtension("native_profiler");
        $__internal_abdd42f8e71089f0ce43140dc21e505e51ded0f477ac841dd01f0c63b6591451->enter($__internal_abdd42f8e71089f0ce43140dc21e505e51ded0f477ac841dd01f0c63b6591451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_abdd42f8e71089f0ce43140dc21e505e51ded0f477ac841dd01f0c63b6591451->leave($__internal_abdd42f8e71089f0ce43140dc21e505e51ded0f477ac841dd01f0c63b6591451_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2535c1182d7f7e1a8a96b7f553033317f3387f7cd504d9debbc956d2302a10ee = $this->env->getExtension("native_profiler");
        $__internal_2535c1182d7f7e1a8a96b7f553033317f3387f7cd504d9debbc956d2302a10ee->enter($__internal_2535c1182d7f7e1a8a96b7f553033317f3387f7cd504d9debbc956d2302a10ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2535c1182d7f7e1a8a96b7f553033317f3387f7cd504d9debbc956d2302a10ee->leave($__internal_2535c1182d7f7e1a8a96b7f553033317f3387f7cd504d9debbc956d2302a10ee_prof);

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
