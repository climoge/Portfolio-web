<?php

/* ucp_profile_profile_info.html */
class __TwigTemplate_597bc78c7706043e5276b147f8c899e54e5f2ef3713b45735e650291ffc1c7e2 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_profile_profile_info.html", 1)->display($context);
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
\t\t<div class=\"panel-heading btn-panel\">
\t\t\t<h3 class=\"panel-title\">
\t\t\t\t";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "
\t\t\t</h3>
\t\t\t<span class=\"pull-right panel-right\">
\t\t\t\t<a href=\"";
        // line 10
        echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
        echo "\" class=\"btn btn-default\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("VIEW_PROFILE");
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("VIEW_PROFILE");
        echo "</a>
\t\t\t</span>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"alert alert-info\">";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("PROFILE_INFO_NOTICE");
        echo "</div>
\t\t\t<fieldset class=\"form-horizontal\">
\t\t\t\t";
        // line 16
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"alert alert-danger\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 17
        echo "\t\t\t\t";
        // line 18
        echo "\t\t\t\t";
        if ((isset($context["S_BIRTHDAYS_ENABLED"]) ? $context["S_BIRTHDAYS_ENABLED"] : null)) {
            // line 19
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label col-md-4\" for=\"bday_day\">";
            // line 20
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<label for=\"bday_day\">";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("DAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"bday_day\" id=\"bday_day\">";
            echo (isset($context["S_BIRTHDAY_DAY_OPTIONS"]) ? $context["S_BIRTHDAY_DAY_OPTIONS"] : null);
            echo "</select></label>
\t\t\t\t\t\t<label for=\"bday_month\">";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("MONTH");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"bday_month\" id=\"bday_month\">";
            echo (isset($context["S_BIRTHDAY_MONTH_OPTIONS"]) ? $context["S_BIRTHDAY_MONTH_OPTIONS"] : null);
            echo "</select></label>
\t\t\t\t\t\t<label for=\"bday_year\">";
            // line 24
            echo $this->env->getExtension('phpbb')->lang("YEAR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"bday_year\" id=\"bday_year\">";
            echo (isset($context["S_BIRTHDAY_YEAR_OPTIONS"]) ? $context["S_BIRTHDAY_YEAR_OPTIONS"] : null);
            echo "</select></label>

\t\t\t\t\t\t<span class=\"help-block\">";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAY_EXPLAIN");
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 30
        echo "\t\t\t\t";
        if ((isset($context["S_JABBER_ENABLED"]) ? $context["S_JABBER_ENABLED"] : null)) {
            // line 31
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label col-md-4\" for=\"jabber\">";
            // line 32
            echo $this->env->getExtension('phpbb')->lang("UCP_JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input type=\"email\" name=\"jabber\" id=\"jabber\" maxlength=\"255\" value=\"";
            // line 34
            echo (isset($context["JABBER"]) ? $context["JABBER"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
            // line 39
            echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label col-md-4\"";
            // line 40
            if ($this->getAttribute($context["profile_fields"], "FIELD_ID", array())) {
                echo " for=\"";
                echo $this->getAttribute($context["profile_fields"], "FIELD_ID", array());
                echo "\"";
            }
            echo ">";
            echo $this->getAttribute($context["profile_fields"], "LANG_NAME", array());
            echo $this->env->getExtension('phpbb')->lang("COLON");
            if ($this->getAttribute($context["profile_fields"], "S_REQUIRED", array())) {
                echo " *";
            }
            echo "</label>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t";
            // line 42
            if ($this->getAttribute($context["profile_fields"], "ERROR", array())) {
                // line 43
                echo "\t\t\t\t\t\t\t\t<span class=\"help-block text-danger\">
\t\t\t\t\t\t\t\t\t";
                // line 44
                echo $this->getAttribute($context["profile_fields"], "ERROR", array());
                echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t";
            echo $this->getAttribute($context["profile_fields"], "FIELD", array());
            echo "
\t\t\t\t\t\t\t";
            // line 48
            if ($this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array())) {
                // line 49
                echo "\t\t\t\t\t\t\t\t<span class=\"help-block\">
\t\t\t\t\t\t\t\t\t";
                // line 50
                echo $this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array());
                echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t";
        // line 57
        echo "\t\t\t</fieldset>
\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
        // line 61
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-danger\" />&nbsp;
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 62
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"btn btn-success\" />
\t\t\t\t";
        // line 63
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>

";
        // line 69
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_profile_info.html", 69)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_profile_info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 69,  209 => 63,  205 => 62,  199 => 61,  193 => 57,  191 => 56,  183 => 53,  177 => 50,  174 => 49,  172 => 48,  167 => 47,  161 => 44,  158 => 43,  156 => 42,  141 => 40,  138 => 39,  133 => 38,  126 => 34,  120 => 32,  117 => 31,  114 => 30,  107 => 26,  99 => 24,  92 => 23,  85 => 22,  79 => 20,  76 => 19,  73 => 18,  71 => 17,  65 => 16,  60 => 14,  49 => 10,  43 => 7,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="ucp" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading btn-panel">*/
/* 			<h3 class="panel-title">*/
/* 				{L_TITLE}*/
/* 			</h3>*/
/* 			<span class="pull-right panel-right">*/
/* 				<a href="{U_USER_PROFILE}" class="btn btn-default" title="{L_VIEW_PROFILE}">{L_VIEW_PROFILE}</a>*/
/* 			</span>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<div class="alert alert-info">{L_PROFILE_INFO_NOTICE}</div>*/
/* 			<fieldset class="form-horizontal">*/
/* 				<!-- IF ERROR --><p class="alert alert-danger">{ERROR}</p><!-- ENDIF -->*/
/* 				<!-- EVENT ucp_profile_profile_info_before -->*/
/* 				<!-- IF S_BIRTHDAYS_ENABLED -->*/
/* 				<div class="form-group">*/
/* 					<label class="control-label col-md-4" for="bday_day">{L_BIRTHDAY}{L_COLON}</label>*/
/* 					<div class="col-md-6">*/
/* 						<label for="bday_day">{L_DAY}{L_COLON} <select name="bday_day" id="bday_day">{S_BIRTHDAY_DAY_OPTIONS}</select></label>*/
/* 						<label for="bday_month">{L_MONTH}{L_COLON} <select name="bday_month" id="bday_month">{S_BIRTHDAY_MONTH_OPTIONS}</select></label>*/
/* 						<label for="bday_year">{L_YEAR}{L_COLON} <select name="bday_year" id="bday_year">{S_BIRTHDAY_YEAR_OPTIONS}</select></label>*/
/* */
/* 						<span class="help-block">{L_BIRTHDAY_EXPLAIN}</span>*/
/* 					</div>*/
/* 				</div>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF S_JABBER_ENABLED -->*/
/* 				<div class="form-group">*/
/* 					<label class="control-label col-md-4" for="jabber">{L_UCP_JABBER}{L_COLON}</label>*/
/* 					<div class="col-md-6">*/
/* 						<input type="email" name="jabber" id="jabber" maxlength="255" value="{JABBER}" class="form-control" />*/
/* 					</div>*/
/* 				</div>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- BEGIN profile_fields -->*/
/* 					<div class="form-group">*/
/* 						<label class="control-label col-md-4"<!-- IF profile_fields.FIELD_ID --> for="{profile_fields.FIELD_ID}"<!-- ENDIF -->>{profile_fields.LANG_NAME}{L_COLON}<!-- IF profile_fields.S_REQUIRED --> *<!-- ENDIF --></label>*/
/* 						<div class="col-md-6">*/
/* 							<!-- IF profile_fields.ERROR -->*/
/* 								<span class="help-block text-danger">*/
/* 									{profile_fields.ERROR}*/
/* 								</span>*/
/* 							<!-- ENDIF -->*/
/* 							{profile_fields.FIELD}*/
/* 							<!-- IF profile_fields.LANG_EXPLAIN -->*/
/* 								<span class="help-block">*/
/* 									{profile_fields.LANG_EXPLAIN}*/
/* 								</span>*/
/* 							<!-- ENDIF -->*/
/* 						</div>*/
/* 					</div>*/
/* 				<!-- END profile_fields -->*/
/* 				<!-- EVENT ucp_profile_profile_info_after -->*/
/* 			</fieldset>*/
/* 		</div>*/
/* 		<div class="panel-footer">*/
/* 			<fieldset class="submit-buttons">*/
/* 				{S_HIDDEN_FIELDS}<input type="reset" value="{L_RESET}" name="reset" class="btn btn-danger" />&nbsp;*/
/* 				<input type="submit" name="submit" value="{L_SUBMIT}" class="btn btn-success" />*/
/* 				{S_FORM_TOKEN}*/
/* 			</fieldset>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
