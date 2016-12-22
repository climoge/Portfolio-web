<?php

/* ucp_profile_avatar.html */
class __TwigTemplate_f044f80988f8c06864b8800a1a6dd9d76f54b76b3d2359a812eada274c9ceb29 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_profile_avatar.html", 1)->display($context);
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
\t\t\t";
        // line 9
        $location = "ucp_avatar_options.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_avatar_options.html", "ucp_profile_avatar.html", 9)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 10
        echo "\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t";
        // line 13
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t\t\t\t<input type=\"reset\" value=\"";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-danger\" />
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"btn btn-success\" />
\t\t\t\t";
        // line 16
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t\t</fieldset>
\t\t</div>
\t</div>
</form>

";
        // line 22
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_avatar.html", 22)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_avatar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  60 => 10,  48 => 9,  42 => 6,  34 => 3,  31 => 2,  19 => 1,);
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
/* 			<!-- INCLUDE ucp_avatar_options.html -->*/
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
