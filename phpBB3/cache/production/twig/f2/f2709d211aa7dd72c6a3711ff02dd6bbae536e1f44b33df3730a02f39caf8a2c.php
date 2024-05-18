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

/* marionnettes.html */
class __TwigTemplate_86ed1c287dae3c43e0f787ebfa411a6d6f8b9665f63db0aed56966c001c76640 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "marionnettes.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        $asset_file = "marionnettes.js";
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
        echo "<div id=\"ft_name\" class=\"ft_invoc_title\">Fiche marionnettes humaines de ";
        echo ($context["KT_USERNAME"] ?? null);
        echo "</div>
<div id=\"ft_user\">
    <div id=\"um_links\">
        <a href=\"./fiche_technique.php?uid=";
        // line 6
        echo ($context["KT_USER_ID"] ?? null);
        echo "\">Retourner à la Fiche Technique</a>
    </div>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "marionnettes_loop", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["marionnettes_loop"]) {
            // line 9
            echo "        <div class=\"tech_invoc\">
        <h1>";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_NAME", [], "any", false, false, false, 10);
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 10);
            echo " (";
            echo twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_PV", [], "any", false, false, false, 10);
            echo " PV | ";
            echo twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_PC", [], "any", false, false, false, 10);
            echo " PC)</h1>
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "ktechniques_loop", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["ktechniques_loop"]) {
                // line 12
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_kt_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" value=\"";
                // line 13
                echo twig_get_attribute($this->env, $this->source, $context["ktechniques_loop"], "KT_TECH_ID", [], "any", false, false, false, 13);
                echo "\" name=\"kt_tech_id\">
            <div class=\"ft_ninjutsu\">
                <div class=\"ft_technique_information\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["ktechniques_loop"], "KT_TECH_NAME", [], "any", false, false, false, 15);
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["ktechniques_loop"], "KT_TECH_SUBTYPE", [], "any", false, false, false, 15);
                echo " - ";
                if (twig_get_attribute($this->env, $this->source, $context["ktechniques_loop"], "KT_TECH_SPE", [], "any", false, false, false, 15)) {
                    echo twig_get_attribute($this->env, $this->source, $context["ktechniques_loop"], "KT_TECH_SPE", [], "any", false, false, false, 15);
                    echo " - ";
                }
                echo "Rang ";
                echo twig_get_attribute($this->env, $this->source, $context["ktechniques_loop"], "KT_TECH_RANK", [], "any", false, false, false, 15);
                echo "</div>
                <div class=\"ft_technique_description\">(";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["ktechniques_loop"], "KT_TECH_DAMAGE", [], "any", false, false, false, 16);
                echo " dégâts en PV | ";
                echo twig_get_attribute($this->env, $this->source, $context["ktechniques_loop"], "KT_TECH_CHAKRA", [], "any", false, false, false, 16);
                echo " coût en PC) ";
                echo twig_get_attribute($this->env, $this->source, $context["ktechniques_loop"], "KT_TECH_DESCR", [], "any", false, false, false, 16);
                echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
                // line 19
                if (($context["KT_IS_ADMIN"] ?? null)) {
                    // line 20
                    echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyInvoc(";
                    // line 22
                    echo twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "S_ROW_COUNT", [], "any", false, false, false, 22);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["ktechniques_loop"], "S_ROW_COUNT", [], "any", false, false, false, 22);
                    echo ")\">
                ";
                }
                // line 24
                echo "            </div>
        </form>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ktechniques_loop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "kvtechniques_loop", [], "any", false, false, false, 27));
            foreach ($context['_seq'] as $context["_key"] => $context["kvtechniques_loop"]) {
                // line 28
                echo "        <form method=\"post\" action=\"";
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"modify_kt_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"modify_ft_id\" value=\"";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["kvtechniques_loop"], "KTV_TECH_ID", [], "any", false, false, false, 29);
                echo "\">
            <div class=\"modify_ft_lb\">Nom de la technique</div>
            <div class=\"modify_ft_infos\">";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["kvtechniques_loop"], "KTV_TECH_SUBTYPE", [], "any", false, false, false, 31);
                if (twig_get_attribute($this->env, $this->source, $context["kvtechniques_loop"], "KTV_TECH_SPE", [], "any", false, false, false, 31)) {
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["kvtechniques_loop"], "KTV_TECHNIQUE_SPE", [], "any", false, false, false, 31);
                }
                echo " - Rang ";
                echo twig_get_attribute($this->env, $this->source, $context["kvtechniques_loop"], "KTV_TECH_RANK", [], "any", false, false, false, 31);
                echo " - ";
                if ((twig_get_attribute($this->env, $this->source, $context["kvtechniques_loop"], "KTV_TECH_OFFENSIVE", [], "any", false, false, false, 31) == 1)) {
                    echo "Offensive";
                } else {
                    echo "Non offensive";
                }
                echo "</div>
            <input type=\"text\" value=\"";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["kvtechniques_loop"], "KTV_TECH_NAME", [], "any", false, false, false, 32);
                echo "\" class=\"modify_ft_name\" name=\"modify_ft_name\">
            <div class=\"modify_ft_lb\">Description</div>
            <textarea class=\"modify_ft_desc\" name=\"modify_ft_description\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["kvtechniques_loop"], "KTV_TECH_DESCR", [], "any", false, false, false, 34);
                echo "</textarea>
            <div class=\"md_buttons\">
                <input class=\"modify_ft_button\" type=\"submit\" name=\"modify_ft_button\" value=\"Enregistrer les modifications\">
                ";
                // line 37
                if (($context["KT_IS_ADMIN"] ?? null)) {
                    echo "<input class=\"validate_ft_button\" type=\"submit\" value=\"Valider la technique\" name=\"ft_validate_button\">";
                }
                // line 38
                echo "            </div>
        </form>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kvtechniques_loop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_CAN_CREATE", [], "any", false, false, false, 41)) {
                // line 42
                echo "            <div class=\"new_tech_wrapper\">
                <h1>Création de technique</h1>
                <form id=\"new_technique_form\" method=\"post\" action=\"";
                // line 44
                echo ($context["U_ACTION"] ?? null);
                echo "\" accept-charset=\"utf-8\" data-ajax=\"new_technique_callback\" data-refresh=\"true\">
                    <input type=\"hidden\" value=\"";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_ID", [], "any", false, false, false, 45);
                echo "\" name=\"marionnette_new_tech_id\">
                    <input type=\"hidden\" value=\"";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_NAME", [], "any", false, false, false, 46);
                echo "\" name=\"marionnette_new_tech_name\">
                    <input type=\"hidden\" value=\"";
                // line 47
                echo twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 47);
                echo "\" name=\"marionnette_new_tech_rank\">
                    <select class=\"first_ft_select\" name=\"first_ft_select\" onchange=\"changeSelect(this);\" id=\"";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "S_ROW_COUNT", [], "any", false, false, false, 48);
                echo "\">
                        <option value=\"\"></option>
                        ";
                // line 50
                if (((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 50) == "Katon") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 50))) {
                    echo "<option value=\"Katon\">Katon</option>";
                }
                // line 51
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 51) == "Suiton") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 51))) {
                    echo "<option value=\"Suiton\">Suiton</option>";
                }
                // line 52
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 52) == "Fûton") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 52))) {
                    echo "<option value=\"Fûton\">Fûton</option>";
                }
                // line 53
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 53) == "Doton") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 53))) {
                    echo "<option value=\"Doton\">Doton</option>";
                }
                // line 54
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 54) == "Raiton") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 54))) {
                    echo "<option value=\"Katon\">Raiton</option>";
                }
                // line 55
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 55) == "Irou Jutsu") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 55))) {
                    echo "<option value=\"Irou Jutsu\">Irou Jutsu</option>";
                }
                // line 56
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 56) == "Fuinjutsu") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 56))) {
                    echo "<option value=\"Fuinjutsu\">Fuinjutsu</option>";
                }
                // line 57
                echo "                        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 57) == "Hyôton") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 57)) && (twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 57) == "S"))) {
                    echo "<option value=\"Hyôton\">Hyôton</option>";
                }
                // line 58
                echo "                        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 58) == "Yôton") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 58)) && (twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 58) == "S"))) {
                    echo "<option value=\"Yôton\">Yôton</option>";
                }
                // line 59
                echo "                        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 59) == "Mokuton") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 59)) && (twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 59) == "S"))) {
                    echo "<option value=\"Mokuton\">Mokuton</option>";
                }
                // line 60
                echo "                        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 60) == "Ranton") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 60)) && (twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 60) == "S"))) {
                    echo "<option value=\"Ranton\">Ranton</option>";
                }
                // line 61
                echo "                        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 61) == "Futton") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 61)) && (twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 61) == "S"))) {
                    echo "<option value=\"Futton\">Futton</option>";
                }
                // line 62
                echo "                        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 62) == "Bakuton") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 62)) && (twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 62) == "S"))) {
                    echo "<option value=\"Bakuton\">Bakuton</option>";
                }
                // line 63
                echo "                        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 63) == "Shakuton") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 63)) && (twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 63) == "S"))) {
                    echo "<option value=\"Shakuton\">Shakuton</option>";
                }
                // line 64
                echo "                        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 64) == "Jinton") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TYPE", [], "any", false, false, false, 64)) && (twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 64) == "S"))) {
                    echo "<option value=\"Jiton\">Jiton</option>";
                }
                // line 65
                echo "                    </select>
                    <select class=\"second_type_select fuinjutsu_ft_type\" name=\"fuinjutsu_ft_type\" onchange=\"secondChangeSelect(this);\">
                        <option value=\"\"></option>
                        ";
                // line 68
                if (((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_SPE", [], "any", false, false, false, 68) == "Barrières") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_SPE", [], "any", false, false, false, 68))) {
                    echo "<option value=\"Barrières\">Barrières</option>";
                }
                // line 69
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_SPE", [], "any", false, false, false, 69) == "Sceaux") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_SPE", [], "any", false, false, false, 69))) {
                    echo "<option value=\"Sceaux\">Sceaux</option>";
                }
                // line 70
                echo "                    </select>
                    <select class=\"second_type_select irou_jutsu_ft_type\" name=\"irou_jutsu_ft_type\" onchange=\"secondChangeSelect(this);\">
                        <option value=\"\"></option>
                        ";
                // line 73
                if (((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_SPE", [], "any", false, false, false, 73) == "Soins") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_SPE", [], "any", false, false, false, 73))) {
                    echo "<option value=\"Soins\">Soins</option>";
                }
                // line 74
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_SPE", [], "any", false, false, false, 74) == "Poisons") ||  !twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_SPE", [], "any", false, false, false, 74))) {
                    echo "<option value=\"Poisons\">Poisons</option>";
                }
                // line 75
                echo "                    </select>
                    <select class=\"rank_select\" name=\"rank_select\" onchange=\"rankSelect(this);\">
                        <option value=\"\"></option>
                        <option value=\"D\">D</option>
                        ";
                // line 79
                if (((((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 79) == "S") || (twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 79) == "A")) || (twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 79) == "B")) || (twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 79) == "C"))) {
                    echo "<option value=\"C\">C</option>";
                }
                // line 80
                echo "                        ";
                if ((((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 80) == "S") || (twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 80) == "A")) || (twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 80) == "B"))) {
                    echo "<option value=\"B\">B</option>";
                }
                // line 81
                echo "                        ";
                if (((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 81) == "S") || (twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 81) == "A"))) {
                    echo "<option value=\"A\">A</option>";
                }
                // line 82
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["marionnettes_loop"], "KT_TECHNIQUE_RANK", [], "any", false, false, false, 82) == "S")) {
                    echo "<option value=\"S\">S</option>";
                }
                // line 83
                echo "                    </select>
                    <div class=\"tech_infos\">
                        <div class=\"create_ft_lb\">Nom de la technique</div>
                        <input type=\"text\" class=\"new_tech\" name=\"new_ft_name\">
                        <div class=\"create_ft_lb\">Technique offensive ?</div>
                        <div class=\"no_technique ft_block\">Si non, elle n'infligera pas de dégâts directs</div>
                        <div class=\"ft_block ft_radio\">
                            <input type=\"radio\" name=\"new_ft_offensive\" value=\"offensive\" checked/>
                            <label for=\"offensive\">Oui</label>
                            <input type=\"radio\" name=\"new_ft_offensive\" value=\"other\">
                            <label for=\"other\">Non</label>
                        </div>
                        <div class=\"create_ft_lb\">Description de la technique</div>
                        <textarea class=\"new_ft_technique\" name=\"new_ft_technique\"></textarea>
                        <input type=\"submit\" class=\"create_technique\" name=\"create_tech_button\" value=\"Créer la technique\">
                    </div>
                </form>
            </div>
        ";
            }
            // line 102
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marionnettes_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "</div>

";
        // line 106
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "marionnettes.html", 106)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "marionnettes.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 106,  387 => 104,  380 => 102,  359 => 83,  354 => 82,  349 => 81,  344 => 80,  340 => 79,  334 => 75,  329 => 74,  325 => 73,  320 => 70,  315 => 69,  311 => 68,  306 => 65,  301 => 64,  296 => 63,  291 => 62,  286 => 61,  281 => 60,  276 => 59,  271 => 58,  266 => 57,  261 => 56,  256 => 55,  251 => 54,  246 => 53,  241 => 52,  236 => 51,  232 => 50,  227 => 48,  223 => 47,  219 => 46,  215 => 45,  211 => 44,  207 => 42,  204 => 41,  196 => 38,  192 => 37,  186 => 34,  181 => 32,  165 => 31,  160 => 29,  155 => 28,  150 => 27,  142 => 24,  135 => 22,  131 => 20,  129 => 19,  119 => 16,  106 => 15,  101 => 13,  96 => 12,  92 => 11,  82 => 10,  79 => 9,  75 => 8,  70 => 6,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "marionnettes.html", "");
    }
}
