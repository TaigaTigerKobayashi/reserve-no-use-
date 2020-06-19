create table reserve.master(
	id int unsigned auto_increment primary key,
	reserve date,
	name varchar(255)
);

create table reserve.matsushima(
	id int unsigned auto_increment primary key,
	reserve date,
	time varchar(255),
	name varchar(255),
	content varchar(255)
);

create table reserve.ono(
	id int unsigned auto_increment primary key,
	reserve date,
	time varchar(255),
	name varchar(255),
	content varchar(255)
);

create table reserve.kusano(
	id int unsigned auto_increment primary key,
	reserve date,
	time varchar(255),
	name varchar(255),
	content varchar(255)
);

create table reserve.masters(
        id int unsigned auto_increment primary key,
        day varchar(255),
	time1 varchar(41),
	time2 varchar(41),
	course varchar(41),
	charge varchar(41),
	name varchar(41),
	mail varchar(41),
	ip varchar(255),
	useragent varchar(255),
	created datetime,
	memo varchar(255)
);