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
        if ((((((($context["SP_NINJUTSU"] ?? null) >= 4) && ( !($context["SP_FIRST_HIDEN"] ?? null) ||  !($context["SP_SECOND_HIDEN"] ?? null))) && ($context["SP_IS_SUNA"] ?? null)) && (($context["SP_FIRST_HIDEN"] ?? null) != "Kugutsu")) && (($context["SP_SECOND_HIDEN"] ?? null) != "Kugutsu"))) {
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
        if (( !($context["SP_FUIN_SEAL"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 45
            echo "        <form method=\"post\" action=\"";
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
        if (( !($context["SP_FUIN_BARRER"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
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
        if (( !($context["SP_KUCHIYOSE"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
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
        if (( !($context["SP_IROU_HEAL"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
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
        if (( !($context["SP_IROU_POISON"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
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
        if ((($context["SP_FIRST_ELEMENT"] ?? null) &&  !($context["SP_IS_SECOND_ELEMENT"] ?? null))) {
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
        if ((($context["SP_SECOND_ELEMENT"] ?? null) &&  !($context["SP_IS_THIRD_ELEMENT"] ?? null))) {
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
        if (( !($context["SP_IS_SIGHT"] ?? null) && (($context["SP_GENJUTSU"] ?? null) >= 4))) {
            // line 108
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_sight_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Genjutsu Vue</h1>
        Acheter la spécialisation Genjutsu permettant de gérer les contacts visuels. <em>(75 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_sight\" value=\"Acheter\" ";
            // line 112
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
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
        if (( !($context["SP_IS_SOUND"] ?? null) && (($context["SP_GENJUTSU"] ?? null) >= 4))) {
            // line 117
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_sound_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Genjutsu Son</h1>
        Acheter la spécialisation Genjutsu permettant de gérer les contacts auditifs. <em>(75 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_sound\" value=\"Acheter\" ";
            // line 121
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
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
        if ((($context["CAN_ILLU1"] ?? null) && (($context["SP_GENJUTSU"] ?? null) >= 4))) {
            // line 126
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_illu1_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"25\">
        <h1>Talent : Illusionniste+</h1>
        Acheter le talent réduisant le coût en Chakra des techniques de Genjutsu de 10%. <em>(25 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_illu1\" value=\"Acheter\" ";
            // line 130
            if ((($context["SP_TALENT_POINTS"] ?? null) < 25)) {
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
        if ((($context["CAN_ILLU2"] ?? null) && (($context["SP_GENJUTSU"] ?? null) >= 6))) {
            // line 135
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_illu2_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"50\">
        <h1>Talent : Illusionniste++</h1>
        Acheter le talent réduisant le coût en Chakra des techniques de Genjutsu de 20% (évolution d'Illusionniste+). <em>(50 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_illu2\" value=\"Acheter\" ";
            // line 139
            if ((($context["SP_TALENT_POINTS"] ?? null) < 50)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 142
        echo "
    <form method=\"post\" action=\"";
        // line 143
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_illu3_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Talent : Illusionniste+++</h1>
        Acheter le talent réduisant le coût en Chakra des techniques de Genjutsu de 30% (évolution d'Illusionniste++). <em>(75 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_illu3\" value=\"Acheter\" ";
        // line 147
        if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
            echo "disabled ";
        }
        echo " >
    </form>

    ";
        // line 150
        if (((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Illusions démoniaques")) && (($context["SP_SPIRIT"] ?? null) == 8)) && (($context["SP_GENJUTSU"] ?? null) == 8))) {
            // line 151
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_demonic_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Illusions démoniaques</h1>
        Acheter la spécialisation <strong>élite</strong> de Genjutsu vous permettant de créer des illusions démoniaques sans contact visuel ni auditif. <em>(150 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_demonic\" value=\"Acheter\" ";
            // line 155
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 158
        echo "
    ";
        // line 159
        if (((($context["SP_FIRST_WEAPON"] ?? null) &&  !($context["SP_IS_SECOND_WEAPON"] ?? null)) && (($context["SP_TAIJUTSU"] ?? null) >= 3))) {
            // line 160
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_second_weapon_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Deuxième arme</h1>
        Acheter la maîtrise d'un deuxième type d'arme. <em>(75 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_second_weapon\" value=\"Acheter\" ";
            // line 164
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 167
        echo "
    ";
        // line 168
        if (((($context["SP_SECOND_WEAPON"] ?? null) &&  !($context["SP_IS_THIRD_WEAPON"] ?? null)) && (($context["SP_TAIJUTSU"] ?? null) >= 5))) {
            // line 169
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_third_weapon_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"100\">
        <h1>Spécialisation : Troisième arme</h1>
        Acheter la maîtrise d'un troisième type d'arme. <em>(100 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_third_weapon\" value=\"Acheter\" ";
            // line 173
            if ((($context["SP_TALENT_POINTS"] ?? null) < 100)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 176
        echo "
    ";
        // line 177
        if (((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Hachimon")) && (($context["SP_STRENGTH"] ?? null) == 8)) && (($context["SP_TAIJUTSU"] ?? null) == 8))) {
            // line 178
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_hachimon_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Hachimon</h1>
        Acheter la spécialisation <strong>élite</strong> vous permettant d'ouvrir les huit portes. <em>(150 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_hachimon\" value=\"Acheter\" ";
            // line 182
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 185
        echo "
    ";
        // line 186
        if (((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Nintaijutsu")) && (($context["SP_NINJUTSU"] ?? null) == 8)) && (($context["SP_TAIJUTSU"] ?? null) == 8))) {
            // line 187
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_nintaijutsu_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Nintaijutsu</h1>
        Acheter la spécialisation <strong>élite</strong> vous permettant de combiner des techniques de Taijutsu avec vos affinités élémentaires. <em>(150 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_nintaijutsu\" value=\"Acheter\" ";
            // line 191
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 194
        echo "
    ";
        // line 195
        if (((((($context["CAN_FIRST_ELITE"] ?? null) || ($context["CAN_SECOND_ELITE"] ?? null)) && (($context["SP_FIRST_ELITE"] ?? null) != "Lames de Chakra")) && (($context["SP_NINJUTSU"] ?? null) == 8)) && (($context["SP_TAIJUTSU"] ?? null) == 8))) {
            // line 196
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_chakrablade_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Spécialisation élite : Lames de Chakra</h1>
        Acheter la spécialisation <strong>élite</strong> vous permettant de combiner des techniques liées aux armes avec vos affinités élémentaires. <em>(150 points de compétence)</em>.
        <input type=\"submit\" name=\"sp_chakrablade\" value=\"Acheter\" ";
            // line 200
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 203
        echo "
    ";
        // line 204
        if (((((($context["SP_RP_RANK"] ?? null) == "Genin") && (($context["SP_NINJUTSU"] ?? null) >= 3)) && (($context["SP_TAIJUTSU"] ?? null) >= 3)) && (($context["SP_GENJUTSU"] ?? null) >= 3))) {
            // line 205
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_chunin_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"125\">
        <h1>Devenir Chûnin</h1>
        Félicitations, vous avez suffisamment de points d'attribut pour devenir Chûnin ! <em>(125 points de compétence)</em>
        <input type=\"submit\" name=\"sp_chunin\" value=\"Acheter\" ";
            // line 209
            if ((($context["SP_TALENT_POINTS"] ?? null) < 125)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 212
        echo "
    ";
        // line 213
        if (((((($context["SP_RP_RANK"] ?? null) == "Chûnin") && (($context["SP_NINJUTSU"] ?? null) >= 4)) && (($context["SP_TAIJUTSU"] ?? null) >= 4)) && (($context["SP_GENJUTSU"] ?? null) >= 4))) {
            // line 214
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_jonin_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Devenir Jônin</h1>
        Félicitations, vous avez suffisamment de points d'attribut pour devenir Jônin, ninja d'élite ! Vous pourrez prendre des Genin sous votre aile. <em>(150 points de compétence)</em>
        <input type=\"submit\" name=\"sp_jonin\" value=\"Acheter\" ";
            // line 218
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 221
        echo "
    <form method=\"post\" action=\"";
        // line 222
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_d_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"25\">
        <h1>Technique de rang D</h1>
        Gagner une technique de rang D <em>(25 points de compétence)</em>
        <input type=\"submit\" name=\"sp_d_technique\" value=\"Acheter\" ";
        // line 226
        if ((($context["SP_TALENT_POINTS"] ?? null) < 25)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 229
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_c_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"50\">
        <h1>Technique de rang C</h1>
        Gagner une technique de rang C <em>(50 points de compétence)</em>
        <input type=\"submit\" name=\"sp_c_technique\" value=\"Acheter\" ";
        // line 233
        if ((($context["SP_TALENT_POINTS"] ?? null) < 50)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 236
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_b_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_b_technique\" value=\"75\">
        <h1>Technique de rang B</h1>
        Gagner une technique de rang B <em>(75 points de compétence)</em>
        <input type=\"submit\" name=\"sp_jonin\" value=\"Acheter\" ";
        // line 240
        if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 243
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_a_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"100\">
        <h1>Technique de rang A</h1>
        Gagner une technique de rang A <em>(100 points de compétence)</em>
        <input type=\"submit\" name=\"sp_a_technique\" value=\"Acheter\" ";
        // line 247
        if ((($context["SP_TALENT_POINTS"] ?? null) < 100)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 250
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_s_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Technique de rang S</h1>
        Gagner une technique de rang S <em>(150 points de compétence)</em>
        <input type=\"submit\" name=\"sp_s_technique\" value=\"Acheter\" ";
        // line 254
        if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
            echo "disabled ";
        }
        echo " >
    </form>
</div>
</div>
";
        // line 258
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "shop.html", 258)->display($context);
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
        return array (  647 => 258,  638 => 254,  631 => 250,  623 => 247,  616 => 243,  608 => 240,  601 => 236,  593 => 233,  586 => 229,  578 => 226,  571 => 222,  568 => 221,  560 => 218,  552 => 214,  550 => 213,  547 => 212,  539 => 209,  531 => 205,  529 => 204,  526 => 203,  518 => 200,  510 => 196,  508 => 195,  505 => 194,  497 => 191,  489 => 187,  487 => 186,  484 => 185,  476 => 182,  468 => 178,  466 => 177,  463 => 176,  455 => 173,  447 => 169,  445 => 168,  442 => 167,  434 => 164,  426 => 160,  424 => 159,  421 => 158,  413 => 155,  405 => 151,  403 => 150,  395 => 147,  388 => 143,  385 => 142,  377 => 139,  369 => 135,  367 => 134,  364 => 133,  356 => 130,  348 => 126,  346 => 125,  343 => 124,  335 => 121,  327 => 117,  325 => 116,  322 => 115,  314 => 112,  306 => 108,  304 => 107,  301 => 106,  293 => 103,  285 => 99,  283 => 98,  280 => 97,  272 => 94,  264 => 90,  262 => 89,  259 => 88,  251 => 85,  243 => 81,  241 => 80,  238 => 79,  230 => 76,  222 => 72,  220 => 71,  217 => 70,  209 => 67,  201 => 63,  199 => 62,  196 => 61,  188 => 58,  180 => 54,  178 => 53,  175 => 52,  167 => 49,  159 => 45,  157 => 44,  154 => 43,  146 => 40,  138 => 36,  136 => 35,  133 => 34,  125 => 31,  117 => 27,  115 => 26,  112 => 25,  104 => 22,  96 => 18,  94 => 17,  91 => 16,  83 => 13,  75 => 9,  73 => 8,  68 => 6,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop.html", "");
    }
}
