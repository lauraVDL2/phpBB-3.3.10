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
                <div class=\"ft_technique_description\">(";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_DAMAGE", [], "any", false, false, false, 12);
            echo " dégâts en PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_CHAKRA", [], "any", false, false, false, 12);
            echo " coût en PC) ";
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
                <div class=\"ft_technique_description\">(";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_DAMAGE", [], "any", false, false, false, 32);
            echo " dégâts en PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_CHAKRA", [], "any", false, false, false, 32);
            echo " coût en PC) ";
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
                <div class=\"ft_technique_description\">(";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_DAMAGE", [], "any", false, false, false, 52);
            echo " dégâts en PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_CHAKRA", [], "any", false, false, false, 52);
            echo " coût en PC) ";
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
                <div class=\"ft_technique_description\">(";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_DAMAGE", [], "any", false, false, false, 72);
            echo " dégâts en PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_CHAKRA", [], "any", false, false, false, 72);
            echo " coût en PC) ";
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
                <div class=\"ft_technique_description\">(";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_DAMAGE", [], "any", false, false, false, 92);
            echo " dégâts en PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_CHAKRA", [], "any", false, false, false, 92);
            echo " coût en PC) ";
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
        $context['_iterated'] = false;
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
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 119
            echo "        <div class=\"no_technique\">Pas de talent pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ft_my_talents_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        ";
        if (($context["FT_IS_ADMIN"] ?? null)) {
            // line 122
            echo "        <h1>Ajout de talent</h1>
        <form method=\"post\" action=\"";
            // line 123
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"add_ft_talent_callback\" data-refresh=\"true\">
            <select name=\"add_ft_talent\" class=\"ft_block\">
                ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "ft_talents_loop", [], "any", false, false, false, 125));
            foreach ($context['_seq'] as $context["_key"] => $context["ft_talents_loop"]) {
                // line 126
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ft_talents_loop"], "FT_TALENT_ID", [], "any", false, false, false, 126);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["ft_talents_loop"], "FT_TALENT_TITLE", [], "any", false, false, false, 126);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ft_talents_loop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "            </select>
            <div class=\"md_buttons\">
                <input class=\"validate_ft_button\" type=\"submit\" value=\"Ajouter le talent\" name=\"add_ft_talent_button\">
            </div>
        </form>
        ";
        }
        // line 134
        echo "        <h1>Techniques en cours de validation</h1>
        ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_validate_loop", [], "any", false, false, false, 135));
        foreach ($context['_seq'] as $context["_key"] => $context["to_validate_loop"]) {
            // line 136
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"modify_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"modify_ft_id\" value=\"";
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 137);
            echo "\">
            <div class=\"modify_ft_lb\">Nom de la technique</div>
            <div class=\"modify_ft_infos\">";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 139);
            if (twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 139)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 139);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 139);
            echo " - ";
            if ((twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_OFFENSIVE", [], "any", false, false, false, 139) == 1)) {
                echo "Offensive";
            } else {
                echo "Non offensive";
            }
            echo "</div>
            <input type=\"text\" value=\"";
            // line 140
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 140);
            echo "\" class=\"modify_ft_name\" name=\"modify_ft_name\">
            <select class=\"ft_block\" name=\"modify_cost\">
                <option value=\"light\" ";
            // line 142
            if ((twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_COST", [], "any", false, false, false, 142) == "light")) {
                echo "selected";
            }
            echo "</option>Léger</option>
                <option value=\"medium\" ";
            // line 143
            if ((twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_COST", [], "any", false, false, false, 143) == "medium")) {
                echo "selected";
            }
            echo ">Moyen</option>
                <option value=\"heavy\" ";
            // line 144
            if ((twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_COST", [], "any", false, false, false, 144) == "heavy")) {
                echo "selected";
            }
            echo ">Lourd</option>
            </select>
            <div class=\"modify_ft_lb\">Description</div>
            <textarea class=\"modify_ft_desc\" name=\"modify_ft_description\">";
            // line 147
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 147);
            echo "</textarea>
            <div class=\"md_buttons\">
                <input class=\"modify_ft_button\" type=\"submit\" name=\"modify_ft_button\" value=\"Enregistrer les modifications\">
                ";
            // line 150
            if (($context["FT_IS_ADMIN"] ?? null)) {
                echo "<input class=\"validate_ft_button\" type=\"submit\" value=\"Valider la technique\" name=\"ft_validate_button\">";
            }
            // line 151
            echo "            </div>
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_validate_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo "        <h1>Création de technique</h1>
        ";
        // line 155
        if ((($context["FT_TECHNIQUES_TO_USE"] ?? null) > 0)) {
            // line 156
            echo "        <div id=\"new_tech_wrapper\">
            <div id=\"ft_stat\">Vous pouvez créer ";
            // line 157
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
            // line 159
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
            // line 170
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Katon") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Katon")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Katon"))) {
                echo "<option value=\"Katon\">Katon</option>";
            }
            // line 171
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Fûton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Fûton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Fûton"))) {
                echo "<option value=\"Fûton\">Fûton</option>";
            }
            // line 172
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Raiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Raiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Raiton"))) {
                echo "<option value=\"Raiton\">Raiton</option>";
            }
            // line 173
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Doton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Doton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Doton"))) {
                echo "<option value=\"Doton\">Doton</option>";
            }
            // line 174
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Suiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Suiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Suiton"))) {
                echo "<option value=\"Suiton\">Suiton</option>";
            }
            // line 175
            echo "                    ";
            if ((($context["FT_IROU_HEAL"] ?? null) || ($context["FT_IROU_POISON"] ?? null))) {
                echo "<option value=\"Irou Jutsu\">Irou Jutsu</option>";
            }
            // line 176
            echo "                    ";
            if ((($context["FT_FUIN_SEAL"] ?? null) || ($context["FT_FUIN_BARRER"] ?? null))) {
                echo "<option value=\"Fuinjutsu\">Fuinjutsu</option>";
            }
            // line 177
            echo "                    ";
            if (($context["FT_KUCHIYOSE"] ?? null)) {
                echo "<option>Kuchiyose</option>";
            }
            // line 178
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
                    ";
            // line 224
            if (($context["FT_SIGHT"] ?? null)) {
                echo "<option value=\"Vue\">Vue</option>";
            }
            // line 225
            echo "                    ";
            if (($context["FT_SOUND"] ?? null)) {
                echo "<option value=\"Son\">Son</option>";
            }
            // line 226
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Illusions démoniaques") || (($context["FT_SECOND_ELITE"] ?? null) == "Illusions démoniaques"))) {
                echo "<option value=\"Illusions démoniaques\">Illusions démoniaques</option>";
            }
            // line 227
            echo "                </select>
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
            // line 237
            if (($context["FT_IROU_HEAL"] ?? null)) {
                echo "<option value=\"Soins\">Soins</option>";
            }
            // line 238
            echo "                    ";
            if (($context["FT_IROU_POISON"] ?? null)) {
                echo "<option value=\"Poisons\">Poisons</option>";
            }
            // line 239
            echo "                </select>
                <select id=\"fuinjutsu_ft_type\" class=\"second_type_select\" name=\"fuinjutsu_ft_type\">
                    <option value=\"\"></option>
                    ";
            // line 242
            if (($context["FT_FUIN_BARRER"] ?? null)) {
                echo "<option value=\"Barrières\">Barrières</option>";
            }
            // line 243
            echo "                    ";
            if (($context["FT_FUIN_SEAL"] ?? null)) {
                echo "<option value=\"Sceaux\">Sceaux</option>";
            }
            // line 244
            echo "                </select>
                <select id=\"technique_kg_rank\" class=\"third_ft_select\" name=\"technique_kg_rank\">
                    <option value=\"\"></option>
                    ";
            // line 247
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 248
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 249
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 250
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 251
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 252
            echo "                </select>
                <select id=\"technique_hiden_rank\" class=\"third_ft_select\" name=\"technique_hiden_rank\">
                    <option value=\"\"></option>
                    ";
            // line 255
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 256
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 257
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 258
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 259
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 260
            echo "                </select>
                <select id=\"technique_nj_rank\" class=\"third_ft_select\" name=\"technique_nj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 263
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 264
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 265
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 266
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 267
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 268
            echo "                </select>
                <select id=\"technique_tj_rank\" class=\"third_ft_select\" name=\"technique_tj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 271
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 272
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 273
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 274
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 275
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 276
            echo "                </select>
                <select id=\"technique_gj_rank\" class=\"third_ft_select\" name=\"technique_gj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 279
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 280
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 281
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 282
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 283
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 284
            echo "                </select>
                <div id=\"new_ft_tech\" name=\"new_ft_tech\">
                    <div class=\"create_ft_lb\">Nom de la technique</div>
                    <input type=\"text\" id=\"new_ft_name\" name=\"new_ft_name\">
                    <div class=\"create_ft_lb\">Coût de la technique</div>
                    <select name=\"new_ft_cost\" class=\"ft_block ft_margin\">
                        <option value=\"light\">Léger</option>
                        <option value=\"medium\">Moyen</option>
                        <option value=\"heavy\">Lourd</option>
                    </select>
                    <div class=\"create_ft_lb\">Technique offensive ?</div>
                    <div class=\"no_technique ft_block\">Si non, elle n'infligera pas de dégâts directs</div>
                    <div class=\"ft_block ft_radio\">
                        <input type=\"radio\" name=\"new_ft_offensive\" value=\"offensive\" checked>
                        <label for=\"offensive\">Oui</label>
                        <input type=\"radio\" name=\"new_ft_offensive\" value=\"other\">
                        <label for=\"other\">Non</label>
                    </div>
                    <div class=\"create_ft_lb\">Description de la technique</div>
                    <textarea id=\"new_ft_technique\" name=\"new_ft_technique\"></textarea>
                    <input type=\"submit\" id=\"create_technique\" value=\"Créer la technique\">
                </div>
            </form>
        </div>
    ";
        }
        // line 309
        echo "</div>

