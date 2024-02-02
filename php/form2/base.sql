CREATE TABLE `users_reg` (
    id int(10) unsigned NOT NULL AUTO_INCREMENT,
    username varchar(25) NOT NULL unique,
    password varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    PRIMARY KEY (id)
);

