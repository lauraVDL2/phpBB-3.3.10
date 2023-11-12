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

/* missions_board.html */
class __TwigTemplate_0d0dbcda55c8ef17b3088c5737449be3ecacb0cd4fe99af5f133ffd41889a6ce extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "missions_board.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        $asset_file = "missions_board.js";
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
        echo "<div id=\"missions_board_title\">Tableau des missions</div>
<div id=\"missions_board_content\">
    <form method=\"post\" action=\"";
        // line 5
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"create_mission_callback\" data-refresh=\"true\">
        <h1>Créer une mission</h1>
        <h2>Titre de la mission</h2>
        <input type=\"text\" name=\"mission_title\" maxlength=\"255\" minlength=\"5\" required>
        <h2>Description de la mission</h2>
        <textarea name=\"mission_description\" required></textarea>
        <h2>Conditions de réussite</h2>
        <textarea name=\"mission_conditions\" required></textarea>
        <h2>Récompenses potentielles</h2>
        <textarea name=\"mission_earnings\" required></textarea>
        <h2>Informations complémentaires</h2>
        <div>Mettez ici des informations comme le lieu de la mission.</div>
        <textarea name=\"mission_infos\" required></textarea>
        <h2>Rang de la mission</h2>
        <select name=\"mission_rank\">
            <option value=\"S\">S</option>
            <option value=\"A\">A</option>
            <option value=\"B\">B</option>
            <option value=\"C\">C</option>
            <option value=\"D\">D</option>
        </select>
        <h2>Nombre de participants maximum</h2>
        <input type=\"number\" name=\"mission_max_users\" min=\"1\" required>
        <h2>Groupes concernés</h2>
        <div>
            <input type=\"checkbox\" name=\"mission_iwa\"> <label>Iwagakure</label>
        </div>
        <div>
            <input type=\"checkbox\" name=\"mission_suna\"> <label>Sunagakure</label>
        </div>
        <div>
            <input type=\"checkbox\" name=\"mission_kiri\"> <label>Kirigakure</label>
        </div>
        <div>
            <input type=\"checkbox\" name=\"mission_kumo\"> <label>Kumogakure</label>
        </div>
        <div>
            <input type=\"checkbox\" name=\"mission_konoha\"> <label>Konohagakure</label>
        </div>
        <div>
            <input type=\"checkbox\" name=\"mission_nuke\"> <label>Nukenin</label>
        </div>
        <input type=\"submit\" name=\"create_mission_button\" value=\"Créer la mission\">
    </form>
</div>
";
        // line 50
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "missions_board.html", 50)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "missions_board.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 50,  67 => 5,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "missions_board.html", "");
    }
}
