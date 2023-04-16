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

/* acp_language.html */
class __TwigTemplate_e69f876c1953994030afb9825c365633 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_language.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (($context["S_DETAILS"] ?? null)) {
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

\t<h1>";
            // line 9
            echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE_PACK_DETAILS");
            echo "</h1>

\t<form id=\"details\" method=\"post\" action=\"";
            // line 11
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 14
            echo ($context["LANG_LOCAL_NAME"] ?? null);
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"lang_english_name\">";
            // line 16
            echo $this->extensions['phpbb\template\twig\extension']->lang("LANG_ENGLISH_NAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"lang_english_name\" name=\"lang_english_name\" value=\"";
            // line 17
            echo ($context["LANG_ENGLISH_NAME"] ?? null);
            echo "\" maxlength=\"100\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"lang_local_name\">";
            // line 20
            echo $this->extensions['phpbb\template\twig\extension']->lang("LANG_LOCAL_NAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"lang_local_name\" name=\"lang_local_name\" value=\"";
            // line 21
            echo ($context["LANG_LOCAL_NAME"] ?? null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
            // line 24
            echo $this->extensions['phpbb\template\twig\extension']->lang("LANG_ISO_CODE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><strong>";
            // line 25
            echo ($context["LANG_ISO"] ?? null);
            echo "</strong></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"lang_author\">";
            // line 28
            echo $this->extensions['phpbb\template\twig\extension']->lang("LANG_AUTHOR");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"lang_author\" name=\"lang_author\" value=\"";
            // line 29
            echo ($context["LANG_AUTHOR"] ?? null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>

\t<p class=\"quick\" style=\"margin-top: -15px;\">
\t\t<input type=\"submit\" name=\"update_details\" class=\"button2\" value=\"";
            // line 33
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 35
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

\t";
            // line 39
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "missing_files", [], "any", false, false, false, 39))) {
                // line 40
                echo "\t\t<h3 class=\"error\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MISSING_FILES");
                echo "</h3>

\t\t<fieldset>
\t\t\t<legend>";
                // line 43
                echo $this->extensions['phpbb\template\twig\extension']->lang("MISSING_LANG_FILES");
                echo "</legend>
\t\t\t";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "missing_files", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["missing_files"]) {
                    // line 45
                    echo "\t\t\t&raquo; ";
                    echo twig_get_attribute($this->env, $this->source, $context["missing_files"], "FILE_NAME", [], "any", false, false, false, 45);
                    echo "<br />
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['missing_files'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "\t\t</fieldset>
\t";
            }
            // line 49
            echo "
\t";
            // line 50
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "missing_varfile", [], "any", false, false, false, 50))) {
                // line 51
                echo "\t\t<h3 class=\"error\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("MISSING_VARS_EXPLAIN");
                echo "</h3>

\t\t<fieldset>
\t\t\t<legend>";
                // line 54
                echo $this->extensions['phpbb\template\twig\extension']->lang("MISSING_LANG_VARIABLES");
                echo "</legend>
\t\t\t";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "missing_varfile", [], "any", false, false, false, 55));
                foreach ($context['_seq'] as $context["_key"] => $context["missing_varfile"]) {
                    // line 56
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["missing_varfile"], "FILE_NAME", [], "any", false, false, false, 57);
                    echo "</label></dt>
\t\t\t\t";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["missing_varfile"], "variable", [], "any", false, false, false, 58));
                    foreach ($context['_seq'] as $context["_key"] => $context["variable"]) {
                        // line 59
                        echo "\t\t\t\t<dd>";
                        echo twig_get_attribute($this->env, $this->source, $context["variable"], "VAR_NAME", [], "any", false, false, false, 59);
                        echo "</dd>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variable'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "\t\t\t</dl>
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['missing_varfile'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t</fieldset>
\t";
            }
        } else {
            // line 66
            echo "
\t<h1>";
            // line 67
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_LANGUAGE_PACKS");
            echo "</h1>

\t<p>";
            // line 69
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_LANGUAGE_PACKS_EXPLAIN");
            echo "</p>

\t<fieldset class=\"quick\">
\t\t<span class=\"small\"><a href=\"https://www.phpbb.com/go/customise/language-packs/3.3\" target=\"_blank\">";
            // line 72
            echo $this->extensions['phpbb\template\twig\extension']->lang("BROWSE_LANGUAGE_PACKS_DATABASE");
            echo "</a></span>
\t</fieldset>

\t<table class=\"table1 zebra-table\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 78
            echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE_PACK_NAME");
            echo "</th>
\t\t<th>";
            // line 79
            echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE_PACK_LOCALNAME");
            echo "</th>
\t\t<th>";
            // line 80
            echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE_PACK_ISO");
            echo "</th>
\t\t<th>";
            // line 81
            echo $this->extensions['phpbb\template\twig\extension']->lang("LANGUAGE_PACK_USED_BY");
            echo "</th>
\t\t<th>";
            // line 82
            echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t\t<td class=\"row3\" colspan=\"5\"><strong>";
            // line 87
            echo $this->extensions['phpbb\template\twig\extension']->lang("INSTALLED_LANGUAGE_PACKS");
            echo "</strong></td>
\t</tr>
\t";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "lang", [], "any", false, false, false, 89));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 90
                echo "\t<tr>
\t\t<td><a href=\"";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "U_DETAILS", [], "any", false, false, false, 91);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "ENGLISH_NAME", [], "any", false, false, false, 91);
                echo "</a> ";
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "TAG", [], "any", false, false, false, 91);
                echo "</td>
