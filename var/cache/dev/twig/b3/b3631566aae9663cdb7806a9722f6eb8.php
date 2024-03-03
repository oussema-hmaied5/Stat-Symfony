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

/* home/contact.html.twig */
class __TwigTemplate_2f3af868ce488b8fae54801458b5d0f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/contact.html.twig", 1);
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

        echo "docteur  index";
        
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
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "\t\t
\t\t\t
\t<div class=\"home\">
\t\t<div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/contact.jpg\" data-speed=\"0.8\"></div>
\t\t<div class=\"home_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"home_content\">
\t\t\t\t\t\t\t<div class=\"home_title\"><span>NoTreatment</span> Contact</div>
\t\t\t\t\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li>Contact</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Contact -->

\t<div class=\"contact\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Contact Info -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"section_title\"><h2>Get in touch</h2></div>
\t\t\t\t\t<div class=\"contact_text\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tGet in touch with us to experience top-notch care and personalized service. Whether you have questions, need information, or are ready to schedule an appointment, our team is here for you. Reach out today, and let us be your partner in maintaining and enhancing your well-being. Your health is our priority, and we look forward to connecting with you..</p>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"contact_about_list\">
\t\t\t\t\t\t<li><div class=\"contact_about_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div><span>+216 79 700 794</span></li>
\t\t\t\t\t\t<li><div class=\"contact_about_icon\"><img src=\"images/envelope.svg\" alt=\"\"></div><span>NoTreatment@gmail.com</span></li>
\t\t\t\t\t\t<li><div class=\"contact_about_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div><span>Al Ghazela,Tunisia</span></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<!-- Contact Form -->
\t\t\t\t<div class=\"col-lg-6 form_col\">
\t\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<form action=\"#\" id=\"contact_form\" class=\"contact_form\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 input_col\">
\t\t\t\t\t\t\t\t\t<div class=\"input_container input_name\"><input type=\"text\" class=\"contact_input\" placeholder=\"Name\" required=\"required\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 input_col\">
\t\t\t\t\t\t\t\t\t<div class=\"input_container\"><input type=\"email\" class=\"contact_input\" placeholder=\"E-mail\" required=\"required\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input_container\"><input type=\"text\" class=\"contact_input\" placeholder=\"Subject\" required=\"required\"></div>
\t\t\t\t\t\t\t<div class=\"input_container\"><textarea class=\"contact_input contact_text_area\" placeholder=\"Message\" required=\"required\"></textarea></div>
\t\t\t\t\t\t\t<button class=\"button contact_button\"><a href=\"#\">send</a></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row map_row\">
\t\t\t\t<div class=\"col\">

\t\t\t\t\t<!-- Contact Map -->

\t\t\t\t\t<div class=\"contact_map\">

\t\t\t\t\t\t<!-- Google Map -->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"map\">
\t\t\t\t\t\t\t<div id=\"google_map\" class=\"google_map\">
\t\t\t\t\t\t\t\t<div class=\"map_container\">
\t\t\t\t\t\t\t\t\t<div id=\"map\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Working Hours -->
\t\t\t\t\t\t
\t\t\t\t\t\t

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/contact.html.twig";
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
        return array (  109 => 8,  99 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}docteur  index{% endblock %}

 {% block body %}
 {% endblock %}
{% block content %}
\t\t
\t\t\t
\t<div class=\"home\">
\t\t<div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/contact.jpg\" data-speed=\"0.8\"></div>
\t\t<div class=\"home_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"home_content\">
\t\t\t\t\t\t\t<div class=\"home_title\"><span>NoTreatment</span> Contact</div>
\t\t\t\t\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li>Contact</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Contact -->

\t<div class=\"contact\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Contact Info -->
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"section_title\"><h2>Get in touch</h2></div>
\t\t\t\t\t<div class=\"contact_text\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tGet in touch with us to experience top-notch care and personalized service. Whether you have questions, need information, or are ready to schedule an appointment, our team is here for you. Reach out today, and let us be your partner in maintaining and enhancing your well-being. Your health is our priority, and we look forward to connecting with you..</p>
\t\t\t\t\t</div>
\t\t\t\t\t<ul class=\"contact_about_list\">
\t\t\t\t\t\t<li><div class=\"contact_about_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div><span>+216 79 700 794</span></li>
\t\t\t\t\t\t<li><div class=\"contact_about_icon\"><img src=\"images/envelope.svg\" alt=\"\"></div><span>NoTreatment@gmail.com</span></li>
\t\t\t\t\t\t<li><div class=\"contact_about_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div><span>Al Ghazela,Tunisia</span></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t\t<!-- Contact Form -->
\t\t\t\t<div class=\"col-lg-6 form_col\">
\t\t\t\t\t<div class=\"contact_form_container\">
\t\t\t\t\t\t<form action=\"#\" id=\"contact_form\" class=\"contact_form\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6 input_col\">
\t\t\t\t\t\t\t\t\t<div class=\"input_container input_name\"><input type=\"text\" class=\"contact_input\" placeholder=\"Name\" required=\"required\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6 input_col\">
\t\t\t\t\t\t\t\t\t<div class=\"input_container\"><input type=\"email\" class=\"contact_input\" placeholder=\"E-mail\" required=\"required\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"input_container\"><input type=\"text\" class=\"contact_input\" placeholder=\"Subject\" required=\"required\"></div>
\t\t\t\t\t\t\t<div class=\"input_container\"><textarea class=\"contact_input contact_text_area\" placeholder=\"Message\" required=\"required\"></textarea></div>
\t\t\t\t\t\t\t<button class=\"button contact_button\"><a href=\"#\">send</a></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row map_row\">
\t\t\t\t<div class=\"col\">

\t\t\t\t\t<!-- Contact Map -->

\t\t\t\t\t<div class=\"contact_map\">

\t\t\t\t\t\t<!-- Google Map -->
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"map\">
\t\t\t\t\t\t\t<div id=\"google_map\" class=\"google_map\">
\t\t\t\t\t\t\t\t<div class=\"map_container\">
\t\t\t\t\t\t\t\t\t<div id=\"map\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Working Hours -->
\t\t\t\t\t\t
\t\t\t\t\t\t

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "home/contact.html.twig", "C:\\Users\\oussa\\Desktop\\notreatment\\templates\\home\\contact.html.twig");
    }
}
