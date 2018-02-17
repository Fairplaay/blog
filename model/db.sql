CREATE DATABASE blog;
USE blog;
CREATE TABLE users;
	id_user INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	user VARCHAR(20)NOT NULL,
	name varchar (100)NOT NULL,
	email varchar(80)NOT NULL,
	pass char(32)NOT NULL,
	role ENUM('Admin','User')NOT NULL

CREATE TABLE articles;
	id_article INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
	article TEXT NOT NULL,
	fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	FOREIGN KEY(users) REFERENCES users(id_user) ON DELETE RESTRICT ON UPDATE CASCADE

REPLACE INTO users(user, name, email,pass, role)
 VALUES ('@Admin','Jesus','j33zs@yahoo.com',MD5('123'),'Admin');

REPLACE INTO users(user, name, email,pass, role)
 VALUES ('@user','Alberto','user@midominio.com',MD5('asdf'),'User');
