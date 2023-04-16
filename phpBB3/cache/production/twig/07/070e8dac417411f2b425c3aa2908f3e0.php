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

/* acp_permission_roles.html */
class __TwigTemplate_30145013f2228d68bd42d4b18789f334 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_permission_roles.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (($context["S_EDIT"] ?? null)) {
            // line 6
            echo "
\t<script>
\t// <![CDATA[
\t\tvar active_pmask = '0';
\t\tvar active_fmask = '0';
\t\tvar active_cat = '0';

\t\tvar id = '000';

\t\tvar role_options = new Array();

\t\t";
            // line 17
            if (($context["S_ROLE_JS_ARRAY"] ?? null)) {
                // line 18
                echo "\t\t\t";
                echo ($context["S_ROLE_JS_ARRAY"] ?? null);
                echo "
\t\t";
            }
            // line 20
            echo "\t// ]]>
\t</script>

\t<script src=\"style/permissions.js\"></script>

\t<a href=\"";
            // line 25
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK");
            echo "</a>

\t<h1>";
            // line 27
            echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 29
            echo $this->extensions['phpbb\template\twig\extension']->lang("EXPLAIN");
            echo "</p>

\t<br />
\t<a href=\"#acl\">&raquo; ";
            // line 32
            echo $this->extensions['phpbb\template\twig\extension']->lang("SET_ROLE_PERMISSIONS");
            echo "</a>

\t<form id=\"acp_roles\" method=\"post\" action=\"";
            // line 34
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 37
            echo $this->extensions['phpbb\template\twig\extension']->lang("ROLE_DETAILS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"role_name\">";
            // line 39
            echo $this->extensions['phpbb\template\twig\extension']->lang("ROLE_NAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"role_name\" type=\"text\" id=\"role_name\" value=\"";
            // line 40
            echo ($context["ROLE_NAME"] ?? null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"role_description\">";
            // line 43
            echo $this->extensions['phpbb\template\twig\extension']->lang("ROLE_DESCRIPTION");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ROLE_DESCRIPTION_EXPLAIN");
            echo "</span></dt>
\t\t<dd><textarea id=\"role_description\" name=\"role_description\" rows=\"3\" cols=\"45\">";
            // line 44
            echo ($context["ROLE_DESCRIPTION"] ?? null);
            echo "</textarea></dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input type=\"submit\" class=\"button1\" name=\"submit\" value=\"";
            // line 48
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />
\t\t";
            // line 49
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</p>
\t</fieldset>

\t";
            // line 53
            if (($context["S_DISPLAY_ROLE_MASK"] ?? null)) {
                // line 54
                echo "
\t\t<h1>";
                // line 55
                echo $this->extensions['phpbb\template\twig\extension']->lang("ROLE_ASSIGNED_TO");
                echo "</h1>

\t\t";
                // line 57
                $location = "permission_roles_mask.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("permission_roles_mask.html", "acp_permission_roles.html", 57)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 58
                echo "
\t";
            }
            // line 60
            echo "
\t<p>

\t<a id=\"acl\"></a>

\t<a href=\"#maincontent\">&raquo; ";
            // line 65
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_TOP");
            echo "</a><br />
\t<br /><br />

\t</p>

\t<h1>";
            // line 70
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACL_TYPE");
            echo "</h1>

\t<fieldset class=\"perm nolegend\">

\t\t<div id=\"advanced00\">
\t\t\t<div class=\"permissions-category\">
\t\t\t\t<ul>
\t\t\t\t";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "auth", [], "any", false, false, false, 77));
            foreach ($context['_seq'] as $context["_key"] => $context["auth"]) {
                // line 78
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["auth"], "S_YES", [], "any", false, false, false, 78)) {
                    // line 79
                    echo "\t\t\t\t\t\t<li class=\"permissions-preset-yes";
                    if (twig_get_attribute($this->env, $this->source, $context["auth"], "S_FIRST_ROW", [], "any", false, false, false, 79)) {
                        echo " activetab";
                    }
                    echo "\" id=\"tab00";
                    echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 79);
                    echo "\">
\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 80
$context["auth"], "S_NEVER", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "\t\t\t\t\t\t<li class=\"permissions-preset-never";
                    if (twig_get_attribute($this->env, $this->source, $context["auth"], "S_FIRST_ROW", [], "any", false, false, false, 81)) {
                        echo " activetab";
                    }
                    echo "\" id=\"tab00";
                    echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 81);
                    echo "\">
\t\t\t\t\t";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 82
$context["auth"], "S_NO", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "\t\t\t\t\t\t<li class=\"permissions-preset-no";
                    if (twig_get_attribute($this->env, $this->source, $context["auth"], "S_FIRST_ROW", [], "any", false, false, false, 83)) {
                        echo " activetab";
                    }
                    echo "\" id=\"tab00";
                    echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 83);
                    echo "\">
\t\t\t\t\t";
                } else {
                    // line 85
                    echo "\t\t\t\t\t\t<li class=\"permissions-preset-custom";
                    if (twig_get_attribute($this->env, $this->source, $context["auth"], "S_FIRST_ROW", [], "any", false, false, false, 85)) {
                        echo " activetab";
                    }
                    echo "\" id=\"tab00";
                    echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 85);
                    echo "\">
