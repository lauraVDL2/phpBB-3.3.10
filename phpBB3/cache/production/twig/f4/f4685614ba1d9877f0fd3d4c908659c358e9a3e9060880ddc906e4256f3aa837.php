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

/* viewtopic_body.html */
class __TwigTemplate_68fa7d3ae86014ef5fd69f5bb96f45ab11a11218094b784beb125d932dee55d4 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "viewtopic_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"wrap\" id=\"wrap\">
";
        // line 3
        // line 4
        echo "<h2 class=\"topic-title\">";
        echo "<a href=\"";
        echo ($context["U_VIEW_TOPIC"] ?? null);
        echo "\">";
        echo ($context["TOPIC_TITLE"] ?? null);
        echo "</a>";
        echo "</h2>
";
        // line 5
        // line 6
        echo "<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 7
        if (($context["FORUM_DESC"] ?? null)) {
            echo "<div style=\"display: none !important;\">";
            echo ($context["FORUM_DESC"] ?? null);
            echo "<br /></div>";
        }
        // line 8
        echo "
";
        // line 9
        if (($context["MODERATORS"] ?? null)) {
            // line 10
            echo "<p>
\t<strong>";
            // line 11
            if (($context["S_SINGLE_MODERATOR"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATOR");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("MODERATORS");
            }
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo ($context["MODERATORS"] ?? null);
            echo "
</p>
";
        }
        // line 14
        echo "
";
        // line 15
        if (($context["S_FORUM_RULES"] ?? null)) {
            // line 16
            echo "\t<div class=\"rules";
            if (($context["U_FORUM_RULES"] ?? null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 19
            if (($context["U_FORUM_RULES"] ?? null)) {
                // line 20
                echo "\t\t\t<a href=\"";
                echo ($context["U_FORUM_RULES"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 22
                echo "\t\t\t<strong>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 23
                echo ($context["FORUM_RULES"] ?? null);
                echo "
\t\t";
            }
            // line 25
            echo "
\t\t</div>
\t</div>
";
        }
        // line 29
        echo "
<div class=\"action-bar bar-top\">
\t";
        // line 31
        // line 32
        echo "
\t";
        // line 33
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 34
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_LOCKED");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 35
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 36
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_TOPIC_LOCKED");
                echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_POST_REPLY");
                echo "</span> <i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 40
            echo "\t\t</a>
\t";
        }
        // line 42
        echo "
\t";
        // line 43
        // line 44
        echo "\t";
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 44)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 45
        echo "\t";
        // line 46
        echo "
\t";
        // line 47
        if (($context["S_DISPLAY_SEARCHBOX"] ?? null)) {
            // line 48
            echo "\t\t<div class=\"search-box\" role=\"search\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 49
            echo ($context["S_SEARCHBOX_ACTION"] ?? null);
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\"  type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 51
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<button class=\"button button-search\" type=\"submit\" title=\"";
            // line 52
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 53
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t\t</button>
\t\t\t\t<a href=\"";
            // line 55
            echo ($context["U_SEARCH"] ?? null);
            echo "\" class=\"button button-search-end\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "\">
\t\t\t\t\t<i class=\"icon fa-cog fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 56
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV");
            echo "</span>
\t\t\t\t</a>
\t\t\t\t";
            // line 58
            echo ($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] ?? null);
            echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 63
        echo "
\t";
        // line 64
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 64)) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 65
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 66
            if ((($context["U_VIEW_UNREAD_POST"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
                echo "<a href=\"";
                echo ($context["U_VIEW_UNREAD_POST"] ?? null);
                echo "\" class=\"mark\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 67
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 67))) {
                // line 68
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 68)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 69
                echo "\t\t\t";
            } else {
                // line 70
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 72
            echo "\t\t</div>
\t";
        }
        // line 74
        echo "\t";
        // line 75
        echo "</div>

";
        // line 77
        // line 78
        echo "
";
        // line 79
        if (($context["S_HAS_POLL"] ?? null)) {
            // line 80
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_POLL_ACTION"] ?? null);
            echo "\" data-ajax=\"vote_poll\" data-refresh=\"true\" class=\"topic_poll\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"poll-title\">";
            // line 86
            echo ($context["POLL_QUESTION"] ?? null);
            echo "</h2>
\t\t\t<p class=\"author\">";
            // line 87
            echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_LENGTH");
            if ((($context["S_CAN_VOTE"] ?? null) && ($context["L_POLL_LENGTH"] ?? null))) {
                echo "<br />";
            }
            if (($context["S_CAN_VOTE"] ?? null)) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t<fieldset class=\"polls\">
\t\t\t";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "poll_option", [], "any", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 91
                echo "\t\t\t\t";
                // line 92
                echo "\t\t\t\t<dl class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 92)) {
                    echo "voted";
                }
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_MOST_VOTES", [], "any", false, false, false, 92)) {
                    echo " most-votes";
                }
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 92)) {
                    echo " title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-alt-text=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POLL_VOTED_OPTION");
                echo "\" data-poll-option-id=\"";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 92);
                echo "\">
