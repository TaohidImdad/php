DELIMITER $$ 
Create procedure All_student()
BEGIN
select * from student order by id desc;
END $$
DELIMITER;


call All_student()

DELIMITER $$ 
Create procedure All_student_by_Calss(IN _class varchar(1))
BEGIN
select * from student where class=_class order by _id desc;
END$$
DELIMITER;

call All_student_by_Calss(2)


DELIMITER $$ 
create procedure All_student_by_Calss_section(IN _Class varchar(10) , IN _Section varchar(10) )

BEGIN

select * from student where class=_Class and section= _Section;

END$$ 

DELIMITER $$

call All_student_by_Calss_section("2", "A");

SHOW procedure status where db="test";
drop procedure All_student_by_Calss;


DELIMITER $$
create procedure tota_lmale_female(
    IN _Class varchar(2)
    IN _Section varchar(2)

    Out Tota_Male int
    Out Tota_Female int
)
COMMENT "this is a test"
BEGIN

select count(*) from student where class=_Class and section=_Section and gender="M" into Tota_Male;
select count(*) from student where class=_Class and section=_Section and gender="F" into Tota_Female;

END$$
DELIMITER;

call tota_lmale_female(1,"A",@total_male,@total_female);
select @total_male , @total_female;


DELIMITER $$
CREATE FUNCTION multiple2(counts INT) 
RETURNS DECIMAL(10,2)
NO SQL
BEGIN
    DECLARE abc DECIMAL(10,2);
    IF counts > 10 Then
	set counts= 15;
    end if;
    SET abc =counts* 45;
    RETURN abc;
END $$
DELIMITER ;

CREATE TABLE calendars (
    date DATE PRIMARY KEY,
    month INT NOT NULL,
    quarter INT NOT NULL,
    year INT NOT NULL
);


DELIMITER //

CREATE PROCEDURE fillDates(
	IN startDate DATE,
    IN endDate DATE
)
BEGIN
	DECLARE currentDate DATE DEFAULT startDate;
    
	insert_date: LOOP
		-- increase date by one day
		SET currentDate = DATE_ADD(currentDate, INTERVAL 1 DAY);
        
        -- leave the loop if the current date is after the end date
        IF currentDate > endDate THEN
			LEAVE insert_date;
        END IF;
        
        -- insert date into the table
        INSERT INTO calendars(date, month, quarter, year)
        VALUES(currentDate, MONTH(currentDate), QUARTER(currentDate), YEAR(currentDate));
		
    END LOOP;
END //

DELIMITER ;