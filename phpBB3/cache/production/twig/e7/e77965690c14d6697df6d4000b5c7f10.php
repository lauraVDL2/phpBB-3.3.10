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

/* index_body.html */
class __TwigTemplate_ef8b747aa6d33c846d5c94335acc52cb extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<p class=\"";
        echo ($context["S_CONTENT_FLOW_END"] ?? null);
        echo " responsive-center time";
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo " rightside";
        }
        echo "\">";
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo ($context["LAST_VISIT_DATE"] ?? null);
        } else {
            echo ($context["CURRENT_TIME"] ?? null);
        }
        echo "</p>
";
        // line 3
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "<p class=\"responsive-center time\">";
            echo ($context["CURRENT_TIME"] ?? null);
            echo "</p>";
        }
        // line 4
        echo "
";
        // line 5
        // line 6
        if (($context["U_MARK_FORUMS"] ?? null)) {
            // line 7
            echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
            // line 8
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" class=\"mark-read rightside\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_FORUMS_READ");
            echo "</a>
\t</div>
";
        }
        // line 11
        // line 12
        echo "
";
        // line 13
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 13)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 14
        echo "
";
        // line 15
        // line 16
        echo "
";
        // line 17
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 18
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" class=\"headerspace\">
\t<h3><a href=\"";
            // line 19
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</a>";
            if (($context["S_REGISTER_ENABLED"] ?? null)) {
                echo "&nbsp; &bull; &nbsp;<a href=\"";
                echo ($context["U_REGISTER"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</a>";
            }
            echo "</h3>
\t\t<fieldset class=\"quick-login\">
\t\t\t<label for=\"username\"><span>";
            // line 21
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 22
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t";
            // line 23
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                // line 24
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 26
            echo "\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 27
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 29
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 30
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t";
            // line 31
            echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>
";
        }
        // line 35
        echo "
";
        // line 36
        // line 37
        echo "
<div class=\"category\">Qui est en ligne ?</div>

<div id=\"qeel\">
\t<div id=\"groups\">
\t\t<a class=\"kiri lKiri\">Kirigakure</a>
\t\t<progress id=\"kiri_progress\" value=\"";
        // line 43
        echo ($context["KIRI_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>
\t\t<div class=\"kiri\">";
        // line 44
        echo ($context["KIRI_TOTAL"] ?? null);
        echo " shinobi</div>

\t\t<a class=\"iwa lIwa\">Iwagakure</a>
\t\t<progress id=\"iwa_progress\" value=\"";
        // line 47
        echo ($context["IWA_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress> 
\t\t<div class=\"iwa\">";
        // line 48
        echo ($context["IWA_TOTAL"] ?? null);
        echo " shinobi</div>

\t\t<a class=\"suna lSuna\">Sunagakure</a>
\t\t<progress id=\"suna_progress\" value=\"";
        // line 51
        echo ($context["SUNA_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>
\t\t<div class=\"suna\">";
        // line 52
        echo ($context["SUNA_TOTAL"] ?? null);
        echo " shinobi</div>

\t\t<a class=\"nukenin lNukenin\">Nukenin</a>
\t\t<progress id=\"nukenin_progress\" value=\"";
        // line 55
        echo ($context["NUKENIN_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>
\t\t<div class=\"nukenin\">";
        // line 56
        echo ($context["NUKENIN_TOTAL"] ?? null);
        echo " shinobi</div>
\t</div>
\t<div>
\t\t<div id=\"firstLineQEEL\">
\t\t\t<div>
\t\t\t\t<div id=\"onlineTitle\">En ligne</div>
\t\t\t\t<div id=\"onlineBlock\">
\t\t\t\t\t";
        // line 63
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 64
            echo "\t\t\t\t\t";
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 65
                echo "\t\t\t\t\t";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t";
        }
        // line 68
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"vavaQEEL\">
\t\t\t\t<div style=\"position: relative;\">
\t\t\t\t  <div id=\"welcome\">Bienvenue</div>
\t\t\t\t  <div id=\"dernier_membre\">";
        // line 73
        echo ($context["LAST_USER_NAME"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<img src=\"./download/file.php?avatar=";
        // line 75
        echo ($context["LAST_USER_AVATAR"] ?? null);
        echo "\" id=\"avatarQEEL\">
\t\t\t</div>
\t\t</div>
\t\t<div id=\"secondLineQEEL\">
\t\t\t<div>
\t\t\t\t<div id=\"topicsQEEL\">";
        // line 80
        echo ($context["TOTAL_TOPICS"] ?? null);
        echo "</div>
\t\t\t\t<div id=\"messagesQEEL\">";
        // line 81
        echo ($context["TOTAL_POSTS"] ?? null);
        echo "</div>
\t\t\t\t<div id=\"membersQEEL\">";
        // line 82
        echo ($context["TOTAL_USERS"] ?? null);
        echo "</div>
\t\t\t  </div>
\t\t\t  <div>
\t\t\t\t<div id=\"hoursTitle\">Connexions des 48h</div>
\t\t\t\t<div id=\"hoursBlock\">";
        // line 86
        echo ($context["LAST_HOURS_USERS"] ?? null);
        echo "</div>
\t\t\t  </div>
\t\t</div>
\t</div>
</div>

";
        // line 92
        echo ($context["LAST_HOURS_USERS"] ?? null);
        echo "

";
        // line 94
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 95
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 96
            if (($context["U_VIEWONLINE"] ?? null)) {
                echo "<h3><a href=\"";
                echo ($context["U_VIEWONLINE"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->extensions['phpbb\template\twig\extension']->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 97
            echo "\t\t<p>
\t\t\t";
            // line 98
            // line 99
            echo "\t\t\t";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo " (";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo ($context["RECORD_USERS"] ?? null);
            echo "<br /> 
\t\t\t";
            // line 100
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 101
                echo "\t\t\t\t<br />";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
\t\t\t\t";
                // line 102
                if (($context["LEGEND"] ?? null)) {
                    echo "<br /><em>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo ($context["LEGEND"] ?? null);
                    echo "</em>";
                }
                // line 103
                echo "\t\t\t";
            }
            // line 104
            echo "\t\t\t";
            // line 105
            echo "\t\t</p>
\t</div>
";
        }
        // line 108
        echo "
";
        // line 109
        // line 110
        echo "
";
        // line 111
        if (($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null)) {
            // line 112
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 113
            echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 115
            // line 116
            echo "\t\t\t";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 116))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONGRATULATIONS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 116));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "USERNAME", [], "any", false, false, false, 116);
                    if ((twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 116) !== "")) {
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 116);
                        echo ")";
                    }
                    if ( !twig_get_attribute($this->env, $this->source, $context["birthdays"], "S_LAST_ROW", [], "any", false, false, false, 116)) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->extensions['phpbb\template\twig\extension']->lang("NO_BIRTHDAYS");
            }
            // line 117
            echo "\t\t\t";
            // line 118
            echo "\t\t</p>
\t</div>
";
        }
        // line 121
        echo "
";
        // line 122
        if (($context["NEWEST_USER"] ?? null)) {
            // line 123
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 124
            echo $this->extensions['phpbb\template\twig\extension']->lang("STATISTICS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 126
            // line 127
            echo "\t\t\t";
            echo ($context["TOTAL_POSTS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo " &bull; ";
            echo ($context["TOTAL_USERS"] ?? null);
            echo " &bull; ";
            echo ($context["NEWEST_USER"] ?? null);
            echo "
\t\t\t";
            // line 128
            // line 129
            echo "\t\t</p>
\t</div>
";
        }
        // line 132
        echo "
";
        // line 133
        // line 134
        echo "
";
        // line 135
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 135)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 135,  450 => 134,  449 => 133,  446 => 132,  441 => 129,  440 => 128,  429 => 127,  428 => 126,  423 => 124,  420 => 123,  418 => 122,  415 => 121,  410 => 118,  408 => 117,  382 => 116,  381 => 115,  376 => 113,  373 => 112,  371 => 111,  368 => 110,  367 => 109,  364 => 108,  359 => 105,  357 => 104,  354 => 103,  345 => 102,  340 => 101,  338 => 100,  329 => 99,  328 => 98,  325 => 97,  313 => 96,  310 => 95,  308 => 94,  303 => 92,  294 => 86,  287 => 82,  283 => 81,  279 => 80,  271 => 75,  266 => 73,  259 => 68,  256 => 67,  250 => 65,  247 => 64,  245 => 63,  235 => 56,  229 => 55,  223 => 52,  217 => 51,  211 => 48,  205 => 47,  199 => 44,  193 => 43,  185 => 37,  184 => 36,  181 => 35,  174 => 31,  170 => 30,  165 => 29,  159 => 27,  156 => 26,  148 => 24,  146 => 23,  139 => 22,  132 => 21,  117 => 19,  112 => 18,  110 => 17,  107 => 16,  106 => 15,  103 => 14,  91 => 13,  88 => 12,  87 => 11,  79 => 8,  76 => 7,  74 => 6,  73 => 5,  70 => 4,  64 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
