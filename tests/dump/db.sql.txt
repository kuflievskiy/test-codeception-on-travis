--
-- Table structure for table `test_table_1`
--

CREATE TABLE IF NOT EXISTS `test_table_1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `field_float` float NOT NULL,
  `field_varchar_1` varchar(255) NOT NULL,
  `field_varchar_2` varchar(255) NOT NULL,
  `field_enum` enum('Y','N') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


INSERT INTO `test_table_1` (`id`, `field_float`, `field_varchar_1`, `field_varchar_2`, `field_enum`) VALUES (599, 0, '', '2012-06-28 06:58:43', 'Y');