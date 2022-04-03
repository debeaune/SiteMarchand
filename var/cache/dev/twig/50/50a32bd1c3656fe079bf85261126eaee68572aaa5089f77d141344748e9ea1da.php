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
    <strong>Statut de la commande:</strong>
    ";
        // line 10
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 10, $this->source); })()), "state", [], "any", false, false, false, 10), 1))) {
            // line 11
            echo "        Paiment accepté
    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 12, $this->source); })()), "state", [], "any", false, false, false, 12), 2))) {
            // line 13
            echo "        Préparation en cours
    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "state", [], "any", false, false, false, 14), 3))) {
            // line 15
            echo "        Livraison en cours
    ";
        }
        // line 17
        echo "    <br/>
    <strong>Commande passée le:</strong> ";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "createdAt", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
        echo "</br>
    <strong>Référence de ma commande:</strong><small>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 19, $this->source); })()), "reference", [], "any", false, false, false, 19), "html", null, true);
        echo "</small></br>
    <strong>Transporteur choisi:</strong>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 20, $this->source); })()), "carriername", [], "any", false, false, false, 20), "html", null, true);
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
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderDetails"]) || array_key_exists("orderDetails", $context) ? $context["orderDetails"] : (function () { throw new RuntimeError('Variable "orderDetails" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 35
            echo "            <tr>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>x";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 38) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 39) / 100), 2, ",", "."), "html", null, true);
            echo " €</td>
                <td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <div class=\"text-right\">
       <strong>Sous-total:</strong> ";
        // line 47
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 47, $this->source); })()), "getTotal", [], "any", false, false, false, 47) / 100), 2, ",", "."), "html", null, true);
        echo " €<br/>
       <strong>Livraison:</strong> ";
        // line 48
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 48, $this->source); })()), "carrierprice", [], "any", false, false, false, 48) / 100), 2, ",", "."), "html", null, true);
        echo " €<br/>
       <strong>Total: </strong> ";
        // line 49
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 49, $this->source); })()), "carrierPrice", [], "any", false, false, false, 49) + twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 49, $this->source); })()), "getTotal", [], "any", false, false, false, 49)) / 100), 2, ",", "."), "html", null, true);
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
        return array (  171 => 49,  167 => 48,  163 => 47,  157 => 43,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  132 => 35,  128 => 34,  111 => 20,  107 => 19,  103 => 18,  100 => 17,  96 => 15,  94 => 14,  91 => 13,  89 => 12,  86 => 11,  84 => 10,  78 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ma commande - La Boutique Française{% endblock %}

{% block content %}
    <h1>Ma commande {{ order.reference }}</h1>
    <a href=\"{{ path('account') }}\">Retour</a>
    <hr><strong></strong>
    <strong>Statut de la commande:</strong>
    {% if order.state == 1 %}
        Paiment accepté
    {% elseif order.state == 2 %}
        Préparation en cours
    {% elseif order.state == 3 %}
        Livraison en cours
    {% endif %}
    <br/>
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
                <td>{{ (product.price / 100)|number_format(2, ',','.') }} €</td>
                <td>{{ (product.total / 100)|number_format(2, ',','.') }} €</td>
                <td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <div class=\"text-right\">
       <strong>Sous-total:</strong> {{ (order.getTotal / 100)|number_format(2,',','.') }} €<br/>
       <strong>Livraison:</strong> {{ (order.carrierprice / 100)|number_format(2,',','.') }} €<br/>
       <strong>Total: </strong> {{ ((order.carrierPrice + order.getTotal) / 100)|number_format(2, ',','.') }} €
    </div>

{% endblock %}", "account/order.show.html.twig", "C:\\wamp64\\www\\SiteMarchand\\templates\\account\\order.show.html.twig");
    }
}
