<?php

/* navbar_header.html */
class __TwigTemplate_9b450f65361ed6f6d4b19e0322e7962528080a9361697f088c4d71f67d605f23 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-fixed-top navbar-fix\" id=\"header-nav\">
\t<!-- Mobile dropdown buttons -->
\t<div class=\"container-fluid\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle pull-left-mobile\" id=\"main-menu-btn\" data-toggle=\"collapse\" data-target=\"#main-menu\">
\t\t\t\t<i class=\"fa fa-bars fa-fw\" aria-hidden=\"true\"></i>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 8
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\">";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "</a>
\t\t\t<button type=\"button\" class=\"navbar-toggle pull-right-mobile\" id=\"user-menu-btn\" data-toggle=\"collapse\" data-target=\"#user-menu\">
\t\t\t\t";
        // line 10
        if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
            // line 11
            echo "\t\t\t\t\t<span class=\"nav-avatar-mobile\">";
            echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
            echo "</span>
\t\t\t\t";
        } elseif (        // line 12
(isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 13
            echo "\t\t\t\t\t<span class=\"nav-avatar-mobile\"><img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/default_avatar.jpg\" alt=\"";
            echo $this->env->getExtension('phpbb')->lang("AVATAR");
            echo "\"></span>
\t\t\t\t";
        } else {
            // line 15
            echo "\t\t\t\t\t<i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t";
        }
        // line 17
        echo "\t\t\t</button>
\t\t\t";
        // line 18
        if (((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null) && (isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null))) {
            // line 19
            echo "\t\t\t\t<button type=\"button\" class=\"navbar-toggle pull-right-mobile\" id=\"notification-menu-btn\" data-toggle=\"collapse\" data-target=\"#notification-menu\">
\t\t\t\t\t<i class=\"fa fa-bell fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t";
        }
        // line 23
        echo "\t\t\t";
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 24
            echo "\t\t\t\t<button type=\"button\" class=\"navbar-toggle pull-right-mobile\" id=\"search-menu-btn\" data-toggle=\"collapse\" data-target=\"#search-menu\">
\t\t\t\t\t<i class=\"fa fa-search fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t</button>
\t\t\t";
        }
        // line 28
        echo "\t\t</div>
\t\t<div class=\"collapse navbar-collapse pull-left-desktop\" id=\"main-menu\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li id=\"quick-links\" class=\"dropdown ";
        // line 31
        if (( !(isset($context["S_DISPLAY_QUICK_LINKS"]) ? $context["S_DISPLAY_QUICK_LINKS"] : null) &&  !(isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-bars fa-fw\" aria-hidden=\"true\"></i> ";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("QUICK_LINKS");
        echo "</a>
\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t";
        // line 34
        // line 35
        echo "\t\t\t\t\t\t";
        // line 36
        echo "\t\t\t\t\t\t";
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 37
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
                // line 38
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_SELF"]) ? $context["U_SEARCH_SELF"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_SELF");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
                // line 41
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_NEW"]) ? $context["U_SEARCH_NEW"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_NEW");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["S_LOAD_UNREADS"]) ? $context["S_LOAD_UNREADS"] : null)) {
                // line 44
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_SEARCH_UNREAD"]) ? $context["U_SEARCH_UNREAD"] : null);
                echo "\" role=\"menuitem\">";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_UNREAD");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_SEARCH_UNANSWERED"]) ? $context["U_SEARCH_UNANSWERED"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_UNANSWERED");
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 47
            echo (isset($context["U_SEARCH_ACTIVE_TOPICS"]) ? $context["U_SEARCH_ACTIVE_TOPICS"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ACTIVE_TOPICS");
            echo "</a></li>
\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 49
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" role=\"menuitem\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "</a></li>
\t\t\t\t\t\t";
        }
        // line 51
        echo "
\t\t\t\t\t\t";
        // line 52
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null) || (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)))) {
            // line 53
            echo "\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t";
            // line 54
            if ((isset($context["S_DISPLAY_MEMBERLIST"]) ? $context["S_DISPLAY_MEMBERLIST"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_MEMBERLIST"]) ? $context["U_MEMBERLIST"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-group fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("MEMBERLIST");
                echo "</a></li>";
            }
            // line 55
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["U_TEAM"]) ? $context["U_TEAM"] : null)) {
                echo "<li><a href=\"";
                echo (isset($context["U_TEAM"]) ? $context["U_TEAM"] : null);
                echo "\" role=\"menuitem\"><i class=\"fa fa-shield fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("THE_TEAM");
                echo "</a></li>";
            }
            // line 56
            echo "\t\t\t\t\t\t";
        }
        // line 57
        echo "
