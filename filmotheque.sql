-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 28, 2023 at 12:32 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmotheque`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `movie_name` text NOT NULL,
  `summary` text NOT NULL,
  `director` varchar(64) NOT NULL,
  `actor_1` varchar(64) NOT NULL,
  `actor_2` varchar(64) DEFAULT NULL,
  `actor_3` varchar(64) DEFAULT NULL,
  `duration` varchar(64) NOT NULL,
  `creation_date` varchar(11) NOT NULL,
  `kind` varchar(64) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `summary`, `director`, `actor_1`, `actor_2`, `actor_3`, `duration`, `creation_date`, `kind`, `image`) VALUES
(25, 'Le Bon, la Brute et le Truand', 'Pendant la Guerre de Sécession, Tuco et Joe se lancent à la recherche d\'un coffre contenant 200 000 dollars en pièces d\'or volés à l\'armée sudiste. Ayant des indices complémentaires sur la cache, chacun a besoin de l\'autre. Mais un troisième homme entre dans la course : Setenza, un tueur qui ne recule devant rien pour parvenir à ses fins.\r\n', 'Sergio Leone', 'Clint Eastwood', 'Lee Van Cleef', 'Rada Rassimov', '2:51', '1968', 'Western', '1999016903680043f972b5a4401f72e451c64c0f8044763d.jpg'),
(26, 'Le Parrain', 'En 1945, à New York, les Corleone sont une des cinq familles de la mafia. Don Vito Corleone, \"parrain\" de cette famille, marie sa fille à un bookmaker. Sollozzo, \" parrain \" de la famille Tattaglia, propose à Don Vito une association dans le trafic de drogue, mais celui-ci refuse. Sonny, un de ses fils, y est quant à lui favorable. Afin de traiter avec Sonny, Sollozzo tente de faire tuer Don Vito, mais celui-ci en réchappe. Michael, le frère cadet de Sonny, recherche alors les commanditaires de l\'attentat et tue Sollozzo et le chef de la police, en représailles. Michael part alors en Sicile, où il épouse Apollonia, mais celle-ci est assassinée à sa place. De retour à New York, Michael épouse Kay Adams et se prépare à devenir le successeur de son père...', 'Francis Ford Coppola', 'Marlon Brando', 'Al Pacino', 'James Caan', '2:50', '1972', 'Crime/Drame', '824531690368185b9cf2f74c688507e93fe64c0f8b9660cf.jpg'),
(27, 'Usual Suspects', 'Une légende du crime contraint cinq malfrats à aller s\'acquitter d\'une tâche très périlleuse. Ceux qui survivent pourront se partager un butin de 91 millions de dollars.', 'Bryan Singer', 'Kevin Spacey', 'Benicio Del Toro', 'Stephen Baldwin', '1:42', '1995', 'Thriller/Drame', '55514169036827551f8580c2f4a3cd1000d64c0f9135deb2.jpeg'),
(28, 'Il était une fois dans l\'Ouest', 'Alors qu\'il prépare une fête pour sa femme, Bet McBain est tué avec ses trois enfants. Jill McBain hérite alors des terres de son mari, terres que convoite Morton, le commanditaire du crime (celles-ci ont de la valeur maintenant que le chemin de fer doit y passer). Mais les soupçons se portent sur un aventurier, Cheyenne...', 'Sergio Leone', 'Charles Bronson', 'Henry Fonda', 'Claudia Cardinale', '2:46', '1969', 'Western', '17181690368379159c4317a6b61f024e7964c0f97b1a94f.jpg'),
(29, 'Parasite', 'Toute la famille de Ki-taek est au chômage. Elle s’intéresse particulièrement au train de vie de la richissime famille Park. Mais un incident se produit et les 2 familles se retrouvent mêlées, sans le savoir, à une bien étrange histoire…', 'Bong Joon-ho', 'Song Kang-ho', 'Lee Seon-gyoon', 'Jo Yeo-jeong', '2:15', '2020', 'Drame', '17681690368459c3c03ed0a0ec542203b964c0f9cbf0977.jpg'),
(30, 'Les Affranchis', 'Depuis sa plus tendre enfance, Henry Hill, né d\'un père irlandais et d\'une mère sicilienne, veut devenir gangster et appartenir à la Mafia. Adolescent dans les années cinquante, il commence par travailler pour le compte de Paul Cicero et voue une grande admiration pour Jimmy Conway, qui a fait du détournement de camions sa grande spécialité. Lucide et ambitieux, il contribue au casse des entrepôts de l\'aéroport d\'Idlewild et épouse Karen, une jeune Juive qu\'il trompe régulièrement. Mais son implication dans le trafic de drogue le fera plonger...', 'Martin Scorsese', 'Robert De Niro', 'Ray Liotta', 'Joe Pesci', '2:20', '2008', 'Thriller/Drame', '3915616903685418039f3195ac59c11902064c0fa1d94b4f.jpg'),
(31, 'Apocalypse now', 'L\'état-major américain confie au jeune capitaine Willard une mission secrète : éliminer le colonel Kurtz, qui s\'est constitué, au-delà de la frontière cambodgienne, un royaume personnel sur lequel il règne par la violence et la terreur.', 'Francis Ford Coppola', 'Marlon Brando', 'Harrison Ford', 'Dennis Hopper', '2:33', '1979', 'Drame/Guerre', '49611169049586314666023b727a1488aac64c2eb7764194.jpg'),
(32, 'Shining', 'Jack Torrance, gardien d\'un hôtel fermé l\'hiver, sa femme et son fils Danny s\'apprêtent à vivre de longs mois de solitude. Danny, qui possède un don de médium, le \"Shining\", est effrayé à l\'idée d\'habiter ce lieu, théâtre marqué par de terribles évènements passés...', 'Stanley Kubrick', 'Jack Nicholson', 'Danny Lloyd', 'Shelley Duvall', '2:00', '1980', 'Thriller', '7178216903687569741912be053818dab4664c0faf41afd6.jpg'),
(33, 'Le Tombeau des lucioles', 'Japon, été 1945. Après le bombardement de Kobé, Seita, un adolescent de quatorze ans et sa petite soeur de quatre ans, Setsuko, orphelins, vont s\'installer chez leur tante à quelques dizaines de kilomètres de chez eux. Celle-ci leur fait comprendre qu\'ils sont une gêne pour la famille et doivent mériter leur riz quotidien. Seita décide de partir avec sa petite soeur. Ils se réfugient dans un bunker désaffecté en pleine campagne et vivent des jours heureux illuminés par la présence de milliers de lucioles. Mais bientôt la nourriture commence cruellement à manquer.', 'Isao Takahata', 'Tsutomu Tatsumi', 'Ayano Shiraishi', 'Yoshiko Shinohara', '1:25', '1996', 'Drame', '913551690368869dffacb6bd0af856b192164c0fb65ec732.jpg'),
(34, 'Pulp Fiction', 'Pulp Fiction est une triple histoire de truands dont les destins finissent par se croiser. Le film décrit l\'odyssée sanglante et burlesque de petits malfrats dans la jungle d\'Hollywood. Deux tueurs à gages à la langue bien pendue, un dangereux gangster marié à une camée, un boxeur roublard, des prêteurs sur gages sadiques, un caïd élégant et dévoué, un dealer bon mari et deux tourtereaux à la gâchette facile...', 'Quentin Tarantino', 'John Travolta', 'Samuel L Jackson', 'Bruce Willis', '2:28', '1994', 'Thriller', '59718169036896298039332051d304b618164c0fbc2a4d8a.jpg'),
(35, 'Elephant Man', 'Londres, 1884. Le chirurgien Frederick Treves découvre un homme complètement défiguré et difforme, devenu une attraction de foire. John Merrick, \" le monstre \", doit son nom de Elephant Man au terrible accident que subit sa mère. Alors enceinte de quelques mois, elle est renversée par un éléphant. Impressionné par de telles difformités, le Dr. Treves achète Merrick, l\'arrachant ainsi à la violence de son propriétaire, et à l\'humiliation quotidienne d\'être mis en spectacle. Le chirurgien pense alors que \" le monstre \" est un idiot congénital. Il découvre rapidement en Merrick un homme meurtri, intelligent et doté d\'une grande sensibilité.', 'David Lynch', 'John Hurt', 'Anthony Hopkins', 'Anne Bancroft', '2:04', '1980', 'Drame', '9847316903690704b65f08c9c3a9b9404ab64c0fc2eea5ce.jpg'),
(36, 'Alien - Le 8e passager', '2122. Le Nostromo, vaisseau de commerce, fait route vers la Terre avec à son bord un équipage de sept personnes en hibernation et une cargaison de minerais. Il interrompt soudain sa course suite à la réception d\'un mystérieux message provenant d\'une planète inexplorée. Réveillé par l\'ordinateur de bord, l\'équipage se rend sur place et découvre les restes d\'un gigantesque vaisseau extraterrestre dont le seul passager semble être mort dans d\'étranges circonstances...', 'Ridley Scott', 'Sigourney Weaver', 'Tom Skerritt', 'Veronica Cartwright', '1:51', '1979', 'Thriller', '465211690495823cb6ec8050ab6f35dfae464c2eb4f4835b.jpg'),
(37, 'Casino', 'Dans les annees soixante-dix à Las Vegas, Ace Rothstein dirige d\'une main de fer l\'hôtel-casino Tangiers, financé en sous-main par le puissant syndicat des camionneurs. Le Tangiers est l\'un des casinos les plus prospères de la ville et Ace est devenu le grand manitou de Las Vegas, secondé par son ami d\'enfance, Nicky Santoro. Impitoyable avec les tricheurs, Rothstein se laisse un jour séduire par une virtuose de l\'arnaque d\'une insolente beauté, Ginger McKenna. Amoureux, il lui ouvre les porte de son paradis et l\'épouse. Ses ennuis commencent alors.', 'Martin Scorsese', 'Robert De Niro', 'Sharon Stone', 'Joe Pesci', '2:58', '1995', 'Drame', '30401690369297ebb7ed5272b92d1d55d364c0fd116d036.jpg'),
(38, 'Retour vers le futur', '1985. Le jeune Marty McFly mène une existence anonyme auprès de sa petite amie Jennifer, seulement troublée par sa famille en crise et un proviseur qui serait ravi de l\'expulser du lycée. Ami de l\'excentrique professeur Emmett Brown, il l\'accompagne un soir tester sa nouvelle expérience : le voyage dans le temps via une DeLorean modifiée. La démonstration tourne mal : des trafiquants d\'armes débarquent et assassinent le scientifique. Marty se réfugie dans la voiture et se retrouve transporté en 1955. Là, il empêche malgré lui la rencontre de ses parents, et doit tout faire pour les remettre ensemble, sous peine de ne pouvoir exister...', 'Robert Zemeckis', 'Michael J Fox', 'Christopher Llyod', 'Lea Thompson', '1:56', '1985', 'Comédie', '9646516903694090576ce2290829d527cfe64c0fd819991d.jpg'),
(39, 'The Truman Show', 'Truman Burbank mène une vie calme et heureuse. Il habite dans un petit pavillon propret de la radieuse station balnéaire de Seahaven. Il part tous les matins à son bureau d\'agent d\'assurances dont il ressort huit heures plus tard pour regagner son foyer, savourer le confort de son habitat modèle, la bonne humeur inaltérable et le sourire mécanique de sa femme, Meryl. Mais parfois, Truman étouffe sous tant de bonheur et la nuit l\'angoisse le submerge. Il se sent de plus en plus étranger, comme si son entourage jouait un rôle. Pis encore, il se sent observé.', 'Peter Weir', 'Jim Carrey', 'Ed Harris', 'Laura Linney', '1:43', '1998', 'Drame/Comédie', '367941690369723eb7ef724a878fbf0c19164c0febba77af.jpg'),
(40, 'Full Metal Jacket', 'Pendant la guerre du Vietnam, la préparation et l\'entrainement d\'un groupe de jeunes marines, jusqu\'au terrible baptême du feu et la sanglante offensive du Tet à Hue, en 1968.', 'Stanley Kubrick', 'Matthew Modine', 'Vincent D\'Onofrio', 'Dorian Harewood', '1:52', '1987', 'Drame', '5955616903698895a1e5ee862606726a44b64c0ff61e7486.jpg'),
(41, 'Le Silence des agneaux', 'Un psychopathe connu sous le nom de Buffalo Bill sème la terreur dans le Middle West en kidnappant et en assassinant de jeunes femmes. Clarice Starling, une jeune agent du FBI, est chargée d\'interroger l\'ex-psychiatre Hannibal Lecter. Psychopathe redoutablement intelligent et porté sur le cannibalisme, Lecter est capable de lui fournir des informations concernant Buffalo Bill ainsi que son portrait psychologique. Mais il n\'accepte de l\'aider qu\'en échange d\'informations sur la vie privée de la jeune femme. Entre eux s\'établit un lien de fascination et de répulsion.', 'Jonathan Demme', 'Anthony Hopkins', 'Jodie Foster', 'Lawrence A Bonney', '1:58', '1991', 'Thriller/Drame', '6206616903699843dd46a970cffca03c03264c0ffc06ed3a.jpg'),
(42, 'La Planète des singes', 'Égaré dans l\'espace-temps, un engin spatial américain s\'écrase en 3978 sur une planète inconnue. Les astronautes Taylor, Landon et Dodge découvrent que les hommes primitifs de cette planète mystérieuse sont placés sous le joug de singes très évolués.', 'Franklin J. Schaffner', 'Charlton Heston', 'Roddy McDowall', 'Kim Hunter', '1:50', '1968', 'Science Fiction/Drame', '4539716903700840e9e5d2022221cd5e9ef64c100247309d.jpg'),
(43, 'La Ligne Verte', '', 'Frank Darabont', 'Tom Hanks', 'Michael Clarke Duncan', 'David Morse', '3:08', '1999', '', '1903116904958920a63149ec56d36f78ae864c2eb94aaaf4.jpg'),
(44, 'La haine', 'Abdel Ichah, seize ans est entre la vie et la mort, passé à tabac par un inspecteur de police lors d\'un interrogatoire. \r\nUne émeute oppose les jeunes d\'une cité HLM aux forces de l\'ordre. Pour trois d\'entre eux, ces heures vont marquer un tournant dans leur vie...', 'Mathieu Kassovitz', 'Vincent Cassel', 'Hubert Koundé', 'Saïd Taghmaoui', '1:35', '1995', 'Drame', '23391169049588282be52cc268df6e6704c64c2eb8ac1ff8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
