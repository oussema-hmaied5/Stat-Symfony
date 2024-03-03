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

/* home/news.html.twig */
class __TwigTemplate_9ad640b53cff5f269722d48054b59d03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/news.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/news.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/news.html.twig", 1);
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
        echo "
\t<div class=\"home\">
\t\t<div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/news.jpg\" data-speed=\"0.8\"></div>
\t\t<div class=\"home_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"home_content\">
\t\t\t\t\t\t\t<div class=\"home_title\"><span>NoTreatment</span> News</div>
\t\t\t\t\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li>News</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t\t<div class=\"news\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<!-- News Posts -->
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"news_posts\">
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- News Post -->
\t\t\t\t\t\t<div class=\"news_post\">
\t\t\t\t\t\t\t<div class=\"news_image\">
\t\t\t\t\t\t\t\t<img src=\"images/news_1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"news_date d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"news_day\">15</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"news_month\">March</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"news_body\">
\t\t\t\t\t\t\t\t<div class=\"news_title\"><a href=\"#\">10 Reasons to make a check up</a></div>
\t\t\t\t\t\t\t\t<div class=\"news_info\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_author\"><span>By </span><a href=\"#\">Dr. William Smith</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_tags\"><span>in </span><a href=\"#\">Therapy</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_comments\"><a href=\"#\">3 Comments</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_text\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semp er solli citudin. Aliquam nec dapibus massa.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_link\"><a href=\"#\">Read More</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- News Post -->
\t\t\t\t\t\t<div class=\"news_post\">
\t\t\t\t\t\t\t<div class=\"news_image\">
\t\t\t\t\t\t\t\t<img src=\"images/news_2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"news_date d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"news_day\">15</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"news_month\">March</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"news_body\">
\t\t\t\t\t\t\t\t<div class=\"news_title\"><a href=\"#\">10 Reasons to make a check up</a></div>
\t\t\t\t\t\t\t\t<div class=\"news_info\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_author\"><span>By </span><a href=\"#\">Dr. William Smith</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_tags\"><span>in </span><a href=\"#\">Therapy</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_comments\"><a href=\"#\">3 Comments</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_text\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semp er solli citudin. Aliquam nec dapibus massa.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_link\"><a href=\"#\">Read More</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- News Post -->
\t\t\t\t\t\t<div class=\"news_post\">
\t\t\t\t\t\t\t<div class=\"news_image\">
\t\t\t\t\t\t\t\t<img src=\"images/news_3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"news_date d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"news_day\">15</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"news_month\">March</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"news_body\">
\t\t\t\t\t\t\t\t<div class=\"news_title\"><a href=\"#\">10 Reasons to make a check up</a></div>
\t\t\t\t\t\t\t\t<div class=\"news_info\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_author\"><span>By </span><a href=\"#\">Dr. William Smith</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_tags\"><span>in </span><a href=\"#\">Therapy</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_comments\"><a href=\"#\">3 Comments</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_text\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semp er solli citudin. Aliquam nec dapibus massa.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_link\"><a href=\"#\">Read More</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_page_nav\">
\t\t\t\t\t\t<center><ul>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">01.</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">02.</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">03.</a></li>
\t\t\t\t\t\t</ul></center>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Sidebar -->
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"sidebar\">

\t\t\t\t\t\t<!-- Search -->
\t\t\t\t\t\t<div class=\"sidebar_search\">
\t\t\t\t\t\t\t<form action=\"#\" id=\"sidebar_search_form\" class=\"sidebar_search_form\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search_input\" placeholder=\"Search\" required=\"required\">
\t\t\t\t\t\t\t\t<button class=\"search_button\"><img src=\"images/search.png\" alt=\"\"></button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Categories -->
\t\t\t\t\t\t<div class=\"sidebar_categories sidebar_section\">
\t\t\t\t\t\t\t<div class=\"sidebar_section_title\">
\t\t\t\t\t\t\t\t<div class=\"sidebar_title\">Categories</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Medical Articles</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Therapy</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Useful Information</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Uncategorized</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t


\t\t\t\t\t\t<!-- Ad -->
\t\t\t\t\t\t<div class=\"ad d-flex flex-column align-items-center justify-content-end\">
\t\t\t\t\t\t\t<div class=\"ad_background\" style=\"background-image:url(images/ad.jpg)\"></div>
\t\t\t\t\t\t\t<div class=\"ad_content\">
\t\t\t\t\t\t\t\t<div class=\"ad_text\">Come and take a <span>free screening</span></div>
\t\t\t\t\t\t\t\t<div class=\"button ad_button\"><a href=\"#\">read more</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

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
        return "home/news.html.twig";
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

