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
	
	  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

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
?>

<h3>Yeni Makale Ekle</h3>
<br>
<form action="makaleekle.php?adim=dersonay" method="post">
<div class="row">

 <div class="col-lg-3">
  <div class="form-group">
   <label>Ders Kategori</label>
    <select class="form-control" name="slct_ustkategorisec" required>
    <?php 
	$sql="SELECT * FROM kategori";
    $kategori_cek = mysqli_query($con,$sql);
	while($kategori_cek_yeni =  mysqli_fetch_array($kategori_cek)){
		
	echo '<option value="'.$kategori_cek_yeni["kat_id"].'">'.$kategori_cek_yeni["ad"].'</option>';
	}
	?>
    </select>
</div>
</div>

<div class="col-lg-3"> 	  
<div class="form-group">
    <label>Başlık</label>
 <input class="form-control" name="txt_kategoribasligi" type="text" size="39" required />
  </div>
  </div>
  
  <div class="col-lg-3">
  <div class="form-group">
    <label>Etiket</label>
   <input class="form-control" name="txt_etiket" type="text" size="39" required/>
</div>
  </div>
  
 <?php
    $sql="SELECT * FROM makale ORDER BY id DESC LIMIT 1";
    $idcek = mysqli_query($con,$sql);
	while($idcek_cek_yeni =  mysqli_fetch_array($idcek)){
	$idyeni=$idcek_cek_yeni['id']+1;
	$urladresi="katip.php?oku=$idyeni";
	}
  ?>
  
 <div class="col-lg-3">  
    <div class="form-group">
    <label>Link adresi:</label>
    <a href="../<?php echo "$urladresi"; ?>"><?php echo "$urladresi"; ?></a>
  </div>
  </div>


<div class="col-md-12">
<div class="form-group">
    <label>icerik</label>
	<textarea class="form-control" name="txt_icerik" rows="14"></textarea>
</div>
</div>

   

  </div>

  
  <div class="form-group"><center>
<input class="btn btn-success" type="submit" value="Kaydet" /></center>
</div>
</form>
<?php
break;
case "dersonay": 
$makale_kategorisi = $_POST["slct_ustkategorisec"];
$kategori_basligi = str_replace("'", "\'", $_POST["txt_kategoribasligi"]); /* + */
$makale_icerigi = str_replace("'", "\'", $_POST["txt_icerik"]);
$makale_etiket = str_replace("'", "\'", $_POST["txt_etiket"]);
$tarih = date("Y.m.d");

if(($kategori_basligi == "") or ($makale_icerigi == "")){ 
	echo '<script type="text/javascript">alert("Boş bıraktığınız alanlar var!");</script>';
	echo '<meta http-equiv="refresh" content="0;URL=makaleekle.php">';
}else{ 
$sql2="INSERT INTO makale (kat_id,baslik,icerik,etiket,tarih) VALUES ('$makale_kategorisi','$kategori_basligi','$makale_icerigi','$makale_etiket','$tarih')";
	$makale_kaydet = mysqli_query($con,$sql2);
	echo '<script type="text/javascript">alert("ekleme işleminiz başarıyla gerçekleşti!");</script>';
	echo '<meta http-equiv="refresh" content="0;URL=makaleekle.php">';
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