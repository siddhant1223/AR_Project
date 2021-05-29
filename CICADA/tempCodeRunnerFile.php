<?php 
session_start(); 
$conn = mysqli_connect("localhost", "vishesh147", "vishesh147", "argroceryshopping");
if(!$conn){
    echo "DB Connection Failed!";
}