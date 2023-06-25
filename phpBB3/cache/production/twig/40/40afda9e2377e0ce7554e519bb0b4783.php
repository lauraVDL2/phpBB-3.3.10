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

/* guidebook.html */
class __TwigTemplate_072cec687b730cc9db3ad93d48af51e9 extends \Twig\Template
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
    <script type=\"text/javascript\" src=\"./styles/prosilver/template/guidebook.js\"></script>
    <link href=\"./styles/prosilver/theme/stylesheet.css\" rel=\"stylesheet\">
    <meta charset=\"UTF-8\">
</head>
<body>
    <div id=\"nav_guidebook\">
        <div class=\"gb_menu\">
            <h1>Administratif</h1>
            <div class=\"gb_link\" onclick=\"tabs('rules', event);\">Règlement</div>
            <div class=\"gb_link\" onclick=\"tabs('staff', event);\">Staff</div>
            <div class=\"gb_link\" onclick=\"tabs('copyright', event);\">Crédits</div>
        </div>
        <div class=\"gb_menu\">
            <h1>Contexte</h1>
        </div>
        <div class=\"gb_menu\">
            <h1>Système de jeu</h1>
        </div>
    </div>

    <div class=\"gb_visible\" id=\"rules\">
        <div class=\"gb_title\">Règlement</div>
        <div class=\"gb_content\">
            <h3>Préambule</h3>

<p>Tout d’abord, nous vous souhaitons la bienvenue sur Jikan no Mon et vous remercions pour votre l’intérêt que vous nous portez ! Le forum est inspiré de l'œuvre Naruto de Masashi Kishimoto, <strong>déconseillée aux moins de dix ans</strong> en France. Nous ne cachons aucun code dans le règlement et vous faisons confiance pour prendre vos responsabilités en lisant tous les sujets essentiels ; un potentiel tricheur sera facilement repéré. Nous partons du principe que <strong>vous inscrire revient à adhérer à ces règles.</strong></p>
<p>Avant de commencer la lecture du règlement, il est important de noter que <strong>Jikan no Mon est un forum sortant de Forumactif</strong>, développé sur phpbb core par une personne du métier. Vous trouverez en outre <strong>de nombreuses fonctionnalités automatisées</strong>, à l’image de la Fiche Technique, de l’ensemble du système de jeu, ou même de l’arbre de compétences. Le forum possède en outre quelques inspirations propres aux jeux de rôle et jeux vidéo, à l’image d’un système de dés, ou du gain d’expérience et de niveau au fil de l’aventure.</p>

<h3>Général</h3>

<p><strong>Respect ;</strong> Nous désirons que l’ambiance reste agréable sur la plateforme. Nous demandons donc une certaine bienveillance dans vos échanges : les propos dénigrants et discriminants sont donc prohibés. Nous vous demandons également de faire attention aux sous-entendus et à votre humour, dans l’optique de ne pas blesser autrui.</p>
<p><strong>Discussions ;</strong> Nous mettons également un point d’honneur à ce que la plateforme reste une zone de détente pour chacun d’entre nous. Nous vous demandons en outre d’éviter les sujets qui fâchent, à l’image de la religion ou de la politique.</p>
<p><strong>Discord ;</strong> La présence sur Discord est requise, une partie de la gestion du forum s’appliquant sur cette dernière. Tous les points du règlement sont bien entendu valables sur le Discord.</p>
<p><strong>Staff ;</strong> Vous pourrez reconnaître le staff sur Discord à leurs pseudonymes affichés en couleur différente. Nous sommes bien entendu disponibles si jamais quelque chose vous tracasse sur la plateforme et vous invitons à nous contacter.</p>
<p><strong>Contenus ;</strong> Les contenus gores et érotiques sont prohibés sur la plateforme, et ce sur toutes leurs formes.</p>
<p><strong>HTML ;</strong> Le forum étant basé sur phpbb core, le HTML n’est pas autorisé dans les messages, contrairement au bbcode.</p>
<p><strong>Lisibilité ;</strong> Nous sommes particulièrement tolérants sur le niveau d’écriture de chacun et tenons à ce que chaque joueur puisse s’amuser tranquillement sur Jikan no Mon. Nous vous demandons simplement d’éviter l’abus de langage SMS, pour des questions d’accessibilité.</p>
<p><strong>Absences ;</strong> Le RP étant avant tout un loisir, vous pouvez vous absenter sans avoir à vous justifier du moment que vous nous prévenez. Nous effectuons de temps à autre un tri des utilisateurs inactifs afin d’alléger notre base de données. Une personne ne s’étant pas connectée plus de deux mois sans absence signalée sera susceptible d’être supprimée.</p>
<p><strong>Rythme ;</strong> Jikan no Mon n’exige un rythme que pour les missions et intrigues. Un post par semaine sera demandé lorsque vous vous inscrivez à une intrigue. Une mission sans absence ni nouvelle de votre part pourra quant à elle être clôturée au bout de deux semaines. Nous avons tous nos obligations et un emploi du temps plus ou moins chargé, nous vous demanderons donc d’être respectueux du rythme de vos partenaires.</p>

