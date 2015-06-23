<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8f216365730bac66abec45b9710ef35a24e03b85cfbb5d37b6ea15ea1ae09607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf880c2856bdf47721e6b24bbeb26f8233bac433aa7149b35f12058908b3f5e7 = $this->env->getExtension("native_profiler");
        $__internal_cf880c2856bdf47721e6b24bbeb26f8233bac433aa7149b35f12058908b3f5e7->enter($__internal_cf880c2856bdf47721e6b24bbeb26f8233bac433aa7149b35f12058908b3f5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf880c2856bdf47721e6b24bbeb26f8233bac433aa7149b35f12058908b3f5e7->leave($__internal_cf880c2856bdf47721e6b24bbeb26f8233bac433aa7149b35f12058908b3f5e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0746598734e473a149d7bbe2a83d7f97a30be7f5b2ecf7a57451a038bc12acda = $this->env->getExtension("native_profiler");
        $__internal_0746598734e473a149d7bbe2a83d7f97a30be7f5b2ecf7a57451a038bc12acda->enter($__internal_0746598734e473a149d7bbe2a83d7f97a30be7f5b2ecf7a57451a038bc12acda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0746598734e473a149d7bbe2a83d7f97a30be7f5b2ecf7a57451a038bc12acda->leave($__internal_0746598734e473a149d7bbe2a83d7f97a30be7f5b2ecf7a57451a038bc12acda_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d15138b1e521c5027a3c90670967b7130fcb8e48d25acfbb2531f75368deca3 = $this->env->getExtension("native_profiler");
        $__internal_3d15138b1e521c5027a3c90670967b7130fcb8e48d25acfbb2531f75368deca3->enter($__internal_3d15138b1e521c5027a3c90670967b7130fcb8e48d25acfbb2531f75368deca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3d15138b1e521c5027a3c90670967b7130fcb8e48d25acfbb2531f75368deca3->leave($__internal_3d15138b1e521c5027a3c90670967b7130fcb8e48d25acfbb2531f75368deca3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_85d37ec59e6e0118f2dcd6ac1e25e39bdf78d78e5884c0217c47c2586bcfc997 = $this->env->getExtension("native_profiler");
        $__internal_85d37ec59e6e0118f2dcd6ac1e25e39bdf78d78e5884c0217c47c2586bcfc997->enter($__internal_85d37ec59e6e0118f2dcd6ac1e25e39bdf78d78e5884c0217c47c2586bcfc997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_85d37ec59e6e0118f2dcd6ac1e25e39bdf78d78e5884c0217c47c2586bcfc997->leave($__internal_85d37ec59e6e0118f2dcd6ac1e25e39bdf78d78e5884c0217c47c2586bcfc997_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
