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

/* villages.html */
class __TwigTemplate_bb7b5161d2d9ee1ca518b29abe14046c91e6ccd163fe783c3ecdbd022ec79b55 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "villages.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        $asset_file = "villages.js";
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
        $this->env->get_assets_bag()->add_script($asset);        // line 3
        echo "<div id=\"vg_title\">Gestion du village</div>
<div id=\"vg_content\">
    ";
        // line 5
        if ((($context["VG_IS_KIRI"] ?? null) || ($context["VG_IS_ADMIN"] ?? null))) {
            // line 6
            echo "    <h1 class=\"vg_kiri\">Kirigakure</h1>
    <div class=\"village_container\">
        <strong>Points d'influence :</strong> ";
            // line 8
            echo ($context["VG_KIRI_POINTS"] ?? null);
            echo "
        ";
            // line 9
            if (($context["VG_IS_ADMIN"] ?? null)) {
                // line 10
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"substract_influence_callback\" data-refresh=\"true\">
            <input type=\"hidden\" value=\"";
                // line 11
                echo ($context["VG_KIRI_ID"] ?? null);
                echo "\" name=\"group_id\">
            <input type=\"number\" max=\"";
                // line 12
                echo ($context["VG_KIRI_POINTS"] ?? null);
                echo "\" min=\"0\" name=\"group_points\">
            <input type=\"submit\" value=\"Retirer les points d'influence\" name=\"substract_influence_button\" class=\"button_validate\">
        </form>
        ";
            }
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "kiri_adv", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["kiri_adv"]) {
                // line 17
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"kiri_modify_influence_callback\" data-refresh=\"true\">
            <div class=\"influence_container\">
                <input type=\"hidden\" name=\"influence_id\" value=\"";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["kiri_adv"], "INFLUENCE_ID", [], "any", false, false, false, 19);
                echo "\">
                <strong class=\"kiri_advantage_title\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["kiri_adv"], "INFLUENCE_TITLE", [], "any", false, false, false, 20);
                echo "</strong> ; <span class=\"kiri_advantage_description\">";
                echo twig_get_attribute($this->env, $this->source, $context["kiri_adv"], "INFLUENCE_DESCRIPTION", [], "any", false, false, false, 20);
                echo "</span>
                ";
                // line 21
                if (($context["VG_IS_ADMIN"] ?? null)) {
                    // line 22
                    echo "                <div class=\"buttons_flex first_disp kiri_first_disp\">
                    <input type=\"button\" class=\"button_modify\" value=\"Modifier l'avantage\" onclick=\"modifyAdvantage(";
                    // line 23
                    echo twig_get_attribute($this->env, $this->source, $context["kiri_adv"], "S_ROW_COUNT", [], "any", false, false, false, 23);
                    echo ", 'kiri')\">
                    <input type=\"submit\" class=\"button_delete\" value=\"Supprimer l'avantage\" name=\"delete_advantage_button\">
                </div>
                <div class=\"buttons_flex second_disp kiri_second_disp\">
                    <input type=\"submit\" class=\"button_validate\" value=\"Valider la modification\" name=\"button_modify_advantage\">
                    <input type=\"submit\" class=\"button_delete\" value=\"Annuler la modification\" name=\"button_unmodify_advantage\">
                </div>
                ";
                }
                // line 31
                echo "            </div>
        </form>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kiri_adv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        ";
            if (($context["VG_IS_ADMIN"] ?? null)) {
                // line 35
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"kiri_influence_callback\" data-refresh=\"true\">
            <h2>Titre de l'avantage</h2>
            <input type=\"text\" name=\"influence_name\" required>
            <h2>Description de l'avantage</h2>
            <textarea name=\"influence_description\" required></textarea>
            <input type=\"submit\" class=\"button_validate vg_block\" value=\"Donner l'avantage\" name=\"kiri_avantage_button\">
        </form>
        ";
            }
            // line 43
            echo "    </div>
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if ((($context["VG_IS_IWA"] ?? null) || ($context["VG_IS_ADMIN"] ?? null))) {
            // line 47
            echo "    <h1 class=\"vg_iwa\">Iwagakure</h1>
    <div class=\"village_container\">
        <strong>Points d'influence :</strong> ";
            // line 49
            echo ($context["VG_IWA_POINTS"] ?? null);
            echo "
        ";
            // line 50
            if (($context["VG_IS_ADMIN"] ?? null)) {
                // line 51
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"substract_influence_callback\" data-refresh=\"true\">
            <input type=\"hidden\" value=\"";
                // line 52
                echo ($context["VG_IWA_ID"] ?? null);
                echo "\" name=\"group_id\">
            <input type=\"number\" max=\"";
                // line 53
                echo ($context["VG_IWA_POINTS"] ?? null);
                echo "\" min=\"0\" name=\"group_points\">
            <input type=\"submit\" value=\"Retirer les points d'influence\" name=\"substract_influence_button\" class=\"button_validate\">
        </form>
        ";
            }
            // line 57
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "iwa_adv", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["iwa_adv"]) {
                // line 58
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"iwa_modify_influence_callback\" data-refresh=\"true\">
            <div class=\"influence_container\">
                <input type=\"hidden\" name=\"influence_id\" value=\"";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["iwa_adv"], "INFLUENCE_ID", [], "any", false, false, false, 60);
                echo "\">
                <strong class=\"iwa_advantage_title\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["iwa_adv"], "INFLUENCE_TITLE", [], "any", false, false, false, 61);
                echo "</strong> ; <span class=\"iwa_advantage_description\">";
                echo twig_get_attribute($this->env, $this->source, $context["iwa_adv"], "INFLUENCE_DESCRIPTION", [], "any", false, false, false, 61);
                echo "</span>
                ";
                // line 62
                if (($context["VG_IS_ADMIN"] ?? null)) {
                    // line 63
                    echo "                <div class=\"buttons_flex first_disp iwa_first_disp\">
                    <input type=\"button\" class=\"button_modify\" value=\"Modifier l'avantage\" onclick=\"modifyAdvantage(";
                    // line 64
                    echo twig_get_attribute($this->env, $this->source, $context["iwa_adv"], "S_ROW_COUNT", [], "any", false, false, false, 64);
                    echo ", 'iwa')\">
                    <input type=\"submit\" class=\"button_delete\" value=\"Supprimer l'avantage\" name=\"delete_advantage_button\">
                </div>
                <div class=\"buttons_flex second_disp iwa_second_disp\">
                    <input type=\"submit\" class=\"button_validate\" value=\"Valider la modification\" name=\"button_modify_advantage\">
                    <input type=\"submit\" class=\"button_delete\" value=\"Annuler la modification\" name=\"button_unmodify_advantage\">
                </div>
                ";
                }
                // line 72
                echo "            </div>
        </form>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iwa_adv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        ";
            if (($context["VG_IS_ADMIN"] ?? null)) {
                // line 76
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"iwa_influence_callback\" data-refresh=\"true\">
            <h2>Titre de l'avantage</h2>
            <input type=\"text\" name=\"influence_name\" required>
            <h2>Description de l'avantage</h2>
            <textarea name=\"influence_description\" required></textarea>
            <input type=\"submit\" class=\"button_validate vg_block\" value=\"Donner l'avantage\" name=\"iwa_avantage_button\">
        </form>
        ";
            }
            // line 84
            echo "    </div>
    ";
        }
        // line 86
        echo "
    ";
        // line 87
        if ((($context["VG_IS_SUNA"] ?? null) || ($context["VG_IS_ADMIN"] ?? null))) {
            // line 88
            echo "    <h1 class=\"vg_suna\">Sunagakure</h1>
    <div class=\"village_container\">
        <strong>Points d'influence :</strong> ";
            // line 90
            echo ($context["VG_SUNA_POINTS"] ?? null);
            echo "
        ";
            // line 91
            if (($context["VG_IS_ADMIN"] ?? null)) {
                // line 92
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"substract_influence_callback\" data-refresh=\"true\">
            <input type=\"hidden\" value=\"";
                // line 93
                echo ($context["VG_SUNA_ID"] ?? null);
                echo "\" name=\"group_id\">
            <input type=\"number\" max=\"";
                // line 94
                echo ($context["VG_SUNA_POINTS"] ?? null);
                echo "\" min=\"0\" name=\"group_points\">
            <input type=\"submit\" value=\"Retirer les points d'influence\" name=\"substract_influence_button\" class=\"button_validate\">
        </form>
        ";
            }
            // line 98
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "suna_adv", [], "any", false, false, false, 98));
            foreach ($context['_seq'] as $context["_key"] => $context["suna_adv"]) {
                // line 99
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"suna_modify_influence_callback\" data-refresh=\"true\">
            <div class=\"influence_container\">
                <input type=\"hidden\" name=\"influence_id\" value=\"";
                // line 101
                echo twig_get_attribute($this->env, $this->source, $context["suna_adv"], "INFLUENCE_ID", [], "any", false, false, false, 101);
                echo "\">
                <strong class=\"suna_advantage_title\">";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["suna_adv"], "INFLUENCE_TITLE", [], "any", false, false, false, 102);
                echo "</strong> ; <span class=\"suna_advantage_description\">";
                echo twig_get_attribute($this->env, $this->source, $context["suna_adv"], "INFLUENCE_DESCRIPTION", [], "any", false, false, false, 102);
                echo "</span>
                ";
                // line 103
                if (($context["VG_IS_ADMIN"] ?? null)) {
                    // line 104
                    echo "                <div class=\"buttons_flex first_disp suna_first_disp\">
                    <input type=\"button\" class=\"button_modify\" value=\"Modifier l'avantage\" onclick=\"modifyAdvantage(";
                    // line 105
                    echo twig_get_attribute($this->env, $this->source, $context["suna_adv"], "S_ROW_COUNT", [], "any", false, false, false, 105);
                    echo ", 'suna')\">
                    <input type=\"submit\" class=\"button_delete\" value=\"Supprimer l'avantage\" name=\"delete_advantage_button\">
                </div>
                <div class=\"buttons_flex second_disp suna_second_disp\">
                    <input type=\"submit\" class=\"button_validate\" value=\"Valider la modification\" name=\"button_modify_advantage\">
                    <input type=\"submit\" class=\"button_delete\" value=\"Annuler la modification\" name=\"button_unmodify_advantage\">
                </div>
                ";
                }
                // line 113
                echo "            </div>
        </form>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suna_adv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "        ";
            if (($context["VG_IS_ADMIN"] ?? null)) {
                // line 117
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"suna_influence_callback\" data-refresh=\"true\">
            <h2>Titre de l'avantage</h2>
            <input type=\"text\" name=\"influence_name\" required>
            <h2>Description de l'avantage</h2>
            <textarea name=\"influence_description\" required></textarea>
            <input type=\"submit\" class=\"button_validate vg_block\" value=\"Donner l'avantage\" name=\"suna_avantage_button\">
        </form>
        ";
            }
            // line 125
            echo "    </div>
    ";
        }
        // line 127
        echo "
    ";
        // line 128
        if ((($context["VG_IS_KUMO"] ?? null) || ($context["VG_IS_ADMIN"] ?? null))) {
            // line 129
            echo "    <h1 class=\"vg_kumo\">Kumogakure</h1>
    <div class=\"village_container\">
        <strong>Points d'influence :</strong> ";
            // line 131
            echo ($context["VG_KUMO_POINTS"] ?? null);
            echo "
        ";
            // line 132
            if (($context["VG_IS_ADMIN"] ?? null)) {
                // line 133
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"substract_influence_callback\" data-refresh=\"true\">
            <input type=\"hidden\" value=\"";
                // line 134
                echo ($context["VG_KUMO_ID"] ?? null);
                echo "\" name=\"group_id\">
            <input type=\"number\" max=\"";
                // line 135
                echo ($context["VG_KUMO_POINTS"] ?? null);
                echo "\" min=\"0\" name=\"group_points\">
            <input type=\"submit\" value=\"Retirer les points d'influence\" name=\"substract_influence_button\" class=\"button_validate\">
        </form>
        ";
            }
            // line 139
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "kumo_adv", [], "any", false, false, false, 139));
            foreach ($context['_seq'] as $context["_key"] => $context["kumo_adv"]) {
                // line 140
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"kumo_modify_influence_callback\" data-refresh=\"true\">
            <div class=\"influence_container\">
                <input type=\"hidden\" name=\"influence_id\" value=\"";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["kumo_adv"], "INFLUENCE_ID", [], "any", false, false, false, 142);
                echo "\">
                <strong class=\"kumo_advantage_title\">";
                // line 143
                echo twig_get_attribute($this->env, $this->source, $context["kumo_adv"], "INFLUENCE_TITLE", [], "any", false, false, false, 143);
                echo "</strong> ; <span class=\"kumo_advantage_description\">";
                echo twig_get_attribute($this->env, $this->source, $context["kumo_adv"], "INFLUENCE_DESCRIPTION", [], "any", false, false, false, 143);
                echo "</span>
                ";
                // line 144
                if (($context["VG_IS_ADMIN"] ?? null)) {
                    // line 145
                    echo "                <div class=\"buttons_flex first_disp kumo_first_disp\">
                    <input type=\"button\" class=\"button_modify\" value=\"Modifier l'avantage\" onclick=\"modifyAdvantage(";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["kumo_adv"], "S_ROW_COUNT", [], "any", false, false, false, 146);
                    echo ", 'kumo')\">
                    <input type=\"submit\" class=\"button_delete\" value=\"Supprimer l'avantage\" name=\"delete_advantage_button\">
                </div>
                <div class=\"buttons_flex second_disp kumo_second_disp\">
                    <input type=\"submit\" class=\"button_validate\" value=\"Valider la modification\" name=\"button_modify_advantage\">
                    <input type=\"submit\" class=\"button_delete\" value=\"Annuler la modification\" name=\"button_unmodify_advantage\">
                </div>
                ";
                }
                // line 154
                echo "            </div>
        </form>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kumo_adv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "        ";
            if (($context["VG_IS_ADMIN"] ?? null)) {
                // line 158
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"kumo_influence_callback\" data-refresh=\"true\">
            <h2>Titre de l'avantage</h2>
            <input type=\"text\" name=\"influence_name\" required>
            <h2>Description de l'avantage</h2>
            <textarea name=\"influence_description\" required></textarea>
            <input type=\"submit\" class=\"button_validate vg_block\" value=\"Donner l'avantage\" name=\"kumo_avantage_button\">
        </form>
        ";
            }
            // line 166
            echo "    </div>
    ";
        }
        // line 168
        echo "
    ";
        // line 169
        if ((($context["VG_IS_KONOHA"] ?? null) || ($context["VG_IS_ADMIN"] ?? null))) {
            // line 170
            echo "    <h1 class=\"vg_konoha\">Konohagakure</h1>
    <div class=\"village_container\">
        <strong>Points d'influence :</strong> ";
            // line 172
            echo ($context["VG_KONOHA_POINTS"] ?? null);
            echo "
        ";
            // line 173
            if (($context["VG_IS_ADMIN"] ?? null)) {
                // line 174
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"substract_influence_callback\" data-refresh=\"true\">
            <input type=\"hidden\" value=\"";
                // line 175
                echo ($context["VG_KONOHA_ID"] ?? null);
                echo "\" name=\"group_id\">
            <input type=\"number\" max=\"";
                // line 176
                echo ($context["VG_KONOHA_POINTS"] ?? null);
                echo "\" min=\"0\" name=\"group_points\">
            <input type=\"submit\" value=\"Retirer les points d'influence\" name=\"substract_influence_button\" class=\"button_validate\">
        </form>
        ";
            }
            // line 180
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "konoha_adv", [], "any", false, false, false, 180));
            foreach ($context['_seq'] as $context["_key"] => $context["konoha_adv"]) {
                // line 181
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"konoha_modify_influence_callback\" data-refresh=\"true\">
            <div class=\"influence_container\">
                <input type=\"hidden\" name=\"influence_id\" value=\"";
                // line 183
                echo twig_get_attribute($this->env, $this->source, $context["konoha_adv"], "INFLUENCE_ID", [], "any", false, false, false, 183);
                echo "\">
                <strong class=\"konoha_advantage_title\">";
                // line 184
                echo twig_get_attribute($this->env, $this->source, $context["konoha_adv"], "INFLUENCE_TITLE", [], "any", false, false, false, 184);
                echo "</strong> ; <span class=\"konoha_advantage_description\">";
                echo twig_get_attribute($this->env, $this->source, $context["konoha_adv"], "INFLUENCE_DESCRIPTION", [], "any", false, false, false, 184);
                echo "</span>
                ";
                // line 185
                if (($context["VG_IS_ADMIN"] ?? null)) {
                    // line 186
                    echo "                <div class=\"buttons_flex first_disp konoha_first_disp\">
                    <input type=\"button\" class=\"button_modify\" value=\"Modifier l'avantage\" onclick=\"modifyAdvantage(";
                    // line 187
                    echo twig_get_attribute($this->env, $this->source, $context["konoha_adv"], "S_ROW_COUNT", [], "any", false, false, false, 187);
                    echo ", 'konoha')\">
                    <input type=\"submit\" class=\"button_delete\" value=\"Supprimer l'avantage\" name=\"delete_advantage_button\">
                </div>
                <div class=\"buttons_flex second_disp konoha_second_disp\">
                    <input type=\"submit\" class=\"button_validate\" value=\"Valider la modification\" name=\"button_modify_advantage\">
                    <input type=\"submit\" class=\"button_delete\" value=\"Annuler la modification\" name=\"button_unmodify_advantage\">
                </div>
                ";
                }
                // line 195
                echo "            </div>
        </form>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['konoha_adv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "        ";
            if (($context["VG_IS_ADMIN"] ?? null)) {
                // line 199
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"konoha_influence_callback\" data-refresh=\"true\">
            <h2>Titre de l'avantage</h2>
            <input type=\"text\" name=\"influence_name\" required>
            <h2>Description de l'avantage</h2>
            <textarea name=\"influence_description\" required></textarea>
            <input type=\"submit\" class=\"button_validate vg_block\" value=\"Donner l'avantage\" name=\"konoha_avantage_button\">
        </form>
        ";
            }
            // line 207
            echo "    </div>
    ";
        }
        // line 209
        echo "</div>
";
        // line 210
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "villages.html", 210)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "villages.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 210,  539 => 209,  535 => 207,  523 => 199,  520 => 198,  512 => 195,  501 => 187,  498 => 186,  496 => 185,  490 => 184,  486 => 183,  480 => 181,  475 => 180,  468 => 176,  464 => 175,  459 => 174,  457 => 173,  453 => 172,  449 => 170,  447 => 169,  444 => 168,  440 => 166,  428 => 158,  425 => 157,  417 => 154,  406 => 146,  403 => 145,  401 => 144,  395 => 143,  391 => 142,  385 => 140,  380 => 139,  373 => 135,  369 => 134,  364 => 133,  362 => 132,  358 => 131,  354 => 129,  352 => 128,  349 => 127,  345 => 125,  333 => 117,  330 => 116,  322 => 113,  311 => 105,  308 => 104,  306 => 103,  300 => 102,  296 => 101,  290 => 99,  285 => 98,  278 => 94,  274 => 93,  269 => 92,  267 => 91,  263 => 90,  259 => 88,  257 => 87,  254 => 86,  250 => 84,  238 => 76,  235 => 75,  227 => 72,  216 => 64,  213 => 63,  211 => 62,  205 => 61,  201 => 60,  195 => 58,  190 => 57,  183 => 53,  179 => 52,  174 => 51,  172 => 50,  168 => 49,  164 => 47,  162 => 46,  159 => 45,  155 => 43,  143 => 35,  140 => 34,  132 => 31,  121 => 23,  118 => 22,  116 => 21,  110 => 20,  106 => 19,  100 => 17,  95 => 16,  88 => 12,  84 => 11,  79 => 10,  77 => 9,  73 => 8,  69 => 6,  67 => 5,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "villages.html", "");
    }
}
