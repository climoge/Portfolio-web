<?php

/* index_body.html */
class __TwigTemplate_d6239dd7c550d5d1a6586652581ec04f5d8aabecbca0623e9771f8f039a78bc8 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
";
        // line 5
        if ((((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) || ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) || (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
            // line 6
            echo "\t<div class=\"row\">
\t\t";
            // line 7
            if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                // line 8
                echo "\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<a href=\"";
                // line 10
                echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
                echo "\" class=\"btn btn-default btn-sm\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
                echo "</a>
\t\t\t\t\t";
                // line 11
                if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                    // line 12
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                    echo "\" class=\"btn btn-default btn-sm\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                    echo "</a>
\t\t\t\t\t";
                }
                // line 14
                echo "\t\t\t\t\t";
                if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                    // line 15
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                    echo "\" class=\"btn btn-default btn-sm\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                    echo "</a>
\t\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t\t<a href=\"";
                echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
                echo "\" class=\"btn btn-default btn-sm\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
                echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 21
            echo "\t\t";
            if ((isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null)) {
                // line 22
                echo "\t\t\t<div class=\"col-md-4 ";
                if ( !(isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
                    echo "col-md-offset-6";
                }
                echo "\">
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<a href=\"";
                // line 24
                echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                echo "\" accesskey=\"m\" class=\"btn btn-default btn-sm\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_FORUMS_READ");
                echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 28
            echo "\t</div>
";
        }
        // line 30
        echo "
";
        // line 31
        // line 32
        echo "
";
        // line 33
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 33)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 34
        echo "
";
        // line 35
        // line 36
        echo "
";
        // line 37
        if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 38
            echo "\t";
            $location = "login_panel.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("login_panel.html", "index_body.html", 38)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 40
        echo "
";
        // line 41
        // line 42
        echo "
";
        // line 43
        if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
            // line 44
            echo "\t";
            $location = "online_panel.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("online_panel.html", "index_body.html", 44)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 46
        echo "
";
        // line 47
        if (((isset($context["S_DISPLAY_BIRTHDAY_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_LIST"] : null) && (isset($context["BIRTHDAY_LIST"]) ? $context["BIRTHDAY_LIST"] : null))) {
            // line 48
            echo "\t<div class=\"panel panel-info\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-gift fa-fw\" aria-hidden=\"true\"></i> ";
            // line 50
            echo $this->env->getExtension('phpbb')->lang("BIRTHDAYS");
            echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t";
            // line 54
            // line 55
            echo "\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()))) {
                echo $this->env->getExtension('phpbb')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                    if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                        echo " (";
                        echo $this->getAttribute($context["birthdays"], "AGE", array());
                        echo ")";
                    }
                    if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_BIRTHDAYS");
            }
            // line 56
            echo "\t\t\t\t";
            // line 57
            echo "\t\t\t</p>
\t\t</div>
\t</div>
";
        }
        // line 61
        echo "
";
        // line 62
        if ((isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null)) {
            // line 63
            echo "\t<div class=\"panel panel-info\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-area-chart fa-fw\" aria-hidden=\"true\"></i> ";
            // line 65
            echo $this->env->getExtension('phpbb')->lang("STATISTICS");
            echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<p>
\t\t\t\t";
            // line 69
            // line 70
            echo "\t\t\t\t";
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo " &bull; ";
            echo (isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null);
            echo "
\t\t\t\t";
            // line 71
            // line 72
            echo "\t\t\t</p>
\t\t\t<hr/>
\t\t\t<p class=\"";
            // line 74
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo " time";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                echo " pull-right";
            }
            echo "\">";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                echo (isset($context["LAST_VISIT_DATE"]) ? $context["LAST_VISIT_DATE"] : null);
            } else {
                echo (isset($context["CURRENT_TIME"]) ? $context["CURRENT_TIME"] : null);
            }
            echo "</p>
\t\t\t";
            // line 75
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                echo "<p class=\"pull-left time\">";
                echo (isset($context["CURRENT_TIME"]) ? $context["CURRENT_TIME"] : null);
                echo "</p>";
            }
            // line 76
            echo "\t\t</div>
\t</div>
";
        }
        // line 79
        echo "
";
        // line 80
        // line 81
        echo "
