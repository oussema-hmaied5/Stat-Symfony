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

/* home/about.html.twig */
class __TwigTemplate_3054c00bd422f4316909bfd72ad5a63c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/about.html.twig", 1);
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
        echo "\t\t<div class=\"super_container\">


\t<div class=\"home\">
\t\t<div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/about.jpg\" data-speed=\"0.8\"></div>
\t\t<div class=\"home_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"home_content\">
\t\t\t\t\t\t\t<div class=\"home_title\">About <span>NoTreatment</span></div>
\t\t\t\t\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li>About NoTreatment</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- About -->

\t<div class=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<!-- About Content -->
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"section_title\"><h2>A great medical team to help your needs</h2></div>
\t\t\t\t\t<div class=\"about_text\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tEntrusting your health to a great medical team is a decision that brings peace of mind and assurance. Our exceptional medical team is dedicated to meeting your unique needs with expertise, compassion, and unwavering commitment. From the moment you walk through our doors, you are met with a collective effort to ensure your well-being. Our skilled professionals collaborate seamlessly, employing the latest advancements in medical care to provide personalized and comprehensive solutions. Whether you require routine check-ups or specialized treatments, our great medical team is here to guide you through your healthcare journey, prioritizing your health and comfort at every step. Your trust in us is the foundation of our commitment to delivering exceptional care tailored to meet and exceed your expectations. </p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>
\t\t\t\t\t<center>
\t\t\t\t\t<div class=\"row loaders_container\">
\t\t\t\t\t\t<div class=\"col-md-3 loader_col\">
\t\t\t\t\t\t\t<!-- Loader -->
\t\t\t\t\t\t\t<div class=\"loader\" data-perc=\"0.75\"><span>Hard Work</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 loader_col\">
\t\t\t\t\t\t\t<!-- Loader -->
\t\t\t\t\t\t\t<div class=\"loader\" data-perc=\"0.95\"><span>Passion</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</center>
\t\t\t\t\t<div class=\"button about_button\"><a href=\"#\">read more</a></div>
\t\t\t\t</div>

\t\t\t\t<!-- Boxes -->
\t\t\t\t<div class=\"col-lg-4 boxes_col\">

\t\t\t\t\t<!-- Box -->
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

\t\t\t\t\t<!-- Box -->
\t\t\t\t\t<div class=\"box box_appointments\">
\t\t\t\t\t\t<div class=\"box_icon d-flex flex-column align-items-start justify-content-center\"><div style=\"width: 29px; height:29px;\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t<div class=\"box_title\">Appointments</div>
\t\t\t\t\t\t<div class=\"box_text\">Ready to schedule your appointment? We're here to make it easy and convenient for you.</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Box -->
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

\t<!-- Testimonials -->

\t<div class=\"testimonials\">
\t\t<div class=\"testimonials_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/testimonials.jpg\" data-speed=\"0.8\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"section_title section_title_light\"><h2>Patient Testimonials</h2></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row test_row\">
\t\t\t\t
\t\t\t\t<!-- Testimonial -->
\t\t\t\t<div class=\"col-lg-6 test_col\">
\t\t\t\t\t<div class=\"testimonial\">
\t\t\t\t\t\t<div class=\"test_icon d-flex flex-column align-items-center justify-content-center\"><img src=\"images/quote.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"test_text\">A heartfelt thank you to the incredible doctors who have made a positive difference in our lives. Your commitment to excellence, combined with your caring demeanor, has created a lasting impact. We are grateful for the invaluable contribution you've made to our health and well-being.</div>
\t\t\t\t\t\t<div class=\"test_author d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"test_author_image\"><div><img src=\"images/test_1.jpg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t<div class=\"test_author_name\"><a href=\"#\">Claire Smith</a>, <span>Patient</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Testimonial -->
\t\t\t\t<div class=\"col-lg-6 test_col\">
\t\t\t\t\t<div class=\"testimonial\">
\t\t\t\t\t\t<div class=\"test_icon d-flex flex-column align-items-center justify-content-center\"><img src=\"images/quote.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"test_text\">A sincere thank you to the remarkable doctors who went above and beyond in delivering personalized and compassionate healthcare. Your skillful guidance, empathetic approach, and tireless efforts have not only healed us physically but also provided immense comfort and reassurance during challenging times..</div>
\t\t\t\t\t\t<div class=\"test_author d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"test_author_image\"><div><img src=\"images/test_2.jpg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t<div class=\"test_author_name\"><a href=\"#\">Mick Williams</a>, <span>Patient</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Team -->

