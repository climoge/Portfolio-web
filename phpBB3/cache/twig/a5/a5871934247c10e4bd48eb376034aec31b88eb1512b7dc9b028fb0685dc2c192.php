<?php

/* ucp_avatar_options_upload.html */
class __TwigTemplate_3ab93c325b76a188be049a4ed5c8ecb26efeba25ff0075ba7637a8f071754392 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"form-group\">
\t<label class=\"control-label col-md-4\" for=\"avatar_upload_file\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("UPLOAD_AVATAR_FILE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t<div class=\"col-md-6\">
\t\t<input type=\"file\" name=\"avatar_upload_file\" id=\"avatar_upload_file\" class=\"form-control-static\" />
\t\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"";
        // line 5
        echo (isset($context["AVATAR_UPLOAD_SIZE"]) ? $context["AVATAR_UPLOAD_SIZE"] : null);
        echo "\" />
\t</div>
</div>

";
        // line 9
        if ((isset($context["S_UPLOAD_AVATAR_URL"]) ? $context["S_UPLOAD_AVATAR_URL"] : null)) {
            // line 10
            echo "\t<div class=\"form-group\">
\t\t<label class=\"control-label col-md-4\" for=\"avatar_upload_url\">";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("UPLOAD_AVATAR_URL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t<div class=\"col-md-6\">
\t\t\t<input type=\"url\" name=\"avatar_upload_url\" id=\"avatar_upload_url\" value=\"\" class=\"form-control\" />
\t\t\t<span class=\"help-block\">";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("UPLOAD_AVATAR_URL_EXPLAIN");
            echo "</span>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options_upload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  41 => 11,  38 => 10,  36 => 9,  29 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div class="form-group">*/
/* 	<label class="control-label col-md-4" for="avatar_upload_file">{L_UPLOAD_AVATAR_FILE}{L_COLON}</label>*/
/* 	<div class="col-md-6">*/
/* 		<input type="file" name="avatar_upload_file" id="avatar_upload_file" class="form-control-static" />*/
/* 		<input type="hidden" name="MAX_FILE_SIZE" value="{AVATAR_UPLOAD_SIZE}" />*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF S_UPLOAD_AVATAR_URL -->*/
/* 	<div class="form-group">*/
/* 		<label class="control-label col-md-4" for="avatar_upload_url">{L_UPLOAD_AVATAR_URL}{L_COLON}</label>*/
/* 		<div class="col-md-6">*/
/* 			<input type="url" name="avatar_upload_url" id="avatar_upload_url" value="" class="form-control" />*/
/* 			<span class="help-block">{L_UPLOAD_AVATAR_URL_EXPLAIN}</span>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
