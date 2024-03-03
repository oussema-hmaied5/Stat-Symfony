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

/* baseback.html.twig */
class __TwigTemplate_c6b34934fe1e944b11816ab72ecfc6e6 extends Template
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
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseback.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"shortcut icon\" href=\"../../assets/images/favicon.png\" />

    <title> ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 9
        $this->displayBlock('css', $context, $blocks);
        // line 19
        echo "

  </head>

    <div class=\"container-scroller\">
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"../../index.html\"><img src=\"../../assets/images/favicon.png\" alt=\"logo\" /></a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"../../index.html\"><img src=\"../../assets/images/logo.png\" alt=\"logo\" /></a>
        </div>
        <ul class=\"nav\">
          <li class=\"nav-item profile\">
            <div class=\"profile-desc\">
              <div class=\"profile-pic\">
                <div class=\"count-indicator\">
                  <img class=\"img-xs rounded-circle \" src=\"../../assets/images/faces/face15.jpg\" alt=\"\">
                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  <h5 class=\"mb-0 font-weight-normal\">Henry Klein</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href=\"#\" id=\"profile-dropdown\" data-bs-toggle=\"dropdown\"><i class=\"mdi mdi-dots-vertical\"></i></a>
              <div class=\"dropdown-menu dropdown-menu-right sidebar-dropdown preview-list\" aria-labelledby=\"profile-dropdown\">
                <a href=\"#\" class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <div class=\"preview-icon bg-dark rounded-circle\">
                      <i class=\"mdi mdi-settings text-primary\"></i>
                    </div>
                  </div>
                  <div class=\"preview-item-content\">
                    <p class=\"preview-subject ellipsis mb-1 text-small\">Account settings</p>
                  </div>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <div class=\"preview-icon bg-dark rounded-circle\">
                      <i class=\"mdi mdi-onepassword  text-info\"></i>
                    </div>
                  </div>
                  <div class=\"preview-item-content\">
                    <p class=\"preview-subject ellipsis mb-1 text-small\">Change Password</p>
                  </div>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <div class=\"preview-icon bg-dark rounded-circle\">
                      <i class=\"mdi mdi-calendar-today text-success\"></i>
                    </div>
                  </div>
                  <div class=\"preview-item-content\">
                    <p class=\"preview-subject ellipsis mb-1 text-small\">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class=\"nav-item nav-category\">
            <span class=\"nav-link\">Navigation</span>
          </li>
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dossiermedical_index");
        echo "\" >

              <span class=\"menu-icon\">
                <i class=\"mdi mdi-speedometer\"></i>
              </span>
    <span class=\"menu-title\">Dossier Medical</span>
           </a>
          </li>
          
            <div class=\"collapse\" id=\"auth\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/blank-page.html\"> Blank Page </a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/error-404.html\"> 404 </a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/error-500.html\"> 500 </a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/login.html\"> Login </a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/register.html\"> Register </a></li>
              </ul>
            </div>
          </li>
          
      </nav>
      <!-- partial -->
      <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:../../partials/_navbar.html -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
          <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
            <a class=\"navbar-brand brand-logo-mini\" href=\"../../index.html\"><img src=\"../../assets/images/logo-mini.svg\" alt=\"logo\" /></a>
          </div>
          <div class=\"navbar-menu-wrapper flex-grow d-flex align-items-stretch\">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
              <span class=\"mdi mdi-menu\"></span>
            </button>
            <ul class=\"navbar-nav w-100\">
              <li class=\"nav-item w-100\">
                <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Search products\">
                </form>
              </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
              <li class=\"nav-item dropdown d-none d-lg-block\">
                <a class=\"nav-link btn btn-success create-new-button\" id=\"createbuttonDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">+ Create New Project</a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"createbuttonDropdown\">
                  <h6 class=\"p-3 mb-0\">Projects</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-file-outline text-primary\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">Software Development</p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-web text-info\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">UI Development</p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-layers text-danger\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">Software Testing</p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <p class=\"p-3 mb-0 text-center\">See all projects</p>
                </div>
              </li>
              <li class=\"nav-item nav-settings d-none d-lg-block\">
                <a class=\"nav-link\" href=\"#\">
                  <i class=\"mdi mdi-view-grid\"></i>
                </a>
              </li>
              <li class=\"nav-item dropdown border-left\">
                <a class=\"nav-link count-indicator dropdown-toggle\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  <i class=\"mdi mdi-email\"></i>
                  <span class=\"count bg-success\"></span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
                  <h6 class=\"p-3 mb-0\">Messages</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <img src=\"../../assets/images/faces/face4.jpg\" alt=\"image\" class=\"rounded-circle profile-pic\">
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">Mark send you a message</p>
                      <p class=\"text-muted mb-0\"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <img src=\"../../assets/images/faces/face2.jpg\" alt=\"image\" class=\"rounded-circle profile-pic\">
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">Cregh send you a message</p>
                      <p class=\"text-muted mb-0\"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <img src=\"../../assets/images/faces/face3.jpg\" alt=\"image\" class=\"rounded-circle profile-pic\">
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">Profile picture updated</p>
                      <p class=\"text-muted mb-0\"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <p class=\"p-3 mb-0 text-center\">4 new messages</p>
                </div>
              </li>
              <li class=\"nav-item dropdown border-left\">
                <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <i class=\"mdi mdi-bell\"></i>
                  <span class=\"count bg-danger\"></span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                  <h6 class=\"p-3 mb-0\">Notifications</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-calendar text-success\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Event today</p>
                      <p class=\"text-muted ellipsis mb-0\"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-settings text-danger\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Settings</p>
                      <p class=\"text-muted ellipsis mb-0\"> Update dashboard </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-link-variant text-warning\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Launch Admin</p>
                      <p class=\"text-muted ellipsis mb-0\"> New admin wow! </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <p class=\"p-3 mb-0 text-center\">See all notifications</p>
                </div>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    <img class=\"img-xs rounded-circle\" src=\"../../assets/images/faces/face15.jpg\" alt=\"\">
                    <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Henry Klein</p>
                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <h6 class=\"p-3 mb-0\">Profile</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-settings text-success\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Settings</p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-logout text-danger\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Log out</p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <p class=\"p-3 mb-0 text-center\">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
              <span class=\"mdi mdi-format-line-spacing\"></span>
          
            </button>

  

          </div>
          ";
        // line 302
        $this->displayBlock('content', $context, $blocks);
        // line 307
        echo "        </nav>
                       

         ";
        // line 310
        $this->displayBlock('footer', $context, $blocks);
        // line 330
        echo "                  ";
        $this->displayBlock('js', $context, $blocks);
        // line 350
        echo "
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "No Treatment Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 10
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

