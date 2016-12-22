<?php

/* ucp_zebra_friends.html */
class __TwigTemplate_2503049df499f19a1b5f2f84a4a13f3faa266b1a44810c1cf8c7b1c67f46aa7a extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_zebra_friends.html", 1)->display($context);
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
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"alert alert-info\">";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("FRIENDS_EXPLAIN");
        echo "</div>
\t\t\t<fieldset>
\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t";
        // line 12
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"alert alert-danger\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 13
        echo "\t\t\t\t\t";
        // line 14
        echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label col-md-4\" ";
        // line 15
        if ((isset($context["S_USERNAME_OPTIONS"]) ? $context["S_USERNAME_OPTIONS"] : null)) {
            echo "for=\"usernames\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb')->lang("YOUR_FRIENDS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t";
        // line 17
        if ((isset($context["S_USERNAME_OPTIONS"]) ? $context["S_USERNAME_OPTIONS"] : null)) {
            // line 18
            echo "\t\t\t\t\t\t\t\t<select name=\"usernames[]\" id=\"usernames\" multiple=\"multiple\" size=\"5\">";
            echo (isset($context["S_USERNAME_OPTIONS"]) ? $context["S_USERNAME_OPTIONS"] : null);
            echo "</select>
\t\t\t\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
            echo $this->env->getExtension('phpbb')->lang("NO_FRIENDS");
            echo "</p>
\t\t\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t\t\t<span class=\"help-block\">";
        echo $this->env->getExtension('phpbb')->lang("YOUR_FRIENDS_EXPLAIN");
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 25
        // line 26
        echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"control-label col-md-4\" for=\"add\">";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("ADD_FRIENDS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<textarea name=\"add\" id=\"add\" rows=\"3\" cols=\"30\" class=\"form-control\">";
        // line 29
        echo (isset($context["USERNAMES"]) ? $context["USERNAMES"] : null);
        echo "</textarea>
\t\t\t\t\t\t\t<div class=\"spacer\"></div>
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm btn-primary\" href=\"";
        // line 31
        echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
        echo "</a>
\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("ADD_FRIENDS_EXPLAIN");
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
        // line 40
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t\t\t<input type=\"reset\" value=\"";
        // line 41
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-danger\" />
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 42
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"btn btn-success\" />
\t\t\t\t";
        // line 43
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>

";
        // line 49
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_zebra_friends.html", 49)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_zebra_friends.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 49,  140 => 43,  136 => 42,  132 => 41,  128 => 40,  117 => 32,  111 => 31,  106 => 29,  100 => 27,  97 => 26,  96 => 25,  89 => 22,  83 => 20,  77 => 18,  75 => 17,  65 => 15,  62 => 14,  60 => 13,  54 => 12,  48 => 9,  42 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="ucp" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title">{L_TITLE}</h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<div class="alert alert-info">{L_FRIENDS_EXPLAIN}</div>*/
/* 			<fieldset>*/
/* 				<div class="form-horizontal">*/
/* 					<!-- IF ERROR --><p class="alert alert-danger">{ERROR}</p><!-- ENDIF -->*/
/* 					<!-- EVENT ucp_friend_list_before -->*/
/* 					<div class="form-group">*/
/* 						<label class="control-label col-md-4" <!-- IF S_USERNAME_OPTIONS -->for="usernames"<!-- ENDIF -->>{L_YOUR_FRIENDS}{L_COLON}</label>*/
/* 						<div class="col-md-8">*/
/* 							<!-- IF S_USERNAME_OPTIONS -->*/
/* 								<select name="usernames[]" id="usernames" multiple="multiple" size="5">{S_USERNAME_OPTIONS}</select>*/
/* 							<!-- ELSE -->*/
/* 								<p class="form-control-static">{L_NO_FRIENDS}</p>*/
/* 							<!-- ENDIF -->*/
/* 							<span class="help-block">{L_YOUR_FRIENDS_EXPLAIN}</span>*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- EVENT ucp_friend_list_after -->*/
/* 					<div class="form-group">*/
/* 						<label class="control-label col-md-4" for="add">{L_ADD_FRIENDS}{L_COLON}</label>*/
/* 						<div class="col-md-8">*/
/* 							<textarea name="add" id="add" rows="3" cols="30" class="form-control">{USERNAMES}</textarea>*/
/* 							<div class="spacer"></div>*/
/* 							<a class="btn btn-default btn-sm btn-primary" href="{U_FIND_USERNAME}" onclick="find_username(this.href); return false;">{L_FIND_USERNAME}</a>*/
/* 							<span class="help-block">{L_ADD_FRIENDS_EXPLAIN}</span>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</fieldset>*/
/* 		</div>*/
/* 		<div class="panel-footer">*/
/* 			<fieldset class="submit-buttons">*/
/* 				{S_HIDDEN_FIELDS}*/
/* 				<input type="reset" value="{L_RESET}" name="reset" class="btn btn-danger" />*/
/* 				<input type="submit" name="submit" value="{L_SUBMIT}" class="btn btn-success" />*/
/* 				{S_FORM_TOKEN}*/
/* 			</fieldset>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
