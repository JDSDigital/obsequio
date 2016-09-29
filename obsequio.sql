-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2016 a las 19:56:14
-- Versión del servidor: 10.1.17-MariaDB
-- Versión de PHP: 7.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `obsequio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asegurados`
--

CREATE TABLE `asegurados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` int(11) NOT NULL,
  `genero` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `tlf1` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `tlf2` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subgrupo` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asegurados`
--

INSERT INTO `asegurados` (`id`, `nombre`, `apellido`, `cedula`, `genero`, `dob`, `tlf1`, `tlf2`, `mail`, `empresa`, `subgrupo`) VALUES
(1, 'YOMELI ', 'ROSALES ', 12459274, 'F', '08/03/1976', '0424 1265864', '0424 1574097', 'yomeli.rosales@segurosuniversitas.com', 'SEGUROS UNIVERSITAS ', 'CUPON CAV\r\n'),
(2, 'CARLOS ', 'CHAVEZ', 4588444, 'M', '18/07/1956', '0412 7271517', '', 'carloschavez4@yahoo.com', 'BOLIVARIANA DE SEGUROS ', 'CUPON CAV\r\n'),
(3, 'DAVID ', 'MILA�O', 19819474, 'M', '01/10/1984', '0416 2122498', '', 'davidmilanor@gmail.com', 'BOLIVARIANA DE SEGUROS ', 'CUPON CAV\r\n'),
(4, 'MARIA ALEJANDRA ', 'SALCEDO ', 6285562, 'F', '09/07/1968', '0424 1550512', '', 'mariale_salcedo68@hotmail.com', 'SAP', 'CUPON CAV\r\n'),
(5, 'ADRIANA ', 'ZAVARCE', 23710932, 'F', '20/08/1993', '0424 2946433', '', 'adrizavarse@gmail.com', 'SAP', 'CUPON CAV\r\n'),
(6, 'EDUARDO ', 'HERNANDEZ ', 11593490, 'M', '06/05/1973', '0414 5143327', '', 'e.hernandez@lozadacolmenares.com ', 'LOZADA COLMENARES ', 'CUPON CAV\r\n'),
(7, 'ABELINO ', 'PEREIRO', 9971558, 'M', '10/09/1971', '0426 9171327', '', 'abelino.pereiro@laoccidental.com', 'C.A. DE SEGUROS LA OCCIDENTAL ', 'CUPON CAV\r\n'),
(8, 'CARLOS EDUARDO ', 'FIGUEREDO ', 5967851, 'M', '23/09/1968', '0424 2780552', '0212 9569655', 'cfigueredo@mercantilseguros.com ', 'MERCANTIL SEGUROS ', 'CUPON CAV\r\n'),
(9, 'LETICIA ', 'MOLINA ', 12122954, 'F', '03/02/', '0412 2432820', '', 'cmolina@mercantilseguros.com ', 'MERCANTIL SEGUROS ', 'CUPON CAV\r\n'),
(10, 'JESUS ARTURO ', 'REYES ', 13494337, 'M', '25/05/', '0414 2839235', '0424 2238842', 'jreyesvil@gmail.com ', 'MERCANTIL SEGUROS ', 'CUPON CAV\r\n'),
(11, 'RUBEN ', 'BRELTO', 6719942, 'M', '23/02/1968', '0424 2147142', '0212 2034538', 'brelto.ruben@locatelve.com', 'LOCATEL ', 'CUPON CAV\r\n'),
(12, 'REINA ', 'RODRIGUEZ', 5964602, 'F', '24/10/1959', '0416 6287261', '', 'reimaro1024@gmail.com', 'CAV', 'CUPON CAV\r\n'),
(13, 'MYRIAM ', 'WENDEHAKE', 2768424, 'F', '29/10/', '0412 6219988', '0416 6219988', 'tiwe.notas@gmail.com', 'SEGUROS-GUIA.COM', 'CUPON CAV\r\n'),
(14, 'JESSICA', 'LAINE', 17983164, 'F', '12/12/1985', '0424 2282249', '0212 7532953', 'soficlcine@hotmail.com ', 'SEGUROS-GUIA.COM', 'CUPON CAV\r\n'),
(15, 'JOANNA', 'CASSER', 14534585, 'F', '14/01/1980', '0424 1191466', '0212 7930936', 'jec@daycohost.com', 'DAICO', 'CUPON CAV\r\n'),
(16, 'DANIELA ', 'PEREZ ', 15701611, 'F', '27/01/1982', '0424 1156907', '0412 3935584', 'dperez@munichere.com', 'MIINCHERER DE VENEZUELA', 'CUPON CAV\r\n'),
(17, 'JOSE GREGORIO ', 'GOMEZ ', 11737223, 'M', '03/02/1976', '0424 2726252', '', 'jose.gomez@lavenezolana.com', 'LA VENEZOLANA ', 'CUPON CAV\r\n'),
(18, 'RAFAEL ', 'CADENAS', 9528775, 'M', '11/01/1971', '0424 2902103', '', 'rcadenasr@gmail.com ', 'HORIZONTES ', 'CUPON CAV\r\n'),
(19, 'JANNETH', 'SANCHEZ ', 11159016, 'F', '18/01/1972', '0426 5157934', '', 'jeann_sanchez@hotmail.com', 'HORIZONTES ', 'CUPON CAV\r\n'),
(20, 'SILVANA ', 'VILLASMIL ', 18202943, 'F', '13/08/1987', '0426 5575446', '', 'silvanavillasmil@hotmail.com', 'HORIZONTES ', 'CUPON CAV\r\n'),
(21, 'KEILA ', 'CANENCIA ', 16591494, 'F', '27/09/1985', '0424 2278921', '', 'keila.aca@gmail.com', 'UNIVERSAL', 'CUPON CAV\r\n'),
(22, 'IVAN ', 'LANDAETA', 6917775, 'M', '17/01/1968', '0414 3345808', '', 'ricardo.urdaneta17@gmail.com', 'LA VENEZOLANA ', 'CUPON CAV\r\n'),
(23, 'MARTHA', 'ACHURY', 14586418, 'F', '19/12/1966', '0424 2291949', '', 'achumaz@hotmail.com', 'VIVIR SEGUROS ', 'CUPON CAV\r\n'),
(24, 'GRYMAR ', 'BARRERA', 17742817, 'F', '11/11/1985', '0412 3718977', '', 'greymar.barrera@gmail.com ', 'HORIZONTES ', 'CUPON CAV\r\n'),
(25, 'VICTOS ', 'CASTILLO ', 6845477, 'M', '07/08/1963', '0424 2187910', '', 'vmcn0708@gmail.com ', 'LA VENEZOLANA ', 'CUPON CAV\r\n'),
(26, 'JORGE ', 'ZAMBRANO', 12502462, 'M', '18/02/1976', '0414 2012544', '', 'jorge.zambrano@lavenezolana.com', 'LA VENEZOLANA ', 'CUPON CAV\r\n'),
(27, 'DAVID ', 'VARGAS ', 18185764, 'M', '13/01/1987', '0212 7617855', '0414 3360883', 'vargasdavid1987@gmail.com', 'SEGUROS MEDIOS', 'CUPON CAV\r\n'),
(28, 'LUIS ALFREDO', 'PEREZ NIETO', 11993493, 'M', '09/09/1974', '0414 2456695', '0414 2512105', 'perezsivl@gmail.com ', 'VENEASESORES CORRETAJE ', 'CUPON CAV\r\n'),
(29, 'ANDREINA ', 'AGUILERA ', 13494398, 'F', '18/12/1978', '0424 1072590', '', 'a.aguilera10.aa@gmail.com ', 'ATRIC', 'CUPON CAV\r\n'),
(30, 'LUIS GUSTAVO ', 'RIVERA SALAZAR ', 13309433, 'M', '19/05/1978', '0426 5170239', '0212 3231016', 'luisriveradategeek@gmail.com', 'DATEGEEK', 'CUPON CAV\r\n'),
(31, 'BELSISMAR', 'SILVA CELIS', 12518615, 'F', '24/10/1977', '0414 2748013', '0416 7041686', 'belsismar@gmail.com ', 'SEGUROS LA INTERNACIONAL ', 'CUPON CAV\r\n'),
(32, 'ISMELIA ', 'BASTIDAS ', 12749461, 'F', '05/08/1976', '0414 3040121', '0416 4203595', 'ismelia.bastidas@gmail.com ', 'C.A.SEGUROS LA INTERNACINAL ', 'CUPON CAV\r\n'),
(33, 'OSCAR ', 'CRUZ ', 82289663, 'M', '07/06/1974', '0414 3331216', '', 'ocruz@inma.us', 'INMA', 'CUPON CAV\r\n'),
(34, 'VERONICA ', 'UZCATEGUI ', 13563803, 'F', '23/07/1979', '0414 3237137', '', 'v.uzcategui@la-guiainternacional.com', 'LA INTERNACIONAL ', 'CUPON CAV\r\n'),
(35, 'JUAN ', 'DUQUE ', 14198522, 'M', '04/05/1976', '0424 1867616', '', 'jduquemendez@gmail.com ', 'MADFRE', 'CUPON CAV\r\n'),
(36, 'JUAN CARLOS ', 'GONZALEZ', 17147442, 'M', '18/10/1985', '0424 1737446', '', 'jlgljuancarlos@gmail.com', 'SUDEASEE', 'CUPON CAV\r\n'),
(37, 'JOSE MANUEL', 'GUTIERREZ ', 6242325, 'M', '27/03/1966', '0414 6077908', '', 'josemanuel.gutierrez@bbva', 'PROVINCIAL ', 'CUPON CAV\r\n');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asegurados`
--
ALTER TABLE `asegurados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asegurados`
--
ALTER TABLE `asegurados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
