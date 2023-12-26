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

/* relationships.html */
class __TwigTemplate_f9de450dc076b7b1b4d77b55517fee29647894dd3446dd23e099a46570aebc20 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "relationships.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        $asset_file = "relationships.js";
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
<div id=\"rs_title\">Relations de ";
        // line 4
        echo ($context["RS_USERNAME"] ?? null);
        echo "</div>
<div id=\"rs_content\">
    <h1 id=\"rs_kiri\">Kirigakure no Sato</h1>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "kiri_relations", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["kiri_relations"]) {
            // line 8
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"kiri_relation_modify_callback\" data-refresh=\"true\">
        <div class=\"relation\">
            <input type=\"hidden\" value=\"";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["kiri_relations"], "S_ROW_COUNT", [], "any", false, false, false, 10);
            echo "\" name=\"relation_row\">
            <input type=\"hidden\" value=\"";
            // line 11
            echo twig_get_attribute($this->env, $this->source, $context["kiri_relations"], "RELATIONSHIP_ID", [], "any", false, false, false, 11);
            echo "\" name=\"relationship_id\">
            <img src=\"./download/file.php?avatar=";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["kiri_relations"], "RELATION_AVATAR", [], "any", false, false, false, 12);
            echo "\" class=\"relation_avatar\">
            <div class=\"relation_container\">
                <h3 class=\"relation_name relation_kiri\">";
            // line 14
            echo twig_get_attribute($this->env, $this->source, $context["kiri_relations"], "RELATION_USERNAME", [], "any", false, false, false, 14);
            echo "</h3>
                <div class=\"relation_description\">
                    <strong class=\"kiri_relations_title\">";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["kiri_relations"], "RELATION_TITLE", [], "any", false, false, false, 16);
            echo "</strong> - 
                    <span class=\"kiri_relations_description\">";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["kiri_relations"], "RELATION_DESCRIPTION", [], "any", false, false, false, 17);
            echo "</span>
                </div>
            </div>
        </div>
        <div class=\"button_align\">
            <input type=\"submit\" class=\"button_validate kiri_relations_validate none_button\" name=\"modify_relation\" value=\"Valider les modifications\">
            <input type=\"submit\" class=\"button_delete kiri_relations_delete none_button\" name=\"rollback_relation\" value=\"Annuler les modifications\">
        </div>
    </form>
    <input class=\"button_modify button_block kiri_relations_modify\" onclick=\"modify_relation(";
            // line 26
            echo twig_get_attribute($this->env, $this->source, $context["kiri_relations"], "S_ROW_COUNT", [], "any", false, false, false, 26);
            echo ", 'kiri_relations')\" type=\"button\" value=\"Modifier la relation\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kiri_relations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    ";
        // line 29
        if (($context["RS_RIGHTS"] ?? null)) {
            // line 30
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"kiri_relation_callback\" data-refresh=\"true\">
        <h2>Sélectionnez un joueur</h2>
        <select name=\"new_relations\" required>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "kiri_new_relations", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["kiri_new_relations"]) {
                // line 34
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["kiri_new_relations"], "RS_ID", [], "any", false, false, false, 34);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["kiri_new_relations"], "RS_USERNAME", [], "any", false, false, false, 34);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kiri_new_relations'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </select>
        <h2>Nom de la relation</h2>
        <input type=\"text\" name=\"name_relation\" required>
        <h2>Description de la relation</h2>
        <textarea required name=\"description_relation\"></textarea>
        <input type=\"submit\" name=\"create_kiri_rs_button\" class=\"button_validate button_align\" value=\"Créer la relation\">
    </form>
    ";
        }
        // line 44
        echo "    <h1 id=\"rs_iwa\">Iwagakure no Sato</h1>
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "iwa_relations", [], "any", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["iwa_relations"]) {
            // line 46
            echo "    <div class=\"relation\">
        <img src=\"./download/file.php?avatar=";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["iwa_relations"], "RELATION_AVATAR", [], "any", false, false, false, 47);
            echo "\" class=\"relation_avatar\">
        <div class=\"relation_container\">
            <h3 class=\"relation_name relation_iwa\">";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["iwa_relations"], "RELATION_USERNAME", [], "any", false, false, false, 49);
            echo "</h3>
            <div class=\"relation_description\">
                <strong>";
            // line 51
            echo twig_get_attribute($this->env, $this->source, $context["iwa_relations"], "RELATION_TITLE", [], "any", false, false, false, 51);
            echo " - </strong>";
            echo twig_get_attribute($this->env, $this->source, $context["iwa_relations"], "RELATION_DESCRIPTION", [], "any", false, false, false, 51);
            echo "
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iwa_relations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
    ";
        // line 57
        if (($context["RS_RIGHTS"] ?? null)) {
            // line 58
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"iwa_relation_callback\" data-refresh=\"true\">
        <h2>Sélectionnez un joueur</h2>
        <select name=\"new_relations\" required>
            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "iwa_new_relations", [], "any", false, false, false, 61));
            foreach ($context['_seq'] as $context["_key"] => $context["iwa_new_relations"]) {
                // line 62
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["iwa_new_relations"], "RS_ID", [], "any", false, false, false, 62);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["iwa_new_relations"], "RS_USERNAME", [], "any", false, false, false, 62);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iwa_new_relations'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </select>
        <h2>Nom de la relation</h2>
        <input type=\"text\" name=\"name_relation\" required>
        <h2>Description de la relation</h2>
        <textarea required name=\"description_relation\"></textarea>
        <input type=\"submit\" name=\"create_iwa_rs_button\" class=\"button_validate button_align\" value=\"Créer la relation\">
    </form>
    ";
        }
        // line 72
        echo "    <h1 id=\"rs_suna\">Sunagakure no Sato</h1>
    <h1 id=\"rs_kumo\">Kumogakure no Sato</h1>
    <h1 id=\"rs_konoha\">Konohagakure no Sato</h1>
    <h1 id=\"rs_nuke\">Nukenin</h1>
</div>
";
        // line 77
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "relationships.html", 77)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "relationships.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 77,  231 => 72,  221 => 64,  210 => 62,  206 => 61,  199 => 58,  197 => 57,  194 => 56,  181 => 51,  176 => 49,  171 => 47,  168 => 46,  164 => 45,  161 => 44,  151 => 36,  140 => 34,  136 => 33,  129 => 30,  127 => 29,  124 => 28,  116 => 26,  104 => 17,  100 => 16,  95 => 14,  90 => 12,  86 => 11,  82 => 10,  76 => 8,  72 => 7,  66 => 4,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "relationships.html", "");
    }
}
