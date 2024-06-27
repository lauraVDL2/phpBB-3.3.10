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

/* acp_users_profile.html */
class __TwigTemplate_a741ee9b2b453ae5dbf4d36e9bb695087873ef53becd8b79d37a18816a8db775 extends \Twig\Template
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
        echo "\t<form id=\"user_profile\" method=\"post\" action=\"";
        echo ($context["U_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

\t<fieldset>
\t\t<legend>";
        // line 4
        echo $this->extensions['phpbb\template\twig\extension']->lang("USER_PROFILE");
        echo "</legend>
\t";
        // line 5
        // line 6
        echo "\t<dl>
\t\t<dt><label for=\"jabber\">";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("UCP_JABBER");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t\t<dd><input type=\"email\" id=\"jabber\" name=\"jabber\" value=\"";
        // line 8
        echo ($context["JABBER"] ?? null);
        echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"birthday\">";
        // line 11
        echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BIRTHDAY_EXPLAIN");
        echo "</span></dt>
\t\t<dd>";
        // line 12
        echo $this->extensions['phpbb\template\twig\extension']->lang("DAY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo " <select id=\"birthday\" name=\"bday_day\">";
        echo ($context["S_BIRTHDAY_DAY_OPTIONS"] ?? null);
        echo "</select> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("MONTH");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo " <select name=\"bday_month\">";
        echo ($context["S_BIRTHDAY_MONTH_OPTIONS"] ?? null);
        echo "</select> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("YEAR");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo " <select name=\"bday_year\">";
        echo ($context["S_BIRTHDAY_YEAR_OPTIONS"] ?? null);
        echo "</select></dd>
\t</dl>
\t";
        // line 14
        // line 15
        echo "\t</fieldset>

\t";
        // line 17
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "profile_fields", [], "any", false, false, false, 17))) {
            // line 18
            echo "\t\t<fieldset>
\t\t\t<legend>";
            // line 19
            echo $this->extensions['phpbb\template\twig\extension']->lang("USER_CUSTOM_PROFILE_FIELDS");
            echo "</legend>
\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "profile_fields", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
                // line 21
                echo "\t\t<dl>
\t\t\t<dt><label";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD_ID", [], "any", false, false, false, 22)) {
                    echo " for=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD_ID", [], "any", false, false, false, 22);
                    echo "\"";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_NAME", [], "any", false, false, false, 22);
                echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
                echo "</label>";
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_EXPLAIN", [], "any", false, false, false, 22)) {
                    echo "<br /><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "LANG_EXPLAIN", [], "any", false, false, false, 22);
                    echo "</span>";
                }
                echo "</dt>
\t\t\t<dd>";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "FIELD", [], "any", false, false, false, 23);
                echo "</dd>
\t\t\t";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["profile_fields"], "ERROR", [], "any", false, false, false, 24)) {
                    // line 25
                    echo "\t\t\t\t<dd><span class=\"small\" style=\"color: red;\">";
                    echo twig_get_attribute($this->env, $this->source, $context["profile_fields"], "ERROR", [], "any", false, false, false, 25);
                    echo "</span></dd>
\t\t\t";
                }
                // line 27
                echo "\t\t</dl>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t</fieldset>
\t";
        }
        // line 31
        echo "\t";
        // line 32
        echo "\t<fieldset class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
        // line 33
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />
\t\t";
        // line 34
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</fieldset>
\t</form>
";
    }

    public function getTemplateName()
    {
        return "acp_users_profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 34,  156 => 33,  153 => 32,  151 => 31,  147 => 29,  140 => 27,  134 => 25,  132 => 24,  128 => 23,  111 => 22,  108 => 21,  104 => 20,  100 => 19,  97 => 18,  95 => 17,  91 => 15,  90 => 14,  72 => 12,  65 => 11,  59 => 8,  54 => 7,  51 => 6,  50 => 5,  46 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_users_profile.html", "");
    }
}
