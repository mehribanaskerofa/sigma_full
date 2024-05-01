-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Апр 30 2024 г., 13:46
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sigma_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `albums`
--

CREATE TABLE `albums` (
  `id` bigint UNSIGNED NOT NULL,
  `board` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `album_translations`
--

CREATE TABLE `album_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `album_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `appdevs`
--

CREATE TABLE `appdevs` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `appdev_translations`
--

CREATE TABLE `appdev_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `appdev_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci,
  `title4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description4` text COLLATE utf8mb4_unicode_ci,
  `title5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description5` text COLLATE utf8mb4_unicode_ci,
  `title6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description6` text COLLATE utf8mb4_unicode_ci,
  `title7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description7` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `banner_translations`
--

CREATE TABLE `banner_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `banner_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `blog_translations`
--

CREATE TABLE `blog_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci,
  `description2` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `casess`
--

CREATE TABLE `casess` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `cases_translations`
--

CREATE TABLE `cases_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `cases_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `tags` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `active`, `created_at`, `updated_at`) VALUES
(1, 'info@westtown.az', 1, '2023-10-31 12:38:30', '2023-10-31 12:38:30');

-- --------------------------------------------------------

--
-- Структура таблицы `crafts`
--

CREATE TABLE `crafts` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `crafts`
--

INSERT INTO `crafts` (`id`, `image`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 'craft_images/196de508-b57e-44a6-b2e6-936c0e6fb54b.webp', 4, '2023-10-31 05:34:36', '2023-10-31 05:34:36'),
(2, 'craft_images/80b4a4dd-13ad-4277-9a60-cf2acc8d8670.webp', 4, '2023-10-31 05:37:31', '2023-10-31 05:37:31'),
(3, 'craft_images/c848a769-b715-4779-882f-b2b636d62428.webp', 4, '2023-10-31 05:44:57', '2023-10-31 05:44:57'),
(4, 'craft_images/82afd1bb-dec7-473f-852e-c54684f09fc5.webp', 4, '2023-10-31 05:48:43', '2023-10-31 05:48:43');

-- --------------------------------------------------------

--
-- Структура таблицы `craft_translations`
--

CREATE TABLE `craft_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `craft_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci,
  `description2` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `craft_translations`
--

INSERT INTO `craft_translations` (`id`, `craft_id`, `locale`, `name`, `sub_name`, `title`, `description1`, `description2`) VALUES
(1, 1, 'az', 'BİZİM SƏNƏTİMİZ', 'SƏNƏTİMİZ', 'STRATEGİYA VƏ XÜSUSİYYƏTLƏR', 'Biznes Analitiklərimiz və Məhsul Menecerlərimiz rəqiblər, sənaye tendensiyaları və hədəf auditoriya təhlili əsasında məhsulun yerləşdirilməsi və bazar uyğunluğu haqqında dəyərli fikirləri bölüşərək bütün məhsulun həyat dövrü boyunca sizə dəstək olur.', '<li>Məhsul strategiyasının işlənib hazırlanması və tənzimlənməsi</li>         \r\n<li>İstifadəçi davranışının təhlili (AARRR ölçüləri, Xüsusiyyət ölçüləri və s.) və A/B Testi</li>   \r\n<li>Məhsul xüsusiyyətləri və geridə qalan işlərin prioritetləşdirilməsi (MVP əhatə dairəsi daxil olmaqla)</li>\r\n<li>PoCs, Hipotez testi və Prototipləşdirmə</li>'),
(2, 1, 'en', NULL, NULL, NULL, 'Description', '<li>Migration to modern technologies and platforms</li>'),
(3, 1, 'ru', NULL, NULL, NULL, 'Description', '<li>Migration to modern technologies and platforms</li>'),
(4, 2, 'az', NULL, NULL, 'UX VƏ ARİXTEKTURA', 'UX ekspertlərimiz və Proqram Memarlarımız məhsul istifadəçi təcrübənizin yaxşı düşünülmüş və texniki cəhətdən mümkün olduğuna əmin olmaq üçün birlikdə çalışırlar. Biz məhsulun arxitekturasına xüsusi diqqət yetiririk və onu uzunmüddətli məhsul strategiyanızı nəzərə alaraq dizayn edirik.', '<li>Sənədlər, çərçivələr, maketlər və istifadəçi təcrübəsinin xəritələşdirilməsi daxil olmaqla UX konsepsiyası dizaynı</li>   \r\n<li>Mövcud UI-nin son istifadəlik və əlçatanlıq standartlarına uyğun yenidən dizaynı</li> \r\n<li>Yerli və ya bulud arxitekturasının dizaynı və sistemin landşaft xəritəsi</li> \r\n<li>Proqram təminatının arxitekturasının yenidən dizaynı və optimallaşdırılması</li>'),
(5, 2, 'en', NULL, NULL, NULL, 'Description', '<li>Migration to modern technologies and platforms</li>'),
(6, 2, 'ru', NULL, NULL, NULL, 'Description', '<li>Migration to modern technologies and platforms</li>'),
(7, 3, 'az', NULL, NULL, 'YAZILIM VƏ TEST', 'Çapraz funksional komandalarımız yüksək keyfiyyətli məhsullar yaratmaq üçün PRODUCT Menecerlərinizlə əməkdaşlıq edir. Azerelli Software Technical Excellence yanaşması məhsulunuzun hazırlanmasında iştirak edən mütəxəssislərin ən yaxşı təcrübələrə və kodlaşdırma standartlarınıza əməl etmələrini təmin edir.', '<li>Davamlı inteqrasiya prinsiplərinə uyğun olaraq təkamüllü məhsul inkişafı</li>\r\n<li>Məhsulunuzun funksionallığını genişləndirən fərdi modulların inkişafı</li>\r\n<li>Proqram təminatı layihələrinin keyfiyyət təminatı və müstəqil proqram təminatı sınaqları</li>\r\n<li>İnformasiya təhlükəsizliyi testi</li>'),
(8, 3, 'en', NULL, NULL, NULL, 'Description', '<li>Migration to modern technologies and platforms</li>'),
(9, 3, 'ru', NULL, NULL, NULL, 'Description', '<li>Migration to modern technologies and platforms</li>'),
(10, 4, 'az', NULL, NULL, 'TEXNİKİ DƏSTƏK', 'Məhsulunuz bazara çıxdıqdan sonra müntəzəm yeniləmələrə və son istifadəçi dəstəyinə diqqət yetirməlisiniz. Dəstək və texniki xidmət üzrə mütəxəssislərimiz sizə biznes məqsədlərinizə və son istifadəçi gözləntilərinə uyğun olacaq məhsula texniki xidmət strategiyasını müəyyən etməyə kömək edəcək.', '<li>1-ci, 2-ci və 3-cü sıra dəstəyi</li>\r\n<li>Verilənlər Bazalarının, Şəbəkələrin və Tətbiqlərin Monitorinqi</li>\r\n<li>Baxım və Proaktiv Hadisə İdarəetməsi</li>\r\n<li>İstifadəçi Təlimləri və Məhsul vasitəsilə istifadəçiyə qoşulma dəstəyi</li>\r\n<li>Təlimatların yaradılması</li>'),
(11, 4, 'en', NULL, NULL, NULL, 'Description', '<li>Migration to modern technologies and platforms</li>'),
(12, 4, 'ru', NULL, NULL, NULL, 'Description', '<li>Migration to modern technologies and platforms</li>');

-- --------------------------------------------------------

--
-- Структура таблицы `devs`
--

CREATE TABLE `devs` (
  `id` bigint UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `devs`
--

INSERT INTO `devs` (`id`, `icon`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 'dev_images/4ef43b80-0862-4c95-a433-6048a5bc5548.svg', 4, '2023-10-30 18:04:37', '2023-10-30 18:04:37'),
(2, 'dev_images/c3043bda-9b42-48e1-8d1a-9e6a12f386ec.svg', 4, '2023-10-30 18:06:02', '2023-10-30 18:06:02'),
(3, 'dev_images/f2315dfe-c951-42cf-8886-d86fcea1340b.svg', 4, '2023-10-30 18:11:44', '2023-10-30 18:11:44'),
(4, 'dev_images/e73fc861-267d-43be-9d13-6b65a0342890.svg', 4, '2023-10-30 18:13:17', '2023-10-30 18:13:17');

-- --------------------------------------------------------

--
-- Структура таблицы `dev_translations`
--

CREATE TABLE `dev_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `dev_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci,
  `description2` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dev_translations`
--

INSERT INTO `dev_translations` (`id`, `dev_id`, `locale`, `name`, `sub_name`, `title`, `description1`, `description2`) VALUES
(1, 1, 'az', 'KOMANDAMIZ İLƏ MƏHSUL MÜHƏNDİSLİYİ', 'MƏHSUL', 'YENİ PROQRAM TƏMİNATI ƏLDƏ EDİN', 'Fikriniz bazar ehtiyaclarına uyğunlaşdırılır və gəlir gətirən canlı məhsula çevrilir.', 'Biz məhsulunuzun bazara çıxma müddətini qısaldan məhsul inkişaf yanaşmasından istifadə edirik.'),
(2, 1, 'en', NULL, NULL, NULL, 'Description', 'Description'),
(3, 1, 'ru', NULL, NULL, NULL, 'Description', 'Description'),
(4, 2, 'az', NULL, NULL, 'MÖVCUD PROQRAMINIZI TƏKMİLLƏŞDİRİN', 'Bazar payınızı artırmaq və texniki xidmət xərclərini azaltmaq üçün məhsulunuzu gücləndirin.', 'Sabit çatdırılma və əla məhsul keyfiyyətini təmin etmək üçün ən yaxşı təcrübələrə diqqət yetiririk.'),
(5, 2, 'en', NULL, NULL, NULL, 'Description', 'Description'),
(6, 2, 'ru', NULL, NULL, NULL, 'Description', 'Description'),
(7, 3, 'az', NULL, NULL, 'GÜNDƏLİK BİZNESİNƏ İNNOVASİYA GƏTİR', 'Potensialını açmaq üçün məhsulunuzu qabaqcıl texnologiyalarla gücləndirin.', 'Ar-Ge mütəxəssislərimiz müntəzəm olaraq müştərilərin biznesi üçün innovativ konsepsiyalar yaradırlar.'),
(8, 3, 'en', NULL, NULL, NULL, 'Description', 'Description'),
(9, 3, 'ru', NULL, NULL, NULL, 'Description', 'Description'),
(10, 4, 'az', NULL, NULL, 'BÜTÜN XİDMƏTLƏRİ BİR ŞİRKƏTDƏN ƏLDƏ EDİN', 'Müəyyən edilmiş əməkdaşlıq quruluşuna ehtiyac olduqda niş peşəkarları cəlb edin.', 'Biz xidmətlərimizi Product Strategy, UX, CTO və InfoSec konsaltinq ilə tamamlayırıq.'),
(11, 4, 'en', NULL, NULL, NULL, 'Description', 'Description'),
(12, 4, 'ru', NULL, NULL, NULL, 'Description', 'Description');

-- --------------------------------------------------------

--
-- Структура таблицы `drives`
--

CREATE TABLE `drives` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `drives`
--

INSERT INTO `drives` (`id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 4, '2023-10-30 18:21:35', '2023-10-30 18:21:35'),
(2, 4, '2023-10-30 18:22:48', '2023-10-30 18:22:48'),
(3, 4, '2023-10-30 18:23:24', '2023-10-30 18:23:24'),
(4, 4, '2023-10-30 18:24:09', '2023-10-30 18:24:09'),
(5, 4, '2023-10-30 18:24:51', '2023-10-30 18:24:51'),
(6, 4, '2023-10-30 18:26:31', '2023-10-30 18:26:31'),
(7, 4, '2023-10-30 18:27:51', '2023-10-30 18:27:51'),
(8, 4, '2023-10-30 18:28:42', '2023-10-30 18:28:42'),
(9, 4, '2023-10-30 18:29:26', '2023-10-30 18:29:26'),
(10, 4, '2023-10-30 18:30:15', '2023-10-30 18:30:15');

-- --------------------------------------------------------

--
-- Структура таблицы `drive_translations`
--

CREATE TABLE `drive_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `drive_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci,
  `description2` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `drive_translations`
--

INSERT INTO `drive_translations` (`id`, `drive_id`, `locale`, `name`, `sub_name`, `title`, `description1`, `description2`) VALUES
(1, 1, 'az', 'YENİ MƏHSUL YARATMA XİDMƏTLƏRİ', 'YENİ MƏHSUL', 'MVP YAZILIM XİDMƏTƏRİ', 'Proqram təminatının həyat dövrünün ən erkən mərhələlərində bazar rəyi almağa və ideyalarınızı təsdiq etməyə başlamaq üçün MVP tərtibatçılarımız tərəfindən mümkün qədər tez şəkildə işi görmə qabiliyyətinizi formalaşdırın və həyata keçirin.', 'Proqram təminatının həyat dövrünün ən erkən mərhələlərində bazar rəyi almağa və ideyalarınızı təsdiq etməyə başlamaq üçün MVP tərtibatçılarımız tərəfindən mümkün qədər tez şəkildə işi görmə qabiliyyətinizi formalaşdırın və həyata keçirin.'),
(2, 1, 'en', NULL, NULL, NULL, 'Description', 'Description'),
(3, 1, 'ru', NULL, NULL, NULL, 'Description', 'Description'),
(4, 2, 'az', 'y', NULL, 'TAM DÖVRLÜ PROQRAM YAZILIMINI OUTSOURCE EDİN', 'Sınaqdan çıxmış və sübut edilmiş proqram təminatının inkişaf etdirilməsi proseslərindən zövq almaq və məhsulunuzun keyfiyyətini qorumaq üçün proqram təminatını inkişaf etdirmə şirkətinə etibar edin. Entreprise tipli məhsulların hazırlanmasında modul arxitekturaya sadiq qalırıq. Həmçinin, layihə menecerlərimiz və memarlarımız sizə bazarın mənimsənilməsi və biznes maraqları arasında ideal tarazlığı tapmağa imkan verən ağıllı və qənaətcil şəkildə sınaqdan keçirməyə kömək edə bilər.', 'Sınaqdan çıxmış və sübut edilmiş proqram təminatının inkişaf etdirilməsi proseslərindən zövq almaq və məhsulunuzun keyfiyyətini qorumaq üçün proqram təminatını inkişaf etdirmə şirkətinə etibar edin. Entreprise tipli məhsulların hazırlanmasında modul arxitekturaya sadiq qalırıq. Həmçinin, layihə menecerlərimiz və memarlarımız sizə bazarın mənimsənilməsi və biznes maraqları arasında ideal tarazlığı tapmağa imkan verən ağıllı və qənaətcil şəkildə sınaqdan keçirməyə kömək edə bilər.'),
(5, 2, 'en', NULL, NULL, NULL, 'Description', 'Description'),
(6, 2, 'ru', NULL, NULL, NULL, 'Description', 'Description'),
(7, 3, 'az', NULL, NULL, 'TAM DÖVRLÜ PROQRAM YAZILIMINI OUTSOURCE EDİN', 'Sınaqdan çıxmış və sübut edilmiş proqram təminatının inkişaf etdirilməsi proseslərindən zövq almaq və məhsulunuzun keyfiyyətini qorumaq üçün proqram təminatını inkişaf etdirmə şirkətinə etibar edin. Entreprise tipli məhsulların hazırlanmasında modul arxitekturaya sadiq qalırıq. Həmçinin, layihə menecerlərimiz və memarlarımız sizə bazarın mənimsənilməsi və biznes maraqları arasında ideal tarazlığı tapmağa imkan verən ağıllı və qənaətcil şəkildə sınaqdan keçirməyə kömək edə bilər.', 'Sınaqdan çıxmış və sübut edilmiş proqram təminatının inkişaf etdirilməsi proseslərindən zövq almaq və məhsulunuzun keyfiyyətini qorumaq üçün proqram təminatını inkişaf etdirmə şirkətinə etibar edin. Entreprise tipli məhsulların hazırlanmasında modul arxitekturaya sadiq qalırıq. Həmçinin, layihə menecerlərimiz və memarlarımız sizə bazarın mənimsənilməsi və biznes maraqları arasında ideal tarazlığı tapmağa imkan verən ağıllı və qənaətcil şəkildə sınaqdan keçirməyə kömək edə bilər.'),
(8, 3, 'en', NULL, NULL, NULL, 'Description', 'Description'),
(9, 3, 'ru', NULL, NULL, NULL, 'Description', 'Description'),
(10, 4, 'az', NULL, NULL, 'MVP YAZILIM XİDMƏTƏRİ', 'Sınaqdan çıxmış və sübut edilmiş proqram təminatının inkişaf etdirilməsi proseslərindən zövq almaq və məhsulunuzun keyfiyyətini qorumaq üçün proqram təminatını inkişaf etdirmə şirkətinə etibar edin. Entreprise tipli məhsulların hazırlanmasında modul arxitekturaya sadiq qalırıq. Həmçinin, layihə menecerlərimiz və memarlarımız sizə bazarın mənimsənilməsi və biznes maraqları arasında ideal tarazlığı tapmağa imkan verən ağıllı və qənaətcil şəkildə sınaqdan keçirməyə kömək edə bilər.', 'Sınaqdan çıxmış və sübut edilmiş proqram təminatının inkişaf etdirilməsi proseslərindən zövq almaq və məhsulunuzun keyfiyyətini qorumaq üçün proqram təminatını inkişaf etdirmə şirkətinə etibar edin. Entreprise tipli məhsulların hazırlanmasında modul arxitekturaya sadiq qalırıq. Həmçinin, layihə menecerlərimiz və memarlarımız sizə bazarın mənimsənilməsi və biznes maraqları arasında ideal tarazlığı tapmağa imkan verən ağıllı və qənaətcil şəkildə sınaqdan keçirməyə kömək edə bilər.'),
(11, 4, 'en', NULL, NULL, NULL, 'Description', 'Description'),
(12, 4, 'ru', NULL, NULL, NULL, 'Description', 'Description'),
(13, 5, 'az', NULL, NULL, 'TAM DÖVRLÜ PROQRAM', 'Sınaqdan çıxmış və sübut edilmiş proqram təminatının inkişaf etdirilməsi proseslərindən zövq almaq və məhsulunuzun keyfiyyətini qorumaq üçün proqram təminatını inkişaf etdirmə şirkətinə etibar edin. Entreprise tipli məhsulların hazırlanmasında modul arxitekturaya sadiq qalırıq. Həmçinin, layihə menecerlərimiz və memarlarımız sizə bazarın mənimsənilməsi və biznes maraqları arasında ideal tarazlığı tapmağa imkan verən ağıllı və qənaətcil şəkildə sınaqdan keçirməyə kömək edə bilər.', 'Sınaqdan çıxmış və sübut edilmiş proqram təminatının inkişaf etdirilməsi proseslərindən zövq almaq və məhsulunuzun keyfiyyətini qorumaq üçün proqram təminatını inkişaf etdirmə şirkətinə etibar edin. Entreprise tipli məhsulların hazırlanmasında modul arxitekturaya sadiq qalırıq. Həmçinin, layihə menecerlərimiz və memarlarımız sizə bazarın mənimsənilməsi və biznes maraqları arasında ideal tarazlığı tapmağa imkan verən ağıllı və qənaətcil şəkildə sınaqdan keçirməyə kömək edə bilər.'),
(14, 5, 'en', NULL, NULL, NULL, 'Description', 'Description'),
(15, 5, 'ru', NULL, NULL, NULL, 'Description', 'Description'),
(16, 6, 'az', 'PROQRAM YAZILIMI VƏ DƏSTƏK', 'PROQRAM', 'PROQRAM REENGİNEERİNGİ VƏ TƏKMİLLƏŞDİRMƏ', 'Texnologiyalar və memarlıq yanaşmaları daha aşağı dəstək və texniki xidmət xərcləri ilə daha yaxşı performansa və genişlənməyə imkan verən hər il inkişaf edir. Azerelli Proqram təminatı məhsulunun inkişafı üzrə konsaltinq sizə daha çox çeviklik üçün müasir texnologiyalara keçməkdə, eləcə də məhsulun xarici sistemlərlə daha asan inteqrasiyası üçün məlumat qatları əlavə etmək və köhnəlmiş API-ləri təkmilləşdirməkdə sizə kömək edə bilər.', 'Texnologiyalar və memarlıq yanaşmaları daha aşağı dəstək və texniki xidmət xərcləri ilə daha yaxşı performansa və genişlənməyə imkan verən hər il inkişaf edir. Azerelli Proqram təminatı məhsulunun inkişafı üzrə konsaltinq sizə daha çox çeviklik üçün müasir texnologiyalara keçməkdə, eləcə də məhsulun xarici sistemlərlə daha asan inteqrasiyası üçün məlumat qatları əlavə etmək və köhnəlmiş API-ləri təkmilləşdirməkdə sizə kömək edə bilər.'),
(17, 6, 'en', NULL, NULL, NULL, 'Description', 'Description'),
(18, 6, 'ru', NULL, NULL, NULL, 'Description', 'Description'),
(19, 7, 'az', NULL, NULL, 'STABIL VƏ PROQNOZLAŞDIRILA BİLƏN ÇATDIRILMA', 'Müştərilər gündəlik işlərində məhsulunuza güvənirlər. Beləliklə, planlaşdırılmış müddətlərdə sabit çatdırılma və yerləşdirmə və səmərəli məhsul dəstəyi qurulmuş məhsullar üçün əsas prioritet olur. Hazırlanma planları və tələblərinə tam uyğunluğu qorumaq üçün sübut edilmiş metodologiyalara və sınaqdan keçmiş məhsul çatdırılma proseslərinə (CI/CD prosesləri daxil olmaqla) sadiq qalırıq.', 'Müştərilər gündəlik işlərində məhsulunuza güvənirlər. Beləliklə, planlaşdırılmış müddətlərdə sabit çatdırılma və yerləşdirmə və səmərəli məhsul dəstəyi qurulmuş məhsullar üçün əsas prioritet olur. Hazırlanma planları və tələblərinə tam uyğunluğu qorumaq üçün sübut edilmiş metodologiyalara və sınaqdan keçmiş məhsul çatdırılma proseslərinə (CI/CD prosesləri daxil olmaqla) sadiq qalırıq.'),
(20, 7, 'en', NULL, NULL, NULL, 'Description', 'Description'),
(21, 7, 'ru', NULL, NULL, NULL, 'Description', 'Description'),
(22, 8, 'az', NULL, NULL, 'TAM DÖVRLÜ PROQRAM YAZILIMINI OUTSOURCE EDİN', 'Müştərilər gündəlik işlərində məhsulunuza güvənirlər. Beləliklə, planlaşdırılmış müddətlərdə sabit çatdırılma və yerləşdirmə və səmərəli məhsul dəstəyi qurulmuş məhsullar üçün əsas prioritet olur. Hazırlanma planları və tələblərinə tam uyğunluğu qorumaq üçün sübut edilmiş metodologiyalara və sınaqdan keçmiş məhsul çatdırılma proseslərinə (CI/CD prosesləri daxil olmaqla) sadiq qalırıq.', 'Müştərilər gündəlik işlərində məhsulunuza güvənirlər. Beləliklə, planlaşdırılmış müddətlərdə sabit çatdırılma və yerləşdirmə və səmərəli məhsul dəstəyi qurulmuş məhsullar üçün əsas prioritet olur. Hazırlanma planları və tələblərinə tam uyğunluğu qorumaq üçün sübut edilmiş metodologiyalara və sınaqdan keçmiş məhsul çatdırılma proseslərinə (CI/CD prosesləri daxil olmaqla) sadiq qalırıq.'),
(23, 8, 'en', NULL, NULL, NULL, 'Description', 'Description'),
(24, 8, 'ru', NULL, NULL, NULL, 'Description', 'Description'),
(25, 9, 'az', NULL, NULL, 'MVP YAZILIM XİDMƏTƏRİ', 'Müştərilər gündəlik işlərində məhsulunuza güvənirlər. Beləliklə, planlaşdırılmış müddətlərdə sabit çatdırılma və yerləşdirmə və səmərəli məhsul dəstəyi qurulmuş məhsullar üçün əsas prioritet olur. Hazırlanma planları və tələblərinə tam uyğunluğu qorumaq üçün sübut edilmiş metodologiyalara və sınaqdan keçmiş məhsul çatdırılma proseslərinə (CI/CD prosesləri daxil olmaqla) sadiq qalırıq.', 'Müştərilər gündəlik işlərində məhsulunuza güvənirlər. Beləliklə, planlaşdırılmış müddətlərdə sabit çatdırılma və yerləşdirmə və səmərəli məhsul dəstəyi qurulmuş məhsullar üçün əsas prioritet olur. Hazırlanma planları və tələblərinə tam uyğunluğu qorumaq üçün sübut edilmiş metodologiyalara və sınaqdan keçmiş məhsul çatdırılma proseslərinə (CI/CD prosesləri daxil olmaqla) sadiq qalırıq.'),
(26, 9, 'en', NULL, NULL, NULL, 'Description', 'Description'),
(27, 9, 'ru', NULL, NULL, NULL, 'Description', 'Description'),
(28, 10, 'az', NULL, NULL, 'PROQRAM REENGİNEERİNGİ', 'Müştərilər gündəlik işlərində məhsulunuza güvənirlər. Beləliklə, planlaşdırılmış müddətlərdə sabit çatdırılma və yerləşdirmə və səmərəli məhsul dəstəyi qurulmuş məhsullar üçün əsas prioritet olur. Hazırlanma planları və tələblərinə tam uyğunluğu qorumaq üçün sübut edilmiş metodologiyalara və sınaqdan keçmiş məhsul çatdırılma proseslərinə (CI/CD prosesləri daxil olmaqla) sadiq qalırıq.', 'Müştərilər gündəlik işlərində məhsulunuza güvənirlər. Beləliklə, planlaşdırılmış müddətlərdə sabit çatdırılma və yerləşdirmə və səmərəli məhsul dəstəyi qurulmuş məhsullar üçün əsas prioritet olur. Hazırlanma planları və tələblərinə tam uyğunluğu qorumaq üçün sübut edilmiş metodologiyalara və sınaqdan keçmiş məhsul çatdırılma proseslərinə (CI/CD prosesləri daxil olmaqla) sadiq qalırıq.'),
(29, 10, 'en', NULL, NULL, NULL, 'Description', 'Description'),
(30, 10, 'ru', NULL, NULL, NULL, 'Description', 'Description');

-- --------------------------------------------------------

--
-- Структура таблицы `expertises`
--

CREATE TABLE `expertises` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `expertises`
--

INSERT INTO `expertises` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'expertise_images/d78bba7a-eabb-4e45-957b-ced5bfa73289.webp', '2023-10-30 12:23:37', '2023-10-30 12:23:37'),
(2, 'expertise_images/74072d30-8773-4449-bd9e-bfbb470f637d.webp', '2023-10-30 12:26:12', '2023-10-30 12:26:12'),
(3, 'expertise_images/3778fd8d-2f88-4c14-a045-9f5b571a2164.webp', '2023-10-30 12:26:40', '2023-10-30 12:26:40');

-- --------------------------------------------------------

--
-- Структура таблицы `expertise_translations`
--

CREATE TABLE `expertise_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `expertise_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `expertise_translations`
--

INSERT INTO `expertise_translations` (`id`, `expertise_id`, `locale`, `name`, `sub_name`, `title`, `sub_title`) VALUES
(1, 1, 'az', NULL, NULL, 'HƏLLƏR', 'Korporativ sistemlərin, qabaqcıl proqram məhsullarının və avtomatlaşdırma xidmətlərinin sifarişlə hazırlanması'),
(2, 1, 'en', NULL, NULL, NULL, NULL),
(3, 1, 'ru', NULL, NULL, NULL, NULL),
(4, 2, 'az', NULL, NULL, 'SAHƏLƏR', 'İT, Sağlamlıq, İstehsal, Media və Reklamçılıq da daxil olmaq üzrə çoxsaylı sektorlar üçün fərdi proqram təminatı sistemləri.'),
(5, 2, 'en', NULL, NULL, NULL, NULL),
(6, 2, 'ru', NULL, NULL, NULL, NULL),
(7, 3, 'az', NULL, NULL, 'TEXNOLOGİYALAR', 'Bütün əsas platformalar və proqramlaşdırma dilləri, o cümlədən AI, VR, IoT, Big Data və s.'),
(8, 3, 'en', NULL, NULL, NULL, NULL),
(9, 3, 'ru', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `experts`
--

CREATE TABLE `experts` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `expert_translations`
--

CREATE TABLE `expert_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `expert_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci,
  `title4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description4` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `faq_translations`
--

CREATE TABLE `faq_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `faq_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `focuss`
--

CREATE TABLE `focuss` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `focus_translations`
--

CREATE TABLE `focus_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `focus_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `heads`
--

CREATE TABLE `heads` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `heads`
--

INSERT INTO `heads` (`id`, `image`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 'head_images/e58e79b9-cc6d-481e-95c3-a16e99379981.webp', 1, '2023-10-30 11:07:31', '2023-10-30 11:07:31'),
(2, 'head_images/936a02ea-f0f5-4344-b734-2d3030b8e609.webp', 4, '2023-10-30 17:21:53', '2023-10-30 17:21:53');

-- --------------------------------------------------------

--
-- Структура таблицы `head_counters`
--

CREATE TABLE `head_counters` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `head_counters`
--

INSERT INTO `head_counters` (`id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-10-30 11:16:21', '2023-10-30 11:16:21'),
(2, 4, '2023-10-30 17:24:47', '2023-10-30 17:24:47');

-- --------------------------------------------------------

--
-- Структура таблицы `head_counter_translations`
--

CREATE TABLE `head_counter_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `head_counter_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `counter3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `head_counter_translations`
--

INSERT INTO `head_counter_translations` (`id`, `head_counter_id`, `locale`, `title1`, `sub_title1`, `counter1`, `name1`, `title2`, `sub_title2`, `counter2`, `name2`, `title3`, `sub_title3`, `counter3`, `name3`) VALUES
(1, 1, 'az', 'BİRLƏŞDİRİR', 'Proqramlaşdırma mütəxəssisi', '37', NULL, 'AZƏRBAYCANIN', 'İT Şirkətləri sırasında', NULL, 'TOP', 'YOLDADIR', 'Yerli və Xarici Təcrübəsilə', '18', 'İLLİK'),
(2, 1, 'en', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 'ru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 2, 'az', 'TƏQDİM ETMİŞİK', 'Aktiv olaraq şirkətlər tərərfindən istifadə olunmaqdadır', '50', 'Product+', 'EYNİ ZAMANDA', 'Texnoloji imkanlarımızdan yararlanmaqdadır', NULL, 'STARTAPLAR', NULL, NULL, NULL, NULL),
(5, 2, 'en', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2, 'ru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `head_indexs`
--

CREATE TABLE `head_indexs` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `head_indexs`
--

INSERT INTO `head_indexs` (`id`, `created_at`, `updated_at`) VALUES
(1, '2023-10-30 11:08:50', '2023-10-30 11:08:50');

-- --------------------------------------------------------

--
-- Структура таблицы `head_index_translations`
--

CREATE TABLE `head_index_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `head_index_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `head_index_translations`
--

INSERT INTO `head_index_translations` (`id`, `head_index_id`, `locale`, `name`, `sub_name`, `title`, `title1`, `title2`, `title3`) VALUES
(1, 1, 'az', NULL, NULL, 'BİZ STARTAPLARA, ŞİRKƏTLƏRƏ DƏSTƏK OLURUQ:', 'Fərdi proqram təminatı', 'İT Konsultasiya və xidmətlər', 'Özəl proqramçı komandaları'),
(2, 1, 'en', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 'ru', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `head_subs`
--

CREATE TABLE `head_subs` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `head_subs`
--

INSERT INTO `head_subs` (`id`, `image`, `icon`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 'head_images/73077f19-42f2-4d76-ae41-d4f77abfdf6c.webp', 'head_images/bcf794de-6651-4a61-b851-8f62e5701d84.svg', 1, '2023-10-30 11:12:41', '2023-10-30 11:12:41'),
(2, 'head_images/45e8bbc0-ca4a-4a57-ad08-8f961213d4d3.webp', 'head_images/c2b6bd18-598d-42f1-8a9c-d4c52bad5fd0.svg', 1, '2023-10-30 11:13:15', '2023-10-30 11:13:15'),
(3, 'head_images/5f241fb9-0789-43c1-807e-cf47398f65ae.webp', 'head_images/661fae8e-3f40-43f9-a4a7-c70030b307fa.svg', 1, '2023-10-30 11:13:59', '2023-10-30 11:13:59'),
(4, 'head_images/3fd85269-cd70-4460-b16b-0b70f43e7d48.webp', 'head_images/969b9ff0-acac-411e-85cf-909f266a763b.svg', 4, '2023-10-30 17:23:15', '2023-10-30 17:23:15');

-- --------------------------------------------------------

--
-- Структура таблицы `head_sub_translations`
--

CREATE TABLE `head_sub_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `head_sub_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `head_sub_translations`
--

INSERT INTO `head_sub_translations` (`id`, `head_sub_id`, `locale`, `title`, `sub_title`) VALUES
(1, 1, 'az', 'Onlayn ictimai Nəzarət platformasının yaradılması.', 'Problemi onlayn olaraq şəklini çəkib qeyd etmək imkanı verən platforma'),
(2, 1, 'en', NULL, NULL),
(3, 1, 'ru', NULL, NULL),
(4, 2, 'az', 'Mərkəzləşdirilmiş pasient database idarəetmə və analitika sisteminin yaradılması.', 'Beynəlxalq GAMP standardlarının tətbiqi'),
(5, 2, 'en', NULL, NULL),
(6, 2, 'ru', NULL, NULL),
(7, 3, 'az', 'Qara dəniz hövzəsi üzrə ixracla məşqul olan şirkətin gündəlik iş yükünü', 'optimallaşdımaq üçün fərdi CRM sistemi yazılımı'),
(8, 3, 'en', NULL, NULL),
(9, 3, 'ru', NULL, NULL),
(10, 4, 'az', 'TƏQDİM ETMİŞİK', 'TƏQDİM ETMİŞİK'),
(11, 4, 'en', NULL, NULL),
(12, 4, 'ru', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `head_translations`
--

CREATE TABLE `head_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `head_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `head_translations`
--

INSERT INTO `head_translations` (`id`, `head_id`, `locale`, `title`, `sub_title`, `description`) VALUES
(1, 1, 'az', 'FƏRDİ PROQRAM YAZILIMININ ŞİRKƏTLƏRƏ FAYDASI:', 'Etibarlı Texnologiya Partnyorunuz', '<p>Biznesinizin böyüməsini dəstəkləyən üstün proqram həlləri təqdim etmək üçün </p><p>\r\n«Agile» biznes mədəniyyəti</p>'),
(2, 1, 'en', NULL, NULL, 'Description'),
(3, 1, 'ru', NULL, NULL, 'Description'),
(4, 2, 'az', 'İNKİŞAF TƏRƏFDAŞI KİMİ TƏQDİM ETDİYİMİZ DƏYƏR', 'PROQRAM TƏMİNATI HƏLLƏRİ VƏ REENGINEERING', 'Proqram təminatı məhsulu ideyanızı həyata keçirin, mövcud məhsulun keyfiyyətini artırın, bazara çıxma müddətini azaldın və proqram təminatı mühəndisliyi xidmətlərimiz və autsorsing məhsul inkişafqruplarımızla inkişaf xərclərini azaldın.'),
(5, 2, 'en', NULL, NULL, 'Description'),
(6, 2, 'ru', NULL, NULL, 'Description');

-- --------------------------------------------------------

--
-- Структура таблицы `heros`
--

CREATE TABLE `heros` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title1` text COLLATE utf8mb4_unicode_ci,
  `sub_title2` text COLLATE utf8mb4_unicode_ci,
  `sub_title3` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `hero_translations`
--

CREATE TABLE `hero_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `hero_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `logos`
--

CREATE TABLE `logos` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `longsides`
--

CREATE TABLE `longsides` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title1` text COLLATE utf8mb4_unicode_ci,
  `sub_title2` text COLLATE utf8mb4_unicode_ci,
  `sub_title3` text COLLATE utf8mb4_unicode_ci,
  `sub_title4` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `longside_translations`
--

CREATE TABLE `longside_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `longside_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `landing` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `url`, `active`, `landing`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, '/', 0, 1, NULL, '2023-10-30 05:57:39', '2023-10-30 05:57:39'),
(2, '/services', 0, 0, NULL, '2023-10-30 05:58:18', '2023-10-30 05:58:18'),
(3, '/software', 0, 0, 2, '2023-10-30 06:00:27', '2023-10-30 06:00:27'),
(4, '/services/product-development', 0, 0, 3, '2023-10-30 06:01:17', '2023-10-30 06:01:17'),
(5, '/services/app-development', 0, 0, 3, '2023-10-30 06:02:15', '2023-10-30 06:02:15'),
(6, '/services/dedicated-team', 0, 1, 3, '2023-10-30 06:04:44', '2023-10-30 06:04:44'),
(7, '/services/devops-consulting', 0, 0, 3, '2023-10-30 06:05:33', '2023-10-30 06:05:33'),
(8, '/services/support-maintenance', 0, 0, 3, '2023-10-30 06:06:10', '2023-10-30 06:06:10'),
(9, '/testing', 0, 0, 2, '2023-10-30 07:01:45', '2023-10-30 07:01:45'),
(10, '/services/ui-ux-design', 0, 0, 9, '2023-10-30 07:03:12', '2023-10-30 07:03:12'),
(11, '/services/website-design', 0, 0, 9, '2023-10-30 07:04:27', '2023-10-30 07:04:27'),
(12, '/services/software-testing', 0, 0, 9, '2023-10-30 07:05:28', '2023-10-30 07:05:28'),
(13, '/services/automated-testing', 0, 0, 9, '2023-10-30 07:07:04', '2023-10-30 07:07:04'),
(14, '/services/quality-process', 0, 0, 9, '2023-10-30 07:08:29', '2023-10-30 07:08:29'),
(15, NULL, 0, 0, 2, '2023-10-30 07:09:20', '2023-10-30 07:09:20'),
(16, '/services/startups-cto', 0, 0, 15, '2023-10-30 07:10:16', '2023-10-30 07:10:16'),
(17, '/services/artificial-intelligence', 0, 0, 15, '2023-10-30 07:11:58', '2023-10-30 07:11:58'),
(18, '/services/ar-vr', 0, 1, 15, '2023-10-30 07:12:54', '2023-10-30 07:12:54'),
(19, '/services/cybersecurity-consulting', 0, 0, 15, '2023-10-30 07:14:37', '2023-10-30 07:14:37'),
(20, '/services/cloud-migration', 0, 0, 15, '2023-10-30 07:15:23', '2023-10-30 07:15:23'),
(21, '/industries', 0, 0, NULL, '2023-10-30 07:16:23', '2023-10-30 07:16:23'),
(22, '/industries/automative', 0, 0, 21, '2023-10-30 07:18:16', '2023-10-30 07:18:16'),
(23, '/industries/real-estate', 0, 0, 21, '2023-10-30 07:20:07', '2023-10-30 07:20:07'),
(24, '/industries/education', 0, 0, 21, '2023-10-30 07:21:04', '2023-10-30 07:21:04'),
(25, '/industries/telecom', 0, 0, 21, '2023-10-30 07:21:56', '2023-10-30 07:21:56'),
(26, '/industries/blockchain', 0, 0, 21, '2023-10-30 07:22:50', '2023-10-30 07:22:50'),
(27, '/industries/media-advertising', 0, 0, 21, '2023-10-30 07:23:44', '2023-10-30 07:23:44'),
(28, '/industries/finance-banking', 0, 0, 21, '2023-10-30 07:24:42', '2023-10-30 07:24:42'),
(29, '/industries/information-technology', 0, 0, 21, '2023-10-30 07:25:47', '2023-10-30 07:25:47'),
(30, '/industries/healthcare', 0, 0, 21, '2023-10-30 07:26:39', '2023-10-30 07:26:39'),
(31, '/industries/energy', 0, 0, 21, '2023-10-30 07:27:26', '2023-10-30 07:27:26'),
(32, '/case-studies', 0, 0, NULL, '2023-10-30 07:28:43', '2023-10-30 07:28:43'),
(33, '/about', 0, 0, NULL, '2023-10-30 07:29:04', '2023-10-30 07:29:51'),
(34, '/company', 0, 0, 33, '2023-10-30 07:31:36', '2023-10-30 07:31:36'),
(35, '/about/history', 0, 0, 34, '2023-10-30 07:35:19', '2023-10-30 07:35:19'),
(36, '/about/team', 0, 0, 34, '2023-10-30 07:35:56', '2023-10-30 07:35:56'),
(37, '/about/office-contct', 0, 0, 34, '2023-10-30 07:36:56', '2023-10-30 07:36:56'),
(38, '/about/azerelli-cources', 0, 0, 34, '2023-10-30 07:37:44', '2023-10-30 07:37:44'),
(39, '/princip', 0, 0, 33, '2023-10-30 07:38:18', '2023-10-30 07:38:18'),
(40, '/about/corporate', 0, 0, 39, '2023-10-30 07:39:31', '2023-10-30 07:39:31'),
(41, '/about/startups', 0, 0, 39, '2023-10-30 07:40:56', '2023-10-30 07:40:56'),
(42, '/about/software-houses', 0, 0, 39, '2023-10-30 07:41:53', '2023-10-30 07:41:53'),
(43, '/about/consulting-companies', 0, 0, 39, '2023-10-30 07:42:55', '2023-10-30 07:42:55'),
(44, '/network', 0, 0, 33, '2023-10-30 07:43:44', '2023-10-30 07:43:44'),
(45, '/about/partners-products', 0, 0, 44, '2023-10-30 07:45:03', '2023-10-30 07:45:03'),
(46, '/about/clients', 0, 0, 44, '2023-10-30 07:45:44', '2023-10-30 07:45:44'),
(47, '/about/csr', 0, 0, 44, '2023-10-30 07:47:09', '2023-10-30 07:47:09'),
(48, '/about/media', 0, 0, 44, '2023-10-30 07:47:52', '2023-10-30 07:47:52');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_translations`
--

CREATE TABLE `menu_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_translations`
--

INSERT INTO `menu_translations` (`id`, `menu_id`, `locale`, `name`, `slug`, `description`) VALUES
(1, 1, 'az', 'Azerelli', 'index', 'Azerelli'),
(2, 1, 'en', NULL, NULL, NULL),
(3, 1, 'ru', NULL, NULL, NULL),
(4, 2, 'az', 'XİDMƏTLƏR', 'services', 'XİDMƏTLƏR'),
(5, 2, 'en', NULL, NULL, NULL),
(6, 2, 'ru', NULL, NULL, NULL),
(7, 3, 'az', 'Software development', 'software', 'Software development'),
(8, 3, 'en', NULL, NULL, NULL),
(9, 3, 'ru', NULL, NULL, NULL),
(10, 4, 'az', 'Proqram yazılımı', 'product-development', 'Proqram yazılımı'),
(11, 4, 'en', NULL, NULL, NULL),
(12, 4, 'ru', NULL, NULL, NULL),
(13, 5, 'az', 'Mobil tətbiq', 'app-development', 'Mobil tətbiq'),
(14, 5, 'en', NULL, NULL, NULL),
(15, 5, 'ru', NULL, NULL, NULL),
(16, 6, 'az', 'Dedicated Team', 'dedicated-team', 'Dedicated Team'),
(17, 6, 'en', NULL, NULL, NULL),
(18, 6, 'ru', NULL, NULL, NULL),
(19, 7, 'az', 'DevOps Konsultasiya', 'devops-consulting', 'DevOps Konsultasiya'),
(20, 7, 'en', NULL, NULL, NULL),
(21, 7, 'ru', NULL, NULL, NULL),
(22, 8, 'az', 'İT DƏSTƏK', 'support-maintenance', 'İT DƏSTƏK'),
(23, 8, 'en', NULL, NULL, NULL),
(24, 8, 'ru', NULL, NULL, NULL),
(25, 9, 'az', 'Design & Testing', NULL, 'Design &amp; Testing'),
(26, 9, 'en', NULL, NULL, NULL),
(27, 9, 'ru', NULL, NULL, NULL),
(28, 10, 'az', 'UX/UI Dizayn', 'ui-ux-design', 'UX/UI Dizayn'),
(29, 10, 'en', NULL, NULL, NULL),
(30, 10, 'ru', NULL, NULL, NULL),
(31, 11, 'az', 'Vebsayt Dizaynı', 'website-design', 'Vebsayt Dizaynı'),
(32, 11, 'en', NULL, NULL, NULL),
(33, 11, 'ru', NULL, NULL, NULL),
(34, 12, 'az', 'Proqram testinqi', 'software-testing', 'Proqram testinqi'),
(35, 12, 'en', NULL, NULL, NULL),
(36, 12, 'ru', NULL, NULL, NULL),
(37, 13, 'az', 'Avtomatlaşdırılmış test', 'automated-testing', 'Avtomatlaşdırılmış test'),
(38, 13, 'en', NULL, NULL, NULL),
(39, 13, 'ru', NULL, NULL, NULL),
(40, 14, 'az', 'Keyfiyyət və', 'quality-process', 'Keyfiyyət və'),
(41, 14, 'en', NULL, NULL, NULL),
(42, 14, 'ru', NULL, NULL, NULL),
(43, 15, 'az', 'XÜSUSİ XİDMƏTLƏR', NULL, 'XÜSUSİ XİDMƏTLƏR'),
(44, 15, 'en', NULL, NULL, NULL),
(45, 15, 'ru', NULL, NULL, NULL),
(46, 16, 'az', 'Startaplar: CTO xidməti', 'startups-cto', 'Startaplar: CTO xidməti'),
(47, 16, 'en', NULL, NULL, NULL),
(48, 16, 'ru', NULL, NULL, NULL),
(49, 17, 'az', 'Machine Learning Development', 'artificial-intelligence', 'Machine Learning Development'),
(50, 17, 'en', NULL, NULL, NULL),
(51, 17, 'ru', NULL, NULL, NULL),
(52, 18, 'az', 'AR/VR development', 'ar-vr', 'AR/VR development'),
(53, 18, 'en', NULL, NULL, NULL),
(54, 18, 'ru', NULL, NULL, NULL),
(55, 19, 'az', 'Kibertəhlükəsizlik xidməti', 'cybersecurity-consulting', 'Kibertəhlükəsizlik xidməti'),
(56, 19, 'en', NULL, NULL, NULL),
(57, 19, 'ru', NULL, NULL, NULL),
(58, 20, 'az', 'Cloud miqrasiyası', 'cloud-migration', 'Cloud miqrasiyası'),
(59, 20, 'en', NULL, NULL, NULL),
(60, 20, 'ru', NULL, NULL, NULL),
(61, 21, 'az', 'INDUSTRIES', 'industries', 'industries'),
(62, 21, 'en', NULL, NULL, NULL),
(63, 21, 'ru', NULL, NULL, NULL),
(64, 22, 'az', 'İstehsal', 'automative', 'İstehsal'),
(65, 22, 'en', NULL, NULL, NULL),
(66, 22, 'ru', NULL, NULL, NULL),
(67, 23, 'az', 'Tikinti/Əmlak', 'real-estate', 'Tikinti/Əmlak'),
(68, 23, 'en', NULL, NULL, NULL),
(69, 23, 'ru', NULL, NULL, NULL),
(70, 24, 'az', 'Təhsil', 'education', 'Təhsil'),
(71, 24, 'en', NULL, NULL, NULL),
(72, 24, 'ru', NULL, NULL, NULL),
(73, 25, 'az', 'Telekomunikasiya', 'telecom', 'Telekomunikasiya'),
(74, 25, 'en', NULL, NULL, NULL),
(75, 25, 'ru', NULL, NULL, NULL),
(76, 26, 'az', 'Blockchain', NULL, 'Blockchain'),
(77, 26, 'en', NULL, NULL, NULL),
(78, 26, 'ru', NULL, NULL, NULL),
(79, 27, 'az', 'Media/ Reklam', 'media-advertising', 'Media/ Reklam'),
(80, 27, 'en', NULL, NULL, NULL),
(81, 27, 'ru', NULL, NULL, NULL),
(82, 28, 'az', 'Maliyyə və Bank', 'finance-banking', 'Maliyyə və Bank'),
(83, 28, 'en', NULL, NULL, NULL),
(84, 28, 'ru', NULL, NULL, NULL),
(85, 29, 'az', 'İnformasiya Texnologiyaları', 'information-technology', 'İnformasiya Texnologiyaları'),
(86, 29, 'en', NULL, NULL, NULL),
(87, 29, 'ru', NULL, NULL, NULL),
(88, 30, 'az', 'Səhiyyə', 'healthcare', 'Səhiyyə'),
(89, 30, 'en', NULL, NULL, NULL),
(90, 30, 'ru', NULL, NULL, NULL),
(91, 31, 'az', 'Energetika', 'energy', 'Energetika'),
(92, 31, 'en', NULL, NULL, NULL),
(93, 31, 'ru', NULL, NULL, NULL),
(94, 32, 'az', 'CASE STUDIES', 'case-studies', 'CASE STUDIES'),
(95, 32, 'en', NULL, NULL, NULL),
(96, 32, 'ru', NULL, NULL, NULL),
(97, 33, 'az', 'ABOUT', 'about', 'About'),
(98, 33, 'en', NULL, NULL, NULL),
(99, 33, 'ru', NULL, NULL, NULL),
(100, 34, 'az', 'ŞİRKƏT', 'company', 'ŞİRKƏT'),
(101, 34, 'en', NULL, NULL, NULL),
(102, 34, 'ru', NULL, NULL, NULL),
(103, 35, 'az', 'Şirkət haqqında', 'history', 'Şirkət haqqında'),
(104, 35, 'en', NULL, NULL, NULL),
(105, 35, 'ru', NULL, NULL, NULL),
(106, 36, 'az', 'Komandamız', 'team', 'Komandamız'),
(107, 36, 'en', NULL, NULL, NULL),
(108, 36, 'ru', NULL, NULL, NULL),
(109, 37, 'az', 'Ofis və Əlaqə', 'office-contct', 'Ofis və Əlaqə'),
(110, 37, 'en', NULL, NULL, NULL),
(111, 37, 'ru', NULL, NULL, NULL),
(112, 38, 'az', 'Azerelli courses', 'azerelli-cources', 'Azerelli courses'),
(113, 38, 'en', NULL, NULL, NULL),
(114, 38, 'ru', NULL, NULL, NULL),
(115, 39, 'az', 'İŞ PRİNSİPİ', 'princip', 'İŞ PRİNSİPİ'),
(116, 39, 'en', NULL, NULL, NULL),
(117, 39, 'ru', NULL, NULL, NULL),
(118, 40, 'az', 'Korporativ şirkətlər', 'corporate', 'Korporativ şirkətlər'),
(119, 40, 'en', NULL, NULL, NULL),
(120, 40, 'ru', NULL, NULL, NULL),
(121, 41, 'az', 'Startaplar', 'startups', 'Startaplar'),
(122, 41, 'en', NULL, NULL, NULL),
(123, 41, 'ru', NULL, NULL, NULL),
(124, 42, 'az', 'Proqram yazılımı evləri', 'software-houses', '<div>Proqram yazılımı&nbsp;<span style=\"font-size: 0.875rem;\">evləri</span></div>'),
(125, 42, 'en', NULL, NULL, NULL),
(126, 42, 'ru', NULL, NULL, NULL),
(127, 43, 'az', 'Konsaltinq şirkətləri', 'consulting-companies', '<div>Konsaltinq&nbsp;<span style=\"font-size: 0.875rem;\">şirkətləri</span></div>'),
(128, 43, 'en', NULL, NULL, NULL),
(129, 43, 'ru', NULL, NULL, NULL),
(130, 44, 'az', 'NETWORK', 'network', 'network'),
(131, 44, 'en', NULL, NULL, NULL),
(132, 44, 'ru', NULL, NULL, NULL),
(133, 45, 'az', 'Partnyorlar və Məhsuıllar', 'partners-products', '<div>Partnyorlar və&nbsp;<span style=\"font-size: 0.875rem;\">Məhsuıllar</span></div>'),
(134, 45, 'en', NULL, NULL, NULL),
(135, 45, 'ru', NULL, NULL, NULL),
(136, 46, 'az', 'Müştərilər', 'clients', 'Müştərilər'),
(137, 46, 'en', NULL, NULL, NULL),
(138, 46, 'ru', NULL, NULL, NULL),
(139, 47, 'az', 'Korporativ Sosial Məsuliyyət', 'csr', '<div>Korporativ Sosial</div><div>Məsuliyyət</div>'),
(140, 47, 'en', NULL, NULL, NULL),
(141, 47, 'ru', NULL, NULL, NULL),
(142, 48, 'az', 'Media', 'media', 'Media'),
(143, 48, 'en', NULL, NULL, NULL),
(144, 48, 'ru', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_08_01_074926_create_admin_table', 1),
(3, '2023_08_01_074927_create_menus_table', 1),
(4, '2023_08_01_074928_create_pages_table', 1),
(5, '2023_08_01_074929_create_settings_table', 1),
(6, '2023_08_01_074930_create_statics_table', 1),
(8, '2023_08_01_074932_create_company_table', 1),
(10, '2023_09_29_161018_create_head_table', 1),
(11, '2023_09_29_161019_create_head_sub_table', 1),
(12, '2023_09_29_161020_create_head_counter_table', 1),
(13, '2023_09_29_161021_create_head-index_table', 1),
(14, '2023_09_29_161022_create_service_table', 1),
(15, '2023_09_29_161023_create_slide-index_table', 1),
(16, '2023_09_29_161024_create_expertise_table', 1),
(17, '2023_09_29_161030_create_craft_table', 1),
(18, '2023_09_29_161030_create_dev_table', 1),
(19, '2023_09_29_161031_create_drive_table', 1),
(20, '2023_09_29_161032_create_banner_table', 1),
(21, '2023_09_29_161032_create_philosophy_table', 1),
(22, '2023_09_29_161034_create_faq_table', 1),
(23, '2023_09_29_161035_create_appdev_table', 1),
(24, '2023_09_29_161036_create_cases_table', 1),
(25, '2023_09_29_161037_create_recognition_table', 1),
(26, '2023_09_29_161038_create_principle_table', 1),
(27, '2023_09_29_161039_create_team_table', 1),
(28, '2023_09_29_161040_create_gallery_table', 1),
(29, '2023_09_29_161041_create_blog_table', 1),
(30, '2023_09_29_161042_create_team-menu_table', 1),
(31, '2023_09_29_161043_create_hero_table', 1),
(32, '2023_09_29_161044_create_need_table', 1),
(33, '2023_09_29_161045_create_need2_table', 1),
(34, '2023_09_29_161046_create_source_table', 1),
(35, '2023_09_29_161047_create_expert_table', 1),
(36, '2023_09_29_161048_create_teammedia_table', 1),
(37, '2023_09_29_161049_create_focus_table', 1),
(38, '2023_09_29_161050_create_page_table', 1),
(39, '2023_09_29_161051_create_start_table', 1),
(40, '2023_09_29_161053_create_part_table', 1),
(41, '2023_09_29_161054_create_story_table', 1),
(42, '2023_09_29_161055_create_longside_table', 1),
(43, '2023_10_16_145548_create_section_table', 1),
(44, '2023_10_16_145549_create_talk_table', 1),
(45, '2023_10_16_145550_create_offer_table', 1),
(46, '2023_10_16_145551_create_album_table', 1),
(47, '2023_10_16_145552_create_group_table', 1),
(48, '2023_10_16_145553_create_logo_table', 1),
(49, '2023_10_16_145554_create_solution_table', 1),
(50, '2023_10_16_145555_create_video_table', 1),
(51, '2023_09_29_144403_create_news_table', 2),
(52, '2023_10_16_145556_create_technology_table', 3),
(53, '2023_08_01_074931_create_contact_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `need1s`
--

CREATE TABLE `need1s` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `need1_translations`
--

CREATE TABLE `need1_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `need1_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title1` text COLLATE utf8mb4_unicode_ci,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title2` text COLLATE utf8mb4_unicode_ci,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title3` text COLLATE utf8mb4_unicode_ci,
  `title4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title4` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `need2s`
--

CREATE TABLE `need2s` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `need2_translations`
--

CREATE TABLE `need2_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `need2_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title1` text COLLATE utf8mb4_unicode_ci,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title2` text COLLATE utf8mb4_unicode_ci,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title3` text COLLATE utf8mb4_unicode_ci,
  `title4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title4` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `newss`
--

CREATE TABLE `newss` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `newss`
--

INSERT INTO `newss` (`id`, `image`, `active`, `created_at`, `updated_at`) VALUES
(2, 'news/51f6fd21-c443-4c8d-9bc4-935a4ab7b6bc.webp', 0, '2023-10-30 14:12:34', '2023-10-30 16:35:59'),
(3, 'news/4d3a1a3e-60c2-4bfe-872f-750563201856.webp', 0, '2023-10-30 16:37:14', '2023-10-30 16:37:14');

-- --------------------------------------------------------

--
-- Структура таблицы `news_translations`
--

CREATE TABLE `news_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `news_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news_translations`
--

INSERT INTO `news_translations` (`id`, `news_id`, `locale`, `title`, `description`) VALUES
(1, 2, 'az', 'Est provident autem', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque. Quaerat provident commodi consectetur veniam similique ad'),
(2, 2, 'en', NULL, NULL),
(3, 2, 'ru', NULL, NULL),
(4, 3, 'az', 'Molestiae adipisci d', 'Aut qui enim sint vo.Aut qui enim sint vo.Aut qui enim sint vo.Aut qui enim sint vo.Aut qui enim sint vo.Aut qui enim sint vo.Aut qui enim sint vo.Aut qui enim sint vo.Aut qui enim sint vo.Aut qui enim sint vo.Aut qui enim sint vo.Aut qui enim sint vo.Aut qui enim sint vo.Aut qui enim sint vo.Aut qui enim sint vo.'),
(5, 3, 'en', NULL, NULL),
(6, 3, 'ru', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `offers`
--

CREATE TABLE `offers` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `offer_translations`
--

CREATE TABLE `offer_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `offer_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `page_translations`
--

CREATE TABLE `page_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `page_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `parts`
--

CREATE TABLE `parts` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `part_translations`
--

CREATE TABLE `part_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `part_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci,
  `title4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description4` text COLLATE utf8mb4_unicode_ci,
  `title5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description5` text COLLATE utf8mb4_unicode_ci,
  `title6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description6` text COLLATE utf8mb4_unicode_ci,
  `title7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description7` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `philosophys`
--

CREATE TABLE `philosophys` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `philosophys`
--

INSERT INTO `philosophys` (`id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 4, '2023-10-31 11:17:30', '2023-10-31 11:17:30');

-- --------------------------------------------------------

--
-- Структура таблицы `philosophy_translations`
--

CREATE TABLE `philosophy_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `philosophy_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `philosophy_translations`
--

INSERT INTO `philosophy_translations` (`id`, `philosophy_id`, `locale`, `name`, `sub_name`, `title1`, `description1`, `title2`, `description2`, `title3`, `description3`) VALUES
(1, 1, 'az', 'PRORAM TƏMİNATNDA BİZİM REAL-TIME FƏLSƏFƏİMİZ', 'FƏLSƏFƏİMİZ', 'ETİBARLILIQ', '<li>Planlaşdırma və çatdırılma\r\nnəzarətinə xüsusi diqqət\r\nyetirməklə müəyyən edilmiş\r\nxidmət prosesləri</li>\r\n<li>Təkmilləşdirilmiş HR prosesləri\r\ndavamlı və fasiləsiz xidmət\r\ngöstərilməsinin qorunmasına\r\nyönəlmişdir</li>\r\n<li>Çatdırılma keyfiyyətini və\r\nsəmərəliliyini izləmək üçün bir\r\nsıra KPI ilə keyfiyyətə nəzarət</li>', 'ŞƏFFAFLIQ', '<li>Müxtəlif idarəetmə\r\nsəviyyələri üzrə müntəzəm\r\nvə ətraflı hesabatlar\r\n(həftəlik, aylıq və s.)</li>\r\n<li>Təfərrüatlı xərc hesabatları\r\nilə müşayiət olunan aydın,\r\nproqnozlaşdırıla bilən və\r\nardıcıl hesablama</li>\r\n<li>Jira, Confluence, Azure\r\nDevOps kimi tapşırıq və\r\nlayihə idarəetmə\r\nsistemlərindən geniş istifadə</li>', 'TƏRƏFDAŞLIQ', '<li>Yalnız təyin edilmiş tapşırıqları\r\nyerinə yetirmək əvəzinə biznes\r\ndəyərini çatdırmağa diqqət\r\nyetirin</li>\r\n<li>Müştəri təşkilatlanması və\r\nbiznes üsulları ilə sinerji üçün\r\nuyğunlaşdırılmış iş prosesləri</li>\r\n<li>Daim optimallaşdırma, daha\r\nyaxşı performans və\r\nəməkdaşlıq səmərəliliyi üçün</li>'),
(2, 1, 'en', NULL, NULL, NULL, '<li>Migration to modern technologies and platforms</li>', NULL, '<li>Migration to modern technologies and platforms</li>', NULL, '<li>Migration to modern technologies and platforms</li>'),
(3, 1, 'ru', NULL, NULL, NULL, '<li>Migration to modern technologies and platforms</li>', NULL, '<li>Migration to modern technologies and platforms</li>', NULL, '<li>Migration to modern technologies and platforms</li>');

-- --------------------------------------------------------

--
-- Структура таблицы `principles`
--

CREATE TABLE `principles` (
  `id` bigint UNSIGNED NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `principle_translations`
--

CREATE TABLE `principle_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `principle_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `recognitions`
--

CREATE TABLE `recognitions` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `recognition_translations`
--

CREATE TABLE `recognition_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `recognition_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sections`
--

CREATE TABLE `sections` (
  `id` bigint UNSIGNED NOT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `section_translations`
--

CREATE TABLE `section_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `section_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`) VALUES
(1, '2023-10-30 12:13:46', '2023-10-30 12:13:46'),
(2, '2023-10-30 12:14:22', '2023-10-30 12:14:22'),
(3, '2023-10-30 12:16:54', '2023-10-30 12:16:54'),
(4, '2023-10-30 12:17:32', '2023-10-30 12:17:32'),
(5, '2023-10-30 12:18:07', '2023-10-30 12:18:07'),
(6, '2023-10-30 12:18:38', '2023-10-30 12:18:38');

-- --------------------------------------------------------

--
-- Структура таблицы `service_translations`
--

CREATE TABLE `service_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `service_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `service_translations`
--

INSERT INTO `service_translations` (`id`, `service_id`, `locale`, `name`, `sub_name`, `title`, `description`) VALUES
(1, 1, 'az', NULL, NULL, 'FƏRDİ PROQRAM TƏMİNATI', '<li>FƏRDİ PROQRAM TƏMİNATI</li>\r\n<li>FƏRDİ PROQRAM TƏMİNATI</li>\r\n<li>FƏRDİ PROQRAM TƏMİNATI</li>'),
(2, 1, 'en', NULL, NULL, NULL, '<li>Example</li>'),
(3, 1, 'ru', NULL, NULL, NULL, '<li>Example</li>'),
(4, 2, 'az', NULL, NULL, 'ÖZƏL KOMANDA', '<li>ÖZƏL KOMANDA\r\n</li><li>ÖZƏL KOMANDA\r\n</li><li>ÖZƏL KOMANDA</li>'),
(5, 2, 'en', NULL, NULL, NULL, '<li>Example</li>'),
(6, 2, 'ru', NULL, NULL, NULL, '<li>Example</li>'),
(7, 3, 'az', NULL, NULL, 'PROQRAM TESTİ', '<li>PROQRAM TESTİ</li>\r\n<li>PROQRAM TESTİ</li>\r\n<li>PROQRAM TESTİ</li>'),
(8, 3, 'en', NULL, NULL, NULL, '<li>Example</li>'),
(9, 3, 'ru', NULL, NULL, NULL, '<li>Example</li>'),
(10, 4, 'az', NULL, NULL, 'QRAFİK DİZAYN', '<li>QRAFİK DİZAYN</li>\r\n<li>QRAFİK DİZAYN</li>\r\n<li>QRAFİK DİZAYN</li>'),
(11, 4, 'en', NULL, NULL, NULL, '<li>Example</li>'),
(12, 4, 'ru', NULL, NULL, NULL, '<li>Example</li>'),
(13, 5, 'az', NULL, NULL, 'İDARƏ OLUNAN XİDMƏTLƏR', '<li>İDARƏ OLUNAN XİDMƏTLƏR</li>\r\n<li>İDARƏ OLUNAN XİDMƏTLƏR</li>\r\n<li>İDARƏ OLUNAN XİDMƏTLƏR</li>'),
(14, 5, 'en', NULL, NULL, NULL, '<li>Example</li>'),
(15, 5, 'ru', NULL, NULL, NULL, '<li>Example</li>'),
(16, 6, 'az', NULL, NULL, 'İT KONSULTASİYA', '<li>İT KONSULTASİYA</li>\r\n<li>İT KONSULTASİYA</li>\r\n<li>İT KONSULTASİYA</li>'),
(17, 6, 'en', NULL, NULL, NULL, '<li>Example</li>'),
(18, 6, 'ru', NULL, NULL, NULL, '<li>Example</li>');

-- --------------------------------------------------------

--
-- Структура таблицы `slide_indexs`
--

CREATE TABLE `slide_indexs` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `slide_indexs`
--

INSERT INTO `slide_indexs` (`id`, `image`, `url`, `created_at`, `updated_at`) VALUES
(1, 'slide_index_images/0ecacf25-58ca-4cc3-b8d0-5925f9b9456a.webp', 'LEARN MORE', '2023-10-30 12:22:07', '2023-10-30 12:22:07');

-- --------------------------------------------------------

--
-- Структура таблицы `slide_index_translations`
--

CREATE TABLE `slide_index_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `slide_index_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `slide_index_translations`
--

INSERT INTO `slide_index_translations` (`id`, `slide_index_id`, `locale`, `name`, `sub_name`, `title`, `description`) VALUES
(1, 1, 'az', NULL, NULL, 'FƏRDİ PROQRAM TƏMİNATININ VƏ DATA STURKTURUN HAZIRLANMASI', 'Məlumatlarla işləmə tərzinizi dəyişdirəcək və məlumat əsasındaəsaslandırılmış qərarlar qəbul etməyə kömək edəcək uyğunlaşdırılmış Big Data həlli əldə edin'),
(2, 1, 'en', NULL, NULL, NULL, 'Description'),
(3, 1, 'ru', NULL, NULL, NULL, 'Description');

-- --------------------------------------------------------

--
-- Структура таблицы `solutions`
--

CREATE TABLE `solutions` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `solution_translations`
--

CREATE TABLE `solution_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `solution_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sources`
--

CREATE TABLE `sources` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `source_translations`
--

CREATE TABLE `source_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `source_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `starts`
--

CREATE TABLE `starts` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `start_translations`
--

CREATE TABLE `start_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `start_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci,
  `title4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description4` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `statics`
--

CREATE TABLE `statics` (
  `id` bigint UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `static_translations`
--

CREATE TABLE `static_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `static_model_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `stories`
--

CREATE TABLE `stories` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `story_translations`
--

CREATE TABLE `story_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `story_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci,
  `tag1` text COLLATE utf8mb4_unicode_ci,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci,
  `tag2` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `talks`
--

CREATE TABLE `talks` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `talk_translations`
--

CREATE TABLE `talk_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `talk_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `team` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `team_medias`
--

CREATE TABLE `team_medias` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `team_media_translations`
--

CREATE TABLE `team_media_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `team_media_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `team_menus`
--

CREATE TABLE `team_menus` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `team_menu_translations`
--

CREATE TABLE `team_menu_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `team_menu_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `team_pages`
--

CREATE TABLE `team_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `team_page_translations`
--

CREATE TABLE `team_page_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `team_page_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `team_translations`
--

CREATE TABLE `team_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `team_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `technologies`
--

CREATE TABLE `technologies` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `technologies`
--

INSERT INTO `technologies` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'technology_images/6e941121-6200-4363-a7ae-8c294b5504e9.webp', '2023-10-31 06:19:45', '2023-10-31 06:19:45'),
(2, 'technology_images/745bce54-db55-4095-b91f-0d44ba4a284f.webp', '2023-10-31 06:20:22', '2023-10-31 06:20:22'),
(3, 'technology_images/39b2ef5a-757c-48a1-bc85-03122c93451c.webp', '2023-10-31 06:20:58', '2023-10-31 06:20:58'),
(4, 'technology_images/efa036a7-5d94-4c67-aed2-349fc7714d2e.webp', '2023-10-31 06:21:28', '2023-10-31 06:21:28'),
(5, 'technology_images/91b010fe-366d-4b88-a261-3d3e92522d8f.webp', '2023-10-31 06:22:06', '2023-10-31 06:22:06'),
(6, 'technology_images/7a187cde-9e4f-48ca-8271-10b6a4333e6c.webp', '2023-10-31 06:22:51', '2023-10-31 06:22:51');

-- --------------------------------------------------------

--
-- Структура таблицы `technology_translations`
--

CREATE TABLE `technology_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `technology_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `technology_translations`
--

INSERT INTO `technology_translations` (`id`, `technology_id`, `locale`, `title`) VALUES
(1, 1, 'az', '.NET'),
(2, 1, 'en', NULL),
(3, 1, 'ru', NULL),
(4, 2, 'az', 'Java'),
(5, 2, 'en', NULL),
(6, 2, 'ru', NULL),
(7, 3, 'az', 'JavaScript'),
(8, 3, 'en', NULL),
(9, 3, 'ru', NULL),
(10, 4, 'az', 'PHP'),
(11, 4, 'en', NULL),
(12, 4, 'ru', NULL),
(13, 5, 'az', 'React JS'),
(14, 5, 'en', NULL),
(15, 5, 'ru', NULL),
(16, 6, 'az', 'Python'),
(17, 6, 'en', NULL),
(18, 6, 'ru', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `videos`
--

CREATE TABLE `videos` (
  `id` bigint UNSIGNED NOT NULL,
  `video_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `videos`
--

INSERT INTO `videos` (`id`, `video_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ktzOI8decE0', 'video_images/470cae88-4a9c-4cdd-a544-1f4476c9e5ca.webp', '2023-10-30 13:36:51', '2023-10-30 13:36:51');

-- --------------------------------------------------------

--
-- Структура таблицы `video_translations`
--

CREATE TABLE `video_translations` (
  `id` bigint UNSIGNED NOT NULL,
  `video_id` bigint UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `video_translations`
--

INSERT INTO `video_translations` (`id`, `video_id`, `locale`, `title`) VALUES
(1, 1, 'az', 'Tehlukesizlik'),
(2, 1, 'en', NULL),
(3, 1, 'ru', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Индексы таблицы `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `album_translations`
--
ALTER TABLE `album_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `album_translations_album_id_locale_unique` (`album_id`,`locale`),
  ADD KEY `album_translations_locale_index` (`locale`);

--
-- Индексы таблицы `appdevs`
--
ALTER TABLE `appdevs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appdevs_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `appdev_translations`
--
ALTER TABLE `appdev_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `appdev_translations_appdev_id_locale_unique` (`appdev_id`,`locale`),
  ADD KEY `appdev_translations_locale_index` (`locale`);

--
-- Индексы таблицы `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `banner_translations`
--
ALTER TABLE `banner_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banner_translations_banner_id_locale_unique` (`banner_id`,`locale`),
  ADD KEY `banner_translations_locale_index` (`locale`);

--
-- Индексы таблицы `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_translations_blog_id_locale_unique` (`blog_id`,`locale`),
  ADD KEY `blog_translations_locale_index` (`locale`);

--
-- Индексы таблицы `casess`
--
ALTER TABLE `casess`
  ADD PRIMARY KEY (`id`),
  ADD KEY `casess_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `cases_translations`
--
ALTER TABLE `cases_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cases_translations_cases_id_locale_unique` (`cases_id`,`locale`),
  ADD KEY `cases_translations_locale_index` (`locale`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `crafts`
--
ALTER TABLE `crafts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crafts_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `craft_translations`
--
ALTER TABLE `craft_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `craft_translations_craft_id_locale_unique` (`craft_id`,`locale`),
  ADD KEY `craft_translations_locale_index` (`locale`);

--
-- Индексы таблицы `devs`
--
ALTER TABLE `devs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `devs_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `dev_translations`
--
ALTER TABLE `dev_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dev_translations_dev_id_locale_unique` (`dev_id`,`locale`),
  ADD KEY `dev_translations_locale_index` (`locale`);

--
-- Индексы таблицы `drives`
--
ALTER TABLE `drives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drives_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `drive_translations`
--
ALTER TABLE `drive_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `drive_translations_drive_id_locale_unique` (`drive_id`,`locale`),
  ADD KEY `drive_translations_locale_index` (`locale`);

--
-- Индексы таблицы `expertises`
--
ALTER TABLE `expertises`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `expertise_translations`
--
ALTER TABLE `expertise_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `expertise_translations_expertise_id_locale_unique` (`expertise_id`,`locale`),
  ADD KEY `expertise_translations_locale_index` (`locale`);

--
-- Индексы таблицы `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `expert_translations`
--
ALTER TABLE `expert_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `expert_translations_expert_id_locale_unique` (`expert_id`,`locale`),
  ADD KEY `expert_translations_locale_index` (`locale`);

--
-- Индексы таблицы `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `faq_translations`
--
ALTER TABLE `faq_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `faq_translations_faq_id_locale_unique` (`faq_id`,`locale`),
  ADD KEY `faq_translations_locale_index` (`locale`);

--
-- Индексы таблицы `focuss`
--
ALTER TABLE `focuss`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `focus_translations`
--
ALTER TABLE `focus_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `focus_translations_focus_id_locale_unique` (`focus_id`,`locale`),
  ADD KEY `focus_translations_locale_index` (`locale`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `heads`
--
ALTER TABLE `heads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `heads_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `head_counters`
--
ALTER TABLE `head_counters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `head_counters_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `head_counter_translations`
--
ALTER TABLE `head_counter_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `head_counter_translations_head_counter_id_locale_unique` (`head_counter_id`,`locale`),
  ADD KEY `head_counter_translations_locale_index` (`locale`);

--
-- Индексы таблицы `head_indexs`
--
ALTER TABLE `head_indexs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `head_index_translations`
--
ALTER TABLE `head_index_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `head_index_translations_head_index_id_locale_unique` (`head_index_id`,`locale`),
  ADD KEY `head_index_translations_locale_index` (`locale`);

--
-- Индексы таблицы `head_subs`
--
ALTER TABLE `head_subs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `head_subs_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `head_sub_translations`
--
ALTER TABLE `head_sub_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `head_sub_translations_head_sub_id_locale_unique` (`head_sub_id`,`locale`),
  ADD KEY `head_sub_translations_locale_index` (`locale`);

--
-- Индексы таблицы `head_translations`
--
ALTER TABLE `head_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `head_translations_head_id_locale_unique` (`head_id`,`locale`),
  ADD KEY `head_translations_locale_index` (`locale`);

--
-- Индексы таблицы `heros`
--
ALTER TABLE `heros`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hero_translations`
--
ALTER TABLE `hero_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hero_translations_hero_id_locale_unique` (`hero_id`,`locale`),
  ADD KEY `hero_translations_locale_index` (`locale`);

--
-- Индексы таблицы `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `longsides`
--
ALTER TABLE `longsides`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `longside_translations`
--
ALTER TABLE `longside_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `longside_translations_longside_id_locale_unique` (`longside_id`,`locale`),
  ADD KEY `longside_translations_locale_index` (`locale`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `menu_translations`
--
ALTER TABLE `menu_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menu_translations_menu_id_locale_unique` (`menu_id`,`locale`),
  ADD KEY `menu_translations_locale_index` (`locale`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `need1s`
--
ALTER TABLE `need1s`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `need1_translations`
--
ALTER TABLE `need1_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `need1_translations_need1_id_locale_unique` (`need1_id`,`locale`),
  ADD KEY `need1_translations_locale_index` (`locale`);

--
-- Индексы таблицы `need2s`
--
ALTER TABLE `need2s`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `need2_translations`
--
ALTER TABLE `need2_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `need2_translations_need2_id_locale_unique` (`need2_id`,`locale`),
  ADD KEY `need2_translations_locale_index` (`locale`);

--
-- Индексы таблицы `newss`
--
ALTER TABLE `newss`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news_translations`
--
ALTER TABLE `news_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_translations_news_id_locale_unique` (`news_id`,`locale`),
  ADD KEY `news_translations_locale_index` (`locale`);

--
-- Индексы таблицы `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `offer_translations`
--
ALTER TABLE `offer_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `offer_translations_offer_id_locale_unique` (`offer_id`,`locale`),
  ADD KEY `offer_translations_locale_index` (`locale`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `page_translations`
--
ALTER TABLE `page_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_translations_page_id_locale_unique` (`page_id`,`locale`),
  ADD KEY `page_translations_locale_index` (`locale`);

--
-- Индексы таблицы `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `part_translations`
--
ALTER TABLE `part_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `part_translations_part_id_locale_unique` (`part_id`,`locale`),
  ADD KEY `part_translations_locale_index` (`locale`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `philosophys`
--
ALTER TABLE `philosophys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `philosophys_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `philosophy_translations`
--
ALTER TABLE `philosophy_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `philosophy_translations_philosophy_id_locale_unique` (`philosophy_id`,`locale`),
  ADD KEY `philosophy_translations_locale_index` (`locale`);

--
-- Индексы таблицы `principles`
--
ALTER TABLE `principles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `principles_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `principle_translations`
--
ALTER TABLE `principle_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `principle_translations_principle_id_locale_unique` (`principle_id`,`locale`),
  ADD KEY `principle_translations_locale_index` (`locale`);

--
-- Индексы таблицы `recognitions`
--
ALTER TABLE `recognitions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recognitions_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `recognition_translations`
--
ALTER TABLE `recognition_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `recognition_translations_recognition_id_locale_unique` (`recognition_id`,`locale`),
  ADD KEY `recognition_translations_locale_index` (`locale`);

--
-- Индексы таблицы `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `section_translations`
--
ALTER TABLE `section_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `section_translations_section_id_locale_unique` (`section_id`,`locale`),
  ADD KEY `section_translations_locale_index` (`locale`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `service_translations`
--
ALTER TABLE `service_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `service_translations_service_id_locale_unique` (`service_id`,`locale`),
  ADD KEY `service_translations_locale_index` (`locale`);

--
-- Индексы таблицы `slide_indexs`
--
ALTER TABLE `slide_indexs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `slide_index_translations`
--
ALTER TABLE `slide_index_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slide_index_translations_slide_index_id_locale_unique` (`slide_index_id`,`locale`),
  ADD KEY `slide_index_translations_locale_index` (`locale`);

--
-- Индексы таблицы `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `solution_translations`
--
ALTER TABLE `solution_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `solution_translations_solution_id_locale_unique` (`solution_id`,`locale`),
  ADD KEY `solution_translations_locale_index` (`locale`);

--
-- Индексы таблицы `sources`
--
ALTER TABLE `sources`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `source_translations`
--
ALTER TABLE `source_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `source_translations_source_id_locale_unique` (`source_id`,`locale`),
  ADD KEY `source_translations_locale_index` (`locale`);

--
-- Индексы таблицы `starts`
--
ALTER TABLE `starts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `start_translations`
--
ALTER TABLE `start_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `start_translations_start_id_locale_unique` (`start_id`,`locale`),
  ADD KEY `start_translations_locale_index` (`locale`);

--
-- Индексы таблицы `statics`
--
ALTER TABLE `statics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `static_translations`
--
ALTER TABLE `static_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `static_translations_static_model_id_locale_unique` (`static_model_id`,`locale`),
  ADD KEY `static_translations_locale_index` (`locale`);

--
-- Индексы таблицы `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `story_translations`
--
ALTER TABLE `story_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `story_translations_story_id_locale_unique` (`story_id`,`locale`),
  ADD KEY `story_translations_locale_index` (`locale`);

--
-- Индексы таблицы `talks`
--
ALTER TABLE `talks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `talk_translations`
--
ALTER TABLE `talk_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `talk_translations_talk_id_locale_unique` (`talk_id`,`locale`),
  ADD KEY `talk_translations_locale_index` (`locale`);

--
-- Индексы таблицы `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `team_medias`
--
ALTER TABLE `team_medias`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `team_media_translations`
--
ALTER TABLE `team_media_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_media_translations_team_media_id_locale_unique` (`team_media_id`,`locale`),
  ADD KEY `team_media_translations_locale_index` (`locale`);

--
-- Индексы таблицы `team_menus`
--
ALTER TABLE `team_menus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `team_menu_translations`
--
ALTER TABLE `team_menu_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_menu_translations_team_menu_id_locale_unique` (`team_menu_id`,`locale`),
  ADD KEY `team_menu_translations_locale_index` (`locale`);

--
-- Индексы таблицы `team_pages`
--
ALTER TABLE `team_pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `team_page_translations`
--
ALTER TABLE `team_page_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_page_translations_team_page_id_locale_unique` (`team_page_id`,`locale`),
  ADD KEY `team_page_translations_locale_index` (`locale`);

--
-- Индексы таблицы `team_translations`
--
ALTER TABLE `team_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_translations_team_id_locale_unique` (`team_id`,`locale`),
  ADD KEY `team_translations_locale_index` (`locale`);

--
-- Индексы таблицы `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `technology_translations`
--
ALTER TABLE `technology_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `technology_translations_technology_id_locale_unique` (`technology_id`,`locale`),
  ADD KEY `technology_translations_locale_index` (`locale`);

--
-- Индексы таблицы `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `video_translations`
--
ALTER TABLE `video_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `video_translations_video_id_locale_unique` (`video_id`,`locale`),
  ADD KEY `video_translations_locale_index` (`locale`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `album_translations`
--
ALTER TABLE `album_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `appdevs`
--
ALTER TABLE `appdevs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `appdev_translations`
--
ALTER TABLE `appdev_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `banner_translations`
--
ALTER TABLE `banner_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `blog_translations`
--
ALTER TABLE `blog_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `casess`
--
ALTER TABLE `casess`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `cases_translations`
--
ALTER TABLE `cases_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `crafts`
--
ALTER TABLE `crafts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `craft_translations`
--
ALTER TABLE `craft_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `devs`
--
ALTER TABLE `devs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `dev_translations`
--
ALTER TABLE `dev_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `drives`
--
ALTER TABLE `drives`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `drive_translations`
--
ALTER TABLE `drive_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `expertises`
--
ALTER TABLE `expertises`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `expertise_translations`
--
ALTER TABLE `expertise_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `experts`
--
ALTER TABLE `experts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `expert_translations`
--
ALTER TABLE `expert_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `faq_translations`
--
ALTER TABLE `faq_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `focuss`
--
ALTER TABLE `focuss`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `focus_translations`
--
ALTER TABLE `focus_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `heads`
--
ALTER TABLE `heads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `head_counters`
--
ALTER TABLE `head_counters`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `head_counter_translations`
--
ALTER TABLE `head_counter_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `head_indexs`
--
ALTER TABLE `head_indexs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `head_index_translations`
--
ALTER TABLE `head_index_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `head_subs`
--
ALTER TABLE `head_subs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `head_sub_translations`
--
ALTER TABLE `head_sub_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `head_translations`
--
ALTER TABLE `head_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `heros`
--
ALTER TABLE `heros`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `hero_translations`
--
ALTER TABLE `hero_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `longsides`
--
ALTER TABLE `longsides`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `longside_translations`
--
ALTER TABLE `longside_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `menu_translations`
--
ALTER TABLE `menu_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблицы `need1s`
--
ALTER TABLE `need1s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `need1_translations`
--
ALTER TABLE `need1_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `need2s`
--
ALTER TABLE `need2s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `need2_translations`
--
ALTER TABLE `need2_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `newss`
--
ALTER TABLE `newss`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `news_translations`
--
ALTER TABLE `news_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `offer_translations`
--
ALTER TABLE `offer_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `page_translations`
--
ALTER TABLE `page_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `parts`
--
ALTER TABLE `parts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `part_translations`
--
ALTER TABLE `part_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `philosophys`
--
ALTER TABLE `philosophys`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `philosophy_translations`
--
ALTER TABLE `philosophy_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `principles`
--
ALTER TABLE `principles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `principle_translations`
--
ALTER TABLE `principle_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `recognitions`
--
ALTER TABLE `recognitions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `recognition_translations`
--
ALTER TABLE `recognition_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `section_translations`
--
ALTER TABLE `section_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `service_translations`
--
ALTER TABLE `service_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `slide_indexs`
--
ALTER TABLE `slide_indexs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `slide_index_translations`
--
ALTER TABLE `slide_index_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `solution_translations`
--
ALTER TABLE `solution_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sources`
--
ALTER TABLE `sources`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `source_translations`
--
ALTER TABLE `source_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `starts`
--
ALTER TABLE `starts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `start_translations`
--
ALTER TABLE `start_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `statics`
--
ALTER TABLE `statics`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `static_translations`
--
ALTER TABLE `static_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `story_translations`
--
ALTER TABLE `story_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `talks`
--
ALTER TABLE `talks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `talk_translations`
--
ALTER TABLE `talk_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `team_medias`
--
ALTER TABLE `team_medias`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `team_media_translations`
--
ALTER TABLE `team_media_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `team_menus`
--
ALTER TABLE `team_menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `team_menu_translations`
--
ALTER TABLE `team_menu_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `team_pages`
--
ALTER TABLE `team_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `team_page_translations`
--
ALTER TABLE `team_page_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `team_translations`
--
ALTER TABLE `team_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `technology_translations`
--
ALTER TABLE `technology_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `video_translations`
--
ALTER TABLE `video_translations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `album_translations`
--
ALTER TABLE `album_translations`
  ADD CONSTRAINT `album_translations_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `appdevs`
--
ALTER TABLE `appdevs`
  ADD CONSTRAINT `appdevs_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `appdev_translations`
--
ALTER TABLE `appdev_translations`
  ADD CONSTRAINT `appdev_translations_appdev_id_foreign` FOREIGN KEY (`appdev_id`) REFERENCES `appdevs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `banner_translations`
--
ALTER TABLE `banner_translations`
  ADD CONSTRAINT `banner_translations_banner_id_foreign` FOREIGN KEY (`banner_id`) REFERENCES `banners` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `blog_translations`
--
ALTER TABLE `blog_translations`
  ADD CONSTRAINT `blog_translations_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `casess`
--
ALTER TABLE `casess`
  ADD CONSTRAINT `casess_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `cases_translations`
--
ALTER TABLE `cases_translations`
  ADD CONSTRAINT `cases_translations_cases_id_foreign` FOREIGN KEY (`cases_id`) REFERENCES `casess` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `crafts`
--
ALTER TABLE `crafts`
  ADD CONSTRAINT `crafts_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `craft_translations`
--
ALTER TABLE `craft_translations`
  ADD CONSTRAINT `craft_translations_craft_id_foreign` FOREIGN KEY (`craft_id`) REFERENCES `crafts` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `devs`
--
ALTER TABLE `devs`
  ADD CONSTRAINT `devs_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `dev_translations`
--
ALTER TABLE `dev_translations`
  ADD CONSTRAINT `dev_translations_dev_id_foreign` FOREIGN KEY (`dev_id`) REFERENCES `devs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `drives`
--
ALTER TABLE `drives`
  ADD CONSTRAINT `drives_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `drive_translations`
--
ALTER TABLE `drive_translations`
  ADD CONSTRAINT `drive_translations_drive_id_foreign` FOREIGN KEY (`drive_id`) REFERENCES `drives` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `expertise_translations`
--
ALTER TABLE `expertise_translations`
  ADD CONSTRAINT `expertise_translations_expertise_id_foreign` FOREIGN KEY (`expertise_id`) REFERENCES `expertises` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `expert_translations`
--
ALTER TABLE `expert_translations`
  ADD CONSTRAINT `expert_translations_expert_id_foreign` FOREIGN KEY (`expert_id`) REFERENCES `experts` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `faq_translations`
--
ALTER TABLE `faq_translations`
  ADD CONSTRAINT `faq_translations_faq_id_foreign` FOREIGN KEY (`faq_id`) REFERENCES `faqs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `focus_translations`
--
ALTER TABLE `focus_translations`
  ADD CONSTRAINT `focus_translations_focus_id_foreign` FOREIGN KEY (`focus_id`) REFERENCES `focuss` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `heads`
--
ALTER TABLE `heads`
  ADD CONSTRAINT `heads_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `head_counters`
--
ALTER TABLE `head_counters`
  ADD CONSTRAINT `head_counters_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `head_counter_translations`
--
ALTER TABLE `head_counter_translations`
  ADD CONSTRAINT `head_counter_translations_head_counter_id_foreign` FOREIGN KEY (`head_counter_id`) REFERENCES `head_counters` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `head_index_translations`
--
ALTER TABLE `head_index_translations`
  ADD CONSTRAINT `head_index_translations_head_index_id_foreign` FOREIGN KEY (`head_index_id`) REFERENCES `head_indexs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `head_subs`
--
ALTER TABLE `head_subs`
  ADD CONSTRAINT `head_subs_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `head_sub_translations`
--
ALTER TABLE `head_sub_translations`
  ADD CONSTRAINT `head_sub_translations_head_sub_id_foreign` FOREIGN KEY (`head_sub_id`) REFERENCES `head_subs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `head_translations`
--
ALTER TABLE `head_translations`
  ADD CONSTRAINT `head_translations_head_id_foreign` FOREIGN KEY (`head_id`) REFERENCES `heads` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `hero_translations`
--
ALTER TABLE `hero_translations`
  ADD CONSTRAINT `hero_translations_hero_id_foreign` FOREIGN KEY (`hero_id`) REFERENCES `heros` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `longside_translations`
--
ALTER TABLE `longside_translations`
  ADD CONSTRAINT `longside_translations_longside_id_foreign` FOREIGN KEY (`longside_id`) REFERENCES `longsides` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_translations`
--
ALTER TABLE `menu_translations`
  ADD CONSTRAINT `menu_translations_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `need1_translations`
--
ALTER TABLE `need1_translations`
  ADD CONSTRAINT `need1_translations_need1_id_foreign` FOREIGN KEY (`need1_id`) REFERENCES `need1s` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `need2_translations`
--
ALTER TABLE `need2_translations`
  ADD CONSTRAINT `need2_translations_need2_id_foreign` FOREIGN KEY (`need2_id`) REFERENCES `need2s` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `news_translations`
--
ALTER TABLE `news_translations`
  ADD CONSTRAINT `news_translations_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `newss` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `offer_translations`
--
ALTER TABLE `offer_translations`
  ADD CONSTRAINT `offer_translations_offer_id_foreign` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `page_translations`
--
ALTER TABLE `page_translations`
  ADD CONSTRAINT `page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `part_translations`
--
ALTER TABLE `part_translations`
  ADD CONSTRAINT `part_translations_part_id_foreign` FOREIGN KEY (`part_id`) REFERENCES `parts` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `philosophys`
--
ALTER TABLE `philosophys`
  ADD CONSTRAINT `philosophys_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `philosophy_translations`
--
ALTER TABLE `philosophy_translations`
  ADD CONSTRAINT `philosophy_translations_philosophy_id_foreign` FOREIGN KEY (`philosophy_id`) REFERENCES `philosophys` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `principles`
--
ALTER TABLE `principles`
  ADD CONSTRAINT `principles_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `principle_translations`
--
ALTER TABLE `principle_translations`
  ADD CONSTRAINT `principle_translations_principle_id_foreign` FOREIGN KEY (`principle_id`) REFERENCES `principles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `recognitions`
--
ALTER TABLE `recognitions`
  ADD CONSTRAINT `recognitions_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `recognition_translations`
--
ALTER TABLE `recognition_translations`
  ADD CONSTRAINT `recognition_translations_recognition_id_foreign` FOREIGN KEY (`recognition_id`) REFERENCES `recognitions` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `section_translations`
--
ALTER TABLE `section_translations`
  ADD CONSTRAINT `section_translations_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `service_translations`
--
ALTER TABLE `service_translations`
  ADD CONSTRAINT `service_translations_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `slide_index_translations`
--
ALTER TABLE `slide_index_translations`
  ADD CONSTRAINT `slide_index_translations_slide_index_id_foreign` FOREIGN KEY (`slide_index_id`) REFERENCES `slide_indexs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `solution_translations`
--
ALTER TABLE `solution_translations`
  ADD CONSTRAINT `solution_translations_solution_id_foreign` FOREIGN KEY (`solution_id`) REFERENCES `solutions` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `source_translations`
--
ALTER TABLE `source_translations`
  ADD CONSTRAINT `source_translations_source_id_foreign` FOREIGN KEY (`source_id`) REFERENCES `sources` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `start_translations`
--
ALTER TABLE `start_translations`
  ADD CONSTRAINT `start_translations_start_id_foreign` FOREIGN KEY (`start_id`) REFERENCES `starts` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `static_translations`
--
ALTER TABLE `static_translations`
  ADD CONSTRAINT `static_translations_static_model_id_foreign` FOREIGN KEY (`static_model_id`) REFERENCES `statics` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `story_translations`
--
ALTER TABLE `story_translations`
  ADD CONSTRAINT `story_translations_story_id_foreign` FOREIGN KEY (`story_id`) REFERENCES `stories` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `talk_translations`
--
ALTER TABLE `talk_translations`
  ADD CONSTRAINT `talk_translations_talk_id_foreign` FOREIGN KEY (`talk_id`) REFERENCES `talks` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `team_media_translations`
--
ALTER TABLE `team_media_translations`
  ADD CONSTRAINT `team_media_translations_team_media_id_foreign` FOREIGN KEY (`team_media_id`) REFERENCES `team_medias` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `team_menu_translations`
--
ALTER TABLE `team_menu_translations`
  ADD CONSTRAINT `team_menu_translations_team_menu_id_foreign` FOREIGN KEY (`team_menu_id`) REFERENCES `team_menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `team_page_translations`
--
ALTER TABLE `team_page_translations`
  ADD CONSTRAINT `team_page_translations_team_page_id_foreign` FOREIGN KEY (`team_page_id`) REFERENCES `team_pages` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `team_translations`
--
ALTER TABLE `team_translations`
  ADD CONSTRAINT `team_translations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `technology_translations`
--
ALTER TABLE `technology_translations`
  ADD CONSTRAINT `technology_translations_technology_id_foreign` FOREIGN KEY (`technology_id`) REFERENCES `technologies` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `video_translations`
--
ALTER TABLE `video_translations`
  ADD CONSTRAINT `video_translations_video_id_foreign` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
