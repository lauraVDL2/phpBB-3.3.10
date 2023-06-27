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

/* acp_ranks.html */
class __TwigTemplate_3d6151a07531c23bc42508fdc9b42f97 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_ranks.html", 1)->display($context);
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
\t<a href=\"";
            // line 7
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BACK");
            echo "</a>

\t<script>
\t// <![CDATA[
\t\tfunction update_image(newimage)
\t\t{
\t\t\tdocument.getElementById('image').src = (newimage) ? \"";
            // line 13
            echo ($context["RANKS_PATH"] ?? null);
            echo "/\" + encodeURI(newimage) : \"./images/spacer.gif\";
\t\t}

\t// ]]>
\t</script>

\t<h1>";
            // line 19
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_MANAGE_RANKS");
            echo "</h1>

\t<p>";
            // line 21
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_RANKS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_ranks\" method=\"post\" action=\"";
            // line 23
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t
\t<fieldset>
\t\t<legend>";
            // line 26
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_RANKS");
            echo "</legend>

\t";
            // line 28
            // line 29
            echo "
\t<dl>
\t\t<dt><label for=\"title\">";
            // line 31
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK_TITLE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"title\" type=\"text\" id=\"title\" value=\"";
            // line 32
            echo ($context["RANK_TITLE"] ?? null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"rank_image\">";
            // line 35
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK_IMAGE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"rank_image\" id=\"rank_image\" onchange=\"update_image(this.options[selectedIndex].value);\">";
            // line 36
            echo ($context["S_FILENAME_LIST"] ?? null);
            echo "</select></dd>
\t\t<dd><img src=\"";
            // line 37
            echo ($context["RANK_IMAGE"] ?? null);
            echo "\" id=\"image\" alt=\"\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"special_rank\">";
            // line 40
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK_SPECIAL");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><label><input onclick=\"phpbb.toggleDisplay('posts', -1)\" type=\"radio\" class=\"radio\" name=\"special_rank\" value=\"1\" id=\"special_rank\"";
            // line 41
            if (($context["S_SPECIAL_RANK"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
            echo "</label>
\t\t\t<label><input onclick=\"phpbb.toggleDisplay('posts', 1)\" type=\"radio\" class=\"radio\" name=\"special_rank\" value=\"0\"";
            // line 42
            if ( !($context["S_SPECIAL_RANK"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
            echo "</label></dd>
\t</dl>
\t<div id=\"posts\"";
            // line 44
            if (($context["S_SPECIAL_RANK"] ?? null)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t<dl>
\t\t<dt><label for=\"min_posts\">";
            // line 46
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK_MINIMUM");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><input name=\"min_posts\" type=\"number\" id=\"min_posts\" min=\"0\" max=\"9999999999\" value=\"";
            // line 47
            echo ($context["MIN_POSTS"] ?? null);
            echo "\" /></dd>
\t</dl>
\t</div>

\t";
            // line 51
            // line 52
            echo "
\t<p class=\"submit-buttons\">
\t\t<input type=\"hidden\" name=\"action\" value=\"save\" />

\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 56
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 57
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
            echo "\" />
\t\t";
            // line 58
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</p>
\t</fieldset>
\t</form>

";
        } else {
            // line 64
            echo "
\t<h1>";
            // line 65
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_MANAGE_RANKS");
            echo "</h1>

\t<p>";
            // line 67
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_RANKS_EXPLAIN");
            echo "</p>

\t<form id=\"acp_ranks\" method=\"post\" action=\"";
            // line 69
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 71
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_MANAGE_RANKS");
            echo "</legend>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t";
            // line 76
            // line 77
            echo "\t\t<th>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK_IMAGE");
            echo "</th>
\t\t<th>";
            // line 78
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK_TITLE");
            echo "</th>
\t\t<th>";
            // line 79
            echo $this->extensions['phpbb\template\twig\extension']->lang("RANK_MINIMUM");
            echo "</th>
\t\t";
            // line 80
            // line 81
            echo "\t\t<th>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACTION");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "ranks", [], "any", false, false, false, 85));
            foreach ($context['_seq'] as $context["_key"] => $context["ranks"]) {
                // line 86
                echo "\t<tr>
\t\t";
                // line 87
                // line 88
                echo "\t\t<td style=\"text-align: center;\">";
                if (twig_get_attribute($this->env, $this->source, $context["ranks"], "S_RANK_IMAGE", [], "any", false, false, false, 88)) {
                    echo "<img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ranks"], "RANK_IMAGE", [], "any", false, false, false, 88);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ranks"], "RANK_TITLE", [], "any", false, false, false, 88);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["ranks"], "RANK_TITLE", [], "any", false, false, false, 88);
                    echo "\" style=\"max-width: 160px;\">";
                } else {
                    echo "&nbsp; - &nbsp;";
                }
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["ranks"], "RANK_TITLE", [], "any", false, false, false, 89);
                echo "</td>
\t\t<td style=\"text-align: center;\">";
                // line 90
                if (twig_get_attribute($this->env, $this->source, $context["ranks"], "S_SPECIAL_RANK", [], "any", false, false, false, 90)) {
                    echo "&nbsp; - &nbsp;";
                } else {
                    echo twig_get_attribute($this->env, $this->source, $context["ranks"], "MIN_POSTS", [], "any", false, false, false, 90);
                }
                echo "</td>
\t\t";
                // line 91
                // line 92
                echo "\t\t<td style=\"text-align: center;\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ranks"], "U_EDIT", [], "any", false, false, false, 92);
                echo "\">";
                echo ($context["ICON_EDIT"] ?? null);
                echo "</a> <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["ranks"], "U_DELETE", [], "any", false, false, false, 92);
                echo "\" data-ajax=\"row_delete\">";
                echo ($context["ICON_DELETE"] ?? null);
                echo "</a></td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ranks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t</tbody>
\t</table>

\t<p class=\"quick\">
\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
            // line 99
            echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_RANK");
            echo "\" />
\t\t";
            // line 100
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</p>
\t</fieldset>
\t</form>

";
        }
        // line 106
        echo "
";
        // line 107
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_ranks.html", 107)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_ranks.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 107,  318 => 106,  309 => 100,  305 => 99,  299 => 95,  283 => 92,  282 => 91,  274 => 90,  270 => 89,  255 => 88,  254 => 87,  251 => 86,  247 => 85,  239 => 81,  238 => 80,  234 => 79,  230 => 78,  225 => 77,  224 => 76,  216 => 71,  211 => 69,  206 => 67,  201 => 65,  198 => 64,  189 => 58,  185 => 57,  181 => 56,  175 => 52,  174 => 51,  167 => 47,  162 => 46,  155 => 44,  146 => 42,  138 => 41,  133 => 40,  127 => 37,  123 => 36,  118 => 35,  112 => 32,  107 => 31,  103 => 29,  102 => 28,  97 => 26,  91 => 23,  86 => 21,  81 => 19,  72 => 13,  59 => 7,  56 => 6,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_ranks.html", "");
    }
}
