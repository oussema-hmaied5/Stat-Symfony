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

/* dossiermedical/index.html.twig */
class __TwigTemplate_4030c4b5e9a454c8067ca0617f2df3d8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossiermedical/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossiermedical/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dossiermedical/index.html.twig", 1);
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

        echo "Dossiermedical ";
        
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
        echo "<div>
    <h1>Dossier medical </h1> </div>
    <br><br><br><br> 

    <div class=\"mb-5\">
        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossiermedical_new");
        echo "\" class=\"btn btn-secondary\">Create New</a>
    </div>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Groupesang</th>
                <th>Maladiechronique</th>
                <th>Resultat analyse</th>
                <th>Edit</th>
                <th>Show</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dossiermedicals"]) || array_key_exists("dossiermedicals", $context) ? $context["dossiermedicals"] : (function () { throw new RuntimeError('Variable "dossiermedicals" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dossiermedical"]) {
            // line 27
            echo "                <tr>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossiermedical"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossiermedical"], "groupesang", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossiermedical"], "maladiechronique", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossiermedical"], "Resultatanalyse", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td> <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossiermedical_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["dossiermedical"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">edit</a></td>
                    <td>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossiermedical_show", ["id" => twig_get_attribute($this->env, $this->source, $context["dossiermedical"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">show</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossiermedical'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    

        </tbody>
    </table>
     <div class=\"mb-5\">
        <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dossier_medical_statistics");
        echo "\" class=\"btn btn-secondary\">Show Statistic  Of Chronic Maladis</a>
    </div>
   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dossiermedical/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  167 => 47,  160 => 42,  151 => 38,  142 => 34,  137 => 32,  133 => 31,  129 => 30,  125 => 29,  121 => 28,  118 => 27,  113 => 26,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dossiermedical {% endblock %}

{% block content %}
<div>
    <h1>Dossier medical </h1> </div>
    <br><br><br><br> 

    <div class=\"mb-5\">
        <a href=\"{{ path('app_dossiermedical_new') }}\" class=\"btn btn-secondary\">Create New</a>
    </div>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Groupesang</th>
                <th>Maladiechronique</th>
                <th>Resultat analyse</th>
                <th>Edit</th>
                <th>Show</th>
            </tr>
        </thead>
        <tbody>
            {% for dossiermedical in dossiermedicals %}
                <tr>
                    <td>{{ dossiermedical.id }}</td>
                    <td>{{ dossiermedical.groupesang }}</td>
                    <td>{{ dossiermedical.maladiechronique }}</td>
                    <td>{{ dossiermedical.Resultatanalyse }}</td>
                    <td> <a href=\"{{ path('app_dossiermedical_edit', {'id': dossiermedical.id}) }}\">edit</a></td>
                    <td>
                        <a href=\"{{ path('app_dossiermedical_show', {'id': dossiermedical.id}) }}\">show</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"3\">no records found</td>
                </tr>
            {% endfor %}
    

        </tbody>
    </table>
     <div class=\"mb-5\">
        <a href=\"{{ path('dossier_medical_statistics') }}\" class=\"btn btn-secondary\">Show Statistic  Of Chronic Maladis</a>
    </div>
   
{% endblock %}
", "dossiermedical/index.html.twig", "C:\\Users\\oussa\\Desktop\\notreatment\\templates\\dossiermedical\\index.html.twig");
    }
}
