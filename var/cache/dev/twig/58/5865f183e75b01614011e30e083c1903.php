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

/* produit/_liste.html.twig */
class __TwigTemplate_6b6f9207528a60a92062d8bf25337255 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_liste.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_liste.html.twig"));

        // line 1
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 1, $this->source); })()))) {
            // line 2
            yield "    <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 4
                yield "            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    ";
                // line 6
                if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageUrl", [], "any", false, false, false, 6)) {
                    // line 7
                    yield "                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produits/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageUrl", [], "any", false, false, false, 7))), "html", null, true);
                    yield "\"
                             class=\"card-img-top\"
                             style=\"height: 200px; object-fit: cover;\"
                             alt=\"Image de ";
                    // line 10
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 10), "html", null, true);
                    yield "\">
                    ";
                } else {
                    // line 12
                    yield "                        <div class=\"bg-light d-flex align-items-center justify-content-center\"
                             style=\"height: 200px;\">
                            <span class=\"text-muted\">Aucune image</span>
                        </div>
                    ";
                }
                // line 17
                yield "
                    <div class=\"card-body d-flex flex-column\">
                        <h5 class=\"card-title\">";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 19), "html", null, true);
                yield "</h5>
                        <p class=\"card-text text-muted small\">
                            ";
                // line 21
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 21)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 21), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 21), "html", null, true)));
                yield "
                        </p>
                        <p class=\"fw-bold text-dark mb-1\">💶 ";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 23), "html", null, true);
                yield " DT</p>
                        <p class=\"mb-2\"><span class=\"text-muted\">Fournisseur :</span> ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "fournisseur", [], "any", false, false, false, 24), "nomEntreprise", [], "any", false, false, false, 24), "html", null, true);
                yield "</p>

                        <div class=\"mt-auto d-flex justify-content-between\">
                            <a href=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">👁️ Voir</a>
                            <a href=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-warning\">✏️ Modifier</a>
                        </div>
                    </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "    </div>
";
        } else {
            // line 36
            yield "    <div class=\"alert alert-info text-center mt-5\">
        Aucun produit trouvé.
    </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "produit/_liste.html.twig";
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
        return array (  126 => 36,  122 => 34,  110 => 28,  106 => 27,  100 => 24,  96 => 23,  91 => 21,  86 => 19,  82 => 17,  75 => 12,  70 => 10,  63 => 7,  61 => 6,  57 => 4,  53 => 3,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if produits is not empty %}
    <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4\">
        {% for produit in produits %}
            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    {% if produit.imageUrl %}
                        <img src=\"{{ asset('uploads/produits/' ~ produit.imageUrl) }}\"
                             class=\"card-img-top\"
                             style=\"height: 200px; object-fit: cover;\"
                             alt=\"Image de {{ produit.nom }}\">
                    {% else %}
                        <div class=\"bg-light d-flex align-items-center justify-content-center\"
                             style=\"height: 200px;\">
                            <span class=\"text-muted\">Aucune image</span>
                        </div>
                    {% endif %}

                    <div class=\"card-body d-flex flex-column\">
                        <h5 class=\"card-title\">{{ produit.nom }}</h5>
                        <p class=\"card-text text-muted small\">
                            {{ produit.description|length > 100 ? produit.description|slice(0, 100) ~ '...' : produit.description }}
                        </p>
                        <p class=\"fw-bold text-dark mb-1\">💶 {{ produit.prix }} DT</p>
                        <p class=\"mb-2\"><span class=\"text-muted\">Fournisseur :</span> {{ produit.fournisseur.nomEntreprise }}</p>

                        <div class=\"mt-auto d-flex justify-content-between\">
                            <a href=\"{{ path('app_produit_show', {'id': produit.id}) }}\" class=\"btn btn-sm btn-outline-primary\">👁️ Voir</a>
                            <a href=\"{{ path('app_produit_edit', {'id': produit.id}) }}\" class=\"btn btn-sm btn-outline-warning\">✏️ Modifier</a>
                        </div>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
{% else %}
    <div class=\"alert alert-info text-center mt-5\">
        Aucun produit trouvé.
    </div>
{% endif %}
", "produit/_liste.html.twig", "C:\\Users\\eyane\\Desktop\\projet symfoni\\eyasymfonyFinal\\gestioncommande\\templates\\produit\\_liste.html.twig");
    }
}
