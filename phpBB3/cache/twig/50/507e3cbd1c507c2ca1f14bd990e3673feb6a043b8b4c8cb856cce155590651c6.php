<?php

/* ucp_register.html */
class __TwigTemplate_613fe08c8afda2fc20ae4bafcfb1ba4adefc2b4a97728a5e64ce5be5910a6d8e extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "ucp_register.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<script type=\"text/javascript\">
// <![CDATA[
\t/**
\t* Change language
\t*/
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
        // line 10
        echo (isset($context["COOKIE_NAME"]) ? $context["COOKIE_NAME"] : null);
        echo "_lang=' + lang_iso + '; path=";
        echo (isset($context["COOKIE_PATH"]) ? $context["COOKIE_PATH"] : null);
        echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit.click();
\t}
// ]]>
</script>

<div class=\"row\">
\t<div class=\"col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form id=\"register\" method=\"post\" action=\"";
        // line 21
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\" ";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
\t\t\t\t\t<h3>";
        // line 22
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo " - ";
        echo $this->env->getExtension('phpbb')->lang("REGISTRATION");
        echo "</h3>
\t\t\t\t\t<hr class=\"colorgraph\"/>
\t\t\t\t\t";
        // line 24
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            // line 25
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</div>
\t\t\t\t\t";
        }
        // line 27
        echo "\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t";
        // line 28
        if ((isset($context["L_REG_COND"]) ? $context["L_REG_COND"] : null)) {
            // line 29
            echo "\t\t\t\t\t\t\t<div class=\"form-group clearfix\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<strong>";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("REG_COND");
            echo "</strong>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t";
        // line 36
        echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"icon-addon addon-lg\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"";
        // line 39
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\" name=\"username\" id=\"username\" value=\"";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" size=\"10\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\" value=\"";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" tabindex=\"1\" autofocus/>
\t\t\t\t\t\t\t\t\t<label for=\"username\" class=\"fa fa-user\" rel=\"tooltip\" title=\"username\"></label>
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 41
        echo $this->env->getExtension('phpbb')->lang("USERNAME_EXPLAIN");
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"icon-addon addon-lg\">
\t\t\t\t\t\t\t\t\t<input type=\"email\" placeholder=\"";
        // line 48
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo "\" name=\"email\" id=\"email\" value=\"";
        echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
        echo "\" size=\"10\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo "\" tabindex=\"2\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t<label for=\"email\" class=\"fa fa-envelope\" rel=\"tooltip\" title=\"email\"></label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"icon-addon addon-lg\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"";
        // line 56
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo "\" name=\"new_password\" id=\"new_password\" value=\"";
        echo (isset($context["PASSWORD"]) ? $context["PASSWORD"] : null);
        echo "\" size=\"10\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo "\" tabindex=\"4\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t<label for=\"new_password\" class=\"fa fa-lock\" rel=\"tooltip\" title=\"new_password\"></label>
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 58
        echo $this->env->getExtension('phpbb')->lang("PASSWORD_EXPLAIN");
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t<div class=\"icon-addon addon-lg\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"";
        // line 63
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
        echo "\" name=\"password_confirm\" id=\"password_confirm\" value=\"";
        echo (isset($context["PASSWORD_CONFIRM"]) ? $context["PASSWORD_CONFIRM"] : null);
        echo "\" size=\"10\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
        echo "\" tabindex=\"5\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t<label for=\"password_confirm\" class=\"fa fa-lock\" rel=\"tooltip\" title=\"password_confirm\"></label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 68
        // line 69
        echo "\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t";
        // line 70
        // line 71
        echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"lang\" class=\"control-label col-md-4\">";
        // line 72
        echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" tabindex=\"6\" title=\"";
        // line 74
        echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
        echo "\">";
        echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
        echo "</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 78
        $location = "timezone_option.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("timezone_option.html", "ucp_register.html", 78)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 79
        echo "
\t\t\t\t\t\t";
        // line 80
        // line 81
        echo "\t\t\t\t\t\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()))) {
            // line 82
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-warning text-center\">";
            // line 84
            echo $this->env->getExtension('phpbb')->lang("ITEMS_REQUIRED");
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "profile_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                // line 88
                echo "\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t";
                // line 89
                if ($this->getAttribute($context["profile_fields"], "ERROR", array())) {
                    echo "<div class=\"col-md-12\"><div class=\"alert alert-warning\">";
                    echo $this->getAttribute($context["profile_fields"], "ERROR", array());
                    echo "</div></div>";
                }
                // line 90
                echo "\t\t\t\t\t\t\t\t\t<label";
                if ($this->getAttribute($context["profile_fields"], "FIELD_ID", array())) {
                    echo " for=\"";
                    echo $this->getAttribute($context["profile_fields"], "FIELD_ID", array());
                    echo "\"";
                }
                echo " class=\"control-label col-md-4\">";
                echo $this->getAttribute($context["profile_fields"], "LANG_NAME", array());
                echo ":";
                if ($this->getAttribute($context["profile_fields"], "S_REQUIRED", array())) {
                    echo " *";
                }
                echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t";
                // line 92
                echo $this->getAttribute($context["profile_fields"], "FIELD", array());
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 93
                if ($this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array())) {
                    echo "<span class=\"help-block\">";
                    echo $this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", array());
                    echo "</span>";
                }
                // line 94
                echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "\t\t\t\t\t\t";
        }
        // line 98
        echo "\t\t\t\t\t\t";
        // line 99
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 100
        if ((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) {
            // line 101
            echo "\t\t\t\t\t\t<hr />
\t\t\t\t\t\t";
            // line 102
            $value = 8;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 103
            echo "\t\t\t\t\t\t";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "ucp_register.html", 103)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 104
            echo "\t\t\t\t\t";
        }
        // line 105
        echo "\t\t\t\t\t";
        if ((isset($context["S_COPPA"]) ? $context["S_COPPA"] : null)) {
            // line 106
            echo "\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 108
            echo $this->env->getExtension('phpbb')->lang("COPPA_COMPLIANCE");
            echo "</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<p>";
            // line 111
            echo $this->env->getExtension('phpbb')->lang("COPPA_EXPLAIN");
            echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 115
        echo "\t\t\t\t\t<hr class=\"colorgraph\"/>
\t\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t\t";
        // line 117
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t\t\t\t\t<div class=\"row mobile-fix\">
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 121
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-danger btn-block btn-lg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-xs-12 col-md-6\">
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input type=\"submit\" tabindex=\"9\" name=\"submit\" id=\"submit\" value=\"";
        // line 126
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"btn btn-success default-submit-action btn-block btn-lg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 130
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t\t\t\t</fieldset>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 138
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_register.html", 138)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_register.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 138,  343 => 130,  336 => 126,  328 => 121,  321 => 117,  317 => 115,  310 => 111,  304 => 108,  300 => 106,  297 => 105,  294 => 104,  281 => 103,  278 => 102,  275 => 101,  273 => 100,  270 => 99,  268 => 98,  265 => 97,  257 => 94,  251 => 93,  247 => 92,  231 => 90,  225 => 89,  222 => 88,  218 => 87,  212 => 84,  208 => 82,  205 => 81,  204 => 80,  201 => 79,  189 => 78,  180 => 74,  174 => 72,  171 => 71,  170 => 70,  167 => 69,  166 => 68,  154 => 63,  146 => 58,  137 => 56,  122 => 48,  112 => 41,  101 => 39,  96 => 36,  94 => 35,  87 => 31,  83 => 29,  81 => 28,  78 => 27,  72 => 25,  70 => 24,  63 => 22,  57 => 21,  41 => 10,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* 	/***/
/* 	* Change language*/
/* 	*//* */
/* 	function change_language(lang_iso)*/
/* 	{*/
/* 		document.cookie = '{COOKIE_NAME}_lang=' + lang_iso + '; path={COOKIE_PATH}';*/
/* 		document.forms['register'].change_lang.value = lang_iso;*/
/* 		document.forms['register'].submit.click();*/
/* 	}*/
/* // ]]>*/
/* </script>*/
/* */
/* <div class="row">*/
/* 	<div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-body">*/
/* 				<form id="register" method="post" action="{S_UCP_ACTION}" {S_FORM_ENCTYPE}>*/
/* 					<h3>{SITENAME} - {L_REGISTRATION}</h3>*/
/* 					<hr class="colorgraph"/>*/
/* 					<!-- IF ERROR -->*/
/* 						<div class="alert alert-danger">{ERROR}</div>*/
/* 					<!-- ENDIF -->*/
/* 					<div class="form-horizontal">*/
/* 						<!-- IF L_REG_COND -->*/
/* 							<div class="form-group clearfix">*/
/* 								<div class="col-xs-12">*/
/* 									<strong>{L_REG_COND}</strong>*/
/* 								</div>*/
/* 							</div>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- EVENT ucp_register_credentials_before -->*/
/* 						<div class="form-group">*/
/* 							<div class="col-xs-12">*/
/* 								<div class="icon-addon addon-lg">*/
/* 									<input type="text" placeholder="{L_USERNAME}" name="username" id="username" value="{USERNAME}" size="10" class="form-control" title="{L_USERNAME}" value="{USERNAME}" tabindex="1" autofocus/>*/
/* 									<label for="username" class="fa fa-user" rel="tooltip" title="username"></label>*/
/* 									<span class="help-block">{L_USERNAME_EXPLAIN}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<div class="col-xs-12">*/
/* 								<div class="icon-addon addon-lg">*/
/* 									<input type="email" placeholder="{L_EMAIL_ADDRESS}" name="email" id="email" value="{EMAIL}" size="10" class="form-control" title="{L_EMAIL_ADDRESS}" tabindex="2" autocomplete="off" />*/
/* 									<label for="email" class="fa fa-envelope" rel="tooltip" title="email"></label>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<div class="col-xs-12 col-sm-6">*/
/* 								<div class="icon-addon addon-lg">*/
/* 									<input type="password" placeholder="{L_PASSWORD}" name="new_password" id="new_password" value="{PASSWORD}" size="10" class="form-control" title="{L_PASSWORD}" tabindex="4" autocomplete="off" />*/
/* 									<label for="new_password" class="fa fa-lock" rel="tooltip" title="new_password"></label>*/
/* 									<span class="help-block">{L_PASSWORD_EXPLAIN}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-xs-12 col-sm-6">*/
/* 								<div class="icon-addon addon-lg">*/
/* 									<input type="password" placeholder="{L_CONFIRM_PASSWORD}" name="password_confirm" id="password_confirm" value="{PASSWORD_CONFIRM}" size="10" class="form-control" title="{L_CONFIRM_PASSWORD}" tabindex="5" autocomplete="off" />*/
/* 									<label for="password_confirm" class="fa fa-lock" rel="tooltip" title="password_confirm"></label>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- EVENT ucp_register_credentials_after -->*/
/* 						<hr/>*/
/* 						<!-- EVENT ucp_register_options_before -->*/
/* 						<div class="form-group">*/
/* 							<label for="lang" class="control-label col-md-4">{L_LANGUAGE}{L_COLON}</label>*/
/* 							<div class="col-md-8">*/
/* 								<select name="lang" id="lang" onchange="change_language(this.value); return false;" tabindex="6" title="{L_LANGUAGE}">{S_LANG_OPTIONS}</select>*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<!-- INCLUDE timezone_option.html -->*/
/* */
/* 						<!-- EVENT ucp_register_profile_fields_before -->*/
/* 						<!-- IF .profile_fields -->*/
/* 							<div class="form-group">*/
/* 								<div class="col-md-12">*/
/* 									<div class="alert alert-warning text-center">{L_ITEMS_REQUIRED}</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- BEGIN profile_fields -->*/
/* 								<div class="form-group">*/
/* 									<!-- IF profile_fields.ERROR --><div class="col-md-12"><div class="alert alert-warning">{profile_fields.ERROR}</div></div><!-- ENDIF -->*/
/* 									<label<!-- IF profile_fields.FIELD_ID --> for="{profile_fields.FIELD_ID}"<!-- ENDIF --> class="control-label col-md-4">{profile_fields.LANG_NAME}:<!-- IF profile_fields.S_REQUIRED --> *<!-- ENDIF --></label>*/
/* 									<div class="col-md-8">*/
/* 										{profile_fields.FIELD}*/
/* 										<!-- IF profile_fields.LANG_EXPLAIN --><span class="help-block">{profile_fields.LANG_EXPLAIN}</span><!-- ENDIF -->*/
/* 									</div>*/
/* 								</div>*/
/* 							<!-- END profile_fields -->*/
/* 						<!-- ENDIF -->*/
/* 						<!-- EVENT ucp_register_profile_fields_after -->*/
/* 					</div>*/
/* 					<!-- IF CAPTCHA_TEMPLATE -->*/
/* 						<hr />*/
/* 						<!-- DEFINE $CAPTCHA_TAB_INDEX = 8 -->*/
/* 						<!-- INCLUDE {CAPTCHA_TEMPLATE} -->*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF S_COPPA -->*/
/* 						<div class="panel panel-default">*/
/* 							<div class="panel-heading">*/
/* 								<h3 class="panel-title">{L_COPPA_COMPLIANCE}</h3>*/
/* 							</div>*/
/* 							<div class="panel-body">*/
/* 								<p>{L_COPPA_EXPLAIN}</p>*/
/* 							</div>*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 					<hr class="colorgraph"/>*/
/* 					<fieldset class="submit-buttons">*/
/* 						{S_HIDDEN_FIELDS}*/
/* 						<div class="row mobile-fix">*/
/* 							<div class="col-xs-12 col-md-6">*/
/* 								<div class="form-group">*/
/* 									<input type="reset" value="{L_RESET}" name="reset" class="btn btn-danger btn-block btn-lg" />*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-xs-12 col-md-6">*/
/* 								<div class="form-group">*/
/* 									<input type="submit" tabindex="9" name="submit" id="submit" value="{L_SUBMIT}" class="btn btn-success default-submit-action btn-block btn-lg" />*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						{S_FORM_TOKEN}*/
/* 					</fieldset>*/
/* 				</form>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
