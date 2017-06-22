<?php

/* backend/base.html.twig */
class __TwigTemplate_952673cb86b874bc20d1eb4311bd6cbf8299e5f69fb390709e931853cc515fc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "backend/base.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'section' => array($this, 'block_section'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b266197547233f2bcd4cc57621d48d26adaf43e7c9f6d3aed359dcf75abb5ba = $this->env->getExtension("native_profiler");
        $__internal_0b266197547233f2bcd4cc57621d48d26adaf43e7c9f6d3aed359dcf75abb5ba->enter($__internal_0b266197547233f2bcd4cc57621d48d26adaf43e7c9f6d3aed359dcf75abb5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "backend/base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b266197547233f2bcd4cc57621d48d26adaf43e7c9f6d3aed359dcf75abb5ba->leave($__internal_0b266197547233f2bcd4cc57621d48d26adaf43e7c9f6d3aed359dcf75abb5ba_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eefc82e13b5dec2f661555c5e5e19887fbd09657ee18f5750ef64c1fc90bcd1b = $this->env->getExtension("native_profiler");
        $__internal_eefc82e13b5dec2f661555c5e5e19887fbd09657ee18f5750ef64c1fc90bcd1b->enter($__internal_eefc82e13b5dec2f661555c5e5e19887fbd09657ee18f5750ef64c1fc90bcd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/bootstrap/css/bootstrap.min.css\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/dist/css/AdminLTE.min.css\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/dist/css/skins/_all-skins.min.css\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/iCheck/flat/blue.css\">
  <!-- Morris chart -->
  <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/morris/morris.css\">
  <!-- jvectormap -->
  <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/jvectormap/jquery-jvectormap-1.2.2.css\">
  <!-- Date Picker -->
  <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/datepicker/datepicker3.css\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/daterangepicker/daterangepicker.css\">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css\">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->
  <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/backend/base.css\">
";
        
        $__internal_eefc82e13b5dec2f661555c5e5e19887fbd09657ee18f5750ef64c1fc90bcd1b->leave($__internal_eefc82e13b5dec2f661555c5e5e19887fbd09657ee18f5750ef64c1fc90bcd1b_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_36872d503aa0c75280d83f9030b5b68a79e9ecd4aaddcede2daacccd9603b18a = $this->env->getExtension("native_profiler");
        $__internal_36872d503aa0c75280d83f9030b5b68a79e9ecd4aaddcede2daacccd9603b18a->enter($__internal_36872d503aa0c75280d83f9030b5b68a79e9ecd4aaddcede2daacccd9603b18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "<body class=\"hold-transition skin-yellow sidebar-mini\">
<div class=\"wrapper\">
  ";
        // line 45
        $this->loadTemplate("backend/header.html.twig", "backend/base.html.twig", 45)->display($context);
        // line 46
        echo "  ";
        $this->loadTemplate("backend/sidebar.html.twig", "backend/base.html.twig", 46)->display($context);
        // line 47
        echo "
  ";
        // line 48
        $this->displayBlock('section', $context, $blocks);
        // line 50
        echo "
  <!-- /.content-wrapper -->
  <footer class=\"main-footer\">
    <div class=\"pull-right hidden-xs\">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2016.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->
";
        
        $__internal_36872d503aa0c75280d83f9030b5b68a79e9ecd4aaddcede2daacccd9603b18a->leave($__internal_36872d503aa0c75280d83f9030b5b68a79e9ecd4aaddcede2daacccd9603b18a_prof);

    }

    // line 48
    public function block_section($context, array $blocks = array())
    {
        $__internal_b7617ee8d43681cd825a9dd849040dbc0a4b825ca66072557f7cb56f5dbd6a32 = $this->env->getExtension("native_profiler");
        $__internal_b7617ee8d43681cd825a9dd849040dbc0a4b825ca66072557f7cb56f5dbd6a32->enter($__internal_b7617ee8d43681cd825a9dd849040dbc0a4b825ca66072557f7cb56f5dbd6a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 49
        echo "  ";
        
        $__internal_b7617ee8d43681cd825a9dd849040dbc0a4b825ca66072557f7cb56f5dbd6a32->leave($__internal_b7617ee8d43681cd825a9dd849040dbc0a4b825ca66072557f7cb56f5dbd6a32_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2a3d411c38bd333f1abbfd888654b5f0c438c2a873d13c48976966e0218b01a9 = $this->env->getExtension("native_profiler");
        $__internal_2a3d411c38bd333f1abbfd888654b5f0c438c2a873d13c48976966e0218b01a9->enter($__internal_2a3d411c38bd333f1abbfd888654b5f0c438c2a873d13c48976966e0218b01a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "  <!-- jQuery 2.2.3 -->
  <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/jQuery/jquery-2.2.3.min.js\"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    \$.widget.bridge('uibutton', \$.ui.button);
  </script>
  <!-- Bootstrap 3.3.6 -->
  <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/bootstrap/js/bootstrap.min.js\"></script>
  <!-- Morris.js charts -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
  <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/morris/morris.min.js\"></script>
  <!-- Sparkline -->
  <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/sparkline/jquery.sparkline.min.js\"></script>
  <!-- jvectormap -->
  <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js\"></script>
  <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/jvectormap/jquery-jvectormap-world-mill-en.js\"></script>
  <!-- jQuery Knob Chart -->
  <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/knob/jquery.knob.js\"></script>
  <!-- daterangepicker -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
  <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/daterangepicker/daterangepicker.js\"></script>
  <!-- datepicker -->
  <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/datepicker/bootstrap-datepicker.js\"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js\"></script>
  <!-- Slimscroll -->
  <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/slimScroll/jquery.slimscroll.min.js\"></script>
  <!-- FastClick -->
  <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/fastclick/fastclick.js\"></script>
  <!-- AdminLTE App -->
  <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basepath", array()), "html", null, true);
        echo "/dist/js/app.min.js\"></script>
";
        
        $__internal_2a3d411c38bd333f1abbfd888654b5f0c438c2a873d13c48976966e0218b01a9->leave($__internal_2a3d411c38bd333f1abbfd888654b5f0c438c2a873d13c48976966e0218b01a9_prof);

    }

    public function getTemplateName()
    {
        return "backend/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 100,  237 => 98,  232 => 96,  227 => 94,  222 => 92,  217 => 90,  211 => 87,  206 => 85,  202 => 84,  197 => 82,  192 => 80,  186 => 77,  175 => 69,  172 => 68,  166 => 67,  159 => 49,  153 => 48,  135 => 50,  133 => 48,  130 => 47,  127 => 46,  125 => 45,  121 => 43,  115 => 42,  106 => 38,  95 => 30,  90 => 28,  85 => 26,  80 => 24,  75 => 22,  70 => 20,  65 => 18,  59 => 15,  50 => 9,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*   <!-- Tell the browser to be responsive to screen width -->*/
/*   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*   <!-- Bootstrap 3.3.6 -->*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/bootstrap/css/bootstrap.min.css">*/
/*   <!-- Font Awesome -->*/
/*   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">*/
/*   <!-- Ionicons -->*/
/*   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">*/
/*   <!-- Theme style -->*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/dist/css/AdminLTE.min.css">*/
/*   <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*        folder instead of downloading all of them to reduce the load. -->*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/dist/css/skins/_all-skins.min.css">*/
/*   <!-- iCheck -->*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/plugins/iCheck/flat/blue.css">*/
/*   <!-- Morris chart -->*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/plugins/morris/morris.css">*/
/*   <!-- jvectormap -->*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/plugins/jvectormap/jquery-jvectormap-1.2.2.css">*/
/*   <!-- Date Picker -->*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/plugins/datepicker/datepicker3.css">*/
/*   <!-- Daterange picker -->*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/plugins/daterangepicker/daterangepicker.css">*/
/*   <!-- bootstrap wysihtml5 - text editor -->*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">*/
/* */
/*   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*   <!--[if lt IE 9]>*/
/*   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*   <![endif]-->*/
/*   <link rel="stylesheet" href="{{ app.request.basepath }}/css/backend/base.css">*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* <body class="hold-transition skin-yellow sidebar-mini">*/
/* <div class="wrapper">*/
/*   {% include('backend/header.html.twig') %}*/
/*   {% include('backend/sidebar.html.twig') %}*/
/* */
/*   {% block section %}*/
/*   {% endblock %}*/
/* */
/*   <!-- /.content-wrapper -->*/
/*   <footer class="main-footer">*/
/*     <div class="pull-right hidden-xs">*/
/*       <b>Version</b> 0.0.1*/
/*     </div>*/
/*     <strong>Copyright &copy; 2016.</strong> All rights*/
/*     reserved.*/
/*   </footer>*/
/* </div>*/
/* <!-- ./wrapper -->*/
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* {% block javascripts %}*/
/*   <!-- jQuery 2.2.3 -->*/
/*   <script src="{{ app.request.basepath }}/plugins/jQuery/jquery-2.2.3.min.js"></script>*/
/*   <!-- jQuery UI 1.11.4 -->*/
/*   <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>*/
/*   <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->*/
/*   <script>*/
/*     $.widget.bridge('uibutton', $.ui.button);*/
/*   </script>*/
/*   <!-- Bootstrap 3.3.6 -->*/
/*   <script src="{{ app.request.basepath }}/bootstrap/js/bootstrap.min.js"></script>*/
/*   <!-- Morris.js charts -->*/
/*   <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>*/
/*   <script src="{{ app.request.basepath }}/plugins/morris/morris.min.js"></script>*/
/*   <!-- Sparkline -->*/
/*   <script src="{{ app.request.basepath }}/plugins/sparkline/jquery.sparkline.min.js"></script>*/
/*   <!-- jvectormap -->*/
/*   <script src="{{ app.request.basepath }}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>*/
/*   <script src="{{ app.request.basepath }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>*/
/*   <!-- jQuery Knob Chart -->*/
/*   <script src="{{ app.request.basepath }}/plugins/knob/jquery.knob.js"></script>*/
/*   <!-- daterangepicker -->*/
/*   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>*/
/*   <script src="{{ app.request.basepath }}/plugins/daterangepicker/daterangepicker.js"></script>*/
/*   <!-- datepicker -->*/
/*   <script src="{{ app.request.basepath }}/plugins/datepicker/bootstrap-datepicker.js"></script>*/
/*   <!-- Bootstrap WYSIHTML5 -->*/
/*   <script src="{{ app.request.basepath }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>*/
/*   <!-- Slimscroll -->*/
/*   <script src="{{ app.request.basepath }}/plugins/slimScroll/jquery.slimscroll.min.js"></script>*/
/*   <!-- FastClick -->*/
/*   <script src="{{ app.request.basepath }}/plugins/fastclick/fastclick.js"></script>*/
/*   <!-- AdminLTE App -->*/
/*   <script src="{{ app.request.basepath }}/dist/js/app.min.js"></script>*/
/* {% endblock %}*/
