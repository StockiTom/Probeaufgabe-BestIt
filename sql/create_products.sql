use Onlineshop;

drop table if EXISTS Products;

CREATE TABLE IF NOT EXISTS Products (
    ArticleNumber varchar(255),
    Name varchar(255) not null,
    Description varchar(255) not null,
    Price varchar(255) not null,
    Image varchar(255) not null,
    primary key(ArticleNumber)
);