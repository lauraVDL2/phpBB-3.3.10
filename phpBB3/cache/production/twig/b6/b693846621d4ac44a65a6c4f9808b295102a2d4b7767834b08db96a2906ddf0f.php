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

/* subforumlist_body.html */
class __TwigTemplate_2e09205f68ebac6668def0dfafbce95e486a1e0027cce0755c0ee91e38ffc218 extends \Twig\Template
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
        echo "<div class=\"subforumGrid\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "forumrow", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "<fieldset class=\"subforumContent\">
    <legend>
        <a href=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 5);
            echo "\" class=\"forumTitle\">";
            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 5);
            echo "</a>
    </legend>
    <div class=\"forumDescr\">";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 7);
            echo "</div>
    <div class=\"lastPost\">
        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 9)) {
                // line 10
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_DISPLAY_SUBJECT", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "            ";
                    // line 12
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 12);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT", [], "any", false, false, false, 12);
                    echo "\" class=\"lastSubject\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", [], "any", false, false, false, 12);
                    echo "</a> <br />
        ";
                }
                // line 14
                echo "        <div><time datetime=\"";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 14);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 14);
                echo "</time></div>
            ";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POSTER_FULL", [], "any", false, false, false, 15);
                // line 16
                echo "        ";
                if ( !($context["S_IS_BOT"] ?? null)) {
                    // line 17
                    echo "            <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 17);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_LATEST_POST");
                    echo "\" class=\"lastPostLink\">
                ";
                    // line 18
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_UNREAD_FORUM", [], "any", false, false, false, 18)) {
                        // line 19
                        echo "                    <img src=\"https://zupimages.net/up/23/14/rftn.png\">
                ";
                    } else {
                        // line 21
                        echo "                    <img src=\"https://zupimages.net/up/23/13/vjii.png\">
                ";
                    }
                    // line 23
                    echo "            </a>
        ";
                }
                // line 25
                echo "    ";
            } else {
                // line 26
                echo "    <div class=\"noPost\">Aucun dernier message !</div>
    ";
            }
            // line 28
            echo "    </div>
</fieldset>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "subforumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 31,  117 => 28,  113 => 26,  110 => 25,  106 => 23,  102 => 21,  98 => 19,  96 => 18,  89 => 17,  86 => 16,  84 => 15,  77 => 14,  67 => 12,  65 => 11,  62 => 10,  60 => 9,  55 => 7,  48 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "subforumlist_body.html", "");
    }
}
