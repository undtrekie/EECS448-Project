<?
//the example of inserting data with variable from HTML form
//input.php
mysql_connect("localhost","root","admin");//database connection
mysql_select_db("members");

//inserting data order
$order = "INSERT INTO member
			(number, passw)
			VALUES
			('$usr',
			'$pass')";

//declare in the order variable
$result = mysql_query($order);	//order executes
if($result){
	echo("<br>Input data is succeed");
} else{
	echo("<br>Input data is fail");
}
?>