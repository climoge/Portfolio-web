<?php

/* forumlist_body.html */
class __TwigTemplate_ccf7566b1dffca3c12302d34e7b45937877c8927bc4f5d8a1f0f6db11d84682b extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 2
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 3
                echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t";
            }
            // line 7
            echo "
\t";
            // line 8
            // line 9
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 10
                echo "\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t<thead class=\"topiclist\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t";
                // line 14
                // line 15
                echo "\t\t\t\t\t\t<th class=\"forum-name\">";
                if ($this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                    echo "<i class=\"fa fa-sitemap fa-fw\" aria-hidden=\"true\"></i> <a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</a>";
                } else {
                    echo "<i class=\"fa fa-folder-open fa-fw\" aria-hidden=\"true\"></i> ";
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                }
                echo "</th>
\t\t\t\t\t\t<th class=\"topics hidden-xs\"><i class=\"fa fa-comments-o fa-fw\" aria-hidden=\"true\"></i> ";
                // line 16
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</th>
\t\t\t\t\t\t<th class=\"posts hidden-xs\"><i class=\"fa fa-pencil-square-o fa-fw\" aria-hidden=\"true\"></i> ";
                // line 17
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</th>
\t\t\t\t\t\t<th class=\"lastpost hidden-xs\"><i class=\"fa fa-history fa-fw\" aria-hidden=\"true\"></i> <span>";
                // line 18
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></th>
\t\t\t\t\t\t";
                // line 19
                // line 20
                echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody class=\"topiclist forums\">
\t";
            }
            // line 24
            echo "\t";
            // line 25
            echo "
\t";
            // line 26
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                // line 27
                echo "\t\t";
                // line 28
                echo "\t\t\t\t<tr class=\"icon clickable ";
                echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", array());
                echo "\" onclick=\"location.href='";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "'\">
\t\t\t\t\t";
                // line 29
                // line 30
                echo "\t\t\t\t\t<td class=\"forum-name\" title=\"";
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\" ";
                if ($this->getAttribute($context["forumrow"], "S_IS_LINK", array())) {
                    echo "colspan=\"3\"";
                }
                echo ">
\t\t\t\t\t\t<div class=\"pull-left forum-icon\">
\t\t\t\t\t\t\t<a href=\"";
                // line 32
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"btn ";
                if ( !$this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    echo "btn-lg";
                }
                echo " ";
                if ($this->getAttribute($context["forumrow"], "S_LOCKED_FORUM", array())) {
                    echo "btn-danger";
                } elseif ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", array())) {
                    echo "btn-info";
                } else {
                    echo "btn-default";
                }
                echo " tooltip-link hidden-xs\" title=\"";
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t\t\t\t\t\t";
                // line 33
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    // line 34
                    echo "\t\t\t\t\t\t\t\t\t<span class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", array());
                    echo "</span>
