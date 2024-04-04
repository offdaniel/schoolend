-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2024 at 11:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolend`
--

-- --------------------------------------------------------

--
-- Table structure for table `gepek`
--

CREATE TABLE `gepek` (
  `id` int(11) NOT NULL,
  `nev` text NOT NULL,
  `kategoria` text NOT NULL,
  `kaukcio` int(11) NOT NULL,
  `berles` int(11) NOT NULL,
  `leiras` text NOT NULL,
  `kep` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `gepek`
--

INSERT INTO `gepek` (`id`, `nev`, `kategoria`, `kaukcio`, `berles`, `leiras`, `kep`) VALUES
(1, 'Benzines Ágdaráló', '3', 80000, 10000, 'Teljesítmeny: 7Le <br>\r\nMax ágvastagság: 70mm <br>\r\nKopási díj: 1000Ft/óra <br>\r\nA gép üzemóra számlálóval van ellátva, kopási díjat az alapján számoljuk fel.<br>', 'agdaralo1.jpg'),
(2, 'Tuskómaró', '3', 120000, 17000, 'Teljesítmény: 15Le <br>\r\nMarás talaj felett: 600mm <br>\r\nMarás talaj alatt: 235mm <br>\r\nÜzemanyag tank: 6,5L <br>\r\nSúlya: 100kg <br>', 'tuskomaro1.jpg'),
(3, 'Krause ProTec gurulóállvány', '4', 150000, 8500, 'Munkamagasság: 8,3m <br>\r\nJárószint magasság: 6,3m<br>\r\nJárólap hossza: 2m<br>\r\nJárólap szélesség: 0,7m<br>\r\nTerheletőség: 200kg/m2<br>', 'allvany.jpg'),
(4, 'Inverteres Aggregátor', '3', 30000, 6500, 'Teljesítmény: 2KW<br>\r\nKimenet: 2x230V<br>\r\nFolyamatos teljesítmény: 230V / 1800W<br>\r\nZajszint: 65-71 dB<br>\r\nÜzemanyag tank: 3,2L<br>\r\nSúly: 20,4kg<br>\r\n', 'agregator.jpg'),
(5, 'Döngölő Béka', '3', 60000, 7500, 'Súly: 70kg<br>\r\nMotor: kétütemű<br>', 'beka.jpg'),
(6, 'Betonvágó', '1', 40000, 6500, 'Korong átmérő: 230mm<br>\r\nVágási mélység: 90mm<br>\r\n', 'betonvago.jpg'),
(7, 'Lapvibrátor', '3', 40000, 8000, 'Súlya: 70kg<br>', 'dongolo.jpg'),
(8, 'Rönkhasító', '1', 80000, 9000, 'Motor: 230V<br>\r\nTeljesítmény: 3000W<br>\r\nRönk max hossza: 550mm<br>\r\nRönk max átmérője: 300mm<br>\r\nMax nyomás: 7tona<br>\r\nSúlya: 98kg<br>\r\n', 'fahasito.jpg'),
(9, 'STIHL Fűkasza', '3', 40000, 10000, '', 'fukasza.jpg'),
(10, 'STIHL Fűnyíró', '2', 40000, 5500, 'Vágási szélesség: 46cm<br>', 'funyiro.jpg'),
(11, 'Fűhenger', '4', 10000, 2000, 'Szélessége: 40cm<br>\r\n', 'henger.jpg'),
(12, 'Fal horonymaró', '1', 80000, 8000, 'Motor: 1900W<br>\r\nVágási mélység: 40mm<br>\r\nVágási szélesség: 35mm<br>', 'horonymaro.jpg'),
(13, 'Rotációs kapa\r\n', '3', 40000, 7500, 'Motor: 5,5Le<br>\r\nMunkaszélesség: 85cm<br>', 'kapagep.jpg'),
(14, 'STIHL Lombfúvó', '3', 40000, 6500, '', 'lombfuvo.jpg'),
(15, 'Husqvarna Söványvágó', '2', 40000, 5500, '', 'ellombvago.jpg'),
(16, 'Földfúró', '3', 40000, 7000, 'Motor: kétütemű<br>\r\nFúrószál átmerő: 100mm/150mm/200mmm<br>', 'talajfuro.jpg'),
(17, 'Husqvarna Magassági ág- sövényvágó', '2', 40000, 7000, 'Gépteljes hossz: 2,70m <br>', 'magasvagok.jpg'),
(18, 'Műtrágyaszóró és Fűmagszóró kocsi', '4', 5000, 2000, 'Tartály térfogata: 20L<br>\r\n', 'magveto.jpg'),
(19, 'Horonyvágó', '1', 20000, 4500, 'Teljesítmény: 2200W<br>\r\nKorong átmérő: 230mm<br>\r\nVágási mélység: 0-60mm<br>', 'makitakorong.jpg'),
(20, 'Honda Gyepszellőztető', '3', 30000, 6000, 'Motor: 4Le<br>\r\nMunka szélesség: 45cm<br>\r\n', 'gyepszeloteto.jpg'),
(21, 'Falcsiszoló zsiráf + porszívó\r\n', '1', 30000, 45000, 'porszívó 4000Ft/napibér<br>', 'zsiraf.jpg'),
(22, 'Lux Gyepszellőztető', '3', 30000, 5000, 'Motor: 2,5Le<br>\r\nMunka szélesség: 40m<br>\r\n', 'bengyepszelozteto.jpg'),
(23, 'BOSCH sövényvágó', '1', 10000, 3500, '', 'maslombvago.jpg'),
(24, 'Metabo ipari porszívó', '2', 40000, 8000, 'Teljesítmény: 1400W<br>\r\nTartály űrtartalma: 50L<br>', 'masporszivo.jpg'),
(25, 'Magasnyomású mosó', '3', 40000, 8500, 'Max nyomás: 190bar<br>\r\n', 'sterimo.jpg'),
(26, 'STIHL fűrész', '3', 50000, 9000, '', 'masikfuresz.jpg'),
(27, 'STIHL fűrész', '2', 50000, 8500, '', 'stihlfuresz.jpg'),
(28, 'Bontó kalapács', '1', 40000, 8000, 'Teljesítmény: 1900W<br>\r\nÜtés energia: 60J<br>\r\nSúlya: 17kg<br>', 'furokalapacs.jpg'),
(29, 'Makita fúrókalapács', '1', 40000, 7000, 'Teljesítmény: 1050W<br>\r\nÜtés energia: 6,2J<br>\r\nFúrási átmérő betonba: 40mm<br>\r\nSzerszám befogás: SDS-Max<br>', 'furo.jpg'),
(30, 'Milwaukee körfűrész', '2', 50000, 5000, 'Max vágási mélység: 55mm<br>', 'kezifuresz.jpg'),
(31, 'Milwaukee porszívó', '2', 40000, 5000, 'Tartály űrtaltalom: 9L<br>\r\n', 'porszivo.jpg'),
(32, 'Husqvarna sövényvágó', '3', 40000, 7500, 'Vágáshossz: 600mm<br>\r\nVágásvastagság: 30mm<br>\r\n', 'bensoveny.jpg'),
(33, 'Honda Szivattyú', '3', 40000, 8000, 'Csatlakozás: 2\"<br>\r\nFolyadék szállítás: 10-600L / perc<br>\r\n', 'szivattyu.jpg'),
(34, 'Betonkeverő', '1', 40000, 5000, 'Motor: 1000W / 230V<br>\r\nKapacitás: 155L<br>\r\n', 'betonkevero.jpg'),
(35, 'Dewalt lézeres szintező\r\n', '2', 20000, 3000, 'Önbeállás +/- 0,3mm/m pontossággal<br>\r\nBeltéri láthatóság: 10m<br>\r\nLézer osztály: 2<br>\r\n', 'dewaltcucc.jpg'),
(36, 'Husqvarna magasnyomású mosó', '1', 30000, 6000, 'Teljesítmény: 230 V/ 1500 W<br>\r\nÜzemi nyomás: 95 bar<br>\r\n', 'kissterimo.jpg'),
(37, 'Polisztirolvágó (hungarocell vágó)', '1', 80000, 6500, 'Teljesítmény: 200W<br>\r\nVágási hosszúság: 1300mm<br>\r\nVágó átmerő: 330mm<br>\r\n', 'poliszter.jpg'),
(38, 'Motoros háti permetező', '3', 40000, 7500, 'Teljesítmény: 30dar<br>\r\nTartály: 16L<br>', 'permetezo.jpg'),
(39, 'Rems press csőprés\r\n', '1', 150000, 8000, 'Pofák: Th16-20-26-32<br>\r\nBérleti díj 1 db tetszőleges préspofával értendő<br>\r\nPréspofákat külön lehet bérelni 1500 Ft/db/nap<br>\r\n', 'csopres.jpg'),
(40, 'Sarokcsiszoló (Nagy Flex)', '1', 15000, 4000, 'Teljesítmény: 2200w Lágyindítású<br>\r\nKorong átmerő: 230mm<br>\r\nFeszültség: 230V<br>', 'csiszolo.jpg'),
(41, 'Gipszkarton és OSB emelő állvány\r\n', '4', 40000, 4000, 'Maximális támogatási kapacitás: 68 kg<br>\r\nEmelési magasság: 335 cm<br>\r\nMinimális emelési magasság: 125cm<br>\r\n', 'gipszkarton.jpg'),
(42, 'Husqvarna aggregátor', '3', 50000, 6500, 'Folyamatos teljesítmény: 2800W<br>\r\nFeszültség: 2x230V<br>\r\nSúly: 49kg<br>\r\nÜzemanyag tank: 14l<br>', 'husaggregator.jpg'),
(43, 'Kärcher Puzzi 10/1 Szőnyeg és kárpittisztító gép\r\n', '1', 25000, 8000, 'Max. felületi teljesítmény: 20 - 25m²/h<br>\r\nLégmennyiség: 54l/s<br>\r\nVákuum: 220 / 22 mbar/kPa<br>\r\nPermetmennyiség: 1l/min<br>\r\nPermetnyomás: 1bar<br>\r\nFriss-/szennyezettvíz-tartály: 10 - 9l<br>\r\nTurbina teljesítménye: 1250W<br>\r\nSzivattyú teljesítménye: 40W<br>\r\nFeszültség: 220 - 240V<br>\r\nFrekvencia: 50 - 60Hz<br>\r\nSúly tartozékok nélkül: 10,7kg<br>\r\nTisztító kapszula díja:	500Ft/db<br>\r\n', 'karpit.jpeg'),
(44, 'Neo elektromos kerámia hősugárzó', '1', 20000, 3500, 'Teljesítmény: 5 kW<br>\r\nLégáramlás: 588 m3 / h<br>\r\nFeszültség 380 - 400 V<br>', 'neo.jpg'),
(45, 'Husqvarna 545RX', '3', 80000, 12000, 'Teljesítmény: 2,9LE<br>\r\nDamilfejel és fűkéssel is<br>', '545.jpg'),
(46, 'Husqvarna benzines önjáró fűnyíró', '3', 40000, 7000, 'Motor: Honda GCV 170 5,5LE <br>\r\nVágási szélesség: 56cm <br>\r\nÖnjáró 3-4,5km/h között állítható <br>\r\nVágási magasság 25-75mm között állítható <br>\r\n', 'onjaro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategoria`
--

CREATE TABLE `kategoria` (
  `id` int(11) NOT NULL,
  `kategoria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- Dumping data for table `kategoria`
--

INSERT INTO `kategoria` (`id`, `kategoria`) VALUES
(1, 'elektromos'),
(2, 'akkumlátoros'),
(3, 'benzines'),
(4, ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gepek`
--
ALTER TABLE `gepek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoria`
--
ALTER TABLE `kategoria`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
