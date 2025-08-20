CREATE DATABASE IF NOT EXISTS batch61 ;
USE batch61;

-- DROP TABLE IF EXISTS name;
-- source D:/www/repo/Idb_batch_61/php/database/name.sql;

-- Drop table if EXISTS student;
-- create table student(
--     id int primary key auto_increment,
--     name varchar(45) null,
--     gender varchar(45) null,
--     class int null, 
--     roll int null,
--     section varchar(10)
-- );

-- truncate table student;

-- insert into student (name, gender) select name ,if(gender ='Male','M','F') as gender from name;
-- update student set section=ELT(ceil(rand()*4),'A','B','C','D');
-- update student set class= ceil(rand()*10);

-- set @roll =0;
-- update student set roll = @roll:=@roll+1 where section='B' and Class=1;