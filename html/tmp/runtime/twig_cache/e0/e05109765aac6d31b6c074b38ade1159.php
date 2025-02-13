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

/* ./subviews/navigation/navigator_complement.twig */
class __TwigTemplate_8824d67a64ccef9f302d6f4c7011e56c extends Template
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
        // line 6
        if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 6), "load", [], "any", false, false, true, 6), "show", [], "any", false, false, true, 6) == "Y") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 6), "save", [], "any", false, false, true, 6), "show", [], "any", false, false, true, 6) == "Y")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 6), "bShow", [], "any", false, false, true, 6) == true)) || (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 6) == true))) {
            // line 7
            echo "    <!-- extra tools, can be shown with javascript too (just remove ls-js-hidden class -->
    <div class=\"row ls-js-hidden\">
        <!-- Extra button container -->
        <div class=\"col-md-6 clearall-saveall-wrapper d-flex justify-content-start\">
            ";
            // line 11
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 11), "load", [], "any", false, false, true, 11), "show", [], "any", false, false, true, 11) == "Y") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aNavigator", [], "any", false, false, true, 11), "save", [], "any", false, false, true, 11), "show", [], "any", false, false, true, 11) == "Y"))) {
                // line 12
                echo "                ";
                echo twig_include($this->env, $context, "./subviews/navigation/save_buttons.twig");
                echo "
            ";
            }
            // line 14
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 14) == true) || (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "bShowClearAll", [], "any", false, false, true, 14) == null))) {
                // line 15
                echo "                ";
                echo twig_include($this->env, $context, "./subviews/navigation/clearall_buttons.twig");
                echo "
            ";
            }
            // line 17
            echo "        </div>
         <!-- Index container -->
        ";
            // line 19
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aQuestionIndex", [], "any", false, false, true, 19), "bShow", [], "any", false, false, true, 19) == true)) {
                // line 20
                echo "            ";
                echo twig_include($this->env, $context, "./subviews/navigation/question_index_buttons.twig");
                echo "
        ";
            }
            // line 22
            echo "    </div>
";
        }
        // line 24
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/navigation/navigator_complement.twig";
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
        return array (  80 => 24,  76 => 22,  70 => 20,  68 => 19,  64 => 17,  58 => 15,  55 => 14,  49 => 12,  47 => 11,  41 => 7,  39 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/navigation/navigator_complement.twig", "/var/www/html/themes/survey/fruity_twentythree/views/subviews/navigation/navigator_complement.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array();
        static $functions = array("include" => 12);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['include']
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
