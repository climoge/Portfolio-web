<?php

/* viewtopic_body.html */
class __TwigTemplate_49b8dc1bd6eb1326b89182ac206261823037d0f805cdb303f4d979c4bc518652 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"page-title text-center\">";
        // line 3
        echo "<a href=\"";
        echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
        echo "\">";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "</a>";
        echo "</h2>
";
        // line 4
        // line 5
        echo "
";
        // line 6
        if ((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null)) {
            // line 7
            echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-body\">
\t\t\t";
            // line 9
            echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
            echo "
\t\t</div>
\t</div>
";
        }
        // line 13
        echo "
";
        // line 14
        if ((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null)) {
            // line 15
            echo "\t<div class=\"rules\">
\t\t<div class=\"alert alert-warning\">
\t\t\t";
            // line 17
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                // line 18
                echo "\t\t\t\t<a href=\"";
                echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
\t\t\t";
            } else {
                // line 20
                echo "\t\t\t\t<i class=\"fa fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i> <strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</strong>
\t\t\t\t<hr class=\"message-inner-separator\">
\t\t\t\t<p>";
                // line 22
                echo (isset($context["FORUM_RULES"]) ? $context["FORUM_RULES"] : null);
                echo "</p>
\t\t\t";
            }
            // line 24
            echo "\t\t</div>
\t</div>
";
        }
        // line 27
        echo "
";
        // line 28
        if ((isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) {
            // line 29
            echo "<p>
\t<strong>";
            // line 30
            if ((isset($context["S_SINGLE_MODERATOR"]) ? $context["S_SINGLE_MODERATOR"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb')->lang("MODERATORS");
            }
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null);
            echo "
</p>
";
        }
        // line 33
        echo "
<div class=\"row\">
\t<div class=\"col-md-12 text-center\">
\t\t<div class=\"btn-group total-posts-container\">
\t\t\t";
        // line 37
        if (((isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            echo "<a href=\"";
            echo (isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null);
            echo "\" class=\"btn btn-default btn-sm\">";
            echo $this->env->getExtension('phpbb')->lang("VIEW_UNREAD_POST");
            echo "</a>";
        }
        echo "<a class=\"btn btn-default btn-sm disabled\">";
        echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
        echo "</a>
\t\t\t";
        // line 38
        if (((isset($context["BASE_URL"]) ? $context["BASE_URL"] : null) && ((isset($context["TOTAL_PAGES"]) ? $context["TOTAL_PAGES"] : null) > 6))) {
            // line 39
            echo "\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t";
            // line 40
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo " <span class=\"caret\"></span>
\t\t\t\t</button>
\t\t\t\t<ul class=\"dropdown-menu jump-to\">
\t\t\t\t\t<li>";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</li>
\t\t\t\t\t<li class=\"page-jump-form\">
\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t<input type=\"number\" name=\"page-number\" min=\"1\" maxlength=\"6\" title=\"";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("JUMP_PAGE");
            echo "\" class=\"form-control\" data-per-page=\"";
            echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
            echo "\" data-base-url=\"";
            echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "html_attr");
            echo "\" data-start-name=\"";
            echo (isset($context["START_NAME"]) ? $context["START_NAME"] : null);
            echo "\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary btn-sm\" value=\"";
            // line 48
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" type=\"button\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t";
        } else {
            // line 54
            echo "\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a>
\t\t\t";
        }
        // line 56
        echo "\t\t</div>
\t</div>
</div>

<div class=\"row mobile-fix clearfix\">
\t";
        // line 61
        // line 62
        echo "\t\t<div class=\"col-md-4\">
\t\t\t";
        // line 63
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
            // line 64
            echo "\t\t\t\t";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                // line 65
                echo "\t\t\t\t\t<a class=\"btn btn-danger btn-labeled\" href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED");
                echo "\"><span class=\"btn-label\"><i class=\"fa fa-lock fa-fw\" aria-hidden=\"true\"></i></span> ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED_SHORT");
                echo "</a>
\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t\t<a class=\"btn btn-primary btn-labeled\" href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
                echo "\"><span class=\"btn-label\"><i class=\"fa fa-pencil-square-o fa-fw\" aria-hidden=\"true\"></i></span> ";
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
                echo "</a>
\t\t\t\t";
            }
            // line 69
            echo "\t\t\t";
        }
        // line 70
        echo "\t\t\t";
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 70)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 71
        echo "\t\t\t";
        // line 72
        echo "\t\t\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod", array()))) {
            // line 73
            echo "\t\t\t<div class=\"btn-group\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<i class=\"fa fa-gavel fa-fw\" aria-hidden=\"true\"></i> <span class=\"caret\"></span>
\t\t\t\t</button>
\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 79
                echo "\t\t\t\t\t\t";
                $value = twig_in_filter($this->getAttribute($context["quickmod"], "VALUE", array()), array(0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"));
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 80
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["quickmod"], "LINK", array());
                echo "\"";
                if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "QUICKMOD_AJAX", array())) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo $this->getAttribute($context["quickmod"], "TITLE", array());
                echo "</a></li>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 85
        echo "\t\t</div>
\t";
        // line 86
        // line 87
        echo "
\t";
        // line 88
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 89
            echo "\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t";
            // line 90
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewtopic_body.html", 90)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 91
            echo "\t\t</div>
\t";
        }
        // line 93
        echo "
\t";
        // line 94
        // line 95
        echo "
\t";
        // line 96
        if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
            // line 97
            echo "\t\t<div class=\"col-md-4 pull-right\">
\t\t\t<form method=\"get\" action=\"";
            // line 98
            echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
            echo "\" class=\"form-search no-margin\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input class=\"input-medium form-control\" type=\"search\" name=\"keywords\" size=\"20\" placeholder=\"";
            // line 100
            echo $this->env->getExtension('phpbb')->lang("SEARCH_TOPIC");
            echo "\"/>
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t";
            // line 102
            echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" title=\"";
            // line 103
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</button>
\t\t\t\t\t\t<a href=\"";
            // line 104
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"btn btn-default\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\"><i class=\"fa fa-cog fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 110
        echo "</div>

";
        // line 112
        // line 113
        echo "
";
        // line 114
        if ((isset($context["S_HAS_POLL"]) ? $context["S_HAS_POLL"] : null)) {
            // line 115
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_POLL_ACTION"]) ? $context["S_POLL_ACTION"] : null);
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">";
            // line 118
            echo (isset($context["POLL_QUESTION"]) ? $context["POLL_QUESTION"] : null);
            echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<p class=\"author_poll\">";
            // line 121
            echo $this->env->getExtension('phpbb')->lang("POLL_LENGTH");
            if (((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null) && (isset($context["L_POLL_LENGTH"]) ? $context["L_POLL_LENGTH"] : null))) {
                echo "<br />";
            }
            if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MAX_VOTES");
            }
            echo "</p>
\t\t\t\t<fieldset class=\"polls\">
\t\t\t\t";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 124
                echo "\t\t\t\t\t";
                // line 125
                echo "\t\t\t\t\t<div class=\"row ";
                if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                    echo "voted\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POLL_VOTED_OPTION");
                }
                echo "\" data-alt-text=\"";
                echo $this->env->getExtension('phpbb')->lang("POLL_VOTED_OPTION");
                echo "\" data-poll-option-id=\"";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                echo "\">
\t\t\t\t\t\t";
                // line 126
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array()) || (isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null))) {
                    echo "<div class=\"col-md-3 col-md-offset-1 vote_option\">";
                } else {
                    echo "<div class=\"col-md-12 vote_option\">";
                }
                // line 127
                echo "\t\t\t\t\t\t\t";
                if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                    // line 128
                    echo "\t\t\t\t\t\t\t\t<label for=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\" class=\"";
                    if ((isset($context["S_IS_MULTI_CHOICE"]) ? $context["S_IS_MULTI_CHOICE"] : null)) {
                        echo "checkbox-inline";
                    } else {
                        echo "radio-inline";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 129
                    if ((isset($context["S_IS_MULTI_CHOICE"]) ? $context["S_IS_MULTI_CHOICE"] : null)) {
                        // line 130
                        echo "\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 132
                        echo "\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                        echo "\"";
                        if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                            echo " checked=\"checked\"";
                        }
                        echo " />
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 134
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"vote_caption\">";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "</div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t";
                } else {
                    // line 137
                    echo "\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                    echo "
\t\t\t\t\t\t\t";
                }
                // line 139
                echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-6 vote_progress";
                // line 141
                if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                    echo " hidden";
                }
                echo "\">
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar ";
                // line 143
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 33)) {
                    echo "progress-bar-danger";
                } elseif (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 66)) {
                    echo "progress-bar-warning";
                } else {
                    echo "progress-bar-success";
                }
                echo "\"  role=\"progressbar\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_PCT", array()) < 10)) {
                    echo "10%";
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                }
                echo ";\">
\t\t\t\t\t\t\t\t\t";
                // line 144
                if (($this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array()) == 0)) {
                    echo $this->env->getExtension('phpbb')->lang("NO_VOTES");
                } else {
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_PERCENT", array());
                }
                // line 145
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 poll_option_percent";
                // line 148
                if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                    echo " hidden";
                }
                echo "\">
\t\t\t\t\t\t\t";
                // line 149
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_RESULT", array());
                echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 153
                // line 154
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t<div class=\"text-center center-block poll_total_votes";
            // line 157
            if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t\t<a class=\"btn btn-default disabled\">";
            // line 158
            echo $this->env->getExtension('phpbb')->lang("TOTAL_VOTES");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo (isset($context["TOTAL_VOTES"]) ? $context["TOTAL_VOTES"] : null);
            echo "</span></a>
\t\t\t\t\t</div>

\t\t\t\t<div class=\"spacer\"></div>
\t\t\t\t";
            // line 162
            if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                // line 163
                echo "\t\t\t\t\t<div class=\" text-center center-block\">
\t\t\t\t\t\t<div class=\"btn-group poll_vote\">
\t\t\t\t\t\t\t<input type=\"submit\" name=\"update\" value=\"";
                // line 165
                echo $this->env->getExtension('phpbb')->lang("SUBMIT_VOTE");
                echo "\" class=\"btn btn-success submit_poll\" />
