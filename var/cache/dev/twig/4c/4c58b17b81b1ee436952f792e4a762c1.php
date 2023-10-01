<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* security/login.html.twig */
class __TwigTemplate_3b4c13da24cbb6e86b08c337b2e68bb0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container position-sticky z-index-sticky top-0\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- Navbar -->
                <nav class=\"navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4\">
                    <div class=\"container-fluid pe-0\">
                        <a class=\"navbar-brand font-weight-bolder ms-lg-0 ms-3 \" href=\"../pages/dashboard.html\">
                            Lorem Ipsum
                        </a>
                        <button class=\"navbar-toggler shadow-none ms-2\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navigation\" aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon mt-2\">
                <span class=\"navbar-toggler-bar bar1\"></span>
                <span class=\"navbar-toggler-bar bar2\"></span>
                <span class=\"navbar-toggler-bar bar3\"></span>
              </span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navigation\">
                            <ul class=\"navbar-nav mx-auto ms-xl-auto me-xl-7\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link me-2\" href=\"../pages/sign-up.html\">
                                        <i class=\"fas fa-user-circle opacity-6 text-dark me-1\"></i>
                                        Sign Up
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class=\"main-content  mt-0\">
        <section>
            <div class=\"page-header min-vh-75\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto\">
                            <div class=\"card card-plain mt-8\">
                                <div class=\"card-header pb-0 text-left bg-transparent\">
                                    <h3 class=\"font-weight-bolder text-info text-gradient\">Welcome back</h3>
                                    <p class=\"mb-0\">Enter your email and password to sign in</p>
                                </div>
                                <div class=\"card-body\">
                                    <form role=\"form\" method=\"post\">
";
        // line 66
        echo "                                        ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 66, $this->source); })())) {
            // line 67
            echo "                                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 67, $this->source); })()), "messageKey", [], "any", false, false, false, 67), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 67, $this->source); })()), "messageData", [], "any", false, false, false, 67), "security"), "html", null, true);
            echo "</div>
                                        ";
        }
        // line 69
        echo "
                                        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70)) {
            // line 71
            echo "                                            <div class=\"mb-3\">
                                                You are logged in as ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "userIdentifier", [], "any", false, false, false, 72), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                            </div>
                                        ";
        }
        // line 75
        echo "
                                        <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                                        <label for=\"inputEmail\">Email</label>
                                        <input type=\"email\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\"
                                               autocomplete=\"email\" required autofocus placeholder=\"Email\" aria-label=\"Email\" aria-describedby=\"email-addon\">
                                        <label for=\"inputPassword\">Password</label>
                                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required
                                               placeholder=\"Password\" aria-label=\"Password\" aria-describedby=\"password-addon\">

                                        <input type=\"hidden\" name=\"_csrf_token\"
                                               value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
                                        >

                                        <button class=\"btn bg-gradient-info w-100 mt-4 mb-0\" type=\"submit\">
                                            Sign in
                                        </button>
                                    </form>
                                </div>
                                <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
                                    <p class=\"mb-4 text-sm mx-auto\">
                                        Don't have an account?
                                        <a href=\"javascript:;\" class=\"text-info text-gradient font-weight-bold\">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"oblique position-absolute top-0 h-100 d-md-block d-none me-n8\">
                                <div class=\"oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6\" style=\"background-image:url('";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/curved-images/curved6.jpg"), "html", null, true);
        echo "')\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class=\"footer py-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mb-4 mx-auto text-center\">
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-5 me-3 mb-sm-0 mb-2\">
                        Company
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-5 me-3 mb-sm-0 mb-2\">
                        About Us
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-5 me-3 mb-sm-0 mb-2\">
                        Team
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-5 me-3 mb-sm-0 mb-2\">
                        Products
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-5 me-3 mb-sm-0 mb-2\">
                        Blog
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-5 me-3 mb-sm-0 mb-2\">
                        Pricing
                    </a>
                </div>
                <div class=\"col-lg-8 mx-auto text-center mb-4 mt-2\">
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-4 me-4\">
                        <span class=\"text-lg fab fa-dribbble\"></span>
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-4 me-4\">
                        <span class=\"text-lg fab fa-twitter\"></span>
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-4 me-4\">
                        <span class=\"text-lg fab fa-instagram\"></span>
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-4 me-4\">
                        <span class=\"text-lg fab fa-pinterest\"></span>
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-4 me-4\">
                        <span class=\"text-lg fab fa-github\"></span>
                    </a>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-8 mx-auto text-center mt-1\">
                    <p class=\"mb-0 text-secondary\">
                        Copyright © <script>
                            document.write(new Date().getFullYear())
                        </script> Soft by Creative Tim.
                    </p>
                </div>
            </div>
        </div>
    </footer>
";
        // line 168
        echo "
";
        // line 174
        echo "
";
        // line 180
        echo "
