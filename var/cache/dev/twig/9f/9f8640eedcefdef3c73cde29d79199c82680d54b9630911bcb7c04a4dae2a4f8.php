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

/* account/index.html.twig */
class __TwigTemplate_aba2522086ad683c5e3a99da2f4c731520305bb11264f583f7745b7e4d14c153 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon compte - La Boutique Française";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Mon compte</h1>
    ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
            echo "        <small><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Vous êtes un administrateur, accéder au backoffice ?</a></small><br/>
    ";
        }
        // line 10
        echo "    Bienvenue ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "firstname", [], "any", false, false, false, 10), "html", null, true);
        echo " dans votre compte<br/>
    C'est dans cet espace que vous allez pouvoir
    gérer toutes vos informations personnelles.
    <hr>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"account-item text-center\">
                <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/password.png"), "html", null, true);
        echo "\" alt=\"Modifier mon mot de passe\" style=\"width:41px\">
                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_password");
        echo "\">Modifier mon mot de passe</a>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"account-item text-center\">
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/contact.png"), "html", null, true);
        echo "\" alt=\"Gérer mes adresses\" style=\"width:41px\">
                <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_address");
        echo "\">Gérer mes adresses</a>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"account-item text-center\">
            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/purchase.png"), "html", null, true);
        echo "\" alt=\"Mes commandes\" style=\"width:41px\">
                <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order");
        echo "\">Mes commandes</a>
            </div>
        </div>
    <hr>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 30,  119 => 29,  111 => 24,  107 => 23,  99 => 18,  95 => 17,  84 => 10,  78 => 8,  76 => 7,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte - La Boutique Française{% endblock %}

{% block content %}
    <h1>Mon compte</h1>
    {% if is_granted(\"ROLE_ADMIN\") %}
        <small><a href=\"{{ path('admin') }}\">Vous êtes un administrateur, accéder au backoffice ?</a></small><br/>
    {% endif %}
    Bienvenue {{ app.user.firstname }} dans votre compte<br/>
    C'est dans cet espace que vous allez pouvoir
    gérer toutes vos informations personnelles.
    <hr>
    <div class=\"row\">
        <div class=\"col-md-4\">
            <div class=\"account-item text-center\">
                <img src=\"{{  asset('assets/img/password.png') }}\" alt=\"Modifier mon mot de passe\" style=\"width:41px\">
                <a href=\"{{ path('account_password')}}\">Modifier mon mot de passe</a>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"account-item text-center\">
            <img src=\"{{ asset('assets/img/contact.png')  }}\" alt=\"Gérer mes adresses\" style=\"width:41px\">
                <a href=\"{{ path('account_address')}}\">Gérer mes adresses</a>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"account-item text-center\">
            <img src=\"{{ asset('assets/img/purchase.png') }}\" alt=\"Mes commandes\" style=\"width:41px\">
                <a href=\"{{ path('account_order')}}\">Mes commandes</a>
            </div>
        </div>
    <hr>
{% endblock %}
", "account/index.html.twig", "C:\\wamp64\\www\\SiteMarchand\\templates\\account\\index.html.twig");
    }
}
