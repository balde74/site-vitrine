-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 26 oct. 2022 à 13:08
-- Version du serveur : 8.0.30-0ubuntu0.22.04.1
-- Version de PHP : 8.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sw_emab`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduction` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `image`, `introduction`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Article 1', 'articles/5ca35f43491abc00ce108134efcdf5b72', 'GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.', 1, '2022-10-19 14:56:48', '2022-10-19 15:32:42'),
(3, 'Lorem Ipsum', 'articles/9f0398b5c5b488075bb8082d7b0746a63', 'm Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2022-10-25 13:02:37', '2022-10-25 13:03:50');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `galeries`
--

CREATE TABLE `galeries` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `galeries`
--

INSERT INTO `galeries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'galeries/0d2d8c6243c59bace421d47980269aab', '2022-10-19 20:08:28', '2022-10-19 20:08:28'),
(8, 'galeries/a654954bf80826c59d35115da9c71aa9', '2022-10-19 23:12:45', '2022-10-19 23:12:45'),
(9, 'galeries/bdeeb5954d881c8dd577ab5192470b27', '2022-10-19 23:12:45', '2022-10-19 23:12:45'),
(10, 'galeries/1b4cc5c0c54f5f546f3de016509ec621', '2022-10-19 23:12:45', '2022-10-19 23:12:45'),
(11, 'galeries/9a23ed7fec33d5f8233140947d5a8f90', '2022-10-19 23:12:45', '2022-10-19 23:12:45'),
(12, 'galeries/40e6d9ab98f6768f28edf8f0f906035e', '2022-10-19 23:12:45', '2022-10-19 23:12:45'),
(13, 'galeries/4f2801af56f74f867c53e880ed70e989', '2022-10-19 23:12:45', '2022-10-19 23:12:45');

-- --------------------------------------------------------

--
-- Structure de la table `info_complementaires`
--

CREATE TABLE `info_complementaires` (
  `id` bigint UNSIGNED NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mot_directeur_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mot_directeur` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texte` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `info_complementaires`
--

INSERT INTO `info_complementaires` (`id`, `telephone`, `email`, `adresse`, `mot_directeur_image`, `mot_directeur`, `created_at`, `updated_at`, `image`, `texte`) VALUES
(1, '625-20-00-00', 'email2@gmail.com', 'Madina', 'infos/9a0c13adab93649cb4b7c31e355fd4af1', '<p>						<span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">GridView is a widget in Flutter that displays the items in a&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">2-D array</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">&nbsp;(two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">text, images, icons</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">, etc. to display in a grid layout depending on the user requirement. It is also referred to as a&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">scrollable</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">&nbsp;2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\"><br></span></p><p><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">GridView is a widget in Flutter that displays the items in a&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">2-D array</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">&nbsp;(two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">text, images, icons</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">, etc. to display in a grid layout depending on the user requirement. It is also referred to as a&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">scrollable</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">&nbsp;2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\"><br></span></p><p><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">GridView is a widget in Flutter that displays the items in a&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">2-D array</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">&nbsp;(two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">text, images, icons</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">, etc. to display in a grid layout depending on the user requirement. It is also referred to as a&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">scrollable</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">&nbsp;2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\"><br></span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\"><br></span>\r\n					</p>', '2022-10-21 21:09:32', '2022-10-24 16:42:05', 'info_image/00ff52919221ab116b2cf636d7c59a8e1', 'le texte dynamique');

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_menu_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id`, `titre`, `description`, `image`, `type_menu_id`, `created_at`, `updated_at`) VALUES
(2, 'Notre Histoire', 'GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.', 'menus/cd070cb19a25b293ce0f0940781748632', 2, '2022-10-18 20:21:48', '2022-10-18 20:34:50'),
(3, 'Filiale 1', 'GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.\r\nGridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.', 'menus/2158f76bdb2b400ed1bfb300d8fbee163', 1, '2022-10-19 13:39:55', '2022-10-24 13:44:19'),
(4, 'Filiale 2', 'Ici la description du filiale 2', 'menus/e552f656ca4a810d4e53e12e56b6731c4', 1, '2022-10-19 20:54:01', '2022-10-19 20:54:01'),
(5, 'Filiale 3', 'GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.', 'menus/fce33102f719c24cb175e9090981aad35', 1, '2022-10-19 20:54:49', '2022-10-19 20:54:49'),
(6, 'Nos Objectif', 'GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.', 'menus/793462997409914b37cd011b814c6aa56', 2, '2022-10-19 20:56:11', '2022-10-19 20:56:11');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_10_18_133522_create_type_menus_table', 2),
(17, '2022_10_18_133609_create_menus_table', 3),
(18, '2022_10_18_214950_create_section_menus_table', 4),
(19, '2022_10_19_141015_create_table_article', 5),
(21, '2022_10_19_141647_create_articles_table', 6),
(22, '2022_10_19_144215_create_sections_table', 7),
(23, '2022_10_19_200532_create_galeries_table', 8),
(25, '2022_10_21_210739_create_info_complementaires_table', 9),
(26, '2022_10_24_160132_create_slogans_table', 10),
(28, '2022_10_24_162749_add_image_and_text_fields_to_info_complementaires_table', 11);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sections`
--

CREATE TABLE `sections` (
  `id` bigint UNSIGNED NOT NULL,
  `section` text COLLATE utf8mb4_unicode_ci,
  `section_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_section` int NOT NULL,
  `article_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sections`
--

INSERT INTO `sections` (`id`, `section`, `section_image`, `numero_section`, `article_id`, `created_at`, `updated_at`) VALUES
(3, '<span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">GridView is a widget in Flutter that displays the items in a&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">2-D array</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">&nbsp;(two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">text, images, icons</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">, etc. to display in a grid layout depending on the user requirement. It is also referred to as a&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">scrollable</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">&nbsp;2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">GridView is a widget in Flutter that displays the items in a&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">2-D array</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">&nbsp;(two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">text, images, icons</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">, etc. to display in a grid layout depending on the user requirement. It is also referred to as a&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">scrollable</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">&nbsp;2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">GridView is a widget in Flutter that displays the items in a&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">2-D array</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">&nbsp;(two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">text, images, icons</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">, etc. to display in a grid layout depending on the user requirement. It is also referred to as a&nbsp;</span><span style=\"font-family: inter-bold, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: 700; color: rgb(51, 51, 51); font-size: 16px; text-align: justify;\">scrollable</span><span style=\"color: rgb(51, 51, 51); font-family: inter-regular, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px; text-align: justify;\">&nbsp;2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.</span>', 'sections/b0a2f3c6ad9a1da98fa7f7f4579eccb83', 3, 2, '2022-10-19 15:31:15', '2022-10-25 13:00:57'),
(4, 's simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'sections/fea110ce5568a993d988e747afc169c14', 2, 2, '2022-10-25 13:00:30', '2022-10-25 13:00:30'),
(5, '<div>m Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div><div><br></div><div>Why do we use it?</div><div>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div><div><br></div>', 'sections/a340e5218bfc91342b14313dfb1c70bd5', 3, 3, '2022-10-25 13:03:13', '2022-10-25 13:05:53'),
(6, '<div>m Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div><div><br></div><div>Why do we use it?</div><div>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</div><div><br></div>', 'sections/22915471c0fa270bbe2d8ee2838603296', 2, 3, '2022-10-25 13:03:25', '2022-10-25 13:03:25');

-- --------------------------------------------------------

--
-- Structure de la table `section_menus`
--

CREATE TABLE `section_menus` (
  `id` bigint UNSIGNED NOT NULL,
  `section` text COLLATE utf8mb4_unicode_ci,
  `section_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_section` int NOT NULL,
  `menu_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `section_menus`
