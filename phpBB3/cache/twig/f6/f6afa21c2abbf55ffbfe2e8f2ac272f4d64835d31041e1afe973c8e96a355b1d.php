<?php

/* ucp_main_drafts.html */
class __TwigTemplate_ffec1772fdeb9ba982e03f15746f9f31861d174fdee906db33879a826bf7d8d8 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_main_drafts.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"postform\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"alert alert-info\">";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("DRAFTS_EXPLAIN");
        echo "</div>
\t\t\t";
        // line 10
        if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
            // line 11
            echo "\t\t\t\t";
            $location = "posting_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_editor.html", "ucp_main_drafts.html", 11)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 12
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<fieldset class=\"submit-buttons\">
\t\t\t\t\t\t\t";
            // line 15
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "<input type=\"reset\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" name=\"reset\" class=\"btn btn-danger\" />
\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("SAVE");
            echo "\" class=\"btn btn-primary\" />
\t\t\t\t\t\t\t";
            // line 17
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</div>
\t\t\t";
        } else {
            // line 21
            echo "\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "draftrow", array()))) {
                // line 22
                echo "\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>";
                // line 26
                echo $this->env->getExtension('phpbb')->lang("DRAFT_TITLE");
                echo "</th>
\t\t\t\t\t\t\t\t\t<th><span>";
                // line 27
                echo $this->env->getExtension('phpbb')->lang("SAVE_DATE");
                echo "</span></th>
\t\t\t\t\t\t\t\t\t<th>";
                // line 28
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody class=\"topiclist cplist\">
\t\t\t\t\t\t\t\t";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "draftrow", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["draftrow"]) {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"topictitle\" href=\"";
                    // line 35
                    echo $this->getAttribute($context["draftrow"], "U_VIEW_EDIT", array());
                    echo "\">";
                    echo $this->getAttribute($context["draftrow"], "DRAFT_SUBJECT", array());
                    echo "</a><br />
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 36
                    if ($this->getAttribute($context["draftrow"], "S_LINK_TOPIC", array())) {
                        echo $this->env->getExtension('phpbb')->lang("TOPIC");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["draftrow"], "U_VIEW", array());
                        echo "\">";
                        echo $this->getAttribute($context["draftrow"], "TITLE", array());
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 37
$context["draftrow"], "S_LINK_FORUM", array())) {
                        echo $this->env->getExtension('phpbb')->lang("FORUM");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <a href=\"";
                        echo $this->getAttribute($context["draftrow"], "U_VIEW", array());
                        echo "\">";
                        echo $this->getAttribute($context["draftrow"], "TITLE", array());
                        echo "</a>
\t\t\t\t\t\t\t\t\t\t\t";
                    } elseif (                    // line 38
(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) {
                        // line 39
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_FORUM");
                    }
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 41
                    echo $this->env->getExtension('phpbb')->lang("SAVE_DATE");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute($context["draftrow"], "DATE", array());
                    echo "</strong><br />
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 42
                    if ($this->getAttribute($context["draftrow"], "U_INSERT", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["draftrow"], "U_INSERT", array());
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                        echo "</a> &bull; ";
                    }
                    echo "<a href=\"";
                    echo $this->getAttribute($context["draftrow"], "U_VIEW_EDIT", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_EDIT");
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td><span>";
                    // line 45
                    echo $this->getAttribute($context["draftrow"], "DATE", array());
                    echo "<br />";
                    if ($this->getAttribute($context["draftrow"], "U_INSERT", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["draftrow"], "U_INSERT", array());
                        echo "\" class=\"btn btn-success btn-xs\">";
                        echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                        echo "</a> ";
                    }
                    echo "<a href=\"";
                    echo $this->getAttribute($context["draftrow"], "U_VIEW_EDIT", array());
                    echo "\" class=\"btn btn-warning btn-xs\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_EDIT");
                    echo "</a></span></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"marking\"><input type=\"checkbox\" name=\"d[";
                    // line 46
                    echo $this->getAttribute($context["draftrow"], "DRAFT_ID", array());
                    echo "]\" id=\"d";
                    echo $this->getAttribute($context["draftrow"], "DRAFT_ID", array());
                    echo "\" /></td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['draftrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t\t<p><strong>";
                echo $this->env->getExtension('phpbb')->lang("NO_SAVED_DRAFTS");
                echo "</strong></p>
\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "draftrow", array()))) {
                // line 56
                echo "\t\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-success btn-sm\" href=\"#\" onclick=\"marklist('postform', '', true); return false;\">";
                // line 59
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-warning btn-sm\" href=\"#\" onclick=\"marklist('postform', '', false); return false;\">";
                // line 60
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<input class=\"btn btn-danger btn-sm\" type=\"submit\" name=\"delete\" value=\"";
                // line 62
                echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
                echo "\" />
\t\t\t\t\t\t\t";
                // line 63
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 67
            echo "\t\t\t</div>
\t\t";
        }
        // line 69
        echo "\t</div>
