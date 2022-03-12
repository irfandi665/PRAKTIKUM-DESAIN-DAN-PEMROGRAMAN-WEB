       <div id="left">
            <ul id="menu" class="collapse">
			<?php if ($_SESSION[leveluser] == 'admin'){ ?>
<li class="panel active"><a href="index.php"><i class="icon-home"></i> Home</a></li>
			    <li><a href="?menu=dataproduk"><i class="icon-list"> </i> Data Produk</a></li>
				 <li><a href="?menu=datakriteria"><i class="icon-tags"> </i> Data Kriteria</a></li>
					<li><a href="?menu=proses_spk"><i class="icon-refresh"> </i> Proses SPK</a></li>
					<li><a href="?menu=lihat_hasil"><i class="icon-book"> </i> Laporan</a></li>
				<li><a href="logout.php"><i class="icon-signout"> </i>Logout</a></li>
		
				
                <?php }else if ($_SESSION[leveluser] == 'members'){ ?>
                <li class="panel active"><a href="index.php"><i class="icon-home"></i> Dashboard</a></li>
				
			<li><a href="?menu=data"><i class="icon-inbox"> </i> Data Produk</a></li>
			 
			  
			  <li><a href="logout.php"><i class="icon-signout"> </i>Logout</a></li>
                
                 <?php }else if ($_SESSION[leveluser] == 'superadmin'){ ?>
                <li class="panel active"><a href="index.php"><i class="icon-home"></i> Dashboard</a></li>
				
			<li><a href="?menu=data_admin"><i class="icon-inbox"> </i> List Data</a></li>
			 <li><a href="?menu=user"><i class="icon-user"> </i> Data User</a></li>
			 
			  
			  <li><a href="logout.php"><i class="icon-signout"> </i>Logout</a></li>
                
               
              
                <?php
							}
						?>
            </ul>
        </div>
		
		
		<div id="content">
            <div class="inner">
                <div class="row">
                    
                </div>
                <p></p>
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
						<?php
						if($_GET["menu"]){
							include_once("load.php");
						 }else if ($_SESSION[leveluser] == 'admin'){ 
							
									include "grafik.php";
						 }else{include "grafik.php";}
						?>
					</div>
					</div>	
					</div>
                </div>
                  <!--END BLOCK SECTION -->
                
            </div>
        </div>