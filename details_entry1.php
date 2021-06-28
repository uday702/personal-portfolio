<?php

//this is phpmyadmin connection and do you give student details and see in this database
$server_name="localhost";
$username="root";
$password="";
$database_name="database 123";
$conn=mysqli_connect($server_name
,$username, $password, $database_na
me);
if(!$conn)
{
11
die("Connection Failed: "
mysqli_connect_error());
.
}
if(isset($_POST['save']))
//this section starts at the various quiries 
{
$enter_name
=
$_POST['enter_name'];
$village
=
$_POST['college'];
$email
=
$_POST['email'];
$phone_number
=
$_POST['phone_nunber'];
$state
=
$_POST['state'];
$fund_amount
=
$_POST['fund_amount'];
$gender =
$_POST['gender'];
$sql_query
"INSERT
INTO entry_details
(enter_name, college, email, phone_number, state, fund_amount, gender)
VALUES
('$enter_name', '$college','$email', '$phone_number','$state','$fund_amount','$gender')";
if (mysqli_query($conn,
$sql_query))
{
echo "New Details
Entry inserted successfully !";
}
else
{
IT
echo "Error:
11 11
$sql .
. mysqli_error($conn);
}
mysqli_close($conn);
}
?>