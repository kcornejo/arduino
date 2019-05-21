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

/* @Twig/Exception/exception.html.twig */
class __TwigTemplate_666351c610c3f69b1a51a53435f60de717b3e31b09057c2ba8e35d4b8f3ab6c8 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.html.twig"));

        // line 1
        echo "<div class=\"block-exception\">
    <div class=\"block-exception-detected clear-fix\">
        <div class=\"support\">
            <a href=\"http://symfony.com/support\">Need support?</a>
        </div>
        <div class=\"illustration-exception\">
            ";
        // line 7
        echo twig_include($this->env, $context, "@Twig/Exception/exception.svg");
        echo "
        </div>
        <div class=\"text-exception\">
            <div class=\"open-quote\">“</div>

            <h1>";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFileFromText(nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 12, $this->source); })()), "message", []), "html", null, true)));
        echo "</h1>

            <div>
                <strong>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " - ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 15, $this->source); })()), "class", []));
        echo "
            </div>

            ";
        // line 18
        $context["previous_count"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 18, $this->source); })()), "allPrevious", []));
        // line 19
        echo "            ";
        if ((isset($context["previous_count"]) || array_key_exists("previous_count", $context) ? $context["previous_count"] : (function () { throw new RuntimeError('Variable "previous_count" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "                <div class=\"linked\"><span><strong>";
            echo twig_escape_filter($this->env, (isset($context["previous_count"]) || array_key_exists("previous_count", $context) ? $context["previous_count"] : (function () { throw new RuntimeError('Variable "previous_count" does not exist.', 20, $this->source); })()), "html", null, true);
            echo "</strong> linked Exception";
            echo ((((isset($context["previous_count"]) || array_key_exists("previous_count", $context) ? $context["previous_count"] : (function () { throw new RuntimeError('Variable "previous_count" does not exist.', 20, $this->source); })()) > 1)) ? ("s") : (""));
            echo ":</span>
                    <ul>
                        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 22, $this->source); })()), "allPrevious", []));
            foreach ($context['_seq'] as $context["i"] => $context["previous"]) {
                // line 23
                echo "                            <li>
                                ";
                // line 24
                echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, $context["previous"], "class", []));
                echo " <a href=\"#traces-link-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "\" onclick=\"toggle('traces-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "', 'traces'); switchIcons('icon-traces-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "-open', 'icon-traces-";
                echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
                echo "-close');\">&#187;</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['previous'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    </ul>
                </div>
            ";
        }
        // line 30
        echo "
            <div class=\"close-quote\">”</div>
        </div>
    </div>
</div>

";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 36, $this->source); })()), "toarray", []));
        foreach ($context['_seq'] as $context["position"] => $context["e"]) {
            // line 37
            echo "    ";
            $this->loadTemplate("@Twig/Exception/traces.html.twig", "@Twig/Exception/exception.html.twig", 37)->display(["exception" => $context["e"], "position" => $context["position"], "count" => (isset($context["previous_count"]) || array_key_exists("previous_count", $context) ? $context["previous_count"] : (function () { throw new RuntimeError('Variable "previous_count" does not exist.', 37, $this->source); })())]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['position'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
";
        // line 40
        if ((isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "    <div class=\"block\">
        <div class=\"logs clear-fix\">
            ";
            // line 43
            ob_start();
            // line 44
            echo "            <h2>
                Logs&nbsp;
                <a href=\"#\" onclick=\"toggle('logs'); switchIcons('icon-logs-open', 'icon-logs-close'); return false;\">
                    <img class=\"toggle\" id=\"icon-logs-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: none\" />
                    <img class=\"toggle\" id=\"icon-logs-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: inline\" />
                </a>
            </h2>
            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 52
            echo "
            ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 53, $this->source); })()), "counterrors", [])) {
                // line 54
                echo "                <div class=\"error-count\">
                    <span>
                        ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 56, $this->source); })()), "counterrors", []), "html", null, true);
                echo " error";
                echo (((twig_get_attribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 56, $this->source); })()), "counterrors", []) > 1)) ? ("s") : (""));
                echo "
                    </span>
                </div>
            ";
            }
            // line 60
            echo "        </div>

        <div id=\"logs\">
            ";
            // line 63
            $this->loadTemplate("@Twig/Exception/logs.html.twig", "@Twig/Exception/exception.html.twig", 63)->display(["logs" => twig_get_attribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 63, $this->source); })()), "logs", [])]);
            // line 64
            echo "        </div>
    </div>
";
        }
        // line 67
        echo "
";
        // line 68
        if ((isset($context["currentContent"]) || array_key_exists("currentContent", $context) ? $context["currentContent"] : (function () { throw new RuntimeError('Variable "currentContent" does not exist.', 68, $this->source); })())) {
            // line 69
            echo "    <div class=\"block\">
        ";
            // line 70
            ob_start();
            // line 71
            echo "        <h2>
            Content of the Output&nbsp;
            <a href=\"#\" onclick=\"toggle('output-content'); switchIcons('icon-content-open', 'icon-content-close'); return false;\">
                <img class=\"toggle\" id=\"icon-content-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
                <img class=\"toggle\" id=\"icon-content-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
            </a>
        </h2>
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 79
            echo "
        <div id=\"output-content\" style=\"display: none\">
            ";
            // line 81
            echo twig_escape_filter($this->env, (isset($context["currentContent"]) || array_key_exists("currentContent", $context) ? $context["currentContent"] : (function () { throw new RuntimeError('Variable "currentContent" does not exist.', 81, $this->source); })()), "html", null, true);
            echo "
        </div>

        <div style=\"clear: both\"></div>
    </div>
";
        }
        // line 87
        echo "
