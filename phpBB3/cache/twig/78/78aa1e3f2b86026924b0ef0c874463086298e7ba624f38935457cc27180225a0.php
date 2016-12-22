<?php

/* ucp_agreement.html */
class __TwigTemplate_a3881a1a7b500b9b1b3a23dafe8489a5d84371e10c04801e47e4d11526d7fca4 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "ucp_agreement.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null))) {
            // line 4
            echo "\t";
            if ((isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null)) {
                // line 5
                echo "\t\t<script type=\"text/javascript\">
\t\t// <![CDATA[
\t\t\t/**
\t\t\t* Change language
\t\t\t*/
\t\t\tfunction change_language(lang_iso)
\t\t\t{
\t\t\t\tdocument.cookie = '";
                // line 12
                echo (isset($context["COOKIE_NAME"]) ? $context["COOKIE_NAME"] : null);
                echo "_lang=' + lang_iso + '; path=";
                echo (isset($context["COOKIE_PATH"]) ? $context["COOKIE_PATH"] : null);
                echo "';
\t\t\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\t\t\tdocument.forms['register'].submit();
\t\t\t}

\t\t// ]]>
\t\t</script>
\t\t<form method=\"post\" action=\"";
                // line 19
                echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
                echo "\" id=\"register\">
\t\t\t<p class=\"rightside\">
\t\t\t\t<label for=\"lang\">";
                // line 21
                echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
                echo "\">";
                echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
                echo "</select>
\t\t\t\t";
                // line 22
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t</p>
\t\t\t";
                // line 24
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t</form>
\t\t<div class=\"clearfix\"></div>
\t";
            }
            // line 28
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
            echo "\" id=\"agreement\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title sitename-title\">";
            // line 31
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
            echo $this->env->getExtension('phpbb')->lang("REGISTRATION");
            echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t";
            // line 34
            // line 35
            echo "\t\t\t\t<p>";
            if ((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("COPPA_BIRTHDAY");
            } else {
                echo $this->env->getExtension('phpbb')->lang("TERMS_OF_USE");
            }
            echo "</p>
\t\t\t\t";
            // line 36
            // line 37
            echo "\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t";
            // line 40
            if ((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null)) {
                // line 41
                echo "\t\t\t\t\t\t<strong><a href=\"";
                echo (isset($context["U_COPPA_NO"]) ? $context["U_COPPA_NO"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo $this->env->getExtension('phpbb')->lang("COPPA_NO");
                echo "</a></strong>&nbsp; <a href=\"";
                echo (isset($context["U_COPPA_YES"]) ? $context["U_COPPA_YES"] : null);
                echo "\" class=\"btn btn-danger\">";
                echo $this->env->getExtension('phpbb')->lang("COPPA_YES");
                echo "</a>
\t\t\t\t\t";
            } else {
                // line 43
                echo "\t\t\t\t\t\t<input type=\"submit\" name=\"not_agreed\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("NOT_AGREE");
                echo "\" class=\"btn btn-danger btn-sm\" />
\t\t\t\t\t\t<input type=\"submit\" name=\"agreed\" id=\"agreed\" value=\"";
                // line 44
                echo $this->env->getExtension('phpbb')->lang("AGREE");
                echo "\" class=\"btn btn-success btn-sm\" />
\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t";
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t</div>
\t\t";
            // line 50
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</form>
";
        } elseif (        // line 52
(isset($context["S_AGREEMENT"]) ? $context["S_AGREEMENT"] : null)) {
            // line 53
            echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title sitename-title\">";
            // line 55
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
            echo (isset($context["AGREEMENT_TITLE"]) ? $context["AGREEMENT_TITLE"] : null);
            echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<p>";
            // line 58
            echo (isset($context["AGREEMENT_TEXT"]) ? $context["AGREEMENT_TEXT"] : null);
            echo "</p>
\t\t\t<hr class=\"dashed\" />
\t\t\t<p><a href=\"";
            // line 60
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" class=\"btn btn-danger\">";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a></p>
\t\t</div>
\t</div>
";
        }
        // line 64
        echo "
";
        // line 65
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_agreement.html", 65)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_agreement.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 65,  182 => 64,  173 => 60,  168 => 58,  160 => 55,  156 => 53,  154 => 52,  149 => 50,  141 => 46,  136 => 44,  131 => 43,  119 => 41,  117 => 40,  112 => 37,  111 => 36,  102 => 35,  101 => 34,  93 => 31,  86 => 28,  79 => 24,  74 => 22,  65 => 21,  60 => 19,  48 => 12,  39 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- IF S_SHOW_COPPA or S_REGISTRATION -->*/
/* 	<!-- IF S_LANG_OPTIONS -->*/
/* 		<script type="text/javascript">*/
/* 		// <![CDATA[*/
/* 			/***/
/* 			* Change language*/
/* 			*//* */
/* 			function change_language(lang_iso)*/
/* 			{*/
/* 				document.cookie = '{COOKIE_NAME}_lang=' + lang_iso + '; path={COOKIE_PATH}';*/
/* 				document.forms['register'].change_lang.value = lang_iso;*/
/* 				document.forms['register'].submit();*/
/* 			}*/
/* */
/* 		// ]]>*/
/* 		</script>*/
/* 		<form method="post" action="{S_UCP_ACTION}" id="register">*/
/* 			<p class="rightside">*/
/* 				<label for="lang">{L_LANGUAGE}{L_COLON}</label><select name="lang" id="lang" onchange="change_language(this.value); return false;" title="{L_LANGUAGE}">{S_LANG_OPTIONS}</select>*/
/* 				{S_HIDDEN_FIELDS}*/
/* 			</p>*/
/* 			{S_FORM_TOKEN}*/
/* 		</form>*/
/* 		<div class="clearfix"></div>*/
/* 	<!-- ENDIF -->*/
/* 	<form method="post" action="{S_UCP_ACTION}" id="agreement">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title sitename-title">{SITENAME} - {L_REGISTRATION}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<!-- EVENT ucp_agreement_terms_before -->*/
/* 				<p><!-- IF S_SHOW_COPPA -->{L_COPPA_BIRTHDAY}<!-- ELSE -->{L_TERMS_OF_USE}<!-- ENDIF --></p>*/
/* 				<!-- EVENT ucp_agreement_terms_after -->*/
/* 			</div>*/
/* 			<div class="panel-footer">*/
/* 				<fieldset class="submit-buttons">*/
/* 					<!-- IF S_SHOW_COPPA -->*/
/* 						<strong><a href="{U_COPPA_NO}" class="btn btn-primary">{L_COPPA_NO}</a></strong>&nbsp; <a href="{U_COPPA_YES}" class="btn btn-danger">{L_COPPA_YES}</a>*/
/* 					<!-- ELSE -->*/
/* 						<input type="submit" name="not_agreed" value="{L_NOT_AGREE}" class="btn btn-danger btn-sm" />*/
/* 						<input type="submit" name="agreed" id="agreed" value="{L_AGREE}" class="btn btn-success btn-sm" />*/
/* 					<!-- ENDIF -->*/
/* 					{S_HIDDEN_FIELDS}*/
/* 				</fieldset>*/
/* 			</div>*/
/* 		</div>*/
/* 		{S_FORM_TOKEN}*/
/* 	</form>*/
/* <!-- ELSEIF S_AGREEMENT -->*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title sitename-title">{SITENAME} - {AGREEMENT_TITLE}</h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<p>{AGREEMENT_TEXT}</p>*/
/* 			<hr class="dashed" />*/
/* 			<p><a href="{U_BACK}" class="btn btn-danger">{L_BACK}</a></p>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
