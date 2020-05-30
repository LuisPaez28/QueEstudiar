CREATE TABLE Licenciaturas(
    id_L INT PRIMARY KEY NOT NULL,
    nombreL VARCHAR(45) NOT NULL
);

CREATE TABLE Universidades(
    id_U INT PRIMARY KEY NOT NULL,
    nombreU VARCHAR(45) NOT NULL,
    webPage MEDIUMTEXT,
    ubicacion MEDIUMTEXT,
);

 CREATE TABLE Universidades_con_Licenciaturas(
        universidades_id_U INT NOT NULL FOREIGN KEY REFERENCES Universidades(id_U),
        licenciaturas_id_L INT NOT NULL FOREIGN KEY REFERENCES Licenciaturas(id_L)
    );

/*
Aqui agregar las licenciaturas, de ser posible crear primero un archivo EXcel y exportarlo, a ver si queda bien
*/
INSERT INTO Licenciaturas (id_L,nombreL) VALUES 
(1,"Contador Publico"),
(2,"Ingeniería Civil"),
(3,"Administración"),
(4,"Derecho"),
(5,"Economía"),
(6,"Administración de Gestión Publica"),
(7,"Artes Visuale"),
(8,"Administración Financiera"),
(9,"Negocios Internacionales"),
(10,"Enfermeria"),
(11,"Nutrición"),
(12,"Médico Cirujano y Partero"),
(13,"Ingeniería en Minería"),
(14,"Ingeniería Quimica"),
(15,"Ingeniería Mecatrónica"),
(16,"Ingeniería Industrial"),
(17,"Ingeniería en Gestion Empresarial"),
(18,"Ingeniería Electromecánica"),
(19,"Arquitectura"),
(20,"Ingeniería en Sistemas Computacionales"),
(21,"Ingenería en Tecnologías de la Información"),
(22,"Gestión de Negocios y Proyectos"),
(23,"Ingenieria en Mantenimiento Industrial"),
(24,"Ingeniería en Sistemas Productivos"),
(25,"Psicologiía"),
(26,"Ciencia Política"),
(27,"Edificación y Administración de Obras"),
(28,"Comunicación y Periodismo"),
(29,"Ingeniería en Logísitica"),
(30,"Ciencia Forense"),
(31,"Agronegocios"),
(32,"Pedagogía"),
(33,"Trabajo Social"),
(34,"Negocios y Mercadotecnia"),
(35,"Diseño Gráfico"),
(36,"Derecho Burocratico"),
(37,"Educación Primaria"),
(38,"Educación Preescolar"),
(39,"Enseñanza y Aprendisaje (especialidad de español)"),
(40,"Criminologia"),
(41,"Intervencion educativa")
;

INSERT INTO Universidades(id_U,nombreU,webPage,ubicacion) VALUES
(1,"UACH","https://www.facebook.com/pages/category/Interest/Centro-Universitario-Parral-UACH-159186401414484/"),
(2,"ITP","itparral.edu.mx"),
(3,"UTP","utparral.edu.mx"),
(4,"IISCH","iisch.com"),
(5,"CCU","http://www.ccu.mx/campus-perfil.php?cGQ9NzE0NA","Valle de allende"),
(6,"INESAP","https://inesap-fstse-parral.negocio.site/?utm_source=gmb&utm_medium=referral"),
(7,"Normal Experimental Miguel Hidalgo","https://escuela-normal-experimental-miguel-hidalgo.webnode.es"),
(8,"Normal Superior Jose Medrano","http://www.ensech.edu.mx/unidad-parral.html"),
(9,"Universidad España","https://www.facebook.com/UniversidadUNESParral/"),
(10,"UPN","https://www.upnech.edu.mx/category/parral/")
;



/*
La consulta para buscar en ambos seria algo asi:
SELECT Universidades.nombreU, Licenciaturas.nombreL 
FROM queestudiar 
JOIN Universidades_con_Licenciaturas ON Universidades_con_Licenciaturas.universidades_id_U = Universidades.id_U
JOIN Licenciaturas ON Licenciaturas.id_L = Universidades_con_Licenciaturas.licenciaturas_id_L
WHERE "Aqui va la busqueda"
*/

