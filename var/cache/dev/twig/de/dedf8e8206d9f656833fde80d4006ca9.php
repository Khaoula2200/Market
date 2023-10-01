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

/* partials/head-css.html.twig */
class __TwigTemplate_7724995ebb3494410fa23cd43c446552 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/head-css.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/head-css.html.twig"));

        // line 1
        echo "<!-- Layout config Js -->
<script src=\"/js/layout.js\"></script>

<!-- Bootstrap Css -->
<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

<!-- icons Css -->
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<!-- App Css-->
<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/app.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<!-- custom Css-->
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/head-css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  60 => 10,  55 => 8,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Layout config Js -->
<script src=\"/js/layout.js\"></script>

<!-- Bootstrap Css -->
<link href=\"{{ asset('/css/bootstrap.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

<!-- icons Css -->
<link href=\"{{ asset('/css/icons.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
<!-- App Css-->
<link href=\"{{ asset('/css/app.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
<!-- custom Css-->
<link href=\"{{ asset('/css/custom.css') }}\" rel=\"stylesheet\" type=\"text/css\" />", "partials/head-css.html.twig", "E:\\CODE\\mastering-symfony\\projects\\Freelance-MarketPlace\\V2\\templates\\partials\\head-css.html.twig");
    }
}
