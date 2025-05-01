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

/* commande/pdf_template.html.twig */
class __TwigTemplate_29e98f0c82f7fbed5e247e9bd76ba391 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/pdf_template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/pdf_template.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>List of Commandes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header img {
            width: 150px;
        }
    </style>
</head>
<body>
<div class=\"header\">
    <img src=\"data:image/png;base64,";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logoBase64"]) || array_key_exists("logoBase64", $context) ? $context["logoBase64"] : (function () { throw new RuntimeError('Variable "logoBase64" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "\" style=\"width: 150px;\">

    <p>Generated on: ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d H:i"), "html", null, true);
        yield "</p>
</div>


<h1>List of Commandes</h1>

<table>
    <thead>
    <tr>
        <th>Date</th>
        <th>Status</th>
        <th>Total Amount</th>
        <th>Quantity</th>
        <th>Paid</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 57, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 58
            yield "        <tr>
            <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "date", [], "any", false, false, false, 59), "Y-m-d"), "html", null, true);
            yield "</td>
            <td>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
            <td>";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "montantTotal", [], "any", false, false, false, 61), 2, ",", "."), "html", null, true);
            yield " €</td>
            <td>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "quantite", [], "any", false, false, false, 62), "html", null, true);
            yield "</td>
            <td>";
            // line 63
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "isPaid", [], "any", false, false, false, 63)) ? ("Yes") : ("No"));
            yield "</td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        // line 65
        if (!$context['_iterated']) {
            // line 66
            yield "        <tr>
            <td colspan=\"5\">No commandes found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "    </tbody>
</table>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "commande/pdf_template.html.twig";
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
        return array (  154 => 70,  145 => 66,  143 => 65,  136 => 63,  132 => 62,  128 => 61,  124 => 60,  120 => 59,  117 => 58,  112 => 57,  92 => 40,  87 => 38,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>List of Commandes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header img {
            width: 150px;
        }
    </style>
</head>
<body>
<div class=\"header\">
    <img src=\"data:image/png;base64,{{ logoBase64 }}\" style=\"width: 150px;\">

    <p>Generated on: {{ \"now\"|date(\"Y-m-d H:i\") }}</p>
</div>


<h1>List of Commandes</h1>

<table>
    <thead>
    <tr>
        <th>Date</th>
        <th>Status</th>
        <th>Total Amount</th>
        <th>Quantity</th>
        <th>Paid</th>
    </tr>
    </thead>
    <tbody>
    {% for commande in commandes %}
        <tr>
            <td>{{ commande.date | date(\"Y-m-d\") }}</td>
            <td>{{ commande.status }}</td>
            <td>{{ commande.montantTotal | number_format(2, ',', '.') }} €</td>
            <td>{{ commande.quantite }}</td>
            <td>{{ commande.isPaid ? 'Yes' : 'No' }}</td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"5\">No commandes found</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
</body>
</html>
", "commande/pdf_template.html.twig", "D:\\fac\\web project\\eya nefzi 3A\\PlanmasterSymfony-commande\\templates\\commande\\pdf_template.html.twig");
    }
}
