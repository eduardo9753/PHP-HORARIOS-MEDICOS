# SISTEMA DE HORARIOS MEDICOS
Aplicativo Web para el control y registro de los horarios medicos de cada consultorio.
------------

HERRAMIENTAS :
- Base de Datos: MySQL.
- Estilos: CSS3 y Bootstrap 4.
- Lenguaje : Lenguaje PHP.

## Arquitectura MVC
1. MODELO: representación de los datos que maneja el sistema, su lógica de negocio, y sus mecanismos de persistencia.
2. VISTA: Información que se envía al cliente y los mecanismos interacción con éste.
3. CONTROLADOR: intermediario entre el Modelo y la Vista, gestionando el flujo de información entre ellos y las transformaciones para adaptar los datos a las necesidades de cada uno.

## Imagenes
Vita Administrador:
- 1
![adm_medico_registrado01](https://user-images.githubusercontent.com/68178186/166942936-27b4d677-c034-429b-9850-02779f1b56a8.PNG)
- 2
![adm_medico_calendario02](https://user-images.githubusercontent.com/68178186/166942958-64c13c6f-98d5-45d0-b205-3991929397cd.PNG)
- 3
![adm_medico_calendario_aprobados03](https://user-images.githubusercontent.com/68178186/166942971-2f9dc701-60cd-4df4-a7ec-9eb2c52c5a5b.PNG)
- 4
![adm_lista_medicos_04](https://user-images.githubusercontent.com/68178186/166943017-0dc5c14c-df59-4e80-b82c-ae9bc0be0541.PNG)
- 5
![adm_lista_consultorio_05](https://user-images.githubusercontent.com/68178186/166943078-3e24bda8-d33d-41b8-948f-caf93e2c5837.PNG)
- 6
![adm_lista_especialidad_06](https://user-images.githubusercontent.com/68178186/166943091-f9f7dd77-c587-44cc-90e5-99ce000ba709.PNG)
- 7
![adm_lista_compañias_07](https://user-images.githubusercontent.com/68178186/166943099-137efa34-580c-4a2c-8532-e29a03981807.PNG)
- 8
![adm_graficos_08](https://user-images.githubusercontent.com/68178186/166943109-26adf43b-2c4b-431f-81f2-dfa945228874.PNG)

Vita Medico:
- 9
![medico_registrado01](https://user-images.githubusercontent.com/68178186/166943995-9f587a2a-500e-4f54-bfe3-18a6e2c73589.PNG)
- 10
![medico_especialidades02](https://user-images.githubusercontent.com/68178186/166944015-d9bf80bb-fd83-43fb-9c49-7f9099d8482a.PNG)


### SCRIPT DE LA BASE DE DATOS
````sql
CREATE DATABASE calendar_SOP DEFAULT CHARACTER SET UTF8;
SET default_storage_engine = INNODB;



USE calendar_SOP;



#-------------------------------------------------------------------------------------------------
#TABLA USUARIO
#-------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS usuario(
  id_usuario            int PRIMARY KEY AUTO_INCREMENT,
  nombre_usuario        VARCHAR(100) NOT NULL,
  contra_usuario        VARCHAR(100) NOT NULL,
  perfil                VARCHAR(100) NULL,
  area_usuario          VARCHAR(100) NULL,
  foto                  VARCHAR(100) NULL default 'foto.jpg'
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
#-------------------------------------------------------------------------------------------------







#-------------------------------------------------------------------------------------------------
#TABLA MEDICO
#-------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS medico(
  id_medico             int PRIMARY KEY AUTO_INCREMENT,
  nombre_medico         VARCHAR(100) NOT NULL,
  codigo_medico         VARCHAR(100) NOT NULL,
  id_consultorio        INT NULL, #FORANEA CONSULTORIO
  id_estado_medico      INT NULL, #FORANEA ESTADO MEDICO
  id_compania           INT NULL, #FORANEA COMPANIA
  id_usuario            INT NULL, #FORANEA USUARIO
  foto                  VARCHAR(100) NULL default 'public/img/foto.jpg',
  fecha_registro_sys    TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  fecha_update_sys      TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
#-------------------------------------------------------------------------------------------------








#-------------------------------------------------------------------------------------------------
#TABLA CONSULTORIO
#-------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS consultorio(
  id_consultorio       INT PRIMARY KEY AUTO_INCREMENT,
  nombre_consultorio   VARCHAR(60) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
#-------------------------------------------------------------------------------------------------







#-------------------------------------------------------------------------------------------------
#TABLA ESTADO DEL MEDICO 
#-------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS estado_medico(
  id_estado_medico     INT PRIMARY KEY AUTO_INCREMENT,
  estado               VARCHAR(100) NOT NULL,
  fecha_registro_sys   TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  fecha_update_sys     TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
#-------------------------------------------------------------------------------------------------
#cesado
#activo
#inactivo




#-------------------------------------------------------------------------------------------------
#TABLA ESPECIALIDAD
#-------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS compania(
  id_compania       INT PRIMARY KEY AUTO_INCREMENT,
  nombre_compania   VARCHAR(60) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
#-------------------------------------------------------------------------------------------------







#-------------------------------------------------------------------------------------------------
#TABLA ESPECIALIDAD MEDICO
#-------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS especialidad_medico(
  id                   INT PRIMARY KEY AUTO_INCREMENT,
  id_medico            INT NULL, #FORENEA MEDICO
  id_especialidad      INT NULL, #FORANEA ESPECIALIDAD
  fecha_registro_sys   TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  fecha_update_sys     TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
#-------------------------------------------------------------------------------------------------







#-------------------------------------------------------------------------------------------------
#TABLA ESPECIALIDAD
#-------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS especialidad(
  id_especialidad       INT PRIMARY KEY AUTO_INCREMENT,
  nombre_especialidad   VARCHAR(100) NOT NULL,
  fecha_registro_sys   TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  fecha_update_sys     TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
#-------------------------------------------------------------------------------------------------








#-------------------------------------------------------------------------------------------------
#TABLA EVENTO DE LOS REGISTROS DE LOS HORARIOS MEDIOCOS
#-------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS evento(
  id                   INT PRIMARY KEY AUTO_INCREMENT,
  title                VARCHAR(100) NOT NULL,
  descripcion          TEXT NOT NULL,
  id_medico            INT NULL,
  color                VARCHAR(100) NULL,
  textColor            VARCHAR(100) NULL,
  START                DATETIME NULL,
  END                  DATETIME NULL,
  allDay               CHAR(6) NULL,  
  id_estado            INT  NULL, #ESTADO DEL EVENTO
  fecha_registro_sys   TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  fecha_update_sys     TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=UTF8_SPANISH_CI;
#-------------------------------------------------------------------------------------------------







#-------------------------------------------------------------------------------------------------
#TABLA ESTADO DEL EVENTO 
#-------------------------------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS estado(
  id_estado            INT PRIMARY KEY AUTO_INCREMENT,
  estado               VARCHAR(100) NOT NULL,
  fecha_registro_sys   TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
  fecha_update_sys     TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
#-------------------------------------------------------------------------------------------------
#1 ->registrado
#2 ->aprobado 
#3 ->rechazado





#-------------------------------------------------------------------------------------------------
#FORANEAS
#-------------------------------------------------------------------------------------------------
ALTER TABLE evento ADD FOREIGN KEY(id_estado) REFERENCES estado(id_estado);
ALTER TABLE evento ADD FOREIGN KEY(id_medico) REFERENCES medico(id_medico);


ALTER TABLE medico ADD FOREIGN KEY(id_consultorio) REFERENCES consultorio(id_consultorio);
ALTER TABLE medico ADD FOREIGN KEY(id_estado_medico) REFERENCES estado_medico(id_estado_medico);
ALTER TABLE medico ADD FOREIGN KEY(id_compania) REFERENCES compania(id_compania);
ALTER TABLE medico ADD FOREIGN KEY(id_usuario) REFERENCES usuario(id_usuario);

ALTER TABLE especialidad_medico ADD FOREIGN KEY(id_medico) REFERENCES medico(id_medico);
ALTER TABLE especialidad_medico ADD FOREIGN KEY(id_especialidad) REFERENCES especialidad(id_especialidad);
#-------------------------------------------------------------------------------------------------







#-------------------------------------------------------------------------------------------------
#SELECT DE DATOS
#-------------------------------------------------------------------------------------------------
SELECT e.id , e.title AS "title", e.descripcion,e.paciente AS "paciente",
       e.medico AS "doctor" , e.color AS "background", e.textColor AS "textColor",
       e.`START` AS "start",
       e.`end` AS "end",
       e.id_usuario AS "id_usuario",
       e.id_estado AS "id_estado"
       FROM evento e


SELECT DISTINCT m.nombre_medico,
            m.codigo_medico,
            c.nombre_consultorio,
            m.codigo_medico,
            m.id_medico,
            c.nombre_consultorio,
            esta.estado,
            esta.id_estado,
            e.id_medico   
            FROM evento e
            INNER JOIN medico m ON m.id_medico = e.id_medico 
            INNER JOIN estado esta ON esta.id_estado = e.id_estado
            INNER JOIN consultorio c ON c.id_consultorio = m.id_consultorio
            WHERE DATE_FORMAT(e.`START`, '%Y-%m') = '2022-04' AND esta.id_estado IN('1')
#-------------------------------------------------------------------------------------------------

````

