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
        echo "<div id=\"ft_name\" style=\"background-color: #";
        echo ($context["FT_COLOUR"] ?? null);
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
                    <option value=\"Universelle\">Universelle</option>
                    ";
            // line 175
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Katon") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Katon")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Katon"))) {
                echo "<option value=\"Katon\">Katon</option>";
            }
            // line 176
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Fûton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Fûton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Fûton"))) {
                echo "<option value=\"Fûton\">Fûton</option>";
            }
            // line 177
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Raiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Raiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Raiton"))) {
                echo "<option value=\"Raiton\">Raiton</option>";
            }
            // line 178
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Doton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Doton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Doton"))) {
                echo "<option value=\"Doton\">Doton</option>";
            }
            // line 179
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Suiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Suiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Suiton"))) {
                echo "<option value=\"Suiton\">Suiton</option>";
            }
            // line 180
            echo "                    ";
            if ((($context["FT_IROU_HEAL"] ?? null) || ($context["FT_IROU_POISON"] ?? null))) {
                echo "<option value=\"Irou Jutsu\">Irou Jutsu</option>";
            }
            // line 181
            echo "                    ";
            if ((($context["FT_FUIN_SEAL"] ?? null) || ($context["FT_FUIN_BARRER"] ?? null))) {
                echo "<option value=\"Fuinjutsu\">Fuinjutsu</option>";
            }
            // line 182
            echo "                    ";
            if (($context["FT_KUCHIYOSE"] ?? null)) {
                echo "<option>Kuchiyose</option>";
            }
            // line 183
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Senjutsu") || (($context["FT_SECOND_ELITE"] ?? null) == "Senjutsu"))) {
                echo "<option value=\"Senjutsu\">Senjutsu</option>";
            }
            // line 184
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Hiraishin") || (($context["FT_SECOND_ELITE"] ?? null) == "Hiraishin"))) {
                echo "<option value=\"Hiraishin\">Hiraishin</option>";
            }
            // line 185
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Jinton") || (($context["FT_SECOND_ELITE"] ?? null) == "Jinton"))) {
                echo "<option value=\"Jinton\">Jinton</option>";
            }
            // line 186
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Gyôton") || (($context["FT_SECOND_ELITE"] ?? null) == "Gyôton"))) {
                echo "<option value=\"Gyôton\">Gyôton</option>";
            }
            // line 187
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Kyôton") || (($context["FT_SECOND_ELITE"] ?? null) == "Kyôton"))) {
                echo "<option value=\"Kyôton\">Kyôton</option>";
            }
            // line 188
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Marque maudite") || (($context["FT_SECOND_ELITE"] ?? null) == "Marque maudite"))) {
                echo "<option value=\"Marque maudite\">Marque maudite</option>";
            }
            // line 189
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Manteau de chakra") || (($context["FT_SECOND_ELITE"] ?? null) == "Manteau de chakra"))) {
                echo "<option value=\"Manteau de chakra\">Manteau de chakra</option>";
            }
            // line 190
            echo "                </select>
                <select id=\"technique_hiden_type\" class=\"second_ft_select\" name=\"technique_hiden_type\">
                    <option value=\"\"></option>
                    ";
            // line 193
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Hitokugutsu") || (($context["FT_SECOND_ELITE"] ?? null) == "Hitokugutsu"))) {
                echo "<option value=\"Hitokugutsu\">Hitokugutsu</option>";
            }
            // line 194
            echo "                    ";
            if (((($context["FT_FIRST_HIDEN"] ?? null) == "Kugutsu") || (($context["FT_SECOND_HIDEN"] ?? null) == "Kugutsu"))) {
                echo "<option value=\"Kugutsu\">Kugutsu</option>";
            }
            // line 195
            echo "                    ";
            if (((($context["FT_FIRST_HIDEN"] ?? null) == "Mental") || (($context["FT_SECOND_HIDEN"] ?? null) == "Mental"))) {
                echo "<option value=\"Mental\">Mental</option>";
            }
            // line 196
            echo "                    ";
            if (((($context["FT_FIRST_HIDEN"] ?? null) == "Contrôle du corps") || (($context["FT_SECOND_HIDEN"] ?? null) == "Contrôle du corps"))) {
                echo "<option value=\"Contrôle du corps\">Contrôle du corps</option>";
            }
            // line 197
            echo "                    ";
            if (((($context["FT_FIRST_HIDEN"] ?? null) == "Ombres") || (($context["FT_SECOND_HIDEN"] ?? null) == "Ombres"))) {
                echo "<option value=\"Ombres\">Ombres</option>";
            }
            // line 198
            echo "                    ";
            if (((($context["FT_FIRST_HIDEN"] ?? null) == "Chaînes et soins") || (($context["FT_SECOND_HIDEN"] ?? null) == "Chaînes et soins"))) {
                echo "<option value=\"Chaînes\">Chaînes et soins</option>";
            }
            // line 199
            echo "                    ";
            if (((($context["FT_FIRST_HIDEN"] ?? null) == "Seijutsu") || (($context["FT_SECOND_HIDEN"] ?? null) == "Seijutsu"))) {
                echo "<option value=\"Seijutsu\">Seijutsu</option>";
            }
            // line 200
            echo "                    ";
            if (((($context["FT_FIRST_HIDEN"] ?? null) == "Torijutsu") || (($context["FT_SECOND_HIDEN"] ?? null) == "Torijutsu"))) {
                echo "<option value=\"Torijutsu\">Torijutsu</option>";
            }
            // line 201
            echo "                    ";
            if (((($context["FT_FIRST_HIDEN"] ?? null) == "Hachijutsu") || (($context["FT_SECOND_HIDEN"] ?? null) == "Hachijutsu"))) {
                echo "<option value=\"Hachijutsu\">Hachijutsu</option>";
            }
            // line 202
            echo "                    ";
            if (((($context["FT_FIRST_HIDEN"] ?? null) == "Modification corporelle") || (($context["FT_SECOND_HIDEN"] ?? null) == "Modification corporelle"))) {
                echo "<option value=\"Modification corporelle\">Modification corporelle</option>";
            }
            // line 203
            echo "                    ";
            if (((($context["FT_FIRST_HIDEN"] ?? null) == "Chiens") || (($context["FT_SECOND_HIDEN"] ?? null) == "Chiens"))) {
                echo "<option value=\"Chiens\">Chiens</option>";
            }
            // line 204
            echo "                    ";
            if (((($context["FT_FIRST_HIDEN"] ?? null) == "Chats") || (($context["FT_SECOND_HIDEN"] ?? null) == "Chats"))) {
                echo "<option value=\"Chats\">Chats</option>";
            }
            // line 205
            echo "                    ";
            if (((($context["FT_FIRST_HIDEN"] ?? null) == "Insectes") || (($context["FT_SECOND_HIDEN"] ?? null) == "Insectes"))) {
                echo "<option value=\"Insectes\">Insectes</option>";
            }
            // line 206
            echo "                    ";
            if (((($context["FT_FIRST_HIDEN"] ?? null) == "Jûken") || (($context["FT_SECOND_HIDEN"] ?? null) == "Jûken"))) {
                echo "<option value=\"Jûken\">Jûken</option>";
            }
            // line 207
            echo "                    ";
            if (((($context["FT_FIRST_HIDEN"] ?? null) == "Liquéfaction") || (($context["FT_SECOND_HIDEN"] ?? null) == "Liquéfaction"))) {
                echo "<option value=\"Liquéfaction\">Liquéfaction</option>";
            }
            // line 208
            echo "                </select>
                <select id=\"technique_kg_type\" class=\"second_ft_select\" name=\"technique_kg_type\">
                    <option value=\"\"></option>
                    ";
            // line 211
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Mangekyô") || (($context["FT_SECOND_ELITE"] ?? null) == "Mangekyô"))) {
                echo "<option value=\"Mangekyô\">Mangekyô</option>";
            }
            // line 212
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Hashirama") || (($context["FT_SECOND_ELITE"] ?? null) == "Hashirama"))) {
                echo "<option value=\"Hashirama\">Hashirama</option>";
            }
            // line 213
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Sharingan") || (($context["FT_SECOND_KG"] ?? null) == "Sharingan"))) {
                echo "<option value=\"Sharingan\">Sharingan</option>";
            }
            // line 214
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Mokuton") || (($context["FT_SECOND_KG"] ?? null) == "Mokuton"))) {
                echo "<option value=\"Mokuton\">Mokuton</option>";
            }
            // line 215
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Byakugan") || (($context["FT_SECOND_KG"] ?? null) == "Byakugan"))) {
                echo "<option value=\"Byakugan\">Byakugan</option>";
            }
            // line 216
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Shikotsumyaku") || (($context["FT_SECOND_KG"] ?? null) == "Shikotsumyaku"))) {
                echo "<option value=\"Shikotsumyaku\">Shikotsumyaku</option>";
            }
            // line 217
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Hyôton") || (($context["FT_SECOND_KG"] ?? null) == "Hyôton"))) {
                echo "<option value=\"Hyôton\">Hyôton</option>";
            }
            // line 218
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Futton") || (($context["FT_SECOND_KG"] ?? null) == "Futton"))) {
                echo "<option value=\"Futton\">Futton</option>";
            }
            // line 219
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Jiton") || (($context["FT_SECOND_KG"] ?? null) == "Jiton"))) {
                echo "<option value=\"Jiton\">Jiton</option>";
            }
            // line 220
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Shakuton") || (($context["FT_SECOND_KG"] ?? null) == "Shakuton"))) {
                echo "<option value=\"Shakuton\">Shakuton</option>";
            }
            // line 221
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Yoton") || (($context["FT_SECOND_KG"] ?? null) == "Yoton"))) {
                echo "<option value=\"Yoton\">Yoton</option>";
            }
            // line 222
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Fuuton") || (($context["FT_SECOND_KG"] ?? null) == "Fuuton"))) {
                echo "<option value=\"Fuuton\">Fuuton</option>";
            }
            // line 223
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Bakuton") || (($context["FT_SECOND_KG"] ?? null) == "Bakuton"))) {
                echo "<option value=\"Bakuton\">Bakuton</option>";
            }
            // line 224
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Shôton") || (($context["FT_SECOND_KG"] ?? null) == "Shôton"))) {
                echo "<option value=\"Shôton\">Shôton</option>";
            }
            // line 225
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Shouraigan") || (($context["FT_SECOND_KG"] ?? null) == "Shouraigan"))) {
                echo "<option value=\"Shouraigan\">Shouraigan</option>";
            }
            // line 226
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Ketsuryugan") || (($context["FT_SECOND_KG"] ?? null) == "Ketsuryugan"))) {
                echo "<option value=\"Ketsuryugan\">Ketsuryugan</option>";
            }
            // line 227
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Ranton") || (($context["FT_SECOND_KG"] ?? null) == "Ranton"))) {
                echo "<option value=\"Ranton\">Ranton</option>";
            }
            // line 228
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Shokuton") || (($context["FT_SECOND_KG"] ?? null) == "Shokuton"))) {
                echo "<option value=\"Shokuton\">Shokuton</option>";
            }
            // line 229
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Kôton") || (($context["FT_SECOND_KG"] ?? null) == "Kôton"))) {
                echo "<option value=\"Kôton\">Kôton</option>";
            }
            // line 230
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Meiton") || (($context["FT_SECOND_KG"] ?? null) == "Meiton"))) {
                echo "<option value=\"Meiton\">Meiton</option>";
            }
            // line 231
            echo "                    ";
            if (((($context["FT_FIRST_KG"] ?? null) == "Kikeijutsu") || (($context["FT_SECOND_KG"] ?? null) == "Kikeijutsu"))) {
                echo "<option value=\"Meiton\">Kikeijutsu</option>";
            }
            // line 232
            echo "                </select>
                <select id=\"technique_tj_type\" class=\"second_ft_select\" name=\"technique_tj_type\">
                    <option value=\"\"></option>
                    <option value=\"Gôken\">Gôken</option>
                    <option value=\"Bukijutsu\">Bukijutsu</option>
                    ";
            // line 237
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Hachimon") || (($context["FT_SECOND_ELITE"] ?? null) == "Hachimon"))) {
                echo "<option value=\"Hachimon\">Hachimon</option>";
            }
            // line 238
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Nintaijutsu") || (($context["FT_SECOND_ELITE"] ?? null) == "Nintaijutsu"))) {
                echo "<option value=\"Nintaijutsu\">Nintaijutsu</option>";
            }
            // line 239
            echo "                </select>
                <select id=\"technique_gj_type\" class=\"second_ft_select\" name=\"technique_gj_type\">
                    <option value=\"\"></option>
                    ";
            // line 242
            if (($context["FT_SIGHT"] ?? null)) {
                echo "<option value=\"Vue\">Vue</option>";
            }
            // line 243
            echo "                    ";
            if (($context["FT_SOUND"] ?? null)) {
                echo "<option value=\"Son\">Son</option>";
            }
            // line 244
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Illusions démoniaques") || (($context["FT_SECOND_ELITE"] ?? null) == "Illusions démoniaques"))) {
                echo "<option value=\"Illusions démoniaques\">Illusions démoniaques</option>";
            }
            // line 245
            echo "                </select>
                <select id=\"buki_ft_type\" class=\"second_type_select\" name=\"buki_ft_type\">
                    <option value=\"\"></option>
                    ";
            // line 248
            if ((((($context["FT_FIRST_WEAPON"] ?? null) == "Kenjutsu") || (($context["FT_SECOND_WEAPON"] ?? null) == "Kenjutsu")) || (($context["FT_THIRD_WEAPON"] ?? null) == "Kenjutsu"))) {
                echo "<option value=\"Kenjutsu\">Kenjutsu</option>";
            }
            // line 249
            echo "                    ";
            if ((((($context["FT_FIRST_WEAPON"] ?? null) == "Shurikenjutsu") || (($context["FT_SECOND_WEAPON"] ?? null) == "Shurikenjutsu")) || (($context["FT_THIRD_WEAPON"] ?? null) == "Shurikenjutsu"))) {
                echo "<option value=\"Shurikenjutsu\">Shurikenjutsu</option>";
            }
            // line 250
            echo "                    ";
            if ((((($context["FT_FIRST_WEAPON"] ?? null) == "Bôjutsu") || (($context["FT_SECOND_WEAPON"] ?? null) == "Bôjutsu")) || (($context["FT_THIRD_WEAPON"] ?? null) == "Bôjutsu"))) {
                echo "<option value=\"Bôjutsu\">Bôjutsu</option>";
            }
            // line 251
            echo "                    ";
            if ((((($context["FT_FIRST_WEAPON"] ?? null) == "Kyûjutsu") || (($context["FT_SECOND_WEAPON"] ?? null) == "Kyûjutsu")) || (($context["FT_THIRD_WEAPON"] ?? null) == "Kyûjutsu"))) {
                echo "<option value=\"Kyûjutsu\">Kyûjutsu</option>";
            }
            // line 252
            echo "                    ";
            if (((($context["FT_FIRST_ELITE"] ?? null) == "Lames de Chakra") || (($context["FT_SECOND_ELITE"] ?? null) == "Lames de Chakra"))) {
                echo "<option value=\"Lames de Chakra\">Lames de Chakra</option>";
            }
            // line 253
            echo "                </select>
                <select id=\"irou_jutsu_ft_type\" class=\"second_type_select\" name=\"irou_jutsu_ft_type\">
                    <option value=\"\"></option>
                    ";
            // line 256
            if (($context["FT_IROU_HEAL"] ?? null)) {
                echo "<option value=\"Soins\">Soins</option>";
            }
            // line 257
            echo "                    ";
            if (($context["FT_IROU_POISON"] ?? null)) {
                echo "<option value=\"Poisons\">Poisons</option>";
            }
            // line 258
            echo "                </select>
                <select id=\"fuinjutsu_ft_type\" class=\"second_type_select\" name=\"fuinjutsu_ft_type\">
                    <option value=\"\"></option>
                    ";
            // line 261
            if (($context["FT_FUIN_BARRER"] ?? null)) {
                echo "<option value=\"Barrières\">Barrières</option>";
            }
            // line 262
            echo "                    ";
            if (($context["FT_FUIN_SEAL"] ?? null)) {
                echo "<option value=\"Sceaux\">Sceaux</option>";
            }
            // line 263
            echo "                </select>
                <select id=\"technique_kg_rank\" class=\"third_ft_select\" name=\"technique_kg_rank\">
                    <option value=\"\"></option>
                    ";
            // line 266
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 267
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 268
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 269
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 270
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 271
            echo "                </select>
                <select id=\"technique_hiden_rank\" class=\"third_ft_select\" name=\"technique_hiden_rank\">
                    <option value=\"\"></option>
                    ";
            // line 274
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 275
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 276
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 277
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 278
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 279
            echo "                </select>
                <select id=\"technique_nj_rank\" class=\"third_ft_select\" name=\"technique_nj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 282
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 283
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 284
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 285
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 286
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 287
            echo "                </select>
                <select id=\"technique_tj_rank\" class=\"third_ft_select\" name=\"technique_tj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 290
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 291
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 292
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 293
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 294
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 295
            echo "                </select>
                <select id=\"technique_gj_rank\" class=\"third_ft_select\" name=\"technique_gj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 298
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 299
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 300
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 301
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 302
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 303
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
        // line 328
        echo "</div>

