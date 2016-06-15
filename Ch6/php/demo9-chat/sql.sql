--Database "chat"
CREATE DATABASE IF NOT EXISTS chat CHARACTER SET UTF8;

USE chat;

DROP TABLE IF EXISTS 'messages';

CREATE TABLE `messages` (
  `id` int(7) NOT NULL auto_increment,
  `user` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `time` int(9) NOT NULL,
  PRIMARY KEY  (`id`)
);