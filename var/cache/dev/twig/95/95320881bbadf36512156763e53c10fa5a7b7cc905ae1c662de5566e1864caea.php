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

/* base.html.twig */
class __TwigTemplate_8ec5c54221ccdbc22f3b6c2ebf144283524ed21e7ab64e7918ebfa81998030fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascript' => [$this, 'block_javascript'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"La boutique qui vend uniquement du made in France\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <title>
        ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    </title>
    <!-- Bootstrap core CSS -->

    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/boutiquefrancaise.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 32
        $this->displayBlock('javascript', $context, $blocks);
        // line 35
        echo "</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">La Boutique Française</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("products");
        echo "\">Nos produits</a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Qui sommes-nous?</a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"</a>
                </li>
            </ul>
            <div class=\"navbar-item-custom\">
                ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56)) {
            // line 57
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\">Mon compte<small>(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "firstname", [], "any", false, false, false, 57), "html", null, true);
            echo ")</small></a> | <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 59
            echo "                    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a> | <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\">Inscription</a>
                ";
        }
        // line 61
        echo "            </div>
            <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\">
                <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/shopping-cart.png"), "html", null, true);
        echo "\" class=\"cart-icon\" alt=\"Mon panier\">
            </a>
        </div>
    </nav>
</header>

<main role=\"main\">

    ";
        // line 71
        if (        $this->hasBlock("carousel", $context, $blocks)) {
            // line 72
            echo "    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 75
                echo "                <li data-target=\"#myCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if ((0 === twig_compare($context["key"], 0))) {
                    echo " class=\"active\"";
                }
                echo "></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "        </ol>
        <div class=\"carousel-inner\">
        ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 79, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["header"]) {
                // line 80
                echo "            <div class=\"carousel-item ";
                if ((0 === twig_compare($context["key"], 0))) {
                    echo " active ";
                }
                echo "\" style=\"background: url('/uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "illustration", [], "any", false, false, false, 80), "html", null, true);
                echo "'); background-size:cover;\">
                <div class=\"container\">
                    <div class=\"carousel-caption text-left\">
                        <h1>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 83), "html", null, true);
                echo "</h1>
                        <p>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 84), "html", null, true);
                echo "</p>
                        <p><a class=\"btn btn-lg btn-info\" href=\"";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnUrl", [], "any", false, false, false, 85), "html", null, true);
                echo "\" role=\"button\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["header"], "btnTitle", [], "any", false, false, false, 85), "html", null, true);
                echo "</a></p>
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "        </div>
        <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    ";
        }
        // line 101
        echo "

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing ";
        // line 107
        if ( !        $this->hasBlock("carousel", $context, $blocks)) {
            echo "mt-5";
        }
        echo " product-container\">

        ";
        // line 109
        $this->displayBlock('content', $context, $blocks);
        // line 111
        echo "
    </div><!-- /.container -->

    <!-- FOOTER -->
    <footer class=\"footer-custom\">
        <p class=\"float-right\"><a href=\"#\">Back to top</a></p>
        <p>
            &copy; 2022 La Boutique Française<br/>
            <small>La Boutique 100% made in France<br/>
        </p>
    </footer>
</main>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
</body>
";
        // line 126
        $this->displayBlock('script', $context, $blocks);
        // line 128
        echo "</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "La Boutique Française";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 33
        echo "        <script src=\"https://kit.fontawesome.com/0e691e95a2.js\" crossorigin=\"anonymous\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 109
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 110
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 126
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 126,  318 => 110,  311 => 109,  303 => 33,  296 => 32,  283 => 9,  276 => 128,  274 => 126,  269 => 124,  254 => 111,  252 => 109,  245 => 107,  237 => 101,  224 => 90,  211 => 85,  207 => 84,  203 => 83,  192 => 80,  188 => 79,  184 => 77,  171 => 75,  167 => 74,  163 => 72,  161 => 71,  150 => 63,  146 => 62,  143 => 61,  135 => 59,  125 => 57,  123 => 56,  116 => 52,  107 => 46,  97 => 39,  91 => 35,  89 => 32,  85 => 31,  81 => 30,  61 => 13,  56 => 10,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"La boutique qui vend uniquement du made in France\">
    <meta name=\"generator\" content=\"Jekyll v4.1.1\">
    <title>
        {% block title %}La Boutique Française{% endblock %}
    </title>
    <!-- Bootstrap core CSS -->

    <link href=\"{{ asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link href=\"{{ asset('assets/css/carousel.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/css/boutiquefrancaise.css') }}\" rel=\"stylesheet\">
    {% block javascript %}
        <script src=\"https://kit.fontawesome.com/0e691e95a2.js\" crossorigin=\"anonymous\"></script>
    {% endblock %}
</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
        <a class=\"navbar-brand\" href=\"{{ path('home') }}\">La Boutique Française</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{path('products')}}\">Nos produits</a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"#\">Qui sommes-nous?</a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('contact') }}\"</a>
                </li>
            </ul>
            <div class=\"navbar-item-custom\">
                {% if app.user %}
                    <a href=\"{{ path('account') }}\">Mon compte<small>({{ app.user.firstname }})</small></a> | <a href=\"{{ path('app_logout')}}\">Déconnexion</a>
                {% else %}
                    <a href=\"{{ path('app_login')}}\">Connexion</a> | <a href=\"{{ path('register')}}\">Inscription</a>
                {% endif %}
            </div>
            <a href=\"{{ path('cart') }}\">
                <img src=\"{{ asset('assets/img/shopping-cart.png') }}\" class=\"cart-icon\" alt=\"Mon panier\">
            </a>
        </div>
    </nav>
</header>

<main role=\"main\">

    {% if block('carousel') is defined %}
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            {% for key,header in headers %}
                <li data-target=\"#myCarousel\" data-slide-to=\"{{ key }}\" {% if key == 0 %} class=\"active\"{% endif %}></li>
            {% endfor %}
        </ol>
        <div class=\"carousel-inner\">
        {% for key, header in headers %}
            <div class=\"carousel-item {% if key == 0 %} active {% endif %}\" style=\"background: url('/uploads/{{ header.illustration }}'); background-size:cover;\">
                <div class=\"container\">
                    <div class=\"carousel-caption text-left\">
                        <h1>{{ header.title }}</h1>
                        <p>{{ header.content }}</p>
                        <p><a class=\"btn btn-lg btn-info\" href=\"{{ header.btnUrl }}\" role=\"button\">{{ header.btnTitle }}</a></p>
                    </div>
                </div>
            </div>
        {% endfor %}
        </div>
        <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    {% endif %}


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing {% if block('carousel') is not defined %}mt-5{% endif %} product-container\">

        {% block content %}
        {% endblock %}

    </div><!-- /.container -->

    <!-- FOOTER -->
    <footer class=\"footer-custom\">
        <p class=\"float-right\"><a href=\"#\">Back to top</a></p>
        <p>
            &copy; 2022 La Boutique Française<br/>
            <small>La Boutique 100% made in France<br/>
        </p>
    </footer>
</main>
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
<script src=\"{{ asset('assets/js/bootstrap.bundle.js') }}\"></script>
</body>
{% block script %}
{% endblock %}
</html>", "base.html.twig", "C:\\wamp64\\www\\SiteMarchand\\templates\\base.html.twig");
    }
}
