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

/* order/add.html.twig */
class __TwigTemplate_ddec8a909dcae6177265f2e5d35bec7050cff1764db18a5804ecee048ff5be71 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Paiment de ma commande - La Boutique Française";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h2>Mon récapitulatif</h2>
    <p>Vérifiez vos informations avant de payer votre commande.</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <strong>Mon adresse de livraison</strong><br/>
                <div class=\"form-check mt-4\">
                    ";
        // line 13
        echo (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 13, $this->source); })());
        echo "
                </div>
            <hr>
            <strong>Mon transporteur</strong><br/>
            <div class=\"form-check\">
                ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "<br/>
                ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), "html", null, true);
        echo "<br/>
                ";
        // line 20
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 20, $this->source); })()), "price", [], "any", false, false, false, 20), 2, ",", "."), "html", null, true);
        echo " €
            </div>   
        </div>
        <div class=\"col-md-6\">
            <div class=\"text-center\">
                <b>Ma commande</b><br/>
            </div>
            <div class=\"order-summary\">
            ";
        // line 28
        $context["total"] = null;
        // line 29
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 30
            echo "                    <div class=\"row ";
            if ((1 === twig_compare($context["key"], 0))) {
                echo "mt-2";
            }
            echo "\">
                        <div class=\"col-2\">
                            <img src=\"/uploads/";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 32), "illustration", [], "any", false, false, false, 32), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            echo "\" height=\"75px\">
                        </div>
                        <div class=\"col-8 my-auto\">
                            ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
            echo "<br/>
                            <small>
                                ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 37), "subtitle", [], "any", false, false, false, 37), "html", null, true);
            echo "
                            <br/>
                                x ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 39), "html", null, true);
            echo "
                            </small>
                        </div>
                        <div class=\"col-2 my-auto\">
                           ";
            // line 43
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 43), "price", [], "any", false, false, false, 43) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 43)) / 100), 2, ",", "."), "html", null, true);
            echo " € 
                        </div>
                    </div>
                    ";
            // line 46
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 46, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 46), "price", [], "any", false, false, false, 46) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 46)));
            // line 47
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </div>

            <hr>
            <strong>Sous-Total : </strong> ";
        // line 51
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €<br/>
            <strong>Livraison : </strong> ";
        // line 52
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 52, $this->source); })()), "price", [], "any", false, false, false, 52), 2, ",", "."), "html", null, true);
        echo " €<br/>
            <hr>
            <strong>Total : </strong> ";
        // line 54
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 54, $this->source); })()) / 100) + twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 54, $this->source); })()), "price", [], "any", false, false, false, 54)), 2, ",", "."), "html", null, true);
        echo " €<br/>
        
            <a href=\"\" class=\"btn btn-success btn-block mt-3\">Payer | ";
        // line 56
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 56, $this->source); })()) / 100) + twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 56, $this->source); })()), "price", [], "any", false, false, false, 56)), 2, ",", "."), "html", null, true);
        echo " €</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "order/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 56,  177 => 54,  172 => 52,  168 => 51,  163 => 48,  157 => 47,  155 => 46,  149 => 43,  142 => 39,  137 => 37,  132 => 35,  124 => 32,  116 => 30,  111 => 29,  109 => 28,  98 => 20,  94 => 19,  90 => 18,  82 => 13,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paiment de ma commande - La Boutique Française{% endblock %}

{% block content %}
    <h2>Mon récapitulatif</h2>
    <p>Vérifiez vos informations avant de payer votre commande.</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <strong>Mon adresse de livraison</strong><br/>
                <div class=\"form-check mt-4\">
                    {{ delivery|raw }}
                </div>
            <hr>
            <strong>Mon transporteur</strong><br/>
            <div class=\"form-check\">
                {{ carrier.name }}<br/>
                {{ carrier.description }}<br/>
                {{ carrier.price|number_format(2,',','.')}} €
            </div>   
        </div>
        <div class=\"col-md-6\">
            <div class=\"text-center\">
                <b>Ma commande</b><br/>
            </div>
            <div class=\"order-summary\">
            {% set total = null %}
                {% for key,product in cart %}
                    <div class=\"row {% if key > 0 %}mt-2{% endif %}\">
                        <div class=\"col-2\">
                            <img src=\"/uploads/{{ product.product.illustration }}\" alt=\"{{ product.product.name }}\" height=\"75px\">
                        </div>
                        <div class=\"col-8 my-auto\">
                            {{ product.product.name }}<br/>
                            <small>
                                {{ product.product.subtitle }}
                            <br/>
                                x {{ product.quantity }}
                            </small>
                        </div>
                        <div class=\"col-2 my-auto\">
                           {{ ((product.product.price * product.quantity) / 100)|number_format(2,',','.') }} € 
                        </div>
                    </div>
                    {% set total = total + (product.product.price * product.quantity) %}
                {% endfor %}
            </div>

            <hr>
            <strong>Sous-Total : </strong> {{ (total / 100)|number_format(2,',','.')}} €<br/>
            <strong>Livraison : </strong> {{ (carrier.price)|number_format(2,',','.')}} €<br/>
            <hr>
            <strong>Total : </strong> {{ ((total / 100) + (carrier.price))|number_format(2,',','.')}} €<br/>
        
            <a href=\"\" class=\"btn btn-success btn-block mt-3\">Payer | {{ ((total / 100) + (carrier.price))|number_format(2,',','.')}} €</a>
        </div>
    </div>
{% endblock %}
", "order/add.html.twig", "C:\\wamp64\\www\\SiteMarchand\\templates\\order\\add.html.twig");
    }
}
