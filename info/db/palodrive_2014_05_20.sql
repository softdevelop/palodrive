/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : palodrive

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2014-05-20 15:41:17
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
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=utf8;

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
INSERT INTO `horses_park` VALUES ('33', 'Monmouth Park', 'monmouth-park');
INSERT INTO `horses_park` VALUES ('34', 'Mountaineer Casino Racetrack & Resort', 'mountaineer-casino-racetrack-&-resort');
INSERT INTO `horses_park` VALUES ('35', 'Northlands Park', 'morthlands-park');
INSERT INTO `horses_park` VALUES ('36', 'Philadelphia Park', null);
INSERT INTO `horses_park` VALUES ('37', 'River Downs', null);
INSERT INTO `horses_park` VALUES ('38', 'Sandy Downs', null);
INSERT INTO `horses_park` VALUES ('39', 'Thistledown', null);
INSERT INTO `horses_park` VALUES ('40', 'Chippewa Downs', null);
INSERT INTO `horses_park` VALUES ('41', 'Colonial Downs', null);
INSERT INTO `horses_park` VALUES ('42', 'Delaware Park', null);
INSERT INTO `horses_park` VALUES ('43', 'Grants Pass', null);
INSERT INTO `horses_park` VALUES ('44', 'Kamloops', null);
INSERT INTO `horses_park` VALUES ('45', 'Pinnacle Race Course', null);
INSERT INTO `horses_park` VALUES ('46', 'Suffolk Downs', null);
INSERT INTO `horses_park` VALUES ('47', 'Yavapai Downs', null);
INSERT INTO `horses_park` VALUES ('48', 'Ajax Downs', null);
INSERT INTO `horses_park` VALUES ('49', 'Fort Erie', null);
INSERT INTO `horses_park` VALUES ('50', 'Mt. Pleasant Meadows', null);
INSERT INTO `horses_park` VALUES ('51', 'Millarville', null);
INSERT INTO `horses_park` VALUES ('52', 'Flagstaff', null);
INSERT INTO `horses_park` VALUES ('53', 'Grande Prairie', null);
INSERT INTO `horses_park` VALUES ('54', 'Gillespie County Fairground', null);
INSERT INTO `horses_park` VALUES ('55', 'Minidoka County Fair @ Rupert', null);
INSERT INTO `horses_park` VALUES ('56', 'Sunflower', null);
INSERT INTO `horses_park` VALUES ('57', 'Hollywood Casino At Charles Town Races', null);
INSERT INTO `horses_park` VALUES ('58', 'Ellis Park', null);
INSERT INTO `horses_park` VALUES ('59', 'Kin Park', null);
INSERT INTO `horses_park` VALUES ('60', 'Sacramento', null);
INSERT INTO `horses_park` VALUES ('61', 'Crooked River Roundup', null);
INSERT INTO `horses_park` VALUES ('62', 'Special', null);
INSERT INTO `horses_park` VALUES ('63', 'Red Mile', null);
INSERT INTO `horses_park` VALUES ('64', 'Saratoga', null);
INSERT INTO `horses_park` VALUES ('65', 'Del Mar', null);
INSERT INTO `horses_park` VALUES ('66', 'Horsemen\'s Park', null);
INSERT INTO `horses_park` VALUES ('67', 'Great Falls', null);
INSERT INTO `horses_park` VALUES ('68', 'Columbus', null);
INSERT INTO `horses_park` VALUES ('69', 'Hoosier Park', null);
INSERT INTO `horses_park` VALUES ('70', 'Laurel Park', null);
INSERT INTO `horses_park` VALUES ('71', 'Oneida County Fair', null);
INSERT INTO `horses_park` VALUES ('72', 'Tillamook County Fair', null);
INSERT INTO `horses_park` VALUES ('73', 'Ferndale', null);
INSERT INTO `horses_park` VALUES ('74', 'Western Mt Fair', null);
INSERT INTO `horses_park` VALUES ('75', 'Albuquerque', null);
INSERT INTO `horses_park` VALUES ('76', 'Remington Park', null);
INSERT INTO `horses_park` VALUES ('77', 'Horsemen\'s Atokad Downs', null);
INSERT INTO `horses_park` VALUES ('78', 'Golden Gate Fields', null);
INSERT INTO `horses_park` VALUES ('79', 'Elko County Fair', null);
INSERT INTO `horses_park` VALUES ('80', 'Timonium', null);
INSERT INTO `horses_park` VALUES ('81', 'Yellowstone Downs', null);
INSERT INTO `horses_park` VALUES ('82', 'Parx Racing At Philadelphia Park', null);
INSERT INTO `horses_park` VALUES ('83', 'Retama Park', null);
INSERT INTO `horses_park` VALUES ('84', 'Retama Park', null);
INSERT INTO `horses_park` VALUES ('85', 'Will Rogers Downs', null);
INSERT INTO `horses_park` VALUES ('86', 'Black Foot', null);
INSERT INTO `horses_park` VALUES ('87', 'Fairplex Park', null);
INSERT INTO `horses_park` VALUES ('88', 'Turfway Park', null);
INSERT INTO `horses_park` VALUES ('89', 'Harney County Fair', null);
INSERT INTO `horses_park` VALUES ('90', 'Kentucky Downs', null);
INSERT INTO `horses_park` VALUES ('91', 'Zia Park', null);
INSERT INTO `horses_park` VALUES ('92', 'Fair Grounds', null);
INSERT INTO `horses_park` VALUES ('93', 'Fair Play Park', null);
INSERT INTO `horses_park` VALUES ('94', 'Melville District Agripar', null);
INSERT INTO `horses_park` VALUES ('95', 'Shawan Downs', null);
INSERT INTO `horses_park` VALUES ('96', 'Foxfield', null);
INSERT INTO `horses_park` VALUES ('97', 'Oak Tree At Hollywood Park', null);
INSERT INTO `horses_park` VALUES ('98', 'Hawthorne', null);
INSERT INTO `horses_park` VALUES ('99', 'Turf Paradise', null);
INSERT INTO `horses_park` VALUES ('100', 'Middleburg', null);
INSERT INTO `horses_park` VALUES ('101', 'Portland Meadows', null);
INSERT INTO `horses_park` VALUES ('102', 'Fresno', null);
INSERT INTO `horses_park` VALUES ('103', 'Keeneland', null);
INSERT INTO `horses_park` VALUES ('104', 'Genesee Valley', null);
INSERT INTO `horses_park` VALUES ('105', 'Morven Park', null);
INSERT INTO `horses_park` VALUES ('106', 'Beulah Park', null);
INSERT INTO `horses_park` VALUES ('107', 'Great Meadow', null);
INSERT INTO `horses_park` VALUES ('108', 'Far Hills', null);
INSERT INTO `horses_park` VALUES ('109', 'Aiken', null);
INSERT INTO `horses_park` VALUES ('110', 'Aqueduct', null);
INSERT INTO `horses_park` VALUES ('111', 'Montpelier', null);
INSERT INTO `horses_park` VALUES ('112', 'Pine Mtn-callaway Garden', null);
INSERT INTO `horses_park` VALUES ('113', 'Pennsylvania Hunt Cup', null);
INSERT INTO `horses_park` VALUES ('114', 'Camden', null);
INSERT INTO `horses_park` VALUES ('115', 'Hialeah Park', null);
INSERT INTO `horses_park` VALUES ('116', 'Sunland Park', null);
INSERT INTO `horses_park` VALUES ('117', 'Tampa Bay Downs', null);
INSERT INTO `horses_park` VALUES ('118', 'Santa Anita Park', null);
INSERT INTO `horses_park` VALUES ('119', 'Parx Racing', null);
INSERT INTO `horses_park` VALUES ('120', 'Gulfstream Park', null);
INSERT INTO `horses_park` VALUES ('121', 'Oaklawn Park', null);
INSERT INTO `horses_park` VALUES ('122', 'Rillito', null);
INSERT INTO `horses_park` VALUES ('123', 'Fonner Park', null);
INSERT INTO `horses_park` VALUES ('124', 'Ocala Training Center', null);
INSERT INTO `horses_park` VALUES ('125', 'Pimlico', null);
INSERT INTO `horses_park` VALUES ('126', 'Stoneybrook At Five Points', null);
INSERT INTO `horses_park` VALUES ('127', 'Atlanta', null);
INSERT INTO `horses_park` VALUES ('128', 'Emmett', null);
INSERT INTO `horses_park` VALUES ('129', 'Monkton', null);
INSERT INTO `horses_park` VALUES ('130', 'Atlantic City', null);
INSERT INTO `horses_park` VALUES ('131', 'Mountaineer', null);
INSERT INTO `horses_park` VALUES ('132', 'Will Rogers', null);
INSERT INTO `horses_park` VALUES ('133', 'Camarero', null);
INSERT INTO `horses_park` VALUES ('134', 'Charles Town', null);
INSERT INTO `horses_park` VALUES ('135', 'Evangeline', null);
INSERT INTO `horses_park` VALUES ('136', 'Calder', null);
INSERT INTO `horses_park` VALUES ('137', 'Golden Gate', null);
INSERT INTO `horses_park` VALUES ('138', 'Lone Star', null);
INSERT INTO `horses_park` VALUES ('139', 'Hastings', null);
INSERT INTO `horses_park` VALUES ('140', 'Sam Houston', null);
INSERT INTO `horses_park` VALUES ('141', 'Tampa Bay', null);
INSERT INTO `horses_park` VALUES ('142', 'Fort Pierre', null);
INSERT INTO `horses_park` VALUES ('143', 'Pocatello Downs', null);
INSERT INTO `horses_park` VALUES ('144', 'Santa Cruz', null);
INSERT INTO `horses_park` VALUES ('145', 'Sun Downs', null);
INSERT INTO `horses_park` VALUES ('146', 'Miles City', null);
INSERT INTO `horses_park` VALUES ('147', 'Winterthur', null);
INSERT INTO `horses_park` VALUES ('148', 'Assiniboia', null);
INSERT INTO `horses_park` VALUES ('149', 'Lincoln Fair', null);
INSERT INTO `horses_park` VALUES ('150', 'Brown County', null);
INSERT INTO `horses_park` VALUES ('151', 'Percy Warner', null);
INSERT INTO `horses_park` VALUES ('152', 'Malvern', null);
INSERT INTO `horses_park` VALUES ('153', 'Lexington', null);
INSERT INTO `horses_park` VALUES ('154', 'Arapahoe', null);
INSERT INTO `horses_park` VALUES ('155', 'Fair Hill', null);
INSERT INTO `horses_park` VALUES ('156', 'Oregon Livestock', null);
INSERT INTO `horses_park` VALUES ('157', 'Jerome Fair', null);
INSERT INTO `horses_park` VALUES ('158', 'Stockton', null);
INSERT INTO `horses_park` VALUES ('159', 'Gillespie Fairground', null);
INSERT INTO `horses_park` VALUES ('160', 'Les Bois Park', null);
INSERT INTO `horses_park` VALUES ('161', 'Minidoka Fair', null);
INSERT INTO `horses_park` VALUES ('162', 'Crooked River', null);
INSERT INTO `horses_park` VALUES ('163', 'Alberta Downs', null);
INSERT INTO `horses_park` VALUES ('164', 'Mt. Pleasant', null);
INSERT INTO `horses_park` VALUES ('165', 'Oneida Fair', null);
INSERT INTO `horses_park` VALUES ('166', 'Tillamook Fair', null);
INSERT INTO `horses_park` VALUES ('167', 'Kalispell', null);
INSERT INTO `horses_park` VALUES ('168', 'Cassia Fair', null);
INSERT INTO `horses_park` VALUES ('169', 'Sweetwater Downs', null);
INSERT INTO `horses_park` VALUES ('170', 'White Pine Racing', null);
INSERT INTO `horses_park` VALUES ('171', 'Elko Fair', null);
INSERT INTO `horses_park` VALUES ('172', 'Yellowstone', null);
INSERT INTO `horses_park` VALUES ('173', 'Atokad', null);
INSERT INTO `horses_park` VALUES ('174', 'Melville District', null);
INSERT INTO `horses_park` VALUES ('175', 'Santa Anita', null);
INSERT INTO `horses_park` VALUES ('176', 'Pine Mtn', null);
INSERT INTO `horses_park` VALUES ('177', 'Charleston', null);
INSERT INTO `horses_park` VALUES ('178', 'Ocala Training Ctr', null);
INSERT INTO `horses_park` VALUES ('179', 'Stoneybrook', null);
INSERT INTO `horses_park` VALUES ('180', 'Grand National', null);
INSERT INTO `horses_park` VALUES ('181', 'Tryon', null);
INSERT INTO `horses_park` VALUES ('182', 'Betfair Hollywood Park', null);
INSERT INTO `horses_park` VALUES ('183', 'Charlotte', null);
INSERT INTO `horses_park` VALUES ('184', 'Glyndon', null);
INSERT INTO `horses_park` VALUES ('185', 'Meadowlands', null);
INSERT INTO `horses_park` VALUES ('186', 'Mountaineer Casino Racetrack & Resort', null);
INSERT INTO `horses_park` VALUES ('187', 'Desert Park', null);
INSERT INTO `horses_park` VALUES ('188', 'Eastern Oregon Livestock Show', null);
INSERT INTO `horses_park` VALUES ('189', 'Jerome County Fair', null);
INSERT INTO `horses_park` VALUES ('190', 'North Dakota Horse Park', null);
INSERT INTO `horses_park` VALUES ('191', 'Cassia County Fair', null);
INSERT INTO `horses_park` VALUES ('192', 'Barretts Race Meet At Fairplex', null);
INSERT INTO `horses_park` VALUES ('193', 'Wyoming Downs', null);
INSERT INTO `horses_park` VALUES ('194', 'Arlington', null);
INSERT INTO `horses_park` VALUES ('195', 'Santa Cruz County Fair @ Sonoita', null);
INSERT INTO `horses_park` VALUES ('196', 'Indiana Grand Race Course', null);
INSERT INTO `horses_park` VALUES ('197', 'Belterra Park', null);
INSERT INTO `horses_park` VALUES ('198', 'Brown County Fair', null);

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
-- Table structure for tournaments_default_details
-- ----------------------------
DROP TABLE IF EXISTS `tournaments_default_details`;
CREATE TABLE `tournaments_default_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tournament_id` int(11) DEFAULT NULL,
  `wager_type_id` int(11) DEFAULT NULL,
  `spread` tinyint(4) DEFAULT NULL,
  `ml` tinyint(4) DEFAULT NULL,
  `total` tinyint(4) DEFAULT NULL,
  `parlay` tinyint(4) DEFAULT NULL,
  `bet` tinyint(4) DEFAULT NULL,
  `teaser` tinyint(4) DEFAULT NULL,
  `future` tinyint(4) DEFAULT NULL,
  `prop` tinyint(4) DEFAULT NULL,
  `rl` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tournaments_default_details