\t\t\t\t\t\t\t";
                // line 166
                if ( !(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null)) {
                    echo "<a class=\"btn btn-warning poll_view_results\" href=\"";
                    echo (isset($context["U_VIEW_RESULTS"]) ? $context["U_VIEW_RESULTS"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_RESULTS");
                    echo "</a>";
                }
                // line 167
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 170
            echo "\t\t\t\t</fieldset>
\t\t\t\t<div class=\"spacer\"></div>
\t\t\t\t<div class=\"alert alert-success vote-submitted hidden\">";
            // line 172
            echo $this->env->getExtension('phpbb')->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t\t</div>
\t\t\t";
            // line 174
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t";
            // line 175
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t</div>
\t</form>
\t<hr />
";
        }
        // line 180
        echo "
";
        // line 181
        // line 182
        echo "
<div id=\"posts\">
\t";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 185
            echo "\t\t";
            // line 186
            echo "\t\t";
            if ($this->getAttribute($context["postrow"], "S_FIRST_UNREAD", array())) {
                echo "<a id=\"unread\" class=\"anchor\"";
                if ((isset($context["S_UNREAD_VIEW"]) ? $context["S_UNREAD_VIEW"] : null)) {
                    echo " data-url=\"";
                    echo $this->getAttribute($context["postrow"], "U_MINI_POST", array());
                    echo "\"";
                }
                echo "></a>";
            }
            // line 187
            echo "\t\t<div id=\"p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">
\t\t\t<div class=\"panel ";
            // line 188
            if ($this->getAttribute($context["postrow"], "S_UNREAD_POST", array())) {
                echo "panel-info";
            } elseif (($this->getAttribute($context["postrow"], "S_POST_REPORTED", array()) || $this->getAttribute($context["postrow"], "S_POST_DELETED", array()))) {
                echo "panel-danger";
            } elseif ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                echo "panel-warning";
            } else {
                echo "panel-primary";
            }
            echo " post-body\">
\t\t\t\t<div class=\"panel-heading clearfix\">
\t\t\t\t\t";
            // line 190
            // line 191
            echo "\t\t\t\t\t<h3 class=\"panel-title";
            if ($this->getAttribute($context["postrow"], "S_FIRST_ROW", array())) {
                echo " first";
            }
            echo " pull-left\">";
            if ($this->getAttribute($context["postrow"], "POST_ICON_IMG", array())) {
                echo "<img src=\"";
                echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["postrow"], "POST_ICON_IMG_HEIGHT", array());
                echo "\" alt=\"\" /> ";
            }
            echo "<a href=\"#p";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["postrow"], "POST_SUBJECT", array());
            echo "</a></h3>
\t\t\t\t\t<div class=\"pull-right\" ";
            // line 192
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo "style=\"display: none;\"";
            }
            echo "  id=\"post_mcp_action";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">
\t\t\t\t\t\t";
            // line 193
            if ($this->getAttribute($context["postrow"], "S_POST_UNAPPROVED", array())) {
                // line 194
                echo "\t\t\t\t\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t\t\t\t\t<span><i class=\"fa fa-question fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t<strong>";
                // line 196
                echo $this->env->getExtension('phpbb')->lang("POST_UNAPPROVED_ACTION");
                echo "</strong>
\t\t\t\t\t\t\t\t<div class=\"btn-group no-margin-bottom\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-danger\" type=\"submit\" title=\"";
                // line 198
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\"><i class=\"fa fa-times fa-fw\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-success\" type=\"submit\" title=\"";
                // line 199
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\" name=\"action[approve]\"><i class=\"fa fa-check fa-fw\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 201
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t\t\t\t";
                // line 202
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
            } elseif ($this->getAttribute(            // line 204
$context["postrow"], "S_POST_DELETED", array())) {
                // line 205
                echo "\t\t\t\t\t\t\t<form method=\"post\" class=\"mcp_approve pull-right\" action=\"";
                echo $this->getAttribute($context["postrow"], "U_APPROVE_ACTION", array());
                echo "\">
\t\t\t\t\t\t\t\t<strong>";
                // line 206
                echo $this->env->getExtension('phpbb')->lang("POST_DELETED_ACTION");
                echo "</strong>
\t\t\t\t\t\t\t\t<div class=\"btn-group no-margin-bottom\">
\t\t\t\t\t\t\t\t\t";
                // line 208
                if ($this->getAttribute($context["postrow"], "S_DELETE_PERMANENT", array())) {
                    // line 209
                    echo "\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-danger\" type=\"submit\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("DELETE");
                    echo "\" name=\"action[delete]\"><i class=\"fa fa-trash fa-fw\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t\t";
                }
                // line 211
                echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-xs btn-success\" type=\"submit\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "\" name=\"action[restore]\"><i class=\"fa fa-refresh fa-fw\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 213
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" />
\t\t\t\t\t\t\t\t";
                // line 214
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
            }
            // line 217
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "S_POST_REPORTED", array())) {
                // line 218
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["postrow"], "U_MCP_REPORT", array());
                echo "\"><i class=\"fa fa-exclamation fa-fw\" aria-hidden=\"true\"></i><strong>";
                echo $this->env->getExtension('phpbb')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t\t\t\t";
            }
            // line 220
            echo "\t\t\t\t\t\t<div class=\"btn-group btn-toolbar-mobile visible-xs-block\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"panel-body no-padding";
            // line 229
            if ( !$this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo " badger-left";
                if (($this->getAttribute($context["postrow"], "S_ONLINE", array()) &&  !$this->getAttribute($context["postrow"], "S_IGNORE_POST", array()))) {
                    echo " badger-success\" data-badger=\"";
                    echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "ONLINE_BADGE", array());
                } else {
                    echo " badger-danger\" data-badger=\"";
                    echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "OFFLINE_BADGE", array());
                }
            }
            echo "\">
\t\t\t\t\t";
            // line 230
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                // line 231
                echo "\t\t\t\t\t\t<div class=\"post-content\" id=\"post_hidden";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t";
                // line 233
                if ($this->getAttribute($context["postrow"], "S_POST_DELETED", array())) {
                    // line 234
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ignore\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 235
                    echo $this->getAttribute($context["postrow"], "L_POST_DELETED_MESSAGE", array());
                    echo "<br />
\t\t\t\t\t\t\t\t\t\t";
                    // line 236
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 238
$context["postrow"], "S_IGNORE_POST", array())) {
                    // line 239
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"ignore\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 240
                    echo $this->getAttribute($context["postrow"], "L_IGNORE_POST", array());
                    echo "<br />
\t\t\t\t\t\t\t\t\t\t";
                    // line 241
                    echo $this->getAttribute($context["postrow"], "L_POST_DISPLAY", array());
                    echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 244
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 247
            echo "\t\t\t\t\t<div class=\"row no-margin post-flex\">
\t\t\t\t\t";
            // line 248
            if ( !$this->getAttribute($context["postrow"], "S_IGNORE_POST", array())) {
                // line 249
                echo "\t\t\t\t\t\t<div class=\"col-md-3 col-xs-12 post-info post-info-left\" ";
                if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                    echo "style=\"display: none;\"";
                }
                echo " id=\"profile";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\">
\t\t\t\t\t\t\t<div class=\"row no-margin-xs\">
\t\t\t\t\t\t\t\t<dl class=\"col-sm-12 col-xs-6 no-margin-xs no-padding-xs\">
\t\t\t\t\t\t\t\t\t<dt class=\"avatar text-center rounded\">
\t\t\t\t\t\t\t\t\t\t";
                // line 253
                // line 254
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "POSTER_AVATAR", array())) {
                    // line 255
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                        echo "\">";
                        echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                        echo "</a>";
                    } else {
                        echo $this->getAttribute($context["postrow"], "POSTER_AVATAR", array());
                    }
                    echo "<br />
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 257
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                        echo "\"><img src=\"";
                        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                        echo "/images/default_avatar.jpg\" alt=\"avatar\"></a>";
                    } else {
                        echo "<img src=\"";
                        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
                        echo "/images/default_avatar.jpg\" alt=\"avatar\">";
                    }
                    // line 258
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 259
                echo "\t\t\t\t\t\t\t\t\t\t";
                // line 260
                echo "\t\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t\t<dd class=\"text-center author-name\">
\t\t\t\t\t\t\t\t\t\t";
                // line 262
                // line 263
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ( !$this->getAttribute($context["postrow"], "U_POST_AUTHOR", array())) {
                    echo "<strong>";
                    echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                    echo "</strong> ";
                } else {
                    echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
                }
                // line 264
                echo "\t\t\t\t\t\t\t\t\t\t";
                // line 265
                echo "\t\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t\t\t";
                // line 266
                // line 267
                echo "\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) || $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                    echo "<dd class=\"text-center author-rank\"><span class=\"badge\">";
                    echo $this->getAttribute($context["postrow"], "RANK_TITLE", array());
                    echo "</span>";
                    if (($this->getAttribute($context["postrow"], "RANK_TITLE", array()) && $this->getAttribute($context["postrow"], "RANK_IMG", array()))) {
                        echo "<br />";
                    }
                    echo $this->getAttribute($context["postrow"], "RANK_IMG", array());
                    echo "</dd>";
                }
                // line 268
                echo "\t\t\t\t\t\t\t\t\t";
                // line 269
                echo "\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t<dl class=\"col-sm-12 hidden-xs\">
