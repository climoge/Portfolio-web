<?php

/* ucp_notifications.html */
class __TwigTemplate_619ca5ab183c401e76914f9c27fb899775cbf2257994c95fbb3792f4d8b15cc3 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_notifications.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">";
        // line 6
        echo (isset($context["TITLE"]) ? $context["TITLE"] : null);
        echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"alert alert-info\">";
        // line 9
        echo (isset($context["TITLE_EXPLAIN"]) ? $context["TITLE_EXPLAIN"] : null);
        echo "</div>

\t\t\t";
        // line 11
        if (((isset($context["MODE"]) ? $context["MODE"] : null) == "notification_options")) {
            // line 12
            echo "\t\t\t\t<div class=\"responsive-table\">
\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("NOTIFICATION_TYPE");
            echo "</th>
\t\t\t\t\t\t\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_methods", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                // line 18
                echo "\t\t\t\t\t\t\t\t\t<th class=\"marking\">";
                echo $this->getAttribute($context["notification_methods"], "NAME", array());
                echo "</th>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t\t\t\t\t\t\t<th class=\"marking\">";
            echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
            echo "</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_types", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification_types"]) {
                // line 25
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["notification_types"], "GROUP_NAME", array())) {
                    // line 26
                    echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"";
                    // line 27
                    echo (isset($context["NOTIFICATION_TYPES_COLS"]) ? $context["NOTIFICATION_TYPES_COLS"] : null);
                    echo "\">";
                    echo $this->getAttribute($context["notification_types"], "GROUP_NAME", array());
                    echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                } else {
                    // line 30
                    echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                    // line 32
                    echo $this->getAttribute($context["notification_types"], "NAME", array());
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                    // line 33
                    if ($this->getAttribute($context["notification_types"], "EXPLAIN", array())) {
                        echo "<br />&nbsp; &nbsp;";
                        echo $this->getAttribute($context["notification_types"], "EXPLAIN", array());
                    }
                    // line 34
                    echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["notification_types"], "notification_methods", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["notification_methods"]) {
                        // line 36
                        echo "\t\t\t\t\t\t\t\t\t\t<td class=\"marking\"><input type=\"checkbox\" name=\"";
                        echo $this->getAttribute($context["notification_types"], "TYPE", array());
                        echo "_";
                        echo $this->getAttribute($context["notification_methods"], "METHOD", array());
                        echo "\"";
                        if ($this->getAttribute($context["notification_methods"], "SUBSCRIBED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " /></td>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_methods'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t<td class=\"marking\"><input type=\"checkbox\" name=\"";
                    echo $this->getAttribute($context["notification_types"], "TYPE", array());
                    echo "_notification\"";
                    if ($this->getAttribute($context["notification_types"], "SUBSCRIBED", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " /></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_types'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 46
            echo "\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_list", array()))) {
                // line 47
                echo "\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t";
                // line 50
                if ((isset($context["U_MARK_ALL"]) ? $context["U_MARK_ALL"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_MARK_ALL"]) ? $context["U_MARK_ALL"] : null);
                    echo "\" class=\"btn btn-sm btn-success\">";
                    echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS_MARK_ALL_READ");
                    echo "</a>";
                }
                // line 51
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                echo (isset($context["TOTAL_COUNT"]) ? $context["TOTAL_COUNT"] : null);
                echo " ";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "</a>
\t\t\t\t\t\t\t\t";
                // line 52
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 53)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 54
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"responsive-table\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>";
                // line 65
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "</th>
\t\t\t\t\t\t\t\t\t<th>";
                // line 66
                echo $this->env->getExtension('phpbb')->lang("MARK_READ");
                echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
                // line 70
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_list", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["notification_list"]) {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t\t<tr class=\"notifications";
                    if ($this->getAttribute($context["notification_list"], "STYLING", array())) {
                        echo " ";
                        echo $this->getAttribute($context["notification_list"], "STYLING", array());
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row notification no-margin-bottom\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-2 notification-avatar\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 75
                    if ($this->getAttribute($context["notification_list"], "AVATAR", array())) {
                        echo $this->getAttribute($context["notification_list"], "AVATAR", array());
                    } else {
                        echo "<img src=\"";
                        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                        echo "/images/no_avatar.gif\" alt=\"\" class=\"pull-left avatar\"/>";
                    }
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notifications\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 79
                    if ($this->getAttribute($context["notification_list"], "URL", array())) {
                        echo "<a href=\"";
                        if ($this->getAttribute($context["notification_list"], "UNREAD", array())) {
                            echo $this->getAttribute($context["notification_list"], "U_MARK_READ", array());
                        } else {
                            echo $this->getAttribute($context["notification_list"], "URL", array());
                        }
                        echo "\">";
                    }
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"notifications_title\">";
                    echo $this->getAttribute($context["notification_list"], "FORMATTED_TITLE", array());
                    if ($this->getAttribute($context["notification_list"], "REFERENCE", array())) {
                        echo " ";
                        echo $this->getAttribute($context["notification_list"], "REFERENCE", array());
                    }
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 81
                    if ($this->getAttribute($context["notification_list"], "URL", array())) {
                        echo "</a>";
                    }
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["notification_list"], "FORUM", array())) {
                        echo "<p class=\"notifications_forum\">";
                        echo $this->getAttribute($context["notification_list"], "FORUM", array());
                        echo "</p>";
                    }
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["notification_list"], "REASON", array())) {
                        echo "<p class=\"notifications_reason\">";
                        echo $this->getAttribute($context["notification_list"], "REASON", array());
                        echo "</p>";
                    }
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"notifications_time\">";
                    echo $this->getAttribute($context["notification_list"], "TIME", array());
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"mark[]\" value=\"";
                    // line 92
                    echo $this->getAttribute($context["notification_list"], "NOTIFICATION_ID", array());
                    echo "\"";
                    if ( !$this->getAttribute($context["notification_list"], "UNREAD", array())) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " />";
                    echo $this->env->getExtension('phpbb')->lang("MARK_READ");
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification_list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"text-center col-md-12\">
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                // line 105
                echo (isset($context["TOTAL_COUNT"]) ? $context["TOTAL_COUNT"] : null);
                echo " ";
                echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
                echo "</a>
\t\t\t\t\t\t\t\t";
                // line 106
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_notifications.html", 107)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 108
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 109
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                }
                // line 111
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t";
            } else {
                // line 116
                echo "\t\t\t\t\t<p><strong>";
                echo $this->env->getExtension('phpbb')->lang("NO_NOTIFICATIONS");
                echo "</strong></p>
\t\t\t\t";
            }
            // line 118
            echo "
