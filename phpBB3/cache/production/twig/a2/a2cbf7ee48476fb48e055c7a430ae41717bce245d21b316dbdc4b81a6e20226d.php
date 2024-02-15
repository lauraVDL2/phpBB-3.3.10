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
class __TwigTemplate_643b5f84ea6597a4bb26e05b7929b51ffb0bbcb413120f79dc816d64de673aa2 extends \Twig\Template
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
            echo "<div id=\"um_links\">
\t<a href=\"./fiche_technique.php?uid=";
            // line 18
            echo ($context["USER_ID"] ?? null);
            echo "\">Fiche Technique</a>
\t<a href=\"./shop.php\">Arbre de compétences</a>
\t<a href=\"./missions_board.php\">Tableau des missions</a>
\t<a href=\"./relationships.php?uid=";
            // line 21
            echo ($context["USER_ID"] ?? null);
            echo "\">Carnet de relations</a>
</div>
<div id=\"user_menu\">
\t<div id=\"firstCUser\">
\t\t";
            // line 25
            if (($context["MY_AVATAR"] ?? null)) {
                // line 26
                echo "\t\t\t<img src=\"./download/file.php?avatar=";
                echo ($context["MY_AVATAR"] ?? null);
                echo "\" id=\"my_avatar\">
\t\t";
            } else {
                // line 28
                echo "\t\t\t<img src=\"https://i.servimg.com/u/f33/16/35/67/99/defaul10.png\" id=\"my_avatar\">
\t\t";
            }
            // line 30
            echo "\t\t<div id=\"first_infos_col\">
\t\t\t<div>
\t\t\t\t<div id=\"my_username\">";
            // line 32
            echo ($context["USERNAME"] ?? null);
            echo "</div>
\t\t\t\t<div id=\"my_level\">Niveau ";
            // line 33
            echo ($context["MY_LEVEL"] ?? null);
            echo "</div>
\t\t\t\t<div id=\"my_experience\">Expérience</div>
\t\t\t\t<progress id=\"my_progress\" value=\"";
            // line 35
            echo ($context["MY_EXPERIENCE"] ?? null);
            echo "\" max=\"";
            echo ($context["EXP_BAR"] ?? null);
            echo "\" title=\"";
            echo ($context["MY_EXPERIENCE"] ?? null);
            echo "/";
            echo ($context["EXP_BAR"] ?? null);
            echo "\"></progress>
\t\t\t\t<div id=\"my_talent\">";
            // line 36
            echo ($context["TALENT_POINTS"] ?? null);
            echo " points de compétence</div>
\t\t\t\t";
            // line 37
            if (((((($context["IS_IWA"] ?? null) || ($context["IS_KIRI"] ?? null)) || ($context["IS_SUNA"] ?? null)) || ($context["IS_KONOHA"] ?? null)) || ($context["IS_KUMO"] ?? null))) {
                // line 38
                echo "\t\t\t\t\t<div id=\"my_influence\">";
                echo ($context["INFLUENCE_POINTS"] ?? null);
                echo " points d'influence</div>
\t\t\t\t";
            }
            // line 40
            echo "\t\t\t</div>
