-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2016 at 01:24 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shyme`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `adicionarDuvidar` (IN `prioridade` INT, IN `aluno_grupo` INT, IN `ds_postagem` VARCHAR(1000), `cd_matri` INT, IN `dt_postagem` DATETIME, IN `img` VARCHAR(700), IN `grupoid` INT)  BEGIN
INSERT INTO POSTAGEM (cd_prioridade,cd_aluno_grupo,TIPO_POSTAGEM_cd_tipo_postagem,ds_postagem,dt_postagem,img_postagem)
         VALUES(prioridade,(SELECT aluno_grupo 
			FROM ALUNO_GRUPO 
				WHERE CD_MATRICULA=cd_matri 
                AND CD_GRUPO=grupoid),26, ds_postagem,dt_postagem, img);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `administrador_grupo`
--

CREATE TABLE `administrador_grupo` (
  `cd_administrador` int(11) NOT NULL,
  `cd_grupo` int(10) UNSIGNED NOT NULL,
  `dt_adm_grupo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrador_grupo`
--

INSERT INTO `administrador_grupo` (`cd_administrador`, `cd_grupo`, `dt_adm_grupo`) VALUES
(10, 5, '2016-09-21'),
(22, 6, '2016-09-21'),
(1, 7, '2016-09-21'),
(15, 8, '2016-09-21'),
(40, 9, '2016-09-21'),
(37, 10, '2016-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `aluno`
--

CREATE TABLE `aluno` (
  `cd_matricula` int(11) NOT NULL,
  `nm_aluno` varchar(50) NOT NULL,
  `cd_rg_aluno` varchar(15) NOT NULL,
  `perfil_aluno` varchar(50) DEFAULT NULL,
  `img_aluno` varchar(300) DEFAULT NULL,
  `vl_moeda` int(10) UNSIGNED DEFAULT NULL,
  `curso_aluno` varchar(45) DEFAULT NULL,
  `senha_aluno` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aluno`
--

INSERT INTO `aluno` (`cd_matricula`, `nm_aluno`, `cd_rg_aluno`, `perfil_aluno`, `img_aluno`, `vl_moeda`, `curso_aluno`, `senha_aluno`) VALUES
(1, 'JESSE PINKMAN', '798465123', 'PINK5123', '', 50, NULL, '1'),
(2, 'GUSTAVO FRING', '987456321', 'FRING6321', '', 50, NULL, '1'),
(3, 'SON GOKU', '798465132', 'GOKU5132', '', 50, NULL, '1'),
(4, 'SON GOHAN', '976431258', 'GOHAN3258', '', 50, NULL, '1'),
(5, 'VEGETA BRAVO', '134679852', 'VEGETA9852', '', 50, NULL, '1'),
(6, 'SEIYA PEGASU', '731945628', 'PEGASU5628', '', 50, NULL, '1'),
(7, 'SHYRIU DRAGAO', '513469870', 'DRAGAO9870', '', 50, NULL, '1'),
(8, 'HYOGA CISNEY', '852134679', 'CISNEY4679', '', 50, NULL, '1'),
(9, 'SHUN ANDROMEDA', '987645312', 'ANDROMEDA5312', '', 50, NULL, '1'),
(10, 'IKKI FENIX', '978645312', 'FENIX5312', '', 50, NULL, '1'),
(11, 'AIORIA LEAO', '987645321', 'LEAO5321', '', 50, NULL, '1'),
(12, 'MU ARIES', '978645321', 'ARIES5321', 'http://vignette4.wikia.nocookie.net/saintseya/images/f/f7/Mu_de_%C3%81ries.png/revision/latest?cb=20151227170533&path-prefix=pt', 50, NULL, '1'),
(13, 'ALDEBARAN TOURO', '132465798', 'TOURO5798', '', 50, NULL, '1'),
(14, 'SAGA GEMEOS', '123456798', 'GEMEOS6798', '', 50, NULL, '1'),
(15, 'MASCARA CANCER', '852741963', 'CANCER1963', '', 50, NULL, '1'),
(16, 'SHAKA VIRGEM', '7419963852', 'VIRGEM3852', '', 50, NULL, '1'),
(17, 'DOHKO LIBRA', '714825936', 'LIBRA5936', '', 50, NULL, '1'),
(18, 'MILO ESCORPIAO', '174852963', 'MILO2963', '', 50, NULL, '1'),
(19, 'AIOROS SAGITARIO', '84615732', 'SAGITARIO5732', '', 50, NULL, '1'),
(20, 'SHURA CAPRICORNIO', '11112222', 'SHURA2222', '', 50, NULL, '1'),
(21, 'CAMUS AQUARIO', '123445566', 'AQUARIO5566', '', 50, NULL, '1'),
(22, 'AFRODITE PEIXES', '879556412', 'PEIXES6412', '', 50, NULL, '1'),
(23, 'BOB ESPONJA', '8877994455', 'ESPONJA4455', '', 50, NULL, '1'),
(24, 'PATRICK ESTRELA', '125463987', 'ESTRELA3987', '', 50, NULL, '1'),
(25, ' MOLUSCO', '7998554612', 'MOLUSCO4612', '', 50, NULL, '1'),
(26, 'SANDY BOCHECHAS', '123448829', 'SANDY6789', '', 50, NULL, '1'),
(27, 'PAUL STANLEY', '644558822', 'PAUL8822', '', 50, NULL, '1'),
(28, 'GENE SIMMONS', '445239877', 'GENE9877', '', 50, NULL, '1'),
(29, 'PETER CRIS', '993256788', 'PETER6788', '', 50, NULL, '1'),
(30, 'ACE FREHLEY', '852113346', 'ACE3346', '', 50, NULL, '1'),
(31, 'ROSS GELLER', '975213664', 'GELLER3664', '', 50, NULL, '1'),
(32, 'MONICA GELLER', '799845612', 'GELLER5612', '', 50, NULL, '1'),
(33, 'PHEOBE BUFFAY', '998877123', 'BUFFAY7123', '', 50, NULL, '1'),
(34, 'JOEY TRIBIANNI', '88552213', 'JOEY2213', '', 50, NULL, '1'),
(35, 'CHANDLER BING', '779944662', 'BING4662', '', 50, NULL, '1'),
(36, 'RACHEL GREEN', '554467891', 'GREEN7891', '', 50, NULL, '1'),
(37, 'TED MOSBY', '825461237', 'MOSBY1237', '', 50, NULL, '1'),
(38, 'MARSHAL ERIKSEN', '44567789', 'MARSHAL7789', '', 50, NULL, '1'),
(39, 'ROBIN SCHERBATSKY', '896654771', 'ROBIN4771', '', 50, NULL, '1'),
(40, 'LILY ALDRIN', '887642331', 'LILY2331', '', 50, NULL, '1'),
(41, 'ROBIN SCHERBATSKY', '896654771', 'ROBIN4771', '', 50, NULL, '1'),
(43, 'WALTER WHITE', '123456789', 'HEISENBERG', '', 50, NULL, '1'),
(50, 'OPa', '537695035', 'qwe', 'qwe', 12, 'qwe', 'qwe'),
(123123123, 'zé teste', '123123123', 'teste teste teste', NULL, 10000, 'ads', '123');

