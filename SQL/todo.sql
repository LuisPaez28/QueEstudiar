CREATE TABLE UACH(
  id_L INT PRIMARY KEY NOT NULL,
  nombre TEXT NOT NULL
);
CREATE TABLE ITP(
  id_L INT PRIMARY KEY NOT NULL,
  nombre TEXT NOT NULL
);
CREATE TABLE UTP(
  id_L INT PRIMARY KEY NOT NULL,
  nombre TEXT NOT NULL
);
CREATE TABLE IISCH(
  id_L INT PRIMARY KEY NOT NULL,
  nombre TEXT NOT NULL
);
CREATE TABLE CCU(
  id_L INT PRIMARY KEY NOT NULL,
  nombre TEXT NOT NULL
);
CREATE TABLE INESAP(
  id_L INT PRIMARY KEY NOT NULL,
  nombre TEXT NOT NULL
);
CREATE TABLE UNES(
  id_L INT PRIMARY KEY NOT NULL,
  nombre TEXT NOT NULL
);
CREATE TABLE UPN(
  id_L INT PRIMARY KEY NOT NULL,
  nombre TEXT NOT NULL
);
CREATE TABLE NormalExperimentalMiguielHidalgo(
  id_L INT PRIMARY KEY NOT NULL,
  nombre TEXT NOT NULL
);
CREATE TABLE NormalSuperiorJoseMedrano(
  id_L INT PRIMARY KEY NOT NULL,
  nombre TEXT NOT NULL
);

INSERT INTO UACH(id_L,nombre) VALUES 
(1,"Contador Publico"),
(2,"Ingeniería Civil"),
(3,"Administración"),
(4,"Derecho"),
(5,"Economía"),
(6,"Administración y Gestión Publica"),
(7,"Artes Visuales"),
(8,"Administración Financiera"),
(9,"Negocios Internacionales"),
(10,"Enferemeria"),
(11,"Nutrición"),
(12,"Médico Cirujano y Partero");

INSERT INTO ITP(id_L,nombre) VALUES
(13,"Ingeniería en Minería"),
(14,"Administración"),
(15,"Ingeniería Quimica"),
(16,"Ingeniería Mecatrónica"),
(17,"Ingeniería Industrial"),
(18,"Ingeniería Electromecánica"),
(1,"Contador Público"),
(19,"Arquitectura"),
(20,"Ingeniería en Sistemas Computacionales");

INSERT INTO UTP(id_L,nombre) VALUES
(21,"Ingenieria en Tecnologías de la Información"),
(22,"Gestíon de Negocios y Proyectos"),
(23,"Ingeniería en Mantenimiento Industrial"),
(13,"Ingeniería en Minería"),
(24,"Ingeniería en Sistemas Productivos");

INSERT INTO IISCH (id_L,nombre) VALUES
(25,"Psicología"),
(26,"Ciencia Política");

INSERT INTO CCU(id_L,nombre) VALUES
(21,"Ingeniería en Tecnologías de la Información"),
(27,"Edificación y Administración de Obras"),
(28,"Comunicación y Periodismo"),
(17,"Ingeniería en Gestión Empresarial"),
(29,"Ingeniería en Logística"),
(30,"Ciencia Forense"),
(31,"Agronegocios"),
(3,"Administración"),
(19,"Arquitectura"),
(32,"Pedagogía"),
(25,"Psicología"),
(33,"Trabajo Social"),
(34,"Negocios y Mercadotecnia"),
(4,"Derecho"),
(35,"Diseño Gráfico");

INSERT INTO INESAP(id_L,nombre) VALUES
(36,"Derecho Burocratico");

INSERT INTO NormalExperimentalMiguielHidalgo(id_L,nombre) VALUES
(37,"Educación Primaria"),
(38,"Educación Preescolar");

INSERT INTO NormalSuperiorJoseMedrano(id_L,nombre) VALUES
(39,"Enseñanza y Aprendizaje con especialidad en Español");

INSERT INTO UPN(id_L,nombre) VALUES
(41,"Intervención Educativa"),
(32,"Pedagogía");