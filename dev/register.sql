CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` tinytext NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` tinytext NOT NULL,
  `lastname` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  PRIMARY KEY (`id`)
);