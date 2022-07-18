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

INSERT INTO `images` (`id`, `fileName`, `title`, `description`) VALUES
(1, 'FPR2oOmWQAIatiA.jpg', 'Carlito', 'Wandern macht Kerle stark!'),
(2, 'FUlzSIDWAAIZx9z.jpg', 'Carlito', 'Wandern macht Kerle stark!'),
(3, 'FVUoSfLXoAMd3hd.jpg', 'Carlito', 'Wandern macht Kerle stark!'),
(4, 'FVzIye3VEAIhvZN.jpg', 'Carlito', 'Wandern macht Kerle stark!'),
(5, 'FW0hrUtXgAI_8BH.jpg', 'Carlito', 'Wandern macht Kerle stark!'),
(6, 'FW1QxcBX0AA14hl.jpg', 'Carlito', 'Wandern macht Kerle stark!'),
(7, 'FW1Ugn8UEAAx2Gh.jpg', 'Carlito', 'Wandern macht Kerle stark!'),
(8, 'FW1vIRnWQAEJleV.jpg', 'Carlito', 'Wandern macht Kerle stark!'),
(9, 'FW1yxsWVQAAlxhL.jpg', 'Carlito', 'Wandern macht Kerle stark!'),
(10, 'FW_--SMWAAU6SWC.jpg', 'Carlito', 'Wandern macht Kerle stark!'),
(11, 'FW_AQhDXEAAsWeF.jpg', 'Carlito', 'Wandern macht Kerle stark!'),
(12, 'FW_yvqsWYAIF0RI.jpg', 'Carlito', 'Wandern macht Kerle stark!');
COMMIT;
