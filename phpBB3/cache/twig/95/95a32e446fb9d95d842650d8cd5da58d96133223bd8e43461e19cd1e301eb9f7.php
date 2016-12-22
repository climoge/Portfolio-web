<?php

/* viewforum_body.html */
class __TwigTemplate_ea57e5189b5da6114dc56b51691df4a2812404cfb0031700c419cace90d1e02f extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "viewforum_body.html", 1)->display($context);
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
\t<h2>";
        // line 6
        echo "<a href=\"";
        echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
        echo "\">";
        echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
        echo "</a>";
        echo "</h2>
\t";
        // line 7
        if ((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null)) {
            echo "<p>";
            echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
            echo "</p>";
        }
        // line 8
        echo "</div>

";
        // line 10
        // line 11
        echo "
";
        // line 12
        if ((((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null) || (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) || (isset($context["U_MCP"]) ? $context["U_MCP"] : null))) {
            // line 13
            echo "\t<div>
\t\t<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the forum body -->
\t\t";
            // line 15
            if ((isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) {
                echo "<p><strong>";
                if ((isset($context["S_SINGLE_MODERATOR"]) ? $context["S_SINGLE_MODERATOR"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("MODERATOR");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("MODERATORS");
                }
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null);
                echo "</p>";
            }
            // line 16
            echo "\t</div>
";
        }
        // line 18
        echo "
";
        // line 19
        if ((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null)) {
            // line 20
            echo "\t<div class=\"rules\">
\t\t<div class=\"alert alert-warning\">
\t\t\t";
            // line 22
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                // line 23
                echo "\t\t\t\t<a href=\"";
                echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
\t\t\t";
            } else {
                // line 25
                echo "\t\t\t\t<i class=\"fa fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i> <strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</strong>
\t\t\t\t<hr class=\"message-inner-separator\">
\t\t\t\t<p>";
                // line 27
                echo (isset($context["FORUM_RULES"]) ? $context["FORUM_RULES"] : null);
                echo "</p>
\t\t\t";
            }
            // line 29
            echo "\t\t</div>
\t</div>
";
        }
        // line 32
        echo "
";
        // line 33
        if ((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null)) {
            // line 34
            echo "\t";
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null))) {
                // line 35
                echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<a href=\"";
                // line 38
                echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
                echo "\" class=\"btn btn-default btn-sm\" data-ajax=\"mark_forums_read\">";
                echo $this->env->getExtension('phpbb')->lang("MARK_SUBFORUMS_READ");
                echo "</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 43
            echo "\t";
            $location = "forumlist_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("forumlist_body.html", "viewforum_body.html", 43)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 45
        echo "
";
        // line 46
        if (((((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null)) || (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null))) {
            // line 47
            echo "\t";
            if ((((isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) || (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null))) {
                // line 48
                echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t";
                // line 51
                if ((( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null)) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())))) {
                    echo "<a href=\"";
                    echo (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null);
                    echo "\" class=\"btn btn-default btn-sm\" data-ajax=\"mark_topics_read\">";
                    echo $this->env->getExtension('phpbb')->lang("MARK_TOPICS_READ");
                    echo "</a>";
                }
                // line 52
                echo "\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
                echo "</a>
\t\t\t\t\t";
                // line 53
                if (((isset($context["BASE_URL"]) ? $context["BASE_URL"] : null) && ((isset($context["TOTAL_PAGES"]) ? $context["TOTAL_PAGES"] : null) > 6))) {
                    // line 54
                    echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t";
                    // line 55
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo " <span class=\"caret\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu jump-to\">
\t\t\t\t\t\t\t<li>";
                    // line 58
                    echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</li>
\t\t\t\t\t\t\t<li class=\"page-jump-form\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"page-number\" min=\"1\" maxlength=\"6\" title=\"";
                    // line 61
                    echo $this->env->getExtension('phpbb')->lang("JUMP_PAGE");
                    echo "\" class=\"form-control\" data-per-page=\"";
                    echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
                    echo "\" data-base-url=\"";
                    echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "html_attr");
                    echo "\" data-start-name=\"";
                    echo (isset($context["START_NAME"]) ? $context["START_NAME"] : null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary btn-sm\" value=\"";
                    // line 63
                    echo $this->env->getExtension('phpbb')->lang("GO");
                    echo "\" type=\"button\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                } else {
                    // line 69
                    echo "\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</a>
\t\t\t\t\t";
                }
                // line 71
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 75
            echo "\t<div class=\"row mobile-fix\" ";
            if ((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null)) {
                echo "style=\"margin-top: 2em;\"";
            }
            echo ">
\t\t";
            // line 76
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null))) {
                // line 77
                echo "\t\t\t<div class=\"col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t";
                // line 78
                // line 79
                echo "\t\t\t\t";
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    // line 80
                    echo "\t\t\t\t\t<a class=\"btn btn-danger btn-labeled\" href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\"><span class=\"btn-label\"><i class=\"fa fa-lock fa-fw\" aria-hidden=\"true\"></i></span>";
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                    echo "</a>
\t\t\t\t";
                } else {
                    // line 82
                    echo "\t\t\t\t\t<a class=\"btn btn-primary btn-labeled\" href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\"><span class=\"btn-label\"><i class=\"fa fa-pencil-square-o fa-fw\" aria-hidden=\"true\"></i></span> ";
                    echo $this->env->getExtension('phpbb')->lang("POST_TOPIC");
                    echo "</a>
\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t";
                // line 85
                echo "\t\t\t</div>
\t\t";
            }
            // line 87
            echo "\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 88
                echo "\t\t\t<div class=\"col-sm-6 hidden-xs text-center\">
\t\t\t\t";
                // line 89
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 89)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 90
                echo "\t\t\t</div>
\t\t";
            }
            // line 92
            echo "\t\t";
            if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
                // line 93
                echo "\t\t\t<div class=\"col-md-3 col-xs-12 pull-right\" role=\"search\">
