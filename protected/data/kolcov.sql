-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Окт 30 2013 г., 13:44
-- Версия сервера: 5.5.34-0ubuntu0.12.04.1
-- Версия PHP: 5.3.10-1ubuntu3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `kolsov`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_info`
--

CREATE TABLE IF NOT EXISTS `tbl_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang` char(2) NOT NULL,
  `fio` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `jabber` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `skype` varchar(30) DEFAULT NULL,
  `icq` varchar(30) DEFAULT NULL,
  `university` varchar(100) DEFAULT NULL,
  `study_per` varchar(100) DEFAULT NULL,
  `diploma` varchar(100) DEFAULT NULL,
  `urluni` varchar(100) DEFAULT NULL,
  `unicountry` varchar(100) DEFAULT NULL,
  `maintitle` varchar(100) DEFAULT NULL,
  `namepage` varchar(100) DEFAULT NULL,
  `profession` varchar(100) DEFAULT NULL,
  `quality` text,
  `exp` text,
  `owner_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `tbl_info`
--

INSERT INTO `tbl_info` (`id`, `lang`, `fio`, `telephone`, `jabber`, `email`, `skype`, `icq`, `university`, `study_per`, `diploma`, `urluni`, `unicountry`, `maintitle`, `namepage`, `profession`, `quality`, `exp`, `owner_id`) VALUES
(1, 'en', 'Koltsov Sergey', '+79218040079', '', 'inser7@ya.ru', '', '', 'PetrSU', '2004-2009', 'Information Systems and Technologies', 'http://petrsu.ru/', 'Russia', 'Resume', '', 'Web developer', 'Find a permanent job in IT ', 'PHP, YiiFramework, CodeIgniter, JS, Python+Django, Linux, SQL, HTML, CSS experience with servers on linux. I think that the tool is not important. All can be learned for the week.', 1),
(2, 'ru', 'Кольцов Сергей', '+79218040079', '', 'inser7@ya.ru', '', '', 'ПетрГУ', '2004-2009', 'Информационные системы и технологии', 'http://petrsu.ru/', 'Россия', 'Резюме', '', 'Разработчик', '', 'PHP, YiiFramework, CodeIgniter, JS, Python+Django, Linux, SQL, HTML, CSS', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `profile` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `salt`, `email`, `profile`) VALUES
(1, 'demo', '2e5c7db760a33498023813489cfadc0b', '28b206548469ce62182048fd9cf91760', 'webmaster@example.com', '');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_work`
--

CREATE TABLE IF NOT EXISTS `tbl_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namecompany` varchar(128) NOT NULL,
  `lang` char(2) NOT NULL,
  `urlcompany` varchar(128) DEFAULT NULL,
  `countrycompany` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `respon` text,
  `period` varchar(100) DEFAULT NULL,
  `pub_date` date DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `tbl_work`
--

INSERT INTO `tbl_work` (`id`, `namecompany`, `lang`, `urlcompany`, `countrycompany`, `position`, `respon`, `period`, `pub_date`, `user_id`) VALUES
(1, 'Center of social work in Petrozavodsk', 'en', 'http://csr-ptz.ru/', 'Russia', 'Developer / System administration', '<ul>\r\n<li>Administering 2003, linux servers</li>\r\n<li>Coding in C#, SQL</li>\r\n</ul> ', 'jan 2010 to jan 2011', '2010-01-01', 1),
(2, 'PetrSU', 'en', 'http://petrsu.ru/Faculties/polit.html', 'Russia', 'System administration', '<ul>\r\n<li>Administering servers</li>\r\n<li>Technical support</li>\r\n</ul> ', 'march 2008 to october 2009', '2008-03-01', 1),
(3, 'ПетрГУ', 'ru', 'http://petrsu.ru/Faculties/polit.html', 'Россия', 'Системный администратор', '<ul>\r\n<li>Администрирование серверов</li>\r\n<li>Поддержка пользователей</li>\r\n</ul> ', 'март 2008 по октябрь 2009', '2008-03-01', 1),
(4, 'Центр социальной работы г. Петрозаводск', 'ru', 'http://csr-ptz.ru/', 'Россия', 'Системный администратор / Разработчик', '<ul>\r\n<li>Администрирование  win 2003, linux серверов</li>\r\n<li>Разработка C#</li>\r\n</ul> ', 'январь 2010 по январь 2011', '2010-01-01', 1),
(5, 'ООО "Лэндмарк-сервис"', 'ru', 'http://www.landmark.ru/', 'Россия', 'Системный администратор', '<ul>\r\n<li>Администрирование  win 2003, linux серверов</li>\r\n</ul> ', 'февраль 2011 по июнь 2011', '2011-06-01', 1),
(6, 'ОАО "Северсталь-Инфоком"', 'ru', 'http://www.stalcom.com/', 'Россия', 'Системный администратор/Инженер', '<ul>\r\n<li>Администрирование серверов</li>\r\n<li>Поддержка пользователей</li>\r\n</ul> ', 'июль 2011 ', '2011-09-01', 1),
(7, 'Центр ПетрГУ-Метсо Систем Автоматизации', 'ru', 'http://pmasc.karelia.ru/rus/', 'Россия', 'Разработчик', 'Разработка продуктов автоматизации', 'сентябрь 2011 по май 2012', '2012-05-01', 1),
(8, 'Интернет компания сампо.ру', 'ru', 'http://sampo.ru', 'Россия', 'Web-Разработчик', 'Разработка ресурсов компании ', 'июнь 2012 по январь 2013', '2013-01-01', 1),
(9, 'ООО "Сведвуд-Карелия"', 'ru', 'http://swedwood.com/', 'Швеция', 'IT специалист', '<ul>\r\n<li>Администрирование</li>\r\n<li>Договора</li>\r\n</ul> ', 'сентябрь 2012', '2013-09-01', 1),
(10, 'LLC Landmark-service', 'en', 'http://www.landmark.ru/', 'Russia', 'System administrator', '<ul>\r\n<li>Administering servers linux/win</li>\r\n<li>Technical support</li>\r\n</ul> ', 'feb 2011 to june 2011', '2011-05-06', 1),
(11, 'The PetrSU-Metso Automation Systems Center ', 'en', 'http://pmasc.karelia.ru/eng/', 'Russia', '1c, c# developer', 'developing', 'sept 2011 to may 2012', '2012-05-01', 1),
(12, 'sampo.ru', 'en', 'http://sampo.ru/', 'Russia', 'web-developer', 'Development the company''s resources', 'june 2012 to jan 2013', '2013-01-01', 1),
(13, 'LLC Swedwood Karelia', 'en', 'http://swedwood.com/', 'Sweden/World', 'IT specialist', 'Admin, support', 'sep 2013', '2013-09-01', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
