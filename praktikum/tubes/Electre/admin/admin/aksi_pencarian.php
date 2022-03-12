<?php 
session_start();

?>
	<?php  
	include_once("../library/koneksi.php");
	if(isset($_GET['q']) && $_GET['q']){  
	   
	    $q = $_GET['q'];  
	    $sql = "select * from data where nm_kontak like '%$q%' or npp like '%$q%' ";  
    $result = mysql_query($sql);  
	    if(mysql_num_rows($result) > 0){  
	        ?>  <?php include "tampil1.php";?>
        <?php  
    }else{  
	        echo 'Data not found!';  
	    }  
	}  
	?>  
