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

/* ./subviews/content/load.twig */
class __TwigTemplate_095e4949e491b66a3d70db740f0db597 extends Template
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
        // line 32
        echo "
    ";
        // line 34
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "EM", [], "any", false, false, true, 34), "ScriptsAndHiddenInputs", [], "any", false, false, true, 34), 34, $this->source);
        echo "

    <div class=\"";
        // line 36
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 36), "savemessage", [], "any", false, false, true, 36), 36, $this->source);
        echo " clearfix\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 36), "savemessage", [], "any", false, false, true, 36), 36, $this->source);
        echo ">
        <div class=\"";
        // line 37
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 37), "savemessagetitle", [], "any", false, false, true, 37), 37, $this->source);
        echo " large-heading mb-3\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 37), "savemessagetitle", [], "any", false, false, true, 37), 37, $this->source);
        echo ">";
        echo gT("Load unfinished survey");
        echo "</div>
        <div class=\"";
        // line 38
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 38), "savemessagetext", [], "any", false, false, true, 38), 38, $this->source);
        echo " form-heading mb-3\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 38), "savemessagetext", [], "any", false, false, true, 38), 38, $this->source);
        echo ">
            <p ";
        // line 39
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 39), "savemessagetextp", [], "any", false, false, true, 39), 39, $this->source);
        echo " > ";
        echo gT("You can load a survey that you have previously saved from this screen.");
        echo " </p>
            <p ";
        // line 40
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 40), "savemessagetextpb", [], "any", false, false, true, 40), 40, $this->source);
        echo " > ";
        echo gT("Type in the 'name' you used to save the survey, and the password.");
        echo " </p>
        </div>
    </div>

    <div class=\"";
        // line 44
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 44), "loadform", [], "any", false, false, true, 44), 44, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 44), "loadform", [], "any", false, false, true, 44), 44, $this->source);
        echo ">

        ";
        // line 46
        if ((LS_Twig_Extension::safecount(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aLoadForm", [], "any", false, false, true, 46), "aErrors", [], "any", false, false, true, 46)) > 0)) {
            // line 47
            echo "            <ul class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 47), "loadformul", [], "any", false, false, true, 47), 47, $this->source);
            echo " alert alert-danger list-unstyled \" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 47), "loadformul", [], "any", false, false, true, 47), 47, $this->source);
            echo " >
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aLoadForm", [], "any", false, false, true, 48), "aErrors", [], "any", false, false, true, 48));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 49
                echo "                    <li ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 49), "loadformulli", [], "any", false, false, true, 49), 49, $this->source);
                echo ">";
                echo $this->sandbox->ensureToStringAllowed($context["error"], 49, $this->source);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            </ul>
        ";
        }
        // line 53
        echo "
        ";
        // line 59
        echo "        ";
        $context["htmlOptions"] = ["id" => "form-load", "name" => "form-load", "class" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 62), "loadformform", [], "any", false, false, true, 62)];
        // line 65
        echo "
        ";
        // line 71
        echo "        <!-- Save Form -->
        ";
        // line 72
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 73
($context["C"] ?? null), "Html", [], "any", false, false, true, 73), "form", [twig_get_attribute($this->env, $this->source,         // line 74
($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 74), "post",         // line 76
($context["htmlOptions"] ?? null)], "method", false, false, true, 73), 73, $this->source);
        // line 78
        echo "
            <!-- Hidden fields  -->
            ";
        // line 80
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aLoadForm", [], "any", false, false, true, 80), "sHiddenField", [], "any", false, false, true, 80), 80, $this->source);
        echo "

            <!-- Name and Password -->
            <div class=\"";
        // line 83
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 83), "saveform", [], "any", false, false, true, 83), 83, $this->source);
        echo " col-12\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 83), "saveform", [], "any", false, false, true, 83), 83, $this->source);
        echo ">

                <!-- Saved name  -->
                <div class=\"";
        // line 86
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 86), "saveformrow", [], "any", false, false, true, 86), 86, $this->source);
        echo " mb-3\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 86), "saveformrow", [], "any", false, false, true, 86), 86, $this->source);
        echo ">
                    <label class=\"";
        // line 87
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 87), "saveformrowlabel", [], "any", false, false, true, 87), 87, $this->source);
        echo " control-label\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 87), "saveformrowlabel", [], "any", false, false, true, 87), 87, $this->source);
        echo ">
                        ";
        // line 88
        echo gT("Saved name");
        echo "<small class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 88), "saveformrowlabelsmall", [], "any", false, false, true, 88), 88, $this->source);
        echo " asterisk ri-asterisk superset\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 88), "saveformrowlabelsmall", [], "any", false, false, true, 88), 88, $this->source);
        echo " >&nbsp;</small>
                        <span class=\"";
        // line 89
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 89), "saveformrowlabelspan", [], "any", false, false, true, 89), 89, $this->source);
        echo " visually-hidden asterisk\"  ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 89), "saveformrowlabelspan", [], "any", false, false, true, 89), 89, $this->source);
        echo " >";
        echo gT("Mandatory");
        echo "</span>
                    </label>
                    <div class=\"";
        // line 91
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 91), "saveformrowcol", [], "any", false, false, true, 91), 91, $this->source);
        echo " input-cell\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 91), "saveformrowcol", [], "any", false, false, true, 91), 91, $this->source);
        echo ">
                        <input class=\"";
        // line 92
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 92), "saveformrowcolinput", [], "any", false, false, true, 92), 92, $this->source);
        echo " form-control ls-important-field\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 92), "saveformrowcolinput", [], "any", false, false, true, 92), 92, $this->source);
        echo " id=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 92), "saveformrowcolinput", [], "any", false, false, true, 92), 92, $this->source);
        echo "\" placeholder =\" ";
        echo gT("Enter your name");
        echo " \">
                    </div>
                </div>

                <!-- Password -->
                <div class=\"";
        // line 97
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 97), "passwordrow", [], "any", false, false, true, 97), 97, $this->source);
        echo " mb-3\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 97), "passwordrow", [], "any", false, false, true, 97), 97, $this->source);
        echo ">
                    <label class='";
        // line 98
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 98), "passwordrowcol", [], "any", false, false, true, 98), 98, $this->source);
        echo " control-label'  ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 98), "passwordrowcol", [], "any", false, false, true, 98), 98, $this->source);
        echo " >
                        ";
        // line 99
        echo gT("Password");
        echo "<small class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 99), "passwordrowcolsmall", [], "any", false, false, true, 99), 99, $this->source);
        echo " asterisk ri-asterisk superset\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 99), "passwordrowcolsmall", [], "any", false, false, true, 99), 99, $this->source);
        echo ">&nbsp;</small>
                        <span class=\"";
        // line 100
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 100), "passwordrowcolspan", [], "any", false, false, true, 100), 100, $this->source);
        echo " visually-hidden asterisk\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 100), "passwordrowcolspan", [], "any", false, false, true, 100), 100, $this->source);
        echo ">";
        echo gT("Mandatory");
        echo "</span>
                    </label>

                    <div class='";
        // line 103
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 103), "passwordrowinput", [], "any", false, false, true, 103), 103, $this->source);
        echo "'>
                        <input class='form-control ls-important-field' ";
        // line 104
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 104), "passwordrowinputi", [], "any", false, false, true, 104), 104, $this->source);
        echo " placeholder =\" ";
        echo gT("Enter your password");
        echo " \">
                    </div>
                </div>

                ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aLoadForm", [], "any", false, false, true, 108), "aCaptcha", [], "any", false, false, true, 108), "show", [], "any", false, false, true, 108)) {
            // line 109
            echo "                    <!-- Captcha -->
                    <div class='";
            // line 110
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 110), "captcharow", [], "any", false, false, true, 110), 110, $this->source);
            echo " mb-3' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 110), "captcharow", [], "any", false, false, true, 110), 110, $this->source);
            echo ">
                        <label class='";
            // line 111
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 111), "captcharowlabel", [], "any", false, false, true, 111), 111, $this->source);
            echo " control-label'  ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 111), "captcharowlabel", [], "any", false, false, true, 111), 111, $this->source);
            echo ">
                            ";
            // line 112
            echo gT("Security question");
            echo "
                        </label>
                        <div class='";
            // line 114
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 114), "captcharowcol", [], "any", false, false, true, 114), 114, $this->source);
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 114), "captcharowcol", [], "any", false, false, true, 114), 114, $this->source);
            echo ">
                            <div class='";
            // line 115
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 115), "captcharowcoldiv", [], "any", false, false, true, 115), 115, $this->source);
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 115), "captcharowcoldiv", [], "any", false, false, true, 115), 115, $this->source);
            echo ">
                                <span class='";
            // line 116
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 116), "captcharowcoldivdiv", [], "any", false, false, true, 116), 116, $this->source);
            echo "  ls-important-field' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 116), "captcharowcoldivdiv", [], "any", false, false, true, 116), 116, $this->source);
            echo " >
                                    <img src=\"";
            // line 117
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aLoadForm", [], "any", false, false, true, 117), "aCaptcha", [], "any", false, false, true, 117), "sImageUrl", [], "any", false, false, true, 117), 117, $this->source);
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 117), "captcharowcoldivdivimg", [], "any", false, false, true, 117), 117, $this->source);
            echo " />
                                </span>
                                <input id=\"";
            // line 119
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "id", [], "any", false, false, true, 119), "captcharowcoldivinput", [], "any", false, false, true, 119), 119, $this->source);
            echo "\" class='";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 119), "captcharowcoldivinput", [], "any", false, false, true, 119), 119, $this->source);
            echo "   form-control ls-important-field' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 119), "captcharowcoldivinput", [], "any", false, false, true, 119), 119, $this->source);
            echo " placeholder=\"";
            echo gT("Enter result here - numbers only");
            echo "\"/>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 124
        echo "                    <div class=\"row button-row\">
                        <!-- return button -->
                    <div class='";
        // line 126
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 126), "returntosurvey", [], "any", false, false, true, 126), 126, $this->source);
        echo " mb-3 col-auto' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 126), "returntosurvey", [], "any", false, false, true, 126), 126, $this->source);
        echo ">
                        <div class=\"";
        // line 127
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 127), "returntosurveydiv", [], "any", false, false, true, 127), 127, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 127), "returntosurveydiv", [], "any", false, false, true, 127), 127, $this->source);
        echo ">
                            <a href=\"";
        // line 128
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 128), 128, $this->source);
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 128), "returntosurveydiva", [], "any", false, false, true, 128), 128, $this->source);
        echo " btn btn-outline-secondary\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 128), "returntosurveydiva", [], "any", false, false, true, 128), 128, $this->source);
        echo "  >";
        echo gT("Return to survey");
        echo "</a>
                        </div>
                    </div>
                    <!-- load button -->
                    <div class='";
        // line 132
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 132), "loadrow", [], "any", false, false, true, 132), 132, $this->source);
        echo " mb-3 col-auto' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 132), "loadrow", [], "any", false, false, true, 132), 132, $this->source);
        echo ">
                        <div class='";
        // line 133
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 133), "loadrowcol", [], "any", false, false, true, 133), 133, $this->source);
        echo "  float-end' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 133), "loadrowcol", [], "any", false, false, true, 133), 133, $this->source);
        echo ">
                            <button class='";
        // line 134
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 134), "loadrowcolbutton", [], "any", false, false, true, 134), 134, $this->source);
        echo " btn btn-primary' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 134), "loadrowcolbutton", [], "any", false, false, true, 134), 134, $this->source);
        echo " >
                                ";
        // line 135
        echo gT("Load now");
        echo "
                            </button>
                        </div>
                    </div>
                </div>
            </div>

    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/content/load.twig";
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
        return array (  354 => 135,  348 => 134,  342 => 133,  336 => 132,  323 => 128,  317 => 127,  311 => 126,  307 => 124,  293 => 119,  286 => 117,  280 => 116,  274 => 115,  268 => 114,  263 => 112,  257 => 111,  251 => 110,  248 => 109,  246 => 108,  237 => 104,  233 => 103,  223 => 100,  215 => 99,  209 => 98,  203 => 97,  189 => 92,  183 => 91,  174 => 89,  166 => 88,  160 => 87,  154 => 86,  146 => 83,  140 => 80,  136 => 78,  134 => 76,  133 => 74,  132 => 73,  131 => 72,  128 => 71,  125 => 65,  123 => 62,  121 => 59,  118 => 53,  114 => 51,  103 => 49,  99 => 48,  92 => 47,  90 => 46,  83 => 44,  74 => 40,  68 => 39,  62 => 38,  54 => 37,  48 => 36,  42 => 34,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/load.twig", "/var/www/html/themes/survey/fruity_twentythree/views/subviews/content/load.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 46, "for" => 48, "set" => 59);
        static $filters = array();
        static $functions = array("gT" => 37, "count" => 46);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                [],
                ['gT', 'count']
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
