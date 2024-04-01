<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* memberlist_view.html */
class __TwigTemplate_3903d0f553feff5e8752cd08ce0fd578d937330b5e49eda2096c40839d5d082f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "memberlist_view.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div class=\"wrap\" id=\"wrap\">
\t<h2 class=\"memberlist-title\">";
        // line 4
        echo ($context["PAGE_TITLE"] ?? null);
        echo "</h2>

\t";
        // line 6
        // line 7
        echo "
\t<form method=\"post\" action=\"";
        // line 8
        echo ($context["S_PROFILE_ACTION"] ?? null);
        echo "\" id=\"viewprofile\">
\t<div class=\"panel bg1";
        // line 9
        if (($context["S_ONLINE"] ?? null)) {
            echo " online";
        }
        echo "\">
\t\t<div class=\"inner\">

\t\t";
        // line 12
        if (($context["AVATAR_IMG"] ?? null)) {
            // line 13
            echo "\t\t\t<dl class=\"left-box\">
\t\t\t\t<dt class=\"profile-avatar\">";
            // line 14
            echo ($context["AVATAR_IMG"] ?? null);
            echo "</dt>
\t\t\t\t";
            // line 15
            // line 16
            echo "\t\t\t\t";
            if (($context["RANK_TITLE"] ?? null)) {
                echo "<dd style=\"text-align: center;\">";
                echo ($context["RANK_TITLE"] ?? null);
                echo "</dd>";
            }
            // line 17
            echo "\t\t\t\t";
            if (($context["RANK_IMG"] ?? null)) {
                echo "<dd style=\"text-align: center;\">";
                echo ($context["RANK_IMG"] ?? null);
                echo "</dd>";
            }
            // line 18
            echo "\t\t\t\t";
            // line 19
            echo "\t\t\t</dl>
\t\t";
        }
        // line 21
        echo "
