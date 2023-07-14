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

/* map.html */
class __TwigTemplate_bb2b4549bb3984b6b6d8d456712af807 extends \Twig\Template
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
        echo "<head>
    <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"./styles/prosilver/template/map.js\"></script>
    <link href=\"./styles/prosilver/theme/stylesheet.css\" rel=\"stylesheet\">
    <meta charset=\"UTF-8\">
    <title>Carte interactive</title>
</head>
<body>
    <a id=\"m_return_forum\" href=\"./index.php\">Retourner sur le forum</a>
    <div id=\"flex_map\">
        <div id=\"container_map\">
            <img src=\"https://cdn.discordapp.com/attachments/886907010279440417/1126938716489928724/IMG_0695.png\" id=\"my_map\">
            <div id=\"background_map\">
                <div class=\"zone_ap\" id=\"suna_m1\">
                    <div class=\"m1_title\">Sunagakure</div>
                    <div class=\"m1_point\" onclick=\"mapEvent('sunagakure_d')\"></div>
                </div>
                <div class=\"zone_ap\" id=\"iwa_m1\">
                    <div class=\"m1_title\">Iwagakure</div>
                    <div class=\"m1_point\" onclick=\"mapEvent('iwagakure_d')\"></div>
                </div>
                <div class=\"zone_ap\" id=\"konoha_m1\">
                    <div class=\"m1_title\">Konohagakure</div>
                    <div class=\"m1_point\" onclick=\"mapEvent('konohagakure_d')\"></div>
                </div>
                <div class=\"zone_ap\" id=\"kiri_m1\">
                    <div class=\"m1_title\">Kirigakure</div>
                    <div class=\"m1_point\" onclick=\"mapEvent('kirigakure_d')\"></div>
                </div>
                <div class=\"zone_ap\" id=\"kumo_m1\">
                    <div class=\"m1_title\">Kumogakure</div>
                    <div class=\"m1_point\" onclick=\"mapEvent('kumogakure_d')\"></div>
                </div>
                <div class=\"zone_ap\" id=\"ame_m1\">
                    <div class=\"m1_2_title\">Amegakure</div>
                    <div class=\"m1_2_point\" onclick=\"mapEvent('amegakure_d')\"></div>
                </div>
            </div>
        </div>
        <div class=\"map_descr\" style=\"display: block;\">
            <h2>Titre</h2>
            <div>Cliquez sur l'un des points pour voir la description du lieu !</div>
        </div>
        <div class=\"map_descr\" id=\"sunagakure_d\">
            <h2>Sunagakure</h2>
            <div>Ceci est la description de Suna</div> 
        </div>
        <div class=\"map_descr\" id=\"iwagakure_d\">
            <h2>Iwagakure</h2>
            <div>Ceci est la description d'Iwa</div> 
        </div>
        <div class=\"map_descr\" id=\"konohagakure_d\">
            <h2>Konohagakure</h2>
            <div>Ceci est la description de Konoha</div> 
        </div>
        <div class=\"map_descr\" id=\"kirigakure_d\">
            <h2>Kirigakure</h2>
            <div>Ceci est la description de Kiri</div> 
        </div>
        <div class=\"map_descr\" id=\"kumogakure_d\">
            <h2>Kumogakure</h2>
            <div>Ceci est la description de Kumo</div> 
        </div>
        <div class=\"map_descr\" id=\"amegakure_d\">
            <h2>Amegakure</h2>
            <div>Ceci est la description d'Ame</div> 
        </div>
    </div>
</body>";
    }

    public function getTemplateName()
    {
        return "map.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "map.html", "");
    }
}
