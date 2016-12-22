<?php

/* posting_buttons.html */
class __TwigTemplate_f82a31eb7045b705ea4c888e791b5e44b9a80419263fbebe7d753ca84cd5585a extends Twig_Template
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
        echo "<script type=\"text/javascript\">
// <![CDATA[
\tvar form_name = 'postform';
\tvar text_name = ";
        // line 4
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array())) {
            echo "'signature'";
        } else {
            echo "'message'";
        }
        echo ";
\tvar load_draft = false;
\tvar upload = false;

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_NAME", array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
\tvar imageTag = false;

\t// Helpline messages
\tvar help_line = {
\t\tb: '";
        // line 15
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_B_HELP"));
        echo "',
\t\ti: '";
        // line 16
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_I_HELP"));
        echo "',
\t\tu: '";
        // line 17
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_U_HELP"));
        echo "',
\t\tq: '";
        // line 18
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP"));
        echo "',
\t\tc: '";
        // line 19
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_C_HELP"));
        echo "',
\t\tl: '";
        // line 20
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_L_HELP"));
        echo "',
\t\to: '";
        // line 21
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_O_HELP"));
        echo "',
\t\tp: '";
        // line 22
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_P_HELP"));
        echo "',
\t\tw: '";
        // line 23
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_W_HELP"));
        echo "',
\t\ta: '";
        // line 24
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_A_HELP"));
        echo "',
\t\ts: '";
        // line 25
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_S_HELP"));
        echo "',
\t\tf: '";
        // line 26
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_F_HELP"));
        echo "',
\t\ty: '";
        // line 27
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_Y_HELP"));
        echo "',
\t\td: '";
        // line 28
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_D_HELP"));
        echo "'
\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 30
            echo "\t\t\t,cb_";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo ": '";
            echo $this->getAttribute($context["custom_tags"], "A_BBCODE_HELPLINE", array());
            echo "'
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t}

\tfunction change_palette()
\t{
\t\tphpbb.toggleDisplay('colour_palette');
\t\te = document.getElementById('colour_palette');

\t\tif (e.style.display == 'block')
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 41
        echo addslashes($this->env->getExtension('phpbb')->lang("FONT_COLOR_HIDE"));
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 45
        echo addslashes($this->env->getExtension('phpbb')->lang("FONT_COLOR"));
        echo "';
\t\t}
\t}


