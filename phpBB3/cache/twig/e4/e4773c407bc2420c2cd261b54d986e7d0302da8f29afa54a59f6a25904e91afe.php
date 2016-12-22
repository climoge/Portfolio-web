<?php

/* search_results.html */
class __TwigTemplate_cc1cd94b433bed362217816c70908ce0165e3ae86d3136631c37bc72c4e7288e extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "search_results.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<div class=\"page-header\">
\t<h2 class=\"searchresults-title\">";
        // line 6
        if ((isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null)) {
            echo (isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null);
        } else {
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
        }
        if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <a href=\"";
            echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
            echo "\">";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "</a>";
        }
        echo "</h2>
</div>
";
        // line 8
        if ((isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null)) {
            echo " <p>";
            echo $this->env->getExtension('phpbb')->lang("SEARCHED_QUERY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <strong>";
            echo (isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null);
            echo "</strong></p>";
        }
        // line 9
        if ((isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null)) {
            echo " <p>";
            echo $this->env->getExtension('phpbb')->lang("IGNORED_TERMS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <strong>";
            echo (isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null);
            echo "</strong></p>";
        }
        // line 10
        if ((isset($context["PHRASE_SEARCH_DISABLED"]) ? $context["PHRASE_SEARCH_DISABLED"] : null)) {
            echo " <p><strong>";
            echo $this->env->getExtension('phpbb')->lang("PHRASE_SEARCH_DISABLED");
            echo "</strong></p>";
        }
        // line 11
        echo "
";
        // line 12
        // line 13
        echo "
";
        // line 14
        if ((((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())) || (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) || (isset($context["TOTAL_MATCHES"]) ? $context["TOTAL_MATCHES"] : null)) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null))) {
            // line 15
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
            echo "\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            // line 19
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "</a>
\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            // line 20
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row mobile-fix\">
\t\t\t";
            // line 25
            if ((isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) {
                // line 26
                echo "\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t";
                // line 27
                if ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
                    // line 28
                    echo "\t\t\t\t\t\t<a class=\"btn btn-warning btn-labeled\" href=\"";
                    echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
                    echo "\"><span class=\"btn-label\"><i class=\"fa fa-arrow-left fa-fw\" aria-hidden=\"true\"></i></span>";
                    echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
                    echo "</a>
\t\t\t\t\t";
                } else {
                    // line 30
                    echo "\t\t\t\t\t\t<a class=\"btn btn-warning btn-labeled\" href=\"";
                    echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                    echo "\"><span class=\"btn-label\"><i class=\"fa fa-arrow-left fa-fw\" aria-hidden=\"true\"></i></span>";
                    echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
                    echo "</a>
\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 34
            echo "\t\t\t";
            if ((isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) {
                echo "<div class=\"col-md-6 hidden-xs text-center\">";
            } else {
                echo "<div class=\"col-md-12 hidden-xs text-center\">";
            }
            // line 35
            echo "\t\t\t\t<div class=\"topic-pagination\">
\t\t\t\t\t";
            // line 36
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 37
                echo "\t\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 37)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 38
                echo "\t\t\t\t\t";
            } else {
                // line 39
                echo "\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a>
\t\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 43
            if ((isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) {
                // line 44
                echo "\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t";
                // line 45
                if ((isset($context["SEARCH_IN_RESULTS"]) ? $context["SEARCH_IN_RESULTS"] : null)) {
                    // line 46
                    echo "\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"add_keywords\" id=\"add_keywords\" value=\"\" class=\"input-medium form-control\" placeholder=\"";
                    // line 47
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_IN_RESULTS");
                    echo "\"/>
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"submit\" value=\"";
                    // line 49
                    echo $this->env->getExtension('phpbb')->lang("SEARCH");
                    echo "\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 53
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 55
            echo "\t\t</div>
\t\t";
            // line 56
            // line 57
            echo "\t</form>
";
        }
        // line 59
        echo "
";
        // line 60
        if ((isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null)) {
            // line 61
            echo "\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) {
                // line 62
                echo "\t\t<table class=\"table table-bordered table-striped\">
\t\t\t<thead class=\"topiclist\">
\t\t\t\t<tr class=\"icon\">
\t\t\t\t\t<th class=\"topic-name\"><i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i> ";
                // line 65
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</th>
\t\t\t\t\t<th class=\"posts hidden-xs\"><i class=\"fa fa-reply fa-fw\" aria-hidden=\"true\"></i> ";
                // line 66
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</th>
\t\t\t\t\t<th class=\"views hidden-xs\"><i class=\"fa fa-eye fa-fw\" aria-hidden=\"true\"></i> ";
                // line 67
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</th>
\t\t\t\t\t<th class=\"lastpost hidden-xs\"><i class=\"fa fa-history fa-fw\" aria-hidden=\"true\"></i> <span>";
                // line 68
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody class=\"topiclist topics\">
\t\t\t\t";
                // line 72
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 73
                    echo "\t\t\t\t\t";
                    // line 74
                    echo "\t\t\t\t\t<tr class=\"clickable\" onclick=\"location.href='";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "'\">
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                    // line 76
                    // line 77
                    echo "\t\t\t\t\t\t\t<div class=\"pull-left forum-icon\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 78
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "\" class=\"btn ";
                    if ($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", array())) {
                        echo "btn-info";
                    } else {
                        echo "btn-default";
                    }
                    echo " btn-lg tooltip-link hidden-xs\" title=\"";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_FOLDER_IMG_ALT", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t";
                    // line 79
                    if ($this->getAttribute($context["searchresults"], "S_HAS_POLL", array())) {
                        // line 80
                        echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bar-chart fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file-text-o fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 84
                    echo "\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<div class=\"visible-xs-inline\">
\t\t\t\t\t\t\t\t\t";
                    // line 86
                    if ($this->getAttribute($context["searchresults"], "S_HAS_POLL", array())) {
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bar-chart fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 89
                        echo "\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file-text-o fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 91
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t<div class=\"btn-group pagination-line\">
\t\t\t\t\t\t\t\t\t";
                    // line 95
                    if (($this->getAttribute($context["searchresults"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["searchresults"], "S_POSTS_UNAPPROVED", array()))) {
                        // line 96
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_QUEUE", array());
                        echo "\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 98
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_TOPIC_REPORTED", array())) {
                        // line 99
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_MCP_REPORT", array());
                        echo "\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "ATTACH_ICON_IMG", array())) {
                        // line 102
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-xs disabled\"><i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 104
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_HAS_POLL", array())) {
                        // line 105
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-xs disabled\"><i class=\"fa fa-bar-chart fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "S_UNREAD_TOPIC", array())) {
                        // line 108
                        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-info\" href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_NEWEST_POST", array());
                        echo "\"><i class=\"fa fa-angle-right fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 110
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["searchresults"], "PAGINATION", array())) {
                        // line 111
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        echo $this->getAttribute($context["searchresults"], "PAGINATION", array());
                        echo "
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 113
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                        // line 114
                        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs tooltip-link\" href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_LAST_POST", array());
                        echo "\"  title=\"";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo "\"><i class=\"fa fa-angle-double-right fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 116
                    echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
                    // line 118
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "\" class=\"topictitle\"><strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                    echo "</strong></a><br/>
\t\t\t\t\t\t\t<div class=\"hidden-xs\">
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t";
                    // line 121
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_AUTHOR_FULL", array());
                    echo " &raquo; ";
                    echo $this->getAttribute($context["searchresults"], "FIRST_POST_TIME", array());
                    echo " &raquo; ";
                    echo $this->env->getExtension('phpbb')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                    echo "</a>
\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    // line 124
                    if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                        // line 125
                        echo "\t\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t";
                        // line 127
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo " ";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["searchresults"], "LAST_POST_AUTHOR_FULL", array());
                        echo " &laquo; <a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_LAST_POST", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "LAST_POST_TIME", array());
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t<br />";
                        // line 128
                        echo $this->env->getExtension('phpbb')->lang("POSTED");
                        echo " ";
                        echo $this->env->getExtension('phpbb')->lang("IN");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 129
                        if ($this->getAttribute($context["searchresults"], "REPLIES", array())) {
                            // line 130
                            echo "\t\t\t\t\t\t\t\t\t\t\t<br/>";
                            echo $this->env->getExtension('phpbb')->lang("REPLIES");
                            echo $this->env->getExtension('phpbb')->lang("COLON");
                            echo " <strong>";
                            echo $this->getAttribute($context["searchresults"], "REPLIES", array());
                            echo "</strong>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 132
                        echo "\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 135
                    echo "\t\t\t\t\t\t\t";
                    // line 136
                    echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"posts hidden-xs\"><span class=\"badge\">";
                    // line 137
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "</span></td>
\t\t\t\t\t\t<td class=\"views hidden-xs\"><span class=\"badge\">";
                    // line 138
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                    echo "</span></td>
\t\t\t\t\t\t<td class=\"lastpost hidden-xs\"><span>
\t\t\t\t\t\t\t";
                    // line 140
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_AUTHOR_FULL", array());
                    echo "
\t\t\t\t\t\t\t";
                    // line 141
                    if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_LAST_POST", array());
                        echo "\"><i class=\"fa fa-external-link fa-fw\" aria-hidden=\"true\"></i></a> ";
                    }
                    echo "<br />";
                    echo $this->getAttribute($context["searchresults"], "LAST_POST_TIME", array());
                    echo "<br /> </span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
                    // line 144
                    // line 145
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "\t\t\t</tbody>
\t\t</table>
\t";
            } else {
                // line 149
                echo "\t\t<div class=\"alert alert-warning\">
\t\t\t<strong>";
                // line 150
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t</div>
\t";
            }
            // line 153
            echo "
";
        } else {
            // line 155
            echo "
\t";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 157
                echo "\t\t";
                // line 158
                echo "\t\t<div class=\"search post\">
\t\t\t";
                // line 159
                if ($this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                    // line 160
                    echo "\t\t\t\t<div class=\"postbody\">
\t\t\t\t\t";
                    // line 161
                    echo $this->getAttribute($context["searchresults"], "L_IGNORE_POST", array());
                    echo "
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 164
                    echo "\t\t\t\t<div class=\"panel ";
                    if ($this->getAttribute($context["searchresults"], "S_POST_REPORTED", array())) {
                        echo " panel-danger";
                    } else {
                        echo " panel-primary";
                    }
                    echo "\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3 class=\"panel-title\"><a href=\"";
                    // line 166
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "POST_SUBJECT", array());
                    echo "</a></h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body no-padding\">
\t\t\t\t\t\t<div class=\"row no-margin post-flex\">
\t\t\t\t\t\t\t<div class=\"col-md-3 post-info post-info-left\">
\t\t\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t\t\t";
                    // line 172
                    // line 173
                    echo "\t\t\t\t\t\t\t\t\t<dt class=\"author\">";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["searchresults"], "POST_AUTHOR_FULL", array());
                    echo "</dt>
\t\t\t\t\t\t\t\t\t<dd>";
                    // line 174
                    echo $this->getAttribute($context["searchresults"], "POST_DATE", array());
                    echo "</dd>
\t\t\t\t\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t\t\t\t\t\t<dd>";
                    // line 176
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo ": <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "FORUM_TITLE", array());
                    echo "</a></dd>
\t\t\t\t\t\t\t\t\t<dd>";
                    // line 177
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo ": <a href=\"";
                    echo $this->getAttribute($context["searchresults"], "U_VIEW_TOPIC", array());
                    echo "\">";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_TITLE", array());
                    echo "</a></dd>
\t\t\t\t\t\t\t\t\t<dd>";
                    // line 178
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo ": <strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_REPLIES", array());
                    echo "</strong></dd>
\t\t\t\t\t\t\t\t\t<dd>";
                    // line 179
                    echo $this->env->getExtension('phpbb')->lang("VIEWS");
                    echo ": <strong>";
                    echo $this->getAttribute($context["searchresults"], "TOPIC_VIEWS", array());
                    echo "</strong></dd>
\t\t\t\t\t\t\t\t\t";
                    // line 180
                    // line 181
                    echo "\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-9 post-content\">
\t\t\t\t\t\t\t\t<div class=\"content\">";
                    // line 184
                    echo $this->getAttribute($context["searchresults"], "MESSAGE", array());
                    echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-footer text-right clearfix\">
\t\t\t\t\t\t";
                    // line 189
                    if ( !$this->getAttribute($context["searchresults"], "S_IGNORE_POST", array())) {
                        // line 190
                        echo "\t\t\t\t\t\t\t<div class=\"to-top pull-right\"><a href=\"";
                        echo $this->getAttribute($context["searchresults"], "U_VIEW_POST", array());
                        echo "\" class=\"";
                        echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                        echo "\"><i class=\"fa fa-chevron-up fa-fw\" aria-hidden=\"true\"></i></a></div>
\t\t\t\t\t\t";
                    }
                    // line 192
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                }
                // line 195
                echo "\t\t</div>
\t\t";
                // line 196
                // line 197
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 198
                echo "\t\t<div class=\"alert alert-warning\">
\t\t\t<strong>";
                // line 199
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 203
        echo "
";
        // line 204
        if ((((isset($context["PAGINATION"]) ? $context["PAGINATION"] : null) || (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null))) {
            // line 205
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
            echo "\">
\t\t<div class=\"row mobile-fix\">
\t\t\t";
            // line 207
            if ((isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) {
                // line 208
                echo "\t\t\t\t<div class=\"col-md-3 hidden-xs\">
\t\t\t\t\t";
                // line 209
                if ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
                    // line 210
                    echo "\t\t\t\t\t\t<a class=\"btn btn-warning btn-labeled\" href=\"";
                    echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
                    echo "\"><span class=\"btn-label\"><i class=\"fa fa-arrow-left fa-fw\" aria-hidden=\"true\"></i></span>";
                    echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
                    echo "</a>
\t\t\t\t\t";
                } else {
                    // line 212
                    echo "\t\t\t\t\t\t<a class=\"btn btn-warning btn-labeled\" href=\"";
                    echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
                    echo "\"><span class=\"btn-label\"><i class=\"fa fa-arrow-left fa-fw\" aria-hidden=\"true\"></i></span>";
                    echo $this->env->getExtension('phpbb')->lang("GO_TO_SEARCH_ADV");
                    echo "</a>
\t\t\t\t\t";
                }
                // line 214
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 216
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 217
                echo "\t\t\t\t";
                if ((isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) {
                    echo "<div class=\"col-md-6 text-center\">";
                } else {
                    echo "<div class=\"col-md-12 text-center\">";
                }
                // line 218
                echo "\t\t\t\t\t<div class=\"topic-pagination\">
\t\t\t\t\t\t";
                // line 219
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "search_results.html", 219)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 220
                echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 223
            echo "\t\t\t";
            if ((isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) {
                // line 224
                echo "\t\t\t\t<div class=\"col-md-3 hidden-xs pull-right\">
\t\t\t\t\t";
                // line 225
                if ((isset($context["SEARCH_IN_RESULTS"]) ? $context["SEARCH_IN_RESULTS"] : null)) {
                    // line 226
                    echo "\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" name=\"add_keywords\" id=\"add_keywords_bottom\" value=\"\" class=\"input-medium form-control\" placeholder=\"";
                    // line 227
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_IN_RESULTS");
                    echo "\"/>
\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"submit\" value=\"";
                    // line 229
                    echo $this->env->getExtension('phpbb')->lang("SEARCH");
                    echo "\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 233
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 235
            echo "\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            // line 239
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "</a>
\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            // line 240
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>
";
        }
        // line 246
        echo "
";
        // line 247
        if (((((isset($context["PAGINATION"]) ? $context["PAGINATION"] : null) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults", array()))) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)) || (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null))) {
            // line 248
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
            echo "\">
\t\t";
            // line 249
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "search_results.html", 249)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 250
            echo "\t</form>
";
        }
        // line 252
        echo "
";
        // line 253
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "search_results.html", 253)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 254
        echo "
";
        // line 255
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_results.html", 255)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 255,  785 => 254,  773 => 253,  770 => 252,  766 => 250,  754 => 249,  749 => 248,  747 => 247,  744 => 246,  735 => 240,  731 => 239,  725 => 235,  721 => 233,  714 => 229,  709 => 227,  706 => 226,  704 => 225,  701 => 224,  698 => 223,  693 => 220,  681 => 219,  678 => 218,  671 => 217,  668 => 216,  664 => 214,  654 => 212,  646 => 210,  644 => 209,  641 => 208,  639 => 207,  633 => 205,  631 => 204,  628 => 203,  618 => 199,  615 => 198,  610 => 197,  609 => 196,  606 => 195,  601 => 192,  593 => 190,  591 => 189,  583 => 184,  578 => 181,  577 => 180,  571 => 179,  565 => 178,  557 => 177,  549 => 176,  544 => 174,  537 => 173,  536 => 172,  525 => 166,  515 => 164,  509 => 161,  506 => 160,  504 => 159,  501 => 158,  499 => 157,  494 => 156,  491 => 155,  487 => 153,  481 => 150,  478 => 149,  473 => 146,  467 => 145,  466 => 144,  454 => 141,  448 => 140,  443 => 138,  439 => 137,  436 => 136,  434 => 135,  429 => 132,  420 => 130,  418 => 129,  408 => 128,  394 => 127,  390 => 125,  388 => 124,  372 => 121,  364 => 118,  360 => 116,  352 => 114,  349 => 113,  343 => 111,  340 => 110,  334 => 108,  331 => 107,  327 => 105,  324 => 104,  320 => 102,  317 => 101,  311 => 99,  308 => 98,  302 => 96,  300 => 95,  294 => 91,  290 => 89,  286 => 87,  284 => 86,  280 => 84,  276 => 82,  272 => 80,  270 => 79,  258 => 78,  255 => 77,  254 => 76,  248 => 74,  246 => 73,  242 => 72,  235 => 68,  231 => 67,  227 => 66,  223 => 65,  218 => 62,  215 => 61,  213 => 60,  210 => 59,  206 => 57,  205 => 56,  202 => 55,  198 => 53,  191 => 49,  186 => 47,  183 => 46,  181 => 45,  178 => 44,  176 => 43,  172 => 41,  166 => 39,  163 => 38,  150 => 37,  148 => 36,  145 => 35,  138 => 34,  134 => 32,  124 => 30,  116 => 28,  114 => 27,  111 => 26,  109 => 25,  101 => 20,  97 => 19,  89 => 15,  87 => 14,  84 => 13,  83 => 12,  80 => 11,  74 => 10,  65 => 9,  56 => 8,  39 => 6,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- EVENT search_results_header_before -->*/
/* */
/* <div class="page-header">*/
/* 	<h2 class="searchresults-title"><!-- IF SEARCH_TITLE -->{SEARCH_TITLE}<!-- ELSE -->{SEARCH_MATCHES}<!-- ENDIF --><!-- IF SEARCH_WORDS -->{L_COLON} <a href="{U_SEARCH_WORDS}">{SEARCH_WORDS}</a><!-- ENDIF --></h2>*/
/* </div>*/
/* <!-- IF SEARCHED_QUERY --> <p>{L_SEARCHED_QUERY}{L_COLON} <strong>{SEARCHED_QUERY}</strong></p><!-- ENDIF -->*/
/* <!-- IF IGNORED_WORDS --> <p>{L_IGNORED_TERMS}{L_COLON} <strong>{IGNORED_WORDS}</strong></p><!-- ENDIF -->*/
/* <!-- IF PHRASE_SEARCH_DISABLED --> <p><strong>{L_PHRASE_SEARCH_DISABLED}</strong></p><!-- ENDIF -->*/
/* */
/* <!-- EVENT search_results_header_after -->*/
/* */
/* <!-- IF .pagination or SEARCH_MATCHES or TOTAL_MATCHES or PAGE_NUMBER -->*/
/* 	<form method="post" action="{S_SEARCH_ACTION}">*/
/* 		<div class="row">*/
/* 			<div class="col-md-12 text-center">*/
/* 				<div class="btn-group">*/
/* 					<a class="btn btn-default btn-sm disabled">{SEARCH_MATCHES}</a>*/
/* 					<a class="btn btn-default btn-sm disabled">{PAGE_NUMBER}</a>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="row mobile-fix">*/
/* 			<!-- IF SEARCH_MATCHES -->*/
/* 				<div class="col-md-3">*/
/* 					<!-- IF SEARCH_TOPIC -->*/
/* 						<a class="btn btn-warning btn-labeled" href="{U_SEARCH_TOPIC}"><span class="btn-label"><i class="fa fa-arrow-left fa-fw" aria-hidden="true"></i></span>{L_RETURN_TO_TOPIC}</a>*/
/* 					<!-- ELSE -->*/
/* 						<a class="btn btn-warning btn-labeled" href="{U_SEARCH}" title="{L_SEARCH_ADV}"><span class="btn-label"><i class="fa fa-arrow-left fa-fw" aria-hidden="true"></i></span>{L_GO_TO_SEARCH_ADV}</a>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF SEARCH_MATCHES --><div class="col-md-6 hidden-xs text-center"><!-- ELSE --><div class="col-md-12 hidden-xs text-center"><!-- ENDIF -->*/
/* 				<div class="topic-pagination">*/
/* 					<!-- IF .pagination -->*/
/* 						<!-- INCLUDE pagination.html -->*/
/* 					<!-- ELSE -->*/
/* 						<a class="btn btn-default btn-sm disabled">{PAGE_NUMBER}</a>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- IF SEARCH_MATCHES -->*/
/* 				<div class="col-md-3">*/
/* 					<!-- IF SEARCH_IN_RESULTS -->*/
/* 						<div class="input-group">*/
/* 							<input type="text" name="add_keywords" id="add_keywords" value="" class="input-medium form-control" placeholder="{L_SEARCH_IN_RESULTS}"/>*/
/* 							<span class="input-group-btn">*/
/* 								<input class="btn btn-default" type="submit" name="submit" value="{L_SEARCH}" />*/
/* 							</span>*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 		<!-- EVENT search_results_searchbox_after -->*/
/* 	</form>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_SHOW_TOPICS -->*/
/* 	<!-- IF .searchresults -->*/
/* 		<table class="table table-bordered table-striped">*/
/* 			<thead class="topiclist">*/
/* 				<tr class="icon">*/
/* 					<th class="topic-name"><i class="fa fa-comments-o" aria-hidden="true"></i> {L_TOPICS}</th>*/
/* 					<th class="posts hidden-xs"><i class="fa fa-reply fa-fw" aria-hidden="true"></i> {L_REPLIES}</th>*/
/* 					<th class="views hidden-xs"><i class="fa fa-eye fa-fw" aria-hidden="true"></i> {L_VIEWS}</th>*/
/* 					<th class="lastpost hidden-xs"><i class="fa fa-history fa-fw" aria-hidden="true"></i> <span>{L_LAST_POST}</span></th>*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody class="topiclist topics">*/
/* 				<!-- BEGIN searchresults -->*/
/* 					<!-- EVENT search_results_topic_before -->*/
/* 					<tr class="clickable" onclick="location.href='{searchresults.U_VIEW_TOPIC}'">*/
/* 						<td>*/
/* 							<!-- EVENT topiclist_row_prepend -->*/
/* 							<div class="pull-left forum-icon">*/
/* 								<a href="{searchresults.U_VIEW_TOPIC}" class="btn <!-- IF searchresults.S_UNREAD_TOPIC -->btn-info<!-- ELSE -->btn-default<!-- ENDIF --> btn-lg tooltip-link hidden-xs" title="{searchresults.TOPIC_FOLDER_IMG_ALT}">*/
/* 									<!-- IF searchresults.S_HAS_POLL -->*/
/* 										<i class="fa fa-bar-chart fa-fw" aria-hidden="true"></i>*/
/* 									<!-- ELSE -->*/
/* 										<i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i>*/
/* 									<!-- ENDIF -->*/
/* 								</a>*/
/* 								<div class="visible-xs-inline">*/
/* 									<!-- IF searchresults.S_HAS_POLL -->*/
/* 										<i class="fa fa-bar-chart fa-fw" aria-hidden="true"></i>*/
/* 									<!-- ELSE -->*/
/* 										<i class="fa fa-file-text-o fa-fw" aria-hidden="true"></i>*/
/* 									<!-- ENDIF -->*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="pull-right">*/
/* 								<div class="btn-group pagination-line">*/
/* 									<!-- IF searchresults.S_TOPIC_UNAPPROVED or searchresults.S_POSTS_UNAPPROVED -->*/
/* 										<a href="{searchresults.U_MCP_QUEUE}" class="btn btn-warning btn-xs"><i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i></a>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF searchresults.S_TOPIC_REPORTED -->*/
/* 										<a href="{searchresults.U_MCP_REPORT}" class="btn btn-warning btn-xs"><i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i></a>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF searchresults.ATTACH_ICON_IMG -->*/
/* 										<a href="#" class="btn btn-default btn-xs disabled"><i class="fa fa-paperclip fa-fw" aria-hidden="true"></i></a>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF searchresults.S_HAS_POLL -->*/
/* 										<a href="#" class="btn btn-default btn-xs disabled"><i class="fa fa-bar-chart fa-fw" aria-hidden="true"></i></a>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF searchresults.S_UNREAD_TOPIC -->*/
/* 										<a class="btn btn-xs btn-info" href="{searchresults.U_NEWEST_POST}"><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i></a>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF searchresults.PAGINATION -->*/
/* 										{searchresults.PAGINATION}*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF not S_IS_BOT -->*/
/* 										<a class="btn btn-default btn-xs tooltip-link" href="{searchresults.U_LAST_POST}"  title="{L_LAST_POST}"><i class="fa fa-angle-double-right fa-fw" aria-hidden="true"></i></a>*/
/* 									<!-- ENDIF -->*/
/* 								</div>*/
/* 							</div>*/
/* 							<a href="{searchresults.U_VIEW_TOPIC}" class="topictitle"><strong>{searchresults.TOPIC_TITLE}</strong></a><br/>*/
/* 							<div class="hidden-xs">*/
/* 								<small>*/
/* 									{L_POST_BY_AUTHOR} {searchresults.TOPIC_AUTHOR_FULL} &raquo; {searchresults.FIRST_POST_TIME} &raquo; {L_IN} <a href="{searchresults.U_VIEW_FORUM}">{searchresults.FORUM_TITLE}</a>*/
/* 								</small>*/
/* 							</div>*/
/* 							<!-- IF not S_IS_BOT -->*/
/* 								<div class="visible-xs-block">*/
/* 									<small>*/
/* 										{L_LAST_POST} {L_POST_BY_AUTHOR} {searchresults.LAST_POST_AUTHOR_FULL} &laquo; <a href="{searchresults.U_LAST_POST}" title="{L_GOTO_LAST_POST}">{searchresults.LAST_POST_TIME}</a>*/
/* 										<br />{L_POSTED} {L_IN} <a href="{searchresults.U_VIEW_FORUM}">{searchresults.FORUM_TITLE}</a>*/
/* 										<!-- IF searchresults.REPLIES -->*/
/* 											<br/>{L_REPLIES}{L_COLON} <strong>{searchresults.REPLIES}</strong>*/
/* 										<!-- ENDIF -->*/
/* 									</small>*/
/* 								</div>*/
/* 							<!-- ENDIF -->*/
/* 							<!-- EVENT topiclist_row_append -->*/
/* 						</td>*/
/* 						<td class="posts hidden-xs"><span class="badge">{searchresults.TOPIC_REPLIES}</span></td>*/
/* 						<td class="views hidden-xs"><span class="badge">{searchresults.TOPIC_VIEWS}</span></td>*/
/* 						<td class="lastpost hidden-xs"><span>*/
/* 							{L_POST_BY_AUTHOR} {searchresults.LAST_POST_AUTHOR_FULL}*/
/* 							<!-- IF not S_IS_BOT --><a href="{searchresults.U_LAST_POST}"><i class="fa fa-external-link fa-fw" aria-hidden="true"></i></a> <!-- ENDIF --><br />{searchresults.LAST_POST_TIME}<br /> </span>*/
/* 						</td>*/
/* 					</tr>*/
/* 					<!-- EVENT search_results_topic_after -->*/
/* 				<!-- END searchresults -->*/
/* 			</tbody>*/
/* 		</table>*/
/* 	<!-- ELSE -->*/
/* 		<div class="alert alert-warning">*/
/* 			<strong>{L_NO_SEARCH_RESULTS}</strong>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- ELSE -->*/
/* */
/* 	<!-- BEGIN searchresults -->*/
/* 		<!-- EVENT search_results_post_before -->*/
/* 		<div class="search post">*/
/* 			<!-- IF searchresults.S_IGNORE_POST -->*/
/* 				<div class="postbody">*/
/* 					{searchresults.L_IGNORE_POST}*/
/* 				</div>*/
/* 			<!-- ELSE -->*/
/* 				<div class="panel <!-- IF searchresults.S_POST_REPORTED --> panel-danger<!-- ELSE --> panel-primary<!-- ENDIF -->">*/
/* 					<div class="panel-heading">*/
/* 						<h3 class="panel-title"><a href="{searchresults.U_VIEW_POST}">{searchresults.POST_SUBJECT}</a></h3>*/
/* 					</div>*/
/* 					<div class="panel-body no-padding">*/
/* 						<div class="row no-margin post-flex">*/
/* 							<div class="col-md-3 post-info post-info-left">*/
/* 								<dl>*/
/* 									<!-- EVENT search_results_postprofile_before -->*/
/* 									<dt class="author">{L_POST_BY_AUTHOR} {searchresults.POST_AUTHOR_FULL}</dt>*/
/* 									<dd>{searchresults.POST_DATE}</dd>*/
/* 									<dd>&nbsp;</dd>*/
/* 									<dd>{L_FORUM}: <a href="{searchresults.U_VIEW_FORUM}">{searchresults.FORUM_TITLE}</a></dd>*/
/* 									<dd>{L_TOPIC}: <a href="{searchresults.U_VIEW_TOPIC}">{searchresults.TOPIC_TITLE}</a></dd>*/
/* 									<dd>{L_REPLIES}: <strong>{searchresults.TOPIC_REPLIES}</strong></dd>*/
/* 									<dd>{L_VIEWS}: <strong>{searchresults.TOPIC_VIEWS}</strong></dd>*/
/* 									<!-- EVENT search_results_postprofile_after -->*/
/* 								</dl>*/
/* 							</div>*/
/* 							<div class="col-md-9 post-content">*/
/* 								<div class="content">{searchresults.MESSAGE}</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="panel-footer text-right clearfix">*/
/* 						<!-- IF not searchresults.S_IGNORE_POST -->*/
/* 							<div class="to-top pull-right"><a href="{searchresults.U_VIEW_POST}" class="{S_CONTENT_FLOW_END}"><i class="fa fa-chevron-up fa-fw" aria-hidden="true"></i></a></div>*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 		<!-- EVENT search_results_post_after -->*/
/* 	<!-- BEGINELSE -->*/
/* 		<div class="alert alert-warning">*/
/* 			<strong>{L_NO_SEARCH_RESULTS}</strong>*/
/* 		</div>*/
/* 	<!-- END searchresults -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF PAGINATION or SEARCH_MATCHES or PAGE_NUMBER -->*/
/* 	<form method="post" action="{S_SEARCH_ACTION}">*/
/* 		<div class="row mobile-fix">*/
/* 			<!-- IF SEARCH_MATCHES -->*/
/* 				<div class="col-md-3 hidden-xs">*/
/* 					<!-- IF SEARCH_TOPIC -->*/
/* 						<a class="btn btn-warning btn-labeled" href="{U_SEARCH_TOPIC}"><span class="btn-label"><i class="fa fa-arrow-left fa-fw" aria-hidden="true"></i></span>{L_RETURN_TO_TOPIC}</a>*/
/* 					<!-- ELSE -->*/
/* 						<a class="btn btn-warning btn-labeled" href="{U_SEARCH}" title="{L_SEARCH_ADV}"><span class="btn-label"><i class="fa fa-arrow-left fa-fw" aria-hidden="true"></i></span>{L_GO_TO_SEARCH_ADV}</a>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF .pagination -->*/
/* 				<!-- IF SEARCH_MATCHES --><div class="col-md-6 text-center"><!-- ELSE --><div class="col-md-12 text-center"><!-- ENDIF -->*/
/* 					<div class="topic-pagination">*/
/* 						<!-- INCLUDE pagination.html -->*/
/* 					</div>*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF SEARCH_MATCHES -->*/
/* 				<div class="col-md-3 hidden-xs pull-right">*/
/* 					<!-- IF SEARCH_IN_RESULTS -->*/
/* 						<div class="input-group">*/
/* 							<input type="text" name="add_keywords" id="add_keywords_bottom" value="" class="input-medium form-control" placeholder="{L_SEARCH_IN_RESULTS}"/>*/
/* 							<span class="input-group-btn">*/
/* 								<input class="btn btn-default" type="submit" name="submit" value="{L_SEARCH}" />*/
/* 							</span>*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 		<div class="row">*/
/* 			<div class="col-md-12 text-center">*/
/* 				<div class="btn-group">*/
/* 					<a class="btn btn-default btn-sm disabled">{SEARCH_MATCHES}</a>*/
/* 					<a class="btn btn-default btn-sm disabled">{PAGE_NUMBER}</a>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</form>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF PAGINATION or .searchresults or S_SELECT_SORT_KEY or S_SELECT_SORT_DAYS -->*/
/* 	<form method="post" action="{S_SEARCH_ACTION}">*/
/* 		<!-- INCLUDE display_options.html -->*/
/* 	</form>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
