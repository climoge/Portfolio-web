<?php

/* posting_editor.html */
class __TwigTemplate_49c3439c29b715050f3b8b7943d74241407d6c3619ae9340161b103f31271542 extends Twig_Template
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
        echo "<fieldset>
\t";
        // line 2
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"alert alert-danger\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 3
        echo "\t<div class=\"form-horizontal\">
\t\t";
        // line 4
        if (((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null) || (isset($context["S_SHOW_PM_ICONS"]) ? $context["S_SHOW_PM_ICONS"] : null))) {
            // line 5
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"icon\" class=\"col-md-2 control-label\">";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("ICON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t<div class=\"btn-radio-group btn-group\">
\t\t\t\t\t\t<label class=\"btn btn-sm btn-default btn-radio\" for=\"icon\">
\t\t\t\t\t\t\t<input type=\"radio\" class=\"chradio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\" />
\t\t\t\t\t\t\t";
            // line 11
            if ((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_ICON");
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_PM_ICON");
            }
            // line 12
            echo "\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_icon", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                // line 14
                echo "\t\t\t\t\t\t\t<label class=\"btn btn-default btn-sm btn-radio\" for=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"chradio\" name=\"icon\" id=\"icon-";
                // line 15
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" ";
                echo $this->getAttribute($context["topic_icon"], "S_ICON_CHECKED", array());
                echo " tabindex=\"1\" />
\t\t\t\t\t\t\t\t<img src=\"";
                // line 16
                echo $this->getAttribute($context["topic_icon"], "ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_NAME", array());
                echo "\" title=\"\" />
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 23
        echo "\t\t";
        if (( !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) && (isset($context["S_DISPLAY_USERNAME"]) ? $context["S_DISPLAY_USERNAME"] : null))) {
            // line 24
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username\" class=\"col-md-2 control-label\">";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
            // line 27
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 31
        echo "\t\t";
        // line 32
        echo "\t\t";
        if ((((isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null) || (isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) || (isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null))) {
            // line 33
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"subject\" class=\"col-md-2 control-label\">";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" size=\"45\" maxlength=\"";
            // line 36
            if ((isset($context["S_NEW_MESSAGE"]) ? $context["S_NEW_MESSAGE"] : null)) {
                echo "60";
            } else {
                echo "64";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
            echo (isset($context["DRAFT_SUBJECT"]) ? $context["DRAFT_SUBJECT"] : null);
            echo "\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 39
            if (((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null) && (isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null))) {
                // line 40
                echo "\t\t\t\t";
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 41
                echo "\t\t\t\t";
                $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "posting_editor.html", 41)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 42
                echo "\t\t\t";
            }
            // line 43
            echo "\t\t";
        }
        // line 44
        echo "\t\t";
        // line 45
        echo "\t\t<div class=\"form-group\">
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<div class=\"panel panel-primary\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t";
        // line 49
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "posting_editor.html", 49)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 50
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body no-padding\">
\t\t\t\t\t\t";
        // line 52
        // line 53
        echo "\t\t\t\t\t\t<div id=\"message-box\">
\t\t\t\t\t\t\t<textarea ";
        // line 54
        if ((((isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null) &&  !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) &&  !(isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null))) {
            echo "name=\"signature\" id=\"signature\" style=\"height: 9em;\"";
        } else {
            echo " name=\"message\" id=\"message\"";
        }
        echo " rows=\"15\" cols=\"76\" tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" class=\"form-control no-auto-resize\">";
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo (isset($context["DRAFT_MESSAGE"]) ? $context["DRAFT_MESSAGE"] : null);
        echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
        echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 56
        // line 57
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\" id=\"smiley-box\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 62
        // line 63
        echo "\t\t\t\t\t";
        if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
            // line 64
            echo "\t\t\t\t\t\t<div class=\"col-sm-6 col-md-12\">
\t\t\t\t\t\t\t";
            // line 65
            if (((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array())))) {
                // line 66
                echo "\t\t\t\t\t\t\t\t<strong>";
                echo $this->env->getExtension('phpbb')->lang("SMILIES");
                echo "</strong><br/>
\t\t\t\t\t\t\t\t";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
                    echo $this->getAttribute($context["smiley"], "A_SMILEY_CODE", array());
                    echo "', true); return false;\"><img src=\"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_IMG", array());
                    echo "\" width=\"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_WIDTH", array());
                    echo "\" height=\"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_HEIGHT", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_CODE", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["smiley"], "SMILEY_DESC", array());
                    echo "\" /></a>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t\t";
            if (((isset($context["S_SHOW_SMILEY_LINK"]) ? $context["S_SHOW_SMILEY_LINK"] : null) && (isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null))) {
                // line 72
                echo "\t\t\t\t\t\t\t\t<br /><a href=\"";
                echo (isset($context["U_MORE_SMILIES"]) ? $context["U_MORE_SMILIES"] : null);
                echo "\" onclick=\"popup(this.href, 300, 350, '_phpbbsmilies'); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("MORE_SMILIES");
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 74
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t";
        // line 77
        echo "\t\t\t\t\t<div class=\"col-sm-6 col-md-12\">
\t\t\t\t\t\t";
        // line 78
        // line 79
        echo "\t\t\t\t\t\t";
        if ((isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null)) {
            // line 80
            echo "\t\t\t\t\t\t\t<div class=\"visible-lg\">";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()))) {
                echo "<hr />";
            }
            echo "</div>
