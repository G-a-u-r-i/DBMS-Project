CREATE TABLE Coordinator
(
 C_id int,
 Cname varchar(20),
 Contactno varchar(10),
 Faculty_incharge varchar(20),
 Volunteer_incharge varchar(20),
 E_id int references events_table(E_id),
 primary key(C_id)
);
insert into Coordinator values(10,'Amrutha','88888','Sindhu K','Gauri',1);
insert into Coordinator values(20,'Sakshi','99999','Shubha Rao','Laxmi',2);
insert into Coordinator values(30,'Bhoomika','00000','Shambhavi','Deeksha',3);
insert into Coordinator values(40,'Ayesha','77777','Guruprasad','Pooja',4);
insert into Coordinator values(50,'Varsha','66666','Shwetha','Shreya',5);
insert into Coordinator values(60,'Tanvi','99999','Sujatha','Rachana',6);
alter table Coordinator add column Manages varchar(20);
update Coordinator set Manages = (select Ename from Events_table,Coordinator where Coordinator.E_id=Events_table.E_id and Events_table.E_id=1) where Coordinator.C_id=10;
update Coordinator set Manages = (select Ename from Events_table,Coordinator where Coordinator.E_id=Events_table.E_id and Events_table.E_id=2) where Coordinator.C_id=20;
update Coordinator set Manages = (select Ename from Events_table,Coordinator where Coordinator.E_id=Events_table.E_id and Events_table.E_id=3) where Coordinator.C_id=30;
update Coordinator set Manages = (select Ename from Events_table,Coordinator where Coordinator.E_id=Events_table.E_id and Events_table.E_id=4) where Coordinator.C_id=40;
update Coordinator set Manages = (select Ename from Events_table,Coordinator where Coordinator.E_id=Events_table.E_id and Events_table.E_id=5) where Coordinator.C_id=50;
update Coordinator set Manages = (select Ename from Events_table,Coordinator where Coordinator.E_id=Events_table.E_id and Events_table.E_id=6) where Coordinator.C_id=60;
alter table Coordinator add column Available_Volunteers int default '0';
update Coordinator set Available_Volunteers=(select count(*) from Volunteer group by Cid having Coordinator.C_id=Volunteer.Cid) where C_id=10;
update Coordinator set Available_Volunteers=(select count(*) from Volunteer group by Cid having Coordinator.C_id=Volunteer.Cid) where C_id=20;
update Coordinator set Available_Volunteers=(select count(*) from Volunteer group by Cid having Coordinator.C_id=Volunteer.Cid) where C_id=30;
update Coordinator set Available_Volunteers=(select count(*) from Volunteer group by Cid having Coordinator.C_id=Volunteer.Cid) where C_id=40;
update Coordinator set Available_Volunteers=(select count(*) from Volunteer group by Cid having Coordinator.C_id=Volunteer.Cid) where C_id=50;
update Coordinator set Available_Volunteers=(select count(*) from Volunteer group by Cid having Coordinator.C_id=Volunteer.Cid) where C_id=60;
select * from Coordinator;