";
        // line 311
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "fiche_technique.html", 311)->display($context);
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
        return array (  923 => 311,  919 => 309,  892 => 284,  887 => 283,  882 => 282,  877 => 281,  872 => 280,  868 => 279,  863 => 276,  858 => 275,  853 => 274,  848 => 273,  843 => 272,  839 => 271,  834 => 268,  829 => 267,  824 => 266,  819 => 265,  814 => 264,  810 => 263,  805 => 260,  800 => 259,  795 => 258,  790 => 257,  785 => 256,  781 => 255,  776 => 252,  771 => 251,  766 => 250,  761 => 249,  756 => 248,  752 => 247,  747 => 244,  742 => 243,  738 => 242,  733 => 239,  728 => 238,  724 => 237,  712 => 227,  707 => 226,  702 => 225,  698 => 224,  650 => 178,  645 => 177,  640 => 176,  635 => 175,  630 => 174,  625 => 173,  620 => 172,  615 => 171,  611 => 170,  597 => 159,  582 => 157,  579 => 156,  577 => 155,  574 => 154,  566 => 151,  562 => 150,  556 => 147,  548 => 144,  542 => 143,  536 => 142,  531 => 140,  515 => 139,  510 => 137,  505 => 136,  501 => 135,  498 => 134,  490 => 128,  479 => 126,  475 => 125,  470 => 123,  467 => 122,  464 => 121,  457 => 119,  451 => 117,  445 => 113,  443 => 112,  436 => 110,  432 => 109,  426 => 107,  421 => 106,  418 => 105,  411 => 103,  401 => 99,  396 => 96,  394 => 95,  384 => 92,  372 => 91,  367 => 89,  363 => 88,  358 => 87,  353 => 86,  350 => 85,  343 => 83,  333 => 79,  328 => 76,  326 => 75,  316 => 72,  304 => 71,  299 => 69,  295 => 68,  290 => 67,  285 => 66,  282 => 65,  275 => 63,  265 => 59,  260 => 56,  258 => 55,  248 => 52,  236 => 51,  231 => 49,  227 => 48,  222 => 47,  217 => 46,  214 => 45,  207 => 43,  197 => 39,  192 => 36,  190 => 35,  180 => 32,  168 => 31,  163 => 29,  159 => 28,  154 => 27,  149 => 26,  146 => 25,  139 => 23,  129 => 19,  124 => 16,  122 => 15,  112 => 12,  99 => 11,  94 => 9,  90 => 8,  85 => 7,  80 => 6,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fiche_technique.html", "");
    }
}
