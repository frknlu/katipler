<?php
//Veritabanı bağlantı dosyamızı çekiyoruz
include("../baglanti.php");
ob_start();
session_start();
if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else
{
	header('X-XSS-Protection: 0');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="admin.php">Proje </a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <font color="green">. .</font>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">

	                          <li><a href="logout.php">Çıkış Yap</a></li>

	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<?php require_once("sayfa/solmenu.php") ?>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  	<div class="content-box-large">
<?php

$adim = $_GET["adim"];
switch($adim){
case "": 

    $testid = mysqli_query($con,"SELECT * from mulakat order by id DESC LIMIT 1");
	$testid2=mysqli_fetch_assoc($testid);
	$testidx=$testid2["id"];
	$testideklenecek=$testidx+1;
?>

<h3>Yeni Test Ekle</h3>
<br>
<form action="testekle.php?adim=testonay" method="post">
<div class="row">


 <div class="form-group">
    <label>Test İD:</label>
    <?php echo $testideklenecek ?>
  </div>

<div class="form-group">
    <center><label><h4>SORU</h4></label></center>
   <textarea class="form-control" id="1" name="txt_soru" cols="30" rows="6"></textarea>
</div>


<div class="form-group">
  <label>Cevap A</label>
 <input class="form-control" name="cevapa" type="text" size="39" required />
 <label>Cevap B</label>
  <input class="form-control" name="cevapb" type="text" size="39" required />
  <label>Cevap C</label>
   <input class="form-control" name="cevapc" type="text" size="39" required />
   <label>Cevap D</label>
    <input class="form-control" name="cevapd" type="text" size="39" required />
 </div>
 
 <div class="form-group">
   <label>Doğru Cevap</label>
    <select class="form-control" name="slct_dogrucevap" required>
	<option value="A">A</option>
	<option value="B">B</option>
	<option value="C">C</option>
	<option value="D">D</option>
    </select>
</div>

  </div>

  
  <div class="form-group"><center>
<input class="btn btn-success" type="submit" value="Kaydet" /></center>
</div>
</form>
<?php
break;
case "testonay": 


$sorum = str_replace("'", "\'", $_POST["txt_soru"]);
$cevapam = str_replace("'", "\'", $_POST["cevapa"]);
$cevapbm = str_replace("'", "\'", $_POST["cevapb"]);
$cevapcm = str_replace("'", "\'", $_POST["cevapc"]);
$cevapdm = str_replace("'", "\'", $_POST["cevapd"]);
$dogrum = str_replace("'", "\'", $_POST["slct_dogrucevap"]);


$sqlf=("INSERT INTO mulakat (soru,cevap_a,cevap_b,cevap_c,cevap_d,dogru) VALUES ('$sorum','$cevapam','$cevapbm','$cevapcm','$cevapdm','$dogrum')");

$testkaydet = mysqli_query($con,$sqlf);
	
	if($testkaydet){
	echo '<script type="text/javascript">alert("Test ekleme işleminiz başarıyla gerçekleşti!");</script>';
	echo '<meta http-equiv="refresh" content="0;URL=testekle.php">';
		
	}
	else{
	echo '';
	
	 echo("Error description: " . mysqli_error($con));
}




break;
}
?>
		  	</div>
		  </div>
		</div>
    </div>
    <footer>
      </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>

<?php
}
?>