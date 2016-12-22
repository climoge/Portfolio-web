<?php

/* posting_topic_review.html */
class __TwigTemplate_ed19ab0a733cfe4c9225e44dd13ab186a461aeafbfe5b370e1bc2f0b116fe8cf extends Twig_Template
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
        echo "<div class=\"panel panel-default\" id=\"review\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo " ";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "</h3>
\t\t<span class=\"pull-right panel-right\" id=\"review_panel\"><a href=\"#review\" onclick=\"viewableArea(getElementById('topicreview'), true);\" class=\"btn btn-xs btn-default expander\"><i class=\"fa fa-expand fa-fw\" aria-hidden=\"true\"></i></a></span>
\t</div>
\t<div id=\"topicreview\" class=\"panel-body no-margin-bottom\">
\t\t<script type=\"text/javascript\">
\t\t// <![CDATA[
\t\t\tbbcodeEnabled = ";
        // line 9
        echo (isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null);
        echo ";
\t\t// ]]>
\t\t</script>
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_review_row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["topic_review_row"]) {
            // line 13
            echo "\t\t\t";
            if ($this->getAttribute($context["topic_review_row"], "S_IGNORE_POST", array())) {
                // line 14
                echo "\t\t\t\t<div class=\"post-ignore\">
\t\t\t\t\t";
                // line 15
                echo $this->getAttribute($context["topic_review_row"], "L_IGNORE_POST", array());
                echo "
\t\t\t";
            }
            // line 17
            echo "\t\t\t\t<div id=\"pr";
            echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
            echo "\" class=\"preview-item\">
\t\t\t\t\t<div class=\"panel panel-default no-margin-bottom\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">
\t\t\t\t\t\t\t\t<a href=\"#pr";
            // line 21
            echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
            echo "\">";
            echo $this->getAttribute($context["topic_review_row"], "POST_SUBJECT", array());
            echo "</a>
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<span class=\"pull-right btn-group panel-right\">
\t\t\t\t\t\t\t\t";
            // line 24
            if ($this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array())) {
                // line 25
                echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topic_review_row"], "U_MCP_DETAILS", array());
                echo "\" class=\"btn btn-primary btn-xs\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-info fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 26
                echo $this->env->getExtension('phpbb')->lang("POST_DETAILS");
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array()))) {
                // line 30
                echo "\t\t\t\t\t\t\t\t\t<a href=\"#postingbox\" onclick=\"addquote(";
                echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                echo ", '";
                echo $this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array());
                echo "', '";
                echo addslashes($this->env->getExtension('phpbb')->lang("WROTE"));
                echo "');\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("QUOTE");
                echo " ";
                echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR", array());
                echo "\" class=\"btn btn-success btn-xs\" >
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 31
                echo $this->env->getExtension('phpbb')->lang("QUOTE");
                echo " ";
                echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 34
            echo "\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body post-content\">
\t\t\t\t\t\t\t<div class=\"post-head\">
\t\t\t\t\t\t\t\t";
            // line 38
            // line 39
            echo "\t\t\t\t\t\t\t\t<p class=\"author\">
