-- Početak transakcije
START TRANSACTION; 


DROP DATABASE IF EXISTS company;

CREATE DATABASE IF NOT EXISTS company DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

use company;

-- Create table grad
-- | Id | Naziv | Zip |  
--
CREATE TABLE IF NOT EXISTS city(
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    city_name VARCHAR(24) NOT NULL,
    zip VARCHAR(5) NOT NULL 
)ENGINE=InnoDB;

-- Create table pozicije
-- | Id | Naziv | Koeficijent |
--
CREATE TABLE IF NOT EXISTS job_title(
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    job_title_name VARCHAR(24) NOT NULL,
    job_title_coefficient DECIMAL(10,2) NOT NULL
)ENGINE=InnoDB;

-- Create table odjel
-- | Id | Naziv | Koeficijent |
--
CREATE TABLE IF NOT EXISTS department(
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    department_name VARCHAR(100) NOT NULL,
    department_coefficient DECIMAL(10,2) NOT NULL
)ENGINE=InnoDB;

-- Create table zaposlenici
-- | Id | Ime | Adresa | Grad Id | Email |
--
CREATE TABLE IF NOT EXISTS employees(
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    employee_name VARCHAR(60) NOT NULL,
    employee_address VARCHAR(100) NOT NULL,
    employee_address_city_id INT UNSIGNED NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    FOREIGN KEY (employee_address_city_id) REFERENCES city(id)
)ENGINE=InnoDB;

-- Create table raspored
-- | Id | Zaposlenik Id | Odjel Id | Pozicija Id |
--
CREATE TABLE IF NOT EXISTS schedule(
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    employee_id INT UNSIGNED NOT NULL,
    department_id INT UNSIGNED NOT NULL,
    job_title_id INT UNSIGNED NOT NULL,
    FOREIGN KEY (employee_id) REFERENCES employees(id),
    FOREIGN KEY (department_id) REFERENCES department(id),
    FOREIGN KEY (job_title_id) REFERENCES job_title(id)
)ENGINE=InnoDB;

-- Create table plaća
-- | Id | Zaposlenik Id | Iznos |
--
CREATE TABLE IF NOT EXISTS salary(
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    employee_id INT UNSIGNED NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (employee_id) REFERENCES employees(id)
)ENGINE=InnoDB;

-- Ubacivanje podataka u bazu
-- Insert table grad
-- | Naziv | Zip | 
--
INSERT INTO city (city_name, zip) VALUES
('Zagreb', '10000'),
('Rijeka', '51000'),
('Split', '21000'),
('Rovinj', '52210'),
('Koprivnica', '48000');

-- Insert table pozicija
-- | Naziv | Koeficijent |
--
INSERT INTO job_title (job_title_name, job_title_coefficient) VALUES
('Referent', 1),
('Voditelj', 1.25);

-- Insert table odjel
-- | Naziv | Koeficijent |
--
INSERT INTO department (department_name, department_coefficient) VALUES
('Financije', 1.10),
('Marketing', 1.15),
('Prodaja', 1);

-- Insert table zaposlenici
-- | Id | Ime | Adresa | Grad Id | Email |
--
INSERT INTO employees (employee_name, employee_address, employee_address_city_id, email) VALUES
('Marko Horvat', 'Trg Bana Jelačića 1', 1, 'marko.horvat@example.com'),     
('Ivana Kovač', 'Ivana Zajca 15', 1, 'ivana.kovac@example.com'),              
('Petar Marić', 'Pusta 34', 4, 'petar.maric@example.com'),                   
('Ana Novak', 'Vukovarska 23', 1, 'ana.novak@example.com'),                   
('Luka Babić', 'Heinzelova 54', 2, 'luka.babic@example.com'),                
('Maja Jurić', 'Draškovićeva 19', 1, 'maja.juric@example.com'),              
('Ivan Matić', 'Maksimirska 72', 1, 'ivan.matic@example.com'),                
('Katarina Perić', 'Radnička cesta 92', 2, 'katarina.peric@example.com'),     
('Nikola Savić', 'Zagrebačka avenija 56', 1, 'nikola.savic@example.com'),     
('Martina Vuković', 'Dubrava 11', 1, 'martina.vukovic@example.com'),          
('Tomislav Petrović', 'Trešnjevka 78', 2, 'tomislav.petrovic@example.com');   

-- Insert table raspored
-- | Zaposlenik Id | Odjel Id | Pozicija Id |
--
INSERT INTO schedule (employee_id, department_id, job_title_id) VALUES
(1, 1, 2),
(2, 3, 1),
(3, 1, 1),
(4, 2, 1),
(5, 1, 1),
(6, 2, 2),
(7, 3, 2),
(8, 1, 1),
(9, 3, 1),
(10, 2, 1),
(11, 3, 2),
(6, 3, 1);

-- Insert table plaća
-- | Zaposlenik Id | Iznos |
--
INSERT INTO salary (employee_id, amount) VALUES
(1, 1400),
(2, 900),
(3, 1000),
(4, 1000),
(5, 1100),
(6, 1600),
(7, 1200),
(8, 1080),
(9, 900),
(10, 1100),
(11, 1200);


-- Izvršavanje transakcije
COMMIT; 
