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

/* category/index.html.twig */
class __TwigTemplate_9a35aed2745240678674b68e63bbb240 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
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

        echo "Products";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"listjs-table\" id=\"customerList\">
                        <div class=\"row g-4 mb-3\">
                            <div class=\"col-sm-auto\">
                                <div>
                                    <button type=\"button\" class=\"btn btn-success add-btn\" data-bs-toggle=\"modal\" id=\"create-btn\" data-bs-target=\"#showModal\"><i class=\"ri-add-line align-bottom me-1\"></i> Add</button>
                                    <button class=\"btn btn-soft-danger\" onclick=\"deleteMultiple()\"><i class=\"ri-delete-bin-2-line\"></i></button>
                                </div>
                            </div>
                            <div class=\"col-sm\">
                                <div class=\"d-flex justify-content-sm-end\">
                                    <div class=\"search-box ms-2\">
                                        <input type=\"text\" class=\"form-control search\" placeholder=\"Search...\">
                                        <i class=\"ri-search-line search-icon\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"table-responsive table-card mt-3 mb-1\">
                            <table class=\"table align-middle table-nowrap\" id=\"customerTable\">
                                <thead class=\"table-light\">
                                <tr>
                                    <th scope=\"col\" style=\"width: 50px;\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"checkAll\" value=\"option\">
                                        </div>
                                    </th>
                                    <th class=\"sort\" data-sort=\"customer_name\">Name</th>
                                    <th class=\"sort\" data-sort=\"email\">Description</th>
                                    <th class=\"sort\" data-sort=\"phone\">Slug</th>
                                    <th class=\"sort\" data-sort=\"action\">Action</th>
                                </tr>
                                </thead>
                                <tbody class=\"list form-check-all\">
                                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 45
            echo "                                    <tr>
                                        <th scope=\"row\">
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"checkbox\" name=\"chk_child\" value=\"option1\">
                                            </div>
                                        </th>
                                        <td class=\"id\" style=\"display:none;\"><a href=\"javascript:void(0);\" class=\"fw-medium link-primary\">#VZ10</a></td>
                                        <td class=\"customer_name\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                        <td class=\"email\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                        <td class=\"phone\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                         <td>
                                            <div class=\"d-flex gap-2\">
                                                <div class=\"edit\">
                                                    <button class=\"btn btn-sm btn-success edit-item-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#showModal\">Edit</button>
                                                </div>
                                                <div class=\"remove\">
                                                    <button class=\"btn btn-sm btn-danger remove-item-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteRecordModal\">Remove</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                                </tbody>
                            </table>
                            <div class=\"noresult\" style=\"display: none\">
                                <div class=\"text-center\">
                                    <lord-icon src=\"https://cdn.lordicon.com/msoeawqm.json\" trigger=\"loop\" colors=\"primary:#121331,secondary:#08a88a\" style=\"width:75px;height:75px\"></lord-icon>
                                    <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                    <p class=\"text-muted mb-0\">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"d-flex justify-content-end\">
                            <div class=\"pagination-wrap hstack gap-2\" style=\"display: flex;\">
                                <a class=\"page-item pagination-prev disabled\" href=\"javascript:void(0);\">
                                    Previous
                                </a>
                                <ul class=\"pagination listjs-pagination mb-0\"><li class=\"active\"><a class=\"page\" href=\"#\" data-i=\"1\" data-page=\"8\">1</a></li><li><a class=\"page\" href=\"#\" data-i=\"2\" data-page=\"8\">2</a></li></ul>
                                <a class=\"page-item pagination-next\" href=\"javascript:void(0);\">
                                    Next
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 67,  149 => 54,  145 => 53,  141 => 52,  132 => 45,  128 => 44,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Products{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"listjs-table\" id=\"customerList\">
                        <div class=\"row g-4 mb-3\">
                            <div class=\"col-sm-auto\">
                                <div>
                                    <button type=\"button\" class=\"btn btn-success add-btn\" data-bs-toggle=\"modal\" id=\"create-btn\" data-bs-target=\"#showModal\"><i class=\"ri-add-line align-bottom me-1\"></i> Add</button>
                                    <button class=\"btn btn-soft-danger\" onclick=\"deleteMultiple()\"><i class=\"ri-delete-bin-2-line\"></i></button>
                                </div>
                            </div>
                            <div class=\"col-sm\">
                                <div class=\"d-flex justify-content-sm-end\">
                                    <div class=\"search-box ms-2\">
                                        <input type=\"text\" class=\"form-control search\" placeholder=\"Search...\">
                                        <i class=\"ri-search-line search-icon\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"table-responsive table-card mt-3 mb-1\">
                            <table class=\"table align-middle table-nowrap\" id=\"customerTable\">
                                <thead class=\"table-light\">
                                <tr>
                                    <th scope=\"col\" style=\"width: 50px;\">
                                        <div class=\"form-check\">
                                            <input class=\"form-check-input\" type=\"checkbox\" id=\"checkAll\" value=\"option\">
                                        </div>
                                    </th>
                                    <th class=\"sort\" data-sort=\"customer_name\">Name</th>
                                    <th class=\"sort\" data-sort=\"email\">Description</th>
                                    <th class=\"sort\" data-sort=\"phone\">Slug</th>
                                    <th class=\"sort\" data-sort=\"action\">Action</th>
                                </tr>
                                </thead>
                                <tbody class=\"list form-check-all\">
                                {% for category in categories %}
                                    <tr>
                                        <th scope=\"row\">
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"checkbox\" name=\"chk_child\" value=\"option1\">
                                            </div>
                                        </th>
                                        <td class=\"id\" style=\"display:none;\"><a href=\"javascript:void(0);\" class=\"fw-medium link-primary\">#VZ10</a></td>
                                        <td class=\"customer_name\">{{ category.name }}</td>
                                        <td class=\"email\">{{ category.description }}</td>
                                        <td class=\"phone\">{{ category.slug }}</td>
                                         <td>
                                            <div class=\"d-flex gap-2\">
                                                <div class=\"edit\">
                                                    <button class=\"btn btn-sm btn-success edit-item-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#showModal\">Edit</button>
                                                </div>
                                                <div class=\"remove\">
                                                    <button class=\"btn btn-sm btn-danger remove-item-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteRecordModal\">Remove</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                            <div class=\"noresult\" style=\"display: none\">
                                <div class=\"text-center\">
                                    <lord-icon src=\"https://cdn.lordicon.com/msoeawqm.json\" trigger=\"loop\" colors=\"primary:#121331,secondary:#08a88a\" style=\"width:75px;height:75px\"></lord-icon>
                                    <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                    <p class=\"text-muted mb-0\">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                </div>
                            </div>
                        </div>

                        <div class=\"d-flex justify-content-end\">
                            <div class=\"pagination-wrap hstack gap-2\" style=\"display: flex;\">
                                <a class=\"page-item pagination-prev disabled\" href=\"javascript:void(0);\">
                                    Previous
                                </a>
                                <ul class=\"pagination listjs-pagination mb-0\"><li class=\"active\"><a class=\"page\" href=\"#\" data-i=\"1\" data-page=\"8\">1</a></li><li><a class=\"page\" href=\"#\" data-i=\"2\" data-page=\"8\">2</a></li></ul>
                                <a class=\"page-item pagination-next\" href=\"javascript:void(0);\">
                                    Next
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
{% endblock %}
", "category/index.html.twig", "E:\\CODE\\mastering-symfony\\projects\\Freelance-MarketPlace\\V2\\templates\\category\\index.html.twig");
    }
}
