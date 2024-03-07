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

/* subquestionRow.twig */
class __TwigTemplate_2c6908d2c048e99798d60b2e7b533b3e extends Template
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
        // line 15
        echo "
<!-- subquestion row -->
<tr id='row_";
        // line 17
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 17, $this->source);
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 17), 17, $this->source);
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 17, $this->source);
        echo "' class=\"row-container\" data-common-id=\"";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 17), 17, $this->source);
        echo "_";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 17, $this->source);
        echo "\">
    ";
        // line 19
        echo "    ";
        if ((($context["activated"] ?? null) == "Y")) {
            // line 20
            echo "        <!-- Move icon -->
        <td class=\"move-icon-disable\">
            &nbsp;
        </td>

        <!-- Code (title) -->
        <td class=\"code-title\" style=\"vertical-align: middle;\">
            <input
                type='text'
                class=\"code form-control input\"
                id='subquestions[";
            // line 30
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 30), 30, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 30, $this->source);
            echo "][code]'
                name='subquestions[";
            // line 31
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 31), 31, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 31, $this->source);
            echo "][code]'
                class='code code-title'
                value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 33), 33, $this->source), "html_attr");
            echo "\"
                required='required'
                maxlength=\"20\"
                pattern=\"[a-zA-Z0-9]+\"
                ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "survey", [], "any", false, false, true, 37), "active", [], "any", false, false, true, 37) == "Y")) {
                // line 38
                echo "                readonly=\"readonly\"
                ";
            }
            // line 40
            echo "                onfocusout=\"LS.questionEditor.showSubquestionCodeUniqueError(this);\"
            />
        </td>

    ";
            // line 45
            echo "    ";
        } elseif (($context["first"] ?? null)) {
            // line 46
            echo "        ";
            $context["sPattern"] = ((twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 46)) ? ((("^([a-zA-Z0-9]*|" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 46), 46, $this->source)) . ")\$")) : ("^[a-zA-Z0-9]*\$"));
            // line 47
            echo "
        <!-- Move icon -->
        <td
          style=\"text-align: center;\"
        >
            <span
              class=\"ri-menu-fill move-icon\"
              role=\"button\"
              data-bs-toggle=\"tooltip\"
              data-title=\"";
            // line 56
            echo gT("Drag to sort");
            echo "\"
            ></span>
        </td>

        <!-- Code (title) -->
        <td class=\"code-title\" style=\"vertical-align: middle;\">
            <input
                type='text'
                class=\"code form-control input\"
                id='subquestions[";
            // line 65
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 65), 65, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 65, $this->source);
            echo "][code]'
                name='subquestions[";
            // line 66
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 66), 66, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 66, $this->source);
            echo "][code]'
                class='code code-title'
                value=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 68), 68, $this->source), "html_attr");
            echo "\"
                required='required'
                maxlength=\"20\"
                pattern=\"[a-zA-Z0-9]+\"
                ";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "survey", [], "any", false, false, true, 72), "active", [], "any", false, false, true, 72) == "Y")) {
                // line 73
                echo "                readonly=\"readonly\"
                ";
            }
            // line 75
            echo "                onfocusout=\"LS.questionEditor.showSubquestionCodeUniqueError(this);\"
            />
        </td>

    ";
            // line 80
            echo "    ";
        } else {
            // line 81
            echo "        <!-- Move icon -->
        <td class=\"move-icon-disable\">
            &nbsp;
        </td>

        <!-- Code (title) -->
        <td  class=\"code-title\" style=\"vertical-align: middle;\">
            ";
            // line 88
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 88), 88, $this->source), "html");
            echo "
        </td>
    ";
        }
        // line 91
        echo "
    <!-- Subquestion text -->
    <td  class=\"subquestion-text\" style=\"vertical-align: middle;\">
        <div class=\"input-group\">
            <!-- NB: Class \"answer\" is used for both subquestions and answer options. -->
            <input
                type='text'
                size='20'
                class='answer form-control input'
                id='subquestions[";
        // line 100
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 100), 100, $this->source);
        echo "][";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 100, $this->source);
        echo "][subquestionl10n][";
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 100, $this->source);
        echo "]'
                name='subquestions[";
        // line 101
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 101), 101, $this->source);
        echo "][";
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 101, $this->source);
        echo "][subquestionl10n][";
        echo $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 101, $this->source);
        echo "]'
                placeholder='";
        // line 102
        echo gT("Some example subquestion", "js");
        echo "'
                value=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestionl10n"] ?? null), "question", [], "any", false, false, true, 103), 103, $this->source), "html_attr");
        echo "\"
                data-contents-dir=\"";
        // line 104
        echo ((LS_Twig_Extension::getLanguageRTL($this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 104, $this->source))) ? ("rtl") : ("ltr"));
        echo "\"
                onkeypress=\" if(event.keyCode==13) { if (event && event.preventDefault) event.preventDefault(); document.getElementById('save-button').click(); return false;}\"
            />
            ";
        // line 107
        echo getEditor("editanswer", (((((("subquestions[" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 109
($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 109), 109, $this->source)) . "][") . $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 109, $this->source)) . "][subquestionl10n][") . $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 109, $this->source)) . "]"), (((("[" . gT("Subquestion:", "js")) . "](") . $this->sandbox->ensureToStringAllowed(        // line 110
($context["language"] ?? null), 110, $this->source)) . ")"), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 111
($context["subquestion"] ?? null), "sid", [], "any", false, false, true, 111), 111, $this->source), $this->sandbox->ensureToStringAllowed(        // line 112
($context["gid"] ?? null), 112, $this->source), ((twig_matches("/^\\d+\$/", twig_get_attribute($this->env, $this->source,         // line 113
($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 113))) ? (twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 113)) : ("")), "editanswer");
        // line 115
        echo "
        </div>
    </td>

    <!-- Relevance equation -->
    ";
        // line 120
        if ((($context["first"] ?? null) && (($context["scale_id"] ?? null) == 0))) {
            // line 121
            echo "        <td class=\"relevance-equation\">
            <input
                data-bs-toggle=\"tooltip\"
                data-title=\"";
            // line 124
            echo gT("Click to expand");
            echo "\"
                type='text'
                class='relevance form-control input'
                id='subquestions[";
            // line 127
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 127), 127, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 127, $this->source);
            echo "][relevance]'
                name='subquestions[";
            // line 128
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "qid", [], "any", false, false, true, 128), 128, $this->source);
            echo "][";
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 128, $this->source);
            echo "][relevance]'
                value=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "relevance", [], "any", false, false, true, 129), 129, $this->source), "html_attr");
            echo "\"
                onkeypress=\" if(event.keyCode==13) { if (event && event.preventDefault) event.preventDefault(); document.getElementById('save-button').click(); return false;}\"
            />
        </td>
    ";
        } else {
            // line 134
            echo "        <!-- TOOD: Why render and then hide? -->
        <span style=\"display: none\" class=\"relevance relevance-equation\">
            ";
            // line 137
            echo "        </span>
    ";
        }
        // line 139
        echo "
    <!-- Icons add/edit/delete -->
    <td style=\"vertical-align: middle; white-space: nowrap;\" class=\"subquestion-actions\">
        ";
        // line 142
        if (((($context["activated"] ?? null) != "Y") && ($context["first"] ?? null))) {
            // line 143
            echo "            <button class=\"btn btn-outline-secondary btn-sm btnaddsubquestion\">
                <i
                    class=\"ri-add-circle-fill text-primary\"
                    data-code=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["subquestion"] ?? null), "title", [], "any", false, false, true, 146), 146, $this->source), "html_attr");
            echo "\"
                    data-bs-toggle=\"tooltip\"
                    data-scale-id=\"";
            // line 148
            echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 148, $this->source);
            echo "\"
                    data-bs-placement=\"bottom\"
                    title=\"";
            // line 150
            echo gT("Insert a new subquestion after this one");
            echo "\"
                ></i>
            </button>
            <button class=\"btn btn-outline-secondary btn-sm btndelsubquestion\">
                <i
                    class=\"ri-indeterminate-circle-fill text-danger\"
                    data-bs-toggle=\"tooltip\"
                    data-bs-placement=\"bottom\"
                    title=\"";
            // line 158
            echo gT("Delete this subquestion");
            echo "\"
                ></i>
            </button>
        ";
        }
        // line 162
        echo "    </td>
