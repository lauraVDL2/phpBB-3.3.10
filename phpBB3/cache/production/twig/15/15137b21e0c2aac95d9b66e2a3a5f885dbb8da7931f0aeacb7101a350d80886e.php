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
class __TwigTemplate_d3ea5eaf0c670c7f05905a0d46e64f8c7ae242b033d9bfde5f571002132d8675 extends \Twig\Template
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
    <link rel=\"icon\" type=\"image/png\" href=\"https://zupimages.net/up/23/13/vjii.png\" />
    <meta charset=\"UTF-8\">
    <title>Guidebook</title>
</head>
<body>
    <div id=\"nav_guidebook\">
        <div class=\"gb_menu\">
            <h1>Administratif</h1>
            <div class=\"gb_link\" onclick=\"tabs('rules', event);\">Règlement</div>
            <div class=\"gb_link\" onclick=\"tabs('faq', event);\">Foire aux questions</div>
            <div class=\"gb_link\" onclick=\"tabs('staff', event);\">Staff</div>
            <div class=\"gb_link\" onclick=\"tabs('copyright', event);\">Crédits</div>
        </div>
        <div class=\"gb_menu\">
            <h1>Contexte</h1>
            <div class=\"gb_link\" onclick=\"tabs('general_context', event);\">Général</div>
            <div class=\"gb_link\" onclick=\"tabs('kiri_context', event);\">Kiri</div>
            <div class=\"gb_link\" onclick=\"tabs('iwa_context', event);\">Iwa</div>
            <div class=\"gb_link\" onclick=\"tabs('suna_context', event);\">Suna</div>
            <div class=\"gb_link\" onclick=\"tabs('kumo_context', event);\">Kumo</div>
            <div class=\"gb_link\" onclick=\"tabs('konoha_context', event);\">Konoha</div>
        </div>
        <div class=\"gb_menu\">
            <h1>Système de jeu</h1>
            <div class=\"gb_link\" onclick=\"tabs('level', event);\">Niveaux</div>
            <div class=\"gb_link\" onclick=\"tabs('attributes', event);\">Attributs</div>
            <div class=\"gb_link\" onclick=\"tabs('influence_points', event);\">Points d'influence</div>
            <div class=\"gb_link\" onclick=\"tabs('missions', event);\">Missions</div>
            <div class=\"gb_link\" onclick=\"tabs('fights', event);\">Combats</div>
            <div class=\"gb_link\" onclick=\"tabs('dices', event);\">Lancer de dés</div>
            <div class=\"gb_link\" onclick=\"tabs('ft_specific', event);\">Particularités de la FT</div>
        </div>
        <div class=\"gb_menu\">
            <h1>Clans</h1>
            <div class=\"gb_link\" onclick=\"tabs('kiri_clans', event);\">Kiri</div>
            <div class=\"gb_link\" onclick=\"tabs('iwa_clans', event);\">Iwa</div>
            <div class=\"gb_link\" onclick=\"tabs('suna_clans', event);\">Suna</div>
            <div class=\"gb_link\" onclick=\"tabs('kumo_clans', event);\">Kumo</div>
            <div class=\"gb_link\" onclick=\"tabs('konoha_clans', event);\">Konoha</div>
        </div>
        <div class=\"gb_menu\">
            <h1>Arbre de compétences</h1>
            <div class=\"gb_link\" onclick=\"tabs('principe', event);\">Principe</div>
            <div class=\"gb_link\" onclick=\"tabs('ninjutsu_branch', event);\">Ninjutsu</div>
            <div class=\"gb_link\" onclick=\"tabs('taijutsu_branch', event);\">Taijutsu</div>
            <div class=\"gb_link\" onclick=\"tabs('genjutsu_branch', event);\">Genjutsu</div>
            <div class=\"gb_link\" onclick=\"tabs('kg_branch', event);\">Kekkei Genkai & Hiden</div>
        </div>
        <div class=\"gb_menu\">
            <h1>Annexes</h1>
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
<p><strong>Maître du Jeu ;</strong> Sur Jikan no Mon, le Maître du Jeu (ou MJ) possède les plein-pouvoirs. Il est en outre possible qu’il s’incruste dans vos RPs (vous serez alors taggé sur Discord) ou décider des conséquences des actions de votre personnage, toujours dans cette philosophie de jeu évolutif : vos actions sont prises en compte !</p>
<p><strong>Nombre de mots ;</strong> Aucun nombre de mots n’est imposé par post, nous vous laissons écrire librement au gré de votre inspiration. Il est toutefois à noter que les intrigues peuvent être calibrées pour les RPs courts, et vous imposer une marge à ne pas dépasser.</p>
<p><strong>Impartialité ;</strong> Les décisions du Maître du Jeu se font en concertation au sein de l’équipe administrative. Nous tâchons d’être les plus objectifs possibles et vous demanderons d’être fairplay en retour en ne contestant pas les résultats.</p>
<p><strong>Personnage et joueur ;</strong> N’ayez pas peur de perdre ou de voir votre personnage en mauvaise posture. Nul n’est invincible en ce monde ; le jeu est susceptible d’impliquer de recevoir des conséquences négatives qui peuvent servir au contexte et permettre à l’ensemble (vous y compris !) de rebondir. Il est en outre primordial de faire la différence entre le personnage et le joueur au gré des retournements de situations.</p>
<p><strong>RPs solo ;</strong> Le RP forum encourage la collaboration entre ses différents joueurs. Nous acceptons toutefois les RPs solo, car nous estimons que ces derniers peuvent s’avérer utile pour le développement d’un personnage.</p>
<p><strong>Mort ;</strong> Il est possible de mourir sur Jikan no Mon. Par souhait du joueur, ou par conséquences des actions du personnage. N’ayez crainte, la mort est loin de vous guetter à chaque instant, sera toujours encadrée et ne surviendra qu’en dernier recours. Nous vous avertirons toujours en amont s’il y a un quelconque risque pour votre personnage.</p>
<p><strong>Ce que vous ne pouvez pas jouer ;</strong> Les viols, les relations maître-esclave, la pédophilie sont interdits. Nous vous demanderons également d’éviter les RPs érotiques, quelques sous-entendus étant amplement suffisants.</p>

        </div>
    </div>

    <div class=\"gb_visible\" id=\"faq\">
        <div class=\"gb_title\">Foire aux questions</div>
        <div class=\"gb_content\">
            <p><strong>Question : Puis-je créer un personnage à l'orientation sexuelle ou l'identité de genre différente ? Comment sont-ils perçus dans l'univers de Jikan no Mon ?</strong></p>
            <p>Réponse : Pour la première question : oui tout à fait, du moment que vous maîtrisez le sujet (et que vous gardez en tête que personne ne se réduit à son orientation sexuelle ou identité de genre !). Ces personnages ne subissent aucune discrimination au sein du contexte ; ils sont considérés comme les autres, sauf dans le cas particulier des clans à Kekkei Genkai où ils pourraient être mal perçus, dans la mesure où il est assumé qu'ils ne transmettront pas leurs gènes.</p>
            <p><strong>Question : Mêmes questions pour les personnages à la peau sombre ?</strong></p>
            <p>Réponse : S'il est plus fréquent de voir des personnages à la peau sombre à Kumo dans l'anime, il n'y a aucune restriction de village sur JnM. Ces personnages sont considérés comme les autres et ne subissent aucune discrimination dans notre contexte.</p>
            <p><strong>Question : Autorisez-vous l'utilisation de l'intelligence artificielle ?</strong></p>
            <p>Oui, notamment pour les avatars du moment que vous faites preuve de transparence et que vous le précisez dans le bottin. Nous autorisons également l'utilisation de l'IA pour corriger vos RPs si vous le souhaitez, tant qu'elle ne les rédige pas à votre place ; ce n'est pas le but !</p>
        </div>
    </div>

    <div class=\"gb_visible\" id=\"staff\">
        Blablah
    </div>

    <div class=\"gb_visible\" id=\"copyright\">
        <div class=\"gb_title\">Crédits</div>
        <div class=\"gb_content\">
            <p>Jikan no Mon est un forum RPG Naruto, l'oeuvre étant originaire de Kishimoto. Le système de jeu a été en partie inspiré des systèmes FATE (dé Fudge).</p>
            <p>Le forum et ses écrits appartiennent à son staff original ; <strong>Freya, Nougat et Ædreel.</strong> Le développement du forum a été réalisé par <strong>Freya</strong> sur le projet open source phpbb.</p>
            <p>Les différentes maquettes ont été réalisées par <strong>Stagiaire Café</strong>.</p>
            <p>Remerciements particuliers à <strong>MsLittleWitch</strong>, à qui nous devons le nom du forum.</p>
            <p>Les images du forum ne nous appartiennent pas. Contactez-nous si vous souhaitez le retrait de l'une de vos oeuvres.</p>
            <p>The pictures used in this website don't belong to us. If we use one of your art and you don't want us to, please contact us.</p>
        </div>
    </div>




    <div class=\"gb_visible\" id=\"general_context\">
        <div class=\"gb_title\">Contexte Général</div>
        <div class=\"gb_content\">
            <p class=\"gb_subsection\">L’odeur âcre du fer se déversant sur les sols jonchés de cadavres, telle une rivière maudite, n’était qu’un rappel tumultueux des affres de la guerre. Alors que la haine se répandait, le bonheur ne restait plus qu’une vaine étincelle au bout d’un couloir. La fondation des villages n’avait épargné personne, ce rêve de paix porté autrefois par un glorieux shinobi ne fut que les prémices de conflits plus grands, de conflits plus intenses.</p>

            <p>Armes, poisons, techniques de destruction massive, personne ne recula, personne ne baissa les armes. Les morts s’enchaînaient et avec elles, les maladies se répandaient. L’ami de toujours devenu l’ennemi de demain, tandis que ceux que l’on ne soupçonnait pas, devenaient des alliés de circonstances.</p>

            <p>Alors qu’une grande guerre couvait dans ce monde dominé par cinq grands villages cachés, les alliances se forgeaient lentement. Le village caché du vent, Suna, s’était vu offrir une délicate proposition par son voisin de la terre, Iwa. Dans une entente bien plus que cordiale, alors que les deux villages scellaient des alliances pour les prochaines décennies à venir, ils attaquèrent et se partagèrent les terres de trois pays limitrophes de leurs frontières.</p>

            <p>C’est ainsi que débuta le conflit.</p>

            <p>En retour, Konoha promit monts et merveilles aux villages cachés d'Ame et d’Uzushio. Ce dernier subissait les volontés expansionnistes de son voisin de Kiri. Ainsi, leur assurant un statut de protection, ils dressèrent les plans d’une coordination inter-village qui allait se répandre comme une traînée de poudre dans le monde.</p>

            <p>Seuls aux yeux du monde, Kiri et Kumo scellèrent une alliance secrète connue d’eux seuls. Et c’est ainsi que lentement, les trois alliances commencèrent à nouer des liens plus intenses, partageant leurs effectifs et menant des missions communes.</p>

            <p>L’ombre toute puissante des daimyos planait au-dessus de celle des Kage. Souvent perçus comme féroces, ces Kage étaient pourtant à la solde de cette noblesse qui ne rêvait que d’étendre ses terres. </p>

            <p>Alors que le conflit monte, alors que les shinobis se tuent sur les champs de bataille, personne ne sait qui lancera le premier coup. Personne ne sait avec quelle arme, terrifiante ou non, il sera lancé…</p>

        </div>
    </div>

    <div class=\"gb_visible\" id=\"kiri_context\">
        <div class=\"gb_title\">Contexte de Kiri</div>
        <div class=\"gb_content\">
            <h3>Histoire</h3>

            <p>Kiri s’est construite sur les fondations d’un pays sauvage où des clans se cachaient dans la brume. Il était de connaissance commune, avant la création du village, que ce n’était pas un pays où les gens pourraient vivre. Terres inhospitalières et dangereuses, Mizu no Kuni avait la réputation d’être un repère à brigands.</p>

            <p>Le premier Mizukage, celui qui a fondé le village, s’appelait Byakuren. C’était un shinobi puissant mais prudent, il souhaitait donner à tous les criminels et gens qui ne trouvaient pas leur place dans les autres villages un endroit où habiter. Faire la loi parmi les parias ne fut pas une chose aisée, c’est donc avec une discipline de fer que Byakuren a su s’imposer et faire régner l’ordre au sein du Pays de l’Eau. Malgré les ambitions de voir les Kaguya rejoindre le village, il ne parvint pas à un terrain d’entente et c’est en l’an 6 que ces derniers attaquèrent Kiri. Byakuren, d’une poigne de fer, mata cet assaut et prit la décision de soumettre le clan Kaguya pour en faire la police du village.</p>

            <p>À l’origine, le village de Kiri était un village assez renfermé sur lui-même où se trouvaient simplement ceux qui ne trouvaient pas leur place ailleurs. Le premier Mizukage était méfiant des autres villages, mais aussi attentif et ne leur était pas ouvertement hostile. En revanche, la mauvaise réputation de Kiri a perduré parmi les autres villages qui s’en méfiaient ouvertement.</p>

            <p>Notablement, c’est après la mort de Byakuren et lors du règne de la seconde Mizukage (incontestablement considérée comme une tyran-usurpatrice), Kaguya Orihime, que la grogne monta envers les possesseurs de Kekkei Genkai. Orihime et son clan menèrent une politique de brutalité, cherchant à maintenir le pouvoir entre leurs mains et ne pas retourner sous le joug d’un nouveau Mizukage.</p>

            <p>La révolte qui s’en suivit plaça Daichi, un parent du Shodai Mizukage, en tant que Sandaime Mizukage. Ce dernier, fort de ses talents, reprit le contrôle de la situation et parvint à soumettre le clan Kaguya - au prix de la mort de leur cheffe, Orihime. La haine envers les possesseurs de dons héréditaires fut plus forte que jamais, découlant de cette tyrannie orchestrée par un clan trop ambitieux.</p>

            <p>Si la chasse des possesseurs de Kekkei Genkai joue un rôle central dans l’histoire de Kiri, les historiens ne sont pas sûrs de quand cette dernière a commencé, tant cela s’est installé insidieusement. En une dizaine d’années, les premiers examens pour être chunin virent les exactions contre les possesseurs de Kekkei Genkai se multiplier. En retour, ces personnes, aux dons rares, se vengèrent. Les sols recouvrèrent d’os, les murs tapissaient de glace, furent des preuves suffisantes.</p>

            <p>Avec tous ces événements, les membres des castes inférieures se sont mis à détester et à montrer une hostilité ouverte envers les membres de clan qui possédaient des Kekkei Genkai particulièrement puissants ou envahissants. Et c’est le fait que Konoha ne cesse de se reposer sur les utilisateurs de Kekkei Genkai contre Kiri qui a contribué à une mauvaise relation entre les villages.</p>

            <p>À notre époque, sous le règne du troisième Mizukage, il n’est pas rare que les possesseurs de Kekkei Genkai se voient chassés par des membres des castes inférieures ou des personnes extérieures au village. Le stigmate perdure. De plus, de nombreux tribunaux populaires se sont créés, attendant une faute de la part du moindre utilisateur de Kekkei Genkai pour attribuer une punition des plus sévères.
                <br />La meilleure place, pour posséder un tel don, est la police de Kiri : dominée par les Kaguya, elle est respectée par crainte.
            </p>

            <p>Au début de l'année, un Bijû a ravagé une grande partie d'un des quartiers habités par la caste inférieure de Kiri. Le Bijû a ensuite disparu. Certains soupçonnent le Mizukage d'avoir été à l'origine de l'attaque, mais aujourd'hui, les Jinchûriki à Kiri ont assez mauvaise réputation.</p>

            <p>Pourtant, les hautes sphères connaissent la vérité : ce fut Hachibi et son Jinchûriki, ce jour-là, qui affrontèrent des adversaires coriaces. Car ce jour-là, se scella l’alliance entre Kumo et Kiri. Ce jour-là, Hachibi déchiqueta leurs adversaires communs, des espions à la solde d’une autre nation.</p>

            <h3>Personnages importants</h3>

            <p>Daichi : Un homme simple, issu du peuple, sans nom de famille ni clan. Daichi est celui qui représente le mieux Kiri comme diraient certains. C’est un homme des plus austères qui s’est forgé à partir de rien, et à su s’imposer par la force au milieu des vauriens. Malgré le régime autoritaire qu’il impose à Kiri, peu de ninjas osent le contester. Pourtant, la politique clivante qu’il mène fait également des ravages. Au fil des années, Daichi s’est fait toutefois de plus en plus discret. À tel point qu’il devient désormais rare de le croiser.</p>

            <h3>Chronologie</h3>

            <p>An 0 : Fondation.</p>

            <p>An 6 : Attaque des Kaguya sur Kiri, Byakuren mate l’assaut. Naissance de son neveu, Daichi.</p>

            <p>An 16 : Premier conseil des cinq Kage, répartition des Bijû.</p>

            <p>An 20 : Mort de Byakuren, début du règne de la Nindame Mizukage, Sandatsu.</p>

            <p>An 24 : Révolte qui place Daichi au pouvoir, Sandatsu meurt de sa main pendant la guerre civile.</p>

            <p>An 30 : Afin de renforcer l’entraînement de ses ninjas, Daichi décide le début de la brume sanglante. Ceux qui souhaitent devenir Genin s’affrontent dans un duel à mort. Les comportements discriminants envers les possesseurs de Kekkei Genkai se multiplient, sous l'œil approbateur du Mizukage.</p>

            <p>An 42 : Alliance avec Kumo.</p>

            <p>An 46 : Kiri conquiert une île proche d’Uzushio et y place une garnison composée, notamment, de ninjas Kaguya. Début du forum.</p>
        </div>
    </div>

    <div class=\"gb_visible\" id=\"iwa_context\">
        <div class=\"gb_title\">Contexte d'Iwa</div>
        <div class=\"gb_content\">
            <h3>Histoire</h3>

            <p>Le village d’Iwa a été fondé par le premier Tsuchikage. Peu de temps après la création des villages, le premier Hokage de Konoha a vendu des bêtes à queue à Iwa en signe d’amitié, ainsi que pour assurer la balance du pouvoir entre les villages. Alors que les Tsuchikage se sont succédés, les relations se sont toutefois bien détériorées entre les villages.</p>

            <p>Iwa est un village construit en hauteur, dont les nombreuses montagnes donnent l’avantage aux défenseurs qui connaissent le terrain, Iwa s’est bâti au flanc d’une montagne riche en minéraux et en matériaux rares. Se faisant, il a assuré un véritable contrôle de la production d’armes des pays ninja.</p>

            <p>C’est un village où les shinobis ne sont pas les plus nombreux, mais qui sait quand même se défendre. De plus, s’il devait se faire attaquer, le village dispose de très nombreux passages dans les mines pour s’échapper ou s’enfuir.</p>

            <p>La détérioration de la relation entre Iwa et les autres villages a été alimentée par les tendances belliqueuses et expansionnistes d’Iwa. Si la plus grande conquête de ce village a sans doute été celle du pays de la neige, il n’en a pas fallu plus pour que Konoha se sente menacé et que des tensions naissent. L’arrivée du Sandaime Tsuchikage n’arrangea en rien la situation, une rivalité puissante séparant désormais Konoha et Iwa, au fil des escarmouches et des erreurs diplomatiques.</p>

            <p>L’arrivée de la Yondaime Tsuchikage, Bakugei Hikaru, changea toutefois les choses. Cette dernière, bien qu’ambitieuse, souhaite faire connaître une ère plus paisible à son village, dont les effectifs ont été minés par les guerres passées. Elle a ainsi scellé une alliance tactique avec Suna - autrefois village rival d’Iwa - afin d’avancer dans cette direction.</p>

            <p>Les ninjas d’Iwagakure sont réputés pour leur ambition et leur soif de gloire. Ils accordent également une grande importance à l’expérience, et respectent particulièrement leurs aînés.</p>

            <p>L’arrivée d’Hikaru au pouvoir ne fait toutefois pas l’unanimité au sein du village. Non seulement son jeune âge peut être vu d’un mauvais œil par certains, mais en plus, tous ne partagent pas ses idées nouvelles ainsi que sa vision moins rigide de la vie d’un shinobi. Si elle possède ses partisans parmi les plus jeunes, certains - plus conservateurs - tendent à grincer les dents face à la politique qu’elle mène.</p>

            <p>Iwa se trouve en outre aujourd’hui dans une position inconfortable. Si les shinobis se vouaient autrefois leur corps et leur âme à leur Tsuchikage, cette passion s’est perdue. Les expansionnistes se font de plus en plus entendre, mettant à mal l’autorité d’Hikaru. On raconte également qu’un élève du Sandaime, maître du Jinton, souhaiterait faire entendre sa voix.</p>

            <h3>Personnages importants</h3>

            <p>Bakugei Hikaru : Prodige de sa génération, c’est grâce à ses compétences hors du commun qu’Hikaru a pu se hisser au rang de Kage. Kunoichi d’aspect médicinal, c’est également elle qui est à l’origine du Meiton. Elle incarne pour certains la jeunesse et l’espoir d’Iwa avec ses idées nouvelles. D’autres voient néanmoins ce changement d’un mauvais oeil. Malgré son aspiration à une paix durable, elle est une jeune femme possédant de la poigne, bien qu’elle puisse parfois l’impression d’être dépassée par la fracture d’Iwa en raison de son inexpérience ; gérer un  nouveau virage pour un village autrefois expansionniste n’a rien d’évident.</p>

            <h3>Chronologie</h3>

            <p>An 0 : Construction du village d’Iwa.</p>

            <p>An 16 : Premier conseil des Kage, répartition des Bijû.</p>

            <p>An 20 : Naissance d’Hikaru.</p>

            <p>An 21 : Début de la guerre contre le pays de la neige.</p>

            <p>An 23 : Le pays de la neige est annexé à Iwa, début des tensions entre Konoha et Iwa.</p>

            <p>An 30 : Cessez-le-feu entre Suna et Iwa, après la mort du Nidaime Tsuchikage lors d’une bataille.</p>

            <p>An 35 : Crise d’Ame. Le daimyo du pays de la pluie négocie l'annexion de ses terres à celles de Suna/Iwa qui se disputent la terre. Konoha intervient et remet de l’ordre. Ame est sous statut de protectorat par Konoha, sous les yeux méfiants de Suna et d’Iwa.</p>

            <p>An 41 : Hikaru devient la Yondaime Tsuchikage, elle scelle par la même occasion une alliance avec Suna.</p>

            <p>An 46 : Début du forum.</p>
        </div>
    </div>

    <div class=\"gb_visible\" id=\"suna_context\">
        <div class=\"gb_title\">Contexte de Suna</div>
        <div class=\"gb_content\">
            Texte
        </div>
    </div>

    <div class=\"gb_visible\" id=\"iwa_context\">
        <div class=\"gb_title\">Contexte d'Iwa</div>
        <div class=\"gb_content\">
            Texte
        </div>
    </div>

    <div class=\"gb_visible\" id=\"kumo_context\">
        <div class=\"gb_title\">Contexte de Kumo</div>
        <div class=\"gb_content\">
            Texte
        </div>
    </div>

    <div class=\"gb_visible\" id=\"konoha_context\">
        <div class=\"gb_title\">Contexte de Konoha</div>
        <div class=\"gb_content\">
            Texte
        </div>
    </div>

    <div class=\"gb_visible\" id=\"level\">
        <div class=\"gb_title\">Niveaux</div>
        <div class=\"gb_content\">
            <h3>Généralités</h3>

            <p>Les passages de niveaux vous octroient de nombreux bonus ; points d’attribut, techniques... Plus votre personnage aura de points d’expérience, plus il pourra s’en prendre à des ennemis coriaces. Il existe <strong>cinquante niveaux</strong>. Il est à noter que <strong>vous ne démarrez pas nécessairement à zéro</strong>, tout dépendant du personnage que vous proposerez et d’un lancer de dés à la présentation ; ainsi un Jônin obtiendra un niveau plus élevé à l’inscription qu’un Genin.</p>

            <h3>Gagner de l'expérience</h3>

            <p><strong>Chaque RP commencé vous rapporte deux points d’expérience, chaque réponse un point d’expérience.</strong> Un autre moyen de gagner de l’expérience est en participant à des missions et intrigues. Vous gagnez plus ou moins d’expérience en fonction de la dangerosité de la mission effectuée.

                <li>Les missions de rang D rapportent 2 points d’expérience ;</li>
                <li>Les missions de rang C rapportent 4 points d’expérience ;</li>
                <li>Les missions de rang B rapportent 6 points d’expérience ;</li>
                <li>Les missions de rang A rapportent 8 points d’expérience ;</li>
                <li>Les missions de rang S rapportent 10 points d’expérience.</li>
            </p>

            <p>D’autres récompenses vous attendent également après avoir effectué une mission !</p>

            <h3>Changements de niveau</h3>

            <p>
                Il vous faudra accumuler un certain nombre de points d’expérience avant de passer au niveau suivant.

                <li>Du palier 1 à 10, il vous faudra 5 points d’expérience par niveau.</li>
                <li>Du palier 10 à 20, il vous faudra 10 points d’expérience par niveau.</li>
                <li>Du palier 20 à 30, il vous faudra 15 points d’expérience par niveau.</li>
                <li>Du palier 30 à 40, il vous faudra 20 points d’expérience par niveau.</li>
                <li>Du palier 40 à 50, il vous faudra 25 points d’expérience par niveau.</li>
            </p>

            <p>
                Tous les dix niveaux, votre réserve de chakra augmente de 10, étant au départ égale à 10, il en va de même pour vos PVs qui démarrent à 20. Tous les cinq niveaux, vous avez la possibilité d’apprendre une technique. Donc,

                <li>Aux niveaux 5 et 10, vous pouvez apprendre des techniques de rang D.</li>
                <li>Aux niveaux 15 et 20, vous pouvez apprendre des techniques de rang C.</li>
                <li>Aux niveaux 25 et 30, vous pouvez apprendre des techniques de rang B.</li>
                <li>Aux niveaux 35 et 40, vous pouvez apprendre des techniques de rang A.</li>
                <li>Aux niveaux 45 et 50, vous pouvez apprendre des techniques de rang S.</li>
            </p>

            <h3>Avantages de grade</h3>

            <p>Vous ne démarrez pas sans techniques, possédant non seulement les techniques classiques à tous les ninjas à l’image du multiclonage, mais en ayant en plus un certain nombre vous étant attribués à votre grade ;

                <li>Un Genin commence avec 3 techniques de rang D, 3 techniques de rang C.</li>
                <li>Un Chûnin commence avec 3 techniques de rang D, 4 techniques de rang C, 1 technique de rang B.</li>
                <li>Un Jônin commence avec 3 techniques de rang D, 4 techniques de rang C, 2 techniques de rang B, 1 technique de rang A.</li>
            </p>
        </div>
    </div>

    <div class=\"gb_visible\" id=\"attributes\">
        <div class=\"gb_title\">Attributs</div>
        <div class=\"gb_content\">
            <h3>Généralités</h3>
            <p>Les attributs sont des caractéristiques qui évolueront tout le long de la montée en niveaux du personnage. Les attributs représentent schématiquement les forces et faiblesses de votre personnage, le build que vous souhaitez lui faire au fil de l’expérience. Il existe donc plusieurs types d’attributs.
               <li>Physique : Représente la capacité de votre personnage à encaisser des dégâts ; plus vous investirez dans cet attribut, plus votre jauge de Points de Vie (PV) sera grande.</li>
               <li>Esprit : Représente la résistance mentale de votre personnage (au Genjutsu ou techniques mentales des Yamanaka par exemple) ; influence également la capacité à détecter des éléments ou indices. Plus vous investirez dans cet attribut, plus votre jauge de Points de Chakra (PC) sera grande.</li>
               <li>Furtivité : Représente la capacité de votre personnage à être furtif ou à pister un personnage ; très utile pour la traque des Nukenin.</li>
               <li>Vitesse : Détermine la vitesse de votre personnage ; à savoir, qui débute le combat ainsi que les capacités d’esquive.</li>
               <li>Ninjutsu : Votre talent en Ninjutsu.</li>
               <li>Taijutsu : Votre talent en Taijutsu (Goken et Juken) mais également au maniement des armes.</li>
               <li>Genjutsu : Votre talent en Genjutsu.</li>
            </p>

            <p>Il est important de noter que vous <strong>ne pourrez pas investir plus de huit points dans un attribut</strong> (le niveau d’expertise maximal). Vous aurez plus ou moins d’attribut au départ en fonction de votre grade et de votre niveau, et <strong>vous gagnerez deux points d’attributs tous les cinq niveaux.</strong></p>

            <h3>Utilité</h3>

            <p>Si vous pouvez vous servir des attributs comme d’un indice narratif pour jauger un personnage dans un domaine, il faut savoir que ces derniers seront susceptibles de prodiguer des bonus et malus au lancer de dés :
                <li>Entre 0 et 2 points d’attributs dépensés, votre talent est “médiocre” et résultera en une pénalité de 1 point sur le lancer de dés.</li>
                <li>Entre 3 et 4 points d’attributs dépensés, votre talent est “dans la moyenne”, il n’y aura ni bonus ni malus.</li>
                <li>Entre 5 et 6 points d’attributs dépensés, votre talent est “bon”, il y aura un bonus +1 au lancer de dés.</li>
                <li>Pour 8 points d’attributs dépensés, votre talent est “excellent”, il y aura un bonus de +2 au lancer de dés.</li>
            </p>

            <p>L’utilité des points d’attribut se situe également dans l’arbre de compétences. Vous n’aurez accès qu’à certains achats à partir de certains points répartis dans les bons attributs ! (voir l’annexe sur l’arbre de compétences).</p>
        </div>
    </div>

    <div class=\"gb_visible\" id=\"influence_points\">
        <div class=\"gb_title\">Points d'influence</div>
        <div class=\"gb_content\">
            <h3>Généralités</h3>

            <p>Étant dans un univers basé sur le manga Naruto, nous privilégions le jeu de groupe comme le manga nous l’indique par l’existence d’équipes et la présence d’une synergie entre les possibles compétences utilisées par les shinobis. De plus, nous insistons davantage sur le fait avec l’existence de trois grandes alliances, qui permettent de maximiser un peu plus les coordinations inter-villages.</p>

            <h3>Points d'influence</h3>

            <p>Les actions de vos personnages permettront d’engranger des points d’influence, dont l’objectif est d’améliorer vos groupes. Ainsi, tous les villages sont concernés par ce système, et seulement eux.</p>

            <p>Les points d’influence sont gagnés principalement lors des missions et des événements liés aux intrigues. En dehors, pour une action dite « scénaristique », il serait nécessaire de faire une demande auprès du staff afin que la situation, qui doit avoir été jouée et être cohérente avec le contexte, soit examinée et donne lieu à une estimation des points engrangés.</p>

            <p>Plusieurs facteurs, amènent à gagner plus ou moins de points :
                <li>Les missions de plus haut rang offriront davantage de points d’influence.</li>
                <li>Les missions d’événements sont celles qui en donneront le plus, car elles impacteront de manière plus importante encore la trame du jeu.</li>
                <li>Les shinobis ayant des rangs particuliers (kage ; musou ; sannin ; épéistes de la brume ; gardes du corps des kage ; shinobi avec un titre reconnu qui offre une renommée mondiale, à l’instar de l’éclair jaune de Konoha pour Minato ; liste non-exhaustive) gagneront plus de points d’influence, de par leur renommée déjà connue. À l’inverse, les missions anbus ne permettront pas d’engranger ces points, mais donneront d’autres bonus.</li>
            </p>

            <h3>Dépenser les points d'influence</h3>

            <p>Les points d’influence ne peuvent être dépensés que par le kage du village. Concernant les dépenses communes aux alliances, ces dernières ne pourront se faire que par un accord commun entre les deux kage, signifié par une rencontre entre les deux.</p>

            <p>Les chefs des factions contacteront ensuite le staff afin de présenter le projet ; s’il est validé, le staff procédera à la dépense et un rp de lancement du projet sera demandé.</p>

            <p>Dans le cas des villages où le kage n’est pas joué, il sera important pour les joueurs de se concerter au préalable avant de contacter le staff.</p>

            <h3>Qu'est-ce qui peut être acheté grâce aux points d'influence ?</h3>

            <p>Les points d’influence permettent des achats qui améliorent la vie des shinobis et octroient des bonus divers et variés. Parmi les bonus qui concernent un village, nous pourrions trouver (cette liste est non-exhaustive et les joueurs ont la totale liberté de proposer d’autres achats et d’autres gains potentiels, qui seront ensuite validés ou non par le staff) :
                <li>Développement d’une bibliothèque de techniques : chaque joueur du village reçoit une technique gratuite.</li>
                <li>Renforcement des équipements médicaux : tous les shinobis spécialisés en iroujutsu reçoivent l’objet « pansement de rang C », en un exemplaire.</li>
            </p>

            <p>Les points d’influence permettent des achats variés qui améliorent la vie des shinobis (ou de certains shinobis) et octroient des bonus divers et variés, ayant pour but scénaristique d’améliorer la force du village.</p>

            <p>Les possibilités offertes par ces bonus sont théoriquement infinies, c’est pourquoi nous vous donnerons quelques exemples non-exhaustifs. Ces bonus peuvent être de plusieurs types :
                <li>Liés à une infrastructure (bibliothèque de recensement des justsus ; amélioration de l’hôpital du village)</li>
                <li>Lié à un groupe (sept épéistes de la brume ; sannins)</li>
                <li>Lié à un individu</li>
                <li>Lié à un aspect extérieur</li>
            </p>
        </div>
    </div>

    <div class=\"gb_visible\" id=\"missions\">
        <div class=\"gb_title\">Missions</div>
        <div class=\"gb_content\">
            <h3>Généralités</h3>

            <p>Au sein des villages, les ninjas sont susceptibles de recevoir des missions en fonction de leur rang. Les missions sont classées de D à S selon leur dangerosité. Elles sont susceptibles de chambouler l’intrigue du forum en fonction de leur importance, ou de faire progresser votre personnage. Vous pourrez effectuer plusieurs missions à la fois si vous êtes capables de l’assumer, tout en sachant que ces dernières exigent un rythme afin de ne bloquer personne ; <strong>au bout de deux semaines sans nouvelles de votre part, elles pourront être abandonnées, ou vous pourrez être exclu de la mission.</strong> Rassurez-vous cependant ; nous n’avons aucune exigence en termes de longueur de post.</p>

            <p>Les missions peuvent être proposées par tout le monde, du Maître du Jeu au Kage en passant par les membres. Il est toutefois conseillé d’en parler à votre groupe dans le channel dédié sur Discord avant de proposer une mission ; le staff se chargera de la validation et du lancement de ces dernières sur l’interface automatisée.</p>

            <p>Les missions sont susceptibles de vous rapporter diverses récompenses comme des points d’expérience, des points de compétence, ou des points d’influence.</p>

            <h3>Les rangs des missions</h3>

            <p>Il existe différents rangs de missions, plus ce dernier est élevé, plus les récompenses et la difficulté le seront… Mais également les risques encourus par votre personnage !
                <li>Rang D ; Missions données aux débutants, aux Genin fraîchement nommés. Elles ne représentent aucun danger pour la vie des ninjas et consistent généralement en petits travaux pour les habitants du village comme retrouver un chat perdu, cueillir des herbes ou même garder des enfants.</li>
                <li>Rang C ; Missions données à des Genin un peu plus expérimentés ou à des Chûnin. Comme les missions de rang D, elles sont peu dangereuses car n’aboutissant généralement à aucun affrontement avec des ninjas. Il peut s’agir de petites missions d’escorte, de protection, d’enquête ou de capture consistant souvent à gérer des brigands et voleurs.</li>
                <li>Rang B ; Missions données à des Chûnin expérimentés. Ce sont des missions susceptibles d’impliquer des combats contre d’autres ninjas. Il peut s’agir de protéger des personnes, d’espionner ou de tuer d’autres ninjas.</li>
                <li>Rang A ; Missions données à des Jônin, impliquant les affaires et enjeux politiques du village ou pays. Il peut s’agir de la protection de personnalités importantes, ou de l’élimination de forces ninja.</li>
                <li>Rang S ; Missions données à des Jônin expérimentés concernant les affaires confidentielles du pays. Cela peut consister en l’assassinat de personnalités importantes ou en transport de documents hautement confidentiels. Sauf exceptions, elles doivent rester secrètes.</li>
            </p>

            <p>Il est à noter que plus la mission est de rang important, plus le Maître du Jeu sera attentif au déroulement de cette dernière. Il vous sera indiqué si la mission est modérée à chaque tour, tout comme le Maître du Jeu pourra décider d’intervenir sur un tour précis (auquel cas vous serez prévenu peu de temps avant sur Discord). Vous pourrez également demander une intervention si vous en ressentez le besoin.</p>

            <h3>Traques</h3>

            <p>Il arrive que les villages envoient des chasseurs de déserteurs pour traquer les Nukenin. Pour des raisons de fairplay, il faudra que le Nukenin ait fait des actions répréhensibles ou se soit mis à dos votre personnage pour initier une traque. Toutes les traques et leurs enjeux devront se faire en concertation avec le Maître du Jeu.</p>
        </div>
    </div>

    <div class=\"gb_visible\" id=\"fights\">
        <div class=\"gb_title\">Combats</div>
        <div class=\"gb_content\">
            <h3>Combats</h3>

            <p>Sur Jikan no Mon, vous possédez une jauge de chakra (PC) et de vie (PV), dont <strong>la taille est automatiquement calculée par les algorithmes.</strong> Lorsque l’une de vos attaques touche votre adversaire et uniquement dans ce cas, <strong>vous lui retirez les PV indiqués, tout comme vous vous soustrayez les PC indiqués.</strong> Dans le cas d’une technique non offensive, <strong>vous vous retirerez toujours les PC indiqués si l’action réussit.</strong> Le combat se termine lorsque les PC ou PV d’un joueur atteignent zéro (le personnage n’est plus considéré comme étant en état de se battre).</p>

            <h3>Déroulement des combats</h3>

            <p>Jikan no Mon laisse une certaine liberté au sein du déroulement des combats, tant que vous restez cohérent et que vous gardez en tête que <strong>vous n’aurez le droit qu’à une action par tour, si l’on omet le cas des invocations.</strong> Ainsi, une technique de rang S aura nécessairement le dessus sur une technique de rang B, <strong>sauf en cas de stratégie particulièrement bien menée.</strong> Il est effectivement important de prendre tous les éléments en compte lors d’un combat !</p>
        
            <p>Dans le cas où deux techniques du même rang se confrontent, <strong>le joueur qui aura investi le plus de points dans l’attribut du type la technique (à savoir, Ninjutsu, Taijutsu ou Genjutsu) aura le dessus.</strong> Et dans le cas où les deux joueurs auront le même nombre de points dépensés dans leurs attributs, il sera possible de les départager au lancer de dés en précisant le nombre de points d’attribut (cf l’annexe des dés) ; <strong>le joueur au plus grand score ayant l’avantage sur l’autre.</strong></p>

            <p>Concernant les attributs, il est important de savoir que l’attribut vitesse déterminera <strong>quel joueur attaquera le premier.</strong> Cet attribut vous permet également, une fois tous les trois tours, de <strong>tenter une esquive.</strong> Si vous avez dépensé plus de points en vitesse que votre adversaire dans l’attribut du type de sa technique, vous pouvez considérer l’esquive comme étant réussie. Si les deux attributs sont égaux, vous devrez vous départager sur le lancer de dés. Dans le cas où l’attribut est inférieur, l’esquive échoue.</p>

            <p>Si vous le souhaitez, nous vous autorisons d’être créatifs avec les dés (d’un accord commun), si vous voulez générer une situation aléatoire, ou vous départager d’une quelconque manière. En cas de désaccord sur le déroulement d’un combat, les Maîtres du Jeu trancheront.</p>

            <p><strong>Pour finir, vous aurez toujours un bouton, sur votre FT, vous permettant d’effectuer un copier/coller de la technique</strong>, nous vous demanderons de toujours vous en servir, afin d’afficher la technique que vous employez !</p>

            <h3>La roue des éléments</h3>

            <p>Chaque élément possède des forces et faiblesses. Dans un cas particulier de deux techniques de même rang qui se confrontent (l’eau contre le feu par exemple), c’est la technique avantagée (ici l’eau) qui l’emportera.</p>

            <p>Voici donc les éléments, leurs forces et leurs faiblesse,
                <li>Le Feu (techniques Katon), fort contre le Vent mais faible contre l’Eau.</li>
                <li>Le Vent (techniques Fûton), fort contre la Foudre mais faible contre le Feu.</li>
                <li>La Foudre (techniques Raiton), fort contre la Terre mais faible contre le Vent.</li>
                <li>La Terre (techniques Doton), fort contre l’Eau mais faible contre la Foudre.</li>
                <li>L’Eau (techniques Suiton), fort contre le Feu mais faible contre la Terre.</li>
            </p>

            <h3>Les avantages et désavantages</h3>

            <p>Il est important de prendre en compte le terrain avant un combat, pour des raisons de stratégie. Voici les différents temps possibles, ainsi que les avantages et désavantages qu’ils impliquent. Vous pouvez vous mettre d’accord avec l’adversaire sur le temps qu’il fera <strong>du moment que c’est cohérent avec l’environnement</strong> (il n’y aura pas de tempête de sable à Kiri, par exemple). En cas de désaccord, vous pourrez tirer au dé.
                <li>Pluie/averse : Les techniques Suiton et Raiton sont avantagées d’un rang (exemple : une technique Suiton de rang B aura le dessus sur une autre technique de rang B à la confrontation).</li>
                <li>Brume : Les techniques Bakuton sont désavantagées d’un rang, l’attribut perception des ninjas ne venant pas de Kiri baisse d’un cran.</li>
                <li>Tempête de sable : L’attribut de perception des ninjas ne venant pas de Suna baisse d’un cran. Les techniques Fûton sont avantagées d’un rang.</li>
                <li>Venteux : Les techniques Katon sont avantagées d’un rang.</li>
                <li>Grêle/neige : Les techniques Hyôton sont avantagées d’un rang.</li>
                <li>Normal : Pas d’avantages ou de désavantages.</li>
            </p>
        </div>
    </div>

    <div class=\"gb_visible\" id=\"dices\">
        <div class=\"gb_title\">Lancer de dés</div>
        <div class=\"gb_content\">
            <h3>Généralités</h3>

            <p>Jikan no Mon vous propose un système de dés dans le but de pimenter vos RPs. Les dés particuliers que nous utilisons se nomment “dé fudge”. Ils possèdent trois face, et ont un résultat qui tend vers zéro. Ainsi, nous réduisons l’effet aléatoire au profit du build de votre personnage, tout en laissant place à quelques surprises, en particulier lorsque l’issue d’un tour est incertaine.</p>

            <h3>Comment interpréter les résultats ?</h3>

            <p><strong>Lorsque vous avez un résultat négatif à votre dé, cela ne signifie pas que votre technique échoue,</strong> mais simplement que vous ne parvenez pas à toucher votre adversaire ! Cela peut se manifester de bien des manières possibles pour votre imagination. Votre adversaire peut par exemple parer votre attaque, l’esquiver, ou même se montrer plus malin que vous ! Si ce dernier effectue une réussite au sein du même tour où vous avez échoué, il vous atteint.</p>

            <p><strong>Dans le cas d’un résultat positif, la réussite signifie que votre technique est susceptible de toucher votre adversaire.</strong> Si deux adversaires ont une réussite, celui qui aura le résultat le plus important aura un avantage plus ou moins grand sur l’autre au sein du tour, qui peut se manifester de bien des façons. Néanmoins, <strong>dans le cas de deux techniques de rang différent, celle ayant le rang le plus important arrivera à bout de l’autre</strong>, et ce peu importe l’écart des réussites des joueurs respectifs.</p>

            <h3>Quand se servir des dés ?</h3>

            <p>Au sein de votre aventure avec d’autres joueurs, l’utilisation des dés lors d’un combat est <strong>facultative</strong>. Ils n’agit que d’un outil susceptible d’accompagner votre narration lorsqu’il y a des incertitudes ! Vous êtes même libres d’utiliser le lancer de dés quand bon vous semble si vous souhaitez vous en servir.</p>

            <p>Le staff utilisera toutefois plus fréquemment les dés lors des intrigues, sans que ce soit systématique. Dans ce cas, le staff se chargera de lancer les dés pour vous.</p>

            <h3>Comment lancer les dés</h3>

            <p>Les dés se lanceront dans un chanel dédié sur Discord à l’aide de la commande suivante : <br />

                !roll 4df a8
            </p>

            <p>Vous voyez le chiffre derrière ce petit “a” ? C’est le seul paramètre à changer ; il représentera votre nombre de points dans l’attribut en question (ici 8). L’algorithme se chargera de lui-même de calculer les bonus/malus liés à vos points d’attribut.</p>

            <p>Si vous n’êtes pas à l’aise à l’idée de taper une commande sur Discord, vous pouvez à tout moment demander au staff de modérer le combat !</p>

            <h3>Dé de grade</h3>

            <p>Le grade de votre personnage est déterminé par un lancer de dé par le staff lors de votre présentation. Il s’agit ici d’un dé de dix faces. Plus votre personnage sera âgé, plus il aura de chances d’obtenir un rang élevé.</p>

            <p>
                <em>Si votre personnage a moins de 18 ans :</em><br />
                1 - 8 : Genin.<br />
                9 - 10 : Chûnin.
            </p>

            <p>
                <em>Si votre personnage a moins de 22 ans :</em><br />
                1 - 4 : Genin.<br />
                5 - 8 : Chûnin.<br />
                9 - 10 : Jônin.
            </p>

            <p>
                <em>Si votre personnage a moins de 26 ans :</em><br />
                1 - 7 : Chûnin.<br />
                8 - 10 : Jônin.
            </p>

            <p>
                <em>Si votre personnage a moins de 36 ans :</em><br />
                1 - 5 : Chûnin.<br />
                6 - 10 : Jônin.
            </p>

            <p>
                <em>Au-delà :</em><br />
                1 - 3 : Chûnin.<br />
                4 - 10 : Jônin.
            </p>

            <p>Les pré-liens échappent toutefois à cette logique, leur rang étant déjà défini sans aucun lancer, sous réserve d’une présentation solide.</p>
        </div>
    </div>

    <div class=\"gb_visible\" id=\"ft_specific\">
        <div class=\"gb_title\">Particularités de la Fiche Technique</div>
        <div class=\"gb_content\">
            <h3>Généralités</h3>

            <p>Sur le menu utilisateur, vous trouverez un lien vers votre Fiche Technique. Il s’agit d’une interface automatisée où vous pourrez donner de nouvelles techniques à votre personnage au fil de votre progression (en les achetant avec des points de compétence ou en montant de niveau par exemple) ; il est toutefois à noter que vous ne pourrez sélectionner que des techniques d’un type que vous aurez débloqué sur l’arbre de compétences (voir l’annexe à ce sujet). La Fiche Technique sur JnM possède quelques particularités - en plus de son automatisation.</p>

            <p>Autre point important, il vous faudra attendre la validation d’un administrateur pour que vos techniques apparaissent dans la liste des techniques validées ; vous serez libres de les modifier avant cela.</p>

            <h3>Coût</h3>

            <p>Le coût de la technique se divise en trois catégories ;
                <li>Léger ;</li>
                <li>Moyen ;</li>
                <li>Lourd ;</li>
            </p>
            <p>
                En fonction du rang de la technique et ce qui a été saisi pour le coût, les dégâts infligés en Points de Vie (PV) ainsi que le coût en Points de Chakra (PC) seront automatiquement calculés. Dans le cas où la technique ne serait pas offensive, les dégâts directs infligés seront à zéro.
            </p>

            <h3>Talents</h3>

            <p>Les talents sont des particularités de votre personnage, des bonus le définissant. Par exemple, un personnage ayant une immense quantité de chakra aura le bonus Chakra++ qui augmentera sa jauge. Les talents sont donnés par les administrateurs, ils peuvent être présents dès le début du jeu (si votre personnage possède une particularité héréditaire liée à un clan par exemple).</p>

            <p>Il est également possible d’acquérir des talents au fil du jeu, en particulier lorsque votre personnage atteint un certain niveau.</p>

            <p>Il existe aussi des talents plus génériques, disponibles pour tout joueur dans l’arbre de compétences (voir les annexes des différentes branches pour les découvrir).</p>
        </div>
    </div>

    <div class=\"gb_visible\" id=\"kiri_clans\">
        <div class=\"gb_title\">Clans de Kiri</div>
        <div class=\"gb_content\">
            <h3>Clan Fûma</h3>

            <p>Réputé dans le monde entier, le clan Fûma est un clan de forgeron qui semblait n’avoir de conflits avec aucun autre clan. Pour cause, ils préféraient s’occuper du commerce de leurs armes, qui leur permettait de survivre, plutôt qu'à affronter les autres.</p>

            <p>Malgré cela, ne doutez pas d’eux : un fûma énervé est plus dangereux que n’importe qui. C’est d’ailleurs le seul clan qui soutient la politique actuelle, car ils n’ont ni kekkei genkai, ni hiden, et voit plus de profits en équipant des shinobis sans dons, qui doivent donc compenser avec leurs armes. Les fûma sont un support financier incroyable pour Kiri et le Sandaime Mizukage, et on dit qu’aucune rébellion ne réussira tant qu’ils sont là.</p>

            <p>Pour cause, leurs liens étroits avec des clans d’autres pays. Ils ont réussi à créer un fort lien avec le clan Uchiha de Konoha et le clan Uzumaki d’Uzushio. S’ils sont pour le Mizukage, ils sont aussi pour l’abandon de toute prétention sur le village des Uzumaki.</p>

            <img src=\"https://zupimages.net/up/24/22/87uz.png\" class=\"symbol_clan\">

            <p>Leur symbole est un shuriken fûma, l’arme de prédilection des membres du clan. Ces derniers sont plutôt spécialisés en kenjutsu.</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>

            <h3>Clan Hôzuki</h3>

            <p>L’histoire du clan Hôzuki est d’une importance capitale pour le village de Kiri, car il est à l’origine des sept épées de la brume, qui sont leur œuvre la plus importante. C’est pour cette raison que les sept épées sont liées à un parchemin unique, possédé par le clan. Ce fut une femme, la fondatrice du clan, qui forgea les sept épées. Sa légende s’est tarie au fil des siècles, des hommes ont tenté de s’approprier son oeuvre, mais jamais elle ne fut oubliée.</p>

            <p>Hôzuki Anzû, légende des temps anciens, était déjà parvenue à fédérer une partie du pays de l’eau autour d’elle. Sa force était telle qu’elle pouvait affronter des shinobis de clans réputés, mais elle trouva la mort face aux Kaguya, qui n’hésitèrent pas à l'achever.</p>

            <p>Une statue à moitié détruite se trouve sur une des places de Kiri. Celle-ci représente la femme, avec ses sept épées.</p>

            <p>Le clan Hôzuki est un des seuls, avec les Fûma, à avoir encore voix au chapitre : la raison est que la liquéfaction est un apprentissage, pas un héritage. Ils ne sont donc pas persécutés. Ils luttent cependant pour les droits de leurs confrères claniques, car les épéistes acceptent tout le monde…</p>

            <img src=\"https://zupimages.net/up/24/22/mny6.png\" class=\"symbol_clan\">

            <p>Personne ne sait ce que représente réellement le symbole du clan, et à dire vrai, les membres du clan Hôzuki n’en ont pas d’intérêt à se pencher sur la question. Ils sont surnommés les rejetons du démon, mais ont pourtant une côte de popularité extrêmement haute autant chez le bas peuple, chez les ninjas ou les hautes instances du village, la raison : ils forment les épéistes de la brume.</p>

            <p>Le chef des sept épéistes de la brume est toujours membre du clan Hôzuki, qui garde d’ailleurs le monopole de la plus puissante des épées : Samehada (voir pré-lien).</p>

            <p>Le clan possède aussi le secret d’un hiden, la liquéfaction, très utile en combat rapproché.</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>

            <h3>Clan Kaguya</h3>

            <p>Si un clan fait souvent parler de lui, c’est bien celui des Kaguya. Des shinobis qui étaient voués à une violence incroyable, mais qui ont peu à peu accepté les codes du village de Kiri. Pas par choix, non, car ils ont été forcés de rejoindre les rangs de la brume et ont pris le rôle (pas par choix) de police. On peut dire qu’aucun rôle n’aurait mieux collé à leurs dons et à leur personnalité, ceci est vrai.</p>

            <p>La Nidaime Mizukage venait de leur clan. Elle s’appelait Kaguya Orihime et profita d’un creu dans le pouvoir pour s’en emparer, afin de ne pas retomber sous l’emprise de quelqu’un. Ce fut le petit-fils du Shodai Mizukage qui parvint à rétablir une semblant de calme et qui devint le Sandaime Mizukage, Daichi.</p>

            <p>Pourtant, aujourd’hui, si vous écoutez les claniques, ils vous diraient qu’ils préféraient cette époque. Les villageois, eux, pensent que c’est mieux aujourd’hui. Les claniques savent à quel point les Kaguya souffrent de leur servitude et sont prêts à les défendre, au péril de leur vie.</p>

            <p>Aujourd’hui, c’est bien autour d’un Kaguya qu’une rébellion gronde, car il est le seul utilisateur de kekkei genkai à avoir une haute place.</p>

            <img src=\"https://zupimages.net/up/24/22/bz7g.png\" class=\"symbol_clan\">

            <p>Le symbole du clan Kaguya, représentant simplement deux points rouges, est aujourd’hui considéré comme sans symbolique précise par les membres du clan, qui n’en connaissent pas la véritable signification. Si l’origine a été perdue, il y a bien quelque chose dont ils se souviennent : ce symbole, tatoué sur chaque nouveau-né, est aujourd’hui leur prison. Il est le fuinjutsu qui sert aux instances dirigeantes pour contrôler les membres du clan et éviter leurs bains de sang.</p>

            <p>Un méfait nécessaire, selon la majorité de la population, car le don du clan Kaguya est violent : le Shikotsumyakuk, autrement dit, la maîtrise des os. Ceci leur donne accès à des techniques mêlant ce don héréditaire et le taijutsu, d’une force et d’une précision incroyable.</p>

            <p><strong>Chef de clan :</strong> Se rapprocher du pré-lien chef de clan pour le jouer.</p>

            <h3>Clan Terumi</h3>

            <p>Le clan Terumi était le clan le plus faible, avant que le village de Kiri ne naisse. Souvent soumis à autrui, ce clan dut se lier aux autres pour survivre aux assauts des Kaguya et aujourd’hui, ses membres n’apprécient pas que le chef du clan Kaguya soit au centre des attentes pour rétablir l’ordre à Kiri. Malgré cela, ils acceptent ce fait.</p>

            <p>Ils l’acceptent, car le premier mort de la brume sanglante s’appelait Terumi Seika. La jeune fille était la fille du chef du clan et ne voulait pas se défendre à mort. Elle refusa, et fut éliminée.</p>

            <p>Le clan Terumi réclame une vengeance sanglante pour cet affront. Un clan qui, d'apparence, était peu combatif, réputé pour sa volonté de paix dans l’archipel. Ils ont désormais une seule hâte : que le pouvoir revienne aux claniques et que les sans dons soient rappelés à leur juste place…</p>

            <img src=\"https://zupimages.net/up/24/22/35fn.png\" class=\"symbol_clan\">

            <p>À l’origine, le symbole du clan n’était représenté que par deux barres latérales, qui représentaient leurs deux dons héréditaires : le futton et le yôton. Puis, les membres ont unanimement ajouté le cercle parfaitement tracé, qui est symbolique de l’unité parfaite dont les membres font preuves. C’est probablement le clan le plus soudé au sein de Kiri.</p>

            <p>Les joueurs peuvent donc avoir accès un l’un des deux kekkei genkai. Le second pourra être obtenu au fil de l’évolution du personnage et avec justification (ninja de haut rang).</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>

            <h3>Clan Yuki</h3>

            <p>L’histoire de Kiri est, aujourd’hui, plutôt sombre. Les clans qui ont jadis contribué à sa fondation sont répudiés, leur histoire modifiée pour coller à un récit vengeur et salvateur, pour glorifier l’histoire du Sandaime Mizukage, Daichi. Pourtant, une histoire parmi toutes les autres ne saurait être modifiée : celle du clan Yuki, qui contribua des décennies durant, à la protection des nomades de la brume.</p>

            <p>Lorsque le Shodai Mizukage fonda le village caché de Kiri, ce ne fut pas de son fait, ni de sa propre idée, en réalité. Mais l’histoire fit passer ce dernier pour un héros. Alors que la réalité était différente : Byakuren faisait partie des populations nomades et non brigandes du pays de l’eau. Ayant trouvé refuge au sein du clan Yuki, qui protégeait si bien les sans clans.</p>

            <p>Et voyant l’unité de ces clans, Byakuren fonda Kiri, et fut rapidement rejoint par les Yuki. Ces derniers défendirent le village avec une hargne peu commune, et s’installèrent comme des forces omniprésentes, sur qui on pouvait compter.</p>

            <p>Mais la discrimination envers les dons héréditaires fut-elle qu’ils ne furent pas épargnés non plus. Les Yuki avaient soutenu le clan Kaguya et le Nidaime Mizukage dans leur prise de pouvoir, pour une raison simple : ils ne toléraient pas que les Kaguya soient tenus en laisse. Si eux l’étaient, quand ce serait le tour des autres ?</p>

            <p>Et cela ne manqua pas. Ils perdirent leurs pouvoirs, leurs places, leurs rangs. Et ils tentent de se reconstruire. Et tous le savent : la morsure du froid est la plus terrible qui soit.</p>

            <img src=\"https://zupimages.net/up/24/22/onb4.png\" class=\"symbol_clan\">

            <p>Leur symbole représente à la perfection le don dont ils sont dépositaires : le hyôton, l’art de la glace. Un simple flocon de neige, anodin, pour un clan qui ne l’est pas.</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>
        </div>
    </div>

    <div class=\"gb_visible\" id=\"iwa_clans\">
        <div class=\"gb_title\">Clans d'Iwa</div>
        <div class=\"gb_content\">
            <h3>Clan Bakugei</h3>

            <p>Certains des habitants de la montagne avant l’arrivée du premier Tsuchikage avaient découvert une manière de se défendre plutôt unique : ils attiraient leur poursuivant au coeur d’une galerie pour faire exploser tant bien l’entrée que la sortie, bouchant le passage avec des rochers tombés pour les enfermer à l’intérieur. Au début, ils utilisaient des rouleaux explosifs, mais ils se sont ensuite tournés vers l’utilisation de chakra.</p>

            <p>Pour parvenir à leurs fins, les membres du clan ont besoin d’un matériau malléable mais solide qui leur permet de contenir l’explosion. Souvent, à ces fins, ils utilisent de l’argile qu’ils produisent.</p>

            <p>Pour cette raison, les membres du clan Bakugei sont devenus une des unités d’élite causant mort et frayeur sur les champs de bataille. Ils ont été assignés aux meurtres de masse, et cela leur a permis de mener Iwa à quelques victoires.</p>

            <img src=\"https://zupimages.net/up/24/22/tdpu.png\" class=\"symbol_clan\">

            <p>Leur symbole représente une montagne, mais de manière stylisée. Ceci vient de leurs origines, car ils étaient autrefois des nomades, qui se servaient des tunnels dans les montagnes pour survivre.</p>

            <p>Leur don, le bakuton (explosions), fut fort utile pour cela.</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>

            <h3>Clan Kamizuru</h3>

            <p>S’il n’y a que très peu de terres arables autour d’Iwa, il y existe quand même un champ entier de fleurs et d’arbres se trouvant à l’arrière du village, champ dont la beauté est inégalée même dans les autres villages Ninja. Il n’est pas rare d’ailleurs de voir des touristes civils d’autre pays venir voir le spectacle de la nature en action.</p>

            <p>Le clan qui prend soin de ce champ est le clan Kamizuru. A l’origine un clan du pays du Feu, ils étaient les plus grands alliés du clan Aburame, et tous deux participaient à entretenir les magnifiques forêts autour du village. Seulement, le clan Kamizuru n’était pas d’accord avec le village sur la politique autour de la forêt de la mort. Le village voulait l’utiliser comme terrain d’entraînement, ce contre quoi le clan Kamizuru s’est levé. Ils refusaient de voir un endroit si dangereux être utilisé par le village. Finalement, c’est ce conflit qui les poussa à partir du village et à se diriger vers les montagnes et à finalement créer le village d’Iwa, poussant le Hokage a tenter de raccommoder leurs relations à l’aide de bêtes à queue.</p>

            <p>Le clan Kamizuru est connu et respecté de tous les membres du village, Il n’y a pas une seule personne d’Iwa qui ne connaît pas leur nom, si ce n’est car c’était aussi celui du premier Tsuchikage.</p>

            <img src=\"https://zupimages.net/up/24/22/1ztp.png\" class=\"symbol_clan\">

            <p>Leur symbole représente une fleur, en lien avec leur don : les abeilles, réputées pour la polinisation. Non seulement capables de contrôler les abeilles, certains membres parviennent aussi à maîtriser le miel et à le durcir pour des attaques singulières.</p>
        
            <p><strong>Cheffe de clan :</strong> Kamizuru Botan</p>

            <h3>Clan Kinukata</h3>

            <p>Selon la légende, le premier Tsuchikage a trouvé l’endroit où installer le village en suivant un faucon qui l’aurait guidé jusqu’à des terres fertiles au flanc d’une montagne, où était établi le nid de ce même oiseau. Depuis, le faucon est devenu un animal presque sacré pour le village d’Iwa.</p>

            <p>Et les personnes qui sont chargées de prendre soin de ces faucons sont tous issus du clan Kinutaka. La plupart naissent d’ailleurs dans une volière, au milieu des oiseaux, afin d’en être le plus proche depuis leur naissance. C’est donc un clan plutôt récent, qui est apparu avec le besoin de prendre soin des faucons.</p>

            <p>Ce clan, notamment, possède une charge spéciale : la surveillance des alentours du village. En plus de l’entraînement pour leurs techniques, ils reçoivent donc un enseignement lié à la topographie du pays de la terre, pouvant repérer le moindre changement.</p>

            <img src=\"https://zupimages.net/up/24/22/b2gm.png\" class=\"symbol_clan\">

            <p>L’emblèle est une représentation stylisée de plumes, en lien avec le hiden du clan : le torijutsu, le combat avec les faucons. Leurs techniques ressemblent à leurs confrères Inuzuka, et c’est pour cette raison qu’ils ont une longue rivalité.</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>

            <h3>Clan Kesshô</h3>

            <p>On évoque souvent Senju Hashirama, qui aurait éparpillé les bêtes à queues aux différents villages et aurait ainsi créé une forme d’équilibre au sein du sekai. C’est ce que l’histoire décida de conserver, mais les Kesshô avaient bien des dons, et le contrôle des bijû en faisait partie.</p>

            <p>Les membres du clan sont à l’origine des sceaux qui emprisonnent les démons au sein d’Iwa, et ont capturé le démon Gobi, avec leur cristal et leur fuinjutsu.</p>

            <p>Ayant adopté le projet du Shodai Tsuchikage, ils l’ont suivi dans la conception du village caché de la terre. Et ils ont donné tout ce qu’ils pouvaient pour mener leurs terres à la réussite, car la présence d’une rancœur entre les clans Aburame, de Konoha et Kamizuru, du Tsuchikage, pouvait causer de grands troubles.</p>

            <p>Le Nidaime Tsuchikage était issu de ce clan, et aurait, dit-on, tenté de mener de grands projets. Mais sa mort lors d’une bataille entre Iwa et Suna fit cesser toutes les possibilités.</p>

            <img src=\"https://zupimages.net/up/24/22/osno.png\" class=\"symbol_clan\">

            <p>Les Kesshô auraient pu arborer un symbole représentant leur don héréditaire, le shôton (cristal), mais ils ont préféré un cercle avec un creu au centre ; en effet, ce symbole est la représentation du premier sceau inventé par le fondateur du clan.</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>
        </div>
    </div>

    <div class=\"gb_visible\" id=\"suna_clans\">
        <div class=\"gb_title\">Clans de Suna</div>
        <div class=\"gb_content\">
            <h3>Clan Iwasaki</h3>

            <p>Une vieille légende affirme que le clan Iwasaki aurait donné naissance au désert du pays du vent, en transformant d’anciennes terres verdoyantes en sables arides, lors d’une guerre… Personne n’y croit, mais la légende est parvenue encore aujourd’hui jusqu’aux jeunes générations, qui s’en amusent.</p>

            <p>Au fil des années, depuis la création du village, le clan a donné naissance à de nombreux ninjas, mais pourtant, leur renommée n’a que peu traversé les frontières. Pour cause, ils sont principalement donné des shinobis ayant rejoint les rangs de l’anbu de Suna, notamment pour les missions d’assassinat, où leurs techniques sont particulièrement efficaces</p>

            <img src=\"https://zupimages.net/up/24/22/bgdw.png\" class=\"symbol_clan\">
            <p>L’emblème du clan représente leur technique la plus connue (et infiniment mortelle), Shakuton - Kajôsatsu (meurtre par évaporation), qui fait jaillir trois sphères d’une chaleur imparable.

                <br />En effet, ce clan partage le secret du très puissant shakuton.</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>

            <h3>Clan Seijuu</h3>

            <p>Réputé pacifique et secret, peu de choses sont connues sur les habitudes et sur les rites qui composent la vie de ce mystérieux clan. On dit qu’il forme des shinobis mystiques, presque pacifiques, dont les appétences pour les arts anciens (du fuinjutsu, notamment) sont inconcevables.</p>

            <p>À l’origine, et cela, peu le savent, leur nom était Hagoromo. Ils ne formaient qu’un seul et unique clan, avant qu’une scission ne les sépare des Katayama, dont les volontés de guerre étaient fortes.</p>

            <p>Lorsque le clan Hagoromo s’est divisé en deux, les Seijuu ont pris la direction des montagnes désertiques du pays du vent, où ils ont fondé un refuge. Apportant paix et tranquillité aux populations qui le souhaitaient, leur vie ressemblait davantage à un ordre monastique.</p>

            <p>Le Shodai Kazekage, Ootani Reto, fut conseillé par ce clan (notamment après avoir vu leur cohésion) dans la conception de Suna.</p>

            <p>L’emblème du clan ressemble grandement à celui de leurs cousins, les Katayama. Celui des Seijuu représente les 5 branches du clan, unies autour d’une autre, centrale. En effet, le clan est littéralement divisé en ordres, dont l’organisation s’oriente autour de celui du chef du clan. L’ordre dirigeant change donc régulièrement.</p>

            <img src=\"https://zupimages.net/up/24/22/9qsq.png\" class=\"symbol_clan\">

            <p>Chaque membre du clan est lié à un animal dès la naissance, grâce à un sceau qui canalise leur faculté à absorber l’énergie naturelle. Cette liaison permet aux membres de posséder des techniques semblables au Sennin Modo (senjutsu), en utilisant les caractéristiques de leur animal-totem.
                <br />Un shinobi dont l’animal-totem serait une tortue pourrait par exemple former une carapace quasi indestructible autour de lui.</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>
            
            <h3>Clan Ootani</h3>

            <p>Le clan Ootani est réputé principalement pour être à l’origine de la fondation du village caché du sable, mais est pourtant un clan très ancien, qui a développé le don du magnétisme (jiton) lors des premières années du ninjutsu. Ce don a permis aux membres de ce clan de s’imposer, en affrontant des pointures issues des autres pays, tels que les Senju de Konoha ou les Bakugei d’Iwa.</p>

            <p>Pourtant, on pourrait citer d’autres légendes qui entourent ce clan, car on dit qu’il aurait connu une époque où le pays du vent aurait été non pas constitué de sable, mais de prairies. En effet, c’est de cette époque lointaine qu’ils tiennent leur emblème : le chrysanthème.</p>

            <p>Lors de la fondation de Suna, les Ootani n’ont pas eu d’intérêt à recueillir d’autres clans, qui étaient peu nombreux dans les terres arides. Ils ont privilégié un fait simple : donner de la sûreté aux populations nomades du désert, qui elles, étaient nombreuses. En effet, le désert n’est pas connu pour ses villes florissantes.</p>

            <p>Les années ont vu d’autres clans apparaître à Suna, mais la tradition a laissé à ce clan une place prépondérante chez les shinobis du désert, leur octroyant les places de Kazekage.</p>

            <img src=\"https://zupimages.net/up/24/22/u3oz.png\" class=\"symbol_clan\">

            <p>Le clan Ootani est dépositaire d’un don réputé sacré dans le désert, le magnétisme (jiton), mais à l’instar d’autres dons, il n’est pas si réputant et difficile à maîtriser. La majorité des membres du clan ne pourront, à terme, que manipuler leurs armes ou d’autres objets, tandis que les spécialistes - l’élite du clan - maîtrisera la limaille (poussière de métal, qui peut se décliner presque à l’infini).</p>

            <p>Les membres du clan partagent tous, cependant, l’affinité avec le vent (fûton).</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>

            <h3>Clan Yubibuki</h3>

            <p>Il s’est formé peu de temps après la fondation du village caché du vent, dans le but de donner naissance aux légendes marionnettistes de demain. Ce clan, relativement jeune donc, recueille notamment les orphelins de Suna pour les former à la création de marionnettes, mais pas que ; les anciennes familles pratiquant cet art ont pour beaucoup rejoint leurs rangs.</p>

            <p>Les ninjas du clan Yubibuki se sont notamment illustrés lors des batailles qui permirent à Suna (et Iwa) de conquérir des terres limitrophes.</p>

            <img src=\"https://zupimages.net/up/24/22/016y.png\" class=\"symbol_clan\">

            <p>D’un commun accord, les membres du clan ont repris le sceau qui servait à identifier Monzaemon Chikamatsu, la légende du kugutsu (marionnettisme).</p>

            <p>Si les maîtres marionnettistes se trouvent aussi dans les quelques autres clans, ceux du clan Yubibuki ont une plus grande facilité pour travailler sur leurs créations, notamment avec un accès à des ressources plus nombreuses.</p>
            
            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>

        </div>
    </div>

    <div class=\"gb_visible\" id=\"kumo_clans\">
        <div class=\"gb_title\">Clans de Kumo</div>
        <div class=\"gb_content\">
            <h3>Clan Aramasa</h3>

            <p>A l’origine, le clan Aramasa était simplement un clan de moines vivant dans le pays de la foudre. Ils n’avaient pas de grandes ambitions et étaient en paix avec la nature. Ils vivaient sur une île où les orages, tornades et autres catastrophes étaient fréquentes, mais qui leur correspondait.</p>

            <p>Mais lorsque les premiers conflits entre Shinobi commençaient, certains convoitaient les compétences des moines qui avaient réussi à vivre dans un milieu aussi hostile et ils devinrent donc la source de nombreux conflits.</p>

            <p>Au bout d’un moment, las de toujours être au centre de conflits dont ils ne voulaient plus faire part, les moines apprirent à se servir de l’énergie de leurs alentours, et à exploiter la foudre naturelle.</p>

            <p>Les membres du clan ont accepté avec une certaine facilité de rejoindre la construction de Kumo. Le Nidaime Raikage était issu de ce clan.</p>

            <img src=\"https://zupimages.net/up/24/22/8ppl.png\" class=\"symbol_clan\">

            <p>Le symbole des Aramasa représente un papillon, l’insecte qui vit en harmonie avec la nature, mais qui représente aussi la cruauté des éléments.</p>

            <p>Ils sont réputés pour l’utilisation du ranton (tempêtes/orages), qui est extrêmement dévastateur.</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>

            <h3>Clan Chinoike</h3>

            <p>Les Chinoike sont les éternels rivaux du clan Uchiha, ou en tout cas c’est ce qu’ils aiment dire. A l’origine, ce clan habitait Konoha, mais ils ont été chassés suite à des expériences plus ou moins dangereuses.</p>

            <p>Ils sont notamment à l’origine du livre qui se trouve aujourd’hui protégé par les Nara, et qui parlent de Ninjutsu médical. Etant des prodiges en Ninjutsu médical, ils ont ainsi pu faire une liste de toutes les plantes médicinales du village et des techniques importantes. L’iroujutsu, tant que discipline, leur doit beaucoup. Peu savent que les expérimentations de Konoha sur les membres du clan ont permis de faire avancer drastiquement cette pratique.</p>

            <p>Aujourd’hui, les Chinoike sont au centre de Kumo, une fierté qu’ils ne cessent de revendiquer. Le Sandaime Raikage fut un Chinoike.</p>

            <img src=\"https://zupimages.net/up/24/22/kveo.png\" class=\"symbol_clan\">

            <p>Le symbole des Chinoike représente simplement le Ketsuryûgan, qui est leur plus grande fierté et leur plus grande puissance.</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>

            <h3>Clan Katayama</h3>

            <p>Guerriers féroces, les membres du clan Katayama ont longtemps été des électrons libres, qui ne répondaient d’aucuns ordres. Et au fil des ans, le clan s’est taillé une réputation, attirant les regards. Tout comme leurs cousins, les Seijuu, ils descendent de l’ancien clan Hagoromo mais refusent de brider leur faculté naturelle. Ils ont donc continué à user de transformations monstrueuses et de techniques dévastatrices.</p>
            
            <p>Ne respectant que la loi du plus fort, ils ont été stupéfaits par la force du Nidaime Raikage, A, qui a osé les provoquer en duel et a gagné. En retour, il a soumis leur puissance pour que le village de Kumo en bénéficie, évitant qu’ils ne tournent leur regard sur eux.</p>

            <p>Ils ont énormément participé au contrôle des bijûs, Nibi et Hachibi, lors de leurs crises de colère.</p>

            <img src=\"https://zupimages.net/up/24/22/5os6.png\" class=\"symbol_clan\">

            <p>Leur emblème, représentant six cercles à l’instar de leurs cousins, représente cependant des batailles rangées, mettant en avant la stratégie militaire des membres.</p>

            <p>Le clan Katayama absorbe naturellement l’énergie naturelle et parvient à des transformations monstrueuses, incontrôlables.</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>

            <h3>Clan Miraieki</h3>

            <p>A l’origine, il y avait un clan qui était très pieux, et qui contrôlait un très grand temple qui était destiné au dieu de la mort, et de très nombreux prêtres de ce clan parcouraient le continent, prononçant les extrêmes-onctions des guerriers et priant pour les défunts.</p>

            <p>Mais la légende veut qu’un jour, un de ses prêtres rencontre une personne qui ne pouvait pas mourir. Quelqu’un qui, malgré de très nombreuses blessures mortelles à ses organes vitaux, continuait à vivre et à se battre.</p>

            <p>Immédiatement, le clan se vit scindé en deux, entre ceux qui continuaient à prier le dieu de la mort, et ceux qui se mirent à suivre cette nouvelle personne, qui s’était montrée supérieure à la mort même.</p>

            <p>Ceux qui vénèrent Jashin sont ainsi partis de leur côté, tandis que ceux qui vénèrent la mort se mirent alors à conduire des rituels pour en invoquer le pouvoir. 
                <br />Le résultat est que le clan de prêtres, devenu le clan Miraieki, a développé une capacité de vision de l’avenir, plus ou moins claire. Mais en échange de leur proximité avec le dieu de la mort, les membres du clan sont aussi maudits.
            </p>

            <p>Pour certains, cette malédiction n’existe qu’à travers quelques visions qui annoncent la mort de gens, tandis que pour d’autres, cette malédiction existe aussi à travers une vie entourée d’accidents plus ou moins graves.</p>

            <img src=\"https://i33.servimg.com/u/f33/16/35/67/99/japane10.png\" class=\"symbol_clan\">

            <p>Le symbole des Miraieki représente une tortue, symbole de longévité et d’endurance, donc les trois feuilles rappellent le principe de l’horloge et du temps qui passe.</p>

            <p>En effet, le clan possède un dojutsu leur permettant d’entrevoir l’avenir : le shouraigan.</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>
        </div>
    </div>

    <div class=\"gb_visible\" id=\"konoha_clans\">
        <div class=\"gb_title\">Clans de Konoha</div>
        <div class=\"gb_content\">
            <h3>Clan Hyûga</h3>

            <p>Un clan possédant un impact mondial sur le sekai, faisant partie des trois grands clans de Konoha. Ils se battent pour la place de premier utilisateur de dojutsu, mais les deux pupilles sont drastiquement différentes. Le clan Hyûga possède une histoire qui remonte aux origines du monde shinobi, ils sont précurseurs de bien des techniques. Et si on pense souvent aux Senju et aux Uchiha pour la fondation de Konoha, c’est sans compter les participants de la première heure : les Hyûga sont un des trois clans fondateurs.</p>

            <p>Ils donnèrent d’ailleurs naissance au Nidaime Hokage, Hyûga Akihiko, qui régna sur Konoha d’une poigne de fer, venant de la branche principale de son clan. En effet, ils sont divisés en deux : la Soke (principale) et la Bunke (secondaire). Le village de Konoha ne connaît pas encore le fonctionnement exact du clan, qui est un secret bien gardé…</p>

            <p>Aujourd’hui, les Hyûga soutiennent le Sandaime Hokage, ce qui est mal vu par les survivants Senju.</p>

            <img src=\"https://zupimages.net/up/24/22/du60.png\" class=\"symbol_clan\">

            <p>Le symbole du clan a inspiré celui de la volonté du feu. Si le clan possède une organisation stricte et souvent considérée comme inégalitaire, cela ne l’empêche pas de prôner des valeurs qui font l'unanimité dans le village.</p>

            <p>Leur don, le byakugen, qui leur permet d’utiliser le puissant jûken, est envié de tous.</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>

            <h3>Clan Sarutobi</h3>

            <p>Le clan sarutobi, a bien des égards, possède une histoire assez basique : clan sans dons particularités, qui s’est formé pour pallier à leur faiblesse, ils ont appris à en faire une force et maintenant, ont une méthode d’enseignement qui leur permet d’apprendre aisément toute technique.</p>

            <p>Pourtant, le clan, avant la fondation de Konoha, faisait déjà parler de lui. Ils forment depuis des générations formés les shinobis des clans Yamanaka, Nara et Akimichi, dans le cadre du trio Ino-Shika-Cho. Ainsi, ils vivaient déjà dans une grande cohésion, qui leur permettait de survivre à tous les assauts.</p>

            <p>En rejoignant Konoha, les trois clans suivirent aisément cette décision. On peut ainsi dire que ce qu’apporta le plus clan Sarutobi, c’est leur expérience et leur popularité, qui permit d’attirer nombre d’autres clans, comme les Aburame notamment et les Kamizuru, avant qu’ils ne quittent le village.</p>

            <p>Aujourd’hui, le clan regrette que leur chef ne soit pas désigné pour la succession de Hokage, mais compte tirer son épingle du jeu.</p>

            <img src=\"https://zupimages.net/up/24/22/phcl.png\" class=\"symbol_clan\">

            <p>Leur symbole a été choisi après la fondation du village caché de Konoha, et possède une signification importante : les deux sphères du bas représentent les Uchiha et les Senju, celles du haut les Sarutobi, Hyûga et Uzumaki.</p>

            <p>Le clan n’a pas de dons héréditaires, mais est réputé pour avoir une facilité d’apprentissage déconcertante.</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>

            <h3>Clan Senju</h3>

            <p>Leur histoire est directement liée à celle du Rikudô Sennin et à son fils cadet, Ashura. Ils sont ses descendants les plus directs, ceux qui ont reçu “le corps”, qui peuvent évoluer par la détermination. En opposition constante avec leurs cousins du clan Uchiha, leurs bataills ont rythmé le pays du feu, sans jamais qu’un vainqueur clair ne soit décidé.</p>

            <p>Finalement, ce fut sous l’impulsion de Senju Hashirama que le clan prit la décision d’un cessz-le-feu avec les Uchiha. Les deux leaders, composés de Uchiha Madara et Senju Hashirama, fondèrent donc le village caché du feu.</p>

            <p>Le clan Senju, aujourd’hui, est peu répandu. Aucun domaine n’a été dédié aux ninjas de ce clan et pour cause : il n’existe plus en tant qu’institution. Les membres ont été éparpillés au sein des autres clans, servant à lier le village dans une unité qui est aujourd’hui, sa plus grande force.</p>
            
            <p>Mais le descendant de Tobirama Senju, un des seuls à avoir encore son nom, entend bien rétablir la grandeur des siens, quitte à se mettre à dos tous les autres clans.</p>

            <img src=\"https://zupimages.net/up/24/22/tm0k.png\" class=\"symbol_clan\">

            <p>La symbolique du sceau s’est perdue au fil des siècles, mais il reste pourtant le plus réputé du sekai. Le clan possède une force naturelle, et une résistance accrue, mais surtout, se transmet le précieux mokuton.</p>

            <p><strong>Chef de clan :</strong> Voir pré-lien.</p>

            <h3>Clan Uchiha</h3>

            <p>Leur histoire est directement liée à celle du Rikudô Sennin et à son fils aîné, Indra. Ce sont aussi ses descendants les plus directs, mais quant à eux, ils ont hérité des yeux et de l’énergie spirituelle. C’est un clan de guerriers, qui ont une facilité impressionnante dans tout ce qui concerne les arts ninjas. L’évolution de leurs pupilles leur permet de pallier à toute situation, et c’est pour cette raison qu’ils n’ont jamais échoué à n’importe quelle mission, avant la création de Konoha.</p>

            <p>Les Uchiha ont hérité de la police du village, et même si cela fut mal perçu au début, désormais, ils en sont fiers. Leur chef, Uchiha Ieyasu, est aujourd’hui le Sandaime Hokage, sensei des Sannins, et entend bien faire de Konoha le plus puissant village.</p>

            <img src=\"https://zupimages.net/up/24/22/lba8.png\" class=\"symbol_clan\">

            <p>Le symbole du clan est un éventail. Même si personne ne sait pourquoi il a été choisi, certains se battent avec. Ils ont accès au terrible Sharingan, qui est évolutif.</p>

            <p><strong>Chef de clan :</strong> Uchiha Ieyasu (PNJ)</p>

            <h3>Clan Uzumaki</h3>

            <p>Le clan descend du Rikudô Sennin, mais est une branche du clan Senju qui s’est scindée au fil des siècles. Les Uzumaki se sont établis à Uzushio, qu’ils ont fondé, et l’ont défendu grâce à leurs techniques de fuinjutsu qui font partie des plus puissantes.</p>

            <p>Entretenant des liens étroits avec les Senju, la femme du Shodai Hokage, Senju Hashirama, s’appelait Uzumaki Mito et fut la première Jinchûriki de Kyûbi.</p>

            <p>Les Uzumaki ont aujourd’hui hérité d’une place de choix, puisqu’ils sont nommés les nouveaux Senju, car leur lien de sang et leurs facultés proches, font d’eux leurs héritiers les plus proches.</p>

            <p>Si le village d’Uzushio est toujours en plein essor, de nombreux Uzumaki émigre à Konoha, et le Jinchûriki de Kyûbi est toujours un membre du clan.</p>

            <p>Le clan nourrit l’ambition d’obtenir un poste de Hokage, pour, à terme, que le clan entier déménage dans le village du feu.</p>

            <p>Une haine s’est insidieusement installée entre les derniers Senju et Uzumaki, car ils ont pris leur place. Le descendant de Senju Tobirama entend bien se venger.</p>

            <img src=\"https://zupimages.net/up/24/22/049v.png\" class=\"symbol_clan\">

            <p>Le symbole représente un sceau, qui est la particularité du clan Uzumaki.</p>

            <p><strong>Chef de clan :</strong> Place libre, à discuter avec le staff !</p>
        </div>
    </div>

    <div class=\"gb_visible\" id=\"principe\">
        <div class=\"gb_title\">Principe</div>
        <div class=\"gb_content\">
            Texte
        </div>
    </div>

    <div class=\"gb_visible\" id=\"ninjutsu_branch\">
        <div class=\"gb_title\">Branche Ninjutsu</div>
        <div class=\"gb_content\">
            Texte
        </div>
    </div>

    <div class=\"gb_visible\" id=\"taijutsu_branch\">
        <div class=\"gb_title\">Branche Taijutsu</div>
        <div class=\"gb_content\">
            Texte
        </div>
    </div>

    <div class=\"gb_visible\" id=\"genjutsu_branch\">
        <div class=\"gb_title\">Branche Genjutsu</div>
        <div class=\"gb_content\">
            Texte
        </div>
    </div>

    <div class=\"gb_visible\" id=\"kg_branch\">
        <div class=\"gb_title\">Branche Kekkei Genkai & Hiden</div>
        <div class=\"gb_content\">
            Texte
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
