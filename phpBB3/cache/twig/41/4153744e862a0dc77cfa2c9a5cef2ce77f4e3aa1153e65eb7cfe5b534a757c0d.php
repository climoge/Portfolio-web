<?php

/* ucp_profile_autologin_keys.html */
class __TwigTemplate_04893e79f784712f0e88f6a267a87c6370d713148e1a1fd7c12c9e5ee145932c extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_profile_autologin_keys.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">
\t\t\t\t";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "
\t\t\t</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"alert alert-info\">";
        // line 11
        echo $this->env->getExtension('phpbb')->lang("PROFILE_AUTOLOGIN_KEYS");
        echo "</div>
\t\t\t";
        // line 12
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"alert alert-danger\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 13
        echo "
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th class=\"name\">";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("LOGIN_KEY");
        echo "</th>
\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("IP");
        echo "</th>
\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("LOGIN_TIME");
        echo "</th>
\t\t\t\t\t\t\t<th class=\"marking\">";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("MARK");
        echo "</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "sessions", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sessions"]) {
            // line 26
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["sessions"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo "<tr class=\"bg1\">";
            } else {
                echo "<tr class=\"bg2\">";
            }
            // line 27
            echo "\t\t\t\t\t\t\t<td><label for=\"";
            echo $this->getAttribute($context["sessions"], "KEY", array());
            echo "\">";
            echo $this->getAttribute($context["sessions"], "KEY", array());
            echo "</label></td>
\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 28
            echo $this->getAttribute($context["sessions"], "IP", array());
            echo "</td>
\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 29
            echo $this->getAttribute($context["sessions"], "LOGIN_TIME", array());
            echo "</td>
\t\t\t\t\t\t\t<td class=\"marking\"><input type=\"checkbox\" name=\"keys[]\" value=\"";
            // line 30
            echo $this->getAttribute($context["sessions"], "KEY", array());
            echo "\" id=\"";
            echo $this->getAttribute($context["sessions"], "KEY", array());
            echo "\" /></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "\t\t\t\t\t\t<tr><td colspan=\"4\" class=\"text-center\">";
            echo $this->env->getExtension('phpbb')->lang("PROFILE_NO_AUTOLOGIN_KEYS");
            echo "</td></tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sessions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t";
        // line 39
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "sessions", array()))) {
            // line 40
            echo "\t\t\t\t<fieldset class=\"display-actions\">
\t\t\t\t\t";
            // line 41
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "<input type=\"submit\" name=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("DELETE_MARKED");
            echo "\" class=\"btn btn-danger\" />

\t\t\t\t\t<div class=\"pull-right btn-group\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-success\" onclick=\"\$('#ucp input:checkbox').prop('checked', true); return false;\">";
            // line 44
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-warning\" onclick=\"\$('#ucp input:checkbox').prop('checked', false); return false;\">";
            // line 45
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
\t\t\t\t\t";
            // line 46
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t\t</fieldset>
\t\t\t";
        }
        // line 49
        echo "

\t\t</div>
\t</div>
</form>

";
        // line 55
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_autologin_keys.html", 55)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_autologin_keys.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 55,  165 => 49,  159 => 46,  155 => 45,  151 => 44,  143 => 41,  140 => 40,  138 => 39,  132 => 35,  123 => 33,  113 => 30,  109 => 29,  105 => 28,  98 => 27,  91 => 26,  86 => 25,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  60 => 13,  54 => 12,  50 => 11,  43 => 7,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="ucp" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title">*/
/* 				{L_TITLE}*/
/* 			</h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<div class="alert alert-info">{L_PROFILE_AUTOLOGIN_KEYS}</div>*/
/* 			<!-- IF ERROR --><p class="alert alert-danger">{ERROR}</p><!-- ENDIF -->*/
/* */
/* 			<div class="table-responsive">*/
/* 				<table class="table table-striped table-bordered">*/
/* 					<thead>*/
/* 						<tr>*/
/* 							<th class="name">{L_LOGIN_KEY}</th>*/
/* 							<th class="text-center">{L_IP}</th>*/
/* 							<th class="text-center">{L_LOGIN_TIME}</th>*/
/* 							<th class="marking">{L_MARK}</th>*/
/* 						</tr>*/
/* 					</thead>*/
/* 					<tbody>*/
/* 					<!-- BEGIN sessions -->*/
/* 						<!-- IF sessions.S_ROW_COUNT is even --><tr class="bg1"><!-- ELSE --><tr class="bg2"><!-- ENDIF -->*/
/* 							<td><label for="{sessions.KEY}">{sessions.KEY}</label></td>*/
/* 							<td class="text-center">{sessions.IP}</td>*/
/* 							<td class="text-center">{sessions.LOGIN_TIME}</td>*/
/* 							<td class="marking"><input type="checkbox" name="keys[]" value="{sessions.KEY}" id="{sessions.KEY}" /></td>*/
/* 						</tr>*/
/* 					<!-- BEGINELSE -->*/
/* 						<tr><td colspan="4" class="text-center">{L_PROFILE_NO_AUTOLOGIN_KEYS}</td></tr>*/
/* 					<!-- END sessions -->*/
/* 					</tbody>*/
/* 				</table>*/
/* 			</div>*/
/* */
/* 			<!-- IF .sessions -->*/
/* 				<fieldset class="display-actions">*/
/* 					{S_HIDDEN_FIELDS}<input type="submit" name="submit" value="{L_DELETE_MARKED}" class="btn btn-danger" />*/
/* */
/* 					<div class="pull-right btn-group">*/
/* 						<a href="#" class="btn btn-sm btn-success" onclick="$('#ucp input:checkbox').prop('checked', true); return false;">{L_MARK_ALL}</a>*/
/* 						<a href="#" class="btn btn-sm btn-warning" onclick="$('#ucp input:checkbox').prop('checked', false); return false;">{L_UNMARK_ALL}</a></div>*/
/* 					{S_FORM_TOKEN}*/
/* 				</fieldset>*/
/* 			<!-- ENDIF -->*/
/* */
/* */
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
