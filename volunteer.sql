create table Volunteer
(
 Vid int primary key,
 Vname varchar(30),
 Dept varchar(20),
 Email varchar(20),
 Phno varchar(10),
 Cid int references Coordinator(C_id)
);
insert into Volunteer values(1,'Maya','EEE','may@bmsce.ac.in','9010',10);
insert into Volunteer values(2,'Jai','BIOTECH','jai@bmsce.ac.in','9021',30);
insert into Volunteer values(3,'Tara','CSE','tar@bmsce.ac.in','9022',20);
insert into Volunteer values(4,'Rohan','MECH','roh@bmsce.ac.in','9013',10);
insert into Volunteer values(5,'Ajay','ISE','aja@bmsce.ac.in','9080',40);
insert into Volunteer values(6,'Alisha','ISE','ali@bmsce.ac.in','9210',60);
insert into Volunteer values(7,'Sanjay','CIV','sanj@bmsce.ac.in','9810',60);
insert into Volunteer values(8,'Anya','EEE','any@bmsce.ac.in','9025',50);
insert into Volunteer values(9,'Ravi','MECH','rav@bmsce.ac.in','9410',20);
insert into Volunteer values(10,'Arman','CSE','arm@bmsce.ac.in','8910',40);
insert into Volunteer values(11,'Amit','BIOTECH','ami@bmsce.ac.in','8810',30);
insert into Volunteer values(12,'Trisha','CIV','tri@bmsce.ac.in','9910',50);
insert into Volunteer values(13,'Fatima','BIOTECH','fath@bmsce.ac.in','7710',30);
insert into Volunteer values(14,'Vijay','MECH','vij@bmsce.ac.in','5810',20);
insert into Volunteer values(15,'Kiran','MECH','kir@bmsce.ac.in','4520',40);
insert into Volunteer values(16,'Jasmin','EEE','jas@bmsce.ac.in','8888',60);
alter table Volunteer add column Coming_for varchar(20);
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=1) where Vid=1;
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=2) where Vid=2;
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=3) where Vid=3;
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=4) where Vid=4;
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=5) where Vid=5;
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=6) where Vid=6;
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=7) where Vid=7;
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=8) where Vid=8;
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=9) where Vid=9;
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=10) where Vid=10;
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=11) where Vid=11;
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=12) where Vid=12;
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=13) where Vid=13;
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=14) where Vid=14;
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=15) where Vid=15;
update Volunteer set Coming_for=(select Ename from Events_table,Volunteer,Coordinator where Volunteer.Cid=Coordinator.C_id
and Coordinator.E_id=Events_table.E_id and Vid=16) where Vid=16;
select * from Volunteer;