\t\t\t\t\t<dt>";
                // line 93
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<label for=\"vote_";
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 93);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_CAPTION", [], "any", false, false, false, 93);
                    echo "</label>";
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_CAPTION", [], "any", false, false, false, 93);
                }
                echo "</dt>
\t\t\t\t\t";
                // line 94
                if (($context["S_CAN_VOTE"] ?? null)) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if (($context["S_IS_MULTI_CHOICE"] ?? null)) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 94);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 94);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 94)) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 94);
                        echo "\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_ID", [], "any", false, false, false, 94);
                        echo "\"";
                        if (twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_VOTED", [], "any", false, false, false, 94)) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 95
                echo "\t\t\t\t\t<dd class=\"resultbar";
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\"><div class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 95) < 20)) {
                    echo "pollbar1";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 95) < 40)) {
                    echo "pollbar2";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 95) < 60)) {
                    echo "pollbar3";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PCT", [], "any", false, false, false, 95) < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PERCENT_REL", [], "any", false, false, false, 95);
                echo ";\">";
                echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_RESULT", [], "any", false, false, false, 95);
                echo "</div></dd>
\t\t\t\t\t<dd class=\"poll_option_percent";
                // line 96
                if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                if ((twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_RESULT", [], "any", false, false, false, 96) == 0)) {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("NO_VOTES");
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["poll_option"], "POLL_OPTION_PERCENT", [], "any", false, false, false, 96);
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 98
                // line 99
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "
\t\t\t\t<dl class=\"poll_total_votes";
            // line 101
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">";
            // line 103
            echo $this->extensions['phpbb\template\twig\extension']->lang("TOTAL_VOTES");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo ($context["TOTAL_VOTES"] ?? null);
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t";
            // line 106
            if (($context["S_CAN_VOTE"] ?? null)) {
                // line 107
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 109
                echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 112
            echo "
\t\t\t";
            // line 113
            if ( !($context["S_DISPLAY_RESULTS"] ?? null)) {
                // line 114
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><a href=\"";
                // line 116
                echo ($context["U_VIEW_RESULTS"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 119
            echo "\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted hidden\">";
            // line 120
            echo $this->extensions['phpbb\template\twig\extension']->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t</div>

\t\t</div>
\t\t";
            // line 124
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t\t";
            // line 125
            echo ($context["S_HIDDEN_FIELDS"] ?? null);
            echo "
\t</div>

\t</form>
\t<hr />
";
        }
        // line 131
        echo "
";
        // line 132
        // line 133
        echo "
";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "postrow", [], "any", false, false, false, 134));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 135
            echo "\t";
            // line 136
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, $context["postrow"], "S_FIRST_UNREAD", [], "any", false, false, false, 136)) {
                // line 137
                echo "\t\t<a id=\"unread\" class=\"anchor\"";
                if (($context["S_UNREAD_VIEW"] ?? null)) {
                    echo " data-url=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_MINI_POST", [], "any", false, false, false, 137);
                    echo "\"";
                }
                echo "></a>
\t";
            }
            // line 139
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, $context["postrow"], "STRENGTH", [], "any", false, false, false, 139) >= 0)) {
                // line 140
                echo "\t<div class=\"top_profile ";
                if (twig_get_attribute($this->env, $this->source, $context["postrow"], "IS_KIRI", [], "any", false, false, false, 140)) {
                    echo "bgp_kiri";
                } elseif (twig_get_attribute($this->env, $this->source, $context["postrow"], "IS_KONOHA", [], "any", false, false, false, 140)) {
                    echo "bgp_konoha";
                } elseif (twig_get_attribute($this->env, $this->source, $context["postrow"], "IS_KUMO", [], "any", false, false, false, 140)) {
                    echo "bgp_kumo";
                } elseif (twig_get_attribute($this->env, $this->source, $context["postrow"], "IS_SUNA", [], "any", false, false, false, 140)) {
                    echo "bgp_suna";
                } elseif (twig_get_attribute($this->env, $this->source, $context["postrow"], "IS_IWA", [], "any", false, false, false, 140)) {
                    echo "bgp_iwa";
                } elseif (($context["IS_NUKENIN"] ?? null)) {
                    echo "bgp_nuke";
                } else {
                    echo "bgp_others";
                }
                echo "\">
\t\t<div class=\"profile_attributes\">
\t\t\t<div class=\"attributes_name\">Physique</div>
\t\t\t<div class=\"attributes_name\">Esprit</div>
\t\t\t<div class=\"attributes_name\">Furtivité</div>
\t\t\t<div class=\"attributes_name\">Vitesse</div>
\t\t\t<div class=\"attributes_name\">Ninjutsu</div>
\t\t\t<div class=\"attributes_name\">Taijutsu</div>
\t\t\t<div class=\"attributes_name\">Genjutsu</div>
\t\t\t<div class=\"attributes_content\">";
                // line 149
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "STRENGTH", [], "any", false, false, false, 149);
                echo "</div>