--

INSERT INTO `section_menus` (`id`, `section`, `section_image`, `numero_section`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, '<div>A grid view is a graphical control element used to show items in the tabular form. In this section, we are going to learn how to render items in a grid view in the Flutter application.</div><div><br></div><div>GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.</div>', 'section_menus/7e21b1b0fe24fbde519ef607b96f972a1', 1, 2, '2022-10-19 10:37:35', '2022-10-19 21:30:46'),
(3, '<div>A grid view is a graphical control element used to show items in the tabular form. In this section, we are going to learn how to render items in a grid view in the Flutter application.</div><div><br></div><div>GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.</div><div><br></div><ol><li>The grid view can be implemented in various ways, which are given below:</li></ol><div><br></div><div>count()</div><div>builder()</div><div>custom()</div><div>extent()</div>', 'section_menus/7300ae56f3b16e5cb2ad41b5913677a23', 2, 2, '2022-10-19 10:49:54', '2022-10-19 21:31:07'),
(5, 'GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.', 'section_menus/66399e2a62362163778710158e7a0b815', 1, 3, '2022-10-19 13:44:01', '2022-10-19 13:44:01'),
(6, 'GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.', 'section_menus/76c29fecc564a5260a23482b528d19876', 1, 5, '2022-10-19 21:23:08', '2022-10-19 21:23:08'),
(7, 'GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.GridView is a widget in Flutter that displays the items in a 2-D array (two-dimensional rows and columns). As the name suggests, it will be used when we want to show items in a Grid. We can select the desired item from the grid list by tapping on them. This widget can contain text, images, icons, etc. to display in a grid layout depending on the user requirement. It is also referred to as a scrollable 2-D array of widgets. Since it is scrollable, we can specify the direction only in which it scrolls.', 'section_menus/bfa10b3aa4a7b19eaa7b25d26e8e6e377', 3, 5, '2022-10-19 21:23:22', '2022-10-19 21:23:22');

