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

/* ./subviews/content/save.twig */
class __TwigTemplate_7ed56a63b282d207584ed0c64ee3782e extends Template
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
        // line 37
        echo twig_include($this->env, $context, "./subviews/header/start_form.twig");
        echo " <!-- main form -->

    ";
        // line 40
        echo "    ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "EM", [], "any", false, false, true, 40), "ScriptsAndHiddenInputs", [], "any", false, false, true, 40), 40, $this->source);
        echo "

    <div class=\"";
        // line 42
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 42), "savecontainer", [], "any", false, false, true, 42), 42, $this->source);
        echo " clearfix \" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 42), "savecontainer", [], "any", false, false, true, 42), 42, $this->source);
        echo ">
        <div class=\"\">
            <div class=\"";
        // line 44
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 44), "savecontainertitle", [], "any", false, false, true, 44), 44, $this->source);
        echo " large-heading mb-3\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 44), "savecontainertitle", [], "any", false, false, true, 44), 44, $this->source);
        echo ">";
        echo gT("Save your unfinished survey");
        echo "</div>
            <div class=\"";
        // line 45
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 45), "savecontainertext", [], "any", false, false, true, 45), 45, $this->source);
        echo " form-heading mb-3\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 45), "savecontainertext", [], "any", false, false, true, 45), 45, $this->source);
        echo ">
                <p ";
        // line 46
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 46), "savecontainertextpa", [], "any", false, false, true, 46), 46, $this->source);
        echo "> ";
        echo gT("Enter a name and password for this survey and click save below.");
        echo " </p>
                <p ";
        // line 47
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 47), "savecontainertextpb", [], "any", false, false, true, 47), 47, $this->source);
        echo "> ";
        echo gT("Your survey will be saved using that name and password, and can be completed later by logging in with the same name and password.");
        echo " </p>
                <p class='";
        // line 48
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 48), "savecontainertextpc", [], "any", false, false, true, 48), 48, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 48), "savecontainertextpc", [], "any", false, false, true, 48), 48, $this->source);
        echo "> ";
        echo gT("If you give an email address, an email containing the details will be sent to you.");
        echo " </p>
                <p ";
        // line 49
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 49), "savecontainertextpd", [], "any", false, false, true, 49), 49, $this->source);
        echo "> ";
        echo gT("After having clicked the save button you can either close this browser window or continue filling out the survey.");
        echo " </p>
            </div>
            <div class=\"";
        // line 51
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 51), "savecontainerwarning", [], "any", false, false, true, 51), 51, $this->source);
        echo " alert alert-warning\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 51), "savecontainerwarning", [], "any", false, false, true, 51), 51, $this->source);
        echo ">
                ";
        // line 52
        echo gT("To remain anonymous please use a pseudonym as your username, also an email address is not required.");
        echo "
            </div>
        </div>
    </div>

    <div class=\"";
        // line 57
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 57), "saveformcontainer", [], "any", false, false, true, 57), 57, $this->source);
        echo "\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 57), "saveformcontainer", [], "any", false, false, true, 57), 57, $this->source);
        echo ">

        ";
        // line 59
        if ((LS_Twig_Extension::safecount(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 59), "aErrors", [], "any", false, false, true, 59)) > 0)) {
            // line 60
            echo "            <ul class='";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 60), "sClass", [], "any", false, false, true, 60), 60, $this->source);
            echo "  ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 60), "saveformcontainerul", [], "any", false, false, true, 60), 60, $this->source);
            echo " alert alert-danger list-unstyled '  >
                ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 61), "aErrors", [], "any", false, false, true, 61));
            foreach ($context['_seq'] as $context["key"] => $context["error"]) {
                // line 62
                echo "                    <li ";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 62), "saveformcontainerli", [], "any", false, false, true, 62), 62, $this->source);
                echo " >";
                echo $this->sandbox->ensureToStringAllowed($context["error"], 62, $this->source);
                echo "</li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            </ul>
        ";
        }
        // line 66
        echo "
        ";
        // line 72
        echo "        ";
        $context["htmlOptions"] = ["id" => "form-save", "name" => "form-save", "class" => "ls-form"];
        // line 78
        echo "
        ";
        // line 84
        echo "        <!-- Save Form -->
        ";
        // line 85
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 86
($context["C"] ?? null), "Html", [], "any", false, false, true, 86), "form", [twig_get_attribute($this->env, $this->source,         // line 87
($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 87), "post",         // line 89
($context["htmlOptions"] ?? null)], "method", false, false, true, 86), 86, $this->source);
        // line 91
        echo "
            <!-- Hidden fields  -->
            ";
        // line 93
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 93), "sHiddenField", [], "any", false, false, true, 93), 93, $this->source);
        echo "

            <!-- Name and Password -->
            <div class='";
        // line 96
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 96), "saveformsurvey", [], "any", false, false, true, 96), 96, $this->source);
        echo " col-12' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 96), "saveformsurvey", [], "any", false, false, true, 96), 96, $this->source);
        echo ">
                <div class='";
        // line 97
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 97), "saveformsurveydiva", [], "any", false, false, true, 97), 97, $this->source);
        echo " mb-3' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 97), "saveformsurveydiva", [], "any", false, false, true, 97), 97, $this->source);
        echo ">

                    <!-- Saved name  -->
                    <label class='";
        // line 100
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 100), "saveformsurveydivalabel", [], "any", false, false, true, 100), 100, $this->source);
        echo " control-label' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 100), "saveformsurveydivalabel", [], "any", false, false, true, 100), 100, $this->source);
        echo ">
                        ";
        // line 101
        echo gT("Name");
        echo "<small class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 101), "saveformsurveydivalabelsmall", [], "any", false, false, true, 101), 101, $this->source);
        echo " asterisk ri-asterisk superset\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 101), "saveformsurveydivalabelsmall", [], "any", false, false, true, 101), 101, $this->source);
        echo " >&nbsp;</small>
                        <span class=\"";
        // line 102
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 102), "saveformsurveydivalabelspan", [], "any", false, false, true, 102), 102, $this->source);
        echo " visually-hidden asterisk\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 102), "saveformsurveydivalabelspan", [], "any", false, false, true, 102), 102, $this->source);
        echo ">";
        echo gT("Mandatory");
        echo "</span>
                    </label>
                    <div class='";
        // line 104
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 104), "saveformsurveydivb", [], "any", false, false, true, 104), 104, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 104), "saveformsurveydivb", [], "any", false, false, true, 104), 104, $this->source);
        echo ">

                        ";
        // line 106
        $context["htmlOptions"] = ["id" => "savename", "name" => "savename", "class" => "form-control ls-important-field", "placeholder" => gT("Enter your name"), "required" => true];
        // line 114
        echo "
                        ";
        // line 116
        echo "                        ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 116), "textField", ["savename", LS_Twig_Extension::getPost("savename"),         // line 119
