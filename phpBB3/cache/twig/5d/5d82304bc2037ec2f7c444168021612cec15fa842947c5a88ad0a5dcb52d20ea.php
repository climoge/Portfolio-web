<?php

/* memberlist_body.html */
class __TwigTemplate_c85df26c6154b8f1ccf329141e2709fd540ae36f6f22f1e108becea0a9e926ee extends Twig_Template
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
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 2
            echo "\t";
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "memberlist_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "\t";
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t<form method=\"post\" id=\"results\" action=\"";
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\" data-form-name=\"";
            echo (isset($context["S_FORM_NAME"]) ? $context["S_FORM_NAME"] : null);
            echo "\" data-field-name=\"";
            echo (isset($context["S_FIELD_NAME"]) ? $context["S_FIELD_NAME"] : null);
            echo "\">
";
        } else {
            // line 6
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 6)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 7
            echo "\t<div class=\"panel\" id=\"memberlist_search\"";
            if ( !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t";
            // line 8
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 8)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 9
            echo "\t</div>
\t<form method=\"post\" action=\"";
            // line 10
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\">
";
        }
        // line 12
        echo "
";
        // line 13
        if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
            // line 14
            echo "\t<h2 class=\"group-title\"";
            if ((isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null)) {
                echo " style=\"color:#";
                echo (isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null);
                echo ";\"";
            }
            echo ">";
            echo (isset($context["GROUP_NAME"]) ? $context["GROUP_NAME"] : null);
            echo "</h2>
\t";
            // line 15
            if ((isset($context["U_MANAGE"]) ? $context["U_MANAGE"] : null)) {
                // line 16
                echo "\t\t<p class=\"right responsive-center manage rightside\"><a href=\"";
                echo (isset($context["U_MANAGE"]) ? $context["U_MANAGE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MANAGE_GROUP");
                echo "</a></p>
\t";
            }
            // line 18
            echo "
\t<p>";
            // line 19
            echo (isset($context["GROUP_DESC"]) ? $context["GROUP_DESC"] : null);
            echo " ";
            echo (isset($context["GROUP_TYPE"]) ? $context["GROUP_TYPE"] : null);
            echo "</p>
\t<p>
\t\t";
            // line 21
            if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
                echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            }
            // line 22
            echo "\t\t";
            if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            }
            // line 23
            echo "\t\t";
            if ((isset($context["GROUP_RANK"]) ? $context["GROUP_RANK"] : null)) {
                echo (isset($context["GROUP_RANK"]) ? $context["GROUP_RANK"] : null);
            }
            // line 24
            echo "\t</p>
";
        } else {
            // line 26
            echo "\t<div class=\"page-header\">
\t\t<h2 class=\"solo\">";
            // line 27
            echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
            if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <a href=\"";
                echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
                echo "\">";
                echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
                echo "</a>";
            }
            echo "</h2>
