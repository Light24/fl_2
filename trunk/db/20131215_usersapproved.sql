ALTER TABLE  `users` CHANGE  `city`  `city` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE  `users` CHANGE  `photo`  `photo` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE  `users` CHANGE  `phone`  `phone` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE  `users` CHANGE  `uid_vk`  `uid_vk` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE  `users` CHANGE  `uid_fb`  `uid_fb` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE  `users` CHANGE  `uid_tw`  `uid_tw` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE  `users` CHANGE  `provider_vk`  `provider_vk` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE  `users` CHANGE  `provider_fb`  `provider_fb` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE  `users` CHANGE  `provider_tw`  `provider_tw` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;
ALTER TABLE  `users` ADD  `confirmed` INT NOT NULL;

ALTER TABLE  `users` CHANGE  `sex`  `sex` ENUM(  'мужской',  'жунский' ) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
CHANGE  `birth_date`  `birth_date` DATE NOT NULL ,
CHANGE  `password`  `password` VARCHAR( 32 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL

ALTER TABLE  `contest_works_comments` ADD  `confirmed` INT NOT NULL ;
ALTER TABLE  `contest_works` ADD  `published` INT NOT NULL ;
ALTER TABLE  `contest_works` DROP  `confirmed`;