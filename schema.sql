DROP TABLE IF EXISTS `tutos`;
CREATE TABLE `tutos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdAt` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tutos` (`id`, `title`, `description`, `createdAt`) VALUES
(null,	'Ajax',	'Faire des requêtes Asynchrones',	'2021-04-30'),
(null,	'Api',	'Construire et consommer des API',	'2021-04-30'),
(null,	'JSON',	'Communiquer les données',	'2021-04-30'),
(null,	'MVC',	'Structurer son application',	'2021-04-30');




