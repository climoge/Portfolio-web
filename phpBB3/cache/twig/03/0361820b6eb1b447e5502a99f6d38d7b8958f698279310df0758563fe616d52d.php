<?php

/* ucp_profile_reg_details.html */
class __TwigTemplate_a426d32457d65ce9007915dc1bb0194e0556ffcf1fb58c068a428c7c3b628ea6 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_profile_reg_details.html", 1)->display($context);
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
\t\t\t<h3 class=\"panel-title\">
\t\t\t\t";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "
\t\t\t</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 12
        if ((isset($context["S_FORCE_PASSWORD"]) ? $context["S_FORCE_PASSWORD"] : null)) {
            // line 13
            echo "\t\t\t\t<p class=\"alert alert-danger\">";
            echo $this->env->getExtension('phpbb')->lang("FORCE_PASSWORD_EXPLAIN");
            echo "</p>
\t\t\t";
        }
        // line 15
        echo "\t\t\t";
        if ((isset($context["S_FORCE_PASSWORD"]) ? $context["S_FORCE_PASSWORD"] : null)) {
            // line 16
            echo "\t\t\t\t<p class=\"alert alert-danger\">";
            echo $this->env->getExtension('phpbb')->lang("FORCE_PASSWORD_EXPLAIN");
            echo "</p>
\t\t\t";
        }
        // line 18
        echo "\t\t\t<fieldset class=\"form-horizontal\">
\t\t\t";
        // line 19
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"alert alert-danger\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 20
        echo "\t\t\t";
        // line 21
        echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"control-label col-md-4\"";
        // line 22
        if ((isset($context["S_CHANGE_USERNAME"]) ? $context["S_CHANGE_USERNAME"] : null)) {
            echo "for=\"username\"";
        }
        echo ">
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "
\t\t\t\t</label>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 26
        if ((isset($context["S_CHANGE_USERNAME"]) ? $context["S_CHANGE_USERNAME"] : null)) {
            // line 27
            echo "\t\t\t\t\t<input type=\"text\" name=\"username\" id=\"username\" value=\"";
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "\" class=\"form-control\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\" />
\t\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t<strong>";
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "</strong>
\t\t\t\t\t";
        }
        // line 31
        echo "
\t\t\t\t\t<span class=\"help-block\">";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("USERNAME_EXPLAIN");
        echo "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"email\" class=\"control-label col-md-4\">";
        // line 36
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>

