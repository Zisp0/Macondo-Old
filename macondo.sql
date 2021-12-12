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

CREATE TABLE genero
(
  idGenero INT NOT NULL AUTO_INCREMENT,
  tipo VARCHAR(20) NOT NULL,
  PRIMARY KEY (idGenero)
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

Insert into usuario (primernombre, primerapellido, seudonimo, rol, foto, estado, correo, contrasena) values ('juancho', 'polo', 'juancho1', 'user', NULL, 1, 'juancho@gmail.com', '12345');
Insert into genero (tipo) values ('Terror');
Insert into genero (tipo) values ('Romance');
Insert into genero (tipo) values ('Ciencia Ficción');
Insert into genero (tipo) values ('Comedia');
Insert into genero (tipo) values ('Documental');
Insert into genero (tipo) values ('Científicos');
Insert into genero (tipo) values ('Tecnología');
Insert into genero (tipo) values ('Drama');
Insert into genero (tipo) values ('Bélico');
Insert into genero (tipo) values ('Aventura');
Insert into genero (tipo) values ('Mágico');
Insert into genero (tipo) values ('Crímenes');