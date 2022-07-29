CREATE TABLE Events_table
(
 E_id int primary key,
 Ename varchar(20),
 Club varchar(20),
 Dat date,
 Faculty_incharge varchar(20),
 Fees int,
 Venue varchar(255)
);
insert into Events_table values(1,'Code-a-thon','CSE Student Club','2022-06-25','Sindhu K',100,'PJA Block');
insert into Events_table values(2,'LiveWire','ISE Student Club','2022-06-27','Shubha Rao',75,'PG Block');
insert into Events_table values(3,'Optimise-Prime','ISE Student Club','2022-06-25','Shambhavi',200,'ISE Dept');
insert into Events_table values(4,'Electrical Potpouri','BMSCE IEEE','2022-06-26','Guruprasad',50,'Auditorium 1');
insert into Events_table values(5,'Hardware Hackathon','AIML Student Club','2022-06-24','Shwetha',100,'BSN Hall');
insert into Events_table values(6,'Poster-Making','NSS','2022-06-28','Sujatha',30,'Indoor Stadium');
select * from Events_table;
