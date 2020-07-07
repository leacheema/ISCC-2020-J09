<?php
 
session_start(); 
 
var_dump($_POST);
 
echo $_POST["password"];
if($_POST["password"] == "2020")