\t\t\t<div class=\"attributes_content\">";
                // line 150
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "SENSORIALITY", [], "any", false, false, false, 150);
                echo "</div>
\t\t\t<div class=\"attributes_content\">";
                // line 151
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "STEALTH", [], "any", false, false, false, 151);
                echo "</div>
\t\t\t<div class=\"attributes_content\">";
                // line 152
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "SWIFTNESS", [], "any", false, false, false, 152);
                echo "</div>
\t\t\t<div class=\"attributes_content\">";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "NINJUTSU", [], "any", false, false, false, 153);
                echo "</div>
\t\t\t<div class=\"attributes_content\">";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "TAIJUTSU", [], "any", false, false, false, 154);
                echo "</div>
\t\t\t<div class=\"attributes_content\">";
                // line 155
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "GENJUTSU", [], "any", false, false, false, 155);
                echo "</div>
\t\t</div>
\t\t<div class=\"profile_level\">Niveau ";
                // line 157
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "LEVEL", [], "any", false, false, false, 157);
                echo "</div>
\t\t<div class=\"profile_points\">";
                // line 158
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "PV", [], "any", false, false, false, 158);
                echo " PV | ";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "PC", [], "any", false, false, false, 158);
                echo " PC</div>
\t\t<progress class=\"profile_progress\" value=\"";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EXP", [], "any", false, false, false, 159);
                echo "\" max=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EXP_TO_REACH", [], "any", false, false, false, 159);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EXP", [], "any", false, false, false, 159);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["postrow"], "EXP_TO_REACH", [], "any", false, false, false, 159);
                echo "\"></progress>
\t</div>
\t";
            }
            // line 162
            echo "\t<div class=\"post_content\">
\t\t<div class=\"content_first_row\">
\t\t\t<span class=\"content_username\">Par <a href=\"./memberlist.php?mode=viewprofile&u=";
            // line 164
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_ID", [], "any", false, false, false, 164);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "USERNAME", [], "any", false, false, false, 164);
            echo "</a> le ";
            echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POST_DATE", [], "any", false, false, false, 164);
            echo "</span>
