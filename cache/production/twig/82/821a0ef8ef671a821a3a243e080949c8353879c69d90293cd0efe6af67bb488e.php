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
class __TwigTemplate_135747030e75ae16a4ded94efff92da7035afb0bef890471d7a9ca1c469f1e64 extends \Twig\Template
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
            echo "
\t\t\t";
            // line 108
            if ( !($context["FIRST_WEAPON"] ?? null)) {
                // line 109
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"first_bukijutsu_callback\" data-refresh=\"true\">
\t\t\t\t<div>Sélectionnez une spécialisation d'arme :</div>
\t\t\t\t<select id=\"first_bukijutsu_select\" name=\"fbukijutsu\">
\t\t\t\t\t<option value=\"Kenjutsu\">Kenjutsu</option>
\t\t\t\t\t<option value=\"Bôjutsu\">Bôjutsu</option>
\t\t\t\t\t<option value=\"Shurikenjutsu\">Shurikenjutsu</option>
\t\t\t\t\t<option value=\"Kyûjutsu\">Kyûjutsu</option>
\t\t\t\t\t<input name=\"first_bukijutsu_button\" type=\"submit\" value=\"Valider\">
\t\t\t\t</select>
\t\t\t</form>
\t\t\t";
            } else {
                // line 120
                echo "\t\t\t<div class=\"my_elements\">Première spécialisation d'arme : ";
                echo ($context["FIRST_WEAPON"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 122
            echo "
\t\t\t";
            // line 123
            if (( !($context["SECOND_WEAPON"] ?? null) && ($context["IS_SECOND_WEAPON"] ?? null))) {
                // line 124
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"second_bukijutsu_callback\" data-refresh=\"true\">
\t\t\t\t<div>Sélectionnez une spécialisation d'arme :</div>
\t\t\t\t<select id=\"second_bukijutsu_select\" name=\"sbukijutsu\">
\t\t\t\t\t";
                // line 127
                if ((($context["FIRST_WEAPON"] ?? null) != "Kenjutsu")) {
                    echo "<option value=\"Kenjutsu\">Kenjutsu</option>";
                }
                // line 128
                echo "\t\t\t\t\t";
                if ((($context["FIRST_WEAPON"] ?? null) != "Bôjutsu")) {
                    echo "<option value=\"Bôjutsu\">Bôjutsu</option>";
                }
                // line 129
                echo "\t\t\t\t\t";
                if ((($context["FIRST_WEAPON"] ?? null) != "Shurikenjutsu")) {
                    echo "<option value=\"Shurikenjutsu\">Shurikenjutsu</option>";
                }
                // line 130
                echo "\t\t\t\t\t";
                if ((($context["FIRST_WEAPON"] ?? null) != "Kyûjutsu")) {
                    echo "<option value=\"Kyûjutsu\">Kyûjutsu</option>";
                }
                // line 131
                echo "\t\t\t\t\t<input name=\"second_bukijutsu_button\" type=\"submit\" value=\"Valider\">
\t\t\t\t</select>
\t\t\t</form>
\t\t\t";
            } elseif (            // line 134
($context["SECOND_WEAPON"] ?? null)) {
                // line 135
                echo "\t\t\t<div class=\"my_elements\">Deuxième spécialisation d'arme : ";
                echo ($context["SECOND_WEAPON"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 137
            echo "
\t\t\t";
            // line 138
            if (( !($context["THIRD_WEAPON"] ?? null) && ($context["IS_THIRD_WEAPON"] ?? null))) {
                // line 139
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"third_bukijutsu_callback\" data-refresh=\"true\">
\t\t\t\t<div>Sélectionnez une spécialisation d'arme :</div>
\t\t\t\t<select id=\"third_element_select\" name=\"tbukijutsu\">
\t\t\t\t\t";
                // line 142
                if (((($context["FIRST_WEAPON"] ?? null) != "Kenjutsu") && (($context["SECOND_WEAPON"] ?? null) != "Kenjutsu"))) {
                    echo "<option value=\"Kenjutsu\">Kenjutsu</option>";
                }
                // line 143
                echo "\t\t\t\t\t";
                if (((($context["FIRST_WEAPON"] ?? null) != "Bôjutsu") && (($context["SECOND_WEAPON"] ?? null) != "Bôjutsu"))) {
                    echo "<option value=\"Bôjutsu\">Bôjutsu</option>";
                }
                // line 144
                echo "\t\t\t\t\t";
                if (((($context["FIRST_WEAPON"] ?? null) != "Shurikenjutsu") && (($context["SECOND_WEAPON"] ?? null) != "Shurikenjutsu"))) {
                    echo "<option value=\"Shurikenjutsu\">Shurikenjutsu</option>";
                }
                // line 145
                echo "\t\t\t\t\t";
                if (((($context["FIRST_WEAPON"] ?? null) != "Kyûjutsu") && (($context["SECOND_WEAPON"] ?? null) != "Kyûjutsu"))) {
                    echo "<option value=\"Kyûjutsu\">Kyûjutsu</option>";
                }
                // line 146
                echo "\t\t\t\t\t<input name=\"third_bukijutsu_button\" type=\"submit\" value=\"Valider\">
\t\t\t\t</select>
\t\t\t</form>
\t\t\t";
            } elseif (            // line 149
($context["THIRD_WEAPON"] ?? null)) {
                // line 150
                echo "\t\t\t<div class=\"my_elements\">Troisième spécialisation d'arme : ";
                echo ($context["THIRD_WEAPON"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 152
            echo "\t\t</div>
\t</div>
\t<div id=\"info_attributes_use\">Points d'attributs à dépenser : <span id=\"my_attributes_to_use\">";
            // line 154
            echo ($context["ATTRIBUTES_TO_USE"] ?? null);
            echo "</span></div>
\t<form id=\"level_attributes\" method=\"post\" action=\"";
            // line 155
            echo ($context["U_ACTION"] ?? null);
            echo "\" data-ajax=\"attributes_callback\" data-refresh=\"true\">
\t\t<div id=\"my_attributes_interface\">
\t\t\t<div>
\t\t\t\t<div>Physique</div>
\t\t\t\t<div id=\"my_strength\">";
            // line 159
            echo ($context["MY_STRENGTH"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 160
            if (((($context["MY_STRENGTH"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_strength_button\" class=\"my_attributes\" id=\"my_strength_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 161
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Esprit</div>
\t\t\t\t<div id=\"my_sensoriality\">";
            // line 165
            echo ($context["MY_SENSORIALITY"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 166
            if (((($context["MY_SENSORIALITY"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_sensoriality_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 167
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Furtivité</div>
\t\t\t\t<div id =\"my_stealth\">";
            // line 171
            echo ($context["MY_STEALTH"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 172
            if (((($context["MY_STEALTH"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_stealth_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 173
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Vitesse</div>
\t\t\t\t<div id=\"my_swiftness\">";
            // line 177
            echo ($context["MY_SWIFTNESS"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 178
            if (((($context["MY_SWIFTNESS"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_swiftness_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 179
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Ninjutsu</div>
\t\t\t\t<div id=\"my_ninjutsu\">";
            // line 183
            echo ($context["MY_NINJUTSU"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 184
            if (((($context["MY_NINJUTSU"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_ninjutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 185
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Taijutsu</div>
\t\t\t\t<div id=\"my_taijutsu\">";
            // line 189
            echo ($context["MY_TAIJUTSU"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 190
            if (((($context["MY_TAIJUTSU"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_taijutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 191
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Genjutsu</div>
\t\t\t\t<div id=\"my_genjutsu\">";
            // line 195
            echo ($context["MY_GENJUTSU"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 196
            if (((($context["MY_GENJUTSU"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_genjutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 197
            echo "\t\t\t</div>
\t\t</div>
\t</form>
</div>
";
        }
        // line 202
        echo "
";
        // line 203
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 203)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 204
        echo "
";
        // line 205
        // line 206
        echo "
";
        // line 207
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 208
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" class=\"headerspace\">
\t<h3><a href=\"";
            // line 209
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
            // line 211
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 212
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t";
            // line 213
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                // line 214
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 216
            echo "\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 217
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 219
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 220
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t";
            // line 221
            echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>
";
        }
        // line 225
        echo "
";
        // line 226
        // line 227
        echo "
";
        // line 228
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 228)->display($context);
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
        return array (  662 => 228,  659 => 227,  658 => 226,  655 => 225,  648 => 221,  644 => 220,  639 => 219,  633 => 217,  630 => 216,  622 => 214,  620 => 213,  613 => 212,  606 => 211,  591 => 209,  586 => 208,  584 => 207,  581 => 206,  580 => 205,  577 => 204,  565 => 203,  562 => 202,  555 => 197,  551 => 196,  547 => 195,  541 => 191,  537 => 190,  533 => 189,  527 => 185,  523 => 184,  519 => 183,  513 => 179,  509 => 178,  505 => 177,  499 => 173,  495 => 172,  491 => 171,  485 => 167,  481 => 166,  477 => 165,  471 => 161,  467 => 160,  463 => 159,  456 => 155,  452 => 154,  448 => 152,  442 => 150,  440 => 149,  435 => 146,  430 => 145,  425 => 144,  420 => 143,  416 => 142,  409 => 139,  407 => 138,  404 => 137,  398 => 135,  396 => 134,  391 => 131,  386 => 130,  381 => 129,  376 => 128,  372 => 127,  365 => 124,  363 => 123,  360 => 122,  354 => 120,  339 => 109,  337 => 108,  334 => 107,  330 => 105,  327 => 104,  323 => 102,  320 => 101,  307 => 92,  305 => 91,  302 => 90,  296 => 88,  294 => 87,  289 => 84,  284 => 83,  279 => 82,  274 => 81,  269 => 80,  265 => 79,  258 => 76,  256 => 75,  253 => 74,  247 => 72,  245 => 71,  240 => 68,  235 => 67,  230 => 66,  225 => 65,  220 => 64,  216 => 63,  209 => 60,  207 => 59,  204 => 58,  198 => 56,  182 => 44,  180 => 43,  175 => 40,  169 => 38,  167 => 37,  163 => 36,  153 => 35,  148 => 33,  144 => 32,  140 => 30,  136 => 28,  130 => 26,  128 => 25,  121 => 21,  115 => 18,  112 => 17,  110 => 16,  107 => 15,  93 => 14,  90 => 13,  89 => 12,  81 => 9,  78 => 8,  76 => 7,  75 => 6,  72 => 5,  66 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
