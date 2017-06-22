<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fe8c56fd493655d90b06514a027aa976790eb81e8bb61f881b6081b1ae4b2480 extends Twig_Template
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
        $__internal_6cef25a9d0a67cb7d1bcf1eb7c9c7b495609b1ec14a58bffb96d0d1a704765e2 = $this->env->getExtension("native_profiler");
        $__internal_6cef25a9d0a67cb7d1bcf1eb7c9c7b495609b1ec14a58bffb96d0d1a704765e2->enter($__internal_6cef25a9d0a67cb7d1bcf1eb7c9c7b495609b1ec14a58bffb96d0d1a704765e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cef25a9d0a67cb7d1bcf1eb7c9c7b495609b1ec14a58bffb96d0d1a704765e2->leave($__internal_6cef25a9d0a67cb7d1bcf1eb7c9c7b495609b1ec14a58bffb96d0d1a704765e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c56a61730f1ff8e90bc28fa353909f67cd880c70b2c2bdaff28db00956002c1 = $this->env->getExtension("native_profiler");
        $__internal_6c56a61730f1ff8e90bc28fa353909f67cd880c70b2c2bdaff28db00956002c1->enter($__internal_6c56a61730f1ff8e90bc28fa353909f67cd880c70b2c2bdaff28db00956002c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6c56a61730f1ff8e90bc28fa353909f67cd880c70b2c2bdaff28db00956002c1->leave($__internal_6c56a61730f1ff8e90bc28fa353909f67cd880c70b2c2bdaff28db00956002c1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4223a733fb54437ab4275143b1f42ff370c85d0a8c526db4290dad306cb68edd = $this->env->getExtension("native_profiler");
        $__internal_4223a733fb54437ab4275143b1f42ff370c85d0a8c526db4290dad306cb68edd->enter($__internal_4223a733fb54437ab4275143b1f42ff370c85d0a8c526db4290dad306cb68edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4223a733fb54437ab4275143b1f42ff370c85d0a8c526db4290dad306cb68edd->leave($__internal_4223a733fb54437ab4275143b1f42ff370c85d0a8c526db4290dad306cb68edd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_05e262378939b3994ceb41550a13f919ee85e6e2bbe5da54009bdc00e1a6ad48 = $this->env->getExtension("native_profiler");
        $__internal_05e262378939b3994ceb41550a13f919ee85e6e2bbe5da54009bdc00e1a6ad48->enter($__internal_05e262378939b3994ceb41550a13f919ee85e6e2bbe5da54009bdc00e1a6ad48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_05e262378939b3994ceb41550a13f919ee85e6e2bbe5da54009bdc00e1a6ad48->leave($__internal_05e262378939b3994ceb41550a13f919ee85e6e2bbe5da54009bdc00e1a6ad48_prof);

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
