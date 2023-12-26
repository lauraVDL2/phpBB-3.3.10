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

/* missions_board.html */
class __TwigTemplate_0d0dbcda55c8ef17b3088c5737449be3ecacb0cd4fe99af5f133ffd41889a6ce extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "missions_board.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        $asset_file = "missions_board.js";
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
        echo "<div id=\"missions_board_title\">Tableau des missions</div>
<div id=\"missions_board_content\">
    <h1>Missions en cours</h1>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "ongoing_missions", [], "any", false, false, false, 6));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ongoing_missions"]) {
            // line 7
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"ongoing_mission_callback\" data-refresh=\"true\">
            <h2>";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["ongoing_missions"], "OM_TITLE", [], "any", false, false, false, 8);
            echo "</h2>
            <input type=\"hidden\" value=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["ongoing_missions"], "OM_ID", [], "any", false, false, false, 9);
            echo "\" name=\"mission_id\">
            <input type=\"hidden\" name=\"mission_title\" value=\"";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["ongoing_missions"], "OM_TITLE", [], "any", false, false, false, 10);
            echo "\">
            <div class=\"mission_infos\">
                <strong>Rang de la mission :</strong> ";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["ongoing_missions"], "OM_RANK", [], "any", false, false, false, 12);
            echo "
            </div>
            <div class=\"mission_infos\">
                <strong>Description :</strong> ";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["ongoing_missions"], "OM_DESCRIPTION", [], "any", false, false, false, 15);
            echo "
            </div>
            <div class=\"mission_infos\">
                <strong>Conditions de réussite :</strong> ";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["ongoing_missions"], "OM_CONDITION", [], "any", false, false, false, 18);
            echo "
            </div>
            <div class=\"mission_infos\">
                <strong>Récompenses potentielles :</strong> ";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["ongoing_missions"], "OM_EARNING", [], "any", false, false, false, 21);
            echo "
            </div>
            <div class=\"mission_infos\">
                <strong>Informations complémentaires :</strong> ";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["ongoing_missions"], "OM_INFOS", [], "any", false, false, false, 24);
            echo "
            </div>
            <div class=\"mission_infos\">
                <strong>Nombre de participants maximum :</strong> ";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["ongoing_missions"], "OM_MAX_USERS", [], "any", false, false, false, 27);
            echo "
            </div>
            <div class=\"mission_infos\">
                <strong>Joueurs inscrits :</strong> ";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["ongoing_missions"], "OM_PLAYERS", [], "any", false, false, false, 30);
            echo "
            </div>
            <div class=\"mission_infos\">
                <strong>Groupes concernés :</strong> ";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["ongoing_missions"], "OM_GROUPS", [], "any", false, false, false, 33);
            echo "
            </div>
            <div class=\"align_buttons\">
                ";
            // line 36
            if (($context["MISSION_IS_ADMIN"] ?? null)) {
                // line 37
                echo "                    <input type=\"submit\" name=\"finish_mission_button\" class=\"button_validate\" value=\"Marquer comme terminée\">
                ";
            }
            // line 39
            echo "            </div>
        </form>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "    <div style=\"text-align: center;\">Aucune mission pour le moment !</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ongoing_missions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    <h1>Missions disponibles</h1>
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "missions_to_subscribe", [], "any", false, false, false, 45));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["missions_to_subscribe"]) {
            // line 46
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"subscribe_mission_callback\" data-refresh=\"true\">
        <h2>";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_TITLE", [], "any", false, false, false, 47);
            echo "</h2>
        <input type=\"hidden\" value=\"";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_ID", [], "any", false, false, false, 48);
            echo "\" name=\"mission_id\">
        <input type=\"hidden\" name=\"mission_title\" value=\"";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_TITLE", [], "any", false, false, false, 49);
            echo "\">
        <div class=\"mission_infos\">
            <strong>Rang de la mission :</strong> ";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_RANK", [], "any", false, false, false, 51);
            echo "
        </div>
        <div class=\"mission_infos\">
            <strong>Description :</strong> ";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_DESCRIPTION", [], "any", false, false, false, 54);
            echo "
        </div>
        <div class=\"mission_infos\">
            <strong>Conditions de réussite :</strong> ";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_CONDITION", [], "any", false, false, false, 57);
            echo "
        </div>
        <div class=\"mission_infos\">
            <strong>Récompenses potentielles :</strong> ";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_EARNING", [], "any", false, false, false, 60);
            echo "
        </div>
        <div class=\"mission_infos\">
            <strong>Informations complémentaires :</strong> ";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_INFOS", [], "any", false, false, false, 63);
            echo "
        </div>
        <div class=\"mission_infos\">
            <strong>Nombre de participants maximum :</strong> ";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_MAX_USERS", [], "any", false, false, false, 66);
            echo "
        </div>
        <div class=\"mission_infos\">
            <strong>Joueurs inscrits :</strong> ";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_PLAYERS", [], "any", false, false, false, 69);
            echo "
        </div>
        <div class=\"mission_infos\">
            <strong>Groupes concernés :</strong> ";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_GROUPS", [], "any", false, false, false, 72);
            echo "
        </div>
        <div class=\"align_buttons\">
            ";
            // line 75
            if (twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_CAN_SUBSCRIBE", [], "any", false, false, false, 75)) {
                // line 76
                echo "                <input type=\"submit\" name=\"subscribe_mission_button\" class=\"button_validate\" value=\"S'inscrire à la mission\">
            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 77
$context["missions_to_subscribe"], "MS_CAN_UNSUBSCRIBE", [], "any", false, false, false, 77)) {
                // line 78
                echo "                <input type=\"submit\" name=\"unsubscribe_mission_button\" class=\"button_delete\" value=\"Se désinscrire de la mission\">
            ";
            }
            // line 80
            echo "            ";
            if (($context["MISSION_IS_ADMIN"] ?? null)) {
                // line 81
                echo "                <input type=\"submit\" name=\"ongoing_mission_button\" class=\"button_validate\" value=\"Fermer le inscriptions (passer à En cours)\">
            ";
            }
            // line 83
            echo "        </div>
    </form>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 86
            echo "    <div style=\"text-align: center;\">Aucune mission pour le moment !</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['missions_to_subscribe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
    ";
        // line 89
        if (($context["MISSION_IS_ADMIN"] ?? null)) {
            // line 90
            echo "    <h1>Valider les missions (Administrateur)</h1>
    ";
        }
        // line 92
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "missions_to_validate", [], "any", false, false, false, 92));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["missions_to_validate"]) {
            // line 93
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"modify_mission_callback\" data-refresh=\"true\">
        <input type=\"hidden\" value=\"";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_ID", [], "any", false, false, false, 94);
            echo "\" name=\"mission_id\">
        <h2>Titre de la mission</h2>
        <input type=\"text\" name=\"mission_title\" value=\"";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_TITLE", [], "any", false, false, false, 96);
            echo "\" required>
        <h2>Description de la mission</h2>
        <textarea name=\"mission_description\" required>";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_DESCRIPTION", [], "any", false, false, false, 98);
            echo "</textarea>
        <h2>Conditions de réussite</h2>
        <textarea name=\"mission_conditions\" required>";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_CONDITION", [], "any", false, false, false, 100);
            echo "</textarea>
        <h2>Récompenses potentielles</h2>
        <textarea name=\"mission_earnings\" required>";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_EARNING", [], "any", false, false, false, 102);
            echo "</textarea>
        <h2>Informations complémentaires</h2>
        <textarea name=\"mission_infos\" required>";
            // line 104
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_INFOS", [], "any", false, false, false, 104);
            echo "</textarea>
        <h2>Rang de la mission</h2>
        <select name=\"mission_rank\">
            <option value=\"S\" ";
            // line 107
            if ((twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_RANK", [], "any", false, false, false, 107) == "S")) {
                echo "selected";
            }
            echo ">S</option>
            <option value=\"A\" ";
            // line 108
            if ((twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_RANK", [], "any", false, false, false, 108) == "A")) {
                echo "selected";
            }
            echo ">A</option>
            <option value=\"B\" ";
            // line 109
            if ((twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_RANK", [], "any", false, false, false, 109) == "B")) {
                echo "selected";
            }
            echo ">B</option>
            <option value=\"C\" ";
            // line 110
            if ((twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_RANK", [], "any", false, false, false, 110) == "C")) {
                echo "selected";
            }
            echo ">C</option>
            <option value=\"D\" ";
            // line 111
            if ((twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_RANK", [], "any", false, false, false, 111) == "D")) {
                echo "selected";
            }
            echo ">D</option>
        </select>
        <h2>Nombre de participants maximum</h2>
        <input type=\"number\" name=\"mission_max_users\" min=\"1\" value=\"";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_MAX_USERS", [], "any", false, false, false, 114);
            echo "\" required>
        <h2>Groupes concernés</h2>
        <div style=\"text-align: center;\">";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_GROUPS", [], "any", false, false, false, 116);
            echo "</div>
        <div class=\"align_buttons\">
            <input type=\"submit\" name=\"validate_mission_button\" class=\"button_validate\" value=\"Valider la mission\">
            <input type=\"submit\" name=\"modify_mission_button\" class=\"button_modify\" value=\"Enregistrer les modifications\">
            <input type=\"submit\" name=\"delete_mission_button\" class=\"button_delete\" value=\"Supprimer la mission\">
        </div>
    </form>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 124
            echo "    <div style=\"text-align: center;\">Aucune mission pour le moment !</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['missions_to_validate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
    <form method=\"post\" action=\"";
        // line 127
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"create_mission_callback\" data-refresh=\"true\">
        <h1>Créer une mission</h1>
        <h2>Titre de la mission</h2>
        <input type=\"text\" name=\"mission_title\" maxlength=\"255\" minlength=\"5\" required>
        <h2>Description de la mission</h2>
        <textarea name=\"mission_description\" required></textarea>
        <h2>Conditions de réussite</h2>
        <textarea name=\"mission_conditions\" required></textarea>
        <h2>Récompenses potentielles</h2>
        <textarea name=\"mission_earnings\" required></textarea>
        <h2>Informations complémentaires</h2>
        <div style=\"text-align: center;\">Mettez ici des informations comme le lieu de la mission.</div>
        <textarea name=\"mission_infos\" required></textarea>
        <h2>Rang de la mission</h2>
        <select name=\"mission_rank\">
            <option value=\"S\">S</option>
            <option value=\"A\">A</option>
            <option value=\"B\">B</option>
            <option value=\"C\">C</option>
            <option value=\"D\">D</option>
            ";
        // line 147
        if (($context["MISSION_IS_ADMIN"] ?? null)) {
            echo "<option value=\"-\">-</option>";
        }
        // line 148
        echo "        </select>
        <h2>Nombre de participants maximum</h2>
        <input type=\"number\" name=\"mission_max_users\" min=\"1\" required>
        <h2>Groupes concernés</h2>
        <div id=\"disp\">
            <div>
                <input type=\"checkbox\" name=\"mission_iwa\"> <label>Iwagakure</label>
            </div>
            <div>
                <input type=\"checkbox\" name=\"mission_suna\"> <label>Sunagakure</label>
            </div>
            <div>
                <input type=\"checkbox\" name=\"mission_kiri\"> <label>Kirigakure</label>
            </div>
            <div>
                <input type=\"checkbox\" name=\"mission_kumo\"> <label>Kumogakure</label>
            </div>
            <div>
                <input type=\"checkbox\" name=\"mission_konoha\"> <label>Konohagakure</label>
            </div>
            <div>
                <input type=\"checkbox\" name=\"mission_nuke\"> <label>Nukenin</label>
            </div>
        </div>
        <input type=\"submit\" name=\"create_mission_button\" class=\"button_validate button_align\" value=\"Créer la mission\">
    </form>
</div>
";
        // line 175
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "missions_board.html", 175)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "missions_board.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 175,  403 => 148,  399 => 147,  376 => 127,  373 => 126,  366 => 124,  353 => 116,  348 => 114,  340 => 111,  334 => 110,  328 => 109,  322 => 108,  316 => 107,  310 => 104,  305 => 102,  300 => 100,  295 => 98,  290 => 96,  285 => 94,  280 => 93,  274 => 92,  270 => 90,  268 => 89,  265 => 88,  258 => 86,  251 => 83,  247 => 81,  244 => 80,  240 => 78,  238 => 77,  235 => 76,  233 => 75,  227 => 72,  221 => 69,  215 => 66,  209 => 63,  203 => 60,  197 => 57,  191 => 54,  185 => 51,  180 => 49,  176 => 48,  172 => 47,  167 => 46,  162 => 45,  159 => 44,  152 => 42,  145 => 39,  141 => 37,  139 => 36,  133 => 33,  127 => 30,  121 => 27,  115 => 24,  109 => 21,  103 => 18,  97 => 15,  91 => 12,  86 => 10,  82 => 9,  78 => 8,  73 => 7,  68 => 6,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "missions_board.html", "");
    }
}