// ]]>
</script>
";
        // line 52
        $asset_file = (("" . (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null)) . "/javascript/editor.js");
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
        // line 53
        if ( !(isset($context["S_VISUAL_EDITOR"]) ? $context["S_VISUAL_EDITOR"] : null)) {
            // line 54
            echo "\t";
            if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
                // line 55
                echo "\t\t<div id=\"colour_palette\" style=\"display: none;\">
\t\t\t<dl style=\"clear: left;\">
\t\t\t\t<dt><label>";
                // line 57
                echo $this->env->getExtension('phpbb')->lang("FONT_COLOR");
                echo ":</label></dt>
\t\t\t\t<dd id=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dd>
\t\t\t</dl>
\t\t</div>
\t\t";
                // line 61
                // line 62
                echo "\t\t<div id=\"format-buttons\" class=\"no-margin\">
\t\t\t<div class=\"btn-toolbar\" role=\"toolbar\">
\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t<button onclick=\"bbstyle(0)\" title=\"";
                // line 65
                echo $this->env->getExtension('phpbb')->lang("BBCODE_B_HELP");
                echo "\" accesskey=\"b\" name=\"addbbcode0\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t<i class=\"fa fa-bold fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<button onclick=\"bbstyle(2)\" title=\"";
                // line 68
                echo $this->env->getExtension('phpbb')->lang("BBCODE_I_HELP");
                echo "\" accesskey=\"i\" name=\"addbbcode2\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t<i class=\"fa fa-italic fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<button onclick=\"bbstyle(4)\" title=\"";
                // line 71
                echo $this->env->getExtension('phpbb')->lang("BBCODE_U_HELP");
                echo "\" accesskey=\"u\" name=\"addbbcode4\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t<i class=\"fa fa-underline fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t";
                // line 75
                if ((isset($context["S_BBCODE_QUOTE"]) ? $context["S_BBCODE_QUOTE"] : null)) {
                    // line 76
                    echo "\t\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t\t<button onclick=\"bbstyle(6)\" title=\"";
                    // line 77
                    echo $this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP");
                    echo "\" accesskey=\"q\" name=\"addbbcode6\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t\t<i class=\"fa fa-quote-right fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 82
                echo "\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t<button onclick=\"bbstyle(10)\" title=\"";
                // line 83
                echo $this->env->getExtension('phpbb')->lang("BBCODE_L_HELP");
                echo "\" accesskey=\"l\" name=\"addbbcode10\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t<i class=\"fa fa-list-ul fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<button onclick=\"bbstyle(12)\" title=\"";
                // line 86
                echo $this->env->getExtension('phpbb')->lang("BBCODE_O_HELP");
                echo "\" accesskey=\"o\" name=\"addbbcode12\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t<i class=\"fa fa-list-ol fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<button onclick=\"bbstyle(-1)\" title=\"";
                // line 89
                echo $this->env->getExtension('phpbb')->lang("BBCODE_LISTITEM_HELP");
                echo "\" accesskey=\"y\" name=\"addbblistitem\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t<i class=\"fa fa-asterisk fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t<button onclick=\"bbstyle(8)\" title=\"";
                // line 94
                echo $this->env->getExtension('phpbb')->lang("BBCODE_C_HELP");
                echo "\" accesskey=\"c\" name=\"addbbcode8\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t<i class=\"fa fa-code fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t";
                // line 97
                if ((isset($context["S_BBCODE_IMG"]) ? $context["S_BBCODE_IMG"] : null)) {
                    // line 98
                    echo "\t\t\t\t\t\t<button onclick=\"bbstyle(14)\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("BBCODE_P_HELP");
                    echo "\" accesskey=\"p\" name=\"addbbcode14\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t\t<i class=\"fa fa-picture-o fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t";
                }
                // line 102
                echo "\t\t\t\t\t";
                if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
                    // line 103
                    echo "\t\t\t\t\t\t<button onclick=\"bbstyle(16)\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("BBCODE_W_HELP");
                    echo "\" accesskey=\"w\" name=\"addbbcode16\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t\t<i class=\"fa fa-link fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t";
                }
                // line 107
                echo "\t\t\t\t\t";
                if ((isset($context["S_BBCODE_FLASH"]) ? $context["S_BBCODE_FLASH"] : null)) {
                    // line 108
                    echo "\t\t\t\t\t\t<button onclick=\"bbstyle(18)\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("BBCODE_D_HELP");
                    echo "\" accesskey=\"d\" name=\"addbbcode18\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t\t<i class=\"fa fa-flash fa-lg fa-fw\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t";
                }
                // line 112
                echo "\t\t\t\t</div>
\t\t\t\t<div class=\"btn-group btn-group-sm fontsize-picker\">
\t\t\t\t\t<select name=\"addbbcode20\" class=\"form-control\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
                // line 114
                echo $this->env->getExtension('phpbb')->lang("BBCODE_F_HELP");
                echo "\">
\t\t\t\t\t\t<option value=\"50\">";
                // line 115
                echo $this->env->getExtension('phpbb')->lang("FONT_TINY");
                echo "</option>
\t\t\t\t\t\t<option value=\"85\">";
                // line 116
                echo $this->env->getExtension('phpbb')->lang("FONT_SMALL");
                echo "</option>
\t\t\t\t\t\t<option value=\"100\" selected=\"selected\">";
                // line 117
                echo $this->env->getExtension('phpbb')->lang("FONT_NORMAL");
                echo "</option>
\t\t\t\t\t\t";
                // line 118
                if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 150))) {
                    // line 119
                    echo "\t\t\t\t\t\t\t<option value=\"150\">";
                    echo $this->env->getExtension('phpbb')->lang("FONT_LARGE");
                    echo "</option>
\t\t\t\t\t\t\t";
                    // line 120
                    if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 200))) {
                        // line 121
                        echo "\t\t\t\t\t\t\t\t<option value=\"200\">";
                        echo $this->env->getExtension('phpbb')->lang("FONT_HUGE");
                        echo "</option>
\t\t\t\t\t\t\t";
                    }
                    // line 123
                    echo "\t\t\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"btn-group btn-group-sm\">
