<?php

/* memberlist_team.html */
class __TwigTemplate_2e4f5602c4eff973d95f0dccd22d7a713bb1dc6ce78da51d6275bcbbd6fce752 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "memberlist_team.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"solo\">";
        // line 3
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</h2>

<form method=\"post\" action=\"";
        // line 5
        echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
        echo "\">
\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "group", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 7
            echo "\t<div class=\"forumbg forumbg-table\">
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-striped table-bordered\" id=\"team\">
\t\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"name\" data-dfn=\"";
            // line 12
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo "\"><span class=\"rank-img pull-right\">";
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo "&nbsp;</span>";
            if ($this->getAttribute($context["group"], "U_GROUP", array())) {
                echo "<a href=\"";
                echo $this->getAttribute($context["group"], "U_GROUP", array());
                echo "\">";
                echo $this->getAttribute($context["group"], "GROUP_NAME", array());
                echo "</a>";
            } else {
                echo $this->getAttribute($context["group"], "GROUP_NAME", array());
            }
            echo "</th>
\t\t\t\t\t<th class=\"infos\">";
            // line 13
            echo $this->env->getExtension('phpbb')->lang("PRIMARY_GROUP");
            echo "</th>
\t\t\t\t\t";
            // line 14
            if ((isset($context["S_DISPLAY_MODERATOR_FORUMS"]) ? $context["S_DISPLAY_MODERATOR_FORUMS"] : null)) {
                echo "<th class=\"infos\">";
                echo $this->env->getExtension('phpbb')->lang("MODERATOR");
                echo "</th>";
            }
            // line 15
            echo "\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "user", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 19
                echo "\t\t\t\t\t\t<tr ";
                if ($this->getAttribute($context["user"], "S_INACTIVE", array())) {
                    echo "class=\"danger\"";
                }
                echo ">
\t\t\t\t\t\t\t<td>";
                // line 20
                if ($this->getAttribute($context["user"], "RANK_IMG", array())) {
                    echo "<span class=\"rank-img pull-right\">";
                    echo $this->getAttribute($context["user"], "RANK_IMG", array());
                    echo "</span>";
                } else {
                    echo "<span class=\"rank-img pull-right\">";
                    echo $this->getAttribute($context["user"], "RANK_TITLE", array());
                    echo "</span>";
                }
                echo $this->getAttribute($context["user"], "USERNAME_FULL", array());
                if ($this->getAttribute($context["user"], "S_INACTIVE", array())) {
                    echo " (";
                    echo $this->env->getExtension('phpbb')->lang("INACTIVE");
                    echo ")";
                }
                echo "</td>
\t\t\t\t\t\t\t<td class=\"infos\">";
                // line 21
                if ($this->getAttribute($context["user"], "U_GROUP", array())) {
                    // line 22
                    echo "\t\t\t\t\t\t\t\t<a";
                    if ($this->getAttribute($context["user"], "GROUP_COLOR", array())) {
                        echo " style=\"font-weight: bold; color: #";
                        echo $this->getAttribute($context["user"], "GROUP_COLOR", array());
                        echo "\"";
                    }
                    echo " href=\"";
                    echo $this->getAttribute($context["user"], "U_GROUP", array());
                    echo "\">";
                    echo $this->getAttribute($context["user"], "GROUP_NAME", array());
                    echo "</a>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 24
                    echo "\t\t\t\t\t\t\t\t\t";
                    echo $this->getAttribute($context["user"], "GROUP_NAME", array());
                    echo "
\t\t\t\t\t\t\t\t";
                }
                // line 25
                echo "</td>
