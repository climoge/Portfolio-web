<?php

/* login_panel.html */
class __TwigTemplate_d9653075d8a0e5319cf442f6c30991ed54f857f4db6e71d84bc306b12d11e596 extends Twig_Template
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
        echo "<div class=\"panel panel-info\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> ";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
        echo "</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t<form method=\"post\" action=\"";
        // line 6
        echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
        echo "\" class=\"form-inline\" name=\"loginform\">
\t\t\t<div class=\"row mobile-fix\">
\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" placeholder=\"";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\" tabindex=\"1\" name=\"username\" size=\"10\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"password\" placeholder=\"";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo "\" tabindex=\"2\" name=\"password\" size=\"10\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo "\" autocomplete=\"off\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 16
        echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
        echo "
\t\t\t\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
        // line 17
        echo $this->env->getExtension('phpbb')->lang("LOGIN");
        echo "\" class=\"btn btn-primary btn-block\" />
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 19
        if ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null)) {
            // line 20
            echo "\t\t\t\t\t\t<br/> <a href=\"";
            echo (isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
            echo "</a>
\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t";
        if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
            // line 23
            echo "\t\t\t\t\t\t<span class=\"responsive-hide\">|</span>
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t<label for=\"autologin\"><input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\"/> ";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 31
        if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
            // line 32
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
            echo "\" class=\"btn btn-primary btn-labeled\"><span class=\"btn-label\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i></span>";
            echo $this->env->getExtension('phpbb')->lang("REGISTER");
            echo "</a>
\t\t\t\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-labeled disabled\"><span class=\"btn-label\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i></span>";
            echo $this->env->getExtension('phpbb')->lang("REGISTER");
            echo "</a>
\t\t\t\t\t\t";
        }
        // line 36
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 39
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t</form>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "login_panel.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 39,  105 => 36,  99 => 34,  91 => 32,  89 => 31,  84 => 28,  78 => 25,  74 => 23,  71 => 22,  63 => 20,  61 => 19,  56 => 17,  52 => 16,  44 => 13,  36 => 10,  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <div class="panel panel-info">*/
/* 	<div class="panel-heading">*/
/* 		<h3 class="panel-title"><i class="fa fa-user fa-fw" aria-hidden="true"></i> {L_LOGIN_LOGOUT}</h3>*/
/* 	</div>*/
/* 	<div class="panel-body">*/
/* 		<form method="post" action="{S_LOGIN_ACTION}" class="form-inline" name="loginform">*/
/* 			<div class="row mobile-fix">*/
/* 				<div class="col-xs-6">*/
/* 					<div class="form-group">*/
/* 						<input type="text" placeholder="{L_USERNAME}" tabindex="1" name="username" size="10" class="form-control" title="{L_USERNAME}"/>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<input type="password" placeholder="{L_PASSWORD}" tabindex="2" name="password" size="10" class="form-control" title="{L_PASSWORD}" autocomplete="off"/>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						{S_LOGIN_REDIRECT}*/
/* 						<input type="submit" tabindex="5" name="login" value="{L_LOGIN}" class="btn btn-primary btn-block" />*/
/* 					</div>*/
/* 					<!-- IF U_SEND_PASSWORD -->*/
/* 						<br/> <a href="{U_SEND_PASSWORD}">{L_FORGOT_PASS}</a>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF S_AUTOLOGIN_ENABLED -->*/
/* 						<span class="responsive-hide">|</span>*/
/* 						<div class="checkbox">*/
/* 							<label for="autologin"><input type="checkbox" tabindex="4" name="autologin" id="autologin"/> {L_LOG_ME_IN}</label>*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 				<div class="col-xs-6">*/
/* 					<div class="form-group">*/
/* 						<!-- IF S_REGISTER_ENABLED -->*/
/* 							<a href="{U_REGISTER}" class="btn btn-primary btn-labeled"><span class="btn-label"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>{L_REGISTER}</a>*/
/* 						<!-- ELSE -->*/
/* 							<a class="btn btn-primary btn-labeled disabled"><span class="btn-label"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>{L_REGISTER}</a>*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			{S_FORM_TOKEN}*/
/* 		</form>*/
/* 	</div>*/
/* </div>*/
/* */
