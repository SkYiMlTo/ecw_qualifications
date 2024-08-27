create table users
(
    username VARCHAR(32) NOT NULL,
    password VARCHAR(60) NOT NULL,
    acc_type VARCHAR(32) NOT NULL,
    id       INT         AUTO_INCREMENT,
    PRIMARY KEY (id),
    CONSTRAINT unique_username
        UNIQUE (username)
);
