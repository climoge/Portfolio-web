<?php

/* posting_attach_body.html */
class __TwigTemplate_4cf8df61155ba181b88bc0f7ba2b2864f146f9d66e1aa31030e7d3d555ea8304 extends Twig_Template
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
        echo "<div role=\"tabpanel\" class=\"tab-pane\" id=\"attach-tab\">
\t<p>";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("ADD_ATTACHMENT_EXPLAIN");
        echo " <span class=\"hidden\" id=\"drag-n-drop-message\">";
        echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_DRAG_TEXTAREA");
        echo "</span></p>
\t<fieldset class=\"form-horizontal\" id=\"attach-panel-basic\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"fileupload\" class=\"col-md-2 control-label\">";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("FILENAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"file\" name=\"fileupload\" id=\"fileupload\" maxlength=\"";
        // line 8
        echo (isset($context["FILESIZE"]) ? $context["FILESIZE"] : null);
        echo "\" />
\t\t\t\t\t<input type=\"submit\" name=\"add_file\" value=\"";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("ADD_FILE");
        echo "\" class=\"btn btn-default\" onclick=\"upload = true;\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"filecomment\" class=\"col-md-2 control-label\">";
        // line 14
        echo $this->env->getExtension('phpbb')->lang("FILE_COMMENT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label>
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<textarea name=\"filecomment\" id=\"filecomment\" rows=\"1\" cols=\"40\" class=\"form-control\">";
        // line 16
        echo (isset($context["FILE_COMMENT"]) ? $context["FILE_COMMENT"] : null);
        echo "</textarea>
\t\t\t</div>
\t\t</div>
\t</fieldset>
\t<div id=\"attach-panel-multi\">
\t\t<input type=\"button\" class=\"btn btn-primary\" value=\"";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_ADD_FILES");
        echo "\" id=\"add_files\" />
\t</div>

\t<div class=\"panel panel-default\" id=\"file-list-container\" ";
        // line 24
        if ( !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attach_row", array()))) {
            echo "style=\"display:none\"";
        }
        echo ">
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"attach-name\">";
        // line 29
        echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_FILENAME");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-comment\">";
        // line 30
        echo $this->env->getExtension('phpbb')->lang("FILE_COMMENT");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-filesize\">";
        // line 31
        echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_SIZE");
        echo "</th>
\t\t\t\t\t\t<th class=\"attach-status\">";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("PLUPLOAD_STATUS");
        echo "</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody class=\"responsive-skip-empty\" id=\"file-list\">
\t\t\t\t\t<tr class=\"attach-row\" id=\"attach-row-tpl\">
\t\t\t\t\t\t<td class=\"attach-name\">
\t\t\t\t\t\t\t<span class=\"file-name ellipsis-text\"></span>
\t\t\t\t\t\t\t<span class=\"attach-controls btn-group\">
\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("PLACE_INLINE");
        echo "\" class=\"btn btn-warning btn-sm file-inline-bbcode\" />
\t\t\t\t\t\t\t\t<input type=\"button\" value=\"";
        // line 41
        echo $this->env->getExtension('phpbb')->lang("DELETE_FILE");
        echo "\" class=\"btn btn-danger btn-sm file-delete\" />
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"clear\"></span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"attach-comment\">
\t\t\t\t\t\t\t<textarea rows=\"1\" cols=\"30\" class=\"form-control\"></textarea>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"attach-filesize\">
\t\t\t\t\t\t\t<span class=\"file-size\"></span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"attach-status\">
\t\t\t\t\t\t\t<span class=\"file-progress\">
\t\t\t\t\t\t\t\t<span class=\"file-progress-bar\"></span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"file-status\"></span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "attach_row", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attach_row"]) {
            // line 59
            echo "\t\t\t\t\t\t<tr class=\"attach-row\" data-attach-id=\"";
            echo $this->getAttribute($context["attach_row"], "ATTACH_ID", array());
            echo "\">
\t\t\t\t\t\t\t<td class=\"attach-name\">
\t\t\t\t\t\t\t\t<span class=\"file-name ellipsis-text\"><a href=\"";
            // line 61
            echo $this->getAttribute($context["attach_row"], "U_VIEW_ATTACHMENT", array());
            echo "\">";
            echo $this->getAttribute($context["attach_row"], "FILENAME", array());
            echo "</a></span>
\t\t\t\t\t\t\t\t<span class=\"attach-controls btn-group\">
\t\t\t\t\t\t\t\t\t";
            // line 63
            if ((isset($context["S_INLINE_ATTACHMENT_OPTIONS"]) ? $context["S_INLINE_ATTACHMENT_OPTIONS"] : null)) {
                echo "<input type=\"button\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("PLACE_INLINE");
                echo "\" class=\"btn btn-warning btn-sm file-inline-bbcode\" />&nbsp; ";
            }
            // line 64
            echo "\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"delete_file[";
            echo $this->getAttribute($context["attach_row"], "ASSOC_INDEX", array());
            echo "]\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("DELETE_FILE");
            echo "\" class=\"btn btn-danger btn-sm file-delete\" />
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<span class=\"clear\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-comment\">
\t\t\t\t\t\t\t\t<textarea name=\"comment_list[";
            // line 69
            echo $this->getAttribute($context["attach_row"], "ASSOC_INDEX", array());
            echo "]\" rows=\"1\" cols=\"30\" class=\"from-control\">";
            echo $this->getAttribute($context["attach_row"], "FILE_COMMENT", array());
            echo "</textarea>
\t\t\t\t\t\t\t\t";
            // line 70
            echo $this->getAttribute($context["attach_row"], "S_HIDDEN", array());
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-filesize\">
\t\t\t\t\t\t\t\t<span class=\"file-size\">";
            // line 73
            echo $this->getAttribute($context["attach_row"], "FILESIZE", array());
            echo "</span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"attach-status\">
\t\t\t\t\t\t\t\t<span class=\"file-status file-uploaded\"></span>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "posting_attach_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 80,  172 => 73,  166 => 70,  160 => 69,  149 => 64,  143 => 63,  136 => 61,  130 => 59,  126 => 58,  106 => 41,  102 => 40,  91 => 32,  87 => 31,  83 => 30,  79 => 29,  69 => 24,  63 => 21,  55 => 16,  49 => 14,  41 => 9,  37 => 8,  30 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div role="tabpanel" class="tab-pane" id="attach-tab">*/
/* 	<p>{L_ADD_ATTACHMENT_EXPLAIN} <span class="hidden" id="drag-n-drop-message">{L_PLUPLOAD_DRAG_TEXTAREA}</span></p>*/
/* 	<fieldset class="form-horizontal" id="attach-panel-basic">*/
/* 		<div class="form-group">*/
/* 			<label for="fileupload" class="col-md-2 control-label">{L_FILENAME}{L_COLON}</label>*/
/* 			<div class="col-md-5">*/
/* 				<div class="form-group">*/
/* 					<input type="file" name="fileupload" id="fileupload" maxlength="{FILESIZE}" />*/
/* 					<input type="submit" name="add_file" value="{L_ADD_FILE}" class="btn btn-default" onclick="upload = true;" />*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="form-group">*/
/* 			<label for="filecomment" class="col-md-2 control-label">{L_FILE_COMMENT}{L_COLON}</label>*/
/* 			<div class="col-md-5">*/
/* 				<textarea name="filecomment" id="filecomment" rows="1" cols="40" class="form-control">{FILE_COMMENT}</textarea>*/
/* 			</div>*/
/* 		</div>*/
/* 	</fieldset>*/
/* 	<div id="attach-panel-multi">*/
/* 		<input type="button" class="btn btn-primary" value="{L_PLUPLOAD_ADD_FILES}" id="add_files" />*/
/* 	</div>*/
/* */
/* 	<div class="panel panel-default" id="file-list-container" <!-- IF not .attach_row -->style="display:none"<!-- ENDIF -->>*/
/* 		<div class="table-responsive">*/
/* 			<table class="table table-striped table-bordered">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th class="attach-name">{L_PLUPLOAD_FILENAME}</th>*/
/* 						<th class="attach-comment">{L_FILE_COMMENT}</th>*/
/* 						<th class="attach-filesize">{L_PLUPLOAD_SIZE}</th>*/
/* 						<th class="attach-status">{L_PLUPLOAD_STATUS}</th>*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody class="responsive-skip-empty" id="file-list">*/
/* 					<tr class="attach-row" id="attach-row-tpl">*/
/* 						<td class="attach-name">*/
/* 							<span class="file-name ellipsis-text"></span>*/
/* 							<span class="attach-controls btn-group">*/
/* 								<input type="button" value="{L_PLACE_INLINE}" class="btn btn-warning btn-sm file-inline-bbcode" />*/
/* 								<input type="button" value="{L_DELETE_FILE}" class="btn btn-danger btn-sm file-delete" />*/
/* 							</span>*/
/* 							<span class="clear"></span>*/
/* 						</td>*/
/* 						<td class="attach-comment">*/
/* 							<textarea rows="1" cols="30" class="form-control"></textarea>*/
/* 						</td>*/
/* 						<td class="attach-filesize">*/
/* 							<span class="file-size"></span>*/
/* 						</td>*/
/* 						<td class="attach-status">*/
/* 							<span class="file-progress">*/
/* 								<span class="file-progress-bar"></span>*/
/* 							</span>*/
/* 							<span class="file-status"></span>*/
/* 						</td>*/
/* 					</tr>*/
/* 					<!-- BEGIN attach_row -->*/
/* 						<tr class="attach-row" data-attach-id="{attach_row.ATTACH_ID}">*/
/* 							<td class="attach-name">*/
/* 								<span class="file-name ellipsis-text"><a href="{attach_row.U_VIEW_ATTACHMENT}">{attach_row.FILENAME}</a></span>*/
/* 								<span class="attach-controls btn-group">*/
/* 									<!-- IF S_INLINE_ATTACHMENT_OPTIONS --><input type="button" value="{L_PLACE_INLINE}" class="btn btn-warning btn-sm file-inline-bbcode" />&nbsp; <!-- ENDIF -->*/
/* 									<input type="submit" name="delete_file[{attach_row.ASSOC_INDEX}]" value="{L_DELETE_FILE}" class="btn btn-danger btn-sm file-delete" />*/
/* 								</span>*/
/* 								<span class="clear"></span>*/
/* 							</td>*/
/* 							<td class="attach-comment">*/
/* 								<textarea name="comment_list[{attach_row.ASSOC_INDEX}]" rows="1" cols="30" class="from-control">{attach_row.FILE_COMMENT}</textarea>*/
/* 								{attach_row.S_HIDDEN}*/
/* 							</td>*/
/* 							<td class="attach-filesize">*/
/* 								<span class="file-size">{attach_row.FILESIZE}</span>*/
/* 							</td>*/
/* 							<td class="attach-status">*/
/* 								<span class="file-status file-uploaded"></span>*/
/* 							</td>*/
/* 						</tr>*/
/* 					<!-- END attach_row -->*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
