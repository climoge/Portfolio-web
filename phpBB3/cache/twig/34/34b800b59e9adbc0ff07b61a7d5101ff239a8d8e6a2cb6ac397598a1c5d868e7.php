<?php

/* ucp_header.html */
class __TwigTemplate_fe01358f6268f76f28638ebc5e10eefb1087b96012fc507cbf554fde61e462cc extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "ucp_header.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"page-header\">
\t<h2>";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("UCP");
        echo "</h2>
</div>

<div id=\"ucp-container\">
\t<ul class=\"nav nav-tabs nav-justified\">
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block1"]) {
            // line 10
            echo "\t\t<li role=\"presentation\" ";
            if ($this->getAttribute($context["t_block1"], "S_SELECTED", array())) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["t_block1"], "U_TITLE", array());
            echo "\"><span>";
            echo $this->getAttribute($context["t_block1"], "L_TITLE", array());
            echo "</span></a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t</ul>

\t<div class=\"well\" id=\"ucp-nav\">
\t\t";
        // line 15
        if ((isset($context["S_COMPOSE_PM"]) ? $context["S_COMPOSE_PM"] : null)) {
            // line 16
            echo "\t\t\t<form id=\"postform\" method=\"post\" action=\"";
            echo (isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null);
            echo "\"";
            echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
            echo ">
\t\t";
        }
        // line 18
        echo "\t\t<div class=\"row\">
\t\t\t<div id=\"cp-menu\" class=\"col-md-2\">
\t\t\t\t<div  id=\"navigation\" role=\"navigation\">
\t\t\t\t\t";
        // line 21
        if ((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) {
            // line 22
            echo "\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block2", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
                // line 24
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) &&  !$this->getAttribute($context["t_block2"], "S_LAST_ROW", array()))) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["t_block2"], "S_SELECTED", array())) {
                        // line 26
                        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"list-group-item active\" href=\"";
                        echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                        echo "\"><span>";
                        echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                        echo "</span></a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 28
                        echo "\t\t\t\t\t\t\t\t\t\t<a class=\"list-group-item\" href=\"";
                        echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                        echo "\"><span>";
                        echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                        echo "</span></a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 30
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 31
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "folder", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 35
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["folder"], "S_FIRST_ROW", array())) {
                }
                // line 36
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["folder"], "S_CUR_FOLDER", array())) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t<a class=\"list-group-item active\" href=\"";
                    echo $this->getAttribute($context["folder"], "U_FOLDER", array());
                    echo "\">";
                    if (($this->getAttribute($context["folder"], "UNREAD_MESSAGES", array()) > 0)) {
                        echo "<strong>";
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                        echo " (";
                        echo $this->getAttribute($context["folder"], "UNREAD_MESSAGES", array());
                        echo ")</strong>";
                    } else {
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                    }
                    echo "</a>
