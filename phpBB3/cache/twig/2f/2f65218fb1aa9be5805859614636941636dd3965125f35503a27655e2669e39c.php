<?php

/* ucp_pm_viewmessage.html */
class __TwigTemplate_23e165e262c478b2173b576141564021a6494356dcf9c64f3d510d98aab74793 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_pm_viewmessage.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        $location = "ucp_pm_message_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_header.html", "ucp_pm_viewmessage.html", 3)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 4
        echo "
";
        // line 5
        if (((isset($context["S_DISPLAY_HISTORY"]) ? $context["S_DISPLAY_HISTORY"] : null) && ((isset($context["U_VIEW_PREVIOUS_HISTORY"]) ? $context["U_VIEW_PREVIOUS_HISTORY"] : null) || (isset($context["U_VIEW_NEXT_HISTORY"]) ? $context["U_VIEW_NEXT_HISTORY"] : null)))) {
            // line 6
            echo "\t<fieldset class=\"display-options clearfix\">
\t\t";
            // line 7
            if ((isset($context["U_VIEW_PREVIOUS_HISTORY"]) ? $context["U_VIEW_PREVIOUS_HISTORY"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_VIEW_PREVIOUS_HISTORY"]) ? $context["U_VIEW_PREVIOUS_HISTORY"] : null);
                echo "\" class=\"left-box arrow-";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_PREVIOUS_HISTORY");
                echo "</a>";
            }
            // line 8
            echo "\t\t";
            if ((isset($context["U_VIEW_NEXT_HISTORY"]) ? $context["U_VIEW_NEXT_HISTORY"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_VIEW_NEXT_HISTORY"]) ? $context["U_VIEW_NEXT_HISTORY"] : null);
                echo "\" class=\"right-box arrow-";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_NEXT_HISTORY");
                echo "</a>";
            }
            // line 9
            echo "\t</fieldset>
";
        }
        // line 11
        echo "
<div id=\"message\">
\t<div id=\"post-";
        // line 13
        echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
        echo "\" class=\"post pm has-profile";
        if (((isset($context["S_POST_UNAPPROVED"]) ? $context["S_POST_UNAPPROVED"] : null) || (isset($context["S_POST_REPORTED"]) ? $context["S_POST_REPORTED"] : null))) {
            echo " reported";
        }
        if ((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null)) {
            echo " online";
        }
        echo "\">
\t\t<div class=\"panel panel-primary post-body\">
\t\t\t<div class=\"panel-heading clearfix\">
\t\t\t\t<h3 class=\"panel-title pull-left\">";
        // line 16
        echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
        echo "</h3>
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<div class=\"btn-group btn-toolbar-mobile visible-xs-block\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-xs dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"fa fa-cog\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"panel-body no-padding\">
\t\t\t\t<div class=\"row no-margin post-flex\">
\t\t\t\t\t\t<div class=\"col-md-3 col-xs-12 post-info post-info-left\">
\t\t\t\t\t\t<dl id=\"profile";
        // line 30
        echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
        echo "\" class=\"no-margin-xs\">
\t\t\t\t\t\t\t<dt class=\"avatar text-center rounded\">
\t\t\t\t\t\t\t\t";
        // line 32
        // line 33
        echo "\t\t\t\t\t\t\t\t";
        if ((isset($context["AUTHOR_AVATAR"]) ? $context["AUTHOR_AVATAR"] : null)) {
            // line 34
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo (isset($context["U_MESSAGE_AUTHOR"]) ? $context["U_MESSAGE_AUTHOR"] : null);
            echo "\">";
            echo (isset($context["AUTHOR_AVATAR"]) ? $context["AUTHOR_AVATAR"] : null);
            echo "</a><br />
\t\t\t\t\t\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t\t\t\t\t\t<img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/default_avatar.jpg\" alt=\"avatar\">
\t\t\t\t\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t\t\t\t\t";
        // line 39
        echo "\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t<dd class=\"text-center\">
\t\t\t\t\t\t\t\t<strong>";
        // line 41
        echo (isset($context["MESSAGE_AUTHOR_FULL"]) ? $context["MESSAGE_AUTHOR_FULL"] : null);
        echo "</strong>
\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t";
        // line 43
        // line 44
        echo "\t\t\t\t\t\t";
        if (((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null) || (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null))) {
            echo "<dd class=\"profile-rank text-center\">";
            echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
            if (((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null) && (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null))) {
                echo "<br />";
            }
            echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            echo "</dd>";
        }
        // line 45
        echo "\t\t\t\t\t\t";
        // line 46
        echo "\t\t\t\t\t\t</dl>

\t\t\t\t\t\t<dl class=\"hidden-xs\">
\t\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t</dt>

\t\t\t\t\t\t\t<dd>
\t\t\t\t\t\t\t\t<strong>";
        // line 54
        echo $this->env->getExtension('phpbb')->lang("POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</strong> ";
        if (((isset($context["U_AUTHOR_POSTS"]) ? $context["U_AUTHOR_POSTS"] : null) != "")) {
            echo "<a href=\"";
            echo (isset($context["U_AUTHOR_POSTS"]) ? $context["U_AUTHOR_POSTS"] : null);
            echo "\">";
            echo (isset($context["AUTHOR_POSTS"]) ? $context["AUTHOR_POSTS"] : null);
            echo "</a>";
        } else {
            echo (isset($context["AUTHOR_POSTS"]) ? $context["AUTHOR_POSTS"] : null);
        }
        // line 55
        echo "\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t";
        // line 56
        if ((isset($context["AUTHOR_JOINED"]) ? $context["AUTHOR_JOINED"] : null)) {
            echo "<dd class=\"profile-joined\"><strong>";
            echo $this->env->getExtension('phpbb')->lang("JOINED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo (isset($context["AUTHOR_JOINED"]) ? $context["AUTHOR_JOINED"] : null);
            echo "</dd>";
        }
        // line 57
        echo "
\t\t\t\t\t\t\t";
        // line 58
        // line 59
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 60
            echo "\t\t\t\t\t\t\t\t";
            if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 61
                echo "\t\t\t\t\t\t\t\t\t<dd class=\"profile-custom-field profile-";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_IDENT", array());
                echo "\"><strong>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</dd>
\t\t\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "\t\t\t\t\t\t\t";
        // line 65
        echo "
\t\t\t\t\t\t\t";
        // line 66
        // line 67
        echo "\t\t\t\t\t\t\t";
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "contact", array()))) {
            // line 68
            echo "\t\t\t\t\t\t\t\t<dd class=\"profile-contact\">
\t\t\t\t\t\t\t\t\t<strong>";
            // line 69
            echo $this->env->getExtension('phpbb')->lang("CONTACT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong>
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-commenting-o fa-fw icon-lg\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 72
            echo (isset($context["CONTACT_USER"]) ? $context["CONTACT_USER"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "contact", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 77
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["REMAINDER"] = ($this->getAttribute($context["contact"], "S_ROW_COUNT", array()) % 4);
                // line 78
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                $value = (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || ($this->getAttribute($context["contact"], "S_LAST_ROW", array()) && ($this->getAttribute($context["contact"], "S_NUM_ROWS", array()) < 4)));
                $context['definition']->set('S_LAST_CELL', $value);
                // line 79
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 0)) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                if ($this->getAttribute($context["contact"], "U_CONTACT", array())) {
                    echo $this->getAttribute($context["contact"], "U_CONTACT", array());
                } else {
                    echo $this->getAttribute($context["contact"], "U_PROFILE_AUTHOR", array());
                }
                echo "\" title=\"";
                echo $this->getAttribute($context["contact"], "NAME", array());
                echo "\"";
                if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_LAST_CELL", array())) {
                    echo " class=\"last-cell\"";
                }
                if (($this->getAttribute($context["contact"], "ID", array()) == "jabber")) {
                    echo " onclick=\"popup(this.href, 750, 320); return false;\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                // line 83
                echo $this->getAttribute($context["contact"], "ID", array());
                echo "-icon\">";
                echo $this->getAttribute($context["contact"], "NAME", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 85
                if ((((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || $this->getAttribute($context["contact"], "S_LAST_ROW", array()))) {
                    // line 86
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 88
                echo "\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</dd>
\t\t\t\t\t\t\t";
        }
        // line 93
        echo "\t\t\t\t\t\t\t";
        // line 94
        echo "\t\t\t\t\t\t</dl>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-9 col-xs-12 post-content\">
\t\t\t\t\t\t<div class=\"row post-head hidden-xs\">
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t\t\t<p class=\"author\">
\t\t\t\t\t\t\t\t\t<strong>";
        // line 100
        echo $this->env->getExtension('phpbb')->lang("SENT_AT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</strong> ";
        echo (isset($context["SENT_DATE"]) ? $context["SENT_DATE"] : null);
        echo "
\t\t\t\t\t\t\t\t\t<br /><strong>";
        // line 101
        echo $this->env->getExtension('phpbb')->lang("PM_FROM");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</strong> ";
        echo (isset($context["MESSAGE_AUTHOR_FULL"]) ? $context["MESSAGE_AUTHOR_FULL"] : null);
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 102
        if ((isset($context["S_TO_RECIPIENT"]) ? $context["S_TO_RECIPIENT"] : null)) {
            echo "<br /><strong>";
            echo $this->env->getExtension('phpbb')->lang("TO");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                if ($this->getAttribute($context["to_recipient"], "NAME_FULL", array())) {
                    echo $this->getAttribute($context["to_recipient"], "NAME_FULL", array());
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["to_recipient"], "U_VIEW", array());
                    echo "\" style=\"color:";
                    if ($this->getAttribute($context["to_recipient"], "COLOUR", array())) {
                        echo $this->getAttribute($context["to_recipient"], "COLOUR", array());
                    } elseif ($this->getAttribute($context["to_recipient"], "IS_GROUP", array())) {
                        echo "#0000FF";
                    }
                    echo ";\">";
                    echo $this->getAttribute($context["to_recipient"], "NAME", array());
                    echo "</a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 103
        echo "\t\t\t\t\t\t\t\t\t";
        if ((isset($context["S_BCC_RECIPIENT"]) ? $context["S_BCC_RECIPIENT"] : null)) {
            echo "<br /><strong>";
            echo $this->env->getExtension('phpbb')->lang("BCC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bcc_recipient", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                if ($this->getAttribute($context["bcc_recipient"], "NAME_FULL", array())) {
                    echo $this->getAttribute($context["bcc_recipient"], "NAME_FULL", array());
                } else {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["bcc_recipient"], "U_VIEW", array());
                    echo "\" style=\"color:";
                    if ($this->getAttribute($context["bcc_recipient"], "COLOUR", array())) {
                        echo $this->getAttribute($context["bcc_recipient"], "COLOUR", array());
                    } elseif ($this->getAttribute($context["bcc_recipient"], "IS_GROUP", array())) {
                        echo "#0000FF";
                    }
                    echo ";\">";
                    echo $this->getAttribute($context["bcc_recipient"], "NAME", array());
                    echo "</a>";
                }
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 104
        echo "\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-6\">
\t\t\t\t\t\t\t\t";
        // line 107
        $value = ((((isset($context["U_EDIT"]) ? $context["U_EDIT"] : null) || (isset($context["U_DELETE"]) ? $context["U_DELETE"] : null)) || (isset($context["U_REPORT"]) ? $context["U_REPORT"] : null)) || (isset($context["U_QUOTE"]) ? $context["U_QUOTE"] : null));
        $context['definition']->set('SHOW_PM_POST_BUTTONS', $value);
        // line 108
        echo "\t\t\t\t\t\t\t\t";
        // line 109
        echo "\t\t\t\t\t\t\t\t";
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SHOW_PM_POST_BUTTONS", array())) {
            // line 110
            echo "\t\t\t\t\t\t\t\t\t<div class=\"btn-toolbar topic-buttons\" role=\"toolbar\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 112
            // line 113
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((isset($context["U_EDIT"]) ? $context["U_EDIT"] : null)) {
                // line 114
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["U_EDIT"]) ? $context["U_EDIT"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_EDIT_PM");
                echo "\" class=\"btn btn-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-pencil fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 115
                echo $this->env->getExtension('phpbb')->lang("POST_EDIT_PM");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 118
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((isset($context["U_DELETE"]) ? $context["U_DELETE"] : null)) {
                // line 119
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["U_DELETE"]) ? $context["U_DELETE"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("DELETE_MESSAGE");
                echo "\" class=\"btn btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 120
                echo $this->env->getExtension('phpbb')->lang("DELETE_MESSAGE");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 123
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 125
            if ((isset($context["U_REPORT"]) ? $context["U_REPORT"] : null)) {
                // line 126
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["U_REPORT"]) ? $context["U_REPORT"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("REPORT_PM");
                echo "\" class=\"btn btn-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-exclamation fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 127
                echo $this->env->getExtension('phpbb')->lang("REPORT_PM");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 130
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((isset($context["U_QUOTE"]) ? $context["U_QUOTE"] : null)) {
                // line 131
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo (isset($context["U_QUOTE"]) ? $context["U_QUOTE"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_QUOTE_PM");
                echo "\" class=\"btn btn-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 132
                echo $this->env->getExtension('phpbb')->lang("POST_QUOTE_PM");
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 135
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            // line 136
            echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 139
        echo "\t\t\t\t\t\t\t\t";
        // line 140
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"content\">";
        // line 143
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo "</div>

\t\t\t\t\t\t";
        // line 145
        if ((isset($context["S_HAS_ATTACHMENTS"]) ? $context["S_HAS_ATTACHMENTS"] : null)) {
            // line 146
            echo "\t\t\t\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t\t\t\t<dt>
\t\t\t\t\t\t\t\t\t";
            // line 148
            echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
            echo "
\t\t\t\t\t\t\t\t</dt>
\t\t\t\t\t\t\t\t";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachment", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 151
                echo "\t\t\t\t\t\t\t\t\t<dd>";
                echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                echo "</dd>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t";
        }
        // line 155
        echo "
\t\t\t\t\t\t";
        // line 156
        if ((isset($context["S_DISPLAY_NOTICE"]) ? $context["S_DISPLAY_NOTICE"] : null)) {
            // line 157
            echo "\t\t\t\t\t\t\t<div class=\"post-notice error\">";
            echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_NOTICE");
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 159
        echo "
\t\t\t\t\t\t";
        // line 160
        if (((isset($context["EDITED_MESSAGE"]) ? $context["EDITED_MESSAGE"] : null) || (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null))) {
            // line 161
            echo "\t\t\t\t\t\t<div class=\"notice\">";
            echo (isset($context["EDITED_MESSAGE"]) ? $context["EDITED_MESSAGE"] : null);
            echo "
\t\t\t\t\t\t\t";
            // line 162
            if ((isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null)) {
                echo "<br /><strong>";
                echo $this->env->getExtension('phpbb')->lang("REASON");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> <em>";
                echo (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null);
                echo "</em>";
            }
            // line 163
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 165
        echo "
\t\t\t\t\t\t";
        // line 166
        if ((isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null)) {
            // line 167
            echo "\t\t\t\t\t\t\t<div id=\"sig";
            echo (isset($context["MESSAGE_ID"]) ? $context["MESSAGE_ID"] : null);
            echo "\" class=\"signature\">";
            echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 169
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"panel-footer post-footer clearfix\">
\t\t\t\t<div class=\"to-top pull-right\"><a href=\"#content-wrapper\" class=\"top\" title=\"";
        // line 175
        echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
        echo "\"><i class=\"fa fa-chevron-up fq-fw\"></i></a></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        // line 181
        if ((isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null)) {
            // line 182
            echo "<br>

<fieldset class=\"display-options\">
\t";
            // line 185
            if ((isset($context["U_PREVIOUS_PM"]) ? $context["U_PREVIOUS_PM"] : null)) {
                // line 186
                echo "\t\t<a href=\"";
                echo (isset($context["U_PREVIOUS_PM"]) ? $context["U_PREVIOUS_PM"] : null);
                echo "\" class=\"pull-left btn btn-default\">
\t\t\t<i class=\"fa fa-chevron-left fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
                // line 188
                echo $this->env->getExtension('phpbb')->lang("VIEW_PREVIOUS_PM");
                echo "
\t\t</a>
\t";
            }
            // line 191
            echo "
\t";
            // line 192
            if ((isset($context["U_NEXT_PM"]) ? $context["U_NEXT_PM"] : null)) {
                // line 193
                echo "\t\t<a href=\"";
                echo (isset($context["U_NEXT_PM"]) ? $context["U_NEXT_PM"] : null);
                echo "\" class=\" pull-right btn btn-default\">
\t\t\t";
                // line 194
                echo $this->env->getExtension('phpbb')->lang("VIEW_NEXT_PM");
                echo "
\t\t\t<i class=\"fa fa-chevron-right fa-fw\" aria-hidden=\"true\"></i>
\t\t</a>
\t";
            }
            // line 198
            echo "
\t";
            // line 199
            if ((isset($context["S_MARK_OPTIONS"]) ? $context["S_MARK_OPTIONS"] : null)) {
                echo "<label for=\"mark_option\"><select name=\"mark_option\" id=\"mark_option\">";
                echo (isset($context["S_MARK_OPTIONS"]) ? $context["S_MARK_OPTIONS"] : null);
                echo "</select></label>&nbsp;<input class=\"btn btn-success\" type=\"submit\" name=\"submit_mark\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" />";
            }
            // line 200
            echo "\t";
            if (( !(isset($context["S_UNREAD"]) ? $context["S_UNREAD"] : null) &&  !(isset($context["S_SPECIAL_FOLDER"]) ? $context["S_SPECIAL_FOLDER"] : null))) {
                echo "<label for=\"dest_folder\">";
                if ((isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("MOVE_TO_FOLDER");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " ";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("MOVE_MARKED_TO_FOLDER");
                }
                echo " <select name=\"dest_folder\" id=\"dest_folder\">";
                echo (isset($context["S_TO_FOLDER_OPTIONS"]) ? $context["S_TO_FOLDER_OPTIONS"] : null);
                echo "</select></label> <input class=\"btn btn-default\" type=\"submit\" name=\"move_pm\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" />";
            }
            // line 201
            echo "
\t<input type=\"hidden\" name=\"marked_msg_id[]\" value=\"";
            // line 202
            echo (isset($context["MSG_ID"]) ? $context["MSG_ID"] : null);
            echo "\" />
\t<input type=\"hidden\" name=\"cur_folder_id\" value=\"";
            // line 203
            echo (isset($context["CUR_FOLDER_ID"]) ? $context["CUR_FOLDER_ID"] : null);
            echo "\" />
\t<input type=\"hidden\" name=\"p\" value=\"";
            // line 204
            echo (isset($context["MSG_ID"]) ? $context["MSG_ID"] : null);
            echo "\" />
</fieldset>
";
        }
        // line 207
        echo "
";
        // line 208
        $location = "ucp_pm_message_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_pm_message_footer.html", "ucp_pm_viewmessage.html", 208)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 209
        echo "
";
        // line 210
        if ((isset($context["S_DISPLAY_HISTORY"]) ? $context["S_DISPLAY_HISTORY"] : null)) {
            $location = "ucp_pm_history.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_history.html", "ucp_pm_viewmessage.html", 210)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 211
        echo "
";
        // line 212
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_viewmessage.html", 212)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewmessage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  711 => 212,  708 => 211,  694 => 210,  691 => 209,  679 => 208,  676 => 207,  670 => 204,  666 => 203,  662 => 202,  659 => 201,  642 => 200,  634 => 199,  631 => 198,  624 => 194,  619 => 193,  617 => 192,  614 => 191,  608 => 188,  602 => 186,  600 => 185,  595 => 182,  593 => 181,  584 => 175,  576 => 169,  568 => 167,  566 => 166,  563 => 165,  559 => 163,  550 => 162,  545 => 161,  543 => 160,  540 => 159,  534 => 157,  532 => 156,  529 => 155,  525 => 153,  516 => 151,  512 => 150,  507 => 148,  503 => 146,  501 => 145,  496 => 143,  491 => 140,  489 => 139,  484 => 136,  482 => 135,  476 => 132,  469 => 131,  466 => 130,  460 => 127,  453 => 126,  451 => 125,  447 => 123,  441 => 120,  434 => 119,  431 => 118,  425 => 115,  418 => 114,  415 => 113,  414 => 112,  410 => 110,  407 => 109,  405 => 108,  402 => 107,  397 => 104,  366 => 103,  336 => 102,  329 => 101,  322 => 100,  314 => 94,  312 => 93,  306 => 89,  300 => 88,  296 => 86,  294 => 85,  287 => 83,  269 => 82,  265 => 80,  262 => 79,  258 => 78,  255 => 77,  251 => 76,  244 => 72,  237 => 69,  234 => 68,  231 => 67,  230 => 66,  227 => 65,  225 => 64,  219 => 63,  208 => 61,  205 => 60,  200 => 59,  199 => 58,  196 => 57,  187 => 56,  184 => 55,  171 => 54,  161 => 46,  159 => 45,  148 => 44,  147 => 43,  142 => 41,  138 => 39,  136 => 38,  130 => 36,  122 => 34,  119 => 33,  118 => 32,  113 => 30,  96 => 16,  83 => 13,  79 => 11,  75 => 9,  64 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <!-- INCLUDE ucp_pm_message_header.html -->*/
/* */
/* <!-- IF S_DISPLAY_HISTORY and (U_VIEW_PREVIOUS_HISTORY or U_VIEW_NEXT_HISTORY) -->*/
/* 	<fieldset class="display-options clearfix">*/
/* 		<!-- IF U_VIEW_PREVIOUS_HISTORY --><a href="{U_VIEW_PREVIOUS_HISTORY}" class="left-box arrow-{S_CONTENT_FLOW_BEGIN}">{L_VIEW_PREVIOUS_HISTORY}</a><!-- ENDIF -->*/
/* 		<!-- IF U_VIEW_NEXT_HISTORY --><a href="{U_VIEW_NEXT_HISTORY}" class="right-box arrow-{S_CONTENT_FLOW_END}">{L_VIEW_NEXT_HISTORY}</a><!-- ENDIF -->*/
/* 	</fieldset>*/
/* <!-- ENDIF -->*/
/* */
/* <div id="message">*/
/* 	<div id="post-{MESSAGE_ID}" class="post pm has-profile<!-- IF S_POST_UNAPPROVED or S_POST_REPORTED --> reported<!-- ENDIF --><!-- IF S_ONLINE --> online<!-- ENDIF -->">*/
/* 		<div class="panel panel-primary post-body">*/
/* 			<div class="panel-heading clearfix">*/
/* 				<h3 class="panel-title pull-left">{SUBJECT}</h3>*/
/* 				<div class="pull-right">*/
/* 					<div class="btn-group btn-toolbar-mobile visible-xs-block">*/
/* 						<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/* 							<i class="fa fa-cog"></i>*/
/* 						</button>*/
/* 						<ul class="dropdown-menu dropdown-menu-right">*/
/* 						</ul>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="panel-body no-padding">*/
/* 				<div class="row no-margin post-flex">*/
/* 						<div class="col-md-3 col-xs-12 post-info post-info-left">*/
/* 						<dl id="profile{MESSAGE_ID}" class="no-margin-xs">*/
/* 							<dt class="avatar text-center rounded">*/
/* 								<!-- EVENT ucp_pm_viewmessage_avatar_before -->*/
/* 								<!-- IF AUTHOR_AVATAR -->*/
/* 									<a href="{U_MESSAGE_AUTHOR}">{AUTHOR_AVATAR}</a><br />*/
/* 								<!-- ELSE -->*/
/* 									<img src="{T_THEME_PATH}/images/default_avatar.jpg" alt="avatar">*/
/* 								<!-- ENDIF -->*/
/* 								<!-- EVENT ucp_pm_viewmessage_avatar_after -->*/
/* 							</dt>*/
/* 							<dd class="text-center">*/
/* 								<strong>{MESSAGE_AUTHOR_FULL}</strong>*/
/* 							</dd>*/
/* 						<!-- EVENT ucp_pm_viewmessage_rank_before -->*/
/* 						<!-- IF RANK_TITLE or RANK_IMG --><dd class="profile-rank text-center">{RANK_TITLE}<!-- IF RANK_TITLE and RANK_IMG --><br /><!-- ENDIF -->{RANK_IMG}</dd><!-- ENDIF -->*/
/* 						<!-- EVENT ucp_pm_viewmessage_rank_after -->*/
/* 						</dl>*/
/* */
/* 						<dl class="hidden-xs">*/
/* 							<dt>*/
/* 								<hr>*/
/* 							</dt>*/
/* */
/* 							<dd>*/
/* 								<strong>{L_POSTS}{L_COLON}</strong> <!-- IF U_AUTHOR_POSTS != '' --><a href="{U_AUTHOR_POSTS}">{AUTHOR_POSTS}</a><!-- ELSE -->{AUTHOR_POSTS}<!-- ENDIF -->*/
/* 							</dd>*/
/* 							<!-- IF AUTHOR_JOINED --><dd class="profile-joined"><strong>{L_JOINED}{L_COLON}</strong> {AUTHOR_JOINED}</dd><!-- ENDIF -->*/
/* */
/* 							<!-- EVENT ucp_pm_viewmessage_custom_fields_before -->*/
/* 							<!-- BEGIN custom_fields -->*/
/* 								<!-- IF not custom_fields.S_PROFILE_CONTACT -->*/
/* 									<dd class="profile-custom-field profile-{custom_fields.PROFILE_FIELD_IDENT}"><strong>{custom_fields.PROFILE_FIELD_NAME}{L_COLON}</strong> {custom_fields.PROFILE_FIELD_VALUE}</dd>*/
/* 								<!-- ENDIF -->*/
/* 							<!-- END custom_fields -->*/
/* 							<!-- EVENT ucp_pm_viewmessage_custom_fields_after -->*/
/* */
/* 							<!-- EVENT ucp_pm_viewmessage_contact_fields_before -->*/
/* 							<!-- IF .contact -->*/
/* 								<dd class="profile-contact">*/
/* 									<strong>{L_CONTACT}{L_COLON}</strong>*/
/* 									<div class="btn-group">*/
/* 										<button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/* 											<i class="fa fa-commenting-o fa-fw icon-lg" aria-hidden="true"></i><span class="sr-only">{CONTACT_USER}</span>*/
/* 											<span class="caret"></span>*/
/* 										</button>*/
/* 										<ul class="dropdown-menu" role="menu">*/
/* 											<!-- BEGIN contact -->*/
/* 												{% set REMAINDER = contact.S_ROW_COUNT % 4 %}*/
/* 												<!-- DEFINE $S_LAST_CELL = ((REMAINDER eq 3) or (contact.S_LAST_ROW and contact.S_NUM_ROWS < 4)) -->*/
/* 												<!-- IF REMAINDER eq 0 -->*/
/* 													<li>*/
/* 												<!-- ENDIF -->*/
/* 													<a href="<!-- IF contact.U_CONTACT -->{contact.U_CONTACT}<!-- ELSE -->{contact.U_PROFILE_AUTHOR}<!-- ENDIF -->" title="{contact.NAME}"<!-- IF $S_LAST_CELL --> class="last-cell"<!-- ENDIF --><!-- IF contact.ID eq 'jabber' --> onclick="popup(this.href, 750, 320); return false;"<!-- ENDIF -->>*/
/* 														<span class="contact-icon {contact.ID}-icon">{contact.NAME}</span>*/
/* 													</a>*/
/* 												<!-- IF REMAINDER eq 3 or contact.S_LAST_ROW -->*/
/* 													</li>*/
/* 												<!-- ENDIF -->*/
/* 											<!-- END contact -->*/
/* 										</ul>*/
/* 									</div>*/
/* 								</dd>*/
/* 							<!-- ENDIF -->*/
/* 							<!-- EVENT ucp_pm_viewmessage_contact_fields_after -->*/
/* 						</dl>*/
/* 					</div>*/
/* 					<div class="col-md-9 col-xs-12 post-content">*/
/* 						<div class="row post-head hidden-xs">*/
/* 							<div class="col-md-6 col-xs-6">*/
/* 								<p class="author">*/
/* 									<strong>{L_SENT_AT}{L_COLON}</strong> {SENT_DATE}*/
/* 									<br /><strong>{L_PM_FROM}{L_COLON}</strong> {MESSAGE_AUTHOR_FULL}*/
/* 									<!-- IF S_TO_RECIPIENT --><br /><strong>{L_TO}{L_COLON}</strong> <!-- BEGIN to_recipient --><!-- IF to_recipient.NAME_FULL -->{to_recipient.NAME_FULL}<!-- ELSE --><a href="{to_recipient.U_VIEW}" style="color:<!-- IF to_recipient.COLOUR -->{to_recipient.COLOUR}<!-- ELSEIF to_recipient.IS_GROUP -->#0000FF<!-- ENDIF -->;">{to_recipient.NAME}</a><!-- ENDIF -->&nbsp;<!-- END to_recipient --><!-- ENDIF -->*/
/* 									<!-- IF S_BCC_RECIPIENT --><br /><strong>{L_BCC}{L_COLON}</strong> <!-- BEGIN bcc_recipient --><!-- IF bcc_recipient.NAME_FULL -->{bcc_recipient.NAME_FULL}<!-- ELSE --><a href="{bcc_recipient.U_VIEW}" style="color:<!-- IF bcc_recipient.COLOUR -->{bcc_recipient.COLOUR}<!-- ELSEIF bcc_recipient.IS_GROUP -->#0000FF<!-- ENDIF -->;">{bcc_recipient.NAME}</a><!-- ENDIF -->&nbsp;<!-- END bcc_recipient --><!-- ENDIF -->*/
/* 								</p>*/
/* 							</div>*/
/* 							<div class="col-md-6 col-xs-6">*/
/* 								<!-- DEFINE $SHOW_PM_POST_BUTTONS = (U_EDIT or U_DELETE or U_REPORT or U_QUOTE) -->*/
/* 								<!-- EVENT ucp_pm_viewmessage_post_buttons_list_before -->*/
/* 								<!-- IF $SHOW_PM_POST_BUTTONS -->*/
/* 									<div class="btn-toolbar topic-buttons" role="toolbar">*/
/* 										<div class="btn-group btn-group-sm">*/
/* 											<!-- EVENT ucp_pm_viewmessage_post_buttons_before -->*/
/* 											<!-- IF U_EDIT -->*/
/* 													<a href="{U_EDIT}" title="{L_POST_EDIT_PM}" class="btn btn-warning">*/
/* 														<i class="fa fa-pencil fa-fw" aria-hidden="true"></i><span class="sr-only">{L_POST_EDIT_PM}</span>*/
/* 													</a>*/
/* 											<!-- ENDIF -->*/
/* 											<!-- IF U_DELETE -->*/
/* 													<a href="{U_DELETE}" title="{L_DELETE_MESSAGE}" class="btn btn-danger">*/
/* 														<i class="fa fa-times fa-fw" aria-hidden="true"></i><span class="sr-only">{L_DELETE_MESSAGE}</span>*/
/* 													</a>*/
/* 											<!-- ENDIF -->*/
/* 										</div>*/
/* 										<div class="btn-group btn-group-sm">*/
/* 											<!-- IF U_REPORT -->*/
/* 												<a href="{U_REPORT}" title="{L_REPORT_PM}" class="btn btn-warning">*/
/* 													<i class="fa fa-exclamation fa-fw" aria-hidden="true"></i><span class="sr-only">{L_REPORT_PM}</span>*/
/* 												</a>*/
/* 											<!-- ENDIF -->*/
/* 											<!-- IF U_QUOTE -->*/
/* 												<a href="{U_QUOTE}" title="{L_POST_QUOTE_PM}" class="btn btn-success">*/
/* 													<i class="fa fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">{L_POST_QUOTE_PM}</span>*/
/* 												</a>*/
/* 											<!-- ENDIF -->*/
/* 											<!-- EVENT ucp_pm_viewmessage_post_buttons_after -->*/
/* 										</div>*/
/* 									</div>*/
/* 								<!-- ENDIF -->*/
/* 								<!-- EVENT ucp_pm_viewmessage_post_buttons_list_after -->*/
/* 							</div>*/
/* 						</div>*/
/* */
/* 						<div class="content">{MESSAGE}</div>*/
/* */
/* 						<!-- IF S_HAS_ATTACHMENTS -->*/
/* 							<dl class="attachbox">*/
/* 								<dt>*/
/* 									{L_ATTACHMENTS}*/
/* 								</dt>*/
/* 								<!-- BEGIN attachment -->*/
/* 									<dd>{attachment.DISPLAY_ATTACHMENT}</dd>*/
/* 								<!-- END attachment -->*/
/* 							</dl>*/
/* 						<!-- ENDIF -->*/
/* */
/* 						<!-- IF S_DISPLAY_NOTICE -->*/
/* 							<div class="post-notice error">{L_DOWNLOAD_NOTICE}</div>*/
/* 						<!-- ENDIF -->*/
/* */
/* 						<!-- IF EDITED_MESSAGE or EDIT_REASON -->*/
/* 						<div class="notice">{EDITED_MESSAGE}*/
/* 							<!-- IF EDIT_REASON --><br /><strong>{L_REASON}{L_COLON}</strong> <em>{EDIT_REASON}</em><!-- ENDIF -->*/
/* 						</div>*/
/* 						<!-- ENDIF -->*/
/* */
/* 						<!-- IF SIGNATURE -->*/
/* 							<div id="sig{MESSAGE_ID}" class="signature">{SIGNATURE}</div>*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* */
/* 			<div class="panel-footer post-footer clearfix">*/
/* 				<div class="to-top pull-right"><a href="#content-wrapper" class="top" title="{L_BACK_TO_TOP}"><i class="fa fa-chevron-up fq-fw"></i></a></div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF S_VIEW_MESSAGE -->*/
/* <br>*/
/* */
/* <fieldset class="display-options">*/
/* 	<!-- IF U_PREVIOUS_PM -->*/
/* 		<a href="{U_PREVIOUS_PM}" class="pull-left btn btn-default">*/
/* 			<i class="fa fa-chevron-left fa-fw" aria-hidden="true"></i>*/
/* 			{L_VIEW_PREVIOUS_PM}*/
/* 		</a>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF U_NEXT_PM -->*/
/* 		<a href="{U_NEXT_PM}" class=" pull-right btn btn-default">*/
/* 			{L_VIEW_NEXT_PM}*/
/* 			<i class="fa fa-chevron-right fa-fw" aria-hidden="true"></i>*/
/* 		</a>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_MARK_OPTIONS --><label for="mark_option"><select name="mark_option" id="mark_option">{S_MARK_OPTIONS}</select></label>&nbsp;<input class="btn btn-success" type="submit" name="submit_mark" value="{L_GO}" /><!-- ENDIF -->*/
/* 	<!-- IF not S_UNREAD and not S_SPECIAL_FOLDER --><label for="dest_folder"><!-- IF S_VIEW_MESSAGE -->{L_MOVE_TO_FOLDER}{L_COLON} <!-- ELSE -->{L_MOVE_MARKED_TO_FOLDER}<!-- ENDIF --> <select name="dest_folder" id="dest_folder">{S_TO_FOLDER_OPTIONS}</select></label> <input class="btn btn-default" type="submit" name="move_pm" value="{L_GO}" /><!-- ENDIF -->*/
/* */
/* 	<input type="hidden" name="marked_msg_id[]" value="{MSG_ID}" />*/
/* 	<input type="hidden" name="cur_folder_id" value="{CUR_FOLDER_ID}" />*/
/* 	<input type="hidden" name="p" value="{MSG_ID}" />*/
/* </fieldset>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE ucp_pm_message_footer.html -->*/
/* */
/* <!-- IF S_DISPLAY_HISTORY --><!-- INCLUDE ucp_pm_history.html --><!-- ENDIF -->*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
