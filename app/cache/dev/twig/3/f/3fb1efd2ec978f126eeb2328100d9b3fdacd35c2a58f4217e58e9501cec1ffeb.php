<?php

/* base.html.twig */
class __TwigTemplate_3fb1efd2ec978f126eeb2328100d9b3fdacd35c2a58f4217e58e9501cec1ffeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dec2f2771e5a7ec9dc9d83b13eed900c6494eb428cc467f1ef34343590713d9b = $this->env->getExtension("native_profiler");
        $__internal_dec2f2771e5a7ec9dc9d83b13eed900c6494eb428cc467f1ef34343590713d9b->enter($__internal_dec2f2771e5a7ec9dc9d83b13eed900c6494eb428cc467f1ef34343590713d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>BDD Demo - ";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"/css/starter-template.css\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"../../assets/js/ie-emulation-modes-warning.js\"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Demo</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("products");
        echo "\">Products</a></li>
          </ul>

          <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"active\"><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("view_cart");
        echo "\">Items in Cart (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "cart"), "method")), "html", null, true);
        echo ")</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">

        ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 61
            echo "            <div class=\"flash-notice\">
                ";
            // line 62
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "
    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
    <script src=\"/js/holder/holder.js\"></script>
  </body>
</html>
";
        
        $__internal_dec2f2771e5a7ec9dc9d83b13eed900c6494eb428cc467f1ef34343590713d9b->leave($__internal_dec2f2771e5a7ec9dc9d83b13eed900c6494eb428cc467f1ef34343590713d9b_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddef6688e9dc7c30207b97787a820b8399930ee366f4740d011802bb2cbf12d0 = $this->env->getExtension("native_profiler");
        $__internal_ddef6688e9dc7c30207b97787a820b8399930ee366f4740d011802bb2cbf12d0->enter($__internal_ddef6688e9dc7c30207b97787a820b8399930ee366f4740d011802bb2cbf12d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ddef6688e9dc7c30207b97787a820b8399930ee366f4740d011802bb2cbf12d0->leave($__internal_ddef6688e9dc7c30207b97787a820b8399930ee366f4740d011802bb2cbf12d0_prof);

    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        $__internal_c031984c0683091a245da6d7c8b48d93a8ca474c28c6d0bf8af474e4f386bb93 = $this->env->getExtension("native_profiler");
        $__internal_c031984c0683091a245da6d7c8b48d93a8ca474c28c6d0bf8af474e4f386bb93->enter($__internal_c031984c0683091a245da6d7c8b48d93a8ca474c28c6d0bf8af474e4f386bb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_c031984c0683091a245da6d7c8b48d93a8ca474c28c6d0bf8af474e4f386bb93->leave($__internal_c031984c0683091a245da6d7c8b48d93a8ca474c28c6d0bf8af474e4f386bb93_prof);

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
        return array (  150 => 66,  139 => 13,  120 => 67,  118 => 66,  115 => 65,  106 => 62,  103 => 61,  99 => 60,  86 => 52,  79 => 48,  75 => 47,  38 => 13,  24 => 1,);
    }
}