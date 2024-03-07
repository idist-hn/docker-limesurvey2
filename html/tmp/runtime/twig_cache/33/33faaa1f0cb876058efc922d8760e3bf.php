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

/* /survey/questions/answer/arrays/texts/rows/cells/td_grand_total.twig */
class __TwigTemplate_8692af2452ee7a20eb73eb9cf59be3a3 extends Template
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
        echo "
";
        // line 9
        echo "
<!-- td_grand_total -->
";
        // line 11
        if (($context["empty"] ?? null)) {
            // line 12
            echo "    <td>&nbsp;</td>

";
        } else {
            // line 15
            echo "    <td class=\"total grand information-item\">
        <label for=\"totals";
            // line 16
            echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 16, $this->source);
            echo "total_total\" class=\"ls-label-xs-visibility\" aria-hidden=\"true\">";
            echo gT("Grand total");
            echo "</label>
        <input
            type=\"text\"
            id=\"totals";
            // line 19
            echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 19, $this->source);
            echo "total_total\"
            aria-labelledby=\"totals";
            // line 20
            echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 20, $this->source);
            echo "_total\"
            ";
            // line 21
            if (($context["inputsize"] ?? null)) {
                echo "size=\"";
                echo $this->sandbox->ensureToStringAllowed(($context["inputsize"] ?? null), 21, $this->source);
                echo "\" ";
            }
            // line 22
            echo "            value=\"\" disabled=\"disabled\" class=\"disabled form-control\" data-number='1'
        />
    </td>
";
        }
        // line 26
        echo "<!-- end of td_grand_total -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/arrays/texts/rows/cells/td_grand_total.twig";
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
        return array (  84 => 26,  78 => 22,  72 => 21,  68 => 20,  64 => 19,  56 => 16,  53 => 15,  48 => 12,  46 => 11,  42 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/arrays/texts/rows/cells/td_grand_total.twig", "/var/www/html/application/views/survey/questions/answer/arrays/texts/rows/cells/td_grand_total.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11);
        static $filters = array();
        static $functions = array("gT" => 16);

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
