-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 11, 2019 at 08:16 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_categories`
--

DROP TABLE IF EXISTS `cms_categories`;
CREATE TABLE IF NOT EXISTS `cms_categories` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `parent` bigint(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `cms_categories`
--

INSERT INTO `cms_categories` (`id`, `title`, `rank`, `parent`) VALUES
(1, 'کالای دیجیتال', 1, 0),
(2, 'مواد غذایی', 1, 0),
(3, 'تلفن همراه', 1, 1),
(4, 'رایانه شخصی', 1, 1),
(5, 'لوازم جانبی موبایل', 1, 3),
(6, 'گوشی موبایل', 1, 3),
(7, 'لوازم خانگی', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cms_contents`
--

DROP TABLE IF EXISTS `cms_contents`;
CREATE TABLE IF NOT EXISTS `cms_contents` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `abstr` text COLLATE utf8_persian_ci NOT NULL,
  `body` longtext COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `cms_contents`
--

INSERT INTO `cms_contents` (`id`, `title`, `abstr`, `body`) VALUES
(1, 'خوش آمدید', 'متن آزمایشی خلاصه', 'متن آزمایشی خلاصه متن آزمایشی خلاصه متن آزمایشی خلاصهمتن آزمایشی خلاصهمتن آزمایشی خلاصهمتن آزمایشی خلاصه متن آزمایشی خلاصه متن آزمایشی خلاصه متن آزمایشی خلاصهمتن آزمایشی خلاصهمتن آزمایشی خلاصه');

-- --------------------------------------------------------

--
-- Table structure for table `cms_menu`
--

DROP TABLE IF EXISTS `cms_menu`;
CREATE TABLE IF NOT EXISTS `cms_menu` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `href` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `target` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `parent` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `cms_menu`
--

INSERT INTO `cms_menu` (`id`, `title`, `href`, `target`, `parent`) VALUES
(1, 'صفحه اصلی', './', '_self', 0),
(2, 'محصولات', './?m=shop', '_self', 0),
(3, 'درباره ما', './?m=about', '_self', 0),
(4, 'تماس با ما', './?m=contact', '_self', 0),
(5, 'محصولات الکترونیک', './', '_self', 2),
(6, 'محصولات غیر الکترونیک', './', '_self', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cms_products`
--

DROP TABLE IF EXISTS `cms_products`;
CREATE TABLE IF NOT EXISTS `cms_products` (
  `id` bigint(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `price` int(11) NOT NULL,
  `body` longtext COLLATE utf8_persian_ci NOT NULL,
  `index_image` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `is_special` tinyint(1) NOT NULL,
  `cat` bigint(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `cms_products`
--

INSERT INTO `cms_products` (`id`, `title`, `price`, `body`, `index_image`, `quantity`, `active`, `is_special`, `cat`) VALUES
(7, 'بخار شو', 23000000, 'بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو ', 'IMG_20190211_162108.jpg', 10, 1, 0, 7),
(8, 'لوازم بخار شو', 100000, 'لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو ', 'IMG_20190211_162129.jpg', 100, 1, 0, 7),
(9, 'بخاری برقی', 230400, 'بخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقی', 'IMG_20190211_162108.jpg', 20, 1, 0, 7),
(10, 'مانیتور رایانه', 10000000, 'مانیتور رایانه مانیتور رایانهمانیتور رایانه مانیتور رایانهمانیتور رایانه مانیتور رایانهمانیتور رایانه مانیتور رایانهمانیتور رایانه مانیتور رایانهمانیتور رایانه مانیتور رایانهمانیتور رایانه مانیتور رایانهمانیتور رایانه مانیتور رایانه', 'IMG_20190211_162108.jpg', 200, 1, 0, 7),
(11, 'روغن سرخ کردنی', 200000, 'روغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنی', 'IMG_20190211_162108.jpg', 50, 1, 0, 2),
(12, 'Ab goje', 25000, 'ریریر', 'IMG_20190211_162108.jpg', 300, 1, 0, 2),
(1, 'بخار شو', 23000000, 'بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو بخار شو ', 'IMG_20190211_162108.jpg', 10, 1, 0, 7),
(2, 'لوازم بخار شو', 100000, 'لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو لوازم بخار شو ', 'IMG_20190211_162129.jpg', 100, 1, 0, 7),
(3, 'بخاری برقی', 230400, 'بخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقیبخاری برقی بخاری برقی', 'IMG_20190211_162108.jpg', 20, 1, 0, 7),
(4, 'مانیتور رایانه', 10000000, 'مانیتور رایانه مانیتور رایانهمانیتور رایانه مانیتور رایانهمانیتور رایانه مانیتور رایانهمانیتور رایانه مانیتور رایانهمانیتور رایانه مانیتور رایانهمانیتور رایانه مانیتور رایانهمانیتور رایانه مانیتور رایانهمانیتور رایانه مانیتور رایانه', 'IMG_20190211_162108.jpg', 200, 1, 0, 7),
(5, 'روغن سرخ کردنی', 200000, 'روغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنیروغن سرخ کردنی', 'IMG_20190211_162108.jpg', 50, 1, 0, 2),
(6, 'رب گوجه', 25000, 'ریریر', 'IMG_20190211_162108.jpg', 300, 1, 0, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;