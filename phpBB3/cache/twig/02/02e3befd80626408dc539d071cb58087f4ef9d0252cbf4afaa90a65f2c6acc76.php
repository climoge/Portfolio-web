<?php

/* posting_preview.html */
class __TwigTemplate_0cd086602b66e581d89fac918e7d7bdc81c03d20307c2e3072db53fb388b6f45 extends Twig_Template
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
        echo "<div id=\"preview\">
\t";
        // line 2
        if ((isset($context["S_HAS_POLL_OPTIONS"]) ? $context["S_HAS_POLL_OPTIONS"] : null)) {
            // line 3
            echo "\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">";
            // line 5
            echo $this->env->getExtension('phpbb')->lang("PREVIEW");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["POLL_QUESTION"]) ? $context["POLL_QUESTION"] : null);
            echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<p class=\"author\">";
            // line 8
            if ((isset($context["L_POLL_LENGTH"]) ? $context["L_POLL_LENGTH"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("POLL_LENGTH");
                echo "<br />";
            }
            echo $this->env->getExtension('phpbb')->lang("MAX_VOTES");
            echo "</p>
\t\t\t\t<fieldset class=\"polls\">
\t\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "poll_option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 11
                echo "\t\t\t\t\t<dl>
\t\t\t\t\t\t<dt><label for=\"vote_";
                // line 12
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                echo "\">";
                echo $this->getAttribute($context["poll_option"], "POLL_OPTION_CAPTION", array());
                echo "</label></dt>
\t\t\t\t\t\t<dd style=\"width: auto;\">";
                // line 13
                if ((isset($context["S_IS_MULTI_CHOICE"]) ? $context["S_IS_MULTI_CHOICE"] : null)) {
                    echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\"";
                    if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " />";
                } else {
                    echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["poll_option"], "POLL_OPTION_ID", array());
                    echo "\"";
                    if ($this->getAttribute($context["poll_option"], "POLL_OPTION_VOTED", array())) {
                        echo " checked=\"checked\"";
                    }
                    echo " />";
                }
                echo "</dd>
\t\t\t\t\t</dl>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t\t</fieldset>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 20
        echo "
\t";
        // line 21
        // line 22
        echo "
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("PREVIEW");
        echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<p>";
        // line 28
        echo (isset($context["PREVIEW_MESSAGE"]) ? $context["PREVIEW_MESSAGE"] : null);
        echo "</p>
\t\t</div>
\t\t";
        // line 30
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachment", array()))) {
            // line 31
            echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>";
            // line 32
            echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
            echo "</dt>
\t\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attachment", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 34
                echo "\t\t\t\t<dd>";
                echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t\t</dl>
\t\t";
        }
        // line 38
        echo "
\t\t";
        // line 39
        if ((isset($context["PREVIEW_SIGNATURE"]) ? $context["PREVIEW_SIGNATURE"] : null)) {
            echo "<div class=\"signature\">";
            echo (isset($context["PREVIEW_SIGNATURE"]) ? $context["PREVIEW_SIGNATURE"] : null);
            echo "</div>";
        }
        // line 40
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_preview.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 40,  143 => 39,  140 => 38,  136 => 36,  127 => 34,  123 => 33,  119 => 32,  116 => 31,  114 => 30,  109 => 28,  103 => 25,  98 => 22,  97 => 21,  94 => 20,  88 => 16,  59 => 13,  53 => 12,  50 => 11,  46 => 10,  37 => 8,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div id="preview">*/
/* 	<!-- IF S_HAS_POLL_OPTIONS -->*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title">{L_PREVIEW}{L_COLON} {POLL_QUESTION}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<p class="author"><!-- IF L_POLL_LENGTH -->{L_POLL_LENGTH}<br /><!-- ENDIF -->{L_MAX_VOTES}</p>*/
/* 				<fieldset class="polls">*/
/* 				<!-- BEGIN poll_option -->*/
/* 					<dl>*/
/* 						<dt><label for="vote_{poll_option.POLL_OPTION_ID}">{poll_option.POLL_OPTION_CAPTION}</label></dt>*/
/* 						<dd style="width: auto;"><!-- IF S_IS_MULTI_CHOICE --><input type="checkbox" name="vote_id[]" id="vote_{poll_option.POLL_OPTION_ID}" value="{poll_option.POLL_OPTION_ID}"<!-- IF poll_option.POLL_OPTION_VOTED --> checked="checked"<!-- ENDIF --> /><!-- ELSE --><input type="radio" name="vote_id[]" id="vote_{poll_option.POLL_OPTION_ID}" value="{poll_option.POLL_OPTION_ID}"<!-- IF poll_option.POLL_OPTION_VOTED --> checked="checked"<!-- ENDIF --> /><!-- ENDIF --></dd>*/
/* 					</dl>*/
/* 				<!-- END poll_option -->*/
/* 				</fieldset>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT posting_preview_poll_after -->*/
/* */
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title">{L_PREVIEW}</h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<p>{PREVIEW_MESSAGE}</p>*/
/* 		</div>*/
/* 		<!-- IF .attachment -->*/
/* 			<dl class="attachbox">*/
/* 				<dt>{L_ATTACHMENTS}</dt>*/
/* 				<!-- BEGIN attachment -->*/
/* 				<dd>{attachment.DISPLAY_ATTACHMENT}</dd>*/
/* 				<!-- END attachment -->*/
/* 			</dl>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF PREVIEW_SIGNATURE --><div class="signature">{PREVIEW_SIGNATURE}</div><!-- ENDIF -->*/
/* 	</div>*/
/* </div>*/
/* */