\t\t\t\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t\t";
                // line 274
                if (($this->getAttribute($context["postrow"], "POSTER_POSTS", array()) != "")) {
                    echo "<dd class=\"profile-posts\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("POSTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    if (($this->getAttribute($context["postrow"], "U_SEARCH", array()) !== "")) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["postrow"], "U_SEARCH", array());
                        echo "\">";
                    }
                    echo $this->getAttribute($context["postrow"], "POSTER_POSTS", array());
                    if (($this->getAttribute($context["postrow"], "U_SEARCH", array()) !== "")) {
                        echo "</a>";
                    }
                    echo "</dd>";
                }
                // line 275
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "POSTER_JOINED", array())) {
                    echo "<dd class=\"profile-joined\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("JOINED");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["postrow"], "POSTER_JOINED", array());
                    echo "</dd>";
                }
                // line 276
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "POSTER_WARNINGS", array())) {
                    echo "<dd class=\"profile-warnings\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("WARNINGS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["postrow"], "POSTER_WARNINGS", array());
                    echo "</dd>";
                }
                // line 277
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["postrow"], "S_PROFILE_FIELD1", array())) {
                    // line 278
                    echo "\t\t\t\t\t\t\t\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t\t\t\t\t\t\t\t<dd><strong>";
                    // line 279
                    echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_NAME", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["postrow"], "PROFILE_FIELD1_VALUE", array());
                    echo "</dd>
\t\t\t\t\t\t\t\t\t";
                }
                // line 281
                echo "\t\t\t\t\t\t\t\t\t";
                // line 282
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "custom_fields", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                    // line 283
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                        // line 284
                        echo "\t\t\t\t\t\t\t\t\t\t\t<dd class=\"profile-";
                        echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", array());
                        echo "\"><strong>";
                        echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo "</strong> ";
                        echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                        echo "</dd>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 286
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 287
                echo "\t\t\t\t\t\t\t\t\t";
                // line 288
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 289
                // line 290
                echo "\t\t\t\t\t\t\t\t\t";
                if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && twig_length_filter($this->env, $this->getAttribute($context["postrow"], "contact", array())))) {
                    // line 291
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "contact", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                        // line 292
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $context["REMAINDER"] = ($this->getAttribute($context["contact"], "S_ROW_COUNT", array()) % 4);
                        // line 293
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        $value = (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || ($this->getAttribute($context["contact"], "S_LAST_ROW", array()) && ($this->getAttribute($context["contact"], "S_NUM_ROWS", array()) < 4)));
                        $context['definition']->set('S_LAST_CELL', $value);
                        // line 294
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                        if (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 0)) {
                            // line 295
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t<dd><div class=\"spacer\"></div></dd>
\t\t\t\t\t\t\t\t\t\t\t\t<dd><div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 298
                        echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        if ($this->getAttribute($context["contact"], "U_CONTACT", array())) {
                            echo $this->getAttribute($context["contact"], "U_CONTACT", array());
                        } else {
                            echo $this->getAttribute($context["postrow"], "U_POST_AUTHOR", array());
                        }
                        echo "\" title=\"";
                        echo $this->getAttribute($context["contact"], "NAME", array());
                        echo "\" class=\"btn btn-sm btn-primary\" ";
                        if (($this->getAttribute($context["contact"], "ID", array()) == "jabber")) {
                            echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                        }
                        echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                        // line 299
                        echo $this->getAttribute($context["contact"], "ID", array());
                        echo "-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 300
                        if (($this->getAttribute($context["contact"], "ID", array()) == "email")) {
                            // line 301
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 302
$context["contact"], "ID", array()) == "pm")) {
                            // line 303
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-comment fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 304
$context["contact"], "ID", array()) == "phpbb_website")) {
                            // line 305
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-globe fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 306
$context["contact"], "ID", array()) == "phpbb_facebook")) {
                            // line 307
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 308
$context["contact"], "ID", array()) == "phpbb_twitter")) {
                            // line 309
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 310
$context["contact"], "ID", array()) == "phpbb_skype")) {
                            // line 311
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-skype fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 312
$context["contact"], "ID", array()) == "phpbb_youtube")) {
                            // line 313
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-youtube fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (($this->getAttribute(                        // line 314
$context["contact"], "ID", array()) == "phpbb_googleplus")) {
                            // line 315
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-google-plus fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 317
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            echo $this->getAttribute($context["contact"], "NAME", array());
                            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 319
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 321
                        if ((((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || $this->getAttribute($context["contact"], "S_LAST_ROW", array()))) {
                            // line 322
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div></dd>
\t\t\t\t\t\t\t\t\t\t\t\t<dd><div class=\"clearfix\"></div></dd>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 325
                        echo "\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 326
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                // line 327
                echo "\t\t\t\t\t\t\t\t\t";
                // line 328
                echo "\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t\t<div class=\"col-xs-6 visible-xs-block text-right post-time-mobile\">
\t\t\t\t\t\t\t\t\t";
                // line 330
                echo $this->getAttribute($context["postrow"], "POST_DATE", array());
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 335
            echo "\t\t\t\t\t<div class=\"col-md-9 col-xs-12 post-content\" ";
            if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                echo "style=\"display: none;\"";
            }
            echo " id=\"post_content";
            echo $this->getAttribute($context["postrow"], "POST_ID", array());
            echo "\">
\t\t\t\t\t\t<div class=\"row post-head hidden-xs no-margin-bottom\">
\t\t\t\t\t\t\t<div class=\"col-md-6 author\">
\t\t\t\t\t\t\t\t";
            // line 338
            // line 339
            echo "\t\t\t\t\t\t\t\t";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute($context["postrow"], "POST_AUTHOR_FULL", array());
            echo "</strong> &raquo; ";
            echo $this->getAttribute($context["postrow"], "POST_DATE", array());
            echo "
\t\t\t\t\t\t\t\t";
            // line 340
            // line 341
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12 no-padding\">
\t\t\t\t\t\t\t\t";
            // line 343
            $value = ((((($this->getAttribute($context["postrow"], "U_EDIT", array()) || $this->getAttribute($context["postrow"], "U_DELETE", array())) || $this->getAttribute($context["postrow"], "U_REPORT", array())) || $this->getAttribute($context["postrow"], "U_WARN", array())) || $this->getAttribute($context["postrow"], "U_INFO", array())) || $this->getAttribute($context["postrow"], "U_QUOTE", array()));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 344
            echo "\t\t\t\t\t\t\t\t";
            // line 345
            echo "\t\t\t\t\t\t\t\t";
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 346
                echo "\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_POST_BUTTONS", array())) {
                    // line 347
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    // line 348
                    echo "\t\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar topic-buttons\" role=\"toolbar\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 349
                    if (($this->getAttribute($context["postrow"], "U_EDIT", array()) || $this->getAttribute($context["postrow"], "U_DELETE", array()))) {
                        // line 350
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 351
                        if ($this->getAttribute($context["postrow"], "U_EDIT", array())) {
                            echo "<a class=\"btn btn-warning\" href=\"";
                            echo $this->getAttribute($context["postrow"], "U_EDIT", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("EDIT_POST");
                            echo "\"><i class=\"fa fa-pencil fa-fw\" aria-hidden=\"true\"></i></a>";
                        }
                        // line 352
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["postrow"], "U_DELETE", array())) {
                            echo "<a class=\"btn btn-danger\" href=\"";
                            echo $this->getAttribute($context["postrow"], "U_DELETE", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                            echo "\"><i class=\"fa fa-trash-o fa-fw\" aria-hidden=\"true\"></i></a>";
                        }
                        // line 353
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 355
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 356
                    if ($this->getAttribute($context["postrow"], "U_REPORT", array())) {
                        echo "<a class=\"btn btn-danger\" href=\"";
                        echo $this->getAttribute($context["postrow"], "U_REPORT", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
                        echo "\"><i class=\"fa fa-exclamation fa-fw\" aria-hidden=\"true\"></i></a>";
                    }
                    // line 357
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_WARN", array())) {
                        echo "<a class=\"btn btn-warning\" href=\"";
                        echo $this->getAttribute($context["postrow"], "U_WARN", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                        echo "\"><i class=\"fa fa-minus fa-fw\" aria-hidden=\"true\"></i></a>";
                    }
                    // line 358
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_INFO", array())) {
                        echo "<a class=\"btn btn-primary\" href=\"";
                        echo $this->getAttribute($context["postrow"], "U_INFO", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("INFORMATION");
                        echo "\"><i class=\"fa fa-info fa-fw\" aria-hidden=\"true\"></i></a>";
                    }
                    // line 359
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["postrow"], "U_QUOTE", array())) {
                        echo "<a class=\"btn btn-success\" href=\"";
                        echo $this->getAttribute($context["postrow"], "U_QUOTE", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("REPLY_WITH_QUOTE");
                        echo "\"><i class=\"fa fa-quote-left fa-fw\" aria-hidden=\"true\"></i></a>";
                    }
                    // line 360
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 363
                echo "\t\t\t\t\t\t\t\t\t";
                // line 364
                echo "\t\t\t\t\t\t\t\t";
            }
            // line 365
            echo "\t\t\t\t\t\t\t\t";
            // line 366
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t";
            // line 369
            echo $this->getAttribute($context["postrow"], "MESSAGE", array());
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 371
            if ($this->getAttribute($context["postrow"], "S_HAS_ATTACHMENTS", array())) {
                // line 372
                echo "\t\t\t\t\t\t\t<div class=\"panel panel-default attachbox panel-collapsible\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
                // line 374
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "</h3>
\t\t\t\t\t\t\t\t\t<span class=\"pull-right panel-right clickable panel-collapsed\"><i class=\"fa fa-chevron-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"panel-body\" style=\"display:none\">
\t\t\t\t\t\t\t\t\t";
                // line 378
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["postrow"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 379
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 381
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 384
            echo "\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 387
            if ($this->getAttribute($context["postrow"], "SIGNATURE", array())) {
                // line 388
                echo "\t\t\t\t\t<div class=\"panel-body no-padding text-center hidden-xs\">
\t\t\t\t\t\t<div id=\"sig";
                // line 389
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\" class=\"signature\">";
                echo $this->getAttribute($context["postrow"], "SIGNATURE", array());
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 392
            echo "\t\t\t\t<div class=\"panel-footer post-footer\">
\t\t\t\t\t";
            // line 393
            // line 394
            echo "\t\t\t\t\t<div class=\"panel-foo\">
\t\t\t\t\t\t";
            // line 395
            if ($this->getAttribute($context["postrow"], "S_DISPLAY_NOTICE", array())) {
                echo "<div class=\"rules\">";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 396
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["postrow"], "DELETED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "DELETE_REASON", array()))) {
                // line 397
                echo "\t\t\t\t\t\t\t<div class=\"notice post_deleted_msg\" ";
                if ($this->getAttribute($context["postrow"], "S_POST_HIDDEN", array())) {
                    echo "style=\"display: none;\"";
                }
                echo " id=\"post_deleted_msg";
                echo $this->getAttribute($context["postrow"], "POST_ID", array());
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 398
                echo $this->getAttribute($context["postrow"], "DELETED_MESSAGE", array());
                echo "
\t\t\t\t\t\t\t\t";
                // line 399
                if ($this->getAttribute($context["postrow"], "DELETE_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "DELETE_REASON", array());
                    echo "</em>";
                }
                // line 400
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 401
$context["postrow"], "EDITED_MESSAGE", array()) || $this->getAttribute($context["postrow"], "EDIT_REASON", array()))) {
                // line 402
                echo "\t\t\t\t\t\t\t<div class=\"notice\">
\t\t\t\t\t\t\t\t";
                // line 403
                echo $this->getAttribute($context["postrow"], "EDITED_MESSAGE", array());
                echo "
\t\t\t\t\t\t\t\t";
                // line 404
                if ($this->getAttribute($context["postrow"], "EDIT_REASON", array())) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute($context["postrow"], "EDIT_REASON", array());
                    echo "</em>";
                }
                // line 405
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 407
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array())) {
                // line 408
                echo "\t\t\t\t\t\t\t<br /><br />";
                echo $this->getAttribute($context["postrow"], "BUMPED_MESSAGE", array());
                echo "
\t\t\t\t\t\t";
            }
            // line 410
            echo "\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 411
            // line 412
            echo "\t\t\t\t\t";
            // line 413
            echo "\t\t\t\t\t<div class=\"to-top pull-right\">";
            echo "<a href=\"#content-wrapper\" class=\"top\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "\"><i class=\"fa fa-chevron-up fa-fw\" aria-hidden=\"true\"></i></a>";
            echo "</div>";
            // line 414
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 415
            // line 416
            echo "\t\t\t</div>
\t\t</div>
\t\t";
            // line 418
            // line 419
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 420
        echo "</div>

";
        // line 422
        if ((isset($context["S_QUICK_REPLY"]) ? $context["S_QUICK_REPLY"] : null)) {
            // line 423
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 423)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 425
        echo "
";
        // line 426
        // line 427
        echo "<div class=\"row mobile-fix\">
\t";
        // line 428
        // line 429
        echo "\t<div class=\"col-md-4 hidden-xs\">
\t\t";
        // line 430
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
            // line 431
            echo "\t\t\t";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                // line 432
                echo "\t\t\t\t<a class=\"btn btn-danger btn-labeled\" href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED");
                echo "\"><span class=\"btn-label\"><i class=\"fa fa-lock fa-fw\" aria-hidden=\"true\"></i></span> ";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED_SHORT");
                echo "</a>
\t\t\t";
            } else {
                // line 434
                echo "\t\t\t\t<a class=\"btn btn-primary btn-labeled\" href=\"";
                echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
                echo "\"><span class=\"btn-label\"><i class=\"fa fa-pencil-square-o fa-fw\" aria-hidden=\"true\"></i></span> ";
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
                echo "</a>
\t\t\t";
            }
            // line 436
            echo "\t\t";
        }
        // line 437
        echo "\t\t";
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 437)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 438
        echo "\t</div>
