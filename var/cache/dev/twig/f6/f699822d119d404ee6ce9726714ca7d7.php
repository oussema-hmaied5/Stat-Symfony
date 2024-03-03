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

/* home/service.html.twig */
class __TwigTemplate_6e21babcb0d73e7c5ba5bcd2acb939f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/service.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/service.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/service.html.twig", 1);
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
\t\t\t\t<!-- Home -->

\t<div class=\"home\">
\t\t<div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/about.jpg\" data-speed=\"0.8\"></div>
\t\t<div class=\"home_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"home_content\">
\t\t\t\t\t\t\t<div class=\"home_title\"><span>NoTreatment</span> Services</div>
\t\t\t\t\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li>Services</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Services -->

\t<div class=\"services\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"section_title\"><h2>Our Featured Services</h2></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row services_row\">
\t\t\t\t
\t\t\t\t<!-- Service -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 service_col\">
\t\t\t\t\t<a href=\"services.html\">
\t\t\t\t\t\t<div class=\"service text-center trans_200\">
\t\t\t\t\t\t\t<div class=\"service_icon\"><img class=\"svg\" src=\"images/users.png\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"service_title trans_200\">Users</div>
\t\t\t\t\t\t\t<div class=\"service_text\">
\t\t\t\t\t\t\t\t<p>Description</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Service -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 service_col\">
\t\t\t\t\t<a href=\"services.html\">
\t\t\t\t\t\t<div class=\"service text-center trans_200\">
\t\t\t\t\t\t\t<div class=\"service_icon\"><img class=\"svg\" src=\"images/don.png\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"service_title trans_200\">Donations</div>
\t\t\t\t\t\t\t<div class=\"service_text\">
\t\t\t\t\t\t\t\t<p>Description</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Service -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 service_col\">
\t\t\t\t\t<a href=\"services.html\">
\t\t\t\t\t\t<div class=\"service text-center trans_200\">
\t\t\t\t\t\t\t<div class=\"service_icon\"><img class=\"svg\" src=\"images/for.png\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"service_title trans_200\">Forums</div>
\t\t\t\t\t\t\t<div class=\"service_text\">
\t\t\t\t\t\t\t\t<p>Description</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Service -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 service_col\">
\t\t\t\t\t<a href=\"services.html\">
\t\t\t\t\t\t<div class=\"service text-center trans_200\">
\t\t\t\t\t\t\t<div class=\"service_icon\"><img class=\"svg\" src=\"images/dos.png\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"service_title trans_200\">Medical Records
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"service_text\">
\t\t\t\t\t\t\t\t<p>Description</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Service -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 service_col\">
\t\t\t\t\t<a href=\"services.html\">
\t\t\t\t\t\t<div class=\"service text-center trans_200\">
\t\t\t\t\t\t\t<div class=\"service_icon\"><img class=\"svg\" src=\"images/app.png\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"service_title trans_200\">Appointments</div>
\t\t\t\t\t\t\t<div class=\"service_text\">
\t\t\t\t\t\t\t\t<p>Description</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Service -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 service_col\">
\t\t\t\t\t<a href=\"services.html\">
\t\t\t\t\t\t<div class=\"service text-center trans_200\">
\t\t\t\t\t\t\t<div class=\"service_icon\"><img class=\"svg\" src=\"images/rec.png\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"service_title trans_200\">Complaints</div>
\t\t\t\t\t\t\t<div class=\"service_text\">
\t\t\t\t\t\t\t\t<p>Description</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t

\t\t\t\t\t\t

\t<!-- Text Section -->

\t<div class=\"text_section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<!-- Text Section Image -->
\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t<div class=\"text_section_image\"><img src=\"images/text_section.jpg\" alt=\"\"></div>
\t\t\t\t</div>

\t\t\t\t<!-- Text Section Content -->
\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t<div class=\"text_section_content\">
\t\t\t\t\t\t<div class=\"section_title\"><h2>A great medical team to help your needs</h2></div>
\t\t\t\t\t\t<div class=\"text_section_text\">
\t\t\t\t\t\t\t<p>Entrusting your health to a great medical team is a decision that brings peace of mind and assurance. Our exceptional medical team is dedicated to meeting your unique needs with expertise, compassion, and unwavering commitment. From the moment you walk through our doors, you are met with a collective effort to ensure your well-being. Our skilled professionals collaborate seamlessly, employing the latest advancements in medical care to provide personalized and comprehensive solutions. Whether you require routine check-ups or specialized treatments, our great medical team is here to guide you through your healthcare journey, prioritizing your health and comfort at every step. Your trust in us is the foundation of our commitment to delivering exceptional care tailored to meet and exceed your expectations.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"button text_section_button\"><a href=\"#\">read more</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Call to action -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/service.html.twig";
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
\t\t\t\t<!-- Home -->

