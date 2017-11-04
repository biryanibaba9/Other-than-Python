#CSCI 566
# GRAD GROUP ASSIGNMENT PART 2 
#DUE DATE: 11/11/2016 

drop table packing_id;
drop table item;
drop table assigned;
drop table task;
drop table package;
drop table volunteer;



create table volunteer(volunteer_id int(25) primary key auto_increment, name varchar(255), address varchar(255), phone_number int(20));

INSERT into volunteer(name, address, phone_number) VALUES('RAHUL', 'DeKalb IL', '1234567890');
INSERT into volunteer(name, address, phone_number) VALUES('SNEHA', 'REGENT Dr, Dekalb', '3214567890');
INSERT into volunteer(name, address, phone_number) VALUES('PRUTHVI', 'Eco Park', '0987654321');
INSERT into volunteer(name, address, phone_number) VALUES('Bamathi Pravallika', 'Spiros CT', '07894123');
INSERT into volunteer(name, address, phone_number) VALUES('Samantha Ruth Prabhu', 'Hyderabad India', '14314313');
INSERT into volunteer(name, address, phone_number) VALUES('Emilia Clark', 'Los Vegas', '143341143');
INSERT into volunteer(name, address, phone_number) VALUES('Joffrey', 'San Fransisco', '34134133');
INSERT into volunteer(name, address, phone_number) VALUES('Jon Snow', 'Winter Fell', '34134114');
INSERT into volunteer(name, address, phone_number) VALUES('Shreya', 'Chicago', '341121334');
INSERT into volunteer(name, address, phone_number) VALUES('Siddu', 'Naperville', '984877671');
INSERT into volunteer(name, address, phone_number) VALUES('Krik', 'Aurora', '984877681');
INSERT into volunteer(name, address, phone_number) VALUES('Erwin', 'Rockford', '984877688');
INSERT into volunteer(name, address, phone_number) VALUES('David', 'West Ridge', '98487783');
INSERT into volunteer(name, address, phone_number) VALUES('Maddy', 'Pappas Dr', '98487774');
INSERT into volunteer(name, address, phone_number) VALUES('Kaysee', 'Geneva', '88776874');
INSERT into volunteer(name, address, phone_number) VALUES('Pam', 'St Louis', '89847774');
INSERT into volunteer(name, address, phone_number) VALUES('Jackiee', 'St Charls', '8988874');
INSERT into volunteer(name, address, phone_number) VALUES('Laura', 'St Johns', '89846874');
INSERT into volunteer(name, address, phone_number) VALUES('William', 'Fairfax', '93481483');
INSERT into volunteer(name, address, phone_number) VALUES('Ninette', 'Paris', '934813582');
INSERT into volunteer(name, address, phone_number) VALUES('Nick', 'New York', '32181582');
INSERT into volunteer(name, address, phone_number) VALUES('Krishna', 'Washington DC', '3218582');
INSERT into volunteer(name, address, phone_number) VALUES('Anna', 'Sacramento', '37415582');
INSERT into volunteer(name, address, phone_number) VALUES('Sameer', 'Long Beach', '37419682');
INSERT into volunteer(name, address, phone_number) VALUES('Mahesh', 'London', '3951962');




create table package(package_id int(25) primary key auto_increment, date_of_packing date, total_weight double);


INSERT into package(date_of_packing, total_weight) VALUES('2000-10-01','1');
INSERT into package(date_of_packing, total_weight) VALUES('2011-11-11','25');
INSERT into package(date_of_packing, total_weight) VALUES('2001-01-01','24');
INSERT into package(date_of_packing, total_weight) VALUES('2002-02-02','23');
INSERT into package(date_of_packing, total_weight) VALUES('2003-03-03','22');
INSERT into package(date_of_packing, total_weight) VALUES('2004-04-04','21');
INSERT into package(date_of_packing, total_weight) VALUES('2005-05-05','20');
INSERT into package(date_of_packing, total_weight) VALUES('2006-06-06','19');
INSERT into package(date_of_packing, total_weight) VALUES('2007-07-07','18');
INSERT into package(date_of_packing, total_weight) VALUES('2008-08-08','17');
INSERT into package(date_of_packing, total_weight) VALUES('2009-09-09','16');
INSERT into package(date_of_packing, total_weight) VALUES('2010-10-10','15');
INSERT into package(date_of_packing, total_weight) VALUES('2012-12-12','14');
INSERT into package(date_of_packing, total_weight) VALUES('2001-02-03','13');
INSERT into package(date_of_packing, total_weight) VALUES('2002-03-04','12');
INSERT into package(date_of_packing, total_weight) VALUES('2003-04-05','11');
INSERT into package(date_of_packing, total_weight) VALUES('2004-05-06','10');
INSERT into package(date_of_packing, total_weight) VALUES('2005-06-07','9');
INSERT into package(date_of_packing, total_weight) VALUES('2006-07-08','8');
INSERT into package(date_of_packing, total_weight) VALUES('2007-08-09','7');
INSERT into package(date_of_packing, total_weight) VALUES('2008-09-10','6');
INSERT into package(date_of_packing, total_weight) VALUES('2009-10-11','5');
INSERT into package(date_of_packing, total_weight) VALUES('2010-11-12','4');
INSERT into package(date_of_packing, total_weight) VALUES('2011-12-13','3');
INSERT into package(date_of_packing, total_weight) VALUES('2011-11-16','2');