\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t\t<a href=\"#\" onclick=\"swap_options('0','0','";
                echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 87);
                echo "'); return false;\"><span class=\"tabbg\"><span class=\"colour\"></span>";
                echo twig_get_attribute($this->env, $this->source, $context["auth"], "CAT_NAME", [], "any", false, false, false, 87);
                echo "</span></a></li>\t
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auth'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "auth", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["auth"]) {
                // line 92
                echo "\t\t\t<div class=\"permissions-panel\" id=\"options00";
                echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 92);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, $context["auth"], "S_FIRST_ROW", [], "any", false, false, false, 92)) {
                } else {
                    echo " style=\"display: none;\"";
                }
                echo ">
\t\t\t\t<div class=\"tablewrap\">
\t\t\t\t\t<table id=\"table00";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 94);
                echo "\" class=\"table1 not-responsive\">
\t\t\t\t\t<colgroup>
\t\t\t\t\t\t<col class=\"permissions-name\" />
\t\t\t\t\t\t<col class=\"permissions-yes\" />
\t\t\t\t\t\t<col class=\"permissions-no\" />
\t\t\t\t\t\t<col class=\"permissions-never\" />
\t\t\t\t\t</colgroup>
\t\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"name\" scope=\"col\"><strong>";
                // line 103
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACL_SETTING");
                echo "</strong></th>
\t\t\t\t\t\t<th class=\"value permissions-yes\" scope=\"col\"><a href=\"#\" onclick=\"mark_options('options00";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 104);
                echo "', 'y'); set_colours('00";
                echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 104);
                echo "', false, 'yes'); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACL_YES");
                echo "</a></th>
\t\t\t\t\t\t<th class=\"value permissions-no\" scope=\"col\"><a href=\"#\" onclick=\"mark_options('options00";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 105);
                echo "', 'u'); set_colours('00";
                echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 105);
                echo "', false, 'no'); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACL_NO");
                echo "</a></th>
\t\t\t\t\t\t<th class=\"value permissions-never\" scope=\"col\"><a href=\"#\" onclick=\"mark_options('options00";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 106);
                echo "', 'n'); set_colours('00";
                echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 106);
                echo "', false, 'never'); return false;\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ACL_NEVER");
                echo "</a></th>
\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["auth"], "mask", [], "any", false, false, false, 110));
                foreach ($context['_seq'] as $context["_key"] => $context["mask"]) {
                    // line 111
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["mask"], "S_ROW_COUNT", [], "any", false, false, false, 111) % 2 == 0)) {
                        echo "<tr class=\"row4\">";
                    } else {
                        echo "<tr class=\"row3\">";
                    }
                    // line 112
                    echo "\t\t\t\t\t\t<th class=\"permissions-name";
                    if ((twig_get_attribute($this->env, $this->source, $context["mask"], "S_ROW_COUNT", [], "any", false, false, false, 112) % 2 == 0)) {
                        echo " row4";
                    } else {
                        echo " row3";
                    }
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["mask"], "PERMISSION", [], "any", false, false, false, 112);
                    echo "</th>
\t\t\t\t\t\t\t
\t\t\t\t\t\t<td class=\"permissions-yes\"><label for=\"setting_";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["mask"], "FIELD_NAME", [], "any", false, false, false, 114);
                    echo "_y\"><input onchange=\"set_colours('00";
                    echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 114);
                    echo "', false)\" id=\"setting_";
                    echo twig_get_attribute($this->env, $this->source, $context["mask"], "FIELD_NAME", [], "any", false, false, false, 114);
                    echo "_y\" name=\"setting[";
                    echo twig_get_attribute($this->env, $this->source, $context["mask"], "FIELD_NAME", [], "any", false, false, false, 114);
                    echo "]\" class=\"radio\" type=\"radio\"";
                    if (twig_get_attribute($this->env, $this->source, $context["mask"], "S_YES", [], "any", false, false, false, 114)) {
                        echo " checked=\"checked\"";
                    }
                    echo " value=\"1\" /></label></td>
