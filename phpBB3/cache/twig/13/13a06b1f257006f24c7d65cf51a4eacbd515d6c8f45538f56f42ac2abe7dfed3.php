<?php

/* ucp_remind.html */
class __TwigTemplate_fd461ee34d03956b927ffb207a43f439d6eb94951bd3aeb8d458abb160ee154a extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "ucp_remind.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form action=\"";
        // line 3
        echo (isset($context["S_PROFILE_ACTION"]) ? $context["S_PROFILE_ACTION"] : null);
        echo "\" method=\"post\" id=\"remind\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("SEND_PASSWORD");
        echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<fieldset>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t\t\t\t<div class=\"icon-addon addon-md\">
\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo "\" type=\"text\" name=\"username\" id=\"username\" size=\"25\" />
\t\t\t\t\t\t\t<label for=\"username\" class=\"fa fa-user\" rel=\"tooltip\" title=\"username\"></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6 col-md-offset-3\">
\t\t\t\t\t\t<div class=\"icon-addon addon-md\">
\t\t\t\t\t\t\t<input class=\"form-control\" placeholder=\"";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
        echo "\" type=\"text\" name=\"email\" id=\"email\" size=\"25\" maxlength=\"100\" />
\t\t\t\t\t\t\t<label for=\"email\" class=\"fa fa-envelope\" rel=\"tooltip\" title=\"email\"></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"help-block\">";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("EMAIL_REMIND");
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t";
        // line 28
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t\t\t\t<input type=\"reset\" value=\"";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-danger\" />
\t\t\t\t\t<input type=\"submit\" name=\"submit\" id=\"submit\" class=\"btn btn-success\" value=\"";
        // line 30
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" tabindex=\"2\" />
\t\t\t\t\t";
        // line 31
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>

";
        // line 38
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_remind.html", 38)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_remind.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 38,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  67 => 24,  61 => 21,  50 => 13,  40 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <form action="{S_PROFILE_ACTION}" method="post" id="remind">*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title">{L_SEND_PASSWORD}</h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<fieldset>*/
/* 				<div class="row">*/
/* 					<div class="col-md-6 col-md-offset-3">*/
/* 						<div class="icon-addon addon-md">*/
/* 							<input class="form-control" placeholder="{L_USERNAME}" type="text" name="username" id="username" size="25" />*/
/* 							<label for="username" class="fa fa-user" rel="tooltip" title="username"></label>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="row">*/
/* 					<div class="col-md-6 col-md-offset-3">*/
/* 						<div class="icon-addon addon-md">*/
/* 							<input class="form-control" placeholder="{L_EMAIL_ADDRESS}" type="text" name="email" id="email" size="25" maxlength="100" />*/
/* 							<label for="email" class="fa fa-envelope" rel="tooltip" title="email"></label>*/
/* 						</div>*/
/* 						<span class="help-block">{L_EMAIL_REMIND}</span>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="text-center">*/
/* 					{S_HIDDEN_FIELDS}*/
/* 					<input type="reset" value="{L_RESET}" name="reset" class="btn btn-danger" />*/
/* 					<input type="submit" name="submit" id="submit" class="btn btn-success" value="{L_SUBMIT}" tabindex="2" />*/
/* 					{S_FORM_TOKEN}*/
/* 				</div>*/
/* 			</fieldset>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
