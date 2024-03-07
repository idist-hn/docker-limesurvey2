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

/* __string_template__6705449932b41e005c3cadd505a0fd1a */
class __TwigTemplate_ce3763d622785421ab3a70c6771e38f8 extends Template
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
        echo "<input type='hidden' name='subquestions_sortorder' value='' />
<input type='hidden' id='subquestions_deletedqids' name='subquestions_deletedqids' value='' />

";
        // line 4
        $context["first"] = true;
        // line 5
        $context["scale_id"] = 0;
        // line 7
        $context["supportsRelevance"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "questionType", [], "any", false, false, true, 7), "code", [], "any", false, false, true, 7) != "H");
        // line 8
        echo "
<!-- Loop all language, and then hide all but the current selected one with JS. -->
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allLanguages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 11
            echo "    <div class=\"lang-hide lang-";
            echo $this->sandbox->ensureToStringAllowed($context["lang"], 11, $this->source);
            echo " ";
            echo ((($context["first"] ?? null)) ? ("base-lang") : ("extra-lang"));
            echo "\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($context["scalecount"] ?? null) - 1)));
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
            foreach ($context['_seq'] as $context["_key"] => $context["scale_id"]) {
                // line 13
                echo "            ";
                $context["anscount"] = twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["subquestions"] ?? null), 13, $this->source));
                // line 14
                echo "            ";
                // line 15
                echo "
            ";
                // line 16
                $context["position"] = 0;
                // line 17
                echo "            ";
                if ((($context["scalecount"] ?? null) > 1)) {
                    // line 18
                    echo "                ";
                    if (($context["scale_id"] == 0)) {
                        // line 19
                        echo "                    <div class='header ui-widget-header'>
                        <i>";
                        // line 20
                        echo gT("Y-Scale");
                        echo "</i>
                    </div>
                ";
                    } else {
                        // line 23
                        echo "                    <div class='header ui-widget-header'>
                        <i>";
                        // line 24
                        echo gT("X-Scale");
                        echo "</i>
                    </div>
                ";
                    }
                    // line 27
                    echo "            ";
                }
                // line 28
                echo "
            <!-- Subquestions table -->
            <!-- NB: Both questions and answer options uses class \"answertable\". -->
            <div class=\"subquestions-table-wrapper\" style=\"max-height: 414px;\">
                <table
                    class='answertable subquestions-table table table-responsive  ";
                // line 33
                echo ((($context["supportsRelevance"] ?? null)) ? ("") : ("hide-relevance"));
                echo "'
                    id='subquestions_";
                // line 34
                echo $this->sandbox->ensureToStringAllowed($context["lang"], 34, $this->source);
                echo "_";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 34, $this->source);
                echo "'
                    data-scaleid='";
                // line 35
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 35, $this->source);
                echo "'
                    data-input-data-id='add-subquestion-input-javascript-datas'
                >

                    <!-- Headers -->
                    <thead>
                        <tr>
                            <th></th>
                            <th class='col-lg-1'>";
                // line 43
                echo gT("Code");
                echo "
                            <i
                class=\"ri-information-fill\"
                data-bs-toggle=\"tooltip\"
                title=\"";
                // line 47
                echo gT("A mandatory unique alpha-numeric code for each subquestion (1-20 characters)");
                echo "\"
            > </i>
                            </th>
                            <th>
                                ";
                // line 51
                echo gT("Subquestion");
                echo "
                                <i class=\"ri-earth-fill\" data-bs-toggle=\"tooltip\" title=\"";
                // line 52
                echo gT("This setting is localized");
                echo "\"></i>
                            </th>
                            ";
                // line 54
                if (($context["first"] ?? null)) {
                    // line 55
                    echo "                                ";
                    if (($context["scale_id"] == 0)) {
                        // line 56
                        echo "                                    <th id='rel-eq-th' class='col-lg-1'>
                                        ";
                        // line 57
                        echo gT("Relevance equation");
                        echo "
                                    </th>
                                ";
                    }
                    // line 60
                    echo "                                <th class=\"col-lg-1\">
                                    ";
                    // line 61
                    echo gT("Action");
                    echo "
                                </th>
                            ";
                }
                // line 64
                echo "                        </tr>
                    </thead>

                    <!-- Body -->
                    <tbody>
                        ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = ($context["subquestions"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["scale_id"]] ?? null) : null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["subquestion"]) {
                    // line 70
                    echo "                            <!-- Line tag -->
                            ";
                    // line 71
                    $this->loadTemplate("subquestionRow.twig", "__string_template__6705449932b41e005c3cadd505a0fd1a", 71)->display(twig_array_merge($context, ["position" =>                     // line 72
($context["position"] ?? null), "scale_id" =>                     // line 73
$context["scale_id"], "activated" =>                     // line 74
($context["activated"] ?? null), "first" =>                     // line 75
($context["first"] ?? null), "subquestion" =>                     // line 76
$context["subquestion"], "subquestionl10n" => (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,                     // line 77
$context["subquestion"], "questionl10ns", [], "any", false, false, true, 77)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["lang"]] ?? null) : null), "language" =>                     // line 78
$context["lang"]]));
                    // line 80
                    echo "
                            ";
                    // line 81
                    $context["position"] = (($context["position"] ?? null) + 1);
                    // line 82
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subquestion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                echo "                    </tbody>
                </table>
            </div>

            <div class=\"action-buttons\" style=\"padding-bottom: 10px;\">
                ";
                // line 89
                if ((($context["activated"] ?? null) == "Y")) {
                    // line 90
                    echo "                    ";
                    $context["disabled"] = "disabled=\"disabled\"";
                    // line 91
                    echo "                ";
                } else {
                    // line 92
                    echo "                    ";
                    $context["disabled"] = "";
                    // line 93
                    echo "                ";
                }
                // line 94
                echo "
                <button
                    ";
                // line 96
                echo $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null), 96, $this->source);
                echo "
                    data-scale-id=\"";
                // line 97
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 97, $this->source);
                echo "\"
                    class='btnlsbrowser btn btn-outline-secondary'
                    type='button'
                    onclick=\"LS.questionEditor.showLabelSetPicker(event, 'subquestions');\"
                >
                    ";
                // line 102
                echo gT("Load label set");
                echo "
                </button>

                ";
                // line 105
                if (($context["hasLabelSetPermission"] ?? null)) {
                    // line 106
                    echo "                    <button
                        class='bthsaveaslabel btn btn-outline-secondary'
                        id='bthsaveaslabel_";
                    // line 108
                    echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 108, $this->source);
                    echo "'
                        type='button'
                        onclick=\"LS.questionEditor.showLabelSetSaver(event, 'subquestions-table');\"
                        data-bs-target=\"#saveaslabelModal\"
                    >
                        ";
                    // line 113
                    echo gT("Save label set");
                    echo "
                    </button>
                ";
                }
                // line 116
                echo "
                <button ";
                // line 117
                echo $this->sandbox->ensureToStringAllowed(($context["disabled"] ?? null), 117, $this->source);
                echo " id='btnquickadd_";
                echo $this->sandbox->ensureToStringAllowed($context["lang"], 117, $this->source);
                echo "_";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 117, $this->source);
                echo "' data-scale-id=\"";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 117, $this->source);
                echo "\" class='btn btn-outline-secondary btnquickadd float-end' type='button' data-bs-toggle=\"modal\" data-bs-target=\"#quickaddModal\" data-scale-id=\"";
                echo $this->sandbox->ensureToStringAllowed($context["scale_id"], 117, $this->source);
                echo "\">
                    ";
                // line 118
                echo gT("Quick add");
                echo "
                </button>
            </div>
            ";
                // line 121
                $context["position"] = sprintf("%05d", $this->sandbox->ensureToStringAllowed(($context["position"] ?? null), 121, $this->source));
                // line 122
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scale_id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "    </div>
    ";
            // line 124
            $context["first"] = false;
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
<!-- For javascript -->
<input
    type=\"hidden\"
    id=\"add-subquestion-input-javascript-datas\"
    data-url=\"";
        // line 131
        echo LS_Twig_Extension::createUrl("/questionAdministration/getSubquestionRowForAllLanguages/");
        echo "\"
    data-quickurl=\"";
        // line 132
        echo LS_Twig_Extension::createUrl("/questionAdministration/getSubquestionRowQuickAdd", ["surveyid" => twig_get_attribute($this->env, $this->source,         // line 135
($context["question"] ?? null), "sid", [], "any", false, false, true, 135), "gid" => twig_get_attribute($this->env, $this->source,         // line 136
($context["question"] ?? null), "gid", [], "any", false, false, true, 136)]);
        // line 138
        echo "\"
    data-assessmentvisible=\"";
        // line 139
        if ((($context["assessmentvisible"] ?? null) == true)) {
            echo "1";
        } else {
            echo "0";
        }
        echo "\"
    data-errormessage=\"An error occured while processing the ajax request.\"
    data-languages='";
        // line 141
        echo CJSON::encode($this->sandbox->ensureToStringAllowed(($context["allLanguages"] ?? null), 141, $this->source));
        echo "'
    data-surveyid=\"";
        // line 142
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "sid", [], "any", false, false, true, 142), 142, $this->source);
        echo "\"
    data-gid=\"";
        // line 143
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "gid", [], "any", false, false, true, 143), 143, $this->source);
        echo "\"
    data-qid=\"";
        // line 144
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["question"] ?? null), "qid", [], "any", false, false, true, 144), 144, $this->source);
        echo "\"
    data-scale-id=\"";
        // line 145
        echo $this->sandbox->ensureToStringAllowed(($context["scale_id"] ?? null), 145, $this->source);
        echo "\" ";
        // line 146
        echo "/>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__6705449932b41e005c3cadd505a0fd1a";
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
        return array (  425 => 146,  422 => 145,  418 => 144,  414 => 143,  410 => 142,  406 => 141,  397 => 139,  394 => 138,  392 => 136,  391 => 135,  390 => 132,  386 => 131,  379 => 126,  365 => 124,  362 => 123,  348 => 122,  346 => 121,  340 => 118,  328 => 117,  325 => 116,  319 => 113,  311 => 108,  307 => 106,  305 => 105,  299 => 102,  291 => 97,  287 => 96,  283 => 94,  280 => 93,  277 => 92,  274 => 91,  271 => 90,  269 => 89,  262 => 84,  247 => 82,  245 => 81,  242 => 80,  240 => 78,  239 => 77,  238 => 76,  237 => 75,  236 => 74,  235 => 73,  234 => 72,  233 => 71,  230 => 70,  213 => 69,  206 => 64,  200 => 61,  197 => 60,  191 => 57,  188 => 56,  185 => 55,  183 => 54,  178 => 52,  174 => 51,  167 => 47,  160 => 43,  149 => 35,  143 => 34,  139 => 33,  132 => 28,  129 => 27,  123 => 24,  120 => 23,  114 => 20,  111 => 19,  108 => 18,  105 => 17,  103 => 16,  100 => 15,  98 => 14,  95 => 13,  78 => 12,  71 => 11,  54 => 10,  50 => 8,  48 => 7,  46 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6705449932b41e005c3cadd505a0fd1a", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 4, "for" => 10, "if" => 17, "include" => 71);
        static $filters = array("length" => 13, "gT" => 52);
        static $functions = array("range" => 12, "gT" => 20, "sprintf" => 121, "createUrl" => 131, "json_encode" => 141);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'include'],
                ['length', 'gT'],
                ['range', 'gT', 'sprintf', 'createUrl', 'json_encode']
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