\t\t</div>
\t\t<div id=\"second_infos_col\">
\t\t\t";
            // line 43
            if ( !($context["FIRST_ELEMENT"] ?? null)) {
                // line 44
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
                // line 56
                echo "\t\t\t<div class=\"my_elements\">Première affinité : ";
                echo ($context["FIRST_ELEMENT"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 58
            echo "
\t\t\t";
            // line 59
            if (( !($context["SECOND_ELEMENT"] ?? null) && ($context["IS_SECOND_ELEMENT"] ?? null))) {
                // line 60
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"second_element_callback\" data-refresh=\"true\">
\t\t\t\t<div>Sélectionnez une affinité élémentaire :</div>
\t\t\t\t<select id=\"second_element_select\" name=\"selement\">
\t\t\t\t\t";
                // line 63
                if ((($context["FIRST_ELEMENT"] ?? null) != "Katon")) {
                    echo "<option value=\"Katon\">Katon</option>";
                }
                // line 64
                echo "\t\t\t\t\t";
                if ((($context["FIRST_ELEMENT"] ?? null) != "Fûton")) {
                    echo "<option value=\"Fûton\">Fûton</option>";
                }
                // line 65
                echo "\t\t\t\t\t";
                if ((($context["FIRST_ELEMENT"] ?? null) != "Raiton")) {
                    echo "<option value=\"Raiton\">Raiton</option>";
                }
                // line 66
                echo "\t\t\t\t\t";
                if ((($context["FIRST_ELEMENT"] ?? null) != "Doton")) {
                    echo "<option value=\"Doton\">Doton</option>";
                }
                // line 67
                echo "\t\t\t\t\t";
                if ((($context["FIRST_ELEMENT"] ?? null) != "Suiton")) {
                    echo "<option value=\"Suiton\">Suiton</option>";
                }
                // line 68
                echo "\t\t\t\t\t<input name=\"my_second_element_button\" type=\"submit\" value=\"Valider\">
\t\t\t\t</select>
\t\t\t</form>
\t\t\t";
            } elseif (            // line 71
($context["SECOND_ELEMENT"] ?? null)) {
                // line 72
                echo "\t\t\t<div class=\"my_elements\">Deuxième affinité : ";
                echo ($context["SECOND_ELEMENT"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 74
            echo "
\t\t\t";
            // line 75
            if (( !($context["THIRD_ELEMENT"] ?? null) && ($context["IS_THIRD_ELEMENT"] ?? null))) {
                // line 76
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"third_element_callback\" data-refresh=\"true\">
\t\t\t\t<div>Sélectionnez une affinité élémentaire :</div>
\t\t\t\t<select id=\"third_element_select\" name=\"telement\">
\t\t\t\t\t";
                // line 79
                if (((($context["FIRST_ELEMENT"] ?? null) != "Katon") && (($context["SECOND_ELEMENT"] ?? null) != "KATON"))) {
                    echo "<option value=\"Katon\">Katon</option>";
                }
                // line 80
                echo "\t\t\t\t\t";
                if (((($context["FIRST_ELEMENT"] ?? null) != "Fûton") && (($context["SECOND_ELEMENT"] ?? null) != "Fûton"))) {
                    echo "<option value=\"Fûton\">Fûton</option>";
                }
                // line 81
                echo "\t\t\t\t\t";
                if (((($context["FIRST_ELEMENT"] ?? null) != "Raiton") && (($context["SECOND_ELEMENT"] ?? null) != "Raiton"))) {
                    echo "<option value=\"Raiton\">Raiton</option>";
                }
                // line 82
                echo "\t\t\t\t\t";
                if (((($context["FIRST_ELEMENT"] ?? null) != "Doton") && (($context["SECOND_ELEMENT"] ?? null) != "Doton"))) {
                    echo "<option value=\"Doton\">Doton</option>";
                }
                // line 83
                echo "\t\t\t\t\t";
                if (((($context["FIRST_ELEMENT"] ?? null) != "Suiton") && (($context["SECOND_ELEMENT"] ?? null) != "Suiton"))) {
                    echo "<option value=\"Suiton\">Suiton</option>";
                }
                // line 84
                echo "\t\t\t\t\t<input name=\"my_third_element_button\" type=\"submit\" value=\"Valider\">
\t\t\t\t</select>
\t\t\t</form>
\t\t\t";
            } elseif (            // line 87
($context["THIRD_ELEMENT"] ?? null)) {
                // line 88
                echo "\t\t\t<div class=\"my_elements\">Troisième affinité : ";
                echo ($context["THIRD_ELEMENT"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 90
            echo "
\t\t\t";
            // line 91
            if (($context["FIRST_GENJUTSU"] ?? null)) {
                // line 92
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"first_genjutsu_callback\" data-refresh=\"true\">
\t\t\t\t<div>Sélectionnez une spécialisation Genjutsu :</div>
\t\t\t\t<select id=\"first_genjutsu_select\" name=\"fgenjutsu\">
\t\t\t\t\t<option value=\"Vue\">Vue</option>
\t\t\t\t\t<option value=\"Son\">Son</option>
\t\t\t\t\t<input name=\"first_genjutsu_button\" type=\"submit\" value=\"Valider\">
\t\t\t\t</select>
\t\t\t</form>
\t\t\t";
            }
            // line 101
            echo "\t\t\t";
            if (($context["IS_SOUND"] ?? null)) {
                // line 102
                echo "\t\t\t<div class=\"my_elements\">Spécialisation Son (Genjutsu)</div>
\t\t\t";
            }
            // line 104
            echo "\t\t\t";
            if (($context["IS_SIGHT"] ?? null)) {
                // line 105
                echo "\t\t\t<div class=\"my_elements\">Spécialisation Vue (Genjutsu)</div>
\t\t\t";
            }
            // line 107
            echo "\t\t</div>
\t</div>
\t<div id=\"info_attributes_use\">Points d'attributs à dépenser : <span id=\"my_attributes_to_use\">";
            // line 109
            echo ($context["ATTRIBUTES_TO_USE"] ?? null);
            echo "</span></div>
\t<form id=\"level_attributes\" method=\"post\" action=\"";
            // line 110
            echo ($context["U_ACTION"] ?? null);
            echo "\" data-ajax=\"attributes_callback\" data-refresh=\"true\">
\t\t<div id=\"my_attributes_interface\">
\t\t\t<div>
\t\t\t\t<div>Physique</div>
\t\t\t\t<div id=\"my_strength\">";
            // line 114
            echo ($context["MY_STRENGTH"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 115
            if (((($context["MY_STRENGTH"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_strength_button\" class=\"my_attributes\" id=\"my_strength_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 116
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Esprit</div>
\t\t\t\t<div id=\"my_sensoriality\">";
            // line 120
            echo ($context["MY_SENSORIALITY"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 121
            if (((($context["MY_SENSORIALITY"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_sensoriality_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 122
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Furtivité</div>
\t\t\t\t<div id =\"my_stealth\">";
            // line 126
            echo ($context["MY_STEALTH"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 127
            if (((($context["MY_STEALTH"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_stealth_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 128
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Vitesse</div>
\t\t\t\t<div id=\"my_swiftness\">";
            // line 132
            echo ($context["MY_SWIFTNESS"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 133
            if (((($context["MY_SWIFTNESS"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_swiftness_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 134
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Ninjutsu</div>
\t\t\t\t<div id=\"my_ninjutsu\">";
            // line 138
            echo ($context["MY_NINJUTSU"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 139
            if (((($context["MY_NINJUTSU"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_ninjutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 140
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Taijutsu</div>
\t\t\t\t<div id=\"my_taijutsu\">";
            // line 144
            echo ($context["MY_TAIJUTSU"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 145
            if (((($context["MY_TAIJUTSU"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_taijutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 146
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Genjutsu</div>
\t\t\t\t<div id=\"my_genjutsu\">";
            // line 150
            echo ($context["MY_GENJUTSU"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 151
            if (((($context["MY_GENJUTSU"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_genjutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 152
            echo "\t\t\t</div>
\t\t</div>
\t</form>
</div>
";
        }
        // line 157
        echo "
";
        // line 158
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 158)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 159
        echo "
";
        // line 160
        // line 161
        echo "
";
        // line 162
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 163
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" class=\"headerspace\">
\t<h3><a href=\"";
            // line 164
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
            // line 166
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 167
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t";
            // line 168
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                // line 169
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 171
            echo "\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 172
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 174
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 175
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t";
            // line 176
            echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>
";
        }
        // line 180
        echo "
";
        // line 181
        // line 182
        echo "
";
        // line 183
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 183)->display($context);
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
        return array (  548 => 183,  545 => 182,  544 => 181,  541 => 180,  534 => 176,  530 => 175,  525 => 174,  519 => 172,  516 => 171,  508 => 169,  506 => 168,  499 => 167,  492 => 166,  477 => 164,  472 => 163,  470 => 162,  467 => 161,  466 => 160,  463 => 159,  451 => 158,  448 => 157,  441 => 152,  437 => 151,  433 => 150,  427 => 146,  423 => 145,  419 => 144,  413 => 140,  409 => 139,  405 => 138,  399 => 134,  395 => 133,  391 => 132,  385 => 128,  381 => 127,  377 => 126,  371 => 122,  367 => 121,  363 => 120,  357 => 116,  353 => 115,  349 => 114,  342 => 110,  338 => 109,  334 => 107,  330 => 105,  327 => 104,  323 => 102,  320 => 101,  307 => 92,  305 => 91,  302 => 90,  296 => 88,  294 => 87,  289 => 84,  284 => 83,  279 => 82,  274 => 81,  269 => 80,  265 => 79,  258 => 76,  256 => 75,  253 => 74,  247 => 72,  245 => 71,  240 => 68,  235 => 67,  230 => 66,  225 => 65,  220 => 64,  216 => 63,  209 => 60,  207 => 59,  204 => 58,  198 => 56,  182 => 44,  180 => 43,  175 => 40,  169 => 38,  167 => 37,  163 => 36,  153 => 35,  148 => 33,  144 => 32,  140 => 30,  136 => 28,  130 => 26,  128 => 25,  121 => 21,  115 => 18,  112 => 17,  110 => 16,  107 => 15,  93 => 14,  90 => 13,  89 => 12,  81 => 9,  78 => 8,  76 => 7,  75 => 6,  72 => 5,  66 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
