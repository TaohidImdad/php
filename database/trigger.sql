/* 
Trigger OLD	 NEW
INSERT	No	 Yes
UPDATE	Yes	 Yes
DELETE	Yes	 No
 */


 DELIMITER $$
CREATE TRIGGER priceUpdate 
AFTER UPDATE ON product 
FOR EACH ROW 
BEGIN
    INSERT INTO item_change (product_id, u_price) 
    VALUES (OLD.id, NEW.price);
END $$
DELIMITER ;


show triggers;
drop trigger priceUpdate;