\t\t\t\t<form action=\"";
                // line 94
                echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
                echo "\" method=\"get\" class=\"form-search pull-right\" style=\"margin:0;\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input class=\"input-medium search form-control\" type=\"text\" name=\"keywords\" size=\"20\" placeholder=\"";
                // line 96
                echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUM");
                echo "\"/>
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t";
                // line 98
                echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">";
                // line 99
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</button>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t";
            }
            // line 105
            echo "\t</div>
";
        }
        // line 107
        echo "
";
        // line 108
        if ((isset($context["S_NO_READ_ACCESS"]) ? $context["S_NO_READ_ACCESS"] : null)) {
            // line 109
            echo "\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t<strong>";
            // line 110
            echo $this->env->getExtension('phpbb')->lang("NO_READ_ACCESS");
            echo "</strong>
\t</div>
\t";
            // line 112
            if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                // line 113
                echo "\t\t<form action=\"";
                echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
                echo "\" method=\"post\">
\t\t\t<div class=\"well well-sm\">
\t\t\t\t<h3 class=\"box-heading\"><a href=\"";
                // line 115
                echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
                echo "</a>";
                if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                    echo "&nbsp; &nbsp;<a href=\"";
                    echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("REGISTER");
                    echo "</a>";
                }
                echo "</h3>
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<fieldset class=\"fields1\">
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt><label for=\"username\">";
                // line 119
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
                // line 120
                echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
                echo "\" class=\"form-control\" /></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"password\">";
                // line 123
                echo $this->env->getExtension('phpbb')->lang("PASSWORD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"password\" name=\"password\" size=\"25\" class=\"form-control\" /></dd>
\t\t\t\t\t\t\t";
                // line 125
                if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                    echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"3\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                    echo "</label></dd>";
                }
                // line 126
                echo "\t\t\t\t\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"4\" /> ";
                echo $this->env->getExtension('phpbb')->lang("HIDE_ME");
                echo "</label></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t<dl>
\t\t\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t\t\t<dd><input type=\"submit\" name=\"login\" tabindex=\"5\" value=\"";
                // line 130
                echo $this->env->getExtension('phpbb')->lang("LOGIN");
                echo "\" class=\"btn\" /></dd>
\t\t\t\t\t\t</dl>
\t\t\t\t\t\t";
                // line 132
                echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
                echo "
\t\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t";
            }
        }
        // line 139
        echo "
";
        // line 140
        // line 141
        echo "
";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
            // line 143
            echo "\t";
            if (( !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) &&  !$this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()))) {
                // line 144
                echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t";
            }
            // line 148
            echo "
\t";
            // line 149
            if (($this->getAttribute($context["topicrow"], "S_FIRST_ROW", array()) ||  !$this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()))) {
                // line 150
                echo "\t\t<div class=\"table-responsive ";
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo " announcement";
                }
                echo "\">
\t\t\t<table class=\"table table-striped table-bordered table-hover\">
\t\t\t\t<thead class=\"topiclist\">
\t\t\t\t\t<tr class=\"header\">
\t\t\t\t\t\t<th class=\"forum-name\">";
                // line 154
                if ((isset($context["S_DISPLAY_ACTIVE"]) ? $context["S_DISPLAY_ACTIVE"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("ACTIVE_TOPICS");
                } elseif (($this->getAttribute($context["topicrow"], "S_TOPIC_TYPE_SWITCH", array()) && ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array()) || $this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())))) {
                    echo "<i class=\"fa fa-bullhorn fa-fw\" aria-hidden=\"true\"></i> ";
                    echo $this->env->getExtension('phpbb')->lang("ANNOUNCEMENTS");
                } else {
                    echo "<i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i> ";
                    echo $this->env->getExtension('phpbb')->lang("TOPICS");
                }
                echo "</th>
\t\t\t\t\t\t<th class=\"posts hidden-xs\"><i class=\"fa fa-reply fa-fw\" aria-hidden=\"true\"></i> ";
                // line 155
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</th>
\t\t\t\t\t\t<th class=\"views hidden-xs\"><i class=\"fa fa-eye fa-fw\" aria-hidden=\"true\"></i> ";
                // line 156
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</th>
\t\t\t\t\t\t<th class=\"lastpost hidden-xs\"><i class=\"fa fa-history fa-fw\" aria-hidden=\"true\"></i> <span>";
                // line 157
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody class=\"topiclist topics\">
\t";
            }
            // line 162
            echo "\t\t\t\t\t";
            // line 163
            echo "\t\t\t\t\t<tr class=\"t-row clickable";
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " warning-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " info-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " success-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " danger-color";
            }
            echo "\" onclick=\"location.href='";
            echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
            echo "'\">
\t\t\t\t\t\t";
            // line 164
            // line 165
            echo "\t\t\t\t\t\t<td class=\"topic-name ";
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " warning-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " info-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " success-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " danger-color";
            }
            echo "\" title=\"";
            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
            echo "\">
\t\t\t\t\t\t\t";
            // line 166
            // line 167
            echo "\t\t\t\t\t\t\t<div class=\"pull-left forum-topic-icon\">
\t\t\t\t\t\t\t\t";
            // line 168
            $location = "post_icons.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("post_icons.html", "viewforum_body.html", 168)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 169
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"pull-right topic-pagination\">
\t\t\t\t\t\t\t\t<div class=\"btn-group pagination-line\">
\t\t\t\t\t\t\t\t\t";
            // line 172
            if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                // line 173
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" class=\"btn btn-warning btn-xs\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_UNAPPROVED");
                echo "\"><i class=\"fa fa-question fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_UNAPPROVED");
                echo "</span></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 175
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_DELETED", array())) {
                // line 176
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                echo "\" class=\"btn btn-warning btn-xs\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_DELETED");
                echo "\"><i class=\"fa fa-recycle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_DELETED");
                echo "</span></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 178
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                // line 179
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                echo "\" class=\"btn btn-warning btn-xs\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_REPORTED");
                echo "\"><i class=\"fa fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_REPORTED");
                echo "</span></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 181
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                // line 182
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-xs disabled\"><i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 184
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_HAS_POLL", array())) {
                // line 185
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-xs disabled\"><i class=\"fa fa-bar-chart fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 187
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "PAGINATION", array())) {
                // line 188
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 190
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                    // line 191
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                        // line 192
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                        echo "<li class=\"active\"><span>";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 193
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                        echo "<li class=\"ellipsis\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                        echo "</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 194
$context["pagination"], "S_IS_NEXT", array())) {
                        // line 195
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        echo "<li><a href=\"";
                        echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                        echo "\">";
                        echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                        echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 197
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 198
                echo "\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 201
            echo "\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                // line 202
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-info\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                echo "\"><i class=\"fa fa-angle-right fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 204
            echo "\t\t\t\t\t\t\t\t\t";
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 205
                echo "\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs tooltip-link\" href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\"  title=\"";
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "\"><i class=\"fa fa-angle-double-right fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 207
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 209
            if (($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array()) && (isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null))) {
                // line 210
                echo "\t\t\t\t\t\t\t\t<img src=\"";
                echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                echo "\"/>
\t\t\t\t\t\t\t";
            }
            // line 212
            echo "\t\t\t\t\t\t\t<a href=\"";
            echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
            echo "\" class=\"topictitle\"><strong>";
            echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
            echo "</strong></a>