\t\t\t\t\t\t<td class=\"permissions-no\"><label for=\"setting_";
                    // line 115
                    echo twig_get_attribute($this->env, $this->source, $context["mask"], "FIELD_NAME", [], "any", false, false, false, 115);
                    echo "_u\"><input onchange=\"set_colours('00";
                    echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 115);
                    echo "', false)\" id=\"setting_";
                    echo twig_get_attribute($this->env, $this->source, $context["mask"], "FIELD_NAME", [], "any", false, false, false, 115);
                    echo "_u\" name=\"setting[";
                    echo twig_get_attribute($this->env, $this->source, $context["mask"], "FIELD_NAME", [], "any", false, false, false, 115);
                    echo "]\" class=\"radio\" type=\"radio\"";
                    if (twig_get_attribute($this->env, $this->source, $context["mask"], "S_NO", [], "any", false, false, false, 115)) {
                        echo " checked=\"checked\"";
                    }
                    echo " value=\"-1\" /></label></td>
\t\t\t\t\t\t<td class=\"permissions-never\"><label for=\"setting_";
                    // line 116
                    echo twig_get_attribute($this->env, $this->source, $context["mask"], "FIELD_NAME", [], "any", false, false, false, 116);
                    echo "_n\"><input onchange=\"set_colours('00";
                    echo twig_get_attribute($this->env, $this->source, $context["auth"], "S_ROW_COUNT", [], "any", false, false, false, 116);
                    echo "', false)\" id=\"setting_";
                    echo twig_get_attribute($this->env, $this->source, $context["mask"], "FIELD_NAME", [], "any", false, false, false, 116);
                    echo "_n\" name=\"setting[";
                    echo twig_get_attribute($this->env, $this->source, $context["mask"], "FIELD_NAME", [], "any", false, false, false, 116);
                    echo "]\" class=\"radio\" type=\"radio\"";
                    if (twig_get_attribute($this->env, $this->source, $context["mask"], "S_NEVER", [], "any", false, false, false, 116)) {
                        echo " checked=\"checked\"";
                    }
                    echo " value=\"0\" /></label></td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mask'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auth'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "\t\t</div>

\t</fieldset>

\t<fieldset class=\"quick\">
\t\t<input type=\"submit\" class=\"button1\" name=\"submit\" value=\"";
            // line 129
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />
\t\t";
            // line 130
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

\t<a href=\"#maincontent\">&raquo; ";
            // line 134
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK_TO_TOP");
            echo "</a><br />
\t<br />

";
        } else {
            // line 138
            echo "
\t<h1>";
            // line 139
            echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 141
            echo $this->extensions['phpbb\template\twig\extension']->lang("EXPLAIN");
            echo "</p>

\t<form id=\"acp_roles\" method=\"post\" action=\"";
            // line 143
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<table class=\"table1\">
\t\t<col class=\"col2\" /><col class=\"col2\" /><col class=\"col1\" /><col class=\"col2\" /><col class=\"col2\" />
\t<thead>
\t<tr>
\t\t<th>";
            // line 149
            echo $this->extensions['phpbb\template\twig\extension']->lang("ROLE_NAME");
            echo "</th>
\t\t<th colspan=\"2\">";
            // line 150
            echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "roles", [], "any", false, false, false, 154));
            foreach ($context['_seq'] as $context["_key"] => $context["roles"]) {
                // line 155
                echo "\t<tr>
\t\t<td style=\"vertical-align: top;\"><strong>";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["roles"], "ROLE_NAME", [], "any", false, false, false, 156);
                echo "</strong>
\t\t\t";
                // line 157
                if (twig_get_attribute($this->env, $this->source, $context["roles"], "ROLE_DESCRIPTION", [], "any", false, false, false, 157)) {
                    echo "<br /><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["roles"], "ROLE_DESCRIPTION", [], "any", false, false, false, 157);
                    echo "</span>";
                }
                // line 158
                echo "\t\t</td>
\t\t<td style=\"width: 30%; text-align: center; vertical-align: top; white-space: nowrap;\">";
                // line 159
                if (twig_get_attribute($this->env, $this->source, $context["roles"], "U_DISPLAY_ITEMS", [], "any", false, false, false, 159)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["roles"], "U_DISPLAY_ITEMS", [], "any", false, false, false, 159);
                    echo "\">";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_ASSIGNED_ITEMS");
                    echo "</a>";
                } else {
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_ASSIGNED_ITEMS");
                }
                echo "</td>
