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

/* kirigakure.html */
class __TwigTemplate_b37fd0ad9766d4fc7da12a8cb71c5b32 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "kirigakure.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div id=\"page\">
    <h1>Kirigakure no Sato</h1>
    <img src=\"https://i33.servimg.com/u/f33/16/35/67/99/kiriga10.png\" id=\"kiriVillage\">
    <h2>Contexte</h2>
    <p>Kiri s’est construite sur les <strong>fondations d’un pays sauvage où des clans se cachaient dans la brume</strong>. Il était de connaissance commune, avant la création du village, que ce n’était pas un pays où les gens pourraient vivre. Terres inhospitalières et dangereuses, Mizu no Kuni avait la réputation d’être un repère à brigands.</p>

    <p>Le premier Mizukage, celui qui a fondé le village, s’appelait <strong>Byakuren</strong>. C’était un shinobi puissant mais prudent, il souhaitait <strong>donner à tous les criminels et gens qui ne trouvaient pas leur place dans les autres villages un endroit où habiter</strong>. Faire la loi parmi les parias ne fut pas une chose aisée, c’est donc avec une discipline de fer que Byakuren a su s’imposer et faire régner l’ordre au sein du Pays de l’Eau.</p>

    <p>À l’origine, le village de Kiri était un village assez renfermé sur lui-même où se trouvaient simplement ceux qui ne trouvaient pas leur place ailleurs. Le premier Mizukage était méfiant des autres villages, mais aussi attentif et ne leur était pas ouvertement hostile. En revanche, la mauvaise réputation de Kiri a perduré parmi les autres villages qui s’en méfiaient ouvertement.</p>

    <p>Notablement, c’est après la mort de Byakuren et lors du règne du second Mizukage, <strong>Hôzuki Gengetsu</strong>, que le village fut attaqué par le clan Kaguya, ayant la capacité spéciale de manier les os. Le clan fut décimé dans un affrontement sanglant en retour, mais qui ne fit que confirmer <strong>le mauvais nom des possesseurs de Kekkei Genkai à Kiri</strong>.</p>

    <p>Si la chasse des possesseurs de Kekkei Genkai joue un rôle central dans l’histoire de Kiri, les historiens ne sont pas sûrs de quand cette dernière a commencé. Ils en connaissent néanmoins certainement la raison : lors des premiers examens des Chûnin, les shinobi possédant des Kekkei Genkai ont commis des atrocités et se sont montrés bien plus dangereux que les autres.</p>

    <p>C’est à partir de là que les membres des castes inférieures se sont mis à détester et à montrer une hostilité ouverte envers les membres de clan qui possédaient des Kekkei Genkai particulièrement puissants ou envahissants. Et c’est le fait que Konoha ne cesse de se reposer sur les utilisateurs de Kekkei Genkai contre Kiri qui a contribué à <strong>une mauvaise relation entre les villages</strong>.</p>

    <p>À notre époque, sous le règne du troisième Mizukage, <strong>il n’est pas rare que les possesseurs de Kekkei Genkai se voient chassés par des membres des castes inférieures ou des personnes extérieures au village</strong>. Le stigmate perdure. De plus, de nombreux tribunaux populaires se sont créés, attendant une faute de la part du moindre utilisateur de Kekkei Genkai pour attribuer une punition des plus sévères.</p>

    <p>Au début de l'année, un Bijû a ravagé une grande partie d'un des quartiers habités par la caste inférieure de Kiri. Le Bijû a ensuite disparu. Certains soupçonnent le Mizukage d'avoir été à l'origine de l'attaque, mais aujourd'hui, les Jinchûriki à Kiri ont assez mauvaise réputation. </p>

    <p>Le Mizukage a décidé de recruter des gens dans une unité spécialisée pour la recherche du Jinchûriki, dont il ne connaît ni la position, ni l'allégeance. </p>

    <h2>Fonctionnement</h2>
    <p>Étant un pays plutôt militaire et isolationniste, Kiri fonctionne sur <strong>un système de caste</strong> selon la proximité du clan au cœur du village - d’une certaine manière, selon la “pureté” du clan dont la personne est issue,</p>
    
    <p class=\"myList\">► Les personnes qui sont<strong> originaires de Kiri</strong> font partie de la caste supérieure ;</p>
    <p class=\"myList\">► Les personnes de villages <strong>appartenant à Kiri depuis longtemps</strong> font partie d’une caste intermédiaire ;</p>
    <p class=\"myList\">► Seuls les <strong>membres de village récemment annexés par Kiri ou de clans déchus</strong> par le pays sont de la caste inférieure.</p>

    <p style=\"margin-top: 2rem;\">Les aspirants sont obligatoirement soumis à l’examen de la brume sanglante s’ils veulent devenir ninjas, où ils doivent tuer l’un de leurs collègues. Ceci a amené à avoir beaucoup de puissants shinobis, mais à cause des conflits entre les différentes castes, il y a très peu de travail d’équipe, et beaucoup finissent par devenir des shinobis tueurs.</p>
    
    <p>Économiquement, Kiri se base surtout sur la pêche et est le plus grand producteur d’armes ninja de qualité. Mizu no Kuni est également le pays le moins touristique, mais dont la tendance expansionniste leur a donné une population très nombreuse et diverse. C’est un pays où l’autosuffisance est nécessaire, et dont les frontières sont relativement dangereuses. </p>
    
    <h2>Personnalités importantes</h2>

    ";
        // line 37
        if (($context["IS_KIRI"] ?? null)) {
            // line 38
            echo "    <h2>Dépenses</h2>

    TODO, LA SECTION N'EST VISIBLE QUE SI VOUS APPARTENEZ A KIRI
    ";
        }
        // line 42
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "kirigakure.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 42,  88 => 38,  86 => 37,  49 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kirigakure.html", "");
    }
}
