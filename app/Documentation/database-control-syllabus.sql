
create table horario
(
    codigo_horario char(6) not null,
    codigo_docente char(6) not null,
    codigo_dia char(6) not null,
    codigo_curso char(6) not null,
    codigo_semestre char(6) not null,
    codigo_aula char(6) not null,
    codigo_gh char(6) not null
)

create table horario
(
    codigo_horario char(6) not null,
    codigo_docente char(6) not null,
    codigo_curso varchar(6) not null,
    codigo_semestre char(6) not null,
    codigo_aula char(4) not null,
    codigo_gh char(3) not null,
    hora_inicio datetime not null,
    hora_fin datetime not null
)


ALTER TABLE horario
ADD FOREIGN KEY fk_docente_horario(`codigo_docente`)
REFERENCES docente_curso_semestre(codigo_docente)
ON DELETE NO ACTION
ON UPDATE CASCADE;

ALTER TABLE horario
ADD FOREIGN KEY fk_curso_horario(`codigo_curso`)
REFERENCES docente_curso_semestre(codigo_curso)
ON DELETE NO ACTION
ON UPDATE CASCADE;

ALTER TABLE horario
ADD FOREIGN KEY fk_semestre_horario(`codigo_semestre`)
REFERENCES docente_curso_semestre(codigo_semestre)
ON DELETE NO ACTION
ON UPDATE CASCADE;

ALTER TABLE horario
ADD FOREIGN KEY fk_aula_horario(`codigo_aula`)
REFERENCES docente_curso_semestre(codigo_aula)
ON DELETE NO ACTION
ON UPDATE CASCADE;

ALTER TABLE horario
ADD FOREIGN KEY fk_gh_horario(`codigo_gh`)
REFERENCES docente_curso_semestre(codigo_gh)
ON DELETE NO ACTION
ON UPDATE CASCADE;





