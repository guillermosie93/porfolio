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

/* themes/porfolio/templates/view/views-view--skills.html.twig */
class __TwigTemplate_1240cfbaf280ebbc2ddb5b5db24b031e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 35
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 37
($context["id"] ?? null), 37, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null), 38, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 39
($context["display_id"] ?? null), 39, $this->source)), 4 => ((        // line 40
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 40, $this->source))) : (""))];
        // line 43
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
        echo ">
  ";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 44, $this->source), "html", null, true);
        echo "
  ";
        // line 45
        if (($context["title"] ?? null)) {
            // line 46
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 46, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 48
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 48, $this->source), "html", null, true);
        echo "
  ";
        // line 49
        if (($context["header"] ?? null)) {
            // line 50
            echo "    <div class=\"view-header\">
      ";
            // line 51
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 51, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 54
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 55
            echo "    <div class=\"view-filters\">
      ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 56, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 59
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 60
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 61, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 64
        echo "
  ";
        // line 65
        if (($context["rows"] ?? null)) {
            // line 66
            echo "    <div class=\"view-content bk-primary\">
        <div class=\"container\">
            <div class=\"row row-cols-3\">
                ";
            // line 69
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 69, $this->source), "html", null, true);
            echo "
            </div>
        </div>
    </div>
  ";
        } elseif (        // line 73
($context["empty"] ?? null)) {
            // line 74
            echo "    <div class=\"view-empty\">
      ";
            // line 75
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 75, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 78
        echo "
  ";
        // line 79
        if (($context["pager"] ?? null)) {
            // line 80
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 80, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 82
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 83
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 84, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 87
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 88
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 88, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 90
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 91
            echo "    <div class=\"view-footer\">
      ";
            // line 92
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 92, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 95
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 96
            echo "    <div class=\"feed-icons\">
      ";
            // line 97
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 97, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 100
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/porfolio/templates/view/views-view--skills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 100,  183 => 97,  180 => 96,  177 => 95,  171 => 92,  168 => 91,  165 => 90,  159 => 88,  156 => 87,  150 => 84,  147 => 83,  144 => 82,  138 => 80,  136 => 79,  133 => 78,  127 => 75,  124 => 74,  122 => 73,  115 => 69,  110 => 66,  108 => 65,  105 => 64,  99 => 61,  96 => 60,  93 => 59,  87 => 56,  84 => 55,  81 => 54,  75 => 51,  72 => 50,  70 => 49,  65 => 48,  59 => 46,  57 => 45,  53 => 44,  48 => 43,  46 => 40,  45 => 39,  44 => 38,  43 => 37,  42 => 35,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/porfolio/templates/view/views-view--skills.html.twig", "/var/www/html/web/themes/porfolio/templates/view/views-view--skills.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "if" => 45);
        static $filters = array("clean_class" => 37, "escape" => 43);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