\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 35
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-globe fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 37
$context["forumrow"], "S_LOCKED_FORUM", array())) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 39
$context["forumrow"], "FORUM_ICON", array())) {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ICON", array());
                    echo "\"></i>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-folder fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                }
                // line 44
                echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"visible-xs-inline\">
\t\t\t\t\t\t\t\t";
                // line 46
                if ($this->getAttribute($context["forumrow"], "S_IS_LINK", array())) {
                    // line 47
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-globe fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 48
$context["forumrow"], "S_LOCKED_FORUM", array())) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                } elseif ($this->getAttribute(                // line 50
$context["forumrow"], "FORUM_ICON", array())) {
                    // line 51
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ICON", array());
                    echo "\"></i>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-folder fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 57
                if (((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", array()))) {
                    // line 58
                    echo "\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t<a class=\"feed-icon-forum\" title=\"";
                    // line 59
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" href=\"";
                    echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-rss-square fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 60
                    echo $this->env->getExtension('phpbb')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t";
                }
                // line 64
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                echo "</a><br />
\t\t\t\t\t\t<small class=\"forum-desc\">";
                // line 65
                echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                echo "</small>
\t\t\t\t\t\t";
                // line 66
                if ($this->getAttribute($context["forumrow"], "MODERATORS", array())) {
                    // line 67
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", array());
                    echo "
\t\t\t\t\t\t";
                }
                // line 69
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["forumrow"], "SUBFORUMS", array()) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", array()))) {
                    // line 70
                    echo "\t\t\t\t\t\t\t";
                    // line 71
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", array());
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 72
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 73
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["subforum"], "U_SUBFORUM", array());
                        echo "\" class=\"subforum";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["subforum"], "UNREAD", array())) {
                            echo $this->env->getExtension('phpbb')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">";
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", array());
                        echo "</a>";
                        if ( !$this->getAttribute($context["subforum"], "S_LAST_ROW", array())) {
                            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        }
                        // line 74
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    echo "\t\t\t\t\t\t\t";
                    // line 76
                    echo "\t\t\t\t\t\t";
                }
                // line 77
                echo "\t\t\t\t\t\t";
                if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                    // line 78
                    echo "\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t";
                    // line 79
                    if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                        // line 80
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                        echo "</strong>
\t\t\t\t\t\t\t\t";
                    } elseif (( !$this->getAttribute(                    // line 81
$context["forumrow"], "S_IS_LINK", array()) && $this->getAttribute($context["forumrow"], "TOPICS", array()))) {
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                        echo "</strong>
\t\t\t\t\t\t\t\t";
                    }
                    // line 84
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t</td>
\t\t\t\t\t";
                // line 87
                if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                    // line 88
                    echo "\t\t\t\t\t\t<td class=\"redirect hidden-xs\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                    echo "</span></td>
\t\t\t\t\t";
                } elseif ( !$this->getAttribute(                // line 89
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 90
                    echo "\t\t\t\t\t\t<td class=\"topics hidden-xs\"><span class=\"badge\">";
                    echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                    echo "</span></td>
\t\t\t\t\t\t<td class=\"posts hidden-xs\"><span class=\"badge\">";
                    // line 91
                    echo $this->getAttribute($context["forumrow"], "POSTS", array());
                    echo "</span></td>
\t\t\t\t\t\t<td class=\"lastpost hidden-xs\">
\t\t\t\t\t\t\t";
                    // line 93
                    if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array())) {
                        // line 94
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS_UNAPPROVED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 95
                        echo $this->env->getExtension('phpbb')->lang("TOPICS_UNAPPROVED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 97
$context["forumrow"], "U_UNAPPROVED_POSTS", array())) {
                        // line 98
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("POSTS_UNAPPROVED_FORUM");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-question fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 99
                        echo $this->env->getExtension('phpbb')->lang("POSTS_UNAPPROVED_FORUM");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 102
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                        echo "<dfn>";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t\t";
                        // line 103
                        if ($this->getAttribute($context["forumrow"], "S_DISPLAY_SUBJECT", array())) {
                            // line 104
                            echo "\t\t\t\t\t\t\t\t";
                            // line 105
                            echo "\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\" title=\"";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", array());
                            echo "\" class=\"lastsubject\">";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", array());
                            echo "</a> <br />
\t\t\t\t\t\t\t";
                        }
                        // line 107
                        echo "\t\t\t\t\t\t\t<small>";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", array());
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 108
                        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                            // line 109
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\"  title=\"";
                            echo $this->env->getExtension('phpbb')->lang("VIEW_LATEST_POST");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-external-link fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 110
                            echo $this->env->getExtension('phpbb')->lang("VIEW_LATEST_POST");
                            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                        }
                        // line 113
                        echo "\t\t\t\t\t\t\t\t<br />";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                        echo "<br />&nbsp;</small>";
                    }
                    // line 114
                    echo "\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t</td>
\t\t\t\t\t";
                } else {
                    // line 117
                    echo "\t\t\t\t\t\t<td class=\"hidden-xs\">&nbsp;</td>
\t\t\t\t\t";
                }
                // line 119
                echo "\t\t\t\t\t";
                // line 120
                echo "\t\t\t\t</tr>
\t\t\t\t";
                // line 121
                // line 122
                echo "\t";
            }
            // line 123
            echo "\t";
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", array())) {
                // line 124
                echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t";
                // line 127
                // line 128
                echo "\t";
            }
            // line 129
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 131
            echo "\t<div class=\"alert alert-danger\">
