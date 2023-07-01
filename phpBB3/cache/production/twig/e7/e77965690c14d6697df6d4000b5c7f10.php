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
            echo "<div id=\"um_links\">
\t<a href=\"./fiche_technique.php?uid=";
            // line 18
            echo ($context["USER_ID"] ?? null);
            echo "\">Fiche Technique</a>
\t<a href=\"./shop.php\">Arbre de compétences</a>
</div>
<div id=\"user_menu\">
\t<div id=\"firstCUser\">
\t\t";
            // line 23
            if (($context["MY_AVATAR"] ?? null)) {
                // line 24
                echo "\t\t\t<img src=\"./download/file.php?avatar=";
                echo ($context["MY_AVATAR"] ?? null);
                echo "\" id=\"my_avatar\">
\t\t";
            } else {
                // line 26
                echo "\t\t\t<img src=\"https://i.servimg.com/u/f33/16/35/67/99/defaul10.png\" id=\"my_avatar\">
\t\t";
            }
            // line 28
            echo "\t\t<div id=\"first_infos_col\">
\t\t\t<div>
\t\t\t\t<div id=\"my_username\">";
            // line 30
            echo ($context["USERNAME"] ?? null);
            echo "</div>
\t\t\t\t<div id=\"my_level\">Niveau ";
            // line 31
            echo ($context["MY_LEVEL"] ?? null);
            echo "</div>
\t\t\t\t<div id=\"my_experience\">Expérience</div>
\t\t\t\t<progress id=\"my_progress\" value=\"";
            // line 33
            echo ($context["MY_EXPERIENCE"] ?? null);
            echo "\" max=\"";
            echo ($context["EXP_BAR"] ?? null);
            echo "\" title=\"";
            echo ($context["MY_EXPERIENCE"] ?? null);
            echo "/";
            echo ($context["EXP_BAR"] ?? null);
            echo "\"></progress>
\t\t\t\t<div id=\"my_talent\">";
            // line 34
            echo ($context["TALENT_POINTS"] ?? null);
            echo " points de compétence</div>
\t\t\t\t";
            // line 35
            if (((((($context["IS_IWA"] ?? null) || ($context["IS_KIRI"] ?? null)) || ($context["IS_SUNA"] ?? null)) || ($context["IS_KONOHA"] ?? null)) || ($context["IS_KUMO"] ?? null))) {
                // line 36
                echo "\t\t\t\t\t<div id=\"my_influence\">";
                echo ($context["INFLUENCE_POINTS"] ?? null);
                echo " points d'influence</div>
\t\t\t\t";
            }
            // line 38
            echo "\t\t\t</div>