\t\t\t\t\t\t\t<div class=\"hidden-xs\">
\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t";
            // line 215
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
            echo " &raquo; ";
            echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
            echo "
\t\t\t\t\t\t\t\t\t";
            // line 216
            if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array()) && ((isset($context["FORUM_ID"]) ? $context["FORUM_ID"] : null) != $this->getAttribute($context["topicrow"], "FORUM_ID", array())))) {
                echo " &raquo; ";
                echo $this->env->getExtension('phpbb')->lang("IN");
                echo " <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", array());
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "FORUM_NAME", array());
                echo "</a>";
            }
            // line 217
            echo "\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 219
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 220
                echo "\t\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t";
                // line 222
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo " &laquo; <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "</a>
\t\t\t\t\t\t\t\t\t\t";
                // line 223
                if (($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array()) && ((isset($context["FORUM_ID"]) ? $context["FORUM_ID"] : null) != $this->getAttribute($context["topicrow"], "FORUM_ID", array())))) {
                    echo "<br />";
                    echo $this->env->getExtension('phpbb')->lang("POSTED");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_VIEW_FORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["topicrow"], "FORUM_NAME", array());
                    echo "</a>";
                }
                // line 224
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["topicrow"], "REPLIES", array())) {
                    // line 225
                    echo "\t\t\t\t\t\t\t\t\t\t\t<br/>";
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["topicrow"], "REPLIES", array());
                    echo "</strong>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 227
                echo "\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 230
            echo "\t\t\t\t\t\t";
            // line 231
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"posts hidden-xs ";
            // line 232
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " warning-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " info-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " success-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " danger-color";
            }
            echo "\">
\t\t\t\t\t\t\t<span class=\"badge\">";
            // line 233
            echo $this->getAttribute($context["topicrow"], "REPLIES", array());
            echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"views hidden-xs ";
            // line 235
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " warning-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " info-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " success-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " danger-color";
            }
            echo "\">
\t\t\t\t\t\t\t<span class=\"badge\">";
            // line 236
            echo $this->getAttribute($context["topicrow"], "VIEWS", array());
            echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"lastpost hidden-xs ";
            // line 238
            if ($this->getAttribute($context["topicrow"], "S_POST_GLOBAL", array())) {
                echo " warning-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_ANNOUNCE", array())) {
                echo " info-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_POST_STICKY", array())) {
                echo " success-color";
            }
            if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                echo " danger-color";
            }
            echo "\">
\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t<dfn>";
            // line 240
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo " </dfn>";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
            echo "
\t\t\t\t\t\t\t\t<small>";
            // line 241
            if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                echo "\"><i class=\"fa fa-external-link fa-fw\" aria-hidden=\"true\"></i></a>";
            }
            echo "<br />";
            echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
            echo "</small>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
            // line 244
            // line 245
            echo "\t\t\t\t\t</tr>
\t\t\t\t\t";
            // line 246
            // line 247
            echo "
\t\t";
            // line 248
            if ($this->getAttribute($context["topicrow"], "S_LAST_ROW", array())) {
                // line 249
                echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t";
            }
            // line 253
            echo "\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 254
            echo "\t\t";
            if ((isset($context["S_IS_POSTABLE"]) ? $context["S_IS_POSTABLE"] : null)) {
                // line 255
                echo "\t\t\t<div class=\"alert alert-danger\">
\t\t\t\t<strong>";
                // line 256
                echo $this->env->getExtension('phpbb')->lang("NO_TOPICS");
                echo "</strong>
\t\t\t</div>
\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        echo "
";
        // line 261
        if (((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array())))) {
            // line 262
            echo "\t<div class=\"row mobile-fix\" ";
            if ((isset($context["S_HAS_SUBFORUM"]) ? $context["S_HAS_SUBFORUM"] : null)) {
                echo "style=\"margin-top: 2em;\"";
            }
            echo ">
\t\t";
            // line 263
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null))) {
                // line 264
                echo "\t\t\t<div class=\"col-md-3 hidden-xs\">
\t\t\t\t";
                // line 265
                // line 266
                echo "\t\t\t\t";
                if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                    // line 267
                    echo "\t\t\t\t\t<a class=\"btn btn-danger btn-labeled\" href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\"><span class=\"btn-label\"><i class=\"fa fa-lock fa-fw\" aria-hidden=\"true\"></i></span> ";
                    echo $this->env->getExtension('phpbb')->lang("FORUM_LOCKED");
                    echo "</a>
\t\t\t\t";
                } else {
                    // line 269
                    echo "\t\t\t\t\t<a class=\"btn btn-primary btn-labeled\" href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\"><span class=\"btn-label\"><i class=\"fa fa-pencil-square-o fa-fw\" aria-hidden=\"true\"></i></span> ";
                    echo $this->env->getExtension('phpbb')->lang("POST_TOPIC");
                    echo "</a>
\t\t\t\t";
                }
                // line 271
                echo "\t\t\t\t";
                // line 272
                echo "\t\t\t</div>
\t\t";
            }
            // line 274
            echo "\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 275
                echo "\t\t\t<div class=\"col-md-6 text-center\">