\t\t\t\t\t\t";
        // line 58
        // line 59
        echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
        // line 61
        // line 62
        echo "\t\t\t\t<li><a href=\"";
        echo (isset($context["U_FAQ"]) ? $context["U_FAQ"] : null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("FAQ_EXPLAIN");
        echo "\"><i class=\"fa fa-question fa-fw\" aria-hidden=\"true\"></i> ";
        echo $this->env->getExtension('phpbb')->lang("FAQ");
        echo "</a></li>
\t\t\t\t";
        // line 63
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            // line 64
            echo "\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "\"><i class=\"fa fa-cogs fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
            echo "</a></li>
\t\t\t\t";
        }
        // line 66
        echo "\t\t\t\t";
        if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
            // line 67
            echo "\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("MCP");
            echo "\"><i class=\"fa fa-gavel fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
            echo "</a></li>
\t\t\t\t";
        }
        // line 69
        echo "\t\t\t\t";
        // line 70
        echo "\t\t\t</ul>
\t\t</div>
\t\t";
        // line 72
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 73
            echo "\t\t\t<div class=\"collapse navbar-collapse pull-left-desktop\" id=\"search-menu\">
\t\t\t\t<form class=\"navbar-form navbar-left\" method=\"get\" id=\"search\" action=\"";
            // line 74
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input name=\"keywords\" id=\"keywords\" type=\"search\" class=\"input-medium search form-control\" maxlength=\"128\" title=\"";
            // line 76
            echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
            echo "\" size=\"20\" value=\"";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "\" placeholder=\"";
            echo addslashes($this->env->getExtension('phpbb')->lang("SEARCH_FORUM"));
            echo "\" />
\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t";
            // line 78
            echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" title=\"";
            // line 79
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\" data-placement=\"bottom\"><i class=\"fa fa-search fa-fw\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t\t<a href=\"";
            // line 80
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" class=\"btn btn-default\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\" data-placement=\"bottom\"><i class=\"fa fa-cog fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t";
        }
        // line 86
        echo "\t\t<div class=\"collapse navbar-collapse pull-right-desktop\" id=\"user-menu\">
