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

/* acp_disallow.html */
class __TwigTemplate_456823858d0d94beaa214830790a157c36b0012f1e685ca87a5f816caf119aa8 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_disallow.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_DISALLOW_USERNAMES");
        echo "</h1>

<p>";
        // line 7
        echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_DISALLOW_EXPLAIN");
        echo "</p>

<form id=\"acp_disallow\" method=\"post\" action=\"";
        // line 9
        echo ($context["U_ACTION"] ?? null);
        echo "\">

<fieldset>
\t<legend>";
        // line 12
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_DISALLOW_TITLE");
        echo "</legend>
<dl>
\t<dt><label for=\"user\">";
        // line 14
        echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("ADD_DISALLOW_EXPLAIN");
        echo "</span></dt>
\t<dd><input id=\"user\" type=\"text\" class=\"text medium\" maxlength=\"255\" name=\"disallowed_user\" /></dd>
</dl>

<p class=\"quick\">
\t<input class=\"button1\" type=\"submit\" name=\"disallow\" value=\"";
        // line 19
        echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
        echo "\" />
</p>
</fieldset>

<h1>";
        // line 23
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_DISALLOW_TITLE");
        echo "</h1>

<p>";
        // line 25
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_DISALLOW_EXPLAIN");
        echo "</p>

<fieldset>
\t<legend>";
        // line 28
        echo $this->extensions['phpbb\template\twig\extension']->lang("DELETE_DISALLOW_TITLE");
        echo "</legend>
";
        // line 29
        if (($context["S_DISALLOWED_NAMES"] ?? null)) {
            // line 30
            echo "\t<dl>
\t\t<dt><label for=\"disallowed\">";
            // line 31
            echo $this->extensions['phpbb\template\twig\extension']->lang("USERNAME");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"disallowed_id\" id=\"disallowed\">";
            // line 32
            echo ($context["S_DISALLOWED_NAMES"] ?? null);
            echo "</select></dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"allow\" value=\"";
            // line 36
            echo $this->extensions['phpbb\template\twig\extension']->lang("SUBMIT");
            echo "\" />
\t</p>
";
        } else {
            // line 39
            echo "\t<p>";
            echo $this->extensions['phpbb\template\twig\extension']->lang("NO_DISALLOWED");
            echo "</p>
";
        }
        // line 41
        echo "\t";
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>
</form>

";
        // line 45
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_disallow.html", 45)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_disallow.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  137 => 41,  131 => 39,  125 => 36,  118 => 32,  113 => 31,  110 => 30,  108 => 29,  104 => 28,  98 => 25,  93 => 23,  86 => 19,  75 => 14,  70 => 12,  64 => 9,  59 => 7,  54 => 5,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "acp_disallow.html", "");
    }
}