-- --------------------------------------------------------

--
-- Structure de la table `slogans`
--

CREATE TABLE `slogans` (
  `id` bigint UNSIGNED NOT NULL,
  `texte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `slogans`
--

INSERT INTO `slogans` (`id`, `texte`, `icone`, `created_at`, `updated_at`) VALUES
(1, '<h3><b>le texte</b></h3><p style=\"text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer&nbsp;<br></p>', 'ti-desktop', '2022-10-24 16:08:47', '2022-10-24 16:23:02'),
(2, '<h3><b>le texte</b></h3><div style=\"text-align: justify; \">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer</div>', 'ti-link', '2022-10-24 16:22:41', '2022-10-24 16:24:00');

-- --------------------------------------------------------

--
-- Structure de la table `type_menus`
--

CREATE TABLE `type_menus` (
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_menus`
--

INSERT INTO `type_menus` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Filiale', '2022-10-18 13:48:04', '2022-10-18 13:48:04'),
(2, 'Information du groupe', '2022-10-18 13:48:04', '2022-10-18 13:48:04');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abdoulaye', 'Balde', 'baldea49@gmail.com', NULL, '$2y$10$s/tZ4OpxCIrztcRHDeExPu36xHhgXyZsDxumknp60ViS3UWTRGRvG', NULL, '2022-10-25 14:33:25', '2022-10-25 14:33:25'),
(2, 'Ibrahima sory', 'Diallo', 'is.diallo@isfad-gn.org', NULL, '$2y$10$s/tZ4OpxCIrztcRHDeExPu36xHhgXyZsDxumknp60ViS3UWTRGRvG', NULL, '2022-10-26 12:57:38', '2022-10-26 12:57:38');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `info_complementaires`
--
ALTER TABLE `info_complementaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_type_menu_id_foreign` (`type_menu_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_article_id_foreign` (`article_id`);

--
-- Index pour la table `section_menus`
--
ALTER TABLE `section_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_menus_menu_id_foreign` (`menu_id`);

--
-- Index pour la table `slogans`
--
ALTER TABLE `slogans`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_menus`
--
ALTER TABLE `type_menus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `info_complementaires`
--
ALTER TABLE `info_complementaires`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `section_menus`
--
ALTER TABLE `section_menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `slogans`
--
ALTER TABLE `slogans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `type_menus`
--
ALTER TABLE `type_menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_type_menu_id_foreign` FOREIGN KEY (`type_menu_id`) REFERENCES `type_menus` (`id`);

--
-- Contraintes pour la table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `section_menus`
--
ALTER TABLE `section_menus`
  ADD CONSTRAINT `section_menus_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