\t\t\t<!-- Desktop user menu -->
\t\t\t<ul class=\"nav navbar-nav navbar-right hidden-xs fix-right-nav\">
\t\t\t\t";
        // line 89
        if ((isset($context["S_DISPLAY_PM"]) ? $context["S_DISPLAY_PM"] : null)) {
            // line 90
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
            // line 91
            echo (isset($context["U_PRIVATEMSGS"]) ? $context["U_PRIVATEMSGS"] : null);
            echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-envelope fa-fw\" aria-hidden=\"true\"></i> ";
            // line 92
            echo $this->env->getExtension('phpbb')->lang("PRIVATE_MESSAGES");
            echo " <span class=\"label ";
            if ((isset($context["PRIVATE_MESSAGE_INFO_UNREAD"]) ? $context["PRIVATE_MESSAGE_INFO_UNREAD"] : null)) {
                echo "label-danger";
            } else {
                echo "label-primary";
            }
            echo "\">";
            echo (isset($context["PRIVATE_MESSAGE_COUNT"]) ? $context["PRIVATE_MESSAGE_COUNT"] : null);
            echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 96
        echo "\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t";
        // line 97
        // line 98
        echo "\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-labeled navbar-btn dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t";
        // line 99
        if ((isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null)) {
            // line 100
            echo "\t\t\t\t\t\t\t<span class=\"btn-label nav-avatar\">";
            echo (isset($context["CURRENT_USER_AVATAR"]) ? $context["CURRENT_USER_AVATAR"] : null);
            echo "</span>
\t\t\t\t\t\t";
        } elseif (        // line 101
(isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 102
            echo "\t\t\t\t\t\t\t<span class=\"btn-label nav-avatar\"><img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/default_avatar.jpg\" alt=\"";
            echo $this->env->getExtension('phpbb')->lang("AVATAR");
            echo "\"></span>
\t\t\t\t\t\t";
        } else {
            // line 104
            echo "\t\t\t\t\t\t\t<span class=\"btn-label\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t";
        }
        // line 106
        echo "\t\t\t\t\t\t";
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            echo (isset($context["S_USERNAME"]) ? $context["S_USERNAME"] : null);
            echo " ";
        }
        // line 107
        echo "\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t";
        // line 110
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 111
            echo "\t\t\t\t\t\t\t";
            // line 112
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                // line 113
                echo "\t\t\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\"><i class=\"fa fa-refresh fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>
\t\t\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t\t\t";
            // line 116
            echo "\t\t\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" accesskey=\"e\"><i class=\"fa fa-wrench fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 117
            echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "\"><i class=\"fa fa-sliders fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "</a></li>
\t\t\t\t\t\t\t";
            // line 118
            // line 119
            echo "\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t<li><button class=\"btn btn-danger btn-block\" type=\"button\" title=\"";
            // line 120
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" onclick=\"window.location.href='";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "'\" accesskey=\"x\"><i class=\"fa fa-sign-out fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</button></li>
\t\t\t\t\t\t\t";
            // line 121
            // line 122
            echo "\t\t\t\t\t\t";
        } else {
            // line 123
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<form action=\"";
            // line 124
            echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
            echo "\" method=\"post\" id=\"navloginform\" name=\"loginform\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"";
            // line 126
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\" name=\"username\" size=\"10\" class=\"form-control\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" placeholder=\"";
            // line 129
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\" name=\"password\" size=\"10\" class=\"form-control\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PASSWORD");
            echo "\"/>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 131
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                // line 132
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"autologin-navbar\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin-navbar\" tabindex=\"4\" /> ";
                // line 134
                echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 138
            echo "\t\t\t\t\t\t\t\t\t";
            echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
            echo "
\t\t\t\t\t\t\t\t\t<button type=\"submit\" name=\"login\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-sign-in fa-fw\" aria-hidden=\"true\"></i> ";
            // line 139
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
            echo "</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            // line 142
            if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                // line 143
                echo "\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary btn-block\" onclick=\"window.location.href='";
                // line 144
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "'\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</button></li>
\t\t\t\t\t\t\t";
            } else {
                // line 146
                echo "\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li><button type=\"button\" class=\"btn btn-primary btn-block\" disabled=\"disabled\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> ";
                // line 147
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</button></li>
\t\t\t\t\t\t\t";
            }
            // line 149
            echo "\t\t\t\t\t\t\t";
            // line 150
            echo "\t\t\t\t\t\t";
        }
        // line 151
        echo "\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t";
        // line 153
        // line 154
        echo "\t\t\t</ul>
