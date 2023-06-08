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

/* user_welcome.txt */
class __TwigTemplate_7e4428c4fa1d5f9e2a690cea4808ef99 extends \Twig\Template
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
        echo "Subject: Welcome to \"";
        echo ($context["SITENAME"] ?? null);
        echo "\"

";
        // line 3
        echo ($context["WELCOME_MSG"] ?? null);
        echo "

Please keep this email for your records. Your account information is as follows:

----------------------------
Username: ";
        // line 8
        echo ($context["USERNAME"] ?? null);
        echo "

Board URL: ";
        // line 10
        echo ($context["U_BOARD"] ?? null);
        echo "
----------------------------

Your password has been securely stored in our database and cannot be retrieved. In the event that it is forgotten, you will be able to reset it using the email address associated with your account.

Thank you for registering.

";
        // line 17
        echo ($context["EMAIL_SIG"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_welcome.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  56 => 10,  51 => 8,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user_welcome.txt", "");
    }
}
