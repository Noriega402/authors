-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2021 a las 22:48:42
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `master`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authors`
--

CREATE TABLE `authors` (
  `id_author` int(5) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `authors`
--

INSERT INTO `authors` (`id_author`, `name`, `create_at`, `update_at`) VALUES
(1, 'Antoine de Saint-Exupéry', '2021-06-01 20:35:59', '2021-06-01 20:35:59'),
(2, 'Sun Tzu', '2021-06-01 20:41:19', '2021-06-01 20:41:19'),
(3, 'Oscar Wilde', '2021-06-01 20:41:26', '2021-06-01 20:41:26'),
(4, 'William Shakespeare', '2021-06-01 20:41:31', '2021-06-01 20:41:31'),
(5, 'William Faulkner', '2021-06-01 20:41:36', '2021-06-01 20:41:36'),
(6, 'Franz Kafka', '2021-06-01 20:41:53', '2021-06-01 20:41:53'),
(7, 'Gabriel García Márquez', '2021-06-01 20:42:12', '2021-06-01 20:42:12'),
(8, 'Paulo Coelho', '2021-06-01 20:42:22', '2021-06-01 20:42:22'),
(9, 'Charles Dickens', '2021-06-01 20:42:40', '2021-06-01 20:42:40'),
(10, 'Charles Darwin', '2021-06-01 20:42:56', '2021-06-01 20:42:56'),
(11, 'Francisco de Paula Férnandez González', '2021-06-01 20:54:13', '2021-06-01 20:54:13'),
(12, 'J.R Tolkien', '2021-06-01 20:55:02', '2021-06-01 20:55:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

CREATE TABLE `books` (
  `id_book` int(5) UNSIGNED NOT NULL,
  `title_book` varchar(70) NOT NULL,
  `description_book` text NOT NULL,
  `author` int(5) UNSIGNED NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id_book`, `title_book`, `description_book`, `author`, `create_at`, `update_at`) VALUES
(1, 'El Principito', 'El principito vive en el pequeño planeta llamado asteroide B612, en el que hay volcanes y una rosa. Se pasaba sus días cuidando de su planeta, Hasta que un día el principito abandona el planeta para conocer el resto del universo y visitar otros planetas, en los que se encuentra con diferentes tipos de personas y cosas nuevas para el.', 1, '2021-06-02 14:34:11', '2021-06-02 14:34:11'),
(2, 'El arte de la Guerra', 'El taoísmo nos enseña a alcanzar la felicidad y la perfección mediante el conocimiento de nuestra propia persona. De este modo fluimos con el mundo y conseguimos convertir las dificultades en oportunidades. Esta obra de pensamiento y estrategia parte de esa filosofía para mostrarnos cómo elegir el momento adecuado para cada acción, cómo elaborar un plan o cómo transformar cualquier contratiempo en una oportunidad. Son lecciones válidas para la vida cotidiana y la gestión de conflictos que han acabado aplicándose también a la empresa y haciendo de este un texto universal, veintiséis siglos después de su escritura.', 2, '2021-06-02 14:43:49', '2021-06-02 14:43:49'),
(3, 'El Señor de los Anillos I: la Comunidad del Anillo', 'Una historia que llega del pasado para atormentar a un grupo de medianos y a sus compañeros que se cruzarán en el viaje. Todos ellos formarán la Comunidad del Anillo, pensada para proteger al verdadero anillo de poder y portarlo para ser destruido. Un viaje que comienza en la Tierra Media y que tiene su objetivo en el Monte del Destino.', 12, '2021-06-02 14:45:04', '2021-06-02 14:45:04'),
(4, 'El Señor de los Anillos II: las Dos Torres', 'Por un lado tenemos a Frodo y a Sam que, tras ser atacados por Orcos a las orillas del Anduin, deciden escapar para seguir su misión en solitario. Y, por otro lado, tenemos al resto del grupo que van en busca de los medianos pero, eso sí, tras perder al mago del equipo en Moria. A Frodo y Sam pronto se le sumará un tercer miembro, un personaje que lleva siguiéndoles desde hacía mucho y que añora tener el anillo por encima de todo.', 12, '2021-06-02 14:45:28', '2021-06-02 14:45:28'),
(5, 'El Señor de los Anillos III: el Retorno del Rey', 'Aquí la historia de la comunidad que guarda el Anillo llega a su punto cumbre. Por un lado está la batalla de Minas Tirith, el renacimiento de cierto personaje que será clave para el desenlace de esta guerra y, por supuesto, la llegada de Sam y Frodo a las puertas del Monte del Destino con su misión para destruir el anillo.', 12, '2021-06-02 14:46:33', '2021-06-02 14:46:33'),
(6, 'El Alquimista', 'Relata las aventuras de Santiago, un joven pastor andaluz que un día emprende un viaje por las arenas del desierto en busca de un tesoro. Lo que empieza como la búsqueda de bienes mundanos se convertirá en el descubrimiento del tesoro interior.', 8, '2021-06-05 14:14:44', '2021-06-05 14:14:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-03-10-025407', 'App\\Database\\Migrations\\Book', 'default', 'App', 1615855001, 1),
(2, '2021-03-10-025903', 'App\\Database\\Migrations\\Author', 'default', 'App', 1615855001, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id_author`);

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`),
  ADD KEY `books_author_foreign` (`author`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `authors`
--
ALTER TABLE `authors`
  MODIFY `id_author` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `books`
--
ALTER TABLE `books`
  MODIFY `id_book` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_foreign` FOREIGN KEY (`author`) REFERENCES `authors` (`id_author`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