\t\t<td>";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "LOCAL_NAME", [], "any", false, false, false, 92);
                echo "</td>
\t\t<td style=\"text-align: center;\"><strong>";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "ISO", [], "any", false, false, false, 93);
                echo "</strong></td>
\t\t<td style=\"text-align: center;\">";
                // line 94
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "USED_BY", [], "any", false, false, false, 94);
                echo "</td>
\t\t<td style=\"text-align: center;\"><a href=\"";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["lang"], "U_DELETE", [], "any", false, false, false, 95);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE");
                echo "</a></td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t";
            if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notinst", [], "any", false, false, false, 98))) {
                // line 99
                echo "\t<tr>
\t\t<td class=\"row3\" colspan=\"5\"><strong>";
                // line 100
                echo $this->extensions['phpbb\template\twig\extension']->lang("UNINSTALLED_LANGUAGE_PACKS");
                echo "</strong></td>
\t</tr>
\t";
            }
            // line 103
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "notinst", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["notinst"]) {
                // line 104
                echo "\t<tr>
\t\t<td>";
                // line 105
                echo twig_get_attribute($this->env, $this->source, $context["notinst"], "NAME", [], "any", false, false, false, 105);
                echo "</td>
\t\t<td>";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["notinst"], "LOCAL_NAME", [], "any", false, false, false, 106);
                echo "</td>
\t\t<td style=\"text-align: center;\"><strong>";
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["notinst"], "ISO", [], "any", false, false, false, 107);
                echo "</strong></td>
\t\t<td colspan=\"2\" style=\"text-align: center;\"><a href=\"";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["notinst"], "U_INSTALL", [], "any", false, false, false, 108);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("INSTALL");
                echo "</a></td>
\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notinst'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "\t</tbody>
\t</table>

";
        }
        // line 115
        echo "
";
        // line 116
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_language.html", 116)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_language.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 116,  362 => 115,  356 => 111,  345 => 108,  341 => 107,  337 => 106,  333 => 105,  330 => 104,  325 => 103,  319 => 100,  316 => 99,  313 => 98,  302 => 95,  298 => 94,  294 => 93,  290 => 92,  282 => 91,  279 => 90,  275 => 89,  270 => 87,  262 => 82,  258 => 81,  254 => 80,  250 => 79,  246 => 78,  237 => 72,  231 => 69,  226 => 67,  223 => 66,  218 => 63,  211 => 61,  202 => 59,  198 => 58,  194 => 57,  191 => 56,  187 => 55,  183 => 54,  176 => 51,  174 => 50,  171 => 49,  167 => 47,  158 => 45,  154 => 44,  150 => 43,  143 => 40,  141 => 39,  134 => 35,  129 => 33,  122 => 29,  117 => 28,  111 => 25,  106 => 24,  100 => 21,  95 => 20,  89 => 17,  84 => 16,  79 => 14,  73 => 11,  68 => 9,  59 => 7,  56 => 6,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_language.html", "");
    }
}
