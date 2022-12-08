DROP TABLE IF EXISTS patient;
DROP TABLE IF EXISTS `user`;
DROP TABLE IF EXISTS usertype;
CREATE TABLE usertype(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    visibility BIT DEFAULT 1
);
CREATE TABLE `user` (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    district VARCHAR(255),
    municipality VARCHAR(255),
    parish VARCHAR(255),
    address VARCHAR(255),
    postal_code VARCHAR(255),
    last_login VARCHAR(255),
    photo VARCHAR(255),
    visibility BIT DEFAULT 1,
    birth_date DATE,
    usertype_id INT NOT NULL DEFAULT 2,

    FOREIGN KEY (usertype_id) REFERENCES usertype(id)
);
CREATE TABLE patient (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    process_number INT,
    niss INT,
    phone_contact VARCHAR(255),
    email_contact VARCHAR(255),
    district VARCHAR(255),
    municipality VARCHAR(255),
    parish VARCHAR(255),
    address VARCHAR(255),
    postal_code VARCHAR(255),
    photo VARCHAR(255),
    birth_date DATE,
    visibility BIT DEFAULT 1
);

INSERT INTO usertype(name)VALUES('Administrador'),('Colaborador');
INSERT INTO user(email,password,first_name,last_name,usertype_id)VALUES
    ('ana@mail.com',MD5('123456789'),'Ana Isabel','Azevedo Teixeira',1),
    ('joao@mail.com',MD5('123456789'),'João Pedro','Sampaio Araújo',2);
    

INSERT INTO patient (first_name ,last_name,process_number,niss,phone_contact,district,municipality,address,photo,birth_date)VALUES
    ('José António','Augusto Pereira',120120,333666999,'910000000','Braga','Vila Nova de Famalicão','Rua da estrada, Nº 112','img/FotosUtentes/1.jpg',"1985-06-15"),
    ('Maria Manuela','Trindade',120120,333666999,'910000000','Braga','Vila Nova de Famalicão','Rua da estrada, Nº 112','img/FotosUtentes/2.jpg',"1980-06-10"),
    ('Ana Catarina','Fonseca Quaresma',120120,333666999,'910000000','Braga','Vila Nova de Famalicão','Rua da estrada, Nº 112','img/FotosUtentes/3.jpg',"1975-05-15"),
    ('Clara João','Azevedo Teles',120120,333666999,'910000000','Braga','Vila Nova de Famalicão','Rua da estrada, Nº 112','img/FotosUtentes/4.jpg',"1970-12-15"),
    ('João Carlos','Pereira',120120,333666999,'910000000','Braga','Vila Nova de Famalicão','Rua da estrada, Nº 112','img/FotosUtentes/5.jpg',"1985-06-15"),
    ('António','Fonseca Cascais',120120,333666999,'910000000','Braga','Vila Nova de Famalicão','Rua da estrada, Nº 112','img/FotosUtentes/6.jpg',"1985-06-15"),
    ('Diana Isabel','Carmo Araújo',120120,333666999,'910000000','Braga','Vila Nova de Famalicão','Rua da estrada, Nº 112','img/FotosUtentes/7.jpg',"1985-06-15"),
    ('Joaquim Carlos','Taveira Cardoso',120120,333666999,'910000000','Braga','Vila Nova de Famalicão','Rua da estrada, Nº 112','img/FotosUtentes/8.jpg',"1985-06-15");