<link rel=\"stylesheet\" href=\"assets/vendors/jvectormap/jquery-jvectormap.css\">
    <link rel=\"stylesheet\" href=\"assets/vendors/flag-icon-css/css/flag-icon.min.css\">
    <link rel=\"stylesheet\" href=\"assets/vendors/owl-carousel-2/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"assets/vendors/owl-carousel-2/owl.theme.default.min.css\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 302
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 303
        echo "


                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 310
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 311
        echo "        <div class=\"main-panel\">
          <div class=\"content-wrapper\">
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class=\"footer\">
            <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
              <span class=\"text-muted d-block text-center text-sm-left d-sm-inline-block\">Copyright © DebuggerZ 2023 All rights reserved.</span>
              
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 330
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 331
        echo "
    <script src=\"../../assets/vendors/js/vendor.bundle.base.js\"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- Plugin js for this page -->
    <script src=\"assets/vendors/chart.js/Chart.min.js\"></script>
    <script src=\"assets/vendors/progressbar.js/progressbar.min.js\"></script>
    <script src=\"assets/vendors/jvectormap/jquery-jvectormap.min.js\"></script>
    <script src=\"assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js\"></script>
    <script src=\"assets/vendors/owl-carousel-2/owl.carousel.min.js\"></script>
    <script src=\"assets/js/jquery.cookie.js\" type=\"text/javascript\"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=\"../../assets/js/off-canvas.js\"></script>
    <script src=\"../../assets/js/hoverable-collapse.js\"></script>
    <script src=\"../../assets/js/misc.js\"></script>
    <script src=\"../../assets/js/settings.js\"></script>
    <script src=\"../../assets/js/todolist.js\"></script>
    <!-- endinject -->";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "baseback.html.twig";
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
        return array (  503 => 331,  493 => 330,  465 => 311,  455 => 310,  442 => 303,  432 => 302,  415 => 12,  411 => 11,  406 => 10,  396 => 9,  377 => 8,  363 => 350,  360 => 330,  358 => 310,  353 => 307,  351 => 302,  129 => 83,  63 => 19,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <link rel=\"shortcut icon\" href=\"../../assets/images/favicon.png\" />

    <title> {% block title %}No Treatment Admin{% endblock %}</title>
{% block css %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/vendors/css/vendor.bundle.base.css')}}\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/style.css')}}\">

