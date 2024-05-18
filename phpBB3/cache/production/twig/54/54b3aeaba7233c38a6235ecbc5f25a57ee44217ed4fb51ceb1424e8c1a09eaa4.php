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
        <div id=\"um_links\">
            ";
        // line 6
        if (($context["FT_KUCHIYOSE"] ?? null)) {
            echo "<a href=\"./kuchiyose_techniques.php?uid=";
            echo ($context["FT_USER_ID"] ?? null);
            echo "\">Invocations</a>";
        }
        // line 7
        echo "            ";
        if (((($context["FT_FIRST_ELITE"] ?? null) == "Hitokugutsu") || (($context["FT_SECOND_ELITE"] ?? null) == "Hitokugutsu"))) {
            echo "<a href=\"./marionnettes.php?uid=";
            echo ($context["FT_USER_ID"] ?? null);
            echo "\">Marionnettes humaines</a>";
        }
        // line 8
        echo "        </div>
        <h1>Techniques de Ninjutsu</h1>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Ninjutsu_loop", [], "any", false, false, false, 10));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Ninjutsu_loop"]) {
            // line 11
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 12);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 13);
            echo "\">
            <div class=\"ft_ninjutsu\">
                <div class=\"ft_technique_information\">";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 15);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 15);
            echo " -";
            if (twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 15)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 15);
            }
            echo " Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 15);
            echo "</div>
                <div class=\"ft_technique_description\">(";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_DAMAGE", [], "any", false, false, false, 16);
            echo " dégâts en PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_CHAKRA", [], "any", false, false, false, 16);
            echo " coût en PC) ";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 16);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 19
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 20
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 23
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyNinjutsu(";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "S_ROW_COUNT", [], "any", false, false, false, 23);
            echo ")\">
            </div>
        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "        <div class=\"no_technique\">Pas de technique de Ninjutsu pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Ninjutsu_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        <h1>Techniques de Taijutsu</h1>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Taijutsu_loop", [], "any", false, false, false, 30));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Taijutsu_loop"]) {
            // line 31
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 32);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 33
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Taijutsu"] ?? null), "loop", [], "any", false, false, false, 33), "FT_TECHNIQUE_RANK", [], "any", false, false, false, 33);
            echo "\">
            <div class=\"ft_taijutsu\">
                <div class=\"ft_technique_information\">";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 35);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 35);
            if (twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 35)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 35);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 35);
            echo "</div>
                <div class=\"ft_technique_description\">(";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_DAMAGE", [], "any", false, false, false, 36);
            echo " dégâts en PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_CHAKRA", [], "any", false, false, false, 36);
            echo " coût en PC) ";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 36);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 39
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 40
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 43
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyTaijutsu(";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "S_ROW_COUNT", [], "any", false, false, false, 43);
            echo ")\">
            </div>
        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "        <div class=\"no_technique\">Pas de technique de Taijutsu pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Taijutsu_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        <h1>Techniques de Genjutsu</h1>
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Genjutsu_loop", [], "any", false, false, false, 50));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Genjutsu_loop"]) {
            // line 51
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 52);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 53);
            echo "\">
            <div class=\"ft_genjutsu\">
                <div class=\"ft_technique_information\">";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 55);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 55);
            if (twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 55)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 55);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 55);
            echo "</div>
                <div class=\"ft_technique_description\">(";
            // line 56
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_DAMAGE", [], "any", false, false, false, 56);
            echo " dégâts en PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_CHAKRA", [], "any", false, false, false, 56);
            echo " coût en PC) ";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 56);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 59
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 60
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 63
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyGenjutsu(";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "S_ROW_COUNT", [], "any", false, false, false, 63);
            echo ")\">
            </div>
        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "        <div class=\"no_technique\">Pas de technique de Genjutsu pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Genjutsu_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "        <h1>Techniques Kekkei Genkai & Hiden</h1>
        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "KG_loop", [], "any", false, false, false, 70));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["KG_loop"]) {
            // line 71
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 72);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 73);
            echo "\">
            <div class=\"ft_kekkei\">
                <div class=\"ft_technique_information\">";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 75);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 75);
            if (twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 75)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 75);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 75);
            echo "</div>
                <div class=\"ft_technique_description\">(";
            // line 76
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_DAMAGE", [], "any", false, false, false, 76);
            echo " dégâts en PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_CHAKRA", [], "any", false, false, false, 76);
            echo " coût en PC) ";
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 76);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 79
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 80
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 83
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyKG(";
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "S_ROW_COUNT", [], "any", false, false, false, 83);
            echo ")\">
            </div>
        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 87
            echo "        <div class=\"no_technique\">Pas de technique de Kekkei Genkai pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['KG_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Hiden_loop", [], "any", false, false, false, 90));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Hiden_loop"]) {
            // line 91
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 92);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 93
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 93);
            echo "\">
            <div class=\"ft_kekkei\">
                <div class=\"ft_technique_information\">";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 95);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 95);
            if (twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 95)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 95);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 95);
            echo "</div>
                <div class=\"ft_technique_description\">(";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_DAMAGE", [], "any", false, false, false, 96);
            echo " dégâts en PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_CHAKRA", [], "any", false, false, false, 96);
            echo " coût en PC) ";
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 96);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 99
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 100
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 103
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyKG(";
            echo twig_get_attribute($this->env, $this->source, ($context["KG_loop"] ?? null), "S_ROW_COUNT", [], "any", false, false, false, 103);
            echo ")\">
            </div>
        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 107
            echo "        <div class=\"no_technique\">Pas de technique Hiden pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Hiden_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "        <h1>Talents</h1>
        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "ft_my_talents_loop", [], "any", false, false, false, 110));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ft_my_talents_loop"]) {
            // line 111
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_talent_callback\" data-refresh=\"true\">
            <div class=\"talents_container\">
                <input type=\"hidden\" name=\"talent_id\" value=\"";
            // line 113
            echo twig_get_attribute($this->env, $this->source, $context["ft_my_talents_loop"], "FT_TALENT_ID", [], "any", false, false, false, 113);
            echo "\">
                <strong>";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["ft_my_talents_loop"], "FT_TALENT_TITLE", [], "any", false, false, false, 114);
            echo "</strong> ; ";
            echo twig_get_attribute($this->env, $this->source, $context["ft_my_talents_loop"], "FT_TALENT_DESCRIPTION", [], "any", false, false, false, 114);
            echo "
            </div>
            ";
            // line 116
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 117
                echo "            <div class=\"md_buttons\">
                <input class=\"ft_delete_button\" type=\"submit\" value=\"Supprimer le talent\" name=\"ft_delete_talent_button\">
            </div>
            ";
            }
            // line 121
            echo "        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 123
            echo "        <div class=\"no_technique\">Pas de talent pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ft_my_talents_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "        ";
        if (($context["FT_IS_ADMIN"] ?? null)) {
            // line 126
            echo "        <h1>Ajout de talent</h1>
        <form method=\"post\" action=\"";
            // line 127
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"add_ft_talent_callback\" data-refresh=\"true\">
            <select name=\"add_ft_talent\" class=\"ft_block\">
                ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "ft_talents_loop", [], "any", false, false, false, 129));
            foreach ($context['_seq'] as $context["_key"] => $context["ft_talents_loop"]) {
                // line 130
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ft_talents_loop"], "FT_TALENT_ID", [], "any", false, false, false, 130);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["ft_talents_loop"], "FT_TALENT_TITLE", [], "any", false, false, false, 130);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ft_talents_loop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "            </select>
            <div class=\"md_buttons\">
                <input class=\"validate_ft_button\" type=\"submit\" value=\"Ajouter le talent\" name=\"add_ft_talent_button\">
            </div>
        </form>
        ";
        }
        // line 138
        echo "        <h1>Techniques en cours de validation</h1>
        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_validate_loop", [], "any", false, false, false, 139));
        foreach ($context['_seq'] as $context["_key"] => $context["to_validate_loop"]) {
            // line 140
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"modify_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"modify_ft_id\" value=\"";
            // line 141
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 141);
            echo "\">
            <div class=\"modify_ft_lb\">Nom de la technique</div>
            <div class=\"modify_ft_infos\">";
            // line 143
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 143);
            if (twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 143)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 143);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 143);
            echo " - ";
            if ((twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_OFFENSIVE", [], "any", false, false, false, 143) == 1)) {
                echo "Offensive";
            } else {
                echo "Non offensive";
            }
            echo "</div>
            <input type=\"text\" value=\"";
            // line 144
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 144);
            echo "\" class=\"modify_ft_name\" name=\"modify_ft_name\">
            <select class=\"ft_block\" name=\"modify_cost\">
                <option value=\"light\" ";
            // line 146
            if ((twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_COST", [], "any", false, false, false, 146) == "light")) {
                echo "selected";
            }
            echo "</option>Léger</option>
                <option value=\"medium\" ";
            // line 147
            if ((twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_COST", [], "any", false, false, false, 147) == "medium")) {
                echo "selected";
            }
            echo ">Moyen</option>
                <option value=\"heavy\" ";
            // line 148
            if ((twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_COST", [], "any", false, false, false, 148) == "heavy")) {
                echo "selected";
            }
            echo ">Lourd</option>
            </select>
            <div class=\"modify_ft_lb\">Description</div>
            <textarea class=\"modify_ft_desc\" name=\"modify_ft_description\">";
            // line 151
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 151);
            echo "</textarea>
            <div class=\"md_buttons\">
                <input class=\"modify_ft_button\" type=\"submit\" name=\"modify_ft_button\" value=\"Enregistrer les modifications\">
                ";
            // line 154
            if (($context["FT_IS_ADMIN"] ?? null)) {
                echo "<input class=\"validate_ft_button\" type=\"submit\" value=\"Valider la technique\" name=\"ft_validate_button\">";
            }
            // line 155
            echo "            </div>
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_validate_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "        <h1>Création de technique</h1>
        ";
        // line 159
        if ((($context["FT_TECHNIQUES_TO_USE"] ?? null) > 0)) {
            // line 160
            echo "        <div id=\"new_tech_wrapper\">
            <div id=\"ft_stat\">Vous pouvez créer ";
            // line 161
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
            // line 163
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
            // line 174
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Katon") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Katon")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Katon"))) {
                echo "<option value=\"Katon\">Katon</option>";
            }
            // line 175
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Fûton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Fûton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Fûton"))) {
                echo "<option value=\"Fûton\">Fûton</option>";
            }
            // line 176
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Raiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Raiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Raiton"))) {
                echo "<option value=\"Raiton\">Raiton</option>";
            }
            // line 177
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Doton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Doton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Doton"))) {
                echo "<option value=\"Doton\">Doton</option>";
            }
            // line 178
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Suiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Suiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Suiton"))) {
                echo "<option value=\"Suiton\">Suiton</option>";
            }
            // line 179
            echo "                    ";
            if ((($context["FT_IROU_HEAL"] ?? null) || ($context["FT_IROU_POISON"] ?? null))) {
                echo "<option value=\"Irou Jutsu\">Irou Jutsu</option>";
            }
            // line 180
            echo "                    ";
            if ((($context["FT_FUIN_SEAL"] ?? null) || ($context["FT_FUIN_BARRER"] ?? null))) {
                echo "<option value=\"Fuinjutsu\">Fuinjutsu</option>";
            }
            // line 181
            echo "                    ";
            if (($context["FT_KUCHIYOSE"] ?? null)) {
                echo "<option>Kuchiyose</option>";
            }
            // line 182
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Senjutsu") || (($context["FT_SECOND_ELITE"] ?? null) == "Senjutsu"))) {
                echo "<option value=\"Senjutsu\">Senjutsu</option>";
            }
            // line 183
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Hiraishin") || (($context["FT_SECOND_ELITE"] ?? null) == "Hiraishin"))) {
                echo "<option value=\"Hiraishin\">Hiraishin</option>";
            }
            // line 184
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Jinton") || (($context["FT_SECOND_ELITE"] ?? null) == "Jinton"))) {
                echo "<option value=\"Jinton\">Jinton</option>";
            }
            // line 185
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Gyôton") || (($context["FT_SECOND_ELITE"] ?? null) == "Gyôton"))) {
                echo "<option value=\"Gyôton\">Gyôton</option>";
            }
            // line 186
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Kyôton") || (($context["FT_SECOND_ELITE"] ?? null) == "Kyôton"))) {
                echo "<option value=\"Kyôton\">Kyôton</option>";
            }
            // line 187
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Marque maudite") || (($context["FT_SECOND_ELITE"] ?? null) == "Marque maudite"))) {
                echo "<option value=\"Marque maudite\">Marque maudite</option>";
            }
            // line 188
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Manteau de chakra") || (($context["FT_SECOND_ELITE"] ?? null) == "Manteau de chakra"))) {
                echo "<option value=\"Manteau de chakra\">Manteau de chakra</option>";
            }
            // line 189
            echo "                </select>
                <select id=\"technique_hiden_type\" class=\"second_ft_select\" name=\"technique_hiden_type\">
                    <option value=\"\"></option>
                    ";
            // line 192
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Hitokugutsu") || (($context["FT_SECOND_ELITE"] ?? null) == "Hitokugutsu"))) {
                echo "<option value=\"Hitokugutsu\">Hitokugutsu</option>";
            }
            // line 193
            echo "                    <option value=\"Kugutsu\">Kugutsu</option>
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
                    ";
            // line 209
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Mangekyô") || (($context["FT_SECOND_ELITE"] ?? null) == "Mangekyô"))) {
                echo "<option value=\"Mangekyô\">Mangekyô</option>";
            }
            // line 210
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Hashirama") || (($context["FT_SECOND_ELITE"] ?? null) == "Hashirama"))) {
                echo "<option value=\"Hashirama\">Hashirama</option>";
            }
            // line 211
            echo "                    <option value=\"Sharingan\">Sharingan</option>
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
                    <option value=\"Bukijutsu\">Bukijutsu</option>
                    ";
            // line 234
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Hachimon") || (($context["FT_SECOND_ELITE"] ?? null) == "Hachimon"))) {
                echo "<option value=\"Hachimon\">Hachimon</option>";
            }
            // line 235
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Nintaijutsu") || (($context["FT_SECOND_ELITE"] ?? null) == "Nintaijutsu"))) {
                echo "<option value=\"Nintaijutsu\">Nintaijutsu</option>";
            }
            // line 236
            echo "                </select>
                <select id=\"technique_gj_type\" class=\"second_ft_select\" name=\"technique_gj_type\">
                    <option value=\"\"></option>
                    ";
            // line 239
            if (($context["FT_SIGHT"] ?? null)) {
                echo "<option value=\"Vue\">Vue</option>";
            }
            // line 240
            echo "                    ";
            if (($context["FT_SOUND"] ?? null)) {
                echo "<option value=\"Son\">Son</option>";
            }
            // line 241
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Illusions démoniaques") || (($context["FT_SECOND_ELITE"] ?? null) == "Illusions démoniaques"))) {
                echo "<option value=\"Illusions démoniaques\">Illusions démoniaques</option>";
            }
            // line 242
            echo "                </select>
                <select id=\"buki_ft_type\" class=\"second_type_select\" name=\"buki_ft_type\">
                    <option value=\"\"></option>
                    ";
            // line 245
            if ((((($context["FT_FIRST_WEAPON"] ?? null) == "Kenjutsu") || (($context["FT_SECOND_WEAPON"] ?? null) == "Kenjutsu")) || (($context["FT_THIRD_WEAPON"] ?? null) == "Kenjutsu"))) {
                echo "<option value=\"Kenjutsu\">Kenjutsu</option>";
            }
            // line 246
            echo "                    ";
            if ((((($context["FT_FIRST_WEAPON"] ?? null) == "Shurikenjutsu") || (($context["FT_SECOND_WEAPON"] ?? null) == "Shurikenjutsu")) || (($context["FT_THIRD_WEAPON"] ?? null) == "Shurikenjutsu"))) {
                echo "<option value=\"Shurikenjutsu\">Shurikenjutsu</option>";
            }
            // line 247
            echo "                    ";
            if ((((($context["FT_FIRST_WEAPON"] ?? null) == "Bôjutsu") || (($context["FT_SECOND_WEAPON"] ?? null) == "Bôjutsu")) || (($context["FT_THIRD_WEAPON"] ?? null) == "Bôjutsu"))) {
                echo "<option value=\"Bôjutsu\">Bôjutsu</option>";
            }
            // line 248
            echo "                    ";
            if ((((($context["FT_FIRST_WEAPON"] ?? null) == "Kyûjutsu") || (($context["FT_SECOND_WEAPON"] ?? null) == "Kyûjutsu")) || (($context["FT_THIRD_WEAPON"] ?? null) == "Kyûjutsu"))) {
                echo "<option value=\"Kyûjutsu\">Kyûjutsu</option>";
            }
            // line 249
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Lames de Chakra") || (($context["FT_SECOND_ELITE"] ?? null) == "Lames de Chakra"))) {
                echo "<option value=\"Lames de Chakra\">Lames de Chakra</option>";
            }
            // line 250
            echo "                </select>
                <select id=\"irou_jutsu_ft_type\" class=\"second_type_select\" name=\"irou_jutsu_ft_type\">
                    <option value=\"\"></option>
                    ";
            // line 253
            if (($context["FT_IROU_HEAL"] ?? null)) {
                echo "<option value=\"Soins\">Soins</option>";
            }
            // line 254
            echo "                    ";
            if (($context["FT_IROU_POISON"] ?? null)) {
                echo "<option value=\"Poisons\">Poisons</option>";
            }
            // line 255
            echo "                </select>
                <select id=\"fuinjutsu_ft_type\" class=\"second_type_select\" name=\"fuinjutsu_ft_type\">
                    <option value=\"\"></option>
                    ";
            // line 258
            if (($context["FT_FUIN_BARRER"] ?? null)) {
                echo "<option value=\"Barrières\">Barrières</option>";
            }
            // line 259
            echo "                    ";
            if (($context["FT_FUIN_SEAL"] ?? null)) {
                echo "<option value=\"Sceaux\">Sceaux</option>";
            }
            // line 260
            echo "                </select>
                <select id=\"technique_kg_rank\" class=\"third_ft_select\" name=\"technique_kg_rank\">
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
                <select id=\"technique_hiden_rank\" class=\"third_ft_select\" name=\"technique_hiden_rank\">
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
                <select id=\"technique_nj_rank\" class=\"third_ft_select\" name=\"technique_nj_rank\">
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
                <select id=\"technique_tj_rank\" class=\"third_ft_select\" name=\"technique_tj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 287
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 288
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 289
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 290
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 291
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 292
            echo "                </select>
                <select id=\"technique_gj_rank\" class=\"third_ft_select\" name=\"technique_gj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 295
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 296
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 297
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 298
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 299
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 300
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
        // line 325
        echo "</div>

