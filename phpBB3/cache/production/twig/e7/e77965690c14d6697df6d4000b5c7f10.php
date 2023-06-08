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
        $asset_file = "JnM.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 14
        echo "
Niveau : ";
        // line 15
        echo ($context["MY_LEVEL"] ?? null);
        echo " <br />
Expérience : ";
        // line 16
        echo ($context["MY_EXPERIENCE"] ?? null);
        echo "<br />
Points d'attributs à dépenser : <span id=\"my_attributes_to_use\">";
        // line 17
        echo ($context["ATTRIBUTES_TO_USE"] ?? null);
        echo "</span><br />
<form id=\"level_attributes\" method=\"post\" action=\"";
        // line 18
        echo ($context["U_ACTION"] ?? null);
        echo "\" data-ajax=\"attributes_callback\" data-refresh=\"true\">
Physique : <span id=\"my_strength\">";
        // line 19
        echo ($context["MY_STRENGTH"] ?? null);
        echo "</span> <input name=\"my_strength_button\" class=\"my_attributes\" id=\"my_strength_button\" type=\"submit\" value=\"Dépenser\"><br />
Sensorialité : <span id=\"my_sensoriality\">";
        // line 20
        echo ($context["MY_SENSORIALITY"] ?? null);
        echo "</span><input name=\"my_sensoriality_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\"><br />
Furtivité : <span id =\"my_stealth\">";
        // line 21
        echo ($context["MY_STEALTH"] ?? null);
        echo "</span><input name=\"my_stealth_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\"><br />
Agilité : <span id=\"my_swiftness\">";
        // line 22
        echo ($context["MY_SWIFTNESS"] ?? null);
        echo "</span><input name=\"my_swiftness_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\"><br />
Ninjutsu : <span id=\"my_ninjutsu\">";
        // line 23
        echo ($context["MY_NINJUTSU"] ?? null);
        echo "</span><input name=\"my_ninjutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\"><br />
Taijutsu : <span id=\"my_taijutsu\">";
        // line 24
        echo ($context["MY_TAIJUTSU"] ?? null);
        echo "</span><input name=\"my_taijutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\"><br />
Genjutsu : <span id=\"my_genjutsu\">";
        // line 25
        echo ($context["MY_GENJUTSU"] ?? null);
        echo "</span><input name=\"my_genjutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">
</form>


";
        // line 29
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 29)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 30
        echo "
";
        // line 31
        // line 32
        echo "
";
        // line 33
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 34
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" class=\"headerspace\">
\t<h3><a href=\"";
            // line 35
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
            // line 37
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 38
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t";
            // line 39
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                // line 40
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 42
            echo "\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 43
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 45
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 46
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t";
            // line 47
            echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>
";
        }
        // line 51
        echo "
";
        // line 52
        // line 53
        echo "
<div class=\"category\">Qui est en ligne ?</div>