\t\t\t\t\t\t\t\t\t";
            // line 40
            if ((isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t<span><i class=\"fa fa-file fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo $this->getAttribute($context["topic_review_row"], "MINI_POST", array());
                echo "</span></span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 43
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topic_review_row"], "U_MINI_POST", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["topic_review_row"], "MINI_POST", array());
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-file fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 44
                echo $this->getAttribute($context["topic_review_row"], "MINI_POST", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t\t\t";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute($context["topic_review_row"], "POST_AUTHOR_FULL", array());
            echo "</strong> &raquo; ";
            echo $this->getAttribute($context["topic_review_row"], "POST_DATE", array());
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t";
            // line 49
            // line 50
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"content\">";
            // line 51
            echo $this->getAttribute($context["topic_review_row"], "MESSAGE", array());
            echo "</div>
\t\t\t\t\t\t\t";
            // line 52
            if ($this->getAttribute($context["topic_review_row"], "S_HAS_ATTACHMENTS", array())) {
                // line 53
                echo "\t\t\t\t\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t\t\t\t\t<dt>";
                // line 54
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t\t\t\t\t\t";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topic_review_row"], "attachment", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 56
                    echo "\t\t\t\t\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["attachment"], "DISPLAY_ATTACHMENT", array());
                    echo "</dd>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "\t\t\t\t\t\t\t\t</dl>
\t\t\t\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["topic_review_row"], "POSTER_QUOTE", array()) && $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array()))) {
                // line 61
                echo "\t\t\t\t\t\t\t\t<div id=\"message_";
                echo $this->getAttribute($context["topic_review_row"], "POST_ID", array());
                echo "\" style=\"display: none;\">";
                echo $this->getAttribute($context["topic_review_row"], "DECODED_MESSAGE", array());
                echo "</div>
\t\t\t\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            // line 66
            if ($this->getAttribute($context["topic_review_row"], "S_IGNORE_POST", array())) {
                // line 67
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 69
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t</div>
\t<div class=\"panel-footer review-footer\">
\t\t";
        // line 72
        if ((isset($context["S_MCP_REPORT"]) ? $context["S_MCP_REPORT"] : null)) {
            // line 73
            echo "\t\t\t<div class=\"to-top pull-right\"><a href=\"#report\" class=\"top\"><i class=\"fa fa-chevron-up fa-fw\" aria-hidden=\"true\"></i></a></div>
\t\t";
        } else {
            // line 75
            echo "\t\t\t<div class=\"to-top pull-right\"><a href=\"#postingbox\" class=\"top\"><i class=\"fa fa-chevron-up fa-fw\" aria-hidden=\"true\"></i></a></div>
\t\t";
        }
        // line 77
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_topic_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 77,  222 => 75,  218 => 73,  216 => 72,  212 => 70,  206 => 69,  202 => 67,  200 => 66,  195 => 63,  187 => 61,  184 => 60,  180 => 58,  171 => 56,  167 => 55,  163 => 54,  160 => 53,  158 => 52,  154 => 51,  151 => 50,  150 => 49,  140 => 47,  134 => 44,  127 => 43,  121 => 41,  119 => 40,  116 => 39,  115 => 38,  109 => 34,  101 => 31,  88 => 30,  85 => 29,  79 => 26,  74 => 25,  72 => 24,  64 => 21,  56 => 17,  51 => 15,  48 => 14,  45 => 13,  41 => 12,  35 => 9,  23 => 3,  19 => 1,);
    }
}
/* <div class="panel panel-default" id="review">*/
/* 	<div class="panel-heading">*/
/* 		<h3 class="panel-title">{L_TOPIC_REVIEW}{L_COLON} {TOPIC_TITLE}</h3>*/
/* 		<span class="pull-right panel-right" id="review_panel"><a href="#review" onclick="viewableArea(getElementById('topicreview'), true);" class="btn btn-xs btn-default expander"><i class="fa fa-expand fa-fw" aria-hidden="true"></i></a></span>*/
/* 	</div>*/
/* 	<div id="topicreview" class="panel-body no-margin-bottom">*/
/* 		<script type="text/javascript">*/
/* 		// <![CDATA[*/
/* 			bbcodeEnabled = {S_BBCODE_ALLOWED};*/
/* 		// ]]>*/
/* 		</script>*/
/* 		<!-- BEGIN topic_review_row -->*/
/* 			<!-- IF topic_review_row.S_IGNORE_POST -->*/
/* 				<div class="post-ignore">*/
/* 					{topic_review_row.L_IGNORE_POST}*/
/* 			<!-- ENDIF -->*/
/* 				<div id="pr{topic_review_row.POST_ID}" class="preview-item">*/
/* 					<div class="panel panel-default no-margin-bottom">*/
/* 						<div class="panel-heading">*/
/* 							<h3 class="panel-title">*/
/* 								<a href="#pr{topic_review_row.POST_ID}">{topic_review_row.POST_SUBJECT}</a>*/
/* 							</h3>*/
/* 							<span class="pull-right btn-group panel-right">*/
/* 								<!-- IF topic_review_row.U_MCP_DETAILS -->*/
/* 									<a href="{topic_review_row.U_MCP_DETAILS}" class="btn btn-primary btn-xs">*/
/* 										<i class="fa fa-info fa-fw" aria-hidden="true"></i><span class="sr-only">{L_POST_DETAILS}</span>*/
/* 									</a>*/
/* 								<!-- ENDIF -->*/
/* 								<!-- IF topic_review_row.POSTER_QUOTE and topic_review_row.DECODED_MESSAGE -->*/
/* 									<a href="#postingbox" onclick="addquote({topic_review_row.POST_ID}, '{topic_review_row.POSTER_QUOTE}', '{LA_WROTE}');" title="{L_QUOTE} {topic_review_row.POST_AUTHOR}" class="btn btn-success btn-xs" >*/
/* 										<i class="fa fa-quote-left fa-fw" aria-hidden="true"></i><span class="sr-only">{L_QUOTE} {topic_review_row.POST_AUTHOR}</span>*/
/* 									</a>*/
/* 								<!-- ENDIF -->*/
/* 							</span>*/
/* 						</div>*/
/* 						<div class="panel-body post-content">*/
/* 							<div class="post-head">*/
/* 								<!-- EVENT posting_topic_review_row_post_details_before -->*/
/* 								<p class="author">*/
/* 									<!-- IF S_IS_BOT -->*/
/* 										<span><i class="fa fa-file fa-fw" aria-hidden="true"></i><span class="sr-only">{topic_review_row.MINI_POST}</span></span>*/
/* 									<!-- ELSE -->*/
/* 										<a href="{topic_review_row.U_MINI_POST}" title="{topic_review_row.MINI_POST}">*/
/* 											<i class="fa fa-file fa-fw" aria-hidden="true"></i><span class="sr-only">{topic_review_row.MINI_POST}</span>*/
/* 										</a>*/
/* 									<!-- ENDIF -->*/
/* 									{L_POST_BY_AUTHOR} <strong>{topic_review_row.POST_AUTHOR_FULL}</strong> &raquo; {topic_review_row.POST_DATE}*/
/* 								</p>*/
/* 								<!-- EVENT posting_topic_review_row_post_details_after -->*/
/* 							</div>*/
/* 							<div class="content">{topic_review_row.MESSAGE}</div>*/
/* 							<!-- IF topic_review_row.S_HAS_ATTACHMENTS -->*/
/* 								<dl class="attachbox">*/
/* 									<dt>{L_ATTACHMENTS}</dt>*/
/* 									<!-- BEGIN attachment -->*/
/* 										<dd>{topic_review_row.attachment.DISPLAY_ATTACHMENT}</dd>*/
/* 									<!-- END attachment -->*/
/* 								</dl>*/
/* 							<!-- ENDIF -->*/
/* 							<!-- IF topic_review_row.POSTER_QUOTE and topic_review_row.DECODED_MESSAGE -->*/
/* 								<div id="message_{topic_review_row.POST_ID}" style="display: none;">{topic_review_row.DECODED_MESSAGE}</div>*/
/* 							<!-- ENDIF -->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			<!-- IF topic_review_row.S_IGNORE_POST -->*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- END topic_review_row -->*/
/* 	</div>*/
/* 	<div class="panel-footer review-footer">*/
/* 		<!-- IF S_MCP_REPORT -->*/
/* 			<div class="to-top pull-right"><a href="#report" class="top"><i class="fa fa-chevron-up fa-fw" aria-hidden="true"></i></a></div>*/
/* 		<!-- ELSE -->*/
/* 			<div class="to-top pull-right"><a href="#postingbox" class="top"><i class="fa fa-chevron-up fa-fw" aria-hidden="true"></i></a></div>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* </div>*/
/* */
