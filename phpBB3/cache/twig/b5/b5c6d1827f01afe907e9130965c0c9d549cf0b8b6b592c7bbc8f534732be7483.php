<?php

/* navbar_footer.html */
class __TwigTemplate_ba90f1ef02edc6cf557fa2bfa6804ae97940d7f222db9696fa0ea775eb789d76 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-fixed-bottom hidden-sm hidden-xs\" id=\"footer-nav\">
\t<div class=\"container-fluid\">
\t\t<div class=\"collapse navbar-collapse\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t";
        // line 5
        // line 6
        echo "\t\t\t\t<li><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" accesskey=\"h\"><i class=\"fa fa-home fa-fw\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t";
        // line 7
        // line 8
        echo "\t\t\t\t";
        if ((isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_CONTACT_US"]) ? $context["U_CONTACT_US"] : null);
            echo "\"><i class=\"fa fa-envelope fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_US");
            echo "</a></li>";
        }
        // line 9
        echo "\t\t\t\t";
        // line 10
        echo "\t\t\t\t";
        if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
            echo "\"><i class=\"fa fa-shield fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
            echo "</a></li>";
        }
        // line 11
        echo "\t\t\t\t";
        // line 12
        echo "\t\t\t\t";
        if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
            // line 13
            echo "\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MEMBERLIST_EXPLAIN");
            echo "\"><i class=\"fa fa-group fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
            echo "</a></li>
\t\t\t\t";
        }
        // line 15
        echo "\t\t\t\t";
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            // line 16
            echo "\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_DELETE_COOKIES"]) ? $context["U_DELETE_COOKIES"] : null);
            echo "\"><i class=\"fa fa-trash-o fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("DELETE_COOKIES");
            echo "</a></li>
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t\t";
        // line 19
        echo "\t\t\t\t<li><p class=\"navbar-text\">";
        echo (isset($context["S_TIMEZONE"]) ? $context["S_TIMEZONE"] : null);
        echo "</p></li>
\t\t\t\t";
        // line 20
        // line 21
        echo "\t\t\t</ul>
\t\t\t<ul class=\"nav navbar-nav navbar-right\"><li><p class=\"navbar-text\" id=\"copyright\">Design";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " <a href=\"http://zoker.me/go/comboot\" target=\"_blank\">ComBoot</a> by <a href=\"http://www.florian-gareis.de\" target=\"_blank\" id=\"author-name\">Florian Gareis</a></p></li></ul>
\t\t</div>
\t</div>
</nav>
<a id=\"back-to-top\" href=\"#\" class=\"btn btn-primary\" role=\"button\" title=\"";
        // line 26
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "BACK_TO_TOP_TOOLTIP", array());
        echo "\" data-toggle=\"tooltip\" data-placement=\"left\"><i class=\"fa fa-chevron-up fa-fw\" aria-hidden=\"true\"></i></a>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 26,  89 => 22,  86 => 21,  85 => 20,  80 => 19,  78 => 18,  70 => 16,  67 => 15,  57 => 13,  54 => 12,  52 => 11,  43 => 10,  41 => 9,  32 => 8,  31 => 7,  26 => 6,  25 => 5,  19 => 1,);
    }
}
/* <nav class="navbar navbar-default navbar-fixed-bottom hidden-sm hidden-xs" id="footer-nav">*/
/* 	<div class="container-fluid">*/
/* 		<div class="collapse navbar-collapse">*/
/* 			<ul class="nav navbar-nav">*/
/* 				<!-- EVENT overall_footer_breadcrumb_prepend -->*/
/* 				<li><a href="{U_INDEX}" accesskey="h"><i class="fa fa-home fa-fw" aria-hidden="true"></i></a></li>*/
/* 				<!-- EVENT overall_footer_breadcrumb_append -->*/
/* 				<!-- IF U_CONTACT_US --><li><a href="{U_CONTACT_US}"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> {L_CONTACT_US}</a></li><!-- ENDIF -->*/
/* 				<!-- EVENT overall_footer_teamlink_before -->*/
/* 				<!-- IF U_TEAM --><li><a href="{U_TEAM}"><i class="fa fa-shield fa-fw" aria-hidden="true"></i> {L_THE_TEAM}</a></li><!-- ENDIF -->*/
/* 				<!-- EVENT overall_footer_teamlink_after -->*/
/* 				<!-- IF S_DISPLAY_MEMBERLIST -->*/
/* 					<li><a href="{U_MEMBERLIST}" title="{L_MEMBERLIST_EXPLAIN}"><i class="fa fa-group fa-fw" aria-hidden="true"></i> {L_MEMBERLIST}</a></li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF not S_IS_BOT -->*/
/* 					<li><a href="{U_DELETE_COOKIES}"><i class="fa fa-trash-o fa-fw" aria-hidden="true"></i> {L_DELETE_COOKIES}</a></li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- EVENT overall_footer_timezone_before -->*/
/* 				<li><p class="navbar-text">{S_TIMEZONE}</p></li>*/
/* 				<!-- EVENT overall_footer_timezone_after -->*/
/* 			</ul>*/
/* 			<ul class="nav navbar-nav navbar-right"><li><p class="navbar-text" id="copyright">Design{L_COLON} <a href="http://zoker.me/go/comboot" target="_blank">ComBoot</a> by <a href="http://www.florian-gareis.de" target="_blank" id="author-name">Florian Gareis</a></p></li></ul>*/
/* 		</div>*/
/* 	</div>*/
/* </nav>*/
/* <a id="back-to-top" href="#" class="btn btn-primary" role="button" title="{$BACK_TO_TOP_TOOLTIP}" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-up fa-fw" aria-hidden="true"></i></a>*/
/* */
