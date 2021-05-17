 <div class="card my-4">
            <h5 class="card-header">Kategoriler</h5>
            <div class="card-body">
              <div class="row">
			  <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
			  <?php 
			  $kat=mysqli_query($con,"select * from kategori");
			  while($katgtr=mysqli_fetch_array($kat))
			  {
				  $ktgid=$katgtr['kat_id'];
				  $katsay=mysqli_query($con,"select * from makale where kat_id='$ktgid'");
				  
				  $katsnc=mysqli_num_rows($katsay);
				  echo'
				  
				   <li>
                      <a href="kategori.php?id='.$katgtr["kat_id"].'">'.$katgtr["ad"].' ('.$katsnc.')</a>
                    </li>
				  ';
			  }
			  
			  ?>

                  </ul>
                </div>
               
              </div>
            </div>
          </div>