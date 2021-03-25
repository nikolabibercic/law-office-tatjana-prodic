CREATE DATABASE law_office
CHARACTER SET utf8 
COLLATE utf8_unicode_ci;

create table users(
	user_id int AUTO_INCREMENT PRIMARY KEY,
	name varchar(100) character set utf8 not null,
    email varchar(100) character set utf8 not null unique,
    password varchar(100) character set utf8 not null
);

create table sf_post_status(
	post_status_id int AUTO_INCREMENT PRIMARY KEY,
	post_status varchar(50) character set utf8 not null
);

CREATE TABLE posts(
	post_id int AUTO_INCREMENT PRIMARY KEY,
	heading varchar(250) character set utf8 not null,
    post_text varchar(10000) character set utf8 not null,
	post_status_id int not null,
    post_date datetime not null,
	FOREIGN KEY (post_status_id) REFERENCES sf_post_status(post_status_id)
);

insert into users values(null,'Tatjana Gulušac','tatjanaglusac1991@gmail.com','limunada');

insert into sf_post_status values(null,'Aktivno');
insert into sf_post_status values(null,'Neaktivno');