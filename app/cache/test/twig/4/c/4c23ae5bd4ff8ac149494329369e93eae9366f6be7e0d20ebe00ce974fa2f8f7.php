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
        $__internal_db42e9ee72b8ad44779bfe7321aa07db22a3b9e776eb8bfec651e4ba51415426 = $this->env->getExtension("native_profiler");
        $__internal_db42e9ee72b8ad44779bfe7321aa07db22a3b9e776eb8bfec651e4ba51415426->enter($__internal_db42e9ee72b8ad44779bfe7321aa07db22a3b9e776eb8bfec651e4ba51415426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/products.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db42e9ee72b8ad44779bfe7321aa07db22a3b9e776eb8bfec651e4ba51415426->leave($__internal_db42e9ee72b8ad44779bfe7321aa07db22a3b9e776eb8bfec651e4ba51415426_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2baa79411828f1bb9f805c38344ce1bd964da2d8130fd580ab60d90065cf7a0 = $this->env->getExtension("native_profiler");
        $__internal_d2baa79411828f1bb9f805c38344ce1bd964da2d8130fd580ab60d90065cf7a0->enter($__internal_d2baa79411828f1bb9f805c38344ce1bd964da2d8130fd580ab60d90065cf7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demoing the Demo!";
        
        $__internal_d2baa79411828f1bb9f805c38344ce1bd964da2d8130fd580ab60d90065cf7a0->leave($__internal_d2baa79411828f1bb9f805c38344ce1bd964da2d8130fd580ab60d90065cf7a0_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_bc60c0e3f263f97b0effd9dccf49bf27c17b417227b9485d18419b2bd4ef3a85 = $this->env->getExtension("native_profiler");
        $__internal_bc60c0e3f263f97b0effd9dccf49bf27c17b417227b9485d18419b2bd4ef3a85->enter($__internal_bc60c0e3f263f97b0effd9dccf49bf27c17b417227b9485d18419b2bd4ef3a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_bc60c0e3f263f97b0effd9dccf49bf27c17b417227b9485d18419b2bd4ef3a85->leave($__internal_bc60c0e3f263f97b0effd9dccf49bf27c17b417227b9485d18419b2bd4ef3a85_prof);

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
