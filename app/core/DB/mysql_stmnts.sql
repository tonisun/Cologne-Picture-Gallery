--
-- Datenbank:   `images`
-- owner :      `images`

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `images`
--

CREATE TABLE `images` (
  `id` int(11) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `images`
--

INSERT INTO `images` (`id`, `filename`, `title`, `description`) VALUES
(1, 'toni0.jpg', 'Cologne in Winter', '17.02.2019 ToniSun'),
(2, 'toni1.jpg', 'Cologne 11', 'Kölner Dom 2017'),
(3, 'toni2.jpg', 'The New Cologne Dom', '17.02.2017 ToniSun'),
(4, 'toni3.jpg', 'finaly snow', 'ToniSun'),
(5, 'toni4.jpg', 'finaly snow', 'ToniSun'),
(6, 'toni5.jpg', 'finaly snow', 'ToniSun'),
(7, 'toni6.jpg', 'Cologne Lights', 'ToniSun'),
(8, 'toni7.jpg', 'Cologne bank of the Rhine', 'ToniSun'),
(9, 'toni8.jpg', 'Cologne bank of the Rhine', 'ToniSun'),
(10, 'toni9.jpg', 'Cologne Rheinpark', 'ToniSun'),
(11, 'toni10.jpg', 'Cologne fair by Night', 'ToniSun'),
(12, 'toni11.jpg', 'Cologne Media Park at night', 'ToniSun'),
(13, 'toni12.jpg', 'Cologne in the fog', 'ToniSun'),
(14, 'toni13.jpg', 'Cologne by night', 'ToniSun'),
(15, 'toni14.jpg', 'Cologne by Night', 'ToniSun'),
(16, 'toni15.jpg', 'Cologne by Night', 'ToniSun'),
(17, 'toni16.jpg', 'Cologne flood by Night', 'ToniSun'),
(18, 'toni17.jpg', 'Cologne flood by Night', 'ToniSun'),
(19, 'toni18.jpg', 'Cologne in the fog', 'ToniSun'),
(20, 'toni19.jpg', 'Cologne TÜV is installed', 'ToniSun'),
(21, 'toni20.jpg', 'Cologne RTL', 'ToniSun'),
(22, 'toni21.jpg', 'Cologne Golden Bridge', 'ToniSun');
COMMIT;
