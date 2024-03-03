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

/* consultation/index.html.twig */
class __TwigTemplate_db7561656147c563583b31d07b90107e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "consultation/index.html.twig", 1);
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

        echo "Consultation index";
        
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
        echo "    <h1>Consultation index</h1>
<br><br><br><br><br>

<center>
  
 <a class=\"fcc_btn\" style=\" border:none; background-color: cadetblue; color:#fff; padding:10px 20px; font-size:16px; margin:20px; cursor: pointer;\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_consultation_telecons");
        echo "\">Teleconsultation</a>
                 <a class=\"fcc_btn\" style=\" border:none; background-color: cadetblue; color:#fff; padding:10px 20px; font-size:16px; margin:20px; cursor: pointer;\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_consultation_new");
        echo "\">book online consultation</a>
                 <div class=\"article\" style=\"background-color: #f2f2f2;margin-top: 60px;margin-bottom: 30px; padding: 20px; border-radius: 5px; width:400px; heigth:200px \">
                        <img src=\"/images/urgent.svg\" alt=\"Description\" width=\"100\" height=\"100\" margin-top= \"60px\" margin-bottom= \"360px\">

        <p>Pour les situations constituant une URGENCE, nous vous recommandons d’appeler un service d’urgences ou bien e vous adresser au service d’urgence le plus proche de vous.</p>
                  </div> 
                  <h1>Blog</h1>
    
   
    
        <table>

<tbody>

            <tr>
            <td>
    <div class=\"article\" style=\"background-color: #f2f2f2; padding: 20px; border-radius: 5px; width:400px; heigth:900px \">
        <h2>This is an article created by our precious members</h2>
                <img src=\"/images/health_worker.svg\" alt=\"Description\" width=\"300\" height=\"200\" margin-top= \"60px\" margin-bottom= \"60px\">

        <p>My experience with the Dentist was amazingly unforgettable, i would recommand noTreatment</p>
    </div>
    </td>
    
              <td>

    <div class=\"article\" style=\"background-color: #f2f2f2; padding: 20px; border-radius: 5px; width:400px; heigth:200px \">
        <h2>This is an article created by our precious members</h2>
                        <img src=\"/images/telecons.svg\" alt=\"Description\" width=\"300\" height=\"200\">

        <p>Video Consultation is a life and time saving, no queue waiting. Thank you</p>
    </div>
    </td>
     <td>

    <div class=\"article\" style=\"background-color: #f2f2f2; padding: 20px; border-radius: 5px; width:400px; heigth:200px \">
        <h2>This is an article created by our precious members</h2>
                        <img src=\"/images/dossier_med.svg\" alt=\"Description\" width=\"300\" height=\"200\">

        <p>I'm more comfortable with my health because i feel safe using these organized doc schedules</p>
    </div>
    </td>
                        </tr>

         
        </tbody>
            </table>
                </center>

