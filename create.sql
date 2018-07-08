DROP DATABASE IF EXISTS cake3book;
CREATE DATABASE cake3book DEFAULT CHARACTER SET utf8;

SET NAMES utf8;

USE cake3book;

CREATE TABLE books (
        id int not null auto_increment primary key,
        title varchar(255) not null,
        price int not null,
        author_id int not null,
        category_id int not null,
        modified datetime not null,
        created datetime not null
);

CREATE TABLE authors (
    id int not null auto_increment primary key,
    name varchar(255) not null,
    modified datetime not null,
    created datetime not null
);

CREATE TABLE categories (
    id int not null auto_increment primary key,
    name varchar(255) not null,
    modified datetime not null,
    created datetime not null
);
