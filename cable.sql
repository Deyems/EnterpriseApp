-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 06:13 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cable`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '1234', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `airtime`
--

CREATE TABLE `airtime` (
  `id` int(11) NOT NULL,
  `mobilenumber` text NOT NULL,
  `email_add` text NOT NULL,
  `network` text NOT NULL,
  `amount` int(11) NOT NULL,
  `charges` text NOT NULL,
  `status` text NOT NULL,
  `current_logger` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airtime`
--

INSERT INTO `airtime` (`id`, `mobilenumber`, `email_add`, `network`, `amount`, `charges`, `status`, `current_logger`) VALUES
(1, '08190403904', 'adeyemi.sola@gmail.com', 'mtn', 500, '450', 'active', ''),
(2, '07032129292', 'deyems@gmail.com', 'airtel', 600, '540', 'active', ''),
(3, '08139393288', 'boboye@ymail.com', 'mtn', 1000, '900', 'active', ''),
(4, '0121002900', 'thechurch@gmail.com', 'etisalat', 900, '810', 'active', ''),
(5, '08190404930', 'fredadeyemi@yahoo.com', 'glo', 1500, '1350', 'active', ''),
(6, '09022332233', 'abereagba@yahoo.com', 'mtn', 900, '810', 'active', ''),
(7, '09022332233', 'abereagba@yahoo.com', 'mtn', 900, '810', 'active', ''),
(8, '08034848494', 'fred@gmail.com', 'etisalat', 9000, '8100', 'active', ''),
(9, '08034848494', 'fred@gmail.com', 'etisalat', 9000, '8100', 'active', ''),
(10, '08034848494', 'fred@gmail.com', 'etisalat', 9000, '8100', 'active', ''),
(11, '08034848494', 'fred@gmail.com', 'etisalat', 9000, '8100', 'active', ''),
(12, '09033020293', 'kehinde@gmail.com', 'mtn', 780, '702', 'active', ''),
(13, '09033020293', 'kehinde@gmail.com', 'mtn', 780, '702', 'active', ''),
(14, '09033020293', 'kehinde@gmail.com', 'mtn', 780, '702', 'active', ''),
(15, '07059595339', 'adejona74@hotmail.com', 'glo', 450, '405', 'active', ''),
(16, '07059595339', 'adejona74@hotmail.com', 'glo', 450, '405', 'active', ''),
(17, '930r90903', 'asfdkafjdslfjasfk@gml.com', 'etisalat', 900, '810', 'active', ''),
(18, '0128439494', 'mtn@mail.com', 'mtn', 650, '585', 'active', ''),
(19, '0128439494', 'mtn@mail.com', 'mtn', 650, '585', 'active', ''),
(20, '0128439494', 'mtn@mail.com', 'mtn', 650, '585', 'active', ''),
(21, '0128439494', 'mtn@mail.com', 'mtn', 650, '585', 'active', ''),
(22, '4050440303', 'thereabout@yolang.com', 'mtn', 900, '810', 'active', ''),
(23, '07094959697', 'jesuani@heaven.com', 'mtn', 600, '540', 'active', ''),
(24, '07094959697', 'jesuani@heaven.com', 'mtn', 600, '540', 'active', ''),
(25, '07094959697', 'jesuani@heaven.com', 'mtn', 600, '540', 'active', ''),
(26, '08080804488', 'wolimat@gmail.com', 'Starcomms', 1200, '1080', 'active', ''),
(27, '09089494959', 'brait@tok.com', 'Starcomms', 1200, '1080', 'active', ''),
(28, '083820202', 'ymacai@hot.com', 'mtn', 400, '360', 'active', ''),
(29, '083820202', 'ymacai@hot.com', 'mtn', 400, '360', 'active', ''),
(30, '07081812030', 'yclef@gmail.com', 'mtn', 300, '270', 'active', ''),
(31, '07081812030', 'yclef@gmail.com', 'mtn', 300, '270', 'active', ''),
(32, '07081812030', 'yclef@gmail.com', 'mtn', 300, '270', 'active', ''),
(33, '07081812030', 'yclef@gmail.com', 'mtn', 300, '270', 'active', ''),
(34, '07081812030', 'yclef@gmail.com', 'mtn', 300, '270', 'active', ''),
(35, '07081812030', 'yclef@gmail.com', 'mtn', 300, '270', 'active', ''),
(36, '07081812030', 'yclef@gmail.com', 'mtn', 300, '270', 'active', ''),
(37, '07081812030', 'yclef@gmail.com', 'mtn', 300, '270', 'active', ''),
(38, '07081812030', 'yclef@gmail.com', 'mtn', 300, '270', 'active', ''),
(39, '07081812030', 'yclef@gmail.com', 'mtn', 300, '270', 'active', ''),
(40, '07081812030', 'yclef@gmail.com', 'mtn', 300, '270', 'active', ''),
(41, '07081812030', 'yclef@gmail.com', 'mtn', 300, '270', 'active', ''),
(42, '07081812030', 'yclef@gmail.com', 'mtn', 300, '270', 'active', ''),
(43, '081799555943', 'deyemsco@uk.com', 'mtn', 60, '54', 'delivered', ''),
(44, '08202033030', 'boal@ymail.com', 'airtel', 90, '81', 'active', ''),
(45, '08202033030', 'boal@ymail.com', 'airtel', 90, '81', 'active', ''),
(46, '080974837284', 'etisalat@gmail.goat', 'etisalat', 750, '675', 'active', ''),
(47, '07109459382', 'bolu_45@conta.com', 'glo', 600, '540', 'active', ''),
(48, '07730293920', 'theprincemail@hot.coke', 'Starcomms', 120, '108', 'active', ''),
(49, '08028394048', 'adey@ynet.com', 'etisalat', 450, '405', 'active', ''),
(50, '09075890404', 'reacher@rache.com', 'glo', 500, '450', 'active', ''),
(51, '09075890404', 'reacher@rache.com', 'glo', 500, '450', 'active', ''),
(52, '09032134590', 'oduntan@yahoo.com', 'mtn', 8900, '8010', 'delivered', 'fred'),
(53, '08034598734', 'yahoo@gmail.com', 'mtn', 4000, '3600', 'delivered', 'fred'),
(54, '08049392910', 'young@ymail.com', 'airtel', 4200, '3780', 'active', 'fred'),
(55, '070494943949', 'vicotia@hunour.com', 'glo', 9090, '8181', 'active', 'fred'),
(56, '08090897867', 'vicotia@hunour23.com', 'airtel', 80000, '72000', 'active', 'fred'),
(57, '08039293949', 'bolinton@yahoo.com', 'mtn', 300, '270', 'delivered', 'bola'),
(58, '08033445566', 'adeye@est.com', 'airtel', 900, '810', 'active', 'esther'),
(59, '08034959600', 'ade@rocket.com', 'glo', 1300, '1170', 'active', 'esther'),
(60, '090329384933', 'ade@roh.com', 'mtn', 1200, '1140', 'delivered', 'esther'),
(61, '039393993', 'ade@ho.com', 'airtel', 300, '270', 'active', 'esther'),
(62, '0810909898798', 'adeyemi.sola@ymail.com', 'airtel', 800, '720', 'active', 'fred'),
(63, '08022339400', 'adeye@ymail.com', 'mtn', 500, '475', 'delivered', 'haliba'),
(64, '0409090909', 'deyems@co.uk', 'Starcomms', 300, '270', 'active', 'haliba'),
(65, '08044045404', 'hula@hot.com', 'glo', 350, '315', 'active', 'haliba');

