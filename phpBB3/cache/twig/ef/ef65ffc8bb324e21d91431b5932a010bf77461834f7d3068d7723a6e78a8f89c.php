<?php

/* memberlist_view.html */
class __TwigTemplate_08eadde973911ad020c12eaa2263827fb51ff0630a4240cd682ade728a4e19e5 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "memberlist_view.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        // line 4
        echo "
<form method=\"post\" action=\"";
        // line 5
        echo (isset($context["S_PROFILE_ACTION"]) ? $context["S_PROFILE_ACTION"] : null);
        echo "\" id=\"viewprofile\">
\t<div class=\"user-details\">
\t\t<div class=\"user-image rounded\">
\t\t\t";
        // line 8
        if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            // line 9
            echo "\t\t\t\t";
            echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            echo "
\t\t\t";
        } else {
            // line 11
            echo "\t\t\t\t<img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/default_avatar.jpg\" alt=\"";
            echo $this->env->getExtension('phpbb')->lang("AVATAR");
            echo "\">
\t\t\t";
        }
        // line 13
        echo "\t\t</div>
\t\t<div class=\"user-info-block panel panel-default badger-left-radius ";
        // line 14
        if ((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null)) {
            echo "badger-success\" data-badger=\"ONLINE";
        } else {
            echo "badger-danger\" data-badger=\"OFFLINE";
        }
        echo "\">
\t\t\t<div class=\"user-heading\">
\t\t\t\t";
        // line 16
        if ((isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null)) {
            echo "<h3 style=\"color: ";
            echo (isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null);
            echo "; font-weight: bold;\">";
        } else {
            echo "<h3>";
        }
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "</h3>
\t\t\t\t";
        // line 17
        // line 18
        echo "\t\t\t\t";
        if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
            echo "<span class=\"help-block\">";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            echo "</span>";
        }
        // line 19
        echo "\t\t\t\t";
        if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
            echo "<span class=\"help-block\">";
            echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            echo "</span>";
        }
        // line 20
        echo "\t\t\t\t";
        // line 21
        echo "\t\t\t</div>
