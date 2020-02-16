DROP database IF EXISTS `exam`;
create database `exam`;
use `exam`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `stid` int(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `record` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
