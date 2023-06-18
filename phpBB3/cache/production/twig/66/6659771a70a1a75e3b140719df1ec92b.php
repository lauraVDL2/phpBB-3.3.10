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
        echo "<h1 id=\"shop_h1\">Boutique</h1>
<div id=\"shop\">
    <div id=\"shopInfo\">Vous avez ";
        // line 5
        echo ($context["SP_TALENT_POINTS"] ?? null);
        echo " points de talent à dépenser !</div>

    ";
        // line 7
        if (( !($context["SP_FUIN_SEAL"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 8
            echo "        <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_fuin_seal_callback\" data-refresh=\"true\">
            <input type=\"hidden\" name=\"sp_price\" value=\"75\">
            <h1>Spécialisation : Fuinjutsu (Sceaux)</h1>
            Permet de maîtriser l'art des sceaux <em>(75 points de talent)</em>.
                <input type=\"submit\" name=\"sp_fuin_seal\" value=\"Acheter\" ";
            // line 12
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
        </form>
    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if (( !($context["SP_FUIN_BARRER"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 17
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_fuin_barrer_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Fuinjutsu (Barrières)</h1>
        Permet de maîtriser l'art des barrières <em>(75 points de talent)</em>.
            <input type=\"submit\" name=\"sp_fuin_barrer\" value=\"Acheter\" ";
            // line 21
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
";
        }
        // line 24
        echo "
    ";
        // line 25
        if (( !($context["SP_KUCHIYOSE"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 26
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_kuchiyose_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Kuchiyose</h1>
        Permet de sceller un pacte pour une invocation. Attention, <strong>vous n'aurez le droit qu'à une seule espèce animale !</strong> <em>(75 points de talent)</em>
            <input type=\"submit\" name=\"sp_kuchiyose\" value=\"Acheter\" ";
            // line 30
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if (( !($context["SP_IROU_HEAL"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 35
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_irou_heal_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Irou Jutsu (Soins)</h1>
        Permet de maîtriser des techniques médicales <em>(75 points de talent)</em>.
            <input type=\"submit\" name=\"sp_irou_heal\" value=\"Acheter\" ";
            // line 39
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if (( !($context["SP_IROU_POISON"] ?? null) && (($context["SP_NINJUTSU"] ?? null) >= 4))) {
            // line 44
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_irou_poison_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Spécialisation : Irou Jutsu (Poisons)</h1>
        Permet de maîtriser des techniques d'empoisonnement <em>(75 points de talent)</em>.
            <input type=\"submit\" name=\"sp_irou_poison\" value=\"Acheter\" ";
            // line 48
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 51
        echo "
    ";
        // line 52
        if ((($context["SP_FIRST_ELEMENT"] ?? null) &&  !($context["SP_IS_SECOND_ELEMENT"] ?? null))) {
            // line 53
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_second_element_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"75\">
        <h1>Deuxième affinité élémentaire</h1>
        Acheter une deuxième affinité élémentaire. <em>(75 points de talent)</em>.
        <input type=\"submit\" name=\"sp_second_element\" value=\"Acheter\" ";
            // line 57
            if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 60
        echo "
    ";
        // line 61
        if ((($context["SP_SECOND_ELEMENT"] ?? null) &&  !($context["SP_IS_THIRD_ELEMENT"] ?? null))) {
            // line 62
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_third_element_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"100\">
        <h1>Troisième affinité élémentaire</h1>
        Acheter une troisième affinité élémentaire. <em>(100 points de talent)</em>.
        <input type=\"submit\" name=\"sp_third_element\" value=\"Acheter\" ";
            // line 66
            if ((($context["SP_TALENT_POINTS"] ?? null) < 100)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 69
        echo "
    ";
        // line 70
        if (((((($context["SP_RP_RANK"] ?? null) == "Genin") && (($context["SP_NINJUTSU"] ?? null) >= 3)) && (($context["SP_TAIJUTSU"] ?? null) >= 3)) && (($context["SP_GENJUTSU"] ?? null) >= 3))) {
            // line 71
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_chunin_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"125\">
        <h1>Devenir Chûnin</h1>
        Félicitations, vous avez suffisamment de points d'attribut pour devenir Chûnin ! <em>(125 points de talent)</em>
        <input type=\"submit\" name=\"sp_chunin\" value=\"Acheter\" ";
            // line 75
            if ((($context["SP_TALENT_POINTS"] ?? null) < 125)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 78
        echo "
    ";
        // line 79
        if (((((($context["SP_RP_RANK"] ?? null) == "Chûnin") && (($context["SP_NINJUTSU"] ?? null) >= 4)) && (($context["SP_TAIJUTSU"] ?? null) >= 4)) && (($context["SP_GENJUTSU"] ?? null) >= 4))) {
            // line 80
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_jonin_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Devenir Jônin</h1>
        Félicitations, vous avez suffisamment de points d'attribut pour devenir Jônin, ninja d'élite ! Vous pourrez prendre des Genin sous votre aile. <em>(150 points de talent)</em>
        <input type=\"submit\" name=\"sp_jonin\" value=\"Acheter\" ";
            // line 84
            if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
                echo "disabled ";
            }
            echo " >
    </form>
    ";
        }
        // line 87
        echo "
    <form method=\"post\" action=\"";
        // line 88
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_d_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"25\">
        <h1>Technique de rang D</h1>
        Gagner une technique de rang D <em>(25 points de talent)</em>
        <input type=\"submit\" name=\"sp_d_technique\" value=\"Acheter\" ";
        // line 92
        if ((($context["SP_TALENT_POINTS"] ?? null) < 25)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 95
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_c_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"50\">
        <h1>Technique de rang C</h1>
        Gagner une technique de rang C <em>(50 points de talent)</em>
        <input type=\"submit\" name=\"sp_c_technique\" value=\"Acheter\" ";
        // line 99
        if ((($context["SP_TALENT_POINTS"] ?? null) < 50)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 102
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_b_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_b_technique\" value=\"75\">
        <h1>Technique de rang B</h1>
        Gagner une technique de rang B <em>(75 points de talent)</em>
        <input type=\"submit\" name=\"sp_jonin\" value=\"Acheter\" ";
        // line 106
        if ((($context["SP_TALENT_POINTS"] ?? null) < 75)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 109
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_a_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"100\">
        <h1>Technique de rang A</h1>
        Gagner une technique de rang A <em>(100 points de talent)</em>
        <input type=\"submit\" name=\"sp_a_technique\" value=\"Acheter\" ";
        // line 113
        if ((($context["SP_TALENT_POINTS"] ?? null) < 100)) {
            echo "disabled ";
        }
        echo " >
    </form>

    <form method=\"post\" action=\"";
        // line 116
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"sp_s_technique_callback\" data-refresh=\"true\">
        <input type=\"hidden\" name=\"sp_price\" value=\"150\">
        <h1>Technique de rang S</h1>
        Gagner une technique de rang S <em>(150 points de talent)</em>
        <input type=\"submit\" name=\"sp_s_technique\" value=\"Acheter\" ";
        // line 120
        if ((($context["SP_TALENT_POINTS"] ?? null) < 150)) {
            echo "disabled ";
        }
        echo " >
    </form>
</div>
";
        // line 123
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "shop.html", 123)->display($context);
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
        return array (  336 => 123,  328 => 120,  321 => 116,  313 => 113,  306 => 109,  298 => 106,  291 => 102,  283 => 99,  276 => 95,  268 => 92,  261 => 88,  258 => 87,  250 => 84,  242 => 80,  240 => 79,  237 => 78,  229 => 75,  221 => 71,  219 => 70,  216 => 69,  208 => 66,  200 => 62,  198 => 61,  195 => 60,  187 => 57,  179 => 53,  177 => 52,  174 => 51,  166 => 48,  158 => 44,  156 => 43,  153 => 42,  145 => 39,  137 => 35,  135 => 34,  132 => 33,  124 => 30,  116 => 26,  114 => 25,  111 => 24,  103 => 21,  95 => 17,  93 => 16,  90 => 15,  82 => 12,  74 => 8,  72 => 7,  67 => 5,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shop.html", "");
    }
}