</form>

";
        // line 72
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_drafts.html", 72)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_drafts.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 72,  251 => 69,  247 => 67,  240 => 63,  236 => 62,  231 => 60,  227 => 59,  222 => 56,  219 => 55,  213 => 53,  207 => 49,  196 => 46,  180 => 45,  164 => 42,  157 => 41,  154 => 40,  149 => 39,  147 => 38,  137 => 37,  127 => 36,  121 => 35,  117 => 33,  113 => 32,  106 => 28,  102 => 27,  98 => 26,  92 => 22,  89 => 21,  82 => 17,  78 => 16,  72 => 15,  67 => 12,  54 => 11,  52 => 10,  48 => 9,  42 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="postform" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title">{L_TITLE}</h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<div class="alert alert-info">{L_DRAFTS_EXPLAIN}</div>*/
/* 			<!-- IF S_EDIT_DRAFT -->*/
/* 				<!-- INCLUDE posting_editor.html -->*/
/* 					</div>*/
/* 					<div class="panel-footer">*/
/* 						<fieldset class="submit-buttons">*/
/* 							{S_HIDDEN_FIELDS}<input type="reset" value="{L_RESET}" name="reset" class="btn btn-danger" />*/
/* 							<input type="submit" name="submit" value="{L_SAVE}" class="btn btn-primary" />*/
/* 							{S_FORM_TOKEN}*/
/* 						</fieldset>*/
/* 					</div>*/
/* 			<!-- ELSE -->*/
/* 				<!-- IF .draftrow -->*/
/* 					<div class="table-responsive">*/
/* 						<table class="table table-striped table-bordered">*/
/* 							<thead>*/
/* 								<tr>*/
/* 									<th>{L_DRAFT_TITLE}</th>*/
/* 									<th><span>{L_SAVE_DATE}</span></th>*/
/* 									<th>{L_MARK}</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody class="topiclist cplist">*/
/* 								<!-- BEGIN draftrow -->*/
/* 									<tr>*/
/* 										<td>*/
/* 											<a class="topictitle" href="{draftrow.U_VIEW_EDIT}">{draftrow.DRAFT_SUBJECT}</a><br />*/
/* 											<!-- IF draftrow.S_LINK_TOPIC -->{L_TOPIC}{L_COLON} <a href="{draftrow.U_VIEW}">{draftrow.TITLE}</a>*/
/* 											<!-- ELSEIF draftrow.S_LINK_FORUM -->{L_FORUM}{L_COLON} <a href="{draftrow.U_VIEW}">{draftrow.TITLE}</a>*/
/* 											<!-- ELSEIF S_PRIVMSGS -->*/
/* 											<!-- ELSE -->{L_NO_TOPIC_FORUM}<!-- ENDIF -->*/
/* 											<div class="visible-xs-block">*/
/* 												{L_SAVE_DATE}{L_COLON} <strong>{draftrow.DATE}</strong><br />*/
/* 												<!-- IF draftrow.U_INSERT --><a href="{draftrow.U_INSERT}">{L_LOAD_DRAFT}</a> &bull; <!-- ENDIF --><a href="{draftrow.U_VIEW_EDIT}">{L_VIEW_EDIT}</a>*/
/* 											</div>*/
/* 										</td>*/
/* 										<td><span>{draftrow.DATE}<br /><!-- IF draftrow.U_INSERT --><a href="{draftrow.U_INSERT}" class="btn btn-success btn-xs">{L_LOAD_DRAFT}</a> <!-- ENDIF --><a href="{draftrow.U_VIEW_EDIT}" class="btn btn-warning btn-xs">{L_VIEW_EDIT}</a></span></td>*/
/* 										<td class="marking"><input type="checkbox" name="d[{draftrow.DRAFT_ID}]" id="d{draftrow.DRAFT_ID}" /></td>*/
/* 									</tr>*/
/* 								<!-- END draftrow -->*/
/* 							</tbody>*/
/* 						</table>*/
/* 					</div>*/
/* 				<!-- ELSE -->*/
/* 					<p><strong>{L_NO_SAVED_DRAFTS}</strong></p>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF .draftrow -->*/
/* 					<div class="text-right">*/
/* 						<fieldset>*/
/* 							<div class="btn-group">*/
/* 								<a class="btn btn-success btn-sm" href="#" onclick="marklist('postform', '', true); return false;">{L_MARK_ALL}</a>*/
/* 								<a class="btn btn-warning btn-sm" href="#" onclick="marklist('postform', '', false); return false;">{L_UNMARK_ALL}</a>*/
/* 							</div>*/
/* 							<input class="btn btn-danger btn-sm" type="submit" name="delete" value="{L_DELETE_MARKED}" />*/
/* 							{S_FORM_TOKEN}*/
/* 						</fieldset>*/
/* 					</div>*/
/* 				<!-- ENDIF -->*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
