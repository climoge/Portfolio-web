<?php

/* posting_layout.html */
class __TwigTemplate_b17da3d435d7fd34e85c9e13bdd981c894352b537d59929fdd602757ffa66bee extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "posting_layout.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ((isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null)) {
            // line 4
            echo "\t<div class=\"page-header\">
\t\t<h2 class=\"posting-title\">";
            // line 5
            echo "<a href=\"";
            echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
            echo "\">";
            echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
            echo "</a> &mdash; ";
            echo $this->env->getExtension('phpbb')->lang("POST_A");
            echo "<span id=\"live-title\"></span>";
            echo "</h2>
\t</div>
";
        } else {
            // line 8
            echo "\t<div class=\"page-header\">
\t\t<h2 class=\"posting-title\">";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("POST_A");
            echo "<span id=\"live-title\"></span></h2>
\t</div>
";
        }
        // line 12
        echo "
";
        // line 13
        if ((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null)) {
            // line 14
            echo "\t<div class=\"rules\">
\t\t<div class=\"alert alert-warning\">
\t\t\t";
            // line 16
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                // line 17
                echo "\t\t\t\t<a href=\"";
                echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
\t\t\t";
            } else {
                // line 19
                echo "\t\t\t\t<i class=\"fa fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i> <strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</strong>
\t\t\t\t<hr class=\"message-inner-separator\">
\t\t\t\t<p>";
                // line 21
                echo (isset($context["FORUM_RULES"]) ? $context["FORUM_RULES"] : null);
                echo "</p>
\t\t\t";
            }
            // line 23
            echo "\t\t</div>
\t</div>
";
        }
        // line 26
        echo "