\t<div class=\"team\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"section_title\"><h2>Meet Our Medical Team</h2></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row team_row\">
\t\t\t\t
\t\t\t\t<!-- Team Member -->
\t\t\t\t<div class=\"col-lg-3 team_col\">
\t\t\t\t\t<div class=\"team_member\">
\t\t\t\t\t\t<div class=\"team_member_image d-flex flex-column align-items-center justify-content-end\"><img src=\"images/team_1.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"team_member_info\">
\t\t\t\t\t\t\t<div class=\"team_member_name\"><a href=\"#\">Dr. Melissa Smith</a></div>
\t\t\t\t\t\t\t<div class=\"team_member_title\">Cardiologist</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Team Member -->
\t\t\t\t<div class=\"col-lg-3 team_col\">
\t\t\t\t\t<div class=\"team_member\">
\t\t\t\t\t\t<div class=\"team_member_image d-flex flex-column align-items-center justify-content-end\"><img src=\"images/team_2.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"team_member_info\">
\t\t\t\t\t\t\t<div class=\"team_member_name\"><a href=\"#\">Dr. Josh Henderson</a></div>
\t\t\t\t\t\t\t<div class=\"team_member_title\">Plastic Surgeon</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Team Member -->
\t\t\t\t<div class=\"col-lg-3 team_col\">
\t\t\t\t\t<div class=\"team_member\">
\t\t\t\t\t\t<div class=\"team_member_image d-flex flex-column align-items-center justify-content-end\"><img src=\"images/team_3.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"team_member_info\">
\t\t\t\t\t\t\t<div class=\"team_member_name\"><a href=\"#\">Dr. Christinne Jones</a></div>
\t\t\t\t\t\t\t<div class=\"team_member_title\">Pediatrist</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Team Member -->
\t\t\t\t<div class=\"col-lg-3 team_col\">
\t\t\t\t\t<div class=\"team_member\">
\t\t\t\t\t\t<div class=\"team_member_image d-flex flex-column align-items-center justify-content-end\"><img src=\"images/team_4.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"team_member_info\">
\t\t\t\t\t\t\t<div class=\"team_member_name\"><a href=\"#\">Dr. William Stan</a></div>
\t\t\t\t\t\t\t<div class=\"team_member_title\">General Practicioner</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Call to action -->


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
        return "home/about.html.twig";
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
\t\t<div class=\"super_container\">


\t<div class=\"home\">
\t\t<div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/about.jpg\" data-speed=\"0.8\"></div>
\t\t<div class=\"home_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"home_content\">
\t\t\t\t\t\t\t<div class=\"home_title\">About <span>NoTreatment</span></div>
\t\t\t\t\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li>About NoTreatment</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- About -->

\t<div class=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<!-- About Content -->
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"section_title\"><h2>A great medical team to help your needs</h2></div>
\t\t\t\t\t<div class=\"about_text\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tEntrusting your health to a great medical team is a decision that brings peace of mind and assurance. Our exceptional medical team is dedicated to meeting your unique needs with expertise, compassion, and unwavering commitment. From the moment you walk through our doors, you are met with a collective effort to ensure your well-being. Our skilled professionals collaborate seamlessly, employing the latest advancements in medical care to provide personalized and comprehensive solutions. Whether you require routine check-ups or specialized treatments, our great medical team is here to guide you through your healthcare journey, prioritizing your health and comfort at every step. Your trust in us is the foundation of our commitment to delivering exceptional care tailored to meet and exceed your expectations. </p>
\t\t\t\t\t\t<p></p>
\t\t\t\t\t</div>
\t\t\t\t\t<center>
\t\t\t\t\t<div class=\"row loaders_container\">
\t\t\t\t\t\t<div class=\"col-md-3 loader_col\">
\t\t\t\t\t\t\t<!-- Loader -->
\t\t\t\t\t\t\t<div class=\"loader\" data-perc=\"0.75\"><span>Hard Work</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 loader_col\">
\t\t\t\t\t\t\t<!-- Loader -->
\t\t\t\t\t\t\t<div class=\"loader\" data-perc=\"0.95\"><span>Passion</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</center>
\t\t\t\t\t<div class=\"button about_button\"><a href=\"#\">read more</a></div>
\t\t\t\t</div>

\t\t\t\t<!-- Boxes -->
\t\t\t\t<div class=\"col-lg-4 boxes_col\">

\t\t\t\t\t<!-- Box -->
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

\t\t\t\t\t<!-- Box -->
\t\t\t\t\t<div class=\"box box_appointments\">
\t\t\t\t\t\t<div class=\"box_icon d-flex flex-column align-items-start justify-content-center\"><div style=\"width: 29px; height:29px;\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
\t\t\t\t\t\t<div class=\"box_title\">Appointments</div>
\t\t\t\t\t\t<div class=\"box_text\">Ready to schedule your appointment? We're here to make it easy and convenient for you.</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Box -->
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

