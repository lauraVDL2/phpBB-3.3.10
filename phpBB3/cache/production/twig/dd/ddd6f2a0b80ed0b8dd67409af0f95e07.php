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
class __TwigTemplate_be9ea3027a22d8ec2da02b0f66e2321e extends \Twig\Template
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
        echo "<head>
    <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"./styles/prosilver/template/fiche_technique.js\"></script>
    <link href=\"./styles/prosilver/theme/stylesheet.css\" rel=\"stylesheet\">
</head>
<body>
<div id=\"ft_name\" class=\"";
        // line 8
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
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Ninjutsu_loop", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["Ninjutsu_loop"]) {
            // line 12
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 13);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 14
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Ninjutsu"] ?? null), "loop", [], "any", false, false, false, 14), "FT_TECHNIQUE_RANK", [], "any", false, false, false, 14);
            echo "\">
            <div class=\"ft_ninjutsu\">
                <div class=\"ft_technique_information\">";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 16);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 16);
            echo " -";
            if (twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 16)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 16);
            }
            echo " Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 16);
            echo "</div>
                <div class=\"ft_technique_description\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 17);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 20
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 21
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 24
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyNinjutsu(";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "S_ROW_COUNT", [], "any", false, false, false, 24);
            echo ")\">
            </div>
        </form>
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
                <div class=\"ft_technique_description\">";
            // line 35
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
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Taijutsu_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        <h1>Techniques de Genjutsu</h1>
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Genjutsu_loop", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["Genjutsu_loop"]) {
            // line 48
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 49);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 50
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Genjutsu"] ?? null), "loop", [], "any", false, false, false, 50), "FT_TECHNIQUE_RANK", [], "any", false, false, false, 50);
            echo "\">
            <div class=\"ft_genjutsu\">
                <div class=\"ft_technique_information\">";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 52);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 52);
            if (twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 52)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 52);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 52);
            echo "</div>
                <div class=\"ft_technique_description\">";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 53);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 56
            if (($context["FT_IS_ADMIN"] ?? null)) {
                // line 57
                echo "                    <input type=\"submit\" class=\"ft_md_button\" name=\"ft_md_button\" value=\"Repasser en modification\">
                    <input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">
                ";
            }
            // line 60
            echo "                    <input type=\"button\" class=\"ft_copy_button\" value=\"Copier la technique\" onclick=\"copyGenjutsu(";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "S_ROW_COUNT", [], "any", false, false, false, 60);
            echo ")\">
            </div>
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Genjutsu_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        <h1>Techniques en cours de validation</h1>
        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_validate_loop", [], "any", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["to_validate_loop"]) {
            // line 66
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"modify_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"modify_ft_id\" value=\"";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 67);
            echo "\">
            <div class=\"modify_ft_lb\">Nom de la technique</div>
            <div class=\"modify_ft_infos\">";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 69);
            if (twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 69)) {
                echo " - ";
                echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SPE", [], "any", false, false, false, 69);
            }
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 69);
            echo "</div>
            <input type=\"text\" value=\"";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 70);
            echo "\" class=\"modify_ft_name\" name=\"modify_ft_name\">
            <div class=\"modify_ft_lb\">Description</div>
            <textarea class=\"modify_ft_desc\" name=\"modify_ft_description\">";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 72);
            echo "</textarea>
            <div class=\"md_buttons\">
                <input class=\"modify_ft_button\" type=\"submit\" name=\"modify_ft_button\" value=\"Enregistrer les modifications\">
                ";
            // line 75
            if (($context["FT_IS_ADMIN"] ?? null)) {
                echo "<input class=\"validate_ft_button\" type=\"submit\" value=\"Valider la technique\" name=\"ft_validate_button\">";
            }
            // line 76
            echo "            </div>
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_validate_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "        <h1>Création de technique</h1>
        ";
        // line 80
        if ((($context["FT_TECHNIQUES_TO_USE"] ?? null) > 0)) {
            // line 81
            echo "        <div id=\"new_tech_wrapper\">
            <div id=\"ft_stat\">Vous pouvez créer ";
            // line 82
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
            // line 84
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"new_technique_callback\" data-refresh=\"true\">
                <select id=\"first_ft_select\" name=\"first_ft_select\">
                    <option value=\"\"></option>
                    <option value=\"Ninjutsu\">Ninjutsu</option>
                    <option value=\"Taijutsu\">Taijutsu</option>
                    <option value=\"Genjutsu\">Genjutsu</option>
                </select>
                <select id=\"technique_nj_type\" class=\"second_ft_select\" name=\"technique_nj_type\">
                    <option value=\"\"></option>
                    ";
            // line 93
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Katon") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Katon")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Katon"))) {
                echo "<option value=\"Katon\">Katon</option>";
            }
            // line 94
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Fûton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Fûton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Fûton"))) {
                echo "<option value=\"Fûton\">Fûton</option>";
            }
            // line 95
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Raiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Raiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Raiton"))) {
                echo "<option value=\"Raiton\">Raiton</option>";
            }
            // line 96
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Doton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Doton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Doton"))) {
                echo "<option value=\"Doton\">Doton</option>";
            }
            // line 97
            echo "                    ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Suiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Suiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Suiton"))) {
                echo "<option value=\"Suiton\">Suiton</option>";
            }
            // line 98
            echo "                    ";
            if ((($context["FT_IROU_HEAL"] ?? null) || ($context["FT_IROU_POISON"] ?? null))) {
                echo "<option value=\"Irou Jutsu\">Irou Jutsu</option>";
            }
            // line 99
            echo "                    ";
            if ((($context["FT_FUIN_SEAL"] ?? null) || ($context["FT_FUIN_BARRER"] ?? null))) {
                echo "<option value=\"Fuinjutsu\">Fuinjutsu</option>";
            }
            // line 100
            echo "                    ";
            if (($context["FT_KUCHIYOSE"] ?? null)) {
                echo "<option>Kuchiyose</option>";
            }
            // line 101
            echo "                </select>
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
            // line 124
            if (($context["FT_IROU_HEAL"] ?? null)) {
                echo "<option value=\"Soins\">Soins</option>";
            }
            // line 125
            echo "                    ";
            if (($context["FT_IROU_POISON"] ?? null)) {
                echo "<option value=\"Poisons\">Poisons</option>";
            }
            // line 126
            echo "                </select>
                <select id=\"fuinjutsu_ft_type\" class=\"second_type_select\" name=\"fuinjutsu_ft_type\">
                    <option value=\"\"></option>
                    ";
            // line 129
            if (($context["FT_FUIN_BARRER"] ?? null)) {
                echo "<option value=\"Barrières\">Barrières</option>";
            }
            // line 130
            echo "                    ";
            if (($context["FT_FUIN_SEAL"] ?? null)) {
                echo "<option value=\"Sceaux\">Sceaux</option>";
            }
            // line 131
            echo "                </select>
                <select id=\"technique_nj_rank\" class=\"third_ft_select\" name=\"technique_nj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 134
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 135
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 136
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 137
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 138
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 139
            echo "                </select>
                <select id=\"technique_tj_rank\" class=\"third_ft_select\" name=\"technique_tj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 142
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 143
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 144
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 145
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 146
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 147
            echo "                </select>
                <select id=\"technique_gj_rank\" class=\"third_ft_select\" name=\"technique_gj_rank\">
                    <option value=\"\"></option>
                    ";
            // line 150
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 151
            echo "                    ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 152
            echo "                    ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 153
            echo "                    ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 154
            echo "                    ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 155
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
        // line 166
        echo "</div>

