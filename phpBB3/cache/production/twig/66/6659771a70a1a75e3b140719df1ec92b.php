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

/* shop.html */
class __TwigTemplate_ff2efa8ecb5905b3e361ac41f704fa32 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "shop.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        $asset_file = "shop.js";
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
        echo "<div id=\"wrap\" class=\"wrap\">
<h1 id=\"shop_h1\">Arbre de compétences</h1>
<div id=\"shop\">
    <div id=\"shopInfo\">Vous avez ";
        // line 6
        echo ($context["SP_TALENT_POINTS"] ?? null);
        echo " points de compétence à dépenser !</div>

    ";
        // line 8
        if (( !($context["SP_FUIN_SEAL"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 9
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_fuin_seal_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"sp_price\" value=\"75\">
            <h1>Spécialisation : Fuinjutsu (Sceaux)</h1>
            Permet de maîtriser l'art des sceaux <em>(75 points de compétence)</em>.
                <input type=\"submit\" name=\"sp_fuin_seal\" value=\"Acheter\" ";
            // line 13
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
        </form>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (( !($context["SP_FUIN_BARRER"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 18
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_fuin_barrer_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Fuinjutsu (Barrières)</h1>
        Permet de maîtriser l'art des barrières <em>(75 points de compétence)</em>.
            <input type=\"submit\" name=\"sp_fuin_barrer\" value=\"Acheter\" ";
            // line 22
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
";
        }
        // line 25
        echo "
    ";
        // line 26
        if (( !($context["SP_KUCHIYOSE"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 27
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_kuchiyose_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Kuchiyose</h1>
        Permet de sceller un pacte pour une invocation. Attention, <strong>vous n'aurez le droit qu'à une seule espèce animale !</strong> <em>(75 points de compétence)</em>
            <input type=\"submit\" name=\"sp_kuchiyose\" value=\"Acheter\" ";
            // line 31
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 34
        echo "
    ";
        // line 35
        if (( !($context["SP_IROU_HEAL"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 36
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_irou_heal_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Irou Jutsu (Soins)</h1>
        Permet de maîtriser des techniques médicales <em>(75 points de compétence)</em>.
            <input type=\"submit\" name=\"sp_irou_heal\" value=\"Acheter\" ";
            // line 40
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if (( !($context["SP_IROU_POISON"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 45
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_irou_poison_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Irou Jutsu (Poisons)</h1>
        Permet de maîtriser des techniques d'empoisonnement <em>(75 points de compétence)</em>.
            <input type=\"submit\" name=\"sp_irou_poison\" value=\"Acheter\" ";
            // line 49
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 52
        echo "
    ";
        // line 53
        if ((($context["SP_FIRST_ELEMENT"] ?? null) &&  !($context["SP_IS_SECOND_ELEMENT"] ?? null))) {
            // line 54
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_second_element_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Deuxième affinité élémentaire</h1>
        Acheter une deuxième affinité élémentaire. <em>(75 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_second_element\" value=\"Acheter\" ";
            // line 58
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        if ((($context["SP_SECOND_ELEMENT"] ?? null) &&  !($context["SP_IS_THIRD_ELEMENT"] ?? null))) {
            // line 63
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_third_element_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"100\">
        <h1>Troisième affinité élémentaire</h1>
        Acheter une troisième affinité élémentaire. <em>(100 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_third_element\" value=\"Acheter\" ";
            // line 67
            if ((($context["SP_TALENT_POINTS"] ?? null) < 100)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 70
        echo "
    ";
        // line 71
        if (((((($context["SP_RP_RANK"] ?? null) == "Genin") && (($context["SP_NINJUTSU"] ?? null) >= 3)) && (($context["SP_TAIJUTSU"] ?? null) >= 3)) && (($context["SP_GENJUTSU"] ?? null) >= 3))) {
            // line 72
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_chunin_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"125\">
        <h1>Devenir Chûnin</h1>
        Félicitations, vous avez suffisamment de points d'attribut pour devenir Chûnin ! <em>(125 points de compétence)</em>
        <input type=\"submit\" name=\"sp_chunin\" value=\"Acheter\" ";
            // line 76
            if ((($context["SP_TALENT_POINTS"] ?? null) < 125)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 79
        echo "
    ";
        // line 80
        if (((((($context["SP_RP_RANK"] ?? null) == "Chûnin") && (($context["SP_NINJUTSU"] ?? null) >= 4)) && (($context["SP_TAIJUTSU"] ?? null) >= 4)) && (($context["SP_GENJUTSU"] ?? null) >= 4))) {
            // line 81
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_jonin_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Devenir Jônin</h1>
        Félicitations, vous avez suffisamment de points d'attribut pour devenir Jônin, ninja d'élite ! Vous pourrez prendre des Genin sous votre aile. <em>(150 points de compétence)</em>
        <input type=\"submit\" name=\"sp_jonin\" value=\"Acheter\" ";
            // line 85
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 88
        echo "
    <form method=\"post\" action=\"";
        // line 89
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_d_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"25\">
        <h1>Technique de rang D</h1>
        Gagner une technique de rang D <em>(25 points de compétence)</em>
        <input type=\"submit\" name=\"sp_d_technique\" value=\"Acheter\" ";
        // line 93
        if ((($context["SP_TALENT_POINTS"] ?? null) < 25)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 96
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_c_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"50\">
        <h1>Technique de rang C</h1>
        Gagner une technique de rang C <em>(50 points de compétence)</em>
        <input type=\"submit\" name=\"sp_c_technique\" value=\"Acheter\" ";
        // line 100
        if ((($context["SP_TALENT_POINTS"] ?? null) < 50)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 103
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_b_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_b_technique\" value=\"75\">
        <h1>Technique de rang B</h1>
        Gagner une technique de rang B <em>(75 points de compétence)</em>
        <input type=\"submit\" name=\"sp_jonin\" value=\"Acheter\" ";
        // line 107
        if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 110
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_a_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"100\">
        <h1>Technique de rang A</h1>
        Gagner une technique de rang A <em>(100 points de compétence)</em>
        <input type=\"submit\" name=\"sp_a_technique\" value=\"Acheter\" ";
        // line 114
        if ((($context["SP_TALENT_POINTS"] ?? null) < 100)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 117
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_s_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Technique de rang S</h1>
        Gagner une technique de rang S <em>(150 points de compétence)</em>
        <input type=\"submit\" name=\"sp_s_technique\" value=\"Acheter\" ";
        // line 121
        if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
            echo "disabled ";
        }
        echo " >
    </form>
</div>
</div>
";
        // line 125
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "shop.html", 125)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "shop.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 125,  329 => 121,  322 => 117,  314 => 114,  307 => 110,  299 => 107,  292 => 103,  284 => 100,  277 => 96,  269 => 93,  262 => 89,  259 => 88,  251 => 85,  243 => 81,  241 => 80,  238 => 79,  230 => 76,  222 => 72,  220 => 71,  217 => 70,  209 => 67,  201 => 63,  199 => 62,  196 => 61,  188 => 58,  180 => 54,  178 => 53,  175 => 52,  167 => 49,  159 => 45,  157 => 44,  154 => 43,  146 => 40,  138 => 36,  136 => 35,  133 => 34,  125 => 31,  117 => 27,  115 => 26,  112 => 25,  104 => 22,  96 => 18,  94 => 17,  91 => 16,  83 => 13,  75 => 9,  73 => 8,  68 => 6,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop.html", "");
    }
}
