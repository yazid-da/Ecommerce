-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 13 juil. 2022 à 15:02
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Nutrition Animale', 'DES MATIÈRES PREMIÈRES UTILISÉES POUR L’ALIMENTATION DE DIFFÉRENTS TYPES D’ÉLEVAGE DANS LE MAROC', '1657567867categorie.JPG', '2022-07-11 18:31:07', '2022-07-11 18:31:07'),
(6, 'Alimentation humaine', 'Huile\r\nMiel\r\nCéréales\r\nboeuf', '1657567890categorie.jpg', '2022-07-11 18:31:30', '2022-07-11 18:31:30'),
(7, 'Traitement agricole', 'Retrouvez l\'ensemble de notre gamme de produits phytosanitaires homologués pour l\'agriculture : fongicides, insecticides, herbicides, d\'origine naturelle ou conventionnelle.', '1657567908categorie.jpg', '2022-07-11 18:31:48', '2022-07-11 18:31:48'),
(8, 'Matériels agricoles', 'Tous les produits liés au machinisme agricole, traitement agricole, les essais de matériel (tracteur, quad, etc), etc.', '1657567928categorie.jpg', '2022-07-11 18:32:08', '2022-07-11 18:32:08');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2022_06_23_012303_create_categories_table', 1),
(18, '2022_06_28_140912_create_produits_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_uni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qte` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `designation`, `categorie_id`, `description`, `prix_uni`, `image`, `image2`, `image3`, `qte`, `created_at`, `updated_at`) VALUES
(2, 'Miel', '6', 'Miel naturel', '149.99', '1657569052.jpg', '1657569052img2.jpg', '1657569052img3.jpg', '50', '2022-07-11 18:50:52', '2022-07-11 18:50:52'),
(3, 'Huile', '6', 'Une huile est un corps gras qui est à l\'état liquide à température ambiante et qui ne se mélange pas à l\'eau. Les huiles sont des liquides gras, visqueux, d\'origine animale,', '80', '1657569135.jpg', NULL, NULL, '20', '2022-07-11 18:52:15', '2022-07-11 18:52:15'),
(4, 'Œufs', '6', 'ŒufsŒufsŒufsŒufsŒufsŒufsŒufsŒufsŒufsŒufs', '2.5', '1657569257.jpg', NULL, NULL, '200', '2022-07-11 18:53:45', '2022-07-11 18:54:17'),
(5, 'Croquette chat', '5', 'Commandez en ligne croquette chat parmi un large catalogue de produits à votre disposition. Trouvez croquette chat au meilleur prix.', '80', '1657569333.jpg', '1657569333img2.JPG', '1657569333img3.JPG', '40', '2022-07-11 18:55:33', '2022-07-11 18:55:33'),
(6, 'Caféine', '6', 'caféinecaféinecaféinecaféinecaféinecaféinecaféine', '21.99', '1657569497.jpg', NULL, NULL, '50', '2022-07-11 18:56:44', '2022-07-11 18:58:17'),
(7, 'Chofann', '6', 'ChofannChofannChofannChofannChofannChofann', '15', '1657569654.jpg', NULL, NULL, '23', '2022-07-11 18:58:54', '2022-07-11 19:00:54'),
(8, 'Paille', '5', 'Paillllllllllllllllllle', '50', '1657569758.jpg', '1657569746img2.jpg', NULL, '70', '2022-07-11 19:02:26', '2022-07-11 19:02:38'),
(9, 'poultry feed', '5', 'poultry feedpoultry feedpoultry feed', '20.18', '1657569938.JPG', NULL, NULL, '13', '2022-07-11 19:05:13', '2022-07-11 19:05:38');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tele` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tele`, `adresse`, `email_verified_at`, `password`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '0', '0', NULL, '$2y$10$AP1Nw302CDZlXKU1teDmmuIpcBO9kAtZibmLYikDmgLzQTvf2yVt6', 1, NULL, '2022-07-11 17:45:23', '2022-07-11 17:45:23'),
(2, 'idriss', 'idriss@email.com', '06', 'add', NULL, '$2y$10$7nA1XLMN7ZSqd/fEgNdo9./pyAKkc/65Dlrt68PPIR9oe10OY.PQO', 0, NULL, '2022-07-12 21:53:54', '2022-07-12 21:53:54'),
(3, 'client1', 'client1@email.com', '06', 'adresse 1 rue 1 ,Maroc', NULL, '$2y$10$FbaQyTiXBtwSooKegjfiS.R6elKIR8igxpTxp/cWcd5VDczSdWVju', 0, NULL, '2022-07-12 23:01:29', '2022-07-12 23:01:29'),
(4, 'client2', 'client2@email.com', '0', 'a', NULL, '$2y$10$XUiq13nmoRqKQ1eQrY9p.eXemWdZER7lAR4QSB56ylnjG4YlgS8iS', 0, NULL, '2022-07-13 08:56:32', '2022-07-13 08:56:32');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
