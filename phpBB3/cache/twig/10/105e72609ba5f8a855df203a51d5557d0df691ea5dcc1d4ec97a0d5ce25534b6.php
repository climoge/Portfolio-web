<?php

/* memberlist_email.html */
class __TwigTemplate_244a138d0398ac39aeec7895a7140b9d9108bc78c9bc428eacf2e31c5c247a94 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "memberlist_email.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ((isset($context["S_CONTACT_ADMIN"]) ? $context["S_CONTACT_ADMIN"] : null)) {
            // line 4
            echo "\t<h2 class=\"page-tile\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_ADMIN");
            echo "</h2>
";
        } elseif (        // line 5
(isset($context["S_SEND_USER"]) ? $context["S_SEND_USER"] : null)) {
            // line 6
            echo "\t<h2 class=\"page-tile\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL_USER");
            echo "</h2>
";
        } else {
            // line 8
            echo "\t<h2 class=\"page-tile\">";
            echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
            echo "</h2>
";
        }
        // line 10
        echo "
<form method=\"post\" action=\"";
        // line 11
        echo (isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null);
        echo "\" id=\"post\" class=\"form-horizontal\">

\t";
        // line 13
        if ((isset($context["CONTACT_INFO"]) ? $context["CONTACT_INFO"] : null)) {
            // line 14
            echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-body\">
\t\t\t\t";
            // line 16
            echo (isset($context["CONTACT_INFO"]) ? $context["CONTACT_INFO"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 20
        echo "
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 23
        if ((isset($context["ERROR_MESSAGE"]) ? $context["ERROR_MESSAGE"] : null)) {
            echo "<p class=\"alert alert-danger\">";
            echo (isset($context["ERROR_MESSAGE"]) ? $context["ERROR_MESSAGE"] : null);
            echo "</p>";
        }
        // line 24
        echo "\t\t\t<fieldset class=\"form-horizontal\">
\t\t\t";
        // line 25
        if ((isset($context["S_SEND_USER"]) ? $context["S_SEND_USER"] : null)) {
            // line 26
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label col-md-4\">";
            // line 27
            echo $this->env->getExtension('phpbb')->lang("RECIPIENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t";
            // line 29
            echo (isset($context["USERNAME_FULL"]) ? $context["USERNAME_FULL"] : null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"subject\" class=\"control-label col-md-4\">";
            // line 33
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"subject\" id=\"subject\" size=\"50\" tabindex=\"1\" value=\"";
            // line 35
            echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
            echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        } elseif (        // line 38
(isset($context["S_CONTACT_ADMIN"]) ? $context["S_CONTACT_ADMIN"] : null)) {
            // line 39
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"control-label col-md-4\">";
            // line 40
            echo $this->env->getExtension('phpbb')->lang("RECIPIENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t";
            // line 42
            echo $this->env->getExtension('phpbb')->lang("ADMINISTRATOR");
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 45
            if ( !(isset($context["S_IS_REGISTERED"]) ? $context["S_IS_REGISTERED"] : null)) {
                // line 46
                echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\" class=\"control-label col-md-4\">";
                // line 47
                echo $this->env->getExtension('phpbb')->lang("SENDER_EMAIL_ADDRESS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"email\" id=\"email\" size=\"50\" maxlength=\"100\" tabindex=\"1\" value=\"";
                // line 49
                echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
                echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"name\" class=\"control-label col-md-4\">";
                // line 53
                echo $this->env->getExtension('phpbb')->lang("SENDER_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"name\" id=\"name\" size=\"50\" tabindex=\"2\" value=\"";
                // line 55
                echo (isset($context["NAME"]) ? $context["NAME"] : null);
                echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 59
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"subject\" class=\"control-label col-md-4\">";
            // line 60
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"subject\" id=\"subject\" size=\"50\" tabindex=\"3\" value=\"";
            // line 62
            echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
            echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"email\" class=\"control-label col-md-4\">";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"email\" id=\"email\" size=\"50\" maxlength=\"100\" tabindex=\"1\" value=\"";
            // line 69
            echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
            echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"name\" class=\"control-label col-md-4\">";
            // line 73
            echo $this->env->getExtension('phpbb')->lang("REAL_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"name\" id=\"name\" size=\"50\" tabindex=\"3\" value=\"";
            // line 75
            echo (isset($context["NAME"]) ? $context["NAME"] : null);
            echo "\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"lang\" class=\"control-label col-md-4\">";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("DEST_LANG");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<select name=\"lang\" class=\"form-control\">";
            // line 81
            echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
            echo "</select>
\t\t\t\t\t\t<span class=\"help-block\">";
            // line 82
            echo $this->env->getExtension('phpbb')->lang("DEST_LANG_EXPLAIN");
            echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 86
        echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"message\" class=\"control-label col-md-4\">";
        // line 87
        echo $this->env->getExtension('phpbb')->lang("MESSAGE_BODY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<textarea class=\"form-control\" name=\"message\" id=\"message\" rows=\"15\" cols=\"76\" tabindex=\"4\">";
        // line 89
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo "</textarea>
\t\t\t\t\t<span class=\"help-block\">";
        // line 90
        echo $this->env->getExtension('phpbb')->lang("EMAIL_BODY_EXPLAIN");
        echo "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 93
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 94
            echo "\t\t\t\t<div class=\"checkbox col-md-offset-4\">
\t\t\t\t\t<label for=\"cc_sender\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"cc_sender\" id=\"cc_sender\" value=\"1\" checked=\"checked\" tabindex=\"5\" /> ";
            // line 96
            echo $this->env->getExtension('phpbb')->lang("CC_SENDER");
            echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t";
        }
        // line 100
        echo "\t\t\t</fieldset>
\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<div class=\"text-center\">
\t\t\t\t<input type=\"submit\" tabindex=\"6\" name=\"submit\" class=\"btn btn-success\" value=\"";
        // line 104
        echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL");
        echo "\" />
\t\t\t\t";
        // line 105
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</form>

";
        // line 111
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_email.html", 111)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_email.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 111,  272 => 105,  268 => 104,  262 => 100,  255 => 96,  251 => 94,  249 => 93,  243 => 90,  239 => 89,  233 => 87,  230 => 86,  223 => 82,  219 => 81,  213 => 79,  206 => 75,  200 => 73,  193 => 69,  187 => 67,  184 => 66,  177 => 62,  171 => 60,  168 => 59,  161 => 55,  155 => 53,  148 => 49,  142 => 47,  139 => 46,  137 => 45,  131 => 42,  125 => 40,  122 => 39,  120 => 38,  114 => 35,  108 => 33,  101 => 29,  95 => 27,  92 => 26,  90 => 25,  87 => 24,  81 => 23,  76 => 20,  69 => 16,  65 => 14,  63 => 13,  58 => 11,  55 => 10,  49 => 8,  43 => 6,  41 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- IF S_CONTACT_ADMIN-->*/
/* 	<h2 class="page-tile">{L_CONTACT_ADMIN}</h2>*/
/* <!-- ELSEIF S_SEND_USER -->*/
/* 	<h2 class="page-tile">{L_SEND_EMAIL_USER}</h2>*/
/* <!-- ELSE -->*/
/* 	<h2 class="page-tile">{L_EMAIL_TOPIC}</h2>*/
/* <!-- ENDIF -->*/
/* */
/* <form method="post" action="{S_POST_ACTION}" id="post" class="form-horizontal">*/
/* */
/* 	<!-- IF CONTACT_INFO -->*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-body">*/
/* 				{CONTACT_INFO}*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			<!-- IF ERROR_MESSAGE --><p class="alert alert-danger">{ERROR_MESSAGE}</p><!-- ENDIF -->*/
/* 			<fieldset class="form-horizontal">*/
/* 			<!-- IF S_SEND_USER -->*/
/* 				<div class="form-group">*/
/* 					<label class="control-label col-md-4">{L_RECIPIENT}{L_COLON}</label>*/
/* 					<div class="col-md-6">*/
/* 						{USERNAME_FULL}*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label for="subject" class="control-label col-md-4">{L_SUBJECT}{L_COLON}</label>*/
/* 					<div class="col-md-6">*/
/* 						<input class="form-control" type="text" name="subject" id="subject" size="50" tabindex="1" value="{SUBJECT}" />*/
/* 					</div>*/
/* 				</div>*/
/* 			<!-- ELSEIF S_CONTACT_ADMIN-->*/
/* 				<div class="form-group">*/
/* 					<label class="control-label col-md-4">{L_RECIPIENT}{L_COLON}</label>*/
/* 					<div class="col-md-6">*/
/* 						{L_ADMINISTRATOR}*/
/* 					</div>*/
/* 				</div>*/
/* 				<!-- IF not S_IS_REGISTERED -->*/
/* 					<div class="form-group">*/
/* 						<label for="email" class="control-label col-md-4">{L_SENDER_EMAIL_ADDRESS}{L_COLON}</label>*/
/* 						<div class="col-md-6">*/
/* 							<input class="form-control" type="email" name="email" id="email" size="50" maxlength="100" tabindex="1" value="{EMAIL}" />*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="form-group">*/
/* 						<label for="name" class="control-label col-md-4">{L_SENDER_NAME}{L_COLON}</label>*/
/* 						<div class="col-md-6">*/
/* 							<input class="form-control" type="text" name="name" id="name" size="50" tabindex="2" value="{NAME}" />*/
/* 						</div>*/
/* 					</div>*/
/* 				<!-- ENDIF -->*/
/* 				<div class="form-group">*/
/* 					<label for="subject" class="control-label col-md-4">{L_SUBJECT}{L_COLON}</label>*/
/* 					<div class="col-md-6">*/
/* 						<input class="form-control" type="text" name="subject" id="subject" size="50" tabindex="3" value="{SUBJECT}" />*/
/* 					</div>*/
/* 				</div>*/
/* 			<!-- ELSE -->*/
/* 				<div class="form-group">*/
/* 					<label for="email" class="control-label col-md-4">{L_EMAIL_ADDRESS}{L_COLON}</label>*/
/* 					<div class="col-md-6">*/
/* 						<input class="form-control" type="email" name="email" id="email" size="50" maxlength="100" tabindex="1" value="{EMAIL}" />*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label for="name" class="control-label col-md-4">{L_REAL_NAME}{L_COLON}</label>*/
/* 					<div class="col-md-6">*/
/* 						<input class="form-control" type="text" name="name" id="name" size="50" tabindex="3" value="{NAME}" />*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label for="lang" class="control-label col-md-4">{L_DEST_LANG}{L_COLON}</label>*/
/* 					<div class="col-md-6">*/
/* 						<select name="lang" class="form-control">{S_LANG_OPTIONS}</select>*/
/* 						<span class="help-block">{L_DEST_LANG_EXPLAIN}</span>*/
/* 					</div>*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* 			<div class="form-group">*/
/* 				<label for="message" class="control-label col-md-4">{L_MESSAGE_BODY}{L_COLON}</label>*/
/* 				<div class="col-md-6">*/
/* 					<textarea class="form-control" name="message" id="message" rows="15" cols="76" tabindex="4">{MESSAGE}</textarea>*/
/* 					<span class="help-block">{L_EMAIL_BODY_EXPLAIN}</span>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- IF S_REGISTERED_USER -->*/
/* 				<div class="checkbox col-md-offset-4">*/
/* 					<label for="cc_sender">*/
/* 						<input type="checkbox" name="cc_sender" id="cc_sender" value="1" checked="checked" tabindex="5" /> {L_CC_SENDER}*/
/* 					</label>*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* 			</fieldset>*/
/* 		</div>*/
/* 		<div class="panel-footer">*/
/* 			<div class="text-center">*/
/* 				<input type="submit" tabindex="6" name="submit" class="btn btn-success" value="{L_SEND_EMAIL}" />*/
/* 				{S_FORM_TOKEN}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
