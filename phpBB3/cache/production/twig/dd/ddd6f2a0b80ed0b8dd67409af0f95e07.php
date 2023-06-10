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
<fieldset id=\"ft_user\">
    <legend>Fiche technique de ";
        // line 8
        echo ($context["FT_USERNAME"] ?? null);
        echo "</legend>
    <div>Vous pouvez créer ";
        // line 9
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
    ";
        // line 10
        if ((($context["FT_TECHNIQUES_TO_USE"] ?? null) > 0)) {
            // line 11
            echo "    <form id=\"new_technique_form\" method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"new_technique_callback\" data-refresh=\"true\">
        <h1>Création de technique</h1>
        <select id=\"first_ft_select\" name=\"first_ft_select\">
            <option value=\"\"></option>
            <option value=\"Ninjutsu\">Ninjutsu</option>
            <option value=\"Taijutsu\">Taijutsu</option>
            <option value=\"Genjutsu\">Genjutsu</option>
        </select>
        <select id=\"technique_nj_type\" class=\"second_ft_select\" name=\"technique_nj_type\">
            <option value=\"\"></option>
            ";
            // line 21
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Katon") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Katon")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Katon"))) {
                echo "<option value=\"Katon\">Katon</option>";
            }
            // line 22
            echo "            ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Fûton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Fûton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Fûton"))) {
                echo "<option value=\"Fûton\">Fûton</option>";
            }
            // line 23
            echo "            ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Raiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Raiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Raiton"))) {
                echo "<option value=\"Raiton\">Raiton</option>";
            }
            // line 24
            echo "            ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Doton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Doton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Doton"))) {
                echo "<option value=\"Doton\">Doton</option>";
            }
            // line 25
            echo "            ";
            if ((((($context["FT_FIRST_ELEMENT"] ?? null) == "Suiton") || (($context["FT_SECOND_ELEMENT"] ?? null) == "Suiton")) || (($context["FT_THIRD_ELEMENT"] ?? null) == "Suiton"))) {
                echo "<option value=\"Suiton\">Suiton</option>";
            }
            // line 26
            echo "        </select>
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
            // line 41
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 42
            echo "            ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 43
            echo "            ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 44
            echo "            ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 45
            echo "            ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 46
            echo "        </select>
        <select id=\"technique_tj_rank\" class=\"third_ft_select\" name=\"technique_tj_rank\">
            <option value=\"\"></option>
            ";
            // line 49
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 50
            echo "            ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 51
            echo "            ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 52
            echo "            ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 53
            echo "            ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 54
            echo "        </select>
        <select id=\"technique_gj_rank\" class=\"third_ft_select\" name=\"technique_gj_rank\">
            <option value=\"\"></option>
            ";
            // line 57
            if ((($context["FT_D_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"D\">D</option>";
            }
            // line 58
            echo "            ";
            if ((($context["FT_C_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"C\">C</option>";
            }
            // line 59
            echo "            ";
            if ((($context["FT_B_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"B\">B</option>";
            }
            // line 60
            echo "            ";
            if ((($context["FT_A_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"A\">A</option>";
            }
            // line 61
            echo "            ";
            if ((($context["FT_S_TECHNIQUES"] ?? null) > 0)) {
                echo "<option value=\"S\">S</option>";
            }
            // line 62
            echo "        </select>
        <div id=\"new_ft_tech\" name=\"new_ft_tech\">
            <input type=\"text\" id=\"new_ft_name\" name=\"new_ft_name\">
            <textarea id=\"new_ft_technique\" name=\"new_ft_technique\">Test</textarea>
            <input type=\"submit\" id=\"create_technique\" value=\"Créer la technique\">
        </div>
    </form>
    ";
        }
        // line 70
        echo "</fieldset>

";
        // line 72
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "fiche_technique.html", 72)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 73
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
        return array (  229 => 73,  217 => 72,  213 => 70,  203 => 62,  198 => 61,  193 => 60,  188 => 59,  183 => 58,  179 => 57,  174 => 54,  169 => 53,  164 => 52,  159 => 51,  154 => 50,  150 => 49,  145 => 46,  140 => 45,  135 => 44,  130 => 43,  125 => 42,  121 => 41,  104 => 26,  99 => 25,  94 => 24,  89 => 23,  84 => 22,  80 => 21,  66 => 11,  64 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "fiche_technique.html", "");
    }
}
