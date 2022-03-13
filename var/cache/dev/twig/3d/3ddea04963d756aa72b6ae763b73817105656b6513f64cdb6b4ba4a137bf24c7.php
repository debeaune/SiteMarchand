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

/* cart/index.html.twig */
class __TwigTemplate_3b8799deb5dbff0b475f2584c0a2957b6d75609883401d5e8e5ca92f532d5913 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon panier - La Boutique Française!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Mon panier</h1>
    Retrouvez l'ensemble des produits que vous voulez ajouté à votre panier.
    <hr>
    <table class=\"table mt-3\">
        <thead>
        <tr>
            <th scope=\"col\">Produit</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix</th>
            <th scope=\"col\">Total</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context["total"] = null;
        // line 20
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 21
            echo "        <tr>
            <td>
                <img src=\"/uploads/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 23), "illustration", [], "any", false, false, false, 23), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
            echo "\" height=\"75px\"><br/>
            </td> 
            <td>  
                ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
            echo "
                <small>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 27), "subtitle", [], "any", false, false, false, 27), "html", null, true);
            echo "</small>
            </td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 30), "price", [], "any", false, false, false, 30) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "price", [], "any", false, false, false, 31) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 31)) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
        </tr>
            ";
            // line 33
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 33, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 33), "price", [], "any", false, false, false, 33) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 33)));
            // line 34
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>
    <div class=\"text-right mb-5\">
        <b>Nombre de produits:</b>";
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 38, $this->source); })())), "html", null, true);
        echo "<br/>
        <b>Total de mon panier:</b>";
        // line 39
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 39, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €
        <a href=\"\" class=\"btn btn-success btn-block\">Valider mon panier</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 39,  142 => 38,  137 => 35,  131 => 34,  129 => 33,  124 => 31,  120 => 30,  116 => 29,  111 => 27,  107 => 26,  99 => 23,  95 => 21,  90 => 20,  88 => 19,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier - La Boutique Française!{% endblock %}

{% block content %}
    <h1>Mon panier</h1>
    Retrouvez l'ensemble des produits que vous voulez ajouté à votre panier.
    <hr>
    <table class=\"table mt-3\">
        <thead>
        <tr>
            <th scope=\"col\">Produit</th>
            <th scope=\"col\">Quantité</th>
            <th scope=\"col\">Prix</th>
            <th scope=\"col\">Total</th>
        </tr>
        </thead>
        <tbody>
        {% set total = null %}
        {% for product in cart  %}
        <tr>
            <td>
                <img src=\"/uploads/{{ product.product.illustration }}\" alt=\"{{ product.product.name }}\" height=\"75px\"><br/>
            </td> 
            <td>  
                {{ product.product.name }}
                <small>{{ product.product.subtitle }}</small>
            </td>
            <td>{{ product.quantity }}</td>
            <td>{{ (product.product.price / 100)|number_format(2, ',', '.') }} €</td>
            <td>{{ ((product.product.price * product.quantity) / 100)|number_format(2, ',', '.') }} €</td>
        </tr>
            {% set total= total + (product.product.price * product.quantity) %}
        {% endfor %}
        </tbody>
    </table>
    <div class=\"text-right mb-5\">
        <b>Nombre de produits:</b>{{ cart|length}}<br/>
        <b>Total de mon panier:</b>{{ (total / 100)|number_format(2,',','.')}} €
        <a href=\"\" class=\"btn btn-success btn-block\">Valider mon panier</a>
    </div>
{% endblock %}
", "cart/index.html.twig", "C:\\wamp64\\www\\SiteMarchand\\templates\\cart\\index.html.twig");
    }
}
