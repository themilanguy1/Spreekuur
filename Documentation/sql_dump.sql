SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE IF EXISTS `User`;
DROP TABLE IF EXISTS `Feedback`;
DROP TABLE IF EXISTS `Vragen`;
SET FOREIGN_KEY_CHECKS = 1;

CREATE TABLE `User` (
    `id` int(20) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `geslacht` varchar(1) NOT NULL,
    `leeftijdsgroep` varchar(20) NOT NULL,
    `woonplaats` text(255) NOT NULL,
    `adres` varchar(255) NOT NULL,
    `telefoon` int(15) NOT NULL,
    `voornaam` varchar(255) NOT NULL,
    `achternaam` varchar(255) NOT NULL,
    `patientnummer` int(50) NOT NULL,
    `medicatie` varchar(255) NOT NULL,
    `gezondheidsklachten` varchar(255) NOT NULL,
    `extra info` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Feedback` (
    `id` int(20) NOT NULL,
    `user_id` int(20) NOT NULL,
    `feedback` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE `Vragen` (
    `id` int(20) NOT NULL,
    `user_id` int(20) NOT NULL,
    `vraag` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);
