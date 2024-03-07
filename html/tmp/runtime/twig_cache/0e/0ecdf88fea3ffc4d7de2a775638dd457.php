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

/* /survey/questions/answer/arrays/texts/rows/cells/td_total.twig */
class __TwigTemplate_560c7fd8b8de951379f4b136e683ea6d extends Template
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
        // line 12
        echo "<!-- td_total -->
<td class=\"total information-item\">
    ";
        // line 14
        if (($context["empty"] ?? null)) {
            // line 15
            echo "        &nbsp;
    ";
        } else {
            // line 17
            echo "        <label for=\"totals";
            echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 17, $this->source);
            echo "[[ROW_CODE]]_total\" class=\"ls-label-xs-visibility\" aria-hidden=\"true\">";
            echo gT("Total");
            echo "</label>
        <input
            type=\"text\"
            id=\"totals";
            // line 20
            echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 20, $this->source);
            echo "[[ROW_CODE]]_total\"
            aria-labelledby=\"totals";
            // line 21
            echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 21, $this->source);
            echo "_total\"
            ";
            // line 22
            if (($context["inputsize"] ?? null)) {
                echo "size=\"";
                echo $this->sandbox->ensureToStringAllowed(($context["inputsize"] ?? null), 22, $this->source);
                echo "\"";
            }
            // line 23
            echo "            value=\"\" disabled=\"disabled\" class=\"disabled form-control total\"  data-number='1'
        />
    ";
        }
        // line 26
        echo "</td>
<!-- end of td_total -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/texts/rows/cells/td_total.twig";
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
        return array (  77 => 26,  72 => 23,  66 => 22,  62 => 21,  58 => 20,  49 => 17,  45 => 15,  43 => 14,  39 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/texts/rows/cells/td_total.twig", "/var/www/html/application/views/survey/questions/answer/arrays/texts/rows/cells/td_total.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14);
        static $filters = array();
        static $functions = array("gT" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