\t\t\t\t\t\t\t";
                } else {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t<a class=\"list-group-item\" href=\"";
                    echo $this->getAttribute($context["folder"], "U_FOLDER", array());
                    echo "\">";
                    if (($this->getAttribute($context["folder"], "UNREAD_MESSAGES", array()) > 0)) {
                        echo "<strong>";
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                        echo " (";
                        echo $this->getAttribute($context["folder"], "UNREAD_MESSAGES", array());
                        echo ")</strong>";
                    } else {
                        echo $this->getAttribute($context["folder"], "FOLDER_NAME", array());
                    }
                    echo "</a>
\t\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["folder"], "S_LAST_ROW", array())) {
                }
                // line 42
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t\t";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block2", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
            // line 47
            echo "\t\t\t\t\t\t\t";
            if ((((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) && $this->getAttribute($context["t_block2"], "S_LAST_ROW", array())) ||  !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null))) {
                // line 48
                echo "\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["t_block2"], "S_SELECTED", array())) {
                    // line 49
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"list-group-item active\" href=\"";
                    echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 50
                    echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                    echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"list-group-item\" href=\"";
                    echo $this->getAttribute($context["t_block2"], "U_TITLE", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 54
                    echo $this->getAttribute($context["t_block2"], "L_TITLE", array());
                    echo "
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 60
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_online", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline", array())))) {
            // line 61
            echo "\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 63
            echo $this->env->getExtension('phpbb')->lang("FRIENDS");
            echo "</h3>
\t\t\t\t\t\t\t";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_online", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_online"]) {
                // line 65
                echo "\t\t\t\t\t\t\t\t<div class=\"friend-online\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FRIENDS_ONLINE");
                echo "\">";
                echo $this->getAttribute($context["friends_online"], "USERNAME_FULL", array());
                echo " ";
                if ((isset($context["S_SHOW_PM_BOX"]) ? $context["S_SHOW_PM_BOX"] : null)) {
                    echo " <input type=\"submit\" name=\"add_to[";
                    echo $this->getAttribute($context["friends_online"], "USER_ID", array());
                    echo "]\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "\" class=\"btn btn-xs btn-success\" />";
                }
                if (($this->getAttribute($context["friends_online"], "S_LAST_ROW", array()) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline", array())))) {
                    echo "<hr />";
                }
                echo "</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_online'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_offline"]) {
                // line 68
                echo "\t\t\t\t\t\t\t\t<div class=\"friend-offline\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FRIENDS_OFFLINE");
                echo "\">";
                echo $this->getAttribute($context["friends_offline"], "USERNAME_FULL", array());
                echo " ";
                if ((isset($context["S_SHOW_PM_BOX"]) ? $context["S_SHOW_PM_BOX"] : null)) {
                    echo "<input type=\"submit\" name=\"add_to[";
                    echo $this->getAttribute($context["friends_offline"], "USER_ID", array());
                    echo "]\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "\" class=\"btn btn-xs btn-danger\" />";
                }
                echo "</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_offline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t";
        if ((isset($context["S_SHOW_COLOUR_LEGEND"]) ? $context["S_SHOW_COLOUR_LEGEND"] : null)) {
            // line 74
            echo "\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<h3 class=\"panel-title\">";
            // line 76
            echo $this->env->getExtension('phpbb')->lang("MESSAGE_COLOURS");
            echo "</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pm_colour_info", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pm_colour_info"]) {
                // line 80
                echo "\t\t\t\t\t\t\t\t<div class=\"pm-legend";
                if ($this->getAttribute($context["pm_colour_info"], "CLASS", array())) {
                    echo " ";
                    echo $this->getAttribute($context["pm_colour_info"], "CLASS", array());
                }
                echo "\">";
                if ($this->getAttribute($context["pm_colour_info"], "IMG", array())) {
                    echo $this->getAttribute($context["pm_colour_info"], "IMG", array());
                    echo " ";
                }
                echo "<small>";
                echo $this->getAttribute($context["pm_colour_info"], "LANG", array());
                echo "</small></div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_colour_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"cp-main\" class=\"ucp-main panel-container col-md-10\">
";
    }

    public function getTemplateName()
    {
        return "ucp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 85,  331 => 82,  312 => 80,  308 => 79,  302 => 76,  298 => 74,  295 => 73,  290 => 70,  271 => 68,  266 => 67,  244 => 65,  240 => 64,  236 => 63,  232 => 61,  230 => 60,  227 => 59,  221 => 58,  218 => 57,  212 => 54,  207 => 53,  201 => 50,  196 => 49,  193 => 48,  190 => 47,  186 => 46,  183 => 45,  179 => 43,  173 => 42,  169 => 41,  153 => 39,  137 => 37,  134 => 36,  130 => 35,  126 => 34,  122 => 32,  116 => 31,  113 => 30,  105 => 28,  97 => 26,  94 => 25,  91 => 24,  87 => 23,  84 => 22,  82 => 21,  77 => 18,  69 => 16,  67 => 15,  62 => 12,  47 => 10,  43 => 9,  35 => 4,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <div class="page-header">*/
/* 	<h2>{L_UCP}</h2>*/
/* </div>*/
/* */
/* <div id="ucp-container">*/
/* 	<ul class="nav nav-tabs nav-justified">*/
/* 		<!-- BEGIN t_block1 -->*/
/* 		<li role="presentation" <!-- IF t_block1.S_SELECTED -->class="active"<!-- ENDIF -->><a href="{t_block1.U_TITLE}"><span>{t_block1.L_TITLE}</span></a></li>*/
/* 		<!-- END t_block1 -->*/
/* 	</ul>*/
/* */
/* 	<div class="well" id="ucp-nav">*/
/* 		<!-- IF S_COMPOSE_PM -->*/
/* 			<form id="postform" method="post" action="{S_POST_ACTION}"{S_FORM_ENCTYPE}>*/
/* 		<!-- ENDIF -->*/
/* 		<div class="row">*/
/* 			<div id="cp-menu" class="col-md-2">*/
/* 				<div  id="navigation" role="navigation">*/
/* 					<!-- IF S_PRIVMSGS -->*/
/* 						<div class="list-group">*/
/* 							<!-- BEGIN t_block2 -->*/
/* 								<!-- IF S_PRIVMSGS and not t_block2.S_LAST_ROW -->*/
/* 									<!-- IF t_block2.S_SELECTED -->*/
/* 										<a class="list-group-item active" href="{t_block2.U_TITLE}"><span>{t_block2.L_TITLE}</span></a>*/
/* 									<!-- ELSE -->*/
/* 										<a class="list-group-item" href="{t_block2.U_TITLE}"><span>{t_block2.L_TITLE}</span></a>*/
/* 									<!-- ENDIF -->*/
/* 								<!-- ENDIF -->*/
/* 							<!-- END t_block2 -->*/
/* 						</div>*/
/* 						<div class="list-group">*/
/* 						<!-- BEGIN folder -->*/
/* 							<!-- IF folder.S_FIRST_ROW --><!-- ENDIF -->*/
/* 							<!-- IF folder.S_CUR_FOLDER -->*/
/* 								<a class="list-group-item active" href="{folder.U_FOLDER}"><!-- IF folder.UNREAD_MESSAGES > 0 --><strong>{folder.FOLDER_NAME} ({folder.UNREAD_MESSAGES})</strong><!-- ELSE -->{folder.FOLDER_NAME}<!-- ENDIF --></a>*/
/* 							<!-- ELSE -->*/
/* 								<a class="list-group-item" href="{folder.U_FOLDER}"><!-- IF  folder.UNREAD_MESSAGES > 0 --><strong>{folder.FOLDER_NAME} ({folder.UNREAD_MESSAGES})</strong><!-- ELSE -->{folder.FOLDER_NAME}<!-- ENDIF --></a>*/
/* 							<!-- ENDIF -->*/
/* 							<!-- IF folder.S_LAST_ROW --><!-- ENDIF -->*/
/* 						<!-- END folder -->*/
/* 						</div>*/
/* 					<!-- ENDIF -->*/
/* 					<div class="list-group">*/
/* 						<!-- BEGIN t_block2 -->*/
/* 							<!-- IF (S_PRIVMSGS and t_block2.S_LAST_ROW) or not S_PRIVMSGS -->*/
/* 								<!-- IF t_block2.S_SELECTED -->*/
/* 									<a class="list-group-item active" href="{t_block2.U_TITLE}">*/
/* 										{t_block2.L_TITLE}*/
/* 									</a>*/
/* 								<!-- ELSE -->*/
/* 									<a class="list-group-item" href="{t_block2.U_TITLE}">*/
/* 										{t_block2.L_TITLE}*/
/* 									</a>*/
/* 								<!-- ENDIF -->*/
/* 							<!-- ENDIF -->*/
/* 						<!-- END t_block2 -->*/
/* 					</div>*/
/* 					<!-- IF .friends_online or .friends_offline -->*/
/* 					<div class="panel panel-default">*/
/* 						<div class="panel-heading">*/
/* 							<h3 class="panel-title">{L_FRIENDS}</h3>*/
/* 							<!-- BEGIN friends_online -->*/
/* 								<div class="friend-online" title="{L_FRIENDS_ONLINE}">{friends_online.USERNAME_FULL} <!-- IF S_SHOW_PM_BOX --> <input type="submit" name="add_to[{friends_online.USER_ID}]" value="{L_ADD}" class="btn btn-xs btn-success" /><!-- ENDIF --><!-- IF friends_online.S_LAST_ROW and .friends_offline --><hr /><!-- ENDIF --></div>*/
/* 							<!-- END friends_online -->*/
/* 							<!-- BEGIN friends_offline -->*/
/* 								<div class="friend-offline" title="{L_FRIENDS_OFFLINE}">{friends_offline.USERNAME_FULL} <!-- IF S_SHOW_PM_BOX --><input type="submit" name="add_to[{friends_offline.USER_ID}]" value="{L_ADD}" class="btn btn-xs btn-danger" /><!-- ENDIF --></div>*/
/* 							<!-- END friends_offline -->*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF S_SHOW_COLOUR_LEGEND -->*/
/* 					<div class="panel panel-default">*/
/* 						<div class="panel-heading">*/
/* 							<h3 class="panel-title">{L_MESSAGE_COLOURS}</h3>*/
/* 						</div>*/
/* 						<div class="panel-body">*/
/* 							<!-- BEGIN pm_colour_info -->*/
/* 								<div class="pm-legend<!-- IF pm_colour_info.CLASS --> {pm_colour_info.CLASS}<!-- ENDIF -->"><!-- IF pm_colour_info.IMG -->{pm_colour_info.IMG} <!-- ENDIF --><small>{pm_colour_info.LANG}</small></div>*/
/* 							<!-- END pm_colour_info -->*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 			</div>*/
/* 			<div id="cp-main" class="ucp-main panel-container col-md-10">*/
/* */