\t\t";
            // line 165
            $value = (((((twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 165) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 165)) || twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 165));
            $context['definition']->set('SHOW_POST_BUTTONS', $value);
            // line 166
            echo "\t\t";
            // line 167
            echo "\t\t";
            if ( !($context["S_IS_BOT"] ?? null)) {
                // line 168
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "SHOW_POST_BUTTONS", [], "any", false, false, false, 168)) {
                    // line 169
                    echo "\t\t\t<ul class=\"post-buttons\">
\t\t\t\t";
                    // line 170
                    // line 171
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 171)) {
                        // line 172
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                        // line 173
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_EDIT", [], "any", false, false, false, 173);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon fa-pencil fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 174
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_EDIT");
                        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                    }
                    // line 178
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 178)) {
                        // line 179
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                        // line 180
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_DELETE", [], "any", false, false, false, 180);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon fa-times fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 181
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_DELETE");
                        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                    }
                    // line 185
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 185)) {
                        // line 186
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                        // line 187
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_REPORT", [], "any", false, false, false, 187);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REPORT_POST");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 188
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_REPORT");
                        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                    }
                    // line 192
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 192)) {
                        // line 193
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                        // line 194
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_WARN", [], "any", false, false, false, 194);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("WARN_USER");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon fa-exclamation-triangle fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 195
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_WARN");
                        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                    }
                    // line 199
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 199)) {
                        // line 200
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                        // line 201
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_INFO", [], "any", false, false, false, 201);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon fa-info fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 202
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_INFORMATION");
                        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                    }
                    // line 206
                    echo "\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 206)) {
                        // line 207
                        echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                        // line 208
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "U_QUOTE", [], "any", false, false, false, 208);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("REPLY_WITH_QUOTE");
                        echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 209
                        echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_QUOTE");
                        echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                    }
                    // line 213
                    echo "\t\t\t\t";
                    // line 214
                    echo "\t\t\t</ul>
\t\t</div>
\t\t<div class=\"content_second_row\">
\t\t\t<div class=\"content_first_col\">
\t\t\t\t";
                    // line 218
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "MESSAGE", [], "any", false, false, false, 218);
                    echo "
\t\t\t</div>
\t\t\t<div class=\"content_second_col\">
\t\t\t\t<a href=\"./memberlist.php?mode=viewprofile&u=";
                    // line 221
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_ID", [], "any", false, false, false, 221);
                    echo "\" class=\"main_username\">";
                    echo twig_get_attribute($this->env, $this->source, $context["postrow"], "USERNAME", [], "any", false, false, false, 221);
                    echo "</a> 
\t\t\t\t";
                    // line 222
                    // line 223
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 223)) {
                        // line 224
                        echo "\t\t\t\t\t<div class=\"contains_avatar\">
\t\t\t\t\t\t<div class=\"poster_avatar\">";
                        // line 225
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_AVATAR", [], "any", false, false, false, 225);
                        echo "</div>
\t\t\t\t\t\t<div class=\"poster_infos\">
\t\t\t\t\t\t\t<div class=\"info_rank\">
\t\t\t\t\t\t\t\t";
                        // line 228
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "RP_RANK", [], "any", false, false, false, 228);
                        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"info_link\" href=\"./fiche_technique.php?uid=";
                        // line 230
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_ID", [], "any", false, false, false, 230);
                        echo "\">Fiche technique</a>
\t\t\t\t\t\t\t<a class=\"info_link\" href=\"./relationships.php?uid=";
                        // line 231
                        echo twig_get_attribute($this->env, $this->source, $context["postrow"], "POSTER_ID", [], "any", false, false, false, 231);
                        echo "\">Relations</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
                    }
                    // line 235
                    echo "\t\t\t\t";
                    // line 236
                    echo "\t\t\t</div>
\t\t</div>
\t\t";
                }
                // line 239
                echo "\t";
            }
            // line 240
            echo "
\t</div>
\t

