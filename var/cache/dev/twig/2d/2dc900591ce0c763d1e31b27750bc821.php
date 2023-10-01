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

/* partials/vendor-scripts.html.twig */
class __TwigTemplate_9bd40a28bf52e65b84d49591b460f564 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/vendor-scripts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/vendor-scripts.html.twig"));

        // line 1
        echo "<!-- JAVASCRIPT -->
<script src=\"/libs/bootstrap/js/bootstrap.bundle.min.js\"></script>
<script src=\"/libs/simplebar/simplebar.min.js\"></script>
<script src=\"/libs/node-waves/waves.min.js\"></script>
<script src=\"/libs/feather-icons/feather.min.js\"></script>
<script src=\"/js/pages/plugins/lord-icon-2.1.0.js\"></script>
<script src=\"/js/plugins.js\"></script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "partials/vendor-scripts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- JAVASCRIPT -->
<script src=\"/libs/bootstrap/js/bootstrap.bundle.min.js\"></script>
<script src=\"/libs/simplebar/simplebar.min.js\"></script>
<script src=\"/libs/node-waves/waves.min.js\"></script>
<script src=\"/libs/feather-icons/feather.min.js\"></script>
<script src=\"/js/pages/plugins/lord-icon-2.1.0.js\"></script>
<script src=\"/js/plugins.js\"></script>", "partials/vendor-scripts.html.twig", "E:\\CODE\\mastering-symfony\\projects\\Freelance-MarketPlace\\V2\\templates\\partials\\vendor-scripts.html.twig");
    }
}