\t\t\t";
        }
        // line 120
        echo "\t\t</div>
\t\t";
        // line 121
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_types", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "notification_list", array())))) {
            // line 122
            echo "\t\t\t<div class=\"panel-footer\">
\t\t\t\t<fieldset class=\"display-actions\">
\t\t\t\t\t<input type=\"hidden\" name=\"form_time\" value=\"";
            // line 124
            echo (isset($context["FORM_TIME"]) ? $context["FORM_TIME"] : null);
            echo "\" />
\t\t\t\t\t";
            // line 125
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 127
            if (((isset($context["MODE"]) ? $context["MODE"] : null) == "notification_options")) {
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            } else {
                echo $this->env->getExtension('phpbb')->lang("MARK_READ");
            }
            echo "\" class=\"btn btn-sm btn-success \" />
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-success\" onclick=\"\$('#ucp input:checkbox').prop('checked', true); return false;\">";
            // line 129
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-warning\" onclick=\"\$('#ucp input:checkbox').prop('checked', false); return false;\">";
            // line 130
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 133
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t";
        }
        // line 137
        echo "\t</div>
</form>

";
        // line 140
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_notifications.html", 140)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_notifications.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 140,  425 => 137,  418 => 133,  412 => 130,  408 => 129,  399 => 127,  394 => 125,  390 => 124,  386 => 122,  384 => 121,  381 => 120,  377 => 118,  371 => 116,  364 => 111,  358 => 109,  355 => 108,  342 => 107,  340 => 106,  334 => 105,  325 => 98,  307 => 92,  295 => 84,  288 => 83,  281 => 82,  277 => 81,  268 => 80,  258 => 79,  253 => 76,  245 => 75,  234 => 71,  230 => 70,  223 => 66,  219 => 65,  209 => 57,  203 => 55,  200 => 54,  187 => 53,  185 => 52,  178 => 51,  170 => 50,  165 => 47,  162 => 46,  156 => 42,  150 => 41,  139 => 38,  124 => 36,  120 => 35,  117 => 34,  112 => 33,  108 => 32,  104 => 30,  96 => 27,  93 => 26,  90 => 25,  86 => 24,  78 => 20,  69 => 18,  65 => 17,  61 => 16,  55 => 12,  53 => 11,  48 => 9,  42 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="ucp" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title">{TITLE}</h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<div class="alert alert-info">{TITLE_EXPLAIN}</div>*/
/* */
/* 			<!-- IF MODE == 'notification_options' -->*/
/* 				<div class="responsive-table">*/
/* 					<table class="table table-striped table-bordered">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>{L_NOTIFICATION_TYPE}</th>*/
/* 								<!-- BEGIN notification_methods -->*/
/* 									<th class="marking">{notification_methods.NAME}</th>*/
/* 								<!-- END notification_methods -->*/
/* 								<th class="marking">{L_NOTIFICATIONS}</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 						<!-- BEGIN notification_types -->*/
/* 							<!-- IF notification_types.GROUP_NAME -->*/
/* 								<tr>*/
/* 									<td colspan="{NOTIFICATION_TYPES_COLS}">{notification_types.GROUP_NAME}</td>*/
/* 								</tr>*/
/* 							<!-- ELSE -->*/
/* 								<tr>*/
/* 									<td>*/
/* 										{notification_types.NAME}*/
/* 										<!-- IF notification_types.EXPLAIN --><br />&nbsp; &nbsp;{notification_types.EXPLAIN}<!-- ENDIF -->*/
/* 									</td>*/
/* 									<!-- BEGIN notification_methods -->*/
/* 										<td class="marking"><input type="checkbox" name="{notification_types.TYPE}_{notification_methods.METHOD}"<!-- IF notification_methods.SUBSCRIBED --> checked="checked"<!-- ENDIF --> /></td>*/
/* 									<!-- END notification_methods -->*/
/* 									<td class="marking"><input type="checkbox" name="{notification_types.TYPE}_notification"<!-- IF notification_types.SUBSCRIBED --> checked="checked"<!-- ENDIF --> /></td>*/
/* 								</tr>*/
/* 							<!-- ENDIF -->*/
/* 						<!-- END notification_types -->*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			<!-- ELSE -->*/
/* 				<!-- IF .notification_list -->*/
/* 					<div class="row">*/
/* 						<div class="text-center col-md-12">*/
/* 							<div class="btn-group">*/
/* 								<!-- IF U_MARK_ALL --><a href="{U_MARK_ALL}" class="btn btn-sm btn-success">{L_NOTIFICATIONS_MARK_ALL_READ}</a><!-- ENDIF -->*/
/* 								<a class="btn btn-default btn-sm disabled">{TOTAL_COUNT} {L_NOTIFICATIONS}</a>*/
/* 								<!-- IF .pagination -->*/
/* 									<!-- INCLUDE pagination.html -->*/
/* 								<!-- ELSE -->*/
/* 									<a class="btn btn-default btn-sm disabled">{PAGE_NUMBER}</a>*/
/* 								<!-- ENDIF -->*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 					<div class="responsive-table">*/
/* 						<table class="table table-striped table-bordered">*/
/* 							<thead>*/
/* 								<tr>*/
/* 									<th>{L_NOTIFICATIONS}</th>*/
/* 									<th>{L_MARK_READ}</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody>*/
/* 								<!-- BEGIN notification_list -->*/
/* 									<tr class="notifications<!-- IF notification_list.STYLING --> {notification_list.STYLING}<!-- ENDIF -->">*/
/* 										<td>*/
/* 											<div class="row notification no-margin-bottom">*/
/* 												<div class="col-xs-2 notification-avatar">*/
/* 													<!-- IF notification_list.AVATAR -->{notification_list.AVATAR}<!-- ELSE --><img src="{T_THEME_PATH}/images/no_avatar.gif" alt="" class="pull-left avatar"/><!-- ENDIF -->*/
/* 												</div>*/
/* 												<div class="col-xs-10">*/
/* 													<div class="notifications">*/
/* 														<!-- IF notification_list.URL --><a href="<!-- IF notification_list.UNREAD -->{notification_list.U_MARK_READ}<!-- ELSE -->{notification_list.URL}<!-- ENDIF -->"><!-- ENDIF -->*/
/* 														<p class="notifications_title">{notification_list.FORMATTED_TITLE}<!-- IF notification_list.REFERENCE --> {notification_list.REFERENCE}<!-- ENDIF --></p>*/
/* 														<!-- IF notification_list.URL --></a><!-- ENDIF -->*/
/* 														<!-- IF notification_list.FORUM --><p class="notifications_forum">{notification_list.FORUM}</p><!-- ENDIF -->*/
/* 														<!-- IF notification_list.REASON --><p class="notifications_reason">{notification_list.REASON}</p><!-- ENDIF -->*/
/* 														<p class="notifications_time">{notification_list.TIME}</p>*/
/* 													</div>*/
/* 												</div>*/
/* 											</div>*/
/* 										</td>*/
/* 										<td>*/
/* 											<div class="checkbox">*/
/* 												<label>*/
/* 													<input type="checkbox" name="mark[]" value="{notification_list.NOTIFICATION_ID}"<!-- IF not notification_list.UNREAD --> disabled="disabled"<!-- ENDIF --> />{L_MARK_READ}*/
/* 												</label>*/
/* 											</div>*/
/* 										</td>*/
/* 									</tr>*/
/* 								<!-- END notification_list -->*/
/* 							</tbody>*/
/* 						</table>*/
/* 					</div>*/
/* */
/* 					<div class="row">*/
/* 						<div class="text-center col-md-12">*/
/* 							<div class="btn-group">*/
/* 								<a class="btn btn-default btn-sm disabled">{TOTAL_COUNT} {L_NOTIFICATIONS}</a>*/
/* 								<!-- IF .pagination -->*/
/* 									<!-- INCLUDE pagination.html -->*/
/* 								<!-- ELSE -->*/
/* 									<a class="btn btn-default btn-sm disabled">{PAGE_NUMBER}</a>*/
/* 								<!-- ENDIF -->*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* */
/* 				<!-- ELSE -->*/
/* 					<p><strong>{L_NO_NOTIFICATIONS}</strong></p>*/
/* 				<!-- ENDIF -->*/
/* */
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 		<!-- IF .notification_types or .notification_list -->*/
/* 			<div class="panel-footer">*/
/* 				<fieldset class="display-actions">*/
/* 					<input type="hidden" name="form_time" value="{FORM_TIME}" />*/
/* 					{S_HIDDEN_FIELDS}*/
/* 					<div class="text-center">*/
/* 						<input type="submit" name="submit" value="<!-- IF MODE == 'notification_options' -->{L_SUBMIT}<!-- ELSE -->{L_MARK_READ}<!-- ENDIF -->" class="btn btn-sm btn-success " />*/
/* 						<div class="btn-group">*/
/* 							<a href="#" class="btn btn-sm btn-success" onclick="$('#ucp input:checkbox').prop('checked', true); return false;">{L_MARK_ALL}</a>*/
/* 							<a href="#" class="btn btn-sm btn-warning" onclick="$('#ucp input:checkbox').prop('checked', false); return false;">{L_UNMARK_ALL}</a>*/
/* 						</div>*/
/* 					</div>*/
/* 					{S_FORM_TOKEN}*/
/* 				</fieldset>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
