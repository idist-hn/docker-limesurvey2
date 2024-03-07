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

/* /survey/questions/answer/file_upload/answer.twig */
class __TwigTemplate_9074d50c05365b955802ea6d9f5f1aec extends Template
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
        // line 9
        echo "
<!-- File Upload  -->

<!--answer -->
<div class=\"";
        // line 13
        echo $this->sandbox->ensureToStringAllowed(($context["coreClass"] ?? null), 13, $this->source);
        echo "\">
    <div class='upload-button'>
        <a role=\"button\"
           id='upload_";
        // line 16
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 16, $this->source);
        echo "'
           class='btn btn-primary upload'
           href='";
        // line 18
        echo $this->sandbox->ensureToStringAllowed(($context["uploadurl"] ?? null), 18, $this->source);
        echo "'
           data-bs-toggle=\"modal\"
           data-bs-target=\"#file-upload-modal-";
        // line 20
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 20, $this->source);
        echo "\"
           data-showtitle=\"";
        // line 21
        echo $this->sandbox->ensureToStringAllowed(($context["showTitle"] ?? null), 21, $this->source);
        echo "\"
           data-showcomment=\"";
        // line 22
        echo $this->sandbox->ensureToStringAllowed(($context["showComment"] ?? null), 22, $this->source);
        echo "\"
           data-fieldname=\"";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(($context["basename"] ?? null), 23, $this->source);
        echo "\"
        >
            <span class='fa fa-upload ri-upload-fill'></span>
            &nbsp;
            ";
        // line 27
        echo $this->sandbox->ensureToStringAllowed(($context["uploadButtonLabel"] ?? null), 27, $this->source);
        echo "
        </a>
    </div>
    <input type='hidden' id='java";
        // line 30
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 30, $this->source);
        echo "' name='";
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 30, $this->source);
        echo "' value='";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 30, $this->source), "html_attr");
        echo "' />
    <input type='hidden' id='java";
        // line 31
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 31, $this->source);
        echo "_filecount' name='";
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 31, $this->source);
        echo "_filecount' value=\"";
        echo $this->sandbox->ensureToStringAllowed(($context["filecountvalue"] ?? null), 31, $this->source);
        echo "\" />
    <div id='";
        // line 32
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 32, $this->source);
        echo "_uploadedfiles' class=\"d-none\">
        <table width=\"100%\" class=\"question uploadedfiles\">
            <thead>
                <tr>
                    <th width=\"20%\">&nbsp;</th>
                    ";
        // line 37
        if (($context["showTitle"] ?? null)) {
            // line 38
            echo "                        <th>";
            echo gT("Title");
            echo "</th>
                    ";
        }
        // line 40
        echo "                    ";
        if (($context["showComment"] ?? null)) {
            // line 41
            echo "                        <th>";
            echo gT("Comment");
            echo "</th>
                    ";
        }
        // line 43
        echo "                    <th>";
        echo gT("File name");
        echo "</th>
                    <th class=\"edit\"></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<!-- modal -->
<div id=\"file-upload-modal-";
        // line 54
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 54, $this->source);
        echo "\" class=\"modal fade file-upload-modal\" role=\"dialog\">
    <div class=\"modal-dialog modal-lg\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header file-upload-modal-header\">
                <h5 class=\"modal-title\"> ";
        // line 60
        echo ngT("Upload file|Upload files", $this->sandbox->ensureToStringAllowed(($context["maxFiles"] ?? null), 60, $this->source));
        echo "</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body file-upload-modal-body\">
                <div id=\"uploader";
        // line 64
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 64, $this->source);
        echo "\" name=\"uploader";
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 64, $this->source);
        echo "\" class=\"uploader-frame\" data-src=\"";
        echo $this->sandbox->ensureToStringAllowed(($context["uploadurl"] ?? null), 64, $this->source);
        echo "\" title=\"";
        echo gT("Upload");
        echo "\"></div>
            </div>
            <div class=\"modal-footer file-upload-modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">
                    ";
        // line 68
        echo gT("Save changes");
        echo "
                </button>
            </div>
        </div>

    </div>
</div>
    

<!-- end of answer -->

