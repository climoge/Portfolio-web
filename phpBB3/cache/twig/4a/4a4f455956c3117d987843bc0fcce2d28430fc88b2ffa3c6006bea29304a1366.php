<?php

/* ucp_main_subscribed.html */
class __TwigTemplate_83600e39c786ac9551cf67dd8c46a2c79ba411f1098ec4f171e87c818a3faec7 extends Twig_Template
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
        $this->loadTemplate("ucp_header.html", "ucp_main_subscribed.html", 1)->display($context);
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
        echo $this->env->getExtension('phpbb')->lang("WATCHED_EXPLAIN");
        echo "</div>
\t\t\t";
        // line 10
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array()))) {
            // line 11
            echo "\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("WATCHED_FORUMS");
            echo "</th>
\t\t\t\t\t\t\t\t<th class=\"lastpost\">";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo "</th>
\t\t\t\t\t\t\t\t<th class=\"marking\">";
            // line 17
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody class=\"topiclist cplist\">
\t\t\t\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
                // line 22
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t";
                // line 24
                if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\" class=\"icon-link\"></a>";
                }
                // line 25
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 26
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                echo "</a><br />
\t\t\t\t\t\t\t\t\t\t\t";
                // line 27
                echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 28
                if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                    // line 29
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 30
                    echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                    echo " ";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["forumrow"], "LAST_POST_AUTHOR_FULL", array());
                    echo " &laquo; <a href=\"";
                    echo $this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "U_LAST_POST", array());
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"lastpost\">
\t\t\t\t\t\t\t\t\t\t";
                // line 36
                if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span><dfn>";
                    echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                    echo " </dfn>";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["forumrow"], "LAST_POST_AUTHOR_FULL", array());
                    echo "
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 38
                    echo $this->getAttribute((isset($context["topicrow"]) ? $context["topicrow"] : null), "U_LAST_POST", array());
                    echo "\"><i class=\"fa fa-external-link fa-fw\" aria-hidden=\"true\"></i></a> <br />";
                    echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 40
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("NO_POSTS");
                    echo "<br />
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"marking\"><input type=\"checkbox\" name=\"f[";
                // line 43
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                echo "]\" id=\"f";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                echo "\" /></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        } elseif (        // line 49
(isset($context["S_FORUM_NOTIFY"]) ? $context["S_FORUM_NOTIFY"] : null)) {
            // line 50
            echo "\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
            // line 54
            echo $this->env->getExtension('phpbb')->lang("WATCHED_FORUMS");
            echo "</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody class=\"topiclist cplist\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 59
            echo $this->env->getExtension('phpbb')->lang("NO_WATCHED_FORUMS");
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        }
        // line 65
        echo "
\t\t\t";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array()))) {
            // line 67
            echo "\t\t\t\t<hr class=\"dashed\"/>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            // line 71
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo "</a>
\t\t\t\t\t\t\t";
            // line 72
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 73
                echo "\t\t\t\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "ucp_main_subscribed.html", 73)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 74
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 75
                echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "</a>
\t\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"spacer\"></div>
\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("WATCHED_TOPICS");
            echo "</th>
\t\t\t\t\t\t\t\t<th class=\"lastpost hidden-xs\">";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("LAST_POST");
            echo "</th>
\t\t\t\t\t\t\t\t<th class=\"marking\">";
            // line 87
            echo $this->env->getExtension('phpbb')->lang("MARK");
            echo "</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody class=\"topiclist cplist\">
\t\t\t\t\t\t\t";
            // line 91
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
                // line 92
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"pull-left forum-topic-icon\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 95
                $location = "post_icons.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("post_icons.html", "ucp_main_subscribed.html", 95)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 96
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group pagination-line\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 99
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", array()) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", array()))) {
                    // line 100
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", array());
                    echo "\" class=\"btn btn-warning btn-xs\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("TOPIC_UNAPPROVED");
                    echo "\"><i class=\"fa fa-question fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    echo $this->env->getExtension('phpbb')->lang("TOPIC_UNAPPROVED");
                    echo "</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 102
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", array())) {
                    // line 103
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", array());
                    echo "\" class=\"btn btn-warning btn-xs\" title=\"";
                    echo $this->env->getExtension('phpbb')->lang("TOPIC_REPORTED");
                    echo "\"><i class=\"fa fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    echo $this->env->getExtension('phpbb')->lang("TOPIC_REPORTED");
                    echo "</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 105
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", array()))) {
                    // line 106
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 108
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 109
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["pagination"], "S_IS_PREV", array())) {
                            // line 110
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", array())) {
                            echo "<li class=\"active\"><span>";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 111
$context["pagination"], "S_IS_ELLIPSIS", array())) {
                            echo "<li class=\"ellipsis\"><span>";
                            echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                            echo "</span></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 112
$context["pagination"], "S_IS_NEXT", array())) {
                            // line 113
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["pagination"], "PAGE_URL", array());
                            echo "\">";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", array());
                            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 115
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 116
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 119
                echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 121
                if ($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array())) {
                    // line 122
                    echo "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                    echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", array());
                    echo "\"/>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", array());
                echo "\" class=\"topictitle\"><strong>";
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", array());
                echo "</strong></a><br/>