\t\t\t\t\t\t\t";
                // line 26
                if ((isset($context["S_DISPLAY_MODERATOR_FORUMS"]) ? $context["S_DISPLAY_MODERATOR_FORUMS"] : null)) {
                    // line 27
                    echo "\t\t\t\t\t\t\t\t<td class=\"infos\">";
                    if ($this->getAttribute($context["user"], "FORUM_OPTIONS", array())) {
                        echo "<select style=\"width: 100%;\">";
                        echo $this->getAttribute($context["user"], "FORUMS", array());
                        echo "</select>";
                    } elseif ($this->getAttribute($context["user"], "FORUMS", array())) {
                        echo $this->getAttribute($context["user"], "FORUMS", array());
                    } else {
                        echo "-";
                    }
                    echo "</td>
\t\t\t\t\t\t\t";
                }
                // line 29
                echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 31
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td colspan=\"3\"><strong>";
                // line 32
                echo $this->env->getExtension('phpbb')->lang("NO_MEMBERS");
                echo "</strong></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</form>

";
        // line 42
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_team.html", 42)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 43
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_team.html", 43)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_team.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 43,  190 => 42,  186 => 40,  176 => 35,  167 => 32,  164 => 31,  158 => 29,  144 => 27,  142 => 26,  139 => 25,  133 => 24,  119 => 22,  117 => 21,  99 => 20,  92 => 19,  87 => 18,  82 => 15,  76 => 14,  72 => 13,  54 => 12,  47 => 7,  43 => 6,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <h2 class="solo">{PAGE_TITLE}</h2>*/
/* */
/* <form method="post" action="{S_MODE_ACTION}">*/
/* 	<!-- BEGIN group -->*/
/* 	<div class="forumbg forumbg-table">*/
/* 		<div class="table-responsive">*/
/* 			<table class="table table-striped table-bordered" id="team">*/
/* 				<thead>*/
/* 				<tr>*/
/* 					<th class="name" data-dfn="{L_RANK}{L_COMMA_SEPARATOR}{L_USERNAME}"><span class="rank-img pull-right">{L_RANK}&nbsp;</span><!-- IF group.U_GROUP --><a href="{group.U_GROUP}">{group.GROUP_NAME}</a><!-- ELSE -->{group.GROUP_NAME}<!-- ENDIF --></th>*/
/* 					<th class="infos">{L_PRIMARY_GROUP}</th>*/
/* 					<!-- IF S_DISPLAY_MODERATOR_FORUMS --><th class="infos">{L_MODERATOR}</th><!-- ENDIF -->*/
/* 				</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 					<!-- BEGIN user -->*/
/* 						<tr <!-- IF group.user.S_INACTIVE -->class="danger"<!-- ENDIF -->>*/
/* 							<td><!-- IF group.user.RANK_IMG --><span class="rank-img pull-right">{group.user.RANK_IMG}</span><!-- ELSE --><span class="rank-img pull-right">{group.user.RANK_TITLE}</span><!-- ENDIF -->{group.user.USERNAME_FULL}<!-- IF group.user.S_INACTIVE --> ({L_INACTIVE})<!-- ENDIF --></td>*/
/* 							<td class="infos"><!-- IF group.user.U_GROUP -->*/
/* 								<a<!-- IF group.user.GROUP_COLOR --> style="font-weight: bold; color: #{group.user.GROUP_COLOR}"<!-- ENDIF --> href="{group.user.U_GROUP}">{group.user.GROUP_NAME}</a>*/
/* 								<!-- ELSE -->*/
/* 									{group.user.GROUP_NAME}*/
/* 								<!-- ENDIF --></td>*/
/* 							<!-- IF S_DISPLAY_MODERATOR_FORUMS -->*/
/* 								<td class="infos"><!-- IF group.user.FORUM_OPTIONS --><select style="width: 100%;">{group.user.FORUMS}</select><!-- ELSEIF group.user.FORUMS -->{group.user.FORUMS}<!-- ELSE -->-<!-- ENDIF --></td>*/
/* 							<!-- ENDIF -->*/
/* 						</tr>*/
/* 					<!-- BEGINELSE -->*/
/* 						<tr>*/
/* 							<td colspan="3"><strong>{L_NO_MEMBERS}</strong></td>*/
/* 						</tr>*/
/* 					<!-- END user -->*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- END group -->*/
/* </form>*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
