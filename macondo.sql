CREATE TABLE usuario
(
  idUsuario INT NOT NULL,
  primerNombre VARCHAR(20) NOT NULL,
  segundoNombre VARCHAR(20),
  primerApellido VARCHAR(20) NOT NULL,
  segundoApellido VARCHAR(20),
  seudonimo VARCHAR(20),
  rol VARCHAR(10) NOT NULL,
  foto VARCHAR(100) NOT NULL,
  estado INT NOT NULL,
  correo VARCHAR(50) NOT NULL,
  contrasena VARCHAR(30) NOT NULL,
  PRIMARY KEY (idUsuario),
  UNIQUE (correo)
);

CREATE TABLE publicacion
(
  tipo VARCHAR(20) NOT NULL,
  idPublicacion INT NOT NULL,
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
  idComentario INT NOT NULL,
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
  idReacciónComentario INT NOT NULL,
  tipo VARCHAR(20) NOT NULL,
  idComentario INT NOT NULL,
  idUsuario INT NOT NULL,
  PRIMARY KEY (idReacciónComentario),
  FOREIGN KEY (idComentario) REFERENCES comentario(idComentario),
  FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario)
);

CREATE TABLE genero
(
  idGenero INT NOT NULL,
  tipo VARCHAR(20) NOT NULL,
  PRIMARY KEY (idGenero)
);

CREATE TABLE reaccionPublicacion
(
  idReacciónPublicación INT NOT NULL,
  tipo VARCHAR(20) NOT NULL,
  idPublicacion INT NOT NULL,
  idUsuario INT NOT NULL,
  PRIMARY KEY (idReacciónPublicación),
  FOREIGN KEY (idPublicacion) REFERENCES publicacion(idPublicacion),
  FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario)
);

CREATE TABLE generoPublicacion
(
  idPublicacion INT NOT NULL,
  idGenero INT NOT NULL,
  PRIMARY KEY (idPublicacion, idGenero),
  FOREIGN KEY (idPublicacion) REFERENCES publicacion(idPublicacion),
  FOREIGN KEY (idGenero) REFERENCES genero(idGenero)
);

CREATE TABLE preferenciaUsuario
(
  idGenero INT NOT NULL,
  idUsuario INT NOT NULL,
  PRIMARY KEY (idGenero, idUsuario),
  FOREIGN KEY (idGenero) REFERENCES genero(idGenero),
  FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario)
);

Insert into usuario (idusuario, primernombre, primerapellido, rol, foto, estado, correo, contrasena) values (1, 'juancho', 'polo', 1, 'url', 1, 'juancho@gmail.com', '12345');