\t";
        // line 439
        // line 440
        echo "
\t";
        // line 441
        // line 442
        echo "
\t";
        // line 443
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 444
            echo "\t\t<div class=\"col-md-4 text-center\">
\t\t\t";
            // line 445
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "viewtopic_body.html", 445)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 446
            echo "\t\t</div>
\t";
        }
        // line 448
        echo "
\t";
        // line 449
        if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
            // line 450
            echo "\t\t<div class=\"col-md-4 hidden-xs pull-right\">
\t\t\t<form method=\"get\" action=\"";
            // line 451
            echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
            echo "\" class=\"form-search no-margin\">
\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t<input class=\"input-medium form-control\" type=\"search\" name=\"keywords\" size=\"20\" placeholder=\"";
            // line 453
            echo $this->env->getExtension('phpbb')->lang("SEARCH_TOPIC");
            echo "\"/>
\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t";
            // line 455
            echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" title=\"";
            // line 456
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</button>
\t\t\t\t\t\t<a href=\"";
            // line 457
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"btn btn-default\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\"><i class=\"fa fa-cog fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 463
        echo "</div>
<div class=\"clearfix\"></div>

<div class=\"row\">
\t<div class=\"col-md-3 hidden-xs\">
\t\t<a href=\"";
        // line 468
        echo (isset($context["U_VIEW_OLDER_TOPIC"]) ? $context["U_VIEW_OLDER_TOPIC"] : null);
        echo "\" class=\"btn btn-primary btn-labeled text-right\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("VIEW_PREVIOUS_TOPIC");
        echo "\"><span class=\"btn-label\"><i class=\"fa fa-chevron-left fa-fw\" aria-hidden=\"true\"></i></span> ";
        echo $this->env->getExtension('phpbb')->lang("VIEW_PREVIOUS_TOPIC");
        echo "</a>
\t</div>
\t<div class=\"col-md-6 col-xs-12 text-center\">
\t\t<div class=\"btn-group total-posts-container\">
\t\t\t";
        // line 472
        if (((isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            echo "<a href=\"";
            echo (isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null);
            echo "\" class=\"btn btn-default btn-sm\">";
            echo $this->env->getExtension('phpbb')->lang("VIEW_UNREAD_POST");
            echo "</a>";
        }
        echo "<a class=\"btn btn-default btn-sm disabled\">";
        echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
        echo "</a>
\t\t\t";
        // line 473
        if (((isset($context["BASE_URL"]) ? $context["BASE_URL"] : null) && ((isset($context["TOTAL_PAGES"]) ? $context["TOTAL_PAGES"] : null) > 6))) {
            // line 474
            echo "\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t";
            // line 475
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo " <span class=\"caret\"></span>
\t\t\t\t</button>
\t\t\t\t<ul class=\"dropdown-menu jump-to\">
\t\t\t\t\t<li>";
            // line 478
            echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</li>
\t\t\t\t\t<li class=\"page-jump-form\">
\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t<input type=\"number\" name=\"page-number\" min=\"1\" maxlength=\"6\" title=\"";
            // line 481
            echo $this->env->getExtension('phpbb')->lang("JUMP_PAGE");
            echo "\" class=\"form-control\" data-per-page=\"";
            echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
            echo "\" data-base-url=\"";
            echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "html_attr");
            echo "\" data-start-name=\"";
            echo (isset($context["START_NAME"]) ? $context["START_NAME"] : null);
            echo "\" />
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-primary btn-sm\" value=\"";
            // line 483
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" type=\"button\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t";
        } else {
            // line 489
            echo "\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a>
\t\t\t";
        }
        // line 491
        echo "\t\t</div>
\t</div>
\t<div class=\"col-md-3 hidden-xs\">
\t\t<a href=\"";
        // line 494
        echo (isset($context["U_VIEW_NEWER_TOPIC"]) ? $context["U_VIEW_NEWER_TOPIC"] : null);
        echo "\" class=\"btn btn-primary btn-labeled pull-right\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("VIEW_NEXT_TOPIC");
        echo "\"> ";
        echo $this->env->getExtension('phpbb')->lang("VIEW_NEXT_TOPIC");
        echo "<span class=\"btn-label btn-label-right\"><i class=\"fa fa-chevron-right fa-fw\" aria-hidden=\"true\"></i></span></a>
\t</div>
</div>

";
        // line 498
        if ((((isset($context["S_NUM_POSTS"]) ? $context["S_NUM_POSTS"] : null) > 1) || (isset($context["PREVIOUS_PAGE"]) ? $context["PREVIOUS_PAGE"] : null))) {
            // line 499
            echo "\t<form id=\"viewtopic\" method=\"post\" action=\"";
            echo (isset($context["S_TOPIC_ACTION"]) ? $context["S_TOPIC_ACTION"] : null);
            echo "\">
\t\t";
            // line 500
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "viewtopic_body.html", 500)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 501
            echo "\t</form>
";
        }
        // line 503
        echo "
";
        // line 504
        // line 505
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 505)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 506
        echo "
";
        // line 507
        if ((isset($context["S_TOPIC_MOD"]) ? $context["S_TOPIC_MOD"] : null)) {
            // line 508
            echo "\t<div class=\"panel panel-info\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">";
            // line 510
            echo $this->env->getExtension('phpbb')->lang("QUICK_MOD");
            echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<form method=\"post\" action=\"";
            // line 513
            echo (isset($context["S_MOD_ACTION"]) ? $context["S_MOD_ACTION"] : null);
            echo "\" class=\"form-inline pull-right\">
\t\t\t\t<fieldset class=\"quickmod\">
\t\t\t\t\t";
            // line 515
            echo (isset($context["S_TOPIC_MOD"]) ? $context["S_TOPIC_MOD"] : null);
            echo " <input type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"btn btn-default\" />
\t\t\t\t\t";
            // line 516
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t</div>
";
        }
        // line 522
        echo "
