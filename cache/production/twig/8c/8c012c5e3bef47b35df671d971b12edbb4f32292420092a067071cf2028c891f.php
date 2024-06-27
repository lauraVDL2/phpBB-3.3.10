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

/* forumlist_body.html */
class __TwigTemplate_c916681c887c90630b20d11164b77b8fe62f8ce580270c188eaa20ab5cf228aa extends \Twig\Template
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
        echo "<div id=\"firstBlock\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['phpbb\template\twig\extension']->loop_subset($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "forumrow", [], "any", false, false, false, 2), 1, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "\t<fieldset id=\"rowGuide\">
\t\t<legend><img src=\"https://zupimages.net/up/23/13/vjii.png\"></legend>
\t";
            // line 5
            // line 6
            echo "\t";
            // line 7
            echo "
\t";
            // line 8
            if ( !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 8)) {
                // line 9
                echo "\t\t";
                // line 10
                echo "
\t\t\t";
                // line 11
                // line 12
                echo "
\t\t\t\t\t\t";
                // line 13
                if ((($context["S_ENABLE_FEEDS"] ?? null) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FEED_ENABLED", [], "any", false, false, false, 13))) {
                    // line 14
                    echo "\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t<a class=\"feed-icon-forum\" title=\"";
                    // line 15
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 15);
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_ID", [], "any", false, false, false, 15);
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-rss-square fa-fw icon-orange\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 16
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 16);
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t";
                }
                // line 20
                echo "\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "\t\t\t\t\t\t\t";
                    // line 22
                    echo "\t\t\t\t\t\t\t<span class=\"forum-image\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 22);
                    echo "</span>
\t\t\t\t\t\t\t";
                    // line 23
                    // line 24
                    echo "\t\t\t\t\t\t";
                }
                // line 25
                echo "\t\t\t\t\t\t<a href=\"./guidebook.php\" class=\"forumTitle guidebookTitle\">";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 25);
                echo "</a>
\t\t\t\t\t\t<div class=\"forumDescr\">Toutes les <strong>ANNEXES</strong> à portée de kunaï</div>
\t\t\t\t\t
\t\t\t";
                // line 28
                // line 29
                echo "\t\t";
                // line 30
                echo "\t";
            }
            // line 31
            echo "\t</fieldset>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
\t<div id=\"carte\">
\t\t<a href=\"./map.php\">
\t\t\t<img src=\"https://zupimages.net/up/23/13/wm3r.png\">
\t\t</a>
\t\t<div>
\t\t\tC<br />
\t\t\tA<br />
\t\t\tR<br />
\t\t\tT<br />
\t\t\tE
\t\t</div>
\t</div>

";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['phpbb\template\twig\extension']->loop_subset($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "forumrow", [], "any", false, false, false, 47), 2, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 48
            echo "<div class=\"row2\">
";
            // line 49
            // line 50
            // line 51
            echo "
";
            // line 52
            if ( !twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_IS_CAT", [], "any", false, false, false, 52)) {
                // line 53
                echo "\t";
                // line 54
                echo "
\t\t";
                // line 55
                // line 56
                echo "
\t\t\t\t\t";
                // line 57
                if ((($context["S_ENABLE_FEEDS"] ?? null) && twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_FEED_ENABLED", [], "any", false, false, false, 57))) {
                    // line 58
                    echo "\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t<a class=\"feed-icon-forum\" title=\"";
                    // line 59
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 59);
                    echo "\" href=\"";
                    echo ($context["U_FEED"] ?? null);
                    echo "?f=";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_ID", [], "any", false, false, false, 59);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-rss-square fa-fw icon-orange\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 60
                    echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                    echo " - ";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 60);
                    echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t-->
\t\t\t\t\t";
                }
                // line 64
                echo "\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 64)) {
                    // line 65
                    echo "\t\t\t\t\t\t";
                    // line 66
                    echo "\t\t\t\t\t\t<span class=\"forum-image\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 66);
                    echo "</span>
