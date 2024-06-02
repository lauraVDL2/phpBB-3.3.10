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
class __TwigTemplate_00b75893985eee2ef5c6229529616b725cd57173073d66ca47ddcbf209f861a0 extends \Twig\Template
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
        if ((((((($context["CAN_SPE"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4)) && ( !($context["SP_FIRST_HIDEN"] ?? null) ||  !($context["SP_SECOND_HIDEN"] ?? null))) && ($context["SP_IS_SUNA"] ?? null)) && (($context["SP_FIRST_HIDEN"] ?? null) != "Kugutsu")) && (($context["SP_SECOND_HIDEN"] ?? null) != "Kugutsu"))) {
            // line 9
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_kugutsu_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Kugutsu</h1>
        Permet de maîtriser l'art des marionnettes <em>(75 points de compétence)</em>.
            <input type=\"submit\" name=\"sp_kugutsu\" value=\"Acheter\" ";
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
        if ((((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && ($context["SP_SHARINGAN"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Mangekyô")) && (($context["SP_NINJUTSU"] ?? null) == 8)) && (($context["SP_GENJUTSU"] ?? null) == 8))) {
            // line 18
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_mangekyo_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Mangekyô</h1>
        Acheter la spécialisation <strong>élite</strong> vous donnant la forme avancée du Sharingan. <em>(150 points de compétence)</em>.
            <input type=\"submit\" name=\"sp_mangekyo\" value=\"Acheter\" ";
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
        if (((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && ($context["SP_MOKUTON"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Hashirama")) && (($context["SP_NINJUTSU"] ?? null) == 8))) {
            // line 27
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_hashirama_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Hashirama</h1>
        Acheter la spécialisation <strong>élite</strong> vous donnant la forme avancée du Mokuton. <em>(150 points de compétence)</em>.
            <input type=\"submit\" name=\"sp_hashirama\" value=\"Acheter\" ";
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
        if (((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && ($context["SP_KUGUTQU"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Hitokugutsu")) && (($context["SP_NINJUTSU"] ?? null) == 8))) {
            // line 36
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_hitokugutsu_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Hitokugutsu</h1>
        Acheter la spécialisation <strong>élite</strong> des marionnettes humaines. <em>(150 points de compétence)</em>.
            <input type=\"submit\" name=\"sp_hitokugutsu\" value=\"Acheter\" ";
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
        if (((($context["CAN_SPE"] ?? null) &&  !($context["SP_FUIN_SEAL"] ?? null)) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 45
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_fuin_seal_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Fuinjutsu (Sceaux)</h1>
        Permet de maîtriser l'art des sceaux <em>(75 points de compétence)</em>.
            <input type=\"submit\" name=\"sp_fuin_seal\" value=\"Acheter\" ";
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
        if (((($context["CAN_SPE"] ?? null) &&  !($context["SP_FUIN_BARRER"] ?? null)) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 54
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_fuin_barrer_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Fuinjutsu (Barrières)</h1>
        Permet de maîtriser l'art des barrières <em>(75 points de compétence)</em>.
            <input type=\"submit\" name=\"sp_fuin_barrer\" value=\"Acheter\" ";
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
        if (((($context["CAN_SPE"] ?? null) &&  !($context["SP_KUCHIYOSE"] ?? null)) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 63
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_kuchiyose_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Kuchiyose</h1>
        Permet de sceller un pacte pour une invocation. Attention, <strong>vous n'aurez le droit qu'à une seule espèce animale !</strong> <em>(75 points de compétence)</em>
            <input type=\"submit\" name=\"sp_kuchiyose\" value=\"Acheter\" ";
            // line 67
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
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
        if (((($context["CAN_SPE"] ?? null) &&  !($context["SP_IROU_HEAL"] ?? null)) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 72
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_irou_heal_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Irou Jutsu (Soins)</h1>
        Permet de maîtriser des techniques médicales <em>(75 points de compétence)</em>.
            <input type=\"submit\" name=\"sp_irou_heal\" value=\"Acheter\" ";
            // line 76
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
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
        if (((($context["CAN_SPE"] ?? null) &&  !($context["SP_IROU_POISON"] ?? null)) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 81
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_irou_poison_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Irou Jutsu (Poisons)</h1>
        Permet de maîtriser des techniques d'empoisonnement <em>(75 points de compétence)</em>.
            <input type=\"submit\" name=\"sp_irou_poison\" value=\"Acheter\" ";
            // line 85
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 88
        echo "
    ";
        // line 89
        if ((((($context["CAN_SPE"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4)) && ($context["SP_FIRST_ELEMENT"] ?? null)) &&  !($context["SP_IS_SECOND_ELEMENT"] ?? null))) {
            // line 90
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_second_element_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Deuxième affinité élémentaire</h1>
        Acheter une deuxième affinité élémentaire. <em>(75 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_second_element\" value=\"Acheter\" ";
            // line 94
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 97
        echo "
    ";
        // line 98
        if ((((($context["CAN_SPE"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 6)) && ($context["SP_SECOND_ELEMENT"] ?? null)) &&  !($context["SP_IS_THIRD_ELEMENT"] ?? null))) {
            // line 99
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_third_element_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"100\">
        <h1>Spécialisation : Troisième affinité élémentaire</h1>
        Acheter une troisième affinité élémentaire. <em>(100 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_third_element\" value=\"Acheter\" ";
            // line 103
            if ((($context["SP_TALENT_POINTS"] ?? null) < 100)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 106
        echo "
    ";
        // line 107
        if ((($context["CAN_GEN1"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 108
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_gen1_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"25\">
        <h1>Talent : Généraliste+</h1>
        Acheter le talent réduisant le coût en Chakra des techniques de Ninjutsu de 10%. <em>(25 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_gen1\" value=\"Acheter\" ";
            // line 112
            if ((($context["SP_TALENT_POINTS"] ?? null) < 25)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 115
        echo "
    ";
        // line 116
        if ((($context["CAN_GEN2"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 6))) {
            // line 117
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_gen2_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"50\">
        <h1>Talent : Généraliste++</h1>
        Acheter le talent réduisant le coût en Chakra des techniques de Ninjutsu de 20%. <em>(50 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_gen2\" value=\"Acheter\" ";
            // line 121
            if ((($context["SP_TALENT_POINTS"] ?? null) < 50)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 124
        echo "
    ";
        // line 125
        if ((($context["CAN_GEN3"] ?? null) && (($context["SP_NINJUTSU"] ?? null) == 8))) {
            // line 126
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_gen3_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Talent : Généraliste+++</h1>
        Acheter le talent réduisant le coût en Chakra des techniques de Ninjutsu de 30%. <em>(75 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_gen3\" value=\"Acheter\" ";
            // line 130
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 133
        echo "
    ";
        // line 134
        if (((($context["CAN_MASTER"] ?? null) && ((($context["SP_FIRST_ELITE"] ?? null) == "Manteau de chakra") || (($context["SP_SECOND_ELITE"] ?? null) == "Manteau de chakra"))) && ($context["SP_IS_JINCHURIKI"] ?? null))) {
            // line 135
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_master_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Talent : Maîtrise totale</h1>
        Acheter le talent vous permettant de maîtriser parfaitement votre bijû. <em>(75 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_master\" value=\"Acheter\" ";
            // line 139
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 142
        echo "
    ";
        // line 143
        if ((((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Senjutsu")) && ($context["SP_KUCHIYOSE"] ?? null)) && (($context["SP_SPIRIT"] ?? null) == 8)) && (($context["SP_NINJUTSU"] ?? null) == 8))) {
            // line 144
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_senjutsu_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Senjutsu</h1>
        Acheter la spécialisation <strong>élite</strong> vous permettant d'obtenir l'art de l'ermite. <em>(150 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_senjutsu\" value=\"Acheter\" ";
            // line 148
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 151
        echo "
    ";
        // line 152
        if (((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Hiraishin")) && (($context["SP_SPEED"] ?? null) == 8)) && (($context["SP_NINJUTSU"] ?? null) == 8))) {
            // line 153
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_hiraishin_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Hiraishin</h1>
        Acheter la spécialisation <strong>élite</strong> vous permettant d'obtenir Hiraishin. <em>(150 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_hiraishin\" value=\"Acheter\" ";
            // line 157
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 160
        echo "
    ";
        // line 161
        if ((((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Jinton")) && ($context["SP_CAN_JINTON"] ?? null)) && ($context["SP_IS_IWA"] ?? null)) && (($context["SP_NINJUTSU"] ?? null) == 8))) {
            // line 162
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_jinton_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Jinton</h1>
        Acheter la spécialisation <strong>élite</strong> vous permettant la libération de la poussière. <em>(150 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_jinton\" value=\"Acheter\" ";
            // line 166
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 169
        echo "
    ";
        // line 170
        if ((((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Gyôton")) && ($context["SP_CAN_GYOTON"] ?? null)) && ($context["SP_IS_KIRI"] ?? null)) && (($context["SP_NINJUTSU"] ?? null) == 8))) {
            // line 171
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_gyoton_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Gyôton</h1>
        Acheter la spécialisation <strong>élite</strong> vous permettant la libération des aurores boréales. <em>(150 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_gyoton\" value=\"Acheter\" ";
            // line 175
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 178
        echo "
    ";
        // line 179
        if ((((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Kyôton")) && ($context["SP_CAN_KYOTON"] ?? null)) && ($context["SP_IS_KUMO"] ?? null)) && (($context["SP_NINJUTSU"] ?? null) == 8))) {
            // line 180
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_kyoton_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Kyôton</h1>
        Acheter la spécialisation <strong>élite</strong> vous permettant de manipuler les miroirs. <em>(150 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_kyoton\" value=\"Acheter\" ";
            // line 184
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 187
        echo "
    ";
        // line 188
        if ((((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Marque maudite")) && ($context["SP_IS_FUIN_SEAL"] ?? null)) && ($context["SP_CAN_CURSE"] ?? null)) && (($context["SP_NINJUTSU"] ?? null) == 8))) {
            // line 189
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_cursed_seal_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Marque maudite</h1>
        Acheter la spécialisation <strong>élite</strong> vous permettant de créer des marques maudites. <em>(150 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_cursed_seal\" value=\"Acheter\" ";
            // line 193
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 196
        echo "
    ";
        // line 197
        if ((((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Manteau de chakra")) && ($context["SP_IS_JINCHURIKI"] ?? null)) && (($context["SP_SPIRIT"] ?? null) == 8)) && (($context["SP_NINJUTSU"] ?? null) == 8))) {
            // line 198
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_chakra_mantle_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Manteau de chakra</h1>
        Acheter la spécialisation <strong>élite</strong> vous permettant d'accéder au manteau de chakra de votre démon à queues. <em>(150 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_chakra_mantle\" value=\"Acheter\" ";
            // line 202
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 205
        echo "
    ";
        // line 206
        if (((($context["CAN_SPE"] ?? null) &&  !($context["SP_IS_SIGHT"] ?? null)) && (($context["SP_GENJUTSU"] ?? null) >= 4))) {
            // line 207
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_sight_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Genjutsu Vue</h1>
        Acheter la spécialisation Genjutsu permettant de gérer les contacts visuels. <em>(75 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_sight\" value=\"Acheter\" ";
            // line 211
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 214
        echo "
    ";
        // line 215
        if (((($context["CAN_SPE"] ?? null) &&  !($context["SP_IS_SOUND"] ?? null)) && (($context["SP_GENJUTSU"] ?? null) >= 4))) {
            // line 216
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_sound_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Genjutsu Son</h1>
        Acheter la spécialisation Genjutsu permettant de gérer les contacts auditifs. <em>(75 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_sound\" value=\"Acheter\" ";
            // line 220
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 223
        echo "
    ";
        // line 224
        if ((($context["CAN_ILLU1"] ?? null) && (($context["SP_GENJUTSU"] ?? null) >= 4))) {
            // line 225
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_illu1_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"25\">
        <h1>Talent : Illusionniste+</h1>
        Acheter le talent réduisant le coût en Chakra des techniques de Genjutsu de 10%. <em>(25 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_illu1\" value=\"Acheter\" ";
            // line 229
            if ((($context["SP_TALENT_POINTS"] ?? null) < 25)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 232
        echo "
    ";
        // line 233
        if ((($context["CAN_ILLU2"] ?? null) && (($context["SP_GENJUTSU"] ?? null) >= 6))) {
            // line 234
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_illu2_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"50\">
        <h1>Talent : Illusionniste++</h1>
        Acheter le talent réduisant le coût en Chakra des techniques de Genjutsu de 20% (évolution d'Illusionniste+). <em>(50 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_illu2\" value=\"Acheter\" ";
            // line 238
            if ((($context["SP_TALENT_POINTS"] ?? null) < 50)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 241
        echo "
    ";
        // line 242
        if ((($context["CAN_ILLU3"] ?? null) && (($context["SP_GENJUTSU"] ?? null) == 8))) {
            // line 243
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_illu3_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Talent : Illusionniste+++</h1>
        Acheter le talent réduisant le coût en Chakra des techniques de Genjutsu de 30% (évolution d'Illusionniste++). <em>(75 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_illu3\" value=\"Acheter\" ";
            // line 247
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 250
        echo "
    ";
        // line 251
        if (((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Illusions démoniaques")) && (($context["SP_SPIRIT"] ?? null) == 8)) && (($context["SP_GENJUTSU"] ?? null) == 8))) {
            // line 252
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_demonic_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Illusions démoniaques</h1>
        Acheter la spécialisation <strong>élite</strong> de Genjutsu vous permettant de créer des illusions démoniaques sans contact visuel ni auditif. <em>(150 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_demonic\" value=\"Acheter\" ";
            // line 256
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 259
        echo "
    ";
        // line 260
        if ((((($context["CAN_SPE"] ?? null) && ($context["SP_FIRST_WEAPON"] ?? null)) &&  !($context["SP_IS_SECOND_WEAPON"] ?? null)) && (($context["SP_TAIJUTSU"] ?? null) >= 3))) {
            // line 261
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_second_weapon_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Deuxième arme</h1>
        Acheter la maîtrise d'un deuxième type d'arme. <em>(75 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_second_weapon\" value=\"Acheter\" ";
            // line 265
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 268
        echo "
    ";
        // line 269
        if ((((($context["CAN_SPE"] ?? null) && ($context["SP_SECOND_WEAPON"] ?? null)) &&  !($context["SP_IS_THIRD_WEAPON"] ?? null)) && (($context["SP_TAIJUTSU"] ?? null) >= 5))) {
            // line 270
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_third_weapon_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"100\">
        <h1>Spécialisation : Troisième arme</h1>
        Acheter la maîtrise d'un troisième type d'arme. <em>(100 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_third_weapon\" value=\"Acheter\" ";
            // line 274
            if ((($context["SP_TALENT_POINTS"] ?? null) < 100)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 277
        echo "
    ";
        // line 278
        if (((($context["CAN_CRIT1"] ?? null) && (($context["SP_SPEED"] ?? null) >= 4)) && (($context["SP_TAIJUTSU"] ?? null) >= 4))) {
            // line 279
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_crit1_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"50\">
        <h1>Talent : Critique+</h1>
        Acheter le talent vous permettant d'ajouter 5 points de dégâts de plus à vos techniques de Taijutsu si vous attaquez le premier. <em>(50 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_crit1\" value=\"Acheter\" ";
            // line 283
            if ((($context["SP_TALENT_POINTS"] ?? null) < 50)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 286
        echo "
    ";
        // line 287
        if (((($context["CAN_CRIT2"] ?? null) && (($context["SP_SPEED"] ?? null) == 8)) && (($context["SP_TAIJUTSU"] ?? null) == 8))) {
            // line 288
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_crit2_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"100\">
        <h1>Talent : Critique++</h1>
        Acheter le talent vous permettant d'ajouter 10 points de dégâts de plus à vos techniques de Taijutsu si vous attaquez le premier (évolution de Critique+). <em>(100 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_crit2\" value=\"Acheter\" ";
            // line 292
            if ((($context["SP_TALENT_POINTS"] ?? null) < 100)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 295
        echo "
    ";
        // line 296
        if (($context["CAN_DEMON_CHAKRA"] ?? null)) {
            // line 297
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_demon_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"100\">
        <h1>Talent : Chakra du démon</h1>
        Acheter le talent vous permettant d'ajouter 40 points de Chakra à votre jauge. <em>(100 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_demon\" value=\"Acheter\" ";
            // line 301
            if ((($context["SP_TALENT_POINTS"] ?? null) < 100)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 304
        echo "
    ";
        // line 305
        if (((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Hachimon")) && (($context["SP_STRENGTH"] ?? null) == 8)) && (($context["SP_TAIJUTSU"] ?? null) == 8))) {
            // line 306
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_hachimon_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Hachimon</h1>
        Acheter la spécialisation <strong>élite</strong> vous permettant d'ouvrir les huit portes. <em>(150 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_hachimon\" value=\"Acheter\" ";
            // line 310
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 313
        echo "
    ";
        // line 314
        if (((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Nintaijutsu")) && (($context["SP_NINJUTSU"] ?? null) == 8)) && (($context["SP_TAIJUTSU"] ?? null) == 8))) {
            // line 315
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_nintaijutsu_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Nintaijutsu</h1>
        Acheter la spécialisation <strong>élite</strong> vous permettant de combiner des techniques de Taijutsu avec vos affinités élémentaires. <em>(150 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_nintaijutsu\" value=\"Acheter\" ";
            // line 319
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 322
        echo "
    ";
        // line 323
        if (((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Lames de Chakra")) && (($context["SP_NINJUTSU"] ?? null) == 8)) && (($context["SP_TAIJUTSU"] ?? null) == 8))) {
            // line 324
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_chakrablade_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Lames de Chakra</h1>
        Acheter la spécialisation <strong>élite</strong> vous permettant de combiner des techniques liées aux armes avec vos affinités élémentaires. <em>(150 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_chakrablade\" value=\"Acheter\" ";
            // line 328
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 331
        echo "
    ";
        // line 332
        if (((((($context["SP_RP_RANK"] ?? null) == "Genin") && (($context["SP_NINJUTSU"] ?? null) >= 3)) && (($context["SP_TAIJUTSU"] ?? null) >= 3)) && (($context["SP_GENJUTSU"] ?? null) >= 3))) {
            // line 333
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_chunin_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"125\">
        <h1>Devenir Chûnin</h1>
        Félicitations, vous avez suffisamment de points d'attribut pour devenir Chûnin ! <em>(125 points de compétence)</em>
        <input type=\"submit\" name=\"sp_chunin\" value=\"Acheter\" ";
            // line 337
            if ((($context["SP_TALENT_POINTS"] ?? null) < 125)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 340
        echo "
    ";
        // line 341
        if (((((($context["SP_RP_RANK"] ?? null) == "Chûnin") && (($context["SP_NINJUTSU"] ?? null) >= 4)) && (($context["SP_TAIJUTSU"] ?? null) >= 4)) && (($context["SP_GENJUTSU"] ?? null) >= 4))) {
            // line 342
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_jonin_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Devenir Jônin</h1>
        Félicitations, vous avez suffisamment de points d'attribut pour devenir Jônin, ninja d'élite ! Vous pourrez prendre des Genin sous votre aile. <em>(150 points de compétence)</em>
        <input type=\"submit\" name=\"sp_jonin\" value=\"Acheter\" ";
            // line 346
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 349
        echo "
    <form method=\"post\" action=\"";
        // line 350
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_d_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"25\">
        <h1>Technique de rang D</h1>
        Gagner une technique de rang D <em>(25 points de compétence)</em>
        <input type=\"submit\" name=\"sp_d_technique\" value=\"Acheter\" ";
        // line 354
        if ((($context["SP_TALENT_POINTS"] ?? null) < 25)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 357
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_c_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"50\">
        <h1>Technique de rang C</h1>
        Gagner une technique de rang C <em>(50 points de compétence)</em>
        <input type=\"submit\" name=\"sp_c_technique\" value=\"Acheter\" ";
        // line 361
        if ((($context["SP_TALENT_POINTS"] ?? null) < 50)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 364
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_b_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_b_technique\" value=\"75\">
        <h1>Technique de rang B</h1>
        Gagner une technique de rang B <em>(75 points de compétence)</em>
        <input type=\"submit\" name=\"sp_jonin\" value=\"Acheter\" ";
        // line 368
        if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 371
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_a_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"100\">
        <h1>Technique de rang A</h1>
        Gagner une technique de rang A <em>(100 points de compétence)</em>
        <input type=\"submit\" name=\"sp_a_technique\" value=\"Acheter\" ";
        // line 375
        if ((($context["SP_TALENT_POINTS"] ?? null) < 100)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 378
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_s_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Technique de rang S</h1>
        Gagner une technique de rang S <em>(150 points de compétence)</em>
        <input type=\"submit\" name=\"sp_s_technique\" value=\"Acheter\" ";
        // line 382
        if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
            echo "disabled ";
        }
        echo " >
    </form>
</div>
</div>
";
        // line 386
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "shop.html", 386)->display($context);
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
        return array (  947 => 386,  938 => 382,  931 => 378,  923 => 375,  916 => 371,  908 => 368,  901 => 364,  893 => 361,  886 => 357,  878 => 354,  871 => 350,  868 => 349,  860 => 346,  852 => 342,  850 => 341,  847 => 340,  839 => 337,  831 => 333,  829 => 332,  826 => 331,  818 => 328,  810 => 324,  808 => 323,  805 => 322,  797 => 319,  789 => 315,  787 => 314,  784 => 313,  776 => 310,  768 => 306,  766 => 305,  763 => 304,  755 => 301,  747 => 297,  745 => 296,  742 => 295,  734 => 292,  726 => 288,  724 => 287,  721 => 286,  713 => 283,  705 => 279,  703 => 278,  700 => 277,  692 => 274,  684 => 270,  682 => 269,  679 => 268,  671 => 265,  663 => 261,  661 => 260,  658 => 259,  650 => 256,  642 => 252,  640 => 251,  637 => 250,  629 => 247,  621 => 243,  619 => 242,  616 => 241,  608 => 238,  600 => 234,  598 => 233,  595 => 232,  587 => 229,  579 => 225,  577 => 224,  574 => 223,  566 => 220,  558 => 216,  556 => 215,  553 => 214,  545 => 211,  537 => 207,  535 => 206,  532 => 205,  524 => 202,  516 => 198,  514 => 197,  511 => 196,  503 => 193,  495 => 189,  493 => 188,  490 => 187,  482 => 184,  474 => 180,  472 => 179,  469 => 178,  461 => 175,  453 => 171,  451 => 170,  448 => 169,  440 => 166,  432 => 162,  430 => 161,  427 => 160,  419 => 157,  411 => 153,  409 => 152,  406 => 151,  398 => 148,  390 => 144,  388 => 143,  385 => 142,  377 => 139,  369 => 135,  367 => 134,  364 => 133,  356 => 130,  348 => 126,  346 => 125,  343 => 124,  335 => 121,  327 => 117,  325 => 116,  322 => 115,  314 => 112,  306 => 108,  304 => 107,  301 => 106,  293 => 103,  285 => 99,  283 => 98,  280 => 97,  272 => 94,  264 => 90,  262 => 89,  259 => 88,  251 => 85,  243 => 81,  241 => 80,  238 => 79,  230 => 76,  222 => 72,  220 => 71,  217 => 70,  209 => 67,  201 => 63,  199 => 62,  196 => 61,  188 => 58,  180 => 54,  178 => 53,  175 => 52,  167 => 49,  159 => 45,  157 => 44,  154 => 43,  146 => 40,  138 => 36,  136 => 35,  133 => 34,  125 => 31,  117 => 27,  115 => 26,  112 => 25,  104 => 22,  96 => 18,  94 => 17,  91 => 16,  83 => 13,  75 => 9,  73 => 8,  68 => 6,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop.html", "");
    }
}
