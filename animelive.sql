-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2022 a las 05:18:23
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `animelive`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anime`
--

CREATE TABLE `anime` (
  `nombre` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `anime`
--

INSERT INTO `anime` (`nombre`) VALUES
('Aharen san'),
('Akame ga kill'),
('Akudama Drive'),
('Amagi Brilliant Park Special'),
('Amphibian'),
('Another'),
('Ao No Exorcist'),
('Aproximación final'),
('Arte'),
('beastar'),
('Big hero Six'),
('Blends S'),
('Boku dake ga Inai Machi'),
('Boku no Kanojo ga Majimesugiru Sho-bitch na Ken'),
('Bokutachi no Remake'),
('Bokutachi wa Benkyou ga Dekinai'),
('Busou Shoujo Machiavellianism'),
('Charlotte'),
('Chuunibyou demo Koi ga Shitai!'),
('Como entrenar a tu dragon.'),
('Conan la primera serie'),
('Conan, el detective'),
('Danmachi'),
('Danny Phantom'),
('Date A Live'),
('Death March kara Hajimaru Isekai Kyousoukyoku'),
('Deatte 5-byou de Battle'),
('Demi chan wa kataritai'),
('DNAngel'),
('Domesitc na Kanojo'),
('Dr stone'),
('Dr stone Stone Wars'),
('Eighty Six-86'),
('El Mundo de Narue'),
('El Zorro: Serie Animada'),
('Encanto'),
('Ero manga sensei'),
('Eyeshield 21'),
('FANTASY BISHOUJO JUNIKU OJISAN TO'),
('Fire Force'),
('Full metal Archemis brother Hood'),
('Gamers!'),
('Gate: Jieitai Kanochi nite, Kaku Tatakaeri'),
('Gekkan shoujo nozaki kun'),
('Generador Rex'),
('Genjitsu Shugi Yuusha no Oukoku Saikenki'),
('Girl Bravo'),
('Gleipnir'),
('Glitch Techs'),
('Godzilla Punto Singular'),
('Gotoubun no hanayame'),
('Gundam 79'),
('Hai to Gensou no Grimgar'),
('Hajimete no Gal'),
('Hataraku Maou-sama!'),
('Hayikyuu'),
('Hentai Ouji to Warawanai Neko'),
('Hige wo Soru. Soshite Joshikousei wo Hirou'),
('Hitoribocchi no Seikatsu'),
('Honzuki no gekokujou'),
('Hora de aventura'),
('Horimiya'),
('I\'m standing on 100.000.000 lifes'),
('Ijiranaide, Nagatoro-san'),
('Ijou Seibutsu jenbunroku'),
('Initial D'),
('Invincible'),
('Isekai Maou to Shoukan Shoujo no Dorei Majutsu'),
('Isekai wa smartphone'),
('Jaku-Chara Tomozaki-kun'),
('Jibaku Shounen Hanako-kun'),
('Kaguya-sama Love is war'),
('Kaifuku Jutsushi no Yarinaoshi'),
('Kanojo mo Kanojo'),
('Kanojo, Okarishimasu'),
('Kawaikereba hentai demo suki ni natte kuremasu ka?'),
('Kenishi el disipulo más fuerte'),
('Kenja no Mago'),
('Kobayashi-san Chi no Maid Dragon'),
('Komi-san wa, Komyushō Desu'),
('kono subarashii sekai ni shukufuku wo'),
('Kono Yo no Hate de Koi wo Utau Shoujo YU-NO'),
('Kotoura-San'),
('Koutetsujou no Kabaneri'),
('Kumo Desu ga, Nani ka?'),
('Kyuukyoku Shinka shita Full Dive RPG ga Genjitsu yori m'),
('Las Aventuras de Saint Tail'),
('Let\'s Play Phoenix Wright Justis For All'),
('Los últimos frikis del mundo 3'),
('Magic kaito 1412'),
('Magikano'),
('Mahoutsukai Reimeiki'),
('Masamue kun\'s revege'),
('Mashita iruma kun'),
('Meteoro: La Nueva Generación'),
('Mieru ko-chan'),
('Mob psycho 100'),
('Moyashimon'),
('Moyashimon Returns'),
('Muremasen Seton Gakuen'),
('Murenase! Seton Gakuen'),
('Mushoku Tensei: Isekai Ittara Honki Dasu'),
('Nande koko ni Sensei ga!?'),
('Nisekoi'),
('Noragami'),
('Noragami Aragoto'),
('Okusama ga Seitokaichou!'),
('Onyx Equinox'),
('Ore No Imouto Ga Konnani Kawaii Wake Ga Nai'),
('Osananajimi ga Zettai ni Makenai Love Comedy'),
('Oshiete galko-chan'),
('Otome Game no Hametsu Flag shika Nai Akuyaku Reijou ni '),
('Owari no seraph'),
('Power Rangers SPD'),
('PRUEBA EDITADA'),
('qw'),
('Randy Cunningham: Ninja Total'),
('Re:Zero kara Hajimeru Isekai Seikatsu'),
('ReLife'),
('Renai Boukun'),
('Rokka no Yuusha'),
('Rokudenashi majutsu koushi to akashic records'),
('Ryuuou no oshigoto!'),
('Scissor Seven'),
('Seirei Gensouki'),
('Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Mina'),
('Seishun Buta Yarou wa Yumemiru Shoujo no Yume wo Minai'),
('Sekai Saikou no Ansatsusha, Isekai Kizoku ni Tensei sur'),
('Sentouin, Hakenshimasu!'),
('She-ra y las princesas del poder'),
('Shijou Saikyou no Daimaou, Murabito A ni Tensei suru'),
('Shimoneta'),
('Shinchou Yuusha: Kono Yuusha ga Ore Tueee Kuse ni Shinc'),
('Shinka no Mi: Shiranai Uchi ni Kachigumi Jinsei'),
('Sono bisque doll wa koi suru'),
('Sounan Desu ka?'),
('Strike the bood'),
('Tantei wa Mou, Shindeiru'),
('Tate no yuusha'),
('The owl house'),
('Thundercats 2011'),
('Tokyo Revengers'),
('Tonikaku kawaii'),
('Tsugumomo'),
('Tsuki ga Michibiku Isekai Douchuu '),
('Uzaki san Asobitai'),
('Watashi, Nouryoku wa Heikinchi de tte Itta yo ne!'),
('Yamada-kun y las siete brujas'),
('Yatogame-chan Kansatsu Nikki'),
('Yofukashi no uta'),
('Youjo senki'),
('Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `nombre` varchar(70) NOT NULL,
  `temporada` int(11) NOT NULL,
  `capitulo` int(11) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(25) NOT NULL,
  `correo` varchar(90) NOT NULL,
  `contraseña` varchar(100) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`,`correo`, `contraseña`, `foto`) VALUES
