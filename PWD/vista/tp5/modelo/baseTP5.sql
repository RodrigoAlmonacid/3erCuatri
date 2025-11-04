Base de datos para el TP 5: nombre= 'baseTP5'

CREATE TABLE usuario(
    id_usuario bigint(20) AUTO_INCREMENT PRIMARY KEY,
    nom_usuario varchar(50) NOT NULL,
    pass_usuario varchar(255) NOT NULL,
    email_usuario varchar(50),
    desHabilitado_usuario timestamp
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE rol(
    id_rol bigint(20) AUTO_INCREMENT PRIMARY KEY,
    descripcion_rol varchar(50)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE usuariorol(
    id_usuario bigint(20),
    id_rol bigint(20),
    PRIMARY KEY(id_usuario, id_rol),
    FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario)
        ON DELETE RESTRICT
        ON UPDATE CASCADE,
    FOREIGN KEY(id_rol) REFERENCES rol(id_rol)
        ON DELETE RESTRICT
        ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARSET=utf8;