create table users
(
    username varchar(32) not null,
    password varchar(40) not null,
    id       int,
    primary key (username, id),
    constraint unique_username
        unique (username)
);

alter table users
    modify id int auto_increment;