('zg', 'zg@zg.com', '123', 'X');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_sigue_anime`
--

CREATE TABLE `usuario_sigue_anime` (
  `usuario` varchar(25) NOT NULL,
  `nombre` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_sigue_anime`
--

INSERT INTO `usuario_sigue_anime` (`usuario`, `nombre`) VALUES
('zg', 'Aharen san'),
('zg', 'Akame ga kill'),
('zg', 'Akudama Drive'),
('zg', 'Amagi Brilliant Park Special'),
('zg', 'Amphibian'),
('zg', 'Another'),
('zg', 'Ao No Exorcist'),
('zg', 'Aproximación final'),
('zg', 'Arte'),
('zg', 'beastar'),
('zg', 'Big hero Six'),
('zg', 'Blends S'),
('zg', 'Boku dake ga Inai Machi'),
('zg', 'Boku no Kanojo ga Majimesugiru Sho-bitch na Ken'),
('zg', 'Bokutachi no Remake'),
('zg', 'Bokutachi wa Benkyou ga Dekinai'),
('zg', 'Busou Shoujo Machiavellianism'),
('zg', 'Charlotte'),
('zg', 'Chuunibyou demo Koi ga Shitai!'),
('zg', 'Como entrenar a tu dragon.'),
('zg', 'Conan la primera serie'),
('zg', 'Conan, el detective'),
('zg', 'Danmachi'),
('zg', 'Danny Phantom'),
('zg', 'Date A Live'),
('zg', 'Death March kara Hajimaru Isekai Kyousoukyoku'),
('zg', 'Deatte 5-byou de Battle'),
('zg', 'Demi chan wa kataritai'),
('zg', 'DNAngel'),
('zg', 'Domesitc na Kanojo'),
('zg', 'Dr stone'),
('zg', 'Dr stone Stone Wars'),
('zg', 'Eighty Six-86'),
('zg', 'El Mundo de Narue'),
('zg', 'El Zorro: Serie Animada'),
('zg', 'Encanto'),
('zg', 'Ero manga sensei'),
('zg', 'Eyeshield 21'),
('zg', 'FANTASY BISHOUJO JUNIKU OJISAN TO'),
('zg', 'Fire Force'),
('zg', 'Full metal Archemis brother Hood'),
('zg', 'Gamers!'),
('zg', 'Gate: Jieitai Kanochi nite, Kaku Tatakaeri'),
('zg', 'Gekkan shoujo nozaki kun'),
('zg', 'Generador Rex'),
('zg', 'Genjitsu Shugi Yuusha no Oukoku Saikenki'),
('zg', 'Girl Bravo'),
('zg', 'Gleipnir'),
('zg', 'Glitch Techs'),
('zg', 'Godzilla Punto Singular'),
('zg', 'Gotoubun no hanayame'),
('zg', 'Gundam 79'),
('zg', 'Hai to Gensou no Grimgar'),
('zg', 'Hajimete no Gal'),
('zg', 'Hataraku Maou-sama!'),
('zg', 'Hayikyuu'),
('zg', 'Hentai Ouji to Warawanai Neko'),
('zg', 'Hige wo Soru. Soshite Joshikousei wo Hirou'),
('zg', 'Hitoribocchi no Seikatsu'),
('zg', 'Honzuki no gekokujou'),
('zg', 'Hora de aventura'),
('zg', 'Horimiya'),
('zg', 'I\'m standing on 100.000.000 lifes'),
('zg', 'Ijiranaide, Nagatoro-san'),
('zg', 'Ijou Seibutsu jenbunroku'),
('zg', 'Initial D'),
('zg', 'Invincible'),
('zg', 'Isekai Maou to Shoukan Shoujo no Dorei Majutsu'),
('zg', 'Isekai wa smartphone'),
('zg', 'Jaku-Chara Tomozaki-kun'),
('zg', 'Jibaku Shounen Hanako-kun'),
('zg', 'Kaguya-sama Love is war'),
('zg', 'Kaifuku Jutsushi no Yarinaoshi'),
('zg', 'Kanojo mo Kanojo'),
('zg', 'Kanojo, Okarishimasu'),
('zg', 'Kawaikereba hentai demo suki ni natte kuremasu ka?'),
('zg', 'Kenishi el disipulo más fuerte'),
('zg', 'Kenja no Mago'),
('zg', 'Kobayashi-san Chi no Maid Dragon'),
('zg', 'Komi-san wa, Komyushō Desu'),
('zg', 'kono subarashii sekai ni shukufuku wo'),
('zg', 'Kono Yo no Hate de Koi wo Utau Shoujo YU-NO'),
('zg', 'Kotoura-San'),
('zg', 'Koutetsujou no Kabaneri'),
('zg', 'Kumo Desu ga, Nani ka?'),
('zg', 'Kyuukyoku Shinka shita Full Dive RPG ga Genjitsu yori m'),
('zg', 'Las Aventuras de Saint Tail'),
('zg', 'Let\'s Play Phoenix Wright Justis For All'),
('zg', 'Los últimos frikis del mundo 3'),
('zg', 'Magic kaito 1412'),
('zg', 'Magikano'),
('zg', 'Mahoutsukai Reimeiki'),
('zg', 'Masamue kun\'s revege'),
('zg', 'Mashita iruma kun'),
('zg', 'Meteoro: La Nueva Generación'),
('zg', 'Mieru ko-chan'),
('zg', 'Mob psycho 100'),
('zg', 'Moyashimon'),
('zg', 'Moyashimon Returns'),
('zg', 'Muremasen Seton Gakuen'),
('zg', 'Murenase! Seton Gakuen'),
('zg', 'Mushoku Tensei: Isekai Ittara Honki Dasu'),
('zg', 'Nande koko ni Sensei ga!?'),
('zg', 'Nisekoi'),
('zg', 'Noragami'),
('zg', 'Noragami Aragoto'),
('zg', 'Okusama ga Seitokaichou!'),
('zg', 'Onyx Equinox'),
('zg', 'Ore No Imouto Ga Konnani Kawaii Wake Ga Nai'),
('zg', 'Osananajimi ga Zettai ni Makenai Love Comedy'),
('zg', 'Oshiete galko-chan'),
('zg', 'Otome Game no Hametsu Flag shika Nai Akuyaku Reijou ni '),
('zg', 'Owari no seraph'),
('zg', 'Power Rangers SPD'),
('zg', 'PRUEBA EDITADA'),
('zg', 'qw'),
('zg', 'Randy Cunningham: Ninja Total'),
('zg', 'Re:Zero kara Hajimeru Isekai Seikatsu'),
('zg', 'ReLife'),
('zg', 'Renai Boukun'),
('zg', 'Rokka no Yuusha'),
('zg', 'Rokudenashi majutsu koushi to akashic records'),
('zg', 'Ryuuou no oshigoto!'),
('zg', 'Scissor Seven'),
('zg', 'Seirei Gensouki'),
('zg', 'Seishun Buta Yarou wa Bunny Girl Senpai no Yume wo Mina'),
('zg', 'Seishun Buta Yarou wa Yumemiru Shoujo no Yume wo Minai'),
('zg', 'Sekai Saikou no Ansatsusha, Isekai Kizoku ni Tensei sur'),
('zg', 'Sentouin, Hakenshimasu!'),
('zg', 'She-ra y las princesas del poder'),
('zg', 'Shijou Saikyou no Daimaou, Murabito A ni Tensei suru'),
('zg', 'Shimoneta'),
('zg', 'Shinchou Yuusha: Kono Yuusha ga Ore Tueee Kuse ni Shinc'),
('zg', 'Shinka no Mi: Shiranai Uchi ni Kachigumi Jinsei'),
('zg', 'Sono bisque doll wa koi suru'),
('zg', 'Sounan Desu ka?'),
('zg', 'Strike the bood'),
('zg', 'Tantei wa Mou, Shindeiru'),
('zg', 'Tate no yuusha'),
('zg', 'The owl house'),
('zg', 'Thundercats 2011'),
('zg', 'Tokyo Revengers'),
('zg', 'Tonikaku kawaii'),
('zg', 'Tsugumomo'),
('zg', 'Tsuki ga Michibiku Isekai Douchuu '),
('zg', 'Uzaki san Asobitai'),
('zg', 'Watashi, Nouryoku wa Heikinchi de tte Itta yo ne!'),
('zg', 'Yamada-kun y las siete brujas'),
('zg', 'Yatogame-chan Kansatsu Nikki'),
('zg', 'Yofukashi no uta'),
('zg', 'Youjo senki'),
('zg', 'Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`nombre`,`temporada`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `usuario_sigue_anime`
--
ALTER TABLE `usuario_sigue_anime`
  ADD PRIMARY KEY (`usuario`,`nombre`),
  ADD KEY `fk_Nombre_USA` (`nombre`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estados`
--
ALTER TABLE `estados`
  ADD CONSTRAINT `fk_Nombre_Estados` FOREIGN KEY (`nombre`) REFERENCES `anime` (`nombre`);

--
-- Filtros para la tabla `usuario_sigue_anime`
--
ALTER TABLE `usuario_sigue_anime`
  ADD CONSTRAINT `fk_Usuario_USA` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`nombre`),
  ADD CONSTRAINT `fk_Nombre_USA` FOREIGN KEY (`nombre`) REFERENCES `anime` (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
