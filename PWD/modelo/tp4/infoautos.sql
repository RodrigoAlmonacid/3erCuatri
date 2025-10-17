-- phpMyAdmin SQL Dump
-- version 2.8.1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 17-08-2012 a las 00:43:05
-- Versión del servidor: 5.0.21
-- Versión de PHP: 5.1.4
-- 
-- Base de datos: `infoautos`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `auto`
-- 

CREATE TABLE `auto` (
  `Patente` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Marca` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Modelo` int(11) NOT NULL,
  `DniDuenio` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`Patente`),
  FOREIGN KEY (`DniDuenio`) REFERENCES `persona` (`NroDni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `auto`
-- 

INSERT INTO `auto` (`Patente`, `Marca`, `Modelo`, `DniDuenio`) VALUES 
('ADC 152', 'Fiat Uno', 98, '28326986'),
('POL 968', 'Renault 12', 77, '28326986'),
('KJU 952', 'Ford Fiesta', 2006, '25963874'),
('UYH 985', 'Fiat Palio', 95, '30875962'),
('LKI 865', 'Fiat Siena', 90, '28326986'),
('SDC 965', 'Peugeot 205', 88, '30875962');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `persona`
-- 

CREATE TABLE `persona` (
  `NroDni` varchar(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Apellido` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Nombre` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `fechaNac` date NOT NULL default '0000-00-00',
  `Telefono` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `Domicilio` varchar(200) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`NroDni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Volcar la base de datos para la tabla `persona`
-- 

INSERT INTO `persona` (`NroDni`, `Apellido`, `Nombre`, `fechaNac`, `Telefono`, `Domicilio`) VALUES 
('28326986', 'Moya', 'Manuel', '1981-12-03', '299-9632587', 'Linares 44 piso 2 dpto 5'),
('25963874', 'Farias', 'Marta', '1975-06-21', '299-1559354', 'Roca 568'),
('30875962', 'Lopez', 'Eduardo', '1983-10-03', '299-6587741', 'Santa Fe 98'),
('22985265', 'Ramirez', 'Claudia', '1971-05-16', '299-9854155', 'Sarmiento 55');


ALTER TABLE `auto` ADD KEY `idTipoVehiculo` (`DniDuenio`);

ALTER TABLE `auto`
ADD CONSTRAINT `auto_ibfk_1` FOREIGN KEY (`DniDuenio`) REFERENCES `persona` (`NroDni`);

--Nuevas personas
INSERT INTO `persona` (`NroDni`, `Apellido`, `Nombre`, `fechaNac`, `Telefono`, `Domicilio`) VALUES
('30112233', 'González', 'Sofía', '1983-05-15', '299-4561234', 'Av. Argentina 123'),
('32456789', 'Rodríguez', 'Mateo', '1986-11-20', '299-7894561', 'San Martín 456'),
('34567890', 'Gómez', 'Valentina', '1990-02-28', '299-1237890', 'Belgrano 789'),
('36789012', 'Fernández', 'Juan', '1992-09-10', '299-5550101', 'Rivadavia 1011'),
('38901234', 'López', 'Isabella', '1995-07-01', '299-4443322', 'Mitre 234 piso 1 A'),
('40123456', 'Díaz', 'Benjamín', '1998-04-12', '299-6677889', 'Sarmiento 567'),
('29876543', 'Martínez', 'Emma', '1982-01-25', '299-1122334', 'Leloir 890'),
('27654321', 'Pérez', 'Lucas', '1979-08-30', '299-9876543', 'Perito Moreno 321'),
('31234567', 'García', 'Mía', '1985-03-14', '299-3216549', 'Alberdi 654'),
('33456789', 'Sánchez', 'Thiago', '1988-10-05', '299-7890123', 'Corrientes 987'),
('35678901', 'Romero', 'Martina', '1991-06-18', '299-2345678', 'Santa Fe 1213'),
('37890123', 'Sosa', 'Santino', '1994-12-22', '299-8765432', 'Entre Ríos 1415'),
('39012345', 'Torres', 'Catalina', '1997-02-09', '299-5678901', 'Jujuy 1617'),
('41234567', 'Álvarez', 'Bautista', '2000-11-03', '299-0123456', 'Mendoza 1819'),
('28765432', 'Ruiz', 'Olivia', '1981-07-16', '299-3456789', 'La Pampa 2021'),
('26543210', 'Ramírez', 'Joaquín', '1978-04-02', '299-6789012', 'Tucumán 2223'),
('30987654', 'Flores', 'Emilia', '1984-09-21', '299-9012345', 'San Juan 2425'),
('32109876', 'Acosta', 'Felipe', '1987-01-08', '299-4321098', 'Roca 2627'),
('34321098', 'Benítez', 'Victoria', '1990-08-11', '299-8765432', 'Yrigoyen 2829'),
('36543210', 'Medina', 'Francisco', '1993-05-29', '299-2109876', 'Olascoaga 3031'),
('38765432', 'Herrera', 'Juana', '1996-03-17', '299-5432109', 'Independencia 3233'),
('40987654', 'Suárez', 'Delfina', '1999-10-24', '299-8765432', 'Colón 3435'),
('29123456', 'Aguilar', 'Nicolás', '1982-06-07', '299-1098765', 'Brown 3637'),
('27987654', 'Castillo', 'Renata', '1980-12-19', '299-4321098', 'Pueyrredón 3839'),
('31876543', 'Ortiz', 'Agustín', '1986-02-04', '299-7654321', 'Fotheringham 4041'),
('33987654', 'Castro', 'Alma', '1989-11-13', '299-0987654', 'Illia 150 piso 4 B'),
('35123456', 'Giménez', 'Tomás', '1991-08-23', '299-4567890', 'Alderete 320'),
('37345678', 'Molina', 'Lucía', '1994-04-01', '299-8901234', 'Ricchieri 540'),
('39567890', 'Rojas', 'Zoe', '1997-09-14', '299-2345678', 'El Chocón 780'),
('41789012', 'Domínguez', 'Bruno', '2001-01-30', '299-5678901', 'Planicie Banderita 910'),
('30223344', 'González', 'Julieta', '1983-07-22', '299-1112233', 'Av. del Trabajador 1122'),
('32556677', 'Fernández', 'Santiago', '1987-03-05', '299-4455667', 'Gatica 3344'),
('34889900', 'López', 'Camila', '1990-10-18', '299-7788990', 'Copahue 5566'),
('36112233', 'Pérez', 'Daniel', '1992-06-01', '299-0011223', 'Tierra del Fuego 7788'),
('38334455', 'García', 'Agustina', '1995-02-14', '299-3344556', 'Catriel 9900'),
('40556677', 'Sánchez', 'Leonardo', '1998-11-27', '299-6677889', 'Plottier 246'),
('29998877', 'Romero', 'Paula', '1982-08-08', '299-9988776', 'Centenario 135'),
('27776655', 'Sosa', 'Andrés', '1979-04-11', '299-7766554', 'Añelo 579'),
('31443322', 'Torres', 'Abril', '1985-09-23', '299-4433221', 'Rincón de los Sauces 802'),
('33665544', 'Álvarez', 'Facundo', '1988-05-07', '299-6655443', 'Paso Aguerre 111'),
('35887766', 'Ruiz', 'Jazmín', '1991-12-12', '299-8877665', 'Chos Malal 222'),
('37009988', 'Ramírez', 'Ignacio', '1994-08-16', '299-0099887', 'Zapala 333'),
('39221100', 'Flores', 'Malena', '1997-04-20', '299-2211009', 'Las Lajas 444'),
('41443322', 'Acosta', 'Lautaro', '2000-12-25', '299-4433221', 'Aluminé 555'),
('28887766', 'Benítez', 'Micaela', '1981-10-31', '299-8877665', 'Villa Pehuenia 666'),
('26665544', 'Medina', 'Javier', '1978-06-14', '299-6655443', 'Caviahue 777'),
('30001122', 'Herrera', 'Julián', '1984-02-17', '299-0011223', 'Copahue 888'),
('32223344', 'Suárez', 'Clara', '1987-09-02', '299-2233445', 'Domuyo 999'),
('34445566', 'Aguilar', 'Morena', '1990-05-19', '299-4455667', 'Tromen 1010'),
('36667788', 'Castillo', 'Ramiro', '1993-01-23', '299-6677889', 'Lanín 1212'),
('38889900', 'Ortiz', 'Guadalupe', '1996-10-06', '299-8899001', 'Huincul 1313'),
('40001122', 'Castro', 'Federico', '1999-07-11', '299-0011223', 'Cutral Co 1414'),
('29221100', 'Giménez', 'Pablo', '1982-03-26', '299-2211009', '25 de Mayo 1515'),
('27119988', 'Molina', 'Ana', '1979-11-09', '299-1199887', '9 de Julio 1616'),
('31338877', 'Rojas', 'Diego', '1985-07-13', '299-3388776', 'Belgrano 1717'),
('33557766', 'Domínguez', 'Valeria', '1988-03-28', '299-5577665', 'San Martín 1818'),
('35776655', 'González', 'Mariano', '1991-11-01', '299-7766554', 'Sarmiento 1919'),
('37995544', 'Fernández', 'Carolina', '1994-07-04', '299-9955443', 'Roca 2020'),
('39114433', 'López', 'Sebastián', '1997-03-08', '299-1144332', 'Mitre 2121');

--nuevos autos
INSERT INTO `auto` (`Patente`, `Marca`, `Modelo`, `DniDuenio`) VALUES
('AEF 123', 'Ford Fiesta', 2018, '38901234'),
('GHI 456', 'Chevrolet Onix', 2020, '40123456'),
('JKL 789', 'Fiat Cronos', 2021, '28326986'),
('MNO 012', 'Volkswagen Gol', 2017, '30112233'),
('PQR 345', 'Toyota Hilux', 2022, '32456789'),
('STU 678', 'Renault Sandero', 2019, '34567890'),
('VWX 901', 'Peugeot 208', 2023, '36789012'),
('YZA 234', 'Ford Ka', 2016, '29876543'),
('BCD 567', 'Chevrolet Cruze', 2018, '27654321'),
('EFG 890', 'Volkswagen Amarok', 2020, '31234567'),
('HJK 123', 'Toyota Etios', 2019, '33456789'),
('LMN 456', 'Renault Kwid', 2021, '35678901'),
('OPQ 789', 'Fiat Argo', 2022, '37890123'),
('RST 012', 'Peugeot 308', 2017, '39012345'),
('UVW 345', 'Ford Ranger', 2023, '41234567'),
('XYZ 678', 'Chevrolet S10', 2016, '28765432'),
('ABC 901', 'Volkswagen Nivus', 2022, '26543210'),
('DEF 234', 'Toyota Corolla', 2020, '30987654'),
('GKL 567', 'Renault Duster', 2018, '32109876'),
('MOP 890', 'Fiat Toro', 2021, '34321098'),
('QRS 123', 'Ford Focus', 2015, '36543210'),
('TUV 456', 'Chevrolet Tracker', 2023, '38765432'),
('WXY 789', 'Volkswagen T-Cross', 2020, '40987654'),
('ZAB 012', 'Toyota Yaris', 2019, '29123456'),
('CDE 345', 'Renault Logan', 2017, '27987654'),
('FGH 678', 'Peugeot 2008', 2022, '31876543'),
('IJK 901', 'Fiat Mobi', 2018, '33987654'),
('LMN 234', 'Ford Ecosport', 2016, '35123456'),
('OPQ 567', 'Chevrolet Prisma', 2019, '37345678'),
('RST 890', 'Volkswagen Vento', 2014, '39567890'),
('UVW 123', 'Toyota SW4', 2021, '41789012'),
('BCA 456', 'Renault Captur', 2020, '30223344'),
('EDB 789', 'Peugeot Partner', 2019, '32556677'),
('GFE 012', 'Citroen C3', 2023, '34889900'),
('HJI 345', 'Nissan Kicks', 2021, '36112233'),
('KLH 678', 'Honda HR-V', 2018, '38334455'),
('NMK 901', 'Jeep Renegade', 2022, '40556677'),
('PML 234', 'Fiat Strada', 2017, '29998877'),
('ROP 567', 'Chevrolet Montana', 2023, '27776655'),
('UTS 890', 'Ford Maverick', 2022, '31443322'),
('WVT 123', 'Renault Oroch', 2020, '33665544'),
('ZYW 456', 'Volkswagen Saveiro', 2019, '35887766'),
('AZX 789', 'Toyota RAV4', 2018, '37009988'),
('BYA 012', 'Nissan Versa', 2021, '39221100'),
('CXB 345', 'Honda Civic', 2016, '41443322'),
('DWC 678', 'Jeep Compass', 2020, '28887766'),
('EVD 901', 'Citroen C4 Cactus', 2022, '26665544'),
('FUF 234', 'Nissan Frontier', 2019, '30001122'),
('GTG 567', 'Honda Fit', 2017, '32223344'),
('HSH 890', 'Hyundai Creta', 2021, '34445566'),
('IRI 123', 'Kia Sportage', 2018, '36667788'),
('JQJ 456', 'Chery Tiggo', 2020, '38889900'),
('KRK 789', 'Hyundai Tucson', 2022, '40001122'),
('LSL 012', 'Kia Rio', 2019, '29221100'),
('MTM 345', 'Ford Territory', 2023, '27119988'),
('NUN 678', 'Chevrolet Equinox', 2018, '31338877'),
('OVO 901', 'Volkswagen Taos', 2022, '33557766'),
('PWP 234', 'Toyota C-HR', 2020, '35776655'),
('QXQ 567', 'Renault Alaskan', 2021, '37995544'),
('RYR 890', 'Peugeot Landtrek', 2023, '39114433'),
('SPS 123', 'Fiat Pulse', 2022, '28326986'),
('TOT 456', 'Ford Bronco Sport', 2021, '30112233'),
('UIU 789', 'Chevrolet Spin', 2019, '32456789'),
('VJV 012', 'Volkswagen Virtus', 2020, '34567890'),
('WKX 345', 'Toyota Prius', 2017, '36789012'),
('XLY 678', 'Renault Clio', 2016, '38901234'),
('ZMZ 901', 'Peugeot 408', 2018, '40123456'),
('AMA 234', 'Ford Mondeo', 2015, '29876543'),
('BNB 567', 'Chevrolet Cobalt', 2019, '27654321'),
('COC 890', 'Volkswagen Passat', 2014, '31234567'),
('DPD 123', 'Toyota Camry', 2020, '33456789'),
('EQE 456', 'Renault Megane', 2008, '35678901'),
('FRF 789', 'Peugeot 5008', 2021, '37890123'),
('GSG 012', 'Citroen Berlingo', 2019, '39012345'),
('HTH 345', 'Honda Accord', 2018, '41234567'),
('IUI 678', 'Jeep Grand Cherokee', 2017, '28765432'),
('JVJ 901', 'Hyundai Santa Fe', 2020, '26543210'),
('KWK 234', 'Kia Sorento', 2022, '30987654');