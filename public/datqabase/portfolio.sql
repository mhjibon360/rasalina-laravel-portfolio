-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 04:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_tab_groups`
--

CREATE TABLE IF NOT EXISTS `about_tab_groups` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tab_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_tab_groups`
--

INSERT INTO `about_tab_groups` (`id`, `tab_name`, `created_at`, `updated_at`) VALUES
(2, 'ABOUT', '2024-03-07 23:13:25', '2024-03-07 23:18:30'),
(3, 'SKILL', '2024-03-07 23:17:23', '2024-03-07 23:18:18'),
(4, 'AWARDS', '2024-03-07 23:17:46', NULL),
(5, 'EDUCATIONS', '2024-03-07 23:18:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `tags` mediumtext DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `details`, `image`, `slug`, `tags`, `view`, `status`, `created_at`, `updated_at`) VALUES
(3, 9, 'Laravel 10 Build Complete Learning Management System A-Z', '<div id=\"block-154224088\" class=\"course-block block banner  \">\r\n<section class=\"banner b-154224088-background_color\">\r\n<div class=\"bl\">\r\n<div class=\"banner__inner b-154224088-alignment b-154224088-bottom b-154224088-top b-154224088-content_width\">\r\n<div class=\"banner__heading-group heading-type-h1\">\r\n<div class=\"subheader b-154224088-subheading_text_color rich-text\" data-target=\"block.data.subheading_text\">\r\n<h4>In This Course, You Will Build Learning Management System Complete Project with Laravel 10 And Build It From Scratch</h4>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class=\"banner__button-wrapper\"><a href=\"https://easylearningbd.com/purchase?product_id=5192672\" target=\"_blank\" rel=\"noopener\"><button class=\"banner__button b-154224088-button_border_radius base-button\" data-target=\"block.data.button_text\">Enroll in Course for $̶1̶9̶9̶ $19.99</button></a></div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154224089\" class=\"course-block block video  \">\r\n<section class=\"container bl b-154224089-top b-154224089-bottom b-154224089-background_color\">\r\n<div class=\"block__video b-154224089-content_width\">\r\n<div class=\"block__video__text-wrapper rich-text\">\r\n<div class=\"block__video__heading_text b-154224089-heading_color\">\r\n<p class=\"ql-align-center\"><strong>CLEAR. CONCISE. COMPREHENSIVE.</strong></p>\r\n<h3><strong>Course&nbsp;Introduction</strong></h3>\r\n</div>\r\n</div>\r\n<div class=\"wistia_responsive_padding\">\r\n<div class=\"wistia_responsive_wrapper\">\r\n<div class=\"hotmart_video_player public-hotmart-video\" data-asset-id=\"1015050\" data-asset-type=\"video_asset\"><iframe class=\"_1jWb8 _13nB1\" title=\"Video Player\" src=\"https://player.hotmart.com/embed/WLajJ044Zk\" name=\"hotmart_embed\" frameborder=\"0\" scrolling=\"no\" allowfullscreen=\"allowfullscreen\" data-testid=\"embed-player\" data-mce-fragment=\"1\"></iframe></div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154224090\" class=\"course-block block video  \">\r\n<section class=\"container bl b-154224090-top b-154224090-bottom b-154224090-background_color\">\r\n<div class=\"block__video b-154224090-content_width\">\r\n<div class=\"block__video__text-wrapper rich-text\">\r\n<div class=\"block__video__heading_text b-154224090-heading_color\">\r\n<h3><strong>What You Will Build</strong></h3>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class=\"wistia_responsive_padding\">\r\n<div class=\"wistia_responsive_wrapper\">\r\n<div class=\"hotmart_video_player public-hotmart-video\" data-asset-id=\"1015052\" data-asset-type=\"video_asset\"><iframe class=\"_1jWb8 _13nB1\" title=\"Video Player\" src=\"https://player.hotmart.com/embed/QZPg9eByLw\" name=\"hotmart_embed\" frameborder=\"0\" scrolling=\"no\" allowfullscreen=\"allowfullscreen\" data-testid=\"embed-player\" data-mce-fragment=\"1\"></iframe></div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154224091\" class=\"course-block block text  \">\r\n<section class=\"container bl block__text rich-text b-154224091-top b-154224091-bottom b-154224091-background_color\">\r\n<div class=\"block__text-wrapper b-154224091-content_width b-154224091-heading_text_color b-154224091-text_color\" data-target=\"block.data.body\">\r\n<h3 class=\"ql-align-center\"><strong>Course</strong><strong>&nbsp;</strong><strong>Instructor</strong></h3>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154224092\" class=\"course-block block image_with_text  \">\r\n<section class=\"bl container block__image-with-text b-154224092-background_color b-154224092-top b-154224092-bottom b-154224092-gutter_width image-with-text-layout-left\">\r\n<div class=\"b-154224092-content_width block__image-with-text__wrapper b-154224092-heading_color b-154224092-text_color b-154224092-text_alignment\">\r\n<div class=\"block__image-with-text__inner block__image-with-text__image\"><img class=\"block__image-with-text__image b-154224092-image_border_radius image\" src=\"https://cdn.fs.teachablecdn.com/XaKrFcC1RzmBXhMb0qy2\" alt=\"\" data-target=\"block.data.image_url block.data.alt_text\" /></div>\r\n<div class=\"block__image-with-text__inner block__image-with-text__text-wrapper rich-text\">\r\n<div class=\"block__image-with-text__inner__heading\">\r\n<p>Are you ready to embark on an extraordinary learning journey that will transform your knowledge and skills? Look no further! I am thrilled to introduce myself as your<strong>&nbsp;best-selling online instructor.</strong></p>\r\n<p>With a track record of empowering<strong>&nbsp;</strong><strong>70+ thousands of students worldwide</strong>, I have cultivated a reputation as a leading expert in Laravel,React,Vuejs,MERN Stack.</p>\r\n<p><strong><em>Kazi Ariyan</em></strong></p>\r\n<p><strong><em>Founder Easylearning Academy</em></strong></p>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154224093\" class=\"course-block block text  \">\r\n<section class=\"container bl block__text rich-text b-154224093-top b-154224093-bottom b-154224093-background_color\">\r\n<div class=\"block__text-wrapper b-154224093-content_width b-154224093-heading_text_color b-154224093-text_color\" data-target=\"block.data.body\">\r\n<h4 class=\"ql-align-center\"><strong>5,750 Students</strong><strong>&nbsp;</strong><strong>are learning on Easy Learning today</strong></h4>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154224094\" class=\"course-block block image_with_text  \">\r\n<section class=\"bl container block__image-with-text b-154224094-background_color b-154224094-top b-154224094-bottom b-154224094-gutter_width image-with-text-layout-right\">\r\n<div class=\"b-154224094-content_width block__image-with-text__wrapper b-154224094-heading_color b-154224094-text_color b-154224094-text_alignment\">\r\n<div class=\"block__image-with-text__inner block__image-with-text__text-wrapper rich-text\">\r\n<div class=\"block__image-with-text__inner__heading\">\r\n<p><strong>MAIN FOCUS AREA</strong></p>\r\n<p>&nbsp;</p>\r\n<h3><strong>What we covered</strong></h3>\r\n<h5>✔️ BEGINNER TO PRO</h5>\r\n<h5>✔️ LIFETIME ACCESS</h5>\r\n<h5>✔️ 53.5 HOURS OF VIDEO</h5>\r\n<h5>✔️ 288 LESSONS&nbsp;</h5>\r\n<h5>✔️ ACCESS ON MOBILE/TV</h5>\r\n<h5>✔️ COMPLETE SOURCE CODE<br class=\"softbreak\" /><br class=\"softbreak\" /></h5>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class=\"block__image-with-text__inner block__image-with-text__image\"><img class=\"block__image-with-text__image b-154224094-image_border_radius image\" src=\"https://cdn.fs.teachablecdn.com/QUhq6PGjQqOcqj4iIUYQ\" alt=\"\" data-target=\"block.data.image_url block.data.alt_text\" /></div>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154224095\" class=\"course-block block text_with_image_grid  \">\r\n<section class=\"bl block__text-with-image-grid b-154224095-background_color b-154224095-top b-154224095-bottom b-154224095-text_alignment b-154224095-heading_text_color b-154224095-description_text_color block__columns-per-row--2 b-154224095-gutter_width\">\r\n<div class=\"block__columns b-154224095-content_width\">\r\n<div class=\"block__column\"><img class=\"block__text-with-image-grid__column__image b-154224095-image_border_radius\" src=\"https://cdn.fs.teachablecdn.com/Tckx9GSTk6AdXKEoHHba\" alt=\"\" />\r\n<div class=\"block__text-with-image-grid__column__heading-text rich-text\">\r\n<p><strong>HIGHLY PRACTICAL</strong></p>\r\n<p>&nbsp;</p>\r\n<h3><strong>What You\'ll Learn</strong></h3>\r\n<h5>✔️&nbsp;Complete Advance Project With Laravel 10<strong><br class=\"softbreak\" /></strong>✔️ Learning Management System Project A-Z<strong><br class=\"softbreak\" /></strong>✔️ Multi-Authentication as User-Instructor-Admin<strong><br class=\"softbreak\" /></strong>✔️ User Roles and Permission<strong><br class=\"softbreak\" /></strong>✔️ Course Review and Rating System<strong><br class=\"softbreak\" /></strong>✔️ Course Discount Price<strong><br class=\"softbreak\" /></strong>✔️ Multi Auth with Breeze Package<strong><br class=\"softbreak\" /></strong>✔️ Multiple Online Payment Getaway System<strong><br class=\"softbreak\" /></strong>✔️ Course Mailing System<strong><br class=\"softbreak\" /></strong>✔️ Live Chat System<strong><br class=\"softbreak\" /></strong>✔️ Generate Order Invoice in PDF<strong><br class=\"softbreak\" /></strong>✔️ Checkout Page Setup</h5>\r\n<h5>✔️ Course Wishlist Option</h5>\r\n<h5>✔️ Create Custom Pagination</h5>\r\n<p><br class=\"softbreak\" /><br class=\"softbreak\" /></p>\r\n</div>\r\n<div class=\"block__text-with-image-grid__column__body\">&nbsp;</div>\r\n</div>\r\n<div class=\"block__column\"><img class=\"block__text-with-image-grid__column__image b-154224095-image_border_radius\" src=\"https://cdn.fs.teachablecdn.com/688jAFISrGrt0FCMiBLw\" alt=\"\" />\r\n<div class=\"block__text-with-image-grid__column__heading-text rich-text\">\r\n<p><strong>TARGET STUDENT</strong></p>\r\n<p>&nbsp;</p>\r\n<h3><strong>Who Is This For?</strong></h3>\r\n<h5>✔️&nbsp;Who want to become Laravel Developer<strong><br class=\"softbreak\" /></strong>✔️&nbsp;Who want their PHP skills to another level<strong><br class=\"softbreak\" /></strong>✔️ University Project Assignment<strong><br class=\"softbreak\" /></strong>✔️ Add This Experience in Work Portfolio</h5>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>', 'upload/Blog/1792776206563920.png', 'laravel-10-build-complete-learning-management-system-a-z', 'Laravel ,Management', 1, 1, '2024-03-06 05:30:23', '2024-03-08 22:41:12'),
(4, 8, 'Laravel 10 Build Complete Hotel Booking Reservation System', '<div id=\"block-154223977\" class=\"course-block block banner  \">\r\n<section class=\"banner b-154223977-background_color\">\r\n<div class=\"bl\">\r\n<div class=\"banner__inner b-154223977-alignment b-154223977-bottom b-154223977-top b-154223977-content_width\">\r\n<div class=\"banner__heading-group heading-type-h4\">\r\n<div class=\"header b-154223977-heading_text_color rich-text\" data-target=\"block.data.heading_text\">\r\n<h1>Laravel 10 Build Complete Hotel Booking Reservation System</h1>\r\n<p>&nbsp;</p>\r\n<h4>In This Course, You Will Build Complete Hotel Booking and Reservation System with Laravel 10 And Build It From Scratch.</h4>\r\n</div>\r\n<div class=\"subheader b-154223977-subheading_text_color rich-text\" data-target=\"block.data.subheading_text\">\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class=\"banner__button-wrapper\"><a href=\"https://easylearningbd.com/purchase?product_id=5205854\" target=\"_blank\" rel=\"noopener\"><button class=\"banner__button b-154223977-button_border_radius base-button\" data-target=\"block.data.button_text\">Enroll in Course for $̶1̶9̶9̶ $19.99</button></a></div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154223978\" class=\"course-block block video  \">\r\n<section class=\"container bl b-154223978-top b-154223978-bottom b-154223978-background_color\">\r\n<div class=\"block__video b-154223978-content_width\">\r\n<div class=\"block__video__text-wrapper rich-text\">\r\n<div class=\"block__video__heading_text b-154223978-heading_color\">\r\n<p class=\"ql-align-center\"><strong>CLEAR. CONCISE. COMPREHENSIVE.</strong></p>\r\n<h3><strong>Course&nbsp;Introduction</strong></h3>\r\n</div>\r\n</div>\r\n<div class=\"wistia_responsive_padding\">\r\n<div class=\"wistia_responsive_wrapper\">\r\n<div class=\"hotmart_video_player public-hotmart-video\" data-asset-id=\"1017184\" data-asset-type=\"video_asset\"><iframe class=\"_1jWb8 _13nB1\" title=\"Video Player\" src=\"https://player.hotmart.com/embed/5Z191AxEZX\" name=\"hotmart_embed\" frameborder=\"0\" scrolling=\"no\" allowfullscreen=\"allowfullscreen\" data-testid=\"embed-player\" data-mce-fragment=\"1\"></iframe></div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154223979\" class=\"course-block block video  \">\r\n<section class=\"container bl b-154223979-top b-154223979-bottom b-154223979-background_color\">\r\n<div class=\"block__video b-154223979-content_width\">\r\n<div class=\"block__video__text-wrapper rich-text\">\r\n<div class=\"block__video__heading_text b-154223979-heading_color\">\r\n<h3><strong>What You Will Build</strong></h3>\r\n</div>\r\n</div>\r\n<div class=\"wistia_responsive_padding\">\r\n<div class=\"wistia_responsive_wrapper\">\r\n<div class=\"hotmart_video_player public-hotmart-video\" data-asset-id=\"1017185\" data-asset-type=\"video_asset\"><iframe class=\"_1jWb8 _13nB1\" title=\"Video Player\" src=\"https://player.hotmart.com/embed/vqna7dprR3\" name=\"hotmart_embed\" frameborder=\"0\" scrolling=\"no\" allowfullscreen=\"allowfullscreen\" data-testid=\"embed-player\" data-mce-fragment=\"1\"></iframe></div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154223980\" class=\"course-block block text  \">\r\n<section class=\"container bl block__text rich-text b-154223980-top b-154223980-bottom b-154223980-background_color\">\r\n<div class=\"block__text-wrapper b-154223980-content_width b-154223980-heading_text_color b-154223980-text_color\" data-target=\"block.data.body\">\r\n<h3 class=\"ql-align-center\"><strong>Course</strong><strong>&nbsp;</strong><strong>Instructor</strong></h3>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154223981\" class=\"course-block block image_with_text  \">\r\n<section class=\"bl container block__image-with-text b-154223981-background_color b-154223981-top b-154223981-bottom b-154223981-gutter_width image-with-text-layout-left\">\r\n<div class=\"b-154223981-content_width block__image-with-text__wrapper b-154223981-heading_color b-154223981-text_color b-154223981-text_alignment\">\r\n<div class=\"block__image-with-text__inner block__image-with-text__image\"><img class=\"block__image-with-text__image b-154223981-image_border_radius image\" src=\"https://cdn.fs.teachablecdn.com/oGShJKK1RCC8YrGzGYyp\" alt=\"\" data-target=\"block.data.image_url block.data.alt_text\" /></div>\r\n<div class=\"block__image-with-text__inner block__image-with-text__text-wrapper rich-text\">\r\n<div class=\"block__image-with-text__inner__heading\">\r\n<p>Are you ready to embark on an extraordinary learning journey that will transform your knowledge and skills? Look no further! I am thrilled to introduce myself as your<strong>&nbsp;best-selling online instructor.</strong></p>\r\n<p>With a track record of empowering<strong>&nbsp;</strong><strong>70+ thousands of students worldwide</strong>, I have cultivated a reputation as a leading expert in Laravel,React,Vuejs,MERN Stack.</p>\r\n<p><strong><em>Kazi Ariyan</em></strong></p>\r\n<p><strong><em>Founder Easylearning Academy</em></strong></p>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154223982\" class=\"course-block block text  \">\r\n<section class=\"container bl block__text rich-text b-154223982-top b-154223982-bottom b-154223982-background_color\">\r\n<div class=\"block__text-wrapper b-154223982-content_width b-154223982-heading_text_color b-154223982-text_color\" data-target=\"block.data.body\">\r\n<h4 class=\"ql-align-center\"><strong>5,750 Students</strong><strong>&nbsp;</strong><strong>are learning on Easy Learning today</strong></h4>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154223983\" class=\"course-block block image_with_text  \">\r\n<section class=\"bl container block__image-with-text b-154223983-background_color b-154223983-top b-154223983-bottom b-154223983-gutter_width image-with-text-layout-right\">\r\n<div class=\"b-154223983-content_width block__image-with-text__wrapper b-154223983-heading_color b-154223983-text_color b-154223983-text_alignment\">\r\n<div class=\"block__image-with-text__inner block__image-with-text__text-wrapper rich-text\">\r\n<div class=\"block__image-with-text__inner__heading\">\r\n<p><strong>MAIN FOCUS AREA</strong></p>\r\n<p>&nbsp;</p>\r\n<h3><strong>What we covered<br class=\"softbreak\" /></strong></h3>\r\n<h5>✔️ BEGINNER TO PRO</h5>\r\n<h5>✔️ LIFETIME ACCESS</h5>\r\n<h5>✔️ 40.5 HOURS OF VIDEO</h5>\r\n<h5>✔️ 221 LESSONS&nbsp;</h5>\r\n<h5>✔️ ACCESS ON MOBILE/TV</h5>\r\n<h5>✔️ COMPLETE SOURCE CODE<strong><br class=\"softbreak\" /></strong><strong><br class=\"softbreak\" /></strong></h5>\r\n<p><br class=\"softbreak\" /><br class=\"softbreak\" /></p>\r\n</div>\r\n</div>\r\n<div class=\"block__image-with-text__inner block__image-with-text__image\"><img class=\"block__image-with-text__image b-154223983-image_border_radius image\" src=\"https://cdn.fs.teachablecdn.com/riay3zwuRpegPJnDaxte\" alt=\"\" data-target=\"block.data.image_url block.data.alt_text\" /></div>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154223984\" class=\"course-block block text_with_image_grid  \">\r\n<section class=\"bl block__text-with-image-grid b-154223984-background_color b-154223984-top b-154223984-bottom b-154223984-text_alignment b-154223984-heading_text_color b-154223984-description_text_color block__columns-per-row--2 b-154223984-gutter_width\">\r\n<div class=\"block__columns b-154223984-content_width\">\r\n<div class=\"block__column\"><img class=\"block__text-with-image-grid__column__image b-154223984-image_border_radius\" src=\"https://cdn.fs.teachablecdn.com/fCMArhbTRO6Lr0vPiIKs\" alt=\"\" />\r\n<div class=\"block__text-with-image-grid__column__heading-text rich-text\">\r\n<p><strong>HIGHLY PRACTICAL</strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h3><strong>What You\'ll Learn</strong></h3>\r\n<h5>✔️&nbsp;Complete Advance Project With Laravel 10<strong><br class=\"softbreak\" /></strong>✔️ &nbsp;Hotel Booking Reservation System Project<strong><br class=\"softbreak\" /></strong>✔️ User Role Management<strong><br class=\"softbreak\" /></strong>✔️ Multi-Authentication as User-Admin<strong><br class=\"softbreak\" /></strong>✔️ Multiple Payment Method Like COD and Stripe<strong><br class=\"softbreak\" /></strong>✔️ Manage Room Inventory<strong><br class=\"softbreak\" /></strong>✔️ Manual Booking and Online Booking System<strong><br class=\"softbreak\" /></strong>✔️ Booking Notification with Real Time<strong><br class=\"softbreak\" /></strong>✔️ Manage Reservation Inventory<strong><br class=\"softbreak\" /></strong>✔️ Import and Export From Excel File<strong><br class=\"softbreak\" /></strong>✔️ Booking Report System<strong><br class=\"softbreak\" /></strong>✔️ Advance Room Search Option</h5>\r\n<h5>✔️ Online Booking Reservation</h5>\r\n<h5>✔️ Room Availability Management</h5>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>', 'upload/Blog/1792776332621524.png', 'laravel-10-build-complete-hotel-booking-reservation-system', 'Laravel ,System,Booking ,Hotel', 1, 1, '2024-03-06 05:32:23', '2024-03-08 22:38:57'),
(5, 10, 'Laravel 10 - Build Real Estate Property Listing Project A-Z', '<div id=\"block-154223194\" class=\"course-block block banner  \">\r\n<section class=\"banner b-154223194-background_color\">\r\n<div class=\"bl\">\r\n<div class=\"banner__inner b-154223194-alignment b-154223194-bottom b-154223194-top b-154223194-content_width\">\r\n<div class=\"banner__heading-group heading-type-h1\">\r\n<div class=\"header b-154223194-heading_text_color rich-text\" data-target=\"block.data.heading_text\">\r\n<h1>Laravel 10 - Build Real Estate Property Listing Project A-Z</h1>\r\n<p><br class=\"softbreak\" /><br class=\"softbreak\" /></p>\r\n</div>\r\n<div class=\"subheader b-154223194-subheading_text_color rich-text\" data-target=\"block.data.subheading_text\">\r\n<h4>In This Course, You Will Build Real Estate Property Listing Complete Project with Laravel 10 And Build It From Scratch</h4>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class=\"banner__button-wrapper\"><a href=\"https://easylearningbd.com/purchase?product_id=4768655\" target=\"_blank\" rel=\"noopener\"><button class=\"banner__button b-154223194-button_border_radius base-button\" data-target=\"block.data.button_text\">Enroll in Course for $̶1̶9̶9̶ $19.99</button></a></div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154223195\" class=\"course-block block video  \">\r\n<section class=\"container bl b-154223195-top b-154223195-bottom b-154223195-background_color\">\r\n<div class=\"block__video b-154223195-content_width\">\r\n<div class=\"block__video__text-wrapper rich-text\">\r\n<div class=\"block__video__heading_text b-154223195-heading_color\">\r\n<p class=\"ql-align-center\"><strong>CLEAR. CONCISE. COMPREHENSIVE.</strong></p>\r\n<h3><strong>Course&nbsp;Introduction</strong></h3>\r\n</div>\r\n</div>\r\n<div class=\"wistia_responsive_padding\">\r\n<div class=\"wistia_responsive_wrapper\">\r\n<div class=\"hotmart_video_player public-hotmart-video\" data-asset-id=\"761798\" data-asset-type=\"video_asset\"><iframe class=\"_1jWb8 _13nB1\" title=\"Video Player\" src=\"https://player.hotmart.com/embed/3RG43AlBq4\" name=\"hotmart_embed\" frameborder=\"0\" scrolling=\"no\" allowfullscreen=\"allowfullscreen\" data-testid=\"embed-player\" data-mce-fragment=\"1\"></iframe></div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154223196\" class=\"course-block block video  \">\r\n<section class=\"container bl b-154223196-top b-154223196-bottom b-154223196-background_color\">\r\n<div class=\"block__video b-154223196-content_width\">\r\n<div class=\"block__video__text-wrapper rich-text\">\r\n<div class=\"block__video__heading_text b-154223196-heading_color\">\r\n<h3><strong>What You Will Build</strong></h3>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<div class=\"wistia_responsive_padding\">\r\n<div class=\"wistia_responsive_wrapper\">\r\n<div class=\"hotmart_video_player public-hotmart-video\" data-asset-id=\"761403\" data-asset-type=\"video_asset\"><iframe class=\"_1jWb8 _13nB1\" title=\"Video Player\" src=\"https://player.hotmart.com/embed/Pq9V0M8GLO\" name=\"hotmart_embed\" frameborder=\"0\" scrolling=\"no\" allowfullscreen=\"allowfullscreen\" data-testid=\"embed-player\" data-mce-fragment=\"1\"></iframe></div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154223197\" class=\"course-block block text  \">\r\n<section class=\"container bl block__text rich-text b-154223197-top b-154223197-bottom b-154223197-background_color\">\r\n<div class=\"block__text-wrapper b-154223197-content_width b-154223197-heading_text_color b-154223197-text_color\" data-target=\"block.data.body\">\r\n<h3 class=\"ql-align-center\"><strong>Course</strong><strong>&nbsp;</strong><strong>Instructor</strong></h3>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154223198\" class=\"course-block block image_with_text  \">\r\n<section class=\"bl container block__image-with-text b-154223198-background_color b-154223198-top b-154223198-bottom b-154223198-gutter_width image-with-text-layout-left\">\r\n<div class=\"b-154223198-content_width block__image-with-text__wrapper b-154223198-heading_color b-154223198-text_color b-154223198-text_alignment\">\r\n<div class=\"block__image-with-text__inner block__image-with-text__image\"><img class=\"block__image-with-text__image b-154223198-image_border_radius image\" src=\"https://cdn.fs.teachablecdn.com/RUnKAJj3TJKdQd7SAWGm\" alt=\"\" data-target=\"block.data.image_url block.data.alt_text\" /></div>\r\n<div class=\"block__image-with-text__inner block__image-with-text__text-wrapper rich-text\">\r\n<div class=\"block__image-with-text__inner__heading\">\r\n<p>Are you ready to embark on an extraordinary learning journey that will transform your knowledge and skills? Look no further! I am thrilled to introduce myself as your<strong>&nbsp;best-selling online instructor.</strong></p>\r\n<p>With a track record of empowering<strong>&nbsp;</strong><strong>70+ thousands of students worldwide</strong>, I have cultivated a reputation as a leading expert in Laravel,React,Vuejs,MERN Stack.</p>\r\n<p><strong><em>Kazi Ariyan</em></strong></p>\r\n<p><strong><em>Founder Easylearning Academy</em></strong></p>\r\n</div>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154223199\" class=\"course-block block text  \">\r\n<section class=\"container bl block__text rich-text b-154223199-top b-154223199-bottom b-154223199-background_color\">\r\n<div class=\"block__text-wrapper b-154223199-content_width b-154223199-heading_text_color b-154223199-text_color\" data-target=\"block.data.body\">\r\n<h4 class=\"ql-align-center\"><strong>5,750 Students</strong><strong>&nbsp;</strong><strong>are learning on Easy Learning today</strong></h4>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154223200\" class=\"course-block block image_with_text  \">\r\n<section class=\"bl container block__image-with-text b-154223200-background_color b-154223200-top b-154223200-bottom b-154223200-gutter_width image-with-text-layout-right\">\r\n<div class=\"b-154223200-content_width block__image-with-text__wrapper b-154223200-heading_color b-154223200-text_color b-154223200-text_alignment\">\r\n<div class=\"block__image-with-text__inner block__image-with-text__text-wrapper rich-text\">\r\n<div class=\"block__image-with-text__inner__heading\">\r\n<p><strong>MAIN FOCUS AREA</strong></p>\r\n<h3><strong>What we covered</strong></h3>\r\n<h5>✔️ BEGINNER TO PRO</h5>\r\n<h5>✔️ LIFETIME ACCESS</h5>\r\n<h5>✔️ 45.5 HOURS OF VIDEO</h5>\r\n<h5>✔️ 248 LESSONS&nbsp;</h5>\r\n<h5>✔️ ACCESS ON MOBILE/TV</h5>\r\n<h5>✔️ COMPLETE SOURCE CODE<br class=\"softbreak\" /><br class=\"softbreak\" /></h5>\r\n</div>\r\n</div>\r\n<div class=\"block__image-with-text__inner block__image-with-text__image\"><img class=\"block__image-with-text__image b-154223200-image_border_radius image\" src=\"https://cdn.fs.teachablecdn.com/spKeHT6iUKAVw7NuPGQy\" alt=\"\" data-target=\"block.data.image_url block.data.alt_text\" /></div>\r\n</div>\r\n</section>\r\n</div>\r\n<div id=\"block-154223201\" class=\"course-block block text_with_image_grid  \">\r\n<section class=\"bl block__text-with-image-grid b-154223201-background_color b-154223201-top b-154223201-bottom b-154223201-text_alignment b-154223201-heading_text_color b-154223201-description_text_color block__columns-per-row--2 b-154223201-gutter_width\">\r\n<div class=\"block__columns b-154223201-content_width\">\r\n<div class=\"block__column\"><img class=\"block__text-with-image-grid__column__image b-154223201-image_border_radius\" src=\"https://cdn.fs.teachablecdn.com/t6zgpso1SgWyN4oDnPkN\" alt=\"\" />\r\n<div class=\"block__text-with-image-grid__column__heading-text rich-text\">\r\n<p><strong>HIGHLY PRACTICAL</strong></p>\r\n<p>&nbsp;</p>\r\n<h3><strong>What You\'ll Learn</strong></h3>\r\n<h5>✔️&nbsp;Multi-Authentication as User-Agent-Admin<strong><br class=\"softbreak\" /></strong>✔️ Advance Property Search Option<strong><br class=\"softbreak\" /></strong>✔️ Multi-Authentication as User-Agent-Admin<strong><br class=\"softbreak\" /></strong>✔️ User Roles and Permission<strong><br class=\"softbreak\" /></strong>✔️ Property Mailing System<strong><br class=\"softbreak\" /></strong>✔️ Property Wishlist Option<strong><br class=\"softbreak\" /></strong>✔️ Property Compare Option<strong><br class=\"softbreak\" /></strong>✔️ Advance JavaScript Uses<strong><br class=\"softbreak\" /></strong>✔️ Site Setting Option<strong><br class=\"softbreak\" /></strong>✔️ Live Chat System<strong><br class=\"softbreak\" /></strong>✔️ Generate Order Invoice in PDF<strong><br class=\"softbreak\" /></strong>✔️ Property Packages Seal</h5>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n</div>', 'upload/Blog/1792776424835645.png', 'laravel-10-build-real-estate-property-listing-project-a-z', 'Real Estate Property Listing,laravel', 2, 1, '2024-03-06 05:33:51', '2024-03-08 22:40:17');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'WEB DESIGN', 'web-design', '2024-03-06 03:53:44', NULL),
(4, 'GRAPHICS DESIGN', 'graphics-design', '2024-03-06 03:53:58', NULL),
(5, 'UI/UX DESIGN', 'uiux-design', '2024-03-06 03:54:12', NULL),
(6, 'APPS DEVELOPMENT', 'apps-development', '2024-03-06 03:54:27', NULL),
(7, 'WEB DEVELOPMENT', 'web-development', '2024-03-06 03:54:37', NULL),
(8, 'laravel 10', 'laravel', '2024-03-06 05:27:53', NULL),
(9, 'php', 'php', '2024-03-06 05:28:02', NULL),
(10, 'html', 'html', '2024-03-06 05:28:12', NULL),
(11, 'css', 'css', '2024-03-06 05:28:20', NULL),
(12, 'javascript', 'javascript', '2024-03-06 05:28:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_feedback`
--

CREATE TABLE IF NOT EXISTS `client_feedback` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `comment` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_feedback`
--

INSERT INTO `client_feedback` (`id`, `name`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Cadman Nash', 'We are motivated by the satisfaction of our clients. Put your trust in us\r\n                                            &amp;share in our H.Spond Asset Management is made up of a team of expert,\r\n                                            committed and experienced people with a passion for financial markets. Our\r\n                                            goal is to achieve continuous.', 1, '2024-03-06 02:35:12', '2024-03-06 02:51:04'),
(3, 'Rasalina De Wiliamson', 'We are motivated by the satisfaction of our clients. Put your trust in us\r\n                                            &amp;share in our H.Spond Asset Management is made up of a team of expert,\r\n                                            committed and experienced people with a passion for financial markets. Our\r\n                                            goal is to achieve continuous.', 1, '2024-03-06 02:48:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_multi_images`
--

CREATE TABLE IF NOT EXISTS `client_multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_multi_images`
--

INSERT INTO `client_multi_images` (`id`, `image_name`, `status`, `created_at`, `updated_at`) VALUES
(3, 'upload/Client/1792767355499502.png', 1, '2024-03-06 03:09:42', NULL),
(4, 'upload/Client/1792767355526294.png', 1, '2024-03-06 03:09:42', NULL),
(5, 'upload/Client/1792767355541000.png', 1, '2024-03-06 03:09:42', NULL),
(6, 'upload/Client/1792767355556068.png', 1, '2024-03-06 03:09:42', NULL),
(7, 'upload/Client/1792767355566039.png', 1, '2024-03-06 03:09:42', NULL),
(8, 'upload/Client/1792767355578951.png', 1, '2024-03-06 03:09:42', NULL),
(9, 'upload/Client/1792767355591479.png', 1, '2024-03-06 03:09:42', NULL),
(10, 'upload/Client/1792767355609437.png', 1, '2024-03-06 03:09:42', NULL),
(11, 'upload/Client/1792767355623390.png', 1, '2024-03-06 03:09:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_locations`
--

CREATE TABLE IF NOT EXISTS `contact_locations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `map_link` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_locations`
--

INSERT INTO `contact_locations` (`id`, `map_link`, `created_at`, `updated_at`) VALUES
(1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14372.438092955812!2d89.21321242307137!3d25.766945736542212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e331ede2d70f51%3A0xe0a9a8a0cbb0b156!2sRangpur%20Medical%20College%20and%20Hospital!5e0!3m2!1sen!2sbd!4v1709957842939!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, '2024-03-08 22:17:31');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `creative_work_captions`
--

CREATE TABLE IF NOT EXISTS `creative_work_captions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `creative_work_captions`
--

INSERT INTO `creative_work_captions` (`id`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, '06 - CLIENT FEEDBACK', 'Happy clients feedback', NULL, '2024-03-06 00:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_captions`
--

CREATE TABLE IF NOT EXISTS `feedback_captions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback_captions`
--

INSERT INTO `feedback_captions` (`id`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, '06 - CLIENT FEEDBACK', 'Happy clients feedback', NULL, '2024-03-06 01:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE IF NOT EXISTS `footers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `contact_title` varchar(255) DEFAULT NULL,
  `contact_number` varchar(255) DEFAULT NULL,
  `contact_details` varchar(255) DEFAULT NULL,
  `address_title` varchar(255) DEFAULT NULL,
  `address_name` varchar(255) DEFAULT NULL,
  `address_location` varchar(255) DEFAULT NULL,
  `address_email` varchar(255) DEFAULT NULL,
  `follow_title` varchar(255) DEFAULT NULL,
  `follow_big_title` varchar(255) DEFAULT NULL,
  `follow_details` varchar(255) DEFAULT NULL,
  `footer_title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `contact_title`, `contact_number`, `contact_details`, `address_title`, `address_name`, `address_location`, `address_email`, `follow_title`, `follow_big_title`, `follow_details`, `footer_title`, `created_at`, `updated_at`) VALUES
(1, 'CONTACT US', '+8801873593399', 'There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form is also here.', 'fsaf', 'AUSTRALIA', 'Level 13, 2 Elizabeth Steereyt set Melbourne, Victoria 3000', 'mjjibon114@gmail.com', 'FOLLOW ME', 'SOCIALLY CONNECT', 'Lorem ipsum dolor sit amet enim.\r\nEtiam ullamcorper.', '<p>Copyright &copy; <span class=\" text-white\">MH  Jibon</span> 2024 All right Reserved</p>', NULL, '2024-03-07 22:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `home_abouts`
--

CREATE TABLE IF NOT EXISTS `home_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `small_title` varchar(255) DEFAULT NULL,
  `title` mediumtext DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `experience_title` mediumtext DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `cv` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_abouts`
--

INSERT INTO `home_abouts` (`id`, `small_title`, `title`, `logo`, `experience_title`, `details`, `cv`, `created_at`, `updated_at`) VALUES
(1, '01 - ABOUT ME', 'I have transform your ideas into remarkable digital products', 'upload/HomeAbout/Logo/1792664192267015.png', '20+ Years Experience In this game, Means Product Designing', 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer', 'upload/HomeAbout/Cv/1792931653964447.docx', NULL, '2024-03-07 22:41:09');

-- --------------------------------------------------------

--
-- Table structure for table `home_heroes`
--

CREATE TABLE IF NOT EXISTS `home_heroes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` mediumtext DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `view_link` mediumtext DEFAULT NULL,
  `image` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_heroes`
--

INSERT INTO `home_heroes` (`id`, `title`, `details`, `button_text`, `view_link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'I will give you Best Product in the shortest time.', 'I\'m a Rasalina based product design & visual designer focused on crafting clean & user‑friendly experiences', 'More About', 'https://www.youtube.com/watch?v=jBKU32uqgLk', 'upload/Homeprofile/1792776669309570.png', NULL, '2024-03-06 05:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `home_multi_images`
--

CREATE TABLE IF NOT EXISTS `home_multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_multi_images`
--

INSERT INTO `home_multi_images` (`id`, `image_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'upload/HomeAboutMultiimage/1792664065564277.png', 1, '2024-03-04 23:47:57', NULL),
(2, 'upload/HomeAboutMultiimage/1792664065597429.png', 1, '2024-03-04 23:47:57', NULL),
(3, 'upload/HomeAboutMultiimage/1792664065610455.png', 1, '2024-03-04 23:47:57', NULL),
(4, 'upload/HomeAboutMultiimage/1792664065627564.png', 1, '2024-03-04 23:47:57', NULL),
(5, 'upload/HomeAboutMultiimage/1792664065639594.png', 1, '2024-03-04 23:47:57', NULL),
(6, 'upload/HomeAboutMultiimage/1792664065657582.png', 1, '2024-03-04 23:47:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_28_132125_create_home_heroes_table', 1),
(6, '2024_02_29_051334_create_home_multi_images_table', 1),
(7, '2024_03_02_045812_create_home_abouts_table', 1),
(8, '2024_03_02_065856_create_services_captions_table', 1),
(9, '2024_03_02_071514_create_services_table', 1),
(10, '2024_03_04_162804_create_work_process_captions_table', 1),
(11, '2024_03_04_163857_create_workings_table', 1),
(12, '2024_03_04_174047_create_creative_work_captions_table', 1),
(13, '2024_03_04_175042_create_portfolio_categories_table', 1),
(14, '2024_03_04_182239_create_portfolios_table', 1),
(15, '2024_03_05_111213_create_partners_multi_images_table', 2),
(16, '2024_03_06_062734_create_partners_table', 3),
(17, '2024_03_06_064546_create_feedback_captions_table', 4),
(18, '2024_03_06_065713_create_client_feedback_table', 5),
(19, '2024_03_06_085215_create_client_multi_images_table', 6),
(20, '2024_03_06_093344_create_blog_categories_table', 7),
(22, '2024_03_06_095847_create_blogs_table', 8),
(23, '2024_03_08_032149_create_footers_table', 9),
(24, '2024_03_08_045750_create_about_tab_groups_table', 10),
(25, '2024_03_09_033353_create_contact_locations_table', 11),
(26, '2024_03_09_044359_create_contact_messages_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `small_title` varchar(255) DEFAULT NULL,
  `title` mediumtext DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `small_title`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, '05 - PARTNERS', 'I proud to have collaborated with some awesome companies', 'I\'m a bit of a digital product junky. Over the years, I\'ve used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own.', '2024-03-13 06:38:20', '2024-03-06 00:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `partners_multi_images`
--

CREATE TABLE IF NOT EXISTS `partners_multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners_multi_images`
--

INSERT INTO `partners_multi_images` (`id`, `image_name`, `status`, `created_at`, `updated_at`) VALUES
(3, 'upload/Partners/1792754935138021.png', 1, '2024-03-05 23:52:17', '2024-03-05 23:53:59'),
(4, 'upload/Partners/1792754935160735.png', 1, '2024-03-05 23:52:17', NULL),
(5, 'upload/Partners/1792754935183167.png', 1, '2024-03-05 23:52:17', '2024-03-05 23:54:29'),
(6, 'upload/Partners/1792754935207580.png', 1, '2024-03-05 23:52:17', '2024-03-05 23:54:34'),
(7, 'upload/Partners/1792754935219925.png', 1, '2024-03-05 23:52:17', NULL),
(8, 'upload/Partners/1792754935237613.png', 1, '2024-03-05 23:52:17', NULL),
(9, 'upload/Partners/1792754935259466.png', 0, '2024-03-05 23:52:17', '2024-03-06 03:27:57'),
(10, 'upload/Partners/1792754935274753.png', 0, '2024-03-05 23:52:17', '2024-03-06 03:28:24'),
(11, 'upload/Partners/1792754935300498.png', 0, '2024-03-05 23:52:17', '2024-03-06 03:28:54'),
(12, 'upload/Partners/1792755482085377.png', 0, '2024-03-05 23:52:17', '2024-03-06 03:29:18'),
(13, 'upload/Partners/1792754935335904.png', 0, '2024-03-05 23:52:17', '2024-03-06 03:29:43'),
(14, 'upload/Partners/1792754935352579.png', 0, '2024-03-05 23:52:17', '2024-03-06 03:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `category_id`, `title`, `details`, `image`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Web Development', '<h2 class=\"title\">Rixelda - 24 hours Control room landing page</h2>\r\n<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>\r\n<div class=\"services__details__img\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details02.jpg\" alt=\"\" /></div>\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details03.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<h2 class=\"small-title\">Nature of Business Strategy</h2>\r\n<p>A business strategy is a combination of proactive actions on the part of management, for the purpose of enhancing the company&rsquo;s market position and overall performance and reactions to unexpected developments and new market.</p>\r\n<p>The maximum part of the company&rsquo;s present strategy is a result of formerly initiated actions and business approaches, but when market conditions take an unanticipated turn, the company requires a strategic reaction to cope with contingencies. Hence, for unforeseen development, a part of the business strategy is formulated as a reasoned response nature of business strategy.</p>', 'upload/portfolio/1792665328083139.jpg', 'Web Development', 1, '2024-03-05 00:08:01', NULL),
(2, 1, 'Web Development', '<h2 class=\"title\">Rixelda - 24 hours Control room landing page</h2>\r\n<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>\r\n<div class=\"services__details__img\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details02.jpg\" alt=\"\" /></div>\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details03.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<h2 class=\"small-title\">Nature of Business Strategy</h2>\r\n<p>A business strategy is a combination of proactive actions on the part of management, for the purpose of enhancing the company&rsquo;s market position and overall performance and reactions to unexpected developments and new market.</p>\r\n<p>The maximum part of the company&rsquo;s present strategy is a result of formerly initiated actions and business approaches, but when market conditions take an unanticipated turn, the company requires a strategic reaction to cope with contingencies. Hence, for unforeseen development, a part of the business strategy is formulated as a reasoned response nature of business strategy.</p>', 'upload/portfolio/1792665410427579.jpg', 'Web Development', 1, '2024-03-05 00:09:19', NULL),
(3, 2, 'Apps Design', '<h2 class=\"title\">Rixelda - 24 hours Control room landing page</h2>\r\n<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>\r\n<div class=\"services__details__img\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details02.jpg\" alt=\"\" /></div>\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details03.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<h2 class=\"small-title\">Nature of Business Strategy</h2>\r\n<p>A business strategy is a combination of proactive actions on the part of management, for the purpose of enhancing the company&rsquo;s market position and overall performance and reactions to unexpected developments and new market.</p>\r\n<p>The maximum part of the company&rsquo;s present strategy is a result of formerly initiated actions and business approaches, but when market conditions take an unanticipated turn, the company requires a strategic reaction to cope with contingencies. Hence, for unforeseen development, a part of the business strategy is formulated as a reasoned response nature of business strategy.</p>', 'upload/portfolio/1792665466997219.jpg', 'Web Development', 1, '2024-03-05 00:10:13', NULL),
(4, 5, 'Web Development', '<h2 class=\"title\">Rixelda - 24 hours Control room landing page</h2>\r\n<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>\r\n<div class=\"services__details__img\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details02.jpg\" alt=\"\" /></div>\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details03.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<h2 class=\"small-title\">Nature of Business Strategy</h2>\r\n<p>A business strategy is a combination of proactive actions on the part of management, for the purpose of enhancing the company&rsquo;s market position and overall performance and reactions to unexpected developments and new market.</p>\r\n<p>The maximum part of the company&rsquo;s present strategy is a result of formerly initiated actions and business approaches, but when market conditions take an unanticipated turn, the company requires a strategic reaction to cope with contingencies. Hence, for unforeseen development, a part of the business strategy is formulated as a reasoned response nature of business strategy.</p>', 'upload/portfolio/1792665531969222.jpg', 'Web Development', 1, '2024-03-05 00:11:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE IF NOT EXISTS `portfolio_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'WEBSITE', '', '2024-03-05 00:03:56', NULL),
(2, 'MOBILE APPS', '', '2024-03-05 00:04:04', NULL),
(3, 'DASHBOARD', '', '2024-03-05 00:04:16', NULL),
(5, 'LANDING PAGE', '', '2024-03-05 00:04:33', NULL),
(6, 'BRANDING', '', '2024-03-05 00:04:42', NULL),
(7, 'GRAPHIC DESIGN', '', '2024-03-05 00:04:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `thumbnail_image` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `thumbnail_image`, `icon`, `title`, `details`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'upload/Services/1792664747623735.jpg', 'upload/Services/1792664747627306.png', 'Brand Strategy', '<h2 class=\"title\">We Solve Business Strategy Problem</h2>\r\n<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>\r\n<div class=\"services__details__img\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details02.jpg\" alt=\"\" /></div>\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details03.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<h2 class=\"small-title\">Nature of Business Strategy</h2>\r\n<p>A business strategy is a combination of proactive actions on the part of management, for the purpose of enhancing the company&rsquo;s market position and overall performance and reactions to unexpected developments and new market.</p>\r\n<p>The maximum part of the company&rsquo;s present strategy is a result of formerly initiated actions and business approaches, but when market conditions take an unanticipated turn, the company requires a strategic reaction to cope with contingencies. Hence, for unforeseen development, a part of the business strategy is formulated as a reasoned response nature of business strategy.</p>', 'brand-strategy', 0, '2024-03-04 23:58:47', '2024-03-06 02:44:26'),
(3, 'upload/Services/1792664788176453.jpg', 'upload/Services/1792664788177562.png', 'Product Design', '<h2 class=\"title\">We Solve Business Strategy Problem</h2>\r\n<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>\r\n<div class=\"services__details__img\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details02.jpg\" alt=\"\" /></div>\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details03.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<h2 class=\"small-title\">Nature of Business Strategy</h2>\r\n<p>A business strategy is a combination of proactive actions on the part of management, for the purpose of enhancing the company&rsquo;s market position and overall performance and reactions to unexpected developments and new market.</p>\r\n<p>The maximum part of the company&rsquo;s present strategy is a result of formerly initiated actions and business approaches, but when market conditions take an unanticipated turn, the company requires a strategic reaction to cope with contingencies. Hence, for unforeseen development, a part of the business strategy is formulated as a reasoned response nature of business strategy.</p>', 'product-design', 1, '2024-03-04 23:59:26', NULL),
(4, 'upload/Services/1792664833306379.jpg', 'upload/Services/1792664833307571.png', 'Visual Design', '<h2 class=\"title\">We Solve Business Strategy Problem</h2>\r\n<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>\r\n<div class=\"services__details__img\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details02.jpg\" alt=\"\" /></div>\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details03.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<h2 class=\"small-title\">Nature of Business Strategy</h2>\r\n<p>A business strategy is a combination of proactive actions on the part of management, for the purpose of enhancing the company&rsquo;s market position and overall performance and reactions to unexpected developments and new market.</p>\r\n<p>The maximum part of the company&rsquo;s present strategy is a result of formerly initiated actions and business approaches, but when market conditions take an unanticipated turn, the company requires a strategic reaction to cope with contingencies. Hence, for unforeseen development, a part of the business strategy is formulated as a reasoned response nature of business strategy.</p>', 'visual-design', 1, '2024-03-05 00:00:09', NULL),
(5, 'upload/Services/1792664891067705.jpg', 'upload/Services/1792664891069490.png', 'Web Development', '<h2 class=\"title\">We Solve Business Strategy Problem</h2>\r\n<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>\r\n<div class=\"services__details__img\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details02.jpg\" alt=\"\" /></div>\r\n<div class=\"col-sm-6\"><img src=\"assets/img/images/services_details03.jpg\" alt=\"\" /></div>\r\n</div>\r\n</div>\r\n<h2 class=\"small-title\">Nature of Business Strategy</h2>\r\n<p>A business strategy is a combination of proactive actions on the part of management, for the purpose of enhancing the company&rsquo;s market position and overall performance and reactions to unexpected developments and new market.</p>\r\n<p>The maximum part of the company&rsquo;s present strategy is a result of formerly initiated actions and business approaches, but when market conditions take an unanticipated turn, the company requires a strategic reaction to cope with contingencies. Hence, for unforeseen development, a part of the business strategy is formulated as a reasoned response nature of business strategy.</p>', 'web-development', 1, '2024-03-05 00:01:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services_captions`
--

CREATE TABLE IF NOT EXISTS `services_captions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_captions`
--

INSERT INTO `services_captions` (`id`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, '02 - MY SERVICES', 'Creates amazing digital experiences', NULL, '2024-03-06 01:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `image`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mehedi', 'mjjibon114@gmail.com', '01873593399', NULL, 'jibonbd360', NULL, '$2y$12$ogB77/RYPL48PQoU1MyDYuIm83/46Xmdunou9Nh0NqS1DZPHheP1u', NULL, '2024-03-04 23:38:02', '2024-03-04 23:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `workings`
--

CREATE TABLE IF NOT EXISTS `workings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `small_title` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workings`
--

INSERT INTO `workings` (`id`, `small_title`, `title`, `details`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'STEP - 01', 'Discover', '<div class=\"col\">\r\n<div class=\"work__process__item\">\r\n<div class=\"work__process__content\">\r\n<p>Initial ideas or inspiration &amp; Establishment of user needs.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col\">\r\n<div class=\"work__process__item\">&nbsp;</div>\r\n</div>', 'upload/working/1792664479208440.png', 1, '2024-03-04 23:54:31', NULL),
(2, 'STEP - 02', 'Define', '<div class=\"col\">\r\n<div class=\"work__process__item\">\r\n<div class=\"work__process__content\">\r\n<p>Interpretation &amp; Alignment of findings to project objectives.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col\">\r\n<div class=\"work__process__item\">&nbsp;</div>\r\n</div>', 'upload/working/1792664561363863.png', 1, '2024-03-04 23:55:50', NULL),
(3, 'STEP - 03', 'Develop', '<div class=\"col\">\r\n<div class=\"work__process__item\">\r\n<div class=\"work__process__content\">\r\n<p>Design-Led concept and Proposals hearted &amp; assessed</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"col\">\r\n<div class=\"work__process__item\">&nbsp;</div>\r\n</div>', 'upload/working/1792664590169184.png', 1, '2024-03-04 23:56:17', NULL),
(4, 'STEP - 04', 'Deliver', '<section class=\"work__process\">\r\n<div class=\"container\">\r\n<div class=\"row work__process__wrap\">\r\n<div class=\"col\">\r\n<div class=\"work__process__item\">\r\n<div class=\"work__process__content\">\r\n<p>Process outcomes finalised &amp; Implemented</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section class=\"portfolio\">\r\n<div class=\"container\">\r\n<div class=\"row justify-content-center\">\r\n<div class=\"col-xl-6 col-lg-8\">\r\n<div class=\"section__title text-center\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>', 'upload/working/1792664619495086.png', 1, '2024-03-04 23:56:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `work_process_captions`
--

CREATE TABLE IF NOT EXISTS `work_process_captions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `details` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_process_captions`
--

INSERT INTO `work_process_captions` (`id`, `title`, `details`, `created_at`, `updated_at`) VALUES
(1, '03 - WORKING PROCESS', 'A clear product design process is the basis of success', NULL, '2024-03-04 23:53:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
