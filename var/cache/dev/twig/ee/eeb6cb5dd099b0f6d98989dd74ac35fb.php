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

/* base.html.twig */
class __TwigTemplate_69e0071b8d127e80af55ff8cdcd6c8e6 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Favicon minimal -->
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 128 128'><text y='1.2em' font-size='96'>⚫️</text><text y='1.3em' x='0.2em' font-size='76' fill='%23fff'>sf</text></svg>\">

    <!-- ✅ Bootstrap -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- ✅ Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        main {
            padding-top: 20px;
            padding-bottom: 40px;
        }

        .navbar-brand {
            font-weight: bold;
        }

        footer {
            padding: 20px 0;
            background-color: #212529;
            color: #ced4da;
        }

        .flash-message {
            margin-bottom: 20px;
        }

        /* ✅ Pagination */
        .pagination {
            margin: 0;
        }

        .pagination .page-item {
            margin: 0 2px;
        }

        .pagination .page-link {
            padding: 0.4rem 0.75rem;
            font-size: 0.875rem;
            color: #0d6efd;
            border-radius: 0.5rem;
            border: 1px solid #dee2e6;
            transition: background-color 0.2s ease-in-out;
        }

        .pagination .page-item.active .page-link {
            background-color: #0d6efd;
            border-color: #0d6efd;
            color: white;
            font-weight: bold;
        }

        .pagination .page-item.disabled .page-link {
            color: #6c757d;
            background-color: #f8f9fa;
        }

        /* ✅ Small card for pagination container */
        .pagination-container {
            max-width: 200px;
            margin: auto;
        }

        .pagination-card {
            border-radius: 1rem;
        }
    </style>

    ";
        // line 80
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 81
        yield "</head>
<body>

    <!-- ✅ Flash Messages -->
    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "flashes", [], "any", false, false, false, 85));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 86
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 87
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show m-3 flash-message\" role=\"alert\">
                ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "
    <!-- ✅ Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark sticky-top\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"/\">🛠 Planmaster</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample\" aria-controls=\"navbarsExample\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarsExample\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/commande\">Commandes</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/produit\">Produits</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/client\">Clients</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ✅ Main Content -->
    <main class=\"container\">
        ";
        // line 115
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 116
        yield "    </main>

    <!-- ✅ Footer -->
    <footer class=\"text-center\">
        <div class=\"container\">
            <p class=\"mb-1\">&copy; ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Symfony App</p>
            <p class=\"small\">
                Built with ❤️ using Symfony & Bootstrap |
                <a href=\"https://symfony.com/\" class=\"text-decoration-none text-light\">Symfony Docs</a>
            </p>
        </div>
    </footer>

    <!-- ✅ Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

    ";
        // line 132
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 133
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Mon Application Symfony";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 115
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 132
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  303 => 132,  281 => 115,  259 => 80,  236 => 5,  223 => 133,  221 => 132,  207 => 121,  200 => 116,  198 => 115,  174 => 93,  168 => 92,  158 => 88,  153 => 87,  148 => 86,  144 => 85,  138 => 81,  136 => 80,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Mon Application Symfony{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Favicon minimal -->
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 128 128'><text y='1.2em' font-size='96'>⚫️</text><text y='1.3em' x='0.2em' font-size='76' fill='%23fff'>sf</text></svg>\">

    <!-- ✅ Bootstrap -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- ✅ Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        main {
            padding-top: 20px;
            padding-bottom: 40px;
        }

        .navbar-brand {
            font-weight: bold;
        }

        footer {
            padding: 20px 0;
            background-color: #212529;
            color: #ced4da;
        }

        .flash-message {
            margin-bottom: 20px;
        }

        /* ✅ Pagination */
        .pagination {
            margin: 0;
        }

        .pagination .page-item {
            margin: 0 2px;
        }

        .pagination .page-link {
            padding: 0.4rem 0.75rem;
            font-size: 0.875rem;
            color: #0d6efd;
            border-radius: 0.5rem;
            border: 1px solid #dee2e6;
            transition: background-color 0.2s ease-in-out;
        }

        .pagination .page-item.active .page-link {
            background-color: #0d6efd;
            border-color: #0d6efd;
            color: white;
            font-weight: bold;
        }

        .pagination .page-item.disabled .page-link {
            color: #6c757d;
            background-color: #f8f9fa;
        }

        /* ✅ Small card for pagination container */
        .pagination-container {
            max-width: 200px;
            margin: auto;
        }

        .pagination-card {
            border-radius: 1rem;
        }
    </style>

    {% block stylesheets %}{% endblock %}
</head>
<body>

    <!-- ✅ Flash Messages -->
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} alert-dismissible fade show m-3 flash-message\" role=\"alert\">
                {{ message }}
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
            </div>
        {% endfor %}
    {% endfor %}

    <!-- ✅ Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark sticky-top\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"/\">🛠 Planmaster</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarsExample\" aria-controls=\"navbarsExample\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarsExample\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/commande\">Commandes</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/produit\">Produits</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"/client\">Clients</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ✅ Main Content -->
    <main class=\"container\">
        {% block body %}{% endblock %}
    </main>

    <!-- ✅ Footer -->
    <footer class=\"text-center\">
        <div class=\"container\">
            <p class=\"mb-1\">&copy; {{ \"now\"|date(\"Y\") }} Symfony App</p>
            <p class=\"small\">
                Built with ❤️ using Symfony & Bootstrap |
                <a href=\"https://symfony.com/\" class=\"text-decoration-none text-light\">Symfony Docs</a>
            </p>
        </div>
    </footer>

    <!-- ✅ Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

    {% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\DELL\\Desktop\\eyasymfonyFinal\\gestioncommande\\templates\\base.html.twig");
    }
}