\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 39
        if ((isset($context["S_CHANGE_EMAIL"]) ? $context["S_CHANGE_EMAIL"] : null)) {
            // line 40
            echo "\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"email\" maxlength=\"100\" value=\"";
            echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
            echo "\" class=\"form-control\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
            echo "\" autocomplete=\"off\" />
\t\t\t\t\t";
        } else {
            // line 42
            echo "\t\t\t\t\t<strong>";
            echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
            echo "</strong>
\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 46
        if ((isset($context["S_CHANGE_PASSWORD"]) ? $context["S_CHANGE_PASSWORD"] : null)) {
            // line 47
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"new_password\" class=\"control-label col-md-4\">";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("NEW_PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input type=\"password\" name=\"new_password\" id=\"new_password\" maxlength=\"255\" value=\"";
            // line 50
            echo (isset($context["NEW_PASSWORD"]) ? $context["NEW_PASSWORD"] : null);
            echo "\" class=\"form-control\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("CHANGE_PASSWORD");
            echo "\" autocomplete=\"off\" />
\t\t\t\t\t\t<span class=\"help-block\">";
            // line 51
            echo $this->env->getExtension('phpbb')->lang("CHANGE_PASSWORD_EXPLAIN");
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"password_confirm\" class=\"control-label col-md-4\">";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input type=\"password\" name=\"password_confirm\" id=\"password_confirm\" maxlength=\"255\" value=\"";
            // line 57
            echo (isset($context["PASSWORD_CONFIRM"]) ? $context["PASSWORD_CONFIRM"] : null);
            echo "\" class=\"form-control\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
            echo "\" autocomplete=\"off\" />
\t\t\t\t\t\t<span class=\"help-block\">";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD_EXPLAIN");
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 62
        echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"cur_password\" class=\"control-label col-md-4\">";
        // line 63
        echo $this->env->getExtension('phpbb')->lang("CURRENT_PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<input type=\"password\" name=\"cur_password\" id=\"cur_password\" maxlength=\"255\" value=\"";
        // line 65
        echo (isset($context["CUR_PASSWORD"]) ? $context["CUR_PASSWORD"] : null);
        echo "\" class=\"form-control\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("CURRENT_PASSWORD");
        echo "\" />
\t\t\t\t\t<span class=\"help-block\">
\t\t\t\t\t\t";
        // line 67
        echo $this->env->getExtension('phpbb')->lang("CURRENT_PASSWORD_EXPLAIN");
        echo "
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 71
        // line 72
        echo "\t\t\t</fieldset>
\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
        // line 76
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-danger\" />&nbsp;
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 77
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"btn btn-success\" />
\t\t\t\t";
        // line 78
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>

";
        // line 84
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_reg_details.html", 84)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_reg_details.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 84,  231 => 78,  227 => 77,  221 => 76,  215 => 72,  214 => 71,  207 => 67,  200 => 65,  194 => 63,  191 => 62,  184 => 58,  178 => 57,  172 => 55,  165 => 51,  159 => 50,  153 => 48,  150 => 47,  148 => 46,  144 => 44,  138 => 42,  130 => 40,  128 => 39,  121 => 36,  114 => 32,  111 => 31,  105 => 29,  97 => 27,  95 => 26,  88 => 23,  82 => 22,  79 => 21,  77 => 20,  71 => 19,  68 => 18,  62 => 16,  59 => 15,  53 => 13,  51 => 12,  44 => 8,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="ucp" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* */
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title">*/
/* 				{L_TITLE}*/
/* 			</h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<!-- IF S_FORCE_PASSWORD -->*/
/* 				<p class="alert alert-danger">{L_FORCE_PASSWORD_EXPLAIN}</p>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_FORCE_PASSWORD -->*/
/* 				<p class="alert alert-danger">{L_FORCE_PASSWORD_EXPLAIN}</p>*/
/* 			<!-- ENDIF -->*/
/* 			<fieldset class="form-horizontal">*/
/* 			<!-- IF ERROR --><p class="alert alert-danger">{ERROR}</p><!-- ENDIF -->*/
/* 			<!-- EVENT ucp_profile_register_details_before -->*/
/* 			<div class="form-group">*/
/* 				<label class="control-label col-md-4"<!-- IF S_CHANGE_USERNAME -->for="username"<!-- ENDIF -->>*/
/* 					{L_USERNAME}{L_COLON}*/
/* 				</label>*/
/* 				<div class="col-md-6">*/
/* 					<!-- IF S_CHANGE_USERNAME -->*/
/* 					<input type="text" name="username" id="username" value="{USERNAME}" class="form-control" title="{L_USERNAME}" />*/
/* 					<!-- ELSE -->*/
/* 					<strong>{USERNAME}</strong>*/
/* 					<!-- ENDIF -->*/
/* */
/* 					<span class="help-block">{L_USERNAME_EXPLAIN}</span>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="form-group">*/
/* 				<label for="email" class="control-label col-md-4">{L_EMAIL_ADDRESS}{L_COLON}</label>*/
/* */
/* 				<div class="col-md-6">*/
/* 					<!-- IF S_CHANGE_EMAIL -->*/
/* 					<input type="email" name="email" id="email" maxlength="100" value="{EMAIL}" class="form-control" title="{L_EMAIL_ADDRESS}" autocomplete="off" />*/
/* 					<!-- ELSE -->*/
/* 					<strong>{EMAIL}</strong>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- IF S_CHANGE_PASSWORD -->*/
/* 				<div class="form-group">*/
/* 					<label for="new_password" class="control-label col-md-4">{L_NEW_PASSWORD}{L_COLON}</label>*/
/* 					<div class="col-md-6">*/
/* 						<input type="password" name="new_password" id="new_password" maxlength="255" value="{NEW_PASSWORD}" class="form-control" title="{L_CHANGE_PASSWORD}" autocomplete="off" />*/
/* 						<span class="help-block">{L_CHANGE_PASSWORD_EXPLAIN}</span>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label for="password_confirm" class="control-label col-md-4">{L_CONFIRM_PASSWORD}{L_COLON}</label>*/
/* 					<div class="col-md-6">*/
/* 						<input type="password" name="password_confirm" id="password_confirm" maxlength="255" value="{PASSWORD_CONFIRM}" class="form-control" title="{L_CONFIRM_PASSWORD}" autocomplete="off" />*/
/* 						<span class="help-block">{L_CONFIRM_PASSWORD_EXPLAIN}</span>*/
/* 					</div>*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* 			<div class="form-group">*/
/* 				<label for="cur_password" class="control-label col-md-4">{L_CURRENT_PASSWORD}{L_COLON}</label>*/
/* 				<div class="col-md-6">*/
/* 					<input type="password" name="cur_password" id="cur_password" maxlength="255" value="{CUR_PASSWORD}" class="form-control" title="{L_CURRENT_PASSWORD}" />*/
/* 					<span class="help-block">*/
/* 						{L_CURRENT_PASSWORD_EXPLAIN}*/
/* 					</span>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- EVENT ucp_profile_register_details_after -->*/
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