\t\t<dl class=\"left-box details profile-details\">
\t\t\t<dt>";
        // line 23
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt>
\t\t\t<dd>
\t\t\t\t";
        // line 25
        if (($context["USER_COLOR"] ?? null)) {
            echo "<span style=\"color: ";
            echo ($context["USER_COLOR"] ?? null);
            echo "; font-weight: bold;\">";
        } else {
            echo "<span>";
        }
        echo ($context["USERNAME"] ?? null);
        echo "</span>";
        // line 26
        echo "\t\t\t\t";
        if (($context["U_EDIT_SELF"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_EDIT_SELF"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_PROFILE");
            echo "</a> ]";
        }
        // line 27
        echo "\t\t\t\t";
        if (($context["U_USER_ADMIN"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_USER_ADMIN"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_ADMIN");
            echo "</a> ]";
        }
        // line 28
        echo "\t\t\t\t";
        if (($context["U_USER_BAN"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_USER_BAN"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_BAN");
            echo "</a> ]";
        }
        // line 29
        echo "\t\t\t\t";
        if (($context["U_SWITCH_PERMISSIONS"] ?? null)) {
            echo " [ <a href=\"";
            echo ($context["U_SWITCH_PERMISSIONS"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USE_PERMISSIONS");
            echo "</a> ]";
        }
        // line 30
        echo "\t\t\t</dd>
\t\t\t";
        // line 31
        if ( !($context["AVATAR_IMG"] ?? null)) {
            // line 32
            echo "\t\t\t\t";
            // line 33
            echo "\t\t\t\t";
            if (($context["RANK_TITLE"] ?? null)) {
                echo "<dt>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</dt> <dd>";
                echo ($context["RANK_TITLE"] ?? null);
                echo "</dd>";
            }
            // line 34
            echo "\t\t\t\t";
            if (($context["RANK_IMG"] ?? null)) {
                echo "<dt>";
                if (($context["RANK_TITLE"] ?? null)) {
                    echo "&nbsp;";
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("RANK");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                }
                echo "</dt> <dd>";
                echo ($context["RANK_IMG"] ?? null);
                echo "</dd>";
            }
            // line 35
            echo "\t\t\t\t";
            // line 36
            echo "\t\t\t";
        }
        // line 37
        echo "\t\t\t";
        if (($context["S_USER_INACTIVE"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_IS_INACTIVE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["USER_INACTIVE_REASON"] ?? null);
            echo "</dd>";
        }
        // line 38
        echo "\t\t\t";
        if ((($context["AGE"] ?? null) !== "")) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("AGE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["AGE"] ?? null);
            echo "</dd>";
        }
        // line 39
        echo "\t\t\t";
        if (($context["S_GROUP_OPTIONS"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERGROUPS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><select name=\"g\">";
            echo ($context["S_GROUP_OPTIONS"] ?? null);
            echo "</select> <input type=\"submit\" name=\"submit\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("GO");
            echo "\" class=\"button2\" /></dd>";
        }
        // line 40
        echo "\t\t\t";
        // line 41
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_fields", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 42
            echo "\t\t\t\t";
            if ( !twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 42)) {
                // line 43
                echo "\t\t\t\t\t<dt>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 43);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</dt> <dd>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 43);
                echo "</dd>
\t\t\t\t";
            }
            // line 45
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t";
        // line 47
        echo "\t\t\t";
        // line 48
        echo "\t\t\t";
        if ((($context["S_USER_LOGGED_IN"] ?? null) && ($context["S_ZEBRA"] ?? null))) {
            // line 49
            echo "\t\t\t\t";
            if (($context["U_REMOVE_FRIEND"] ?? null)) {
                // line 50
                echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo ($context["U_REMOVE_FRIEND"] ?? null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE_FRIEND");
                echo "</strong></a></dd>
\t\t\t\t";
            } elseif (            // line 51
($context["U_REMOVE_FOE"] ?? null)) {
                // line 52
                echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo ($context["U_REMOVE_FOE"] ?? null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE_FOE");
                echo "</strong></a></dd>
\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t";
                if (($context["U_ADD_FRIEND"] ?? null)) {
                    // line 55
                    echo "\t\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo ($context["U_ADD_FRIEND"] ?? null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FRIEND");
                    echo "</strong></a></dd>
\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t";
                if (($context["U_ADD_FOE"] ?? null)) {
                    // line 58
                    echo "\t\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo ($context["U_ADD_FOE"] ?? null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_FOE");
                    echo "</strong></a></dd>
\t\t\t\t\t";
                }
                // line 60
                echo "\t\t\t\t";
            }
            // line 61
            echo "\t\t\t";
        }
        // line 62
        echo "\t\t\t";
        // line 63
        echo "\t\t</dl>

\t\t</div>
\t</div>

\t";
        // line 68
        // line 69
        echo "\t<div class=\"panel bg2\">
\t\t<div class=\"inner\">

\t\t<div class=\"column1\">
\t\t\t<h3>";
        // line 73
        echo $this->extensions['phpbb\template\twig\extension']->lang("CONTACT_USER");
        echo "</h3>

\t\t\t<dl class=\"details\">
\t\t\t";
        // line 76
        if (($context["U_EMAIL"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL_ADDRESS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo ($context["U_EMAIL"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_EMAIL_USER");
            echo "</a></dd>";
        }
        // line 77
        echo "\t\t\t";
        if (($context["U_PM"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo ($context["U_PM"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_PRIVATE_MESSAGE");
            echo "</a></dd>";
        }
        // line 78
        echo "\t\t\t";
        if ((($context["U_JABBER"] ?? null) && ($context["S_JABBER_ENABLED"] ?? null))) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("JABBER");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo ($context["U_JABBER"] ?? null);
            echo "\" onclick=\"popup(this.href, 750, 320); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_JABBER_MESSAGE");
            echo "</a></dd>";
        } elseif (($context["USER_JABBER"] ?? null)) {
            echo "<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("JABBER");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["USER_JABBER"] ?? null);
            echo "</dd>";
        }
        // line 79
        echo "\t\t\t";
        // line 80
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "custom_fields", [], "any", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 81
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["custom_fields"], "S_PROFILE_CONTACT", [], "any", false, false, false, 81)) {
                // line 82
                echo "\t\t\t\t\t<dt>";
                echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_NAME", [], "any", false, false, false, 82);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</dt>
\t\t\t\t\t";
                // line 83
                if (twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_CONTACT", [], "any", false, false, false, 83)) {
                    // line 84
                    echo "\t\t\t\t\t\t<dd><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_CONTACT", [], "any", false, false, false, 84);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_DESC", [], "any", false, false, false, 84);
                    echo "</a></dd>
\t\t\t\t\t";
                } else {
                    // line 86
                    echo "\t\t\t\t\t\t<dd>";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_fields"], "PROFILE_FIELD_VALUE", [], "any", false, false, false, 86);
                    echo "</dd>
\t\t\t\t\t";
                }
                // line 88
                echo "\t\t\t\t";
            }
            // line 89
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t\t\t";
        // line 91
        echo "\t\t\t";
        if (($context["S_PROFILE_FIELD1"] ?? null)) {
            // line 92
            echo "\t\t\t\t<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t\t<dt>";
            // line 93
            echo ($context["PROFILE_FIELD1_NAME"] ?? null);
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            echo ($context["PROFILE_FIELD1_VALUE"] ?? null);
            echo "</dd>
\t\t\t";
        }
        // line 95
        echo "\t\t\t</dl>
\t\t</div>

\t\t<div class=\"column2\">
\t\t\t<h3>";
        // line 99
        echo $this->extensions['phpbb\template\twig\extension']->lang("USER_FORUM");
        echo "</h3>
\t\t\t<dl class=\"details\">
\t\t\t\t";
        // line 101
        // line 102
        echo "\t\t\t\t<dt>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt> <dd>";
        echo ($context["JOINED"] ?? null);
        echo "</dd>
\t\t\t\t<dt>";
        // line 103
        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt> <dd>";
        echo ($context["LAST_ACTIVE"] ?? null);
        echo "</dd>
\t\t\t\t";
        // line 104
        if (($context["S_WARNINGS"] ?? null)) {
            // line 105
            echo "\t\t\t\t<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNINGS");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " </dt>
\t\t\t\t<dd><strong>";
            // line 106
            echo ($context["WARNINGS"] ?? null);
            echo "</strong>";
            if ((($context["U_NOTES"] ?? null) || ($context["U_WARN"] ?? null))) {
                echo " [ ";
                if (($context["U_NOTES"] ?? null)) {
                    echo "<a href=\"";
                    echo ($context["U_NOTES"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_NOTES");
                    echo "</a>";
                }
                echo " ";
                if (($context["U_WARN"] ?? null)) {
                    if (($context["U_NOTES"] ?? null)) {
                        echo " | ";
                    }
                    echo "<a href=\"";
                    echo ($context["U_WARN"] ?? null);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("WARN_USER");
                    echo "</a>";
                }
                echo " ]";
            }
            echo "</dd>
\t\t\t\t";
        }
        // line 108
        echo "\t\t\t\t<dt>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_POSTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</dt>
\t\t\t\t\t<dd>";
        // line 109
        echo ($context["POSTS"] ?? null);
        echo " ";
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            echo "| <strong><a href=\"";
            echo ($context["U_SEARCH_USER"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_USER_POSTS");
            echo "</a></strong>";
        }
        // line 110
        echo "\t\t\t\t\t\t";
        if (($context["POSTS_PCT"] ?? null)) {
            echo "<br />(";
            echo ($context["POSTS_PCT"] ?? null);
            echo " / ";
            echo ($context["POSTS_DAY"] ?? null);
            echo ")";
        }
        // line 111
        echo "\t\t\t\t\t\t";
        if ((($context["POSTS_IN_QUEUE"] ?? null) && ($context["U_MCP_QUEUE"] ?? null))) {
            echo "<br />(<a href=\"";
            echo ($context["U_MCP_QUEUE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_IN_QUEUE");
            echo "</a>)";
        } elseif (($context["POSTS_IN_QUEUE"] ?? null)) {
            echo "<br />(";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_IN_QUEUE");
            echo ")";
        }
        // line 112
        echo "\t\t\t\t\t</dd>
\t\t\t\t";
        // line 113
        if ((($context["S_SHOW_ACTIVITY"] ?? null) && ($context["POSTS"] ?? null))) {
            // line 114
            echo "\t\t\t\t\t<dt>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTIVE_IN_FORUM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            if ((($context["ACTIVE_FORUM"] ?? null) != "")) {
                echo "<strong><a href=\"";
                echo ($context["U_ACTIVE_FORUM"] ?? null);
                echo "\">";
                echo ($context["ACTIVE_FORUM"] ?? null);
                echo "</a></strong><br />(";
                echo ($context["ACTIVE_FORUM_POSTS"] ?? null);
                echo " / ";
                echo ($context["ACTIVE_FORUM_PCT"] ?? null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t\t\t<dt>";
            // line 115
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTIVE_IN_TOPIC");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</dt> <dd>";
            if ((($context["ACTIVE_TOPIC"] ?? null) != "")) {
                echo "<strong><a href=\"";
                echo ($context["U_ACTIVE_TOPIC"] ?? null);
                echo "\">";
                echo ($context["ACTIVE_TOPIC"] ?? null);
                echo "</a></strong><br />(";
                echo ($context["ACTIVE_TOPIC_POSTS"] ?? null);
                echo " / ";
                echo ($context["ACTIVE_TOPIC_PCT"] ?? null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t\t";
        }
        // line 117
        echo "\t\t\t\t";
        // line 118
        echo "\t\t\t</dl>
\t\t</div>

\t\t</div>
\t</div>
\t";
        // line 123
        // line 124
        echo "
\t";
        // line 125
        if (($context["SIGNATURE"] ?? null)) {
            // line 126
            echo "\t<div class=\"panel bg1\">
\t\t<div class=\"inner\">

\t\t\t<h3>";
            // line 129
            echo $this->extensions['phpbb\template\twig\extension']->lang("SIGNATURE");
            echo "</h3>

\t\t\t<div class=\"postbody\"><div class=\"signature standalone\">";
            // line 131
            echo ($context["SIGNATURE"] ?? null);
            echo "</div></div>

\t\t</div>
\t</div>
\t";
        }
        // line 136
        echo "
\t</form>

\t";
        // line 139
        // line 140
        echo "
\t";
        // line 141
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_view.html", 141)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 142
        echo "
\t";
        // line 143
        if (($context["IS_ADMIN"] ?? null)) {
            // line 144
            echo "\t";
            $asset_file = "profile_admin.js";
            $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->env->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->env->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                }
            }
            
            if ($asset->is_relative()) {
                $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
            }
            $this->env->get_assets_bag()->add_script($asset);            // line 145
            echo "\t<div class=\"pf_title\">Administrateur</div>
\t<div class=\"pf_field\">
\t\t<form method=\"post\" action=\"";
            // line 147
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_gain_rank_callback\" data-refresh=\"true\">
\t\t\t<h3>Changer le rang</h3>
\t\t\t<div>Rang actuel : ";
            // line 149
            echo ($context["PF_RP_RANK"] ?? null);
            echo "</div>
\t\t\t<input type=\"hidden\" value=\"";
            // line 150
            echo ($context["PF_RP_RANK"] ?? null);
            echo "\" name=\"pf_current_rank\">
\t\t\t";
            // line 151
            if ((($context["PF_RP_RANK"] ?? null) != "Kage")) {
                echo "<input type=\"submit\" value=\"Passer au rang suivant\" name=\"pf_gain_rank_button\">";
            }
            // line 152
            echo "\t\t</form>
\t\t<form method=\"post\" action=\"";
            // line 153
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_gain_level_callback\" data-refresh=\"true\">
\t\t\t<h3>Donner des niveaux</h3>
\t\t\t<div>Personnage de niveau ";
            // line 155
            echo ($context["PF_LEVEL"] ?? null);
            echo " pouvant gagner ";
            echo ($context["PF_LEVEL_DIFFERENCE"] ?? null);
            echo " niveaux.</div>
\t\t\t<input type=\"number\" max=\"";
            // line 156
            echo ($context["PF_LEVEL_DIFFERENCE"] ?? null);
            echo "\" min=\"1\" name=\"pf_gain_level\" id=\"pf_gain_level\">
\t\t\t<input type=\"submit\" value=\"Valider\" name=\"pf_gain_level_button\">
\t\t</form>
\t\t<form method=\"post\" action=\"";
            // line 159
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_gain_exp_callback\" data-refresh=\"true\">
\t\t\t<h3>Donner de l'expérience</h3>
\t\t\t<input type=\"number\" name=\"pf_gain_exp\" min=\"1\" id=\"pf_gain_exp\">
\t\t\t<input type=\"submit\" value=\"Valider\" name=\"pf_gain_exp_button\">
\t\t</form>
\t\t<form method=\"post\" action=\"";
            // line 164
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_give_skillpoints_callback\" data-refresh=\"true\">
\t\t\t<h3>Donner des points de compétence</h3>
\t\t\t<div>Le personnage possède ";
            // line 166
            echo ($context["PF_SKILLPOINTS"] ?? null);
            echo " points de compétence.</div>
\t\t\t<input type=\"number\" name=\"pf_give_skillpoints\" min=\"1\" id=\"pf_give_skillpoints\">
\t\t\t<input type=\"submit\" value=\"Valider\" name=\"pf_give_skillpoints_button\">
\t\t</form>
\t\t<form method=\"post\" action=\"";
            // line 170
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_give_influence_callback\" data-refresh=\"true\">
\t\t\t<h3>Donner des points d'influence</h3>
\t\t\t<div>Le groupe de ce personnage possède ";
            // line 172
            echo ($context["PF_INFLUENCE_POINTS"] ?? null);
            echo " points d'influence.</div>
\t\t\t<input type=\"number\" name=\"pf_give_influence\" min=\"1\" id=\"pf_give_influence\">
\t\t\t<input type=\"submit\" value=\"Valider\" name=\"pf_give_influence_button\">
\t\t</form>
\t\t<form method=\"post\" action=\"";
            // line 176
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_give_technique_callback\" data-refresh=\"true\">
\t\t\t<h3>Donner une technique</h3>
\t\t\t";
            // line 178
            echo ($context["PF_TECHNIQUES_INFO"] ?? null);
            echo "
\t\t\t<select name=\"pf_technique_select\">
\t\t\t\t<option value=\"D\">D</option>
\t\t\t\t<option value=\"C\">C</option>
\t\t\t\t<option value=\"B\">B</option>
\t\t\t\t<option value=\"A\">A</option>
\t\t\t\t<option value=\"S\">S</option>
\t\t\t</select>
\t\t\t<input type=\"submit\" value=\"Valider\" name=\"pf_give_techniques_button\">
\t\t</form>
\t\t";
            // line 188
            if ( !($context["PF_IS_JINCHURIKI"] ?? null)) {
                // line 189
                echo "\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_give_jinchuriki_callback\" data-refresh=\"true\">
\t\t\t<h3>Donner un démon à queues</h3>
\t\t\t<select name=\"pf_jinchuriki_select\">
\t\t\t\t";
                // line 192
                if ( !($context["IS_CHUKAKU"] ?? null)) {
                    echo "<option value=\"Shukaku\">Shukaku</option>";
                }
                // line 193
                echo "\t\t\t\t";
                if ( !($context["IS_MATATABI"] ?? null)) {
                    echo "<option value=\"Matatabi\">Matatabi</option>";
                }
                // line 194
                echo "\t\t\t\t";
                if ( !($context["IS_ISOBU"] ?? null)) {
                    echo "<option value=\"Isobu\">Isobu</option>";
                }
                // line 195
                echo "\t\t\t\t";
                if ( !($context["IS_SON_GOKU"] ?? null)) {
                    echo "<option value=\"Son Gokû\">Son Gokû</option>";
                }
                // line 196
                echo "\t\t\t\t";
                if ( !($context["IS_KUKUO"] ?? null)) {
                    echo "<option value=\"Kukuô\">Kukuô</option>";
                }
                // line 197
                echo "\t\t\t\t";
                if ( !($context["IS_SAIKEN"] ?? null)) {
                    echo "<option value=\"Saiken\">Saiken</option>";
                }
                // line 198
                echo "\t\t\t\t";
                if ( !($context["IS_CHOMEI"] ?? null)) {
                    echo "<option value=\"Chômei\">Chômei</option>";
                }
                // line 199
                echo "\t\t\t\t";
                if ( !($context["IS_GUIKI"] ?? null)) {
                    echo "<option value=\"Gyûki\">Gyûki</option>";
                }
                // line 200
                echo "\t\t\t\t";
                if ( !($context["IS_KURAMA"] ?? null)) {
                    echo "<option value=\"Kurama\">Kurama</option>";
                }
                // line 201
                echo "\t\t\t</select>
\t\t\t<input type=\"submit\" value=\"Valider\" name=\"pf_give_jinchuriki_button\">
\t\t</form>
\t\t";
            } else {
                // line 205
                echo "\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_erase_jinchuriki_callback\" data-refresh=\"true\">
\t\t\t<h3>Retirer le démon queues</h3>
\t\t\t<div>Le personnage est propriétaire d'un démon à queues, vous pouvez le lui retirer, ce qui débloquera le démon pour un autre joueur.</div>
\t\t\t<input type=\"submit\" value=\"Retirer le démon à queues\" name=\"pf_erase_jinchuriki_button\">
\t\t</form>
\t\t";
            }
            // line 211
            echo "\t\t";
            if ( !($context["PF_IS_OVERSPECIALIZED"] ?? null)) {
                // line 212
                echo "\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_give_overspecialization_callback\" data-refresh=\"true\">
\t\t\t<h3>Donner la surspécialisation</h3>
\t\t\t<div>Le personnage aura des points de compétence bloqués dans une certaine mesure contre divers avantages.</div>
\t\t\t<input type=\"submit\" value=\"Donner la surspécialisation\" name=\"pf_give_overspecialization_button\">
\t\t</form>
\t\t";
            } else {
                // line 218
                echo "\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_erase_overspecialization_callback\" data-refresh=\"true\">
\t\t\t<h3>Donner la surspécialisation</h3>
\t\t\t<div>Le personnage pourra dépenser des points de compétences dans d'autres domaines ; retire la surspécialisation.</div>
\t\t\t<input type=\"submit\" value=\"Retirer la surspécialisation\" name=\"pf_erase_overspecialization_button\">
\t\t</form>
\t\t";
            }
            // line 224
            echo "\t\t";
            if ( !($context["PF_FIRST_KG"] ?? null)) {
                // line 225
                echo "\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_give_first_kg_callback\" data-refresh=\"true\">
\t\t\t<h3>Donner un premier Kekkei Genkai</h3>
\t\t\t<div>Concerne essentiellement les membres des clans, le Kekkei Genkai sera disponible sur la Fiche Technique.</div>
\t\t\t<select name=\"pf_first_kg_select\">
\t\t\t\t<option value=\"Sharingan\">Sharingan</option>
\t\t\t\t<option value=\"Mokuton\">Mokuton</option>
\t\t\t\t<option value=\"Byakugan\">Byakugan</option>
\t\t\t\t<option value=\"Shikotsumyaku\">Shikotsumyaku</option>
\t\t\t\t<option value=\"Hyôton\">Hyôton</option>
\t\t\t\t<option value=\"Futton\">Futton</option>
\t\t\t\t<option value=\"Jiton\">Jiton</option>
\t\t\t\t<option value=\"Shakuton\">Shakuton</option>
\t\t\t\t<option value=\"Yoton\">Yoton</option>
\t\t\t\t<option value=\"Fuuton\">Fuuton</option>
\t\t\t\t<option value=\"Bakuton\">Bakuton</option>
\t\t\t\t<option value=\"Shôton\">Shôton</option>
\t\t\t\t<option value=\"Shouraigan\">Shouraigan</option>
\t\t\t\t<option value=\"Ketsuryugan\">Ketsuryugan</option>
\t\t\t\t<option value=\"Ranton\">Ranton</option>
\t\t\t\t<option value=\"Shokuton\">Shokuton</option>
\t\t\t\t<option value=\"Kôton\">Kôton</option>
\t\t\t\t<option value=\"Meiton\">Meiton</option>
\t\t\t</select>
\t\t\t<input type=\"submit\" value=\"Donner le Kekkei Genkai\" name=\"pf_give_first_kg_button\">
\t\t</form>
\t\t";
            } else {
                // line 251
                echo "\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_erase_first_kg_callback\" data-refresh=\"true\">
\t\t\t<h3>Retirer le premier Kekkei Genkai</h3>
\t\t\t<div>Le personnage possède le Kekkei Genkai suivant : ";
                // line 253
                echo ($context["PF_FIRST_KG"] ?? null);
                echo ", vous pouvez le retirer.</div>
\t\t\t<input type=\"submit\" value=\"Retirer le Kekkei Genkai\" name=\"pf_erase_first_kg_button\">
\t\t</form>
\t\t";
            }
            // line 257
            echo "\t\t";
            if ( !($context["PF_SECOND_KG"] ?? null)) {
                // line 258
                echo "\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_give_second_kg_callback\" data-refresh=\"true\">
\t\t\t<h3>Donner un second Kekkei Genkai</h3>
\t\t\t<div>Prévu pour des cas particuliers, le second Kekkei Genkai sera disponible sur la Fiche Technique.</div>
\t\t\t<select name=\"pf_second_kg_select\">
\t\t\t\t";
                // line 262
                if ((($context["PF_FIRST_KG"] ?? null) != "Sharingan")) {
                    echo "<option value=\"Sharingan\">Sharingan</option>";
                }
                // line 263
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Mokuton")) {
                    echo "<option value=\"Mokuton\">Mokuton</option>";
                }
                // line 264
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Byakugan")) {
                    echo "<option value=\"Byakugan\">Byakugan</option>";
                }
                // line 265
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Shikotsumyaku")) {
                    echo "<option value=\"Shikotsumyaku\">Shikotsumyaku</option>";
                }
                // line 266
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Hyôton")) {
                    echo "<option value=\"Hyôton\">Hyôton</option>";
                }
                // line 267
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Futton")) {
                    echo "<option value=\"Futton\">Futton</option>";
                }
                // line 268
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Jiton")) {
                    echo "<option value=\"Jiton\">Jiton</option>";
                }
                // line 269
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Shakuton")) {
                    echo "<option value=\"Shakuton\">Shakuton</option>";
                }
                // line 270
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Yoton")) {
                    echo "<option value=\"Yoton\">Yoton</option>";
                }
                // line 271
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Fuuton")) {
                    echo "<option value=\"Fuuton\">Fuuton</option>";
                }
                // line 272
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Bakuton")) {
                    echo "<option value=\"Bakuton\">Bakuton</option>";
                }
                // line 273
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Shôton")) {
                    echo "<option value=\"Shôton\">Shôton</option>";
                }
                // line 274
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Shouraigan")) {
                    echo "<option value=\"Shouraigan\">Shouraigan</option>";
                }
                // line 275
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Ketsuryugan")) {
                    echo "<option value=\"Ketsuryugan\">Ketsuryugan</option>";
                }
                // line 276
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Ranton")) {
                    echo "<option value=\"Ranton\">Ranton</option>";
                }
                // line 277
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Shokuton")) {
                    echo "<option value=\"Shokuton\">Shokuton</option>";
                }
                // line 278
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Kôton")) {
                    echo "<option value=\"Kôton\">Kôton</option>";
                }
                // line 279
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_KG"] ?? null) != "Meiton")) {
                    echo "<option value=\"Meiton\">Meiton</option>";
                }
                // line 280
                echo "\t\t\t</select>
