CREATE DATABASE reuniones_elim;
USE reuniones_elim;

CREATE TABLE tiper_tipo_persona(
	tiper_id INT PRIMARY KEY AUTO_INCREMENT,
	tiper_nombre VARCHAR(300),
	tiper_descripcion VARCHAR(300),
    tiper_estado int, 
	tiper_fecha_creacion VARCHAR(300),
	tiper_fecha_actualizacion VARCHAR(300)
);
CREATE TABLE per_persona(
	per_id INT PRIMARY KEY AUTO_INCREMENT,
	per_codigo VARCHAR(100),
	per_username VARCHAR(100),
	per_password VARCHAR(100),
    per_firstNombre VARCHAR(100),
	per_lastName VARCHAR(100),
    per_alias VARCHAR(100),
    per_actualizacion INT,
	per_estado INT, 	
	per_id_tipo_persona INT,
	per_fecha_creacion  VARCHAR(300),
	per_fecha_actualizacion  VARCHAR(300),
    per_ultima_conexion  VARCHAR(300),
	
	CONSTRAINT fk_persona_tipo_persona FOREIGN KEY (per_id_tipo_persona) REFERENCES tiper_tipo_persona(tiper_id)
);
CREATE TABLE dis_distrito(
	dis_id INT PRIMARY KEY AUTO_INCREMENT,
	dis_codigo VARCHAR(100),
	dis_nombre VARCHAR(300),
	dis_pastor_id_per INT,
	dis_fecha_creacion VARCHAR(300),
	dis_fecha_actualizacion VARCHAR(300),

	CONSTRAINT fk_distrito_persona FOREIGN KEY (dis_pastor_id_per) REFERENCES per_persona(per_id)
);
CREATE TABLE zon_zona(
	zon_id INT PRIMARY KEY AUTO_INCREMENT,
	zon_codigo VARCHAR(300),
	zon_nombre VARCHAR(300),
	zon_coordinador_id_per int,
	zon_fecha_creacion VARCHAR(300),
	zon_fecha_actualizacion VARCHAR(300),
	CONSTRAINT fk_zona_persona FOREIGN KEY (zon_coordinador_id_per) REFERENCES per_persona(per_id)
);

CREATE TABLE dxz_distritoxzona(
	dxz_id INT PRIMARY KEY AUTO_INCREMENT,
	dxz_id_distrito INT,
	dxz_id_zona INT,
			
	CONSTRAINT fk_distritoxzona_distrito FOREIGN KEY (dxz_id_distrito) REFERENCES dis_distrito (dis_id),
	CONSTRAINT fk_distritoxzona_zona FOREIGN KEY (dxz_id_zona) REFERENCES zon_zona (zon_id)
);
CREATE TABLE sec_sector(
	sec_id INT PRIMARY KEY AUTO_INCREMENT,
	sec_codigo VARCHAR(300),
	sec_nombre VARCHAR(300),
	sec_supervisor_id_per int,
	sec_fecha_creacion VARCHAR(300),
	sec_fecha_actualizacion VARCHAR(300),
	
	CONSTRAINT fk_sector_persona FOREIGN KEY (sec_supervisor_id_per) REFERENCES per_persona(per_id)
);
CREATE TABLE zxs_zonaxsector(
	zxs_id INT PRIMARY KEY AUTO_INCREMENT,
	zxs_id_zona INT,
	zxs_id_sector INT,
			
	CONSTRAINT fk_zonaxsector_zon_zona FOREIGN KEY (zxs_id_zona) REFERENCES zon_zona (zon_id),
	CONSTRAINT fk_zonaxsector_sec_sector FOREIGN KEY (zxs_id_sector) REFERENCES sec_sector (sec_id)
);
CREATE TABLE reu_reunion(
	reu_id INT PRIMARY KEY AUTO_INCREMENT,
	reu_codigo VARCHAR(300),
	reu_nombre VARCHAR(300),
	reu_lider_id_per int,
	reu_anfitrion_id_per int,
	reu_fecha_creacion VARCHAR(300),
	reu_fecha_actualizacion VARCHAR(300),
	
	CONSTRAINT fk_reunion_lider_persona FOREIGN KEY (reu_lider_id_per) REFERENCES per_persona(per_id),
	CONSTRAINT fk_reunion_anfitrion_persona FOREIGN KEY (reu_anfitrion_id_per) REFERENCES per_persona(per_id)
);
CREATE TABLE sxr_sectorxreunion(
	sxr_id INT PRIMARY KEY AUTO_INCREMENT,
	sxr_id_sector INT,
	sxr_id_reunion INT,
			
	CONSTRAINT fk_sectorxreunion_sector FOREIGN KEY (sxr_id_sector) REFERENCES sec_sector (sec_id),
	CONSTRAINT fk_sectorxreunion_reunion FOREIGN KEY (sxr_id_reunion) REFERENCES reu_reunion (reu_id)
);
/*-----------------------------INSERCIONES PARA TABLA TIPO DE PERSONA-----------------------------------*/
INSERT INTO tiper_tipo_persona VALUES (NULL,'Desarollador o soporte',1,'Asignado a personas de soporte para el desarollo del sistema ',NOW(),NULL);
INSERT INTO tiper_tipo_persona VALUES (NULL,'Coordinador','Coordinador de zona',1,NOW(),NULL);
INSERT INTO tiper_tipo_persona VALUES (NULL,'Pastor','pastor de distrito ',1,NOW(),NULL);
INSERT INTO tiper_tipo_persona VALUES (NULL,'Supervisor','Supervisor de sector ',1,NOW(),NULL);
INSERT INTO tiper_tipo_persona VALUES (NULL,'Anfitrion','Anfitrion de reunion ',1,NOW(),NULL);
INSERT INTO tiper_tipo_persona VALUES (NULL,'Lider','Lider de reunion ',1,NOW(),NULL);
/*-----------------------------------------------------------------------------------------------------*/
/*-----------------------------------INSERCIONES A TABLA PERSONA--------------------------------------*/

