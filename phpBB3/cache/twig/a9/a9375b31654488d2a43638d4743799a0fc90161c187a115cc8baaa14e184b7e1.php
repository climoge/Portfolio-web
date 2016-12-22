<?php

/* search_body.html */
class __TwigTemplate_aaae5dc1a6bb289431642a8ab557c93fd465befb6fb274ae640f55bec16c3a4a extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "search_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"page-header\">
\t<h2 class=\"solo\">";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "</h2>
</div>

";
        // line 7
        // line 8
        echo "
<form method=\"get\" action=\"";
        // line 9
        echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
        echo "\" data-focus=\"keywords\">
\t<div class=\"form-group\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("SEARCH_QUERY");
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 16
        // line 17
        echo "\t\t\t\t<fieldset>
\t\t\t\t\t";
        // line 18
        // line 19
        echo "\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"keywords\">";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"keywords\" id=\"keywords\" size=\"40\" title=\"";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo "\" />
\t\t\t\t\t\t\t\t<div class=\"radio\"><label for=\"terms1\"><input type=\"radio\" name=\"terms\" id=\"terms1\" value=\"all\" checked=\"checked\" /> ";
        // line 24
        echo $this->env->getExtension('phpbb')->lang("SEARCH_ALL_TERMS");
        echo "</label></div>
\t\t\t\t\t\t\t\t<div class=\"radio\"><label for=\"terms2\"><input type=\"radio\" name=\"terms\" id=\"terms2\" value=\"any\" /> ";
        // line 25
        echo $this->env->getExtension('phpbb')->lang("SEARCH_ANY_TERMS");
        echo "</label></div>
\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 26
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS_EXPLAIN");
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"author\">";
        // line 30
        echo $this->env->getExtension('phpbb')->lang("SEARCH_AUTHOR");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" name=\"author\" id=\"author\" size=\"40\" title=\"";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("SEARCH_AUTHOR");
        echo "\" />
\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 33
        echo $this->env->getExtension('phpbb')->lang("SEARCH_AUTHOR_EXPLAIN");
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 37
        // line 38
        echo "\t\t\t\t</fieldset>
\t\t\t\t";
        // line 39
        // line 40
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\">";
        // line 46
        echo $this->env->getExtension('phpbb')->lang("SEARCH_OPTIONS");
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t";
        // line 49
        // line 50
        echo "\t\t\t\t<fieldset>
\t\t\t\t\t";
        // line 51
        // line 52
        echo "\t\t\t\t\t<div class=\"form-horizontal\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"search_forum\">";
        // line 54
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUMS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<select name=\"fid[]\" id=\"search_forum\" multiple=\"multiple\" size=\"8\" title=\"";
        // line 56
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUMS");
        echo "\">";
        echo (isset($context["S_FORUM_OPTIONS"]) ? $context["S_FORUM_OPTIONS"] : null);
        echo "</select>
