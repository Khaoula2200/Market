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

/* base.html.twig */
class __TwigTemplate_1a4d2099ae3da08fe496bd3a13d7b4f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "partials/main.html.twig");
        echo "
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>
<body>
<!-- Begin page -->
<div id=\"layout-wrapper\">
    ";
        // line 19
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
";
        // line 22
        echo "    ";
        echo twig_include($this->env, $context, "partials/menu.html.twig");
        echo "
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class=\"main-content\">
        <div class=\"page-content\">
            <div class=\"container-fluid\">
                ";
        // line 29
        echo twig_include($this->env, $context, "partials/page-title.html.twig", ["pagetitle" => "Dashboards", "title" => "Dashboard"]);
        echo "
                <div class=\"row\">
                    <div class=\"col\">
                        ";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "                    </div>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        ";
        // line 41
        echo twig_include($this->env, $context, "partials/footer.html.twig");
        echo "
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->

";
        // line 47
        echo twig_include($this->env, $context, "partials/customizer.html.twig");
        echo "
";
        // line 48
        echo twig_include($this->env, $context, "partials/vendor-scripts.html.twig");
        echo "


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "</body>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        ";
        echo twig_include($this->env, $context, "partials/title-meta.html.twig", ["title" => "Dashboard"]);
        echo "
        <!-- jsvectormap css -->
        <link href=\"/libs/jsvectormap/css/jsvectormap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <!--Swiper slider css-->
        <link href=\"/libs/swiper/swiper-bundle.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
        ";
        // line 12
        echo twig_include($this->env, $context, "partials/head-css.html.twig");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <!-- apexcharts
    <script src=\"/libs/apexcharts/apexcharts.min.js\"></script>
    -->
    <!-- Vector map-->
    <script src=\"/libs/jsvectormap/js/jsvectormap.min.js\"></script>
    <script src=\"/libs/jsvectormap/maps/world-merc.js\"></script>
    <!--Swiper slider js-->
    <script src=\"/libs/swiper/swiper-bundle.min.js\"></script>
    <!-- App js -->
    <script src=\"/js/app.js\"></script>
    <!-- Dashboard init -->
    <script src=\"/js/pages/dashboard-ecommerce.init.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 52,  202 => 51,  191 => 33,  181 => 32,  169 => 12,  160 => 7,  150 => 6,  131 => 4,  121 => 65,  119 => 51,  113 => 48,  109 => 47,  100 => 41,  92 => 35,  90 => 32,  84 => 29,  73 => 22,  69 => 20,  66 => 19,  60 => 14,  58 => 6,  53 => 4,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('partials/main.html.twig') }}
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    {% block stylesheets %}
        {{ include('partials/title-meta.html.twig', {title: 'Dashboard'}) }}
        <!-- jsvectormap css -->
        <link href=\"/libs/jsvectormap/css/jsvectormap.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
        <!--Swiper slider css-->
        <link href=\"/libs/swiper/swiper-bundle.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
        {{ include('partials/head-css.html.twig') }}
    {% endblock %}
</head>
<body>
<!-- Begin page -->
<div id=\"layout-wrapper\">
    {# FOR NOW #}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js\" integrity=\"sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
{#    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>#}
    {{ include('partials/menu.html.twig') }}
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class=\"main-content\">
        <div class=\"page-content\">
            <div class=\"container-fluid\">
                {{ include('partials/page-title.html.twig', {pagetitle: 'Dashboards', title: 'Dashboard'}) }}
                <div class=\"row\">
                    <div class=\"col\">
                        {% block content %}

                        {% endblock %}
                    </div>
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        {{ include('partials/footer.html.twig') }}
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->

{{ include('partials/customizer.html.twig') }}
{{ include('partials/vendor-scripts.html.twig') }}


{% block javascripts %}
    <!-- apexcharts
    <script src=\"/libs/apexcharts/apexcharts.min.js\"></script>
    -->
    <!-- Vector map-->
    <script src=\"/libs/jsvectormap/js/jsvectormap.min.js\"></script>
    <script src=\"/libs/jsvectormap/maps/world-merc.js\"></script>
    <!--Swiper slider js-->
    <script src=\"/libs/swiper/swiper-bundle.min.js\"></script>
    <!-- App js -->
    <script src=\"/js/app.js\"></script>
    <!-- Dashboard init -->
    <script src=\"/js/pages/dashboard-ecommerce.init.js\"></script>
{% endblock %}
</body>", "base.html.twig", "E:\\CODE\\mastering-symfony\\projects\\Freelance-MarketPlace\\V2\\templates\\base.html.twig");
    }
}
