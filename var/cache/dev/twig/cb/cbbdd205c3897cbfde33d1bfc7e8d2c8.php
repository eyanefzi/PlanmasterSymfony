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

/* base2.html.twig */
class __TwigTemplate_f57b865acb7fa9364f11fcb070d462dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

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
       html, body {
    height: 100%;
    margin: 0;
}

body {
    display: flex;
    flex-direction: column;
}

main {
    flex: 1; /* This makes the main content take up the available space */
    padding-top: 20px;
    padding-bottom: 40px;
}

footer {
    margin-top: auto; /* This ensures the footer is pushed to the bottom */
    padding: 20px 0;
    background-color: #212529;
    color: #ced4da;
}


        .flash-message {
            margin-bottom: 20px;
        }

.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    padding-left: 0;
    gap: 0.4rem;
    margin: 1rem 0 0 0;
}

.pagination li {
    display: inline;
}

.pagination li a,
.pagination li span {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 42px;
    height: 42px;
    border: 1px solid #dee2e6;
    border-radius: 0.5rem;
    background-color: white;
    color: #0d6efd;
    text-decoration: none;
    font-weight: 500;
    box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    transition: all 0.2s ease-in-out;
}

.pagination li a:hover {
    background-color: #0d6efd;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.pagination .active span {
    background-color: #0d6efd;
    color: white;
    border-color: #0d6efd;
    font-weight: bold;
}

.pagination .disabled span,
.pagination .disabled a {
    color: #adb5bd;
    pointer-events: none;
    background-color: #f8f9fa;
    border-color: #dee2e6;
    box-shadow: none;
}

    </style>

    ";
        // line 100
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 101
        yield "</head>
<body>

    <!-- ✅ Flash Messages -->
    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "flashes", [], "any", false, false, false, 105));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 106
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 107
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show m-3 flash-message\" role=\"alert\">
                ";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Fermer\"></button>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
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
        // line 135
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 136
        yield "    </main>

    <!-- ✅ Footer -->
    <footer class=\"text-center\">
        <div class=\"container\">
            <p class=\"mb-1\">&copy; ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Planmaster</p>
            <p class=\"small\">
                Developed by Planmaster team 
            </p>
        </div>
    </footer>

    <!-- ✅ Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

    ";
        // line 151
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 152
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

        yield "Planmaster";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
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

    // line 135
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

    // line 151
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
        return "base2.html.twig";
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
        return array (  322 => 151,  300 => 135,  278 => 100,  255 => 5,  242 => 152,  240 => 151,  227 => 141,  220 => 136,  218 => 135,  194 => 113,  188 => 112,  178 => 108,  173 => 107,  168 => 106,  164 => 105,  158 => 101,  156 => 100,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Planmaster{% endblock %}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Favicon minimal -->
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 128 128'><text y='1.2em' font-size='96'>⚫️</text><text y='1.3em' x='0.2em' font-size='76' fill='%23fff'>sf</text></svg>\">

    <!-- ✅ Bootstrap -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- ✅ Custom CSS -->
    <style>
       html, body {
    height: 100%;
    margin: 0;
}

body {
    display: flex;
    flex-direction: column;
}

main {
    flex: 1; /* This makes the main content take up the available space */
    padding-top: 20px;
    padding-bottom: 40px;
}

footer {
    margin-top: auto; /* This ensures the footer is pushed to the bottom */
    padding: 20px 0;
    background-color: #212529;
    color: #ced4da;
}


        .flash-message {
            margin-bottom: 20px;
        }

.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    list-style: none;
    padding-left: 0;
    gap: 0.4rem;
    margin: 1rem 0 0 0;
}

.pagination li {
    display: inline;
}

.pagination li a,
.pagination li span {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 42px;
    height: 42px;
    border: 1px solid #dee2e6;
    border-radius: 0.5rem;
    background-color: white;
    color: #0d6efd;
    text-decoration: none;
    font-weight: 500;
    box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    transition: all 0.2s ease-in-out;
}

.pagination li a:hover {
    background-color: #0d6efd;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.pagination .active span {
    background-color: #0d6efd;
    color: white;
    border-color: #0d6efd;
    font-weight: bold;
}

.pagination .disabled span,
.pagination .disabled a {
    color: #adb5bd;
    pointer-events: none;
    background-color: #f8f9fa;
    border-color: #dee2e6;
    box-shadow: none;
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
            <p class=\"mb-1\">&copy; {{ \"now\"|date(\"Y\") }} Planmaster</p>
            <p class=\"small\">
                Developed by Planmaster team 
            </p>
        </div>
    </footer>

    <!-- ✅ Bootstrap JS -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>

    {% block javascripts %}{% endblock %}
</body>
</html>
", "base2.html.twig", "D:\\fac\\web project\\eya nefzi 3A\\PlanmasterSymfony-commande\\templates\\base2.html.twig");
    }
}
