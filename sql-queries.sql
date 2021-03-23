CREATE DATABASE law_office
CHARACTER SET utf8 
COLLATE utf8_unicode_ci;

create table users(
	user_id int AUTO_INCREMENT PRIMARY KEY,
	name varchar(100) character set utf8 not null,
    email varchar(100) character set utf8 not null unique,
    password varchar(100) character set utf8 not null
);

insert into users values(null,'Tatjana Gulušac','tatjanaglusac1991@gmail.com','limunada');