<?php

/* overall_footer.html */
class __TwigTemplate_ca019ebf98eaf168f1c6cb6d12163ba1c9ae2886f77608d0d12098de026457d7 extends Twig_Template
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
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"sidebar col-md-2\">
\t\t\t\t\t<script type=\"text/javascript\" src=\"http://discord.deliriousdrunkards.com/discord.min.js\"></script>
\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tdiscordWidget.init({
\t\t\t\t\t\t  serverId: '229666268238577664',
\t\t\t\t\t\t  title: 'Discord',
\t\t\t\t\t\t  join: true,
\t\t\t\t\t\t  alphabetical: false,
\t\t\t\t\t\t  theme: 'none',
\t\t\t\t\t\t  hideChannels: ['AFK'],
\t\t\t\t\t\t  showAllUsers: false,
\t\t\t\t\t\t  allUsersDefaultState: true,
\t\t\t\t\t\t  showNick: false
\t\t\t\t\t\t});
\t\t\t\t\t\tdiscordWidget.render();
\t\t\t\t\t\t</script>

\t\t\t\t\t<div class=\"discord-widget\"></div>
\t\t\t\t\t<!--  Debut shoutbox - http://www.i-tchat.com  --><iframe frameborder=\"0\" style=\"width: 100%; height: 400px;\" allowtransparency=\"true\" src=\"http://www.i-tchat.com/shoutbox/shoutbox.php?idShoutbox=117362\">Votre navigateur semble incompatible, essayez d'ouvrir le <a href=\"http://www.i-tchat.com\" title=\"tchat\" onClick=\"window.open(this.href+'?117362');\">tchat</a>, ou rencontrez le webmaster pour plus d'informations.</iframe><br />Agrandir le <a onclick=\"window.open(this.href);return false;\" href=\"http://www.i-tchat.com/?117362\">chat</a> .
\t\t\t\t\t<!--  Fin shoutbox  -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 24
        // line 25
        echo "\t\t\t";
        // line 26
        echo "
\t\t\t<div id=\"page-footer\" class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 29
        if (((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null))) {
            // line 30
            echo "\t\t\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t";
            // line 32
            if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
                // line 33
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
                echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MCP");
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            // line 35
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"";
                echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("ACP");
                echo "</a>
\t\t\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 41
        echo "\t\t\t\t\t";
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) || ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
            // line 42
            echo "\t\t\t\t\t\t<div class=\"col-md-2 pull-right\">
\t\t\t\t\t\t\t<div class=\"btn-group dropup pull-right\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" style=\" display: block; \">
\t\t\t\t\t\t\t\t<i class=\"fa fa-wrench fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t";
            // line 49
            if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                // line 50
                echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                // line 51
                if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                    // line 52
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 54
                echo "\t\t\t\t\t\t\t\t\t";
                if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 59
            echo "\t\t\t\t\t\t\t\t\t";
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
                // line 60
                echo "\t\t\t\t\t\t\t\t\t\t<li class=\"rightside\"><a href=\"";
                echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                echo "\" accesskey=\"m\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
            }
            // line 62
            echo "\t\t\t\t\t\t\t\t\t";
            if ((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null)) {
                // line 63
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("MARK_SUBFORUMS_READ");
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"copyright text-center\">
\t\t\t\t\t";
        // line 74
        // line 75
        echo "\t\t\t\t\t";
        echo (isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null);
        echo "
\t\t\t\t\t";
        // line 76
        if ((isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null)) {
            echo "<br />";
            echo (isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null);
        }
        // line 77
        echo "\t\t\t\t\t";
        // line 78
        echo "\t\t\t\t\t";
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo "<br />";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
        }
        // line 79
        echo "\t\t\t\t</div>
\t\t\t\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 80
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
\t\t\t\t\t<div id=\"darken\">&nbsp;</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"phpbb_alert\" class=\"phpbb_alert alert alert-info\" data-l-err=\"";
        // line 84
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t\t\t\t<a href=\"#\" class=\"alert_close\"><i class=\"fa fa-times-circle fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t<strong class=\"alert_title\">&nbsp;</strong><p class=\"alert_text\"></p>
\t\t\t\t</div>
\t\t\t\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t\t\t\t<a href=\"#\" class=\"alert_close\"><i class=\"fa fa-times-circle fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t<div class=\"alert_text\"></div>
\t\t\t\t</div>
\t\t\t\t";
        // line 92
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 92)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 93
        echo "\t\t\t\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t\t\t\t";
        // line 94
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        // line 95
        echo "\t\t\t</div>
