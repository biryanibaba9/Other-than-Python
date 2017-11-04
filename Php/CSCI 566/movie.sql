/* for fall 2016 csci 466/566
movie(mid,title,releaseYear,length)
actor(aid,fname,lname)
performs_in(mid,aid,salary)
director(did,fname,lname)
directs(mid,did,salary)
*/
use z1809837;
drop table if exists performs_in;
drop table if exists directs;
drop table if exists movie;
drop table if exists actor;
drop table if exists director;

create table movie
	(mid int auto_increment primary key,
	title varchar(30),
	releaseYear year(4),
	length int);
create table actor
	(aid int auto_increment primary key,
	fname varchar(15),
	lname varchar(15));
create table director
	(did int auto_increment primary key,
	fname varchar(15),
	lname varchar(15));
create table performs_in
	(mid int,
	aid int,
	salary decimal (15,2),
	primary key(mid,aid),
	foreign key (mid) references movie(mid),
	foreign key (aid) references actor(aid));
create table directs
	(mid int,
	did int,
	salary decimal (15,2),
	primary key(mid,did),
	foreign key (mid) references movie(mid),
	foreign key (did) references director(did));
	
	#put some records in
insert into movie(title,releaseYear,length) values 
	("Hell or High Water", 2016,102),     
	("Suicide Squad", 2016,130),
	("Pete's Dragon", 2016,103),
	("Kubo and the Two Strings",2016,102),
	("Star Trek",2009,128),
	("Star Trek Into Darkness",2013,133),
	("Star Trek Beyond",2016,122);
insert into director(fname,lname) values
	("David", "McKenzie"),
	("David","Ayer"),
	("David","Lowery"),
	("Travis","Knight"),
	("J.J.","Abrams"),
	("Justin", "Lin");
insert into actor(fname,lname) values
	("Jeff","Bridges"),
	("Chris", "Pine"),
	("Jared", "Leto"),
	("Robert","Redford"),
	("Charlize", "Theron"),
	("Will", "Smith"),
	("Bryce Dallas","Howard"),
	("Matthew", "McConaughey"),
	("Ben", "Foster"),
	("Margot","Robbie"),
	("Rooney","Mara");
insert into directs(mid,did) values
	(1,1),
	(2,2),
	(3,3),
	(4,4),
	(5,5),
	(6,5),
	(7,6);
insert into performs_in (mid,aid) values
	(1,1),
	(1,2),
	(1,9),
	(2,3),
	(2,6),
	(2,10),
	(3,4),
	(3,7),
	(4,5),
	(4,8),
	(4,11),
	(5,2),
	(6,2),
	(7,2);
update performs_in set salary = 3000;
update performs_in set salary = salary * ((salary+mid)/aid);
update directs set salary = 2567.57;
update directs set salary = salary * ((salary+mid)/did);	
	
	
	
