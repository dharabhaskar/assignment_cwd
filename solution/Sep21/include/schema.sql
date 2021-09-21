create table product(
    id int not null AUTO_INCREMENT PRIMARY KEY ,
    pname varchar(255),
    description text,
    price double
);

insert into product(pname,description,price) VALUES('mobile','nokia 5.2',12500.00);