\t\t\t\t\t\t\t\t\t\t<div class=\"visible-xs-block\">
\t\t\t\t\t\t\t\t\t\t\t<small>";
                // line 126
                if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", array())) {
                    echo "<i class=\"fa fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                }
                // line 127
                echo "\t\t\t\t\t\t\t\t\t\t\t";
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
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"hidden-xs\">
\t\t\t\t\t\t\t\t\t\t\t<small>";
                // line 130
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", array());
                echo " &raquo; ";
                echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", array());
                echo "</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"lastpost hidden-xs\">
\t\t\t\t\t\t\t\t\t\t<span><dfn>";
                // line 134
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo " </dfn>";
                echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", array());
                echo "
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 135
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                echo "\"><i class=\"fa fa-external-link fa-fw\" aria-hidden=\"true\"></i></a> <br />";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", array());
                echo "</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"marking\"><input type=\"checkbox\" name=\"t[";
                // line 137
                echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                echo "]\" id=\"t";
                echo $this->getAttribute($context["topicrow"], "TOPIC_ID", array());
                echo "\" /></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
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
            // line 140
            echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        } elseif (        // line 143
(isset($context["S_TOPIC_NOTIFY"]) ? $context["S_TOPIC_NOTIFY"] : null)) {
            // line 144
            echo "\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t<table class=\"table table-striped table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>";
            // line 148
            echo $this->env->getExtension('phpbb')->lang("WATCHED_TOPICS");
            echo "</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody class=\"topiclist cplist\">
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 153
            echo $this->env->getExtension('phpbb')->lang("NO_WATCHED_TOPICS");
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
        }
        // line 159
        echo "\t\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topicrow", array())) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array())))) {
            // line 160
            echo "\t\t\t\t<fieldset class=\"text-right\">
\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t<a class=\"btn btn-success btn-sm\" href=\"#\" onclick=\"marklist('ucp', 't', true); marklist('ucp', 'f', true); return false;\">";
            // line 162
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a>
\t\t\t\t\t\t<a class=\"btn btn-warning btn-sm\" href=\"#\" onclick=\"marklist('ucp', 't', false); marklist('ucp', 'f', false); return false;\">";
            // line 163
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"submit\" name=\"unwatch\" value=\"";
            // line 165
            echo $this->env->getExtension('phpbb')->lang("UNWATCH_MARKED");
            echo "\" class=\"btn btn-primary btn-sm\" />
\t\t\t\t\t";
            // line 166
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t\t\t</fieldset>
\t\t\t";
        }
        // line 169
        echo "\t\t</div>
\t</div>
</form>