";
        // line 330
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "fiche_technique.html", 330)->display($context);
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
        return array (  1151 => 330,  1147 => 328,  1120 => 303,  1115 => 302,  1110 => 301,  1105 => 300,  1100 => 299,  1096 => 298,  1091 => 295,  1086 => 294,  1081 => 293,  1076 => 292,  1071 => 291,  1067 => 290,  1062 => 287,  1057 => 286,  1052 => 285,  1047 => 284,  1042 => 283,  1038 => 282,  1033 => 279,  1028 => 278,  1023 => 277,  1018 => 276,  1013 => 275,  1009 => 274,  1004 => 271,  999 => 270,  994 => 269,  989 => 268,  984 => 267,  980 => 266,  975 => 263,  970 => 262,  966 => 261,  961 => 258,  956 => 257,  952 => 256,  947 => 253,  942 => 252,  937 => 251,  932 => 250,  927 => 249,  923 => 248,  918 => 245,  913 => 244,  908 => 243,  904 => 242,  899 => 239,  894 => 238,  890 => 237,  883 => 232,  878 => 231,  873 => 230,  868 => 229,  863 => 228,  858 => 227,  853 => 226,  848 => 225,  843 => 224,  838 => 223,  833 => 222,  828 => 221,  823 => 220,  818 => 219,  813 => 218,  808 => 217,  803 => 216,  798 => 215,  793 => 214,  788 => 213,  783 => 212,  779 => 211,  774 => 208,  769 => 207,  764 => 206,  759 => 205,  754 => 204,  749 => 203,  744 => 202,  739 => 201,  734 => 200,  729 => 199,  724 => 198,  719 => 197,  714 => 196,  709 => 195,  704 => 194,  700 => 193,  695 => 190,  690 => 189,  685 => 188,  680 => 187,  675 => 186,  670 => 185,  665 => 184,  660 => 183,  655 => 182,  650 => 181,  645 => 180,  640 => 179,  635 => 178,  630 => 177,  625 => 176,  621 => 175,  606 => 163,  591 => 161,  588 => 160,  586 => 159,  583 => 158,  575 => 155,  571 => 154,  565 => 151,  557 => 148,  551 => 147,  545 => 146,  540 => 144,  524 => 143,  519 => 141,  514 => 140,  510 => 139,  507 => 138,  499 => 132,  488 => 130,  484 => 129,  479 => 127,  476 => 126,  473 => 125,  466 => 123,  460 => 121,  454 => 117,  452 => 116,  445 => 114,  441 => 113,  435 => 111,  430 => 110,  427 => 109,  420 => 107,  410 => 103,  405 => 100,  403 => 99,  393 => 96,  381 => 95,  376 => 93,  372 => 92,  367 => 91,  362 => 90,  359 => 89,  352 => 87,  342 => 83,  337 => 80,  335 => 79,  325 => 76,  313 => 75,  308 => 73,  304 => 72,  299 => 71,  294 => 70,  291 => 69,  284 => 67,  274 => 63,  269 => 60,  267 => 59,  257 => 56,  245 => 55,  240 => 53,  236 => 52,  231 => 51,  226 => 50,  223 => 49,  216 => 47,  206 => 43,  201 => 40,  199 => 39,  189 => 36,  177 => 35,  172 => 33,  168 => 32,  163 => 31,  158 => 30,  155 => 29,  148 => 27,  138 => 23,  133 => 20,  131 => 19,  121 => 16,  108 => 15,  103 => 13,  99 => 12,  94 => 11,  89 => 10,  85 => 8,  78 => 7,  72 => 6,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fiche_technique.html", "");
    }
}