";
        // line 168
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "fiche_technique.html", 168)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 169
        echo "</body>";
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
        return array (  530 => 169,  518 => 168,  514 => 166,  501 => 155,  496 => 154,  491 => 153,  486 => 152,  481 => 151,  477 => 150,  472 => 147,  467 => 146,  462 => 145,  457 => 144,  452 => 143,  448 => 142,  443 => 139,  438 => 138,  433 => 137,  428 => 136,  423 => 135,  419 => 134,  414 => 131,  409 => 130,  405 => 129,  400 => 126,  395 => 125,  391 => 124,  366 => 101,  361 => 100,  356 => 99,  351 => 98,  346 => 97,  341 => 96,  336 => 95,  331 => 94,  327 => 93,  315 => 84,  300 => 82,  297 => 81,  295 => 80,  292 => 79,  284 => 76,  280 => 75,  274 => 72,  269 => 70,  259 => 69,  254 => 67,  249 => 66,  245 => 65,  242 => 64,  231 => 60,  226 => 57,  224 => 56,  218 => 53,  206 => 52,  201 => 50,  197 => 49,  192 => 48,  188 => 47,  185 => 46,  174 => 42,  169 => 39,  167 => 38,  161 => 35,  149 => 34,  144 => 32,  140 => 31,  135 => 30,  131 => 29,  128 => 28,  117 => 24,  112 => 21,  110 => 20,  104 => 17,  91 => 16,  86 => 14,  82 => 13,  77 => 12,  73 => 11,  57 => 8,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fiche_technique.html", "");
    }
}
