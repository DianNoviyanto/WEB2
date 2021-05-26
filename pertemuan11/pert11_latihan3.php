<?php

$con = mysqli_connect("localhost","root",""); //koneksi 
mysqli_select_db($con, "lat_dbase"); // mengaktifkan database 

//membuat tabel
$sql = "CREATE TABLE tbl_mhs 
( 
mhsID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(mhsID),
FirstName varchar(15), 
LastName varchar(15), 
Age int 
)"; 
mysqli_query($con, $sql); 
// input data 
$input=mysqli_query($con, "insert into tbl_mhs(FirstName,LastName,Age) 
values('Anjar','Prabowo',25)");

?> 