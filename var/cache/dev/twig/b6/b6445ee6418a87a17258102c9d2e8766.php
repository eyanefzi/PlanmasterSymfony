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

/* store/products.html.twig */
class __TwigTemplate_a4c0a8a048cc975fd3627fcd368ef0e5 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/products.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "store/products.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "store/products.html.twig", 1);
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

        yield "Liste des produits";
        
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
        yield "
    <div class=\"container py-4\">
        <h1 class=\"display-4 text-primary\">🛍️ Produits disponibles</h1>

        <!-- Barre de recherche -->
        <div class=\"row mb-4 justify-content-center\">
            <div class=\"col-md-8\">
                <input type=\"text\" id=\"productSearch\" class=\"form-control\" placeholder=\"Rechercher un produit...\">
            </div>
        </div>

        <!-- Filtres de prix -->
        <div class=\"row mb-4 justify-content-center\">
            <div class=\"col-md-8\">
                <form method=\"get\" class=\"form d-flex justify-content-between align-items-center\">
                    <div class=\"form-group me-3 w-100\">
                        <input type=\"number\" name=\"min\" id=\"min-price\" class=\"form-control form-control-sm w-50\" placeholder=\"Prix minimum\" step=\"0.01\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "query", [], "any", false, false, false, 22), "get", ["min"], "method", false, false, false, 22), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"form-group me-3 w-100\">
                        <input type=\"number\" name=\"max\" id=\"max-price\" class=\"form-control form-control-sm w-50\" placeholder=\"Prix maximum\" step=\"0.01\" value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "query", [], "any", false, false, false, 25), "get", ["max"], "method", false, false, false, 25), "html", null, true);
        yield "\">
                    </div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-sm w-100\">Filtrer</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Notifications -->
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 36
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 37
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "success")) ? ("success") : ("danger"));
                yield " mt-3\">
                    ";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "
        <!-- Liste des produits -->
        <div id=\"productList\" class=\"row row-cols-1 row-cols-md-3 g-3\">
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 46
            yield "                <div class=\"col mb-4\">
                    <div class=\"card shadow-sm rounded border-0\">
                        <img src=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produits/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageUrl", [], "any", false, false, false, 48))), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 48), "html", null, true);
            yield "\" style=\"height: 180px; object-fit: cover;\">
                        <div class=\"card-body d-flex flex-column p-3\">
                            <h5 class=\"card-title text-center text-truncate\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 50), "html", null, true);
            yield "</h5>
                            <p class=\"card-text text-muted text-truncate mb-2\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 51), "html", null, true);
            yield "</p>
                            <p class=\"card-text text-center\">Prix : DT ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 52), "html", null, true);
            yield "</p>
                            <div class=\"mt-auto text-center\">
                                <button type=\"button\" class=\"btn btn-primary btn-sm w-100\" onclick=\"addToCart(";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 54), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 54), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 54), "js"), "html", null, true);
            yield "')\">Ajouter au panier</button>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "        </div>

        <!-- Bouton commander -->
        <div class=\"mt-3 text-center\">
            <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new");
        yield "\" class=\"btn btn-success\">Passer une commande</a>
        </div>
    </div>

    <!-- JQuery pour la recherche instantanée -->
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$(\"#productSearch\").on(\"keyup\", function() {
                var searchQuery = \$(this).val().toLowerCase();
                \$(\"#productList .col\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(searchQuery) > -1);
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
        return "store/products.html.twig";
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
        return array (  221 => 64,  215 => 60,  199 => 54,  194 => 52,  190 => 51,  186 => 50,  179 => 48,  175 => 46,  171 => 45,  166 => 42,  160 => 41,  151 => 38,  146 => 37,  141 => 36,  137 => 35,  124 => 25,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des produits{% endblock %}

{% block body %}

    <div class=\"container py-4\">
        <h1 class=\"display-4 text-primary\">🛍️ Produits disponibles</h1>

        <!-- Barre de recherche -->
        <div class=\"row mb-4 justify-content-center\">
            <div class=\"col-md-8\">
                <input type=\"text\" id=\"productSearch\" class=\"form-control\" placeholder=\"Rechercher un produit...\">
            </div>
        </div>

        <!-- Filtres de prix -->
        <div class=\"row mb-4 justify-content-center\">
            <div class=\"col-md-8\">
                <form method=\"get\" class=\"form d-flex justify-content-between align-items-center\">
                    <div class=\"form-group me-3 w-100\">
                        <input type=\"number\" name=\"min\" id=\"min-price\" class=\"form-control form-control-sm w-50\" placeholder=\"Prix minimum\" step=\"0.01\" value=\"{{ app.request.query.get('min') }}\">
                    </div>
                    <div class=\"form-group me-3 w-100\">
                        <input type=\"number\" name=\"max\" id=\"max-price\" class=\"form-control form-control-sm w-50\" placeholder=\"Prix maximum\" step=\"0.01\" value=\"{{ app.request.query.get('max') }}\">
                    </div>
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-sm w-100\">Filtrer</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Notifications -->
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label == 'success' ? 'success' : 'danger' }} mt-3\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}

        <!-- Liste des produits -->
        <div id=\"productList\" class=\"row row-cols-1 row-cols-md-3 g-3\">
            {% for produit in produits %}
                <div class=\"col mb-4\">
                    <div class=\"card shadow-sm rounded border-0\">
                        <img src=\"{{ asset('uploads/produits/' ~ produit.imageUrl) }}\" class=\"card-img-top\" alt=\"{{ produit.nom }}\" style=\"height: 180px; object-fit: cover;\">
                        <div class=\"card-body d-flex flex-column p-3\">
                            <h5 class=\"card-title text-center text-truncate\">{{ produit.nom }}</h5>
                            <p class=\"card-text text-muted text-truncate mb-2\">{{ produit.description }}</p>
                            <p class=\"card-text text-center\">Prix : DT {{ produit.prix }}</p>
                            <div class=\"mt-auto text-center\">
                                <button type=\"button\" class=\"btn btn-primary btn-sm w-100\" onclick=\"addToCart({{ produit.id }}, {{ produit.prix }}, '{{ produit.nom|e('js') }}')\">Ajouter au panier</button>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

        <!-- Bouton commander -->
        <div class=\"mt-3 text-center\">
            <a href=\"{{ path('app_commande_new') }}\" class=\"btn btn-success\">Passer une commande</a>
        </div>
    </div>

    <!-- JQuery pour la recherche instantanée -->
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            \$(\"#productSearch\").on(\"keyup\", function() {
                var searchQuery = \$(this).val().toLowerCase();
                \$(\"#productList .col\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(searchQuery) > -1);
                });
            });
        });
    </script>

{% endblock %}
", "store/products.html.twig", "D:\\fac\\web project\\eya nefzi 3A\\PlanmasterSymfony-commande\\templates\\store\\products.html.twig");
    }
}
