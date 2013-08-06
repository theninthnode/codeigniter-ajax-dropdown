SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `options`
-- ----------------------------
DROP TABLE IF EXISTS `options`;
CREATE TABLE `options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `options`
-- ----------------------------
BEGIN;
INSERT INTO `options` VALUES ('1', 'Option 1'), ('2', 'Option 2'), ('3', 'Option 3'), ('4', 'Option 4');
COMMIT;

-- ----------------------------
--  Table structure for `suboptions`
-- ----------------------------
DROP TABLE IF EXISTS `suboptions`;
CREATE TABLE `suboptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `option_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `suboptions`
-- ----------------------------
BEGIN;
INSERT INTO `suboptions` VALUES ('1', 'Sub-option 1 for option 1', '1'), ('2', 'Sub-option 1 for option 2', '2'), ('3', 'Sub-option 2 for option 2', '2'), ('4', 'Sub-option 1 for option 3', '3'), ('5', 'Sub-option 2 for option 3', '3'), ('7', 'Sub-option 2 for option 1', '1');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