create table task(code int(25) primary key auto_increment, description varchar(225), type varchar(225), status varchar(25), foreign key (code) references volunteer(volunteer_id));



INSERT into task(description, type, status) VALUES ('answer the telephone','recurring','ongoing');
INSERT into task(description, type, status) VALUES ('prepare 5000 packages of basic medical supplies','packing','open');
INSERT into task(description, type, status) VALUES ('prepare 50 Child supplies','Delivered','closed');
INSERT into task(description, type, status) VALUES ('Prepare 10 packages of Skin care','packed','open');
INSERT into task(description, type, status) VALUES ('Prepare 15 gift packs','Preparing','open');
INSERT into task(description, type, status) VALUES ('prepare 5000 packages of basic medical supplies','packing','open');
INSERT into task(description, type, status) VALUES ('answer the telephone','recurring','ongoing');
INSERT into task(description, type, status) VALUES ('prepare 5000 packages of basic medical supplies','packing','open');
INSERT into task(description, type, status) VALUES ('answer the telephone','recurring','ongoing');
INSERT into task(description, type, status) VALUES ('prepare 5000 packages of basic medical supplies','packing','open');
INSERT into task(description, type, status) VALUES ('prepare 50 Child supplies','Delivered','closed');
INSERT into task(description, type, status) VALUES ('Prepare 10 packages of Skin care','packed','open');
INSERT into task(description, type, status) VALUES ('prepare 50 Child supplies','Delivered','closed');
INSERT into task(description, type, status) VALUES ('answer the telephone','recurring','ongoing');
INSERT into task(description, type, status) VALUES ('prepare 50 Child supplies','Delivered','closed');
INSERT into task(description, type, status) VALUES ('Prepare 10 packages of Skin care','packed','open');
INSERT into task(description, type, status) VALUES ('prepare 50 Child supplies','Delivered','closed');
INSERT into task(description, type, status) VALUES ('Prepare 10 packages of Skin care','packed','open');
INSERT into task(description, type, status) VALUES ('prepare 5000 packages of basic medical supplies','packing','open');
INSERT into task(description, type, status) VALUES ('Prepare 10 packages of Skin care','packed','open');
INSERT into task(description, type, status) VALUES ('prepare 5000 packages of basic medical supplies','packing','open');
INSERT into task(description, type, status) VALUES ('answer the telephone','recurring','ongoing');
INSERT into task(description, type, status) VALUES ('prepare 5000 packages of basic medical supplies','packing','open');
INSERT into task(description, type, status) VALUES ('answer the telephone','recurring','ongoing');
INSERT into task(description, type, status) VALUES ('prepare 5000 packages of basic medical supplies','packing','open');





create table packing_id(id int(25) primary key auto_increment, name varchar(25), description varchar(225));


INSERT into packing_id(name, description) VALUES('Child care','Sanitizer');
INSERT into packing_id(name, description) VALUES('Child care','Baby Moisturizer');
INSERT into packing_id(name, description) VALUES('Child care','Diper');
INSERT into packing_id(name, description) VALUES('Child care','Sanitizer');
INSERT into packing_id(name, description) VALUES('Child care','Baby Moisturizer');
INSERT into packing_id(name, description) VALUES('Child care','Diper');
INSERT into packing_id(name, description) VALUES('Child care','Sanitizer');
INSERT into packing_id(name, description) VALUES('Food','Nutella');
INSERT into packing_id(name, description) VALUES('Food','Chicken');
INSERT into packing_id(name, description) VALUES('Food','Bacon');
INSERT into packing_id(name, description) VALUES('Food','Ham');
INSERT into packing_id(name, description) VALUES('Food','Pork');
INSERT into packing_id(name, description) VALUES('Food','Cookies');
INSERT into packing_id(name, description) VALUES('Food','Nutella');
INSERT into packing_id(name, description) VALUES('Food','Chicken');
INSERT into packing_id(name, description) VALUES('Food','Bacon');
INSERT into packing_id(name, description) VALUES('Food','Ham');
INSERT into packing_id(name, description) VALUES('Food','Pork');
INSERT into packing_id(name, description) VALUES('Food','Cookies');
INSERT into packing_id(name, description) VALUES('Medical','Medicines for Cold');
INSERT into packing_id(name, description) VALUES('Medical','Medicines for Body Pains');
INSERT into packing_id(name, description) VALUES('Medical','Medicines for Fever');
INSERT into packing_id(name, description) VALUES('Medical','Medicines for Cold');
INSERT into packing_id(name, description) VALUES('Medical','Medicines for Body Pains');
INSERT into packing_id(name, description) VALUES('Medical','Medicines for Fever');




