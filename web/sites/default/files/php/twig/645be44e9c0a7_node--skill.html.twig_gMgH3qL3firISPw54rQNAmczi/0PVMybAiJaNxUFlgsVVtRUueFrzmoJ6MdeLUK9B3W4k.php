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

/* themes/porfolio/templates/node/node--skill.html.twig */
class __TwigTemplate_a3b623a0ea4dfd33d4a665e3a2bef134 extends Template
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
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("porfolio/vivus"), "html", null, true);
        echo "

";
        // line 3
        $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_imagen", [], "any", false, false, true, 3), 0, [], "any", false, false, true, 3);
        // line 4
        $context["level"] = twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_level", [], "any", false, false, true, 4), 0, [], "any", false, false, true, 4)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#markup"] ?? null) : null), 4, $this->source));
        // line 5
        $context["nameSvg"] = twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), 0, [], "any", false, false, true, 5)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#context"] ?? null) : null), "value", [], "any", false, false, true, 5), 5, $this->source));
        // line 6
        echo "
<div class=\"card-skill card\" id=\"skill-";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter(twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["label"] ?? null), 0, [], "any", false, false, true, 7)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#context"] ?? null) : null), "value", [], "any", false, false, true, 7), 7, $this->source)), [" " => ""]), "html", null, true);
        echo "\">
    <div id=\"card-img-";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nameSvg"] ?? null), 8, $this->source), "html", null, true);
        echo "\" class=\"card-img-top\">
        ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 9, $this->source), "html", null, true);
        echo "
    </div>
    <div class=\"card-body pt-0\">
        <h3 class=\"card-title text-center\">";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 12, $this->source), "html", null, true);
        echo "</h3>
        <h6 class=\"card-title text-center mt-3\">My Levels is:</h6>
        <div class=\"card-skill-level mx-auto\">
            ";
        // line 15
        if ((($context["level"] ?? null) == "trainee")) {
            // line 16
            echo "                <img class=\"animation-turn\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 16, $this->source), "html", null, true);
            echo "/themes/porfolio/images/egg.png\"/>
            ";
        } elseif ((        // line 17
($context["level"] ?? null) == "junior")) {
            // line 18
            echo "                <img class=\"animation-grow\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 18, $this->source), "html", null, true);
            echo "/themes/porfolio/images/chik-wEgg.png\"/>
            ";
        } elseif ((        // line 19
($context["level"] ?? null) == "semi-senior")) {
            // line 20
            echo "                <img class=\"animation-jump\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 20, $this->source), "html", null, true);
            echo "/themes/porfolio/images/chick.png\"/>
            ";
        } elseif ((        // line 21
($context["level"] ?? null) == "senior")) {
            // line 22
            echo "                <img class=\"animation-jump\" src=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 22, $this->source), "html", null, true);
            echo "/themes/porfolio/images/chicken.png\"/>
            ";
        }
        // line 24
        echo "        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/porfolio/templates/node/node--skill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 24,  96 => 22,  94 => 21,  89 => 20,  87 => 19,  82 => 18,  80 => 17,  75 => 16,  73 => 15,  67 => 12,  61 => 9,  57 => 8,  53 => 7,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/porfolio/templates/node/node--skill.html.twig", "/var/www/html/web/themes/porfolio/templates/node/node--skill.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 15);
        static $filters = array("escape" => 1, "lower" => 4, "replace" => 7);
        static $functions = array("attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'lower', 'replace'],
                ['attach_library']
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
