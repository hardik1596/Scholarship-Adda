-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 05:19 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholarship`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `auid` int(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`auid`, `id`, `password`) VALUES
(1, 'rushi', 'rushi');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cid` int(30) NOT NULL,
  `cname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `cname`) VALUES
(1, 'gandhinagar'),
(2, 'Amreli'),
(3, 'Gondal'),
(4, 'Jamnagar'),
(5, 'Bhuj'),
(6, 'Ahemdebad'),
(7, 'Anjar'),
(8, 'Vadodara'),
(9, 'Surat'),
(10, 'junagadh'),
(11, 'porbandar'),
(12, 'Rajkot'),
(13, 'godadhra'),
(14, 'Sanand'),
(15, 'Bavla'),
(16, 'Dholka'),
(17, 'Viramgam'),
(18, 'Anand'),
(19, 'Shojtra'),
(20, 'Danta'),
(21, 'Vav'),
(22, 'Bharuch'),
(23, 'Ankleshwar'),
(24, 'Bhavnagar'),
(25, 'Broda'),
(26, 'Chhota udaipur'),
(27, 'Dahod'),
(28, 'Dehgam'),
(29, 'Kachchh'),
(30, 'Mahesana'),
(31, 'Morbi,'),
(32, ' Upleta'),
(33, 'Dhoraji'),
(34, 'Jetpur'),
(38, 'Himmatnagar'),
(39, 'Chotila'),
(40, 'Bardoli'),
(41, 'Savli'),
(42, 'Valsad'),
(43, 'Vapi '),
(44, 'Broda');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ccid` int(50) NOT NULL,
  `coursename` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `scholarshiplist`
--

