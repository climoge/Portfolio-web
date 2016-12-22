<?php

/* posting_pm_header.html */
class __TwigTemplate_548adeb0e68877e7f8b7a71f1f875cc0506bdf262dd763b677a6715fd383d050 extends Twig_Template
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
        echo "<fieldset class=\"form-horizontal\">
\t";
        // line 2
        if ( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) {
            // line 3
            echo "\t\t";
            if ((isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null)) {
                // line 4
                echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"group_list\" class=\"control-label col-md-4\">";
                // line 5
                echo $this->env->getExtension('phpbb')->lang("TO_ADD_GROUPS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<select name=\"group_list[]\" id=\"group_list\" multiple=\"multiple\" size=\"3\" class=\"form-control\">";
                // line 7
                echo (isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null);
                echo "</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            // line 11
            echo "\t\t";
            if ((isset($context["S_ALLOW_MASS_PM"]) ? $context["S_ALLOW_MASS_PM"] : null)) {
                // line 12
                echo "\t\t\t<div class=\"form-group\">
\t\t\t\t";
                // line 13
                if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                    // line 14
                    echo "\t\t\t\t\t<label class=\"control-label col-md-2\">";
                    echo $this->env->getExtension('phpbb')->lang("TO_ADD_MASS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<textarea id=\"username_list\" name=\"username_list\" class=\"form-control\" cols=\"50\" rows=\"2\" tabindex=\"1\"></textarea>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<input type=\"submit\" name=\"add_to\" value=\"";
                    // line 20
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "\" class=\"btn btn-default\" tabindex=\"1\" />
\t\t\t\t\t\t\t<input type=\"submit\" name=\"add_bcc\" value=\"";
                    // line 21
                    echo $this->env->getExtension('phpbb')->lang("ADD_BCC");
                    echo "\" class=\"btn btn-default\" tabindex=\"1\" />
\t\t\t\t\t\t\t";
                    // line 22
                    // line 23
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
                    echo "\" class=\"btn btn-default\" onclick=\"find_username(this.href); return false;\">";
                    echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 24
                    // line 25
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 28
                echo "\t\t\t</div>
\t\t\t";
                // line 29
                if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bcc_recipient", array())))) {
                    echo "<hr />";
                }
                // line 30
                echo "\t\t\t<div class=\"form-group\">
\t\t\t\t";
                // line 31
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", array()))) {
                    // line 32
                    echo "\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<label class=\"col-md-12\">";
                    // line 34
                    echo $this->env->getExtension('phpbb')->lang("TO_MASS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t";
                    // line 36
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                        // line 37
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"btn-group pm-to\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 38
                        if ($this->getAttribute($context["to_recipient"], "IS_GROUP", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["to_recipient"], "U_VIEW", array());
                            echo "\" class=\"btn btn-sm btn-default\"><strong>";
                            echo $this->getAttribute($context["to_recipient"], "NAME", array());
                            echo "</strong></a>";
                        } else {
                            echo $this->getAttribute($context["to_recipient"], "NAME_FULL", array());
                        }
                        // line 39
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                            echo "<input type=\"submit\" name=\"remove_";
                            echo $this->getAttribute($context["to_recipient"], "TYPE", array());
                            echo "[";
                            echo $this->getAttribute($context["to_recipient"], "UG_ID", array());
                            echo "]\" value=\"x\" class=\"btn btn-sm btn-danger\" />";
                        }
                        // line 40
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t";
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bcc_recipient", array()))) {
                    // line 47
                    echo "\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<label class=\"col-md-12\">";
                    // line 49
                    echo $this->env->getExtension('phpbb')->lang("BCC");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t";
                    // line 51
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bcc_recipient", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["bcc_recipient"]) {
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t<div class=\"btn-group pm-to\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 53
                        if ($this->getAttribute($context["bcc_recipient"], "IS_GROUP", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["bcc_recipient"], "U_VIEW", array());
                            echo "\" class=\"btn btn-sm btn-default\"><strong>";
                            echo $this->getAttribute($context["bcc_recipient"], "NAME", array());
                            echo "</strong></a>";
                        } else {
                            echo $this->getAttribute($context["bcc_recipient"], "NAME_FULL", array());
                        }
                        // line 54
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                            echo "<input type=\"submit\" name=\"remove_";
                            echo $this->getAttribute($context["bcc_recipient"], "TYPE", array());
                            echo "[";
                            echo $this->getAttribute($context["bcc_recipient"], "UG_ID", array());
                            echo "]\" value=\"x\" class=\"btn btn-sm btn-danger\" />";
                        }
                        // line 55
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bcc_recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 57
                    echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 61
                echo "\t\t\t</div>
\t\t";
            } else {
                // line 63
                echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"username_list\" class=\"control-label col-md-4\">";
                // line 64
                echo $this->env->getExtension('phpbb')->lang("TO_ADD");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"username_list\" id=\"username_list\" size=\"20\" value=\"\" /> <input type=\"submit\" name=\"add_to\" value=\"";
                // line 67
                echo $this->env->getExtension('phpbb')->lang("ADD");
                echo "\" class=\"btn btn-success\" />
\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t";
                // line 69
                if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
                    echo "\" class=\"btn btn-default\" onclick=\"find_username(this.href); return false\">";
                    echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                    echo "</a>";
                }
                // line 70
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
                // line 74
                if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                    // line 75
                    echo "\t\t\t";
                }
                // line 76
                echo "\t\t\t";
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", array()))) {
                    // line 77
                    echo "\t\t\t\t<ul class=\"recipients\">
\t\t\t\t\t";
                    // line 78
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "to_recipient", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["to_recipient"]) {
                        // line 79
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t";
                        // line 80
                        if ($this->getAttribute($context["to_recipient"], "IS_GROUP", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["to_recipient"], "U_VIEW", array());
                            echo "\"><strong>";
                            echo $this->getAttribute($context["to_recipient"], "NAME", array());
                            echo "</strong></a>";
                        } else {
                            echo $this->getAttribute($context["to_recipient"], "NAME_FULL", array());
                        }
                        echo "&nbsp;
\t\t\t\t\t\t";
                        // line 81
                        if ( !(isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                            echo "<input type=\"submit\" name=\"remove_";
                            echo $this->getAttribute($context["to_recipient"], "TYPE", array());
                            echo "[";
                            echo $this->getAttribute($context["to_recipient"], "UG_ID", array());
                            echo "]\" value=\"x\" class=\"btn btn-danger\" />";
                        }
                        // line 82
                        echo "\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 84
                    echo "\t\t\t\t</ul>
\t\t\t";
                }
                // line 86
                echo "\t\t";
            }
            // line 87
            echo "\t";
        }
        // line 88
        echo "</fieldset>
