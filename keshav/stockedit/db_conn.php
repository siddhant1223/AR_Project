
<?php 
session_start(); 
$conn = new mysqli("localhost", "vishesh147", "vishesh147", "argroceryshopping");
if(!$conn){
    echo "DB Connection Failed!";
}