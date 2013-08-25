CREATE DATABASE Cycling CHARACTER SET UTF8;

CREATE TABLE uploads(
	id 		INTEGER	AUTO_INCREMENT	,
	path	TEXT					,
	type	TEXT					,
	comment TEXT					,
	time	TEXT					,
PRIMARY KEY(
	id
));

CREATE TABLE locations(
	id		INTEGER	AUTO_INCREMENT	,
	here	TEXT					,
	comment TEXT					,
	time	TEXT					,
PRIMARY KEY(
	id
));
