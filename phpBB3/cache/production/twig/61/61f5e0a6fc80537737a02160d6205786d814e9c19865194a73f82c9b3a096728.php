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

/* ucp_avatar_options_remote.html */
class __TwigTemplate_aa19badb2428babcf948c72f3ed001bc89484ccf538fd44b3c9e9297cdd4c2db extends \Twig\Template
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
        echo "<dl>
\t<dt><label for=\"avatar_remote_url\">";
        // line 2
        echo $this->extensions['phpbb\template\twig\extension']->lang("LINK_REMOTE_AVATAR");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("LINK_REMOTE_AVATAR_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"url\" name=\"avatar_remote_url\" id=\"avatar_remote_url\" value=\"";
        // line 3
        echo ($context["AVATAR_REMOTE_URL"] ?? null);
        echo "\" class=\"inputbox\" data-reset-on-edit=\"#avatar_remote_width, #avatar_remote_height\" /></dd>
</dl>
<dl>
\t<dt><label for=\"avatar_remote_width\">";
        // line 6
        echo $this->extensions['phpbb\template\twig\extension']->lang("LINK_REMOTE_SIZE");
        echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
        echo "</label><br /><span>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("LINK_REMOTE_SIZE_EXPLAIN");
        echo "</span></dt>
\t<dd>
\t\t<label for=\"avatar_remote_width\"><input type=\"number\" name=\"avatar_remote_width\" id=\"avatar_remote_width\" min=\"";
        // line 8
        echo ($context["AVATAR_MIN_WIDTH"] ?? null);
        echo "\" max=\"";
        echo ($context["AVATAR_MAX_WIDTH"] ?? null);
        echo "\" value=\"";
        echo ($context["AVATAR_REMOTE_WIDTH"] ?? null);
        echo "\" class=\"inputbox autowidth\" /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PIXEL");
        echo "</label> &times;&nbsp;
\t\t<label for=\"avatar_remote_height\"><input type=\"number\" name=\"avatar_remote_height\" id=\"avatar_remote_height\" min=\"";
        // line 9
        echo ($context["AVATAR_MIN_HEIGHT"] ?? null);
        echo "\" max=\"";
        echo ($context["AVATAR_MAX_HEIGHT"] ?? null);
        echo "\" value=\"";
        echo ($context["AVATAR_REMOTE_HEIGHT"] ?? null);
        echo "\" class=\"inputbox autowidth\" /> ";
        echo $this->extensions['phpbb\template\twig\extension']->lang("PIXEL");
        echo "</label>
\t</dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "ucp_avatar_options_remote.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 9,  61 => 8,  53 => 6,  47 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_avatar_options_remote.html", "");
    }
}
