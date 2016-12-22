<?php

/* overall_header.html */
class __TwigTemplate_8c193cd47b36f1071e15dacc5a5b14c7401e11c32e46ee9a71390d0ba5e6dbae extends Twig_Template
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
<html xmlns=\"http://www.w3.org/1999/xhtml\" dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\" xml:lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
\t<head>

\t";
        // line 5
        $location = "config.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("config.html", "overall_header.html", 5)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 6
        echo "
\t<link rel=\"shortcut icon\" href=\"";
        // line 7
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/images/favicon.png\" />
\t<meta charset=\"utf-8\" />
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\" />
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
\t<link rel=\"icon\" sizes=\"256x256\" href=\"";
        // line 11
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/images/favicon.png\">

\t<meta name=\"comboot-version\" content=\"1.1-rc4\">
\t<meta name=\"comboot-channel\" content=\"";
        // line 14
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "BETA", array()) == 1)) {
            echo "beta";
        } else {
            echo "stable";
        }
        echo "\">

\t";
        // line 16
        echo (isset($context["META"]) ? $context["META"] : null);
        echo "
\t<title>";
        // line 17
        if ((isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null)) {
            echo "(";
            echo (isset($context["UNREAD_NOTIFICATIONS_COUNT"]) ? $context["UNREAD_NOTIFICATIONS_COUNT"] : null);
            echo ") ";
        }
        if (( !(isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) &&  !(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
        }
        if ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo " - ";
        } elseif ((isset($context["S_IN_UCP"]) ? $context["S_IN_UCP"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("UCP");
            echo " - ";
        }
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        if (((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null) || (isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null))) {
            echo " - ";
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        }
        echo "</title>

\t";
        // line 19
        if ((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null)) {
            // line 20
            echo "\t\t";
            if ((isset($context["S_ENABLE_FEEDS_OVERALL"]) ? $context["S_ENABLE_FEEDS_OVERALL"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "\">";
            }
            // line 21
            echo "\t\t";
            if ((isset($context["S_ENABLE_FEEDS_NEWS"]) ? $context["S_ENABLE_FEEDS_NEWS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_NEWS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=news\">";
            }
            // line 22
            echo "\t\t";
            if ((isset($context["S_ENABLE_FEEDS_FORUMS"]) ? $context["S_ENABLE_FEEDS_FORUMS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=forums\">";
            }
            // line 23
            echo "\t\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS"]) ? $context["S_ENABLE_FEEDS_TOPICS"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics\">";
            }
            // line 24
            echo "\t\t";
            if ((isset($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"]) ? $context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] : null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?mode=topics_active\">";
            }
            // line 25
            echo "\t\t";
            if (((isset($context["S_ENABLE_FEEDS_FORUM"]) ? $context["S_ENABLE_FEEDS_FORUM"] : null) && (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("FORUM");
                echo " - ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "\">";
            }
            // line 26
            echo "\t\t";
            if (((isset($context["S_ENABLE_FEEDS_TOPIC"]) ? $context["S_ENABLE_FEEDS_TOPIC"] : null) && (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FEED");
                echo " - ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC");
                echo " - ";
                echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
                echo "\" href=\"";
                echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                echo "?f=";
                echo (isset($context["S_FORUM_ID"]) ? $context["S_FORUM_ID"] : null);
                echo "&amp;t=";
                echo (isset($context["S_TOPIC_ID"]) ? $context["S_TOPIC_ID"] : null);
                echo "\">";
            }
            // line 27
            echo "\t\t";
            // line 28
            echo "\t";
        }
        // line 29
        echo "
\t";
        // line 30
        if ((isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null)) {
            // line 31
            echo "\t\t<link rel=\"canonical\" href=\"";
            echo (isset($context["U_CANONICAL"]) ? $context["U_CANONICAL"] : null);
            echo "\">
\t";
        }
        // line 33
        echo "
\t<!--
\t\tphpBB style name: ComBoot Free
\t\tBased on style:   prosilver (this is the default phpBB3 style)
\t\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\t\tModified by: Florian Gareis (http://www.florian-gareis.de)
\t-->

\t";
        // line 41
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            // line 42
            echo "\t<script>
\t\tWebFontConfig = {
\t\t\tgoogle: {
\t\t\t\tfamilies: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']
\t\t\t}
\t\t};

\t\t(function(d) {
\t\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\t\twf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';
\t\t\twf.async = true;
\t\t\ts.parentNode.insertBefore(wf, s);
\t\t})(document);
\t</script>
\t";
        }
        // line 57
        echo "\t<link href=\"";
        echo (isset($context["T_STYLESHEET_LINK"]) ? $context["T_STYLESHEET_LINK"] : null);
        echo "\" rel=\"stylesheet\">

\t";
        // line 59
        if (((isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null) == "rtl")) {
            // line 60
            echo "\t\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/bidi.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 62
        echo "
\t";
        // line 63
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            // line 64
            echo "\t\t<link href=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/plupload.css?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" rel=\"stylesheet\">
\t";
        }
        // line 66
        echo "
\t<!--[if lte IE 9]>
\t\t<link href=\"";
        // line 68
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/tweaks.css?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\">
\t<![endif]-->

\t";
        // line 71
        // line 72
        echo "
\t";
        // line 73
        $location = "additional_files.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("additional_files.html", "overall_header.html", 73)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 74
        echo "
\t";
        // line 75
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

\t";
        // line 77
        // line 78
        echo "
\t</head>

\t<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 81
        echo (isset($context["SCRIPT_NAME"]) ? $context["SCRIPT_NAME"] : null);
        echo " ";
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo " ";
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            echo "logged-in";
        }
        echo "\">

\t\t";
        // line 83
        // line 84
        echo "
\t\t<div id=\"wrap\">
\t\t\t<a id=\"top\" class=\"anchor\" accesskey=\"t\"></a>
\t\t\t<div id=\"page-header\">
\t\t\t\t";
        // line 88
        // line 89
        echo "\t\t\t\t";
        $location = "navbar_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_header.html", "overall_header.html", 89)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 90
        echo "\t\t\t\t<div class=\"jumbotron no-margin-bottom no-padding-bottom\">
\t\t\t\t\t<div class=\"container text-center\">
\t\t\t\t\t\t<a id=\"logo\" class=\"logo\" href=\"";
        // line 92
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
        } else {
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        }
        echo "\" title=\"";
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("SITE_HOME");
        } else {
            echo $this->env->getExtension('phpbb')->lang("INDEX");
        }
        echo "\">";
        echo (isset($context["SITE_LOGO_IMG"]) ? $context["SITE_LOGO_IMG"] : null);
        echo "</a>
\t\t\t\t\t\t<p>";
        // line 93
        echo (isset($context["SITE_DESCRIPTION"]) ? $context["SITE_DESCRIPTION"] : null);
        echo "</p>
\t\t\t\t\t\t<p class=\"skiplink\"><a href=\"#start_here\">";
        // line 94
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a></p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 99
        // line 100
        echo "
\t\t\t<a id=\"start_here\" class=\"anchor\"></a>
\t\t\t<div class=\"container\" id=\"page-body\">
\t\t\t\t<div class=\"central-content col-md-10\">
\t\t\t\t\t<div class=\"row\" style=\"text-align: center;\">
\t\t\t\t\t\t<p style=\"color: red !important; font-weight: bold !important; font-size: 30px !important; width: 100% !important; background: white !important;\">
\t\t\t\t\t\t\tLe forum a changé d'adresse. Lors du transfert, les mots de passe n'ont pas pu être transférés, cliquez donc sur \"Mot de passe oublié\" quand votre identification aura échouée; vous recevrez un mail avec un MDP temporaire. Bisou.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t";
        // line 111
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 112
        echo "\t\t\t\t\t\t\t";
        // line 113
        echo "\t\t\t\t\t\t\t<ol class=\"breadcrumb no-margin-bottom\" id=\"nav-breadcrumbs\">
\t\t\t\t\t\t\t\t";
        // line 114
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            // line 115
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"crumb\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\"><i class=\"fa fa-home fa-fw\" aria-hidden=\"true\"></i></span></a></span></li>
\t\t\t\t\t\t\t\t";
        }
        // line 117
        echo "\t\t\t\t\t\t\t\t<li><span class=\"crumb\"";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
        echo "><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "\" data-navbar-reference=\"home\" itemprop=\"url\"><span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb')->lang("INDEX");
        echo "</span></a></span></li>
\t\t\t\t\t\t\t\t";
        // line 118
        // line 119
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 120
            echo "\t\t\t\t\t\t\t\t\t";
            // line 121
            echo "\t\t\t\t\t\t\t\t\t<li><span class=\"crumb\"";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" ";
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo " itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></span></li>
\t\t\t\t\t\t\t\t\t";
            // line 122
            // line 123
            echo "\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "\t\t\t\t\t\t\t\t";
        // line 125
        echo "\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t";
        // line 126
        // line 127
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 129
        if ((((isset($context["S_BOARD_DISABLED"]) ? $context["S_BOARD_DISABLED"] : null) && (isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) && ((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null)))) {
            // line 130
            echo "\t\t\t\t\t\t<div id=\"information\" class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<div class=\"alert alert-danger rules\">
\t\t\t\t\t\t\t\t\t<strong>";
            // line 133
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo $this->env->getExtension('phpbb')->lang("BOARD_DISABLED");
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 138
        echo "
\t\t\t\t\t";
        // line 139
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 139,  469 => 138,  458 => 133,  453 => 130,  451 => 129,  447 => 127,  446 => 126,  443 => 125,  441 => 124,  435 => 123,  434 => 122,  420 => 121,  418 => 120,  413 => 119,  412 => 118,  401 => 117,  393 => 115,  391 => 114,  388 => 113,  386 => 112,  383 => 111,  370 => 100,  369 => 99,  361 => 94,  357 => 93,  341 => 92,  337 => 90,  324 => 89,  323 => 88,  317 => 84,  316 => 83,  303 => 81,  298 => 78,  297 => 77,  292 => 75,  289 => 74,  277 => 73,  274 => 72,  273 => 71,  265 => 68,  261 => 66,  253 => 64,  251 => 63,  248 => 62,  240 => 60,  238 => 59,  232 => 57,  215 => 42,  213 => 41,  203 => 33,  197 => 31,  195 => 30,  192 => 29,  189 => 28,  187 => 27,  170 => 26,  155 => 25,  144 => 24,  133 => 23,  122 => 22,  111 => 21,  100 => 20,  98 => 19,  73 => 17,  69 => 16,  60 => 14,  54 => 11,  47 => 7,  44 => 6,  32 => 5,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml" dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}" xml:lang="{S_USER_LANG}">*/
/* 	<head>*/
/* */
/* 	<!-- INCLUDE config.html -->*/
/* */
/* 	<link rel="shortcut icon" href="{T_THEME_PATH}/images/favicon.png" />*/
/* 	<meta charset="utf-8" />*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=edge" />*/
/* 	<link rel="icon" sizes="256x256" href="{T_THEME_PATH}/images/favicon.png">*/
/* */
/* 	<meta name="comboot-version" content="1.1-rc4">*/
/* 	<meta name="comboot-channel" content="<!-- IF $BETA == 1 -->beta<!-- ELSE -->stable<!-- ENDIF -->">*/
/* */
/* 	{META}*/
/* 	<title><!-- IF UNREAD_NOTIFICATIONS_COUNT -->({UNREAD_NOTIFICATIONS_COUNT}) <!-- ENDIF --><!-- IF not S_VIEWTOPIC and not S_VIEWFORUM -->{SITENAME} - <!-- ENDIF --><!-- IF S_IN_MCP -->{L_MCP} - <!-- ELSEIF S_IN_UCP -->{L_UCP} - <!-- ENDIF -->{PAGE_TITLE}<!-- IF S_VIEWTOPIC or S_VIEWFORUM --> - {SITENAME}<!-- ENDIF --></title>*/
/* */
/* 	<!-- IF S_ENABLE_FEEDS -->*/
/* 		<!-- IF S_ENABLE_FEEDS_OVERALL --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {SITENAME}" href="{U_FEED}"><!-- ENDIF -->*/
/* 		<!-- IF S_ENABLE_FEEDS_NEWS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_NEWS}" href="{U_FEED}?mode=news"><!-- ENDIF -->*/
/* 		<!-- IF S_ENABLE_FEEDS_FORUMS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_ALL_FORUMS}" href="{U_FEED}?mode=forums"><!-- ENDIF -->*/
/* 		<!-- IF S_ENABLE_FEEDS_TOPICS --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_TOPICS_NEW}" href="{U_FEED}?mode=topics"><!-- ENDIF -->*/
/* 		<!-- IF S_ENABLE_FEEDS_TOPICS_ACTIVE --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FEED_TOPICS_ACTIVE}" href="{U_FEED}?mode=topics_active"><!-- ENDIF -->*/
/* 		<!-- IF S_ENABLE_FEEDS_FORUM and S_FORUM_ID --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_FORUM} - {FORUM_NAME}" href="{U_FEED}?f={S_FORUM_ID}"><!-- ENDIF -->*/
/* 		<!-- IF S_ENABLE_FEEDS_TOPIC and S_TOPIC_ID --><link rel="alternate" type="application/atom+xml" title="{L_FEED} - {L_TOPIC} - {TOPIC_TITLE}" href="{U_FEED}?f={S_FORUM_ID}&amp;t={S_TOPIC_ID}"><!-- ENDIF -->*/
/* 		<!-- EVENT overall_header_feeds -->*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF U_CANONICAL -->*/
/* 		<link rel="canonical" href="{U_CANONICAL}">*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!--*/
/* 		phpBB style name: ComBoot Free*/
/* 		Based on style:   prosilver (this is the default phpBB3 style)*/
/* 		Original author:  Tom Beddard ( http://www.subBlue.com/ )*/
/* 		Modified by: Florian Gareis (http://www.florian-gareis.de)*/
/* 	-->*/
/* */
/* 	<!-- IF S_ALLOW_CDN -->*/
/* 	<script>*/
/* 		WebFontConfig = {*/
/* 			google: {*/
/* 				families: ['Open+Sans:600:cyrillic-ext,latin,greek-ext,greek,vietnamese,latin-ext,cyrillic']*/
/* 			}*/
/* 		};*/
/* */
/* 		(function(d) {*/
/* 			var wf = d.createElement('script'), s = d.scripts[0];*/
/* 			wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js';*/
/* 			wf.async = true;*/
/* 			s.parentNode.insertBefore(wf, s);*/
/* 		})(document);*/
/* 	</script>*/
/* 	<!-- ENDIF -->*/
/* 	<link href="{T_STYLESHEET_LINK}" rel="stylesheet">*/
/* */
/* 	<!-- IF S_CONTENT_DIRECTION eq 'rtl' -->*/
/* 		<link href="{T_THEME_PATH}/bidi.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_PLUPLOAD -->*/
/* 		<link href="{T_THEME_PATH}/plupload.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!--[if lte IE 9]>*/
/* 		<link href="{T_THEME_PATH}/tweaks.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet">*/
/* 	<![endif]-->*/
/* */
/* 	<!-- EVENT overall_header_head_append -->*/
/* */
/* 	<!-- INCLUDE additional_files.html -->*/
/* */
/* 	{$STYLESHEETS}*/
/* */
/* 	<!-- EVENT overall_header_stylesheets_after -->*/
/* */
/* 	</head>*/
/* */
/* 	<body id="phpbb" class="nojs notouch section-{SCRIPT_NAME} {S_CONTENT_DIRECTION} {BODY_CLASS} <!-- IF S_USER_LOGGED_IN -->logged-in<!-- ENDIF -->">*/
/* */
/* 		<!-- EVENT overall_header_body_before -->*/
/* */
/* 		<div id="wrap">*/
/* 			<a id="top" class="anchor" accesskey="t"></a>*/
/* 			<div id="page-header">*/
/* 				<!-- EVENT overall_header_navbar_before -->*/
/* 				<!-- INCLUDE navbar_header.html -->*/
/* 				<div class="jumbotron no-margin-bottom no-padding-bottom">*/
/* 					<div class="container text-center">*/
/* 						<a id="logo" class="logo" href="<!-- IF U_SITE_HOME -->{U_SITE_HOME}<!-- ELSE -->{U_INDEX}<!-- ENDIF -->" title="<!-- IF U_SITE_HOME -->{L_SITE_HOME}<!-- ELSE -->{L_INDEX}<!-- ENDIF -->">{SITE_LOGO_IMG}</a>*/
/* 						<p>{SITE_DESCRIPTION}</p>*/
/* 						<p class="skiplink"><a href="#start_here">{L_SKIP}</a></p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<!-- EVENT overall_header_page_body_before -->*/
/* */
/* 			<a id="start_here" class="anchor"></a>*/
/* 			<div class="container" id="page-body">*/
/* 				<div class="central-content col-md-10">*/
/* 					<div class="row" style="text-align: center;">*/
/* 						<p style="color: red !important; font-weight: bold !important; font-size: 30px !important; width: 100% !important; background: white !important;">*/
/* 							Le forum a changé d'adresse. Lors du transfert, les mots de passe n'ont pas pu être transférés, cliquez donc sur "Mot de passe oublié" quand votre identification aura échouée; vous recevrez un mail avec un MDP temporaire. Bisou.*/
/* 						</p>*/
/* 					</div>*/
/* 					<div class="row">*/
/* 						<div class="col-md-12">*/
/* 							<!-- DEFINE $MICRODATA = ' itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""' -->*/
/* 							<!-- EVENT overall_header_breadcrumbs_before -->*/
/* 							<ol class="breadcrumb no-margin-bottom" id="nav-breadcrumbs">*/
/* 								<!-- IF U_SITE_HOME -->*/
/* 									<li><span class="crumb"{$MICRODATA}><a href="{U_SITE_HOME}" data-navbar-reference="home" itemprop="url"><span itemprop="title"><i class="fa fa-home fa-fw" aria-hidden="true"></i></span></a></span></li>*/
/* 								<!-- ENDIF -->*/
/* 								<li><span class="crumb"{$MICRODATA}><a href="{U_INDEX}" title="{L_INDEX}" data-navbar-reference="home" itemprop="url"><span itemprop="title">{L_INDEX}</span></a></span></li>*/
/* 								<!-- EVENT overall_header_breadcrumb_prepend -->*/
/* 								<!-- BEGIN navlinks -->*/
/* 									<!-- EVENT overall_header_navlink_prepend -->*/
/* 									<li><span class="crumb"{$MICRODATA}><a href="{navlinks.U_VIEW_FORUM}" <!-- IF navlinks.MICRODATA --> {navlinks.MICRODATA}<!-- ENDIF --> itemprop="url"><span itemprop="title">{navlinks.FORUM_NAME}</span></a></span></li>*/
/* 									<!-- EVENT overall_header_navlink_append -->*/
/* 								<!-- END navlinks -->*/
/* 								<!-- EVENT overall_header_breadcrumb_append -->*/
/* 							</ol>*/
/* 							<!-- EVENT overall_header_breadcrumbs_after -->*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- IF S_BOARD_DISABLED and S_USER_LOGGED_IN and (U_MCP or U_ACP) -->*/
/* 						<div id="information" class="row">*/
/* 							<div class="col-md-12">*/
/* 								<div class="alert alert-danger rules">*/
/* 									<strong>{L_INFORMATION}{L_COLON}</strong> {L_BOARD_DISABLED}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* */
/* 					<!-- EVENT overall_header_content_before -->*/
/* */