\t\t\t<!-- Mobile user menu -->
\t\t\t<ul class=\"nav navbar-nav navbar-right visible-xs fix-right-nav\">
\t\t\t\t";
        // line 157
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 158
            echo "\t\t\t\t\t";
            // line 159
            echo "\t\t\t\t\t";
            if ((isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null)) {
                // line 160
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo (isset($context["U_RESTORE_PERMISSIONS"]) ? $context["U_RESTORE_PERMISSIONS"] : null);
                echo "\"><i class=\"fa fa-refresh fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("RESTORE_PERMISSIONS");
                echo "</a></li>
\t\t\t\t\t";
            }
            // line 162
            echo "\t\t\t\t\t";
            // line 163
            echo "\t\t\t\t\t<li><a href=\"";
            echo (isset($context["U_PROFILE"]) ? $context["U_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "\" accesskey=\"e\"><i class=\"fa fa-wrench fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("PROFILE");
            echo "</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 164
            echo (isset($context["U_USER_PROFILE"]) ? $context["U_USER_PROFILE"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "\"><i class=\"fa fa-sliders fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("READ_PROFILE");
            echo "</a></li>
\t\t\t\t\t";
            // line 165
            // line 166
            echo "\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t<li><a href=\"";
            // line 167
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\"><i class=\"fa fa-sign-out fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</a></li>
\t\t\t\t\t";
            // line 168
            // line 169
            echo "\t\t\t\t\t";
            // line 170
            echo "\t\t\t\t";
        } else {
            // line 171
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"row no-margin-bottom\">
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-danger btn-block\" type=\"button\" title=\"";
            // line 174
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "\" onclick=\"window.location.href='";
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "'\" accesskey=\"x\"><i class=\"fa fa-sign-out fa-fw\" aria-hidden=\"true\"></i> ";
            echo $this->env->getExtension('phpbb')->lang("LOGIN_LOGOUT");
            echo "</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br class=\"col-xs-12\"/>
\t\t\t\t\t\t\t<br class=\"col-xs-12\"/>
\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t";
            // line 179
            if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                // line 180
                echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-block\" type=\"button\" onclick=\"window.location.href='";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "'\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</button>
\t\t\t\t\t\t\t\t";
            } else {
                // line 182
                echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-block\" disabled=\"disabled\" type=\"button\"><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> ";
                echo $this->env->getExtension('phpbb')->lang("REGISTER");
                echo "</button>
\t\t\t\t\t\t\t\t";
            }
            // line 184
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 188
        echo "\t\t\t</ul>
\t\t</div>
\t\t";
        // line 190
        if (((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null) && (isset($context["S_NOTIFICATIONS_DISPLAY"]) ? $context["S_NOTIFICATIONS_DISPLAY"] : null))) {
            // line 191
            echo "\t\t\t<div class=\"collapse navbar-collapse pull-right-desktop\" id=\"notification-menu\">
\t\t\t\t<ul class=\"nav navbar-nav navbar-right hidden-xs\">
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle hidden-xs\" id=\"notification_list_button\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-bell fa-fw\" aria-hidden=\"true\"></i> ";
            // line 194
            echo $this->env->getExtension('phpbb')->lang("NOTIFICATIONS");
            echo " <span class=\"label label-primary\">";
            echo (isset($context["NOTIFICATIONS_COUNT"]) ? $context["NOTIFICATIONS_COUNT"] : null);
            echo "</span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu notification-panel\" id=\"notification-panel-desktop\" role=\"menu\">
\t\t\t\t\t\t\t<li><div id=\"notification_list\">";
            // line 196
            $location = "notification_dropdown.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("notification_dropdown.html", "navbar_header.html", 196)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            echo "</div></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<ul class=\"nav navbar-nav navbar-right visible-xs notification-panel\" id=\"notification-panel-mobile\">
\t\t\t\t\t<li><div id=\"notification_list_mobile\">";
            // line 201
            $location = "notification_dropdown.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("notification_dropdown.html", "navbar_header.html", 201)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            echo "</div></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t";
        }
        // line 205
        echo "\t</div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 205,  594 => 201,  576 => 196,  569 => 194,  564 => 191,  562 => 190,  558 => 188,  552 => 184,  546 => 182,  538 => 180,  536 => 179,  524 => 174,  519 => 171,  516 => 170,  514 => 169,  513 => 168,  505 => 167,  502 => 166,  501 => 165,  493 => 164,  484 => 163,  482 => 162,  474 => 160,  471 => 159,  469 => 158,  467 => 157,  462 => 154,  461 => 153,  457 => 151,  454 => 150,  452 => 149,  447 => 147,  444 => 146,  437 => 144,  434 => 143,  432 => 142,  426 => 139,  421 => 138,  414 => 134,  410 => 132,  408 => 131,  401 => 129,  393 => 126,  388 => 124,  385 => 123,  382 => 122,  381 => 121,  373 => 120,  370 => 119,  369 => 118,  361 => 117,  352 => 116,  350 => 115,  342 => 113,  339 => 112,  337 => 111,  335 => 110,  330 => 107,  324 => 106,  320 => 104,  312 => 102,  310 => 101,  305 => 100,  303 => 99,  300 => 98,  299 => 97,  296 => 96,  281 => 92,  277 => 91,  274 => 90,  272 => 89,  267 => 86,  256 => 80,  252 => 79,  248 => 78,  239 => 76,  234 => 74,  231 => 73,  229 => 72,  225 => 70,  223 => 69,  213 => 67,  210 => 66,  200 => 64,  198 => 63,  189 => 62,  188 => 61,  184 => 59,  183 => 58,  180 => 57,  177 => 56,  168 => 55,  160 => 54,  157 => 53,  155 => 52,  152 => 51,  145 => 49,  138 => 47,  131 => 46,  123 => 44,  120 => 43,  112 => 41,  109 => 40,  101 => 38,  98 => 37,  95 => 36,  93 => 35,  92 => 34,  87 => 32,  81 => 31,  76 => 28,  70 => 24,  67 => 23,  61 => 19,  59 => 18,  56 => 17,  52 => 15,  44 => 13,  42 => 12,  37 => 11,  35 => 10,  28 => 8,  19 => 1,);
    }
}
/* <nav class="navbar navbar-default navbar-fixed-top navbar-fix" id="header-nav">*/
/* 	<!-- Mobile dropdown buttons -->*/
/* 	<div class="container-fluid">*/
/* 		<div class="navbar-header">*/
/* 			<button type="button" class="navbar-toggle pull-left-mobile" id="main-menu-btn" data-toggle="collapse" data-target="#main-menu">*/
/* 				<i class="fa fa-bars fa-fw" aria-hidden="true"></i>*/
/* 			</button>*/
/* 			<a class="navbar-brand" href="{U_INDEX}">{SITENAME}</a>*/
/* 			<button type="button" class="navbar-toggle pull-right-mobile" id="user-menu-btn" data-toggle="collapse" data-target="#user-menu">*/
/* 				<!-- IF CURRENT_USER_AVATAR -->*/
/* 					<span class="nav-avatar-mobile">{CURRENT_USER_AVATAR}</span>*/
/* 				<!-- ELSEIF S_REGISTERED_USER -->*/
/* 					<span class="nav-avatar-mobile"><img src="{T_THEME_PATH}/images/default_avatar.jpg" alt="{L_AVATAR}"></span>*/
/* 				<!-- ELSE -->*/
/* 					<i class="fa fa-user fa-fw" aria-hidden="true"></i>*/
/* 				<!-- ENDIF -->*/
/* 			</button>*/
/* 			<!-- IF S_REGISTERED_USER and S_NOTIFICATIONS_DISPLAY -->*/
/* 				<button type="button" class="navbar-toggle pull-right-mobile" id="notification-menu-btn" data-toggle="collapse" data-target="#notification-menu">*/
/* 					<i class="fa fa-bell fa-fw" aria-hidden="true"></i>*/
/* 				</button>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_DISPLAY_SEARCH and not S_IN_SEARCH -->*/
/* 				<button type="button" class="navbar-toggle pull-right-mobile" id="search-menu-btn" data-toggle="collapse" data-target="#search-menu">*/
/* 					<i class="fa fa-search fa-fw" aria-hidden="true"></i>*/
/* 				</button>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 		<div class="collapse navbar-collapse pull-left-desktop" id="main-menu">*/
/* 			<ul class="nav navbar-nav">*/
/* 				<li id="quick-links" class="dropdown <!-- IF not S_DISPLAY_QUICK_LINKS and not S_DISPLAY_SEARCH --> hidden<!-- ENDIF -->" data-skip-responsive="true">*/
/* 					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-bars fa-fw" aria-hidden="true"></i> {L_QUICK_LINKS}</a>*/
/* 					<ul class="dropdown-menu" role="menu">*/
/* 						<!-- EVENT navbar_header_quick_links_before -->*/
/* 						<!-- EVENT overall_header_searchbox_before -->*/
/* 						<!-- IF S_DISPLAY_SEARCH -->*/
/* 							<!-- IF S_REGISTERED_USER -->*/
/* 								<li><a href="{U_SEARCH_SELF}" role="menuitem">{L_SEARCH_SELF}</a></li>*/
/* 							<!-- ENDIF -->*/
/* 							<!-- IF S_USER_LOGGED_IN -->*/
/* 								<li><a href="{U_SEARCH_NEW}" role="menuitem">{L_SEARCH_NEW}</a></li>*/
/* 							<!-- ENDIF -->*/
/* 							<!-- IF S_LOAD_UNREADS -->*/
/* 								<li><a href="{U_SEARCH_UNREAD}" role="menuitem">{L_SEARCH_UNREAD}</a></li>*/
/* 							<!-- ENDIF -->*/
/* 							<li><a href="{U_SEARCH_UNANSWERED}" role="menuitem">{L_SEARCH_UNANSWERED}</a></li>*/
/* 							<li><a href="{U_SEARCH_ACTIVE_TOPICS}" role="menuitem">{L_SEARCH_ACTIVE_TOPICS}</a></li>*/
/* 							<li class="divider"></li>*/
/* 							<li><a href="{U_SEARCH}" role="menuitem">{L_SEARCH}</a></li>*/
/* 						<!-- ENDIF -->*/
/* */
/* 						<!-- IF not S_IS_BOT and (S_DISPLAY_MEMBERLIST or U_TEAM) -->*/
/* 							<li class="divider"></li>*/
/* 							<!-- IF S_DISPLAY_MEMBERLIST --><li><a href="{U_MEMBERLIST}" role="menuitem"><i class="fa fa-group fa-fw" aria-hidden="true"></i> {L_MEMBERLIST}</a></li><!-- ENDIF -->*/
/* 							<!-- IF U_TEAM --><li><a href="{U_TEAM}" role="menuitem"><i class="fa fa-shield fa-fw" aria-hidden="true"></i> {L_THE_TEAM}</a></li><!-- ENDIF -->*/
/* 						<!-- ENDIF -->*/
/* */
/* 						<!-- EVENT navbar_header_quick_links_after -->*/
/* 					</ul>*/
/* 				</li>*/
/* 				<!-- EVENT overall_header_navigation_prepend -->*/
/* 				<li><a href="{U_FAQ}" title="{L_FAQ_EXPLAIN}"><i class="fa fa-question fa-fw" aria-hidden="true"></i> {L_FAQ}</a></li>*/
/* 				<!-- IF U_ACP -->*/
/* 					<li><a href="{U_ACP}" title="{L_ACP}"><i class="fa fa-cogs fa-fw" aria-hidden="true"></i> {L_ACP_SHORT}</a></li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF U_MCP -->*/
/* 					<li><a href="{U_MCP}" title="{L_MCP}"><i class="fa fa-gavel fa-fw" aria-hidden="true"></i> {L_MCP_SHORT}</a></li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- EVENT overall_header_navigation_append -->*/
/* 			</ul>*/
/* 		</div>*/
/* 		<!-- IF S_DISPLAY_SEARCH and not S_IN_SEARCH -->*/
/* 			<div class="collapse navbar-collapse pull-left-desktop" id="search-menu">*/
/* 				<form class="navbar-form navbar-left" method="get" id="search" action="{U_SEARCH}">*/
/* 					<div class="input-group">*/
/* 						<input name="keywords" id="keywords" type="search" class="input-medium search form-control" maxlength="128" title="{L_SEARCH_KEYWORDS}" size="20" value="{SEARCH_WORDS}" placeholder="{LA_SEARCH_FORUM}" />*/
/* 						<div class="input-group-btn">*/
/* 							{S_SEARCH_LOCAL_HIDDEN_FIELDS}*/
/* 							<button type="submit" class="btn btn-default" title="{L_SEARCH}" data-placement="bottom"><i class="fa fa-search fa-fw" aria-hidden="true"></i></button>*/
/* 							<a href="{U_SEARCH}" class="btn btn-default" title="{L_SEARCH_ADV}" data-placement="bottom"><i class="fa fa-cog fa-fw" aria-hidden="true"></i></a>*/
/* 						</div>*/
/* 					</div>*/
/* 				</form>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<div class="collapse navbar-collapse pull-right-desktop" id="user-menu">*/
/* 			<!-- Desktop user menu -->*/
/* 			<ul class="nav navbar-nav navbar-right hidden-xs fix-right-nav">*/
/* 				<!-- IF S_DISPLAY_PM -->*/
/* 					<li>*/
/* 						<a href="{U_PRIVATEMSGS}">*/
/* 							<i class="fa fa-envelope fa-fw" aria-hidden="true"></i> {L_PRIVATE_MESSAGES} <span class="label <!-- IF PRIVATE_MESSAGE_INFO_UNREAD -->label-danger<!-- ELSE -->label-primary<!-- ENDIF -->">{PRIVATE_MESSAGE_COUNT}</span>*/
/* 						</a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<li class="dropdown">*/
/* 					<!-- EVENT navbar_header_username_prepend -->*/
/* 					<button type="button" class="btn btn-primary btn-labeled navbar-btn dropdown-toggle" data-toggle="dropdown">*/
/* 						<!-- IF CURRENT_USER_AVATAR -->*/
/* 							<span class="btn-label nav-avatar">{CURRENT_USER_AVATAR}</span>*/
/* 						<!-- ELSEIF S_REGISTERED_USER -->*/
/* 							<span class="btn-label nav-avatar"><img src="{T_THEME_PATH}/images/default_avatar.jpg" alt="{L_AVATAR}"></span>*/
/* 						<!-- ELSE -->*/
/* 							<span class="btn-label"><i class="fa fa-user fa-fw" aria-hidden="true"></i></span>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF S_REGISTERED_USER -->{S_USERNAME} <!-- ENDIF -->*/
/* 						<span class="caret"></span>*/
/* 					</button>*/
/* 					<ul class="dropdown-menu">*/
/* 						<!-- IF S_REGISTERED_USER -->*/
/* 							<!-- EVENT navbar_header_user_profile_prepend -->*/
/* 							<!-- IF U_RESTORE_PERMISSIONS -->*/
/* 								<li><a href="{U_RESTORE_PERMISSIONS}"><i class="fa fa-refresh fa-fw" aria-hidden="true"></i> {L_RESTORE_PERMISSIONS}</a></li>*/
/* 							<!-- ENDIF -->*/
/* 							<!-- EVENT navbar_header_profile_list_before -->*/
/* 							<li><a href="{U_PROFILE}" title="{L_PROFILE}" accesskey="e"><i class="fa fa-wrench fa-fw" aria-hidden="true"></i> {L_PROFILE}</a></li>*/
/* 							<li><a href="{U_USER_PROFILE}" title="{L_READ_PROFILE}"><i class="fa fa-sliders fa-fw" aria-hidden="true"></i> {L_READ_PROFILE}</a></li>*/
/* 							<!-- EVENT navbar_header_profile_list_after -->*/
/* 							<li class="divider"></li>*/
/* 							<li><button class="btn btn-danger btn-block" type="button" title="{L_LOGIN_LOGOUT}" onclick="window.location.href='{U_LOGIN_LOGOUT}'" accesskey="x"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> {L_LOGIN_LOGOUT}</button></li>*/
/* 							<!-- EVENT navbar_header_user_profile_append -->*/
/* 						<!-- ELSE -->*/
/* 							<li>*/
/* 								<form action="{S_LOGIN_ACTION}" method="post" id="navloginform" name="loginform">*/
/* 									<div class="form-group">*/
/* 										<input type="text" placeholder="{L_USERNAME}" name="username" size="10" class="form-control" title="{L_USERNAME}"/>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<input type="password" placeholder="{L_PASSWORD}" name="password" size="10" class="form-control" title="{L_PASSWORD}"/>*/
/* 									</div>*/
/* 									<!-- IF S_AUTOLOGIN_ENABLED -->*/
/* 										<div class="form-group">*/
/* 											<div class="checkbox">*/
/* 												<label for="autologin-navbar"><input type="checkbox" name="autologin" id="autologin-navbar" tabindex="4" /> {L_LOG_ME_IN}</label>*/
/* 											</div>*/
/* 										</div>*/
/* 									<!-- ENDIF -->*/
/* 									{S_LOGIN_REDIRECT}*/
/* 									<button type="submit" name="login" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-fw" aria-hidden="true"></i> {L_LOGIN}</button>*/
/* 								</form>*/
/* 							</li>*/
/* 							<!-- IF S_REGISTER_ENABLED -->*/
/* 								<li class="divider"></li>*/
/* 								<li><button type="button" class="btn btn-primary btn-block" onclick="window.location.href='{U_REGISTER}'"><i class="fa fa-user fa-fw" aria-hidden="true"></i> {L_REGISTER}</button></li>*/
/* 							<!-- ELSE -->*/
/* 								<li class="divider"></li>*/
/* 								<li><button type="button" class="btn btn-primary btn-block" disabled="disabled"><i class="fa fa-user fa-fw" aria-hidden="true"></i> {L_REGISTER}</button></li>*/
/* 							<!-- ENDIF -->*/
/* 							<!-- EVENT navbar_header_logged_out_content -->*/
/* 						<!-- ENDIF -->*/
/* 					</ul>*/
/* 				</li>*/
/* 				<!-- EVENT navbar_header_username_append -->*/
/* 			</ul>*/
/* 			<!-- Mobile user menu -->*/
/* 			<ul class="nav navbar-nav navbar-right visible-xs fix-right-nav">*/
/* 				<!-- IF S_REGISTERED_USER -->*/
/* 					<!-- EVENT navbar_header_user_profile_prepend -->*/
/* 					<!-- IF U_RESTORE_PERMISSIONS -->*/
/* 						<li><a href="{U_RESTORE_PERMISSIONS}"><i class="fa fa-refresh fa-fw" aria-hidden="true"></i> {L_RESTORE_PERMISSIONS}</a></li>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- EVENT navbar_header_profile_list_before -->*/
/* 					<li><a href="{U_PROFILE}" title="{L_PROFILE}" accesskey="e"><i class="fa fa-wrench fa-fw" aria-hidden="true"></i> {L_PROFILE}</a></li>*/
/* 					<li><a href="{U_USER_PROFILE}" title="{L_READ_PROFILE}"><i class="fa fa-sliders fa-fw" aria-hidden="true"></i> {L_READ_PROFILE}</a></li>*/
/* 					<!-- EVENT navbar_header_profile_list_after -->*/
/* 					<li class="divider"></li>*/
/* 					<li><a href="{U_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}" accesskey="x"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> {L_LOGIN_LOGOUT}</a></li>*/
/* 					<!-- EVENT navbar_header_logged_out_content -->*/
/* 					<!-- EVENT navbar_header_user_profile_append -->*/
/* 				<!-- ELSE -->*/
/* 					<li>*/
/* 						<div class="row no-margin-bottom">*/
/* 							<div class="col-xs-12">*/
/* 								<button class="btn btn-danger btn-block" type="button" title="{L_LOGIN_LOGOUT}" onclick="window.location.href='{U_LOGIN_LOGOUT}'" accesskey="x"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i> {L_LOGIN_LOGOUT}</button>*/
/* 							</div>*/
/* 							<br class="col-xs-12"/>*/
/* 							<br class="col-xs-12"/>*/
/* 							<div class="col-xs-12">*/
/* 								<!-- IF S_REGISTER_ENABLED -->*/
/* 									<button class="btn btn-primary btn-block" type="button" onclick="window.location.href='{U_REGISTER}'"><i class="fa fa-user fa-fw" aria-hidden="true"></i> {L_REGISTER}</button>*/
/* 								<!-- ELSE -->*/
/* 									<button class="btn btn-primary btn-block" disabled="disabled" type="button"><i class="fa fa-user fa-fw" aria-hidden="true"></i> {L_REGISTER}</button>*/
/* 								<!-- ENDIF -->*/
/* 							</div>*/
/* 						</div>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 			</ul>*/
/* 		</div>*/
/* 		<!-- IF S_REGISTERED_USER and S_NOTIFICATIONS_DISPLAY -->*/
/* 			<div class="collapse navbar-collapse pull-right-desktop" id="notification-menu">*/
/* 				<ul class="nav navbar-nav navbar-right hidden-xs">*/
/* 					<li class="dropdown">*/
/* 						<a href="#" class="dropdown-toggle hidden-xs" id="notification_list_button" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-bell fa-fw" aria-hidden="true"></i> {L_NOTIFICATIONS} <span class="label label-primary">{NOTIFICATIONS_COUNT}</span></a>*/
/* 						<ul class="dropdown-menu notification-panel" id="notification-panel-desktop" role="menu">*/
/* 							<li><div id="notification_list"><!-- INCLUDE notification_dropdown.html --></div></li>*/
/* 						</ul>*/
/* 					</li>*/
/* 				</ul>*/
/* 				<ul class="nav navbar-nav navbar-right visible-xs notification-panel" id="notification-panel-mobile">*/
/* 					<li><div id="notification_list_mobile"><!-- INCLUDE notification_dropdown.html --></div></li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* </nav>*/
/* */