\t";
            // line 244
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo "
";
        // line 247
        if (($context["S_QUICK_REPLY"] ?? null)) {
            // line 248
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("quickreply_editor.html", "viewtopic_body.html", 248)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 250
        echo "
";
        // line 251
        // line 252
        echo "\t<div class=\"action-bar bar-bottom\">
\t";
        // line 253
        // line 254
        echo "
\t";
        // line 255
        if (( !($context["S_IS_BOT"] ?? null) && ($context["S_DISPLAY_REPLY_INFO"] ?? null))) {
            // line 256
            echo "\t\t<a href=\"";
            echo ($context["U_POST_REPLY_TOPIC"] ?? null);
            echo "\" class=\"button\" title=\"";
            if (($context["S_IS_LOCKED"] ?? null)) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC_LOCKED");
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REPLY");
            }
            echo "\">
\t\t\t";
            // line 257
            if (($context["S_IS_LOCKED"] ?? null)) {
                // line 258
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_TOPIC_LOCKED");
                echo "</span> <i class=\"icon fa-lock fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            } else {
                // line 260
                echo "\t\t\t\t<span>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("BUTTON_POST_REPLY");
                echo "</span> <i class=\"icon fa-reply fa-fw\" aria-hidden=\"true\"></i>
\t\t\t";
            }
            // line 262
            echo "\t\t</a>
\t";
        }
        // line 264
        echo "\t";
        // line 265
        echo "
\t";
        // line 266
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("viewtopic_topic_tools.html", "viewtopic_body.html", 266)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 267
        echo "
\t";
        // line 268
        if ((((($context["S_NUM_POSTS"] ?? null) > 1) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 268))) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 269
            echo "\t\t<form method=\"post\" action=\"";
            echo ($context["S_TOPIC_ACTION"] ?? null);
            echo "\">
\t\t";
            // line 270
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "viewtopic_body.html", 270)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 271
            echo "\t\t</form>
\t";
        }
        // line 273
        echo "
\t";
        // line 274
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "quickmod", [], "any", false, false, false, 274))) {
            // line 275
            echo "\t<div class=\"quickmod dropdown-container dropdown-container-left dropdown-up dropdown-";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo " dropdown-button-control\" id=\"quickmod\">
\t\t<span title=\"";
            // line 276
            echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_MOD");
            echo "\" class=\"button button-secondary dropdown-trigger dropdown-select\">
\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 277
            echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_MOD");
            echo "</span>
\t\t\t<span class=\"caret\"><i class=\"icon fa-sort-down fa-fw\" aria-hidden=\"true\"></i></span>
\t\t</span>
\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 283
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "quickmod", [], "any", false, false, false, 283));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 284
                echo "\t\t\t\t\t";
                $value = twig_in_filter(twig_get_attribute($this->env, $this->source, $context["quickmod"], "VALUE", [], "any", false, false, false, 284), [0 => "lock", 1 => "unlock", 2 => "delete_topic", 3 => "restore_topic", 4 => "make_normal", 5 => "make_sticky", 6 => "make_announce", 7 => "make_global"]);
                $context['definition']->set('QUICKMOD_AJAX', $value);
                // line 285
                echo "\t\t\t\t\t<li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["quickmod"], "LINK", [], "any", false, false, false, 285);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "QUICKMOD_AJAX", [], "any", false, false, false, 285)) {
                    echo " data-ajax=\"true\" data-refresh=\"true\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["quickmod"], "TITLE", [], "any", false, false, false, 285);
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 287
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 291
        echo "
\t";
        // line 292
        // line 293
        echo "
\t";
        // line 294
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 294)) || ($context["TOTAL_POSTS"] ?? null))) {
            // line 295
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 296
            echo ($context["TOTAL_POSTS"] ?? null);
            echo "
\t\t\t";
            // line 297
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "pagination", [], "any", false, false, false, 297))) {
                // line 298
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "viewtopic_body.html", 298)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 299
                echo "\t\t\t";
            } else {
                // line 300
                echo "\t\t\t\t&bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 302
            echo "\t\t</div>
\t";
        }
        // line 304
        echo "</div>

";
        // line 306
        // line 307
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "viewtopic_body.html", 307)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 308
        echo "
";
        // line 309
        // line 310
        echo "
