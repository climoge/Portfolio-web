<?php

/* ucp_footer.html */
class __TwigTemplate_827fa7a1dbf154820519d3b684c89a35d9996fb4b69962776f9edfb6118e4a5f extends Twig_Template
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
        echo "
\t\t\t</div>
\t\t\t";
        // line 3
        if ((isset($context["S_COMPOSE_PM"]) ? $context["S_COMPOSE_PM"] : null)) {
            // line 4
            echo "\t\t\t\t";
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "</form>
\t\t\t";
        }
        // line 6
        echo "\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t</div>
</div>

";
        // line 11
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "ucp_footer.html", 11)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 12
        echo "
";
        // line 13
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_footer.html", 13)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  50 => 12,  38 => 11,  31 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* */
/* 			</div>*/
/* 			<!-- IF S_COMPOSE_PM -->*/
/* 				{S_FORM_TOKEN}</form>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 		<div class="clearfix"></div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
