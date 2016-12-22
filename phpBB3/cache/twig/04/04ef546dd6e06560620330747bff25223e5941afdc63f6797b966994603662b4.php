<?php

/* simple_header.html */
class __TwigTemplate_f2469b4bffac2e3e14ea4245bde9da9cccc05f008625157b5ae2a065a6df6964 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
\t<head>
\t\t<meta charset=\"utf-8\" />
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 5
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/images/favicon.ico\" />
\t\t";
        // line 6
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "RESPONSIVE", array()) == 1)) {
            // line 7
            echo "\t\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
\t\t";
        }
        // line 9
        echo "\t\t<meta name=\"author\" content=\"Florian Gareis\" />
\t\t";
        // line 10
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
\t\t<title>";
        // line 11
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo " &bull; ";
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " &bull; ";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " &bull; ";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</title>

\t\t";
        // line 13
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            // line 14
            echo "\t\t<script>
\t\t\tWebFontConfig = {
\t\t\t\tgoogle: {
\t\t\t\t\tfamilies: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']
\t\t\t\t}
\t\t\t};

\t\t\t(function(d) {
\t\t\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\t\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\t\t\twf.async = true;
\t\t\t\ts.parentNode.insertBefore(wf, s);
\t\t\t})(document);
\t\t</script>
\t\t";
        }
        // line 29
        echo "\t\t<link href=\"";
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 30
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/responsive.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" media=\"only screen and (max-width: 700px)\">

\t\t";
        // line 32
        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
            // line 33
            echo "\t\t\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/bidi.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t\t";
        }
        // line 35
        echo "
\t\t<!--[if lte IE 8]>
\t\t\t<link href=\"";
        // line 37
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/tweaks.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t\t<![endif]-->

\t\t";
        // line 40
        $value = 1;
        $context['definition']->set('POPUP', $value);
        // line 41
        echo "
\t\t";
        // line 42
        // line 43
        echo "
\t\t";
        // line 44
        $location = "additional_files.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("additional_files.html", "simple_header.html", 44)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 45
        echo "
\t\t";
        // line 46
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

\t\t";
        // line 48
        // line 49
        echo "
\t</head>

\t<body id=\"phpbb\" class=\"nojs ";
        // line 52
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo "\">

\t";
        // line 54
        // line 55
        echo "
\t<div id=\"wrap\" class=\"container\">
\t\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t\t<div id=\"page-body\" role=\"main\">
";
    }

    public function getTemplateName()
    {
        return "simple_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 55,  157 => 54,  150 => 52,  145 => 49,  144 => 48,  139 => 46,  136 => 45,  124 => 44,  121 => 43,  120 => 42,  117 => 41,  114 => 40,  106 => 37,  102 => 35,  94 => 33,  92 => 32,  85 => 30,  80 => 29,  63 => 14,  61 => 13,  47 => 11,  43 => 10,  40 => 9,  36 => 7,  34 => 6,  30 => 5,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* 	<head>*/
/* 		<meta charset="utf-8" />*/
/* 		<link rel="shortcut icon" href="{T_THEME_PATH}/images/favicon.ico" />*/
/* 		<!-- IF $RESPONSIVE == 1 -->*/
/* 			<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">*/
/* 		<!-- ENDIF -->*/
/* 		<meta name="author" content="Florian Gareis" />*/
/* 		{META}*/
/* 		<title>{SITENAME} &bull; <!-- IF S_IN_MCP -->{L_MCP} &bull; <!-- ELSEIF S_IN_UCP -->{L_UCP} &bull; <!-- ENDIF -->{PAGE_TITLE}</title>*/
/* */
/* 		<!-- IF S_ALLOW_CDN -->*/
/* 		<script>*/
/* 			WebFontConfig = {*/
/* 				google: {*/
/* 					families: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']*/
/* 				}*/
/* 			};*/
/* */
/* 			(function(d) {*/
/* 				var wf = d.createElement('script'), s = d.scripts[0];*/
/* 				wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';*/
/* 				wf.async = true;*/
/* 				s.parentNode.insertBefore(wf, s);*/
/* 			})(document);*/
/* 		</script>*/
/* 		<!-- ENDIF -->*/
/* 		<link href="{T_STYLESHEET_LINK}" rel="stylesheet">*/
/* 		<link href="{T_THEME_PATH}/responsive.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" media="only screen and (max-width: 700px)">*/
/* */
/* 		<!-- IF S_CONTENT_DIRECTION eq 'rtl' -->*/
/* 			<link href="{T_THEME_PATH}/bidi.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!--[if lte IE 8]>*/
/* 			<link href="{T_THEME_PATH}/tweaks.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 		<![endif]-->*/
/* */
/* 		<!-- DEFINE $POPUP = 1 -->*/
/* */
/* 		<!-- EVENT simple_header_head_append -->*/
/* */
/* 		<!-- INCLUDE additional_files.html -->*/
/* */
/* 		{$STYLESHEETS}*/
/* */
/* 		<!-- EVENT simple_header_stylesheets_after -->*/
/* */
/* 	</head>*/
/* */
/* 	<body id="phpbb" class="nojs {S_CONTENT_DIRECTION} {BODY_CLASS}">*/
/* */
/* 	<!-- EVENT simple_header_body_before -->*/
/* */
/* 	<div id="wrap" class="container">*/
/* 		<a id="top" class="anchor" accesskey="t"></a>*/
/* 		<div id="page-body" role="main">*/
/* */
