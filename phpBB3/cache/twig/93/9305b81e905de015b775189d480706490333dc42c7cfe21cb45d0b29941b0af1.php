<?php

/* ucp_pm_message_footer.html */
class __TwigTemplate_0d95ec42532a3d136ae3e5c89d3d6bace0cfd4e0c035087ec255c6649b450e36 extends Twig_Template
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
        echo "\t\t</div>
\t</div>
\t";
        // line 3
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "ucp_pm_message_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* 		</div>*/
/* 	</div>*/
/* 	{S_FORM_TOKEN}*/
/* </form>*/
/* */