\t\t<td class=\"actions\">
\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                // line 161
                echo ($context["ICON_MOVE_UP_DISABLED"] ?? null);
                echo "</span>
\t\t\t<span class=\"up\"><a href=\"";
                // line 162
                echo twig_get_attribute($this->env, $this->source, $context["roles"], "U_MOVE_UP", [], "any", false, false, false, 162);
                echo "\" data-ajax=\"row_up\">";
                echo ($context["ICON_MOVE_UP"] ?? null);
                echo "</a></span>
\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                // line 163
                echo ($context["ICON_MOVE_DOWN_DISABLED"] ?? null);
                echo "</span>
\t\t\t<span class=\"down\"><a href=\"";
                // line 164
                echo twig_get_attribute($this->env, $this->source, $context["roles"], "U_MOVE_DOWN", [], "any", false, false, false, 164);
                echo "\" data-ajax=\"row_down\">";
                echo ($context["ICON_MOVE_DOWN"] ?? null);
                echo "</a></span>
\t\t\t<a href=\"";
                // line 165
                echo twig_get_attribute($this->env, $this->source, $context["roles"], "U_EDIT", [], "any", false, false, false, 165);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("EDIT_ROLE");
                echo "\">";
                echo ($context["ICON_EDIT"] ?? null);
                echo "</a> 
\t\t\t<a href=\"";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["roles"], "U_REMOVE", [], "any", false, false, false, 166);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("REMOVE_ROLE");
                echo "\" data-ajax=\"row_delete\">";
                echo ($context["ICON_DELETE"] ?? null);
                echo "</a>
\t\t</td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roles'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "\t</tbody>
\t</table>

\t<fieldset class=\"quick\">
\t\t";
            // line 174
            echo $this->extensions['phpbb\template\twig\extension']->lang("CREATE_ROLE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo " <input type=\"text\" name=\"role_name\" value=\"\" maxlength=\"255\" />";
            if (($context["S_ROLE_OPTIONS"] ?? null)) {
                echo " <select name=\"options_from\"><option value=\"0\" selected=\"selected\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("CREATE_ROLE_FROM");
                echo "</option>";
                echo ($context["S_ROLE_OPTIONS"] ?? null);
                echo "</select>";
            }
            echo " <input class=\"button2\" type=\"submit\" name=\"add\" value=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" /><br />
\t\t";
            // line 175
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

\t";
            // line 179
            if (($context["S_DISPLAY_ROLE_MASK"] ?? null)) {
                // line 180
                echo "
\t\t<a id=\"assigned_to\"></a>

\t\t<h1>";
                // line 183
                echo $this->extensions['phpbb\template\twig\extension']->lang("ROLE_ASSIGNED_TO");
                echo "</h1>

\t\t";
                // line 185
                $location = "permission_roles_mask.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("permission_roles_mask.html", "acp_permission_roles.html", 185)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 186
                echo "
\t";
            }
            // line 188
            echo "
";
        }
        // line 190
        echo "
";
        // line 191
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_permission_roles.html", 191)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_permission_roles.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  605 => 191,  602 => 190,  598 => 188,  594 => 186,  582 => 185,  577 => 183,  572 => 180,  570 => 179,  563 => 175,  548 => 174,  542 => 170,  528 => 166,  520 => 165,  514 => 164,  510 => 163,  504 => 162,  500 => 161,  487 => 159,  484 => 158,  478 => 157,  474 => 156,  471 => 155,  467 => 154,  460 => 150,  456 => 149,  447 => 143,  442 => 141,  437 => 139,  434 => 138,  427 => 134,  420 => 130,  416 => 129,  409 => 124,  399 => 119,  380 => 116,  366 => 115,  352 => 114,  340 => 112,  333 => 111,  329 => 110,  318 => 106,  310 => 105,  302 => 104,  298 => 103,  286 => 94,  275 => 92,  271 => 91,  267 => 89,  256 => 87,  246 => 85,  236 => 83,  234 => 82,  225 => 81,  223 => 80,  214 => 79,  211 => 78,  207 => 77,  197 => 70,  189 => 65,  182 => 60,  178 => 58,  166 => 57,  161 => 55,  158 => 54,  156 => 53,  149 => 49,  145 => 48,  138 => 44,  131 => 43,  125 => 40,  120 => 39,  115 => 37,  109 => 34,  104 => 32,  98 => 29,  93 => 27,  84 => 25,  77 => 20,  71 => 18,  69 => 17,  56 => 6,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_permission_roles.html", "");
    }
}
