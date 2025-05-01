<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* produit/index.html.twig */
class __TwigTemplate_71876f89e53b2cb9b27976b7c164be7c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "produit/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Liste des Produits";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <style>
        /* Pagination styling */
        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            font-size: 14px;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a, .pagination span {
            margin: 0 5px;
            padding: 8px 12px;
            border: 1px solid #3498db;
            border-radius: 20px; /* Rounded border */
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
            color: #3498db; /* Text color for pagination links */
            background-color: #f7f7f7; /* Background color for pagination links */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Added shadow */
        }

        .pagination a:hover {
            background-color: #2980b9;
            color: #fff; /* Text color on hover */
        }

        .pagination .current {
            background-color: #2c3e50;
            color: #fff;
        }

        .pagination .next, .pagination .last,
        .pagination .previous, .pagination .first {
            font-weight: bold;
        }

        .pagination a[rel=\"prev\"], .pagination a[rel=\"next\"] {
            text-decoration: none;
        }

        /* Styling for search form */
        #searchForm {
            margin-bottom: 20px;
        }
    </style>
<div class=\"container py-4\">
    <h1 class=\"mb-4 text-primary\">🗂️ Liste des Produits</h1>

    <div class=\"row mb-4\">
        <div class=\"col-md-8\">
            <form method=\"get\" class=\"row g-2\" id=\"search-form\">
                <div class=\"col-md-3\">
                    <input type=\"number\" name=\"min\" id=\"min-input\" class=\"form-control\" placeholder=\"Prix min\" step=\"0.01\">
                </div>
                <div class=\"col-md-3\">
                    <input type=\"number\" name=\"max\" id=\"max-input\" class=\"form-control\" placeholder=\"Prix max\" step=\"0.01\">
                </div>
                <div class=\"col-md-1\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\">OK</button>
                </div>
            </form>
        </div>
        <div class=\"col-md-4 text-end\">
            <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
        yield "\" class=\"btn btn-success\">➕ Ajouter un produit</a>
        </div>
    </div>

    <div id=\"produit-list\">
        ";
        // line 77
        yield from $this->loadTemplate("produit/_liste.html.twig", "produit/index.html.twig", 77)->unwrap()->yield(CoreExtension::merge($context, ["produits" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 77, $this->source); })()), "items", [], "any", false, false, false, 77)]));
        // line 78
        yield "    </div>

    ";
        // line 80
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 80, $this->source); })())) > 0)) {
            // line 81
            yield "        <div class=\"d-flex justify-content-center mt-3\">
            ";
            // line 82
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 82, $this->source); })()));
            yield "
        </div>
    ";
        }
        // line 85
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "produit/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  193 => 85,  187 => 82,  184 => 81,  182 => 80,  178 => 78,  176 => 77,  168 => 72,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Liste des Produits{% endblock %}

{% block body %}
    <style>
        /* Pagination styling */
        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
            font-size: 14px;
            justify-content: center;
            margin-top: 20px;
        }

        .pagination a, .pagination span {
            margin: 0 5px;
            padding: 8px 12px;
            border: 1px solid #3498db;
            border-radius: 20px; /* Rounded border */
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
            color: #3498db; /* Text color for pagination links */
            background-color: #f7f7f7; /* Background color for pagination links */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Added shadow */
        }

        .pagination a:hover {
            background-color: #2980b9;
            color: #fff; /* Text color on hover */
        }

        .pagination .current {
            background-color: #2c3e50;
            color: #fff;
        }

        .pagination .next, .pagination .last,
        .pagination .previous, .pagination .first {
            font-weight: bold;
        }

        .pagination a[rel=\"prev\"], .pagination a[rel=\"next\"] {
            text-decoration: none;
        }

        /* Styling for search form */
        #searchForm {
            margin-bottom: 20px;
        }
    </style>
<div class=\"container py-4\">
    <h1 class=\"mb-4 text-primary\">🗂️ Liste des Produits</h1>

    <div class=\"row mb-4\">
        <div class=\"col-md-8\">
            <form method=\"get\" class=\"row g-2\" id=\"search-form\">
                <div class=\"col-md-3\">
                    <input type=\"number\" name=\"min\" id=\"min-input\" class=\"form-control\" placeholder=\"Prix min\" step=\"0.01\">
                </div>
                <div class=\"col-md-3\">
                    <input type=\"number\" name=\"max\" id=\"max-input\" class=\"form-control\" placeholder=\"Prix max\" step=\"0.01\">
                </div>
                <div class=\"col-md-1\">
                    <button type=\"submit\" class=\"btn btn-primary w-100\">OK</button>
                </div>
            </form>
        </div>
        <div class=\"col-md-4 text-end\">
            <a href=\"{{ path('app_produit_new') }}\" class=\"btn btn-success\">➕ Ajouter un produit</a>
        </div>
    </div>

    <div id=\"produit-list\">
        {% include 'produit/_liste.html.twig' with { produits: pagination.items } %}
    </div>

    {% if pagination|length > 0 %}
        <div class=\"d-flex justify-content-center mt-3\">
            {{ knp_pagination_render(pagination) }}
        </div>
    {% endif %}
</div>
{% endblock %}
", "produit/index.html.twig", "D:\\fac\\web project\\eya nefzi 3A\\PlanmasterSymfony-commande\\templates\\produit\\index.html.twig");
    }
}