-- ----------------------------
INSERT INTO `tournaments_default_details` VALUES ('1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '-1');
INSERT INTO `tournaments_default_details` VALUES ('2', '1', '2', '1', '1', '1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('3', '1', '3', '1', '1', '1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('4', '1', '4', '1', '1', '1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('5', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '-1');
INSERT INTO `tournaments_default_details` VALUES ('6', '2', '2', '1', '1', '1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('7', '2', '3', '1', '1', '1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('8', '2', '4', '1', '1', '1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('9', '3', '1', '1', '1', '1', '1', '1', '1', '1', '1', '-1');
INSERT INTO `tournaments_default_details` VALUES ('10', '3', '2', '1', '1', '1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('11', '3', '3', '1', '1', '1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('12', '3', '4', '1', '1', '1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('13', '4', '1', '1', '1', '1', '1', '1', '1', '1', '1', '-1');
INSERT INTO `tournaments_default_details` VALUES ('14', '4', '2', '1', '1', '1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('15', '4', '3', '1', '1', '1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('16', '4', '4', '1', '1', '1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('17', '5', '1', '1', '1', '1', '1', '1', '1', '1', '1', '-1');
INSERT INTO `tournaments_default_details` VALUES ('18', '5', '2', '1', '1', '1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('19', '5', '3', '1', '1', '1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('20', '5', '4', '1', '1', '1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('21', '6', '1', '-1', '1', '1', '1', '1', '-1', '1', '1', '1');
INSERT INTO `tournaments_default_details` VALUES ('22', '6', '5', '-1', '1', '1', '1', '0', '-1', '0', '0', '1');
INSERT INTO `tournaments_default_details` VALUES ('23', '6', '6', '-1', '1', '1', '1', '0', '-1', '0', '0', '1');
INSERT INTO `tournaments_default_details` VALUES ('24', '7', '1', '1', '1', '1', '1', '1', '-1', '1', '1', '-1');
INSERT INTO `tournaments_default_details` VALUES ('25', '7', '7', '1', '1', '1', '1', '0', '-1', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('26', '7', '8', '1', '1', '1', '1', '0', '-1', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('27', '7', '9', '1', '1', '1', '1', '0', '-1', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('28', '8', '1', '-1', '1', '-1', '1', '1', '-1', '1', '1', '-1');
INSERT INTO `tournaments_default_details` VALUES ('29', '8', '2', '-1', '1', '-1', '1', '0', '-1', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('30', '8', '3', '-1', '1', '-1', '1', '0', '-1', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('31', '9', '1', '1', '1', '1', '1', '1', '-1', '1', '1', '-1');
INSERT INTO `tournaments_default_details` VALUES ('32', '9', '5', '1', '1', '1', '1', '0', '-1', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('33', '9', '6', '1', '1', '1', '1', '0', '-1', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('34', '10', '1', '-1', '1', '-1', '1', '1', '-1', '1', '1', '-1');
INSERT INTO `tournaments_default_details` VALUES ('35', '11', '1', '-1', '1', '-1', '-1', '-1', '-1', '1', '1', '-1');
INSERT INTO `tournaments_default_details` VALUES ('36', '12', '1', '-1', '1', '-1', '-1', '-1', '-1', '1', '1', '-1');
INSERT INTO `tournaments_default_details` VALUES ('37', '13', '1', '-1', '1', '-1', '1', '1', '-1', '1', '1', '-1');
INSERT INTO `tournaments_default_details` VALUES ('38', '14', '1', '-1', '1', '-1', '1', '1', '1', '1', '1', '-1');
INSERT INTO `tournaments_default_details` VALUES ('39', '14', '2', '-1', '1', '-1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('40', '14', '3', '-1', '1', '-1', '1', '0', '0', '0', '0', '-1');
INSERT INTO `tournaments_default_details` VALUES ('41', '14', '4', '-1', '1', '-1', '1', '0', '0', '0', '0', '-1');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wager_types
-- ----------------------------
INSERT INTO `wager_types` VALUES ('1', 'Game', 'game');
INSERT INTO `wager_types` VALUES ('2', '1st Half', '1st_half');
INSERT INTO `wager_types` VALUES ('3', '2nd Half', '2nd_half');
INSERT INTO `wager_types` VALUES ('4', 'Quarter', 'quarter');
INSERT INTO `wager_types` VALUES ('5', '1st 5 Innings', '1st_5_innings');
INSERT INTO `wager_types` VALUES ('6', 'last 4 Innings', 'last_4_innings');
INSERT INTO `wager_types` VALUES ('7', '1st Period', '1st_period');
INSERT INTO `wager_types` VALUES ('8', '2nd Period', '2nd_period');
INSERT INTO `wager_types` VALUES ('9', '3rd Period', '3rd_period');

-- ----------------------------
-- Table structure for wager_type_attributes
-- ----------------------------
DROP TABLE IF EXISTS `wager_type_attributes`;
CREATE TABLE `wager_type_attributes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spread` tinyint(4) DEFAULT '0',
  `rl` tinyint(4) DEFAULT NULL,
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
  PRIMARY KEY (`id`),
  KEY `fk_wager_type_attributes_tournaments_idx` (`tournaments_id`),
  KEY `fk_wager_type_attributes_wager_types1_idx` (`wager_types_id`),
  KEY `fk_wager_type_attributes_users1_idx` (`users_id`),
  KEY `fk_wager_type_attributes_sport_books1_idx` (`sport_books_id`),
  CONSTRAINT `fk_wager_type_attributes_sport_books1` FOREIGN KEY (`sport_books_id`) REFERENCES `sport_books` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_wager_type_attributes_tournaments` FOREIGN KEY (`tournaments_id`) REFERENCES `tournaments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_wager_type_attributes_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_wager_type_attributes_wager_types1` FOREIGN KEY (`wager_types_id`) REFERENCES `wager_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wager_type_attributes
-- ----------------------------
