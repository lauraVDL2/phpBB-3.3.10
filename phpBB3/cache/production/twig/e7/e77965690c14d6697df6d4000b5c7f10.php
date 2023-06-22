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
        echo "<div class=\"wrap\" id=\"wrap\">
<p class=\"";
        // line 3
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
        // line 4
        if (($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "<p class=\"responsive-center time\">";
            echo ($context["CURRENT_TIME"] ?? null);
            echo "</p>";
        }
        // line 5
        echo "
";
        // line 6
        // line 7
        if (($context["U_MARK_FORUMS"] ?? null)) {
            // line 8
            echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
            // line 9
            echo ($context["U_MARK_FORUMS"] ?? null);
            echo "\" class=\"mark-read rightside\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MARK_FORUMS_READ");
            echo "</a>
\t</div>
";
        }
        // line 12
        // line 13
        echo "
";
        // line 14
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
        $this->env->get_assets_bag()->add_script($asset);        // line 15
        echo "
";
        // line 16
        if ( !($context["IS_ANONYMOUS"] ?? null)) {
            // line 17
            echo "<a href=\"./fiche_technique.php?uid=";
            echo ($context["USER_ID"] ?? null);
            echo "\">Fiche Technique</a>
<div id=\"user_menu\">
\t<div id=\"firstCUser\">
\t\t<img src=\"./download/file.php?avatar=";
            // line 20
            echo ($context["MY_AVATAR"] ?? null);
            echo "\" id=\"my_avatar\">
\t\t<div id=\"first_infos_col\">
\t\t\t<div>
\t\t\t\t<div id=\"my_username\">";
            // line 23
            echo ($context["USERNAME"] ?? null);
            echo "</div>
\t\t\t\t<div id=\"my_level\">Niveau ";
            // line 24
            echo ($context["MY_LEVEL"] ?? null);
            echo "</div>
\t\t\t\t<div id=\"my_experience\">Expérience</div>
\t\t\t\t<progress id=\"my_progress\" value=\"";
            // line 26
            echo ($context["MY_EXPERIENCE"] ?? null);
            echo "\" max=\"";
            echo ($context["EXP_BAR"] ?? null);
            echo "\" title=\"";
            echo ($context["MY_EXPERIENCE"] ?? null);
            echo "/";
            echo ($context["EXP_BAR"] ?? null);
            echo "\"></progress>
\t\t\t\t<div id=\"my_talent\">";
            // line 27
            echo ($context["TALENT_POINTS"] ?? null);
            echo " points de talent</div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"second_infos_col\">
\t\t\t";
            // line 31
            if ( !($context["FIRST_ELEMENT"] ?? null)) {
                // line 32
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
\t\t\t\t<input name=\"my_first_element_button\" type=\"submit\" value=\"Valider\">
\t\t\t</form>
\t\t\t";
            } else {
                // line 44
                echo "\t\t\t<div class=\"my_elements\">Première affinité : ";
                echo ($context["FIRST_ELEMENT"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 46
            echo "
\t\t\t";
            // line 47
            if (( !($context["SECOND_ELEMENT"] ?? null) && ($context["IS_SECOND_ELEMENT"] ?? null))) {
                // line 48
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"second_element_callback\" data-refresh=\"true\">
\t\t\t\t<div>Sélectionnez une affinité élémentaire :</div>
\t\t\t\t<select id=\"second_element_select\" name=\"selement\">
\t\t\t\t\t";
                // line 51
                if ((($context["FIRST_ELEMENT"] ?? null) != "Katon")) {
                    echo "<option value=\"Katon\">Katon</option>";
                }
                // line 52
                echo "\t\t\t\t\t";
                if ((($context["FIRST_ELEMENT"] ?? null) != "Fûton")) {
                    echo "<option value=\"Fûton\">Fûton</option>";
                }
                // line 53
                echo "\t\t\t\t\t";
                if ((($context["FIRST_ELEMENT"] ?? null) != "Raiton")) {
                    echo "<option value=\"Raiton\">Raiton</option>";
                }
                // line 54
                echo "\t\t\t\t\t";
                if ((($context["FIRST_ELEMENT"] ?? null) != "Doton")) {
                    echo "<option value=\"Doton\">Doton</option>";
                }
                // line 55
                echo "\t\t\t\t\t";
                if ((($context["FIRST_ELEMENT"] ?? null) != "Suiton")) {
                    echo "<option value=\"Suiton\">Suiton</option>";
                }
                // line 56
                echo "\t\t\t\t\t<input name=\"my_second_element_button\" type=\"submit\" value=\"Valider\">
\t\t\t\t</select>
\t\t\t</form>
\t\t\t";
            } elseif (            // line 59
($context["SECOND_ELEMENT"] ?? null)) {
                // line 60
                echo "\t\t\t<div class=\"my_elements\">Deuxième affinité : ";
                echo ($context["SECOND_ELEMENT"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 62
            echo "
\t\t\t";
            // line 63
            if (( !($context["THIRD_ELEMENT"] ?? null) && ($context["IS_THIRD_ELEMENT"] ?? null))) {
                // line 64
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"third_element_callback\" data-refresh=\"true\">
\t\t\t\t<div>Sélectionnez une affinité élémentaire :</div>
\t\t\t\t<select id=\"third_element_select\" name=\"telement\">
\t\t\t\t\t";
                // line 67
                if (((($context["FIRST_ELEMENT"] ?? null) != "Katon") && (($context["SECOND_ELEMENT"] ?? null) != "KATON"))) {
                    echo "<option value=\"Katon\">Katon</option>";
                }
                // line 68
                echo "\t\t\t\t\t";
                if (((($context["FIRST_ELEMENT"] ?? null) != "Fûton") && (($context["SECOND_ELEMENT"] ?? null) != "Fûton"))) {
                    echo "<option value=\"Fûton\">Fûton</option>";
                }
                // line 69
                echo "\t\t\t\t\t";
                if (((($context["FIRST_ELEMENT"] ?? null) != "Raiton") && (($context["SECOND_ELEMENT"] ?? null) != "Raiton"))) {
                    echo "<option value=\"Raiton\">Raiton</option>";
                }
                // line 70
                echo "\t\t\t\t\t";
                if (((($context["FIRST_ELEMENT"] ?? null) != "Doton") && (($context["SECOND_ELEMENT"] ?? null) != "Doton"))) {
                    echo "<option value=\"Doton\">Doton</option>";
                }
                // line 71
                echo "\t\t\t\t\t";
                if (((($context["FIRST_ELEMENT"] ?? null) != "Suiton") && (($context["SECOND_ELEMENT"] ?? null) != "Suiton"))) {
                    echo "<option value=\"Suiton\">Suiton</option>";
                }
                // line 72
                echo "\t\t\t\t\t<input name=\"my_third_element_button\" type=\"submit\" value=\"Valider\">
\t\t\t\t</select>
\t\t\t</form>
\t\t\t";
            } elseif (            // line 75
($context["THIRD_ELEMENT"] ?? null)) {
                // line 76
                echo "\t\t\t<div class=\"my_elements\">Troisième affinité : ";
                echo ($context["THIRD_ELEMENT"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 78
            echo "\t\t</div>
\t</div>
\t<div id=\"info_attributes_use\">Points d'attributs à dépenser : <span id=\"my_attributes_to_use\">";
            // line 80
            echo ($context["ATTRIBUTES_TO_USE"] ?? null);
            echo "</span></div>
\t<form id=\"level_attributes\" method=\"post\" action=\"";
            // line 81
            echo ($context["U_ACTION"] ?? null);
            echo "\" data-ajax=\"attributes_callback\" data-refresh=\"true\">
\t\t<div id=\"my_attributes_interface\">
\t\t\t<div>
\t\t\t\t<div>Physique</div>
\t\t\t\t<div id=\"my_strength\">";
            // line 85
            echo ($context["MY_STRENGTH"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 86
            if (((($context["MY_STRENGTH"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_strength_button\" class=\"my_attributes\" id=\"my_strength_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 87
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Sensorialité</div>
\t\t\t\t<div id=\"my_sensoriality\">";
            // line 91
            echo ($context["MY_SENSORIALITY"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 92
            if (((($context["MY_SENSORIALITY"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_sensoriality_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 93
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Furtivité</div>
\t\t\t\t<div id =\"my_stealth\">";
            // line 97
            echo ($context["MY_STEALTH"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 98
            if (((($context["MY_STEALTH"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_stealth_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 99
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Agilité</div>
\t\t\t\t<div id=\"my_swiftness\">";
            // line 103
            echo ($context["MY_SWIFTNESS"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 104
            if (((($context["MY_SWIFTNESS"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_swiftness_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 105
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Ninjutsu</div>
\t\t\t\t<div id=\"my_ninjutsu\">";
            // line 109
            echo ($context["MY_NINJUTSU"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 110
            if (((($context["MY_NINJUTSU"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_ninjutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 111
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Taijutsu</div>
\t\t\t\t<div id=\"my_taijutsu\">";
            // line 115
            echo ($context["MY_TAIJUTSU"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 116
            if (((($context["MY_TAIJUTSU"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_taijutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 117
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Genjutsu</div>
\t\t\t\t<div id=\"my_genjutsu\">";
            // line 121
            echo ($context["MY_GENJUTSU"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 122
            if (((($context["MY_GENJUTSU"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_genjutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 123
            echo "\t\t\t</div>
\t\t</div>
\t</form>
</div>
";
        }
        // line 128
        echo "
";
        // line 129
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 129)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 130
        echo "
";
        // line 131
        // line 132
        echo "
";
        // line 133
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 134
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" class=\"headerspace\">
\t<h3><a href=\"";
            // line 135
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
            // line 137
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 138
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t";
            // line 139
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                // line 140
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 142
            echo "\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 143
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 145
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 146
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t";
            // line 147
            echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>
";
        }
        // line 151
        echo "
";
        // line 152
        // line 153
        echo "
<div class=\"category\">Qui est en ligne ?</div>

<div id=\"qeel\">
\t<div id=\"groups\">
\t\t<a class=\"kiri lKiri\">Kirigakure</a>
\t\t<progress id=\"kiri_progress\" value=\"";
        // line 159
        echo ($context["KIRI_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>
\t\t<div class=\"kiri\">";
        // line 160
        echo ($context["KIRI_TOTAL"] ?? null);
        echo " shinobi</div>

\t\t<a class=\"iwa lIwa\">Iwagakure</a>
\t\t<progress id=\"iwa_progress\" value=\"";
        // line 163
        echo ($context["IWA_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress> 
\t\t<div class=\"iwa\">";
        // line 164
        echo ($context["IWA_TOTAL"] ?? null);
        echo " shinobi</div>

\t\t<a class=\"suna lSuna\">Sunagakure</a>
\t\t<progress id=\"suna_progress\" value=\"";
        // line 167
        echo ($context["SUNA_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>
\t\t<div class=\"suna\">";
        // line 168
        echo ($context["SUNA_TOTAL"] ?? null);
        echo " shinobi</div>

\t\t<a class=\"nukenin lNukenin\">Nukenin</a>
\t\t<progress id=\"nukenin_progress\" value=\"";
        // line 171
        echo ($context["NUKENIN_TOTAL"] ?? null);
        echo "\" max=\"";
        echo ($context["TOTAL_FINAL"] ?? null);
        echo "\"></progress>
\t\t<div class=\"nukenin\">";
        // line 172
        echo ($context["NUKENIN_TOTAL"] ?? null);
        echo " shinobi</div>
\t</div>
\t<div>
\t\t<div id=\"firstLineQEEL\">
\t\t\t<div>
\t\t\t\t<div id=\"onlineTitle\">En ligne</div>
\t\t\t\t<div id=\"onlineBlock\">
\t\t\t\t\t";
        // line 179
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 180
            echo "\t\t\t\t\t";
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 181
                echo "\t\t\t\t\t";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
\t\t\t\t\t";
            }
            // line 183
            echo "\t\t\t\t\t";
        }
        // line 184
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"vavaQEEL\">
\t\t\t\t<div style=\"position: relative;\">
\t\t\t\t  <div id=\"welcome\">Bienvenue</div>
\t\t\t\t  <div id=\"dernier_membre\">";
        // line 189
        echo ($context["LAST_USER_NAME"] ?? null);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<img src=\"./download/file.php?avatar=";
        // line 191
        echo ($context["LAST_USER_AVATAR"] ?? null);
        echo "\" id=\"avatarQEEL\">
\t\t\t</div>
\t\t</div>
\t\t<div id=\"secondLineQEEL\">
\t\t\t<div>
\t\t\t\t<div id=\"topicsQEEL\">";
        // line 196
        echo ($context["TOTAL_TOPICS"] ?? null);
        echo "</div>
\t\t\t\t<div id=\"messagesQEEL\">";
        // line 197
        echo ($context["TOTAL_POSTS"] ?? null);
        echo "</div>
\t\t\t\t<div id=\"membersQEEL\">";
        // line 198
        echo ($context["TOTAL_USERS"] ?? null);
        echo "</div>
\t\t\t  </div>
\t\t\t  <div>
\t\t\t\t<div id=\"hoursTitle\">Connexions des 48h</div>
\t\t\t\t<div id=\"hoursBlock\">";
        // line 202
        echo ($context["LAST_HOURS_USERS"] ?? null);
        echo "</div>
\t\t\t  </div>
\t\t</div>
\t</div>
</div>

";
        // line 208
        echo ($context["LAST_HOURS_USERS"] ?? null);
        echo "

";
        // line 210
        if (($context["S_DISPLAY_ONLINE_LIST"] ?? null)) {
            // line 211
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 212
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
            // line 213
            echo "\t\t<p>
\t\t\t";
            // line 214
            // line 215
            echo "\t\t\t";
            echo ($context["TOTAL_USERS_ONLINE"] ?? null);
            echo " (";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo ($context["RECORD_USERS"] ?? null);
            echo "<br /> 
\t\t\t";
            // line 216
            if (($context["U_VIEWONLINE"] ?? null)) {
                // line 217
                echo "\t\t\t\t<br />";
                echo ($context["LOGGED_IN_USER_LIST"] ?? null);
                echo "
\t\t\t\t";
                // line 218
                if (($context["LEGEND"] ?? null)) {
                    echo "<br /><em>";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("LEGEND");
                    echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                    echo " ";
                    echo ($context["LEGEND"] ?? null);
                    echo "</em>";
                }
                // line 219
                echo "\t\t\t";
            }
            // line 220
            echo "\t\t\t";
            // line 221
            echo "\t\t</p>
\t</div>
";
        }
        // line 224
        echo "
";
        // line 225
        // line 226
        echo "
";
        // line 227
        if (($context["S_DISPLAY_BIRTHDAY_LIST"] ?? null)) {
            // line 228
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 229
            echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAYS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 231
            // line 232
            echo "\t\t\t";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 232))) {
                echo $this->extensions['phpbb\template\twig\extension']->lang("CONGRATULATIONS");
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "birthdays", [], "any", false, false, false, 232));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "USERNAME", [], "any", false, false, false, 232);
                    if ((twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 232) !== "")) {
                        echo " (";
                        echo twig_get_attribute($this->env, $this->source, $context["birthdays"], "AGE", [], "any", false, false, false, 232);
                        echo ")";
                    }
                    if ( !twig_get_attribute($this->env, $this->source, $context["birthdays"], "S_LAST_ROW", [], "any", false, false, false, 232)) {
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
            // line 233
            echo "\t\t\t";
            // line 234
            echo "\t\t</p>
\t</div>
";
        }
        // line 237
        echo "
";
        // line 238
        if (($context["NEWEST_USER"] ?? null)) {
            // line 239
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 240
            echo $this->extensions['phpbb\template\twig\extension']->lang("STATISTICS");
            echo "</h3>
\t\t<p>
\t\t\t";
            // line 242
            // line 243
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
            // line 244
            // line 245
            echo "\t\t</p>
\t</div>
";
        }
        // line 248
        echo "
";
        // line 249
        // line 250
        echo "</div>

";
        // line 252
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 252)->display($context);
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
        return array (  753 => 252,  749 => 250,  748 => 249,  745 => 248,  740 => 245,  739 => 244,  728 => 243,  727 => 242,  722 => 240,  719 => 239,  717 => 238,  714 => 237,  709 => 234,  707 => 233,  681 => 232,  680 => 231,  675 => 229,  672 => 228,  670 => 227,  667 => 226,  666 => 225,  663 => 224,  658 => 221,  656 => 220,  653 => 219,  644 => 218,  639 => 217,  637 => 216,  628 => 215,  627 => 214,  624 => 213,  612 => 212,  609 => 211,  607 => 210,  602 => 208,  593 => 202,  586 => 198,  582 => 197,  578 => 196,  570 => 191,  565 => 189,  558 => 184,  555 => 183,  549 => 181,  546 => 180,  544 => 179,  534 => 172,  528 => 171,  522 => 168,  516 => 167,  510 => 164,  504 => 163,  498 => 160,  492 => 159,  484 => 153,  483 => 152,  480 => 151,  473 => 147,  469 => 146,  464 => 145,  458 => 143,  455 => 142,  447 => 140,  445 => 139,  438 => 138,  431 => 137,  416 => 135,  411 => 134,  409 => 133,  406 => 132,  405 => 131,  402 => 130,  390 => 129,  387 => 128,  380 => 123,  376 => 122,  372 => 121,  366 => 117,  362 => 116,  358 => 115,  352 => 111,  348 => 110,  344 => 109,  338 => 105,  334 => 104,  330 => 103,  324 => 99,  320 => 98,  316 => 97,  310 => 93,  306 => 92,  302 => 91,  296 => 87,  292 => 86,  288 => 85,  281 => 81,  277 => 80,  273 => 78,  267 => 76,  265 => 75,  260 => 72,  255 => 71,  250 => 70,  245 => 69,  240 => 68,  236 => 67,  229 => 64,  227 => 63,  224 => 62,  218 => 60,  216 => 59,  211 => 56,  206 => 55,  201 => 54,  196 => 53,  191 => 52,  187 => 51,  180 => 48,  178 => 47,  175 => 46,  169 => 44,  153 => 32,  151 => 31,  144 => 27,  134 => 26,  129 => 24,  125 => 23,  119 => 20,  112 => 17,  110 => 16,  107 => 15,  93 => 14,  90 => 13,  89 => 12,  81 => 9,  78 => 8,  76 => 7,  75 => 6,  72 => 5,  66 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
