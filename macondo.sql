CREATE TABLE usuario
(
  idUsuario INT NOT NULL AUTO_INCREMENT,
  primerNombre VARCHAR(20) NOT NULL,
  segundoNombre VARCHAR(20),
  primerApellido VARCHAR(20) NOT NULL,
  segundoApellido VARCHAR(20),
  seudonimo VARCHAR(20) NOT NULL,
  rol VARCHAR(10) NOT NULL,
  foto VARCHAR(100),
  estado INT NOT NULL,
  correo VARCHAR(50) NOT NULL,
  contrasena VARCHAR(30) NOT NULL,
  token VARCHAR(4),
  PRIMARY KEY (idUsuario),
  UNIQUE (correo),
  UNIQUE (seudonimo)
);

CREATE TABLE publicacion
(
  tipo VARCHAR(20) NOT NULL,
  idPublicacion INT NOT NULL AUTO_INCREMENT,
  titulo VARCHAR(50) NOT NULL,
  fecha DATE NOT NULL,
  contenido VARCHAR(1000) NOT NULL,
  estado INT NOT NULL,
  hora TIME NOT NULL,
  idUsuario INT NOT NULL,
  PRIMARY KEY (idPublicacion),
  FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario)
);

CREATE TABLE comentario
(
  idComentario INT NOT NULL AUTO_INCREMENT,
  contenido VARCHAR(200) NOT NULL,
  fecha DATE NOT NULL,
  hora TIME NOT NULL,
  estado INT NOT NULL,
  idPublicacion INT NOT NULL,
  idUsuario INT NOT NULL,
  PRIMARY KEY (idComentario),
  FOREIGN KEY (idPublicacion) REFERENCES publicacion(idPublicacion),
  FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario)
);

CREATE TABLE reaccionComentario
(
  idReacciónComentario INT NOT NULL AUTO_INCREMENT,
  tipo VARCHAR(20) NOT NULL,
  idComentario INT NOT NULL,
  idUsuario INT NOT NULL,
  PRIMARY KEY (idReacciónComentario),
  FOREIGN KEY (idComentario) REFERENCES comentario(idComentario),
  FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario)
);

CREATE TABLE reaccionPublicacion
(
  idReacciónPublicación INT NOT NULL AUTO_INCREMENT,
  tipo VARCHAR(20) NOT NULL,
  idPublicacion INT NOT NULL,
  idUsuario INT NOT NULL,
  PRIMARY KEY (idReacciónPublicación),
  FOREIGN KEY (idPublicacion) REFERENCES publicacion(idPublicacion),
  FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario)
);

Insert into usuario (primernombre, primerapellido, seudonimo, rol, foto, estado, correo, contrasena) values ('juancho', 'polo', 'juancho1', 'user', NULL, 1, 'juancho@gmail.com', '12345');