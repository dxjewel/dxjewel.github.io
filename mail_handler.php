<?php 

if(isset($_post['submit'])){
$name=$_post['name'];
$email=$_post['email'];
$msg=$_post['msg'];

$to='saifulislamjewel1927@gmail.com';
$subject='form Submission';
$message="Name:".$name."\n"."Phone:".$phpone."\n"."wrote the following:"."\n\n".$msg;
$headers="From:".$email;

if(mail($to,$subject,$message,$headers)){
echo " <h2>Sent Successfully ! Thank you</h2> ",}
else{
echo "Something went wrong!";
}}




?>