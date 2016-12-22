<?php

/* pagination.html */
class __TwigTemplate_8f6fb4c93910dc25c25f8f35e55afd8682fe29cd6de6e60c211459b4ad243bde extends Twig_Template
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
        echo "<nav>
\t<ul class=\"pagination no-margin\">
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
            // line 4
            echo "\t\t\t";
            if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                // line 5
                echo "\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" aria-label=\"Previous\" rel=\"prev\" role=\"button\"><i class=\"fa fa-chevron-left fa-fw\" aria-hidden=\"true\"></i> <span class=\"sr-only\">";
                echo $this->env->getExtension('phpbb')->lang("PREVIOUS");
                echo "</span></a></li>
\t\t\t";
            } elseif ($this->getAttribute(            // line 6
$context["pagination"], "S_IS_CURRENT", array())) {
                // line 7
                echo "\t\t\t\t<li class=\"active\"><span>";
                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                echo "</span></li>
\t\t\t";
            } elseif ($this->getAttribute(            // line 8
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                // line 9
                echo "\t\t\t\t<li class=\"ellipsis\" role=\"separator\"><span>";
                echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                echo "</span></li>
\t\t\t";
            } elseif ($this->getAttribute(            // line 10
$context["pagination"], "S_IS_NEXT", array())) {
                // line 11
                echo "\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" aria-label=\"Next\" rel=\"next\" role=\"button\"><span class=\"sr-only\">";
                echo $this->env->getExtension('phpbb')->lang("NEXT");
                echo "</span> <i class=\"fa fa-chevron-right fa-fw\" aria-hidden=\"true\"></i></a></li>
\t\t\t";
            } else {
                // line 13
                echo "\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                echo "\" role=\"button\">";
                echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                echo "</a></li>
\t\t\t";
            }
            // line 15
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "pagination.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  69 => 15,  61 => 13,  53 => 11,  51 => 10,  46 => 9,  44 => 8,  39 => 7,  37 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <nav>*/
/* 	<ul class="pagination no-margin">*/
/* 		<!-- BEGIN pagination -->*/
/* 			<!-- IF pagination.S_IS_PREV -->*/
/* 				<li><a href="{pagination.PAGE_URL}" aria-label="Previous" rel="prev" role="button"><i class="fa fa-chevron-left fa-fw" aria-hidden="true"></i> <span class="sr-only">{L_PREVIOUS}</span></a></li>*/
/* 			<!-- ELSEIF pagination.S_IS_CURRENT -->*/
/* 				<li class="active"><span>{pagination.PAGE_NUMBER}</span></li>*/
/* 			<!-- ELSEIF pagination.S_IS_ELLIPSIS -->*/
/* 				<li class="ellipsis" role="separator"><span>{L_ELLIPSIS}</span></li>*/
/* 			<!-- ELSEIF pagination.S_IS_NEXT -->*/
/* 				<li><a href="{pagination.PAGE_URL}" aria-label="Next" rel="next" role="button"><span class="sr-only">{L_NEXT}</span> <i class="fa fa-chevron-right fa-fw" aria-hidden="true"></i></a></li>*/
/* 			<!-- ELSE -->*/
/* 				<li><a href="{pagination.PAGE_URL}" role="button">{pagination.PAGE_NUMBER}</a></li>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- END pagination -->*/
/* 	</ul>*/
/* </nav>*/
/* */
