<?php

/* simple_footer.html */
class __TwigTemplate_32eff31625056e4c460902ea3688b8dd8e2f02e46e8b7ab34c3fd8a68c58a15c extends Twig_Template
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
        echo "\t\t</div>
\t\t<hr/>
\t\t<div class=\"text-center\">
\t\t\t<div class=\"copyright\">Powered by <a href=\"http://www.phpbb.com/\">phpBB</a>&reg; Forum Software &copy; phpBB Group
\t\t\t\t";
        // line 5
        if ((isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null)) {
            echo "<br />";
            echo (isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null);
        }
        // line 6
        echo "\t\t\t\t";
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo "<br />";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
        }
        // line 7
        echo "\t\t\t</div>
\t\t</div>

\t\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t\t<div id=\"darken\">&nbsp;</div>
\t\t</div>
\t\t<div id=\"loading_indicator\"></div>

\t\t<div id=\"phpbb_alert\" class=\"phpbb_alert alert alert-info\" data-l-err=\"";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t\t<a href=\"#\" class=\"alert_close\"><i class=\"fa fa-times-circle fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t<strong class=\"alert_title\">&nbsp;</strong><p class=\"alert_text\"></p>
\t\t</div>
\t\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t\t<a href=\"#\" class=\"alert_close\"><i class=\"fa fa-times-circle fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t<div class=\"alert_text\"></div>
\t\t</div>
\t</div>

\t<script type=\"text/javascript\" src=\"";
        // line 25
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
\t";
        // line 26
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write('\\x3Cscript src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 27
        echo "\t<script type=\"text/javascript\" src=\"";
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>
\t";
        // line 28
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 29
        echo "\t";
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 30
        echo "
\t";
        // line 31
        // line 32
        echo "
\t";
        // line 33
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo "

\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "simple_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  126 => 32,  125 => 31,  122 => 30,  106 => 29,  91 => 28,  84 => 27,  76 => 26,  72 => 25,  57 => 15,  41 => 10,  36 => 7,  30 => 6,  25 => 5,  19 => 1,);
    }
}
/* 		</div>*/
/* 		<hr/>*/
/* 		<div class="text-center">*/
/* 			<div class="copyright">Powered by <a href="http://www.phpbb.com/">phpBB</a>&reg; Forum Software &copy; phpBB Group*/
/* 				<!-- IF TRANSLATION_INFO --><br />{TRANSLATION_INFO}<!-- ENDIF -->*/
/* 				<!-- IF DEBUG_OUTPUT --><br />{DEBUG_OUTPUT}<!-- ENDIF -->*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div id="darkenwrapper" data-ajax-error-title="{L_AJAX_ERROR_TITLE}" data-ajax-error-text="{L_AJAX_ERROR_TEXT}" data-ajax-error-text-abort="{L_AJAX_ERROR_TEXT_ABORT}" data-ajax-error-text-timeout="{L_AJAX_ERROR_TEXT_TIMEOUT}" data-ajax-error-text-parsererror="{L_AJAX_ERROR_TEXT_PARSERERROR}">*/
/* 			<div id="darken">&nbsp;</div>*/
/* 		</div>*/
/* 		<div id="loading_indicator"></div>*/
/* */
/* 		<div id="phpbb_alert" class="phpbb_alert alert alert-info" data-l-err="{L_ERROR}" data-l-timeout-processing-req="{L_TIMEOUT_PROCESSING_REQ}">*/
/* 			<a href="#" class="alert_close"><i class="fa fa-times-circle fa-fw" aria-hidden="true"></i></a>*/
/* 			<strong class="alert_title">&nbsp;</strong><p class="alert_text"></p>*/
/* 		</div>*/
/* 		<div id="phpbb_confirm" class="phpbb_alert">*/
/* 			<a href="#" class="alert_close"><i class="fa fa-times-circle fa-fw" aria-hidden="true"></i></a>*/
/* 			<div class="alert_text"></div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<script type="text/javascript" src="{T_JQUERY_LINK}"></script>*/
/* 	<!-- IF S_ALLOW_CDN --><script type="text/javascript">window.jQuery || document.write('\x3Cscript src="{T_ASSETS_PATH}/javascript/jquery.min.js?assets_version={T_ASSETS_VERSION}">\x3C/script>');</script><!-- ENDIF -->*/
/* 	<script type="text/javascript" src="{T_ASSETS_PATH}/javascript/core.js?assets_version={T_ASSETS_VERSION}"></script>*/
/* 	<!-- INCLUDEJS forum_fn.js -->*/
/* 	<!-- INCLUDEJS ajax.js -->*/
/* */
/* 	<!-- EVENT simple_footer_after -->*/
/* */
/* 	{$SCRIPTS}*/
/* */
/* 	</body>*/
/* </html>*/
/* */
