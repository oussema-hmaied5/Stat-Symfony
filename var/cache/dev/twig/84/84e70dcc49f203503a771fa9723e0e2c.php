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

/* home/indexb.html.twig */
class __TwigTemplate_7bf8c28cb409dc44a426750bbb625e8c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/indexb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/indexb.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/indexb.html.twig", 1);
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
        echo "\t\t<div class=\"home\">
\t\t<div class=\"home_slider_container\">
\t\t\t<!-- Home Slider -->
\t\t\t<div class=\"owl-carousel owl-theme home_slider\">
\t\t\t\t
\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(images/bg0.webp)\"></div>
\t\t\t\t\t<div class=\"home_content\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<div class=\"home_content_inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"home_title\"><h1>Medecin made with care</h1></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"home_text\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"button home_button\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">read more</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(images/bg1.jpg)\"></div>
\t\t\t\t\t<div class=\"home_content\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<div class=\"home_content_inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"home_title\"><h1>Medecin made with care</h1></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"home_text\">
\t\t\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"button home_button\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">read more</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(images/home_background_1.jpg)\"></div>
\t\t\t\t\t<div class=\"home_content\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<div class=\"home_content_inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"home_title\"><h1>Medecin made with care</h1></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"home_text\">
\t\t\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"button home_button\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">read more</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Slider Progress -->
\t\t\t<div class=\"home_slider_progress\"></div>
\t\t</div>
\t</div>

\t<!-- 3 Boxes -->

\t<div class=\"boxes\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<!-- Box -->
\t\t\t\t<div class=\"col-lg-4 box_col\">
\t\t\t\t\t<div class=\"box working_hours\">
\t\t\t\t\t\t<div class=\"box_icon d-flex flex-column align-items-start justify-content-center\"><div style=\"width:29px; height:29px;\"><img src=\"images/alarm-clock.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t<div class=\"box_title\">Working Hours</div>
\t\t\t\t\t\t<div class=\"working_hours_list\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t<div>Monday – Friday</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">8.00 – 19.00</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t<div>Saturday</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">9.30 – 17.00</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t<div>Sunday</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">9.30 – 15.00</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Box -->
\t\t\t\t<div class=\"col-lg-4 box_col\">
\t\t\t\t\t<div class=\"box box_appointments\">
\t\t\t\t\t\t<div class=\"box_icon d-flex flex-column align-items-start justify-content-center\"><div style=\"width: 29px; height:29px;\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t<div class=\"box_title\">Appointments</div>
\t\t\t\t\t\t<div class=\"box_text\">Ready to schedule your appointment? We're here to make it easy and convenient for you.</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Box -->
\t\t\t\t<div class=\"col-lg-4 box_col\">
\t\t\t\t\t<div class=\"box box_emergency\">
\t\t\t\t\t\t<div class=\"box_icon d-flex flex-column align-items-start justify-content-center\"><div style=\"width: 37px; height:37px; margin-left:-4px;\"><img src=\"images/bell.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t<div class=\"box_title\">Emergency Cases</div>
\t\t\t\t\t\t<div class=\"box_phone\">+216 79 700 794</div>
\t\t\t\t\t\t<div class=\"box_emergency_text\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- About -->

\t<div class=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row row-lg-eq-height\">
\t\t\t\t
\t\t\t\t<!-- About Content -->
\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t<div class=\"about_content\">
\t\t\t\t\t\t<div class=\"section_title\"><h2>A great medical team to help your needs</h2></div>
\t\t\t\t\t\t<div class=\"about_text\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tDiscover the support you need with our exceptional medical team. Committed to your well-being, our highly skilled professionals are here to address your health needs effectively. From routine check-ups to specialized care, we provide comprehensive services tailored to you. Our team combines expertise and compassion to ensure you receive the highest standard of medical assistance. Trust us to guide you through your healthcare journey with dedication and personalized attention. Your health is our priority, and we look forward to being your trusted partners in wellness.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"button about_button\">
\t\t\t\t\t\t\t<a href=\"#\">read more</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- About Image -->
\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t<div class=\"about_image\"><img src=\"images/about.png\" alt=\"\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Departments -->

