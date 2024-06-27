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

/* posting_review.html */
class __TwigTemplate_56009d76743ed0c49e11d67c45b4fcd19872146af37dde246563230fc71b282c extends \Twig\Template
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
        echo "<h3>";
        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REVIEW");
        echo "</h3>

<p>";
        // line 3
        echo $this->extensions['phpbb\template\twig\extension']->lang("POST_REVIEW_EXPLAIN");
        echo "</p>

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "post_review_row", [], "any", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["post_review_row"]) {
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["post_review_row"], "S_IGNORE_POST", [], "any", false, false, false, 6)) {
                // line 7
                echo "<div class=\"post bg3 post-ignore\">
\t<div class=\"inner\">
\t\t";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["post_review_row"], "L_IGNORE_POST", [], "any", false, false, false, 9);
                echo "<br>
\t\t<a class=\"display_post_review\" href=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["post_review_row"], "U_MINI_POST", [], "any", false, false, false, 10);
                echo "\">";
                echo $this->extensions['phpbb\template\twig\extension']->lang("POST_DISPLAY");
                echo "</a>
";
            } else {
                // line 12
                echo "<div class=\"post ";
                if ((twig_get_attribute($this->env, $this->source, $context["post_review_row"], "S_ROW_COUNT", [], "any", false, false, false, 12) % 2 != 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t<div class=\"inner\">
";
            }
            // line 15
            echo "
\t<div class=\"postbody\" id=\"ppr";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["post_review_row"], "POST_ID", [], "any", false, false, false, 16);
            echo "\">
\t\t<h3><a href=\"";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["post_review_row"], "U_MINI_POST", [], "any", false, false, false, 17);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["post_review_row"], "POST_SUBJECT", [], "any", false, false, false, 17);
            echo "</a></h3>
\t\t<p class=\"author\">
\t\t\t";
            // line 19
            if (($context["S_IS_BOT"] ?? null)) {
                // line 20
                echo "\t\t\t\t<span><i class=\"icon fa-file fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                echo twig_get_attribute($this->env, $this->source, $context["post_review_row"], "MINI_POST", [], "any", false, false, false, 20);
                echo "</span></span>
\t\t\t";
            } else {
                // line 22
                echo "\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post_review_row"], "U_MINI_POST", [], "any", false, false, false, 22);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["post_review_row"], "MINI_POST", [], "any", false, false, false, 22);
                echo "\">
\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["post_review_row"], "MINI_POST", [], "any", false, false, false, 23);
                echo "</span>
\t\t\t\t</a>
\t\t\t";
            }
            // line 26
            echo "\t\t\t";
            echo $this->extensions['phpbb\template\twig\extension']->lang("POST_BY_AUTHOR");
            echo " ";
            echo "<strong>";
            echo twig_get_attribute($this->env, $this->source, $context["post_review_row"], "POST_AUTHOR_FULL", [], "any", false, false, false, 26);
            echo "</strong>";
            echo " &raquo; ";
            echo twig_get_attribute($this->env, $this->source, $context["post_review_row"], "POST_DATE", [], "any", false, false, false, 26);
            echo "
\t\t</p>
\t\t<div class=\"content\">";
            // line 28
            echo twig_get_attribute($this->env, $this->source, $context["post_review_row"], "MESSAGE", [], "any", false, false, false, 28);
            echo "</div>

\t\t";
            // line 30
            if (twig_get_attribute($this->env, $this->source, $context["post_review_row"], "S_HAS_ATTACHMENTS", [], "any", false, false, false, 30)) {
                // line 31
                echo "\t\t\t<dl class=\"attachbox\">
\t\t\t\t<dt>";
                // line 32
                echo $this->extensions['phpbb\template\twig\extension']->lang("ATTACHMENTS");
                echo "</dt>
\t\t\t\t";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post_review_row"], "attachment", [], "any", false, false, false, 33));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 34
                    echo "\t\t\t\t\t<dd>";
                    echo twig_get_attribute($this->env, $this->source, $context["attachment"], "DISPLAY_ATTACHMENT", [], "any", false, false, false, 34);
                    echo "</dd>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "\t\t\t</dl>
\t\t";
            }
            // line 38
            echo "
\t</div>

\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post_review_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
<hr />
";
    }

    public function getTemplateName()
    {
        return "posting_review.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 44,  158 => 38,  154 => 36,  145 => 34,  141 => 33,  137 => 32,  134 => 31,  132 => 30,  127 => 28,  115 => 26,  109 => 23,  102 => 22,  96 => 20,  94 => 19,  87 => 17,  83 => 16,  80 => 15,  69 => 12,  62 => 10,  58 => 9,  54 => 7,  52 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "posting_review.html", "");
    }
}