\t<div class=\"home\">
\t\t<div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/about.jpg\" data-speed=\"0.8\"></div>
\t\t<div class=\"home_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"home_content\">
\t\t\t\t\t\t\t<div class=\"home_title\"><span>NoTreatment</span> Services</div>
\t\t\t\t\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li>Services</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Services -->

\t<div class=\"services\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col\">
\t\t\t\t\t<div class=\"section_title\"><h2>Our Featured Services</h2></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row services_row\">
\t\t\t\t
\t\t\t\t<!-- Service -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 service_col\">
\t\t\t\t\t<a href=\"services.html\">
\t\t\t\t\t\t<div class=\"service text-center trans_200\">
\t\t\t\t\t\t\t<div class=\"service_icon\"><img class=\"svg\" src=\"images/users.png\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"service_title trans_200\">Users</div>
\t\t\t\t\t\t\t<div class=\"service_text\">
\t\t\t\t\t\t\t\t<p>Description</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Service -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 service_col\">
\t\t\t\t\t<a href=\"services.html\">
\t\t\t\t\t\t<div class=\"service text-center trans_200\">
\t\t\t\t\t\t\t<div class=\"service_icon\"><img class=\"svg\" src=\"images/don.png\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"service_title trans_200\">Donations</div>
\t\t\t\t\t\t\t<div class=\"service_text\">
\t\t\t\t\t\t\t\t<p>Description</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Service -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 service_col\">
\t\t\t\t\t<a href=\"services.html\">
\t\t\t\t\t\t<div class=\"service text-center trans_200\">
\t\t\t\t\t\t\t<div class=\"service_icon\"><img class=\"svg\" src=\"images/for.png\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"service_title trans_200\">Forums</div>
\t\t\t\t\t\t\t<div class=\"service_text\">
\t\t\t\t\t\t\t\t<p>Description</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Service -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 service_col\">
\t\t\t\t\t<a href=\"services.html\">
\t\t\t\t\t\t<div class=\"service text-center trans_200\">
\t\t\t\t\t\t\t<div class=\"service_icon\"><img class=\"svg\" src=\"images/dos.png\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"service_title trans_200\">Medical Records
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"service_text\">
\t\t\t\t\t\t\t\t<p>Description</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Service -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 service_col\">
\t\t\t\t\t<a href=\"services.html\">
\t\t\t\t\t\t<div class=\"service text-center trans_200\">
\t\t\t\t\t\t\t<div class=\"service_icon\"><img class=\"svg\" src=\"images/app.png\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"service_title trans_200\">Appointments</div>
\t\t\t\t\t\t\t<div class=\"service_text\">
\t\t\t\t\t\t\t\t<p>Description</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<!-- Service -->
\t\t\t\t<div class=\"col-lg-4 col-md-6 service_col\">
\t\t\t\t\t<a href=\"services.html\">
\t\t\t\t\t\t<div class=\"service text-center trans_200\">
\t\t\t\t\t\t\t<div class=\"service_icon\"><img class=\"svg\" src=\"images/rec.png\" alt=\"\"></div>
\t\t\t\t\t\t\t<div class=\"service_title trans_200\">Complaints</div>
\t\t\t\t\t\t\t<div class=\"service_text\">
\t\t\t\t\t\t\t\t<p>Description</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t

\t\t\t\t\t\t

\t<!-- Text Section -->

\t<div class=\"text_section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<!-- Text Section Image -->
\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t<div class=\"text_section_image\"><img src=\"images/text_section.jpg\" alt=\"\"></div>
\t\t\t\t</div>

\t\t\t\t<!-- Text Section Content -->
\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t<div class=\"text_section_content\">
\t\t\t\t\t\t<div class=\"section_title\"><h2>A great medical team to help your needs</h2></div>
\t\t\t\t\t\t<div class=\"text_section_text\">
\t\t\t\t\t\t\t<p>Entrusting your health to a great medical team is a decision that brings peace of mind and assurance. Our exceptional medical team is dedicated to meeting your unique needs with expertise, compassion, and unwavering commitment. From the moment you walk through our doors, you are met with a collective effort to ensure your well-being. Our skilled professionals collaborate seamlessly, employing the latest advancements in medical care to provide personalized and comprehensive solutions. Whether you require routine check-ups or specialized treatments, our great medical team is here to guide you through your healthcare journey, prioritizing your health and comfort at every step. Your trust in us is the foundation of our commitment to delivering exceptional care tailored to meet and exceed your expectations.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"button text_section_button\"><a href=\"#\">read more</a></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Call to action -->

{% endblock %}
", "home/service.html.twig", "C:\\Users\\oussa\\Desktop\\notreatment\\templates\\home\\service.html.twig");
    }
}