\t\t<strong>";
            // line 132
            echo $this->env->getExtension('phpbb')->lang("NO_FORUMS");
            echo "</strong>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 132,  448 => 131,  442 => 129,  439 => 128,  438 => 127,  433 => 124,  430 => 123,  427 => 122,  426 => 121,  423 => 120,  421 => 119,  417 => 117,  412 => 114,  405 => 113,  399 => 110,  392 => 109,  390 => 108,  383 => 107,  373 => 105,  371 => 104,  369 => 103,  362 => 102,  356 => 99,  349 => 98,  347 => 97,  342 => 95,  335 => 94,  333 => 93,  328 => 91,  323 => 90,  321 => 89,  313 => 88,  311 => 87,  308 => 86,  304 => 84,  295 => 82,  293 => 81,  285 => 80,  283 => 79,  280 => 78,  277 => 77,  274 => 76,  272 => 75,  266 => 74,  245 => 73,  241 => 72,  235 => 71,  233 => 70,  230 => 69,  221 => 67,  219 => 66,  215 => 65,  208 => 64,  199 => 60,  189 => 59,  186 => 58,  184 => 57,  180 => 55,  176 => 53,  170 => 51,  168 => 50,  165 => 49,  163 => 48,  160 => 47,  158 => 46,  154 => 44,  150 => 42,  144 => 40,  142 => 39,  139 => 38,  137 => 37,  134 => 36,  132 => 35,  127 => 34,  125 => 33,  107 => 32,  97 => 30,  96 => 29,  89 => 28,  87 => 27,  85 => 26,  82 => 25,  80 => 24,  74 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  47 => 15,  46 => 14,  40 => 10,  37 => 9,  36 => 8,  33 => 7,  27 => 3,  24 => 2,  19 => 1,);
    }
}
/* <!-- BEGIN forumrow -->*/
/* 	<!-- IF (forumrow.S_IS_CAT and not forumrow.S_FIRST_ROW) or forumrow.S_NO_CAT  -->*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT forumlist_body_category_header_before -->*/
/* 	<!-- IF forumrow.S_IS_CAT or forumrow.S_FIRST_ROW  or forumrow.S_NO_CAT  -->*/
/* 		<div class="table-responsive">*/
/* 			<table class="table table-striped table-bordered table-hover">*/
/* 				<thead class="topiclist">*/
/* 					<tr>*/
/* 						<!-- EVENT forumlist_body_category_header_row_prepend -->*/
/* 						<th class="forum-name"><!-- IF forumrow.S_IS_CAT --><i class="fa fa-sitemap fa-fw" aria-hidden="true"></i> <a href="{forumrow.U_VIEWFORUM}">{forumrow.FORUM_NAME}</a><!-- ELSE --><i class="fa fa-folder-open fa-fw" aria-hidden="true"></i> {L_FORUM}<!-- ENDIF --></th>*/
/* 						<th class="topics hidden-xs"><i class="fa fa-comments-o fa-fw" aria-hidden="true"></i> {L_TOPICS}</th>*/
/* 						<th class="posts hidden-xs"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i> {L_POSTS}</th>*/
/* 						<th class="lastpost hidden-xs"><i class="fa fa-history fa-fw" aria-hidden="true"></i> <span>{L_LAST_POST}</span></th>*/
/* 						<!-- EVENT forumlist_body_category_header_row_append -->*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody class="topiclist forums">*/
/* 	<!-- ENDIF -->*/
/* 	<!-- EVENT forumlist_body_category_header_after -->*/
/* */
/* 	<!-- IF not forumrow.S_IS_CAT -->*/
/* 		<!-- EVENT forumlist_body_forum_row_before -->*/
/* 				<tr class="icon clickable {forumrow.FORUM_IMG_STYLE}" onclick="location.href='{forumrow.U_VIEWFORUM}'">*/
/* 					<!-- EVENT forumlist_body_forum_row_prepend -->*/
/* 					<td class="forum-name" title="{forumrow.FORUM_FOLDER_IMG_ALT}" <!-- IF forumrow.S_IS_LINK -->colspan="3"<!-- ENDIF -->>*/
/* 						<div class="pull-left forum-icon">*/
/* 							<a href="{forumrow.U_VIEWFORUM}" class="btn <!-- IF not forumrow.FORUM_IMAGE -->btn-lg<!-- ENDIF --> <!-- IF forumrow.S_LOCKED_FORUM -->btn-danger<!-- ELSEIF forumrow.S_UNREAD_FORUM -->btn-info<!-- ELSE -->btn-default<!-- ENDIF --> tooltip-link hidden-xs" title="{forumrow.FORUM_FOLDER_IMG_ALT}">*/
/* 								<!-- IF forumrow.FORUM_IMAGE -->*/
/* 									<span class="forum-image">{forumrow.FORUM_IMAGE}</span>*/
/* 								<!-- ELSEIF forumrow.S_IS_LINK -->*/
/* 									<i class="fa fa-globe fa-fw" aria-hidden="true"></i>*/
/* 								<!-- ELSEIF forumrow.S_LOCKED_FORUM -->*/
/* 									<i class="fa fa-lock fa-fw" aria-hidden="true"></i>*/
/* 								<!-- ELSEIF forumrow.FORUM_ICON -->*/
/* 									<i class="{forumrow.FORUM_ICON}"></i>*/
/* 								<!-- ELSE -->*/
/* 									<i class="fa fa-folder fa-fw" aria-hidden="true"></i>*/
/* 								<!-- ENDIF -->*/
/* 							</a>*/
/* 							<div class="visible-xs-inline">*/
/* 								<!-- IF forumrow.S_IS_LINK -->*/
/* 									<i class="fa fa-globe fa-fw" aria-hidden="true"></i>*/
/* 								<!-- ELSEIF forumrow.S_LOCKED_FORUM -->*/
/* 									<i class="fa fa-lock fa-fw" aria-hidden="true"></i>*/
/* 								<!-- ELSEIF forumrow.FORUM_ICON -->*/
/* 									<i class="{forumrow.FORUM_ICON}"></i>*/
/* 								<!-- ELSE -->*/
/* 									<i class="fa fa-folder fa-fw" aria-hidden="true"></i>*/
/* 								<!-- ENDIF -->*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- IF S_ENABLE_FEEDS and forumrow.S_FEED_ENABLED -->*/
/* 							<!--*/
/* 								<a class="feed-icon-forum" title="{L_FEED} - {forumrow.FORUM_NAME}" href="{U_FEED}?f={forumrow.FORUM_ID}">*/
/* 									<i class="fa fa-rss-square fa-fw" aria-hidden="true"></i><span class="sr-only">{L_FEED} - {forumrow.FORUM_NAME}</span>*/
/* 								</a>*/
/* 							-->*/
/* 						<!-- ENDIF -->*/
/* 						<a href="{forumrow.U_VIEWFORUM}" class="forumtitle">{forumrow.FORUM_NAME}</a><br />*/
/* 						<small class="forum-desc">{forumrow.FORUM_DESC}</small>*/
/* 						<!-- IF forumrow.MODERATORS -->*/
/* 							<br /><strong>{forumrow.L_MODERATOR_STR}{L_COLON}</strong> {forumrow.MODERATORS}*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF forumrow.SUBFORUMS and forumrow.S_LIST_SUBFORUMS -->*/
/* 							<!-- EVENT forumlist_body_subforums_before -->*/
/* 							<br /><strong>{forumrow.L_SUBFORUM_STR}{L_COLON}</strong>*/
/* 							<!-- BEGIN subforum -->*/
/* 								<a href="{forumrow.subforum.U_SUBFORUM}" class="subforum<!-- IF forumrow.subforum.S_UNREAD --> unread<!-- ELSE --> read<!-- ENDIF -->" title="<!-- IF forumrow.subforum.UNREAD -->{L_UNREAD_POSTS}<!-- ELSE -->{L_NO_UNREAD_POSTS}<!-- ENDIF -->">{forumrow.subforum.SUBFORUM_NAME}</a><!-- IF not forumrow.subforum.S_LAST_ROW -->{L_COMMA_SEPARATOR}<!-- ENDIF -->*/
/* 							<!-- END subforum -->*/
/* 							<!-- EVENT forumlist_body_subforums_after -->*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF not S_IS_BOT -->*/
/* 							<div class="visible-xs-block">*/
/* 								<!-- IF forumrow.CLICKS -->*/
/* 									{L_REDIRECTS}{L_COLON} <strong>{forumrow.CLICKS}</strong>*/
/* 								<!-- ELSEIF not forumrow.S_IS_LINK and forumrow.TOPICS -->*/
/* 									{L_TOPICS}{L_COLON} <strong>{forumrow.TOPICS}</strong>*/
/* 								<!-- ENDIF -->*/
/* 							</div>*/
/* 						<!-- ENDIF -->*/
/* 					</td>*/
/* 					<!-- IF forumrow.CLICKS -->*/
/* 						<td class="redirect hidden-xs"><span>{L_REDIRECTS}{L_COLON} {forumrow.CLICKS}</span></td>*/
/* 					<!-- ELSEIF not forumrow.S_IS_LINK -->*/
/* 						<td class="topics hidden-xs"><span class="badge">{forumrow.TOPICS}</span></td>*/
/* 						<td class="posts hidden-xs"><span class="badge">{forumrow.POSTS}</span></td>*/
/* 						<td class="lastpost hidden-xs">*/
/* 							<!-- IF forumrow.U_UNAPPROVED_TOPICS -->*/
/* 								<a href="{forumrow.U_UNAPPROVED_TOPICS}" title="{L_TOPICS_UNAPPROVED}">*/
/* 									<i class="fa fa-question fa-fw" aria-hidden="true"></i><span class="sr-only">{L_TOPICS_UNAPPROVED}</span>*/
/* 								</a>*/
/* 							<!-- ELSEIF forumrow.U_UNAPPROVED_POSTS -->*/
/* 								<a href="{forumrow.U_UNAPPROVED_POSTS}" title="{L_POSTS_UNAPPROVED_FORUM}">*/
/* 									<i class="fa fa-question fa-fw" aria-hidden="true"></i><span class="sr-only">{L_POSTS_UNAPPROVED_FORUM}</span>*/
/* 								</a>*/
/* 							<!-- ENDIF -->*/
/* 							<!-- IF forumrow.LAST_POST_TIME --><dfn>{L_LAST_POST}</dfn>*/
/* 							<!-- IF forumrow.S_DISPLAY_SUBJECT -->*/
/* 								<!-- EVENT forumlist_body_last_post_title_prepend -->*/
/* 								<a href="{forumrow.U_LAST_POST}" title="{forumrow.LAST_POST_SUBJECT}" class="lastsubject">{forumrow.LAST_POST_SUBJECT_TRUNCATED}</a> <br />*/
/* 							<!-- ENDIF -->*/
/* 							<small>{L_POST_BY_AUTHOR} {forumrow.LAST_POSTER_FULL}*/
/* 								<!-- IF not S_IS_BOT -->*/
/* 									<a href="{forumrow.U_LAST_POST}"  title="{L_VIEW_LATEST_POST}">*/
/* 										<i class="fa fa-external-link fa-fw" aria-hidden="true"></i><span class="sr-only">{L_VIEW_LATEST_POST}</span>*/
/* 									</a>*/
/* 								<!-- ENDIF -->*/
/* 								<br />{forumrow.LAST_POST_TIME}<!-- ELSE -->{L_NO_POSTS}<br />&nbsp;</small><!-- ENDIF -->*/
/* 							</small>*/
/* 						</td>*/
/* 					<!-- ELSE -->*/
/* 						<td class="hidden-xs">&nbsp;</td>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- EVENT forumlist_body_forum_row_append -->*/
/* 				</tr>*/
/* 				<!-- EVENT forumlist_body_forum_row_after -->*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF forumrow.S_LAST_ROW -->*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	<!-- EVENT forumlist_body_last_row_after -->*/
/* 	<!-- ENDIF -->*/
/* */
/* <!-- BEGINELSE -->*/
/* 	<div class="alert alert-danger">*/
/* 		<strong>{L_NO_FORUMS}</strong>*/
/* 	</div>*/
/* <!-- END forumrow -->*/
/* */
