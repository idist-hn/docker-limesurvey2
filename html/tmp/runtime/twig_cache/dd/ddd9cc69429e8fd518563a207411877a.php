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

/* /survey/questions/answer/arrays/texts/columns/col_total.twig */
class __TwigTemplate_ff7ed6e786802a24b74453f7fae5bf72 extends Template
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
        // line 11
        echo "<!-- col_total -->
<td class=\"total information-item\">
    ";
        // line 13
        if (($context["empty"] ?? null)) {
            // line 14
            echo "        &nbsp;
    ";
        } else {
            // line 16
            echo "        <label for=\"totals";
            echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 16, $this->source);
            echo "total_[[COL_CODE]]\" class=\"ls-label-xs-visibility\">[[COL_NAME]]</label>
        <input
            type=\"text\"
            id=\"totals";
            // line 19
            echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 19, $this->source);
            echo "total_[[COL_CODE]]\"
            aria-labelledby=\"answertext";
            // line 20
            echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 20, $this->source);
            echo "_[[COL_CODE]]\"
            size=\"";
            // line 21
            echo $this->sandbox->ensureToStringAllowed(($context["inputsize"] ?? null), 21, $this->source);
            echo "\"
            value=\"\" disabled=\"disabled\" class=\"disabled form-control\"  data-number='1' />
    ";
        }
        // line 24
        echo "</td>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/texts/columns/col_total.twig";
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
        return array (  70 => 24,  64 => 21,  60 => 20,  56 => 19,  49 => 16,  45 => 14,  43 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/texts/columns/col_total.twig", "/var/www/html/application/views/survey/questions/answer/arrays/texts/columns/col_total.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                [],
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
