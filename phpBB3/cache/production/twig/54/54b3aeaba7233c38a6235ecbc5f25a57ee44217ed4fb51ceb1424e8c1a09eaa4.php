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

/* fiche_technique.html */
class __TwigTemplate_2ec033454d4c0903857e4c3d3791fd244341dbfb4bcd5e989bdd58dc685b107c extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "fiche_technique.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        $asset_file = "fiche_technique.js";
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
        echo "<div id=\"ft_name\" class=\"";
        if (($context["FT_IS_KIRI"] ?? null)) {
            echo "ft_kiri";
        } elseif (($context["FT_IS_IWA"] ?? null)) {
            echo "ft_iwa";
        } elseif (($context["FT_IS_SUNA"] ?? null)) {
            echo "ft_suna";
        } else {
            echo "ft_nuke";
        }
        echo "\">Fiche technique de ";
        echo ($context["FT_USERNAME"] ?? null);
        echo "</div>
<div id=\"ft_user\">
        <h1>Techniques de Ninjutsu</h1>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Ninjutsu_loop", [], "any", false, false, false, 6));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Ninjutsu_loop"]) {
            // line 7
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 8);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Ninjutsu"] ?? null), "loop", [], "any", false, false, false, 9), "FT_TECHNIQUE_RANK", [], "any", false, false, false, 9);
            echo "\">
            <div class=\"ft_ninjutsu\">
                <div class=\"ft_technique_information\">";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 11);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 11);
            echo " -";
            if (twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 11)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 11);
            }
            echo " Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 11);
            echo "</div>
                <div class=\"ft_technique_description\">";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 12);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 15
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 16
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 19
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyNinjutsu(";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "S_ROW_COUNT", [], "any", false, false, false, 19);
            echo ")\">
            </div>
        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "        <div class=\"no_technique\">Pas de technique de Ninjutsu pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Ninjutsu_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        <h1>Techniques de Taijutsu</h1>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Taijutsu_loop", [], "any", false, false, false, 26));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Taijutsu_loop"]) {
            // line 27
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 28);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 29
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Taijutsu"] ?? null), "loop", [], "any", false, false, false, 29), "FT_TECHNIQUE_RANK", [], "any", false, false, false, 29);
            echo "\">
            <div class=\"ft_taijutsu\">
                <div class=\"ft_technique_information\">";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 31);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 31);
            if (twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 31)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 31);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 31);
            echo "</div>
                <div class=\"ft_technique_description\">";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 32);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 35
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 36
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 39
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyTaijutsu(";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "S_ROW_COUNT", [], "any", false, false, false, 39);
            echo ")\">
            </div>
        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "        <div class=\"no_technique\">Pas de technique de Taijutsu pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Taijutsu_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        <h1>Techniques de Genjutsu</h1>
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Genjutsu_loop", [], "any", false, false, false, 46));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Genjutsu_loop"]) {
            // line 47
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 48);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 49
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Genjutsu"] ?? null), "loop", [], "any", false, false, false, 49), "FT_TECHNIQUE_RANK", [], "any", false, false, false, 49);
            echo "\">
            <div class=\"ft_genjutsu\">
                <div class=\"ft_technique_information\">";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 51);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 51);
            if (twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 51)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 51);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 51);
            echo "</div>
                <div class=\"ft_technique_description\">";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 52);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 55
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 56
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 59
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyGenjutsu(";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "S_ROW_COUNT", [], "any", false, false, false, 59);
            echo ")\">
            </div>
        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "        <div class=\"no_technique\">Pas de technique de Genjutsu pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Genjutsu_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        <h1>Techniques Kekkei Genkai & Hiden</h1>
        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "KG_loop", [], "any", false, false, false, 66));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["KG_loop"]) {
            // line 67
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 68);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 69);
            echo "\">
            <div class=\"ft_kekkei\">
                <div class=\"ft_technique_information\">";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 71);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 71);
            if (twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 71)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 71);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 71);
            echo "</div>
                <div class=\"ft_technique_description\">";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 72);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 75
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 76
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 79
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyKG(";
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "S_ROW_COUNT", [], "any", false, false, false, 79);
            echo ")\">
            </div>
        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 83
            echo "        <div class=\"no_technique\">Pas de technique de Kekkei Genkai pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['KG_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "
        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Hiden_loop", [], "any", false, false, false, 86));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Hiden_loop"]) {
            // line 87
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 88
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 88);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 89);
            echo "\">
            <div class=\"ft_kekkei\">
                <div class=\"ft_technique_information\">";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 91);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 91);
            if (twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 91)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 91);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 91);
            echo "</div>
                <div class=\"ft_technique_description\">";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 92);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 95
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 96
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 99
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyKG(";
            echo twig_get_attribute($this->env, $this->source, ($context["KG_loop"] ?? null), "S_ROW_COUNT", [], "any", false, false, false, 99);
            echo ")\">
            </div>
        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 103
            echo "        <div class=\"no_technique\">Pas de technique Hiden pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Hiden_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "        <h1>Talents</h1>
        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "ft_my_talents_loop", [], "any", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["ft_my_talents_loop"]) {
            // line 107
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_talent_callback\" data-refresh=\"true\">
            <div class=\"talents_container\">
                <input type=\"hidden\" name=\"talent_id\" value=\"";
            // line 109
            echo twig_get_attribute($this->env, $this->source, $context["ft_my_talents_loop"], "FT_TALENT_ID", [], "any", false, false, false, 109);
            echo "\">
                <strong>";
            // line 110
            echo twig_get_attribute($this->env, $this->source, $context["ft_my_talents_loop"], "FT_TALENT_TITLE", [], "any", false, false, false, 110);
            echo "</strong> ; ";
            echo twig_get_attribute($this->env, $this->source, $context["ft_my_talents_loop"], "FT_TALENT_DESCRIPTION", [], "any", false, false, false, 110);
            echo "
            </div>
            ";
            // line 112
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 113
                echo "            <div class=\"md_buttons\">
                <input class=\"ft_delete_button\" type=\"submit\" value=\"Supprimer le talent\" name=\"ft_delete_talent_button\">
            </div>
            ";
            }
            // line 117
            echo "        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ft_my_talents_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "        ";
        if (($context["FT_IS_ADMIN"] ?? null)) {
            // line 120
            echo "        <h1>Ajout de talent</h1>
        <form method=\"post\" action=\"";
            // line 121
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"add_ft_talent_callback\" data-refresh=\"true\">
            <select name=\"add_ft_talent\" class=\"ft_block\">
                ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "ft_talents_loop", [], "any", false, false, false, 123));
            foreach ($context['_seq'] as $context["_key"] => $context["ft_talents_loop"]) {
                // line 124
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ft_talents_loop"], "FT_TALENT_ID", [], "any", false, false, false, 124);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["ft_talents_loop"], "FT_TALENT_TITLE", [], "any", false, false, false, 124);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ft_talents_loop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "            </select>
            <div class=\"md_buttons\">
                <input class=\"validate_ft_button\" type=\"submit\" value=\"Ajouter le talent\" name=\"add_ft_talent_button\">
            </div>
        </form>
        ";
        }
        // line 132
        echo "        <h1>Techniques en cours de validation</h1>
        ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_validate_loop", [], "any", false, false, false, 133));
        foreach ($context['_seq'] as $context["_key"] => $context["to_validate_loop"]) {
            // line 134
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"modify_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"modify_ft_id\" value=\"";
            // line 135
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 135);
            echo "\">
            <div class=\"modify_ft_lb\">Nom de la technique</div>
            <div class=\"modify_ft_infos\">";
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 137);
            if (twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 137)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 137);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 137);
            echo "</div>
            <input type=\"text\" value=\"";
            // line 138
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 138);
            echo "\" class=\"modify_ft_name\" name=\"modify_ft_name\">
            <div class=\"modify_ft_lb\">Description</div>
            <textarea class=\"modify_ft_desc\" name=\"modify_ft_description\">";
            // line 140
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 140);
            echo "</textarea>
            <div class=\"md_buttons\">
                <input class=\"modify_ft_button\" type=\"submit\" name=\"modify_ft_button\" value=\"Enregistrer les modifications\">
                ";
            // line 143
            if (($context["FT_IS_ADMIN"] ?? null)) {
                echo "<input class=\"validate_ft_button\" type=\"submit\" value=\"Valider la technique\" name=\"ft_validate_button\">";
            }
            // line 144
            echo "            </div>
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_validate_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "        <h1>Création de technique</h1>
        ";
        // line 148
        if ((($context["FT_TECHNIQUES_TO_USE"] ?? null) > 0)) {
            // line 149
            echo "        <div id=\"new_tech_wrapper\">
            <div id=\"ft_stat\">Vous pouvez créer ";
            // line 150
            echo ($context["FT_TECHNIQUES_TO_USE"] ?? null);
            echo " techniques dont : ";
            echo ($context["FT_D_TECHNIQUES"] ?? null);
            echo " D | ";
            echo ($context["FT_C_TECHNIQUES"] ?? null);
            echo " C | ";
            echo ($context["FT_B_TECHNIQUES"] ?? null);
            echo " B | ";
            echo ($context["FT_A_TECHNIQUES"] ?? null);
            echo " A | ";
            echo ($context["FT_S_TECHNIQUES"] ?? null);
            echo " S</div>
            <div class=\"create_ft_lb\">Informations principales</div>
            <form id=\"new_technique_form\" method=\"post\" action=\"";
            // line 152
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"new_technique_callback\" data-refresh=\"true\">
                <select id=\"first_ft_select\" name=\"first_ft_select\">
                    <option value=\"\"></option>
                    <option value=\"Ninjutsu\">Ninjutsu</option>
                    <option value=\"Taijutsu\">Taijutsu</option>
                    <option value=\"Genjutsu\">Genjutsu</option>
                    <option value=\"Kekkei Genkai\">Kekkei Genkai</option>
                    <option value=\"Hiden\">Hiden</option>
                </select>
                <select id=\"technique_nj_type\" class=\"second_ft_select\" name=\"technique_nj_type\">
                    <option value=\"\"></option>
                    ";
            // line 163
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Katon") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Katon")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Katon"))) {
                echo "<option value=\"Katon\">Katon</option>";
            }
            // line 164
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Fûton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Fûton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Fûton"))) {
                echo "<option value=\"Fûton\">Fûton</option>";
            }
            // line 165
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Raiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Raiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Raiton"))) {
                echo "<option value=\"Raiton\">Raiton</option>";
            }
            // line 166
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Doton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Doton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Doton"))) {
                echo "<option value=\"Doton\">Doton</option>";
            }
            // line 167
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Suiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Suiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Suiton"))) {
                echo "<option value=\"Suiton\">Suiton</option>";
            }
            // line 168
            echo "                    ";
            if ((($context["FT_IROU_HEAL"] ?? null) || ($context["FT_IROU_POISON"] ?? null))) {
                echo "<option value=\"Irou Jutsu\">Irou Jutsu</option>";
            }
            // line 169
            echo "                    ";
            if ((($context["FT_FUIN_SEAL"] ?? null) || ($context["FT_FUIN_BARRER"] ?? null))) {
                echo "<option value=\"Fuinjutsu\">Fuinjutsu</option>";
            }
            // line 170
            echo "                    ";
            if (($context["FT_KUCHIYOSE"] ?? null)) {
                echo "<option>Kuchiyose</option>";
            }
            // line 171
            echo "                </select>
                <select id=\"technique_hiden_type\" class=\"second_ft_select\" name=\"technique_hiden_type\">
                    <option value=\"\"></option>
                    <option value=\"Mental\">Mental</option>
                    <option value=\"Contrôle du corps\">Contrôle du corps</option>
                    <option value=\"Ombres\">Ombres</option>
                    <option value=\"Chaînes\">Chaînes</option>
                    <option value=\"Seijutsu\">Seijutsu</option>
                    <option value=\"Torijutsu\">Torijutsu</option>
                    <option value=\"Hachijutsu\">Hachijutsu</option>
                    <option value=\"Modification corporelle\">Modification corporelle</option>
                    <option value=\"Chiens\">Chiens</option>
                    <option value=\"Chats\">Chats</option>
                    <option value=\"Insectes\">Insectes</option>
                    <option value=\"Jûken\">Jûken</option>
                </select>
                <select id=\"technique_kg_type\" class=\"second_ft_select\" name=\"technique_kg_type\">
                    <option value=\"\"></option>
                    <option value=\"Sharingan\">Sharingan</option>
                    <option value=\"Mokuton\">Mokuton</option>
                    <option value=\"Byakugan\">Byakugan</option>
                    <option value=\"Shikotsumyaku\">Shikotsumyaku</option>
                    <option value=\"Hyôton\">Hyôton</option>
                    <option value=\"Futton\">Futton</option>
                    <option value=\"Jiton\">Jiton</option>
                    <option value=\"Shakuton\">Shakuton</option>
                    <option value=\"Yoton\">Yoton</option>
                    <option value=\"Fuuton\">Fuuton</option>
                    <option value=\"Bakuton\">Bakuton</option>
                    <option value=\"Shôton\">Shôton</option>
                    <option value=\"Shouraigan\">Shouraigan</option>
                    <option value=\"Ketsuryugan\">Ketsuryugan</option>
                    <option value=\"Ranton\">Ranton</option>
                    <option value=\"Shokuton\">Shokuton</option>
                    <option value=\"Kôton\">Kôton</option>
                    <option value=\"Meiton\">Meiton</option>
                </select>
                <select id=\"technique_tj_type\" class=\"second_ft_select\" name=\"technique_tj_type\">
                    <option value=\"\"></option>
                    <option value=\"Gôken\">Gôken</option>
                    <option value=\"Jûken\">Jûken</option>
                    <option value=\"Bukijutsu\">Bukijutsu</option>
                    <option value=\"Hachimon\">Hachimon</option>
                </select>
                <select id=\"technique_gj_type\" class=\"second_ft_select\" name=\"technique_gj_type\">
                    <option value=\"\"></option>
                    <option value=\"Concentration\">Concentration</option>
                    <option value=\"Simple\">Simple</option>
                    <option value=\"Continue\">Continue</option>
                </select>
                <select id=\"buki_ft_type\" class=\"second_type_select\" name=\"buki_ft_type\">
                    <option value=\"\"></option>
                    <option value=\"Kenjutsu\">Kenjutsu</option>
                    <option value=\"Shurikenjutsu\">Shurikenjutsu</option>
                    <option value=\"Bôjutsu\">Bôjutsu</option>
                    <option value=\"Kyûjutsu\">Kyujutsu</option>
                </select>
                <select id=\"irou_jutsu_ft_type\" class=\"second_type_select\" name=\"irou_jutsu_ft_type\">
                    <option value=\"\"></option>
                    ";
            // line 230
            if (($context["FT_IROU_HEAL"] ?? null)) {
                echo "<option value=\"Soins\">Soins</option>";
            }
            // line 231
            echo "                    ";
            if (($context["FT_IROU_POISON"] ?? null)) {
                echo "<option value=\"Poisons\">Poisons</option>";
            }
            // line 232
            echo "                </select>
                <select id=\"fuinjutsu_ft_type\" class=\"second_type_select\" name=\"fuinjutsu_ft_type\">
                    <option value=\"\"></option>
                    ";
            // line 235
            if (($context["FT_FUIN_BARRER"] ?? null)) {
                echo "<option value=\"Barrières\">Barrières</option>";
            }
            // line 236
            echo "                    ";
            if (($context["FT_FUIN_SEAL"] ?? null)) {
                echo "<option value=\"Sceaux\">Sceaux</option>";
            }
            // line 237
            echo "                </select>
                <select id=\"technique_kg_rank\" class=\"third_ft_select\" name=\"technique_kg_rank\">
                    <option value=\"\"></option>
                    ";
            // line 240
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 241
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 242
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 243
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 244
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 245
            echo "                </select>
                <select id=\"technique_hiden_rank\" class=\"third_ft_select\" name=\"technique_hiden_rank\">
                    <option value=\"\"></option>
                    ";
            // line 248
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 249
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 250
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 251
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 252
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 253
            echo "                </select>
                <select id=\"technique_nj_rank\" class=\"third_ft_select\" name=\"technique_nj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 256
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 257
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 258
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 259
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 260
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 261
            echo "                </select>
                <select id=\"technique_tj_rank\" class=\"third_ft_select\" name=\"technique_tj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 264
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 265
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 266
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 267
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 268
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 269
            echo "                </select>
                <select id=\"technique_gj_rank\" class=\"third_ft_select\" name=\"technique_gj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 272
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 273
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 274
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 275
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 276
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 277
            echo "                </select>
                <div id=\"new_ft_tech\" name=\"new_ft_tech\">
                    <div class=\"create_ft_lb\">Nom de la technique</div>
                    <input type=\"text\" id=\"new_ft_name\" name=\"new_ft_name\">
                    <div class=\"create_ft_lb\">Description de la technique</div>
                    <textarea id=\"new_ft_technique\" name=\"new_ft_technique\"></textarea>
                    <input type=\"submit\" id=\"create_technique\" value=\"Créer la technique\">
                </div>
            </form>
        </div>
    ";
        }
        // line 288
        echo "</div>