<h3>Présentation</h3>
<p><strong>Pseudonyme ;</strong> Votre pseudonyme devra être composé du nom de votre personnage, suivi de son prénom. Si nous ne sommes guère exigeants à ce sujet, nous vous demandons de veiller à ce que votre pseudonyme possède des consonances japonaises.</p>
<p><strong>Avatar ;</strong> L’avatar est obligatoire et devra être de dimension 200x320 pixels en plus de représenter votre personnage. Au niveau du style, nous acceptons à la fois les illustrations semi-réalistes et les mangas. En cas de manque de ressources, n’hésitez pas à consulter des sites comme Hall of Fame. L’avatar devra en outre être recensé dans le bottin.</p>
<p><strong>Personnage ;</strong> Si nous vous offrons la possibilité d’incarner un prédéfini ou de créer votre propre personnage, il est important de noter que vous ne pourrez pas jouer les personnages du manga.</p>
<p><strong>Âge ;</strong> Votre personnage devra avoir au minimum 16 ans, les formations de l’académie étant plus longues sur Jikan no Mon.</p>
<p><strong>Présentation ;</strong> Vous aurez deux semaines pour terminer votre fiche après l’avoir postée, des demandes de délais étant bien entendu possibles. Notez que nous n’imposons aucune longue rédaction.</p>
<p><strong>Multi-comptes</strong> ; Les multi-comptes sont autorisés à partir du moment où vous avez un mois d’ancienneté sur votre dernier personnage.</p>
<p><strong>Psychopathologies ;</strong> Les maladies mentales et troubles du neuro-développement de la vie réelle étant difficiles à modérer, nous avons fait le choix de les prohiber. Le but n’est évidemment pas de priver une liberté au joueur, mais de ne pas heurter les personnes réellement atteintes car nous ne maîtrisons pas le sujet.</p>

<h3>Roleplay</h3>
<p><strong>Maître du Jeu ;</strong> Sur Jikan no Mon, le Maître du Jeu (ou MJ) possède les plein-pouvoirs. Il est en outre possible qu’il s’incruste dans vos RPs (vous serez alors taggé sur Discord) ou décider des conséquences des actions de votre personnage, toujours dans cette philosophie de jeu évolutif.</p>
<p><strong>Nombre de mots ;</strong> Aucun nombre de mots n’est imposé par post, nous vous laissons écrire librement au gré de votre inspiration. Il est toutefois à noter que les intrigues peuvent être calibrées pour les RPs courts, et vous imposer une marge à ne pas dépasser.</p>
<p><strong>Impartialité ;</strong> Les décisions du Maître du Jeu se font en concertation au sein de l’équipe administrative. Nous tâchons d’être les plus objectifs possibles et vous demanderons d’être fairplay en retour en ne contestant pas les résultats.</p>
<p><strong>Personnage et joueur ;</strong> N’ayez pas peur de perdre ou de voir votre personnage en mauvaise posture. Nul n’est invincible en ce monde ; le jeu est susceptible d’impliquer de recevoir des conséquences négatives qui peuvent servir au contexte et permettre à l’ensemble (vous y compris !) de rebondir. Il est en outre primordial de faire la différence entre le personnage et le joueur au gré des retournements de situations.</p>
<p><strong>RPs solo ;</strong> Le RP forum encourage la collaboration entre ses différents joueurs. Nous acceptons toutefois les RPs solo, car nous estimons que ces derniers peuvent s’avérer utile pour le développement d’un personnage.</p>
<p><strong>Mort ;</strong> Il est possible de mourir sur Jikan no Mon. Par souhait du joueur, ou par conséquences des actions du personnage. N’ayez crainte, la mort est loin de vous guetter à chaque instant, sera toujours encadrée et ne surviendra qu’en dernier recours. Nous vous avertirons toujours en amont s’il y a un quelconque risque pour votre personnage.</p>
<p><strong>Ce que vous ne pouvez pas jouer ;</strong> Les viols, les relations maître-esclave, la pédophilie sont interdits. Nous vous demanderons également d’éviter les RPs érotiques, quelques sous-entendus étant amplement suffisants.</p>

        </div>
    </div>

    <div class=\"gb_visible\" id=\"staff\">
        Blablah
    </div>

    <div class=\"gb_visible\" id=\"copyright\">
        <div class=\"gb_title\">Crédits</div>
        <div class=\"gb_content\">
            <p>Jikan no Mon est un forum RPG Naruto, l'oeuvre étant originaire de Kishimoto. Le système de jeu a été en partie inspiré des systèmes FATE (dé Fudge).</p>
            <p>Le forum et ses écrits appartiennent à son staff original ; <strong>Gekigami, Nougat et Edreel.</strong> Le développement du forum s'est fait par <strong>Gekigami</strong> sur le projet open source phpbb.</p>
            <p>Les différentes maquettes ont été réalisées par <strong>Stagiaire Café</strong>.</p>
            <p>Remerciements particuliers à <strong>MsLittleWitch</strong>, à qui nous devons le nom du forum.</p>
            <p>Les images du forum ne nous appartiennent pas. Contactez-nous si vous souhaitez le retrait de l'une de vos oeuvres.</p>
            <p>The pictures used in this website don't belong to us. If we use one of your art and you don't want us to, please contact us.</p>
        </div>
    </div>
</body>";
    }

    public function getTemplateName()
    {
        return "guidebook.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "guidebook.html", "");
    }
}
