<?php

/* posting_option_body.html */
class __TwigTemplate_4a7bd31de9b0c7b377aec5875c06ba97d16e6c88c49ab9de2eac725c5e871b25 extends Twig_Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane active\" id=\"options-tab\">
\t<fieldset class=\"form-horizontal\">
\t\t";
        // line 3
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 4
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"disable_bbcode\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
            // line 7
            echo (isset($context["S_BBCODE_CHECKED"]) ? $context["S_BBCODE_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
            echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 12
        echo "\t\t";
        if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
            // line 13
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"disable_smilies\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
            // line 16
            echo (isset($context["S_SMILIES_CHECKED"]) ? $context["S_SMILIES_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
            echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 21
        echo "\t\t";
        if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
            // line 22
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"disable_magic_url\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
            // line 25
            echo (isset($context["S_MAGIC_URL_CHECKED"]) ? $context["S_MAGIC_URL_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
            echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 30
        echo "\t\t";
        if ((isset($context["S_SIG_ALLOWED"]) ? $context["S_SIG_ALLOWED"] : null)) {
            // line 31
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"attach_sig\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
            // line 34
            echo (isset($context["S_SIGNATURE_CHECKED"]) ? $context["S_SIGNATURE_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("ATTACH_SIG");
            echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 39
        echo "\t\t";
        if ((isset($context["S_NOTIFY_ALLOWED"]) ? $context["S_NOTIFY_ALLOWED"] : null)) {
            // line 40
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"notify\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"notify\" id=\"notify\"";
            // line 43
            echo (isset($context["S_NOTIFY_CHECKED"]) ? $context["S_NOTIFY_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NOTIFY_REPLY");
            echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 48
        echo "\t\t";
        if ((isset($context["S_LOCK_TOPIC_ALLOWED"]) ? $context["S_LOCK_TOPIC_ALLOWED"] : null)) {
            // line 49
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"lock_topic\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
            // line 52
            echo (isset($context["S_LOCK_TOPIC_CHECKED"]) ? $context["S_LOCK_TOPIC_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("LOCK_TOPIC");
            echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 57
        echo "\t\t";
        if ((isset($context["S_LOCK_POST_ALLOWED"]) ? $context["S_LOCK_POST_ALLOWED"] : null)) {
            // line 58
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"lock_post\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
            // line 61
            echo (isset($context["S_LOCK_POST_CHECKED"]) ? $context["S_LOCK_POST_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("LOCK_POST");
            echo " [";
            echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
            echo "]
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 66
        echo "\t\t";
        if ((((isset($context["S_TYPE_TOGGLE"]) ? $context["S_TYPE_TOGGLE"] : null) || (isset($context["S_TOPIC_TYPE_ANNOUNCE"]) ? $context["S_TOPIC_TYPE_ANNOUNCE"] : null)) || (isset($context["S_TOPIC_TYPE_STICKY"]) ? $context["S_TOPIC_TYPE_STICKY"] : null))) {
            // line 67
            echo "\t\t\t<hr class=\"dashed\" />
\t\t";
        }
        // line 69
        echo "\t\t";
        if ((isset($context["S_TYPE_TOGGLE"]) ? $context["S_TYPE_TOGGLE"] : null)) {
            // line 70
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"radio\">
\t\t\t\t\t<label for=\"topic_type-0\">";
            // line 72
            if ((isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("CHANGE_TOPIC_TO");
            } else {
                echo $this->env->getExtension('phpbb')->lang("POST_TOPIC_AS");
            }
            echo ":</label>
\t\t\t\t\t";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_type", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                // line 74
                echo "\t\t\t\t\t\t<label for=\"topic_type-";
                echo $this->getAttribute($context["topic_type"], "VALUE", array());
                echo "\">
\t\t\t\t\t\t\t<input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                // line 75
                echo $this->getAttribute($context["topic_type"], "VALUE", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["topic_type"], "VALUE", array());
                echo "\"";
                echo $this->getAttribute($context["topic_type"], "S_CHECKED", array());
                echo " />
\t\t\t\t\t\t\t";
                // line 76
                echo $this->getAttribute($context["topic_type"], "L_TOPIC_TYPE", array());
                echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 82
        echo "\t\t";
        if (((isset($context["S_TOPIC_TYPE_ANNOUNCE"]) ? $context["S_TOPIC_TYPE_ANNOUNCE"] : null) || (isset($context["S_TOPIC_TYPE_STICKY"]) ? $context["S_TOPIC_TYPE_STICKY"] : null))) {
            // line 83
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"topic_time_limit\" class=\"col-md-2 control-label\">";
            // line 84
            echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR");
            echo ":</label>
\t\t\t\t<div class=\"col-md-1\">
\t\t\t\t\t<input type=\"text\" name=\"topic_time_limit\" id=\"topic_time_limit\" size=\"3\" maxlength=\"3\" value=\"";
            // line 86
            echo (isset($context["TOPIC_TIME_LIMIT"]) ? $context["TOPIC_TIME_LIMIT"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-9\">";
            // line 88
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t<p class=\"help-block col-md-12\">";
            // line 90
            echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR_EXPLAIN");
            echo "</p>
\t\t\t</div>
\t\t";
        }
        // line 93
        echo "\t\t";
        if ((isset($context["S_EDIT_REASON"]) ? $context["S_EDIT_REASON"] : null)) {
            // line 94
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"edit_reason\" class=\"col-md-4\">";
            // line 95
            echo $this->env->getExtension('phpbb')->lang("EDIT_REASON");
            echo ":</label>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<input type=\"text\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
            // line 97
            echo (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null);
            echo "\" class=\"form-control\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 101
        echo "\t</fieldset>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_option_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 101,  241 => 97,  236 => 95,  233 => 94,  230 => 93,  224 => 90,  219 => 88,  214 => 86,  209 => 84,  206 => 83,  203 => 82,  198 => 79,  189 => 76,  181 => 75,  176 => 74,  172 => 73,  164 => 72,  160 => 70,  157 => 69,  153 => 67,  150 => 66,  138 => 61,  133 => 58,  130 => 57,  120 => 52,  115 => 49,  112 => 48,  102 => 43,  97 => 40,  94 => 39,  84 => 34,  79 => 31,  76 => 30,  66 => 25,  61 => 22,  58 => 21,  48 => 16,  43 => 13,  40 => 12,  30 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div role="tabpanel" class="tab-pane active" id="options-tab">*/
/* 	<fieldset class="form-horizontal">*/
/* 		<!-- IF S_BBCODE_ALLOWED -->*/
/* 			<div class="form-group">*/
/* 				<div class="checkbox">*/
/* 					<label for="disable_bbcode">*/
/* 						<input type="checkbox" name="disable_bbcode" id="disable_bbcode"{S_BBCODE_CHECKED} /> {L_DISABLE_BBCODE}*/
/* 					</label>*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_SMILIES_ALLOWED -->*/
/* 			<div class="form-group">*/
/* 				<div class="checkbox">*/
/* 					<label for="disable_smilies">*/
/* 						<input type="checkbox" name="disable_smilies" id="disable_smilies"{S_SMILIES_CHECKED} /> {L_DISABLE_SMILIES}*/
/* 					</label>*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_LINKS_ALLOWED -->*/
/* 			<div class="form-group">*/
/* 				<div class="checkbox">*/
/* 					<label for="disable_magic_url">*/
/* 						<input type="checkbox" name="disable_magic_url" id="disable_magic_url"{S_MAGIC_URL_CHECKED} /> {L_DISABLE_MAGIC_URL}*/
/* 					</label>*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_SIG_ALLOWED -->*/
/* 			<div class="form-group">*/
/* 				<div class="checkbox">*/
/* 					<label for="attach_sig">*/
/* 						<input type="checkbox" name="attach_sig" id="attach_sig"{S_SIGNATURE_CHECKED} /> {L_ATTACH_SIG}*/
/* 					</label>*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_NOTIFY_ALLOWED -->*/
/* 			<div class="form-group">*/
/* 				<div class="checkbox">*/
/* 					<label for="notify">*/
/* 						<input type="checkbox" name="notify" id="notify"{S_NOTIFY_CHECKED} /> {L_NOTIFY_REPLY}*/
/* 					</label>*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_LOCK_TOPIC_ALLOWED -->*/
/* 			<div class="form-group">*/
/* 				<div class="checkbox">*/
/* 					<label for="lock_topic">*/
/* 						<input type="checkbox" name="lock_topic" id="lock_topic"{S_LOCK_TOPIC_CHECKED} /> {L_LOCK_TOPIC}*/
/* 					</label>*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_LOCK_POST_ALLOWED -->*/
/* 			<div class="form-group">*/
/* 				<div class="checkbox">*/
/* 					<label for="lock_post">*/
/* 						<input type="checkbox" name="lock_post" id="lock_post"{S_LOCK_POST_CHECKED} /> {L_LOCK_POST} [{L_LOCK_POST_EXPLAIN}]*/
/* 					</label>*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_TYPE_TOGGLE or S_TOPIC_TYPE_ANNOUNCE or S_TOPIC_TYPE_STICKY -->*/
/* 			<hr class="dashed" />*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_TYPE_TOGGLE -->*/
/* 			<div class="form-group">*/
/* 				<div class="radio">*/
/* 					<label for="topic_type-0"><!-- IF S_EDIT_POST -->{L_CHANGE_TOPIC_TO}<!-- ELSE -->{L_POST_TOPIC_AS}<!-- ENDIF -->:</label>*/
/* 					<!-- BEGIN topic_type -->*/
/* 						<label for="topic_type-{topic_type.VALUE}">*/
/* 							<input type="radio" name="topic_type" id="topic_type-{topic_type.VALUE}" value="{topic_type.VALUE}"{topic_type.S_CHECKED} />*/
/* 							{topic_type.L_TOPIC_TYPE}*/
/* 						</label>*/
/* 					<!-- END topic_type -->*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_TOPIC_TYPE_ANNOUNCE or S_TOPIC_TYPE_STICKY -->*/
/* 			<div class="form-group">*/
/* 				<label for="topic_time_limit" class="col-md-2 control-label">{L_STICK_TOPIC_FOR}:</label>*/
/* 				<div class="col-md-1">*/
/* 					<input type="text" name="topic_time_limit" id="topic_time_limit" size="3" maxlength="3" value="{TOPIC_TIME_LIMIT}" class="form-control" />*/
/* 				</div>*/
/* 				<div class="col-md-9">{L_DAYS}</div>*/
/* 				<div class="clearfix"></div>*/
/* 				<p class="help-block col-md-12">{L_STICK_TOPIC_FOR_EXPLAIN}</p>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_EDIT_REASON -->*/
/* 			<div class="form-group">*/
/* 				<label for="edit_reason" class="col-md-4">{L_EDIT_REASON}:</label>*/
/* 				<div class="col-md-8">*/
/* 					<input type="text" name="edit_reason" id="edit_reason" value="{EDIT_REASON}" class="form-control" />*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 	</fieldset>*/
/* </div>*/
/* */