\t\t\t<ul class=\"navigation\">
\t\t\t\t<li class=\"active\">
\t\t\t\t\t<a><i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"user-body panel-body\">
\t\t\t\t<div class=\" row\">
\t\t\t\t\t<div class=\" col-md-12\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading btn-panel\">
\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        if ((isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null)) {
            echo "<span style=\"color: ";
            echo (isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null);
            echo "; font-weight: bold;\">";
        } else {
            echo "<span>";
        }
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "</span>
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<span class=\"pull-right btn-group panel-right\">
\t\t\t\t\t\t\t\t\t";
        // line 36
        if ((isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null);
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN");
            echo "</a>";
        }
        // line 37
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["U_EDIT_SELF"]) ? $context["U_EDIT_SELF"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_EDIT_SELF"]) ? $context["U_EDIT_SELF"] : null);
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("EDIT_PROFILE");
            echo "</a>";
        }
        // line 38
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null);
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("USER_BAN");
            echo "</a>";
        }
        // line 39
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null)) {
            echo "<a href=\"";
            echo (isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null);
            echo "\" class=\"btn btn-default\">";
            echo $this->env->getExtension('phpbb')->lang("USE_PERMISSIONS");
            echo "</a>";
        }
        // line 40
        echo "\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t\t\t\t";
        // line 44
        if ( !(isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 46
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                // line 48
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
                echo $this->env->getExtension('phpbb')->lang("RANK");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
                // line 50
                echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                // line 54
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
                if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                    echo "&nbsp;";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("RANK");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                }
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
                // line 56
                echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            // line 60
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["S_USER_INACTIVE"]) ? $context["S_USER_INACTIVE"] : null)) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("USER_IS_INACTIVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
            // line 66
            echo (isset($context["USER_INACTIVE_REASON"]) ? $context["USER_INACTIVE_REASON"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null)) {
            // line 71
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
            // line 72
            echo $this->env->getExtension('phpbb')->lang("USERGROUPS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"g\">";
            // line 74
            echo (isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null);
            echo "</select>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 75
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"btn btn-default\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t\t\t\t\t";
        if (((isset($context["AGE"]) ? $context["AGE"] : null) !== "")) {
            // line 80
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
            // line 81
            echo $this->env->getExtension('phpbb')->lang("AGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
            // line 83
            echo (isset($context["AGE"]) ? $context["AGE"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 87
        echo "\t\t\t\t\t\t\t\t\t";
        // line 88
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t";
            if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 90
                echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
                // line 91
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
                // line 93
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "\t\t\t\t\t\t\t\t\t";
        // line 99
        echo "\t\t\t\t\t\t\t\t\t";
        // line 100
        echo "\t\t\t\t\t\t\t\t\t";
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (isset($context["S_ZEBRA"]) ? $context["S_ZEBRA"] : null))) {
            // line 101
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9 col-md-offset-3\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 103
            if ((isset($context["U_REMOVE_FRIEND"]) ? $context["U_REMOVE_FRIEND"] : null)) {
                // line 104
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["U_REMOVE_FRIEND"]) ? $context["U_REMOVE_FRIEND"] : null);
                echo "\" class=\"btn btn-danger\" data-ajax=\"zebra\">";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FRIEND");
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } elseif (            // line 105
(isset($context["U_REMOVE_FOE"]) ? $context["U_REMOVE_FOE"] : null)) {
                // line 106
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["U_REMOVE_FOE"]) ? $context["U_REMOVE_FOE"] : null);
                echo "\" class=\"btn btn-success\" data-ajax=\"zebra\">";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FOE");
                echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 108
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((isset($context["U_ADD_FRIEND"]) ? $context["U_ADD_FRIEND"] : null)) {
                    // line 109
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo (isset($context["U_ADD_FRIEND"]) ? $context["U_ADD_FRIEND"] : null);
                    echo "\" class=\"btn btn-success\" data-ajax=\"zebra\">";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FRIEND");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((isset($context["U_ADD_FOE"]) ? $context["U_ADD_FOE"] : null)) {
                    // line 112
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo (isset($context["U_ADD_FOE"]) ? $context["U_ADD_FOE"] : null);
                    echo "\" class=\"btn btn-danger\" data-ajax=\"zebra\">";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FOE");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 118
        echo "\t\t\t\t\t\t\t\t\t";
        // line 119
        echo "\t\t\t\t\t\t\t\t\t";
        // line 120
        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9 col-md-offset-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-labeled dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn-label\"><i class=\"fa fa-envelope fa-fw\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 125
        echo $this->env->getExtension('phpbb')->lang("CONTACT_USER");
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 129
        if ((isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL_USER");
            echo "</a></li>";
        }
        // line 130
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ((isset($context["U_PM"]) ? $context["U_PM"] : null)) {
            echo "<li><a href=\"";
            echo (isset($context["U_PM"]) ? $context["U_PM"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_PRIVATE_MESSAGE");
            echo "</a></li>";
        }
        // line 131
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if (((isset($context["U_JABBER"]) ? $context["U_JABBER"] : null) && (isset($context["S_JABBER_ENABLED"]) ? $context["S_JABBER_ENABLED"] : null))) {
            echo "<li>><a href=\"";
            echo (isset($context["U_JABBER"]) ? $context["U_JABBER"] : null);
            echo "\" onclick=\"popup(this.href, 750, 320); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_JABBER_MESSAGE");
            echo "</a></li>";
        } elseif ((isset($context["USER_JABBER"]) ? $context["USER_JABBER"] : null)) {
            echo "<li>";
            echo (isset($context["USER_JABBER"]) ? $context["USER_JABBER"] : null);
            echo "</li>";
        }
        // line 132
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 133
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 134
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 135
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array())) {
                    // line 136
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_DESC", array());
                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 138
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 140
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 141
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 143
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
        if ((isset($context["S_PROFILE_FIELD1"]) ? $context["S_PROFILE_FIELD1"] : null)) {
            // line 144
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>";
            // line 146
            echo (isset($context["PROFILE_FIELD1_VALUE"]) ? $context["PROFILE_FIELD1_VALUE"] : null);
            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 148
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
        // line 159
        echo $this->env->getExtension('phpbb')->lang("USER_FORUM");
        echo "</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t\t\t\t";
        // line 163
        // line 164
        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
        // line 165
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        // line 167
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
        // line 171
        echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\">";
        // line 173
        echo (isset($context["LAST_ACTIVE"]) ? $context["LAST_ACTIVE"] : null);
        echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 176
        if ((isset($context["S_WARNINGS"]) ? $context["S_WARNINGS"] : null)) {
            // line 177
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
            // line 178
            echo $this->env->getExtension('phpbb')->lang("WARNINGS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            // line 180
            echo (isset($context["WARNINGS"]) ? $context["WARNINGS"] : null);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 181
            if (((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null) || (isset($context["U_WARN"]) ? $context["U_WARN"] : null))) {
                // line 182
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 183
                if ((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null)) {
                    // line 184
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo (isset($context["U_NOTES"]) ? $context["U_NOTES"] : null);
                    echo "\" class=\"btn btn-primary btn-sm\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_NOTES");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 186
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((isset($context["U_WARN"]) ? $context["U_WARN"] : null)) {
                    // line 187
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo (isset($context["U_WARN"]) ? $context["U_WARN"] : null);
                    echo "\" class=\"btn btn-danger btn-sm\">";
                    echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 189
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 191
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 194
        echo "\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
        // line 195
        echo $this->env->getExtension('phpbb')->lang("TOTAL_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
        // line 197
        echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 198
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            // line 199
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            echo (isset($context["U_SEARCH_USER"]) ? $context["U_SEARCH_USER"] : null);
            echo "\" class=\"btn btn-primary btn-sm\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 201
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null)) {
            echo "<span class=\"help-block\">(";
            echo (isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null);
            echo " / ";
            echo (isset($context["POSTS_DAY"]) ? $context["POSTS_DAY"] : null);
            echo ")</span>";
        }
        // line 202
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if (((isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null) && (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null))) {
            // line 203
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">(<a href=\"";
            echo (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo "</a>)</span>
\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (        // line 204
(isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null)) {
            // line 205
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">(";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo ")</span>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 207
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 209
        if (((isset($context["S_SHOW_ACTIVITY"]) ? $context["S_SHOW_ACTIVITY"] : null) && (isset($context["POSTS"]) ? $context["POSTS"] : null))) {
            // line 210
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
            // line 211
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 213
            if (((isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null) != "")) {
                // line 214
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\"><a href=\"";
                echo (isset($context["U_ACTIVE_FORUM"]) ? $context["U_ACTIVE_FORUM"] : null);
                echo "\">";
                echo (isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null);
                echo "</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">(";
                // line 215
                echo (isset($context["ACTIVE_FORUM_POSTS"]) ? $context["ACTIVE_FORUM_POSTS"] : null);
                echo " / ";
                echo (isset($context["ACTIVE_FORUM_PCT"]) ? $context["ACTIVE_FORUM_PCT"] : null);
                echo ")</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 216
                echo " - ";
            }
            // line 217
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
            // line 220
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_TOPIC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 222
            if (((isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null) != "")) {
                // line 223
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"form-control-static\"><a href=\"";
                echo (isset($context["U_ACTIVE_TOPIC"]) ? $context["U_ACTIVE_TOPIC"] : null);
                echo "\">";
                echo (isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null);
                echo "</a></p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">(";
                // line 224
                echo (isset($context["ACTIVE_TOPIC_POSTS"]) ? $context["ACTIVE_TOPIC_POSTS"] : null);
                echo " / ";
                echo (isset($context["ACTIVE_TOPIC_PCT"]) ? $context["ACTIVE_TOPIC_PCT"] : null);
                echo ")</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 225
                echo " - ";
            }
            // line 226
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 229
        echo "\t\t\t\t\t\t\t\t\t";
        // line 230
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 235
        // line 236
        echo "\t\t\t\t";
        if ((isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null)) {
            // line 237
            echo "\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 239
            echo $this->env->getExtension('phpbb')->lang("SIGNATURE");
            echo "</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t";
            // line 242
            echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 246
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</form>

";
        // line 251
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
        $this->loadTemplate("jumpbox.html", "memberlist_view.html", 253)->display($context);
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
        $this->loadTemplate("overall_footer.html", "memberlist_view.html", 255)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  744 => 255,  741 => 254,  729 => 253,  726 => 252,  725 => 251,  718 => 246,  711 => 242,  705 => 239,  701 => 237,  698 => 236,  697 => 235,  690 => 230,  688 => 229,  683 => 226,  680 => 225,  673 => 224,  666 => 223,  664 => 222,  658 => 220,  653 => 217,  650 => 216,  643 => 215,  636 => 214,  634 => 213,  628 => 211,  625 => 210,  623 => 209,  619 => 207,  613 => 205,  611 => 204,  604 => 203,  601 => 202,  592 => 201,  584 => 199,  582 => 198,  578 => 197,  572 => 195,  569 => 194,  564 => 191,  560 => 189,  552 => 187,  549 => 186,  541 => 184,  539 => 183,  536 => 182,  534 => 181,  530 => 180,  524 => 178,  521 => 177,  519 => 176,  513 => 173,  507 => 171,  500 => 167,  494 => 165,  491 => 164,  490 => 163,  483 => 159,  470 => 148,  465 => 146,  461 => 144,  458 => 143,  456 => 142,  450 => 141,  447 => 140,  441 => 138,  433 => 136,  430 => 135,  427 => 134,  422 => 133,  420 => 132,  407 => 131,  398 => 130,  390 => 129,  383 => 125,  376 => 120,  374 => 119,  372 => 118,  367 => 115,  364 => 114,  356 => 112,  353 => 111,  345 => 109,  342 => 108,  334 => 106,  332 => 105,  325 => 104,  323 => 103,  319 => 101,  316 => 100,  314 => 99,  312 => 98,  306 => 97,  299 => 93,  293 => 91,  290 => 90,  287 => 89,  282 => 88,  280 => 87,  273 => 83,  267 => 81,  264 => 80,  261 => 79,  254 => 75,  250 => 74,  244 => 72,  241 => 71,  238 => 70,  231 => 66,  225 => 64,  222 => 63,  219 => 62,  215 => 60,  213 => 59,  207 => 56,  196 => 54,  193 => 53,  187 => 50,  180 => 48,  177 => 47,  176 => 46,  173 => 45,  171 => 44,  165 => 40,  156 => 39,  147 => 38,  138 => 37,  130 => 36,  114 => 33,  100 => 21,  98 => 20,  91 => 19,  84 => 18,  83 => 17,  72 => 16,  63 => 14,  60 => 13,  52 => 11,  46 => 9,  44 => 8,  38 => 5,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- EVENT memberlist_view_content_prepend -->*/
/* */
/* <form method="post" action="{S_PROFILE_ACTION}" id="viewprofile">*/
/* 	<div class="user-details">*/
/* 		<div class="user-image rounded">*/
/* 			<!-- IF AVATAR_IMG -->*/
/* 				{AVATAR_IMG}*/
/* 			<!-- ELSE -->*/
/* 				<img src="{T_THEME_PATH}/images/default_avatar.jpg" alt="{L_AVATAR}">*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 		<div class="user-info-block panel panel-default badger-left-radius <!-- IF S_ONLINE -->badger-success" data-badger="ONLINE<!-- ELSE -->badger-danger" data-badger="OFFLINE<!-- ENDIF -->">*/
/* 			<div class="user-heading">*/
/* 				<!-- IF USER_COLOR --><h3 style="color: {USER_COLOR}; font-weight: bold;"><!-- ELSE --><h3><!-- ENDIF -->{USERNAME}</h3>*/
/* 				<!-- EVENT memberlist_view_rank_avatar_before -->*/
/* 				<!-- IF RANK_TITLE --><span class="help-block">{RANK_TITLE}</span><!-- ENDIF -->*/
/* 				<!-- IF RANK_IMG --><span class="help-block">{RANK_IMG}</span><!-- ENDIF -->*/
/* 				<!-- EVENT memberlist_view_rank_avatar_after -->*/
/* 			</div>*/
/* 			<ul class="navigation">*/
/* 				<li class="active">*/
/* 					<a><i class="fa fa-user fa-fw" aria-hidden="true"></i></a>*/
/* 				</li>*/
/* 			</ul>*/
/* 			<div class="user-body panel-body">*/
/* 				<div class=" row">*/
/* 					<div class=" col-md-12">*/
/* 						<div class="panel panel-default">*/
/* 							<div class="panel-heading btn-panel">*/
/* 								<h3 class="panel-title">*/
/* 									{L_USERNAME}{L_COLON} <!-- IF USER_COLOR --><span style="color: {USER_COLOR}; font-weight: bold;"><!-- ELSE --><span><!-- ENDIF -->{USERNAME}</span>*/
/* 								</h3>*/
/* 								<span class="pull-right btn-group panel-right">*/
/* 									<!-- IF U_USER_ADMIN --><a href="{U_USER_ADMIN}" class="btn btn-default">{L_USER_ADMIN}</a><!-- ENDIF -->*/
/* 									<!-- IF U_EDIT_SELF --><a href="{U_EDIT_SELF}" class="btn btn-default">{L_EDIT_PROFILE}</a><!-- ENDIF -->*/
/* 									<!-- IF U_USER_BAN --><a href="{U_USER_BAN}" class="btn btn-default">{L_USER_BAN}</a><!-- ENDIF -->*/
/* 									<!-- IF U_SWITCH_PERMISSIONS --><a href="{U_SWITCH_PERMISSIONS}" class="btn btn-default">{L_USE_PERMISSIONS}</a><!-- ENDIF -->*/
/* 								</span>*/
/* 							</div>*/
/* 							<div class="panel-body">*/
/* 								<div class="form-horizontal">*/
/* 									<!-- IF not AVATAR_IMG -->*/
/* 										<div class="form-group">*/
/* 											<!-- EVENT memberlist_view_rank_no_avatar_before -->*/
/* 											<!-- IF RANK_TITLE -->*/
/* 												<label class="control-label col-md-3">{L_RANK}{L_COLON}</label>*/
/* 												<div class="col-md-9">*/
/* 													<p class="form-control-static">{RANK_TITLE}</p>*/
/* 												</div>*/
/* 											<!-- ENDIF -->*/
/* 											<!-- IF RANK_IMG -->*/
/* 												<label class="control-label col-md-3"><!-- IF RANK_TITLE -->&nbsp;<!-- ELSE -->{L_RANK}{L_COLON}<!-- ENDIF --></label>*/
/* 												<div class="col-md-9">*/
/* 													<p class="form-control-static">{RANK_IMG}</p>*/
/* 												</div>*/
/* 											<!-- ENDIF -->*/
/* 											<!-- EVENT memberlist_view_rank_no_avatar_after -->*/
/* 										</div>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF S_USER_INACTIVE -->*/
/* 										<div class="form-group">*/
/* 											<label class="control-label col-md-3">{L_USER_IS_INACTIVE}{L_COLON}</label>*/
/* 											<div class="col-md-9">*/
/* 												<p class="form-control-static">{USER_INACTIVE_REASON}</p>*/
/* 											</div>*/
/* 										</div>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF S_GROUP_OPTIONS -->*/
/* 										<div class="form-group">*/
/* 											<label class="control-label col-md-3">{L_USERGROUPS}{L_COLON}</label>*/
/* 											<div class="col-md-9">*/
/* 												<select name="g">{S_GROUP_OPTIONS}</select>*/
/* 												<input type="submit" name="submit" value="{L_GO}" class="btn btn-default" />*/
/* 											</div>*/
/* 										</div>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- IF AGE !== '' -->*/
/* 										<div class="form-group">*/
/* 											<label class="control-label col-md-3">{L_AGE}{L_COLON}</label>*/
/* 											<div class="col-md-9">*/
/* 												<p class="form-control-static">{AGE}</p>*/
/* 											</div>*/
/* 										</div>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- EVENT memberlist_view_non_contact_custom_fields_before -->*/
/* 									<!-- BEGIN custom_fields -->*/
/* 										<!-- IF not custom_fields.S_PROFILE_CONTACT -->*/
/* 											<div class="form-group">*/
/* 												<label class="control-label col-md-3">{custom_fields.PROFILE_FIELD_NAME}{L_COLON}</label>*/
/* 												<div class="col-md-9">*/
/* 													<p class="form-control-static">{custom_fields.PROFILE_FIELD_VALUE}</p>*/
/* 												</div>*/
/* 											</div>*/
/* 										<!-- ENDIF -->*/
/* 									<!-- END custom_fields -->*/
/* 									<!-- EVENT memberlist_view_non_contact_custom_fields_after -->*/
/* 									<!-- EVENT memberlist_view_zebra_before -->*/
/* 									<!-- IF S_USER_LOGGED_IN and S_ZEBRA -->*/
/* 										<div class="form-group">*/
/* 											<div class="col-md-9 col-md-offset-3">*/
/* 												<!-- IF U_REMOVE_FRIEND -->*/
/* 													<a href="{U_REMOVE_FRIEND}" class="btn btn-danger" data-ajax="zebra">{L_REMOVE_FRIEND}</a>*/
/* 												<!-- ELSEIF U_REMOVE_FOE -->*/
/* 													<a href="{U_REMOVE_FOE}" class="btn btn-success" data-ajax="zebra">{L_REMOVE_FOE}</a>*/
/* 												<!-- ELSE -->*/
/* 													<!-- IF U_ADD_FRIEND -->*/
/* 														<a href="{U_ADD_FRIEND}" class="btn btn-success" data-ajax="zebra">{L_ADD_FRIEND}</a>*/
/* 													<!-- ENDIF -->*/
/* 													<!-- IF U_ADD_FOE -->*/
/* 														<a href="{U_ADD_FOE}" class="btn btn-danger" data-ajax="zebra">{L_ADD_FOE}</a>*/
/* 													<!-- ENDIF -->*/
/* 												<!-- ENDIF -->*/
/* 											</div>*/
/* 										</div>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- EVENT memberlist_view_zebra_after -->*/
/* 									<!-- EVENT memberlist_view_contact_before -->*/
/* 									<div class="form-group">*/
/* 										<div class="col-md-9 col-md-offset-3">*/
/* 											<div class="btn-group">*/
/* 												<a class="btn btn-primary btn-labeled dropdown-toggle" data-toggle="dropdown" href="#">*/
/* 													<span class="btn-label"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></span>*/
/* 													{L_CONTACT_USER}*/
/* 													<span class="caret"></span>*/
/* 												</a>*/
/* 												<ul class="dropdown-menu">*/
/* 													<!-- IF U_EMAIL --><li><a href="{U_EMAIL}">{L_SEND_EMAIL_USER}</a></li><!-- ENDIF -->*/
/* 													<!-- IF U_PM --><li><a href="{U_PM}">{L_SEND_PRIVATE_MESSAGE}</a></li><!-- ENDIF -->*/
/* 													<!-- IF U_JABBER and S_JABBER_ENABLED --><li>><a href="{U_JABBER}" onclick="popup(this.href, 750, 320); return false;">{L_SEND_JABBER_MESSAGE}</a></li><!-- ELSEIF USER_JABBER --><li>{USER_JABBER}</li><!-- ENDIF -->*/
/* 													<!-- EVENT memberlist_view_contact_custom_fields_before -->*/
/* 													<!-- BEGIN custom_fields -->*/
/* 														<!-- IF custom_fields.S_PROFILE_CONTACT -->*/
/* 															<!-- IF custom_fields.PROFILE_FIELD_CONTACT -->*/
/* 																<li><a href="{custom_fields.PROFILE_FIELD_CONTACT}">{custom_fields.PROFILE_FIELD_DESC}</a></li>*/
/* 															<!-- ELSE -->*/
/* 																<li>{custom_fields.PROFILE_FIELD_VALUE}</li>*/
/* 															<!-- ENDIF -->*/
/* 														<!-- ENDIF -->*/
/* 													<!-- END custom_fields -->*/
/* 													<!-- EVENT memberlist_view_contact_custom_fields_after -->*/
/* 													<!-- IF S_PROFILE_FIELD1 -->*/
/* 														<li class="divider"></li>*/
/* 														<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->*/
/* 														<li>{PROFILE_FIELD1_VALUE}</li>*/
/* 													<!-- ENDIF -->*/
/* 												</ul>*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="col-md-12">*/
/* 						<div class="panel panel-default">*/
/* 							<div class="panel-heading">*/
/* 								<h3 class="panel-title">{L_USER_FORUM}</h3>*/
/* 							</div>*/
/* 							<div class="panel-body">*/
/* 								<div class="form-horizontal">*/
/* 									<!-- EVENT memberlist_view_user_statistics_before -->*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-md-3">{L_JOINED}{L_COLON}</label>*/
/* 										<div class="col-md-9">*/
/* 											<p class="form-control-static">{JOINED}</p>*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-md-3">{L_LAST_ACTIVE}{L_COLON}</label>*/
/* 										<div class="col-md-9">*/
/* 											<p class="form-control-static">{LAST_ACTIVE}</p>*/
/* 										</div>*/
/* 									</div>*/
/* 									<!-- IF S_WARNINGS -->*/
/* 										<div class="form-group">*/
/* 											<label class="control-label col-md-3">{L_WARNINGS}{L_COLON}</label>*/
/* 											<div class="col-md-9">*/
/* 												<a class="btn btn-default btn-sm disabled">{WARNINGS}</a>*/
/* 												<!-- IF U_NOTES or U_WARN -->*/
/* 													<div class="btn-group">*/
/* 														<!-- IF U_NOTES -->*/
/* 															<a href="{U_NOTES}" class="btn btn-primary btn-sm">{L_VIEW_NOTES}</a>*/
/* 														<!-- ENDIF -->*/
/* 														<!-- IF U_WARN -->*/
/* 															<a href="{U_WARN}" class="btn btn-danger btn-sm">{L_WARN_USER}</a>*/
/* 														<!-- ENDIF -->*/
/* 													</div>*/
/* 												<!-- ENDIF -->*/
/* 											</div>*/
/* 										</div>*/
/* 									<!-- ENDIF -->*/
/* 									<div class="form-group">*/
/* 										<label class="control-label col-md-3">{L_TOTAL_POSTS}{L_COLON}</label>*/
/* 										<div class="col-md-9">*/
/* 											<a class="btn btn-default btn-sm disabled">{POSTS}</a>*/
/* 											<!-- IF S_DISPLAY_SEARCH -->*/
/* 												<a href="{U_SEARCH_USER}" class="btn btn-primary btn-sm">{L_SEARCH_USER_POSTS}</a>*/
/* 											<!-- ENDIF -->*/
/* 											<!-- IF POSTS_PCT --><span class="help-block">({POSTS_PCT} / {POSTS_DAY})</span><!-- ENDIF -->*/
/* 											<!-- IF POSTS_IN_QUEUE and U_MCP_QUEUE -->*/
/* 												<span class="help-block">(<a href="{U_MCP_QUEUE}">{L_POSTS_IN_QUEUE}</a>)</span>*/
/* 											<!-- ELSEIF POSTS_IN_QUEUE -->*/
/* 												<span class="help-block">({L_POSTS_IN_QUEUE})</span>*/
/* 											<!-- ENDIF -->*/
/* 										</div>*/
/* 									</div>*/
/* 									<!-- IF S_SHOW_ACTIVITY and POSTS -->*/
/* 										<div class="form-group">*/
/* 											<label class="control-label col-md-3">{L_ACTIVE_IN_FORUM}{L_COLON}</label>*/
/* 											<div class="col-md-9">*/
/* 												<!-- IF ACTIVE_FORUM != '' -->*/
/* 													<p class="form-control-static"><a href="{U_ACTIVE_FORUM}">{ACTIVE_FORUM}</a></p>*/
/* 													<span class="help-block">({ACTIVE_FORUM_POSTS} / {ACTIVE_FORUM_PCT})</span>*/
/* 												<!-- ELSE --> - <!-- ENDIF -->*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">*/
/* 											<label class="control-label col-md-3">{L_ACTIVE_IN_TOPIC}{L_COLON}</label>*/
/* 											<div class="col-md-9">*/
/* 												<!-- IF ACTIVE_TOPIC != '' -->*/
/* 													<p class="form-control-static"><a href="{U_ACTIVE_TOPIC}">{ACTIVE_TOPIC}</a></p>*/
/* 													<span class="help-block">({ACTIVE_TOPIC_POSTS} / {ACTIVE_TOPIC_PCT})</span>*/
/* 												<!-- ELSE --> - <!-- ENDIF -->*/
/* 											</div>*/
/* 										</div>*/
/* 									<!-- ENDIF -->*/
/* 									<!-- EVENT memberlist_view_user_statistics_after -->*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<!-- EVENT memberlist_view_contact_after -->*/
/* 				<!-- IF SIGNATURE -->*/
/* 					<div class="panel panel-default">*/
/* 						<div class="panel-heading">*/
/* 							<h3 class="panel-title">{L_SIGNATURE}</h3>*/
/* 						</div>*/
/* 						<div class="panel-body">*/
/* 							{SIGNATURE}*/
/* 						</div>*/
/* 					</div>*/
/* 				<!-- ENDIF -->*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* */
/* <!-- EVENT memberlist_view_content_append -->*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