<script>
        var body = document.getElementsByTagName(\"body\");
        var div = document.createElement(\"div\");
        var host = window.location.host ? window.location.origin : 'http://localhost/';
        div.innerHTML = `<iframe id=\"synvision_ai_iframe\" name=\"synvision_ai_iframe\" src=\"http://synvision.ai/chat-iframe?uuid=VNCYgMgf&host=\${host}\" height = \"960px\" width = \"750px\" style=\"position:fixed;right:0;bottom: 50px;z-index: 100;border:none\"></iframe>`;
        document.body.appendChild(div);
    </script>
</div>

    

  <h1 class=\"display-4\">Consultation List</h1>
        <div class=\"my-5\"></div>

        <table class=\"table table-bordered\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Patient</th>
                    <th scope=\"col\">Docteur</th>
                    <th scope=\"col\">Dossier medical</th>
                    <th scope=\"col\">Date Consultation</th>
                    <th scope=\"col\">Email</th>

                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["consultations"]) || array_key_exists("consultations", $context) ? $context["consultations"] : (function () { throw new RuntimeError('Variable "consultations" does not exist.', 89, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["consultation"]) {
            // line 90
            echo "                    <tr>
                        <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultation"], "id", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                        <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultation"], "patient", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                        <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultation"], "docteur", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                        <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["consultation"], "dossiermedical", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
<td>";
            // line 95
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultation"], "dateconsultation", [], "any", false, false, false, 95), "Y-m-d"), "html", null, true);
            echo "</td>

                        <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultation"], "Email", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>

                        <td>
                            <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["consultation"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\">
                                ";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Voir"), "html", null, true);
            echo "
                            </a>
                            <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["consultation"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            echo "\" class=\"btn btn-warning btn-sm\">
                                ";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Éditer"), "html", null, true);
            echo "
                            </a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 109
            echo "                    <tr>
                        <td colspan=\"3\">";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucune consultation trouvée."), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['consultation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "            </tbody>
        </table>
       
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "consultation/index.html.twig";
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
        return array (  249 => 113,  240 => 110,  237 => 109,  227 => 104,  223 => 103,  218 => 101,  214 => 100,  208 => 97,  203 => 95,  199 => 94,  195 => 93,  191 => 92,  187 => 91,  184 => 90,  179 => 89,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Consultation index{% endblock %}

{% block body %}
    <h1>Consultation index</h1>
<br><br><br><br><br>

<center>
  
 <a class=\"fcc_btn\" style=\" border:none; background-color: cadetblue; color:#fff; padding:10px 20px; font-size:16px; margin:20px; cursor: pointer;\" href=\"{{ url('app_consultation_telecons') }}\">Teleconsultation</a>
                 <a class=\"fcc_btn\" style=\" border:none; background-color: cadetblue; color:#fff; padding:10px 20px; font-size:16px; margin:20px; cursor: pointer;\" href=\"{{ url('app_consultation_new') }}\">book online consultation</a>
                 <div class=\"article\" style=\"background-color: #f2f2f2;margin-top: 60px;margin-bottom: 30px; padding: 20px; border-radius: 5px; width:400px; heigth:200px \">
                        <img src=\"/images/urgent.svg\" alt=\"Description\" width=\"100\" height=\"100\" margin-top= \"60px\" margin-bottom= \"360px\">

        <p>Pour les situations constituant une URGENCE, nous vous recommandons d’appeler un service d’urgences ou bien e vous adresser au service d’urgence le plus proche de vous.</p>
                  </div> 
                  <h1>Blog</h1>
    
   
    
        <table>

<tbody>

            <tr>
            <td>
    <div class=\"article\" style=\"background-color: #f2f2f2; padding: 20px; border-radius: 5px; width:400px; heigth:900px \">
        <h2>This is an article created by our precious members</h2>
                <img src=\"/images/health_worker.svg\" alt=\"Description\" width=\"300\" height=\"200\" margin-top= \"60px\" margin-bottom= \"60px\">

        <p>My experience with the Dentist was amazingly unforgettable, i would recommand noTreatment</p>
    </div>
    </td>
    
              <td>

    <div class=\"article\" style=\"background-color: #f2f2f2; padding: 20px; border-radius: 5px; width:400px; heigth:200px \">
        <h2>This is an article created by our precious members</h2>
                        <img src=\"/images/telecons.svg\" alt=\"Description\" width=\"300\" height=\"200\">

        <p>Video Consultation is a life and time saving, no queue waiting. Thank you</p>
    </div>
    </td>
     <td>

    <div class=\"article\" style=\"background-color: #f2f2f2; padding: 20px; border-radius: 5px; width:400px; heigth:200px \">
        <h2>This is an article created by our precious members</h2>
                        <img src=\"/images/dossier_med.svg\" alt=\"Description\" width=\"300\" height=\"200\">

        <p>I'm more comfortable with my health because i feel safe using these organized doc schedules</p>
    </div>
    </td>
                        </tr>

         
        </tbody>
            </table>
                </center>

<script>
        var body = document.getElementsByTagName(\"body\");
        var div = document.createElement(\"div\");
        var host = window.location.host ? window.location.origin : 'http://localhost/';
        div.innerHTML = `<iframe id=\"synvision_ai_iframe\" name=\"synvision_ai_iframe\" src=\"http://synvision.ai/chat-iframe?uuid=VNCYgMgf&host=\${host}\" height = \"960px\" width = \"750px\" style=\"position:fixed;right:0;bottom: 50px;z-index: 100;border:none\"></iframe>`;
        document.body.appendChild(div);
    </script>
</div>

    

  <h1 class=\"display-4\">Consultation List</h1>
        <div class=\"my-5\"></div>

        <table class=\"table table-bordered\">
            <thead class=\"thead-dark\">
                <tr>
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Patient</th>
                    <th scope=\"col\">Docteur</th>
                    <th scope=\"col\">Dossier medical</th>
                    <th scope=\"col\">Date Consultation</th>
                    <th scope=\"col\">Email</th>

                    <th scope=\"col\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for consultation in consultations %}
                    <tr>
                        <td>{{ consultation.id }}</td>
                        <td>{{ consultation.patient }}</td>
                        <td>{{ consultation.docteur }}</td>
                        <td>{{ consultation.dossiermedical.id }}</td>
<td>{{ consultation.dateconsultation|date('Y-m-d') }}</td>

                        <td>{{ consultation.Email }}</td>

                        <td>
                            <a href=\"{{ path('app_consultation_show', {'id': consultation.id}) }}\" class=\"btn btn-info btn-sm\">
                                {{ 'Voir'|trans }}
                            </a>
                            <a href=\"{{ path('app_consultation_edit', {'id': consultation.id}) }}\" class=\"btn btn-warning btn-sm\">
                                {{ 'Éditer'|trans }}
                            </a>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"3\">{{ 'Aucune consultation trouvée.'|trans }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
       
{% endblock %}






", "consultation/index.html.twig", "C:\\Users\\oussa\\Desktop\\notreatment\\templates\\consultation\\index.html.twig");
    }
}