CREATE TABLE `scholarshiplist` (
  `suid` int(20) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `eligibility` varchar(200) NOT NULL,
  `benefits` varchar(200) NOT NULL,
  `documents` varchar(200) NOT NULL,
  `apply` varchar(200) NOT NULL,
  `course` varchar(30) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `city` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarshiplist`
--

INSERT INTO `scholarshiplist` (`suid`, `sname`, `eligibility`, `benefits`, `documents`, `apply`, `course`, `branch`, `city`) VALUES
(2, 'Ku aoa ypn aait', 'Ikugu ijcupi gu fiage peulaek ugoragej nojoce mimjutap zenu tukne guun tu hukhu. Labiko pioji wovgu mavadu fog bup muh pavvag bot pivgal cub ripwuf uzicofaz weuw', 'Uva kajavhu goveru egpep ahifoz as kafneog riwfon sipizmi otzo vophu wilelke jed vi divoun cutenetal wes ca. Etto pojgeren tad omu totlifade lo ikko uhgu laef tugrueme keh hebtol. Hodeda doigevi ul ko', 'Ka dovijop dulkorba ze fojzozima anubik bap jargij otzo utgappi ibnakoh wurper vo. Redovawi nifukoju wehzu wuhti gughup gatah gedovtub hez kabef cedok ivuka mocih tiawu badlaluj noh. Aci dar jadpo izo', 'Vuwvefi jizhihahe cirif nac jure ol ni ziacu wotsouvu ze kecehomu ripbaw fekwa powvu zishipup. Revaan didelo hoedmu goj so dopra jebo pizjojna vadmiv pikzituze ovu bovuvul givruak. Anzewpi kagdi asev ', 'gbvh', 'gvygu', 0),
(3, 'Ku aoa ypn aait', 'Ikugu ijcupi gu fiage peulaek ugoragej nojoce mimjutap zenu tukne guun tu hukhu. Labiko pioji wovgu mavadu fog bup muh pavvag bot pivgal cub ripwuf uzicofaz weuw', 'Uva kajavhu goveru egpep ahifoz as kafneog riwfon sipizmi otzo vophu wilelke jed vi divoun cutenetal wes ca. Etto pojgeren tad omu totlifade lo ikko uhgu laef tugrueme keh hebtol. Hodeda doigevi ul ko', 'Ka dovijop dulkorba ze fojzozima anubik bap jargij otzo utgappi ibnakoh wurper vo. Redovawi nifukoju wehzu wuhti gughup gatah gedovtub hez kabef cedok ivuka mocih tiawu badlaluj noh. Aci dar jadpo izo', 'Vuwvefi jizhihahe cirif nac jure ol ni ziacu wotsouvu ze kecehomu ripbaw fekwa powvu zishipup. Revaan didelo hoedmu goj so dopra jebo pizjojna vadmiv pikzituze ovu bovuvul givruak. Anzewpi kagdi asev ', 'drtjhvuy', 'hfhjv', 0),
(4, 'O hRmhaolatt', 'Mi bulhojdo kifhewa wozak mapuni pav fegil umoab ra imije elkah orojotuz ro duwucdak. Vukmidji low res jukukle ade jeemu ameet juppehju ipunanga emejovhed kuajviv epi wi bu lo wa. On hotpoj cazu zefed', 'Eg civa pew alupose efreov ge kame welako ruhweb vadire udumitlel rececje jejiha nuwke nudpetwiw ke zace jup. Div zozunko zahjo zizewmi ogios la nafu litbar vu feowive dutom ene denwugmoc an wis. Ukop', 'Zenurlat tefez gu geamiwi rinsag ropafi wausal emihoga obatiura odinit lajocrun girejsen di karucfo goc tajgak luj. Kesovas wok new mimofoej neca jovgac valfej biphaz nurgaso wuol ko vol rej dabi wigt', 'Hudfot iralaju heejrif tehnolij sohgit gajrehpu debac anoevita ut nosdovo diw mohawzi. Lesmu hatec wo terus nas sog li mu hescir gag zi', 'ce', 'ce', 25),
(5, 'UmaAlatbnooaamn', 'Lovvevu urzowva loru fup amwi taj dijpu betos so cuta nav ogobaz. Hij sodtauku beozwat tiuckod lorof hub soz fuwab poftestep zanobe je lugti. Un ebro feeri setko ehlogug mome ep orubut baza zasasi eve', 'Cenogre wodtuhir cavubo wef ru tu nomageh it bisaniv nawluzsaf bitbo ru. Dip jesroudo tovgibo cumi suhfuhe mafu ne owleffu epkutvug ece otigecna suloob ki. Kogareca no wuda ga hofgogkez lumvelgaj huar', 'Ikeveasi vi davum rat wihooro bu tusimo uwagorot aw wom boc jiipvo jacwo. Niva kedi wepihtub bivasos gelijug solen hini lad cu vivnivmu fa rujno tufis. Gotud zugu sokta', 'Laso tamvab wiag bozocob reutu bed meehgop petje funolen gitjimi farbihre jezajo wijzecwi fueg sar. Heke gicgejuw veij penofora zuview cagoca ezenofog sej wu asa ijemeg nailiti di af ica ma iwu. Ag ve', 'ce', 'ce', 25),
(7, 'MYSY', '          ANYTHING  ', '            ANYTHING', 'ICARD', 'FROM MYSY WEBSITE', 'CE', 'CE', 25),
(8, 'MYSY', '          ANYTHING  ', '            ANYTHING', 'ICARD', 'FROM MYSY WEBSITE', 'CE', 'CE', 25),
(11, 'Aaamsb', 'Mir mi hiljofe jit ifjef vemupma colet foh si zatehpu kov bejomtow ifi dorarsez. Paafu dakafzi voheruka rawluk mi meppeoko orineto kari gu zocizis mogom ru ahutso. Bonvu keca lul jib li nu rep ho arlo', 'Cepeiv femoza japka wodu zincepvi fow mow howut uniocohi ho ki awo pojag dojsumzo va kifitado go. Bepfe hemcom nan jallo lol guewuik moewupow uta hohfuwke lof kuruhobo zu jipevev nisupa. Jiregeamo sus', 'Juowe kulep uc owaza wazaho muf rucaus si kirat oti matun cupes vimkubek gij rooc otilutom ca. Ifkacud akcokub ethebdog jip mirrot alajo ', 'Ipuhji jelan hebhez rimluwfoz cuj ti diz luc sifvadu kugsipbu ce nibizvu lap unhenu. Be turbec fowoef gu punamza deafuz olino mezip mapowba uswa wibzemow apa zufvab por me. Atminzov dos girusav ver du', 'Naa ah faa', 'Gnmhu a ammDKg', 0),
(12, 'OapaapDb\'gay', 'Fa jeczomoz ju attus mulohrim faw hokonom ce ur vawef vi we miwo cuvam. Lopnu ridic epto esihatvid pa pusideze nih sugaase is dakid jalu vip zigifijo uzaf. Ulomasu bofuc ebi hahu megsir ve rigaddo keh', 'Irusu kohitse la buhitomo gosum cewumti cufdevtes we vuc mitvefoj pu nowadovur riz lumeduv. Vu ma duvvur cinil pa aj kudfopki fiaratad ce isueke worhud kokipnet on umenahil wepure avili hu. Wamum ri e', 'Fonpe lawnuk fuihco ej fa zilmem zigi sef kuijuofu eguibti uci ogwe kuw ejaos dabi pev ruzpil. Reklowfep bafjum reekaeg nedim uro mic sa ca lu melpozim vuobediw efi', 'Jup acga ohiiheaho iwulaj neftavis linku mabap iw mitenah dab atigi geh tufro er tibaka za za luoppip. Zoke uteom no kaegus riwfu ope fus ceem use kipofet geicajej iviuli kol fakep erbeh. Kavnemba fop', 'ce', 'ce', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(30) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `city` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `email`, `phone`, `gender`, `postcode`, `dob`, `city`, `course`, `password`, `photo`) VALUES
(1, 'rushi', '', 'atararushi111@gmail.com', '', '', '', '', '', '', '123', '01.jpg'),
(2, 'Hri  p', 'Aa tuulo', 'bav@fothe.cc', 'Gotggtuaaaehau', 'Female', '', '0', '', '', '', ''),
(3, 'Mshlom o k', 'A  aafwtyrtlCan', 'pimzo@jub.bj', 'Gaoaayk  okomy', 'male', '', '1965', '', '', '', ''),
(19, 'Vtha ml\'', 'Oyg\'', 'nevujiv@ge.si', 'Vhaaiyt\'', 'male', '', '1970', '44', 'Nyya', '0Pa$$4uM^t3', ''),
(20, 'RaaiahiypeCt', 'Uauigi', 'uhbupaw@okhozdol.ph', 'Uol poanarvwn', 'other', '', '2005', '17', 'H', 'rushi', ''),
(23, 'rushi', 'atara ', 'voubma@jirjipep.cz', 'Luat', 'male', '', '1975-04-18', '28', 'LA khl', '0Pa$$4uM^t3', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`auid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ccid`);

--
-- Indexes for table `scholarshiplist`
--
ALTER TABLE `scholarshiplist`
  ADD PRIMARY KEY (`suid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `auid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `ccid` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scholarshiplist`
--
ALTER TABLE `scholarshiplist`
  MODIFY `suid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
