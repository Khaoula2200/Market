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

/* project/index.html.twig */
class __TwigTemplate_5ccfa832867e8cc582a2eff9ac7e8d34 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project/index.html.twig", 1);
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

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"listjs-table\" id=\"customerList\">
                        <div class=\"row g-4 mb-3\">
                            <div class=\"col-sm-auto\">
                                <div>
                                    <a href=\"/project/create\">create</a>
                                    <button type=\"button\" class=\"btn btn-success add-btn new-entity\" data-bs-toggle=\"modal\" data-bs-target=\"#projectModal\"><i class=\"ri-add-line align-bottom me-1\"></i> Add</button>
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
                                    <th class=\"sort\" data-sort=\"customer_name\">Title</th>
                                    <th class=\"sort\" data-sort=\"email\">Description</th>
                                    <th class=\"sort\" data-sort=\"email\">Image</th>
                                    <th class=\"sort\" data-sort=\"email\">Duration</th>
                                    <th class=\"sort\" data-sort=\"email\">Visibility</th>
                                    <th class=\"sort\" data-sort=\"action\">Action</th>
                                </tr>
                                </thead>
                                <tbody class=\"list form-check-all\">
                                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 51
            echo "                                    <tr>
                                        <th scope=\"row\">
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"checkbox\" name=\"chk_child\" value=\"option1\">
                                            </div>
                                        </th>
                                        <td class=\"id\" style=\"display:none;\"><a href=\"javascript:void(0);\" class=\"fw-medium link-primary\">#VZ10</a></td>
                                        <td class=\"customer_name\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                                        <td class=\"email\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                                        <td class=\"email\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "image", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                                        <td class=\"email\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "duration", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                        <td class=\"email\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "visibility", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                        <td>
                                            <div class=\"d-flex gap-2\">
                                                <div class=\"edit\">
                                                    <button class=\"btn btn-sm btn-success edit-item-btn\" element-id = \"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#projectModal\">Edit</button>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
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
    <script src=\"/js/global/admin/project.js\"></script>
    ";
        // line 105
        $this->loadTemplate("partials/modal.html.twig", "project/index.html.twig", 105)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "project/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 105,  206 => 75,  191 => 66,  184 => 62,  180 => 61,  176 => 60,  172 => 59,  168 => 58,  159 => 51,  155 => 50,  112 => 9,  102 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Products{% endblock %}
{% block stylesheets %}
    {{ parent() }}
{% endblock %}

{% block content %}
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"listjs-table\" id=\"customerList\">
                        <div class=\"row g-4 mb-3\">
                            <div class=\"col-sm-auto\">
                                <div>
                                    <a href=\"/project/create\">create</a>
                                    <button type=\"button\" class=\"btn btn-success add-btn new-entity\" data-bs-toggle=\"modal\" data-bs-target=\"#projectModal\"><i class=\"ri-add-line align-bottom me-1\"></i> Add</button>
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
                                    <th class=\"sort\" data-sort=\"customer_name\">Title</th>
                                    <th class=\"sort\" data-sort=\"email\">Description</th>
                                    <th class=\"sort\" data-sort=\"email\">Image</th>
                                    <th class=\"sort\" data-sort=\"email\">Duration</th>
                                    <th class=\"sort\" data-sort=\"email\">Visibility</th>
                                    <th class=\"sort\" data-sort=\"action\">Action</th>
                                </tr>
                                </thead>
                                <tbody class=\"list form-check-all\">
                                {% for project in projects %}
                                    <tr>
                                        <th scope=\"row\">
                                            <div class=\"form-check\">
                                                <input class=\"form-check-input\" type=\"checkbox\" name=\"chk_child\" value=\"option1\">
                                            </div>
                                        </th>
                                        <td class=\"id\" style=\"display:none;\"><a href=\"javascript:void(0);\" class=\"fw-medium link-primary\">#VZ10</a></td>
                                        <td class=\"customer_name\">{{ project.title }}</td>
                                        <td class=\"email\">{{ project.description }}</td>
                                        <td class=\"email\">{{ project.image }}</td>
                                        <td class=\"email\">{{ project.duration }}</td>
                                        <td class=\"email\">{{ project.visibility }}</td>
                                        <td>
                                            <div class=\"d-flex gap-2\">
                                                <div class=\"edit\">
                                                    <button class=\"btn btn-sm btn-success edit-item-btn\" element-id = \"{{ project.id }}\" data-bs-toggle=\"modal\" data-bs-target=\"#projectModal\">Edit</button>
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
    <script src=\"/js/global/admin/project.js\"></script>
    {% include 'partials/modal.html.twig'%}
{% endblock %}
", "project/index.html.twig", "E:\\CODE\\mastering-symfony\\projects\\Freelance-MarketPlace\\V2\\templates\\project\\index.html.twig");
    }
}
