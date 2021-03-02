CREATE TABLE `content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(20) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug_UN` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1