-- --------------------------------------------------------

--
-- Table structure for table `bulksms`
--

CREATE TABLE `bulksms` (
  `id` int(11) NOT NULL,
  `sender_id` text NOT NULL,
  `receipients` text NOT NULL,
  `message` text NOT NULL,
  `charges` text NOT NULL,
  `undelivered` text NOT NULL,
  `refund` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulksms`
--

INSERT INTO `bulksms` (`id`, `sender_id`, `receipients`, `message`, `charges`, `undelivered`, `refund`) VALUES
(1, 'boba', '908484845,40040404,709493302,804849392,812030303,915440403,8102020239', 'The maxe is finally going down town but we must go', '110', '23', '54'),
(2, 'boba', '908484845,40040404,709493302,804849392,812030303,915440403,8102020239', 'The maxe is finally going down town but we must go', '110', '23', '54'),
(3, 'iLove', '804940404,90505404,343434345,812930030', 'You failed to comply with the obligation to Accion mfb. Resolve it within 48hrs to avoid\r\nlegal & recovery actions Home & Business location. Be guided. 08085567306', '2.4', '23', '54'),
(4, 'iLove', '804940404,90505404,343434345,812930030', 'You failed to comply with the obligation to Accion mfb. Resolve it within 48hrs to avoid\r\nlegal & recovery actions Home & Business location. Be guided. 08085567306', '2.4', '23', '54'),
(5, 'lola', '905949044,810012820,44040303,9039033,0903430090', 'Moka is lorem super variable to inspire youths and become somebody in life', '1.3', '23', '54'),
(6, 'lola', '905949044,810012820,44040303,9039033,0903430090', 'Moka is lorem super variable to inspire youths and become somebody in life', '1.3', '23', '54'),
(7, 'Sola', '08120020020,08030030030,09010010010', 'Measles is a vague thing, it kills people even faster than HIV', '1.2', '23', '54'),
(8, 'Sola', '08120020020,08030030030,09010010010', 'Measles is a vague thing, it kills people even faster than HIV', '3.6', '23', '54'),
(9, 'Sola', '08120020020,08030030030,09010010010', 'Measles is a vague thing, it kills people even faster than HIV', '3.6', '23', '54'),
(10, 'accion mfb', '08022002200,08190902029,07012904950,09043348484,07090905040,019484938,07084948495', 'What else are you doing in their life if you do not pressure him', '9.8', '23', '54'),
(11, 'Label', '0802233040,0701202940', 'By and by we would be fine', '1.4', '23', '54'),
(12, 'Label', '0802233040,0701202940', 'By and by we would be fine', '1.4', '23', '54'),
(13, 'Label', '0802233040,0701202940', 'By and by we would be fine', '1.4', '23', '54'),
(14, 'Loverain', '07003303303,09098980898,0309998989,059449849,040494940', 'This is to tell you to quit that building!', '4.5', '23', '54'),
(15, 'Seyi', '08020390498,0484849300,039990403,08033838393', 'He is about to start a brand new life', '3.6', '23', '54'),
(16, 'Seyi', '08020390498,0484849300,039990403,08033838393', 'He is about to start a brand new life', '3.6', '23', '54'),
(17, 'Seyi', '08020390498,0484849300,039990403,08033838393', 'He is about to start a brand new life', '3.6', '23', '54'),
(18, 'Seyi', '08020390498,0484849300,039990403,08033838393', 'He is about to start a brand new life', '3.6', '23', '54'),
(19, 'Seyi', '08020390498,0484849300,039990403,08033838393', 'He is about to start a brand new life', '3.6', '23', '54'),
(20, 'Bola', '090808080,9090909090,890900909,8909009090', 'The grace of the lord Jesus Christ and the love of God', '4.8', '23', '54'),
(21, 'Accion mfb', '09087654090,08120908976,07021897645', 'The liner would always give you a edge in your practices BUT please dont give up', '4.8', '23', '54'),
(22, 'accion mfb', '8033063043,\r\n9035278097,\r\n8036845730,\r\n7066875400,\r\n8153279667,\r\n8095249221,\r\n7052980540,\r\n7060843851,\r\n8033207742,\r\n8058337388,\r\n9073557627,\r\n8122838025,\r\n8037193591,\r\n8023049409,\r\n7066284358,\r\n7064205596,\r\n8130986687,\r\n9068971438,\r\n8188887782,\r\n8185576250,\r\n7062646101,\r\n8029518532,\r\n8039207086,\r\n8131362829,\r\n8160956108,\r\n7032999259,\r\n8056152486,\r\n8034737499,\r\n8084443633,\r\n8024302168,\r\n8023904265,\r\n8023990396,\r\n8056670690,\r\n8146693346,\r\n8081743711,\r\n8029323115,\r\n9073361525,\r\n9060747653,\r\n8183030681,\r\n7015986956,\r\n8054047144,\r\n8060407646,\r\n7086740788,\r\n8096741743,\r\n8186404882,\r\n9033080962,\r\n8156934131,\r\n8158580919,\r\n8131393538,\r\n8060648992,\r\n9030222350,\r\n8170638466,\r\n8078287058,\r\n8071207062,\r\n8171505322,\r\n8169991684,\r\n8034119331,\r\n8037051763,\r\n8024874942,\r\n8119978536,\r\n7062383909,\r\n7060408021,\r\n9026580155,\r\n8036508510,\r\n8179151572,\r\n8038559471,\r\n8161874700,\r\n8138826698,\r\n8056431944,\r\n8093680584,\r\n9023232599,\r\n7088339816,\r\n8072939281,\r\n8027890846,\r\n8082661493,\r\n8184855733,\r\n9074475002,\r\n8132728700,\r\n8079665818,\r\n8022118863,\r\n8171603907,\r\n8184709042,\r\n9033635581', 'I wish to let you know that you can now be better', '99.6', '23', '54'),
(23, 'Mathman', '8033063043,\r\n9035278097,\r\n8036845730,\r\n7066875400,\r\n8153279667,\r\n8095249221,\r\n7052980540,\r\n7060843851,\r\n8033207742,\r\n8058337388,\r\n9073557627,\r\n8122838025,\r\n8037193591,\r\n8023049409,\r\n7066284358,\r\n7064205596,\r\n8130986687,\r\n9068971438,\r\n8188887782,\r\n8185576250,\r\n7062646101,\r\n8029518532,\r\n8039207086,\r\n8131362829,\r\n8160956108,\r\n7032999259,\r\n8056152486,\r\n8034737499,\r\n8084443633,\r\n8024302168,\r\n8023904265,\r\n8023990396,\r\n8056670690,\r\n8146693346,\r\n8081743711,\r\n8029323115,\r\n9073361525,\r\n9060747653,\r\n8183030681,\r\n7015986956,\r\n8054047144,\r\n8060407646,\r\n7086740788,\r\n8096741743,\r\n8186404882,\r\n9033080962,\r\n8156934131,\r\n8158580919,\r\n8131393538,\r\n8060648992,\r\n9030222350,\r\n8170638466,\r\n8078287058,\r\n8071207062,\r\n8171505322,\r\n8169991684,\r\n8034119331,\r\n8037051763,\r\n8024874942,\r\n8119978536,\r\n7062383909,\r\n7060408021,\r\n9026580155,\r\n8036508510,\r\n8179151572,\r\n8038559471,\r\n8161874700,\r\n8138826698,\r\n8056431944,\r\n8093680584,\r\n9023232599,\r\n7088339816,\r\n8072939281,\r\n8027890846,\r\n8082661493,\r\n8184855733,\r\n9074475002,\r\n8132728700,\r\n8079665818,\r\n8022118863,\r\n8171603907,\r\n8184709042,\r\n9033635581,\r\n8033063043,\r\n9035278097,\r\n8036845730,\r\n7066875400,\r\n8153279667,\r\n8095249221,\r\n7052980540,\r\n7060843851,\r\n8033207742,\r\n8058337388,\r\n9073557627,\r\n8122838025,\r\n8037193591,\r\n8023049409,\r\n7066284358,\r\n7064205596,\r\n8130986687,\r\n9068971438,\r\n8188887782,\r\n8185576250,\r\n7062646101,\r\n8029518532,\r\n8039207086,\r\n8131362829,\r\n8160956108,\r\n7032999259,\r\n8056152486,\r\n8034737499,\r\n8084443633,\r\n8024302168,\r\n8023904265,\r\n8023990396,\r\n8056670690,\r\n8146693346,\r\n8081743711,\r\n8029323115,\r\n9073361525,\r\n9060747653,\r\n8183030681,\r\n7015986956,\r\n8054047144,\r\n8060407646,\r\n7086740788,\r\n8096741743,\r\n8186404882,\r\n9033080962,\r\n8156934131,\r\n8158580919,\r\n8131393538,\r\n8060648992,\r\n9030222350,\r\n8170638466,\r\n8078287058,\r\n8071207062,\r\n8171505322,\r\n8169991684,\r\n8034119331,\r\n8037051763,\r\n8024874942,\r\n8119978536,\r\n7062383909,\r\n7060408021,\r\n9026580155,\r\n8036508510,\r\n8179151572,\r\n8038559471,\r\n8161874700,\r\n8138826698,\r\n8056431944,\r\n8093680584,\r\n9023232599,\r\n7088339816,\r\n8072939281,\r\n8027890846,\r\n8082661493,\r\n8184855733,\r\n9074475002,\r\n8132728700,\r\n8079665818,\r\n8022118863,\r\n8171603907,\r\n8184709042,\r\n9033635581', 'Will you be a ready action oriented person for indecent exposure But you will do a lot to be a Man of integrity and Sound discernment', '431.6', '23', '54'),
(24, 'Micro fbs', '8033063043,\r\n9035278097,\r\n8036845730,\r\n7066875400,\r\n8153279667,\r\n8095249221,\r\n7052980540,\r\n7060843851,\r\n8033207742,\r\n8058337388,\r\n9073557627,\r\n8122838025,\r\n8037193591,\r\n8023049409,\r\n7066284358,\r\n7064205596,\r\n8130986687,\r\n9068971438,\r\n8188887782,\r\n8185576250,\r\n7062646101,\r\n8029518532,\r\n8039207086,\r\n8131362829,\r\n8160956108,\r\n7032999259,\r\n8056152486,\r\n8034737499,\r\n8084443633,\r\n8024302168,\r\n8023904265,\r\n8023990396,\r\n8056670690,\r\n8146693346,\r\n8081743711,\r\n8029323115,\r\n9073361525,\r\n9060747653,\r\n8183030681,\r\n7015986956,\r\n8054047144,\r\n8060407646,\r\n7086740788,\r\n8096741743,\r\n8186404882,\r\n9033080962,\r\n8156934131,\r\n8158580919,\r\n8131393538,\r\n8060648992,\r\n9030222350,\r\n8170638466,\r\n8078287058,\r\n8071207062,\r\n8171505322,\r\n8169991684,\r\n8034119331,\r\n8037051763,\r\n8024874942,\r\n8119978536,\r\n7062383909,\r\n7060408021,\r\n9026580155,\r\n8036508510,\r\n8179151572,\r\n8038559471,\r\n8161874700,\r\n8138826698,\r\n8056431944,\r\n8093680584,\r\n9023232599,\r\n7088339816,\r\n8072939281,\r\n8027890846,\r\n8082661493,\r\n8184855733,\r\n9074475002,\r\n8132728700,\r\n8079665818,\r\n8022118863,\r\n8171603907,\r\n8184709042,\r\n9033635581,8033063043,\r\n9035278097,\r\n8036845730,\r\n7066875400,\r\n8153279667,\r\n8095249221,\r\n7052980540,\r\n7060843851,\r\n8033207742,\r\n8058337388,\r\n9073557627,\r\n8122838025,\r\n8037193591,\r\n8023049409,\r\n7066284358,\r\n7064205596,\r\n8130986687,\r\n9068971438,\r\n8188887782,\r\n8185576250,\r\n7062646101,\r\n8029518532,\r\n8039207086,\r\n8131362829,\r\n8160956108,\r\n7032999259,\r\n8056152486,\r\n8034737499,\r\n8084443633,\r\n8024302168,\r\n8023904265,\r\n8023990396,\r\n8056670690,\r\n8146693346,\r\n8081743711,\r\n8029323115,\r\n9073361525,\r\n9060747653,\r\n8183030681,\r\n7015986956,\r\n8054047144,\r\n8060407646,\r\n7086740788,\r\n8096741743,\r\n8186404882,\r\n9033080962,\r\n8156934131,\r\n8158580919,\r\n8131393538,\r\n8060648992,\r\n9030222350,\r\n8170638466,\r\n8078287058,\r\n8071207062,\r\n8171505322,\r\n8169991684,\r\n8034119331,\r\n8037051763,\r\n8024874942,\r\n8119978536,\r\n7062383909,\r\n7060408021,\r\n9026580155,\r\n8036508510,\r\n8179151572,\r\n8038559471,\r\n8161874700,\r\n8138826698,\r\n8056431944,\r\n8093680584,\r\n9023232599,\r\n7088339816,\r\n8072939281,\r\n8027890846,\r\n8082661493,\r\n8184855733,\r\n9074475002,\r\n8132728700,\r\n8079665818,\r\n8022118863,\r\n8171603907,\r\n8184709042,\r\n9033635581,8033063043,\r\n9035278097,\r\n8036845730,\r\n7066875400,\r\n8153279667,\r\n8095249221,\r\n7052980540,\r\n7060843851,\r\n8033207742,\r\n8058337388,\r\n9073557627,\r\n8122838025,\r\n8037193591,\r\n8023049409,\r\n7066284358,\r\n7064205596,\r\n8130986687,\r\n9068971438,\r\n8188887782,\r\n8185576250,\r\n7062646101,\r\n8029518532,\r\n8039207086,\r\n8131362829,\r\n8160956108,\r\n7032999259,\r\n8056152486,\r\n8034737499,\r\n8084443633,\r\n8024302168,\r\n8023904265,\r\n8023990396,\r\n8056670690,\r\n8146693346,\r\n8081743711,\r\n8029323115,\r\n9073361525,\r\n9060747653,\r\n8183030681,\r\n7015986956,\r\n8054047144,\r\n8060407646,\r\n7086740788,\r\n8096741743,\r\n8186404882,\r\n9033080962,\r\n8156934131,\r\n8158580919,\r\n8131393538,\r\n8060648992,\r\n9030222350,\r\n8170638466,\r\n8078287058,\r\n8071207062,\r\n8171505322,\r\n8169991684,\r\n8034119331,\r\n8037051763,\r\n8024874942,\r\n8119978536,\r\n7062383909,\r\n7060408021,\r\n9026580155,\r\n8036508510,\r\n8179151572,\r\n8038559471,\r\n8161874700,\r\n8138826698,\r\n8056431944,\r\n8093680584,\r\n9023232599,\r\n7088339816,\r\n8072939281,\r\n8027890846,\r\n8082661493,\r\n8184855733,\r\n9074475002,\r\n8132728700,\r\n8079665818,\r\n8022118863,\r\n8171603907,\r\n8184709042,\r\n9033635581', 'May the Good Lord bless you during this easter with all heavenly blessings', '323.7', '23', '54'),
(25, 'Micro fbs', '8033063043,\r\n9035278097,\r\n8036845730,\r\n7066875400,\r\n8153279667,\r\n8095249221,\r\n7052980540,\r\n7060843851,\r\n8033207742,\r\n8058337388,\r\n9073557627,\r\n8122838025,\r\n8037193591,\r\n8023049409,\r\n7066284358,\r\n7064205596,\r\n8130986687,\r\n9068971438,\r\n8188887782,\r\n8185576250,\r\n7062646101,\r\n8029518532,\r\n8039207086,\r\n8131362829,\r\n8160956108,\r\n7032999259,\r\n8056152486,\r\n8034737499,\r\n8084443633,\r\n8024302168,\r\n8023904265,\r\n8023990396,\r\n8056670690,\r\n8146693346,\r\n8081743711,\r\n8029323115,\r\n9073361525,\r\n9060747653,\r\n8183030681,\r\n7015986956,\r\n8054047144,\r\n8060407646,\r\n7086740788,\r\n8096741743,\r\n8186404882,\r\n9033080962,\r\n8156934131,\r\n8158580919,\r\n8131393538,\r\n8060648992,\r\n9030222350,\r\n8170638466,\r\n8078287058,\r\n8071207062,\r\n8171505322,\r\n8169991684,\r\n8034119331,\r\n8037051763,\r\n8024874942,\r\n8119978536,\r\n7062383909,\r\n7060408021,\r\n9026580155,\r\n8036508510,\r\n8179151572,\r\n8038559471,\r\n8161874700,\r\n8138826698,\r\n8056431944,\r\n8093680584,\r\n9023232599,\r\n7088339816,\r\n8072939281,\r\n8027890846,\r\n8082661493,\r\n8184855733,\r\n9074475002,\r\n8132728700,\r\n8079665818,\r\n8022118863,\r\n8171603907,\r\n8184709042,\r\n9033635581,8033063043,\r\n9035278097,\r\n8036845730,\r\n7066875400,\r\n8153279667,\r\n8095249221,\r\n7052980540,\r\n7060843851,\r\n8033207742,\r\n8058337388,\r\n9073557627,\r\n8122838025,\r\n8037193591,\r\n8023049409,\r\n7066284358,\r\n7064205596,\r\n8130986687,\r\n9068971438,\r\n8188887782,\r\n8185576250,\r\n7062646101,\r\n8029518532,\r\n8039207086,\r\n8131362829,\r\n8160956108,\r\n7032999259,\r\n8056152486,\r\n8034737499,\r\n8084443633,\r\n8024302168,\r\n8023904265,\r\n8023990396,\r\n8056670690,\r\n8146693346,\r\n8081743711,\r\n8029323115,\r\n9073361525,\r\n9060747653,\r\n8183030681,\r\n7015986956,\r\n8054047144,\r\n8060407646,\r\n7086740788,\r\n8096741743,\r\n8186404882,\r\n9033080962,\r\n8156934131,\r\n8158580919,\r\n8131393538,\r\n8060648992,\r\n9030222350,\r\n8170638466,\r\n8078287058,\r\n8071207062,\r\n8171505322,\r\n8169991684,\r\n8034119331,\r\n8037051763,\r\n8024874942,\r\n8119978536,\r\n7062383909,\r\n7060408021,\r\n9026580155,\r\n8036508510,\r\n8179151572,\r\n8038559471,\r\n8161874700,\r\n8138826698,\r\n8056431944,\r\n8093680584,\r\n9023232599,\r\n7088339816,\r\n8072939281,\r\n8027890846,\r\n8082661493,\r\n8184855733,\r\n9074475002,\r\n8132728700,\r\n8079665818,\r\n8022118863,\r\n8171603907,\r\n8184709042,\r\n9033635581,8033063043,\r\n9035278097,\r\n8036845730,\r\n7066875400,\r\n8153279667,\r\n8095249221,\r\n7052980540,\r\n7060843851,\r\n8033207742,\r\n8058337388,\r\n9073557627,\r\n8122838025,\r\n8037193591,\r\n8023049409,\r\n7066284358,\r\n7064205596,\r\n8130986687,\r\n9068971438,\r\n8188887782,\r\n8185576250,\r\n7062646101,\r\n8029518532,\r\n8039207086,\r\n8131362829,\r\n8160956108,\r\n7032999259,\r\n8056152486,\r\n8034737499,\r\n8084443633,\r\n8024302168,\r\n8023904265,\r\n8023990396,\r\n8056670690,\r\n8146693346,\r\n8081743711,\r\n8029323115,\r\n9073361525,\r\n9060747653,\r\n8183030681,\r\n7015986956,\r\n8054047144,\r\n8060407646,\r\n7086740788,\r\n8096741743,\r\n8186404882,\r\n9033080962,\r\n8156934131,\r\n8158580919,\r\n8131393538,\r\n8060648992,\r\n9030222350,\r\n8170638466,\r\n8078287058,\r\n8071207062,\r\n8171505322,\r\n8169991684,\r\n8034119331,\r\n8037051763,\r\n8024874942,\r\n8119978536,\r\n7062383909,\r\n7060408021,\r\n9026580155,\r\n8036508510,\r\n8179151572,\r\n8038559471,\r\n8161874700,\r\n8138826698,\r\n8056431944,\r\n8093680584,\r\n9023232599,\r\n7088339816,\r\n8072939281,\r\n8027890846,\r\n8082661493,\r\n8184855733,\r\n9074475002,\r\n8132728700,\r\n8079665818,\r\n8022118863,\r\n8171603907,\r\n8184709042,\r\n9033635581', 'May the Good Lord bless you during this easter with all heavenly blessings', '323.7', '23', '54'),
(26, 'Easter', '08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039,08090429039', 'Holiday is coming, Holiday is coming, No more teachers bell, no more morning whip, Goodbye scholars goodbye teachers for I am going to enjoy my jolly holiday', '62.1', '23', '54');

-- --------------------------------------------------------

--
-- Table structure for table `controlbtn2`
--

CREATE TABLE `controlbtn2` (
  `id` int(11) NOT NULL,
  `prev` int(11) NOT NULL,
  `next` int(11) NOT NULL,
  `stretch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `controlbtn2`
--

INSERT INTO `controlbtn2` (`id`, `prev`, `next`, `stretch`) VALUES
(1, 0, 5, 7),
(2, 0, 5, 7),
(3, 0, 10, 7),
(4, 0, 10, 7),
(5, 0, 0, 7),
(6, 0, 0, 7),
(7, 0, 0, 7),
(8, 0, 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `services` text NOT NULL,
  `icons` text NOT NULL,
  `alt` text NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `services`, `icons`, `alt`, `size`) VALUES
(1, 'Bulk SMS', 'fa fa-mail-bulk', 'bulksms.php', 'fa-5x'),
(2, 'Airtime', 'fa fa-plug', 'airtime.php', ' fa-5x'),
(3, 'Smile', 'fa fa-smile', 'smile_recharge.php', 'fa-5x'),
(4, 'Data subscription', 'fa fa-share-alt', 'data.php', 'fa-5x'),
(5, 'TV subscription', 'fa fa-location-arrow', 'tv_sub.php', 'fa-5x'),
(6, 'Electricity Bills', 'fa fa-money-bill', 'electric.php', 'fa-5x');

-- --------------------------------------------------------

--
-- Table structure for table `datasub`
--

CREATE TABLE `datasub` (
  `id` int(11) NOT NULL,
  `mobilenumber` text NOT NULL,
  `email_add` text NOT NULL,
  `network` text NOT NULL,
  `amount` int(11) NOT NULL,
  `charges` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datasub`
--

INSERT INTO `datasub` (`id`, `mobilenumber`, `email_add`, `network`, `amount`, `charges`, `status`) VALUES
(1, '07032030940', 'thanos@ymail.com', 'mtn', 500, '450', 'Subscribed'),
(2, '08034959534', 'ahare@gmail.com', 'mtn', 700, '630', 'Subscribed'),
(3, '08022705542', 'janeyade@gmail.com', 'airtel', 3000, '2700', 'Subscribed'),
(4, '09045950495', 'boluajise@yahoo.com', 'glo', 1200, '1080', 'Subscribed'),
(5, '012033409', 'hulabalu@ymail.com', 'starcomms', 5000, '4500', 'Subscribed'),
(6, '09045905690', 'bolinton@yahoo.com', 'glo', 200, '180', 'Subscribed'),
(7, '09045905690', 'bolinton@yahoo.com', 'glo', 200, '180', 'Subscribed'),
(8, '089018992902', 'ade@y.com', 'mtn', 1000, '900', 'Subscribed'),
(9, '0902334949', 'hunter45@ho.com', 'etisalat', 500, '450', 'Subscribed'),
(10, '090754039302', 'deyems@co.uk', 'glo', 900, '810', 'Subscribed'),
(11, '090898989W', 'ahd@hao.co', 'starcomms', 500, '450', 'Subscribed');

-- --------------------------------------------------------

--
-- Table structure for table `electricity`
--

CREATE TABLE `electricity` (
  `id` int(11) NOT NULL,
  `mobile` int(13) NOT NULL,
  `email_add` text NOT NULL,
  `account_no` text NOT NULL,
  `amount` int(255) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electricity`
--

INSERT INTO `electricity` (`id`, `mobile`, `email_add`, `account_no`, `amount`, `status`) VALUES
(1, 2147483647, 'adeyemi.solay@yemi.com', '10203321230', 5000, 'Paid'),
(2, 2147483647, 'adesolly@gmail.com', '102930840', 400, 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `h1` text NOT NULL,
  `links` text NOT NULL,
  `icons` text NOT NULL,
  `alt` text NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `h1`, `links`, `icons`, `alt`, `size`) VALUES
(1, 'Chat Support', '', 'fa fa-male', '', 'fa-6x'),
(2, 'join network', 'facebook', 'fab fa-facebook', 'someurlfacebook.php', 'fa-5x'),
(3, 'join network', 'instagram', 'fab fa-instagram', 'someurlinstagram.php', 'fa-4x'),
(4, 'join network', 'pinterest', 'fab fa-pinterest', 'someurlpinterest.php', 'fa-5x'),
(5, 'join network', 'facebook', 'fab fa-facebook', 'someurlfacebook.php', 'fa-4x'),
(6, 'Support', 'email', '', 'someurlemail.php', ''),
(7, 'Support', 'send a Message', '', 'urlmessage.php', ''),
(8, 'Support', 'Make a direct call', '', '2348179647183', '');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` int(11) NOT NULL,
  `home` text NOT NULL,
  `e-wallet` text NOT NULL,
  `fund_wallet` text NOT NULL,
  `pay_history` text NOT NULL,
  `profile` text NOT NULL,
  `bulksms` text NOT NULL,
  `Airtime` text NOT NULL,
  `smile` text NOT NULL,
  `Data_sub` text NOT NULL,
  `tv_sub` text NOT NULL,
  `electricity` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `home`, `e-wallet`, `fund_wallet`, `pay_history`, `profile`, `bulksms`, `Airtime`, `smile`, `Data_sub`, `tv_sub`, `electricity`) VALUES
(1, 'What we offer', 'Your e-wallet Balance', 'Fund your Wallet Now', 'Payment History', 'Update your Details', 'Send your text right away', 'Recharge your Network', 'Connect your world with your Smile', 'Data Subscription made easy', 'Make your Tv outshine others', 'Pay your electricity bills on the go'),
(2, 'Our Smarter approach to helping you reach your Clients gives us our Uniqueness', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `index_bg_img`
--

CREATE TABLE `index_bg_img` (
  `id` int(11) NOT NULL,
  `img_name` text NOT NULL,
  `img_alt` text NOT NULL,
  `others` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index_bg_img`
--

INSERT INTO `index_bg_img` (`id`, `img_name`, `img_alt`, `others`) VALUES
(1, '5cc9b1036645c.jpeg', 'img_alt', ''),
(2, 'img_2', 'img3_alt', ''),
(3, 'img_2', 'img3_alt', '');

-- --------------------------------------------------------

--
-- Table structure for table `index_footer_flex1`
--

CREATE TABLE `index_footer_flex1` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `texter` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index_footer_flex1`
--

INSERT INTO `index_footer_flex1` (`id`, `title`, `texter`, `link`) VALUES
(1, 'links', 'about us', 'about.php'),
(2, '', 'analytics', 'analytics.php'),
(3, '', 'contact us', 'contact.php'),
(4, '', 'support lines', 'helplines.php');

-- --------------------------------------------------------

--
-- Table structure for table `index_footer_flex2`
--

CREATE TABLE `index_footer_flex2` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index_footer_flex2`
--

INSERT INTO `index_footer_flex2` (`id`, `heading`, `img`) VALUES
(1, 'deyems platform', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `index_footer_right`
--

CREATE TABLE `index_footer_right` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index_footer_right`
--

INSERT INTO `index_footer_right` (`id`, `content`) VALUES
(1, '2019 - 2021 Designed by Deyems +23479647183');

-- --------------------------------------------------------

--
-- Table structure for table `index_footer_social`
--

CREATE TABLE `index_footer_social` (
  `id` int(11) NOT NULL,
  `icon_type` text NOT NULL,
  `icon_size` text NOT NULL,
  `icon_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index_footer_social`
--

INSERT INTO `index_footer_social` (`id`, `icon_type`, `icon_size`, `icon_link`) VALUES
(1, 'fab fa-facebook-f', 'fa-2x', ''),
(2, 'fab fa-twitter', 'fa-2x', ''),
(3, 'fab fa-instagram', 'fa-2x', ''),
(4, 'fab fa-pinterest', 'fa-2x', '');

-- --------------------------------------------------------

--
-- Table structure for table `index_logo`
--

CREATE TABLE `index_logo` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `link` text NOT NULL,
  `alt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index_logo`
--

INSERT INTO `index_logo` (`id`, `images`, `link`, `alt`) VALUES
(1, 'SMS_LOGO.png', '', 'logo');

-- --------------------------------------------------------

--
-- Table structure for table `index_nav`
--

CREATE TABLE `index_nav` (
  `id` int(11) NOT NULL,
  `tex` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index_nav`
--

INSERT INTO `index_nav` (`id`, `tex`, `link`) VALUES
(1, 'home', 'index.php'),
(2, 'Make a Review', 'review.php'),
(3, 'Pricing', 'pricing.php'),
(4, 'Contact', 'contact.php'),
(5, 'Help', 'helpline.php'),
(6, 'Developers API', 'link6'),
(7, 'The Six-Agenda Business Platform', ''),
(8, 'Why Not Consider Us Today.!!!', '');

-- --------------------------------------------------------

--
-- Table structure for table `index_offers`
--

CREATE TABLE `index_offers` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `notes` text NOT NULL,
  `reg_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index_offers`
--

INSERT INTO `index_offers` (`id`, `title`, `notes`, `reg_link`) VALUES
(1, 'bulk sms', 'send bulk sms messages worldwide through the world\'s largest proprietary messaging network. gain bulk messaging service access to 800+ operators in 190+ countries, all covered by geo-redundant data centres, in-house developed technologies and 24/7 international support for your messaging', 'get started'),
(2, 'airtime', 'get your airtime top-up business running in minutes. our platform gives you a complete set of specialised technologies and tools to run a professional airtime recharge sub-company. built with white-labelling in mind, it enables multiple sub-accounts management, price editing and route settings, becoming your go-to brand-customised solution.', 'get started'),
(3, 'data subscription', 'get your sms business running in minutes. our reseller programme gives you a complete set of specialised technologies and tools to run a professional sms business. built with white-labelling in mind, it enables multiple sub-accounts management, price editing and route settings, becoming your go-to brand-customised reselling solution.', 'get started'),
(4, 'smile', 'get your business running in minutes with the network that counts. this platform gives you a complete set of specialised technologies and tools to perform easy data subcription. built with easy user-experience in mind, it enables multiple sub-accounts management and price editing to becoming your go-to brand-customised solution.', 'get started'),
(5, 'tv subscription', 'subscribe for your tv stations through the world\'s largest proprietary subsription platform. gain 5% charges off to access 80+ channels on your gotv cable, all covered by geo-redundant deyems subscription network, in-house developed technologies and 24/7 local and international support for your challenges', 'get started'),
(6, 'electricity bills', 'get your sms business running in minutes. our reseller programme gives you a complete set of specialised technologies and tools to run a professional sms business. built with white-labelling in mind, it enables multiple sub-accounts management, price editing and route settings, becoming your go-to brand-customised reselling solution.', 'get started'),
(7, '', '', 'Airtime Recharge');

-- --------------------------------------------------------

--
-- Table structure for table `index_rollers`
--

CREATE TABLE `index_rollers` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index_rollers`
--

INSERT INTO `index_rollers` (`id`, `title`, `number`) VALUES
(1, 'Years of Existence', 0),
(2, 'Services Rendered', 0),
(3, 'Our Customers', 0);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `f_url` text NOT NULL,
  `alt` text NOT NULL,
  `user_logger` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `f_url`, `alt`, `user_logger`) VALUES
(1, '5ceaffe355f69.png', 'image', 'fred'),
(2, 'profile.png', 'image', 'bola'),
(3, '5cc9b1036645c.jpeg', 'image', 'zainab'),
(4, 'profile.png', 'image', 'esther'),
(5, 'profile.png', 'image', 'seye'),
(6, 'profile.png', 'image', 'bola'),
(7, '5cd0e518bf0fd.png', 'image', 'david'),
(8, 'profile.png', 'image', 'yoga'),
(9, 'profile.png', 'image', 'owo'),
(11, 'profile.png', 'image', 'fredy'),
(39, 'profile.png', 'image', 'horla'),
(40, 'profile.png', 'image', 'haliba'),
(41, 'profile.png', 'image', 'dodo'),
(42, 'profile.png', 'image', 'bola40');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_text` text NOT NULL,
  `menu_alt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_text`, `menu_alt`) VALUES
(1, 'Dashboard', 'index.php'),
(2, 'e-wallet', 'ewallet.php'),
(3, 'Fund Wallet', 'fund.php'),
(4, 'Payment History', 'history.php'),
(5, 'Profile', 'profile.php'),
(6, 'Transactions', 'transactions.php');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `headline` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `headline`, `content`) VALUES
(1, 'HEADLINE NEWS', 'This is a news section but lorem Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos ratione at repellat distinctio sed perferendis, aut dolore, eligendi nobis minus dicta quibusdam placeat vitae officiis ut soluta debitis dolorem voluptatum!'),
(2, 'Dodo is good', 'Butter fetches from magazine'),
(3, 'HEADLINE NEWS', 'This is a news section but lorem Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos ratione at repellat distinctio sed perferendis, aut dolore, eligendi nobis minus dicta quibusdam placeat vitae officiis ut soluta debitis dolorem voluptatum!'),
(4, 'HEADLINE NEWs forum', 'This bot medullla'),
(5, 'HEADLINE NEWS', 'This is a news section but lorem Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos ratione at repellat distinctio sed perferendis, aut dolore, eligendi nobis minus dicta quibusdam!');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `p_date` date NOT NULL,
  `p_time` time NOT NULL,
  `approval` text NOT NULL,
  `user_logger` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `amount`, `p_date`, `p_time`, `approval`, `user_logger`) VALUES
