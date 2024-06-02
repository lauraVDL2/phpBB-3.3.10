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

/* talents.html */
class __TwigTemplate_f3a793f47a4a3515b1831c3128010c50c8b53bceec0da8edcff3694462f5df6c extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "talents.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        $asset_file = "talents.js";
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
<div id=\"talents_title\">Gestion des talents</div>
<div id=\"talents_content\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "talents", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["talents"]) {
            // line 7
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"modify_talent_callback\" data-refresh=\"true\">
        <div class=\"all_talents\">
            <input type=\"hidden\" value=\"";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["talents"], "TALENT_ID", [], "any", false, false, false, 9);
            echo "\" name=\"talent_id\">
            <strong class=\"talent_title\">";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["talents"], "TALENT_TITLE", [], "any", false, false, false, 10);
            echo "</strong> ; <span class=\"talent_description\">";
            echo twig_get_attribute($this->env, $this->source, $context["talents"], "TALENT_DESCRIPTION", [], "any", false, false, false, 10);
            echo "</span>
        </div>
        <div class=\"button_align\">
            <input type=\"button\" class=\"button_modify click_modify_talent\" value=\"Modifier le talent\" onclick=\"modifyTalent(";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["talents"], "S_ROW_COUNT", [], "any", false, false, false, 13);
            echo ")\">
            <input type=\"submit\" class=\"button_delete delete_talent\" value=\"Supprimer le talent\" name=\"delete_talent\">
            <input type=\"submit\" class=\"button_validate no_disp modify_talent\" value=\"Enregistrer les modifications\" name=\"modify_talent\">
            <input type=\"submit\" class=\"button_delete no_disp unmodify_talent\" value=\"Annuler les modifications\" name=\"unmodify_talent\">
        </div>
    </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['talents'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    <form method=\"post\" action=\"";
        echo ($context["U_ACTION"] ?? null);
        echo "\" accept-charset=\"utf-8\" data-ajax=\"create_talent_callback\" data-refresh=\"true\">
        <h1>Créer un talent</h1>
        <h2>Nom du talent</h2>
        <input type=\"text\" class=\"d_block\" name=\"talent_title\">
        <h2>Description du talent</h2>
        <textarea class=\"d_block\" name=\"talent_description\">
        </textarea>
        <input type=\"submit\" value=\"Créer le talent\" class=\"button_block button_validate\" name=\"create_talent\">
    </form>
</div>

";
        // line 31
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "talents.html", 31)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "talents.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  103 => 20,  90 => 13,  82 => 10,  78 => 9,  72 => 7,  68 => 6,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "talents.html", "");
    }
}
