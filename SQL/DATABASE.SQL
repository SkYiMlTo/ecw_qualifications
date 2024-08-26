create table users
(
    username VARCHAR(32) NOT NULL,
    password VARCHAR(40) NOT NULL,
    id       INT         AUTO_INCREMENT,
    PRIMARY KEY (id),
    CONSTRAINT unique_username
        UNIQUE (username)
);
