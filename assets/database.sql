create database pratik1;

create table users(
	name varchar(100),
	mobile int,
	emailid varchar(100),
	password varchar(100),
	id int auto_increment primary key
);

select id,mobile,emailid from users where id>5
