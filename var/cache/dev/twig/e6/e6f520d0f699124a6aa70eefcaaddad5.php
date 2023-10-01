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

/* partials/sidebar.html.twig */
class __TwigTemplate_fd8f848ece53066ce44f966fdefacdd1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        // line 1
        echo "<!-- ========== App Menu ========== -->
<div class=\"app-menu navbar-menu\">
    <!-- LOGO -->
    <div class=\"navbar-brand-box\">
        <!-- Dark Logo-->
        <a href=\"/\" class=\"logo logo-dark\">
            <span class=\"logo-sm\">
                <img src=\"/images/logo-sm.png\" alt=\"\" height=\"22\">
            </span>
            <span class=\"logo-lg\">
                <img src=\"/images/logo-dark.png\" alt=\"\" height=\"17\">
            </span>
        </a>
        <!-- Light Logo-->
        <a href=\"/\" class=\"logo logo-light\">
            <span class=\"logo-sm\">
                <img src=\"/images/logo-sm.png\" alt=\"\" height=\"22\">
            </span>
            <span class=\"logo-lg\">
                <img src=\"/images/logo-light.png\" alt=\"\" height=\"17\">
            </span>
        </a>
        <button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\" id=\"vertical-hover\">
            <i class=\"ri-record-circle-line\"></i>
        </button>
    </div>

    <div id=\"scrollbar\">
        <div class=\"container-fluid\">

            <div id=\"two-column-menu\">
            </div>
            <ul class=\"navbar-nav\" id=\"navbar-nav\">
                <li class=\"menu-title\"><span data-key=\"t-menu\">Menu</span></li>
                <li class=\"nav-item\">
                    <a class=\"nav-link menu-link\" href=\"#adminDashboards\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarDashboards\">
                        <i class=\"ri-dashboard-2-line\"></i> <span data-key=\"t-admin\">Admin</span>
                    </a>
                    <div class=\"collapse menu-dropdown show\" id=\"adminDashboards\">
                        <ul class=\"nav nav-sm flex-column\">
                            <li class=\"nav-item\">
                                <a href=\"/category\" class=\"nav-link\" data-key=\"t-categories\"> Categories </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"/skill\" class=\"nav-link\" data-key=\"t-skills\"> Skills </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"/project\" class=\"nav-link\" data-key=\"t-projects\"> Projects </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class=\"sidebar-background\"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class=\"vertical-overlay\"></div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ========== App Menu ========== -->
<div class=\"app-menu navbar-menu\">
    <!-- LOGO -->
    <div class=\"navbar-brand-box\">
        <!-- Dark Logo-->
        <a href=\"/\" class=\"logo logo-dark\">
            <span class=\"logo-sm\">
                <img src=\"/images/logo-sm.png\" alt=\"\" height=\"22\">
            </span>
            <span class=\"logo-lg\">
                <img src=\"/images/logo-dark.png\" alt=\"\" height=\"17\">
            </span>
        </a>
        <!-- Light Logo-->
        <a href=\"/\" class=\"logo logo-light\">
            <span class=\"logo-sm\">
                <img src=\"/images/logo-sm.png\" alt=\"\" height=\"22\">
            </span>
            <span class=\"logo-lg\">
                <img src=\"/images/logo-light.png\" alt=\"\" height=\"17\">
            </span>
        </a>
        <button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\" id=\"vertical-hover\">
            <i class=\"ri-record-circle-line\"></i>
        </button>
    </div>

    <div id=\"scrollbar\">
        <div class=\"container-fluid\">

            <div id=\"two-column-menu\">
            </div>
            <ul class=\"navbar-nav\" id=\"navbar-nav\">
                <li class=\"menu-title\"><span data-key=\"t-menu\">Menu</span></li>
                <li class=\"nav-item\">
                    <a class=\"nav-link menu-link\" href=\"#adminDashboards\" data-bs-toggle=\"collapse\" role=\"button\" aria-expanded=\"false\" aria-controls=\"sidebarDashboards\">
                        <i class=\"ri-dashboard-2-line\"></i> <span data-key=\"t-admin\">Admin</span>
                    </a>
                    <div class=\"collapse menu-dropdown show\" id=\"adminDashboards\">
                        <ul class=\"nav nav-sm flex-column\">
                            <li class=\"nav-item\">
                                <a href=\"/category\" class=\"nav-link\" data-key=\"t-categories\"> Categories </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"/skill\" class=\"nav-link\" data-key=\"t-skills\"> Skills </a>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"/project\" class=\"nav-link\" data-key=\"t-projects\"> Projects </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class=\"sidebar-background\"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class=\"vertical-overlay\"></div>", "partials/sidebar.html.twig", "E:\\CODE\\mastering-symfony\\projects\\Freelance-MarketPlace\\V2\\templates\\partials\\sidebar.html.twig");
    }
}
