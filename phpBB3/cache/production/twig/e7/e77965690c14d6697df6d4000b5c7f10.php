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
<div id=\"user_menu\">
\t<div id=\"firstCUser\">
\t\t<img src=\"./download/file.php?avatar=";
        // line 17
        echo ($context["MY_AVATAR"] ?? null);
        echo "\" id=\"my_avatar\">
\t\t<div id=\"first_infos_col\">
\t\t\t<div>
\t\t\t\t<div id=\"my_username\">";
        // line 20
        echo ($context["USERNAME"] ?? null);
        echo "</div>
\t\t\t\t<div id=\"my_level\">Niveau ";
        // line 21
        echo ($context["MY_LEVEL"] ?? null);
        echo "</div>
\t\t\t\t<div id=\"my_experience\">Expérience</div>
\t\t\t\t<progress id=\"my_progress\" value=\"";
        // line 23
        echo ($context["MY_EXPERIENCE"] ?? null);
        echo "\" max=\"";
        echo ($context["EXP_BAR"] ?? null);
        echo "\" title=\"";
        echo ($context["MY_EXPERIENCE"] ?? null);
        echo "/";
        echo ($context["EXP_BAR"] ?? null);
        echo "\"></progress>
\t\t\t\t<div id=\"my_social\">0 points de social</div>
\t\t\t\t<div id=\"my_fight\">0 points de combat</div> 
\t\t\t</div>
\t\t</div>
\t\t<div id=\"second_infos_col\">
\t\t\t";
        // line 29
        if ( !($context["FIRST_ELEMENT"] ?? null)) {
            // line 30
            echo "\t\t\t<form id=\"first_element_form\" method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"first_element_callback\" data-refresh=\"true\">
\t\t\t\t<div>Sélectionnez une affinité élémentaire :</div>
\t\t\t\t<select id=\"first_element_select\" name=\"felement\">
\t\t\t\t\t<option value=\"Katon\">Katon</option>
\t\t\t\t\t<option value=\"Fûton\">Fûton</option>
\t\t\t\t\t<option value=\"Raiton\">Raiton</option>
\t\t\t\t\t<option value=\"Doton\">Doton</option>
\t\t\t\t\t<option value=\"Suiton\">Suiton</option>
\t\t\t\t</select>
\t\t\t\t<input name=\"my_first_element_button\" class=\"my_first_element_button\" type=\"submit\" value=\"Valider\">
\t\t\t</form>
\t\t\t";
        } else {
            // line 42
            echo "\t\t\t<div class=\"my_elements\">Première affinité : ";
            echo ($context["FIRST_ELEMENT"] ?? null);
            echo "</div>
\t\t\t";
        }
        // line 44
        echo "\t\t</div>
\t</div>
\t<div id=\"info_attributes_use\">Points d'attributs à dépenser : <span id=\"my_attributes_to_use\">";
        // line 46
        echo ($context["ATTRIBUTES_TO_USE"] ?? null);
        echo "</span></div>
\t<form id=\"level_attributes\" method=\"post\" action=\"";
        // line 47
        echo ($context["U_ACTION"] ?? null);
        echo "\" data-ajax=\"attributes_callback\" data-refresh=\"true\">
\t\t<div id=\"my_attributes_interface\">
\t\t\t<div>
\t\t\t\t<div>Physique</div>
\t\t\t\t<div id=\"my_strength\">";
        // line 51
        echo ($context["MY_STRENGTH"] ?? null);
        echo "</div>