\t\t</div>
\t\t<div id=\"second_infos_col\">
\t\t\t";
            // line 41
            if ( !($context["FIRST_ELEMENT"] ?? null)) {
                // line 42
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
                // line 54
                echo "\t\t\t<div class=\"my_elements\">Première affinité : ";
                echo ($context["FIRST_ELEMENT"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 56
            echo "
\t\t\t";
            // line 57
            if (( !($context["SECOND_ELEMENT"] ?? null) && ($context["IS_SECOND_ELEMENT"] ?? null))) {
                // line 58
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"second_element_callback\" data-refresh=\"true\">
\t\t\t\t<div>Sélectionnez une affinité élémentaire :</div>
\t\t\t\t<select id=\"second_element_select\" name=\"selement\">
\t\t\t\t\t";
                // line 61
                if ((($context["FIRST_ELEMENT"] ?? null) != "Katon")) {
                    echo "<option value=\"Katon\">Katon</option>";
                }
                // line 62
                echo "\t\t\t\t\t";
                if ((($context["FIRST_ELEMENT"] ?? null) != "Fûton")) {
                    echo "<option value=\"Fûton\">Fûton</option>";
                }
                // line 63
                echo "\t\t\t\t\t";
                if ((($context["FIRST_ELEMENT"] ?? null) != "Raiton")) {
                    echo "<option value=\"Raiton\">Raiton</option>";
                }
                // line 64
                echo "\t\t\t\t\t";
                if ((($context["FIRST_ELEMENT"] ?? null) != "Doton")) {
                    echo "<option value=\"Doton\">Doton</option>";
                }
                // line 65
                echo "\t\t\t\t\t";
                if ((($context["FIRST_ELEMENT"] ?? null) != "Suiton")) {
                    echo "<option value=\"Suiton\">Suiton</option>";
                }
                // line 66
                echo "\t\t\t\t\t<input name=\"my_second_element_button\" type=\"submit\" value=\"Valider\">
\t\t\t\t</select>
\t\t\t</form>
\t\t\t";
            } elseif (            // line 69
($context["SECOND_ELEMENT"] ?? null)) {
                // line 70
                echo "\t\t\t<div class=\"my_elements\">Deuxième affinité : ";
                echo ($context["SECOND_ELEMENT"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 72
            echo "
\t\t\t";
            // line 73
            if (( !($context["THIRD_ELEMENT"] ?? null) && ($context["IS_THIRD_ELEMENT"] ?? null))) {
                // line 74
                echo "\t\t\t<form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"third_element_callback\" data-refresh=\"true\">
\t\t\t\t<div>Sélectionnez une affinité élémentaire :</div>
\t\t\t\t<select id=\"third_element_select\" name=\"telement\">
\t\t\t\t\t";
                // line 77
                if (((($context["FIRST_ELEMENT"] ?? null) != "Katon") && (($context["SECOND_ELEMENT"] ?? null) != "KATON"))) {
                    echo "<option value=\"Katon\">Katon</option>";
                }
                // line 78
                echo "\t\t\t\t\t";
                if (((($context["FIRST_ELEMENT"] ?? null) != "Fûton") && (($context["SECOND_ELEMENT"] ?? null) != "Fûton"))) {
                    echo "<option value=\"Fûton\">Fûton</option>";
                }
                // line 79
                echo "\t\t\t\t\t";
                if (((($context["FIRST_ELEMENT"] ?? null) != "Raiton") && (($context["SECOND_ELEMENT"] ?? null) != "Raiton"))) {
                    echo "<option value=\"Raiton\">Raiton</option>";
                }
                // line 80
                echo "\t\t\t\t\t";
                if (((($context["FIRST_ELEMENT"] ?? null) != "Doton") && (($context["SECOND_ELEMENT"] ?? null) != "Doton"))) {
                    echo "<option value=\"Doton\">Doton</option>";
                }
                // line 81
                echo "\t\t\t\t\t";
                if (((($context["FIRST_ELEMENT"] ?? null) != "Suiton") && (($context["SECOND_ELEMENT"] ?? null) != "Suiton"))) {
                    echo "<option value=\"Suiton\">Suiton</option>";
                }
                // line 82
                echo "\t\t\t\t\t<input name=\"my_third_element_button\" type=\"submit\" value=\"Valider\">
\t\t\t\t</select>
\t\t\t</form>
\t\t\t";
            } elseif (            // line 85
($context["THIRD_ELEMENT"] ?? null)) {
                // line 86
                echo "\t\t\t<div class=\"my_elements\">Troisième affinité : ";
                echo ($context["THIRD_ELEMENT"] ?? null);
                echo "</div>
\t\t\t";
            }
            // line 88
            echo "\t\t</div>
\t</div>
\t<div id=\"info_attributes_use\">Points d'attributs à dépenser : <span id=\"my_attributes_to_use\">";
            // line 90
            echo ($context["ATTRIBUTES_TO_USE"] ?? null);
            echo "</span></div>
\t<form id=\"level_attributes\" method=\"post\" action=\"";
            // line 91
            echo ($context["U_ACTION"] ?? null);
            echo "\" data-ajax=\"attributes_callback\" data-refresh=\"true\">
\t\t<div id=\"my_attributes_interface\">
\t\t\t<div>
\t\t\t\t<div>Physique</div>
\t\t\t\t<div id=\"my_strength\">";
            // line 95
            echo ($context["MY_STRENGTH"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 96
            if (((($context["MY_STRENGTH"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_strength_button\" class=\"my_attributes\" id=\"my_strength_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 97
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Esprit</div>
\t\t\t\t<div id=\"my_sensoriality\">";
            // line 101
            echo ($context["MY_SENSORIALITY"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 102
            if (((($context["MY_SENSORIALITY"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_sensoriality_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 103
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Furtivité</div>
\t\t\t\t<div id =\"my_stealth\">";
            // line 107
            echo ($context["MY_STEALTH"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 108
            if (((($context["MY_STEALTH"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_stealth_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 109
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Vitesse</div>
\t\t\t\t<div id=\"my_swiftness\">";
            // line 113
            echo ($context["MY_SWIFTNESS"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 114
            if (((($context["MY_SWIFTNESS"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_swiftness_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 115
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Ninjutsu</div>
\t\t\t\t<div id=\"my_ninjutsu\">";
            // line 119
            echo ($context["MY_NINJUTSU"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 120
            if (((($context["MY_NINJUTSU"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_ninjutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 121
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Taijutsu</div>
\t\t\t\t<div id=\"my_taijutsu\">";
            // line 125
            echo ($context["MY_TAIJUTSU"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 126
            if (((($context["MY_TAIJUTSU"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_taijutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 127
            echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<div>Genjutsu</div>
\t\t\t\t<div id=\"my_genjutsu\">";
            // line 131
            echo ($context["MY_GENJUTSU"] ?? null);
            echo "</div>
\t\t\t\t";
            // line 132
            if (((($context["MY_GENJUTSU"] ?? null) < 8) && (($context["ATTRIBUTES_TO_USE"] ?? null) > 0))) {
                echo "<input name=\"my_genjutsu_button\" class=\"my_attributes_button\" type=\"submit\" value=\"Dépenser\">";
            }
            // line 133
            echo "\t\t\t</div>
\t\t</div>
\t</form>
</div>
";
        }
        // line 138
        echo "
";
        // line 139
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 139)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 140
        echo "
";
        // line 141
        // line 142
        echo "
";
        // line 143
        if (( !($context["S_USER_LOGGED_IN"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 144
            echo "\t<form method=\"post\" action=\"";
            echo ($context["S_LOGIN_ACTION"] ?? null);
            echo "\" class=\"headerspace\">
\t<h3><a href=\"";
            // line 145
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
            // line 147
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 148
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t";
            // line 149
            if (($context["U_SEND_PASSWORD"] ?? null)) {
                // line 150
                echo "\t\t\t\t<a href=\"";
                echo ($context["U_SEND_PASSWORD"] ?? null);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 152
            echo "\t\t\t";
            if (($context["S_AUTOLOGIN_ENABLED"] ?? null)) {
                // line 153
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 155
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 156
            echo ($context["S_LOGIN_REDIRECT"] ?? null);
            echo "
\t\t\t";
            // line 157
            echo ($context["S_FORM_TOKEN_LOGIN"] ?? null);
            echo "
\t\t</fieldset>
\t</form>
";
        }
        // line 161
        echo "
";
        // line 162
        // line 163
        echo "
";
        // line 164
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 164)->display($context);
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
        return array (  511 => 164,  508 => 163,  507 => 162,  504 => 161,  497 => 157,  493 => 156,  488 => 155,  482 => 153,  479 => 152,  471 => 150,  469 => 149,  462 => 148,  455 => 147,  440 => 145,  435 => 144,  433 => 143,  430 => 142,  429 => 141,  426 => 140,  414 => 139,  411 => 138,  404 => 133,  400 => 132,  396 => 131,  390 => 127,  386 => 126,  382 => 125,  376 => 121,  372 => 120,  368 => 119,  362 => 115,  358 => 114,  354 => 113,  348 => 109,  344 => 108,  340 => 107,  334 => 103,  330 => 102,  326 => 101,  320 => 97,  316 => 96,  312 => 95,  305 => 91,  301 => 90,  297 => 88,  291 => 86,  289 => 85,  284 => 82,  279 => 81,  274 => 80,  269 => 79,  264 => 78,  260 => 77,  253 => 74,  251 => 73,  248 => 72,  242 => 70,  240 => 69,  235 => 66,  230 => 65,  225 => 64,  220 => 63,  215 => 62,  211 => 61,  204 => 58,  202 => 57,  199 => 56,  193 => 54,  177 => 42,  175 => 41,  170 => 38,  164 => 36,  162 => 35,  158 => 34,  148 => 33,  143 => 31,  139 => 30,  135 => 28,  131 => 26,  125 => 24,  123 => 23,  115 => 18,  112 => 17,  110 => 16,  107 => 15,  93 => 14,  90 => 13,  89 => 12,  81 => 9,  78 => 8,  76 => 7,  75 => 6,  72 => 5,  66 => 4,  52 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index_body.html", "");
    }
}
