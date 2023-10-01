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

/* skill/index.html.twig */
class __TwigTemplate_a0079af683c1c71a1089514cf1e684c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "skill/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "skill/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "skill/index.html.twig", 1);
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
                                    <th class=\"sort\" data-sort=\"action\">Action</th>
                                </tr>
                                </thead>
                                <tbody class=\"list form-check-all\">
                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skills"]) || array_key_exists("skills", $context) ? $context["skills"] : (function () { throw new RuntimeError('Variable "skills" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 44
            echo "                                    <tr>
                                        <th scope=\"row\">
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"checkbox\" name=\"chk_child\" value=\"option1\">
                                            </div>
                                        </th>
                                        <td class=\"id\" style=\"display:none;\"><a href=\"javascript:void(0);\" class=\"fw-medium link-primary\">#VZ10</a></td>
                                        <td class=\"customer_name\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "name", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                        <td class=\"email\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "description", [], "any", false, false, false, 52), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
        return "skill/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 65,  144 => 52,  140 => 51,  131 => 44,  127 => 43,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                                    <th class=\"sort\" data-sort=\"action\">Action</th>
                                </tr>
                                </thead>
                                <tbody class=\"list form-check-all\">
                                {% for skill in skills %}
                                    <tr>
                                        <th scope=\"row\">
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"checkbox\" name=\"chk_child\" value=\"option1\">
                                            </div>
                                        </th>
                                        <td class=\"id\" style=\"display:none;\"><a href=\"javascript:void(0);\" class=\"fw-medium link-primary\">#VZ10</a></td>
                                        <td class=\"customer_name\">{{ skill.name }}</td>
                                        <td class=\"email\">{{ skill.description }}</td>
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
", "skill/index.html.twig", "E:\\CODE\\mastering-symfony\\projects\\Freelance-MarketPlace\\V2\\templates\\skill\\index.html.twig");
    }
}
