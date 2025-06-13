
create table if not exists categories
(
category_id INT primary key,
category_name varchar(255)
);

create table if not exists products
(
product_id INT primary key,
product_name  varchar(255),
brand_id INT,
category_id INT,
model_year SMALLINT,
list_price DECIMAL (10,2),
foreign key (category_id)) references categories(category_id)
);

