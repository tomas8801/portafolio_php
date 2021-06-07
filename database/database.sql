CREATE DATABASE portafolio;
USE portafolio;

CREATE TABLE projects (
id int(255) auto_increment not null,
name VARCHAR(100) not null,
languages VARCHAR(50) not null,
description text not null,
image VARCHAR(50) not null,
github VARCHAR(100),
web VARCHAR(100),
date date not null,
CONSTRAINT pk_projects PRIMARY KEY (id)
)ENGINE=InnoDb;

CREATE TABLE images (
id int(255) auto_increment not null,
id_project int(255) not null,
image_path VARCHAR(50) not null,
CONSTRAINT pk_images PRIMARY KEY (id),
CONSTRAINT fk_image_project FOREIGN KEY (id_project) REFERENCES projects(id)
)ENGINE=InnoDb;

CREATE TABLE users (
id int(255) auto_increment not null,
name varchar(50) not null,
password varchar(50) not null,
CONSTRAINT pk_users PRIMARY KEY (id)
)ENGINE=InnoDb;