<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_992eb370987b6992746026174c4ac96494cffd58ba878cd361b17170e804d96a extends Twig_Template
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
        $__internal_3dac6339d38c9c3f778f563dc75e7a98e7da7a6aaf881465b58319a490173aba = $this->env->getExtension("native_profiler");
        $__internal_3dac6339d38c9c3f778f563dc75e7a98e7da7a6aaf881465b58319a490173aba->enter($__internal_3dac6339d38c9c3f778f563dc75e7a98e7da7a6aaf881465b58319a490173aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dac6339d38c9c3f778f563dc75e7a98e7da7a6aaf881465b58319a490173aba->leave($__internal_3dac6339d38c9c3f778f563dc75e7a98e7da7a6aaf881465b58319a490173aba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8849767ff165f684103d94bee7858b95c988a91b78f77e1a7e1d588d9ecd2608 = $this->env->getExtension("native_profiler");
        $__internal_8849767ff165f684103d94bee7858b95c988a91b78f77e1a7e1d588d9ecd2608->enter($__internal_8849767ff165f684103d94bee7858b95c988a91b78f77e1a7e1d588d9ecd2608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8849767ff165f684103d94bee7858b95c988a91b78f77e1a7e1d588d9ecd2608->leave($__internal_8849767ff165f684103d94bee7858b95c988a91b78f77e1a7e1d588d9ecd2608_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ea1c4fb784e851759f4584e5604f3ded15dd174259a65066451f5a5b697e49c = $this->env->getExtension("native_profiler");
        $__internal_9ea1c4fb784e851759f4584e5604f3ded15dd174259a65066451f5a5b697e49c->enter($__internal_9ea1c4fb784e851759f4584e5604f3ded15dd174259a65066451f5a5b697e49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ea1c4fb784e851759f4584e5604f3ded15dd174259a65066451f5a5b697e49c->leave($__internal_9ea1c4fb784e851759f4584e5604f3ded15dd174259a65066451f5a5b697e49c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_65c40e220c27ec49952edf609589c10107d9439320fecef82608bd090c5624e4 = $this->env->getExtension("native_profiler");
        $__internal_65c40e220c27ec49952edf609589c10107d9439320fecef82608bd090c5624e4->enter($__internal_65c40e220c27ec49952edf609589c10107d9439320fecef82608bd090c5624e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_65c40e220c27ec49952edf609589c10107d9439320fecef82608bd090c5624e4->leave($__internal_65c40e220c27ec49952edf609589c10107d9439320fecef82608bd090c5624e4_prof);

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
