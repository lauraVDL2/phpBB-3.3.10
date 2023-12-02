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
    <h1>Missions disponibles</h1>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "missions_to_subscribe", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["missions_to_subscribe"]) {
            // line 7
            echo "    <h2>";
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_TITLE", [], "any", false, false, false, 7);
            echo "</h2>
    <div class=\"mission_infos\">
        <strong>Rang de la mission :</strong> ";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_RANK", [], "any", false, false, false, 9);
            echo "
    </div>
    <div class=\"mission_infos\">
        <strong>Description :</strong> ";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_DESCRIPTION", [], "any", false, false, false, 12);
            echo "
    </div>
    <div class=\"mission_infos\">
        <strong>Conditions de réussite :</strong> ";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_CONDITION", [], "any", false, false, false, 15);
            echo "
    </div>
    <div class=\"mission_infos\">
        <strong>Récompenses potentielles :</strong> ";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_EARNING", [], "any", false, false, false, 18);
            echo "
    </div>
    <div class=\"mission_infos\">
        <strong>Informations complémentaires :</strong> ";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_INFOS", [], "any", false, false, false, 21);
            echo "
    </div>
    <div class=\"mission_infos\">
        <strong>Nombre de participants maximum :</strong> ";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_MAX_USERS", [], "any", false, false, false, 24);
            echo "
    </div>
    <div class=\"mission_infos\">
        <strong>Groupes concernés :</strong> ";
            // line 27
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_subscribe"], "MS_GROUPS", [], "any", false, false, false, 27);
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['missions_to_subscribe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "missions_to_validate", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["missions_to_validate"]) {
            // line 32
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"modify_mission_callback\" data-refresh=\"true\">
        <input type=\"hidden\" value=\"";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_ID", [], "any", false, false, false, 33);
            echo "\" name=\"mission_id\">
        <h1>Valider les missions (Administrateur)</h1>
        <h2>Titre de la mission</h2>
        <input type=\"text\" name=\"mission_title\" value=\"";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_TITLE", [], "any", false, false, false, 36);
            echo "\" required>
        <h2>Description de la mission</h2>
        <textarea name=\"mission_description\" required>";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_DESCRIPTION", [], "any", false, false, false, 38);
            echo "</textarea>
        <h2>Conditions de réussite</h2>
        <textarea name=\"mission_conditions\" required>";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_CONDITION", [], "any", false, false, false, 40);
            echo "</textarea>
        <h2>Récompenses potentielles</h2>
        <textarea name=\"mission_earnings\" required>";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_EARNING", [], "any", false, false, false, 42);
            echo "</textarea>
        <h2>Informations complémentaires</h2>
        <textarea name=\"mission_infos\" required>";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_INFOS", [], "any", false, false, false, 44);
            echo "</textarea>
        <h2>Rang de la mission</h2>
        <select name=\"mission_rank\">
            <option value=\"S\" ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_RANK", [], "any", false, false, false, 47) == "S")) {
                echo "selected";
            }
            echo ">S</option>
            <option value=\"A\" ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_RANK", [], "any", false, false, false, 48) == "A")) {
                echo "selected";
            }
            echo ">A</option>
            <option value=\"B\" ";
            // line 49
            if ((twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_RANK", [], "any", false, false, false, 49) == "B")) {
                echo "selected";
            }
            echo ">B</option>
            <option value=\"C\" ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_RANK", [], "any", false, false, false, 50) == "C")) {
                echo "selected";
            }
            echo ">C</option>
            <option value=\"D\" ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_RANK", [], "any", false, false, false, 51) == "D")) {
                echo "selected";
            }
            echo ">D</option>
        </select>
        <h2>Nombre de participants maximum</h2>
        <input type=\"number\" name=\"mission_max_users\" min=\"1\" value=\"";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_MAX_USERS", [], "any", false, false, false, 54);
            echo "\" required>
        <h2>Groupes concernés</h2>
        <div style=\"text-align: center;\">";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["missions_to_validate"], "MV_GROUPS", [], "any", false, false, false, 56);
            echo "</div>
        <div class=\"align_buttons\">
            <input type=\"submit\" name=\"validate_mission_button\" class=\"button_validate\" value=\"Valider la mission\">
            <input type=\"submit\" name=\"modify_mission_button\" class=\"button_modify\" value=\"Enregistrer les modifications\">
            <input type=\"submit\" name=\"delete_mission_button\" class=\"button_delete\" value=\"Supprimer la mission\">
        </div>
    </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['missions_to_validate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
    <form method=\"post\" action=\"";
        // line 65
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
        </select>
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
        // line 112
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "missions_board.html", 112)->display($context);
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
        return array (  271 => 112,  221 => 65,  218 => 64,  204 => 56,  199 => 54,  191 => 51,  185 => 50,  179 => 49,  173 => 48,  167 => 47,  161 => 44,  156 => 42,  151 => 40,  146 => 38,  141 => 36,  135 => 33,  130 => 32,  126 => 31,  123 => 30,  114 => 27,  108 => 24,  102 => 21,  96 => 18,  90 => 15,  84 => 12,  78 => 9,  72 => 7,  68 => 6,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "missions_board.html", "");
    }
}
