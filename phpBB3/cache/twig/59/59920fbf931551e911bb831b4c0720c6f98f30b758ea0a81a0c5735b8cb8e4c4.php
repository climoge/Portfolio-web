<?php

/* confirm_body.html */
class __TwigTemplate_377a70b2895f9a93d2c5b4a948de753a7b1d1a45827808a24a45064919c5fc16 extends Twig_Template
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
        if ((isset($context["S_AJAX_REQUEST"]) ? $context["S_AJAX_REQUEST"] : null)) {
            // line 2
            echo "
\t<form action=\"";
            // line 3
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">";
            // line 6
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h3>
\t\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<p>";
            // line 9
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>
\t\t</div>
\t\t<div class=\"panel-footer\">
\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t<input type=\"button\" name=\"cancel\" value=\"";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"btn btn-danger\" />
\t\t\t\t<input type=\"button\" name=\"confirm\" value=\"";
            // line 14
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"btn btn-success\" />
\t\t\t</fieldset>
\t\t</div>
\t</form>

";
        } else {
            // line 20
            echo "
\t";
            // line 21
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "confirm_body.html", 21)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 22
            echo "
\t<form id=\"confirm\" action=\"";
            // line 23
            echo (isset($context["S_CONFIRM_ACTION"]) ? $context["S_CONFIRM_ACTION"] : null);
            echo "\" method=\"post\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">";
            // line 26
            echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
            echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<p>";
            // line 29
            echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
            echo "</p>
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t";
            // line 33
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t\t<input type=\"submit\" name=\"cancel\" value=\"";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "\" class=\"btn btn-danger\" />
\t\t\t\t\t<input type=\"submit\" name=\"confirm\" value=\"";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "\" class=\"btn btn-success\" />
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t</div>
\t\t";
            // line 39
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</form>

\t";
            // line 42
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "confirm_body.html", 42)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 43
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "confirm_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  114 => 42,  108 => 39,  101 => 35,  97 => 34,  93 => 33,  86 => 29,  80 => 26,  74 => 23,  71 => 22,  59 => 21,  56 => 20,  47 => 14,  43 => 13,  36 => 9,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_AJAX_REQUEST -->*/
/* */
/* 	<form action="{S_CONFIRM_ACTION}" method="post">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title">{MESSAGE_TITLE}</h3>*/
/* 			</div>*/
/* 		<div class="panel-body">*/
/* 			<p>{MESSAGE_TEXT}</p>*/
/* 		</div>*/
/* 		<div class="panel-footer">*/
/* 			<fieldset class="submit-buttons">*/
/* 				<input type="button" name="cancel" value="{L_NO}" class="btn btn-danger" />*/
/* 				<input type="button" name="confirm" value="{L_YES}" class="btn btn-success" />*/
/* 			</fieldset>*/
/* 		</div>*/
/* 	</form>*/
/* */
/* <!-- ELSE -->*/
/* */
/* 	<!-- INCLUDE overall_header.html -->*/
/* */
/* 	<form id="confirm" action="{S_CONFIRM_ACTION}" method="post">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title">{MESSAGE_TITLE}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<p>{MESSAGE_TEXT}</p>*/
/* 			</div>*/
/* 			<div class="panel-footer">*/
/* 				<fieldset class="submit-buttons">*/
/* 					{S_HIDDEN_FIELDS}*/
/* 					<input type="submit" name="cancel" value="{L_NO}" class="btn btn-danger" />*/
/* 					<input type="submit" name="confirm" value="{L_YES}" class="btn btn-success" />*/
/* 				</fieldset>*/
/* 			</div>*/
/* 		</div>*/
/* 		{S_FORM_TOKEN}*/
/* 	</form>*/
/* */
/* 	<!-- INCLUDE overall_footer.html -->*/
/* */
/* <!-- ENDIF -->*/
/* */
