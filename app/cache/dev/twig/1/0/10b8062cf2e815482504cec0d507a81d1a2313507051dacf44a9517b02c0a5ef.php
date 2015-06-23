<?php

/* default/index.html.twig */
class __TwigTemplate_10b8062cf2e815482504cec0d507a81d1a2313507051dacf44a9517b02c0a5ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_193bc48d12deb0f037a3fc7f5072a2be702b418898e340019d104f471f02c590 = $this->env->getExtension("native_profiler");
        $__internal_193bc48d12deb0f037a3fc7f5072a2be702b418898e340019d104f471f02c590->enter($__internal_193bc48d12deb0f037a3fc7f5072a2be702b418898e340019d104f471f02c590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_193bc48d12deb0f037a3fc7f5072a2be702b418898e340019d104f471f02c590->leave($__internal_193bc48d12deb0f037a3fc7f5072a2be702b418898e340019d104f471f02c590_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16b4ec4eb2687e58d9c85c007c48ff815e20c617b389db54314a3349c6023c30 = $this->env->getExtension("native_profiler");
        $__internal_16b4ec4eb2687e58d9c85c007c48ff815e20c617b389db54314a3349c6023c30->enter($__internal_16b4ec4eb2687e58d9c85c007c48ff815e20c617b389db54314a3349c6023c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Homepage";
        
        $__internal_16b4ec4eb2687e58d9c85c007c48ff815e20c617b389db54314a3349c6023c30->leave($__internal_16b4ec4eb2687e58d9c85c007c48ff815e20c617b389db54314a3349c6023c30_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_7f141d6a9366ccef9b3d5937d6521869b643c7e4296518d3d4b1974dd2ea6284 = $this->env->getExtension("native_profiler");
        $__internal_7f141d6a9366ccef9b3d5937d6521869b643c7e4296518d3d4b1974dd2ea6284->enter($__internal_7f141d6a9366ccef9b3d5937d6521869b643c7e4296518d3d4b1974dd2ea6284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "      <div class=\"starter-template\">
        <h1>BDD Demo (with Behat and PHPSpec)</h1>
        <p class=\"lead\">Simple cart app.</p>

\t\t<a class=\"btn btn-primary\" role=\"button\" data-toggle=\"collapse\" href=\"#collapseExample\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
\t\t  Still with me?
\t\t</a>

\t\t<div class=\"collapse\" id=\"collapseExample\">
\t\t  <div class=\"well\">
\t\t  \t<h1>Or befuddled?</h1>
\t\t    <img src=\"http://masucub.com/wp-content/uploads/2015/05/funny-dogs-14.jpg\" alt=\"\">
\t\t  </div>
\t\t</div>

      </div>
";
        
        $__internal_7f141d6a9366ccef9b3d5937d6521869b643c7e4296518d3d4b1974dd2ea6284->leave($__internal_7f141d6a9366ccef9b3d5937d6521869b643c7e4296518d3d4b1974dd2ea6284_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