INSERT INTO per_persona VALUES (NULL,'186720','admin',SHA1('admin'),"primer nombre","apellidos ambos","alias",0,1,1,NOW(),NULL,NULL);
INSERT INTO per_persona VALUES (NULL,'789120','soporte',SHA1('soporte'),"primer nombre1","apellidos ambos1","alias",0,1,1,NOW(),NULL,NULL);
INSERT INTO per_persona VALUES (NULL,'755520','sergio',SHA1('sergio'),"primer nombre2","apellidos ambos2","alias",0,0,1,NOW(),NULL,NULL);

/*-----------------------------------------------------------------------------------------------------*/
/*-------------------------------INSERCIONES A TABLA DISTRITO-------------------------------------------*/
INSERT INTO dis_distrito VALUES (NULL,'MD05123','DISTRITO 1',1,NOW(),NULL);
INSERT INTO dis_distrito VALUES (NULL,'MD05124','DISTRITO 2',2,NOW(),NULL);
/*----------------------------------------------------------------------------------------------------------*/
/*----------------------------------INSERCIONES A TABLA ZONA----------------------------------------------*/
INSERT INTO zon_zona VALUES (NULL,'MD05125','ZONA 1',1,NOW(),NULL);
INSERT INTO zon_zona VALUES (NULL,'MD05126','ZONA 2',2,NOW(),NULL);
INSERT INTO zon_zona VALUES (NULL,'MD05126','ZONA 3',1,NOW(),NULL);

INSERT INTO zon_zona VALUES (NULL,'MD05125','ZONA 4',1,NOW(),NULL);
INSERT INTO zon_zona VALUES (NULL,'MD05126','ZONA 5',2,NOW(),NULL);
INSERT INTO zon_zona VALUES (NULL,'MD05126','ZONA 6',1,NOW(),NULL);
/*-----------------------------------------------------------------------------------------------------------*/
/*---------------------------INSERCIONES A TABLA ENTRE DISTRITO Y ZONA ------------------------------------*/
INSERT INTO dxz_distritoxzona VALUES (NULL,1,1);
INSERT INTO dxz_distritoxzona VALUES (NULL,1,2);
INSERT INTO dxz_distritoxzona VALUES (NULL,1,3);

INSERT INTO dxz_distritoxzona VALUES (NULL,2,4);
INSERT INTO dxz_distritoxzona VALUES (NULL,2,5);
/*----------------------------------------------------------------------------------------------------------------*/


/*------------------------------------------------VISTAS---------------------------------------------------------*/
SELECT 
                GROUP_CONCAT(zon_nombre
                        SEPARATOR ', ')
            FROM
                zon_zona
                    INNER JOIN
                dxz_distritoxzona ON dxz_id_zona = zon_id
            WHERE
                dxz_id_distrito = 1;
								
								
					
SELECT 
	dis_id,
	dis_codigo,
	dis_nombre,
	per_username,
    INSERT((SELECT 
                GROUP_CONCAT(zon_nombre
                        SEPARATOR ', ')
            FROM
                zon_zona
                    INNER JOIN
                dxz_distritoxzona ON dxz_id_zona = zon_id
            WHERE
                dxz_id_distrito = dis_id),
        0,
        0,
        '') AS ZONAS,
			 INSERT((SELECT 
                GROUP_CONCAT(zon_Id
                        SEPARATOR ', ')
            FROM
                zon_zona
                    INNER JOIN
                dxz_distritoxzona ON dxz_id_zona = zon_id
            WHERE
                dxz_id_distrito = dis_id),
        0,
        0,
        '') AS ZONAS
FROM
    dis_distrito
INNER JOIN per_persona ON per_id = dis_pastor_id_per




SELECT 
	zon_id,
	zon_nombre,
    INSERT((SELECT 
                GROUP_CONCAT(sec_nombre
                        SEPARATOR ', ')
            FROM
                sec_sector
                    INNER JOIN
                zxs_zonaxsector ON zxs_id_sector = sec_id
            WHERE
                zxs_id_zona = zon_id),
        0,
        0,
        '') AS sectores
FROM
    zon_zona
WHERE zon_id IN (1,2,3);

SELECT `zon_id`, `zon_nombre`, INSERT((SELECT GROUP_CONCAT(sec_nombre SEPARATOR ', ') FROM sec_sector INNER JOIN zxs_zonaxsector ON zxs_id_sector = sec_id WHERE zxs_id_zona = zon_id), 0, 0, '') AS sectores FROM `zon_zona` WHERE zon_id IN (4, 5)