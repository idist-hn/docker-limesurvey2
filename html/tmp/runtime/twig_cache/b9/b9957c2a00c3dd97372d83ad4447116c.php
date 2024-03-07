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

/* ./subviews/privacy/privacy_modal.twig */
class __TwigTemplate_6b6948b3ec3916a2eb4906d0b25988c4 extends Template
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
        // line 16
        echo "
";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecurity_error", [], "any", false, false, true, 17)) {
            // line 18
            echo "    <div class=\"ls-privacy-block\">
        <div class=\"";
            // line 19
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 19), "activealert", [], "any", false, false, true, 19), 19, $this->source);
            echo " alert alert-danger alert-dismissible alert-dismissible ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecuritynotaccepted", [], "any", false, false, true, 19)) {
                echo "ls-js-hidden ";
            }
            echo "\" ";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 19), "activealert", [], "any", false, false, true, 19), 19, $this->source);
            echo "
             id=\"datasecurity_error\">
            <a ";
            // line 21
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 21), "activealertbutton", [], "any", false, false, true, 21), 21, $this->source);
            echo " class=\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 21), "activealertbutton", [], "any", false, false, true, 21), 21, $this->source);
            echo " btn-close\" aria-hidden=\"true\"></a>
            ";
            // line 22
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecurity_error", [], "any", false, false, true, 22), 22, $this->source);
            echo "
        </div>
        ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecuritynotaccepted", [], "any", false, false, true, 24)) {
                // line 25
                echo "            ";
                $context["describeprivacy"] = ("datasecurity_error " . $this->sandbox->ensureToStringAllowed(($context["describeprivacy"] ?? null), 25, $this->source));
                // line 26
                echo "        ";
            }
            // line 27
            echo "    </div>
";
        }
        // line 29
        echo "<div class=\"ls-privacy-block\">
    <div class=\"row row-cols-lg-auto align-items-center datasecurity-checkbox-container\">
        <div class=\"col-12 checkbox-item\">
            <input required class=\"";
        // line 32
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 32), "privacydataseccheckbox", [], "any", false, false, true, 32), 32, $this->source);
        echo " form-check-input\" type=\"checkbox\" name=\"datasecurity_accepted\" id=\"datasecurity_accepted\"/>
            <label for=\"datasecurity_accepted\"
                   class=\"control-label checkbox-label form-check-label datasecurity-checkbox-label ";
        // line 34
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 34), "privacydataseccheckboxlabel", [], "any", false, false, true, 34), 34, $this->source);
        echo "\">
                ";
        // line 35
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecurity_notice_label", [], "any", false, false, true, 35), 35, $this->source);
        echo "
            </label>
        </div>
    </div>
</div>
<div id=\"data-security-modal-";
        // line 40
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "sid", [], "any", false, false, true, 40), 40, $this->source);
        echo "\" class=\"modal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 44
        echo gT("Privacy policy");
        echo "</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div id=\"datasecurity_notice\" class=\"modal-body ";
        // line 47
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 47), "privacydatasecmodalbody", [], "any", false, false, true, 47), 47, $this->source);
        echo "\">
                ";
        // line 48
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "datasecurity_notice", [], "any", false, false, true, 48), 48, $this->source);
        echo "
            </div>
            <div class=\"modal-footer ls-no-js-hidden\">
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"\$('#datasecurity_accepted').prop('checked',true).trigger('change');\" data-bs-dismiss=\"modal\">
                    ";
        // line 52
        echo gT("Accept");
        echo "
                </button>
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    ";
        // line 55
        echo gT("Close");
        echo "
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    \$(function () {
        \$('#ls-button-submit').on('click', function () {
            if (!\$('#datasecurity_accepted').prop('checked')) {
                /* dynamic show error */
                \$('#datasecurity_error').removeClass('ls-js-hidden');
                if (\$('#datasecurity_error').length) {
                    /* add it in aria and role */
                    \$('#datasecurity_error').attr('role', 'alert');
                    \$('#datasecurity_accepted').attr('aria-describedby', \"datasecurity_error ";
        // line 70
        echo $this->sandbox->ensureToStringAllowed(($context["datasecuritynotice"] ?? null), 70, $this->source);
        echo "\");
                }
            }
        });
    });
    \$('#datasecurity_accepted').on('change', function () {
        if (\$('#datasecurity_accepted').prop('checked')) {
            /* dynamic hide error */
            \$('#datasecurity_error').addClass('ls-js-hidden');
        }
    });
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/privacy/privacy_modal.twig";
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
        return array (  151 => 70,  133 => 55,  127 => 52,  120 => 48,  116 => 47,  110 => 44,  103 => 40,  95 => 35,  91 => 34,  86 => 32,  81 => 29,  77 => 27,  74 => 26,  71 => 25,  69 => 24,  64 => 22,  58 => 21,  47 => 19,  44 => 18,  42 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/privacy/privacy_modal.twig", "/var/www/html/themes/survey/fruity_twentythree/views/subviews/privacy/privacy_modal.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17, "set" => 25);
        static $filters = array();
        static $functions = array("gT" => 44);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                [],
                ['gT']
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
