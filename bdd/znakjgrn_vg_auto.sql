START TRANSACTION;

DROP TABLE IF EXISTS `xxx_users`;
CREATE TABLE IF NOT EXISTS `xxx_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `surname` varchar(255) COLLATE utf8_bin NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL,
  `city` varchar(255) COLLATE utf8_bin NOT NULL,
  `cp` int(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `xxx_contact`;
CREATE TABLE IF NOT EXISTS `xxx_contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `presta` varchar(255) COLLATE utf8_bin NOT NULL,
  `immat` varchar(255) COLLATE utf8_bin NOT NULL,
  `message` varchar(255) COLLATE utf8_bin NOT NULL,
  `civ` varchar(255) COLLATE utf8_bin NOT NULL,
  `tel` varchar(255) COLLATE utf8_bin NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


DROP TABLE IF EXISTS `xxx_opinions`;
CREATE TABLE IF NOT EXISTS `xxx_opinions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `star` int(10) COLLATE utf8_bin NOT NULL,
  `opinion_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `opinion_surname` varchar(255) COLLATE utf8_bin NOT NULL,
  `msg` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;