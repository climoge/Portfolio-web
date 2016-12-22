<?php

/* login_body.html */
class __TwigTemplate_4f71bd01c32b10d11b0b339a047b262edddc0d49cb087e236e257e6956341c40 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "login_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"row\" id=\"loginpanel\">
\t<div class=\"col-xs-12 col-sm-10 col-md-6 col-sm-offset-1 col-md-offset-3\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t<form action=\"";
        // line 7
        echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
        echo "\" method=\"post\" id=\"login\" data-focus=\"";
        if ((isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null)) {
            echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        } else {
            echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        }
        echo "\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<h3>";
        // line 9
        if ((isset($context["LOGIN_EXPLAIN"]) ? $context["LOGIN_EXPLAIN"] : null)) {
            echo (isset($context["LOGIN_EXPLAIN"]) ? $context["LOGIN_EXPLAIN"] : null);
        } else {
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
        }
        echo "</h3>
\t\t\t\t\t\t<hr class=\"colorgraph\">
\t\t\t\t\t\t";
        // line 11
        if ((isset($context["LOGIN_ERROR"]) ? $context["LOGIN_ERROR"] : null)) {
            echo "<div class=\"alert alert-danger\">";
            echo (isset($context["LOGIN_ERROR"]) ? $context["LOGIN_ERROR"] : null);
            echo "</div>";
        }
        // line 12
        echo "\t\t\t\t\t\t<div class=\"form-group no-padding\">