\t\t\t\t\t<button onclick=\"change_palette();\" title=\"";
                // line 127
                echo $this->env->getExtension('phpbb')->lang("BBCODE_S_HELP");
                echo "\" accesskey=\"s\" name=\"bbpalette\" type=\"button\" class=\"btn btn-default btn-xs\" >
\t\t\t\t\t\t<i class=\"fa fa-paint-brush fa-lg\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t";
                // line 131
                // line 132
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                    // line 133
                    echo "\t\t\t\t\t<input type=\"button\" class=\"btn btn-default btn-sm\" name=\"addbbcode";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo "\" value=\"";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", array());
                    echo "\" onclick=\"bbstyle(";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                    echo ")\" title=\"";
                    echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                    echo "\" />
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "\t\t\t</div>
\t\t</div>
\t";
                // line 137
                // line 138
                echo "\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 138,  357 => 137,  353 => 135,  338 => 133,  333 => 132,  332 => 131,  325 => 127,  320 => 124,  317 => 123,  311 => 121,  309 => 120,  304 => 119,  302 => 118,  298 => 117,  294 => 116,  290 => 115,  286 => 114,  282 => 112,  274 => 108,  271 => 107,  263 => 103,  260 => 102,  252 => 98,  250 => 97,  244 => 94,  236 => 89,  230 => 86,  224 => 83,  221 => 82,  213 => 77,  210 => 76,  208 => 75,  201 => 71,  195 => 68,  189 => 65,  184 => 62,  183 => 61,  176 => 57,  172 => 55,  169 => 54,  167 => 53,  152 => 52,  142 => 45,  135 => 41,  124 => 32,  113 => 30,  109 => 29,  105 => 28,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  57 => 16,  53 => 15,  37 => 10,  24 => 4,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* 	var form_name = 'postform';*/