(1, 5000, '0000-00-00', '00:00:00', 'approved', ''),
(2, 4000, '2019-04-27', '11:08:44', 'approved', ''),
(3, 3000, '2019-04-27', '11:09:32', 'approved', ''),
(4, 4000, '2019-04-27', '11:08:44', 'approved', ''),
(5, 8000, '2019-04-29', '01:20:21', 'approved', ''),
(6, 3000, '2019-05-01', '01:33:23', 'approved', 'bola'),
(7, 1200, '2019-05-01', '01:38:30', 'approved', 'bola'),
(8, 2500, '2019-05-01', '01:52:46', 'unapproved', 'fred'),
(9, 3000, '2019-05-01', '04:04:19', 'unapproved', 'fred'),
(10, 9000, '2019-05-01', '03:04:30', 'unapproved', 'dodo'),
(11, 3000, '2019-05-01', '03:51:16', 'approved', 'esther'),
(12, 1200, '2019-05-08', '05:11:38', 'unapproved', 'fred'),
(13, 2000, '2019-05-13', '12:00:33', 'approved', 'yoga'),
(14, -1000, '2019-05-13', '01:27:22', 'unapproved', 'dodo'),
(15, 2000, '2019-05-15', '04:25:03', 'approved', 'haliba'),
(16, 1000, '2019-05-15', '04:41:26', 'approved', 'haliba');

