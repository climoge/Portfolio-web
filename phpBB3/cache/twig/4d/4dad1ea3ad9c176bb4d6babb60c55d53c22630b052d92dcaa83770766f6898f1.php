<?php

/* faq_body.html */
class __TwigTemplate_3fa5258b90b15dc3d35e71c4bbb685e43e5e10b0aa053ee5aa861e1262996f9d extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "faq_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"page-header\">
\t<h2>";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("FAQ_TITLE");
        echo "</h2>
</div>

<div class=\"panel panel-default\" id=\"faqlinks\">
\t<div class=\"panel-body\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "faq_block", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["faq_block"]) {
            // line 12
            echo "\t\t\t\t";
            if (($this->getAttribute($context["faq_block"], "SWITCH_COLUMN", array()) || ((isset($context["SWITCH_COLUMN_MANUALLY"]) ? $context["SWITCH_COLUMN_MANUALLY"] : null) && ($this->getAttribute($context["faq_block"], "S_ROW_COUNT", array()) == 4)))) {
                // line 13
                echo "\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t";
            }
            // line 16
            echo "\t\t\t\t<dl class=\"faq\">
\t\t\t\t\t<dt><strong>";
            // line 17
            echo $this->getAttribute($context["faq_block"], "BLOCK_TITLE", array());
            echo "</strong></dt>
\t\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["faq_block"], "faq_row", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["faq_row"]) {
                // line 19
                echo "\t\t\t\t\t\t<dd><a href=\"#f";
                echo $this->getAttribute($context["faq_block"], "S_ROW_COUNT", array());
                echo "r";
                echo $this->getAttribute($context["faq_row"], "S_ROW_COUNT", array());
                echo "\">";
                echo $this->getAttribute($context["faq_row"], "FAQ_QUESTION", array());
                echo "</a></dd>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t\t\t</dl>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"clear\"></div>
";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "faq_block", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["faq_block"]) {
            // line 29
            echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h2 class=\"panel-title\">";
            // line 31
            echo $this->getAttribute($context["faq_block"], "BLOCK_TITLE", array());
            echo "</h2>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["faq_block"], "faq_row", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["faq_row"]) {
                // line 35
                echo "\t\t\t\t<dl class=\"faq\">
\t\t\t\t\t<dt id=\"f";
                // line 36
                echo $this->getAttribute($context["faq_block"], "S_ROW_COUNT", array());
                echo "r";
                echo $this->getAttribute($context["faq_row"], "S_ROW_COUNT", array());
                echo "\"><strong>";
                echo $this->getAttribute($context["faq_row"], "FAQ_QUESTION", array());
                echo "</strong></dt>
\t\t\t\t\t<dd>";
                // line 37
                echo $this->getAttribute($context["faq_row"], "FAQ_ANSWER", array());
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 39
                if ( !$this->getAttribute($context["faq_row"], "S_LAST_ROW", array())) {
                    echo "<hr class=\"dashed\" />";
                }
                // line 40
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t</div>
\t\t<div class=\"panel-footer faq-footer\">
\t\t\t<div class=\"to-top pull-right\"><a href=\"#faqlinks\" class=\"top\" title=\"";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "\"><i class=\"fa fa-chevron-up fa-fw\" aria-hidden=\"true\"></i></a></div>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
";
        // line 48
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "faq_body.html", 48)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 49
        echo "
";
        // line 50
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "faq_body.html", 50)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "faq_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 50,  168 => 49,  156 => 48,  153 => 47,  143 => 43,  139 => 41,  133 => 40,  129 => 39,  124 => 37,  116 => 36,  113 => 35,  109 => 34,  103 => 31,  99 => 29,  95 => 28,  88 => 23,  81 => 21,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  52 => 13,  49 => 12,  45 => 11,  35 => 4,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <div class="page-header">*/
/* 	<h2>{L_FAQ_TITLE}</h2>*/
/* </div>*/
/* */
/* <div class="panel panel-default" id="faqlinks">*/
/* 	<div class="panel-body">*/
/* 		<div class="row">*/
/* 			<div class="col-md-6">*/
/* 			<!-- BEGIN faq_block -->*/
/* 				<!-- IF faq_block.SWITCH_COLUMN or (SWITCH_COLUMN_MANUALLY and faq_block.S_ROW_COUNT == 4) -->*/
/* 			</div>*/
/* 			<div class="col-md-6">*/
/* 			<!-- ENDIF -->*/
/* 				<dl class="faq">*/
/* 					<dt><strong>{faq_block.BLOCK_TITLE}</strong></dt>*/
/* 					<!-- BEGIN faq_row -->*/
/* 						<dd><a href="#f{faq_block.S_ROW_COUNT}r{faq_block.faq_row.S_ROW_COUNT}">{faq_block.faq_row.FAQ_QUESTION}</a></dd>*/
/* 					<!-- END faq_row -->*/
/* 				</dl>*/
/* 			<!-- END faq_block -->*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* <div class="clear"></div>*/
/* <!-- BEGIN faq_block -->*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h2 class="panel-title">{faq_block.BLOCK_TITLE}</h2>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<!-- BEGIN faq_row -->*/
/* 				<dl class="faq">*/
/* 					<dt id="f{faq_block.S_ROW_COUNT}r{faq_block.faq_row.S_ROW_COUNT}"><strong>{faq_block.faq_row.FAQ_QUESTION}</strong></dt>*/
/* 					<dd>{faq_block.faq_row.FAQ_ANSWER}</dd>*/
/* 				</dl>*/
/* 				<!-- IF not faq_block.faq_row.S_LAST_ROW --><hr class="dashed" /><!-- ENDIF -->*/
/* 			<!-- END faq_row -->*/
/* 		</div>*/
/* 		<div class="panel-footer faq-footer">*/
/* 			<div class="to-top pull-right"><a href="#faqlinks" class="top" title="{L_BACK_TO_TOP}"><i class="fa fa-chevron-up fa-fw" aria-hidden="true"></i></a></div>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- END faq_block -->*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
