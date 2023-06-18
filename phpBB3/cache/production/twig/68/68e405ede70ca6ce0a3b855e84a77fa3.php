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

/* acp_email.html */
class __TwigTemplate_32f069e50ea42b9444fae03c3cae9979 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_email.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_MASS_EMAIL");
        echo "</h1>

<p>";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_MASS_EMAIL_EXPLAIN");
        echo "</p>

";
        // line 9
        if (($context["S_WARNING"] ?? null)) {
            // line 10
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 11
            echo $this->extensions['phpbb\template\twig\extension']->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 12
            echo ($context["WARNING_MSG"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 15
        echo "
<form id=\"acp_email\" method=\"post\" action=\"";
        // line 16
        echo ($context["U_ACTION"] ?? null);
        echo "\">

<fieldset>
\t<legend>";
        // line 19
        echo $this->extensions['phpbb\template\twig\extension']->lang("COMPOSE");
        echo "</legend>
<dl>
\t<dt><label for=\"group\">";
        // line 21
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_TO_GROUP");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t";
        // line 22
        // line 23
        echo "\t<dd><select id=\"group\" name=\"g\">";
        echo ($context["S_GROUP_OPTIONS"] ?? null);
        echo "</select></dd>
\t";
        // line 24
        // line 25
        echo "</dl>
<dl>
\t<dt><label for=\"usernames\">";
        // line 27
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_TO_USERS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_TO_USERS_EXPLAIN");
        echo "</span></dt>
\t<dd><textarea name=\"usernames\" id=\"usernames\" rows=\"5\" cols=\"40\">";
        // line 28
        echo ($context["USERNAMES"] ?? null);
        echo "</textarea></dd>
\t<dd>";
        // line 29
        echo "[ <a href=\"";
        echo ($context["U_FIND_USERNAME"] ?? null);
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
        echo "</a> ]";
        echo "</dd>
</dl>
<dl>
\t<dt><label for=\"subject\">";
        // line 32
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBJECT");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd><input name=\"subject\" type=\"text\" id=\"subject\" value=\"";
        // line 33
        echo ($context["SUBJECT"] ?? null);
        echo "\" /></dd>
</dl>
<dl>
\t<dt><label for=\"message\">";
        // line 36
        echo $this->extensions['phpbb\template\twig\extension']->lang("MASS_MESSAGE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("MASS_MESSAGE_EXPLAIN");
        echo "</span></dt>
\t<dd><textarea id=\"message\" name=\"message\" rows=\"10\" cols=\"60\">";
        // line 37
        echo ($context["MESSAGE"] ?? null);
        echo "</textarea></dd>
</dl>
<dl>
\t<dt><label for=\"priority\">";
        // line 40
        echo $this->extensions['phpbb\template\twig\extension']->lang("MAIL_PRIORITY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd><select id=\"priority\" name=\"mail_priority_flag\">";
        // line 41
        echo ($context["S_PRIORITY_OPTIONS"] ?? null);
        echo "</select></dd>
</dl>
<dl>
\t<dt><label for=\"banned\">";
        // line 44
        echo $this->extensions['phpbb\template\twig\extension']->lang("MAIL_BANNED");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("MAIL_BANNED_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"banned\" name=\"mail_banned_flag\" type=\"checkbox\" class=\"radio\" /></dd>
</dl>
<dl>
\t<dt><label for=\"send\">";
        // line 48
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_IMMEDIATELY");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd><input id=\"send\" type=\"checkbox\" class=\"radio\" name=\"send_immediately\" checked=\"checked\" /></dd>
</dl>

";
        // line 52
        // line 53
        echo "
<p class=\"submit-buttons\">
\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 55
        echo $this->extensions['phpbb\template\twig\extension']->lang("SEND_EMAIL");
        echo "\" />&nbsp;
\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 56
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" />
</p>
";
        // line 58
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>
</form>

";
        // line 62
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_email.html", 62)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_email.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 62,  197 => 58,  192 => 56,  188 => 55,  184 => 53,  183 => 52,  175 => 48,  165 => 44,  159 => 41,  154 => 40,  148 => 37,  141 => 36,  135 => 33,  130 => 32,  120 => 29,  116 => 28,  109 => 27,  105 => 25,  104 => 24,  99 => 23,  98 => 22,  93 => 21,  88 => 19,  82 => 16,  79 => 15,  73 => 12,  69 => 11,  66 => 10,  64 => 9,  59 => 7,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_email.html", "");
    }
}