</tr>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "subquestionRow.twig";
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
        return array (  317 => 162,  310 => 158,  299 => 150,  294 => 148,  289 => 146,  284 => 143,  282 => 142,  277 => 139,  273 => 137,  269 => 134,  261 => 129,  255 => 128,  249 => 127,  243 => 124,  238 => 121,  236 => 120,  229 => 115,  227 => 113,  226 => 112,  225 => 111,  224 => 110,  223 => 109,  222 => 107,  216 => 104,  212 => 103,  208 => 102,  200 => 101,  192 => 100,  181 => 91,  175 => 88,  166 => 81,  163 => 80,  157 => 75,  153 => 73,  151 => 72,  144 => 68,  137 => 66,  131 => 65,  119 => 56,  108 => 47,  105 => 46,  102 => 45,  96 => 40,  92 => 38,  90 => 37,  83 => 33,  76 => 31,  70 => 30,  58 => 20,  55 => 19,  43 => 17,  39 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "subquestionRow.twig", "/var/www/html/application/views/questionAdministration/subquestionRow.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "set" => 46);
        static $filters = array("escape" => 33);
        static $functions = array("gT" => 56, "getLanguageRTL" => 104, "getEditor" => 107);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                ['gT', 'getLanguageRTL', 'getEditor']
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
