CREATE TABLE Winning_Teams
(
 E_id int references events_table(E_id),
 Mem1 varchar(20),
 Mem2 varchar(20),
 Mem3 varchar(20),
 Email varchar(20),
 Phone varchar(10),
 Score int
 );
alter table Winning_Teams add column Won varchar(20);
select * from Winning_Teams;
truncate table Winning_Teams;
