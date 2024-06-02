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

/* acp_ban.html */
class __TwigTemplate_e981d584311c896345c228ce3624a62df266d4e78a706acbc6834120e055128c extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_ban.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<p>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_BAN_EXPLAIN");
        echo "</p>

<h1>";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo "</h1>

<p>";
        // line 9
        echo $this->extensions['phpbb\template\twig\extension']->lang("EXPLAIN");
        echo "</p>

<script>
// <![CDATA[

\tvar ban_length = new Array();
\t\tban_length[-1] = '';
\tvar ban_reason = new Array();
\t\tban_reason[-1] = '';
\tvar ban_give_reason = new Array();
\t\tban_give_reason[-1] = '';

\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "bans", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["bans"]) {
            // line 22
            echo "\t\tban_length['";
            echo twig_get_attribute($this->env, $this->source, $context["bans"], "BAN_ID", [], "any", false, false, false, 22);
            echo "'] = '";
            echo twig_get_attribute($this->env, $this->source, $context["bans"], "A_LENGTH", [], "any", false, false, false, 22);
            echo "';
\t\t";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["bans"], "A_REASON", [], "any", false, false, false, 23)) {
                // line 24
                echo "\t\t\tban_reason['";
                echo twig_get_attribute($this->env, $this->source, $context["bans"], "BAN_ID", [], "any", false, false, false, 24);
                echo "'] = '";
                echo twig_get_attribute($this->env, $this->source, $context["bans"], "A_REASON", [], "any", false, false, false, 24);
                echo "';
\t\t";
            }
            // line 26
            echo "\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["bans"], "A_GIVE_REASON", [], "any", false, false, false, 26)) {
                // line 27
                echo "\t\t\tban_give_reason['";
                echo twig_get_attribute($this->env, $this->source, $context["bans"], "BAN_ID", [], "any", false, false, false, 27);
                echo "'] = '";
                echo twig_get_attribute($this->env, $this->source, $context["bans"], "A_GIVE_REASON", [], "any", false, false, false, 27);
                echo "';
\t\t";
            }
            // line 29
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bans'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
\tfunction display_details(option)
\t{
\t\tdocument.getElementById('unbanlength').value = ban_length[option];
\t\tif (option in ban_reason) {
\t\t\tdocument.getElementById('unbanreason').innerHTML = ban_reason[option];
\t\t} else {
\t\t\tdocument.getElementById('unbanreason').innerHTML = '';
\t\t}
\t\tif (option in ban_give_reason) {
\t\t\tdocument.getElementById('unbangivereason').innerHTML = ban_give_reason[option];
\t\t} else {
\t\t\tdocument.getElementById('unbangivereason').innerHTML = '';
\t\t}
\t}

// ]]>
</script>

<form id=\"acp_ban\" method=\"post\" action=\"";
        // line 49
        echo ($context["U_ACTION"] ?? null);
        echo "\">

<fieldset>
\t<legend>";
        // line 52
        echo $this->extensions['phpbb\template\twig\extension']->lang("TITLE");
        echo "</legend>
<dl>
\t<dt><label for=\"ban\">";
        // line 54
        echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_CELL");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd>";
        // line 55
        echo "<textarea name=\"ban\" cols=\"40\" rows=\"3\" id=\"ban\"></textarea>";
        echo "</dd>
\t";
        // line 56
        if (($context["S_USERNAME_BAN"] ?? null)) {
            echo "<dd>[ <a href=\"";
            echo ($context["U_FIND_USERNAME"] ?? null);
            echo "\" onclick=\"find_username(this.href); return false;\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
            echo "</a> ]</dd>";
        }
        // line 57
        echo "</dl>
<dl>
\t<dt><label for=\"banlength\">";
        // line 59
        echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_LENGTH");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd><label for=\"banlength\"><select name=\"banlength\" id=\"banlength\" onchange=\"if(this.value==-1){document.getElementById('banlengthother').style.display = 'block';}else{document.getElementById('banlengthother').style.display='none';}\">";
        // line 60
        echo ($context["S_BAN_END_OPTIONS"] ?? null);
        echo "</select></label></dd>
\t<dd id=\"banlengthother\" style=\"display: none;\"><label><input type=\"text\" name=\"banlengthother\" class=\"inputbox\" /><br /><span>";
        // line 61
        echo $this->extensions['phpbb\template\twig\extension']->lang("YEAR_MONTH_DAY");
        echo "</span></label></dd>
