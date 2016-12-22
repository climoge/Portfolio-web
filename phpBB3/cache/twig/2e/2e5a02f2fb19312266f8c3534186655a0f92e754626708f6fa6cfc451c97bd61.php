<?php

/* posting_pm_layout.html */
class __TwigTemplate_d6729c3579dfed26cec20c900c087bb6c8ec7d8d7d02cca333f0e2fa9ee1f3a7 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "posting_pm_layout.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ((isset($context["S_DRAFT_LOADED"]) ? $context["S_DRAFT_LOADED"] : null)) {
            // line 4
            echo "\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t<h3 class=\"panel-title\">";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("INFORMATION");
            echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<p>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("DRAFT_LOADED_PM");
            echo "</p>
\t\t</div>
\t</div>
";
        }
        // line 13
        echo "
";
        // line 14
        if ((isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) {
            $location = "drafts.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("drafts.html", "posting_pm_layout.html", 14)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 15
        echo "
";
        // line 16
        if ((isset($context["S_DISPLAY_PREVIEW"]) ? $context["S_DISPLAY_PREVIEW"] : null)) {
            $location = "posting_preview.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_preview.html", "posting_pm_layout.html", 16)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 17
        echo "
<div class=\"panel panel-default\">
\t<div class=\"panel-heading\">
\t\t<h3 class=\"panel-title\">";
        // line 20
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h3>
\t</div>
\t<div class=\"panel-body\">
\t\t<div id=\"pmheader-postingbox\">
\t\t\t";
        // line 24
        // line 25
        echo "\t\t\t";
        $location = "posting_pm_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_pm_header.html", "posting_pm_layout.html", 25)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 26
        echo "\t\t\t";
        // line 27
        echo "\t\t</div>
\t\t<div id=\"postingbox\">
\t\t\t";
        // line 29
        $value = 1;
        $context['definition']->set('EXTRA_POSTING_OPTIONS', $value);
        // line 30
        echo "\t\t\t";
        $location = "posting_editor.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_editor.html", "posting_pm_layout.html", 30)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 31
        echo "\t\t\t";
        if ((isset($context["S_SHOW_ATTACH_BOX"]) ? $context["S_SHOW_ATTACH_BOX"] : null)) {
            $location = "posting_attach_body.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_attach_body.html", "posting_pm_layout.html", 31)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 32
        echo "\t\t\t";
        if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
            $location = "posting_topic_review.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("posting_topic_review.html", "posting_pm_layout.html", 32)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 33
        echo "\t\t\t";
        if ((isset($context["S_DISPLAY_HISTORY"]) ? $context["S_DISPLAY_HISTORY"] : null)) {
            $location = "ucp_pm_history.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_history.html", "posting_pm_layout.html", 33)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 34
        echo "\t\t</div>
\t</div>
</div>

";
        // line 38
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "posting_pm_layout.html", 38)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "posting_pm_layout.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 38,  180 => 34,  165 => 33,  150 => 32,  135 => 31,  122 => 30,  119 => 29,  115 => 27,  113 => 26,  100 => 25,  99 => 24,  92 => 20,  87 => 17,  73 => 16,  70 => 15,  56 => 14,  53 => 13,  46 => 9,  40 => 6,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <!-- IF S_DRAFT_LOADED -->*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title">{L_INFORMATION}</h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<p>{L_DRAFT_LOADED_PM}</p>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_SHOW_DRAFTS --><!-- INCLUDE drafts.html --><!-- ENDIF -->*/
/* */
/* <!-- IF S_DISPLAY_PREVIEW --><!-- INCLUDE posting_preview.html --><!-- ENDIF -->*/
/* */
/* <div class="panel panel-default">*/
/* 	<div class="panel-heading">*/
/* 		<h3 class="panel-title">{L_TITLE}</h3>*/
/* 	</div>*/
/* 	<div class="panel-body">*/
/* 		<div id="pmheader-postingbox">*/
/* 			<!-- EVENT posting_pm_layout_include_pm_header_before -->*/
/* 			<!-- INCLUDE posting_pm_header.html -->*/
/* 			<!-- EVENT posting_pm_layout_include_pm_header_after -->*/
/* 		</div>*/
/* 		<div id="postingbox">*/
/* 			<!-- DEFINE $EXTRA_POSTING_OPTIONS = 1 -->*/
/* 			<!-- INCLUDE posting_editor.html -->*/
/* 			<!-- IF S_SHOW_ATTACH_BOX --><!-- INCLUDE posting_attach_body.html --><!-- ENDIF -->*/
/* 			<!-- IF S_DISPLAY_REVIEW --><!-- INCLUDE posting_topic_review.html --><!-- ENDIF -->*/
/* 			<!-- IF S_DISPLAY_HISTORY --><!-- INCLUDE ucp_pm_history.html --><!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
