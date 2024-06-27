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

/* overall_header.html */
class __TwigTemplate_74547b2f2045a737b611bec27a1bd42234f8a26c0ba3fa8694c64459edfac616 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo "\" lang=\"";
        echo ($context["S_USER_LANG"] ?? null);
        echo "\">
<head>
<meta charset=\"utf-8\" />
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
<link rel=\"icon\" type=\"image/png\" href=\"https://zupimages.net/up/23/13/vjii.png\" />
";
        // line 8
        echo ($context["META"] ?? null);
        echo "
<title>";
        // line 9
        if (($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null)) {
            echo "(";
            echo ($context["UNREAD_NOTIFICATIONS_COUNT"] ?? null);
            echo ") ";
        }
        if (( !($context["S_VIEWTOPIC"] ?? null) &&  !($context["S_VIEWFORUM"] ?? null))) {
            echo ($context["SITENAME"] ?? null);
            echo " - ";
        }
        if (($context["S_IN_MCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo " - ";
        } elseif (($context["S_IN_UCP"] ?? null)) {
            echo $this->extensions['phpbb\template\twig\extension']->lang("UCP");
            echo " - ";
        }
        echo ($context["PAGE_TITLE"] ?? null);
        if ((($context["S_VIEWTOPIC"] ?? null) || ($context["S_VIEWFORUM"] ?? null))) {
            echo " - ";
            echo ($context["SITENAME"] ?? null);
        }
        echo "</title>

";
        // line 11
        if (($context["S_ENABLE_FEEDS"] ?? null)) {
            // line 12
            echo "\t";
            if (($context["S_ENABLE_FEEDS_OVERALL"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo ($context["SITENAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_index");
                echo "\">";
            }
            // line 13
            echo "\t";
            if (($context["S_ENABLE_FEEDS_NEWS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_NEWS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_news");
                echo "\">";
            }
            // line 14
            echo "\t";
            if (($context["S_ENABLE_FEEDS_FORUMS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("ALL_FORUMS");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forums");
                echo "\">";
            }
            // line 15
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_NEW");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics");
                echo "\">";
            }
            // line 16
            echo "\t";
            if (($context["S_ENABLE_FEEDS_TOPICS_ACTIVE"] ?? null)) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED_TOPICS_ACTIVE");
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topics_active");
                echo "\">";
            }
            // line 17
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_FORUM"] ?? null) && ($context["S_FORUM_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FORUM");
                echo " - ";
                echo ($context["FORUM_NAME"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_forum", ["forum_id" => ($context["S_FORUM_ID"] ?? null)]);
                echo "\">";
            }
            // line 18
            echo "\t";
            if ((($context["S_ENABLE_FEEDS_TOPIC"] ?? null) && ($context["S_TOPIC_ID"] ?? null))) {
                echo "<link rel=\"alternate\" type=\"application/atom+xml\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("FEED");
                echo " - ";
                echo $this->extensions['phpbb\template\twig\extension']->lang("TOPIC");
                echo " - ";
                echo ($context["TOPIC_TITLE"] ?? null);
                echo "\" href=\"";
                echo $this->extensions['phpbb\template\twig\extension\routing']->getPath("phpbb_feed_topic", ["topic_id" => ($context["S_TOPIC_ID"] ?? null)]);
                echo "\">";
            }
            // line 19
            echo "\t";
        }
        // line 21
        echo "
";
        // line 22
        if (($context["U_CANONICAL"] ?? null)) {
            // line 23
            echo "\t<link rel=\"canonical\" href=\"";
            echo ($context["U_CANONICAL"] ?? null);
            echo "\">
";
        }
        // line 25
        echo "
<!--
\tphpBB style name: prosilver
\tBased on style:   prosilver (this is the default phpBB3 style)
\tOriginal author:  Tom Beddard ( http://www.subBlue.com/ )
\tModified by:
-->

";
        // line 33
        if (($context["S_ALLOW_CDN"] ?? null)) {
            // line 34
            echo "<script>
\tWebFontConfig = {
\t\tgoogle: {
\t\t\tfamilies: ['Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese']
\t\t}
\t};

\t(function(d) {
\t\tvar wf = d.createElement('script'), s = d.scripts[0];
\t\twf.src = 'https://cdn.jsdelivr.net/npm/webfontloader@1.6.28/webfontloader.min.js';
\t\twf.async = true;
\t\ts.parentNode.insertBefore(wf, s);
\t})(document);
</script>
";
        }
        // line 49
        echo "<link href=\"";
        echo ($context["T_FONT_AWESOME_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 50
        echo ($context["T_STYLESHEET_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 51
        echo ($context["T_STYLESHEET_LANG_LINK"] ?? null);
        echo "\" rel=\"stylesheet\">

";
        // line 53
        if ((($context["S_CONTENT_DIRECTION"] ?? null) == "rtl")) {
            // line 54
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/bidi.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 56
        echo "
";
        // line 57
        if (($context["S_PLUPLOAD"] ?? null)) {
            // line 58
            echo "\t<link href=\"";
            echo ($context["T_THEME_PATH"] ?? null);
            echo "/plupload.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 60
        echo "
";
        // line 61
        if (($context["S_COOKIE_NOTICE"] ?? null)) {
            // line 62
            echo "\t<link href=\"";
            echo ($context["T_ASSETS_PATH"] ?? null);
            echo "/cookieconsent/cookieconsent.min.css?assets_version=";
            echo ($context["T_ASSETS_VERSION"] ?? null);
            echo "\" rel=\"stylesheet\">
";
        }
        // line 64
        echo "
<!--[if lte IE 9]>
\t<link href=\"";
        // line 66
        echo ($context["T_THEME_PATH"] ?? null);
        echo "/tweaks.css?assets_version=";
        echo ($context["T_ASSETS_VERSION"] ?? null);
        echo "\" rel=\"stylesheet\">
<![endif]-->

";
        // line 69
        // line 70
        echo "
";
        // line 71
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "STYLESHEETS", [], "any", false, false, false, 71);
        echo "

";
        // line 73
        // line 74
        echo "
</head>
<body id=\"phpbb\" class=\"nojs notouch section-";
        // line 76
        echo ($context["SCRIPT_NAME"] ?? null);
        echo " ";
        echo ($context["S_CONTENT_DIRECTION"] ?? null);
        echo " ";
        echo ($context["BODY_CLASS"] ?? null);
        echo "\">
\t<div id=\"greyscreen\"></div>
";
        // line 78
        // line 79
        echo "
";
        // line 80
        $asset_file = "header.js";
        $asset = new \phpbb\template\asset($asset_file, $this->env->get_path_helper(), $this->env->get_filesystem());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->env->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->env->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            }
        }
        
        if ($asset->is_relative()) {
            $asset->add_assets_version($this->env->get_phpbb_config()['assets_version']);
        }
        $this->env->get_assets_bag()->add_script($asset);        // line 81
        echo "
<div >
\t<a id=\"top\" class=\"top-anchor\" accesskey=\"t\"></a>
\t<div id=\"nav\">
\t\t<div id=\"navToggle\">
\t\t\t<img src=\"https://zupimages.net/up/23/26/tmpz.png\" id=\"burger\">
\t\t\t<label class=\"switch\">
\t\t\t\t<input type=\"checkbox\" />
\t\t\t\t<span></span>
\t\t\t</label>
\t\t</div>\t\t
\t\t<a href=\"https://discord.gg/JvWTGSsQYh\"><img src=\"https://zupimages.net/up/20/14/hnvw.png\" id=\"discord\"></a>
\t</div>
\t<div id=\"subnav\">
\t\t<h1>Navigation</h1>
\t\t<a href=\"./index.php\">Forum</a>
\t\t";
        // line 97
        if (($context["G_IS_ADMIN"] ?? null)) {
            echo "<a href=\"./talents.php\">Gestion des talents</a>";
        }
        // line 98
        echo "\t\t<a href=\"./villages.php\">Gestion des villages</a>
\t\t";
        // line 99
        if (($context["IS_ANONYMOUS"] ?? null)) {
            // line 100
            echo "\t\t<a href=\"./ucp.php?mode=login\">Se connecter</a>
\t\t<a href=\"./ucp.php?mode=register&sid=";
            // line 101
            echo ($context["SESSION_ID"] ?? null);
            echo "\">S'enregistrer</a>
\t\t";
        } else {
            // line 103
            echo "\t\t<a href=\"./ucp.php?sid=";
            echo ($context["SESSION_ID"] ?? null);
            echo "\">Profil</a>
\t\t<a href=\"./ucp.php?mode=logout&sid=";
            // line 104
            echo ($context["SESSION_ID"] ?? null);
            echo "\">Se déconnecter</a>
\t\t";
        }
        // line 106
        echo "\t</div>
\t<div id=\"page-header\">
\t\t<div id=\"banner\">
\t\t\t<a href=\"./index.php\">
\t\t\t\t<div id=\"main_title\">";
        // line 110
        echo ($context["SITENAME"] ?? null);
        echo "</div>
\t\t\t\t<div id=\"forum_descr\">";
        // line 111
        echo ($context["SITE_DESCRIPTION"] ?? null);
        echo "</div>
\t\t\t</a>
\t\t</div>
\t\t<div>
\t\t\t<fieldset id=\"contexte\">
\t\t\t\t<legend>Contexte - Nom de l'arc</legend>
\t\t\t\tL’odeur âcre du fer se déversant sur les sols jonchés de cadavres, telle une rivière maudite, n’était qu’un rappel tumultueux des affres de la guerre. Alors que la haine se répandait, le bonheur ne restait plus qu’une vaine étincelle au bout d’un couloir. La fondation des villages n’avait épargné personne, ce rêve de paix porté autrefois par un glorieux shinobi ne fut que les prémices de conflits plus grands, de conflits plus intenses.<br />
\t\t\t\tArmes, poisons, techniques de destruction massive, personne ne recula, personne ne baissa les armes. Les morts s’enchaînaient et avec eux, les maladies se répandaient. L’ami de toujours devenu l’ennemi de demain, tandis que ceux que l’on ne soupçonnaient pas, devenaient des alliés de circonstances. 
\t\t\t\t <a href=\"https://\">La suite ?</a>
\t\t\t</fieldset>
\t\t\t<fieldset id=\"news_pa\">
\t\t\t\t<legend>Dernière news</legend>
\t\t\t\t<div id=\"flex_news\">
\t\t\t\t\t<div class=\"date_news\">00/00</div>
\t\t\t\t\t<div class=\"content_news\">Un exemple de news ici !</div>
\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t<fieldset id=\"topsites\">
\t\t\t\t<legend>Topsites</legend>
\t\t\t\t<a href=\"http://www.root-top.com/topsite/nacimem/in.php?ID=5320\" target=\"_blank\"><img src=\"https://zupimages.net/up/23/13/vjii.png\"></a>
\t\t\t\t<a href=\"http://www.root-top.com/topsite/gilgamesh/in.php?ID=8627\" target=\"_blank\"><img src=\"https://zupimages.net/up/23/13/vjii.png\"></a>
\t\t\t\t<a href=\"http://www.root-top.com/topsite/virtu4ldreaiviz/in.php?ID=5834\" target=\"_blank\"><img src=\"https://zupimages.net/up/23/13/vjii.png\"></a>
\t\t\t</fieldset>
\t\t</div>
\t</div>

\t";
        // line 137
        // line 138
        echo "
\t<a id=\"start_here\" class=\"anchor\"></a>
\t<div id=\"page-body\" class=\"page-body\" role=\"main\">
\t\t";
        // line 141
        if (((($context["S_BOARD_DISABLED"] ?? null) && ($context["S_USER_LOGGED_IN"] ?? null)) && (($context["U_MCP"] ?? null) || ($context["U_ACP"] ?? null)))) {
            // line 142
            echo "\t\t<div id=\"information\" class=\"rules\">
\t\t\t<div class=\"inner\">
\t\t\t\t<strong>";
            // line 144
            echo $this->extensions['phpbb\template\twig\extension']->lang("INFORMATION");
            echo $this->extensions['phpbb\template\twig\extension']->lang("COLON");
            echo "</strong> ";
            echo $this->extensions['phpbb\template\twig\extension']->lang("BOARD_DISABLED");
            echo "
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 148
        echo "
\t\t";
        // line 149
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 149,  415 => 148,  405 => 144,  401 => 142,  399 => 141,  394 => 138,  393 => 137,  364 => 111,  360 => 110,  354 => 106,  349 => 104,  344 => 103,  339 => 101,  336 => 100,  334 => 99,  331 => 98,  327 => 97,  309 => 81,  295 => 80,  292 => 79,  291 => 78,  282 => 76,  278 => 74,  277 => 73,  272 => 71,  269 => 70,  268 => 69,  260 => 66,  256 => 64,  248 => 62,  246 => 61,  243 => 60,  235 => 58,  233 => 57,  230 => 56,  222 => 54,  220 => 53,  215 => 51,  211 => 50,  206 => 49,  189 => 34,  187 => 33,  177 => 25,  171 => 23,  169 => 22,  166 => 21,  163 => 19,  150 => 18,  137 => 17,  126 => 16,  115 => 15,  104 => 14,  93 => 13,  82 => 12,  80 => 11,  55 => 9,  51 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overall_header.html", "");
    }
}
