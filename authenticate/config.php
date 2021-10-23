<?php
session_start();
$hostname = "localhost"; /* Host name */
$username = "root"; /* User */
$password = ""; /* Password */
$database = "payroll"; /* Database name */

$con = mysqli_connect($hostname, $username, $password,$database);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}