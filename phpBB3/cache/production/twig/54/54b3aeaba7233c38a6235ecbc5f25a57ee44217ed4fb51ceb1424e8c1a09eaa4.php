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
        echo "        </div>
        <h1>Techniques de Ninjutsu</h1>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Ninjutsu_loop", [], "any", false, false, false, 9));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Ninjutsu_loop"]) {
            // line 10
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 11);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 12
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Ninjutsu"] ?? null), "loop", [], "any", false, false, false, 12), "FT_TECHNIQUE_RANK", [], "any", false, false, false, 12);
            echo "\">
            <div class=\"ft_ninjutsu\">
                <div class=\"ft_technique_information\">";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 14);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 14);
            echo " -";
            if (twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 14)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 14);
            }
            echo " Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 14);
            echo "</div>
                <div class=\"ft_technique_description\">(";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_DAMAGE", [], "any", false, false, false, 15);
            echo " dégâts en PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_CHAKRA", [], "any", false, false, false, 15);
            echo " coût en PC) ";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 15);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 18
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 19
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 22
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyNinjutsu(";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "S_ROW_COUNT", [], "any", false, false, false, 22);
            echo ")\">
            </div>
        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "        <div class=\"no_technique\">Pas de technique de Ninjutsu pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Ninjutsu_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        <h1>Techniques de Taijutsu</h1>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Taijutsu_loop", [], "any", false, false, false, 29));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Taijutsu_loop"]) {
            // line 30
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 31);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 32
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Taijutsu"] ?? null), "loop", [], "any", false, false, false, 32), "FT_TECHNIQUE_RANK", [], "any", false, false, false, 32);
            echo "\">
            <div class=\"ft_taijutsu\">
                <div class=\"ft_technique_information\">";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 34);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 34);
            if (twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 34)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 34);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 34);
            echo "</div>
                <div class=\"ft_technique_description\">(";
            // line 35
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_DAMAGE", [], "any", false, false, false, 35);
            echo " dégâts en PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_CHAKRA", [], "any", false, false, false, 35);
            echo " coût en PC) ";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 35);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 38
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 39
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 42
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyTaijutsu(";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "S_ROW_COUNT", [], "any", false, false, false, 42);
            echo ")\">
            </div>
        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "        <div class=\"no_technique\">Pas de technique de Taijutsu pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Taijutsu_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        <h1>Techniques de Genjutsu</h1>
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Genjutsu_loop", [], "any", false, false, false, 49));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Genjutsu_loop"]) {
            // line 50
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 51);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 52
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Genjutsu"] ?? null), "loop", [], "any", false, false, false, 52), "FT_TECHNIQUE_RANK", [], "any", false, false, false, 52);
            echo "\">
            <div class=\"ft_genjutsu\">
                <div class=\"ft_technique_information\">";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 54);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 54);
            if (twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 54)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 54);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 54);
            echo "</div>
                <div class=\"ft_technique_description\">(";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_DAMAGE", [], "any", false, false, false, 55);
            echo " dégâts en PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_CHAKRA", [], "any", false, false, false, 55);
            echo " coût en PC) ";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 55);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 58
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 59
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 62
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyGenjutsu(";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "S_ROW_COUNT", [], "any", false, false, false, 62);
            echo ")\">
            </div>
        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "        <div class=\"no_technique\">Pas de technique de Genjutsu pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Genjutsu_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        <h1>Techniques Kekkei Genkai & Hiden</h1>
        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "KG_loop", [], "any", false, false, false, 69));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["KG_loop"]) {
            // line 70
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 71);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 72);
            echo "\">
            <div class=\"ft_kekkei\">
                <div class=\"ft_technique_information\">";
            // line 74
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 74);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 74);
            if (twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 74)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 74);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 74);
            echo "</div>
                <div class=\"ft_technique_description\">(";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_DAMAGE", [], "any", false, false, false, 75);
            echo " dégâts en PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_CHAKRA", [], "any", false, false, false, 75);
            echo " coût en PC) ";
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 75);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 78
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 79
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 82
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyKG(";
            echo twig_get_attribute($this->env, $this->source, $context["KG_loop"], "S_ROW_COUNT", [], "any", false, false, false, 82);
            echo ")\">
            </div>
        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 86
            echo "        <div class=\"no_technique\">Pas de technique de Kekkei Genkai pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['KG_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "
        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Hiden_loop", [], "any", false, false, false, 89));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["Hiden_loop"]) {
            // line 90
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 91
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 91);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 92
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 92);
            echo "\">
            <div class=\"ft_kekkei\">
                <div class=\"ft_technique_information\">";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 94);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 94);
            if (twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 94)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 94);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 94);
            echo "</div>
                <div class=\"ft_technique_description\">(";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_DAMAGE", [], "any", false, false, false, 95);
            echo " dégâts en PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_CHAKRA", [], "any", false, false, false, 95);
            echo " coût en PC) ";
            echo twig_get_attribute($this->env, $this->source, $context["Hiden_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 95);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 98
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 99
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 102
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyKG(";
            echo twig_get_attribute($this->env, $this->source, ($context["KG_loop"] ?? null), "S_ROW_COUNT", [], "any", false, false, false, 102);
            echo ")\">
            </div>
        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 106
            echo "        <div class=\"no_technique\">Pas de technique Hiden pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Hiden_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        <h1>Talents</h1>
        ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "ft_my_talents_loop", [], "any", false, false, false, 109));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ft_my_talents_loop"]) {
            // line 110
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_talent_callback\" data-refresh=\"true\">
            <div class=\"talents_container\">
                <input type=\"hidden\" name=\"talent_id\" value=\"";
            // line 112
            echo twig_get_attribute($this->env, $this->source, $context["ft_my_talents_loop"], "FT_TALENT_ID", [], "any", false, false, false, 112);
            echo "\">
                <strong>";
            // line 113
            echo twig_get_attribute($this->env, $this->source, $context["ft_my_talents_loop"], "FT_TALENT_TITLE", [], "any", false, false, false, 113);
            echo "</strong> ; ";
            echo twig_get_attribute($this->env, $this->source, $context["ft_my_talents_loop"], "FT_TALENT_DESCRIPTION", [], "any", false, false, false, 113);
            echo "
            </div>
            ";
            // line 115
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 116
                echo "            <div class=\"md_buttons\">
                <input class=\"ft_delete_button\" type=\"submit\" value=\"Supprimer le talent\" name=\"ft_delete_talent_button\">
            </div>
            ";
            }
            // line 120
            echo "        </form>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 122
            echo "        <div class=\"no_technique\">Pas de talent pour le moment !</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ft_my_talents_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "        ";
        if (($context["FT_IS_ADMIN"] ?? null)) {
            // line 125
            echo "        <h1>Ajout de talent</h1>
        <form method=\"post\" action=\"";
            // line 126
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"add_ft_talent_callback\" data-refresh=\"true\">
            <select name=\"add_ft_talent\" class=\"ft_block\">
                ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "ft_talents_loop", [], "any", false, false, false, 128));
            foreach ($context['_seq'] as $context["_key"] => $context["ft_talents_loop"]) {
                // line 129
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ft_talents_loop"], "FT_TALENT_ID", [], "any", false, false, false, 129);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["ft_talents_loop"], "FT_TALENT_TITLE", [], "any", false, false, false, 129);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ft_talents_loop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "            </select>
            <div class=\"md_buttons\">
                <input class=\"validate_ft_button\" type=\"submit\" value=\"Ajouter le talent\" name=\"add_ft_talent_button\">
            </div>
        </form>
        ";
        }
        // line 137
        echo "        <h1>Techniques en cours de validation</h1>
        ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_validate_loop", [], "any", false, false, false, 138));
        foreach ($context['_seq'] as $context["_key"] => $context["to_validate_loop"]) {
            // line 139
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"modify_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"modify_ft_id\" value=\"";
            // line 140
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 140);
            echo "\">
            <div class=\"modify_ft_lb\">Nom de la technique</div>
            <div class=\"modify_ft_infos\">";
            // line 142
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 142);
            if (twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 142)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 142);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 142);
            echo " - ";
            if ((twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_OFFENSIVE", [], "any", false, false, false, 142) == 1)) {
                echo "Offensive";
            } else {
                echo "Non offensive";
            }
            echo "</div>
            <input type=\"text\" value=\"";
            // line 143
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 143);
            echo "\" class=\"modify_ft_name\" name=\"modify_ft_name\">
            <select class=\"ft_block\" name=\"modify_cost\">
                <option value=\"light\" ";
            // line 145
            if ((twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_COST", [], "any", false, false, false, 145) == "light")) {
                echo "selected";
            }
            echo "</option>Léger</option>
                <option value=\"medium\" ";
            // line 146
            if ((twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_COST", [], "any", false, false, false, 146) == "medium")) {
                echo "selected";
            }
            echo ">Moyen</option>
                <option value=\"heavy\" ";
            // line 147
            if ((twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_COST", [], "any", false, false, false, 147) == "heavy")) {
                echo "selected";
            }
            echo ">Lourd</option>
            </select>
            <div class=\"modify_ft_lb\">Description</div>
            <textarea class=\"modify_ft_desc\" name=\"modify_ft_description\">";
            // line 150
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 150);
            echo "</textarea>
            <div class=\"md_buttons\">
                <input class=\"modify_ft_button\" type=\"submit\" name=\"modify_ft_button\" value=\"Enregistrer les modifications\">
                ";
            // line 153
            if (($context["FT_IS_ADMIN"] ?? null)) {
                echo "<input class=\"validate_ft_button\" type=\"submit\" value=\"Valider la technique\" name=\"ft_validate_button\">";
            }
            // line 154
            echo "            </div>
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_validate_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "        <h1>Création de technique</h1>
        ";
        // line 158
        if ((($context["FT_TECHNIQUES_TO_USE"] ?? null) > 0)) {
            // line 159
            echo "        <div id=\"new_tech_wrapper\">
            <div id=\"ft_stat\">Vous pouvez créer ";
            // line 160
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
            // line 162
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
            // line 173
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Katon") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Katon")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Katon"))) {
                echo "<option value=\"Katon\">Katon</option>";
            }
            // line 174
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Fûton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Fûton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Fûton"))) {
                echo "<option value=\"Fûton\">Fûton</option>";
            }
            // line 175
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Raiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Raiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Raiton"))) {
                echo "<option value=\"Raiton\">Raiton</option>";
            }
            // line 176
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Doton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Doton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Doton"))) {
                echo "<option value=\"Doton\">Doton</option>";
            }
            // line 177
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Suiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Suiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Suiton"))) {
                echo "<option value=\"Suiton\">Suiton</option>";
            }
            // line 178
            echo "                    ";
            if ((($context["FT_IROU_HEAL"] ?? null) || ($context["FT_IROU_POISON"] ?? null))) {
                echo "<option value=\"Irou Jutsu\">Irou Jutsu</option>";
            }
            // line 179
            echo "                    ";
            if ((($context["FT_FUIN_SEAL"] ?? null) || ($context["FT_FUIN_BARRER"] ?? null))) {
                echo "<option value=\"Fuinjutsu\">Fuinjutsu</option>";
            }
            // line 180
            echo "                    ";
            if (($context["FT_KUCHIYOSE"] ?? null)) {
                echo "<option>Kuchiyose</option>";
            }
            // line 181
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Senjutsu") || (($context["FT_SECOND_ELITE"] ?? null) == "Senjutsu"))) {
                echo "<option value=\"Senjutsu\">Senjutsu</option>";
            }
            // line 182
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Hiraishin") || (($context["FT_SECOND_ELITE"] ?? null) == "Hiraishin"))) {
                echo "<option value=\"Hiraishin\">Hiraishin</option>";
            }
            // line 183
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Jinton") || (($context["FT_SECOND_ELITE"] ?? null) == "Jinton"))) {
                echo "<option value=\"Jinton\">Jinton</option>";
            }
            // line 184
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Gyôton") || (($context["FT_SECOND_ELITE"] ?? null) == "Gyôton"))) {
                echo "<option value=\"Gyôton\">Gyôton</option>";
            }
            // line 185
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Kyôton") || (($context["FT_SECOND_ELITE"] ?? null) == "Kyôton"))) {
                echo "<option value=\"Kyôton\">Kyôton</option>";
            }
            // line 186
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Marque maudite") || (($context["FT_SECOND_ELITE"] ?? null) == "Marque maudite"))) {
                echo "<option value=\"Marque maudite\">Marque maudite</option>";
            }
            // line 187
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Manteau de chakra") || (($context["FT_SECOND_ELITE"] ?? null) == "Manteau de chakra"))) {
                echo "<option value=\"Manteau de chakra\">Manteau de chakra</option>";
            }
            // line 188
            echo "                </select>
                <select id=\"technique_hiden_type\" class=\"second_ft_select\" name=\"technique_hiden_type\">
                    <option value=\"\"></option>
                    ";
            // line 191
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Hitokugutsu") || (($context["FT_SECOND_ELITE"] ?? null) == "Hitokugutsu"))) {
                echo "<option value=\"Hitokugutsu\">Hitokugutsu</option>";
            }
            // line 192
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
            // line 208
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Mangekyô") || (($context["FT_SECOND_ELITE"] ?? null) == "Mangekyô"))) {
                echo "<option value=\"Mangekyô\">Mangekyô</option>";
            }
            // line 209
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Hashirama") || (($context["FT_SECOND_ELITE"] ?? null) == "Hashirama"))) {
                echo "<option value=\"Hashirama\">Hashirama</option>";
            }
            // line 210
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
            // line 233
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Hachimon") || (($context["FT_SECOND_ELITE"] ?? null) == "Hachimon"))) {
                echo "<option value=\"Hachimon\">Hachimon</option>";
            }
            // line 234
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Nintaijutsu") || (($context["FT_SECOND_ELITE"] ?? null) == "Nintaijutsu"))) {
                echo "<option value=\"Nintaijutsu\">Nintaijutsu</option>";
            }
            // line 235
            echo "                </select>
                <select id=\"technique_gj_type\" class=\"second_ft_select\" name=\"technique_gj_type\">
                    <option value=\"\"></option>
                    ";
            // line 238
            if (($context["FT_SIGHT"] ?? null)) {
                echo "<option value=\"Vue\">Vue</option>";
            }
            // line 239
            echo "                    ";
            if (($context["FT_SOUND"] ?? null)) {
                echo "<option value=\"Son\">Son</option>";
            }
            // line 240
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Illusions démoniaques") || (($context["FT_SECOND_ELITE"] ?? null) == "Illusions démoniaques"))) {
                echo "<option value=\"Illusions démoniaques\">Illusions démoniaques</option>";
            }
            // line 241
            echo "                </select>
                <select id=\"buki_ft_type\" class=\"second_type_select\" name=\"buki_ft_type\">
                    <option value=\"\"></option>
                    ";
            // line 244
            if ((((($context["FT_FIRST_WEAPON"] ?? null) == "Kenjutsu") || (($context["FT_SECOND_WEAPON"] ?? null) == "Kenjutsu")) || (($context["FT_THIRD_WEAPON"] ?? null) == "Kenjutsu"))) {
                echo "<option value=\"Kenjutsu\">Kenjutsu</option>";
            }
            // line 245
            echo "                    ";
            if ((((($context["FT_FIRST_WEAPON"] ?? null) == "Shurikenjutsu") || (($context["FT_SECOND_WEAPON"] ?? null) == "Shurikenjutsu")) || (($context["FT_THIRD_WEAPON"] ?? null) == "Shurikenjutsu"))) {
                echo "<option value=\"Shurikenjutsu\">Shurikenjutsu</option>";
            }
            // line 246
            echo "                    ";
            if ((((($context["FT_FIRST_WEAPON"] ?? null) == "Bôjutsu") || (($context["FT_SECOND_WEAPON"] ?? null) == "Bôjutsu")) || (($context["FT_THIRD_WEAPON"] ?? null) == "Bôjutsu"))) {
                echo "<option value=\"Bôjutsu\">Bôjutsu</option>";
            }
            // line 247
            echo "                    ";
            if ((((($context["FT_FIRST_WEAPON"] ?? null) == "Kyûjutsu") || (($context["FT_SECOND_WEAPON"] ?? null) == "Kyûjutsu")) || (($context["FT_THIRD_WEAPON"] ?? null) == "Kyûjutsu"))) {
                echo "<option value=\"Kyûjutsu\">Kyûjutsu</option>";
            }
            // line 248
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Lames de Chakra") || (($context["FT_SECOND_ELITE"] ?? null) == "Lames de Chakra"))) {
                echo "<option value=\"Lames de Chakra\">Lames de Chakra</option>";
            }
            // line 249
            echo "                </select>
                <select id=\"irou_jutsu_ft_type\" class=\"second_type_select\" name=\"irou_jutsu_ft_type\">
                    <option value=\"\"></option>
                    ";
            // line 252
            if (($context["FT_IROU_HEAL"] ?? null)) {
                echo "<option value=\"Soins\">Soins</option>";
            }
            // line 253
            echo "                    ";
            if (($context["FT_IROU_POISON"] ?? null)) {
                echo "<option value=\"Poisons\">Poisons</option>";
            }
            // line 254
            echo "                </select>
                <select id=\"fuinjutsu_ft_type\" class=\"second_type_select\" name=\"fuinjutsu_ft_type\">
                    <option value=\"\"></option>
                    ";
            // line 257
            if (($context["FT_FUIN_BARRER"] ?? null)) {
                echo "<option value=\"Barrières\">Barrières</option>";
            }
            // line 258
            echo "                    ";
            if (($context["FT_FUIN_SEAL"] ?? null)) {
                echo "<option value=\"Sceaux\">Sceaux</option>";
            }
            // line 259
            echo "                </select>
                <select id=\"technique_kg_rank\" class=\"third_ft_select\" name=\"technique_kg_rank\">
                    <option value=\"\"></option>
                    ";
            // line 262
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 263
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 264
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 265
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 266
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 267
            echo "                </select>
                <select id=\"technique_hiden_rank\" class=\"third_ft_select\" name=\"technique_hiden_rank\">
                    <option value=\"\"></option>
                    ";
            // line 270
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 271
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 272
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 273
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 274
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 275
            echo "                </select>
                <select id=\"technique_nj_rank\" class=\"third_ft_select\" name=\"technique_nj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 278
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 279
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 280
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 281
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 282
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 283
            echo "                </select>
                <select id=\"technique_tj_rank\" class=\"third_ft_select\" name=\"technique_tj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 286
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 287
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 288
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 289
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 290
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 291
            echo "                </select>
                <select id=\"technique_gj_rank\" class=\"third_ft_select\" name=\"technique_gj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 294
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 295
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 296
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 297
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 298
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 299
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
        // line 324
        echo "</div>

