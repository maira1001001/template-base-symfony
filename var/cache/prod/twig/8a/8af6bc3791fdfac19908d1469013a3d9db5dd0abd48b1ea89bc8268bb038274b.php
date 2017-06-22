<?php

/* backend/base.html.twig */
class __TwigTemplate_b5c79f16390fd9e5bac696b7140bc7622983fef92e5728b9d878785f8952bdaa extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
  <!-- Bootstrap 3.3.6 -->
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/bootstrap/css/bootstrap.min.css\">
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css\">
  <!-- Ionicons -->
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css\">
  <!-- Theme style -->
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/dist/css/AdminLTE.min.css\">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/dist/css/skins/_all-skins.min.css\">
  <!-- iCheck -->
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/iCheck/flat/blue.css\">
  <!-- Morris chart -->
  <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/morris/morris.css\">
  <!-- jvectormap -->
  <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/jvectormap/jquery-jvectormap-1.2.2.css\">
  <!-- Date Picker -->
  <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/datepicker/datepicker3.css\">
  <!-- Daterange picker -->
  <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/daterangepicker/daterangepicker.css\">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css\">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
  <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->
  <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/css/backend/base.css\">
";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 48
    public function block_section($context, array $blocks = array())
    {
        // line 49
        echo "  ";
    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        // line 68
        echo "  <!-- jQuery 2.2.3 -->
  <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/bootstrap/js/bootstrap.min.js\"></script>
  <!-- Morris.js charts -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
  <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/morris/morris.min.js\"></script>
  <!-- Sparkline -->
  <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/sparkline/jquery.sparkline.min.js\"></script>
  <!-- jvectormap -->
  <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js\"></script>
  <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/jvectormap/jquery-jvectormap-world-mill-en.js\"></script>
  <!-- jQuery Knob Chart -->
  <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/knob/jquery.knob.js\"></script>
  <!-- daterangepicker -->
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js\"></script>
  <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/daterangepicker/daterangepicker.js\"></script>
  <!-- datepicker -->
  <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/datepicker/bootstrap-datepicker.js\"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js\"></script>
  <!-- Slimscroll -->
  <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/slimScroll/jquery.slimscroll.min.js\"></script>
  <!-- FastClick -->
  <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/plugins/fastclick/fastclick.js\"></script>
  <!-- AdminLTE App -->
  <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basepath", array()), "html", null, true);
        echo "/dist/js/app.min.js\"></script>
";
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
        return array (  215 => 100,  210 => 98,  205 => 96,  200 => 94,  195 => 92,  190 => 90,  184 => 87,  179 => 85,  175 => 84,  170 => 82,  165 => 80,  159 => 77,  148 => 69,  145 => 68,  142 => 67,  138 => 49,  135 => 48,  120 => 50,  118 => 48,  115 => 47,  112 => 46,  110 => 45,  106 => 43,  103 => 42,  97 => 38,  86 => 30,  81 => 28,  76 => 26,  71 => 24,  66 => 22,  61 => 20,  56 => 18,  50 => 15,  41 => 9,  34 => 4,  31 => 3,  11 => 1,);
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