/* 	var text_name = <!-- IF $SIG_EDIT -->'signature'<!-- ELSE -->'message'<!-- ENDIF -->;*/
/* 	var load_draft = false;*/
/* 	var upload = false;*/
/* */
/* 	// Define the bbCode tags*/
/* 	var bbcode = new Array();*/
/* 	var bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'<!-- BEGIN custom_tags -->, {custom_tags.BBCODE_NAME}<!-- END custom_tags -->);*/
/* 	var imageTag = false;*/
/* */
/* 	// Helpline messages*/
/* 	var help_line = {*/
/* 		b: '{LA_BBCODE_B_HELP}',*/
/* 		i: '{LA_BBCODE_I_HELP}',*/
/* 		u: '{LA_BBCODE_U_HELP}',*/
/* 		q: '{LA_BBCODE_Q_HELP}',*/
/* 		c: '{LA_BBCODE_C_HELP}',*/
/* 		l: '{LA_BBCODE_L_HELP}',*/
/* 		o: '{LA_BBCODE_O_HELP}',*/
/* 		p: '{LA_BBCODE_P_HELP}',*/
/* 		w: '{LA_BBCODE_W_HELP}',*/
/* 		a: '{LA_BBCODE_A_HELP}',*/
/* 		s: '{LA_BBCODE_S_HELP}',*/
/* 		f: '{LA_BBCODE_F_HELP}',*/
/* 		y: '{LA_BBCODE_Y_HELP}',*/
/* 		d: '{LA_BBCODE_D_HELP}'*/
/* 		<!-- BEGIN custom_tags -->*/
/* 			,cb_{custom_tags.BBCODE_ID}: '{custom_tags.A_BBCODE_HELPLINE}'*/
/* 		<!-- END custom_tags -->*/
/* 	}*/
/* */
/* 	function change_palette()*/
/* 	{*/
/* 		phpbb.toggleDisplay('colour_palette');*/
/* 		e = document.getElementById('colour_palette');*/
/* */
/* 		if (e.style.display == 'block')*/
/* 		{*/
/* 			document.getElementById('bbpalette').value = '{LA_FONT_COLOR_HIDE}';*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			document.getElementById('bbpalette').value = '{LA_FONT_COLOR}';*/
/* 		}*/
/* 	}*/
/* */
/* */
/* // ]]>*/
/* </script>*/
/* <!-- INCLUDEJS {T_ASSETS_PATH}/javascript/editor.js -->*/
/* <!-- IF not S_VISUAL_EDITOR -->*/
/* 	<!-- IF S_BBCODE_ALLOWED -->*/
/* 		<div id="colour_palette" style="display: none;">*/
/* 			<dl style="clear: left;">*/
/* 				<dt><label>{L_FONT_COLOR}:</label></dt>*/
/* 				<dd id="color_palette_placeholder" data-orientation="h" data-height="12" data-width="15" data-bbcode="true"></dd>*/
/* 			</dl>*/
/* 		</div>*/
/* 		<!-- EVENT posting_editor_buttons_before -->*/
/* 		<div id="format-buttons" class="no-margin">*/
/* 			<div class="btn-toolbar" role="toolbar">*/
/* 				<div class="btn-group btn-group-sm">*/
/* 					<button onclick="bbstyle(0)" title="{L_BBCODE_B_HELP}" accesskey="b" name="addbbcode0" type="button" class="btn btn-default btn-xs" >*/
/* 						<i class="fa fa-bold fa-lg fa-fw" aria-hidden="true"></i>*/
/* 					</button>*/
/* 					<button onclick="bbstyle(2)" title="{L_BBCODE_I_HELP}" accesskey="i" name="addbbcode2" type="button" class="btn btn-default btn-xs" >*/
/* 						<i class="fa fa-italic fa-lg fa-fw" aria-hidden="true"></i>*/
/* 					</button>*/
/* 					<button onclick="bbstyle(4)" title="{L_BBCODE_U_HELP}" accesskey="u" name="addbbcode4" type="button" class="btn btn-default btn-xs" >*/
/* 						<i class="fa fa-underline fa-lg fa-fw" aria-hidden="true"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<!-- IF S_BBCODE_QUOTE -->*/
/* 					<div class="btn-group btn-group-sm">*/
/* 						<button onclick="bbstyle(6)" title="{L_BBCODE_Q_HELP}" accesskey="q" name="addbbcode6" type="button" class="btn btn-default btn-xs" >*/
/* 							<i class="fa fa-quote-right fa-lg fa-fw" aria-hidden="true"></i>*/
/* 						</button>*/
/* 					</div>*/
/* 				<!-- ENDIF -->*/
/* 				<div class="btn-group btn-group-sm">*/
/* 					<button onclick="bbstyle(10)" title="{L_BBCODE_L_HELP}" accesskey="l" name="addbbcode10" type="button" class="btn btn-default btn-xs" >*/
/* 						<i class="fa fa-list-ul fa-lg fa-fw" aria-hidden="true"></i>*/
/* 					</button>*/
/* 					<button onclick="bbstyle(12)" title="{L_BBCODE_O_HELP}" accesskey="o" name="addbbcode12" type="button" class="btn btn-default btn-xs" >*/
/* 						<i class="fa fa-list-ol fa-lg fa-fw" aria-hidden="true"></i>*/
/* 					</button>*/
/* 					<button onclick="bbstyle(-1)" title="{L_BBCODE_LISTITEM_HELP}" accesskey="y" name="addbblistitem" type="button" class="btn btn-default btn-xs" >*/
/* 						<i class="fa fa-asterisk fa-lg fa-fw" aria-hidden="true"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<div class="btn-group btn-group-sm">*/
/* 					<button onclick="bbstyle(8)" title="{L_BBCODE_C_HELP}" accesskey="c" name="addbbcode8" type="button" class="btn btn-default btn-xs" >*/
/* 						<i class="fa fa-code fa-lg fa-fw" aria-hidden="true"></i>*/
/* 					</button>*/
/* 					<!-- IF S_BBCODE_IMG -->*/
/* 						<button onclick="bbstyle(14)" title="{L_BBCODE_P_HELP}" accesskey="p" name="addbbcode14" type="button" class="btn btn-default btn-xs" >*/
/* 							<i class="fa fa-picture-o fa-lg fa-fw" aria-hidden="true"></i>*/
/* 						</button>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF S_LINKS_ALLOWED -->*/
/* 						<button onclick="bbstyle(16)" title="{L_BBCODE_W_HELP}" accesskey="w" name="addbbcode16" type="button" class="btn btn-default btn-xs" >*/
/* 							<i class="fa fa-link fa-lg fa-fw" aria-hidden="true"></i>*/
/* 						</button>*/
/* 					<!-- ENDIF -->*/
/* 					<!-- IF S_BBCODE_FLASH -->*/
/* 						<button onclick="bbstyle(18)" title="{L_BBCODE_D_HELP}" accesskey="d" name="addbbcode18" type="button" class="btn btn-default btn-xs" >*/
/* 							<i class="fa fa-flash fa-lg fa-fw" aria-hidden="true"></i>*/
/* 						</button>*/
/* 					<!-- ENDIF -->*/
/* 				</div>*/
/* 				<div class="btn-group btn-group-sm fontsize-picker">*/
/* 					<select name="addbbcode20" class="form-control" onchange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;" title="{L_BBCODE_F_HELP}">*/
/* 						<option value="50">{L_FONT_TINY}</option>*/
/* 						<option value="85">{L_FONT_SMALL}</option>*/
/* 						<option value="100" selected="selected">{L_FONT_NORMAL}</option>*/
/* 						<!-- IF not MAX_FONT_SIZE or MAX_FONT_SIZE >= 150 -->*/
/* 							<option value="150">{L_FONT_LARGE}</option>*/
/* 							<!-- IF not MAX_FONT_SIZE or MAX_FONT_SIZE >= 200 -->*/
/* 								<option value="200">{L_FONT_HUGE}</option>*/
/* 							<!-- ENDIF -->*/
/* 						<!-- ENDIF -->*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="btn-group btn-group-sm">*/
/* 					<button onclick="change_palette();" title="{L_BBCODE_S_HELP}" accesskey="s" name="bbpalette" type="button" class="btn btn-default btn-xs" >*/
/* 						<i class="fa fa-paint-brush fa-lg"></i>*/
/* 					</button>*/
/* 				</div>*/
/* 				<!-- EVENT posting_editor_buttons_custom_tags_before -->*/
/* 				<!-- BEGIN custom_tags -->*/
/* 					<input type="button" class="btn btn-default btn-sm" name="addbbcode{custom_tags.BBCODE_ID}" value="{custom_tags.BBCODE_TAG}" onclick="bbstyle({custom_tags.BBCODE_ID})" title="{custom_tags.BBCODE_HELPLINE}" />*/
/* 				<!-- END custom_tags -->*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- EVENT posting_editor_buttons_after -->*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* */
