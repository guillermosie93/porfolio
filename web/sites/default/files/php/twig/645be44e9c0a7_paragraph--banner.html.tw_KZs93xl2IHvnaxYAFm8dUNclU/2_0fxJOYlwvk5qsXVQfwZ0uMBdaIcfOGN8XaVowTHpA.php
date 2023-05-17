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

/* themes/porfolio/templates/paragraphs/paragraph--banner.html.twig */
class __TwigTemplate_a1580318d29e4c89d7a192b9b013d0d6 extends Template
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
        $context["layout"] = (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_layout", [], "any", false, false, true, 1), 0, [], "any", false, false, true, 1)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null);
        // line 2
        $context["is_bk"] = (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_is_backgound", [], "any", false, false, true, 2), 0, [], "any", false, false, true, 2)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#markup"] ?? null) : null);
        echo " ";
        // line 3
        $context["img"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_img", [], "any", false, false, true, 3);
        // line 4
        $context["title"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_titulo", [], "any", false, false, true, 4);
        // line 5
        $context["description"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description", [], "any", false, false, true, 5);
        // line 6
        $context["cta"] = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cta", [], "any", false, false, true, 6);
        // line 7
        $context["colourText"] = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_colour_text", [], "any", false, false, true, 7), 0, [], "any", false, false, true, 7)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#markup"] ?? null) : null);
        // line 8
        $context["size"] = (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_banner_size", [], "any", false, false, true, 8), 0, [], "any", false, false, true, 8)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#markup"] ?? null) : null);
        // line 9
        echo "
";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_id", [], "any", false, false, true, 10), 0, [], "any", false, false, true, 10)) {
            // line 11
            echo "    <div class=\"banner banner-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 11, $this->source)), "html", null, true);
            echo " banner-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["size"] ?? null), 11, $this->source)), "html", null, true);
            echo "\" id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_id", [], "any", false, false, true, 11), 0, [], "any", false, false, true, 11)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#text"] ?? null) : null), 11, $this->source), "html", null, true);
            echo "\">
";
        } else {
            // line 13
            echo "    <div class=\"banner banner-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["layout"] ?? null), 13, $this->source)), "html", null, true);
            echo " banner-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["size"] ?? null), 13, $this->source)), "html", null, true);
            echo "\" id=\"banner-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "method", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\">
";
        }
        // line 15
        echo "    ";
        if ((($context["is_bk"] ?? null) == "Off")) {
            // line 16
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), 0, [], "any", false, false, true, 16) != null)) {
                // line 17
                echo "            ";
                if ((($context["layout"] ?? null) == "Izquierda")) {
                    // line 18
                    echo "                <div class=\"col-md-6 banner-image order-md-1\">
            ";
                } elseif ((                // line 19
($context["layout"] ?? null) == "Derecha")) {
                    // line 20
                    echo "                <div class=\"col-md-6 banner-image order-md-2\">
            ";
                }
                // line 22
                echo "                <div class=\"banner-img my-auto\">
                    <img src=\"";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), 0, [], "any", false, false, true, 23)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#markup"] ?? null) : null), 23, $this->source), "html", null, true);
                echo "\" loading=\"lazy\">
                </div>
            </div>
            ";
                // line 26
                if ((($context["layout"] ?? null) == "Izquierda")) {
                    // line 27
                    echo "                <div class=\"col-md-6 banner-text order-md-2\">
            ";
                } elseif ((                // line 28
($context["layout"] ?? null) == "Derecha")) {
                    // line 29
                    echo "                <div class=\"col-md-6 banner-text order-md-1\">
            ";
                }
                // line 31
                echo "        ";
            } else {
                // line 32
                echo "            ";
                if ((($context["layout"] ?? null) == "Izquierda")) {
                    // line 33
                    echo "                <div class=\"col-md-12 banner-text text-right\">
            ";
                } elseif ((                // line 34
($context["layout"] ?? null) == "Derecha")) {
                    // line 35
                    echo "                <div class=\"col-md-12 banner-text text-left\">
            ";
                }
                // line 37
                echo "        ";
            }
            // line 38
            echo "            <div style=\"color: ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colourText"] ?? null), 38, $this->source), "html", null, true);
            echo ";\" class=\"pe-md-5 py-md-5\">
                ";
            // line 39
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 39, $this->source), "html", null, true);
            echo "
            </div>
            ";
            // line 41
            if ((twig_get_attribute($this->env, $this->source, ($context["cta"] ?? null), 0, [], "any", false, false, true, 41) != null)) {
                // line 42
                echo "                ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cta"] ?? null), 42, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 44
            echo "        </div>
    ";
        } else {
            // line 46
            echo "        ";
            if ((($context["layout"] ?? null) == "Centrado")) {
                // line 47
                echo "            <div class=\"col-md-12 text-center\">
                <div class=\"my-md-auto mx-md-auto\" style=\"color: ";
                // line 48
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["colourText"] ?? null), 48, $this->source), "html", null, true);
                echo ";\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 48, $this->source), "html", null, true);
                echo "</div>
                ";
                // line 49
                if ((twig_get_attribute($this->env, $this->source, ($context["cta"] ?? null), 0, [], "any", false, false, true, 49) != null)) {
                    // line 50
                    echo "                    ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cta"] ?? null), 50, $this->source), "html", null, true);
                    echo "
                ";
                }
                // line 52
                echo "            </div>
        ";
            }
            // line 54
            echo "    ";
        }
        echo "    
</div>
";
        // line 56
        if ((($context["is_bk"] ?? null) == "On")) {
            // line 57
            echo "    <style>
    ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_id", [], "any", false, false, true, 58), 0, [], "any", false, false, true, 58)) {
                // line 59
                echo "        #banner-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_id", [], "any", false, false, true, 59), 0, [], "any", false, false, true, 59)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#text"] ?? null) : null), 59, $this->source), "html", null, true);
                echo "{
    ";
            } else {
                // line 61
                echo "        #banner-";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "id", [], "method", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "{
    ";
            }
            // line 63
            echo "            background: url('";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["img"] ?? null), 0, [], "any", false, false, true, 63)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#markup"] ?? null) : null), 63, $this->source), "html", null, true);
            echo "');
            background-position: center;
            background-size: cover;
        }
    </style>
";
        }
        // line 69
        echo "<script>console.log(";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(json_encode($this->sandbox->ensureToStringAllowed($context, 69, $this->source)));
        echo ")</script>";
    }

    public function getTemplateName()
    {
        return "themes/porfolio/templates/paragraphs/paragraph--banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 69,  208 => 63,  202 => 61,  196 => 59,  194 => 58,  191 => 57,  189 => 56,  183 => 54,  179 => 52,  173 => 50,  171 => 49,  165 => 48,  162 => 47,  159 => 46,  155 => 44,  149 => 42,  147 => 41,  142 => 39,  137 => 38,  134 => 37,  130 => 35,  128 => 34,  125 => 33,  122 => 32,  119 => 31,  115 => 29,  113 => 28,  110 => 27,  108 => 26,  102 => 23,  99 => 22,  95 => 20,  93 => 19,  90 => 18,  87 => 17,  84 => 16,  81 => 15,  71 => 13,  61 => 11,  59 => 10,  56 => 9,  54 => 8,  52 => 7,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/porfolio/templates/paragraphs/paragraph--banner.html.twig", "/var/www/html/web/themes/porfolio/templates/paragraphs/paragraph--banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 10);
        static $filters = array("escape" => 11, "lower" => 11, "raw" => 69, "json_encode" => 69);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'lower', 'raw', 'json_encode'],
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
