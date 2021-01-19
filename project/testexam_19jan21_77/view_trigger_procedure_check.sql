# Trigger

CREATE TRIGGER `after_delete_product` 
AFTER DELETE ON `product` 
FOR EACH ROW DELETE FROM manufacturer 
WHERE manufacturer_id=OLD.id


# Procedure

DELIMITER //

create procedure insert_manufacturer(
IN name varchar(50),
IN address varchar(100),
IN contact_no varchar(50)
)
BEGIN
	insert into manufacturer(id,name,address,contact_no)
	values(NULL, name,address,contact_no);



END;
//
DELIMITER ;