($context["htmlOptions"] ?? null)], "method", false, false, true, 116), 116, $this->source);
        // line 120
        echo "
                    </div>

                </div>

                <!-- Password -->
                <div class='row mb-0 mb-md-3'>
                    <div class='";
        // line 127
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 127), "saveformsurveydivc", [], "any", false, false, true, 127), 127, $this->source);
        echo " col-md-6 col-12 mb-3 mb-md-0' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 127), "saveformsurveydivc", [], "any", false, false, true, 127), 127, $this->source);
        echo ">
                        <label class='";
        // line 128
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 128), "saveformsurveydivclabel", [], "any", false, false, true, 128), 128, $this->source);
        echo " control-label' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 128), "saveformsurveydivclabel", [], "any", false, false, true, 128), 128, $this->source);
        echo ">
                            ";
        // line 129
        echo gT("Password");
        echo "<small class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 129), "saveformsurveydivcsmall", [], "any", false, false, true, 129), 129, $this->source);
        echo " asterisk ri-asterisk superset\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 129), "saveformsurveydivcsmall", [], "any", false, false, true, 129), 129, $this->source);
        echo " >&nbsp;</small>
                            <span class=\"";
        // line 130
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 130), "saveformsurveydivcspan", [], "any", false, false, true, 130), 130, $this->source);
        echo " visually-hidden asterisk\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 130), "saveformsurveydivcspan", [], "any", false, false, true, 130), 130, $this->source);
        echo ">";
        echo gT("Mandatory");
        echo "</span>
                        </label>

                        <div class='";
        // line 133
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 133), "saveformsurveydivcdiv", [], "any", false, false, true, 133), 133, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 133), "saveformsurveydivcdiv", [], "any", false, false, true, 133), 133, $this->source);
        echo ">

                            ";
        // line 135
        $context["htmlOptions"] = ["id" => "savepass", "name" => "savepass", "class" => "form-control ls-important-field", "placeholder" => gT("Enter password"), "required" => true];
        // line 143
        echo "
                            ";
        // line 144
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 144), "passwordField", ["savepass", LS_Twig_Extension::getPost("savepass"),         // line 147
($context["htmlOptions"] ?? null)], "method", false, false, true, 144), 144, $this->source);
        // line 148
        echo "
                        </div>
                    </div>

                    <!-- Confirm password -->
                    <div class='";
        // line 153
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 153), "saveformsurveydivd", [], "any", false, false, true, 153), 153, $this->source);
        echo " col-md-6 col-12 mb-3 mb-md-0' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 153), "saveformsurveydivd", [], "any", false, false, true, 153), 153, $this->source);
        echo ">
                        <label class='";
        // line 154
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 154), "saveformsurveydivdlabel", [], "any", false, false, true, 154), 154, $this->source);
        echo " control-label' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 154), "saveformsurveydivdlabel", [], "any", false, false, true, 154), 154, $this->source);
        echo " >
                            ";
        // line 155
        echo gT("Repeat password");
        echo "<small class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 155), "saveformsurveydivdlabelsmall", [], "any", false, false, true, 155), 155, $this->source);
        echo "  asterisk ri-asterisk superset\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 155), "saveformsurveydivdlabelsmall", [], "any", false, false, true, 155), 155, $this->source);
        echo ">&nbsp;</small>
                            <span class=\"";
        // line 156
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 156), "saveformsurveydivdlabelspan", [], "any", false, false, true, 156), 156, $this->source);
        echo " visually-hidden asterisk\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 156), "saveformsurveydivdlabelspan", [], "any", false, false, true, 156), 156, $this->source);
        echo ">";
        echo gT("Mandatory");
        echo "</span>
                        </label>

                        <div class='";
        // line 159
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 159), "saveformsurveydivddiv", [], "any", false, false, true, 159), 159, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 159), "saveformsurveydivddiv", [], "any", false, false, true, 159), 159, $this->source);
        echo ">
                            ";
        // line 160
        $context["htmlOptions"] = ["id" => "savepass2", "name" => "savepass2", "class" => "form-control ls-important-field", "placeholder" => gT("Repeat password"), "required" => true];
        // line 168
        echo "
                            ";
        // line 169
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 169), "passwordField", ["savepass2", LS_Twig_Extension::getPost("savepass2"),         // line 172
($context["htmlOptions"] ?? null)], "method", false, false, true, 169), 169, $this->source);
        // line 173
        echo "
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class='";
        // line 179
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 179), "saveformsurveydive", [], "any", false, false, true, 179), 179, $this->source);
        echo "  mb-3' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 179), "saveformsurveydive", [], "any", false, false, true, 179), 179, $this->source);
        echo ">
                    <label class='";
        // line 180
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 180), "saveformsurveydivelabel", [], "any", false, false, true, 180), 180, $this->source);
        echo " control-label' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 180), "saveformsurveydivelabel", [], "any", false, false, true, 180), 180, $this->source);
        echo " >
                        ";
        // line 181
        echo gT("Your e-mail address");
        echo "
                    </label>
                    <div class='";
        // line 183
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 183), "saveformsurveydivediv", [], "any", false, false, true, 183), 183, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 183), "saveformsurveydivediv", [], "any", false, false, true, 183), 183, $this->source);
        echo ">

                        ";
        // line 185
        $context["htmlOptions"] = ["id" => "saveemail", "name" => "saveemail", "class" => "form-control ls-important-field", "placeholder" => gT("Enter e-mail address")];
        // line 192
        echo "
                        ";
        // line 193
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["C"] ?? null), "Html", [], "any", false, false, true, 193), "emailField", ["saveemail", LS_Twig_Extension::getPost("saveemail"),         // line 196
($context["htmlOptions"] ?? null)], "method", false, false, true, 193), 193, $this->source);
        // line 197
        echo "
                    </div>
                </div>


                ";
        // line 202
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 202), "aCaptcha", [], "any", false, false, true, 202), "show", [], "any", false, false, true, 202)) {
            // line 203
            echo "                    <!-- Captcha -->
                    <div class='";
            // line 204
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 204), "saveformsurveydivf", [], "any", false, false, true, 204), 204, $this->source);
            echo " mb-3' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 204), "saveformsurveydivd", [], "any", false, false, true, 204), 204, $this->source);
            echo " >
                        <label class='";
            // line 205
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 205), "saveformsurveydivflabel", [], "any", false, false, true, 205), 205, $this->source);
            echo " control-label' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 205), "saveformsurveydivdlabel", [], "any", false, false, true, 205), 205, $this->source);
            echo "  >
                            ";
            // line 206
            echo gT("Security question");
            echo "
                        </label>
                        <div class='";
            // line 208
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 208), "saveformsurveydivfdiv", [], "any", false, false, true, 208), 208, $this->source);
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 208), "saveformsurveydivddiv", [], "any", false, false, true, 208), 208, $this->source);
            echo " >
                            <div class='";
            // line 209
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 209), "saveformsurveydivfdivdiv", [], "any", false, false, true, 209), 209, $this->source);
            echo " input-group' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 209), "saveformsurveydivddivdiv", [], "any", false, false, true, 209), 209, $this->source);
            echo ">
                                <div class='";
            // line 210
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 210), "saveformsurveydivfdivdivdiv", [], "any", false, false, true, 210), 210, $this->source);
            echo " ls-important-field' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 210), "saveformsurveydivddivdivdiv", [], "any", false, false, true, 210), 210, $this->source);
            echo " >
                                    <img src='";
            // line 211
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "aSaveForm", [], "any", false, false, true, 211), "aCaptcha", [], "any", false, false, true, 211), "sImageUrl", [], "any", false, false, true, 211), 211, $this->source);
            echo "' ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 211), "saveformsurveydivddivdivdivimg", [], "any", false, false, true, 211), 211, $this->source);
            echo "   />
                                </div>
                                <input class='";
            // line 213
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 213), "saveformsurveydivfdivdivinput", [], "any", false, false, true, 213), 213, $this->source);
            echo "  form-control ls-important-field'  ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 213), "saveformsurveydivfdivdivinput", [], "any", false, false, true, 213), 213, $this->source);
            echo " placeholder=\"";
            echo gT("Enter result here - numbers only");
            echo "\"/>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 218
        echo "                <div class=\"row button-row\">
                    <!-- return button -->
                    <div class='";
        // line 220
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 220), "saveformsurveydivh", [], "any", false, false, true, 220), 220, $this->source);
        echo " mb-3 col-auto' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 220), "saveformsurveydivh", [], "any", false, false, true, 220), 220, $this->source);
        echo ">
                        <div class=\"";
        // line 221
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 221), "saveformsurveydivhdiv", [], "any", false, false, true, 221), 221, $this->source);
        echo " \" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 221), "saveformsurveydivhdiv", [], "any", false, false, true, 221), 221, $this->source);
        echo ">
                            <a href=\"";
        // line 222
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "surveyUrl", [], "any", false, false, true, 222), 222, $this->source);
        echo "\" class=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 222), "saveformsurveydivhdiva", [], "any", false, false, true, 222), 222, $this->source);
        echo " btn btn-outline-secondary\">";
        echo gT("Return to survey");
        echo "</a>
                        </div>
                    </div>
                    <!-- save button -->
                    <div class='";
        // line 226
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 226), "saveformsurveydivg", [], "any", false, false, true, 226), 226, $this->source);
        echo " mb-3 col-auto' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 226), "saveformsurveydivg", [], "any", false, false, true, 226), 226, $this->source);
        echo ">
                        <div class='";
        // line 227
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 227), "saveformsurveydivgdiv", [], "any", false, false, true, 227), 227, $this->source);
        echo "' ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 227), "saveformsurveydivgdiv", [], "any", false, false, true, 227), 227, $this->source);
        echo ">
                            <button ";
        // line 228
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 228), "saveformsurveydivgdivbutton", [], "any", false, false, true, 228), 228, $this->source);
        echo "  class='";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 228), "saveformsurveydivgdivbutton", [], "any", false, false, true, 228), 228, $this->source);
        echo " btn btn-primary' >
                                ";
        // line 229
        echo gT("Save Now");
        echo "
                            </button>
                        </div>
                    </div>
                </div>
            </div>



    </div>

