
// CREATE VIEW

CREATE VIEW student_details_view AS
SELECT student_info.id, name, email, mobile, gender, road_area, district 
FROM student_info, present_address 
WHERE student_info.id = present_address.stinfo_id;

// CREATE TABLE

CREATE TABLE student_info( 
	id int(11) not null AUTO_INCREMENT, 
	name varchar(50) not null, 
	email varchar(50) not null, 
	mobile varchar(20) not null, 
	gender enum('Male','Female') not null, 
	PRIMARY KEY(id) 
);

// CREATE TRIGGER

CREATE TRIGGER `after_delete_student` AFTER DELETE ON `student_info` FOR EACH ROW DELETE FROM present_address WHERE stinfo_id = OLD.id

SELECT COUNT(`customerNumber`), country From costomers GROUP BY Country