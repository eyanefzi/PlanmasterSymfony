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

/* commande/_table_rows.html.twig */
class __TwigTemplate_1cf84df4af9e9c004359af09394e4b09 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/_table_rows.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/_table_rows.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 2
            yield "    <tr>
        <td>";
            // line 3
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "date", [], "any", false, false, false, 3)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "date", [], "any", false, false, false, 3), "d/m/Y"), "html", null, true)) : ("—"));
            yield "</td>
        <td>
        <span class=\"badge bg-";
            // line 5
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 5) == "livrée")) ? ("success") : ("secondary"));
            yield "\">
            ";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 6)), "html", null, true);
            yield "
        </span>
        </td>
        <td>";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "montantTotal", [], "any", false, false, false, 9), "html", null, true);
            yield " €</td>
        <td>";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "quantite", [], "any", false, false, false, 10), "html", null, true);
            yield "</td>
        <td>";
            // line 11
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "isPaid", [], "any", false, false, false, 11)) ? ("✅ Oui") : ("❌ Non"));
            yield "</td>
        <td>
            <a href=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                👁️ Voir
            </a>
            <a href=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 16)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\">
                ✏️ Modifier
            </a>
        </td>
    </tr>
";
            $context['_iterated'] = true;
        }
        // line 21
        if (!$context['_iterated']) {
            // line 22
            yield "    <tr>
        <td colspan=\"6\" class=\"text-center text-muted\">Aucune commande trouvée.</td>
    </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "commande/_table_rows.html.twig";
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
        return array (  102 => 22,  100 => 21,  90 => 16,  84 => 13,  79 => 11,  75 => 10,  71 => 9,  65 => 6,  61 => 5,  56 => 3,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for commande in commandes %}
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
            <a href=\"{{ path('app_commande_show', {'id': commande.id}) }}\" class=\"btn btn-sm btn-outline-primary\">
                👁️ Voir
            </a>
            <a href=\"{{ path('app_commande_edit', {'id': commande.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">
                ✏️ Modifier
            </a>
        </td>
    </tr>
{% else %}
    <tr>
        <td colspan=\"6\" class=\"text-center text-muted\">Aucune commande trouvée.</td>
    </tr>
{% endfor %}
", "commande/_table_rows.html.twig", "D:\\fac\\web project\\eya nefzi 3A\\PlanmasterSymfony-commande\\templates\\commande\\_table_rows.html.twig");
    }
}
