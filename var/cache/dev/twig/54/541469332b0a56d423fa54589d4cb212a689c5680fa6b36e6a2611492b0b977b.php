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

/* order/index.html.twig */
class __TwigTemplate_68b2b3b7f1a84736b3d623eab504b11f44869d7a55ee5706c813e507a2f72177 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Valider ma commande - La Boutique Française";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h2>Je passe ma commande</h2>
    <p>Choisissez vos préférences avant de passer votre commande sur La Boutique Française.</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 11
        ob_start();
        // line 12
        echo "                ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order_recap")]);
        echo "
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_end');
        echo "
            ";
        $context["formHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo "
            ";
        // line 16
        echo twig_replace_filter((isset($context["formHtml"]) || array_key_exists("formHtml", $context) ? $context["formHtml"] : (function () { throw new RuntimeError('Variable "formHtml" does not exist.', 16, $this->source); })()), ["[br]" => "<br/>"]);
        echo "
        </div>
        <div class=\"col-md-6\">
            <div class=\"text-center\">
                <b>Récap de ma commande.</b><br/>
                <p>Retrouvez le récapitulatif de vos produits.</p>
            </div>
            <div class=\"order-summary\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 25
            echo "                    <div class=\"row ";
            if ((1 === twig_compare($context["key"], 0))) {
                echo "mt-2";
            }
            echo "\">
                        <div class=\"col-2\">
                            <img src=\"/uploads/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 27), "illustration", [], "any", false, false, false, 27), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "\" height=\"75px\">
                        </div>
                        <div class=\"col-8 my-auto\">
                            ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "<br/>
                            <small>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "subtitle", [], "any", false, false, false, 31), "html", null, true);
            echo "</small>
                        </div>
                        <div class=\"col-2 my-auto\">
                            x ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 34), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 38,  136 => 34,  130 => 31,  126 => 30,  118 => 27,  110 => 25,  106 => 24,  95 => 16,  92 => 15,  87 => 13,  82 => 12,  80 => 11,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Valider ma commande - La Boutique Française{% endblock %}

{% block content %}
    <h2>Je passe ma commande</h2>
    <p>Choisissez vos préférences avant de passer votre commande sur La Boutique Française.</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            {% set formHtml %}
                {{ form_start(form, {action:path('order_recap')}) }}
                {{ form_end(form) }}
            {% endset %}

            {{ formHtml|replace({'[br]':'<br/>'})|raw }}
        </div>
        <div class=\"col-md-6\">
            <div class=\"text-center\">
                <b>Récap de ma commande.</b><br/>
                <p>Retrouvez le récapitulatif de vos produits.</p>
            </div>
            <div class=\"order-summary\">
                {% for key,product in cart %}
                    <div class=\"row {% if key > 0 %}mt-2{% endif %}\">
                        <div class=\"col-2\">
                            <img src=\"/uploads/{{ product.product.illustration }}\" alt=\"{{ product.product.name }}\" height=\"75px\">
                        </div>
                        <div class=\"col-8 my-auto\">
                            {{ product.product.name }}<br/>
                            <small>{{ product.product.subtitle }}</small>
                        </div>
                        <div class=\"col-2 my-auto\">
                            x {{ product.quantity }}
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
", "order/index.html.twig", "C:\\wamp64\\www\\SiteMarchand\\templates\\order\\index.html.twig");
    }
}