\t\t\t\t\t\t\t";
            // line 81
            echo (isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null);
            echo "<br />
\t\t\t\t\t\t\t";
            // line 82
            if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
                // line 83
                echo "\t\t\t\t\t\t\t\t";
                echo (isset($context["IMG_STATUS"]) ? $context["IMG_STATUS"] : null);
                echo "<br />
\t\t\t\t\t\t\t\t";
                // line 84
                echo (isset($context["FLASH_STATUS"]) ? $context["FLASH_STATUS"] : null);
                echo "<br />
\t\t\t\t\t\t\t\t";
                // line 85
                echo (isset($context["URL_STATUS"]) ? $context["URL_STATUS"] : null);
                echo "<br />
\t\t\t\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t\t\t\t";
            echo (isset($context["SMILIES_STATUS"]) ? $context["SMILIES_STATUS"] : null);
            echo "
\t\t\t\t\t\t";
        }
        // line 89
        echo "\t\t\t\t\t\t";
        if (((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null) || (isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null))) {
            // line 90
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
                echo "<hr />";
            }
            // line 91
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
                echo "<a href=\"";
                echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
                echo "\" class=\"btn btn-warning\">";
                echo $this->env->getExtension('phpbb')->lang("BACK_TO_DRAFTS");
                echo "</a>";
            }
            // line 92
            echo "\t\t\t\t\t\t\t";
            if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
                echo "<a href=\"#review\" class=\"btn btn-primary\">";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
                echo "</a>";
            }
            // line 93
            echo "\t\t\t\t\t\t";
        }
        // line 94
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 95
        // line 96
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</fieldset>
";
        // line 101
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "EXTRA_POSTING_OPTIONS", array()) == 1)) {
            // line 102
            echo "\t";
            if (( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null) && ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array()) == 1))) {
                // line 103
                echo "\t\t<div id=\"submit\">
\t\t\t<fieldset class=\"submit-buttons btn-post\">
\t\t\t\t";
                // line 105
                echo (isset($context["S_HIDDEN_ADDRESS_FIELD"]) ? $context["S_HIDDEN_ADDRESS_FIELD"] : null);
                echo "
\t\t\t\t";
                // line 106
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t\t";
                // line 107
                // line 108
                echo "\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t";
                // line 109
                if ((isset($context["S_HAS_DRAFTS"]) ? $context["S_HAS_DRAFTS"] : null)) {
                    echo "<input type=\"submit\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                    echo "\" class=\"btn btn-warning\" onclick=\"load_draft = true;\" />";
                }
                // line 110
                echo "\t\t\t\t\t";
                if ((isset($context["S_SAVE_ALLOWED"]) ? $context["S_SAVE_ALLOWED"] : null)) {
                    echo "<input type=\"submit\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("SAVE_DRAFT");
                    echo "\" class=\"btn btn-warning\" />";
                }
                // line 111
                echo "\t\t\t\t</div>
\t\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"preview\" value=\"";
                // line 112
                echo $this->env->getExtension('phpbb')->lang("PREVIEW");
                echo "\" class=\"btn btn-primary\"";
                if ( !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " />
\t\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                // line 113
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" class=\"btn btn-success default-submit-action\" />
\t\t\t</fieldset>
\t\t</div>
\t";
            }
            // line 117
            echo "\t<div id=\"opt_tabs\">
\t\t";
            // line 118
            if (( !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) && ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array()) == 1))) {
                // line 119
                echo "\t\t\t<ul class=\"nav nav-tabs\" role=\"tablist\">
\t\t\t\t<li class=\"active\" role=\"presentation\"><a href=\"#options-tab\" aria-controls=\"options-tab\" data-toggle=\"tab\">";
                // line 120
                echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                echo "</a></li>
\t\t\t\t";
                // line 121
                if ((isset($context["S_SHOW_ATTACH_BOX"]) ? $context["S_SHOW_ATTACH_BOX"] : null)) {
                    echo "<li role=\"presentation\"><a href=\"#attach-tab\" aria-controls=\"attach-tab\" data-toggle=\"tab\">";
                    echo $this->env->getExtension('phpbb')->lang("ADD_ATTACHMENT");
                    echo "</a></li>";
                }
                // line 122
                echo "\t\t\t\t";
                if (((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null) || (isset($context["S_POLL_DELETE"]) ? $context["S_POLL_DELETE"] : null))) {
                    echo "<li role=\"presentation\"><a href=\"#poll-tab\" aria-controls=\"poll-tab\" data-toggle=\"tab\">";
                    echo $this->env->getExtension('phpbb')->lang("ADD_POLL");
                    echo "</a></li>";
                }
                // line 123
                echo "\t\t\t\t";
                // line 124
                echo "\t\t\t</ul>
\t\t";
            }
            // line 126
            echo "\t\t";
            if (( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array()) == 1)) {
                // line 127
                echo "\t\t\t<div class=\"tab-content well post-tabs\">
\t\t\t\t";
                // line 128
                $location = "posting_option_body.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("posting_option_body.html", "posting_editor.html", 128)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 129
                echo "\t\t\t\t";
                if ((isset($context["S_SHOW_ATTACH_BOX"]) ? $context["S_SHOW_ATTACH_BOX"] : null)) {
                    $location = "posting_attach_body.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("posting_attach_body.html", "posting_editor.html", 129)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                }
                // line 130
                echo "\t\t\t\t";
                if (((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null) || (isset($context["S_POLL_DELETE"]) ? $context["S_POLL_DELETE"] : null))) {
                    $location = "posting_poll_body.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("posting_poll_body.html", "posting_editor.html", 130)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                }
                // line 131
                echo "\t\t\t</div>
\t\t";
            }
            // line 133
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 133,  478 => 131,  463 => 130,  448 => 129,  436 => 128,  433 => 127,  430 => 126,  426 => 124,  424 => 123,  417 => 122,  411 => 121,  407 => 120,  404 => 119,  402 => 118,  399 => 117,  392 => 113,  384 => 112,  381 => 111,  374 => 110,  368 => 109,  365 => 108,  364 => 107,  360 => 106,  356 => 105,  352 => 103,  349 => 102,  347 => 101,  340 => 96,  339 => 95,  336 => 94,  333 => 93,  326 => 92,  317 => 91,  312 => 90,  309 => 89,  303 => 87,  298 => 85,  294 => 84,  289 => 83,  287 => 82,  283 => 81,  276 => 80,  273 => 79,  272 => 78,  269 => 77,  267 => 76,  263 => 74,  255 => 72,  252 => 71,  249 => 70,  230 => 68,  226 => 67,  221 => 66,  219 => 65,  216 => 64,  213 => 63,  212 => 62,  205 => 57,  204 => 56,  191 => 54,  188 => 53,  187 => 52,  183 => 50,  171 => 49,  165 => 45,  163 => 44,  160 => 43,  157 => 42,  144 => 41,  140 => 40,  138 => 39,  125 => 36,  119 => 34,  116 => 33,  113 => 32,  111 => 31,  104 => 27,  98 => 25,  95 => 24,  92 => 23,  86 => 19,  71 => 16,  63 => 15,  58 => 14,  54 => 13,  51 => 12,  45 => 11,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <fieldset>*/
/* 	<!-- IF ERROR --><p class="alert alert-danger">{ERROR}</p><!-- ENDIF -->*/
/* 	<div class="form-horizontal">*/
/* 		<!-- IF S_SHOW_TOPIC_ICONS or S_SHOW_PM_ICONS -->*/
/* 			<div class="form-group">*/
/* 				<label for="icon" class="col-md-2 control-label">{L_ICON}{L_COLON}</label>*/
/* 				<div class="col-md-10">*/
/* 					<div class="btn-radio-group btn-group">*/
/* 						<label class="btn btn-sm btn-default btn-radio" for="icon">*/
/* 							<input type="radio" class="chradio" name="icon" id="icon" value="0" checked="checked" tabindex="1" />*/
/* 							<!-- IF S_SHOW_TOPIC_ICONS -->{L_NO_TOPIC_ICON}<!-- ELSE -->{L_NO_PM_ICON}<!-- ENDIF -->*/
/* 						</label>*/
/* 						<!-- BEGIN topic_icon -->*/
/* 							<label class="btn btn-default btn-sm btn-radio" for="icon-{topic_icon.ICON_ID}">*/
/* 								<input type="radio" class="chradio" name="icon" id="icon-{topic_icon.ICON_ID}" value="{topic_icon.ICON_ID}" {topic_icon.S_ICON_CHECKED} tabindex="1" />*/
/* 								<img src="{topic_icon.ICON_IMG}" width="{topic_icon.ICON_WIDTH}" height="{topic_icon.ICON_HEIGHT}" alt="{topic_icon.ICON_NAME}" title="" />*/
/* 							</label>*/
/* 						<!-- END topic_icon -->*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF not S_PRIVMSGS and S_DISPLAY_USERNAME -->*/
/* 			<div class="form-group">*/
/* 				<label for="username" class="col-md-2 control-label">{L_USERNAME}{L_COLON}</label>*/
/* 				<div class="col-md-7">*/
/* 					<input type="text" tabindex="1" name="username" id="username" size="25" value="{USERNAME}" class="form-control" />*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT posting_editor_subject_before -->*/
/* 		<!-- IF S_POST_ACTION or S_PRIVMSGS or S_EDIT_DRAFT -->*/
/* 			<div class="form-group">*/
/* 				<label for="subject" class="col-md-2 control-label">{L_SUBJECT}{L_COLON}</label>*/
/* 				<div class="col-md-7">*/
/* 					<input type="text" class="form-control" name="subject" id="subject" size="45" maxlength="<!-- IF S_NEW_MESSAGE -->60<!-- ELSE -->64<!-- ENDIF -->" tabindex="2" value="{SUBJECT}{DRAFT_SUBJECT}" />*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- IF CAPTCHA_TEMPLATE and S_CONFIRM_CODE -->*/
/* 				<!-- DEFINE $CAPTCHA_TAB_INDEX = 3 -->*/
/* 				<!-- INCLUDE {CAPTCHA_TEMPLATE} -->*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT posting_editor_subject_after -->*/
/* 		<div class="form-group">*/
/* 			<div class="col-md-9">*/
/* 				<div class="panel panel-primary">*/
/* 					<div class="panel-heading">*/
/* 						<!-- INCLUDE posting_buttons.html -->*/
/* 					</div>*/
/* 					<div class="panel-body no-padding">*/
/* 						<!-- EVENT posting_editor_message_before -->*/
/* 						<div id="message-box">*/
/* 							<textarea <!-- IF S_UCP_ACTION and not S_PRIVMSGS and not S_EDIT_DRAFT -->name="signature" id="signature" style="height: 9em;"<!-- ELSE --> name="message" id="message"<!-- ENDIF --> rows="15" cols="76" tabindex="4" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);" onfocus="initInsertions();" class="form-control no-auto-resize">{MESSAGE}{DRAFT_MESSAGE}{SIGNATURE}</textarea>*/
/* 						</div>*/
/* 						<!-- EVENT posting_editor_message_after -->*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="col-md-3" id="smiley-box">*/
/* 				<div class="row">*/
/* 					<!-- EVENT posting_editor_smilies_before -->*/
/* 					<!-- IF S_SMILIES_ALLOWED -->*/
/* 						<div class="col-sm-6 col-md-12">*/
/* 							<!-- IF S_SMILIES_ALLOWED and .smiley -->*/
/* 								<strong>{L_SMILIES}</strong><br/>*/
/* 								<!-- BEGIN smiley -->*/
/* 									<a href="#" onclick="insert_text('{smiley.A_SMILEY_CODE}', true); return false;"><img src="{smiley.SMILEY_IMG}" width="{smiley.SMILEY_WIDTH}" height="{smiley.SMILEY_HEIGHT}" alt="{smiley.SMILEY_CODE}" title="{smiley.SMILEY_DESC}" /></a>*/
/* 								<!-- END smiley -->*/
/* 							<!-- ENDIF -->*/
/* 							<!-- IF S_SHOW_SMILEY_LINK and S_SMILIES_ALLOWED -->*/
/* 								<br /><a href="{U_MORE_SMILIES}" onclick="popup(this.href, 300, 350, '_phpbbsmilies'); return false;">{L_MORE_SMILIES}</a>*/
/* 							<!-- ENDIF -->*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- EVENT posting_editor_smilies_after -->*/
/* 					<div class="col-sm-6 col-md-12">*/
/* 						<!-- EVENT posting_editor_options_prepend -->*/
/* 						<!-- IF BBCODE_STATUS -->*/
/* 							<div class="visible-lg"><!-- IF .smiley --><hr /><!-- ENDIF --></div>*/
/* 							{BBCODE_STATUS}<br />*/
/* 							<!-- IF S_BBCODE_ALLOWED -->*/
/* 								{IMG_STATUS}<br />*/
/* 								{FLASH_STATUS}<br />*/
/* 								{URL_STATUS}<br />*/
/* 							<!-- ENDIF -->*/
/* 							{SMILIES_STATUS}*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF S_EDIT_DRAFT || S_DISPLAY_REVIEW -->*/
/* 							<!-- IF S_DISPLAY_REVIEW --><hr /><!-- ENDIF -->*/
/* 							<!-- IF S_EDIT_DRAFT --><a href="{S_UCP_ACTION}" class="btn btn-warning">{L_BACK_TO_DRAFTS}</a><!-- ENDIF -->*/
/* 							<!-- IF S_DISPLAY_REVIEW --><a href="#review" class="btn btn-primary">{L_TOPIC_REVIEW}</a><!-- ENDIF -->*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 					<!-- EVENT posting_editor_bbcode_status_after -->*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </fieldset>*/
/* <!-- IF $EXTRA_POSTING_OPTIONS eq 1 -->*/
/* 	<!-- IF not S_SHOW_DRAFTS and not $SIG_EDIT eq 1 -->*/
/* 		<div id="submit">*/
/* 			<fieldset class="submit-buttons btn-post">*/
/* 				{S_HIDDEN_ADDRESS_FIELD}*/
/* 				{S_HIDDEN_FIELDS}*/
/* 				<!-- EVENT posting_editor_submit_buttons -->*/
/* 				<div class="btn-group">*/
/* 					<!-- IF S_HAS_DRAFTS --><input type="submit" accesskey="d" tabindex="8" name="load" value="{L_LOAD_DRAFT}" class="btn btn-warning" onclick="load_draft = true;" /><!-- ENDIF -->*/
/* 					<!-- IF S_SAVE_ALLOWED --><input type="submit" accesskey="k" tabindex="7" name="save" value="{L_SAVE_DRAFT}" class="btn btn-warning" /><!-- ENDIF -->*/
/* 				</div>*/
/* 				<input type="submit" tabindex="5" name="preview" value="{L_PREVIEW}" class="btn btn-primary"<!-- IF not S_PRIVMSGS --> onclick="document.getElementById('postform').action += '#preview';"<!-- ENDIF --> />*/
/* 				<input type="submit" accesskey="s" tabindex="6" name="post" value="{L_SUBMIT}" class="btn btn-success default-submit-action" />*/
/* 			</fieldset>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* 	<div id="opt_tabs">*/
/* 		<!-- IF not S_PRIVMSGS and not $SIG_EDIT eq 1 -->*/
/* 			<ul class="nav nav-tabs" role="tablist">*/
/* 				<li class="active" role="presentation"><a href="#options-tab" aria-controls="options-tab" data-toggle="tab">{L_OPTIONS}</a></li>*/
/* 				<!-- IF S_SHOW_ATTACH_BOX --><li role="presentation"><a href="#attach-tab" aria-controls="attach-tab" data-toggle="tab">{L_ADD_ATTACHMENT}</a></li><!-- ENDIF -->*/
/* 				<!-- IF S_SHOW_POLL_BOX || S_POLL_DELETE --><li role="presentation"><a href="#poll-tab" aria-controls="poll-tab" data-toggle="tab">{L_ADD_POLL}</a></li><!-- ENDIF -->*/
/* 				<!-- EVENT posting_editor_add_panel_tab -->*/
/* 			</ul>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF not $SIG_EDIT eq 1 -->*/
/* 			<div class="tab-content well post-tabs">*/
/* 				<!-- INCLUDE posting_option_body.html -->*/
/* 				<!-- IF S_SHOW_ATTACH_BOX --><!-- INCLUDE posting_attach_body.html --><!-- ENDIF -->*/
/* 				<!-- IF S_SHOW_POLL_BOX or S_POLL_DELETE --><!-- INCLUDE posting_poll_body.html --><!-- ENDIF -->*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