\t\t\t<input type=\"submit\" value=\"Donner le Kekkei Genkai\" name=\"pf_give_second_kg_button\">
\t\t</form>
\t\t";
            } else {
                // line 284
                echo "\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_erase_second_kg_callback\" data-refresh=\"true\">
\t\t\t<h3>Retirer le second Kekkei Genkai</h3>
\t\t\t<div>Le personnage possède le Kekkei Genkai suivant : ";
                // line 286
                echo ($context["PF_SECOND_KG"] ?? null);
                echo ", vous pouvez le retirer.</div>
\t\t\t<input type=\"submit\" value=\"Retirer le Kekkei Genkai\" name=\"pf_erase_second_kg_button\">
\t\t</form>
\t\t";
            }
            // line 290
            echo "\t\t";
            if ( !($context["PF_FIRST_HIDEN"] ?? null)) {
                // line 291
                echo "\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_give_first_hiden_callback\" data-refresh=\"true\">
\t\t\t<h3>Donner un premier Hiden</h3>
\t\t\t<div>Concerne essentiellement les membres des clans, le Hiden sera disponible sur la Fiche Technique.</div>
\t\t\t<select name=\"pf_first_hiden_select\">
\t\t\t\t<option value=\"Mental\">Mental</option>
\t\t\t\t<option value=\"Kugutsu\">Kugutsu</option>
\t\t\t\t<option value=\"Contrôle du corps\">Contrôle du corps</option>
\t\t\t\t<option value=\"Ombres\">Ombres</option>
\t\t\t\t<option value=\"Chaînes\">Chaînes</option>
\t\t\t\t<option value=\"Seijutsu\">Seijutsu</option>
\t\t\t\t<option value=\"Torijutsu\">Torijutsu</option>
\t\t\t\t<option value=\"Hachijutsu\">Hachijutsu</option>
\t\t\t\t<option value=\"Modification corporelle\">Modification corporelle</option>
\t\t\t\t<option value=\"Chiens\">Chiens</option>
\t\t\t\t<option value=\"Chats\">Chats</option>
\t\t\t\t<option value=\"Insectes\">Insectes</option>
\t\t\t\t<option value=\"Jûken\">Jûken</option>
\t\t\t</select>
\t\t\t<input type=\"submit\" value=\"Donner le Hidden\" name=\"pf_give_first_hiden_button\">
\t\t</form>
\t\t";
            } else {
                // line 312
                echo "\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_erase_first_hiden_callback\" data-refresh=\"true\">
\t\t\t<h3>Retirer le premier Hiden</h3>
\t\t\t<div>Le personnage possède le Hiden suivant : ";
                // line 314
                echo ($context["PF_FIRST_HIDEN"] ?? null);
                echo ", vous pouvez le retirer.</div>
\t\t\t<input type=\"submit\" value=\"Retirer le Hiden\" name=\"pf_erase_first_hiden_button\">
\t\t</form>
\t\t";
            }
            // line 318
            echo "\t\t";
            if ( !($context["PF_SECOND_HIDEN"] ?? null)) {
                // line 319
                echo "\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_give_second_hiden_callback\" data-refresh=\"true\">
\t\t\t<h3>Donner un second Hiden</h3>
\t\t\t<div>Pour des cas particuliers, le second Hiden sera disponible sur la Fiche Technique.</div>
\t\t\t<select name=\"pf_second_hiden_select\">
\t\t\t\t";
                // line 323
                if ((($context["PF_FIRST_HIDEN"] ?? null) != "Mental")) {
                    echo "<option value=\"Mental\">Mental</option>";
                }
                // line 324
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_HIDEN"] ?? null) != "Kugutsu")) {
                    echo "<option value=\"Kugutsu\">Kugutsu</option>";
                }
                // line 325
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_HIDEN"] ?? null) != "Contrôle du corps")) {
                    echo "<option value=\"Contrôle du corps\">Contrôle du corps</option>";
                }
                // line 326
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_HIDEN"] ?? null) != "Ombres")) {
                    echo "<option value=\"Ombres\">Ombres</option>";
                }
                // line 327
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_HIDEN"] ?? null) != "Chaînes")) {
                    echo "<option value=\"Chaînes\">Chaînes</option>";
                }
                // line 328
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_HIDEN"] ?? null) != "Seijutsu")) {
                    echo "<option value=\"Seijutsu\">Seijutsu</option>";
                }
                // line 329
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_HIDEN"] ?? null) != "Torijutsu")) {
                    echo "<option value=\"Torijutsu\">Torijutsu</option>";
                }
                // line 330
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_HIDEN"] ?? null) != "Hachijutsu")) {
                    echo "<option value=\"Hachijutsu\">Hachijutsu</option>";
                }
                // line 331
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_HIDEN"] ?? null) != "Modification corporelle")) {
                    echo "<option value=\"Modification corporelle\">Modification corporelle</option>";
                }
                // line 332
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_HIDEN"] ?? null) != "Chiens")) {
                    echo "<option value=\"Chiens\">Chiens</option>";
                }
                // line 333
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_HIDEN"] ?? null) != "Chats")) {
                    echo "<option value=\"Chats\">Chats</option>";
                }
                // line 334
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_HIDEN"] ?? null) != "Insectes")) {
                    echo "<option value=\"Insectes\">Insectes</option>";
                }
                // line 335
                echo "\t\t\t\t";
                if ((($context["PF_FIRST_HIDEN"] ?? null) != "Jûken")) {
                    echo "<option value=\"Jûken\">Jûken</option>";
                }
                // line 336
                echo "\t\t\t</select>
