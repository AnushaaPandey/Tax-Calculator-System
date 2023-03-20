<?php
$mysqli=new mysqli('localhost:3307','root','');
if($mysqli->connect_error){
    echo"Connection error";
}
else {
    // $drop_db="drop database tax";
    // $mysqli->query($drop_db);

    $database="create database tax";
    $mysqli->query($database);

    $mysqli->select_db('tax'); 

    $newtable="
        create table user(
            first_name varchar(255) not null,
            last_name varchar(255) not null,
            username varchar(255) not null,
            email varchar(255) not null,
            password varchar(255) not null,
            company_name varchar(255) not null,
            tax_id  int not null,
            address varchar(255) not null,
            phone_number int not null

        )";
    $mysqli->query($newtable); 

}

?>