-- --------------------------------------------------------

--
-- Table structure for table `aluno_grupo`
--

CREATE TABLE `aluno_grupo` (
  `cd_aluno_grupo` int(11) NOT NULL,
  `cd_matricula` int(11) NOT NULL,
  `cd_grupo` int(10) UNSIGNED NOT NULL,
  `prioridade_grupo` tinyint(1) DEFAULT NULL,
  `ic_aluno_grupo` varchar(45) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aluno_grupo`
--

INSERT INTO `aluno_grupo` (`cd_aluno_grupo`, `cd_matricula`, `cd_grupo`, `prioridade_grupo`, `ic_aluno_grupo`) VALUES
(0, 36, 2, NULL, '1'),
(299, 1, 1, 1, '1'),
(300, 1, 5, 1, '1'),
(301, 1, 7, 1, '1'),
(302, 1, 6, 0, '1'),
(303, 1, 9, 0, '1'),
(304, 1, 10, 0, '1'),
(305, 2, 1, 1, '1'),
(306, 2, 5, 1, '1'),
(307, 2, 7, 0, '1'),
(308, 2, 6, 1, '1'),
(309, 2, 9, 0, '1'),
(310, 2, 10, 0, '1'),
(311, 3, 1, 1, '1'),
(312, 3, 5, 0, '1'),
(313, 3, 7, 1, '1'),
(314, 3, 6, 0, '1'),
(315, 3, 9, 0, '1'),
(316, 3, 10, 1, '1'),
(317, 4, 1, 1, '1'),
(318, 4, 5, 1, '1'),
(319, 4, 7, 1, '1'),
(320, 4, 6, 0, '1'),
(321, 4, 9, 0, '1'),
(322, 4, 10, 0, '1'),
(323, 5, 1, 1, '1'),
(324, 5, 5, 1, '1'),
(325, 5, 7, 1, '1'),
(326, 5, 6, 0, '1'),
(327, 5, 9, 0, '1'),
(328, 5, 10, 0, '1'),
(329, 6, 1, 1, '1'),
(330, 6, 5, 0, '1'),
(331, 6, 7, 0, '1'),
(332, 6, 6, 0, '1'),
(333, 6, 9, 1, '1'),
(334, 6, 10, 1, '1'),
(335, 7, 1, 1, '1'),
(336, 7, 5, 1, '1'),
(337, 7, 7, 1, '1'),
(338, 7, 6, 0, '1'),
(339, 7, 9, 0, '1'),
(340, 7, 10, 0, '1'),
(341, 8, 1, 1, '1'),
(342, 8, 5, 1, '1'),
(343, 8, 7, 1, '1'),
(344, 8, 6, 0, '1'),
(345, 8, 9, 0, '1'),
(346, 8, 10, 0, '1'),
(347, 9, 1, 1, '1'),
(348, 9, 5, 1, '1'),
(349, 9, 7, 0, '1'),
(350, 9, 6, 0, '1'),
(351, 9, 9, 1, '1'),
(352, 9, 10, 0, '1'),
(353, 10, 1, 1, '1'),
(354, 10, 5, 0, '1'),
(355, 10, 7, 1, '1'),
(356, 10, 6, 0, '1'),
(357, 10, 9, 1, '1'),
(358, 10, 10, 0, '1'),
(359, 11, 1, 1, '1'),
(360, 11, 5, 0, '1'),
(361, 11, 7, 1, '1'),
(362, 11, 6, 0, '1'),
(363, 11, 9, 0, '1'),
(364, 11, 10, 1, '1'),
(365, 21, 3, 1, '1'),
(366, 21, 5, 0, '1'),
(367, 21, 6, 0, '1'),
(368, 21, 9, 1, '1'),
(369, 21, 10, 1, '1'),
(370, 22, 3, 1, '1'),
(371, 22, 5, 0, '1'),
(372, 22, 6, 0, '1'),
(373, 22, 9, 1, '1'),
(374, 22, 10, 1, '1'),
(375, 23, 3, 1, '1'),
(376, 23, 5, 0, '1'),
(377, 23, 6, 0, '1'),
(378, 23, 9, 1, '1'),
(379, 23, 10, 1, '1'),
(380, 24, 3, 1, '1'),
(381, 24, 5, 0, '1'),
(382, 24, 6, 1, '1'),
(383, 24, 9, 0, '1'),
(384, 24, 10, 1, '1'),
(385, 25, 3, 1, '1'),
(386, 25, 5, 0, '1'),
(387, 25, 6, 1, '1'),
(388, 25, 9, 0, '1'),
(389, 25, 10, 1, '1'),
(390, 26, 3, 1, '1'),
(391, 26, 5, 1, '1'),
(392, 26, 6, 1, '1'),
(393, 26, 9, 0, '1'),
(394, 26, 10, 0, '1'),
(395, 27, 3, 1, '1'),
(396, 27, 5, 1, '1'),
(397, 27, 6, 1, '1'),
(398, 27, 9, 0, '1'),
(399, 27, 10, 0, '1'),
(400, 28, 3, 1, '1'),
(401, 28, 5, 0, '1'),
(402, 28, 6, 0, '1'),
(403, 28, 9, 1, '1'),
(404, 28, 10, 1, '1'),
(405, 29, 3, 1, '1'),
(406, 29, 5, 0, '1'),
(407, 29, 6, 0, '1'),
(408, 29, 9, 1, '1'),
(409, 29, 10, 1, '1'),
(410, 30, 3, 1, '1'),
(411, 30, 5, 0, '1'),
(412, 30, 6, 0, '1'),
(413, 30, 9, 1, '1'),
(414, 30, 10, 1, '1'),
(415, 31, 3, 1, '1'),
(416, 31, 5, 1, '1'),
(417, 31, 6, 0, '1'),
(418, 31, 9, 0, '1'),
(419, 31, 10, 1, '1'),
(420, 32, 3, 1, '1'),
(421, 32, 5, 0, '1'),
(422, 32, 6, 0, '1'),
(423, 32, 9, 1, '1'),
(424, 32, 10, 1, '1'),
(425, 33, 4, 1, '1'),
(426, 33, 5, 0, '1'),
(427, 33, 6, 0, '1'),
(428, 33, 9, 1, '1'),
(429, 33, 10, 1, '1'),
(430, 34, 4, 1, '1'),
(431, 34, 5, 0, '1'),
(432, 34, 6, 0, '1'),
(433, 34, 9, 1, '1'),
(434, 34, 10, 1, '1'),
(435, 35, 4, 1, '1'),
(436, 35, 5, 0, '1'),
(437, 35, 6, 0, '1'),
(438, 35, 9, 1, '1'),
(439, 35, 10, 1, '1'),
(440, 36, 4, 1, '1'),
(441, 36, 5, 0, '1'),
(442, 36, 6, 0, '1'),
(443, 36, 9, 1, '1'),
(444, 36, 10, 1, '1'),
(445, 37, 4, 1, '1'),
(446, 37, 5, 0, '1'),
(447, 37, 6, 1, '1'),
(448, 37, 9, 0, '1'),
(449, 37, 10, 1, '1'),
(450, 38, 4, 1, '1'),
(451, 38, 5, 1, '1'),
(452, 38, 6, 0, '1'),
(453, 38, 9, 1, '1'),
(454, 38, 10, 0, '1'),
(455, 39, 4, 1, '1'),
(456, 39, 5, 0, '1'),
(457, 39, 6, 0, '1'),
(458, 39, 9, 1, '1'),
(459, 39, 10, 1, '1'),
(460, 40, 4, 1, '1'),
(461, 40, 5, 0, '1'),
(462, 40, 6, 0, '1'),
(463, 40, 9, 1, '1'),
(464, 40, 10, 1, '1'),
(465, 41, 4, 1, '1'),
(466, 41, 5, 1, '1'),
(467, 41, 6, 1, '1'),
(468, 41, 9, 0, '1'),
(469, 41, 10, 0, '1'),
(475, 43, 4, 1, '1'),
(476, 43, 5, 1, '1'),
(477, 43, 6, 1, '1'),
(478, 43, 9, 0, '1'),
(479, 43, 10, 0, '1'),
(480, 12, 2, 1, '1'),
(481, 12, 5, 1, '1'),
(482, 12, 6, 0, '1'),
(483, 12, 8, 1, '1'),
(484, 12, 9, 0, '1'),
(485, 12, 10, 0, '1'),
(486, 13, 2, 1, '1'),
(487, 13, 5, 1, '1'),
(488, 13, 6, 1, '1'),
(489, 13, 8, 1, '1'),
(490, 13, 9, 0, '1'),
(491, 13, 10, 1, '1'),
(492, 14, 2, 1, '1'),
(493, 14, 5, 1, '1'),
(494, 14, 6, 1, '1'),
(495, 14, 8, 0, '1'),
(496, 14, 9, 0, '1'),
(497, 14, 10, 1, '1'),
(498, 15, 2, 1, '1'),
(499, 15, 5, 0, '0'),
(500, 15, 6, 0, '1'),
(501, 15, 8, 1, '1'),
(502, 15, 9, 1, '1'),
(503, 15, 10, 0, '1'),
(504, 16, 2, 1, '1'),
(505, 16, 5, 1, '1'),
(506, 16, 6, 0, '1'),
(507, 16, 8, 1, '1'),
(508, 16, 9, 0, '1'),
(509, 16, 10, 0, '1'),
(510, 17, 2, 1, '1'),
(511, 17, 5, 1, '1'),
(512, 17, 6, 0, '1'),
(513, 17, 8, 1, '1'),
(514, 17, 9, 0, '1'),
(515, 17, 10, 0, '1'),
(516, 18, 2, 1, '1'),
(517, 18, 5, 1, '1'),
(518, 18, 6, 0, '1'),
(519, 18, 8, 1, '1'),
(520, 18, 9, 0, '1'),
(521, 18, 10, 0, '1'),
(522, 19, 2, 1, '1'),
(523, 19, 5, 1, '1'),
(524, 19, 6, 0, '1'),
(525, 19, 8, 1, '1'),
(526, 19, 9, 0, '1'),
(527, 19, 10, 0, '1'),
(528, 20, 2, 1, '1'),
(529, 20, 5, 1, '1'),
(530, 20, 6, 0, '1'),
(531, 20, 8, 1, '1'),
(532, 20, 9, 0, '1'),
(533, 20, 10, 0, '1'),
(534, 1, 11, 1, '1'),
(535, 2, 11, 1, '1'),
(536, 3, 11, 1, '1'),
(537, 4, 11, 1, '1'),
(538, 5, 11, 1, '1'),
(539, 6, 11, 1, '1'),
(540, 7, 11, 1, '1'),
(541, 8, 11, 1, '1'),
(542, 9, 11, 1, '1'),
(543, 10, 11, 1, '1'),
(544, 11, 11, 1, '1'),
(545, 12, 11, 1, '1'),
(546, 13, 11, 1, '1'),
(547, 14, 11, 1, '1'),
(548, 15, 11, 1, '1'),
(549, 16, 11, 1, '1'),
(550, 17, 11, 1, '1'),
(551, 18, 11, 1, '1'),
(552, 19, 11, 1, '1'),
(553, 20, 11, 1, '1'),
(554, 21, 11, 1, '1'),
(555, 22, 11, 1, '1'),
(556, 23, 11, 1, '1'),
(557, 24, 11, 1, '1'),
(558, 25, 11, 1, '1'),
(559, 26, 11, 1, '1'),
(560, 27, 11, 1, '1'),
(561, 28, 11, 1, '1'),
(562, 29, 11, 1, '1'),
(563, 30, 11, 1, '1'),
(564, 31, 11, 1, '1'),
(565, 32, 11, 1, '1'),
(566, 33, 11, 1, '1'),
(567, 34, 11, 1, '1'),
(568, 35, 11, 1, '1'),
(569, 36, 11, 1, '1'),
(570, 37, 11, 1, '1'),
(571, 38, 11, 1, '1'),
(572, 39, 11, 1, '1'),
(573, 40, 11, 1, '1'),
(574, 41, 11, 1, '1'),
(575, 43, 11, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `codigo`
--

CREATE TABLE `codigo` (
  `cd_codigo_dos_codigos` int(10) UNSIGNED NOT NULL,
  `cd_matricula` int(11) NOT NULL,
  `cd_parceiro` int(10) UNSIGNED NOT NULL,
  `ic_validacao` tinyint(1) DEFAULT NULL,
  `dt_codigo` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `cd_download` int(10) UNSIGNED NOT NULL,
  `cd_postagem` int(10) UNSIGNED NOT NULL,
  `cd_moeda_download` int(10) UNSIGNED NOT NULL,
  `cd_aluno_download` int(10) UNSIGNED DEFAULT NULL,
  `dt_download` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grupo`
--

CREATE TABLE `grupo` (
  `cd_grupo` int(10) UNSIGNED NOT NULL,
  `TIPO_GRUPO_cd_TIPO` int(10) UNSIGNED NOT NULL,
  `nm_grupo` varchar(50) DEFAULT NULL,
  `img_grupo` varchar(255) DEFAULT NULL,
  `ds_grupo` varchar(500) DEFAULT NULL,
  `ic_privado` tinyint(1) DEFAULT NULL,
  `ic_grupo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grupo`
--

INSERT INTO `grupo` (`cd_grupo`, `TIPO_GRUPO_cd_TIPO`, `nm_grupo`, `img_grupo`, `ds_grupo`, `ic_privado`, `ic_grupo`) VALUES
(1, 1, 'ANALISE E DESENVOLVIMENTO DE SISTEMAS', NULL, NULL, 1, 1),
(2, 1, 'PROCESSOS QUIMICOS', NULL, NULL, 1, 1),
(3, 1, 'GESTAO EMPRESARIAL', NULL, NULL, 1, 1),
(4, 2, 'COMERCIO EXTERIOR', NULL, NULL, 1, 1),
(5, 2, 'DP NELSON', NULL, NULL, 0, 1),
(6, 2, 'REFORÇO MAT', NULL, NULL, 0, 1),
(7, 2, 'ADS PRIMEIRO CICLO', NULL, NULL, 1, 1),
(8, 2, 'PQ PRIMEIRO CICLO', NULL, 'teste', 1, 1),
(9, 2, 'MALU SEXTA', NULL, 'teste', 0, 1),
(10, 2, 'PRAIA', NULL, NULL, 0, 1),
(11, 1, 'FATEC PG', NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `moeda_download`
--

CREATE TABLE `moeda_download` (
  `cd_moeda_download` int(10) UNSIGNED NOT NULL,
  `vl_download` int(10) UNSIGNED DEFAULT NULL,
  `ds_download` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moeda_download`
--

INSERT INTO `moeda_download` (`cd_moeda_download`, `vl_download`, `ds_download`) VALUES
(1, 1, 'valor-grupoPrincipal 10/20'),
(2, 1, 'valor-grupoPrincipal 20/40'),
(3, 1, 'valor-grupoPrincipal >40'),
(4, 1, 'valor-grupoSecundario 10/20'),
(5, 1, 'valor-grupoSecundario 20/40'),
(6, 1, 'valor-grupoSecundario >40');

-- --------------------------------------------------------

--
-- Table structure for table `notificacao`
--

CREATE TABLE `notificacao` (
  `CD_NOTIFICACAO` int(10) NOT NULL,
  `DS_NOTIFICACAO` varchar(500) NOT NULL,
  `IMG_NOTIFICACAO` varchar(500) DEFAULT NULL,
  `CD_ALUNO` int(11) DEFAULT NULL,
  `CD_POSTAGEM` int(10) UNSIGNED DEFAULT NULL,
  `CD_GRUPO` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parceiros`
--

CREATE TABLE `parceiros` (
  `cd_parceiro` int(10) UNSIGNED NOT NULL,
  `cd_cnpj` int(10) UNSIGNED DEFAULT NULL,
  `nm_login_parceiro` varchar(100) DEFAULT NULL,
  `img_parceiro` varchar(300) DEFAULT NULL,
  `pefil_parceiro` varchar(45) DEFAULT NULL,
  `cd_senha_parceiro` varchar(20) DEFAULT NULL,
  `nm_parceiro` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ponto_aluno`
--

CREATE TABLE `ponto_aluno` (
  `cd_matricula` int(11) NOT NULL,
  `qt_ponto` int(10) UNSIGNED DEFAULT NULL,
  `dt_ponto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `postagem`
--

CREATE TABLE `postagem` (
  `cd_postagem` int(10) UNSIGNED NOT NULL,
  `cd_prioridade` int(10) UNSIGNED NOT NULL,
  `cd_aluno_grupo` int(11) NOT NULL,
  `TIPO_POSTAGEM_cd_tipo_postagem` int(10) UNSIGNED NOT NULL,
  `ds_postagem` varchar(1000) NOT NULL,
  `dt_postagem` datetime NOT NULL,
  `nm_arquivo` varchar(700) DEFAULT NULL,
  `img_postagem` varchar(700) DEFAULT NULL,
  `ic_postagem` smallint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postagem`
--

INSERT INTO `postagem` (`cd_postagem`, `cd_prioridade`, `cd_aluno_grupo`, `TIPO_POSTAGEM_cd_tipo_postagem`, `ds_postagem`, `dt_postagem`, `nm_arquivo`, `img_postagem`, `ic_postagem`) VALUES
(13, 1, 501, 33, 'teste', '2016-10-06 00:54:03', '', '', 0),
(14, 1, 501, 33, 'teste', '2016-10-06 00:54:07', '', '', 0),
(15, 1, 482, 33, 'comunicado', '2016-10-06 23:35:17', NULL, '', 1),
(16, 1, 482, 26, 'duvida', '2016-10-06 23:35:24', NULL, '', 1),
(17, 1, 498, 33, 'oqooqoqoqoq', '2016-10-10 22:49:17', NULL, '', 1),
(18, 1, 464, 33, 'eduardo', '2016-10-11 23:52:38', NULL, '', 1),
(19, 1, 499, 33, '1', '2016-10-12 01:32:13', NULL, '', 1),
(20, 1, 481, 26, 'RWADSD', '2016-10-13 10:08:10', NULL, '', 1),
(21, 1, 502, 26, 'QUEM VAI NA MALU HOJE????', '2016-10-14 09:25:25', NULL, '', 1),
(22, 1, 0, 26, 'teste Procudure', '2016-10-17 10:32:34', NULL, 'no', 1),
(23, 1, 0, 26, 'teste Procudure', '2016-10-17 10:32:36', NULL, 'no', 1),
(24, 1, 0, 26, 'teste Procudure', '2016-10-17 10:32:37', NULL, 'no', 1),
(25, 1, 501, 26, 'DUVIDA', '2016-10-20 10:09:24', NULL, '', 1),
(26, 1, 314, 26, 'sdfdsfsd', '2016-10-20 11:56:55', NULL, '', 1),
(27, 1, 313, 33, 'aafsdf', '2016-10-20 12:03:09', NULL, '', 1),
(28, 1, 313, 26, 'dgsd', '2016-10-20 12:03:14', NULL, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prioridade`
--

CREATE TABLE `prioridade` (
  `cd_prioridade` int(10) UNSIGNED NOT NULL,
  `vl_tempo` time DEFAULT NULL,
  `vl_prioridade` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prioridade`
--

INSERT INTO `prioridade` (`cd_prioridade`, `vl_tempo`, `vl_prioridade`) VALUES
(1, '24:00:00', 40),
(2, '72:00:00', 100),
(3, '168:00:00', 250);

-- --------------------------------------------------------

--
-- Table structure for table `promocao`
--

CREATE TABLE `promocao` (
  `cd_promocao` int(10) UNSIGNED NOT NULL,
  `cd_parceiro` int(10) UNSIGNED NOT NULL,
  `ds_promocao` varchar(300) DEFAULT NULL,
  `dt_promocao` date DEFAULT NULL,
  `img_promocao` varchar(300) DEFAULT NULL,
  `ic_principal` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resposta`
--

CREATE TABLE `resposta` (
  `cd_resposta` int(10) UNSIGNED NOT NULL,
  `ds_resposta` varchar(1000) DEFAULT NULL,
  `cd_resposta_aluno` int(10) UNSIGNED NOT NULL,
  `ic_resposta` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resposta`
--

INSERT INTO `resposta` (`cd_resposta`, `ds_resposta`, `cd_resposta_aluno`, `ic_resposta`) VALUES
(1, 'EU VOU!!!', 12, 0),
(2, 'VODKAAA', 13, 0),
(3, 'AI SIIIIM!', 14, 0),
(4, 'ola', 15, 0),
(5, 'TOMA NO SEU CU', 15, 0),
(6, 'WESKLEY COM BRAÃ‡o', 15, 0),
(7, 'GHOSTBUSTTE', 15, 0),
(8, 'OTARIO', 27, 0),
(9, 'coÃ© tiozÃ£o', 27, 0),
(10, 'lala', 3, 0),
(11, 'xdgxf', 3, 0),
(12, 'zdgsd', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teste`
--

CREATE TABLE `teste` (
  `A` varchar(45) DEFAULT NULL,
  `B` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teste`
--

INSERT INTO `teste` (`A`, `B`) VALUES
('15', NULL),
('15', '8'),
('15', '8'),
('15', '8'),
('15', '8'),
('15', '8');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_grupo`
--

CREATE TABLE `tipo_grupo` (
  `cd_TIPO` int(10) UNSIGNED NOT NULL,
  `nm_tipo_grupo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_grupo`
--

INSERT INTO `tipo_grupo` (`cd_TIPO`, `nm_tipo_grupo`) VALUES
(1, 'MANUAL'),
(2, 'AUTOMATICO');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_postagem`
--

CREATE TABLE `tipo_postagem` (
  `cd_tipo_postagem` int(10) UNSIGNED NOT NULL,
  `nm_tipo` varchar(50) NOT NULL,
  `vl_tipo_postagem` int(10) UNSIGNED DEFAULT NULL,
  `ic_tipo_postagem` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_postagem`
--

INSERT INTO `tipo_postagem` (`cd_tipo_postagem`, `nm_tipo`, `vl_tipo_postagem`, `ic_tipo_postagem`) VALUES
(10, 'upload-grupoprimario-10/20', 5, 0),
(11, 'upload-grupoprimario-20/40', 15, 0),
(12, 'upload-grupoprimario- >40', 20, 0),
(13, 'upload-gruposecundario-10/20', 5, 0),
(14, 'upload-gruposecundario-20/40', 5, 0),
(15, 'upload-gruposecundario- >40', 10, 0),
(16, 'Resposta-Grupoprincipal 10/20', NULL, NULL),
(17, 'Resposta-Grupoprincipal 20/40', NULL, NULL),
(18, 'Resposta-Grupoprincipal - >40', NULL, NULL),
(19, 'Resposta-Gruposecundario 10/20', NULL, NULL),
(20, 'Resposta-Gruposecundario 20/40', NULL, NULL),
(21, 'Resposta-Gruposecundario - >40', NULL, NULL),
(25, 'Nota-grupoPrincipal/Secundario', 30, 1),
(26, 'duvida-grupoPrincipal', 5, 0),
(27, 'duvida-grupoSecundario', 0, NULL),
(28, 'DP-grupoPrincipal/Secundario', 50, 0),
(29, 'avaliaçãoRespota-grupoPrincipal/Secundario 10/20', 5, 1),
(30, 'avaliaçãoRespota-grupoPrincipal/Secundario 20/40', 10, 1),
(31, 'avaliaçãoRespota-grupoPrincipal/Secundario >40', 15, 1),
(32, 'comunicado-grupoPrimario', 20, 0),
(33, 'comunicado-grupoSecundario', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `treplica`
--

CREATE TABLE `treplica` (
  `cd_resposta` int(10) UNSIGNED NOT NULL,
  `cd_postagem` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treplica`
--

INSERT INTO `treplica` (`cd_resposta`, `cd_postagem`) VALUES
(3, 21),
(2, 21),
(1, 21),
(4, 16),
(5, 21),
(6, 21),
(7, 20),
(8, 20),
(9, 20),
(10, 16),
(11, 26),
(12, 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador_grupo`
--
ALTER TABLE `administrador_grupo`
  ADD KEY `FK_CD_GRUPOADM` (`cd_grupo`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`cd_matricula`);

--
-- Indexes for table `aluno_grupo`
--
ALTER TABLE `aluno_grupo`
  ADD PRIMARY KEY (`cd_aluno_grupo`),
  ADD KEY `FK_CD_GRUPO` (`cd_grupo`),
  ADD KEY `cd_matricula` (`cd_matricula`);

--
-- Indexes for table `codigo`
--
ALTER TABLE `codigo`
  ADD PRIMARY KEY (`cd_codigo_dos_codigos`),
  ADD KEY `FK_CD_PARCEIROCOD` (`cd_parceiro`),
  ADD KEY `FK_CD_MATRICULACOD` (`cd_matricula`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`cd_download`),
  ADD KEY `FK_CD_POSTAGEMDOWN` (`cd_postagem`),
  ADD KEY `FK_CD_MOEDA_DOWNLOAD` (`cd_moeda_download`);

--
-- Indexes for table `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`cd_grupo`),
  ADD KEY `FK_TIPO_GRUPO` (`TIPO_GRUPO_cd_TIPO`);

--
-- Indexes for table `moeda_download`
--
ALTER TABLE `moeda_download`
  ADD PRIMARY KEY (`cd_moeda_download`);

--
-- Indexes for table `notificacao`
--
ALTER TABLE `notificacao`
  ADD PRIMARY KEY (`CD_NOTIFICACAO`),
  ADD KEY `FK_ALUNO_NOTIFICACAO_idx` (`CD_ALUNO`),
  ADD KEY `fk_grupo_notificacao_idx` (`CD_GRUPO`),
  ADD KEY `FK_POSTAGEM_NOTIFICACAO_idx` (`CD_POSTAGEM`);

--
-- Indexes for table `parceiros`
--
ALTER TABLE `parceiros`
  ADD PRIMARY KEY (`cd_parceiro`);

--
-- Indexes for table `ponto_aluno`
--
ALTER TABLE `ponto_aluno`
  ADD KEY `FK_CD_MATRICULAPOINT` (`cd_matricula`);

--
-- Indexes for table `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`cd_postagem`),
  ADD KEY `FK_CD_ALUNO_GRUPO` (`cd_aluno_grupo`),
  ADD KEY `FK_TIPO_POSTAGEM_CD_TIPO_POSTAGEM` (`TIPO_POSTAGEM_cd_tipo_postagem`),
  ADD KEY `FK_CD_PRIORIDADE` (`cd_prioridade`);

--
-- Indexes for table `prioridade`
--
ALTER TABLE `prioridade`
  ADD PRIMARY KEY (`cd_prioridade`);

--
-- Indexes for table `promocao`
--
ALTER TABLE `promocao`
  ADD PRIMARY KEY (`cd_promocao`),
  ADD KEY `FK_CD_PARCEIRO` (`cd_parceiro`);

--
-- Indexes for table `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`cd_resposta`);

--
-- Indexes for table `tipo_grupo`
--
ALTER TABLE `tipo_grupo`
  ADD PRIMARY KEY (`cd_TIPO`);

--
-- Indexes for table `tipo_postagem`
--
ALTER TABLE `tipo_postagem`
  ADD PRIMARY KEY (`cd_tipo_postagem`);

--
-- Indexes for table `treplica`
--
ALTER TABLE `treplica`
  ADD KEY `FK_CD_POSTAGEM` (`cd_postagem`),
  ADD KEY `FK_CD_RESPOSTA` (`cd_resposta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `cd_download` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grupo`
--
ALTER TABLE `grupo`
  MODIFY `cd_grupo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `notificacao`
--
ALTER TABLE `notificacao`
  MODIFY `CD_NOTIFICACAO` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `parceiros`
--
ALTER TABLE `parceiros`
  MODIFY `cd_parceiro` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `postagem`
--
ALTER TABLE `postagem`
  MODIFY `cd_postagem` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `promocao`
--
ALTER TABLE `promocao`
  MODIFY `cd_promocao` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resposta`
--
ALTER TABLE `resposta`
  MODIFY `cd_resposta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tipo_grupo`
--
ALTER TABLE `tipo_grupo`
  MODIFY `cd_TIPO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrador_grupo`
--
ALTER TABLE `administrador_grupo`
  ADD CONSTRAINT `FK_CD_GRUPOADM` FOREIGN KEY (`cd_grupo`) REFERENCES `grupo` (`cd_grupo`);

--
-- Constraints for table `aluno_grupo`
--
ALTER TABLE `aluno_grupo`
  ADD CONSTRAINT `FK_CD_GRUPO` FOREIGN KEY (`cd_grupo`) REFERENCES `grupo` (`cd_grupo`),
  ADD CONSTRAINT `FK_CD_MATRICULAGRU` FOREIGN KEY (`cd_matricula`) REFERENCES `aluno` (`cd_matricula`);

--
-- Constraints for table `codigo`
--
ALTER TABLE `codigo`
  ADD CONSTRAINT `FK_CD_MATRICULACOD` FOREIGN KEY (`cd_matricula`) REFERENCES `aluno` (`cd_matricula`),
  ADD CONSTRAINT `FK_CD_PARCEIROCOD` FOREIGN KEY (`cd_parceiro`) REFERENCES `parceiros` (`cd_parceiro`);

--
-- Constraints for table `download`
--
ALTER TABLE `download`
  ADD CONSTRAINT `FK_CD_MOEDA_DOWNLOAD` FOREIGN KEY (`cd_moeda_download`) REFERENCES `moeda_download` (`cd_moeda_download`),
  ADD CONSTRAINT `FK_CD_POSTAGEMDOWN` FOREIGN KEY (`cd_postagem`) REFERENCES `postagem` (`cd_postagem`);

--
-- Constraints for table `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `FK_TIPO_GRUPO` FOREIGN KEY (`TIPO_GRUPO_cd_TIPO`) REFERENCES `tipo_grupo` (`cd_TIPO`);

--
-- Constraints for table `notificacao`
--
ALTER TABLE `notificacao`
  ADD CONSTRAINT `FK_ALUNO_NOTIFICACAO` FOREIGN KEY (`CD_ALUNO`) REFERENCES `aluno` (`cd_matricula`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_POSTAGEM_NOTIFICACAO` FOREIGN KEY (`CD_POSTAGEM`) REFERENCES `postagem` (`cd_postagem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_grupo_notificacao` FOREIGN KEY (`CD_GRUPO`) REFERENCES `grupo` (`cd_grupo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ponto_aluno`
--
ALTER TABLE `ponto_aluno`
  ADD CONSTRAINT `FK_CD_MATRICULAPOINT` FOREIGN KEY (`cd_matricula`) REFERENCES `aluno` (`cd_matricula`);

--
-- Constraints for table `postagem`
--
ALTER TABLE `postagem`
  ADD CONSTRAINT `FK_CD_ALUNO_GRUPO` FOREIGN KEY (`cd_aluno_grupo`) REFERENCES `aluno_grupo` (`cd_aluno_grupo`),
  ADD CONSTRAINT `FK_CD_PRIORIDADE` FOREIGN KEY (`cd_prioridade`) REFERENCES `prioridade` (`cd_prioridade`),
  ADD CONSTRAINT `FK_TIPO_POSTAGEM_CD_TIPO_POSTAGEM` FOREIGN KEY (`TIPO_POSTAGEM_cd_tipo_postagem`) REFERENCES `tipo_postagem` (`cd_tipo_postagem`);

--
-- Constraints for table `promocao`
--
ALTER TABLE `promocao`
  ADD CONSTRAINT `FK_CD_PARCEIRO` FOREIGN KEY (`cd_parceiro`) REFERENCES `parceiros` (`cd_parceiro`);

--
-- Constraints for table `treplica`
--
ALTER TABLE `treplica`
  ADD CONSTRAINT `FK_CD_POSTAGEM` FOREIGN KEY (`cd_postagem`) REFERENCES `postagem` (`cd_postagem`),
  ADD CONSTRAINT `FK_CD_RESPOSTA` FOREIGN KEY (`cd_resposta`) REFERENCES `resposta` (`cd_resposta`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
