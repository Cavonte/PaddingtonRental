CREATE DATABASE rental_27419562;
USE rental_27419562;
CREATE TABLE customers(
type enum('OWNER','TENANT') not null,
first_name VARCHAR(15) not null,
last_name VARCHAR(15) not null,
phone VARCHAR(20) not null,
email VARCHAR(40) not null,
log_in VARCHAR(15) not null,
password VARCHAR(30) null,
date_entered timestamp not null);

INSERT INTO customers VALUES('TENANT','Mike','Smith','(111)111-1111','abcd.efg@gmail.com','banana','11111111',now());

INSERT INTO customers VALUES('OWNER','John','Smith','(111)111-1111','abcd.efg@gmail.com','banana1','11111111',now());

INSERT INTO customers VALUES('TENANT','Alex','Smith','(111)111-1111','abcd.efg@gmail.com','banana2','11111111',now());

INSERT INTO customers VALUES('OWNER','Dimitri','Smith','(111)111-1111','abcd.efg@gmail.com','banana3','11111111',now());

INSERT INTO customers VALUES('TENANT','Michael','Smith','(111)111-1111','abcd.efg@gmail.com','banana4','11111111',now());

INSERT INTO customers VALUES('OWNER','Sarah','Smith','(111)111-1111','abcd.efg@gmail.com','banana5','11111111',now());

INSERT INTO customers VALUES('TENANT','Alexa','Smith','(111)111-1111','abcd.efg@gmail.com','banana6','11111111',now());

INSERT INTO customers VALUES('OWNER','Patrick','Smith','(111)111-1111','abcd.efg@gmail.com','banana7','11111111',now());

INSERT INTO customers VALUES('TENANT','Viktor','Smith','(111)111-1111','abcd.efg@gmail.com','banana8','11111111',now());

INSERT INTO customers VALUES('OWNER','Jed','Smith','(111)111-1111','abcd.efg@gmail.com','banana9','11111111',now());


CREATE TABLE opreferences(
pets enum('yes','no') not null,
smoking enum('yes','no') not null,
age INT UNSIGNED not null,
employed enum('yes','no') not null,
income INT UNSIGNED not null,
log_in VARCHAR(15) not null UNIQUE KEY);

INSERT INTO opreferences VALUES ('no','yes',20,'yes',0,'banana1');
INSERT INTO opreferences VALUES ('yes','no',30,'no',22000,'banana3');
INSERT INTO opreferences VALUES ('no','yes',30,'no',30000,'banana5');
INSERT INTO opreferences VALUES ('yes','no',40,'yes',35000,'banana7');
INSERT INTO opreferences VALUES ('no','no',40,'yes',50000,'banana9');

CREATE TABLE oproperties(
title VARCHAR(30) not null,
street VARCHAR(50) not null,
city VARCHAR(15) not null,
province VARCHAR(15) not null,
postalcode VARCHAR(15) not null,
price MEDIUMINT UNSIGNED NOT NULL,
date_entered DATE not null,
message VARCHAR(300) NOT NULL,
log_in VARCHAR(15) not null UNIQUE KEY);

INSERT INTO oproperties VALUES ('title','Elm Street','Montreal','Qc','h1h 1h1',65000,NOW(),'message','banana1');
INSERT INTO oproperties VALUES ('title1','Guy Street','Laval','Qc','h1h 1h1',85000,NOW(),'message 1','banana3');
INSERT INTO oproperties VALUES ('title2','Elemer Street','Montreal','Qc','h0h 0h0',25000,NOW(),'message 2' ,'banana5');
INSERT INTO oproperties VALUES ('title3','Catherine Street','South Shore','Qc','h0h 0h0',125000,NOW(),'message 3','banana7');
INSERT INTO oproperties VALUES ('title4','Crescent','Laval','Qc','h1h 1h1',65000,NOW(),'message 4','banana9');

CREATE TABLE tprofiles(
pets enum('yes','no') not null,
smoking enum('yes','no') not null,
age INT UNSIGNED not null,
employed enum('yes','no') not null,
income INT UNSIGNED not null,
log_in VARCHAR(15) not null UNIQUE KEY);

INSERT INTO tprofiles VALUES ('no','yes',20,'yes',0,'banana');
INSERT INTO tprofiles VALUES ('yes','no',30,'no',20000,'banana2');
INSERT INTO tprofiles VALUES ('no','yes',30,'no',30000,'banana4');
INSERT INTO tprofiles VALUES ('yes','no',40,'yes',40000,'banana6');
INSERT INTO tprofiles VALUES ('no','no',40,'yes',50000,'banana8');


CREATE TABLE tpreferences(
city VARCHAR(15) not null,
province VARCHAR(15) not null,
postalcode VARCHAR(15) not null,
price MEDIUMINT UNSIGNED NOT NULL,
date_entered DATE not null,
message VARCHAR(300) NOT NULL,
log_in VARCHAR(15) not null UNIQUE KEY);

INSERT INTO tpreferences VALUES ('Laval','Qc','h0h 0h0',100000,NOW(),'message','banana');
INSERT INTO tpreferences VALUES ('Montreal','Qc','h0h 0h0',100000,NOW(),'message1','banana2');
INSERT INTO tpreferences VALUES ('Montreal','Qc','h0h 0h0',100000,NOW(),'message2' ,'banana4');
INSERT INTO tpreferences VALUES ('Montreal','Qc','h0h 0h0',100000,NOW(),'message3','banana6');
INSERT INTO tpreferences VALUES ('Montreal','Qc','h0h 0h0',100000,NOW(),'message4','banana8');







	



