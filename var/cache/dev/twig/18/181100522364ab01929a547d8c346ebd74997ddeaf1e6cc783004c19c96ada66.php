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
            'javascript' => [$this, 'block_javascript'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
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
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 4
        echo "    <script src=\"https://js.stripe.com/v3/\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Paiement de ma commande - La Boutique Française";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    <h2>Mon récapitulatif</h2>
    <p>Vérifiez vos informations avant de payer votre commande.</p>
    <hr>
    <div class=\"row\">
        <div class=\"col-md-6\">
            <strong>Mon adresse de livraison</strong><br/>
                <div class=\"form-check mt-4\">
                    ";
        // line 17
        echo (isset($context["delivery"]) || array_key_exists("delivery", $context) ? $context["delivery"] : (function () { throw new RuntimeError('Variable "delivery" does not exist.', 17, $this->source); })());
        echo "
                </div>
            <hr>
            <strong>Mon transporteur</strong><br/>
            <div class=\"form-check\">
                ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "<br/>
                ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), "html", null, true);
        echo "<br/>
                ";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 24, $this->source); })()), "price", [], "any", false, false, false, 24) / 100), 2, ",", "."), "html", null, true);
        echo " €
            </div>   
        </div>
        <div class=\"col-md-6\">
            <div class=\"text-center\">
                <b>Ma commande</b><br/>
            </div>
            <div class=\"order-summary\">
            ";
        // line 32
        $context["total"] = null;
        // line 33
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 34
            echo "                    <div class=\"row ";
            if ((1 === twig_compare($context["key"], 0))) {
                echo "mt-2";
            }
            echo "\">
                        <div class=\"col-2\">
                            <img src=\"/uploads/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "illustration", [], "any", false, false, false, 36), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
            echo "\" height=\"75px\">
                        </div>
                        <div class=\"col-8 my-auto\">
                            ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
            echo "<br/>
                            <small>
                                ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 41), "subtitle", [], "any", false, false, false, 41), "html", null, true);
            echo "
                            <br/>
                                x ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 43), "html", null, true);
            echo "
                            </small>
                        </div>
                        <div class=\"col-2 my-auto\">
                           ";
            // line 47
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 47), "price", [], "any", false, false, false, 47) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 47)) / 100), 2, ",", "."), "html", null, true);
            echo " € 
                        </div>
                    </div>
                    ";
            // line 50
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 50, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 50), "price", [], "any", false, false, false, 50) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 50)));
            // line 51
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </div>

            <hr>
            <strong>Sous-Total : </strong> ";
        // line 55
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 55, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        echo " €<br/>
            <strong>Livraison : </strong> ";
        // line 56
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 56, $this->source); })()), "price", [], "any", false, false, false, 56) / 100), 2, ",", "."), "html", null, true);
        echo " €<br/>
            <hr>
            <strong>Total : </strong> ";
        // line 58
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 58, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 58, $this->source); })()), "price", [], "any", false, false, false, 58) / 100)), 2, ",", "."), "html", null, true);
        echo " €<br/>
        
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stripe_create_session", ["reference" => (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 60, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\">Payer | ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 60, $this->source); })()) / 100) + (twig_get_attribute($this->env, $this->source, (isset($context["carrier"]) || array_key_exists("carrier", $context) ? $context["carrier"] : (function () { throw new RuntimeError('Variable "carrier" does not exist.', 60, $this->source); })()), "price", [], "any", false, false, false, 60) / 100)), 2, ",", "."), "html", null, true);
        echo " €</a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 65
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 66
        echo "    <script type=\"text/javascript\">
        var stripe = Stripe(\"sk_test_51Kiag2EsJLJBd23IRwidXrhQvxJgm8ecQ9EKsLWhMZvhXj2qo8oCQaGeKpGmnB5FXI4NOcivOAFWWZUzz9NRzgo800BuAtwrjM\");
        var checkoutButton = document.getElementById(\"checkout-button\");
        checkoutButton.addEventListener(\"click\", function(){
            fetch(\"/commande/create-session/";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["reference"]) || array_key_exists("reference", $context) ? $context["reference"] : (function () { throw new RuntimeError('Variable "reference" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "\", {
                method:\"POST\",
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(session) {
                if(session.order === 'order'){
                    window.location.replace('";
        // line 78
        echo "order";
        echo "');
                }else{
                   return stripe.redirectToCheckout({sessionId:session.id});  
                }
            })
            .then(function(result){
                if(result.error){
                    alert(result.error.message);
                }
            })
            .catch(function(error){
                console.error(\"Error:\",error);
            });
        });
    </script>
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
        return array (  236 => 78,  225 => 70,  219 => 66,  212 => 65,  199 => 60,  194 => 58,  189 => 56,  185 => 55,  180 => 52,  174 => 51,  172 => 50,  166 => 47,  159 => 43,  154 => 41,  149 => 39,  141 => 36,  133 => 34,  128 => 33,  126 => 32,  115 => 24,  111 => 23,  107 => 22,  99 => 17,  90 => 10,  83 => 9,  70 => 7,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block javascript %}
    <script src=\"https://js.stripe.com/v3/\"></script>
{% endblock %}

{% block title %}Paiement de ma commande - La Boutique Française{% endblock %}

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
                {{ (carrier.price / 100)|number_format(2,',','.')}} €
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
            <strong>Livraison : </strong> {{ (carrier.price / 100)|number_format(2,',','.')}} €<br/>
            <hr>
            <strong>Total : </strong> {{ ((total / 100) + (carrier.price / 100))|number_format(2,',','.')}} €<br/>
        
            <a href=\"{{ path('stripe_create_session', {'reference': reference}) }}\" class=\"btn btn-success btn-block mt-3\" id=\"checkout-button\">Payer | {{ ((total / 100) + (carrier.price / 100))|number_format(2,',','.')}} €</a>
        </div>
    </div>
{% endblock %}

{% block script %}
    <script type=\"text/javascript\">
        var stripe = Stripe(\"sk_test_51Kiag2EsJLJBd23IRwidXrhQvxJgm8ecQ9EKsLWhMZvhXj2qo8oCQaGeKpGmnB5FXI4NOcivOAFWWZUzz9NRzgo800BuAtwrjM\");
        var checkoutButton = document.getElementById(\"checkout-button\");
        checkoutButton.addEventListener(\"click\", function(){
            fetch(\"/commande/create-session/{{ reference }}\", {
                method:\"POST\",
            })
            .then(function(response) {
                return response.json();
            })
            .then(function(session) {
                if(session.order === 'order'){
                    window.location.replace('{{ ('order') }}');
                }else{
                   return stripe.redirectToCheckout({sessionId:session.id});  
                }
            })
            .then(function(result){
                if(result.error){
                    alert(result.error.message);
                }
            })
            .catch(function(error){
                console.error(\"Error:\",error);
            });
        });
    </script>
{% endblock %}
", "order/add.html.twig", "C:\\wamp64\\www\\SiteMarchand\\templates\\order\\add.html.twig");
    }
}
