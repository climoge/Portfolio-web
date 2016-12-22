<?php

/* ucp_main_bookmarks.html */
class __TwigTemplate_366466d9b9ee95b5a842249383bb612617d2b8acfc3a2c6d52eebfb33129b4d8 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_main_bookmarks.html", 1)->display($context);
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
\t\t\t<h3 class=\"panel-title\">";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h3>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\t<div class=\"alert alert-info\">";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("BOOKMARKS_EXPLAIN");
        echo "</div>
\t\t\t";
        // line 10
        if ((isset($context["S_NO_DISPLAY_BOOKMARKS"]) ? $context["S_NO_DISPLAY_BOOKMARKS"] : null)) {
            // line 11
            echo "\t\t\t\t<p class=\"alert alert-danger\">";
            echo $this->env->getExtension('phpbb')->lang("BOOKMARKS_DISABLED");
            echo "</p>
\t\t\t";
        } else {
            // line 13
            echo "\t\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()))) {
                // line 14
                echo "\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t";
                // line 16
                if ((isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null)) {
                    echo "<a class=\"btn btn-default btn-sm disabled\">";
                    echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
                    echo "</a> ";
                }
                // line 17
                echo "\t\t\t\t\t\t\t";
                if ((isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null)) {
                    // line 18
                    echo "\t\t\t\t\t\t\t\t";
                    if ((isset($context["PAGINATION"]) ? $context["PAGINATION"] : null)) {
                        // line 19
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default\" onclick=\"jumpto(); return false;\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("JUMP_TO_PAGE");
                        echo "\"><span>";
                        echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                        echo "</span></a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm\">";
                        // line 20
                        echo (isset($context["PAGINATION"]) ? $context["PAGINATION"] : null);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 22
                        echo "\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                        echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 24
                    echo "\t\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"spacer\"></div>
\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>";
                // line 32
                echo $this->env->getExtension('phpbb')->lang("BOOKMARKS");
                echo "</th>
\t\t\t\t\t\t\t\t\t<th class=\"lastpost hidden-xs\"><span>";
                // line 33
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></th>
\t\t\t\t\t\t\t\t\t<th class=\"marking\">";
                // line 34
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody class=\"topiclist cplist\">
\t\t\t\t\t\t\t\t";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                    // line 39
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["topicrow"], "S_DELETED_TOPIC", array())) {
                        // line 40
                        echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td><strong>";
                        // line 41
                        echo $this->env->getExtension('phpbb')->lang("DELETED_TOPIC");
                        echo "</strong></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"last-post\"><span>&nbsp;</span></td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"marking\"><input type=\"checkbox\" name=\"t[";
                        // line 43
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                        echo "]\" id=\"t";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                        echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 46
                        echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left forum-topic-icon\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 49
                        $location = "post_icons.html";
                        $namespace = false;
                        if (strpos($location, '@') === 0) {
                            $namespace = substr($location, 1, strpos($location, '/') - 1);
                            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                        }
                        $this->loadTemplate("post_icons.html", "ucp_main_bookmarks.html", 49)->display($context);
                        if ($namespace) {
                            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                        }
                        // line 50
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group pagination-line\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 53
                        if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                            // line 54
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                            echo "\" class=\"btn btn-warning btn-xs\" title=\"";
                            echo $this->env->getExtension('phpbb')->lang("TOPIC_UNAPPROVED");
                            echo "\"><i class=\"fa fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            echo $this->env->getExtension('phpbb')->lang("TOPIC_UNAPPROVED");
                            echo "</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 56
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                            // line 57
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                            echo "\" class=\"btn btn-warning btn-xs\"><i class=\"fa fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            echo $this->env->getExtension('phpbb')->lang("TOPIC_REPORTED");
                            echo "</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 59
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                            // line 60
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-default btn-xs disabled\"><i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 62
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                            // line 63
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 65
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                                // line 66
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                                    // line 67
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                                    echo "<li class=\"active\"><span>";
                                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                    echo "</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute(                                // line 68
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                                    echo "<li class=\"ellipsis\"><span>";
                                    echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                                    echo "</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif ($this->getAttribute(                                // line 69
$context["pagination"], "S_IS_NEXT", array())) {
                                    // line 70
                                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    echo "<li><a href=\"";
                                    echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                                    echo "\">";
                                    echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                                    echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 72
                                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 73
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 76
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", array())) {
                            // line 77
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-info\" href=\"";
                            echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", array());
                            echo "\"><i class=\"fa fa-angle-right fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 79
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                            // line 80
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-xs tooltip-link\" href=\"";
                            echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                            echo "\"  title=\"";
                            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                            echo "\"><i class=\"fa fa-angle-double-right fa-fw\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 82
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 84
                        if ($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array())) {
                            // line 85
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                            echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                            echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                            echo "\" title=\"";
                            echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 87
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
                        echo "\" class=\"topictitle\"><strong>";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
                        echo "</strong></a><br/>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<small>";
                        // line 89
                        if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                            echo "<i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                        }
                        // line 90
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo " ";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                        echo " &laquo; <a href=\"";
                        echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                        echo "\">";
                        echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                        echo "</a></small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<small>";
                        // line 93
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
                        echo " &raquo; ";
                        echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
                        echo "</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"lastpost hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t\t<span><dfn>";
                        // line 97
                        echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                        echo " </dfn>";
                        echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 98
                        echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                        echo "\"><i class=\"fa fa-external-link fa-fw\" aria-hidden=\"true\"></i></a> <br />";
                        echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                        echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"marking\"><input type=\"checkbox\" name=\"t[";
                        // line 100
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                        echo "]\" id=\"t";
                        echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                        echo "\" /></td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 103
                    echo "\t\t\t\t\t\t\t\t";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 108
                echo "\t\t\t\t\t<p><strong>";
                echo $this->env->getExtension('phpbb')->lang("NO_BOOKMARKS");
                echo "</strong></p>
\t\t\t\t";
            }
            // line 110
            echo "\t\t\t";
        }
        // line 111
        echo "\t\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())) &&  !(isset($context["S_NO_DISPLAY_BOOKMARKS"]) ? $context["S_NO_DISPLAY_BOOKMARKS"] : null))) {
            // line 112
            echo "\t\t\t\t<div class=\"text-right\">
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-success btn-sm\" href=\"#\" onclick=\"marklist('ucp', '', true); return false;\">";
            // line 115
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a>
\t\t\t\t\t\t\t<a class=\"btn btn-warning btn-sm\" href=\"#\" onclick=\"marklist('ucp', '', false); return false;\">";
            // line 116
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"submit\" name=\"unbookmark\" value=\"";
            // line 118
            echo $this->env->getExtension('phpbb')->lang("REMOVE_BOOKMARK_MARKED");
            echo "\" class=\"btn btn-danger btn-sm\" />
