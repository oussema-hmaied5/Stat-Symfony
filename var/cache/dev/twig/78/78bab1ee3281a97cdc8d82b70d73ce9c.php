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

/* base.html.twig */
class __TwigTemplate_b051e9aefde8bd775eeb54ee40c7c59d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">


<head>

<title> ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<link rel=\"shortcut icon\" type=\"x-icon\" href=\"images/lg.webp\" >
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

";
        // line 14
        $this->displayBlock('css', $context, $blocks);
        // line 26
        echo "</head>


<body>
  
\t<!--< <div class=\"preloader\">
        <div class=\"spinner\"></div>
    </div>>-->
<div class=\"super_container\">
\t
\t<!-- Header -->

\t<header class=\"header trans_200\">
\t\t
\t\t<!-- Top Bar -->
\t\t<div class=\"top_bar\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"top_bar_content d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"top_bar_item\"><a href=\"#\">FAQ</a></div>
\t\t\t\t\t\t\t<div class=\"top_bar_item\"><a href=\"#\">Request an Appointment</a></div>
\t\t\t\t\t\t\t<div class=\"emergencies  d-flex flex-row align-items-center justify-content-start ml-auto\">For Emergencies: +216 79 700 794 </div>
\t\t\t\t\t\t\t<div class=\"top_bar_item\"><a href=\"#\">Sign in</a></div>
\t\t\t\t\t\t\t<div class=\"top_bar_item\"><a href=\"#\">Sign up</a></div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/profile.php?id=61556113524851\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Header Content -->
\t\t<div class=\"header_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"header_content d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<nav class=\"main_nav ml-auto\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About us</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"services.html\">Services</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"news.html\">News</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<div class=\"hamburger ml-auto\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Logo -->
\t\t<div class=\"logo_container_outer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"logo_content justify-content-center\">
\t\t\t\t\t\t\t\t\t<div class=\"logo_line\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"logo d-flex flex-row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"logo_text\">No<span>Treatment</span></div>
\t\t\t\t\t\t\t\t\t\t<img src=\"images/log.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"logo_sub\">DebuggerZ</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>

\t</header>
 ";
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 145
        echo "<!-- Services -->

    <div class=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"section_title\"><h2>Reclamations</h2></div>
                </div>
            </div>
            <div class=\"row services_row\">

                ";
        // line 156
        $this->displayBlock('content', $context, $blocks);
        // line 158
        echo "        </div>
    </div>

\t<!-- Footer -->
 ";
        // line 162
        $this->displayBlock('footer', $context, $blocks);
        // line 195
        echo "
\t\t\t\t\t<!-- Footer - Links -->
\t\t\t\t\t<div class=\"col-lg-4 footer_col\">
\t\t\t\t\t\t<div class=\"footer_links footer_column\">
\t\t\t\t\t\t\t<div class=\"footer_title\">Useful Links</div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Testimonials</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">FAQ</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Apply for a Job</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Terms & Conditions</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Our Partners</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Services</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Free services</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">About us</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">News</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Donations</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Our Screening Program</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">FAQ</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Footer - News -->
\t\t\t\t\t
\t\t<div class=\"copyright\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t<center>\t<div class=\"copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"cr\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<center >Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by DebuggerZ</center>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div></center>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t</div>
\t</footer>
</div>
  ";
        // line 236
        $this->displayBlock('js', $context, $blocks);
        // line 251
        echo "
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "NoTreatment";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 15
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/main_styles.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/responsive.css"), "html", null, true);
        echo "\">



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 111
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 112
        echo "
\t<!-- Menu -->

\t<div class=\"menu_container menu_mm\">

\t\t<!-- Menu Close Button -->
\t\t<div class=\"menu_close_container\">
\t\t\t<div class=\"menu_close\"></div>
\t\t</div>

\t\t<!-- Menu Items -->
\t\t<div class=\"menu_inner menu_mm\">
\t\t\t<div class=\"menu menu_mm\">
\t\t\t\t<ul class=\"menu_list menu_mm\">
\t\t\t\t\t<li class=\"menu_item menu_mm\"><a href=\"index.html\">Home</a></li>
\t\t\t\t\t<li class=\"menu_item menu_mm\"><a href=\"about.html\">About us</a></li>
\t\t\t\t\t<li class=\"menu_item menu_mm\"><a href=\"services.html\">Services</a></li>
\t\t\t\t\t<li class=\"menu_item menu_mm\"><a href=\"news.html\">News</a></li>
\t\t\t\t\t<li class=\"menu_item menu_mm\"><a href=\"contact.html\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"menu_extra\">
\t\t\t\t<div class=\"menu_appointment\"><a href=\"#\">Request an Appointment</a></div>
\t\t\t\t<div class=\"menu_emergencies\">For Emergencies: +216 79 700 794</div>
\t\t\t</div>

