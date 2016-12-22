<?php

/* jumpbox.html */
class __TwigTemplate_dc118b7115c9a72524a29837c26297319ebcfa33b0f19e12417d3dcd8a88ce53 extends Twig_Template
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
        echo "<div class=\"jumpbox row\">
\t<div class=\"col-xs-6\">
\t\t";
        // line 3
        if ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
            // line 4
            echo "\t\t\t<a href=\"";
            echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
            echo "\" class=\"btn btn-default\" accesskey=\"r\">
\t\t\t\t<i class=\"fa fa-angle-";
            // line 5
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " fa-fw\" aria-hidden=\"true\"></i><span>";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_FORUM");
            echo "</span>
\t\t\t</a>
\t\t";
        } elseif (        // line 7
(isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null)) {
            // line 8
            echo "\t\t\t<a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" class=\"btn btn-default\" accesskey=\"r\">
\t\t\t\t<i class=\"fa fa-angle-";
            // line 9
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " fa-fw\" aria-hidden=\"true\"></i><span>";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_INDEX");
            echo "</span>
\t\t\t</a>
\t\t";
        } elseif (        // line 11
(isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 12
            echo "\t\t\t<a class=\"btn btn-default\" href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\" accesskey=\"r\">
\t\t\t\t<i class=\"fa fa-angle-";
            // line 13
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo " fa-fw\" aria-hidden=\"true\"></i><span>";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
            echo "</span>
\t\t\t</a>
\t\t";
        }
        // line 16
        echo "\t</div>
\t";
        // line 17
        if ((isset($context["S_DISPLAY_JUMPBOX"]) ? $context["S_DISPLAY_JUMPBOX"] : null)) {
            // line 18
            echo "\t\t<div class=\"col-xs-6\">
\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" title=\"";
            // line 20
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            echo "\" >
\t\t\t\t\t";
            // line 21
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            echo " <span class=\"caret\"></span>
\t\t\t\t</button>
\t\t\t\t<ul class=\"dropdown-menu\" role=\"menu\">
\t\t\t\t\t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "jumpbox_forums", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 25
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["jumpbox_forums"], "FORUM_ID", array()) !=  -1)) {
                    // line 26
                    echo "\t\t\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute($context["jumpbox_forums"], "LINK", array());
                    echo "\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["jumpbox_forums"], "level", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                        echo "&nbsp; &nbsp;";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo $this->getAttribute($context["jumpbox_forums"], "FORUM_NAME", array());
                    echo "</a></li>
\t\t\t\t\t\t";
                }
                // line 28
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 33,  126 => 29,  120 => 28,  104 => 26,  101 => 25,  97 => 24,  85 => 21,  75 => 20,  71 => 18,  69 => 17,  66 => 16,  58 => 13,  53 => 12,  51 => 11,  44 => 9,  39 => 8,  37 => 7,  30 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="jumpbox row">*/
/* 	<div class="col-xs-6">*/
/* 		<!-- IF S_VIEWTOPIC -->*/
/* 			<a href="{U_VIEW_FORUM}" class="btn btn-default" accesskey="r">*/
/* 				<i class="fa fa-angle-{S_CONTENT_FLOW_BEGIN} fa-fw" aria-hidden="true"></i><span>{L_RETURN_TO_FORUM}</span>*/
/* 			</a>*/
/* 		<!-- ELSEIF S_VIEWFORUM -->*/
/* 			<a href="{U_INDEX}" class="btn btn-default" accesskey="r">*/
/* 				<i class="fa fa-angle-{S_CONTENT_FLOW_BEGIN} fa-fw" aria-hidden="true"></i><span>{L_RETURN_TO_INDEX}</span>*/
/* 			</a>*/
/* 		<!-- ELSEIF SEARCH_TOPIC -->*/
/* 			<a class="btn btn-default" href="{U_SEARCH_TOPIC}" accesskey="r">*/
/* 				<i class="fa fa-angle-{S_CONTENT_FLOW_BEGIN} fa-fw" aria-hidden="true"></i><span>{L_RETURN_TO_TOPIC}</span>*/
/* 			</a>*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* 	<!-- IF S_DISPLAY_JUMPBOX -->*/
/* 		<div class="col-xs-6">*/
/* 			<div class="btn-group pull-right">*/
/* 				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" title="<!-- IF S_IN_MCP and S_MERGE_SELECT -->{L_SELECT_TOPICS_FROM}<!-- ELSEIF S_IN_MCP -->{L_MODERATE_FORUM}<!-- ELSE -->{L_JUMP_TO}<!-- ENDIF -->" >*/
/* 					<!-- IF S_IN_MCP and S_MERGE_SELECT -->{L_SELECT_TOPICS_FROM}<!-- ELSEIF S_IN_MCP -->{L_MODERATE_FORUM}<!-- ELSE -->{L_JUMP_TO}<!-- ENDIF --> <span class="caret"></span>*/
/* 				</button>*/
/* 				<ul class="dropdown-menu" role="menu">*/
/* 					<!-- BEGIN jumpbox_forums -->*/
/* 						<!-- IF jumpbox_forums.FORUM_ID neq -1 -->*/
/* 							<li><a href="{jumpbox_forums.LINK}"><!-- BEGIN level -->&nbsp; &nbsp;<!-- END level -->{jumpbox_forums.FORUM_NAME}</a></li>*/
/* 						<!-- ENDIF -->*/
/* 					<!-- END jumpbox_forums -->*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* </div>*/
/* */