\t\t\t\t";
                // line 276
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewforum_body.html", 276)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 277
                echo "\t\t\t</div>
\t\t";
            }
            // line 279
            echo "\t\t";
            if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
                // line 280
                echo "\t\t\t<div class=\"col-md-3 hidden-xs pull-right\">
\t\t\t\t<form action=\"";
                // line 281
                echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
                echo "\" method=\"get\" class=\"form-search pull-right\" style=\"margin:0;\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input class=\"input-medium search form-control\" type=\"text\" name=\"keywords\" size=\"20\" placeholder=\"";
                // line 283
                echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUM");
                echo "\"/>
\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t";
                // line 285
                echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">";
                // line 286
                echo $this->env->getExtension('phpbb')->lang("SEARCH");
                echo "</button>
\t\t\t\t\t\t</span>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t";
            }
            // line 292
            echo "\t</div>
\t";
            // line 293
            if ((((isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) || (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null))) {
                // line 294
                echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t";
                // line 297
                if ((( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null)) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())))) {
                    echo "<a href=\"";
                    echo (isset($context["U_MARK_TOPICS"]) ? $context["U_MARK_TOPICS"] : null);
                    echo "\" class=\"btn btn-default btn-sm\" data-ajax=\"mark_topics_read\">";
                    echo $this->env->getExtension('phpbb')->lang("MARK_TOPICS_READ");
                    echo "</a>";
                }
                // line 298
                echo "\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
                echo "</a>
\t\t\t\t\t";
                // line 299
                if (((isset($context["BASE_URL"]) ? $context["BASE_URL"] : null) && ((isset($context["TOTAL_PAGES"]) ? $context["TOTAL_PAGES"] : null) > 6))) {
                    // line 300
                    echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t";
                    // line 301
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo " <span class=\"caret\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu jump-to\">
\t\t\t\t\t\t\t<li>";
                    // line 304
                    echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</li>
\t\t\t\t\t\t\t<li class=\"page-jump-form\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"page-number\" min=\"1\" maxlength=\"6\" title=\"";
                    // line 307
                    echo $this->env->getExtension('phpbb')->lang("JUMP_PAGE");
                    echo "\" class=\"form-control\" data-per-page=\"";
                    echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
                    echo "\" data-base-url=\"";
                    echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "html_attr");
                    echo "\" data-start-name=\"";
                    echo (isset($context["START_NAME"]) ? $context["START_NAME"] : null);
                    echo "\" />
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary btn-sm\" value=\"";
                    // line 309
                    echo $this->env->getExtension('phpbb')->lang("GO");
                    echo "\" type=\"button\" />
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
                } else {
                    // line 315
                    echo "\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</a>
\t\t\t\t\t";
                }
                // line 317
                echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 320
            echo "\t</div>
";
        }
        // line 322
        echo "