\t<div class=\"departments\">
\t\t<div class=\"departments_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/lab.png\" data-speed=\"0.8\"></div>
\t\t<center><div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"section_title section_title_light\"><h2>Laboratories working with Us</h2></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row departments_row row-md-eq-height\">
\t\t\t\t
\t\t\t\t<!-- Department -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 dept_col\">
\t\t\t\t\t<div class=\"dept\">
\t\t\t\t\t\t<div class=\"dept_image\"><img src=\"images/dept_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"dept_content text-center\">
\t\t\t\t\t\t\t<div class=\"dept_title\">DR </div>
\t\t\t\t\t\t\t<div class=\"dept_subtitle\">TunisiA , Ben Arous</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<!-- Department -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 dept_col\">
\t\t\t\t\t<div class=\"dept\">
\t\t\t\t\t\t<div class=\"dept_image\"><img src=\"images/dept_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"dept_content text-center\">
\t\t\t\t\t\t\t<div class=\"dept_title\">Dr </div>
\t\t\t\t\t\t\t<div class=\"dept_subtitle\">Tunisia , Tunis</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Department -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 dept_col\">
\t\t\t\t\t<div class=\"dept\">
\t\t\t\t\t\t<div class=\"dept_image\"><img src=\"images/dept_3.webp\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"dept_content text-center\">
\t\t\t\t\t\t\t<div class=\"dept_title\">
\t\t\t\t\t\t\t\tDr </div>
\t\t\t\t\t\t\t<div class=\"dept_subtitle\">Tunisia , Ariana</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Department -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 dept_col\">
\t\t\t\t\t<div class=\"dept\">
\t\t\t\t\t\t<div class=\"dept_text\">
\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<!--<center><div class=\"button dept_button\"><a href=\"#\">read more</a></div></center>-->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</center>

\t<!-- Call to action -->

\t<div class=\"cta\">
\t\t<div class=\"cta_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/stress.jpg\" data-speed=\"0.8\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"cta_content text-center\">
\t\t\t\t\t\t<h2>Need Tips to manage Stress?</h2>
\t\t\t\t\t\t<video width=\"640\" height=\"360\" controls>
\t\t\t\t\t\t\t<source src=\"videos/stress.mp4\" type=\"video/mp4\">
\t\t\t\t\t\t\tYour browser does not support the video tag.
\t\t\t\t\t\t</video>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t</div>
\t

\t\t\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/indexb.html.twig";
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
\t\t<div class=\"home\">
\t\t<div class=\"home_slider_container\">
\t\t\t<!-- Home Slider -->
\t\t\t<div class=\"owl-carousel owl-theme home_slider\">
\t\t\t\t
\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(images/bg0.webp)\"></div>
\t\t\t\t\t<div class=\"home_content\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<div class=\"home_content_inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"home_title\"><h1>Medecin made with care</h1></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"home_text\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"button home_button\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">read more</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(images/bg1.jpg)\"></div>
\t\t\t\t\t<div class=\"home_content\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<div class=\"home_content_inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"home_title\"><h1>Medecin made with care</h1></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"home_text\">
\t\t\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"button home_button\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">read more</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Slider Item -->
\t\t\t\t<div class=\"owl-item\">
\t\t\t\t\t<div class=\"home_slider_background\" style=\"background-image:url(images/home_background_1.jpg)\"></div>
\t\t\t\t\t<div class=\"home_content\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t<div class=\"home_content_inner\">
\t\t\t\t\t\t\t\t\t\t<div class=\"home_title\"><h1>Medecin made with care</h1></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"home_text\">
\t\t\t\t\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"button home_button\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">read more</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Slider Progress -->
\t\t\t<div class=\"home_slider_progress\"></div>
\t\t</div>
\t</div>

\t<!-- 3 Boxes -->

\t<div class=\"boxes\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<!-- Box -->
\t\t\t\t<div class=\"col-lg-4 box_col\">
\t\t\t\t\t<div class=\"box working_hours\">
\t\t\t\t\t\t<div class=\"box_icon d-flex flex-column align-items-start justify-content-center\"><div style=\"width:29px; height:29px;\"><img src=\"images/alarm-clock.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t<div class=\"box_title\">Working Hours</div>
\t\t\t\t\t\t<div class=\"working_hours_list\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t<div>Monday – Friday</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">8.00 – 19.00</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t<div>Saturday</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">9.30 – 17.00</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t\t\t<div>Sunday</div>
\t\t\t\t\t\t\t\t\t<div class=\"ml-auto\">9.30 – 15.00</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Box -->
\t\t\t\t<div class=\"col-lg-4 box_col\">
\t\t\t\t\t<div class=\"box box_appointments\">
\t\t\t\t\t\t<div class=\"box_icon d-flex flex-column align-items-start justify-content-center\"><div style=\"width: 29px; height:29px;\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t<div class=\"box_title\">Appointments</div>
\t\t\t\t\t\t<div class=\"box_text\">Ready to schedule your appointment? We're here to make it easy and convenient for you.</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Box -->
\t\t\t\t<div class=\"col-lg-4 box_col\">
\t\t\t\t\t<div class=\"box box_emergency\">
\t\t\t\t\t\t<div class=\"box_icon d-flex flex-column align-items-start justify-content-center\"><div style=\"width: 37px; height:37px; margin-left:-4px;\"><img src=\"images/bell.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t<div class=\"box_title\">Emergency Cases</div>
\t\t\t\t\t\t<div class=\"box_phone\">+216 79 700 794</div>
\t\t\t\t\t\t<div class=\"box_emergency_text\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- About -->

