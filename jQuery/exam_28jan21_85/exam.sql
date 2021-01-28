
-- 2. Store Procedure

CREATE PROCEDURE insert_manufacturer(
	IN name VARCHAR(50), 
	IN address VARCHAR(100), 
	IN contact_no VARCHAR(50)
)  
INSERT INTO manufacturer(name, address, contact_no) 
VALUES(name, address, contact_no);

-- 3. TRIGGER

CREATE TRIGGER delete_manufacturer 
AFTER DELETE ON manufacturer 
FOR EACH ROW 
DELETE FROM product 
WHERE manufacturer_id=OLD.id
 

-- 4. View

CREATE VIEW show_product AS
SELECT product.id, product_name, price
FROM product
WHERE price > 5000  