\t</div>
\t<div class=\"text-center\">
\t\t<ul class=\"pagination pagination-sm\">
\t\t\t";
            // line 31
            if (((isset($context["U_FIND_MEMBER"]) ? $context["U_FIND_MEMBER"] : null) &&  !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null))) {
                // line 32
                echo "\t\t\t\t<li><a href=\"";
                echo (isset($context["U_FIND_MEMBER"]) ? $context["U_FIND_MEMBER"] : null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo addslashes($this->env->getExtension('phpbb')->lang("HIDE_MEMBER_SEARCH"));
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo "</a></li>
\t\t\t";
            } elseif (((            // line 33
(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null) && (isset($context["U_HIDE_FIND_MEMBER"]) ? $context["U_HIDE_FIND_MEMBER"] : null)) &&  !(isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null))) {
                // line 34
                echo "\t\t\t\t<li><a href=\"";
                echo (isset($context["U_HIDE_FIND_MEMBER"]) ? $context["U_HIDE_FIND_MEMBER"] : null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo addslashes($this->env->getExtension('phpbb')->lang("FIND_USERNAME"));
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("HIDE_MEMBER_SEARCH");
                echo "</a></li>
\t\t\t";
            }
            // line 36
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "first_char", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["first_char"]) {
                // line 37
                echo "\t\t\t\t<li><a href=\"";
                echo $this->getAttribute($context["first_char"], "U_SORT", array());
                echo "\" data-type=\"char-select\">";
                echo $this->getAttribute($context["first_char"], "DESC", array());
                echo "</a></li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['first_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t</ul>
\t</div>
";
        }
        // line 42
        echo "
";
        // line 43
        if ((((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null) ||  !(isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) ||  !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
            // line 44
            echo "\t<div class=\"forumbg forumbg-table\">
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-striped table-bordered\" id=\"memberlist\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"name\" data-dfn=\"";
            // line 49
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
            if (((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
            }
            echo "\">
\t\t\t\t\t\t\t<span class=\"rank-img pull-right\"><a href=\"";
            // line 50
            echo (isset($context["U_SORT_RANK"]) ? $context["U_SORT_RANK"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo "</a></span>
\t\t\t\t\t\t\t<a href=\"";
            // line 51
            echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
            echo "\">";
            if (((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
            }
            echo "</a>
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th class=\"posts\"><a href=\"";
            // line 53
            echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS");
            echo "</a></th>
\t\t\t\t\t\t<th class=\"infos hidden-xs\">";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                    echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                    echo " ";
                }
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</th>
\t\t\t\t\t\t<th class=\"joined\"><a href=\"";
            // line 55
            echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("JOINED");
            echo "</a></th>
\t\t\t\t\t\t";
            // line 56
            if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                echo "<th class=\"last-active\"><a href=\"";
                echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                echo "</a></th>";
            }
            // line 57
            echo "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
";
        }
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 62
            echo "\t";
            if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                // line 63
                echo "\t\t";
                if (( !$this->getAttribute($context["memberrow"], "S_GROUP_LEADER", array()) &&  !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_MEMBER_HEADER", array()))) {
                    // line 64
                    echo "\t\t\t";
                    if (((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null) && $this->getAttribute($context["memberrow"], "S_FIRST_ROW", array()))) {
                        // line 65
                        echo "\t\t\t\t<tr class=\"alert-success\">
\t\t\t\t\t<td colspan=\"";
                        // line 66
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "5";
                        } else {
                            echo "4";
                        }
                        echo "\">&nbsp;</td>
\t\t\t\t</tr>
\t\t\t";
                    }
                    // line 69
                    echo "\t\t\t";
                    if ((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null)) {
                        // line 70
                        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t\t\t";
                    }
                    // line 75
                    echo "
<div class=\"forumbg forumbg-table\">
\t<div class=\"table-responsive\">
\t\t<table class=\"table table-striped table-bordered\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t";
                    // line 81
                    if ( !(isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null)) {
                        // line 82
                        echo "\t\t\t\t\t\t<th class=\"name\" data-dfn=\"";
                        echo $this->env->getExtension('phpbb')->lang("RANK");
                        echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        echo $this->env->getExtension('phpbb')->lang("USERNAME");
                        echo "\"><span class=\"rank-img pull-right\"><a href=\"";
                        echo (isset($context["U_SORT_RANK"]) ? $context["U_SORT_RANK"] : null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("RANK");
                        echo "</a></span><a href=\"";
                        echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
                        echo "\">";
                        if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                            echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("USERNAME");
                        }
                        echo "</a></th>
\t\t\t\t\t\t\t<th class=\"posts\"><a href=\"";
                        // line 83
                        echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo "</a></th>
\t\t\t\t\t\t\t<th class=\"infos hidden-xs\">";
                        // line 84
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t\t\t\t\t<th class=\"joined\"><a href=\"";
                        // line 85
                        echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb')->lang("JOINED");
                        echo "</a></th>
\t\t\t\t\t\t\t";
                        // line 86
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "<th class=\"active\"><a href=\"";
                            echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
                            echo "#memberlist\">";
                            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                            echo "</a></th>";
                        }
                        // line 87
                        echo "\t\t\t\t\t";
                    } elseif ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                        // line 88
                        echo "\t\t\t\t\t\t<th class=\"name\">";
                        echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        echo "</th>
\t\t\t\t\t\t<th class=\"posts\">";
                        // line 89
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo "</th>
\t\t\t\t\t\t<th class=\"infos hidden-xs\">";
                        // line 90
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t\t\t\t<th class=\"joined\">";
                        // line 91
                        echo $this->env->getExtension('phpbb')->lang("JOINED");
                        echo "</th>
\t\t\t\t\t\t";
                        // line 92
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "<th class=\"last-active\">";
                            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                            echo "</th>";
                        }
                        // line 93
                        echo "\t\t\t\t\t";
                    }
                    // line 94
                    echo "\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
                    // line 97
                    $value = 1;
                    $context['definition']->set('S_MEMBER_HEADER', $value);
                    // line 98
                    echo "\t\t";
                }
                // line 99
                echo "\t";
            }
            // line 100
            echo "\t\t\t<tr ";
            if ($this->getAttribute($context["memberrow"], "S_INACTIVE", array())) {
                echo "class=\"danger\"";
            }
            echo ">
\t\t\t\t<td class=\"name\">";
            // line 101
            if ($this->getAttribute($context["memberrow"], "RANK_IMG", array())) {
                echo "<span class=\"rank-img pull-right\">";
                echo $this->getAttribute($context["memberrow"], "RANK_IMG", array());
                echo "</span>";
            } else {
                echo "<span class=\"rank-img\">";
                echo $this->getAttribute($context["memberrow"], "RANK_TITLE", array());
                echo "</span>";
            }
            // line 102
            echo "\t\t\t\t";
            if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
                echo "<input type=\"checkbox\" name=\"user\" value=\"";
                echo $this->getAttribute($context["memberrow"], "USERNAME", array());
                echo "\" /> ";
            }
            echo $this->getAttribute($context["memberrow"], "USERNAME_FULL", array());
            if ($this->getAttribute($context["memberrow"], "S_INACTIVE", array())) {
                echo " (";
                echo $this->env->getExtension('phpbb')->lang("INACTIVE");
                echo ")";
            }
            if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
                echo "<br />[&nbsp;<a href=\"#\" onclick=\"insert_single_user('#results', '";
                echo $this->getAttribute($context["memberrow"], "A_USERNAME", array());
                echo "'); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("SELECT");
                echo "</a>&nbsp;]";
            }
            echo "</td>
\t\t\t\t<td class=\"posts\">";
            // line 103
            if (($this->getAttribute($context["memberrow"], "POSTS", array()) && (isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["memberrow"], "U_SEARCH_USER", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
                echo "\"><span class=\"badge\">";
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
                echo "</span></a>";
            } else {
                echo "<span class=\"badge\">";
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
                echo "</span>";
            }
            echo "</td>
\t\t\t\t<td class=\"infos hidden-xs\">";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                echo "<div>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</div>";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
\t\t\t\t<td class=\"joined\">";
            // line 105
            echo $this->getAttribute($context["memberrow"], "JOINED", array());
            echo "</td>
\t\t\t\t";
            // line 106
            if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
                echo "<td class=\"last-active\">";
                echo $this->getAttribute($context["memberrow"], "LAST_ACTIVE", array());
                echo "&nbsp;</td>";
            }
            // line 107
            echo "\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 109
            echo "\t\t\t<tr class=\"bg1\">
\t\t\t\t<td colspan=\"";
            // line 110
            if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("NO_MEMBERS");
            echo "</td>
\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
</div>

";
        // line 118
        if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
            // line 119
            echo "\t<fieldset class=\"text-center\">
\t\t<div class=\"btn-group\">
\t\t\t<a href=\"#\" class=\"btn btn-sm btn-success\" onclick=\"marklist('results', 'user', true); return false;\">";
            // line 121
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a>
\t\t\t<a href=\"#\" class=\"btn btn-sm btn-warning\" onclick=\"marklist('results', 'user', false); return false;\">";
            // line 122
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a>
\t\t</div>
\t\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 124
            echo $this->env->getExtension('phpbb')->lang("SELECT_MARKED");
            echo "\" class=\"btn btn-sm btn-default\" />
\t</fieldset>
";
        }
        // line 127
        echo "
";
        // line 128
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 129
            echo "\t</form>
\t<form method=\"post\" id=\"sort-results\" action=\"";
            // line 130
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\">
";
        }
        // line 132
        echo "
