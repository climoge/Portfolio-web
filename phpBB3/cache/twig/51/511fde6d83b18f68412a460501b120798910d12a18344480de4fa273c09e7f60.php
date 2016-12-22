<?php

/* ucp_avatar_options.html */
class __TwigTemplate_2ab8ffca9faabefe07632c8c40bcb7d2f890cd9eb1e4c97e1e0a405a1e388ed9 extends Twig_Template
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
        if ( !(isset($context["S_AVATARS_ENABLED"]) ? $context["S_AVATARS_ENABLED"] : null)) {
            // line 2
            echo "\t<p>";
            echo $this->env->getExtension('phpbb')->lang("AVATAR_FEATURES_DISABLED");
            echo "</p>
";
        }
        // line 4
        echo "
<fieldset>
\t<div class=\"form-horizontal\">
\t\t";
        // line 7
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"alert alert-danger\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 8
        echo "\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-md-4\">";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("CURRENT_IMAGE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t";
        // line 11
        if ((isset($context["AVATAR"]) ? $context["AVATAR"] : null)) {
            echo (isset($context["AVATAR"]) ? $context["AVATAR"] : null);
        } else {
            echo "<img src=\"";
            echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
            echo "/images/default_avatar.jpg\" class=\"default-avatar\" alt=\"";
            echo $this->env->getExtension('phpbb')->lang("AVATAR");
            echo "\">";
        }
        // line 12
        echo "\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t<label for=\"avatar_delete\">
\t\t\t\t\t\t<input type=\"checkbox\" name=\"avatar_delete\" id=\"avatar_delete\" />
\t\t\t\t\t\t";
        // line 15
        echo $this->env->getExtension('phpbb')->lang("DELETE_AVATAR");
        echo "
\t\t\t\t\t</label>
\t\t\t\t</div>
\t\t\t\t<span class=\"help-block\">";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("AVATAR_EXPLAIN");
        echo "</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label class=\"control-label col-md-4\">";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("AVATAR_TYPE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<select name=\"avatar_driver\" id=\"avatar_driver\" data-togglable-settings=\"true\">
\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_drivers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
            // line 26
            echo "\t\t\t\t\t\t<option value=\"";
            echo $this->getAttribute($context["avatar_drivers"], "DRIVER", array());
            echo "\"";
            if ($this->getAttribute($context["avatar_drivers"], "SELECTED", array())) {
                echo " selected=\"selected\"";
            }
            echo " data-toggle-setting=\"#avatar_option_";
            echo $this->getAttribute($context["avatar_drivers"], "DRIVER", array());
            echo "\">";
            echo $this->getAttribute($context["avatar_drivers"], "L_TITLE", array());
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"avatar_options\">
\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "avatar_drivers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["avatar_drivers"]) {
            // line 33
            echo "\t\t\t<div id=\"avatar_option_";
            echo $this->getAttribute($context["avatar_drivers"], "DRIVER", array());
            echo "\">
\t\t\t\t<noscript>
\t\t\t\t\t<h3 class=\"avatar_section_header\">";
            // line 35
            echo $this->getAttribute($context["avatar_drivers"], "L_TITLE", array());
            echo "</h3>
\t\t\t\t</noscript>
\t\t\t\t<div class=\"row\">
\t\t\t\t<p class=\"col-md-8 col-md-offset-4\">";
            // line 38
            echo $this->getAttribute($context["avatar_drivers"], "L_EXPLAIN", array());
            echo "</p>
\t\t\t</div>
\t\t\t\t<fieldset>
\t\t\t\t\t";
            // line 41
            echo $this->getAttribute($context["avatar_drivers"], "OUTPUT", array());
            echo "
\t\t\t\t</fieldset>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avatar_drivers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t</div>
\t</div>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 45,  131 => 41,  125 => 38,  119 => 35,  113 => 33,  109 => 32,  103 => 28,  86 => 26,  82 => 25,  75 => 22,  68 => 18,  62 => 15,  57 => 12,  47 => 11,  41 => 9,  38 => 8,  32 => 7,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF not S_AVATARS_ENABLED -->*/
/* 	<p>{L_AVATAR_FEATURES_DISABLED}</p>*/
/* <!-- ENDIF -->*/
/* */
/* <fieldset>*/
/* 	<div class="form-horizontal">*/
/* 		<!-- IF ERROR --><p class="alert alert-danger">{ERROR}</p><!-- ENDIF -->*/
/* 		<div class="form-group">*/
/* 			<label class="control-label col-md-4">{L_CURRENT_IMAGE}{L_COLON}</label>*/
/* 			<div class="col-md-8">*/
/* 				<!-- IF AVATAR -->{AVATAR}<!-- ELSE --><img src="{T_THEME_PATH}/images/default_avatar.jpg" class="default-avatar" alt="{L_AVATAR}"><!-- ENDIF -->*/
/* 				<div class="checkbox">*/
/* 					<label for="avatar_delete">*/
/* 						<input type="checkbox" name="avatar_delete" id="avatar_delete" />*/
/* 						{L_DELETE_AVATAR}*/
/* 					</label>*/
/* 				</div>*/
/* 				<span class="help-block">{L_AVATAR_EXPLAIN}</span>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group">*/
/* 			<label class="control-label col-md-4">{L_AVATAR_TYPE}{L_COLON}</label>*/
/* 			<div class="col-md-8">*/
/* 				<select name="avatar_driver" id="avatar_driver" data-togglable-settings="true">*/
/* 					<!-- BEGIN avatar_drivers -->*/
/* 						<option value="{avatar_drivers.DRIVER}"<!-- IF avatar_drivers.SELECTED --> selected="selected"<!-- ENDIF --> data-toggle-setting="#avatar_option_{avatar_drivers.DRIVER}">{avatar_drivers.L_TITLE}</option>*/
/* 					<!-- END avatar_drivers -->*/
/* 				</select>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div id="avatar_options">*/
/* 		<!-- BEGIN avatar_drivers -->*/
/* 			<div id="avatar_option_{avatar_drivers.DRIVER}">*/
/* 				<noscript>*/
/* 					<h3 class="avatar_section_header">{avatar_drivers.L_TITLE}</h3>*/
/* 				</noscript>*/
/* 				<div class="row">*/
/* 				<p class="col-md-8 col-md-offset-4">{avatar_drivers.L_EXPLAIN}</p>*/
/* 			</div>*/
/* 				<fieldset>*/
/* 					{avatar_drivers.OUTPUT}*/
/* 				</fieldset>*/
/* 			</div>*/
/* 		<!-- END avatar_drivers -->*/
/* 		</div>*/
/* 	</div>*/
/* </fieldset>*/
/* */