create table item(item_id int(25) primary key auto_increment, value double, quantity int(25), description varchar(225), foreign key (item_id) references package(package_id));



INSERT into item(value, quantity, description) VALUES ('1','1','Sanitizer');
INSERT into item(value, quantity, description) VALUES ('2','2','Body Moisturizer');
INSERT into item(value, quantity, description) VALUES ('3','3','Diper');
INSERT into item(value, quantity, description) VALUES ('4','4','Sanitizer');
INSERT into item(value, quantity, description) VALUES ('5','5','Body Moisturizer');
INSERT into item(value, quantity, description) VALUES ('6','6','Diper');
INSERT into item(value, quantity, description) VALUES ('7','7','Sanitizer');
INSERT into item(value, quantity, description) VALUES ('8','8','Nutella');
INSERT into item(value, quantity, description) VALUES ('9','9','Chicken');
INSERT into item(value, quantity, description) VALUES ('10','10','Bacon');
INSERT into item(value, quantity, description) VALUES ('11','11','Ham');
INSERT into item(value, quantity, description) VALUES ('12','12','Pork');
INSERT into item(value, quantity, description) VALUES ('13','13','Cookies');
INSERT into item(value, quantity, description) VALUES ('14','14','Nutella');
INSERT into item(value, quantity, description) VALUES ('15','15','Chicken');
INSERT into item(value, quantity, description) VALUES ('16','16','Bacon');
INSERT into item(value, quantity, description) VALUES ('17','11','Ham');
INSERT into item(value, quantity, description) VALUES ('18','12','Pork');
INSERT into item(value, quantity, description) VALUES ('19','19','Cookies');
INSERT into item(value, quantity, description) VALUES ('20','19','Medicines for Cold');
INSERT into item(value, quantity, description) VALUES ('21','19','Medicines for Body pains');
INSERT into item(value, quantity, description) VALUES ('22','19','Medicines for Fever');
INSERT into item(value, quantity, description) VALUES ('23','19','Medicines for Cold');
INSERT into item(value, quantity, description) VALUES ('24','19','Medicines for Body pains');
INSERT into item(value, quantity, description) VALUES ('25','19','Medicines for Fever');



create table assigned(volunteer_id int(25) primary key auto_increment, code int(25) unique, start_time date, end_time date, foreign key (volunteer_id) references volunteer(volunteer_id), foreign key (code) references task(code));


INSERT into assigned(code, start_time, end_time) VALUES('2000-10-01','2001-10-01');
INSERT into assigned(code, start_time, end_time) VALUES('2011-11-11','2012-11-11');
INSERT into assigned(code, start_time, end_time) VALUES('2001-01-01','2002-10-01');
INSERT into assigned(code, start_time, end_time) VALUES('2002-02-02','2003-02-02');
INSERT into assigned(code, start_time, end_time) VALUES('2003-03-03','2004-03-03');
INSERT into assigned(code, start_time, end_time) VALUES('2004-04-04','2005-04-04');
INSERT into assigned(code, start_time, end_time) VALUES('2005-05-05','2006-05-05');
INSERT into assigned(code, start_time, end_time) VALUES('2006-06-06','2007-06-06');
INSERT into assigned(code, start_time, end_time) VALUES('2007-07-07','2008-07-07');
INSERT into assigned(code, start_time, end_time) VALUES('2008-08-08','2009-08-08');
INSERT into assigned(code, start_time, end_time) VALUES('2009-09-09','2010-09-09');
INSERT into assigned(code, start_time, end_time) VALUES('2010-10-10','2012-10-10');
INSERT into assigned(code, start_time, end_time) VALUES('2012-12-12','2013-12-12');
INSERT into assigned(code, start_time, end_time) VALUES('2001-02-03','2002-02-03');
INSERT into assigned(code, start_time, end_time) VALUES('2002-03-04','2003-10-01');
INSERT into assigned(code, start_time, end_time) VALUES('2003-04-05','2012-11-11');
INSERT into assigned(code, start_time, end_time) VALUES('2004-05-06','2005-10-01');
INSERT into assigned(code, start_time, end_time) VALUES('2005-06-07','2012-11-11');
INSERT into assigned(code, start_time, end_time) VALUES('2006-07-08','2007-10-01');
INSERT into assigned(code, start_time, end_time) VALUES('2007-08-09','2012-11-11');
INSERT into assigned(code, start_time, end_time) VALUES('2008-09-10','2009-10-01');
INSERT into assigned(code, start_time, end_time) VALUES('2009-10-11','2012-11-11');
INSERT into assigned(code, start_time, end_time) VALUES('2010-11-12','2011-10-01');
INSERT into assigned(code, start_time, end_time) VALUES('2011-12-13','2012-11-11');
INSERT into assigned(code, start_time, end_time) VALUES('2011-11-16','2016-11-16');



SELECT * FROM volunteer;
SELECT * FROM package;
SELECT * FROM task;
SELECT * FROM packing_id;
SELECT * FROM item;
SELECT * FROM assigned;
