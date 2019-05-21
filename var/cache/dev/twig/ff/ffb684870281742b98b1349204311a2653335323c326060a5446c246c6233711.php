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

/* SoporteBundle:Bitacora:index.html.twig */
class __TwigTemplate_a3994eebd5d1eac341fcead766b0713f65638c328154c2909f9de2388b9f4db8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SoporteBundle:Bitacora:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SoporteBundle:Bitacora:index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
        <meta name=\"description\" content=\"bootstrap admin template\">
        <meta name=\"author\" content=\"\">
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"apple-touch-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/topbar/images/apple-touch-icon.png"), "html", null, true);
        echo "?v=1\">
        ";
        // line 12
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "?v=1\">
        <!-- Stylesheets -->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/css/bootstrap.min.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/css/bootstrap-extend.min.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/topbar/css/site.min.css"), "html", null, true);
        echo "?v=1\">
        <!-- Plugins -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/vendor/animsition/animsition.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/vendor/asscrollable/asScrollable.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/vendor/switchery/switchery.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/vendor/intro-js/introjs.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/vendor/slidepanel/slidePanel.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/vendor/flag-icon-css/flag-icon.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/vendor/toastr/toastr.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/vendor/alertify/alertify.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/alertify.css"), "html", null, true);
        echo "\">
        <!-- Fonts -->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/fonts/web-icons/web-icons.min.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/fonts/brand-icons/brand-icons.min.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/fonts/material-design/material-design.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/spin/jquery.spin.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/vendor/select2/select2.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fonts_googleapi.css"), "html", null, true);
        echo "?v=1\">
        <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-toggle.min.css"), "html", null, true);
        echo "?v=1\">
    ";
        // line 37
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "    <!-- Scripts -->
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/vendor/breakpoints/breakpoints.js"), "html", null, true);
        echo "?v=1\"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <table class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha y Hora</th>
                            <th>Luminosidad</th>
                            <th>Temperatura</th>
                            <th>Presion</th>
                            <th>Humedad</th>
                        </tr>
                    </thead>
                    <tbody id=\"tabla\">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/vendor/babel-external-helpers/babel-external-helpers.js"), "html", null, true);
        echo "?v=1\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/vendor/jquery/jquery.js"), "html", null, true);
        echo "?v=1\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/vendor/tether/tether.js"), "html", null, true);
        echo "?v=1\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/global/vendor/bootstrap/bootstrap.js"), "html", null, true);
        echo "?v=1\"></script>

    <script>
        \$(document).ready(function () {
            ajax();
            setInterval(function () {
                ajax();
            }, 3000);
        });
        function ajax() {

            \$.get(\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("soporte_ajax");
        echo "\", function (response) {
                \$('#tabla').html(\"\");
                var contador = 1;
                \$.each(response, function (i, item) {
                    \$('#tabla').append(\"<tr><td>\" + contador + \"</td><td>\" + item.fecha_hora + \"</td><td>\" + item.luminosidad + \"</td><td>\" + item.temperatura + \"</td><td>\" + item.presion + \"</td><td>\" + item.humedad + \"</td></tr>\");
                    contador++;
                });
            }, 'json');
        }
    </script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "WebPos";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "SoporteBundle:Bitacora:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 37,  238 => 9,  216 => 82,  202 => 71,  198 => 70,  194 => 69,  190 => 68,  158 => 39,  155 => 38,  153 => 37,  149 => 36,  145 => 35,  141 => 34,  137 => 33,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  116 => 27,  112 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  84 => 19,  80 => 18,  75 => 16,  71 => 15,  67 => 14,  61 => 12,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
        <meta name=\"description\" content=\"bootstrap admin template\">
        <meta name=\"author\" content=\"\">
        <title>{% block title %}WebPos{% endblock %}</title>
        <link rel=\"apple-touch-icon\" href=\"{{ asset('assets/topbar/images/apple-touch-icon.png') }}?v=1\">
        {#        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />#}
        <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.ico') }}?v=1\">
        <!-- Stylesheets -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/bootstrap.min.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/css/bootstrap-extend.min.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/topbar/css/site.min.css') }}?v=1\">
        <!-- Plugins -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/vendor/animsition/animsition.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/vendor/asscrollable/asScrollable.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/vendor/switchery/switchery.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/vendor/intro-js/introjs.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/vendor/slidepanel/slidePanel.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/vendor/flag-icon-css/flag-icon.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/vendor/toastr/toastr.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/vendor/alertify/alertify.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/alertify.css') }}\">
        <!-- Fonts -->
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/fonts/web-icons/web-icons.min.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/fonts/brand-icons/brand-icons.min.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/fonts/material-design/material-design.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/spin/jquery.spin.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('assets/global/vendor/select2/select2.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/fonts_googleapi.css') }}?v=1\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-toggle.min.css') }}?v=1\">
    {% block stylesheets %}{% endblock %}
    <!-- Scripts -->
    <script src=\"{{ asset('assets/global/vendor/breakpoints/breakpoints.js') }}?v=1\"></script>
    <script>
        Breakpoints();
    </script>
</head>

<body>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <table class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha y Hora</th>
                            <th>Luminosidad</th>
                            <th>Temperatura</th>
                            <th>Presion</th>
                            <th>Humedad</th>
                        </tr>
                    </thead>
                    <tbody id=\"tabla\">

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src=\"{{ asset('assets/global/vendor/babel-external-helpers/babel-external-helpers.js') }}?v=1\"></script>
    <script src=\"{{ asset('assets/global/vendor/jquery/jquery.js') }}?v=1\"></script>
    <script src=\"{{ asset('assets/global/vendor/tether/tether.js') }}?v=1\"></script>
    <script src=\"{{ asset('assets/global/vendor/bootstrap/bootstrap.js') }}?v=1\"></script>

    <script>
        \$(document).ready(function () {
            ajax();
            setInterval(function () {
                ajax();
            }, 3000);
        });
        function ajax() {

            \$.get(\"{{path('soporte_ajax')}}\", function (response) {
                \$('#tabla').html(\"\");
                var contador = 1;
                \$.each(response, function (i, item) {
                    \$('#tabla').append(\"<tr><td>\" + contador + \"</td><td>\" + item.fecha_hora + \"</td><td>\" + item.luminosidad + \"</td><td>\" + item.temperatura + \"</td><td>\" + item.presion + \"</td><td>\" + item.humedad + \"</td></tr>\");
                    contador++;
                });
            }, 'json');
        }
    </script>
</body>
</html>", "SoporteBundle:Bitacora:index.html.twig", "/media/kcornejo/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/arduino/src/SoporteBundle/Resources/views/Bitacora/index.html.twig");
    }
}
