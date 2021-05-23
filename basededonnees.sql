-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Listage des données de la table ecommerce-web-app.admins : ~0 rows (environ)
DELETE FROM `admins`;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` (`id`, `username`, `password`) VALUES
	(1, 'amina', 'sinusite');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Listage des données de la table ecommerce-web-app.categories : ~6 rows (environ)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(12, 'Admin Panel', '2021-05-21 04:40:43', '2021-05-21 04:40:43'),
	(14, 'faradpaupiere', '2021-05-22 16:33:13', '2021-05-22 16:33:13'),
	(15, 'faradpaupiere', '2021-05-22 16:41:12', '2021-05-22 16:41:12'),
	(16, '', '2021-05-22 17:01:19', '2021-05-22 17:01:19'),
	(17, 'az', '2021-05-22 17:58:51', '2021-05-22 17:58:51'),
	(18, 'hhh', '2021-05-22 18:13:13', '2021-05-22 18:13:13');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Listage des données de la table ecommerce-web-app.contact : ~0 rows (environ)
DELETE FROM `contact`;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Listage des données de la table ecommerce-web-app.customers : ~0 rows (environ)
DELETE FROM `customers`;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Listage des données de la table ecommerce-web-app.orders : ~0 rows (environ)
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Listage des données de la table ecommerce-web-app.order_details : ~0 rows (environ)
DELETE FROM `order_details`;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;

-- Listage des données de la table ecommerce-web-app.products : ~76 rows (environ)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `name`, `price`, `picture`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
	(1, 'parfum', 230, NULL, 'parfum ambra', NULL, '2021-05-19 10:56:08', '2021-05-19 10:56:10'),
	(3, 'pparfun', 300, NULL, 'FLEURS', NULL, '2021-05-19 11:41:05', '2021-05-19 11:41:07'),
	(4, 'ggdggd', NULL, NULL, NULL, NULL, '2021-05-22 19:14:11', '2021-05-22 19:14:11'),
	(6, 'hhhjj', NULL, NULL, NULL, NULL, '2021-05-22 19:28:07', '2021-05-22 19:28:07'),
	(32, 'champoing', NULL, 'Array', NULL, NULL, '2021-05-22 22:06:38', '2021-05-22 22:06:38'),
	(33, 'champoing', 20, 'Array', NULL, NULL, '2021-05-22 22:08:43', '2021-05-22 22:08:43'),
	(34, 'khdammm', 40, 'Array', '', NULL, '2021-05-22 22:10:46', '2021-05-22 22:10:46'),
	(35, '', NULL, 'Array', NULL, NULL, '2021-05-22 22:15:39', '2021-05-22 22:15:39'),
	(36, '', NULL, 'Array', NULL, NULL, '2021-05-22 22:16:09', '2021-05-22 22:16:09'),
	(37, '', NULL, 'Array', NULL, NULL, '2021-05-22 22:16:53', '2021-05-22 22:16:53'),
	(38, '', NULL, 'Array', NULL, NULL, '2021-05-22 22:17:24', '2021-05-22 22:17:24'),
	(39, '', NULL, 'Array', NULL, NULL, '2021-05-22 22:18:25', '2021-05-22 22:18:25'),
	(40, '', NULL, 'Array', NULL, NULL, '2021-05-22 22:19:06', '2021-05-22 22:19:06'),
	(42, '', NULL, 'Array', NULL, NULL, '2021-05-22 22:20:58', '2021-05-22 22:20:58'),
	(43, '', NULL, 'Array', NULL, NULL, '2021-05-22 22:21:09', '2021-05-22 22:21:09'),
	(44, 'khdammm', NULL, 'Array', NULL, NULL, '2021-05-22 22:21:23', '2021-05-22 22:21:23'),
	(45, 'champoing', NULL, 'Array', NULL, NULL, '2021-05-22 22:24:29', '2021-05-22 22:24:29'),
	(46, '', NULL, '', NULL, NULL, '2021-05-22 22:25:32', '2021-05-22 22:25:32'),
	(47, '', NULL, '', NULL, NULL, '2021-05-22 22:28:44', '2021-05-22 22:28:44'),
	(48, 'champoing', NULL, NULL, NULL, NULL, '2021-05-22 22:37:23', '2021-05-22 22:37:23'),
	(49, 'champoing', 40, NULL, NULL, NULL, '2021-05-22 22:38:27', '2021-05-22 22:38:27'),
	(50, 'champoing', 40, NULL, '', NULL, '2021-05-22 22:39:10', '2021-05-22 22:39:10'),
	(51, '', NULL, NULL, NULL, NULL, '2021-05-22 22:43:10', '2021-05-22 22:43:10'),
	(52, 'champoing', NULL, NULL, NULL, NULL, '2021-05-22 22:43:23', '2021-05-22 22:43:23'),
	(53, 'champoing', NULL, NULL, NULL, NULL, '2021-05-22 22:44:18', '2021-05-22 22:44:18'),
	(54, '', NULL, '', NULL, NULL, '2021-05-22 22:46:36', '2021-05-22 22:46:36'),
	(55, '', NULL, '', NULL, NULL, '2021-05-22 22:46:54', '2021-05-22 22:46:54'),
	(56, '', NULL, '', NULL, NULL, '2021-05-22 22:47:26', '2021-05-22 22:47:26'),
	(57, '', NULL, 'Array', NULL, NULL, '2021-05-22 22:47:33', '2021-05-22 22:47:33'),
	(58, '', NULL, '', NULL, NULL, '2021-05-22 22:47:33', '2021-05-22 22:47:33'),
	(59, '', NULL, 'Array', NULL, NULL, '2021-05-22 22:47:55', '2021-05-22 22:47:55'),
	(60, '', NULL, '', NULL, NULL, '2021-05-22 22:47:55', '2021-05-22 22:47:55'),
	(61, '', NULL, NULL, NULL, NULL, '2021-05-22 22:49:55', '2021-05-22 22:49:55'),
	(63, '(yhz(y', NULL, NULL, NULL, NULL, '2021-05-22 22:50:49', '2021-05-22 22:50:49'),
	(64, '(yhz(y', NULL, NULL, NULL, NULL, '2021-05-22 22:52:04', '2021-05-22 22:52:04'),
	(65, '(yhz(y', NULL, '', NULL, NULL, '2021-05-22 22:52:27', '2021-05-22 22:52:27'),
	(66, '(yhz(y', NULL, '', NULL, NULL, '2021-05-22 22:53:17', '2021-05-22 22:53:17'),
	(67, '(yhz(y', NULL, '', NULL, NULL, '2021-05-22 22:53:50', '2021-05-22 22:53:50'),
	(68, '(yhz(y', NULL, '', NULL, NULL, '2021-05-22 22:54:53', '2021-05-22 22:54:53'),
	(69, '(yhz(y', NULL, '', NULL, NULL, '2021-05-22 22:55:14', '2021-05-22 22:55:14'),
	(70, '', NULL, NULL, NULL, NULL, '2021-05-22 22:56:43', '2021-05-22 22:56:43'),
	(71, '(yhz(y', NULL, NULL, NULL, NULL, '2021-05-22 22:57:08', '2021-05-22 22:57:08'),
	(72, '(yhz(y', NULL, NULL, NULL, NULL, '2021-05-22 22:58:14', '2021-05-22 22:58:14'),
	(73, '(yhz(y', NULL, NULL, NULL, NULL, '2021-05-22 22:58:39', '2021-05-22 22:58:39'),
	(74, '(yhz(y', NULL, NULL, NULL, NULL, '2021-05-22 22:59:11', '2021-05-22 22:59:11'),
	(75, 'rouge alevre', NULL, NULL, NULL, NULL, '2021-05-22 22:59:23', '2021-05-22 22:59:23'),
	(76, 'rouge alevre', NULL, 'Array', NULL, NULL, '2021-05-22 22:59:56', '2021-05-22 22:59:56'),
	(77, '(yhz(y', NULL, '', NULL, NULL, '2021-05-22 23:04:22', '2021-05-22 23:04:22'),
	(78, 'champoing', NULL, 'Array', NULL, NULL, '2021-05-22 23:04:32', '2021-05-22 23:04:32'),
	(79, '', NULL, '', NULL, NULL, '2021-05-22 23:09:18', '2021-05-22 23:09:18'),
	(80, '', NULL, '', NULL, NULL, '2021-05-22 23:10:57', '2021-05-22 23:10:57'),
	(81, '(yhz(y', NULL, '', NULL, NULL, '2021-05-22 23:11:39', '2021-05-22 23:11:39'),
	(82, '(yhz(y', NULL, '', NULL, NULL, '2021-05-22 23:12:26', '2021-05-22 23:12:26'),
	(83, '(yhz(y', NULL, '', NULL, NULL, '2021-05-22 23:16:48', '2021-05-22 23:16:48'),
	(84, '', NULL, 'Array', NULL, NULL, '2021-05-22 23:16:57', '2021-05-22 23:16:57'),
	(85, '', NULL, '', NULL, NULL, '2021-05-22 23:16:57', '2021-05-22 23:16:57'),
	(86, 'champoing', NULL, '', NULL, NULL, '2021-05-22 23:21:13', '2021-05-22 23:21:13'),
	(87, '', NULL, '', NULL, NULL, '2021-05-22 23:21:18', '2021-05-22 23:21:18'),
	(88, 'champoing', NULL, '', NULL, NULL, '2021-05-22 23:21:35', '2021-05-22 23:21:35'),
	(89, '', NULL, '', NULL, NULL, '2021-05-22 23:22:10', '2021-05-22 23:22:10'),
	(90, '', NULL, '', NULL, NULL, '2021-05-22 23:22:44', '2021-05-22 23:22:44'),
	(91, '', NULL, '', NULL, NULL, '2021-05-22 23:22:50', '2021-05-22 23:22:50'),
	(92, '', NULL, '', NULL, NULL, '2021-05-22 23:22:50', '2021-05-22 23:22:50'),
	(93, '', NULL, '', NULL, NULL, '2021-05-22 23:23:18', '2021-05-22 23:23:18'),
	(94, '', NULL, 'Array', NULL, NULL, '2021-05-22 23:23:24', '2021-05-22 23:23:24'),
	(95, '', NULL, '', NULL, NULL, '2021-05-22 23:23:25', '2021-05-22 23:23:25'),
	(96, '', NULL, '', NULL, NULL, '2021-05-22 23:24:20', '2021-05-22 23:24:20'),
	(97, '', NULL, '', NULL, NULL, '2021-05-22 23:48:11', '2021-05-22 23:48:11'),
	(98, '', NULL, '', NULL, NULL, '2021-05-22 23:49:16', '2021-05-22 23:49:16'),
	(99, '', NULL, '', NULL, NULL, '2021-05-22 23:49:53', '2021-05-22 23:49:53'),
	(100, '', NULL, '', NULL, NULL, '2021-05-23 12:50:23', '2021-05-23 12:50:23'),
	(101, '', NULL, '', NULL, NULL, '2021-05-23 12:52:21', '2021-05-23 12:52:21'),
	(102, '', NULL, '', NULL, NULL, '2021-05-23 13:02:31', '2021-05-23 13:02:31'),
	(103, '', NULL, '', NULL, NULL, '2021-05-23 13:06:16', '2021-05-23 13:06:16'),
	(104, '', NULL, '', NULL, NULL, '2021-05-23 13:09:28', '2021-05-23 13:09:28'),
	(105, '', NULL, '', NULL, NULL, '2021-05-23 13:27:20', '2021-05-23 13:27:20');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
