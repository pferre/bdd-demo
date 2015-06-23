<?php

/* default/products.html.twig */
class __TwigTemplate_4c23ae5bd4ff8ac149494329369e93eae9366f6be7e0d20ebe00ce974fa2f8f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/products.html.twig", 1);
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
        $__internal_77b717d259dacb4874196d536e08dd37ab5fbca254bed98b7e4d137387a3bc83 = $this->env->getExtension("native_profiler");
        $__internal_77b717d259dacb4874196d536e08dd37ab5fbca254bed98b7e4d137387a3bc83->enter($__internal_77b717d259dacb4874196d536e08dd37ab5fbca254bed98b7e4d137387a3bc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/products.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77b717d259dacb4874196d536e08dd37ab5fbca254bed98b7e4d137387a3bc83->leave($__internal_77b717d259dacb4874196d536e08dd37ab5fbca254bed98b7e4d137387a3bc83_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9476c6dc289264d2b4781ab5d5655878c863cfbc259de33fe1ee919c3a0005e8 = $this->env->getExtension("native_profiler");
        $__internal_9476c6dc289264d2b4781ab5d5655878c863cfbc259de33fe1ee919c3a0005e8->enter($__internal_9476c6dc289264d2b4781ab5d5655878c863cfbc259de33fe1ee919c3a0005e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demoing the Demo!";
        
        $__internal_9476c6dc289264d2b4781ab5d5655878c863cfbc259de33fe1ee919c3a0005e8->leave($__internal_9476c6dc289264d2b4781ab5d5655878c863cfbc259de33fe1ee919c3a0005e8_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2df9d5710fb82d028c4e0c703317cf3a0e814965fe8af8e5f650c6dd53218031 = $this->env->getExtension("native_profiler");
        $__internal_2df9d5710fb82d028c4e0c703317cf3a0e814965fe8af8e5f650c6dd53218031->enter($__internal_2df9d5710fb82d028c4e0c703317cf3a0e814965fe8af8e5f650c6dd53218031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "      <div class=\"starter-template\">
        <h1 class=\"lead\">Listing of products</h1>

\t\t<div class=\"row\">
\t\t  <div class=\"col-xs-6 col-md-12\">
\t\t  \t";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "
\t\t  \t\t<div class=\"thumbnail\">
\t  \t\t\t\t<img src=\"#\" alt=\"\" data-src=\"holder.js/171x180\">
\t  \t\t\t\t<span class=\"product-name\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t<form action=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_add", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t<button id=\"add_";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-primary\">Add ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</button>
\t\t\t\t\t</form>

\t\t\t\t\t<form action=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_remove", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t<button id=\"remove_";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-danger\">Remove ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</button>
\t\t\t\t\t</form>
\t\t  \t\t</div>

\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t  </div>
\t\t</div>

      </div>
";
        
        $__internal_2df9d5710fb82d028c4e0c703317cf3a0e814965fe8af8e5f650c6dd53218031->leave($__internal_2df9d5710fb82d028c4e0c703317cf3a0e814965fe8af8e5f650c6dd53218031_prof);

    }

    public function getTemplateName()
    {
        return "default/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  89 => 21,  85 => 20,  77 => 17,  73 => 16,  69 => 15,  64 => 12,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