\t\t</div>
\t\t<script type=\"text/javascript\" src=\"";
        // line 97
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
\t\t";
        // line 98
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write('\\x3Cscript src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 99
        echo "\t\t<script type=\"text/javascript\" src=\"";
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>
\t\t";
        // line 100
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
        // line 101
        echo "\t\t";
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
        // line 102
        echo "
\t\t";
        // line 103
        if ((((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)) && ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "NOTIFICATION", array()) == 1))) {
            // line 104
            echo "\t\t\t";
            $asset_file = (("" . (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null)) . "/comboot/notification.js");
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('23');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
            // line 105
            echo "\t\t";
        }
        // line 106
        echo "
\t\t";
        // line 107
        // line 108
        echo "
\t\t";
        // line 109
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 109)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 110
        echo "\t\t";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo "

\t\t<script type=\"text/javascript\">
\t\t\t\$( document ).ready(function(\$){
\t\t\t\t";
        // line 114
        if ((isset($context["S_MERGE_VIEW"]) ? $context["S_MERGE_VIEW"] : null)) {
            // line 115
            echo "\t\t\t\t\t\$('#merge-panel-tab').tab('show');
\t\t\t\t";
        } elseif (        // line 116
(isset($context["S_SPLIT_VIEW"]) ? $context["S_SPLIT_VIEW"] : null)) {
            // line 117
            echo "\t\t\t\t\t\$('#split-panel-tab').tab('show');
\t\t\t\t";
        } else {
            // line 119
            echo "\t\t\t\t\t\$('#display-panel-tab').tab('show');
\t\t\t\t";
        }
        // line 121
        echo "\t\t\t});

\t\t\t";
        // line 123
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "AJAX_PAGELOAD", array()) == 1)) {
            // line 124
            echo "\t\t\t\t\t\$(document).pjax('a', '#wrap', {fragment: '#wrap'});
\t\t\t";
        }
        // line 126
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "PAGELOAD_INDICATOR", array()) == 1)) {
            // line 127
            echo "\t\t\t\t\$primaryColor = \$('.btn-primary').css('background-color');
\t\t\t\t\$('.pace .pace-progress').css('background-color', \$primaryColor);
\t\t\t";
        }
        // line 130
        echo "\t\t\t";
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "AUTOSAVE", array()) == 1)) {
            // line 131
            echo "\t\t\t\tif( \$('#message, #subject').val() ) {
\t\t\t\t\t\$('#message, #subject').phoenix('remove');
\t\t\t\t}
\t\t\t\t\$('#message, #subject').phoenix();
\t\t\t\t\$('#postform, #qr_postform').submit(function(e){
\t\t\t\t\t\$('#message, #subject').phoenix('remove');
\t\t\t\t});
\t\t\t";
        }
        // line 139
        echo "\t\t</script>

