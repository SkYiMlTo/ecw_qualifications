create table users
(
    username VARCHAR(32) NOT NULL,
    password VARCHAR(60) NOT NULL,
    id       INT         AUTO_INCREMENT,
    acc_type VARCHAR(32) NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT unique_username
        UNIQUE (username)
);