";
        // line 326
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "fiche_technique.html", 326)->display($context);
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
        return array (  1017 => 326,  1013 => 324,  986 => 299,  981 => 298,  976 => 297,  971 => 296,  966 => 295,  962 => 294,  957 => 291,  952 => 290,  947 => 289,  942 => 288,  937 => 287,  933 => 286,  928 => 283,  923 => 282,  918 => 281,  913 => 280,  908 => 279,  904 => 278,  899 => 275,  894 => 274,  889 => 273,  884 => 272,  879 => 271,  875 => 270,  870 => 267,  865 => 266,  860 => 265,  855 => 264,  850 => 263,  846 => 262,  841 => 259,  836 => 258,  832 => 257,  827 => 254,  822 => 253,  818 => 252,  813 => 249,  808 => 248,  803 => 247,  798 => 246,  793 => 245,  789 => 244,  784 => 241,  779 => 240,  774 => 239,  770 => 238,  765 => 235,  760 => 234,  756 => 233,  731 => 210,  726 => 209,  722 => 208,  704 => 192,  700 => 191,  695 => 188,  690 => 187,  685 => 186,  680 => 185,  675 => 184,  670 => 183,  665 => 182,  660 => 181,  655 => 180,  650 => 179,  645 => 178,  640 => 177,  635 => 176,  630 => 175,  625 => 174,  621 => 173,  607 => 162,  592 => 160,  589 => 159,  587 => 158,  584 => 157,  576 => 154,  572 => 153,  566 => 150,  558 => 147,  552 => 146,  546 => 145,  541 => 143,  525 => 142,  520 => 140,  515 => 139,  511 => 138,  508 => 137,  500 => 131,  489 => 129,  485 => 128,  480 => 126,  477 => 125,  474 => 124,  467 => 122,  461 => 120,  455 => 116,  453 => 115,  446 => 113,  442 => 112,  436 => 110,  431 => 109,  428 => 108,  421 => 106,  411 => 102,  406 => 99,  404 => 98,  394 => 95,  382 => 94,  377 => 92,  373 => 91,  368 => 90,  363 => 89,  360 => 88,  353 => 86,  343 => 82,  338 => 79,  336 => 78,  326 => 75,  314 => 74,  309 => 72,  305 => 71,  300 => 70,  295 => 69,  292 => 68,  285 => 66,  275 => 62,  270 => 59,  268 => 58,  258 => 55,  246 => 54,  241 => 52,  237 => 51,  232 => 50,  227 => 49,  224 => 48,  217 => 46,  207 => 42,  202 => 39,  200 => 38,  190 => 35,  178 => 34,  173 => 32,  169 => 31,  164 => 30,  159 => 29,  156 => 28,  149 => 26,  139 => 22,  134 => 19,  132 => 18,  122 => 15,  109 => 14,  104 => 12,  100 => 11,  95 => 10,  90 => 9,  86 => 7,  80 => 6,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fiche_technique.html", "");
    }
}
