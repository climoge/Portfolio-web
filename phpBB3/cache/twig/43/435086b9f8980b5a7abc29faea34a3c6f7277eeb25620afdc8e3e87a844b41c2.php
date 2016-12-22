<?php

/* viewtopic_topic_tools.html */
class __TwigTemplate_1a7b9455f5a97b1eec94cfe8e9b3eb285c693370be5ee9ce0579a40a2fa198e1 extends Twig_Template
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
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && ((((((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null) || (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) || (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) || (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) || (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) || (isset($context["S_DISPLAY_TOPIC_TOOLS"]) ? $context["S_DISPLAY_TOPIC_TOOLS"] : null)))) {
            // line 2
            echo "\t<div class=\"btn-group\">
\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t<i class=\"fa fa-wrench fa-fw\" aria-hidden=\"true\"></i> <span class=\"caret\"></span>
\t\t</button>
\t\t<ul class=\"dropdown-menu\">
\t\t\t";
            // line 7
            // line 8
            echo "\t\t\t";
            if ((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null)) {
                // line 9
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 10
                echo (isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null);
                echo "\" class=\"watch-topic-link\" title=\"";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if ( !(isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                echo (isset($context["S_WATCH_TOPIC_TOGGLE"]) ? $context["S_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_TOPIC_TOGGLE"]) ? $context["U_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-update-all=\".watch-topic-link\">";
                if ((isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null)) {
                    echo "<i class=\"fa fa-minus-square-o fa-fw\" aria-hidden=\"true\"></i>";
                } else {
                    echo "<i class=\"fa fa-check-square-o fa-fw\" aria-hidden=\"true\"></i>";
                }
                echo " ";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 13
            echo "\t\t\t";
            if ((isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) {
                // line 14
                echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
                // line 15
                echo (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null);
                echo "\" class=\"bookmark-link\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BOOKMARK_TOPIC");
                echo "\" data-ajax=\"alt_text\" data-alt-text=\"";
                echo (isset($context["S_BOOKMARK_TOGGLE"]) ? $context["S_BOOKMARK_TOGGLE"] : null);
                echo "\" data-update-all=\".bookmark-link\"><i class=\"fa fa-bookmark fa-fw\" aria-hidden=\"true\"></i> ";
                echo (isset($context["S_BOOKMARK_TOPIC"]) ? $context["S_BOOKMARK_TOPIC"] : null);
                echo "</a>
\t\t\t\t</li>
\t\t\t";
            }
            // line 18
            echo "\t\t\t";
            if ((isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"true\"><i class=\"fa fa-arrow-up fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "</a></li>";
            }
            // line 19
            echo "\t\t\t";
            if ((isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "\"><i class=\"fa fa-envelope fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "</a></li>";
            }
            // line 20
            echo "\t\t\t";
            if ((isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "\" accesskey=\"p\"><i class=\"fa fa-print fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "</a></li>";
            }
            // line 21
            echo "\t\t\t";
            // line 22
            echo "\t\t</ul>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 22,  112 => 21,  101 => 20,  90 => 19,  79 => 18,  67 => 15,  64 => 14,  61 => 13,  35 => 10,  32 => 9,  29 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF not S_IS_BOT and (U_WATCH_TOPIC or U_BOOKMARK_TOPIC or U_BUMP_TOPIC or U_EMAIL_TOPIC or U_PRINT_TOPIC or S_DISPLAY_TOPIC_TOOLS) -->*/
/* 	<div class="btn-group">*/
/* 		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/* 			<i class="fa fa-wrench fa-fw" aria-hidden="true"></i> <span class="caret"></span>*/
/* 		</button>*/
/* 		<ul class="dropdown-menu">*/
/* 			<!-- EVENT viewtopic_topic_tools_before -->*/
/* 			<!-- IF U_WATCH_TOPIC -->*/
/* 				<li>*/
/* 					<a href="{U_WATCH_TOPIC}" class="watch-topic-link" title="{S_WATCH_TOPIC_TITLE}" data-ajax="toggle_link" data-toggle-class="small-icon icon-<!-- IF not S_WATCHING_TOPIC -->unsubscribe<!-- ELSE -->subscribe<!-- ENDIF -->" data-toggle-text="{S_WATCH_TOPIC_TOGGLE}" data-toggle-url="{U_WATCH_TOPIC_TOGGLE}" data-update-all=".watch-topic-link"><!-- IF S_WATCHING_TOPIC --><i class="fa fa-minus-square-o fa-fw" aria-hidden="true"></i><!-- ELSE --><i class="fa fa-check-square-o fa-fw" aria-hidden="true"></i><!-- ENDIF --> {S_WATCH_TOPIC_TITLE}</a>*/
/* 				</li>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF U_BOOKMARK_TOPIC -->*/
/* 				<li>*/
/* 					<a href="{U_BOOKMARK_TOPIC}" class="bookmark-link" title="{L_BOOKMARK_TOPIC}" data-ajax="alt_text" data-alt-text="{S_BOOKMARK_TOGGLE}" data-update-all=".bookmark-link"><i class="fa fa-bookmark fa-fw" aria-hidden="true"></i> {S_BOOKMARK_TOPIC}</a>*/
/* 				</li>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF U_BUMP_TOPIC --><li><a href="{U_BUMP_TOPIC}" title="{L_BUMP_TOPIC}" data-ajax="true"><i class="fa fa-arrow-up fa-fw" aria-hidden="true"></i> {L_BUMP_TOPIC}</a></li><!-- ENDIF -->*/
/* 			<!-- IF U_EMAIL_TOPIC --><li><a href="{U_EMAIL_TOPIC}" title="{L_EMAIL_TOPIC}"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> {L_EMAIL_TOPIC}</a></li><!-- ENDIF -->*/
/* 			<!-- IF U_PRINT_TOPIC --><li><a href="{U_PRINT_TOPIC}" title="{L_PRINT_TOPIC}" accesskey="p"><i class="fa fa-print fa-fw" aria-hidden="true"></i> {L_PRINT_TOPIC}</a></li><!-- ENDIF -->*/
/* 			<!-- EVENT viewtopic_topic_tools_after -->*/
/* 		</ul>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