-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2017 a las 19:26:44
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_syllabus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente_curso_semestre`
--

CREATE TABLE `docente_curso_semestre` (
  `codigo_semestre` char(4) NOT NULL,
  `codigo_escuela` char(3) NOT NULL,
  `codigo_docente` char(6) NOT NULL,
  `codigo_curso` varchar(6) NOT NULL,
  `codigo_gh` char(3) NOT NULL
);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docente_curso_semestre`
--
ALTER TABLE `docente_curso_semestre`
  ADD KEY `fk_escuela` (`codigo_escuela`),
  ADD KEY `fk_docente` (`codigo_docente`),
  ADD KEY `fk_gh` (`codigo_gh`),
  ADD KEY `fk_curso` (`codigo_curso`),
  ADD KEY `fk_semestre` (`codigo_semestre`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `docente_curso_semestre`
--
ALTER TABLE `docente_curso_semestre`
  ADD CONSTRAINT `fk_curso` FOREIGN KEY (`codigo_curso`) REFERENCES `cursos` (`codigo_curso`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_docente` FOREIGN KEY (`codigo_docente`) REFERENCES `docentes` (`codigo_docente`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_escuela` FOREIGN KEY (`codigo_escuela`) REFERENCES `escuela` (`codigo_escuela`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_gh` FOREIGN KEY (`codigo_gh`) REFERENCES `grupo_horario` (`codigo_gh`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_semestre` FOREIGN KEY (`codigo_semestre`) REFERENCES `semestre` (`codigo_semestre`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;






-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2017 a las 19:28:22
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `control_syllabus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `codigo_horario` char(6) NOT NULL,
  `codigo_docente` char(6) NOT NULL,
  `codigo_curso` varchar(6) NOT NULL,
  `codigo_semestre` char(6) NOT NULL,
  `codigo_aula` char(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_gh` char(3) NOT NULL,
  `hora_inicio` datetime NOT NULL,
  `hora_fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD KEY `fk_docente_horario` (`codigo_docente`),
  ADD KEY `fk_semestre_horario` (`codigo_semestre`),
  ADD KEY `fk_gh_horario` (`codigo_gh`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `fk_docente_horario` FOREIGN KEY (`codigo_docente`) REFERENCES `docente_curso_semestre` (`codigo_docente`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_gh_horario` FOREIGN KEY (`codigo_gh`) REFERENCES `docente_curso_semestre` (`codigo_gh`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_semestre_horario` FOREIGN KEY (`codigo_semestre`) REFERENCES `docente_curso_semestre` (`codigo_semestre`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

















CREATE TABLE `programacion_horaria` (
  `codigo_horario` char(6) NOT NULL,
  `codigo_docente` char(6) NOT NULL,
  `codigo_curso` varchar(6) NOT NULL,
  `codigo_semestre` char(6) NOT NULL,
  `codigo_escuela` char(3) NOT NULL,
  `codigo_gh` char(3) NOT NULL,
  `hora_inicio` datetime NOT NULL,
  `hora_fin` datetime NOT NULL
); 
-- fk_curso_mat_cursos
-- fk_matricula_mat_cursos
-- fk_alumno_mat_cursos
-- fk_semestre_mat_cursos

ALTER TABLE `programacion_horaria`
  ADD KEY `fk_docente_horario` (`codigo_docente`),
  ADD KEY `fk_semestre_horario` (`codigo_semestre`),
  ADD KEY `fk_curso_horario` (`codigo_curso`),
  ADD KEY `fk_escuela_horario` (`codigo_escuela`),
  ADD KEY `fk_gh_horario` (`codigo_gh`);

ALTER TABLE `programacion_horaria`
  ADD CONSTRAINT `fk_curso_horario` FOREIGN KEY (`codigo_curso`) REFERENCES `cursos` (`codigo_curso`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_docente_horario` FOREIGN KEY (`codigo_docente`) REFERENCES `docente_curso_semestre` (`codigo_docente`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_gh_horario` FOREIGN KEY (`codigo_gh`) REFERENCES `docente_curso_semestre` (`codigo_gh`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_escuela_horario` FOREIGN KEY (`codigo_escuela`) REFERENCES `escuela` (`codigo_escuela`) ON DELETE NO ACTION ON UPDATE CASCADE,  
  ADD CONSTRAINT `fk_semestre_horario` FOREIGN KEY (`codigo_semestre`) REFERENCES `docente_curso_semestre` (`codigo_semestre`) ON DELETE NO ACTION ON UPDATE CASCADE;




  --Tipo de clase
  CREATE TABLE `control_syllabus`.`tipo_clase` ( `codigo_tipo_clase` CHAR(1) NOT NULL , `descripcion_tipo_clase` VARCHAR(6) NOT NULL , PRIMARY KEY (`codigo_tipo_clase`(1))) ENGINE = InnoDB;

  --Dia
  CREATE TABLE `control_syllabus`.`dia` ( `codigo_dia` CHAR(2) NOT NULL , `nombre_dia` VARCHAR(50) NOT NULL ) ENGINE = InnoDB;

  --Alumnos
  CREATE TABLE `control_syllabus`.`alumno` ( `codigo_alumno` INT(10) NOT NULL , `codigo_escuela` CHAR(3) NOT NULL , `dni_alumno` INT(8) NOT NULL , `nombres_alumno` VARCHAR(200) NOT NULL , `apellidos_alumno` VARCHAR(200) NOT NULL , `fecha_ingreso` DATE NOT NULL ) ENGINE = InnoDB;

  --Matricula
  CREATE TABLE `control_syllabus`.`matricula` ( `codigo_matricula` INT(8) NOT NULL AUTO_INCREMENT , `codigo_alumno` INT(10) NOT NULL , `codigo_semestre` CHAR(5) NOT NULL , `fecha_matricula` DATETIME NOT NULL , `creditos_matricula` INT(2) NOT NULL , PRIMARY KEY (`codigo_matricula`)) ENGINE = InnoDB;
  --Foreign Keys
  ALTER TABLE `matricula` ADD FOREIGN KEY (`codigo_alumno`) REFERENCES `control_syllabus`.`alumno`(`codigo_alumno`) ON DELETE NO ACTION ON UPDATE CASCADE; ALTER TABLE `matricula` ADD FOREIGN KEY (`codigo_semestre`) REFERENCES `control_syllabus`.`semestre`(`codigo_semestre`) ON DELETE NO ACTION ON UPDATE CASCADE;