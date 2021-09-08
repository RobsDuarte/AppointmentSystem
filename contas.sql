create database contas;

use contas;

create table users (
id int not null primary key auto_increment,
username varchar(50) not null unique,
password varchar(100) not null,
created_at 	datetime default current_timestamp
);

select * from users;