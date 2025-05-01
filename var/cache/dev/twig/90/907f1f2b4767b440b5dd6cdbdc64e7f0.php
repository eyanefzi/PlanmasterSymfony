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

/* commande/index.html.twig */
class __TwigTemplate_edb533ca3a73cb9654f477686174fd9d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "commande/index.html.twig", 1);
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

        yield "Liste des Commandes";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">📦 Liste des Commandes</h1>

        <!-- Formulaire de recherche AJAX -->
        <div class=\"row mb-4 justify-content-center\">
            <div class=\"col-md-6\">
                <input type=\"text\" id=\"ajax-search\" class=\"form-control\" placeholder=\"Rechercher une commande...\">
            </div>
        </div>

        <div class=\"table-responsive shadow-sm rounded\">
            <table class=\"table table-striped table-hover align-middle\">
                <thead class=\"table-dark\">
                <tr>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Status</th>
                    <th scope=\"col\">Montant</th>
                    <th scope=\"col\">Quantité</th>
                    <th scope=\"col\">Payée</th>
                    <th scope=\"col\">Actions</th>
                </tr>
                </thead>
                <tbody id=\"commande-results\">
                ";
        // line 29
        yield from $this->loadTemplate("commande/_table_rows.html.twig", "commande/index.html.twig", 29)->unwrap()->yield(CoreExtension::merge($context, ["commandes" => (isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 29, $this->source); })())]));
        // line 30
        yield "                </tbody>
            </table>
        </div>

        <div class=\"d-flex justify-content-between align-items-center mt-4\">
            <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new");
        yield "\" class=\"btn btn-success shadow-sm\">
                ➕ Nouvelle Commande
            </a>
            <div>
                ";
        // line 39
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 39, $this->source); })()));
        yield "
            </div>
            <div class=\"text-end\">
                <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_export_pdf");
        yield "\" class=\"btn btn-danger\">Export to PDF</a>
            </div>
        </div>

    </div>

    <!-- JQuery AJAX -->
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('#ajax-search').keyup(function() {
                var query = \$(this).val();
                \$.ajax({
                    url: \"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_search_ajax");
        yield "\",
                    type: 'GET',
                    data: { search: query },
                    success: function(data) {
                        \$('#commande-results').html(data);
                    }
                });
            });
        });
    </script>

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
        return "commande/index.html.twig";
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
        return array (  163 => 55,  147 => 42,  141 => 39,  134 => 35,  127 => 30,  125 => 29,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Liste des Commandes{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">📦 Liste des Commandes</h1>

        <!-- Formulaire de recherche AJAX -->
        <div class=\"row mb-4 justify-content-center\">
            <div class=\"col-md-6\">
                <input type=\"text\" id=\"ajax-search\" class=\"form-control\" placeholder=\"Rechercher une commande...\">
            </div>
        </div>

        <div class=\"table-responsive shadow-sm rounded\">
            <table class=\"table table-striped table-hover align-middle\">
                <thead class=\"table-dark\">
                <tr>
                    <th scope=\"col\">Date</th>
                    <th scope=\"col\">Status</th>
                    <th scope=\"col\">Montant</th>
                    <th scope=\"col\">Quantité</th>
                    <th scope=\"col\">Payée</th>
                    <th scope=\"col\">Actions</th>
                </tr>
                </thead>
                <tbody id=\"commande-results\">
                {% include 'commande/_table_rows.html.twig' with { 'commandes': commandes } %}
                </tbody>
            </table>
        </div>

        <div class=\"d-flex justify-content-between align-items-center mt-4\">
            <a href=\"{{ path('app_commande_new') }}\" class=\"btn btn-success shadow-sm\">
                ➕ Nouvelle Commande
            </a>
            <div>
                {{ knp_pagination_render(commandes) }}
            </div>
            <div class=\"text-end\">
                <a href=\"{{ path('app_commande_export_pdf') }}\" class=\"btn btn-danger\">Export to PDF</a>
            </div>
        </div>

    </div>

    <!-- JQuery AJAX -->
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$('#ajax-search').keyup(function() {
                var query = \$(this).val();
                \$.ajax({
                    url: \"{{ path('app_commande_search_ajax') }}\",
                    type: 'GET',
                    data: { search: query },
                    success: function(data) {
                        \$('#commande-results').html(data);
                    }
                });
            });
        });
    </script>

{% endblock %}
", "commande/index.html.twig", "D:\\fac\\web project\\eya nefzi 3A\\PlanmasterSymfony-commande\\templates\\commande\\index.html.twig");
    }
}