\t\t</div>

\t</div>
\t
\t<!-- Home -->

\t ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 156
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 157
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 162
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 163
        echo "
\t<footer class=\"footer\">
\t\t<div class=\"footer_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- Footer - About -->
\t\t\t\t\t<div class=\"col-lg-4 footer_col\">
\t\t\t\t\t\t<div class=\"footer_about\">
\t\t\t\t\t\t\t<div class=\"footer_logo_container\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<div class=\"logo_content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"logo d-flex flex-row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<center>\t<div class=\"logo_text\">No<span>Treatment</span></div> </center>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/log.svg\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"logo_sub\">DebuggerZ</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"footer_about_text\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"footer_about_list\">
\t\t\t\t\t\t\t\t<li><div class=\"footer_about_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div><span>+216 79 700 794</span></li>
\t\t\t\t\t\t\t\t<li><div class=\"footer_about_icon\"><img src=\"images/envelope.svg\" alt=\"\"></div><span>NoTreatment@gmail.com</span></li>
\t\t\t\t\t\t\t\t<li><div class=\"footer_about_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div><span>Al Ghazela, Tunisia</span></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
         ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 236
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 237
        echo "
<script src=\"js/jquery-3.2.1.min.js\"></script>
<script src=\"styles/bootstrap4/popper.js\"></script>
<script src=\"styles/bootstrap4/bootstrap.min.js\"></script>
<script src=\"plugins/OwlCarousel2-2.2.1/owl.carousel.js\"></script>
<script src=\"plugins/easing/easing.js\"></script>
<script src=\"plugins/parallax-js-master/parallax.min.js\"></script>
<script src=\"js/custom.js\"></script>
<script>document.addEventListener(\"DOMContentLoaded\", function () {
\t\t// Hide the preloader and show the content when the page is fully loaded
\t\tdocument.querySelector('.preloader').style.display = 'none';
\t\tdocument.querySelector('.content').style.display = 'block';
\t});</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  441 => 237,  431 => 236,  390 => 163,  380 => 162,  370 => 157,  360 => 156,  318 => 112,  308 => 111,  293 => 21,  289 => 20,  285 => 19,  281 => 18,  277 => 17,  273 => 16,  268 => 15,  258 => 14,  239 => 7,  226 => 251,  224 => 236,  181 => 195,  179 => 162,  173 => 158,  171 => 156,  158 => 145,  156 => 111,  69 => 26,  67 => 14,  57 => 7,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">


<head>

<title> {% block title %}NoTreatment{% endblock %}</title>
<link rel=\"shortcut icon\" type=\"x-icon\" href=\"images/lg.webp\" >
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

{% block css %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('styles/bootstrap4/bootstrap.min.css')}}\">
<link href=\"{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}} \" rel=\"stylesheet\" type=\"text/css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('styles/main_styles.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('styles/responsive.css')}}\">



{% endblock %}
</head>


<body>
  
\t<!--< <div class=\"preloader\">
        <div class=\"spinner\"></div>
    </div>>-->
<div class=\"super_container\">
\t
\t<!-- Header -->

\t<header class=\"header trans_200\">
\t\t
\t\t<!-- Top Bar -->
\t\t<div class=\"top_bar\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"top_bar_content d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"top_bar_item\"><a href=\"#\">FAQ</a></div>
\t\t\t\t\t\t\t<div class=\"top_bar_item\"><a href=\"#\">Request an Appointment</a></div>
\t\t\t\t\t\t\t<div class=\"emergencies  d-flex flex-row align-items-center justify-content-start ml-auto\">For Emergencies: +216 79 700 794 </div>
\t\t\t\t\t\t\t<div class=\"top_bar_item\"><a href=\"#\">Sign in</a></div>
\t\t\t\t\t\t\t<div class=\"top_bar_item\"><a href=\"#\">Sign up</a></div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/profile.php?id=61556113524851\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t&nbsp;&nbsp;&nbsp;&nbsp;
\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Header Content -->
\t\t<div class=\"header_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"header_content d-flex flex-row align-items-center justify-content-start\">
\t\t\t\t\t\t\t<nav class=\"main_nav ml-auto\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About us</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"services.html\">Services</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"news.html\">News</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<div class=\"hamburger ml-auto\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Logo -->
\t\t<div class=\"logo_container_outer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t<div class=\"logo_container\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<div class=\"logo_content justify-content-center\">
\t\t\t\t\t\t\t\t\t<div class=\"logo_line\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"logo d-flex flex-row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"logo_text\">No<span>Treatment</span></div>
\t\t\t\t\t\t\t\t\t\t<img src=\"images/log.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"logo_sub\">DebuggerZ</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>