<link rel=\"stylesheet\" href=\"assets/vendors/jvectormap/jquery-jvectormap.css\">
    <link rel=\"stylesheet\" href=\"assets/vendors/flag-icon-css/css/flag-icon.min.css\">
    <link rel=\"stylesheet\" href=\"assets/vendors/owl-carousel-2/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"assets/vendors/owl-carousel-2/owl.theme.default.min.css\">
        {% endblock %}


  </head>

    <div class=\"container-scroller\">
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
          <a class=\"sidebar-brand brand-logo\" href=\"../../index.html\"><img src=\"../../assets/images/favicon.png\" alt=\"logo\" /></a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"../../index.html\"><img src=\"../../assets/images/logo.png\" alt=\"logo\" /></a>
        </div>
        <ul class=\"nav\">
          <li class=\"nav-item profile\">
            <div class=\"profile-desc\">
              <div class=\"profile-pic\">
                <div class=\"count-indicator\">
                  <img class=\"img-xs rounded-circle \" src=\"../../assets/images/faces/face15.jpg\" alt=\"\">
                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  <h5 class=\"mb-0 font-weight-normal\">Henry Klein</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href=\"#\" id=\"profile-dropdown\" data-bs-toggle=\"dropdown\"><i class=\"mdi mdi-dots-vertical\"></i></a>
              <div class=\"dropdown-menu dropdown-menu-right sidebar-dropdown preview-list\" aria-labelledby=\"profile-dropdown\">
                <a href=\"#\" class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <div class=\"preview-icon bg-dark rounded-circle\">
                      <i class=\"mdi mdi-settings text-primary\"></i>
                    </div>
                  </div>
                  <div class=\"preview-item-content\">
                    <p class=\"preview-subject ellipsis mb-1 text-small\">Account settings</p>
                  </div>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <div class=\"preview-icon bg-dark rounded-circle\">
                      <i class=\"mdi mdi-onepassword  text-info\"></i>
                    </div>
                  </div>
                  <div class=\"preview-item-content\">
                    <p class=\"preview-subject ellipsis mb-1 text-small\">Change Password</p>
                  </div>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item preview-item\">
                  <div class=\"preview-thumbnail\">
                    <div class=\"preview-icon bg-dark rounded-circle\">
                      <i class=\"mdi mdi-calendar-today text-success\"></i>
                    </div>
                  </div>
                  <div class=\"preview-item-content\">
                    <p class=\"preview-subject ellipsis mb-1 text-small\">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class=\"nav-item nav-category\">
            <span class=\"nav-link\">Navigation</span>
          </li>
          <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"{{ path('app_dossiermedical_index') }}\" >

              <span class=\"menu-icon\">
                <i class=\"mdi mdi-speedometer\"></i>
              </span>
    <span class=\"menu-title\">Dossier Medical</span>
           </a>
          </li>
          
            <div class=\"collapse\" id=\"auth\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/blank-page.html\"> Blank Page </a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/error-404.html\"> 404 </a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/error-500.html\"> 500 </a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/login.html\"> Login </a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/register.html\"> Register </a></li>
              </ul>
            </div>
          </li>
          
      </nav>
      <!-- partial -->
      <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:../../partials/_navbar.html -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
          <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
            <a class=\"navbar-brand brand-logo-mini\" href=\"../../index.html\"><img src=\"../../assets/images/logo-mini.svg\" alt=\"logo\" /></a>
          </div>
          <div class=\"navbar-menu-wrapper flex-grow d-flex align-items-stretch\">
            <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
              <span class=\"mdi mdi-menu\"></span>
            </button>
            <ul class=\"navbar-nav w-100\">
              <li class=\"nav-item w-100\">
                <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Search products\">
                </form>
              </li>
            </ul>
            <ul class=\"navbar-nav navbar-nav-right\">
              <li class=\"nav-item dropdown d-none d-lg-block\">
                <a class=\"nav-link btn btn-success create-new-button\" id=\"createbuttonDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">+ Create New Project</a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"createbuttonDropdown\">
                  <h6 class=\"p-3 mb-0\">Projects</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-file-outline text-primary\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">Software Development</p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-web text-info\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">UI Development</p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-layers text-danger\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">Software Testing</p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <p class=\"p-3 mb-0 text-center\">See all projects</p>
                </div>
              </li>
              <li class=\"nav-item nav-settings d-none d-lg-block\">
                <a class=\"nav-link\" href=\"#\">
                  <i class=\"mdi mdi-view-grid\"></i>
                </a>
              </li>
              <li class=\"nav-item dropdown border-left\">
                <a class=\"nav-link count-indicator dropdown-toggle\" id=\"messageDropdown\" href=\"#\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                  <i class=\"mdi mdi-email\"></i>
                  <span class=\"count bg-success\"></span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
                  <h6 class=\"p-3 mb-0\">Messages</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <img src=\"../../assets/images/faces/face4.jpg\" alt=\"image\" class=\"rounded-circle profile-pic\">
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">Mark send you a message</p>
                      <p class=\"text-muted mb-0\"> 1 Minutes ago </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <img src=\"../../assets/images/faces/face2.jpg\" alt=\"image\" class=\"rounded-circle profile-pic\">
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">Cregh send you a message</p>
                      <p class=\"text-muted mb-0\"> 15 Minutes ago </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <img src=\"../../assets/images/faces/face3.jpg\" alt=\"image\" class=\"rounded-circle profile-pic\">
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject ellipsis mb-1\">Profile picture updated</p>
                      <p class=\"text-muted mb-0\"> 18 Minutes ago </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <p class=\"p-3 mb-0 text-center\">4 new messages</p>
                </div>
              </li>
              <li class=\"nav-item dropdown border-left\">
                <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <i class=\"mdi mdi-bell\"></i>
                  <span class=\"count bg-danger\"></span>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                  <h6 class=\"p-3 mb-0\">Notifications</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-calendar text-success\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Event today</p>
                      <p class=\"text-muted ellipsis mb-0\"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-settings text-danger\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Settings</p>
                      <p class=\"text-muted ellipsis mb-0\"> Update dashboard </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-link-variant text-warning\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Launch Admin</p>
                      <p class=\"text-muted ellipsis mb-0\"> New admin wow! </p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <p class=\"p-3 mb-0 text-center\">See all notifications</p>
                </div>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-bs-toggle=\"dropdown\">
                  <div class=\"navbar-profile\">
                    <img class=\"img-xs rounded-circle\" src=\"../../assets/images/faces/face15.jpg\" alt=\"\">
                    <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Henry Klein</p>
                    <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                  </div>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                  <h6 class=\"p-3 mb-0\">Profile</h6>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-settings text-success\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Settings</p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                      <div class=\"preview-icon bg-dark rounded-circle\">
                        <i class=\"mdi mdi-logout text-danger\"></i>
                      </div>
                    </div>
                    <div class=\"preview-item-content\">
                      <p class=\"preview-subject mb-1\">Log out</p>
                    </div>
                  </a>
                  <div class=\"dropdown-divider\"></div>
                  <p class=\"p-3 mb-0 text-center\">Advanced settings</p>
                </div>
              </li>
            </ul>
            <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
              <span class=\"mdi mdi-format-line-spacing\"></span>
          
            </button>

  

          </div>
          {% block content %}



                {% endblock %}
        </nav>
                       

         {% block footer %}
        <div class=\"main-panel\">
          <div class=\"content-wrapper\">
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class=\"footer\">
            <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
              <span class=\"text-muted d-block text-center text-sm-left d-sm-inline-block\">Copyright © DebuggerZ 2023 All rights reserved.</span>
              
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
                {% endblock %}
                  {% block js %}

    <script src=\"../../assets/vendors/js/vendor.bundle.base.js\"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- Plugin js for this page -->
    <script src=\"assets/vendors/chart.js/Chart.min.js\"></script>
    <script src=\"assets/vendors/progressbar.js/progressbar.min.js\"></script>
    <script src=\"assets/vendors/jvectormap/jquery-jvectormap.min.js\"></script>
    <script src=\"assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js\"></script>
    <script src=\"assets/vendors/owl-carousel-2/owl.carousel.min.js\"></script>
    <script src=\"assets/js/jquery.cookie.js\" type=\"text/javascript\"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=\"../../assets/js/off-canvas.js\"></script>
    <script src=\"../../assets/js/hoverable-collapse.js\"></script>
    <script src=\"../../assets/js/misc.js\"></script>
    <script src=\"../../assets/js/settings.js\"></script>
    <script src=\"../../assets/js/todolist.js\"></script>
    <!-- endinject -->{% endblock %}

    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>", "baseback.html.twig", "C:\\Users\\oussa\\Desktop\\notreatment\\templates\\baseback.html.twig");
    }
}