\t\t\t\t\t\t";
            // line 119
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t\t\t</fieldset>
\t\t\t\t</div>
\t\t\t";
        }
        // line 123
        echo "\t\t</div>
\t</div>
</form>

";
        // line 127
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_bookmarks.html", 127)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_bookmarks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 127,  419 => 123,  412 => 119,  408 => 118,  403 => 116,  399 => 115,  394 => 112,  391 => 111,  388 => 110,  382 => 108,  376 => 104,  362 => 103,  354 => 100,  345 => 98,  337 => 97,  326 => 93,  309 => 90,  305 => 89,  297 => 87,  288 => 85,  286 => 84,  282 => 82,  274 => 80,  271 => 79,  265 => 77,  262 => 76,  257 => 73,  251 => 72,  241 => 70,  239 => 69,  233 => 68,  226 => 67,  223 => 66,  219 => 65,  215 => 63,  212 => 62,  208 => 60,  205 => 59,  197 => 57,  194 => 56,  184 => 54,  182 => 53,  177 => 50,  165 => 49,  160 => 46,  152 => 43,  147 => 41,  144 => 40,  141 => 39,  124 => 38,  117 => 34,  113 => 33,  109 => 32,  100 => 25,  97 => 24,  91 => 22,  86 => 20,  79 => 19,  76 => 18,  73 => 17,  67 => 16,  63 => 14,  60 => 13,  54 => 11,  52 => 10,  48 => 9,  42 => 6,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="ucp" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			<h3 class="panel-title">{L_TITLE}</h3>*/
/* 		</div>*/
/* 		<div class="panel-body">*/
/* 			<div class="alert alert-info">{L_BOOKMARKS_EXPLAIN}</div>*/
/* 			<!-- IF S_NO_DISPLAY_BOOKMARKS -->*/
/* 				<p class="alert alert-danger">{L_BOOKMARKS_DISABLED}</p>*/
/* 			<!-- ELSE -->*/
/* 				<!-- IF .topicrow -->*/
/* 					<div class="text-center">*/
/* 						<div class="btn-group">*/
/* 							<!-- IF TOTAL_TOPICS --><a class="btn btn-default btn-sm disabled">{TOTAL_TOPICS}</a> <!-- ENDIF -->*/
/* 							<!-- IF PAGE_NUMBER -->*/
/* 								<!-- IF PAGINATION -->*/
/* 									<a href="#" class="btn btn-default" onclick="jumpto(); return false;" title="{L_JUMP_TO_PAGE}"><span>{PAGE_NUMBER}</span></a>*/
/* 									<a class="btn btn-default btn-sm">{PAGINATION}</a>*/
/* 								<!-- ELSE -->*/
/* 									<a class="btn btn-default btn-sm disabled">{PAGE_NUMBER}</a>*/
/* 								<!-- ENDIF -->*/
/* 							<!-- ENDIF -->*/
/* 						</div>*/
/* 					</div>*/
/* 					<div class="spacer"></div>*/
/* 					<div class="table-responsive">*/
/* 						<table class="table table-striped table-bordered">*/
/* 							<thead>*/
/* 								<tr>*/
/* 									<th>{L_BOOKMARKS}</th>*/
/* 									<th class="lastpost hidden-xs"><span>{L_LAST_POST}</span></th>*/
/* 									<th class="marking">{L_MARK}</th>*/
/* 								</tr>*/
/* 							</thead>*/
/* 							<tbody class="topiclist cplist">*/
/* 								<!-- BEGIN topicrow -->*/
/* 									<!-- IF topicrow.S_DELETED_TOPIC -->*/
/* 										<tr>*/
/* 											<td><strong>{L_DELETED_TOPIC}</strong></td>*/
/* 											<td class="last-post"><span>&nbsp;</span></td>*/
/* 											<td class="marking"><input type="checkbox" name="t[{topicrow.TOPIC_ID}]" id="t{topicrow.TOPIC_ID}" /></td>*/
/* 										</tr>*/
/* 									<!-- ELSE -->*/
/* 										<tr>*/
/* 											<td>*/
/* 												<div class="pull-left forum-topic-icon">*/
/* 													<!-- INCLUDE post_icons.html -->*/
/* 												</div>*/
/* 												<div class="pull-right">*/
/* 													<div class="btn-group pagination-line">*/
/* 														<!-- IF topicrow.S_TOPIC_UNAPPROVED or topicrow.S_POSTS_UNAPPROVED -->*/
/* 															<a href="{topicrow.U_MCP_QUEUE}" class="btn btn-warning btn-xs" title="{L_TOPIC_UNAPPROVED}"><i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i><span class="sr-only">{L_TOPIC_UNAPPROVED}</span></a>*/
/* 														<!-- ENDIF -->*/
/* 														<!-- IF topicrow.S_TOPIC_REPORTED -->*/
/* 															<a href="{topicrow.U_MCP_REPORT}" class="btn btn-warning btn-xs"><i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i><span class="sr-only">{L_TOPIC_REPORTED}</span></a>*/
/* 														<!-- ENDIF -->*/
/* 														<!-- IF topicrow.ATTACH_ICON_IMG -->*/
/* 															<a href="#" class="btn btn-default btn-xs disabled"><i class="fa fa-paperclip fa-fw" aria-hidden="true"></i></a>*/
/* 														<!-- ENDIF -->*/
/* 														<!-- IF .topicrow.pagination -->*/
/* 															<div class="pagination">*/
/* 																<ul>*/
/* 																<!-- BEGIN pagination -->*/
/* 																	<!-- IF topicrow.pagination.S_IS_PREV -->*/
/* 																	<!-- ELSEIF topicrow.pagination.S_IS_CURRENT --><li class="active"><span>{topicrow.pagination.PAGE_NUMBER}</span></li>*/
/* 																	<!-- ELSEIF topicrow.pagination.S_IS_ELLIPSIS --><li class="ellipsis"><span>{L_ELLIPSIS}</span></li>*/
/* 																	<!-- ELSEIF topicrow.pagination.S_IS_NEXT -->*/
/* 																	<!-- ELSE --><li><a href="{topicrow.pagination.PAGE_URL}">{topicrow.pagination.PAGE_NUMBER}</a></li>*/
/* 																	<!-- ENDIF -->*/
/* 																<!-- END pagination -->*/
/* 																</ul>*/
/* 															</div>*/
/* 														<!-- ENDIF -->*/
/* 														<!-- IF topicrow.S_UNREAD_TOPIC -->*/
/* 															<a class="btn btn-xs btn-info" href="{topicrow.U_NEWEST_POST}"><i class="fa fa-angle-right fa-fw" aria-hidden="true"></i></a>*/
/* 														<!-- ENDIF -->*/
/* 														<!-- IF not S_IS_BOT -->*/
/* 															<a class="btn btn-default btn-xs tooltip-link" href="{topicrow.U_LAST_POST}"  title="{L_LAST_POST}"><i class="fa fa-angle-double-right fa-fw" aria-hidden="true"></i></a>*/
/* 														<!-- ENDIF -->*/
/* 													</div>*/
/* 												</div>*/
/* 												<!-- IF topicrow.TOPIC_ICON_IMG -->*/
/* 													<img src="{T_ICONS_PATH}{topicrow.TOPIC_ICON_IMG}" title="{topicrow.TOPIC_FOLDER_IMG_ALT}"/>*/
/* 												<!-- ENDIF -->*/
/* 												<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle"><strong>{topicrow.TOPIC_TITLE}</strong></a><br/>*/
/* 												<div class="visible-xs-block">*/
/* 													<small><!-- IF topicrow.ATTACH_ICON_IMG --><i class="fa fa-paperclip fa-fw" aria-hidden="true"></i> <!-- ENDIF -->*/
/* 													{L_LAST_POST} {L_POST_BY_AUTHOR} {topicrow.LAST_POST_AUTHOR_FULL} &laquo; <a href="{topicrow.U_LAST_POST}" title="{L_GOTO_LAST_POST}">{topicrow.LAST_POST_TIME}</a></small>*/
/* 												</div>*/
/* 												<div class="hidden-xs">*/
/* 													<small>{L_POST_BY_AUTHOR} {topicrow.TOPIC_AUTHOR_FULL} &raquo; {topicrow.FIRST_POST_TIME}</small>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="lastpost hidden-xs">*/
/* 												<span><dfn>{L_LAST_POST} </dfn>{L_POST_BY_AUTHOR} {topicrow.LAST_POST_AUTHOR_FULL}*/
/* 												<a href="{topicrow.U_LAST_POST}" title="{L_GOTO_LAST_POST}"><i class="fa fa-external-link fa-fw" aria-hidden="true"></i></a> <br />{topicrow.LAST_POST_TIME}</span>*/
/* 											</td>*/
/* 											<td class="marking"><input type="checkbox" name="t[{topicrow.TOPIC_ID}]" id="t{topicrow.TOPIC_ID}" /></td>*/
/* 										</tr>*/
/* 									<!-- ENDIF -->*/
/* 								<!-- END topicrow -->*/
/* 							</tbody>*/
/* 						</table>*/
/* 					</div>*/
/* 				<!-- ELSE -->*/
/* 					<p><strong>{L_NO_BOOKMARKS}</strong></p>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF .topicrow and not S_NO_DISPLAY_BOOKMARKS -->*/
/* 				<div class="text-right">*/
/* 					<fieldset>*/
/* 						<div class="btn-group">*/
/* 							<a class="btn btn-success btn-sm" href="#" onclick="marklist('ucp', '', true); return false;">{L_MARK_ALL}</a>*/
/* 							<a class="btn btn-warning btn-sm" href="#" onclick="marklist('ucp', '', false); return false;">{L_UNMARK_ALL}</a>*/
/* 						</div>*/
/* 						<input type="submit" name="unbookmark" value="{L_REMOVE_BOOKMARK_MARKED}" class="btn btn-danger btn-sm" />*/
/* 						{S_FORM_TOKEN}*/
/* 					</fieldset>*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
