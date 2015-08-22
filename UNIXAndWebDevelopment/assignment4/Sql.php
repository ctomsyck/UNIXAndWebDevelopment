

Use ct4598;

CREATE TABLE person(
pid int(4) NOT NULL auto_increment PRIMARY KEY, 
firstname varchar(255),
lastname varchar(255),
address varchar(255),
state character(2),
zip varchar(15),
telephone varchar(15),
email varchar(255)
);

LOAD DATA INFILE "testdata.txt"
INTO TABLE person
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(firstname, lastname, address, state, zip, telephone, email);