<form id=\"postform\" method=\"post\" action=\"";
        // line 27
        echo (isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
\t";
        // line 28
        if ((isset($context["S_DRAFT_LOADED"]) ? $context["S_DRAFT_LOADED"] : null)) {
            // line 29
            echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">";
            // line 31
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<p>";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("DRAFT_LOADED");
            echo "</p>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 38
        echo "
\t";
        // line 39
        if ((isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) {
            $location = "drafts.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("drafts.html", "posting_layout.html", 39)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 40
        echo "
\t";
        // line 41
        if ((isset($context["S_POST_REVIEW"]) ? $context["S_POST_REVIEW"] : null)) {
            $location = "posting_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_review.html", "posting_layout.html", 41)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 42
        echo "
\t";
        // line 43
        if ((isset($context["S_UNGLOBALISE"]) ? $context["S_UNGLOBALISE"] : null)) {
            // line 44
            echo "\t\t<div class=\"well\">
\t\t\t<fieldset class=\"fields1\">
\t\t\t\t<h2>";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("SELECT_DESTINATION_FORUM");
            echo "</h2>
\t\t\t\t<p>";
            // line 47
            echo $this->env->getExtension('phpbb')->lang("UNGLOBALISE_EXPLAIN");
            echo "</p>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"to_forum_id\">";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("MOVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t\t<dd><select id=\"to_forum_id\" name=\"to_forum_id\">";
            // line 50
            echo (isset($context["S_FORUM_SELECT"]) ? $context["S_FORUM_SELECT"] : null);
            echo "</select></dd>
\t\t\t\t</dl>

\t\t\t\t<dl>
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd><input class=\"btn btn-default\" type=\"submit\" name=\"post\" value=\"";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("CONFIRM");
            echo "\" />
\t\t\t\t\t<input class=\"btn btn-danger\" type=\"submit\" name=\"cancel_unglobalise\" value=\"";
            // line 56
            echo $this->env->getExtension('phpbb')->lang("CANCEL");
            echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</fieldset>
\t\t</div>
\t";
        }
        // line 61
        echo "
\t";
        // line 62
        if ((isset($context["S_DISPLAY_PREVIEW"]) ? $context["S_DISPLAY_PREVIEW"] : null)) {
            $location = "posting_preview.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_preview.html", "posting_layout.html", 62)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 63
        echo "
\t<div class=\"panel panel-default\" id=\"postingbox\">
\t\t<div class=\"panel-body no-margin\">
\t\t\t";
        // line 66
        $value = 1;
        $context['definition']->set('EXTRA_POSTING_OPTIONS', $value);
        // line 67
        echo "\t\t\t";
        $location = "posting_editor.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_editor.html", "posting_layout.html", 67)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 68
        echo "\t\t\t<input type=\"hidden\" name=\"show_panel\" value=\"options-panel\" />
\t\t</div>
\t\t";
        // line 70
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</div>

\t";
        // line 73
        // line 74
        echo "
\t";
        // line 75
        if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
            $location = "posting_topic_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_topic_review.html", "posting_layout.html", 75)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 76
        echo "</form>

";
        // line 78
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "posting_layout.html", 78)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "posting_layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 78,  266 => 76,  252 => 75,  249 => 74,  248 => 73,  242 => 70,  238 => 68,  225 => 67,  222 => 66,  217 => 63,  203 => 62,  200 => 61,  192 => 56,  188 => 55,  180 => 50,  175 => 49,  170 => 47,  166 => 46,  162 => 44,  160 => 43,  157 => 42,  143 => 41,  140 => 40,  126 => 39,  123 => 38,  116 => 34,  110 => 31,  106 => 29,  104 => 28,  98 => 27,  95 => 26,  90 => 23,  85 => 21,  79 => 19,  71 => 17,  69 => 16,  65 => 14,  63 => 13,  60 => 12,  54 => 9,  51 => 8,  39 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- IF TOPIC_TITLE -->*/
/* 	<div class="page-header">*/
/* 		<h2 class="posting-title"><!-- EVENT posting_topic_title_before --><a href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a> &mdash; {L_POST_A}<span id="live-title"></span><!-- EVENT posting_topic_title_after --></h2>*/
/* 	</div>*/
/* <!-- ELSE -->*/
/* 	<div class="page-header">*/
/* 		<h2 class="posting-title">{L_POST_A}<span id="live-title"></span></h2>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_FORUM_RULES -->*/
/* 	<div class="rules">*/
/* 		<div class="alert alert-warning">*/
/* 			<!-- IF U_FORUM_RULES -->*/
/* 				<a href="{U_FORUM_RULES}">{L_FORUM_RULES}</a>*/
/* 			<!-- ELSE -->*/
/* 				<i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i> <strong>{L_FORUM_RULES}</strong>*/
/* 				<hr class="message-inner-separator">*/
/* 				<p>{FORUM_RULES}</p>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <form id="postform" method="post" action="{S_POST_ACTION}"{S_FORM_ENCTYPE}>*/
/* 	<!-- IF S_DRAFT_LOADED -->*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title">{L_INFORMATION}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<p>{L_DRAFT_LOADED}</p>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_SHOW_DRAFTS --><!-- INCLUDE drafts.html --><!-- ENDIF -->*/
/* */
/* 	<!-- IF S_POST_REVIEW --><!-- INCLUDE posting_review.html --><!-- ENDIF -->*/
/* */
/* 	<!-- IF S_UNGLOBALISE -->*/
/* 		<div class="well">*/
/* 			<fieldset class="fields1">*/
/* 				<h2>{L_SELECT_DESTINATION_FORUM}</h2>*/
/* 				<p>{L_UNGLOBALISE_EXPLAIN}</p>*/
/* 				<dl>*/
/* 					<dt><label for="to_forum_id">{L_MOVE}{L_COLON}</label></dt>*/
/* 					<dd><select id="to_forum_id" name="to_forum_id">{S_FORUM_SELECT}</select></dd>*/
/* 				</dl>*/
/* */
/* 				<dl>*/
/* 					<dt>&nbsp;</dt>*/
/* 					<dd><input class="btn btn-default" type="submit" name="post" value="{L_CONFIRM}" />*/
/* 					<input class="btn btn-danger" type="submit" name="cancel_unglobalise" value="{L_CANCEL}" /></dd>*/
/* 				</dl>*/
/* 			</fieldset>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_DISPLAY_PREVIEW --><!-- INCLUDE posting_preview.html --><!-- ENDIF -->*/
/* */
/* 	<div class="panel panel-default" id="postingbox">*/
/* 		<div class="panel-body no-margin">*/
/* 			<!-- DEFINE $EXTRA_POSTING_OPTIONS = 1 -->*/
/* 			<!-- INCLUDE posting_editor.html -->*/
/* 			<input type="hidden" name="show_panel" value="options-panel" />*/
/* 		</div>*/
/* 		{S_FORM_TOKEN}*/
/* 	</div>*/
/* */
/* 	<!-- EVENT posting_layout_include_panel_body -->*/
/* */
/* 	<!-- IF S_DISPLAY_REVIEW --><!-- INCLUDE posting_topic_review.html --><!-- ENDIF -->*/
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