\t\t\t\t\t\t";
                    // line 67
                    // line 68
                    echo "\t\t\t\t\t";
                }
                // line 69
                echo "\t\t\t\t\t<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 69);
                echo "\" class=\"forumTitle ";
                if ((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_ROW_COUNT", [], "any", false, false, false, 69) == 3)) {
                    echo "textAlign";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 69);
                echo "</a>
\t\t\t\t\t<div class=\"forumDescr ";
                // line 70
                if ((twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_ROW_COUNT", [], "any", false, false, false, 70) == 3)) {
                    echo "textAlign";
                }
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 70);
                echo "</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"subForumsGrid\">
\t\t\t\t\t";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["forumrow"], "subforum", [], "any", false, false, false, 73));
                foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                    // line 74
                    echo "\t\t\t\t\t\t";
                    // line 75
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subforum"], "U_SUBFORUM", [], "any", false, false, false, 75);
                    echo "\">
\t\t\t\t\t\t\t";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["subforum"], "SUBFORUM_NAME", [], "any", false, false, false, 76);
                    echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                    // line 78
                    // line 79
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"lastPost\">
\t\t\t\t\t\t";
                // line 83
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 83)) {
                    // line 84
                    echo "\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_DISPLAY_SUBJECT", [], "any", false, false, false, 84)) {
                        // line 85
                        echo "\t\t\t\t\t\t\t";
                        // line 86
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 86);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT", [], "any", false, false, false, 86);
                        echo "\" class=\"lastSubject\">";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", [], "any", false, false, false, 86);
                        echo "</a> <br />
\t\t\t\t\t\t";
                    }
                    // line 88
                    echo "\t\t\t\t\t\t<div><time datetime=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 88);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 88);
                    echo "</time></div>
\t\t\t\t\t\t\t";
                    // line 89
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POSTER_FULL", [], "any", false, false, false, 89);
                    // line 90
                    echo "\t\t\t\t\t\t";
                    if ( !($context["S_IS_BOT"] ?? null)) {
                        // line 91
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 91);
                        echo "\" title=\"";
                        echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_LATEST_POST");
                        echo "\" class=\"lastPostLink\">
\t\t\t\t\t\t\t\t";
                        // line 92
                        if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_UNREAD_FORUM", [], "any", false, false, false, 92)) {
                            // line 93
                            echo "\t\t\t\t\t\t\t\t\t<img src=\"https://zupimages.net/up/23/14/rftn.png\">
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 95
                            echo "\t\t\t\t\t\t\t\t\t<img src=\"https://zupimages.net/up/23/13/vjii.png\">
\t\t\t\t\t\t\t\t";
                        }
                        // line 97
                        echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                    }
                    // line 99
                    echo "\t\t\t\t\t";
                } else {
                    // line 100
                    echo "\t\t\t\t\t<div class=\"noPost\">Aucun dernier message !</div>
\t\t\t\t\t";
                }
                // line 102
                echo "\t\t\t\t\t</div>
\t\t";
                // line 103
                // line 104
                echo "\t";
            }
            // line 106
            echo "\t\t\t\t\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "<img src=\"https://zupimages.net/up/23/27/6zgz.png\" id=\"imgDeco\">
</div>

";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['phpbb\template\twig\extension']->loop_subset($this->env, twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "forumrow", [], "any", false, false, false, 111), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 112
            echo "<div class=\"rowRPG\">
\t<div class=\"contentRPG\">
\t\t<a href=\"";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_VIEWFORUM", [], "any", false, false, false, 114);
            echo "\" class=\"forumTitle\">";
            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_NAME", [], "any", false, false, false, 114);
            echo "</a>
\t\t<div class=\"forumDescr\">";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_DESC", [], "any", false, false, false, 115);
            echo "</div>

\t\t<div class=\"lastPost\">
\t\t\t";
            // line 118
            if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 118)) {
                // line 119
                echo "\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_DISPLAY_SUBJECT", [], "any", false, false, false, 119)) {
                    // line 120
                    echo "\t\t\t\t";
                    // line 121
                    echo "\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 121);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT", [], "any", false, false, false, 121);
                    echo "\" class=\"lastSubject\">";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", [], "any", false, false, false, 121);
                    echo "</a> <br />
\t\t\t";
                }
                // line 123
                echo "\t\t\t<div><time datetime=\"";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME_RFC3339", [], "any", false, false, false, 123);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POST_TIME", [], "any", false, false, false, 123);
                echo "</time></div>
\t\t\t\t";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "LAST_POSTER_FULL", [], "any", false, false, false, 124);
                // line 125
                echo "\t\t\t";
                if ( !($context["S_IS_BOT"] ?? null)) {
                    // line 126
                    echo "\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "U_LAST_POST", [], "any", false, false, false, 126);
                    echo "\" title=\"";
                    echo $this->extensions['phpbb\template\twig\extension']->lang("VIEW_LATEST_POST");
                    echo "\" class=\"lastPostLink\">
\t\t\t\t\t";
                    // line 127
                    if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "S_UNREAD_FORUM", [], "any", false, false, false, 127)) {
                        // line 128
                        echo "\t\t\t\t\t\t<img src=\"https://zupimages.net/up/23/14/rftn.png\">
\t\t\t\t\t";
                    } else {
                        // line 130
                        echo "\t\t\t\t\t\t<img src=\"https://zupimages.net/up/23/13/vjii.png\">
\t\t\t\t\t";
                    }
                    // line 132
                    echo "\t\t\t\t</a>
