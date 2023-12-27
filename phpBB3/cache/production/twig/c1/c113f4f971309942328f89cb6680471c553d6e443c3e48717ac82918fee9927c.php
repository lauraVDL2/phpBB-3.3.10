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
        ";
            // line 21
            if (($context["RS_RIGHTS"] ?? null)) {
                // line 22
                echo "        <div class=\"button_align\">
            <input type=\"submit\" class=\"button_validate kiri_relations_validate none_button\" name=\"modify_relation\" value=\"Valider les modifications\">
            <input type=\"submit\" class=\"button_delete kiri_relations_rollback none_button\" name=\"rollback_relation\" value=\"Annuler les modifications\">
        </div>
        <input class=\"button_delete kiri_relations_delete button_block\" type=\"submit\" value=\"Supprimer la relation\" name=\"delete_relation\">
        ";
            }
            // line 28
            echo "    </form>
    ";
            // line 29
            if (($context["RS_RIGHTS"] ?? null)) {
                // line 30
                echo "    <input class=\"button_modify kiri_relations_modify button_block\" onclick=\"modify_relation(";
                echo twig_get_attribute($this->env, $this->source, $context["kiri_relations"], "S_ROW_COUNT", [], "any", false, false, false, 30);
                echo ", 'kiri_relations')\" type=\"button\" value=\"Modifier la relation\">
    ";
            }
            // line 32
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kiri_relations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
    ";
        // line 34
        if (($context["RS_RIGHTS"] ?? null)) {
            // line 35
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"kiri_relation_callback\" data-refresh=\"true\">
        <h2>Sélectionnez un joueur</h2>
        <select name=\"new_relations\" required>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "kiri_new_relations", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["kiri_new_relations"]) {
                // line 39
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["kiri_new_relations"], "RS_ID", [], "any", false, false, false, 39);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["kiri_new_relations"], "RS_USERNAME", [], "any", false, false, false, 39);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kiri_new_relations'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </select>
        <h2>Nom de la relation</h2>
        <input type=\"text\" name=\"name_relation\" required>
        <h2>Description de la relation</h2>
        <textarea required name=\"description_relation\"></textarea>
        <input type=\"submit\" name=\"create_kiri_rs_button\" class=\"button_validate button_align\" value=\"Créer la relation\">
    </form>
    ";
        }
        // line 49
        echo "    <h1 id=\"rs_iwa\">Iwagakure no Sato</h1>
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "iwa_relations", [], "any", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["iwa_relations"]) {
            // line 51
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"iwa_relation_modify_callback\" data-refresh=\"true\">
        <div class=\"relation\">
            <input type=\"hidden\" value=\"";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["iwa_relations"], "S_ROW_COUNT", [], "any", false, false, false, 53);
            echo "\" name=\"relation_row\">
            <input type=\"hidden\" value=\"";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["iwa_relations"], "RELATIONSHIP_ID", [], "any", false, false, false, 54);
            echo "\" name=\"relationship_id\">
            <img src=\"./download/file.php?avatar=";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["iwa_relations"], "RELATION_AVATAR", [], "any", false, false, false, 55);
            echo "\" class=\"relation_avatar\">
            <div class=\"relation_container\">
                <h3 class=\"relation_name relation_iwa\">";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["iwa_relations"], "RELATION_USERNAME", [], "any", false, false, false, 57);
            echo "</h3>
                <div class=\"relation_description\">
                    <strong class=\"iwa_relations_title\">";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["iwa_relations"], "RELATION_TITLE", [], "any", false, false, false, 59);
            echo "</strong> - 
                    <span class=\"iwa_relations_description\">";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["iwa_relations"], "RELATION_DESCRIPTION", [], "any", false, false, false, 60);
            echo "</span>
                </div>
            </div>
        </div>
        ";
            // line 64
            if (($context["RS_RIGHTS"] ?? null)) {
                // line 65
                echo "        <div class=\"button_align\">
            <input type=\"submit\" class=\"button_validate iwa_relations_validate none_button\" name=\"modify_relation\" value=\"Valider les modifications\">
            <input type=\"submit\" class=\"button_delete iwa_relations_rollback none_button\" name=\"rollback_relation\" value=\"Annuler les modifications\">
        </div>
        <input class=\"button_delete iwa_relations_delete button_block\" type=\"submit\" value=\"Supprimer la relation\" name=\"delete_relation\"> 
        ";
            }
            // line 71
            echo "    </form>
    ";
            // line 72
            if (($context["RS_RIGHTS"] ?? null)) {
                // line 73
                echo "    <input class=\"button_modify iwa_relations_modify button_block\" onclick=\"modify_relation(";
                echo twig_get_attribute($this->env, $this->source, $context["iwa_relations"], "S_ROW_COUNT", [], "any", false, false, false, 73);
                echo ", 'iwa_relations')\" type=\"button\" value=\"Modifier la relation\">
    ";
            }
            // line 75
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iwa_relations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
    ";
        // line 77
        if (($context["RS_RIGHTS"] ?? null)) {
            // line 78
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"iwa_relation_callback\" data-refresh=\"true\">
        <h2>Sélectionnez un joueur</h2>
        <select name=\"new_relations\" required>
            ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "iwa_new_relations", [], "any", false, false, false, 81));
            foreach ($context['_seq'] as $context["_key"] => $context["iwa_new_relations"]) {
                // line 82
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["iwa_new_relations"], "RS_ID", [], "any", false, false, false, 82);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["iwa_new_relations"], "RS_USERNAME", [], "any", false, false, false, 82);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iwa_new_relations'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "        </select>
        <h2>Nom de la relation</h2>
        <input type=\"text\" name=\"name_relation\" required>
        <h2>Description de la relation</h2>
        <textarea required name=\"description_relation\"></textarea>
        <input type=\"submit\" name=\"create_iwa_rs_button\" class=\"button_validate button_align\" value=\"Créer la relation\">
    </form>
    ";
        }
        // line 92
        echo "    <h1 id=\"rs_suna\">Sunagakure no Sato</h1>
    ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "suna_relations", [], "any", false, false, false, 93));
        foreach ($context['_seq'] as $context["_key"] => $context["suna_relations"]) {
            // line 94
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"suna_relation_modify_callback\" data-refresh=\"true\">
        <div class=\"relation\">
            <input type=\"hidden\" value=\"";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["suna_relations"], "S_ROW_COUNT", [], "any", false, false, false, 96);
            echo "\" name=\"relation_row\">
            <input type=\"hidden\" value=\"";
            // line 97
            echo twig_get_attribute($this->env, $this->source, $context["suna_relations"], "RELATIONSHIP_ID", [], "any", false, false, false, 97);
            echo "\" name=\"relationship_id\">
            <img src=\"./download/file.php?avatar=";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["suna_relations"], "RELATION_AVATAR", [], "any", false, false, false, 98);
            echo "\" class=\"relation_avatar\">
            <div class=\"relation_container\">
                <h3 class=\"relation_name relation_suna\">";
            // line 100
            echo twig_get_attribute($this->env, $this->source, $context["suna_relations"], "RELATION_USERNAME", [], "any", false, false, false, 100);
            echo "</h3>
                <div class=\"relation_description\">
                    <strong class=\"suna_relations_title\">";
            // line 102
            echo twig_get_attribute($this->env, $this->source, $context["suna_relations"], "RELATION_TITLE", [], "any", false, false, false, 102);
            echo "</strong> - 
                    <span class=\"suna_relations_description\">";
            // line 103
            echo twig_get_attribute($this->env, $this->source, $context["suna_relations"], "RELATION_DESCRIPTION", [], "any", false, false, false, 103);
            echo "</span>
                </div>
            </div>
        </div>
        ";
            // line 107
            if (($context["RS_RIGHTS"] ?? null)) {
                // line 108
                echo "        <div class=\"button_align\">
            <input type=\"submit\" class=\"button_validate suna_relations_validate none_button\" name=\"modify_relation\" value=\"Valider les modifications\">
            <input type=\"submit\" class=\"button_delete suna_relations_rollback none_button\" name=\"rollback_relation\" value=\"Annuler les modifications\">
        </div>
        <input class=\"button_delete suna_relations_delete button_block\" type=\"submit\" value=\"Supprimer la relation\" name=\"delete_relation\"> 
        ";
            }
            // line 114
            echo "    </form>
    ";
            // line 115
            if (($context["RS_RIGHTS"] ?? null)) {
                // line 116
                echo "    <input class=\"button_modify suna_relations_modify button_block\" onclick=\"modify_relation(";
                echo twig_get_attribute($this->env, $this->source, $context["suna_relations"], "S_ROW_COUNT", [], "any", false, false, false, 116);
                echo ", 'suna_relations')\" type=\"button\" value=\"Modifier la relation\">
    ";
            }
            // line 118
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suna_relations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
    ";
        // line 120
        if (($context["RS_RIGHTS"] ?? null)) {
            // line 121
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"suna_relation_callback\" data-refresh=\"true\">
        <h2>Sélectionnez un joueur</h2>
        <select name=\"new_relations\" required>
            ";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "suna_new_relations", [], "any", false, false, false, 124));
            foreach ($context['_seq'] as $context["_key"] => $context["suna_new_relations"]) {
                // line 125
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["suna_new_relations"], "RS_ID", [], "any", false, false, false, 125);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["suna_new_relations"], "RS_USERNAME", [], "any", false, false, false, 125);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suna_new_relations'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "        </select>
        <h2>Nom de la relation</h2>
        <input type=\"text\" name=\"name_relation\" required>
        <h2>Description de la relation</h2>
        <textarea required name=\"description_relation\"></textarea>
        <input type=\"submit\" name=\"create_suna_rs_button\" class=\"button_validate button_align\" value=\"Créer la relation\">
    </form>
    ";
        }
        // line 135
        echo "    <h1 id=\"rs_kumo\">Kumogakure no Sato</h1>
    ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "kumo_relations", [], "any", false, false, false, 136));
        foreach ($context['_seq'] as $context["_key"] => $context["kumo_relations"]) {
            // line 137
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"kumo_relation_modify_callback\" data-refresh=\"true\">
        <div class=\"relation\">
            <input type=\"hidden\" value=\"";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["kumo_relations"], "S_ROW_COUNT", [], "any", false, false, false, 139);
            echo "\" name=\"relation_row\">
            <input type=\"hidden\" value=\"";
            // line 140
            echo twig_get_attribute($this->env, $this->source, $context["kumo_relations"], "RELATIONSHIP_ID", [], "any", false, false, false, 140);
            echo "\" name=\"relationship_id\">
            <img src=\"./download/file.php?avatar=";
            // line 141
            echo twig_get_attribute($this->env, $this->source, $context["kumo_relations"], "RELATION_AVATAR", [], "any", false, false, false, 141);
            echo "\" class=\"relation_avatar\">
            <div class=\"relation_container\">
                <h3 class=\"relation_name relation_kumo\">";
            // line 143
            echo twig_get_attribute($this->env, $this->source, $context["kumo_relations"], "RELATION_USERNAME", [], "any", false, false, false, 143);
            echo "</h3>
                <div class=\"relation_description\">
                    <strong class=\"kumo_relations_title\">";
            // line 145
            echo twig_get_attribute($this->env, $this->source, $context["kumo_relations"], "RELATION_TITLE", [], "any", false, false, false, 145);
            echo "</strong> - 
                    <span class=\"kumo_relations_description\">";
            // line 146
            echo twig_get_attribute($this->env, $this->source, $context["kumo_relations"], "RELATION_DESCRIPTION", [], "any", false, false, false, 146);
            echo "</span>
                </div>
            </div>
        </div>
        ";
            // line 150
            if (($context["RS_RIGHTS"] ?? null)) {
                // line 151
                echo "        <div class=\"button_align\">
            <input type=\"submit\" class=\"button_validate kumo_relations_validate none_button\" name=\"modify_relation\" value=\"Valider les modifications\">
            <input type=\"submit\" class=\"button_delete kumo_relations_rollback none_button\" name=\"rollback_relation\" value=\"Annuler les modifications\">
        </div>
        <input class=\"button_delete kumo_relations_delete button_block\" type=\"submit\" value=\"Supprimer la relation\" name=\"delete_relation\">
        ";
            }
            // line 157
            echo "    </form>
    ";
            // line 158
            if (($context["RS_RIGHTS"] ?? null)) {
                // line 159
                echo "    <input class=\"button_modify kumo_relations_modify button_block\" onclick=\"modify_relation(";
                echo twig_get_attribute($this->env, $this->source, $context["kumo_relations"], "S_ROW_COUNT", [], "any", false, false, false, 159);
                echo ", 'kumo_relations')\" type=\"button\" value=\"Modifier la relation\">
    ";
            }
            // line 161
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kumo_relations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "
    ";
        // line 163
        if (($context["RS_RIGHTS"] ?? null)) {
            // line 164
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"kumo_relation_callback\" data-refresh=\"true\">
        <h2>Sélectionnez un joueur</h2>
        <select name=\"new_relations\" required>
            ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "kumo_new_relations", [], "any", false, false, false, 167));
            foreach ($context['_seq'] as $context["_key"] => $context["kumo_new_relations"]) {
                // line 168
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["kumo_new_relations"], "RS_ID", [], "any", false, false, false, 168);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["kumo_new_relations"], "RS_USERNAME", [], "any", false, false, false, 168);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kumo_new_relations'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "        </select>
        <h2>Nom de la relation</h2>
        <input type=\"text\" name=\"name_relation\" required>
        <h2>Description de la relation</h2>
        <textarea required name=\"description_relation\"></textarea>
        <input type=\"submit\" name=\"create_kumo_rs_button\" class=\"button_validate button_align\" value=\"Créer la relation\">
    </form>
    ";
        }
        // line 178
        echo "    <h1 id=\"rs_konoha\">Konohagakure no Sato</h1>
    ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "konoha_relations", [], "any", false, false, false, 179));
        foreach ($context['_seq'] as $context["_key"] => $context["konoha_relations"]) {
            // line 180
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"konoha_relation_modify_callback\" data-refresh=\"true\">
        <div class=\"relation\">
            <input type=\"hidden\" value=\"";
            // line 182
            echo twig_get_attribute($this->env, $this->source, $context["konoha_relations"], "S_ROW_COUNT", [], "any", false, false, false, 182);
            echo "\" name=\"relation_row\">
            <input type=\"hidden\" value=\"";
            // line 183
            echo twig_get_attribute($this->env, $this->source, $context["konoha_relations"], "RELATIONSHIP_ID", [], "any", false, false, false, 183);
            echo "\" name=\"relationship_id\">
            <img src=\"./download/file.php?avatar=";
            // line 184
            echo twig_get_attribute($this->env, $this->source, $context["konoha_relations"], "RELATION_AVATAR", [], "any", false, false, false, 184);
            echo "\" class=\"relation_avatar\">
            <div class=\"relation_container\">
                <h3 class=\"relation_name relation_konoha\">";
            // line 186
            echo twig_get_attribute($this->env, $this->source, $context["konoha_relations"], "RELATION_USERNAME", [], "any", false, false, false, 186);
            echo "</h3>
                <div class=\"relation_description\">
                    <strong class=\"konoha_relations_title\">";
            // line 188
            echo twig_get_attribute($this->env, $this->source, $context["konoha_relations"], "RELATION_TITLE", [], "any", false, false, false, 188);
            echo "</strong> - 
                    <span class=\"konoha_relations_description\">";
            // line 189
            echo twig_get_attribute($this->env, $this->source, $context["konoha_relations"], "RELATION_DESCRIPTION", [], "any", false, false, false, 189);
            echo "</span>
                </div>
            </div>
        </div>
        ";
            // line 193
            if (($context["RS_RIGHTS"] ?? null)) {
                // line 194
                echo "        <div class=\"button_align\">
            <input type=\"submit\" class=\"button_validate konoha_relations_validate none_button\" name=\"modify_relation\" value=\"Valider les modifications\">
            <input type=\"submit\" class=\"button_delete konoha_relations_rollback none_button\" name=\"rollback_relation\" value=\"Annuler les modifications\">
        </div>
        <input class=\"button_delete konoha_relations_delete button_block\" type=\"submit\" value=\"Supprimer la relation\" name=\"delete_relation\">
        ";
            }
            // line 200
            echo "    </form>
    ";
            // line 201
            if (($context["RS_RIGHTS"] ?? null)) {
                // line 202
                echo "    <input class=\"button_modify konoha_relations_modify button_block\" onclick=\"modify_relation(";
                echo twig_get_attribute($this->env, $this->source, $context["konoha_relations"], "S_ROW_COUNT", [], "any", false, false, false, 202);
                echo ", 'konoha_relations')\" type=\"button\" value=\"Modifier la relation\">
    ";
            }
            // line 204
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['konoha_relations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "
    ";
        // line 206
        if (($context["RS_RIGHTS"] ?? null)) {
            // line 207
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"konoha_relation_callback\" data-refresh=\"true\">
        <h2>Sélectionnez un joueur</h2>
        <select name=\"new_relations\" required>
            ";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "konoha_new_relations", [], "any", false, false, false, 210));
            foreach ($context['_seq'] as $context["_key"] => $context["konoha_new_relations"]) {
                // line 211
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["konoha_new_relations"], "RS_ID", [], "any", false, false, false, 211);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["konoha_new_relations"], "RS_USERNAME", [], "any", false, false, false, 211);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['konoha_new_relations'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "        </select>
        <h2>Nom de la relation</h2>
        <input type=\"text\" name=\"name_relation\" required>
        <h2>Description de la relation</h2>
        <textarea required name=\"description_relation\"></textarea>
        <input type=\"submit\" name=\"create_konoha_rs_button\" class=\"button_validate button_align\" value=\"Créer la relation\">
    </form>
    ";
        }
        // line 221
        echo "    <h1 id=\"rs_nuke\">Nukenin</h1>
    ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "nuke_relations", [], "any", false, false, false, 222));
        foreach ($context['_seq'] as $context["_key"] => $context["nuke_relations"]) {
            // line 223
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"nuke_relation_modify_callback\" data-refresh=\"true\">
        <div class=\"relation\">
            <input type=\"hidden\" value=\"";
            // line 225
            echo twig_get_attribute($this->env, $this->source, $context["nuke_relations"], "S_ROW_COUNT", [], "any", false, false, false, 225);
            echo "\" name=\"relation_row\">
            <input type=\"hidden\" value=\"";
            // line 226
            echo twig_get_attribute($this->env, $this->source, $context["nuke_relations"], "RELATIONSHIP_ID", [], "any", false, false, false, 226);
            echo "\" name=\"relationship_id\">
            <img src=\"./download/file.php?avatar=";
            // line 227
            echo twig_get_attribute($this->env, $this->source, $context["nuke_relations"], "RELATION_AVATAR", [], "any", false, false, false, 227);
            echo "\" class=\"relation_avatar\">
            <div class=\"relation_container\">
                <h3 class=\"relation_name relation_nuke\">";
            // line 229
            echo twig_get_attribute($this->env, $this->source, $context["nuke_relations"], "RELATION_USERNAME", [], "any", false, false, false, 229);
            echo "</h3>
                <div class=\"relation_description\">
                    <strong class=\"nuke_relations_title\">";
            // line 231
            echo twig_get_attribute($this->env, $this->source, $context["nuke_relations"], "RELATION_TITLE", [], "any", false, false, false, 231);
            echo "</strong> - 
                    <span class=\"nuke_relations_description\">";
            // line 232
            echo twig_get_attribute($this->env, $this->source, $context["nuke_relations"], "RELATION_DESCRIPTION", [], "any", false, false, false, 232);
            echo "</span>
                </div>
            </div>
        </div>
        ";
            // line 236
            if (($context["RS_RIGHTS"] ?? null)) {
                // line 237
                echo "        <div class=\"button_align\">
            <input type=\"submit\" class=\"button_validate nuke_relations_validate none_button\" name=\"modify_relation\" value=\"Valider les modifications\">
            <input type=\"submit\" class=\"button_delete nuke_relations_rollback none_button\" name=\"rollback_relation\" value=\"Annuler les modifications\">
        </div>
        <input class=\"button_delete nuke_relations_delete button_block\" type=\"submit\" value=\"Supprimer la relation\" name=\"delete_relation\">
        ";
            }
            // line 242
            echo " 
    </form>
    ";
            // line 244
            if (($context["RS_RIGHTS"] ?? null)) {
                // line 245
                echo "    <input class=\"button_modify nuke_relations_modify button_block\" onclick=\"modify_relation(";
                echo twig_get_attribute($this->env, $this->source, $context["nuke_relations"], "S_ROW_COUNT", [], "any", false, false, false, 245);
                echo ", 'nuke_relations')\" type=\"button\" value=\"Modifier la relation\">
    ";
            }
            // line 247
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nuke_relations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "
    ";
        // line 249
        if (($context["RS_RIGHTS"] ?? null)) {
            // line 250
            echo "    <form method=\"post\" action=\"";
            echo ($context["U_ACTION"] ?? null);
            echo "\" accept-charset=\"utf-8\" data-ajax=\"nuke_relation_callback\" data-refresh=\"true\">
        <h2>Sélectionnez un joueur</h2>
        <select name=\"new_relations\" required>
            ";
            // line 253
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "nuke_new_relations", [], "any", false, false, false, 253));
            foreach ($context['_seq'] as $context["_key"] => $context["nuke_new_relations"]) {
                // line 254
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["nuke_new_relations"], "RS_ID", [], "any", false, false, false, 254);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["nuke_new_relations"], "RS_USERNAME", [], "any", false, false, false, 254);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nuke_new_relations'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            echo "        </select>
        <h2>Nom de la relation</h2>
        <input type=\"text\" name=\"name_relation\" required>
        <h2>Description de la relation</h2>
        <textarea required name=\"description_relation\"></textarea>
        <input type=\"submit\" name=\"create_nuke_rs_button\" class=\"button_validate button_align\" value=\"Créer la relation\">
    </form>
    ";
        }
        // line 264
        echo "</div>