\t\t\t\t";
        // line 52
        if (((($context["MY_STRENGTH"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
            echo "<input name=\"my_strength_button\" class=\"my_attributes\" id=\"my_strength_button\" type=\"submit\" value=\"Dépenser\">";
        }
        // line 53
        echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Sensorialité</div>
\t\t\t\t<div id=\"my_sensoriality\">";
        // line 57
        echo ($context["MY_SENSORIALITY"] ?? null);
        echo "</div>
\t\t\t\t";
        // line 58
        if (((($context["MY_SENSORIALITY"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
            echo "<input name=\"my_sensoriality_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
        }
        // line 59
        echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Furtivité</div>
\t\t\t\t<div id =\"my_stealth\">";
        // line 63
        echo ($context["MY_STEALTH"] ?? null);
        echo "</div>
\t\t\t\t";
        // line 64
        if (((($context["MY_STEALTH"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
            echo "<input name=\"my_stealth_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
        }
        // line 65
        echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Agilité</div>
\t\t\t\t<div id=\"my_swiftness\">";
        // line 69
        echo ($context["MY_SWIFTNESS"] ?? null);
        echo "</div>
\t\t\t\t";
        // line 70
        if (((($context["MY_SWIFTNESS"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
            echo "<input name=\"my_swiftness_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
        }
        // line 71
        echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Ninjutsu</div>
\t\t\t\t<div id=\"my_ninjutsu\">";
        // line 75
        echo ($context["MY_NINJUTSU"] ?? null);
        echo "</div>
\t\t\t\t";
        // line 76
        if (((($context["MY_NINJUTSU"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
            echo "<input name=\"my_ninjutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
        }
        // line 77
        echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Taijutsu</div>
\t\t\t\t<div id=\"my_taijutsu\">";
        // line 81
        echo ($context["MY_TAIJUTSU"] ?? null);
        echo "</div>
\t\t\t\t";
        // line 82
        if (((($context["MY_TAIJUTSU"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
            echo "<input name=\"my_taijutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
        }
        // line 83
        echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Genjutsu</div>
\t\t\t\t<div id=\"my_genjutsu\">";
        // line 87
        echo ($context["MY_GENJUTSU"] ?? null);
        echo "</div>
\t\t\t\t";
        // line 88
        if (((($context["MY_GENJUTSU"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
            echo "<input name=\"my_genjutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
        }
        // line 89
        echo "\t\t\t</div>
\t\t</div>
\t</form>
</div>


";
        // line 95
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 95)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 96
        echo "
";
        // line 97
        // line 98
        echo "
";
        // line 99
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 100
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" class=\"headerspace\">
\t<h3><a href=\"";
            // line 101
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
            // line 103
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 104
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t";
            // line 105
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                // line 106
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 108
            echo "\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 109
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 111
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 112
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t";
            // line 113
            echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>
";
        }
        // line 117
        echo "
";
        // line 118
        // line 119
        echo "
<div class=\"category\">Qui est en ligne ?</div>

<div id=\"qeel\">
\t<div id=\"groups\">
\t\t<a class=\"kiri lKiri\">Kirigakure</a>
\t\t<progress id=\"kiri_progress\" value=\"";
        // line 125
        echo ($context["KIRI_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>
\t\t<div class=\"kiri\">";
        // line 126
        echo ($context["KIRI_TOTAL"] ?? null);
        echo " shinobi</div>

\t\t<a class=\"iwa lIwa\">Iwagakure</a>
\t\t<progress id=\"iwa_progress\" value=\"";
        // line 129
        echo ($context["IWA_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress> 
\t\t<div class=\"iwa\">";
        // line 130
        echo ($context["IWA_TOTAL"] ?? null);
        echo " shinobi</div>

\t\t<a class=\"suna lSuna\">Sunagakure</a>
\t\t<progress id=\"suna_progress\" value=\"";
        // line 133
        echo ($context["SUNA_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>
\t\t<div class=\"suna\">";
        // line 134
        echo ($context["SUNA_TOTAL"] ?? null);
        echo " shinobi</div>

\t\t<a class=\"nukenin lNukenin\">Nukenin</a>
\t\t<progress id=\"nukenin_progress\" value=\"";
        // line 137
        echo ($context["NUKENIN_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>
\t\t<div class=\"nukenin\">";
        // line 138
        echo ($context["NUKENIN_TOTAL"] ?? null);
        echo " shinobi</div>
\t</div>
\t<div>
\t\t<div id=\"firstLineQEEL\">
\t\t\t<div>
\t\t\t\t<div id=\"onlineTitle\">En ligne</div>
\t\t\t\t<div id=\"onlineBlock\">
\t\t\t\t\t";
        // line 145
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 146
            echo "\t\t\t\t\t";
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 147
                echo "\t\t\t\t\t";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
\t\t\t\t\t";
            }
            // line 149
            echo "\t\t\t\t\t";
        }
        // line 150
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"vavaQEEL\">
\t\t\t\t<div style=\"position: relative;\">
\t\t\t\t  <div id=\"welcome\">Bienvenue</div>
\t\t\t\t  <div id=\"dernier_membre\">";
        // line 155
        echo ($context["LAST_USER_NAME"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<img src=\"./download/file.php?avatar=";
        // line 157
        echo ($context["LAST_USER_AVATAR"] ?? null);
        echo "\" id=\"avatarQEEL\">
\t\t\t</div>
\t\t</div>
\t\t<div id=\"secondLineQEEL\">
\t\t\t<div>
\t\t\t\t<div id=\"topicsQEEL\">";
        // line 162
        echo ($context["TOTAL_TOPICS"] ?? null);
        echo "</div>
\t\t\t\t<div id=\"messagesQEEL\">";
        // line 163
        echo ($context["TOTAL_POSTS"] ?? null);
        echo "</div>
\t\t\t\t<div id=\"membersQEEL\">";
        // line 164
        echo ($context["TOTAL_USERS"] ?? null);
        echo "</div>
\t\t\t  </div>
\t\t\t  <div>
\t\t\t\t<div id=\"hoursTitle\">Connexions des 48h</div>
\t\t\t\t<div id=\"hoursBlock\">";
        // line 168
        echo ($context["LAST_HOURS_USERS"] ?? null);
        echo "</div>
\t\t\t  </div>
\t\t</div>
\t</div>
</div>

";
        // line 174
        echo ($context["LAST_HOURS_USERS"] ?? null);
        echo "

";
        // line 176
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 177
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 178
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
            // line 179
            echo "\t\t<p>
\t\t\t";
            // line 180
            // line 181
            echo "\t\t\t";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo " (";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo ($context["RECORD_USERS"] ?? null);
            echo "<br /> 
\t\t\t";
            // line 182
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 183
                echo "\t\t\t\t<br />";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
\t\t\t\t";
                // line 184
                if (($context["LEGEND"] ?? null)) {
                    echo "<br /><em>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo ($context["LEGEND"] ?? null);
                    echo "</em>";
                }
                // line 185
                echo "\t\t\t";
            }
            // line 186
            echo "\t\t\t";
            // line 187
            echo "\t\t</p>
\t</div>
";
        }
        // line 190
        echo "
";
        // line 191
        // line 192
        echo "
";
        // line 193
        if (($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null)) {
            // line 194
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 195
            echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 197
            // line 198
            echo "\t\t\t";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 198))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONGRATULATIONS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 198));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "USERNAME", [], "any", false, false, false, 198);
                    if ((twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 198) !== "")) {
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 198);
                        echo ")";
                    }
                    if ( !twig_get_attribute($this->env, $this->source, $context["birthdays"], "S_LAST_ROW", [], "any", false, false, false, 198)) {
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
            // line 199
            echo "\t\t\t";
            // line 200
            echo "\t\t</p>
\t</div>
";
        }
        // line 203
        echo "
";
        // line 204
        if (($context["NEWEST_USER"] ?? null)) {
            // line 205
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 206
            echo $this->extensions['phpbb\template\twig\extension']->lang("STATISTICS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 208
            // line 209
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
            // line 210
            // line 211
            echo "\t\t</p>
\t</div>
";
        }
        // line 214
        echo "
";
        // line 215
        // line 216
        echo "
";
        // line 217
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 217)->display($context);
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
        return array (  641 => 217,  638 => 216,  637 => 215,  634 => 214,  629 => 211,  628 => 210,  617 => 209,  616 => 208,  611 => 206,  608 => 205,  606 => 204,  603 => 203,  598 => 200,  596 => 199,  570 => 198,  569 => 197,  564 => 195,  561 => 194,  559 => 193,  556 => 192,  555 => 191,  552 => 190,  547 => 187,  545 => 186,  542 => 185,  533 => 184,  528 => 183,  526 => 182,  517 => 181,  516 => 180,  513 => 179,  501 => 178,  498 => 177,  496 => 176,  491 => 174,  482 => 168,  475 => 164,  471 => 163,  467 => 162,  459 => 157,  454 => 155,  447 => 150,  444 => 149,  438 => 147,  435 => 146,  433 => 145,  423 => 138,  417 => 137,  411 => 134,  405 => 133,  399 => 130,  393 => 129,  387 => 126,  381 => 125,  373 => 119,  372 => 118,  369 => 117,  362 => 113,  358 => 112,  353 => 111,  347 => 109,  344 => 108,  336 => 106,  334 => 105,  327 => 104,  320 => 103,  305 => 101,  300 => 100,  298 => 99,  295 => 98,  294 => 97,  291 => 96,  279 => 95,  271 => 89,  267 => 88,  263 => 87,  257 => 83,  253 => 82,  249 => 81,  243 => 77,  239 => 76,  235 => 75,  229 => 71,  225 => 70,  221 => 69,  215 => 65,  211 => 64,  207 => 63,  201 => 59,  197 => 58,  193 => 57,  187 => 53,  183 => 52,  179 => 51,  172 => 47,  168 => 46,  164 => 44,  158 => 42,  142 => 30,  140 => 29,  125 => 23,  120 => 21,  116 => 20,  110 => 17,  105 => 14,  91 => 13,  88 => 12,  87 => 11,  79 => 8,  76 => 7,  74 => 6,  73 => 5,  70 => 4,  64 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