";
        // line 184
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 184,  266 => 180,  263 => 174,  260 => 168,  196 => 103,  175 => 85,  165 => 78,  160 => 75,  152 => 72,  149 => 71,  147 => 70,  144 => 69,  138 => 67,  135 => 66,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
    <div class=\"container position-sticky z-index-sticky top-0\">
        <div class=\"row\">
            <div class=\"col-12\">
                <!-- Navbar -->
                <nav class=\"navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4\">
                    <div class=\"container-fluid pe-0\">
                        <a class=\"navbar-brand font-weight-bolder ms-lg-0 ms-3 \" href=\"../pages/dashboard.html\">
                            Lorem Ipsum
                        </a>
                        <button class=\"navbar-toggler shadow-none ms-2\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navigation\" aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon mt-2\">
                <span class=\"navbar-toggler-bar bar1\"></span>
                <span class=\"navbar-toggler-bar bar2\"></span>
                <span class=\"navbar-toggler-bar bar3\"></span>
              </span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"navigation\">
                            <ul class=\"navbar-nav mx-auto ms-xl-auto me-xl-7\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link me-2\" href=\"../pages/sign-up.html\">
                                        <i class=\"fas fa-user-circle opacity-6 text-dark me-1\"></i>
                                        Sign Up
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class=\"main-content  mt-0\">
        <section>
            <div class=\"page-header min-vh-75\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto\">
                            <div class=\"card card-plain mt-8\">
                                <div class=\"card-header pb-0 text-left bg-transparent\">
                                    <h3 class=\"font-weight-bolder text-info text-gradient\">Welcome back</h3>
                                    <p class=\"mb-0\">Enter your email and password to sign in</p>
                                </div>
                                <div class=\"card-body\">
                                    <form role=\"form\" method=\"post\">
{#                                        <label>Email</label>#}
{#                                        <div class=\"mb-3\">#}
{#                                            <input type=\"email\" class=\"form-control\" placeholder=\"Email\" aria-label=\"Email\" aria-describedby=\"email-addon\">#}
{#                                        </div>#}
{#                                        <label>Password</label>#}
{#                                        <div class=\"mb-3\">#}
{#                                            <input type=\"email\" class=\"form-control\" placeholder=\"Password\" aria-label=\"Password\" aria-describedby=\"password-addon\">#}
{#                                        </div>#}
{#                                        <div class=\"form-check form-switch\">#}
{#                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"rememberMe\" checked=\"\">#}
{#                                            <label class=\"form-check-label\" for=\"rememberMe\">Remember me</label>#}
{#                                        </div>#}
{#                                        <div class=\"text-center\">#}
{#                                            <button type=\"button\" class=\"btn bg-gradient-info w-100 mt-4 mb-0\">Sign in</button>#}
{#                                        </div>#}
                                        {% if error %}
                                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                        {% endif %}

                                        {% if app.user %}
                                            <div class=\"mb-3\">
                                                You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                                            </div>
                                        {% endif %}

                                        <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                                        <label for=\"inputEmail\">Email</label>
                                        <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\"
                                               autocomplete=\"email\" required autofocus placeholder=\"Email\" aria-label=\"Email\" aria-describedby=\"email-addon\">
                                        <label for=\"inputPassword\">Password</label>
                                        <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required
                                               placeholder=\"Password\" aria-label=\"Password\" aria-describedby=\"password-addon\">

                                        <input type=\"hidden\" name=\"_csrf_token\"
                                               value=\"{{ csrf_token('authenticate') }}\"
                                        >

                                        <button class=\"btn bg-gradient-info w-100 mt-4 mb-0\" type=\"submit\">
                                            Sign in
                                        </button>
                                    </form>
                                </div>
                                <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
                                    <p class=\"mb-4 text-sm mx-auto\">
                                        Don't have an account?
                                        <a href=\"javascript:;\" class=\"text-info text-gradient font-weight-bold\">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"oblique position-absolute top-0 h-100 d-md-block d-none me-n8\">
                                <div class=\"oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6\" style=\"background-image:url('{{ asset('img/curved-images/curved6.jpg') }}')\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class=\"footer py-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mb-4 mx-auto text-center\">
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-5 me-3 mb-sm-0 mb-2\">
                        Company
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-5 me-3 mb-sm-0 mb-2\">
                        About Us
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-5 me-3 mb-sm-0 mb-2\">
                        Team
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-5 me-3 mb-sm-0 mb-2\">
                        Products
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-5 me-3 mb-sm-0 mb-2\">
                        Blog
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-5 me-3 mb-sm-0 mb-2\">
                        Pricing
                    </a>
                </div>
                <div class=\"col-lg-8 mx-auto text-center mb-4 mt-2\">
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-4 me-4\">
                        <span class=\"text-lg fab fa-dribbble\"></span>
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-4 me-4\">
                        <span class=\"text-lg fab fa-twitter\"></span>
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-4 me-4\">
                        <span class=\"text-lg fab fa-instagram\"></span>
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-4 me-4\">
                        <span class=\"text-lg fab fa-pinterest\"></span>
                    </a>
                    <a href=\"javascript:;\" target=\"_blank\" class=\"text-secondary me-xl-4 me-4\">
                        <span class=\"text-lg fab fa-github\"></span>
                    </a>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-8 mx-auto text-center mt-1\">
                    <p class=\"mb-0 text-secondary\">
                        Copyright © <script>
                            document.write(new Date().getFullYear())
                        </script> Soft by Creative Tim.
                    </p>
                </div>
            </div>
        </div>
    </footer>
{#<form method=\"post\">#}
{#    {% if error %}#}
{#        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>#}
{#    {% endif %}#}

{#    {% if app.user %}#}
{#        <div class=\"mb-3\">#}
{#            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>#}
{#        </div>#}
{#    {% endif %}#}

{#    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>#}
{#    <label for=\"inputEmail\">Email</label>#}
{#    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>#}
{#    <label for=\"inputPassword\">Password</label>#}
{#    <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>#}

{#    <input type=\"hidden\" name=\"_csrf_token\"#}
{#           value=\"{{ csrf_token('authenticate') }}\"#}
{#    >#}

{#    <button class=\"btn btn-lg btn-primary\" type=\"submit\">#}
{#        Sign in#}
{#    </button>#}
{#</form>#}
{% endblock %}
", "security/login.html.twig", "E:\\CODE\\mastering-symfony\\projects\\Freelance-MarketPlace\\V2\\templates\\security\\login.html.twig");
    }
}
