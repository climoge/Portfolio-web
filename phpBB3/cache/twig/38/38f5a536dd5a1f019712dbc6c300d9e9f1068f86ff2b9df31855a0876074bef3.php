<?php

/* timezone_option.html */
class __TwigTemplate_8a71f1dbf057ef380e8e2016bb8dfa6cb10435efba678eef50da2aed00989a8a extends Twig_Template
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
        echo "<div class=\"form-group\">
\t<label for=\"timezone\" class=\"form-label col-md-4\">
\t\t";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("BOARD_TIMEZONE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "
\t</label>

\t<div class=\"col-md-8\">

\t\t";
        // line 8
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "timezone_date", array()))) {
            // line 9
            echo "\t\t<div id=\"tz_select_date\" style=\"display: none;\" class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<select name=\"tz_date\" id=\"tz_date\" class=\"form-control no-selectpicker tz_select\">
\t\t\t\t\t<option value=\"\">";
            // line 12
            echo $this->env->getExtension('phpbb')->lang("SELECT_CURRENT_TIME");
            echo "</option>
\t\t\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "timezone_date", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["timezone_date"]) {
                // line 14
                echo "\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["timezone_date"], "VALUE", array());
                echo "\"";
                if ($this->getAttribute($context["timezone_date"], "SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["timezone_date"], "TITLE", array());
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<input type=\"button\" id=\"tz_select_date_suggest\" class=\"btn btn-default\" style=\"display: none;\" timezone-preselect=\"";
            // line 19
            if ((isset($context["S_TZ_PRESELECT"]) ? $context["S_TZ_PRESELECT"] : null)) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" data-l-suggestion=\"";
            echo $this->env->getExtension('phpbb')->lang("TIMEZONE_DATE_SUGGESTION");
            echo "\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("TIMEZONE_DATE_SUGGESTION");
            echo "\" />
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 23
        echo "\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<select name=\"tz\" id=\"timezone\" class=\"form-control no-selectpicker tz_select\">
\t\t\t\t\t<option value=\"\">";
        // line 26
        echo $this->env->getExtension('phpbb')->lang("SELECT_TIMEZONE");
        echo "</option>
\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "timezone_select", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone_select"]) {
            // line 28
            echo "\t\t\t\t\t\t<optgroup label=\"";
            echo $this->getAttribute($context["timezone_select"], "LABEL", array());
            echo "\" data-tz-value=\"";
            echo $this->getAttribute($context["timezone_select"], "VALUE", array());
            echo "\">
\t\t\t\t\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["timezone_select"], "timezone_options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["timezone_options"]) {
                // line 30
                echo "\t\t\t\t\t\t\t<option title=\"";
                echo $this->getAttribute($context["timezone_options"], "TITLE", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["timezone_options"], "VALUE", array());
                echo "\"";
                if ($this->getAttribute($context["timezone_options"], "SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["timezone_options"], "LABEL", array());
                echo "</option>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t\t\t</optgroup>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_select'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "\t\t\t\t</select>
\t\t\t</div>

\t\t\t";
        // line 37
        $asset_file = "timezone.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('23');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 38
        echo "\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "timezone_option.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 38,  135 => 37,  130 => 34,  123 => 32,  106 => 30,  102 => 29,  95 => 28,  91 => 27,  87 => 26,  82 => 23,  67 => 19,  62 => 16,  47 => 14,  43 => 13,  39 => 12,  34 => 9,  32 => 8,  23 => 3,  19 => 1,);
    }
}
/* <div class="form-group">*/
/* 	<label for="timezone" class="form-label col-md-4">*/
/* 		{L_BOARD_TIMEZONE}{L_COLON}*/
/* 	</label>*/
/* */
/* 	<div class="col-md-8">*/
/* */
/* 		<!-- IF .timezone_date -->*/
/* 		<div id="tz_select_date" style="display: none;" class="row">*/
/* 			<div class="col-md-6">*/
/* 				<select name="tz_date" id="tz_date" class="form-control no-selectpicker tz_select">*/
/* 					<option value="">{L_SELECT_CURRENT_TIME}</option>*/
/* 					<!-- BEGIN timezone_date -->*/
/* 						<option value="{timezone_date.VALUE}"<!-- IF timezone_date.SELECTED --> selected="selected"<!-- ENDIF -->>{timezone_date.TITLE}</option>*/
/* 					<!-- END timezone_date -->*/
/* 				</select>*/
/* 			</div>*/
/* 			<div class="col-md-6">*/
/* 				<input type="button" id="tz_select_date_suggest" class="btn btn-default" style="display: none;" timezone-preselect="<!-- IF S_TZ_PRESELECT -->true<!-- ELSE -->false<!-- ENDIF -->" data-l-suggestion="{L_TIMEZONE_DATE_SUGGESTION}" value="{L_TIMEZONE_DATE_SUGGESTION}" />*/
/* 			</div>*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 		<div class="row">*/
/* 			<div class="col-md-6">*/
/* 				<select name="tz" id="timezone" class="form-control no-selectpicker tz_select">*/
/* 					<option value="">{L_SELECT_TIMEZONE}</option>*/
/* 					<!-- BEGIN timezone_select -->*/
/* 						<optgroup label="{timezone_select.LABEL}" data-tz-value="{timezone_select.VALUE}">*/
/* 							<!-- BEGIN timezone_options -->*/
/* 							<option title="{timezone_select.timezone_options.TITLE}" value="{timezone_select.timezone_options.VALUE}"<!-- IF timezone_select.timezone_options.SELECTED --> selected="selected"<!-- ENDIF -->>{timezone_select.timezone_options.LABEL}</option>*/
/* 							<!-- END timezone_options -->*/
/* 						</optgroup>*/
/* 					<!-- END timezone_select -->*/
/* 				</select>*/
/* 			</div>*/
/* */
/* 			<!-- INCLUDEJS timezone.js -->*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
