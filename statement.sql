USE freemarket;

CREATE TABLE users (
    user_id int NOT NULL AUTO_INCREMENT,
    user_userid varchar(255) NOT NULL,
    user_pwd varchar(255) NOT NULL,
    user_email varchar(255) NOT NULL,
    PRIMARY KEY(user_id)
    
);