<div id=\"qeel\">
\t<div id=\"groups\">
\t\t<a class=\"kiri lKiri\">Kirigakure</a>
\t\t<progress id=\"kiri_progress\" value=\"";
        // line 59
        echo ($context["KIRI_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>
\t\t<div class=\"kiri\">";
        // line 60
        echo ($context["KIRI_TOTAL"] ?? null);
        echo " shinobi</div>

\t\t<a class=\"iwa lIwa\">Iwagakure</a>
\t\t<progress id=\"iwa_progress\" value=\"";
        // line 63
        echo ($context["IWA_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress> 
\t\t<div class=\"iwa\">";
        // line 64
        echo ($context["IWA_TOTAL"] ?? null);
        echo " shinobi</div>

\t\t<a class=\"suna lSuna\">Sunagakure</a>
\t\t<progress id=\"suna_progress\" value=\"";
        // line 67
        echo ($context["SUNA_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>
\t\t<div class=\"suna\">";
        // line 68
        echo ($context["SUNA_TOTAL"] ?? null);
        echo " shinobi</div>

\t\t<a class=\"nukenin lNukenin\">Nukenin</a>
\t\t<progress id=\"nukenin_progress\" value=\"";
        // line 71
        echo ($context["NUKENIN_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>
\t\t<div class=\"nukenin\">";
        // line 72
        echo ($context["NUKENIN_TOTAL"] ?? null);
        echo " shinobi</div>
\t</div>
\t<div>
\t\t<div id=\"firstLineQEEL\">
\t\t\t<div>
\t\t\t\t<div id=\"onlineTitle\">En ligne</div>
\t\t\t\t<div id=\"onlineBlock\">
\t\t\t\t\t";
        // line 79
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 80
            echo "\t\t\t\t\t";
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 81
                echo "\t\t\t\t\t";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
\t\t\t\t\t";
            }
            // line 83
            echo "\t\t\t\t\t";
        }
        // line 84
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"vavaQEEL\">
\t\t\t\t<div style=\"position: relative;\">
\t\t\t\t  <div id=\"welcome\">Bienvenue</div>
\t\t\t\t  <div id=\"dernier_membre\">";
        // line 89
        echo ($context["LAST_USER_NAME"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<img src=\"./download/file.php?avatar=";
        // line 91
        echo ($context["LAST_USER_AVATAR"] ?? null);
        echo "\" id=\"avatarQEEL\">
\t\t\t</div>
\t\t</div>
\t\t<div id=\"secondLineQEEL\">
\t\t\t<div>
\t\t\t\t<div id=\"topicsQEEL\">";
        // line 96
        echo ($context["TOTAL_TOPICS"] ?? null);
        echo "</div>
\t\t\t\t<div id=\"messagesQEEL\">";
        // line 97
        echo ($context["TOTAL_POSTS"] ?? null);
        echo "</div>
\t\t\t\t<div id=\"membersQEEL\">";
        // line 98
        echo ($context["TOTAL_USERS"] ?? null);
        echo "</div>
\t\t\t  </div>
\t\t\t  <div>
\t\t\t\t<div id=\"hoursTitle\">Connexions des 48h</div>
\t\t\t\t<div id=\"hoursBlock\">";
        // line 102
        echo ($context["LAST_HOURS_USERS"] ?? null);
        echo "</div>
\t\t\t  </div>
\t\t</div>
\t</div>
</div>

";
        // line 108
        echo ($context["LAST_HOURS_USERS"] ?? null);
        echo "

";
        // line 110
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 111
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 112
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
            // line 113
            echo "\t\t<p>
\t\t\t";
            // line 114
            // line 115
            echo "\t\t\t";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo " (";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo ($context["RECORD_USERS"] ?? null);
            echo "<br /> 
\t\t\t";
            // line 116
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 117
                echo "\t\t\t\t<br />";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
\t\t\t\t";
                // line 118
                if (($context["LEGEND"] ?? null)) {
                    echo "<br /><em>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo ($context["LEGEND"] ?? null);
                    echo "</em>";
                }
                // line 119
                echo "\t\t\t";
            }
            // line 120
            echo "\t\t\t";
            // line 121
            echo "\t\t</p>
\t</div>
";
        }
        // line 124
        echo "
";
        // line 125
        // line 126
        echo "
";
        // line 127
        if (($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null)) {
            // line 128
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 129
            echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 131
            // line 132
            echo "\t\t\t";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 132))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONGRATULATIONS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 132));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "USERNAME", [], "any", false, false, false, 132);
                    if ((twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 132) !== "")) {
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 132);
                        echo ")";
                    }
                    if ( !twig_get_attribute($this->env, $this->source, $context["birthdays"], "S_LAST_ROW", [], "any", false, false, false, 132)) {
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
            // line 133
            echo "\t\t\t";
            // line 134
            echo "\t\t</p>
\t</div>
";
        }
        // line 137
        echo "
";
        // line 138
        if (($context["NEWEST_USER"] ?? null)) {
            // line 139
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 140
            echo $this->extensions['phpbb\template\twig\extension']->lang("STATISTICS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 142
            // line 143
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
            // line 144
            // line 145
            echo "\t\t</p>
\t</div>
";
        }
        // line 148
        echo "
";
        // line 149
        // line 150
        echo "
";
        // line 151
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 151)->display($context);
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
        return array (  517 => 151,  514 => 150,  513 => 149,  510 => 148,  505 => 145,  504 => 144,  493 => 143,  492 => 142,  487 => 140,  484 => 139,  482 => 138,  479 => 137,  474 => 134,  472 => 133,  446 => 132,  445 => 131,  440 => 129,  437 => 128,  435 => 127,  432 => 126,  431 => 125,  428 => 124,  423 => 121,  421 => 120,  418 => 119,  409 => 118,  404 => 117,  402 => 116,  393 => 115,  392 => 114,  389 => 113,  377 => 112,  374 => 111,  372 => 110,  367 => 108,  358 => 102,  351 => 98,  347 => 97,  343 => 96,  335 => 91,  330 => 89,  323 => 84,  320 => 83,  314 => 81,  311 => 80,  309 => 79,  299 => 72,  293 => 71,  287 => 68,  281 => 67,  275 => 64,  269 => 63,  263 => 60,  257 => 59,  249 => 53,  248 => 52,  245 => 51,  238 => 47,  234 => 46,  229 => 45,  223 => 43,  220 => 42,  212 => 40,  210 => 39,  203 => 38,  196 => 37,  181 => 35,  176 => 34,  174 => 33,  171 => 32,  170 => 31,  167 => 30,  155 => 29,  148 => 25,  144 => 24,  140 => 23,  136 => 22,  132 => 21,  128 => 20,  124 => 19,  120 => 18,  116 => 17,  112 => 16,  108 => 15,  105 => 14,  91 => 13,  88 => 12,  87 => 11,  79 => 8,  76 => 7,  74 => 6,  73 => 5,  70 => 4,  64 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