\t\t";
        // line 141
        // line 142
        echo "\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 142,  399 => 141,  395 => 139,  385 => 131,  382 => 130,  377 => 127,  374 => 126,  370 => 124,  368 => 123,  364 => 121,  360 => 119,  356 => 117,  354 => 116,  351 => 115,  349 => 114,  341 => 110,  327 => 109,  324 => 108,  323 => 107,  320 => 106,  317 => 105,  301 => 104,  299 => 103,  296 => 102,  280 => 101,  265 => 100,  258 => 99,  250 => 98,  246 => 97,  242 => 95,  238 => 94,  235 => 93,  223 => 92,  210 => 84,  195 => 80,  192 => 79,  186 => 78,  184 => 77,  179 => 76,  174 => 75,  173 => 74,  169 => 72,  162 => 67,  159 => 66,  151 => 64,  148 => 63,  145 => 62,  137 => 60,  134 => 59,  126 => 57,  118 => 55,  115 => 54,  107 => 52,  105 => 51,  98 => 50,  96 => 49,  87 => 42,  84 => 41,  79 => 38,  71 => 36,  68 => 35,  60 => 33,  58 => 32,  54 => 30,  52 => 29,  47 => 26,  45 => 25,  44 => 24,  19 => 1,);
    }
}
/* 				</div>*/
/* 				<div class="sidebar col-md-2">*/
/* 					<script type="text/javascript" src="http://discord.deliriousdrunkards.com/discord.min.js"></script>*/
/* 						<script type="text/javascript">*/
/* 						discordWidget.init({*/
/* 						  serverId: '229666268238577664',*/
/* 						  title: 'Discord',*/
/* 						  join: true,*/
/* 						  alphabetical: false,*/
/* 						  theme: 'none',*/
/* 						  hideChannels: ['AFK'],*/
/* 						  showAllUsers: false,*/
/* 						  allUsersDefaultState: true,*/
/* 						  showNick: false*/
/* 						});*/
/* 						discordWidget.render();*/
/* 						</script>*/
/* */
/* 					<div class="discord-widget"></div>*/
/* 					<!--  Debut shoutbox - http://www.i-tchat.com  --><iframe frameborder="0" style="width: 100%; height: 400px;" allowtransparency="true" src="http://www.i-tchat.com/shoutbox/shoutbox.php?idShoutbox=117362">Votre navigateur semble incompatible, essayez d'ouvrir le <a href="http://www.i-tchat.com" title="tchat" onClick="window.open(this.href+'?117362');">tchat</a>, ou rencontrez le webmaster pour plus d'informations.</iframe><br />Agrandir le <a onclick="window.open(this.href);return false;" href="http://www.i-tchat.com/?117362">chat</a> .*/
/* 					<!--  Fin shoutbox  -->*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- EVENT overall_footer_content_after -->*/
/* 			<!-- EVENT overall_footer_page_body_after -->*/
/* */
/* 			<div id="page-footer" class="container">*/
/* 				<div class="row">*/
/* 					<!-- IF U_MCP or U_ACP -->*/
/* 						<div class="col-md-8 col-md-offset-2 text-center">*/
/* 							<div class="btn-group">*/
/* 								<!-- IF U_MCP -->*/
/* 									<a class="btn btn-primary" href="{U_MCP}">{L_MCP}</a>*/
/* 								<!-- ENDIF -->*/
/* 								<!-- IF U_ACP -->*/
/* 									<a class="btn btn-primary" href="{U_ACP}">{L_ACP}</a>*/
/* 								<!-- ENDIF -->*/
/* 							</div>*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF S_DISPLAY_SEARCH or (S_USER_LOGGED_IN and not S_IS_BOT) -->*/
/* 						<div class="col-md-2 pull-right">*/
/* 							<div class="btn-group dropup pull-right">*/
/* 								<a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#" style=" display: block; ">*/
/* 								<i class="fa fa-wrench fa-fw" aria-hidden="true"></i>*/
/* 								<span class="caret"></span>*/
/* 								</a>*/
/* 								<ul class="dropdown-menu">*/
/* 									<!-- IF S_DISPLAY_SEARCH -->*/
/* 										<li><a href="{U_SEARCH_UNANSWERED}">{L_SEARCH_UNANSWERED}</a></li>*/
/* 									<!-- IF S_LOAD_UNREADS -->*/
/* 										<li><a href="{U_SEARCH_UNREAD}">{L_SEARCH_UNREAD}</a></li>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF S_USER_LOGGED_IN -->*/
/* 										<li><a href="{U_SEARCH_NEW}">{L_SEARCH_NEW}</a></li>*/
/* 									<!-- ENDIF -->*/
/* 										<li><a href="{U_SEARCH_ACTIVE_TOPICS}">{L_SEARCH_ACTIVE_TOPICS}</a></li>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF not S_IS_BOT and U_MARK_FORUMS -->*/
/* 										<li class="rightside"><a href="{U_MARK_FORUMS}" accesskey="m">{L_MARK_FORUMS_READ}</a></li>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF S_HAS_SUBFORUM -->*/
/* 										<!-- IF not S_IS_BOT and U_MARK_FORUMS -->*/
/* 											<li><a href="{U_MARK_FORUMS}">{L_MARK_SUBFORUMS_READ}</a></li>*/
/* 										<!-- ENDIF -->*/
/* 									<!-- ENDIF -->*/
/* 								</ul>*/
/* 							</div>*/
/* 							<br />*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 				<div class="copyright text-center">*/
/* 					<!-- EVENT overall_footer_copyright_prepend -->*/
/* 					{CREDIT_LINE}*/
/* 					<!-- IF TRANSLATION_INFO --><br />{TRANSLATION_INFO}<!-- ENDIF -->*/
/* 					<!-- EVENT overall_footer_copyright_append -->*/
/* 					<!-- IF DEBUG_OUTPUT --><br />{DEBUG_OUTPUT}<!-- ENDIF -->*/
/* 				</div>*/
/* 				<div id="darkenwrapper" data-ajax-error-title="{L_AJAX_ERROR_TITLE}" data-ajax-error-text="{L_AJAX_ERROR_TEXT}" data-ajax-error-text-abort="{L_AJAX_ERROR_TEXT_ABORT}" data-ajax-error-text-timeout="{L_AJAX_ERROR_TEXT_TIMEOUT}" data-ajax-error-text-parsererror="{L_AJAX_ERROR_TEXT_PARSERERROR}">*/
/* 					<div id="darken">&nbsp;</div>*/
/* 				</div>*/
/* */
/* 				<div id="phpbb_alert" class="phpbb_alert alert alert-info" data-l-err="{L_ERROR}" data-l-timeout-processing-req="{L_TIMEOUT_PROCESSING_REQ}">*/
/* 					<a href="#" class="alert_close"><i class="fa fa-times-circle fa-fw" aria-hidden="true"></i></a>*/
/* 					<strong class="alert_title">&nbsp;</strong><p class="alert_text"></p>*/
/* 				</div>*/
/* 				<div id="phpbb_confirm" class="phpbb_alert">*/
/* 					<a href="#" class="alert_close"><i class="fa fa-times-circle fa-fw" aria-hidden="true"></i></a>*/
/* 					<div class="alert_text"></div>*/
/* 				</div>*/
/* 				<!-- INCLUDE navbar_footer.html -->*/
/* 				<a id="bottom" class="anchor" accesskey="z"></a>*/
/* 				<!-- IF not S_IS_BOT -->{RUN_CRON_TASK}<!-- ENDIF -->*/
/* 			</div>*/
/* 		</div>*/
/* 		<script type="text/javascript" src="{T_JQUERY_LINK}"></script>*/
/* 		<!-- IF S_ALLOW_CDN --><script type="text/javascript">window.jQuery || document.write('\x3Cscript src="{T_ASSETS_PATH}/javascript/jquery.min.js?assets_version={T_ASSETS_VERSION}">\x3C/script>');</script><!-- ENDIF -->*/
/* 		<script type="text/javascript" src="{T_ASSETS_PATH}/javascript/core.js?assets_version={T_ASSETS_VERSION}"></script>*/
/* 		<!-- INCLUDEJS forum_fn.js -->*/
/* 		<!-- INCLUDEJS ajax.js -->*/
/* */
/* 		<!-- IF (U_MCP or U_ACP) and $NOTIFICATION == 1 -->*/
/* 			<!-- INCLUDEJS {T_THEME_PATH}/comboot/notification.js -->*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- EVENT overall_footer_after -->*/
/* */
/* 		<!-- IF S_PLUPLOAD --><!-- INCLUDE plupload.html --><!-- ENDIF -->*/
/* 		{$SCRIPTS}*/
/* */
/* 		<script type="text/javascript">*/
/* 			$( document ).ready(function($){*/
/* 				<!-- IF S_MERGE_VIEW -->*/
/* 					$('#merge-panel-tab').tab('show');*/
/* 				<!-- ELSEIF S_SPLIT_VIEW -->*/
/* 					$('#split-panel-tab').tab('show');*/
/* 				<!-- ELSE -->*/
/* 					$('#display-panel-tab').tab('show');*/
/* 				<!-- ENDIF -->*/
/* 			});*/
/* */
/* 			<!-- IF $AJAX_PAGELOAD == 1 -->*/
/* 					$(document).pjax('a', '#wrap', {fragment: '#wrap'});*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF $PAGELOAD_INDICATOR == 1 -->*/
/* 				$primaryColor = $('.btn-primary').css('background-color');*/
/* 				$('.pace .pace-progress').css('background-color', $primaryColor);*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF $AUTOSAVE == 1 -->*/
/* 				if( $('#message, #subject').val() ) {*/
/* 					$('#message, #subject').phoenix('remove');*/
/* 				}*/
/* 				$('#message, #subject').phoenix();*/
/* 				$('#postform, #qr_postform').submit(function(e){*/
/* 					$('#message, #subject').phoenix('remove');*/
/* 				});*/
/* 			<!-- ENDIF -->*/
/* 		</script>*/
/* */
/* 		<!-- EVENT overall_footer_body_after -->*/
/* 	</body>*/
/* </html>*/
/* */