";
        // line 265
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "relationships.html", 265)->display($context);
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
        return array (  709 => 265,  706 => 264,  696 => 256,  685 => 254,  681 => 253,  674 => 250,  672 => 249,  669 => 248,  663 => 247,  657 => 245,  655 => 244,  651 => 242,  643 => 237,  641 => 236,  634 => 232,  630 => 231,  625 => 229,  620 => 227,  616 => 226,  612 => 225,  606 => 223,  602 => 222,  599 => 221,  589 => 213,  578 => 211,  574 => 210,  567 => 207,  565 => 206,  562 => 205,  556 => 204,  550 => 202,  548 => 201,  545 => 200,  537 => 194,  535 => 193,  528 => 189,  524 => 188,  519 => 186,  514 => 184,  510 => 183,  506 => 182,  500 => 180,  496 => 179,  493 => 178,  483 => 170,  472 => 168,  468 => 167,  461 => 164,  459 => 163,  456 => 162,  450 => 161,  444 => 159,  442 => 158,  439 => 157,  431 => 151,  429 => 150,  422 => 146,  418 => 145,  413 => 143,  408 => 141,  404 => 140,  400 => 139,  394 => 137,  390 => 136,  387 => 135,  377 => 127,  366 => 125,  362 => 124,  355 => 121,  353 => 120,  350 => 119,  344 => 118,  338 => 116,  336 => 115,  333 => 114,  325 => 108,  323 => 107,  316 => 103,  312 => 102,  307 => 100,  302 => 98,  298 => 97,  294 => 96,  288 => 94,  284 => 93,  281 => 92,  271 => 84,  260 => 82,  256 => 81,  249 => 78,  247 => 77,  244 => 76,  238 => 75,  232 => 73,  230 => 72,  227 => 71,  219 => 65,  217 => 64,  210 => 60,  206 => 59,  201 => 57,  196 => 55,  192 => 54,  188 => 53,  182 => 51,  178 => 50,  175 => 49,  165 => 41,  154 => 39,  150 => 38,  143 => 35,  141 => 34,  138 => 33,  132 => 32,  126 => 30,  124 => 29,  121 => 28,  113 => 22,  111 => 21,  104 => 17,  100 => 16,  95 => 14,  90 => 12,  86 => 11,  82 => 10,  76 => 8,  72 => 7,  66 => 4,  63 => 3,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "relationships.html", "");
    }
}
