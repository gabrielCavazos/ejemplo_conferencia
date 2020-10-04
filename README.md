# ejemplo_conferencia
Proyecto ejemplo para conferencia


# Usar

Poner dentro de tu carpeta HTDOCS de apache

El archivo db_data.example.php  renombrarlo a -> db_data.php y poner los datos para tu coneccion de db

Crear una tabla de usuarios y remplazar los nombres de tu tabla en el codigo, o usar el siguiente create en mysql


CREATE TABLE `usuarioAdmin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `sucId` int NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `permisoEditarCatalogos` smallint DEFAULT NULL,
  `permisoReportes` smallint DEFAULT NULL,
  `permisoUsuarios` smallint DEFAULT NULL,
  `status` smallint DEFAULT NULL,
  `fechaCreacion` datetime DEFAULT NULL,
  `fechaEdicion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`sucId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8
