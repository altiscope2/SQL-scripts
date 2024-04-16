
create table if not exists locations
(
dep_loc INT primary key,
location_name varchar(25)
);

create table if not exists department
(
dep_id INT primary key,
dep_name varchar(25),
dep_loc INT,
foreign key (dep_loc) references locations(dep_loc)
);

create table if not exists employee
(
emp_id INT auto_increment primary key,
emp_lname varchar(50),
emp_fname varchar(50),
hire_date DATE,
salary DECIMAL(7,2),
dep_id INT,
foreign key (dep_id) references department(dep_id)
    
);

insert into locations values (1,"Chicago");
insert into locations values (2,"Joliet");
insert into locations values (3,"Oak Park");
insert into locations values (4,"Wilmette");

insert into department values (101,"Inf. Technology",1);
insert into department values (102,"Administration",2);
insert into department values (103,"Business",3);
insert into department values (104,"English",4);
insert into department values (105,"Art",5);

insert into employee(emp_lname,emp_fname,hire_date,salary,dep_id) values ("Smith","John","2015-09-10",35000.00,101);
insert into employee(emp_lname,emp_fname,hire_date,salary,dep_id) values ("Snow","John","2018-10-11",45000.00,102);
insert into employee(emp_lname,emp_fname,hire_date,salary,dep_id) values ("DeVile","Cruella","2020-04-12",55000.00,103);
insert into employee(emp_lname,emp_fname,hire_date,salary,dep_id) values ("Baty","Trevor","2011-05-05",35000.00,104);
insert into employee(emp_lname,emp_fname,hire_date,salary,dep_id) values ("Woods","Jamilla","2013-12-10",35000.00,105);
insert into employee(emp_lname,emp_fname,hire_date,salary,dep_id) values ("Faker","Chet","2010-08-10",85000.00,105);
insert into employee(emp_lname,emp_fname,hire_date,salary,dep_id) values ("Jones","Topaz","2009-01-02",65000.00,104);
insert into employee(emp_lname,emp_fname,hire_date,salary,dep_id) values ("Mark","Amber","2004-02-17",85000.00,103);
insert into employee(emp_lname,emp_fname,hire_date,salary,dep_id) values ("Rodgers","Maggie","2021-09-10",25000.00,102);
insert into employee(emp_lname,emp_fname,hire_date,salary,dep_id) values ("James","Etta","2021-09-11",35000.00,101);
insert into employee(emp_lname,emp_fname,hire_date,salary,dep_id) values ("Apollo","Omar","2005-06-16",75000.00,102);
insert into employee(emp_lname,emp_fname,hire_date,salary,dep_id) values ("Lennox","Ari","2014-03-10",65000.00,103);