<script type='text/javascript'>
    var surveyid = '";
        // line 80
        echo $this->sandbox->ensureToStringAllowed(($context["surveyId"] ?? null), 80, $this->source);
        echo "',
        uploadLang = {
             title: '";
        // line 82
        echo gT("Upload your files");
        echo "',
             returnTxt: '";
        // line 83
        echo gT("Return to survey");
        echo "',
             headTitle: '";
        // line 84
        echo gT("Title");
        echo "',
             headComment: '";
        // line 85
        echo gT("Comment");
        echo "',
             headFileName: '";
        // line 86
        echo gT("File name");
        echo "',
             deleteFile : '";
        // line 87
        echo gT("Delete");
        echo "',
             editFile : '";
        // line 88
        echo gT("Edit");
        echo "',
        },
        imageurl =  '";
        // line 90
        echo $this->sandbox->ensureToStringAllowed(($context["imageurl"] ?? null), 90, $this->source);
        echo "',
        uploadurl =  '";
        // line 91
        echo $this->sandbox->ensureToStringAllowed(($context["scriptloc"] ?? null), 91, $this->source);
        echo "';
        
    window.uploadQuestionController_";
        // line 93
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 93, $this->source);
        echo " = new UploadQuestionController('";
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 93, $this->source);
        echo "');
    window.uploadQuestionController_";
        // line 94
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 94, $this->source);
        echo ".prepareOpenUploadModalDialog();
    
    \$(document).on(\"ready pjax:scriptcomplete\", function(){
        var fieldname = \"";
        // line 97
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 97, $this->source);
        echo "\",
            filecount = \$(\"#\"+fieldname+\"_filecount\").val(),
            showTitle = \"";
        // line 99
        echo $this->sandbox->ensureToStringAllowed(($context["showTitle"] ?? null), 99, $this->source);
        echo "\",
            showComment = \"";
        // line 100
        echo $this->sandbox->ensureToStringAllowed(($context["showComment"] ?? null), 100, $this->source);
        echo "\";
        window.uploadQuestionController_";
        // line 101
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 101, $this->source);
        echo ".displayUploadedFiles( filecount, fieldname, showTitle, showComment);
    });

    \$(\".basic_";
        // line 104
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 104, $this->source);
        echo "\").change(function() {
        var i = 1,
            filecount = 0,
            jsonArray = [];

        for (; i <= LEMval(\"";
        // line 109
        echo $this->sandbox->ensureToStringAllowed(($context["maxFiles"] ?? null), 109, $this->source);
        echo "\"); i++) {
            //Break if the file input is empty
            if (\$(\"#";
        // line 111
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 111, $this->source);
        echo "_\"+i).val() == \"\") { continue; }

            filecount++;

            var fileObject = {
                title : ";
        // line 116
        echo ((($context["showTitle"] ?? null)) ? ("\$(\"#{{fileid}}_title_\"+i).val()") : ("\"\""));
        echo ",
                comment: ";
        // line 117
        echo ((($context["showComment"] ?? null)) ? ("\$(\"#{{fileid}}_comment_\"+i).val()") : ("\"\""));
        echo ",
                size: '',
                name: '',
                ext: ''
            };

            jsonArray.push(fileObject);
        }

        \$(\"#";
        // line 126
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 126, $this->source);
        echo "\").val(JSON.stringify(jsonArray));
        \$(\"#";
        // line 127
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 127, $this->source);
        echo "_filecount\").val(filecount);
    });
</script>

<script type=\"text/x-template\" id=\"filerowtemplate_";
        // line 131
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 131, $this->source);
        echo "\">
    <tr>
        <td class=\"upload {imageOrPlaceholder}\">{imageOrPlaceholderHtml}</td>
        ";
        // line 134
        if (($context["showTitle"] ?? null)) {
            // line 135
            echo "            <td class=\"upload title\">{title}</td>
        ";
        }
        // line 137
        echo "        ";
        if (($context["showComment"] ?? null)) {
            // line 138
            echo "            <td class=\"upload comment\">{comment}</td>
        ";
        }
        // line 140
        echo "        <td class=\"upload edit\">{name}</td>
        <td>
            <a role=\"button\" class=\"btn btn-primary trigger_edit_upload_";
        // line 142
        echo $this->sandbox->ensureToStringAllowed(($context["fileid"] ?? null), 142, $this->source);
        echo "\" data-file=\"{filepointer}\">
                <i class=\"fa fa-pencil ri-pencil-fill\"></i>
                &nbsp; 
                ";
        // line 145
        echo gT("Edit");
        echo "
            </a>
        </td>
    </tr>
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "/survey/questions/answer/file_upload/answer.twig";
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
        return array (  337 => 145,  331 => 142,  327 => 140,  323 => 138,  320 => 137,  316 => 135,  314 => 134,  308 => 131,  301 => 127,  297 => 126,  285 => 117,  281 => 116,  273 => 111,  268 => 109,  260 => 104,  254 => 101,  250 => 100,  246 => 99,  241 => 97,  235 => 94,  229 => 93,  224 => 91,  220 => 90,  215 => 88,  211 => 87,  207 => 86,  203 => 85,  199 => 84,  195 => 83,  191 => 82,  186 => 80,  171 => 68,  158 => 64,  151 => 60,  142 => 54,  127 => 43,  121 => 41,  118 => 40,  112 => 38,  110 => 37,  102 => 32,  94 => 31,  86 => 30,  80 => 27,  73 => 23,  69 => 22,  65 => 21,  61 => 20,  56 => 18,  51 => 16,  45 => 13,  39 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "/survey/questions/answer/file_upload/answer.twig", "/var/www/html/application/views/survey/questions/answer/file_upload/answer.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 37);
        static $filters = array("escape" => 30, "gT" => 38);
        static $functions = array("ngT" => 60, "gT" => 64);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'gT'],
                ['ngT', 'gT']
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
