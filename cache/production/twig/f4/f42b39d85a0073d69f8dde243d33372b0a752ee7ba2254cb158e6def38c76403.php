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

/* acp_prune_users.html */
class __TwigTemplate_919d490528658fd01dfd9550a60df2300b67235d6f935976f4d4ddd3a36890be extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_prune_users.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_PRUNE_USERS");
        echo "</h1>

<p>";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_PRUNE_USERS_EXPLAIN");
        echo "</p>

<form id=\"acp_prune\" method=\"post\" action=\"";
        // line 9
        echo ($context["U_ACTION"] ?? null);
        echo "\">

<fieldset>
\t<legend>";
        // line 12
        echo $this->extensions['phpbb\template\twig\extension']->lang("CRITERIA");
        echo "</legend>
<dl>
\t<dt><label for=\"username\">";
        // line 14
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd><input type=\"text\" id=\"username\" name=\"username\" /></dd>
</dl>
<dl>
\t<dt><label for=\"email\">";
        // line 18
        echo $this->extensions['phpbb\template\twig\extension']->lang("EMAIL");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd><input type=\"text\" id=\"email\" name=\"email\" /></dd>
</dl>
<dl>
\t<dt><label for=\"joined_after\">";
        // line 22
        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("JOINED_EXPLAIN");
        echo "</span></dt>
\t<dd>
\t\t<strong>";
        // line 24
        echo $this->extensions['phpbb\template\twig\extension']->lang("AFTER");
        echo "</strong> <input type=\"text\" id=\"joined_after\" name=\"joined_after\" />
\t\t<br /> <br /> <strong>";
        // line 25
        echo $this->extensions['phpbb\template\twig\extension']->lang("BEFORE");
        echo "</strong> <input type=\"text\" id=\"joined_before\" name=\"joined_before\" />
\t</dd>
</dl>
<dl>
\t<dt><label for=\"active\">";
        // line 29
        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("LAST_ACTIVE_EXPLAIN");
        echo "</span></dt>
\t<dd><select name=\"active_select\">";
        // line 30
        echo ($context["S_ACTIVE_OPTIONS"] ?? null);
        echo "</select> <input type=\"text\" id=\"active\" name=\"active\" /></dd>
</dl>
<dl>
\t<dt><label for=\"count\">";
        // line 33
        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd><select name=\"count_select\">";
        // line 34
        echo ($context["S_COUNT_OPTIONS"] ?? null);
        echo "</select> <input type=\"number\" id=\"count\" name=\"count\" /></dd>
</dl>
<dl>
\t<dt><label for=\"posts_on_queue\">";
        // line 37
        echo $this->extensions['phpbb\template\twig\extension']->lang("POSTS_ON_QUEUE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label></dt>
\t<dd><select name=\"queue_select\">";
        // line 38
        echo ($context["S_COUNT_OPTIONS"] ?? null);
        echo "</select> <input type=\"number\" id=\"posts_on_queue\" name=\"posts_on_queue\" /></dd>
</dl>
";
        // line 40
        if (($context["S_GROUP_LIST"] ?? null)) {
            // line 41
            echo "<dl>
\t<dt><label for=\"group_id\">";
            // line 42
            echo $this->extensions['phpbb\template\twig\extension']->lang("GROUP");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label><br /><span>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PRUNE_USERS_GROUP_EXPLAIN");
            echo "</span></dt>
\t<dd><select id=\"group_id\" name=\"group_id\">";
            // line 43
            echo ($context["S_GROUP_LIST"] ?? null);
            echo "</select></dd>
</dl>
";
        }
        // line 46
        echo "</fieldset>

<fieldset>
\t<legend>";
        // line 49
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAMES");
        echo "</legend>
<dl>
\t<dt><label for=\"users\">";
        // line 51
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_PRUNE_USERS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("SELECT_USERS_EXPLAIN");
        echo "</span></dt>
\t<dd><textarea id=\"users\" name=\"users\" cols=\"40\" rows=\"5\"></textarea></dd>
\t<dd>";
        // line 53
        echo "[ <a href=\"";
        echo ($context["U_FIND_USERNAME"] ?? null);
        echo "\" onclick=\"find_username(this.href); return false;\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FIND_USERNAME");
        echo "</a> ]";
        echo "</dd>
</dl>
</fieldset>

<fieldset>
\t<legend>";
        // line 58
        echo $this->extensions['phpbb\template\twig\extension']->lang("OPTIONS");
        echo "</legend>
<dl>
\t<dt><label for=\"deleteposts\">";
        // line 60
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_USER_POSTS");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_USER_POSTS_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" name=\"deleteposts\" value=\"1\" /> ";
        // line 61
        echo $this->extensions['phpbb\template\twig\extension']->lang("YES");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" id=\"deleteposts\" name=\"deleteposts\" value=\"0\" checked=\"checked\" /> ";
        // line 62
        echo $this->extensions['phpbb\template\twig\extension']->lang("NO");
        echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"deactivate\">";
        // line 65
        echo $this->extensions['phpbb\template\twig\extension']->lang("DEACTIVATE_DELETE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("DEACTIVATE_DELETE_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" name=\"action\" value=\"delete\" /> ";
        // line 66
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_USERS");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" id=\"deactivate\" name=\"action\" value=\"deactivate\" checked=\"checked\" /> ";
        // line 67
        echo $this->extensions['phpbb\template\twig\extension']->lang("DEACTIVATE");
        echo "</label></dd>
</dl>
</fieldset>

<fieldset>
\t<legend>";
        // line 72
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SUBMIT_CHANGES");
        echo "</legend>
\t<p class=\"submit-buttons\">
\t\t<input type=\"hidden\" name=\"prune\" value=\"1\" />

\t\t<input class=\"button1\" type=\"submit\" id=\"update\" name=\"update\" value=\"";
        // line 76
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 77
        echo $this->extensions['phpbb\template\twig\extension']->lang("RESET");
        echo "\" />
\t\t";
        // line 78
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
\t</p>
</fieldset>

</form>

";
        // line 84
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_prune_users.html", 84)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_prune_users.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 84,  248 => 78,  244 => 77,  240 => 76,  233 => 72,  225 => 67,  221 => 66,  214 => 65,  208 => 62,  204 => 61,  197 => 60,  192 => 58,  180 => 53,  172 => 51,  167 => 49,  162 => 46,  156 => 43,  149 => 42,  146 => 41,  144 => 40,  139 => 38,  134 => 37,  128 => 34,  123 => 33,  117 => 30,  110 => 29,  103 => 25,  99 => 24,  91 => 22,  83 => 18,  75 => 14,  70 => 12,  64 => 9,  59 => 7,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_prune_users.html", "");
    }
}