-- --------------------------------------------------------

--
-- Table structure for table `smile`
--

CREATE TABLE `smile` (
  `id` int(11) NOT NULL,
  `mobile` text NOT NULL,
  `email_add` text NOT NULL,
  `smile_id` text NOT NULL,
  `charges` text NOT NULL,
  `amount` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smile`
--

INSERT INTO `smile` (`id`, `mobile`, `email_add`, `smile_id`, `charges`, `amount`, `status`) VALUES
(1, '09023898922', 'keepass@ymail.com', '1010340393032', '1800', 0, 'success'),
(2, '07010112210', 'doublequote@bank.net', '09049059303XY34', '2250', 2500, 'success'),
(3, '09025949393', 'loverboy@yaya.com', '8998393894849339', '4050', 4500, 'success'),
(4, '098980990', 'holm@ko.co', '90390AS9090', '2700', 3000, 'success'),
(5, '09033434343', 'osas@ymail.com', 'JDF9393030', '720', 800, 'success'),
(6, '08034949594', 'tunde@ymail.com', '9090439449400', '900', 1000, 'success');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `service_type` text NOT NULL,
  `charges` text NOT NULL,
  `t_time` time NOT NULL,
  `t_date` date NOT NULL,
  `t_status` text NOT NULL,
  `user_logger` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `service_type`, `charges`, `t_time`, `t_date`, `t_status`, `user_logger`) VALUES
(1, 'bulksms', '1000', '11:28:20', '0000-00-00', '', ''),
(2, 'bulksms', '1000', '11:28:20', '0000-00-00', '', ''),
(3, 'bulksms', '1000', '11:28:20', '0000-00-00', '', ''),
(4, 'bulksms', '1000', '11:28:20', '0000-00-00', '', ''),
(5, 'BulkSMS', '4.5', '11:34:53', '2019-04-26', 'delivered', ''),
(6, 'BulkSMS', '3.6', '11:54:36', '2019-04-26', 'delivered', ''),
(7, 'BulkSMS', '3.6', '11:00:35', '2019-04-26', 'delivered', ''),
(8, '', '', '12:02:00', '2019-04-27', '', ''),
(9, 'BulkSMS', '3.6', '11:02:50', '2019-04-26', 'delivered', ''),
(10, 'Airtime', '54', '11:07:51', '2019-04-26', 'delivered', ''),
(11, 'Airtime', '', '11:10:09', '2019-04-26', 'delivered', ''),
(12, 'Airtime', '81', '11:11:34', '2019-04-26', 'delivered', ''),
(13, 'Airtime', '675', '11:15:16', '2019-04-26', 'delivered', ''),
(14, 'Airtime', '540', '11:17:41', '2019-04-26', 'delivered', ''),
(15, 'Airtime', '108', '11:18:14', '2019-04-26', 'delivered', ''),
(16, 'smile', '1800', '12:27:16', '2019-04-27', 'success', ''),
(17, 'smile', '2250', '12:32:21', '2019-04-27', 'success', ''),
(18, '3G data subscription', '450', '01:00:08', '2019-04-27', 'Subscribed', ''),
(19, 'smile', '4050', '01:01:52', '2019-04-27', 'success', ''),
(20, '3G data subscription', '630', '01:16:59', '2019-04-27', 'Subscribed', ''),
(21, '3G data subscription', '2700', '01:17:35', '2019-04-27', 'Subscribed', ''),
(22, '3G data subscription', '1080', '01:18:11', '2019-04-27', 'Subscribed', ''),
(23, '3G data subscription', '4500', '01:19:51', '2019-04-27', 'Subscribed', ''),
(24, 'GOTV', '1800', '01:59:34', '2019-04-27', 'success', ''),
(25, 'dstv', '3600', '02:03:36', '2019-04-27', 'success', ''),
(26, 'TV Subscription', '3600', '02:13:09', '2019-04-27', 'success', ''),
(27, 'TV Subscription', '6750', '02:14:05', '2019-04-27', 'success', ''),
(28, 'electricity bills', '4750', '02:42:20', '2019-04-27', 'Paid', ''),
(29, 'electricity bills', '4750', '02:43:29', '2019-04-27', 'Paid', ''),
(30, 'Airtime', '405', '05:15:14', '2019-04-29', 'delivered', ''),
(31, 'Airtime', '450', '05:28:35', '2019-04-29', 'delivered', ''),
(32, 'Airtime', '450', '05:30:24', '2019-04-29', 'delivered', ''),
(33, 'Airtime', '8010', '05:32:02', '2019-04-29', 'delivered', ''),
(34, 'Airtime', '3600', '05:34:49', '2019-04-29', 'delivered', ''),
(35, 'Airtime', '3780', '05:39:06', '2019-04-29', 'delivered', ''),
(36, 'Airtime', '8181', '05:41:18', '2019-04-29', 'delivered', ''),
(37, 'Airtime', '72000', '05:59:45', '2019-04-29', 'delivered', 'fred'),
(38, 'BulkSMS', '4.8', '06:09:42', '2019-04-29', 'delivered', 'fred'),
(39, 'Airtime', '270', '01:41:44', '2019-05-01', 'delivered', 'bola'),
(40, '3G data subscription', '180', '01:44:15', '2019-05-01', 'Subscribed', 'bola'),
(41, '3G data subscription', '180', '01:44:17', '2019-05-01', 'Subscribed', 'bola'),
(42, 'electricity bills', '380', '03:39:23', '2019-05-01', 'Paid', 'fred'),
(43, 'BulkSMS', '4.8', '04:07:34', '2019-05-01', 'delivered', 'fred'),
(44, 'BulkSMS', '99.6', '04:19:45', '2019-05-01', 'delivered', 'fred'),
(45, 'BulkSMS', '431.6', '04:22:17', '2019-05-01', 'delivered', 'fred'),
(46, 'BulkSMS', '323.7', '04:35:38', '2019-05-01', 'delivered', 'fred'),
(47, 'BulkSMS', '323.7', '04:38:48', '2019-05-01', 'delivered', 'fred'),
(48, 'Airtime', '810', '03:52:24', '2019-05-01', 'delivered', 'esther'),
(49, 'Airtime', '1170', '04:04:02', '2019-05-01', 'delivered', 'esther'),
(50, 'BulkSMS', '62.1', '04:18:26', '2019-05-01', 'delivered', 'esther'),
(51, 'Airtime', '1140', '04:22:25', '2019-05-01', 'delivered', 'esther'),
(52, 'Airtime', '270', '04:24:45', '2019-05-01', 'delivered', 'esther'),
(53, 'Airtime', '720', '10:55:41', '2019-05-02', 'delivered', 'fred'),
(54, '3G data subscription', '900', '05:13:03', '2019-05-08', 'Subscribed', 'fred'),
(55, '3G data subscription', '450', '12:01:33', '2019-05-13', 'Subscribed', 'yoga'),
(56, '3G data subscription', '810', '12:02:27', '2019-05-13', 'Subscribed', 'yoga'),
(57, 'smile', '2700', '01:26:18', '2019-05-13', 'success', 'dodo'),
(58, 'smile', '720', '01:29:58', '2019-05-13', 'success', 'yoga'),
(59, '3G data subscription', '450', '01:30:57', '2019-05-13', 'Subscribed', 'yoga'),
(60, 'TV Subscription', '630', '01:32:39', '2019-05-13', 'success', 'yoga'),
(61, 'smile', '900', '04:45:51', '2019-05-15', 'success', 'haliba'),
(62, 'Airtime', '475', '05:19:49', '2019-05-15', 'delivered', 'haliba'),
(63, 'Airtime', '270', '05:22:26', '2019-05-15', 'delivered', 'haliba'),
(64, 'Airtime', '315', '05:33:30', '2019-05-15', 'delivered', 'haliba');

-- --------------------------------------------------------

--
-- Table structure for table `tv_sub`
--

CREATE TABLE `tv_sub` (
  `id` int(11) NOT NULL,
  `t_type` text NOT NULL,
  `iuc_number` text NOT NULL,
  `mobile_number` text NOT NULL,
  `amount` int(11) NOT NULL,
  `email_add` text NOT NULL,
  `charges` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tv_sub`
--

INSERT INTO `tv_sub` (`id`, `t_type`, `iuc_number`, `mobile_number`, `amount`, `email_add`, `charges`, `status`) VALUES
(1, 'GOTV', '9090494049505940', '09019093032', 2000, 'yeti@gmail.com', '1800', 'success'),
(2, 'dstv', '010000338400000', '07023049500', 4000, 'hunt@gmail.com', '3600', 'success'),
(3, 'dstv', '010000338400000', '07023049500', 4000, 'hunt@gmail.com', '3600', 'success'),
(4, 'startimes', '1929300000002', '01283339449', 7500, 'hunt@hunt.com', '6750', 'success'),
(5, 'dstv', '90349304930490', '0707893393', 700, 'yaho@home.co', '630', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `passkey` text NOT NULL,
  `c_passkey` text NOT NULL,
  `email` text NOT NULL,
  `c_email` text NOT NULL,
  `contact` text NOT NULL,
  `c_contact` text NOT NULL,
  `status` text NOT NULL,
  `balance` float NOT NULL DEFAULT '0',
  `u_location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `passkey`, `c_passkey`, `email`, `c_email`, `contact`, `c_contact`, `status`, `balance`, `u_location`) VALUES
(1, 'fred', '0101', '0101', 'fredoboy@yahoo.com', 'fredoboy@yahoo.com', '09012312321', '09012312321', 'activated', 1400.6, ''),
(2, 'bola', '1111', '1111', 'bolinton@mail.com', 'bolinton@mail.com', '08120904533', '08120904533', 'deactivated', 0, ''),
(3, 'dayo', '1100', '1100', 'dayohaven@gmail.com', 'dayohaven@gmail.com', '09089809098', '09089809098', 'activated', 0, ''),
(4, 'esther', '1997', '1997', 'esthernee@gmail.com', 'esthernee@gmail.com', '08109877890', '08109877890', 'activated', 2667.9, ''),
(6, 'dodo', '0909', '0909', 'dodo@yahoo.com', 'dodo@yahoo.com', '08109823412', '08109823412', 'activated', 5300, ''),
(8, 'zainab', '1234', '1234', 'zain@cus.com', 'zain@cus.com', '09089789809', '09089789809', 'activated', 0, ''),
(10, 'seye', '1212', '1212', 'seye@mag.com', 'seye@mag.com', '09089980977', '09089980977', 'activated', 0, ''),
(12, 'david', '0000', '0000', 'david@goliath.com', 'david@goliath.com', '09012903221', '09012903221', 'activated', 0, ''),
(13, 'yoga', 'yoga', 'yoga', 'yoga@gmail.com', 'yoga@gmail.com', '08120304050', '08120304050', 'activated', 1280, ''),
(14, 'owo', '3434', '3434', 'owo@dot.com', 'owo@dot.com', '09034949595', '09034949595', 'activated', 0, ''),
(16, 'fredy', '4321', '4321', 'fredy@yahoo.com', 'fredy@yahoo.com', '09087484838', '09087484838', 'activated', 0, ''),
(44, 'horla', '1230', '1230', 'horla@gmail.com', 'horla@gmail.com', '08023223322', '08023223322', 'activated', 0, ''),
(45, 'haliba', '0202', '0202', 'haliba@co.uk', 'haliba@co.uk', '0908989890', '0908989890', 'activated', 1040, ''),
(46, 'bola40', 'bola', 'bola', 'bolanle@ymail.com', 'bolanle@ymail.com', '09090443390', '09090443390', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airtime`
--
ALTER TABLE `airtime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bulksms`
--
ALTER TABLE `bulksms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `controlbtn2`
--
ALTER TABLE `controlbtn2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datasub`
--
ALTER TABLE `datasub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electricity`
--
ALTER TABLE `electricity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_bg_img`
--
ALTER TABLE `index_bg_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_footer_flex1`
--
ALTER TABLE `index_footer_flex1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_footer_flex2`
--
ALTER TABLE `index_footer_flex2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_footer_right`
--
ALTER TABLE `index_footer_right`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_footer_social`
--
ALTER TABLE `index_footer_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_logo`
--
ALTER TABLE `index_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_nav`
--
ALTER TABLE `index_nav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_offers`
--
ALTER TABLE `index_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_rollers`
--
ALTER TABLE `index_rollers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smile`
--
ALTER TABLE `smile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tv_sub`
--
ALTER TABLE `tv_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `airtime`
--
ALTER TABLE `airtime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `bulksms`
--
ALTER TABLE `bulksms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `controlbtn2`
--
ALTER TABLE `controlbtn2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `datasub`
--
ALTER TABLE `datasub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `electricity`
--
ALTER TABLE `electricity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `index_bg_img`
--
ALTER TABLE `index_bg_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `index_footer_flex1`
--
ALTER TABLE `index_footer_flex1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `index_footer_flex2`
--
ALTER TABLE `index_footer_flex2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `index_footer_right`
--
ALTER TABLE `index_footer_right`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `index_footer_social`
--
ALTER TABLE `index_footer_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `index_logo`
--
ALTER TABLE `index_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `index_nav`
--
ALTER TABLE `index_nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `index_offers`
--
ALTER TABLE `index_offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `index_rollers`
--
ALTER TABLE `index_rollers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `smile`
--
ALTER TABLE `smile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tv_sub`
--
ALTER TABLE `tv_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
