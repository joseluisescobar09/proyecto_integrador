CREATE TABLE IF NOT EXISTS accounts (
    id_usuario INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    nombre VARCHAR(30) NOT NULL,
    apellido_paterno VARCHAR(30) NOT NULL,
    apellido_materno VARCHAR(30) NOT NULL,
    fecha_nacimiento CHAR(15) NOT NULL,
    genero TEXT CHECK( genero IN ('H','M') ) NOT NULL,
    email VARCHAR(60) UNIQUE NOT NULL,
    contrasena VARCHAR(100) NOT NULL
); 

CREATE TABLE IF NOT EXISTS registros_usuarios (
    id_register INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    register_date DATE NOT NULL,
    register_time TIME NOT NULL
);

CREATE TRIGGER usuarios_registrados AFTER INSERT ON accounts
    BEGIN
        INSERT INTO  registros_usuarios (register_date, register_time) VALUES (DATE('now'), TIME('now') );
    END;