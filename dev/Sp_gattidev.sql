---> RUN
CREATE PROCEDURE SP_Run_setting()
SELECT * FROM `setting`

CREATE PROCEDURE SP_Run_administrator()
SELECT * FROM `administrators`

---> GET
CREATE PROCEDURE SP_Get_setting(data1 int)
SELECT * FROM `setting` WHERE `id` = data1

---> PUT
CREATE PROCEDURE SP_Put_setting(data1 varchar(255), data2 varchar(255), data3 date)
INSERT INTO `setting`(`id`, `user`, `license`, `date`) VALUES (null, data1, data2, data3)

CREATE PROCEDURE SP_Put_administrator(data1 int, data2 varchar(255), data3 varchar(45), data4 varchar(255), data5 date)
INSERT INTO `administrators`(`id`, `id_setting`, `user`, `password`, `license`, `date`) VALUES (null, data1, data2, data3, data4, data5)

---> UPDATE
CREATE PROCEDURE SP_Update_setting(data1 int, data2 varchar(255), data3 date)
UPDATE `setting` SET `license`= data2,`date`= data3 WHERE `id`= data1

CREATE PROCEDURE SP_Update_administrator(data1 int, data2 varchar(255), data3 date)
UPDATE `administrators` SET `license`= data2,`date`= data3 WHERE `id_setting`= data1

---> DELETE
CREATE PROCEDURE SP_Delete_setting(data1 int)
DELETE FROM `setting` WHERE `id` = data1 

CREATE PROCEDURE SP_Delete_administrator(data1 int)
DELETE FROM `administrators` WHERE `id_setting` = data1