";
        // line 82
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 82)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 82,  288 => 81,  287 => 80,  284 => 79,  279 => 76,  273 => 75,  259 => 74,  255 => 72,  254 => 71,  243 => 70,  242 => 69,  235 => 65,  231 => 63,  229 => 62,  226 => 61,  220 => 57,  218 => 56,  192 => 55,  191 => 54,  184 => 50,  180 => 48,  178 => 47,  175 => 46,  161 => 44,  159 => 43,  156 => 42,  155 => 41,  152 => 40,  138 => 38,  136 => 37,  133 => 36,  132 => 35,  129 => 34,  117 => 33,  114 => 32,  113 => 31,  110 => 30,  106 => 28,  97 => 24,  89 => 22,  86 => 21,  76 => 17,  68 => 15,  65 => 14,  57 => 12,  55 => 11,  49 => 10,  45 => 8,  43 => 7,  40 => 6,  38 => 5,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- EVENT index_body_markforums_before -->*/
/* */
/* <!-- IF S_DISPLAY_SEARCH or (S_USER_LOGGED_IN and not S_IS_BOT) or U_MARK_FORUMS-->*/
/* 	<div class="row">*/
/* 		<!-- IF S_DISPLAY_SEARCH -->*/
/* 			<div class="col-md-8">*/
/* 				<div class="btn-group">*/
/* 					<a href="{U_SEARCH_UNANSWERED}" class="btn btn-default btn-sm">{L_SEARCH_UNANSWERED}</a>*/
/* 					<!-- IF S_LOAD_UNREADS -->*/
/* 						<a href="{U_SEARCH_UNREAD}" class="btn btn-default btn-sm">{L_SEARCH_UNREAD}</a>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF S_USER_LOGGED_IN -->*/
/* 						<a href="{U_SEARCH_NEW}" class="btn btn-default btn-sm">{L_SEARCH_NEW}</a>*/
/* 					<!-- ENDIF -->*/
/* 					<a href="{U_SEARCH_ACTIVE_TOPICS}" class="btn btn-default btn-sm">{L_SEARCH_ACTIVE_TOPICS}</a>*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF  U_MARK_FORUMS -->*/
/* 			<div class="col-md-4 <!-- IF not S_DISPLAY_SEARCH -->col-md-offset-6<!-- ENDIF -->">*/
/* 				<div class="pull-right">*/
/* 					<a href="{U_MARK_FORUMS}" accesskey="m" class="btn btn-default btn-sm">{L_MARK_FORUMS_READ}</a>*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT index_body_markforums_after -->*/
/* */
/* <!-- INCLUDE forumlist_body.html -->*/
/* */
/* <!-- EVENT index_body_forumlist_body_after -->*/
/* */
/* <!-- IF not S_USER_LOGGED_IN and not S_IS_BOT -->*/
/* 	<!-- INCLUDE login_panel.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT index_body_stat_blocks_before -->*/
/* */
/* <!-- IF S_DISPLAY_ONLINE_LIST -->*/
/* 	<!-- INCLUDE online_panel.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_DISPLAY_BIRTHDAY_LIST and BIRTHDAY_LIST -->*/
/* 	<div class="panel panel-info">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title"><i class="fa fa-gift fa-fw" aria-hidden="true"></i> {L_BIRTHDAYS}</h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<p>*/
/* 				<!-- EVENT index_body_block_birthday_prepend -->*/
/* 				<!-- IF .birthdays -->{L_CONGRATULATIONS}{L_COLON} <strong><!-- BEGIN birthdays -->{birthdays.USERNAME}<!-- IF birthdays.AGE !== '' --> ({birthdays.AGE})<!-- ENDIF --><!-- IF not birthdays.S_LAST_ROW -->, <!-- ENDIF --><!-- END birthdays --></strong><!-- ELSE -->{L_NO_BIRTHDAYS}<!-- ENDIF -->*/
/* 				<!-- EVENT index_body_block_birthday_append -->*/
/* 			</p>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF NEWEST_USER -->*/
/* 	<div class="panel panel-info">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title"><i class="fa fa-area-chart fa-fw" aria-hidden="true"></i> {L_STATISTICS}</h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<p>*/
/* 				<!-- EVENT index_body_block_stats_prepend -->*/
/* 				{TOTAL_POSTS} &bull; {TOTAL_TOPICS} &bull; {TOTAL_USERS} &bull; {NEWEST_USER}*/
/* 				<!-- EVENT index_body_block_stats_append -->*/
/* 			</p>*/
/* 			<hr/>*/
/* 			<p class="{S_CONTENT_FLOW_END} time<!-- IF S_USER_LOGGED_IN --> pull-right<!-- ENDIF -->"><!-- IF S_USER_LOGGED_IN -->{LAST_VISIT_DATE}<!-- ELSE -->{CURRENT_TIME}<!-- ENDIF --></p>*/
/* 			<!-- IF S_USER_LOGGED_IN --><p class="pull-left time">{CURRENT_TIME}</p><!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT index_body_stat_blocks_after -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