\t\t\t\t\t\t\t<div class=\"icon-addon addon-lg\">
\t\t\t\t\t\t\t\t<input type=\"text\" tabindex=\"1\" name=\"";
        // line 14
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\" id=\"";
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\" size=\"25\" value=\"";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" class=\"form-control\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\" required=\"required\" autofocus/>
\t\t\t\t\t\t\t\t<label for=\"";
        // line 15
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\" class=\"fa fa-user\" title=\"";
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group no-padding\">
\t\t\t\t\t\t\t<div class=\"icon-addon addon-lg\">
\t\t\t\t\t\t\t\t<input type=\"password\" tabindex=\"2\" id=\"";
        // line 20
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\" name=\"";
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\" size=\"25\" class=\"form-control\" placeholder=\"";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo "\" required=\"required\" autocomplete=\"off\"/>
\t\t\t\t\t\t\t\t<label for=\"";
        // line 21
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\" class=\"fa fa-lock\" title=\"";
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\"></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 24
        if (((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null) && (isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null))) {
            // line 25
            echo "\t\t\t\t\t\t\t";
            $value = 3;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 26
            echo "\t\t\t\t\t\t\t";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "login_body.html", 26)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 27
            echo "\t\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t\t";
        if ((isset($context["S_DISPLAY_FULL_LOGIN"]) ? $context["S_DISPLAY_FULL_LOGIN"] : null)) {
            // line 29
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                // line 30
                echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"4\" />";
                // line 32
                echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"5\" />";
            // line 38
            echo $this->env->getExtension('phpbb')->lang("HIDE_ME");
            echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t\t\t";
        if (((isset($context["S_DISPLAY_FULL_LOGIN"]) ? $context["S_DISPLAY_FULL_LOGIN"] : null) && ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null) || (isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null)))) {
            // line 43
            echo "\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t";
            // line 44
            if ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null)) {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 46
                echo (isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null);
                echo "\" class=\"btn btn-danger btn-block\">";
                echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
                echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t\t\t";
            if ((isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null)) {
                // line 50
                echo "\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 51
                echo (isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null);
                echo "\" class=\"btn btn-warning btn-block\">";
                echo $this->env->getExtension('phpbb')->lang("RESEND_ACTIVATION");
                echo "</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t\t";
        if (( !(isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null) && (isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null))) {
            // line 57
            echo "\t\t\t\t\t\t\t";
            echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
            echo "
\t\t\t\t\t\t\t<hr class=\"colorgraph\">
\t\t\t\t\t\t\t<div class=\"row mobile-fix\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t";
            // line 61
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "<input type=\"submit\" name=\"login\" tabindex=\"6\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "\" class=\"btn btn-success btn-block btn-lg\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 64
            echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
            echo "\" class=\"btn btn-primary btn-block btn-lg\">";
            echo $this->env->getExtension('phpbb')->lang("REGISTER");
            echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } else {
            // line 68
            echo "\t\t\t\t\t\t\t";
            echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
            echo "
\t\t\t\t\t\t\t<hr class=\"colorgraph\">
\t\t\t\t\t\t\t";
            // line 70
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "<input type=\"submit\" name=\"login\" tabindex=\"6\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "\" class=\"btn btn-success btn-block btn-lg\" />
\t\t\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t\t</fieldset>
\t\t\t\t\t";
        // line 73
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 77
        if (( !(isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null) && (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null))) {
            // line 78
            echo "\t\t\t";
            $location = (("" . (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) . ""), "login_body.html", 78)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 79
            echo "\t\t";
        }
        // line 80
        echo "\t</div>
</div>
";
        // line 82
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "login_body.html", 82)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "login_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 82,  260 => 80,  257 => 79,  244 => 78,  242 => 77,  235 => 73,  232 => 72,  225 => 70,  219 => 68,  210 => 64,  202 => 61,  194 => 57,  191 => 56,  187 => 54,  179 => 51,  176 => 50,  173 => 49,  165 => 46,  162 => 45,  160 => 44,  157 => 43,  154 => 42,  147 => 38,  143 => 36,  136 => 32,  132 => 30,  129 => 29,  126 => 28,  123 => 27,  110 => 26,  106 => 25,  104 => 24,  96 => 21,  88 => 20,  78 => 15,  68 => 14,  64 => 12,  58 => 11,  49 => 9,  38 => 7,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <div class="row" id="loginpanel">*/
/* 	<div class="col-xs-12 col-sm-10 col-md-6 col-sm-offset-1 col-md-offset-3">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-body">*/
/* 				<form action="{S_LOGIN_ACTION}" method="post" id="login" data-focus="<!-- IF S_ADMIN_AUTH -->{PASSWORD_CREDENTIAL}<!-- ELSE -->{USERNAME_CREDENTIAL}<!-- ENDIF -->">*/
/* 					<fieldset>*/
/* 						<h3><!-- IF LOGIN_EXPLAIN -->{LOGIN_EXPLAIN}<!-- ELSE -->{L_LOGIN}<!-- ENDIF --></h3>*/
/* 						<hr class="colorgraph">*/
/* 						<!-- IF LOGIN_ERROR --><div class="alert alert-danger">{LOGIN_ERROR}</div><!-- ENDIF -->*/
/* 						<div class="form-group no-padding">*/
/* 							<div class="icon-addon addon-lg">*/
/* 								<input type="text" tabindex="1" name="{USERNAME_CREDENTIAL}" id="{USERNAME_CREDENTIAL}" size="25" value="{USERNAME}" class="form-control" placeholder="{L_USERNAME}" required="required" autofocus/>*/
/* 								<label for="{USERNAME_CREDENTIAL}" class="fa fa-user" title="{USERNAME_CREDENTIAL}"></label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group no-padding">*/
/* 							<div class="icon-addon addon-lg">*/
/* 								<input type="password" tabindex="2" id="{PASSWORD_CREDENTIAL}" name="{PASSWORD_CREDENTIAL}" size="25" class="form-control" placeholder="{L_PASSWORD}" required="required" autocomplete="off"/>*/
/* 								<label for="{PASSWORD_CREDENTIAL}" class="fa fa-lock" title="{PASSWORD_CREDENTIAL}"></label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- IF CAPTCHA_TEMPLATE and S_CONFIRM_CODE -->*/
/* 							<!-- DEFINE $CAPTCHA_TAB_INDEX = 3 -->*/
/* 							<!-- INCLUDE {CAPTCHA_TEMPLATE} -->*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF S_DISPLAY_FULL_LOGIN -->*/
/* 							<!-- IF S_AUTOLOGIN_ENABLED -->*/
/* 								<div class="checkbox">*/
/* 									<label>*/
/* 										<input type="checkbox" name="autologin" id="autologin" tabindex="4" />{L_LOG_ME_IN}*/
/* 									</label>*/
/* 								</div>*/
/* 							<!-- ENDIF -->*/
/* 							<div class="checkbox">*/
/* 								<label>*/
/* 									<input type="checkbox" name="viewonline" id="viewonline" tabindex="5" />{L_HIDE_ME}*/
/* 								</label>*/
/* 							</div>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF S_DISPLAY_FULL_LOGIN and (U_SEND_PASSWORD or U_RESEND_ACTIVATION) -->*/
/* 							<div class="row">*/
/* 								<!-- IF U_SEND_PASSWORD -->*/
/* 									<div class="col-md-6">*/
/* 										<a href="{U_SEND_PASSWORD}" class="btn btn-danger btn-block">{L_FORGOT_PASS}</a>*/
/* 									</div>*/
/* 								<!-- ENDIF -->*/
/* 								<!-- IF U_RESEND_ACTIVATION -->*/
/* 									<div class="col-md-6">*/
/* 										<a href="{U_RESEND_ACTIVATION}" class="btn btn-warning btn-block">{L_RESEND_ACTIVATION}</a>*/
/* 									</div>*/
/* 								<!-- ENDIF -->*/
/* 							</div>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF not S_ADMIN_AUTH and S_REGISTER_ENABLED -->*/
/* 							{S_LOGIN_REDIRECT}*/
/* 							<hr class="colorgraph">*/
/* 							<div class="row mobile-fix">*/
/* 								<div class="col-md-6">*/
/* 									{S_HIDDEN_FIELDS}<input type="submit" name="login" tabindex="6" value="{L_LOGIN}" class="btn btn-success btn-block btn-lg" />*/
/* 								</div>*/
/* 								<div class="col-md-6">*/
/* 									<a href="{U_REGISTER}" class="btn btn-primary btn-block btn-lg">{L_REGISTER}</a>*/
/* 								</div>*/
/* 							</div>*/
/* 						<!-- ELSE -->*/
/* 							{S_LOGIN_REDIRECT}*/
/* 							<hr class="colorgraph">*/
/* 							{S_HIDDEN_FIELDS}<input type="submit" name="login" tabindex="6" value="{L_LOGIN}" class="btn btn-success btn-block btn-lg" />*/
/* 						<!-- ENDIF -->*/
/* 					</fieldset>*/
/* 					{S_FORM_TOKEN}*/
/* 				</form>*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- IF not S_ADMIN_AUTH and PROVIDER_TEMPLATE_FILE -->*/
/* 			<!-- INCLUDE {PROVIDER_TEMPLATE_FILE} -->*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* </div>*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
