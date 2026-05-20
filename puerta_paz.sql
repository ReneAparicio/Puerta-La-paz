-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2026 a las 04:02:07
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `puerta_paz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobantes_donacion`
--

CREATE TABLE `comprobantes_donacion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `donacion_id` bigint(20) UNSIGNED NOT NULL,
  `numero_comprobante` varchar(255) NOT NULL,
  `serie` varchar(255) NOT NULL,
  `nit_emisor` varchar(20) NOT NULL DEFAULT '0602-060401-101-1',
  `nombre_emisor` varchar(255) NOT NULL DEFAULT 'IGLESIA ALIANZA CRISTIANA Y MISIONERA DE EL SALVADOR',
  `fecha_emision` date NOT NULL,
  `monto` decimal(10,2) NOT NULL,
  `resolucion_numero` varchar(255) NOT NULL DEFAULT '15041-RES-IN-60695-2025',
  `codigo_unico` varchar(255) NOT NULL DEFAULT 'U712AF91SHUJ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comprobantes_donacion`
--

INSERT INTO `comprobantes_donacion` (`id`, `donacion_id`, `numero_comprobante`, `serie`, `nit_emisor`, `nombre_emisor`, `fecha_emision`, `monto`, `resolucion_numero`, `codigo_unico`, `created_at`, `updated_at`) VALUES
(1, 5, 'PP0001', 'PP2026-001 al PP2026-999', '0614-123456-101-9', 'IGLESIA PUERTA DE PAZ', '2026-05-18', 85.00, 'RES-PP-2026-001', 'PUERTA-PAZ-2026', '2026-05-19 04:22:27', '2026-05-19 04:22:27'),
(2, 5, 'PP0002', 'PP2026-001 al PP2026-999', '0614-123456-101-9', 'IGLESIA PUERTA DE PAZ', '2026-05-18', 85.00, 'RES-PP-2026-001', 'PUERTA-PAZ-2026', '2026-05-19 04:22:40', '2026-05-19 04:22:40'),
(3, 5, 'PP0003', 'PP2026-001 al PP2026-999', '0614-123456-101-9', 'IGLESIA PUERTA DE PAZ', '2026-05-18', 85.00, 'RES-PP-2026-001', 'PUERTA-PAZ-2026', '2026-05-19 04:23:07', '2026-05-19 04:23:07'),
(4, 7, 'PP0004', 'PP2026-001 al PP2026-050', '0614-123456-101-9', 'IGLESIA PUERTA DE PAZ', '2026-05-18', 60.00, 'RES-PP-2026-001', 'PUERTA-PAZ-2026', '2026-05-19 04:37:06', '2026-05-19 04:37:06'),
(5, 8, 'PP0005', 'PP2026-001 al PP2026-050', '0614-123456-101-9', 'IGLESIA PUERTA DE PAZ', '2026-05-18', 250.00, 'RES-PP-2026-001', 'PUERTA-PAZ-2026', '2026-05-19 04:40:10', '2026-05-19 04:40:10'),
(6, 8, 'PP0006', 'PP2026-001 al PP2026-050', '0614-123456-101-9', 'IGLESIA PUERTA DE PAZ', '2026-05-18', 250.00, 'RES-PP-2026-001', 'PUERTA-PAZ-2026', '2026-05-19 04:40:13', '2026-05-19 04:40:13'),
(7, 1, 'PP0007', 'PP2026-001 al PP2026-050', '0614-123456-101-9', 'IGLESIA PUERTA DE PAZ', '2026-05-18', 120.00, 'RES-PP-2026-001', 'PUERTA-PAZ-2026', '2026-05-19 04:41:05', '2026-05-19 04:41:05'),
(8, 1, 'PP0008', 'PP2026-001 al PP2026-050', '0614-123456-101-9', 'IGLESIA PUERTA DE PAZ', '2026-05-18', 120.00, 'RES-PP-2026-001', 'PUERTA-PAZ-2026', '2026-05-19 04:41:08', '2026-05-19 04:41:08'),
(9, 1, 'PP0001', 'PP2026-001 al PP2026-050', '0614-123456-101-9', 'IGLESIA PUERTA DE PAZ', '2026-05-18', 120.00, 'RES-PP-2026-001', 'PUERTA-PAZ-2026', '2026-05-19 04:44:09', '2026-05-19 04:44:09'),
(10, 1, 'PP0001', 'PP2026-001 al PP2026-050', '0614-123456-101-9', 'IGLESIA PUERTA DE PAZ', '2026-05-18', 120.00, 'RES-PP-2026-001', 'PUERTA-PAZ-2026', '2026-05-19 04:44:14', '2026-05-19 04:44:14'),
(11, 10, 'PP0006', 'PP2026-001 al PP2026-050', '0614-123456-101-9', 'IGLESIA PUERTA DE PAZ', '2026-05-18', 500.00, 'RES-PP-2026-001', 'PUERTA-PAZ-2026', '2026-05-19 04:44:30', '2026-05-19 04:44:30'),
(12, 10, 'PP0006', 'PP2026-001 al PP2026-050', '0614-123456-101-9', 'IGLESIA PUERTA DE PAZ', '2026-05-18', 500.00, 'RES-PP-2026-001', 'PUERTA-PAZ-2026', '2026-05-19 04:44:36', '2026-05-19 04:44:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donaciones`
--

CREATE TABLE `donaciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `monto` decimal(10,2) NOT NULL,
  `estado` enum('pendiente','completada','fallida') NOT NULL DEFAULT 'pendiente',
  `transaccion_id` varchar(255) DEFAULT NULL,
  `requiere_comprobante` tinyint(1) NOT NULL DEFAULT 0,
  `documento_identidad` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `emitido_por` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comprobante_emitido` tinyint(1) NOT NULL DEFAULT 0,
  `numero_comprobante` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `donaciones`
--

INSERT INTO `donaciones` (`id`, `nombre`, `email`, `telefono`, `monto`, `estado`, `transaccion_id`, `requiere_comprobante`, `documento_identidad`, `direccion`, `emitido_por`, `created_at`, `updated_at`, `comprobante_emitido`, `numero_comprobante`) VALUES
(1, 'Ana María Castillo', 'ana.castillo@gmail.com', '7012-3456', 120.00, 'completada', NULL, 1, '0614-123456-789-0', 'Calle Los Pinos #23, Colonia Santa Mónica, Soyapango', NULL, '2026-05-15 16:30:00', '2026-05-15 16:35:00', 0, 'PP0001'),
(2, 'Carlos Eduardo Méndez', 'carlos.mendez@hotmail.com', '7221-9876', 45.00, 'completada', NULL, 0, NULL, NULL, NULL, '2026-05-15 20:20:00', '2026-05-15 20:25:00', 0, NULL),
(3, 'Marleny Esperanza Rivera', 'marleny.rivera@yahoo.com', '7854-1230', 200.00, 'completada', NULL, 1, '0614-987654-321-0', 'Avenida Las Magnolias #12, Residencial Las Flores, Soyapango', NULL, '2026-05-16 15:15:00', '2026-05-16 15:20:00', 0, 'PP0002'),
(4, 'José Luis Hernández', 'jose.hernandez@gmail.com', '7983-4567', 30.00, 'pendiente', NULL, 0, NULL, NULL, NULL, '2026-05-16 22:45:00', '2026-05-16 22:50:00', 0, NULL),
(5, 'Fernanda Lizeth Martínez', 'fernanda.mtz@outlook.com', '7654-3210', 85.00, 'completada', NULL, 1, '0614-555666-777-8', 'Pasaje Los Laureles #5, Urbanización La Paz, Soyapango', NULL, '2026-05-17 17:00:00', '2026-05-17 17:05:00', 0, 'PP0003'),
(6, 'Roberto Antonio Flores', 'roberto.flores@gmail.com', '7123-8901', 15.00, 'fallida', NULL, 0, NULL, NULL, NULL, '2026-05-18 00:30:00', '2026-05-18 00:35:00', 0, NULL),
(7, 'Karla Patricia Gómez', 'karla.gomez@gmail.com', '7489-2345', 60.00, 'completada', NULL, 1, '0614-333222-111-0', 'Boulevard Constitución #78, Soyapango', NULL, '2026-05-18 14:00:00', '2026-05-18 14:05:00', 0, 'PP0004'),
(8, 'Luis Fernando Sánchez', 'luis.sanchez@hotmail.com', '7700-1234', 250.00, 'completada', NULL, 1, '0614-777888-999-0', 'Calle Principal #45, Soyapango', NULL, '2026-05-18 18:10:00', '2026-05-19 04:40:07', 0, 'PP0005'),
(9, 'Sofía Raquel Menjívar', 'sofia.menjivar@gmail.com', '7888-5678', 10.00, 'completada', NULL, 0, NULL, NULL, NULL, '2026-05-18 21:20:00', '2026-05-18 21:25:00', 0, NULL),
(10, 'Daniel Alejandro Rivas', 'daniel.rivas@yahoo.com', '7456-7890', 500.00, 'completada', NULL, 1, '0614-111222-333-4', 'Residencial San Luis #2, Soyapango', NULL, '2026-05-18 23:30:00', '2026-05-18 23:35:00', 0, 'PP0006');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `cupo` int(11) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `titulo`, `descripcion`, `fecha`, `hora`, `lugar`, `cupo`, `imagen`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Dia Madre', 'Invitamos a cada una de nuestras hermanas que sean participes de esta celebracion que con mucho cariño hemos preparado para usteds', '2026-06-25', '09:15:00', 'soyapango', 20, 'eventos/Kr4TIw0r9CLRVN1mHlZpD3BVCWE5zei52mnuHYPo.jpg', 1, '2026-05-17 12:20:38', '2026-05-19 05:13:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes_contacto`
--

CREATE TABLE `mensajes_contacto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `asunto` varchar(255) NOT NULL,
  `mensaje` text NOT NULL,
  `leido` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mensajes_contacto`
--

INSERT INTO `mensajes_contacto` (`id`, `nombre`, `email`, `telefono`, `asunto`, `mensaje`, `leido`, `created_at`, `updated_at`) VALUES
(1, 'Osmin Ruiz', 'reneaparicioruiz@gmail.com', '74842222', 'Próximos bautizmos', 'Buenas tardes me gustaría saber cuando serán los próximos.....', 1, '2026-05-19 12:04:45', '2026-05-19 12:04:53'),
(2, 'Carlos Eduardo Méndez', 'carlos.mendez@hotmail.com', '7221-9876', 'Consulta sobre Escuela Bíblica', 'Hola, me gustaría saber si la escuela bíblica para niños sigue abierta. Mi hijo tiene 7 años y quisiera inscribirlo. ¿Cuáles son los requisitos?', 1, '2026-05-17 16:30:00', '2026-05-17 16:30:00'),
(3, 'Marleny Esperanza Rivera', 'marleny.rivera@yahoo.com', '7854-1230', 'Información de donaciones', 'Buenas tardes, quiero hacer una donación mensual. ¿Cómo puedo configurarla para que sea recurrente? Necesito que me envíen el comprobante cada mes.', 0, '2026-05-16 20:20:00', '2026-05-16 20:20:00'),
(4, 'José Luis Hernández', 'jose.hernandez@gmail.com', '7983-4567', 'Matrimonios en la iglesia', 'Estoy interesado en casarme en la iglesia. ¿Cuáles son los requisitos, costos y fechas disponibles para este año?', 1, '2026-05-16 15:15:00', '2026-05-16 15:15:00'),
(5, 'Fernanda Lizeth Martínez', 'fernanda.mtz@outlook.com', '7654-3210', 'Grupo de jóvenes', 'Hola, quiero unirme al grupo de jóvenes. Tengo 19 años. ¿Cuándo son las reuniones y dónde nos encontramos?', 1, '2026-05-15 22:45:00', '2026-05-19 12:10:19'),
(6, 'Roberto Antonio Flores', 'roberto.flores@gmail.com', '7123-8901', 'Próximos bautizos', 'Buenas, me gustaría saber cuándo serán los próximos bautizos. Ya tomé los cursos y solo me falta la fecha.', 1, '2026-05-15 17:00:00', '2026-05-19 12:10:03'),
(7, 'Karla Patricia Gómez', 'karla.gomez@gmail.com', '7489-2345', 'Problemas con la página web', 'No puedo registrarme a los eventos. Me sale error cuando completo el formulario. ¿Podrían ayudarme?', 1, '2026-05-15 00:30:00', '2026-05-19 12:08:12'),
(8, 'Luis Fernando Sánchez', 'luis.sanchez@hotmail.com', '7700-1234', 'Prédicas en línea', '¿Las prédicas quedan grabadas? No puedo asistir los domingos por trabajo, me gustaría verlas en otro horario.', 1, '2026-05-14 14:00:00', '2026-05-14 14:00:00'),
(9, 'Sofía Raquel Menjívar', 'sofia.menjivar@gmail.com', '7888-5678', 'Ministerio de alabanza', 'Hola, quiero unirme al ministerio de alabanza. Canto y toco guitarra. ¿Qué debo hacer para ser parte?', 1, '2026-05-13 18:10:00', '2026-05-19 12:08:23'),
(10, 'Daniel Alejandro Rivas', 'daniel.rivas@yahoo.com', '7456-7890', 'Ayuda con donación', 'Intenté donar por PayPal pero la transacción falló. ¿Hay otra forma de donar? Me interesa apoyar el programa de niños.', 1, '2026-05-13 15:30:00', '2026-05-13 15:30:00'),
(11, 'Gabriela Beatriz López', 'gaby.lopez@gmail.com', '7345-6789', 'Deseo ser voluntaria', 'Quiero ser voluntaria en los programas infantiles. Tengo disponibilidad los sábados. ¿A quién puedo contactar?', 1, '2026-05-12 21:00:00', '2026-05-19 12:08:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_05_17_055810_create_eventos_table', 2),
(5, '2026_05_18_182400_create_donaciones_table', 3),
(6, '2026_05_18_211908_create_comprobantes_donacion_table', 4),
(7, '2026_05_18_212139_add_comprobante_emitido_to_donaciones_table', 5),
(8, '2026_05_19_053204_create_predicas_table', 6),
(9, '2026_05_19_060025_create_mensajes_contacto_table', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `predicas`
--

CREATE TABLE `predicas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `predicador` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `contenido` text DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `audio_url` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `fecha` date NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `predicas`
--

INSERT INTO `predicas` (`id`, `titulo`, `predicador`, `descripcion`, `contenido`, `video_url`, `audio_url`, `imagen`, `fecha`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'El amor de Dios', 'Ps. Juan Perez', 'Suspendisse tempus a ex ut semper. Etiam urna lorem, porttitor sit amet vulputate non, aliquet id metus. Fusce non tincidunt sem.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit convallis urna eget sodales. Cras dictum tincidunt neque, eget interdum tortor auctor vel. Nulla eleifend bibendum mauris, nec hendrerit velit placerat in. Praesent id neque quam. Sed ligula tortor, commodo vel tellus sit amet, auctor scelerisque nunc. Donec lacus felis, tincidunt nec vestibulum id, convallis non orci. Sed condimentum imperdiet ante sodales sodales. Aliquam sit amet nisi vitae est maximus condimentum. Morbi laoreet augue eget euismod pellentesque. Cras vitae luctus nisi, eu lacinia nisi. In porttitor lobortis metus, quis elementum turpis accumsan id. Nunc eleifend, velit sed pellentesque feugiat, enim leo eleifend risus, ut tincidunt augue justo ut ipsum. Aenean fringilla nunc a turpis ultricies pretium et quis lectus.\r\n\r\nIn orci lectus, faucibus eu euismod a, volutpat vel elit. Quisque pulvinar lectus id aliquam viverra. Maecenas fringilla molestie erat et porta. Phasellus consequat tellus eget nisl pharetra, et dictum ligula pharetra. Suspendisse tempus a ex ut semper. Etiam urna lorem, porttitor sit amet vulputate non, aliquet id metus. Fusce non tincidunt sem.\r\n\r\nSed et tempus nulla, in aliquam nibh. Nulla blandit nec lectus vitae blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris faucibus ipsum augue. Mauris vel urna est. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum eleifend ligula nisi, tincidunt volutpat neque vulputate nec. Morbi semper lectus libero, at imperdiet ipsum interdum cursus. Nullam at ex finibus, varius libero vitae, ultricies turpis. Aliquam odio lorem, vestibulum in nunc quis, porttitor luctus ligula.\r\n\r\nCras viverra scelerisque turpis, ut efficitur odio faucibus a. Phasellus imperdiet ante est, quis bibendum risus rutrum sed. Aenean eget justo massa. Morbi in congue arcu, in sollicitudin nisl. Maecenas pellentesque nunc non posuere porttitor. Suspendisse tincidunt interdum mi nec scelerisque. Fusce lacinia justo efficitur nunc rutrum vulputate vitae ut erat. Vivamus eget consectetur felis.\r\n\r\nMaecenas iaculis vestibulum dui quis maximus. Duis scelerisque aliquam eros. Cras dignissim auctor turpis id sagittis. Aenean a magna eros. Aenean consectetur pulvinar laoreet. Nullam feugiat ex eros, eget facilisis elit tincidunt gravida. Proin euismod arcu at urna tempus elementum. Proin vel risus eu orci fermentum tempor vel quis eros. Phasellus quis cursus leo, ut viverra diam. Sed eu viverra lorem, rhoncus tincidunt leo. Pellentesque vel pulvinar mi. Quisque vulputate aliquam risus. Sed viverra sapien sit amet elit volutpat tempus. Nulla malesuada purus nec enim faucibus, vel lacinia mi volutpat.', 'https://www.youtube.com/live/UeM1_i7Xnnc?si=lreAsE0h5AyOHDGB', 'https://audiomack.com/predicas-cristianas/song/el-amor-de-dios', 'predicas/WvKc0nE8fzAjg4oLeDsVD4cpIDFU21uCHxDxT1PY.jpg', '2026-05-19', 1, '2026-05-19 11:48:36', '2026-05-19 11:48:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion_corta` text NOT NULL,
  `descripcion_larga` text NOT NULL,
  `foto_principal` varchar(255) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `nombre`, `descripcion_corta`, `descripcion_larga`, `foto_principal`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Comedor Infantil Sabatino', 'Se enfoca en brindar atención integral, alimentación....', 'Es una iniciativa de impacto social, promovida en la región por ministerios como la Alianza Cristiana y Misionera. Se enfoca en brindar atención integral, alimentación y actividades recreativas a niños de comunidades vulnerables.', 'programas/qS4cWZiaJPgKvLzURunGFKKA8wpcdDjdgL6dW44Q.jpg', 1, NULL, '2026-05-17 11:36:57'),
(3, 'La Conexion con los jovenes', 'Programa dedicado para jóvenes de 10 - 18años....', 'Con este programa buscamos darles a conocer los verdaderos desafíos actuales (redes sociales, salud mental, identidad) con principios bíblicos prácticos.', 'programas/uMZEHawpkzX7Yl3y5ApMeLJDf7VR4M2TIanRU2Gm.jpg', 1, '2026-05-17 11:43:42', '2026-05-17 11:43:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas_galeria`
--

CREATE TABLE `programas_galeria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `programa_id` bigint(20) UNSIGNED NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `orden` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `programas_galeria`
--

INSERT INTO `programas_galeria` (`id`, `programa_id`, `imagen`, `orden`, `created_at`, `updated_at`) VALUES
(1, 1, 'images/programa1.jpg', 1, NULL, NULL),
(2, 1, 'images/programa2.jpg', 2, NULL, NULL),
(3, 1, 'images/programa3.jpg', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('YG39VdJmXH0JD7GzB0XvhQ0QMe63aPS1iIZHAYwC', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU1VCbWxsTkpjWmpkWllSYVJtV3VrTzRYWmdScDA5M0YzS1V1UnB5dSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvUHVlcnRhLUxhLXBhei9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1779240543);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_admin`
--

CREATE TABLE `usuarios_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` enum('admin','editor','supervisor') NOT NULL DEFAULT 'editor',
  `ultimo_acceso` timestamp NULL DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios_admin`
--

INSERT INTO `usuarios_admin` (`id`, `nombre`, `email`, `password`, `rol`, `ultimo_acceso`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin@puertadepaz.com', '$2y$12$rMZrn774HZN1JSjZ2YyOzunxYs8h3xi5eO6nal0Q11VOJg9BpKpjS', 'admin', NULL, 1, '2026-03-31 11:55:11', '2026-03-31 11:55:11'),
(2, 'Christian Rosales', 'rosales@puertadepaz.org', '$2y$12$r8lU9wWIlnrPTPuDz3m6xeHonb8AYS3amJNCc9mm.3YV.g7h0xyWK', 'editor', NULL, 1, '2026-05-19 00:53:53', '2026-05-19 00:54:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `comprobantes_donacion`
--
ALTER TABLE `comprobantes_donacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comprobantes_donacion_donacion_id_foreign` (`donacion_id`);

--
-- Indices de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes_contacto`
--
ALTER TABLE `mensajes_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `predicas`
--
ALTER TABLE `predicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programas_galeria`
--
ALTER TABLE `programas_galeria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programas_galeria_programa_id_foreign` (`programa_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios_admin`
--
ALTER TABLE `usuarios_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comprobantes_donacion`
--
ALTER TABLE `comprobantes_donacion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `donaciones`
--
ALTER TABLE `donaciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensajes_contacto`
--
ALTER TABLE `mensajes_contacto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `predicas`
--
ALTER TABLE `predicas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `programas_galeria`
--
ALTER TABLE `programas_galeria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios_admin`
--
ALTER TABLE `usuarios_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comprobantes_donacion`
--
ALTER TABLE `comprobantes_donacion`
  ADD CONSTRAINT `comprobantes_donacion_donacion_id_foreign` FOREIGN KEY (`donacion_id`) REFERENCES `donaciones` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `programas_galeria`
--
ALTER TABLE `programas_galeria`
  ADD CONSTRAINT `programas_galeria_programa_id_foreign` FOREIGN KEY (`programa_id`) REFERENCES `programas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