";
    }

    public function getTemplateName()
    {
        return "posting_pm_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 88,  282 => 87,  279 => 86,  275 => 84,  268 => 82,  260 => 81,  248 => 80,  245 => 79,  241 => 78,  238 => 77,  235 => 76,  232 => 75,  230 => 74,  224 => 70,  216 => 69,  211 => 67,  204 => 64,  201 => 63,  197 => 61,  191 => 57,  184 => 55,  175 => 54,  165 => 53,  162 => 52,  158 => 51,  152 => 49,  148 => 47,  145 => 46,  139 => 42,  132 => 40,  123 => 39,  113 => 38,  110 => 37,  106 => 36,  100 => 34,  96 => 32,  94 => 31,  91 => 30,  87 => 29,  84 => 28,  79 => 25,  78 => 24,  71 => 23,  70 => 22,  66 => 21,  62 => 20,  51 => 14,  49 => 13,  46 => 12,  43 => 11,  36 => 7,  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <fieldset class="form-horizontal">*/
/* 	<!-- IF not S_SHOW_DRAFTS -->*/
/* 		<!-- IF S_GROUP_OPTIONS -->*/
/* 			<div class="form-group">*/
/* 				<label for="group_list" class="control-label col-md-4">{L_TO_ADD_GROUPS}{L_COLON}</label>*/
/* 				<div class="col-md-8">*/
/* 					<select name="group_list[]" id="group_list" multiple="multiple" size="3" class="form-control">{S_GROUP_OPTIONS}</select>*/
/* 				</div>*/
/* 			</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_ALLOW_MASS_PM -->*/
/* 			<div class="form-group">*/
/* 				<!-- IF not S_EDIT_POST -->*/
/* 					<label class="control-label col-md-2">{L_TO_ADD_MASS}{L_COLON}</label>*/
/* 					<div class="col-md-5">*/
/* 						<textarea id="username_list" name="username_list" class="form-control" cols="50" rows="2" tabindex="1"></textarea>*/
/* 					</div>*/
/* 					<div class="col-md-5">*/
/* 						<div class="btn-group">*/
/* 							<input type="submit" name="add_to" value="{L_ADD}" class="btn btn-default" tabindex="1" />*/
/* 							<input type="submit" name="add_bcc" value="{L_ADD_BCC}" class="btn btn-default" tabindex="1" />*/
/* 							<!-- EVENT posting_pm_header_find_username_before -->*/
/* 							<a href="{U_FIND_USERNAME}" class="btn btn-default" onclick="find_username(this.href); return false;">{L_FIND_USERNAME}</a>*/
/* 							<!-- EVENT posting_pm_header_find_username_after -->*/
/* 						</div>*/
/* 					</div>*/
/* 				<!-- ENDIF -->*/
/* 			</div>*/
/* 			<!-- IF .to_recipient or .bcc_recipient --><hr /><!-- ENDIF -->*/
/* 			<div class="form-group">*/
/* 				<!-- IF .to_recipient -->*/
/* 					<div class="col-md-6">*/
/* 						<div class="row">*/
/* 							<label class="col-md-12">{L_TO_MASS}{L_COLON}</label>*/
/* 							<div class="col-md-12">*/
/* 								<!-- BEGIN to_recipient -->*/
/* 									<div class="btn-group pm-to">*/
/* 										<!-- IF to_recipient.IS_GROUP --><a href="{to_recipient.U_VIEW}" class="btn btn-sm btn-default"><strong>{to_recipient.NAME}</strong></a><!-- ELSE -->{to_recipient.NAME_FULL}<!-- ENDIF -->*/
/* 										<!-- IF not S_EDIT_POST --><input type="submit" name="remove_{to_recipient.TYPE}[{to_recipient.UG_ID}]" value="x" class="btn btn-sm btn-danger" /><!-- ENDIF -->*/
/* 									</div>*/
/* 								<!-- END to_recipient -->*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF .bcc_recipient -->*/
/* 					<div class="col-md-6">*/
/* 						<div class="row">*/
/* 							<label class="col-md-12">{L_BCC}{L_COLON}</label>*/
/* 							<div class="col-md-12">*/
/* 								<!-- BEGIN bcc_recipient -->*/
/* 									<div class="btn-group pm-to">*/
/* 										<!-- IF bcc_recipient.IS_GROUP --><a href="{bcc_recipient.U_VIEW}" class="btn btn-sm btn-default"><strong>{bcc_recipient.NAME}</strong></a><!-- ELSE -->{bcc_recipient.NAME_FULL}<!-- ENDIF -->*/
/* 										<!-- IF not S_EDIT_POST --><input type="submit" name="remove_{bcc_recipient.TYPE}[{bcc_recipient.UG_ID}]" value="x" class="btn btn-sm btn-danger" /><!-- ENDIF -->*/
/* 									</div>*/
/* 								<!-- END bcc_recipient -->*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				<!-- ENDIF -->*/
/* 			</div>*/
/* 		<!-- ELSE -->*/
/* 			<div class="form-group">*/
/* 				<label for="username_list" class="control-label col-md-4">{L_TO_ADD}{L_COLON}</label>*/
/* 				<div class="col-md-8">*/
/* 					<div class="input-group">*/
/* 						<input class="form-control" type="text" name="username_list" id="username_list" size="20" value="" /> <input type="submit" name="add_to" value="{L_ADD}" class="btn btn-success" />*/
/* 						<div class="input-group-btn">*/
/* 							<!-- IF not S_EDIT_POST --><a href="{U_FIND_USERNAME}" class="btn btn-default" onclick="find_username(this.href); return false">{L_FIND_USERNAME}</a><!-- ENDIF -->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- IF not S_EDIT_POST -->*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF .to_recipient -->*/
/* 				<ul class="recipients">*/
/* 					<!-- BEGIN to_recipient -->*/
/* 					<li>*/
/* 						<!-- IF to_recipient.IS_GROUP --><a href="{to_recipient.U_VIEW}"><strong>{to_recipient.NAME}</strong></a><!-- ELSE -->{to_recipient.NAME_FULL}<!-- ENDIF -->&nbsp;*/
/* 						<!-- IF not S_EDIT_POST --><input type="submit" name="remove_{to_recipient.TYPE}[{to_recipient.UG_ID}]" value="x" class="btn btn-danger" /><!-- ENDIF -->*/
/* 					</li>*/
/* 					<!-- END to_recipient -->*/
/* 				</ul>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* </fieldset>*/
/* */
