

create database `memoire_mj_isp`;
use `memoire_mj_isp`;


CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY  NOT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `id_ecole` varchar(50) DEFAULT NULL,
  `genre` varchar(10) DEFAULT NULL,
  `date_naisse` varchar(30) DEFAULT NULL,
  `profilpic` varchar(255) DEFAULT NULL,
  `phone` varchar(140) DEFAULT null,
  `statuonline` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(150) NOT NULL,
  `roles` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `assurence` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY  NOT NULL,
  `nom_assurence` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `eheance` varchar(250) DEFAULT NULL,
  `montant` float(10, 2) DEFAULT NULL,
  `validite` varchar(230) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `souscription` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY  NOT NULL,
  `description` text DEFAULT NULL,
  `date_Scouscription` varchar(250) DEFAULT NULL,
  `mode_paiement` varchar(255) DEFAULT NULL,
  `id_client` int DEFAULT NULL,
  `id_assurence` int DEFAULT null,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