\t<div class=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row row-lg-eq-height\">
\t\t\t\t
\t\t\t\t<!-- About Content -->
\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t<div class=\"about_content\">
\t\t\t\t\t\t<div class=\"section_title\"><h2>A great medical team to help your needs</h2></div>
\t\t\t\t\t\t<div class=\"about_text\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tDiscover the support you need with our exceptional medical team. Committed to your well-being, our highly skilled professionals are here to address your health needs effectively. From routine check-ups to specialized care, we provide comprehensive services tailored to you. Our team combines expertise and compassion to ensure you receive the highest standard of medical assistance. Trust us to guide you through your healthcare journey with dedication and personalized attention. Your health is our priority, and we look forward to being your trusted partners in wellness.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"button about_button\">
\t\t\t\t\t\t\t<a href=\"#\">read more</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- About Image -->
\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t<div class=\"about_image\"><img src=\"images/about.png\" alt=\"\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Departments -->

\t<div class=\"departments\">
\t\t<div class=\"departments_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/lab.png\" data-speed=\"0.8\"></div>
\t\t<center><div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"section_title section_title_light\"><h2>Laboratories working with Us</h2></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row departments_row row-md-eq-height\">
\t\t\t\t
\t\t\t\t<!-- Department -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 dept_col\">
\t\t\t\t\t<div class=\"dept\">
\t\t\t\t\t\t<div class=\"dept_image\"><img src=\"images/dept_1.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"dept_content text-center\">
\t\t\t\t\t\t\t<div class=\"dept_title\">DR </div>
\t\t\t\t\t\t\t<div class=\"dept_subtitle\">TunisiA , Ben Arous</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t
\t\t\t\t<!-- Department -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 dept_col\">
\t\t\t\t\t<div class=\"dept\">
\t\t\t\t\t\t<div class=\"dept_image\"><img src=\"images/dept_2.jpg\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"dept_content text-center\">
\t\t\t\t\t\t\t<div class=\"dept_title\">Dr </div>
\t\t\t\t\t\t\t<div class=\"dept_subtitle\">Tunisia , Tunis</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Department -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 dept_col\">
\t\t\t\t\t<div class=\"dept\">
\t\t\t\t\t\t<div class=\"dept_image\"><img src=\"images/dept_3.webp\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"dept_content text-center\">
\t\t\t\t\t\t\t<div class=\"dept_title\">
\t\t\t\t\t\t\t\tDr </div>
\t\t\t\t\t\t\t<div class=\"dept_subtitle\">Tunisia , Ariana</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Department -->
\t\t\t\t<div class=\"col-lg-3 col-md-6 dept_col\">
\t\t\t\t\t<div class=\"dept\">
\t\t\t\t\t\t<div class=\"dept_text\">
\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<!--<center><div class=\"button dept_button\"><a href=\"#\">read more</a></div></center>-->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</center>

\t<!-- Call to action -->

\t<div class=\"cta\">
\t\t<div class=\"cta_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/stress.jpg\" data-speed=\"0.8\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"cta_content text-center\">
\t\t\t\t\t\t<h2>Need Tips to manage Stress?</h2>
\t\t\t\t\t\t<video width=\"640\" height=\"360\" controls>
\t\t\t\t\t\t\t<source src=\"videos/stress.mp4\" type=\"video/mp4\">
\t\t\t\t\t\t\tYour browser does not support the video tag.
\t\t\t\t\t\t</video>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t</div>
\t

\t\t\t
{% endblock %}
", "home/indexb.html.twig", "C:\\Users\\oussa\\Desktop\\notreatment\\templates\\home\\indexb.html.twig");
    }
}
