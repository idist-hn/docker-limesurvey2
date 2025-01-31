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

/* ./subviews/survey/group_subviews/group_container.twig */
class __TwigTemplate_3db0293c3a6c31357ecae2ded2024546 extends Template
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
        // line 20
        echo "
<div class=\"";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "class", [], "any", false, false, true, 21), "groupcontainer", [], "any", false, false, true, 21), 21, $this->source);
        echo " space-col\" ";
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["aSurveyInfo"] ?? null), "attr", [], "any", false, false, true, 21), "groupcontainer", [], "any", false, false, true, 21), 21, $this->source);
        echo ">

    ";
        // line 24
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/survey/group_subviews/group_name.twig");
        echo "

    ";
        // line 27
        echo "    ";
        echo twig_include($this->env, $context, "./subviews/survey/group_subviews/group_desc.twig");
        echo "

    ";
        // line 34
        echo "
    <!-- PRESENT THE QUESTIONS -->
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aGroup"] ?? null), "aQuestions", [], "any", false, false, true, 36));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["aQuestion"]) {
            // line 37
            echo "         ";
            echo twig_include($this->env, $context, "./subviews/survey/question_container.twig");
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aQuestion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    <!-- Hidden inputs -->
    ";
        // line 41
        if ((twig_get_attribute($this->env, $this->source, ($context["aGroup"] ?? null), "show_last_group", [], "any", false, false, true, 41) == true)) {
            // line 42
            echo "        <input type='hidden' name='lastgroup' value='";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aGroup"] ?? null), "lastgroup", [], "any", false, false, true, 42), 42, $this->source);
            echo "' id='lastgroup' />
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["aGroup"] ?? null), "show_last_answer", [], "any", false, false, true, 45) == true)) {
            // line 46
            echo "        <input type='hidden' name='lastanswer' value='";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["aGroup"] ?? null), "lastanswer", [], "any", false, false, true, 46), 46, $this->source);
            echo "' id='lastanswer' />
    ";
        }
        // line 48
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "./subviews/survey/group_subviews/group_container.twig";
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
        return array (  122 => 48,  116 => 46,  114 => 45,  111 => 44,  105 => 42,  103 => 41,  99 => 39,  82 => 37,  65 => 36,  61 => 34,  55 => 27,  49 => 24,  42 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "./subviews/survey/group_subviews/group_container.twig", "/var/www/html/themes/survey/fruity_twentythree/views/subviews/survey/group_subviews/group_container.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 36, "if" => 41);
        static $filters = array();
        static $functions = array("include" => 24);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