";
        // line 173
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_subscribed.html", 173)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_subscribed.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  525 => 173,  519 => 169,  513 => 166,  509 => 165,  504 => 163,  500 => 162,  496 => 160,  493 => 159,  484 => 153,  476 => 148,  470 => 144,  468 => 143,  463 => 140,  444 => 137,  435 => 135,  427 => 134,  416 => 130,  399 => 127,  395 => 126,  387 => 124,  378 => 122,  376 => 121,  372 => 119,  367 => 116,  361 => 115,  351 => 113,  349 => 112,  343 => 111,  336 => 110,  333 => 109,  329 => 108,  325 => 106,  322 => 105,  312 => 103,  309 => 102,  299 => 100,  297 => 99,  292 => 96,  280 => 95,  275 => 92,  258 => 91,  251 => 87,  247 => 86,  243 => 85,  233 => 77,  227 => 75,  224 => 74,  211 => 73,  209 => 72,  205 => 71,  199 => 67,  197 => 66,  194 => 65,  185 => 59,  177 => 54,  171 => 50,  169 => 49,  164 => 46,  153 => 43,  150 => 42,  144 => 40,  137 => 38,  128 => 37,  126 => 36,  121 => 33,  107 => 30,  104 => 29,  102 => 28,  98 => 27,  92 => 26,  89 => 25,  83 => 24,  79 => 22,  75 => 21,  68 => 17,  64 => 16,  60 => 15,  54 => 11,  52 => 10,  48 => 9,  42 => 6,  34 => 3,  31 => 2,  19 => 1,);
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
/* 			<div class="alert alert-info">{L_WATCHED_EXPLAIN}</div>*/
/* 			<!-- IF .forumrow -->*/
/* 				<div class="table-responsive">*/
/* 					<table class="table table-striped table-bordered">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>{L_WATCHED_FORUMS}</th>*/
/* 								<th class="lastpost">{L_LAST_POST}</th>*/
/* 								<th class="marking">{L_MARK}</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody class="topiclist cplist">*/
/* 							<!-- BEGIN forumrow -->*/
/* 								<tr>*/
/* 									<td>*/
/* 										<!-- IF forumrow.S_UNREAD_FORUM --><a href="{forumrow.U_VIEWFORUM}" class="icon-link"></a><!-- ENDIF -->*/
/* 										<div class="list-inner">*/
/* 											<a href="{forumrow.U_VIEWFORUM}" class="forumtitle">{forumrow.FORUM_NAME}</a><br />*/
/* 											{forumrow.FORUM_DESC}*/
/* 											<!-- IF forumrow.LAST_POST_TIME -->*/
/* 											<div class="responsive-show" style="display: none;">*/
/* 												{L_LAST_POST} {L_POST_BY_AUTHOR} {forumrow.LAST_POST_AUTHOR_FULL} &laquo; <a href="{topicrow.U_LAST_POST}">{forumrow.LAST_POST_TIME}</a>*/
/* 											</div>*/
/* 											<!-- ENDIF -->*/
/* 										</div>*/
/* 									</td>*/
/* 									<td class="lastpost">*/
/* 										<!-- IF forumrow.LAST_POST_TIME -->*/
/* 											<span><dfn>{L_LAST_POST} </dfn>{L_POST_BY_AUTHOR} {forumrow.LAST_POST_AUTHOR_FULL}*/
/* 											<a href="{topicrow.U_LAST_POST}"><i class="fa fa-external-link fa-fw" aria-hidden="true"></i></a> <br />{forumrow.LAST_POST_TIME}</span>*/
/* 										<!-- ELSE -->*/
/* 											{L_NO_POSTS}<br />*/
/* 										<!-- ENDIF -->*/
/* 									</td>*/
/* 									<td class="marking"><input type="checkbox" name="f[{forumrow.FORUM_ID}]" id="f{forumrow.FORUM_ID}" /></td>*/
/* 								</tr>*/
/* 							<!-- END forumrow -->*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			<!-- ELSEIF S_FORUM_NOTIFY -->*/
/* 				<div class="table-responsive">*/
/* 					<table class="table table-striped table-bordered">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>{L_WATCHED_FORUMS}</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody class="topiclist cplist">*/
/* 							<tr>*/
/* 								<td>{L_NO_WATCHED_FORUMS}</td>*/
/* 							</tr>*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF .topicrow -->*/
/* 				<hr class="dashed"/>*/
/* 				<div class="row">*/
/* 					<div class="col-md-12 text-center">*/
/* 						<div class="btn-group">*/
/* 							<a class="btn btn-default btn-sm disabled">{TOTAL_TOPICS}</a>*/
/* 							<!-- IF .pagination -->*/
/* 								<!-- INCLUDE pagination.html -->*/
/* 							<!-- ELSE -->*/
/* 								<a class="btn btn-default btn-sm disabled">{PAGE_NUMBER}</a>*/
/* 							<!-- ENDIF -->*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="spacer"></div>*/
/* 				<div class="table-responsive">*/
/* 					<table class="table table-striped table-bordered">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>{L_WATCHED_TOPICS}</th>*/
/* 								<th class="lastpost hidden-xs">{L_LAST_POST}</th>*/
/* 								<th class="marking">{L_MARK}</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody class="topiclist cplist">*/
/* 							<!-- BEGIN topicrow -->*/
/* 								<tr>*/
/* 									<td>*/
/* 										<div class="pull-left forum-topic-icon">*/
/* 											<!-- INCLUDE post_icons.html -->*/
/* 										</div>*/
/* 										<div class="pull-right">*/
/* 											<div class="btn-group pagination-line">*/
/* 												<!-- IF topicrow.S_TOPIC_UNAPPROVED or topicrow.S_POSTS_UNAPPROVED -->*/
/* 													<a href="{topicrow.U_MCP_QUEUE}" class="btn btn-warning btn-xs" title="{L_TOPIC_UNAPPROVED}"><i class="fa fa-question fa-fw" aria-hidden="true"></i><span class="sr-only">{L_TOPIC_UNAPPROVED}</span></a>*/
/* 												<!-- ENDIF -->*/
/* 												<!-- IF topicrow.S_TOPIC_REPORTED -->*/
/* 													<a href="{topicrow.U_MCP_REPORT}" class="btn btn-warning btn-xs" title="{L_TOPIC_REPORTED}"><i class="fa fa-exclamation-triangle fa-fw" aria-hidden="true"></i><span class="sr-only">{L_TOPIC_REPORTED}</span></a>*/
/* 												<!-- ENDIF -->*/
/* 												<!-- IF .topicrow.pagination -->*/
/* 													<div class="pagination">*/
/* 														<ul>*/
/* 														<!-- BEGIN pagination -->*/
/* 															<!-- IF topicrow.pagination.S_IS_PREV -->*/
/* 															<!-- ELSEIF topicrow.pagination.S_IS_CURRENT --><li class="active"><span>{topicrow.pagination.PAGE_NUMBER}</span></li>*/
/* 															<!-- ELSEIF topicrow.pagination.S_IS_ELLIPSIS --><li class="ellipsis"><span>{L_ELLIPSIS}</span></li>*/
/* 															<!-- ELSEIF topicrow.pagination.S_IS_NEXT -->*/
/* 															<!-- ELSE --><li><a href="{topicrow.pagination.PAGE_URL}">{topicrow.pagination.PAGE_NUMBER}</a></li>*/
/* 															<!-- ENDIF -->*/
/* 														<!-- END pagination -->*/
/* 														</ul>*/
/* 													</div>*/
/* 												<!-- ENDIF -->*/
/* 											</div>*/
/* 										</div>*/
/* 										<!-- IF topicrow.TOPIC_ICON_IMG -->*/
/* 											<img src="{T_ICONS_PATH}{topicrow.TOPIC_ICON_IMG}" title="{topicrow.TOPIC_FOLDER_IMG_ALT}"/>*/
/* 										<!-- ENDIF -->*/
/* 										<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle"><strong>{topicrow.TOPIC_TITLE}</strong></a><br/>*/
/* 										<div class="visible-xs-block">*/
/* 											<small><!-- IF topicrow.ATTACH_ICON_IMG --><i class="fa fa-paperclip fa-fw" aria-hidden="true"></i> <!-- ENDIF -->*/
/* 											{L_LAST_POST} {L_POST_BY_AUTHOR} {topicrow.LAST_POST_AUTHOR_FULL} &laquo; <a href="{topicrow.U_LAST_POST}" title="{L_GOTO_LAST_POST}">{topicrow.LAST_POST_TIME}</a></small>*/
/* 										</div>*/
/* 										<div class="hidden-xs">*/
/* 											<small>{L_POST_BY_AUTHOR} {topicrow.TOPIC_AUTHOR_FULL} &raquo; {topicrow.FIRST_POST_TIME}</small>*/
/* 										</div>*/
/* 									</td>*/
/* 									<td class="lastpost hidden-xs">*/
/* 										<span><dfn>{L_LAST_POST} </dfn>{L_POST_BY_AUTHOR} {topicrow.LAST_POST_AUTHOR_FULL}*/
/* 										<a href="{topicrow.U_LAST_POST}" title="{L_GOTO_LAST_POST}"><i class="fa fa-external-link fa-fw" aria-hidden="true"></i></a> <br />{topicrow.LAST_POST_TIME}</span>*/
/* 									</td>*/
/* 									<td class="marking"><input type="checkbox" name="t[{topicrow.TOPIC_ID}]" id="t{topicrow.TOPIC_ID}" /></td>*/
/* 								</tr>*/
/* 							<!-- END topicrow -->*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			<!-- ELSEIF S_TOPIC_NOTIFY -->*/
/* 				<div class="table-responsive">*/
/* 					<table class="table table-striped table-bordered">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th>{L_WATCHED_TOPICS}</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody class="topiclist cplist">*/
/* 							<tr>*/
/* 								<td>{L_NO_WATCHED_TOPICS}</td>*/
/* 							</tr>*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF .topicrow or .forumrow -->*/
/* 				<fieldset class="text-right">*/
/* 					<div class="btn-group">*/
/* 						<a class="btn btn-success btn-sm" href="#" onclick="marklist('ucp', 't', true); marklist('ucp', 'f', true); return false;">{L_MARK_ALL}</a>*/
/* 						<a class="btn btn-warning btn-sm" href="#" onclick="marklist('ucp', 't', false); marklist('ucp', 'f', false); return false;">{L_UNMARK_ALL}</a>*/
/* 					</div>*/
/* 					<input type="submit" name="unwatch" value="{L_UNWATCH_MARKED}" class="btn btn-primary btn-sm" />*/
/* 					{S_FORM_TOKEN}*/
/* 				</fieldset>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
