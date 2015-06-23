<?php

/* default/cart.html.twig */
class __TwigTemplate_9ea1c43171e91f2bac50c5d6b85d833330704271d5bc8bffabb90388da61223d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/cart.html.twig", 1);
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
        $__internal_23cbbb8e80aa7b703c6761279fa6de55a1e80fa11d0f7b4fc197cb896af9ec2c = $this->env->getExtension("native_profiler");
        $__internal_23cbbb8e80aa7b703c6761279fa6de55a1e80fa11d0f7b4fc197cb896af9ec2c->enter($__internal_23cbbb8e80aa7b703c6761279fa6de55a1e80fa11d0f7b4fc197cb896af9ec2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/cart.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23cbbb8e80aa7b703c6761279fa6de55a1e80fa11d0f7b4fc197cb896af9ec2c->leave($__internal_23cbbb8e80aa7b703c6761279fa6de55a1e80fa11d0f7b4fc197cb896af9ec2c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f3a756c2430325c98266af94e4a2c71e69ff76fe37ce5829aa384c6543a4426 = $this->env->getExtension("native_profiler");
        $__internal_6f3a756c2430325c98266af94e4a2c71e69ff76fe37ce5829aa384c6543a4426->enter($__internal_6f3a756c2430325c98266af94e4a2c71e69ff76fe37ce5829aa384c6543a4426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cart";
        
        $__internal_6f3a756c2430325c98266af94e4a2c71e69ff76fe37ce5829aa384c6543a4426->leave($__internal_6f3a756c2430325c98266af94e4a2c71e69ff76fe37ce5829aa384c6543a4426_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_7fdfff179a149a2f3f5e25300989f7881653d314005b0f85a71e7f54ca97e8fb = $this->env->getExtension("native_profiler");
        $__internal_7fdfff179a149a2f3f5e25300989f7881653d314005b0f85a71e7f54ca97e8fb->enter($__internal_7fdfff179a149a2f3f5e25300989f7881653d314005b0f85a71e7f54ca97e8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
\t<div class=\"row\">
\t\t
\t\t";
        // line 9
        if (twig_test_empty((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")))) {
            // line 10
            echo "
\t\t\t<h1 class=\"lead\">Cart is empty, nothing to see.</h1>

\t\t";
        } else {
            // line 14
            echo "
\t\t\t<table class=\"table table-striped\">
\t\t\t      <thead>
\t\t\t        <tr>
\t\t\t          <th>#</th>
\t\t\t          <th>Name</th>
\t\t\t          <th>Category</th>
\t\t\t          <th>Currency</th>
\t\t\t          <th>Price</th>
\t\t\t        </tr>
\t\t\t      </thead>

\t\t\t      <tbody>
\t\t\t      \t";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 28
                echo "\t\t\t\t        <tr>
\t\t\t\t          <th scope=\"row\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array(), "array"), "html", null, true);
                echo "</th>
\t\t\t\t          <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t          <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "category", array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t          <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "currency", array(), "array"), "html", null, true);
                echo "</td>
\t\t\t\t          <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "price", array(), "array"), 2), "html", null, true);
                echo "</td>
\t\t\t\t        </tr>
\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
\t\t\t        <tr>
\t\t\t        \t<td></td>
\t\t\t        \t<td></td>
\t\t\t        \t<td></td>
\t\t\t        \t<td><strong>Total Price:</strong></td>
\t\t\t        \t<td>";
            // line 42
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 2), "html", null, true);
            echo "</td>
\t\t\t        </tr>

\t\t\t        <tr>
\t\t\t        \t<td></td>
\t\t\t        \t<td></td>
\t\t\t        \t<td></td>
\t\t\t        \t<td></td>
\t\t\t        \t<td>
\t\t\t\t\t\t\t<form action=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("clear_cart");
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger\">Clear Cart</button>
\t\t\t\t\t\t\t</form>
\t\t\t        \t</td>
\t\t\t        </tr>
\t\t\t      </tbody>
\t\t\t</table>

\t\t";
        }
        // line 60
        echo "
\t</div>

";
        
        $__internal_7fdfff179a149a2f3f5e25300989f7881653d314005b0f85a71e7f54ca97e8fb->leave($__internal_7fdfff179a149a2f3f5e25300989f7881653d314005b0f85a71e7f54ca97e8fb_prof);

    }

    public function getTemplateName()
    {
        return "default/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 60,  133 => 51,  121 => 42,  113 => 36,  104 => 33,  100 => 32,  96 => 31,  92 => 30,  88 => 29,  85 => 28,  81 => 27,  66 => 14,  60 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