</dl>
<dl>
\t<dt><label for=\"banexclude\">";
        // line 64
        echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_EXCLUDE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_EXCLUDE_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" name=\"banexclude\" value=\"1\" class=\"radio\" /> ";
        // line 65
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t<label><input type=\"radio\" name=\"banexclude\" id=\"banexclude\" value=\"0\" checked=\"checked\" class=\"radio\" /> ";
        // line 66
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"banreason\">";
        // line 69
        echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_REASON");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd><input name=\"banreason\" type=\"text\" class=\"text medium\" maxlength=\"255\" id=\"banreason\" /></dd>
</dl>
<dl>
\t<dt><label for=\"bangivereason\">";
        // line 73
        echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_GIVE_REASON");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd><input name=\"bangivereason\" type=\"text\" class=\"text medium\" maxlength=\"255\" id=\"bangivereason\" /></dd>
</dl>
</fieldset>
<fieldset>
\t<legend>";
        // line 78
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SUBMIT_CHANGES");
        echo "</legend>
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"bansubmit\" name=\"bansubmit\" value=\"";
        // line 80
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"banreset\" name=\"banreset\" value=\"";
        // line 81
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" />
\t</p>
\t";
        // line 83
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>
</form>

<br /><br />

<h1>";
        // line 89
        echo $this->extensions['phpbb\template\twig\extension']->lang("UNBAN_TITLE");
        echo "</h1>

<p>";
        // line 91
        echo $this->extensions['phpbb\template\twig\extension']->lang("UNBAN_EXPLAIN");
        echo "</p>

<form id=\"acp_unban\" method=\"post\" action=\"";
        // line 93
        echo ($context["U_ACTION"] ?? null);
        echo "\">

<fieldset>
\t<legend>";
        // line 96
        echo $this->extensions['phpbb\template\twig\extension']->lang("UNBAN_TITLE");
        echo "</legend>

";
        // line 98
        if (($context["S_BANNED_OPTIONS"] ?? null)) {
            // line 99
            echo "\t<dl>
\t\t<dt><label for=\"unban\">";
            // line 100
            echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_CELL");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"unban\" name=\"unban[]\" multiple=\"multiple\" size=\"10\" style=\"width: 50%\" onchange=\"if (this.selectedIndex > -1) display_details(this.options[this.selectedIndex].value); else display_details(-1);\">";
            // line 101
            echo ($context["BANNED_OPTIONS"] ?? null);
            echo "</select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"unbanlength\">";
            // line 104
            echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_LENGTH");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><input style=\"border: 0;\" type=\"text\" class=\"text full\" readonly=\"readonly\" name=\"unbanlength\" id=\"unbanlength\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"unbanreason\">";
            // line 108
            echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_REASON");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><textarea style=\"border: 0;\" class=\"text full\" readonly=\"readonly\" name=\"unbanreason\" id=\"unbanreason\" rows=\"5\" cols=\"80\">&nbsp;</textarea></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"unbangivereason\">";
            // line 112
            echo $this->extensions['phpbb\template\twig\extension']->lang("BAN_GIVE_REASON");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><textarea style=\"border: 0;\" class=\"text full\" readonly=\"readonly\" name=\"unbangivereason\" id=\"unbangivereason\" rows=\"5\" cols=\"80\">&nbsp;</textarea></dd>
\t</dl>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"unbansubmit\" name=\"unbansubmit\" value=\"";
            // line 117
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"unbanreset\" name=\"unbanreset\" value=\"";
            // line 118
            echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 120
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>

";
        } else {
            // line 124
            echo "
\t<p>";
            // line 125
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_BAN_CELL");
            echo "</p>
\t";
            // line 126
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
</fieldset>

";
        }
        // line 130
        echo "
</form>

";
        // line 133
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_ban.html", 133)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_ban.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 133,  334 => 130,  327 => 126,  323 => 125,  320 => 124,  313 => 120,  308 => 118,  304 => 117,  295 => 112,  287 => 108,  279 => 104,  273 => 101,  268 => 100,  265 => 99,  263 => 98,  258 => 96,  252 => 93,  247 => 91,  242 => 89,  233 => 83,  228 => 81,  224 => 80,  219 => 78,  210 => 73,  202 => 69,  196 => 66,  192 => 65,  185 => 64,  179 => 61,  175 => 60,  170 => 59,  166 => 57,  158 => 56,  154 => 55,  149 => 54,  144 => 52,  138 => 49,  117 => 30,  111 => 29,  103 => 27,  100 => 26,  92 => 24,  90 => 23,  83 => 22,  79 => 21,  64 => 9,  59 => 7,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_ban.html", "");
    }
}
