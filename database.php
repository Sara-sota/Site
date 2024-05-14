<?php 



$name=$_POST['name'];
$familyname=$_POST['familyname'];
$gendre=$_POST['gendre'];
$city=$_POST['city'];
$street=$_POST['street'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$homeid=$_POST['homeid'];

$conn=new mysqli('localhost','root','','Projet');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
    
    
}else
{
    $stmt=$conn->prepare("insert into Client(name,familyname,gender,city,street,email,phonenumber,homeid)values(?,?,?,?,?,?,?,?)");
    
    $stmt=$bind_param("ssssssi",$name, $familyname, $gender, $city, $street, $email, $phonenumber, $homeid);
$stmt->execute();
                        echo"You reservation goes Successfully..................";
    echo"we will send you the interview date via email";

                        $stmt->close();
                                                $conn->close();

                        
}




?>