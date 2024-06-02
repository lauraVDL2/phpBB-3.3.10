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

/* acp_captcha.html */
class __TwigTemplate_7695f3f2e3b332eaa2a2761519615b8bc0802d6cb6b44a785f559c97b6963adf extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_captcha.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_VC_SETTINGS");
        echo "</h1>

<p>";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_VC_SETTINGS_EXPLAIN");
        echo "</p>

<p>";
        // line 9
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_VC_EXT_GET_MORE");
        echo "</p>

";
        // line 11
        if (($context["ERROR_MSG"] ?? null)) {
            // line 12
            echo "<div class=\"errorbox\">
\t<h3>";
            // line 13
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
            echo "</h3>
\t<p>";
            // line 14
            echo ($context["ERROR_MSG"] ?? null);
            echo "</p>
</div>
";
        }
        // line 17
        echo "
<form id=\"acp_captcha\" method=\"post\" action=\"";
        // line 18
        echo ($context["U_ACTION"] ?? null);
        echo "\">

<fieldset>
<legend>";
        // line 21
        echo $this->extensions['phpbb\template\twig\extension']->lang("GENERAL_OPTIONS");
        echo "</legend>

<dl>
\t<dt><label for=\"enable_confirm\">";
        // line 24
        echo $this->extensions['phpbb\template\twig\extension']->lang("VISUAL_CONFIRM_REG");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("VISUAL_CONFIRM_REG_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" id=\"enable_confirm\" name=\"enable_confirm\" value=\"1\"";
        // line 25
        if (($context["REG_ENABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ENABLED");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_confirm\" value=\"0\"";
        // line 26
        if ( !($context["REG_ENABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLED");
        echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"max_reg_attempts\">";
        // line 29
        echo $this->extensions['phpbb\template\twig\extension']->lang("REG_LIMIT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("REG_LIMIT_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"max_reg_attempts\" type=\"number\" min=\"0\" max=\"9999\" name=\"max_reg_attempts\" value=\"";
        // line 30
        echo ($context["REG_LIMIT"] ?? null);
        echo "\" /></dd>
</dl>
<dl>
\t<dt><label for=\"max_login_attempts\">";
        // line 33
        echo $this->extensions['phpbb\template\twig\extension']->lang("MAX_LOGIN_ATTEMPTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("MAX_LOGIN_ATTEMPTS_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"max_login_attempts\" type=\"number\" min=\"0\" max=\"9999\" name=\"max_login_attempts\" value=\"";
        // line 34
        echo ($context["MAX_LOGIN_ATTEMPTS"] ?? null);
        echo "\" /></dd>
</dl>
<dl>
\t<dt><label for=\"enable_post_confirm\">";
        // line 37
        echo $this->extensions['phpbb\template\twig\extension']->lang("VISUAL_CONFIRM_POST");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("VISUAL_CONFIRM_POST_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" id=\"enable_post_confirm\" name=\"enable_post_confirm\" value=\"1\"";
        // line 38
        if (($context["POST_ENABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ENABLED");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_post_confirm\" value=\"0\"";
        // line 39
        if ( !($context["POST_ENABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLED");
        echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"confirm_refresh\">";
        // line 42
        echo $this->extensions['phpbb\template\twig\extension']->lang("VISUAL_CONFIRM_REFRESH");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("VISUAL_CONFIRM_REFRESH_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" id=\"confirm_refresh\" name=\"confirm_refresh\" value=\"1\"";
        // line 43
        if (($context["CONFIRM_REFRESH"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ENABLED");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"confirm_refresh\" value=\"0\"";
        // line 44
        if ( !($context["CONFIRM_REFRESH"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("DISABLED");
        echo "</label></dd>
</dl>
</fieldset>

<fieldset>
<legend>";
        // line 49
        echo $this->extensions['phpbb\template\twig\extension']->lang("AVAILABLE_CAPTCHAS");
        echo "</legend>
<dl>
\t<dt><label for=\"captcha_select\">";
        // line 51
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_SELECT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_SELECT_EXPLAIN");
        echo "</span></dt>
\t<dd><select id=\"captcha_select\" name=\"select_captcha\" onchange=\"(document.getElementById('acp_captcha')).submit()\" >";
        // line 52
        echo ($context["CAPTCHA_SELECT"] ?? null);
        echo "</select></dd>
</dl>
 ";
        // line 54
        if (($context["S_CAPTCHA_HAS_CONFIG"] ?? null)) {
            // line 55
            echo "<dl>
\t<dt><label for=\"configure\">";
            // line 56
            echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_CONFIGURE");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("CAPTCHA_CONFIGURE_EXPLAIN");
            echo "</span></dt>
\t<dd><input class=\"button2\" type=\"submit\" id=\"configure\" name=\"configure\" value=\"";
            // line 57
            echo $this->extensions['phpbb\template\twig\extension']->lang("CONFIGURE");
            echo "\" /></dd>
</dl>
";
        }
        // line 60
        echo "</fieldset>

";
        // line 62
        if (($context["CAPTCHA_PREVIEW_TPL"] ?? null)) {
            // line 63
            echo "<fieldset>
\t<legend>";
            // line 64
            echo $this->extensions['phpbb\template\twig\extension']->lang("PREVIEW");
            echo "</legend>
";
            // line 65
            $location = (("" . ($context["CAPTCHA_PREVIEW_TPL"] ?? null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . ($context["CAPTCHA_PREVIEW_TPL"] ?? null)) . ""), "acp_captcha.html", 65)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 66
            echo "</fieldset>
";
        }
        // line 68
        echo "
<fieldset>
\t<legend>";
        // line 70
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SUBMIT_CHANGES");
        echo "</legend>
\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"main_submit\" name=\"main_submit\" value=\"";
        // line 72
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"form_reset\" name=\"reset\" value=\"";
        // line 73
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" />&nbsp;
\t</p>
\t";
        // line 75
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>
</form>

";
        // line 79
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_captcha.html", 79)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_captcha.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 79,  284 => 75,  279 => 73,  275 => 72,  270 => 70,  266 => 68,  262 => 66,  250 => 65,  246 => 64,  243 => 63,  241 => 62,  237 => 60,  231 => 57,  224 => 56,  221 => 55,  219 => 54,  214 => 52,  207 => 51,  202 => 49,  190 => 44,  182 => 43,  175 => 42,  165 => 39,  157 => 38,  150 => 37,  144 => 34,  137 => 33,  131 => 30,  124 => 29,  114 => 26,  106 => 25,  99 => 24,  93 => 21,  87 => 18,  84 => 17,  78 => 14,  74 => 13,  71 => 12,  69 => 11,  64 => 9,  59 => 7,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_captcha.html", "");
    }
}