</form> <!-- main form -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/content/save.twig";
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
        return array (  489 => 229,  483 => 228,  477 => 227,  471 => 226,  460 => 222,  454 => 221,  448 => 220,  444 => 218,  432 => 213,  425 => 211,  419 => 210,  413 => 209,  407 => 208,  402 => 206,  396 => 205,  390 => 204,  387 => 203,  385 => 202,  378 => 197,  376 => 196,  375 => 193,  372 => 192,  370 => 185,  363 => 183,  358 => 181,  352 => 180,  346 => 179,  338 => 173,  336 => 172,  335 => 169,  332 => 168,  330 => 160,  324 => 159,  314 => 156,  306 => 155,  300 => 154,  294 => 153,  287 => 148,  285 => 147,  284 => 144,  281 => 143,  279 => 135,  272 => 133,  262 => 130,  254 => 129,  248 => 128,  242 => 127,  233 => 120,  231 => 119,  229 => 116,  226 => 114,  224 => 106,  217 => 104,  208 => 102,  200 => 101,  194 => 100,  186 => 97,  180 => 96,  174 => 93,  170 => 91,  168 => 89,  167 => 87,  166 => 86,  165 => 85,  162 => 84,  159 => 78,  156 => 72,  153 => 66,  149 => 64,  138 => 62,  134 => 61,  127 => 60,  125 => 59,  118 => 57,  110 => 52,  104 => 51,  97 => 49,  89 => 48,  83 => 47,  77 => 46,  71 => 45,  63 => 44,  56 => 42,  50 => 40,  45 => 37,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/content/save.twig", "/var/www/html/themes/survey/fruity_twentythree/views/subviews/content/save.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 59, "for" => 61, "set" => 72);
        static $filters = array();
        static $functions = array("include" => 37, "gT" => 44, "count" => 59, "getPost" => 118);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                [],
                ['include', 'gT', 'count', 'getPost']
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
