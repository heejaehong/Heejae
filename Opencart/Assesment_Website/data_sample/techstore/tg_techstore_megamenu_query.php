<?php 

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu`
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`parent_id` int(11) NOT NULL,
		`rang` int(11) NOT NULL,
		`icon` varchar(255) NOT NULL DEFAULT '',
		`name` text,
		`link` text,
		`description` text,
		`new_window` int(11) NOT NULL DEFAULT '0',
		`status` int(11) NOT NULL DEFAULT '0',
		`position` int(11) NOT NULL DEFAULT '0',
		`submenu_width` text,
		`submenu_type` int(11) NOT NULL DEFAULT '0',
		`content_width` int(11) NOT NULL DEFAULT '12',
		`content_type` int(11) NOT NULL DEFAULT '0',
		`content` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
		INSERT INTO `".DB_PREFIX."mega_menu` (`id`, `parent_id`, `rang`, `icon`, `name`, `link`, `description`, `new_window`, `status`, `position`, `submenu_width`, `submenu_type`, `content_width`, `content_type`, `content`) VALUES
		(1, 0, 0, '', 'a:1:{i:1;s:12:\"All Products\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '100%', 0, 12, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(2, 1, 1, '', 'a:1:{i:1;s:10:\"Headphones\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '100%', 0, 3, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:638:\"&lt;div style=&quot;text-align:center;&quot;&gt;&lt;p&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=20&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=20&quot;;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;image/catalog/techstore/megamenu1.png&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=20&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=20&quot;;&quot; style=&quot;font-size: 14px; font-weight: 400;&quot; target=&quot;_self&quot;&gt;Headphones&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(3, 1, 2, '', 'a:1:{i:1;s:13:\"Mice Logitech\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '100%', 0, 3, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:670:\"&lt;div style=&quot;text-align:center;&quot;&gt;&lt;p style=&quot;text-align&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=18&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=18&quot;;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;image/catalog/techstore/megamenu2.png&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=18&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=18&quot;;&quot; style=&quot;font-size: 14px; font-weight: 400;&quot; target=&quot;_self&quot;&gt;Mice Logitech&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(4, 1, 3, '', 'a:1:{i:1;s:16:\"Tablet Keyboards\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '100%', 0, 3, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:673:\"&lt;div style=&quot;text-align:center;&quot;&gt;&lt;p style=&quot;text-align&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=57&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=57&quot;;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;image/catalog/techstore/megamenu3.png&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=57&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=57&quot;;&quot; style=&quot;font-size: 14px; font-weight: 400;&quot; target=&quot;_self&quot;&gt;Tablet Keyboards&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(5, 1, 4, '', 'a:1:{i:1;s:9:\"Keyboards\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '100%', 0, 3, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:666:\"&lt;div style=&quot;text-align:center;&quot;&gt;&lt;p style=&quot;text-align&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=17&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=17&quot;;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;image/catalog/techstore/megamenu4.png&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=17&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=17&quot;;&quot; style=&quot;font-size: 14px; font-weight: 400;&quot; target=&quot;_self&quot;&gt;Keyboards&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(6, 1, 5, '', 'a:1:{i:1;s:10:\"Projectors\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '100%', 0, 3, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:667:\"&lt;div style=&quot;text-align:center;&quot;&gt;&lt;p style=&quot;text-align&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=24&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=24&quot;;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;image/catalog/techstore/megamenu5.png&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=24&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=24&quot;;&quot; style=&quot;font-size: 14px; font-weight: 400;&quot; target=&quot;_self&quot;&gt;Projectors&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(7, 1, 6, '', 'a:1:{i:1;s:27:\"Mobile Phones &amp; Tablets\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '100%', 0, 3, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:684:\"&lt;div style=&quot;text-align:center;&quot;&gt;&lt;p style=&quot;text-align&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=34&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=34&quot;;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;image/catalog/techstore/megamenu6.png&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=34&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=34&quot;;&quot; style=&quot;font-size: 14px; font-weight: 400;&quot; target=&quot;_self&quot;&gt;Mobile Phones &amp; Tablets&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(8, 1, 7, '', 'a:1:{i:1;s:11:\"PlayStation\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '100%', 0, 3, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:668:\"&lt;div style=&quot;text-align:center;&quot;&gt;&lt;p style=&quot;text-align&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=34&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=34&quot;;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;image/catalog/techstore/megamenu7.png&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=34&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=34&quot;;&quot; style=&quot;font-size: 14px; font-weight: 400;&quot; target=&quot;_self&quot;&gt;PlayStation&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(9, 1, 8, '', 'a:1:{i:1;s:18:\"Business Solutions\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '100%', 0, 3, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:675:\"&lt;div style=&quot;text-align:center;&quot;&gt;&lt;p style=&quot;text-align&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=34&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=34&quot;;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;image/catalog/techstore/megamenu8.png&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=34&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=34&quot;;&quot; style=&quot;font-size: 14px; font-weight: 400;&quot; target=&quot;_self&quot;&gt;Business Solutions&lt;/a&gt;&lt;/p&gt;&lt;/div&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(10, 0, 9, '', 'a:1:{i:1;s:13:\"Entertainment\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '800px', 0, 12, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(11, 10, 10, '', 'a:1:{i:1;s:11:\"Playstation\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '100%', 0, 4, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:765:\"&lt;p style=&quot;font-size: 14px;color:#000000;font-weight: 700;&quot;&gt;Playstation&lt;/p&gt;&lt;p&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;PlayStation4&lt;/a&gt;&lt;br&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;PlayStation3&lt;/a&gt;&lt;br&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;PlayStationVita&lt;/a&gt;&lt;br&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;PlayStationNow&lt;/a&gt;&lt;br&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;PS4 Games&lt;/a&gt;&lt;br&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;PS3 Games&lt;/a&gt;&lt;br&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;PS Vita Games&lt;/a&gt;&lt;br&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;PlayStationStore&lt;/a&gt;&lt;/p&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(12, 10, 11, '', 'a:1:{i:1;s:13:\"Entertainment\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '100%', 0, 4, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:778:\"&lt;p style=&quot;font-size: 14px;color:#000000;font-weight: 700;&quot;&gt;Entertainment&lt;/p&gt;&lt;p&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;TV Shows&lt;/a&gt;&lt;br&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;Movies&lt;/a&gt;&lt;br&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;Music&lt;/a&gt;&lt;br&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;Mobile &amp; Tablet Apps&lt;/a&gt;&lt;br&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;TV &amp; Movies On Demand&lt;/a&gt;&lt;br&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;Video Unlimited&lt;/a&gt;&lt;br&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;Music Unlimited&lt;/a&gt;&lt;br&gt;&lt;a onclick=&quot;#&quot; href=&quot;#&quot;&gt;PlayStationTV&lt;/a&gt;&lt;/p&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(13, 10, 12, '', 'a:1:{i:1;s:6:\"Banner\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '100%', 0, 4, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:771:\"&lt;div style=&quot;text-align:left;&quot;&gt;&lt;p&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=34&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=34&quot;;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;image/catalog/techstore/me1.png&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;a href=&quot;index.php?route=product/category&amp;amp;path=34&quot; onclick=&quot;window.location = &quot;index.php?route=product/category&amp;amp;path=34&quot;;&quot; style=&quot;font-size: 14px; font-weight: 700; color: #000000;&quot; target=&quot;_self&quot;&gt;Love Movies?&lt;/a&gt;&lt;/p&gt;&lt;p style=&quot;font-size: 12px;color: #aaaaaa;&quot;&gt;Now they can love you back. Learn how to get rewarded.&lt;/p&gt;&lt;/div&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(14, 0, 13, '', 'a:1:{i:1;s:4:\"Sale\";}', 'index.php?route=product/special', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '100%', 0, 4, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(15, 0, 15, '', 'a:1:{i:1;s:7:\"Support\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '220px', 0, 12, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(16, 15, 16, '', 'a:1:{i:1;s:5:\"Links\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '100%', 0, 12, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:1154:\"&lt;div class=&quot;hover-menu&quot;&gt;&lt;div class=&quot;menu&quot;&gt;&lt;ul&gt;&lt;li&gt;&lt;a href=&quot;#&quot; onclick=&quot;window.location = &quot;#&quot;;&quot;&gt;Product Support&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=&quot;#&quot; onclick=&quot;window.location = &quot;#&quot;;&quot;&gt;Mobile Support&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=&quot;#&quot; onclick=&quot;window.location = &quot;#&quot;;&quot;&gt;PlayStation Support&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=&quot;#&quot; onclick=&quot;window.location = &quot;#&quot;;&quot;&gt;Entertainment Support&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=&quot;#&quot; onclick=&quot;window.location = &quot;#&quot;;&quot;&gt;Online Support&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=&quot;#&quot; onclick=&quot;window.location = &quot;#&quot;;&quot;&gt;Drivers &amp; Software&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=&quot;#&quot; onclick=&quot;window.location = &quot;#&quot;;&quot;&gt;Product Repair&lt;/a&gt;&lt;/li&gt;&lt;li&gt;&lt;a href=&quot;#&quot; onclick=&quot;window.location = &quot;#&quot;;&quot;&gt;Product Registration&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/div&gt;&lt;/div&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}'),
		(17, 0, 14, '', 'a:1:{i:1;s:11:\"PlayStation\";}', '', 'a:1:{i:1;s:0:\"\";}', 0, 0, 0, '100%', 0, 4, 0, 'a:3:{s:4:\"html\";a:1:{s:4:\"text\";a:1:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:2:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";}s:10:\"categories\";a:4:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:15:\"submenu_columns\";s:1:\"1\";}}')
		");
?>





































