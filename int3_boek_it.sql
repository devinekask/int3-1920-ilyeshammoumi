-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 21 jan. 2020 à 17:59
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `int3_boek_it`
--

-- --------------------------------------------------------

--
-- Structure de la table `int3_data`
--

CREATE TABLE `int3_data` (
  `id` int(11) NOT NULL,
  `aanhef` varchar(255) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `land` varchar(255) NOT NULL,
  `woonplaats` varchar(255) NOT NULL,
  `straatnaam` varchar(255) NOT NULL,
  `huisnummer` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefoonnummer` varchar(255) NOT NULL,
  `betaalwijze` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `int3_data`
--

INSERT INTO `int3_data` (`id`, `aanhef`, `voornaam`, `achternaam`, `land`, `woonplaats`, `straatnaam`, `huisnummer`, `email`, `telefoonnummer`, `betaalwijze`) VALUES
(1, 'Dhr', 'Ilyes', 'Hammoumi', 'België', '8540 Deerlijk', 'Vrijeigen', '36', 'ilyeskarate1@gmail.com', '+32488193199', 'paypal'),
(2, '2', 'ilyes', 'hammoumi', '1', 'deerlijk', 'vrijeigen, 36', '888888', 'ilyeskarate1@gmail.com', '+33495116767', '1'),
(3, '2', 'Lisa', 'Vermeersch', '1', '8500 kortrijk', 'veldstraat', '25', 'dhdhddhdh@ddhhdhdhd', '0411nenenene', '1'),
(4, '1', 'fffff', 'fffff', '2', 'ffffff', 'fffff', 'fffff', 'ffffff@fffffff', 'fffff', '1');

-- --------------------------------------------------------

--
-- Structure de la table `int3_orders`
--

CREATE TABLE `int3_orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `int3_products`
--

CREATE TABLE `int3_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `picture1` text NOT NULL,
  `picture2` text NOT NULL,
  `picture3` text NOT NULL,
  `type1` varchar(255) NOT NULL,
  `type2` varchar(255) NOT NULL,
  `collectionbox` tinyint(1) NOT NULL,
  `book` tinyint(1) NOT NULL,
  `humo_product` tinyint(1) NOT NULL,
  `product` tinyint(1) NOT NULL,
  `abonnement` tinyint(1) NOT NULL,
  `abo_maand1` varchar(255) NOT NULL,
  `abo_maand2` varchar(255) NOT NULL,
  `abo_maand3` varchar(255) NOT NULL,
  `abo_pijs1` decimal(10,2) NOT NULL,
  `abo_pijs2` decimal(10,2) NOT NULL,
  `abo_pijs3` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `int3_products`
--

INSERT INTO `int3_products` (`id`, `name`, `description`, `price`, `picture1`, `picture2`, `picture3`, `type1`, `type2`, `collectionbox`, `book`, `humo_product`, `product`, `abonnement`, `abo_maand1`, `abo_maand2`, `abo_maand3`, `abo_pijs1`, `abo_pijs2`, `abo_pijs3`) VALUES
(1, 'The Social Science Fiction Collectie', '\"DE\" boekencollectie van het jaar 2020. The Social Science Fiction Collectie biedt 10 verbluffende boeken met een kritische, ironische of cynische blik op een toekomstige maatschappij. Dit allemaal verpakt in een collector box die u met stijl in uw woning kan plaatsen, exclusief voor onze trouw Humo fans.', '48.95', './assets/books/boekencollectie/boekencollectie.png', '-', '-', '_', '_', 1, 0, 0, 0, 0, '', '', '', '0.00', '0.00', '0.00'),
(2, 'Do Androids Dream About Electronic Sheeps', 'In de toekomst lijdt de wereld onder radioactief stof als restant van World War Terminus, de laatste wereldoorlog. Dieren zijn nagenoeg uitgestorven en het bezit ervan geldt als statussymbool. Veel mensen vluchten naar kolonies op andere planeten en nemen androïden mee als hulp. De ontwikkeling van androïden vordert echter zo goed dat de robots bijna niet meer van mensen zijn te onderscheiden. Het enige verschil is dat de mens in staat is empathie te tonen, in tegenstelling tot de robots. ', '12.99', './assets/books/dadaec/Do_Androids_Dream_About_Electronic_Sheeps_Combo.jpg', './assets/books/dadaec/Do_Androids_Dream_About_Electronic_Sheeps.jpg', './assets/books/dadaec/Do_Androids_Dream_About_Electronic_Sheeps_Cover.jpg', 'Fysiek', 'E-book', 0, 1, 0, 0, 0, '', '', '', '0.00', '0.00', '0.00'),
(3, 'Enders Game', 'De aarde maakt zich op voor de beslissende strijd in de oorlog tegen de kruiperds. Het overleven van de mensheid hangt af van een militair genie dat deze buitenaardse wezens zullen kunnen verslaan. Wie is dat? Ender Wiggin. Hij is briljant, meedogenloos, sluw. Een tactisch brein en stratergische. Maar ook nog maar een kind. Van zijn jeugd wordt abrupt vrijgelaten zodra hij aankomt op het War College. Ender bewijst al snel dat hij een briljante oorlogsstrateeg is. Hij blinkt uit in wargames, maar zal hij de druk en eenzaamheid in het echte gevecht weerstaan? De vraag is: hoe zal Ender presenteren wanneer het er echt toe doet? Het War College is tenslotte maar een spel. Of niet? ', '12.99', './assets/books/enders_game/Enders_Game_Combo.jpg', './assets/books/enders_game/Enders_Game.jpg', './assets/books/enders_game/Enders_Game_Cover.jpg', 'Fysiek', 'E-book', 0, 1, 0, 0, 0, '', '', '', '0.00', '0.00', '0.00'),
(4, 'Fahrenheit 451', 'De nabije toekomst. Televisie heeft het boek verdrongen en zelfreflectie is uitgesloten. Guy Montag is brandweerman; maar in plaats daarvan vuurt hij het licht uit, hij moet. Dus vernietigt hij het meest illegale bezit dat je kunt hebben: boeken. Het dilemma van een tienermeisje en de zelfmoordpoging van zijn vrouw Montags brengen overtuiging aan de wankel: hij begint boeken te verbergen. Toen hij onthulde, moet hij vluchten voor zijn leven.', '12.99', './assets/books/fahrenheit_451/Fahrenheit_451_Combo.jpg', './assets/books/fahrenheit_451/Fahrenheit_451.jpg', './assets/books/fahrenheit_451/Fahrenheit_415_Cover.jpg', 'Fysiek', 'E-book', 0, 1, 0, 0, 0, '', '', '', '0.00', '0.00', '0.00'),
(5, 'I, Robot', 'Door de DRIE WETTEN VAN ROBOTICA op te zetten en te testen, blijven ze het begrip en ontwerp van kunstmatige intelligentie tot op de dag van vandaag vormgeven. Wat gebeurt er wanneer een robot zijn makers begint te ondervragen? Wat zijn de gevolgen van het creëren van een robot met gevoel voor humor? Of het vermogen om te liegen? Hoe vertellen we echt het verschil tussen mens en machine? In I, Robot, beschrijft Asimov de Drie Wetten van Robotica - ontworpen om mensen te beschermen tegen hun robotachtige creaties - en duwt ze tot het uiterste. In navolging van geniale robopsycholoog Dr. Susan Calvin en ingenieurs Powell en Donovan,', '12.99', './assets/books/irobot/Irobot_Combo.jpg', './assets/books/irobot/Irobot.jpg', './assets/books/irobot/Irobot_Cover.jpg', 'Fysiek', 'E-book', 0, 1, 0, 0, 0, '', '', '', '0.00', '0.00', '0.00'),
(6, 'Neuromancer', 'Case was de scherpste datadief in de branche, totdat wraakzuchtige voormalige werknemers zijn zenuwstelsel verlamden. Maar nu werft een nieuwe en zeer mysterieuze werkgever hem voor een laatste kans. Het doel: een ondenkbaar krachtige kunstmatige intelligentie die rond de aarde draait in dienst van de sinistere zakelijke clan van Tessier-Ashpool. Met een dode man op jachtgeweer en Molly, gespiegelde straat-samoerai, om zijn rug te bewaken, begint Case aan een avontuur dat een heel fictief genre hoog in het vaandel draagt.', '12.99', './assets/books/neuromancer/Neuromancer_Combo.jpg', './assets/books/neuromancer/Neuromancer.jpg', './assets/books/neuromancer/Neuromancer_Cover.jpg', 'Fysiek', 'E-book', 0, 1, 0, 0, 0, '', '', '', '0.00', '0.00', '0.00'),
(7, 'Ready Player One', 'In het jaar 2045 is de realiteit een lelijke plek. De enige keer dat Wade Watts zich echt levend voelt, is wanneer hij de OASIS binnenstapt, een enorme virtuele wereld waar de meeste mensen hun dagen doorbrengen. Wanneer de excentrieke maker van de OASIS sterft, laat hij een reeks duivelse puzzels achter, gebaseerd op zijn obsessie met de popcultuur van tientallen jaren geleden. Degene die deze als eerste oplost, zal zijn enorme fortuin erven - en controle over de OASIS zelf.', '12.99', './assets/books/ready_player_one/Ready_Player_One_Combo.jpg', './assets/books/ready_player_one/Ready_Player_One.jpg', './assets/books/ready_player_one/Ready_Player_One_Cover.jpg', 'Fysiek', 'E-book', 0, 1, 0, 0, 0, '', '', '', '0.00', '0.00', '0.00'),
(8, 'Snow Crash', 'Wat kwam er na internet? Betreed de Metaverse - cyberspace thuis voor avatars en software daemons, waar alles en zo ongeveer alles gaat. Nieuw op straat - de hoofdweg van de Metaverse - is Snow Crash, een cyberdrug. Trouble is Snow Crash is ook een computervirus - en nog veel meer. Omdat eenmaal genomen het de persoon achter de avatar infecteert. Sneeuwcrash komt uit in de realiteit. Dat is echt slecht nieuws voor Hiro - freelance hacker en de beste zwaardvechter van de Metaverse (hij schreef de code) - en YT - skateboard kourier, street imp en mondig tienermeisje - omdat de realiteit shitty genoeg was voordat iemand ermee begon te knoeien', '12.99', './assets/books/snow_crash/Snow_Crash_Combo.jpg', './assets/books/snow_crash/Snow_Crash.jpg', './assets/books/snow_crash/Snow_Crash_Cover.jpg', 'Fysiek', 'E-book', 0, 1, 0, 0, 0, '', '', '', '0.00', '0.00', '0.00'),
(9, 'The Handmaid\'s Tale', 'Mijn mama is zo’n sterke vrouw. Ze heeft zoveel ellende meegemaakt. Jaren leeft zij nu al op dezelfde manier, jaren heeft zij mij niet gezien en moeten missen. Toch heeft zij nooit willen opgeven. Zoals velen leeft zij in een heel streng regime maar niets is voor altijd. Ze vindt een faling in het systeem en ontdekt een rebellen groep. Ze sluit zich aan bij de groep en neemt actief deel aan zoveel mogelijk activiteiten. Alleen zo kan zij misschien aan haar lot ontsnappen en op zoek gaan naar haar dochter en echtgenoot. Haar allergrootste probleem is dat de wereld groot is en zij absoluut niet weet waar ze haar zoektocht moet starten.', '12.99', './assets/books/the_handmaids_tale/The_Handmaids_Tale_Combo.jpg', './assets/books/the_handmaids_tale/The_Handmaids_Tale.jpg', './assets/books/the_handmaids_tale/The_Handmaids_Tale_Cover.jpg', 'Fysiek', 'E-book', 0, 1, 0, 0, 0, '', '', '', '0.00', '0.00', '0.00'),
(10, 'The Road', 'Een vader en zijn jonge zoon lopen alleen door verbrand Amerika, langzaam op weg naar de kust. Niets beweegt in het verwoeste landschap behalve de as op de wind. Ze hebben niets anders dan een pistool om zich te verdedigen tegen de mannen die de weg besluipen, de kleren die ze dragen, een kar met opgeschroefd voedsel - en tegen elkaar.', '12.99', './assets/books/the_road/The_Road_Combo.jpg', './assets/books/the_road/The_Road.jpg', './assets/books/the_road/The_Road_Cover.jpg', 'Fysiek', 'E-book', 0, 1, 0, 0, 0, '', '', '', '0.00', '0.00', '0.00'),
(11, 'Wool', 'Binnen leven mannen en vrouwen een gesloten leven vol regels en voorschriften, van geheimen en leugens. Om te leven, moet je de regels volgen. Maar sommigen niet. Dit zijn de gevaarlijke; dit zijn de mensen die durven hopen en dromen, en die anderen met hun optimisme infecteren. Hun straf is eenvoudig en dodelijk. Ze zijn buiten toegestaan. Jules is een van deze mensen. Ze is misschien wel de laatste.\r\n', '12.99', './assets/books/wool/Wool_Combo.jpg', './assets/books/wool/Wool.jpg', './assets/books/wool/Wool_Cover.jpg', 'Fysiek', 'E-book', 0, 1, 0, 0, 0, '', '', '', '0.00', '0.00', '0.00'),
(12, 'Humo agenda 2020', 'Exclusieve Humo agenda voor het jaar 2020 ontworpen in de stijl van de boekencollectie waar je uw belangerijke dagen en evenementen kan noteren.', '16.95', './assets/products/agenda/Agenda_foto1.jpg', './assets/products/agenda/Agenda_foto2.jpg', '-', '', '', 0, 0, 1, 0, 0, '', '', '', '0.00', '0.00', '0.00'),
(13, 'Humo Bladwijzer', 'Exclusieve Humo agenda voor het jaar 2020 ontworpen in de stijl van de boekencollectie waar je uw belangerijke dagen en evenementen kan noteren.', '4.50', './assets/products/bladwijzer/bladwijzer_cover.jpg', './assets/products/bladwijzer/bladwijzer-foto-01.jpg', './assets/products/bladwijzer/bladwijzer-foto-02.jpg', '', '', 0, 0, 1, 0, 0, '', '', '', '0.00', '0.00', '0.00'),
(14, 'Humo Boekensteun ', 'Exclusieve Humo agenda voor het jaar 2020 ontworpen in de stijl van de boekencollectie waar je uw belangerijke dagen en evenementen kan noteren.', '18.50', './assets/products/boekensteun/boekensteun_cover.jpg', './assets/products/boekensteun/boekensteun-foto-1.jpg', './assets/products/boekensteun/boekensteun-foto-2.jpg', '', '', 0, 0, 1, 0, 0, '', '', '', '0.00', '0.00', '0.00'),
(15, 'Mini leeslamp', 'Stoppen met lezen als het licht uitgaat is helemaal niet meer nodig. Bevestig het lichtje op de cover van je boek, richt het uiterst, krachtige ledlampje op je boek en je kan doorlezen tot in de vroege uurtjes.', '9.90', './assets/products/minileeslamp/minileeslamp_cover.jpg', './assets/products/minileeslamp/minileeslamp__blauw.jpg', './assets/products/minileeslamp/minileeslamp__groen.jpg', '-', '-', 0, 0, 0, 1, 0, '', '', '', '0.00', '0.00', '0.00'),
(16, 'Groot vergrootglas', 'Precies wat je van een vergrootglas mag verwachten. De vergroting is afhankelijk van de kijkhoek, je kunt tot 6 keer vergroten, dan is het beeld wat minder scherp (grotere kijkafstand). Een mooie scherpte behaal je bij 2 tot 4 keer vergroten.', '12.50', './assets/products/vergrootglass/vergrootglas_cover.jpg', './assets/products/vergrootglass/vergrootglass1.jpg', './assets/products/vergrootglass/vergrootglass3.jpg', '-', '-', 0, 0, 0, 1, 0, '', '', '', '0.00', '0.00', '0.00'),
(17, 'Leeslichtje retro', 'LED leeslampje retro wit. Dit lampje is makkelijk te bevestigen aan een boek met behulp van een klem, maar kan ook staan door de voet er aan te klikken. De lamp is in hoogte verstelbaar, max. 11 cm. Werkt op 3x AG3 batterij (inclusief).', '18.50', './assets/products/leeslamp_retro/leeslamp_retro_cover.jpg', './assets/products/leeslamp_retro/leeslamp_retro1.jpg', './assets/products/leeslamp_retro/leeslamp_retro3.jpg', '-', '-', 0, 0, 0, 1, 0, '', '', '', '0.00', '0.00', '0.00'),
(18, 'Pro vergrootglas', 'In het voorjaar gaat 8-jarige Kalle een paar weken bij zijn grootvader logeren die alleen in een oud huis woont, midden in het bos. Kalle vindt een vergrootglas en bekijkt daarmee de planten en dieren in de omgeving, waarbij hij veel ontdekkingen doet. Het verhaal is wat omsamenhangend, de vertaling is niet vlekkeloos, maar als kijkboek over de natuur is dit boek zeer geslaagd. ', '7.50', './assets/products/pro_vergrootglas/pro_vergrootglas_cover.jpg', './assets/products/pro_vergrootglas/pro_vergrootglas1.jpg', './assets/products/pro_vergrootglas/pro_vergrootglas3.jpg', '-', '-', 0, 0, 0, 1, 0, '', '', '', '0.00', '0.00', '0.00'),
(19, '12 maanden', '-', '16.50', './assets/products/abonnementen/abonnement__big.png', '-', '-', '-', '-', 0, 0, 0, 0, 1, '12 maanden', '-', '-', '16.50', '0.00', '0.00'),
(20, '24 maanden', '-', '14.85', './assets/products/abonnementen/abonnement__big.png', '-', '-', '-', '-', 0, 0, 0, 0, 1, '-', '24 maanden', '-', '0.00', '14.85', '0.00'),
(21, '36 maanden', '-', '13.20', './assets/products/abonnementen/abonnement__big.png', '-', '-', '-', '-', 0, 0, 0, 0, 1, '-', '-', '36 maanden', '0.00', '0.00', '13.20');

-- --------------------------------------------------------

--
-- Structure de la table `int3_reviews`
--

CREATE TABLE `int3_reviews` (
  `id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `opmerking` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `int3_reviews`
--

INSERT INTO `int3_reviews` (`id`, `score`, `naam`, `opmerking`, `product_id`) VALUES
(1, 5, 'Ilyes Hammoumi', 'Ghataaaaarrrr', 2),
(2, 2, 'gggggggg', 'ggggggggghghghhggh', 12),
(3, 4, 'Test major', 'test test test test test', 2),
(4, 5, 'test 3 test', 'teteteteteteteetetet', 2),
(5, 1, 'test 3 test', 'hehehehehehehe', 2),
(6, 4, 'ilyes Hammoumi', 'niceeee', 14);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `int3_data`
--
ALTER TABLE `int3_data`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `int3_orders`
--
ALTER TABLE `int3_orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `int3_products`
--
ALTER TABLE `int3_products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `int3_reviews`
--
ALTER TABLE `int3_reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `int3_data`
--
ALTER TABLE `int3_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `int3_orders`
--
ALTER TABLE `int3_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `int3_products`
--
ALTER TABLE `int3_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `int3_reviews`
--
ALTER TABLE `int3_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
