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
        echo "<head>
    <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"./styles/prosilver/template/fiche_technique.js\"></script>
    <link href=\"./styles/prosilver/theme/stylesheet.css\" rel=\"stylesheet\">
</head>
<body>
<div id=\"ft_name\" class=\"";
        // line 7
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
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Ninjutsu_loop", [], "any", false, false, false, 10));
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
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Ninjutsu"] ?? null), "loop", [], "any", false, false, false, 13), "FT_TECHNIQUE_RANK", [], "any", false, false, false, 13);
            echo "\">
            <div class=\"ft_ninjutsu\">
                <div class=\"ft_technique_information\">";
            // line 15
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 15);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 15);
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 15);
            echo "</div>
                <div class=\"ft_technique_description\">";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["Ninjutsu_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 16);
            echo "</div>
            </div>
            <div class=\"md_buttons\">
                ";
            // line 19
            if (($context["FT_IS_ADMIN"] ?? null)) {
                echo "<input type=\"submit\" class=\"ft_delete_button\" name=\"ft_delete_button\" value=\"Supprimer la technique\">";
            }
            // line 20
            echo "            </div>
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Ninjutsu_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        <h1>Techniques de Taijutsu</h1>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Taijutsu_loop", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["Taijutsu_loop"]) {
            // line 25
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 26);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 27
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Taijutsu"] ?? null), "loop", [], "any", false, false, false, 27), "FT_TECHNIQUE_RANK", [], "any", false, false, false, 27);
            echo "\">
            <div class=\"ft_taijutsu\">
                <div class=\"ft_technique_information\">";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 29);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 29);
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 29);
            echo "</div>
                <div class=\"ft_technique_description\">";
            // line 30
            echo twig_get_attribute($this->env, $this->source, $context["Taijutsu_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 30);
            echo "</div>
            </div>
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Taijutsu_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        <h1>Techniques de Genjutsu</h1>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "Genjutsu_loop", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["Genjutsu_loop"]) {
            // line 36
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"delete_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"validated_ft_id\" value=\"";
            // line 37
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 37);
            echo "\">
            <input type=\"hidden\" name=\"validated_ft_rank\" value=\"";
            // line 38
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Genjutsu"] ?? null), "loop", [], "any", false, false, false, 38), "FT_TECHNIQUE_RANK", [], "any", false, false, false, 38);
            echo "\">
            <div class=\"ft_genjutsu\">
                <div class=\"ft_technique_information\">";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 40);
            echo " - ";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 40);
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 40);
            echo "</div>
                <div class=\"ft_technique_description\">";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["Genjutsu_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 41);
            echo "</div>
            </div>
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Genjutsu_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        <h1>Techniques en cours de validation</h1>
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "to_validate_loop", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["to_validate_loop"]) {
            // line 47
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"modify_ft_technique_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"modify_ft_id\" value=\"";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_ID", [], "any", false, false, false, 48);
            echo "\">
            <div class=\"modify_ft_lb\">Nom de la technique</div>
            <div class=\"modify_ft_infos\">";
            // line 50
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_SUBTYPE", [], "any", false, false, false, 50);
            echo " - Rang ";
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_RANK", [], "any", false, false, false, 50);
            echo "</div>
            <input type=\"text\" value=\"";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_NAME", [], "any", false, false, false, 51);
            echo "\" class=\"modify_ft_name\" name=\"modify_ft_name\">
            <div class=\"modify_ft_lb\">Description</div>
            <textarea class=\"modify_ft_desc\" name=\"modify_ft_description\">";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["to_validate_loop"], "FT_TECHNIQUE_DESCRIPTION", [], "any", false, false, false, 53);
            echo "</textarea>
            <div class=\"md_buttons\">
                <input class=\"modify_ft_button\" type=\"submit\" name=\"modify_ft_button\" value=\"Enregistrer les modifications\">
                ";
            // line 56
            if (($context["FT_IS_ADMIN"] ?? null)) {
                echo "<input class=\"validate_ft_button\" type=\"submit\" value=\"Valider la technique\" name=\"ft_validate_button\">";
            }
            // line 57
            echo "            </div>
        </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['to_validate_loop'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        <h1>Création de technique</h1>
        ";
        // line 61
        if ((($context["FT_TECHNIQUES_TO_USE"] ?? null) > 0)) {
            // line 62
            echo "        <div id=\"ft_stat\">Vous pouvez créer ";
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
        <form id=\"new_technique_form\" method=\"post\" action=\"";
            // line 63
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
            // line 72
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Katon") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Katon")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Katon"))) {
                echo "<option value=\"Katon\">Katon</option>";
            }
            // line 73
            echo "                ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Fûton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Fûton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Fûton"))) {
                echo "<option value=\"Fûton\">Fûton</option>";
            }
            // line 74
            echo "                ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Raiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Raiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Raiton"))) {
                echo "<option value=\"Raiton\">Raiton</option>";
            }
            // line 75
            echo "                ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Doton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Doton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Doton"))) {
                echo "<option value=\"Doton\">Doton</option>";
            }
            // line 76
            echo "                ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Suiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Suiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Suiton"))) {
                echo "<option value=\"Suiton\">Suiton</option>";
            }
            // line 77
            echo "            </select>
            <select id=\"technique_tj_type\" class=\"second_ft_select\" name=\"technique_tj_type\">
                <option value=\"\"></option>
                <option value=\"Gôken\">Gôken</option>
                <option value=\"Jûken\">Jûken</option>
                <option value=\"Bukijutsu\">Bukijutsu</option>
            </select>
            <select id=\"technique_gj_type\" class=\"second_ft_select\" name=\"technique_gj_type\">
                <option value=\"\"></option>
                <option value=\"Concentration\">Concentration</option>
                <option value=\"Simple\">Simple</option>
                <option value=\"Continue\">Continue</option>
            </select>
            <select id=\"technique_nj_rank\" class=\"third_ft_select\" name=\"technique_nj_rank\">
                <option value=\"\"></option>
                ";
            // line 92
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 93
            echo "                ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 94
            echo "                ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 95
            echo "                ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 96
            echo "                ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 97
            echo "            </select>
            <select id=\"technique_tj_rank\" class=\"third_ft_select\" name=\"technique_tj_rank\">
                <option value=\"\"></option>
                ";
            // line 100
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 101
            echo "                ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 102
            echo "                ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 103
            echo "                ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 104
            echo "                ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 105
            echo "            </select>
            <select id=\"technique_gj_rank\" class=\"third_ft_select\" name=\"technique_gj_rank\">
                <option value=\"\"></option>
                ";
            // line 108
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 109
            echo "                ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 110
            echo "                ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 111
            echo "                ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 112
            echo "                ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 113
            echo "            </select>
            <div id=\"new_ft_tech\" name=\"new_ft_tech\">
                <div class=\"create_ft_lb\">Nom de la technique</div>
                <input type=\"text\" id=\"new_ft_name\" name=\"new_ft_name\">
                <div class=\"create_ft_lb\">Description de la technique</div>
                <textarea id=\"new_ft_technique\" name=\"new_ft_technique\"></textarea>
                <input type=\"submit\" id=\"create_technique\" value=\"Créer la technique\">
            </div>
        </form>
    ";
        }
        // line 123
        echo "</div>

";
        // line 125
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "fiche_technique.html", 125)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 126
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
        return array (  412 => 126,  400 => 125,  396 => 123,  384 => 113,  379 => 112,  374 => 111,  369 => 110,  364 => 109,  360 => 108,  355 => 105,  350 => 104,  345 => 103,  340 => 102,  335 => 101,  331 => 100,  326 => 97,  321 => 96,  316 => 95,  311 => 94,  306 => 93,  302 => 92,  285 => 77,  280 => 76,  275 => 75,  270 => 74,  265 => 73,  261 => 72,  249 => 63,  234 => 62,  232 => 61,  229 => 60,  221 => 57,  217 => 56,  211 => 53,  206 => 51,  200 => 50,  195 => 48,  190 => 47,  186 => 46,  183 => 45,  173 => 41,  165 => 40,  160 => 38,  156 => 37,  151 => 36,  147 => 35,  144 => 34,  134 => 30,  126 => 29,  121 => 27,  117 => 26,  112 => 25,  108 => 24,  105 => 23,  97 => 20,  93 => 19,  87 => 16,  79 => 15,  74 => 13,  70 => 12,  65 => 11,  61 => 10,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fiche_technique.html", "");
    }
}
