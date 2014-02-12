USE `buypass` ;
ALTER TABLE passagens ADD poltrona int;
UPDATE passagens SET poltrona=0 WHERE poltrona is NULL;