";
        // line 133
        if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null))) {
            // line 134
            echo "\t<fieldset>
\t\t";
            // line 135
            if ((isset($context["PREVIOUS_PAGE"]) ? $context["PREVIOUS_PAGE"] : null)) {
                echo "<a href=\"";
                echo (isset($context["PREVIOUS_PAGE"]) ? $context["PREVIOUS_PAGE"] : null);
                echo "\" class=\"left-box ";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("PREVIOUS");
                echo "</a>";
            }
            // line 136
            echo "\t\t";
            if ((isset($context["NEXT_PAGE"]) ? $context["NEXT_PAGE"] : null)) {
                echo "<a href=\"";
                echo (isset($context["NEXT_PAGE"]) ? $context["NEXT_PAGE"] : null);
                echo "\" class=\"right-box ";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("NEXT");
                echo "</a>";
            }
            // line 137
            echo "\t\t<label for=\"sk\">";
            echo $this->env->getExtension('phpbb')->lang("SELECT_SORT_METHOD");
            echo ": <select name=\"sk\" id=\"sk\">";
            echo (isset($context["S_MODE_SELECT"]) ? $context["S_MODE_SELECT"] : null);
            echo "</select></label>
\t\t<label for=\"sd\">";
            // line 138
            echo $this->env->getExtension('phpbb')->lang("ORDER");
            echo " <select name=\"sd\" id=\"sd\">";
            echo (isset($context["S_ORDER_SELECT"]) ? $context["S_ORDER_SELECT"] : null);
            echo "</select> <input type=\"submit\" name=\"sort\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"btn btn-default\" /></label>
\t</fieldset>
";
        }
        // line 141
        echo "
