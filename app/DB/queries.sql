CREATE TABLE `mi_db`.`pacientes` (
  `idpaciente` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45),
  `usuario` VARCHAR(45),
  `correo` VARCHAR(85),
  `numCel` VARCHAR(45),
  `password` VARCHAR(45),
  `direccion` VARCHAR(145),
  `fechaNac` VARCHAR(45),
  PRIMARY KEY (`idpaciente`));

CREATE TABLE `mi_db`.`citas` (
  `idcita` INT NOT NULL AUTO_INCREMENT,
  `servicios` VARCHAR(75),
  `diaCita` VARCHAR(75),
  `motivo` VARCHAR(145),
  `nota` VARCHAR(185),
  `antecedentes` VARCHAR(5),
  PRIMARY KEY (`idcita`));

insert into pacientes (nombre, usuario, password)
values ('Lucia Estrancia','testUser1', 'test1234');

CREATE TABLE `mi_db`.`PacientesIngresados` (
  `idIngreso` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(75),
  `fechaIngreso` VARCHAR(75),
  `motivo` VARCHAR(145),
  `estado` VARCHAR(185),
  PRIMARY KEY (`idIngreso`));

insert into PacientesIngresados (nombre, fechaIngreso, motivo, estado)
VALUES ('Zach Hernandez', '2021-16-01', 'Trauma Craneal y Laceraciones', 'RECUPERADO'),
('Stacy Smith', '2020-10-11', 'COVID', 'RECUPERADO');