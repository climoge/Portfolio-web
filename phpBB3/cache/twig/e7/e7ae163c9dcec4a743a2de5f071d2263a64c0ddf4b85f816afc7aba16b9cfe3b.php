<?php

/* ucp_pm_viewfolder.html */
class __TwigTemplate_4366f0c9d8aef6ffeb444129643f78d75a4324a5f195967ef34db9caa9599050 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_pm_viewfolder.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ( !(isset($context["PROMPT"]) ? $context["PROMPT"] : null)) {
            // line 4
            echo "\t";
            $location = "ucp_pm_message_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_message_header.html", "ucp_pm_viewfolder.html", 4)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 6
        echo "
";
        // line 7
        if ((isset($context["PROMPT"]) ? $context["PROMPT"] : null)) {
            // line 8
            echo "\t<form id=\"viewfolder\" method=\"post\" action=\"";
            echo (isset($context["S_PM_ACTION"]) ? $context["S_PM_ACTION"] : null);
            echo "\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_CSV");
            echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<h3>";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</h3>
\t\t\t\t<fieldset>
\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-4\" for=\"delimiter\">";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("DELIMITER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"delimiter\" name=\"delimiter\" value=\",\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-4\" for=\"enclosure\">";
            // line 24
            echo $this->env->getExtension('phpbb')->lang("ENCLOSURE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" id=\"enclosure\" name=\"enclosure\" value=\"&#034;\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t<input type=\"hidden\" name=\"export_option\" value=\"CSV\" />
\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"submit_export\" value=\"";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("EXPORT_FOLDER");
            echo "\" />&nbsp;
\t\t\t\t\t<input class=\"btn btn-default\" type=\"reset\" value=\"";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" name=\"reset\" />&nbsp;
\t\t\t\t\t";
            // line 35
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t</div>
\t</form>
";
        } else {
            // line 41
            echo "
\t";
            // line 42
            if ((isset($context["NUM_REMOVED"]) ? $context["NUM_REMOVED"] : null)) {
                // line 43
                echo "\t\t<div class=\"notice\">
\t\t\t<p>";
                // line 44
                echo (isset($context["RULE_REMOVED_MESSAGES"]) ? $context["RULE_REMOVED_MESSAGES"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 47
            echo "
\t";
            // line 48
            if ((isset($context["NUM_NOT_MOVED"]) ? $context["NUM_NOT_MOVED"] : null)) {
                // line 49
                echo "\t\t<div class=\"notice\">
\t\t\t<p>";
                // line 50
                echo (isset($context["NOT_MOVED_MESSAGES"]) ? $context["NOT_MOVED_MESSAGES"] : null);
                echo "<br />";
                echo (isset($context["RELEASE_MESSAGE_INFO"]) ? $context["RELEASE_MESSAGE_INFO"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 53
            echo "
\t";
            // line 54
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "messagerow", array()))) {
                // line 55
                echo "\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
                // line 59
                echo $this->env->getExtension('phpbb')->lang("MESSAGE");
                echo "</th>
\t\t\t\t\t\t<th><span>";
                // line 60
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</span></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody class=\"topiclist cplist pmlist\">
\t\t\t\t\t";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "messagerow", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["messagerow"]) {
                    // line 65
                    echo "\t\t\t\t\t\t<tr ";
                    if ($this->getAttribute($context["messagerow"], "PM_CLASS", array())) {
                        echo "class=\"";
                        echo $this->getAttribute($context["messagerow"], "PM_CLASS", array());
                        echo "\"";
                    }
                    echo ">
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"pull-left pm-topic-icon\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 68
                    if ($this->getAttribute($context["messagerow"], "S_PM_DELETED", array())) {
                        echo $this->getAttribute($context["messagerow"], "U_REMOVE_PM", array());
                    } else {
                        echo $this->getAttribute($context["messagerow"], "U_VIEW_PM", array());
                    }
                    echo "\" class=\"btn ";
                    if ($this->getAttribute($context["messagerow"], "S_PM_UNREAD", array())) {
                        echo "btn-info";
                    } else {
                        echo "btn-default";
                    }
                    echo " btn-lg tooltip-link\" title=\"";
                    echo $this->getAttribute($context["messagerow"], "PM_FOLDER_IMG_ALT", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file-text-o fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
                    // line 71
                    if (($this->getAttribute($context["messagerow"], "PM_ICON_URL", array()) && (isset($context["S_PM_ICONS"]) ? $context["S_PM_ICONS"] : null))) {
                        // line 72
                        echo "\t\t\t\t\t\t\t\t\t\t<img scr=\"";
                        echo $this->getAttribute($context["messagerow"], "PM_ICON_URL", array());
                        echo "\" style=\"background-repeat: no-repeat;\">
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 74
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    // line 75
                    if (($this->getAttribute($context["messagerow"], "S_PM_UNREAD", array()) &&  !$this->getAttribute($context["messagerow"], "S_PM_DELETED", array()))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_VIEW_PM", array());
                        echo "\" class=\"icon-link\"></a>";
                    }
                    // line 76
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["messagerow"], "S_PM_DELETED", array())) {
                        // line 77
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_REMOVE_PM", array());
                        echo "\" class=\"topictitle\">";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_MESSAGE");
                        echo "</a><br />
\t\t\t\t\t\t\t\t\t<span class=\"alert alert-danger\">";
                        // line 78
                        echo $this->env->getExtension('phpbb')->lang("MESSAGE_REMOVED_FROM_OUTBOX");
                        echo "</span>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 80
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_VIEW_PM", array());
                        echo "\" class=\"topictitle\">";
                        echo $this->getAttribute($context["messagerow"], "SUBJECT", array());
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 82
                    echo "\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["messagerow"], "S_AUTHOR_DELETED", array())) {
                        // line 83
                        echo "\t\t\t\t\t\t\t\t\t<br /><em class=\"small\">";
                        echo $this->env->getExtension('phpbb')->lang("PM_FROM_REMOVED_AUTHOR");
                        echo "</em>
\t\t\t\t\t\t\t\t";
                    }
                    // line 85
                    echo "
\t\t\t\t\t\t\t\t";
                    // line 86
                    if ($this->getAttribute($context["messagerow"], "S_PM_REPORTED", array())) {
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_MCP_REPORT", array());
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 88
                        echo (isset($context["PM_REPORTED"]) ? $context["PM_REPORTED"] : null);
                        echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 91
                    echo "\t\t\t\t\t\t\t\t<i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i><br />
\t\t\t\t\t\t\t\t<small>";
                    // line 92
                    if ((isset($context["S_SHOW_RECIPIENTS"]) ? $context["S_SHOW_RECIPIENTS"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("MESSAGE_TO");
                        echo " ";
                        echo $this->getAttribute($context["messagerow"], "RECIPIENTS", array());
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("MESSAGE_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["messagerow"], "MESSAGE_AUTHOR_FULL", array());
                        echo " &raquo; ";
                        echo $this->getAttribute($context["messagerow"], "SENT_TIME", array());
                    }
                    echo "</small>
\t\t\t\t\t\t\t\t";
                    // line 93
                    if ((isset($context["S_SHOW_RECIPIENTS"]) ? $context["S_SHOW_RECIPIENTS"] : null)) {
                        echo "&raquo; <small><span>";
                        echo $this->env->getExtension('phpbb')->lang("SENT_AT");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["messagerow"], "SENT_TIME", array());
                        echo "</span></small>";
                    }
                    // line 94
                    echo "\t\t\t\t\t\t\t\t";
                    if ((isset($context["S_UNREAD"]) ? $context["S_UNREAD"] : null)) {
                        echo "&raquo; <small>";
                        if ($this->getAttribute($context["messagerow"], "FOLDER", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["messagerow"], "U_FOLDER", array());
                            echo "\">";
                            echo $this->getAttribute($context["messagerow"], "FOLDER", array());
                            echo "</a>";
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("UNKNOWN_FOLDER");
                        }
                        echo "</small>";
                    }
                    // line 95
                    echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"marking\"><input type=\"checkbox\" name=\"marked_msg_id[]\" value=\"";
                    // line 96
                    echo $this->getAttribute($context["messagerow"], "MESSAGE_ID", array());
                    echo "\" /></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messagerow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t";
            } else {
                // line 103
                echo "\t\t<div class=\"alert alert-danger\">
\t\t\t";
                // line 104
                if (((isset($context["S_COMPOSE_PM_VIEW"]) ? $context["S_COMPOSE_PM_VIEW"] : null) && (isset($context["S_NO_AUTH_SEND_MESSAGE"]) ? $context["S_NO_AUTH_SEND_MESSAGE"] : null))) {
                    // line 105
                    echo "\t\t\t\t";
                    if ((isset($context["S_USER_NEW"]) ? $context["S_USER_NEW"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("USER_NEW_PERMISSION_DISALLOWED");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_AUTH_SEND_MESSAGE");
                    }
                    // line 106
                    echo "\t\t\t";
                } else {
                    // line 107
                    echo "\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("NO_MESSAGES");
                    echo "
\t\t\t";
                }
                // line 109
                echo "\t\t</div>
\t";
            }
            // line 111
            echo "
\t";
            // line 112
            if (((isset($context["FOLDER_CUR_MESSAGES"]) ? $context["FOLDER_CUR_MESSAGES"] : null) != 0)) {
                // line 113
                echo "\t\t<fieldset class=\"display-actions\">
\t\t\t<div class=\"pull-left\">
\t\t\t\t<label for=\"export_option\">
\t\t\t\t\t";
                // line 116
                echo $this->env->getExtension('phpbb')->lang("EXPORT_FOLDER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <select name=\"export_option\" id=\"export_option\">
\t\t\t\t\t\t<option value=\"CSV\">";
                // line 117
                echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_CSV");
                echo "</option><option value=\"CSV_EXCEL\">";
                echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_CSV_EXCEL");
                echo "</option>
\t\t\t\t\t\t<option value=\"XML\">";
                // line 118
                echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_XML");
                echo "</option>
\t\t\t\t\t</select>
\t\t\t\t</label>
\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"submit_export\" value=\"";
                // line 121
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" /><br />
\t\t\t</div>
\t\t\t<div class=\"pull-right btn-group\">
\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-success\" onclick=\"marklist('viewfolder', 'marked_msg', true); return false;\">";
                // line 124
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a>
\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-warning\" onclick=\"marklist('viewfolder', 'marked_msg', false); return false;\">";
                // line 125
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<select name=\"mark_option\">";
                // line 128
                echo (isset($context["S_MARK_OPTIONS"]) ? $context["S_MARK_OPTIONS"] : null);
                echo (isset($context["S_MOVE_MARKED_OPTIONS"]) ? $context["S_MOVE_MARKED_OPTIONS"] : null);
                echo "</select>
\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"submit_mark\" value=\"";
                // line 129
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" />
\t\t</fieldset>
\t\t<hr />
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                // line 135
                echo (isset($context["TOTAL_MESSAGES"]) ? $context["TOTAL_MESSAGES"] : null);
                echo "</a>
\t\t\t\t\t";
                // line 136
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    // line 137
                    echo "\t\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_pm_viewfolder.html", 137)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 138
                    echo "\t\t\t\t\t";
                } else {
                    // line 139
                    echo "\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</a>
\t\t\t\t\t";
                }
                // line 141
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 145
            echo "\t";
            if (((isset($context["FOLDER_CUR_MESSAGES"]) ? $context["FOLDER_CUR_MESSAGES"] : null) != 0)) {
                // line 146
                echo "\t\t<!-- DEFINE DISPLAY_OPTIONS_PREV_NEXT = 1 -->
\t\t";
                // line 147
                $location = "display_options.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("display_options.html", "ucp_pm_viewfolder.html", 147)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 148
                echo "\t\t<input type=\"hidden\" name=\"cur_folder_id\" value=\"";
                echo (isset($context["CUR_FOLDER_ID"]) ? $context["CUR_FOLDER_ID"] : null);
                echo "\" />
\t";
            }
        }
        // line 151
        echo "
";
        // line 152
        if ( !(isset($context["PROMPT"]) ? $context["PROMPT"] : null)) {
            // line 153
            echo "\t";
            $location = "ucp_pm_message_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_message_footer.html", "ucp_pm_viewfolder.html", 153)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 155
        echo "
";
        // line 156
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_viewfolder.html", 156)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewfolder.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 156,  484 => 155,  470 => 153,  468 => 152,  465 => 151,  458 => 148,  446 => 147,  443 => 146,  440 => 145,  434 => 141,  428 => 139,  425 => 138,  412 => 137,  410 => 136,  406 => 135,  397 => 129,  392 => 128,  386 => 125,  382 => 124,  376 => 121,  370 => 118,  364 => 117,  359 => 116,  354 => 113,  352 => 112,  349 => 111,  345 => 109,  339 => 107,  336 => 106,  329 => 105,  327 => 104,  324 => 103,  318 => 99,  309 => 96,  306 => 95,  291 => 94,  282 => 93,  268 => 92,  265 => 91,  259 => 88,  254 => 87,  252 => 86,  249 => 85,  243 => 83,  240 => 82,  232 => 80,  227 => 78,  220 => 77,  217 => 76,  211 => 75,  208 => 74,  202 => 72,  200 => 71,  182 => 68,  171 => 65,  167 => 64,  160 => 60,  156 => 59,  150 => 55,  148 => 54,  145 => 53,  137 => 50,  134 => 49,  132 => 48,  129 => 47,  123 => 44,  120 => 43,  118 => 42,  115 => 41,  106 => 35,  102 => 34,  98 => 33,  85 => 24,  75 => 18,  68 => 14,  62 => 11,  55 => 8,  53 => 7,  50 => 6,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <!-- IF not PROMPT -->*/
/* 	<!-- INCLUDE ucp_pm_message_header.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF PROMPT -->*/
/* 	<form id="viewfolder" method="post" action="{S_PM_ACTION}">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title">{L_EXPORT_AS_CSV}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<h3>{L_OPTIONS}</h3>*/
/* 				<fieldset>*/
/* 					<div class="form-horizontal">*/
/* 						<div class="form-group">*/
/* 							<label class="control-label col-md-4" for="delimiter">{L_DELIMITER}{L_COLON}</label>*/
/* 							<div class="col-md-8">*/
/* 								<input class="form-control" type="text" id="delimiter" name="delimiter" value="," />*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="control-label col-md-4" for="enclosure">{L_ENCLOSURE}{L_COLON}</label></dt>*/
/* 							<div class="col-md-8">*/
/* 								<input class="form-control" type="text" id="enclosure" name="enclosure" value="&#034;" />*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</fieldset>*/
/* 				<fieldset class="submit-buttons">*/
/* 					<input type="hidden" name="export_option" value="CSV" />*/
/* 					<input class="btn btn-default" type="submit" name="submit_export" value="{L_EXPORT_FOLDER}" />&nbsp;*/
/* 					<input class="btn btn-default" type="reset" value="{L_RESET}" name="reset" />&nbsp;*/
/* 					{S_FORM_TOKEN}*/
/* 				</fieldset>*/
/* 			</div>*/
/* 		</div>*/
/* 	</form>*/
/* <!-- ELSE -->*/
/* */
/* 	<!-- IF NUM_REMOVED -->*/
/* 		<div class="notice">*/
/* 			<p>{RULE_REMOVED_MESSAGES}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF NUM_NOT_MOVED -->*/
/* 		<div class="notice">*/
/* 			<p>{NOT_MOVED_MESSAGES}<br />{RELEASE_MESSAGE_INFO}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF .messagerow -->*/
/* 		<div class="table-responsive">*/
/* 			<table class="table table-striped table-bordered">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th>{L_MESSAGE}</th>*/
/* 						<th><span>{L_MARK}</span></th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody class="topiclist cplist pmlist">*/
/* 					<!-- BEGIN messagerow -->*/
/* 						<tr <!-- IF messagerow.PM_CLASS -->class="{messagerow.PM_CLASS}"<!-- ENDIF -->>*/
/* 							<td>*/
/* 								<div class="pull-left pm-topic-icon">*/
/* 									<a href="<!-- IF messagerow.S_PM_DELETED -->{messagerow.U_REMOVE_PM}<!-- ELSE -->{messagerow.U_VIEW_PM}<!-- ENDIF -->" class="btn <!-- IF messagerow.S_PM_UNREAD -->btn-info<!-- ELSE -->btn-default<!-- ENDIF --> btn-lg tooltip-link" title="{messagerow.PM_FOLDER_IMG_ALT}">*/
/* 										<i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i>*/
/* 									</a>*/
/* 									<!-- IF messagerow.PM_ICON_URL and S_PM_ICONS -->*/
/* 										<img scr="{messagerow.PM_ICON_URL}" style="background-repeat: no-repeat;">*/
/* 									<!-- ENDIF -->*/
/* 								</div>*/
/* 								<!-- IF messagerow.S_PM_UNREAD and not messagerow.S_PM_DELETED --><a href="{messagerow.U_VIEW_PM}" class="icon-link"></a><!-- ENDIF -->*/
/* 								<!-- IF messagerow.S_PM_DELETED -->*/
/* 									<a href="{messagerow.U_REMOVE_PM}" class="topictitle">{L_DELETE_MESSAGE}</a><br />*/
/* 									<span class="alert alert-danger">{L_MESSAGE_REMOVED_FROM_OUTBOX}</span>*/
/* 								<!-- ELSE -->*/
/* 									<a href="{messagerow.U_VIEW_PM}" class="topictitle">{messagerow.SUBJECT}</a>*/
/* 								<!-- ENDIF -->*/
/* 								<!-- IF messagerow.S_AUTHOR_DELETED -->*/
/* 									<br /><em class="small">{L_PM_FROM_REMOVED_AUTHOR}</em>*/
/* 								<!-- ENDIF -->*/
/* */
/* 								<!-- IF messagerow.S_PM_REPORTED -->*/
/* 									<a href="{messagerow.U_MCP_REPORT}">*/
/* 										<i class="fa fa-exclamation fa-fw" aria-hidden="true"></i><span class="sr-only">{PM_REPORTED}</span>*/
/* 									</a>*/
/* 								<!-- ENDIF -->*/
/* 								<i class="fa fa-paperclip fa-fw" aria-hidden="true"></i><br />*/
/* 								<small><!-- IF S_SHOW_RECIPIENTS -->{L_MESSAGE_TO} {messagerow.RECIPIENTS}<!-- ELSE -->{L_MESSAGE_BY_AUTHOR} {messagerow.MESSAGE_AUTHOR_FULL} &raquo; {messagerow.SENT_TIME}<!-- ENDIF --></small>*/
/* 								<!-- IF S_SHOW_RECIPIENTS -->&raquo; <small><span>{L_SENT_AT}{L_COLON} {messagerow.SENT_TIME}</span></small><!-- ENDIF -->*/
/* 								<!-- IF S_UNREAD -->&raquo; <small><!-- IF messagerow.FOLDER --><a href="{messagerow.U_FOLDER}">{messagerow.FOLDER}</a><!-- ELSE -->{L_UNKNOWN_FOLDER}<!-- ENDIF --></small><!-- ENDIF -->*/
/* 							</td>*/
/* 							<td class="marking"><input type="checkbox" name="marked_msg_id[]" value="{messagerow.MESSAGE_ID}" /></td>*/
/* 						</tr>*/
/* 					<!-- END messagerow -->*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	<!-- ELSE -->*/
/* 		<div class="alert alert-danger">*/
/* 			<!-- IF S_COMPOSE_PM_VIEW and S_NO_AUTH_SEND_MESSAGE -->*/
/* 				<!-- IF S_USER_NEW -->{L_USER_NEW_PERMISSION_DISALLOWED}<!-- ELSE -->{L_NO_AUTH_SEND_MESSAGE}<!-- ENDIF -->*/
/* 			<!-- ELSE -->*/
/* 				{L_NO_MESSAGES}*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF FOLDER_CUR_MESSAGES neq 0 -->*/
/* 		<fieldset class="display-actions">*/
/* 			<div class="pull-left">*/
/* 				<label for="export_option">*/
/* 					{L_EXPORT_FOLDER}{L_COLON} <select name="export_option" id="export_option">*/
/* 						<option value="CSV">{L_EXPORT_AS_CSV}</option><option value="CSV_EXCEL">{L_EXPORT_AS_CSV_EXCEL}</option>*/
/* 						<option value="XML">{L_EXPORT_AS_XML}</option>*/
/* 					</select>*/
/* 				</label>*/
/* 				<input class="btn btn-default" type="submit" name="submit_export" value="{L_GO}" /><br />*/
/* 			</div>*/
/* 			<div class="pull-right btn-group">*/
/* 				<a href="#" class="btn btn-sm btn-success" onclick="marklist('viewfolder', 'marked_msg', true); return false;">{L_MARK_ALL}</a>*/
/* 				<a href="#" class="btn btn-sm btn-warning" onclick="marklist('viewfolder', 'marked_msg', false); return false;">{L_UNMARK_ALL}</a>*/
/* 			</div>*/
/* 			<div class="clearfix"></div>*/
/* 			<select name="mark_option">{S_MARK_OPTIONS}{S_MOVE_MARKED_OPTIONS}</select>*/
/* 			<input class="btn btn-default" type="submit" name="submit_mark" value="{L_GO}" />*/
/* 		</fieldset>*/
/* 		<hr />*/
/* 		<div class="row">*/
/* 			<div class="col-md-12 text-center">*/
/* 				<div class="btn-group">*/
/* 					<a class="btn btn-default btn-sm disabled">{TOTAL_MESSAGES}</a>*/
/* 					<!-- IF .pagination -->*/
/* 						<!-- INCLUDE pagination.html -->*/
/* 					<!-- ELSE -->*/
/* 						<a class="btn btn-default btn-sm disabled">{PAGE_NUMBER}</a>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF FOLDER_CUR_MESSAGES neq 0 -->*/
/* 		<!-- DEFINE DISPLAY_OPTIONS_PREV_NEXT = 1 -->*/
/* 		<!-- INCLUDE display_options.html -->*/
/* 		<input type="hidden" name="cur_folder_id" value="{CUR_FOLDER_ID}" />*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF not PROMPT -->*/
/* 	<!-- INCLUDE ucp_pm_message_footer.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