";
        // line 327
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "fiche_technique.html", 327)->display($context);
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
        return array (  1024 => 327,  1020 => 325,  993 => 300,  988 => 299,  983 => 298,  978 => 297,  973 => 296,  969 => 295,  964 => 292,  959 => 291,  954 => 290,  949 => 289,  944 => 288,  940 => 287,  935 => 284,  930 => 283,  925 => 282,  920 => 281,  915 => 280,  911 => 279,  906 => 276,  901 => 275,  896 => 274,  891 => 273,  886 => 272,  882 => 271,  877 => 268,  872 => 267,  867 => 266,  862 => 265,  857 => 264,  853 => 263,  848 => 260,  843 => 259,  839 => 258,  834 => 255,  829 => 254,  825 => 253,  820 => 250,  815 => 249,  810 => 248,  805 => 247,  800 => 246,  796 => 245,  791 => 242,  786 => 241,  781 => 240,  777 => 239,  772 => 236,  767 => 235,  763 => 234,  738 => 211,  733 => 210,  729 => 209,  711 => 193,  707 => 192,  702 => 189,  697 => 188,  692 => 187,  687 => 186,  682 => 185,  677 => 184,  672 => 183,  667 => 182,  662 => 181,  657 => 180,  652 => 179,  647 => 178,  642 => 177,  637 => 176,  632 => 175,  628 => 174,  614 => 163,  599 => 161,  596 => 160,  594 => 159,  591 => 158,  583 => 155,  579 => 154,  573 => 151,  565 => 148,  559 => 147,  553 => 146,  548 => 144,  532 => 143,  527 => 141,  522 => 140,  518 => 139,  515 => 138,  507 => 132,  496 => 130,  492 => 129,  487 => 127,  484 => 126,  481 => 125,  474 => 123,  468 => 121,  462 => 117,  460 => 116,  453 => 114,  449 => 113,  443 => 111,  438 => 110,  435 => 109,  428 => 107,  418 => 103,  413 => 100,  411 => 99,  401 => 96,  389 => 95,  384 => 93,  380 => 92,  375 => 91,  370 => 90,  367 => 89,  360 => 87,  350 => 83,  345 => 80,  343 => 79,  333 => 76,  321 => 75,  316 => 73,  312 => 72,  307 => 71,  302 => 70,  299 => 69,  292 => 67,  282 => 63,  277 => 60,  275 => 59,  265 => 56,  253 => 55,  248 => 53,  244 => 52,  239 => 51,  234 => 50,  231 => 49,  224 => 47,  214 => 43,  209 => 40,  207 => 39,  197 => 36,  185 => 35,  180 => 33,  176 => 32,  171 => 31,  166 => 30,  163 => 29,  156 => 27,  146 => 23,  141 => 20,  139 => 19,  129 => 16,  116 => 15,  111 => 13,  107 => 12,  102 => 11,  97 => 10,  93 => 8,  86 => 7,  80 => 6,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fiche_technique.html", "");
    }
}