";
        // line 311
        if ((($context["S_DISPLAY_ONLINE_LIST"] ?? null) && ($context["U_VIEWONLINE"] ?? null))) {
            // line 312
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3><a href=\"";
            // line 313
            echo ($context["U_VIEWONLINE"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
            echo "</a></h3>
\t\t<p>";
            // line 314
            echo ($context["LOGGED_IN_USER_LIST"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 317
        echo "
";
        // line 318
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "viewtopic_body.html", 318)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1063 => 318,  1060 => 317,  1054 => 314,  1048 => 313,  1045 => 312,  1043 => 311,  1040 => 310,  1039 => 309,  1036 => 308,  1024 => 307,  1023 => 306,  1019 => 304,  1015 => 302,  1009 => 300,  1006 => 299,  993 => 298,  991 => 297,  987 => 296,  984 => 295,  982 => 294,  979 => 293,  978 => 292,  975 => 291,  969 => 287,  954 => 285,  950 => 284,  946 => 283,  937 => 277,  933 => 276,  928 => 275,  926 => 274,  923 => 273,  919 => 271,  907 => 270,  902 => 269,  900 => 268,  897 => 267,  885 => 266,  882 => 265,  880 => 264,  876 => 262,  870 => 260,  864 => 258,  862 => 257,  851 => 256,  849 => 255,  846 => 254,  845 => 253,  842 => 252,  841 => 251,  838 => 250,  824 => 248,  822 => 247,  819 => 246,  814 => 244,  808 => 240,  805 => 239,  800 => 236,  798 => 235,  791 => 231,  787 => 230,  782 => 228,  776 => 225,  773 => 224,  770 => 223,  769 => 222,  763 => 221,  757 => 218,  751 => 214,  749 => 213,  742 => 209,  736 => 208,  733 => 207,  730 => 206,  723 => 202,  717 => 201,  714 => 200,  711 => 199,  704 => 195,  698 => 194,  695 => 193,  692 => 192,  685 => 188,  679 => 187,  676 => 186,  673 => 185,  666 => 181,  660 => 180,  657 => 179,  654 => 178,  647 => 174,  641 => 173,  638 => 172,  635 => 171,  634 => 170,  631 => 169,  628 => 168,  625 => 167,  623 => 166,  620 => 165,  612 => 164,  608 => 162,  596 => 159,  590 => 158,  586 => 157,  581 => 155,  577 => 154,  573 => 153,  569 => 152,  565 => 151,  561 => 150,  557 => 149,  530 => 140,  527 => 139,  517 => 137,  514 => 136,  512 => 135,  508 => 134,  505 => 133,  504 => 132,  501 => 131,  492 => 125,  488 => 124,  481 => 120,  478 => 119,  470 => 116,  466 => 114,  464 => 113,  461 => 112,  455 => 109,  451 => 107,  449 => 106,  440 => 103,  433 => 101,  430 => 100,  424 => 99,  423 => 98,  410 => 96,  387 => 95,  361 => 94,  349 => 93,  329 => 92,  327 => 91,  323 => 90,  309 => 87,  305 => 86,  295 => 80,  293 => 79,  290 => 78,  289 => 77,  285 => 75,  283 => 74,  279 => 72,  273 => 70,  270 => 69,  257 => 68,  255 => 67,  244 => 66,  241 => 65,  239 => 64,  236 => 63,  228 => 58,  223 => 56,  217 => 55,  212 => 53,  208 => 52,  204 => 51,  199 => 49,  196 => 48,  194 => 47,  191 => 46,  189 => 45,  176 => 44,  175 => 43,  172 => 42,  168 => 40,  162 => 38,  156 => 36,  154 => 35,  143 => 34,  141 => 33,  138 => 32,  137 => 31,  133 => 29,  127 => 25,  122 => 23,  117 => 22,  109 => 20,  107 => 19,  98 => 16,  96 => 15,  93 => 14,  80 => 11,  77 => 10,  75 => 9,  72 => 8,  66 => 7,  63 => 6,  62 => 5,  53 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "viewtopic_body.html", "");
    }
}
