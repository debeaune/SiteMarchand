<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* account/order.show.html.twig */
class __TwigTemplate_8559b10c0324bb953c62489456d9f6ac5121a707bf75606523c1a75df95868ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/order.show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/order.show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ma commande - La Boutique Française";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Ma commande ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 6, $this->source); })()), "reference", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\">Retour</a>
    <hr><strong></strong>
    <strong>Commande passée le:</strong> ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9), "d/m/Y"), "html", null, true);
        echo "</br>
    <strong>Référence de ma commande:</strong><small>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "reference", [], "any", false, false, false, 10), "html", null, true);
        echo "</small></br>
    <strong>Transporteur choisi:</strong>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 11, $this->source); })()), "carriername", [], "any", false, false, false, 11), "html", null, true);
        echo "
    <hr>
    <strong>Détails:</strong></br>

    <table class=\"table mt-4\">
        <thead>
        <tr>
            <th scope=\"col\">Produit</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix unitaire</th>
            <th scope=\"col\">Total</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderDetails"]) || array_key_exists("orderDetails", $context) ? $context["orderDetails"] : (function () { throw new RuntimeError('Variable "orderDetails" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 26
            echo "            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>x";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 29) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 30) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
                <td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>

    <div class=\"text-right\">
       <strong>Sous-total:</strong> ";
        // line 38
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 38, $this->source); })()), "getTotal", [], "any", false, false, false, 38) / 100), 2, ",", "."), "html", null, true);
        echo " €<br/>
       <strong>Livraison:</strong> ";
        // line 39
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 39, $this->source); })()), "carrierprice", [], "any", false, false, false, 39) / 100), 2, ",", "."), "html", null, true);
        echo " €<br/>
       <strong>Total: </strong> ";
        // line 40
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()), "carrierPrice", [], "any", false, false, false, 40) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 40, $this->source); })()), "getTotal", [], "any", false, false, false, 40)) / 100), 2, ",", "."), "html", null, true);
        echo " €
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "account/order.show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 40,  147 => 39,  143 => 38,  137 => 34,  127 => 30,  123 => 29,  119 => 28,  115 => 27,  112 => 26,  108 => 25,  91 => 11,  87 => 10,  83 => 9,  78 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ma commande - La Boutique Française{% endblock %}

{% block content %}
    <h1>Ma commande {{ order.reference }}</h1>
    <a href=\"{{ path('account') }}\">Retour</a>
    <hr><strong></strong>
    <strong>Commande passée le:</strong> {{ order.createdAt|date('d/m/Y') }}</br>
    <strong>Référence de ma commande:</strong><small>{{ order.reference }}</small></br>
    <strong>Transporteur choisi:</strong>{{ order.carriername }}
    <hr>
    <strong>Détails:</strong></br>

    <table class=\"table mt-4\">
        <thead>
        <tr>
            <th scope=\"col\">Produit</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix unitaire</th>
            <th scope=\"col\">Total</th>
        </tr>
        </thead>
        <tbody>
        {% for product in orderDetails %}
            <tr>
                <td>{{ product.product }}</td>
                <td>x{{ product.quantity }}</td>
                <td>{{ (product.price / 100)|number_format(2,',','.') }} €</td>
                <td>{{ (product.total / 100)|number_format(2,',','.') }} €</td>
                <td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"text-right\">
       <strong>Sous-total:</strong> {{ (order.getTotal / 100)|number_format(2,',','.') }} €<br/>
       <strong>Livraison:</strong> {{ (order.carrierprice / 100)|number_format(2,',','.') }} €<br/>
       <strong>Total: </strong> {{ ((order.carrierPrice + order.getTotal) / 100)|number_format(2,',','.') }} €
    </div>

{% endblock %}", "account/order.show.html.twig", "C:\\wamp64\\www\\SiteMarchand\\templates\\account\\order.show.html.twig");
    }
}