\t\t\t";
                }
                // line 134
                echo "\t\t";
            } else {
                // line 135
                echo "\t\t<div class=\"noPost\">Aucun dernier message !</div>
\t\t";
            }
            // line 137
            echo "\t\t</div>
\t</div>
\t";
            // line 139
            if (twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 139)) {
                // line 140
                echo "\t\t<div class=\"imgRPG\">
\t\t\t";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["forumrow"], "FORUM_IMAGE", [], "any", false, false, false, 141);
                echo "
\t\t\t<div class=\"subForums\">
\t\t\t\t";
                // line 143
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["forumrow"], "subforum", [], "any", false, false, false, 143));
                foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                    // line 144
                    echo "\t\t\t\t\t";
                    // line 145
                    echo "\t\t\t\t\t<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["subforum"], "U_SUBFORUM", [], "any", false, false, false, 145);
                    echo "\">
\t\t\t\t\t\t";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["subforum"], "SUBFORUM_NAME", [], "any", false, false, false, 146);
                    echo "
\t\t\t\t\t</a>
\t\t\t\t\t";
                    // line 148
                    // line 149
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "\t\t\t</div>
\t\t</div>
\t";
            }
            // line 153
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
<fieldset id=\"partos\">
\t<legend>Partenaires</legend>
\t<a href=\"./index.php\">
\t\t<img src=\"https://zupimages.net/up/24/14/mq70.png\">
\t</a>
\t<a href=\"./index.php\">
\t\t<img src=\"https://zupimages.net/up/24/14/mq70.png\">
\t</a>
\t<a href=\"./index.php\">
\t\t<img src=\"https://zupimages.net/up/24/14/mq70.png\">
\t</a>
\t<a href=\"./index.php\">
\t\t<img src=\"https://zupimages.net/up/24/14/mq70.png\">
\t</a>
\t<a href=\"./index.php\">
\t\t<img src=\"https://zupimages.net/up/24/14/mq70.png\">
\t</a>
\t<a href=\"./index.php\">
\t\t<img src=\"https://zupimages.net/up/24/14/mq70.png\">
\t</a>
\t<a href=\"./index.php\">
\t\t<img src=\"https://zupimages.net/up/24/14/mq70.png\">
\t</a>
\t<a href=\"./index.php\">
\t\t<img src=\"https://zupimages.net/up/24/14/mq70.png\">
\t</a>
\t<a href=\"./index.php\">
\t\t<img src=\"https://zupimages.net/up/24/14/mq70.png\">
\t</a>
\t<a href=\"./index.php\">
\t\t<img src=\"https://zupimages.net/up/24/14/mq70.png\">
\t</a>
\t<a href=\"./index.php\">
\t\t<img src=\"https://zupimages.net/up/24/14/mq70.png\">
\t</a>
\t<a href=\"./index.php\">
\t\t<img src=\"https://zupimages.net/up/24/14/mq70.png\">
\t</a>
</div>";
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 155,  444 => 153,  439 => 150,  433 => 149,  432 => 148,  427 => 146,  422 => 145,  420 => 144,  416 => 143,  411 => 141,  408 => 140,  406 => 139,  402 => 137,  398 => 135,  395 => 134,  391 => 132,  387 => 130,  383 => 128,  381 => 127,  374 => 126,  371 => 125,  369 => 124,  362 => 123,  352 => 121,  350 => 120,  347 => 119,  345 => 118,  339 => 115,  333 => 114,  329 => 112,  325 => 111,  320 => 108,  313 => 106,  310 => 104,  309 => 103,  306 => 102,  302 => 100,  299 => 99,  295 => 97,  291 => 95,  287 => 93,  285 => 92,  278 => 91,  275 => 90,  273 => 89,  266 => 88,  256 => 86,  254 => 85,  251 => 84,  249 => 83,  244 => 80,  238 => 79,  237 => 78,  232 => 76,  227 => 75,  225 => 74,  221 => 73,  211 => 70,  200 => 69,  197 => 68,  196 => 67,  191 => 66,  189 => 65,  186 => 64,  177 => 60,  167 => 59,  164 => 58,  162 => 57,  159 => 56,  158 => 55,  155 => 54,  153 => 53,  151 => 52,  148 => 51,  147 => 50,  146 => 49,  143 => 48,  139 => 47,  123 => 33,  116 => 31,  113 => 30,  111 => 29,  110 => 28,  103 => 25,  100 => 24,  99 => 23,  94 => 22,  92 => 21,  89 => 20,  80 => 16,  70 => 15,  67 => 14,  65 => 13,  62 => 12,  61 => 11,  58 => 10,  56 => 9,  54 => 8,  51 => 7,  49 => 6,  48 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forumlist_body.html", "");
    }
}
