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
        $__internal_199d7c6c83f84fc9f34dfc4473d064344433e01a6d7d99d6d033f966be3264ee = $this->env->getExtension("native_profiler");
        $__internal_199d7c6c83f84fc9f34dfc4473d064344433e01a6d7d99d6d033f966be3264ee->enter($__internal_199d7c6c83f84fc9f34dfc4473d064344433e01a6d7d99d6d033f966be3264ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_199d7c6c83f84fc9f34dfc4473d064344433e01a6d7d99d6d033f966be3264ee->leave($__internal_199d7c6c83f84fc9f34dfc4473d064344433e01a6d7d99d6d033f966be3264ee_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0aef9ce394e82c8d4c2816e29704fce7f4a254596bccab1890cfcc85c6de06fd = $this->env->getExtension("native_profiler");
        $__internal_0aef9ce394e82c8d4c2816e29704fce7f4a254596bccab1890cfcc85c6de06fd->enter($__internal_0aef9ce394e82c8d4c2816e29704fce7f4a254596bccab1890cfcc85c6de06fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0aef9ce394e82c8d4c2816e29704fce7f4a254596bccab1890cfcc85c6de06fd->leave($__internal_0aef9ce394e82c8d4c2816e29704fce7f4a254596bccab1890cfcc85c6de06fd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf9f696bad1b1aa582caca714a561beb9c2a3c66eb521cdf764f8847f582b33e = $this->env->getExtension("native_profiler");
        $__internal_bf9f696bad1b1aa582caca714a561beb9c2a3c66eb521cdf764f8847f582b33e->enter($__internal_bf9f696bad1b1aa582caca714a561beb9c2a3c66eb521cdf764f8847f582b33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bf9f696bad1b1aa582caca714a561beb9c2a3c66eb521cdf764f8847f582b33e->leave($__internal_bf9f696bad1b1aa582caca714a561beb9c2a3c66eb521cdf764f8847f582b33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5921bf7ae6ceff9cf86b6c1f46f8f969ad13fdb43b0e0d7ea7730ec2b92b6739 = $this->env->getExtension("native_profiler");
        $__internal_5921bf7ae6ceff9cf86b6c1f46f8f969ad13fdb43b0e0d7ea7730ec2b92b6739->enter($__internal_5921bf7ae6ceff9cf86b6c1f46f8f969ad13fdb43b0e0d7ea7730ec2b92b6739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_5921bf7ae6ceff9cf86b6c1f46f8f969ad13fdb43b0e0d7ea7730ec2b92b6739->leave($__internal_5921bf7ae6ceff9cf86b6c1f46f8f969ad13fdb43b0e0d7ea7730ec2b92b6739_prof);

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
