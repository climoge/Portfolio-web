<?php

/* display_options.html */
class __TwigTemplate_fb217a8e5881c845a7ccc583351659195c1bf8336653971f941ac16f93b19be4 extends Twig_Template
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
        echo "<fieldset class=\"display-options well well-sm text-center\">
\t";
        // line 2
        if (((isset($context["DISPLAY_OPTIONS_PREV_NEXT"]) ? $context["DISPLAY_OPTIONS_PREV_NEXT"] : null) == 1)) {
            // line 3
            echo "\t\t";
            if ((isset($context["PREVIOUS_PAGE"]) ? $context["PREVIOUS_PAGE"] : null)) {
                echo "<a href=\"";
                echo (isset($context["PREVIOUS_PAGE"]) ? $context["PREVIOUS_PAGE"] : null);
                echo "\" class=\"left-box ";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("PREVIOUS");
                echo "</a>";
            }
            // line 4
            echo "\t\t";
            if ((isset($context["NEXT_PAGE"]) ? $context["NEXT_PAGE"] : null)) {
                echo "<a href=\"";
                echo (isset($context["NEXT_PAGE"]) ? $context["NEXT_PAGE"] : null);
                echo "\" class=\"right-box ";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("NEXT");
                echo "</a>";
            }
            // line 5
            echo "\t\t<label>";
            echo $this->env->getExtension('phpbb')->lang("DISPLAY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
            echo "</label>
\t\t<label>";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo " ";
            echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
            echo "</label>
\t\t<label>";
            // line 7
            echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
            echo " <input type=\"submit\" name=\"sort\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"btn btn-default\" /></label>
\t";
        } elseif ((        // line 8
(isset($context["DISPLAY_OPTIONS_MCP_TOPICS"]) ? $context["DISPLAY_OPTIONS_MCP_TOPICS"] : null) == 1)) {
            // line 9
            echo "\t\t<label>";
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
            echo "</label>
\t\t<label>";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo " ";
            echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
            echo "</label>
\t\t<label>";
            // line 11
            echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
            echo "</label>
\t\t";
            // line 12
            if ((isset($context["TOPIC_ID"]) ? $context["TOPIC_ID"] : null)) {
                echo "<label class=\"inline-checkbox\"><input type=\"checkbox\" name=\"t\" value=\"";
                echo (isset($context["TOPIC_ID"]) ? $context["TOPIC_ID"] : null);
                echo "\" checked=\"checked\" /><strong>";
                echo $this->env->getExtension('phpbb')->lang("ONLY_TOPIC");
                echo "</strong></label>";
            }
            // line 13
            echo "\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"sort\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" />
\t";
        } else {
            // line 15
            echo "\t\t<label>";
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
            echo "</label>
\t\t<label>";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("SORT_BY");
            echo " ";
            echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
            echo "</label>
\t\t<label>";
            // line 17
            echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
            echo "</label>
\t\t<input class=\"btn btn-default\" type=\"submit\" name=\"sort\" value=\"";
            // line 18
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" />
\t";
        }
        // line 20
        echo "</fieldset>";
    }

    public function getTemplateName()
    {
        return "display_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 20,  118 => 18,  114 => 17,  108 => 16,  100 => 15,  94 => 13,  86 => 12,  82 => 11,  76 => 10,  68 => 9,  66 => 8,  60 => 7,  54 => 6,  46 => 5,  35 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <fieldset class="display-options well well-sm text-center">*/
/* 	<!-- IF DISPLAY_OPTIONS_PREV_NEXT == 1 -->*/
/* 		<!-- IF PREVIOUS_PAGE --><a href="{PREVIOUS_PAGE}" class="left-box {S_CONTENT_FLOW_BEGIN}">{L_PREVIOUS}</a><!-- ENDIF -->*/
/* 		<!-- IF NEXT_PAGE --><a href="{NEXT_PAGE}" class="right-box {S_CONTENT_FLOW_END}">{L_NEXT}</a><!-- ENDIF -->*/
/* 		<label>{L_DISPLAY}{L_COLON} {S_SELECT_SORT_DAYS}</label>*/
/* 		<label>{L_SORT_BY} {S_SELECT_SORT_KEY}</label>*/
/* 		<label>{S_SELECT_SORT_DIR} <input type="submit" name="sort" value="{L_GO}" class="btn btn-default" /></label>*/
/* 	<!-- ELSEIF DISPLAY_OPTIONS_MCP_TOPICS == 1 -->*/
/* 		<label>{L_DISPLAY_POSTS}{L_COLON} {S_SELECT_SORT_DAYS}</label>*/
/* 		<label>{L_SORT_BY} {S_SELECT_SORT_KEY}</label>*/
/* 		<label>{S_SELECT_SORT_DIR}</label>*/
/* 		<!-- IF TOPIC_ID --><label class="inline-checkbox"><input type="checkbox" name="t" value="{TOPIC_ID}" checked="checked" /><strong>{L_ONLY_TOPIC}</strong></label><!-- ENDIF -->*/
/* 		<input class="btn btn-default" type="submit" name="sort" value="{L_GO}" />*/
/* 	<!-- ELSE -->*/
/* 		<label>{L_DISPLAY_POSTS}{L_COLON} {S_SELECT_SORT_DAYS}</label>*/
/* 		<label>{L_SORT_BY} {S_SELECT_SORT_KEY}</label>*/
/* 		<label>{S_SELECT_SORT_DIR}</label>*/
/* 		<input class="btn btn-default" type="submit" name="sort" value="{L_GO}" />*/
/* 	<!-- ENDIF -->*/
/* </fieldset>*/