\t<!-- Testimonials -->

\t<div class=\"testimonials\">
\t\t<div class=\"testimonials_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/testimonials.jpg\" data-speed=\"0.8\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"section_title section_title_light\"><h2>Patient Testimonials</h2></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row test_row\">
\t\t\t\t
\t\t\t\t<!-- Testimonial -->
\t\t\t\t<div class=\"col-lg-6 test_col\">
\t\t\t\t\t<div class=\"testimonial\">
\t\t\t\t\t\t<div class=\"test_icon d-flex flex-column align-items-center justify-content-center\"><img src=\"images/quote.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"test_text\">A heartfelt thank you to the incredible doctors who have made a positive difference in our lives. Your commitment to excellence, combined with your caring demeanor, has created a lasting impact. We are grateful for the invaluable contribution you've made to our health and well-being.</div>
\t\t\t\t\t\t<div class=\"test_author d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"test_author_image\"><div><img src=\"images/test_1.jpg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t<div class=\"test_author_name\"><a href=\"#\">Claire Smith</a>, <span>Patient</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Testimonial -->
\t\t\t\t<div class=\"col-lg-6 test_col\">
\t\t\t\t\t<div class=\"testimonial\">
\t\t\t\t\t\t<div class=\"test_icon d-flex flex-column align-items-center justify-content-center\"><img src=\"images/quote.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"test_text\">A sincere thank you to the remarkable doctors who went above and beyond in delivering personalized and compassionate healthcare. Your skillful guidance, empathetic approach, and tireless efforts have not only healed us physically but also provided immense comfort and reassurance during challenging times..</div>
\t\t\t\t\t\t<div class=\"test_author d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"test_author_image\"><div><img src=\"images/test_2.jpg\" alt=\"\"></div></div>
\t\t\t\t\t\t\t<div class=\"test_author_name\"><a href=\"#\">Mick Williams</a>, <span>Patient</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Team -->

\t<div class=\"team\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"section_title\"><h2>Meet Our Medical Team</h2></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row team_row\">
\t\t\t\t
\t\t\t\t<!-- Team Member -->
\t\t\t\t<div class=\"col-lg-3 team_col\">
\t\t\t\t\t<div class=\"team_member\">
\t\t\t\t\t\t<div class=\"team_member_image d-flex flex-column align-items-center justify-content-end\"><img src=\"images/team_1.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"team_member_info\">
\t\t\t\t\t\t\t<div class=\"team_member_name\"><a href=\"#\">Dr. Melissa Smith</a></div>
\t\t\t\t\t\t\t<div class=\"team_member_title\">Cardiologist</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Team Member -->
\t\t\t\t<div class=\"col-lg-3 team_col\">
\t\t\t\t\t<div class=\"team_member\">
\t\t\t\t\t\t<div class=\"team_member_image d-flex flex-column align-items-center justify-content-end\"><img src=\"images/team_2.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"team_member_info\">
\t\t\t\t\t\t\t<div class=\"team_member_name\"><a href=\"#\">Dr. Josh Henderson</a></div>
\t\t\t\t\t\t\t<div class=\"team_member_title\">Plastic Surgeon</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Team Member -->
\t\t\t\t<div class=\"col-lg-3 team_col\">
\t\t\t\t\t<div class=\"team_member\">
\t\t\t\t\t\t<div class=\"team_member_image d-flex flex-column align-items-center justify-content-end\"><img src=\"images/team_3.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"team_member_info\">
\t\t\t\t\t\t\t<div class=\"team_member_name\"><a href=\"#\">Dr. Christinne Jones</a></div>
\t\t\t\t\t\t\t<div class=\"team_member_title\">Pediatrist</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Team Member -->
\t\t\t\t<div class=\"col-lg-3 team_col\">
\t\t\t\t\t<div class=\"team_member\">
\t\t\t\t\t\t<div class=\"team_member_image d-flex flex-column align-items-center justify-content-end\"><img src=\"images/team_4.png\" alt=\"\"></div>
\t\t\t\t\t\t<div class=\"team_member_info\">
\t\t\t\t\t\t\t<div class=\"team_member_name\"><a href=\"#\">Dr. William Stan</a></div>
\t\t\t\t\t\t\t<div class=\"team_member_title\">General Practicioner</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Call to action -->


\t\t\t
{% endblock %}
", "home/about.html.twig", "C:\\Users\\oussa\\Desktop\\notreatment\\templates\\home\\about.html.twig");
    }
}
