<?php 
include("../baglanti.php");
//header('X-XSS-Protection: 0');
$kulcevapid=$_POST['idanswer'];

$soruid=$_POST['questionid'];

$result = mysqli_query($con,"select * from mulakat where id=$soruid");

$sor=mysqli_fetch_array($result,MYSQLI_ASSOC); 

$dogrucevap=$sor['dogru']; 

$status = 'false';
if($kulcevapid==$dogrucevap) {
$status = true;
	
$dogrucc=$_COOKIE["dogru"];
$dogrucck=$dogrucc+1;
setcookie("dogru", $dogrucck);
}
else{
	
$yanliscc=$_COOKIE["yanlis"];
$yanliscck=$yanliscc+1;
setcookie("yanlis", $yanliscck);	

}
echo $status;
exit;
?>