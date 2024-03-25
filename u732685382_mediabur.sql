-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-03-2024 a las 23:13:25
-- Versión del servidor: 10.11.7-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u732685382_mediabur`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `analisis`
--

CREATE TABLE `analisis` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `portada` varchar(255) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `creador` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `activo` int(11) DEFAULT 0,
  `texto` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `analisis`
--

INSERT INTO `analisis` (`id`, `titulo`, `portada`, `tipo`, `fecha`, `creador`, `categoria`, `activo`, `texto`) VALUES
(1, 'Análisis Detallado de Dragon\'s Dogma 2: Explorando la Profundidad del RPG de Mundo Abierto en PS5, Xbox Series X/S y PC', 'https://media.vandal.net/i/960x640/121126/dragons-dogma-2-20235242339351_1.jpg', 'Analisis', '2024-03-24', 'Ivan Burgio', 'Videojuegos', 1, '<h3>La Visión Renovada de Dragon\'s Dogma</h3>\r\n\r\n<p>Con el lanzamiento de Dragon\'s Dogma 2, Capcom nos ofrece una experiencia renovada en el mundo del RPG y los juegos de acción. A diferencia de su predecesor, este juego se presenta como una evolución significativa, aprovechando al máximo las capacidades tecnológicas actuales para brindar una aventura inmersiva y emocionante.</p>\r\n\r\n<p>En este juego, asumimos el papel del Arisen, el elegido destinado a enfrentar al Dragón y salvar el mundo. La narrativa se desarrolla en un contexto de conspiraciones, poder y desafíos épicos, ofreciendo una trama que invita a los jugadores a sumergirse en un universo rico en detalles y misterios por descubrir.</p>\r\n\r\n<img data-src=\"https://www.dragonsdogma.com/2/assets/images/character/img-player-arisen.jpg\" alt=\"imagen del aristen\">\r\n\r\n<h3>La Maravilla del Mundo Abierto de Vermund y Battahl</h3>\r\n\r\n<p>El mundo de Dragon\'s Dogma 2 se presenta como un vasto territorio por explorar, lleno de vida y desafíos. Desde el frondoso reino de Vermund hasta las áridas tierras de Battahl, cada rincón ofrece una experiencia única. La ausencia de pantallas de carga y la libertad para abordar las misiones principales y secundarias sin restricciones lineales hacen que la exploración sea emocionante y llena de sorpresas.</p>\r\n\r\n<p>Además, el sistema de combate, diseñado con elementos estratégicos y de acción, agrega profundidad a las confrontaciones con enemigos variados y desafiantes. La interacción con la inteligencia artificial y las físicas del entorno crea momentos dinámicos y emocionantes en cada encuentro.</p>\r\n\r\n<img data-src=\"https://www.dragonsdogma.com/2/assets/images/world/pic-vermund_03.jpg\" alt=\"imagen del mundo\">\r\n\r\n<h3>Un Análisis Técnico y la Experiencia del Jugador</h3>\r\n\r\n<p>A nivel técnico, Dragon\'s Dogma 2 ofrece un diseño artístico impresionante, una banda sonora envolvente y efectos visuales cautivadores. Sin embargo, se pueden observar algunas limitaciones en el rendimiento, especialmente en ciertas situaciones de alta intensidad. A pesar de estos pequeños inconvenientes, la experiencia global del juego es excepcional y cautivadora para los amantes de los RPG y los mundos abiertos.</p>\r\n\r\n<p>En conclusión, Dragon\'s Dogma 2 se destaca como un título que combina de manera brillante la narrativa envolvente, la exploración fascinante y los combates emocionantes. Es un viaje que invita a los jugadores a sumergirse en un universo lleno de desafíos y descubrimientos, haciendo de cada partida una experiencia inolvidable.</p>\r\n\r\n<img data-src=\"https://i.blogs.es/d7b30c/dragons-dogma-2/500_333.webp\" alt=\"imagen del combate\">\r\n\r\n<h3>Los Personajes y la Inmersión en el Mundo de Dragon\'s Dogma 2</h3>\r\n\r\n<p>En Dragon\'s Dogma 2, los personajes desempeñan un papel fundamental en la inmersión del jugador en el mundo del juego. El protagonista, conocido como el Arisen, es el héroe destinado a enfrentarse al Dragón y salvar el reino de Vermund de la destrucción. A lo largo de la aventura, el jugador se encontrará con una variedad de personajes no jugables (PNJ) que ofrecen misiones, información y profundizan en la historia y la mitología del juego.</p>\r\n\r\n<p>Además, el sistema de peones añade una capa única de inmersión. Estos personajes controlados por la IA actúan como compañeros de viaje del Arisen, ofreciendo asistencia en combate, consejos estratégicos y comentarios que enriquecen la experiencia del jugador. La interacción con los peones y otros PNJ contribuye significativamente a la sensación de estar inmerso en un mundo vivo y dinámico.</p>\r\n\r\n<img data-src=\"https://www.dragonsdogma.com/2/assets/images/character/img-player-pawns.jpg\" alt=\"imagen de personajes\">\r\n\r\n<h3>El Sistema de Progresión y Personalización</h3>\r\n\r\n<p>El sistema de progresión y personalización en Dragon\'s Dogma 2 es profundo y diverso. A medida que el jugador avanza en la historia y completa misiones, puede mejorar las habilidades de su personaje (ya sea el Arisen o sus peones), adquirir nuevo equipo y explorar diferentes vocaciones o clases.</p>\r\n\r\n<p>Las vocaciones ofrecen estilos de juego únicos, como el guerrero centrado en el combate cuerpo a cuerpo, el mago especializado en magia poderosa, el arquero experto en ataques a distancia y muchas más. Esta variedad permite a los jugadores adaptar su estilo de juego y estrategias según las situaciones y desafíos que encuentren en el juego, añadiendo una capa de profundidad y personalización a la experiencia de juego.</p>\r\n\r\n<img data-src=\"https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2024/03/dragons-dogma-2-editor-personajes-3284864.jpg?tf=3840x\" alt=\"imagen de personalización\">\r\n\r\n<h3>La Recepción y Crítica de Dragon\'s Dogma 2</h3>\r\n\r\n<p>Desde su lanzamiento, Dragon\'s Dogma 2 ha recibido una recepción generalmente positiva tanto de la crítica como de los jugadores. Los elogios se centran en su mundo abierto dinámico y detallado, su sistema de combate emocionante y la profundidad de su sistema de progresión y personalización. Los jugadores han elogiado especialmente la inmersión que ofrece el juego, gracias a sus personajes memorables, su historia envolvente y la libertad de exploración que brinda su vasto mundo abierto.</p>\r\n\r\n<p>Si bien se han señalado algunos problemas técnicos menores, como bajadas de rendimiento en ciertas situaciones o pequeños errores de IA, estos no han empañado significativamente la experiencia general y el disfrute que ofrece Dragon\'s Dogma 2 a los amantes de los juegos de rol y la acción en un mundo abierto.</p>\r\n\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `portada` varchar(255) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `creador` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `activo` int(11) DEFAULT 0,
  `texto` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `portada`, `tipo`, `fecha`, `creador`, `categoria`, `activo`, `texto`) VALUES
(1, 'La Colaboración Innovadora entre Sony y Implicit Conversions para Preservar y Adaptar Juegos Clásicos en PS5 y Más Plataformas', 'https://i.blogs.es/f44509/ic-og-img/1366_2000.png', 'Articulo', '2024-03-25', 'Ivan Burgio', 'Plataformas', 1, '<p>La emulación de juegos es un tema candente en la comunidad de jugadores. Los recientes movimientos de Nintendo contra emuladores como Yuzu y Citra han resaltado la delgada línea entre la preservación de videojuegos y posibles consecuencias legales.</p>\r\n\r\n<p>En este contexto, surge Implicit Conversions, una empresa que colabora con Sony para traer más juegos clásicos a PS5 de manera legal y técnica.</p>\r\n\r\n<img data-src=\"https://i.blogs.es/905c8d/god-of-war/1200_800.jpeg\" alt=\"imagen de portada\">\r\n\r\n<h3>Detalles sobre Implicit Conversions</h3>\r\n\r\n<p>El CEO de Implicit Conversions, Robin Lavallée, con un pasado destacado en Ubisoft y títulos como Assassin\'s Creed 3, ha fundado esta compañía con el objetivo de preservar el amor por los videojuegos clásicos.</p>\r\n\r\n<p>La empresa se especializa en la emulación de hardware antiguo en consolas modernas como PS5, Xbox Series y Nintendo Switch. Su motor SYRUP aborda desafíos legales y técnicos para ejecutar juegos retro sin problemas.</p>\r\n\r\n<h3>Tecnología y colaboración con Sony</h3>\r\n\r\n<p>Implicit Conversions realiza ingeniería inversa en la BIOS y desarrolla herramientas para evitar problemas de derechos de autor en los juegos emulados. Esta tecnología ha entusiasmado a la comunidad de jugadores y ha abierto nuevas oportunidades en el mercado.</p>\r\n\r\n<p>La colaboración con Sony incluye llevar juegos de PS2 a PS5, mostrando un enfoque en la preservación y accesibilidad de los clásicos para las futuras generaciones.</p>\r\n\r\n<h3>Visión de futuro</h3>\r\n\r\n<p>Lavallée menciona su deseo de escalar el motor de Implicit Conversions para que otros desarrolladores puedan usarlo. Esta iniciativa se alinea con la visión de preservar juegos olvidados y hacerlos accesibles en consolas modernas, todo de forma legal y conforme a las necesidades de la industria.</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guias`
--