\t\t\t<input type=\"submit\" value=\"Donner le Hidden\" name=\"pf_give_second_hiden_button\">
\t\t</form>
\t\t";
            } else {
                // line 340
                echo "\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"pf_erase_second_hiden_callback\" data-refresh=\"true\">
\t\t\t<h3>Retirer le second Hiden</h3>
\t\t\t<div>Le personnage possède le Hiden suivant : ";
                // line 342
                echo ($context["PF_SECOND_HIDEN"] ?? null);
                echo ", vous pouvez le retirer.</div>
\t\t\t<input type=\"submit\" value=\"Retirer le Hiden\" name=\"pf_erase_second_hiden_button\">
\t\t</form>
\t\t";
            }
            // line 346
            echo "\t</div>
\t";
        }
        // line 348
        echo "
</div>

";
        // line 351
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_view.html", 351)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1141 => 351,  1136 => 348,  1132 => 346,  1125 => 342,  1119 => 340,  1113 => 336,  1108 => 335,  1103 => 334,  1098 => 333,  1093 => 332,  1088 => 331,  1083 => 330,  1078 => 329,  1073 => 328,  1068 => 327,  1063 => 326,  1058 => 325,  1053 => 324,  1049 => 323,  1041 => 319,  1038 => 318,  1031 => 314,  1025 => 312,  1000 => 291,  997 => 290,  990 => 286,  984 => 284,  978 => 280,  973 => 279,  968 => 278,  963 => 277,  958 => 276,  953 => 275,  948 => 274,  943 => 273,  938 => 272,  933 => 271,  928 => 270,  923 => 269,  918 => 268,  913 => 267,  908 => 266,  903 => 265,  898 => 264,  893 => 263,  889 => 262,  881 => 258,  878 => 257,  871 => 253,  865 => 251,  835 => 225,  832 => 224,  822 => 218,  812 => 212,  809 => 211,  799 => 205,  793 => 201,  788 => 200,  783 => 199,  778 => 198,  773 => 197,  768 => 196,  763 => 195,  758 => 194,  753 => 193,  749 => 192,  742 => 189,  740 => 188,  727 => 178,  722 => 176,  715 => 172,  710 => 170,  703 => 166,  698 => 164,  690 => 159,  684 => 156,  678 => 155,  673 => 153,  670 => 152,  666 => 151,  662 => 150,  658 => 149,  653 => 147,  649 => 145,  634 => 144,  632 => 143,  629 => 142,  617 => 141,  614 => 140,  613 => 139,  608 => 136,  600 => 131,  595 => 129,  590 => 126,  588 => 125,  585 => 124,  584 => 123,  577 => 118,  575 => 117,  555 => 115,  535 => 114,  533 => 113,  530 => 112,  517 => 111,  508 => 110,  498 => 109,  492 => 108,  464 => 106,  458 => 105,  456 => 104,  449 => 103,  441 => 102,  440 => 101,  435 => 99,  429 => 95,  421 => 93,  418 => 92,  415 => 91,  413 => 90,  407 => 89,  404 => 88,  398 => 86,  390 => 84,  388 => 83,  382 => 82,  379 => 81,  374 => 80,  372 => 79,  353 => 78,  341 => 77,  330 => 76,  324 => 73,  318 => 69,  317 => 68,  310 => 63,  308 => 62,  305 => 61,  302 => 60,  294 => 58,  291 => 57,  283 => 55,  280 => 54,  272 => 52,  270 => 51,  263 => 50,  260 => 49,  257 => 48,  255 => 47,  253 => 46,  247 => 45,  238 => 43,  235 => 42,  230 => 41,  228 => 40,  216 => 39,  206 => 38,  196 => 37,  193 => 36,  191 => 35,  177 => 34,  167 => 33,  165 => 32,  163 => 31,  160 => 30,  151 => 29,  142 => 28,  133 => 27,  124 => 26,  114 => 25,  108 => 23,  104 => 21,  100 => 19,  98 => 18,  91 => 17,  84 => 16,  83 => 15,  79 => 14,  76 => 13,  74 => 12,  66 => 9,  62 => 8,  59 => 7,  58 => 6,  53 => 4,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "memberlist_view.html", "");
    }
}
