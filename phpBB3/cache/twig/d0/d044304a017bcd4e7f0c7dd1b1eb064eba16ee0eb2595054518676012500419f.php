<?php

/* ucp_pm_message_header.html */
class __TwigTemplate_eab575601940137ca050928b25533fa6fa3f8dcbef29d0f430fdf077504a4b22 extends Twig_Template
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
        echo "<form id=\"viewfolder\" method=\"post\" action=\"";
        echo (isset($context["S_PM_ACTION"]) ? $context["S_PM_ACTION"] : null);
        echo "\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        if ((isset($context["CUR_FOLDER_NAME"]) ? $context["CUR_FOLDER_NAME"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["CUR_FOLDER_NAME"]) ? $context["CUR_FOLDER_NAME"] : null);
        }
        echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t";
        // line 7
        if (((isset($context["FOLDER_STATUS"]) ? $context["FOLDER_STATUS"] : null) && ((isset($context["FOLDER_MAX_MESSAGES"]) ? $context["FOLDER_MAX_MESSAGES"] : null) != 0))) {
            echo "<div class=\"alert alert-info\">";
            echo (isset($context["FOLDER_STATUS"]) ? $context["FOLDER_STATUS"] : null);
            echo "</div>";
        }
        // line 8
        echo "\t\t\t";
        if (((isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null) || ((isset($context["FOLDER_CUR_MESSAGES"]) ? $context["FOLDER_CUR_MESSAGES"] : null) != 0))) {
            // line 9
            echo "\t\t\t\t<div class=\"text-center row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t";
            // line 12
            if ((isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null)) {
                // line 13
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-sm\" href=\"";
                echo (isset($context["U_CURRENT_FOLDER"]) ? $context["U_CURRENT_FOLDER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RETURN_TO_FOLDER");
                echo "</a>
\t\t\t\t\t\t\t";
            } elseif ((            // line 14
(isset($context["FOLDER_CUR_MESSAGES"]) ? $context["FOLDER_CUR_MESSAGES"] : null) != 0)) {
                // line 15
                echo "\t\t\t\t\t\t\t\t";
                if ((isset($context["U_MARK_ALL"]) ? $context["U_MARK_ALL"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_MARK_ALL"]) ? $context["U_MARK_ALL"] : null);
                    echo "\" class=\"btn btn-success btn-sm\">";
                    echo $this->env->getExtension('phpbb')->lang("PM_MARK_ALL_READ");
                    echo "</a>";
                }
                // line 16
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                echo (isset($context["TOTAL_MESSAGES"]) ? $context["TOTAL_MESSAGES"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t";
                // line 17
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    // line 18
                    echo "\t\t\t\t\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_pm_message_header.html", 18)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 19
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 20
                    echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "</a>
\t\t\t\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t\t\t\t";
            }
            // line 23
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 27
        echo "\t\t\t";
        if (((((isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null) || (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null)) || (isset($context["U_FORWARD_PM"]) ? $context["U_FORWARD_PM"] : null)) || (isset($context["U_PRINT_PM"]) ? $context["U_PRINT_PM"] : null))) {
            // line 28
            echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t";
            // line 30
            if ((((isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null) || (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null)) || (isset($context["U_FORWARD_PM"]) ? $context["U_FORWARD_PM"] : null))) {
                // line 31
                echo "\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t";
                // line 32
                if ((isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null)) {
                    echo "<a class=\"btn btn-success\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POST_REPLY_PM");
                    echo "\" href=\"";
                    echo (isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null);
                    echo "\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_REPLY");
                    echo "</span> <i class=\"fa fa-reply fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t";
                } elseif (                // line 33
(isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null)) {
                    echo "<a class=\"btn btn-success\" href=\"";
                    echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                    echo "\" accesskey=\"n\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("UCP_PM_COMPOSE");
                    echo "\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_NEW");
                    echo "</span> <i class=\"fa fa-pencil fa-fw\" aria-hidden=\"true\"></i></a>";
                }
                // line 34
                echo "\t\t\t\t\t\t\t\t";
                if ((isset($context["U_FORWARD_PM"]) ? $context["U_FORWARD_PM"] : null)) {
                    echo "<a class=\"btn btn-info\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POST_FORWARD_PM");
                    echo "\" href=\"";
                    echo (isset($context["U_FORWARD_PM"]) ? $context["U_FORWARD_PM"] : null);
                    echo "\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_FORWARD");
                    echo "</span> <i class=\"fa fa-mail-forward fa-fw\" aria-hidden=\"true\"></i></a>";
                }
                // line 35
                echo "\t\t\t\t\t\t\t\t";
                if (((isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null) && ((isset($context["S_PM_RECIPIENTS"]) ? $context["S_PM_RECIPIENTS"] : null) > 1))) {
                    echo "<a class=\"btn btn-default\" class=\"left\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("REPLY_TO_ALL");
                    echo "\" href=\"";
                    echo (isset($context["U_POST_REPLY_ALL"]) ? $context["U_POST_REPLY_ALL"] : null);
                    echo "\"><span>";
                    echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_REPLY_ALL");
                    echo "</span> <i class=\"fa fa-pencil fa-fw\" aria-hidden=\"true\"></i></a>";
                }
                // line 36
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t";
            if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_PRINT_PM"]) ? $context["U_PRINT_PM"] : null))) {
                // line 39
                echo "\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle\" title=\"";
                // line 40
                echo $this->env->getExtension('phpbb')->lang("PM_TOOLS");
                echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-wrench fa-fw\" aria-hidden=\"true\"></i> <span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t";
                // line 44
                if ((isset($context["U_PRINT_PM"]) ? $context["U_PRINT_PM"] : null)) {
                    echo "<li><a href=\"";
                    echo (isset($context["U_PRINT_PM"]) ? $context["U_PRINT_PM"] : null);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("PRINT_PM");
                    echo "\" accesskey=\"p\"><i class=\"fa fa-print fa-fw\" aria-hidden=\"true\"></i><span>";
                    echo $this->env->getExtension('phpbb')->lang("PRINT_PM");
                    echo "</span></a></li>";
                }
                // line 45
                echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_message_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 48,  190 => 45,  180 => 44,  173 => 40,  170 => 39,  167 => 38,  163 => 36,  152 => 35,  141 => 34,  131 => 33,  121 => 32,  118 => 31,  116 => 30,  112 => 28,  109 => 27,  103 => 23,  100 => 22,  94 => 20,  91 => 19,  78 => 18,  76 => 17,  71 => 16,  62 => 15,  60 => 14,  53 => 13,  51 => 12,  46 => 9,  43 => 8,  37 => 7,  26 => 4,  19 => 1,);
    }
}
/* <form id="viewfolder" method="post" action="{S_PM_ACTION}">*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title">{L_TITLE}<!-- IF CUR_FOLDER_NAME -->{L_COLON} {CUR_FOLDER_NAME}<!-- ENDIF --></h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<!-- IF FOLDER_STATUS and FOLDER_MAX_MESSAGES neq 0 --><div class="alert alert-info">{FOLDER_STATUS}</div><!-- ENDIF -->*/
/* 			<!-- IF S_VIEW_MESSAGE or FOLDER_CUR_MESSAGES neq 0 -->*/
/* 				<div class="text-center row">*/
/* 					<div class="col-md-12">*/
/* 						<div class="btn-group">*/
/* 							<!-- IF S_VIEW_MESSAGE -->*/
/* 								<a class="btn btn-primary btn-sm" href="{U_CURRENT_FOLDER}">{L_RETURN_TO_FOLDER}</a>*/
/* 							<!-- ELSEIF FOLDER_CUR_MESSAGES neq 0 -->*/
/* 								<!-- IF U_MARK_ALL --><a href="{U_MARK_ALL}" class="btn btn-success btn-sm">{L_PM_MARK_ALL_READ}</a><!-- ENDIF -->*/
/* 								<a class="btn btn-default btn-sm disabled">{TOTAL_MESSAGES}</a>*/
/* 								<!-- IF .pagination -->*/
/* 									<!-- INCLUDE pagination.html -->*/
/* 								<!-- ELSE -->*/
/* 									<a class="btn btn-default btn-sm disabled">{PAGE_NUMBER}</a>*/
/* 								<!-- ENDIF -->*/
/* 							<!-- ENDIF -->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF U_POST_REPLY_PM or U_POST_NEW_TOPIC or U_FORWARD_PM or U_PRINT_PM -->*/
/* 				<div class="row">*/
/* 					<div class="col-md-12">*/
/* 						<!-- IF U_POST_REPLY_PM or U_POST_NEW_TOPIC or U_FORWARD_PM -->*/
/* 							<div class="btn-group">*/
/* 								<!-- IF U_POST_REPLY_PM --><a class="btn btn-success" title="{L_POST_REPLY_PM}" href="{U_POST_REPLY_PM}"><span>{L_BUTTON_PM_REPLY}</span> <i class="fa fa-reply fa-fw" aria-hidden="true"></i></a>*/
/* 								<!-- ELSEIF U_POST_NEW_TOPIC --><a class="btn btn-success" href="{U_POST_NEW_TOPIC}" accesskey="n" title="{L_UCP_PM_COMPOSE}"><span>{L_BUTTON_PM_NEW}</span> <i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a><!-- ENDIF -->*/
/* 								<!-- IF U_FORWARD_PM --><a class="btn btn-info" title="{L_POST_FORWARD_PM}" href="{U_FORWARD_PM}"><span>{L_BUTTON_PM_FORWARD}</span> <i class="fa fa-mail-forward fa-fw" aria-hidden="true"></i></a><!-- ENDIF -->*/
/* 								<!-- IF U_POST_REPLY_PM and S_PM_RECIPIENTS gt 1 --><a class="btn btn-default" class="left" title="{L_REPLY_TO_ALL}" href="{U_POST_REPLY_ALL}"><span>{L_BUTTON_PM_REPLY_ALL}</span> <i class="fa fa-pencil fa-fw" aria-hidden="true"></i></a><!-- ENDIF -->*/
/* 							</div>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF not S_IS_BOT and U_PRINT_PM -->*/
/* 							<div class="btn-group">*/
/* 								<button type="button" class="btn btn-default dropdown-toggle" title="{L_PM_TOOLS}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/* 									<i class="fa fa-wrench fa-fw" aria-hidden="true"></i> <span class="caret"></span>*/
/* 								</button>*/
/* 								<ul class="dropdown-menu">*/
/* 									<!-- IF U_PRINT_PM --><li><a href="{U_PRINT_PM}" title="{L_PRINT_PM}" accesskey="p"><i class="fa fa-print fa-fw" aria-hidden="true"></i><span>{L_PRINT_PM}</span></a></li><!-- ENDIF -->*/
/* 								</ul>*/
/* 							</div>*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* */
