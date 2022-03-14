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
    ";
        // line 8
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 8, $this->source); })())), 0))) {
            // line 9
            echo "        <table class=\"table mt-3\">
            <thead>
                <tr>
                    <th scope=\"col\">Produit</th>
                    <th scope=\"col\"></th>
                    <th scope=\"col\">Quantité</th>
                    <th scope=\"col\">Prix</th>
                    <th scope=\"col\">Total</th>
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 21
            $context["total"] = null;
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 23
                echo "                <tr>
                    <td>
                        <img src=\"/uploads/";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 25), "illustration", [], "any", false, false, false, 25), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
                echo "\" height=\"75px\">
                    </td>
                    <td>
                        ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
                echo "<br/>
                        <small>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 29), "subtitle", [], "any", false, false, false, 29), "html", null, true);
                echo "</small>
                    </td>
                    <td>
                    <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/minus.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"Retirer une quantité à mon produit\">
                    </a>
                    x ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 35), "html", null, true);
                echo "
                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/add.png"), "html", null, true);
                echo "\" height=\"12px\" alt=\"Ajouter une quantité à mon produit\">   
                    </a>
                    </td>
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 40), "price", [], "any", false, false, false, 40) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 41), "price", [], "any", false, false, false, 41) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 41)) / 100), 2, ",", "."), "html", null, true);
                echo " €</td>
                    <td>
                        <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_to_cart", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/delete.png"), "html", null, true);
                echo "\" height=\"18px\" alt=\"Supprimer mon produit\">
                        </a>
                    </td>
                </tr>
                ";
                // line 48
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 48, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 48), "price", [], "any", false, false, false, 48) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 48)));
                // line 49
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </tbody>
        </table>
        <div class=\"text-right mb-5\">
            <b>Nombre de produits: </b>";
            // line 53
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 53, $this->source); })())), "html", null, true);
            echo "
            <br/>
            <b>Total de mon panier: </b>";
            // line 55
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 55, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
            echo " €
            <a href=\"\" class=\"btn btn-success btn-block\">Valider mon panier</a>
        </div>
    ";
        } else {
            // line 59
            echo "        <hr>
        <p><b>Votre panier est vide.</b></p>
    ";
        }
        
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
        return array (  190 => 59,  183 => 55,  178 => 53,  173 => 50,  167 => 49,  165 => 48,  158 => 44,  154 => 43,  149 => 41,  145 => 40,  139 => 37,  135 => 36,  131 => 35,  126 => 33,  122 => 32,  116 => 29,  112 => 28,  104 => 25,  100 => 23,  95 => 22,  93 => 21,  79 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier - La Boutique Française!{% endblock %}

{% block content %}
    <h1>Mon panier</h1>
    Retrouvez l'ensemble des produits que vous voulez ajouté à votre panier.
    {% if cart|length > 0 %}
        <table class=\"table mt-3\">
            <thead>
                <tr>
                    <th scope=\"col\">Produit</th>
                    <th scope=\"col\"></th>
                    <th scope=\"col\">Quantité</th>
                    <th scope=\"col\">Prix</th>
                    <th scope=\"col\">Total</th>
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
            {% set total = null %}
            {% for product in cart  %}
                <tr>
                    <td>
                        <img src=\"/uploads/{{ product.product.illustration }}\" alt=\"{{ product.product.name }}\" height=\"75px\">
                    </td>
                    <td>
                        {{ product.product.name }}<br/>
                        <small>{{ product.product.subtitle }}</small>
                    </td>
                    <td>
                    <a href=\"{{ path('decrease_to_cart', {'id': product.product.id}) }}\">
                        <img src=\"{{ asset('assets/img/minus.png') }}\" height=\"12px\" alt=\"Retirer une quantité à mon produit\">
                    </a>
                    x {{ product.quantity }}
                    <a href=\"{{ path('add_to_cart', {'id': product.product.id}) }}\">
                        <img src=\"{{ asset('assets/img/add.png') }}\" height=\"12px\" alt=\"Ajouter une quantité à mon produit\">   
                    </a>
                    </td>
                    <td>{{ (product.product.price / 100)|number_format(2, ',', '.') }} €</td>
                    <td>{{ ((product.product.price * product.quantity) / 100)|number_format(2, ',', '.') }} €</td>
                    <td>
                        <a href=\"{{ path('delete_to_cart', {'id': product.product.id}) }}\">
                            <img src=\"{{ asset('assets/img/delete.png') }}\" height=\"18px\" alt=\"Supprimer mon produit\">
                        </a>
                    </td>
                </tr>
                {% set total= total + (product.product.price * product.quantity) %}
                {% endfor %}
            </tbody>
        </table>
        <div class=\"text-right mb-5\">
            <b>Nombre de produits: </b>{{ cart|length }}
            <br/>
            <b>Total de mon panier: </b>{{ (total / 100)|number_format(2,',','.') }} €
            <a href=\"\" class=\"btn btn-success btn-block\">Valider mon panier</a>
        </div>
    {% else %}
        <hr>
        <p><b>Votre panier est vide.</b></p>
    {% endif %}
{% endblock %}
", "cart/index.html.twig", "C:\\wamp64\\www\\SiteMarchand\\templates\\cart\\index.html.twig");
    }
}