CREATE TABLE `guias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `portada` varchar(255) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `creador` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `activo` int(11) DEFAULT 0,
  `texto` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `portada` varchar(255) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `creador` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `activo` int(11) DEFAULT 0,
  `texto` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `portada`, `tipo`, `fecha`, `creador`, `categoria`, `activo`, `texto`) VALUES
(1, 'Nuevo DLC de Elden Ring: Shadow of the Erdtre', 'https://cdn.cloudflare.steamstatic.com/steam/apps/2778580/ss_c97bcad291f4f45d4be4594f34bd78921d961099.600x338.jpg?t=1710751982', 'Noticia', '2024-03-22', 'Ivan Burgio', 'Videojuegos', 1, '<p>La saga de Elden Ring ha capturado la atención del mundo gamer, consolidándose como un hito en la trayectoria de FromSoftware. Con títulos emblemáticos como \'Dark Souls\', \'Sekiro\' y \'Bloodborne\', Hidetaka Miyazaki ya había demostrado su genialidad en el diseño de juegos desafiantes y envolventes. Sin embargo, con \'Elden Ring\', el estudio superó todas las expectativas.</p>\r\n\r\n<p>Ahora, a punto de celebrar su segundo aniversario, el DLC \'Shadow of the Erdtree\', programado para el 21 de junio de 2024, expandirá aún más este fascinante universo. Los jugadores podrán sumergirse en nuevas historias, desafíos épicos y un mundo lleno de secretos por descubrir. Elden Ring continúa reinventando el género de los juegos de acción y aventura, ofreciendo una experiencia única e inolvidable para todos los amantes del gaming.</p>\r\n \r\n <img data-src=\"https://i.blogs.es/5a5227/captura-de-pantalla-2024-02-21-a-las-16.11.30/840_560.jpeg\" alt=\"imagen de elden ring\">\r\n \r\n <h3>¿Qué incluirá el DLC?</h3>\r\n \r\n <p>El DLC se centrará en el Árbol Áureo y en la Tierra de las Sombras, un lugar misterioso que se menciona en el juego base. Se rumorea que la Tierra de las Sombras alberga los restos de la civilización Numen, lo que podría arrojar luz sobre el pasado de las Lands Between.</p>\r\n\r\n<p>Además de la trama y el escenario nuevos, el DLC incluirá:</p>\r\n\r\n<ul>\r\n  <li><strong>Nuevos jefes:</strong> Se han confirmado varios jefes, entre ellos un imponente dragón gigante y una versión corrompida de Malenia, la Espada de Miquella.</li>\r\n  <li><strong>Nuevas armas y armaduras:</strong> Se exhiben algunas armas y armaduras inéditas en el tráiler, algunas inspiradas en la mitología nórdica y otras más poderosas que las existentes en el juego base.</li>\r\n  <li><strong>Nuevos enemigos:</strong> Desde enemigos nórdicos hasta versiones corruptas de los Crucible Knights, los desafíos serán intensos y variados.</li>\r\n  <li><strong>Nuevos PNJs:</strong> Se han confirmado PNJs que brindarán apoyo y misiones secundarias, incluyendo un guerrero de la Tierra de las Sombras que será clave en la trama.</li>\r\n  <li><strong>Posibles sorpresas:</strong> Prepárate para descubrir nuevos hechizos, habilidades y entornos inexplorados que agregarán capas de profundidad a la experiencia de juego.</li>\r\n</ul>\r\n \r\n <a href=\"https://store.steampowered.com/app/2778580/ELDEN_RING_Shadow_of_the_Erdtree/\">Aqui podras verlo en la pagina de Steam</a>'),
(2, 'Anunciada la Fecha Oficial de Lanzamiento de Dragon\'s Dogma 2 para PS5, Xbox Series X|S y PC en Marzo de 2024', 'https://cdn.cloudflare.steamstatic.com/steam/apps/2778580/ss_c97bcad291f4f45d4be4594f34bd78921d961099.600x338.jpg?t=1710751982', 'Noticia', '2024-03-22', 'Ivan Burgio', 'Videojuegos', 0, '<p>La saga de Elden Ring ha capturado la atención del mundo gamer, consolidándose como un hito en la trayectoria de FromSoftware. Con títulos emblemáticos como \'Dark Souls\', \'Sekiro\' y \'Bloodborne\', Hidetaka Miyazaki ya había demostrado su genialidad en el diseño de juegos desafiantes y envolventes. Sin embargo, con \'Elden Ring\', el estudio superó todas las expectativas.</p>\r\n\r\n<p>Ahora, a punto de celebrar su segundo aniversario, el DLC \'Shadow of the Erdtree\', programado para el 21 de junio de 2024, expandirá aún más este fascinante universo. Los jugadores podrán sumergirse en nuevas historias, desafíos épicos y un mundo lleno de secretos por descubrir. Elden Ring continúa reinventando el género de los juegos de acción y aventura, ofreciendo una experiencia única e inolvidable para todos los amantes del gaming.</p>\r\n \r\n <img src=\"https://i.blogs.es/5a5227/captura-de-pantalla-2024-02-21-a-las-16.11.30/840_560.jpeg\" alt=\"imagen de elden ring\">\r\n \r\n <h3>¿Qué incluirá el DLC?</h3>\r\n \r\n <p>El DLC se centrará en el Árbol Áureo y en la Tierra de las Sombras, un lugar misterioso que se menciona en el juego base. Se rumorea que la Tierra de las Sombras alberga los restos de la civilización Numen, lo que podría arrojar luz sobre el pasado de las Lands Between.</p>\r\n\r\n<p>Además de la trama y el escenario nuevos, el DLC incluirá:</p>\r\n\r\n<ul>\r\n  <li><strong>Nuevos jefes:</strong> Se han confirmado varios jefes, entre ellos un imponente dragón gigante y una versión corrompida de Malenia, la Espada de Miquella.</li>\r\n  <li><strong>Nuevas armas y armaduras:</strong> Se exhiben algunas armas y armaduras inéditas en el tráiler, algunas inspiradas en la mitología nórdica y otras más poderosas que las existentes en el juego base.</li>\r\n  <li><strong>Nuevos enemigos:</strong> Desde enemigos nórdicos hasta versiones corruptas de los Crucible Knights, los desafíos serán intensos y variados.</li>\r\n  <li><strong>Nuevos PNJs:</strong> Se han confirmado PNJs que brindarán apoyo y misiones secundarias, incluyendo un guerrero de la Tierra de las Sombras que será clave en la trama.</li>\r\n  <li><strong>Posibles sorpresas:</strong> Prepárate para descubrir nuevos hechizos, habilidades y entornos inexplorados que agregarán capas de profundidad a la experiencia de juego.</li>\r\n</ul>\r\n \r\n <a href=\"https://store.steampowered.com/app/2778580/ELDEN_RING_Shadow_of_the_Erdtree/\">Aqui podras verlo en la pagina de Steam</a>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `id_publicacion` int(11) DEFAULT NULL,
  `titulo_publicacion` varchar(45) DEFAULT NULL,
  `tipo_publicacion` varchar(45) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `categoria_publicacion` varchar(45) DEFAULT NULL,
  `activo_publicacion` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `todo`
--

INSERT INTO `todo` (`id`, `id_publicacion`, `titulo_publicacion`, `tipo_publicacion`, `fecha_publicacion`, `categoria_publicacion`, `activo_publicacion`) VALUES
(1, 1, 'Nuevo DLC de Elden Ring: Shadow of the Erdtre', 'Noticia', '2024-03-22', 'Videojuegos', 1),
(2, 2, 'Anunciada la Fecha Oficial de Lanzamiento de ', 'Noticia', '2024-03-22', 'Videojuegos', 0),
(3, 1, 'Análisis Detallado de Dragon\'s Dogma 2: Explo', 'Analisis', '2024-03-24', 'Videojuegos', 1),
(4, 1, 'La Colaboración Innovadora entre Sony y Impli', 'Articulo', '2024-03-25', 'Plataformas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(45) NOT NULL,
  `token` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `token`) VALUES
(1, 'admin@ivan-burgio.com', '$2y$10$oBGA57U1X5MkZHSWocxbEePd/aTrkiXkumhZetLbN2NThtrrBaRd6', 'Ivan Burgio', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `guias`
--
ALTER TABLE `guias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `analisis`
--
ALTER TABLE `analisis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `guias`
--
ALTER TABLE `guias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
