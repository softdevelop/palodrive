/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : palodrive

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2014-05-19 16:57:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for agent_properties
-- ----------------------------
DROP TABLE IF EXISTS `agent_properties`;
CREATE TABLE `agent_properties` (
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
  KEY `fk_agent_properties_users1_idx` (`users_id`),
  CONSTRAINT `fk_agent_properties_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of agent_properties
-- ----------------------------

-- ----------------------------
-- Table structure for game_circles
-- ----------------------------
DROP TABLE IF EXISTS `game_circles`;
CREATE TABLE `game_circles` (
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
  KEY `fk_game_circles_tournaments1_idx` (`tournaments_id`),
  CONSTRAINT `fk_game_circles_limitions_types1` FOREIGN KEY (`limitions_types_id`) REFERENCES `limitions_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_game_circles_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_game_circles_tournaments1` FOREIGN KEY (`tournaments_id`) REFERENCES `tournaments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of game_circles
-- ----------------------------

-- ----------------------------
-- Table structure for horses_park
-- ----------------------------
DROP TABLE IF EXISTS `horses_park`;
CREATE TABLE `horses_park` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of horses_park
-- ----------------------------
INSERT INTO `horses_park` VALUES ('1', 'Arlington Park', 'arlington-park');
INSERT INTO `horses_park` VALUES ('2', 'Belmont Park', 'belmont-park');
INSERT INTO `horses_park` VALUES ('3', 'Calder Race Course', 'calder-race-course');
INSERT INTO `horses_park` VALUES ('4', 'Canterbury Park', 'canterbury-park');
INSERT INTO `horses_park` VALUES ('5', 'Charles Town Races & Slots', 'charles-town-races-slots');
INSERT INTO `horses_park` VALUES ('6', 'Churchill Downs', 'churchill-downs');
INSERT INTO `horses_park` VALUES ('7', 'Delta Downs', 'delta-downs');
INSERT INTO `horses_park` VALUES ('8', 'Emerald Downs', 'emerald-downs');
INSERT INTO `horses_park` VALUES ('9', 'Evangeline Downs', 'evangeline-downs');
INSERT INTO `horses_park` VALUES ('10', 'Fair Meadows', 'fair-meadows');
INSERT INTO `horses_park` VALUES ('11', 'Finger Lakes', 'finger-lakes');
INSERT INTO `horses_park` VALUES ('12', 'Hollywood Park', 'hollywood-park');
INSERT INTO `horses_park` VALUES ('13', 'Lone Star Park', 'lone-star-park');
INSERT INTO `horses_park` VALUES ('14', 'Louisiana Downs', 'louisiana-downs');
INSERT INTO `horses_park` VALUES ('15', 'Penn National', 'penn-national');
INSERT INTO `horses_park` VALUES ('16', 'Pleasanton', 'pleasanton');
INSERT INTO `horses_park` VALUES ('17', 'Prairie Meadows', 'prairie-meadows');
INSERT INTO `horses_park` VALUES ('18', 'Presque Isle Downs', 'presque-isle-downs');
INSERT INTO `horses_park` VALUES ('19', 'Ruidoso Downs', 'ruidoso-downs');
INSERT INTO `horses_park` VALUES ('20', 'Sam Houston Race Park', 'sam-houston-race-park');
INSERT INTO `horses_park` VALUES ('21', 'Sunray Park', 'sunray-park');
INSERT INTO `horses_park` VALUES ('22', 'Woodbine', 'woodbine');
INSERT INTO `horses_park` VALUES ('23', 'Arapahoe Park', 'arapahoe-park');
INSERT INTO `horses_park` VALUES ('24', 'Assiniboia Downs', 'assiniboia-downs');
INSERT INTO `horses_park` VALUES ('25', 'Camarero Race Track', 'camarero-race-track');
INSERT INTO `horses_park` VALUES ('26', 'Fairmount Park', 'fairmount-park');
INSERT INTO `horses_park` VALUES ('27', 'Hastings Racecourse', 'hastings-racecourse');
INSERT INTO `horses_park` VALUES ('28', 'Indiana Downs', 'indiana-downs');
INSERT INTO `horses_park` VALUES ('29', 'Lethbridge', 'lethbridge');
INSERT INTO `horses_park` VALUES ('30', 'Lincoln Race Course', 'lincoln-race-course');
INSERT INTO `horses_park` VALUES ('31', 'Los Alamitos', 'los-alamitos');
INSERT INTO `horses_park` VALUES ('32', 'Marquis Downs', 'marquis-downs');
INSERT INTO `horses_park` VALUES ('33', null, null);

-- ----------------------------
-- Table structure for horses_wager_limit
-- ----------------------------
DROP TABLE IF EXISTS `horses_wager_limit`;
CREATE TABLE `horses_wager_limit` (
  `id` int(11) NOT NULL,
  `wsp` tinyint(4) DEFAULT NULL,
  `exacta` tinyint(4) DEFAULT NULL,
  `trifecta` tinyint(4) DEFAULT NULL,
  `superfecta` tinyint(4) DEFAULT NULL,
  `horses_park_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_horses_wager_type_horses_park1_idx` (`horses_park_id`),
  KEY `fk_horses_wager_type_users1_idx` (`users_id`),
  CONSTRAINT `fk_horses_wager_type_horses_park10` FOREIGN KEY (`horses_park_id`) REFERENCES `horses_park` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_horses_wager_type_users10` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of horses_wager_limit
-- ----------------------------

-- ----------------------------
-- Table structure for horses_wager_type
-- ----------------------------
DROP TABLE IF EXISTS `horses_wager_type`;
CREATE TABLE `horses_wager_type` (
  `id` int(11) NOT NULL,
  `wsp` tinyint(4) DEFAULT NULL,
  `exacta` tinyint(4) DEFAULT NULL,
  `trifecta` tinyint(4) DEFAULT NULL,
  `superfecta` tinyint(4) DEFAULT NULL,
  `horses_park_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_horses_wager_type_horses_park1_idx` (`horses_park_id`),
  KEY `fk_horses_wager_type_users1_idx` (`users_id`),
  CONSTRAINT `fk_horses_wager_type_horses_park1` FOREIGN KEY (`horses_park_id`) REFERENCES `horses_park` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_horses_wager_type_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of horses_wager_type
-- ----------------------------

-- ----------------------------
-- Table structure for limitions_types
-- ----------------------------
DROP TABLE IF EXISTS `limitions_types`;
CREATE TABLE `limitions_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of limitions_types
-- ----------------------------

-- ----------------------------
-- Table structure for sport_books
-- ----------------------------
DROP TABLE IF EXISTS `sport_books`;
CREATE TABLE `sport_books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sport_books
-- ----------------------------
INSERT INTO `sport_books` VALUES ('1', '5Dimes', '5dimes');
INSERT INTO `sport_books` VALUES ('2', 'Pinnacle', 'pinnacle');
INSERT INTO `sport_books` VALUES ('3', 'CRIS', 'cris');
INSERT INTO `sport_books` VALUES ('4', 'Grande', 'grande');
INSERT INTO `sport_books` VALUES ('5', 'BetUS', 'betus');

-- ----------------------------
-- Table structure for tournaments
-- ----------------------------
DROP TABLE IF EXISTS `tournaments`;
CREATE TABLE `tournaments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(200) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `created_date` int(11) DEFAULT NULL,
  `modified_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tournaments
-- ----------------------------
INSERT INTO `tournaments` VALUES ('1', 'nfl', 'NFL   ', null, null);
INSERT INTO `tournaments` VALUES ('2', 'ncaafb', 'NCAAFB', null, null);
INSERT INTO `tournaments` VALUES ('3', 'nba', 'NBA', null, null);
INSERT INTO `tournaments` VALUES ('4', 'nccaam', 'NCAAM', null, null);
INSERT INTO `tournaments` VALUES ('5', 'wnab', 'WNBA', null, null);
INSERT INTO `tournaments` VALUES ('6', 'mlb', 'MLB', null, null);
INSERT INTO `tournaments` VALUES ('7', 'nhl', 'NHL', null, null);
INSERT INTO `tournaments` VALUES ('8', 'all-soccer', 'All Soccer', null, null);
INSERT INTO `tournaments` VALUES ('9', 'ncaabb', 'NCAABB', null, null);
INSERT INTO `tournaments` VALUES ('10', 'mma-boxing', 'MMA / Boxing', null, null);
INSERT INTO `tournaments` VALUES ('11', 'all-golf', 'All Golf', null, null);
INSERT INTO `tournaments` VALUES ('12', 'tennis', 'Tennis', null, null);
INSERT INTO `tournaments` VALUES ('13', 'auto-racing', 'Auto Racing', null, null);
INSERT INTO `tournaments` VALUES ('14', 'arena-football', 'Arena Football', null, null);
INSERT INTO `tournaments` VALUES ('15', 'horses', 'Horses', null, null);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------

-- ----------------------------
-- Table structure for wager_limits
-- ----------------------------
DROP TABLE IF EXISTS `wager_limits`;
CREATE TABLE `wager_limits` (
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
  KEY `fk_wager_limits_tournaments1_idx` (`tournaments_id`),
  CONSTRAINT `fk_wager_limits_wager_types1` FOREIGN KEY (`wager_types_id`) REFERENCES `wager_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_wager_limits_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_wager_limits_tournaments1` FOREIGN KEY (`tournaments_id`) REFERENCES `tournaments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wager_limits
-- ----------------------------

-- ----------------------------
-- Table structure for wager_types
-- ----------------------------
DROP TABLE IF EXISTS `wager_types`;
CREATE TABLE `wager_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `alias` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wager_types
-- ----------------------------

-- ----------------------------
-- Table structure for wager_type_attributes
-- ----------------------------
DROP TABLE IF EXISTS `wager_type_attributes`;
CREATE TABLE `wager_type_attributes` (
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
  KEY `fk_wager_type_attributes_sport_books1_idx` (`sport_books_id`),
  CONSTRAINT `fk_wager_type_attributes_tournaments` FOREIGN KEY (`tournaments_id`) REFERENCES `tournaments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_wager_type_attributes_wager_types1` FOREIGN KEY (`wager_types_id`) REFERENCES `wager_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_wager_type_attributes_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_wager_type_attributes_sport_books1` FOREIGN KEY (`sport_books_id`) REFERENCES `sport_books` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wager_type_attributes
-- ----------------------------