</form>

<div class=\"row\">
\t<div class=\"col-md-12 text-center\">
\t\t<div class=\"btn-group\">
\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
        // line 147
        echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
        echo "</a>
\t\t\t";
        // line 148
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 149
            echo "\t\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "memberlist_body.html", 149)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 150
            echo "\t\t\t";
        } else {
            // line 151
            echo "\t\t\t\t<a class=\"btn btn-default btn-sm disabled\">";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "</a>
\t\t\t";
        }
        // line 153
        echo "\t\t</div>
\t</div>
</div>

";
        // line 157
        if ((isset($context["PAGINATION"]) ? $context["PAGINATION"] : null)) {
            // line 158
            echo "\t<div class=\"row\">
\t\t<div class=\"col-md-12 text-center\">
\t\t\t<div class=\"btn-group topic-pagination\">
\t\t\t\t";
            // line 161
            echo (isset($context["PAGINATION"]) ? $context["PAGINATION"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 166
        echo "
";
        // line 167
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 168
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "memberlist_body.html", 168)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 170
            echo "\t";
            $location = "jumpbox.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox.html", "memberlist_body.html", 170)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 171
            echo "\t";
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "memberlist_body.html", 171)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "memberlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  731 => 171,  718 => 170,  704 => 168,  702 => 167,  699 => 166,  691 => 161,  686 => 158,  684 => 157,  678 => 153,  672 => 151,  669 => 150,  656 => 149,  654 => 148,  650 => 147,  642 => 141,  632 => 138,  625 => 137,  614 => 136,  604 => 135,  601 => 134,  599 => 133,  596 => 132,  591 => 130,  588 => 129,  586 => 128,  583 => 127,  577 => 124,  572 => 122,  568 => 121,  564 => 119,  562 => 118,  555 => 113,  540 => 110,  537 => 109,  531 => 107,  525 => 106,  521 => 105,  503 => 104,  487 => 103,  465 => 102,  455 => 101,  448 => 100,  445 => 99,  442 => 98,  439 => 97,  434 => 94,  431 => 93,  425 => 92,  421 => 91,  406 => 90,  402 => 89,  397 => 88,  394 => 87,  386 => 86,  380 => 85,  365 => 84,  359 => 83,  340 => 82,  338 => 81,  330 => 75,  323 => 70,  320 => 69,  310 => 66,  307 => 65,  304 => 64,  301 => 63,  298 => 62,  293 => 61,  287 => 57,  279 => 56,  273 => 55,  258 => 54,  252 => 53,  241 => 51,  235 => 50,  225 => 49,  218 => 44,  216 => 43,  213 => 42,  208 => 39,  197 => 37,  192 => 36,  182 => 34,  180 => 33,  171 => 32,  169 => 31,  154 => 27,  151 => 26,  147 => 24,  142 => 23,  137 => 22,  133 => 21,  126 => 19,  123 => 18,  115 => 16,  113 => 15,  102 => 14,  100 => 13,  97 => 12,  92 => 10,  89 => 9,  77 => 8,  70 => 7,  57 => 6,  47 => 4,  34 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_IN_SEARCH_POPUP -->*/
/* 	<!-- INCLUDE simple_header.html -->*/
/* 	<!-- INCLUDE memberlist_search.html -->*/
/* 	<form method="post" id="results" action="{S_MODE_ACTION}" data-form-name="{S_FORM_NAME}" data-field-name="{S_FIELD_NAME}">*/
/* <!-- ELSE -->*/
/* 	<!-- INCLUDE overall_header.html -->*/
/* 	<div class="panel" id="memberlist_search"<!-- IF not S_SEARCH_USER --> style="display: none;"<!-- ENDIF -->>*/
/* 		<!-- INCLUDE memberlist_search.html -->*/
/* 	</div>*/
/* 	<form method="post" action="{S_MODE_ACTION}">*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_SHOW_GROUP -->*/
/* 	<h2 class="group-title"<!-- IF GROUP_COLOR --> style="color:#{GROUP_COLOR};"<!-- ENDIF -->>{GROUP_NAME}</h2>*/
/* 	<!-- IF U_MANAGE -->*/
/* 		<p class="right responsive-center manage rightside"><a href="{U_MANAGE}">{L_MANAGE_GROUP}</a></p>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<p>{GROUP_DESC} {GROUP_TYPE}</p>*/
/* 	<p>*/
/* 		<!-- IF AVATAR_IMG -->{AVATAR_IMG}<!-- ENDIF -->*/
/* 		<!-- IF RANK_IMG -->{RANK_IMG}<!-- ENDIF -->*/
/* 		<!-- IF GROUP_RANK -->{GROUP_RANK}<!-- ENDIF -->*/
/* 	</p>*/
/* <!-- ELSE -->*/
/* 	<div class="page-header">*/
/* 		<h2 class="solo">{PAGE_TITLE}<!-- IF SEARCH_WORDS -->{L_COLON} <a href="{U_SEARCH_WORDS}">{SEARCH_WORDS}</a><!-- ENDIF --></h2>*/
/* 	</div>*/
/* 	<div class="text-center">*/
/* 		<ul class="pagination pagination-sm">*/
/* 			<!-- IF U_FIND_MEMBER and not S_SEARCH_USER -->*/
/* 				<li><a href="{U_FIND_MEMBER}" id="member_search" data-alt-text="{LA_HIDE_MEMBER_SEARCH}">{L_FIND_USERNAME}</a></li>*/
/* 			<!-- ELSEIF S_SEARCH_USER and U_HIDE_FIND_MEMBER and not S_IN_SEARCH_POPUP -->*/
/* 				<li><a href="{U_HIDE_FIND_MEMBER}" id="member_search" data-alt-text="{LA_FIND_USERNAME}">{L_HIDE_MEMBER_SEARCH}</a></li>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- BEGIN first_char -->*/
/* 				<li><a href="{first_char.U_SORT}" data-type="char-select">{first_char.DESC}</a></li>*/
/* 			<!-- END first_char -->*/
/* 		</ul>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_LEADERS_SET or not S_SHOW_GROUP or not .memberrow -->*/
/* 	<div class="forumbg forumbg-table">*/
/* 		<div class="table-responsive">*/
/* 			<table class="table table-striped table-bordered" id="memberlist">*/
/* 				<thead>*/
/* 					<tr>*/
/* 						<th class="name" data-dfn="{L_RANK}{L_COMMA_SEPARATOR}<!-- IF S_SHOW_GROUP and .memberrow -->{L_GROUP_LEADER}<!-- ELSE -->{L_USERNAME}<!-- ENDIF -->">*/
/* 							<span class="rank-img pull-right"><a href="{U_SORT_RANK}">{L_RANK}</a></span>*/
/* 							<a href="{U_SORT_USERNAME}"><!-- IF S_SHOW_GROUP and .memberrow -->{L_GROUP_LEADER}<!-- ELSE -->{L_USERNAME}<!-- ENDIF --></a>*/
/* 						</th>*/
/* 						<th class="posts"><a href="{U_SORT_POSTS}">{L_POSTS}</a></th>*/
/* 						<th class="infos hidden-xs"><!-- BEGIN custom_fields --><!-- IF not custom_fields.S_FIRST_ROW -->{L_COMMA_SEPARATOR} <!-- ENDIF -->{custom_fields.PROFILE_FIELD_NAME}<!-- END custom_fields --></th>*/
/* 						<th class="joined"><a href="{U_SORT_JOINED}">{L_JOINED}</a></th>*/
/* 						<!-- IF U_SORT_ACTIVE --><th class="last-active"><a href="{U_SORT_ACTIVE}">{L_LAST_ACTIVE}</a></th><!-- ENDIF -->*/
/* 					</tr>*/
/* 				</thead>*/
/* 				<tbody>*/
/* <!-- ENDIF -->*/
/* <!-- BEGIN memberrow -->*/
/* 	<!-- IF S_SHOW_GROUP -->*/
/* 		<!-- IF not memberrow.S_GROUP_LEADER and not $S_MEMBER_HEADER -->*/
/* 			<!-- IF S_LEADERS_SET and memberrow.S_FIRST_ROW -->*/
/* 				<tr class="alert-success">*/
/* 					<td colspan="<!-- IF U_SORT_ACTIVE -->5<!-- ELSE -->4<!-- ENDIF -->">&nbsp;</td>*/
/* 				</tr>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_LEADERS_SET -->*/
/* 				</tbody>*/
/* 			</table>*/
/* 		</div>*/
/* 	</div>*/
/* 			<!-- ENDIF -->*/
/* */
/* <div class="forumbg forumbg-table">*/
/* 	<div class="table-responsive">*/
/* 		<table class="table table-striped table-bordered">*/
/* 			<thead>*/
/* 				<tr>*/
/* 					<!-- IF not S_LEADERS_SET -->*/
/* 						<th class="name" data-dfn="{L_RANK}{L_COMMA_SEPARATOR}{L_USERNAME}"><span class="rank-img pull-right"><a href="{U_SORT_RANK}">{L_RANK}</a></span><a href="{U_SORT_USERNAME}"><!-- IF S_SHOW_GROUP -->{L_GROUP_MEMBERS}<!-- ELSE -->{L_USERNAME}<!-- ENDIF --></a></th>*/
/* 							<th class="posts"><a href="{U_SORT_POSTS}#memberlist">{L_POSTS}</a></th>*/
/* 							<th class="infos hidden-xs"><!-- BEGIN custom_fields --><!-- IF not custom_fields.S_FIRST_ROW -->{L_COMMA_SEPARATOR} <!-- ENDIF -->{custom_fields.PROFILE_FIELD_NAME}<!-- END custom_fields --></th>*/
/* 							<th class="joined"><a href="{U_SORT_JOINED}#memberlist">{L_JOINED}</a></th>*/
/* 							<!-- IF U_SORT_ACTIVE --><th class="active"><a href="{U_SORT_ACTIVE}#memberlist">{L_LAST_ACTIVE}</a></th><!-- ENDIF -->*/
/* 					<!-- ELSEIF S_SHOW_GROUP -->*/
/* 						<th class="name">{L_GROUP_MEMBERS}</th>*/
/* 						<th class="posts">{L_POSTS}</th>*/
/* 						<th class="infos hidden-xs"><!-- BEGIN custom_fields --><!-- IF not custom_fields.S_FIRST_ROW -->{L_COMMA_SEPARATOR} <!-- ENDIF -->{custom_fields.PROFILE_FIELD_NAME}<!-- END custom_fields --></th>*/
/* 						<th class="joined">{L_JOINED}</th>*/
/* 						<!-- IF U_SORT_ACTIVE --><th class="last-active">{L_LAST_ACTIVE}</th><!-- ENDIF -->*/
/* 					<!-- ENDIF -->*/
/* 				</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 			<!-- DEFINE $S_MEMBER_HEADER = 1 -->*/
/* 		<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* 			<tr <!-- IF memberrow.S_INACTIVE -->class="danger"<!-- ENDIF -->>*/
/* 				<td class="name"><!-- EVENT memberlist_body_rank_prepend --><!-- IF memberrow.RANK_IMG --><span class="rank-img pull-right">{memberrow.RANK_IMG}</span><!-- ELSE --><span class="rank-img">{memberrow.RANK_TITLE}</span><!-- ENDIF --><!-- EVENT memberlist_body_rank_append -->*/
/* 				<!-- IF S_IN_SEARCH_POPUP and not S_SELECT_SINGLE --><input type="checkbox" name="user" value="{memberrow.USERNAME}" /> <!-- ENDIF --><!-- EVENT memberlist_body_username_prepend -->{memberrow.USERNAME_FULL}<!-- IF memberrow.S_INACTIVE --> ({L_INACTIVE})<!-- ENDIF --><!-- EVENT memberlist_body_username_append --><!-- IF S_IN_SEARCH_POPUP --><br />[&nbsp;<a href="#" onclick="insert_single_user('#results', '{memberrow.A_USERNAME}'); return false;">{L_SELECT}</a>&nbsp;]<!-- ENDIF --></td>*/
/* 				<td class="posts"><!-- IF memberrow.POSTS and S_DISPLAY_SEARCH --><a href="{memberrow.U_SEARCH_USER}" title="{L_SEARCH_USER_POSTS}"><span class="badge">{memberrow.POSTS}</span></a><!-- ELSE --><span class="badge">{memberrow.POSTS}</span><!-- ENDIF --></td>*/
/* 				<td class="infos hidden-xs"><!-- BEGIN custom_fields --><div>{memberrow.custom_fields.PROFILE_FIELD_VALUE}</div><!-- BEGINELSE -->&nbsp;<!-- END custom_fields --></td>*/
/* 				<td class="joined">{memberrow.JOINED}</td>*/
/* 				<!-- IF S_VIEWONLINE --><td class="last-active">{memberrow.LAST_ACTIVE}&nbsp;</td><!-- ENDIF -->*/
/* 			</tr>*/
/* 				<!-- BEGINELSE -->*/
/* 			<tr class="bg1">*/
/* 				<td colspan="<!-- IF S_VIEWONLINE -->5<!-- ELSE -->4<!-- ENDIF -->">{L_NO_MEMBERS}</td>*/
/* 			</tr>*/
/* 				<!-- END memberrow -->*/
/* 			</tbody>*/
/* 		</table>*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF S_IN_SEARCH_POPUP and not S_SELECT_SINGLE -->*/
/* 	<fieldset class="text-center">*/
/* 		<div class="btn-group">*/
/* 			<a href="#" class="btn btn-sm btn-success" onclick="marklist('results', 'user', true); return false;">{L_MARK_ALL}</a>*/
/* 			<a href="#" class="btn btn-sm btn-warning" onclick="marklist('results', 'user', false); return false;">{L_UNMARK_ALL}</a>*/
/* 		</div>*/
/* 		<input type="submit" name="submit" value="{L_SELECT_MARKED}" class="btn btn-sm btn-default" />*/
/* 	</fieldset>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_IN_SEARCH_POPUP -->*/
/* 	</form>*/
/* 	<form method="post" id="sort-results" action="{S_MODE_ACTION}">*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_IN_SEARCH_POPUP and not S_SEARCH_USER -->*/
/* 	<fieldset>*/
/* 		<!-- IF PREVIOUS_PAGE --><a href="{PREVIOUS_PAGE}" class="left-box {S_CONTENT_FLOW_BEGIN}">{L_PREVIOUS}</a><!-- ENDIF -->*/
/* 		<!-- IF NEXT_PAGE --><a href="{NEXT_PAGE}" class="right-box {S_CONTENT_FLOW_END}">{L_NEXT}</a><!-- ENDIF -->*/
/* 		<label for="sk">{L_SELECT_SORT_METHOD}: <select name="sk" id="sk">{S_MODE_SELECT}</select></label>*/
/* 		<label for="sd">{L_ORDER} <select name="sd" id="sd">{S_ORDER_SELECT}</select> <input type="submit" name="sort" value="{L_SUBMIT}" class="btn btn-default" /></label>*/
/* 	</fieldset>*/
/* <!-- ENDIF -->*/
/* */
/* </form>*/
/* */
/* <div class="row">*/
/* 	<div class="col-md-12 text-center">*/
/* 		<div class="btn-group">*/
/* 			<a class="btn btn-default btn-sm disabled">{TOTAL_USERS}</a>*/
/* 			<!-- IF .pagination -->*/
/* 				<!-- INCLUDE pagination.html -->*/
/* 			<!-- ELSE -->*/
/* 				<a class="btn btn-default btn-sm disabled">{PAGE_NUMBER}</a>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF PAGINATION -->*/
/* 	<div class="row">*/
/* 		<div class="col-md-12 text-center">*/
/* 			<div class="btn-group topic-pagination">*/
/* 				{PAGINATION}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_IN_SEARCH_POPUP -->*/
/* 	<!-- INCLUDE simple_footer.html -->*/
/* <!-- ELSE -->*/
/* 	<!-- INCLUDE jumpbox.html -->*/
/* 	<!-- INCLUDE overall_footer.html -->*/
/* <!-- ENDIF -->*/