\t<div class=\"home\">
\t\t<div class=\"home_background parallax-window\" data-parallax=\"scroll\" data-image-src=\"images/news.jpg\" data-speed=\"0.8\"></div>
\t\t<div class=\"home_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"home_content\">
\t\t\t\t\t\t\t<div class=\"home_title\"><span>NoTreatment</span> News</div>
\t\t\t\t\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li>News</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t\t<div class=\"news\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<!-- News Posts -->
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t<div class=\"news_posts\">
\t\t\t\t\t\t
\t\t\t\t\t\t<!-- News Post -->
\t\t\t\t\t\t<div class=\"news_post\">
\t\t\t\t\t\t\t<div class=\"news_image\">
\t\t\t\t\t\t\t\t<img src=\"images/news_1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"news_date d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"news_day\">15</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"news_month\">March</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"news_body\">
\t\t\t\t\t\t\t\t<div class=\"news_title\"><a href=\"#\">10 Reasons to make a check up</a></div>
\t\t\t\t\t\t\t\t<div class=\"news_info\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_author\"><span>By </span><a href=\"#\">Dr. William Smith</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_tags\"><span>in </span><a href=\"#\">Therapy</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_comments\"><a href=\"#\">3 Comments</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_text\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semp er solli citudin. Aliquam nec dapibus massa.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_link\"><a href=\"#\">Read More</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- News Post -->
\t\t\t\t\t\t<div class=\"news_post\">
\t\t\t\t\t\t\t<div class=\"news_image\">
\t\t\t\t\t\t\t\t<img src=\"images/news_2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"news_date d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"news_day\">15</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"news_month\">March</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"news_body\">
\t\t\t\t\t\t\t\t<div class=\"news_title\"><a href=\"#\">10 Reasons to make a check up</a></div>
\t\t\t\t\t\t\t\t<div class=\"news_info\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_author\"><span>By </span><a href=\"#\">Dr. William Smith</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_tags\"><span>in </span><a href=\"#\">Therapy</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_comments\"><a href=\"#\">3 Comments</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_text\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semp er solli citudin. Aliquam nec dapibus massa.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_link\"><a href=\"#\">Read More</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- News Post -->
\t\t\t\t\t\t<div class=\"news_post\">
\t\t\t\t\t\t\t<div class=\"news_image\">
\t\t\t\t\t\t\t\t<img src=\"images/news_3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t<div class=\"news_date d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"news_day\">15</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"news_month\">March</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"news_body\">
\t\t\t\t\t\t\t\t<div class=\"news_title\"><a href=\"#\">10 Reasons to make a check up</a></div>
\t\t\t\t\t\t\t\t<div class=\"news_info\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_author\"><span>By </span><a href=\"#\">Dr. William Smith</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_tags\"><span>in </span><a href=\"#\">Therapy</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"news_comments\"><a href=\"#\">3 Comments</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_text\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ante leo, finibus quis est ut, tempor tincidunt ipsum. Nam consequat semp er solli citudin. Aliquam nec dapibus massa.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"news_link\"><a href=\"#\">Read More</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"news_page_nav\">
\t\t\t\t\t\t<center><ul>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">01.</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">02.</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">03.</a></li>
\t\t\t\t\t\t</ul></center>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Sidebar -->
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"sidebar\">

\t\t\t\t\t\t<!-- Search -->
\t\t\t\t\t\t<div class=\"sidebar_search\">
\t\t\t\t\t\t\t<form action=\"#\" id=\"sidebar_search_form\" class=\"sidebar_search_form\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"search_input\" placeholder=\"Search\" required=\"required\">
\t\t\t\t\t\t\t\t<button class=\"search_button\"><img src=\"images/search.png\" alt=\"\"></button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Categories -->
\t\t\t\t\t\t<div class=\"sidebar_categories sidebar_section\">
\t\t\t\t\t\t\t<div class=\"sidebar_section_title\">
\t\t\t\t\t\t\t\t<div class=\"sidebar_title\">Categories</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Medical Articles</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Therapy</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Useful Information</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Uncategorized</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t


\t\t\t\t\t\t<!-- Ad -->
\t\t\t\t\t\t<div class=\"ad d-flex flex-column align-items-center justify-content-end\">
\t\t\t\t\t\t\t<div class=\"ad_background\" style=\"background-image:url(images/ad.jpg)\"></div>
\t\t\t\t\t\t\t<div class=\"ad_content\">
\t\t\t\t\t\t\t\t<div class=\"ad_text\">Come and take a <span>free screening</span></div>
\t\t\t\t\t\t\t\t<div class=\"button ad_button\"><a href=\"#\">read more</a></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t\t\t
{% endblock %}
", "home/news.html.twig", "C:\\Users\\oussa\\Desktop\\notreatment\\templates\\home\\news.html.twig");
    }
}
