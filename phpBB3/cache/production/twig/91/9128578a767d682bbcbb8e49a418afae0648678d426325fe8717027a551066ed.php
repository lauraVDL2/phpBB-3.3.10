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

/* introduction.html */
class __TwigTemplate_cce9108777623b48f2a50d82a8d481b85e5e4aaf508a56bacdcc23e5623f08da extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "introduction.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        $asset_file = "introduction.js";
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
        echo "
<div id=\"intro_title\">Poster sa présentation</div>
<div id=\"intro_content\">
    <form method=\"post\" action=\"";
        // line 6
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"character_introduction_callback\" data-refresh=\"true\">
        <div id=\"grid_intro\">
            <label>Prénom : </label><input type=\"text\" name=\"character_firstname\" required>
            <label>Nom : </label><input type=\"text\" name=\"character_lastname\" required>
            <label>Genre : </label><input type=\"text\" name=\"character_gender\" required>
            <label>Âge :</label><input type=\"text\" name=\"character_age\" required>
            <label>Groupe : </label>
            <select name=\"character_group\" required>
                <option value=\"Kiri\">Kiri</option>
                <option value=\"Suna\">Suna</option>
                <option value=\"Iwa\">Iwa</option>
                <option value=\"Kumo\">Kumo</option>
                <option value=\"Konoha\">Konoha</option>
                <option value=\"Nukenin\">Nukenin</option>
            </select>
        </div>
        <h1>Description physique & mentale</h1>
        <textarea name=\"character_description\" required>Description physique et mentale de votre personnage ; comme pour l'histoire, nous n'imposons aucune longue rédaction tant que nous pouvons le cerner.</textarea>
        <h1>Histoire</h1>
        <textarea name=\"character_story\" required>Vous pouvez présenter votre histoire sous forme de chronologie avec faits marquants, ou de manière plus rédigée.</textarea>
        <h1>Présentation du joueur (en quelques mots)</h1>
        <textarea name=\"character_player\" required>On brise cette fois le quatrième mur ! Quel est votre pseudonyme sur internet ? Quels sont vos hobbies, et depuis combien de temps pratiquez-vous le RP ?</textarea>
        <h1>Que ferons-nous de votre personnage en cas de départ ?</h1>
        <textarea name=\"character_future\">Ici, c'est à vous de décider ce qu'il convient de faire de votre personnage après votre départ. Doit-il mourir ? Continuer de vivre en PNJ ? Devenir un pré-lien ou un prédéfini ?</textarea>
        <input type=\"submit\" class=\"button_validate d_block\" value=\"Poster sa fiche\" name=\"introduction_validate_button\">
    </form>
</div>

";
        // line 34
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "introduction.html", 34)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "introduction.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  68 => 6,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "introduction.html", "");
    }
}
