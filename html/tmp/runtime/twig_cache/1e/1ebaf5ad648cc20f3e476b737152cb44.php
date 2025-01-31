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

/* ./subviews/header/head.twig */
class __TwigTemplate_1ea84aef00d47138025be91b0545929f extends Template
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
        // line 17
        echo "
";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "jYesNo", [], "any", false, false, true, 18)) {
            // line 19
            echo "    ";
            echo LS_Twig_Extension::registerScript("activateConfirmLanguage", (("\$.extend(LSvar.lang," . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "jYesNo", [], "any", false, false, true, 19), 19, $this->source)) . ")"), "POS_BEGIN");
            echo "
";
        }
        // line 21
        echo LS_Twig_Extension::registerScript("activateActionLink", "activateActionLink();", "POS_POSTSCRIPT");
        echo "

<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta name=\"generator\" content=\"LimeSurvey http://www.limesurvey.org\" />

    ";
        // line 29
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "metas", [], "any", false, false, true, 29), 29, $this->source);
        echo "

    <title>
        ";
        // line 32
        echo LS_Twig_Extension::processString($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyls_title", [], "any", false, false, true, 32), 32, $this->source), 1);
        echo "
    </title>
    ";
        // line 34
        if (LS_Twig_Extension::imageSrc("./files/favicon.ico")) {
            // line 35
            echo "        <link rel=\"shortcut icon\" href=\"";
            echo LS_Twig_Extension::imageSrc("./files/favicon.ico");
            echo "\" />
    ";
        }
        // line 37
        echo "    <script type=\"text/javascript\">
        if(window.basicThemeScripts === undefined){ 
            window.basicThemeScripts = new ThemeScripts(); 
        } 
    </script>
    ";
        // line 43
        echo "    ";
        echo LS_Twig_Extension::registerScript("LSvarTemplateInit", "if(typeof LSvar === 'undefined') { var LSvar = {}; };", "POS_HEAD");
        echo "
    ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 44), "fixnumauto", [], "any", false, false, true, 44) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 44), "fixnumauto", [], "any", false, false, true, 44) != "off"))) {
            // line 45
            echo "        ";
            echo LS_Twig_Extension::registerScript("LSvarTemplateRealFixNumAuto", (("LSvar.bFixNumAuto = " . (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 45), "fixnumauto", [], "any", false, false, true, 45) == "enable")) ? (1) : (0))) . ";"), "POS_HEAD");
            echo "
        ";
            // line 46
            echo LS_Twig_Extension::registerScript("LSvarTemplateRealNumRealValue", (("LSvar.bNumRealValue = " . (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "options", [], "any", false, false, true, 46), "fixnumauto", [], "any", false, false, true, 46) == "disable")) ? (1) : (0))) . ";"), "POS_HEAD");
            echo "
    ";
        }
        // line 48
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/header/custom_header.twig");
        echo "

    ";
        // line 50
        echo twig_include($this->env, $context, "./subviews/header/google_analytics.twig");
        echo "
</head>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/header/head.twig";
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
        return array (  110 => 50,  104 => 48,  99 => 46,  94 => 45,  92 => 44,  87 => 43,  80 => 37,  74 => 35,  72 => 34,  67 => 32,  61 => 29,  50 => 21,  44 => 19,  42 => 18,  39 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/header/head.twig", "/var/www/html/themes/survey/fruity_twentythree/views/subviews/header/head.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 18);
        static $filters = array();
        static $functions = array("registerScript" => 19, "processString" => 32, "imageSrc" => 34, "include" => 48);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
                ['registerScript', 'processString', 'imageSrc', 'include']
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