";
        // line 290
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "fiche_technique.html", 290)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "fiche_technique.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  843 => 290,  839 => 288,  826 => 277,  821 => 276,  816 => 275,  811 => 274,  806 => 273,  802 => 272,  797 => 269,  792 => 268,  787 => 267,  782 => 266,  777 => 265,  773 => 264,  768 => 261,  763 => 260,  758 => 259,  753 => 258,  748 => 257,  744 => 256,  739 => 253,  734 => 252,  729 => 251,  724 => 250,  719 => 249,  715 => 248,  710 => 245,  705 => 244,  700 => 243,  695 => 242,  690 => 241,  686 => 240,  681 => 237,  676 => 236,  672 => 235,  667 => 232,  662 => 231,  658 => 230,  597 => 171,  592 => 170,  587 => 169,  582 => 168,  577 => 167,  572 => 166,  567 => 165,  562 => 164,  558 => 163,  544 => 152,  529 => 150,  526 => 149,  524 => 148,  521 => 147,  513 => 144,  509 => 143,  503 => 140,  498 => 138,  488 => 137,  483 => 135,  478 => 134,  474 => 133,  471 => 132,  463 => 126,  452 => 124,  448 => 123,  443 => 121,  440 => 120,  437 => 119,  430 => 117,  424 => 113,  422 => 112,  415 => 110,  411 => 109,  405 => 107,  401 => 106,  398 => 105,  391 => 103,  381 => 99,  376 => 96,  374 => 95,  368 => 92,  356 => 91,  351 => 89,  347 => 88,  342 => 87,  337 => 86,  334 => 85,  327 => 83,  317 => 79,  312 => 76,  310 => 75,  304 => 72,  292 => 71,  287 => 69,  283 => 68,  278 => 67,  273 => 66,  270 => 65,  263 => 63,  253 => 59,  248 => 56,  246 => 55,  240 => 52,  228 => 51,  223 => 49,  219 => 48,  214 => 47,  209 => 46,  206 => 45,  199 => 43,  189 => 39,  184 => 36,  182 => 35,  176 => 32,  164 => 31,  159 => 29,  155 => 28,  150 => 27,  145 => 26,  142 => 25,  135 => 23,  125 => 19,  120 => 16,  118 => 15,  112 => 12,  99 => 11,  94 => 9,  90 => 8,  85 => 7,  80 => 6,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fiche_technique.html", "");
    }
}