";
        // line 523
        if ((( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_LOGIN_PANEL", array()) == 1))) {
            // line 524
            echo "\t";
            $location = "login_panel.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("login_panel.html", "viewtopic_body.html", 524)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 526
        echo "
";
        // line 527
        if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
            // line 528
            echo "\t";
            $location = "online_panel.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("online_panel.html", "viewtopic_body.html", 528)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 530
        echo "
";
        // line 531
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 531)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1716 => 531,  1713 => 530,  1699 => 528,  1697 => 527,  1694 => 526,  1680 => 524,  1678 => 523,  1675 => 522,  1666 => 516,  1660 => 515,  1655 => 513,  1649 => 510,  1645 => 508,  1643 => 507,  1640 => 506,  1628 => 505,  1627 => 504,  1624 => 503,  1620 => 501,  1608 => 500,  1603 => 499,  1601 => 498,  1590 => 494,  1585 => 491,  1579 => 489,  1570 => 483,  1559 => 481,  1552 => 478,  1546 => 475,  1543 => 474,  1541 => 473,  1529 => 472,  1518 => 468,  1511 => 463,  1500 => 457,  1494 => 456,  1490 => 455,  1485 => 453,  1480 => 451,  1477 => 450,  1475 => 449,  1472 => 448,  1468 => 446,  1456 => 445,  1453 => 444,  1451 => 443,  1448 => 442,  1447 => 441,  1444 => 440,  1443 => 439,  1440 => 438,  1427 => 437,  1424 => 436,  1414 => 434,  1404 => 432,  1401 => 431,  1399 => 430,  1396 => 429,  1395 => 428,  1392 => 427,  1391 => 426,  1388 => 425,  1374 => 423,  1372 => 422,  1368 => 420,  1362 => 419,  1361 => 418,  1357 => 416,  1356 => 415,  1353 => 414,  1347 => 413,  1345 => 412,  1344 => 411,  1341 => 410,  1335 => 408,  1332 => 407,  1328 => 405,  1319 => 404,  1315 => 403,  1312 => 402,  1310 => 401,  1307 => 400,  1298 => 399,  1294 => 398,  1285 => 397,  1282 => 396,  1276 => 395,  1273 => 394,  1272 => 393,  1269 => 392,  1261 => 389,  1258 => 388,  1256 => 387,  1251 => 384,  1246 => 381,  1237 => 379,  1233 => 378,  1226 => 374,  1222 => 372,  1220 => 371,  1215 => 369,  1210 => 366,  1208 => 365,  1205 => 364,  1203 => 363,  1198 => 360,  1189 => 359,  1180 => 358,  1171 => 357,  1163 => 356,  1160 => 355,  1156 => 353,  1147 => 352,  1139 => 351,  1136 => 350,  1134 => 349,  1131 => 348,  1129 => 347,  1126 => 346,  1123 => 345,  1121 => 344,  1118 => 343,  1114 => 341,  1113 => 340,  1104 => 339,  1103 => 338,  1092 => 335,  1084 => 330,  1080 => 328,  1078 => 327,  1075 => 326,  1069 => 325,  1064 => 322,  1062 => 321,  1058 => 319,  1052 => 317,  1048 => 315,  1046 => 314,  1043 => 313,  1041 => 312,  1038 => 311,  1036 => 310,  1033 => 309,  1031 => 308,  1028 => 307,  1026 => 306,  1023 => 305,  1021 => 304,  1018 => 303,  1016 => 302,  1013 => 301,  1011 => 300,  1007 => 299,  992 => 298,  987 => 295,  984 => 294,  980 => 293,  977 => 292,  972 => 291,  969 => 290,  968 => 289,  965 => 288,  963 => 287,  957 => 286,  946 => 284,  943 => 283,  938 => 282,  936 => 281,  928 => 279,  925 => 278,  922 => 277,  912 => 276,  902 => 275,  885 => 274,  878 => 269,  876 => 268,  864 => 267,  863 => 266,  860 => 265,  858 => 264,  849 => 263,  848 => 262,  844 => 260,  842 => 259,  839 => 258,  826 => 257,  812 => 255,  809 => 254,  808 => 253,  796 => 249,  794 => 248,  791 => 247,  786 => 244,  780 => 241,  776 => 240,  773 => 239,  771 => 238,  766 => 236,  762 => 235,  759 => 234,  757 => 233,  751 => 231,  749 => 230,  736 => 229,  725 => 220,  717 => 218,  714 => 217,  708 => 214,  704 => 213,  698 => 211,  692 => 209,  690 => 208,  685 => 206,  680 => 205,  678 => 204,  673 => 202,  669 => 201,  664 => 199,  660 => 198,  655 => 196,  649 => 194,  647 => 193,  639 => 192,  617 => 191,  616 => 190,  603 => 188,  598 => 187,  587 => 186,  585 => 185,  581 => 184,  577 => 182,  576 => 181,  573 => 180,  565 => 175,  561 => 174,  556 => 172,  552 => 170,  547 => 167,  539 => 166,  535 => 165,  531 => 163,  529 => 162,  519 => 158,  513 => 157,  509 => 155,  503 => 154,  502 => 153,  495 => 149,  489 => 148,  484 => 145,  478 => 144,  462 => 143,  455 => 141,  451 => 139,  445 => 137,  438 => 134,  426 => 132,  414 => 130,  412 => 129,  401 => 128,  398 => 127,  392 => 126,  380 => 125,  378 => 124,  374 => 123,  363 => 121,  357 => 118,  350 => 115,  348 => 114,  345 => 113,  344 => 112,  340 => 110,  329 => 104,  323 => 103,  319 => 102,  314 => 100,  309 => 98,  306 => 97,  304 => 96,  301 => 95,  300 => 94,  297 => 93,  293 => 91,  281 => 90,  278 => 89,  276 => 88,  273 => 87,  272 => 86,  269 => 85,  264 => 82,  249 => 80,  245 => 79,  241 => 78,  234 => 73,  231 => 72,  229 => 71,  216 => 70,  213 => 69,  203 => 67,  193 => 65,  190 => 64,  188 => 63,  185 => 62,  184 => 61,  177 => 56,  171 => 54,  162 => 48,  151 => 46,  144 => 43,  138 => 40,  135 => 39,  133 => 38,  121 => 37,  115 => 33,  102 => 30,  99 => 29,  97 => 28,  94 => 27,  89 => 24,  84 => 22,  78 => 20,  70 => 18,  68 => 17,  64 => 15,  62 => 14,  59 => 13,  52 => 9,  48 => 7,  46 => 6,  43 => 5,  42 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <h2 class="page-title text-center"><!-- EVENT viewtopic_topic_title_prepend --><a href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a><!-- EVENT viewtopic_topic_title_append --></h2>*/
/* <!-- EVENT viewtopic_topic_title_after -->*/
/* */
/* <!-- IF FORUM_DESC -->*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-body">*/
/* 			{FORUM_DESC}*/
/* 		</div>*/
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
/* <!-- IF MODERATORS -->*/
/* <p>*/
/* 	<strong><!-- IF S_SINGLE_MODERATOR -->{L_MODERATOR}<!-- ELSE -->{L_MODERATORS}<!-- ENDIF -->{L_COLON}</strong> {MODERATORS}*/
/* </p>*/
/* <!-- ENDIF -->*/
/* */
/* <div class="row">*/
/* 	<div class="col-md-12 text-center">*/
/* 		<div class="btn-group total-posts-container">*/
/* 			<!-- IF U_VIEW_UNREAD_POST and not S_IS_BOT --><a href="{U_VIEW_UNREAD_POST}" class="btn btn-default btn-sm">{L_VIEW_UNREAD_POST}</a><!-- ENDIF --><a class="btn btn-default btn-sm disabled">{TOTAL_POSTS}</a>*/
/* 			<!-- IF BASE_URL and TOTAL_PAGES > 6 -->*/
/* 				<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/* 					{PAGE_NUMBER} <span class="caret"></span>*/
/* 				</button>*/
/* 				<ul class="dropdown-menu jump-to">*/
/* 					<li>{L_JUMP_TO_PAGE}{L_COLON}</li>*/
/* 					<li class="page-jump-form">*/
/* 						<div class="input-group input-group-sm">*/
/* 							<input type="number" name="page-number" min="1" maxlength="6" title="{L_JUMP_PAGE}" class="form-control" data-per-page="{PER_PAGE}" data-base-url="{BASE_URL|e('html_attr')}" data-start-name="{START_NAME}" />*/
/* 							<span class="input-group-btn">*/
/* 								<input class="btn btn-primary btn-sm" value="{L_GO}" type="button" />*/
/* 							</span>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul>*/
/* 			<!-- ELSE -->*/
/* 				<a class="btn btn-default btn-sm disabled">{PAGE_NUMBER}</a>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <div class="row mobile-fix clearfix">*/
/* 	<!-- EVENT viewtopic_buttons_top_before -->*/
/* 		<div class="col-md-4">*/
/* 			<!-- IF not S_IS_BOT and S_DISPLAY_REPLY_INFO -->*/
/* 				<!-- IF S_IS_LOCKED -->*/
/* 					<a class="btn btn-danger btn-labeled" href="{U_POST_REPLY_TOPIC}" title="{L_TOPIC_LOCKED}"><span class="btn-label"><i class="fa fa-lock fa-fw" aria-hidden="true"></i></span> {L_TOPIC_LOCKED_SHORT}</a>*/
/* 				<!-- ELSE -->*/
/* 					<a class="btn btn-primary btn-labeled" href="{U_POST_REPLY_TOPIC}" title="{L_POST_REPLY}"><span class="btn-label"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i></span> {L_POST_REPLY}</a>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 			<!-- INCLUDE viewtopic_topic_tools.html -->*/
/* 			<!-- EVENT viewtopic_dropdown_top_custom -->*/
/* 			<!-- IF .quickmod -->*/
/* 			<div class="btn-group">*/
/* 				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/* 					<i class="fa fa-gavel fa-fw" aria-hidden="true"></i> <span class="caret"></span>*/
/* 				</button>*/
/* 				<ul class="dropdown-menu">*/
/* 					<!-- BEGIN quickmod -->*/
/* 						<!-- DEFINE $QUICKMOD_AJAX = (quickmod.VALUE in ['lock', 'unlock', 'delete_topic', 'restore_topic', 'make_normal', 'make_sticky', 'make_announce', 'make_global']) -->*/
/* 						<li><a href="{quickmod.LINK}"<!-- IF $QUICKMOD_AJAX --> data-ajax="true" data-refresh="true"<!-- ENDIF -->>{quickmod.TITLE}</a></li>*/
/* 					<!-- END quickmod -->*/
/* 				</ul>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		</div>*/
/* 	<!-- EVENT viewtopic_buttons_top_after -->*/
/* */
/* 	<!-- IF .pagination -->*/
/* 		<div class="col-md-4 text-center">*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT viewtopic_body_pagination_top_after -->*/
/* */
/* 	<!-- IF S_DISPLAY_SEARCHBOX -->*/
/* 		<div class="col-md-4 pull-right">*/
/* 			<form method="get" action="{S_SEARCHBOX_ACTION}" class="form-search no-margin">*/
/* 				<div class="input-group">*/
/* 					<input class="input-medium form-control" type="search" name="keywords" size="20" placeholder="{L_SEARCH_TOPIC}"/>*/
/* 					<span class="input-group-btn">*/
/* 						{S_SEARCH_LOCAL_HIDDEN_FIELDS}*/
/* 						<button type="submit" class="btn btn-default" title="{L_SEARCH}">{L_SEARCH}</button>*/
/* 						<a href="{U_SEARCH}" class="btn btn-default" title="{L_SEARCH_ADV}"><i class="fa fa-cog fa-fw" aria-hidden="true"></i></a>*/
/* 					</span>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* </div>*/
/* */
/* <!-- EVENT viewtopic_body_poll_before -->*/
/* */
/* <!-- IF S_HAS_POLL -->*/
/* 	<form method="post" action="{S_POLL_ACTION}" data-ajax="vote_poll" class="topic_poll">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><!-- EVENT viewtopic_body_poll_question_prepend -->{POLL_QUESTION}<!-- EVENT viewtopic_body_poll_question_append --></h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<p class="author_poll">{L_POLL_LENGTH}<!-- IF S_CAN_VOTE and L_POLL_LENGTH --><br /><!-- ENDIF --><!-- IF S_CAN_VOTE -->{L_MAX_VOTES}<!-- ENDIF --></p>*/
/* 				<fieldset class="polls">*/
/* 				<!-- BEGIN poll_option -->*/
/* 					<!-- EVENT viewtopic_body_poll_option_before -->*/
/* 					<div class="row <!-- IF poll_option.POLL_OPTION_VOTED -->voted" title="{L_POLL_VOTED_OPTION}<!-- ENDIF -->" data-alt-text="{L_POLL_VOTED_OPTION}" data-poll-option-id="{poll_option.POLL_OPTION_ID}">*/
/* 						<!-- IF poll_option.POLL_OPTION_VOTED or S_DISPLAY_RESULTS --><div class="col-md-3 col-md-offset-1 vote_option"><!-- ELSE --><div class="col-md-12 vote_option"><!-- ENDIF -->*/
/* 							<!-- IF S_CAN_VOTE -->*/
/* 								<label for="vote_{poll_option.POLL_OPTION_ID}" class="<!-- IF S_IS_MULTI_CHOICE -->checkbox-inline<!-- ELSE -->radio-inline<!-- ENDIF -->">*/
/* 									<!-- IF S_IS_MULTI_CHOICE -->*/
/* 										<input type="checkbox" name="vote_id[]" id="vote_{poll_option.POLL_OPTION_ID}" value="{poll_option.POLL_OPTION_ID}"<!-- IF poll_option.POLL_OPTION_VOTED --> checked="checked"<!-- ENDIF --> />*/
/* 									<!-- ELSE -->*/
/* 										<input type="radio" name="vote_id[]" id="vote_{poll_option.POLL_OPTION_ID}" value="{poll_option.POLL_OPTION_ID}"<!-- IF poll_option.POLL_OPTION_VOTED --> checked="checked"<!-- ENDIF --> />*/
/* 									<!-- ENDIF -->*/
/* 									<div class="vote_caption">{poll_option.POLL_OPTION_CAPTION}</div>*/
/* 								</label>*/
/* 							<!-- ELSE -->*/
/* 								{poll_option.POLL_OPTION_CAPTION}*/
/* 							<!-- ENDIF -->*/
/* 						</div>*/
/* */
/* 						<div class="col-md-6 vote_progress<!-- IF not S_DISPLAY_RESULTS --> hidden<!-- ENDIF -->">*/
/* 							<div class="progress">*/
/* 								<div class="progress-bar <!-- IF poll_option.POLL_OPTION_PCT < 33 -->progress-bar-danger<!-- ELSEIF poll_option.POLL_OPTION_PCT < 66 -->progress-bar-warning<!-- ELSE -->progress-bar-success<!-- ENDIF -->"  role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<!-- IF poll_option.POLL_OPTION_PCT < 10 -->10%<!-- ELSE -->{poll_option.POLL_OPTION_PERCENT}<!-- ENDIF -->;">*/
/* 									<!-- IF poll_option.POLL_OPTION_RESULT == 0 -->{L_NO_VOTES}<!-- ELSE -->{poll_option.POLL_OPTION_PERCENT}<!-- ENDIF -->*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="col-md-2 poll_option_percent<!-- IF not S_DISPLAY_RESULTS --> hidden<!-- ENDIF -->">*/
/* 							{poll_option.POLL_OPTION_RESULT}*/
/* 						</div>*/
/* */
/* 					</div>*/
/* 					<!-- EVENT viewtopic_body_poll_option_after -->*/
/* 				<!-- END poll_option -->*/
/* 				<div class="clearfix"></div>*/
/* */
/* 					<div class="text-center center-block poll_total_votes<!-- IF not S_DISPLAY_RESULTS --> hidden<!-- ENDIF -->">*/
/* 						<a class="btn btn-default disabled">{L_TOTAL_VOTES}{L_COLON} <span class="poll_total_vote_cnt">{TOTAL_VOTES}</span></a>*/
/* 					</div>*/
/* */
/* 				<div class="spacer"></div>*/
/* 				<!-- IF S_CAN_VOTE -->*/
/* 					<div class=" text-center center-block">*/
/* 						<div class="btn-group poll_vote">*/
/* 							<input type="submit" name="update" value="{L_SUBMIT_VOTE}" class="btn btn-success submit_poll" />*/
/* 							<!-- IF not S_DISPLAY_RESULTS --><a class="btn btn-warning poll_view_results" href="{U_VIEW_RESULTS}">{L_VIEW_RESULTS}</a><!-- ENDIF -->*/
/* 						</div>*/
/* 					</div>*/
/* 				<!-- ENDIF -->*/
/* 				</fieldset>*/
/* 				<div class="spacer"></div>*/
/* 				<div class="alert alert-success vote-submitted hidden">{L_VOTE_SUBMITTED}</div>*/
/* 			</div>*/
/* 			{S_FORM_TOKEN}*/
/* 			{S_HIDDEN_FIELDS}*/
/* 		</div>*/
/* 	</form>*/
/* 	<hr />*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT viewtopic_body_poll_after -->*/
/* */
/* <div id="posts">*/
/* 	<!-- BEGIN postrow -->*/
/* 		<!-- EVENT viewtopic_body_postrow_post_before -->*/
/* 		<!-- IF postrow.S_FIRST_UNREAD --><a id="unread" class="anchor"<!-- IF S_UNREAD_VIEW --> data-url="{postrow.U_MINI_POST}"<!-- ENDIF -->></a><!-- ENDIF -->*/
/* 		<div id="p{postrow.POST_ID}">*/
/* 			<div class="panel <!-- IF postrow.S_UNREAD_POST -->panel-info<!-- ELSEIF postrow.S_POST_REPORTED or postrow.S_POST_DELETED -->panel-danger<!-- ELSEIF postrow.POSTER_WARNINGS -->panel-warning<!-- ELSE -->panel-primary<!-- ENDIF --> post-body">*/
/* 				<div class="panel-heading clearfix">*/
/* 					<!-- EVENT viewtopic_body_post_subject_before -->*/
/* 					<h3 class="panel-title<!-- IF postrow.S_FIRST_ROW --> first<!-- ENDIF --> pull-left"><!-- IF postrow.POST_ICON_IMG --><img src="{T_ICONS_PATH}{postrow.POST_ICON_IMG}" width="{postrow.POST_ICON_IMG_WIDTH}" height="{postrow.POST_ICON_IMG_HEIGHT}" alt="" /> <!-- ENDIF --><a href="#p{postrow.POST_ID}">{postrow.POST_SUBJECT}</a></h3>*/
/* 					<div class="pull-right" <!-- IF postrow.S_POST_HIDDEN -->style="display: none;"<!-- ENDIF -->  id="post_mcp_action{postrow.POST_ID}">*/
/* 						<!-- IF postrow.S_POST_UNAPPROVED -->*/
/* 							<form method="post" class="mcp_approve" action="{postrow.U_APPROVE_ACTION}">*/
/* 								<span><i class="fa fa-question fa-fw" aria-hidden="true"></i></span>*/
/* 								<strong>{L_POST_UNAPPROVED_ACTION}</strong>*/
/* 								<div class="btn-group no-margin-bottom">*/
/* 									<button class="btn btn-xs btn-danger" type="submit" title="{L_DISAPPROVE}" name="action[disapprove]"><i class="fa fa-times fa-fw" aria-hidden="true"></i></button>*/
/* 									<button class="btn btn-xs btn-success" type="submit" title="{L_APPROVE}" name="action[approve]"><i class="fa fa-check fa-fw" aria-hidden="true"></i></button>*/
/* 								</div>*/
/* 								<input type="hidden" name="post_id_list[]" value="{postrow.POST_ID}" />*/
/* 								{S_FORM_TOKEN}*/
/* 							</form>*/
/* 						<!-- ELSEIF postrow.S_POST_DELETED -->*/
/* 							<form method="post" class="mcp_approve pull-right" action="{postrow.U_APPROVE_ACTION}">*/
/* 								<strong>{L_POST_DELETED_ACTION}</strong>*/
/* 								<div class="btn-group no-margin-bottom">*/
/* 									<!-- IF postrow.S_DELETE_PERMANENT -->*/
/* 										<button class="btn btn-xs btn-danger" type="submit" title="{L_DELETE}" name="action[delete]"><i class="fa fa-trash fa-fw" aria-hidden="true"></i></button>*/
/* 									<!-- ENDIF -->*/
/* 									<button class="btn btn-xs btn-success" type="submit" title="{L_RESTORE}" name="action[restore]"><i class="fa fa-refresh fa-fw" aria-hidden="true"></i></button>*/
/* 								</div>*/
/* 								<input type="hidden" name="post_id_list[]" value="{postrow.POST_ID}" />*/
/* 								{S_FORM_TOKEN}*/
/* 							</form>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF postrow.S_POST_REPORTED -->*/
/* 							<a href="{postrow.U_MCP_REPORT}"><i class="fa fa-exclamation fa-fw" aria-hidden="true"></i><strong>{L_POST_REPORTED}</strong></a>*/
/* 						<!-- ENDIF -->*/
/* 						<div class="btn-group btn-toolbar-mobile visible-xs-block">*/
/* 							<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/* 								<i class="fa fa-cog"></i>*/
/* 							</button>*/
/* 							<ul class="dropdown-menu dropdown-menu-right">*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="panel-body no-padding<!-- IF not postrow.S_POST_HIDDEN --> badger-left<!-- IF postrow.S_ONLINE and not postrow.S_IGNORE_POST --> badger-success" data-badger="{$ONLINE_BADGE}<!-- ELSE --> badger-danger" data-badger="{$OFFLINE_BADGE}<!-- ENDIF --><!-- ENDIF -->">*/
/* 					<!-- IF postrow.S_POST_HIDDEN -->*/
/* 						<div class="post-content" id="post_hidden{postrow.POST_ID}">*/
/* 							<div class="content">*/
/* 								<!-- IF postrow.S_POST_DELETED -->*/
/* 									<div class="ignore">*/
/* 										{postrow.L_POST_DELETED_MESSAGE}<br />*/
/* 										{postrow.L_POST_DISPLAY}*/
/* 									</div>*/
/* 								<!-- ELSEIF postrow.S_IGNORE_POST -->*/
/* 									<div class="ignore">*/
/* 										{postrow.L_IGNORE_POST}<br />*/
/* 										{postrow.L_POST_DISPLAY}*/
/* 									</div>*/
/* 								<!-- ENDIF -->*/
/* 							</div>*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 					<div class="row no-margin post-flex">*/
/* 					<!-- IF not postrow.S_IGNORE_POST -->*/
/* 						<div class="col-md-3 col-xs-12 post-info post-info-left" <!-- IF postrow.S_POST_HIDDEN -->style="display: none;"<!-- ENDIF --> id="profile{postrow.POST_ID}">*/
/* 							<div class="row no-margin-xs">*/
/* 								<dl class="col-sm-12 col-xs-6 no-margin-xs no-padding-xs">*/
/* 									<dt class="avatar text-center rounded">*/
/* 										<!-- EVENT viewtopic_body_avatar_before -->*/
/* 										<!-- IF postrow.POSTER_AVATAR -->*/
/* 											<!-- IF postrow.U_POST_AUTHOR --><a href="{postrow.U_POST_AUTHOR}">{postrow.POSTER_AVATAR}</a><!-- ELSE -->{postrow.POSTER_AVATAR}<!-- ENDIF --><br />*/
/* 										<!-- ELSE -->*/
/* 											<!-- IF postrow.U_POST_AUTHOR --><a href="{postrow.U_POST_AUTHOR}"><img src="{T_THEME_PATH}/images/default_avatar.jpg" alt="avatar"></a><!-- ELSE --><img src="{T_THEME_PATH}/images/default_avatar.jpg" alt="avatar"><!-- ENDIF -->*/
/* 										<!-- ENDIF -->*/
/* 										<!-- EVENT viewtopic_body_avatar_after -->*/
/* 									</dt>*/
/* 									<dd class="text-center author-name">*/
/* 										<!-- EVENT viewtopic_body_post_author_before -->*/
/* 										<!-- IF not postrow.U_POST_AUTHOR --><strong>{postrow.POST_AUTHOR_FULL}</strong> <!-- ELSE -->{postrow.POST_AUTHOR_FULL}<!-- ENDIF -->*/
/* 										<!-- EVENT viewtopic_body_post_author_after -->*/
/* 									</dd>*/
/* 									<!-- EVENT viewtopic_body_postrow_rank_before -->*/
/* 									<!-- IF postrow.RANK_TITLE or postrow.RANK_IMG --><dd class="text-center author-rank"><span class="badge">{postrow.RANK_TITLE}</span><!-- IF postrow.RANK_TITLE and postrow.RANK_IMG --><br /><!-- ENDIF -->{postrow.RANK_IMG}</dd><!-- ENDIF -->*/
/* 									<!-- EVENT viewtopic_body_postrow_rank_after -->*/
/* 								</dl>*/
/* 								<dl class="col-sm-12 hidden-xs">*/
/* 									<dt>*/
/* 										<hr/>*/
/* 									</dt>*/
/* 									<!-- IF postrow.POSTER_POSTS != '' --><dd class="profile-posts"><strong>{L_POSTS}{L_COLON}</strong> <!-- IF postrow.U_SEARCH !== '' --><a href="{postrow.U_SEARCH}"><!-- ENDIF -->{postrow.POSTER_POSTS}<!-- IF postrow.U_SEARCH !== '' --></a><!-- ENDIF --></dd><!-- ENDIF -->*/
/* 									<!-- IF postrow.POSTER_JOINED --><dd class="profile-joined"><strong>{L_JOINED}{L_COLON}</strong> {postrow.POSTER_JOINED}</dd><!-- ENDIF -->*/
/* 									<!-- IF postrow.POSTER_WARNINGS --><dd class="profile-warnings"><strong>{L_WARNINGS}{L_COLON}</strong> {postrow.POSTER_WARNINGS}</dd><!-- ENDIF -->*/
/* 									<!-- IF postrow.S_PROFILE_FIELD1 -->*/
/* 										<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->*/
/* 										<dd><strong>{postrow.PROFILE_FIELD1_NAME}{L_COLON}</strong> {postrow.PROFILE_FIELD1_VALUE}</dd>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- EVENT viewtopic_body_postrow_custom_fields_before -->*/
/* 									<!-- BEGIN custom_fields -->*/
/* 										<!-- IF not postrow.custom_fields.S_PROFILE_CONTACT -->*/
/* 											<dd class="profile-{postrow.custom_fields.PROFILE_FIELD_IDENT}"><strong>{postrow.custom_fields.PROFILE_FIELD_NAME}{L_COLON}</strong> {postrow.custom_fields.PROFILE_FIELD_VALUE}</dd>*/
/* 										<!-- ENDIF -->*/
/* 									<!-- END custom_fields -->*/
/* 									<!-- EVENT viewtopic_body_postrow_custom_fields_after -->*/
/* */
/* 									<!-- EVENT viewtopic_body_contact_fields_before -->*/
/* 									<!-- IF not S_IS_BOT and .postrow.contact -->*/
/* 										<!-- BEGIN contact -->*/
/* 											{% set REMAINDER = postrow.contact.S_ROW_COUNT % 4 %}*/
/* 											<!-- DEFINE $S_LAST_CELL = ((REMAINDER eq 3) or (postrow.contact.S_LAST_ROW and postrow.contact.S_NUM_ROWS < 4)) -->*/
/* 											<!-- IF REMAINDER eq 0 -->*/
/* 												<dd><div class="spacer"></div></dd>*/
/* 												<dd><div class="btn-group">*/
/* 											<!-- ENDIF -->*/
/* 											<a href="<!-- IF postrow.contact.U_CONTACT -->{postrow.contact.U_CONTACT}<!-- ELSE -->{postrow.U_POST_AUTHOR}<!-- ENDIF -->" title="{postrow.contact.NAME}" class="btn btn-sm btn-primary" <!-- IF postrow.contact.ID eq 'jabber' --> onclick="popup(this.href, 750, 320); return false;"<!-- ENDIF -->>*/
/* 												<span class="contact-icon {postrow.contact.ID}-icon">*/
/* 													<!-- IF postrow.contact.ID eq 'email' -->*/
/* 														<i class="fa fa-envelope fa-fw" aria-hidden="true"></i>*/
/* 													<!-- ELSEIF postrow.contact.ID eq 'pm' -->*/
/* 														<i class="fa fa-comment fa-fw" aria-hidden="true"></i>*/
/* 													<!-- ELSEIF postrow.contact.ID eq 'phpbb_website' -->*/
/* 														<i class="fa fa-globe fa-fw" aria-hidden="true"></i>*/
/* 													<!-- ELSEIF postrow.contact.ID eq 'phpbb_facebook' -->*/
/* 														<i class="fa fa-facebook fa-fw" aria-hidden="true"></i>*/
/* 													<!-- ELSEIF postrow.contact.ID eq 'phpbb_twitter' -->*/
/* 														<i class="fa fa-twitter fa-fw" aria-hidden="true"></i>*/
/* 													<!-- ELSEIF postrow.contact.ID eq 'phpbb_skype' -->*/
/* 														<i class="fa fa-skype fa-fw" aria-hidden="true"></i>*/
/* 													<!-- ELSEIF postrow.contact.ID eq 'phpbb_youtube' -->*/
/* 														<i class="fa fa-youtube fa-fw" aria-hidden="true"></i>*/
/* 													<!-- ELSEIF postrow.contact.ID eq 'phpbb_googleplus' -->*/
/* 														<i class="fa fa-google-plus fa-fw" aria-hidden="true"></i>*/
/* 													<!-- ELSE -->*/
/* 														{postrow.contact.NAME}*/
/* 													<!-- ENDIF -->*/
/* 												</span>*/
/* 											</a>*/
/* 											<!-- IF REMAINDER eq 3 or postrow.contact.S_LAST_ROW -->*/
/* 												</div></dd>*/
/* 												<dd><div class="clearfix"></div></dd>*/
/* 											<!-- ENDIF -->*/
/* 										<!-- END contact -->*/
/* 									<!-- ENDIF -->*/
/* 									<!-- EVENT viewtopic_body_contact_fields_after -->*/
/* 								</dl>*/
/* 								<div class="col-xs-6 visible-xs-block text-right post-time-mobile">*/
/* 									{postrow.POST_DATE}*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 					<div class="col-md-9 col-xs-12 post-content" <!-- IF postrow.S_POST_HIDDEN -->style="display: none;"<!-- ENDIF --> id="post_content{postrow.POST_ID}">*/
/* 						<div class="row post-head hidden-xs no-margin-bottom">*/
/* 							<div class="col-md-6 author">*/
/* 								<!-- EVENT viewtopic_body_postrow_post_details_before -->*/
/* 								{L_POST_BY_AUTHOR} <strong>{postrow.POST_AUTHOR_FULL}</strong> &raquo; {postrow.POST_DATE}*/
/* 								<!-- EVENT viewtopic_body_postrow_post_details_after -->*/
/* 							</div>*/
/* 							<div class="col-md-6 col-xs-12 no-padding">*/
/* 								<!-- DEFINE $SHOW_POST_BUTTONS = (postrow.U_EDIT or postrow.U_DELETE or postrow.U_REPORT or postrow.U_WARN or postrow.U_INFO or postrow.U_QUOTE) -->*/
/* 								<!-- EVENT viewtopic_body_post_buttons_list_before -->*/
/* 								<!-- IF not S_IS_BOT -->*/
/* 									<!-- IF $SHOW_POST_BUTTONS -->*/
/* 										<!-- EVENT viewtopic_body_post_buttons_before -->*/
/* 										<div class="btn-toolbar topic-buttons" role="toolbar">*/
/* 											<!-- IF postrow.U_EDIT or postrow.U_DELETE -->*/
/* 												<div class="btn-group btn-group-sm">*/
/* 													<!-- IF postrow.U_EDIT --><a class="btn btn-warning" href="{postrow.U_EDIT}" title="{L_EDIT_POST}"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a><!-- ENDIF -->*/
/* 													<!-- IF postrow.U_DELETE --><a class="btn btn-danger" href="{postrow.U_DELETE}" title="{L_DELETE_POST}"><i class="fa fa-trash-o fa-fw" aria-hidden="true"></i></a><!-- ENDIF -->*/
/* 												</div>*/
/* 											<!-- ENDIF -->*/
/* 											<div class="btn-group btn-group-sm">*/
/* 												<!-- IF postrow.U_REPORT --><a class="btn btn-danger" href="{postrow.U_REPORT}" title="{L_REPORT_POST}"><i class="fa fa-exclamation fa-fw" aria-hidden="true"></i></a><!-- ENDIF -->*/
/* 												<!-- IF postrow.U_WARN --><a class="btn btn-warning" href="{postrow.U_WARN}" title="{L_WARN_USER}"><i class="fa fa-minus fa-fw" aria-hidden="true"></i></a><!-- ENDIF -->*/
/* 												<!-- IF postrow.U_INFO --><a class="btn btn-primary" href="{postrow.U_INFO}" title="{L_INFORMATION}"><i class="fa fa-info fa-fw" aria-hidden="true"></i></a><!-- ENDIF -->*/
/* 												<!-- IF postrow.U_QUOTE --><a class="btn btn-success" href="{postrow.U_QUOTE}" title="{L_REPLY_WITH_QUOTE}"><i class="fa fa-quote-left fa-fw" aria-hidden="true"></i></a><!-- ENDIF -->*/
/* 											</div>*/
/* 										</div>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- EVENT viewtopic_body_post_buttons_after -->*/
/* 								<!-- ENDIF -->*/
/* 								<!-- EVENT viewtopic_body_post_buttons_list_after -->*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="content">*/
/* 							{postrow.MESSAGE}*/
/* 						</div>*/
/* 						<!-- IF postrow.S_HAS_ATTACHMENTS -->*/
/* 							<div class="panel panel-default attachbox panel-collapsible">*/
/* 								<div class="panel-heading">*/
/* 									<h3 class="panel-title">{L_ATTACHMENTS}</h3>*/
/* 									<span class="pull-right panel-right clickable panel-collapsed"><i class="fa fa-chevron-down fa-fw" aria-hidden="true"></i></span>*/
/* 								</div>*/
/* 								<div class="panel-body" style="display:none">*/
/* 									<!-- BEGIN attachment -->*/
/* 										{postrow.attachment.DISPLAY_ATTACHMENT}*/
/* 									<!-- END attachment -->*/
/* 								</div>*/
/* 							</div>*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<!-- IF postrow.SIGNATURE -->*/
/* 					<div class="panel-body no-padding text-center hidden-xs">*/
/* 						<div id="sig{postrow.POST_ID}" class="signature">{postrow.SIGNATURE}</div>*/
/* 					</div>*/
/* 				<!-- ENDIF -->*/
/* 				<div class="panel-footer post-footer">*/
/* 					<!-- EVENT viewtopic_body_postrow_post_notices_before -->*/
/* 					<div class="panel-foo">*/
/* 						<!-- IF postrow.S_DISPLAY_NOTICE --><div class="rules">{L_DOWNLOAD_NOTICE}</div><!-- ENDIF -->*/
/* 						<!-- IF postrow.DELETED_MESSAGE or postrow.DELETE_REASON -->*/
/* 							<div class="notice post_deleted_msg" <!-- IF postrow.S_POST_HIDDEN -->style="display: none;"<!-- ENDIF --> id="post_deleted_msg{postrow.POST_ID}">*/
/* 								{postrow.DELETED_MESSAGE}*/
/* 								<!-- IF postrow.DELETE_REASON --><br /><strong>{L_REASON}{L_COLON}</strong> <em>{postrow.DELETE_REASON}</em><!-- ENDIF -->*/
/* 							</div>*/
/* 						<!-- ELSEIF postrow.EDITED_MESSAGE or postrow.EDIT_REASON -->*/
/* 							<div class="notice">*/
/* 								{postrow.EDITED_MESSAGE}*/
/* 								<!-- IF postrow.EDIT_REASON --><br /><strong>{L_REASON}{L_COLON}</strong> <em>{postrow.EDIT_REASON}</em><!-- ENDIF -->*/
/* 							</div>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF postrow.BUMPED_MESSAGE -->*/
/* 							<br /><br />{postrow.BUMPED_MESSAGE}*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 					<!-- EVENT viewtopic_body_postrow_post_notices_after -->*/
/* 					<!-- EVENT viewtopic_body_postrow_back2top_before -->*/
/* 					<div class="to-top pull-right"><!-- EVENT viewtopic_body_postrow_back2top_prepend --><a href="#content-wrapper" class="top" title="{L_BACK_TO_TOP}"><i class="fa fa-chevron-up fa-fw" aria-hidden="true"></i></a><!-- EVENT viewtopic_body_postrow_back2top_append --></div><!-- EVENT viewtopic_body_postrow_back2top_after -->*/
/* 				</div>*/
/* 				<!-- EVENT viewtopic_body_postrow_post_content_footer -->*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- EVENT viewtopic_body_postrow_post_after -->*/
/* 	<!-- END postrow -->*/
/* </div>*/
/* */
/* <!-- IF S_QUICK_REPLY -->*/
/* 	<!-- INCLUDE quickreply_editor.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT viewtopic_body_topic_actions_before -->*/
/* <div class="row mobile-fix">*/
/* 	<!-- EVENT viewtopic_buttons_bottom_before -->*/
/* 	<div class="col-md-4 hidden-xs">*/
/* 		<!-- IF not S_IS_BOT and S_DISPLAY_REPLY_INFO -->*/
/* 			<!-- IF S_IS_LOCKED -->*/
/* 				<a class="btn btn-danger btn-labeled" href="{U_POST_REPLY_TOPIC}" title="{L_TOPIC_LOCKED}"><span class="btn-label"><i class="fa fa-lock fa-fw" aria-hidden="true"></i></span> {L_TOPIC_LOCKED_SHORT}</a>*/
/* 			<!-- ELSE -->*/
/* 				<a class="btn btn-primary btn-labeled" href="{U_POST_REPLY_TOPIC}" title="{L_POST_REPLY}"><span class="btn-label"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i></span> {L_POST_REPLY}</a>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- INCLUDE viewtopic_topic_tools.html -->*/
/* 	</div>*/
/* 	<!-- EVENT viewtopic_buttons_bottom_after -->*/
/* */
/* 	<!-- EVENT viewtopic_dropdown_bottom_custom -->*/
/* */
/* 	<!-- IF .pagination -->*/
/* 		<div class="col-md-4 text-center">*/
/* 			<!-- INCLUDE pagination.html -->*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_DISPLAY_SEARCHBOX -->*/
/* 		<div class="col-md-4 hidden-xs pull-right">*/
/* 			<form method="get" action="{S_SEARCHBOX_ACTION}" class="form-search no-margin">*/
/* 				<div class="input-group">*/
/* 					<input class="input-medium form-control" type="search" name="keywords" size="20" placeholder="{L_SEARCH_TOPIC}"/>*/
/* 					<span class="input-group-btn">*/
/* 						{S_SEARCH_LOCAL_HIDDEN_FIELDS}*/
/* 						<button type="submit" class="btn btn-default" title="{L_SEARCH}">{L_SEARCH}</button>*/
/* 						<a href="{U_SEARCH}" class="btn btn-default" title="{L_SEARCH_ADV}"><i class="fa fa-cog fa-fw" aria-hidden="true"></i></a>*/
/* 					</span>*/
/* 				</div>*/
/* 			</form>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* </div>*/
/* <div class="clearfix"></div>*/
/* */
/* <div class="row">*/
/* 	<div class="col-md-3 hidden-xs">*/
/* 		<a href="{U_VIEW_OLDER_TOPIC}" class="btn btn-primary btn-labeled text-right" title="{L_VIEW_PREVIOUS_TOPIC}"><span class="btn-label"><i class="fa fa-chevron-left fa-fw" aria-hidden="true"></i></span> {L_VIEW_PREVIOUS_TOPIC}</a>*/
/* 	</div>*/
/* 	<div class="col-md-6 col-xs-12 text-center">*/
/* 		<div class="btn-group total-posts-container">*/
/* 			<!-- IF U_VIEW_UNREAD_POST and not S_IS_BOT --><a href="{U_VIEW_UNREAD_POST}" class="btn btn-default btn-sm">{L_VIEW_UNREAD_POST}</a><!-- ENDIF --><a class="btn btn-default btn-sm disabled">{TOTAL_POSTS}</a>*/
/* 			<!-- IF BASE_URL and TOTAL_PAGES > 6 -->*/
/* 				<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/* 					{PAGE_NUMBER} <span class="caret"></span>*/
/* 				</button>*/
/* 				<ul class="dropdown-menu jump-to">*/
/* 					<li>{L_JUMP_TO_PAGE}{L_COLON}</li>*/
/* 					<li class="page-jump-form">*/
/* 						<div class="input-group input-group-sm">*/
/* 							<input type="number" name="page-number" min="1" maxlength="6" title="{L_JUMP_PAGE}" class="form-control" data-per-page="{PER_PAGE}" data-base-url="{BASE_URL|e('html_attr')}" data-start-name="{START_NAME}" />*/
/* 							<span class="input-group-btn">*/
/* 								<input class="btn btn-primary btn-sm" value="{L_GO}" type="button" />*/
/* 							</span>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul>*/
/* 			<!-- ELSE -->*/
/* 				<a class="btn btn-default btn-sm disabled">{PAGE_NUMBER}</a>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="col-md-3 hidden-xs">*/
/* 		<a href="{U_VIEW_NEWER_TOPIC}" class="btn btn-primary btn-labeled pull-right" title="{L_VIEW_NEXT_TOPIC}"> {L_VIEW_NEXT_TOPIC}<span class="btn-label btn-label-right"><i class="fa fa-chevron-right fa-fw" aria-hidden="true"></i></span></a>*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF S_NUM_POSTS > 1 or PREVIOUS_PAGE -->*/
/* 	<form id="viewtopic" method="post" action="{S_TOPIC_ACTION}">*/
/* 		<!-- INCLUDE display_options.html -->*/
/* 	</form>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT viewtopic_body_footer_before -->*/
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- IF S_TOPIC_MOD -->*/
/* 	<div class="panel panel-info">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title">{L_QUICK_MOD}</h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<form method="post" action="{S_MOD_ACTION}" class="form-inline pull-right">*/
/* 				<fieldset class="quickmod">*/
/* 					{S_TOPIC_MOD} <input type="submit" value="{L_GO}" class="btn btn-default" />*/
/* 					{S_FORM_TOKEN}*/
/* 				</fieldset>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF not S_USER_LOGGED_IN and not S_IS_BOT and $SHOW_LOGIN_PANEL == 1 -->*/
/* 	<!-- INCLUDE login_panel.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_DISPLAY_ONLINE_LIST -->*/
/* 	<!-- INCLUDE online_panel.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