";
        // line 323
        if (((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 324
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_FORUM_ACTION"]) ? $context["S_FORUM_ACTION"] : null);
            echo "\">
\t\t";
            // line 325
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "viewforum_body.html", 325)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 326
            echo "\t</form>
";
        }
        // line 328
        echo "
";
        // line 329
        if ((( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_LOGIN_PANEL", array()) == 1))) {
            // line 330
            echo "\t";
            $location = "login_panel.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("login_panel.html", "viewforum_body.html", 330)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 332
        echo "
";
        // line 333
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewforum_body.html", 333)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 334
        echo "
";
        // line 335
        $location = "online_panel.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("online_panel.html", "viewforum_body.html", 335)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 336
        echo "
";
        // line 337
        if ((isset($context["S_DISPLAY_POST_INFO"]) ? $context["S_DISPLAY_POST_INFO"] : null)) {
            // line 338
            echo "\t<div class=\"panel panel-info\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-unlock-alt fa-fw\" aria-hidden=\"true\"></i> ";
            // line 340
            echo $this->env->getExtension('phpbb')->lang("FORUM_PERMISSIONS");
            echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<p>";
            // line 343
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "rules", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["rules"]) {
                echo $this->getAttribute($context["rules"], "RULE", array());
                echo "<br />";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rules'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
\t\t</div>
\t</div>
";
        }
        // line 347
        echo "
";
        // line 348
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewforum_body.html", 348)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewforum_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1169 => 348,  1166 => 347,  1151 => 343,  1145 => 340,  1141 => 338,  1139 => 337,  1136 => 336,  1124 => 335,  1121 => 334,  1109 => 333,  1106 => 332,  1092 => 330,  1090 => 329,  1087 => 328,  1083 => 326,  1071 => 325,  1066 => 324,  1064 => 323,  1061 => 322,  1057 => 320,  1052 => 317,  1046 => 315,  1037 => 309,  1026 => 307,  1019 => 304,  1013 => 301,  1010 => 300,  1008 => 299,  1003 => 298,  995 => 297,  990 => 294,  988 => 293,  985 => 292,  976 => 286,  972 => 285,  967 => 283,  962 => 281,  959 => 280,  956 => 279,  952 => 277,  940 => 276,  937 => 275,  934 => 274,  930 => 272,  928 => 271,  920 => 269,  912 => 267,  909 => 266,  908 => 265,  905 => 264,  903 => 263,  896 => 262,  894 => 261,  891 => 260,  881 => 256,  878 => 255,  875 => 254,  862 => 253,  856 => 249,  854 => 248,  851 => 247,  850 => 246,  847 => 245,  846 => 244,  832 => 241,  824 => 240,  808 => 238,  803 => 236,  788 => 235,  783 => 233,  768 => 232,  765 => 231,  763 => 230,  758 => 227,  749 => 225,  746 => 224,  734 => 223,  720 => 222,  716 => 220,  714 => 219,  710 => 217,  700 => 216,  692 => 215,  683 => 212,  674 => 210,  672 => 209,  668 => 207,  660 => 205,  657 => 204,  651 => 202,  648 => 201,  643 => 198,  637 => 197,  627 => 195,  625 => 194,  619 => 193,  612 => 192,  609 => 191,  605 => 190,  601 => 188,  598 => 187,  594 => 185,  591 => 184,  587 => 182,  584 => 181,  574 => 179,  571 => 178,  561 => 176,  558 => 175,  548 => 173,  546 => 172,  541 => 169,  529 => 168,  526 => 167,  525 => 166,  507 => 165,  506 => 164,  488 => 163,  486 => 162,  478 => 157,  474 => 156,  470 => 155,  458 => 154,  448 => 150,  446 => 149,  443 => 148,  437 => 144,  434 => 143,  416 => 142,  413 => 141,  412 => 140,  409 => 139,  399 => 132,  394 => 130,  386 => 126,  380 => 125,  374 => 123,  368 => 120,  363 => 119,  346 => 115,  340 => 113,  338 => 112,  333 => 110,  330 => 109,  328 => 108,  325 => 107,  321 => 105,  312 => 99,  308 => 98,  303 => 96,  298 => 94,  295 => 93,  292 => 92,  288 => 90,  276 => 89,  273 => 88,  270 => 87,  266 => 85,  264 => 84,  256 => 82,  248 => 80,  245 => 79,  244 => 78,  241 => 77,  239 => 76,  232 => 75,  226 => 71,  220 => 69,  211 => 63,  200 => 61,  193 => 58,  187 => 55,  184 => 54,  182 => 53,  177 => 52,  169 => 51,  164 => 48,  161 => 47,  159 => 46,  156 => 45,  142 => 43,  132 => 38,  127 => 35,  124 => 34,  122 => 33,  119 => 32,  114 => 29,  109 => 27,  103 => 25,  95 => 23,  93 => 22,  89 => 20,  87 => 19,  84 => 18,  80 => 16,  67 => 15,  63 => 13,  61 => 12,  58 => 11,  57 => 10,  53 => 8,  47 => 7,  39 => 6,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- EVENT viewforum_forum_title_before -->*/
/* */
/* <div class="page-header">*/
/* 	<h2><!-- EVENT viewforum_forum_name_prepend --><a href="{U_VIEW_FORUM}">{FORUM_NAME}</a><!-- EVENT viewforum_forum_name_append --></h2>*/
/* 	<!-- IF FORUM_DESC --><p>{FORUM_DESC}</p><!-- ENDIF -->*/
/* </div>*/
/* */
/* <!-- EVENT viewforum_forum_title_after -->*/
/* */
/* <!-- IF FORUM_DESC or MODERATORS or U_MCP -->*/
/* 	<div>*/
/* 		<!-- NOTE: remove the style="display: none" when you want to have the forum description on the forum body -->*/
/* 		<!-- IF MODERATORS --><p><strong><!-- IF S_SINGLE_MODERATOR -->{L_MODERATOR}<!-- ELSE -->{L_MODERATORS}<!-- ENDIF -->{L_COLON}</strong> {MODERATORS}</p><!-- ENDIF -->*/
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
/* <!-- IF S_HAS_SUBFORUM -->*/
/* 	<!-- IF not S_IS_BOT and U_MARK_FORUMS -->*/
/* 		<div class="row">*/
/* 			<div class="col-md-12">*/
/* 				<div class="pull-right">*/
/* 					<a href="{U_MARK_FORUMS}" class="btn btn-default btn-sm" data-ajax="mark_forums_read">{L_MARK_SUBFORUMS_READ}</a>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- INCLUDE forumlist_body.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_DISPLAY_POST_INFO or .pagination or TOTAL_POSTS or TOTAL_TOPICS -->*/
/* 	<!-- IF TOTAL_TOPICS or .pagination or U_MARK_TOPICS -->*/
/* 		<div class="row">*/
/* 			<div class="col-md-12 text-center">*/
/* 				<div class="btn-group">*/
/* 					<!-- IF not S_IS_BOT and U_MARK_TOPICS and .topicrow --><a href="{U_MARK_TOPICS}" class="btn btn-default btn-sm" data-ajax="mark_topics_read">{L_MARK_TOPICS_READ}</a><!-- ENDIF -->*/
/* 					<a class="btn btn-default btn-sm disabled">{TOTAL_TOPICS}</a>*/
/* 					<!-- IF BASE_URL and TOTAL_PAGES > 6 -->*/
/* 						<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/* 							{PAGE_NUMBER} <span class="caret"></span>*/
/* 						</button>*/
/* 						<ul class="dropdown-menu jump-to">*/
/* 							<li>{L_JUMP_TO_PAGE}{L_COLON}</li>*/
/* 							<li class="page-jump-form">*/
/* 								<div class="input-group input-group-sm">*/
/* 									<input type="number" name="page-number" min="1" maxlength="6" title="{L_JUMP_PAGE}" class="form-control" data-per-page="{PER_PAGE}" data-base-url="{BASE_URL|e('html_attr')}" data-start-name="{START_NAME}" />*/
/* 									<span class="input-group-btn">*/
/* 										<input class="btn btn-primary btn-sm" value="{L_GO}" type="button" />*/
/* 									</span>*/
/* 								</div>*/
/* 							</li>*/
/* 						</ul>*/
/* 					<!-- ELSE -->*/
/* 						<a class="btn btn-default btn-sm disabled">{PAGE_NUMBER}</a>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* 	<div class="row mobile-fix" <!-- IF S_HAS_SUBFORUM -->style="margin-top: 2em;"<!-- ENDIF -->>*/
/* 		<!-- IF not S_IS_BOT and S_DISPLAY_POST_INFO -->*/
/* 			<div class="col-md-3 col-sm-6 col-xs-12">*/
/* 				<!-- EVENT viewforum_buttons_top_before -->*/
/* 				<!-- IF S_IS_LOCKED -->*/
/* 					<a class="btn btn-danger btn-labeled" href="{U_POST_NEW_TOPIC}"><span class="btn-label"><i class="fa fa-lock fa-fw" aria-hidden="true"></i></span>{L_FORUM_LOCKED}</a>*/
/* 				<!-- ELSE -->*/
/* 					<a class="btn btn-primary btn-labeled" href="{U_POST_NEW_TOPIC}"><span class="btn-label"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i></span> {L_POST_TOPIC}</a>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- EVENT viewforum_buttons_top_after -->*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF .pagination -->*/
/* 			<div class="col-sm-6 hidden-xs text-center">*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_DISPLAY_SEARCHBOX -->*/
/* 			<div class="col-md-3 col-xs-12 pull-right" role="search">*/
/* 				<form action="{S_SEARCHBOX_ACTION}" method="get" class="form-search pull-right" style="margin:0;">*/
/* 					<div class="input-group">*/
/* 						<input class="input-medium search form-control" type="text" name="keywords" size="20" placeholder="{L_SEARCH_FORUM}"/>*/
/* 						<span class="input-group-btn">*/
/* 							{S_SEARCH_LOCAL_HIDDEN_FIELDS}*/
/* 							<button type="submit" class="btn btn-default">{L_SEARCH}</button>*/
/* 						</span>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_NO_READ_ACCESS -->*/
/* 	<div class="alert alert-danger" role="alert">*/
/* 		<strong>{L_NO_READ_ACCESS}</strong>*/
/* 	</div>*/
/* 	<!-- IF not S_USER_LOGGED_IN and not S_IS_BOT -->*/
/* 		<form action="{S_LOGIN_ACTION}" method="post">*/
/* 			<div class="well well-sm">*/
/* 				<h3 class="box-heading"><a href="{U_LOGIN_LOGOUT}">{L_LOGIN_LOGOUT}</a><!-- IF S_REGISTER_ENABLED -->&nbsp; &nbsp;<a href="{U_REGISTER}">{L_REGISTER}</a><!-- ENDIF --></h3>*/
/* 				<div class="content">*/
/* 					<fieldset class="fields1">*/
/* 						<dl>*/
/* 							<dt><label for="username">{L_USERNAME}{L_COLON}</label></dt>*/
/* 							<dd><input type="text" tabindex="1" name="username" id="username" size="25" value="{USERNAME}" class="form-control" /></dd>*/
/* 						</dl>*/
/* 						<dl>*/
/* 						<dt><label for="password">{L_PASSWORD}{L_COLON}</label></dt>*/
/* 						<dd><input type="password" tabindex="2" id="password" name="password" size="25" class="form-control" /></dd>*/
/* 							<!-- IF S_AUTOLOGIN_ENABLED --><dd><label for="autologin"><input type="checkbox" name="autologin" id="autologin" tabindex="3" /> {L_LOG_ME_IN}</label></dd><!-- ENDIF -->*/
/* 							<dd><label for="viewonline"><input type="checkbox" name="viewonline" id="viewonline" tabindex="4" /> {L_HIDE_ME}</label></dd>*/
/* 						</dl>*/
/* 						<dl>*/
/* 							<dt>&nbsp;</dt>*/
/* 							<dd><input type="submit" name="login" tabindex="5" value="{L_LOGIN}" class="btn" /></dd>*/
/* 						</dl>*/
/* 						{S_LOGIN_REDIRECT}*/
/* 					</fieldset>*/
/* 				</div>*/
/* 			</div>*/
/* 		</form>*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- EVENT viewforum_body_topic_row_before -->*/
/* */
/* <!-- BEGIN topicrow -->*/
/* 	<!-- IF not topicrow.S_TOPIC_TYPE_SWITCH and not topicrow.S_FIRST_ROW -->*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF topicrow.S_FIRST_ROW or not topicrow.S_TOPIC_TYPE_SWITCH -->*/
/* 		<div class="table-responsive <!-- IF topicrow.S_TOPIC_TYPE_SWITCH and (topicrow.S_POST_ANNOUNCE or topicrow.S_POST_GLOBAL) --> announcement<!-- ENDIF -->">*/
/* 			<table class="table table-striped table-bordered table-hover">*/
/* 				<thead class="topiclist">*/
/* 					<tr class="header">*/
/* 						<th class="forum-name"><!-- IF S_DISPLAY_ACTIVE -->{L_ACTIVE_TOPICS}<!-- ELSEIF topicrow.S_TOPIC_TYPE_SWITCH and (topicrow.S_POST_ANNOUNCE or topicrow.S_POST_GLOBAL) --><i class="fa fa-bullhorn fa-fw" aria-hidden="true"></i> {L_ANNOUNCEMENTS}<!-- ELSE --><i class="fa fa-comments-o" aria-hidden="true"></i> {L_TOPICS}<!-- ENDIF --></th>*/
/* 						<th class="posts hidden-xs"><i class="fa fa-reply fa-fw" aria-hidden="true"></i> {L_REPLIES}</th>*/
/* 						<th class="views hidden-xs"><i class="fa fa-eye fa-fw" aria-hidden="true"></i> {L_VIEWS}</th>*/
/* 						<th class="lastpost hidden-xs"><i class="fa fa-history fa-fw" aria-hidden="true"></i> <span>{L_LAST_POST}</span></th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody class="topiclist topics">*/
/* 	<!-- ENDIF -->*/
/* 					<!-- EVENT viewforum_body_topicrow_row_before -->*/
/* 					<tr class="t-row clickable<!-- IF topicrow.S_POST_GLOBAL --> warning-color<!-- ENDIF --><!-- IF topicrow.S_POST_ANNOUNCE --> info-color<!-- ENDIF --><!-- IF topicrow.S_POST_STICKY --> success-color<!-- ENDIF --><!-- IF topicrow.S_TOPIC_REPORTED --> danger-color<!-- ENDIF -->" onclick="location.href='{topicrow.U_VIEW_TOPIC}'">*/
/* 						<!-- EVENT viewforum_body_topic_row_prepend -->*/
/* 						<td class="topic-name <!-- IF topicrow.S_POST_GLOBAL --> warning-color<!-- ENDIF --><!-- IF topicrow.S_POST_ANNOUNCE --> info-color<!-- ENDIF --><!-- IF topicrow.S_POST_STICKY --> success-color<!-- ENDIF --><!-- IF topicrow.S_TOPIC_REPORTED --> danger-color<!-- ENDIF -->" title="{topicrow.TOPIC_FOLDER_IMG_ALT}">*/
/* 							<!-- EVENT topiclist_row_prepend -->*/
/* 							<div class="pull-left forum-topic-icon">*/
/* 								<!-- INCLUDE post_icons.html -->*/
/* 							</div>*/
/* 							<div class="pull-right topic-pagination">*/
/* 								<div class="btn-group pagination-line">*/
/* 									<!-- IF topicrow.S_TOPIC_UNAPPROVED or topicrow.S_POSTS_UNAPPROVED -->*/
/* 										<a href="{topicrow.U_MCP_QUEUE}" class="btn btn-warning btn-xs" title="{L_TOPIC_UNAPPROVED}"><i class="fa fa-question fa-fw" aria-hidden="true"></i><span class="sr-only">{L_TOPIC_UNAPPROVED}</span></a>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF topicrow.S_TOPIC_DELETED -->*/
/* 										<a href="{topicrow.U_MCP_QUEUE}" class="btn btn-warning btn-xs" title="{L_TOPIC_DELETED}"><i class="fa fa-recycle fa-fw" aria-hidden="true"></i><span class="sr-only">{L_TOPIC_DELETED}</span></a>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF topicrow.S_TOPIC_REPORTED -->*/
/* 										<a href="{topicrow.U_MCP_REPORT}" class="btn btn-warning btn-xs" title="{L_TOPIC_REPORTED}"><i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i><span class="sr-only">{L_TOPIC_REPORTED}</span></a>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF topicrow.ATTACH_ICON_IMG -->*/
/* 										<a href="#" class="btn btn-default btn-xs disabled"><i class="fa fa-paperclip fa-fw" aria-hidden="true"></i></a>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF topicrow.S_HAS_POLL -->*/
/* 										<a href="#" class="btn btn-default btn-xs disabled"><i class="fa fa-bar-chart fa-fw" aria-hidden="true"></i></a>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF topicrow.PAGINATION -->*/
/* 										<div class="pagination">*/
/* 											<ul>*/
/* 											<!-- BEGIN pagination -->*/
/* 												<!-- IF topicrow.pagination.S_IS_PREV -->*/
/* 												<!-- ELSEIF topicrow.pagination.S_IS_CURRENT --><li class="active"><span>{topicrow.pagination.PAGE_NUMBER}</span></li>*/
/* 												<!-- ELSEIF topicrow.pagination.S_IS_ELLIPSIS --><li class="ellipsis"><span>{L_ELLIPSIS}</span></li>*/
/* 												<!-- ELSEIF topicrow.pagination.S_IS_NEXT -->*/
/* 												<!-- ELSE --><li><a href="{topicrow.pagination.PAGE_URL}">{topicrow.pagination.PAGE_NUMBER}</a></li>*/
/* 												<!-- ENDIF -->*/
/* 											<!-- END pagination -->*/
/* 											</ul>*/
/* 										</div>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF topicrow.S_UNREAD_TOPIC -->*/
/* 										<a class="btn btn-xs btn-info" href="{topicrow.U_NEWEST_POST}"><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i></a>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF not S_IS_BOT -->*/
/* 										<a class="btn btn-default btn-xs tooltip-link" href="{topicrow.U_LAST_POST}"  title="{L_LAST_POST}"><i class="fa fa-angle-double-right fa-fw" aria-hidden="true"></i></a>*/
/* 									<!-- ENDIF -->*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- IF topicrow.TOPIC_ICON_IMG and S_TOPIC_ICONS -->*/
/* 								<img src="{T_ICONS_PATH}{topicrow.TOPIC_ICON_IMG}" alt="{topicrow.TOPIC_FOLDER_IMG_ALT}"/>*/
/* 							<!-- ENDIF -->*/
/* 							<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle"><strong>{topicrow.TOPIC_TITLE}</strong></a>*/
/* 							<div class="hidden-xs">*/
/* 								<small>*/
/* 									{L_POST_BY_AUTHOR} {topicrow.TOPIC_AUTHOR_FULL} &raquo; {topicrow.FIRST_POST_TIME}*/
/* 									<!-- IF topicrow.S_POST_GLOBAL and FORUM_ID != topicrow.FORUM_ID --> &raquo; {L_IN} <a href="{topicrow.U_VIEW_FORUM}">{topicrow.FORUM_NAME}</a><!-- ENDIF -->*/
/* 								</small>*/
/* 							</div>*/
/* 							<!-- IF not S_IS_BOT -->*/
/* 								<div class="visible-xs-block">*/
/* 									<small>*/
/* 										{L_LAST_POST} {L_POST_BY_AUTHOR} {topicrow.LAST_POST_AUTHOR_FULL} &laquo; <a href="{topicrow.U_LAST_POST}" title="{L_GOTO_LAST_POST}">{topicrow.LAST_POST_TIME}</a>*/
/* 										<!-- IF topicrow.S_POST_GLOBAL and FORUM_ID != topicrow.FORUM_ID --><br />{L_POSTED} {L_IN} <a href="{topicrow.U_VIEW_FORUM}">{topicrow.FORUM_NAME}</a><!-- ENDIF -->*/
/* 										<!-- IF topicrow.REPLIES -->*/
/* 											<br/>{L_REPLIES}{L_COLON} <strong>{topicrow.REPLIES}</strong>*/
/* 										<!-- ENDIF -->*/
/* 									</small>*/
/* 								</div>*/
/* 							<!-- ENDIF -->*/
/* 						<!-- EVENT topiclist_row_append -->*/
/* 						</td>*/
/* 						<td class="posts hidden-xs <!-- IF topicrow.S_POST_GLOBAL --> warning-color<!-- ENDIF --><!-- IF topicrow.S_POST_ANNOUNCE --> info-color<!-- ENDIF --><!-- IF topicrow.S_POST_STICKY --> success-color<!-- ENDIF --><!-- IF topicrow.S_TOPIC_REPORTED --> danger-color<!-- ENDIF -->">*/
/* 							<span class="badge">{topicrow.REPLIES}</span>*/
/* 						</td>*/
/* 						<td class="views hidden-xs <!-- IF topicrow.S_POST_GLOBAL --> warning-color<!-- ENDIF --><!-- IF topicrow.S_POST_ANNOUNCE --> info-color<!-- ENDIF --><!-- IF topicrow.S_POST_STICKY --> success-color<!-- ENDIF --><!-- IF topicrow.S_TOPIC_REPORTED --> danger-color<!-- ENDIF -->">*/
/* 							<span class="badge">{topicrow.VIEWS}</span>*/
/* 						</td>*/
/* 						<td class="lastpost hidden-xs <!-- IF topicrow.S_POST_GLOBAL --> warning-color<!-- ENDIF --><!-- IF topicrow.S_POST_ANNOUNCE --> info-color<!-- ENDIF --><!-- IF topicrow.S_POST_STICKY --> success-color<!-- ENDIF --><!-- IF topicrow.S_TOPIC_REPORTED --> danger-color<!-- ENDIF -->">*/
/* 							<span>*/
/* 								<dfn>{L_LAST_POST} </dfn>{L_POST_BY_AUTHOR} {topicrow.LAST_POST_AUTHOR_FULL}*/
/* 								<small><!-- IF not S_IS_BOT --><a href="{topicrow.U_LAST_POST}" title="{L_GOTO_LAST_POST}"><i class="fa fa-external-link fa-fw" aria-hidden="true"></i></a><!-- ENDIF --><br />{topicrow.LAST_POST_TIME}</small>*/
/* 							</span>*/
/* 						</td>*/
/* 						<!-- EVENT viewforum_body_topic_row_append -->*/
/* 					</tr>*/
/* 					<!-- EVENT viewforum_body_topic_row_after -->*/
/* */
/* 		<!-- IF topicrow.S_LAST_ROW -->*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- BEGINELSE -->*/
/* 		<!-- IF S_IS_POSTABLE -->*/
/* 			<div class="alert alert-danger">*/
/* 				<strong>{L_NO_TOPICS}</strong>*/
/* 			</div>*/
/* 	<!-- ENDIF -->*/
/* <!-- END topicrow -->*/
/* */
/* <!-- IF S_DISPLAY_POST_INFO or .pagination -->*/
/* 	<div class="row mobile-fix" <!-- IF S_HAS_SUBFORUM -->style="margin-top: 2em;"<!-- ENDIF -->>*/
/* 		<!-- IF not S_IS_BOT and S_DISPLAY_POST_INFO -->*/
/* 			<div class="col-md-3 hidden-xs">*/
/* 				<!-- EVENT viewforum_buttons_bottom_before -->*/
/* 				<!-- IF S_IS_LOCKED -->*/
/* 					<a class="btn btn-danger btn-labeled" href="{U_POST_NEW_TOPIC}"><span class="btn-label"><i class="fa fa-lock fa-fw" aria-hidden="true"></i></span> {L_FORUM_LOCKED}</a>*/
/* 				<!-- ELSE -->*/
/* 					<a class="btn btn-primary btn-labeled" href="{U_POST_NEW_TOPIC}"><span class="btn-label"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i></span> {L_POST_TOPIC}</a>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- EVENT viewforum_buttons_bottom_after -->*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF .pagination -->*/
/* 			<div class="col-md-6 text-center">*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_DISPLAY_SEARCHBOX -->*/
/* 			<div class="col-md-3 hidden-xs pull-right">*/
/* 				<form action="{S_SEARCHBOX_ACTION}" method="get" class="form-search pull-right" style="margin:0;">*/
/* 					<div class="input-group">*/
/* 						<input class="input-medium search form-control" type="text" name="keywords" size="20" placeholder="{L_SEARCH_FORUM}"/>*/
/* 						<span class="input-group-btn">*/
/* 							{S_SEARCH_LOCAL_HIDDEN_FIELDS}*/
/* 							<button type="submit" class="btn btn-default">{L_SEARCH}</button>*/
/* 						</span>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* 	<!-- IF TOTAL_TOPICS or .pagination or U_MARK_TOPICS -->*/
/* 		<div class="row">*/
/* 			<div class="col-md-12 text-center">*/
/* 				<div class="btn-group">*/
/* 					<!-- IF not S_IS_BOT and U_MARK_TOPICS and .topicrow --><a href="{U_MARK_TOPICS}" class="btn btn-default btn-sm" data-ajax="mark_topics_read">{L_MARK_TOPICS_READ}</a><!-- ENDIF -->*/
/* 					<a class="btn btn-default btn-sm disabled">{TOTAL_TOPICS}</a>*/
/* 					<!-- IF BASE_URL and TOTAL_PAGES > 6 -->*/
/* 						<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/* 							{PAGE_NUMBER} <span class="caret"></span>*/
/* 						</button>*/
/* 						<ul class="dropdown-menu jump-to">*/
/* 							<li>{L_JUMP_TO_PAGE}{L_COLON}</li>*/
/* 							<li class="page-jump-form">*/
/* 								<div class="input-group input-group-sm">*/
/* 									<input type="number" name="page-number" min="1" maxlength="6" title="{L_JUMP_PAGE}" class="form-control" data-per-page="{PER_PAGE}" data-base-url="{BASE_URL|e('html_attr')}" data-start-name="{START_NAME}" />*/
/* 									<span class="input-group-btn">*/
/* 										<input class="btn btn-primary btn-sm" value="{L_GO}" type="button" />*/
/* 									</span>*/
/* 								</div>*/
/* 							</li>*/
/* 						</ul>*/
/* 					<!-- ELSE -->*/
/* 						<a class="btn btn-default btn-sm disabled">{PAGE_NUMBER}</a>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_SELECT_SORT_DAYS and not S_IS_BOT -->*/
/* 	<form method="post" action="{S_FORUM_ACTION}">*/
/* 		<!-- INCLUDE display_options.html -->*/
/* 	</form>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF not S_USER_LOGGED_IN and not S_IS_BOT and $SHOW_LOGIN_PANEL == 1 -->*/
/* 	<!-- INCLUDE login_panel.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- INCLUDE online_panel.html -->*/
/* */
/* <!-- IF S_DISPLAY_POST_INFO -->*/
/* 	<div class="panel panel-info">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title"><i class="fa fa-unlock-alt fa-fw" aria-hidden="true"></i> {L_FORUM_PERMISSIONS}</h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<p><!-- BEGIN rules -->{rules.RULE}<br /><!-- END rules --></p>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
