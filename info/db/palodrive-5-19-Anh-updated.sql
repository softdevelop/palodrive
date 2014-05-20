-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2014 at 12:31 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `palodrive`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent_properties`
--

CREATE TABLE IF NOT EXISTS `agent_properties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commission_rate` int(11) DEFAULT NULL,
  `red_ figures` int(11) DEFAULT NULL,
  `set_default_sportsbook` tinyint(4) DEFAULT NULL,
  `change_credit_limit` tinyint(4) DEFAULT NULL,
  `have_red` tinyint(4) DEFAULT NULL,
  `player_discount` tinyint(4) DEFAULT NULL,
  `offer_freeplay` tinyint(4) DEFAULT NULL,
  `roll_over_existing_balance` tinyint(4) DEFAULT NULL,
  `shade_players` tinyint(4) DEFAULT NULL,
  `circle_sharp_players` tinyint(4) DEFAULT NULL,
  `change_limits_up_to_masters_settings` tinyint(4) DEFAULT NULL,
  `modify_max_win_up_to_masters_limits` tinyint(4) DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_agent_properties_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `game_circles`
--

CREATE TABLE IF NOT EXISTS `game_circles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spread` int(11) DEFAULT NULL,
  `ml` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `1st_half_spread` int(11) DEFAULT NULL,
  `1st_half_ml` int(11) DEFAULT NULL,
  `1st_half_total` int(11) DEFAULT NULL,
  `limitions_types_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `tournaments_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_game_circles_limitions_types1_idx` (`limitions_types_id`),
  KEY `fk_game_circles_users1_idx` (`users_id`),
  KEY `fk_game_circles_tournaments1_idx` (`tournaments_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `horses_park`
--

CREATE TABLE IF NOT EXISTS `horses_park` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=199 ;

--
-- Dumping data for table `horses_park`
--

INSERT INTO `horses_park` (`id`, `name`, `alias`) VALUES
(1, 'Arlington Park', 'arlington-park'),
(2, 'Belmont Park', 'belmont-park'),
(3, 'Calder Race Course', 'calder-race-course'),
(4, 'Canterbury Park', 'canterbury-park'),
(5, 'Charles Town Races & Slots', 'charles-town-races-slots'),
(6, 'Churchill Downs', 'churchill-downs'),
(7, 'Delta Downs', 'delta-downs'),
(8, 'Emerald Downs', 'emerald-downs'),
(9, 'Evangeline Downs', 'evangeline-downs'),
(10, 'Fair Meadows', 'fair-meadows'),
(11, 'Finger Lakes', 'finger-lakes'),
(12, 'Hollywood Park', 'hollywood-park'),
(13, 'Lone Star Park', 'lone-star-park'),
(14, 'Louisiana Downs', 'louisiana-downs'),
(15, 'Penn National', 'penn-national'),
(16, 'Pleasanton', 'pleasanton'),
(17, 'Prairie Meadows', 'prairie-meadows'),
(18, 'Presque Isle Downs', 'presque-isle-downs'),
(19, 'Ruidoso Downs', 'ruidoso-downs'),
(20, 'Sam Houston Race Park', 'sam-houston-race-park'),
(21, 'Sunray Park', 'sunray-park'),
(22, 'Woodbine', 'woodbine'),
(23, 'Arapahoe Park', 'arapahoe-park'),
(24, 'Assiniboia Downs', 'assiniboia-downs'),
(25, 'Camarero Race Track', 'camarero-race-track'),
(26, 'Fairmount Park', 'fairmount-park'),
(27, 'Hastings Racecourse', 'hastings-racecourse'),
(28, 'Indiana Downs', 'indiana-downs'),
(29, 'Lethbridge', 'lethbridge'),
(30, 'Lincoln Race Course', 'lincoln-race-course'),
(31, 'Los Alamitos', 'los-alamitos'),
(32, 'Marquis Downs', 'marquis-downs'),
(33, 'Monmouth Park', 'monmouth-park'),
(34, 'Mountaineer Casino Racetrack & Resort', 'mountaineer-casino-racetrack-&-resort'),
(35, 'Northlands Park', 'morthlands-park'),
(36, 'Philadelphia Park', NULL),
(37, 'River Downs', NULL),
(38, 'Sandy Downs', NULL),
(39, 'Thistledown', NULL),
(40, 'Chippewa Downs', NULL),
(41, 'Colonial Downs', NULL),
(42, 'Delaware Park', NULL),
(43, 'Grants Pass', NULL),
(44, 'Kamloops', NULL),
(45, 'Pinnacle Race Course', NULL),
(46, 'Suffolk Downs', NULL),
(47, 'Yavapai Downs', NULL),
(48, 'Ajax Downs', NULL),
(49, 'Fort Erie', NULL),
(50, 'Mt. Pleasant Meadows', NULL),
(51, 'Millarville', NULL),
(52, 'Flagstaff', NULL),
(53, 'Grande Prairie', NULL),
(54, 'Gillespie County Fairground', NULL),
(55, 'Minidoka County Fair @ Rupert', NULL),
(56, 'Sunflower', NULL),
(57, 'Hollywood Casino At Charles Town Races', NULL),
(58, 'Ellis Park', NULL),
(59, 'Kin Park', NULL),
(60, 'Sacramento', NULL),
(61, 'Crooked River Roundup', NULL),
(62, 'Special', NULL),
(63, 'Red Mile', NULL),
(64, 'Saratoga', NULL),
(65, 'Del Mar', NULL),
(66, 'Horsemen''s Park', NULL),
(67, 'Great Falls', NULL),
(68, 'Columbus', NULL),
(69, 'Hoosier Park', NULL),
(70, 'Laurel Park', NULL),
(71, 'Oneida County Fair', NULL),
(72, 'Tillamook County Fair', NULL),
(73, 'Ferndale', NULL),
(74, 'Western Mt Fair', NULL),
(75, 'Albuquerque', NULL),
(76, 'Remington Park', NULL),
(77, 'Horsemen''s Atokad Downs', NULL),
(78, 'Golden Gate Fields', NULL),
(79, 'Elko County Fair', NULL),
(80, 'Timonium', NULL),
(81, 'Yellowstone Downs', NULL),
(82, 'Parx Racing At Philadelphia Park', NULL),
(83, 'Retama Park', NULL),
(84, 'Retama Park', NULL),
(85, 'Will Rogers Downs', NULL),
(86, 'Black Foot', NULL),
(87, 'Fairplex Park', NULL),
(88, 'Turfway Park', NULL),
(89, 'Harney County Fair', NULL),
(90, 'Kentucky Downs', NULL),
(91, 'Zia Park', NULL),
(92, 'Fair Grounds', NULL),
(93, 'Fair Play Park', NULL),
(94, 'Melville District Agripar', NULL),
(95, 'Shawan Downs', NULL),
(96, 'Foxfield', NULL),
(97, 'Oak Tree At Hollywood Park', NULL),
(98, 'Hawthorne', NULL),
(99, 'Turf Paradise', NULL),
(100, 'Middleburg', NULL),
(101, 'Portland Meadows', NULL),
(102, 'Fresno', NULL),
(103, 'Keeneland', NULL),
(104, 'Genesee Valley', NULL),
(105, 'Morven Park', NULL),
(106, 'Beulah Park', NULL),
(107, 'Great Meadow', NULL),
(108, 'Far Hills', NULL),
(109, 'Aiken', NULL),
(110, 'Aqueduct', NULL),
(111, 'Montpelier', NULL),
(112, 'Pine Mtn-callaway Garden', NULL),
(113, 'Pennsylvania Hunt Cup', NULL),
(114, 'Camden', NULL),
(115, 'Hialeah Park', NULL),
(116, 'Sunland Park', NULL),
(117, 'Tampa Bay Downs', NULL),
(118, 'Santa Anita Park', NULL),
(119, 'Parx Racing', NULL),
(120, 'Gulfstream Park', NULL),
(121, 'Oaklawn Park', NULL),
(122, 'Rillito', NULL),
(123, 'Fonner Park', NULL),
(124, 'Ocala Training Center', NULL),
(125, 'Pimlico', NULL),
(126, 'Stoneybrook At Five Points', NULL),
(127, 'Atlanta', NULL),
(128, 'Emmett', NULL),
(129, 'Monkton', NULL),
(130, 'Atlantic City', NULL),
(131, 'Mountaineer', NULL),
(132, 'Will Rogers', NULL),
(133, 'Camarero', NULL),
(134, 'Charles Town', NULL),
(135, 'Evangeline', NULL),
(136, 'Calder', NULL),
(137, 'Golden Gate', NULL),
(138, 'Lone Star', NULL),
(139, 'Hastings', NULL),
(140, 'Sam Houston', NULL),
(141, 'Tampa Bay', NULL),
(142, 'Fort Pierre', NULL),
(143, 'Pocatello Downs', NULL),
(144, 'Santa Cruz', NULL),
(145, 'Sun Downs', NULL),
(146, 'Miles City', NULL),
(147, 'Winterthur', NULL),
(148, 'Assiniboia', NULL),
(149, 'Lincoln Fair', NULL),
(150, 'Brown County', NULL),
(151, 'Percy Warner', NULL),
(152, 'Malvern', NULL),
(153, 'Lexington', NULL),
(154, 'Arapahoe', NULL),
(155, 'Fair Hill', NULL),
(156, 'Oregon Livestock', NULL),
(157, 'Jerome Fair', NULL),
(158, 'Stockton', NULL),
(159, 'Gillespie Fairground', NULL),
(160, 'Les Bois Park', NULL),
(161, 'Minidoka Fair', NULL),
(162, 'Crooked River', NULL),
(163, 'Alberta Downs', NULL),
(164, 'Mt. Pleasant', NULL),
(165, 'Oneida Fair', NULL),
(166, 'Tillamook Fair', NULL),
(167, 'Kalispell', NULL),
(168, 'Cassia Fair', NULL),
(169, 'Sweetwater Downs', NULL),
(170, 'White Pine Racing', NULL),
(171, 'Elko Fair', NULL),
(172, 'Yellowstone', NULL),
(173, 'Atokad', NULL),
(174, 'Melville District', NULL),
(175, 'Santa Anita', NULL),
(176, 'Pine Mtn', NULL),
(177, 'Charleston', NULL),
(178, 'Ocala Training Ctr', NULL),
(179, 'Stoneybrook', NULL),
(180, 'Grand National', NULL),
(181, 'Tryon', NULL),
(182, 'Betfair Hollywood Park', NULL),
(183, 'Charlotte', NULL),
(184, 'Glyndon', NULL),
(185, 'Meadowlands', NULL),
(186, 'Mountaineer Casino Racetrack & Resort', NULL),
(187, 'Desert Park', NULL),
(188, 'Eastern Oregon Livestock Show', NULL),
(189, 'Jerome County Fair', NULL),
(190, 'North Dakota Horse Park', NULL),
(191, 'Cassia County Fair', NULL),
(192, 'Barretts Race Meet At Fairplex', NULL),
(193, 'Wyoming Downs', NULL),
(194, 'Arlington', NULL),
(195, 'Santa Cruz County Fair @ Sonoita', NULL),
(196, 'Indiana Grand Race Course', NULL),
(197, 'Belterra Park', NULL),
(198, 'Brown County Fair', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `horses_wager_limit`
--

CREATE TABLE IF NOT EXISTS `horses_wager_limit` (
  `id` int(11) NOT NULL,
  `wsp` tinyint(4) DEFAULT NULL,
  `exacta` tinyint(4) DEFAULT NULL,
  `trifecta` tinyint(4) DEFAULT NULL,
  `superfecta` tinyint(4) DEFAULT NULL,
  `horses_park_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_horses_wager_type_horses_park1_idx` (`horses_park_id`),
  KEY `fk_horses_wager_type_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `horses_wager_type`
--

CREATE TABLE IF NOT EXISTS `horses_wager_type` (
  `id` int(11) NOT NULL,
  `wsp` tinyint(4) DEFAULT NULL,
  `exacta` tinyint(4) DEFAULT NULL,
  `trifecta` tinyint(4) DEFAULT NULL,
  `superfecta` tinyint(4) DEFAULT NULL,
  `horses_park_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_horses_wager_type_horses_park1_idx` (`horses_park_id`),
  KEY `fk_horses_wager_type_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `limitions_types`
--

CREATE TABLE IF NOT EXISTS `limitions_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sport_books`
--

CREATE TABLE IF NOT EXISTS `sport_books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sport_books`
--

INSERT INTO `sport_books` (`id`, `name`, `alias`) VALUES
(1, '5Dimes', '5dimes'),
(2, 'Pinnacle', 'pinnacle'),
(3, 'CRIS', 'cris'),
(4, 'Grande', 'grande'),
(5, 'BetUS', 'betus');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE IF NOT EXISTS `tournaments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(200) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `created_date` int(11) DEFAULT NULL,
  `modified_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`id`, `alias`, `name`, `created_date`, `modified_date`) VALUES
(1, 'nfl', 'NFL   ', NULL, NULL),
(2, 'ncaafb', 'NCAAFB', NULL, NULL),
(3, 'nba', 'NBA', NULL, NULL),
(4, 'nccaam', 'NCAAM', NULL, NULL),
(5, 'wnab', 'WNBA', NULL, NULL),
(6, 'mlb', 'MLB', NULL, NULL),
(7, 'nhl', 'NHL', NULL, NULL),
(8, 'all-soccer', 'All Soccer', NULL, NULL),
(9, 'ncaabb', 'NCAABB', NULL, NULL),
(10, 'mma-boxing', 'MMA / Boxing', NULL, NULL),
(11, 'all-golf', 'All Golf', NULL, NULL),
(12, 'tennis', 'Tennis', NULL, NULL),
(13, 'auto-racing', 'Auto Racing', NULL, NULL),
(14, 'arena-football', 'Arena Football', NULL, NULL),
(15, 'horses', 'Horses', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) DEFAULT NULL,
  `handle_name` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `created_date` int(11) DEFAULT NULL,
  `modified_date` int(11) DEFAULT NULL,
  `parent_id` tinyint(4) DEFAULT NULL,
  `type` tinyint(4) DEFAULT NULL,
  `hash` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wager_limits`
--

CREATE TABLE IF NOT EXISTS `wager_limits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wager_limitscol` varchar(45) DEFAULT NULL,
  `wager_types_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `tournaments_id` int(11) NOT NULL,
  `spread` tinyint(4) DEFAULT NULL,
  `ml` tinyint(4) DEFAULT NULL,
  `total` tinyint(4) DEFAULT NULL,
  `parlay` tinyint(4) DEFAULT NULL,
  `bet` tinyint(4) DEFAULT NULL,
  `teaster` tinyint(4) DEFAULT NULL,
  `future` tinyint(4) DEFAULT NULL,
  `prop` tinyint(4) DEFAULT NULL,
  `wsp` tinyint(4) DEFAULT NULL,
  `exacta` tinyint(4) DEFAULT NULL,
  `trifecta` tinyint(4) DEFAULT NULL,
  `superfecta` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_wager_limits_wager_types1_idx` (`wager_types_id`),
  KEY `fk_wager_limits_users1_idx` (`users_id`),
  KEY `fk_wager_limits_tournaments1_idx` (`tournaments_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wager_types`
--

CREATE TABLE IF NOT EXISTS `wager_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `alias` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `wager_type_attributes`
--

CREATE TABLE IF NOT EXISTS `wager_type_attributes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spread` tinyint(4) DEFAULT '0',
  `ml` tinyint(4) DEFAULT '0',
  `total` tinyint(4) DEFAULT '0',
  `parlay` tinyint(4) DEFAULT '0',
  `bet` tinyint(4) DEFAULT '0',
  `teaser` tinyint(4) DEFAULT '0',
  `future` tinyint(4) DEFAULT '0',
  `prop` tinyint(4) DEFAULT '0',
  `tournaments_id` int(11) NOT NULL,
  `wager_types_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `sport_books_id` int(11) NOT NULL,
  `wsp` tinyint(4) DEFAULT NULL,
  `exacta` tinyint(4) DEFAULT NULL,
  `trifecta` tinyint(4) DEFAULT NULL,
  `superfecta` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_wager_type_attributes_tournaments_idx` (`tournaments_id`),
  KEY `fk_wager_type_attributes_wager_types1_idx` (`wager_types_id`),
  KEY `fk_wager_type_attributes_users1_idx` (`users_id`),
  KEY `fk_wager_type_attributes_sport_books1_idx` (`sport_books_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent_properties`
--
ALTER TABLE `agent_properties`
  ADD CONSTRAINT `fk_agent_properties_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `game_circles`
--
ALTER TABLE `game_circles`
  ADD CONSTRAINT `fk_game_circles_limitions_types1` FOREIGN KEY (`limitions_types_id`) REFERENCES `limitions_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_game_circles_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_game_circles_tournaments1` FOREIGN KEY (`tournaments_id`) REFERENCES `tournaments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `horses_wager_limit`
--
ALTER TABLE `horses_wager_limit`
  ADD CONSTRAINT `fk_horses_wager_type_horses_park10` FOREIGN KEY (`horses_park_id`) REFERENCES `horses_park` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horses_wager_type_users10` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `horses_wager_type`
--
ALTER TABLE `horses_wager_type`
  ADD CONSTRAINT `fk_horses_wager_type_horses_park1` FOREIGN KEY (`horses_park_id`) REFERENCES `horses_park` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horses_wager_type_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wager_limits`
--
ALTER TABLE `wager_limits`
  ADD CONSTRAINT `fk_wager_limits_wager_types1` FOREIGN KEY (`wager_types_id`) REFERENCES `wager_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wager_limits_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wager_limits_tournaments1` FOREIGN KEY (`tournaments_id`) REFERENCES `tournaments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `wager_type_attributes`
--
ALTER TABLE `wager_type_attributes`
  ADD CONSTRAINT `fk_wager_type_attributes_tournaments` FOREIGN KEY (`tournaments_id`) REFERENCES `tournaments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wager_type_attributes_wager_types1` FOREIGN KEY (`wager_types_id`) REFERENCES `wager_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wager_type_attributes_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_wager_type_attributes_sport_books1` FOREIGN KEY (`sport_books_id`) REFERENCES `sport_books` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
