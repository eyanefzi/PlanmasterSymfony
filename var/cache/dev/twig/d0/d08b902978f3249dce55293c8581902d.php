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
class __TwigTemplate_b606ae3d0038c7d3553c82a457420d6a extends Template
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
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>";
        // line 9
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Favicon -->
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        yield "\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <!-- You can add more icon stylesheets here if needed -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styles.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />

    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 31
        yield "</head>

<body>

    <!-- Navigation-->
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container px-4 px-lg-5\">
            <a class=\"navbar-brand\" href=\"#\">Planmaster</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4\">
                    <li class=\"nav-item\"><a class=\"nav-link active\" aria-current=\"page\" href=\"#!\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#!\">À propos</a></li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Magasin</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item\" href=\"#!\">Tous les produits</a></li>
                            <li><hr class=\"dropdown-divider\" /></li>
                            <li><a class=\"dropdown-item\" href=\"#!\">Produits populaires</a></li>
                            <li><a class=\"dropdown-item\" href=\"#!\">Nouveautés</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Cart Icon and Dropdown -->
                <div id=\"cart-icon\" class=\"position-relative\">
                    <button class=\"btn btn-outline-dark\" onclick=\"toggleCartDropdown()\">
                        <i class=\"fas fa-shopping-cart\"></i> Panier 
                        <span id=\"cart-count\" class=\"badge bg-danger\">0</span>
                    </button>
                    <div id=\"cart-dropdown\" class=\"dropdown-menu p-3\" style=\"display: none; width: 300px;\">
                        <div id=\"cart-items-list\">
                            <p class=\"text-muted\">Votre panier est vide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class=\"bg-dark py-5\">
        <div class=\"container px-4 px-lg-5 my-5\">
            <div class=\"text-center text-white\">
                <h6 class=\"display-4 fw-bolder\">Achetez ce que vous voulez sur Planmaster !</h6>
                <p class=\"lead fw-normal text-white-50 mb-0\"></p>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class=\"container\">
        ";
        // line 83
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 84
        yield "    </main>

    <!-- Footer-->
    <footer class=\"py-5 bg-dark\">
        <div class=\"container\">
            <p class=\"m-0 text-center text-white\">Copyright &copy; Planmaster ";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "</p>
        </div>
    </footer>

    <!-- Bootstrap JS-->
    <script src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Custom JS -->
    <script src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        yield "\"></script>

    ";
        // line 99
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 102
        yield "
    <script>
        // Function to update the cart count dynamically
        function updateCartInfo(cartCount) {
            document.getElementById('cart-count').innerText = cartCount; // Update the cart count dynamically
        }

        // Call this function on page load to initialize the cart count
        function updateCartCount() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let cartCount = cart.length; // Get the total number of products in the cart
            updateCartInfo(cartCount);  // Update the cart icon with the correct count
        }

        // Trigger this function on cart interactions (e.g., adding products to the cart)
        updateCartInfo();  // This will update the cart count when the page loads

        // Function to toggle cart dropdown visibility
        function toggleCartDropdown() {
            let dropdown = document.getElementById('cart-dropdown');
            dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
            displayCartItems();
        }

        // Function to display cart items inside the dropdown
        function displayCartItems() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let html = '<ul class=\"list-group list-group-flush\">';
            let total = 0;

            if (cart.length === 0) {
                html += '<li class=\"list-group-item text-center\">Votre panier est vide</li>';
            } else {
                cart.forEach(item => {
                    let subtotal = item.price * item.quantity;
                    total += subtotal;
                    html += `
                        <li class=\"list-group-item d-flex justify-content-between align-items-start\">
                            <div class=\"me-2\">
                                <strong>\${item.name}</strong><br>
                                <small>\${item.quantity} × DT \${item.price.toFixed(2)} = <strong>DT \${subtotal.toFixed(2)}</strong></small>
                            </div>
                            <button class=\"btn btn-sm btn-outline-danger\" onclick=\"removeFromCart(\${item.productId})\">
                                &times;
                            </button>
                        </li>`;
                });
            }

            html += '</ul>';
            document.getElementById('cart-items-list').innerHTML = html;
            document.getElementById('cart-total').innerText = 'Total : DT ' + total.toFixed(2);
        }

        // Function to add product to cart
        function addToCart(productId, price, name) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let product = cart.find(item => item.productId === productId);

            if (product) {
                product.quantity += 1;
            } else {
                cart.push({ productId, name, price, quantity: 1 });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
            displayCartItems();
        }

        // Function to remove product from cart
        function removeFromCart(productId) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart = cart.filter(item => item.productId !== productId);
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
            displayCartItems();
        }

        // Update the cart count when page loads
        document.addEventListener(\"DOMContentLoaded\", function () {
            updateCartCount();
        });
    </script>
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
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

    // line 27
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

        // line 28
        yield "    <!-- Additional custom stylesheets can be added here -->
    <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/custom.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" />
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
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

    // line 99
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

        // line 100
        yield "    <!-- Additional custom JavaScript files can be added here -->
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
        return array (  363 => 100,  350 => 99,  328 => 83,  315 => 29,  312 => 28,  299 => 27,  276 => 9,  178 => 102,  176 => 99,  171 => 97,  165 => 94,  157 => 89,  150 => 84,  148 => 83,  94 => 31,  92 => 27,  87 => 25,  81 => 22,  68 => 12,  62 => 9,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <meta name=\"description\" content=\"\" />
    <meta name=\"author\" content=\"\" />
    <title>{% block title %}Planmaster{% endblock %}</title>

    <!-- Favicon -->
    <link href=\"{{ asset('assets/img/favicon.ico') }}\" rel=\"icon\">

    <!-- Google Web Fonts -->
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <!-- You can add more icon stylesheets here if needed -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\" />

    <!-- Template Stylesheet -->
    <link href=\"{{ asset('assets/css/styles.css') }}\" rel=\"stylesheet\" />

    {% block stylesheets %}
    <!-- Additional custom stylesheets can be added here -->
    <link href=\"{{ asset('assets/css/custom.css') }}\" rel=\"stylesheet\" />
    {% endblock %}
</head>

<body>

    <!-- Navigation-->
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container px-4 px-lg-5\">
            <a class=\"navbar-brand\" href=\"#\">Planmaster</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4\">
                    <li class=\"nav-item\"><a class=\"nav-link active\" aria-current=\"page\" href=\"#!\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#!\">À propos</a></li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Magasin</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item\" href=\"#!\">Tous les produits</a></li>
                            <li><hr class=\"dropdown-divider\" /></li>
                            <li><a class=\"dropdown-item\" href=\"#!\">Produits populaires</a></li>
                            <li><a class=\"dropdown-item\" href=\"#!\">Nouveautés</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Cart Icon and Dropdown -->
                <div id=\"cart-icon\" class=\"position-relative\">
                    <button class=\"btn btn-outline-dark\" onclick=\"toggleCartDropdown()\">
                        <i class=\"fas fa-shopping-cart\"></i> Panier 
                        <span id=\"cart-count\" class=\"badge bg-danger\">0</span>
                    </button>
                    <div id=\"cart-dropdown\" class=\"dropdown-menu p-3\" style=\"display: none; width: 300px;\">
                        <div id=\"cart-items-list\">
                            <p class=\"text-muted\">Votre panier est vide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class=\"bg-dark py-5\">
        <div class=\"container px-4 px-lg-5 my-5\">
            <div class=\"text-center text-white\">
                <h6 class=\"display-4 fw-bolder\">Achetez ce que vous voulez sur Planmaster !</h6>
                <p class=\"lead fw-normal text-white-50 mb-0\"></p>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class=\"container\">
        {% block body %}{% endblock %}
    </main>

    <!-- Footer-->
    <footer class=\"py-5 bg-dark\">
        <div class=\"container\">
            <p class=\"m-0 text-center text-white\">Copyright &copy; Planmaster {{ \"now\"|date(\"Y\") }}</p>
        </div>
    </footer>

    <!-- Bootstrap JS-->
    <script src=\"{{ asset('assets/js/bootstrap.bundle.min.js') }}\"></script>

    <!-- Custom JS -->
    <script src=\"{{ asset('assets/js/scripts.js') }}\"></script>

    {% block javascripts %}
    <!-- Additional custom JavaScript files can be added here -->
    {% endblock %}

    <script>
        // Function to update the cart count dynamically
        function updateCartInfo(cartCount) {
            document.getElementById('cart-count').innerText = cartCount; // Update the cart count dynamically
        }

        // Call this function on page load to initialize the cart count
        function updateCartCount() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let cartCount = cart.length; // Get the total number of products in the cart
            updateCartInfo(cartCount);  // Update the cart icon with the correct count
        }

        // Trigger this function on cart interactions (e.g., adding products to the cart)
        updateCartInfo();  // This will update the cart count when the page loads

        // Function to toggle cart dropdown visibility
        function toggleCartDropdown() {
            let dropdown = document.getElementById('cart-dropdown');
            dropdown.style.display = (dropdown.style.display === 'block') ? 'none' : 'block';
            displayCartItems();
        }

        // Function to display cart items inside the dropdown
        function displayCartItems() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let html = '<ul class=\"list-group list-group-flush\">';
            let total = 0;

            if (cart.length === 0) {
                html += '<li class=\"list-group-item text-center\">Votre panier est vide</li>';
            } else {
                cart.forEach(item => {
                    let subtotal = item.price * item.quantity;
                    total += subtotal;
                    html += `
                        <li class=\"list-group-item d-flex justify-content-between align-items-start\">
                            <div class=\"me-2\">
                                <strong>\${item.name}</strong><br>
                                <small>\${item.quantity} × DT \${item.price.toFixed(2)} = <strong>DT \${subtotal.toFixed(2)}</strong></small>
                            </div>
                            <button class=\"btn btn-sm btn-outline-danger\" onclick=\"removeFromCart(\${item.productId})\">
                                &times;
                            </button>
                        </li>`;
                });
            }

            html += '</ul>';
            document.getElementById('cart-items-list').innerHTML = html;
            document.getElementById('cart-total').innerText = 'Total : DT ' + total.toFixed(2);
        }

        // Function to add product to cart
        function addToCart(productId, price, name) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let product = cart.find(item => item.productId === productId);

            if (product) {
                product.quantity += 1;
            } else {
                cart.push({ productId, name, price, quantity: 1 });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
            displayCartItems();
        }

        // Function to remove product from cart
        function removeFromCart(productId) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart = cart.filter(item => item.productId !== productId);
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
            displayCartItems();
        }

        // Update the cart count when page loads
        document.addEventListener(\"DOMContentLoaded\", function () {
            updateCartCount();
        });
    </script>
</body>

</html>
", "base.html.twig", "C:\\Users\\eyane\\Desktop\\symfoni crud 2\\gestioncommande\\templates\\base.html.twig");
    }
}