\t\t\t\t\t\t\t\t<span class=\"help-block\">";
        // line 57
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUMS_EXPLAIN");
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"search_child1\">";
        // line 61
        echo $this->env->getExtension('phpbb')->lang("SEARCH_SUBFORUMS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<label for=\"search_child1\" class=\"radio-inline\"><input type=\"radio\" name=\"sc\" id=\"search_child1\" value=\"1\" checked=\"checked\" /> ";
        // line 63
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t\t\t\t\t\t<label for=\"search_child2\" class=\"radio-inline\"><input type=\"radio\" name=\"sc\" id=\"search_child2\" value=\"0\" /> ";
        // line 64
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"sf1\">";
        // line 68
        echo $this->env->getExtension('phpbb')->lang("SEARCH_WITHIN");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<div class=\"radio\"><label for=\"sf1\"><input type=\"radio\" name=\"sf\" id=\"sf1\" value=\"all\" checked=\"checked\" /> ";
        // line 70
        echo $this->env->getExtension('phpbb')->lang("SEARCH_TITLE_MSG");
        echo "</label></div>
\t\t\t\t\t\t\t\t<div class=\"radio\"><label for=\"sf2\"><input type=\"radio\" name=\"sf\" id=\"sf2\" value=\"msgonly\" /> ";
        // line 71
        echo $this->env->getExtension('phpbb')->lang("SEARCH_MSG_ONLY");
        echo "</label></div>
\t\t\t\t\t\t\t\t<div class=\"radio\"><label for=\"sf3\"><input type=\"radio\" name=\"sf\" id=\"sf3\" value=\"titleonly\" /> ";
        // line 72
        echo $this->env->getExtension('phpbb')->lang("SEARCH_TITLE_ONLY");
        echo "</label></div>
\t\t\t\t\t\t\t\t<div class=\"radio\"><label for=\"sf4\"><input type=\"radio\" name=\"sf\" id=\"sf4\" value=\"firstpost\" /> ";
        // line 73
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FIRST_POST");
        echo "</label></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 76
        // line 77
        echo "
\t\t\t\t\t\t<hr class=\"dashed\" />

\t\t\t\t\t\t";
        // line 80
        // line 81
        echo "\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"show_results1\">";
        // line 82
        echo $this->env->getExtension('phpbb')->lang("DISPLAY_RESULTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<label for=\"show_results1\" class=\"radio-inline\"><input type=\"radio\" name=\"sr\" id=\"show_results1\" value=\"posts\" checked=\"checked\" /> ";
        // line 84
        echo $this->env->getExtension('phpbb')->lang("POSTS");
        echo "</label>
\t\t\t\t\t\t\t\t<label for=\"show_results2\" class=\"radio-inline\"><input type=\"radio\" name=\"sr\" id=\"show_results2\" value=\"topics\" /> ";
        // line 85
        echo $this->env->getExtension('phpbb')->lang("TOPICS");
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" for=\"sd\">";
        // line 89
        echo $this->env->getExtension('phpbb')->lang("RESULT_SORT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t";
        // line 91
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "
\t\t\t\t\t\t\t\t<label for=\"sa\" class=\"radio-inline\"><input type=\"radio\" name=\"sd\" id=\"sa\" value=\"a\" /> ";
        // line 92
        echo $this->env->getExtension('phpbb')->lang("SORT_ASCENDING");
        echo "</label>
\t\t\t\t\t\t\t\t<label for=\"sd\" class=\"radio-inline\"><input type=\"radio\" name=\"sd\" id=\"sd\" value=\"d\" checked=\"checked\" /> ";
        // line 93
        echo $this->env->getExtension('phpbb')->lang("SORT_DESCENDING");
        echo "</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-3\">";
        // line 97
        echo $this->env->getExtension('phpbb')->lang("RESULT_DAYS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t";
        // line 99
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label col-md-3\" >";
        // line 103
        echo $this->env->getExtension('phpbb')->lang("RETURN_FIRST");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-md-9\">
\t\t\t\t\t\t\t\t<select name=\"ch\" title=\"";
        // line 105
        echo $this->env->getExtension('phpbb')->lang("RETURN_FIRST");
        echo "\">";
        echo (isset($context["S_CHARACTER_OPTIONS"]) ? $context["S_CHARACTER_OPTIONS"] : null);
        echo "</select> ";
        echo $this->env->getExtension('phpbb')->lang("POST_CHARACTERS");
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 109
        // line 110
        echo "\t\t\t\t</fieldset>
\t\t\t\t";
        // line 111
        // line 112
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
        // line 117
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"btn btn-danger\" />&nbsp;
\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 118
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" class=\"btn btn-primary\" />
\t\t</fieldset>
\t</div>
</form>
";
        // line 122
        // line 123
        echo "
";
        // line 124
        // line 125
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "recentsearch", array()))) {
            // line 126
            echo "\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th colspan=\"2\" class=\"name\">";
            // line 131
            echo $this->env->getExtension('phpbb')->lang("RECENT_SEARCHES");
            echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "recentsearch", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["recentsearch"]) {
                // line 136
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td><a href=\"";
                // line 137
                echo $this->getAttribute($context["recentsearch"], "U_KEYWORDS", array());
                echo "\">";
                echo $this->getAttribute($context["recentsearch"], "KEYWORDS", array());
                echo "</a></td>
\t\t\t\t\t\t\t<td class=\"active\"><span>&nbsp;";
                // line 138
                echo $this->getAttribute($context["recentsearch"], "TIME", array());
                echo "</span></td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 141
                echo "\t\t\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t\t\t<td colspan=\"2\">";
                // line 142
                echo $this->env->getExtension('phpbb')->lang("NO_RECENT_SEARCHES");
                echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recentsearch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
";
        }
        // line 150
        // line 151
        echo "
";
        // line 152
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_body.html", 152)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 152,  363 => 151,  362 => 150,  355 => 145,  346 => 142,  343 => 141,  335 => 138,  329 => 137,  326 => 136,  321 => 135,  314 => 131,  307 => 126,  305 => 125,  304 => 124,  301 => 123,  300 => 122,  293 => 118,  287 => 117,  280 => 112,  279 => 111,  276 => 110,  275 => 109,  264 => 105,  258 => 103,  251 => 99,  245 => 97,  238 => 93,  234 => 92,  230 => 91,  224 => 89,  217 => 85,  213 => 84,  207 => 82,  204 => 81,  203 => 80,  198 => 77,  197 => 76,  191 => 73,  187 => 72,  183 => 71,  179 => 70,  173 => 68,  166 => 64,  162 => 63,  156 => 61,  149 => 57,  143 => 56,  137 => 54,  133 => 52,  132 => 51,  129 => 50,  128 => 49,  122 => 46,  114 => 40,  113 => 39,  110 => 38,  109 => 37,  102 => 33,  98 => 32,  92 => 30,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  67 => 21,  63 => 19,  62 => 18,  59 => 17,  58 => 16,  52 => 13,  45 => 9,  42 => 8,  41 => 7,  35 => 4,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <div class="page-header">*/
/* 	<h2 class="solo">{L_SEARCH}</h2>*/
/* </div>*/
/* */
/* <!-- EVENT search_body_form_before -->*/
/* */
/* <form method="get" action="{S_SEARCH_ACTION}" data-focus="keywords">*/
/* 	<div class="form-group">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title">{L_SEARCH_QUERY}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<!-- EVENT search_body_search_query_before -->*/
/* 				<fieldset>*/
/* 					<!-- EVENT search_body_search_query_prepend -->*/
/* 					<div class="form-horizontal">*/
/* 						<div class="form-group">*/
/* 							<label class="control-label col-md-3" for="keywords">{L_SEARCH_KEYWORDS}{L_COLON}</label>*/
/* 							<div class="col-md-9">*/
/* 								<input type="text" class="form-control" name="keywords" id="keywords" size="40" title="{L_SEARCH_KEYWORDS}" />*/
/* 								<div class="radio"><label for="terms1"><input type="radio" name="terms" id="terms1" value="all" checked="checked" /> {L_SEARCH_ALL_TERMS}</label></div>*/
/* 								<div class="radio"><label for="terms2"><input type="radio" name="terms" id="terms2" value="any" /> {L_SEARCH_ANY_TERMS}</label></div>*/
/* 								<span class="help-block">{L_SEARCH_KEYWORDS_EXPLAIN}</span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="control-label col-md-3" for="author">{L_SEARCH_AUTHOR}{L_COLON}</label>*/
/* 							<div class="col-md-9">*/
/* 								<input type="search" class="form-control" name="author" id="author" size="40" title="{L_SEARCH_AUTHOR}" />*/
/* 								<span class="help-block">{L_SEARCH_AUTHOR_EXPLAIN}</span>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- EVENT search_body_search_query_append -->*/
/* 				</fieldset>*/
/* 				<!-- EVENT search_body_search_query_after -->*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title">{L_SEARCH_OPTIONS}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<!-- EVENT search_body_search_options_before -->*/
/* 				<fieldset>*/
/* 					<!-- EVENT search_body_search_options_prepend -->*/
/* 					<div class="form-horizontal">*/
/* 						<div class="form-group">*/
/* 							<label class="control-label col-md-3" for="search_forum">{L_SEARCH_FORUMS}{L_COLON}</label>*/
/* 							<div class="col-md-9">*/
/* 								<select name="fid[]" id="search_forum" multiple="multiple" size="8" title="{L_SEARCH_FORUMS}">{S_FORUM_OPTIONS}</select>*/
/* 								<span class="help-block">{L_SEARCH_FORUMS_EXPLAIN}</span>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="control-label col-md-3" for="search_child1">{L_SEARCH_SUBFORUMS}{L_COLON}</label>*/
/* 							<div class="col-md-9">*/
/* 								<label for="search_child1" class="radio-inline"><input type="radio" name="sc" id="search_child1" value="1" checked="checked" /> {L_YES}</label>*/
/* 								<label for="search_child2" class="radio-inline"><input type="radio" name="sc" id="search_child2" value="0" /> {L_NO}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="control-label col-md-3" for="sf1">{L_SEARCH_WITHIN}{L_COLON}</label>*/
/* 							<div class="col-md-9">*/
/* 								<div class="radio"><label for="sf1"><input type="radio" name="sf" id="sf1" value="all" checked="checked" /> {L_SEARCH_TITLE_MSG}</label></div>*/
/* 								<div class="radio"><label for="sf2"><input type="radio" name="sf" id="sf2" value="msgonly" /> {L_SEARCH_MSG_ONLY}</label></div>*/
/* 								<div class="radio"><label for="sf3"><input type="radio" name="sf" id="sf3" value="titleonly" /> {L_SEARCH_TITLE_ONLY}</label></div>*/
/* 								<div class="radio"><label for="sf4"><input type="radio" name="sf" id="sf4" value="firstpost" /> {L_SEARCH_FIRST_POST}</label></div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<!-- EVENT search_body_search_options_append -->*/
/* */
/* 						<hr class="dashed" />*/
/* */
/* 						<!-- EVENT search_body_search_display_options_prepend -->*/
/* 						<div class="form-group">*/
/* 							<label class="control-label col-md-3" for="show_results1">{L_DISPLAY_RESULTS}{L_COLON}</label>*/
/* 							<div class="col-md-9">*/
/* 								<label for="show_results1" class="radio-inline"><input type="radio" name="sr" id="show_results1" value="posts" checked="checked" /> {L_POSTS}</label>*/
/* 								<label for="show_results2" class="radio-inline"><input type="radio" name="sr" id="show_results2" value="topics" /> {L_TOPICS}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="control-label col-md-3" for="sd">{L_RESULT_SORT}{L_COLON}</label>*/
/* 							<div class="col-md-9">*/
/* 								{S_SELECT_SORT_KEY}*/
/* 								<label for="sa" class="radio-inline"><input type="radio" name="sd" id="sa" value="a" /> {L_SORT_ASCENDING}</label>*/
/* 								<label for="sd" class="radio-inline"><input type="radio" name="sd" id="sd" value="d" checked="checked" /> {L_SORT_DESCENDING}</label>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="control-label col-md-3">{L_RESULT_DAYS}{L_COLON}</label>*/
/* 							<div class="col-md-9">*/
/* 								{S_SELECT_SORT_DAYS}*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="control-label col-md-3" >{L_RETURN_FIRST}{L_COLON}</label>*/
/* 							<div class="col-md-9">*/
/* 								<select name="ch" title="{L_RETURN_FIRST}">{S_CHARACTER_OPTIONS}</select> {L_POST_CHARACTERS}*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- EVENT search_body_search_display_options_append -->*/
/* 				</fieldset>*/
/* 				<!-- EVENT search_body_search_options_after -->*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<fieldset class="submit-buttons">*/
/* 			{S_HIDDEN_FIELDS}<input type="reset" value="{L_RESET}" name="reset" class="btn btn-danger" />&nbsp;*/
/* 			<input type="submit" name="submit" value="{L_SEARCH}" class="btn btn-primary" />*/
/* 		</fieldset>*/
/* 	</div>*/
/* </form>*/
/* <!-- EVENT search_body_form_after -->*/
/* */
/* <!-- EVENT search_body_recent_search_before -->*/
/* <!-- IF .recentsearch -->*/
/* 	<div class="row">*/
/* 		<div class="col-md-12">*/
/* 			<table class="table table-bordered table-striped">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th colspan="2" class="name">{L_RECENT_SEARCHES}</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* 					<!-- BEGIN recentsearch -->*/
/* 						<tr>*/
/* 							<td><a href="{recentsearch.U_KEYWORDS}">{recentsearch.KEYWORDS}</a></td>*/
/* 							<td class="active"><span>&nbsp;{recentsearch.TIME}</span></td>*/
/* 						</tr>*/
/* 					<!-- BEGINELSE -->*/
/* 						<tr class="bg1">*/
/* 							<td colspan="2">{L_NO_RECENT_SEARCHES}</td>*/
/* 						</tr>*/
/* 					<!-- END recentsearch -->*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* <!-- EVENT search_body_recent_search_after -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