\t</header>
 {% block body %}

\t<!-- Menu -->

\t<div class=\"menu_container menu_mm\">

\t\t<!-- Menu Close Button -->
\t\t<div class=\"menu_close_container\">
\t\t\t<div class=\"menu_close\"></div>
\t\t</div>

\t\t<!-- Menu Items -->
\t\t<div class=\"menu_inner menu_mm\">
\t\t\t<div class=\"menu menu_mm\">
\t\t\t\t<ul class=\"menu_list menu_mm\">
\t\t\t\t\t<li class=\"menu_item menu_mm\"><a href=\"index.html\">Home</a></li>
\t\t\t\t\t<li class=\"menu_item menu_mm\"><a href=\"about.html\">About us</a></li>
\t\t\t\t\t<li class=\"menu_item menu_mm\"><a href=\"services.html\">Services</a></li>
\t\t\t\t\t<li class=\"menu_item menu_mm\"><a href=\"news.html\">News</a></li>
\t\t\t\t\t<li class=\"menu_item menu_mm\"><a href=\"contact.html\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"menu_extra\">
\t\t\t\t<div class=\"menu_appointment\"><a href=\"#\">Request an Appointment</a></div>
\t\t\t\t<div class=\"menu_emergencies\">For Emergencies: +216 79 700 794</div>
\t\t\t</div>

\t\t</div>

\t</div>
\t
\t<!-- Home -->

\t {% endblock %}
<!-- Services -->

    <div class=\"services\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"section_title\"><h2>Reclamations</h2></div>
                </div>
            </div>
            <div class=\"row services_row\">

                {% block content %}
                {% endblock %}
        </div>
    </div>

\t<!-- Footer -->
 {% block footer %}

\t<footer class=\"footer\">
\t\t<div class=\"footer_container\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<!-- Footer - About -->
\t\t\t\t\t<div class=\"col-lg-4 footer_col\">
\t\t\t\t\t\t<div class=\"footer_about\">
\t\t\t\t\t\t\t<div class=\"footer_logo_container\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex flex-column align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<div class=\"logo_content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"logo d-flex flex-row align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<center>\t<div class=\"logo_text\">No<span>Treatment</span></div> </center>
\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/log.svg\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"logo_sub\">DebuggerZ</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"footer_about_text\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"footer_about_list\">
\t\t\t\t\t\t\t\t<li><div class=\"footer_about_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div><span>+216 79 700 794</span></li>
\t\t\t\t\t\t\t\t<li><div class=\"footer_about_icon\"><img src=\"images/envelope.svg\" alt=\"\"></div><span>NoTreatment@gmail.com</span></li>
\t\t\t\t\t\t\t\t<li><div class=\"footer_about_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div><span>Al Ghazela, Tunisia</span></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
         {% endblock %}

\t\t\t\t\t<!-- Footer - Links -->
\t\t\t\t\t<div class=\"col-lg-4 footer_col\">
\t\t\t\t\t\t<div class=\"footer_links footer_column\">
\t\t\t\t\t\t\t<div class=\"footer_title\">Useful Links</div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Testimonials</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">FAQ</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Apply for a Job</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Terms & Conditions</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Our Partners</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Services</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Free services</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">About us</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">News</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Donations</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Our Screening Program</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">FAQ</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Footer - News -->
\t\t\t\t\t
\t\t<div class=\"copyright\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t<center>\t<div class=\"copyright_content d-flex flex-lg-row flex-column align-items-lg-center justify-content-start\">
\t\t\t\t\t\t\t<div class=\"cr\"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<center >Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by DebuggerZ</center>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div></center>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t\t
\t\t</div>
\t</footer>
</div>
  {% block js %}

<script src=\"js/jquery-3.2.1.min.js\"></script>
<script src=\"styles/bootstrap4/popper.js\"></script>
<script src=\"styles/bootstrap4/bootstrap.min.js\"></script>
<script src=\"plugins/OwlCarousel2-2.2.1/owl.carousel.js\"></script>
<script src=\"plugins/easing/easing.js\"></script>
<script src=\"plugins/parallax-js-master/parallax.min.js\"></script>
<script src=\"js/custom.js\"></script>
<script>document.addEventListener(\"DOMContentLoaded\", function () {
\t\t// Hide the preloader and show the content when the page is fully loaded
\t\tdocument.querySelector('.preloader').style.display = 'none';
\t\tdocument.querySelector('.content').style.display = 'block';
\t});</script>
{% endblock %}

</body>
</html>
", "base.html.twig", "C:\\Users\\oussa\\Desktop\\notreatment\\templates\\base.html.twig");
    }
}
