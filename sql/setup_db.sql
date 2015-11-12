CREATE TABLE Person (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
);

insert into Person  (firstname, lastname)  values ('Andrew', 'Wardrobe');
insert into Person  (firstname, lastname)  values ('Jimmy', 'Tee');
insert into Person  (firstname, lastname)  values ('Patrick', 'Marber');