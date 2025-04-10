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
class __TwigTemplate_30da9ee1ca099196c2e0ecdb785a1236 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/index.html.twig", 1);
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
        yield "<div class=\"container mt-5\">
    <h1 class=\"mb-4\">📦 Liste des Commandes</h1>

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
            <tbody>
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 23
            yield "                    <tr>
                        <td>";
            // line 24
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "date", [], "any", false, false, false, 24)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "date", [], "any", false, false, false, 24), "d/m/Y"), "html", null, true)) : ("—"));
            yield "</td>
                        <td>
                            <span class=\"badge bg-";
            // line 26
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 26) == "livrée")) ? ("success") : ("secondary"));
            yield "\">
                                ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 27)), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "montantTotal", [], "any", false, false, false, 30), "html", null, true);
            yield " €</td>
                        <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "quantite", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                        <td>";
            // line 32
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "isPaid", [], "any", false, false, false, 32)) ? ("✅ Oui") : ("❌ Non"));
            yield "</td>
                        <td>
                            <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">👁️ Voir</a>
                            <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\">✏️ Modifier</a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 38
        if (!$context['_iterated']) {
            // line 39
            yield "                    <tr>
                        <td colspan=\"7\" class=\"text-center text-muted\">Aucune commande trouvée.</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "            </tbody>
        </table>
    </div>

    <div class=\"mt-3\">
        <a href=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_new");
        yield "\" class=\"btn btn-success\">➕ Nouvelle Commande</a>
    </div>
</div>
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
        return array (  184 => 48,  177 => 43,  168 => 39,  166 => 38,  158 => 35,  154 => 34,  149 => 32,  145 => 31,  141 => 30,  135 => 27,  131 => 26,  126 => 24,  123 => 23,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Commandes{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"mb-4\">📦 Liste des Commandes</h1>

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
            <tbody>
                {% for commande in commandes %}
                    <tr>
                        <td>{{ commande.date ? commande.date|date('d/m/Y') : '—' }}</td>
                        <td>
                            <span class=\"badge bg-{{ commande.status == 'livrée' ? 'success' : 'secondary' }}\">
                                {{ commande.status|capitalize }}
                            </span>
                        </td>
                        <td>{{ commande.montantTotal }} €</td>
                        <td>{{ commande.quantite }}</td>
                        <td>{{ commande.isPaid ? '✅ Oui' : '❌ Non' }}</td>
                        <td>
                            <a href=\"{{ path('app_commande_show', {'id': commande.id}) }}\" class=\"btn btn-sm btn-outline-primary\">👁️ Voir</a>
                            <a href=\"{{ path('app_commande_edit', {'id': commande.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">✏️ Modifier</a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"7\" class=\"text-center text-muted\">Aucune commande trouvée.</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"mt-3\">
        <a href=\"{{ path('app_commande_new') }}\" class=\"btn btn-success\">➕ Nouvelle Commande</a>
    </div>
</div>
{% endblock %}
", "commande/index.html.twig", "C:\\Users\\eyane\\Desktop\\projet symfoni\\eyasymfonyFinal\\gestioncommande\\templates\\commande\\index.html.twig");
    }
}