";
        // line 88
        $this->loadTemplate("@Twig/Exception/traces_text.html.twig", "@Twig/Exception/exception.html.twig", 88)->display(["exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 88, $this->source); })())]);
        // line 89
        echo "
<script type=\"text/javascript\">//<![CDATA[
    function toggle(id, clazz) {
        var el = document.getElementById(id),
            current = el.style.display,
            i;

        if (clazz) {
            var tags = document.getElementsByTagName('*');
            for (i = tags.length - 1; i >= 0; i--) {
                if (tags[i].className === clazz) {
                    tags[i].style.display = 'none';
                }
            }
        }

        el.style.display = current === 'none' ? 'block' : 'none';
    }

    function switchIcons(id1, id2) {
        var icon1, icon2, display1, display2;

        icon1 = document.getElementById(id1);
        icon2 = document.getElementById(id2);

        display1 = icon1.style.display;
        display2 = icon2.style.display;

        icon1.style.display = display2;
        icon2.style.display = display1;
    }
//]]></script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 89,  221 => 88,  218 => 87,  209 => 81,  205 => 79,  195 => 71,  193 => 70,  190 => 69,  188 => 68,  185 => 67,  180 => 64,  178 => 63,  173 => 60,  164 => 56,  160 => 54,  158 => 53,  155 => 52,  145 => 44,  143 => 43,  139 => 41,  137 => 40,  134 => 39,  127 => 37,  123 => 36,  115 => 30,  110 => 27,  93 => 24,  90 => 23,  86 => 22,  78 => 20,  75 => 19,  73 => 18,  63 => 15,  57 => 12,  49 => 7,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"block-exception\">
    <div class=\"block-exception-detected clear-fix\">
        <div class=\"support\">
            <a href=\"http://symfony.com/support\">Need support?</a>
        </div>
        <div class=\"illustration-exception\">
            {{ include('@Twig/Exception/exception.svg') }}
        </div>
        <div class=\"text-exception\">
            <div class=\"open-quote\">“</div>

            <h1>{{ exception.message|nl2br|format_file_from_text }}</h1>

            <div>
                <strong>{{ status_code }}</strong> {{ status_text }} - {{ exception.class|abbr_class }}
            </div>

            {% set previous_count = exception.allPrevious|length %}
            {% if previous_count %}
                <div class=\"linked\"><span><strong>{{ previous_count }}</strong> linked Exception{{ previous_count > 1 ? 's' : '' }}:</span>
                    <ul>
                        {% for i, previous in exception.allPrevious %}
                            <li>
                                {{ previous.class|abbr_class }} <a href=\"#traces-link-{{ i + 1 }}\" onclick=\"toggle('traces-{{ i + 1 }}', 'traces'); switchIcons('icon-traces-{{ i + 1 }}-open', 'icon-traces-{{ i + 1 }}-close');\">&#187;</a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            {% endif %}

            <div class=\"close-quote\">”</div>
        </div>
    </div>
</div>

{% for position, e in exception.toarray %}
    {% include '@Twig/Exception/traces.html.twig' with { 'exception': e, 'position': position, 'count': previous_count } only %}
{% endfor %}

{% if logger %}
    <div class=\"block\">
        <div class=\"logs clear-fix\">
            {% spaceless %}
            <h2>
                Logs&nbsp;
                <a href=\"#\" onclick=\"toggle('logs'); switchIcons('icon-logs-open', 'icon-logs-close'); return false;\">
                    <img class=\"toggle\" id=\"icon-logs-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: none\" />
                    <img class=\"toggle\" id=\"icon-logs-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: inline\" />
                </a>
            </h2>
            {% endspaceless %}

            {% if logger.counterrors %}
                <div class=\"error-count\">
                    <span>
                        {{ logger.counterrors }} error{{ logger.counterrors > 1 ? 's' : ''}}
                    </span>
                </div>
            {% endif %}
        </div>

        <div id=\"logs\">
            {% include '@Twig/Exception/logs.html.twig' with { 'logs': logger.logs } only %}
        </div>
    </div>
{% endif %}

{% if currentContent %}
    <div class=\"block\">
        {% spaceless %}
        <h2>
            Content of the Output&nbsp;
            <a href=\"#\" onclick=\"toggle('output-content'); switchIcons('icon-content-open', 'icon-content-close'); return false;\">
                <img class=\"toggle\" id=\"icon-content-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: none\" />
                <img class=\"toggle\" id=\"icon-content-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: inline\" />
            </a>
        </h2>
        {% endspaceless %}

        <div id=\"output-content\" style=\"display: none\">
            {{ currentContent }}
        </div>

        <div style=\"clear: both\"></div>
    </div>
{% endif %}

{% include '@Twig/Exception/traces_text.html.twig' with { 'exception': exception } only %}

<script type=\"text/javascript\">//<![CDATA[
    function toggle(id, clazz) {
        var el = document.getElementById(id),
            current = el.style.display,
            i;

        if (clazz) {
            var tags = document.getElementsByTagName('*');
            for (i = tags.length - 1; i >= 0; i--) {
                if (tags[i].className === clazz) {
                    tags[i].style.display = 'none';
                }
            }
        }

        el.style.display = current === 'none' ? 'block' : 'none';
    }

    function switchIcons(id1, id2) {
        var icon1, icon2, display1, display2;

        icon1 = document.getElementById(id1);
        icon2 = document.getElementById(id2);

        display1 = icon1.style.display;
        display2 = icon2.style.display;

        icon1.style.display = display2;
        icon2.style.display = display1;
    }
//]]></script>
", "@Twig/Exception/exception.html.twig", "/media/kcornejo/2b71ea5e-3775-4eb8-8305-755f05f052fa/workspace/symfony/arduino/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.html.twig");
    }
}
